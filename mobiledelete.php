


<?php
$conn=mysqli_connect("localhost","root","","reginsert");
$mobileno=$_GET['fn'];
$query="DELETE FROM mobilepart1 where mobileno='$mobileno'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"record deleted  from table";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:81/onlinebillpay/mobilereport.php">
	<?php
}
else
{
	echo"delete process failed";
}
?>
