<?php
session_start();
include("Connection.php");
?>
		<html>
		<head>
		<title>Donorappointment</title>
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
?>
</div>
	<?php
	include("SidelinkDonor.php");
	?>
		</div></td>
		<td width="300">
		<div style="width:640px;height: 600px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
<div class="loginBoxx">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:550px;width:620px;">
<div id=customers>
	<?php
$sql=mysql_query("select*from appointment where nurse_status='read' and (doner_status='unread' or doner_status='read') and uid='$uid'",$con);
	$count=mysql_num_rows($sql);
	$sq=mysql_query("select*from nursedescription where nurse_status='read' and doner_status='unread'  and uid='$uid'",$con);
	$count1=mysql_num_rows($sql);	
	if($count>0)
	{
		$r=mysql_fetch_array($sql);
		$at=$r['aptime'];
		$ad=$r['apdate'];
		?>
		<h2 align="center">
		<?php
		echo $at.'<br>';
		echo $ad.'<br>';?>
		</h2>
		<?php
	$sql=mysql_query("update appointment set doner_status='read' where uid='$uid'");
	?>
	<h2 align="center">
	Ok!! Dear Customer You Can Came And Donate Blood Freely 
	<br> Thank you for your participation!!!</h2>
	<?php
	}
			if($count1>0)
			{
			$sql=mysql_query("update appointment set nursereject_status='donerseereject' where uid='$uid'");
			if($con)
			{
			$sql="select * from nursedescription where uid='$uid' and (doner_status='unread' or doner_status='read')";
			$recordfound=mysql_query($sql,$con);
			if(mysql_affected_rows($con))
			{
			echo "<table border='1'>";
			echo "<h2><center>Descriptions From Nurse</center></h2><table border=1><tr><td>Appnmt ID</td><td>User ID</td><td>Description</td></tr>";
			while($row=mysql_fetch_assoc($recordfound))
			{
			echo "<tr><td>".$row['appid']."</td><td>".$row['uid']."</td><td>".$row['description']."</td></tr>";
			}
			echo "</table>";
			}
			
			}
			else
			echo"<div id=error>Sorry!!Connection is failed!!</div>";
$sql=mysql_query("update nursedescription set doner_status='read' where uid='$uid'");

	}
	else
			echo "<div id=error>Sorry!!! There is no Sent Response!!</div>";
	?>
</div></fieldset></div>
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