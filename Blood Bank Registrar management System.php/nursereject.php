	<?php
	session_start();
	include("Connection.php");
	?>
	<html>
	<head>
	<title>Donorappointment</title>
	<link rel="Stylesheet" type="text/css" href="setting.css">
	<link rel="stylesheet" href="stylesLogin.css">
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="src/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
	$('a[rel*=facebox]').facebox({
	loadingImage : 'src/loading.gif',
	closeImage   : 'src/closelabel.png'
	})
	})
	</script> 
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
	</div>
	</td>
	<td width="300">
	<div style="width:625px;height: 600px;
	border:solid 4px #dldbeg;
	overflow: auto;">
	<div id="contentcenter">
	<div class="loginBoxx">	
	<fieldset style="border-radius: 25px;background-color: #e2e6fe;color:#147d98;height:480px;width:580px;margin-left:10;">	
	<div id="customers">
	<?php
	if(isset($_POST['submit']))
	{
	$uid=$_POST['uid'];		
	$Description=$_POST['message'];
	$status1="unread";//nurs
	$status2="unread";//doner
	if($con)
	{
	$sql="Insert into nursedescription values(' ','$uid','$Description','$status1','$status2')";
	$inserted=mysql_query($sql);
	if($inserted)
	echo "<div id=Success>You have Sent Description Successfully!!</div>";
	else	
	echo "<div id=error>You haven't Sent Description!!!</div>".mysql_error();
	}
	else
	die("Connection Failed:".mysql);
	}
	?>
	</div>
	</fieldset>
	</div></div></div>
	</td>
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
	</body></html