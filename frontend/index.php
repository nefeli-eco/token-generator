<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta
    name="description"
    content="Create your own ERC-20 cryptocurrency coin in just 5 minutes with Cryptonow. No coding skills required."
  />
  <meta
    name="keywords"
    content="ERC-20, cryptocurrency, coin creation, crypto coin, blockchain, Ethereum, Bitcoin, crypto, token"
  />
  <meta name="author" content="Cryptonow"/>
  <meta name="robots" content="index, follow"/>
  <link rel="canonical" href="https://token.cryptonow.cc/"/>
  <title>Cryptonow Coin Generator</title>

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

  <?php /* If you have analytics scripts, include them here */ ?>
  <?php // include 'google.php'; ?>

  <style>
    /* ========== BASE STYLES ========== */
    body {
      background-color: #f5f5f5; /* Light gray background */
      color: #333333;           /* Dark text for contrast */
      font-family: "Roboto", sans-serif;
      margin: 0;
      padding: 0;
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

    /* ========== HERO / HEADER ========== */
    .hero {
      background: #ffffff;
      text-align: center;
      padding: 60px 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      position: relative;
    }
    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      font-weight: 700;
    }
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 1.5rem;
      color: #555555;
    }
    .crypto-icons i {
      font-size: 2.5rem;
      color: #1565c0;
      margin: 0 5px;
    }

    /* ========== BUTTON STYLES (Neumorphic-ish / Soft Glow) ========== */
    /*
      - Slightly raised, soft edges, subtle glow on hover
      - Uses transitions and shadows for a "modern" or "fresh" feel
      - You can adjust background, shadow, or radius as needed
    */
    .soft-button {
      display: inline-block;
      padding: 0.8rem 2rem;
      font-weight: 600;
      text-transform: none;
      border-radius: 30px;
      background-color: #e0e0e0;
      color: #333 !important;
      transition: all 0.3s ease;
      box-shadow:
        5px 5px 10px rgba(0,0,0,0.2),
        -5px -5px 10px rgba(255,255,255,0.5);
    }
    .soft-button:hover {
      background-color: #f0f0f0;
      transform: translateY(-2px);
      box-shadow:
        5px 5px 10px rgba(0,0,0,0.25),
        -5px -5px 10px rgba(255,255,255,0.7);
    }
    .soft-button:active {
      transform: translateY(1px);
      box-shadow:
        2px 2px 6px rgba(0,0,0,0.25),
        -2px -2px 6px rgba(255,255,255,0.5);
    }

    /* Large version for Hero CTA */
    .soft-button-large {
      padding: 1rem 2.5rem;
      font-size: 1.1rem;
      border-radius: 40px;
    }

    /* ========== STEPS SECTION ========== */
    .steps-section {
      margin: 40px 0;
    }
    .steps-section h2 {
      text-align: center;
      margin-bottom: 2rem;
    }
    .step-box {
      text-align: center;
      margin-bottom: 20px;
    }
    .step-box i {
      font-size: 3rem;
      color: #1565c0;
      margin-bottom: 10px;
    }
    .step-box p {
      font-size: 1rem;
      color: #555555;
    }

    /* ========== FAQ SECTION ========== */
    .faq-section {
      margin: 40px 0;
    }
    .faq-section h5 {
      color: #1565c0;
      font-weight: 600;
      text-align: center;
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

    /* ========== MODAL & FORM WIZARD ========== */
    .modal {
      max-height: 90%;
      border-radius: 8px;
    }
    .modal-content {
      padding-bottom: 0; /* We'll handle spacing in steps */
    }
    .modal-footer {
      border-top: none;
      padding-top: 0;
    }
    .modal-header {
      margin-bottom: 1.5rem;
      text-align: center;
    }
    .modal-header h5 {
      margin-bottom: 0.5rem;
      font-weight: 700;
      color: #1565c0;
    }

    /* Step Navigation */
    .form-step {
      display: none; 
    }
    .form-step.active {
      display: block;
    }

    /* Input fields */
    .input-field label {
      color: #444444;
      font-weight: 500;
    }
    .input-field input[type="text"],
    .input-field input[type="number"] {
      border: 1px solid #ccc;
      box-shadow: none;
    }

    /* ========== Payment Info in Step 2 ========== */
    .payment-info {
      background-color: #ffffff;
      border-radius: 4px;
      margin: 20px 0;
      padding: 20px;
      text-align: center;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .payment-info .eth-address {
      font-family: monospace;
      display: inline-block;
      background-color: #fff8e1;
      color: #ff9800; /* Orange accent */
      padding: 10px;
      border-radius: 4px;
      margin: 10px 0;
      font-size: 1.1rem;
    }
    .payment-info img {
      border-radius: 4px;
      margin: 10px 0;
    }

    /* ========== STATUS MESSAGE ========== */
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

    /* ========== FOOTER ========== */
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
  </style>
</head>
<body>

  <!-- ========== HERO SECTION ========== -->
  <section class="hero">
    <h1>Create Your Own Crypto Coin in 5 Minutes!</h1>
    <p>No coding skills required. Fast and Easy process.</p>
    <div class="crypto-icons" aria-label="Cryptocurrency Icons">
      <i class="material-icons">currency_bitcoin</i>
      <i class="material-icons">token</i>
      <i class="material-icons">account_balance_wallet</i>
    </div>
    <!-- Button with new "soft" style -->
    <a
      href="#coinModal"
      class="soft-button soft-button-large modal-trigger"
    >
      Create Coin
    </a>
  </section>

  <!-- ========== STEPS SECTION ========== -->
  <section class="steps-section">
    <div class="container">
      <h2>Steps to Create Your Coin</h2>
      <div class="row">
        <div class="col s12 m3">
          <div class="step-box">
            <i class="material-icons">edit</i>
            <p>Fill out the form with your coin details.</p>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="step-box">
            <i class="material-icons">send</i>
            <p>Submit your details.</p>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="step-box">
            <i class="material-icons">account_balance</i>
            <p>Get payment info to send ETH.</p>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="step-box">
            <i class="material-icons">check_circle</i>
            <p>Confirm and watch your coin deploy!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ SECTION (References to 'coin') ========== -->
  <section class="faq-section">
    <div class="container">
      <h5>Frequently Asked Questions</h5>
      <ul class="collapsible popout">
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>What is Cryptonow?
          </div>
          <div class="collapsible-body">
            <p>Cryptonow is a platform for creating custom ERC-20 coins easily.</p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>How do I create my coin?
          </div>
          <div class="collapsible-body">
            <p>Fill out the form, get payment instructions, make payment, and let our system handle the rest.</p>
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
            <i class="material-icons">help_outline</i>Can the coin be traded on exchanges?
          </div>
          <div class="collapsible-body">
            <p>The coin follows the ERC-20 standard, compatible with most wallets/exchanges. Listing is up to you.</p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>How long does it take to create a coin?
          </div>
          <div class="collapsible-body">
            <p>Coins are created within minutes after payment confirmation.</p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>What are the costs involved?
          </div>
          <div class="collapsible-body">
            <p>It costs <strong>0.05 ETH</strong> + network fees to create a coin.</p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>Who owns the coin after it's created?
          </div>
          <div class="collapsible-body">
            <p>The coin belongs to the wallet address you specify as the receiver.</p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>Can I create coins on other blockchains?
          </div>
          <div class="collapsible-body">
            <p>Currently we only support Ethereum. More blockchains coming soon.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ========== MODAL: 2-STEP COIN CREATION WIZARD ========== -->
  <div id="coinModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Coin Creation Wizard</h5>
      </div>
      <!-- Step 1: Coin Details -->
      <div class="form-step active" id="step1">
        <h6>Step 1: Enter Coin Details</h6>
        <form id="coinForm">
          <div class="row">
            <!-- Coin Name -->
            <div class="input-field col s12 m6">
              <label for="tokenName">Coin Name</label>
              <input
                type="text"
                id="tokenName"
                placeholder="Ethereum"
                required
              />
            </div>
            <!-- Coin Symbol -->
            <div class="input-field col s12 m6">
              <label for="tokenSymbol">Coin Symbol (3-5 uppercase)</label>
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
              <label for="receiverAddress">Coin Receiver Address</label>
              <input
                type="text"
                id="receiverAddress"
                placeholder="0xYourEthereumAddress"
                required
              />
            </div>
            <!-- Payment Sender Address -->
            <div class="input-field col s12">
              <label for="userAddress">Payment Sender Address</label>
              <input
                type="text"
                id="userAddress"
                placeholder="0xYourEthereumAddress"
                required
              />
            </div>
          </div>
        </form>
        <div id="statusMessage" role="status" aria-live="polite"></div>
      </div>
      <!-- Step 2: Payment Info + Confirm -->
      <div class="form-step" id="step2">
        <h6>Step 2: Payment Information</h6>
        <div class="payment-info">
          <p>
            Please send <strong>0.05 ETH + Network Fees</strong> to the address below:
          </p>
          <div class="eth-address">0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805</div>
          <p>Or scan the QR code:</p>
          <img
            src="https://api.qrserver.com/v1/create-qr-code/?data=ethereum:0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805&size=150x150"
            alt="Payment QR Code"
          />
          <p style="color: #ff9800;">
            Make sure to match the exact amount to avoid errors.
          </p>
        </div>
        <p class="center" style="color: #555;">
          Once payment is detected, your coin will be created automatically.
        </p>
      </div>
    </div>
    <div class="modal-footer" style="margin-bottom: 1rem;">
      <!-- Step Navigation Buttons with new "soft-button" style -->
      <button
        id="btnPrev"
        class="soft-button waves-effect"
        style="display: none; margin-right: 10px;"
      >
        Back
      </button>
      <button
        id="btnNext"
        class="soft-button waves-effect"
      >
        Show Payment Info
      </button>
      <button
        id="btnSubmit"
        class="soft-button waves-effect"
        style="display: none; margin-right: 10px;"
      >
        Create My Coin
      </button>
      <a href="#!" class="modal-close btn-flat" style="text-transform: none;">Close</a>
    </div>
  </div>

  <!-- ========== FOOTER ========== -->
  <footer>
    <p>&copy; <?php echo date('Y'); ?> Cryptonow. All rights reserved.</p>
    <!-- Example footer links: -->
    <p>
      <a href="#coinModal" class="modal-trigger">Create Coin</a> |
      <a href="#!">Privacy Policy</a> |
      <a href="#!">Terms of Service</a>
    </p>
  </footer>

  <!-- Materialize JS -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
  ></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Init modal
      const modalElems = document.querySelectorAll(".modal");
      M.Modal.init(modalElems);

      // Init collapsible (FAQ)
      const collapsibles = document.querySelectorAll(".collapsible");
      M.Collapsible.init(collapsibles);

      // Wizard Navigation
      const step1 = document.getElementById("step1");
      const step2 = document.getElementById("step2");
      const btnPrev = document.getElementById("btnPrev");
      const btnNext = document.getElementById("btnNext");
      const btnSubmit = document.getElementById("btnSubmit");

      // Status message
      const statusMessage = document.getElementById("statusMessage");
      let currentStep = 1;

      function showStep(step) {
        step1.classList.remove("active");
        step2.classList.remove("active");
        if (step === 1) {
          step1.classList.add("active");
          btnNext.style.display = "inline-block";
          btnNext.innerText = "Show Payment Info"; // Per your request
          btnPrev.style.display = "none";
          btnSubmit.style.display = "none";
        } else {
          step2.classList.add("active");
          btnNext.style.display = "none";
          btnPrev.style.display = "inline-block";
          btnSubmit.style.display = "inline-block";
        }
      }
      showStep(currentStep);

      // Validate Step 1 fields, then go to Step 2
      btnNext.addEventListener("click", function () {
        statusMessage.innerHTML = "";
        statusMessage.className = "";

        const tokenName = document.getElementById("tokenName").value.trim();
        const tokenSymbol = document.getElementById("tokenSymbol").value.trim();
        const initialSupply = document.getElementById("initialSupply").value.trim();
        const receiverAddress = document.getElementById("receiverAddress").value.trim();
        const userAddress = document.getElementById("userAddress").value.trim();

        // Validation checks
        if (tokenName.length < 3 || tokenName.length > 50) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Coin Name must be between 3 and 50 characters.</div>';
          return;
        }
        if (!/^[A-Z]{3,5}$/.test(tokenSymbol)) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Coin Symbol must be 3-5 uppercase letters only.</div>';
          return;
        }
        if (!/^\d+$/.test(initialSupply) || parseInt(initialSupply) <= 0) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Initial Supply must be a positive integer.</div>';
          return;
        }
        if (!/^0x[a-fA-F0-9]{40}$/.test(receiverAddress)) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Coin Receiver Address must be a valid Ethereum address.</div>';
          return;
        }
        if (!/^0x[a-fA-F0-9]{40}$/.test(userAddress)) {
          statusMessage.classList.add("red");
          statusMessage.innerHTML =
            '<div class="card-panel red lighten-4">Payment Sender Address must be a valid Ethereum address.</div>';
          return;
        }

        currentStep = 2;
        showStep(currentStep);
      });

      // "Back" -> Step 1
      btnPrev.addEventListener("click", function () {
        statusMessage.innerHTML = "";
        statusMessage.className = "";
        currentStep = 1;
        showStep(currentStep);
      });

      // Final Submit
      btnSubmit.addEventListener("click", async function () {
        statusMessage.innerHTML = "";
        statusMessage.className = "yellow";
        statusMessage.innerText = "Waiting for payment...";

        const tokenName = document.getElementById("tokenName").value.trim();
        const tokenSymbol = document.getElementById("tokenSymbol").value.trim();
        const initialSupply = document.getElementById("initialSupply").value.trim();
        const receiverAddress = document.getElementById("receiverAddress").value.trim();
        const userAddress = document.getElementById("userAddress").value.trim();

        try {
          // Example: Adjust endpoint/payload to your needs
          const response = await axios.post("/api/create-token", {
            tokenName,
            tokenSymbol,
            initialSupply,
            receiverAddress,
            userAddress,
          });

          statusMessage.innerText = "Payment detected! Creating your coin...";
          setTimeout(() => {
            const txHash = response.data.transactionHash;
            statusMessage.classList.remove("yellow");
            statusMessage.classList.add("green");
            statusMessage.innerHTML =
              `Coin created! <a href="https://sepolia.etherscan.io/address/${txHash}" target="_blank">View Transaction</a>`;
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
