
<html>
<head>
<title>update</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	
	

</head>

<body>






<!--<div class="container">-->
	<div class="row">
		<div class="col-xs-7 col-sm-6 col-lg-10 m-auto">
			
			
			<div class="card mt-5 bg-light border-dark ">
			<div class="card-title ">
				<div class="form" >

					<form  action="customerupdate1.php" method="POST">
				    <h4> Customer Registration Form</h4>
					<hr class="mb-3">
					<div class="form-row">   
					 <div class="col">
					<h5><label  class="control-label " for="firstname"><b>First Name</b></label></h5>
					<input class="form-control" type="text" name="firstname" placeholder="FirstName" >
					 </div >
					 
					 <div class="col">
					<h5><label  class="control-label " for="middlename"><b>Middle Name</b></label></h5>
					<input class="form-control" type="text" name="middlename" placeholder="MiddleName" >
					</div>
					
					 <div class="col">
					<h5><label  class="control-label" for="lastname"><b>Last Name</b></label></h5>
					<input class="form-control" type="text" name="lastname" placeholder="LastName" >
					</div>
					</div>
					<div class="form-row">   
					 <div class="col">
					<h5><label for="mobilenumber"><b>Mobile Number</b></label></h5>
					<input class="form-control" type="text" name="mobilenumber" placeholder="Mobile Number" >
					</div>
					
					<div class="col">
					<h5><label for="state"><b>State</b></label></h5>
					<input class="form-control" type="text" name="state" placeholder="state" >
					</div>
					</div>
					
					<div class="form-row">   
					 <div class="col">
					<h5><label class="control-label" for="address"><b>Address</b></label></h5>
					<textarea class="form-control" name="address" rows="4" cols="30"></textarea>
					</div>
					</div>
					
					
					
					
					
					
					
					<div class="form-row">   
					 <div class="col">
					<h5><label class="control-label" for="gender"><b>GENDER</b></label></h5>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="gender" value="male" />
					<label class="form-check-label" for="male">Male</label>
					</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="gender" value="female" />
					<label class="form-check-label" for="female">Female</label>
					</div>
					</div>
					</div>
					
					&nbsp;
					
					
					
					
					
					<div class="form-row">
					<div class="col">
					<h5><label  class="control-label " for="birthdate">Date of Birth</label></h5>
					<input class="form-control" type="text" name="birthdate" placeholder="YYYY-MM-DD"  pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
					</div>
					
					
					<div class="col">
					<h5><label  class="control-label" for="email"><b>Email</b></label></h5>
					<input  class="form-control" type="email" name="email" placeholder="Email" required="">
					</div>
					</div>
					<hr>
	

					
					
					
					<div>

					<h4>Customer Login Details</h4>
					<hr class="mb-3">
					
					<div class="form-row">
					<div class="col">
					<h5><label class="control-label" for="username"><b>UserName</b></label></h5>
					<input class="form-control" type="text" name="username" placeholder="UserName" required="">
					</div>
					</div>
					
					
					<div class="form-row">
					<div class="col">
					<h5><label class="control-label" for="password"><b>Password</b></label></h5>
					<input class="form-control" type="password" name="password" placeholder="password" required="">
					</div>
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;
					
					
					
					<div class="form-row">
					<div class="col">
					<center><input class="btn btn-success" type="submit" name="update" value="UPDATE"></center>
					</div>
					</div>
					
					
	
	
	

					</form>
					&nbsp;&nbsp;
					<p> ALREADY A USER?<a href ="customerreport.php">CLICK HERE TO LOGIN</a>
					</div>
				</div>
				</div>
				</div>
		</div>
	</div>
</div>
</body>
</html>


<?php
$conn=mysqli_connect("localhost","root","","reginsert");
if(isset($_POST['update']))
{
	$firstname=$_POST['firstname'];
	
	$query="UPDATE reg1 SET middlename='$_POST[middlename]', lastname = '$_POST[lastname]', mobilenumber = '$_POST[mobilenumber]', state = '$_POST[state]', email = '$_POST[email]', address = '$_POST[address]',username='$_POST[username]' , password = '$_POST[password]' where firstname='$_POST[firstname]'";
		$query_run = mysqli_query($conn,$query);
		
			if ($query_run)
		{
			echo '<script type="text/javascript">alert("data update")</script>';
			
		}
		
		else
		{
			echo '<script type="text/javascript">alert("data  not update")</script>';
		}
}

?>  