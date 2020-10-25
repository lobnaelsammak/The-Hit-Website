




<!DOCTYPE html>
<html lang="en">
<head> <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:600|Libre+Baskerville:700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
</head>
<body style="background-color:#373537; " >



<!--<script src="Navbar.js" ></script>-->

<nav class="navbar navbar-expand-lg    navbar-dark  sticky-top"style="background-color: #000000;  ">

        <a class="navbar-brand" href="Home.php" ><img src="img/hit.png"  class="img-responsive" ></a>

  <button class="navbar-toggler " onclick="myfunction()" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="toggle"  >
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav mr-auto" style="font-size:2.2vw; font-family: 'Prompt', sans-serif; margin-left:10vw;">
                <li class="nav-item " >
                    <a class="nav-link" href = "Classes.php">Classes</a>
                    </li>
                <li class="nav-item" >
                    <a class="nav-link" href = "Challenges.php">Challenges</a>
                </li>
                <li  class="nav-item" >
                    <a class="nav-link" href = "Schedule.php">Schedule</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href = "Coaches.php">Coaches</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href = "Form.php" > Mailing List</a>
                </li>

                
    </ul>
            </div>
      

    
</nav>

<div class="parallax">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" style="height:55vw;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/home.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/home2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/home3.jpg" alt="Third slide">
    </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="img/home4.jpg" alt="Fourth slide">
    </div>
  </div>
 <a class="carousel-control-prev"href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next"href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




</div>

 <div class=" col-xs-12 " id="parallax">
       <strong style="font-size: 7vw; line-height:6vw; text-align: center; color: #f5f5f5; font-family: 'Prompt', sans-serif;"> Morning <br>Night <br>Ladies Only <br> Mixed<br> KidsZone<br> We've got it all!</strong>
  </div>

      <div class=" col-xs-12 " id="about" >
   
      <p style="font-size: 9vw;font-family: 'Prompt', sans-serif; color : white;">About Us</p> <p style="font-size: 1.9vw; line-height:4vw;color : white; font-family: 'Prompt', sans-serif;"><strong>
THE HIT FITNESS CENTER was founded to provide
an Entertaining, Educational, Friendly and Inviting,
Functional and Innovative experience of
uncompromising quality that meets the health
and fitness needs of the entire family.
<br>Life transformative experience that changes all habits.
Our programs are formulated to cover all aspects
of physical fitness including Strength workouts,
combining strength to Cardio classes, Ladies ONLY,
Zumba,STRONG by Zumba,Trampoline, Spinning,
Cardio, Pilates, Yoga, Kids zone, Athletes zone,
Crossfit classes.
The Hit Fitness Center is considered as the leading fitness center
in Alexandria and Egypt having the highest capacity of all.<br> <br><br><br>
</strong></p>
</div>








<?php include_once("header&footer/Footer.html"); ?>

</body>
</html>











