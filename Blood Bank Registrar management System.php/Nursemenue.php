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
    font-size:19px;
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
  	<button class="dropbtn">Manage Donors</button>
  <div class="dropdown-content" style="down:0;">  
  			<a href="DonorRegistration.php">Register Donor</a><hr>
			<a href="donation.php">Register Donation</a><hr>
			<?php
			$sql="select * from appointment WHERE nurse_status='unread' and doner_status='unread' and nursereject_status='no'";
			$query= mysql_query($sql,$con);
			$count=mysql_num_rows($query);
			?>						
			<a href="ViewAppointment.php">Recieve Appnt<font size="4px" color="#16f40b">(<?php echo $count ;?>)</font></a><hr>
		    <a href="#">Retrive Report</a><hr>
		    <a href="viewbloodnurse.php">View Blood</a><hr>
		    <a href="ViewDonornures.php">View Donor</a> <hr>
		    <a href="Updatedonor.php">Update Donor</a><hr>
		    <a href="QuestionariesForm.php">Set Questionary</a><hr>
		  
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div style="margin-left:5px;">
<?php 
include("Animateside.php");
?>
	
</div>
</body>
</html>