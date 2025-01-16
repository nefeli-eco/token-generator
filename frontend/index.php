<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Create your own ERC-20 cryptocurrency token in just 5 minutes with Cryptonow. No coding skills required.">
    <meta name="keywords" content="ERC-20, cryptocurrency, token creation, crypto coin, blockchain, Ethereum, Bitcoin, crypto, token">
    <meta name="author" content="Cryptonow">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://cryptonow.cc/">
    <title>Cryptonow Token Generator</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background: #1a1a1a;
            font-family: 'Roboto', sans-serif;
            color: #e0e0e0;
        }
        .main-header {
            background: linear-gradient(120deg, #5e35b1, #4527a0);
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        .main-header h1 {
            font-size: 2.8rem;
            font-weight: bold;
        }
        .main-header p {
            font-size: 1.4rem;
        }
        .crypto-icons {
            font-size: 3rem;
            color: #fbc02d;
            margin: 20px 0;
        }
        .steps-section {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }
        .step-card {
            background: #212121;
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            flex: 1 1 calc(25% - 1rem);
            text-align: center;
            min-width: 200px;
        }
        .step-card i {
            font-size: 3rem;
            color: #fbc02d;
            margin-bottom: 10px;
        }
        .payment-section {
            background-color: #212121;
            padding: 20px;
            border-radius: 10px;
            color: #ffffff;
            margin-bottom: 30px;
        }
        .payment-section h5 {
            color: #fbc02d;
        }
        .payment-section .eth-address {
            font-family: monospace;
            background: #311b92;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            color: #fbc02d;
        }
        .faq-slider .carousel-item {
            text-align: center;
            color: white;
        }
        footer {
            background: #121212;
            color: #bdbdbd;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: #fbc02d;
            text-decoration: none;
        }
    </style>
</head>
<body>

<header class="main-header">
    <h1>Create Your Own Crypto Coin in 5 Minutes!</h1>
    <p aria-live="polite">No coding skills required. Easy and fast process.</p>
    <div class="crypto-icons" aria-label="Cryptocurrency Icons">
        <i class="material-icons">currency_bitcoin</i>
        <i class="material-icons">currency_ethereum</i>
        <i class="material-icons">account_balance_wallet</i>
    </div>
</header>

<main class="container">
    <!-- Steps Section -->
    <section class="steps-section" aria-labelledby="steps-section">
        <h2 id="steps-section" class="center-align">Steps to Create Your Token</h2>
        <div class="step-card">
            <i class="material-icons">edit</i>
            <p>Fill out the form with your token details.</p>
        </div>
        <div class="step-card">
            <i class="material-icons">send</i>
            <p>Submit the form.</p>
        </div>
        <div class="step-card">
            <i class="material-icons">account_balance</i>
            <p>Make your payment.</p>
        </div>
        <div class="step-card">
            <i class="material-icons">check_circle</i>
            <p>Wait for the magic to happen!</p>
        </div>
    </section>

    <!-- Payment Section -->
    <section class="payment-section" aria-labelledby="payment-section">
        <h5 id="payment-section">Payment Information</h5>
        <p>Send <strong>0.04 ETH + network fees</strong> to the following address:</p>
        <div class="eth-address">0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805</div>
        <p class="small-text">Please double-check the address before sending your payment to avoid any errors.</p>
    </section>

    <!-- FAQ Section -->
    <section class="faq-slider" aria-labelledby="faq-section">
        <h2 id="faq-section" class="center-align">Frequently Asked Questions</h2>
        <div class="carousel carousel-slider center">
            <div class="carousel-item">
                <h5>What is Cryptonow?</h5>
                <p>Cryptonow is a platform that allows you to create your own ERC-20 tokens easily and quickly without requiring any coding skills.</p>
            </div>
            <div class="carousel-item">
                <h5>How do I create my token?</h5>
                <p>You simply need to fill out the form on our homepage with your desired token details, send the payment, and our automated system will handle the rest.</p>
            </div>
            <div class="carousel-item">
                <h5>What payment methods are accepted?</h5>
                <p>We currently accept payments in Ethereum (ETH). The payment address is displayed on the homepage.</p>
            </div>
            <div class="carousel-item">
                <h5>How long does it take to create a token?</h5>
                <p>Once your payment is confirmed on the blockchain, your token will be created within a few minutes.</p>
            </div>
            <div class="carousel-item">
                <h5>What are the costs involved?</h5>
                <p>The cost to create a token is **0.04 ETH** + network fees, which covers all processing and deployment fees.</p>
            </div>
            <div class="carousel-item">
                <h5>Can I create tokens on other blockchains?</h5>
                <p>Currently, Cryptonow supports the Ethereum blockchain only. We plan to add support for other blockchains in the future.</p>
            </div>
            <div class="carousel-item">
                <h5>Who owns the token after it is created?</h5>
                <p>Once the token is created, it belongs to the wallet address you specified as the receiver during the token creation process.</p>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const elems = document.querySelectorAll('.collapsible');
        M.Collapsible.init(elems, { accordion: false });
    });

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
            statusMessage.innerHTML = '<div class="card-panel yellow lighten-4">Waiting for payment confirmation...</div>';
            const response = await axios.post('http://api.cryptonow.cc:3001/api/create-token', formData);
            const txHash = response.data.transactionHash;
            statusMessage.innerHTML = `<div class="card-panel green lighten-4">Your token was created! Transaction Hash: <a href="https://sepolia.etherscan.io/tx/${txHash}" target="_blank">${txHash}</a></div>`;
        } catch (err) {
            statusMessage.innerHTML = `<div class="card-panel red lighten-4">Error: ${err.message}</div>`;
        }
    });
</script>

</body>
</html>
