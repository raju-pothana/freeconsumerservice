-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 03:55 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freeconsumerservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `advcate_images`
--

CREATE TABLE `advcate_images` (
  `id` int(11) NOT NULL,
  `advacate_id` int(11) NOT NULL,
  `resumefiles` varchar(100) NOT NULL,
  `eqcertificate` varchar(100) NOT NULL,
  `encertificate` varchar(100) NOT NULL,
  `identitycard` varchar(100) DEFAULT NULL,
  `practcertificateissued` varchar(100) DEFAULT NULL,
  `practconcern` varchar(100) DEFAULT NULL,
  `practcertificateissuedwhere` varchar(100) DEFAULT NULL,
  `passportphoto` varchar(100) DEFAULT NULL,
  `affidavit` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advcate_images`
--

INSERT INTO `advcate_images` (`id`, `advacate_id`, `resumefiles`, `eqcertificate`, `encertificate`, `identitycard`, `practcertificateissued`, `practconcern`, `practcertificateissuedwhere`, `passportphoto`, `affidavit`, `created_date`) VALUES
(1, 1, './uploads/advacate/1/771603361863.jpeg', './uploads/advacate/1/761603361863.jpeg', '', NULL, './uploads/advacate/1/521603361863.jpeg', NULL, './uploads/advacate/1/911603361863.jpeg', NULL, './uploads/advacate/1/971603361863.jpeg', '2020-10-22 12:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `advocate_details`
--

CREATE TABLE `advocate_details` (
  `id` int(11) NOT NULL,
  `name_advocate` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(25) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `practicing_place` varchar(20) NOT NULL,
  `specialized_practice_areas` varchar(50) NOT NULL,
  `known_languages` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `enrolment_no` varchar(20) NOT NULL,
  `number_of_legal_cases` varchar(25) NOT NULL,
  `education` varchar(25) NOT NULL,
  `experience_if_any` varchar(20) NOT NULL,
  `consultation_Fee` varchar(20) NOT NULL,
  `cost_per_hour` varchar(20) NOT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocate_details`
--

INSERT INTO `advocate_details` (`id`, `name_advocate`, `email`, `mobile_number`, `address`, `district`, `state`, `pin_code`, `practicing_place`, `specialized_practice_areas`, `known_languages`, `experience`, `enrolment_no`, `number_of_legal_cases`, `education`, `experience_if_any`, `consultation_Fee`, `cost_per_hour`, `created_date`) VALUES
(1, 'yedukondalu', 'yedu@gmail.com', '2312312312', 'hyderabad', 'hyderabad', 'telangana', '500076', 'hyderabad', 'hyderabad', 'english,telugu', '10', 'sda', '19', 'mallb', '3', '1000', '100', '2020-10-22 12:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `company_name`, `image`) VALUES
(1, 'Agri Inputs', 'agriculture.png'),
(2, 'App-store', 'appstore.png'),
(3, 'Automobile', 'car.png'),
(4, 'Banking', 'online-banking.png'),
(5, 'Credit Cards', 'payment.png'),
(6, 'Digital Money', 'wallet.png'),
(7, 'E - Commerce', 'store.png'),
(8, 'Education', 'book.png'),
(9, 'Electronics', 'database.png'),
(10, 'Entertainment', 'grocery.png'),
(11, 'Gaming', 'vr-gaming.png'),
(12, 'GYM &amp; Wellness', 'gym.png'),
(13, 'Healthcare', 'nurse.png'),
(14, 'Hospitality', 'hotel.png'),
(15, 'Hostels &amp; Rentals', 'hotel23.png'),
(16, 'Insurance', 'insurance.png'),
(17, 'Logistics', 'logistics.png'),
(18, 'Machinery', 'automation.png'),
(19, 'Miscellaneous', 'app.png'),
(20, 'Mobile &amp; Internet', 'earth-grid.png'),
(21, 'PC &amp; Hardware', 'desktop.png'),
(22, 'Pet Products', 'pet.png'),
(23, 'Shares &amp; Brokerage', 'share.png'),
(24, 'Sports &amp; Recreation', 'soccer.png'),
(25, 'Travel &amp; Ride', 'taxi.png'),
(26, 'Wedding Services', 'catering.png'),
(27, 'Others', 'minus.png');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_details`
--

CREATE TABLE `complaint_details` (
  `id` int(11) NOT NULL,
  `Select_Company` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `Aadhaar_number` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Postal_Pincode` varchar(10) NOT NULL,
  `IN_ON_TN_number` varchar(50) NOT NULL,
  `Purchase_Value` varchar(20) NOT NULL,
  `Registered_Email_Address` varchar(25) NOT NULL,
  `Registered_Mobile_Number` varchar(20) NOT NULL,
  `When_happen` varchar(200) NOT NULL,
  `Complaint_Details` varchar(20) NOT NULL,
  `Loss_value` varchar(30) NOT NULL,
  `expect_from_COMPANY` varchar(50) NOT NULL,
  `Company_response` varchar(100) NOT NULL,
  `Earlier_communication_with_company` varchar(100) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Register_Address` varchar(50) NOT NULL,
  `Interested_Parties` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advcate_images`
--
ALTER TABLE `advcate_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advocate_details`
--
ALTER TABLE `advocate_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_details`
--
ALTER TABLE `complaint_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advcate_images`
--
ALTER TABLE `advcate_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advocate_details`
--
ALTER TABLE `advocate_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `complaint_details`
--
ALTER TABLE `complaint_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
