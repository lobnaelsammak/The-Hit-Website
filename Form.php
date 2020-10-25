
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mailing List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Sniglet|Stylish&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="styles/form.css" rel="stylesheet">
     <link href="styles/style.css" rel="stylesheet">
</head>
<body style="background-color:#000000; " >



<!--<script src="Navbar.js" ></script>-->

<nav class="navbar navbar-expand-lg    navbar-dark  sticky-top"style="background-color: #000000;  ">

        <a class="navbar-brand" href="Home.php"><img src="img/hit.png"  class="img-responsive" ></a>
  <button class="navbar-toggler " onclick="myfunction()" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="toggle"  >
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav mr-auto" style="font-size:2.2vw; font-family: 'Prompt', sans-serif;margin-left:10vw;">
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
                <li  class="nav-item active">
                    <a class="nav-link" href = "Form.php" > Mailing List</a>
                </li>

                
    </ul>
            </div>
      

    
</nav>
<style>
.alert {
  padding: 20px;
  background-color: #8F1924;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 6px;
    font-size: 20px;
    
}


.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
}
</style>


<div class="alert" style="display:none; color:white; font-family: 'Sniglet', cursive;" id="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong >Thank You For Subscribing!</strong> </div>
<div>
<div class="jumbotron jumbotron-fluid"  style="background-color: black; background-image: url('img/MailingListBack.jpg');background-repeat: no-repeat; background-size: cover; padding-top: 20px; " id="form">

   <div class="row" >
    
 <div class="col-lg-7 col-md-12 col-sm-12" ><!-- <img id="form2" src="background2.jpg">--> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
      <form class="ajax form-horizontal col-lg-5 col-md-12 col-sm-12" action="form2.php" method="POST" id="form" >
	  <p>    </p>
	  <p>    </p>
	 
	  <div class="form-group">
      <h1 style="color:#8F1924; font-family: 'Sniglet', cursive;" id="form-title"><strong >Subscribe Now</strong> <br/> Get your first session for free!</h1>
      </div>
      <div class=:"col-sm-10 col-xs-">
          </div>
  <div class="form-group">
      <label class="control-label " for="email" style="color:#FFFFFF; font-family: 'Prompt', sans-serif;"><h3>Full Name:</h3></label>
      
          <input type="text" class="form-control col-sm-10 " id="name" name="name" required>
  
  </div>
   <div class="form-group">
       <label class="control-label " for="email" style="color: white;font-family: 'Prompt', sans-serif;"><h3>Email:</h3></label>
    
      <input type="email" class="form-control col-sm-10" id="email" name="email" required >
 
  </div>
  <div class="form-group">
      <label class="control-label " for="pwd" style="color : white ; font-family: 'Prompt', sans-serif;"><h3>Phone number:</h3></label>
    
      <input type="number" class="form-control col-sm-10" id="number" name="number" required>

	
  </div>
  <strong id="invalid-email" style="color: #8F1924; font-size:15pt; "></strong>
    <div class="form-group col-sm-12">
   
</div>

  <div class="form-group col-lg-12">  <button name="submit" type="submit" id="submit" class="btn col-4 " style="background-color: #8F1924; color:white; font-family: 'Prompt', sans-serif;"><h4>Submit</h4></button> </div>


  </div>
  
</form>
</div>
    </div>
  </div>

 <?php include_once("header&footer/Footer.html"); ?>
  
<script  src="js/form.js"></script>



</script>
</body>
</html>
