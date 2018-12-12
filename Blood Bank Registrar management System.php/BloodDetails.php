<?php
session_start();
include("Connection.php");
?>
<html>
<head>
<title>DateencoderRegisterBlood</title>
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
include("Labtecmenu.php");
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
<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:630px;margin-left:22px;">
<form action="" method="post">
<table border="0px" bgcolor="#fff9f9" width="500px">
<tr><td colspan="2"><h2 style="font-size:25px;text-align: center;">Register Blood Details 
<div style="float:right; margin-left:40px;"><a href="Labtecpage.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
<tr><td>BloodID:</td><td><input type="text" name="bid" placeholder="Bloodid" maxlength="10" required onblur="IdError()"></td></tr>
<tr><td>DonorID:</td><td><input type="text" name="bdid" placeholder="did" maxlength="10" required onblur="fnameError()"></td></tr>
<tr><td>BloodGroup:</td><td><input type="text" name="bg" placeholder="bloodgroup"size="20" maxlength="10"required onblur="lnameError()"></td></tr>
<tr><td>RH Type:</td><td><input type="text" name="rhtype" placeholder="Rhtype" required ></td></tr>
<tr><td>PackNo:</td><td><input type="text" name="packno" placeholder="occp"required onblur="occperror()"></td></tr>
<tr><td>Reg.Date:</td><td><input type="text" name="rdate" value="<?php echo date('d-m-Y');?>" readonly></td></tr>
<tr><td>Exp.Date:</td><td><input type="text" name="edate" value="<?php echo date('d-m-Y', strtotime('+35 days'));?>" readonly></td></tr>
 	 
<tr><td>Quantity:</td><td><input type="text" name="bqty" placeholder="bloodquantity" required></td></tr>
<tr><td>Status:</td><td><select name="bstatus" required><option>Selectstatus</option><option>Available</option><option>Expaired</option></select></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Register" name="Register"onclick="validate()"id="id">&nbsp;&nbsp;&nbsp;
<input type="reset" value="Reset" id="id" onclick="validate()"></td></tr>
</table></form></fieldset></div>
<?php
if($con)
{
$tod=date("Y-m-d");
$sql2="select * from blood";
$recordfound=mysql_query($sql2);
while($row=mysql_fetch_array($recordfound))
{
$bdate=$row['edate'];
if($tod==$bdate)
{
$sql1="Update blood set bstatus='Expaired'where edate='$bdate'";
$updated=mysql_query($sql1);
}
}
}
if(isset($_POST['Register'])){	
$bid=($_POST["bid"]);
$bdid=$_POST['bdid'];
$bg=$_POST['bg'];
$packno=$_POST['packno'];
$rhtype=$_POST['rhtype'];
$rdate=$_POST['rdate'];
$edate=$_POST['edate'];
$bqty=$_POST['bqty'];
$bstatus=$_POST['bstatus'];
$status="YES";
$Today=date("d-m-Y");
$NewDate=date("d-m-Y", strtotime("+35 days"));

		$date=date("d");
		$month=date('M');
		$year=date('Y');

if($con)
{
$sql="Insert into Blood values('$bid','$bdid','$bg','$packno','$packno','$Today','$NewDate','$bqty','$date','$month','$year','$bstatus','$status')";
$inserted=mysql_query($sql);
if($inserted)
echo "<div id=Success><img src='Images/success.jpg' height='20px'width='50px'/>You have Register the Blood Successfully!!</div>";
else	
echo "<div id=error><img src=' Images/err.png' height='20px'width='30px'/>You haven't register the Blood!!</div>".mysql_error();
}
else
die("Connection Failed:".mysql);
}
?>
</div></div></td>
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