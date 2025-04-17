-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 04:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  `UserType` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `UserType`) VALUES
(2, 'Admin', 'admin', 1234596321, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-01-01 12:52:23', 1),
(3, 'Anuj kumar', 'akr305', 1234567891, 'ak@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-01-01 12:52:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbllawyers`
--

CREATE TABLE `tbllawyers` (
  `id` int(11) NOT NULL,
  `LawyerName` varchar(200) DEFAULT NULL,
  `LawyerEmail` varchar(200) DEFAULT NULL,
  `LawyerMobileNo` bigint(12) DEFAULT NULL,
  `OfficeAddress` mediumtext DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `LanguagesKnown` mediumtext DEFAULT NULL,
  `ProfilePic` varchar(200) DEFAULT NULL,
  `LawyerExp` bigint(2) DEFAULT NULL,
  `PracticeAreas` mediumtext DEFAULT NULL,
  `Courts` mediumtext DEFAULT NULL,
  `Website` varchar(150) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `IsPublic` int(1) DEFAULT NULL,
  `AddedBy` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbllawyers`
--

INSERT INTO `tbllawyers` (`id`, `LawyerName`, `LawyerEmail`, `LawyerMobileNo`, `OfficeAddress`, `City`, `State`, `LanguagesKnown`, `ProfilePic`, `LawyerExp`, `PracticeAreas`, `Courts`, `Website`, `Description`, `RegDate`, `IsPublic`, `AddedBy`) VALUES
(1, 'Anuj kumar', 'ak@gmail.com', 1234567890, 'A 34 Mayur Vihar A', 'New Delhi ', 'Delhi', 'Hindi, English, Punjabi', 'ebcd036a0db50db993ae98ce380f64191624705162.png', 5, 'Cheque Bounce,Civil', 'Delhi High Court, Supreme Court', 'https://phpgurukul.com/', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2024-01-08 07:54:44', 1, 'admin'),
(2, 'Rahul Singh', 'rahul@gmail.com', 2589631470, 'XYZ Street Sector 10', 'Noida', 'Uttar Pradesh', 'English, Hindi', '6e8024ec26c292f258ec30f01e0392dc1624262369.png', 5, 'Cheque Bounce,Civil,Property,Recovery,Wills / Trusts', 'District Court', 'http://google.com', 'In-Person Meeting:Rs. 500.00 for 1 hour\r\nPhone:Rs. 500.00 for 30 minutes', '2024-01-09 07:59:29', 1, 'admin'),
(4, 'Amit Singh', 'amtsingh324@yourdomain.com', 1234567890, 'A 2346 XYZ Street', 'Ghaziabad', 'Uttar Pradesh', 'Hindi, English', 'ebcd036a0db50db993ae98ce380f64191625316135.png', 8, 'Cheque Bounce,Recovery,Business lawyer', 'Ghaziabad Court, Delhi High Court', 'http://yourdomain.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2024-01-09 12:42:15', 1, 'User'),
(5, 'Sanjeev Kumar', 'snjkkkk@sjakja.ocm', 1236987452, 'ABC Street XYZ Apartment', 'Gurugram', 'Haryana', 'Hindi, English, Punjabi', '779b7513263ef185b6d094af290ef5401625379180.png', 9, 'Business lawyer,Civil,Criminal,Domestic Violence,Property,Wills / Trusts', 'Haryana High Court', 'http://google.com', 'This is sample text for testing. This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.This is sample text for testing.', '2024-01-12 06:13:00', 1, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', NULL, NULL, '2024-01-05 06:17:15'),
(2, 'contactus', 'Contact Us', '#890 CFG Apartment, Mayur Vihar, Delhi-India.', 'lrmsinfo@test.com', 1234567890, '2024-01-06 06:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblpracticearea`
--

CREATE TABLE `tblpracticearea` (
  `id` int(11) NOT NULL,
  `PracticeArea` varchar(200) DEFAULT NULL,
  `AddedBy` varchar(20) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpracticearea`
--

INSERT INTO `tblpracticearea` (`id`, `PracticeArea`, `AddedBy`, `CreationDate`) VALUES
(1, 'Anticipatory Bail', 'admin', '2024-01-07 10:21:14'),
(2, 'Cheque Bounce', 'admin', '2024-01-07 10:21:14'),
(5, 'Civil', 'admin', '2024-01-07 10:21:14'),
(6, 'Criminal', 'admin', '2024-01-07 10:21:14'),
(7, 'Divorce', 'admin', '2024-01-07 10:21:14'),
(8, 'Domestic Violence', 'admin', '2024-01-07 10:21:14'),
(9, 'Family', 'admin', '2024-01-07 10:21:14'),
(10, 'Property', 'admin', '2024-01-07 10:21:14'),
(11, 'Recovery', 'admin', '2024-01-07 10:21:14'),
(12, 'Wills / Trusts', 'admin', '2024-01-07 10:21:14'),
(13, 'Business lawyer', 'admin', '2024-01-07 10:21:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbllawyers`
--
ALTER TABLE `tbllawyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpracticearea`
--
ALTER TABLE `tblpracticearea`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PracticeArea` (`PracticeArea`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbllawyers`
--
ALTER TABLE `tbllawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpracticearea`
--
ALTER TABLE `tblpracticearea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
