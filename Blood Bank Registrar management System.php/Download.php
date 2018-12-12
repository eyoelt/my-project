		<html>
		<head>
		<title>home page</title>
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
	?>	</div>
		<?php
		include("SideMenue.php");
		?>
		<br><br><br><br><br><br><br><br><br>
	<p style="margin-left:5px;"><img src="Images/BBimage.jpg"width="191" height="297" title="Debremarkos blood bank Services"></p>
		</div>
		</td>
		<td width="30">
		<div style="width:600px;height: 600px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
<div id="contentcenter">			
<p>
<div style="width:640px;
height:600px;
line-height:3em;
overflow:scroll;
padding:5px;">
<center>
<h3> You Can DownLoad Documentes </h3>
<table border="0">
<tr><td>1.&nbsp;&nbsp;<a href="pdf/BBMS1.pdf" target="_blank"><img src="pdf/1.jpg"  width="60" height="60"></a>-------------------------------->
<a href="pdf/BBMS2.pdf" target="_blank">Download </a></td></tr>
<tr><td>2.&nbsp;&nbsp;<a href="pdf/Gadis Kebede.pdf" target="_blank"><img src="pdf/1.jpg"  width="60" height="60"></a>-------------------------------->
<a href="pdf/BBMS1.pdf" target="_blank">Download </a></td></tr>
<tr><td>3.&nbsp;&nbsp;<a href="pdf/BBMS2.pdf" target="_blank"><img src="pdf/1.jpg"  width="60" height="60"></a>-------------------------------->
<a href="pdf/Gadis Kebede.pdf" target="_blank">Download </a></td></tr>
<tr><td>4.&nbsp;&nbsp;<a href="#" target="_blank"><img src="pdf/1.jpg"  width="60" height="60"></a>-------------------------------->
<a href="#" target="_blank">Download </a></td></tr>
<tr><td>5.&nbsp;&nbsp;<a href="#" target="_blank"><img src="pdf/1.jpg"  width="60" height="60"></a>-------------------------------->
<a href="pdf/BBMS2.pdf" target="_blank">Download </a></td></tr>
<tr><td>6.&nbsp;&nbsp;<a href="pdf/BBMS2.pdf" target="_blank"><img src="pdf/1.jpg"  width="60" height="60"></a>-------------------------------->
<a href="pdf/Gadis Kebede.pdf" target="_blank">Download </a></td></tr>
</table>
</center>
</object><br><br>
</div>
</p>	
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
</body>
</html>