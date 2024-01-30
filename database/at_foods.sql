-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 01:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `at_foods`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('admin', 'admin'),
('ali', 'ali');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dishes_id` int(11) NOT NULL,
  `dishes_name` varchar(50) NOT NULL,
  `dishes_price` float NOT NULL,
  `dishes_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dishes_id`, `dishes_name`, `dishes_price`, `dishes_img`) VALUES
(3, 'Pizza', 5, 'home-img-3.png'),
(6, 'Soft-Cake', 1, 'dish-5.png'),
(8, 'Chiken', 5, 'dish-3.png'),
(9, 'Chipas', 2, 'Chips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dish_cart`
--

CREATE TABLE `dish_cart` (
  `Serial_No` int(11) NOT NULL,
  `dish_name` varchar(25) NOT NULL,
  `dish_price` float NOT NULL,
  `dish_img` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dish_cart`
--

INSERT INTO `dish_cart` (`Serial_No`, `dish_name`, `dish_price`, `dish_img`, `quantity`) VALUES
(2, 'Pizza', 5, 'home-img-3.png', 3),
(3, 'Soft-Cake', 1, 'dish-5.png', 3),
(5, 'Chipas', 2, 'Chips.jpg', 2),
(6, 'Chiken', 5, 'dish-3.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `fb_name` varchar(25) NOT NULL,
  `fb_desc` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `fb_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `fb_name`, `fb_desc`, `created`, `fb_img`) VALUES
(7, 'Muhammad Talal', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Excepturi, Accusantium.', '0000-00-00 00:00:00', 'IMG_20211005_193648.jpg'),
(8, 'Ali Hassan', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Excepturi, Accusantium.', '0000-00-00 00:00:00', 'ali.jpg'),
(11, 'Muhammad Awais', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Excepturi, Accusantium.', '0000-00-00 00:00:00', 'awais.jpg'),
(15, 'user', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Excepturi, Accusantium.', '0000-00-00 00:00:00', 'pic-1.png'),
(16, 'Shehroz', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Excepturi, Accusantium.', '0000-00-00 00:00:00', 'shehroz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `category_price` float NOT NULL,
  `category_img` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`category_id`, `category_name`, `category_desc`, `category_price`, `category_img`, `created`) VALUES
(1, 'Pizza 1', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Excepturi, Accusantium.', 122, 'menu-5.jpg', '0000-00-00 00:00:00'),
(6, 'Ice Cream', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Excepturi, Accusantium.', 3, 'menu-6.jpg', '0000-00-00 00:00:00'),
(7, 'Pizza', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Excepturi, Accusantium.', 3, 'dish-4.png', '0000-00-00 00:00:00'),
(8, 'Chiken5', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Excepturi, Accusantium.', 12, 'home-img-2.png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu_cart`
--

CREATE TABLE `menu_cart` (
  `Serial_No` int(11) NOT NULL,
  `dish_name` varchar(25) NOT NULL,
  `dish_price` float NOT NULL,
  `dish_img` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_cart`
--

INSERT INTO `menu_cart` (`Serial_No`, `dish_name`, `dish_price`, `dish_img`, `quantity`, `created`) VALUES
(1, 'Ice Cream', 3, 'menu-6.jpg', 1, '0000-00-00 00:00:00'),
(2, 'Pizza 1', 122, 'menu-5.jpg', 1, '0000-00-00 00:00:00'),
(3, 'Chiken5', 12, 'dish-3.png', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Serial_No` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `number` int(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Serial_No`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_price`) VALUES
(1, 'Ali Hassan', 2147483647, 'mughal201burewala@gmail.c', 'cash on delivery', 'House No.10', 'Street No.1', 'Burewala', 'Chak No.201/E.B', 'Pakistan', '61010', 42),
(2, 'M. Awais', 2147483647, 'rashiali201brw@gmail.com', 'cash on delivery', 'House No 2', 'Street No 2', 'Burewala', 'Chak No.201/E.B', 'Pakistan', '61010', 49),
(3, 'Ali Kamran', 2147483647, 'ali201brw@gmail.com', 'cash on delivery', 'House No.1', 'Street No.8', 'Sahiwal', 'Sakahra Town', 'Pakistan', '69999', 27),
(4, 'M. Talal', 2147483647, 'rashiali201brw@gmail.com', 'cash on delivery', 'House No.1', 'Street No.6', 'Vehari', 'Sakahra Town', 'Pakistan', '61010', 67),
(5, 'Ali Hassan', 2147483647, 'mughal201burewala@gmail.c', 'cash on delivery', 'Burewala', 'Street No.6', 'Burewala', 'Chak No.201/E.B', 'Pakistan', '61010', 43),
(6, 'Ali Kamran', 2147483647, 'alihassankdp@gmail.com', 'cash on delivery', 'House No.1', 'Street No.6', 'Burewala', 'Chak No.201/E.B', 'Pakistan', '61010', 29),
(7, 'Ali Hassan', 2147483647, 'mughal201burewala@gmail.c', 'cash on delivery', 'Burewala', 'Street No.6', 'Burewala', 'Chak No.204/E.B', 'Pakistan', '61010', 32);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sno` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(8) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sno`, `name`, `email`, `username`, `password`, `date`) VALUES
(1, '', '', '', 0, '2022-12-24 14:42:59'),
(2, '', '', 'mughal@gmail.com', 0, '2022-12-24 15:03:48'),
(3, '', '', 'mughal201brw@gmail.com', 0, '2022-12-24 15:05:06'),
(4, 'Ali Hassan', 'mughal201burewala@gmail.com', 'Ali', 123321, '0000-00-00 00:00:00'),
(5, 'Ali', 'ali201brw@gmail.com', 'Ali Hassan', 123321, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dishes_id`);

--
-- Indexes for table `dish_cart`
--
ALTER TABLE `dish_cart`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `menu_cart`
--
ALTER TABLE `menu_cart`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dishes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dish_cart`
--
ALTER TABLE `dish_cart`
  MODIFY `Serial_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu_cart`
--
ALTER TABLE `menu_cart`
  MODIFY `Serial_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Serial_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
