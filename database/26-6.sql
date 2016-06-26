-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2016 at 08:25 AM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmission_payment_details`
--

DROP TABLE IF EXISTS `addmission_payment_details`;
CREATE TABLE IF NOT EXISTS `addmission_payment_details` (
  `id` int(110) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `amt` varchar(11) NOT NULL,
  `pay_mode` int(250) NOT NULL,
  `pay_mode_detail` varchar(250) NOT NULL,
  `remarks` text NOT NULL,
  `session_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmission_payment_details`
--

INSERT INTO `addmission_payment_details` (`id`, `student_id`, `class_id`, `amt`, `pay_mode`, `pay_mode_detail`, `remarks`, `session_id`, `date`) VALUES
(1, 4, 1, '1167', 2, 'cash', 'njnjn', 1, '2016-06-26 07:20:03'),
(2, 6, 1, '10500', 1, 'no -121212sdasdas', 'asdasdasdasdasdas', 1, '2016-06-26 07:20:03'),
(3, 6, 1, '10500', 1, 'no -121212sdasdas', 'asdasdasdasdasdas', 1, '2016-06-26 07:20:03'),
(4, 7, 1, '1500', 2, '898989898989898', 'asasdasdasdasd', 1, '2016-06-26 08:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
CREATE TABLE IF NOT EXISTS `assignments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `for_class` int(11) NOT NULL,
  `for_section` int(11) NOT NULL,
  `publish_date` date NOT NULL,
  `submit_date` date NOT NULL,
  `session_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `marks` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assignments_details`
--

DROP TABLE IF EXISTS `assignments_details`;
CREATE TABLE IF NOT EXISTS `assignments_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(11) NOT NULL,
  `task` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assignment_marks`
--

DROP TABLE IF EXISTS `assignment_marks`;
CREATE TABLE IF NOT EXISTS `assignment_marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `marks_obtained` varchar(190) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

DROP TABLE IF EXISTS `certification`;
CREATE TABLE IF NOT EXISTS `certification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certification_id` int(11) NOT NULL,
  `obtain_marks` varchar(30) NOT NULL,
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certification_setup`
--

DROP TABLE IF EXISTS `certification_setup`;
CREATE TABLE IF NOT EXISTS `certification_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `perticipating_class` varchar(255) NOT NULL,
  `session_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `circular`
--

DROP TABLE IF EXISTS `circular`;
CREATE TABLE IF NOT EXISTS `circular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `massage` text NOT NULL,
  `for_id` text NOT NULL,
  `session_id` int(11) NOT NULL,
  `state_id` date NOT NULL,
  `end_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_teacher`
--

DROP TABLE IF EXISTS `class_teacher`;
CREATE TABLE IF NOT EXISTS `class_teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_table_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_current_contact`
--

DROP TABLE IF EXISTS `employee_current_contact`;
CREATE TABLE IF NOT EXISTS `employee_current_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permanent_address` text NOT NULL,
  `permanent_p_office` varchar(120) NOT NULL,
  `permanent_district_id` int(11) NOT NULL,
  `permanent_district_name` varchar(120) NOT NULL,
  `permanent_pin` varchar(120) NOT NULL,
  `permanent_state_id` int(11) NOT NULL,
  `permanent_state_name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_education_details`
--

DROP TABLE IF EXISTS `employee_education_details`;
CREATE TABLE IF NOT EXISTS `employee_education_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `metric_board` int(11) NOT NULL,
  `inter_board` int(11) NOT NULL,
  `metric_per` varchar(120) NOT NULL,
  `inter_per` varchar(120) NOT NULL,
  `graduation_university` int(11) NOT NULL,
  `graducation_type` int(11) NOT NULL,
  `graducation_per` varchar(120) NOT NULL,
  `post_graducation_per` varchar(110) NOT NULL,
  `post_graducation_university` int(11) NOT NULL,
  `post_graduaction_type` int(11) NOT NULL,
  `JBT` enum('yes','no') NOT NULL,
  `NTT` enum('yes','no') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_login_details`
--

DROP TABLE IF EXISTS `employee_login_details`;
CREATE TABLE IF NOT EXISTS `employee_login_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `username` varchar(190) NOT NULL,
  `password` varchar(190) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_master`
--

DROP TABLE IF EXISTS `employee_master`;
CREATE TABLE IF NOT EXISTS `employee_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(190) NOT NULL,
  `last_name` varchar(190) NOT NULL,
  `email` varchar(190) NOT NULL,
  `photo` varchar(190) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `alternate_no` varchar(120) NOT NULL,
  `employee_code` varchar(120) NOT NULL,
  `status` int(11) NOT NULL,
  `mobile` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_permanent_contact`
--

DROP TABLE IF EXISTS `employee_permanent_contact`;
CREATE TABLE IF NOT EXISTS `employee_permanent_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permanent_address` text NOT NULL,
  `permanent_p_office` varchar(120) NOT NULL,
  `permanent_district_id` int(11) NOT NULL,
  `permanent_district_name` varchar(120) NOT NULL,
  `permanent_pin` varchar(120) NOT NULL,
  `permanent_state_id` int(11) NOT NULL,
  `permanent_state_name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_previous_details`
--

DROP TABLE IF EXISTS `employee_previous_details`;
CREATE TABLE IF NOT EXISTS `employee_previous_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(120) NOT NULL,
  `name_of_pervious_org` varchar(120) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `designation_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_professional_details`
--

DROP TABLE IF EXISTS `employee_professional_details`;
CREATE TABLE IF NOT EXISTS `employee_professional_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `employee_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  `seen` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

DROP TABLE IF EXISTS `school_details`;
CREATE TABLE IF NOT EXISTS `school_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `registration_no` varchar(190) NOT NULL,
  `affilated_to` int(11) NOT NULL,
  `from_class` int(11) NOT NULL,
  `to_class` int(11) NOT NULL,
  `admin_username` varchar(120) NOT NULL,
  `admin_password` varchar(120) NOT NULL,
  `hostel` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_license`
--

