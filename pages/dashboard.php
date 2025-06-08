<?php
session_start();

// Check if the user is logged in, if
// not then redirect them to the login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inance - Repair Services</title>
    <link rel="stylesheet" href="../css/style.css">
    <style></style>
</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <span class="contact-info">📞 Call : +01 123455678990</span>
        <span class="email-info">📧 Email : demo@gmail.com</span>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="logo">INANCE</div>
        <ul class="nav-links">
            <li><a href="dashboard.php" class="active">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="login.php">SignIN</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Repair and <br>
                Maintenance <br>Services</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui harum voluptatem adipisci.</p>
            <button class="cta-button">CONTACT US</button>
        </div>
        <div class="hero-image">
            <img src="../img/slider-img.png" alt="Repair Worker">
        </div>
    </section>
    <!-- Services Section -->
    <section class="services">
        <div class="service-card">
            <img src="../img/tools.png" alt="Repair Icon">
            <h3>REPAIR</h3>
        </div>
        <div class="service-card active">
            <img src="../img/improve.png" alt="Improve Icon">
            <h3>IMPROVE</h3>
        </div>
        <div class="service-card">
            <img src="../img/technical-support.png" alt="Maintain Icon">
            <h3>MAINTAIN</h3>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="about-content">
            <h2>ABOUT US</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
            <button class="read-more">READ MORE</button>
        </div>
        <div class="about-image">
            <img src="../img/slider-img.png" alt="Worker">
        </div>
    </section>

    <section class="services2">
        <h2>Our Services</h2><br>
        <p class="subtitle">What We Do</p>

        <div class="services-container">
            <div class="service-item">
                <h3>Computer Repair</h3><br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button class="btn">View Details</button>
            </div>

            <div class="service-item">
                <h3>Laptop Repair</h3><br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button class="btn">View Details</button>
                

            </div>

            <div class="service-item">
                <h3>Tablet Repair</h3><br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button class="btn">View Details</button>
                
            </div>

            <div class="service-item">
                <h3>Mobile Repair</h3><br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button class="btn">View Details</button>
                
            </div>
        </div>
    </section>
    <section class="why-choose-us">
        <h2>Why Choose Us</h2>
        <p class="subtitle">Some of Our Features</p>

        <div class="features-grid">
            <div class="feature-item">
                <i class="fas fa-users"></i>
                <img src="../img/icon-01-1.png" alt="">
                <h3>We Are Professional</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="feature-item">
                <i class="fas fa-handshake"></i>
                <img src="../img/icon-02-1.png" alt="">
                <h3>Friendly Service</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="feature-item">
                <i class="fas fa-coins"></i>
                <img src="../img/icon-03-1.png" alt="">
                <h3>No Fix No Fees</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="feature-item">
                <i class="fas fa-thumbs-up"></i>
                <img src="../img/icon-04-1.png" alt="">
                <h3>Well Reputation</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="feature-item">
                <i class="fas fa-heart"></i>
                <img src="../img/icon-05.png" alt="">
                <h3>Free Diagnostics</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="feature-item">
                <i class="fas fa-dollar-sign"></i>
                <img src="../img/icon-06.png" alt="">
                <h3>Low Price Guarantee</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="feature-item">
                <i class="fas fa-clock"></i>
                <img src="../img/icon-07.png" alt="">
                <h3>Quick Repair Process</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

            <div class="feature-item">
                <i class="fas fa-certificate"></i>
                <img src="../img/icon-08.png" alt="">
                <h3>30 Days Warranty</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <h3>About Us</h3>
                <p>We provide top-notch repair and maintenance services. Our team ensures quality work and customer satisfaction.</p>
            </div>
    
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
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

