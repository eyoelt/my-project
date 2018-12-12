<?php
include("Connection.php");
session_start();
?>
<html>
<head>
<title>SeekerPage</title>
<link rel="Stylesheet" type="text/css" href="setting.css">
<link rel="stylesheet" href="stylesLogin.css">
<link rel="Stylesheet" type="text/css" href="Setting11.css">
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
?>
</div>
	<?php
	include("SidelinkDonor.php");
	?>
</div></td>
		<td width="300">
		<div style="width:640px;height: 600px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
		
				
<div class="loginBoxx">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;height: auto;width: auto;">
<div id="customers">
<table style="background-color: #e2e6fe;color: #fffbfb; width:570px;" height="270" border="0"><caption><marquee behavior="right" direction="right"  bgcolor="#147d98" scrollamount="1" height="20">MEDICAL HISTORY QUESTIONNARIES</marquee></caption><td>	
<table width="600px"  style="background-color: #e2e6fe;color: #0d0000;" border="1">

<?php
$number=0;
$sql="select *from quetionaries";
$result = mysql_query($sql,$con);
if(mysql_num_rows($result)>0)
{
while($row = mysql_fetch_array($result))
{
$qid=$row["NO"];
$question=$row["Quetion"];
$option1=$row["Option1"];
$option2=$row["Option2"];
$number++;
?>
<form action="answer.php" method="post" > 
<tr><td><?php echo $number;?>.</td>
<td width="400"><?php echo $question;?></td>
<td><input type="radio" name="<?php echo $qid;?>" value="YES" /><?php echo $option1;?> </td>
<td><input type="radio" name="<?php echo $qid;?>" value="NO" /><?php echo $option2;?> </td></tr>
<?php
}
?>
<tr><td></td><td><input type="submit" name="Submit" value="Send"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Cancel"/></td><td colspan="2"></td></tr>
</form>

</table>  
<?php
}
echo"No quetionaries posted";
?>

</div></table></fieldset></div></div></div>
</td><td width="150">
<div id="sideright">
<?php
include("Calander.php");
?>
</div></td></tr></table></div>
<table width="1000"><tr><td>
<?php
include("footer.php");
?>
</td>
</tr>
</table>
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