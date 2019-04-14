-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 01:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allindianiyukti`
--

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` int(11) NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `type` varchar(500) NOT NULL,
  `datevalue` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`id`, `vacancy_id`, `type`, `datevalue`, `status`) VALUES
(1, 1, 'appstartdate', '2019-04-12', 1),
(2, 1, 'applastdate', '0000-00-00', 1),
(3, 1, 'feelastdate', '2019-04-19', 1),
(4, 1, 'admitcarddate', '0000-00-00', 1),
(5, 1, 'examdate', '2019-04-18', 1),
(6, 1, 'preexamdate', '0000-00-00', 1),
(7, 1, 'mainexamdate', '0000-00-00', 1),
(8, 4, 'appstartdate', '2019-04-11', 1),
(9, 4, 'applastdate', '2019-04-11', 1),
(10, 4, 'feelastdate', '0000-00-00', 1),
(11, 4, 'admitcarddate', '0000-00-00', 1),
(12, 4, 'examdate', '2019-04-20', 1),
(13, 4, 'preexamdate', '0000-00-00', 1),
(14, 4, 'mainexamdate', '0000-00-00', 1),
(15, 7, 'appstartdate', '2019-04-11', 1),
(16, 7, 'applastdate', '2019-04-11', 1),
(17, 7, 'feelastdate', '0000-00-00', 1),
(18, 7, 'admitcarddate', '0000-00-00', 1),
(19, 7, 'examdate', '2019-04-20', 1),
(20, 7, 'preexamdate', '0000-00-00', 1),
(21, 7, 'mainexamdate', '0000-00-00', 1),
(22, 8, 'appstartdate', '2019-04-11', 1),
(23, 8, 'applastdate', '2019-04-11', 1),
(24, 8, 'feelastdate', '0000-00-00', 1),
(25, 8, 'admitcarddate', '0000-00-00', 1),
(26, 8, 'examdate', '2019-04-20', 1),
(27, 8, 'preexamdate', '0000-00-00', 1),
(28, 8, 'mainexamdate', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eligibility`
--

CREATE TABLE `eligibility` (
  `id` int(11) NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `title` varchar(700) NOT NULL,
  `subtitle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `title`, `subtitle`) VALUES
(1, 'hjk', 'hj');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `category` varchar(500) NOT NULL,
  `amount` int(11) NOT NULL,
  `mode` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `vacancy_id`, `category`, `amount`, `mode`, `status`) VALUES
