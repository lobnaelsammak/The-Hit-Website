<!DOCTYPE html>
<html lang="en">
<head>
  <title>Schedule</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
					<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
					<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
   
    <link href="styles/Schedule.css" rel="stylesheet">
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
                <li  class="nav-item active" >
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
    }?>

<div class="horizontal-scroll col-xl-12 col-lg-12 col-md-12 col-sm-0" style="text-align: center; font-family: 'Viga', sans-serif;" >
     <table   >
    <thead>
      <tr>
        <th></th>
             <th><h3>SATURDAY</h3></th>
		<th> <h3>SUNDAY</h3></th>
        <th><h3>MONDAY</h3></th>
		<th> <h3>TUESDAY</h3></th>
        <th><h3>WEDNESDAY</h3></th>
		<th> <h3>THURSDAY</h3></th>
      <th> <h3>FRIDAY</h3></th>
      </tr>
    </thead>
    <tbody>


<?php

 $sqlQuery= "Select Time, Count(Time) From Coached_By Group by Time Order By Time";
    $result = $connect->query($sqlQuery);
           $Timings= array();

    if ($result->num_rows > 0) {
        
        
        while($row=  $result->fetch_assoc())
        {
            $Timings[]=$row;
            
            
        }
    }
    $sqlQuery= "Select * From Coached_By Order By Time, Day, Coach_Name";

    $result = $connect->query($sqlQuery);
    
     $scheduleSlot= array();
      if ($result->num_rows > 0) {
        
        
        while($row=  $result->fetch_assoc())
        {
            $scheduleSlot[]=$row;
            
            
        }
    }

foreach($Timings as $Timing)
{ ?>
<tr>
<td id="time" style="font-family: 'Viga', sans-serif;"> 
<h5><strong><?php echo date("g:i a", strtotime($Timing['Time'])); ?></strong></h5>
 </td>
<?php for($i=1;$i<=7;$i++)

{ ?> <td>
 
 <?php $todays= array_filter( array_filter($scheduleSlot,function($daySlot)use($i){



 return $daySlot['Day']==$i;
   }) ,function ($timeSlot) use($Timing){   return $timeSlot['Time'] == $Timing['Time'];  });


foreach ($todays as $today) {


 $className=$today['Class_Name'];

  //trampoline //yoga
 $coachNames=array();
 $j=0;
 foreach ($todays as $j=> $today2)
{

if($today2['Class_Name']==$className)
{    $lastcoachName=$today2['Coach_Name'];
$coachNames[]=$today2['Coach_Name'] . " & "; //trampoline //yoga
  unset( $todays[$j]);  

}

  $j++;
}
$coachNames[sizeof($coachNames)-1]=$lastcoachName;
unset($coachNames[-1]);

?> <h2 id="class-name" style="font-family: 'Special Elite', cursive;"><?php if(sizeof($coachNames)>0){echo $className;} ?> </h2>


<h4 id="coaches" style="font-family: 'Viga', sans-serif;"> <?php foreach ($coachNames as $coachName) {
//echo $coachName['Coach_Name'];
print_r($coachName);
} ?> </h4>


<?php
}
?>


  </td> <?php 
}

?>



</tr>
<?php } ?>








     
    </tbody>
  </table>
 </div>
<div id="mobile">



<div class=" jumbotron" style="background-color:#373537"> <!-- 1 -->
     <div class="row"> <!-- 2 -->
<?php
        $sqlQuery= "Select Name From Classes";
        $result = $connect->query($sqlQuery);
        $classNames= array();
        
        if ($result->num_rows > 0) {
            
            
            while($row=  $result->fetch_assoc())
            {
                $classNames[]=$row;
                
                
            }
            
            
            foreach($classNames as $className)
            {  ?>

                <div class="col-sm-12" > <!-- 3 -->
                <div class="card" id="class-card"style="background-color:#232323;" > <!-- 4 -->
                <div class="card-header" style="background-color:#8F1924; color:white; text-align: center;">
<!-- 5 -->
<h1>   <?php print_r( $className['Name']); ?></h1>
</div>
 <div class="card-body"> <!-- 4 -->
<?php
    $end="'";
                       $sqlQuery= "Select Day,Time,Coach_Name From Coached_By Where Class_Name='" . $className['Name'] . "' Order By Class_Name, Day, Time;"; //joinß

            $result = $connect->query($sqlQuery);
             $rows=array();
            if ($result->num_rows > 0) {
                
               
                
                
                while($row =  $result->fetch_assoc())
                {

                  $rows[] = $row;
                }
           

                  
                  }  
                ?>
                
                
                
            


      <!-- 5-->
           <blockquote class="blockquote mb-0">
           <?php foreach($rows as $rowie){ ?>
<h4 style="color: white; text-align: left;">
  <?php    
$coachNames=array(); //trampoline //yoga

 $Day=$rowie['Day'];
  $Time=$rowie['Time'];
  $j=0;
  foreach($rows as $j=> $rowie2){

    if($Day==$rowie2['Day'] && $Time==$rowie2['Time'])
    {
     // print_r($rows);
$lastcoachName=$rowie2['Coach_Name'];
$coachNames[]=$rowie2['Coach_Name'] . " & "; //trampoline //yoga
  unset( $rows[$j]);  


    }
   $j++;
  }
  $coachNames[sizeof($coachNames)-1]=$lastcoachName;
unset($coachNames[-1]);
if(sizeof($coachNames)>0){

 switch($rowie['Day']){
                            
                        case "1":
                           echo "Saturday";
                            break;
                        case "2":
                           echo "Sunday";
                            break;
                        case "3":
                            echo "Monday";
                            break;
                        case "4":
                            echo "Tuesday";
                            break;
                        case "5":
                  echo "Wednesday";
                            break;
                        case "6":
                          echo "Thursday";
                            break;
                        case" 7":
                            echo "Friday";
                            break;
                            
                    } echo" "; echo date("g:i a", strtotime($rowie['Time'])); echo" ";} foreach ($coachNames as $coachName) {
//echo $coachName['Coach_Name'];
print_r($coachName);
} ?> </h4> <?php } ?>

           </blockquote>
       </div> <!-- 4 -->
   </div> <!-- 3 -->
</div><!-- 2-->
<!-- 1 -->
<!-- 1 -->

<?php
    
    }
    
    }
    mysqli_close($connect);
    ?>




</div>
</div>
</div>













 <?php include_once("header&footer/Footer.html"); ?>








 
 </body>
</html>
