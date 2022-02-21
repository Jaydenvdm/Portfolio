-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2021 at 05:22 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19013566_poe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

DROP TABLE IF EXISTS `tblcustomers`;
CREATE TABLE IF NOT EXISTS `tblcustomers` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`cid`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'User01', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last01', 'User01@gmail.com'),
(2, 'User02', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last02', 'User02@gmail.com'),
(3, 'User03', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last03', 'User03@gmail.com'),
(4, 'User04', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last04', 'User04@gmail.com'),
(5, 'User05', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last05', 'User05@gmail.com'),
(6, 'User06', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last06', 'User06@gmail.com'),
(7, 'User07', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last07', 'User07@gmail.com'),
(8, 'User08', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last08', 'User08@gmail.com'),
(9, 'User09', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last09', 'User09@gmail.com'),
(10, 'User10', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last10', 'User10@gmail.com'),
(11, 'User11', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last11', 'User11@gmail.com'),
(12, 'User12', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last12', 'User12@gmail.com'),
(13, 'User13', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last13', 'User13@gmail.com'),
(14, 'User14', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last14', 'User14@gmail.com'),
(15, 'User15', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last15', 'User15@gmail.com'),
(16, 'User16', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last16', 'User16@gmail.com'),
(17, 'User17', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last17', 'User17@gmail.com'),
(18, 'User18', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last18', 'User18@gmail.com'),
(19, 'User19', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last19', 'User19@gmail.com'),
(20, 'User20', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last20', 'User20@gmail.com'),
(21, 'User21', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last21', 'User21@gmail.com'),
(22, 'User22', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last22', 'User22@gmail.com'),
(23, 'User23', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last23', 'User23@gmail.com'),
(24, 'User24', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last24', 'User24@gmail.com'),
(25, 'User25', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last25', 'User25@gmail.com'),
(26, 'User26', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last26', 'User26@gmail.com'),
(27, 'User27', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last27', 'User27@gmail.com'),
(28, 'User28', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last28', 'User28@gmail.com'),
(29, 'User29', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last29', 'User29@gmail.com'),
(30, 'User30', '2ac9cb7dc02b3c0083eb70898e549b63\r\n', 'Last30', 'User30@gmail.com'),
(31, '', '', '', ''),
(32, 'Jayden', 'Jayden', 'jaydenvdm2000@gmail.com', '7ec07bdf713a8ab80984886e904085b6');

-- --------------------------------------------------------

--
-- Table structure for table `tblorderproduct`
--

DROP TABLE IF EXISTS `tblorderproduct`;
CREATE TABLE IF NOT EXISTS `tblorderproduct` (
  `oid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  KEY `oid` (`oid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorderproduct`
--

INSERT INTO `tblorderproduct` (`oid`, `pid`) VALUES
(1001, 3),
(1002, 2),
(1003, 5),
(1004, 11),
(1005, 1),
(1006, 6),
(1007, 7),
(1008, 9),
(1009, 10),
(1010, 8),
(1011, 15),
(1012, 7),
(1013, 12),
(1014, 13),
(1015, 4),
(1016, 14),
(1017, 13),
(1018, 1),
(1019, 6),
(1020, 14),
(1021, 7),
(1022, 9),
(1023, 2),
(1024, 8),
(1025, 3),
(1026, 13),
(1027, 5),
(1028, 3),
(1029, 6),
(1030, 1),
(1001, 3),
(1002, 2),
(1003, 5),
(1004, 11),
(1005, 1),
(1006, 6),
(1007, 7),
(1008, 9),
(1009, 10),
(1010, 8),
(1011, 15),
(1012, 7),
(1013, 12),
(1014, 13),
(1015, 4),
(1016, 14),
(1017, 13),
(1018, 1),
(1019, 6),
(1020, 14),
(1021, 7),
(1022, 9),
(1023, 2),
(1024, 8),
(1025, 3),
(1026, 13),
(1027, 5),
(1028, 3),
(1029, 6),
(1030, 1),
(1001, 3),
(1002, 2),
(1003, 5),
(1004, 11),
(1005, 1),
(1006, 6),
(1007, 7),
(1008, 9),
(1009, 10),
(1010, 8),
(1011, 15),
(1012, 7),
(1013, 12),
(1014, 13),
(1015, 4),
(1016, 14),
(1017, 13),
(1018, 1),
(1019, 6),
(1020, 14),
(1021, 7),
(1022, 9),
(1023, 2),
(1024, 8),
(1025, 3),
(1026, 13),
(1027, 5),
(1028, 3),
(1029, 6),
(1030, 1),
(1001, 3),
(1002, 2),
(1003, 5),
(1004, 11),
(1005, 1),
(1006, 6),
(1007, 7),
(1008, 9),
(1009, 10),
(1010, 8),
(1011, 15),
(1012, 7),
(1013, 12),
(1014, 13),
(1015, 4),
(1016, 14),
(1017, 13),
(1018, 1),
(1019, 6),
(1020, 14),
(1021, 7),
(1022, 9),
(1023, 2),
(1024, 8),
(1025, 3),
(1026, 13),
(1027, 5),
(1028, 3),
(1029, 6),
(1030, 1),
(1001, 3),
(1002, 2),
(1003, 5),
(1004, 11),
(1005, 1),
(1006, 6),
(1007, 7),
(1008, 9),
(1009, 10),
(1010, 8),
(1011, 15),
(1012, 7),
(1013, 12),
(1014, 13),
(1015, 4),
(1016, 14),
(1017, 13),
(1018, 1),
(1019, 6),
(1020, 14),
(1021, 7),
(1022, 9),
(1023, 2),
(1024, 8),
(1025, 3),
(1026, 13),
(1027, 5),
(1028, 3),
(1029, 6),
(1030, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblorders`
--

DROP TABLE IF EXISTS `tblorders`;
CREATE TABLE IF NOT EXISTS `tblorders` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL,
  `qnty` int(10) NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=1031 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorders`
--

INSERT INTO `tblorders` (`oid`, `cid`, `qnty`) VALUES
(1001, 1, 5),
(1002, 2, 2),
(1003, 3, 3),
(1004, 4, 6),
(1005, 5, 8),
(1006, 6, 1),
(1007, 7, 5),
(1008, 8, 7),
(1009, 9, 4),
(1010, 10, 3),
(1011, 11, 2),
(1012, 12, 5),
(1013, 13, 3),
(1014, 14, 6),
(1015, 15, 5),
(1016, 16, 2),
(1017, 17, 1),
(1018, 18, 8),
(1019, 19, 4),
(1020, 20, 2),
(1021, 21, 6),
(1022, 22, 1),
(1023, 23, 5),
(1024, 24, 3),
(1025, 25, 2),
(1026, 26, 4),
(1027, 27, 2),
(1028, 28, 1),
(1029, 29, 3),
(1030, 30, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

DROP TABLE IF EXISTS `tblproducts`;
CREATE TABLE IF NOT EXISTS `tblproducts` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `qnty` int(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`pid`, `pname`, `price`, `image`, `qnty`) VALUES
(1, 'One size fits all Face Mask', '10.00', 'Images\\CA Face Mask.jpg', 20),
(2, 'CA Custom Bomber Jacket', '600.00', 'Images\\Bomber Jacket.jpg', 6),
(3, 'CA Blacked Out Coat', '1200.00', 'Images\\CA Coat.jpg', 8),
(4, 'Limited edition Jelly Bean Jacket', '1800.00', 'Images\\Bean Jacket.jpg', 5),
(5, 'Gold & Black CA Hoodie', '400.00', 'Images\\Hoodie.jpg', 7),
(6, 'Long sleeve + moon bag combo', '250.00', 'Images\\Long sleeve.jpg', 9),
(7, 'Arabian style Jersey', '300.00', 'Images\\Jersey.jpg', 6),
(8, 'Custom CA Jean', '350.00', 'Images\\CA Jean.jpg', 8),
(9, 'First ever CA T-shirt', '100.00', 'Images\\T-Shirt.jpg', 12),
(10, 'Sleeveless T-shirt', '80.00', 'Images\\Sleeveless Top.jpg', 6),
(11, 'Blacked out Semi-formal shirt', '180.00', 'Images\\Shirt.jpg', 7),
(12, 'Comfortable stylish shorts', '80.00', 'Images\\Shorts.jpg', 10),
(13, 'Sweat proof CA Sweat Pants', '170.00', 'Images\\Sweat Pants.jpg', 8),
(14, 'Comfortable Tracksuit Pants', '150.00', 'Images\\Track Pants.jpg', 9),
(15, 'Limited edition Rose Formal Jacket', '600.00', 'Images\\Rose Formal Jacket.jpg', 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblorderproduct`
--
ALTER TABLE `tblorderproduct`
  ADD CONSTRAINT `tblorderproducts_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `tblproducts` (`pid`),
  ADD CONSTRAINT `tblorderproducts_ibfk_2` FOREIGN KEY (`oid`) REFERENCES `tblorders` (`oid`);

--
-- Constraints for table `tblorders`
--
ALTER TABLE `tblorders`
  ADD CONSTRAINT `tblorders_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `tblcustomers` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