(1, 1, 'genfee', 2, ' d', 1),
(2, 1, 'obcfee', 21, ' d', 1),
(3, 1, 'scfee', 1, ' d', 1),
(4, 4, 'genfee', 23, 'fre', 1),
(5, 4, 'obcfee', 23, 'fre', 1),
(6, 4, 'scfee', 23, 'fre', 1),
(7, 7, 'genfee', 23, 'fre', 1),
(8, 7, 'obcfee', 23, 'fre', 1),
(9, 7, 'scfee', 23, 'fre', 1),
(10, 8, 'genfee', 23, 'fre', 1),
(11, 8, 'obcfee', 23, 'fre', 1),
(12, 8, 'scfee', 23, 'fre', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `vacancy_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slug`
--

CREATE TABLE `slug` (
  `id` int(11) NOT NULL,
  `title` varchar(600) NOT NULL,
  `subtitle` varchar(600) NOT NULL,
  `type` varchar(500) NOT NULL,
  `vid` int(11) NOT NULL,
  `description` text NOT NULL,
  `createdate` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `url` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slug`
--

INSERT INTO `slug` (`id`, `title`, `subtitle`, `type`, `vid`, `description`, `createdate`, `status`, `url`) VALUES
(1, '', '', 'applyonline', 1, '', '2019-04-12', 1, 'sd'),
(2, '', '', 'login', 1, '', '2019-04-12', 1, ''),
(3, '', '', 'feepay', 1, '', '2019-04-12', 1, ''),
(4, '', '', 'downloadnotification', 1, '', '2019-04-12', 1, ''),
(5, '', '', 'admitcard', 1, '', '2019-04-12', 1, ''),
(6, '', '', 'officialwebsite', 1, '', '2019-04-12', 1, 'dfg'),
(7, '', '', 'applyonline', 4, '', '2019-04-12', 1, 'wer'),
(8, '', '', 'login', 4, '', '2019-04-12', 1, 'wer'),
(9, '', '', 'feepay', 4, '', '2019-04-12', 1, 'rew'),
(10, '', '', 'downloadnotification', 4, '', '2019-04-12', 1, 'wer'),
(11, '', '', 'admitcard', 4, '', '2019-04-12', 1, ''),
(12, '', '', 'officialwebsite', 4, '', '2019-04-12', 1, ''),
(13, '', '', 'applyonlinecccc', 2, '', '2019-04-12', 1, 'wer'),
(14, '', '', 'applyonline', 7, '', '2019-04-12', 1, 'wer'),
(15, '', '', 'login', 7, '', '2019-04-12', 1, 'wer'),
(16, '', '', 'feepay', 7, '', '2019-04-12', 1, 'rew'),
(17, '', '', 'downloadnotification', 7, '', '2019-04-12', 1, 'wer'),
(18, '', '', 'admitcard', 7, '', '2019-04-12', 1, ''),
(19, '', '', 'officialwebsite', 7, '', '2019-04-12', 1, ''),
(20, '', '', 'applyonline', 8, '', '2019-04-12', 1, 'wer'),
(21, '', '', 'login', 8, '', '2019-04-12', 1, 'wer'),
(22, '', '', 'feepay', 8, '', '2019-04-12', 1, 'rew'),
(23, '', '', 'downloadnotification', 8, '', '2019-04-12', 1, 'wer'),
(24, '', '', 'admitcard', 8, '', '2019-04-12', 1, ''),
(25, '', '', 'officialwebsite', 8, '', '2019-04-12', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(1, 'up');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `pagelink` varchar(500) NOT NULL,
  `createdate` date NOT NULL,
  `description` text NOT NULL,
  `state_id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `title`, `pagelink`, `createdate`, `description`, `state_id`, `org_id`, `status`) VALUES
(1, 'sdf', 'dsa', '2019-04-12', 'sdf', 1, 1, 1),
(2, 'sdf', 'dsa', '2019-04-12', 'sdf', 1, 1, 1),
(3, 'sdf', 'dsa', '2019-04-12', 'sdf', 1, 1, 1),
(4, 'dfg', 'fd', '2019-04-12', 'sdf', 1, 1, 1),
(5, 'dfg', 'fd', '2019-04-12', 'sdf', 1, 1, 1),
(6, 'asfccc', 'fd', '2019-04-12', 'sdf', 1, 1, 1),
(7, 'dfg', 'fd', '2019-04-12', 'sdf', 1, 1, 1),
(8, 'dfg', 'fd', '2019-04-12', 'sdf', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacancy_id` (`vacancy_id`);

--
-- Indexes for table `eligibility`
--
ALTER TABLE `eligibility`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacancy_id` (`vacancy_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacancy_id` (`vacancy_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacancy_id` (`vacancy_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacancy_id` (`vacancy_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `slug`
--
ALTER TABLE `slug`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vid` (`vid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `org_id` (`org_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `eligibility`
--
ALTER TABLE `eligibility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slug`
--
ALTER TABLE `slug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dates`
--
ALTER TABLE `dates`
  ADD CONSTRAINT `dates_ibfk_1` FOREIGN KEY (`vacancy_id`) REFERENCES `vacancy` (`id`);

--
-- Constraints for table `eligibility`
--
ALTER TABLE `eligibility`
  ADD CONSTRAINT `eligibility_ibfk_1` FOREIGN KEY (`vacancy_id`) REFERENCES `vacancy` (`id`),
  ADD CONSTRAINT `eligibility_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `Payments_ibfk_1` FOREIGN KEY (`vacancy_id`) REFERENCES `vacancy` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `Post_ibfk_1` FOREIGN KEY (`vacancy_id`) REFERENCES `vacancy` (`id`);

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`vacancy_id`) REFERENCES `vacancy` (`id`),
  ADD CONSTRAINT `seats_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

--
-- Constraints for table `slug`
--
ALTER TABLE `slug`
  ADD CONSTRAINT `slug_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `vacancy` (`id`);

--
-- Constraints for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `vacancy_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`),
  ADD CONSTRAINT `vacancy_ibfk_2` FOREIGN KEY (`org_id`) REFERENCES `organization` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
