-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 06:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'sanket', '5013');

-- --------------------------------------------------------

--
-- Table structure for table `admin_replies`
--

CREATE TABLE `admin_replies` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `admin_reply` text NOT NULL,
  `reply_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_replies`
--

INSERT INTO `admin_replies` (`id`, `user_email`, `admin_reply`, `reply_date`) VALUES
(1, 'sanketnivate2k18@gmail.com', 'bnb n', '2023-12-30 07:49:29'),
(2, 'sanketnivate2k18@gmail.com', 'bv bv ', '2023-12-30 07:52:16'),
(3, 'sanketnivate2k18@gmail.com', 'bv bv ', '2023-12-30 07:52:55'),
(4, 'sanketnivate2k18@gmail.com', 'babmab', '2023-12-30 07:55:25'),
(5, 'sanketnivate2k18@gmail.com', 'babmab', '2023-12-30 07:55:36'),
(6, 'sanketnivate2k18@gmail.com', 'ok your replyyyy\r\n', '2023-12-30 08:26:44'),
(7, 'sktniwate@gmail.com', 'jskjfsb', '2023-12-30 08:28:05'),
(8, 'saloniniwate1@gmail.com', 'vcf\r\n', '2023-12-30 08:34:19'),
(9, 'affsadf', 'n', '2023-12-31 15:52:13'),
(10, 'sanketnivate2k18@gmail.com', 'n', '2023-12-31 15:52:18'),
(11, 'affsadf', 'n', '2023-12-31 15:52:25'),
(12, 'sanketnivate2k18@gmail.com', 'n', '2023-12-31 15:52:29'),
(13, 'sanketnivate2k18@gmail.com', 'nn', '2023-12-31 15:52:43'),
(14, 'sanketnivate2k18@gmail.com', 'n', '2023-12-31 15:55:28'),
(15, 'sanketnivate2k18@gmail.com', ' n', '2023-12-31 15:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `admin_repliesc`
--

CREATE TABLE `admin_repliesc` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `admin_reply` text NOT NULL,
  `reply_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_repliesc`
--

INSERT INTO `admin_repliesc` (`id`, `user_email`, `admin_reply`, `reply_date`) VALUES
(1, 'sanketnivate2k18@gmail.com', 'conntact as\r\n', '2023-12-30 10:29:47'),
(2, 'sanketnivate2k18@gmail.com', 'conntact as\r\n', '2023-12-30 10:30:11'),
(3, 'sanketnivate2k18@gmail.com', 'conntact as\r\n', '2023-12-30 10:30:53'),
(4, 'sanketnivate2k18@gmail.com', 'conntact as\r\n', '2023-12-30 10:30:55'),
(5, 'sanketnivate2k18@gmail.com', 'conntact as\r\n', '2023-12-30 10:30:57'),
(6, 'sanketnivate2k18@gmail.com', 'nbbvvn', '2023-12-30 10:31:03'),
(7, 'sanketnivate2k18@gmail.com', 'nbbvvn', '2023-12-30 10:33:06'),
(8, 'sanketnivate2k18@gmail.com', 'nbbvvn', '2023-12-30 10:34:57'),
(9, 'sanketnivate2k18@gmail.com', 'conntact as\r\n', '2023-12-30 10:35:39'),
(10, 'sanketnivate2k18@gmail.com', 'conntact as\r\n', '2023-12-30 10:36:36'),
(11, 'sanketnivate2k18@gmail.com', 'conntact as\r\n', '2023-12-30 10:37:39'),
(12, 'nehaniwate04@gmail.com', 'bnvgh', '2023-12-30 10:37:51'),
(13, 'sanketnivate2k18@gmail.com', 'n', '2023-12-31 15:52:01'),
(14, 'sanketnivate2k18@gmail.com', 'n', '2023-12-31 15:52:08'),
(15, 'sanketnivate2k18@gmail.com', ' n', '2023-12-31 15:56:19'),
(16, 'sanketnivate2k18@gmail.com', ' n', '2023-12-31 15:58:49'),
(17, 'sanketnivate2k18@gmail.com', ' n', '2023-12-31 15:59:06'),
(18, 'sanketnivate2k18@gmail.com', ' n', '2023-12-31 16:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `description` varchar(22) NOT NULL,
  `mrp` int(22) NOT NULL,
  `sp` int(22) NOT NULL,
  `image` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `mrp`, `sp`, `image`) VALUES
(21, 'Kiyumi Wood Armchair', 'New Product', 5000, 3499, 'inchair.jpg'),
(22, 'Kiyumi Fabric Chair', '', 8000, 4000, 'inchair1.jpg'),
(23, 'Kiyumi Fabric Armchair', '', 9000, 6496, 'inchair2.jpg'),
(24, 'SOUL Soft Chair', '', 8600, 4000, 'inchair3.jpg'),
(25, 'BELLE 4 LEG Armchair', '', 8500, 4500, 'inchair4.jpg'),
(26, 'BELLE Sled Armchair', 'In Stock', 9500, 5000, 'inchair5.jpg'),
(27, 'BELLE 4 WL Armchair', 'New Product', 6500, 2000, 'inchair6.jpg'),
(28, 'FONDINA chair', '', 6600, 2500, 'inchair7.jpg'),
(29, 'ESTER Chair ', '', 8900, 6400, 'inchair8.jpg'),
(30, 'ESTER Armchair ', '', 9900, 6400, 'inchair9.jpg'),
(31, 'PIGRECO Dining Chair ', '', 7900, 6400, 'inchair10.jpg'),
(32, 'BLUME Side Chair ', 'New Product', 7900, 6400, 'inchair11.jpg'),
(33, 'BLUME  Armchair ', '', 7500, 4000, 'inchair12.jpg'),
(34, 'Pampa Dining Chair ', '', 6400, 4500, 'inchair13.jpg'),
(35, 'MORISOT Chair ', 'New Product', 6400, 4500, 'inchair14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productssofa`
--

CREATE TABLE `productssofa` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `description` varchar(22) NOT NULL,
  `mrp` int(22) NOT NULL,
  `sp` int(22) NOT NULL,
  `image` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productssofa`
--

INSERT INTO `productssofa` (`id`, `name`, `description`, `mrp`, `sp`, `image`) VALUES
(1, 'Le Mura Wool Sofa', 'New product', 5545, 3000, 'insofa.jpg'),
(2, 'Roma Nuvola Sofa', '', 9000, 5000, 'insofa1.webp'),
(3, 'JULEP Sofa', '', 12000, 6546, 'insofa2.webp'),
(4, 'SESANN 3 seater Sofa', '', 5545, 65465, 'insofa3.webp'),
(5, 'SESANN 2 Seater Sofa', 'New Product', 12000, 5000, 'insofa4.webp'),
(6, 'Nuvola 3 Seater Sofa', '', 15000, 7000, 'insofa5.webp'),
(7, 'Saia 3 Seater Sofa', 'Special sandal wood', 2000, 10000, 'insofa6.webp'),
(8, 'Saia 2 Seater Sofa', '', 16000, 10000, 'insofa7.webp'),
(9, 'GHOST Modular Sofa', '', 19000, 12000, 'insofa8.jpg'),
(10, 'Gray Loveseat', '', 15000, 9000, 'insofa9.webp'),
(11, 'Gray 3 Seater Sofa', 'Best selling product', 15000, 9000, 'insofa10.jpg'),
(12, 'LE MURA Modular System', 'Best selling product', 2100, 15000, 'insofa11.webp'),
(13, 'JULEP Chaise Longue', '', 21000, 16000, 'insofa12.jpg'),
(14, 'LIMA Sofa Large', '', 15000, 8000, 'insofa13.webp');

-- --------------------------------------------------------

--
-- Table structure for table `productstable`
--

CREATE TABLE `productstable` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `description` varchar(22) NOT NULL,
  `mrp` int(22) NOT NULL,
  `sp` int(22) NOT NULL,
  `image` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productstable`
--

INSERT INTO `productstable` (`id`, `name`, `description`, `mrp`, `sp`, `image`) VALUES
(1, 'BRISE Coffee Table Ø28', '', 12000, 7000, 't2.webp'),
(2, 'BRISE Coffee Table Ø36', 'Unique product', 10000, 5000, 't1.jpg'),
(3, 'BRISE Coffee Table Ø31', 'New product', 10000, 6000, 't3.jpg'),
(4, 'BRISE Coffee Table Ø28', '', 11000, 6000, 't4.jpg'),
(5, 'BRISE Coffee Table Ø28', '', 10000, 5000, 't5.jpg'),
(6, 'BRISE Side Table', '', 8000, 3000, 't6.jpg'),
(7, 'Inout Side table H: 17', 'Unique product', 8000, 3000, 't7.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `username` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(15, 'Sanket', 'sanket', 'sanketnivate2k18@gmail', '1234'),
(26, 'Sanket', 'sanket', 'sanketnivate2k18@gmail', '5555'),
(28, 'Sanket', 'sanket', 'sanketnivate2k18@gmail', '3333');

-- --------------------------------------------------------

--
-- Table structure for table `your_name`
--

CREATE TABLE `your_name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `your_name`
--

INSERT INTO `your_name` (`id`, `name`, `username`, `city`, `phone`, `email`, `user_type`) VALUES
(1, 'sdaaf', 'adfadfdd', 'adfd', 2147483647, 'affsadf', 'on'),
(2, 'Sanket', 'sanket', 'Nallasopara ', 665, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(3, 'Sanket', 'sanket', 'Nallasopara ', 665, 'sanketnivate2k18@gmail.com', 'student'),
(4, 'saloni', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'student'),
(5, 'saloni', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'student'),
(6, 'saloni', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'student'),
(7, 'Sanket', 'sanket', 'Nallasopara ', 1234565656, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(8, 'Sanket', 'sanket', 'Nallasopara ', 1234565656, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(9, 'Sanket', 'sanket', 'Nallasopara ', 1234565656, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(10, 'Sanket', 'sanket', 'Nallasopara ', 1234565656, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(11, 'Sanket', 'sanket', 'Nallasopara ', 1234565656, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(12, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'enthusiast'),
(13, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'student'),
(14, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'student'),
(15, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'student'),
(16, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'student'),
(17, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'student'),
(18, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'student'),
(19, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(20, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sktniwate@gmail.com', 'enthusiast'),
(21, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sktniwate@gmail.com', 'enthusiast'),
(22, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sktniwate@gmail.com', 'enthusiast'),
(23, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'enthusiast'),
(24, 'Sanket', 'sdac', 'Nallasopara ', 2147483647, 'xojaro4317@bodeem.com', 'interiorDesigner'),
(25, 'Sanket', 'sdac', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(26, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(27, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(28, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(29, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(30, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(31, 'Sanket', 'sanket', 'Nallasopara ', 2147483647, 'sanketnivate2k18@gmail.com', 'interiorDesigner'),
(32, 'nnnn', 'jhjhfggfsggfguyfyvstfvtfyuf', 'bbb', 2147483647, 'saloniniwate1@gmail.com', 'enthusiast'),
(33, '', '', '', 0, '', ''),
(34, '', '', '', 0, '', ''),
(35, '', '', '', 0, '', ''),
(36, '', '', '', 0, '', ''),
(37, '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `your_table_name`
--

CREATE TABLE `your_table_name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `your_table_name`
--

INSERT INTO `your_table_name` (`id`, `name`, `username`, `email`, `text`) VALUES
(1, 'Sanket', 'sanket', 'sanketnivate2k18@gmail.com', 'n jn '),
(2, 'Sanket', 'sanketnivate2k18@gmail.com', 'sanketnivate2k18@gmail.com', 'how are you'),
(3, 'Sanket', 'sanket', 'sanketnivate2k18@gmail.com', 'how are you'),
(4, 'Sanket', 'sanket', 'sanketnivate2k18@gmail.com', 'nkjhiahdah'),
(5, 'Sanket', 'sanket', 'sanketnivate2k18@gmail.com', 'hhhh'),
(6, 'Sanket', 'sanket', 'sanketnivate2k18@gmail.com', 'hhhh'),
(7, 'neha', 'n', 'nehaniwate04@gmail.com', 'hfhgfhgfh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_replies`
--
ALTER TABLE `admin_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_repliesc`
--
ALTER TABLE `admin_repliesc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productssofa`
--
ALTER TABLE `productssofa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productstable`
--
ALTER TABLE `productstable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `your_name`
--
ALTER TABLE `your_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `your_table_name`
--
ALTER TABLE `your_table_name`
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
-- AUTO_INCREMENT for table `admin_replies`
--
ALTER TABLE `admin_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin_repliesc`
--
ALTER TABLE `admin_repliesc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `productssofa`
--
ALTER TABLE `productssofa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `productstable`
--
ALTER TABLE `productstable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `your_name`
--
ALTER TABLE `your_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `your_table_name`
--
ALTER TABLE `your_table_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
