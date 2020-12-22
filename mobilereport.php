
<html>
<head>
	<title>water report</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 6px;
  text-align: center;
}

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
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8B008B;">
  <a class="navbar-brand " href="adminhome.php">OnlineBillPay</a>
  
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


<?php
$conn=mysqli_connect("localhost","root","","reginsert");
$query="select * from mobilepart1";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{

?>  


<table   align="center" width="400">
<center><h1>Mobile Bill Report</h1></center>
	<tr>
		<th>Mobile Number</th>
		<th>Operator</th>
		<th>Circle</th>
		
		
		<th colspan="2">Operations</th>
	</tr>
	

	
	<?php
	
	while($result=mysqli_fetch_assoc($data))
	{
		
		echo"<tr>
		<td>".$result['mobileno']."</td>
		<td>".$result['operator']."</td>
		<td>".$result['circle']."</td>
		
		
	<td>Edit</td>
		
		<td><a href='mobiledelete.php?fn=$result[mobileno]' >Delete</a></td>
		</tr>";
		
		
	}
}
else
{
	echo"no record found";
}


?>
</table>
</body>
</html>
