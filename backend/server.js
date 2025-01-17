const express = require("express");
const bodyParser = require("body-parser");
const cors = require("cors");
const { ethers } = require("ethers");
const { exec } = require("child_process");
require("dotenv").config();

const app = express();
app.use(cors());
app.use(bodyParser.json());

// Load environment variables
const RECEIVER_ADDRESS = process.env.RECEIVER_ADDRESS || "0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805";
const NETWORK = process.env.DEPLOY_ENV === "production" ? process.env.MAINNET_RPC_URL : process.env.SEPOLIA_RPC_URL;
const PRIVATE_KEY = process.env.PRIVATE_KEY;
const REQUIRED_PAYMENT = ethers.parseEther("0.01");
const provider = new ethers.JsonRpcProvider(NETWORK);

// IP restriction cache
const submissionCache = new Map();
const TIME_LIMIT = 5 * 60 * 1000; // 5 minutes in milliseconds

const waitForPayment = async (userAddress, timeout = 33300000) => {
    return new Promise(async (resolve, reject) => {
        const start = Date.now();
        const checkedBlocks = new Set(); // Track checked blocks
        const missingBlocks = [];
        let startingBlockNumber = await provider.getBlockNumber();

        console.log(`Starting block number: ${startingBlockNumber}`);

        const checkForTransaction = async () => {
            try {
                const elapsed = Date.now() - start;
                console.log(`Elapsed time: ${elapsed} ms (Timeout: ${timeout} ms)`);

                if (elapsed > timeout) {
                    console.log("Timeout exceeded. No payment detected.");
                    reject(new Error("Timeout: No payment detected."));
                    return;
                }

                const currentBlockNumber = await provider.getBlockNumber();

                for (let blockNumber = startingBlockNumber; blockNumber <= currentBlockNumber; blockNumber++) {
                    if (checkedBlocks.has(blockNumber)) continue;

                    console.log(`Checking block ${blockNumber} for transactions...`);
                    const block = await provider.getBlockWithTransactions(blockNumber);

                    if (!block) {
                        console.log(`Block ${blockNumber} not found. Retrying...`);
                        missingBlocks.push(blockNumber);
                        continue;
                    }

                    checkedBlocks.add(blockNumber);

                    for (const tx of block.transactions) {
                        console.log(`Transaction found in block ${blockNumber}:`);
                        console.log(`- Transaction Hash: ${tx.hash}`);
                        console.log(`- From: ${tx.from}`);
                        console.log(`- To: ${tx.to}`);
                        console.log(`- Value: ${ethers.formatEther(tx.value)} ETH`);
                        console.log(`- Expected Payment: ${ethers.formatEther(REQUIRED_PAYMENT)} ETH`);

                        if (
                            tx.from.toLowerCase() === userAddress.toLowerCase() &&
                            tx.to.toLowerCase() === RECEIVER_ADDRESS.toLowerCase() &&
                            BigInt(tx.value) === REQUIRED_PAYMENT
                        ) {
                            console.log(`Payment detected! Transaction Hash: ${tx.hash}`);
                            resolve(tx.hash);
                            return;
                        } else {
                            console.log(`- Status: Transaction does not match the required criteria.`);
                        }
                    }
                }

                setTimeout(checkForTransaction, 2000); // Wait for the next iteration
            } catch (error) {
                console.error("Error checking transactions:", error);
                reject(error);
            }
        };

        checkForTransaction();
    });
};

app.post("/create-token", async (req, res) => {
    const clientIp = req.headers["x-forwarded-for"] || req.socket.remoteAddress;

    // Check IP restriction
    if (submissionCache.has(clientIp)) {
        const lastSubmissionTime = submissionCache.get(clientIp);
        const currentTime = Date.now();

        if (currentTime - lastSubmissionTime < TIME_LIMIT) {
            return res.status(429).json({
                message: "Too many submissions. Please wait 5 minutes before trying again.",
            });
        }
    }

    // Update submission cache for the current IP
    submissionCache.set(clientIp, Date.now());

    const { tokenName, tokenSymbol, initialSupply, receiverAddress, userAddress } = req.body;

    if (!tokenName || !tokenSymbol || !initialSupply || !receiverAddress || !userAddress) {
        return res.status(400).json({ message: "All fields are required." });
    }

    try {
        console.log(`Waiting for payment of ${ethers.formatEther(REQUIRED_PAYMENT)} ETH from ${userAddress} to ${RECEIVER_ADDRESS}...`);
        const txHash = await waitForPayment(userAddress, 33300000);

        console.log(`Payment detected! Transaction Hash: ${txHash}`);

        // Run deployment script
        exec(
            `node deploy.js sepolia "${tokenName}" "${tokenSymbol}" ${initialSupply} 18 "${receiverAddress}"`,
            (error, stdout, stderr) => {
                if (error) {
                    console.error(`Error: ${error.message}`);
                    return res.status(500).json({ message: "Failed to create the token." });
                }

                const match = stdout.match(/Contract deployed to sepolia at address: (0x[a-fA-F0-9]{40})/);
                if (match) {
                    return res.json({
                        transactionHash: match[1],
                        paymentTransactionHash: txHash,
                    });
                } else {
                    console.error(`Deployment Error: ${stderr}`);
                    return res.status(500).json({ message: "Deployment script failed." });
                }
            }
        );
    } catch (error) {
        console.error(error.message);
        res.status(400).json({ message: error.message });
    }
});

// Start the server
const PORT = process.env.PORT || 3001;
const HOST = process.env.HOST || "0.0.0.0";
app.listen(PORT, HOST, () => {
    console.log(`Server running on http://${HOST}:${PORT}`);
});
