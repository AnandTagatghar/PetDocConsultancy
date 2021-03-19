<?php
$conn=mysqli_connect("localhost","root","","anand");
$uname=$_POST["reg1"];
$pwd=$_POST["reg2"];
$cpwd=$_POST["cpwd"];
$mobile=$_POST["reg3"];
$gender=$_POST["gender"];
$email=$_POST["reg4"];
$dob=$_POST["reg5"];
$sql="select * from user where uname='$uname' and pwd='$pwd';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0)
{
	if($pwd==$cpwd)
	{
		$query="insert into user values('$uname','$pwd', '$cpwd', '$mobile','$gender','$email','$dob','2019-10-21 08:00:00')";
		mysqli_query($conn,$query);
		$result=mysqli_affected_rows($conn);
		if($result>0)
		{
			echo "<script> alert('REGISTERED SUCCESSFULLY'); window.location.href='1.html'; </script>";
		}
		else
		{
			//echo "<script> alert('Error in Loading.'); window.location.href='register.html'; </script>";
			echo mysqli_error($conn);
		}
	}
	else
	{
		echo "<script> alert('password mismatch'); history.back; </script>";
	}
}
else
{
	echo "<script> alert('USERNAME IS ALREADY EXISTS'); history.back(); </script>";
}
mysqli_close($conn);
?>
