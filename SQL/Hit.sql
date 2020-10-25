-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2019 at 09:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hit`
--

-- --------------------------------------------------------

--
-- Table structure for table `Classes`
--

CREATE TABLE `Classes` (
  `Name` varchar(100) NOT NULL,
  `Picture` varchar(128) DEFAULT NULL,
  `Description` text,
  `Ladies_Only` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Classes`
--

INSERT INTO `Classes` (`Name`, `Picture`, `Description`, `Ladies_Only`) VALUES
(' KickBoxing', 'img/vandamme.jpg', 'cvdfgbhdfhb', 0),
('Cycling', 'img/Cycling.jpg', 'jfjfjjf', 0),
('Raise The Bar', 'img/Bar.jpg', 'hvkhjvjkjkvjk', 0),
('Trampoline', 'img/Trampoline.jpg', 'jdnndndnd', 0),
('Yoga', 'img/Yoga.jpg', 'HFHFHHHDS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Coached_By`
--

CREATE TABLE `Coached_By` (
  `Day` int(11) NOT NULL,
  `Time` time NOT NULL,
  `Coach_Name` varchar(100) NOT NULL,
  `Class_Name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Coached_By`
--

INSERT INTO `Coached_By` (`Day`, `Time`, `Coach_Name`, `Class_Name`) VALUES
(1, '08:00:00', 'Johnny', 'Trampoline'),
(1, '08:00:00', 'lobna', 'Yoga'),
(1, '08:00:00', 'Ola', 'Yoga'),
(1, '08:00:00', 'Reem', 'Yoga'),
(1, '08:12:00', 'Bassem', 'Raise The Bar'),
(2, '08:00:00', 'Bassem', 'Raise The Bar'),
(2, '10:00:00', 'Johnny', 'Raise The Bar'),
(2, '10:00:00', 'Reem', 'Trampoline'),
(3, '08:00:00', 'Bassem', 'Trampoline');

-- --------------------------------------------------------

--
-- Table structure for table `Coaches`
--

CREATE TABLE `Coaches` (
  `Name` varchar(100) NOT NULL,
  `Picture` varchar(128) DEFAULT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Coaches`
--

INSERT INTO `Coaches` (`Name`, `Picture`, `Description`) VALUES
('Bassem', 'img/Bassem.jpg', 'whatever'),
('Johnny', 'img/Johnny.jpg', 'whateverahhshshhs'),
('Reem', 'img/Reem.jpg', 'wjwwhhwjkwkw');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Email` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Studio_Schedule`
--

CREATE TABLE `Studio_Schedule` (
  `Day` int(10) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Studio` varchar(255) NOT NULL,
  `Class_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Classes`
--
ALTER TABLE `Classes`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `Coached_By`
--
ALTER TABLE `Coached_By`
  ADD PRIMARY KEY (`Day`,`Time`,`Coach_Name`);

--
-- Indexes for table `Coaches`
--
ALTER TABLE `Coaches`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Phone_Number_2` (`Phone_Number`),
  ADD UNIQUE KEY `Phone_Number` (`Phone_Number`(15));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
