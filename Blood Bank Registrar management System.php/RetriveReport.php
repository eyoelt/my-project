<?php
session_start();
include("Connection.php");
?>
<html>
<head>
<title>DateencoderRegisterBlood</title>
<link rel="Stylesheet" type="text/css" href="setting.css">
<link rel="stylesheet" href="stylesLogin.css">
<link rel="Stylesheet" type="text/css" href="Setting11.css">
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
include("BBMenu.php");
?>
</div>
</td>
<td width="300">
<div style="width:625px;height: 600px;
border:solid 4px #dldbeg;
overflow: auto;">
<div id="contentcenter">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;color:#147d98;height: auto;width: auto;">	
<div id="customers">
<?php
if(!isset($_POST['search']))
{
?>

<form action=" " method="post">
<table style="margin-top: 10px;width:600px;">
<tr><td><font size="5px">Select Your Time To View Blood Report</font></td></tr>
<tr><td><input type="submit" value="View" name="search" style="background-color: #badcdb;width: 100px;height: 35px;">
<font size="5px"><select name="selecttime" style="width: 250px;height: 35px;">
<option selected="selected" value="">Select Time</option>
<option value="Daily">Daily</option><option value="Year">Year</option></font>
<option value="month">Month</option>
</select></td></tr>
</table>	
</form>	

<?php
}
?>
<?php
if(isset($_POST['search']))
{
$selecttime=$_POST["selecttime"];
if($selecttime=='Daily')
{

$query2="select * from blood where rdate='".date("d")."'";
$recordfound1=mysql_query($query2);
if($recordfound1)
{   $total=0;
$count="select * from blood where bstatus='Available' and rdate='".date("d")."'";

$querycount=mysql_query($count);
$Available = mysql_num_rows($querycount);
$count2="select * from blood where bstatus='Expaired' and rdate='".date("d")."'";
$querycount2=mysql_query($count2);
$Expaired = mysql_num_rows($querycount2);
$total=$Available+$Expaired;
?>
<br>
<table border="1"cellpadding="0"cellspacing="0" style="margin-left:0px;">
<tr><td colspan="5"><h3><center>The Report For the Day&nbsp;&nbsp;&nbsp;<?php echo date("d");?></center></h3></td></tr>
<tr><td>Blood ID</td><td>Donor ID</td><td>Blood Group</td><td>Pack NO</td><td>Registed Date</td><td>Expaired Date</td><td>Quantity</td><td>Status</td></tr>	

<?php
while($row2=mysql_fetch_assoc($recordfound1))
echo "<tr> <td>". $row2["bid"]."</td><td>".$row2["bdid"]."</td><td>".$row2["bg"]."</td>
<td>". $row2["packno"]."</td><td>". $row2["rdate"]."</td><td>". $row2["edate"]."</td><td>". $row2["bqty"]."</td><td>". $row2["bstatus"]."</td></tr>";
?>	
<tr><td colspan="2">Available Blood=<?php echo $Available;?></td><td colspan="2">Expaired Blood=<?php echo $Expaired;?></td>
<td colspan="2">Total NO of Blood=<?php echo $total;?></td></tr>	
</table>
<br>
<?php
include("Print.php");
?>
<?php
}
}	

else if($selecttime=='month')
	{
	$query2="select * from blood where month='".date("M")."'";
	$month1=mysql_query($query2);
	if($month1)
	{   $total=0;
	$count="select * from blood where bstatus='Available' and month='".date("M")."'";
	$querycount=mysql_query($count);
	$Available = mysql_num_rows($querycount);
	$count2="select * from blood where bstatus='Expaired' and month='".date("M")."'";
	$querycount2=mysql_query($count2);
	$Expaired = mysql_num_rows($querycount2);
	$total=$Available+$Expaired;
	?>
	<br>
	<table border="1"cellpadding="0"cellspacing="0" style="margin-left:0px;">
	<tr><td colspan="5"><h3><center>The Report For the Month&nbsp;&nbsp;&nbsp;<?php echo date("M");?></center></h3></td></tr>
	<tr><td>Blood ID</td><td>Donor ID</td><td>Blood Group</td><td>Pack NO</td><td>Registed Date</td><td>Expaired Date</td><td>Quantity</td><td>Status</td></tr>	
	<?php
	while($row2=mysql_fetch_assoc($month1))
	echo "<tr> <td>". $row2["bid"]."</td><td>".$row2["bdid"]."</td><td>".$row2["bg"]."</td>
	<td>". $row2["packno"]."</td><td>". $row2["rdate"]."</td><td>". $row2["edate"]."</td>
	<td>". $row2["bqty"]."</td><td>". $row2["bstatus"]."</td></tr>";
	?>	
	<tr><td colspan="2">Available Blood=<?php echo $Available;?></td><td colspan="2">Expaired Blood=<?php echo $Expaired;?></td>
	<td colspan="2">Total NO of Blood=<?php echo $total;?></td></tr>	
	</table>
	<br>
	<?php
	include("Print.php");
	?>
	<?php
	}
	}
else if($selecttime=='Year')
	{
	$query2="select * from blood where year='".date("Y")."'";
	$totalyear=mysql_query($query2);
	if($totalyear)
	{   
	$total=0;
	$count="select * from blood where bstatus='Available' and year='".date("Y")."'";
	$querycount=mysql_query($count);
	$Available = mysql_num_rows($querycount);
	$count2="select * from blood where bstatus='Expaired' and year='".date("Y")."'";
	$querycount2=mysql_query($count2);
	$Expaired = mysql_num_rows($querycount2);
	$total=$Available+$Expaired;
	?>
	<br>
	<table border="1"cellpadding="0"cellspacing="0" style="margin-left:0px;">
<tr><td colspan="6"><h3><center>Blood Informations On The Year &nbsp;&nbsp;&nbsp;<?php echo date("Y");?></center></h3></td></tr>
	<tr><td>Blood ID</td><td>Donor ID</td><td>Blood Group</td><td>Pack NO</td><td>Registed Date</td>
	<td>Expaired Date</td><td>Quantity</td><td>Status</td></tr>	
	<?php
	while($row2=mysql_fetch_assoc($totalyear))
	echo "<tr> <td>". $row2["bid"]."</td><td>".$row2["bdid"]."</td><td>".$row2["bg"]."</td>
	<td>". $row2["packno"]."</td><td>". $row2["rdate"]."</td><td>". $row2["edate"]."</td>
	<td>". $row2["bqty"]."</td><td>". $row2["bstatus"]."</td></tr>";
	?>	
	<tr><td colspan="3">Available Blood=<?php echo $Available;?></td><td colspan="3">Expaired Blood=<?php echo $Expaired;?></td>
	<td colspan="3">Total NO of Blood=<?php echo $total;?></td></tr>	
	</table>
	<?php
	include("Print.php");
	?>
	<br>
	<?php
	}
	}
else
{
echo"There is no Blood in Your Stock!!";
}
}	
?>
</div></fieldset></div></div>
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