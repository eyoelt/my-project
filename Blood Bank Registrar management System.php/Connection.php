<?php
$server="localhost";
$dbuser="root";
$dbpass="";
$dbname="bbms";
$con=mysql_connect($server,$dbuser,$dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES 'utf8'"); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
</html>