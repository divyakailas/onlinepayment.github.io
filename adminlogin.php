<html>
<head>
<title>LOGIN form</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/loginstyle.css">
<style>
body {
  background-image: url("image/bac2.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}


	
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
	.squarebox{
		height:500px;
		width:500px;
		background-color:#0d0d0d;
		margin :65px auto;
		opacity:.7;
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
require_once'config.php';
$con=mysqli_connect("localhost","root","","reginsert");
if (mysqli_connect_errno())
  {
  echo "could not connect to mysql " .mysqli_connect_error();
  }
if (isset($_REQUEST['LOGIN'])) 
{
    if($_REQUEST['username']=="" || $_REQUEST['password']=="")
    {
    echo "All fields must be filled";
    }
    else
    {

	$query = mysqli_query($con,"select * from admin where username='".$_REQUEST['username']."' &&  password='".$_REQUEST['password']."'")or die ("sql error" .mysqli_error());
	$run_query=mysqli_fetch_array($query);
	$total = mysqli_num_rows($query);
	if($total>0)
	{
		echo "You have logged in successfully";
		header("Location:adminhome.php");
		
	}
	else
	{
		echo "Email or Password incorrect";
	}
}
}
?>
<section>

<br><br><br>
<div class="squarebox">


<div class="card-title text-center mt-3">
<img src="image/login.png" width="150px" height="150px">
</div>
<div class="form" >
<form action="adminlogin.php" method="POST">



<center><h2><div class="text-danger">LOGIN</div></h2></center>

<label for="username"><b><div class="text-white">UserName</div></b></label>
<input class="form-control" type="text" name="username" placeholder="UserName" required="" title="please enter valid admin username">


<label for="password"><b><div class="text-white">Password</div></b></label>
<input class="form-control" type="password" name="password" placeholder="password" required="" title="please enter valid admin password">
		&nbsp;&nbsp;			
					
<center><input class="btn btn-primary" type="submit" name="LOGIN" value="submit"></center>







</form>

</div> 
<section>
</body>
</html>