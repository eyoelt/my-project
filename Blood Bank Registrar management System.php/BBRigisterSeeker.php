	<?php
	session_start();
	include("Connection.php");
	?>	
	<html>
	<head>
	<title>BBmanager</title>
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
	</div>
	</td>
	<td width="300">
	<div style="width:600px;height: 600px;
	border:solid 4px #dldbeg;
	overflow:scroll;
	overflow-x:scroll">

	<div id="contentcenter">		
	<div class="loginBoxx">	
	<fieldset style="border-radius: 25px;background-color: #e0effe;height:630px;margin-left:21px;">
	<form action="" method="post" enctype="multipart/form-data">
	<table border="0px" bgcolor="#fff9f9" width="500px"><tr><td colspan="2"><h2 style="font-size:25px;text-align: center;">Register Blood Seeker<div style="float:right; margin-left:40px;"><a href="BBManagerPage.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
	<tr><td>Seeker_ID:</td><td><input type="text" name="uid"  placeholder="seekerid" required/></td></tr>
	<tr><td>SFirst_Name:</td><td><input type="text" name="fname"  placeholder="seekerfname" required/></td></tr>
	<tr><td>SLast_Name:</td><td><input type="text" name="lname"  placeholder="seekerlname" required/></td></tr>
	<tr><td>Seeker_Age:</td><td><input type="number" name="sage"  placeholder="seekerage" required/></td></tr>
	<tr><td>Seeker_Sex:</td><td><select name="ssex" required><option>Selectsex</option><option>Male</option><option>Female</option></select></td></tr>
	<tr><td>Seeker_Email:</td><td><input type="text" name="semail" placeholder="seekeremail" required/></td></tr>
	<tr><td>Hosp_Name:</td><td><input type="text" name="hname"  placeholder="hospitalname" required/></td></tr>
	<tr><td> User Photo:</td><td><input type="file" name="photo" placeholder="uphoto" required></td></tr>
	<tr><td>&nbsp;</td><td><input type="submit" name="signup" value="Register"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"/></td></tr></table>
	</form></fieldset></div></div></div>
	<?php
	if(isset($_POST['signup']))
	{	
	$sid=($_POST["uid"]);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sage=$_POST['sage'];
	$semail=$_POST['semail'];
	$ssex=$_POST['ssex'];
	$hname=$_POST['hname'];
	$ptmploc=$_FILES["photo"]["tmp_name"];
	$pname=$_FILES["photo"]["name"];
	$psize=$_FILES["photo"]["size"];
	$ptype=$_FILES["photo"]["type"];
	$status="Noaccount";

	if($con)
	{	
	if($psize<=90000&&$ptype=="image/jpeg")
	{
	if(!file_exists("Images"))
	mkdir("Images");
	$photopath="Images/$pname";
	if(copy($ptmploc,$photopath))
	{
	$sql="Insert into BloodSeeker values('$sid','$fname','$lname','$sage','$ssex','$semail','$hname','$photopath')";
	$sq="Insert into user values('$sid','$fname','$lname','$semail','$ssex','$sage','$photopath','$status')";
	$inserted1=mysql_query($sql);
	$inserted2=mysql_query($sq);
	if($inserted1 && $inserted2)
	echo "<div id=Success><img src='Images/success.jpg' height='20px'width='30px'/>You have register Client Hospital Successfully!!</div>";
	else	
	echo "<div id=error>You haven't register Client Hospital!!".mysql_error();
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
	</div>
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