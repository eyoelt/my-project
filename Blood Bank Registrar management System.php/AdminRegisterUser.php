	<?php
	session_start();
	include("Connection.php");
	?>
	<html>
	<head>
	<title>AdminRegisterUser</title>
	<link rel="Stylesheet" type="text/css" href="setting.css">
	<link rel="stylesheet" href="stylesLogin.css">
	<script type="text/javascript" src="src/validation.js"></script>
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
	<div style="width:600px;height: 600px;
	border:solid 4px #dldbeg;
	overflow:scroll;
	overflow-x:scroll">

	<div id="contentcenter">
	<br/>	
	<div class="loginBoxx">
	<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:540px;margin-left:24px;">
	<form action="" method="post" enctype="multipart/form-data">
	<table border="0px" bgcolor="#fff9f9" width="500px" >
	<tr><td colspan="2"><h2 style="font-size:25px;text-align: center;">Register User<div style="float:right; margin-left:40px;"><a href="Adminstrator.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
	<tr><td>  User ID:</td><td><input type="text" name="uid" id="urid" placeholder="userid" required></td></tr>

	<script type="text/javascript">
	var f1 = new LiveValidation('urid');
	f1.add(Validate.Presence,{failureMessage: " Please Enter User ID"});
	f1.add(Validate.Format,{pattern: /^[a-zA-Z0-9]+$/ ,failureMessage: "User ID Must be character and number only!!"});
	f1.add( Validate.Length, { minimum:2, maximum: 15,failureMessage:"The Characters must be less than 15" } );
	</script>

	<tr><td>  First Name:</td><td><input type="text" name="fname"  id="ufname" placeholder="first name" required></td></tr>

	<script type="text/javascript">
	var f1 = new LiveValidation('ufname');
	f1.add(Validate.Presence,{failureMessage: "Please Enter User First Name!!"});
	f1.add(Validate.Format,{pattern: /^[a-zA-Z]+$/ ,failureMessage: "User First Name Must be character only!!"});
	f1.add( Validate.Length, { minimum:2, maximum: 15,failureMessage:"The Characters must be less than 15" } );
	</script>

	<tr><td>  Last Name:</td><td><input type="text" name="lname" id="ulname" placeholder="last name" required></td></tr>


	<script type="text/javascript">
	var f1 = new LiveValidation('ulname');
	f1.add(Validate.Presence,{failureMessage: "Please Enter User Last Name!!"});
	f1.add(Validate.Format,{pattern: /^[a-zA-Z]+$/ ,failureMessage: "User Last Name Must be character only!!"});
	f1.add( Validate.Length, { minimum:2, maximum: 15,failureMessage:"The Characters must be less than 15" } );
	</script>

	<tr><td>  User Email:</td><td><input type="email" name="uemail" id="email" placeholder="email" required></td></tr>

	<script type="text/javascript">
	var f1 = new LiveValidation('email');
	f1.add(Validate.Presence,{failureMessage: "Please Enter User Email!!"});
	f1.add(Validate.Format,{pattern: /^[a-zA-Z0-9@.']+$/ ,failureMessage: "User Email Must be character and number only!!"});
	f1.add( Validate.Length, { minimum:2, maximum: 15,failureMessage:"The Characters must be less than 15" } );
	</script>

	<tr><td>  User Sex:</td><td><select name="usex" required><?php $role=array("Selectsex","Male","Female"); foreach($role as $i)
	echo"<option value=$i>$i</option>";?></select></td></tr>

	<tr><td>  User Age:</td><td><input type="number" name="uage" placeholder="user age" required></td></tr>
	<tr><td> User Photo:</td><td><input type="file" name="photo" placeholder="uphoto" required></td></tr>
	<tr><td> &nbsp;</td><td><input type="submit" value="Register" name="register">
	&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></td></tr></table></form></fieldset></div>

	<?php
	if(isset($_POST['register']))
	{	
	$uid=($_POST["uid"]);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uemail=$_POST['uemail'];
	$usex=$_POST['usex'];
	$uage=$_POST['uage'];
	$ptmploc=$_FILES["photo"]["tmp_name"];
	$pname=$_FILES["photo"]["name"];
	$psize=$_FILES["photo"]["size"];
	$ptype=$_FILES["photo"]["type"];
	if($con)
	{	
	if($psize<=90000&&$ptype=="image/jpeg")
	{
	if(!file_exists("Images"))
	mkdir("Images");
	$photopath="Images/$pname";
	if(copy($ptmploc,$photopath))
	{
	$sql="Insert into User values('$uid','$fname','$lname','$uemail','$usex','$uage','$photopath')";
	$insert=mysql_query($sql,$con);
	if($insert)
	echo "<div id=Success><img src='Images/success.jpg' height='20px'width='50px'/>User Registered Successfully !!!</div>";
	else
	echo"<div id='error'><img src=' Images/err.png' height='20px'width='30px'/> NO record inserted!!</div>".mysql_error($con);
	}
	else
	echo "<img src=' Images/err.png' height='20px'width='30px'/>Unable to upload the photo!";
	}
	else
	{
	if($psize>900000)
	echo "<img src=' Images/err.png' height='20px'width='30px'/>Photo size should not be greater than 9Kb!";
	else
	echo "<img src=' Images/err.png' height='20px'width='30px'/>Photo should be in jpeg format";
	}
	}
	else
	die("<img src=' Images/err.png' height='20px'width='30px'/><div id='error'>Connection Failed".mysql($con));
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