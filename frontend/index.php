<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="description"
    content="Create your own ERC-20 cryptocurrency token in just 5 minutes with Cryptonow. No coding skills required."
  />
  <meta
    name="keywords"
    content="ERC-20, cryptocurrency, token creation, crypto coin, blockchain, Ethereum, Bitcoin, crypto, token"
  />
  <meta name="author" content="Cryptonow" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://token.cryptonow.cc/" />
  <title>Cryptonow Token Generator</title>

  <!-- Materialize CSS -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
  />
  <!-- Google Icons -->
  <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"
  />
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/favicon.ico" />

  <!-- Axios (Optional for handling form submission) -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <?php /* Include your tracking or Google Analytics if needed */ ?>
  <?php // include 'google.php'; ?>

  <style>
    /* ---------- Global Styles ---------- */
    body {
      background-color: #f5f5f5; /* Light gray background */
      color: #333333;           /* Dark text for good contrast */
      font-family: "Roboto", sans-serif;
      margin: 0;
      padding: 0;
    }
    h1, h2, h3, h4, h5, h6 {
      color: #333333;
      margin-top: 0;
    }
    p {
      margin-bottom: 1rem;
      line-height: 1.6;
    }

    /* ---------- Header / Hero Section ---------- */
    header.main-header {
      background: #ffffff; /* White background for a clean look */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 40px 20px;
      text-align: center;
    }
    .main-header h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
      font-weight: 700;
    }
    .main-header p {
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
      color: #555555;
    }
    .crypto-icons i {
      font-size: 2.5rem;
      color: #1565c0; /* Blue accent for icons */
      margin: 0 5px;
    }

    /* ---------- Steps Section ---------- */
    .steps-section {
      margin: 40px 0;
    }
    .step-box {
      text-align: center;
      margin-bottom: 20px;
    }
    .step-box i {
      font-size: 3rem;
      color: #1565c0; /* Blue accent for step icons */
      margin-bottom: 10px;
    }
    .step-box p {
      font-size: 1rem;
      color: #555555;
    }

    /* ---------- Payment Section ---------- */
    .payment-section h5 {
      color: #1565c0; /* Blue heading */
      font-weight: 600;
    }
    .payment-card {
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
      padding: 20px;
    }
    .eth-address {
      font-family: monospace;
      display: inline-block;
      background-color: #fff8e1;
      color: #ff9800; /* Orange text */
      padding: 10px;
      border-radius: 4px;
      margin: 10px 0;
      font-size: 1.2rem;
    }

    /* ---------- FAQ Section (Collapsible) ---------- */
    .faq-section h5 {
      color: #1565c0;
      font-weight: 600;
      text-align: center;
      margin-top: 40px;
      margin-bottom: 20px;
    }
    .collapsible-header {
      font-size: 1.1rem;
      font-weight: 500;
      color: #333333;
    }
    .collapsible-body p {
      margin: 0.5rem 0;
      color: #555555;
    }

    /* ---------- Form Section ---------- */
    .form-section .card {
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
      padding: 20px;
    }
    .form-section label {
      color: #444444;
      font-weight: 500;
    }
    .form-section input[type="text"],
    .form-section input[type="number"] {
      border: 1px solid #ccc;
      box-shadow: none;
    }
    .form-section .btn-submit {
      background-color: #1565c0;
      color: #ffffff;
      font-weight: 600;
      border: none;
      box-shadow: none;
    }
    .form-section .btn-submit:hover {
      background-color: #0d47a1; /* Darken on hover */
    }

    /* ---------- Status Message Styles ---------- */
    #statusMessage {
      margin-top: 20px;
      padding: 16px;
      border-radius: 4px;
      font-weight: 600;
      text-align: center;
    }
    #statusMessage.green {
      background-color: #e8f5e9;
      color: #1b5e20;
      border: 1px solid #1b5e20;
    }
    #statusMessage.red {
      background-color: #ffebee;
      color: #b71c1c;
      border: 1px solid #b71c1c;
    }
    #statusMessage.yellow {
      background-color: #fffde7;
      color: #000000;
      border: 1px solid #f57f17;
    }
    #statusMessage.green a {
      color: #1b5e20;
      text-decoration: underline;
      font-weight: 700;
    }

    /* ---------- Footer ---------- */
    footer {
      background-color: #ffffff;
      border-top: 1px solid #dddddd;
      text-align: center;
      padding: 20px;
      color: #777777;
      margin-top: 40px;
    }
    footer a {
      color: #1565c0;
      text-decoration: none;
      margin: 0 10px;
    }
    footer a:hover {
      text-decoration: underline;
    }

    /* ---------- Responsive Grid Tweaks (Materialize) ---------- */
    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 15px;
    }

    /* ---------- Utility ---------- */
    .center {
      text-align: center;
    }
    .mb-3 {
      margin-bottom: 1.5rem;
    }
    .mt-5 {
      margin-top: 3rem;
    }
  </style>
