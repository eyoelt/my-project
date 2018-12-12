<?php
session_start();
include("Connection.php");
?>
<html>
<head>
<title>requestform</title>
<link rel="Stylesheet" type="text/css" href="setting.css">
<link rel="stylesheet" href="stylesLogin.css">
<style type="text/css">
.ed{
border-style:solid;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
border-radius: 5px;
border-color:#0412c1;
padding:5px;
color: #ffffff;
font-family:times new roman;
background-color:#1c4186;
height: 30px;
width: 40px;
}
</style>
	<script>
	function validateForm() {
	var x = document.forms["myForm"]["fname"].value;
	if (x == "") {
	alert("Name must be filled out");
	return false;
	}
	}
	</script>
<SCRIPT>
function addCombo() {
var textb = document.getElementById("txtCombo");
var combo = document.getElementById("combo");
combo.value=combo.value +textb.value + ", ";
textb.value = " ";
}
</SCRIPT>
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
include("SeekerMenue.php");
?>
</div>
</td>
<td width="300">
<div style="width:645px;height: 600px;
border:solid 4px #dldbeg;
overflow: auto;">
<div id="contentcenter">	
<div class="loginBoxx">

<fieldset style="border-radius:25px;background-color:#e2e6fe;color:#20887d;height:550px;width:550px;margin-left:35px;">
<?php
$id=$_GET["bid"];
$sql=mysql_query("select*from blood where bid='$id'");
while($row=mysql_fetch_array($sql))
{
$bg=$row["bg"];	
$quantity=$row["bqty"];	
$bid=$row["bid"];
}

?>
<form action="" method="post">
<table border="0px" bgcolor="#fff9f9" width="500px">
<tr><td colspan="2"><h2 style="font-size:22px;text-align: center;">Send Blood Request 
<div style="float:right; margin-left:40px;"><a href="SeekerPage.php" title="Close"><img src="Images/close.jpg"></a></div></h2></td></tr>
<tr><td>Seeker_ID:</td><td><input type="text" name="uid" value="<?php echo $uid;?>" readonly/></td></tr>
<tr><td></td><td><input type="hidden" name="bid" value="<?php echo $bid;?>" readonly/></td></tr>
<tr><td>User_Name:</td><td><input type="text" name="uname" value="<?php echo $uname;?>" readonly/></td></tr>
<tr><td>Hosp_Name:</td><td><input type="text" name="Hname" placeholder="hosname" required/></td></tr>
<tr><td>Email:</td><td><input type="text" name="Hemail"required placeholder="email"/></td></tr>
<tr><td>Blood_Group:</td><td><input type="text" name="bg" value="<?php echo $bg;?>" readonly ></td></tr>
<tr><td>Quantity:</td><td><input type="text" name="bqty" value="<?php echo $quantity;?>" readonly></td></tr>
<tr><td>Request Date:</td><td><input type="text" name="Rqdate" value="<?php echo date('d-M-Y');?>" readonly> </td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Send"name="register" onclick="validate()"id="id">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" id="id" onclick="validate()"></td></tr>
</table></form></fieldset>
<?php
if(isset($_POST['register'])){
$uid=$_POST['uid'];	
$uname=$_POST['uname'];
$role=$_SESSION['role'];
$login_time=$_SESSION['login_time'];
$start_time = date("d M Y @ h:i:s");
$activity_type="Request";
$logout_time="empty";
$Hname=$_POST['Hname'];
$Hemail=$_POST['Hemail'];
$bg=$_POST['bg'];
$bqty=$_POST['bqty'];
$bid=$_POST['bid'];
$Rqdate=$_POST['Rqdate'];
$Today=date("d-M-Y");
$unread="no";
$Status="";
if($con)
{

$activity="Seeker Hospitals Send Requuest To BBManager [RequestNO:' ',Seeker ID:$uid,User Name:$uname,Hospital Name:$Hname,Blood Type:$bg,Quantity:$bqty,Request Date:$Rqdate]";	
$logsql="insert into logfile values(' ','$uid','$uname','$role','$login_time','$logout_time','$start_time','$activity_type','$activity','$ipaddress','$work_date')";	
	
$sql="Insert into request values(' ','$uid','$uname','$Hname','$Hemail','$bid','$bg','$bqty','$Rqdate','$unread','$Status')";
$inserted=mysql_query($sql)or die(mysql_error());
$inserted1=mysql_query($logsql);
if($inserted && $inserted1)
echo "<div id='Success'> <img src='Images/success.jpg'width='30'height='20'>Your Requst have been Sent Successfully!!</div>";
else	
echo "<div id=error>You haven't Sent the Request!!!:".mysql_error();
}
else
die("Connection Failed:".mysql);
}
?>
</div></div>
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