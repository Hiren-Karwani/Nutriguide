<!DOCTYPE html>
<html lang='en'>
    <head>
      <!--Bootstrap Scripts(CSS)-->
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
      <title> NutriGuide || CONTACT US</title>
      <link rel="icon" href="favicon-32x32.png" type="image/svg+xml">

      <!--Google Fonts-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Open+Sans:wght@800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Stylish&display=swap" rel="stylesheet">
      <!--CSS Styling-->
      <link rel="stylesheet" href="./contactCSS.css">
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
            <div class="main-box">
                <h2>CONTACT US</h2>
                <ol>
                    <li>Developed By : Hiren Karwani, Vidhit Navani, Vedant Navani</li>
                    <li>Mail : <a href="mailto:2021.hiren.karwani@ves.ac.in" target="_blank">Hiren</a> <a href="mailto:d2022.vidhit.navani@ves.ac.in" target="_blank">Vidhit</a> <a href="mailto:d2022.vedant.navani@ves.ac.in" target="_blank">Vedant</a></li>
                    <li>LinkedIN : <a href="https://www.linkedin.com/in/hiren-karwani/" target="_blank">Hiren</a><a href="https://www.linkedin.com/in/hiren-karwani/" target="_blank">Vidhit</a><<a href="https://www.linkedin.com/in/hiren-karwani/" target="_blank">Vedant</a>/li>
                </ol>
            </div>
        </main>
        <!--index.js-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    </body>
</html>