<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: php/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
      <title>NutriGuide || Fitness Tracker</title>
      <link rel="icon" href="favicon-32x32.png" type="image/svg+xml">
      <!--Bootstrap Scripts(CSS)-->
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
      <!--Awesome Fonts-->
      <script src="https://kit.fontawesome.com/fd6cc398e6.js" crossorigin="anonymous"></script>
      <!--Google Fonts-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto+Mono&family=Instrument+Sans&family=Stylish&display=swap" rel="stylesheet">
      <!--CSS Styling-->
      <link rel="stylesheet" href="./indexCSS.css"> 
    </head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TF52CWD314"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-TF52CWD314');
    </script>
    <body>
      <header>
        <nav class="navbar bg-dark fixed-top" data-bs-theme="dark">
          <div class="nav-brand">
            <a id="brand" href="./index.php">NutriGuide</a>
          </div>
          <div class="nav-links">
            <a href="./index.php">HOME</a>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                FEATURES
              </button>
              <ul class="dropdown-menu gap-1 p-2 rounded-3 mx-0 shadow w-220px" data-bs-theme="light">
                <li><a class="dropdown-item rounded-2" href="./bmi.html">BMI CALCULATOR</a></li>
                <li><a class="dropdown-item rounded-2" href="./calories.html">TRACK CALORIES</a></li>
                <li><a class="dropdown-item rounded-2" href="./goal.html">KNOW YOUR GOAL</a></li>
                <li><a class="dropdown-item rounded-2" href="./recipe.html">RECIPE FINDER</a></li>
              </ul>
            </div>
            <a href="./about.html">ABOUT US</a>
            <a href="./contacts.html">CONTACT US</a>
            <a href="php/logout.php">LOGOUT</a>
          </div>
        </nav>
      </header>  
      <main>
          <div class="main-box">
            <div class="main-text-box">
              <h2>Transform yourself today.</h2>
              <p id="main-para">Welcome to NutriGuide, your ultimate fitness companion! We are dedicated to helping you on your fitness journey by providing powerful tools to track your progress. With our user-friendly interface achieving your health and fitness goals has never been easier. Join our community today and take the first step towards a healthier, fitter you!</p>
              <button id="to-features">GET FIT</button>
            </div>
            <div class="main-image-box">
              <img src="./diet.webp" id="main-img" alt="Display Image">
            </div>
          </div>
          <div class="features-box">
            <div class="features">
              <div id="feature-heading">FEATURES</div>
              <div class="features-line">
                <i class="fa-2xl fa-solid fa-dumbbell"></i>
                <a href="./bmi.php" class="feature-links">BMI Calculator</a>
                <p class="features-para">Calculate your Body Mass Index (BMI) to know your health status right away</p>
              </div>
              <div class="features-line">
                <i class="fa-solid fa-utensils fa-2xl"></i>
                <a href="./calories.php" class="feature-links">Track Calories</a>
                <p class="features-para">Gain control over your nutrition by effortlessly tracking your daily calorie intake</p>
              </div>
              <div class="features-line">
                <i class="fa-solid fa-person-dress fa-2xl"></i>
                <a href="./goal.php" class="feature-links">Ideal Weight</a>
                <p class="features-para">Discover your path to a healthier you by calculating your ideal weight based on your unique measurements</p>
              </div>
              <div class="features-line">
                <i class="fa-solid fa-carrot fa-2xl"></i>
                <a href="./recipe.php" class="feature-links">Recipe Finder</a>
                <p class="features-para">Looking for culinary inspiration? Our Recipe Finder is your kitchen companion!</p>
              </div>
            </div>
          </div>
      </main>          
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script>
        const button = document.getElementById('to-features');
        const feature_box = document.getElementsByClassName('features')[0];
        const paragraph = document.getElementById("main-para");
        let para_text = paragraph.textContent
        let speed = 17, i = 0;
        paragraph.textContent = "";
        var completePara = () => {
          if (i < para_text.length) {
            paragraph.textContent += para_text.charAt(i++);
            setTimeout(completePara, speed);
          }
        }
        setTimeout(completePara, 100); 
        paragraph.style.visibility = "visible"; 
        button.addEventListener('click', () => feature_box.scrollIntoView());
      </script>
    </body>
</html>