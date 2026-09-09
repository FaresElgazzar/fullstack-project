-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2026 at 03:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstackproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `image`, `name`, `description`, `category`, `price`) VALUES
(1, 'images/pizzaBbq.jpg', 'BBQ Lovers', 'A Delicious Pizza With Tasty BBQ Sauce', 'pizza', 199),
(2, 'images/ranchPizza.jpg', 'Ranchi Pizza', 'Drenched In Our Ranch Sauce, That\'s How We Serve Our Ranchi Pizza!', 'pizza', 189),
(3, 'images/cheeseLovers.jpg', 'Cheesey Lovers', 'Just Cheese...A lot of it...seriously', 'pizza', 169),
(4, 'images/OGburger.jpg', 'OG Burger', 'Nothing Beats a Good Old Traditional Beef Burger', 'burger', 99),
(5, 'images/NashvilleBR.jpg', 'Nashville Burger', 'Extra-Crispy Fried Chicken Dipped In a Fiery Spiced Oil, Served In A Soft Bun With Cool Pickles', 'burger', 119),
(6, 'images/chickenBBQbr.jpg', 'Chicken BBQ Burger', 'Golden Chicken Topped with BBQ Sauce Along with Onion Rings, Bacon And Cheddar Cheese', 'burger', 129),
(7, 'images/vcola.jpg', 'V Cola', 'Refreshing!', 'drinks', 20),
(8, 'images/water.jpg', 'Water', 'Healthier?', 'drinks', 10),
(9, 'images/vlimonlime.jpg', 'V Lemon-Lime', 'Lemonade', 'drinks', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
