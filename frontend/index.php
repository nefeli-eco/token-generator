<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Create your own ERC-20 cryptocurrency token in just 5 minutes with Cryptonow. No coding skills required.">
    <meta name="keywords" content="ERC-20, cryptocurrency, token creation, crypto coin, blockchain, Ethereum, Bitcoin, crypto, token">
    <meta name="author" content="Cryptonow">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://token.cryptonow.cc/">
    <title>Cryptonow Token Generator</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Include Axios -->

    <?php include 'google.php'; ?>
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
    background: #311b92; /* Matches your site color scheme */
    color: #ffffff; /* White text for visibility */
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4); /* Slight shadow for depth */
    text-align: center;
    padding: 20px; /* Add padding for better readability */
}

.carousel .carousel-item .card h6 {
    color: #fbc02d; /* Highlight question headers with the site's yellow color */
    font-weight: bold;
}

.carousel .carousel-item .card p {
    font-size: 1.1rem; /* Slightly larger font for better readability */
    line-height: 1.6;
}

/* Navigation button styles */
/* Center the carousel navigation arrows */
.carousel-prev,
.carousel-next {
    position: absolute;
    top: 50%; /* Center vertically */
    transform: translateY(-50%); /* Adjust for proper vertical centering */
    background: #311b92; /* Matches the FAQ card background */
    color: #fbc02d; /* Matches the site's yellow color */
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);
    cursor: pointer;
    z-index: 10;
    transition: background 0.3s ease;
}

.carousel-prev {
    left: -50px; /* Position the left arrow to the left of the carousel */
}

.carousel-next {
    right: -50px; /* Position the right arrow to the right of the carousel */
}

.carousel-prev:hover,
.carousel-next:hover {
    background: #4527a0; /* Slightly lighter purple on hover */
}


/* General Status Message Styling */
#statusMessage {
    padding: 16px;
    margin-top: 10px;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
}

/* Success Message Styling */
#statusMessage.green {
    background-color: #e8f5e9; /* Light green background */
    color: #1b5e20 !important; /* Dark green text */
    border: 1px solid #1b5e20; /* Border to match the text */
}

/* Error Message Styling */
#statusMessage.red {
    background-color: #ffebee; /* Light red background */
    color: #b71c1c !important; /* Dark red text */
    border: 1px solid #b71c1c; /* Border to match the text */
}

/* Processing Message Styling */
#statusMessage.yellow {
    background-color: #fffde7; /* Light yellow background */
    color: #000000 !important; /* Black text for better visibility */
    border: 1px solid #f57f17; /* Border to match the processing theme */
}/* Success Message Styling */
#statusMessage.green {
    background-color: #e8f5e9; /* Light green background */
    color: #1b5e20 !important; /* Dark green text for default message */
    border: 1px solid #1b5e20; /* Border to match the text */
}

/* Adjust link styling inside the success message */
#statusMessage.green a {
    color: #ffffff !important; /* White text for better contrast */
    font-weight: bold; /* Bold text for visibility */
    text-decoration: underline; /* Underline for emphasis */
}
/* Input field and label spacing */
.form-section .input-field {
    margin-bottom: 20px; /* Spacing between fields */
}

.form-section label {
    margin-bottom: 5px; /* Add space between the label and field */
    display: block; /* Ensure labels are on their own line */
    font-size: 1.1rem; /* Slightly larger text for better readability */
    color: #bdbdbd; /* Maintain consistent label color */
}

/* Input field styling */
#tokenForm input[type="text"],
#tokenForm input[type="number"] {
    padding: 12px; /* Increase padding for better feel */
    font-size: 1rem; /* Larger font size for readability */
    border-radius: 6px; /* Rounded edges */
    background-color: #1f1f1f; /* Input background matches form style */
    border: 1px solid #5e35b1; /* Purple border */
    color: #ffffff; /* White text */
    margin-top: 5px; /* Spacing between label and field */
}

#tokenForm input[type="text"]::placeholder,
#tokenForm input[type="number"]::placeholder {
    color: #a0a0a0; /* Lighter placeholder text */
}
.form-section button {
    display: block; /* Center-align */
    margin: 30px auto; /* Add spacing above and below */
    padding: 10px 40px; /* Balanced padding for better alignment */
    font-size: 1rem; /* Adjust font size for readability */
    font-weight: bold; /* Bold text */
    line-height: 1.5; /* Adjust line height to avoid text clipping */
    text-align: center; /* Ensure text is centered */
    background: linear-gradient(120deg, #5e35b1, #4527a0); /* Gradient for polished look */
    color: #ffffff; /* White text for visibility */
    border: none; /* Remove border */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3); /* Shadow for depth */
    cursor: pointer; /* Pointer cursor */
    transition: background 0.3s ease, transform 0.2s ease; /* Smooth hover effect */
}

