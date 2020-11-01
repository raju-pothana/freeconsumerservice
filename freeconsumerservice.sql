-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 10:32 AM
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
  `eqcertificate2` varchar(50) NOT NULL,
  `eqcertificate3` varchar(50) NOT NULL,
  `encertificate` varchar(100) NOT NULL,
  `identitycard` varchar(100) DEFAULT NULL,
  `practcertificateissued` varchar(100) DEFAULT NULL,
  `practconcern` varchar(100) DEFAULT NULL,
  `practcertificateissuedwhere` varchar(100) DEFAULT NULL,
  `passportphoto` varchar(100) DEFAULT NULL,
  `affidavit` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advcate_images`
--

INSERT INTO `advcate_images` (`id`, `advacate_id`, `resumefiles`, `eqcertificate`, `eqcertificate2`, `eqcertificate3`, `encertificate`, `identitycard`, `practcertificateissued`, `practconcern`, `practcertificateissuedwhere`, `passportphoto`, `affidavit`, `created_date`, `updated_date`) VALUES
(1, 1, './uploads/advacate/1/771603361863.jpeg', './uploads/advacate/1/761603361863.jpeg', '', '', '', NULL, './uploads/advacate/1/521603361863.jpeg', NULL, './uploads/advacate/1/911603361863.jpeg', NULL, './uploads/advacate/1/971603361863.jpeg', '2020-10-22 12:17:43', NULL),
(2, 2, 'uploads/advacate/2811603707689.jpeg', '', '', '', 'uploads/advacate/2151603707689.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-26 11:21:29', NULL),
(3, 3, 'uploads/advacate/3801603776594.jpeg', '', '', '', '', NULL, NULL, NULL, NULL, 'uploads/advacate/3821603776595.jpeg', 'uploads/advacate/3331603776595.jpeg', '2020-10-27 06:29:54', NULL),
(4, 4, 'uploads/advacate/4871603777346.jpeg', '', '', '', '', NULL, NULL, NULL, 'uploads/advacate/4591603777346.jpeg', NULL, NULL, '2020-10-27 06:42:26', NULL),
(5, 5, 'uploads/advacate/5581603777567.jpeg', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-27 06:46:07', NULL),
(6, 6, 'uploads/advacate/6851603777774.jpeg', '', '', '', '', NULL, 'uploads/advacate/6601603777774.jpeg', NULL, NULL, NULL, NULL, '2020-10-27 06:49:34', NULL),
(7, 7, 'uploads/advacate/7891603778087.jpeg', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-27 06:54:47', NULL),
(8, 8, 'uploads/advacate/8671603778305.jpeg', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-27 06:58:25', NULL),
(9, 9, 'uploads/advacate/9461603778663.jpeg', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-27 07:04:23', NULL),
(10, 10, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-27 07:07:48', NULL),
(11, 11, 'uploads/advacate/11/491603780660.jpeg', '', '', '', 'uploads/advacate/11/201603780660.jpeg', NULL, NULL, 'uploads/advacate/11/211603782888.jpeg', NULL, 'uploads/advacate/11/391603782948.jpeg', NULL, '2020-10-27 07:37:40', '2020-10-27 08:16:37'),
(12, 12, 'uploads/advacate/12/401604221895.jpeg', 'uploads/advacate/12/71604221896.jpeg', 'uploads/advacate/12/641604221896.jpeg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-01 10:11:35', '2020-11-01 10:26:09');

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
  `nearestcity` varchar(50) NOT NULL,
  `about_u` varchar(200) NOT NULL,
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
  `created_date` datetime DEFAULT NULL,
  `deleted` enum('0','1') NOT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocate_details`
--

