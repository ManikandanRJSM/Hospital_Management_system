-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2019 at 07:10 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `E-mail` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `E-mail`, `password`, `gender`, `Mobile`, `status`) VALUES
(1, 'Admin', 'admin@gmail.com', 'asdasd', 'Male', 1234568999, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`app_id`, `Name`, `E-mail`, `date`, `time`, `gender`, `type`, `message`, `status`) VALUES
(31, 'Boss', 'boss@gmail.com', '6/19/2019', '1:00am', 'Male', 'OP', 'Nnnnn', 1),
(29, 'Jos', 'jos@gmail.com', '6/19/2019', '1:00am', 'Male', 'Regular', 'Ddddddddd', 1),
(24, 'Hhhdgdgdsgfdsgdfsfg', 'hhhh@gmail.com', '6/26/2019', '1:00am', 'Male', 'Normal', 'Fdsfsafdsafsa', 1),
(30, 'Mani', 'mani@gmail.com', '6/11/2019', '1:30am', 'Male', 'Medical Representative', 'Dsdsfsafsadfdsaf', 1),
(26, 'Jos', 'jos@gmail.com', '6/14/2019', '1:30am', 'Male', 'Regular', 'Ytrytyuuyui,kmhnmvbnhjgfjghkmnbvgmj', 1),
(25, 'Dsdsdfsdfsdfsdfs', 'dfsfdsdfsdfsdfs@gmail.com', '6/15/2019', '1:00am', 'Male', 'Normal', 'Dsfdsafdsdsafdsafdsafdfsa', 1),
(23, 'Jos', 'jos@gmail.com', '6/19/2019', '1:30am', 'Male', 'Regular', 'Msfn,dsmnfm,snfns,fmns,f', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assigndoctor`
--

DROP TABLE IF EXISTS `assigndoctor`;
CREATE TABLE IF NOT EXISTS `assigndoctor` (
  `ass_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(20) NOT NULL,
  `E_mail` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` varchar(200) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`ass_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigndoctor`
--

INSERT INTO `assigndoctor` (`ass_id`, `patient_name`, `E_mail`, `Gender`, `type`, `date`, `doctor_name`, `status`) VALUES
(8, 'Jos', 'jos@gmail.com', 'Male', 'Regular', '6/5/2019', 'Jack', '1'),
(7, 'Jos', 'jos@gmail.com', 'Male', 'Regular', '6/26/2019', 'Jack', '1'),
(11, 'Jos', 'jos@gmail.com', 'Male', 'Regular', '7/10/2019', 'Jack', '1'),
(12, 'Jos', 'jos@gmail.com', 'Male', 'Regular', '6/13/2019', 'Jack', '1'),
(13, 'Jos', 'jos@gmail.com', 'Male', 'Regular', '6/20/2019', 'Zubair', '1');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `E_mail` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Expert` varchar(20) NOT NULL,
  `Profile` varchar(500) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`d_id`, `Name`, `E_mail`, `Gender`, `Type`, `Mobile`, `Expert`, `Profile`) VALUES
