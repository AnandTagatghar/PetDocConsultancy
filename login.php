<?php
session_start();
$conn=mysqli_connect("localhost","root","","anand");
$uname=$_POST['login1'];
$pwd=$_POST['login2'];
$_SESSION['uname']=$uname;
$_SESSION['pwd']=$pwd;
$sql="select * from user where uname='$uname' and pwd='$pwd'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
 header("location:home.php");
}
else
{
  echo "<script> alert('INVALID USERNAME OR PASSWORD'); history.back(); </script>";
}
?>
