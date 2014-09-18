-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2014 at 11:55 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bernhardt`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `href` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `href`, `description`, `order`) VALUES
(1, 'Home', 'index.php', '', 0),
(2, 'About', 'about.php', '', 0),
(3, 'Services', 'services.php', '', 0),
(7, 'Contact', 'contact.php', '', 1),
(8, 'Sample', 'sample.php', 'sample', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'News Title Edited', 'Edited ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet ipsum dolar. Ipsum dolar sit amet ipsum. Lorem ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet ipsum dolar.\r\n\r\nLorem ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet ipsum dolar. Ipsum dolar sit amet ipsum.', 56789),
(2, 'Bernhardt Table Tennis', 'Table ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet ipsum dolar. Ipsum dolar sit amet ipsum. Lorem ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet ipsum dolar.\r\n\r\nLorem ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet ipsum dolar sit amet Lorem ipsum dolar sit amet ipsum dolar. Ipsum dolar sit amet ipsum.', 1410937259);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'Sample Page', 'this is page content', 1411020979),
(2, 'Another page', 'this is another page edited', 1411020990);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `site_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `footer_content` text CHARACTER SET utf8 NOT NULL,
  `contact_email` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`site_name`, `footer_content`, `contact_email`) VALUES
('Bernhardt College Website', 'Â© 2014. All Rights Reserved. \r\n\r\nLorem ipsum dolar sit amet', 'lorem@ipsum.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL DEFAULT 'inactive',
  `status` varchar(10) NOT NULL DEFAULT 'inactive',
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `status`, `created_at`) VALUES
(15, 'shyam@gmail.comm', 'dd6471d2085969fbb0e444093c476c85', 'shyam lal', 'active', 2147483647),
(16, 'ram@gmail.com', '8ab8a929d72be990eda50beab682738d', 'ram nath', 'inactive', 1410935253),
(17, 'dipendra@gmail.com', '9e12688d3254c67824965e588824e5c8', 'dipendra bist g', 'active', 1410935493),
(18, 'john@doe.com', '527bd5b5d689e2c32ae974c6229ff785', 'John Doe', 'active', 1411022314);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
