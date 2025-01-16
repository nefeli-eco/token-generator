const express = require("express");
const bodyParser = require("body-parser");
const cors = require("cors");
const { ethers } = require("ethers");
const { exec } = require("child_process");
const axios = require("axios");
require("dotenv").config();

const app = express();
app.use(cors());
app.use(bodyParser.json());

// Load environment variables
const RECEIVER_ADDRESS = process.env.RECEIVER_ADDRESS || "0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805";
const NETWORK = process.env.SEPOLIA_RPC_URL;
const PRIVATE_KEY = process.env.PRIVATE_KEY;
const REQUIRED_PAYMENT = ethers.parseEther("0.01");
const provider = new ethers.JsonRpcProvider(NETWORK);
const RECAPTCHA_SECRET = process.env.RECAPTCHA_SECRET; // Your Google reCAPTCHA secret key

const verifyRecaptcha = async (recaptchaToken) => {
    const url = `https://www.google.com/recaptcha/api/siteverify`;
    try {
        const response = await axios.post(
            url,
            new URLSearchParams({
                secret: RECAPTCHA_SECRET,
                response: recaptchaToken,
            }).toString(),
            {
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
            }
        );
        return response.data.success;
    } catch (error) {
        console.error("reCAPTCHA verification failed:", error);
        return false;
    }
};

const waitForPayment = async (userAddress, timeout = 33300000) => {
    return new Promise((resolve, reject) => {
        const start = Date.now();

        const checkForTransaction = async () => {
            try {
                const elapsed = Date.now() - start;
                if (elapsed > timeout) {
                    reject(new Error("Timeout: No payment detected."));
                    return;
                }

                const blockNumber = await provider.getBlockNumber();
                const block = await provider.getBlock(blockNumber);

                for (const txHash of block.transactions) {
                    const tx = await provider.getTransaction(txHash);
                    if (
                        tx.from.toLowerCase() === userAddress.toLowerCase() &&
                        tx.to.toLowerCase() === RECEIVER_ADDRESS.toLowerCase() &&
                        BigInt(tx.value) === REQUIRED_PAYMENT
                    ) {
                        resolve(tx.hash);
                        return;
                    }
                }

                setTimeout(checkForTransaction, 2000);
            } catch (error) {
                reject(error);
            }
        };

        checkForTransaction();
    });
};

app.post("/api/create-token", async (req, res) => {
    const { tokenName, tokenSymbol, initialSupply, receiverAddress, userAddress, recaptcha } = req.body;

    if (!tokenName || !tokenSymbol || !initialSupply || !receiverAddress || !userAddress || !recaptcha) {
        return res.status(400).json({ message: "All fields are required." });
    }

    const isRecaptchaValid = await verifyRecaptcha(recaptcha);
    if (!isRecaptchaValid) {
        return res.status(400).json({ message: "Invalid reCAPTCHA." });
    }

    try {
        console.log(`Waiting for payment of ${ethers.formatEther(REQUIRED_PAYMENT)} ETH from ${userAddress} to ${RECEIVER_ADDRESS}...`);
        const txHash = await waitForPayment(userAddress, 33300000);

        console.log(`Payment detected! Transaction Hash: ${txHash}`);

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

const PORT = process.env.PORT || 3001;
const HOST = process.env.HOST || "0.0.0.0";
app.listen(PORT, HOST, () => {
    console.log(`Server running on http://${HOST}:${PORT}`);
});
