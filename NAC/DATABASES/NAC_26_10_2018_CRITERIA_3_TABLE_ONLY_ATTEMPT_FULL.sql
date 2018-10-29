-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2018 at 09:01 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NAC`
--

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_1`
--

CREATE TABLE `t3_1_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_1_1`
--

INSERT INTO `t3_1_1` (`Username`, `descr`, `Link`, `id_time`) VALUES
('admin3', 'google \' > < ? # 2 4 #$ \" kdlfm \"', 'dlfmdfm \' \" dmf < > ? & difm', 'TA3_1_1');

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_2`
--

CREATE TABLE `t3_1_2` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Amount` int(12) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Duration` int(12) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_3`
--

CREATE TABLE `t3_1_3` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Award` varchar(400) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_4`
--

CREATE TABLE `t3_1_4` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Duration` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Agency` varchar(300) NOT NULL,
  `Exam` varchar(300) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_5`
--

CREATE TABLE `t3_1_5` (
  `Username` varchar(200) NOT NULL,
  `Choice` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_6`
--

CREATE TABLE `t3_1_6` (
  `Username` varchar(100) NOT NULL,
  `Scheme` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Funds` double NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_2_2`
--

CREATE TABLE `t3_2_2` (
  `Username` varchar(200) NOT NULL,
  `Project` varchar(300) NOT NULL,
  `Principal` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Funds` double NOT NULL,
  `Duration` double NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_2_3`
--

CREATE TABLE `t3_2_3` (
  `Username` varchar(200) NOT NULL,
  `Principal` varchar(300) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Duration` double NOT NULL,
  `Project` varchar(200) NOT NULL,
  `Funds` double NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_1`
--

CREATE TABLE `t3_3_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_3_1`
--

INSERT INTO `t3_3_1` (`Username`, `descr`, `Link`, `id_time`) VALUES
('admin3', 'google descr \' \" < >  ? % &', 'google link \' \" < >  ? % &', 'TA3_3_1');

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_2`
--

CREATE TABLE `t3_3_2` (
  `Username` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Datefrom` varchar(200) NOT NULL,
  `Dateto` varchar(200) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `Dateest` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_3`
--

CREATE TABLE `t3_3_3` (
  `Username` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(300) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_4`
--

CREATE TABLE `t3_3_4` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Nature` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Contact` varchar(300) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_1`
--

CREATE TABLE `t3_4_1` (
  `Username` varchar(200) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `YesNo` varchar(50) NOT NULL,
  `Mechanism` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_2`
--

CREATE TABLE `t3_4_2` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Award` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Details` varchar(500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_3`
--

CREATE TABLE `t3_4_3` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Number` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_4`
--

CREATE TABLE `t3_4_4` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Guide` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Reg` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_5`
--

CREATE TABLE `t3_4_5` (
  `Username` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Journal` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `ISBN` varchar(200) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_4_5`
--

INSERT INTO `t3_4_5` (`Username`, `Title`, `Name`, `Department`, `Journal`, `Period`, `Year`, `ISBN`, `Link`, `id_time`) VALUES
('admin3', 'title', 'name', 'dept', 'name', '2018', 'Feb 14 - June 14', 'isab', 'link', '1540820903068');

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_6`
--

CREATE TABLE `t3_4_6` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `BTitle` varchar(200) NOT NULL,
  `PTitle` varchar(200) NOT NULL,
  `ProTitle` varchar(200) NOT NULL,
  `CTitle` varchar(200) NOT NULL,
  `Nation` varchar(50) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `ISBN` varchar(200) NOT NULL,
  `Inst` varchar(200) NOT NULL,
  `Publ` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_7`
--

CREATE TABLE `t3_4_7` (
  `Username` varchar(200) NOT NULL,
  `PTitle` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `JTitle` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `indx` varchar(200) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `cit` int(11) NOT NULL,
  `id_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_8`
--

CREATE TABLE `t3_4_8` (
  `Username` varchar(200) NOT NULL,
  `PTitle` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `JTitle` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `indx` varchar(200) NOT NULL,
  `cit` int(11) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `id_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_5_1`
--

CREATE TABLE `t3_5_1` (
  `Username` varchar(200) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_5_2`
--

CREATE TABLE `t3_5_2` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Project` varchar(200) NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Revenue` double NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_5_3`
--

CREATE TABLE `t3_5_3` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Revenue` double NOT NULL,
  `Trainees` double NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_1`
--

CREATE TABLE `t3_6_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_6_1`
--

INSERT INTO `t3_6_1` (`Username`, `descr`, `Link`, `id_time`) VALUES
('admin3', 'google         fetch_rows_331_link(); \' \"         fetch_rows_331_link();', 'google         fetch_rows_331_link(); \' \"         fetch_rows_331_link();', 'TA3_6_1');

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_2`
--

CREATE TABLE `t3_6_2` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Award` varchar(200) NOT NULL,
  `AwardG` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_3`
--

CREATE TABLE `t3_6_3` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Award` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Teachers` double NOT NULL,
  `Students` double NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_4`
--

CREATE TABLE `t3_6_4` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Award` varchar(200) NOT NULL,
  `Scheme` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Teachers` double NOT NULL,
  `Students` double NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_7_1`
--

CREATE TABLE `t3_7_1` (
  `Username` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Source` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Duration` double NOT NULL,
  `Nature` varchar(200) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_7_1`
--

INSERT INTO `t3_7_1` (`Username`, `Title`, `Agency`, `Name`, `Source`, `Period`, `Year`, `Duration`, `Nature`, `Link`, `id_time`) VALUES
('admin3', 'a', 'b', 'c', 'b', '32', 'July 15 - June 16', 6, 'h', 'google \'  &h', '1540823629251');

-- --------------------------------------------------------

--
-- Table structure for table `t3_7_2`
--

CREATE TABLE `t3_7_2` (
  `Username` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Durfrom` varchar(100) NOT NULL,
  `Durto` varchar(100) NOT NULL,
  `Nature` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_7_2`
--

INSERT INTO `t3_7_2` (`Username`, `Title`, `Agency`, `Year`, `Durfrom`, `Durto`, `Nature`, `Name`, `Link`, `id_time`) VALUES
('admin3', 'dkjsdn', 'jnkdnff', 'July 14 - June 15', '2018-12-29', '2018-12-31', 'fdfjd', 'fdkjnfk', 'http://localhost/PROJECTS/univ_data_gathering/NAC/profile/docs/29-10-2018_20-15-47OPERATING SYSTEM ROUND -1 FIRDAY 2019 . - Gate @ Zeal.pdf', '1540823996524');

-- --------------------------------------------------------

--
-- Table structure for table `t3_7_3`
--

CREATE TABLE `t3_7_3` (
  `Username` varchar(200) NOT NULL,
  `org` varchar(200) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `duration` double NOT NULL,
  `activities` varchar(500) NOT NULL,
  `nums` double NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t3_1_1`
--
ALTER TABLE `t3_1_1`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `t3_1_4`
--
ALTER TABLE `t3_1_4`
  ADD UNIQUE KEY `id_time` (`id_time`);

--
-- Indexes for table `t3_6_1`
--
ALTER TABLE `t3_6_1`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `t3_7_1`
--
ALTER TABLE `t3_7_1`
  ADD PRIMARY KEY (`id_time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
