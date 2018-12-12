<?php 
session_start();
include("Connection.php");
$logout_time=date("h:i:s");
$uid=$_SESSION['uid'];
$work_date=date('Y-m-d');
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['role']);
unset($_SESSION['login_time']);
if(!isset($_SESSION['username'])||!isset($_SESSION['password'])||!isset($_SESSION['role']))
{
$sql="update logfile  set logout_time='$logout_time' where uid='$uid' and date='$work_date' and logout_time='empty' "; 
$updated=mysql_query($sql);
if($updated)
header("location:LoginPage.php");
else
echo" Make Error ".mysql_error();
}	
?>
