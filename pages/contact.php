<?php
$message_sent = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Please fill in all required fields.';
    } else {
        // Here you would typically send an email or save to database
        // For now, we'll just set a success flag
        $message_sent = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOCSCI 3 - Contemporary World</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<h1 style="margin-bottom: 2rem; color: var(--indigo);">Contact Us</h1>

<?php if ($message_sent): ?>
    <div class="alert alert-success">
        <h3>✅ Message Sent Successfully!</h3>
        <p>Thank you for contacting us. We'll get back to you soon.</p>
    </div>
<?php endif; ?>

<?php if ($error): ?>
    <div class="alert alert-error">
        <h3>❌ Error</h3>
        <p><?php echo $error; ?></p>
    </div>
<?php endif; ?>

<div class="contact-container">
    <div class="contact-form">
        <h2 style="color: var(--teal); margin-bottom: 1.5rem;">Send us a Message</h2>
        <form method="POST" action="?page=contact">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="6" required></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>

    <div class="contact-info-cards">
        <div class="card">
            <div class="card-icon">📧</div>
            <h3>Email</h3>
            <p>socsci3@university.edu</p>
        </div>
        <div class="card">
            <div class="card-icon">📞</div>
            <h3>Phone</h3>
            <p>+63 123 456 7890</p>
        </div>
        <div class="card">
            <div class="card-icon">📍</div>
            <h3>Location</h3>
            <p>Quezon City, Metro Manila, Philippines</p>
        </div>
    </div>
</div>
<script src="/SOCSCI3/assets/js/script.js"></script>
</html>