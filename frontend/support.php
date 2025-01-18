<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="description"
    content="Contact Cryptonow Token Generator for any support or inquiries. We are here to assist you."
  />
  <meta
    name="keywords"
    content="Cryptonow, contact, support, inquiries, token creation, help"
  />
  <meta name="author" content="Cryptonow" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://token.cryptonow.cc/support" />
  <title>Contact Us — Cryptonow Token Generator</title>

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

  <!-- If you have analytics scripts, include them here -->
  <?php  include 'google.php'; /* If you have analytics scripts, include them here */ ?>

  <style>
    /* ========== BASE STYLES ========== */
    body {
      background-color: #f5f5f5; /* Light gray background */
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
      max-width: 1000px;
      margin: 0 auto;
      padding: 0 15px;
    }

    /* ========== HERO SECTION ========== */
    header.hero {
      background-color: #ffffff;
      text-align: center;
      padding: 60px 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      margin-bottom: 40px;
    }
    .hero h1 {
      font-size: 2.4rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    .hero p {
      font-size: 1.2rem;
      color: #555555;
      margin-bottom: 2rem;
    }

    /* ========== CONTACT FORM SECTION ========== */
    .contact-section {
      margin-bottom: 40px;
    }
    .contact-card {
      background-color: #ffffff;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .contact-card h2 {
      text-align: center;
      color: #1565c0; /* Blue accent for heading */
      font-weight: 600;
      margin-bottom: 20px;
    }
    .input-field label {
      color: #444444;
      font-weight: 500;
    }
    .input-field input[type="text"],
    .input-field input[type="email"],
    .input-field textarea {
      border: 1px solid #ccc;
      background-color: #fafafa;
      box-shadow: none;
    }
    /* Submit Button */
    .btn-submit {
      background-color: #1565c0 !important;
      color: #ffffff !important;
      text-transform: none;
      font-weight: 600;
      border-radius: 4px;
      margin-top: 20px;
      box-shadow: none;
    }
    .btn-submit:hover {
      background-color: #0d47a1 !important;
    }

    /* ========== STATUS MESSAGES (PASTEL) ========== */
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
    .input-field input[type="text"],
.input-field input[type="email"],
.input-field textarea.materialize-textarea {
  border: 1px solid #ccc;
  background-color: #fafafa;
  box-shadow: none;
  padding: 10px 15px; /* Increase horizontal padding */
}
  </style>
</head>
<body>

  <!-- HERO SECTION -->
  <header class="hero">
    <h1>Need Assistance?</h1>
    <p>We’re here to help. Get in touch with us for any support or inquiries.</p>
  </header>

  <main class="container">
    <!-- CONTACT FORM SECTION -->
    <section class="contact-section">
      <div class="contact-card">
        <h2>Contact Support</h2>
        <form id="contactForm">
          <!-- Name -->
          <div class="input-field">
            <label for="name">Your Name</label>
            <input
              id="name"
              type="text"
              required
              aria-required="true"
              aria-label="Your Name"
            />
          </div>
          <!-- Email -->
          <div class="input-field">
            <label for="email">Your Email</label>
            <input
              id="email"
              type="email"
              required
              aria-required="true"
              aria-label="Your Email"
            />
          </div>
          <!-- Message -->
          <div class="input-field">
            <label for="message">Your Message</label>
            <textarea
              id="message"
              class="materialize-textarea"
              required
              aria-required="true"
              aria-label="Your Message"
            ></textarea>
          </div>
          <!-- Submit Button -->
          <button
            type="submit"
            class="btn btn-submit waves-effect"
            aria-label="Submit Form"
          >
            Submit
          </button>
        </form>
        <!-- Status message -->
        <div id="statusMessage" role="status" aria-live="polite"></div>
      </div>
    </section>
  </main>

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
    // Handle contact form submission
    document.getElementById("contactForm").addEventListener("submit", async function(e) {
      e.preventDefault();

      const statusMessage = document.getElementById("statusMessage");
      // Show a warning/pending style if you like:
      statusMessage.className = "warning";
      statusMessage.textContent = "Submitting your message...";

      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const message = document.getElementById("message").value.trim();

      try {
        // Example POST request
        const response = await fetch("/support", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({ name, email, message }),
        });

        if (response.ok) {
          statusMessage.className = "success";
          statusMessage.textContent =
            "Thank you! Your message has been sent successfully.";
          // Clear the form
          document.getElementById("contactForm").reset();
        } else {
          // Attempt to parse error message
          const errorData = await response.json().catch(() => ({}));
          statusMessage.className = "error";
          statusMessage.textContent =
            errorData.message || "Failed to send your message. Please try again later.";
        }
      } catch (error) {
        console.error("Error submitting the form:", error);
        statusMessage.className = "error";
        statusMessage.textContent =
          "Failed to send your message. Please try again later.";
      }
    });
  </script>
</body>
</html>
