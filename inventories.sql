-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 11:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventories`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'showmik'),
(2, 'Showmik', '000d124660f41cbe5e7d550daa36c20a', 'Showmik');

-- --------------------------------------------------------

--
-- Table structure for table `admin_products`
--

CREATE TABLE `admin_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `c_id` int(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_products`
--

INSERT INTO `admin_products` (`id`, `product_name`, `c_id`, `product_price`, `product_code`, `img`) VALUES
(4, 'chips', 2, '20', 'p0001', 'storage/product_images/61a8db762cb34.jpg'),
(5, 'burger', 1, '200', 'p0002', 'storage/product_images/61a8db8ccdf58.jpg'),
(10, 'pizza', 14, '200', 'p0003', 'storage/product_images/61abc2d2677c4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(2000) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` int(200) NOT NULL,
  `product_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(29, 'Lays', '20', 'storage/product_images/61a79b4219ff1.jpg', 4, 80, 'p0003');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Burger'),
(2, 'Chips'),
(14, 'pizza');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman`
--

CREATE TABLE `deliveryman` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_product`
--

CREATE TABLE `employee_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `c_id` int(100) NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_product`
--

INSERT INTO `employee_product` (`id`, `product_name`, `c_id`, `product_price`, `product_code`, `img`) VALUES
(4, 'chips', 2, 20, 'p0001', 'storage/product_images/61a8dcbabe6f0.jpg'),
(5, 'burger', 1, 150, 'p0002', 'storage/product_images/61a8dccd9c3c7.jpg'),
(8, 'Pizza', 14, 200, 'p0003', 'storage/product_images/61aa42d077c36.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pmode` varchar(200) NOT NULL,
  `products` varchar(200) NOT NULL,
  `amount_paid` int(255) NOT NULL,
  `order_status` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `gmail`, `phone`, `address`, `pmode`, `products`, `amount_paid`, `order_status`, `status`) VALUES
(5, 'showmik', 'showmik.aiub@gmail.com', '0183857894', 'Kushtia', 'netbanking', 'Banana(2)', 400, 0, 'ongoing'),
(6, 'showmik', 'showmik.aiub@gmail.com', '0183857894', 'Kushtia', 'cod', 'burger(1), Potato(1)', 400, 1, 'ongoing'),
(7, 'showmik', 'showmik.aiub@gmail.com', '0183857894', 'Kushtia', 'netbanking', 'burger(0)', 0, 0, 'ongoing'),
(8, 'showmik', 'showmik.aiub@gmail.com', '0183857894', 'Kushtia', 'netbanking', 'burger(1)', 200, 1, ''),
(9, 'showmik', 'showmik.aiub@gmail.com', '0183857894', 'Kushtia', 'netbanking', 'burger(1), Pizza(1)', 400, 1, 'received'),
(15, 'Raj khan', 'r@gmail.com', '0183857894', 'Kushtia', 'netbanking', 'Chese Burger(1), Sandwich(1)', 400, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `c_id` int(10) NOT NULL,
  `product_price` varchar(2000) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `c_id`, `product_price`, `product_code`, `img`) VALUES
(18, 'Chese Burger', 1, '200', 'p0001', 'storage/product_images/6193ff4d5db6f.jpg'),
(28, 'Lays', 2, '20', 'p0003', 'storage/product_images/61a79b4219ff1.jpg'),
(30, 'Chicken Pizza', 3, '200', 'p0004', 'storage/product_images/61a886b5cb629.jpg'),
(31, 'Sandwich', 4, '200', 'p0005', 'storage/product_images/61a8874dbbb10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `c_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `c_id`, `price`, `qty`, `desc`, `img`) VALUES
(5, 'Nike', 2, 2000, 3, 'red', 'storage/product_images/618120fdd0108.jpg'),
(6, 'CSE', 2, 2000, 3, 'hot', 'storage/product_images/618660215e96f.jpeg'),
(7, 'CSE', 2, 2000, 3, 'hot', 'storage/product_images/6186df86316ea.jpg'),
(11, 'showmik', 2, 2000, 3, 'hot', 'storage/product_images/6188d21adb4b7.jpg'),
(12, 'Zero', 2, 2000, 3, 'hot', 'storage/product_images/619111a1ec691.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `food_name` varchar(200) NOT NULL,
  `rating` int(100) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `cust_name`, `food_name`, `rating`, `comments`) VALUES
(1, 'Raj', 'Burger', 4, 'Good'),
(2, 'Raj', 'Burger', 4, 'Good');

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
(22, 'Raj', 'khan', 'Raj', 2000, 2000, 1000, '2005-9-6');

-- --------------------------------------------------------

--
-- Table structure for table `send_email`
--

CREATE TABLE `send_email` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `send_email`
--

INSERT INTO `send_email` (`id`, `email`, `text`) VALUES
(1, 'showmik.aiub@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `u_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `gender`, `email`, `address`, `usertype`) VALUES
(1, 'Raj', 'tasfi2684', 'Male', 'saifulislamaiub17@gmail.com', 'dhaka', 'admin'),
(3, 'Raj', 'raj2684', 'Male', 'r@gmail.com', 'khulna', 'customer'),
(5, 'rahit', 'rahit2684', 'Male', 'r@gmail.com', 'Kushtia', 'admin'),
(6, 'fahim', 'fahim2684', 'Male', 'fahim@gmail.com', 'Dhaka', 'employee'),
(20, 'joy', 'j2684', 'Male', 'joy@gmail.com', 'Dhaka', 'deliveryman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_products`
--
ALTER TABLE `admin_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryman`
--
ALTER TABLE `deliveryman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_product`
--
ALTER TABLE `employee_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_email`
--
ALTER TABLE `send_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_products`
--
ALTER TABLE `admin_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `deliveryman`
--
ALTER TABLE `deliveryman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_product`
--
ALTER TABLE `employee_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `send_email`
--
ALTER TABLE `send_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
