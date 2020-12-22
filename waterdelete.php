


<?php
$conn=mysqli_connect("localhost","root","","reginsert");
$consumerno=$_GET['fn'];
$query="DELETE FROM waterbill where consumerno='$consumerno'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"record deleted  from table";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:81/onlinebillpay/waterreport.php">
	<?php
}
else
{
	echo"delete process failed";
}
?>
