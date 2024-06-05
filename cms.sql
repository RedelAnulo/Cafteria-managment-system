-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2024 at 03:27 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(222) NOT NULL,
  `role` varchar(20) NOT NULL,
  `quetion` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`fname`, `lname`, `username`, `password`, `role`, `quetion`, `answer`, `phone`, `status`) VALUES
('Dereje', 'tamiru', 'manager', '1122', 'manager', 'what is your mother name', 'mom', '+251922631241', 'active'),
('china', 'belachew', 'stud', '1122', 'student', 'when is your birthday?', '21', '+251922631242', 'active'),
('derso', 'asmamew', 'tick', '1122', 'ticker', 'what is your father name?', 'derso', '+251922631241', 'active'),
('lema', 'marnew', 'stor', '1122', 'storekeeper', 'what is your favorite', 'football', '+251922631241', 'active');

-- --------------------------------------------------------
--
-- Table structure for table `managernews`
--

CREATE TABLE IF NOT EXISTS `managernews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date NOT NULL,
  `title` varchar(300) NOT NULL,
  `body` varchar(800) NOT NULL,
  `reading` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `managernews`
--

INSERT INTO `managernews` (`id`, `dates`, `title`, `body`, `reading`) VALUES
(1, '2024-04-18', 'trip', '    all ticker have trip tommorow in fasil castle at 2 oclock', 1),
(2, '2024-04-18', 'metting', 'store keeper office have metting tommorow at cafeteria manager office', 1);

-- --------------------------------------------------------
--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date NOT NULL,
  `itemtype` varchar(100) NOT NULL,
  `itemname` varchar(200) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `dates`, `itemtype`, `itemname`, `quantity`) VALUES
(1, '2024-03-24', 'kg', 'suger', '300');
-- --------------------------------------------------------
--
-- Table structure for table `ordered_item`
--

CREATE TABLE IF NOT EXISTS `ordered_item` (
   `ordered_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL ,
  `ordered_dates` date NOT NULL,
  `ordered_itemtype` varchar(100) NOT NULL,
  `ordered_itemname` varchar(200) NOT NULL,
  `ordered_quantity` varchar(30) NOT NULL,
  PRIMARY KEY (`ordered_item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ordered_item`
--

INSERT INTO `ordered_item` (`ordered_item_id`, `item_id`, `ordered_dates`, `ordered_itemtype`, `ordered_itemname`, `ordered_quantity`) VALUES
(1, 1, '2024-03-24', 'kg', 'suger', '300');

-- --------------------------------------------------------
--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `reading` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `reading`) VALUES
(2, 'ermi', 'mmmanermiassisay@gmail.com', 'hello', 1),
(4, 'abi', 'mmanermiassissay@gmail.com', 'good', 1),
(5, 'kebede', 'kebede@gmail.com', 'very nice system', 1),
(10, 'abi', 'mmanermiassisay@gmail.com', 'nice', 1),
(12, 'derso', 'mmanermiassisay@gmail.com', 'nice work', 1),
(14, 'emias sisay', 'tafete@gmail.com', 'nice work to do', 1);

-- --------------------------------------------------------
--
-- Table structure for table `command`
--

CREATE TABLE IF NOT EXISTS `command` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date NOT NULL,
  `title` varchar(20) NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `reading` int(11),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `command`
--

INSERT INTO `command` (`id`, `dates`, `title`, `body`,`reading`) VALUES
(10, '2024-04-18', 'Obligation', '    all student without Id.number  non_cafeteria',0);

-- --------------------------------------------------------
--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date NOT NULL,
  `title` varchar(20) NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `dates`, `title`, `body`) VALUES

(10, '2024-04-18', 'warning Of Id.', 'Barattoonni keenya kaaffee yoo dhuftan Id keessan dirqama qabachuu qabdu!');

-- --------------------------------------------------------
--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `midlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `telphone` varchar(20) NOT NULL,
  `image` longblob NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `midlename`, `lastname`, `sex`, `age`, `departement`, `year`, `telphone`, `image`, `status`) VALUES
(0123, 'abebe', 'lema', 'lema', 'male', 20, 'SWE', '3', '+251916400035', 0x494d475f313037342e4a5047, 'cafeteria'),
(0128, 'eshete', 'dage ', 'lema', 'male', 23, 'INFOSA', '1', '+251916400035', 0x494d475f313037352e4a5047,'noncafeteria'),
(1344, 'dagi', 'adana', 'lema', 'male', 99, 'IT', '4', '+251916400035', 0x646167692e6a7067, 'cafeteria');

-- --------------------------------------------------------
--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` varchar(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `midlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `job` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `telphone` varchar(20) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `midlename`, `lastname`, `sex`, `age`, `job`, `date`, `telphone`, `image`) VALUES
(0123, 'Dbebech', 'lema', 'lema', 'female', 20, 'cooking', '2024-04-07:1:58', '+251916400035', 0x494d475f313037342e4a5047),
(0128, 'Neshet', 'dage ', 'lema', 'female', 23, 'injeramaker', '2024-04-07:1:58', '+251916400035', 0x494d475f313037352e4a5047),
(1344, 'Dagimawit', 'adana', 'lema', 'female', 99, 'dishwasher', '2024-04-07:2:00', '+251916400035', 0x646167692e6a7067);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 */;
LATION_CONNECTION */;
 */;
ION */;
 */;
e', 'lema', 'lema', 'male', 20, 'SWE', '3', '+251916400035', 0x494d475f313037342e4a5047),
(0128, 'eshete', 'dage ', 'lema', 'male', 23, 'INFOSA', '1', '+251916400035', 0x494d475f313037352e4a5047),
(1344, 'dagi', 'adana', 'lema', 'male', 99, 'IT', '4', '+251916400035', 0x646167692e6a7067);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 */;
LATION_CONNECTION */;
 */;
ION */;
 */;

 */;
/;
