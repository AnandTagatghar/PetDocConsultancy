<html>
<head>
<title>payment.com</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<mta name="viewport" content="wdth=device-width, initial-scale=1">
<style>
.header {
	border:none;
	width: 1500px;
	background-color:#aaa;
	text-align:center;
	padding:60px;
	font-size:52px;
	color:white;
}
.tab1 {
	font-size:20px;
	background-color:#666;
	border-top:15px solid white;
	color:white;
	padding:30px;
	width:100%;
	float:left;
}
.tab2 {
	font-size:20px;
	background-color:#666;
	border-top:15px solid white;
	color:white;
	padding:30px;
	width:100%;
	float:left;
}
a {
	text-decoration:none;
	color:white;
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
	width:1510px;
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

.a {
	float:left;
	width: 100%;
	font-size:50px;
	margin-left:650px;
	margin-top:50px;
	color:silver;
	text-shadow:1px 1px 2px black,0 0 30px red,0 0 5px darkred;
}
.a:hover {
	color:white;
	text-shadow:1px 1px 2px black,0 0 30px blue,0 0 5px darkblue;
}
.b {
	margin-top:120px;
	margin-left:120px;
	border:10px outset;
	width:400;
	height:500;
	position:absolue;
	box-shadow:1px 1px black,0 0 25px blue,0 0 5px darkblue;
}
.b:hover {
	box-shadow:1px 1px black,0 0 25px red,0 0 5px darkred;
}
.c {
	margin-top:30px;
	margin-left:10px;
	position:absolue;
	font-size:20px;
}
.article {
	width:100%;
	background-color:#ddd;
	float:left;
	border-top:15px solid white;
}
.e:hover {
	color:black;
	text-shadow:1px 1px 2px black,0 0 25px blue,0 0 5px darkblue;
}
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

.tab {
  margin-top:50px;
  float: left;
  border-top: 15px solid white;
  background-color: #f1f1f1;
  width: 30%;
  height: 70%;
}

.tab button {

  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

.tab button:hover {
  background-color: #ddd;
}

.tab button.active {
  background-color: #ccc;
}

.tabcontent {

  margin-top:50px;
  float: left;
  padding: 0px 12px;
  border-top: 15px solid white;
  width: 70%;
  border-left: none;
  height: 70%;
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
<div class="tab1">
	<text>DogLife.</text>
	<span style="margin-left:550px">
		<?php
		session_start();
		$uname=$_SESSION['uname'];
		echo "welcome,",$uname;
		?>&nbsp;|&nbsp;
		<a  href="#demo">Contact</a>&nbsp;|&nbsp;
		<?php echo date('l, F jS, Y'); ?>&nbsp;|&nbsp;
		<a href='1.html'>logout</a>&nbsp;&nbsp;
	</span>
</div>
<div class="tab2">
	<a href='home.php' style="margin-left:73%">Home</a>&nbsp;|&nbsp;
	<a href='petdetails1.php'>back</a>
</div>
<?php
$conn=mysqli_connect("localhost","root","","anand");
$sql="select nameoncard,cardnumber,expirydate,cvv,cardnumber1,expirydate1,cvv1,mobilenumber,bank from pet where uname='$uname';";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
$nameoncard=$row['nameoncard'];
$cardnumber=$row['cardnumber'];
$expirydate=$row['expirydate'];
$cvv=$row['cvv'];
$cardnumber1=$row['cardnumber1'];
$expirydate1=$row['expirydate1'];
$cvv1=$row['cvv1'];
$mobilenumber=$row['mobilenumber'];
$bank=$row['bank'];
}
?>
<div class='article'>
	<div class='a'>Payment</div>
		<div>
			<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'debitcard')" id="defaultOpen">Debit Card</button>
  <button class="tablinks" onclick="openCity(event, 'creditcard')">Credit Card</button>
  <button class="tablinks" onclick="openCity(event, 'netbanking')">Net Banking</button>
			</div>

		<div id="debitcard" class="tabcontent">
	<form action="payment1.php" method="post">
  	<div><span style="margin-top:20px;margin-left:90px;font-size:20px;text-shadow:1px 1px 2px black,0 0 25px blue,0 0 5px darkblue" >Debit Card</span><br><br><br>
	<b>Name on Card</b><br><input name="nameoncard" pattern="[A-Za-z]{6,20}" value="<?php echo $nameoncard; ?>" title="name should be minimum of 6 size and maximum of 20 size" style="padding:15px 25px" type="text" placeholder="example" size='40' required><br><br>
	<b>Card Number</b><br><input name="cardnumber" pattern="[0-9]{16}" value="<?php echo $cardnumber; ?>" title="CHECK YOUR CARD NUMBER" style="padding:15px 25px" type='text' placeholder="Enter Card Number*" size='40' required><br><br>
	<b>Expiry Date</b><text style="margin-left:120px"><b>CVV</b></text><br>
	<input name="expirydate" pattern="[0-9]{2}/[0-9]{4}" value="<?php echo $expirydate; ?>" title="CHECK YOUR EXPIRY DATE" style="padding:15px 25px" type='text' size='15' placeholder="MM/YYYY*" required>&nbsp;&nbsp;&nbsp;
	<input name="cvv" pattern="[0-9]{3}" value="<?php echo $cvv; ?>" title="CHECK YOUR CVV NUMBER" type='text' size='15' style="padding:15px 25px" placeholder="CVV*" required><br>
	</div><br><br>
	<input style="padding:15px 25px;positon:absolute;margin-left:66px" type='submit' value="pay">
	</form>
		</div>
<div id="creditcard" class="tabcontent">
	<form action="payment2.php" method="post">
  	<div><span style="margin-top:20px;margin-left:90px;font-size:20px;text-shadow:1px 1px 2px black,0 0 25px blue,0 0 5px darkblue">Credit Card</span><br><br><br>
	<b>Card Number</b><br><input name="cardnumber" value="<?php echo $cardnumber1; ?>" pattern="[0-9]{16}" title="CHECK YOUR CARD NUMBER" style="padding:15px 25px" type='text' placeholder="Enter Card Number*" size='40' required><br><br>
	<b>Expiry Date</b><text style="margin-left:120px"><b>CVV</b></text><br>
	<input name="expirydate" value="<?php echo $expirydate1; ?>" pattern="[0-9]{2}/[0-9]{4}" title="CHECK YOUR EXPIRY DATE" style="padding:15px 25px" type="text" size='15' placeholder="MM/YYYY*" required>&nbsp;&nbsp;&nbsp;
	<input name="cvv" value="<?php echo $cvv1; ?>" pattern="[0-9]{3}" title="CHECK YOUR CVV NUMBER" type='text' size='15' style="padding:15px 25px" placeholder="CVV*" required><br>
	</div><br><br>
	<input style="padding:15px 25px;positon:absolute;margin-left:66px" type='submit' name="cc" value="pay">
	</form>
</div>

<div id="netbanking" class="tabcontent">
	<form action="payment3.php" method="post">
  	<div><span style="margin-top:20px;margin-left:90px;font-size:20px;text-shadow:1px 1px 2px black,0 0 25px blue,0 0 5px darkblue">Net Banking</span><br><br>
	<b>Mobile Number<br><input style="padding:15px 25px" value="<?php echo $mobilenumber; ?>" type='text' name="mobilenumber" placeholder="mobile*" size='40' pattern="[0-9]{10}" required><br><br>
	<b>Bank<br><input style="padding:15px 25px" type="text" value="<?php echo $bank; ?>" name="bank" placeholder="SBI*" size='40' pattern="[A-Za-z]{0,50}" required><br><br>
	</div><br>
	<input type='submit' style="padding:15px 25px;positon:absolute;margin-left:66px" value="pay">
	</form>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>
</div>
</div>
<footer id="demo">
	<div style="float:left;background-color:#ccc;font-size:30px;color:red;width:600px">
	Contact Us:<div style="border:1px solid red;width:130px;margin-left:230px"></div>9123456789<br>example@gmail.com
	</div>
	<div style="float:left;border-left:1px solid red;height:130px;margin-left:147.5px"></div>
	<div style="margin-left:780px;color:red;width:600px">Follow US:
	<div style="border:1px solid red;margin-left:230px;width:130px"></div>
	<div style="margin-left:150px;text-align:left"><a href="#" class="fa fa-facebook"></a>example@gmail.com/fb</div>
	<div style="margin-left:150px;text-align:left"><a href="#" class="fa fa-twitter"></a>example@twitter.com/twitter</div>
	<div style="margin-left:150px;text-align:left"><a href="#" class="fa fa-instagram"></a>example@gmail.com/insta</div>
	</div>
</footer>
</body>
</html>
