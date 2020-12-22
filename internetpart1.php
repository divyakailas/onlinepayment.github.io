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
if(isset($_POST['makepayment']))
{
	$userid=$_POST['userid'];
	$loginpass=$_POST['loginpass'];
	$bankname=$_POST['bankname'];
	
	
	$query="insert into internetbank(userid,loginpass,bankname)values('$userid','$loginpass','$bankname')";
	$run=mysqli_query($conn,$query);
	
	
	if($run)
	{
		echo"payment successfully!!";
		header("Location:internetpart2.php");
		
	}
	else
	{
		echo"information not  successfully!!";
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

	<div class="row">
		<div class="col-md-6 m-auto ">
		<div class="card mt-5 bg-light  border-dark">
			<form action="" method="POST">
			<h4><b>Make Payment</b></h4>
			<hr>
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="userid">User ID</label></h5>
					<input class="form-control" type="text" name="userid" placeholder="" required pattern="[a-zA-Z0-9]{6,9}" title="please enter 6 to 9 digit userid">
					
				</div>
			</div>
			
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="loginpass">Login Password</label></h5>
					<input class="form-control" type="text" name="loginpass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="please enter valid password">
				</div>
			</div>
			
			
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="bankname"> Select Bank Name</label></h5>
					<select class="form-control" name="bankname" id="bankname" required="">
					<option value="Bank of Maharashtra">Bank of Maharashtra</option>
					<option value="Axis Bank">Axis Bank</option>
					<option value="Bank of India">Bank of India</option>
					<option value="Canara Bank">Canara Bank</option>
					<option value="ICICI Bank">ICICI Bank</option>
					<option value="IndusInd Bank">IndusInd Bank</option>
					<option value="Kotak Bank">Kotak Bank</option>
					<option value="State Bank of India">State Bank of India</option>
					<option value="UCO Bank">UCO Bank</option>
					<option value="Bank of Baroda">Bank of Baroda</option>
					<option value="HDFC Bank">HDFC Bank</option>
					<option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
					<option value="Central Bank of India">Central Bank of India</option>
					<option value="Punjab National Bank">Punjab National Bank</option>
				</div>
			</div>
			
			

				
				<div class="form-row">
					<div class="col">
					<input class="btn btn-success" type="submit" name="makepayment" value="Make payment">
					</div>
			    </div>
			
			</form>
		</div>
		</div>
	</div>
</div>




</body>
</html>