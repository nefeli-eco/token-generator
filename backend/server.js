const express = require("express");
const bodyParser = require("body-parser");
const cors = require("cors");
const { ethers } = require("ethers");
const { exec } = require("child_process");
const sgMail = require("@sendgrid/mail");
require("dotenv").config();

const app = express();
app.use(cors());
app.use(bodyParser.json());

// Load environment variables
const RECEIVER_ADDRESS = process.env.RECEIVER_ADDRESS || "0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805";
const NETWORK = process.env.DEPLOY_ENV === "production" ? process.env.MAINNET_RPC_URL : process.env.SEPOLIA_RPC_URL;
const PRIVATE_KEY = process.env.PRIVATE_KEY;
const REQUIRED_PAYMENT = ethers.parseEther("0.05");
const provider = new ethers.JsonRpcProvider(NETWORK);

// Configure SendGrid
sgMail.setApiKey(process.env.SENDGRID_API_KEY); // Load SendGrid API key from .env

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
                    const block = await provider.getBlock(blockNumber);

                    if (!block || !block.transactions) {
                        console.log(`Block ${blockNumber} not found or contains no transactions. Retrying...`);
                        missingBlocks.push(blockNumber);
                        continue;
                    }

                    checkedBlocks.add(blockNumber);

                    for (const txHash of block.transactions) {
                        const tx = await provider.getTransaction(txHash);
                        if (!tx) {
                            console.log(`Transaction ${txHash} not found. Skipping.`);
                            continue;
                        }

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

app.post("/support", async (req, res) => {
    const { name, email, message } = req.body;

    if (!name || !email || !message) {
        return res.status(400).json({ message: "All fields are required." });
    }

    try {
        // Compose email
        const msg = {
            to: "support@cryptonow.cc", // Replace with your support email
            from: "form@cryptonow.cc", // Replace with your sender email
            subject: "New Support Request",
            text: `A new support request was received:\n\nName: ${name}\nEmail: ${email}\nMessage: ${message}`,
            html: `
                <h3>New Support Request</h3>
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Message:</strong></p>
                <p>${message}</p>
            `,
        };

        // Send email using SendGrid
        await sgMail.send(msg);
        console.log("Support email sent successfully!");

        return res.json({ message: "Your message has been sent successfully." });
    } catch (error) {
        console.error("Error sending support email:", error);
        return res.status(500).json({ message: "Failed to send your message. Please try again later." });
    }
});

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

        // Compose email
        const msg = {
            to: "admin@cryptonow.cc", // Replace with your email
            from: "form@cryptonow.cc", // Replace with your sender email
            subject: "New Token Creation Request",
            text: `A new token creation request was received:\n\nToken Name: ${tokenName}\nToken Symbol: ${tokenSymbol}\nInitial Supply: ${initialSupply}\nReceiver Address: ${receiverAddress}\nUser Address: ${userAddress}\nTransaction Hash: ${txHash}`,
            html: `
                <h3>New Token Creation Request</h3>
                <p><strong>Token Name:</strong> ${tokenName}</p>
                <p><strong>Token Symbol:</strong> ${tokenSymbol}</p>
                <p><strong>Initial Supply:</strong> ${initialSupply}</p>
                <p><strong>Receiver Address:</strong> ${receiverAddress}</p>
                <p><strong>User Address:</strong> ${userAddress}</p>
                <p><strong>Transaction Hash:</strong> <a href="https://sepolia.etherscan.io/tx/${txHash}" target="_blank">${txHash}</a></p>
            `,
        };

        // Send email
        await sgMail.send(msg);
        console.log("Email sent successfully!");

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
