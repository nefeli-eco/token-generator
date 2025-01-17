<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
  <link rel="icon" type="image/x-icon" href="/favicon.ico"/>

  <!-- Axios (Optional for handling form submission) -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <?php /* If needed, include your Google Analytics or other scripts here */ ?>
  <?php // include 'google.php'; ?>

  <style>
    /* ---------- Global Reset / Base ---------- */
    html, body {
      margin: 0; 
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #fafafa;
      color: #444;
    }
    h1, h2, h3, h4, h5, h6 {
      color: #333;
      margin-top: 0.5rem;
    }
    p {
      margin-bottom: 1rem;
      line-height: 1.6;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }

    /* ---------- Hero Section ---------- */
    .hero {
      background: linear-gradient(120deg, #00796b, #004d40);
      color: #fff;
      text-align: center;
      padding: 60px 20px;
      position: relative;
    }
    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      font-weight: 700;
    }
    .hero p {
      font-size: 1.3rem;
      margin-bottom: 2rem;
      color: #e0e0e0;
    }
    .hero .btn-large {
      background-color: #004d40;
      font-weight: 600;
      text-transform: uppercase;
      border-radius: 8px;
    }
    .hero .btn-large:hover {
      background-color: #00695c;
    }

    /* Icons in hero (optional) */
    .crypto-icons i {
      font-size: 2.5rem;
      margin: 0 8px;
      color: #ffb74d; /* Accent color (amber) for contrast */
    }

    /* ---------- Steps Section ---------- */
    .steps-section {
      padding: 40px 0;
      background-color: #fff;
    }
    .steps-section h2 {
      text-align: center;
      margin-bottom: 2rem;
    }
    .step-card {
      text-align: center;
      padding: 20px;
    }
    .step-card i {
      font-size: 3rem;
      color: #00796b;
      margin-bottom: 10px;
    }
    .step-card p {
      font-size: 1rem;
      color: #555;
    }

    /* ---------- Payment Section ---------- */
    .payment-section {
      padding: 40px 0;
      background-color: #fafafa;
    }
    .payment-card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      padding: 20px;
    }
    .payment-section h5 {
      color: #00796b;
      font-weight: 600;
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .eth-address {
      display: inline-block;
      background-color: #fff3e0;
      color: #ff9800;
      padding: 10px;
      border-radius: 4px;
      font-family: monospace;
      margin: 10px 0;
      font-size: 1.2rem;
    }

    /* ---------- FAQ Section (Collapsible) ---------- */
    .faq-section {
      padding: 40px 0;
      background-color: #fff;
    }
    .faq-section h5 {
      color: #00796b;
      font-weight: 600;
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .collapsible-header {
      font-weight: 500;
      color: #333;
    }
    .collapsible-body {
      color: #555;
    }

    /* ---------- Modal & Form Styles ---------- */
    .modal {
      max-height: 85%;
      border-radius: 8px;
    }
    .modal-content h5 {
      margin-bottom: 1rem;
      color: #00796b;
      font-weight: 600;
    }
    .input-field label {
      color: #555;
      font-weight: 500;
    }
    input[type="text"],
    input[type="number"] {
      border: 1px solid #ccc !important;
      box-shadow: none !important;
    }
    .btn-submit {
      background-color: #00796b;
      color: #fff;
      font-weight: 600;
      text-transform: none;
      border-radius: 6px;
    }
    .btn-submit:hover {
      background-color: #004d40;
    }

    /* ---------- Status Messages ---------- */
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
      color: #000;
      border: 1px solid #f57f17;
    }

    /* ---------- Footer ---------- */
    footer {
      text-align: center;
      background-color: #004d40;
      color: #ddd;
      padding: 20px;
      margin-top: 40px;
    }
    footer a {
      color: #ffb74d;
      margin: 0 8px;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- ========== HERO SECTION ========== -->
  <section class="hero">
    <h1>Create Your Own Crypto Coin in 5 Minutes!</h1>
    <p>No coding skills required. Fast. Easy. Secure.</p>
    <div class="crypto-icons">
      <i class="material-icons">currency_bitcoin</i>
      <i class="material-icons">token</i>
      <i class="material-icons">account_balance_wallet</i>
    </div>
    <!-- Trigger the modal with the form -->
    <a
      class="btn btn-large waves-effect waves-light modal-trigger"
      href="#tokenModal"
    >
      Create Token Now
    </a>
  </section>

  <!-- ========== STEPS SECTION ========== -->
  <section class="steps-section">
    <div class="container">
      <h2>How It Works</h2>
      <div class="row">
        <div class="col s12 m3">
          <div class="step-card">
            <i class="material-icons">edit</i>
            <p>Fill out the form with your token details.</p>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="step-card">
            <i class="material-icons">send</i>
            <p>Submit the form.</p>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="step-card">
            <i class="material-icons">account_balance</i>
            <p>Make your payment in ETH.</p>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="step-card">
            <i class="material-icons">check_circle</i>
            <p>Watch your token go live!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PAYMENT SECTION ========== -->
  <section class="payment-section">
    <div class="container">
      <h5>Payment Information</h5>
      <div class="row">
        <div class="col s12 m8 offset-m2">
          <div class="payment-card">
            <p class="center">
              Please send <strong>0.05 ETH + Network Fees</strong> to the address below:
            </p>
            <div class="center">
              <span class="eth-address"
                >0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805</span
              >
            </div>
            <p class="center">Scan the QR code or copy the address to make your payment:</p>
            <div class="center">
              <img
                src="https://api.qrserver.com/v1/create-qr-code/?data=ethereum:0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805&size=150x150"
                alt="Payment QR Code"
                style="border-radius: 4px;"
              />
            </div>
            <p class="center" style="color: #ff9800;">
              &#128161; Ensure the payment amount matches exactly to avoid errors.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ SECTION ========== -->
  <section class="faq-section">
    <div class="container">
      <h5>Frequently Asked Questions</h5>
      <ul class="collapsible popout">
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i> What is Cryptonow?
          </div>
          <div class="collapsible-body">
            <p>Cryptonow is a platform for creating custom ERC-20 tokens easily.</p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i> How do I create my token?
          </div>
          <div class="collapsible-body">
            <p>
              Fill out the form (see “Create Token” button above), make payment,
              and let our automated system do the rest.
            </p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>What payment methods are accepted?
          </div>
          <div class="collapsible-body">
            <p>We accept Ethereum (ETH) only.</p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>Can the token be traded on exchanges?
          </div>
          <div class="collapsible-body">
            <p>
              Yes, the token follows the ERC-20 standard, making it compatible
              with most exchanges and wallets. Listing is up to the token owner.
            </p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>How long does it take?
          </div>
          <div class="collapsible-body">
            <p>
              Tokens are created within minutes after form submission and payment
              confirmation.
            </p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>What are the costs involved?
          </div>
          <div class="collapsible-body">
            <p>
              The cost to create a token is <strong>0.05 ETH</strong> + network fees,
              covering processing and deployment.
            </p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>Who owns the token after it's created?
          </div>
          <div class="collapsible-body">
            <p>
              Once created, the token belongs to the wallet address you specify
              as the receiver.
            </p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>Any other blockchains?
          </div>
          <div class="collapsible-body">
            <p>
              Currently, we only support Ethereum. We plan on adding more blockchains
              in the future.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ========== TOKEN FORM MODAL ========== -->
  <div id="tokenModal" class="modal">
    <div class="modal-content">
      <h5>Create Your Token</h5>
      <form id="tokenForm">
        <div class="row">
          <!-- Token Name -->
          <div class="input-field col s12 m6">
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
          <!-- Payment Sender Address -->
          <div class="input-field col s12">
            <label for="userAddress"
              >Payment Sender Address (can be same as receiver)</label
            >
            <input
              type="text"
              id="userAddress"
              placeholder="0xYourEthereumAddress"
              required
            />
          </div>

          <!-- Status Message -->
          <div class="col s12">
            <div id="statusMessage" role="status" aria-live="polite"></div>
          </div>

          <!-- Submit Button -->
          <div class="col s12 center">
            <button
              type="submit"
              class="btn btn-submit waves-effect waves-light"
            >
              Submit
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect btn-flat">Close</a>
    </div>
  </div>

  <!-- ========== FOOTER ========== -->
  <footer>
    <p>&copy; <?php echo date('Y'); ?> Cryptonow. All Rights Reserved.</p>
    <p>
      <a href="#tokenModal" class="modal-trigger">Create Token</a> |
      <a href="#!">Privacy</a> |
      <a href="#!">Terms</a>
    </p>
  </footer>

  <!-- Materialize JS -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
  ></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Initialize Modal
      const modalElems = document.querySelectorAll(".modal");
      M.Modal.init(modalElems);

      // Initialize Collapsible FAQ
      const collapsibles = document.querySelectorAll(".collapsible");
      M.Collapsible.init(collapsibles);

      // Form Submission Handling
      const tokenForm = document.getElementById("tokenForm");
      const statusMessage = document.getElementById("statusMessage");

      tokenForm.addEventListener("submit", async function(e) {
        e.preventDefault();
        statusMessage.innerHTML = "";
        statusMessage.className = "";

        // Collect form values
        const tokenName = document.getElementById("tokenName").value.trim();
        const tokenSymbol = document.getElementById("tokenSymbol").value.trim();
        const initialSupply = document.getElementById("initialSupply").value.trim();
        const receiverAddress = document.getElementById("receiverAddress").value.trim();
        const userAddress = document.getElementById("userAddress").value.trim();

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

        // 4. Valid Ethereum addresses
        const ethRegex = /^0x[a-fA-F0-9]{40}$/;
        if (!ethRegex.test(receiverAddress)) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Token Receiver Address must be a valid Ethereum address.</div>';
          return;
        }
        if (!ethRegex.test(userAddress)) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Payment Sender Address must be a valid Ethereum address.</div>';
          return;
        }

        // If all validations pass
        statusMessage.classList.add("yellow");
        statusMessage.innerText = "Waiting for payment...";

        try {
          // Example POST request (adjust endpoint/payload as needed)
          const response = await axios.post("/api/create-token", {
            tokenName,
            tokenSymbol,
            initialSupply,
            receiverAddress,
            userAddress,
          });

          statusMessage.innerText = "Payment detected! Creating your coin...";

          // Simulate a short delay
          setTimeout(() => {
            const txHash = response.data.transactionHash;
            statusMessage.classList.remove("yellow");
            statusMessage.classList.add("green");
            statusMessage.innerHTML = `
              Token created! 
              <a
                href="https://sepolia.etherscan.io/address/${txHash}"
                target="_blank"
              >
                View Transaction
              </a>
            `;
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
