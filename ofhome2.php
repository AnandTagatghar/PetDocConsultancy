<?php
session_start();
$conn=mysqli_connect("localhost","root","","anand");
$appdate1=$_POST['appdate'];
$prescription=$_POST['prescription'];
$confirm=$_POST['confirm'];
$appdate=$_SESSION['uname1'];
$sql="select uname from pet where appdate='$appdate';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$sql="update pet set appdate='$appdate1', prescription='$prescription', confirm='$confirm',payment='completed' where appdate='$appdate';";
	mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)>0)
	{
		echo "<script> alert('CONFIRMATION DONE'); window.location.href='ofhome.php'; </script>";
	}
	else
	{
		echo "<script> alert('THIS TIME IS ALREADY FIXED, PLEASE CHECK YOUR SCHEDULE'); window.location.href='ofhome.php'; </script>";
		//echo mysqli_error($conn);
	}
}
?>
