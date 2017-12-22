-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 10:10 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serbian_soul`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Belgrade Tours'),
(2, 'Wine Tours'),
(3, 'Serbian Tours');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `price_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `min_people` int(11) DEFAULT NULL,
  `max_people` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `dis_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT=', , , , , ';

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`price_id`, `tour_id`, `min_people`, `max_people`, `price`, `dis_price`) VALUES
(1, 1, 4, 100, 0, NULL),
(2, 1, 5, 9, 85, 0),
(3, 2, 1, 3, 100, 0),
(4, 2, 4, 8, 85, 0),
(5, 2, 9, 13, 65, 0),
(6, 3, 1, 3, 100, 0),
(7, 3, 4, 8, 80, 0),
(8, 4, 1, 4, 40, 0),
(9, 4, 5, 10, 30, 0),
(10, 4, 11, 28, 20, 0),
(11, 5, 1, 4, 40, 0),
(12, 5, 5, 10, 30, 0),
(13, 5, 11, 28, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `srv_id` int(11) NOT NULL,
  `srv_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `srv_desc` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `srv_icon` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `srv_prior` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`srv_id`, `srv_name`, `srv_desc`, `srv_icon`, `srv_prior`) VALUES
(1, 'Transfer', NULL, ' icon_set_1_icon-26', '1'),
(2, 'Professional Guide', NULL, 'icon_set_1_icon-57', '2'),
(3, 'Tickets', NULL, 'icon-ticket', '3'),
(4, 'Traditional Meal', NULL, ' icon_set_1_icon-14', '5'),
(5, 'Traditional Drink', NULL, ' icon-glass', '6'),
(6, 'Wine degustation', NULL, ' icon-wine', '7'),
(7, 'Monastery Tour', NULL, ' icon_set_1_icon-2', '4'),
(8, 'Food Tasting', NULL, ' icon_set_1_icon-14', '8'),
(9, 'Wi-Fi', NULL, 'icon_set_1_icon-86', '9'),
(10, 'Major Sights', NULL, ' icon_set_1_icon-1', '4');

-- --------------------------------------------------------

--
-- Table structure for table `test_price`
--

