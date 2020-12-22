<?php
$conn=mysqli_connect("localhost","root","","reginsert");
if(isset($_GET['finame'])){
	$sql="select * from  reg1 where firstname=" .$_GET['finame'];
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
}
if(isset($POST['submit'])){
	
	$middlename=$_GET['middlename'];
	$lastname=$_GET['lastname'];
	$mobilenumber=$_GET['mobilenumber'];
	$state=$_GET['state'];
	$birthdate=$_GET['birthdate'];
	$gender=$_GET['gender'];
	$address=$_GET['address'];
	$username=$_GET['username'];
	$email=$_GET['email'];
	$password=$_GET['password'];
	
	$update="UPDATE reg1 SET middlename='$middlename',lastname='$lastname',mobileno='$mobilenumber',state='$state',birthdate='$birthdate',gender='$gender',address='$address',email='$EMAIL' WHERE firstname=" .$_GET['finame'];
	$up=mysqli_query($conn,$update);
	if(!isset($sql)){
		die("error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location: newupdatecustomer.php");
	}
}
?>


<html>
<head>
<title>REGISTRATION</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-xs-7 col-sm-6 col-lg-10 m-auto">
			
			
			<div class="card mt-5 bg-Light">
			<div class="card-title ">
				<div class="form" >

					<form  action="newupdatecustomer.php" method="POST">
				    <h4> Customer Registration Form</h4>
					<hr class="mb-3">
					<div class="form-row">   
					 
					 
					 <div class="col">
					<h5><label  class="control-label " for="middlename"><b>Middle Name</b></label></h5>
					<input class="form-control" type="text" name="middlename" placeholder="MiddleName" value="<?php  echo $row['middlename']; ?>" >
					</div>
					
					 <div class="col">
					<h5><label  class="control-label" for="lastname"><b>Last Name</b></label></h5>
					<input class="form-control" type="text" name="lastname" placeholder="LastName"  value="<?php  echo $row['lastname'];?>" >
					</div>
					</div>
					<div class="form-row">   
					 <div class="col">
					<h5><label for="mobilenumber"><b>Mobile Number</b></label></h5>
					<input class="form-control" type="text" name="mobilenumber" placeholder="Mobile Number"  value="<?php echo $_GET['mno']; ?>" >
					</div>
					
					<div class="col">
					<h5><label for="state"><b>State</b></label></h5>
					<input class="form-control" type="text" name="state" placeholder="state"  value="<?php  echo $_GET['st'];?>" >
					</div>
					</div>
					
					<div class="form-row">   
					 <div class="col">
					<h5><label class="control-label" for="address"><b>Address</b></label></h5>
					<textarea class="form-control" name="address" rows="4" cols="30" >  <?php echo $_GET['add'];?></textarea>
					</div>
					</div>
					
					
					
					
					
					
					
					<div class="form-row">   
					 <div class="col">
					<h5><label class="control-label" for="gender"><b>GENDER</b></label></h5>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="gender" value="male"  />
					
					<?php
					if($result['gender']=='male')
					{
						echo"checked";
					}
					?>
					<label class="form-check-label" for="male">Male</label>
					</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="gender" value="female"    />
					<?php
					if($result['gender']=='female')
					{
						echo"checked";
					}
					?>
					<label class="form-check-label" for="female">Female</label>
					</div>
					</div>
					</div>
					
					&nbsp;
					
					
					
					
					
					<div class="form-row">
					<div class="col">
					<h5><label  class="control-label " for="birthdate">Date of Birth</label></h5>
					<input class="form-control" type="text" name="birthdate" placeholder="YYYY-MM-DD"  pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"  value="<?php echo $_GET['bd']; ?>" >
					</div>
					
					
					<div class="col">
					<h5><label  class="control-label" for="email"><b>Email</b></label></h5>
					<input  class="form-control" type="email" name="email" placeholder="Email" required=""  value="<?php echo $_GET['em'];?>" >
					</div>
					</div>
					<hr>
	

					
					
					
					<div>

					<h4>Customer Login Details</h4>
					<hr class="mb-3">
					
					<div class="form-row">
					<div class="col">
					<h5><label class="control-label" for="username"><b>UserName</b></label></h5>
					<input class="form-control" type="text" name="username" placeholder="UserName" required="" value="<?php  echo $_GET['un'];?>" >
					</div>
					</div>
					
					
					<div class="form-row">
					<div class="col">
					<h5><label class="control-label" for="password"><b>Password</b></label></h5>
					<input class="form-control" type="password" name="password" placeholder="password" required="" value="<?php echo $_GET['pass']; ?>" >
					</div>
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;
					
					
					
					<div class="form-row">
					<div class="col">
					<center><input class="btn btn-success" type="submit" name="submit" value="Update"></center>
					</div>
					</div>
					
					
	
	
	

					</form>
					&nbsp;&nbsp;
					<p> ALREADY A USER?<a href ="loginform.php">CLICK HERE TO LOGIN</a>
					</div>
				</div>
				</div>
				</div>
		</div>
	</div>
</div>
</body>
</html>
