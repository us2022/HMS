-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 10:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_database_jd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(1) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'Jitendra Dhakad', 'jitendra@gmail.com', 'jitendra@123'),
(2, 'Jaya Singh', 'jaya@gmail.com', 'jaya@123');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `name`, `subject`, `email`, `message`) VALUES
(1, 'Sachin', 'configuration', 'sachin@gmail.com', 'Hostel Management Systen Using HTML, PHP and MySQL\r\nInstallation Steps(Configuration)\r\n1. save the file on your local system as [hms].\r\n2. Put this file inside xampp/htdocs/ .\r\n3. Database Configuration\r\nOpen phpmyadmin\r\nCreate Database hms.\r\nImport database hms.sql\r\nOpen Your browser put inside browser “http://localhost/hms/index.html”\r\nLogin Details\r\nLogin Details for admin : jitendra@gmail.com/jitendra@123, OR : jaya@gmail.com/jaya@123 \r\nLogin Details for user : 1806086/jitendra@123');

-- --------------------------------------------------------

--
-- Table structure for table `std_data`
--

CREATE TABLE `std_data` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Roll_no` int(10) NOT NULL,
  `DoB` date NOT NULL,
  `Gender` text NOT NULL,
  `Nationality` varchar(25) NOT NULL,
  `Course` text NOT NULL,
  `Branch` varchar(25) NOT NULL,
  `Year` text NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Phone` decimal(10,0) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Medical_illness` text NOT NULL,
  `R_name` text NOT NULL,
  `Relation` text NOT NULL,
  `R_phone` decimal(10,0) NOT NULL,
  `Hostel` text NOT NULL,
  `Room_no` text NOT NULL,
  `Fee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_data`
--

INSERT INTO `std_data` (`ID`, `Name`, `Roll_no`, `DoB`, `Gender`, `Nationality`, `Course`, `Branch`, `Year`, `Email`, `Phone`, `Password`, `Address`, `Medical_illness`, `R_name`, `Relation`, `R_phone`, `Hostel`, `Room_no`, `Fee`) VALUES
(1, 'Jitendra Dhakad', 1806086, '1999-04-05', 'Male', 'Indian', 'B.Tech', 'CSE', '2nd', 'jitendra@gmail.com', '8888866666', 'jitendra@123', 'Indore, M.P.', 'no', 'Sachin', 'Friend', '8888855555', 'Brahmaputra', '744', '15000, paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `std_data`
--
ALTER TABLE `std_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `std_data`
--
ALTER TABLE `std_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
