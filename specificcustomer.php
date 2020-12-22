<html>
<head>
<title>water report</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/loginstyle.css">
<style>
body {
  
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
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 6px;
  text-align: center;
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
			<li class="breadcrumb-item active" ><a href="allreport.php">Back</a></li>
  </ol>
		</div>
	</div>
</div>
</section>



<div class="row">
<div class="col-xl-5 m-auto">
<div class="card mt-5 bg-info border-dark">
<div class="card-title text-center mt-3">

</div>
<div class="form" >
<form action="specificcustomer.php" method="POST">



<center><h2><div class="text-danger">Customer Report</div></h2></center>

<label for="username"><b><div class="text-white">Firstname</div></b></label>
<input class="form-control" type="text" name="firstname" placeholder="firstName" required="">

<label for="username"><b><div class="text-white">Mobile Number</div></b></label>
<input class="form-control" type="text" name="mobilenumber" placeholder="Mobile Number" required="">



					
					
<center><input class="btn btn-primary" type="submit" name="LOGIN" value="submit"></center>







</form>

</div> 
</div>
</div>
</div>


<?php
require_once'config.php';
$con=mysqli_connect("localhost","root","","reginsert");
if (mysqli_connect_errno())
  {
  echo "could not connect to mysql " .mysqli_connect_error();
  }
if (isset($_REQUEST['LOGIN'])) 
{
    if($_REQUEST['firstname']==""|| $_REQUEST['mobilenumber']=="")
    {
    echo "All fields must be filled";
    }
    else
    {

	$query = mysqli_query($con,"select * from reg1 where firstname='".$_REQUEST['firstname']."'&&  mobilenumber='".$_REQUEST['mobilenumber']."'")or die ("sql error" .mysqli_error());
	
	$total = mysqli_num_rows($query);
	if($total>0)
	{
		?>
		<table   align="center" width="400">
<center><h1>Customer Report</h1></center>
	<tr>
		<th>FirstName</th>
		<th>MiddleName</th>
		<th>LastName</th>
		<th>Mobile Number</th>
		<th>State</th>
		<th>Date Of Birth</th>
		<th>Gender</th>
		<th>Address</th>
		<th>UserName</th>
		<th>Email</th>
		<th>Password</th>
		<th colspan="2">Operations</th>
	</tr>
	<?php
		while($result=mysqli_fetch_assoc($query))
	{
		
		echo"<tr>
		<td>".$result['firstname']."</td>
		<td>".$result['middlename']."</td>
		<td>".$result['lastname']."</td>
		<td>".$result['mobilenumber']."</td>
		<td>".$result['state']."</td>
		<td>".$result['birthdate']."</td>
		<td>".$result['gender']."</td>
		<td>".$result['address']."</td>
		<td>".$result['username']."</td>
		<td>".$result['email']."</td>
		<td>".$result['password']."</td>
		<td><a href='customerupdate21.php?firstname=$result[firstname]&middlename=$result[middlename]&lastname=$result[lastname]&mobilenumber=$result[mobilenumber]&state=$result[state]&email=$result[email]&address=$result[address]&username=$result[username]&password=$result[password]'>Edit</a></td>
		
		<td><a href='deletecustomer.php?fn=$result[firstname]' >Delete</a></td>
		</tr>";
	}
		echo "You have logged in successfully";
		//<!--header("Location:homebill.php");-->
		
	}
	else
	{
		echo "Email or Password incorrect";
	}
}
}
?>
</table>
</body>
</html>
