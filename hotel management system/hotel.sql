-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 05:41 PM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('chirag@gmail.com', '9876543');

-- --------------------------------------------------------

--
-- Table structure for table `double_ac`
--

CREATE TABLE `double_ac` (
  `Room_no` int(255) NOT NULL,
  `holdername` varchar(255) DEFAULT NULL,
  `holdermobile` int(255) DEFAULT NULL,
  `holderaddress` varchar(255) DEFAULT NULL,
  `adult` int(10) DEFAULT NULL,
  `child` int(10) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `indate` date DEFAULT NULL,
  `outdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_ac`
--

INSERT INTO `double_ac` (`Room_no`, `holdername`, `holdermobile`, `holderaddress`, `adult`, `child`, `status`, `indate`, `outdate`) VALUES
(351, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(352, 'shri', 1234, 'll', 2, 5, 1, '2021-05-26', '2021-05-28'),
(353, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(354, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `double_non_ac`
--

CREATE TABLE `double_non_ac` (
  `Room_no` int(255) NOT NULL,
  `holdername` varchar(255) DEFAULT NULL,
  `holdermobile` int(255) DEFAULT NULL,
  `holderaddress` varchar(255) DEFAULT NULL,
  `adult` int(10) DEFAULT NULL,
  `child` int(10) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `indate` date DEFAULT NULL,
  `outdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_non_ac`
--

INSERT INTO `double_non_ac` (`Room_no`, `holdername`, `holdermobile`, `holderaddress`, `adult`, `child`, `status`, `indate`, `outdate`) VALUES
(301, 'harish', 9999999, 'akola', 2, 1, 1, '2021-05-15', '2021-05-17'),
(302, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(303, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(304, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `single_ac`
--

CREATE TABLE `single_ac` (
  `Room_no` int(255) NOT NULL,
  `holdername` varchar(255) DEFAULT NULL,
  `holdermobile` int(255) DEFAULT NULL,
  `holderaddress` varchar(255) DEFAULT NULL,
  `adult` int(10) DEFAULT NULL,
  `child` int(10) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `indate` date DEFAULT NULL,
  `outdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_ac`
--

INSERT INTO `single_ac` (`Room_no`, `holdername`, `holdermobile`, `holderaddress`, `adult`, `child`, `status`, `indate`, `outdate`) VALUES
(201, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 'ram', 8525, 'shegaon', 1, 0, 1, '2021-05-26', '2021-05-28'),
(203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `single_non_ac`
--

CREATE TABLE `single_non_ac` (
  `Room_no` int(255) NOT NULL,
  `holdername` varchar(255) NOT NULL,
  `holdermobile` int(255) NOT NULL,
  `holderaddress` varchar(255) NOT NULL,
  `adult` int(10) NOT NULL,
  `child` int(10) NOT NULL,
  `status` int(255) NOT NULL,
  `indate` date NOT NULL,
  `outdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_non_ac`
--

INSERT INTO `single_non_ac` (`Room_no`, `holdername`, `holdermobile`, `holderaddress`, `adult`, `child`, `status`, `indate`, `outdate`) VALUES
(101, 'chirag', 2147483647, 'balapur', 2, 1, 1, '2021-05-27', '2021-05-31'),
(102, '', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00'),
(103, 'ram', 2147483647, 'shegaon', 1, 1, 1, '2021-05-28', '2021-05-31'),
(104, '', 0, '', 0, 0, 0, '0000-00-00', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
