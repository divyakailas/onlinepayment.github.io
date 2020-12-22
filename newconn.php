<?php
$conn=mysqli_connect("localhost","root","","reginsert");

?>  
<html>
<head>
<title>REGISTRATION</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
<?php
if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$mobilenumber=$_POST['mobilenumber'];
	$state=$_POST['state'];
	$birthday=$_POST['birthday'];
	$birthmonth=$_POST['birthmonth'];
	$birthyear=$_POST['birthyear'];
	$gender=$_POST['gender'];
	$country=$_POST['country'];
	$address=$_POST['address'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	

	$query="INSERT INTO reg1(firstname,middlename,lastname,mobilenumber,state,birthday,birthmonth,birthyear,gender,country,address,username,email,password) values('$firstname','$middlename','$lastname','$mobilenumber','$state','$birthday','$birthmonth','$birthyear','$gender','$country','$address','$username','$email','$password')";
	$run=mysqli_query($conn,$query);
	
	if($run)
	{
		echo"You have registered successfully!!";
		//header("Location:LOGINFORMNEW.php");
		
	}
	else
	{
		echo"error:".mysqli_error($conn);
	}
	
}
?>
