<?php
$domain="localhost";
$dbuser="root";
$dbpass="";
$dbname="bbms";
$x=0;
mysql_connect($domain,$dbuser,$dbpass) or die(mysql_error());
if(mysql_select_db($dbname))
$x=1;
else
$x=2;
if($x==2)
{
	
mysql_query("create database bbms") or die(mysql_error());
		echo "<br><br><br>Your Database BBRMS is created Successfully";
}
else if($x==1)
{      

//create user table
mysql_query("create table user(uid varchar(30) primary key,FName varchar(30) not null,LName varchar(30) not null,Uemail varchar(30),UesrSex varchar(30),Userage int,UserPhoto varchar(100) )") or die(mysql_error());
echo "<br><br>User Table Created Successfully!!";

//create account table
mysql_query("create table account(uid varchar(30) primary key,foreign key(uid) references user(uid),UName varchar(30),password varchar(100),role varchar(30) not null,status int,pw_status varchar(30))") or die(mysql_error());
echo "<br><br>Account Table  Created Successfully!!";

//create feedback table
mysql_query("create table feedback(UID int primary key AUTO_INCREMENT,Fname varchar(30),Mname varchar(30),Lname varchar(30),email varchar(30),message longtext,date varchar(30),unread varchar(30))") or die(mysql_error());
echo "<br><br>Feedback Table Created Successfully!!";

//create BloodDonor table
mysql_query("create table BloodDonor(did varchar(30) primary key,fname varchar(30),lname varchar(30),email varchar(30),occp varchar(30),dbdate varchar(30),dsex varchar(5),dage int,city varchar(30),region varchar(30),UserPhoto varchar(30),dstatus varchar(30))") or die(mysql_error());
echo "<br><br>Blood Donor Table Created Successfully!!";

//create Blood table
mysql_query("create table Blood(bid varchar(30) primary key,did varchar(30),foreign key(did) references BloodDonor(did),bg varchar(30),packno varchar(30),rdate varchar(30),edate varchar(30),bqty varchar(30),bstatus varchar(30))") or die(mysql_error());
echo "<br><br>Blood Details Table Created Successfully!!";

//create Blood Seeker table
mysql_query("create table BloodSeeker(sid varchar(30) primary key,sfname varchar(30),slname varchar(30),sage int,ssex varchar(30),semail varchar(30),hname varchar(30),website varchar(50),sstatus int,UserPhoto varchar(50))") or die(mysql_error());
echo "<br><br>Blood Seeker Table Created Successfully!!";

//create Blood request table
mysql_query("create table request(Rqid int primary key AUTO_INCREMENT,sid varchar(30),foreign key(sid) references BloodSeeker(sid),uid varchar(30),foreign key(uid) references account(uid),hname varchar(30),Hemail varchar(30),bid varchar(30),foreign key(bid)references Blood(bid),bg varchar(30),bqty varchar(30),Rqdate varchar(30),Unread varchar(30),status varchar(30))") or die(mysql_error());
echo "<br><br>Hospital request Table Created Successfully!!";

//create appointment table
mysql_query("create table appointment(appid int primary key AUTO_INCREMENT,did varchar(30),foreign key(did) references BloodDonor(did),uid varchar(30),foreign key(uid) references account(uid),phone int,aptime time,apdate varchar(30),nurse_status varchar(30),donor_status varchar(30),nursereject_status varchar(30))") or die(mysql_error());
echo "<br><br>Donor Appointment Table Created Successfully!!";

//create quetionaries table
mysql_query("create table quetionaries(NO int primary key AUTO_INCREMENT,uid varchar(30),foreign key(uid) references account(uid),UName varchar(30),Quetion varchar(30),Option1 varchar(30),Option2 varchar(30),correct varchar(30),Pdate varchar(30))") or die(mysql_error());
echo "<br><br>Donor Quetionary Table Created Successfully!!";

//create Donation table
mysql_query("create table donation(DonID int primary key AUTO_INCREMENT,bid varchar(30),foreign key(bid)references Blood(bid),did varchar(30),foreign key(did) references BloodDonor(did),uid varchar(30),foreign key(uid) references account(uid),ABO varchar(30),RH varchar(30),Height int,Weight int,BMI int,PackNo varchar(30),Quantity varchar(30),TypeDonation varchar(30),BloodP varchar(30),ReDate varchar(30),ExpDate varchar(30),Status varchar(30))") or die(mysql_error());
echo "<br><br>Donor Donation Table Created Successfully!!";

//create Notices table
mysql_query("create table Notices(Nid int primary key AUTO_INCREMENT,uid varchar(30),foreign key(uid) references account(uid),UName varchar(30),nrole varchar(30),title varchar(30),content varchar(3000),date varchar(30),exdate varchar(30),unread varchar(30))") or die(mysql_error());
echo "<br><br>Administrator Notices Table Created Successfully!!";

//create nursedescription table
mysql_query("create table nursedescription(appid int primary key AUTO_INCREMENT,did varchar(30),foreign key(did) references BloodDonor(did),uname varchar(30),phone int,aptime time,apdate varchar(30),description varchar(3000),nurse_status varchar(30),doner_status varchar(30))") or die(mysql_error());
echo "<br><br>Nurse Description Table Created Successfully!!";

//create Logtable table
 mysql_query("create table LogFile(lig_id  int PRIMARY key AUTO_INCREMENT,uid varchar(30),foreign key(uid) references account(uid),username VARCHAR(30),role VARCHAR(30),login_time VARCHAR(30),logout_time VARCHAR(30),start_time VARCHAR(30), activity_type VARCHAR(30),activity_performed VARCHAR(20000),ip_address VARCHAR(50),date varchar(30))") or die(mysql_error());
echo "<br><br>LogFile Table Created Successfully!!";

}
?>
