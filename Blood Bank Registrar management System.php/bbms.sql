-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 11:56 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbms`
--
CREATE DATABASE IF NOT EXISTS `bbms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bbms`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `uid` varchar(30) NOT NULL,
  `UName` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(30) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `pw_status` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`uid`, `UName`, `password`, `role`, `status`, `pw_status`) VALUES
('4554', 'Abebe', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Nurse', 0, 'YES'),
('D447', 'admin ', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Adminstrator', 1, 'YES'),
('D448', 'Belay', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Seeker', 1, 'YES'),
('D449', 'Melkie', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Labtecn', 1, 'YES'),
('D450', 'Tsegaye', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Donor', 1, 'YES'),
('S206', 'Tigist', 'rEqbiBtYxeOa4ZSRiIuwkVh532h7w2Ldbgtv+UJ47ek=', 'Seeker', 1, 'NO'),
('S210', 'Abebe', 'E+5/EWa+nTAxJpMU6AZv4idgMlXBalZ/a4+zYEC9Np8=', 'Labtecn', 1, 'YES'),
('U100', 'Kebie', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Admin', 1, 'YES'),
('U101', 'Endale', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'BBmanager', 1, 'YES'),
('U102', 'Binalf', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Donor', 1, 'YES'),
('U103', 'Sewareg', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Seeker', 1, 'YES'),
('U104', 'Mulur', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Nurse', 1, 'YES'),
('U111', 'Abie', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Donor', 1, 'NO'),
('U113', 'chalie', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Seeker', 1, 'YES'),
('U333', 'Abebe', 'XnCOFXzvzFGHXS/GZ5kVEZ9PAE2N+oCeqydK87yGuwo=', 'Labtecn', 0, 'NO'),
('U334', 'kabdsew', 'E+5/EWa+nTAxJpMU6AZv4idgMlXBalZ/a4+zYEC9Np8=', 'Labtecn', 1, 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appid` int(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `aptime` varchar(30) NOT NULL,
  `apdate` varchar(3000) NOT NULL,
  `nurse_status` varchar(30) NOT NULL,
  `doner_status` varchar(30) NOT NULL,
  `nursereject_status` varchar(20) NOT NULL,
  PRIMARY KEY (`appid`),
  KEY `did` (`uid`),
  KEY `did_2` (`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appid`, `uid`, `uname`, `phone`, `aptime`, `apdate`, `nurse_status`, `doner_status`, `nursereject_status`) VALUES
(1, 'U102', 'Binalf', '+251934663221', '02:00', '2018-06-02', 'read', 'read', 'donerseereject'),
(2, 'U102', 'Binalf', '+251923456678', '14:01', '2018-06-02', 'unread', 'read', 'donerseereject'),
(3, 'D450', 'Tsegaye', '+251923456890', '09:03', '2018-06-01', 'read', 'read', 'donerseereject'),
(4, 'U102', 'Binalf', '+251989789999', '02:00', '2018-05-31', 'unread', 'read', 'donerseereject'),
(5, 'U102', 'Binalf', '+251976889000', '05:00-20', '2018-06-22', 'unread', 'read', 'donerseereject'),
(6, 'U102', 'Binalf', '+251976889000', '06:00-06:15', '2018-06-21', 'unread', 'read', 'donerseereject'),
(7, 'U102', 'Binalf', '+251976889000', '07:05-07:20', '2018-06-06', 'unread', 'read', 'donerseereject'),
(8, 'U102', 'Binalf', '+251923771289', '08:00-08:15', '2018-06-02', 'unread', 'unread', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE IF NOT EXISTS `blood` (
  `bid` varchar(30) NOT NULL,
  `bdid` varchar(30) DEFAULT NULL,
  `bg` varchar(30) DEFAULT NULL,
  `rhtype` varchar(30) NOT NULL,
  `packno` varchar(30) DEFAULT NULL,
  `rdate` varchar(30) DEFAULT NULL,
  `edate` varchar(30) DEFAULT NULL,
  `bqty` varchar(30) DEFAULT NULL,
  `date` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `bstatus` varchar(30) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`bid`),
  KEY `bdid` (`bdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bid`, `bdid`, `bg`, `rhtype`, `packno`, `rdate`, `edate`, `bqty`, `date`, `month`, `year`, `bstatus`, `status`) VALUES
('B001', 'D445', 'AB', 'RH+', 'P100', '29-05-2018', '03-07-2018', '300', '29', 'May', '2018', 'Available', 'NO'),
('B003', 'U102', 'AB', 'P100', 'P100', '31-05-2018', '05-07-2018', '300', '31', 'May', '2018', 'Available', 'YES'),
('B220', 'D440', 'A', '', 'P100', '18-04-16', '18-05-21', '300ML', '', '', '', 'Available', 'NO'),
('B221', 'D441', 'B+', '', 'P100', '18-04-16', '18-05-21', '350ML', '', '', '', 'Available', 'NO'),
('B222', 'D442', 'AB-', 'RH+', 'P200', '18-04-16', '18-05-21', '450ML', '', '', '', 'Available', 'YES'),
('B223', 'D443', 'O', 'RH-', 'P200', '18-04-16', '18-05-21', '400ML', '', '', '', 'Available', 'YES'),
('B224', 'D444', 'AB', '', 'P100', '18-04-16', '18-05-21', '450ML', '', '', '', 'Expaired', 'NO'),
('B225', 'D440', 'B', 'RH+', 'P100', '18-04-16', '18-05-21', '450ML', '', '', '', 'Expaired', 'NO'),
('B226', 'D440', 'AB+', '', 'P100', '25-04-2018', '30-05-2018', '300ML', '', '', '', 'Available', 'YES'),
('B231', 'D443', 'A', 'RH+', 'P200', '02-05-2018', '06-06-2018', '300ML', '', '', '', 'Available', 'YES'),
('B232', 'D443', 'O+', '', 'P110', '16-05-2018', '16-05-2018', '345', '', '', '', 'Expaired', 'NO'),
('B233', 'D444', 'A+', 'RH+', 'P110', '17-05-2018', '21-06-2018', '400ml', '', '', '', 'Available', 'YES'),
('B330', 'D444', 'AB-', 'RH+', 'P100', '26-05-2018', '30-06-2018', '300', '26', 'May', '2018', 'Available', 'YES'),
('B331', 'D444', 'AB', '', 'P100', '26-05-2018', '30-06-2018', '300', '26', 'May', '2018', 'Available', 'NO'),
('B332', 'D444', 'AB-', '', 'P100', '26-05-2018', '30-06-2018', '300', '26', 'May', '2018', 'Expaired', 'NO'),
('B334', 'D445', 'AB+', 'RH-', 'P100', '28-05-2018', '02-07-2018', '340', '28', 'May', '2018', 'Available', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `blooddonor`
--

CREATE TABLE IF NOT EXISTS `blooddonor` (
  `bdid` varchar(30) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `occp` varchar(30) DEFAULT NULL,
  `dbdate` varchar(30) DEFAULT NULL,
  `dsex` varchar(5) DEFAULT NULL,
  `dage` int(11) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `region` varchar(30) DEFAULT NULL,
  `UserPhoto` varchar(30) NOT NULL,
  PRIMARY KEY (`bdid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blooddonor`
--

INSERT INTO `blooddonor` (`bdid`, `fname`, `lname`, `email`, `occp`, `dbdate`, `dsex`, `dage`, `city`, `region`, `UserPhoto`) VALUES
('D440', 'Kebadu', 'Dagne', 'Kebadu@gmail.com', 'Student', '16-04-2018', 'Male', 48, 'D/M', 'R/G', ''),
('D441', 'Binalfew', 'Debas', 'Binalfew@gmail.com', 'Student', '16-04-2018', 'Femal', 55, 'D/M', 'R/G', ''),
('D442', 'Endalew', 'Biazen', 'Endalew@gmail.com', 'Lecture', '16-04-2018', 'Male', 52, 'D/M', 'R/G', ''),
('D443', 'Sewareg', 'Alemu', 'Sewareg@gmail.com', 'Lecture', '16-04-2018', 'Femal', 51, 'D/M', 'B/D', ''),
('D444', 'Nibret', 'Gashe', 'Nibret@gmail.com', 'Lecture', '16-04-2018', 'Male', 53, 'D/Markos', 'B/D', ''),
('D445', 'Tigist', 'Belay', 'tg@gmail.com', 'Farmer', '2016-08-04', 'Femal', 34, 'D/M', 'Gonder', ''),
('D447', 'Bekalu', 'Damitew', 'tg@gmail.com', 'Tailer', '2007-01-13', 'Male', 30, 'D/M', 'R/Gebeya', 'Images/endalew.jpg'),
('D448', 'Belay', 'Zeleke', 'Belay@gmail.com', 'Patriots', '1962-01-18', 'Selec', 64, 'D/M', 'Bichena', 'Images/endalew.jpg'),
('D449', 'Melkamu', 'Chemere', 'melkie@gmail.com', 'Doctor', '2002-02-03', 'Male', 46, 'DMU', 'ML', 'Images/endalew.jpg'),
('U102', 'Tsedalu', 'Fasika', 'tsedal@gmail.com', 'Teacher', '2018-05-10', 'Femal', 34, 'Goder', 'Motta', 'Images/endalew.jpg'),
('U106', 'Zewudu', 'Fentie', 'zewudu@gmail.com', 'Student', '2018-04-29', 'Male', 28, 'DMU', 'Burie', 'Images/endalew.jpg'),
('U112', 'Tigist', 'Fentie', 'zewudu@gmail.com', 'Student', '2018-04-30', 'Femal', 31, 'DMU', 'Burie', 'Images/endalew.jpg'),
('U567', 'Derartu', 'Tulu', 'derartu@gmail.com', 'Lecture', '2018-03-04', 'Male', 36, 'DMU', 'R/G', 'Images/5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bloodseeker`
--

CREATE TABLE IF NOT EXISTS `bloodseeker` (
  `uid` varchar(30) NOT NULL,
  `sfname` varchar(30) DEFAULT NULL,
  `slname` varchar(30) NOT NULL,
  `sage` int(11) DEFAULT NULL,
  `ssex` varchar(30) NOT NULL,
  `semail` varchar(30) DEFAULT NULL,
  `hname` varchar(30) DEFAULT NULL,
  `UserPhoto` varchar(300) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodseeker`
--

INSERT INTO `bloodseeker` (`uid`, `sfname`, `slname`, `sage`, `ssex`, `semail`, `hname`, `UserPhoto`) VALUES
('D448', 'Belay', 'abebe', 45, '', 'abebe@gmail.com', 'Dmrhospital', 'Images/kkk.jpg'),
('S202', 'Assefa', 'Adamu', 50, 'Male', 'Assefa@gmail.com', 'Fselam', 'Images/kkk.jpg'),
('S203', 'Tsegaye', 'Abush', 30, 'Male', 'Tsegaye@gmail.com', 'Bichena', 'Images/kkk.jpg'),
('S204', 'Goshu', 'Temesgen', 50, 'Female', 'Temesgen@gmail.com', 'Feresbet', 'Images/kkk.jpg'),
('S206', 'Abel', 'Negash', 45, 'Female', 'Melkie@gmail.com', 'MertoLemariam', 'Images/kkk.jpg'),
('U102', 'Binalf', 'belay', 28, 'Male', 'beka@gmail.com', 'Buriehosp', 'Images/kkk.jpg'),
('U103', 'Sewareg', 'Alemu', 28, 'Female', 'Chebudie@gmail.com', 'Fenoteselam', 'Images/kkk.jpg'),
('U111', 'Eshetu', 'Fentie', 56, 'Male', 'eshe@gmail.com', 'Bichena', 'Images/endalew.jpg'),
('U321', 'Belaynesh', 'belete', 45, 'Female', 'Beley@gmil.com', 'Fenoteselam', 'Images/endalew.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `DonID` int(255) NOT NULL AUTO_INCREMENT,
  `did` varchar(30) NOT NULL,
  `bdid` varchar(30) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `Height` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `BMI` int(11) NOT NULL,
  `Quantity` varchar(30) NOT NULL,
  `B/P` int(11) NOT NULL,
  `ReDtae` varchar(30) NOT NULL,
  `ExpDate` varchar(20) NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`DonID`),
  KEY `Did` (`did`),
  KEY `Did_2` (`did`),
  KEY `did_3` (`did`),
  KEY `uid` (`uid`),
  KEY `bdid` (`bdid`),
  KEY `bdid_2` (`bdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`DonID`, `did`, `bdid`, `uid`, `Height`, `Weight`, `BMI`, `Quantity`, `B/P`, `ReDtae`, `ExpDate`, `Status`) VALUES
(1, 'B220', 'D440', 'U102', 170, 60, 21, '300', 100, '2018-05-26', '2018-08-04', 'Active'),
(2, 'B221', 'D441', 'U102', 167, 50, 18, '360', 100, '2018-05-26', '2018-08-14', 'Active'),
(3, 'B220', 'D442', 'U104', 179, 49, 15, '350', 98, '2018-05-26', '2018-07-04', 'Active'),
(4, 'B220', 'D443', 'U104', 168, 60, 21, '360', 100, '2018-05-26', '2018-07-01', 'Active'),
(5, 'B330', 'D444', 'U104', 189, 60, 17, '390', 100, '2018-05-26', '2018-07-18', 'Active'),
(8, 'B231', 'U112', 'U104', 179, 60, 19, '340', 90, '2018-05-31', '2018-08-29', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `message` longtext,
  `date` varchar(30) DEFAULT NULL,
  `unread` varchar(30) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`UID`, `message`, `date`, `unread`) VALUES
(1, 'Yamral!!!!!!', '16-04-2018', 'yes'),
(2, 'dfsgbxdfhngfnxfgn', '16-04-2018', 'yes'),
(3, 'swehzfbzfdb', '16-04-2018', 'yes'),
(4, 'dgfxhngfncgh', '16-04-2018', 'yes'),
(5, 'swehzfbzfdb', '16-04-2018', 'yes'),
(6, 'jhfdhdfnhjdfjkfg', '18-04-2018', 'yes'),
(7, 'hsxghsxbgnhxgjerffffffffffffffffffffffffffffffffff', '20-04-2018', 'yes'),
(8, 'tysdhrtydt', '20-04-2018', 'yes'),
(9, 'dshfgrfhsrthyt', '25-04-2018', 'yes'),
(10, 'dfgbzdfgb', '25-04-2018', 'yes'),
(11, 'qwrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '30-05-2018', 'yes'),
(12, 'qgw4444444444444444', '30-05-2018', 'yes'),
(13, 'qgw4444444444444444', '30-05-2018', 'yes'),
(14, 'qgw4444444444444444', '30-05-2018', 'yes'),
(15, 'qgw4444444444444444', '30-05-2018', 'yes'),
(16, 'wrhaeeeeeeeeeeeeeeeeeeeg', '30-05-2018', 'yes'),
(17, 'wrhaeeeeeeeeeeeeeeeeeeeg', '30-05-2018', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `logfile`
--

CREATE TABLE IF NOT EXISTS `logfile` (
  `lig_id` int(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `login_time` varchar(30) NOT NULL,
  `logout_time` varchar(30) NOT NULL,
  `start_time` varchar(30) NOT NULL,
  `activity_type` varchar(30) NOT NULL,
  `activity_performed` varchar(30) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`lig_id`),
  KEY `uid` (`uid`),
  KEY `uid_2` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `logfile`
--

INSERT INTO `logfile` (`lig_id`, `uid`, `username`, `role`, `login_time`, `logout_time`, `start_time`, `activity_type`, `activity_performed`, `ip_address`, `date`) VALUES
(1, 'U102', 'Binalf', 'Donor', '06:00:45', 'empty', '28 May 2018 @ 06:21:01', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-28'),
(2, 'U102', 'Binalf', 'Donor', '06:25:07', 'empty', '28 May 2018 @ 06:25:51', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-28'),
(3, 'U102', 'Binalf', 'Donor', '06:25:07', 'empty', '28 May 2018 @ 06:26:37', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-28'),
(4, 'U102', 'Binalf', 'Donor', '06:25:07', 'empty', '28 May 2018 @ 06:27:44', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-28'),
(5, 'U103', 'Sewareg', 'Seeker', '06:28:09', 'empty', '28 May 2018 @ 06:29:19', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-28'),
(6, 'U103', 'Sewareg', 'Seeker', '06:28:09', 'empty', '28 May 2018 @ 06:30:05', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-28'),
(7, 'D448', 'Belay', 'Seeker', '06:30:17', 'empty', '28 May 2018 @ 06:31:08', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-28'),
(8, 'U104', 'Mulur', 'Nurse', '03:49:09', 'empty', '28 May 2018 @ 04:52:47', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-28'),
(9, 'U102', 'Binalf', 'Donor', '04:59:01', 'empty', '28 May 2018 @ 05:08:42', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-28'),
(10, 'U102', 'Binalf', 'Donor', '04:59:01', 'empty', '28 May 2018 @ 05:10:24', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-28'),
(11, 'U102', 'Binalf', 'Donor', '04:59:01', 'empty', '28 May 2018 @ 05:11:27', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-28'),
(12, 'U103', 'Sewareg', 'Seeker', '05:15:29', 'empty', '28 May 2018 @ 05:16:38', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-28'),
(13, 'U103', 'Sewareg', 'Seeker', '05:15:29', 'empty', '28 May 2018 @ 05:22:39', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-28'),
(14, 'U102', 'Binalf', 'Donor', '06:07:16', 'empty', '28 May 2018 @ 06:09:01', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-28'),
(15, 'U104', 'Mulur', 'Nurse', '06:09:23', 'empty', '28 May 2018 @ 06:21:01', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-28'),
(16, 'U102', 'Binalf', 'Donor', '05:47:13', 'empty', '30 May 2018 @ 05:48:57', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-30'),
(17, 'U102', 'Binalf', 'Donor', '05:47:13', 'empty', '30 May 2018 @ 05:49:43', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-30'),
(18, 'U102', 'Binalf', 'Donor', '05:47:13', 'empty', '30 May 2018 @ 05:50:17', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-30'),
(19, 'U102', 'Binalf', 'Donor', '05:47:13', 'empty', '30 May 2018 @ 05:51:06', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-30'),
(20, 'U102', 'Binalf', 'Donor', '05:47:13', 'empty', '30 May 2018 @ 05:51:41', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-30'),
(21, 'U103', 'Sewareg', 'Seeker', '08:00:10', 'empty', '30 May 2018 @ 08:06:07', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-30'),
(22, 'U103', 'Sewareg', 'Seeker', '08:40:13', 'empty', '30 May 2018 @ 08:40:35', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-30'),
(23, 'U103', 'Sewareg', 'Seeker', '09:15:16', 'empty', '30 May 2018 @ 09:21:27', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-30'),
(24, 'U103', 'Sewareg', 'Seeker', '09:23:04', 'empty', '30 May 2018 @ 09:24:00', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-30'),
(25, 'U102', 'Binalf', 'Donor', '09:35:09', 'empty', '30 May 2018 @ 09:54:19', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-30'),
(26, 'U102', 'Binalf', 'Donor', '10:16:43', 'empty', '30 May 2018 @ 10:17:26', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-30'),
(27, 'U102', 'Binalf', 'Donor', '10:19:26', 'empty', '30 May 2018 @ 10:28:15', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-30'),
(28, 'D450', 'Tsegaye', 'Donor', '10:31:31', 'empty', '30 May 2018 @ 10:32:17', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-30'),
(29, 'U102', 'Binalf', 'Donor', '08:17:07', '08:23:57', '31 May 2018 @ 08:18:03', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-31'),
(30, 'U103', 'Sewareg', 'Seeker', '08:45:33', '08:53:49', '31 May 2018 @ 08:47:01', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(31, 'U103', 'Sewareg', 'Seeker', '08:45:33', '08:53:49', '31 May 2018 @ 08:50:44', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(32, 'U102', 'Binalf', 'Donor', '08:53:58', '09:32:12', '31 May 2018 @ 08:58:54', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-31'),
(33, 'U102', 'Binalf', 'Donor', '08:53:58', '09:32:12', '31 May 2018 @ 09:01:49', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-31'),
(34, 'U102', 'Binalf', 'Donor', '08:53:58', '09:32:12', '31 May 2018 @ 09:12:14', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-31'),
(35, 'U102', 'Binalf', 'Donor', '08:53:58', '09:32:12', '31 May 2018 @ 09:12:50', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-31'),
(36, 'U102', 'Binalf', 'Donor', '08:53:58', '09:32:12', '31 May 2018 @ 09:15:59', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-31'),
(37, 'U102', 'Binalf', 'Donor', '08:53:58', '09:32:12', '31 May 2018 @ 09:16:24', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-31'),
(38, 'U103', 'Sewareg', 'Seeker', '10:31:22', '10:48:57', '31 May 2018 @ 10:31:36', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(39, 'U103', 'Sewareg', 'Seeker', '10:31:22', '10:48:57', '31 May 2018 @ 10:33:28', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(40, 'U103', 'Sewareg', 'Seeker', '10:31:22', '10:48:57', '31 May 2018 @ 10:38:53', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(41, 'U103', 'Sewareg', 'Seeker', '10:31:22', '10:48:57', '31 May 2018 @ 10:40:53', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(42, 'U103', 'Sewareg', 'Seeker', '10:31:22', '10:48:57', '31 May 2018 @ 10:42:24', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(43, 'U103', 'Sewareg', 'Seeker', '10:31:22', '10:48:57', '31 May 2018 @ 10:42:35', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(44, 'U103', 'Sewareg', 'Seeker', '10:31:22', '10:48:57', '31 May 2018 @ 10:46:51', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(45, 'U103', 'Sewareg', 'Seeker', '10:31:22', '10:48:57', '31 May 2018 @ 10:48:11', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(46, 'U103', 'Sewareg', 'Seeker', '10:31:22', '10:48:57', '31 May 2018 @ 10:48:24', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(47, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 10:50:53', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(48, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 10:51:39', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(49, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 10:52:03', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(50, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 10:52:32', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(51, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 10:52:44', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(52, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 10:53:46', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(53, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 10:53:58', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(54, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 10:55:22', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(55, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 11:21:34', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(56, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 11:23:24', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(57, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 11:23:35', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(58, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 11:23:40', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(59, 'U103', 'Sewareg', 'Seeker', '10:49:43', '11:24:45', '31 May 2018 @ 11:24:03', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(60, 'U102', 'Binalf', 'Donor', '11:30:07', '11:52:46', '31 May 2018 @ 11:43:01', 'Appointment', 'Blood Donor Make Appointment [', '127.0.0.1', '2018-05-31'),
(61, 'U103', 'Sewareg', 'Seeker', '11:52:52', 'empty', '31 May 2018 @ 11:54:08', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31'),
(62, 'U103', 'Sewareg', 'Seeker', '11:52:52', 'empty', '31 May 2018 @ 11:55:29', 'Request', 'Seeker Hospitals Send Requuest', '127.0.0.1', '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `Nid` int(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `nrole` varchar(30) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `content` varchar(300) NOT NULL,
  `date` varchar(30) NOT NULL,
  `exdate` varchar(30) NOT NULL,
  `unread` varchar(30) NOT NULL,
  PRIMARY KEY (`Nid`),
  KEY `uid` (`uid`),
  KEY `uid_2` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`Nid`, `uid`, `uname`, `nrole`, `Title`, `content`, `date`, `exdate`, `unread`) VALUES
(1, 'U101', 'Endale', 'BBmanager', 'WEll COMe', 'qawseftghujisdfg', '2018-05-31', '2018-05-30', 'yes'),
(2, 'U101', 'Endale', 'BBmanager', 'Well Go', 'wasedrftgyhujidfghjk', '2018-05-31', '2018-06-02', 'yes'),
(3, 'U101', 'Endale', 'BBmanager', 'Donation Program', 'awseftghj', '2018-05-31', '2018-06-01', 'yes'),
(4, 'U101', 'Endale', 'BBmanager', 'Donation In DMU', 'ASFTGYHUJIDFTGHJ', '2018-05-31', '2018-06-02', 'yes'),
(5, 'U101', 'Endale', 'BBmanager', 'Blood Donation In Burie Camp', 'qawsedrftgyhujisdftgh', '2018-05-31', '2018-05-31', 'yes'),
(6, 'U101', 'Endale', 'BBmanager', 'Blood Seeking', 'qawsefghjnkfg', '2018-05-31', '2018-06-01', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `nursedescription`
--

CREATE TABLE IF NOT EXISTS `nursedescription` (
  `appid` int(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `nurse_status` varchar(20) NOT NULL,
  `doner_status` varchar(20) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `nursedescription`
--

INSERT INTO `nursedescription` (`appid`, `uid`, `description`, `nurse_status`, `doner_status`) VALUES
(1, 'U104', 'xcvbbbnvcccccccccccccccccvccccccccccccccccccccccccccccccccccc', 'read', 'unread'),
(2, 'U104', 'assssssssssssssssssssssssssssssssssssssssssssssss', 'read', 'unread'),
(3, 'U104', 'werttttttttttttttttttttttttttttttttttttttt', 'read', 'unread'),
(4, 'U104', 'werttttttttttttttttttttttttttttttttttttttt', 'read', 'unread'),
(5, 'U104', 'sdfghjjjjjjhmh', 'read', 'unread'),
(6, 'U104', 'sdfghjsedrtfyguhiserdty', 'read', 'unread'),
(7, 'U104', 'asdfghjkl', 'read', 'unread'),
(8, 'U104', 'dfffffffffffffffffffffff', 'unread', 'unread'),
(9, 'U104', 'sdfghjkl;.', 'unread', 'unread'),
(10, 'U102', 'hgghghgh', 'unread', 'read'),
(11, 'U102', 'qwer6t7yuiffffffffffffffffffffffffffffgh', 'unread', 'read'),
(12, 'U102', 'ertyhujik', 'unread', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `quetionaries`
--

CREATE TABLE IF NOT EXISTS `quetionaries` (
  `NO` int(255) NOT NULL AUTO_INCREMENT,
  `Uid` varchar(30) NOT NULL,
  `UName` varchar(30) NOT NULL,
  `Quetion` varchar(1000) NOT NULL,
  `Option1` varchar(30) NOT NULL,
  `Option2` varchar(30) NOT NULL,
  `correct` varchar(30) NOT NULL,
  `Pdate` varchar(30) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `quetionaries`
--

INSERT INTO `quetionaries` (`NO`, `Uid`, `UName`, `Quetion`, `Option1`, `Option2`, `correct`, `Pdate`) VALUES
(1, 'U333', 'Mulur', 'Are you feeling well and healthy today?', 'YES', 'NO', 'YES', '07-May-2018'),
(2, 'U333', 'Mulur', 'Did you see doctor or nurse in thye last one month?', 'YES', 'NO', 'YES', '07-May-2018'),
(3, 'U333', 'Mulur', 'Have you had an operation?', 'YES', 'NO', 'YES', '07-May-2018'),
(4, 'U333', 'Mulur', 'Did you get blood transfushion in the last one year?', 'YES', 'NO', 'YES', '07-May-2018'),
(5, 'U333', 'Mulur', 'Are you taking any medicines or medication?', 'YES', 'NO', 'YES', '07-May-2018'),
(6, 'U333', 'Mulur', 'Have you ever suffered from yellowing of the eyes or\r\njaundice in the last one year?', 'YES', 'NO', 'YES', '07-May-2018'),
(7, 'U333', 'Mulur', 'Do you have a cough lasting more than two weeks?', 'YES', 'NO', 'YES', '07-May-2018'),
(8, 'U333', 'Mulur', 'Are there any swellings on your neck or in the armpit?', 'YES', 'NO', 'YES', '07-May-2018'),
(9, 'U333', 'Mulur', 'Have you lost more than 10kg weghits in the last 6 month?', 'YES', 'NO', 'YES', '07-May-2018'),
(10, 'U333', 'Mulur', 'Have you suffered any skin rash or disease?', 'YES', 'NO', 'YES', '07-May-2018'),
(11, 'U333', 'Mulur', 'Do you suffer from hypertenshion?', 'YES', 'NO', 'YES', '07-May-2018'),
(12, 'U333', 'Mulur', 'Are you mediation for hypertenshion?', 'YES', 'NO', 'YES', '07-May-2018'),
(13, 'U333', 'Mulur', 'Is there diabetes in your family?', 'YES', 'NO', 'YES', '07-May-2018'),
(14, 'U333', 'Mulur', 'Have you been diagnosed with diabetes?', 'YES', 'NO', 'YES', '07-May-2018'),
(15, 'U333', 'Mulur', 'Has any part of your body ever been pierced with unsterile instrument?', 'YES', 'NO', 'YES', '07-May-2018'),
(16, 'U333', 'Mulur', 'Have you atstto or any sscarification with in the last one year?', 'YES', 'NO', 'YES', '07-May-2018'),
(17, 'U333', 'Mulur', 'Have you sex with more than one partner in the last 6 month?', 'YES', 'NO', 'YES', '07-May-2018'),
(18, 'U333', 'Mulur', 'What will you do the day after blood donation?', 'YES', 'NO', 'YES', '07-May-2018');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `Rqid` int(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `Hname` varchar(30) NOT NULL,
  `Hemail` varchar(30) NOT NULL,
  `bid` varchar(30) NOT NULL,
  `bg` varchar(30) NOT NULL,
  `bquantity` varchar(30) NOT NULL,
  `Rqdate` varchar(30) NOT NULL,
  `Unread` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`Rqid`),
  KEY `Hid` (`uid`),
  KEY `uid` (`uid`),
  KEY `bid` (`bid`),
  KEY `bdid` (`bid`),
  KEY `bid_2` (`bid`),
  KEY `bid_3` (`bid`),
  KEY `bid_4` (`bid`),
  KEY `bg` (`bg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Rqid`, `uid`, `uname`, `Hname`, `Hemail`, `bid`, `bg`, `bquantity`, `Rqdate`, `Unread`, `Status`) VALUES
(1, 'U103', 'sewareg', 'DMRH', 'DMRH@gmail.com', 'B220', 'AB, B, O, A+, ', '340ML', '23-May-2018', 'yes', 'accepted'),
(2, 'U103', 'sewareg', 'BURIE', 'BURIE@gmail.com', 'B224', 'O+, B, O, ', '360ML', '23-May-2018', 'yes', ''),
(3, 'U103', 'sewareg', 'Feresbet', 'Feresbet@gmail.com', 'B224', 'O+, A+, O, ', '450ML', '23-May-2018', 'yes', ''),
(4, 'U103', 'sewareg', 'Finoteselam', 'Fselam@gmail.com', 'B224', 'A, B, ', '300ML', '23-May-2018', 'yes', ''),
(5, 'U103', 'sewareg', 'Dejen', 'Dejen@gmail.com', 'B220', 'A+, O, A+, ', '450ML', '23-May-2018', 'yes', 'accepted'),
(6, 'D448', 'Belay', 'DRH', 'dmrh@gmail.com', 'B221', 'AB, O, A+, ', '300ML', '23-May-2018', 'yes', ''),
(7, 'U103', 'Sewareg', 'Mertolemariam', 'kebie@gmail.com', 'B220', 'AB, AB, ', '400', '25-May-2018', 'yes', 'accepted'),
(8, 'U103', 'Sewareg', 'Mertolemariam', 'kebie@gmail.com', 'B220', 'AB, AB, ', '400', '25-May-2018', 'yes', 'accepted'),
(9, 'U103', 'Sewareg', 'Mertolemariam', 'kebie@gmail.com', 'B220', 'AB, AB, ', '400', '25-May-2018', 'yes', 'accepted'),
(10, 'U103', 'Sewareg', 'Bichena', 'sewarg@gmail.com', 'B224', 'A+, AB, ', '450ML', '25-May-2018', 'yes', ''),
(11, 'U103', 'Sewareg', 'Bichena', 'sewarg@gmail.com', 'B224', 'A+, AB, ', '450ML', '25-May-2018', 'yes', ''),
(12, 'U103', 'Sewareg', 'Bichena', 'sewarg@gmail.com', 'B224', 'A+, AB, ', '450ML', '25-May-2018', 'yes', ''),
(13, 'U103', 'Sewareg', 'Mertolemariam', 'sewarg@gmail.com', 'B224', 'A, ', '450ML', '25-May-2018', 'yes', ''),
(15, 'U103', 'Sewareg', 'Mertolemariam', 'sewarg@gmail.com', 'B224', 'A, ', '450ML', '25-May-2018', 'yes', ''),
(16, 'U103', 'Sewareg', 'Mertolemariam', 'kebie@gmail.com', 'B220', 'O+, O, ', '450ML', '25-May-2018', 'yes', 'accepted'),
(17, 'U103', 'Sewareg', 'Bichena', 'sewarg@gmail.com', 'B224', 'O+, AB, ', '450ML', '25-May-2018', 'yes', ''),
(18, 'U103', 'Sewareg', 'Bichena', 'sewarg@gmail.com', 'B224', 'O+, AB, ', '450ML', '25-May-2018', 'yes', ''),
(19, 'U103', 'Sewareg', 'Burie', 'sewareg@gmail.com', 'B445', 'AB, O+, O, ', '340', '28-May-2018', 'yes', ''),
(20, 'U103', 'Sewareg', 'Bichena', 'Bichena@gmail.com', 'B444', 'O, A, AB, ', '380', '28-May-2018', 'yes', ''),
(21, 'D448', 'Belay', 'DMRH', 'Belay@gmail.com', 'B445', 'AB, O, A+, ', '390', '28-May-2018', 'yes', ''),
(22, 'U103', 'Sewareg', 'Feresebet', 'aaa@gmail.com', 'B440', 'AB, O, ', '380', '28-May-2018', 'yes', ''),
(23, 'U103', 'Sewareg', 'Feresebet', 'aaa@gmail.com', 'B440', 'AB, A+, ', '380', '28-May-2018', 'yes', ''),
(25, 'U103', 'Sewareg', 'bbbbbbbbbb', 'b@gmail.com', 'B331', 'AB, ', '34', '30-May-2018', 'yes', 'accepted'),
(27, 'U103', 'Sewareg', 'bbbbbbbbbb', 'b@gmail.com', 'B220', 'O+, ', '345', '30-May-2018', 'yes', 'accepted'),
(28, 'U103', 'Sewareg', 'Bure', 'K@gmail.com', 'B440', 'AB', '', '31-May-2018', 'no', ''),
(29, 'U103', 'Sewareg', 'Bure', 'K@gmail.com', 'B001', 'AB', '300', '31-May-2018', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` varchar(30) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `Uemail` varchar(30) NOT NULL,
  `UesrSex` varchar(30) DEFAULT NULL,
  `Userage` int(11) DEFAULT NULL,
  `UserPhoto` varchar(100) DEFAULT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `FName`, `LName`, `Uemail`, `UesrSex`, `Userage`, `UserPhoto`, `Status`) VALUES
('4554', 'Tigist', 'Belay', 'K@gmail.com', 'Female', 38, 'Images/endalew.jpg', ''),
('D445', 'Gasha', 'Tsegaw', 'Tsegaw@gmail.com', 'Male', 21, 'Images/endalew.jpg', ''),
('D447', 'Bekalu', 'Damitew', 'tg@gmail.com', 'Male', 30, 'Images/endalew.jpg', ''),
('D448', 'Belay', 'Zeleke', 'Belay@gmail.com', 'Male', 64, 'Images/endalew.jpg', ''),
('D449', 'Melkamu', 'Chemere', 'melkie@gmail.com', 'Male', 46, 'Images/endalew.jpg', ''),
('D450', 'Abel', 'Negash', 'melkie@gmail.com', 'Female', 36, 'Images/endalew.jpg', ''),
('S206', 'Abel', 'Negash', 'Melkie@gmail.com', 'Female', 45, 'Images/endalew.jpg', ''),
('S210', 'Abel', 'Negash', 'Melkie@gmail.com', 'Male', 3, 'Images/endalew.jpg', ''),
('U100', 'Kebadu', 'Dagne', 'k@gmail.com', 'Male', 24, 'Images/kkk.jpg', ''),
('U101', 'Endalew', 'Biazen', 'E@gmail.com', 'Male', 25, 'Images/endalew.jpg', ''),
('U102', 'Binalfew', 'Debas', 'B@gmail.com', 'Female', 26, 'Images/endalew.jpg', ''),
('U103', 'Sewareg', 'Alemu', 'S@gmail.com', 'Female', 23, 'Images/endalew.jpg', ''),
('U104', 'Tsegaye', 'Belay', 'B@gmail.com', 'Male', 25, 'Images/endalew.jpg', ''),
('U106', 'Zewudneh', 'Baweke', 'Zewudneh@gmail.com', 'Male', 24, 'Images/endalew.jpg', ''),
('U108', 'Tsedalu', 'Fasika', 'k@gmail.com', 'Male', 45, 'Images/endalew.jpg', ''),
('U111', 'Eshetu', 'Fentie', 'eshe@gmail.com', 'Male', 56, 'Images/endalew.jpg', 'Hasaccount'),
('U112', 'Tigist', 'Fentie', 'zewudu@gmail.com', 'Female', 31, 'Images/endalew.jpg', 'Noaccount'),
('U113', 'Belaynesh', 'Dagnaw', 'Belie@gmail.com', 'Female', 30, 'Images/kkk.jpg', ''),
('U321', 'Belaynesh', 'belete', 'Beley@gmil.com', 'Female', 45, 'Images/endalew.jpg', 'Noaccount'),
('U332', 'kebadsew', 'Dagne', 'kebie@gmail.com', 'Female', 35, 'Images/endalew.jpg', ''),
('U333', 'muluye', 'fentie', 'm@gmail.com', 'Female', 34, 'Images/endalew.jpg', ''),
('U334', 'kebadsew', 'Dagne', 'kebie@gmail.com', 'Female', 35, 'Images/endalew.jpg', ''),
('U337', 'abebe', 'kebede', 'A@gmail.com', 'Male', 20, 'Images/endalew.jpg', ''),
('U567', 'Derartu', 'Tulu', 'derartu@gmail.com', 'Male', 36, 'Images/5.jpg', 'Noaccount');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `blood`
--
ALTER TABLE `blood`
  ADD CONSTRAINT `blood_ibfk_1` FOREIGN KEY (`bdid`) REFERENCES `blooddonor` (`bdid`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `bb` FOREIGN KEY (`did`) REFERENCES `blood` (`bid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rt` FOREIGN KEY (`bdid`) REFERENCES `blooddonor` (`bdid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `we` FOREIGN KEY (`uid`) REFERENCES `account` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logfile`
--
ALTER TABLE `logfile`
  ADD CONSTRAINT `rr` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
