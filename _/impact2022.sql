-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 04, 2022 at 02:21 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impact2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `lead_2022`
--

CREATE TABLE `lead_2022` (
  `id` int NOT NULL,
  `Sname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `attend` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `avail` varchar(255) NOT NULL,
  `has_checked_in` tinyint(1) NOT NULL DEFAULT '0',
  `date_checked_in` datetime DEFAULT CURRENT_TIMESTAMP,
  `checked_in_officer` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lead_2022`
--

INSERT INTO `lead_2022` (`id`, `Sname`, `name`, `email`, `phone`, `address`, `lga`, `state`, `attend`, `country`, `avail`, `has_checked_in`, `date_checked_in`, `checked_in_officer`) VALUES
(4551, 'John', 'Samuel', 'sam4real02@gmail.com', '+2348130609628', '66 Unity road', '', 'Lagos', '30-39', 'Nigeria', 'Male', 0, NULL, NULL),
(4552, 'John', 'Samuel', 'dclmict@gmail.com', '0813 060 9628', '66 Unity road', '', 'Lagos', '30-39', 'Nigeria', 'Male', 0, NULL, NULL),
(4553, 'John', 'Samuel', 'ope@gg.com', '08234590341', '66 Unity road', '', 'Lagos', '13-18', 'Afganistan', 'Male', 0, '2022-01-02 21:59:41', NULL),
(4554, 'John', 'Samuel', 'ope@gq.com', '09034201239', '77 Holiness road', '', 'Lagos', '30-39', 'Afganistan', 'Male', 0, '2022-01-03 09:44:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lead_2022`
--
ALTER TABLE `lead_2022`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lead_2022`
--
ALTER TABLE `lead_2022`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4555;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
