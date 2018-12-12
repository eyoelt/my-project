	<?php
	session_start();
	include("Connection.php");
	?>		
	<html>
	<head>
	<title>AdminCreateAccount</title>
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
	<?php
//password encryption
function encryptpassword($password ) 
{
$cryptKey='qJB0rGtIn5UB1xG03efyCp';
$passwordEncoded= base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $password, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
return( $passwordEncoded );
}

?>
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
	<div style="width:600px;height: 600px;
	border:solid 4px #dldbeg;
	overflow:scroll;
	overflow-x:scroll">

	<div id="contentcenter">
	<br/>	
	<div class="loginBoxx">	
	<fieldset style="border-radius: 25px;background-color: #e2e6fe;color:#147d98;height:480px;margin-left:24px;">
	<form action="" method="post">
	<table border="0px" bgcolor="#fff9f9" width="500px">
	<tr><td colspan="2"><h2 style="font-size:25px;text-align: center;">User Acount Form<div style="float:right; margin-left:40px;"><a href="Adminstrator.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
	<tr><td>  User ID:</td><td>
		<select name="uid">
		<?php
		$sql="select * from user where Status='Noaccount'";
		$recored=mysql_query($sql);
		if($recored)
		{
		?>
		<option value=""></option>
		<?php
		while($row=mysql_fetch_assoc($recored))
		{
		?>
		<option value="<?php echo $row['uid'];?>">
		<?php echo $row["uid"];?>
		</option>
		<?php
		}
		}
		?>
		</select>
	
	</td></tr>
	<tr><td>  User Name:</td><td><input type="text" name="username" placeholder="user name" required></td></tr>
	<tr><td>  Password:</td><td><input type="password" name="password" placeholder="password" required></td></tr>
	<tr><td>  User Role:</td><td><select name="role" required <style="">
	<?php $role=array("Selectrole","Admin","BBmanager","Donor","Seeker","Nurse","Labtecn");
	foreach($role as $i) echo"<option value=$i>$i</option>";?></select></td></tr>
	<tr><td> User Status:</td><td><select name="status" required <style="">
	<?php $status=array("Selectstatus","1","0"); foreach($status as $i)
	echo"<option value=$i>$i</option>";?></select></td></tr>
	<tr><td> &nbsp;</td><td><input type="submit" value="Register" name="register">&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Reset"></td></tr>
	</table></form></fieldset></div></div>

	<?php
	if(isset($_POST['register']))
	{	
	$uid=($_POST["uid"]);
	$uname=$_POST['username'];
	$pword=$_POST['password'];
	$password=encryptpassword($pword);
	$role=$_POST['role'];
	$status=$_POST['status'];
	$change="NO";
	if($con)
	{
	if(strlen($password)>5)
	{
	$query="Insert into account values('$uid','$uname','$password','$role','$status','$change')";
	$insert=mysql_query($query)or die(mysql_error());
	if($insert)
	{
	$sql="update user set Status='Hasaccount' where uid='$uid'";	
	$updated=mysql_query($sql,$con);
	$x='<script type="text/javascript">alert("Account Created Successfully!!");
	window.location=\'AdminCreateAccount.php\';</script>';
	echo $x;
	}
	else
	{
	$x='<script type="text/javascript">alert("Sorry No Account Created!! ");
	window.location=\'AdminCreateAccount.php\';</script>';
	echo $x;	
	}
	}
	else
	echo "<div id=error><img src='Images/successnot.gif' height='20px'width='30px'/>Password must Be Greater Than 5 char!!!</div>";
	}
	else
	die("Connection Failed:".mysql($con));	
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