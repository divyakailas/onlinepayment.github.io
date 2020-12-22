<html>
<head>
<title>LOGIN form</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/loginstyle.css">
<style>

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
<form action="specificmobile.php" method="POST">



<center><h2><div class="text-danger">Mobile Bill</div></h2></center>

<label for="username"><b><div class="text-white">Mobile No</div></b></label>
<input class="form-control" type="text" name="mobileno" placeholder="mobile no" required="">

<label for="username"><b><div class="text-white">circle</div></b></label>
<input class="form-control" type="text" name="circle" placeholder="circle" required="">



					
					
<center><input class="btn btn-primary" type="submit" name="LOGIN" value="View"></center>







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
    if($_REQUEST['mobileno']=="" || $_REQUEST['circle']=="")
    {
    echo "All fields must be filled";
    }
    else
    {

	$query = mysqli_query($con,"select * from  mobilepart1  where mobileno='".$_REQUEST['mobileno']."'&&  circle='".$_REQUEST['circle']."' ")or die ("sql error" .mysqli_error());
	
	$total = mysqli_num_rows($query);
	if($total>0)
	{
		?>
		<table   align="center" width="400">
<center><h1>Mobile Report</h1></center>
	<tr>
		<th>mobile Number</th>
		<th>operator</th>
		<th>Circle</th>
		
	</tr>
	<?php
		while($result=mysqli_fetch_assoc($query))
	{
		
		echo"<tr>
		<td>".$result['mobileno']."</td>
		<td>".$result['operator']."</td>
		<td>".$result['circle']."</td>
		
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



