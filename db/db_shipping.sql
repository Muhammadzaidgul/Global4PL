-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 07:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_address`
--

CREATE TABLE `tb_address` (
  `id` bigint(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal_zip_code` varchar(50) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_address`
--

INSERT INTO `tb_address` (`id`, `company_name`, `address`, `country`, `postal_zip_code`, `city`, `state`, `phone`) VALUES
(1, 'rest', 't', 't', 't', 't', 't', 't'),
(2, 'rest', 't', 't', 't', 't', 't', 't'),
(3, 'Test Company', 'Villa Park IL', 'US', '60181', 'IL', 'Chicago', '(630)540-8177');

-- --------------------------------------------------------

--
-- Table structure for table `tb_clients`
--

CREATE TABLE `tb_clients` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_clients`
--

INSERT INTO `tb_clients` (`id`, `name`, `logo`, `created_at`) VALUES
(2, 'Client 1', 'huawei-logo.png', '2021-10-29 11:18:19'),
(3, 'Client 2', '5f6cbe529e784.jpg', '2021-10-29 20:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_shipping_form_detail`
--

CREATE TABLE `tb_shipping_form_detail` (
  `id` bigint(11) NOT NULL,
  `master_id` bigint(11) DEFAULT NULL,
  `hs_code` varchar(100) DEFAULT NULL,
  `unit_detail` varchar(255) DEFAULT NULL,
  `unit_qty` varchar(255) DEFAULT NULL,
  `unit_value` varchar(255) DEFAULT NULL,
  `unit_total` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_shipping_form_detail`
--

INSERT INTO `tb_shipping_form_detail` (`id`, `master_id`, `hs_code`, `unit_detail`, `unit_qty`, `unit_value`, `unit_total`) VALUES
(1, 10, '3321', 'Removable HDD', '10', '450', '4500'),
(2, 10, '88990', 'Flower Vase', '20', '12', '240'),
(3, 1, '', '', '0', '0', '0'),
(4, 1, '', '', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_shipping_form_master`
--

CREATE TABLE `tb_shipping_form_master` (
  `id` bigint(11) NOT NULL,
  `client_id` bigint(11) DEFAULT NULL,
  `from_address` varchar(255) DEFAULT NULL,
  `to_address` varchar(255) DEFAULT NULL,
  `from_address_id` bigint(11) UNSIGNED DEFAULT NULL,
  `to_address_id` bigint(11) UNSIGNED DEFAULT NULL,
  `domestic` varchar(255) DEFAULT NULL,
  `international` varchar(255) DEFAULT NULL,
  `extra_service` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `desc_type` varchar(255) DEFAULT NULL,
  `requester_name` varchar(255) DEFAULT NULL,
  `requester_email` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `requester_dept_name` varchar(255) DEFAULT NULL,
  `requester_dept_no` varchar(255) DEFAULT NULL,
  `requester_signature` varchar(255) DEFAULT NULL,
  `tracking_no` varchar(100) DEFAULT NULL,
  `no_of_pc` int(10) DEFAULT NULL,
  `shipping_form_date` date DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `init` varchar(255) DEFAULT NULL,
  `gl_account_number` varchar(255) DEFAULT NULL,
  `created_by` bigint(11) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_shipping_form_master`
--

INSERT INTO `tb_shipping_form_master` (`id`, `client_id`, `from_address`, `to_address`, `from_address_id`, `to_address_id`, `domestic`, `international`, `extra_service`, `description`, `desc_type`, `requester_name`, `requester_email`, `date`, `requester_dept_name`, `requester_dept_no`, `requester_signature`, `tracking_no`, `no_of_pc`, `shipping_form_date`, `total`, `weight`, `init`, `gl_account_number`, `created_by`, `created_at`) VALUES
(10, 2, '1322 Bordeaux Drive Sunnyvale, CA 94089 Phone: 408-572-5200', 'Dr.Annapolis Junction MD 20701 USA 240.264.5500, 240.264.5501', NULL, NULL, 'Next Day Air Early AM, Next Day Air', '2 Day Freight', 'Post Office Box Delivery (USPS Only)', 'test', '00-00-8100-66305', 'Jacob', 'joacob@gmail.com', '2021-10-29', 'rest', 'dest', 'Jac', '206881895', 3, '2021-10-29', '500', '2', '12', '00-00-8100-66305', NULL, '2021-10-29 12:22:37'),
(12, 2, '1322 Bordeaux Drive Sunnyvale, CA 94089 Phone: 408-572-5200', 'London, EC2Y 9HT 94089 United Kingdom +44 (0)1162 793941 Colin Rhodes', NULL, NULL, 'Next Day Air Early AM, Next Day Air', '2 Day Freight', 'Post Office Box Delivery (USPS Only)', 'test', '00-00-8100-66305', 'Jacob', 'joacob@gmail.com', '2021-10-29', 'rest', 'dest', 'Jac', '206781895', 3, '2021-10-29', '500', '2', '12', '00-00-8100-66305', NULL, '2021-10-29 12:22:37'),
(13, 2, 'Office Tower W1 Oriental Plaza No.1 East Chang An Avenue Dong Cheng District Beijing, 100738, China', '169 Java Drive Sunnyvale CA', NULL, NULL, 'Next Day Air Early AM, Next Day Air', '2 Day Freight', 'Post Office Box Delivery (USPS Only)', 'test', '00-00-8100-66305', 'Jacob', 'joacob@gmail.com', '2021-10-29', 'rest', 'dest', 'Jac', '216781895', 3, '2021-10-29', '500', '2', '12', '00-00-8100-66305', NULL, '2021-10-29 12:22:37'),
(14, 2, '391B Orchard Road, #23-01 Ngee Ann City Tower B Singapore 238874 +65 6832 8099, +65 6244 9604', 'OYA Bldg 3rd Floor 3-9-6, Nishi-Shinjuku Sinjuku-ku, Tokyo 160-0023, Japan', NULL, NULL, 'Next Day Air Early AM, Next Day Air', '2 Day Freight', 'Post Office Box Delivery (USPS Only)', 'test', '00-00-8100-66305', 'Jacob', 'joacob@gmail.com', '2021-10-29', 'rest', 'dest', 'Jac', '216751895', 3, '2021-10-29', '500', '2', '12', '00-00-8100-66305', NULL, '2021-10-29 12:22:37'),
(15, NULL, '401 Level 4, 6, Brunton Road Bangalore 560001 India +91-80-25321402/3/4/5 +91-80-25321401', 'Andy Liu Suite 234 Woodland Hills CA 91364 USA 818-226-6060, 818-226-6062', NULL, NULL, '2nd Day Air AM, 2nd Day Air', 'International Priority', 'Saturday Delivery', 'test', 'Need G/L', 'Cristopher Green', 'green@gmail.com', '2021-10-30', 'test', '12', 'test', '725578631', 40, '2021-10-30', '400', '20', '10', 'Need G/L', NULL, '2021-10-29 12:28:13'),
(16, NULL, 'Building 100 Suite 100 Allentown PA 18106 USA\r\n                                                          610-366-9004, 610.366.5049', 'Andy Liu Suite 234 Woodland Hills CA 91364 USA 818-226-6060, 818-226-6062', NULL, NULL, 'Next Day Air Early AM', '2 Day Freight', 'No Signature Required, Residential Delivery', 'rest', '00-00-8100-66305', 'had', 'h@gmail.com', '2021-11-06', 'king', '2123', 'had', '994120409', 20, '2021-11-06', '112', '70', '2', '00-00-8100-66305', NULL, '2021-11-06 19:48:16'),
(17, NULL, 'Dr.Annapolis Junction MD 20701 USA 240.264.5500, 240.264.5501', 'Andy Liu Suite 234 Woodland Hills CA 91364 USA 818-226-6060, 818-226-6062', NULL, NULL, 'Next Day Air', '3 Day Freight', 'Residential Delivery', 'asdasd', 'Need G/L', 'aasdj', 'df@gmail.com', '2021-11-13', 'rest', '123', 'asd', '1853624250', 90, '2021-11-13', '350', '200', '10', 'Need G/L', 0, '2021-11-13 20:03:23'),
(18, NULL, 'Building 100 Suite 100 Allentown PA 18106 USA\r\n                                                          610-366-9004, 610.366.5049', 'London, EC2Y 9HT 94089 United Kingdom +44 (0)1162 793941 Colin Rhodes', NULL, NULL, '2nd Day Air AM', '2 Day Freight', 'Residential Delivery', 'skjhdbfaks', '00-00-0000-51805', 'hest', 'h@gmail.com', '2021-11-13', 'tesr', 'y', 'y', '1094372996', 120, '2021-11-13', '440', '20', '1', '00-00-0000-51805', 0, '2021-11-13 20:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` int(10) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `user_type`, `company`, `logo`, `phone_no`, `active`, `created_at`, `created_by`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 1, 'Global4PL', 'G4PL-newlogo01.png', NULL, 1, '2021-11-13 11:42:32', NULL),
(2, 'client1', '3677b23baa08f74c28aba07f0cb6554e', 2, 'Test Client', '9.jpg', '', 1, '2021-11-13 18:13:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_type`
--

CREATE TABLE `tb_user_type` (
  `id` bigint(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user_type`
--

INSERT INTO `tb_user_type` (`id`, `type`) VALUES
(1, 'Admin'),
(2, 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_address`
--
ALTER TABLE `tb_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_clients`
--
ALTER TABLE `tb_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_shipping_form_detail`
--
ALTER TABLE `tb_shipping_form_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_id` (`master_id`);

--
-- Indexes for table `tb_shipping_form_master`
--
ALTER TABLE `tb_shipping_form_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tracking_no` (`tracking_no`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_address`
--
ALTER TABLE `tb_address`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_clients`
--
ALTER TABLE `tb_clients`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_shipping_form_detail`
--
ALTER TABLE `tb_shipping_form_detail`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_shipping_form_master`
--
ALTER TABLE `tb_shipping_form_master`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
