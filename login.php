<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/forms.css" />
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
      <form action="" class="signup-form" id="signup-form">
        <label for="email">Email</label>
        <input type="email" id="email" />

        <label for="password">Password</label>
        <input type="password" id="password" />

        <input type="checkbox" id="agree-terms" />
        <label for="agree-terms">
          Agree to
          <a href="#">Terms &amp; Conditions</a>
        </label>

        <button type="submit" class="btn btn-primary login__button">
          Login
        </button>
      </form>

      <script>
        // Formu seçelim
        document
          .getElementById("signup-form")
          .addEventListener("submit", function (event) {
            // Formun varsayılan gönderilmesini engelleyelim
            event.preventDefault();

            // Alanları alalım
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var agreeTerms = document.getElementById("agree-terms").checked;

            // Kontrolleri yapalım
            if (!email || !password) {
              alert("Email and Password cannot be empty!");
              return;
            }

            if (!agreeTerms) {
              alert("You must agree to the terms and conditions!");
              return;
            }

            // Eğer tüm kontroller geçerse, sayfaya yönlendirelim
            window.location.href = "Homepage.html"; // Kendi homepage URL'nizi buraya koyun
          });
      </script>
    </main>

    <footer class="footer_home">
      <div class="footer_home-container">
        <div class="footer_home-section">
          <h4>About Us</h4>
          <p>
            We are dedicated to providing the best services and products to our
            customers. Learn more about us and our mission.
          </p>
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
