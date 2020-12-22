<?php
$conn=mysqli_connect("localhost","root","","reginsert");
$firstname=$_GET['fn'];
$query="DELETE FROM reg1 where firstname='$firstname'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"<font color='blue'>record deleted  from table";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:81/onlinebillpay/customerreport.php">
	
	<?php
}
else
{
	echo"delete process failed";
}
?>