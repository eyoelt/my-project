<?php
session_start();
include("Connection.php");
?>
<html>
<head>
<title>LoginPage</title>
<link rel="stylesheet" href="stylesLogin.css">
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
		include("Menu2.php");
	?>
	</td></tr></table>
	</div>
	<div id="content">
	<table border="0" width="1000" height="500"><tr><td width="150">
	<div id="sideleft">
	<div style="text-align: center;">
	<?php
	include("Time.php");
	?>
	</div>
		<?php
		include("SideMenue.php");
		?>
<br><br><br><br><br><br><br><br><br>
<p style="margin-left:5px;"><img src="Images/BBimage.jpg"width="191" height="297" title="Debremarkos blood bank Services"></p>
		
 <div class="loginBox">
 		
 <img src="Images/login.jpg" class="user"/>
<br><h2 class="h2" style="color:#ffffff;"><b>LOGIN HERE</b></h2>
<form name="form" action="" method="post">
<p style="color: #ffffff;">USER NAME</p><input  type="text" name="username"placeholder="Enter Your user name" pattern="[a-zA-Z0-9_-]+" autofocus required onblur="unameError()"/>
<p style="color: #ffffff;">PASSWORD</p><input type="password" name="password" id="myInput" value="" placeholder="Enter ....." pattern="[a-zA-Z0-9_-]+" onblur="pwderror()" required/>
Show Password<input type="checkbox" onclick="myFunction()" id="box"/>
<input type="Submit" name="Login" value="Login" onclick="validate(" id="id"/>
<input type="Reset" name="Cancel" value="Cancel" onclick="validate(" id="id"/><br>
<a href="#"><b>Forget Your Password?</b></a>
</form>
 	
<?php
function encryptpassword($password ) 
{
$cryptKey='qJB0rGtIn5UB1xG03efyCp';
$passwordEncoded= base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $password, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
return( $passwordEncoded );
}
	if(isset($_POST['Login']))
{
$uname=$_POST['username'];
$pass=$_POST['password'];
$password=encryptpassword($pass);

	if($con)
	{
	$sql="select * from account where UName='$uname' and password='$password' and status='1'";
	$matchfound=mysql_query($sql,$con);
$userexist=mysql_num_rows($matchfound);
if($userexist>0)
{
		while($row=mysql_fetch_assoc($matchfound))
		{
		//$username=$row['UName'];
		$password=$row['password'];
		$role=$row['role'];
		$uid=$row['uid'];
		$uname=$row['UName'];
		//$photopath=$row["UserPhoto"];
	    $changepw=$row["pw_status"];	
		 }
	if($changepw=="NO")
	{
	$_SESSION['userid']=$uid;
	$_SESSION['oldpassword']=$password;
	$_SESSION['UName']=$uname;
	header("location:ChangepasswordUser.php");			
		}
		else
		{
	$sq="select * from user where uid='$uid'";
	$result1=mysql_query($sq,$con);
	while($row1=mysql_fetch_assoc($result1))
	{
	$photopath=$row1["UserPhoto"];
	$fname=$row1["FName"];
	$lname=$row1["LName"];
	
	}
		$_SESSION['password']=$password;
		$_SESSION['role']=$role;
		$_SESSION['uid']=$uid;
		$_SESSION['fname']=$fname;
		$_SESSION['lname']=$lname;
		$_SESSION['username']=$uname;
		$_SESSION['Photo']=$photopath;

$login_time = date("h:i:s");
$_SESSION['login_time']=$login_time;
	
	if($_SESSION['role']=="Admin")
	header("location:Adminstrator.php");
	else if($_SESSION['role']=="BBmanager")
	header("location:BBmanagerPage.php");
	else if($_SESSION['role']=="Donor")
	header("location:DonorPage.php");
	else if($_SESSION['role']=="Seeker")
	header("location:SeekerPage.php");
	else if($_SESSION['role']=="Labtecn")
	header("location:Labtecpage.php");
	else if($_SESSION['role']=="Nurse")
	header("location:Nursepage.php");
	}
	}
	else
	{
	echo "<div id=error><img src=' Images/err.png' height='20px'width='30px'/>Please Enter Correct Username and Password!!</div>".mysql_error();
	}
	}
	else
	echo "<div id=error>Connection Failed!!";		   
	}
	?>	
</div>

	<script>
function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
x.type = "text";
} else {
x.type = "password";
}
}			
function unameError(){
if(document.form.username.value==""){
alert("Please fill-in your User name first!!");
document.form.fname.focus();
}
if(isNaN(document.form.username.value)==false){
alert("User Name is only Character!!");
document.form.fname.select();
}
}
function pwderror(){
if(document.form.password.value.length<6){  
alert("Password must be at least 6 Characters Long.");  
document.form.password.focus();
return false;
}
}
function validate(){
var x=document.form.username.value;
var y=document.form.password.value;
if(x==""||y==""){
alert("Pelase fill All Fields first!!")
}
}
</script>

		</div></div></td>
		<td width="150"><div id="sideright">
		<?php
		include("Calander.php");
		?>
		</div>
		</td>
		</tr></table>
		</div>
		<table width="1000"><tr><td>
		<?php
		include("footer.php");
		?>
		</td></tr></table>
		</div>
		</body>
		</html>