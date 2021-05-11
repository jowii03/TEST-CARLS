-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 04:58 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_carls`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_username` char(20) NOT NULL,
  `account_password` char(50) NOT NULL,
  `account_type` char(20) NOT NULL,
  `verify` tinyint(1) NOT NULL,
  `vkey` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_username`, `account_password`, `account_type`, `verify`, `vkey`) VALUES
(18, 'iamarkyy3', '7815696ecbf1c96e6894b779456d330e', 'user', 1, '4cfcf5e02188617fbebdf9f442deed24'),
(21, 'valdeznehemiah20', '7815696ecbf1c96e6894b779456d330e', 'user', 1, '7a87d0e796e57b7ded6ba1b4ec0b6621'),
(22, 'charxz', 'dbb87b735127a30da7950fae88d10b6f', 'user', 0, 'fdfe1a098379057e3e38e17354f1a1ce'),
(23, 'monaHydroCarry', '29c42773cb16bffe8cc141d8065cd24f', 'user', 0, 'c8736dcbfe9fdae3638a947ed9386594'),
(25, 'parokyanibasa', '29c42773cb16bffe8cc141d8065cd24f', 'user', 1, '57ab509b21d64af3b56129f05f40757b'),
(26, 'Marky0120', '21232f297a57a5a743894a0e4a801fc3', 'user', 1, '53b02fd1498e242f9c6a896a5f743d4d'),
(27, 'Joey', 'd6ba0682d75eb986237fb6b594f8a31f', 'user', 1, '96130b5fd472705628804d05f21dd23c'),
(28, 'admin', 'admin', 'admin', 0, ''),
(29, 'admin', 'admin', 'admin', 1, ''),
(30, 'admin', 'admin', 'admin', 1, ''),
(31, 'admin', 'admin', 'admin', 1, ''),
(32, 'admin', 'admin', 'admin', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `log_id` int(11) NOT NULL,
  `account_id` char(20) NOT NULL,
  `log_description` char(100) NOT NULL,
  `log_target` char(50) NOT NULL,
  `log_datetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_info_id` int(11) NOT NULL,
  `admin_lastname` char(50) NOT NULL,
  `admin_firstname` char(50) NOT NULL,
  `admin_middlename` char(50) NOT NULL,
  `admin_status` char(20) NOT NULL,
  `admin_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_info_id`, `admin_lastname`, `admin_firstname`, `admin_middlename`, `admin_status`, `admin_photo`) VALUES
(70, 'Ong3', 'Mona', 'Astrolabos', 'active', 'tg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `assessment_id` int(11) NOT NULL,
  `exam_id` char(20) NOT NULL,
  `user_info_id` int(11) NOT NULL,
  `assessment_score` int(100) NOT NULL,
  `assessment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessment_id`, `exam_id`, `user_info_id`, `assessment_score`, `assessment_date`) VALUES
(3, '2', 12, 20, '2021-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `user_info_id` char(20) NOT NULL,
  `exam_question1` int(11) NOT NULL,
  `exam_question2` int(11) NOT NULL,
  `exam_question3` int(11) NOT NULL,
  `exam_question4` int(11) NOT NULL,
  `exam_question5` int(11) NOT NULL,
  `exam_question6` int(11) NOT NULL,
  `exam_question7` int(11) NOT NULL,
  `exam_question8` int(11) NOT NULL,
  `exam_question9` int(11) NOT NULL,
  `exam_question10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `module_photo` char(20) NOT NULL,
  `module_name` char(20) NOT NULL,
  `module_file` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `module_photo`, `module_name`, `module_file`) VALUES
(2, 'driving1.jpg', 'Sample', 'Sample.pdf'),
(3, 'trafficlight.jpg', 'Driving', 'Sample.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `questionaire`
--

CREATE TABLE `questionaire` (
  `questionaire_id` int(11) NOT NULL,
  `question_image` varchar(200) NOT NULL,
  `question_description` char(100) NOT NULL,
  `question_answer_correct` char(50) NOT NULL,
  `question_answer_wrong1` char(50) NOT NULL,
  `question_answer_wrong2` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionaire`
--

INSERT INTO `questionaire` (`questionaire_id`, `question_image`, `question_description`, `question_answer_correct`, `question_answer_wrong1`, `question_answer_wrong2`) VALUES
(1, '', 'What are Road Signs?', 'A', 'B', 'C'),
(2, '', 'What is this?', 'A', 'B', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `simulation`
--

CREATE TABLE `simulation` (
  `simulation_id` int(11) NOT NULL,
  `users_info_id` char(20) NOT NULL,
  `simulation_stage` char(50) NOT NULL,
  `simulation_time` char(10) NOT NULL,
  `simulation_score` int(100) NOT NULL,
  `simulation_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simulation`
--

INSERT INTO `simulation` (`simulation_id`, `users_info_id`, `simulation_stage`, `simulation_time`, `simulation_score`, `simulation_date`) VALUES
(1, '12', 'Stage 1', '01:26', 98, '2021-01-18 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `user_info_id` int(11) NOT NULL,
  `account_id` char(10) NOT NULL,
  `user_photo` char(100) NOT NULL,
  `user_lastname` char(20) NOT NULL,
  `user_firstname` char(20) NOT NULL,
  `user_middlename` char(20) NOT NULL,
  `user_birthdate` char(20) NOT NULL,
  `user_phonenumber` char(20) NOT NULL,
  `user_email` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`user_info_id`, `account_id`, `user_photo`, `user_lastname`, `user_firstname`, `user_middlename`, `user_birthdate`, `user_phonenumber`, `user_email`) VALUES
(12, '23', '5e67c6ce54f25c4ccf703d37 (1).jpg', 'Megistus', 'Mona', 'Astrolabos', '2004-08-31', '09569419235', 'aq.ef.777@gmail.com'),
(14, '25', 'admin.jpg', 'Basa', 'Parokya', 'N', '1992-01-08', '09680520346', 'parokyanibasa@gmail.'),
(15, '26', 'student3.png', 'Ong', 'Mark Anthony', 'Narosa', 'Mon Jul 28 2003 08:0', '09205493689', 'iamarkyy0120@gmail.c'),
(16, '27', 'student4.png', 'Tabunar', 'Joey', 'O', '1991-01-01', '09090909090', 'jtabunar03@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_info_id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessment_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `questionaire`
--
ALTER TABLE `questionaire`
  ADD PRIMARY KEY (`questionaire_id`);

--
-- Indexes for table `simulation`
--
ALTER TABLE `simulation`
  ADD PRIMARY KEY (`simulation_id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`user_info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questionaire`
--
ALTER TABLE `questionaire`
  MODIFY `questionaire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `simulation`
--
ALTER TABLE `simulation`
  MODIFY `simulation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `user_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