DROP TABLE IF EXISTS `school_license`;
CREATE TABLE IF NOT EXISTS `school_license` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_payment_details`
--

DROP TABLE IF EXISTS `school_payment_details`;
CREATE TABLE IF NOT EXISTS `school_payment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_mode_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `receipt_no` varchar(190) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `sortname` varchar(90) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `start_date`, `end_date`, `sortname`, `status`) VALUES
(1, '2016-04-01', '2017-03-31', '2016-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_address`
--

DROP TABLE IF EXISTS `student_address`;
CREATE TABLE IF NOT EXISTS `student_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `h_no` varchar(120) NOT NULL,
  `street_address` text NOT NULL,
  `post_office` varchar(120) NOT NULL,
  `district` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_address`
--

INSERT INTO `student_address` (`id`, `student_id`, `h_no`, `street_address`, `post_office`, `district`, `state`, `country`) VALUES
(1, 2, '789', 'saidhaisuhdaisdhiuh', 'iahsiuh', 265, 17, 1),
(2, 3, '789', 'saidhaisuhdaisdhiuh', 'iahsiuh', 265, 17, 1),
(3, 4, '7878', 'asaoisjdoiasjdas', 'asdsdas', 253, 17, 1),
(4, 5, '89', 'asdasdasd', 'asdasd', 141, 12, 1),
(5, 6, '89', 'asdasdasd', 'asdasd', 141, 12, 1),
(6, 7, '1', 'oooooookokokpokpokpo', 'asa', 95, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_education`
--

DROP TABLE IF EXISTS `student_education`;
CREATE TABLE IF NOT EXISTS `student_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `roll_id` int(11) NOT NULL,
  `addmission_no` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_education`
--

INSERT INTO `student_education` (`id`, `class_id`, `section_id`, `session_id`, `roll_id`, `addmission_no`, `student_id`) VALUES
(1, 1, 1, 1, 1, 1, 2),
(2, 1, 1, 1, 2, 1, 3),
(3, 1, 1, 1, 1, 4, 4),
(4, 1, 1, 1, 1, 5, 5),
(5, 1, 1, 1, 4, 6, 6),
(6, 1, 1, 1, 6, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

DROP TABLE IF EXISTS `student_master`;
CREATE TABLE IF NOT EXISTS `student_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `do` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `photo` text NOT NULL,
  `contact` varchar(190) NOT NULL,
  `from_session` int(11) NOT NULL,
  `to_session` int(11) DEFAULT NULL,
  `addmission_no` varchar(40) NOT NULL,
  `catagory` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `from_session` (`from_session`),
  KEY `to_session` (`to_session`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`id`, `name`, `do`, `gender`, `photo`, `contact`, `from_session`, `to_session`, `addmission_no`, `catagory`) VALUES
(1, 'syapa', '2016-06-16', 'male', 'MaMsoH9wZdFZYujWD9yEeTjSJWEWLbbE.jpg', '78787878787', 1, NULL, '1', 3),
(2, 'syapa', '2016-06-16', 'male', 'belEi3gPUxszqSuHvjtBu24YDqWy4dw4.jpg', '78787878787', 1, NULL, '1', 3),
(3, 'syapa', '2016-06-16', 'male', 'nLGhKZm98uxTJP1E4kKMh3Uiz3JGgDu8.jpg', '78787878787', 1, NULL, '1', 3),
(4, 'gabbar', '2016-06-23', 'male', 'M7e2521AAexPQ0AFWapbEZRHTaVvlxq4.jpg', '878787', 1, NULL, '4', 2),
(5, 'sdiashdia', '2016-06-08', 'male', '6pSDYjaN3di2Bz5v-wu86DcptVTHbzfc.jpg', '989898', 1, NULL, '5', 3),
(6, 'sdiashdia', '2016-06-08', 'male', 'yR4SdVsWFzzo1KxuxASvwfFBVlhpRQlZ.jpg', '989898', 1, NULL, '6', 3),
(7, 'raghavnn', '2016-07-01', 'male', 'tb37Mux0wJNqvRwizms-MdhHVVlsCnAb.jpg', '78', 1, NULL, '7', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_transport`
--

DROP TABLE IF EXISTS `student_transport`;
CREATE TABLE IF NOT EXISTS `student_transport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_transport`
--

INSERT INTO `student_transport` (`id`, `student_id`, `route_id`, `station_id`, `session_id`) VALUES
(1, 2, 1, 1, 1),
(2, 3, 1, 1, 1),
(3, 4, 1, 1, 1),
(4, 5, 1, 3, 1),
(5, 6, 1, 3, 1),
(6, 7, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `time_class_teacher_duration`
--

DROP TABLE IF EXISTS `time_class_teacher_duration`;
CREATE TABLE IF NOT EXISTS `time_class_teacher_duration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duration` int(11) NOT NULL,
  `per_week` int(11) NOT NULL,
  `time_table_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_periods_day`
--

DROP TABLE IF EXISTS `time_periods_day`;
CREATE TABLE IF NOT EXISTS `time_periods_day` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `monday` int(11) NOT NULL,
  `tuesday` int(11) NOT NULL,
  `wednesday` int(11) NOT NULL,
  `thursday` int(11) NOT NULL,
  `friday` int(11) NOT NULL,
  `saturday` int(11) NOT NULL,
  `time_table_id` int(11) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

DROP TABLE IF EXISTS `time_table`;
CREATE TABLE IF NOT EXISTS `time_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `time_table_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_table_setup`
--

DROP TABLE IF EXISTS `time_table_setup`;
CREATE TABLE IF NOT EXISTS `time_table_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `for_classes` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'NeH-55TNiuH_bLFqmD0v_XEqIDK-_7MQ', '$2y$13$ypQpoC0fFQ4BHT20kZvF7eG3ozmt9DDTmM3DP5a/t.GBqyHx8ZygW', NULL, 'admin@admin.com', 10, 1462951562, 1462951562);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$bXnBcRlBy2hIXupdrXk7bOAssIqGBB40QIektoTzHqlPAEfpbCkve', '5HmzJmTCXor25tnpEgYkglNQ2v9X0xpga6byhJBlISrDIEByIBWWOrmFAX95', '2016-06-16 11:41:40', '2016-06-18 03:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `_board_master`
--

DROP TABLE IF EXISTS `_board_master`;
CREATE TABLE IF NOT EXISTS `_board_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_class_master`
--

DROP TABLE IF EXISTS `_class_master`;
CREATE TABLE IF NOT EXISTS `_class_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(9) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_class_master`
--

INSERT INTO `_class_master` (`id`, `name`, `status`) VALUES
(1, 'Nursery', 1),
(2, 'LKG', 1),
(3, 'UKG', 1),
(4, 'I', 1),
(5, 'II', 1),
(6, 'III', 1),
(7, 'IV', 1),
(8, 'V', 1),
(9, 'VI', 1),
(10, 'VII', 1),
(11, 'VIII', 1),
(12, 'IX', 1),
(13, 'X', 1),
(14, 'XI-ARTS', 1),
(15, 'XI-COM', 1),
(16, 'XI-SCI', 1),
(17, 'XII-ART', 1),
(18, 'XII-COM', 1),
(19, 'XII-SCI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `_class_section_relation`
--

DROP TABLE IF EXISTS `_class_section_relation`;
CREATE TABLE IF NOT EXISTS `_class_section_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `class_id` (`class_id`,`section_id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_class_section_relation`
--

INSERT INTO `_class_section_relation` (`id`, `class_id`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 1, '2016-06-08 21:39:47', '2016-06-08 21:39:47'),
(4, 3, 2, '2016-06-08 21:39:59', '2016-06-08 21:39:59'),
(5, 4, 1, '2016-06-08 21:40:07', '2016-06-08 21:40:07'),
(6, 4, 2, '2016-06-08 21:40:15', '2016-06-08 21:40:15'),
(7, 5, 1, '2016-06-08 21:40:25', '2016-06-08 21:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `_class_subject_assign`
--

DROP TABLE IF EXISTS `_class_subject_assign`;
CREATE TABLE IF NOT EXISTS `_class_subject_assign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_country`
--

DROP TABLE IF EXISTS `_country`;
CREATE TABLE IF NOT EXISTS `_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_country`
--

INSERT INTO `_country` (`id`, `name`) VALUES
(1, 'INDIA'),
(2, 'Nepal'),
(3, 'dytyftftf');

-- --------------------------------------------------------

--
-- Table structure for table `_day_table`
--

DROP TABLE IF EXISTS `_day_table`;
CREATE TABLE IF NOT EXISTS `_day_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_degree`
--

DROP TABLE IF EXISTS `_degree`;
CREATE TABLE IF NOT EXISTS `_degree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `degree_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_degree_type`
--

DROP TABLE IF EXISTS `_degree_type`;
CREATE TABLE IF NOT EXISTS `_degree_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_department`
--

DROP TABLE IF EXISTS `_department`;
CREATE TABLE IF NOT EXISTS `_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(130) NOT NULL,
  `sub_department_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_designation`
--

DROP TABLE IF EXISTS `_designation`;
CREATE TABLE IF NOT EXISTS `_designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_district`
--

DROP TABLE IF EXISTS `_district`;
CREATE TABLE IF NOT EXISTS `_district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=672 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_district`
--

INSERT INTO `_district` (`id`, `name`, `state_id`) VALUES
(1, 'Nicobar', 1),
(2, 'North and Middle Andaman', 1),
(3, 'South Andaman', 1),
(4, 'Anantapur', 2),
(5, 'Chittoor', 2),
(6, 'Cuddapah', 2),
(7, 'East Godavari', 2),
(8, 'Guntur', 2),
(9, 'Krishna', 2),
(10, 'Kurnool', 2),
(11, 'Nellore', 2),
(12, 'Prakasam', 2),
(13, 'Srikakulam', 2),
(14, 'Visakhapatnam', 2),
(15, 'Vizianagaram', 2),
(16, 'West Godavari', 2),
(17, 'Anjaw', 3),
(18, 'Changlang', 3),
(19, 'Dibang Valley', 3),
(20, 'East Kameng', 3),
(21, 'East Siang', 3),
(22, 'Kurung Kumey', 3),
(23, 'Lohit', 3),
(24, 'Longding', 3),
(25, 'Lower Dibang Valley', 3),
(26, 'Lower Subansiri', 3),
(27, 'Papum Pare', 3),
(28, 'Tawang', 3),
(29, 'Tirap', 3),
(30, 'Upper Siang', 3),
(31, 'Upper Subansiri', 3),
(32, 'West Kameng', 3),
(33, 'West Siang', 3),
(34, 'Baksa', 4),
(35, 'Barpeta', 4),
(36, 'Bongaigaon', 4),
(37, 'Cachar', 4),
(38, 'Chirang', 4),
(39, 'Darrang', 4),
(40, 'Dhemaji', 4),
(41, 'Dhubri', 4),
(42, 'Dibrugarh', 4),
(43, 'Dima Hasao', 4),
(44, 'Goalpara', 4),
(45, 'Golaghat', 4),
(46, 'Hailakandi', 4),
(47, 'Jorhat', 4),
(48, 'Kamrup Metropolitan', 4),
(49, 'Kamrup', 4),
(50, 'Karbi Anglong', 4),
(51, 'Karimganj', 4),
(52, 'Kokrajhar', 4),
(53, 'Lakhimpur', 4),
(54, 'Morigaon', 4),
(55, 'Nagaon', 4),
(56, 'Nalbari', 4),
(57, 'Sivasagar', 4),
(58, 'Sonitpur', 4),
(59, 'Tinsukia', 4),
(60, 'Udalguri', 4),
(61, 'Araria', 5),
(62, 'Arwal', 5),
(63, 'Aurangabad', 5),
(64, 'Banka', 5),
(65, 'Begusarai', 5),
(66, 'Bhagalpur', 5),
(67, 'Bhojpur', 5),
(68, 'Buxar', 5),
(69, 'Darbhanga', 5),
(70, 'East Champaran (Motihari)', 5),
(71, 'Gaya', 5),
(72, 'Gopalganj', 5),
(73, 'Jamui', 5),
(74, 'Jehanabad', 5),
(75, 'Kaimur (Bhabua)', 5),
(76, 'Katihar', 5),
(77, 'Khagaria', 5),
(78, 'Kishanganj', 5),
(79, 'Lakhisarai', 5),
(80, 'Madhepura', 5),
(81, 'Madhubani', 5),
(82, 'Munger (Monghyr)', 5),
(83, 'Muzaffarpur', 5),
(84, 'Nalanda', 5),
(85, 'Nawada', 5),
(86, 'Patna', 5),
(87, 'Purnia (Purnea)', 5),
(88, 'Rohtas', 5),
(89, 'Saharsa', 5),
(90, 'Samastipur', 5),
(91, 'Saran', 5),
(92, 'Sheikhpura', 5),
(93, 'Sheohar', 5),
(94, 'Sitamarhi', 5),
(95, 'Siwan', 5),
(96, 'Supaul', 5),
(97, 'Vaishali', 5),
(98, 'West Champaran', 5),
(99, 'Chandigarh', 6),
(100, 'Balod', 7),
(101, 'Baloda Bazar', 7),
(102, 'Balrampur', 7),
(103, 'Bastar', 7),
(104, 'Bemetara', 7),
(105, 'Bijapur', 7),
(106, 'Bilaspur', 7),
(107, 'Dantewada (South Bastar)', 7),
(108, 'Dhamtari', 7),
(109, 'Durg', 7),
(110, 'Gariaband', 7),
(111, 'Janjgir-Champa', 7),
(112, 'Jashpur', 7),
(113, 'Kabirdham (Kawardha)', 7),
(114, 'Kanker (North Bastar)', 7),
(115, 'Kondagaon', 7),
(116, 'Korba', 7),
(117, 'Korea (Koriya)', 7),
(118, 'Mahasamund', 7),
(119, 'Mungeli', 7),
(120, 'Narayanpur', 7),
(121, 'Raigarh', 7),
(122, 'Raipur', 7),
(123, 'Rajnandgaon', 7),
(124, 'Sukma', 7),
(125, 'Surajpur', 7),
(126, 'Surguja', 7),
(127, 'Dadra & Nagar Haveli', 8),
(128, 'Daman', 9),
(129, 'Diu', 9),
(130, 'Central Delhi', 10),
(131, 'East Delhi', 10),
(132, 'New Delhi', 10),
(133, 'North Delhi', 10),
(134, 'North East Delhi', 10),
(135, 'North West Delhi', 10),
(136, 'South Delhi', 10),
(137, 'South West Delhi', 10),
(138, 'West Delhi', 10),
(139, 'North Goa', 11),
(140, 'South Goa', 11),
(141, 'Ahmedabad', 12),
(142, 'Amreli', 12),
(143, 'Anand', 12),
(144, 'Aravalli', 12),
(145, 'Banaskantha (Palanpur)', 12),
(146, 'Bharuch', 12),
(147, 'Bhavnagar', 12),
(148, 'Botad', 12),
(149, 'Chhota Udepur', 12),
(150, 'Dahod', 12),
(151, 'Dangs (Ahwa)', 12),
(152, 'Devbhoomi Dwarka', 12),
(153, 'Gandhinagar', 12),
(154, 'Gir Somnath', 12),
(155, 'Jamnagar', 12),
(156, 'Junagadh', 12),
(157, 'Kachchh', 12),
(158, 'Kheda (Nadiad)', 12),
(159, 'Mahisagar', 12),
(160, 'Mehsana', 12),
(161, 'Morbi', 12),
(162, 'Narmada (Rajpipla)', 12),
(163, 'Navsari', 12),
(164, 'Panchmahal (Godhra)', 12),
(165, 'Patan', 12),
(166, 'Porbandar', 12),
(167, 'Rajkot', 12),
(168, 'Sabarkantha (Himmatnagar)', 12),
(169, 'Surat', 12),
(170, 'Surendranagar', 12),
(171, 'Tapi (Vyara)', 12),
(172, 'Vadodara', 12),
(173, 'Valsad', 12),
(174, 'Ambala', 13),
(175, 'Bhiwani', 13),
(176, 'Faridabad', 13),
(177, 'Fatehabad', 13),
(178, 'Gurgaon', 13),
(179, 'Hisar', 13),
(180, 'Jhajjar', 13),
(181, 'Jind', 13),
(182, 'Kaithal', 13),
(183, 'Karnal', 13),
(184, 'Kurukshetra', 13),
(185, 'Mahendragarh', 13),
(186, 'Mewat', 13),
(187, 'Palwal', 13),
(188, 'Panchkula', 13),
(189, 'Panipat', 13),
(190, 'Rewari', 13),
(191, 'Rohtak', 13),
(192, 'Sirsa', 13),
(193, 'Sonipat', 13),
(194, 'Yamunanagar', 13),
(195, 'Bilaspur', 14),
(196, 'Chamba', 14),
(197, 'Hamirpur', 14),
(198, 'Kangra', 14),
(199, 'Kinnaur', 14),
(200, 'Kullu', 14),
(201, 'Lahaul & Spiti', 14),
(202, 'Mandi', 14),
(203, 'Shimla', 14),
(204, 'Sirmaur (Sirmour)', 14),
(205, 'Solan', 14),
(206, 'Una', 14),
(207, 'Anantnag', 15),
(208, 'Bandipora', 15),
(209, 'Baramulla', 15),
(210, 'Budgam', 15),
(211, 'Doda', 15),
(212, 'Ganderbal', 15),
(213, 'Jammu', 15),
(214, 'Kargil', 15),
(215, 'Kathua', 15),
(216, 'Kishtwar', 15),
(217, 'Kulgam', 15),
(218, 'Kupwara', 15),
(219, 'Leh', 15),
(220, 'Poonch', 15),
(221, 'Pulwama', 15),
(222, 'Rajouri', 15),
(223, 'Ramban', 15),
(224, 'Reasi', 15),
(225, 'Samba', 15),
(226, 'Shopian', 15),
(227, 'Srinagar', 15),
(228, 'Udhampur', 15),
(229, 'Bokaro', 16),
(230, 'Chatra', 16),
(231, 'Deoghar', 16),
(232, 'Dhanbad', 16),
(233, 'Dumka', 16),
(234, 'East Singhbhum', 16),
(235, 'Garhwa', 16),
(236, 'Giridih', 16),
(237, 'Godda', 16),
(238, 'Gumla', 16),
(239, 'Hazaribag', 16),
(240, 'Jamtara', 16),
(241, 'Khunti', 16),
(242, 'Koderma', 16),
(243, 'Latehar', 16),
(244, 'Lohardaga', 16),
(245, 'Pakur', 16),
(246, 'Palamu', 16),
(247, 'Ramgarh', 16),
(248, 'Ranchi', 16),
(249, 'Sahibganj', 16),
(250, 'Seraikela-Kharsawan', 16),
(251, 'Simdega', 16),
(252, 'West Singhbhum', 16),
(253, 'Bagalkot', 17),
(254, 'Bangalore Rural', 17),
(255, 'Bangalore Urban', 17),
(256, 'Belgaum', 17),
(257, 'Bellary', 17),
(258, 'Bidar', 17),
(259, 'Bijapur', 17),
(260, 'Chamarajanagar', 17),
(261, 'Chickmagalur', 17),
(262, 'Chikballapur', 17),
(263, 'Chitradurga', 17),
(264, 'Dakshina Kannada', 17),
(265, 'Davangere', 17),
(266, 'Dharwad', 17),
(267, 'Gadag', 17),
(268, 'Gulbarga', 17),
(269, 'Hassan', 17),
(270, 'Haveri', 17),
(271, 'Kodagu', 17),
(272, 'Kolar', 17),
(273, 'Koppal', 17),
(274, 'Mandya', 17),
(275, 'Mysore', 17),
(276, 'Raichur', 17),
(277, 'Ramnagara', 17),
(278, 'Shimoga', 17),
(279, 'Tumkur', 17),
(280, 'Udupi', 17),
(281, 'Uttara Kannada (Karwar)', 17),
(282, 'Yadgir', 17),
(283, 'Alappuzha', 18),
(284, 'Ernakulam', 18),
(285, 'Idukki', 18),
(286, 'Kannur', 18),
(287, 'Kasaragod', 18),
(288, 'Kollam', 18),
(289, 'Kottayam', 18),
(290, 'Kozhikode', 18),
(291, 'Malappuram', 18),
(292, 'Palakkad', 18),
(293, 'Pathanamthitta', 18),
(294, 'Thiruvananthapuram', 18),
(295, 'Thrissur', 18),
(296, 'Wayanad', 18),
(297, 'Lakshadweep', 19),
(298, 'Alirajpur', 20),
(299, 'Anuppur', 20),
(300, 'Ashoknagar', 20),
(301, 'Balaghat', 20),
(302, 'Barwani', 20),
(303, 'Betul', 20),
(304, 'Bhind', 20),
(305, 'Bhopal', 20),
(306, 'Burhanpur', 20),
(307, 'Chhatarpur', 20),
(308, 'Chhindwara', 20),
(309, 'Damoh', 20),
(310, 'Datia', 20),
(311, 'Dewas', 20),
(312, 'Dhar', 20),
(313, 'Dindori', 20),
(314, 'Guna', 20),
(315, 'Gwalior', 20),
(316, 'Harda', 20),
(317, 'Hoshangabad', 20),
(318, 'Indore', 20),
(319, 'Jabalpur', 20),
(320, 'Jhabua', 20),
(321, 'Katni', 20),
(322, 'Khandwa', 20),
(323, 'Khargone', 20),
(324, 'Mandla', 20),
(325, 'Mandsaur', 20),
(326, 'Morena', 20),
(327, 'Narsinghpur', 20),
(328, 'Neemuch', 20),
(329, 'Panna', 20),
(330, 'Raisen', 20),
(331, 'Rajgarh', 20),
(332, 'Ratlam', 20),
(333, 'Rewa', 20),
(334, 'Sagar', 20),
(335, 'Satna', 20),
(336, 'Sehore', 20),
(337, 'Seoni', 20),
(338, 'Shahdol', 20),
(339, 'Shajapur', 20),
(340, 'Sheopur', 20),
(341, 'Shivpuri', 20),
(342, 'Sidhi', 20),
(343, 'Singrauli', 20),
(344, 'Tikamgarh', 20),
(345, 'Ujjain', 20),
(346, 'Umaria', 20),
(347, 'Vidisha', 20),
(348, 'Ahmednagar', 21),
(349, 'Akola', 21),
(350, 'Amravati', 21),
(351, 'Aurangabad', 21),
(352, 'Beed', 21),
(353, 'Bhandara', 21),
(354, 'Buldhana', 21),
(355, 'Chandrapur', 21),
(356, 'Dhule', 21),
(357, 'Gadchiroli', 21),
(358, 'Gondia', 21),
(359, 'Hingoli', 21),
(360, 'Jalgaon', 21),
(361, 'Jalna', 21),
(362, 'Kolhapur', 21),
(363, 'Latur', 21),
(364, 'Mumbai City', 21),
(365, 'Mumbai Suburban', 21),
(366, 'Nagpur', 21),
(367, 'Nanded', 21),
(368, 'Nandurbar', 21),
(369, 'Nashik', 21),
(370, 'Osmanabad', 21),
(371, 'Parbhani', 21),
(372, 'Pune', 21),
(373, 'Raigad', 21),
(374, 'Ratnagiri', 21),
(375, 'Sangli', 21),
(376, 'Satara', 21),
(377, 'Sindhudurg', 21),
(378, 'Solapur', 21),
(379, 'Thane', 21),
(380, 'Wardha', 21),
(381, 'Washim', 21),
(382, 'Yavatmal', 21),
(383, 'Bishnupur', 22),
(384, 'Chandel', 22),
(385, 'Churachandpur', 22),
(386, 'Imphal East', 22),
(387, 'Imphal West', 22),
(388, 'Senapati', 22),
(389, 'Tamenglong', 22),
(390, 'Thoubal', 22),
(391, 'Ukhrul', 22),
(392, 'East Garo Hills', 23),
(393, 'East Jaintia Hills', 23),
(394, 'East Khasi Hills', 23),
(395, 'North Garo Hills', 23),
(396, 'Ri Bhoi', 23),
(397, 'South Garo Hills', 23),
(398, 'South West Garo Hills', 23),
(399, 'South West Khasi Hills', 23),
(400, 'West Garo Hills', 23),
(401, 'West Jaintia Hills', 23),
(402, 'West Khasi Hills', 23),
(403, 'Aizawl', 24),
(404, 'Champhai', 24),
(405, 'Kolasib', 24),
(406, 'Lawngtlai', 24),
(407, 'Lunglei', 24),
(408, 'Mamit', 24),
(409, 'Saiha', 24),
(410, 'Serchhip', 24),
(411, 'Dimapur', 25),
(412, 'Kiphire', 25),
(413, 'Kohima', 25),
(414, 'Longleng', 25),
(415, 'Mokokchung', 25),
(416, 'Mon', 25),
(417, 'Peren', 25),
(418, 'Phek', 25),
(419, 'Tuensang', 25),
(420, 'Wokha', 25),
(421, 'Zunheboto', 25),
(422, 'Angul', 26),
(423, 'Balangir', 26),
(424, 'Balasore', 26),
(425, 'Bargarh', 26),
(426, 'Bhadrak', 26),
(427, 'Boudh', 26),
(428, 'Cuttack', 26),
(429, 'Deogarh', 26),
(430, 'Dhenkanal', 26),
(431, 'Gajapati', 26),
(432, 'Ganjam', 26),
(433, 'Jagatsinghapur', 26),
(434, 'Jajpur', 26),
(435, 'Jharsuguda', 26),
(436, 'Kalahandi', 26),
(437, 'Kandhamal', 26),
(438, 'Kendrapara', 26),
(439, 'Kendujhar (Keonjhar)', 26),
(440, 'Khordha', 26),
(441, 'Koraput', 26),
(442, 'Malkangiri', 26),
(443, 'Mayurbhanj', 26),
(444, 'Nabarangpur', 26),
(445, 'Nayagarh', 26),
(446, 'Nuapada', 26),
(447, 'Puri', 26),
(448, 'Rayagada', 26),
(449, 'Sambalpur', 26),
(450, 'Sonepur', 26),
(451, 'Sundargarh', 26),
(452, 'Karaikal', 27),
(453, 'Mahe', 27),
(454, 'Pondicherry', 27),
(455, 'Yanam', 27),
(456, 'Amritsar', 28),
(457, 'Barnala', 28),
(458, 'Bathinda', 28),
(459, 'Faridkot', 28),
(460, 'Fatehgarh Sahib', 28),
(461, 'Fazilka', 28),
(462, 'Ferozepur', 28),
(463, 'Gurdaspur', 28),
(464, 'Hoshiarpur', 28),
(465, 'Jalandhar', 28),
(466, 'Kapurthala', 28),
(467, 'Ludhiana', 28),
(468, 'Mansa', 28),
(469, 'Moga', 28),
(470, 'Muktsar', 28),
(471, 'Nawanshahr', 28),
(472, 'Pathankot', 28),
(473, 'Patiala', 28),
(474, 'Rupnagar', 28),
(475, 'Sangrur', 28),
(476, 'SAS Nagar (Mohali)', 28),
(477, 'Tarn Taran', 28),
(478, 'Ajmer', 29),
(479, 'Alwar', 29),
(480, 'Banswara', 29),
(481, 'Baran', 29),
(482, 'Barmer', 29),
(483, 'Bharatpur', 29),
(484, 'Bhilwara', 29),
(485, 'Bikaner', 29),
(486, 'Bundi', 29),
(487, 'Chittorgarh', 29),
(488, 'Churu', 29),
(489, 'Dausa', 29),
(490, 'Dholpur', 29),
(491, 'Dungarpur', 29),
(492, 'Hanumangarh', 29),
(493, 'Jaipur', 29),
(494, 'Jaisalmer', 29),
(495, 'Jalore', 29),
(496, 'Jhalawar', 29),
(497, 'Jhunjhunu', 29),
(498, 'Jodhpur', 29),
(499, 'Karauli', 29),
(500, 'Kota', 29),
(501, 'Nagaur', 29),
(502, 'Pali', 29),
(503, 'Pratapgarh', 29),
(504, 'Rajsamand', 29),
(505, 'Sawai Madhopur', 29),
(506, 'Sikar', 29),
(507, 'Sirohi', 29),
(508, 'Sri Ganganagar', 29),
(509, 'Tonk', 29),
(510, 'Udaipur', 29),
(511, 'East Sikkim', 30),
(512, 'North Sikkim', 30),
(513, 'South Sikkim', 30),
(514, 'West Sikkim', 30),
(515, 'Ariyalur', 31),
(516, 'Chennai', 31),
(517, 'Coimbatore', 31),
(518, 'Cuddalore', 31),
(519, 'Dharmapuri', 31),
(520, 'Dindigul', 31),
(521, 'Erode', 31),
(522, 'Kanchipuram', 31),
(523, 'Kanyakumari', 31),
(524, 'Karur', 31),
(525, 'Krishnagiri', 31),
(526, 'Madurai', 31),
(527, 'Nagapattinam', 31),
(528, 'Namakkal', 31),
(529, 'Nilgiris', 31),
(530, 'Perambalur', 31),
(531, 'Pudukkottai', 31),
(532, 'Ramanathapuram', 31),
(533, 'Salem', 31),
(534, 'Sivaganga', 31),
(535, 'Thanjavur', 31),
(536, 'Theni', 31),
(537, 'Thoothukudi (Tuticorin)', 31),
(538, 'Tiruchirappalli', 31),
(539, 'Tirunelveli', 31),
(540, 'Tiruppur', 31),
(541, 'Tiruvallur', 31),
(542, 'Tiruvannamalai', 31),
(543, 'Tiruvarur', 31),
(544, 'Vellore', 31),
(545, 'Viluppuram', 31),
(546, 'Virudhunagar', 31),
(547, 'Adilabad', 32),
(548, 'Hyderabad', 32),
(549, 'Karimnagar', 32),
(550, 'Khammam', 32),
(551, 'Mahabubnagar', 32),
(552, 'Medak', 32),
(553, 'Nalgonda', 32),
(554, 'Nizamabad', 32),
(555, 'Rangareddy', 32),
(556, 'Warangal', 32),
(557, 'Dhalai', 33),
(558, 'Gomati', 33),
(559, 'Khowai', 33),
(560, 'North Tripura', 33),
(561, 'Sepahijala', 33),
(562, 'South Tripura', 33),
(563, 'Unakoti', 33),
(564, 'West Tripura', 33),
(565, 'Agra', 34),
(566, 'Aligarh', 34),
(567, 'Allahabad', 34),
(568, 'Ambedkar Nagar', 34),
(569, 'Auraiya', 34),
(570, 'Azamgarh', 34),
(571, 'Baghpat', 34),
(572, 'Bahraich', 34),
(573, 'Ballia', 34),
(574, 'Balrampur', 34),
(575, 'Banda', 34),
(576, 'Barabanki', 34),
(577, 'Bareilly', 34),
(578, 'Basti', 34),
(579, 'Bhim Nagar', 34),
(580, 'Bijnor', 34),
(581, 'Budaun', 34),
(582, 'Bulandshahr', 34),
(583, 'Chandauli', 34),
(584, 'Chatrapati Sahuji Mahraj Nagar', 34),
(585, 'Chitrakoot', 34),
(586, 'Deoria', 34),
(587, 'Etah', 34),
(588, 'Etawah', 34),
(589, 'Faizabad', 34),
(590, 'Farrukhabad', 34),
(591, 'Fatehpur', 34),
(592, 'Firozabad', 34),
(593, 'Gautam Buddha Nagar', 34),
(594, 'Ghaziabad', 34),
(595, 'Ghazipur', 34),
(596, 'Gonda', 34),
(597, 'Gorakhpur', 34),
(598, 'Hamirpur', 34),
(599, 'Hardoi', 34),
(600, 'Hathras', 34),
(601, 'Jalaun', 34),
(602, 'Jaunpur', 34),
(603, 'Jhansi', 34),
(604, 'Jyotiba Phule Nagar (J.P. Nagar)', 34),
(605, 'Kannauj', 34),
(606, 'Kanpur Dehat', 34),
(607, 'Kanpur Nagar', 34),
(608, 'Kanshiram Nagar (Kasganj)', 34),
(609, 'Kaushambi', 34),
(610, 'Kushinagar (Padrauna)', 34),
(611, 'Lakhimpur - Kheri', 34),
(612, 'Lalitpur', 34),
(613, 'Lucknow', 34),
(614, 'Maharajganj', 34),
(615, 'Mahoba', 34),
(616, 'Mainpuri', 34),
(617, 'Mathura', 34),
(618, 'Mau', 34),
(619, 'Meerut', 34),
(620, 'Mirzapur', 34),
(621, 'Moradabad', 34),
(622, 'Muzaffarnagar', 34),
(623, 'Panchsheel Nagar', 34),
(624, 'Pilibhit', 34),
(625, 'Prabuddh Nagar', 34),
(626, 'Pratapgarh', 34),
(627, 'RaeBareli', 34),
(628, 'Rampur', 34),
(629, 'Saharanpur', 34),
(630, 'Sant Kabir Nagar', 34),
(631, 'Sant Ravidas Nagar', 34),
(632, 'Shahjahanpur', 34),
(633, 'Shravasti', 34),
(634, 'Siddharth Nagar', 34),
(635, 'Sitapur', 34),
(636, 'Sonbhadra', 34),
(637, 'Sultanpur', 34),
(638, 'Unnao', 34),
(639, 'Varanasi', 34),
(640, 'Almora', 35),
(641, 'Bageshwar', 35),
(642, 'Chamoli', 35),
(643, 'Champawat', 35),
(644, 'Dehradun', 35),
(645, 'Haridwar', 35),
(646, 'Nainital', 35),
(647, 'Pauri Garhwal', 35),
(648, 'Pithoragarh', 35),
(649, 'Rudraprayag', 35),
(650, 'Tehri Garhwal', 35),
(651, 'Udham Singh Nagar', 35),
(652, 'Uttarkashi', 35),
(653, 'Bankura', 36),
(654, 'Birbhum', 36),
(655, 'Burdwan (Bardhaman)', 36),
(656, 'Cooch Behar', 36),
(657, 'Dakshin Dinajpur (South Dinajpur)', 36),
(658, 'Darjeeling', 36),
(659, 'Hooghly', 36),
(660, 'Howrah', 36),
(661, 'Jalpaiguri', 36),
(662, 'Kolkata', 36),
(663, 'Malda', 36),
(664, 'Murshidabad', 36),
(665, 'Nadia', 36),
(666, 'North 24 Parganas', 36),
(667, 'Paschim Medinipur (West Medinipur)', 36),
(668, 'Purba Medinipur (East Medinipur)', 36),
(669, 'Purulia', 36),
(670, 'South 24 Parganas', 36),
(671, 'Uttar Dinajpur (North Dinajpur)', 36);

-- --------------------------------------------------------

--
-- Table structure for table `_employee_type`
--

DROP TABLE IF EXISTS `_employee_type`;
CREATE TABLE IF NOT EXISTS `_employee_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(190) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_fee_breakup`
--

DROP TABLE IF EXISTS `_fee_breakup`;
CREATE TABLE IF NOT EXISTS `_fee_breakup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fee_type_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `amt` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_fee_breakup`
--

INSERT INTO `_fee_breakup` (`id`, `fee_type_id`, `name`, `amt`, `class_id`) VALUES
(1, 1, 'Admission', 4500, 1),
(2, 1, 'security', 500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `_fee_master`
--

DROP TABLE IF EXISTS `_fee_master`;
CREATE TABLE IF NOT EXISTS `_fee_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_fee_master`
--

INSERT INTO `_fee_master` (`id`, `class_id`, `name`, `type_id`) VALUES
(1, 1, '500', 2),
(2, 1, '1200', 1),
(3, 1, '5000', 3),
(4, 2, '5000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `_fee_payment_details`
--

DROP TABLE IF EXISTS `_fee_payment_details`;
CREATE TABLE IF NOT EXISTS `_fee_payment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fee_id` int(11) NOT NULL,
  `fee_type_id` int(11) NOT NULL,
  `amount` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_fee_record_submission`
--

DROP TABLE IF EXISTS `_fee_record_submission`;
CREATE TABLE IF NOT EXISTS `_fee_record_submission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `amount` varchar(120) NOT NULL,
  `for_month` date NOT NULL,
  `to_month` date NOT NULL,
  `pay_mode_id` int(11) NOT NULL,
  `pay_mode-detail` text NOT NULL,
  `remarks` text NOT NULL,
  `emp_id` text NOT NULL,
  `created_on` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_fee_type`
--

DROP TABLE IF EXISTS `_fee_type`;
CREATE TABLE IF NOT EXISTS `_fee_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_fee_type`
--

INSERT INTO `_fee_type` (`id`, `name`, `status`) VALUES
(1, 'Tution', 1),
(2, 'Transport', 1),
(3, 'Admission', 1);

-- --------------------------------------------------------

--
-- Table structure for table `_graducation`
--

DROP TABLE IF EXISTS `_graducation`;
CREATE TABLE IF NOT EXISTS `_graducation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_notification_student`
--

DROP TABLE IF EXISTS `_notification_student`;
CREATE TABLE IF NOT EXISTS `_notification_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `massage` text NOT NULL,
  `date_time` timestamp NOT NULL,
  `session_id` int(11) NOT NULL,
  `seen_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_payment_mode`
--

DROP TABLE IF EXISTS `_payment_mode`;
CREATE TABLE IF NOT EXISTS `_payment_mode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` varchar(90) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_payment_mode`
--

INSERT INTO `_payment_mode` (`id`, `mode`, `created_at`, `updated_at`) VALUES
(1, 'Cheque', '2016-05-11 17:23:35', '2016-05-11 17:23:35'),
(2, 'Cash', '2016-05-11 17:23:46', '2016-05-11 17:23:46'),
(3, 'DD', '2016-05-11 17:23:56', '2016-05-11 17:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `_post_graduation`
--

DROP TABLE IF EXISTS `_post_graduation`;
CREATE TABLE IF NOT EXISTS `_post_graduation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(190) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_route`
--

DROP TABLE IF EXISTS `_route`;
CREATE TABLE IF NOT EXISTS `_route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `starting_point` varchar(90) NOT NULL,
  `end_point` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_route`
--

INSERT INTO `_route` (`id`, `starting_point`, `end_point`) VALUES
(1, 'Sector 37', 'Sector 91'),
(2, 'Sector 46', 'Eros');

-- --------------------------------------------------------

--
-- Table structure for table `_route_immediate_stations`
--

DROP TABLE IF EXISTS `_route_immediate_stations`;
CREATE TABLE IF NOT EXISTS `_route_immediate_stations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `route_id` (`route_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_route_immediate_stations`
--

INSERT INTO `_route_immediate_stations` (`id`, `route_id`, `name`) VALUES
(1, 1, 'Palla'),
(2, 1, 'Sehatpur'),
(3, 1, 'Sehatpur petrol pump'),
(4, 1, 'Surya Vihar Phase I'),
(5, 1, 'Surya Vihar phase 2'),
(6, 1, 'Sector 91'),
(7, 2, 'Sarai'),
(8, 2, 'Green Field colony'),
(9, 2, 'Omaxe green Valley'),
(10, 2, 'Lakadpur'),
(11, 2, 'Surajkund'),
(12, 2, 'Eros');

-- --------------------------------------------------------

--
-- Table structure for table `_section`
--

DROP TABLE IF EXISTS `_section`;
CREATE TABLE IF NOT EXISTS `_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(9) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_section`
--

INSERT INTO `_section` (`id`, `name`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `_special_course`
--

DROP TABLE IF EXISTS `_special_course`;
CREATE TABLE IF NOT EXISTS `_special_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(120) NOT NULL,
  `course_start_date` date NOT NULL,
  `course_end_date` date NOT NULL,
  `course_duration` varchar(120) NOT NULL,
  `course-fee` decimal(10,2) NOT NULL,
  `for_class` varchar(255) NOT NULL,
  `compulsary` enum('yes','no') NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_special_course_fee`
--

DROP TABLE IF EXISTS `_special_course_fee`;
CREATE TABLE IF NOT EXISTS `_special_course_fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `amt` varchar(120) NOT NULL,
  `pay_mode` int(11) NOT NULL,
  `pay_detail` varchar(120) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_staff_academic`
--

DROP TABLE IF EXISTS `_staff_academic`;
CREATE TABLE IF NOT EXISTS `_staff_academic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `percentage` varchar(190) NOT NULL,
  `degree_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_staff_address_current`
--

DROP TABLE IF EXISTS `_staff_address_current`;
CREATE TABLE IF NOT EXISTS `_staff_address_current` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `h_no` varchar(120) NOT NULL,
  `street_address` text NOT NULL,
  `post_office` varchar(120) NOT NULL,
  `district_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_staff_address_permanent`
--

DROP TABLE IF EXISTS `_staff_address_permanent`;
CREATE TABLE IF NOT EXISTS `_staff_address_permanent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `h_no` varchar(120) NOT NULL,
  `street_address` text NOT NULL,
  `post_office` varchar(120) NOT NULL,
  `district_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_staff_master`
--

DROP TABLE IF EXISTS `_staff_master`;
CREATE TABLE IF NOT EXISTS `_staff_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `title` varchar(120) NOT NULL,
  `department_id` int(11) NOT NULL,
  `sub_department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `leaving_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_staff_type`
--

DROP TABLE IF EXISTS `_staff_type`;
CREATE TABLE IF NOT EXISTS `_staff_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(130) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_state`
--

DROP TABLE IF EXISTS `_state`;
CREATE TABLE IF NOT EXISTS `_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_state`
--

INSERT INTO `_state` (`id`, `name`, `country_id`) VALUES
(1, 'Andaman and Nicobar Island', 1),
(2, 'Andhra Pradesh', 1),
(3, 'Arunachal Pradesh', 1),
(4, 'Assam', 1),
(5, 'Bihar', 1),
(6, 'Chandigarh', 1),
(7, 'Chhattisgarh', 1),
(8, 'Dadra and Nagar Haveli', 1),
(9, 'Daman and Diu', 1),
(10, 'Delhi', 1),
(11, 'Goa', 1),
(12, 'Gujarat', 1),
(13, 'Haryana', 1),
(14, 'Himachal Pradesh', 1),
(15, 'Jammu and Kashmir', 1),
(16, 'Jharkhand', 1),
(17, 'Karnataka', 1),
(18, 'Kerala', 1),
(19, 'Lakshadweep', 1),
(20, 'Madhya Pradesh', 1),
(21, 'Maharashtra', 1),
(22, 'Manipur', 1),
(23, 'Meghalaya', 1),
(24, 'Mizoram', 1),
(25, 'Nagaland', 1),
(26, 'Odisha', 1),
(27, 'Puducherry', 1),
(28, 'Punjab', 1),
(29, 'Rajasthan', 1),
(30, 'Sikkim', 1),
(31, 'Tamil Nadu', 1),
(32, 'Telangana', 1),
(33, 'Tripura', 1),
(34, 'Uttar Pradesh', 1),
(35, 'Uttarakhand', 1),
(36, 'West Bengal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `_student_attendance`
--

DROP TABLE IF EXISTS `_student_attendance`;
CREATE TABLE IF NOT EXISTS `_student_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_student_catagory`
--

DROP TABLE IF EXISTS `_student_catagory`;
CREATE TABLE IF NOT EXISTS `_student_catagory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `discount_in_fee` varchar(11) NOT NULL COMMENT 'in percentage',
  `discount_in_adm` varchar(11) NOT NULL COMMENT 'in percentage',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_student_catagory`
--

INSERT INTO `_student_catagory` (`id`, `name`, `discount_in_fee`, `discount_in_adm`, `created_at`, `updated_at`) VALUES
(1, 'OBC', '10', '10', '2016-05-12 05:15:23', '2016-05-12 16:38:34'),
(2, 'SC', '15', '15', '2016-05-12 11:28:29', '2016-05-12 14:30:42'),
(3, 'GENERAL', '0', '0', '2016-05-12 08:22:32', '2016-05-12 11:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `_subject`
--

DROP TABLE IF EXISTS `_subject`;
CREATE TABLE IF NOT EXISTS `_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `subject_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_subject_type`
--

DROP TABLE IF EXISTS `_subject_type`;
CREATE TABLE IF NOT EXISTS `_subject_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(190) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_subject_type`
--

INSERT INTO `_subject_type` (`id`, `name`) VALUES
(1, 'elective'),
(2, 'electionation'),
(3, 'fhfhyfuy');

-- --------------------------------------------------------

--
-- Table structure for table `_sub_department`
--

DROP TABLE IF EXISTS `_sub_department`;
CREATE TABLE IF NOT EXISTS `_sub_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `name` varchar(130) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_transport`
--

DROP TABLE IF EXISTS `_transport`;
CREATE TABLE IF NOT EXISTS `_transport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `number_plate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_transport`
--

INSERT INTO `_transport` (`id`, `name`, `status`, `number_plate`) VALUES
(1, 'Bus', 1, 'HR 21 AD 4567'),
(2, 'Bus', 1, 'HR 42 BC 4201');

-- --------------------------------------------------------

--
-- Table structure for table `_transport_route`
--

DROP TABLE IF EXISTS `_transport_route`;
CREATE TABLE IF NOT EXISTS `_transport_route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transport_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transport_id` (`transport_id`),
  KEY `route_id` (`route_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_transport_route`
--

INSERT INTO `_transport_route` (`id`, `transport_id`, `route_id`) VALUES
(1, 1, 1),
(2, 2, 2);

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
