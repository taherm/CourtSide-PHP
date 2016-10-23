-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2016 at 10:09 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courtside`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `badminton`
--

CREATE TABLE IF NOT EXISTS `badminton` (
  `courtname` varchar(50) NOT NULL,
  `custname` varchar(20) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `slot` varchar(20) NOT NULL,
  `bkdate` date NOT NULL,
  `price` int(8) NOT NULL,
  `bk_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badminton`
--

INSERT INTO `badminton` (`courtname`, `custname`, `phoneno`, `email`, `slot`, `bkdate`, `price`, `bk_id`) VALUES
('Prakash padukone Acedamy', 'vicky', '9876453924', 'vk@gm.com', '6-7 AM', '2016-04-14', 4500, 731),
('KBA', 'vicky', '9480022223', 'vk@gm.com', '8-9 PM', '2016-04-25', 600, 918),
('Racket Arena', 'taher', '9876453924', 'vickyvignesh170@gmail.com', '7-8 PM', '2016-05-29', 700, 333),
('Prakash padukone Acedamy', 'vicky', '9876453924', 'vickyvignesh170@gmail.com', '9-10 AM', '2016-06-14', 600, 260);

-- --------------------------------------------------------

--
-- Table structure for table `basketball`
--

CREATE TABLE IF NOT EXISTS `basketball` (
  `courtname` varchar(20) NOT NULL,
  `custname` varchar(20) NOT NULL,
  `phoneno` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `slot` varchar(20) NOT NULL,
  `bkdate` date NOT NULL,
  `price` int(8) NOT NULL,
  `bk_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basketball`
--

INSERT INTO `basketball` (`courtname`, `custname`, `phoneno`, `email`, `slot`, `bkdate`, `price`, `bk_id`) VALUES
('drdo', 'vicky', '2147483647', 'vk@gm.com', '6-7 AM', '2016-04-15', 1000, 935),
('drdo', 'karthik', '2147483647', 'kar@gm.com', '8-9 AM', '2016-04-22', 1000, 273),
('drdo', 'pranav', '2147483647', 'pranav@gm.com', '10-11 PM', '2016-04-22', 1000, 528),
('drdo', 'shama', '2147483647', 'sh@gmail.com', '8-9 AM', '2016-04-21', 1000, 201),
('drdo', 'sam', '2147483647', 'sam@gmail.com', '6-7 AM', '2016-04-23', 1000, 60),
('drdo', 'varun', '9480022223', 'vk@gm.com', '4-5 PM', '2016-04-22', 1000, 554),
('drdo', 'vicky', '9876453924', 'vick@gmail.com', '6-7 AM', '2016-04-29', 1000, 931),
('drdo', 'pranav', '9473786437', 'pranav@gm.com', '6-7 AM', '2016-05-02', 1000, 521),
('drdo', 'roshini', '9480022223', 'ro@gm.com', '8-9 PM', '2016-04-28', 1000, 12),
('drdo', 'roshini', '9876453924', 'ro@gm.com', '9-10 AM', '2016-05-02', 1000, 113),
('DribbleZone', 'roshini', '9473786437', 'ro@gm.com', '8-9 PM', '2016-05-03', 1000, 245),
('Jumps n hoops', 'karthik', '9480022223', 'kar@gm.com', '8-9 AM', '2016-05-13', 1000, 247),
('drdo', 'vicky', '9876453924', 'vk@gm.com', '8-9 AM', '2016-05-13', 1000, 835);

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `custname` varchar(40) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `prdname` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `totalprice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`custname`, `phno`, `email`, `prdname`, `price`, `quantity`, `totalprice`) VALUES
('karthik', '9898987989', 'ka@ga.co', 'tenniskit', 9000, 1, 9000),
('karthik', '9758605832', 'vicky@gm.com', 'swimming kit', 3000, 1, 3000),
('karthik', '9758605832', 'vicky@gm.com', 'swimming kit', 3000, 1, 3000),
('vick', '9758605832', 'vicky@gm.com', 'Nike Football', 1000, 2, 2000),
('vick', '9758605832', 'vicky@gm.com', 'pads and gloves', 6000, 3, 18000),
('vick', '9758605832', 'vickyvignesh170@gmail.com', 'swimming kit', 3000, 2, 6000),
('Vignesh', '9758605832', 'vickyvignesh170@gmail.com', 'Nike Football', 1000, 2, 2000),
('vick', '9758605832', 'vicky@gm.com', 'AddidasX', 3000, 1, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `courtlogin`
--

CREATE TABLE IF NOT EXISTS `courtlogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='login for courtside';

--
-- Dumping data for table `courtlogin`
--

INSERT INTO `courtlogin` (`username`, `password`, `name`) VALUES
('', '455', 'roshini'),
('karthik', 'r15', 'karthik'),
('rosh', '455', 'roshini'),
('roshini', '566', 'roshini'),
('vatsala', '255', 'vatsala'),
('vicky', '2700', 'vignesh');

-- --------------------------------------------------------

--
-- Table structure for table `cricket`
--

CREATE TABLE IF NOT EXISTS `cricket` (
  `courtname` varchar(20) NOT NULL,
  `custname` varchar(20) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `slot` varchar(20) NOT NULL,
  `bkdate` date NOT NULL,
  `price` int(8) NOT NULL,
  `bk_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket`
--

INSERT INTO `cricket` (`courtname`, `custname`, `phoneno`, `email`, `slot`, `bkdate`, `price`, `bk_id`) VALUES
('CricZone', 'karthik', '9876453924', 'kar@gm.com', '6-7 AM', '2016-05-17', 1000, 74),
('BWSSY', 'taher', '9686474645', 'tm@gm.co', '4-5 PM', '2016-06-07', 4000, 981),
('KCA', 'karthik', '9876453924', 'kar@gm.com', '9-10 AM', '2016-05-15', 4500, 194);

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE IF NOT EXISTS `football` (
  `courtname` varchar(20) NOT NULL,
  `custname` varchar(20) NOT NULL,
  `phoneno` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `slot` varchar(20) NOT NULL,
  `bkdate` date DEFAULT NULL,
  `price` int(8) DEFAULT NULL,
  `bk_id` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `football`
--

INSERT INTO `football` (`courtname`, `custname`, `phoneno`, `email`, `slot`, `bkdate`, `price`, `bk_id`) VALUES
('soccercity', 'vicky', '9480022223', 'vk@gm.com', '8-9 PM', '2016-05-16', 2500, 109),
('XLR8', 'Roshini', '9876453924', 'roshiniakshaya24@gmail.com', '9-10 PM', '2016-05-26', 1000, 226),
('Kicks on grass', 'vicky', '9480022223', 'vickyvignesh170@gmail.com', '5-6 PM', '2016-06-28', 2500, 241),
('Kicks on grass', 'shama', '9876453924', 'sh@gmail.com', '5-6 PM', '2016-05-09', 2500, 330),
('Kicks on grass', 'karthik', '2147483647', 'kar@gm.com', '6-7 AM', '2016-04-20', 2000, 454),
('soccercity', 'karthik', '2147483647', 'kar@gm.com', '6-7 AM', '2016-04-27', 2500, 489),
('soccercity', 'varun', '2147483647', 'vk@gm.com', '9-10 AM', '2016-04-24', 2500, 499),
('Football Nation', 'dheeraj', '9876453924', 'pranav@gm.com', '6-7 PM', '2016-05-15', 800, 508),
('Lets Play', 'dheeraj', '2147483647', 'dh@manne.com', '8-9 AM', '2016-05-02', 2500, 518),
('Football Nation', 'varun', '2147483647', 'vick@gmail.com', '7-8 PM', '2016-04-29', 800, 540),
('soccercity', 'karthik', '2147483647', 'kar@gm.com', '6-7 AM', '2016-05-03', 2500, 642),
('Lets Play', 'karthik', '2147483647', 'kar@gm.com', '9-10 AM', '2016-04-22', 2500, 744),
('soccercity', 'varun', '2147483647', 'vk@gm.com', '7-8 AM', '2016-05-01', 2500, 753),
('Lets Play', 'pranav', '2147483647', 'pranav@gm.com', '6-7 AM', '2016-05-02', 2500, 826),
('Kicks on grass', 'gaurav', '3234545657', 'vick@gmail.com', '8-9 AM', '2016-05-23', 2500, 949);

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE IF NOT EXISTS `host` (
  `h_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `turname` varchar(50) NOT NULL,
  `broucherimg` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `Venue` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`h_id`, `name`, `address`, `phone`, `turname`, `broucherimg`, `price`, `Venue`) VALUES
