<?php
	if(isset($_POST['submit'])){
	
$errorNumber=false;
$errorEmail=false;
$emptyEmail=false;
$emptyName=false;
$emptyNumber=false;
$Success=false;











		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="Hit"; //CHANGE LMA AKHOD DB 

//CREATE CONNECTION  

		$conn = new  mysqli($host,$dbusername,$dbpassword,$dbname);
		
		$name=filter_input(INPUT_POST , 'name');
		$email=filter_input(INPUT_POST, 'email');
		$number=filter_input(INPUT_POST , 'number');
		$user_check_query = "SELECT * FROM members WHERE   Email='$email' OR Phone_Number='$number' LIMIT 1"; //TO BE CHANGED
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);

   // if user exists    //TO BE CHANGED




if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{

echo " Invalid Email!";
$errorEmail=true;

}

else if(empty($name))
{
	$emptyName=true;
	
} else
if(empty($email))
{
	$emptyEmail=true;
	
} else
if(empty($number))
{
	$emptyNumber=true;
	
}



  else  if ($user['Email'] === $email) {

echo " Email already subscribed!";
$errorEmail=true;

    }
	  else  if ($user['Phone_Number'] === $number) {

echo "Phone Number already subscribed!";
$errorNumber=true;

    }
  
	else{	
		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
		}
		else{
			
		//TO BE CHANGED 
			 
  	$sql = "INSERT INTO members(Name,Email,Phone_Number)
					values('$name','$email','$number')";}

	
	
//CHECK WETHER IT'S WORKING OR NOT
if($conn->query($sql)){
$Success=true;

}
else{
echo "Error: ". $sql ."<br>". $conn->error;

}
	}



$conn->close();

		
	
} else {echo "Error!";}
?>






<script  >
	 


var errorNumber=	<?=json_encode($errorNumber)?>;
var errorEmail=  <?=json_encode($errorEmail)?>;
var emptyEmail= <?=json_encode($emptyEmail)?>;
var emptyName= <?=json_encode($emptyName)?>;
var emptyNumber= <?=json_encode($emptyNumber)?>;
var Success=	<?=json_encode($Success)?>;

if(errorEmail == true || emptyEmail == true){    $("#email").addClass ("input-error") ;      } else { $("#email").removeClass ("input-error") ; }
if( emptyName == true){    $("#name").addClass ("input-error") ;      } else { $("#name").removeClass ("input-error") ; }
if( errorNumber == true ||emptyNumber == true){    $("#number").addClass ("input-error") ;     } else { $("#number").removeClass ("input-error") ; }
if( errorNumber== false && emptyNumber == false && emptyEmail==false && emptyName==false && errorEmail==false){    $("#number,#email,#number").removeClass ("input-error");   $("#name,#email,#number").val ("") ;      }

if(Success==true)
{


document.getElementById('alert').style.display = "block";
	

}


</script>











