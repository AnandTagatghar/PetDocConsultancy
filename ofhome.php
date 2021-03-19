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
<title>officialhome</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.header {
	border-radius:12px;
	border:none;
	width:1385px;
	float:left;
	background-color:#aaa;
	text-align:center;
	padding:60px;
	font-size:52px;
	color:white;
}
.tab {
	border-radius:4px;
	font-size:20px;
	background-color:#666;
	border-top:15px solid white;
	color:white;
	padding:30px;
	width:1445px;
	float:left;
}
.tab:hover {
	color:white;
	text-shadow:1px 1px 2px white,0 0 25px blue,0 0 5px darkblue;
}
.article {
	border-radius:4px;
	float:left;
	border-top:15px solid white;
	text-align:center;
}
.article2 {
	border-radius:4px;
	float:left;
	border-left:15px solid white;
	width:1080;
	height:400;
	background-color:white;
	overflow:auto;
}
footer {
	border-radius:4px;
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
.aside {
	width:400px;
	float:left;
	height:400px;
	background-color:#ccc;
	border-radius:4px;
}
span {
	display:block;
	background-color:white;
}
.a1 {
	float:left;
	border-bottom:15px solid white;
	display:block;
	width:100%;
	text-decoration:none;
	padding:15px 15px;
	color:black;
}
.a1:hover {
	background-color:#ccc;
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
	<div style="margin-left:800px">
	<?php
	echo "welcome,",$uname;
	?>&nbsp;|&nbsp;
	<a href="aboutus.html" style="color:white;text-decoration:none">About Us</a>&nbsp;|&nbsp;
	<a href="#demo" style="color:white;text-decoration:none">Contact Us</a>&nbsp;|&nbsp;
	<a href="logout.php" style="color:white;text-decoration:none">logout</a>
	</div>
</div>
<div class="article">
	<div class="aside">
	<img src="vetdoc.jpg" width="100%" height=100%">
	</div>
	<div class="article2">
	<text style="font-size:30px">Appointment List</text>
	<?php
	$conn=mysqli_connect("localhost","root","","anand");
	$sql="select appdate,uname from pet where payment='yes';";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
	{
	$uname1=$row['uname'];
	$appdate=$row['appdate'];
	?>
	<span>
	<form action="ofhome1.php" method="post">
	<input type="submit" class="a1" name="uname1" value="<?php echo $appdate; ?>" ><br>
	</form>
	</span>
	<?php
	}
	?>
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