(41, 'Rocky', 'Kamanahalli', '9758605832', 'Frens football league', 'IMG-20160224-WA0001.jpg', 2800, 'Frens aspan height'),
(42, 'Travis', 'Indranagar', '9898987989', 'OUA', '860875_495074660527961_1082636034_o.jpg', 800, 'RacketZone'),
(43, 'sham', 'bangalore', '9758605832', 'Kings cup', '3ea1cb33854185.5605e988b1b38.png', 3000, 'dribblezone'),
(44, 'karthik', 'Kamanahalli', '9898987989', 'legends cup', '860875_495074660527961_1082636034_o.jpg', 2000, 'soccercity'),
(45, 'Roshini', 'TC palya', '9758605832', 'NPL', 'NPL-5-brochure-831x1024.jpg', 3000, 'CricZone');

-- --------------------------------------------------------

--
-- Table structure for table `jointour`
--

CREATE TABLE IF NOT EXISTS `jointour` (
  `tourname` varchar(40) NOT NULL,
  `teamname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jointour`
--

INSERT INTO `jointour` (`tourname`, `teamname`, `email`, `phno`) VALUES
('Kings cup', 'Chaos agents', 'vicky@gm.com', '9758605832'),
('Frens football league', 'just come on', 'sh@gm.com', '9898987989'),
('Frens football league', 'Chaos agents', 'sh@gm.com', '9758605832'),
('Kings cup', 'Chaos agents', 'vicky@gm.com', '9758605832'),
('NPL', 'Freeze breaker', 'vicky@gm.com', '9758605832'),
('NPL', 'Crackers', 'sh@gm.com', '9758605832'),
('NPL', 'Chaos agents', 'vicky@gm.com', '9758605832'),
('OUA', 'Chaos agents', 'ka@ga.co', '9758605832'),
('legends cup', 'Nike knockers', 'vicky@gm.com', '9758605832');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `price` int(10) NOT NULL,
  `proid` int(10) NOT NULL,
  `proname` varchar(40) NOT NULL,
  `stock` int(10) NOT NULL,
  `proimg` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`price`, `proid`, `proname`, `stock`, `proimg`) VALUES
