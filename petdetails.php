<?php
session_start();
$conn=mysqli_connect("localhost","root","","anand");
$pettype=$_POST['pettype'];
$appdate=$_POST['appdate'];
$appdate1=$_POST['appdate1'];
$_SESSION['appdate']=$appdate;
$_SESSION['appdate1']=$appdate1;
$uname=$_SESSION['uname'];
date_default_timezone_set('Asia/Calcutta');
$time=date("H:i:s");
$date10=date("Y");
$date11=date("m");
$date12=date("d");
$date1=explode("-",$appdate);
$sql="select * from user where uname='$uname';";
$a=mysqli_query($conn,$sql);
if(mysqli_num_rows($a)==1)
{
	if((int)$date1[0]>(int)$date10 || (int)$date1[1]>(int)$date11 || (int)$date1[2]>(int)$date12)
	{
		$sql="insert into pet values('$uname','$pettype','$appdate $appdate1','','','','','','','','');";
		mysqli_query($conn,$sql);
		$rc=mysqli_affected_rows($conn);
		if($rc>0)
		{
			header("location:petdetails1.php");
		}
		else
		{
			echo "<script> alert('This time is not available,Please select other timing.'); history.back(); </script>";
			//echo mysqli_error($conn);
		}
	}
	else
	{
		if((int)$appdate1>(int)$time)
		{
			$sql="insert into pet values('$uname','$pettype','$appdate $appdate1','','','','','','','','')";
			mysqli_query($conn,$sql);
			$rc=mysqli_affected_rows($conn);
			if($rc>0)
			{
				header("location:petdetails1.php");
			}
			else
			{
				echo "<script> alert('This time is not available,Please select other timing.'); history.back(); </script>";
				//echo mysqli_error($conn);
			}
		}
		else
		{
			echo "<script> alert('This time is already fixed by others  please select other time.'); history.back(); </script>";
		}
	}
}
?>
