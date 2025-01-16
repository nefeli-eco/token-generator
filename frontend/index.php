<?php
$pageTitle = "Cryptonow Token Generator";
include 'header.php';
?>
<body>
    <header class="main-header">
        <h1>Create Your Own Crypto Coin in 5 Minutes!</h1>
        <p>No coding skills required. Easy and fast process.</p>
        <div class="crypto-icons" aria-label="Cryptocurrency Icons">
            <i class="bi bi-currency-bitcoin" aria-hidden="true"></i>
            <i class="bi bi-currency-ethereum" aria-hidden="true"></i>
            <i class="bi bi-currency-exchange" aria-hidden="true"></i>
        </div>
        <a href="/qna.php" class="btn btn-outline-light mt-3">Learn More in Q&A</a>
    </header>

    <main class="container mt-5">
        <section aria-labelledby="steps-section">
            <div class="alert alert-info">
                <h5 id="steps-section" class="text-center">Steps to Create Your Token</h5>
                <ul>
                    <li>Fill out the form below with your token details.</li>
                    <li>Submit the form.</li>
                    <li>Send 0.01 ETH to the address below.</li>
                    <li>Wait for the magic to happen!</li>
                </ul>
            </div>
        </section>

        <section aria-labelledby="payment-section">
            <div class="alert alert-info">
                <h5 id="payment-section" class="text-center">Payment Information</h5>
                <p>Send <b>0.01 ETH</b> to the following address:</p>
                <div class="eth-address" aria-label="Ethereum Payment Address">0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805</div>
                <p class="text-muted text-center small">Double-check the address before sending to avoid errors.</p>
            </div>
        </section>

        <form id="tokenForm" aria-labelledby="form-section">
            <fieldset>
                <legend id="form-section" class="mb-3">Token Creation Form</legend>
                <div class="mb-3">
                    <label for="tokenName" class="form-label">Token Name</label>
                    <input type="text" class="form-control" id="tokenName" name="tokenName" placeholder="Bitcoin" required aria-required="true">
                </div>
                <div class="mb-3">
                    <label for="tokenSymbol" class="form-label">Token Symbol (Ticker)</label>
                    <input type="text" class="form-control" id="tokenSymbol" name="tokenSymbol" placeholder="BTC" required aria-required="true">
                </div>
                <div class="mb-3">
                    <label for="initialSupply" class="form-label">Initial Supply</label>
                    <input type="number" class="form-control" id="initialSupply" name="initialSupply" placeholder="10000000" required aria-required="true">
                </div>
                <div class="mb-3">
                    <label for="receiverAddress" class="form-label">Token Receiver Address</label>
                    <input type="text" class="form-control" id="receiverAddress" name="receiverAddress" placeholder="0xYourEthereumAddress" required aria-required="true">
                </div>
                <div class="mb-3">
                    <label for="userAddress" class="form-label">Payment Sender's Address</label>
                    <input type="text" class="form-control" id="userAddress" name="userAddress" placeholder="0xYourEthereumAddress" required aria-required="true">
                </div>
                <button type="submit" class="btn btn-primary w-100">Create Token</button>
            </fieldset>
        </form>

        <div id="statusMessage" class="mt-4" role="status" aria-live="polite"></div>

    </main>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('tokenForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const statusMessage = document.getElementById('statusMessage');
            statusMessage.innerHTML = '';
            const formData = {
                tokenName: document.getElementById('tokenName').value,
                tokenSymbol: document.getElementById('tokenSymbol').value,
                initialSupply: document.getElementById('initialSupply').value,
                receiverAddress: document.getElementById('receiverAddress').value,
                userAddress: document.getElementById('userAddress').value,
            };

            try {
                statusMessage.innerHTML = '<div class="alert alert-info">Waiting for payment confirmation...</div>';
                const response = await axios.post('http://api.cryptonow.cc:3001/api/create-token', formData);
                const txHash = response.data.transactionHash;
                statusMessage.innerHTML = `<div class="alert alert-success">Your token was created! Transaction Hash: <a href="https://sepolia.etherscan.io/tx/${txHash}" target="_blank">${txHash}</a></div>`;
            } catch (err) {
                statusMessage.innerHTML = `<div class="alert alert-danger">Error: ${err.message}</div>`;
            }
        });
    </script>
</body>
</html>
