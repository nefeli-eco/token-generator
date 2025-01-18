<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="description"
    content="Discover the story and mission behind Cryptonow. Learn how we empower individuals and businesses to create and launch their own cryptocurrencies easily."
  />
  <meta
    name="keywords"
    content="Cryptonow, about us, cryptocurrency, coin creation, blockchain platform, mission"
  />
  <meta name="author" content="Cryptonow" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://token.cryptonow.cc/about" />
  <title>About Cryptonow</title>

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

  <!-- Axios (for wizard AJAX calls) -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <!-- If you have analytics scripts, include them here -->
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
      color: #333333;
      margin-top: 0.5rem;
    }
    p {
      line-height: 1.6;
      margin-bottom: 1rem;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }

    /* ========== HERO SECTION ========== */
    .hero {
      background-color: #ffffff;
      text-align: center;
      padding: 80px 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 40px;
    }
    .hero h1 {
      font-size: 2.7rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    .hero p {
      font-size: 1.3rem;
      color: #555555;
      margin-bottom: 2rem;
    }

    /* ========== STORY SECTION ========== */
    .story-section {
      padding: 40px 0;
      background-color: #ffffff;
      border-radius: 8px;
      margin-bottom: 40px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    .story-section h2 {
      text-align: center;
      color: #1565c0;
      font-weight: 600;
      margin-bottom: 30px;
    }
    .timeline-item {
      margin-bottom: 30px;
    }
    .timeline-item h5 {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 10px;
      color: #333;
    }
    .timeline-item p {
      color: #555555;
    }
    .timeline-icon {
      font-size: 2rem;
      color: #1565c0;
      margin-right: 10px;
    }

    /* ========== CORE VALUES SECTION ========== */
    .values-section {
      padding: 40px 0;
      margin-bottom: 40px;
    }
    .values-section h2 {
      text-align: center;
      color: #1565c0;
      font-weight: 600;
      margin-bottom: 40px;
    }
    .value-card {
      text-align: center;
      background-color: #ffffff;
      border-radius: 8px;
      padding: 30px 20px;
      margin-bottom: 20px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    .value-icon {
      font-size: 3rem;
      color: #1565c0;
      margin-bottom: 15px;
    }
    .value-card h5 {
      color: #333333;
      margin-bottom: 10px;
      font-size: 1.2rem;
    }
    .value-card p {
      color: #555555;
    }

    /* ========== TEAM SECTION ========== */
    .team-section {
      padding: 40px 0;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      margin-bottom: 40px;
    }
    .team-section h2 {
      text-align: center;
      color: #1565c0;
      font-weight: 600;
      margin-bottom: 40px;
    }
    .team-member-card {
      background-color: #ffffff;
      border-radius: 8px;
      text-align: center;
      padding: 30px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
    .team-member-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }
    .team-member-card h5 {
      margin-bottom: 5px;
      color: #1565c0;
      font-size: 1.2rem;
      font-weight: 600;
    }
    .team-member-card p {
      color: #555555;
      margin-bottom: 15px;
    }
    .social-links a {
      color: #1565c0;
      margin: 0 10px;
      font-size: 1.3rem;
      transition: color 0.3s;
    }
    .social-links a:hover {
      color: #0d47a1;
    }

    /* ========== CALL-TO-ACTION SECTION ========== */
    .cta-section {
      background-color: #1565c0;
      color: #ffffff;
      text-align: center;
      padding: 40px 20px;
      border-radius: 8px;
      margin-bottom: 40px;
    }
    .cta-section h3 {
      margin-bottom: 1rem;
      font-weight: 700;
    }
    .cta-section p {
      margin-bottom: 2rem;
      font-size: 1.1rem;
      color: #f0f0f0;
    }
    .cta-btn {
      display: inline-block;
      background-color: #ffffff;
      color: #1565c0 !important;
      font-weight: 600;
      padding: 0.8rem 2rem;
      border-radius: 30px;
      text-transform: none;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .cta-btn:hover {
      background-color: #f0f0f0;
      color: #0d47a1 !important;
    }

    /* ========== FOOTER ========== */
    footer {
      background-color: #ffffff;
      border-top: 1px solid #dddddd;
      text-align: center;
      padding: 20px;
      color: #777777;
    }
    footer a {
      color: #1565c0;
      text-decoration: none;
      margin: 0 10px;
    }
    footer a:hover {
      text-decoration: underline;
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

    /* Payment Info (Step 2) */
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

    /* Pastel Alerts for status messages */
    #statusMessage, #finalStatusMessage {
      margin-top: 20px;
      padding: 16px;
      border-radius: 4px;
      font-weight: 600;
      text-align: center;
    }
    /* Error (soft red) */
    #statusMessage.error, #finalStatusMessage.error {
      background-color: #fdecec; 
      border: 1px solid #f5c6c5; 
      color: #9c2a2a;           
    }
    /* Success (soft green) */
    #statusMessage.success, #finalStatusMessage.success {
      background-color: #edf7ee; 
      border: 1px solid #c2e4c7; 
      color: #2d572c;           
    }
    /* Warning (soft yellow) */
    #statusMessage.warning, #finalStatusMessage.warning {
      background-color: #fff9e6; 
      border: 1px solid #ffe4b5; 
      color: #8a6d3b;           
    }
    /* Links in success messages */
    #statusMessage.success a, #finalStatusMessage.success a {
      color: #2d572c;
      text-decoration: underline;
      font-weight: 700;
    }

    /* STEP 3: CREATION STATUS */
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

    .creation-status {
      text-align: center;
      color: #555;
    }
  </style>
