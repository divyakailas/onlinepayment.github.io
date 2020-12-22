<?php
$conn=mysqli_connect("localhost","root","","mobile");

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
if(isset($_POST['proceedpayment']))
{
	$mobileno=$_POST['mobileno'];
	$operator=$_POST['operator'];
	$circle=$_POST['circle'];
	
	
	$query="insert into mobilepart1(mobileno,operator,circle)values('$mobileno','$operator','$circle')";
	$run=mysqli_query($conn,$query);
	
	
	if($run)
	{
		echo"payment successfully!!";
		header("Location:mobilepart2.php");
		
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
	  
      
      
    
    </ul>
    
   </div>
</nav>

<div class="form">

	<div class="row">
		<div class="col-md-6 m-auto">
		<div class="card mt-5 bg-light  border-dark">
			<form action="" method="POST">
			<h4><b>Mobile Recharge</b></h4>
			<hr>
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="mobileno">Mobile No</label></h5>
					<input class="form-control" type="text" name="mobileno" required pattern="[0-9]{10}" >
					
				</div>
			</div>
			
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="operator">Operator</label></h5>
					<select class="form-control" name="operator" id="operator" required="">
					<option value="airtel">Airtel</option>
					<option value="BSNL">BSNL</option>
					<option value="idea">Idea</option>
					<option value="jio">Jio</option>
					<option value="matrix">Matrix</option>
					<option value="MTNL">MTNL</option>
					<option value="vodafone">Vodafone</option>
					<option value="tata docomo">Tata Docomo</option>
					<option value="tata indicom">Tata indicom</option>
					</select>
				</div>
			</div>
			
			
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="circle">Circle</label></h5>
					<select class="form-control" name="circle" id="circle" required ="">
					<option value="Mumbai">Mumbai</option>
					<option value="Maharashtra">Maharashtra</option>
					
					</select>
				</div>
			</div>
			&nbsp;&nbsp;
			
	
			
			<div class="form-row">
					<div class="col">
					<input class="btn btn-success" type="submit" name="proceedpayment" value="Proceed to Pay Bill">
					</div>
			    </div>
			
			</form>
		</div>
	</div>
</div>
</div>



</body>
</html>