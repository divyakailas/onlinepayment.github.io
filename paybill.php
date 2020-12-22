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
	.breadcrumbs-section{
		background-color: #E6E6FA;
	}
	
	
  
   
</style>
</head>

<body>

<?php
if(isset($_POST['makepayment']))
{
	$bankname=$_POST['bankname'];
	$cardno=$_POST['cardno'];
	$cvvno=$_POST['cvvno'];
	$holdername=$_POST['holdername'];
	$totalamount=$_POST['totalamount'];
	$expirymonth=$_POST['expirymonth'];
	$expiryyear=$_POST['expiryyear'];
	$cardtype=$_POST['cardtype'];
	
	
	
	
	
	
	
	$query="insert into paybill(bankname,cardno,cvvno,holdername,totalamount,expirymonth,expiryyear,cardtype)values('$bankname','$cardno','$cvvno','$holdername','$totalamount','$expirymonth','$expiryyear','$cardtype')";
	$run=mysqli_query($conn,$query);
	
	
	if($run)
	{
		echo"payment successfully!!";
		//header("Location:LOGINFORMNEW.php");
		
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
		<div class="col-md-6 ">
			<form action=""onsubmit="return getCCType($cardno)" method="POST">
			<h4><b>Make Payment</b></h4>
			<hr>
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="bankname"> Bank Name</label></h5>
					<input class="form-control" type="text" name="bankname" placeholder="" required pattern="[A-Z a-z]+" title="enter bank name" >
					
				</div>
				
				
				
				
				
				<div class="col">
					<h5><label  class="control-label " for="cardno">Enter your card number</label></h5>
					<input class="form-control" type="text" name="cardno" id="cardno"  pattern="^6(?:011|5[0-9]{2})[0-9]{12}$" title="enter 16 digit card no">
				</div>
			</div>
			
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="cvvno">enter your cvv no</label></h5>
					<input class="form-control" type="text" name="cvvno" required pattern="[0-9]{3}" title=" please enter 3 digit cvv no" >
				</div>
			
			
			
			
				<div class="col">
					<h5><label  class="control-label " for="holdername">Enter Card Holder Name</label></h5>
					<input class="form-control" type="text" name="holdername" placeholder="" required pattern="[A-Za-z]+"  title="card holder name" >
				</div>
				
			</div>
			
			<div class="form-row">
				
				<div class="col">
					<h5><label  class="control-label " for="totalamount">Total Amount</label></h5>
					<input class="form-control" type="text" name="totalamount" placeholder="" required pattern="[0-9]+" title="enter total amount">
				</div>
			
			</div>
			
			
			<div class="form-row">   
					 <div class="col">
					
					
						<h5><label  class="control-label " for="expirymonth">Expiry  month</label></h5>				
					
					
					<select class="form-control" id="month" name="expirymonth" required>
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
					<select  class="form-control" name="expiryyear" id="year" required>
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
					
					<select class="form-control" name="cardtype" id="cardtype" required >
					<option value="">card type:</option>
					<option pattern="" value="Visa">Visa</option>
					<option value="MasterCard">MasterCard</option>
					<option  value="American Express">American Express</option>
					<option value="PayPal">PayPal</option>
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

</body>
</html>