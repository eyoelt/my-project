<?php
include("Connection.php");
?>
<html>
<head>
<title>requestform</title>
<link rel="Stylesheet" type="text/css" href="setting.css">
<link rel="stylesheet" href="stylesLogin.css">
		</head>
		<body>
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
		
		<div id="sideleft">
<div style="text-align: center;">
<?php
include("Time.php");
?>
</div
		<?php
	include("Nursemenue.php");
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
$query1=mysql_query("UPDATE appointment SET nurse_status='read' where appid='$id'");
if ($query1)
{
echo "<div id='success'>Accepted!!!</div>";
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
</body>
</html>