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
    line-height: 3px;
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding:20px;
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
		<button class="dropbtn">Manage Account</button>
		<div class="dropdown-content" style="down:0;">
		<a href="AdminRegisterUser.php">Register User</a><hr>
		<a href="AdminCreateAccount.php">Create Account</a><hr>
		<a href="UpdateAccount.php">Block Account</a><hr>
		<a href="ViewUsers.php">View User's</a> <hr>
		<a href="ViewAccount.php">View Account</a><hr>
		<a href="Changepwadmin.php">Change Password</a><hr>
		<a href="Reportbbm.php">Retrive Report</a><hr>
		<a href="Backup.php">Take Back Up</a><hr>
		<a href="Restore.php">Restore Back Up</a><hr>
		<a href="ViewUsersActivity.php">View_User_Activity</a><hr>
		</div>
</div>
	<!--	<script>
		setTimeout(function(){
		window.location.reload(1);
		}, 30000);
		</script> -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p style="margin-left:5px;"><img src="Images/45.jpg"width="190" height="75" title="Manage All Blood Bank Users"></p>
</body>
</html>