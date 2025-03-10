<!DOCTYPE html>
<html lang='en'>
  <head>
     <title> NutriGuide || BMI Calculator</title>
     <link rel="icon" href="favicon-32x32.png" type="image/svg+xml">

     <!--Bootstrap Scripts(CSS)-->
     <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
     <!--Awesome Fonts-->
     <script src='https://kit.fontawesome.com/fd6cc398e6.js' crossorigin='anonymous'></script>
     <!--Google Fonts-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto+Mono&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Stylish&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./bmiCSS.css">
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
            <a id="brand" href="./index.html">NutriGuide</a>
          </div>
          <div class="nav-links">
            <a href="./index.html">HOME</a>
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
          </div>
        </nav>
      </header>  
    <main>
      <h1>BMI CALCULATOR</h1>
      <div class="calculator">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Standard</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Metric</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
            <h6 style="margin-right: 0.2rem;">Your Height</h6>
            <input type="text" id="foot" placeholder="Feet">
            <input type="text" id="inches" placeholder="Inches"><br><br>
            <h6>Your Weight</h6>
            <input type="text" id="kgsS" placeholder="Kilograms"><br>
            <button type="button" class="btn btn1 btn-primary">CALCULATE</button>
            <button type="button" class="btn btn-danger reset_btn">RESET</button><br><br>
            <!-- <button class="btns btn1">CALCULATE</button> -->
            <!-- <button class="reset_btn">RESET</button><br><br> -->
            <h6 style="margin-right: 1.3rem;">Your BMI</h6>
            <input type="text" id="resultS" placeholder="BMI" readonly><br><br>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
            <h6>Your Height</h6>
            <input type="text" id="cms" placeholder="Centimeters"><br><br>
            <h6>Your Weight</h6>
            <input type="text" id="kgsM" placeholder="Kilograms"><br>
            <button type="button" class="btn btn2 btn-primary">CALCULATE</button>
            <button type="button" class="btn btn-danger reset_btn">RESET</button><br><br>
            <!-- <button class="btns btn2">CALCULATE</button> -->
            <!-- <button class="reset_btn">RESET</button><br><br> -->
            <h6 style="margin-right: 1.4rem;">Your BMI</h6>
            <input type="text" id="resultM" placeholder="BMI" readonly><br><br>
          </div>

        </div>
      </div>
    <p>The Body Mass Index (BMI) is a measure used to estimate the amount of body fat a person has based on their weight and height. It is calculated using the following formula:  BMI = weight (kg) / (height (m))<sup>2</sup>. Ideal BMI as per WHO standards is between 18.5 and 24.9</p>
    </main>
     <!--js scripts-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-djgx1+45ZveJq3/GA/YM+6U/Jo6UjGpUus++/4C1cX+I6ZCJbUzLG0kS5yJc2yFG" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
     <script>
        const resetBtns = document.querySelectorAll('.reset_btn');
        const btn1 = document.querySelector('.btn1');
        const btn2 = document.querySelector('.btn2');
        const main_box = document.getElementsByClassName('calculator');
        const para = document.getElementsByTagName('p')[0];
        const underWeight = "😔 You are Under-Weight!!";
        const normal = "🎉 You are in the normal weight range!! 🎉";
        const overWeight = "😔 You are Over-Weight!!";
        const obese = "😔 You are Obese!!";

        btn1.addEventListener('click',function(){
            console.log("Standard calculations going on");
            let foot = document.getElementById('foot').value;
            let inches = document.getElementById('inches').value;
            if (!inches) inches = 0;
            if (!foot) foot = 0;
            let weight = document.getElementById('kgsS').value;
            let height = (parseInt(12 * foot) + parseInt(inches)) / 39.3700787;
            let displayFeedback = document.getElementById('feedback');
            let bmi = (parseFloat(weight)/parseFloat(height * height));
            document.getElementById('resultS').value = bmi.toFixed(2);
            displayFeedback.style.display = "block";
            displayFeedback.style.width = "80%";
            displayFeedback.style.marginLeft = "10%";
            if (bmi < 18.5) displayFeedback.value = underWeight;
            else if (bmi >= 18.5 && bmi <= 25) displayFeedback.value = normal;
            else if (bmi <= 30) displayFeedback.value = overWeight;
            else displayFeedback.value = obese;
            displayFeedback.style.textAlign = "center";
            para.scrollIntoView({ behavior: 'smooth' });
          });
          
        btn2.addEventListener('click',function(){
            console.log("Metric calculations going on");
            let height = document.getElementById('cms').value / 100;
            let weight = document.getElementById('kgsM').value;
            let displayFeedback = document.getElementById('feedback');
            let bmi = parseFloat(weight) / parseFloat(height * height);
            document.getElementById('resultM').value = bmi.toFixed(2);
            displayFeedback.style.display = "block";
            displayFeedback.style.width = "80%";
            displayFeedback.style.marginLeft = "10%";
            if (bmi < 18.5) displayFeedback.value = underWeight;
            else if (bmi >= 18.5 && bmi <= 25) displayFeedback.value = normal;
            else if (bmi <= 30) displayFeedback.value = overWeight;
            else displayFeedback.value = obese;
            displayFeedback.style.textAlign = "center";
            para.scrollIntoView({ behavior: 'smooth' });
        });

        resetBtns.forEach(btn => {
            btn.addEventListener('click', function(){
                console.log("Page is being reset");
                location.reload();
            })
        });
     </script>
  </body>
</html>