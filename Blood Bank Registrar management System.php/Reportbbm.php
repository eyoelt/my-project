	<?php
	session_start();
	include("Connection.php");
	?>
	<html>
	<head>
	<title>Recieverequest</title>
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
	<div style="text-align: center;">
	<?php
	include("Menu1.php");
	?>
	</div>
	</td></tr></table></div>
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
	<div style="width:640px;height: 600px;
	border:solid 4px #dldbeg;
	overflow: auto;">
	<div id="contentcenter">

	<?php
	$sexnumber=0;
	$male=0;
	$female=0;
	$totaluser=0;
	$active=0;
	$inactive=0;
	$total=0;
	?>
	<fieldset style="border-radius: 25px;background-color: #e2e6fe;color:#147d98;height:auto;width:500px;margin-left:23px;">
	<div id="customers">
	<?php
	if($con)
	{
	$sql="select * from user";
	$recordfound=mysql_query($sql,$con);
	if(mysql_affected_rows($con))
	{
	echo "<table border='1'style='border-colaps:colaps;'>";
	echo "<h2><center>The Total Number of the bank User's</center></h2><table border=1><tr><td>User_ID</td><td>First_Name</td><td>Last_Name</td><td>User Email</td><td>User Sex</td><td>User Age</td></tr>";
	while($row=mysql_fetch_assoc($recordfound))
	{
	echo "<tr><td>".$row['uid']."</td>
	<td>".$row['FName']."</td>
	<td>".$row['LName']."</td>
	<td>".$row['Uemail']."</td>
	<td>".$row['UesrSex']."</td>
	<td>".$row['Userage']."</td><tr>";
	$sexnumber++;
	$usex=$row["UesrSex"];
	if($usex=='Male')
	$male++;
	else
	$female++;
	$totaluser=$male+$female;
	}
	$sql1="select * from account ";
	$recordfound1=mysql_query($sql1,$con);
	while($row1=mysql_fetch_assoc($recordfound1))
	{
    $status=$row1['status'];
	if($status=='1')
	$active++;
	else
	$inactive++;
	$total=$active+$inactive;
	}
	echo"<tr> <td colspan=6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>";
	echo"<tr> <td colspan=6 style='text-align: center;font-weight: bold;color:green;'><b>Total Users</b></td></tr>";
	
	echo"<tr><td colspan=3><b>Total Users Based on Sex</b></td><td colspan=3><b>Total Users Based on Status</b></td></tr>";
	
	echo"<tr><td colspan=2>Male Users</td><td>$male</td> <td colspan=2><b>Active</b></td><td>$active</td</tr>";
	echo"<tr><td colspan=2>Female Users</td><td>$female</td> <td colspan=2><b>Inactive</b></td><td>$inactive</td></tr>";
	echo"<tr> <td colspan=2>Total Users</td><td>$totaluser</td> <td colspan=2><b>Total</b></td><td>$total</td></tr>";
	?>
	<?php
	echo "</table>";
	}
	else
	echo "<div id=error>Sorry No Record is Found!!</div>";
	}
	else
	echo"<div id=error>Sorry!! Connection is failed!!</div>";
	?>
	</div></fieldset></div></div>
	</td>
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