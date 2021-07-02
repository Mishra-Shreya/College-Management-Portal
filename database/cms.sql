-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 06:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `userid`, `pwd`) VALUES
(1, 'shreya@admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Id` int(11) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `year` varchar(2) NOT NULL,
  `division` varchar(1) NOT NULL,
  `fac1` varchar(50) DEFAULT NULL,
  `fac1ln` varchar(50) DEFAULT NULL,
  `fac1username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Id`, `dept`, `year`, `division`, `fac1`, `fac1ln`, `fac1username`) VALUES
(1, 'CIVIL', 'FE', 'A', 'Sheetal', 'Chaudhary', 'sheetal@faculty'),
(14, 'CIVIL', 'FE', 'B', 'Shreya', 'Mishra', 'shreya@faculty');

-- --------------------------------------------------------

--
-- Table structure for table `class civil fe a`
--

CREATE TABLE `class civil fe a` (
  `Id` int(11) NOT NULL,
  `stufname` varchar(50) NOT NULL,
  `stulname` varchar(50) NOT NULL,
  `studentusername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class civil fe a`
--

INSERT INTO `class civil fe a` (`Id`, `stufname`, `stulname`, `studentusername`) VALUES
(30, 'Shreya', 'Mishra', 'shreya@student'),
(31, 'Sheetal', 'Chaudhary', 'sheetal@student'),
(32, 'Riya', 'Shetty', 'riya@student');

-- --------------------------------------------------------

--
-- Table structure for table `class civil fe b`
--

CREATE TABLE `class civil fe b` (
  `Id` int(11) NOT NULL,
  `stufname` varchar(50) NOT NULL,
  `stulname` varchar(50) NOT NULL,
  `studentusername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Id` int(11) NOT NULL,
  `dept` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Id`, `dept`) VALUES
(4, 'AI'),
(6, 'CIVIL'),
(2, 'COMP'),
(1, 'E&TC'),
(3, 'IT'),
(5, 'MECH');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `fname`, `lname`, `username`, `password`, `qualification`, `gender`, `dob`, `phone`, `email`) VALUES
(1, 'Shreya', 'Mishra', 'shreya@faculty', '$2y$10$97DfCa1QG9GlbQpH7oNGFO3ID5O5BYp6d3yxp/oGLy/VLq9N5Z8zC', 'BE/BTech', 'Female', '2001-09-06', 9004692762, 'shreya@gmail.com'),
(2, 'Sheetal', 'Chaudhary', 'sheetal@faculty', '$2y$10$QI.Y3Miww4mSn.IH3v1WPuavShahSgLkosZYZEwjPz71v2sSPuuoK', 'BE/BTech', 'Female', '2001-05-19', 8850791440, 'sheetal@gmail.com'),
(3, 'Riya', 'Shetty', 'riya@faculty', '$2y$10$F66Hz5Nrg.ySHSPvQN0pA.nVG8aZquC3Gp52ZPxOphCbFRiQcA8MW', 'BE/BTech', 'Female', '2021-06-03', 1234567894, 'riya@gmail.com'),
(4, 'Maya', 'Mishra', 'maya@faculty', '$2y$10$9T8UiYmQ94a5hcs39JUqOucW2U7pPRFhSSU2P5s9ODbmK0Zl/Fbr6', 'MS/ME/MTech', 'Female', '2021-06-16', 1112223334, 'maya@gmail.com'),
(5, 'Sanjay', 'Mishra', 'sanjay@faculty', '$2y$10$jxFqI54CKvl1r4bPkhibxuGsMqB1xcZl7.ZM7PkTrNF.XctG.wBCO', 'BE/BTech', 'Male', '2021-06-16', 1122334455, 'sanjay@gmail.com'),
(8, 'Sourish', 'Mishra', 'sourish@faculty', '$2y$10$c2zpQ/jSbnWLbvJxsaVfzuOhRRUPBakWsUIRRpzoILanSDC7ibRA2', 'BE/BTech', 'Male', '2021-06-17', 1111112222, 'sourish@gmail.com'),
(9, 'Hero', 'ABC', 'abc@faculty', '$2y$10$GCDkbN5C5ZzTCWEL41hbousB9Z3GCenlOUy8WmzWr5E6xlOB8MUOu', 'MS/ME/MTech', 'Transgender', '2021-06-17', 1122334455, 'abc@gmail.com'),
(10, 'faculty1', 'fac', 'faculty1@faculty', '$2y$10$qwROmy8TJl/syQzDt7oXHOQyGYeRiOsEIPeitPvlS2X2tx2RrbxoG', 'BE/BTech', 'Male', '2021-06-17', 1212121212, 'faculty1@gmail.com'),
(11, 'Shivani', 'Srivastava', 'shivani@faculty', '$2y$10$gEhZxVqxQLTz9/bCLlWB2.JKkik8QjOLvowC4ESy/Zhd.g3ULiLZO', 'BE/BTech', 'Female', '2021-04-08', 9969244244, 'shivani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `facultyclassdetails`
--

CREATE TABLE `facultyclassdetails` (
  `Id` int(11) NOT NULL,
  `FacUsername` varchar(50) NOT NULL,
  `FacFirstname` varchar(50) NOT NULL,
  `FacLastname` varchar(50) NOT NULL,
  `year` varchar(2) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `division` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultyclassdetails`
--

INSERT INTO `facultyclassdetails` (`Id`, `FacUsername`, `FacFirstname`, `FacLastname`, `year`, `dept`, `division`) VALUES
(1, 'sheetal@faculty', 'Sheetal', 'Chaudhary', 'FE', 'CIVIL', 'A'),
(13, 'shreya@faculty', 'Shreya', 'Mishra', 'FE', 'CIVIL', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `division` varchar(1) DEFAULT NULL,
  `gender` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `fname`, `lname`, `username`, `password`, `division`, `gender`, `dob`, `phone`, `email`) VALUES
(1, 'Shreya', 'Mishra', 'shreya@student', '$2y$10$ySbb3nNXJLhUrZegYLgWZe6kU.FExQ1nSVasn2yuhaKUQEC0f9XLq', NULL, 'Female', '2001-09-06', 9004692762, 'shreya@gmail.com'),
(2, 'Sheetal', 'Chaudhary', 'sheetal@student', '$2y$10$ztBx1ZE0SmkFD3YiRaDPUOzS97gs7BLefIcuw5ggAILDQ2Bmfe5NG', NULL, 'Female', '2021-06-16', 8850791440, 'sheetal@gmail.com'),
(3, 'Riya', 'Shetty', 'riya@student', '$2y$10$JZRjhSiGc0AFpde3I3MHx.I5G1OpFa..Db12vUKnlLqn5OQ6V5hDa', NULL, 'Female', '2021-06-16', 1234567894, 'riya@gmail.com'),
(4, 'Vaibhavi', 'Gawde', 'vaibhavi@student', '$2y$10$/Onv71Ne.tOrpWl6HDT6Au/yqsf8TvJ55KjSw970Wh0GJIZL3gXqO', NULL, 'Female', '2021-06-01', 6665554443, 'vaibhavi@gmail.com'),
(5, 'Maya', 'Mishra', 'maya@student', '$2y$10$QF.spWG.HVDMG6XQuVE6COCoU2XQ4QS4YlpRu81ieCWY9b56wZlWW', NULL, 'Female', '1976-10-19', 1112223334, 'maya@gmail.com'),
(6, 'stu1', 'student', 'stu1@student', '$2y$10$q8r9Iwk0TxqvmqnQ4lFQX.4kIzMYb91j9NzhonsRl5jW1mjzLbOGS', NULL, 'Male', '2021-06-01', 9988776655, 'stu1@gmail.com'),
(7, 'Bhoomi', 'Shirke', 'bhoomi@student', '$2y$10$IFC6Qwi5lbHjsE8dC7RJ6edD2KORO0XcAe96xJwykpNf7GfabgPja', NULL, 'Female', '2021-06-16', 2233223322, 'bhoomi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentclassdetails`
--

CREATE TABLE `studentclassdetails` (
  `Id` int(11) NOT NULL,
  `StuUsername` varchar(50) NOT NULL,
  `StuFirstname` varchar(50) NOT NULL,
  `StuLastname` varchar(50) NOT NULL,
  `year` varchar(2) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `division` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentclassdetails`
--

INSERT INTO `studentclassdetails` (`Id`, `StuUsername`, `StuFirstname`, `StuLastname`, `year`, `dept`, `division`) VALUES
(21, 'shreya@student', 'Shreya', 'Mishra', 'FE', 'CIVIL', 'A'),
(22, 'sheetal@student', 'Sheetal', 'Chaudhary', 'FE', 'CIVIL', 'A'),
(23, 'riya@student', 'Riya', 'Shetty', 'FE', 'CIVIL', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UNIQUE_AUID` (`userid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UNIQUE_FAC1UID` (`fac1username`);

--
-- Indexes for table `class civil fe a`
--
ALTER TABLE `class civil fe a`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `studentusername` (`studentusername`);

--
-- Indexes for table `class civil fe b`
--
ALTER TABLE `class civil fe b`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `studentusername` (`studentusername`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UNIQUE_DEPT` (`dept`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UNIQUE_FUID` (`username`);

--
-- Indexes for table `facultyclassdetails`
--
ALTER TABLE `facultyclassdetails`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UNIQUE_FACCLASSDETAIL` (`FacUsername`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UNIQUE_SUID` (`username`);

--
-- Indexes for table `studentclassdetails`
--
ALTER TABLE `studentclassdetails`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UNIQUE_STUCLASSDETAILS` (`StuUsername`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `class civil fe a`
--
ALTER TABLE `class civil fe a`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `class civil fe b`
--
ALTER TABLE `class civil fe b`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `facultyclassdetails`
--
ALTER TABLE `facultyclassdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studentclassdetails`
--
ALTER TABLE `studentclassdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
