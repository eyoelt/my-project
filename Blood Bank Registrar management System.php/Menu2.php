<?php
include("Connection.php");
?>
<html>
<head>
<title> menu2</title>
<meta name="" content="">
<link type="text/css" rel="stylesheet" href="mystyle.css">
</head>
<body>
<div id="menu">
<ul>
<li><a href="Index.php">HOME</a></li>
<li><a href="#">ABOUT US<span id="darrow">&#9660;</span></a>
<ul>
        <li><a  href="MissionandVisions.php">Mission&Vission</a></li>
          <li><a  href="BloodTips.php">Blood tips</a></li>
		</ul>
		</li>
	<li><a  href="ContactUsPage.php">CONTACT US</a></li>
	
	<?php
		$date=date('Y-m-d');
			$sql="SELECT * from Notices where exdate>='$date' ORDER BY date ASC" or die(mysql_error());
			$query = mysql_query($sql,$con);
			$coun =mysql_num_rows($query);
			?>						
		<li><a href="Viewnotices.php">NOTICES<font size="4px" color="#16f40b">(<?php echo $coun ;?>)</font></a></li>
		
	<li><a  href="pdf/Help.pdf">HELPS</a></li>
	<li><a  href="#">LANGUAGES<span id="darrow">&#9660;</span></a>
<ul>
        <li><a  href="Index.php">English</a></li>
		<li><a  href="IndexA.php">አማርኛ</a></li>
	
</ul></li>
<li><a  href="LoginPage.php">LOGIN</a></li>
</ul>
</div>
</body>
</html>