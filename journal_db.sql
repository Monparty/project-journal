-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 07:10 PM
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
-- Database: `journal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `day` varchar(2) DEFAULT NULL,
  `mood` varchar(2) DEFAULT NULL,
  `thoughts` varchar(255) DEFAULT NULL,
  `maExercise` varchar(255) DEFAULT NULL,
  `maMindfulness` varchar(255) DEFAULT NULL,
  `maHydration` varchar(255) DEFAULT NULL,
  `maRelationship` varchar(255) DEFAULT NULL,
  `yesterdayBestPart` varchar(255) DEFAULT NULL,
  `dailyAdviceQuote` varchar(255) DEFAULT NULL,
  `todayGratefulFor` varchar(255) DEFAULT NULL,
  `rmlSellove` varchar(2) DEFAULT NULL,
  `rmlConfident` varchar(2) DEFAULT NULL,
  `rmlRelationship` varchar(2) DEFAULT NULL,
  `rmlCareer` varchar(2) DEFAULT NULL,
  `rmlMindfulness` varchar(2) DEFAULT NULL,
  `rmlHeath` varchar(2) DEFAULT NULL,
  `rmlCreativity` varchar(2) DEFAULT NULL,
  `rmlFinance` varchar(2) DEFAULT NULL,
  `howCanImprove` varchar(255) DEFAULT NULL,
  `todaySchedule` varchar(255) DEFAULT NULL,
  `dctSmallGoals` varchar(255) DEFAULT NULL,
  `dctBigGoals` varchar(255) DEFAULT NULL,
  `ideasToGoals` varchar(255) DEFAULT NULL,
  `thinkOutside` varchar(255) DEFAULT NULL,
  `createAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
