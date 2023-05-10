-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 07:54 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `regDate`) VALUES
(1, 'Sarita Pandey', 'admin', 9899898787, 'sarita@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-03-22 07:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbllaundryreq`
--

CREATE TABLE `tbllaundryreq` (
  `ID` int(10) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `DateofLaundry` date DEFAULT NULL,
  `TopWear` varchar(120) DEFAULT NULL,
  `BootomWear` varchar(120) DEFAULT NULL,
  `WoolenCloth` varchar(120) DEFAULT NULL,
  `Other` varchar(120) DEFAULT NULL,
  `Service` varchar(120) DEFAULT NULL,
  `PickupAddress` varchar(250) DEFAULT NULL,
  `ContactPerson` varchar(120) DEFAULT NULL,
  `Description` varchar(120) DEFAULT NULL,
  `Status` varchar(5) NOT NULL,
  `Othercharges` bigint(20) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `PaymentType` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllaundryreq`
--

INSERT INTO `tbllaundryreq` (`ID`, `UserID`, `DateofLaundry`, `TopWear`, `BootomWear`, `WoolenCloth`, `Other`, `Service`, `PickupAddress`, `ContactPerson`, `Description`, `Status`, `Othercharges`, `postingDate`, `PaymentType`) VALUES
(1, 1, '2019-02-01', '4', '4', '6', '6', 'on', 'YUIROU', 'YTHTUI', 'TU', '3', 0, '2019-03-19 18:09:51', NULL),
(2, 1, '2019-03-14', '4', '3', '2', '5', 'on', 'Mohan Park east delhi', 'Ruhaani', 'there is one full dress', '3', 550, '2019-03-19 18:09:51', NULL),
(3, 1, '2019-03-16', '5', '6', '7', '3', 'on', 'gffhgji', 'rfetty', 'kjhhiu', '3', 0, '2019-03-19 18:09:51', NULL),
(4, 5, '2019-03-19', '4', '2', '1', '2', 'on', 'jhgj', 'kj', 'k', '3', 20, '2019-03-19 18:09:51', NULL),
(5, 5, '2019-03-19', '4', '2', '0', '0', 'on', 'jhgj', 'kj', 'k', '3', 50, '2019-03-19 18:09:51', NULL),
(6, 5, '2019-03-28', '5', '2', '0', '0', 'pickupservice', 'Mayur Vihar Dekhi', 'Anuj', 'Come on time', '3', 300, '2019-03-19 18:09:51', NULL),
(7, 2, '2019-03-21', '1', '5', '4', '9', 'dropservice', '', 'Ms. Neelima', 'sdfsrt', '3', 300, '2019-03-20 07:46:51', NULL),
(8, 7, '2019-03-28', '2', '1', '3', '0', 'pickupservice', 'New Delhi India', 'Anuj Kumar', 'This sample text for testing.', '1', NULL, '2019-03-22 11:24:39', NULL),
(9, 9, '2019-03-24', '2', '4', '1', '0', 'pickupservice', 'Mayur Vihar New Delhi', 'Anuj kumar', 'Sample text', '1', NULL, '2019-03-22 11:58:17', NULL),
(10, 10, '2019-03-24', '4', '2', '4', '0', 'pickupservice', 'Mayur Vihar Phase 1 New Delhi', 'Anuj kumar', 'Sample text', '3', 0, '2019-03-22 12:04:07', NULL),
(11, 11, '2019-03-25', '4', '5', '4', '0', 'pickupservice', 'Mayur Vihar Phase 1 New Delhi', 'Anuj kumar', 'Sample text', '3', 0, '2019-03-22 12:16:30', NULL),
(12, 11, '2021-03-07', '5', '6', '2', '1', 'dropservice', '', 'Anuj', 'jhhkhj', '0', NULL, '2021-02-28 13:21:40', 'Cash on Delivery'),
(13, 11, '2021-03-25', '10', '10', '2', '1', 'dropservice', '', 'fghfg', 'fghfg', '0', NULL, '2021-03-24 17:42:34', 'Cash on Delivery'),
(14, 11, '2021-03-25', '10', '10', '2', '1', 'dropservice', '', 'fghfg', 'fghfg', '0', NULL, '2021-03-24 17:42:36', 'Cash on Delivery'),
(15, 11, '2021-03-25', '10', '10', '2', '1', 'dropservice', '', 'fghfg', 'fghfg', '0', NULL, '2021-03-24 17:43:37', 'Cash on Delivery'),
(16, 11, '2021-03-25', '10', '10', '2', '1', 'dropservice', '', 'fghfg', 'fghfg', '0', NULL, '2021-03-24 17:44:35', 'Cash on Delivery'),
(17, 11, '2021-03-25', '10', '10', '2', '1', 'dropservice', '', 'fghfg', 'fghfg', '0', NULL, '2021-03-24 17:45:24', 'Cash on Delivery'),
(18, 11, '2021-03-25', '10', '10', '2', '1', 'dropservice', '', 'fghfg', 'fghfg', '0', NULL, '2021-03-24 17:47:20', 'Cash on Delivery'),
(23, 11, '2021-06-20', '2', '5', '0', '0', 'dropservice', '', 'Rahul', 'NA', '0', NULL, '2021-06-11 17:11:37', 'Cash on Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `tblpricelist`
--

CREATE TABLE `tblpricelist` (
  `Id` int(11) NOT NULL,
  `TopWear` varchar(120) DEFAULT NULL,
  `BottomWear` varchar(120) DEFAULT NULL,
  `Woolen` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpricelist`
--

INSERT INTO `tblpricelist` (`Id`, `TopWear`, `BottomWear`, `Woolen`) VALUES
(1, '12', '22', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Password` varchar(120) NOT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Id`, `FullName`, `Email`, `MobileNumber`, `Password`, `regDate`) VALUES
(1, 'Sarita', 'sarita@gmail.com', 7897866565, 'f925916e2754e5e03f75dd58a5733251', '2019-03-22 10:41:45'),
(2, 'Garauv', 'gar@gmail.com', 5887898464, '202cb962ac59075b964b07152d234b70', '2019-03-22 10:41:45'),
(3, 'Manu Jain', 'manu@gmail.com', 1239879797, '202cb962ac59075b964b07152d234b70', '2019-03-22 10:41:45'),
(4, 'Mohini Singh', 'mohini@gmail.com', 6567786878, '202cb962ac59075b964b07152d234b70', '2019-03-22 10:41:45'),
(5, 'Mahesh Pandey', 'mahesh@gmail.com', 8989798799, '202cb962ac59075b964b07152d234b70', '2019-03-22 10:41:45'),
(6, 'Sonu Walia', 'sonu@gmail.com', 8989898989, '202cb962ac59075b964b07152d234b70', '2019-03-22 10:41:45'),
(7, 'Test User', 'testuser@gmail.com', 1234567890, 'f925916e2754e5e03f75dd58a5733251', '2019-03-22 11:20:59'),
(9, 'demo user test', 'demouser@gmail.com', 123456789, 'f925916e2754e5e03f75dd58a5733251', '2019-03-22 11:56:37'),
(10, 'dummy user', 'dummyuser@gmail.com', 1234567780, 'f925916e2754e5e03f75dd58a5733251', '2019-03-22 12:02:29'),
(11, 'abc xyz', 'abcxyz@gmail.com', 1234567800, 'f925916e2754e5e03f75dd58a5733251', '2019-03-22 12:14:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbllaundryreq`
--
ALTER TABLE `tbllaundryreq`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpricelist`
--
ALTER TABLE `tblpricelist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbllaundryreq`
--
ALTER TABLE `tbllaundryreq`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblpricelist`
--
ALTER TABLE `tblpricelist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
