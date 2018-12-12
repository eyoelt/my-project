<?php
session_start();
include("Connection.php");
?>
<html>
<head>
<title>AdminRegisterUser</title>
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
		
	<?php
	include("Time.php");
	?>
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
		
<div class="loginBoxx">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;color:#147d98;height:480px;width:710px;">
<div id="customers">
<form action="" method="post"  enctype="multipart/form-data">
<input type="text" name="searchkey" placeholder="Search by Uid For A spesific users"> 
<input type="submit" name="search" value="Search"/>	

 <?php
 if(isset($_POST["search"]))
 {
$searchvalue=$_POST["searchkey"];	
$sql="select * from account where uid='$searchvalue'";
$recordfound=mysql_query($sql,$con);
 if(mysql_affected_rows($con))
 {
echo "<table width='100%' border=1><form action='' method='post''";
$row=mysql_fetch_assoc($recordfound);
{	
if($row['status']==1)
		$stat="Active";
		else if($row['status']==0)
		$stat="Inactive";
		else
		$stat="Incorrect";
echo "<br><h2>Account for A spesfic User</h2><br><table border=1><tr><th>User ID</th><th>User Name</th><th>Password</th><th>User Role</th><th>User Status</th></tr>";
echo "<tr><td>".$row['uid']."</td><td>".$row['UName']."</td><td>".$row['password']."</td><td>".$row['role']."</td><td>".$stat."</td><tr>";
	echo"</form></table>";
  }
  }
	else
	echo "<div id=error>Sorry Please Enter Valid UserID!!</div>";
}
?> 
</div></form></fieldset></div>

			</div></td>
		<td width="150">
		<div id="sideright">
		
<div style="margin-left:1%;
text-shadow: 2px Blue;">		
<img src="<?php echo $photo;?>" width="100" height="100" alt="image"style="float: left;"/>
<p style="color:#ffffff;margin-right:5px;font-weight: bolder;">User: <?php echo $uname;?> <br>You Login As:<?php echo $role;?></p>
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