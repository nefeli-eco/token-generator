<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Cryptonow Token Generator for any support or inquiries. We are here to assist you.">
    <meta name="keywords" content="Cryptonow, contact, support, inquiries, token creation">
    <title>Contact Us - Cryptonow Token Generator</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            background: #1a1a1a; /* Darker background */
            font-family: 'Roboto', sans-serif;
            color: #e0e0e0;
        }
        header {
            background: linear-gradient(120deg, #5e35b1, #4527a0); /* Purple gradient */
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        header h1 {
            font-size: 2.5rem;
        }
        .form-section {
            padding: 20px;
        }
        .input-field label {
            color: #bdbdbd; /* Softer label color */
        }
        .btn {
            background: #5e35b1; /* Purple button */
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
    <header>
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Fill out the form below to get in touch.</p>
    </header>

    <main class="container form-section">
        <form id="contactForm" aria-labelledby="contact-form-section">
            <fieldset>
                <legend id="contact-form-section" class="mb-4">Contact Form</legend>
                <div class="input-field">
                    <input id="name" type="text" required>
                    <label for="name">Your Name</label>
                </div>
                <div class="input-field">
                    <input id="email" type="email" required>
                    <label for="email">Your Email</label>
                </div>
                <div class="input-field">
                    <textarea id="message" class="materialize-textarea" required></textarea>
                    <label for="message">Your Message</label>
                </div>
                <button type="submit" class="btn waves-effect waves-light">Submit</button>
            </fieldset>
        </form>

        <div id="statusMessage" class="mt-4" role="status" aria-live="polite"></div>
    </main>

    <footer>
        <p>© 2025 Cryptonow. All rights reserved. <a href="/terms.html">Terms of Service</a></p>
    </footer>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const statusMessage = document.getElementById('statusMessage');
            statusMessage.innerHTML = '<div class="card-panel yellow lighten-4">Submitting your message...</div>';
            setTimeout(() => {
                statusMessage.innerHTML = '<div class="card-panel green lighten-4">Thank you! Your message has been sent successfully.</div>';
            }, 2000);
        });
    </script>
</body>
</html>
