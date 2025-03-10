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
    <title> NutriGuide || RECIPE FINDER</title>
    <link rel="icon" href="favicon-32x32.png" type="image/svg+xml">

    <!--Bootstrap Scripts(CSS)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto+Mono&family=Instrument+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Stylish&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Coming+Soon&family=Recursive:wght@700&display=swap" rel="stylesheet">    <link rel="stylesheet" href="./recipeCSS.css">
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
              <li><a class="dropdown-item rounded-2" href="./bmi.php">BMI CALCULATOR</a></li>
              <li><a class="dropdown-item rounded-2" href="./calories.php">TRACK CALORIES</a></li>
              <li><a class="dropdown-item rounded-2" href="./goal.php">KNOW YOUR GOAL</a></li>
              <li><a class="dropdown-item rounded-2" href="./recipe.php">RECIPE FINDER</a></li>
            </ul>
          </div>
          <a href="./about.php">ABOUT US</a>
          <a href="./contacts.php">CONTACT US</a>
          <a href="php/logout.php">LOGOUT</a>
        </div>
      </nav>
    </header>  
    <main>
      <p>*The recipe data is being fetched from <a id="spoonacular-path" href="https://spoonacular.com/food-api" target="_blank">SPOONACULAR API</a></p>
      <div class="search-box">
        <h2>RECIPE FINDER</h2>
        <input type="text" placeholder="Enter Recipe Name"><br>
        <div id="suggestionDropdown" class="suggestions-dropdown"></div>
        <button type="button" class="btn btn-success">Search</button><br>
        <span class="loader"></span>
      </div>
      <div class="result-box">
        <h2 id="recipe-title"></h2>
        <img id="recipe-image" src="" alt="Recipe Image Not Found">
        <div id="ingredients">
          <h4>Ingredients: </h4>
        </div>
        <div id="recipe-steps-box">
          <h4>Recipe:</h4>
          <ol id="recipe-steps"></ol>
        </div>
      </div>
    </main>
    <!--Bootstrap Scripts(JAVASCRIPT AND POPPER)-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
        <script src="./recipe.js"></script>
  </body>
</html>