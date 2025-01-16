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
        .steps-section {
            margin: 30px 0;
        }
        .step-card {
            background: #212121;
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 180px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
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
        .carousel-container {
            position: relative;
        }
        .carousel {
            margin: 30px auto;
        }
        .carousel .carousel-item {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .carousel .carousel-item .card {
            width: 100%;
            max-width: 400px;
            background: #2e2e2e;
            color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .carousel-prev,
        .carousel-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            border: none;
            color: #fff;
            padding: 10px;
            cursor: pointer;
            font-size: 2rem;
            z-index: 10;
        }
        .carousel-prev {
            left: -20px;
        }
        .carousel-next {
            right: -20px;
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
    <p>No coding skills required. Easy and fast process.</p>
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
        <div class="row">
            <div class="col s12 m6 l3">
                <div class="card step-card center-align">
                    <i class="material-icons">edit</i>
                    <p>Fill out the form with your token details.</p>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card step-card center-align">
                    <i class="material-icons">send</i>
                    <p>Submit the form.</p>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card step-card center-align">
                    <i class="material-icons">account_balance</i>
                    <p>Make your payment.</p>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card step-card center-align">
                    <i class="material-icons">check_circle</i>
                    <p>Wait for the magic to happen!</p>
                </div>
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
        <h5 id="faq-section" class="center-align">Frequently Asked Questions</h5>
        <div class="carousel-container">
            <button class="carousel-prev material-icons">chevron_left</button>
            <button class="carousel-next material-icons">chevron_right</button>
            <div class="carousel carousel-slider center">
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-content">
                            <h6>What is Cryptonow?</h6>
                            <p>Cryptonow is a platform for creating custom ERC-20 tokens easily.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-content">
                            <h6>How do I create my token?</h6>
                            <p>Fill out the form, make payment, and let our automated system do the rest.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-content">
                            <h6>What payment methods are accepted?</h6>
                            <p>We accept Ethereum (ETH) only.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-content">
                            <h6>How long does it take to create a token?</h6>
                            <p>Tokens are created within minutes of payment confirmation.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-content">
                        <h6>What are the costs involved?</h6>
                        <p>The cost to create a token is **0.04 ETH** + network fees, which covers all processing and deployment fees.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-content">
                        <h6>Who owns the token after it is created?</h6>
                        <p>Once the token is created, it belongs to the wallet address you specified as the receiver during the token creation process.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-content">
                            <h6>How long does it take to create a token?</h6>
                            <p>Tokens are created within minutes of payment confirmation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Token Creation Form -->
    <section class="form-section" aria-labelledby="form-section">
        <div class="card">
            <div class="card-content">
                <span id="form-section" class="card-title">Token Creation Form</span>
                <form id="tokenForm">
                    <div class="input-field">
                        <input id="tokenName" type="text" placeholder="Ethereum" required>
                        <label for="tokenName">Token Name</label>
                    </div>
                    <div class="input-field">
                        <input id="tokenSymbol" type="text" placeholder="ETH" required>
                        <label for="tokenSymbol">Token Symbol (Ticker)</label>
                    </div>
                    <div class="input-field">
                        <input id="initialSupply" type="number" placeholder="10000000" required>
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

<footer>
    <p>© 2025 Cryptonow. All rights reserved.</p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carouselElems = document.querySelectorAll('.carousel');
        const carouselInstance = M.Carousel.init(carouselElems, {
            fullWidth: true,
            indicators: true,
            duration: 200
        });

        document.querySelector('.carousel-prev').addEventListener('click', function () {
            carouselInstance[0].prev();
        });

        document.querySelector('.carousel-next').addEventListener('click', function () {
            carouselInstance[0].next();
        });
    });

    document.getElementById('tokenForm').addEventListener('submit', async function (e) {
        e.preventDefault();
        const statusMessage = document.getElementById('statusMessage');
        statusMessage.innerHTML = '<div class="card-panel yellow lighten-4">Processing...</div>';
        try {
            const response = await axios.post('http://api.cryptonow.cc:3001/api/create-token', {
                tokenName: document.getElementById('tokenName').value,
                tokenSymbol: document.getElementById('tokenSymbol').value,
                initialSupply: document.getElementById('initialSupply').value,
                receiverAddress: document.getElementById('receiverAddress').value,
                userAddress: document.getElementById('userAddress').value,
            });
            const txHash = response.data.transactionHash;
            statusMessage.innerHTML = `<div class="card-panel green lighten-4">Token created! <a href="https://sepolia.etherscan.io/tx/${txHash}" target="_blank">View Transaction</a></div>`;
        } catch (err) {
            statusMessage.innerHTML = `<div class="card-panel red lighten-4">Error: ${err.message}</div>`;
        }
    });
</script>
</body>
</html>
