<?php
session_start();
include("Connection.php");
?>
<html>
<head>
<title>requestform</title>
<link rel="Stylesheet" type="text/css" href="setting.css">
<link rel="stylesheet" href="stylesLogin.css">
<link rel="Stylesheet" type="text/css" href="Setting11.css">
</head><body>
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
		include("SeekerMenue.php");
		?>
		</div>
		</td>
		<td width="300">
		<div style="width:660px;height: 600px;
		border:solid 4px #dldbeg;
		overflow: auto;">
		
	<div class="loginBoxx">
	<fieldset style="border-radius: 25px;background-color: #e2e6fe;color:#147d98;height:480px;width:580px;margin-left:18px;">
	
<?php
//acept
$sql="select * from request WHERE uid='$uid' and Status='Yes' and Unread='yes'";
$query= mysql_query($sql,$con);
$count=mysql_num_rows($query);

//reject
$sql1="select * from request WHERE uid='$uid'  and Status!=' ' and Unread='no'";
$query1= mysql_query($sql1,$con);
$count1=mysql_num_rows($query1);

if($count>0)
{
$sql=mysql_query("update request set Status='seekerseenaccept' where uid='$uid' and Status='Yes' and Unread='yes' ");
echo "<br><br><center><h3>Successfull... You Can Come and Tak Your requested Blood!!!</h3></center>";
}
else if($count1>0)
{
	$row=mysql_fetch_array($query1);
	$re=$row['Status'];
	echo $re;
$sql=mysql_query("update request set Status='seekerseenreject',Unread='not' where uid='$uid' and Unread='no' ");
echo"<br><br><center><h3>Sorry!! There is not Sufficient blood in our stock...Please Try in an other Time!!!</h3></center>";
}
else
{
echo"<br><br><center><h3>There is not Response!!</h3></center>";
}
?>
</div>
</div>
</td><td width="150">
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