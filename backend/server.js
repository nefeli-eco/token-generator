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
const NETWORK = process.env.SEPOLIA_RPC_URL; // Sepolia RPC URL from .env
const PRIVATE_KEY = process.env.PRIVATE_KEY; // Private key from .env
const REQUIRED_PAYMENT = ethers.parseEther("0.01"); // 0.01 ETH in wei
const provider = new ethers.JsonRpcProvider(NETWORK);

const waitForPayment = async (userAddress, timeout = 3000000) => {
    return new Promise((resolve, reject) => {
        const start = Date.now();

        const checkForTransaction = async () => {
            try {
                const latestBlockNumber = await provider.getBlockNumber();
                console.log(`Checking transactions in blocks ${latestBlockNumber - 5} to ${latestBlockNumber}...`);

                for (let i = latestBlockNumber; i > latestBlockNumber - 5; i--) {
                    if (i < 0) break; // Stop if block number goes negative

                    const block = await provider.getBlockWithTransactions(i);
                    console.log(`Scanning block ${block.number}, with ${block.transactions.length} transactions.`);

                    for (const tx of block.transactions) {
                        console.log(`Transaction found: ${tx.hash}`);
                        console.log(`From: ${tx.from} | To: ${tx.to} | Value: ${ethers.formatEther(tx.value)} ETH`);

                        if (
                            tx.from.toLowerCase() === userAddress.toLowerCase() &&
                            tx.to.toLowerCase() === RECEIVER_ADDRESS.toLowerCase() &&
                            BigInt(tx.value) === REQUIRED_PAYMENT
                        ) {
                            console.log(`Payment detected! Transaction Hash: ${tx.hash}`);
                            resolve(tx.hash); // Transaction found, return the hash
                            return;
                        }
                    }
                }

                if (Date.now() - start > timeout) {
                    console.log("Timeout exceeded. No payment detected.");
                    reject(new Error("Timeout: No payment detected."));
                } else {
                    setTimeout(checkForTransaction, 1000); // Wait for the next check
                }
            } catch (error) {
                console.error("Error checking transactions:", error);
                reject(error);
            }
        };

        checkForTransaction();
    });
};




app.post("/api/create-token", async (req, res) => {
    const { tokenName, tokenSymbol, initialSupply, receiverAddress, userAddress } = req.body;

    if (!tokenName || !tokenSymbol || !initialSupply || !receiverAddress || !userAddress) {
        return res.status(400).json({ message: "All fields are required." });
    }

    try {
        // Wait for the user to send the required payment
        console.log(`Waiting for payment of 0.01 ETH from ${userAddress} to ${RECEIVER_ADDRESS}...`);
        const txHash = await waitForPayment(userAddress, 60000); // 60 seconds timeout

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
                    return res.json({ transactionHash: match[1], paymentTransactionHash: txHash });
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
