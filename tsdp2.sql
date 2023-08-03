-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 01:20 AM
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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_time` time NOT NULL,
  `pickup_location` varchar(55) NOT NULL,
  `dropoff_location` varchar(55) NOT NULL,
  `distance_km` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `v_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `pickup_date`, `pickup_time`, `pickup_location`, `dropoff_location`, `distance_km`, `c_id`, `d_id`, `service_id`, `v_id`) VALUES
(1, '2023-08-03', '00:00:00', 'Aptech Learning, Shahrah e Faisal Center, Shahrah-e-Fai', 'Liaquat National Hospital, Karachi, Pakistan', NULL, 5, NULL, 1, NULL),
(2, '2023-08-03', '00:00:00', 'Aptech Learning, Shahrah e Faisal Center, Shahrah-e-Fai', 'Liaquat National Hospital, Karachi, Pakistan', NULL, 5, NULL, 1, NULL),
(3, '2023-08-03', '00:00:00', 'Aptech Computer Education North Nazimabad Center, Block', 'Liaquat National Hospital, Karachi, Pakistan', NULL, 5, NULL, 1, NULL),
(4, '2023-08-03', '00:00:00', 'Aptech Computer Education North Nazimabad Center, Block', 'Aisha Bawani Government College, Sindhi Muslim Cooperat', NULL, 5, NULL, 1, NULL),
(5, '2023-08-03', '00:00:00', 'Aptech Learning, Shahrah e Faisal Center, Shahrah-e-Fai', 'Tariq Road, Pakistan Employees Co-Operative Housing Soc', NULL, 5, NULL, 1, NULL),
(6, '2023-08-03', '01:00:00', 'Aptech Computer Education North Nazimabad Center, Block', 'Agha Khan Hospital Pond No.1, Aga Khan University Hospi', NULL, 5, NULL, 3, NULL),
(7, '2023-08-03', '01:00:00', 'Aptech Computer Education North Nazimabad Center, Block', 'Agha Khan Hospital Pond No.1, Aga Khan University Hospi', NULL, 5, NULL, 3, NULL),
(8, '2023-08-03', '01:00:00', 'Aptech Computer Education North Nazimabad Center, Block', 'Agha Khan Hospital Pond No.1, Aga Khan University Hospi', NULL, 5, NULL, 3, NULL),
(9, '2023-08-03', '00:00:00', 'ARY Jewellers, Tariq Road, Pakistan Employees Co-Operat', 'Sindh Government Hospital Liaquatabad, Sharifabad Block', NULL, 5, NULL, 1, NULL),
(10, '2023-08-03', '03:32:20', 'Aptech Computer Education Ajah Centre, Lekki - Epe Expr', 'Hospital Street, D.H.A. Phase 2 Phase 2 Defence Housing', NULL, 5, NULL, 3, NULL),
(11, '2023-08-03', '03:32:20', 'Aptech Computer Education Ajah Centre, Lekki - Epe Expr', 'Hospital Street, D.H.A. Phase 2 Phase 2 Defence Housing', NULL, 5, NULL, 3, NULL);

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
(21, ' Hamza', ' Farjad', 20139876543, 2013987654321, 'hamza@gmail.com', 'gulberg', '12345', 'Approved'),
(22, 'Khushhal', 'Rajpoot', 30981675432, 3098167543210, 'baigzoha02@gmail.com', 'DHA', '12345', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `ratings` varchar(55) NOT NULL,
  `comment` varchar(55) NOT NULL,
  `booking_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_type` varchar(55) NOT NULL,
  `AC` varchar(55) NOT NULL,
  `priceperkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_type`, `AC`, `priceperkm`) VALUES
(1, 'Basic Ride', 'No', 150),
(3, 'AC Ride', 'Yes', 250),
(4, 'Luxury Ride', 'Yes', 350);

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
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `v_id` (`v_id`);

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customers_info` (`c_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `drivers` (`d_id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`),
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`v_id`) REFERENCES `vehicles` (`v_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `drivers` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
