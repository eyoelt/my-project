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
	<p style="margin-left:5px;"><img src="Images/BBimage.jpg"width="191" height="296" title="Debremarkos blood bank Services"></p>
	</div>
	</td>
	<td width="30">
	<div style="width:640px;height: 600px;
	border:solid 4px #dldbeg;
	overflow:scroll;
	overflow-x:scroll">
	<div id="contentcenter">	
	<object data="pdf/BBMS2.pdf" type="application/pdf" width="690" height="450">
	</object><br><br>
<center>
<div class="pagination">
<a href="#">&laquo;</a>&nbsp;&nbsp;&nbsp;
<a href="#">1</a>&nbsp;&nbsp;&nbsp;
<a href="annoucements1.php">2</a>&nbsp;&nbsp;&nbsp;
<a href="#">3</a>&nbsp;&nbsp;&nbsp;
<a href="#">4</a>&nbsp;&nbsp;&nbsp;
<a href="#">5</a>&nbsp;&nbsp;&nbsp;
<a href="#">6</a>&nbsp;&nbsp;&nbsp;
<a href="#">&raquo;</a>&nbsp;&nbsp;&nbsp;
</div></center>
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