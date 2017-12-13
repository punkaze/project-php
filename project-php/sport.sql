-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2017 at 01:02 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BID` int(11) NOT NULL,
  `FID` int(11) NOT NULL,
  `MID` int(11) NOT NULL,
  `Bdate` date NOT NULL,
  `Tstart` time NOT NULL,
  `Tend` time NOT NULL,
  `Bprice` int(11) NOT NULL,
  `Bstatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BID`, `FID`, `MID`, `Bdate`, `Tstart`, `Tend`, `Bprice`, `Bstatus`) VALUES
(101, 201, 101, '2017-12-04', '16:30:01', '17:30:00', 160, 'Waiting for payment'),
(106, 201, 101, '2017-12-08', '16:30:01', '18:30:00', 320, 'Waiting for payment'),
(111, 101, 101, '2017-12-09', '16:30:01', '17:30:00', 100, 'Waiting for payment'),
(112, 204, 102, '2017-12-10', '17:30:01', '20:30:00', 480, 'Waiting for payment');

-- --------------------------------------------------------

--
-- Table structure for table `feild`
--

CREATE TABLE `feild` (
  `FID` int(11) NOT NULL,
  `Fname` text NOT NULL,
  `Fprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feild`
--

INSERT INTO `feild` (`FID`, `Fname`, `Fprice`) VALUES
(101, 'Tennis court 1', 100),
(102, 'Tennis court 2', 100),
(201, 'Badminton court 1', 160),
(202, 'Badminton court 2', 160),
(203, 'Badminton court 3', 160),
(204, 'Badminton court 4', 160),
(301, 'Basketball court', 1200),
(401, 'Volleyball court', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MID` int(11) NOT NULL,
  `Mname` text NOT NULL,
  `Mtel` text NOT NULL,
  `Mmail` text NOT NULL,
  `Mpasswd` text NOT NULL,
  `Mstatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MID`, `Mname`, `Mtel`, `Mmail`, `Mpasswd`, `Mstatus`) VALUES
(100, 'admin', '-', 'admin@admin.com', 'admin', 'admin'),
(101, 'Piyawat Innurak', '0918236849', 'punkaze.imp@gmail.com', 'punkaze', 'user'),
(102, 'Ja', '0824333013', 'jaeiei@hotmail.com', '', 'user'),
(103, 'radsiri', '0936081407', 'radsiri9639@gmail.com', '', 'user'),
(104, 'radsiri chanwan', '0936081407', 'radsiri9639@gmail.com', '', 'user'),
(105, 'Natee View', '0123456789', 'natee@gmail.com', '123456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `feild`
--
ALTER TABLE `feild`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `feild`
--
ALTER TABLE `feild`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
