-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2026 at 05:14 AM
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
-- Database: `agroassist_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisories`
--

CREATE TABLE `advisories` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `read_time` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advisories`
--

INSERT INTO `advisories` (`id`, `title`, `category`, `description`, `image`, `read_time`, `created_at`) VALUES
(1, 'Organic Solutions for Aphid Control', 'Pest Management', 'Discover how natural predators and neem sprays can protect crops.', 'aphid.jpg', '5 min read', '2026-03-11 17:16:45'),
(2, 'The Secret of Crop Rotation', 'Soil Health', 'A beginner guide to maintaining nitrogen levels through crop rotation.', 'soil.jpg', '8 min read', '2026-03-11 17:16:45'),
(3, 'Low-Cost Drip Irrigation Setup', 'Techniques', 'Build a reliable irrigation system using recycled materials.', 'irrigation.jpg', '12 min read', '2026-03-11 17:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `crops_market`
--

CREATE TABLE `crops_market` (
  `id` int(11) NOT NULL,
  `crop_name` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `market_location` varchar(100) DEFAULT NULL,
  `price_change` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crops_market`
--

INSERT INTO `crops_market` (`id`, `crop_name`, `category`, `price`, `market_location`, `price_change`, `updated_at`) VALUES
(1, 'White Maize', 'Grains', 25.50, 'Central Market', '+2.4%', '2026-03-11 15:42:45'),
(2, 'Long Grain Rice', 'Cereals', 42.00, 'Northern Plaza', '-1.2%', '2026-03-11 15:42:45'),
(3, 'Red Tomatoes', 'Vegetables', 12.00, 'City Terminal', 'Stable', '2026-03-11 15:42:45'),
(4, 'Soybeans', 'Legumes', 38.50, 'Riverside Hub', '+5.0%', '2026-03-11 15:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `crop_type` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `member_since` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `full_name`, `email`, `phone`, `location`, `crop_type`, `password`, `member_since`) VALUES
(1, 'Sakwe Joris Eboka', 'sakwejoris3@gmail.com', '+237675093651', 'Buea, Fako, Sud-Ouest, CMR', 'rice', '$2y$10$84kflVCIfE0WiijlZkWdYeTeK7z79ENxLbbItU0Ehp5r10zBN3PoS', NULL),
(2, 'Le pro', 'lepro@gmail.com', '56563563', 'yAOUNDE', 'wheat', '$2y$10$Rp.0UnLRVFoEK6aCH9Lg5uLDCzGtIOlrPw3KhjjLbbE5GoVxI1fHy', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `market_prices`
--

CREATE TABLE `market_prices` (
  `id` int(11) NOT NULL,
  `crop_name` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `change_percent` decimal(5,2) DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `market_rates`
--

CREATE TABLE `market_rates` (
  `id` int(11) NOT NULL,
  `crop_name` varchar(100) DEFAULT NULL,
  `market_location` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `price_change` varchar(10) DEFAULT NULL,
  `last_updated` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `market_rates`
--

INSERT INTO `market_rates` (`id`, `crop_name`, `market_location`, `price`, `unit`, `price_change`, `last_updated`) VALUES
(1, 'Yellow Maize', 'Central Market Nairobi', 3200.00, 'per 90kg bag', '+4.2%', '15 minutes'),
(2, 'Red Tomatoes', 'Mombasa Port Market', 150.00, 'per kg', '-2.8%', '1 hour'),
(3, 'Soya Beans', 'Eldoret Wholesale', 4800.00, 'per 90kg bag', '+1.5%', '3 hours'),
(4, 'Hass Avocado', 'Thika Regional Hub', 45.00, 'per piece', '0%', '5 hours');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `crop_type` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('farmer','admin') DEFAULT 'farmer',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisories`
--
ALTER TABLE `advisories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crops_market`
--
ALTER TABLE `crops_market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_prices`
--
ALTER TABLE `market_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_rates`
--
ALTER TABLE `market_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisories`
--
ALTER TABLE `advisories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crops_market`
--
ALTER TABLE `crops_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `market_prices`
--
ALTER TABLE `market_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market_rates`
--
ALTER TABLE `market_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
