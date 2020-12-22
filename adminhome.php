<html>
<head>
<title>admin home</title>
<link rel="stylesheet" href="css/bootstrap.css">

<style>
body{
		 background:#E6E6FA;
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
</style>
</head>
<body>

<?php
if(isset($_POST['cusreport']))
{
header("Location:customerreport.php");
}
if(isset($_POST['elecreport']))
{
header("Location:elecreport.php");
}
if(isset($_POST['waterreport']))
{
header("Location:waterreport.php");
}
if(isset($_POST['mobreport']))
{
header("Location:mobilereport.php");
}
if(isset($_POST['contactreport']))
{
header("Location:contactreport.php");
}

?>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8B008B;">
  <a class="navbar-brand" href="adminhome.php">OnlineBillPay</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gonavbar" aria-controls="gonavbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="gonavbar">
    <ul class=" navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="customerreport.php">CUSTOMER REPORTS<span class="sr-only">(current)</span></a>
      </li>
      
    <li class="nav-item active">
        <a class="nav-link" href="elecreport.php">ELECTRICITY BILL REPORT </a>
      </li>
      
    <li class="nav-item active">
        <a class="nav-link" href="waterreport.php">WATER BILL REPORT</a>
      </li>
	  
      <li class="nav-item active">
        <a class="nav-link" href="mobilereport.php">MOBILE BILL REPORT</a>
      </li>
	   <li class="nav-item active">
        <a class="nav-link" href="contactreport.php">CONTACTUS REPORT</a>
      </li>
      
    <li class="nav-item active">
        <a class="nav-link" href="logout.php">LOGOUT</span></a>
      </li>
      
    </ul>
    
   </div>
</nav>

<div class="form">

	
			<form action="" method="POST">
			<h4><b> Bill Reports</b></h4>
			<hr>
			
			<h4><b>Customer Reports</b></h4>
			<div class="form-row">
					<div class="col">
					<input class="btn btn-success" type="submit" name="cusreport" value="View ">
					</div>
			    </div><hr>
		<h4><b>Electricity bill Reports</b></h4>
			<div class="form-row">
					<div class="col">
					<input class="btn btn-success" type="submit" name="elecreport" value="View bill">
					</div>
			    </div>
			<hr>

				<h4><b>Water bill Reports</b></h4>
				<div class="form-row">
					<div class="col">
					<input class="btn btn-success" type="submit" name="waterreport" value="View Bill">
					</div>
			    </div>
				<hr>
				<h4><b>Mobile bill Reports</b></h4>
				<div class="form-row">
					<div class="col">
					<input class="btn btn-success" type="submit" name="mobreport" value="View bill">
					</div>
			    </div><hr>
				<h4><b>Contact us Reports</b></h4>
				<div class="form-row">
					<div class="col">
					<input class="btn btn-success" type="submit" name="contactreport" value="View bill">
					</div>
			    </div>
			<hr>
			</form>
		</div>
		</div>
	</div>
</div>
</body>
</html>