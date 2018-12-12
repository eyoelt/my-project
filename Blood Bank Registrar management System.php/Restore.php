	<?php
	session_start();
	include("Connection.php");
	?>		
	<html>
	<head>
	<title>backup database </title>
	<link rel="Stylesheet" type="text/css" href="setting.css">
	<link rel="stylesheet" href="stylesLogin.css">
	<meta name="description" content="free website template" />
	<meta name="keywords" content="enter your keywords here" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/image_slide.js"></script>
	<script type="text/javascript" src="../css/javascriptdate.js"></script>
	<style type="text/css">
	.style1 
	{
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-size: medium;
	}
	.fieldset
	{
	width: 500px;
	text-align: left;
	margin-left: 250px;
	margin-top: 20px;
	height: auto;
	}
	</style>
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
	include("LeftSideMenu.php");
	?>
	</div>
	</td>
	<td width="300">
	<div style="width:630px;height: 600px;
	border:solid 4px #dldbeg;
	overflow: auto;">
	<div id="contentcenter">	

	<?php
	function restoreDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $filePath)
	{
	// Connect & select the database
	$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
	// Temporary variable, used to store current query
	$templine = '';
	// Read in entire file
	$lines = file($filePath);
	$error = '';
	// Loop through each line
	foreach ($lines as $line){
	// Skip it if it's a comment
	if(substr($line, 0, 2) == '--' || $line == ''){
	continue;
	}
	// Add this line to the current segment
	$templine .= $line;
	// If it has a semicolon at the end, it's the end of the query
	if (substr(trim($line), -1, 1) == ';'){
	// Perform the query
	if(!$db->query($templine)){
	$error .= 'Error performing query "<b>' . $templine . '</b>": ' . $db->error . '<br /><br />';
	}
	// Reset temp variable to empty
	$templine = '';
	}
	}
	return !empty($error)?$error:true;
	}	
	?>

	<?php
	$domain="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="bbms";
	$x=0;
	mysql_connect($domain,$dbuser,$dbpass) or die(mysql_error());
	if(mysql_select_db($dbname))
	$x=1;
	else
	$x=2;
	if($x==2)
	{	
	mysql_query("create database bbms") or die(mysql_error());
	echo "<br><div id=success>Your Database is Successfully Created!!</div>";
	}else if($x==1)
	{ 
	$output = "C:\wamp\www\BBRMS\Blood\backup.sql";
	$filePath  = 'C:\wamp\www\BBRMS\Blood\backup.sql';
	$restore=restoreDatabaseTables($domain, $dbuser, $dbpass, $dbname, $filePath);
	if($restore)
	echo"<br><br><br><div id=success>Database is Successfully  Restored!!!</div>";
	else
	echo"<br><div id=error>Database Is not Successfully Is Restore </div>";
	}
	//$output = "D:/restore/test.sql";
	//exec("D:/xampp/mysql/bin/mysql --opt -h $dbhost -u $dbuser -p $dbpass $dbname < $output");
	//echo "Restore complete!";
	?>

	</div>
	</div></td>
	<td width="150">
	<div id="sideright">
	<div style="margin-left:0%;
text-shadow: 2px Blue;">		
<img src="<?php echo $photo;?>" width="90" height="100" alt="image"style="float: left;"/>
<p style="color:#ffffff;margin-right:1px;font-weight: bolder;">User: <?php echo $uname;?> <br>You Login As:<?php echo $role;?></p>
</div><br>
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