<?php
session_start();
include("Connection.php");
?>
		<html>
		<head>
		<title>Notices</title>
		<link rel="Stylesheet" type="text/css" href="setting.css">
		<link rel="stylesheet" href="stylesLogin.css">
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
	include("BBMenu.php");
	?>
		</div></td>
		<td width="300">
		<div style="width:600px;height: 600px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
<div class="loginBoxx">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:530px;margin-left:22px;">
<form action="" method="post">
<table border="0px" bgcolor="#fff9f9" width="500px">
<tr><td colspan="2"><h2 style="font-size:25px;text-align: center;">Admin Post Notices 
 <div style="float:right; margin-left:40px;"><a href="Adminstrator.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
<tr><td>User ID:</td><td><input type="text" name="uid" value="<?php echo $uid;?>" readonly></td></tr>
<tr><td>User Name:</td><td><input type="text" name="username" value="<?php echo $uname;?>" readonly ></td></tr>
<tr><td>Role:</td><td><input type="text" name="nrole" value="<?php echo $role;?>" readonly ></td></tr>
<tr><td>Title:</td><td><input type="text" name="title" placeholder="title" required/></td></tr>
<tr><td>Content:</td><td><textarea name="content"  placeholder="please write your Quetionaries here !!!" required></textarea></td></tr>
<tr><td>Sent Date:</td><td><input type="text" name="date" readonly value="<?php echo date('Y-m-d');?>"  /></td></tr>
<tr><td> Expaired Date </td>
<td><input type="date" name="exdate" pattern="[date]" required="required"></td></tr>
<tr><td>&nbsp;</td><td><input type="Submit" name="submit"size="100" value="Send"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Reset" class="submit" value="Reset"/></td></tr>
</table></form></fieldset></div>

<?php
if(isset($_POST['submit']))
	{	
	$uid=$_POST['uid'];
	$uname=$_SESSION['username'];
	$nrole=$_POST['nrole'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$date=$_POST['date'];
	$exdate=$_POST['exdate'];
	$unread="yes";
if($con)
	{
$sql="Insert into Notices values(' ','$uid','$uname','$nrole','$title','$content','$date','$exdate','$unread')";
$inserted=mysql_query($sql);
if($inserted)
	echo "<div id='Success'> <img src='Images/success.jpg'width='30'height='20'>You have Sent Noteces Successfully!!</div>";
else	
	echo "<div id=error>You haven't Sent Notices!!!".mysql_error();
	}
	else
	die("Connection Failed:".mysql);
}
?>
</div></td>
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