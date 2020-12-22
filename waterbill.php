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
	
	
	<!--<script type="text/javascript">-->

<!--function setAction(nPage)
{

//document.forms[0].action = nPage;
//}-->
<!--var urlMenu=document.getElementById('paymentmode');
//urlMenu.onchange=function(){
	//var useroption=this.options(this.selectedindex);
	//if(useroption.value!="nothing"){
		//window.open(useroption.value,"dhfg","");}}-->

<!--</script>-->
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
if(isset($_POST['creditcard']))
{
	$consumerno=$_POST['consumerno'];
	$name=$_POST['name'];
	$billdate=$_POST['billdate'];
	$duedate=$_POST['duedate'];
	$currentreading=$_POST['currentreading'];
	$totalreading=$_POST['totalreading'];
	//$paymentmode=$_POST['paymentmode'];
	
	$query="insert into waterbill(consumerno,name,billdate,duedate,currentreading,totalreading)values('$consumerno','$name','$billdate','$duedate','$currentreading','$totalreading')";
	$run=mysqli_query($conn,$query);
	
	
	if($run)
	{
		echo"payment information saved successfully!!";
		header("Location:paywater.php");
		
			
		
	}
	else
	{
		echo"information not save  successfully!!";
		echo"error:".mysqli_error($conn);
	}
	
	
	
}
if(isset($_POST['debitcard']))
{
	$consumerno=$_POST['consumerno'];
	$name=$_POST['name'];
	$billdate=$_POST['billdate'];
	$duedate=$_POST['duedate'];
	$currentreading=$_POST['currentreading'];
	$totalreading=$_POST['totalreading'];
	//$paymentmode=$_POST['paymentmode'];
	
	$query="insert into waterbill(consumerno,name,billdate,duedate,currentreading,totalreading)values('$consumerno','$name','$billdate','$duedate','$currentreading','$totalreading')";
	$run=mysqli_query($conn,$query);
	
	
	if($run)
	{
		echo"payment information saved successfully!!";
		header("Location:paywater.php");
		
	}
	else
	{
		echo"information not save  successfully!!";
		echo"error:".mysqli_error($conn);
	}
	
	
	
}
if(isset($_POST['internetbank']))
{
	$consumerno=$_POST['consumerno'];
	$name=$_POST['name'];
	$billdate=$_POST['billdate'];
	$duedate=$_POST['duedate'];
	$currentreading=$_POST['currentreading'];
	$totalreading=$_POST['totalreading'];
	//$paymentmode=$_POST['paymentmode'];
	
	$query="insert into waterbill(consumerno,name,billdate,duedate,currentreading,totalreading)values('$consumerno','$name','$billdate','$duedate','$currentreading','$totalreading')";
	$run=mysqli_query($conn,$query);
	
	
	if($run)
	{
		echo"payment information saved successfully!!";
		header("Location:internetwater.php");
		
	}
	else
	{
		echo"information not save  successfully!!";
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
			<h4><b>pay your Water bill</b></h4>
			<hr>
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="consumerno">Consumer No</label></h5>
					<input class="form-control" type="text" name="consumerno" placeholder=""required="" >
				</div>
				
				<div class="col">
					<h5><label  class="control-label " for="name">Name</label></h5>
					<input class="form-control" type="text" name="name" required pattern="[A-Za-z]+"  placeholder="" title="please enter valid name">
				</div>
			
			</div>
			
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="billdate">Bill Date</label></h5>
					<input class="form-control" type="text" name="billdate" placeholder="YYYY-MM-DD"  required pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
				</div>
				
				<div class="col">
					<h5><label  class="control-label " for="duedate">Due Date</label></h5>
					<input class="form-control" type="text" name="duedate" placeholder="YYYY-MM-DD" required pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" >
				</div>
			
			</div>
			
			<div class="form-row">
				<div class="col">
					<h5><label  class="control-label " for="currentreading">Current reading</label></h5>
					<input class="form-control" type="text" name="currentreading" placeholder=""  required pattern="[0-9]+">
				</div>
				
				<div class="col">
					<h5><label  class="control-label " for="totalreading">Total reading</label></h5>
					<input class="form-control" type="text" name="totalreading" placeholder="" required pattern="[0-9]+">
				</div>
			
			</div>
			
			
			
			
			
			<h5><label class="control-label" for="paymentmode">Payment Mode</label></h5>
			<div class="form-row">
					<div class="col">
					<input class="btn btn-success" type="submit" name="creditcard" value="Credit Card payment">
					</div>
			
			
			
					<div class="col">
					<input class="btn btn-success" type="submit" name="debitcard" value="Debit Card payment">
					</div>
					
					<div class="col">
					<input class="btn btn-success" type="submit" name="internetbank" value="Internet Banking Payment">
					</div>
			</div>
			
			
			
			
			
			</form>
		</div>
	</div>

</div>

</div>


</body>
</html>