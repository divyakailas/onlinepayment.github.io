<?php
$conn=mysqli_connect("localhost","root","","reginsert");

?>  
<html>
<head>
<title>REGISTRATION</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	
	
<style>

	
	.navbar .navbar-brand {
  color: #1E90FF;
	}
	
	.navbar .navbar-nav li a{
		color:#FFFAF0 !important;
	}
	
	.navbar-toggler{
		background color:#00008B;
	}
	.navbar{
		
    border-bottom: 2px;
    border-color: #8B008B;
    border-style: solid;
	}
	
	body {
  background-image: url("image/bac7.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.squarebox{
		height:1000px;
		width:700px;
		background-color:#0d0d0d;
		margin :10px auto;
		opacity:.8;
		color:white;
		padding:20px;
	}
	
	
</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8B008B;">
  <a class="navbar-brand " href="#">OnlineBillPay</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gonavbar" aria-controls="gonavbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="gonavbar">
    <ul class=" navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      
    <li class="nav-item active">
        <a class="nav-link" href="about.php">ABOUT US </a>
      </li>
      
    <li class="nav-item active">
        <a class="nav-link" href="registerdivya.php">CUSTOMER REGISTRATION</a>
      </li>
	  
      <li class="nav-item active">
        <a class="nav-link" href="loginform.php">CUSTOMER LOGIN </a>
      </li>
      
    <li class="nav-item active">
        <a class="nav-link" href="contactus.php">CONTACT US</span></a>
      </li>
	   <li class="nav-item active">
        <a class="nav-link" href="adminlogin.php">ADMIN</span></a>
      </li>
      
    </ul>
    
   </div>
</nav>




<?php
if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$mobilenumber=$_POST['mobilenumber'];
	$state=$_POST['state'];
	$birthdate=$_POST['birthdate'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	


	

	$query="INSERT INTO reg1(firstname,middlename,lastname,mobilenumber,state,birthdate,gender,address,username,email,password) values('$firstname','$middlename','$lastname','$mobilenumber','$state','$birthdate','$gender','$address','$username','$email','$password')";
	$run=mysqli_query($conn,$query);
	
	if($run)
	{
		echo"You have registered successfully!!";
		//header("Location:loginform.php");
		
	}
	else
	{
		echo"error:".mysqli_error($conn);
	}
	
}

?>

<section>

<br><br><br>
<div class="squarebox">
<center><h2><div class="text-white">Register</div></h2></center>
	

					<form  action="registerdivya.php" method="POST" >
				    <h4> Customer Registration Form</h4>
					<hr class="mb-3">
					<div class="form-row">   
					 <div class="col">
					<h5><label  class="control-label " for="firstname"><b>First Name</b></label></h5>
					<input class="form-control" type="text" name="firstname" id="firstname" placeholder="FirstName"  required="" pattern="[A-Za-z]+" title="please enter first name">
					 
					 </div >
					 
					 <div class="col">
					<h5><label  class="control-label " for="middlename"><b>Middle Name</b></label></h5>
					<input class="form-control" type="text" name="middlename"   id="middlename" placeholder="MiddleName"  required pattern="[A-Za-z]+" title="please enter your middlename">
					 <span id="mname" class="text-danger"></span>
					</div>
					
					 <div class="col">
					<h5><label  class="control-label" for="lastname"><b>Last Name</b></label></h5>
					<input class="form-control" type="text" name="lastname" id="lastname" placeholder="LastName" required pattern="[A-Za-z]+" title="please enter your lastname" >
					 <span id="lname" class="text-danger"></span>
					</div>
					</div>
					<div class="form-row">   
					 <div class="col">
					<h5><label for="mobilenumber"><b>Mobile Number</b></label></h5>
					<input class="form-control" type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile Number" required pattern="[0-9]{10}" title="please enter 10 digit mobile number">
					</div>
					
					<div class="col">
					<h5><label for="state"><b>State</b></label></h5>
					<input class="form-control" type="text" name="state" id="state" placeholder="state" required pattern="[A-Za-z]+" title="please enter state">
					</div>
					</div>
					
					<div class="form-row">   
					 <div class="col">
					<h5><label class="control-label" for="address"><b>Address</b></label></h5>
					<textarea class="form-control" name="address" rows="4" cols="30" required pattern="[A-Za-z0-9]+" title="please enter valid address"></textarea>
					</div>
					</div>
					
					
					
					
					
					
					
					<div class="form-row">   
					 <div class="col">
					<h5><label class="control-label" for="gender"><b>GENDER</b></label></h5>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="gender" value="male"  required="select "/>
					<label class="form-check-label" for="male">Male</label>
					</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="gender" value="female" required="select" />
					<label class="form-check-label" for="female">Female</label>
					</div>
					</div>
					</div>
					
					&nbsp;
					
					
					
					
					
					<div class="form-row">
					<div class="col">
					<h5><label  class="control-label " for="birthdate">Date of Birth</label></h5>
					<input class="form-control" type="text" name="birthdate" placeholder="YYYY-MM-DD"  required pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" title="please enter valid birth date">
					</div>
					
					
					<div class="col">
					<h5><label  class="control-label" for="email"><b>Email</b></label></h5>
					<input  class="form-control" type="email" name="email" placeholder="Email" title="please enter valid email address">
					</div>
					</div>
					<hr>
	

					
					
					
					<div>

					<h4>Customer Login Details</h4>
					<hr class="mb-3">
					
					<div class="form-row">
					<div class="col">
					<h5><label class="control-label" for="username"><b>UserName</b></label></h5>
					<input class="form-control" type="text" name="username" placeholder="UserName" required pattern="[A-Za-z0-9]+" title="please enter username">
					</div>
					</div>
					
					
					<div class="form-row">
					<div class="col">
					<h5><label class="control-label" for="password"><b>Password</b></label></h5>
					<input class="form-control" type="password" name="password" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
					</div>
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;
					
					
					
					<div class="form-row">
					<div class="col">
					<center><input class="btn btn-success" type="submit" name="submit" value="submit"></center>
					</div>
					</div>
					
				
		
					
					
					

					
					
	
	
	

					</form>
									
					&nbsp;&nbsp;
					<p> ALREADY A USER?<a href ="loginform.php">CLICK HERE TO LOGIN</a>
					</div>
				
				
	
	</div>	
	

</body>
</html>