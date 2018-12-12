<?php
session_start();
include("Connection.php");
?>
<html><head><title>SeekerPage</title>
	<link rel="Stylesheet" type="text/css" href="setting.css">
	<link rel="stylesheet" href="stylesLogin.css">
	</head><body>
<?php
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
{
$photo=$_SESSION['Photo'];
$uid=$_SESSION['uid'];
$uname=$_SESSION['username'];
$role=$_SESSION['role'];
?>
<div id="container">
		<table><tr><td>
		<img src="Images/logoo.jpg"width="1065"height="135">
		</td></tr></table>
		<div id="navigationmenu">
		<table width="1040"><tr><td>
		<?php
		include("Menu1.php");
		?>
		</td></tr></table>
		</div>
<div id="content">
		<table border="0" width="1000" height="500"><tr><td width="150">
		<div id="sideleft">
<div style="text-align: center;">
<?php
include("Time.php");
?>
</div>
	<?php
	include("SidelinkDonor.php");
	?>
		</div>
		</td>
		<td width="300">
		<div style="width:640px;height: 600px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
	<br/>	
				
<div class="loginBoxx">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:550px;margin-left:10px;width:595px;">
<form action="Questionaries.php" method="post">
<table style="background-color: #e2e6fe;color: #fffbfb; width:570px;" height="270" border="0"><caption><marquee behavior="right" direction="right"  bgcolor="#147d98" scrollamount="1" height="20">TO SAVE LIFE DONATE BLOOD!!</marquee></caption><td>	
<table style="background-color: #e2e6fe;color: #0d0000;">
<h2 style="color:#1c0000;text-align:cente;font-size: 23px;">
<img src="Images/success.jpg" height="30px"width="40px"/>
	Well Come to Web Based Blood Bank Management System For Debremarkos Town<br><br>
	Dear Customer:-<br>
	To save life Your Participation is mandatory!!<br>
	Are you Eligable To donate blood <br>
	Ok well!! <br>
	<img src="Images/sucess.jpg" height="30px"width="40px"/>
	You must give correct response to donate blood<br>
	The Next Page Contains more than 15 quetionaries Chek The correct response!!
	<br>
	For your Participation we have Thanks!
	<br> with Best wish...
</h2>
<br><br>
<p style="text-align:right;">Debremarkos blood Bank Services</p>
<br>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbs;
<input type="submit" value="Next" name="submit">
</table>
</form></fieldset></div>

</td>
<td width="150">
<div id="sideright">
<?php
include("Calander.php");
?>
</div></td></tr></table>
</div>

		<table width="1000"><tr><td>
		<?php
		include("footer.php");
		?>
		</td></tr></table>
		</div>
<?php
}
else
{
header("location:Index.php");
}
?>
</body>
</html>