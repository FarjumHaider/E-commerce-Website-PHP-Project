-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 05:45 PM
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
(29, 'Analyseaa'),
(7, 'Computer'),
(19, 'Laptop'),
(6, 'TV'),
(27, 'xxaxa'),
(28, 'xzxzx');

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
(1, 'Fahim', 'rahman', 'asasasasa', 'aasas#1', 'Delivery man'),
(2, 'shahosh', 'rahman', 'shahosh123', 'AA#122', 'Employee'),
(3, 'jobbar', 'rahman', 'asas12', 'aaA22#', 'Delivery man'),
(4, 'sasa', 'sasa', 'asass', 'a#11s', 'Employee'),
(5, 'aaasa', 'rahman', 'sasasa', 'asaA#1', 'Employee'),
(6, 'Fahimas', 'rahman', 'yeansas', 'sasA1#', 'Employee'),
(7, 'Karima', 'rahmana', 'yeanaa', 'asaA1#', 'Employee'),
(8, 'sasa', 'ssas', 'asasas1', 'aaA2#1', 'Employee'),
(9, 'aaa', 'rahman', 'asasasasa', 'sasa1#', 'Employee'),
(10, 'sasa', 'rahman', 'asas22', 'sas#22', 'Employee'),
(11, 'sas', 'sasa', 'asas1sa', 'saA23#', 'Employee'),
(12, 'sasa', 'sssas', 'sas1a', 'aA#22', 'Employee'),
(13, 'sssas', 'sas', 'aaaaa', 'sasA#1', 'Employee'),
(14, 'sasas', 'sassas', 'asasasa', '111Aaa#11', 'Employee'),
(17, 'aaa', 'sssas', 'sasaaa', 'saAa#1', 'Employee');

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
  `store_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `c_id`, `price`, `quantity`, `description`, `store_date`) VALUES
(11, 'Toyota', 7, 20000, 13, 'Nice car', '1997-5-15'),
(12, 'asa', 19, 222, 4, 'aaaa', '1992-2-2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `u_id` int(10) NOT NULL,
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

INSERT INTO `users` (`id`, `f_name`, `l_name`, `u_id`, `username`, `password`, `email`, `phone`, `joining_date`, `gender`, `role`, `salary`, `address`, `image`) VALUES
(10, 'Karim', 'rahmanaa', 0, 'karim1234', 'hsja#12a', 'karim@gmail.com', 1865533, '2000-6-5', 'Male', 'Delivery man', 15000, '9/3 mirpur', 'storage/user_images/6104712a62e7b.jpg'),
(13, 'tamim', 'Hossain', 0, 'tamim123', 'sad#12', 'tamim@gmail.com', 186654, '1992-3-3', 'Male', 'Employee', 10000, 'Dhaka', 'storage/user_images/610e80085b819.jpg'),
(14, 'ayon', 'khan', 0, 'ayon123', 'aaA1#', 'ayon1@gmail.com', 182722, '1993-3-1', 'Male', 'Employee', 25000, 'Mirpur', 'storage/user_images/610e84d7d1f26.jpg'),
(15, 'aaa', 'rahman', 0, 'asasasasa', 'aass#11', 'fahimsas@gmail.com', 11111, '1990-3-1', 'Male', 'Delivery man', 10000, 'aaxxax', 'storage/user_images/610e855061d13.jpg'),
(16, 'aaasas', 'rahman', 0, 'yeanasasa', 'asasA#1', 'yeanasas@gmail.com', 2147483647, '1991-1-1', 'Male', 'Employee', 10000, 'sasaas', 'storage/user_images/610e8599efe22.jpg'),
(17, 'shahosh', 'rahman', 0, 'shahosh123', 'AA#122', 'sahosh22@gmail.com', 186543, '1998-7-2', 'Male', 'Employee', 10000, 'mirpur dhaka', 'storage/user_images/610e86952be38.jpg'),
(18, 'jobbar', 'rahman', 0, 'asas12', 'aaA22#', 'jobba3@gmail.com', 18665, '1996-6-4', 'Male', 'Delivery man', 10000, 'dhaka', 'storage/user_images/610e894114144.jpg'),
(19, 'sasa', 'sasa', 0, 'asass', 'a#11s', 'aa12@gmail.com', 9281212, '1994-1-2', 'Male', 'Employee', 10000, 'Dhaka', 'storage/user_images/610e8998bdd0f.jpg'),
(20, 'aaasa', 'rahman', 0, 'sasasa', 'asaA#1', 'adss@gmail.com', 11111, '1991-2-5', 'Male', 'Employee', 15000, 'Dhaka', 'storage/user_images/610e8a2c78f32.jpg'),
(21, 'Fahimas', 'rahman', 0, 'yeansas', 'sasA1#', 'asas@gmail.com', 182333, '1993-6-3', 'Male', 'Employee', 15000, 'Mirpur', 'storage/user_images/610e8d1c2a803.jpg'),
(26, 'sas', 'sasa', 0, 'asas1sa', 'saA23#', 'adaan@gmail.com', 11111, '1995-8-2', 'Male', 'Employee', 10000, 'aaa', 'storage/user_images/610e98fabbae8.jpg'),
(27, 'sasa', 'sssas', 0, 'sas1a', 'aA#22', 'a22@gmail.com', 222211, '1991-3-2', 'Male', 'Employee', 20000, 'dhaka', 'storage/user_images/610e9a5000642.jpg'),
(28, 'sssas', 'sas', 0, 'aaaaa', 'sasA#1', 'adss@gmail.com', 11111, '1992-2-17', 'Male', 'Employee', 10000, 'aaa', 'storage/user_images/610e9ed03cc72.jpg'),
(29, 'sasas', 'sassas', 0, 'asasasa', '111Aaa#11', 'adaa@gmail.com', 11111, '1992-3-2', 'Male', 'Employee', 10000, 'aaa', 'storage/user_images/610ea058ce90d.jpg'),
(30, 'aaa', 'sssas', 0, 'sasaaa', 'saAa#1', 'adaa@gmail.com', 11111, '1990-3-2', 'Male', 'Employee', 10000, 'aa', 'storage/user_images/610ea092f1ea1.jpg');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
