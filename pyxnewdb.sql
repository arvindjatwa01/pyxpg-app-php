-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 12:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pyxnewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `accessory_id` bigint(20) NOT NULL,
  `accessory` mediumtext NOT NULL,
  `is_desc` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `suitability` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`accessory_id`, `accessory`, `is_desc`, `description`, `suitability`) VALUES
(3, 'Gimbal stabilizer', 'No', '', ''),
(4, 'Small Product Photography Kit', 'Yes', 'Lightbox (smaller than 40 cm wide), 2x lights (strobe or continuous), 2x light stands, 2x light diffusers', ''),
(5, 'On camera microphone', 'No', '', ''),
(6, 'Clip-on microphone', 'No', '', ''),
(7, 'Large product photography kit', 'Yes', 'Lightbox (greater than 40cm wide), 2x lights (strobe or continuous), 2x light stands, 2x light diffusers', ''),
(8, 'Portable off-camera lighting kit', 'Yes', 'Battery powered flash unit, light stand, remote flash trigger and light diffuser', ''),
(9, 'Dual light studio kit', 'Yes', '2x Monolight flash, 2x light stands, 2x diffusers', ''),
(10, 'Portable studio kit', 'Yes', 'Portable backdrop, 2x monolight flash, 2x light stands, 2x diffusers', ''),
(11, 'Tripod', 'No', '', ''),
(12, 'White backdrop', 'No', '', ''),
(13, 'Black or dark backdrop', 'No', '', ''),
(14, 'Coloured backdrop', 'No', '', ''),
(15, 'Props/ toys for newborn shoots', 'No', '', ''),
(18, 'Other', 'No', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@pyx.co.in', 'pyxpassword');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` bigint(20) NOT NULL,
  `blog_title` text NOT NULL,
  `description` longtext NOT NULL,
  `publish` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `bannerimg` varchar(255) NOT NULL,
  `blogname` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `description`, `publish`, `tag`, `category_id`, `bannerimg`, `blogname`, `created_date`) VALUES
