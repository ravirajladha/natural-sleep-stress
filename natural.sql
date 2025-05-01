-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2025 at 10:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natural`
--

-- --------------------------------------------------------

--
-- Table structure for table `sleep`
--

CREATE TABLE `sleep` (
  `test_id` int(11) NOT NULL,
  `question` varchar(200) DEFAULT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sleep`
--

INSERT INTO `sleep` (`test_id`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 'Total sleep duration', 'Sufficient', 'Slightly Insufficient', 'Markedly Insufficient ', 'Very Insufficient'),
(2, 'Overall quality of sleep', 'Sufficient', 'Slightly Insufficient', 'Markedly Insufficient ', 'Very Insufficient'),
(3, 'Sense of well-being during the day', 'Sufficient', 'Slightly Insufficient', 'Markedly Insufficient ', 'Very Insufficient'),
(4, 'Functioning (physical and mental) during the day', 'Sufficient', 'Slightly Insufficient', 'Markedly Insufficient ', 'Very Insufficient'),
(5, 'Sleepiness during the day', 'None', 'Mild', 'Considerable', 'Intense');

-- --------------------------------------------------------

--
-- Table structure for table `stress`
--

CREATE TABLE `stress` (
  `test_id` int(11) NOT NULL,
  `question` varchar(200) DEFAULT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `option5` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `stress`
--

INSERT INTO `stress` (`test_id`, `question`, `option1`, `option2`, `option3`, `option4`, `option5`) VALUES
(1, 'In the last month, how often have you been upset because of\r\nsomething that happened unexpectedly?', 'Never', 'Almost Never', 'Sometimes', 'Fairly Often', 'Very Often'),
(2, 'In the last month, how often have you felt nervous and “stressed”?', 'Never', 'Almost Never', 'Sometimes', 'Fairly Often', 'Very Often'),
(3, 'In the last month, how often have you found that you could not cope with all the things that you had to do?', 'Never', 'Almost Never', 'Sometimes', 'Fairly Often', 'Very Often'),
(4, 'In the last month, how often have you been angered because of\r\nthings that were outside of your control?', 'Never', 'Almost Never', 'Sometimes', 'Fairly Often', 'Very Often'),
(5, 'In the last month, how often have you felt difficulties were piling up so high that you could not overcome them?', 'Never', 'Almost Never', 'Sometimes', 'Fairly Often', 'Very Often');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sleep`
--
ALTER TABLE `sleep`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `stress`
--
ALTER TABLE `stress`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sleep`
--
ALTER TABLE `sleep`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stress`
--
ALTER TABLE `stress`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
