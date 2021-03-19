<?php
session_start();
$conn=mysqli_connect("localhost","root","","anand");
$nameoncard=$_POST['nameoncard'];
$cardnumber=$_POST['cardnumber'];
$expirydate=$_POST['expirydate'];
$cvv=$_POST['cvv'];
$uname=$_SESSION['uname'];
$appdate=$_SESSION['appdate'];
$appdate1=$_SESSION['appdate1'];
$sql="select * from pet where uname='$uname' and appdate='$appdate $appdate1';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$sql="update pet set nameoncard='$nameoncard', cardnumber='$cardnumber', expirydate='$expirydate', cvv='$cvv' where uname='$uname' and appdate='$appdate $appdate1';";
	mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)>0)
	{
		echo "<script> alert('PAYMENT SUCCESSFULL'); window.location.href='home.php'; </script>";
		$sql="update pet set payment='yes' where uname='$uname' and appdate='$appdate $appdate1';";
		mysqli_query($conn,$sql);
	}

else
{
echo "<script> alert('PAYMENT IS NOT SUCCESSFULL'); history.back(); </script>";
$sql="delete from pet where appdate='$appdate $appdate1'";
mysqli_query($conn,$sql);
}
}
?>
