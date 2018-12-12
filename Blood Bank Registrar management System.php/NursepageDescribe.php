<?php
include("Connection.php");
session_start();
?>
<html>
<head>
<title>Nurse</title>
<link rel="Stylesheet" type="text/css" href="setting.css">
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
</td></tr></table></div>
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
		<div style="width:630px;height: 600px; margin-left: 20px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
	<?php
	if(isset($_POST['submit']))
	{
	$uid=$_POST['uid'];		
	$Description=$_POST['message'];
	$status1="read";//nurs
	$status2="unread";//doner
	if($con)
	{
	$sql="Insert into nursedescription values(' ','$uid','$Description','$status1','$status2')";
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
<div style="margin-left:1%;
text-shadow: 2px Blue;">		
<img src="<?php echo $photo;?>" width="100" height="100" alt="image"style="float: left;"/>
<p style="color:#ffffff;margin-right:5px;font-weight: bolder;">User: <?php echo $uname;?> <br>You Login As:<?php echo $role;?></p>
</div><br>
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