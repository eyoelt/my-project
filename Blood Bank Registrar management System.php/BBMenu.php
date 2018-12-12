<?php
include("Connection.php");
?>
<html>
<head>
<style>
.dropbtn {
    background-color: #424766;
    color: white;
    width:200px;
    height:50px;
    margin-top:5px;
    border-radius:15px;
    border-color: 15px #0ea524;
    font-family: times new roman;
    font-size: 19px;
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
    font-size:18px;
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
  	<button class="dropbtn">BBManager Menue</button>
  <div class="dropdown-content" style="down:0;">
			<a href="BBRigisterSeeker.php">Register Seeker</a><hr>
			<?php
			$sql="select * from request where Unread='no' and Status=' '";
			$query = mysql_query($sql,$con);
			$count =mysql_num_rows($query);
			?>						
			<a href="Recieverequest.php">RecieveRequest<font size="4px" color="#16f40b">(<?php echo $count ;?>)</font></a><hr>
		    <a href="RetriveReport.php">View Report</a><hr>
		    <a href="viewblood.php">View Blood</a><hr>
		    <a href="ViewDonor.php">View Donor</a> <hr>
		    <a href="ViewSeeker.php">View Seeker</a> <hr>
		    <a href="Notices.php">Send Notices</a><hr>
		    <?php
			$sql="select * from feedback where unread='yes'";
			$query = mysql_query($sql,$con);
			$coun =mysql_num_rows($query);
			?>						
		<a href="ViewFeedback.php">View Comment<font size="4px" color="#16f40b">(<?php echo $coun ;?>)</font></a><hr>
	
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p style="margin-left:5px;"><img src="Images/31.jpg"width="191" height="140" title="You can get blood to save life"></p>
</body>
</html>