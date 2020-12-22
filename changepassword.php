<?php
$conn=mysqli_connect("localhost","root","","reginsert");

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel = "<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<style type="text/css">
		
		.changepass
		{
			width: 400px;
			height: 400px;
			margin:120px auto;
			background-color: black;
			opacity: .7;
			color: white;
			
			border-style:solid double;
			border-color:black;
		}
		.form-control
		{
			width: 300px;
		}
		
		.breadcrumbs-section{
		background-color: #8B008B;
	}
	body{
		 background:#E6E6FA;
	}
	</style>
</head>
<body>
<section class="breadcrumbs-section">
<div class="container ">
	<div class="row">
		<div class="col-2">
		<h2></h2>
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="homebill.php">Home</a></li>
			
  </ol>
		</div>
	</div>
</div>
</section>

	<div class="changepass">
		<div style="text-align: center;">
			<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Change Your Password</h1>
		</div>
		<div style="padding-left: 30px; ">
		<form action="changepassword.php" method="POST" >
			<input type="text" name="username" class="form-control" placeholder="username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder="email" required=""><br>
			<input type="text" name="password" class="form-control" placeholder="New password" required=""><br>
			<button class="btn btn-info" type="submit" name="submit" >Update</button>
		</form>

	</div>
	
	<?php

		if(isset($_POST['submit']))
		{
			if(mysqli_query($conn,"UPDATE reg1 SET password='$_POST[password]' WHERE username='$_POST[username]'
			AND email='$_POST[email]' ;"))
			
			{
			
				echo'<script type="text/javascript">
                alert("The Password Updated Successfully.");
              </script>'; 

				
			}
			else
			{
				echo'<script type="text/javascript">
                alert("The Password  not Updated Successfully.");
              </script> ';
			}
			
			
		}
	?></div>
</body>
</html>