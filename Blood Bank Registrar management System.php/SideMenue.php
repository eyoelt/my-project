<html>
<head>
			<style>
			.dropbtn {
			background-color: #424766;
			color: white;
			width:200px;
			height:50px;
			margin-top:10px;
			border-radius:15px;
			border-color: 15px #0ea524;
			font-family: times new roman;
			font-size: 25px;
			transition: all 0.5s;
			cursor: pointer;
			border-radius: 4px;
			cursor: pointer;
			}
			.dropdown {
			position: relative;
			display: block;
			}
			.dropdown-content {
			position: absolute;
			right:5px;
			background-color: #424766;
			border-radius:7px;
			width:190px;
			line-height: 5px;
			z-index: 1;
			}
			.dropdown-content a {
			color: black;
			padding:20px;
			font-size: 20px;
			text-decoration: none;
			color: #804bed;
			display: block;
			}
			.dropdown-content a:hover {
			background-color: #8B4513;
			color: #fffbfb;
			}
			.dropdown:hover .dropdown-content {
			display: block;
			background-color:#424766; 
			text-shadow: 10px;
			color: #ebfafe;
			margin-left:180px;
			}
			</style>
</head>
<body>
<div class="dropdown" style="float:left;">
  <button class="dropbtn">Side Linkes</button>
  <div class="dropdown-content" style="down:0;">
    <a href="Announcement.php">Documents</a><br><hr>
    <a href="Download.php">Dounload</a><br><hr>
    <a href="Gallery.php">Gallery</a><br><hr>  
    <a href="#">Related Resources</a><hr> 
  </div>
</div><br><br>
</body>
</html>