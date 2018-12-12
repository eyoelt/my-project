		<html>
		<head>
		<title>MissionandVisions</title>
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
		<td width="30">
		<div style="width:635px;height: 600px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
			<br>
<h2 style="font-size: 25px;color: #147d98;">Mission and Vision</h2>
<h3>Mission Statement</h3><p>
Blood Bank of Debremarkos mission is to serve our community by meeting the needs of patients, hospitals, and members for safe, high quality blood products and related services.
<h3>Vision Statement</h3>
Blood Bank of Debremarkos is committed to accomplishing its mission and meeting the challenges of the future by:
<ol type="1"><li>Anticipating and responding to customer needs.</li>
<li>Seeking opportunities for continuous improvement.</li>
<li>Building trust between the organization, its membership, and the community.</li>
<li>Providing education which enhances the understanding of transfusion medicine and the need for blood.</li>
<li>Enhancing the quality, efficiency, and effectiveness of the organization through teamwork.</li>
<li>Providing a work environment where individuals are valued and their contributions are recognized.</li></ol></p>

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
		</div></body></html>