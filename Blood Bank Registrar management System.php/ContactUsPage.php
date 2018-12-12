		<html>
		<head>
		<title>Contactus</title>
		<link rel="Stylesheet" type="text/css" href="setting.css">
		</head>
		<body>
<div id="container">
		<table><tr><td>
		<img src="Images/logoo.jpg"width="1065"height="135">
		</td></tr></table>
		<div id="navigationmenu">
		<table width="1040"><tr><td>
		<?php
		include("Menu2.php");
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
	include("SideMenue.php");
	?>
		<br><br><br><br><br><br><br><br><br><br>
		<?php
		include("CleientHospital.php");
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
	<center><table border="0px" align="center">
			<tr><td>
			<img src="Images/Phone.jpg" height="90%" width="100%"></td></tr><tr><td>
			<h2>Debremarkos Blood Bank Services<br>
			NAME:Group One IT4<sup>th</sup>year<br>
			EMAIL:IT4<sup>th</sup>@gmail.com<br>
			Phone Number:+251923771289<br>+251934680282</h2></td>
			</tr>
	</table></center>
	
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
</body>
</html>