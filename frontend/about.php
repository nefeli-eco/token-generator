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

  <?php // include 'google.php'; /* If you have analytics/tracking */ ?>

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

    /* ========== TIMELINE / STORY SECTION ========== */
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
      margin-bottom: 0;
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
    .value-card .value-icon {
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

    /* ========== RESPONSIVE ========== */
    @media (max-width: 600px) {
      .hero {
        padding: 40px 20px;
      }
      .hero h1 {
        font-size: 2rem;
      }
      .hero p {
        font-size: 1rem;
      }
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
          <h5>Founded in 2022</h5>
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
            <img
              src="https://via.placeholder.com/150"
              alt="Savvanis Spyros — Founder"
            />
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
        <!-- Add more team-member-cards in additional cols if you have more members -->
      </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section class="cta-section">
      <h3>Ready to Join the Future of Crypto?</h3>
      <p>
        Whether you’re a seasoned entrepreneur or a curious newcomer, Cryptonow
        is here to turn your coin dreams into reality.
      </p>
      <a href="/create" class="cta-btn">Get Started</a>
    </section>
  </main>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>
  <!-- If you do not have a separate footer file, replace the line above with
       <footer> ... your footer content ... </footer>
  -->

  <!-- MATERIALIZE JS -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
  ></script>
</body>
</html>
