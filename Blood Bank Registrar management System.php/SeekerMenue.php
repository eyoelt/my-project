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
    font-size: 23px;
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
    font-size: 19px;
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
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
{
$photo=$_SESSION['Photo'];
$uid=$_SESSION['uid'];
$uname=$_SESSION['username'];
$role=$_SESSION['role'];
?>
<div class="dropdown" style="float:left;">
  	<button class="dropbtn">Seeker Menue</button>
  <div class="dropdown-content" style="down:0;">
	<a href="ViewAvailableBlood.php">View Blood</a><hr>
		<?php
			$sql="select * from request WHERE uid='$uid' and Status='yes' and Unread='yes'";
			$query= mysql_query($sql,$con)or die(mysql_error());
			$count=mysql_num_rows($query);
			$sql1="select * from request WHERE uid='$uid' and Status!=' ' and Unread='no'";
			$query1= mysql_query($sql1,$con)or die(mysql_error());
			$count1=mysql_num_rows($query1);
		if($count>0)
		{
		?>						
	<a href="Response.php">View Response<font size="4px" color="#16f40b">(<?php echo $count ;?>)</font></a><hr>	
	<?php }
	else
	{
	?>
	<a href="Response.php">View Response<font size="4px" color="#16f40b">(<?php echo $count1 ;?>)</font></a><hr>
	<?php
	}
	?>	
	
	<a href="Commentss.php">Give Comment</a> <hr>
	<a href="Changepasswordseeker.php">Change Password</a><hr>
	<a href="Viewseekerprofile.php">View Profile</a>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<h1 style="margin-left:5px;background-image: inherit;border-radius:5px;"><img src="Images/BloodImage_15.jpg"width="190"height="270" title="Seeker's Can Visit The site thorugh Online"></h1>
<?php
}
else
{
header("location:Index.php");
}
?>
</body></html>