-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2019 at 01:15 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `confer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

DROP TABLE IF EXISTS `admin_log`;
CREATE TABLE IF NOT EXISTS `admin_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_pass` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'shahid', 'afridi');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `answer` text NOT NULL,
  `qid` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `ratings` int(11) DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `qid` (`qid`),
  KEY `userid` (`userid`(10)),
  KEY `userid_2` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `qid`, `userid`, `likes`, `rate`, `ratings`) VALUES
(2, 'morning 8 am', 3, 'sheeku', NULL, NULL, 30),
(4, '8 am', 1, 'askeee', NULL, NULL, 10),
(6, '5 subjects', 2, 'anki', NULL, NULL, 19),
(7, '3 lab per semester', 4, 'anki', NULL, NULL, 9),
(8, '3 year\r\n', 5, 'anki', NULL, NULL, 6),
(9, '22 students', 6, 'anki', NULL, NULL, 6),
(10, 'almost 359 students.', 57, 'anki', NULL, NULL, 6),
(11, '8', 1, 'sheeku', NULL, NULL, 6),
(12, '6AM to 4pm', 1, 'anki', NULL, NULL, 6),
(14, 'Fine', 58, 'anki', NULL, NULL, 6),
(15, 'Sleep mode is a low power mode for electronic devices such as computers, televisions, and remote controlled devices. These modes save significantly on electrical consumption compared to leaving a device fully on and, upon resume, allow the user to avoid having to reissue instructions or to wait for a machine to reboot.', 59, 'ankit1994', NULL, NULL, 6),
(16, '8;30', 61, 'sana', NULL, NULL, 6),
(17, '5 Modules', 62, 'rhea', NULL, NULL, 6),
(18, '23 jan', 63, 'sana', NULL, NULL, 6),
(19, 'hello', 64, 'anki', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `answers_rating`
--

DROP TABLE IF EXISTS `answers_rating`;
CREATE TABLE IF NOT EXISTS `answers_rating` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `answers` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `feed` text NOT NULL,
  `userid` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`eid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`eid`, `feed`, `userid`, `date`) VALUES
(60, 'good website', 'anki', '2019-11-26 12:46:01'),
(61, 'Very informative', 'shahid', '2019-11-26 19:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aid` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `notifid` int(10) NOT NULL AUTO_INCREMENT,
  `notification` text NOT NULL,
  `uid` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'unread',
  `date` datetime NOT NULL,
  PRIMARY KEY (`notifid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `userid` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`qid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `userid`, `date`) VALUES
(2, 'subjects in first semester?', 'renu', '2019-04-27 09:30:14'),
(3, 'timing of the classes?', 'anki', '2019-04-27 09:30:14'),
(58, 'How are you?', 'sheeku', '2019-05-02 21:25:50'),
(59, 'What is the purpose of keeping electronic devices such as computers televisions and remote controlled devices on sleep mode?', 'ankit1994', '2019-05-02 23:11:50'),
(60, 'Which notes to refer for exams..?', 'shahid', '2019-11-26 19:23:30'),
(62, 'Syllabus,,?', 'sana', '2019-11-26 19:28:17'),
(63, 'Exam dates.?', 'rhea', '2019-11-26 19:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rep` text NOT NULL,
  `userid` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `aid` int(11) DEFAULT NULL,
  PRIMARY KEY (`rid`),
  KEY `userid` (`userid`),
  KEY `report_ibfk_1` (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rid`, `rep`, `userid`, `date`, `aid`) VALUES
(62, '', 'shahid', '2019-12-07 00:33:47', NULL),
(63, '', 'shahid', '2019-12-07 00:33:53', NULL),
(64, '', 'shahid', '2019-12-07 00:36:15', NULL),
(65, 'jgjgkjg', 'shahid', '2019-12-07 00:39:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(20) NOT NULL,
  `name` varchar(256) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `password`, `email`, `mobile`, `gender`) VALUES
('anki', 'ankit singh', 'ankit', 'ank@g.com', 9479396742, 'Male'),
('ankit1994', 'Ankit Singh', '123456', 'ankitsinghmyself@gmail.com', 9479396742, 'Male'),
('archi', 'archana', '123', 'arch@gmail.com', 2087654321, 'Female'),
('askeee', 'Astha', '123', 'askee@gmail.com', 9087654321, 'Male'),
('renu', 'renuka', '123', 'renu@gmail.com', 789054321, 'Male'),
('rhea', 'Rhea', '123', 'rhea@gmail.com', 8861604274, 'Male'),
('sana', 'sanap', '1234', 'sana@gmail.com', 998877665, 'Male'),
('shahid', 'Shahid Afridi', '123', 'shahid@gmail.com', 8861604274, 'Male'),
('sheeku', 'Sheela Kumari', 'sheela', 'shee@gmail.com', 987654322, 'Female');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `admin` (`uname`),
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `answers` (`aid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
