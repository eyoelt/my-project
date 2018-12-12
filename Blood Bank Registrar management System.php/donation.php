	<?php
	session_start();
	include("Connection.php");
	?>
	<html>
	<head>
	<title>Donation</title>
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
	<script>
	function cal_bmi(kg, htc){
	
	m = htc/100;
	h2 = m * m;
	bmi = kg/h2;
	f_bmi = Math.floor(bmi);
	diff  = bmi - f_bmi;
	diff = diff * 10;
	diff = Math.round(diff);
	if (diff == 10){
	// Need to bump up the whole thing instead
	f_bmi += 1;
	diff = 0;
	}
	bmi = f_bmi + "." + diff;
	adm.bmi.value=bmi
	}
	</script>
	<div class="loginBoxx">
	<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:750px;margin-left:22px;">
	<form action=" " method="post" name="adm">
	<table border="0px" bgcolor="#fff9f9" width="500px">
	<tr><td colspan="2"><h2 style="font-size:25px;text-align: center;">Blood Donation 
	<div style="float:right; margin-left:40px;"><a href="Nursepage.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
	<tr><td>BloodID:</td><td><input type="text" name="bid" placeholder="Bloodid"  required ></td></tr>
	<tr><td>Donor ID:</td><td><input type="text" name="bdid" placeholder="ID number" required </td></tr>
	<tr><td>User ID:</td><td><input type="text" name="uid" value="<?php echo $uid;?>" readonly </td></tr>
	<tr><td>Height:</td><td><input type="number" name="Height"  placeholder="donorHeightt" required ></td></tr>
	<tr><td>D_Weight:</td><td><input type="number" name="Weight"  placeholder="dweight"required onkeyup="cal_bmi(Weight.value,Height.value)"></td></tr>
	<tr><td>BMI:</td><td><input type="text" name="bmi" ></td></tr>
	<tr><td>Blood Pressure:</td><td><input type="text" name="BP" placeholder="BP" required ></td></tr>
	<tr><td>Quantity:</td><td><input type="number" name="bqty" placeholder="bloodquantity" required></td></tr>
	<tr><td>Reg.Date:</td><td><input type="text" name="rdate" value="<?php echo date('Y-m-d');?>" readonly></td></tr>
	<tr><td>Exp.Date:</td><td><input type="text" name="edate" value="<?php echo date('Y-m-d', strtotime('+90 days'));?>" readonly></td></tr>
	<tr><td>Status:</td><td><select name="bstatus" required><option>Selectstatus</option><option>Active</option><option>Inactive</option></select></td></tr>
	<tr><td>&nbsp;</td><td><input type="submit" value="Register" name="Register" >&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Reset" id="id" onclick="validate()"></td></tr>
	</table></form></fieldset></div>
	<?php
	if(isset($_POST['Register']))
	{
	$bid=($_POST["bid"]);
	$bdid=$_POST['bdid'];	
	$uid=$_POST['uid'];
	$Height=$_POST['Height'];
	$Weight=$_POST['Weight'];
	$bmi=$_POST['bmi'];
	$BP=$_POST['BP'];
	$bqty=$_POST['bqty'];
	$rdate=$_POST['rdate'];
	$edate=$_POST['edate'];
	$bstatus=$_POST['bstatus'];
	$Today=date("Y-m-d");
	$NewDate=date("Y-m-d", strtotime("+90 days"));

	$sql=mysql_query("select * from donation where bdid='$bdid'")or die(mysql_error()); 
	$count=mysql_num_rows($sql);
	if($count<='0') 
	{
	$sql1="insert into donation values(' ','$bid','$bdid','$uid','$Height','$Weight','$bmi','$bqty','$BP','$Today','$NewDate','$bstatus')";
	$inserted=mysql_query($sql1)or die(mysql_error());
	if($inserted)
echo "<div id=Success><img src='Images/success.jpg' height='20px'width='30px'/>You have Register the Blood Successfully!!</div>";
	else	
	echo "<div id=error>You haven't register the Blood!:".mysql_error();
	}
	else
	{
	$sql0=mysql_query("select * from donation where bdid='$bdid'")or die(mysql_error()); 
	if($ro=mysql_fetch_array($sql0))
	{
	if($Today<=$ro['ExpDate'])
	{
	$date1=date_create($Today);
	$date2=date_create($ro['ExpDate']);
	$diff=date_diff($date1,$date2);	
	echo "<div id=error><img src=' Images/err.png' height='20px'width='20px'/>Sorry!! Dear Customer you have".$diff->format(" %R%a ")." Remaining Days left to Donate Blood again... Thank You!!".mysql_error();	
	}
	else
	{
	$sql2="insert into donation values(' ','$bid','$bdid','$uid','$bg','$rhtype','$Height','$Weight','$bmi','$bqty','$tdonation','$BP','$Today','$NewDate','$bstatus')";
	$inserted=mysql_query($sql2);
	if($inserted)
	echo "<div id=Success>You have Register the Blood";
	else	
	echo "<div id=error>You haven't register the Blood!:".mysql_error();	
	}
	}
	}	
	}
	?>
	<?php
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