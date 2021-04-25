-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 11:22 AM
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans 1` varchar(100) NOT NULL,
  `ans 2` varchar(100) NOT NULL,
  `ans 3` varchar(100) NOT NULL,
  `ans 4` varchar(100) NOT NULL,
  `ans` int(10) NOT NULL,
  `cat_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans 1`, `ans 2`, `ans 3`, `ans 4`, `ans`, `cat_id`) VALUES
(1, 'What does PHP stand for?', 'php- hypertext preprocessor', 'adjective', 'hypertension', 'hypermetropia', 0, 1),
(4, 'what does echo did in php', 'print the string', 'display in console', 'append string', 'print out value on screen', 3, 1),
(6, 'In php variables define with.', 'var', 'int', '$', 'const', 2, 1),
(7, 'php starts with tag?', 'p', '?', '<>', '<?', 3, 1),
(8, 'which of these are php end tag?', '>', '?>', '?!', '?/>', 1, 1),
(9, 'php is a ___________ language?', 'user side', 'client side', 'server side', 'both b & c', 2, 1),
(10, 'In which year php was created?', '1993', '1994', '1995', '1996', 1, 1),
(16, 'php files have default file extension of?', '.php', '.html', '.xp', '.hphp', 0, 1),
(17, 'which of the following is the latest version of php?', '7.1', '7.2', '7.3', '7.4', 1, 1),
(18, 'which function is user to print \"hello\" on the screen in php?', 'print', 'prompt', 'console.log', 'echo', 3, 1),
(22, 'Mysql is a.', 'language', 'database', 'crm', 'scripting language', 1, 2),
(24, 'character can be stored as ________ in mysql?', 'fixed length string', 'variable length tring', 'both a & B', 'None of the above', 2, 2),
(25, 'max length of char columns is ', '255', '564', '80642', 'none of the above', 0, 2),
(26, 'character can be stored as ________ in mysql?', 'fixed length string', 'variable length tring', 'both a & B', 'None of the above', 2, 2),
(27, 'max length of char columns is ', '255', '564', '80642', 'none of the above', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
