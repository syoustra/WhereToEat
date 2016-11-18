-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 12:43 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

CREATE TABLE `cuisine` (
  `cuisine_id` bigint(20) UNSIGNED NOT NULL,
  `cuisine` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`cuisine_id`, `cuisine`) VALUES
(1, 'Italian'),
(2, 'Pizza'),
(3, 'Mexican'),
(4, 'Tex-Mex'),
(5, 'Steakhouse'),
(6, 'Sushi'),
(7, 'American'),
(8, 'Pub Fare'),
(9, 'Asian'),
(10, 'Breakfast');

-- --------------------------------------------------------

--
-- Table structure for table `neighborhood`
--

CREATE TABLE `neighborhood` (
  `neighborhood_id` bigint(20) UNSIGNED NOT NULL,
  `neighborhood_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `neighborhood`
--

INSERT INTO `neighborhood` (`neighborhood_id`, `neighborhood_name`) VALUES
(1, 'Highlands'),
(2, 'Germantown'),
(3, 'St. Matthews'),
(4, 'Downtown'),
(5, 'Jeffersontown'),
(6, 'Jeffersonville'),
(7, 'New Albany'),
(8, 'Prospect'),
(9, 'Shively'),
(10, 'Fourth Street'),
(11, 'Fern Valley'),
(12, 'Iroquois'),
(13, 'Original Highlands');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `rest_id` bigint(20) UNSIGNED NOT NULL,
  `rest_name` varchar(40) NOT NULL,
  `neighborhood_id` int(3) NOT NULL,
  `cuisine_id` int(3) NOT NULL,
  `new_to_me` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`rest_id`, `rest_name`, `neighborhood_id`, `cuisine_id`, `new_to_me`) VALUES
(1, 'For Goodness Crepes', 13, 10, 'no'),
(2, 'Simply Thai', 3, 9, 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`cuisine_id`),
  ADD UNIQUE KEY `cuisine_id` (`cuisine_id`);

--
-- Indexes for table `neighborhood`
--
ALTER TABLE `neighborhood`
  ADD PRIMARY KEY (`neighborhood_id`),
  ADD UNIQUE KEY `neighborhood_id` (`neighborhood_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`rest_id`),
  ADD UNIQUE KEY `rest_id` (`rest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuisine`
--
ALTER TABLE `cuisine`
  MODIFY `cuisine_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `neighborhood`
--
ALTER TABLE `neighborhood`
  MODIFY `neighborhood_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `rest_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
