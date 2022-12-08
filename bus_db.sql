-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 06:15 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_driver`
--

CREATE TABLE `bus_driver` (
  `BUSID` int(100) UNSIGNED NOT NULL,
  `dri_name` varchar(200) NOT NULL,
  `mobile` int(15) NOT NULL,
  `bus_type` varchar(100) DEFAULT NULL,
  `price` int(4) NOT NULL,
  `neigh_id` int(100) UNSIGNED NOT NULL
) 
--
-- Dumping data for table `bus_driver`
--

INSERT INTO `bus_driver` (`BUSID`, `dri_name`, `mobile`, `bus_type`, `price`, `no_of_seats`, `neigh_id`) VALUES
(1, 'd1', 1234567891'Chevrolet Van.', 400, 15, 1),
(2, 'd2', 560099511, 'Chevrolet Van.', 400, 15, 3),
(3, 'd3', 534500415, 'Chevrolet Van.', 500, 15, 4),
(4, 'd4', 530891847, 'Chevrolet Van.', 400, 15, 5),
(5, 'd5', 503663195, 'Chevrolet Van.', 300, 20, 6);

-- --------------------------------------------------------

--
-- Table structure for table `neighborhood`
--

CREATE TABLE `neighborhood` (
  `ID` int(100) UNSIGNED NOT NULL,
  `nei_NAME` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `neighborhood`
--

INSERT INTO `neighborhood` (`ID`, `nei_NAME`) VALUES
(1, 'الحلقة الغربية - الحلقة الشرقية - القيم'),
(3, 'الحلقة الغربية - الحلقة الشرقية - مخطط القاضي'),
(4, 'وادي النمل - المنتزة'),
(5, 'العرفاء'),
(6, 'ريحه - الواصليه'),
(7, 'السحيلي'),
(8, 'السر - الزوران'),
(9, 'معشي'),
(10, 'الرميدة - الزوران'),
(11, 'البلد'),
(12, 'الواسط - السيل الصغير'),
(13, 'ريحه - رحاب'),
(14, 'قيا');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STDID` int(100) UNSIGNED NOT NULL,
  `STD_NAME` varchar(500) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `STD_MOBILE` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STDID`, `STD_NAME`, `PASSWORD`, `EMAIL`, `STD_MOBILE`) VALUES
(1, 'Rawan', '123', 'rawan@gmail.com', 551781273),
(2, 'aymen', '123', 'a@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `ID` int(100) UNSIGNED NOT NULL,
  `STD_ID` int(100) UNSIGNED NOT NULL,
  `BUS_ID` int(100) UNSIGNED NOT NULL,
  `no_of_month` int(3) NOT NULL,
  `amount` int(6) NOT NULL,
  `SUB_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`ID`, `STD_ID`, `BUS_ID`, `no_of_month`, `amount`, `SUB_DATE`) VALUES
(2, 1, 13, 2, 600, '2022-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_driver`
--
ALTER TABLE `bus_driver`
  ADD PRIMARY KEY (`BUSID`),
  ADD KEY `neigh_id` (`neigh_id`);

--
-- Indexes for table `neighborhood`
--
ALTER TABLE `neighborhood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STDID`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STD_ID` (`STD_ID`),
  ADD KEY `BUS_ID` (`BUS_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_driver`
--
ALTER TABLE `bus_driver`
  MODIFY `BUSID` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `neighborhood`
--
ALTER TABLE `neighborhood`
  MODIFY `ID` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STDID` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `ID` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus_driver`
--
ALTER TABLE `bus_driver`
  ADD CONSTRAINT `bus_driver_ibfk_1` FOREIGN KEY (`neigh_id`) REFERENCES `neighborhood` (`ID`);

--
-- Constraints for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD CONSTRAINT `subscribe_ibfk_1` FOREIGN KEY (`STD_ID`) REFERENCES `student` (`STDID`),
  ADD CONSTRAINT `subscribe_ibfk_2` FOREIGN KEY (`BUS_ID`) REFERENCES `bus_driver` (`BUSID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
