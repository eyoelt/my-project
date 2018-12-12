<?php
session_start();
include("Connection.php");
?>
<html>
<head>
<title>DateencoderRegisterBlood</title>
<link rel="Stylesheet" type="text/css" href="setting.css">
<link rel="stylesheet" href="stylesLogin.css">
<link rel="Stylesheet" type="text/css" href="Setting11.css">
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
?></div>

		<?php
		include("Labtecmenu.php");
		?>
		</div>
		</td>
		<td width="300">
		<div style="width:660px;height: 600px;
		border:solid 4px #dldbeg;
		overflow: auto;">

		<div id="contentcenter">
		
			
<?php
$id=$_GET['id'];
$query1=mysql_query("UPDATE blood SET status='NO' where bid='$id'");

if($query1)
{
	$query2=mysql_query("UPDATE request SET Status='accepted' where bid='$id'");
$x='<script type="text/javascript">alert("Distributed succesfully!!!");
window.location=\'responsefrommanager.php\';</script>';
echo $x;
}
?>

</div></div>
		</div></td>
		<td width="150">
		<div id="sideright">
		<?php
		include("Calander.php");
		?>
		</div></td>
		</tr></table>
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