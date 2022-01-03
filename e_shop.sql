-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 05:59 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `joining_date` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `l_name`, `username`, `password`, `email`, `phone`, `joining_date`, `gender`, `role`, `address`, `image`) VALUES
(5, 'Farjum', 'Haider', 'FarjumHaider', 'A123#', 'yean13@gmail.com', 168544000, '1996-4-7', 'Male', 'Admin', '91/1 Dhanmondi Dhaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(21, 'Analyse'),
(7, 'Computer'),
(19, 'Laptop'),
(20, 'phone'),
(6, 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `f_name`, `l_name`, `username`, `password`, `type`) VALUES
(4, 'sasa', 'sasa', 'asass', 'a#11s', 'Employee'),
(29, 'leo', 'ron', 'leo123', '123A#', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_id` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` text NOT NULL,
  `store_date` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `c_id`, `price`, `quantity`, `description`, `store_date`, `image`) VALUES
(18, 'TV sumsung 12', 6, 20000, 4, 'Good tv', '1990-1-2', 'storage/product_images/61153dd42ca8d.jpg'),
(19, 'frizze', 19, 1500, 6, 'Good', '1991-2-1', 'storage/product_images/61153ddfb3107.jpg'),
(20, 'iphone 12', 20, 20000, 6, 'Good', '1991-2-2', 'storage/product_images/61153d842a80e.jpg'),
(21, 'Asus laptop', 19, 20000, 4, 'Good', '1990-1-2', 'storage/product_images/6115723dc8a7a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL,
  `paid` int(50) NOT NULL,
  `due` int(50) NOT NULL,
  `payment_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `f_name`, `l_name`, `username`, `salary`, `paid`, `due`, `payment_date`) VALUES
(1, 'farjum', 'haider', 'far123', 2000, 2000, 0, '1992-2-2'),
(6, 'QQQ11', 'sasa', 'asasasasa', 10000, 2110, 7890, '1990-1-2'),
(7, 'QQQ11', 'sasa', 'asasasasa', 10000, 9012, 988, '1991-3-2'),
(8, 'aaa', 'rahman', 'asasasasa', 10000, 2000, 8000, '1991-3-2'),
(9, 'BBBBB11', 'asasa', 'as33aas', 10000, 1160, 8840, '1992-3-1'),
(10, 'jamal', 'Hossain', 'aaaa22', 10000, 3000, 7000, '2000-4-5'),
(11, 'GGGGsas', 'asas', 'sasa2', 10000, 4000, 6000, '2000-3-2'),
(12, 'jobbarssa', 'rahman', 'asas12', 3000, 2000, 1000, '1998-1-2'),
(13, 'jamal', 'Hossain', 'aaaa22', 4000, 4000, 0, '1995-1-1'),
(14, 'jobbarssa', 'rahman', 'asas12', 3000, 3000, 0, '1997-1-3'),
(15, 'QQQ11', 'sasa', 'asasasasa', 10000, 10000, 0, '1999-2-1'),
(16, 'jamal', 'Hossain', 'aaaa22', 4000, 2000, 2000, '1990-1-2'),
(17, 'jobbarssa', 'rahman', 'asas12', 3000, 200, 2800, '1998-2-2'),
(18, 'jobbarssa', 'rahman', 'asas12', 3000, 3000, 0, '2000-1-1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `joining_date` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `username`, `password`, `email`, `phone`, `joining_date`, `gender`, `role`, `salary`, `address`, `image`) VALUES
(18, 'jobbarssa', 'rahman', 'asas12', 'aaA22#', 'jobba3@gmail.com', 18665, '1996-6-4', 'Male', 'Delivery man', 3000, 'dhaka', 'storage/user_images/61153c69c3ad7.jpg'),
(36, 'jamal', 'Hossain', 'aaaa22', 'aaaaAA##11', 'ad22@gmail.com', 11111, '1991-2-2', 'Male', 'Delivery man', 4000, 'dhaka', 'storage/user_images/611005c511450.jpg'),
(37, 'AAA', 'DDD', 'sasas2', 'aAA#12', 'yeaaa3@gmail.com', 11111, '1990-1-18', 'Male', 'Delivery man', 10000, 'asas', 'storage/user_images/6110070b941dc.jpg'),
(42, 'QQQ11', 'sasa', 'asasasasa', 'aaaaSS1#233', 'yesas@gmail.com', 11111, '1992-2-2', 'Male', 'Employee', 10000, 'sasasa', 'storage/user_images/6110170035c60.jpg'),
(43, 'XXXX111', 'sasas', 'asa121asa', 'asasA#11', 'adsasn@gmail.com', 11111, '1992-2-1', 'Male', 'Delivery man', 10000, 'asasa', 'storage/user_images/6110178eab422.jpg'),
(44, 'BBBBB11', 'asasa', 'as33aas', 'AAA23#1', 'sasaa@gmail.com', 11111, '1995-2-1', 'Male', 'Delivery man', 10000, 'sasa', 'storage/user_images/61101861c7ce4.jpg'),
(45, 'MMMM22', 'sasas', 'asas23', '223Aa#', 'aaan@gmail.com', 11111, '1991-3-16', 'Male', 'Employee', 10000, 'sasa', 'storage/user_images/611019e2d3391.jpg'),
(46, 'GGGGsas', 'asas', 'sasa2', 'sas@#12', 'adsas@gmail.com', 11111, '1993-1-1', 'Male', 'Employee', 10000, 'sasa', 'storage/user_images/611022455e90e.jpg'),
(48, 'aaa', 'rahman', 'asasasasa', 'aaA#1', 'yeanfarjum13@gmail.com', 11111, '1995-4-2', 'Male', 'Employee', 8000, 'asas', 'storage/user_images/6115636293497.jpg'),
(50, 'Fahim', 'rahman', 'asasasasa', 'AA123#', 'aan@gmail.com', 11111, '1990-1-1', 'Male', 'Admin', 0, 'aaaaa', 'storage/user_images/61156d267ac7a.jpg'),
(51, 'Farjum', 'Haider', 'asasasasa', 'Asa#A1', 'yeaa13@gmail.com', 11111, '1990-1-1', 'Male', 'Admin', 0, 'aaaa', 'storage/user_images/61157200e62eb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD KEY `fk_products_categories` (`c_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories` FOREIGN KEY (`c_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
