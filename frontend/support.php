<?php
$pageTitle = "Support - Cryptonow";
include 'header.php';
?>
<header class="main-header">
    <h1>Support</h1>
    <p>Need help? Get in touch with our team for assistance.</p>
</header>

<main class="container mt-5">
    <form id="contactForm">
        <fieldset>
            <legend class="mb-4">Contact Form</legend>
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@example.com" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message here..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </fieldset>
    </form>
</main>

<?php include 'footer.php'; ?>
