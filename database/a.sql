-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2016 at 05:52 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `a`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1462951553),
('m130524_201442_init', 1462951558);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'NeH-55TNiuH_bLFqmD0v_XEqIDK-_7MQ', '$2y$13$ypQpoC0fFQ4BHT20kZvF7eG3ozmt9DDTmM3DP5a/t.GBqyHx8ZygW', NULL, 'admin@admin.com', 10, 1462951562, 1462951562);

-- --------------------------------------------------------

--
-- Table structure for table `_class_master`
--

CREATE TABLE IF NOT EXISTS `_class_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(9) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `_class_master`
--

INSERT INTO `_class_master` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nursery', 1, '2016-05-11 16:46:12', '2016-05-11 16:46:12'),
(2, 'LKG', 1, '2016-05-11 16:46:22', '2016-05-11 16:46:22'),
(3, 'UKG', 1, '2016-05-11 16:46:29', '2016-05-11 16:46:29'),
(4, 'I', 1, '2016-05-11 16:46:36', '2016-05-11 16:46:36'),
(5, 'II', 1, '2016-05-11 16:46:43', '2016-05-11 16:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `_class_section_relation`
--

CREATE TABLE IF NOT EXISTS `_class_section_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `class_id` (`class_id`,`section_id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `_class_section_relation`
--

INSERT INTO `_class_section_relation` (`id`, `class_id`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `_district`
--

CREATE TABLE IF NOT EXISTS `_district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_fee_master`
--

CREATE TABLE IF NOT EXISTS `_fee_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `_fee_master`
--

INSERT INTO `_fee_master` (`id`, `class_id`, `name`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 1, '1200', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `_fee_type`
--

CREATE TABLE IF NOT EXISTS `_fee_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `_fee_type`
--

INSERT INTO `_fee_type` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tution', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Transport', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `_payment_mode`
--

CREATE TABLE IF NOT EXISTS `_payment_mode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` varchar(90) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_route`
--

CREATE TABLE IF NOT EXISTS `_route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `starting_point` varchar(90) NOT NULL,
  `end_point` varchar(90) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_route_immediate_stations`
--

CREATE TABLE IF NOT EXISTS `_route_immediate_stations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `route_id` (`route_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_section`
--

CREATE TABLE IF NOT EXISTS `_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(9) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `_section`
--

INSERT INTO `_section` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'B', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'C', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `_state`
--

CREATE TABLE IF NOT EXISTS `_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_student_catagory`
--

CREATE TABLE IF NOT EXISTS `_student_catagory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `discount_in_fee` varchar(11) NOT NULL,
  `discount_in_adm` varchar(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_transport`
--

CREATE TABLE IF NOT EXISTS `_transport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `number_plate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_transport_route`
--

CREATE TABLE IF NOT EXISTS `_transport_route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transport_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transport_id` (`transport_id`),
  KEY `route_id` (`route_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `_class_section_relation`
--
ALTER TABLE `_class_section_relation`
  ADD CONSTRAINT `_class_section_relation_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `_class_master` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `_class_section_relation_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `_section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `_district`
--
ALTER TABLE `_district`
  ADD CONSTRAINT `_district_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `_state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `_fee_master`
--
ALTER TABLE `_fee_master`
  ADD CONSTRAINT `_fee_master_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `_fee_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `_route_immediate_stations`
--
ALTER TABLE `_route_immediate_stations`
  ADD CONSTRAINT `_route_immediate_stations_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `_route` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `_transport_route`
--
ALTER TABLE `_transport_route`
  ADD CONSTRAINT `_transport_route_ibfk_1` FOREIGN KEY (`transport_id`) REFERENCES `_transport` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `_transport_route_ibfk_2` FOREIGN KEY (`route_id`) REFERENCES `_route` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
