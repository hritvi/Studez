-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2018 at 10:43 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studymanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `17114039`
--

CREATE TABLE `17114039` (
  `files` varchar(100) DEFAULT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `17114039`
--

INSERT INTO `17114039` (`files`, `enrollno`) VALUES
('preloader.html', 0),
('preloader.css', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Computer Science and Engineering`
--

CREATE TABLE `Computer Science and Engineering` (
  `Enrollno` int(10) NOT NULL,
  `course1` varchar(30) NOT NULL,
  `course2` varchar(30) NOT NULL,
  `course3` varchar(30) NOT NULL,
  `course4` varchar(30) NOT NULL,
  `course5` varchar(30) NOT NULL,
  `course6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Computer Science and Engineering`
--

INSERT INTO `Computer Science and Engineering` (`Enrollno`, `course1`, `course2`, `course3`, `course4`, `course5`, `course6`) VALUES
(17114039, 'PHN-004', 'MAN-002', 'CSN-106', 'CSN-102', 'ECN-104', 'ECN-102');

-- --------------------------------------------------------

--
-- Table structure for table `CSN-102`
--

CREATE TABLE `CSN-102` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CSN-102`
--

INSERT INTO `CSN-102` (`files`, `enrollno`) VALUES
('bootstrap.html', 0),
(' ', 17114039);

-- --------------------------------------------------------

--
-- Table structure for table `CSN-106`
--

CREATE TABLE `CSN-106` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CSN-106`
--

INSERT INTO `CSN-106` (`files`, `enrollno`) VALUES
(' ', 17114039),
('aboutme.html', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ECN-102`
--

CREATE TABLE `ECN-102` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ECN-102`
--

INSERT INTO `ECN-102` (`files`, `enrollno`) VALUES
(' ', 17114039),
('style.css', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ECN-104`
--

CREATE TABLE `ECN-104` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ECN-104`
--

INSERT INTO `ECN-104` (`files`, `enrollno`) VALUES
(' ', 17114039),
('22104510_1352508394858557_4398966300167185796_o.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ECN-142`
--

CREATE TABLE `ECN-142` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EEN-102`
--

CREATE TABLE `EEN-102` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EEN-104`
--

CREATE TABLE `EEN-104` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EEN-106`
--

CREATE TABLE `EEN-106` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EEN-112`
--

CREATE TABLE `EEN-112` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Electrical Engineering`
--

CREATE TABLE `Electrical Engineering` (
  `Enrollno` int(10) NOT NULL,
  `course1` varchar(30) NOT NULL,
  `course2` varchar(30) NOT NULL,
  `course3` varchar(30) NOT NULL,
  `course4` varchar(30) NOT NULL,
  `course5` varchar(30) NOT NULL,
  `course6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Electronics and Communication Engineering`
--

CREATE TABLE `Electronics and Communication Engineering` (
  `Enrollno` int(10) NOT NULL,
  `course1` varchar(30) NOT NULL,
  `course2` varchar(30) NOT NULL,
  `course3` varchar(30) NOT NULL,
  `course4` varchar(30) NOT NULL,
  `course5` varchar(30) NOT NULL,
  `course6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Fname` varchar(15) NOT NULL,
  `Lname` varchar(15) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Enrollno` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `course1` varchar(30) NOT NULL,
  `course2` varchar(30) NOT NULL,
  `course3` varchar(30) NOT NULL,
  `course4` varchar(30) NOT NULL,
  `course5` varchar(30) NOT NULL,
  `course6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Fname`, `Lname`, `Branch`, `Email`, `Enrollno`, `password`, `course1`, `course2`, `course3`, `course4`, `course5`, `course6`) VALUES
('Hritvi', 'Bhandari', 'Computer Science and Engineering', 'hritvi2801@gmail.com', 17114039, '123456', 'PHN-004', 'MAN-002', 'CSN-106', 'CSN-102', 'ECN-104', 'ECN-102');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `enroll` int(10) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`enroll`, `passwd`) VALUES
(17114039, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `MAN-002`
--

CREATE TABLE `MAN-002` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MAN-002`
--

INSERT INTO `MAN-002` (`files`, `enrollno`) VALUES
(' ', 17114039),
('vjd.html', 0);

-- --------------------------------------------------------

--
-- Table structure for table `MAN-010`
--

CREATE TABLE `MAN-010` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MIN-106`
--

CREATE TABLE `MIN-106` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PHN-004`
--

CREATE TABLE `PHN-004` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PHN-004`
--

INSERT INTO `PHN-004` (`files`, `enrollno`) VALUES
(' ', 17114039),
('dec2.java', 0),
('dec2.java', 0);

-- --------------------------------------------------------

--
-- Table structure for table `PHN-006`
--

CREATE TABLE `PHN-006` (
  `files` varchar(100) NOT NULL,
  `enrollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PHN-006`
--

INSERT INTO `PHN-006` (`files`, `enrollno`) VALUES
('bootstrap.html', 0),
('bootstrap.html', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Computer Science and Engineering`
--
ALTER TABLE `Computer Science and Engineering`
  ADD PRIMARY KEY (`Enrollno`),
  ADD UNIQUE KEY `Enrollno` (`Enrollno`);

--
-- Indexes for table `Electrical Engineering`
--
ALTER TABLE `Electrical Engineering`
  ADD PRIMARY KEY (`Enrollno`),
  ADD UNIQUE KEY `Enrollno` (`Enrollno`);

--
-- Indexes for table `Electronics and Communication Engineering`
--
ALTER TABLE `Electronics and Communication Engineering`
  ADD PRIMARY KEY (`Enrollno`),
  ADD UNIQUE KEY `Enrollno` (`Enrollno`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`Enrollno`),
  ADD UNIQUE KEY `Enrollment no.` (`Enrollno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`enroll`),
  ADD UNIQUE KEY `enroll` (`enroll`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
