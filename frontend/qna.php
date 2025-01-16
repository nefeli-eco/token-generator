<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Frequently Asked Questions about Cryptonow. Learn how to create your own crypto tokens in minutes.">
    <meta name="keywords" content="cryptonow, crypto, token generator, cryptocurrency, FAQ">
    <title>FAQ - Cryptonow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .main-header {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }
        .main-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .faq-container {
            margin: 30px auto;
            max-width: 900px;
        }
        .faq-item {
            margin-bottom: 20px;
        }
        .faq-item h5 {
            cursor: pointer;
            background: #007bff;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .faq-item h5:hover {
            background: #0056b3;
        }
        .faq-item p {
            margin: 0;
            padding: 10px 15px;
            background: #e9ecef;
            border-left: 4px solid #007bff;
            display: none;
            border-radius: 0 0 5px 5px;
        }
        footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            background: #e9ecef;
        }
        footer a {
            margin: 0 10px;
            color: #007bff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header class="main-header">
        <h1>Frequently Asked Questions</h1>
        <p>Find answers to common questions about creating your own crypto tokens.</p>
    </header>

    <main class="faq-container">
        <div class="faq-item">
            <h5>What is Cryptonow?</h5>
            <p>Cryptonow is a platform that allows you to create your own ERC-20 tokens easily and quickly without requiring any coding skills.</p>
        </div>

        <div class="faq-item">
            <h5>How do I create my token?</h5>
            <p>You simply need to fill out the form on our homepage with your desired token details, send the payment, and our automated system will handle the rest.</p>
        </div>

        <div class="faq-item">
            <h5>What payment methods are accepted?</h5>
            <p>We currently accept payments in Ethereum (ETH). The payment address is displayed on the homepage.</p>
        </div>

        <div class="faq-item">
            <h5>How long does it take to create a token?</h5>
            <p>Once your payment is confirmed on the blockchain, your token will be created within a few minutes.</p>
        </div>

        <div class="faq-item">
            <h5>What are the costs involved?</h5>
            <p>The cost to create a token is **0.01 ETH**, which covers all processing and deployment fees.</p>
        </div>

        <div class="faq-item">
            <h5>Can I create tokens on other blockchains?</h5>
            <p>Currently, Cryptonow supports the Ethereum blockchain only. We plan to add support for other blockchains in the future.</p>
        </div>

        <div class="faq-item">
            <h5>Who owns the token after it is created?</h5>
            <p>Once the token is created, it belongs to the wallet address you specified as the receiver during the token creation process.</p>
        </div>
    </main>
    <?php include 'footer.php'; ?>
    <script>
        document.querySelectorAll('.faq-item h5').forEach(item => {
            item.addEventListener('click', () => {
                const content = item.nextElementSibling;
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>
