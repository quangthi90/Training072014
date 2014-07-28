-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2014 at 08:05 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `topic6`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avartar` mediumblob NOT NULL,
  `fullname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `email`, `avartar`, `fullname`, `birthday`) VALUES
('phuong', '123', 'phuong@gmail', '', 'Phuong Huynh', '2014-07-30 00:00:00'),
('thao', '123', 'thao@gmail', '', 'thao phuong', '2014-07-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `cmtId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `cmtAuthor` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cmtContent` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cmtCreate` datetime NOT NULL,
  `cmtUpdate` datetime NOT NULL,
  PRIMARY KEY (`cmtId`),
  KEY `fk_comment_account` (`cmtAuthor`),
  KEY `fk_post_comment` (`postId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmtId`, `postId`, `cmtAuthor`, `cmtContent`, `cmtCreate`, `cmtUpdate`) VALUES
(1, 1, 'thao', 'hjhjhjj', '2014-07-30 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'phuong', 'met nhi', '2014-07-30 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `postId` int(11) NOT NULL AUTO_INCREMENT,
  `postAuthor` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userWall` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postTitle` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postContent` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postCreate` datetime NOT NULL,
  `postUpdate` datetime NOT NULL,
  PRIMARY KEY (`postId`),
  KEY `fk_post_account1` (`postAuthor`),
  KEY `fk_post_account2` (`userWall`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `postAuthor`, `userWall`, `postTitle`, `postContent`, `postCreate`, `postUpdate`) VALUES
(1, 'phuong', 'phuong', 'hok co', 'hihihi, cung dc', '2014-07-22 00:00:00', '0000-00-00 00:00:00'),
(2, 'thao', 'phuong', 'hjhj_dc', 'la la la', '2014-07-30 00:00:00', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_post_comment` FOREIGN KEY (`postId`) REFERENCES `post` (`postId`),
  ADD CONSTRAINT `fk_comment_account` FOREIGN KEY (`cmtAuthor`) REFERENCES `account` (`username`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_account2` FOREIGN KEY (`userWall`) REFERENCES `account` (`username`),
  ADD CONSTRAINT `fk_post_account` FOREIGN KEY (`postAuthor`) REFERENCES `account` (`username`),
  ADD CONSTRAINT `fk_post_account1` FOREIGN KEY (`postAuthor`) REFERENCES `account` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
