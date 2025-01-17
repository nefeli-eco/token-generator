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

  <?php // include 'google.php'; /* If you have analytics scripts, include them here */ ?>

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

  <!-- WIZARD MODAL IS NOW EXTRACTED TO A SEPARATE FILE -->
  <!-- e.g. <?php include 'wizard.php'; ?> -->

  <!-- ========== FOOTER ========== -->
  <footer>
    <p>&copy; <?php echo date('Y'); ?> Cryptonow. All rights reserved.</p>
    <p>
      <a href="#coinModal" class="modal-trigger">Create Coin</a> |
      <a href="#!">Privacy Policy</a> |
      <a href="#!">Terms of Service</a>
    </p>
  </footer>

  <!-- MATERIALIZE JS -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
  ></script>

  <!-- INCLUDE THE WIZARD PARTIAL -->
  <?php include 'wizard.php'; ?>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Init the modal
      const modalElems = document.querySelectorAll(".modal");
      M.Modal.init(modalElems);

      // Init collapsible FAQ
      const collapsibles = document.querySelectorAll(".collapsible");
      M.Collapsible.init(collapsibles);
    });
  </script>
</body>
</html>
