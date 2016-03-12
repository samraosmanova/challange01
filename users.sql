-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2016 at 02:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_surname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_reg_date` datetime NOT NULL,
  `user_last_log` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_surname`, `user_email`, `user_pass`, `user_reg_date`, `user_last_log`) VALUES
(3, 'Samra', 'Osmanova', 'samra.o@code.edu.az', '12345', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Aysel', 'Emrahli', 'aysel.e@code.edu.az', '12345', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'dffgfd', 'dfgf', 'a@b.com', 'dfgfd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'gfdg', 'dfgfd', 'gfd@gmail.com', 'jfnkjs', '2013-12-31 00:00:00', '0000-00-00 00:00:00'),
(114, 'fgfs', 'gf', 'df@c.com', 'jhgkjh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'dh', 'hgk', 'j@com.dpf', 'shfd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'jgh', 'kjl', '3@d.com', 'dlgldg', '2016-03-12 13:17:41', '0000-00-00 00:00:00'),
(118, 'dffd', 'fgfd', 'a@k.com', '1', '2016-03-12 13:24:57', '2016-03-12 14:12:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
