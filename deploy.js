const solc = require("solc");
const fs = require("fs");
const { ethers } = require("ethers");
require("dotenv").config();

const networks = {
    mainnet: process.env.MAINNET_RPC_URL,
    goerli: process.env.GOERLI_RPC_URL,
    sepolia: process.env.SEPOLIA_RPC_URL,
};

const main = async () => {
    const args = process.argv.slice(2);
    const network = args[0] || "goerli"; // Default to Goerli
    const tokenName = args[1] || "MyToken";
    const tokenSymbol = args[2] || "MTK";
    const totalSupply = args[3]; // Required
    const tokenDecimals = parseInt(args[4] || "18", 10); // Default 18
    const initialSupplyRecipient = args[5]; // Required

    if (!networks[network]) {
        console.error(`Unsupported network: ${network}`);
        console.error("Supported networks: mainnet, goerli, sepolia");
        process.exit(1);
    }

    if (!totalSupply || isNaN(totalSupply)) {
        console.error("Invalid or missing total supply.");
        process.exit(1);
    }

    if (!initialSupplyRecipient || !ethers.isAddress(initialSupplyRecipient)) {
        console.error("Invalid or missing recipient address for initial supply.");
        console.error(`Provided address: ${initialSupplyRecipient}`);
        process.exit(1);
    }

    console.log(`Deploying to ${network}...`);
    const provider = new ethers.JsonRpcProvider(networks[network]);
    const wallet = new ethers.Wallet(process.env.PRIVATE_KEY, provider);

    const contractPath = "./MyToken.sol";
    const source = fs.readFileSync(contractPath, "utf8");

    const input = {
        language: "Solidity",
        sources: {
            "MyToken.sol": {
                content: source,
            },
        },
        settings: {
            outputSelection: {
                "*": {
                    "*": ["abi", "evm.bytecode.object"],
                },
            },
        },
    };

    console.log("Compiling contract...");
    const output = JSON.parse(solc.compile(JSON.stringify(input)));
    const abi = output.contracts["MyToken.sol"]["MyToken"].abi;
    const bytecode = output.contracts["MyToken.sol"]["MyToken"].evm.bytecode.object;

    console.log("Contract compiled successfully.");

    console.log("Deploying contract...");
    const factory = new ethers.ContractFactory(abi, bytecode, wallet);

    const initialSupplyWithDecimals = ethers.parseUnits(totalSupply, tokenDecimals);

    const contract = await factory.deploy(
        tokenName,           // Token name
        tokenSymbol,         // Token symbol
        tokenDecimals,       // Decimals
        initialSupplyWithDecimals, // Total supply with decimals
        initialSupplyRecipient // Address to receive the initial supply
    );

    console.log(`Contract deployed to ${network} at address: ${contract.target}`);
    console.log(`Initial supply of ${totalSupply} ${tokenSymbol} assigned to: ${initialSupplyRecipient}`);
};

main().catch((error) => {
    console.error("Error:", error);
    process.exit(1);
});
