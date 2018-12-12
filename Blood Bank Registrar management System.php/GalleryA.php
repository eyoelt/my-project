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
		include("AmharicMenue.php");
		?>
		</td></tr></table>
		</div>
<div id="content">
		<table border="0" width="1000" height="500"><tr><td width="150">
		<div id="sideleft">
<div style="text-align: center;">
<?php
include("TimeA.php");
?>	</div>
		<?php
		include("SideMenueA.php");
		?>
	<br><br><br><br><br><br><br><br><br>
	<p style="margin-left:5px;"><img src="Images/BBimage.jpg"width="191" height="320" title="Debremarkos blood bank Services"></p>
		</div>
		</td>
		<td width="300">
		<div style="width:600px;height: 600px;
		border:solid 4px #dldbeg;
		overflow:scroll;
		overflow-x:scroll">
		<div id="contentcenter">
			
<br><br><br>		  
		<h3 style="color:#147d98;background-color: #fff0f0;text-align: center;font-size: 25px;">
		ደብረ ማርቆስ የደም ባንክ አገልግሎቶች የፎቶ ጋለሪ</h3><br>  
		
<div class="main">
		<header>
		</header>
		<div class="item pic1">ሀ</div>
		<div class="item pic2">ለ</div>
		<div class="item pic3">መ</div>
		<div class="item pic4">ሠ</div>
		<div class="item pic5">ረ</div>
		<div class="item pic6">ሰ</div>
		<div class="item pic7">ሸ</div>
		<div class="item pic8">ቀ</div>
        <div class="item pic9">በ</div>
		<div class="item pic10">ተ</div>
</div>

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
		
<!--End The animation code here-->
		</div></td>
		<td width="150">
		<div id="sideright">
		<?php
		include("CalanderA.php");
		?>
		</div></td></tr></table>
</div>

		<table width="1000"><tr><td>
	
		<?php
		include("footerA.php");
		?>
		</td></tr></table>
		</div>
</body>
</html>