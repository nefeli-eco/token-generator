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

  <?php /* Your Analytics or includes if needed */ ?>
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
      color: #333333;
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
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
    .hero .crypto-icons i {
      font-size: 2.5rem;
      color: #1565c0; /* Blue accent for icons */
      margin: 0 5px;
    }
    .hero .btn-large {
      background-color: #1565c0;
      font-weight: 600;
      text-transform: uppercase;
      border-radius: 8px;
      margin-top: 20px;
    }
    .hero .btn-large:hover {
      background-color: #0d47a1;
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

    /* Buttons in modal */
    .btn-step {
      background-color: #1565c0;
      color: #ffffff;
      margin-right: 10px;
      border-radius: 6px;
      text-transform: none;
    }
    .btn-step:hover {
      background-color: #0d47a1;
    }
    .btn-flat {
      text-transform: none;
    }

    /* ---------- Payment Info in Step 2 ---------- */
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
    <!-- Open modal with form/wizard -->
    <a href="#tokenModal" class="btn btn-large waves-effect waves-light modal-trigger">Create Token</a>
  </section>

  <!-- ========== STEPS SECTION ========== -->
  <section class="steps-section">
    <div class="container">
      <h2>Steps to Create Your Token</h2>
      <div class="row">
        <div class="col s12 m3">
          <div class="step-box">
            <i class="material-icons">edit</i>
            <p>Fill out the form with your token details.</p>
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
            <p>Confirm and let magic happen!</p>
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
          <div class="collapsible-header"><i class="material-icons">help_outline</i>What is Cryptonow?</div>
          <div class="collapsible-body"><p>Cryptonow is a platform for creating custom ERC-20 tokens easily.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">help_outline</i>How do I create my token?</div>
          <div class="collapsible-body"><p>Fill out the form, get payment instructions, make payment, and let our system do the rest.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">help_outline</i>What payment methods are accepted?</div>
          <div class="collapsible-body"><p>We accept Ethereum (ETH) only.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">help_outline</i>Can the token be traded on exchanges?</div>
          <div class="collapsible-body"><p>The token follows ERC-20, compatible with most wallets/exchanges. Listing is up to you.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">help_outline</i>How long does it take to create a token?</div>
          <div class="collapsible-body"><p>Tokens are created within minutes after payment confirmation.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">help_outline</i>What are the costs involved?</div>
          <div class="collapsible-body"><p>It costs <strong>0.05 ETH</strong> + network fees to create a token.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">help_outline</i>Who owns the token after it's created?</div>
          <div class="collapsible-body"><p>The token belongs to the wallet address you specify as receiver.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">help_outline</i>Can I create tokens on other blockchains?</div>
          <div class="collapsible-body"><p>Currently we only support Ethereum. More blockchains coming soon.</p></div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ========== MODAL: TOKEN CREATION WIZARD ========== -->
  <div id="tokenModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Token Creation Wizard</h5>
      </div>
      <!-- Step 1: Token Details -->
      <div class="form-step active" id="step1">
        <h6>Step 1: Enter Token Details</h6>
        <form id="tokenForm">
          <div class="row">
            <!-- Token Name -->
            <div class="input-field col s12 m6">
              <label for="tokenName">Token Name</label>
              <input type="text" id="tokenName" placeholder="Ethereum" required/>
            </div>
            <!-- Token Symbol -->
            <div class="input-field col s12 m6">
              <label for="tokenSymbol">Token Symbol (3-5 uppercase)</label>
              <input type="text" id="tokenSymbol" placeholder="ETH" required/>
            </div>
            <!-- Initial Supply -->
            <div class="input-field col s12 m6">
              <label for="initialSupply">Initial Supply</label>
              <input type="number" id="initialSupply" placeholder="10000000" required/>
            </div>
            <!-- Receiver Address -->
            <div class="input-field col s12 m6">
              <label for="receiverAddress">Token Receiver Address</label>
              <input type="text" id="receiverAddress" placeholder="0xYourEthereumAddress" required/>
            </div>
            <!-- Payment Sender Address -->
            <div class="input-field col s12">
              <label for="userAddress">Payment Sender Address</label>
              <input type="text" id="userAddress" placeholder="0xYourEthereumAddress" required/>
            </div>
          </div>
        </form>
        <div id="statusMessage" role="status" aria-live="polite"></div>
      </div>
      <!-- Step 2: Payment Info + Confirm -->
      <div class="form-step" id="step2">
        <h6>Step 2: Payment Information</h6>
        <div class="payment-info">
          <p>Please send <strong>0.05 ETH + Network Fees</strong> to the address below:</p>
          <div class="eth-address">0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805</div>
          <p>Or scan the QR code:</p>
          <img
            src="https://api.qrserver.com/v1/create-qr-code/?data=ethereum:0xE32FB3E75CA6f40682830c25e0a3C7C2A9856805&size=150x150"
            alt="Payment QR Code"
          />
          <p style="color: #ff9800;">Make sure to match the exact amount to avoid errors.</p>
        </div>
        <p class="center" style="color: #555;">
          Once payment is detected, your token will be created automatically.
        </p>
      </div>
    </div>
    <div class="modal-footer">
      <!-- Step Navigation Buttons -->
      <button id="btnPrev" class="btn-step waves-effect waves-light btn" style="display: none;">
        Back
      </button>
      <button id="btnNext" class="btn-step waves-effect waves-light btn">
        Next
      </button>
      <button id="btnSubmit" class="btn-step waves-effect waves-light btn" style="display: none;">
        Create Token
      </button>
      <a href="#!" class="modal-close waves-effect btn-flat">Close</a>
    </div>
  </div>

  <!-- ========== FOOTER ========== -->
  <footer>
    <p>&copy; <?php echo date('Y'); ?> Cryptonow. All rights reserved.</p>
    <!-- Example footer links: -->
    <p>
      <a href="#tokenModal" class="modal-trigger">Create Token</a> |
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

      // Init collapsible FAQ
      const collapsibles = document.querySelectorAll(".collapsible");
      M.Collapsible.init(collapsibles);

      // Form Wizard Navigation
      const step1 = document.getElementById("step1");
      const step2 = document.getElementById("step2");
      const btnPrev = document.getElementById("btnPrev");
      const btnNext = document.getElementById("btnNext");
      const btnSubmit = document.getElementById("btnSubmit");

      // Status message for validation
      const statusMessage = document.getElementById("statusMessage");

      let currentStep = 1; // We start on Step 1

      function showStep(step) {
        // Hide both steps
        step1.classList.remove("active");
        step2.classList.remove("active");

        if (step === 1) {
          step1.classList.add("active");
          btnNext.style.display = "inline-block";
          btnPrev.style.display = "none";
          btnSubmit.style.display = "none";
        } else if (step === 2) {
          step2.classList.add("active");
          btnNext.style.display = "none";
          btnPrev.style.display = "inline-block";
          btnSubmit.style.display = "inline-block";
        }
      }
      showStep(currentStep);

      // "Next" -> Validate Step 1 fields
      btnNext.addEventListener("click", function () {
        // Clear any previous messages
        statusMessage.innerHTML = "";
        statusMessage.className = "";

        // Collect form values
        const tokenName = document.getElementById("tokenName").value.trim();
        const tokenSymbol = document.getElementById("tokenSymbol").value.trim();
        const initialSupply = document.getElementById("initialSupply").value.trim();
        const receiverAddress = document.getElementById("receiverAddress").value.trim();
        const userAddress = document.getElementById("userAddress").value.trim();

        // Basic validations
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
        // 4. Ethereum addresses
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

        // If all pass, go to Step 2
        currentStep = 2;
        showStep(currentStep);
      });

      // "Prev" -> Go back to Step 1
      btnPrev.addEventListener("click", function () {
        statusMessage.innerHTML = "";
        statusMessage.className = "";
        currentStep = 1;
        showStep(currentStep);
      });

      // "Submit" -> Final Submit to create token
      btnSubmit.addEventListener("click", async function () {
        statusMessage.innerHTML = "";
        statusMessage.className = "yellow";
        statusMessage.innerText = "Waiting for payment...";

        // Gather values again (already validated, but let's be consistent)
        const tokenName = document.getElementById("tokenName").value.trim();
        const tokenSymbol = document.getElementById("tokenSymbol").value.trim();
        const initialSupply = document.getElementById("initialSupply").value.trim();
        const receiverAddress = document.getElementById("receiverAddress").value.trim();
        const userAddress = document.getElementById("userAddress").value.trim();

        try {
          // Example POST request
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
            statusMessage.innerHTML =
              `Token created! <a href="https://sepolia.etherscan.io/address/${txHash}" target="_blank">View Transaction</a>`;
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
