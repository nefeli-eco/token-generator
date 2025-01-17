<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn more about Cryptonow - Empowering individuals and businesses to create and launch their own cryptocurrencies easily and affordably.">
    <meta name="keywords" content="Cryptonow, about us, cryptocurrency, token creation, blockchain platform">
    <meta name="author" content="Cryptonow">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://token.cryptonow.cc/about">
    <title>About Us - Cryptonow</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <?php include 'google.php'; ?>
    <style>
        body {
            background: #1a1a1a; /* Dark background */
            font-family: 'Roboto', sans-serif;
            color: #e0e0e0;
        }
        .main-header {
            background: linear-gradient(120deg, #5e35b1, #4527a0); /* Softer purple gradient */
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        .main-header h1 {
            font-size: 2.8rem;
            font-weight: bold;
        }
        .main-header p {
            font-size: 1.4rem;
        }
        .features-section, .team-section {
            padding: 40px 20px;
        }
        .features-section h2, .team-section h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .feature {
            text-align: center;
            margin-bottom: 20px;
        }
        .feature-icon {
            font-size: 3rem;
            color: #fbc02d; /* Gold color for icons */
            margin-bottom: 15px;
        }
        .team-member-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .team-member h5 {
            margin-top: 15px;
            font-size: 1.1rem;
            color: #fbc02d; /* Gold for emphasis */
        }
        .social-links a {
            color: #fbc02d; /* Gold for links */
            margin: 0 10px;
            font-size: 1.4rem;
            transition: color 0.3s;
        }
        .social-links a:hover {
            color: #d4af37; /* Softer gold for hover */
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
    </style>
</head>
<body>
    <header class="main-header">
        <h1>About Cryptonow</h1>
        <p>Empowering individuals and businesses to create and launch their own cryptocurrencies easily and affordably.</p>
    </header>

    <main>
        <!-- Features Section -->
        <section class="features-section">
            <h2 id="why-choose-cryptonow" aria-label="Why Choose Cryptonow">Why Choose Cryptonow?</h2>
            <div class="row">
                <div class="col s12 m4 feature" aria-labelledby="feature-fast">
                    <div class="feature-icon" id="feature-fast" aria-hidden="true">🚀</div>
                    <h5>Fast & Easy</h5>
                    <p>Create your custom cryptocurrency in just a few clicks without any coding skills.</p>
                </div>
                <div class="col s12 m4 feature" aria-labelledby="feature-secure">
                    <div class="feature-icon" id="feature-secure" aria-hidden="true">🔒</div>
                    <h5>Secure</h5>
                    <p>Our platform ensures your transactions and token creation are safe and reliable.</p>
                </div>
                <div class="col s12 m4 feature" aria-labelledby="feature-innovative">
                    <div class="feature-icon" id="feature-innovative" aria-hidden="true">💡</div>
                    <h5>Innovative</h5>
                    <p>Stay ahead in the crypto world with our cutting-edge technology and tools.</p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section">
            <h2 id="meet-our-team" aria-label="Meet Our Team">Meet Our Team</h2>
            <div class="team-member-wrapper">
                <div class="team-member">
                    <h5 id="team-founder">Savvanis Spyros</h5>
                    <p>Founder</p>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/spyros-savvanis-7041549b/" target="_blank" aria-label="LinkedIn Profile of Savvanis Spyros">
                            <i class="material-icons" aria-hidden="true">person</i>
                        </a>
                        <a href="https://github.com/savvaniss" target="_blank" aria-label="GitHub Profile of Savvanis Spyros">
                            <i class="material-icons" aria-hidden="true">code</i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
