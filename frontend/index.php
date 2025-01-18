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

  <!-- Axios (For handling form submission) -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <?php  include 'google.php'; /* If you have analytics scripts, include them here */ ?>

  <style>
    /* ========== BASE STYLES ========== */
    body {
      background-color: #f5f5f5; 
      color: #333333;           
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

    /* ========== NEUMORPHIC / SOFT BUTTONS ========== */
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
      padding-bottom: 0; 
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
    /* We have 3 steps now */
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

    /* ========== Payment Info (Step 2) ========== */
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
      color: #ff9800; 
      padding: 10px;
      border-radius: 4px;
      margin: 10px 0;
      font-size: 1.1rem;
    }
    .payment-info img {
      border-radius: 4px;
      margin: 10px 0;
    }

    /* ========== PASTEL ALERTS FOR STATUS MESSAGE ========== */
    #statusMessage {
      margin-top: 20px;
      padding: 16px;
      border-radius: 4px;
      font-weight: 600;
      text-align: center;
    }
    /* Error (soft red) */
    #statusMessage.error {
      background-color: #fdecec; 
      border: 1px solid #f5c6c5; 
      color: #9c2a2a;           
    }
    /* Success (soft green) */
    #statusMessage.success {
      background-color: #edf7ee; 
      border: 1px solid #c2e4c7; 
      color: #2d572c;           
    }
    /* Warning (soft yellow) */
    #statusMessage.warning {
      background-color: #fff9e6; 
      border: 1px solid #ffe4b5; 
      color: #8a6d3b;           
    }
    /* Links in success messages */
    #statusMessage.success a {
      color: #2d572c;
      text-decoration: underline;
      font-weight: 700;
    }

    /* ========== STEP 3: CREATION STATUS ========== */
    .creation-status {
      text-align: center;
      color: #555;
    }
    .creation-spinner {
      margin: 20px auto;
      border: 6px solid #f3f3f3;
      border-top: 6px solid #1565c0;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      animation: spin 1s linear infinite;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
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
    <!-- "Soft" style large button -->
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

  <!-- ========== FAQ SECTION ========== -->
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
            <p>The coin follows the ERC-20 standard, compatible with most wallets and exchanges. Listing is up to you.</p>
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
            <p>The coin belongs to the wallet address you provide in the form.</p>
          </div>
        </li>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">help_outline</i>Can I create coins on other blockchains?
          </div>
          <div class="collapsible-body">
            <p>Currently, we only support Ethereum. More blockchains coming soon.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ========== MODAL: 3-STEP COIN CREATION WIZARD ========== -->
  <div id="coinModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Coin Creation Wizard</h5>
      </div>
      <!-- STEP 1: Coin Details -->
      <div class="form-step active" id="step1">
        <h6>Step 1: Enter Coin Details</h6>
        <form id="coinForm">
          <div class="row">
            <!-- Coin Name -->
            <div class="input-field col s12 m6">
              <label for="coinName">Coin Name</label>
              <input
                type="text"
                id="coinName"
                placeholder="Ethereum"
                required
              />
            </div>
            <!-- Coin Symbol -->
            <div class="input-field col s12 m6">
              <label for="coinSymbol">Coin Symbol (3-5 uppercase)</label>
              <input
                type="text"
                id="coinSymbol"
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
            <!-- Wallet Address (single field) -->
            <div class="input-field col s12 m6">
              <label for="walletAddress">Your Ethereum Address</label>
              <input
                type="text"
                id="walletAddress"
                placeholder="0xYourEthereumAddress"
                required
              />
            </div>
          </div>
        </form>
        <div id="statusMessage" role="status" aria-live="polite"></div>
      </div>

      <!-- STEP 2: Payment Info -->
      <div class="form-step" id="step2">
        <h6>Step 2: Payment Information</h6>
        <div class="payment-info">
          <p>
            <strong>IMPORTANT:</strong> You must submit this form first. Then send <strong>0.05 ETH + Network Fees</strong> to the address below <em>after</em> successful submission.
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
          Once payment is detected on-chain, your coin will be deployed automatically.
        </p>
      </div>

      <!-- STEP 3: Creation Status -->
      <div class="form-step" id="step3">
        <h6>Step 3: Creation Status</h6>
        <div class="creation-status">
          <div id="creationSpinner" class="creation-spinner"></div>
          <p id="creationStatusText" style="margin-top: 10px;">
            Deploying your coin...
          </p>
        </div>
        <!-- We'll reuse #statusMessage for final success/error messages if we want -->
        <div id="finalStatusMessage" role="status" aria-live="polite" style="margin-top: 20px;"></div>
      </div>
    </div>

    <div class="modal-footer" style="margin-bottom: 1rem;">
      <!-- Wizard Navigation Buttons -->
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
        id="btnDeploy"
        class="soft-button waves-effect"
        style="display: none; margin-right: 10px;"
      >
        Deploy My Coin
      </button>
      <a href="#!" class="modal-close btn-flat" style="text-transform: none;">Close</a>
    </div>
  </div>

  <!-- ========== FOOTER ========== -->
  <?php include 'footer.php'; ?>
  <!-- If you don't have a separate footer file, replace the above line with
       <footer>...your footer content...</footer>
  -->

  <
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

      // Wizard Steps
      const step1 = document.getElementById("step1");
      const step2 = document.getElementById("step2");
      const step3 = document.getElementById("step3");

      // Buttons
      const btnPrev = document.getElementById("btnPrev");
      const btnNext = document.getElementById("btnNext");
      const btnDeploy = document.getElementById("btnDeploy");

      // Step 3 elements
      const creationSpinner = document.getElementById("creationSpinner");
      const creationStatusText = document.getElementById("creationStatusText");
      const finalStatusMessage = document.getElementById("finalStatusMessage");

      // Step 1 status message
      const statusMessage = document.getElementById("statusMessage");

      let currentStep = 1;

      function showStep(step) {
        // Hide all steps
        step1.classList.remove("active");
        step2.classList.remove("active");
        step3.classList.remove("active");

        // Reset dynamic content
        creationSpinner.style.display = "none";
        creationStatusText.innerText = "";
        finalStatusMessage.innerHTML = "";
        finalStatusMessage.className = ""; // remove any pastel alert classes

        if (step === 1) {
          step1.classList.add("active");
          btnNext.style.display = "inline-block";
          btnNext.innerText = "Show Payment Info";
          btnPrev.style.display = "none";
          btnDeploy.style.display = "none";
        } else if (step === 2) {
          step2.classList.add("active");
          btnNext.style.display = "none";
          btnPrev.style.display = "inline-block";
          btnDeploy.style.display = "inline-block";
        } else {
          step3.classList.add("active");
          btnNext.style.display = "none";
          btnPrev.style.display = "none";
          btnDeploy.style.display = "none";
        }
      }
      showStep(currentStep);

      // STEP 1 -> Validate -> Step 2
      btnNext.addEventListener("click", function() {
        // Clear old messages
        statusMessage.className = "";
        statusMessage.innerHTML = "";

        // Collect fields
        const coinName = document.getElementById("coinName").value.trim();
        const coinSymbol = document.getElementById("coinSymbol").value.trim();
        const initialSupply = document.getElementById("initialSupply").value.trim();
        const walletAddress = document.getElementById("walletAddress").value.trim();

        // Basic validations
        // 1. Coin Name (3-50 chars)
        if (coinName.length < 3 || coinName.length > 50) {
          statusMessage.classList.add("error");
          statusMessage.innerText = "Coin Name must be between 3 and 50 characters.";
          return;
        }
        // 2. Coin Symbol (uppercase, 3-5 chars)
        if (!/^[A-Z]{3,5}$/.test(coinSymbol)) {
          statusMessage.classList.add("error");
          statusMessage.innerText = "Coin Symbol must be 3-5 uppercase letters only.";
          return;
        }
        // 3. Initial Supply (positive integer)
        if (!/^\d+$/.test(initialSupply) || parseInt(initialSupply) <= 0) {
          statusMessage.classList.add("error");
          statusMessage.innerText = "Initial Supply must be a positive integer.";
          return;
        }
        // 4. Wallet Address
        if (!/^0x[a-fA-F0-9]{40}$/.test(walletAddress)) {
          statusMessage.classList.add("error");
          statusMessage.innerText = "Wallet Address must be a valid Ethereum address.";
          return;
        }

        // If pass all checks -> Step 2
        currentStep = 2;
        showStep(currentStep);
      });

      // STEP 2 -> "Deploy My Coin" -> Step 3
      btnDeploy.addEventListener("click", function() {
        currentStep = 3;
        showStep(currentStep);

        // Indicate creation in progress...
        creationSpinner.style.display = "inline-block";
        creationStatusText.innerText = "Deploying your coin...";

        // We'll do the actual creation AJAX call here
        doCoinCreation();
      });

      // "Back" from Step 2 to Step 1
      btnPrev.addEventListener("click", function() {
        statusMessage.className = "";
        statusMessage.innerHTML = "";
        currentStep = 1;
        showStep(currentStep);
      });

      // Actually create the coin with an AJAX call
      async function doCoinCreation() {
        // Grab form fields again (already validated in step 1, but let's be thorough)
        const coinName = document.getElementById("coinName").value.trim();
        const coinSymbol = document.getElementById("coinSymbol").value.trim();
        const initialSupply = document.getElementById("initialSupply").value.trim();
        const walletAddress = document.getElementById("walletAddress").value.trim();

        // We can update the creationStatusText or finalStatusMessage as we go
        try {
          creationStatusText.innerText = "Contacting server...";

          // Example POST request
          const response = await axios.post("/api/create-token", {
            coinName,
            coinSymbol,
            initialSupply,
            walletAddress
          });

          // Simulate short delay
          setTimeout(() => {
            creationSpinner.style.display = "none";
            finalStatusMessage.classList.add("success");
            finalStatusMessage.innerHTML = `
              <p>Your coin is successfully deployed!</p>
              <p>
                <a
                  href="https://sepolia.etherscan.io/address/${response.data.transactionHash}"
                  target="_blank"
                >
                  View on Etherscan
                </a>
              </p>`;
          }, 1500);

        } catch (err) {
          creationSpinner.style.display = "none";
          finalStatusMessage.classList.add("error");
          finalStatusMessage.innerText = "Error Deploying Coin: " + err.message;
        }
      }
    });
  </script>
</body>
</html>