</head>
<body>

  <!-- HERO SECTION -->
  <section class="hero">
    <h1>Our Story & Mission</h1>
    <p>Empowering people worldwide to create, deploy, and grow their own cryptocurrencies with ease.</p>
  </section>

  <main class="container">
    <!-- STORY / TIMELINE SECTION -->
    <section class="story-section">
      <h2>Where We Began</h2>
      <div class="row">
        <div class="col s12 m6 timeline-item">
          <i class="material-icons timeline-icon">history</i>
          <h5>Founded in 2025</h5>
          <p>
            Cryptonow started as a vision to simplify blockchain technology for
            everyday creators. We saw a world where anyone could deploy a coin
            without complex coding or huge costs.
          </p>
        </div>
        <div class="col s12 m6 timeline-item">
          <i class="material-icons timeline-icon">trending_up</i>
          <h5>Growing Community</h5>
          <p>
            Today, our platform hosts a vibrant community of entrepreneurs,
            artists, and enthusiasts minting their own crypto projects—
            everything from charity tokens to innovative DeFi solutions.
          </p>
        </div>
      </div>
    </section>

    <!-- CORE VALUES SECTION -->
    <section class="values-section">
      <h2>Our Core Values</h2>
      <div class="row">
        <div class="col s12 m4">
          <div class="value-card">
            <div class="value-icon">⚡</div>
            <h5>Accessibility</h5>
            <p>
              We believe blockchain should be open to all, so we offer an
              easy-to-use interface and affordable pricing.
            </p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="value-card">
            <div class="value-icon">💼</div>
            <h5>Professionalism</h5>
            <p>
              From our UI design to our backend security, we strive to maintain
              high standards so you can trust our platform.
            </p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="value-card">
            <div class="value-icon">🌐</div>
            <h5>Innovation</h5>
            <p>
              Cryptonow continually evolves to embrace cutting-edge blockchain
              technologies and user-driven features.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- TEAM SECTION -->
    <section class="team-section">
      <h2>Meet the Team</h2>
      <div class="row">
        <!-- Example single member -->
        <div class="col s12 m6 offset-m3">
          <div class="team-member-card">
            <h5>Savvanis Spyros</h5>
            <p>Founder & Visionary</p>
            <div class="social-links">
              <a
                href="https://www.linkedin.com/in/spyros-savvanis-7041549b/"
                target="_blank"
                aria-label="LinkedIn Profile of Savvanis Spyros"
              >
                <i class="material-icons" aria-hidden="true">person</i>
              </a>
              <a
                href="https://github.com/savvaniss"
                target="_blank"
                aria-label="GitHub Profile of Savvanis Spyros"
              >
                <i class="material-icons" aria-hidden="true">code</i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section class="cta-section">
      <h3>Ready to Join the Future of Crypto?</h3>
      <p>
        Whether you’re a seasoned entrepreneur or a curious newcomer, Cryptonow
        is here to turn your coin dreams into reality.
      </p>
      <!-- CTA button triggers the wizard modal below -->
      <a href="#coinModal" class="cta-btn modal-trigger">Create Coin</a>
    </section>
  </main>

  <!-- 3-STEP WIZARD MODAL (FULL CODE INSIDE THE PAGE) -->
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
            <!-- Wallet Address -->
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
        <!-- Step 1 validation status -->
        <div id="statusMessage" role="status" aria-live="polite"></div>
      </div>

      <!-- STEP 2: Payment Info -->
      <div class="form-step" id="step2">
        <h6>Step 2: Payment Information</h6>
        <div class="payment-info">
          <p>
            <strong>IMPORTANT:</strong> Submit the form first, then send
            <strong>0.05 ETH + Network Fees</strong> to the address below
            <em>after</em> successful submission.
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
          <div id="creationSpinner" class="creation-spinner" style="display:none;"></div>
          <p id="creationStatusText" style="margin-top:10px;"></p>
        </div>
        <div id="finalStatusMessage" role="status" aria-live="polite" style="margin-top:20px;"></div>
      </div>
    </div>

    <div class="modal-footer" style="margin-bottom:1rem;">
      <!-- Wizard Navigation Buttons -->
      <button
        id="btnPrev"
        class="btn waves-effect"
        style="display:none; margin-right:10px;"
      >
        Back
      </button>
      <button
        id="btnNext"
        class="btn waves-effect"
      >
        Show Payment Info
      </button>
      <button
        id="btnDeploy"
        class="btn waves-effect"
        style="display:none; margin-right:10px;"
      >
        Deploy My Coin
      </button>
      <a href="#!" class="modal-close btn-flat" style="text-transform:none;">Close</a>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>
  <!-- If you don't have a separate footer file, replace the above line with
       <footer>...your footer content...</footer>
  -->

  <!-- MATERIALIZE JS -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
  ></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Init modal
      const modalElems = document.querySelectorAll(".modal");
      M.Modal.init(modalElems);

      // Wizard steps
      const step1 = document.getElementById("step1");
      const step2 = document.getElementById("step2");
      const step3 = document.getElementById("step3");

      // Buttons
      const btnPrev = document.getElementById("btnPrev");
      const btnNext = document.getElementById("btnNext");
      const btnDeploy = document.getElementById("btnDeploy");

      // Step 1 error/success
      const statusMessage = document.getElementById("statusMessage");

      // Step 3
      const creationSpinner = document.getElementById("creationSpinner");
      const creationStatusText = document.getElementById("creationStatusText");
      const finalStatusMessage = document.getElementById("finalStatusMessage");

      let currentStep = 1;

      function showStep(step) {
        // Hide all steps
        step1.classList.remove("active");
        step2.classList.remove("active");
        step3.classList.remove("active");

        // Reset step 3 dynamic fields
        creationSpinner.style.display = "none";
        creationStatusText.innerText = "";
        finalStatusMessage.innerHTML = "";
        finalStatusMessage.className = "";

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
      btnNext.addEventListener("click", () => {
        // Clear old status
        statusMessage.className = "";
        statusMessage.innerHTML = "";

        const coinName = document.getElementById("coinName").value.trim();
        const coinSymbol = document.getElementById("coinSymbol").value.trim();
        const initialSupply = document.getElementById("initialSupply").value.trim();
        const walletAddress = document.getElementById("walletAddress").value.trim();

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

        currentStep = 2;
        showStep(currentStep);
      });

      // STEP 2 -> Deploy -> Step 3
      btnDeploy.addEventListener("click", () => {
        currentStep = 3;
        showStep(currentStep);

        creationSpinner.style.display = "inline-block";
        creationStatusText.innerText = "Deploying your coin...";

        // Start creation
        doCoinCreation();
      });

      // BACK -> Step 1
      btnPrev.addEventListener("click", () => {
        statusMessage.className = "";
        statusMessage.innerHTML = "";
        currentStep = 1;
        showStep(currentStep);
      });

      async function doCoinCreation() {
        const tokenName = document.getElementById("coinName").value.trim();
        const tokenSymbol = document.getElementById("coinSymbol").value.trim();
        const initialSupply = document.getElementById("initialSupply").value.trim();
        const walletAddress = document.getElementById("walletAddress").value.trim();

        try {
          creationStatusText.innerText = "Contacting server...";
          // Example call
          const response = await axios.post("/api/create-coin", {
            tokenName,
            tokenSymbol,
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
  <!-- End of script for wizard -->
</body>
</html>
