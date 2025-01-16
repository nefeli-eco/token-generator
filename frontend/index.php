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
        .card {
            background: #212121;
            color: #ffffff;
            border-radius: 10px;
        }
        .collapsible-header {
            background-color: #5e35b1;
            color: white;
            font-weight: bold;
        }
        .collapsible-body {
            background-color: #2e2e2e;
            color: #bdbdbd;
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
    <section class="form-section" aria-labelledby="steps-section">
        <div class="card">
            <div class="card-content">
                <span id="steps-section" class="card-title">Steps to Create Your Token</span>
                <ol>
                    <li>Fill out the form below with your token details.</li>
                    <li>Submit the form.</li>
                    <li>Make your payment.</li>
                    <li>Wait for the magic to happen!</li>
                </ol>
            </div>
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
    <section class="faq-section" aria-labelledby="faq-section">
        <h5 id="faq-section" class="card-title">Frequently Asked Questions</h5>
        <ul class="collapsible expandable">
            <li>
                <div class="collapsible-header"><i class="material-icons">help_outline</i>What is Cryptonow?</div>
                <div class="collapsible-body"><span>Cryptonow is a platform that allows you to create your own ERC-20 tokens easily and quickly without requiring any coding skills.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">help_outline</i>How do I create my token?</div>
                <div class="collapsible-body"><span>You simply need to fill out the form on our homepage with your desired token details, send the payment, and our automated system will handle the rest.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">help_outline</i>What payment methods are accepted?</div>
                <div class="collapsible-body"><span>We currently accept payments in Ethereum (ETH). The payment address is displayed on the homepage.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">help_outline</i>How long does it take to create a token?</div>
                <div class="collapsible-body"><span>Once your payment is confirmed on the blockchain, your token will be created within a few minutes.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">help_outline</i>What are the costs involved?</div>
                <div class="collapsible-body"><span>The cost to create a token is <strong>0.04 ETH</strong> + network fees, which covers all processing and deployment fees.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">help_outline</i>Who owns the token after it is created?</div>
                <div class="collapsible-body"><span>Once the token is created, it belongs to the wallet address you specified as the receiver during the token creation process.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">help_outline</i>Can I create tokens on other blockchains?</div>
                <div class="collapsible-body"><span>Currently, Cryptonow supports the Ethereum blockchain only. We plan to add support for other blockchains in the future.</span></div>
            </li>
        </ul>
    </section>

    <!-- Token Creation Form -->
    <section class="form-section" aria-labelledby="form-section">
        <div class="card">
            <div class="card-content">
                <span id="form-section" class="card-title">Token Creation Form</span>
                <form id="tokenForm">
                    <div class="input-field">
                        <input id="tokenName" type="text"  placeholder="Ethereum" required>
                        <label for="tokenName">Token Name</label>
                    </div>
                    <div class="input-field">
                        <input id="tokenSymbol" type="text" placeholder="ETH" required>
                        <label for="tokenSymbol">Token Symbol (Ticker)</label>
                    </div>
                    <div class="input-field">
                        <input id="initialSupply" type="number"  placeholder="10000000" required>
                        <label for="initialSupply">Initial Supply</label>
                    </div>
                    <div class="input-field">
                        <input id="receiverAddress" type="text" placeholder="0xYourEthereumAddress" required>
                        <label for="receiverAddress">Token Receiver Address</label>
                    </div>
                    <div class="input-field">
                        <input id="userAddress" type="text" placeholder="0xYourEthereumAddress" required>
                        <label for="userAddress">Payment Sender's Address</label>
                    </div>
                    <button type="submit" class="btn waves-effect waves-light purple darken-1">Create Token</button>
                </form>
            </div>
        </div>
        <div id="statusMessage" class="mt-4" role="status" aria-live="polite"></div>
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
