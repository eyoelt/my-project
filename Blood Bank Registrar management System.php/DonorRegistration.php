<?php
session_start();
include("Connection.php");
?>
<html>
<head>
<title>Donor</title>
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
?>	</div>
		<?php
		include("Nursemenue.php");
		?>
	</div>
	</td>
	<td width="300">
	<div style="width:600px;height: 600px;
	border:solid 4px #dldbeg;
	overflow:scroll;
	overflow-x:scroll">

<div id="contentcenter">
<div class="loginBoxx">
<fieldset style="border-radius:25px;background-color:#e2e6fe;color:#20887d;height:800px;margin-left: 15px;">
<form action="" method="post" enctype="multipart/form-data">
<table border="0px" bgcolor="#fff9f9" width="500px">
<tr><td colspan="2"><h3 style="font-size:25px;text-align: center;">Register Donor 
 <div style="float:right; margin-left:40px;"><a href="Nursepage.php" title="Close"><img src="Images/close.jpg"></a></div></h3></td></tr>
<tr><br><td>ID Number:</td><td><input type="text" name="bdid" placeholder="ID number"  required onblur="IdError()"></td></tr>
<tr><td>First Name:</td><td><input type="text" name="fname" placeholder="first name"  required onblur="fnameError()"></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lname" placeholder="last name"size="20" required onblur="lnameError()"></td></tr>
<tr><td>D_Email:</td><td><input type="email" name="email" placeholder="EMail" required onblur="validateEmail()"></td></tr>
<tr><td>Occupation:</td><td><input type="text" name="occp" placeholder="occp"required onblur="occperror()"></td></tr>
<tr><td>Date of Birth:</td><td><input type="date" name="dbdate"  pattern="[date]" onblur="occperror()"></td></tr>
<tr><td>D_Age:</td><td><input type="number" name="dage" placeholder="age" min="18"max="65"required></td></tr>
<tr><td>D_Sex:</td><td><select name="dsex" required>
<option>Selectsex</option><option>Male</option><option>Female</option></select></td></tr>
<tr><td>City-Name:</td><td><input type="text" name="city" placeholder="city"></td></tr>
<tr><td>Sub-city/Region:</td><td><input type="text" name="region" placeholder="region" required ></td></tr>
<tr><td> User Photo:</td><td><input type="file" name="photo" placeholder="uphoto" required></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Register"name="register">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" id="id" onclick="validate()"></td></tr>
</table></form></fieldset></div>
<?php
if(isset($_POST['register'])){	
	$bdid=($_POST["bdid"]);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$occp=$_POST['occp'];
	$dbdate=$_POST['dbdate'];
	$dsex=$_POST['dsex'];
	$dage=$_POST['dage'];
	$city=$_POST['city'];
	$region=$_POST['region'];
	
	$ptmploc=$_FILES["photo"]["tmp_name"];
    $pname=$_FILES["photo"]["name"];
    $psize=$_FILES["photo"]["size"];
    $ptype=$_FILES["photo"]["type"];
    $Status="Noaccount";
if($con)
{	
if($psize<=90000&&$ptype=="image/jpeg")
{
if(!file_exists("Images"))
mkdir("Images");
$photopath="Images/$pname";
if(copy($ptmploc,$photopath))
{
$sql="Insert into blooddonor values('$bdid','$fname','$lname','$email','$occp','$dbdate','$dsex','$dage','$city','$region','$photopath')";
$sq="Insert into user values('$bdid','$fname','$lname','$email','$dsex','$dage','$photopath','$Status')";
		$inserted1=mysql_query($sql);
		$inserted2=mysql_query($sq);
		if($inserted1 && $inserted2)
		echo "<div id=Success><img src='Images/success.jpg' height='20px'width='50px'/>You have Register the Donor Successfully";
		else	
		echo "<div id=error>You haven't register the Donor!:".mysql_error();
}
else
echo "Unable to upload the photo!";
}
else
{
if($psize>900000)
echo "Photo size should not be greater than 9Kb!";
else
echo "Photo should be in jpeg format";
}
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
		</div></td></tr></table></div>
		<table width="1000"><tr><td>
		<?php
		include("footer.php");
		?>
		</td></tr></table></div>
		
<?php
}
else
{
header("location:Index.php");
}
?>
</body></html>