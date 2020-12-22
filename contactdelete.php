<?php
$conn=mysqli_connect("localhost","root","","reginsert");
$name=$_GET['fn'];
$query="DELETE FROM abouusttable where name='$name'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"<font color='blue'>record deleted  from table";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:81/onlinebillpay/contactreport.php">
	
	<?php
}
else
{
	echo"delete process failed";
}
?>