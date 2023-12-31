-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 11:11 AM
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
(1, 'ali', 'ali@gmail.com', 'alii123'),
(2, 'zoha', 'zoha@gmail.com', 'zoha123'),
(3, 'ebaad', 'ebad@gmail.com', '123456');

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
  `price` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `v_id` int(11) DEFAULT NULL,
  `status` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `pickup_date`, `pickup_time`, `pickup_location`, `dropoff_location`, `distance_km`, `price`, `c_id`, `d_id`, `service_id`, `v_id`, `status`) VALUES
(6, '2023-08-03', '01:00:00', 'Aptech Computer Education North Nazimabad Center, Block', 'Agha Khan Hospital Pond No.1, Aga Khan University Hospi', NULL, 600, 5, 23, 3, NULL, 'Started'),
(7, '2023-08-03', '01:00:00', 'Aptech Computer Education North Nazimabad Center, Block', 'Agha Khan Hospital Pond No.1, Aga Khan University Hospi', NULL, 987, 5, 25, 3, NULL, 'Completed'),
(8, '2023-08-03', '01:00:00', 'Aptech Computer Education North Nazimabad Center, Block', 'Agha Khan Hospital Pond No.1, Aga Khan University Hospi', NULL, 0, 5, 23, 3, NULL, 'Cancelled'),
(10, '2023-08-03', '03:32:20', 'Aptech Computer Education Ajah Centre, Lekki - Epe Expr', 'Hospital Street, D.H.A. Phase 2 Phase 2 Defence Housing', NULL, 900, 5, 25, 3, NULL, 'Completed'),
(11, '2023-08-03', '03:32:20', 'Aptech Computer Education Ajah Centre, Lekki - Epe Expr', 'Hospital Street, D.H.A. Phase 2 Phase 2 Defence Housing', NULL, 0, 5, 25, 3, NULL, 'Cancelled'),
(12, '2023-08-09', '07:27:59', 'Ayesha Manzil Pedestrian Crosssing, F.B Area Block 6 Bl', 'Ziauddin Hospital, Shahrah-e-Ghalib Road, Block 6 Clift', NULL, 200, 5, 25, 1, NULL, 'Completed'),
(14, '1970-01-01', '02:25:04', 'Aptech Learning, Shahrah e Faisal Center, Shahrah-e-Fai', 'Liaquat National Hospital, Karachi, Pakistan', NULL, 700, 4, 25, 3, NULL, 'Completed'),
(19, '1970-01-01', '05:01:52', 'Aptech Computer Education North Nazimabad Center, Block', 'Liaquat National Hospital, Karachi, Pakistan', NULL, 500, 5, 23, 1, NULL, 'Started'),
(23, '1970-01-01', '07:23:17', 'Dolmen Mall Clifton, Marine Promenade, Block 4 Clifton,', 'OCEAN MALL Parking Road، Block 9 Clifton, Karachi, Paki', NULL, 0, 5, 23, 1, NULL, 'Cancelled'),
(25, '2023-08-23', '07:26:57', 'Maritime Museum Road, Karsaz Faisal Cantonment, Karachi', 'Al Habib Restaurant, Karachi - Hyderabad Motorway, Gada', NULL, NULL, 5, NULL, 1, NULL, 'Pending'),
(27, '2023-08-22', '07:35:57', 'Arena - Mosque, Karsaz Faisal Cantonment, Karachi, Paki', 'Jinnah International Airport, Faisal Cantonment, Karach', NULL, 600, 5, 23, 3, NULL, 'Completed'),
(28, '2023-08-22', '08:00:38', 'Liaquatabad, Karachi, Pakistan', 'Gulshan-e-Iqbal, Karachi, Pakistan', NULL, 0, 5, 23, 1, NULL, 'Cancelled'),
(29, '2023-08-22', '08:00:38', 'Liaquatabad, Karachi, Pakistan', 'Gulshan-e-Iqbal, Karachi, Pakistan', NULL, NULL, 5, NULL, 1, NULL, 'Pending'),
(30, '2023-08-22', '08:00:38', 'Liaquatabad, Karachi, Pakistan', 'Gulshan-e-Iqbal, Karachi, Pakistan', NULL, NULL, 5, NULL, 1, NULL, 'Pending'),
(31, '2023-08-22', '08:04:15', 'Karachi, Pakistan', 'Lahore, Pakistan', NULL, 0, 5, 23, 1, NULL, 'Cancelled'),
(32, '2023-08-22', '08:15:45', 'MashAllah Fast Food, Block 7 Gulshan-e-Iqbal, Karachi, ', 'Agha Khan Hospital Pond No.1, Aga Khan University Hospi', NULL, 1000, 5, 23, 1, NULL, 'Started'),
(33, '2023-08-22', '08:26:45', 'Aptech Computer Education North Nazimabad Center, Block', 'Surjani Town, Karachi, Pakistan', NULL, 2000, 5, 23, 1, NULL, 'Started'),
(34, '2023-08-22', '09:22:20', 'Mazare Quaid-i-Azam, M.A Jinnah Road, Central Jacob Lin', 'Clifton Hospital, Block 5 Clifton, Karachi, Pakistan', NULL, 700, 5, 23, 1, NULL, 'Started'),
(35, '2023-08-22', '09:36:17', 'Aptech Computer Education North Nazimabad Center, Block', 'KFC, Khayaban-e-Ittehad Road, Phase 2 Commercial Area D', NULL, 0, 5, 26, 1, NULL, 'Started'),
(36, '2023-08-22', '09:38:01', 'aptech', 'aptech', NULL, 0, 5, 23, 1, NULL, 'Cancelled'),
(37, '2023-08-22', '11:14:07', 'Aptech Computer Education North Nazimabad Center, Block', 'Shaheed-e-Millat Government Degree College for Women, A', NULL, 500, 6, 26, 3, NULL, 'Started'),
(38, '2023-09-14', '01:50:00', 'Gulistan-e-Johar, Karachi, Pakistan', 'Karsaz Faisal Cantonment, Karachi, Pakistan', NULL, NULL, 6, NULL, 3, NULL, 'Pending'),
(39, '2023-09-06', '01:30:00', 'Taj Banquet, Sharah-e-Sher Shah Suri, Block A North Naz', 'Aptech Learning, Shahrah e Faisal Center, Shahrah-e-Fai', NULL, 600, 6, 26, 3, NULL, 'Started'),
(40, '2023-09-05', '12:24:09', 'Taj Banquet, Sharah-e-Sher Shah Suri, Block A North Naz', 'Aptech Computer Education North Nazimabad Center, Block', NULL, NULL, 6, NULL, 3, NULL, 'Pending'),
(41, '2023-09-05', '12:41:51', 'Taj Banquet, Sharah-e-Sher Shah Suri, Block A North Naz', 'Taj Banquet, Sharah-e-Sher Shah Suri, Block A North Naz', NULL, 600, 8, 26, 1, NULL, 'Started'),
(42, '2023-09-08', '02:50:00', 'Taj Banquet, Sharah-e-Sher Shah Suri, Block A North Naz', 'Aptech Learning, Shahrah e Faisal Center, Shahrah-e-Fai', NULL, 200, 8, 26, 3, NULL, 'Started'),
(43, '2023-09-05', '12:55:21', 'Taj Banjara, Hyderabad, Road Number 1, Mithila Nagar, B', 'Aptech Learning, Shahrah e Faisal Center, Shahrah-e-Fai', NULL, 600, 8, 26, 3, NULL, 'Started'),
(44, '2023-09-06', '02:10:00', 'Aptech Computer Education North Nazimabad Center, Block', 'University of Karachi, KU Circular Road, Karachi, Pakis', NULL, 200, 8, 28, 4, NULL, 'Started'),
(45, '2023-09-07', '01:40:00', 'Taj Banjara, Hyderabad, Road Number 1, Mithila Nagar, B', 'Aptech Learning, Shahrah e Faisal Center, Shahrah-e-Fai', NULL, 600, 9, 28, 3, NULL, 'Started'),
(46, '2023-09-07', '03:00:00', 'Aptech Computer Education North Nazimabad Center, Block', 'Taj Banquet, Sharah-e-Sher Shah Suri, Block A North Naz', NULL, 200, 8, 28, 1, NULL, 'Started');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'zoha baig', 'zoha@gmail.com', 'good ', 'nice'),
(2, 'aemyyy', 'aimon@gmail.com', 'hello ', 'great service');

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
(4, '   MUBASHIRA', '   KHAN', 3115469287, 'nazimabad', 'MUBASHIRA@GMAIL.COM', 'fcea920f7412b5da7be0cf42b8c93759'),
(5, '   Zunairaa', '   Jawedd', 3104494368, 'Bahria Town', 'jawedsalman53@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(6, 'Aemy', 'Khan', 3118753425, 'gulshan karachi', 'aimonjawed1289@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(8, '  Atika', '  Liaquat', 3118753429, 'gulshan karachi', 'aatikaliaquat16@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(9, ' Ebad', ' 767', 3118753420, 'gulshan karachi', 'ebad@aptechnorth.edu.pk', 'e10adc3949ba59abbe56e057f20f883e');

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
(14, ' Mujtaba', ' Haider', 3111111111, 4210172636421, 'mujtaba@gmail.com', 'gulberg', '12345', 'Approved'),
(18, 'Arijit', 'Singh', 3111000001, 4210110101010, 'arijit@gmail.com', 'gulberg', '12345', 'Pending'),
(20, 'Hamdan', 'Ali', 3020202022, 4210118181811, 'hamdan@gmail.com', 'garden', '12345', 'Pending'),
(23, ' Ian', ' Somerhalder', 3000127354, 4222222222222, 'iansomerhalder@gmail.com', 'Clifton', 'fcea920f7412b5da7be0cf42b8c93759', 'Approved'),
(25, ' Aemy', ' K', 3112345670, 42147899222, 'jawed567@gmail.com', 'garden east, karachi', 'fcea920f7412b5da7be0cf42b8c93759', 'Approved'),
(26, ' zoha', ' baig', 3143521219, 4210101010, 'baigzoha02@gmail.com', 'nazimabad', 'fcea920f7412b5da7be0cf42b8c93759', 'Approved'),
(27, ' Tooba', ' Khawar', 2345667811, 4210202020, 'toobakhawar@aptechnorth.edu.pk', 'nazimabad', 'fcea920f7412b5da7be0cf42b8c93759', 'Approved'),
(28, ' dawood', ' mumtaaz', 7362323238, 0, 'asadiqbal11914@gmail.com', 'nazimabad', 'fcea920f7412b5da7be0cf42b8c93759', 'Approved'),
(29, 'hafsa', 'asif', 3112345678, 0, 'hafsakhanss87@gmail.com', 'nazimabad', 'fcea920f7412b5da7be0cf42b8c93759', 'Pending');

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

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `ratings`, `comment`, `booking_id`) VALUES
(4, 'on', 'ikr', 6),
(7, 'on', 'ikr', NULL),
(8, 'on', 'nothing , everything will be good.....', NULL),
(9, 'on', 'nothing , everything will be good.....', NULL),
(10, 'on', 'good', NULL),
(13, 'on', 'good', 35),
(14, 'Mediocre', 'good', 36),
(15, 'Good', '', 37),
(16, 'Very Good', 'good', 38),
(17, 'Very Good', 'good', 38),
(18, 'Mediocre', 'no complaints', 38),
(19, 'Mediocre', 'no complaints', 38),
(20, 'Very Good', 'good', 38),
(21, 'Mediocre', 'no complaints', 39);

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
  `d_id` int(11) NOT NULL,
  `v_model` varchar(55) NOT NULL,
  `v_year` int(11) NOT NULL,
  `v_capacity` int(11) NOT NULL,
  `v_regNum` varchar(55) NOT NULL,
  `v_drv_img` varchar(255) DEFAULT NULL,
  `v_cert_img` varchar(255) DEFAULT NULL,
  `v_img` varchar(255) DEFAULT NULL,
  `v_drv_lic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`v_id`, `v_name`, `d_id`, `v_model`, `v_year`, `v_capacity`, `v_regNum`, `v_drv_img`, `v_cert_img`, `v_img`, `v_drv_lic`) VALUES
(8, 'Demers', 23, 'Yellow Type 2', 2018, 2, 'C-543', 'glasses.jpg', 'Aviator.png', '2_HeroDesktop_1920x800.jpg', 'glasses.jpg'),
(9, 'Demers', 25, 'HiLux Vigo', 2018, 2, 'C-545', 'driver.jpg', 'Smart-Card-Vehicle-Registration.jpg', 'download.jpg', 'license.jpg'),
(10, 'toyota', 26, 'HiLux Vigo', 2018, 3, 'C-549', 'driver2.jpg', 'biometric-registration.jpg', 'vhc2.jpg', ' drvlic.PNG'),
(12, 'toyota', 27, 'HiLux Vigo', 2018, 2, 'C-544', 'driver2.jpg', 'biometric-registration.jpg', 'vhc2.jpg', ' drvlic.PNG'),
(13, 'Toyota', 28, 'Demers', 2007, 2, 'kp-098', 'driver2.jpg', 'biometric-registration.jpg', 'vhc2.jpg', ' drvlic.PNG'),
(14, 'Toyota', 29, 'Demers', 2008, 2, 'kp-099', 'license.jpg', 'drvlic.PNG', 'biometric-registration.jpg', ' download.jpg');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers_info`
--
ALTER TABLE `customers_info`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
