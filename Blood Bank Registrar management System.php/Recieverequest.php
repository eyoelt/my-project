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
	<div style="text-align: center;">
	<?php
	include("Time.php");
	?>
	</div>
	<?php
	include("BBMenu.php");
	?>
	</div>
	</td>
	<td width="300">
	<div style="width:635px;height: 600px;
	border:solid 4px #dldbeg;
	overflow: auto;">

	<div id="contentcenter">
	<br/>	
	<fieldset style="border-radius: 25px;background-color: #e2e6fe;color:#147d98;height:480px;width:620px;">
	<div id="customers">
	<?php
	if($con)
	{
	$sql="select * from request WHERE Unread='no' and Status=' '";
	$recordfound=mysql_query($sql,$con);
	if(mysql_affected_rows($con))
	{
	echo "<table border='1'>";
	echo "<h2 align='center'>Request from Seeker's</h2><table border=1><tr><th>Request ID</th><th>Seeker ID</th><th>User Name</th><th>Hosp Name</th><th>Hosp-Email</th><th>Blood ID</th><th>Blood Group</th><th>Blood Quantity</th><th>Request_Date</th><th colspan='2'>Request Status</th></tr>";
	while($row=mysql_fetch_assoc($recordfound))
	{
	echo "<tr><td>".$row['Rqid']."</td><td>".$row['uid']."</td><td>".$row['uname']."</td><td>".$row['Hname']."</td><td>".$row['Hemail']."</td><td>".$row['bid']."</td><td>".$row['bg']."</td><td>".$row['bquantity']."</td><td>".$row['Rqdate']."</td>";
	?>
	<td><?php echo '<a  href="AcceptedResponse.php?id='.$row['Rqid'].'"><h4 style="color:green;">Accept</h4></a>';?></td>
	<td><?php echo '<a rel="facebox" href="sekerrejectt.php?id='.$row['Rqid'].'"><h4 style="color:red;">Reject</h4></a>';?></td>
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