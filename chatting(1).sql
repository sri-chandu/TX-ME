-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 06:44 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatting`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `status` mediumtext NOT NULL,
  `imagetag` mediumtext,
  `sender` varchar(200) DEFAULT NULL,
  `clock` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `freinds`
--

CREATE TABLE `freinds` (
  `username` varchar(100) DEFAULT NULL,
  `freind` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `userpassword` varchar(200) NOT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `gender` varchar(80) DEFAULT NULL,
  `userstatus` int(10) DEFAULT '0',
  `propicstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `fromm` varchar(200) DEFAULT NULL,
  `too` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `message_status` int(11) DEFAULT '0',
  `clock` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `original`
--

CREATE TABLE `original` (
  `modifiedname` varchar(200) DEFAULT NULL,
  `original` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `mobile` varchar(200) NOT NULL,
  `otp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `propic`
--

CREATE TABLE `propic` (
  `name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `propicstatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t1`
--

CREATE TABLE `t1` (
  `ts_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `event_name` ON SCHEDULE EVERY 1 SECOND STARTS '2018-03-08 18:54:32' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM chat WHERE clock < DATE_ADD(now(),INTERVAL -1 MINUTE)$$

CREATE DEFINER=`root`@`localhost` EVENT `event_nameee` ON SCHEDULE EVERY 1 SECOND STARTS '2018-03-08 23:41:33' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM t1 WHERE ts_created < DATE_ADD(NOW(),INTERVAL -24 HOUR)$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
