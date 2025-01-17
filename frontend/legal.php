<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Understand our policies on data handling and your responsibilities when using Cryptonow.">
    <meta name="keywords" content="Cryptonow, legal disclaimer, token creation policies, data retention">
    <meta name="author" content="Cryptonow">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://token.cryptonow.cc/legal">
    <title>Legal Disclaimer - Cryptonow</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <style>
        body {
            background: #1a1a1a;
            font-family: 'Roboto', sans-serif;
            color: #e0e0e0;
        }
        header {
            background: linear-gradient(120deg, #5e35b1, #4527a0);
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        header h1 {
            font-size: 2.8rem;
            font-weight: bold;
        }
        header p {
            font-size: 1.4rem;
        }
        .container {
            margin-top: 30px;
        }
        .collapsible-header {
            font-weight: bold;
            color: #fbc02d;
            background: #333;
        }
        .collapsible-body {
            background: #222;
            color: #e0e0e0;
        }
        footer {
            background: #121212;
            color: #bdbdbd;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: #fbc02d;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Legal Disclaimer</h1>
        <p>Understand our policies on data handling and your responsibilities when using our platform.</p>
    </header>

    <main class="container">
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">info</i>No Data Retention</div>
                <div class="collapsible-body"><span>We do not store or retain any information provided during the token creation process. All data is discarded once the token is created.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">payment</i>Payment Obligations</div>
                <div class="collapsible-body"><span>Our sole responsibility is to create the token as per the submitted details. After successful creation, we hold no further obligations.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">security</i>Token Responsibility</div>
                <div class="collapsible-body"><span>You are solely responsible for the management and use of the created token, including compliance with legal requirements.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">support</i>No Support or Maintenance</div>
                <div class="collapsible-body"><span>After the token is created, we do not offer ongoing support, maintenance, or modifications.</span></div>
            </li>
            <li>    
                <div class="collapsible-header"><i class="material-icons">warning</i>Disclaimer of Liability</div>
                <div class="collapsible-body"><span>We are not liable for any loss, damage, or misuse of the token after creation. Use our platform at your own risk.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">error_outline</i>Incorrect Payment</div>
                <div class="collapsible-body"><span>We are not responsible if the user sends payment to the wrong address or sends an incorrect amount. Ensure the details are accurate before proceeding.</span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">gavel</i>Acceptance of Terms</div>
                <div class="collapsible-body"><span>By using our platform, you acknowledge and agree to these terms. If you do not agree, you must not use our services.</span></div>
            </li>
        </ul>
    </main>
   <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const elems = document.querySelectorAll('.collapsible');
            M.Collapsible.init(elems);
        });
    </script>
</body>
</html>