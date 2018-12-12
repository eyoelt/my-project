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

	<script type = "text/javascript" >
	function preventBack()
	{
	window.history.forward();
	} 
	setTimeout("preventBack()", 0); 
	window.onunload=function(){null};
	</script>
	<?php
	$tables = array();
	$query = mysql_query('SHOW TABLES',$con);
	while($row = mysql_fetch_row($query))
	{
	$tables[] = $row[0];
	}
	$result = "";
	foreach($tables as $table)
	{
	$query = mysql_query('SELECT * FROM '.$table,$con);
	$num_fields = mysql_num_fields($query);

	$result .= 'DROP TABLE IF EXISTS '.$table.';';
	$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table,$con));
	$result .= "\n\n".$row2[1].";\n\n";
	for ($i = 0; $i < $num_fields; $i++)
	{
	while($row = mysql_fetch_row($query))
	{
	$result .= 'INSERT INTO '.$table.' VALUES(';
	for($j=0; $j<$num_fields; $j++)
	{
	$row[$j] = addslashes($row[$j]);
	$row[$j] = str_replace("\n","\\n",$row[$j]);
	if(isset($row[$j]))
	{
	$result .= '"'.$row[$j].'"' ; 
	}
	else
	{ 
	$result .= '""';
	}
	if($j<($num_fields-1))
	{ 
	$result .= ',';
	}
	}
	$result .= ");\n";
	}
	}
	$result .="\n\n";
	}
	//Create Folder
	$folder = 'C:\wamp\www\BBRMS\Blood/';
	if (!is_dir($folder))
	mkdir($folder, 0777, true);
	chmod($folder, 0777);
	//$date = date('m-d-Y-h-m-s'); 
	$filename = $folder."backup"; 
	$handle = fopen($filename.'.sql','w+');
	fwrite($handle,$result);
	fclose($handle);
	?>
	<?php
	echo "<br><br><br><br><div id=success>Database BBMS Backed Up Successfully!!!</div><br>";
	echo "<div id=success>Path:$filename </div>";
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