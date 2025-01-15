const { ethers } = require("ethers");

// Replace with your Sepolia RPC URL and wallet address
const RPC_URL = "https://sepolia.infura.io/v3/a2e742a9ca1042f6b24f81cf6ff12263";
const address = "0x99aA3D4e2EF1413E42E80E4ab9256A7612e8DBA8";

const main = async () => {
    const provider = new ethers.JsonRpcProvider(RPC_URL);
    const balance = await provider.getBalance(address);
    console.log(`Balance: ${ethers.formatEther(balance)} ETH`);
};

main();