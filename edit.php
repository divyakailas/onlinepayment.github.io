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
<?php
	$sql = "SELECT * FROM student WHERE email='$_SESSION[loguser]'";
		$result = mysqli_query($conn,$sql) or die (mysql_error());

while($result=mysqli_fetch_assoc($data))
	{
		$firstname=	$result['firstname'];
	$middlename	=$result['middlename'];
	$lastname	=$result['lastname'];
	$mobilenumber	=$result['mobilenumber'];
	$state	=$result['state'];
	$birthdate	=$result['birthdate'];
	$gender	=$result['gender'];
	$address	=$result['address'];
	$username	=$result['username'];
	$email	=$result['email'];
	$password	=$result['password'];
		
	
		
		
	}
	?>
	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['loguser']; ?></h4>
	</div><br><br>




<section>

<br><br><br>
<div class="squarebox">
<center><h2><div class="text-white">Register</div></h2></center>
	

					<form  action="registerdivya.php" method="POST">
				    <h4> Customer Registration Form</h4>
					<hr class="mb-3">
					<div class="form-row">   
					 <div class="col">
					<h5><label  class="control-label " for="firstname"><b>First Name</b></label></h5>
					<input class="form-control" type="text" name="firstname" placeholder="FirstName" value="<?php echo $firstname; ?>" >
					 </div >
					 
					 <div class="col">
					<h5><label  class="control-label " for="middlename"><b>Middle Name</b></label></h5>
					<input class="form-control" type="text" name="middlename" placeholder="MiddleName" value="<?php echo $first; ?>">
					</div>
					
					 <div class="col">
					<h5><label  class="control-label" for="lastname"><b>Last Name</b></label></h5>
					<input class="form-control" type="text" name="lastname" placeholder="LastName" value="<?php echo $first; ?>" >
					</div>
					</div>
					<div class="form-row">   
					 <div class="col">
					<h5><label for="mobilenumber"><b>Mobile Number</b></label></h5>
					<input class="form-control" type="text" name="mobilenumber" placeholder="Mobile Number" value="<?php echo $first; ?>">
					</div>
					
					<div class="col">
					<h5><label for="state"><b>State</b></label></h5>
					<input class="form-control" type="text" name="state" placeholder="state"value="<?php echo $first; ?>" >
					</div>
					</div>
					
					<div class="form-row">   
					 <div class="col">
					<h5><label class="control-label" for="address"><b>Address</b></label></h5>
					<textarea class="form-control" name="address" rows="4" cols="30"></textarea value="<?php echo $first; ?>">
					</div>
					</div>
					
					
					
					
					
					
					
					<div class="form-row">   
					 <div class="col">
					<h5><label class="control-label" for="gender"><b>GENDER</b></label></h5>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="gender" value="male" />
					<label class="form-check-label" for="male">Malevalue="<?php echo $first; ?>"</label>
					</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="gender" value="female" />
					<label class="form-check-label" for="female">Female value="<?php echo $first; ?>"</label>
					</div>
					</div>
					</div>
					
					&nbsp;
					
					
					
					
					
					<div class="form-row">
					<div class="col">
					<h5><label  class="control-label " for="birthdate">Date of Birth</label></h5>
					<input class="form-control" type="text" name="birthdate" placeholder="YYYY-MM-DD"  pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" value="<?php echo $first; ?>">
					</div>
					
					
					<div class="col">
					<h5><label  class="control-label" for="email"><b>Email</b></label></h5>
					<input  class="form-control" type="email" name="email" placeholder="Email" required="" value="<?php echo $email; ?>">
					</div>
					</div>
					<hr>
	

					
					
					
					<div>

					<h4>Customer Login Details</h4>
					<hr class="mb-3">
					
					<div class="form-row">
					<div class="col">
					<h5><label class="control-label" for="username"><b>UserName</b></label></h5>
					<input class="form-control" type="text" name="username" placeholder="UserName" required="" value="<?php echo $first; ?>">
					</div>
					</div>
					
					
					<div class="form-row">
					<div class="col">
					<h5><label class="control-label" for="password"><b>Password</b></label></h5>
					<input class="form-control" type="password" name="password" placeholder="password" required="" value="<?php echo $first; ?>">
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
	<?php 

		if(isset($_POST['submit']))
		{
			
			
		$firstname=	$result['firstname'];
	$middlename	=$result['middlename'];
	$lastname	=$result['lastname'];
	$mobilenumber	=$result['mobilenumber'];
	$state	=$result['state'];
	$birthdate	=$result['birthdate'];
	$gender	=$result['gender'];
	$address	=$result['address'];
	$username	=$result['username'];
	$email	=$result['email'];
	$password	=$result['password'];

			$sql1= "UPDATE reg1 SET firstname='$firstname', first='$first', last='$last', username='$username', password='$password', email='$email', contact='$contact' WHERE email='".$_SESSION['loguser']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="about.php";
					</script>
				<?php
			}
		}
		?>

</body>
</html>