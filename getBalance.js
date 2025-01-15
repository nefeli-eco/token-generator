const { ethers } = require("ethers");

// Replace with your RPC provider
const provider = new ethers.JsonRpcProvider("https://sepolia.infura.io/v3/a2e742a9ca1042f6b24f81cf6ff12263");

const tokenAddress = "0x354aAF34fa2dA181c999d0ea4E1B2c4f8e589d1B";
const walletAddress = "0x99aA3D4e2EF1413E42E80E4ab9256A7612e8DBA8";

// ABI with only balanceOf and decimals
const abi = [
  "function balanceOf(address owner) view returns (uint256)",
  "function decimals() view returns (uint8)"
];

async function main() {
  try {
    const tokenContract = new ethers.Contract(tokenAddress, abi, provider);
    const balance = await tokenContract.balanceOf(walletAddress);
    const decimals = await tokenContract.decimals();
    console.log(`Balance: ${ethers.formatUnits(balance, decimals)} NFLT`);
  } catch (error) {
    console.error("Error fetching balance:", error.message);
  }
}

main();
