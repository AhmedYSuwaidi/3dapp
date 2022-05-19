-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 08:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3d_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `created_at`) VALUES
(4, 'diet coke', 'Diet Coke is not based on the Coca-Cola formula, but instead on Tab[citation needed]. The controversial New Coke, introduced in 1985, used a version of the Diet Coke recipe that contained high-fructose corn syrup and had a slightly different balance of ingredients. In 2005, the company introduced Coca-Cola Zero (renamed Coca-Cola Zero Sugar in 2017), a sugar-free formula more closely based on original Coca-Cola.', '2022-05-19'),
(5, 'sprite can', 'In 1993, marketing agency Lowe and Partners created a new slogan, \"Control your thirst\" with commission from The Coca-Cola Company.[4] The new, more vibrant logo stood out more on packaging and featured a blue-to-green gradient with silver \"splashes\" and subtle white \"bubbles\" in the background. The product name, \"Sprite\" had a logo with a blue backdrop shadow. The words; \"Great Lymon Taste!\" which had been present on the previous logo, were removed. This logo was used in the United States until 2006, and similar variants were used in other countries until this year as well.', '2022-05-19'),
(7, 'Fanta Coconut', 'Fanta is a brand of fruit-flavored carbonated soft drinks created by Coca-Cola Deutschland under the leadership of German businessman Max Keith. There are more than 200 flavors worldwide. Fanta originated in Germany as a Coca-Cola substitute in 1940 due to the American trade embargo of Nazi Germany which affected the availability of Coca-Cola ingredients. Fanta soon dominated the German market with three million cans sold in 1943. The current formulation of Fanta was developed in Italy in 1955.', '2022-05-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
