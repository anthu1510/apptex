-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2020 at 12:32 PM
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
-- Database: `mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto_node`
--

CREATE TABLE `auto_node` (
  `id` int(11) NOT NULL,
  `distributor_id` varchar(50) NOT NULL,
  `sponser_id` varchar(25) NOT NULL,
  `sponser_name` varchar(100) NOT NULL,
  `coupon_code` varchar(25) NOT NULL,
  `p` int(11) DEFAULT NULL,
  `l` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `r` int(11) DEFAULT NULL,
  `p_id` varchar(25) NOT NULL,
  `l_id` varchar(25) DEFAULT NULL,
  `m_id` varchar(25) DEFAULT NULL,
  `r_id` varchar(25) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `f_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `sex` enum('male','female','others') NOT NULL,
  `aadhar` varchar(20) DEFAULT NULL,
  `pan` varchar(25) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `account_no` varchar(50) NOT NULL,
  `ifsc_code` varchar(50) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `nominee_name` varchar(100) NOT NULL,
  `nominee_relationship` varchar(50) NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('active','inactive','suspended','blocked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auto_node`
--

INSERT INTO `auto_node` (`id`, `distributor_id`, `sponser_id`, `sponser_name`, `coupon_code`, `p`, `l`, `m`, `r`, `p_id`, `l_id`, `m_id`, `r_id`, `name`, `f_name`, `dob`, `sex`, `aadhar`, `pan`, `address`, `mobile`, `email`, `account_no`, `ifsc_code`, `bank_name`, `branch_name`, `nominee_name`, `nominee_relationship`, `cdate`, `status`) VALUES
(1, 'FG20200305000001', 'R', 'Root', '', 0, 2, 3, 4, 'r', 'FG20200305000002', 'FG20200305000003', 'FG20200305000004', 'Ravi', '', '0000-00-00', 'male', '1', '1', '29,30 D.B Road . R.S Puram', '9944416123', '', '', '', '', '', '', '', '2020-03-09 13:30:05', 'active'),
(2, 'FG20200307000009', 'FG20200305000003', 'Aravinth', 'FG-100-076', 1, 5, 6, 7, 'FG20200305000003', NULL, NULL, NULL, 'Ravindran', 'Chinnaiyan', '1978-04-09', 'male', '532542564582', 'AKQPRG2980', '29,30 D/B ROAD', '9944416123', 'cravindr@gmail.com', '8511399583', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'REVATHI', 'WIFE', '2020-03-09 13:30:05', 'active'),
(3, 'FG20200307000010', 'FG20200306000007', 'Ravi', 'FG-100-036', 1, 8, 9, 10, 'FG20200306000007', NULL, NULL, NULL, 'Aravinth', 'Elango', '1992-10-15', 'male', '12345', '12334', 'Vadasithoor', '962525', 'anthu1510@gmail.com', '856252548', 'KKBK000490', 'Kotak', 'R.S Puram', 'Elango', 'Fathe', '2020-03-09 13:30:05', 'active'),
(4, 'FG20200307000011', 'FG20200307000010', 'Aravinth', 'FG-100-061', 1, 11, 12, 13, 'FG20200307000010', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'others', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(5, 'FG20200307000012', 'FG20200307000011', 'Santoshi', 'FG-100-056', 2, 14, 15, 16, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(6, 'FG20200307000013', 'FG20200307000011', 'Santoshi', 'FG-100-056', 2, 17, 18, 19, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(7, 'FG20200307000014', 'FG20200307000011', 'Santoshi', 'FG-100-056', 2, 20, 21, 22, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(8, 'FG20200307000015', 'FG20200307000011', 'Santoshi', 'FG-100-056', 3, 23, 24, 25, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(9, 'FG20200307000016', 'FG20200307000011', 'Santoshi', 'FG-100-056', 3, 26, 27, 28, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(10, 'FG20200307000017', 'FG20200307000011', 'Santoshi', 'FG-100-056', 3, 29, 30, 31, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(11, 'FG20200307000018', 'FG20200307000011', 'Santoshi', 'FG-100-056', 4, 32, 33, 34, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(12, 'FG20200307000019', 'FG20200307000011', 'Santoshi', 'FG-100-056', 4, 35, 36, 37, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(13, 'FG20200307000020', 'FG20200307000011', 'Santoshi', 'FG-100-056', 4, 38, 39, 40, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(14, 'FG20200307000021', 'FG20200307000011', 'Santoshi', 'FG-100-001', 5, 41, 42, 43, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '25255', '525488', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(15, 'FG20200307000022', 'FG20200307000011', 'Santoshi', 'FG-100-001', 5, 44, 45, 46, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '25255', '525488', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:30:05', 'active'),
(16, 'FG20200307000023', 'FG20200307000022', 'Santoshi', 'FG-100-041', 5, 47, 48, 49, 'FG20200307000022', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '123458', '2558', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:30:05', 'active'),
(17, 'FG20200307000024', 'FG20200307000023', 'Poja', 'FG-100-016', 6, 50, 51, 52, 'FG20200307000023', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '123458', '2558', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:30:05', 'active'),
(18, 'FG20200307000025', 'FG20200307000023', 'Poja', 'FG-100-016', 6, 53, 54, 55, 'FG20200307000023', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '123458', '2558', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:30:05', 'active'),
(19, 'FG20200307000026', 'FG20200307000020', 'Santoshi', 'FG-100-021', 6, 56, 57, 58, 'FG20200307000020', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '123458', '2558', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:30:05', 'active'),
(20, 'FG20200307000027', 'FG20200307000011', 'Santoshi', 'FG-100-096', 7, 59, 60, 61, 'FG20200307000011', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '555', '555', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:30:05', 'active'),
(21, 'FG20200307000028', 'FG20200307000022', 'Santoshi', 'FG-100-130', 7, 62, 63, 64, 'FG20200307000022', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '555', '555', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:30:05', 'active'),
(22, 'FG20200307000029', 'FG20200307000022', 'Santoshi', 'FG-100-130', 7, 65, 66, 67, 'FG20200307000022', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '555', '555', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:30:05', 'active'),
(23, 'FG20200309000030', 'FG20200307000022', 'Santoshi', 'FG-100-145', 8, 68, 69, 70, 'FG20200307000022', NULL, NULL, NULL, 'Mohan', 'Sam', '2001-01-01', 'male', '525425', '254258', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:30:05', 'active'),
(24, 'FG20200309000031', 'FG20200309000030', 'Mohan', 'FG-100-150', 8, 71, 72, 73, 'FG20200309000030', NULL, NULL, NULL, 'Mohan', 'Sam', '2001-01-01', 'male', '525425', '254258', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:30:05', 'active'),
(25, 'FG20200309000032', 'FG20200309000030', 'Mohan', 'FG-100-150', 8, 74, 75, 76, 'FG20200309000030', NULL, NULL, NULL, 'Mohan', 'Sam', '2001-01-01', 'male', '525425', '254258', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:30:05', 'active'),
(26, 'FG20200309000032', 'FG20200309000030', 'Mohan', 'FG-100-165', 9, 77, 78, 79, 'FG20200309000030', NULL, NULL, NULL, 'Mohan', 'Sam', '2001-01-01', 'male', '525425', '254258', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:30:05', 'active'),
(27, 'FG20200309000033', 'FG20200309000030', 'Mohan', 'FG-100-165', 9, 80, 81, 82, 'FG20200309000030', NULL, NULL, NULL, 'Mohan', 'Sam', '2001-01-01', 'male', '525425', '254258', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:30:05', 'active'),
(28, 'FG20200309000034', 'FG20200309000033', 'Mohan', 'FG-100-170', 9, 83, 84, 85, 'FG20200309000033', NULL, NULL, NULL, 'Mohan1', 'Sam1', '2001-01-01', 'male', '5254255', '2542585', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:30:05', 'active'),
(29, 'FG20200309000035', 'FG20200309000033', 'Mohan', 'FG-100-170', 10, 86, 87, 88, 'FG20200309000033', NULL, NULL, NULL, 'Mohan1', 'Sam1', '2001-01-01', 'male', '5254255', '2542585', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:30:05', 'active'),
(30, 'FG20200309000036', 'FG20200309000030', 'Mohan', 'FG-100-185', 10, 89, 90, 91, 'FG20200309000030', NULL, NULL, NULL, 'Test1', 'Test1', '2020-12-31', 'male', '5858', '25585', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:30:05', 'active'),
(31, 'FG20200309000037', 'FG20200309000036', 'Test1', 'FG-100-190', 10, 92, 93, 94, 'FG20200309000036', NULL, NULL, NULL, 'Test2', 'Test2', '2020-12-31', 'male', '5858', '25585', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:30:05', 'active'),
(32, 'FG20200309000038', 'FG20200309000036', 'Test1', 'FG-100-190', 11, 95, 96, 97, 'FG20200309000036', NULL, NULL, NULL, 'Test2', 'Test2', '2020-12-31', 'male', '5858', '25585', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:30:05', 'active'),
(33, 'FG20200309000052', 'FG20200309000038', 'Test2', 'FG-100-209', 11, 98, 99, 100, 'FG20200309000038', NULL, NULL, NULL, 'Tet8', 'test8', '2020-01-01', 'male', '12583', '125873', 'New aodd', '9982', '5252@g.com', '1258', '1258', 'Bank', 'Branch', 'Raj', 'DFiw', '2020-03-09 13:30:05', 'active'),
(34, 'FG20200309000053', 'FG20200309000038', 'Test2', 'FG-100-214', 11, 101, 102, 103, 'FG20200309000038', NULL, NULL, NULL, 'test 10', 'test10', '2020-12-31', 'male', '58585', '125882', 'ne addres', '1235', NULL, 'Acc1', 'ICSC1', 'Newwq Bank', 'RS Puram', 'No name', 'no relation', '2020-03-09 13:30:05', 'active'),
(35, 'FG20200309000054', 'FG20200309000053', 'test 10', 'FG-100-229', 12, 104, 105, 106, 'FG20200309000053', NULL, NULL, NULL, 'Test11', 'Test11', '2020-12-31', 'male', '8858', '2528', 'no address', '9944', NULL, '1258', 'KKBK', 'Kotakl', 'RS Puram', 'RT', 'Wife', '2020-03-09 13:30:05', 'active'),
(36, 'FG20200309000055', 'FG20200309000053', 'test 10', 'FG-100-234', 12, 107, 108, 109, 'FG20200309000053', NULL, NULL, NULL, 'Test 12', 'Test 12', '2020-12-31', 'male', '5685', '25258', 'Old Addressw', '98', NULL, '52855', 'SBIN', 'SBI', 'RS L', 'Re', 'Wife', '2020-03-09 13:30:05', 'active'),
(37, 'FG20200309000056', 'FG20200309000032', 'Mohan', 'FG-100-249', 12, 110, 111, 112, 'FG20200309000032', NULL, NULL, NULL, 'Test 12', 'Test 12', '2020-12-31', 'male', '9858', '1258', '9', '9852', NULL, '9585', 'IFDC', 'SBI', 'CBE', 'NO name', 'no relation', '2020-03-09 13:30:05', 'active'),
(38, 'FG20200309000062', 'FG20200309000032', 'Mohan', 'FG-100-254', 13, 113, 114, 115, 'FG20200309000032', NULL, NULL, NULL, 'Test 15', 'Test 15', '2020-12-31', 'female', '234', '254823', 'Old Addrtess', '25255', NULL, '125', '128', '1525', '/1454', '1258', '1258', '2020-03-09 13:30:05', 'active'),
(39, 'FG20200309000063', 'FG20200305000004', 'rav', 'FG-100-269', 13, 116, 117, 118, 'FG20200305000004', NULL, NULL, NULL, 'Test 20', 'Test 20', '2020-12-31', 'female', '3658', '2588', 'tet addrtess', '9845', NULL, '25685', 'SBIN', 'SBi', 'CVBE', 'Re', 'Wif', '2020-03-09 13:30:05', 'active'),
(40, 'FG20200309000064', 'FG20200309000063', 'Test 20', 'FG-100-274', 13, 119, 120, 121, 'FG20200309000063', NULL, NULL, NULL, 'Test21', 'Test 21', '2020-12-31', 'others', '2568', '5255', '29,L', '369', NULL, '158585', 'SBI', 'SVI', 'SBI V', 'Re', 'Wife', '2020-03-09 13:34:31', 'active'),
(41, 'FG20200312000065', 'FG20200309000064', 'Test21', 'FG-100-323', 14, 122, 123, 124, 'FG20200309000064', NULL, NULL, NULL, 'Mani', 'Kandan', '2020-12-31', 'male', '12525', '2125522', '29 DB Road', '99444', 'cravi@gmail.com', '12586', 'IFSC Test', 'Kotak', 'RS Puram', 'NO', 'NBo', '2020-03-12 15:44:07', 'active'),
(42, 'FG20200312000066', 'FG20200309000064', 'Test21', 'FG-100-323', 14, 125, 126, 127, 'FG20200309000064', NULL, NULL, NULL, 'Mani', 'Kandan', '2020-12-31', 'male', '12525', '2125522', '29 DB Road', '99444', 'cravi@gmail.com', '12586', 'IFSC Test', 'Kotak', 'RS Puram', 'NO', 'NBo', '2020-03-12 15:45:02', 'active'),
(43, 'FG20200312000067', 'FG20200309000064', 'Test21', 'FG-100-323', 14, 128, 129, 130, 'FG20200309000064', NULL, NULL, NULL, 'Mani', 'Kandan', '2020-12-31', 'male', '12525', '2125522', '29 DB Road', '99444', 'cravi@gmail.com', '12586', 'IFSC Test', 'Kotak', 'RS Puram', 'NO', 'NBo', '2020-03-12 15:45:32', 'active'),
(44, 'FG20200312000068', 'FG20200309000064', 'Test21', 'FG-100-323', 15, 131, 132, 133, 'FG20200309000064', NULL, NULL, NULL, 'Mani', 'Kandan', '2020-12-31', 'male', '12525', '2125522', '29 DB Road', '99444', 'cravi@gmail.com', '12586', 'IFSC Test', 'Kotak', 'RS Puram', 'NO', 'NBo', '2020-03-12 15:54:47', 'active'),
(45, 'FG20200312000069', 'FG20200312000068', 'Mani', 'FG-100-318', 15, 134, 135, 136, 'FG20200312000068', NULL, NULL, NULL, 'Subaiya', 'Palani', '2020-12-31', 'others', '888', '1258', '1905', '9944', 'cravi@gmail.com', '123456', 'IFSC000558', 'Bank', 'Branch', 'NO No', 'NO', '2020-03-12 15:58:06', 'active'),
(46, 'FG20200313000070', 'FG20200312000069', 'Subaiyapillai', 'FG-100-303', 15, 137, 138, 139, 'FG20200312000069', NULL, NULL, NULL, 'Test Com', 'Commision', '2020-12-31', 'male', '225488', '125885', 'NO addres', '5828', NULL, '856255', 'IDFE000158', 'IDFC', 'RS Puam', 'NO name', 'No relation', '2020-03-13 11:07:33', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `gen_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `coupon_code` varchar(15) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(150) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comments` varchar(256) DEFAULT NULL,
  `status` enum('active','inactive','alloted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `gen_id`, `code`, `coupon_code`, `c_date`, `name`, `mobile`, `email`, `comments`, `status`) VALUES
(1, 1, 10000, 'FG-100-001', '2020-03-07 11:15:34', 'Ravindran', '9944416123', 'cravi@gmal.com', 'Test', 'alloted'),
(2, 2, 10001, 'FG-100-016', '2020-03-07 11:22:52', 'Santos', '9944416123', 'cravi@gmal.com', 'Test', 'alloted'),
(3, 3, 10002, 'FG-100-021', '2020-03-07 11:28:44', 'Santos', '9944416123', 'cravi@gmal.com', 'Test', 'alloted'),
(4, 4, 10003, 'FG-100-036', '2020-03-07 08:23:31', 'Santos', '9944416123', 'cravi@gmal.com', 'Test', 'alloted'),
(5, 5, 10004, 'FG-100-041', '2020-03-07 11:19:45', 'Aravinth', '98602552425', 'anthu@gmal.com', '2 Number Gen', 'alloted'),
(6, 5, 10005, 'FG-100-056', '2020-03-07 11:00:38', 'Aravinth', '98602552425', 'anthu@gmal.com', '2 Number Gen', 'alloted'),
(7, 6, 10006, 'FG-100-061', '2020-03-07 10:22:39', 'Satheesh', '855258458', 'File@gmal.com', '3 Number Gen', 'alloted'),
(8, 6, 10007, 'FG-100-076', '2020-03-07 08:09:34', 'Satheesh', '855258458', 'File@gmal.com', '3 Number Gen', 'alloted'),
(9, 6, 10008, 'FG-100-081', '2020-03-06 14:48:47', 'Satheesh', '855258458', 'File@gmal.com', '3 Number Gen', 'alloted'),
(10, 7, 10009, 'FG-100-096', '2020-03-07 11:31:59', 'Murugan', '285748', 'murugan@gmail.com', 'test', 'alloted'),
(11, 7, 10010, 'FG-100-105', '2020-02-28 08:31:16', 'Murugan', '285748', 'murugan@gmail.com', 'test', 'alloted'),
(17, 8, 10011, 'FG-100-110', '2020-03-02 06:17:44', 'Rav', '999', 'ccc', 'sdf', 'inactive'),
(18, 8, 10012, 'FG-100-125', '2020-03-02 07:01:28', 'Ravi', '9944416123', 'cravi@gmail.com', 'Test Update again', 'inactive'),
(20, 9, 10013, 'FG-100-130', '2020-03-07 11:42:48', 'Ravi', '9944416123', 'cravi@gmail.com', 'test', 'alloted'),
(21, 9, 10014, 'FG-100-145', '2020-03-09 06:02:23', 'Ravi', '9944416123', 'cravi@gmail.com', 'test', 'alloted'),
(22, 9, 10015, 'FG-100-150', '2020-03-09 06:17:26', 'Ravi', '9944416123', 'cravi@gmail.com', 'test', 'alloted'),
(23, 9, 10016, 'FG-100-165', '2020-03-09 06:24:20', 'Ravi', '9944416123', 'cravi@gmail.com', 'test', 'alloted'),
(24, 9, 10017, 'FG-100-170', '2020-03-09 06:32:17', 'Ravi', '9944416123', 'cravi@gmail.com', 'test', 'alloted'),
(25, 9, 10018, 'FG-100-185', '2020-03-09 06:40:38', 'Ravi', '9944416123', 'cravi@gmail.com', 'test', 'alloted'),
(26, 9, 10019, 'FG-100-190', '2020-03-09 06:42:52', 'Ravi', '9944416123', 'cravi@gmail.com', 'test', 'alloted'),
(27, 9, 10020, 'FG-100-209', '2020-03-09 07:17:58', 'Ravi', '9944416123', 'cravi@gmail.com', 'test', 'alloted'),
(28, 9, 10021, 'FG-100-214', '2020-03-09 07:22:38', 'Ravi', '9944416123', 'cravi@gmail.com', 'test', 'alloted'),
(29, 9, 10022, 'FG-100-229', '2020-03-09 07:24:41', 'Ravi', '9944416123', 'cravi@gmail.com', 'test', 'alloted'),
(30, 10, 10023, 'FG-100-234', '2020-03-09 07:31:28', 'Ravindran', '919191915198', 'cravindr@gmail.com', '10 Coupon for Testing Purpose', 'alloted'),
(31, 10, 10024, 'FG-100-249', '2020-03-09 07:48:19', 'Ravindran', '919191915198', 'cravindr@gmail.com', '10 Coupon for Testing Purpose', 'alloted'),
(32, 10, 10025, 'FG-100-254', '2020-03-09 07:54:45', 'Ravindran', '919191915198', 'cravindr@gmail.com', '10 Coupon for Testing Purpose', 'alloted'),
(33, 10, 10026, 'FG-100-269', '2020-03-09 07:57:15', 'Ravindran', '919191915198', 'cravindr@gmail.com', '10 Coupon for Testing Purpose', 'alloted'),
(34, 10, 10027, 'FG-100-274', '2020-03-09 08:04:31', 'Ravindran', '919191915198', 'cravindr@gmail.com', '10 Coupon for Testing Purpose', 'alloted'),
(35, 10, 10028, 'FG-100-289', '2020-03-09 07:30:03', 'Ravindran', '919191915198', 'cravindr@gmail.com', '10 Coupon for Testing Purpose', 'active'),
(36, 10, 10029, 'FG-100-294', '2020-03-09 07:30:03', 'Ravindran', '919191915198', 'cravindr@gmail.com', '10 Coupon for Testing Purpose', 'active'),
(37, 10, 10030, 'FG-100-303', '2020-03-13 05:37:33', 'Ravindran', '919191915198', 'cravindr@gmail.com', '10 Coupon for Testing Purpose', 'alloted'),
(38, 10, 10031, 'FG-100-318', '2020-03-12 10:28:06', 'Ravindran', '919191915198', 'cravindr@gmail.com', '10 Coupon for Testing Purpose', 'alloted'),
(39, 10, 10032, 'FG-100-323', '2020-03-12 10:24:47', 'Ravindran', '919191915198', 'cravindr@gmail.com', '10 Coupon for Testing Purpose', 'alloted');

-- --------------------------------------------------------

--
-- Table structure for table `node`
--

CREATE TABLE `node` (
  `id` int(11) NOT NULL,
  `distributor_id` varchar(50) NOT NULL,
  `sponser_id` varchar(25) NOT NULL,
  `sponser_name` varchar(100) NOT NULL,
  `coupon_code` varchar(25) NOT NULL,
  `p` int(11) NOT NULL,
  `l` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `r` int(11) DEFAULT NULL,
  `p_id` varchar(25) NOT NULL,
  `l_id` varchar(25) DEFAULT NULL,
  `m_id` varchar(25) DEFAULT NULL,
  `r_id` varchar(25) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `f_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `sex` enum('male','female','others') NOT NULL,
  `aadhar` varchar(20) DEFAULT NULL,
  `pan` varchar(25) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `account_no` varchar(50) NOT NULL,
  `ifsc_code` varchar(50) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `nominee_name` varchar(100) NOT NULL,
  `nominee_relationship` varchar(50) NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('active','inactive','suspended','blocked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `node`
--

INSERT INTO `node` (`id`, `distributor_id`, `sponser_id`, `sponser_name`, `coupon_code`, `p`, `l`, `m`, `r`, `p_id`, `l_id`, `m_id`, `r_id`, `name`, `f_name`, `dob`, `sex`, `aadhar`, `pan`, `address`, `mobile`, `email`, `account_no`, `ifsc_code`, `bank_name`, `branch_name`, `nominee_name`, `nominee_relationship`, `cdate`, `status`) VALUES
(1, 'FG20200305000001', 'R', 'Root', '', 0, 2, 3, 4, 'r', 'FG20200305000002', 'FG20200305000003', 'FG20200305000004', 'Ravi', '', '0000-00-00', 'male', '1', '1', '29,30 D.B Road . R.S Puram', '9944416123', '', '', '', '', '', '', '', '2020-03-09 13:29:37', 'active'),
(2, 'FG20200305000002', 'FG20200305000001', '', '', 1, 7, 0, 0, 'FG20200305000001', 'FG20200305000005', '', '', 'Ravi', '', '0000-00-00', 'male', '1', '1', '', '1', '', '', '', '', '', '', '', '2020-03-09 13:29:37', 'active'),
(3, 'FG20200305000003', 'FG20200305000001', '', '', 1, 10, 0, 11, 'FG20200305000001', 'FG20200306000008', '', 'FG20200307000009', 'Aravinth', '', '0000-00-00', 'male', '2', '2', '', '2', '', '', '', '', '', '', '', '2020-03-09 13:29:37', 'active'),
(4, 'FG20200305000004', 'FG20200305000001', '', '', 1, 66, 0, 0, 'FG20200305000001', 'FG20200309000063', '', '', 'rav', '', '0000-00-00', 'male', '1', '1', '', '1', '', '', '', '', '', '', '', '2020-03-09 13:29:37', 'active'),
(7, 'FG20200305000005', 'FG20200305000002', '', '', 2, 0, 0, 0, '', '', '', '', 'rav', '', '0000-00-00', 'male', '1', '1', '', '1', '', '', '', '', '', '', '', '2020-03-09 13:29:37', 'active'),
(8, 'FG20200306000006', 'FG20200305000003', 'Aravinth', 'FG-100-081', 3, NULL, NULL, NULL, 'FG20200305000003', NULL, NULL, NULL, 'Ravi', 'Chinnaiyan', '2020-03-07', 'male', '123', '1234', '29,30 DB REa', '99444', 'crvc@gmail.com', '8511399', 'kkbk000490', 'Kotalk', 'R.S Puram', 'Revathi', 'Wife', '2020-03-09 13:29:37', 'active'),
(9, 'FG20200306000007', 'FG20200305000003', 'Aravinth', 'FG-100-081', 3, 12, NULL, NULL, 'FG20200305000003', 'FG20200307000010', NULL, NULL, 'Ravi', 'Chinnaiyan', '2020-03-07', 'male', '123', '1234', '29,30 DB REa', '99444', 'crvc@gmail.com', '8511399', 'kkbk000490', 'Kotalk', 'R.S Puram', 'Revathi', 'Wife', '2020-03-09 13:29:37', 'active'),
(10, 'FG20200306000008', 'FG20200305000003', 'Aravinth', 'FG-100-081', 3, NULL, NULL, NULL, 'FG20200305000003', NULL, NULL, NULL, 'Ravi', 'Chinnaiyan', '2020-03-07', 'male', '123', '1234', '29,30 DB REa', '99444', 'crvc@gmail.com', '8511399', 'kkbk000490', 'Kotalk', 'R.S Puram', 'Revathi', 'Wife', '2020-03-09 13:29:37', 'active'),
(11, 'FG20200307000009', 'FG20200305000003', 'Aravinth', 'FG-100-076', 3, NULL, NULL, NULL, 'FG20200305000003', NULL, NULL, NULL, 'Ravindran', 'Chinnaiyan', '1978-04-09', 'male', '532542564582', 'AKQPRG2980', '29,30 D/B ROAD', '9944416123', 'cravindr@gmail.com', '8511399583', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'REVATHI', 'WIFE', '2020-03-09 13:29:37', 'active'),
(12, 'FG20200307000010', 'FG20200306000007', 'Ravi', 'FG-100-036', 9, 13, NULL, NULL, 'FG20200306000007', 'FG20200307000011', NULL, NULL, 'Aravinth', 'Elango', '1992-10-15', 'male', '12345', '12334', 'Vadasithoor', '962525', 'anthu1510@gmail.com', '856252548', 'KKBK000490', 'Kotak', 'R.S Puram', 'Elango', 'Fathe', '2020-03-09 13:29:37', 'active'),
(13, 'FG20200307000011', 'FG20200307000010', 'Aravinth', 'FG-100-061', 12, 22, 29, 24, 'FG20200307000010', 'FG20200307000020', 'FG20200307000027', 'FG20200307000022', 'Santoshi', 'Kumar', '1995-03-31', 'others', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(14, 'FG20200307000012', 'FG20200307000011', 'Santoshi', 'FG-100-056', 13, NULL, NULL, NULL, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(15, 'FG20200307000013', 'FG20200307000011', 'Santoshi', 'FG-100-056', 13, NULL, NULL, NULL, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(16, 'FG20200307000014', 'FG20200307000011', 'Santoshi', 'FG-100-056', 13, NULL, NULL, NULL, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(17, 'FG20200307000015', 'FG20200307000011', 'Santoshi', 'FG-100-056', 13, NULL, NULL, NULL, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(18, 'FG20200307000016', 'FG20200307000011', 'Santoshi', 'FG-100-056', 13, NULL, NULL, NULL, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(19, 'FG20200307000017', 'FG20200307000011', 'Santoshi', 'FG-100-056', 13, NULL, NULL, NULL, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(20, 'FG20200307000018', 'FG20200307000011', 'Santoshi', 'FG-100-056', 13, NULL, NULL, NULL, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(21, 'FG20200307000019', 'FG20200307000011', 'Santoshi', 'FG-100-056', 13, NULL, NULL, NULL, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(22, 'FG20200307000020', 'FG20200307000011', 'Santoshi', 'FG-100-056', 13, 28, NULL, NULL, 'FG20200307000011', 'FG20200307000026', NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '1254', '52548', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(23, 'FG20200307000021', 'FG20200307000011', 'Santoshi', 'FG-100-001', 13, NULL, NULL, NULL, 'FG20200307000011', NULL, NULL, NULL, 'Santoshi', 'Kumar', '1995-03-31', 'male', '25255', '525488', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(24, 'FG20200307000022', 'FG20200307000011', 'Santoshi', 'FG-100-001', 13, 25, 31, 32, 'FG20200307000011', 'FG20200307000023', 'FG20200307000029', 'FG20200309000030', 'Santoshi', 'Kumar', '1995-03-31', 'male', '25255', '525488', '29,30 D.B Road', '75588', 'fraudsanthosi43@gamil.com', '85113958585', 'KKBK000490', 'KOTAK', 'R.S PURAM', 'FROUD WEST INDIS MEGA', 'PANNI', '2020-03-09 13:29:37', 'active'),
(25, 'FG20200307000023', 'FG20200307000022', 'Santoshi', 'FG-100-041', 24, 27, NULL, NULL, 'FG20200307000022', 'FG20200307000025', NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '123458', '2558', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:29:37', 'active'),
(26, 'FG20200307000024', 'FG20200307000023', 'Poja', 'FG-100-016', 25, NULL, NULL, NULL, 'FG20200307000023', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '123458', '2558', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:29:37', 'active'),
(27, 'FG20200307000025', 'FG20200307000023', 'Poja', 'FG-100-016', 25, NULL, NULL, NULL, 'FG20200307000023', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '123458', '2558', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:29:37', 'active'),
(28, 'FG20200307000026', 'FG20200307000020', 'Santoshi', 'FG-100-021', 22, NULL, NULL, NULL, 'FG20200307000020', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '123458', '2558', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:29:37', 'active'),
(29, 'FG20200307000027', 'FG20200307000011', 'Santoshi', 'FG-100-096', 13, NULL, NULL, NULL, 'FG20200307000011', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '555', '555', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:29:37', 'active'),
(30, 'FG20200307000028', 'FG20200307000022', 'Santoshi', 'FG-100-130', 24, NULL, NULL, NULL, 'FG20200307000022', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '555', '555', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:29:37', 'active'),
(31, 'FG20200307000029', 'FG20200307000022', 'Santoshi', 'FG-100-130', 24, NULL, NULL, NULL, 'FG20200307000022', NULL, NULL, NULL, 'Poja', 'Appa', '1955-05-01', 'others', '555', '555', '29', '99552', 'sdrf@gmail.com', '8511399582', 'KKBK', 'Kotak', 'RS Puram', 'Santoshi', 'Sister', '2020-03-09 13:29:37', 'active'),
(32, 'FG20200309000030', 'FG20200307000022', 'Santoshi', 'FG-100-145', 24, 34, 36, 39, 'FG20200307000022', 'FG20200309000032', 'FG20200309000033', 'FG20200309000036', 'Mohan', 'Sam', '2001-01-01', 'male', '525425', '254258', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:29:37', 'active'),
(33, 'FG20200309000031', 'FG20200309000030', 'Mohan', 'FG-100-150', 32, NULL, NULL, NULL, 'FG20200309000030', NULL, NULL, NULL, 'Mohan', 'Sam', '2001-01-01', 'male', '525425', '254258', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:29:37', 'active'),
(35, 'FG20200309000032', 'FG20200309000030', 'Mohan', 'FG-100-165', 32, 59, 65, NULL, 'FG20200309000030', 'FG20200309000056', 'FG20200309000062', NULL, 'Mohan', 'Sam', '2001-01-01', 'male', '525425', '254258', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:29:37', 'active'),
(36, 'FG20200309000033', 'FG20200309000030', 'Mohan', 'FG-100-165', 32, NULL, NULL, 38, 'FG20200309000030', NULL, NULL, 'FG20200309000035', 'Mohan', 'Sam', '2001-01-01', 'male', '525425', '254258', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:29:37', 'active'),
(37, 'FG20200309000034', 'FG20200309000033', 'Mohan', 'FG-100-170', 36, NULL, NULL, NULL, 'FG20200309000033', NULL, NULL, NULL, 'Mohan1', 'Sam1', '2001-01-01', 'male', '5254255', '2542585', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:29:37', 'active'),
(38, 'FG20200309000035', 'FG20200309000033', 'Mohan', 'FG-100-170', 36, NULL, NULL, NULL, 'FG20200309000033', NULL, NULL, NULL, 'Mohan1', 'Sam1', '2001-01-01', 'male', '5254255', '2542585', 'Main Road', '994441612', 'cravindr@gmail.com', '12525458', 'SBIN00015258', 'SBi', 'RS Puram', 'Malar', 'Wife', '2020-03-09 13:29:37', 'active'),
(39, 'FG20200309000036', 'FG20200309000030', 'Mohan', 'FG-100-185', 32, 41, NULL, NULL, 'FG20200309000030', 'FG20200309000038', NULL, NULL, 'Test1', 'Test1', '2020-12-31', 'male', '5858', '25585', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(40, 'FG20200309000037', 'FG20200309000036', 'Test1', 'FG-100-190', 39, NULL, NULL, NULL, 'FG20200309000036', NULL, NULL, NULL, 'Test2', 'Test2', '2020-12-31', 'male', '5858', '25585', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(41, 'FG20200309000038', 'FG20200309000036', 'Test1', 'FG-100-190', 39, 55, 56, NULL, 'FG20200309000036', 'FG20200309000052', 'FG20200309000053', NULL, 'Test2', 'Test2', '2020-12-31', 'male', '5858', '25585', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(42, 'FG20200309000039', 'FG20200309000036', 'Test1', 'FG-100-209', 39, NULL, NULL, NULL, 'FG20200309000036', NULL, NULL, NULL, 'Test3', 'Test3', '2020-12-31', 'male', '5858', '25585', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(43, 'FG20200309000040', 'FG20200309000036', 'Test1', 'FG-100-209', 39, NULL, NULL, NULL, 'FG20200309000036', NULL, NULL, NULL, 'Test3', 'Test3', '2020-12-31', 'male', '5858', '25585', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(44, 'FG20200309000041', 'FG20200309000036', 'Test1', 'FG-100-209', 39, NULL, NULL, NULL, 'FG20200309000036', NULL, NULL, NULL, 'Test45', 'Test55', '2020-12-31', 'male', '58583', '255854', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(45, 'FG20200309000042', 'FG20200309000036', 'Test1', 'FG-100-209', 39, NULL, NULL, NULL, 'FG20200309000036', NULL, NULL, NULL, 'Test45', 'Test55', '2020-12-31', 'male', '58583', '255854', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(46, 'FG20200309000043', 'FG20200309000036', 'Test1', 'FG-100-209', 39, NULL, NULL, NULL, 'FG20200309000036', NULL, NULL, NULL, 'Test45', 'Test55', '2020-12-31', 'male', '58583', '255854', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(47, 'FG20200309000044', 'FG20200309000036', 'Test1', 'FG-100-209', 39, NULL, NULL, NULL, 'FG20200309000036', NULL, NULL, NULL, 'Test45', 'Test55', '2020-12-31', 'male', '58583', '255854', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(48, 'FG20200309000045', 'FG20200309000036', 'Test1', 'FG-100-209', 39, NULL, NULL, NULL, 'FG20200309000036', NULL, NULL, NULL, 'Test5', 'Test5', '2020-12-31', 'male', 'sdfs', '2558543', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(49, 'FG20200309000046', 'FG20200309000036', 'Test1', 'FG-100-209', 39, NULL, NULL, NULL, 'FG20200309000036', NULL, NULL, NULL, 'Test5', 'Test5', '2020-12-31', 'male', 'sdfs', '2558543', 'old new', '99', '4444@ss.com', '12358', 'idsc', 'idca', 'RS Puram', 'Name', 'relation', '2020-03-09 13:29:37', 'active'),
(50, 'FG20200309000047', 'FG20200309000038', 'Test2', 'FG-100-209', 41, NULL, NULL, NULL, 'FG20200309000038', NULL, NULL, NULL, 'Tet7', 'test7', '2020-01-01', 'male', '1258', '12587', 'New aodd', '998', '525@g.com', '1258', '1258', 'Bank', 'Branch', 'Raj', 'DFiw', '2020-03-09 13:29:37', 'active'),
(51, 'FG20200309000048', 'FG20200309000038', 'Test2', 'FG-100-209', 41, NULL, NULL, NULL, 'FG20200309000038', NULL, NULL, NULL, 'Tet7', 'test7', '2020-01-01', 'male', '1258', '12587', 'New aodd', '998', '525@g.com', '1258', '1258', 'Bank', 'Branch', 'Raj', 'DFiw', '2020-03-09 13:29:37', 'active'),
(52, 'FG20200309000049', 'FG20200309000038', 'Test2', 'FG-100-209', 41, NULL, NULL, NULL, 'FG20200309000038', NULL, NULL, NULL, 'Tet7', 'test7', '2020-01-01', 'male', '1258', '12587', 'New aodd', '998', '525@g.com', '1258', '1258', 'Bank', 'Branch', 'Raj', 'DFiw', '2020-03-09 13:29:37', 'active'),
(53, 'FG20200309000050', 'FG20200309000038', 'Test2', 'FG-100-209', 41, NULL, NULL, NULL, 'FG20200309000038', NULL, NULL, NULL, 'Tet7', 'test7', '2020-01-01', 'male', '1258', '12587', 'New aodd', '998', '525@g.com', '1258', '1258', 'Bank', 'Branch', 'Raj', 'DFiw', '2020-03-09 13:29:37', 'active'),
(54, 'FG20200309000051', 'FG20200309000038', 'Test2', 'FG-100-209', 41, NULL, NULL, NULL, 'FG20200309000038', NULL, NULL, NULL, 'Tet7', 'test7', '2020-01-01', 'male', '1258', '12587', 'New aodd', '998', '525@g.com', '1258', '1258', 'Bank', 'Branch', 'Raj', 'DFiw', '2020-03-09 13:29:37', 'active'),
(55, 'FG20200309000052', 'FG20200309000038', 'Test2', 'FG-100-209', 41, NULL, NULL, NULL, 'FG20200309000038', NULL, NULL, NULL, 'Tet8', 'test8', '2020-01-01', 'male', '12583', '125873', 'New aodd', '9982', '5252@g.com', '1258', '1258', 'Bank', 'Branch', 'Raj', 'DFiw', '2020-03-09 13:29:37', 'active'),
(56, 'FG20200309000053', 'FG20200309000038', 'Test2', 'FG-100-214', 41, 57, 58, NULL, 'FG20200309000038', 'FG20200309000054', 'FG20200309000055', NULL, 'test 10', 'test10', '2020-12-31', 'male', '58585', '125882', 'ne addres', '1235', NULL, 'Acc1', 'ICSC1', 'Newwq Bank', 'RS Puram', 'No name', 'no relation', '2020-03-09 13:29:37', 'active'),
(57, 'FG20200309000054', 'FG20200309000053', 'test 10', 'FG-100-229', 56, NULL, NULL, NULL, 'FG20200309000053', NULL, NULL, NULL, 'Test11', 'Test11', '2020-12-31', 'male', '8858', '2528', 'no address', '9944', NULL, '1258', 'KKBK', 'Kotakl', 'RS Puram', 'RT', 'Wife', '2020-03-09 13:29:37', 'active'),
(58, 'FG20200309000055', 'FG20200309000053', 'test 10', 'FG-100-234', 56, NULL, NULL, NULL, 'FG20200309000053', NULL, NULL, NULL, 'Test 12', 'Test 12', '2020-12-31', 'male', '5685', '25258', 'Old Addressw', '98', NULL, '52855', 'SBIN', 'SBI', 'RS L', 'Re', 'Wife', '2020-03-09 13:29:37', 'active'),
(59, 'FG20200309000056', 'FG20200309000032', 'Mohan', 'FG-100-249', 35, NULL, NULL, NULL, 'FG20200309000032', NULL, NULL, NULL, 'Test 12', 'Test 12', '2020-12-31', 'male', '9858', '1258', '9', '9852', NULL, '9585', 'IFDC', 'SBI', 'CBE', 'NO name', 'no relation', '2020-03-09 13:29:37', 'active'),
(60, 'FG20200309000057', 'FG20200309000032', 'Mohan', 'FG-100-254', 35, NULL, NULL, NULL, 'FG20200309000032', NULL, NULL, NULL, 'Test 13', 'Test 13', '2020-12-31', 'female', '2578', '2548', 'Old Addrtess', '25255', NULL, '125', '128', '1525', '/1454', '1258', '1258', '2020-03-09 13:29:37', 'active'),
(61, 'FG20200309000058', 'FG20200309000032', 'Mohan', 'FG-100-254', 35, NULL, NULL, NULL, 'FG20200309000032', NULL, NULL, NULL, 'Test 13', 'Test 13', '2020-12-31', 'female', '2578', '2548', 'Old Addrtess', '25255', NULL, '125', '128', '1525', '/1454', '1258', '1258', '2020-03-09 13:29:37', 'active'),
(62, 'FG20200309000059', 'FG20200309000032', 'Mohan', 'FG-100-254', 35, NULL, NULL, NULL, 'FG20200309000032', NULL, NULL, NULL, 'Test 13', 'Test 13', '2020-12-31', 'female', '2578', '2548', 'Old Addrtess', '25255', NULL, '125', '128', '1525', '/1454', '1258', '1258', '2020-03-09 13:29:37', 'active'),
(63, 'FG20200309000060', 'FG20200309000032', 'Mohan', 'FG-100-254', 35, NULL, NULL, NULL, 'FG20200309000032', NULL, NULL, NULL, 'Test 13', 'Test 13', '2020-12-31', 'female', '2578', '2548', 'Old Addrtess', '25255', NULL, '125', '128', '1525', '/1454', '1258', '1258', '2020-03-09 13:29:37', 'active'),
(64, 'FG20200309000061', 'FG20200309000032', 'Mohan', 'FG-100-254', 35, NULL, NULL, NULL, 'FG20200309000032', NULL, NULL, NULL, 'Test 13', 'Test 13', '2020-12-31', 'female', '2578', '2548', 'Old Addrtess', '25255', NULL, '125', '128', '1525', '/1454', '1258', '1258', '2020-03-09 13:29:37', 'active'),
(65, 'FG20200309000062', 'FG20200309000032', 'Mohan', 'FG-100-254', 35, NULL, NULL, NULL, 'FG20200309000032', NULL, NULL, NULL, 'Test 15', 'Test 15', '2020-12-31', 'female', '234', '254823', 'Old Addrtess', '25255', NULL, '125', '128', '1525', '/1454', '1258', '1258', '2020-03-09 13:29:37', 'active'),
(66, 'FG20200309000063', 'FG20200305000004', 'rav', 'FG-100-269', 4, 67, NULL, NULL, 'FG20200305000004', 'FG20200309000064', NULL, NULL, 'Ravindran', 'Chinnaiyan', '1978-04-03', 'male', '452545654628', 'AKQPR286G', 'Sivagami Nagar', '9787616123', 'cravindr@gmail.com', '8511399583', 'KKBK000490', 'Kotak', 'R.S Puram', 'Revathi', 'Wife', '2020-03-09 13:29:37', 'active'),
(67, 'FG20200309000064', 'FG20200309000063', 'Test 20', 'FG-100-274', 66, 71, NULL, NULL, 'FG20200309000063', 'FG20200312000068', NULL, NULL, 'Test21', 'Test 21', '2020-12-31', 'others', '2568', '5255', '29,L', '369', NULL, '158585', 'SBI', 'SVI', 'SBI V', 'Re', 'Wife', '2020-03-09 13:34:31', 'active'),
(68, 'FG20200312000065', 'FG20200309000064', 'Test21', 'FG-100-323', 67, NULL, NULL, NULL, 'FG20200309000064', NULL, NULL, NULL, 'Mani', 'Kandan', '2020-12-31', 'male', '12525', '2125522', '29 DB Road', '99444', 'cravi@gmail.com', '12586', 'IFSC Test', 'Kotak', 'RS Puram', 'NO', 'NBo', '2020-03-12 15:44:07', 'active'),
(69, 'FG20200312000066', 'FG20200309000064', 'Test21', 'FG-100-323', 67, NULL, NULL, NULL, 'FG20200309000064', NULL, NULL, NULL, 'Mani', 'Kandan', '2020-12-31', 'male', '12525', '2125522', '29 DB Road', '99444', 'cravi@gmail.com', '12586', 'IFSC Test', 'Kotak', 'RS Puram', 'NO', 'NBo', '2020-03-12 15:45:02', 'active'),
(70, 'FG20200312000067', 'FG20200309000064', 'Test21', 'FG-100-323', 67, NULL, NULL, NULL, 'FG20200309000064', NULL, NULL, NULL, 'Mani', 'Kandan', '2020-12-31', 'female', '12525', '2125522', '29 DB Road', '99444', 'cravi@gmail.com', '12586', 'IFSC Test', 'Kotak', 'RS Puram', 'NO', 'NBo', '2020-03-12 15:45:32', 'active'),
(71, 'FG20200312000068', 'FG20200309000064', 'Test21', 'FG-100-323', 67, 72, NULL, NULL, 'FG20200309000064', 'FG20200312000069', NULL, NULL, 'Mani', 'Kandan', '2020-12-31', 'others', '12525', '2125522', '29 DB Road', '99444', 'cravi@gmail.com', '12586', 'IFSC Test', 'Kotak', 'RS Puram', 'NO', 'NBo', '2020-03-12 15:54:47', 'active'),
(72, 'FG20200312000069', 'FG20200312000068', 'Mani', 'FG-100-318', 71, 73, NULL, NULL, 'FG20200312000068', 'FG20200313000070', NULL, NULL, 'Subaiyapillai', 'Palani', '2020-12-31', 'male', '888', '1258', '1905', '9944', 'cravi@gmail.com', '123456', 'IFSC000558', 'Bank', 'Branch', 'NO No', 'NO', '2020-03-12 15:58:06', 'active'),
(73, 'FG20200313000070', 'FG20200312000069', 'Subaiyapillai', 'FG-100-303', 72, NULL, NULL, NULL, 'FG20200312000069', NULL, NULL, NULL, 'Test Com', 'Commision', '2020-12-31', 'male', '225488', '125885', 'NO addres', '5828', NULL, '856255', 'IDFE000158', 'IDFC', 'RS Puam', 'NO name', 'No relation', '2020-03-13 11:07:33', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `node_id` int(11) NOT NULL,
  `node_code` varchar(25) NOT NULL,
  `node_name` varchar(150) NOT NULL,
  `coupon` varchar(15) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('credit','debit','payout','cancled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `node_id`, `node_code`, `node_name`, `coupon`, `amount`, `cdate`, `status`) VALUES
(1, 41, 'FG20200309000038', 'Test2', 'FG-100-214', '300.00', '2020-03-13 13:11:03', 'credit'),
(2, 39, 'FG20200309000036', 'Test1', 'FG-100-214', '200.00', '2020-03-13 13:11:03', 'credit'),
(3, 32, 'FG20200309000030', 'Mohan', 'FG-100-214', '100.00', '2020-03-13 13:11:03', 'credit'),
(4, 24, 'FG20200307000022', 'Santoshi', 'FG-100-214', '50.00', '2020-03-13 13:11:03', 'credit'),
(5, 13, 'FG20200307000011', 'Santoshi', 'FG-100-214', '20.00', '2020-03-13 13:11:03', 'credit'),
(6, 56, 'FG20200309000053', 'test 10', 'FG-100-229', '300.00', '2020-03-13 13:11:03', 'credit'),
(7, 41, 'FG20200309000038', 'Test2', 'FG-100-229', '200.00', '2020-03-13 13:11:03', 'credit'),
(8, 39, 'FG20200309000036', 'Test1', 'FG-100-229', '100.00', '2020-03-13 13:11:03', 'credit'),
(9, 32, 'FG20200309000030', 'Mohan', 'FG-100-229', '50.00', '2020-03-13 13:11:03', 'credit'),
(10, 24, 'FG20200307000022', 'Santoshi', 'FG-100-229', '20.00', '2020-03-13 13:11:03', 'credit'),
(11, 56, 'FG20200309000053', 'test 10', 'FG-100-234', '300.00', '2020-03-13 13:11:03', 'credit'),
(12, 41, 'FG20200309000038', 'Test2', 'FG-100-234', '200.00', '2020-03-13 13:11:03', 'credit'),
(13, 39, 'FG20200309000036', 'Test1', 'FG-100-234', '100.00', '2020-03-13 13:11:03', 'credit'),
(14, 32, 'FG20200309000030', 'Mohan', 'FG-100-234', '50.00', '2020-03-13 13:11:03', 'credit'),
(15, 24, 'FG20200307000022', 'Santoshi', 'FG-100-234', '20.00', '2020-03-13 13:11:03', 'credit'),
(16, 35, 'FG20200309000032', 'Mohan', 'FG-100-249', '300.00', '2020-03-13 13:11:03', 'credit'),
(17, 32, 'FG20200309000030', 'Mohan', 'FG-100-249', '200.00', '2020-03-13 13:11:03', 'credit'),
(18, 24, 'FG20200307000022', 'Santoshi', 'FG-100-249', '100.00', '2020-03-13 13:11:03', 'credit'),
(19, 13, 'FG20200307000011', 'Santoshi', 'FG-100-249', '50.00', '2020-03-13 13:11:03', 'credit'),
(20, 12, 'FG20200307000010', 'Aravinth', 'FG-100-249', '20.00', '2020-03-13 13:11:03', 'credit'),
(21, 35, 'FG20200309000032', 'Mohan', 'FG-100-254', '300.00', '2020-03-13 13:11:03', 'credit'),
(22, 32, 'FG20200309000030', 'Mohan', 'FG-100-254', '200.00', '2020-03-13 13:11:03', 'credit'),
(23, 24, 'FG20200307000022', 'Santoshi', 'FG-100-254', '100.00', '2020-03-13 13:11:03', 'credit'),
(24, 13, 'FG20200307000011', 'Santoshi', 'FG-100-254', '50.00', '2020-03-13 13:11:03', 'credit'),
(25, 12, 'FG20200307000010', 'Aravinth', 'FG-100-254', '20.00', '2020-03-13 13:11:03', 'credit'),
(26, 4, 'FG20200305000004', 'rav', 'FG-100-269', '300.00', '2020-03-13 13:11:03', 'credit'),
(27, 1, 'FG20200305000001', '', 'FG-100-269', '200.00', '2020-03-13 13:11:03', 'credit'),
(28, 0, 'r', 'Root', 'FG-100-269', '100.00', '2020-03-13 13:11:03', 'credit'),
(29, 66, 'FG20200309000063', 'Test 20', 'FG-100-274', '300.00', '2020-03-13 13:11:03', 'credit'),
(30, 4, 'FG20200305000004', 'rav', 'FG-100-274', '200.00', '2020-03-13 13:11:03', 'credit'),
(31, 1, 'FG20200305000001', '', 'FG-100-274', '100.00', '2020-03-13 13:11:03', 'credit'),
(32, 0, 'r', 'Root', 'FG-100-274', '50.00', '2020-03-13 13:11:03', 'credit'),
(33, 67, 'FG20200309000064', 'Test21', 'FG-100-323', '300.00', '2020-03-13 13:11:03', 'credit'),
(34, 66, 'FG20200309000063', 'Test 20', 'FG-100-323', '200.00', '2020-03-13 13:11:03', 'credit'),
(35, 4, 'FG20200305000004', 'rav', 'FG-100-323', '100.00', '2020-03-13 13:11:03', 'credit'),
(36, 1, 'FG20200305000001', '', 'FG-100-323', '50.00', '2020-03-13 13:11:03', 'credit'),
(37, 0, 'r', 'Root', 'FG-100-323', '20.00', '2020-03-13 13:11:03', 'credit'),
(38, 71, 'FG20200312000068', 'Mani', 'FG-100-318', '300.00', '2020-03-13 13:11:03', 'credit'),
(39, 67, 'FG20200309000064', 'Test21', 'FG-100-318', '200.00', '2020-03-13 13:11:03', 'credit'),
(40, 66, 'FG20200309000063', 'Test 20', 'FG-100-318', '100.00', '2020-03-13 13:11:03', 'credit'),
(41, 4, 'FG20200305000004', 'rav', 'FG-100-318', '50.00', '2020-03-13 13:11:03', 'credit'),
(42, 1, 'FG20200305000001', '', 'FG-100-318', '20.00', '2020-03-13 13:11:03', 'credit'),
(43, 72, 'FG20200312000069', 'Subaiyapillai', 'FG-100-303', '300.00', '2020-03-13 13:11:03', 'credit'),
(44, 71, 'FG20200312000068', 'Mani', 'FG-100-303', '200.00', '2020-03-13 13:11:03', 'credit'),
(45, 67, 'FG20200309000064', 'Test21', 'FG-100-303', '100.00', '2020-03-13 13:11:03', 'credit'),
(46, 66, 'FG20200309000063', 'Test 20', 'FG-100-303', '50.00', '2020-03-13 13:11:03', 'credit'),
(47, 4, 'FG20200305000004', 'rav', 'FG-100-303', '20.00', '2020-03-13 13:11:03', 'credit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(512) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `password` varchar(512) DEFAULT NULL,
  `mobile_no` int(15) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `mobile_no`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 968800735, 'active', '2020-02-27 00:00:00', '2020-02-27 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_node`
--
ALTER TABLE `auto_node`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `node`
--
ALTER TABLE `node`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto_node`
--
ALTER TABLE `auto_node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `node`
--
ALTER TABLE `node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
