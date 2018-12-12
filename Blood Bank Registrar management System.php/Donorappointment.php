	<?php
	session_start();
	include("Connection.php");
	?>
	<html>
	<head>
	<title>Donorappointment</title>
	<link rel="Stylesheet" type="text/css" href="setting.css">
	<link rel="stylesheet" href="stylesLogin.css">
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="src/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>
	<script src="src/validation.js" type="text/javascript"></script>
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
	</td></tr></table></div>
	<?php	
	if(!empty($_SERVER["HTTP_CLIENT_IP"]))
	$ipaddress=$http_client_ip;
	elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
	$ipaddress=$http_x_forwarded_for;	
	else
	$ipaddress=$_SERVER['REMOTE_ADDR'];
	// some variable declaration
	$start_time = date("d M Y @ h:i:s");
	$work_date=date('Y-m-d');
	$activity_type="Request";
	$username=$_SESSION['username'];
	$role=$_SESSION['role'];
	$login_time=$_SESSION['login_time'];
	$logout_time="empty";
	?>
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
	<tr><img src="Images/success1.jpg" height="40px"width="50px"/>First See Reserved Dates Click <a rel="facebox" href="ViewReservedDates.php">Here</a>
	<td colspan="2"><h2 style="font-size:25px;text-align: center;">Make Appointment 
	<div style="float:right; margin-left:40px;"><a href="DonorPage.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
	<tr><td>Donor ID:</td><td><input type="text" name="uid"  value="<?php echo $uid;?>" readonly></td></tr>
	<tr><td>User Name</td><td><input type="text" name="fname" value="<?php echo $uname;?>" readonly/></td></tr>
	<tr><td>Telephone</td><td> <input type="text" name="phone" placeholder='phone' id="phon" value="+2519" maxlength="13" pattern="^[0-9+ ]+" </td></tr>
	
<script type="text/javascript">
	var f1 = new LiveValidation('phon');
	f1.add(Validate.Presence,{alertMessage: " It cannot be empty"});
	f1.add(Validate.Format,{pattern: /^[0-9+]+$/ ,failureMessage: " It allows only numbers and +"});
	f1.add( Validate.Length, { minimum:13, maximum: 13,failureMessage:"always 10 charactor " } );
	</script>
	
<tr><td><?php if(isset($_GET['unbalanceddate'])) echo ">curent date nmust be less than apointment date ";?>
	Appointment time: </td><td><input type="time" name="aptime" required="required" </td></tr>
	<tr><td> Appointment date </td><td><input type="date" name="apadate" required="required"></td></tr><br><br>
	<tr><td>&nbsp;</td><td><input type="Submit" name="submit"size="100" value="Apoint"/>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="Reset" class="submit"size="100" value="Reset"/></td></tr>
	</table></form></fieldset></div>
	<?php

?>
	<?php
	if(isset($_POST['submit']))
	{	
	$uid=$_POST['uid'];
	$fname=$_POST['fname'];
	$phone=$_POST['phone'];
	$aptime=$_POST['aptime'];

	
$minutes_to_add = 15;
$time = new DateTime($aptime);
$time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
$stamp = $time->format('H:i');
	$t=$aptime.'-'.$stamp;		
	$apadate=$_POST['apadate'];
	$login_time=$_SESSION['login_time'];
	$start_time = date("d M Y @ h:i:s");
	$activity_type="Appointment";
	$status1="unread";//nurs
	$status2="unread";//doner
	$status3="no";//nurs
	if($con)
	{
	$tod=date("Y-m-d");
	if($apadate<$tod)
	echo " <div id=error><img src=' Images/err.png' height='20px'width='30px'/>Sorry!!The Reserved Date Must be Greater than or Equal to Current Date!!</div>";
	else
	{
	$sql=mysql_query("select*from Appointment  WHERE apdate='$apadate' and aptime='$t'")or die(mysql_error()); 
	$count=mysql_num_rows($sql);
	if($count>0)
	echo " <div id=error><img src=' Images/err.png' height='20px'width='30px'/>Sorry!! This date and time alredy Resrved...Please Change!!</div>";
	else
	{
	$activity="Blood Donor Make Appointment [ Appt NO:' ',User ID:$uid,User Name:$uname,App Date:$apadate]";	
	$logsql="insert into logfile values(' ','$uid','$uname','$role','$login_time','$logout_time','$start_time','$activity_type','$activity','$ipaddress','$work_date')";
	$sql="Insert into Appointment values(' ','$uid','$fname','$phone','$t','$apadate','$status1','$status2','$status3')";

	$inserted=mysql_query($sql);
	$inserted1=mysql_query($logsql);
	if($inserted && $inserted1)
echo "<div id=Success><img src='Images/success.jpg' height='20px'width='30px'/> You have Sent Appointment Successfully!!</div>";
	else	
	echo "<div id=error>You haven't Sent Appointment!!!".mysql_error();
	}
	}
	}
	else
	die("Connection Failed:".mysql);
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
	</body></html>
