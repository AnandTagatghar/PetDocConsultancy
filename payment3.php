<?php
session_start();
$conn=mysqli_connect("localhost","root","","anand");
$mobilenumber=$_POST['mobilenumber'];
$bank=$_POST['bank'];
$uname=$_SESSION['uname'];
$appdate=$_SESSION['appdate'];
$appdate1=$_SESSION['appdate1'];
$sql="select * from pet where uname='$uname' and appdate='$appdate $appdate1';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$sql="update pet set mobilenumber='$mobilenumber', bank='$bank' where uname='$uname' and appdate='$appdate $appdate1';";
	mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)>0)
	{
		echo "<script> alert('PAYMENT SUCCESSFULL'); history.back(); </script>";
		$sql="update pet set payment='yes' where uname='$uname' and appdate='$appdate $appdate1';";
		mysqli_query($conn,$sql);
	}
	else
	{
		echo "<script> alert('PAYMENT SUCCESSFULL'); history.back(); </script>";
		$sql="update pet set payment='yes' where uname='$uname' and appdate='$appdate $appdate1';";
		mysqli_query($conn,$sql);
	}
}
?>
