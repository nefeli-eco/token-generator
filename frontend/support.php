<?php
$pageTitle = "Support - Cryptonow";
include 'header.php';
?>
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
