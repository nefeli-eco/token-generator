const waitForPayment = async (userAddress, timeout = 33300000) => {
    return new Promise((resolve, reject) => {
        const start = Date.now();

        const checkForTransaction = async () => {
            try {
                const elapsed = Date.now() - start; // Elapsed time
                console.log(`Elapsed time: ${elapsed} ms (Timeout: ${timeout} ms)`);

                // Check if the timeout is exceeded
                if (elapsed > timeout) {
                    console.log("Timeout exceeded. No payment detected.");
                    reject(new Error("Timeout: No payment detected."));
                    return;
                }

                const blockNumber = await provider.getBlockNumber(); // Get the latest block number
                const targetBlockNumber = blockNumber - 3; // Process blocks 2 blocks behind the current block
                const block = await provider.getBlock(targetBlockNumber); // Fetch block details

                console.log(`Checking block ${targetBlockNumber} for transactions...`);

                // Loop through transaction hashes in the block
                for (const txHash of block.transactions) {
                    const tx = await provider.getTransaction(txHash); // Fetch transaction details
                    console.log(`Transaction found: ${tx.hash}`);
                    console.log(`From: ${tx.from} | To: ${tx.to} | Value: ${ethers.formatEther(tx.value)}`);
                    console.log(`Expected Payment: ${ethers.formatEther(REQUIRED_PAYMENT)}`);

                    if (
                        tx.from.toLowerCase() === userAddress.toLowerCase() &&
                        tx.to.toLowerCase() === RECEIVER_ADDRESS.toLowerCase() &&
                        BigInt(tx.value) === REQUIRED_PAYMENT
                    ) {
                        console.log(`Payment detected! Transaction Hash: ${tx.hash}`);
                        resolve(tx.hash); // Transaction found, return the hash
                        return;
                    } else {
                        console.log("Transaction does not match the required criteria.");
                    }
                }

                // Wait for the next block and check again
                setTimeout(checkForTransaction, 2000);
            } catch (error) {
                console.error("Error checking transactions:", error);
                reject(error);
            }
        };

        checkForTransaction();
    });
};