INSERT INTO `advocate_details` (`id`, `name_advocate`, `email`, `mobile_number`, `address`, `district`, `state`, `pin_code`, `nearestcity`, `about_u`, `practicing_place`, `specialized_practice_areas`, `known_languages`, `experience`, `enrolment_no`, `number_of_legal_cases`, `education`, `experience_if_any`, `consultation_Fee`, `cost_per_hour`, `created_date`, `deleted`, `updated_date`) VALUES
(1, 'yedukondalu', 'yedu@gmail.com', '2312312312', 'hyderabad', 'hyderabad', 'telangana', '500076', '', '', 'hyderabad', 'hyderabad', 'english,telugu', '10', 'sda', '19', 'mallb', '3', '1000', '100', '2020-10-22 12:17:42', '0', NULL),
(2, 'sad', 'asd@gmail.com', '2132131231', 'ash', 'krishna', 'ap', '500062', '', '', 'hyd', 'hyderabad', 'english', '10', '100', '100', 'mallb', '5', '1000', '100', '2020-10-26 11:21:29', '0', NULL),
(3, 'sadsd', 'sda@ghgag.com', '1231213131', 'sdas', 'asd', 'asd', '213213', '', '', 'hyderabad', 'sda', 'en', '01', '213', '12', '1', '21', '23121', '11', '2020-10-27 06:29:54', '0', NULL),
(4, 'sdad', 'asa@gmail.com', '2132131233', '123123', 'dasd', 'sda', '2313', '', '', 'eqwe', 'ad', 'asd', 'asd', 'asd', '123', 'aas', 'asd', '1000', '100', '2020-10-27 06:42:26', '0', NULL),
(5, 'aada', 'asd@asda.com', '2131231231', 'qweqew', 'we', 'qwe', '213311', '', '', 'qweqe', 'qwe', 'qwe', 'qe', 'qwe', 'qwe', 'qwe', 'qe', '23', '12', '2020-10-27 06:46:07', '0', NULL),
(6, 'asdads', 'asd@asd.dsd', '1231233333', '12312122', 'sadas', 'asd', '123123', '', '', 'hyde', 'sad', 'as', 'asd', 'as', 'as', 'asd', 'asd', 'asd', 'ad', '2020-10-27 06:49:34', '0', NULL),
(7, 'adas', 'ad@ddd.com', '2132131312', 'asdd', 'asd', 'asd', '213123', '', '', 'hyde', 'dee', 'eee', '11', 'sad', '21', 'sa', '1', '12', '12', '2020-10-27 06:54:47', '0', NULL),
(8, 'sada', 'qe@adad.com', '1231231313', 'sadad', 'asda', 'asd', '123133', '', '', 'hyde', 'asdsaasd', 'aaa', '13213', '12', '12', '1sda', '2', '123', '111', '2020-10-27 06:58:25', '0', NULL),
(9, 'gsgf', 'sad@hbahd.com', '3213131231', 'sdsa', 'asd', 'asd', '123123', '', '', 'weqw', 'qw', 'wqe', 'wqe', 'wqe', 'wqe', 'wqe', 'qwe', 'wqe', 'qwe', '2020-10-27 07:04:23', '0', NULL),
(10, 'adsdas', 'as@hdk.com', '3123123131', 'sdad', 'asd', 'as', '213123', '', '', 'asdad', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2020-10-27 07:07:48', '0', NULL),
(11, 'naidu', 'naidu@gmail.com', '2313131313', 'dasdadad', 'sda', 'asd', '123213', '', '', 'hyderabad', 'hyd', 'engli', '10', '10', '10', 'kks', '10', '1000', '10', '2020-10-27 07:37:39', '0', '2020-10-27 08:16:36'),
(12, 'JASDAS 1', 'asd@gmail.com', '2123213123', 'hyddddd', 'ffff', 'app', '231313', 'hyd', ';lmsm;af naksf', 'hhusdfh jbf', '.sdnkfknsf', 'lknsdfl', 'ml;sdf', 'sdf', 'sdfdsffd', 'sdff', 'sdffd', '2000', '300', '2020-11-01 10:11:35', '0', '2020-11-01 10:26:09');

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
  `district` varchar(120) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Postal_Pincode` varchar(10) NOT NULL,
  `complain_types` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `cash_receipt_no` varchar(50) NOT NULL,
  `IN_ON_TN_number` varchar(50) NOT NULL,
  `Purchase_Value` varchar(20) NOT NULL,
  `Registered_Email_Address` varchar(25) NOT NULL,
  `Registered_Mobile_Number` varchar(20) NOT NULL,
  `When_happen` varchar(200) NOT NULL,
  `Complaint_Details` varchar(20) NOT NULL,
  `Loss_value` varchar(30) NOT NULL,
  `expect_from_COMPANY` varchar(50) NOT NULL,
  `warr_type` varchar(20) NOT NULL,
  `when_date` date DEFAULT NULL,
  `Company_response` varchar(100) NOT NULL,
  `upload_comm_proof` varchar(120) DEFAULT NULL,
  `Earlier_communication_with_company` varchar(100) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Register_Address` varchar(50) NOT NULL,
  `c_state` varchar(20) NOT NULL,
  `c_pincode` varchar(20) NOT NULL,
  `Interested_Parties` varchar(50) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `delaeted` enum('0','1') NOT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_details`
--

INSERT INTO `complaint_details` (`id`, `Select_Company`, `name`, `email`, `mobile_number`, `Aadhaar_number`, `Address`, `district`, `State`, `Postal_Pincode`, `complain_types`, `type`, `product_name`, `cash_receipt_no`, `IN_ON_TN_number`, `Purchase_Value`, `Registered_Email_Address`, `Registered_Mobile_Number`, `When_happen`, `Complaint_Details`, `Loss_value`, `expect_from_COMPANY`, `warr_type`, `when_date`, `Company_response`, `upload_comm_proof`, `Earlier_communication_with_company`, `Email_id`, `Phone_Number`, `Register_Address`, `c_state`, `c_pincode`, `Interested_Parties`, `created_date`, `delaeted`, `updated_date`) VALUES
(1, 'asssss1', 'as;lsad', 'ash@gmaill.com', '212313', '21312', '12sadsad', 'zd', 'asd', '12312', 1, 1, 'asd', '213', '123', '12', '123@gmail.com', '2123123123', '2020-10-25', 'das', 'as', 'asd', 'Yes', '2020-10-25', 'asd', NULL, 'asd', 'sadd', '12313123', 'sadasd', '21', '23123', 'asd', '2020-10-25 10:34:29', '0', '2020-10-30 07:08:05'),
(2, 'abc', 'sd', 'sda@gmail.com', '2131231231', '1232', 'asdasd', 'sdas', 'as', '213213', 1, 1, 'sda', '221', 'asd222', '22', 'ssa@gmail.com', '2132132131', '2020-10-26', 'dd', '12001', 'dad', 'Yes', '2020-10-26', 'adsd', NULL, 'ass', 'ssw@fas.com', '12312', 'eqweq', 'asas', '121121', 'asd', '2020-10-26 11:34:11', '0', '2020-10-30 07:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `complent_images`
--

CREATE TABLE `complent_images` (
  `id` int(11) NOT NULL,
  `upload_comm_proof` varchar(50) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `invoice_order_file` varchar(100) NOT NULL,
  `aadhar_no_vote` varchar(100) NOT NULL,
  `transaction_receipt` varchar(100) NOT NULL,
  `foulty_wrong1` varchar(100) DEFAULT NULL,
  `foulty_wrong2` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complent_images`
--

INSERT INTO `complent_images` (`id`, `upload_comm_proof`, `complaint_id`, `invoice_order_file`, `aadhar_no_vote`, `transaction_receipt`, `foulty_wrong1`, `foulty_wrong2`, `created_date`, `updated_date`) VALUES
(1, './uploads/complaint/1/101603618469.jpeg', 1, './uploads/complaint/1/571603618469.jpeg', './uploads/complaint/1/591603618469.jpeg', '', NULL, NULL, '2020-10-30 07:08:05', '2020-10-30 07:08:05'),
(2, 'uploads/complaint/2281603708451.jpeg', 2, 'uploads/complaint/251603708451.jpeg', 'uploads/complaint/2/651604038237.jpeg', '', NULL, NULL, '2020-10-30 07:11:48', '2020-10-30 07:11:48');

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
-- Indexes for table `complent_images`
--
ALTER TABLE `complent_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advcate_images`
--
ALTER TABLE `advcate_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `advocate_details`
--
ALTER TABLE `advocate_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `complaint_details`
--
ALTER TABLE `complaint_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complent_images`
--
ALTER TABLE `complent_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