</head>
<body>

  <!-- HEADER / HERO -->
  <header class="main-header">
    <h1>Create Your Own Crypto Coin in 5 Minutes!</h1>
    <p>No coding skills required. Easy and fast process.</p>
    <div class="crypto-icons" aria-label="Cryptocurrency Icons">
      <i class="material-icons">currency_bitcoin</i>
      <i class="material-icons">token</i>
      <i class="material-icons">account_balance_wallet</i>
    </div>
  </header>

  <main>
    <div class="container">
      <!-- STEPS SECTION -->
      <section class="steps-section row">
        <div class="col s12 center">
          <h2>Steps to Create Your Token</h2>
        </div>

        <!-- Step 1 -->
        <div class="col s12 m3">
          <div class="step-box">
            <i class="material-icons">edit</i>
            <p>Fill out the form with your token details.</p>
          </div>
        </div>
        <!-- Step 2 -->
        <div class="col s12 m3">
          <div class="step-box">
            <i class="material-icons">send</i>
            <p>Submit the form.</p>
          </div>
        </div>
        <!-- Step 3 -->
        <div class="col s12 m3">
          <div class="step-box">
            <i class="material-icons">account_balance</i>
            <p>Make your payment.</p>
          </div>
        </div>
        <!-- Step 4 -->
        <div class="col s12 m3">
          <div class="step-box">
            <i class="material-icons">check_circle</i>
            <p>Wait for the magic to happen!</p>
          </div>
        </div>
      </section>

      <!-- PAYMENT SECTION -->
      <section class="payment-section row">
        <div class="col s12 center mb-3">
          <h5 id="payment-section">Payment Information</h5>
        </div>
        <div class="col s12 m8 offset-m2">
          <div class="payment-card">
            <p class="center">
              Please send <strong>0.05 ETH + Network Fees</strong> to the address below:
            </p>
            <div class="center">
              <span class="eth-address">0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805</span>
            </div>
            <p class="center">
              Scan the QR code or copy the address to make your payment:
            </p>
            <div class="center">
              <img
                src="https://api.qrserver.com/v1/create-qr-code/?data=ethereum:0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805&size=150x150"
                alt="Payment QR Code"
                style="border-radius: 4px;"
              />
            </div>
            <p class="center" style="color: #ff9800;">
              💡 Ensure the payment amount matches exactly to avoid errors.
            </p>
          </div>
        </div>
      </section>

      <!-- FAQ SECTION (Collapsible) -->
      <section class="faq-section">
        <h5>Frequently Asked Questions</h5>
        <ul class="collapsible popout">
          <li>
            <div class="collapsible-header"><i class="material-icons">help_outline</i>What is Cryptonow?</div>
            <div class="collapsible-body">
              <p>Cryptonow is a platform for creating custom ERC-20 tokens easily.</p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">help_outline</i>How do I create my token?</div>
            <div class="collapsible-body">
              <p>Fill out the form, make payment, and let our automated system do the rest.</p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">help_outline</i>What payment methods are accepted?</div>
            <div class="collapsible-body">
              <p>We accept Ethereum (ETH) only.</p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">help_outline</i>Can the token be traded on exchanges?</div>
            <div class="collapsible-body">
              <p>The token follows the ERC-20 standard, compatible with most exchanges and wallets. Listing on exchanges is up to the owner.</p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">help_outline</i>How long does it take to create a token?</div>
            <div class="collapsible-body">
              <p>Tokens are created within minutes after form submission and payment confirmation.</p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">help_outline</i>What are the costs involved?</div>
            <div class="collapsible-body">
              <p>The cost to create a token is <strong>0.05 ETH</strong> + network fees.</p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">help_outline</i>Who owns the token after it is created?</div>
            <div class="collapsible-body">
              <p>Once created, the token belongs to the specified receiver wallet address.</p>
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">help_outline</i>Can I create tokens on other blockchains?</div>
            <div class="collapsible-body">
              <p>Currently, only Ethereum is supported. We plan to add other blockchains in the future.</p>
            </div>
          </li>
        </ul>
      </section>

      <!-- TOKEN CREATION FORM -->
      <section class="form-section row mt-5">
        <div class="col s12 m8 offset-m2">
          <div class="card">
            <h5 class="center">Token Creation Form</h5>
            <form id="tokenForm" class="row">
              <!-- Token Name -->
              <div class="input-field col s12">
                <label for="tokenName">Token Name</label>
                <input
                  type="text"
                  id="tokenName"
                  placeholder="Ethereum"
                  required
                />
              </div>
              <!-- Token Symbol -->
              <div class="input-field col s12 m6">
                <label for="tokenSymbol">Token Symbol (Ticker)</label>
                <input
                  type="text"
                  id="tokenSymbol"
                  placeholder="ETH"
                  required
                />
              </div>
              <!-- Initial Supply -->
              <div class="input-field col s12 m6">
                <label for="initialSupply">Initial Supply</label>
                <input
                  type="number"
                  id="initialSupply"
                  placeholder="10000000"
                  required
                />
              </div>
              <!-- Receiver Address -->
              <div class="input-field col s12 m6">
                <label for="receiverAddress">Token Receiver Address</label>
                <input
                  type="text"
                  id="receiverAddress"
                  placeholder="0xYourEthereumAddress"
                  required
                />
              </div>
              <!-- User (Payment Sender) Address -->
              <div class="input-field col s12 m6">
                <label for="userAddress"
                  >Payment Sender Address (can be same or different)</label
                >
                <input
                  type="text"
                  id="userAddress"
                  placeholder="0xYourEthereumAddress"
                  required
                />
              </div>
              <!-- Submit Button -->
              <div class="col s12 center">
                <button
                  type="submit"
                  class="btn btn-submit waves-effect waves-light"
                >
                  Create Token
                </button>
              </div>
            </form>

            <div id="statusMessage" role="status" aria-live="polite"></div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    <p>&copy; <?php echo date('Y'); ?> Cryptonow. All rights reserved.</p>
    <!-- Example footer links: -->
    <p>
      <a href="#!">Privacy Policy</a> | <a href="#!">Terms of Service</a>
    </p>
  </footer>

  <!-- Materialize JS -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
  ></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Initialize Collapsible for FAQ
      const collapsibles = document.querySelectorAll(".collapsible");
      M.Collapsible.init(collapsibles);

      // Form Submission Handling
      const tokenForm = document.getElementById("tokenForm");
      const statusMessage = document.getElementById("statusMessage");

      tokenForm.addEventListener("submit", async function (e) {
        e.preventDefault();
        statusMessage.innerHTML = "";
        statusMessage.className = "";

        // Collect form values
        const tokenName = document.getElementById("tokenName").value.trim();
        const tokenSymbol = document.getElementById("tokenSymbol").value.trim();
        const initialSupply = document
          .getElementById("initialSupply")
          .value.trim();
        const receiverAddress = document
          .getElementById("receiverAddress")
          .value.trim();
        const userAddress = document
          .getElementById("userAddress")
          .value.trim();

        // Basic validation:
        // 1. Token Name (3-50 chars)
        if (tokenName.length < 3 || tokenName.length > 50) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Token Name must be between 3 and 50 characters.</div>';
          return;
        }

        // 2. Token Symbol (uppercase letters only, 3-5 chars)
        const symbolRegex = /^[A-Z]{3,5}$/;
        if (!symbolRegex.test(tokenSymbol)) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Token Symbol must be 3-5 uppercase letters only.</div>';
          return;
        }

        // 3. Initial Supply (positive integer)
        if (!/^\d+$/.test(initialSupply) || parseInt(initialSupply) <= 0) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Initial Supply must be a positive integer.</div>';
          return;
        }

        // 4. Ethereum addresses (must start with 0x + 40 hex chars)
        const ethAddressRegex = /^0x[a-fA-F0-9]{40}$/;
        if (!ethAddressRegex.test(receiverAddress)) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Token Receiver Address must be a valid Ethereum address.</div>';
          return;
        }
        if (!ethAddressRegex.test(userAddress)) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Payment Sender Address must be a valid Ethereum address.</div>';
          return;
        }

        // All validations pass
        statusMessage.classList.add("yellow");
        statusMessage.innerText = "Waiting for payment...";

        try {
          // Example POST request (adjust endpoint / payload as needed)
          const response = await axios.post("/api/create-token", {
            tokenName,
            tokenSymbol,
            initialSupply,
            receiverAddress,
            userAddress,
          });

          // Simulate token creation wait
          statusMessage.innerText = "Payment detected! Creating your coin...";
          setTimeout(() => {
            const txHash = response.data.transactionHash;
            statusMessage.classList.remove("yellow");
            statusMessage.classList.add("green");
            statusMessage.innerHTML = `Token created! <a href="https://sepolia.etherscan.io/address/${txHash}" target="_blank">View Transaction</a>`;
          }, 2000);
        } catch (err) {
          statusMessage.classList.remove("yellow");
          statusMessage.classList.add("red");
          statusMessage.innerText = "Error: " + err.message;
        }
      });
    });
  </script>
</body>
</html>
