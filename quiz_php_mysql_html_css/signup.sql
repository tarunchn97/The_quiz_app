-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 11:21 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_oops`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`, `img`) VALUES
(1, 'man', 'whwer@ismydata.com', 'here', 'C:xampp	mpphpF0D3.tmp'),
(2, 'tarun', 'abc@xyz.com', 'ter', 'C:xampp	mpphp4C4.tmp'),
(3, 'terwb', 'terwb@hgw.com', 'terewq', 'smartmockups_knmzh1yu.png'),
(4, 'nawab', 'nawab@nab.com', 'werqas', 'smartmockups_knmwzl9h.png'),
(5, 'senaj', 'senaj@nawab.com', 'wesaq', 'music-bg.jpg'),
(6, 'senaj', 'senaj@nawab.com', 'wesaq', 'music-bg.jpg'),
(7, 'klan', 'hkbb@kjbscak', 'jdckj', 'pexels-sound-on-3756939.jpg'),
(8, 'abv', 'rft@havv', 'twe', 'bg-entertainment.jpg'),
(9, 'yogesh', 'yogesh@mail', 'yogesh', 'finl-bg.jpg'),
(10, 'twer', 'twer@34', '34', 'gift-coupon.jpg'),
(11, 'yup', 'yup@er', '2345', 'smartmockups_knmwzl9h.png'),
(12, 'bijender', 'bijender@123', '123', 'gift-coupon-nobg.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
