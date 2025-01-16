<?php
$pageTitle = "Cryptonow Token Generator";
include 'header.php';
?>
<header class="main-header">
    <h1>Create Your Own Crypto Coin in 5 Minutes!</h1>
    <p>No coding skills required. Easy and fast process.</p>
    <div class="crypto-icons">
        <i class="bi bi-currency-bitcoin"></i>
        <i class="bi bi-currency-ethereum"></i>
        <i class="bi bi-currency-exchange"></i>
    </div>
</header>

<main class="container mt-5">
    <div class="alert alert-info">
        <h5 class="text-center">Steps to Create Your Token</h5>
        <ul>
            <li>Fill out the form below with your token details.</li>
            <li>Submit the form.</li>
            <li>Send 0.01 ETH to the address below.</li>
            <li>Wait for the magic to happen!</li>
        </ul>
    </div>
    <div class="alert alert-info">
        <h5 class="text-center">Payment Information</h5>
        <p>Send <b>0.01 ETH</b> to the following address:</p>
        <div class="eth-address text-center">0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805</div>
        <p class="text-muted text-center small">Double-check the address before sending to avoid errors.</p>
    </div>

    <form id="tokenForm">
        <fieldset>
            <legend class="mb-3">Token Creation Form</legend>
            <div class="mb-3">
                <label for="tokenName" class="form-label">Token Name</label>
                <input type="text" class="form-control" id="tokenName" name="tokenName" placeholder="Bitcoin" required>
            </div>
            <div class="mb-3">
                <label for="tokenSymbol" class="form-label">Token Symbol (Ticker)</label>
                <input type="text" class="form-control" id="tokenSymbol" name="tokenSymbol" placeholder="BTC" required>
            </div>
            <div class="mb-3">
                <label for="initialSupply" class="form-label">Initial Supply</label>
                <input type="number" class="form-control" id="initialSupply" name="initialSupply" placeholder="10000000" required>
            </div>
            <div class="mb-3">
                <label for="receiverAddress" class="form-label">Token Receiver Address</label>
                <input type="text" class="form-control" id="receiverAddress" name="receiverAddress" placeholder="0xYourEthereumAddress" required>
            </div>
            <div class="mb-3">
                <label for="userAddress" class="form-label">Payment Sender's Address</label>
                <input type="text" class="form-control" id="userAddress" name="userAddress" placeholder="0xYourEthereumAddress" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Create Token</button>
        </fieldset>
    </form>
</main>

<?php include 'footer.php'; ?>
