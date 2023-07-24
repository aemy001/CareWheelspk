-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 02:52 PM
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
-- Database: `tsdp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(55) NOT NULL,
  `a_email` varchar(55) NOT NULL,
  `a_password` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_email`, `a_password`) VALUES
(1, 'ali', 'ali@gmail.com', 'alii');

-- --------------------------------------------------------

--
-- Table structure for table `customers_info`
--

CREATE TABLE `customers_info` (
  `c_id` int(11) NOT NULL,
  `c_firstname` varchar(55) NOT NULL,
  `c_lastname` varchar(55) NOT NULL,
  `c_phone` bigint(20) NOT NULL,
  `c_address` varchar(55) NOT NULL,
  `c_email` varchar(55) NOT NULL,
  `c_password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_info`
--

INSERT INTO `customers_info` (`c_id`, `c_firstname`, `c_lastname`, `c_phone`, `c_address`, `c_email`, `c_password`) VALUES
(4, ' MUBASHIRA', ' KHAN', 3115469287, 'nazimabad', 'MUBASHIRA@GMAIL.COM', '123456'),
(5, 'Zunaira', 'Jawed', 3104494368, 'Bahria Town', 'jawedzunaira53@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `d_id` int(11) NOT NULL,
  `d_fname` varchar(55) NOT NULL,
  `d_lname` varchar(55) NOT NULL,
  `d_phone` bigint(11) NOT NULL,
  `CNIC` bigint(13) NOT NULL,
  `d_email` varchar(55) NOT NULL,
  `d_address` varchar(55) NOT NULL,
  `d_password` varchar(55) NOT NULL,
  `d_status` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`d_id`, `d_fname`, `d_lname`, `d_phone`, `CNIC`, `d_email`, `d_address`, `d_password`, `d_status`) VALUES
(5, '   boss', '   talha', 2646545, 0, 'boss@gmail.com', 'boss', 'gymkhana123', 'Approved'),
(12, 'Syed ', 'Ehsan', 3117765438, 0, 'ehsan@gmail.com', 'gulberg', '12345', 'Pending'),
(13, 'Syed ', 'Adnan', 3176592351, 4210176521342, 'adnan@gmail.com', 'gulberg', '12345', 'Pending'),
(14, ' Mujtaba', ' Haider', 3111111111, 4210172636421, 'mujtaba@gmail.com', 'gulberg', '12345', 'Approved'),
(18, 'Arijit', 'Singh', 3111000001, 4210110101010, 'arijit@gmail.com', 'gulberg', '12345', 'Pending'),
(20, 'Hamdan', 'Ali', 3020202022, 4210118181811, 'hamdan@gmail.com', 'garden', '12345', 'Pending'),
(21, 'Hamza', 'Farjad', 20139876543, 2013987654321, 'hamza@gmail.com', 'gulberg', '12345', 'Pending'),
(22, 'Khushhal', 'Rajpoot', 30981675432, 3098167543210, 'khushhal@gmail.com', 'DHA', '12345', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `drivers_request`
--

CREATE TABLE `drivers_request` (
  `dreq_id` int(11) NOT NULL,
  `d_id` int(11) DEFAULT NULL,
  `d_status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(55) NOT NULL,
  `v_model` varchar(55) NOT NULL,
  `v_year` int(11) NOT NULL,
  `v_capacity` int(11) NOT NULL,
  `v_regNum` varchar(55) NOT NULL,
  `d_id` int(11) NOT NULL,
  `v_drv_img` varchar(255) DEFAULT NULL,
  `v_cert_img` varchar(255) DEFAULT NULL,
  `v_img` varchar(255) DEFAULT NULL,
  `v_drv_lic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`v_id`, `v_name`, `v_model`, `v_year`, `v_capacity`, `v_regNum`, `d_id`, `v_drv_img`, `v_cert_img`, `v_img`, `v_drv_lic`) VALUES
(1, 'toyota', 'vigo', 2020, 3, 'Y-123', 0, NULL, NULL, NULL, NULL),
(7, 'toyota', 'HiLux Vigo', 2018, 3, 'Y-121', 21, 'glasses.jpg', NULL, NULL, NULL),
(8, 'Demers', 'Yellow Type 2', 2018, 2, 'C-543', 22, 'glasses.jpg', 'Aviator.png', '2_HeroDesktop_1920x800.jpg', 'glasses.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_email` (`a_email`);

--
-- Indexes for table `customers_info`
--
ALTER TABLE `customers_info`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_phone` (`c_phone`),
  ADD UNIQUE KEY `c_email` (`c_email`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_email` (`d_email`);

--
-- Indexes for table `drivers_request`
--
ALTER TABLE `drivers_request`
  ADD PRIMARY KEY (`dreq_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `d_id` (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers_info`
--
ALTER TABLE `customers_info`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `drivers_request`
--
ALTER TABLE `drivers_request`
  MODIFY `dreq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drivers_request`
--
ALTER TABLE `drivers_request`
  ADD CONSTRAINT `drivers_request_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `drivers` (`d_id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `drivers` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
