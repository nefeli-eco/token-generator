const express = require("express");
const bodyParser = require("body-parser");
const cors = require("cors");
const { ethers } = require("ethers");
const { exec } = require("child_process");
require("dotenv").config(); // Load .env variables

const app = express();
app.use(cors());
app.use(bodyParser.json());

const RECEIVER_ADDRESS = process.env.RECEIVER_ADDRESS || "0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805";
const NETWORK = process.env.SEPOLIA_RPC_URL; // Sepolia RPC URL from .env
const PRIVATE_KEY = process.env.PRIVATE_KEY; // Private key from .env
const provider = new ethers.JsonRpcProvider(NETWORK);

app.post("/api/create-token", async (req, res) => {
    const { tokenName, tokenSymbol, initialSupply, receiverAddress } = req.body;

    if (!tokenName || !tokenSymbol || !initialSupply || !receiverAddress) {
        return res.status(400).json({ message: "All fields are required." });
    }

    try {
        // Verify ETH payment
        const balance = await provider.getBalance(RECEIVER_ADDRESS);
        if (balance.lte(ethers.parseEther("0.01"))) {
            return res.status(400).json({ message: "No ETH payment detected." });
        }

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
                    return res.json({ transactionHash: match[1] });
                } else {
                    console.error(`Deployment Error: ${stderr}`);
                    return res.status(500).json({ message: "Deployment script failed." });
                }
            }
        );
    } catch (error) {
        console.error(error);
        res.status(500).json({ message: "An unexpected error occurred." });
    }
});

const PORT = 3001;
app.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
});
