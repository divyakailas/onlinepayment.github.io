<?php
$conn=mysqli_connect("localhost","root","","reginsert");

?>  

<html>
<head>
	<title>ONLINE BILL PAYMENT</title>
	<link rel = "<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type= "text/css" href = "css/bootstrap.min.css">
<style>
		.navbar .navbar-brand {
		color: #1E90FF;
	}
	
	.navbar .navbar-nav li a{
		color:#FFFAF0 !important;
	}
	
	.carousel-inner {
    border-top: 4px;
    border-bottom: 5px;
    border-color: #8B008B;
    border-style: solid;
	}
	
	<!--.navbar .navbar-toggler{
		background color:#00008B;
	}-->
	
	body {
  background-image: url("image/bac4.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.squarebox{
		height:500px;
		width:550px;
		background-color:#0d0d0d;
		margin :60px auto;
		opacity:.8;
		color:white;
		padding:20px;
	}
	
	
  
   
</style>
</head>

<body>
<?php
if(isset($_POST['sendmessage']))
{

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	

	$query="INSERT INTO abouusttable(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message')";
	$run=mysqli_query($conn,$query);
	
	if($run)
	{
		echo"You have send message  successfully!!";
		//header("Location:LOGINFORMNEW.php");
		
	}
	else
	{
		echo"You have not send message  successfully!!";
		echo"error:".mysqli_error($conn);
	}
	
}
?>





<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8B008B;">
  <a class="navbar-brand " href="#">OnlineBillPay</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gonavbar" aria-controls="gonavbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="gonavbar">
    <ul class="  navbar-nav ml-auto">
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

<section>

<br><br><br>
<div class="squarebox">


					<form  action="" method="POST">
					<center><h2><div class="text-light">CONTACT US</div></h2></center>
					<div class="form-row">  
					
					 <div class="col">
					<h5><label  class="control-label " class="text-white" for="name"><b>Name</b></label></h5>
					<input class="form-control" type="text" name="name" placeholder="Name"  required pattern="[A-Za-z]+" title="please enter username" >
					 </div >
					 
					 <div class="col">
					<h5><label  class="control-label " class="text-white" for="email"><b>Email</b></label></h5>
					<input class="form-control" type="email" name="email" placeholder="email" required="" title="please enter valid email">
					</div>
					
					</div>
					
					<div class="form-row">  
					
					 <div class="col">
					<h5><label  class="control-label "  class="text-white" for="phone"><b>Phone</b></label></h5>
					<input class="form-control" type="text" name="phone" placeholder="phone" required pattern="(0/91)?[7-9][0-9]{9}" title="please enter 10 digit mobile number">
					 </div >
					 
					 <div class="col">
					<h5><label  class="control-label " class="text-white" for="subject"><b>Subject</b></label></h5>
					<input class="form-control" type="text" name="subject" placeholder="subject"  required pattern="[A-Za-z]+" title="please enter valid subject">
					</div>
					
					</div>
					
					<div class="form-row">   
					 <div class="col">
					<h5><label class="control-label" class="text-white" for="message"><b>Message</b></label></h5>
					<textarea class="form-control" name="message" rows="4" cols="30" required pattern="[A-Za-z]+" title="please enter valid message"></textarea>
					</div>
					</div>
					&nbsp;&nbsp;
					<div class="form-row">
					<div class="col">
					<center><input class="btn btn-success" type="submit" name="sendmessage" value="Send Message"></center>
					</div>
					</div>
		</div>
	
	</div>

</form>

</div>

</body>
</html>