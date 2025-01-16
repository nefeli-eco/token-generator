<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Cryptonow Token Generator for any support or inquiries. We are here to assist you.">
    <meta name="keywords" content="Cryptonow, contact, support, inquiries, token creation">
    <meta name="author" content="Cryptonow">
    <title>Contact Us - Cryptonow Token Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        header {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }
        header h1 {
            font-size: 2.5rem;
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
    <header>
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Fill out the form below to get in touch.</p>
    </header>

    <main class="container mt-5">
        <form id="contactForm" aria-labelledby="contact-form-section">
            <fieldset>
                <legend id="contact-form-section" class="mb-4">Contact Form</legend>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required aria-required="true">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@example.com" required aria-required="true">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message here..." required aria-required="true"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </fieldset>
        </form>

        <div id="statusMessage" class="mt-4" role="status" aria-live="polite"></div>
    </main>
    <?php include 'footer.php'; ?>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const statusMessage = document.getElementById('statusMessage');
            statusMessage.innerHTML = '<div class="alert alert-info">Submitting your message...</div>';

            setTimeout(() => {
                statusMessage.innerHTML = '<div class="alert alert-success">Thank you! Your message has been sent successfully.</div>';
            }, 2000);
        });
    </script>
</body>
</html>
