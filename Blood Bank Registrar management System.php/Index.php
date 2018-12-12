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
		<table width="1040px"><tr><td>
		<?php
		include("Menu2.php");
		?>
		</td></tr></table>
		</div>
<div id="content">
		<table border="0" width="1000" height="500"><tr><td width="150">
		<div id="sideleft"><br>
<div style="text-align:center;font-size:6px;;">
<?php
include("Time.php");
?>
</div>
<?php
include("SideMenue.php");
?>
	<br><br><br><br><br><br><br><br><br>
	<p style="margin-left:5px;"><img src="Images/BBimage.jpg"width="191" height="293" title="Debremarkos blood bank Services"></p>
		</div>
		</td>
		<td width="300">
		<div style="width:630px;height: 600px;margin-left:0px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
		<br/>
	<?php
	include("Animatimation.php");
	?>	
<h3 style="color:#147d98;background-color: #fff0f0;text-align: center;font-size: 25px;text-decoration: underline;">Debremarkos Blood Bank Services</h3><br>  
<p>Debremarkos blood bank is one of the Ethiopian Blood bank Services and it was established by the federal government and Amara regional state since in 2005 E.C This organization Provide blood for 14 client hospitals, these client hospitals Receive blood by full filling certain forms and getting permission from blood bank’s manager. <br><br>This organization was begun giving small capacity of blood service. The aim of the organization is to provide efficient service to user, to increase the capacity for providing blood to the recipient, to increases the number of blood donors by teaching the society and facilitating blood donating services. <br><br>From time to time the capacity of this bank is increasing but the bank was working with manual system and this makes the employee to fail with data redundancy and erroneous data storing. Generally this organization has established to save the life of people who are affected by these problems like accidents, cancer, sickle cell, premature surgery. <br><br>
Blood  is universally recognized as the most precious element that sustains life. It  saves innumerable lives across the world in a variety of conditions. The need  for blood is great - on any given day, approximately 39,000 units of Red Blood  Cells are needed. More than 29 million units of blood components are transfused  every year.<br><br>
Despite  the increase in the number of donors, blood remains in short supply during  emergencies, mainly attributed to the lack of information and accessibility.<br>
<img data-u="image" src="Images/3.jpg"/>
  </p>
 <center>
 <div class="pagination">
  <a href="#">&laquo;</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#">1</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#">2</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#">3</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#">4</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#">5</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#">6</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#">7</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#">8</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#">&raquo;</a>&nbsp;&nbsp;&nbsp;&nbsp;
</div></center>

		
		</div></td>
		<td width="150">
		<div id="sideright">
		<?php
		include("Calander.php");
		?>
		<?php
		//include("Visiters.php");
		?>
		</div></td></tr></table>
		</div>
		<table width="1000"><tr><td>
		<?php
		include("footer.php");
		?>
		</td></tr></table>
		</div></body></html>