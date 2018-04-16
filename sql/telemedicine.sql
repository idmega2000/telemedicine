-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 11:44 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telemedicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_medical_specification` varchar(50) NOT NULL,
  `client_phone_number` varchar(50) NOT NULL,
  `client_purpose` varchar(2000) DEFAULT NULL,
  `client_appointment_date` date NOT NULL,
  `client_appointment_time` time NOT NULL,
  `client_note` text,
  `client_boking_dateandtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`client_id`, `client_name`, `client_email`, `client_medical_specification`, `client_phone_number`, `client_purpose`, `client_appointment_date`, `client_appointment_time`, `client_note`, `client_boking_dateandtime`) VALUES
(1, 'shegun bola', 'bola@yahoo.com', 'Neurologist', '08123456789', '', '2018-01-27', '09:00:00', '', '2018-01-24 21:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_info`
--

CREATE TABLE `doctors_info` (
  `doctor_id` int(11) NOT NULL,
  `doctor_field` varchar(50) NOT NULL,
  `doctor_password` varchar(255) NOT NULL,
  `doctor_last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_info`
--

INSERT INTO `doctors_info` (`doctor_id`, `doctor_field`, `doctor_password`, `doctor_last_login`) VALUES
(1, 'General Doctor', '45f678b147fdf275c35b60bac2360984', '0000-00-00 00:00:00'),
(2, 'Cardiologist', '3b02a6fdd669efe9083cc84d15e5699b', '0000-00-00 00:00:00'),
(3, 'Cancer Specialist', 'c5771df124ed6073ae4e2d09b2b20ac0', '0000-00-00 00:00:00'),
(4, 'Neurologist', 'd9dd5a031723455173d4336914b17f2b', '0000-00-00 00:00:00'),
(5, 'Therapist', '83b8e9d7a4fa853010993f6dd6ff55a9', '0000-00-00 00:00:00'),
(6, 'Preventive Healthcare', '892eb7c3d25846caee80d4f37746b6b4', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `doctors_info`
--
ALTER TABLE `doctors_info`
  ADD PRIMARY KEY (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors_info`
--
ALTER TABLE `doctors_info`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
