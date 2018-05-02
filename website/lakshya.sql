-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 08:15 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lakshya`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `email`, `message`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', 'baho kag nawng jessie'),
(4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cover_pic`
--

CREATE TABLE `cover_pic` (
  `cover_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `types` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cover_pic`
--

INSERT INTO `cover_pic` (`cover_id`, `name`, `image`, `types`) VALUES
(15, 'BATHTUB SAFARI', 'BATHMAN.png', 'story'),
(16, 'Partly cloudy', 'party.png', ''),
(17, 'Partly cloudy', 'party.png', ''),
(18, 'sampless', '13524320_823461274455173_7586890110114562630_n.jpg', ''),
(19, 'smaple2', '13502060_823462594455041_8505413897691372266_n.jpg', ''),
(20, 'Peter Rabbit', 'peterrabit.png', 'story');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_size`, `product_image`, `brand`, `category`) VALUES
(3, 'Pen', '10', '7', 'BALLPEN.jpg', 'feature', 'basketball'),
(4, 'Notebook', '20', '8', 'NOTEBOOK.jpg', 'feature', 'basketball'),
(6, 'ruler', '15', '9', 'RULER.jpg', 'feature', 'basketball');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(3, 3, 13),
(4, 4, 16),
(6, 7, 20);

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `col` int(20) NOT NULL,
  `cover_id` int(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `title`, `col`, `cover_id`, `image`) VALUES
(17, 'BATHTUB SAFARI', 1, 15, 'BATHMAN.png'),
(18, 'BATHTUB SAFARI', 2, 15, '1.png'),
(19, 'BATHTUB SAFARI', 3, 15, '2.png'),
(20, 'BATHTUB SAFARI', 1, 15, '3.png'),
(27, 'BATHTUB SAFARI', 0, 15, '4.png'),
(28, 'BATHTUB SAFARI', 0, 15, '5.png'),
(29, 'BATHTUB SAFARI', 0, 15, '6.png'),
(31, 'BATHTUB SAFARI', 0, 15, '7.png'),
(32, 'BATHTUB SAFARI', 0, 15, '9.png'),
(33, 'BATHTUB SAFARI', 0, 15, '10.png'),
(34, 'BATHTUB SAFARI', 0, 15, '12.png'),
(35, 'BATHTUB SAFARI', 0, 15, '13.png'),
(38, 'BATHTUB SAFARI', 0, 15, '14.png'),
(39, 'BATHTUB SAFARI', 0, 15, '15.png'),
(40, 'BATHTUB SAFARI', 0, 15, '16.png'),
(41, 'BATHTUB SAFARI', 0, 15, '17.png'),
(42, 'BATHTUB SAFARI', 0, 15, '18.png'),
(43, 'BATHTUB SAFARI', 0, 15, '19.png'),
(44, 'BATHTUB SAFARI', 0, 15, '20.png'),
(49, 'Peter Rabbit', 0, 20, 'peterrabit.png'),
(50, 'Peter Rabbit', 0, 20, 'p1.png'),
(53, 'Peter Rabbit', 0, 20, 'p2.png'),
(54, 'Peter Rabbit', 0, 20, 'p3.png'),
(55, 'Peter Rabbit', 0, 20, 'p4.png'),
(57, 'Partly cloudy', 0, 16, 'peterrabit.png');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(100) NOT NULL,
  `sub_name` varchar(40) NOT NULL,
  `sub_lesson` text NOT NULL,
  `categories` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_name`, `sub_lesson`, `categories`, `image`) VALUES
(1, 'SCIENCE', 'Dogs are popular animals which make fo rgreat family pets as well as reliable workers. Enjoy these great dog facts which help explain why dogs are so special', 'animals', 'dog.jpg'),
(2, 'SCIENCE', 'Mercury takes 59 days to make a rotation but only 88 days to circle the Sun. That means that tehere are fewer than 2 days in a year', 'planets', 'mercury.gif'),
(3, 'SCIENCE', 'Earth has more exposed water than land. Three quarters of the Earth is covered by water! The earth has one moon.', 'planets', 'earth.gif'),
(4, 'SCIENCE', 'Mars is the home of \"Olympus Mons\", the largest volcano found inthe solar system. It stands about 27 kilometers high with a crater 81 kilometers wide.', 'planets', 'mars.gif'),
(5, 'SCIENCE', 'Between Mars and Jupiter, is a Dwarf Planet known as Ceres. It was discovered in 1801. It is the smallest dwarf planet discovered inour universe (so far) and is the only one found in the asteriod belt. A dwarf planet is NOT a planet --  the solar system is made up of:', 'planets', 'jupiter.gif'),
(8, 'Drawing', 'Drawing for Cat', '', 'drawing1.jpg'),
(9, 'Drawing', 'Draw A Monkey', '', 'drawing2.jpg'),
(10, 'Drawing', 'Draw A Dog', '', 'drawing3.png'),
(11, 'Drawing', 'Draw A Ox', '', 'drawing4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `cover_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`, `cover_id`, `name`) VALUES
(59, '65736-party-cloud-full-moive.mp4', 'video/mp4', 39140, 17, 'Partly cloudy'),
(62, '69316-p1.png', 'image/png', 271, 20, 'Peter Rabbit');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `customerid`, `amount`, `order_stat`, `order_date`) VALUES
(4, 0, 10, 'Confirmed', 'Mar 24, 2018'),
(9, 0, 10, 'Confirmed', 'Mar 24, 2018'),
(17, 0, 10, 'Cancelled', 'Apr 08, 2018'),
(29, 0, 20, 'Confirmed', 'Mar 24, 2018'),
(82, 0, 9000, 'Confirmed', 'Mar 24, 2018'),
(147, 0, 0, 'Cancelled', 'Apr 14, 2018'),
(793, 0, 20, 'Confirmed', 'Mar 24, 2018'),
(917, 0, 9000, 'Confirmed', 'Mar 24, 2018'),
(600125, 0, 10, 'Confirmed', 'Mar 24, 2018'),
(903227, 0, 20, 'Confirmed', 'Mar 25, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`transacton_detail_id`, `product_id`, `order_qty`, `transaction_id`) VALUES
(66, 431860, 1, 569),
(65, 358159, 2, 551182),
(64, 431860, 1, 9),
(63, 3, 1, 9),
(62, 10, 1, 30),
(61, 10, 1, 49),
(60, 11, 1, 721),
(59, 358159, 1, 0),
(58, 961461, 1, 87),
(57, 358159, 2, 87),
(56, 3, 1, 96),
(55, 4, 1, 7),
(54, 3, 2, 7),
(67, 157, 1, 71065),
(68, 157, 1, 4713),
(69, 157, 1, 2769),
(70, 358159, 1, 88),
(71, 961461, 1, 1),
(72, 961461, 1, 917),
(73, 961461, 1, 82),
(74, 3, 1, 600125),
(75, 3, 1, 4),
(76, 3, 1, 9),
(77, 4, 1, 793),
(78, 4, 1, 29),
(79, 4, 1, 903227),
(80, 3, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `pass`) VALUES
(1, 'admin', 'admin'),
(3, 'test', 'test'),
(4, 'erwin', 'erwin'),
(5, 'james', 'james'),
(6, 'erwinmanugas', 'erwinmanugas'),
(7, 'erwin@gmail.com', 'erwinmanugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_pic`
--
ALTER TABLE `cover_pic`
  ADD PRIMARY KEY (`cover_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cover_id` (`cover_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`transacton_detail_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cover_pic`
--
ALTER TABLE `cover_pic`
  MODIFY `cover_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
