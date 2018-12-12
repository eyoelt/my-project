<?php
session_start();
include("Connection.php");
?>		
<html>
<head>
<title>AdminCreateAccount</title>
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
	include("LeftSideMenu.php");
	?>
</div>
</td>
<td width="300">
<div style="width:630px;height: 600px;
border:solid 4px #dldbeg;
overflow: auto;">

<div id="contentcenter"><br/>			
<div class="loginBoxx">	
<fieldset style="border-radius: 25px;background-color: #e2e6fe;color:#147d98;height:480px;width:580px;margin-left:18px;">
<br><br><h3>To Block Your User Enter The User's ID and Press Search Button</h3>
<form action="" method="post"  enctype="multipart/form-data">
<input type="text" name="searchkey" placeholder="To Block your User enter ID"> 
<input type="submit" name="search" value="Search"/>	
	
<?php
if(isset($_POST["search"]))
{
$searchvalue=$_POST["searchkey"];	
$sql="select * from Account where uid='$searchvalue'";
$recordfound=mysql_query($sql,$con);
if(mysql_affected_rows($con))
{
echo "<table width='100%' border=0><form action='' method='post''  enctype='multipart/form-data'>";
$row=mysql_fetch_assoc($recordfound);
{
echo"<tr><td> User_ID:</td><td><input type=text name='uid1' value='".$row["uid"]."'readonly></td></tr>";
echo "<tr><td>User_Name:</td><td><input type=text name='username1' value='".$row["UName"]."' readonly></td></tr>";
echo "<tr><td>Password:</td><td><input type=text name='password1' value='".$row["password"]."' readonly></td></tr>";
echo "<tr><td>User_Role:</td><td><input type=text name='role1' value='".$row["role"]."' required></td></tr>";
echo "<tr><td>User_Status:</td><td><input type=text name='status1' value='".$row["status"]."' required></td></tr>";
}
echo "<tr><td></td><td><input type=submit name='update' value='Update'> ";
echo "<input type=reset value=Cancel></td></tr>";
echo"</form></table>";
}
else
echo "<div id=error>Sorry No Recored Is Found!!!</div>";
}
elseif(isset($_POST["update"]))
{
$uid=$_POST["uid1"];
$username=$_POST["username1"];
$password=$_POST["password1"];
$role=$_POST["role1"];
$status=$_POST["status1"];
if($con)
{
$sql="update Account set UName='$username',password='$password',role='$role',status='$status' WHERE Uid='$uid'";
$insert=mysql_query($sql,$con);
if($insert)
echo "<div id=Success><br>[1] Recored is updated Successfully!!!</div>";
else
echo "<div id=error>Sorry No Recored is Updated!!!</div>".mysql_error();
}
else
die("Connection Failed:".mysql($con));	
}
?>
</form></fieldset></div>

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