(2, 'Jack', 'jack@gmail.com', 'Male', 'Doctor', '1234567899', 'Heart', '15604564995680357705d02ad339e542.jpg'),
(3, 'Bob', 'bob@gmail.com', 'Male', 'Doctor', '1234567899', 'ENT', '15604693967663104075d02df94be344.jpg'),
(4, 'Zubair', 'zubair@gmail.com', 'Male', 'Doctor', '1234567890', 'Eye', '156054123921284079995d03f837cbb38.jpg'),
(6, 'Fff', 'fff@gmail.com', 'Male', 'Doctor', '1234567899', 'Gggg', '156168624021112909215d1570e04e2d0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `Name`, `E-mail`, `message`, `status`) VALUES
(4, 'Mani', 'mani@gmail.com', 'dsadasdsasdadsad', '1'),
(3, 'Mani', 'mani@gmail.com', 'dsadasdsasdadsad', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `im_id` int(11) NOT NULL AUTO_INCREMENT,
  `Image_Name` varchar(1000) NOT NULL,
  PRIMARY KEY (`im_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`im_id`, `Image_Name`) VALUES
(3, '01560837865.jpg,11560837865.jpg'),
(10, '01561685642.jpg,11561685642.jpg'),
(9, '01561685493.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medinfo`
--

DROP TABLE IF EXISTS `medinfo`;
CREATE TABLE IF NOT EXISTS `medinfo` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `Profile` varchar(200) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medinfo`
--

INSERT INTO `medinfo` (`m_id`, `company`, `name`, `stock`, `type`, `Profile`, `status`) VALUES
(11, 'PX', 'Mefthal', '50kg', 'Tablet', '156176004520607899965d16912d10832.jpg', 1),
(7, 'Ethics', 'Mefthal', '50kg', 'Tablet', '15617493977606479415d166795744ae.jpg', 1),
(6, 'Ethics', 'Paracetomol', '50kg', 'Tablet', '15605411101075163785d03f7b69b5dc.jpg', 1),
(10, 'Ddd', 'Aaaa', '50kg', 'Syrup', '15617497078793549175d1668cb95008.jpg', 1),
(12, 'PX', 'Paracetomol', '500kg', 'Tablet', '156168439013457448505d1569a683459.jpg', 1),
(13, 'Jjj', 'Jjj', '100kg', 'Tablet', '15616860504973381255d157022ad769.jpg', 1),
(14, 'Lll', 'Lll', '100kg', 'Tablet', '156168620811172677975d1570c0028c8.jpg', 1),
(15, 'Rrr', 'Rrr', '150kg', 'Tablet', '1561686639992787325d15726f14180.jpg', 1),
(16, 'Ppp', 'Rrr', '100kg', 'Tablet', '15616868882958184165d1573689ce12.jpg', 1),
(17, 'Qq', 'Qqq', '500kg', 'Tablet', '156168706914541128475d15741d4e2c5.jpg', 1),
(18, 'Yy', 'Yy', '500kg', 'Tablet', '156168734313846552275d15752fa5d05.jpg', 1),
(19, 'Xxx', 'Rrr', '150kg', 'Tablet', '15616874282201749845d157584675f9.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `E-mail` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Profile` varchar(200) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`p_id`, `Name`, `E-mail`, `password`, `gender`, `type`, `mobile`, `Address`, `Profile`) VALUES
(20, 'Jos', 'jos@gmail.com', 'asd', 'Male', 'Regular', 1234567899, 'madurai', '156084122819783897245d088c0c451fa.jpg'),
(23, 'Dddd', 'dsfas@gmail.com', 'asd', 'Male', 'Regular', 1234567899, 'adadasds', '156088612212911811225d093b6a3bc19.jpg'),
(22, 'Boss', 'boss@gmail.com', 'asd', 'Male', 'OP', 1234567899, 'adsadsadsa', '15608830309002155875d092f564e0b3.jpg'),
(24, 'Bob', 'bob@gmail.com', 'asd', 'Male', 'OP', 1234567899, 'ellisnagar', '15617455257023786045d16587580d00.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `pres_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(20) NOT NULL,
  `patient_email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `med_name` varchar(200) NOT NULL,
  `dose` varchar(200) NOT NULL,
  `med_img` varchar(500) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`pres_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pres_id`, `patient_name`, `patient_email`, `date`, `gender`, `type`, `med_name`, `dose`, `med_img`, `status`) VALUES
(12, 'Jos', 'jos@gmail.com', '6/13/2019', 'Male', 'Regular', 'mefthal', '2', '15616852281219579645d156cececc77.jpg', 1),
(11, 'Jos', 'jos@gmail.com', '6/13/2019', 'Male', 'Regular', 'mefthal', '2', '156146685918584873145d1217eb00d03.jpg', 1),
(10, 'Jos', 'jos@gmail.com', '6/5/2019', 'Male', 'Regular', 'mefthal', '2', '15614468293416550935d11c9ad30c1b.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

DROP TABLE IF EXISTS `reminder`;
CREATE TABLE IF NOT EXISTS `reminder` (
  `Rim_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `reminder` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`Rim_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`Rim_id`, `patient_name`, `mail`, `doctor_name`, `Date`, `reminder`, `status`) VALUES
(4, 'Jos', 'jos@gmail.com', 'Jack', '6/5/2019', 'Dont Forget to attend your appointments', '1'),
(3, 'Jos', 'jos@gmail.com', 'Jack', '6/5/2019', 'Dont Forget to attend your appointments', '1'),
(5, 'Jos', 'jos@gmail.com', 'Jack', '6/5/2019', 'Dont Forget to attend your appointments', '1');

-- --------------------------------------------------------

--
-- Table structure for table `representative`
--

DROP TABLE IF EXISTS `representative`;
CREATE TABLE IF NOT EXISTS `representative` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `E_mail` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Profile` varchar(200) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `representative`
--

INSERT INTO `representative` (`r_id`, `Name`, `E_mail`, `password`, `gender`, `type`, `mobile`, `Address`, `Profile`) VALUES
(17, 'Mani', 'mani@gmail.com', 'asd', 'Male', 'Medical Representative', 1234567899, 'dsfsafsaf', '156055413911296286845d042a9b402e9.jpg'),
(19, 'Dddd', 'dsfass@gmail.com', 'asd', 'Male', 'Medical Representative', 1234567899, 'sadadad', '156088626116877270175d093bf597983.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

DROP TABLE IF EXISTS `solutions`;
CREATE TABLE IF NOT EXISTS `solutions` (
  `solu_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(50) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  `Solutions` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`solu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`solu_id`, `patient_name`, `E_mail`, `Solutions`, `status`) VALUES
(8, 'Jos', 'jos@gmail.com', 'Sdfdsafsaddfdsafsadf', '1'),
(6, 'Jos', 'jos@gmail.com', 'Sdfdsafdsafdsaf', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
