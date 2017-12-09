-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2017 at 11:21 PM
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
  `Tend` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BID`, `FID`, `MID`, `Bdate`, `Tstart`, `Tend`) VALUES
(101, 201, 101, '2017-12-04', '16:30:00', '17:30:00');

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
(101, 'Tennis Court 1', 100),
(102, 'Tennis Court 2', 100),
(201, 'Badminton Court 1', 160),
(202, 'Badminton Court 2', 160),
(203, 'Badminton Court 3', 160),
(204, 'Badminton Court 4', 160),
(301, 'Basketball Court', 1200),
(401, 'Valleball Court', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MID` int(11) NOT NULL,
  `Mname` text NOT NULL,
  `Mtel` text NOT NULL,
  `Mmail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MID`, `Mname`, `Mtel`, `Mmail`) VALUES
(101, 'Piyawat Innurak', '0918236849', 'punkaze.imp@gmail.com'),
(102, 'Natee Buranapan', '0918236849', 'punkaze.imp@gmail.com'),
(103, 'Radsiri Chanawan', '0918236849', 'punkaze.imp@gmail.com');

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
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `feild`
--
ALTER TABLE `feild`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
