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
		<br/>	
<fieldset style="border-radius: 25px;background-color: #e2e6fe;color:#147d98;height:480px;width:500px;">
<?php
if($con)
 {
 	
$recordfound=mysql_query("select * from blood where status='YES'");
if(mysql_affected_rows($con))
{	
	echo "<table border='1'>";
echo "<h2 align='center'>The Blood Details Are</h2><table border=1><tr><th>BloodID</th><th>DonorID</th><th>BloodGroup</th><th>Pack No</th><th>Register_Date</th><th>Expaired_Date</th><th>Quantity</th><th>Status</th> <th>Send</th></tr>";
	while($row=mysql_fetch_assoc($recordfound))
	{
echo "<tr>
<td>".$row['bid']."</td>
<td>".$row['bdid']."</td>
<td>".$row['bg']."</td>
<td>".$row['packno']."</td>
<td>".$row['rdate']."</td>
<td>".$row['edate']."</td>
<td>".$row['bstatus']."</td>
<td>".$row['bqty']."</td>";

		?>
<td><?php echo '<a  href="AcceptedResponse3.php?id='.$row['bid'].'">send</a>';?></td>
	<?php
	}
	echo "</tr></table>";
	}
     else
    echo "<div id=error>Sorry No Record is Found!!</div>";
   }
   else
   echo"<div id=error>Sorry!!Connection is failed!!</div>";
?>

</div>
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