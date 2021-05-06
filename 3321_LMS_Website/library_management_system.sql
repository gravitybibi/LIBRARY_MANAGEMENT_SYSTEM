-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 07:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `librarian_name` varchar(20) NOT NULL,
  `admin_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`librarian_name`, `admin_password`) VALUES
('LIB/001', 'admin1'),
('LIB/002', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `barrowed_book`
--

CREATE TABLE IF NOT EXISTS `barrowed_book` (
  `identity_card` int(16) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `book_id` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publisher` varchar(60) NOT NULL,
  `year_of_publisher` int(8) NOT NULL,
  `category` varchar(60) NOT NULL,
  `ISBN` int(30) NOT NULL,
  `online_barrow_date` text NOT NULL,
  `barrowed_date` text NOT NULL,
  `actual_return_date` text NOT NULL,
  `return_date` text NOT NULL,
  `taken` varchar(20) NOT NULL,
  `late_return_punishment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barrowed_book`
--

INSERT INTO `barrowed_book` (`identity_card`, `phone_number`, `email`, `book_id`, `title`, `author`, `publisher`, `year_of_publisher`, `category`, `ISBN`, `online_barrow_date`, `barrowed_date`, `actual_return_date`, `return_date`, `taken`, `late_return_punishment`) VALUES
(4014549, 8911933, 'user6@gmail.com', 'BID/001016', 'Math Problem Solve Method', 'School of Numbers', 'Teacher Math Wizard', 2018, 'Education', 1010134587, '2017/12/13', '2017/12/13', '2017-12-20', '2017/12/01', 'Yes', 'Yes'),
(1113513, 2181900, 'user4@gmail.com', 'BID/001017', 'I.T Support Solve', 'Machine Technology', 'Company of I.T', 2018, 'Technology', 1741261193, '2017/12/13', '2017/12/13', '2017-12-20', '2018-12-01', 'Yes', 'Yes'),
(1355129, 8711939, 'user2@gmail.com', 'BID/001018', 'Cook Like Melinda', 'Chef Melinda', 'Melinda', 2018, 'Cooking', 1751251553, '2017/12/13', '2017/12/13', '2017-12-20', '2017/12/01', 'Yes', 'Yes'),
(1015519, 8187906, 'user3@gmail.com', 'BID/001019', 'Ghostbusters', 'Even steve', 'Clinton Trump', 2018, 'Fiction', 1330133878, '2017/12/13', '2017/12/13', '2017-12-20', '2017/12/01', 'Yes', 'Yes'),
(1035539, 8819989, 'user1@gmail.com', 'BID/001020', 'Calling Evil True Story', 'wizard waze', 'Kevin chin', 2018, 'Non-Fiction', 2147483647, '2017/12/13', '2017/12/13', '2017-12-20', '2017/12/01', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `book_detail`
--

CREATE TABLE IF NOT EXISTS `book_detail` (
  `book_id` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publisher` varchar(60) NOT NULL,
  `year_publisher` int(8) NOT NULL,
  `category` varchar(60) NOT NULL,
  `ISBN` int(30) NOT NULL,
  `date_of_purchase` text NOT NULL,
  `book_price` int(8) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_detail`
--

INSERT INTO `book_detail` (`book_id`, `title`, `author`, `publisher`, `year_publisher`, `category`, `ISBN`, `date_of_purchase`, `book_price`, `quantity`) VALUES
('BID/001001', 'Harry Potter & The Order Of Phoenix', 'Bill Clinton', 'Steven Spilberg', 2018, 'Fiction', 1090145678, '01/01/2018', 30, 1),
('BID/001002', 'Breaking Trail', 'Coyote', 'Steve Producer', 2018, 'Other', 2147483647, '01/01/2018', 10, 1),
('BID/001003', 'Become a Chef Professional', 'Chef Ramsy', 'Gordon', 2018, 'Cooking', 1521875628, '01/01/2018', 20, 1),
('BID/001004', 'Martial Art Traditional', 'Sensei Shihan', 'Matsumoto', 2018, 'Martial Art', 2147483647, '01/01/2018', 10, 1),
('BID/001005', 'Programming Professional by Steve Job & Bill Gates', 'Melinda', 'Mark Zukerberg', 2018, 'Technology', 2147483647, '01/01/2018', 20, 1),
('BID/001006', 'Prevent From Ads and HIV ', 'DR.Ghandi Rotion', 'Penny Jessica', 2018, 'Medical', 108718324, '2018-01-01', 20, 1),
('BID/001007', 'Liverpool.FC History 1980s', 'Michele Owen', 'Manager Steve', 2018, 'Sport', 2147483647, '01/01/2018', 10, 1),
('BID/001008', 'Next Top Model', 'Beyonce', 'Usai', 2018, 'Magazine', 1000125674, '01/01/2018', 10, 1),
('BID/001009 ', 'Programming in Java', 'Sunlight', 'Java disunlit', 2018, 'Technology', 2090345668, '01/01/2018', 10, 1),
('BID/001010', 'Way of Samurai life ', 'Matsumoto Mushashi', 'Kenshin', 2018, 'Martial Art', 1744261890, '01/01/2018', 30, 1),
('BID/001011', 'Virus Cancer Cure', 'DR.Rawish', 'Gohan', 2018, 'Medical', 2010845361, '01/01/2018', 20, 1),
('BID/001012', 'Law of Gravity', 'Scientist Mark', 'Workshop Mate', 2018, 'Education', 1070135878, '01/01/2018', 20, 1),
('BID/001013', 'Way of Shaolin', 'Monk Temple', 'Mt. Ramesh', 2018, 'Martial Art', 2147483647, '01/01/2018', 20, 1),
('BID/001014', 'Skaters in Modern World', 'Tony Hawk', 'Tony spilberg', 2018, 'Sport', 2147483647, '01/01/2018', 20, 1),
('BID/001015', 'Used of Computer', 'Microsoft learner', 'Bill Gates', 2018, 'Technology', 1511818621, '01/01/2018', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `identity_card` int(16) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`identity_card`, `phone_number`, `email`, `password`) VALUES
(1015519, 8187906, 'user3@gmail.com', 'user3'),
(1035539, 8819989, 'user1@gmail.com', 'user1'),
(1113513, 2181900, 'user4@gmail.com', 'user4'),
(1355129, 8711939, 'user2@gmail.com', 'user2'),
(1616516, 8147904, 'user5@gmail.com', 'user5'),
(4014549, 8911933, 'user6@gmail.com', 'user6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`librarian_name`);

--
-- Indexes for table `barrowed_book`
--
ALTER TABLE `barrowed_book`
 ADD PRIMARY KEY (`book_id`), ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book_detail`
--
ALTER TABLE `book_detail`
 ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
 ADD PRIMARY KEY (`identity_card`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
