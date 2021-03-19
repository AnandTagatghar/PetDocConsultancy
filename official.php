<?php
session_start();
$conn=mysqli_connect("localhost","root","","anand");
$uname=$_POST['login1'];
$pwd=$_POST['login2'];
$_SESSION['uname']=$uname;
$sql="select * from users where uname='$uname' and pwd='$pwd';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
header("location:ofhome.php");
}
else
{
echo "<script> alert('INVALID USERNAME OR PASSWARD'); window.location.href='official.html'; </script>";
}
?>
