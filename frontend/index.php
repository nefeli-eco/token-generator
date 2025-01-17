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

  <!-- Materialize CSS -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    rel="stylesheet"
  />
  <!-- Material Icons -->
  <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"
  />
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/favicon.ico" />

  <!-- Axios (Optional for handling form submission) -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <?php include 'google.php'; ?>

  <style>
    /* ========== BASE STYLES ========== */
    body {
      background: #121212; /* Dark background */
      font-family: 'Roboto', sans-serif;
      color: #e0e0e0; /* Off-white text for contrast */
      margin: 0;
      padding: 0;
    }
    h1, h2, h5, .card-title {
      color: #e0e0e0; /* Ensure headings have good contrast */
    }

    /* ========== HEADER ========== */
    .main-header {
      /* Navy-based gradient */
      background: linear-gradient(120deg, #0A244E, #001f3f);
      color: white;
      padding: 50px 20px;
      text-align: center;
    }
    .main-header h1 {
      font-size: 2.8rem;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .main-header p {
      font-size: 1.4rem;
      margin-bottom: 30px;
    }
    .crypto-icons {
      font-size: 3rem;
      color: #c5a900; /* Gold for icon highlights */
      margin: 20px 0;
    }

    /* ========== CARDS AND GENERAL CONTAINERS ========== */
    .card {
      background: #1e1e1e; /* Slightly lighter than body for contrast */
      color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    /* ========== STEPS SECTION ========== */
    .steps-section {
      margin: 30px 0;
    }
    .step-card {
      background: #1e1e1e;
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
      color: #c5a900; /* Gold icons for steps */
      margin-bottom: 10px;
    }

    /* ========== PAYMENT SECTION ========== */
    .payment-section {
      background-color: #1e1e1e;
      padding: 20px;
      border-radius: 10px;
      color: #ffffff;
      margin-bottom: 30px;
    }
    .payment-section h5 {
      color: #0A244E; /* Headings in navy */
      font-weight: bold;
    }
    .payment-section .eth-address {
      font-family: monospace;
      background: #2b2b2b;
      padding: 10px;
      border-radius: 5px;
      text-align: center;
      color: #c5a900; /* Gold text for ETH address */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    }

    /* ========== CAROUSEL / FAQ ========== */
    .carousel-container {
      position: relative;
      margin-top: 30px;
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
      background: #1e1e1e;
      color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);
      text-align: center;
      padding: 20px;
      margin: 0 auto; /* Center items in the card */
    }
    .carousel .carousel-item .card h6 {
      color: #c5a900; /* Gold sub-headings in FAQ */
      font-weight: bold;
      margin-bottom: 10px;
    }
    .carousel .carousel-item .card p {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    /* Carousel Navigation Arrows */
    .carousel-prev,
    .carousel-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: #2b2b2b;
      color: #c5a900;
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
      left: -50px;
    }
    .carousel-next {
      right: -50px;
    }
    .carousel-prev:hover,
    .carousel-next:hover {
      background: #0A244E;
      color: #ffffff;
    }

    /* ========== STATUS MESSAGES ========== */
    #statusMessage {
      padding: 16px;
      margin-top: 10px;
      border-radius: 5px;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
    }
    #statusMessage.green {
      background-color: #e8f5e9;
      color: #1b5e20 !important;
      border: 1px solid #1b5e20;
    }
    #statusMessage.red {
      background-color: #ffebee;
      color: #b71c1c !important;
      border: 1px solid #b71c1c;
    }
    #statusMessage.yellow {
      background-color: #fffde7;
      color: #000000 !important;
      border: 1px solid #f57f17;
    }
    #statusMessage.green a {
      color: #ffffff !important;
      font-weight: bold;
      text-decoration: underline;
    }

    /* ========== FORM STYLES ========== */
    .form-section .input-field {
      margin-bottom: 20px;
    }
    .form-section label {
      margin-bottom: 5px;
      display: block;
      font-size: 1.1rem;
      color: #9e9e9e; /* Lighter gray label */
    }
    #tokenForm input[type="text"],
    #tokenForm input[type="number"] {
      padding: 12px;
      font-size: 1rem;
      border-radius: 6px;
      background-color: #121212; 
      border: 1px solid #0A244E; /* Navy border */
      color: #ffffff;
      margin-top: 5px;
    }
    #tokenForm input::placeholder {
      color: #a0a0a0;
    }

    /* Form Button */
    .form-section button {
      display: block;
      margin: 30px auto;
      padding: 10px 40px;
      font-size: 1rem;
      font-weight: bold;
      line-height: 1.5;
      text-align: center;
      /* Navy button */
      background: #0A244E;
      color: #ffffff;
      border: none;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .form-section button:hover {
      background: #001f3f;
      transform: scale(1.05);
    }
    .form-section button:active {
      transform: scale(0.95);
    }
    .form-section .card {
      padding: 30px;
      margin-bottom: 40px;
    }

    /* ========== FOOTER ========== */
    footer {
      text-align: center;
      padding: 20px 0;
      background-color: #0A244E; /* Navy footer */
      color: #bdbdbd;
      font-size: 0.9rem;
    }
    footer a {
      color: #c5a900;
      text-decoration: none;
      margin: 0 10px;
    }
    footer a:hover {
      text-decoration: underline;
    }

    /* Responsive container padding */
    main.container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }
  </style>
