<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coaches</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind+Madurai:600&display=swap" rel="stylesheet">
   
    <link href="styles/Coaches.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
</head>
<body style="background-color:#373537; " >



<!--<script src="Navbar.js" ></script>-->

<nav class="navbar navbar-expand-lg    navbar-dark  sticky-top"style="background-color: #000000;  ">

        <a class="navbar-brand" href="Home.php"><img src="img/hit.png"  class="img-responsive" ></a>
  <button class="navbar-toggler " onclick="myfunction()" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="toggle"  >
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav mr-auto" style="font-size:2.2vw;font-family: 'Prompt', sans-serif; margin-left:10vw;">
                <li class="nav-item " >
                    <a class="nav-link" href = "Classes.php">Classes</a>
                    </li>
                <li class="nav-item" >
                    <a class="nav-link" href = "Challenges.php">Challenges</a>
                </li>
                <li  class="nav-item" >
                    <a class="nav-link" href = "Schedule.php">Schedule</a>
                </li>
                <li class="nav-item active" >
                    <a class="nav-link" href = "Coaches.php">Coaches</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href = "Form.php" > Mailing List</a>
                </li>

                
    </ul>
            </div>
      

    
</nav>




<div class="row" style="margin-bottom:20px;">

<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName="Hit";
    // Create connection
    $connect = new mysqli($servername, $username, $password,$dbName);
    
    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    
    
    $i=0;
    
    
    $sqlQuery= "Select * From Coaches";
    
    $result = $connect->query($sqlQuery);
    if ($result->num_rows > 0) {
        $array= array();
        
        while($row=  $result->fetch_assoc())
        {
            
            
            
            
            
            
            
            ?>


<div class="col-lg-4 col-sm-6 col-xs-12">
<div class="card h-100" style=" margin-left:20px; margin-right:20px; margin-top:20px; margin-bottom:20px" id="class-card">
<img class="card-img-top" src=<?php echo $row['Picture'] ?> alt="Card image cap" style="object-fit: cover;  width: 100%; height:300px;">
<div class="card-body">
   <strong class="card-title" style="vertical-align:top; font-size:35px; font-family: 'Prompt', sans-serif;"> <?php echo $row['Name']; ?> <i style="color:#8F1924;font-family: 'Prompt', sans-serif;"><?php echo $row['Nick_Name']; ?> </i></strong> <p class="card-text" style="color:#f2f2f2; font-family: 'Prompt', sans-serif;  font-weight: 700;"><br><?php echo $row['Description'] ?></p>

</div>
</div>
</div>





<?php
    
    }
    
    }
    mysqli_close($connect);
    ?>
</div>
<?php include_once("header&footer/Footer.html"); ?>

 
</body>
</html>




