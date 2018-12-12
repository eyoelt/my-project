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
    height:48px;
    margin-top:5px;
    border-radius:15px;
    border-color: 15px #0ea524;
    font-family: times new roman;
    font-size:22px;
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
    font-size: 18px;
    right:5px;
    background-color: #424766;
    border-radius:7px;
    width:190px;
    line-height: 3px;
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding:20px;
    font-size:18px;
     font-size: 18px;
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
		<button class="dropbtn">Manage Blood</button>
		<div class="dropdown-content" style="down:0;">
		<a href="BloodDetails.php">Register Blood</a><hr>
		<a href="ViewAvailableBloodLabtec.php">View_Aval.Blood</a><hr>
		<a href="ViewExpairedBloodLabtec.php">Veiw_Exp.Blood</a><hr>
		<?php
		$sql="select * from request WHERE Status='seekerseenaccept' and Unread='yes'";
		$query= mysql_query($sql,$con)or die(mysql_error());
		$count=mysql_num_rows($query);
		?>
		<a href="responsefrommanager.php">Distribute_Blood<font size="4px" color="#16f40b">(<?php echo $count ;?>)</font></a> <hr>
		<a href="Changepwnurse.php">Change Password</a> <hr>
		<a href="#">View Profile</a> <hr>
		<?php
		$query =mysql_query("select * from blood where bstatus='Available' && status='YES'");
		$count =mysql_num_rows($query);
		?>						
		</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p style="margin-left:5px;"><img src="Images/BloodImage_2.jpg"width="190" height="230" title="Test Blood safty and distribute"></p>
</body>
</html>