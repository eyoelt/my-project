<?php
session_start();
include("Connection.php");
?>
		<html>
		<head>
		<title>Donorappointment</title>
		<link rel="Stylesheet" type="text/css" href="setting.css">
		<link rel="stylesheet" href="stylesLogin.css">
		</head>
		<body>
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
		</div></td>
		<td width="300">
		<div style="width:600px;height: 600px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
		
		
<div class="loginBoxx">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:550px;margin-left:22px;">
<form action="" method="post">
<table border="0px" bgcolor="#fff9f9" width="500px">
<tr><td colspan="2"><h2 style="font-size:25px;text-align: center;">Make Appointment 
 <div style="float:right; margin-left:40px;"><a href="DonorPage.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
<tr><td>Donor ID:</td><td><input type="text" name="uid" placeholder="ID number" maxlength="10" required></td></tr>
<tr><td>First Name</td><td><input type="text" name="fname" id="fname" pattern="[a-zA-Z]+" required placeholder="fname"/></td></tr>
<tr><td>Last Name</td><td><input type="text" name="lname" id="lname" pattern="[a-zA-Z]+" required placeholder="lname"/></td></tr>
<tr><td>Sex</td><td><select name="dsex" required><option>Selectsex</option><option>Male</option><option>Female</option></select></td></tr>
<tr><td>Telephone</td><td> <input type="text" name="phone" placeholder='phone' pattern="[+0-9]*" required </td></tr>
<tr><td><?php if(isset($_GET['unbalanceddate'])) echo ">curent date nmust be less than apointment date ";?>
Appointment time: </td><td><input type="time" name="aptime" pattern="[time]" required="required" </td></tr>
<tr><td> Appointment date </td><td><input type="date" name="apadate" pattern="[date]" required="required"></td></tr>
<tr><td>Description:</td><td><textarea name="message" ROWs="5"COLs="33" placeholder="please write your description here !!!" required></textarea></td></tr>
<tr><td>&nbsp;</td><td><input type="Submit" name="submit"size="100" value="Apoint"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Reset" class="submit"size="100" value="Reset"/></td></tr>
</table></form></fieldset></div>

<?php
if(isset($_POST['submit']))
	{	
	$uid=$_POST['uid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dsex=$_POST['dsex'];
	$phone=$_POST['phone'];
	$aptime=$_POST['aptime'];
	$apadate=$_POST['apadate'];
	$Description=$_POST['message'];
	$status1="unread";//nurs
	$status2="unread";//doner
	$status3="no";//nurs
if($con)
	{
$sql="Insert into nursedescription values(' ','$bdid','$fname','$lname','$dsex','$phone','$aptime','$apadate','$Description')";
$inserted=mysql_query($sql);
if($inserted)
	echo "<div id=Success>You have Sent Description Successfully!!";
else	
	echo "<div id=error>You haven't Sent Description!!!".mysql_error();
	}
	else
	die("Connection Failed:".mysql);
}
?>
</div></td>
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
</body></html>