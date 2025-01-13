<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vegetable_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else
echo("tamamdirsadasdasd");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/buttons.css" />
    <link rel="stylesheet" href="../css/forms.css" />
    <link rel="stylesheet" href="../css/styles.css" />
</head>
<body id="body">
    <header class="main-header">
        <a href="Homepage.html" class="main-header__logo">Vegetable</a>
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class="main-nav__item">
                    <a href="Homepage.html">Homepage</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="signup-page">
        <h1 class="signup-title">Login Your Account</h1>

        <?php
        if (isset($_GET['error'])) {
            echo "<p style='color: red;'>" . htmlspecialchars($_GET['error']) . "</p>";
        }
        ?>

        <form action="/Vegetable/php/login_process.php" method="POST" class="signup-form" id="signup-form">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />

            <button type="submit" class="btn btn-primary login__button">Login</button>
        </form>
    </main>

    <footer class="footer_home">
        <div class="footer_home-container">
            <div class="footer_home-section">
                <h4>About Us</h4>
                <p>We are dedicated to providing the best services and products to our customers.</p>
            </div>

            <div class="footer_home-section">
                <h4>Contact</h4>
                <a href="about.html">Contact/About</a>
            </div>

            <div class="footer_home-section">
                <h4>Follow Us</h4>
                <a href="https://facebook.com" target="_blank">Facebook</a>
                <a href="https://twitter.com" target="_blank">Twitter</a>
                <a href="https://instagram.com" target="_blank">Instagram</a>
                <a href="https://linkedin.com" target="_blank">LinkedIn</a>
            </div>

            <div class="footer_home-bottom">
                <p>&copy; 2025 Your Company Name. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