(411, 'test - banner image', '', 'Anuj Nigam', '11', 3, 'blog-thumb.png', 'bloges/7331287946225e274abfba9.54476410.html', '2022-03-07 10:46:12'),
(412, 'test 4', '', 'Anuj Nigam', '11', 3, 'blog-thumb.png', 'bloges/8038686926225e36d85c874.83341167.html', '2022-03-07 10:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `cat_id` bigint(20) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`cat_id`, `cat_name`) VALUES
(3, 'Business'),
(4, 'Photography'),
(6, 'Technology'),
(13, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `blog_login`
--

CREATE TABLE `blog_login` (
  `blog_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_login`
--

INSERT INTO `blog_login` (`blog_id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'blogs@pyx.co.in', 'blogs@pyx');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `shoot_id` int(255) NOT NULL,
  `shoot_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shoot_need` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shoot_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shoot_City` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shoot_Pincode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shootat_studio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shoot_package` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shoot_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shoot_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assigned_photographer` bigint(20) NOT NULL,
  `booking_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `partner_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shoot_note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `no_ofphotos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `booking_date` date NOT NULL,
  `tracking_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank_ref_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `failure_message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `payment_mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`shoot_id`, `shoot_type`, `shoot_need`, `shoot_address`, `shoot_City`, `shoot_Pincode`, `shootat_studio`, `shoot_package`, `shoot_date`, `shoot_time`, `name`, `email`, `phone`, `address`, `assigned_photographer`, `booking_status`, `partner_name`, `shoot_note`, `no_ofphotos`, `booking_date`, `tracking_id`, `bank_ref_no`, `order_status`, `failure_message`, `payment_mode`, `card_name`, `status_code`, `status_message`, `currency`, `amount`) VALUES
(1006, 'Personal', '62', 'Mulund West, Mumbai, Maharashtra, India', 'Mumbai', '', 'No', '31', '17 September 2021', '9:30 AM, 1:30 PM, 2:00 PM', 'Anuj Nigam', 'ANUJ_NIGAM@HOTMAIL.COM', '9986501995', 'Ghodbunder Road, Bhayanderpada', 0, 'Cancelled', '', '', '', '2021-09-14', '', '', '', '', '', '', '', '', '', ''),
(1061, 'Business', '50', 'Transitional Health and Fitness, Pacific Highway, Lisarow NSW, Australia', 'Lisarow', '2250', 'No', '59', '23 October 2021', '5:30 PM, 7:00 PM, 8:30 PM', 'Rohit', 'eg@gm.c', '9969669636', 'Transitional Health and Fitness, Pacific Highway, Lisarow NSW, Australia', 0, 'Cancelled', '', '', '', '2021-10-14', '110307550511', 'null', 'Aborted', '', 'null', 'null', '', 'Cancel reason is not specified by the customer.', 'INR', '5000.00'),
(1093, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1094, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1095, 'Business', '50', 'India', '', '', 'No', '75', '30 November 2021', '9:30 AM, 1:30 PM, 2:00 PM,9:30 AM, 1:30 PM, 2:00 PM,9:30 AM, 1:30 PM, 2:00 PM', NULL, NULL, NULL, 'India', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1096, 'Personal', '61', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1097, 'Personal', '61', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1098, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1099, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1100, 'Personal', '83', 'Lodha Splendora Platino - A, Bhayandarpada, Thane West, Thane, Maharashtra, India', 'Thane', '400615', 'No', '53', '20 December 2021', '9:00 AM, 9:30 AM, 10:00 AM', 'Anuj Nigam', 'ANUJ_NIGAM@HOTMAIL.COM', '9986501995', 'Ghodbunder Road, Bhayanderpada', 0, 'New', '', '', '', '2021-11-29', '110345687859', '133363832525', 'Success', '', 'Unified Payments', 'UPI', '', 'Success', 'INR', '1.00'),
(1101, 'Business', '55', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1102, 'Business', '55', 'Lodha Splendora, Ghodbunder Road, Bhayandarpada, Thane West, Thane, Maharashtra, India', 'Thane', '400615', 'No', '65', '21 December 2021', NULL, NULL, NULL, NULL, 'Lodha Splendora, Ghodbunder Road, Bhayandarpada, Thane West, Thane, Maharashtra, India', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1103, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1104, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1105, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1106, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1107, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1108, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1109, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1110, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1111, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1112, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1113, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1114, 'Business', '50', 'ghj', '', '', 'No', NULL, NULL, NULL, NULL, NULL, NULL, 'ghj', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1115, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1116, 'Business', '82', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1117, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1118, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1119, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1120, 'Business', '55', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1121, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1122, 'Personal', '61', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1123, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1124, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1125, 'Personal', '62', 'Jaipur, Rajasthan, India', 'Jaipur', '', 'No', '62', '20 January 2022', '9:00 AM, 10:00 AM, 11:30 AM', NULL, NULL, NULL, 'Jaipur, Rajasthan, India', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1126, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1127, 'Personal', '61', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1128, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1129, 'Business', '56', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1130, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1131, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1132, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1133, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1134, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1135, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1136, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1137, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1138, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1139, 'Personal', '83', 'Lodha Splendora, Ghodbunder Road, Bhayandarpada, Thane West, Thane, Maharashtra, India', 'Thane', '400615', 'No', '53', '14 January 2022', '9:30 AM, 5:30 PM, 10:00 AM', 'Anuj Nigam', 'anuj_nigam@hotmail.com', '9986501995', 'A-303, Tierra, Lodha Splendora, Ghodbunder Road, Bhayandarpada, Thane West, Thane, Maharashtra, India', 0, 'New', '', '', '', '2022-01-11', '111384465716', '201124197525', 'Success', '', 'Unified Payments', 'UPI', '', 'Success-NA-0', 'INR', '1.00'),
(1140, 'Business', '50', 'Jaipur, Rajasthan, India', 'Jaipur', '', 'No', '60', '15 January 2022', '9:30 AM, 10:30 AM, 11:00 AM', 'test', 'test@gmail.com', '8765438922', 'Jaipur, Rajasthan, India', 0, 'New', '', '', '', '2022-01-11', '111384959037', 'null', 'Aborted', '', 'null', 'null', '', 'Cancel reason is not specified by the customer.', 'INR', '8000.00'),
(1141, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1142, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1143, 'Business', '56', 'Lodha Splendora, Ghodbunder Road, Bhayandarpada, Thane West, Thane, Maharashtra, India', 'Thane', '400615', 'No', NULL, NULL, NULL, NULL, NULL, NULL, 'Lodha Splendora, Ghodbunder Road, Bhayandarpada, Thane West, Thane, Maharashtra, India', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1144, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1145, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1146, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1147, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1148, 'Business', '56', 'Lodha Splendora, Ghodbunder Road, Bhayandarpada, Thane West, Thane, Maharashtra, India', 'Thane', '400615', 'No', NULL, NULL, NULL, NULL, NULL, NULL, 'Lodha Splendora, Ghodbunder Road, Bhayandarpada, Thane West, Thane, Maharashtra, India', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1149, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1150, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1151, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1152, 'Personal', '61', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1153, 'Personal', '61', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1154, 'Personal', '61', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1155, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1156, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1157, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1158, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1159, 'Business', '56', 'Lodha Splendora Platino - A, Bhayandarpada, Thane West, Thane, Maharashtra, India', 'Thane', '400615', 'No', NULL, NULL, NULL, NULL, NULL, NULL, 'Lodha Splendora Platino - A, Bhayandarpada, Thane West, Thane, Maharashtra, India', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1160, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1161, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1162, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1163, 'Personal', '61', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1164, 'Business', '56', 'Lodha Splendora, Ghodbunder Road, Bhayandarpada, Thane West, Thane, Maharashtra, India', 'Thane', '400615', 'No', NULL, NULL, NULL, NULL, NULL, NULL, 'Lodha Splendora, Ghodbunder Road, Bhayandarpada, Thane West, Thane, Maharashtra, India', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1165, 'Business', '82', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1166, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1167, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1168, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1169, 'Personal', '62', 'Jaipur', '', '', 'No', '63', '3 March 2022', '12:00 PM, 1:30 PM, 2:30 PM', NULL, NULL, NULL, 'Jaipur', 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1170, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1171, 'Business', '50', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1172, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1173, 'Personal', '61', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1174, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1175, 'Personal', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(1176, 'Business', NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `camera_bodies`
--

CREATE TABLE `camera_bodies` (
  `cbody_id` bigint(20) NOT NULL,
  `camera_body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camera_bodies`
--

INSERT INTO `camera_bodies` (`cbody_id`, `camera_body`) VALUES
(2, 'Canon EOS 200D'),
(3, 'Canon EOS R'),
(4, 'Canon EOS 1DX'),
(5, 'Nikon D3500'),
(6, 'Canon EOS Rebel SL3/ EOS 250D'),
(7, 'Canon EOS Rebel T100/ EOS 4000D'),
(8, 'Canon EOS 90D'),
(9, 'Nikon D7500'),
(10, 'Nikon D780'),
(11, 'Canon EOS 6D Mark II'),
(12, 'Nikon D850'),
(13, 'Canon EOS 5D Mark IV'),
(14, 'Pentax K-1 Mark II'),
(15, 'Sony ILCE-9M2'),
(16, 'Olympus OM-D E-M1 Mark II'),
(17, 'Canon EOS R5'),
(18, 'Canon EOS R6'),
(19, 'Canon EOS R+'),
(20, 'Sony Alpha ILCE-7RM4'),
(21, 'Nikon Z7'),
(22, 'Sony A7R Mark III'),
(23, 'Sony A7 Mark III'),
(24, 'Nikon Z6'),
(25, 'Panasonic Lumix GH5'),
(26, 'Fujifilm X-T3'),
(27, 'Canon EOS 80D'),
(28, 'Nikon D5600'),
(29, 'Other'),
(33, 'Canon 750D'),
(34, 'Canon EOS 5DS R'),
(35, 'Canon EOS Rebel T7'),
(36, 'Nikon D500'),
(37, 'Nikon D750'),
(38, 'Nikon D610'),
(39, 'Canon EOS-1D Mark III'),
(40, 'Pentax K-70'),
(42, 'Pentax K-3 Mark III'),
(43, 'Canon EOS-1D X Mark II'),
(44, 'Canon EOS 7D'),
(45, 'Nikon D810'),
(46, 'Nikon D500'),
(47, 'Nikon D6'),
(48, 'Canon EOS Rebel T8i'),
(49, 'Canon EOS Rebel T8i'),
(50, 'Nikon Z9'),
(51, 'Canon EOS R5 C'),
(52, 'Sony A7 IV'),
(53, 'Sony A7S III'),
(54, 'Leica M11'),
(55, 'Sony A1'),
(56, 'Fujifilm X-T4'),
(57, 'Sony A7R IVA'),
(58, 'Canon EOS M50 Mark II'),
(59, 'Canon EOS R'),
(60, 'Nikon Z6 II'),
(61, 'Nikon Z7 II'),
(62, 'Sony A7C'),
(63, 'Canon EOS R3'),
(64, 'Nikon Z5'),
(65, 'Sony A6600'),
(66, 'Canon EOS RP'),
(67, 'Fujifilm X-S10'),
(68, 'Olympus OM-D E-M1 Mark III'),
(69, 'Nikon Zfc'),
(70, 'Olympus OM-D E-M10 Mark IV'),
(71, 'Canon EOS M200'),
(72, 'Fujifilm X-T30 II'),
(73, 'Panasonic Lumix S5'),
(74, 'Fujifilm X-E4');

-- --------------------------------------------------------

--
-- Table structure for table `camera_lense`
--

CREATE TABLE `camera_lense` (
  `lense_id` bigint(20) NOT NULL,
  `c_lense` longtext NOT NULL,
  `suitability` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camera_lense`
--

INSERT INTO `camera_lense` (`lense_id`, `c_lense`, `suitability`) VALUES
(2, 'Canon 10-22mm f/3.5-4.5', ''),
(3, 'Canon 100-400mm f/4.5-5.6', ''),
(4, 'Nikon 135mm f/2.8', ''),
(5, 'Nikon 14-24mm f/2.8', ''),
(6, 'Nikon 18mm f/2.8', ''),
(7, 'Nikon 24-50mm f/3.3-4.5', ''),
(8, 'Nikon 35mm f/1.4', ''),
(9, 'Nikon 50-300mm f/4.5', ''),
(10, 'Canon 10-22mm f/3.5-4.5', ''),
(11, 'Canon 100-200mm f/4.5', ''),
(12, 'Canon 100-400mm f/4.5-5.6', ''),
(13, 'Canon 100mm f/2', ''),
(14, 'Canon 100mm f/2.8', ''),
(15, 'Canon 135mm f/2.8', ''),
(16, 'Sigma 8-16mm f/4.5-5.6', ''),
(17, 'Sigma 8mm f/3.5', ''),
(18, 'Sigma 8mm f/4', ''),
(19, 'Sigma 10-20mm f/3.5', ''),
(20, 'Sigma 10-20mm f/4-5.6', ''),
(21, 'Sigma 10mm f/2.8', ''),
(22, 'Tamron 10-24mm f/3.5-4.5', ''),
(23, 'Tamron 11-18mm f/4.5-5.6', ''),
(24, 'Tamron 14-150mm f/3.5-5.8', ''),
(25, 'Tamron 14mm f/2.8', ''),
(26, 'Tamron 15-30mm f/2.8', ''),
(27, 'Tamron 16-300mm f/3.5-6/3', ''),
(28, 'Tokina 10-17mm f/3.5-4.5', ''),
(29, 'Tokina 11-16mm f/2.8', ''),
(30, 'Tokina 11-20mm f/2.8', ''),
(31, 'Tokina 12-24mm f/4', ''),
(32, 'Tokina 12-28mm f/4', ''),
(33, 'Tokina 16-28mm f/2.8', ''),
(34, 'Zeiss 12mm f/2.8', ''),
(35, 'Zeiss 15mm f/2.8', ''),
(36, 'Zeiss 16-35mm f/2.8', ''),
(37, 'Zeiss 16-35mm f/4', ''),
(38, 'Zeiss 16-70mm f/4', ''),
(39, 'Zeiss 16-80mm f/3.5-4.5', ''),
(40, 'Sony 10-18mm f/4', ''),
(41, 'Sony 11-18mm f/5.5-5.6', ''),
(42, 'Sony 16-105mm f/3.5-5.6', ''),
(43, 'Sony 16-35mm f/4', ''),
(44, 'Sony 16-50mm f/2.8', ''),
(45, 'Sony 16-50mm f/3.5-5.6', ''),
(46, 'Carl Zeiss Batis 85mm F1.8 Sony FE', ''),
(47, 'Carl Zeiss Batis 25mm F2 Sony FE', ''),
(48, 'Carl Zeiss Batis 85mm F1.8 Sony FE', ''),
(49, 'Pentax HD DA 35mm F2.8 Macro Limited', ''),
(50, 'Pentax smc D FA MACRO 100mm F2.8 WR', ''),
(51, 'Carl Zeiss Distagon T 35mm f/1.4 ZF2 Nikon', ''),
(52, 'Carl Zeiss Distagon T 25mm f/2 ZF2 Nikon', ''),
(53, 'Carl Zeiss Distagon T 35mm f/2 ZE Canon', ''),
(54, 'Fujifilm 14mm f/2.8', ''),
(55, 'Fujifilm 16-50mm f/3.5-5.6', ''),
(56, 'Fujifilm 10-24mm f/4', ''),
(57, 'Fujifilm 16-55mm f/2.8', ''),
(58, 'Fujifilm 18-135mm f/3.5-5.6', ''),
(59, 'Sigma 85mm F1.4 DG HSM A Nikon', ''),
(60, 'Sigma 85mm F1.4 DG HSM A Canon', ''),
(61, 'Sigma 50mm F1.4 DG HSM A Nikon', ''),
(62, 'Sigma 50mm F1.4 DG HSM A Canon', ''),
(63, 'Sigma 35mm F1.4 DG HSM A Nikon', ''),
(64, 'Sigma 85mm F1.4 EX DG HSM Canon', ''),
(65, 'Sigma 70-200mm F2.8 EX DG APO Macro HSM II Canon', ''),
(66, 'Sigma 12-24mm F4.5-5.6 EX DG HSM II Canon', ''),
(67, 'Nikon AF-S NIKKOR 300mm f/2.8G ED VR II', ''),
(68, 'Nikon AF-S NIKKOR 200mm f/2G ED VR II', ''),
(69, 'Nikon AF-S VR Micro-Nikkor 105mm f/2.8G IF-ED', ''),
(70, 'Leica 28mm f/2', ''),
(71, 'Leica 28mm f/2.8', ''),
(72, 'Leica 35mm f/1.4', ''),
(73, 'Leica 35mm f/2', ''),
(74, 'Leica 15mm f/1.7', ''),
(75, 'Leica 18mm f/3.8', ''),
(76, 'Olympus 11-22mm f/2.8-3.5', ''),
(77, 'Olympus 12-40mm f/2.8', ''),
(78, 'Olympus 12-50mm f/3.5-6.3', ''),
(79, 'Olympus 14-150mm f/4-5.6', ''),
(80, 'Olympus 14-42mm f/3.5-5.6', ''),
(81, 'Olympus 14-45mm f/3.5-5.6', ''),
(82, 'Panasonic 100-300mm f/4-5.6', ''),
(83, 'Panasonic 12-35mm f/2.8', ''),
(84, 'Panasonic 35-100mm f/4-5.6', ''),
(85, 'Panasonic 45-150mm f/4-5.6', ''),
(86, 'Panasonic Lumix G X Vario 35-100mm f/2.8 Power OIS', ''),
(87, 'Pentax 100mm f/4', ''),
(88, 'Carl Zeiss Distagon 35mm f/1.4', ''),
(89, 'Tokina 17-35mm f/4 Pro FX', ''),
(90, 'Sigma 12-24 f/4.5-5.6 MKII DG HSM Nikon', ''),
(91, 'Canon EF 70-200mm f/2.8 IS USM Telephoto', ''),
(92, 'Nikon 50mm f/1.8D AF Nikkor', ''),
(93, 'Canon EF 50mm f/1.8 II', ''),
(94, 'Canon EF 50mm f/1.4 USM', ''),
(95, 'Canon EF 24-70mm f/2.8L USM', ''),
(96, 'Canon EF 24-105mm f/4 L IS USM', ''),
(97, 'Canon EF 70-200mm f/4 L USM Telephoto', ''),
(98, 'Canon EF-S 17-55mm f/2.8 IS USM', ''),
(99, 'Canon EF 85mm f/1.8 USM', ''),
(100, 'Canon EF 17-40mm f/4 L USM', ''),
(101, 'Canon EF 100mm f/2.8 Macro USM', ''),
(102, 'Nikon 18-200mm f/3.5-5.6 G ED-IF AF-S VR DX', ''),
(103, 'Nikon 70-200mm f/2.8G ED-IF AF-S VR Zoom Nikkor', ''),
(104, 'Nikon 80-200mm f/2.8D ED AF Zoom Nikkor', ''),
(105, 'Nikon 105mm f/2.8G ED-IF AF-S VR Micro-Nikkor', ''),
(106, 'Nikon 17-55mm f/2.8G ED-IF AF-S DX Nikkor', ''),
(107, 'Nikon 24-70mm f/2.8G ED AF-S Nikkor Wide Angle', ''),
(113, 'Other', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `for_page` varchar(255) NOT NULL,
  `shoot_type` varchar(255) NOT NULL,
  `at_studio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`, `for_page`, `shoot_type`, `at_studio`) VALUES
(18, 'Event', 'event.png6136e23adcedc', 'joinus', '', 'Yes'),
(19, 'Family', 'family.png6136e2448f1f0', 'joinus', '', 'Yes'),
(22, 'Product', 'product.png6136e2565a671', 'joinus', '', 'Yes'),
(30, 'Fashion', 'fashion.png6136e25e2f282', 'joinus', '', 'Yes'),
(31, 'Industrial', 'industrial.png6136e26a261f0', 'joinus', '', 'Yes'),
(32, 'Kids', 'kids.png6136e278e94c2', 'joinus', '', 'Yes'),
(33, 'Landscape', 'landscape.png6136e28370962', 'joinus', '', 'Yes'),
(34, 'Media', 'media.png6136e28c60538', 'joinus', '', 'Yes'),
(35, 'Maternity', 'mother.png6136e29808a99', 'joinus', '', 'Yes'),
(36, 'Office', 'office.png6136e2a3c88f3', 'joinus', '', 'Yes'),
(50, 'Event', 'event.png60ff91078e260', 'wireframe', 'Business', ''),
(55, 'Office', 'office.png60ff917945606', 'wireframe', 'Business', ''),
(56, 'Product (eCommerce)', 'product.png6127cdaddf879', 'wireframe', 'Business', 'Yes'),
(61, 'Event', 'event.png60ffa2108c58f', 'wireframe', 'Personal', ''),
(62, 'Family', 'family.png60ffa2227647c', 'wireframe', 'Personal', ''),
(65, 'Maternity', 'mother.png60ffa25e02dce', 'wireframe', 'Personal', ''),
(75, 'Commercial', 'commercial.png6136e2af6d049', 'joinus', '', 'Yes'),
(76, 'Food', 'food.png6136e2b833267', 'joinus', '', 'Yes'),
(77, 'Real Estate', 'real-estate (1).png6136e2c45a520', 'joinus', '', 'Yes'),
(78, 'Sport', 'sport.png6136e2ce8b0ec', 'joinus', '', 'Yes'),
(79, 'Baby', 'baby.png6136e2d916259', 'joinus', '', 'Yes'),
(80, 'Portrait', 'portrait.png6136e2e3ca32a', 'joinus', '', 'Yes'),
(81, 'Wedding', 'wedding.png6136e2efcaf2d', 'joinus', '', 'Yes'),
(82, 'Portrait', 'portrait.png612e0288e25e0', 'wireframe', 'Business', 'Yes'),
(83, 'Portrait', 'portrait.png612e02a4c598f', 'wireframe', 'Personal', 'Yes'),
(84, 'Kids', 'kids.png6151ff93d29d9', 'wireframe', 'Personal', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `moreportfolioimg`
--

CREATE TABLE `moreportfolioimg` (
  `morepf_id` bigint(20) NOT NULL,
  `pgpublishdata_id` bigint(20) NOT NULL,
  `pgpublish_pgotographer_id` bigint(20) NOT NULL,
  `more_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `multiple_image`
--

CREATE TABLE `multiple_image` (
  `img_id` bigint(20) NOT NULL,
  `images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multiple_image`
--

INSERT INTO `multiple_image` (`img_id`, `images`, `name`) VALUES
(1, 'Redshift_For_Mac_bg (1).jpg,Redshift_For_Mac_bg.jpg,dffdsd.jpg,images.jpg,animals-0b6addc448f4ace0792ba4023cf06ede8efa67b15e748796ef7765ddeb45a6fb - Copy.jpg,backlit.jpg', 'Event'),
(2, 'eac4ffd9ab08d59414cde0f0d4422b2e,e97e05a698b578414558c8b2b73f37fc,200c367103e9516734671881385cdbed,1d50c2f57a5b9d9e7ab853776017c7c7,1bbbe5d767748533dd57e11267b34aeb', 'Event'),
(3, '200bf5c57a1a843a88957141a6a3f726.jpg,07c6bd785c9e51f5dc18cba3038edc4f.jpg,8461339193012e59ace06a90298a32f7.jpg,26d844a260e3315a370df7b18bb12b65.jpg', 'Event'),
(4, 'e6d9381f0dab9c31b7378a951038fbf7.jpg,f888832c07dcc333f84c4afbd8866313.jpg,d7f99e6530db3a578cc800063d41ba71.jpg,23659e06de6d863346ac5f67f65eeeec.jpg', 'Event'),
(5, '565c46418748b3f4fb3d34cedbcc3b48.jpg,e0d60831cd6e58c654682d2255896633.jpg,3182bda535672d205545ed91c6a2af4f.jpg,4e360c9f1bc7b642b7729ebfc7928b11.jpg', 'Event'),
(6, 'b8dfb0a58810efae91e3ec8a2c8f7d78.jpg,b8c15870debcf84dafeffbddacfb17ef.jpg,7bf320a3f8900c77a0232ac07e898385.jpg,6213475d2256d0a708a87cab2eb116e0.jpg', 'Event'),
(7, '01c1061e966a180455c8c6c02fad4181.jpg,aa9499107217464172bec853a666231d.jpg,b79621a958a7da3263875e49217ae622.jpg,fac6160cff90053fdf3d2d61844feaaa.jpg', 'Event'),
(8, 'a3bd566f65a5cfbbd61fcea77a68b29f.jpg,8287f3b727ea0bc3b20884e4bad9533e.jpg,b9e9ca912deb8c7fbcbd46fbaaf77260.jpg,32cad7c36fe58e5942d921f289eb3e9f.jpg', 'Event'),
(9, '6dc213addb6f39ed91651be165b6e882.jpg,7e41f6d1f0bf01f3b13588f6068a5df6.jpg,73306e5e05357272994599969f754a3e.jpg,3cf77f2fddf3a04e5afef3fcb804470a.jpg', ''),
(10, '9b7414801f97449b597f311e330393dc.jpg,9efc0dcfdf7e10691b3a189dae12b476.jpg,bf2b1476582f65aa6463730ca24865d4.jpg,0f92539c08b7682dde55854cfebeee7d.jpg', 'Event'),
(11, 'fd241298cf68f2ff656012c90a9e23bd.jpg,7c0e81b79e37f545af76518895d7d4ea.jpg,988bcc540daedca575e280d9e26b7121.jpg,66fcf20c8d1e868fcd8348e8d20980f3.jpg', 'Event'),
(12, 'a33d872f85ee3e7fcb26e2bf900252c6.jpg,c54c2d14d79ff4de2359e4fec774f172.jpg,7f3d9fad2508f3b78dbcae794dd6ffa0.jpg,ec9fe24bd2ecc9a7eee6bbfc819269a8.jpg,b9d5b5cf5169442450430a2345f1679c.jpg', 'Event'),
(13, '4d31c807fd6f9352b70a81d2f8685536.jpg,7241d9e48a2c921a608ae17b06a75da7.jpg,37d80df0a5e9cda2c178e5375d1f1c01.png,63d11a60c8bea70c473b86667112a89a.png,2121b7eb1613bf0c3d8539c9069bb7e2.png', 'Event'),
(14, 'fb27874d13a946705a82f01c2966d18e.jpg,745ded3d80afcacbb8d64a8978628757.png,bcaf7565acfdb193e0601e42d9bf3294.png,d0e61506657be0c6893047b1f52b1f1d.png', 'Family'),
(15, '7fc6c575763a6654001c60dec5d2fef9.jpg,f655b4dc2c7b8798d1dd1e8927a84287.png,3032d258fc90d9673f62ffd06791279f.png,fa6a8e22f862bf50b00a61d28adf7adc.png', 'Event'),
(16, '5dbe24ef07a62c3f1802d4884572c080.jpg,c4ec8a19692680a939cc7c7a26f087d5.png,61cf1d5b1359de32c4bb2e9a1eae60e9.png,47150c9e0d57ef16a55a8553bda07543.png', 'Family'),
(17, '22215b7a8f2f3a7514bffa325853686d.jpg,a65ddcd98339dd40706982e0ab9a5c8e.jpg,0c0336bf8d6dfeab864af17ba5e0b71a.png,cef36e7536d3da32482e02ffdfb815db.png', 'Event'),
(18, 'db4f5e265e1eec7f0f9b24ba41c71aad.jpg,15499dc7719ac105e21046d4117b3f69.jpg,93eab06b67db2ec6668459deda1b73af.png,a2db00c0dc917a731e7c113a2a6f11e3.png,fa868e697f0801653e46b3a42fe1a54d.png', ''),
(19, 'f7c908ca7c5f81d3c828d9e931ca6442.jpg,548cfe6eed9bd6ae991f18918dad9c0d.jpg,a1ecc103b967fa25232b08bf62b34421.jpg,ec841aa3e0764cf86e44d2eed88e24d5.jpg', 'Event'),
(20, '6a6267bb4fe45487c65f292c5af056e2.jpg,bb8e1a3f6949abbc9f8fe5765bff41c6.jpg,eff42047244cb9e846f31561d1614b81.jpg,d91125917da70317ea053c1e4b6932d1.jpg', 'Event'),
(21, 'bf2a1c0ab6b0a9906cb354b5d4581237.jpg,58ac6d3825f3ffcd112f9a738bc23766.jpg,702d206137a3791a16a9af15b2b7c6f0.jpg,9513a6a4040e0363f022d3d1d17eaeb0.jpg', 'Event'),
(22, 'c57a3ee46acc286d6f97c4c91079b461.jpg,e8355934376231aa93b43033c0c74bed.jpg,2679023b8bd4194cc4c7d6bcc434ff25.jpg,a8f6e4cd664b4dc562ab461c3545e646.jpg', 'Event'),
(23, '70664af5797e8596cb311b9058ef1471.jpg,3ecfb209e8c780303e7d4b2e83ff2743.jpg,a082816f0640c446b827f36476560d98.jpg,1c0f7d0d8afb78a8364dc1e341a38b76.jpg', 'Family'),
(24, 'd30942e7bc082b23c04afa3beedbde80.jpg,570cd62ec319ca7322a1f26af336b600.jpg,b9718611c1def9c0f751beba439fa172.jpg,5e1fcd65e9bc29bcd091861170976c2b.jpg', 'Event'),
(25, '746576f8b4328542584a724e626290ef.jpg,1217e2625c4f9efadb5ab2ac9e4d34c2.jpg,fc2bde4cc3e665679571ac3627248e53.jpg,64c098c92c98acd4279a0096e38e663b.jpg,e0fb0dbaf5ef138daa4cdce6863b3a8a.jpg', 'Family'),
(26, 'fd0651473a2ed8c58734e8eb8bbe3297.jpg,18a96eb2b053d0c60b5cadcb4b7d1b2d.jpg,fc43aab7fc341d8d97ba73a4e32606c4.jpg,565960256cd01bcb932f4c041bb69193.jpg,ab615a4c10a6e9a79e33ddffd7484cb6.jpg', 'Event'),
(27, '25973d1978b89700c0a653596d333fd5.jpg,46fe78a58bfe9eb853ef988bf26cc890.jpg,cb99a94364020fcd8a0795755333ad47.jpg,368659bffbd99c42b6b58f9155502d10.jpg,977b13d007e6cbe1138b800235e4750d.jpg', 'Family'),
(28, 'a718711eb9811fb55cff68de5effc60b.jpg,2e5edd00b427d8672c5e152b09e259b1.jpg,7eca2ac76c3e289fedc396d79bf0be15.jpg,5788007b4d876068bbae51bed8e2b878.jpg,2448eb172ccb989b188ca68f74284a00.jpg', 'Event'),
(29, 'd9d8e6270c60b16d5fca43b1de2e0ec1.jpg,8eeb179ed4cbd1c34c7f799647fd26d0.jpg,15a4a88d937846036f2a35daafc1a614.jpg,28c7e767b726374110e28c05d6b7f273.jpg,d3668607f6d9206bdff9dc562c3671fa.jpg', 'Family'),
(30, '986a235a7f0f22944cdc5fe5dc36c0c6.jpg,15d5a0be8516122d39df3d5784c6525b.jpg,7c52406962aa4479d385ce5599e06016.jpg,5169ac135b5de42dda858b30a1dad540.jpg', 'Event'),
(31, '4ea9fbb0a6221166e34634ae6ba46881.jpg,9e0ab54d34c9526b4fe1b99a58e2050a.jpg,9d4305343e7aecadbb705a1242cc717a.jpg,d810e34bc7dce229fc0db635194c9891.jpg,e522ceace22002257010898cc15bdfb6.jpg', 'Family'),
(32, '4d79ce9970cc5aa448bd6b4e825fb5d9.jpg,079dc129f1416ebba5a6616ba8c4c1b5.jpg,a6f08acbd8553ed72d59850f5015138f.jpg,3ce2906acba01c045232ca2faed558cd.jpg,c5904acafe079abc9aca722636736aa2.jpg,ef88e840b4cdc539930610785d957897.jpg', 'Event'),
(33, '8ba924f03cd04edad128df99606cf75e.jpg,a8ba0da0446d467738ed297030aa11b9.jpg,5ad71e65cebde07cb4629e898db84624.jpg,e02d56079a96470baab5cbe3c241e403.jpg', 'Media'),
(34, '7743e2a514e2e279cad605454dd4e786.jpg,6042624f985ffd24c16debda11733663.jpg,6f55728f00dc230c77f81843b72aa72a.jpg,d7a6ded1e61ca679a19e684169919f50.jpg', 'Office'),
(35, '5e4eb71c38c9a7ce528c5ce5a6e731d6.jpg,856dcbc454d4cfac15196718d79f3402.jpg,fd54a7601fa65945c176fa6700fc361b.jpg,94ea5015192b5cb7c97809ed9681e31d.jpg', 'Event'),
(36, 'ad0a38af9585d4e6ded986465ace486e.jpg,5abf7d25409c84761ae5e146f5de821c.jpg,04b7adc900d5b7a002d1bcc3b7626516.jpg,580a044c1e087c3cf127759238ba08c2.jpg', 'Event'),
(37, 'd4a46395757e8a6d9262928719fcfa90.jpg,d2f6b78aa71d7ef99c366cf803fb90bf.jpg,e7af3764956a29fcded6032c88d9439e.jpg,bfc0a5d475f664d92a21fc7d1d816160.jpg', 'Family'),
(38, '9f3560cdbff8a83b272b87c968bc54cd.jpg,4b0948a70457cc9a369b99a8e5715207.jpg,04bf06041379cf91a05dca757a191407.jpg,8a6fbb224402ce8e6c70f118271437db.jpg,e72adf96a7d8c0e475074d73bd80c44c.jpg', 'Event'),
(39, 'ee602df2f1b6b8d2a3d466eae7a56423.jpg,9e91013ce37bab53ec6ec1a1a4c94a6f.jpg,d96348170367c1e217dd9af1d208d088.jpg,4c3581eeb41855bba9c28e550b7d58c0.jpg,ec4a9f1f9e8615285a02ab42a83f05f8.jpg', 'Family'),
(40, 'baf59ac8ddf431894a97fe2d3572a873.jpg,aba166d353f81e3e2fa1c24aa5869612.jpg,9bd346342a020d918e287df0557c8bb0.jpg,0195f4ea801e3db5af84e98860a0be46.jpg', 'Event'),
(41, 'c15fd6495d377a533b0b7d0f223e09e5.jpg,a15a9fc601d8f2529b83a6b794a9b9f6.jpg,6163ba052cbdfb6ab197295320efd67d.jpg,4d8b1aeaa84b2f2b34ea80f1adda43b3.jpg', 'Family'),
(42, 'baa9389a21b01a9e6eb9913b0546d76a.jpg,1c5d3c64bc8bce23f076c6ac03139ff7.jpg,c5fffbfeba0b118a891bfd709c38a46a.jpg,4200c2d0587dbb549e0b169ccbf73ad0.jpg', 'Food'),
(43, 'fa4a3644af300221d47f722d0281eb11.jpg,1146be3e8b621097a7f21f14b1a18b4c.jpg,3d055cff76888539420f7de12cca8194.jpg,47c404e150ac10b5ed61a8cb9cf92bff.jpg', 'Event'),
(44, '7cf90f44f4646c94d52548a0985716c5.jpg,46a19c7f39f842b54c6be61c13d86b98.jpg,cfc4471383083e86690393b7be236e6b.jpg,f5310dbae545548c3e2bdf1433dff1ce.jpg,107a81f93c4ec969f1d46e191f70c84f.jpg', 'Family'),
(45, '496e58d40691af19f7c518a6bdfcb6a8.jpg,1fcb9c6c3fa5f463891e765c974ab5f2.jpg,44d6eedce80dd75dade48e08f6e5f76c.jpg,f4ecef70a9e9c7aa19f27296b1320fab.jpg', 'Family'),
(46, '0461fec4bea59c66bc1350c3b803b462.jpg,b5dd75704283706c27258001825bb90e.jpg,6e3fa018541ff7d4e3a379e59c29afd8.jpg,2443044932dda68364dd0b592d529a1b.jpg,27087575f6a1fc96ecb415f9511e181a.jpg', 'Event'),
(47, '9071ef7c5ad6876a98c9089cd9da5dd1.jpg,68e86482ac7e3ff11ad39b3171848043.jpg,2406fddd8c4fbd4e6216554ebc13f431.jpg,11cfb5e778ca56e72c1467a8852e7ad4.jpg', 'Family'),
(48, '6efb936493a7b3e228a8280c9b7682a9.jpg,488e34f2270130245f05cf0e172f6109.jpg,ca4a38e9cbe8116ace52eac9cdcac7ce.jpg,73218ca3c813ed3bd5506e9221f69a2f.jpg', 'Event'),
(49, 'eb3cb38572a63255765e67fcf1ea8eaa.jpg,8027ed959ca63274297814a4dc5aec6e.jpg,2c694e740c0b4866dc3ebdd851b8d6e5.jpg,1ffed84a3f948afdc592f8ec6e0c2c6b.jpg', 'Family'),
(50, '0c60eb69f66a571e88bb259dc76d919d.jpg,3453451e03ccea02877144784e2aae5b.jpg,5ef9af08f78c07a11b158ad1747496f5.jpg,079c37061fda559634c779f3c3efc976.jpg', 'Event'),
(51, '566512bfc6476443d1d214d9eba48d99.jpg,242c7c717b9480043711e2474ee6e748.jpg,45bf2f4161a6c24336512b3b8e0ea042.jpg,381bb44bece0fa2e332472437d2414f7.jpg', 'Event'),
(52, '5064cef72bbb34e7978161faa615dbd0.jpg,e066f052a988ac567299ec9bee5b0720.jpg,69863cee95636911f88a68a1a06804b5.jpg,10454bb275acd8a38cf1ae950b0afdb0.jpg', 'Event'),
(53, 'a08cef801fd7dd435f59737328e7f876.jpg,a094c4658f9bdcabaf4e1d15e6ce1d3d.jpg,a5e060d45863dc2d608fa9dac7c97522.png,54bff3e69ed24e84b2de6eec7d69c349.png,7bef788f6f5401e2adb2f72906833322.png', 'Event'),
(54, 'fe5a26aea2e132e6d4f33b03444220fb.jpg,6ecda0d4ae0a5d61bc93d8a1b6ad35f3.jpg,0386ff648a7d347366cf7e39fd865e80.png,36384813090f824b5de66049b5fa1e17.png,cecb5487a38b32d8b7d150b29a19e18b.png', 'Family'),
(55, 'ebab363949df384daad60909fe6f26f9.jpg,242fcd4ad7daca733c04d5e916dc1173.jpg,df6fc82e4fda54b0e2c4e9c8fb3fd95e.jpg,137fc55772a895dae2566eb9d4bd10f5.jpg', 'Event'),
(56, '70596dc3201d8abb4321a6ccbe770d85.jpg,103e1b9290bb7e6c58acb3b98817048d.jpg,1659ec5a022c271a0b38164c51273460.jpg,07fa110649912cc0e378cdc33e414e5f.jpg', 'Family'),
(57, '368bb05939cd16accfe88a2dc06fa12e.jpg,6f250d7d3506be0b6f844f59b9eb9f3d.jpg,f2df429b2129161f239337b7ec944de3.jpg,5d0cee8300b33ced34587cc0a8c920ef.jpg', 'Product'),
(58, 'b740161a739d6736186b98f6ac13ab6c.jpg,e6e01364c7355acaf9b4507efd3ac3eb.jpg,9ebde1522b9e52ae111c38ee0c736d34.jpg,12cef66f6b25863fd098263dca5bb611.jpg', 'Family'),
(59, '98b9c921b2b112b6465f5b03fed2c0ef.jpg,04f39201db321eaeeee99efab66a7f3b.jpg,b371f4d1f9e4f255a755dccc7325b699.jpg,8dc12880f063ed9abe48f83992cf5fa8.jpg', 'Event'),
(60, 'dc96c3b02836e1d1c01f015e448333b1.png,d750716a36a7507c7ea73da9fa48593d.png,732931f315678f8651c3275b5e6cbb16.jpg,c2171f3b6580faa693469b96a54c3d56.jpg', 'Event'),
(61, '19d7a791145c3425f935325f1e071dff.png,ea459c960f5674feeb5cd728b2c5b446.png,553113c24cf7cfd00de90c7f2a234a71.jpg,920a9810c67030d7c827b48c32c2d0ef.jpg', 'Family'),
(62, 'b42aabe279071d71af879eecc0787847.jpg,4cbfff8aaf1c491e7ea742e20fcc97de.png,07c2ccce7671d40680eff6df3ea7babd.png,d5a97f15caee7049dd9ba3806e0a0b8b.png', 'Event'),
(63, '442dc26323badc6fb862ddfe65ac0ed2.jpg,b606c379cd485919ed968b213cea1713.png,6950c8bcfe28e00cc14e57a1116fc1ee.png,6429028398b661a0c6bcf388726991dc.png', 'Family'),
(64, '4f5b65536e360909b97a9a23340cc041.jpg,f8e42fe3645f779fc6928dabcfb79c88.png,1ce2029248b22f14c60293730c89d9e9.png,e32e49055ff5975043938a1be37a5634.png', 'Event'),
(65, '9a92a8e02ad645035bb9d69a52b49fe0.jpg,50953324072a049635598c84b943b3e7.png,9d35ac13970ae979f978e95f6f3b439e.png,2ff0d3ed04b9bcaf0b8119ea717a2205.png', 'Family'),
(66, '8929e3f7df90bc608b67210cae397f06.jpg,8dc0f35a551c130f2de5a9e4664eae51.jpg,1f3190a2c691894f0f5cbed48710ba56.png,c2625b1c4c16c73c329266f3a7a435e9.png,df2f0ac92c291cd976ed508210f4337a.png', 'Family'),
(67, 'e0b582f52b57542f28941993a32469cb.svg,9c6667c5dcf4b5ec5b8e226fcbf416c7.png,fd08309e7862225340fbd4137174b7cd.png,61a179aef85343aadff502614a92ded2.png,0910b442b33bc74b691eb17a98d6cfc4.png', 'Event'),
(68, 'b2a794851bc51f07a8357ad8878c286f.png,ffd7f015bda92428a4af1dc35df636d1.png,43d00963aaefcdd962f65b847ede0e51.png,f0a877830af88f22fbd459f1187b501d.jpeg', 'Event'),
(69, '7aca0a41d38c2e30f3181935767878be.svg,d89d4c5f41c7d0330a5295f57a9b4bfb.jpeg,b49953778fc109f60398f1a6d73ec9e8.jpeg,a86ca659aa250a1a38cb9518e68a690a.png', 'Event'),
(70, '9cd8d57edcaa59d73e81c5561303d013.jpg,4a538ea6ff3f15dcd187b6149429568e.jpg,8bec38c7cd8a8f9921917e9ec6f2e4a5.png,5af4521b630bd9345f5930e0a90291a7.png,17addca072a9b759df6e38b58a6fdc58.png', 'Event'),
(71, '6090b5278cd708c800f2f4fbaee94e51.jpg,4be4ef33e29db40fe6e0e74e8962ddcc.jpg,788b716b93017415fd133c46e171d077.png,55af3c22ce01cb0ae369cf2b427eb946.png,d55211f4f54251991b1ddc0fb7db019c.png', 'Family'),
(72, 'ff46a2c49646139c6d5edf0d80255880.jpg,7adc659df11c24e444bb323a16a842b1.png,dcab937fa42c79153700bd9392061d76.png,f1960d477c4f3142223836cca90c60c0.png', 'Family'),
(73, '6e639b6e2833cd1469792aa2aa462462.png,22153930f500a07b4411ce037abc9280.png,cfcd6f5ec2c347c375e6b1f8f6eae678.png,0dfe07bddb8e66510ab515cacbf7bb29.png', 'Event'),
(74, 'c9980159a6a8353a4f10fe3ecba83f3f.png,0dfcb996b1c9a6a47353e7dc34180251.png,b90c86926238f86058e6142259275337.png,937f69439fa87766bc3e8e6800adc85b.png', 'Portrait'),
(75, 'f54ade31400c38a6e4749507065e4748.png,a88e2f8cf75c233fb32784f72da4071b.png,94beca0fa50bb9fdebeacd24d6a051c0.png,dd6ef5ffb9c4bfd69e73ec49df68d831.png', 'Product'),
(76, '95ab9b4df4ed5729a9c5a960851fe6a7.png,2649d6012f881c7bde1ab6bec67e28f2.png,96d886c187a99150fea5d5c7371ddae7.png,7cc6384e8fac2c1ce846a0b9324dca2b.png', 'Event'),
(77, '6a93df00ff864683f7658266e2a6be43.png,bd0a1fe4c3d5dbbdb15bd5cc85131e02.png,bba2f21a21225b7739a8185689e7f355.png,27489fd5c4a26245280a61bfa1dde351.png,1808ce684445268ba5ce58e3d2978830.png', 'Product'),
(78, '49a7e5db98258b98e1529d9d6cc77e06.jpg,f85b5ef733b781e56b66517bf52b9065.jpg,972c19745ba5b1f6a1f773a35886e479.jpg,0822a4dbe4e57a635b92b389978233fb.jpg', 'Event'),
(79, 'feec969e3cfcf271d71a28e19e1d98f6.png,700fa3b0f2d46593938f35eb11157bed.png,97018af11c7543ddcdb133f3f36887a7.png,45d61c9c0ec1378cb2872001036d4e1b.png', 'Event'),
(80, '61020baa63e2578e09fa8e00f7e7582b.png,27a51fce28d43fb49f05a436d49e7950.png,e505221ef60136ca733feae60326a9fa.png,f4adabbdeb681157a094fc624e733266.png', 'Event'),
(81, 'a6585d4c3ad1ec9e0742360202a29e0d.jpg,5592f093c48fd27e310955f184f0baae.png,a8ee13eea7bdedffa27bde6a5e5ea592.png,9ca528128f29ef781eca156e980d2dc0.png', 'Event'),
(82, '6ece56b7ad276e9ee5eada4265785340.jpg,48c321715b06fe639134ea952b5f0d04.jpg,e468ad67aad2543fdb193eed9ea9d401.png,6c516c1dbef5863afc798f5224668214.png,560750bb141fb5586011eb7a9dd588b7.png', 'Family'),
(83, 'efe0fd81bb6daad0e15cf39dbb1a8b75.jpg,4dab21f1193a60da2aa786f0736ce9fe.jpg,769e7b797186f54741630b63209579ef.png,4070ea0b4cc67f4f1d3dca349bea5da5.png,e3f80a58cab4460d6410d2ca3f08099b.png', 'Event'),
(84, 'e3bb1b60772aff87ec48e7d9e956f350.jpg,509f03400791a9bcffd075d829a21484.jpg,0aa31bd1bd273defe4a24c9cb52b0eb0.png,885ac0ee85ea606c47b34b1aac4063a1.png,08b89b50315cd351e342ba463dbb4e75.png,a5ff041238839532d487bc7345981633.png', 'Family'),
(85, '02541eb789bd74da9d11b314ca4634ef.jpg,60d3b4d670b90b6a3f778562995d5f9b.png,9b3472f66f22597a5dcea641994732ff.png,c5e1d644e89092262d675d0b8f2a95e9.png', 'Event'),
(86, 'ba11cf116305e6e6b10c33dfc1ef30ca.jpg,26e68ef05766ab3c976de1e80cc999df.jpg,81421c04530af51ce0a0ef2e150c9846.png,198dd1b57742875ac2ff2aa45ff8578f.png,501d6664dfbb74bef130028ca9d7651a.png', 'Family'),
(87, '3a6156492769da1275450d4211736bae.jpg,bee5d09382c2f9b7a6870a6c3ce57a52.png,54cc9e44e4179ea421c45c3d3e91a38d.png,51999d71a59f8631a70f23e93ac0da98.png', 'Event'),
(88, '89bd4beebe939613245e4e5357504919.jpg,a330f14b71990b1df6eea738163e870f.jpg,073bac98e8805ebaa20b516fde5b1de6.png,0416ae39f306bd49e26238bab6f0b2bf.png,a8b60bb06613040863d3a151d4fdc02d.png', 'Family'),
(89, '885abc449aa7483f7328cff57cfafe1b.jpg,39c5a4fa41ed45b20f614c890099c839.png,5a2a5528df72291ba94840609ff3b11e.png,335ef78b16155929918160196d89bbdd.png', 'Event'),
(90, '5889400e7e308616b0295242850b34da.jpg,bf8d2e7c9e313e870ce1b458df7c25a6.jpg,0ebe579da0f5385165451474acb824b8.png,90b966299a5c7721cab9d47fae92aa4b.png,365307295668ea74b2c0a93c53a8933a.png', 'Family'),
(91, '607c9745af609e4a545f7af83c1d82e0.jpg,617ab7c3b36c68ae183f304733cda33b.png,fa6404fe21938cb17690c246c7e56b5c.png,c7ce072cfadfb45337b049cf53aa38bf.png', 'Event'),
(92, 'b5089cb4e805c3447eab5ccfe6d7cc32.jpg,1c6a38888e2d0289d9c5c37dbc95ee4b.jpg,309943c6b39d580534bfd1832d992993.png,4acd70c1b867233473de15727820ec7c.png,050cd8703e0be67672745f6393d934a1.png', 'Family'),
(93, 'de51d17ad1d2d72acb6d30b91db98e8d.jpg,e7af8409919c616a2bdd98215425cf81.jpg,bde48dd1a00086d4a30726f888623e1c.png,e8ca1e8259463b2a517a54f27ad7a0ab.png,b443acbd052abafbab8064d051d5708f.png', 'Event'),
(94, '58c9c59bfca4ee78d0c8bf3af10c271a.jpg,bbf369e2fbd496bcade6df57ef6df9d7.jpg,cef64c9ad65549da3253eff50d85b856.png,cf895202df0e20084071341e30ffd745.png,6dc94024768434c7d5157718877eb0f6.png', 'Family'),
(95, '7c0970ae3c955b7d1e521cf787451f70.jpg,832a5d1f16f728f604365dcdcd9bc61e.jpg,d2769d5cfaa23094a196f204a9aeb186.png,bda308e11bfb1f71e46295c90ada788a.png,496d75b4582c1bec2012a58dd481fd25.png', 'Event'),
(96, 'c8a24f6c42795d46b6ec0d4638e29468.jpg,c611c46adcaecd10ed3784344f476a13.png,db9c00c445b24de0bcf88b05133d1859.png,7a0feaa2239e191a4c179bf1732a0965.png', 'Family'),
(97, 'b31647c545afef26ee844e0355bfcce2.jpg,a663cd38ef5f488b2489428b26737386.png,e135180e0de9ed500cc601c6bba285b5.png,c5fc1f622a8198107cd8729b95acc1e7.png', 'Event'),
(98, 'bbdd921be22866682f55a5f64d613302.jpg,533fe44cab659b8f79d99db048eeea6b.png,9d05e5edfd3b2963cc07785c8b4fc7b3.png,3cb8aadf1113e35a36bef7d3476ee8da.png', 'Family'),
(99, '65fbb9c9554e3ba3d4ca949f843a31cd.jpg,f09ae33add60fcc00286ae29ab11650d.png,6abec5cbef149ab511850358eeaed0c3.png,be9ace1c11fb54f3f6dd45185a40aecc.png', 'Event'),
(100, '2b38113512a799444a0d051617ea9194.jpg,d647c220a86de0c5e414933b2fa01e30.png,78d021173984a94c047093e032a50f63.png,9f9f997ea4104d90b2b41afc6ae8d881.png', 'Family'),
(101, 'a046297bc935a9f91df57303771e1c36.jpg,a16ea40d616cf7698ed6a553808bfbf1.jpg,dd35d40d752bf65f9e6d77e865a6ebc5.png,5a653101b327ef7fa30200e657ab30e0.png,c1b6933033a96635e3abfd7bc28e8cf7.png', 'Event'),
(102, '8505417df174f6f3e8756f19c4040b0e.jpg,d5a29c1f9fd393fced3152066ccefa54.png,7dc96617685cfedffc713ce4821c446d.png,c08b92f296115a223718e96f72ebe787.png', 'Family'),
(103, 'b649e22a7b5209fd2d256c9abe38f679.jpg,92606904ef9a83c2bb8ad8908013ab89.png,38f689719d9b962890f6df90e502da73.png,3d9c1188f668ed196a7ef613225fdeae.png', 'Event'),
(104, '7dbccad8b73678e9d89a7ae27b1784c2.jpg,1162a6a8aa8d46fbd249f301ba92af31.png,5bbd1134c441647c734194125c7f7850.png,4dd91ab206b60274e26ce87c2873cbbd.png', 'Family'),
(105, '28131661f69ae9cb5bcee59ada721521.jpg,d098e86d925810b40b711b4fcd5d1194.png,1b7a042817815d0617d00f7751a2eae5.png,6b3f2332bd7746aaed65fe74dbdee449.png', 'Event'),
(106, 'b63dbe7394f729a9521e2cd9743907d0.jpg,2ab1db555c350fbcb8f06f949ad353a5.png,b04f2e06b40758cabd53f7b254c99023.png,7d09ff660956d9e4aaf5a76debaed3e8.png', 'Family'),
(107, '1c1dff041ebc5ae52b5bbefae1ee2933.jpg,6639eef5869cc6fccf0b1e1a93903991.png,52313428b8064344d8e8c3082dd27f5e.png,3e50cd4940746ed77aa9c7acc64acb80.jpg', 'Event'),
(108, '6925c428603b79f0c020ee86a9b4c24a.jpg,ea70571df30228ee807930c38e6b89e8.jpg,12cfcfa43a8a2e2343d6a002ed4c74cd.png,a754ac8410c9967f76af1b93070a29fe.png,d94045d23405f7b8db679e0593014b22.png', 'Family'),
(109, '6e2c0236ad5427c12a0d88a68746cac1.jpg,427320301504d3bf9c55917f25bf3f40.png,413e1e6c174e0e00384a53b863cba8ef.png,b03b2a7eb6ca547bc7ead3c4172b63f0.png', 'Event'),
(110, 'c00b93161dbda8d053825acf75e20bbd.jpg,e17f5c95b951f68619b0e8f8eab291f8.png,8e441a71f553262007591510cae12838.png,fd2a89007a904165b42cb7ce618e7625.png', 'Family'),
(111, 'f384ec04c13512668b8ba0267a354afc.jpg,94d4513789697fad11421043b4ddd682.jpg,30d87ba35bac0050a5f04bf4a6039609.jpg,e6ea8612c6dec356cda2607b2c5213cf.jpg', 'Event'),
(112, 'bbe62de31c601c395e8af24d11bf2b81.jpg,71eb02b4bb86502c842b0b9932b4b587.jpg,2b7392d05dbd6d7d8decd556031281ef.jpg,8ab7e75c463da18861a65a035a9ba15b.jpg', 'Portrait'),
(113, '5c4878cd81d474e7e1839a46ce3a6fcc.png,375563ab6f038fff038a49a7e677d15a.png,0be1388f08dd12b2ee8a9f38b866f047.png,fec8790dee7931b7f48c32cb6be0e3ff.png', 'Event'),
(114, 'fe030ba731f22d3fb777f4dd7b10b878.png,7764e84aae081f50bd7e9a61bea75e31.png,2434709d5d45010da29784f5fe557057.png,89d45761d3874d8f2f229cf07b24656e.png', 'Family'),
(115, '36c6464a043e1c02c6e2df3f0c6d272c.png,1146c15a35159ca6ac0c5cdf75f2f50a.png,fb45c0b1489a595a1001ecf31309a089.png,deb83deff215faf517ea2f77ae7af05d.png', 'Product'),
(116, '1281bce81cb359958bae2229c281cded.png,568d35e59f266c24fe9185c0f31abc72.png,d5b8d846db9b5f11934066a3a61821e7.png,75c03e6c3ac9a1dfe67988af1a8e7186.png', 'Portrait'),
(117, '752e65da4c9728bd836e133e5ba1ab7a.png,02fa69ec86775396cde91481a4305bc2.png,8547fc69bf38204d44cfe2aecb0646ee.png,4e382b02b9e4c47eced2ecfc88a1700e.png', ''),
(118, 'c64997d5ad841ca029c27cdb60da4a3b.jpg,d819292ac49396ec59a6c211a164c4ce.jpg,3741f553fd986167a08446e21d5f2d09.jpg,c1a24cd5ddc15cfed184c1521c4859fc.jpg,15d957f50a8d16e430bba0f98c0ab96d.jpg', 'Family'),
(119, '455f3e28df08cdd6a4016661d9c3c368.png,3fa89365391b2f314db597b670cc0bd5.png,3ec5989ea3dd1488ee172176eec52d89.png,7127dc827faa3a24c384091c128c8d1e.png,1ea04f8b8a52f71bdc1000bd4fe24ed4.png', 'Family'),
(120, '83c24d36a3c462285e9e5f79d1c10c4f.png,57ec5935fcb68ee7db63bbe71dd8cbe7.png,5cc6f85d14e39114368689ba19149999.png,2b555ad8767bbe44b8ca30bd217b2785.png', ''),
(121, 'e36b68d93b654c5bdd38c35f562e3405.jpg,f5931815ebfe310d93d8d73ea5d02d54.jpg,9d8038c5362b4b4b1c4f72b1adaa85bc.png,be4af0a230d7e15c6cc1b2fb21003a44.png,0e0ca298853402bd6703d86467ee076f.png', 'Event'),
(122, '342ac7c3bee9a2f78eb3ef501a1d5e3e.jpg,771c0b9b08111143fe20a3a049677437.png,67089a2a978068a6de94778dc05ae7d2.png,d62e0dae215b601826f069b1cc874b45.png', 'Family'),
(123, 'da6ce6b0f834b82724c3161921c8f1b9.jpg,a5c163be5fbabfaa3f2d91c99a55e799.png,55212da0022d31d5dc9eac6314a7ca18.png,2f4a680b54832faa68ff81736e742e7c.png', 'Family'),
(124, '1da2a25540721482f68e89655ddb263f.jpg,b4684e9d733bbe83bcd5295e8549c512.jpg,77dbdb6c5e4035ef38dfbd95d9848dcc.jpg,958d32b729e992491f89eb6778ee2994.png,462cea2a48b1a61bf39958d4f17223fb.png', 'Event'),
(125, '3bfa960534844656ba39181b14164750.jpg,51180a51acfd39e491b1ddac60dea7e4.jpg,62a364c5053ab1a68edef2ce926b7806.jpg,cfc59e9758053f8f08eff1ffd6a6dfa3.png,b7d674a5944f5b76a9c208ccd746c388.png', 'Family'),
(126, '12e4cf302deb2b02155a96c678d7a218.jpg,d82f01f79907b53ef1faee1aef447daf.jpg,321873656594df65d45f1fd2875a0fa7.jpg,8994dc2610268b58743420cd7d919df8.png,5d4cfbdbba3d5ad15a1b89765d82de9e.png', 'Food'),
(127, 'd5a3a60764626ef1c560ac1f2dfc093e.jpg,a1d7bb5c9f6ba2f2e93c54db441e15f7.jpg,fa3bd825f56de74ce4112661f68f1c57.jpg,436110f10b28e03faf3bf77544551712.png,941f5d056bc75b6ba753852f8c8d2354.png', 'Portrait'),
(128, '2c32e7e441bca86d6a30b4255ae49902.jpg,d66a1b8c1c47e3f0dbf0e5f2e028a008.jpg,d8a1152d1067c42cff00420a594eab40.png,37e5a411da0056931df29c80e999f04d.png', 'Event'),
(129, 'fdf80703e4a9a629bd70abcd2242eb7b.jpg,5dc4029fbad35741620799526e561f1d.jpg,f7ce2c964cddc39f5c7f623dcf3098da.jpg,0769983a542c554a06e443799020b235.png,93e1cef2b7eba1038fd6a5bc02499953.png', 'Family'),
(130, '7c1a22433173605f625df66fd2e795d7.jpg,e295ec72c85c403163132f73f9f74fe8.jpg,0e7e778a2f3e270d6d52018f0f9ae97f.png,8293e751168ef2404387019f6be1fd13.png', 'Food'),
(131, '2d45df094068c88280facca44cac2aa7.jpg,feb4d328beb43362aab2cc449340828a.jpg,971f526b59b1bd70743bb1087ffc8524.jpg,d46589cf05b19da0e0906bdd9cc2f74e.jpg', 'Portrait'),
(132, '89de19f164d5bbd25e6674fd2471770d.jpg,6d78390fadbb0801db6ee17d34282538.jpg,fa4fe36902a64b148efe15a9168295a4.jpg,c7bdd265e27f13a2080a3f074f9b49ba.jpg', 'Event'),
(133, '5e073cc472029d71c28304f8998bc47b.png,59b4a0a0834a3e1ff9c9f0198f1302ce.png,3c303558113cb73dd15903b484c79833.png,2f1f86913a26d63a365b98ad093f44b9.jpg', 'Family'),
(134, '7e2bddad6bfbe9f5d36457bbe64a4b4e.cdr,01bcbef108a7d98e4cef69de2d0cd414.cdr,b87690e30f2f114a5c82e9b2e068fcab.cdr,cbbcb2062d1f7fac75b7c9d141a8e897.cdr,d0089c46b78d8f07640cbe5312b9b160.jpg', 'Event'),
(135, '5129dd5990ea24a948559c1616cc4ca4.jpg,4b06f65ab2f1b4c0ec9d2af71251f819.cdr,d3c386d2944cc12362780498302e3284.cdr,5e7362cc760de8a7e0a9ea05860da997.cdr', 'Family'),
(136, 'c1ae48e9a829d33648d927711fed8004.jpg,6cb6ae6cf9f8517399a78d4f66c4e19b.cdr,41fd2e1e4e2363d64dcfa3ecac760b32.cdr,d54028856cfe581f74034715ebb1065f.jpg', 'Family'),
(137, '802979109c4c96558f380f0bff7a45eb.jpg,09a98689bdaf87f7c83f074378846ae1.jpg,ea3fa1d9e857213a8aedc09c45c592fd.jpg,da8c2a4ebf7fa731d907c6017c6fe05f.jpg', 'Event'),
(138, '01979650ee39cfb964fe439f9b1bd001.jpg,b3f86635e61448c907a1db981757ee4f.jpg,8b67e9ff846a321fcf26041293921a96.jpg,0b0ff1cef0a2dfbe3a1f2b1baa459196.jpg', 'Event'),
(139, '04fb3da50856ccfef289df74ec481d94.jpg,b3415f4f140ad6bb08e4bf9091b49bf8.jpg,5c6bdb03ea74bca14be64207ced0566f.jpg,9ec1f3ed56e269bfb412ed9afde27955.jpg', 'Family'),
(140, '4261bb2ff0f8a40295cb3f5578614e6a.jpg,053f1764b20449bed2713981097e19ad.jpg,e8e41041d7bca4fe5411b8aeee9429ff.jpg,eed647132c617108931772d8234a1167.jpg', 'Event'),
(141, '653602c2baef843d436f9b50de5de9c3.jpg,8d024da61db2da6264acccd2e580df40.jpg,8003a802d0493c7c812c61267278ebb5.jpg,8d7cdac001b293523f422dd04d9acf22.jpg', 'Family'),
(142, 'c9b5001ca6aa3e9699c22b623c5afdd7.jpg,9fc03f01b8068ef1ddbf95f11eaa7704.jpg,6c993c9624851e1de2f1829b5e0fd7fe.jpg,8e2681c2b005702857eecf761a12f492.jpg', 'Event'),
(143, '50695102bd70543e2fb78410872099dc.jpg,a77795cad94fef04772426fc3dd4a044.jpg,df91222c2876ea88b0561e89ba953aec.jpg,f6b63006075b54a07ecb47fbfaab57dc.jpg', 'Family'),
(144, '18fc7546a68edb725d8634d06491ba1b.jpg,9750df0d1bc2dd623923bcf2d74955ef.jpg,6045850e237feee9461e5fa57046c76b.jpg,7d7e3deb22e71e12d648fc34baf9be75.jpg', 'Family'),
(145, '86ee55067a9937fa145dca545dd79734.jpg,5bbdad8fc36702f55b7af0279d181930.jpg,8b9acc56f873277b6513094adfa9f3ba.jpg,3572906f9469d4726c2181ba5cc988fb.jpg', 'Event'),
(146, 'd8a8b6a53c9a19516524149b797b86ec.jpg,4698f073094ac70fde4bb1855520ddb0.jpg,2b0fd7d59bd9e21e1211f256dddb5367.jpg,bcf6cec422b5d2178027d7233e0e97c2.jpg', 'Family'),
(147, '21d9ec80f0f7462daf02123d5d4ef532.jpg,1cbbc275e39974c328b7a9506fe08545.jpg,0711f095eb01287cdef3b43200efff84.jpg,b8407bfb9f943c63e3377b42c1c54bc6.jpg', 'Event'),
(148, '0241e4f336c8e27497bd9e91db84ba7b.jpg,8a47bd3a9f57d497e1eaebc62cdcc823.jpg,a58da9330195eb268f94deadf7b35d51.jpg,af78e33a3c62508c6f10790f6bd7c331.jpg', 'Event'),
(149, '746de5f27c350ca27d85ed7bc7595711.jpg,67fed7b081b0a8699de2aad508b58fcb.jpg,4d409dceab686f928e5fb050ced94d95.jpg,865d76f0461da0b6684824ebf9982868.jpg', ''),
(150, '34ef3d4bc1461dc2a8a14b9432521f05.jpg,d567596b55b923bbd0a489b9be5978c0.jpg,26a141eced6aaa792c230d3ae4e8956e.jpg,e8388c9d2369243f2cd460f2e2797173.jpg', 'Family'),
(151, 'ea16b7c39c285b864472be0d4c83d9e6.jpg,32cce2d4d648783fc2e1024616b196f8.jpg,3756d6c0a361ec41f5f50955d5664e6e.jpg,d4f6725b51655a18af45d9c3c7d9719c.jpg', 'Event'),
(152, '2a6c64c766c0f41bfa1352852581e841.jpg,1cd04431fa1d66d25bbf9868145124f1.jpg,58bedf98cb01c784be99e249384d0beb.jpg,2f7438c0adfd7864ee1af1b1b7b6efe5.jpg', ''),
(153, '02afe441fe19489521a0fc0301f7bdf1.jpg,e7b016463e73bb36506f5fe151d0fbab.jpg,83113fe152f8d9f1b836d41741257d1c.jpg,218456be6c5755186d986b0cee2d36f2.jpg', 'Family'),
(154, 'ae96cdc2e146f3a2bdb2485c9600bb88.jpg,f4ccbe93ff30cb0ad64aa26364c10c69.jpg,2283b04761260c081a0b045c6c7c2481.jpg,91d6d69b4777447bb622dec3763dfd3f.jpg', 'Event'),
(155, 'dbe0c2c19443fab5e47d7db2df66322c.jpg,0ed1f365e96ee2c24eca88f9b3ae566d.jpg,66f3709de0a8a57a91e3fa1dfa86fe37.jpg,b274231042b9a41b13ef4a83494e4f67.jpg', 'Media'),
(156, 'e4b21d30737ba3c713150cb14c323dea.jpg,1290aca6bdc45f15e3b8259a8329ddbc.jpg,48f4ad1ec18e2814acd14436c7021030.jpg,1da71ca72eb6d3f3b0d479671a1a7eb9.jpg,caff93a01825e0a25c3cbc19c99d5c4c.jpg', 'Office'),
(157, 'f0bbbd6c0fcfa41f36eba439705b08cc.jpg,904ef5f6dedc7098d56fe3ac71ca8f8b.jpg,af28fb2ce27ab4c16e5b5161e93bfd1a.jpg,d23f14f0ab9c9daa6416ab5cdaf44554.jpg', 'Event'),
(158, 'eedb2700d7e3dd7e0012fad4c89ff7e5.jpg,0b8abe0f87a53287f0671a8ee64a4b87.jpg,7d90cf4a699c96c30341a4c6d0bc48b7.jpg,345830a433a522ae44c7bf19fc5e08f1.jpg', ''),
(159, 'c6adb9128286c2edafd2064c331c6a33.jpg,bcb688181675886f9430c69e2a3a664e.jpg,398d26e8a0b06e5eef6ddd56a032bf19.jpg,1ceeae76497a004bab7ae15795a8f810.jpg', ''),
(160, '53e6308bcba9874fb875a05579112b7b.jpg,d58b7734615f12a62f2ff9c7b98a3cbc.jpg,1e006a5c104bdd2c8a3d1cb51ae5d1d1.jpg,11e5684fbab40b042ae9c507142274a5.jpg', 'Event'),
(161, 'd8b4568260972e6aa08d615e8100b55b.jpg,41860a1bcf83bb0443a9a8ca4709c1d4.jpg,4e9e4535ab827702136708e2e16c847a.jpg,027cadaa81b360eb22cd5a4241d6f3d3.jpg', 'Family'),
(162, 'df1a2c6286299007076a3ff8e82ea4ea.jpg,799034a4b4b6e0fa6d1e073f836795f4.jpg,318f316788c44bc9523e9b0a135e59e2.jpg,e3e22477301086741a4ef237a0276df4.jpg', 'Event'),
(163, '5c43dbdeb52dff1f51347ca5a308967d.jpg,2f18a75de7af00b21469519dc7074dc4.jpg,b95f78bbea4aa235c00965ecc13319a5.jpg,1cac272b143e7b37fa6b2b03a9c36556.jpg,42046f7fd6383b957ca8a37817aa5634.jpg', 'Family'),
(164, '4e588083352ef6a080d65421c5cee1a6.jpg,11941e71965a1a697025e0fe3893231b.jpg,18c662474395c4bb053f9cbbe2051dda.jpg,29db9d070552085370d46070587f0fab.jpg', 'Food'),
(165, '06602a1369f32ad9bb14967a66053935.jpg,38c2fe1b6dc48f5245ddb91028b06d86.jpg,601e3a7b416a0d70a672690645e10ed1.jpg,fb19f471c7458afbb46ecf76744c6626.jpg', 'Event'),
(166, '2113583f9ed70f003765662701d9d320.jpg,8d721c49fdf051e47b136d3d2c8df056.jpg,6d28654d57e5cc204e1ddffab09b9bae.jpg,9c22bc1f73dea7f00d2c948e7119ec95.jpg', 'Family'),
(167, '343f5a229e4db21ff87f1d2311f67ff3.jpg,6306f655bd1da309bbfc103ebcdb2917.jpg,4afb5b13e074480b681c8ae7baa8bde8.jpg,d074cbe3cbfb791d6b7f14fa588c8f70.jpg', 'Food'),
(168, '55f56a6a5c7662f8a5f9b5e5b1b320aa.jpg,e70016895dae0038d53f1a21442da0d1.jpg,228fbe87758843652a521973eee7742a.jpg,2c6b0601a3b623b21a3079374009aec2.jpg', 'Portrait'),
(169, 'c01d2cc9a7754d9c5399bc24b38aa548.jpg,8e0f8d62516114813231af74fd5b89ab.jpg,677620c22d333d0f09d669b37a1bec82.jpg,e456ed38efd9410be79efbdb7e3143b0.jpg', 'Event'),
(170, '2efa6c21415ddb87a1741ff68734edd6.jpg,29ac06b22015fe4a5abd3a191dc25cb5.jpg,d6dfd70995760795d6e9461373f6a560.jpg,5dab87eb72acba6118ecd8f7aa580af7.jpg', 'Family'),
(171, 'c974d8ae5a0fbfb1fb83bb7d28fcb952.jpg,bad6635016183b9415235ac6a4bcbbb2.jpg,ba836154fa7b2d7791cff8c7daac3e0c.jpg,b84bc1fb00567bc6dbb4ca3004b8c736.jpg,7676e95c4240a39d92bd88d8c101ab52.jpg', 'Food'),
(172, '31e0b22b42a38ef3af516cead6ce7947.jpg,adfd79547fcc13132b6091ecb971ef99.jpg,d30de4b23331f7b83d0a461547a91e87.jpg,1e49417e945ab9edfa50872e985efdf8.jpg,ed063b5bfaed2661bf30c3045630a9f6.jpg', 'Portrait'),
(173, 'dba5ea67236b30ed3e5dfa48c5bf6fcc.jpg,c4b67e9a8684fa5562ac25d09c2dcb8c.jpg,7fb52d7c901350d8bcaba7e5b836492b.jpg,6d2ee295bac97c247f77e4a28c8a649c.jpg', 'Event'),
(174, 'a8aaaca1b15b3a75c9f1f9c92032fcdb.jpg,ac59e8780f7ae058de2ee31eada22328.jpg,8ac830e883c8335eae79d2c11ca0ba74.jpg,8db92e3ef792e9f2e8b049c2d0dcd800.jpg', 'Family'),
(175, 'b1b46cedf64d2597113af151ba21af6e.jpg,32214ee85f2076d93962b3275bb85206.jpg,38f059ce333462fcc83bca319b9d03c1.jpg,4ac929c2af6011211c33bf13a304be8f.jpg,f5d5710d7fe79ee0ae637d1683cf8a50.jpg', 'Food'),
(176, 'c46b0ddbd961642f022705e87c285c2f.jpg,3d9942b65cb8467a3afe3aae5e28dcb2.jpg,d2ae1044ae0138440bcea3ee8f41a219.jpg,b928ca4fac335964ea73ae1cd6273fb5.jpg,f1eba3e2e9505864fc7a7158356d86f2.jpg', 'Portrait'),
(177, '9db21b15b727c8f4bda70674af364179.jpg,95353dff2f19458b227a76233396b87c.jpg,cba5b8a663d81ce61d8deb6d78e2ffa0.jpg,842d1897bae64438afc40b6de587dd7e.jpg', 'Food'),
(178, '18c758d09a7c4ea6221e038c563eb534.jpg,75cd6bbfc6e727fc6416252cc8ded140.jpg,ec22d81e2a0ae6eff9875441c32310dd.jpg,ce18e2eac56294e540898fec7e95db0d.jpg,aa7d9e04807ecc3b327d92de5becab91.jpg', 'Family'),
(179, '6a9a20a9c37f8e52231ba4533b68cb0b.jpg,288f5165f48b070eaae6a8b3ccfc046e.jpg,a4fd128cf2656779796fcb276dde0c76.jpg,30a34e97aac6dc27335f37b9d0aec673.jpg,ea81a873ccf80eba03dcef0af2d00cce.jpg', 'Food'),
(180, '4a1e3094246305181a0c4d2274ca6cfc.jpg,0a9316a17c4603d363b42c1cbac8e68b.jpg,715bacfde09302aa7d67436dadf668e7.jpg,6eaf0f6d1917bebc2b3aef39bf4c53ea.jpg,a918f044dc9059407fcac44d9e28fd85.jpg', 'Event'),
(181, '7b5c74b8067fd2fb2c36e3513fb548be.jpg,7db406166868b78d85d26ebb44737850.jpg,7e8bb6c76c6a18d43da4f67b6bd3cfe5.jpg,588adc4375db7238fd2b73bafd03b75c.jpg', 'Family'),
(182, '6d9aaaa91f4b6956d17f50d15e3dee65.jpg,bc3f4df528ec002b6df476dbc52e86f9.jpg,f42f69e5f8b8cc4a58a1d4e6c92ffc13.jpg,408e3528f6148b24bbdcbcc4fd7c3cb2.jpg', 'Food'),
(183, '6dbece7b23b199774c05ad0bb37087f3.jpg,2afbbf925c626896f903d30962c7e838.jpg,c24b7c9b408f5f85e4be12870de035bf.jpg,7838a01ccda20c5ffe8ddf4877486d81.jpg', 'Family'),
(184, 'd9539fcd04eb475d7ae7c42f16b1eac9.jpg,82d57fa1941b05d8ae48b8555e624e55.jpg,89f7856f3e8f09d33ab50b0615ef5465.jpg,3e38ca57da83b00f6944cc04922ff928.jpg,842cdb6583956ba24cbb8caa6b9d05bf.jpg', 'Food'),
(185, '617666d4701c865516ac71edce37fb04.jpg,5b5e035ea18946dca2594b1d86b3f216.jpg,e5358de051f69f0611e8d6afa1f7863e.jpg,682f691931247311948fafa15766e37d.jpg,a7a1c60afa413313e02ba44da51ac564.jpg', 'Event'),
(186, '327245beccf31a87fa55665f29618111.jpg,4c5eb6e427b022de5c61b12915c13246.jpg,bf9751698a8c48ff5ee9df5515156323.jpg,a5dd5ec1575ea6fc69f2c8edf807c44e.jpg', 'Family'),
(187, '6c0a117aed48139627c4866efcf69cd3.jpg,6dce764ca8a69a66644ff223979db5f2.jpg,2072edff9b97cd011de02b04572d4fed.jpg,c0eb94acec4ccd7643b241107f1f44f6.jpg', 'Food'),
(188, 'd8e24e82eb5c9e9edb5f5e320dc81ad4.jpg,7772a5401f90e585d7d0ae8ba9b688ff.jpg,c0d484c333f4676c15d984d6eef334bf.jpg,26b62be2909206e56c89f4da71ef55b5.jpg,e2990c6e4db1cc27e1c6dd4ee3127480.jpg', 'Portrait'),
(189, '58669e60ee81ba98e85d8e7dc0915869.jpg,3dc64bc10356753780b760d0fd6eef1c.jpg,ec081c22763f7a3dd4c69dea2b4d6284.jpg,da27cd11bae447e0e4c16a392d654f63.jpg', 'Product'),
(190, 'a1d760689890f999a2415c301097d889.jpg,c56d58d0e1138b6ac05c715bf61fbcc8.jpg,a19742174215d341a56ce53e36ac9f9b.jpg,b52a782d00b5cbac4cbb486bc8853d0e.jpg,902f319445450257c51ea0dc338d89c0.jpg', 'Real Estate'),
(191, '50b475130446f59a8c657d6eb9218918.jpg,e25b0f187223aa67764686087dae3f73.jpg,a7dc0da8c5a2d43ff6dee1b9b925218b.jpg,56c452cc1284bbd7c11edaaaee90eb2e.jpg', 'Event'),
(192, '6de9da3bf19a49070c8f1d2223f1d830.jpg,6501fb7eb96ee56aea02f9be6f436c30.jpg,898d53609ebd49408eba38d8f8e4a58b.jpg,a8a7066dfc60bd04f1346a5ac41b2e91.jpg', 'Food'),
(193, '9807ec615841232aa002090ed8be9b82.jpg,507135b8702844d422d1218a942fc327.jpg,3a8af43e0d05c47c34beaa5843561df9.jpg,2ed834dd5f2da584ccc41f02042e3b2f.jpg', 'Event'),
(194, 'f2605b8c927ac54a320b2b3d9be40c1f.jpg,b97f9af4af77c3653f4b87a01a58923f.jpg,a13bf71285599707071c7a092cab6b6a.jpg,d69db105e05467470809fa1cea0299ca.jpg,eb0a89bfd46e1ef5a1829890af583f8a.jpg', 'Wedding'),
(195, 'a5ece5f9f233f4013a7c2655d5a92d46.png,1380a1e9e370f11cdcf46694dddd9329.png,666b011706effc04c87326b5d430ca23.png,401bc2c4c1a9b09658ca1e8b8739081d.png', 'Family'),
(196, 'f8c78199cf20aff17c8ce3267c5549b9.png,4a9fe19a578cf96b1a46a96291df2515.png,1a1e5d4e4057e3bddd83ef99f1ea2556.png,b37356771bc40502779e7da0ebcaea4e.png,2f6349fb64ea459798888886bfbd4f76.png', 'Food'),
(197, 'b15d447491cb5f94853dc20321985487.png,a1acaef8710c0a121feac61e41941adb.png,5e77c0b6373de91bc58cc4cf1260f103.png,19ed507cd06a21242b2108b1d7d1162e.png,4e29db4f5e1c8b7165810c233824d0e2.png', 'Portrait'),
(198, 'c16bec657ed2506d69992dc2f62dffd4.jpg,476befd6e1445b9709a8877fd66f99a4.jpg,a357123c4c3ae824e8cd6add890fbc7f.jpg,17c8fd8e2473ac09fd427f125c3b574a.jpg', 'Product'),
(199, '877306966807c48e19bef9816cdba52d.jpg,b3c3a640678838597c2ad964d5720adf.jpg,44e6df78148c56643a31f1c0d74674d6.jpg,25edd6399666865891e1fddaaf971b34.jpg', 'Portrait'),
(200, '11f153faa7c357d80bc34b43fd3ba558.jpg,1dd6f28af36f59e683409fc663420ebe.jpg,067272c0a087f614b316e819510819bb.jpg,4e08e5d48c3e2e0902cc8f2521718704.jpg', 'Product'),
(201, 'b270df98379508cdfbe1eb30e4cb86d7.jpg,06a3b740123d871a0c12b3f8a0610d1c.jpg,132f7daa688ca4af088a01acffc90d6a.jpg,ef815ed1a0dbc6134bd91d36ac17c0ea.jpg', 'Event'),
(202, 'ffa2d07bcafea8c5ce3c868f5884daee.png,da79d60ff7d042b248ec88fa4090d884.png,38b6445ef4bf59809cffa2aede7375aa.png,76f0d6d069f4916f057841bc4e520a67.png', 'Food'),
(203, 'f458877c55558a7fdbb44f72b552869f.png,38cba23e965c82010d81bbd80c164215.png,3b0110bcfd50fe0b7b212a04066c3d8e.png,bf8c25b6e5b24c18d25a00b2d5d93f34.png', 'Event'),
(204, 'cb3277ca00830f8fd966f17ce8124eb1.jpeg,19028e7fe8716b5f4b75bfd3716dc71c.jpeg,5f14fdba3984234994da17edcff7c8f6.jpeg,07980aab2bb0f1f4e7bc649bb78b1abd.jpeg,a5d4598038b208e27f31a28eb761ffb1.jpeg', ''),
(205, 'ec15e5830b5dc75af713327b09d3813c.png,8770f97ebada398c87bdc89e74d73f6c.png,6f388c724224d68274cd67501db90c6f.png,5dd615db64639844ab2ef86e4e53477d.png', 'Food'),
(206, '3f2a1a5ec47c2cb9d74e5e50db7263e3.png,1dba66ea64d4433f0fd93dcd3ab6bc83.png,290b0416f9585b3f377eb45b3db2a6d8.png,54e4ec8dcbcdccae02d2ee0da64928a8.png', 'Portrait'),
(207, 'e9543ad9465d0c80c78d7acd230f6ee4.png,9b06ca5408cf1848338e838fcc088324.png,93034ad32b1cf7d326fa76dbe21a00ca.png,6e50957cb5cce2dc75155d54ac17508a.png', 'Family'),
(208, 'e7da53beba3647da4e91656af1865637.jpeg,8800c6791e4be415bf9dc5da479a33f3.jpeg,d7b593c289a920b63eed05550de5ff6d.jpeg,bb07a897c14b15f12e88cd332c2a73a2.jpeg', 'Event'),
(209, 'ca72567e7542df3b8cb71aab48627e7a.jpg,cd83a5cdb57908e0c4f1a19219dbb5cc.jpg,6ed93eeebadea53d433c089a49db98fe.jpg,a9595d19c618c956d9f76ceba34cbb6a.jpg', 'Event'),
(210, '010e6bc2575ab995671cdb080a6f3c7d.jpg,afb7bde85172d79502038c9c6898b1fa.jpg,252f8bf69cce148689769b7edcb96248.jpg,eb2ad06b2bf0c92aa7eece4d34003423.jpg', 'Family'),
(211, '66556acebe224b803f4df01951b14f8e.png,301faf2b9cea134c564834ee655bb76f.png,db2f8c0e250f1499aa3788ac0e954593.png,71c33dfbbe2d0062514e60b4a246b52b.png', 'Portrait'),
(212, '33bb4ea4e6e55c9397d807ff157e5768.png,12e0443aea31040f20153f10af483869.png,2978c638a8a10106df1edd396e0057d1.png,82a71fdd196a60b6d2643ffd48a72b03.png', 'Event'),
(213, '2e7fa1dc101114d0c0e09714a5328079.png,ec4dd446990d6947bef49e0afaa046ae.png,476cd1c1f7b3bced60e057d5a4a7cbfb.png,c7f0093041b4333d47bc9dedb6005b91.png', 'Event'),
(214, '2561639a000b147508aab0e34a639e32.png,5178ccae809011d11cc7c6c1e2d6ed4f.png,76727b344074a747c8fb45fdc72c0bed.png,9c8d9d68bc502130ba9d1e757e67e5e5.png', 'Food'),
(215, '11ea3273ce83c73034b2434da632c1aa.png,d12a06f8858dd61475e5a2055a8daf27.jpg,fa63273417cbebdc4506aad11bd9423f.jpg,74eb8f55ff4acab02e90d6036d74036a.jpg,710c959588c596767226129ddbab31b0.jpg', 'Event'),
(216, '2e56069fe914ccb84c344e9cb7b8d392.png,64239ba5423133287ca98841acc263c3.png,2669ad5229affc68a2057a1d52cd9556.png,ca63dfbdf1c1d3c49465458a7c73f893.png', 'Family'),
(217, '5f25858a88c90fcc66cfcd2e932011f3.png,d1e2b0f3184d8b85785542d57edf95fd.png,e7bfa0515a2e91de23c0565821008a29.png,a0b382f6ff01711363bf7a0f0305f0f3.png', 'Event'),
(218, '33f27199514d49a2cca8078a5a2c3cd2.png,721bddb79a3c03f530f187b5a90371fb.png,7a6a4e9abebde4eb8c15b34f129724cd.png,f05f48165d758966b202c912a6c62333.png,290c3a79ecfa68642c9f533b3c52d4b5.png', 'Food'),
(219, '58dc724270d76b6801dc0a31a44686e2.png,26d9f9ea3c180e85476b06c18d576d73.png,5a13218336d164ed09df7d7ed1e1cac4.png,f1707ef08565a014af6a04f3e66851a5.png,3286d4cee93580ee659cb5d77dd29030.png', 'Food'),
(220, 'eebc5e4cdd617517551155ce036c555c.png,5e375b9e8fdcaf57f9ef8c894b6496dc.png,a6e7b4d3de0c1b86051a591be74500b9.png,bf0fd8d7ad81b9735591bb856dbce808.png', 'Portrait'),
(221, '7520408d799f9c2acf61eb135d30b483.png,11a4aac294126e1eb76549934e308ab9.png,558421248eb5748c6654975eb41edf89.png,d05556d09a46b2a85b61f5bd2faee96f.png', 'Food'),
(222, '2d1f2474395f598d8408a17f443d403f.png,0b5f5c486a9f5c38918bf8e88c1cbe0e.png,e60ae2781a9768021a45a4a7e9bd0550.png,1badff427dfc6990ef6f4481f4b70a1f.png', 'Portrait'),
(223, 'ca5e8bb247c723df07af0f5c89e51fdf.png,4016050383941ea4f694c59fd3abacf8.png,df41ee34f3479194a0f13eebd353a3f3.png,ef03bdbbf49851988820b6420e78b1a3.png', 'Food'),
(224, '5ab86fd6cee0a0b5666aad0166c8cf68.png,8e344aa188a36895dcc199fdad724974.png,d27772bc3bfe0c7703d895e456ce38f4.png,07c787dbc7c84ae542cb62027e23ffc9.png,9179628ec7c845cb68a306a4791aaa13.png,30e1a1ab7a8fc49e3e45f30ceb6b5d31.png', 'Food'),
(225, '051ae20151df30ba855637cfeec638c5.jpg,ac231ec5fa7c4c79dee386164e66e0a4.jpg,7a39f96f95176a8c80e6a84514fda40d.jpg,3ff9b7e4af5b3ffd2abfc21dfcdf59db.jpg', 'Event'),
(226, '1ff6e7f84f2a6e7a355a84950e3bbba8.jpg,cbf171ffad2bc9027f882b61712488a4.jpg,938390d4e84664fe23a31a0753aeb794.jpg,b3f9a59a0d30666ff112f1765db77fdd.jpg,c1f5a4e0b22be901f52e2017b213b3ef.jpg,3a97cdcf99b0abd5cc10fd759355068a.jpg', 'Food'),
(227, 'a1d7215a4067ee1121d3959654729776.jpg,2cbfe1e6ecc8b029e2d35c1dbd478bd2.jpg,efbdf921e26f585f7eefe50fca94fd1e.jpg,3c7764c9593b32234a78f6fa7bc21aff.jpg', 'Food'),
(228, '1c0ccddbbb75b35d08be27b5b35af44b.jpg,460b36b68f153b8036aef167a9ed3784.jpg,c31034e83d234c6a0dac5a963a4629aa.jpg,4a5804ee2f82caf37d595d82cd14192a.jpg', 'Fashion'),
(229, 'ca479913b6855d387aec7665dfcf656d.jpg,1f630c1c4a396a89d216c4d33f7817bc.jpg,320602d3a0a98d870ffda586d329626f.jpg,54d91392978de565bcbddaecf35eff64.jpg', 'Food'),
(230, '14e8cacb1c99c92cfb1c96dce4027eb6.jpg,ef7a1085cc77f83928419416d1ee5279.jpg,994866576fb9f078d764cb4b7f21fbb6.jpg,379c2571662e5ca0942aea82a97998b0.jpg', 'Product'),
(231, '2b2931db884d0da1c98e48485713ccf5.jpg,eac729c9065a4b5cec1ed9226be8cfb4.jpg,2b37b8bb8b004a9598c16f0a258c64be.jpg,b44e9d87c064a88e1451f598dd5c776b.jpg', 'Food'),
(232, '72871ad0d634c81c6f976ea141925156.jpg,e58ed50c265d9b01774f04713b877615.jpg,c3ef09a0a8b21bd3f243a1ea65a75b41.jpg,d57a435e039e8dad9cea9124502f00f6.jpg', 'Portrait'),
(233, '6ce7407fdde794bb800a18fac43dfd6a.jpg,4522a70331825d534b3005e14d500375.jpg,f84c1365486cd61e0a736957d68dbeb9.jpg,ceca2505f2e100f807057351418118b7.jpg', 'Product'),
(234, '939c52fe5f82429b60eaaf96ad28ec01.jpg,5820e8f27c4261bc2e839c7240f48ed3.jpg,afe2273a1043aa29e6cdd5ce1467c6ed.jpg,3f3bb422eff11b003644f081f397f777.jpg', 'Fashion'),
(235, '51976b83f90bdeb07a4a0f445eb61850.jpg,5e68bfa22358a605025df75e7633e912.jpg,823f16aaf15b62c41ea7d3c93cb8f799.jpg,4f85bd40783c5d3db919fb9ad4b69cf3.jpg', 'Food'),
(236, '4125b398f6d6c2a33acdc576164c4a9e.jpg,c6ac88eb485830f592a9e2195dabe14c.jpg,2be382c1667a51f8741a5defa330e010.jpg,175f5f3dd63a088c14cc26df5a327ca6.jpg', 'Product'),
(237, '122238d5a2d24af576bd3a3320372a10.jpg,400d5dc2ce21787da5ef7e87b84aeaf3.jpg,81b74ed7e485f746210aaf71a975b2dc.jpg,2ea1a4cc233ea74d4e812a61525d0c1c.jpg', 'Event'),
(238, '47f2665fc699a229f5059da7cd0244f4.jpg,d2c12ae4884d35486abcc46be12100fb.jpg,a7e8c241a55ce76dddb82e6e509fa333.jpg,62d3808675507ad4b05f63f6d1f3e73b.jpg', 'Family'),
(239, '550cfca7878324f2b6a0cf2e92695165.jpg,24877d8d4e972825922f0d7dd654f724.jpg,89b1c18beedde240969f0ac320961202.jpg,e4c536fc4abbc2bc43e8a4cba4fc7668.jpg,597ec0db31959008bc4144a8ddf6738c.jpg', 'Product'),
(240, '103771e8a5c6cdd33469dda51ca2b09c.jpg,4fb1de6d17588c399ae2b70760209cfc.png,eee08c2a33e3deb5c2d074db912fb319.jpg,464b3dd99c25cdb6c272411fb360fe21.jpg', 'Food'),
(241, '4d9b56a0f0a6664850ec1846796935f0.jpg,f4a8118d9c10ee84ae549b32a4739616.jpg,a7c07d3e87c7c02f69e635d3bfd59c6e.jpg,fce87e5d1c9ca3bab64d419a1403d1e6.jpg', 'Baby'),
(242, '92476f5878bd42559ffbd9cdfb1a5b7a.jpg,dec3fe394244fec0391d149b52ce5976.jpg,959a75c9c26f375df52257e043636a23.jpg,3e2c00780d2f321c27d6a5421505eb69.jpg', 'Event'),
(243, '6051617b7304d639ae8fd8d041607925.jpg,3ca440084b791c78299837be49653f7b.jpg,d8663b23670dc9268cfd3b5964c02866.jpg,f73bf738b787107c83c475a52519e697.jpg', 'Event'),
(244, 'e32553f63504f9c5a65ecd4de811af65.jpg,0f3dbc923ed97191cf7634d099045b0f.jpg,de5745607c4e6faba5e892dc60ea6b79.jpg,00bcddbf97d8d1ae9f6252d32476c992.jpg', 'Event'),
(245, 'a47bce654f9bd658b8fe3eda826e76e1.jpg,826e190c46320b9a0a2e10b7d0e1ae50.jpg,d54389da129700c8ec5831c10fbd2a39.jpg,1702966766030482163d299362f6403a.jpg', 'Food'),
(246, 'e1234bb0ed14f0bb8f2fe37fd1a94920.jpg,5557b66f58a2ce6b636506dc8cd9c921.jpg,3736423ee2b269a2dae342c09e5622ea.jpg,ea3b17eb2c070ffc4d690edc45402fd1.jpg', 'Wedding'),
(247, '3dff49b41dc518bcef5e1f74251f2bdc.jpg,6cbf7ee372d6e392b01a5c11a376a5b5.jpg,148092af5e605ef0e7b951f4649c31a4.jpg,d5bdc005b2b66e9877b27ade19e72ff1.jpg', 'Maternity'),
(248, 'd61364028790038532335f92bc255c89.jpg,0ae1d9496e59f26eadf1a56015ae7283.jpg,597127eeea5600c6ccc65fb146c3ff65.jpg,77d573cbe18f0c6347dd0fe130c8d52a.jpg', 'Landscape'),
(249, 'd1512bbc72858ef257c0f83870304653.jpg,943436ed53fc8bfe5684970d3466d44b.jpg,d768b76ad910ca3266ab7a001a747042.jpg,f0140139f79ebfc99fa47b8fc1ed190a.jpg', 'Commercial'),
(250, 'cfcda048f50a6de6be4b5db2169ddfc3.jpg,95eb86bc315a210bd9003a1cdc055bb3.jpg,911429c6f1fcdca9a1a1733321335a43.jpg,d13ef54e92c4f78c23f2bb39207dd2be.jpg,51010411a0d3d3a7d5402b3502fb4c93.jpg,4b39a288835448c5313d040324253b60.jpg', 'Event'),
(251, '12510e323f2abcbfc33508fdb329756d.jpg,a676f7913903bf899fabd6ebbb224d56.jpg,493c4d79359890446ec313b2b416d896.jpg,bf90179a5a5d85f9dc3ac4baa4f7492d.jpg,9cd89e71af2440e89448d13b367e557a.jpg', 'Product'),
(252, '0b661e84847f9ac062313f09a31fb7e3.jpg,cfa9e40b63652458919ae5bdf4feb9e4.jpg,ffcc050748746b80f9be5291752034e8.jpg,1f2e56c55ec5e34338fddebbc446cf81.jpg', 'Event'),
(253, 'a66352ef91628d853df405c41480dc49.jpg,640876e9f3281c82b9958875c0d7ff64.jpg,304fa9b0f54f7763efa09192277e751d.jpg,7ef751d73c78d1dd9e7a27e4ddb9aaa8.jpg', 'Event'),
(254, '5f574ffc1ad4ccfe30597d922d04de54.jpg,b9227eaa5f9b0808cbb8795577dbcf49.jpg,14883b4b645566738e5e365ef991e6a3.jpg,f30f73dabf42943e43d42207c4572558.jpg', 'Fashion'),
(255, 'dff24eba759de16abb210133f0abb860.jpg,ca0539ea852a8bbdcac60499c559a997.jpg,4f52ccddabcaecac05cb724a63d5d51c.jpg,cd09836e5a18d9f1b834883ac4fb5cbe.jpg', 'Event'),
(256, '87c4908126a861812e45053247666338.jpg,0ab36e8c6df436ce6eb80b7793b7fe25.jpg,18aebc5b43e8cc34d69630d7897950db.jpg,924ce09866f6787e1668677a6a64a830.jpg', 'Event'),
(257, '22733d0191fa91868eac3eeaad4115a4.jpg,a91cc2648aedf8842a32fe47ce7182ab.jpg,cb134b26d0c65e59004142ec0270ae93.jpg,dc6bbece47de4ffcd3808128617e1001.jpg', 'Family'),
(258, '40b3d4f9f8fa9d94edbf0c438d0a7741.jpg,2fd2a08097c3b2978ccb3dce283d34df.jpg,f29a8d624c8c1692459afe88498a276a.jpg,4a78f4da0b12a342d425aabdc7e38084.jpg', 'Event'),
(259, 'e3576bf24c760b68eac46441b18599a2.jpg,cb67fe6eef4cfb82162128b90f70305b.jpg,0a347f954d4dbdb103e286b171c6cbf6.jpg,46b216cc2e6d84a8d644a9d30b925ef1.jpg', 'Event'),
(260, '2955c69574865315d6da9ce0143c60c4.jpeg,5056ad0439309c724a7ddcd258c9fdfc.jpeg,b496cf8001b1a0d66b4f61df124f335f.jpeg,2586cdde183d98b8187d975f35fd19bd.jpeg,2f058c7ccf69e657df63abb64da11fbc.jpeg', 'Event'),
(261, '06f6cf2789a7f558344ecb9efd964b4b.jpeg,beea0ab8d9373e415278f6fb61e18a1c.jpeg,93ed7d68fc5c995788bd6c52153c41dc.jpeg,9cff0b6e73dec03fccb0102ec98774f8.jpeg,57d5be2c6dda7e5e1e507d43a675da65.jpeg,051e8da9dc984d7af6361bfec12dffd7.jpeg', 'Family'),
(262, '8030bfae5b278901dc20fe978a54982e.jpeg,d637459814e5a2615b5c554c7ac1de62.jpeg,c71765dd207074ae6f0c0186e35a4c0c.png,47d0d448c3d6231cf58d5abcf2d50835.jpeg,721496833baa7bc988a9662e3ffbf59c.png,aaf7ee1d3304b1906fe4b8ca7074efc6.png', 'Food'),
(263, '881ad473e4ec740c55900dd725efec81.jpeg,4746d59ef6fad3e68b7693d1e3976d9c.jpeg,411aebe13f43db46470bd7be996e410f.jpeg,7b11e4b9be2e3303b65b812bee14b1b4.jpeg,b116d26dac7e1f2c99039ebed8016096.jpeg,8b3ec1c8e26c10e941030d2c2649ab3b.jpeg', 'Portrait'),
(264, 'fc0484f157ea682dc5c310ac9f4417dc.jpeg,c82946acd56de8a7ee8b5659893a4588.jpeg,6040e862b2c370b3773b008544389c39.png,25a50a7d85754d08656eba5e7acf5d30.png,de5459829c2868d547afc7346df5394a.jpeg,ef1f4de8774f4800d6e7467a983af418.jpeg', 'Fashion'),
(265, '425ff894948f2ef0458f6f1729d14a6e.jpeg,0e0c415e713b0ff812ad2eef07eb6a99.jpeg,a649d1d9159f03334a97254ee35a3a05.jpeg,198f8aad5e0dc7adcbe48d9c896452d3.jpeg,dd3909bd7ad61972ac15f473d89a7cbb.jpeg,8a0804010cce645590e53b4900f66eb4.jpeg', 'Product'),
(266, '2d7804dd45e82ff6477bb60c4b0de2dc.jpeg,1bf10db4cbc05fd4653b962d89e552a5.jpeg,2567ccdc079dd3f093dabff6250f4e08.jpeg,55a77a46b3f8372680dc7a5c9c7b8151.jpeg', 'Event'),
(267, 'a4f07e2274cb3110e06cc13c4c3efbac.jpg,2e3855258f7101ecf977285e8daf7fe9.jpg,eee261361e8cd4f2918b0358a266c6e7.jpeg,01c735f00dc76bf2a9fb072a225694ad.jpeg', 'Family'),
(268, '7f18dc0debfa808d06a2c916d6594920.jpg,8aba826a4bd86ba6b1f0a4f2c78bdce1.jpg,5ee1e0a2b964d3ee42b9d19285abddd9.jpg,a5aa6ca8ca9062f272220352ba5cb477.jpeg', 'Product'),
(269, '12eab911e3bfd594d4e780a17455e416.jpg,01cb8d98bbf4d8377b00f000ced92c3f.jpg,6c87703641020bcecb7f0dce5d97b711.jpg,d480285a63b1003ec4e1eec34facd093.jpg,977e0a4b0489956b7b5f7049da2acb94.jpg', 'Kids'),
(270, 'c3b08a148f64d78803391a6b32d50164.jpg,1442ce46935b129e9748f6150905f7a2.jpg,1e37ac1c4ab182e69bb01cb708c7fc85.jpg,09059e75b54e546a7b0409bbef5dd1fe.jpg,d95b8011eee7bd372e4b63af09dd1714.jpg', 'Media'),
(271, 'a8d4370ef0eb6178f530736aef6da718.jpg,2846c0ba15401cace955782d547aa1d2.jpg,376ea34f2e52988ca47f0e09969a364c.jpg,d2994f3263590889ac565eac4b82b843.jpg,0afd4ae3140d6ccaca1c78c85bb874c1.jpg,f7007d5a934fd08f2f8944c688e02ea4.jpg', 'Food'),
(272, '5c2caa711ceb01482d23bf7455c45d74.jpg,b63b50e898f6b10e5490a50c41d46dfb.jpg,c7e3f00c753b06b84ee0535b7aecf817.jpg,50e452a02a74c48ddf7e57fdf561824e.jpg', 'Real Estate'),
(273, '6b57a250d84b45c0d338ce6a5c50a957.jpg,b24f8abaf24b5ff012594679d3c9eb5e.jpg,94c92ede9243edc32bbd8f4b4527a865.jpg,4148b575d281faca3e1d568ac9c25fd0.jpg,eccb1552ffcb2107395f1730276d0b27.jpg,91a61bb135b31777b3c76cdfba0afc62.jpg', 'Wedding'),
(274, '94c7472769bc5fbe2a7532937d56c0a0.jpeg,70dd24aceb8fbb6691a2ee90d71a940a.jpeg,54635e1cc609bece859a565a4bd9b52d.jpeg,8816bfc59d19df0cb15458feb06e443f.jpg', 'Office'),
(275, '9998e22c9d36f04598d573cf8382ea0d.jpg,8709be279994de404967e31aef7957b0.jpg,698f1cf17fb4ac26757f194fed4d5d37.jpg,69949268adf5ce9db4ea2df6fb09c922.jpg,3eaa898df5c5289635351ab74d7a6820.jpg,adb86612e55903da2adc5561321fe3e8.jpg', 'Fashion'),
(276, '55b2bcacc707ec90466a318d359c47c1.jpg,d40759fbc7125b30ffb85db5dfc35242.jpg,6017f64ea0dd17d02ab256dc9e2ca16a.jpg,a7ee8e52946e89a41932093f968ed437.jpg', 'Wedding'),
(277, '4ba55930dae65c7fec0fa368c5ad55f0.jpg,3a9957ad0b10ee0f9532d2c5d60a5f80.jpg,58f05a121a2b617cfb8f1fef2ab8009d.jpg,3ef9cac0d99230f0cc4c6e9630570027.jpg', 'Portrait'),
(278, '52ea12c792a281291d734888c5681f55.jpg,c3003e05328ee31e14254aecd52d9f4c.jpg,309998598e33f2874a666ee86169f3c9.jpg,0fe6485800134ffc7e01aa498df904e8.jpg,9e7ac35bd65a9ffeb34cb35c3e5faa70.jpg', 'Product'),
(279, 'ef702897e29e33c84c1b2d50d9287a9f.jpg,7d02443993050bc715c05089fce4028f.jpg,09651ef7329fbac97c58d70fc5447439.jpg,cf97109d31c7f642e97678039402eaf1.jpg', 'Event'),
(280, 'a1aaa1b1a6756bb2cc26bd9c6b305dca.jpg,e6a26005f798932f1a3b63078100db24.jpg,a23ad9ea094ecc37fffd74d87821cb3e.jpg,16250cea8f95b593e3eb7a3cf57351ad.jpeg', 'Product'),
(281, 'd4a9d6685d045c39b1d65b1ba7293fe7.jpg,ef15c500334e3a9f1db92ac6114b960c.jpg,46228ac0ed7cc87ea5c2a0ddba73d9c2.jpg,a08117f1b487e791115c52dcdb1d495d.jpeg', 'Product');
INSERT INTO `multiple_image` (`img_id`, `images`, `name`) VALUES
(282, '6511ee0137680cc5770414d125fdf63d.jpg,41916fd0f5af2097e684732ede87bb94.jpg,70d1dc283a4d55936b550118558d1bf3.jpg,509eb30f135fce4c91a8866172b3e4af.jpg', 'Event'),
(283, '0426f442946627bea792b91c515d9e54.jpg,88db43926b967194d76b8a4aad45ab82.jpg,548ee4d7cde5331929b268b4aa8fe140.jpg,37eee36365450cc53f2a9261c8459c63.jpg', 'Food'),
(284, '56d862e829dd601727238de50ab5b91d.jpg,92777b71b0f7005e92e60ace3ca055a0.jpg,4a8418450a5ca510390d799593c8e3c2.jpg,9a66ee0dcf3a992330dbb14b27b9a317.jpg', 'Commercial'),
(285, '13ae8dfab4157f04722d86aea0239f1f.jpg,ddfe1b3898ce4aa8bd36d3cb132d606d.jpeg,a45062f48666f2d5b2711544cad1b7ce.jpeg,c5fce31832d70f827126f2cb644ab25e.jpg', 'Portrait'),
(286, '2b72c43aa96d941f09d2a9318931e289.jpg,ba76a2ffbd6c1ad6af92d1acf7b0acbf.jpg,8c9e4ccd2e33a4da22d2b805daaf1204.jpg,99eb3f0f45aa17ad1cc2972247220875.jpg', 'Kids'),
(287, 'af6279bb28e3e6534fea30e76d3adf51.jpg,1b8605f662934a7be4f7e5520a12e9ed.jpg,15dd7042528b41c7bc86ada90ba67f95.jpg,f1a9289847d61886d7b6b5619b78f6f3.jpg', 'Fashion'),
(288, '1cd903d5548e9ef9d776fd8f15ab5bc3.jpg,669f20bab36946f927573d9445e6020f.jpg,1f655e7b9bb647a1a0d95e5ffae6fbf5.jpg,bd7028966c678f87315af7b510e44f28.jpg', 'Landscape'),
(289, '268643184997db863c449e018d22c874.jpg,d2ff400ff6b1ce866a8b5ec100d0dc8d.jpg,74c471ee6abd96d63eedba075448bd28.jpg,c694fb207a26c476820c8468f43d3b00.jpg', 'Event'),
(290, 'c0bfc584f635f8ee2c1cec97cb801ae6.jpg,e506ebab5478d13475cde2c6d935f462.jpg,4798f70e6c136d3fcce5049ac57312cc.jpg,95f5b99c8d06fe33f27a2b897c338531.jpg', 'Family'),
(291, 'dfe59751cb5ca4a75e23458a9fb2f2db.jpg,cfbe2d42b252cb820520d67567de1079.jpg,6b2e056fb5ae34493991c82f6e1395b5.jpg,f81ff707e3d601b0a0c783ca9554494a.jpg,f4e0113ce9aaffe9a21041599b499e2a.jpg', 'Event'),
(292, 'f49d66a55a67d77dc1b9ba032a9f8bc3.jpg,2a86a2fd42b92d89c5618e4549a7830f.jpg,e75424a931a66688a7bb731c3429b6e2.jpg,520bafcdd2f8fdf1f1184051698aa250.jpg', 'Event'),
(293, '8bfe352c99660769a65b74f8fd50a5d0.jpg,f0728cecbd552439b3eb78b205166683.jpg,5e3c8b09831baffa8b12dfca24f8fbbe.jpg,d40038893221dd99b1a72736b75020b6.jpg,02008a47e4e76ac5f9ed3c9cab5075ee.jpg', 'Family'),
(294, '5160b8e38db83e0635779092515744ba.jpg,1c12b7ff27356d7ada620ee5451a9d16.jpg,2a7e9fcdaee06faa83ec34197b1e790a.jpg,485e439b80d37aebc7296970558324f5.jpg', 'Product'),
(295, '220ba4e3907117fb0f4f27f93014f4b5.jpg,cfecd483ff4ba6e3e7aab335a7ff1ce0.jpg,fd6e83df51c2729c03170d21b511f839.jpg,a3fa2f0324d88de3e00fa045b7c370ec.jpg,07d6ed82e015e757f9d103e0c6138b41.jpg', 'Family'),
(296, 'f9168239d4a51a2c2680d923cf026a10.jpg,809c8244b156f0d4c7a3dfe769a9c158.jpg,355b10d2c659ed2b49dc1fd5147fa147.jpg,8e378add24b761475870ab76b24bcf3d.jpg', ''),
(297, 'c35cc8852927578855c6a98241675221.jpg,656ccb2b46ec81a32c9f95c2f1410005.jpg,63604d472965b820ea65734c13f2e2fc.jpg,2f823eec3c313324d1b97aacec86b048.jpg', ''),
(298, 'de1df39977488de15285044299e18ff8.jpg,9e1cc432b9b579fd6dd773506c60977b.jpg,922b3f760530398d144fb6e070fbec3c.jpg,4923e6343fdfd81df27b5a80ac4b5d4d.jpg', 'Event'),
(299, '88d076ad18264a6dfcc012f25f0e19d0.jpg,9bcf9b21ea5325fcf23363f081ccdcdc.jpg,aaa8bf39d5e89a89dc13e69432b4e09a.jpg,3a55ff5cbbb72e99d9c8cdc7bc97cfe5.jpg', 'Event'),
(300, 'c6aab191275927aee4fd1bcb9ab0c5c9.jpg,fb2ff5a51094f3201e7210383f13da88.jpg,5d85b44e88f4aae8419d354771237420.jpg,f38b6ac6256ae19d6fa53a5f525a0f3e.jpg', 'Event'),
(301, '184b7441a2a446f4a705bb658c4e64f9.jpg,f46f693e6b8d745a835398c7147a98c4.jpg,690475f841e473919a75250bb5fab1ae.jpg,6d41f3a9244f5bcdf0d36698381ddffc.jpg', 'Family'),
(302, 'ac53a418104427ab92184aff6c95098e.jpg,dc34807c67c2810f9c6edd2a7fadb869.jpg,71ab7f758f2b4db59c04794fec97fbd4.jpg,16a9098c926c35dc13087f4993877e6b.jpg', 'Product'),
(303, '3b12edf68e0784a313fabe8ee7ca7503.jpg,e6d3aa95f10eb1a54f589c06bd4850af.jpg,fc681b3d954febf7adeb43de76c20bc0.jpg,6661f3820a402a78f4f2449d4a8214bd.jpg', 'Fashion'),
(304, '302cd121569b862a9a38e441c840460c.jpg,07991e5ec0fad9df56aba613a56b76a3.jpg,24cd7c61723f8cf3903a3d1829c764b7.jpg,9248fb4ed6085e09550af73286802bd1.jpg', 'Food'),
(305, '6e532686f7000c29412228006b364351.jpg,e074b6cd84bcf88384367cbd974b014c.jpg,266267ea4f04c7018f546df753b9d796.jpg,5a4cc8b62d8109f640650e836a2c165b.jpg', 'Event'),
(306, '466a7c4f4caa7198f6927bab530f46c3.jpg,2c3f8897ea55cc1094d180c70196f804.jpg,91e90b79626bd6f9ac18ad060bd2bf89.jpg,e66805c84a8865deb79a60c4ecfbc72f.jpg', 'Product'),
(307, 'd7314a5a43c89088c4a44d32766d805c.jpg,bb1386ba3b713584d8f2f8358c596928.jpg,adc0763b91b1c31a5fc162e9888569c8.jpg,0387df5f4781fe734236be4436eae968.jpg', 'Food'),
(308, '1328b1acf2f86a3a82f8f686fa6f003c.jpg,434b4dcbac301e703979b44efdf7697f.jpg,981ef0565c34e464a5f27ddb8f30b767.jpg,b1969ac14a46996c7784abd7d114c3de.jpg', 'Portrait'),
(309, '', ''),
(310, '', ''),
(311, '5f3c9181d202bef407b9fbc4c23307fe.jpg,304d6a3eaf3323af5a93a72801cd1e76.jpg,4f2521a011b12287df719bd0eaf4a852.jpg,e9309bfafbd9e4aee384625d421cea1e.jpg', 'Food'),
(312, 'fce4596d3180a3ac1a960d4b09543b28.jpg,231d32db2098972e4ac911937b59c2b5.jpg,18789c321b4fb8e031d53d5be0a9198b.jpg,c5b246966325b63e0c661c6bcd2a0bf3.jpg', 'Event'),
(313, '7e45216741c8a5c3cacd699e8028af78.jpg,fac7c029d093681abba6b681165ea2d9.jpg,9b835c1abdfdd767664ae8f057f699ce.jpg,4004b1ad99c8f4342fdf9eb41f469794.jpg', 'Event'),
(314, '300f4d7cac9512497429bd1f5ac83ad8.jpg,c9000d5e2531682ef778427b999222dc.jpg,7f27a96abead896bf8fe0dd78c37c886.jpg,a4e1954ea5fed72f05ac1406b37f0f23.jpg', 'Food'),
(315, '90fc513b960c69b3c26778f6f2e3e885.jpg,385aeda5d859897cde5186ca7dba1915.jpg,663c1d731832eeda127cddcba7cb8d03.jpg,5180731d413e6db0011500bf8a346f58.jpg', 'Event'),
(316, 'a988f849f3faa39d1bf95a410fe5db55.jpg,8541d34aa6ef935e27b34491acdc39a3.jpg,95654165570c025e244bf0f0354a423d.jpg,8ce97910bf0d51dd2ee5706a38b7897e.jpg', 'Family'),
(317, '7308c0baca471ffeaa143ac5142cc83d.jpg,031dbb3b64b94d1e0ca9d40dc8626cfc.jpg,01f6637f750727b5ed577cc954478481.jpg,2acd89043e4823b68b3d0732ee4faeea.jpg', 'Product'),
(318, '145812b5108caf2fcb246982363d50aa.jpg,60a743c730fe2bdc9330e7243dde2039.jpg,882aea5c90a09e2cbd18a18da90d37d2.jpg,4ceb905ba99401fd20a2e2f1f2a56cc7.jpg', 'Event'),
(319, '2fb96a0fdaaa02d35cc6b7347a505825.jpg,a453884be256babf7d8614104d744b32.jpg,b203423eac49e2b88100bc9089826425.jpg,17d9d635bd1724dd29841308b7ce35a3.jpg', 'Event'),
(320, '003ca0ce330daea105341b5635539939.jpg,4dd6ee0e2f18a4415aa9652c7914590b.jpg,ac87e05bc2bf1b733a9fd987825dc86b.jpg,fcb30d69c6f356eaaf1bfc267a5ee0e4.jpg', 'Family'),
(321, '7058b571faaa29f902078b8a9fcc2fcb.png,e6391c5f56bf5a550597bf0d5267b5d9.png,ebef1035cf4d7cdf546e9170b767d8a8.png,2ece3db2786962fbb82c5e6754348473.png,593304f14d598bedabf690be2ccd07cb.jpg', 'Event'),
(322, 'd87e96e47fa7bc3a1987d209b7ae77af.jpg,a82918a4cd05eb847af502c8a6009c79.jpg,fac93533da72d2db9aa2e9ed8d30d869.jpg,ce730a013b0acba9d8e7e25559bf3a35.jpg', 'Event'),
(323, 'c259e6780d77e73fd8a35538fcd6f08e.jpg,c28c42d580ad11bc2459bba3cb1104e1.jpg,c3c0d70ed36a299d5d48dc178f10f690.jpg,5f206a1141ed212a48ffebeb5bf02ed4.jpg', 'Family'),
(324, 'e465d76a1de70eea3a6f1e62fef74ca0.jpg,f998ccb9da58939fb57338064cf665b9.jpg,65e0282b9e0b651cb43719dd66cacca1.jpg,96e47387f027360806f51197822ba4bd.jpg,ae1442abccbbaed1c66220851857ecc3.png', 'Event'),
(325, '09fd6d368d298955b32dcf0741a283d2.jpg,dd7375d3877bdbb8a59d6230cf2cb2e3.jpg,5979e6ebeec7d3d3318dbdfe4bb04353.jpg,fd8c0ccf95b523ca2fcb26d2a318e696.jpg,87ee0c41c53e20db5d7ebea5a80a0325.jpg', 'Family'),
(326, '7fc0c47aa06b1222f5b3c24fc63b65e7.jpg,5917e3ebb24579e84e228bea43de9b5e.jpg,df7bdb62b6c9f9aeab28ec6b3c7e1167.jpg,fdbec8ac2b584abdc43d7ed4ef48b5e2.jpg,84cd89a6a6eb70ecd8620fab2fe1ec84.jpg', 'Wedding'),
(327, 'bc2ebd068986fb20d627f36eecb54b56.jpg,360568c3df8ea653fced01d2cbdd6aeb.jpg,f9a521353bc2d072a552325b63704951.jpg,77d8a1c4ad671d9aa9a4f82ad266012e.jpg', 'Event'),
(328, '3f9cfc28e0371b3cd0370fe61abcd50d.jpg,4bb602898b4b8d9bcadd0958f9141288.jpg,108126ef3596e9a961372381cb50d2af.jpg,93410bfa4f7e2bcd1d71f3d341e6dca5.jpg', 'Family'),
(329, '4b2280e311e5024199986c9c76a1b538.jpg,2934d9915ebd81f1b3eeaea206b64ac9.jpg,59b2df7a0d9143b62dd9b8356dcab6bd.jpg,f0d3c74f69fa82c4f3b3ab0a29825c86.jpg', 'Family'),
(330, '10e67ebcfeafcceecdd16fa2f7f3c07d.jpg,71620fa14d59a02e0d79d9dd44090b64.jpg,420425184dbfb4279b600a037868d447.jpg,c71e2ffdda28d298873feb267599d1bb.jpg', 'Media'),
(331, '502e6a0dde216c3cc496a0e59acb8f86.jpg,f88433b52192b09cfdbd2db11734d41b.jpg,e72fe2ae33b33aebd4cf05a4723f72fa.jpg,6b76bf0ad241d08a55cc15a8dac0bf41.jpg', 'Event'),
(332, '3d3df7a93ce8d1693698e02717af936f.jpg,ccdf9397b96cec656ae022fbd7a23bf0.jpg,bcf5e9714e1d0921b6b9ee970a350437.jpg,6eab3aee20de07d5a7dd3d2b48e13042.jpg,dd6c462d1cb24cb16737f4b121b8941c.jpg', 'Family'),
(333, 'a7ff2f6cb95426efb461bd3f3a5e5cd5.jpg,79709eca8693121dde363f80dc2265fb.jpg,a0ba9a6c7fc1976a44baabff79d679e0.jpg,5613f3e848ad7588e6cbf6278be18a60.jpg', 'Product'),
(334, '', ''),
(335, 'e4457c79996e10691252c5bdad90974b.jpg,ee9cb1597f0ce69c96268618a6e524b3.jpg,74156380e93d8e34b409bf8f0506d097.jpg,0ec38b606f9bce4f7ae07941731649cc.jpg,768245a0cd1d525958d9318d4816db26.png', 'Event'),
(336, '881c94f12ee07d2941e2e001cb93c4e7.jpg,6b0859b708247219aa771aad41832f49.jpg,128526b86839bf893e0081129ff8c678.jpg,aba115f814c08be9d442ba4620c9f4cd.jpg,e22868896f1dd395d93c14dfbacec1c0.jpg,80d0809d20d1062b787b7ca799375268.jpg', 'Product'),
(337, '165d82864795fe4ac82743e756f73679.jpg,2b21d3a81217d94f2cab4f5308cdf921.jpg,46baed720848a5caba117cc7b7373f7a.jpg,52fa1aebb778026fbe492e1ae53d4d68.jpg,fad7a9437756782db500f1a9023e234c.jpg', 'Food'),
(338, '9a00b3985fa105847ed62e0160ea3b21.jpg,0fdfbe1a89b4085d6904151f09659647.jpeg,fd9e4aa8741e1109ea3cc986718196e4.jpg,59ed78354e7fe7e3ad3a3a7c44528bc7.jpeg', 'Food'),
(346, 'b38d77955260f922f98e58f5a56fd3e4.jpg,82dc05f21cd43fc36a9fadd266995379.jpg,a619c54c9e0c0edee2fd8ed82266aa6a.jpg,12cb4fdb273b1d4568d2c7b27f2fd4f5.jpg,96c4b2bbab5155f22aa5549d0badcee0.png', 'Event'),
(347, 'ccd2eb0f892db66393d4c9f7ab48d514.jpg,894913dadfaa1918f6410ce826dcecdf.jpg,91ed48cbe29af80c4981aab2576bdba9.jpg,dae7e1adb0b782129c659ab0bae30917.jpeg', 'Event'),
(348, '04294f1e90ee92925904885398e6df78.jpg,e0f6a5862701b8280d0149144a21d706.jpg,712eca23df1d81a9162a65b7de1ff14d.jpg,c1442295543035efc07c749168ad59aa.jpg,944be813fda212a6e2937240e6cb331f.jpg', 'Food'),
(349, 'd86fe5d06cfc4999c1fe1ad5f1504bce.jpg,39d20dc15eed720c454853323bb98304.jpg,925d2721708551ac0b899a51aaf913e2.jpg,69e460b1fec4c7cd375f98f6329fa95d.jpeg', ''),
(350, '70d3fe702e0f950672e6be175854dbfa.jpg,aaefb837145ed95d458ad201e3e09fdb.jpg,b914a5737db0b58f6fc8294ef95aaa1b.jpg,79801ca476e284404ebe266b592f8f24.jpg', ''),
(351, 'a82bd351047b2dbc296ecd6691769144.jpg,6aee34964aa53d28b969665d211438da.jpg,c6f1acca5b6558c76215c61089bcdf76.jpg,0e45ae01e3f6a49b91f28febb50c23b8.jpg', ''),
(352, '6a1ab51f76ffbdcc958b77e45ef68f38.jpg,0f0709a51071010772ede6e57e28261e.jpg,6602d0ae887bdb106b9ea0a83125fdb2.jpg,5c4e6226744305ea67c3cd953ba418a0.jpeg', ''),
(353, '5b7e0167c09af40e98512b51e3e1e449.jpg,87180a26f7c6c3cfe293f32e1e41cfb5.jpg,f2ca7f3a519c28f238f16119584925de.jpg,87c939a1dec6844e30eee29f12635daf.jpeg', ''),
(354, '649617fa5d2f72ace5152b4ffdb7aa9a.jpg,90250d55323a507271cc5accb807c8ae.jpg,c75587c7dc1df05f919ab95daf23a4be.jpg,b9bc09f9639dc8f1bc2e353f1c699935.jpg', ''),
(355, 'dd2c3827de2fde717a6951f967c08ccb.jpg,19c5228c772d65c0bfbf6db6af21a690.jpg,2711a62300adcefad16dc419e2d254c2.jpg,d06178f3edb0975f6663643e6e3abbb2.jpeg', ''),
(356, '4b837d122abec6269933965939a2d3d5.jpg,55efb89308f07969fabff76419d679b5.jpg,8b49e39e70cc81a7d5cc04ed67300c2e.jpg,759e63a7e27a35154d5866ab4144947a.jpg', ''),
(357, '9d22463f3f09f6abd39830694a9d229d.jpg,2c211adec5efebe80cdcbf20de9c64b5.jpg,cec25309e69588e13c559a8fe5743b09.jpg,58f40e2b836195f7b8cde0e3146d7d80.jpg', ''),
(358, 'dc46232bf3db8e0402b86903363565c6.jpg,67d23104ee3fd30e375bbc07f436ac8b.jpg,5975abaa602e4fe771cf20474f21af05.jpg,3a20d76ad7ba2082cda99847bc8c5d59.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` bigint(20) NOT NULL,
  `package_title` longtext NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `package_desc` longtext NOT NULL,
  `package_image` varchar(255) NOT NULL,
  `packagefor` bigint(20) NOT NULL,
  `shoot_type` varchar(255) NOT NULL,
  `No_ofphotos` varchar(255) NOT NULL,
  `duration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_title`, `package_price`, `package_desc`, `package_image`, `packagefor`, `shoot_type`, `No_ofphotos`, `duration`) VALUES
(10, '1 hour value shoot', '1200', 'Up to 3 products with 2 photos per product', 'product.png61027c2e66212', 56, 'Business', 'Value shoot', 1),
(11, '1 hour all inclusive shoot', '1800', 'Up to 3 products with all photos included', 'product.png6102b91e1e6a7', 56, 'Business', 'All inclusive', 1),
(12, '2 hours value shoot', '2400', 'Between 4 - 6 products with 2 photos per product', 'product.png6102b9979af95', 56, 'Business', 'Value shoot', 2),
(13, '2 hours all inclusive shoot', '3600', 'Between 4 - 6 products with all photos included', 'product.png6102b9de09f77', 56, 'Business', 'All inclusive', 2),
(14, '3 hours value shoot', '3600', 'Between 7 - 9 products with 2 photos per product', 'product.png6102ba8250a57', 56, 'Business', 'Value shoot', 3),
(15, '3 hours all inclusive shoot', '5400', 'Between 7 - 9 products with all photos included', '6102bab4c4417', 56, 'Business', 'All inclusive', 0),
(16, '4 hour value shoot', '4800', 'Between 10 - 12 products with 2 photos per product', 'product.png6102bb2e48d08', 56, 'Business', 'Value shoot', 4),
(17, '4 hours all inclusive shoot', '7200', 'Between 10 - 12 products with all photos included', 'product.png6102bb6f56e08', 56, 'Business', 'All inclusive', 4),
(18, '6 hours value shoot', '7200', 'Between 13 - 18 products with 2 photos per product', 'product.png6102bbe7af862', 56, 'Business', 'Value shoot', 6),
(19, '6 hours all inclusive shoot', '10800', 'Between 13 - 18 products will all photos included', 'product.png6102bc1ba1e6c', 56, 'Business', 'All inclusive', 6),
(20, '8 hours value shoot', '9600', 'Between 19 - 24 products with 2 photos per product', 'product.png6102bd58d6684', 56, 'Business', 'Value shoot', 8),
(21, '8 hours all inclusive shoot', '14400', 'Between 19 - 24 products with all photos included', 'product.png6102bd88699a8', 56, 'Business', 'All inclusive', 8),
(53, 'Test', '1', 'This is a test package', 'portrait.png612fc27d651e0', 83, 'Personal', 'Value shoot', 1),
(55, '2 hour value shoot', '5000', 'Two hour event shoot with 25-30 edited photos included', 'event.png6151f2214b742', 61, 'Personal', 'Value shoot', 2),
(57, '4 hour value shoot', '8000', 'Four hour value shoot with 50-60 edited photos included', 'event.png6151f2e0f404e', 61, 'Personal', 'Value shoot', 4),
(58, '8 hour value shoot', '14000', 'Eight hour (full day) value shoot with 100-120 edited photos included', 'event.png6151f317f18cb', 61, 'Personal', 'Value shoot', 8),
(59, '2 hour value shoot', '5000', 'Two hour event shoot with 25-30 edited photos included', '6151f35b61e1a', 50, 'Business', 'Value shoot', 2),
(60, '4 hour value shoot', '8000', 'Four hour value shoot with 50-60 edited photos included', 'event.png6151f385bd0c6', 50, 'Business', 'Value shoot', 4),
(61, 'Full day (up to 8 hours) value shoot', '14000', 'Full day shoot with 100-120 edited photos included', 'event.png6151f3be38756', 50, 'Business', 'Value shoot', 8),
(62, '2 hour value shoot', '5000', 'Two hour family shoot with 25-30 edited photos included', 'family.png6151f40b89b63', 62, 'Personal', 'Value shoot', 2),
(63, 'Half day (up to 4 hours) value shoot', '8000', 'Four hour value shoot with 50-60 edited photos included', 'family.png6151f43d139cd', 62, 'Personal', 'Value shoot', 4),
(64, 'Full day (up to 8 hours) value shoot', '14000', 'Full day shoot (8 hours) with 100-120 edited photos included', 'family.png6151f47875864', 62, 'Personal', 'Value shoot', 8),
(65, '2 hour value shoot', '5000', 'Two hour office shoot with 25-30 edited photos included', 'office.png6151f4d7ef318', 55, 'Business', 'Value shoot', 2),
(66, 'Half day (up to 4 hours) value shoot', '8000', 'Four hour office shoot with 50-60 edited photos included', 'office.png6151f51d5854c', 55, 'Business', 'Value shoot', 4),
(67, 'Full day (up to 8 hours) value shoot', '14000', 'Full day office shoot with 100-120 edited photos included', 'office.png6151f54ec410a', 55, 'Business', 'Value shoot', 8),
(68, '4 hours value shoot', '8000', 'Half day maternity shoot with 25-30 edited photos included', 'mother.png6151f5d68cc0a', 65, 'Personal', 'Value shoot', 4),
(69, '2 hour value shoot', '5000', 'Two hour portrait shoot with 25-30 edited photos included', 'portrait.png6151f738aabf4', 83, 'Personal', 'Value shoot', 2),
(70, '2 hours all inclusive shoot', '6000', 'Two hour event shoot with all photos included', 'event.png6151fa145086c', 61, 'Personal', 'All inclusive', 2),
(71, 'Half day (up to 4 hours) all inclusive shoot', '10000', 'Half day event shoot with all photos included', 'event.png6151fa4132a6b', 61, 'Personal', 'All inclusive', 4),
(72, 'Full day (up to 8 hours) all inclusive shoot', '18000', 'Full day event shoot with all photos included', 'event.png6151fc6753545', 61, 'Personal', 'All inclusive', 8),
(73, '2 hours all inclusive shoot', '6000', 'Two hour event shoot with all photos included', 'event.png6151fc959e8af', 50, 'Business', 'All inclusive', 2),
(74, 'Half day (up to 4 hours) all inclusive shoot', '10000', 'Half day event shoot with all photos included', 'event.png6151fcd93bb4c', 50, 'Business', 'All inclusive', 4),
(75, 'Full day (up to 8 hours) all inclusive shoot', '18000', 'Full day event shoot with all photos included', 'event.png6151fd006f86d', 50, 'Business', 'All inclusive', 8),
(76, '2 hours all inclusive shoot', '6000', 'Two hour family shoot with all photos included', 'family.png6151fd7595bbe', 62, 'Personal', 'All inclusive', 2),
(77, 'Half day (up to 4 hours) all inclusive shoot', '10000', 'Half day family shoot with all photos included', 'family.png6151fdadd76e1', 62, 'Personal', 'All inclusive', 4),
(78, 'Full day (up to 8 hours) all inclusive shoot', '18000', 'Full day family shoot with all photos included', 'family.png6151fdd212dcb', 62, 'Personal', 'All inclusive', 8),
(79, '2 hours all inclusive shoot', '6000', 'Two hours office shoot with all photos included', 'office.png6151fe0297ad5', 55, 'Business', 'All inclusive', 2),
(80, 'Half day (up to 4 hours) all inclusive shoot', '10000', 'Half day office shoot with all photos included', 'office.png6151fe7dae907', 55, 'Business', 'All inclusive', 4),
(81, 'Full day (up to 8 hours) all inclusive shoot', '18000', 'Full day office shoot with all photos included', 'office.png6151fea6eadfd', 55, 'Business', 'All inclusive', 8),
(82, 'Half day (up to 4 hours) all inclusive shoot', '10000', 'Half day maternity shoot with all photos included', 'mother.png6151ff065d6ec', 65, 'Personal', 'All inclusive', 4),
(83, '2 hours all inclusive shoot', '6000', 'Two hours portrait shoot with all photos included', 'portrait.png6151ff47e3876', 83, 'Personal', 'All inclusive', 2),
(84, '2 hours value shoot', '8000', 'Two hours kids/ sibling shoot with 25-30 photos included', 'kids.png6151ffbf947e2', 84, 'Personal', 'Value shoot', 2),
(85, '2 hours all inclusive shoot', '10000', 'Two hours kids/ sibling shoot with all photos included', 'kids.png6151ffe431d31', 84, 'Personal', 'All inclusive', 2),
(86, '2 hour value shoot', '5000', '2 hours value shoot', 'portrait.png615292b869b55', 82, 'Business', 'Value shoot', 2),
(87, '2 hours all inclusive shoot', '6000', 'Two hours portrait shoot with all photos included', 'portrait.png615292e1a87bd', 82, 'Business', 'All inclusive', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pgpublish`
--

CREATE TABLE `pgpublish` (
  `pg_publish_id` int(60) NOT NULL,
  `photographer_id` bigint(20) NOT NULL,
  `photographer_image` varchar(255) NOT NULL,
  `rating` int(60) NOT NULL,
  `review` varchar(255) NOT NULL,
  `portfolio_images` varchar(255) NOT NULL,
  `about_photographer` varchar(255) NOT NULL,
  `Q1` varchar(255) NOT NULL,
  `Q2` varchar(255) NOT NULL,
  `Q3` varchar(255) NOT NULL,
  `Q4` varchar(255) NOT NULL,
  `publish_online` tinyint(1) NOT NULL,
  `pg_profile_page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pgpublish`
--

INSERT INTO `pgpublish` (`pg_publish_id`, `photographer_id`, `photographer_image`, `rating`, `review`, `portfolio_images`, `about_photographer`, `Q1`, `Q2`, `Q3`, `Q4`, `publish_online`, `pg_profile_page`) VALUES
(51, 144, '3879.jpg', 4, '45', '7048.jpg,3485.jpg,8536.jpg,2838.jpg,7555.jpg', 'I have shot fashion, jewellery, product, food mainly .. I have shot for a Dubai based as well in Dubai .. I like to shoot with continuous lights and have my own equipments for basic shoots .. for advanced shoot equipments have to be', 'I really like all forms of photography. Lately my interests are Travel, Portrait, Spirit, Astrophotography, Photo Essay, Landscape. I\'d love to study underwater and microscopic photography someday.', 'I shoot entirely in RAW, basically as a “just in case,” but I extract the JPGs from my RAW files in PhotoMechanic and edit those. Most of the RAW files will never see the light of day, unless there is a great shot that was extremely over-/under-exposed.', 'A lot of work goes into making a picture stand out. You concentrate on one or two items in the composition at the very maximum.', 'A good photographer should be able to know when to use flash or when it is not suitable. Most cameras have a built in flash, but these are often restricting and only light the objects close to you.', 0, 'Ram Kishan774.html');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `photographer_id` bigint(20) NOT NULL,
  `name` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `adhar_card` varchar(255) NOT NULL,
  `website` longtext NOT NULL,
  `insta_link` longtext NOT NULL,
  `fb_link` longtext NOT NULL,
  `twitter_link` longtext NOT NULL,
  `is_professional` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `is_paid` varchar(255) NOT NULL,
  `studio` varchar(255) NOT NULL,
  `expdesc` longtext DEFAULT NULL,
  `workhours` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `camera_body` varchar(255) NOT NULL,
  `camera_lense` varchar(255) NOT NULL,
  `accessory` longtext NOT NULL,
  `toption` varchar(255) NOT NULL,
  `category_image` longtext NOT NULL,
  `accept_booking` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `std_address` varchar(255) NOT NULL,
  `std_city` varchar(255) NOT NULL,
  `std_pincode` int(6) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`photographer_id`, `name`, `email`, `phone`, `address`, `city`, `pincode`, `adhar_card`, `website`, `insta_link`, `fb_link`, `twitter_link`, `is_professional`, `experience`, `is_paid`, `studio`, `expdesc`, `workhours`, `categories`, `camera_body`, `camera_lense`, `accessory`, `toption`, `category_image`, `accept_booking`, `status`, `std_address`, `std_city`, `std_pincode`, `date`) VALUES
(57, 'Deepesh Dixit', 'framesbydd@gmail.com', 9675192887, 'Sector 37, arun vihar, noida', 'New delhi ', 201303, '61274608c7542', 'WWW.DEEPESHDIXIT.COM ', 'Framesbydd', '', '', 'Professional', '4', 'Yes', 'No', 'I am Deepesh Dixit, Delhi based photographer specialized in interior photography. \r\nAt Deepesh Dixit Photography we not only believes in capturing the designs and details of the architecture but we believes in capturing the story in all their structural glory.\r\n\r\nWe provide our services across india. \r\n', '40', 'Food, Product, Real Estate, Landscape, Media', 'Canon EOS 80D', 'Canon 10-22mm f/3.5-4.5, Canon EF 50mm f/1.8 II, Other( Canon 18-135 mm)', 'Gimbal stabilizer, Portable off-camera lighting kit, Tripod', 'Car, RideShare', '', 'Yes', 'Approved', '', '', 0, '2021-08-26'),
(58, 'Amar Balaji', 'balaji.amar@outlook.com', 9597673625, '28, Devi Nagar, PN Pudur', 'Coimbatore', 641041, '612748a832926', 'https://balajiamarphotography.myportfolio.com/', 'https://www.instagram.com/balajiamar089/', '', '', 'Professional', '2', 'Yes', 'No', 'I have been doing Professional Photography since January 2020, after completing my Diploma in Professional Photography from Light and Life Academy, Ooty. I am currently focusing on Architectural, Product and Food Photography.', '10', 'Food, Portrait, Product, Real Estate, Commercial, Landscape, Media', 'Canon EOS 80D', 'Canon EF 50mm f/1.8 II, Other( EFS 10-18mm, EFS 18-55mm, EFS 35mmMacro, EFS - 55-250mm)', 'Small Product Photography Kit, On camera microphone, Tripod, White backdrop, Black or dark backdrop, Coloured backdrop, Other( Polariser, GND Filters, Flash Kit)', 'Car, Motorcycle', '192 ', 'Yes', 'Approved', '', '', 0, '2021-08-26'),
(104, 'Kirtiman Singh', 'maan.resume@gmail.com', 8928244275, '1910, garden view, royal palms, goregaon (east)', 'mumbai', 400065, 'adhar.pdf61297949c09f9', 'https://drive.google.com/drive/folders/1kvFIrfHOCeNEjXZ93PztwCmQTd5tc72g?usp=sharing', 'https://www.instagram.com/theonemaanarmy/', '', '', 'Professional', '3', 'Yes', 'No', 'I have shot fashion, jewellery, product, food mainly .. I have shot for a Dubai based as well in Dubai .. I like to shoot with continuous lights and have my own equipments for basic shoots .. for advanced shoot equipments have to be rented', '50', 'Food, Portrait, Product, Fashion', 'Sony A7R Mark III, Other( Sony a7s2)', 'Other( would rent as per the need)', 'Large product photography kit, Portable off-camera lighting kit, Tripod, White backdrop, Black or dark backdrop', 'RideShare', '226 227 228 229 230 231 232 233 234 235 ', 'Yes', 'Approved', '', '', 0, '2021-08-27'),
(109, 'Elangeethan  S', 'elangeethan29@gmail.com', 8056761456, 'FF4 Iswarya park New colony venkateswara Nagar 1st Street', 'Kanchipuram', 600041, '1630156038377.pdf612a403c39a85', 'https://drive.google.com/folderview?id=1-4-pN7r7JS5aUXL0syjMLNiZZoBk-ecI', 'elangeethan29', 'https://www.facebook.com/Elangeethan.shanmugam', '', 'Professional', '4', 'Yes', 'No', 'I have 4 years experience in product  photography, E-commerce photography, creative photography, modelling  photography & cinematograph \r\n2 year experience in POTHYS \r\n2 year experience  in GRD JEWELLERY ', '8/', 'Family, Food, Portrait, Product, Commercial, Fashion, Landscape', 'Canon EOS R, Canon EOS 5D Mark IV', 'Canon 100-200mm f/4.5', 'Gimbal stabilizer, Small Product Photography Kit, On camera microphone, Clip-on microphone, Large product photography kit, Portable off-camera lighting kit, Dual light studio kit, Portable studio kit, Tripod, White backdrop, Black or dark backdrop, Coloured backdrop, Props/ toys for newborn shoots, Other( )', 'Motorcycle, Public Transport', '346 ', 'Yes', 'Approved', '', '', 0, '2021-08-28'),
(110, 'Rehan Sayyed', 'rehan26896@gmail.com', 7208333123, '301, 3rd floor D-5 Mandar Society Lok Udyan Complex behind Sarvoday Mall Kalyan (w)', 'kalyan', 421301, 'rehan aadharcard.pdf612cd1358c40f', 'https://rehansayyed.co.in/', 'https://instagram.com/rehansayyed01?utm_medium=copy_link', '', '', 'Professional', '3', 'Yes', 'No', 'in my experience, the most important thing is practice and thinking. Just go outside and start to take photos! Naturally you can attend photography courses or enroll in a three-year study program, watch a lot of YouTube videos and read books about photography, but I insist that most important, practically speaking, are two things: practice and thinking. If you have a passion for something, you are sure to succeed. And you must never forget that it is a long process to master photography; you must not become discouraged. It is always difficult in the beginning, but the more you practice, the better you will be. Practice makes perfect. Another thing you can do is to look at photos by other photographers. I hope you enjoyed reading my personal story and i look forward to your comments. ', '8', 'Fashion, Portrait', 'Canon EOS 5D Mark IV', 'Other( )', 'Dual light studio kit, Tripod, Black or dark backdrop, Coloured backdrop', 'Public Transport', '', 'Yes', 'Approved', '', '', 0, '2021-08-30'),
(119, 'Anuj Nigam', 'anuj@pyx.co.in', 9986501995, 'Lodha Splendora', 'Thane', 400615, 'solar-system.pdf6136f9db2196e', 're', 're', 're', 're', 'Amateur', '1', 'No', 'No', 'dfdfdfdfd', '3', 'Event, Family', 'Canon EOS Rebel SL3/ EOS 250D', 'Nikon 135mm f/2.8', 'Gimbal stabilizer, Small Product Photography Kit, On camera microphone', 'Motorcycle, BiCycle', '256 257 ', '', 'Rejected', '', '', 0, '2021-09-07'),
(120, 'Megha Nigam', 'megha173@gmail.com', 9989898499, 'Lodha Splendora', 'Thane', 400615, 'solar-system.pdf61384ae35cb61', 'tr', 'tr', 're', 're', 'Amateur', '3', 'No', 'No', 'dfd', '4', 'Event', 'Canon EOS 200D', 'Canon 10-22mm f/3.5-4.5', 'Gimbal stabilizer', 'Motorcycle', '258 ', '', 'Rejected', '', '', 0, '2021-09-08'),
(121, 'Anuj Nigam', 'support@pyx.co.in', 9986501995, 'Lodha Splendora', 'Thane', 400615, 'solar-system.pdf613dc1efa0549', 'tr', 'tr', 'tr', 'tr', 'Amateur', '1', 'No', 'No', 'fg', '3', 'Event', 'Canon EOS 1DX', 'Canon 10-22mm f/3.5-4.5', 'Gimbal stabilizer', 'Motorcycle', '259 ', '', 'Rejected', '', '', 0, '2021-09-12'),
(131, 'Jitendra Nigam', 'nigam.jitendra@gmail.com', 9986501995, 'lodha splendora', 'Thane', 400615, 'rocket.jpg61934d3825f18', 'test', 'test', 'test', 'test', 'Amateur', '6', 'No', 'Yes', 'test test test test test test test test test test test test ', '5', 'Event, Family, Product, Fashion, Food', 'Canon EOS 200D, Canon EOS 90D', 'Canon 10-22mm f/3.5-4.5, Canon 100-400mm f/4.5-5.6', 'Gimbal stabilizer, Small Product Photography Kit', 'Motorcycle, RideShare', '300 301 302 303 304 ', 'No', 'Deactivated', 'test studio', 'thane', 400615, '2021-11-16'),
(132, 'Anuj Nigam', 'anujtest1978@protonmail.com', 9986501995, 'Lodha Splendora', 'Thane', 400615, 'solar-system.pdf61a475fcb3689', 'instagram.com/anujtest', 'anujtest', 'facebook.com/testeranuj', '@testeranuj', 'Amateur', '4', 'No', 'Yes', 'I am an amateur portrait and product (including food) photographer', '40', 'Event, Product, Food, Portrait', 'Nikon D850, Nikon Z7', 'Nikon 35mm f/1.4, Nikon 50mm f/1.8D AF Nikkor, Nikon 18-200mm f/3.5-5.6 G ED-IF AF-S VR DX, Nikon 17-55mm f/2.8G ED-IF AF-S DX Nikkor', 'Small Product Photography Kit, On camera microphone, Clip-on microphone, Portable off-camera lighting kit, Tripod, White backdrop, Black or dark backdrop', 'Motorcycle, RideShare', '305 306 307 308 ', 'Yes', 'Rejected', 'Home - Lodha Splendora', 'Thane', 400615, '2021-11-29'),
(133, 'Anuj Nigam', 'anujtest123@gmail.com', 9986595034, 'adfsfdsf', 'dfsfsf', 233243, 'solar-system.pdf61f823fa4b8c3', 'df', 'fd', 'fd', 'fd', 'Amateur', '2', 'No', 'No', 'csfd', '33', 'Event, Family, Product', 'Canon EOS R, Other( dfdfd)', 'Canon 10-22mm f/3.5-4.5', 'Gimbal stabilizer, Small Product Photography Kit, Portable off-camera lighting kit', 'Motorcycle', '315 316 317 ', '', 'Rejected', '', '', 0, '2022-01-31'),
(134, 'Joe Tester', 'testingjoe@bling.co', 9986501995, '49954594', '459495495', 394394, 'solar-system.pdf61f82a4352fb6', 'df', 'e', 'fd', 'fd', 'Amateur', '1', 'No', 'No', 'dfdf', '34', 'Event', 'Panasonic Lumix S5', 'Tamron 10-24mm f/3.5-4.5', 'Small Product Photography Kit', 'BiCycle', '318 ', '', 'Rejected', '', '', 0, '2022-01-31'),
(139, 'Samuel Papanola', 'psamuel1916@gmail.com', 8983982823, 'Ghar no. 1074, Ward no. 3, Nalanda Nagar Road, New Balaji Nagar, Behind T.P.M Church, Ambernath (W)', 'Thane', 421501, 'Sam_Aadhar.jpg6214947acd210', 'NA', 'instagram.com/brunch_with_sam', 'NA', 'NA', 'Amateur', '1', 'Yes', 'No', 'NA', '40', 'Food', 'Canon 750D', 'Canon EF 50mm f/1.8 II, Other( Canon 18-135 mm)', 'Tripod', 'Motorcycle', '', 'Yes', 'Approved', '', '', 0, '2022-02-22'),
(144, 'Ram Kishan', 'test@gmail.com', 9998897898, 'dfvaf', 'New delhi', 456454, 'ChecKAdmitcarD.pdf6232c7a44202f', 'dvgfdfhb', '', '', '', 'Amateur', '45', 'No', 'No', 'dvdfh', '40', 'Event, Product', 'Canon EOS 200D, Nikon D3500', 'Canon 10-22mm f/3.5-4.5, Nikon 14-24mm f/2.8, Nikon 24-50mm f/3.3-4.5', 'Gimbal stabilizer, On camera microphone', 'Motorcycle, RideShare, Public Transport', '347 348 ', 'Yes', 'Approved', '', '', 0, '2022-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `portfolioimages`
--

CREATE TABLE `portfolioimages` (
  `pfImg_id` bigint(20) NOT NULL,
  `photograperId` bigint(20) NOT NULL,
  `publishId` bigint(20) NOT NULL,
  `ipf_mages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolioimages`
--

INSERT INTO `portfolioimages` (`pfImg_id`, `photograperId`, `publishId`, `ipf_mages`) VALUES
(53, 144, 51, '7048.jpg'),
(54, 144, 51, '3485.jpg'),
(55, 144, 51, '8536.jpg'),
(56, 144, 51, '2838.jpg'),
(57, 144, 51, '7555.jpg'),
(62, 144, 51, '9230.jpg'),
(63, 144, 51, '3159.jpg'),
(64, 144, 51, '6381.jpg'),
(65, 144, 51, '1580.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `shootatstudio`
--

CREATE TABLE `shootatstudio` (
  `s_id` bigint(20) NOT NULL,
  `at_studio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shootatstudio`
--

INSERT INTO `shootatstudio` (`s_id`, `at_studio`) VALUES
(1, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `shoot_booking`
--

CREATE TABLE `shoot_booking` (
  `shoot_bookingid` bigint(20) NOT NULL,
  `Client_Name` varchar(255) NOT NULL,
  `Client_Email` varchar(255) NOT NULL,
  `Client_phone` bigint(20) NOT NULL,
  `Client_Address` longtext NOT NULL,
  `Shoot_type` varchar(255) NOT NULL,
  `Needtoshoot` varchar(255) NOT NULL,
  `At_Studio` varchar(255) NOT NULL,
  `Package` longtext NOT NULL,
  `Shoot_Date` datetime NOT NULL,
  `Shoot_Time` time NOT NULL,
  `Booking_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoot_booking`
--

INSERT INTO `shoot_booking` (`shoot_bookingid`, `Client_Name`, `Client_Email`, `Client_phone`, `Client_Address`, `Shoot_type`, `Needtoshoot`, `At_Studio`, `Package`, `Shoot_Date`, `Shoot_Time`, `Booking_date`) VALUES
(1, 'ffsfds wfwe', 'sohini818@gmail.com', 989, 'fsfs', '', '', '', '', '0000-00-00 00:00:00', '00:00:00', '0000-00-00 00:00:00'),
(2, 'SDSA QWQDQW', 'sohini818@gmail.com', 980, 'W', '', '', '', '', '0000-00-00 00:00:00', '00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `snapperlist`
--

CREATE TABLE `snapperlist` (
  `snapper_id` bigint(20) NOT NULL,
  `snapper_name` varchar(255) NOT NULL,
  `snapper_address` longtext NOT NULL,
  `snapper_camera` varchar(255) NOT NULL,
  `snapper_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snapperlist`
--

INSERT INTO `snapperlist` (`snapper_id`, `snapper_name`, `snapper_address`, `snapper_camera`, `snapper_image`) VALUES
(1, 'Nitin', 'Delhi', 'Canon EOS 90D', 'pg1.jpg6135def139562'),
(4, 'Andy', 'Mumbai', 'Nikon D750', 'pg3.jpg6135deff3d16f'),
(5, 'Ashish', 'Kolkata', 'Canon EOS 90D', 'pg4.jpg6135df065e773');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_id` bigint(20) NOT NULL,
  `tag_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_name`) VALUES
(9, 'Real Estate'),
(10, 'Food'),
(11, 'Product');

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`id`, `name`) VALUES
(1, 'sohini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`accessory_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `blog_login`
--
ALTER TABLE `blog_login`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`shoot_id`);

--
-- Indexes for table `camera_bodies`
--
ALTER TABLE `camera_bodies`
  ADD PRIMARY KEY (`cbody_id`);

--
-- Indexes for table `camera_lense`
--
ALTER TABLE `camera_lense`
  ADD PRIMARY KEY (`lense_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `moreportfolioimg`
--
ALTER TABLE `moreportfolioimg`
  ADD PRIMARY KEY (`morepf_id`);

--
-- Indexes for table `multiple_image`
--
ALTER TABLE `multiple_image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `pgpublish`
--
ALTER TABLE `pgpublish`
  ADD PRIMARY KEY (`pg_publish_id`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`photographer_id`);

--
-- Indexes for table `portfolioimages`
--
ALTER TABLE `portfolioimages`
  ADD PRIMARY KEY (`pfImg_id`);

--
-- Indexes for table `shoot_booking`
--
ALTER TABLE `shoot_booking`
  ADD PRIMARY KEY (`shoot_bookingid`);

--
-- Indexes for table `snapperlist`
--
ALTER TABLE `snapperlist`
  ADD PRIMARY KEY (`snapper_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `accessory_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `cat_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_login`
--
ALTER TABLE `blog_login`
  MODIFY `blog_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `shoot_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1177;

--
-- AUTO_INCREMENT for table `camera_bodies`
--
ALTER TABLE `camera_bodies`
  MODIFY `cbody_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `camera_lense`
--
ALTER TABLE `camera_lense`
  MODIFY `lense_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `moreportfolioimg`
--
ALTER TABLE `moreportfolioimg`
  MODIFY `morepf_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `multiple_image`
--
ALTER TABLE `multiple_image`
  MODIFY `img_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `pgpublish`
--
ALTER TABLE `pgpublish`
  MODIFY `pg_publish_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `photographer_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `portfolioimages`
--
ALTER TABLE `portfolioimages`
  MODIFY `pfImg_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `shoot_booking`
--
ALTER TABLE `shoot_booking`
  MODIFY `shoot_bookingid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `snapperlist`
--
ALTER TABLE `snapperlist`
  MODIFY `snapper_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
