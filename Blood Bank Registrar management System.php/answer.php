<?php
session_start();
include("Connection.php");
?>
<html><head><title>SeekerPage</title>
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
		
				
<br/><div class="loginBoxx">
<fieldset style="border-radius: 25px;background-color: #e2e6fe;height:550px;margin-left:10px;width:595px;">
<form action="" method="post">
<table style="background-color: #e2e6fe;color: #fffbfb; width:570px;" height="270" border="0"><caption><marquee behavior="right" direction="right"  bgcolor="#147d98" scrollamount="1" height="20">MEDICAL HISTORY QUESTIONNARIES</marquee></caption><td>	
<table style="background-color: #e2e6fe;color: #0d0000;">

	<?php
	$sq="select *from quetionaries";
	$result = mysql_query($sq,$con);
	$Wronganswer=0;
	$Correctanswer=0;
	$total=mysql_num_rows($result);
	while($row = mysql_fetch_array($result))
	{
	$Ans=$row["correct"];
	$qid=$row["NO"];
	$selected=$_POST[$qid];
	if($selected==$Ans)
	$Correctanswer++;
	else	
	$Wronganswer++;
	}
	if($Correctanswer==$total)
	{
	header('Location: Donorappointment.php');	
	}
	else
	{
	$x='<script type="text/javascript">alert("Sorry!!Dear:- Customer You are Not Well To day Try in another Time!!!  Thank You Your Participation!!");
	window.location=\'Questionaries.php\';</script>';
	echo $x;
	}
	?>

</table>
</table>
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
</form>
</fieldset>
</body>
</html>