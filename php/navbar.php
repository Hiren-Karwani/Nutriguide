<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriGuide Navbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="navbar.css"> <!-- Link to your custom CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="./index.php" id="brand">NutriGuide</a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php">HOME</a></li>
                    
                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            FEATURES
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../bmi.html">BMI CALCULATOR</a></li>
                            <li><a class="dropdown-item" href="../calories.html">TRACK CALORIES</a></li>
                            <li><a class="dropdown-item" href="../goal.html">KNOW YOUR GOAL</a></li>
                            <li><a class="dropdown-item" href="..recipe.html">RECIPE FINDER</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="../about.html">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contacts.html">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

</body>
</html>
