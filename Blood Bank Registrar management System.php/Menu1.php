<?php
include("Connection.php");
?>
<html>
<head>
<title> menu1</title>
<meta name="" content="">
<link type="text/css" rel="stylesheet" href="mystyle.css">
</head>
<body>
<div id="menu">
<ul>
<li><a href="#">HOME</a></li>
<li><a href="#">ABOUT US<span id="darrow">&#9660;</span></a>
<ul>
        <li><a  href="#">Mission & Vission</a></li>
          <li><a  href="#">Blood Tips</a></li>
		</ul>
		</li>
	<li><a  href="#">CONTACT US</a></li>
	<li><a href="#">NOTICES</a></li>
	<li><a  href="#">HELPS</a></li>
	<li><a  href="#">LANGUAGES<span id="darrow">&#9660;</span></a>
<ul>
        <li><a  href="#">English</a></li>
		<li><a  href="#">አማርኛ</a></li>
	
</ul></li>
<li><a  href="Logoutpage.php">LOGOUT</a></li>
</ul>
</div>
</body>
</html>