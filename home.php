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
<title>homepage</title>
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
a:hover {
	opacity:0.7:
}
.m {
	background-color:#ccc;
	border-left:15px solid white;
	font-size:32px;
	float:left;
	width:880px;
	height:640px;
	border-top:15px solid white;

}
a {
	text-decoration:none;
	color:white;
}
a:hover {
	text-shadow:1px 1px 2px white,0 0 25px blue,0 0 5px darkblue;
}
.e{
	float:left;
	margin-top:80px;
	margin-left:330px;
	transform:rotate(10deg);
	border:15px solid white;
}
.f {
	float:left;
	margin-top:250px;
	margin-left:240px;
	position:absolute;
	transform:rotate(-10deg);
	border:15px solid white;
}
img:hover {
	animation: shake 0.5s;
	animation-iteration-count: infinite;
}
@keyframes shake {
	 0% { transform: translate(1px, 1px) rotate(0deg); }
  	 10% { transform: translate(-1px, -2px) rotate(-1deg); }
  	 20% { transform: translate(-3px, 0px) rotate(1deg); }
  	 30% { transform: translate(3px, 2px) rotate(0deg); }
  	 40% { transform: translate(1px, -1px) rotate(1deg); }
 	 50% { transform: translate(-1px, 2px) rotate(-1deg); }
  	 60% { transform: translate(-3px, 1px) rotate(0deg); }
 	 70% { transform: translate(3px, 1px) rotate(-1deg); }
  	 80% { transform: translate(-1px, -1px) rotate(1deg); }
  	 90% { transform: translate(1px, 2px) rotate(0deg); }
  	 100% { transform: translate(1px, -2px) rotate(-1deg); }
}
.g {
	background-color:#f1f1f1;
	border-top:15px solid white;
	float:left;
	width:600px;
	height:640px;

}
.j {
	padding:12px 16px;
	position:absolue;
	margin-top:10px;
	margin-left:30px;
	background-color:transparent;
	border:2px solid black;
	color:black;
}
.j:hover {
	color:#ccc;
	border:2px solid #ccc;
}
a:hover {
	color:red;
}
.badge {
	top:-10px;
	right:-10px;
	padding:5px 10px;
	border-radius:50%;
	background-color:green;
	color:white;
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
echo "welcome ",$uname;
?>&nbsp;|&nbsp;
	<a  href="#demo">Contact</a>&nbsp;|&nbsp;
<?php echo date('l, F jS, Y'); ?>&nbsp;|&nbsp;
<a href='logout.php'>logout</a>&nbsp;&nbsp;
</span	>
</div>
<div class="tab2">
	<?php
	$count=0;
	$conn=mysqli_connect("localhost","root","","anand");
	$sql="select uname,pettype,appdate,petname,prescription,confirm from pet where uname='$uname' and (confirm='yes' or confirm='no') order by appdate;";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
	{
	$confirm=$row['confirm'];
	$count = $count + 1;
	}
?>
	<a href="notification.php" class="fa fa-bell" style="margin-left:1200px">Notification<sup><?php
	if($count>0)
	{
		echo $count;
	}
	else
	{
	echo " ";
	}
?></sup>
</a>
</div>
<div class="g">
	<form action="petdetails.php" method="post">
	<div style="margin-top:80px;margin-left:70px">
	<text style="margin-left:30px;font-size:30px">Pet Type:</text><br><br>
	<select name="pettype" style="margin-left:30px;background-color:transparent;border:none;border-bottom:1px solid black;width:40%" required>
		<option ></option>
		<option  value="dog">--Dog--</option>
		<option value="cat">--Cat--</option>
		<option value="cow">--cow--</option>
		<option value="buffalow">--Buffalow--</option>
		<option value="sheep">--sheep--</option>
		<option value="horse">--Horse--</option>
		<option value="pig">--Pig--</option>
		<option value="rabbit">--Rabbit--</option>
	</select><br><br><br>
	<text style="margin-left:30px;font-size:30px">Appointment Date:</text><br><br>
	<?php date_default_timezone_set('Asia/Calcutta');	 $date=date("Y-m-d"); ?>
	<input name="appdate"  required min="<?php echo $date; ?>" value="<?php echo $date; ?>" type="date" style="margin-left:30px;background-color:transparent;border:none;border-bottom:1px solid black;width:40%">
	<br><br><br>
	<text style="margin-left:30px;font-size:30px">Appointment Time:<br></text><br>
	<select type='time' name="appdate1" style="margin-left:30px;background-color:transparent;border:none;border-bottom:1px solid black;width:40%" required>
		<option></option>
		<option value="09:00:00">09:00:00 AM</option>
		<option value="10:00:00">10:00:00 AM</option>
		<option value="11:00:00">11:00:00 AM</option>
		<option value="12:00:00">12:00:00 PM</option>
		<option value="14:00:00">02:00:00 PM</option>
		<option value="15:00:00">03:00:00 PM</option>
		<option value="16:00:00">04:00:00 PM</option>
	</select><br><br>
	<br><input class="j" style="margin-left:50px" type="submit" value="submit">
	</form>
	</div>
</div>
<div class="m">
	<div class="e">
		<img src="home1.jpg" width="250px" height="400px">
	</div>
	<div class="f">
		<img src="home3.jpg" width="150px" height="300px">
	</div>
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
