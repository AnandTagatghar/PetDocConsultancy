<?php
session_start();
$conn=mysqli_connect("localhost","root","","anand");
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
	$sql="update pet set cardnumber1='$cardnumber', expirydate1='$expirydate', cvv1='$cvv' where uname='$uname' and appdate='$appdate $appdate1';";
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
