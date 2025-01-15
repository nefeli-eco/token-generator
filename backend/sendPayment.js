const { ethers } = require("ethers");
require("dotenv").config();

// Load environment variables
const PRIVATE_KEY = process.env.PRIVATE_KEY; // Private key of your wallet
const TESTNET_RPC_URL = process.env.SEPOLIA_RPC_URL; // Testnet RPC URL (e.g., Sepolia)

// Retrieve command-line arguments for recipient address and amount
const args = process.argv.slice(2);
const recipientAddress = args[0]; // First argument: Recipient address
const amountInEth = args[1]; // Second argument: Amount to send (in ETH)

if (!recipientAddress || !amountInEth) {
    console.error("Usage: node sendEth.js <recipientAddress> <amountInEth>");
    process.exit(1);
}

const main = async () => {
    try {
        // Connect to the testnet using a JSON RPC provider
        const provider = new ethers.JsonRpcProvider(TESTNET_RPC_URL);

        // Create a wallet instance
        const wallet = new ethers.Wallet(PRIVATE_KEY, provider);

        // Display sender's balance
        const balance = await provider.getBalance(wallet.address);
        console.log(`Sender's balance: ${ethers.formatEther(balance)} ETH`);

        // Ensure the sender has enough ETH
        if (balance < ethers.parseEther(amountInEth)) {
            console.error("Insufficient funds!");
            return;
        }

        // Create the transaction
        const tx = {
            to: recipientAddress,
            value: ethers.parseEther(amountInEth), // Convert ETH to wei
            gasLimit: 21000, // Minimum gas for ETH transfers
        };

        console.log("Sending transaction...");
        // Send the transaction
        const txResponse = await wallet.sendTransaction(tx);

        console.log(`Transaction sent! Hash: ${txResponse.hash}`);
        console.log("Waiting for transaction confirmation...");

        // Wait for the transaction to be mined
        const txReceipt = await txResponse.wait();
        console.log(`Transaction confirmed! Block Number: ${txReceipt.blockNumber}`);
    } catch (error) {
        console.error("Error sending transaction:", error);
    }
};

main();