(3000, 11, 'swimming kit', 10, '630.jpg'),
(9000, 2, 'tenniskit', 10, 'gfgd.png'),
(1000, 3, 'Nike Football', 10, 'prem.jpg'),
(6000, 5, 'pads and gloves', 10, 'slazengerultimate.jpg'),
(3000, 6, 'AddidasX', 9, 'hgtyt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `swim`
--

CREATE TABLE IF NOT EXISTS `swim` (
  `courtname` varchar(20) NOT NULL,
  `custname` varchar(20) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `slot` varchar(20) NOT NULL,
  `bkdate` date NOT NULL,
  `price` int(8) NOT NULL,
  `bk_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swim`
--

INSERT INTO `swim` (`courtname`, `custname`, `phoneno`, `email`, `slot`, `bkdate`, `price`, `bk_id`) VALUES
('Bits Club', 'vicky', '9480022223', 'vk@gm.com', '6-7 AM', '2016-05-02', 300, 558),
('Bits Club', 'pranav', '9480022223', 'pranav@gm.com', '5-6 PM', '2016-05-25', 300, 820);

-- --------------------------------------------------------

--
-- Table structure for table `tennis`
--

CREATE TABLE IF NOT EXISTS `tennis` (
  `courtname` varchar(20) NOT NULL,
  `custname` varchar(20) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `slot` varchar(20) NOT NULL,
  `bkdate` date NOT NULL,
  `price` int(8) NOT NULL,
  `bk_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tennis`
--

INSERT INTO `tennis` (`courtname`, `custname`, `phoneno`, `email`, `slot`, `bkdate`, `price`, `bk_id`) VALUES
('Jumps n hoops', 'roshini', '9686474645', 'ro@gm.com', '9-10 AM', '2016-04-29', 1000, 897),
('Cosmopoletine', 'roshini', '9876453924', 'ro@gm.com', '7-8 PM', '2016-05-20', 1000, 496),
('Cosmopoletine', 'roshini', '9876453924', 'ro@gm.com', '9-10 AM', '2016-05-02', 1000, 648),
('Lets Tennis', 'shama', '9473786437', 'sh@gmail.com', '6-7 AM', '2016-04-29', 1000, 607),
('Cosmopoletine', 'varun', '9876453924', 'vk@gm.com', '6-7 AM', '2016-05-24', 500, 829),
('Cosmopoletine', 'varun', '9473786437', 'vk@gm.com', '4-5 PM', '2016-07-07', 500, 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courtlogin`
--
ALTER TABLE `courtlogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `football`
--
ALTER TABLE `football`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`h_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `h_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
