-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2014 at 07:23 AM
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
  `avatar` varchar(128) NOT NULL,
  `fullname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `email`, `avatar`, `fullname`, `birthday`) VALUES
('daisy', '12345', 'daisy@gmail.com', 'daisy.jpg', 'Hà Thị Thảo', '1992-03-06 00:00:00'),
('linhphuong', '12345', 'lphuong@gmail.com', 'linhphuong.jpg', 'Linh Phương', '1993-02-01 00:00:00'),
('phuongthao', '12345', 'thao@gmail.com', 'phuongthao.jpg', 'Phương Thảo', '1993-07-30 00:00:00');

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
  PRIMARY KEY (`cmtId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`postId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `postAuthor`, `userWall`, `postTitle`, `postContent`, `postCreate`, `postUpdate`) VALUES
(1, 'phuongthao', 'phuongthao', 'Lorem', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-29 00:00:00', '2014-07-29 00:00:00'),
(2, 'phuongthao', 'phuongthao', 'Lorem2', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-28 00:00:00', '2014-07-29 00:00:00'),
(3, 'phuongthao', 'phuongthao', 'Lorem3', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-27 00:00:00', '2014-07-28 00:00:00'),
(4, 'phuongthao', 'linhphuong', 'Lorem4', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-23 00:00:00', '2014-07-22 00:00:00'),
(5, 'phuongthao', 'daisy', 'Lorem5', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-28 00:00:00', '2014-07-28 00:00:00');
(6, 'linhphuong', 'linhphuong', 'Test', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-29 00:00:00', '2014-07-29 00:00:00'),
(7, 'linhphuong', 'linhphuong', 'Test2', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-28 00:00:00', '2014-07-29 00:00:00'),
(8, 'linhphuong', 'phuongthao', 'Test3', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-27 00:00:00', '2014-07-28 00:00:00'),
(9, 'linhphuong', 'linhphuong', 'Test4', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-23 00:00:00', '2014-07-22 00:00:00'),
(10, 'linhphuong', 'daisy', 'Test5', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-28 00:00:00', '2014-07-28 00:00:00');
(11, 'daisy', 'daisy', 'Check', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-29 00:00:00', '2014-07-29 00:00:00'),
(12, 'daisy', 'daisy', 'Check2', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-28 00:00:00', '2014-07-29 00:00:00'),
(13, 'daisy', 'phuongthao', 'Check3', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-27 00:00:00', '2014-07-28 00:00:00'),
(14, 'daisy', 'linhphuong', 'Check4', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-23 00:00:00', '2014-07-22 00:00:00'),
(15, 'daisy', 'daisy', 'Check5', 'Lorem ipsum dolor sit amet, pri id option hendrerit, his oportere electram vituperata te. Ex vel cetero cotidieque, at vix ubique honestatis. Labore corrumpit splendide ea quo, id eos quod alienum, ad usu nihil commodo urbanitas. Has ex tollit euismod pericula. Erat dicam an vix. Vocent animal sed ea, per at tation cetero. Vix natum omittam sensibus ex, eam id nonumy bonorum electram.\r\n\r\nUt vel apeirian patrioque, dolorum maluisset similique ei his. Aliquid abhorreant voluptaria eu pro. Ad omnesque elaboraret mei, ut mei civibus evertitur. Est ad noster indoctum, te mea audire impedit scriptorem, vim dolor animal ad.\r\n\r\nIn pri tale recusabo erroribus, est ad accusamus abhorreant, et dolorem molestie quaestio eos. Odio oratio eu pri. Labore efficiendi sed no, oporteat explicari ullamcorper ea sed. Decore cetero mea an, et quo elitr euismod, mei ex dolorem maluisset. Ea mei quis soleat, ius ut admodum convenire forensibus, et vix animal virtute. Enim menandri corrumpit usu cu, eu legendo', '2014-07-28 00:00:00', '2014-07-28 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
