<?php
session_start();
include("Connection.php");
?>
<html>
<head>
<title>BBmanager</title>
<link rel="Stylesheet" type="text/css" href="setting.css">
<link rel="stylesheet" href="stylesLogin.css">
<?php
function encryptpassword($password ) 
{
$cryptKey='qJB0rGtIn5UB1xG03efyCp';
$passwordEncoded= base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $password, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
return( $passwordEncoded );
}

?>
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
		
		</div>
		</td>
		<td width="300">
		<div style="width:630px;height: 600px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">	
		
<div class="loginBoxx">	
<fieldset style="border-radius: 25px;width:573px;margin-left:20px; wbackground-color: #e0effe;height:530px;border:2px solid #a8abb7; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); color:#000000;">

 <form id="form1" name="login" method="POST" action="" onsubmit="return validateForm()">
 <table border="0px"width="450px">
<tr><td colspan="2"><h2 style="font-size:25px;text-align: center;">Change Your Password 
 <div style="float:right; margin-left:40px;"><a href="Labtecpage.php" title="Close"><img src="Images/close.jpg"></a></div></h2><br><br></td></tr>
 <tr><td><font color="#ffffff">*</font> User ID:</td><td><input type="text" name="uid" value="<?php echo $uid;?>" readonly></td></tr>
 <tr><td><font color="ffffff">*</font> User Name:</td><td><input type="text" name="UName" value="<?php echo $uname;?>" readonly></td></tr>
<tr><td><font color="red">*</font> Old Password:</td><td><input type="password" name="olpw"placeholder="Old Password"required></td></tr>
<tr><td><font color="red">*</font> New Password:</td><td><input type="password" name="newp" placeholder="New Password"required></td></tr>
<tr><td><font color="red">*</font> Confirm Password:</td><td><input type="password" name="confermp" placeholder="Confirm Password"required></td></tr>
<tr><td>&nbsp;</td><td><br><br><input type="Submit" name="change"size="100" value="Change"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Reset" class="submit"size="100" value="Cancel"/></td></tr>
</table></form></fieldset></div>
  
  
<?php 
if(isset($_POST['change']))
{
$password=$_POST['olpw'];
$npsw=$_POST['newp'];
$acceptold=encryptpassword($password);
$cpw=$_POST['confermp'];
if(strlen($npsw)<=5)
echo "<div id='success'>Your Password Length Must be Greater Than 5!!</div>";
elseif(strlen($npsw)>=10)
echo "Your Password  Length Must be less Than 20";
else
{
$o=mysql_query("select*from account where uid='$uid' ");
while($r=mysql_fetch_array($o))
{
$old=$r["password"];
}
if($old==$acceptold)
{

if($npsw==$cpw)
{
$newpassword=encryptpassword($npsw);	
$sql="update account set password='$newpassword',pw_status='YES' where uid='$uid'";
$updatepassword=mysql_query($sql,$con);	
	if($updatepassword)
	{
	$x='<script type="text/javascript">alert("Your Password Has been Changed Successfully!!");
	window.location=\'LoginPage.php\';</script>';
	echo $x;
	}
else
echo"<div id='error'>Sorry!! Your Password Not Changed!!</div>".mysql_error($con);
}
else
echo"<div id='error'> Sorry!! Your New Password and Confrim Password Not Match!!</div>";	
}
else
echo"<div id='error'> Sorry!! Your old Password is Error!!</div>";
}
}
?>

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