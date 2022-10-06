-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 03:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` varchar(10) NOT NULL,
  `AdminName` varchar(20) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `Location`, `CDate`, `ModDate`) VALUES
('a1001', 'A', 'Khon 6', '2022-09-01', '2022-09-22'),
('a1002', 'B', 'Khon 5', '2022-08-31', '2022-09-21'),
('a1003', 'C', 'Khon 4', '2022-09-02', '2022-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` varchar(10) NOT NULL,
  `Products` varchar(30) NOT NULL,
  `NumOfProducts` int(20) NOT NULL,
  `Price` float NOT NULL,
  `Total` float DEFAULT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartId`, `Products`, `NumOfProducts`, `Price`, `Total`, `CDate`, `ModDate`) VALUES
('cc1001', 'washingpowder', 9, 79, NULL, '2022-08-03', '2022-10-08'),
('cc1002', 'conditioner', 5, 219, NULL, '2022-07-04', '2022-12-09'),
('cc1003', 'shampoo', 7, 50, NULL, '2022-06-08', '2022-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` varchar(10) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL,
  `Postcode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CustomerName`, `Location`, `Email`, `DateOfBirth`, `CDate`, `ModDate`, `Postcode`) VALUES
('c2001', 'Jack', 'Khon 6', 'Jack123@mail.com', '2012-09-07', '2022-09-06', '2022-09-09', 11982),
('c2002', 'Jean', 'Khon 4', 'Jean123@mail.com', '2012-09-28', '2022-09-04', '2022-09-10', 32666),
('c2003', 'Jhin', 'Khon 5', 'Jhin123@mail.com', '2012-09-25', '2022-09-03', '2022-09-11', 19100),
('c2004', 'Mint', 'Khon 8', 'Mint123@gmail.com', '2022-08-31', '2022-09-16', '2022-09-29', 32558);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Iid` varchar(10) NOT NULL,
  `CustomerId` varchar(10) NOT NULL,
  `CartID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Iid`, `CustomerId`, `CartID`) VALUES
('v1001', 'c2001', 'cc1001'),
('v1002', 'c2002', 'cc1002'),
('v1003', 'c2003', 'cc1003');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LocationId` varchar(10) NOT NULL,
  `LocationName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LocationId`, `LocationName`) VALUES
('l1001', 'Khon 6'),
('l1002', 'Khon 5'),
('l1003', 'Khon 4');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` varchar(10) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `Price` float NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Price`, `CDate`, `ModDate`, `Deleted`) VALUES
('p1001', 'shampoo', 50, '2018-01-10', '2024-10-01', 1),
('p1002', 'conditioner', 219, '2019-09-02', '2025-01-22', 0),
('p1003', 'washingpowder', 79, '2020-05-20', '2027-02-23', 1),
('p1004', 'water to water', 9, '2022-09-04', '2022-09-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `PromotionId` varchar(10) NOT NULL,
  `PromotionName` varchar(50) NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`PromotionId`, `PromotionName`, `CDate`, `ModDate`) VALUES
('pm1001', 'โปรโมชั่นส่งฟรี', '2022-09-01', '2022-09-30'),
('pm1002', 'โปรโมชั่น 8.8', '2022-09-01', '2022-09-30'),
('pm1003', 'โปรเมชั่น 12.8', '2022-09-01', '2022-09-30'),
('pm1004', 'โปรโมชั่นดีๆ กินโปรตีนๆเยอะ', '2022-09-01', '2022-09-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Iid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LocationId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`PromotionId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
