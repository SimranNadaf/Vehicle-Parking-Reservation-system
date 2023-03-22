-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 07:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehical parking reservation system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone no` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Email`, `Phone no`, `Password`) VALUES
(1, 'Mayuri Revale', 'mayuri@gmail.com', '7263976458', 'mitu@1234'),
(2, 'Vaishnavi', 'vaishnavi@gmail.com', '7864901245', 'v@123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Name`, `Email`, `Message`, `Type`) VALUES
(1, 'Raju', 'raju@gmail.com', 'I am facing some problem while registration', 'Contact'),
(2, 'Simran Nadaf', 'simran@gmail.com', 'Your parking slot is safe and secure.', 'comment');

-- --------------------------------------------------------

--
-- Table structure for table `parking slots`
--

CREATE TABLE `parking slots` (
  `Id` int(10) NOT NULL,
  `Parking Zone` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking slots`
--

INSERT INTO `parking slots` (`Id`, `Parking Zone`, `Type`) VALUES
(1, '1', '4 Wheeler'),
(2, '2', '4 Wheeler'),
(3, '3', '4 Wheeler'),
(4, '4', '4 Wheeler'),
(5, '5', '4 Wheeler'),
(6, '6', '2 Wheeler'),
(7, '7', '2 Wheeler'),
(8, '8', '2 Wheeler'),
(9, '9', '2 Wheeler'),
(10, '10', '2 Wheeler');

-- --------------------------------------------------------

--
-- Table structure for table `parking zone _1`
--

CREATE TABLE `parking zone _1` (
  `Id` int(11) NOT NULL,
  `User Id` int(10) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking zone _1`
--

INSERT INTO `parking zone _1` (`Id`, `User Id`, `User Name`, `Start Date`, `Start Time`, `End Date`, `End Time`, `Booked Date and Time`) VALUES
(3, 1, 'Simran Nadaf', '2021-07-01', '1:00', '2021-07-02', '4:00', '2021-06-24 05:42:06.194933');

-- --------------------------------------------------------

--
-- Table structure for table `parking zone _2`
--

CREATE TABLE `parking zone _2` (
  `Id` int(11) NOT NULL,
  `User Id` int(10) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking zone _3`
--

CREATE TABLE `parking zone _3` (
  `Id` int(11) NOT NULL,
  `User Id` int(10) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking zone _4`
--

CREATE TABLE `parking zone _4` (
  `Id` int(11) NOT NULL,
  `User Id` int(10) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking zone _5`
--

CREATE TABLE `parking zone _5` (
  `Id` int(11) NOT NULL,
  `User Id` int(10) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking zone _6`
--

CREATE TABLE `parking zone _6` (
  `Id` int(11) NOT NULL,
  `User Id` int(10) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking zone _7`
--

CREATE TABLE `parking zone _7` (
  `Id` int(11) NOT NULL,
  `User Id` int(10) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking zone _7`
--

INSERT INTO `parking zone _7` (`Id`, `User Id`, `User Name`, `Start Date`, `Start Time`, `End Date`, `End Time`, `Booked Date and Time`) VALUES
(2, 1, 'Simran Nadaf', '2021-07-03', '0:30', '2021-07-04', '4:00', '2021-06-24 05:46:15.283546');

-- --------------------------------------------------------

--
-- Table structure for table `parking zone _8`
--

CREATE TABLE `parking zone _8` (
  `Id` int(11) NOT NULL,
  `User Id` int(10) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking zone _9`
--

CREATE TABLE `parking zone _9` (
  `Id` int(11) NOT NULL,
  `User Id` int(10) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking zone _10`
--

CREATE TABLE `parking zone _10` (
  `Id` int(11) NOT NULL,
  `User Id` int(10) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `simran nadaf_1`
--

CREATE TABLE `simran nadaf_1` (
  `Id` int(11) NOT NULL,
  `Parking Zone` varchar(20) NOT NULL,
  `Vehicle Type` varchar(10) NOT NULL,
  `Start Date` varchar(10) NOT NULL,
  `Start Time` varchar(10) NOT NULL,
  `End Date` varchar(10) NOT NULL,
  `End Time` varchar(10) NOT NULL,
  `Booked Date and Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simran nadaf_1`
--

INSERT INTO `simran nadaf_1` (`Id`, `Parking Zone`, `Vehicle Type`, `Start Date`, `Start Time`, `End Date`, `End Time`, `Booked Date and Time`) VALUES
(1, 'parking zone _1', '4 Wheeler', '2021-07-01', '1:00', '2021-07-02', '4:00', '2021-06-24 05:42:06.198871'),
(3, 'parking zone _7', '2 Wheeler', '2021-07-03', '0:30', '2021-07-04', '4:00', '2021-06-24 05:46:15.293936');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone no` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Gender`, `Email`, `Phone no`, `Address`, `Password`) VALUES
(1, 'Simran Nadaf', 'female', 'simran@gmail.com', '9076234597', 'Sagmeshwar , ratnagiri', 's@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking slots`
--
ALTER TABLE `parking slots`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking zone _1`
--
ALTER TABLE `parking zone _1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking zone _2`
--
ALTER TABLE `parking zone _2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking zone _3`
--
ALTER TABLE `parking zone _3`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking zone _4`
--
ALTER TABLE `parking zone _4`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking zone _5`
--
ALTER TABLE `parking zone _5`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking zone _6`
--
ALTER TABLE `parking zone _6`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking zone _7`
--
ALTER TABLE `parking zone _7`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking zone _8`
--
ALTER TABLE `parking zone _8`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking zone _9`
--
ALTER TABLE `parking zone _9`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parking zone _10`
--
ALTER TABLE `parking zone _10`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `simran nadaf_1`
--
ALTER TABLE `simran nadaf_1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parking slots`
--
ALTER TABLE `parking slots`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parking zone _1`
--
ALTER TABLE `parking zone _1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parking zone _2`
--
ALTER TABLE `parking zone _2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parking zone _3`
--
ALTER TABLE `parking zone _3`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking zone _4`
--
ALTER TABLE `parking zone _4`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking zone _5`
--
ALTER TABLE `parking zone _5`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking zone _6`
--
ALTER TABLE `parking zone _6`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking zone _7`
--
ALTER TABLE `parking zone _7`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parking zone _8`
--
ALTER TABLE `parking zone _8`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking zone _9`
--
ALTER TABLE `parking zone _9`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking zone _10`
--
ALTER TABLE `parking zone _10`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `simran nadaf_1`
--
ALTER TABLE `simran nadaf_1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
