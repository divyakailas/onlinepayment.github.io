<html>
<head>
<title>Update</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
	body{
		background-color: white-smoke;
	}
	input{
		width : 40%;
		height : 5%;
		border : 1px;
		border-radius : 05px;
		padding: 8px 15px 8px 15px;
		margin : 10px 0px 15px 0px;
	}

</style>
</head>

<body>
<?php
	$conn=mysqli_connect("localhost","root","","reginsert");
	//$db = mysqli_select_db($conn,'web');
	
	if (isset($_POST['submit'])) 
	{
		$firstname = $_POST['firstname'];
		
		$query  = "UPDATE `reg1` SET firstname = '$_POST[firstname]', lastname = '$_POST[lastname]', mobilenumber = '$_POST[mobilenumber]', state = '$_POST[state]', email = '$_POST[email]', address = '$_POST[address]' where firstname = '$_POST[firstname]'";
		$query_run = mysqli_query($conn,$query);
		
		if ($query_run)
		{
			echo "Data updated";
			
		}
		
		else
		{
			echo "Your data has not been updated";
		}
	}

?>
	


<div class="container">
	<div class="row">
		<div class="col-xs-7 col-sm-6 col-lg-10 m-auto">
			
			
			<div class="card mt-5 bg-Light">
			<div class="card-title ">
				<div class="form" >

					<form  action="customerupdate2.php" method="POST">
				    <h4> Customer UPDATION Form</h4>
					<hr class="mb-3">
					<div class="form-row">   
					 <div class="col">
					<h5><label  class="control-label " for="firstname"><b>First Name</b></label></h5>
					<input class="form-control" type="text" name="firstname" placeholder="FirstName"  >
					 </div >
					 
					
					
					 <div class="col">
					<h5><label  class="control-label" for="lastname"><b>Last Name</b></label></h5>
					<input class="form-control" type="text" name="lastname" placeholder="LastName">
					</div>
					
					
					</div>
					<div class="form-row">   
					 <div class="col">
					<h5><label for="mobilenumber"><b>Mobile Number</b></label></h5>
					<input class="form-control" type="text" name="mobilenumber" placeholder="Mobile Number"  >
					</div>
					
					<div class="col">
					<h5><label for="state"><b>State</b></label></h5>
					<input class="form-control" type="text" name="state" placeholder="state">
					</div>
					</div>
					
					 <div class="col">
					<h5><label  class="control-label " for="email"><b>Email</b></label></h5>
					<input class="form-control" type="text" name="email" placeholder="Email">
					</div>
					
					<div class="form-row">   
					 <div class="col">
					<h5><label class="control-label" for="address"><b>Address</b></label></h5>
					<textarea class="form-control" name="address" rows="4" cols="30" >  </textarea>
					</div>
					</div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					

					
					
					
					
					
					
					
					
					<div class="form-row">
					<div class="col">
					<center><input class="btn btn-success" type="submit" name="submit" value="submit"></center>
					</div>
					</div>
					
	
	

					</form>
					&nbsp;&nbsp;
					<p> data update<a href ="customerreport.php">here</a>
					</div>
				</div>
				</div>
				</div>
		</div>
	</div>
</div>
</body>
</html>





























