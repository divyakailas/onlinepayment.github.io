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
	
	$cardno=$_POST['cardno'];
	$cvvno=$_POST['cvvno'];
	$amount=$_POST['amount'];
	$expirymonth=$_POST['expirymonth'];
	$expiryyear=$_POST['expiryyear'];
	$cardtype=$_POST['cardtype'];
	
	$query="insert into mobilepart2(cardno,cvvno,amount,expirymonth,expiryyear,cardtype)values('$cardno','$cvvno','$amount','$expirymonth','$expiryyear','$cardtype')";
	$run=mysqli_query($conn,$query);
	
	
	if($run)
	{
		echo"payment successfully!!";
		
		
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
		<div class="col-md-6 m-auto">
		<div class="card mt-5 bg-light  border-dark">
			<form action="" method="POST">
			<h4><b> Payment mode</b></h4>
			&nbsp;&nbsp;
			<h5>Debit/Credit cards</h5>
			<hr>
			
			<h4>Enter Card Details</h4>
			&nbsp;&nbsp;
			<div class="form-row">
				
				
				<div class="col">
					<h5><label  class="control-label " for="cardno">Enter your card number</label></h5>
					<input class="form-control" type="text" name="cardno" placeholder="Enter Debit/Credit card number" required pattern="[0-9]{10,12}" >
				</div>
			</div>
			
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="cvvno">enter your cvv no</label></h5>
					<input class="form-control" type="text" name="cvvno" required pattern="[0-9]{3}" title=" please enter 3 digit cvv no">
				</div>
			
			</div>
			
			<div class="form-row">
				
				<div class="col">
					<h5><label  class="control-label " for="amount"> Amount</label></h5>
					<input class="form-control" type="text" name="amount" placeholder="" required pattern="[0-9]+" title="enter total amount">
				</div>
			
			</div>
			
			
			<div class="form-row">   
					 <div class="col">
					
					
						<h5><label  class="control-label " for="expirymonth">Expiry  month</label></h5>				
					
					
					<select class="form-control" id="month" name="expirymonth" required="">
					<option value="">Month:</option>
					<option value="January">Jan</option>
					<option value="February">Feb</option>
					<option value="March">Mar</option>
					<option value="April">Apr</option>
					<option value="May">May</option>
					<option value="June">Jun</option>
					<option value="July">Jul</option>
					<option value="August">Aug</option>
					<option value="September">Sep</option>
					<option value="October">Oct</option>
					<option value="November">Nov</option>
					<option value="December">Dec</option>
					</select>
					</div>
					
					
					<div class="col">
					<h5><label  class="control-label " for="expiryyear">Expiry Year</label></h5>
					<select  class="form-control" name="expiryyear" id="year" required="">
					<option value="">Year:</option>
					<option value="2020">2028</option>
					<option value="2020">2027</option>
					<option value="2020">2026</option>
					<option value="2020">2025</option>
					<option value="2020">2024</option>
					<option value="2020">2023</option>
					<option value="2020">2022</option>
					<option value="2020">2021</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					
					</select>
					</div>
			</div>
			
			
							
			<div class="form-row">   
				<div class="col">
					<h5><label  class="control-label " for="cardtype">Select your card Type</label></h5>
					
					<select class="form-control" name="cardtype" id="cardname" required="">
					<option value="Visa">Visa</option>
					<option value="MasterCard">MasterCard</option>
					<option value="American Express">American Express</option>
					<option value="PayPal">PayPal</option>
					<option value="RuPay">RuPay</option>

				</div>
			
				</div>	
					
					
			<div class="form-row">
					<div class="col">
					<input class="btn btn-success" type="submit" name="makepayment" value="Make Payment">
					</div>
			</div>
			
			
			
			
			</form>
		</div>
	</div>
</div>


</div>

</body>
</html>