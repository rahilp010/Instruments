-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 02:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `password`) VALUES
(1, 'Admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `YourProduct` varchar(100) NOT NULL,
  `PhoneNo` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `YourProduct`, `PhoneNo`, `Address`, `PaymentMethod`) VALUES
(1, 'Electric', '9316080624', '16/17 jay bhavani soc', 'Gpay'),
(4, 'Electic_Guitar, ', '6364783624', 'Jay bhavani soc surat', 'Gpay'),
(5, 'C_Trumpet, Irish_Flute, ', '4348329849', 'udhna darvaja,surat', 'Cash on Delivery'),
(7, 'Grand_Piano, Kharaj Pancham_Sitar, ', '3647642387', 'dumas road,surat', 'Cash on Delivery'),
(8, 'Bb_Trumpet, ', '6746756756', 'fghfg', 'Gpay');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `UserName`, `phone`, `email`, `password`) VALUES
(1, 'rahil', 2147483647, 'rahilp704@gmail.com', '12345'),
(4, 'rinkaltank048', 2147483647, 'rinkal@gmail.com', '9999'),
(6, 'kajal042', 2147483647, 'kajal042@gmail.com', '11111'),
(7, 'manav', 2147483647, 'manav@gmail.com', '2345');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `rating` int(10) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `uname`, `rating`, `feedback`) VALUES
(1, 'DEMO', 1, 'working'),
(2, 'rahilp704', 5, 'I am glad to hear that you had a positive experience with a website that provided high-quality instruments. It always important to purchase instruments from reputable sources to ensure that you are getting the best possible quality.'),
(12, 'rinkaltank048', 5, 'I will been playing the piano for many years and recently upgraded to a grand piano. The sound is incredible, and the touch is perfect. It is a joy to play, and I will noticed a significant improvement in my playing since I started using it. It is an investment, but it was worth every penny.\r\n\r\n \r\n'),
(15, 'dfgfg', 1, 'mghjgkjhkjhj,dshx,mshds,mcds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
