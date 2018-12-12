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
	include("Nursemenue.php");
	?>
		</div></td>
		<td width="300">
		<div style="width:600px;height: 600px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
<div class="loginBoxx">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:560px;margin-left:22px;">
<form action="" method="post">
<table border="0px" bgcolor="#fff9f9" width="500px">
<tr><td colspan="2"><h2 style="font-size:25px;text-align: center;">Register Questionaries
 <div style="float:right; margin-left:40px;"><a href="DonorPage.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
<tr><td>User ID:</td><td><input type="text" name="uid" placeholder="User ID" required></td></tr>
<tr><td>User Name:</td><td><input type="text" name="uname" placeholder="User name" required></td></tr>
<tr><td>Quetionaries:</td><td><textarea name="Quetion" ROWs="5"COLs="33" placeholder="please write your Quetionaries here !!!" required></textarea></td></tr>
<tr><td>Option1:</td><td><input type="text" name="Option1" readonly value="YES"  required/></td></tr>
<tr><td>Option2:</td><td><input type="text" name="Option2" readonly value="NO" required/></td></tr>
<tr><td>Corect Option:</td><td><input type="text" name="correct" readonly value="YES" required  /></td></tr>
<tr><td>Prepaired Date:</td><td><input type="text" name="padte" readonly value="<?php echo date('d-M-Y');?>"  /></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="Submit" name="create"size="100" value="Create"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Reset" class="submit"size="100" value="Cancel"/></td></tr>
</table></form></fieldset></div>

<?php
if(isset($_POST['create']))
	{
	$uid=$_POST['uid'];	
	$uname=$_POST['uname'];
	$Quetion=$_POST['Quetion'];
	$Option1=$_POST['Option1'];
	$Option2=$_POST['Option2'];
	$correct=$_POST['correct'];
	$padte=$_POST['padte'];
	$unread="yes";
if($con)
	{
$sql="Insert into Quetionaries values(' ','$uid','$uname','$Quetion','$Option1','$Option2','$correct','$padte')";
$inserted=mysql_query($sql);
if($inserted)
	echo "<div id=Success>You have Created Quetionaries Successfully!!";
else	
	echo "<div id=error>You haven't Created Quetionaries!!!".mysql_error();
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