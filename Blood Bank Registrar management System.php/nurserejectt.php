	<?php
	session_start();
	include("Connection.php");
	?>
	<html>
	<head>
	<title>requestform</title>
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
	<?php
	$id=$_GET['id'];
	$sq=mysql_query("select * from appointment where appid='$id'");
	$ro=mysql_fetch_array($sq);
	$did=$ro['uid'];
	$query1=mysql_query("UPDATE appointment SET nursereject_status='yes' where appid='$id'");
	if ($query1)
	{
	?>
<div class="loginBoxx">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:400px;width: 550px;margin-left:35px;">
<form action="nursereject.php" method="post">
<table border="0px" bgcolor="#fff9f9" width="500px">
<tr><td colspan="2"><h3 style="font-size:20px;text-align: center;">Send Description for Appointment 
<div style="float:right; margin-left:40px;"></div></h3></td></tr>
	<tr><td>User ID:</td><td><input type="text" name="id"  value="<?php echo $uid;?>" readonly></td></tr>
	<tr><td></td><td><input type="hidden" name="uid"  value="<?php echo $did;?>" readonly></td></tr>
	<tr><td>Description:</td><td><textarea name="message" ROWs="5"COLs="33" placeholder="please write your description here !!!" required></textarea></td></tr>
<tr><td>&nbsp;</td><td><input type="Submit" name="submit"size="100" value="Send"/>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="Reset" class="submit"size="100" value="Reset"/></td></tr>
	</table></form></fieldset></div>
<?php
	}
	}
	else
	{
	header("location:Index.php");
	}
	?>
	</body>
	</html>