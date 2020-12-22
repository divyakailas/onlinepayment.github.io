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
	.container{
		background-color:#862d86;
		
		border-color: #8B008B;
		
		border-style: solid;
		
	}
	body {
  
  background:  #ac39ac;
}
	
	<!--.navbar .navbar-toggler{
		background color:#00008B;
	}-->
	

hr{ 
  height: 0.00001px;
  color: #FFFAF0 ;
  background-color: white;
  border: none;
   border-color: #12345;
}
}

	
	
  
   
</style>
</head>

<body>
<div class="container">
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

<div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="1000">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="image/pay.jpg" class="d-block w-100" alt="..." style=" height: 550px;">
    </div>
    <div class="carousel-item" >
      <img src="image/electricity.jpg" class="d-block w-100" alt="..." style=" height: 550px;">
    </div>
    <div class="carousel-item">
      <img src="image/water.jpg" class="d-block w-100" alt="..." style=" height: 550px;">
    </div>
	 <div class="carousel-item">
      <img src="image/recharge.jpg" class="d-block w-100" alt="..." style=" height: 550px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
	 <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
	<li data-target="#mycarousel" data-slide-to="3"></li>
  </ol>
</div>
</div>


<!--other-->

<div class="container" >    
  <h3 class="text-light">ONLINE BILL PAYMENT SYSTEM</h3>
  <hr style="height:10px">

  <div class="row" >
    <div class="col-sm-4">
	<p class="text-light">pay your electricity bill online</p>
         <img src="image/elec4.png" class="d-block w-100" alt="..." style=" height: 300px;">
     
    </div>
    <div class="col-sm-4"> 
	<p class="text-light">pay your water bill online</p>
        <img src="image/water2.jpg" class="d-block w-100" alt="..." style=" height: 300px;">
        
    </div>
	
    <div class="col-sm-4">
	<p class="text-light">PAY YOUR BILL ONLINE</P>
	<hr style="height:2px">

          <img src="image/about2.png" class="d-block w-100" alt="..." style=" height: 300px;">
		
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-4">
	<p class="text-light">pay mobile recharge online</p>
         <img src="image/rec2.jpg" class="d-block w-100" alt="..." style=" height: 300px;">
     
    </div>
    <div class="col-sm-4"> 
	<p class="text-light">manage your billing details</p>
        <img src="image/manage.png" class="d-block w-100" alt="..." style=" height: 300px;">
         
    </div>
    <div class="col-sm-4">
          <img src="image/symbol.png" class="d-block w-100" alt="..." style=" height: 300px;">
		
    </div>
  </div>
</div><br>
<hr>

</div>








</body>
</html>