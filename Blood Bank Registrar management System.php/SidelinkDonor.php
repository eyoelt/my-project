<html>
<head>
<style>
.dropbtn 
	{
	    background-color: #424766;
	    color: white;
	    width:200px;
	    height:50px;
	    margin-top:5px;
	    border-radius:15px;
	    font-family: times new roman;
	    border-color: 25px #0ea524;
	    font-size: 22px;
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
<?php
include("Connection.php");
$uid=$_SESSION['uid'];
?>
<div class="dropdown" style="float:left;">
<button class="dropbtn">Doner's Menue</button>
 <div class="dropdown-content" style="down:0;">
<a href="Questionaries0.php">Make Apointment</a><hr>				   	
<?php
$sql=mysql_query("select*from appointment where nurse_status='read' and doner_status='unread' and uid='$uid'",$con);
$count=mysql_num_rows($sql);

$sq=mysql_query("select*from nursedescription where nurse_status='unread' and doner_status='unread'  and uid='$uid'",$con);
$count1=mysql_num_rows($sq);	
if($count>0)
{
?>
<a href="nurseacceptresponse.php">View_Appoimnt<font size="4px" color="#16f40b">(<?php echo $count ;?>)</font></a><hr>
<?php
}
else
{
?>
<a href="nurseacceptresponse.php">View_Appoimnt<font size="4px" color="#16f40b">(<?php echo $count1 ;?>)</font></a><hr>
<?PHP
}
?>	
<a href="viewbloodtype.php">View Boold Type</a><hr>
<a href="ViewDonorProfile.php">View Profile</a><hr>
<a href="Changepassworddonor.php">Change Password</a><hr>
<a href="Comment.php">Give Comment</a><hr>
</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p style="margin-left:5px;"><img src="Images/7.jpg"style="float: left" width="190" height="230" title="Give Blood to Save Life"></p>
</body>
</html>