.form-section button:hover {
    background: linear-gradient(120deg, #4527a0, #311b92); /* Hover effect */
    transform: scale(1.05); /* Slight zoom effect */
}

.form-section button:active {
    transform: scale(0.95); /* Slight shrink effect */
}


/* Form card adjustments */
.form-section .card {
    padding: 30px; /* Increase padding inside the card */
    margin-bottom: 40px; /* Add space below the form */
}

/* Footer alignment fix */
footer {
    text-align: center; /* Center footer content */
    padding: 20px 0; /* Add padding for space */
    background-color: #121212; /* Dark background */
    color: #bdbdbd; /* Light gray text */
    font-size: 0.9rem; /* Slightly smaller font size */
}

footer a {
    color: #fbc02d; /* Yellow link color */
    text-decoration: none; /* Remove underline */
    margin: 0 10px; /* Space between links */
}

footer a:hover {
    text-decoration: underline; /* Underline on hover */
}

    </style>
</head>
<body>

<header class="main-header">
    <h1>Create Your Own Crypto Coin in 5 Minutes!</h1>
    <p>No coding skills required. Easy and fast process.</p>
    <div class="crypto-icons" aria-label="Cryptocurrency Icons">
        <i class="material-icons">currency_bitcoin</i>
        <i class="material-icons">token</i>
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
        <section class="payment-section center-align" aria-labelledby="payment-section">
            <h5 id="payment-section" style="font-weight: bold; font-size: 1.8rem; color: #fbc02d;">Payment Information</h5>
            <div class="card-panel" style="background-color: #4527a0; color: #ffffff; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);">
                <p style="font-size: 1.2rem;">Please send <strong>0.05 ETH + Network Fees</strong> to the following address:</p>
                <div class="eth-address" style="font-size: 1.5rem; color: #fbc02d; background-color: #311b92; padding: 12px; border-radius: 8px; display: inline-block; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);">
                    0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805
                </div>
                <p style="margin-top: 15px; font-size: 1rem;">Scan the QR code below or copy the address to make your payment:</p>
                <div style="margin: 15px;">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?data=ethereum:0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805&size=150x150" alt="Payment QR Code" style="border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);">
                </div>
                <p style="font-size: 1rem; color: #fbc02d;">💡 Ensure the payment amount matches the required amount to avoid errors.</p>
            </div>
        </section>


        <section class="faq-section" aria-labelledby="faq-section">
    <h5 id="faq-section" class="center-align" style="color: #fbc02d; font-size: 1.8rem; font-weight: bold;">Frequently Asked Questions</h5>
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
                        <h6>Can the token be traded on exchanges?</h6>
                        <p>Yes, the token follows the ERC-20 standard, which makes it compatible with most exchanges and wallets. However, it is up to the token owner to list it on exchanges.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="carousel-item">
                <div class="card">
                    <div class="card-content">
                        <h6>What advance function Token has?</h6>
                        <p>Burn fucntion to reduce serculation and Mint function to increase. Include by default. no extra cost</p>
                    </div>
                </div>
            </div> -->
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
                        <p>The cost to create a token is **0.05 ETH** + network fees, which covers all processing and deployment fees.</p>
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
                        <h6>Can I create tokens on other blockchains?</h6>
                        <p>Currently, Cryptonow supports the Ethereum blockchain only. We plan to add support for other blockchains in the future.</p>
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
                        <label for="userAddress">Payment Sender's Address (can be the same or different for the Token Receiver Address)</label>
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
        
        // Clear previous messages
        statusMessage.innerHTML = '';

        // Get form values
        const tokenName = document.getElementById('tokenName').value.trim();
        const tokenSymbol = document.getElementById('tokenSymbol').value.trim();
        const initialSupply = document.getElementById('initialSupply').value.trim();
        const receiverAddress = document.getElementById('receiverAddress').value.trim();
        const userAddress = document.getElementById('userAddress').value.trim();

        // Validate Token Name (min 3 chars, max 50 chars)
        if (tokenName.length < 3 || tokenName.length > 50) {
            statusMessage.innerHTML = '<div class="card-panel red lighten-4">Token Name must be between 3 and 50 characters.</div>';
            return;
        }

        // Validate Token Symbol (uppercase letters only, 3-5 chars)
        if (!/^[A-Z]{3,5}$/.test(tokenSymbol)) {
            statusMessage.innerHTML = '<div class="card-panel red lighten-4">Token Symbol must be 3-5 uppercase letters only.</div>';
            return;
        }

        // Validate Initial Supply (positive integer)
        if (!/^\d+$/.test(initialSupply) || parseInt(initialSupply) <= 0) {
            statusMessage.innerHTML = '<div class="card-panel red lighten-4">Initial Supply must be a positive integer.</div>';
            return;
        }

        // Validate Ethereum addresses (starts with "0x" and 42 characters long)
        if (!/^0x[a-fA-F0-9]{40}$/.test(receiverAddress)) {
            statusMessage.innerHTML = '<div class="card-panel red lighten-4">Token Receiver Address must be a valid Ethereum address.</div>';
            return;
        }
        if (!/^0x[a-fA-F0-9]{40}$/.test(userAddress)) {
            statusMessage.innerHTML = '<div class="card-panel red lighten-4">Payment Sender Address must be a valid Ethereum address.</div>';
            return;
        }

        // If all validations pass
        statusMessage.className = "yellow";
        statusMessage.innerText = "Waiting for payment...";

        try {
            const response = await axios.post('/api/create-token', {
                tokenName,
                tokenSymbol,
                initialSupply,
                receiverAddress,
                userAddress,
            });

            // Update message to: Creating your coin
            statusMessage.innerText = "Payment detected! Creating your coin...";

            // Simulate token creation time for user experience
            setTimeout(() => {
                const txHash = response.data.transactionHash;
                statusMessage.className = "green";
                statusMessage.innerHTML = `Token created! <a href="https://sepolia.etherscan.io/address/${txHash}" target="_blank">View Transaction</a>`;
            }, 2000);

        } catch (err) {
            // Update the message to display an error
            statusMessage.className = "red";
            statusMessage.innerText = `Error: ${err.message}`;
        }
    });
</script>

</body>
</html>
