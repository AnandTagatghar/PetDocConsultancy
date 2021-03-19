<?php
session_start();
$conn=mysqli_connect("localhost","root","","anand");
$uname=$_SESSION['uname'];
$sql="select * from pet where uname='$uname';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  $sql="DELETE FROM pet WHERE uname='$uname';";
  mysqli_query($conn,$sql);
  $result=mysqli_affected_rows($conn);
  if($result>0)
  {
    echo "<script> alert('YOUR NOTIFICATIONS ARE CLEARED.'); history.back(); </script>";
  }
  else
  {
    echo "<script> alert('YOUR NOTIFICATIONS ARE NOT CLEARED.'); history.back(); </script>";
  }
}
else
{
  echo "<script> alert('YOU HAVE NO NOTIFICATIONS TO CLEAR'); history.back(); </script>";
}
?>
