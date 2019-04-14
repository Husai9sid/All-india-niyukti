-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 09:29 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all_india_niyukti`
--

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `date_id` int(11) NOT NULL,
  `date_vacancy_id` int(11) NOT NULL,
  `date_type` varchar(500) NOT NULL,
  `date_datevalue` date NOT NULL,
  `date_applydate` date NOT NULL,
  `date_lastdate` date NOT NULL,
  `date_feelastdate` date NOT NULL,
  `date_examdate` date NOT NULL,
  `date_preexamdate` date NOT NULL,
  `date_mainexamdate` date NOT NULL,
  `date_admitcartdate` date NOT NULL,
  `date_status` tinyint(1) NOT NULL DEFAULT '1',
  `date_applylastdate` date NOT NULL,
  `date_resultdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`date_id`, `date_vacancy_id`, `date_type`, `date_datevalue`, `date_applydate`, `date_lastdate`, `date_feelastdate`, `date_examdate`, `date_preexamdate`, `date_mainexamdate`, `date_admitcartdate`, `date_status`, `date_applylastdate`, `date_resultdate`) VALUES
(1, 1, 'appStartDate', '2019-04-16', '2019-04-09', '2019-04-11', '2019-04-10', '2019-04-16', '2019-04-23', '2019-04-16', '2019-04-23', 1, '0000-00-00', '2019-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `eligibility`
--

CREATE TABLE `eligibility` (
  `elg_id` int(11) NOT NULL,
  `elg_vacancy_id` int(11) NOT NULL,
  `elg_post_id` int(11) NOT NULL,
  `elg_type` varchar(550) NOT NULL,
  `elg_description` text NOT NULL,
  `elg_physical` text NOT NULL,
  `elg_educational` text NOT NULL,
  `elg_other` text NOT NULL,
  `elg_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eligibility`
--

INSERT INTO `eligibility` (`elg_id`, `elg_vacancy_id`, `elg_post_id`, `elg_type`, `elg_description`, `elg_physical`, `elg_educational`, `elg_other`, `elg_status`) VALUES
(1, 1, 1, 'vacancy_typ', 'vacancy_description', 'physical eligibility', 'educational eligibility', 'other eligibility', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `org_id` int(11) NOT NULL,
  `organization_name` varchar(100) NOT NULL,
  `organization_type` varchar(100) NOT NULL,
  `organization_short_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`org_id`, `organization_name`, `organization_type`, `organization_short_name`) VALUES
(1, 'State Bank Of India', 'Banking', 'SBI'),
(2, 'Punjab National Bank', 'Banking', 'PNB'),
(3, 'bank of baroda', 'BANK', 'BOB');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pay_id` int(11) NOT NULL,
  `pay_vacancy_id` int(11) NOT NULL,
  `pay_category` varchar(50) NOT NULL,
  `pay_amount` int(11) NOT NULL,
  `pay_mode` varchar(50) NOT NULL,
  `pay_general` int(11) NOT NULL,
  `pay_obc` int(11) NOT NULL,
  `pay_sc` int(11) NOT NULL,
  `pay_other` varchar(50) NOT NULL,
  `pay_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pay_id`, `pay_vacancy_id`, `pay_category`, `pay_amount`, `pay_mode`, `pay_general`, `pay_obc`, `pay_sc`, `pay_other`, `pay_status`) VALUES
(1, 1, 'payment_category', 100, 'online', 500, 300, 100, 'other payments details', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_vacancy_id` int(11) NOT NULL,
  `post_title` varchar(500) NOT NULL,
  `post_description` text NOT NULL,
  `post_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_vacancy_id`, `post_title`, `post_description`, `post_status`) VALUES
(1, 1, 'Post Title', 'Post description', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `vacancy_id`, `post_id`, `number`, `status`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slug`
--

CREATE TABLE `slug` (
  `slug_id` int(11) NOT NULL,
  `slug_title` varchar(50) NOT NULL,
  `slug_subtitle` varchar(50) NOT NULL,
  `slug_type` varchar(50) NOT NULL,
  `slug_vid` int(11) NOT NULL,
  `slug_description` text NOT NULL,
  `slug_createdate` date NOT NULL,
  `slug_status` tinyint(1) NOT NULL DEFAULT '1',
  `slug_url` text NOT NULL,
  `slug_applyurl` text NOT NULL,
  `slug_notificationurl` text NOT NULL,
  `slug_loginurl` text NOT NULL,
  `slug_paymenturl` text NOT NULL,
  `slug_admitcardurl` text NOT NULL,
  `slug_resulturl` text NOT NULL,
  `slug_answarkeyurl` text NOT NULL,
  `slug_syllabusurl` text NOT NULL,
  `slug_official` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slug`
--

INSERT INTO `slug` (`slug_id`, `slug_title`, `slug_subtitle`, `slug_type`, `slug_vid`, `slug_description`, `slug_createdate`, `slug_status`, `slug_url`, `slug_applyurl`, `slug_notificationurl`, `slug_loginurl`, `slug_paymenturl`, `slug_admitcardurl`, `slug_resulturl`, `slug_answarkeyurl`, `slug_syllabusurl`, `slug_official`) VALUES
(1, 'slug_title', 'slug_sub_title', 'slug_type', 1, 'slug_description', '2019-04-09', 1, 'slug_url', 'applyurl1', 'notificationurl1', 'loginurl1', 'paymenturl1', 'admitcardurl1', 'resulturl1', 'answarkeyurl1', 'syllabusurl1', 'slug_official1'),
(2, 'title', 'subtitle', 'type', 2, 'description', '2019-04-27', 1, 'url', 'applyurl', 'notificationurl', 'loginurl', 'paymenturl', 'admitcardurl', 'resulturl', 'answarkeyurl', 'syllabusurl', 'slug_official');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `contact_number` varchar(30) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `full_name`, `user_email`, `contact_number`, `user_status`) VALUES
(1, '', 'afjal@gmail.com', '', 0),
(2, '', 'afjal@gmail.com', '', 1),
(3, '', 'afjal@gmail.com', '', 1),
(4, '', 'afjal@gmail.com', '', 1),
(5, '', 'ragib123456@fmail.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `vc_id` int(11) NOT NULL,
  `vc_title` varchar(500) NOT NULL,
  `vc_pagelink` varchar(500) NOT NULL,
  `vc_createdate` date NOT NULL,
  `vc_description` text NOT NULL,
  `vc_state_id` int(11) NOT NULL,
  `vc_updatedate` date NOT NULL,
  `vc_org_id` int(11) NOT NULL,
  `vc_status` int(11) NOT NULL DEFAULT '1',
  `vc_updatedby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`vc_id`, `vc_title`, `vc_pagelink`, `vc_createdate`, `vc_description`, `vc_state_id`, `vc_updatedate`, `vc_org_id`, `vc_status`, `vc_updatedby`) VALUES
(1, 'Indian Navy Recruitment 2019', 'http://localhost/allindianiyukti/', '2019-04-10', 'Indian Navy has advertised a notification for the recruitment of Chargeman (Mechanic),', 1, '2019-04-17', 1, 1, 'updatedby');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`date_id`),
  ADD KEY `vacancy_id` (`date_vacancy_id`);

--
-- Indexes for table `eligibility`
--
ALTER TABLE `eligibility`
  ADD PRIMARY KEY (`elg_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `vacancy_id` (`post_vacancy_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slug`
--
ALTER TABLE `slug`
  ADD PRIMARY KEY (`slug_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`vc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `eligibility`
--
ALTER TABLE `eligibility`
  MODIFY `elg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slug`
--
ALTER TABLE `slug`
  MODIFY `slug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `vc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dates`
--
ALTER TABLE `dates`
  ADD CONSTRAINT `dates_ibfk_1` FOREIGN KEY (`date_vacancy_id`) REFERENCES `vacancy` (`vc_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`post_vacancy_id`) REFERENCES `vacancy` (`vc_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
