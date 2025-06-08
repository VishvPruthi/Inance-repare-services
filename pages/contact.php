<?php
include 'db_connect.php';
$responses = [];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $responses[] = "Invalid email format!";
    }

    // Check for empty fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $responses[] = "Please fill out all fields!";
    }

    // If all is good, send the email
    if (empty($responses)) {
        $to = "your-email@example.com"; // Replace with your email
        $from = "noreply@example.com";
        $headers = "From: $from\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $fullMessage = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

        if (mail($to, $subject, $fullMessage, $headers)) {
            $responses[] = "Message sent successfully!";
        } else {
            $responses[] = "Failed to send message. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contact Us - INANCE</title>
    <link rel="stylesheet" href="../css/contact.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <!-- Header -->
    <nav class="navbar">
        <div class="logo">INANCE</div>
        <ul class="nav-links">
            <li><a href="dashboard.php" class="active">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="login.php">SignIn</a></li>
        </ul>
    </nav>

    <!-- Contact Section -->
    <section class="contact">
        <h2>Contact Us</h2>
        <p>Get in touch with us for any inquiries or service requests.</p>

        <div class="contact-container">
            <div class="contact-form">
                <h3>Send Us a Message</h3>

                <!-- Show responses -->
                <?php if (!empty($responses)): ?>
                    <div class="form-responses">
                        <?php foreach ($responses as $response): ?>
                            <p><?php echo htmlspecialchars($response); ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <form action="contact.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required />
                    <input type="email" name="email" placeholder="Your Email" required />
                    <input type="text" name="subject" placeholder="Subject" required />
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>

            <div class="contact-info">
                <h3>Contact Details</h3>
                <p><i class="fas fa-phone"></i> +01 123 456 7890</p>
                <p><i class="fas fa-envelope"></i> info@repairservice.com</p>
                <p><i class="fas fa-map-marker-alt"></i> 123 Repair Street, City, Country</p>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <section class="map">
        <h2>Find Us on Google Maps</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18...etc" width="100%" height="400" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <h3>About Us</h3>
                <p>We provide top-notch repair and maintenance services. Our team ensures quality work and customer satisfaction.</p>
            </div>

            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="dashboard.php" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="login.php">SignIn</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>📍 123 Main Street, City, Country</p>
                <p>📞 +01 123 456 7890</p>
                <p>📧 info@example.com</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <p class="footer-bottom">© 2025 Inance. All Rights Reserved.</p>
    </footer>
</body>
</html>
