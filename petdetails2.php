<?php
session_start();
$conn=mysqli_connect("localhost","root","","anand");
$petname=$_POST['petname'];
$petage=$_POST['petage'];
$breed=$_POST['breed'];
$petsex=$_POST['petsex'];
$reason=$_POST['reason'];
$uname=$_SESSION['uname'];
$appdate=$_SESSION['appdate'];
$appdate1=$_SESSION['appdate1'];
$sql="select * from pet where uname='$uname' and appdate='$appdate $appdate1';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{

		$query="update pet set payment='yes', petname='$petname', petage='$petage', breed='$breed', petsex='$petsex', reason='$reason' where uname='$uname' and appdate='$appdate $appdate1';";
		mysqli_query($conn,$query);
		$result=mysqli_affected_rows($conn);
		if($result>0)
		{
			//header('location:payment.php');
			echo "<script> alert('YOUR APPOINTMENT IS CONFIRMED'); window.location.href='home.php'; </script>";
		}
		else
		{
			echo "<script> alert('YOUR CONFIRMATION IS NOT DONE'); window.location.href='home.php'; </script>";
			//echo mysqli_error($conn);
			//header("location:payment.php");
		}
}
?>
