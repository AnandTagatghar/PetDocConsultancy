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
<title>petdetails</title>
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

.{
	border:2px solid lightblue;
	margin-top:100px;
	width:1520px;
	position:absolue;
}
.b {
	margin-top:20px;
	margin-left:650px;
	color:white;
	text-shadow:1px 1px 2px black,0 0 25px blue,0 0 5px darkblue;
	font-size:52px;
}
.b:hover{
	text-shadow:1px 1px 2px black,0 0 25px red,0 0 5px darkblue;
}
.text {
	float:left;
	margin-top:60px;
	margin-left:100px;
	font-size:30px;
}
input {
	background-color:transparent;
	box-shadow:1px 1px black,0 0 25px lightblue,0 0 5px blue;
}
input:hover {
 	background-color:#ddd;
}
textarea {
	margin-left:120px;
	box-shadow:1px 1px black,0 0 25px lightblue,0 0 5px blue;
}
textarea:hover {
	background-color:#ddd;
}
.ig {
	float:left;
	margin-top:100px;
	position:absolute;
	margin-left:800px;
	transform:rotate(10deg);
	padding:15px 15px;
	box-shadow:1px 1px black,0 0 50px lightblue,0 0 15px darkblue;
}
img:hover {
	animation:shake 0.5s;
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
. {
	position:absolue;
	margin-top:80px;
	margin-left:1000px;
}
a {
	text-decoration:none;
	color:white;
}
a:hover {
	text-shadow:1px 1px 2px black,0 0 25px blue, 0 0 5px darkblue;
}
.article {
	float:left;
	border-top:15px solid white;
	width:1500px;
	height:800px;
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
	<text>DogLife.</text>
	<span style="margin-left:800px">
		<a  href="#demo">Contact</a>&nbsp;|&nbsp;
		<?php echo date('l, F jS, Y'); ?>&nbsp;|&nbsp;
		<a href='logout.php'>logout</a>&nbsp;&nbsp;
	</span>
</div>
<div class="tab2">
	<a href='home.php' style="margin-left:1150px">Home</a>&nbsp;|&nbsp;
	<a href='home.php' >back</a>
</div>
<?php
$appdate=$_SESSION['appdate'];
$appdate1=$_SESSION['appdate1'];
$conn=mysqli_connect("localhost","root","","anand");
$sql="select petname,petage,breed,petsex,reason from pet where uname='$uname' and appdate='$appdate $appdate1';";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	$petname=$row['petname'];
	$petage=$row['petage'];
	$breed=$row['breed'];
	$petsex=$row['petsex'];
	$reason=$row['reason'];
}
?>
<div class="article">
	<div class="b">Pet Details</div>
		<div class='a'>
		</div>
		<div class="text">
			<form action="petdetails2.php" method="post">
			<text>Pet Name:</text><input type="text"  size='40' name="petname" pattern="[A-Za-z0-9]{6,20}" title="please fill the name with the size of 6 or more letters and less than 20 letters" required><br><br>
			<text>Pet Age:</text>&nbsp;<input type="text"  name="petage" style="margin-left:15px" size='40' pattern="[0-9]{1,2}" title="please fill the age of the pet" required><br><br>
			<text>Breed:</text>&nbsp;<input type="text"  name="breed" style="margin-left:35px" size='40' pattern="[A-Za-z]{0,30}" title="please fill the breed of the pet" required><br><br>
			<text>Pet Sex:&nbsp;</text>
			<input type="radio" name="petsex"  value="male"checked>Male&nbsp;&nbsp;
			<input type="radio" name="petsex"  value="female">Female&nbsp;&nbsp;
			<input type="radio" name="petsex"  value="other">Other<br><br>
			<text>Reason:</text><br><textarea name="reason"  rows='4' cols='40' pattern="[A-Za-z0-9]{1,20000]" required></textarea><br><br><br>
			<input type="submit" name="pet" style="margin-left:50px;padding:15px" value="submit">
			</form>
		</div>
		<div class="ig">
			<img src="petdetails.jpg" width='400' height='320'>
		</div>
	</div>
</div>
<footer id='demo'>
	<div style="float:left;background-color:#ccc;font-size:30px;color:red;width:600px">
	Contact Us:<div style="border:1px solid red;width:130px;margin-left:230px"></div>9123456789<br>petcaree@gmail.com
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