CREATE TABLE `test_price` (
  `price_id` int(11) NOT NULL,
  `tour_id` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_people` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_people` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_price` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_price`
--

INSERT INTO `test_price` (`price_id`, `tour_id`, `min_people`, `max_people`, `price`, `dis_price`) VALUES
(1, '17', '3', '5', '125', '32'),
(2, '19', '3', '5', '125', '32'),
(3, '21', '3', '5', '125', '32'),
(4, '23', '3', '5', '125', '32'),
(5, '25', '3', '5', '125', '32'),
(6, '27', '3', '5', '125', '32'),
(7, '29', '3', '5', '125', '32'),
(8, '31', '3', '5', '125', '32'),
(9, '33', '3', '5', '125', '32'),
(10, '36', '3', '5', '125', '32'),
(11, '37', '3', '5', '125', '32'),
(12, '38', '3', '5', '125', '32'),
(13, '39', '3', '5', '125', '32'),
(14, '45', '8', '1', '1', '1'),
(15, '45', '7', '7', '7', '7'),
(16, '45', '8', '9', '9', '9'),
(17, '45', '6', '8', '8', '0'),
(18, '47', '2', '3', '128', '0'),
(19, '47', '1', '2', '32', '35'),
(20, '47', '1', '3', '333', '0'),
(21, '0', '1', '3', '999', '0'),
(22, '0', '1', '2', '2', '3'),
(23, '0', '1', '2', '2', '3'),
(24, '0', '1', '2', '2', '3'),
(25, '0', '1', '1', '0', '0'),
(26, '0', '1', '1', '0', '0'),
(27, '0', '1', '3', '125', '0'),
(28, '0', '1', '3', '125', '0'),
(29, '49', '2', '2', '128', '0'),
(30, '50', '2', '2', '111', '0'),
(31, '51', '15', '18', '25', '0'),
(32, '52', '15', '18', '0', '0'),
(33, '53', '15', '17', '0', '0'),
(34, '54', '7', '17', '0', '0'),
(35, '55', '15', '17', '252', '0'),
(36, '56', '15', '17', '25', '0'),
(37, '57', '15', '17', '25', '0'),
(38, '58', '15', '17', '25', '0'),
(39, '59', '15', '15', '0', '0'),
(40, '60', '15', '15', '0', '0'),
(41, '61', '15', '15', '0', '0'),
(42, '63', '15', '17', '25', '0'),
(43, '3', '4', '22', '80', '0'),
(44, '3', '5', '6', '150', '0'),
(45, '3', '4', '22', '80', '0'),
(46, '3', '5', '6', '150', '0'),
(47, '64', '2', '5', '250', '0'),
(48, '65', '2', '5', '250', '0'),
(49, '66', '14', '16', '25', '0'),
(50, '67', '14', '18', '0', '0'),
(51, '5', '1', '3', '100', '0'),
(52, '5', '4', '7', '80', '0'),
(53, '5', '8', '20', '65', '0'),
(54, '5', '21', '49', '50', '0');

-- --------------------------------------------------------

--
-- Table structure for table `test_tour`
--

CREATE TABLE `test_tour` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_desc` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_program` varchar(2024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_cover` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_gallery` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_duration` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special` tinyint(4) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `dateT` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_shortDesc` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='tour_id, tour_name, tour_shortDesc, tour_desc, tour_program, tour_cover, tour_gallery, tour_duration, special, cat_id, priority, dateT, longitude, latitude';

--
-- Dumping data for table `test_tour`
--

INSERT INTO `test_tour` (`tour_id`, `tour_name`, `tour_desc`, `tour_program`, `tour_cover`, `tour_gallery`, `tour_duration`, `special`, `cat_id`, `priority`, `dateT`, `longitude`, `latitude`, `tour_shortDesc`) VALUES
(1, 'ime', 'ime', 'ime', 'ime', 'ime', NULL, 0, 2, 1, '2017-12-10 10:55:47', '5', '6', 'ime'),
(2, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 10:56:03', '5', '6', 'opis'),
(3, 'Oplenac ', '', '', 'oplenac.jpg', '', NULL, 0, 3, 1, '2017-12-18 20:21:19', '', '', '<p>Karadjordjevici</p>'),
(4, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 11:16:07', '5', '6', 'opis'),
(5, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 11:16:19', '5', '6', 'opis'),
(6, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 11:17:11', '5', '6', 'opis'),
(7, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 11:48:30', '5', '6', 'opis'),
(8, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 11:50:38', '5', '6', 'opis'),
(9, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 11:50:38', '5', '6', 'opis'),
(10, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 11:51:00', '5', '6', 'opis'),
(11, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 11:51:00', '5', '6', 'opis'),
(12, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:33:23', '5', '6', 'opis'),
(13, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:33:23', '5', '6', 'opis'),
(14, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:33:52', '5', '6', 'opis'),
(15, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:33:52', '5', '6', 'opis'),
(16, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:34:44', '5', '6', 'opis'),
(17, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:34:44', '5', '6', 'opis'),
(18, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:35:02', '5', '6', 'opis'),
(19, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:35:02', '5', '6', 'opis'),
(20, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:44:12', '5', '6', 'opis'),
(21, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:44:12', '5', '6', 'opis'),
(22, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:45:05', '5', '6', 'opis'),
(23, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:45:05', '5', '6', 'opis'),
(24, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:45:09', '5', '6', 'opis'),
(25, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:45:10', '5', '6', 'opis'),
(26, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:46:16', '5', '6', 'opis'),
(27, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:46:16', '5', '6', 'opis'),
(28, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:50:39', '5', '6', 'opis'),
(29, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:50:39', '5', '6', 'opis'),
(30, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:51:04', '5', '6', 'opis'),
(31, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:51:04', '5', '6', 'opis'),
(32, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:51:13', '5', '6', 'opis'),
(33, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:51:13', '5', '6', 'opis'),
(34, 'ime', 'ime', 'ime', 'ime', 'ime', NULL, 0, 2, 1, '2017-12-10 20:51:46', '5', '6', 'ime'),
(35, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:52:31', '5', '6', 'opis'),
(36, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:52:31', '5', '6', 'opis'),
(37, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-10 20:52:56', '5', '6', 'opis'),
(38, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-11 08:43:02', '5', '6', 'opis'),
(39, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-11 08:44:09', '5', '6', 'opis'),
(40, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-11 08:44:54', '5', '6', 'opis'),
(41, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-11 08:47:54', '5', '6', 'opis'),
(42, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-11 08:48:15', '5', '6', 'opis'),
(43, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-11 08:49:49', '5', '6', 'opis'),
(44, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-11 08:50:21', '5', '6', 'opis'),
(45, 'tura', 'opis', 'program', 'cover', 'gallery', NULL, 0, 2, 1, '2017-12-11 08:54:08', '5', '6', 'opis'),
(46, 'aa', '<p>aa</p>', '<p>aa</p>', 'aa.jpg', 'aa', NULL, 0, 1, 1, '2017-12-11 15:26:30', '123', '123', '<p>aa</p>'),
(47, 'ss', '<p>sdd</p>', '<p>sdsd</p>', 'ss.jpg', 'ss', NULL, 0, 2, 1, '2017-12-11 15:34:32', '25', '25', '<p>sdsds</p>'),
(48, 'ime', 'ime', 'ime', 'ime', 'ime', NULL, 0, 2, 1, '2017-12-11 15:46:07', '5', '6', 'ime'),
(49, 'nziv ture', '<p>eeeeeeeeeeeeee</p>', '<p>eeeeeeeeee</p>', 'nziv-ture.jpg', 'nziv-ture', NULL, 0, 3, 1, '2017-12-11 15:49:34', '123', '123', '<p>eeee</p>'),
(50, 'ssss', '<p>aaaaaaaaa</p>', '<p>aaaaaaaaa</p>', 'ssss.jpg', 'ssss', NULL, 0, 3, 1, '2017-12-11 15:51:33', '', '', '<p>aaaaaaaaaaa</p>'),
(51, 'ssss', '<p>sdad</p>', '<p>adada</p>', 'ssss.jpg', 'ssss', NULL, 0, 1, 2, '2017-12-17 18:28:25', '325', '2222', '<p>opis&nbsp;</p>'),
(52, 'ssss', '<p>ssds</p>', '<p>scs</p>', 'ssss.jpg', 'ssss', NULL, 0, 1, 1, '2017-12-17 18:30:41', '25', '32', '<p>sss</p>'),
(53, 'dddd', '<p>dd</p>', '<p>dd</p>', 'dddd.jpg', 'dddd', NULL, 0, 2, 2, '2017-12-17 18:32:12', '', '', '<p>dd</p>'),
(54, 'ss', '<p>sffafa</p>', '<p>sfsfsf</p>', 'ss.jpg', 'ss', NULL, 0, 1, 1, '2017-12-17 18:35:43', '', '', '<p>ssss</p>'),
(55, 'sssss', '<p>aaa</p>', '<p>aaa</p>', 'sssss.jpg', 'sssss', NULL, 0, 2, 1, '2017-12-18 17:06:53', '', '', '<p>aaa</p>'),
(56, 'xxx', '<p>xxx</p>', '<p>xxx</p>', 'xxx.jpg', 'xxx', NULL, 0, 1, 1, '2017-12-18 17:11:29', '', '', '<p>xxx</p>'),
(57, 'xxx', '<p>xxx</p>', '<p>xxx</p>', 'xxx.jpg', 'xxx', NULL, 0, 1, 1, '2017-12-18 17:16:02', '', '', '<p>xxx</p>'),
(58, 'naqziv ture', '<p>aa</p>', '<p>aa</p>', 'naqziv-ture.jpg', 'naqziv-ture', NULL, 0, 1, 1, '2017-12-18 17:18:16', '', '', '<p>aa</p>'),
(59, 'aa', '<p>aa</p>', '<p>aa</p>', 'aa.jpg', 'aa', NULL, 0, 2, 1, '2017-12-18 17:20:04', '', '', '<p>aa</p>'),
(60, 'aa', '<p>aa</p>', '<p>aa</p>', 'aa.jpg', 'aa', NULL, 0, 2, 1, '2017-12-18 17:21:21', '', '', '<p>aa</p>'),
(61, 'aa', '<p>aa</p>', '<p>aa</p>', 'aa.jpg', 'aa', NULL, 0, 2, 1, '2017-12-18 17:21:27', '', '', '<p>aa</p>'),
(62, 'sss', '<p>sssssssssssss</p>', '<p>sssssssssssssssss</p>', 'sss.jpg', 'sss', NULL, 0, 2, 1, '2017-12-18 17:22:03', '', '', '<p>ssssssssssss</p>'),
(63, 'dfgsgsg', '<p>sgsgsg</p>', '<p>sgsgsgs</p>', 'dfgsgsg.jpg', 'dfgsgsg', NULL, 0, 3, 1, '2017-12-18 17:38:42', '', '', '<p>sgsgsgs</p>'),
(64, 'tura tura', '<p>cc</p>', '<p>cc</p>', 'tura-tura.jpg', 'tura-tura', NULL, 0, 1, 1, '2017-12-18 20:32:03', '', '', '<p>cc</p>'),
(65, 'tura tura', '<p>cc</p>', '<p>cc</p>', 'tura-tura.jpg', 'tura-tura', NULL, 0, 1, 1, '2017-12-18 20:34:41', '', '', '<p>cc</p>'),
(66, 'xx', '<p>xx</p>', '<p>xx</p>', 'xx.jpg', 'xx', NULL, 0, 3, 1, '2017-12-18 20:34:59', '', '', '<p>xx</p>'),
(67, 'xx', '<p>xxxxxxxxxx</p>', '<p>xxxxxxxxxxxx</p>', 'xx.jpg', 'xx', NULL, 0, 2, 1, '2017-12-18 20:38:08', '', '', '<p>xx</p>');

-- --------------------------------------------------------

--
-- Table structure for table `test_t_s`
--

CREATE TABLE `test_t_s` (
  `id_tour_service` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `srv_id` int(11) NOT NULL,
  `spec_srv_desc` varchar(124) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='id_tour_service, tour_id, srv_id, spec_srv_desc';

--
-- Dumping data for table `test_t_s`
--

INSERT INTO `test_t_s` (`id_tour_service`, `tour_id`, `srv_id`, `spec_srv_desc`) VALUES
(1, 3, 2, 'neki silan opis'),
(2, 3, 2, 'neki silan opis'),
(3, 29, 3, '5'),
(4, 31, 3, 'descsxx'),
(5, 33, 3, '5'),
(6, 36, 3, '5'),
(7, 37, 3, 'neki silan opis'),
(8, 38, 8, '1'),
(9, 38, 7, '7'),
(10, 38, 8, '9'),
(11, 38, 6, '8'),
(12, 39, 8, 'fdfgdgdgdg'),
(13, 39, 7, '7'),
(14, 39, 8, '9'),
(15, 39, 6, '8'),
(16, 40, 8, '1'),
(17, 40, 7, '7'),
(18, 40, 8, '9'),
(19, 40, 6, '8'),
(20, 41, 8, '1'),
(21, 41, 7, '7'),
(22, 41, 8, '9'),
(23, 41, 6, 'neki oppp'),
(24, 42, 8, '1'),
(25, 42, 7, '7'),
(26, 42, 8, '9'),
(27, 42, 6, '8'),
(28, 2, 4, ''),
(29, 2, 6, ''),
(30, 3, 8, ''),
(31, 5, 1, '0'),
(32, 6, 2, '0'),
(33, 8, 3, '0'),
(34, 9, 3, ''),
(35, 8, 8, ''),
(36, 9, 3, ''),
(37, 9, 8, ''),
(38, 49, 1, ''),
(39, 49, 4, ''),
(40, 50, 1, ''),
(41, 50, 2, ''),
(42, 50, 3, ''),
(43, 50, 7, ''),
(44, 51, 7, ''),
(45, 51, 8, ''),
(46, 52, 1, ''),
(47, 52, 4, ''),
(48, 53, 1, ''),
(49, 53, 8, ''),
(50, 54, 3, ''),
(51, 54, 6, ''),
(52, 55, 1, ''),
(53, 55, 2, 'neki silan opis'),
(54, 56, 1, ''),
(55, 56, 4, ''),
(56, 57, 1, ''),
(57, 57, 4, ''),
(58, 58, 1, ''),
(59, 58, 4, ''),
(60, 59, 1, ''),
(61, 59, 2, ''),
(62, 60, 1, ''),
(63, 60, 2, ''),
(64, 61, 1, ''),
(65, 61, 2, ''),
(66, 62, 1, ''),
(67, 62, 2, 'opis'),
(68, 62, 3, 'opis'),
(69, 3, 2, 'neki silan opis'),
(70, 3, 2, ''),
(71, 3, 2, ''),
(72, 63, 2, 'sgsgsg'),
(73, 63, 4, 'sgsgsgsg'),
(74, 64, 1, ''),
(75, 64, 4, ''),
(76, 65, 1, ''),
(77, 65, 4, ''),
(78, 66, 7, ''),
(79, 67, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_shortDesc` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_desc` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_program` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_cover` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_gallery` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `special` tinyint(4) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `priority` int(11) DEFAULT NULL,
  `longitude` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateT` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_id`, `tour_name`, `tour_shortDesc`, `tour_desc`, `tour_program`, `tour_cover`, `tour_gallery`, `special`, `cat_id`, `priority`, `longitude`, `latitude`, `dateT`) VALUES
(1, 'Winery Alexandrovic', '<p>Perfect wines</p>', '<p>&nbsp;&nbsp; Aleksandrovic winery is situated in Serbia, 80km south from Belgrade in a village called Vinca. We own 75 hectares of vineyards and our annual production is 300,000 bottles. <br /> &nbsp;&nbsp; Our prime goal is the quality and we can proudly state that many medals acquired at the most prestigious global competitions such as Decanter (London), IWSC (London), Mundusvini (Germany), AWC (Austria).</p>\r\n<p><br /> &nbsp;&nbsp; Our most treasured wine is a white wine &lsquo;Trijumf&rsquo; (Triumph), produced in accordance with the original blend composition from 1932. We received the original recipe for Trijumf from the royal cellar master Zivan Tadic who was the winemaker of the Karadjordjevic royal house before the World War Two. Trijumf was served at a few European royal courts at that time.</p>\r\n<p><br /> &nbsp;&nbsp; Aleksandrovic winery is a leading private winery in Serbia. You may find more details about us on our website: www.vinarijaaleksandrovic.rs</p>', '<p>Our most treasured wine is a white wine &lsquo;Trijumf&rsquo; (Triumph), produced in accordance with the original blend composition from 1932. We received the original recipe for Trijumf from the royal cellar master Zivan Tadic who was the winemaker of the Karadjordjevic royal house before the World War Two. Trijumf was served at a few European royal courts at that time.</p>\r\n<p>&nbsp;</p>', 'winery-alexandrovic.jpg', 'winery-alexandrovic', 0, 2, 1, '', '', '2017-12-18 22:19:54'),
(2, 'Winery Zvonko Bogdan', '<p>Vince vince</p>', '<p>&nbsp; &nbsp;At the north of Serbia, in wine region of Vojvodina is located the Zvonko Bogdan Winery. Impressive look of the winery structure and its impressive roof attract the attention of every visitor who comes there. Roof of the winery won internacional competition as the most beautiful roof in Europe. Using the best technology, the Zvonko Bogdan Winery took its position among the most modern equipped wineries in Europe. Vineyards of Zvonko Bogdan Winery cover a total area of ​​56 hectares and were built on three different parcels - Palic, Ludas and Radic, located within a thousand meters.</p>\r\n<p>&nbsp; &nbsp;The specificity of each parcel is carefully combined with selected varieties of vines in order to be able to develop their full potential in accordance with the optimal soil and climatic conditions. As the road to good wine starts in the vineyard and the quality and authenticity in the first place, wines of Zvonko Bogdan Winery are produced exclusively from grapes-cultivated and matured in its vineyards. The Winery is named after a famous singer of old songs, Mr. Zvonko Bogdan, whose art and the name are synonyms for the ultimate experience, such as wine and Zvonko Bogdan wineries.</p>', '<p>&nbsp;The specificity of each parcel is carefully combined with selected varieties of vines in order to be able to develop their full potential in accordance with the optimal soil and climatic conditions. As the road to good wine starts in the vineyard and the quality and authenticity in the first place, wines of Zvonko Bogdan Winery are produced exclusively from grapes-cultivated and matured in its vineyards. The Winery is named after a famous singer of old songs, Mr. Zvonko Bogdan, whose art and the name are synonyms for the ultimate experience, such as wine and Zvonko Bogdan wineries.</p>', 'winery-zvonko-bogdan.jpg', 'winery-zvonko-bogdan', 0, 2, 1, '', '', '2017-12-19 10:14:20'),
(3, 'Winery Temet', '<p>Enjoy our tour</p>', '<p>Honouring nature, the sun and the land, Temet winery was erected on top of a hill, surrounded by vineyards. Its creation is an exciting road filled with discoveries and challenges. The word Temet derives from the Latin word Temetum , which means - a strong and powerful wine with character.The question of whether the winery must be " old " to gain respect is not an issue when you believe that everything you do has to be honest. A new winery then must be new. It has to create the spirit of the time to come. The foundations are laid in tradition, while tradition has its roots in the land.Guided by a trail of fertile land, it became clear that the roots should take place in Lozovik close to Jagodina, an undulating area where &Scaron;umadija overlooks the Pomoravlje region. Located on the beautiful slopes which provide ideal exposure to the sun, Temet winery was shaped by the strong influence of the environment, while striving to find harmony in work and life under the same roof. Respect for grapes, and the soil in which it grows, has molded the character of the building.</p>', '<ul style="list-style-type: circle;">\r\n<li>Polazak u 12</li>\r\n<li>Dolazak do Manastira</li>\r\n<li>Obilazak rodne kuce nekog pesnika</li>\r\n<li>i tako dalje</li>\r\n</ul>', 'winery-temet.jpg', 'winery-temet', 0, 2, 1, '', '', '2017-12-19 10:30:35'),
(4, 'Belgrade walking tour', '<p>Obidjite grad peske</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non odio sed metus rutrum rutrum tempor eget diam. Nulla vel convallis ex. Quisque id enim mattis felis pretium convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed mattis consequat neque, quis fermentum nunc aliquet nec. Cras tortor lacus, scelerisque vel dui eget, porta lobortis nulla. Ut sit amet metus sit amet mauris tincidunt condimentum. Sed venenatis fermentum nibh, sit amet semper nulla aliquam elementum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce hendrerit magna ut tortor efficitur ullamcorper. Sed tempus hendrerit nisl, nec malesuada odio consequat non. Nunc quis velit augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor fermentum ligula, at iaculis nulla vulputate quis.</p>\r\n<p>Suspendisse pretium eu tortor ac tincidunt. Phasellus ipsum ligula, tristique id venenatis id, dignissim ut arcu. Cras consequat cursus turpis semper luctus. Mauris sit amet dolor massa. Etiam et velit eu erat tempor placerat. Sed fringilla aliquet viverra. Vivamus tempus porttitor est vitae pellentesque. Nunc cursus tempus rhoncus. Aenean eu ullamcorper augue. Cras hendrerit est sagittis neque vulputate, a ultricies ex interdum. Praesent eu lacus eget est rhoncus cursus. Pellentesque eget purus pharetra, consectetur mi eu, hendrerit est.</p>\r\n<p>Vestibulum a lorem quam. Mauris erat leo, commodo a neque in, auctor rhoncus elit. Ut tempor pretium tristique. Praesent eleifend faucibus lectus, id suscipit diam mattis quis. Sed vel dolor at ex vulputate placerat lacinia non mi. Nullam tempor dapibus nunc quis pretium. In in erat mauris. In diam justo, congue ut diam sed, ultricies pellentesque velit.</p>', '<p>Vestibulum a lorem quam. Mauris erat leo, commodo a neque in, auctor rhoncus elit. Ut tempor pretium tristique. Praesent eleifend faucibus lectus, id suscipit diam mattis quis. Sed vel dolor at ex vulputate placerat lacinia non mi. Nullam tempor dapibus nunc quis pretium. In in erat mauris. In diam justo, congue ut diam sed, ultricies pellentesque velit.</p>', 'belgrade-walking-tour.jpg', 'belgrade-walking-tour', 0, 1, 1, '', '', '2017-12-19 10:40:43'),
(5, 'Belgrade walking tour', '<p>Obidjite grad peske</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non odio sed metus rutrum rutrum tempor eget diam. Nulla vel convallis ex. Quisque id enim mattis felis pretium convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed mattis consequat neque, quis fermentum nunc aliquet nec. Cras tortor lacus, scelerisque vel dui eget, porta lobortis nulla. Ut sit amet metus sit amet mauris tincidunt condimentum. Sed venenatis fermentum nibh, sit amet semper nulla aliquam elementum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce hendrerit magna ut tortor efficitur ullamcorper. Sed tempus hendrerit nisl, nec malesuada odio consequat non. Nunc quis velit augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porttitor fermentum ligula, at iaculis nulla vulputate quis.</p>\r\n<p>Suspendisse pretium eu tortor ac tincidunt. Phasellus ipsum ligula, tristique id venenatis id, dignissim ut arcu. Cras consequat cursus turpis semper luctus. Mauris sit amet dolor massa. Etiam et velit eu erat tempor placerat. Sed fringilla aliquet viverra. Vivamus tempus porttitor est vitae pellentesque. Nunc cursus tempus rhoncus. Aenean eu ullamcorper augue. Cras hendrerit est sagittis neque vulputate, a ultricies ex interdum. Praesent eu lacus eget est rhoncus cursus. Pellentesque eget purus pharetra, consectetur mi eu, hendrerit est.</p>\r\n<p>Vestibulum a lorem quam. Mauris erat leo, commodo a neque in, auctor rhoncus elit. Ut tempor pretium tristique. Praesent eleifend faucibus lectus, id suscipit diam mattis quis. Sed vel dolor at ex vulputate placerat lacinia non mi. Nullam tempor dapibus nunc quis pretium. In in erat mauris. In diam justo, congue ut diam sed, ultricies pellentesque velit.</p>', '<p>Vestibulum a lorem quam. Mauris erat leo, commodo a neque in, auctor rhoncus elit. Ut tempor pretium tristique. Praesent eleifend faucibus lectus, id suscipit diam mattis quis. Sed vel dolor at ex vulputate placerat lacinia non mi. Nullam tempor dapibus nunc quis pretium. In in erat mauris. In diam justo, congue ut diam sed, ultricies pellentesque velit.</p>', 'belgrade-walking-tour.jpg', 'belgrade-walking-tour', 0, 1, 1, '', '', '2017-12-19 10:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `tour_service`
--

CREATE TABLE `tour_service` (
  `id_tour_service` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `srv_id` int(11) NOT NULL,
  `spec_srv_desc` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT=', ,, ';

--
-- Dumping data for table `tour_service`
--

INSERT INTO `tour_service` (`id_tour_service`, `tour_id`, `srv_id`, `spec_srv_desc`) VALUES
(1, 1, 1, 'Licenced guide speaking on English'),
(2, 1, 2, 'Something for snack'),
(3, 1, 7, 'Includes degustation of 6 sorts of wine'),
(4, 1, 6, 'Something somethin something'),
(5, 1, 8, 'je sjes jes jseee'),
(6, 2, 1, 'Mini busese are very compfortable and fast'),
(7, 2, 2, 'Coje je kralj'),
(8, 2, 6, 'Tri vina ukljucena u cenu'),
(9, 2, 8, 'Nesto da gricnes'),
(10, 4, 1, 'jaaaaaaaa'),
(11, 4, 2, 'cojeee'),
(12, 4, 3, ''),
(13, 4, 10, 'rakijaaaa'),
(14, 5, 1, 'jaaaaaaaa'),
(15, 5, 2, 'cojeee'),
(16, 5, 3, ''),
(17, 5, 5, 'rakijaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`srv_id`);

--
-- Indexes for table `test_price`
--
ALTER TABLE `test_price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `test_tour`
--
ALTER TABLE `test_tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `test_t_s`
--
ALTER TABLE `test_t_s`
  ADD PRIMARY KEY (`id_tour_service`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `tour_service`
--
ALTER TABLE `tour_service`
  ADD PRIMARY KEY (`id_tour_service`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `srv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `test_price`
--
ALTER TABLE `test_price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `test_tour`
--
ALTER TABLE `test_tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `test_t_s`
--
ALTER TABLE `test_t_s`
  MODIFY `id_tour_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tour_service`
--
ALTER TABLE `tour_service`
  MODIFY `id_tour_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
