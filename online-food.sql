-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 03:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-food`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `img_src` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `cat_id`, `foodname`, `description`, `img_src`, `price`) VALUES
(101, 10, 'Chicken biriayani', '', 'Chicken biriayani', 210),
(102, 10, 'Chicken polao', '', 'Chicken polao', 180),
(103, 10, 'Rice & chicken fry', '', 'Fried rice with chicken fry', 150),
(104, 10, 'Fried rice & chilli', '', 'Fried rice with chilli', 160),
(105, 10, 'Steamed plain rice', '', 'Steamed plain rice', 160),
(106, 10, 'Tehari', '', 'Tehari', 170),
(201, 20, 'Chicken burger', '', 'Chicken burger', 185),
(202, 20, 'Chicken curry', '', 'Chicken curry', 180),
(203, 20, 'Chicken fries', '', 'Chicken fries', 199),
(204, 20, 'Chicken pizza', '', 'Chicken pizza', 299),
(205, 20, 'Chicken puff roll', '', 'Chicken puff roll', 150),
(206, 20, 'Chicken shwarma', '', 'Chicken shwarma', 140),
(207, 20, 'Egg & vegetables rice', '', 'Egg & vegetables rice', 199),
(208, 20, 'Frozen chicken nuggets', '', 'Frozen chicken nuggets', 140),
(209, 20, 'Fuchka', '', 'Fuchka', 249),
(210, 20, 'Hot burger with french fry', '', 'Hot burger with french fry', 120),
(211, 20, 'Indian special dosa', '', 'Indian special dosa', 180),
(212, 20, 'Masala dosa', '', 'Masala dosa', 170),
(213, 20, 'Nabibi kabab', '', 'Nabibi kabab', 130),
(214, 20, 'Nabibi kabab', '', 'Nabibi kabab', 130),
(215, 20, 'Normal pasta', '', 'Normal pasta', 180),
(216, 20, 'Roti with chicken curry', '', 'Normal roti with chicken curry', 299),
(217, 20, 'Samucha', '', 'Samucha', 120),
(218, 20, 'Special Burger', '', 'Special Burger', 160),
(219, 20, 'Fish curry', '', 'Fish curry', 170),
(220, 20, 'Vegetables soup', '', 'Vegetables soup', 140),
(301, 30, 'Chocolate biscuits', '', 'Chocolate biscuits', 60),
(302, 30, 'Chocolate cake', '', 'Chocolate cake', 80),
(303, 30, 'Choconut Chrunch', '', 'Choconut Chrunch', 99),
(304, 30, 'Jhal patties', '', 'Jhal patties', 110),
(401, 40, 'Italian hot coffee', '', 'Italian hot coffee', 140),
(402, 40, 'Juice', '', 'Juice', 160),
(403, 40, 'Mango juice', '', 'Mango juice', 130),
(404, 40, 'Milk tea', '', 'Milk tea', 140),
(405, 40, 'Mint lemon juice', '', 'Mint lemon juice', 110),
(406, 40, 'Rich vanilla (500ml)', '', 'Rich vanilla (500ml)', 150),
(407, 40, 'role', '', 'role', 170),
(408, 40, 'Rosegold pitha', '', 'Rosegold pitha', 120);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `food_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` int(11) NOT NULL,
  `pay_opt` varchar(15) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `email`, `food_id`, `c_name`, `phone`, `address`, `city`, `zip`, `pay_opt`, `order_time`) VALUES
(728, 'a@gmail.com', 201, 'Motalib', '654789', 'Narsing, Dhaka ', 'Motalib', 1610, 'bkash', '2022-02-11 08:36:15'),
(2022, 'a@gmail.com', 201, 'Motalib', '654789', 'Narsing, Dhaka ', 'Motalib', 1610, 'bkash', '2022-02-11 08:36:15'),
(2545, 't@gmail.com', 101, 'Tonmoy', '01714563241', 'Home: 4 , Roda: 1', 'Tonmoy', 1610, 'bkash', '2022-02-11 11:41:20'),
(3123, 'a@gmail.com', 201, 'Motalib', '654789', 'Narsing, Dhaka ', 'Motalib', 1610, 'bkash', '2022-02-11 08:36:15'),
(3720, 'a@gmail.com', 202, 'Motalib', '12345678', 'Narsing, Dhaka ', 'Motalib', 1610, 'card', '2022-02-11 03:44:10'),
(3756, 'a@gmail.com', 201, '', '', '', '', 0, '', '2022-02-11 08:36:15'),
(4795, 'a@gmail.com', 201, 'Motalib', '654789', 'Narsing, Dhaka ', 'Motalib', 1610, 'bkash', '2022-02-11 08:36:15'),
(5568, 'fahim@gmail.com', 203, 'Fahim', '017145893', 'Home: 4 , Road: 1, Banani Model Town', 'Fahim', 1610, 'card', '2022-02-12 08:48:59'),
(7351, 'a@gmail.com', 201, 'Motalib', '654789', 'Narsing, Dhaka ', 'Motalib', 1610, 'bkash', '2022-02-11 08:36:15'),
(8008, 'a@gmail.com', 201, 'Motalib', '654789', 'Narsing, Dhaka ', 'Motalib', 1610, 'bkash', '2022-02-11 08:36:15'),
(8652, 'a@gmail.com', 201, 'Motalib', '654789', 'Narsing, Dhaka ', 'Motalib', 1610, 'bkash', '2022-02-11 08:36:15'),
(9541, 'a@gmail.com', 201, 'Motalib', '654789', 'Narsing, Dhaka ', 'Motalib', 1610, 'bkash', '2022-02-11 08:36:15'),
(9869, 't@gmail.com', 207, 'Tonmoy', '0171489362', 'Home: 4 , Road: 1, Banani Model Town', 'Tonmoy', 0, 'bkash', '2022-02-12 06:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(101, 'Motalib', 'Pathan', 'a@gmail.com', '1234'),
(2849, 'Fahim', 'Ahammad', 'fahim@gmail.com', '1234'),
(5947, 'Tonmoy', 'Ahamad', 'tonmoy@gamil.com', '1234'),
(8035, 'Abcd', 'Efg', 'b@gmail.com', '1234'),
(8340, 'Tonmoy', 'Ahammad', 't@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
