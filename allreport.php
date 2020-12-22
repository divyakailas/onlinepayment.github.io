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
	body{
		 background:#E6E6FA;
	}
	
	
  
   
</style>
</head>


<body>

<?php
if(isset($_POST['cusreport']))
{
header("Location:specificcustomer.php");
}
if(isset($_POST['elecreport']))
{
header("Location:specific.php");
}
if(isset($_POST['waterreport']))
{
header("Location:specificwater.php");
}
if(isset($_POST['mobreport']))
{
header("Location:specificmobile.php");
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
        <a class="nav-link" href="homebill.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      
    
  
      <li class="nav-item active">
        <a class="nav-link" href="about2.php">ABOUT US </a>
      </li>
	  
	  
      
       <li class="nav-item dropdown">
        <a class="nav-link " href="generatebill.php">ELECTRICITY BILL</a>
       
      </li>
	  
	  
    
      <li class="nav-item active">
        <a class="nav-link" href="waterbill.php">WATER BILL</a>
      </li>
	  
	  
	  <li class="nav-item active">
        <a class="nav-link" href="mobilepart1.php">MOBILE BILL</a>
      </li>
	  
	  
	   <li class="nav-item active">
        <a class="nav-link" href="allreport.php">REPORTS</a>
      </li>
	   <li class="nav-item active">
        <a class="nav-link" href="changepassword.php">CHANGE PASSWORD</a>
      </li>  
	  <li class="nav-item active">
        <a class="nav-link" href="logouthome.php">LOGOUT</a>
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
			    </div>
			<hr>
			</form>
		</div>
		</div>
	</div>
</div>




</body>
</html>

