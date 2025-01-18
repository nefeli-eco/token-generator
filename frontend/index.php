<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta
    name="description"
    content="Create your own ERC-20 cryptocurrency token in minutes with no coding required."
  />
  <meta
    name="keywords"
    content="token creation, ERC-20, cryptocurrency, no coding, crypto coin, blockchain"
  />
  <meta name="author" content="Your Company" />
  <meta name="robots" content="index, follow"/>
  
  <title>Token Creator – Single-Step</title>

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
  <!-- Favicon (optional) -->
  <link rel="icon" type="image/x-icon" href="/favicon.ico" />

  <style>
    /* ========== GLOBAL STYLES ========== */
    body {
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
      font-family: 'Roboto', sans-serif;
      color: #333333;
    }
    h1, h2, h3, h4, h5, h6 {
      color: #333333;
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
    header.hero {
      background-color: #ffffff;
      text-align: center;
      padding: 60px 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      margin-bottom: 40px;
    }
    .hero h1 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    .hero p {
      font-size: 1.2rem;
      color: #555555;
      margin-bottom: 2rem;
    }

    /* ========== FORM CARD SECTION ========== */
    .card-form {
      background-color: #ffffff;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      margin-bottom: 40px;
    }
    .card-form h2 {
      text-align: center;
      color: #1565c0; /* Blue accent for heading */
      font-weight: 600;
      margin-bottom: 30px;
    }
    .input-field {
      margin-bottom: 20px;
    }
    .input-field label {
      display: block;
      margin-bottom: 5px;
      color: #444444;
      font-weight: 500;
    }
    .input-field input {
      border: 1px solid #ccc;
      background-color: #fafafa;
      padding: 10px 15px;
      box-shadow: none;
      width: 100%;
    }

    /* Payment Info Box */
    .payment-box {
      background-color: #fefefe;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      padding: 20px;
      margin-top: 20px;
    }
    .payment-box .eth-address {
      font-family: monospace;
      background-color: #fff8e1;
      color: #ff9800;
      padding: 10px;
      border-radius: 4px;
      display: inline-block;
      margin: 10px 0;
      font-size: 1.1rem;
    }
    .payment-box p {
      color: #555;
    }

    /* Submit Button */
    .btn-submit {
      background-color: #1565c0 !important;
      color: #ffffff !important;
      font-weight: 600;
      text-transform: none;
      border-radius: 30px;
      margin-top: 30px;
      box-shadow: none;
      padding: 0.8rem 2rem;
    }
    .btn-submit:hover {
      background-color: #0d47a1 !important;
    }

    /* Status / Spinner */
    #statusMessage {
      margin-top: 20px;
      padding: 16px;
      border-radius: 4px;
      font-weight: 600;
      text-align: center;
    }
    .error {
      background-color: #fdecec;
      border: 1px solid #f5c6c5;
      color: #9c2a2a;
    }
    .success {
      background-color: #edf7ee;
      border: 1px solid #c2e4c7;
      color: #2d572c;
    }
    .warning {
      background-color: #fff9e6;
      border: 1px solid #ffe4b5;
      color: #8a6d3b;
    }
    .spinner {
      display: none;
      margin: 20px auto;
      width: 40px;
      height: 40px;
      border: 6px solid #f3f3f3;
      border-top: 6px solid #1565c0;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }
    @keyframes spin {
      0%   { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
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
  </style>
</head>
<body>

  <!-- HERO -->
  <header class="hero">
    <h1>Build Your ERC-20 Token</h1>
    <p>No coding required. Launch your coin in just one step.</p>
  </header>

  <main class="container">
    <!-- SINGLE-STEP FORM -->
    <div class="card-form">
      <h2>Token Creation Form</h2>
      <form id="tokenForm">
        <div class="input-field">
          <label for="tokenName">Token Name</label>
          <input
            type="text"
            id="tokenName"
            placeholder="MyAwesomeToken"
            required
          />
        </div>
        <div class="input-field">
          <label for="tokenSymbol">Token Symbol (3-5 uppercase)</label>
          <input
            type="text"
            id="tokenSymbol"
            placeholder="MAT"
            required
          />
        </div>
        <div class="input-field">
          <label for="initialSupply">Initial Supply</label>
          <input
            type="number"
            id="initialSupply"
            placeholder="1000000"
            required
          />
        </div>
        <div class="input-field">
          <label for="walletAddress">Your Ethereum Address</label>
          <input
            type="text"
            id="walletAddress"
            placeholder="0xYourEthereumAddress"
            required
          />
        </div>

        <!-- Payment Info Box -->
        <div class="payment-box">
          <p>
            <strong>Send 0.05 ETH + Gas</strong> to the address below, <em>once
            you submit this form.</em> We'll detect your payment automatically.
          </p>
          <div class="eth-address">0x123456789abcdef123456789abcdef1234567890</div>
          <p style="margin-top:10px; color:#ff9800;">
            Double-check the address and amount before sending.
          </p>
        </div>

        <button
          type="submit"
          class="btn btn-submit waves-effect"
        >
          Create Token
        </button>
      </form>

      <div id="statusMessage" role="status" aria-live="polite"></div>
      <div class="spinner" id="spinner"></div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    <p>
      &copy; 2025 Your Company. All rights reserved.
    </p>
    <p>
      <a href="#!">Privacy Policy</a> |
      <a href="#!">Terms of Service</a>
    </p>
  </footer>

  <!-- MATERIALIZE JS -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
  ></script>
  <!-- AXIOS (Optional, if you want to do the submission with axios) -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      // If you want to init anything from Materialize, e.g. modals or collapsibles
      // M.AutoInit();

      // Form submission
      const tokenForm = document.getElementById("tokenForm");
      const statusMessage = document.getElementById("statusMessage");
      const spinner = document.getElementById("spinner");

      tokenForm.addEventListener("submit", async (e) => {
        e.preventDefault();

        // Clear old messages/spinner
        statusMessage.className = "";
        statusMessage.innerHTML = "";
        spinner.style.display = "none";

        const tokenName = document.getElementById("tokenName").value.trim();
        const tokenSymbol = document.getElementById("tokenSymbol").value.trim();
        const initialSupply = document.getElementById("initialSupply").value.trim();
        const walletAddress = document.getElementById("walletAddress").value.trim();

        // Basic validation
        if (tokenName.length < 3 || tokenName.length > 50) {
          statusMessage.classList.add("error");
          statusMessage.textContent = "Token Name must be 3-50 characters.";
          return;
        }
        if (!/^[A-Z]{3,5}$/.test(tokenSymbol)) {
          statusMessage.classList.add("error");
          statusMessage.textContent = "Token Symbol must be 3-5 uppercase letters only.";
          return;
        }
        if (!/^\d+$/.test(initialSupply) || parseInt(initialSupply) <= 0) {
          statusMessage.classList.add("error");
          statusMessage.textContent = "Initial Supply must be a positive integer.";
          return;
        }
        if (!/^0x[a-fA-F0-9]{40}$/.test(walletAddress)) {
          statusMessage.classList.add("error");
          statusMessage.textContent = "Invalid Ethereum address.";
          return;
        }

        // Show spinner and warning
        spinner.style.display = "block";
        statusMessage.classList.add("warning");
        statusMessage.textContent = "Submitting form... We’ll wait for your payment.";

        try {
          // Example POST request to your server
          const response = await axios.post("/api/create-token", {
            tokenName,
            tokenSymbol,
            initialSupply,
            walletAddress
          });

          // Simulate final deployment or immediate success
          spinner.style.display = "none";
          statusMessage.classList.remove("warning");
          statusMessage.classList.add("success");
          statusMessage.innerHTML = `
            Token creation initiated! 
            <br />
            <strong>Payment Transaction:</strong> 
            <a href="https://etherscan.io/tx/${response.data.transactionHash}" target="_blank">View on Etherscan</a>
          `;

          // Clear form
          tokenForm.reset();

        } catch (err) {
          spinner.style.display = "none";
          statusMessage.classList.remove("warning");
          statusMessage.classList.add("error");
          statusMessage.textContent =
            err.response?.data?.message || "Error creating token. Please try again.";
        }
      });
    });
  </script>
</body>
</html>
