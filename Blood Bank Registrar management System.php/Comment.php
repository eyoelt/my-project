<?php
include("Connection.php");
session_start();
?>
<html>
<head>
<title>SeekerPage</title>
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
		</div>
		</td>
		<td width="300">
		<div style="width:630px;height: 600px; margin-left:5px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
		
<div class="loginBoxx">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:540px;">
<form action="" method="post">
<table border="0px" bgcolor="#fff9f9" width="550px">
<tr><td colspan="2"><h2 style="font-size:25px;text-align: center;">Give Your Comment Here
 <div style="float:right; margin-left:40px;"><a href="DonorPage.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
<tr><td>Comment:</td><td><textarea name="message" ROWs="5"COLs="33" placeholder="please write your comment here !!!" required></textarea></td></tr>
<tr><td>Date Sent:</td><td><input type="text" name="date" value="<?php echo date('d-m-Y');?>" readonly /></td></tr><br>
<tr><td colspan="2"> &nbsp;</td></tr><br>
<tr><td colspan="2"> &nbsp;</td></tr><br>
<tr><td>&nbsp;</td><td><input type="submit" value="Submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"value="Reset"/></td></tr></table>
</form></fieldset></div>


<?php 
if(isset($_POST["submit"])){ 
	$message=$_POST["message"];
	$date=$_POST["date"];
	$unread="yes";
	
if($con){
	$sql="Insert into feedback values(' ','$message','$date','$unread')";
	$inserted=mysql_query($sql);
if($inserted)
	echo "<div id=Success>You have sent the comment successfully!!";
else	
	echo "<div id=error>You haven't sent the comment successfully!!".mysql_error();
	}
else
		die("<div id=error>Connection Failed!!!".mysql());
}
?>

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
</body>
</html>