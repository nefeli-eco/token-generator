<?php
/**
 * wizard.php
 *
 * This file contains the 3-step coin creation wizard modal
 * with pastel alerts, validated form steps, and an Axios call.
 * 
 * Include this in any page (e.g. index.php) with:
 *   <?php include 'wizard.php'; ?>
 */
?>

<!-- 3-STEP COIN CREATION WIZARD MODAL -->
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
      <!-- Status message for Step 1 validation -->
      <div id="statusMessage" role="status" aria-live="polite"></div>
    </div>

    <!-- STEP 2: Payment Info -->
    <div class="form-step" id="step2">
      <h6>Step 2: Payment Information</h6>
      <div class="payment-info">
        <p>
          <strong>IMPORTANT:</strong> Submit the form first. Then send
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
      <div class="creation-status" style="text-align:center; color:#555;">
        <div
          id="creationSpinner"
          class="creation-spinner"
          style="margin:20px auto;"
        ></div>
        <p id="creationStatusText" style="margin-top:10px;">
          Deploying your coin...
        </p>
      </div>
      <div
        id="finalStatusMessage"
        role="status"
        aria-live="polite"
        style="margin-top:20px;"
      ></div>
    </div>
  </div>

  <!-- WIZARD NAVIGATION BUTTONS -->
  <div class="modal-footer" style="margin-bottom:1rem;">
    <button
      id="btnPrev"
      class="soft-button waves-effect"
      style="display:none; margin-right:10px;"
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
      style="display:none; margin-right:10px;"
    >
      Deploy My Coin
    </button>
    <a
      href="#!"
      class="modal-close btn-flat"
      style="text-transform:none;"
    >
      Close
    </a>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
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
    // Hide all
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
    // 2. Coin Symbol (3-5 uppercase)
    if (!/^[A-Z]{3,5}$/.test(coinSymbol)) {
      statusMessage.classList.add("error");
      statusMessage.innerText = "Coin Symbol must be 3-5 uppercase letters only.";
      return;
    }
    // 3. Initial Supply
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

    // Show spinner & text
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
    const coinName = document.getElementById("coinName").value.trim();
    const coinSymbol = document.getElementById("coinSymbol").value.trim();
    const initialSupply = document.getElementById("initialSupply").value.trim();
    const walletAddress = document.getElementById("walletAddress").value.trim();

    try {
      creationStatusText.innerText = "Contacting server...";
      // Example call
      const response = await axios.post("/api/create-coin", {
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
