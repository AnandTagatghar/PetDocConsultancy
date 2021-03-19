<html>
<head>
	<?php session_start();
	$uname=$_SESSION['uname'];
	if($uname=='')
	{
	echo "<script language='javascript' type='text/javascript'>";
	echo "window.history.forward()";
	echo "</script>";
	}
	?>
<title>notifications</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.header {
	border:none;
	width:1385px;
	background-color:#aaa;
	text-align:center;
	padding:60px;
	font-size:52px;
	color:white;
}
.tab {
	font-size:20px;
	background-color:#666;
	border-top:15px solid white;
	color:white;
	padding:30px;
	width:1445px;
	float:left;
}
.tab2 {
	font-size:20px;
	background-color:#666;
	border-top:15px solid white;
	color:white;
	padding:30px;
	width:1445px;
	float:left;
}
a {
	color:white;
	text-decoration:none;
}
a:hover {
	color:blue;
}

.tab:hover {
	color:blue;
	text-shadow:1px 1px 2px white,0 0 25px blue,0 0 5px darkblue;
}
footer {
	float:left;
	background-color:#ccc;
	font-size:30px;
	padding:30px;
	color:red;
	width:1435px;
	border-top:15px solid white;
	text-align:center;
}
.fa {
	padding:10px;
	font-size:20px;
	width:30px;
	text-align:center;
	text-decoration:none;
	margin: 5px 2px;
	border-radius: 50%;
}
.fa:hover {
	opacity:0.7;
}
.fa-facebook {
	background:#3B5998;
	color:white;
}
.fa-twitter {
	background: #55ACEE;
	color:white;
}
.fa-instagram {
	background: #125688;
	color:white;
}
.article {
	float:left;
	width:100%;
	height:70%;
	background-color:#ccc;
	border-top:15px solid white;
	overflow:auto;
}
</style>
</head>
<body>
<div class="header">
	<text>PET DOC CONSULTENCY</text><br>
	<div style="margin-left:400px;border:1px solid white;width:600px">
	</div>
	<text style="font-size:32px">WELCOME TO PET DOC CONSULTENCY</text>
</div>
<div class="tab">
<text>DogLife.</text>
<span style="margin-left:700px">
<?php
echo "welcome,",$uname;
?>&nbsp;|&nbsp;
	<a  href="#demo">Contact</a>&nbsp;|&nbsp;
<?php echo date('l, F jS, Y'); ?>&nbsp;|&nbsp;
<a href='logout.php'>logout</a>&nbsp;&nbsp;
</span	>
</div>
<div class='tab2'>
	<a href='home.php' style="margin-left:1250px">back</a>
</div>
<div class='article'>
	<?php
	$conn=mysqli_connect("localhost","root","","anand");
	$sql="select uname,pettype,appdate,petname,prescription,confirm from pet where uname='$uname' and (confirm='yes' or confirm='no') order by reverse(appdate);";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==0)
	{
		echo "<text style='margin-top:15%;margin-left:35%;font-size:30px;position:absolute'><span>YOU HAVE NO NOTIFICATIONS.</span></text>";
	}
	else
	 {
	?>
	<input type="button" style="margin-left:1300px;margin-top:50px" value="CLEAR NOTIFICATIONS" onclick="location.href='clear.php'">
	<?php
	while($row=mysqli_fetch_array($result))
	{
	$uname=$row['uname'];
	$pettype=$row['pettype'];
	$appdate=$row['appdate'];
	$petname=$row['petname'];
	$prescription=$row['prescription'];
	$confirm=$row['confirm'];
	//}

	//if(mysqli_num_rows($result)>0)
	//{
 ?>
 <div style="margin-top:50px;text-align:center;font-size:30px"><text>
	 <?php
		 if($confirm=='yes')
		 {
			 echo 'Name: ',$uname,'<br>';
			 echo 'Appointment Date: ',$appdate,'<br>';
			 echo 'Pet Type: ',$pettype,'<br>';
			 echo 'Pet Name: ',$petname,'<br>';
			 echo 'Prescription: ',$prescription,'<br>';
			 echo '<br><br><br><br>';
			 echo "YOUR APPOINTMENT IS CONFIRMED<br>";
			 echo "<hr>";
		 }
		 else if($confirm=='no')
		 {
			 echo 'Name: ',$uname,'<br>';
			 echo 'Appointment Date: ',$appdate,'<br>';
			 echo 'Pet Type: ',$pettype,'<br>';
			 echo 'Pet Name: ',$petname,'<br>';
			 echo 'Prescription: ',$prescription,'<br>';
			 echo '<br><br><br><br>';
			 echo "YOU HAVE A MINOR PROBLEM, APPOINTMENT IS NOT REQUIRED<br>YOUR PRESCRIPTION IS ABOVE<br>";
			 echo "<hr>";
		 }
		 else
		 {
			 echo "YOU HAVE NO NOTIFICATIONS";
		 }
	 }
}
	?></text></div>
</div>
<footer id='demo'>
	<div style="float:left;background-color:#ccc;font-size:30px;color:red;width:600px">
	Contact Us:<div style="border:1px solid red;width:130px;margin-left:230px"></div>9123456789<br>petcare@gmail.com
	</div>
	<div style="float:left;border-left:1px solid red;height:130px;margin-left:147.5px"></div>
	<div style="margin-left:780px;color:red;width:600px">Follow US:
	<div style="border:1px solid red;margin-left:230px;width:130px"></div>
	<div style="margin-left:150px;text-align:left"><a href="#" class="fa fa-facebook"></a>petcare@gmail.com/fb</div>
	<div style="margin-left:150px;text-align:left"><a href="#" class="fa fa-twitter"></a>petcare@twitter.com/twitter</div>
	<div style="margin-left:150px;text-align:left"><a href="#" class="fa fa-instagram"></a>petcare@gmail.com/instagram</div>
	</div>
</footer>
</body>
</html>