</head>
<body>

  <!-- ========== HEADER ========== -->
  <header class="main-header">
    <h1>Create Your Own Crypto Coin in 5 Minutes!</h1>
    <p>No coding skills required. Easy and fast process.</p>
    <div class="crypto-icons" aria-label="Cryptocurrency Icons">
      <i class="material-icons">currency_bitcoin</i>
      <i class="material-icons">token</i>
      <i class="material-icons">account_balance_wallet</i>
    </div>
  </header>

  <!-- ========== MAIN CONTENT ========== -->
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
      <h5 id="payment-section" style="font-size: 1.8rem;">Payment Information</h5>
      <div class="card-panel" style="background-color: #1e1e1e; color: #ffffff; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);">
        <p style="font-size: 1.2rem;">
          Please send <strong>0.05 ETH + Network Fees</strong> to the following address:
        </p>
        <div class="eth-address" style="font-size: 1.5rem;">
          0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805
        </div>
        <p style="margin-top: 15px; font-size: 1rem;">
          Scan the QR code below or copy the address to make your payment:
        </p>
        <div style="margin: 15px;">
          <img
            src="https://api.qrserver.com/v1/create-qr-code/?data=ethereum:0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805&size=150x150"
            alt="Payment QR Code"
            style="border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);"
          />
        </div>
        <p style="font-size: 1rem; color: #c5a900;">
          💡 Ensure the payment amount matches the required amount to avoid errors.
        </p>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" aria-labelledby="faq-section">
      <h5
        id="faq-section"
        class="center-align"
        style="color: #0A244E; font-size: 1.8rem; font-weight: bold;"
      >
        Frequently Asked Questions
      </h5>
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
                <p>
                  Yes, the token follows the ERC-20 standard, which makes it compatible
                  with most exchanges and wallets. However, it is up to the token
                  owner to list it on exchanges.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="card-content">
                <h6>How long does it take to create a token?</h6>
                <p>
                  Tokens are created within minutes after form submission and payment
                  confirmation.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="card-content">
                <h6>What are the costs involved?</h6>
                <p>
                  The cost to create a token is <strong>0.05 ETH</strong> + network fees,
                  which covers all processing and deployment fees.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="card-content">
                <h6>Who owns the token after it is created?</h6>
                <p>
                  Once the token is created, it belongs to the wallet address you
                  specified as the receiver during the token creation process.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="card-content">
                <h6>Can I create tokens on other blockchains?</h6>
                <p>
                  Currently, Cryptonow supports the Ethereum blockchain only. We plan
                  to add support for other blockchains in the future.
                </p>
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
              <label for="tokenName">Token Name</label>
              <input id="tokenName" type="text" placeholder="Ethereum" required>
            </div>
            <div class="input-field">
              <label for="tokenSymbol">Token Symbol (Ticker)</label>
              <input id="tokenSymbol" type="text" placeholder="ETH" required>
            </div>
            <div class="input-field">
              <label for="initialSupply">Initial Supply</label>
              <input id="initialSupply" type="number" placeholder="10000000" required>
            </div>
            <div class="input-field">
              <label for="receiverAddress">Token Receiver Address</label>
              <input id="receiverAddress" type="text" placeholder="0xYourEthereumAddress" required>
            </div>
            <div class="input-field">
              <label for="userAddress">Payment Sender's Address (can be the same or different from the Token Receiver Address)</label>
              <input id="userAddress" type="text" placeholder="0xYourEthereumAddress" required>
            </div>
            <button type="submit" class="btn waves-effect waves-light">
              Create Token
            </button>
          </form>
        </div>
      </div>
      <div id="statusMessage" class="mt-4" role="status" aria-live="polite"></div>
    </section>
  </main>

  <!-- ========== FOOTER ========== -->
  <?php include 'footer.php'; ?>

  <!-- Materialize JS -->
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
      statusMessage.className = '';

      // Get form values
      const tokenName = document.getElementById('tokenName').value.trim();
      const tokenSymbol = document.getElementById('tokenSymbol').value.trim();
      const initialSupply = document.getElementById('initialSupply').value.trim();
      const receiverAddress = document.getElementById('receiverAddress').value.trim();
      const userAddress = document.getElementById('userAddress').value.trim();

      // Basic validation:

      // 1. Token Name (3-50 chars)
      if (tokenName.length < 3 || tokenName.length > 50) {
        statusMessage.className = "red";
        statusMessage.innerHTML = 
          '<div class="card-panel red lighten-4">Token Name must be between 3 and 50 characters.</div>';
        return;
      }

      // 2. Token Symbol (uppercase letters only, 3-5 chars)
      if (!/^[A-Z]{3,5}$/.test(tokenSymbol)) {
        statusMessage.className = "red";
        statusMessage.innerHTML = 
          '<div class="card-panel red lighten-4">Token Symbol must be 3-5 uppercase letters only.</div>';
        return;
      }

      // 3. Initial Supply (positive integer)
      if (!/^\d+$/.test(initialSupply) || parseInt(initialSupply) <= 0) {
        statusMessage.className = "red";
        statusMessage.innerHTML = 
          '<div class="card-panel red lighten-4">Initial Supply must be a positive integer.</div>';
        return;
      }

      // 4. Ethereum addresses (must start with 0x + 40 hex chars)
      if (!/^0x[a-fA-F0-9]{40}$/.test(receiverAddress)) {
        statusMessage.className = "red";
        statusMessage.innerHTML = 
          '<div class="card-panel red lighten-4">Token Receiver Address must be a valid Ethereum address.</div>';
        return;
      }
      if (!/^0x[a-fA-F0-9]{40}$/.test(userAddress)) {
        statusMessage.className = "red";
        statusMessage.innerHTML = 
          '<div class="card-panel red lighten-4">Payment Sender Address must be a valid Ethereum address.</div>';
        return;
      }

      // If all validations pass
      statusMessage.className = "yellow";
      statusMessage.innerText = "Waiting for payment...";

      try {
        // Example POST request (adjust URL and payload to your API)
        const response = await axios.post('/api/create-token', {
          tokenName,
          tokenSymbol,
          initialSupply,
          receiverAddress,
          userAddress
        });

        // Update message to: Creating your coin
        statusMessage.innerText = "Payment detected! Creating your coin...";

        // Simulate token creation time
        setTimeout(() => {
          const txHash = response.data.transactionHash;
          statusMessage.className = "green";
          statusMessage.innerHTML = `
            Token created! 
            <a 
              href="https://sepolia.etherscan.io/address/${txHash}" 
              target="_blank"
            >
              View Transaction
            </a>`;
        }, 2000);

      } catch (err) {
        // Update the message to display an error
        statusMessage.className = "red";
        statusMessage.innerText = \`Error: \${err.message}\`;
      }
    });
  </script>
</body>
</html>
