-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 06:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject01`
--

-- --------------------------------------------------------

--
-- Table structure for table `preflang`
--

CREATE TABLE `preflang` (
  `langid` int(11) NOT NULL,
  `langtext` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preflang`
--

INSERT INTO `preflang` (`langid`, `langtext`) VALUES
(1, 'C#'),
(2, 'Java'),
(3, 'Python'),
(4, 'HTML'),
(5, 'Javascript'),
(6, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `preftime`
--

CREATE TABLE `preftime` (
  `timeid` int(11) NOT NULL,
  `timetext` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preftime`
--

INSERT INTO `preftime` (`timeid`, `timetext`) VALUES
(1, 'Morning'),
(2, 'Afternoon'),
(3, 'Evening'),
(4, 'Night');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `timepref` int(11) NOT NULL,
  `langpref` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `timepref`, `langpref`) VALUES
(1, 'a', 'b@gmail.com', 'a', '$2y$10$4.C.q893urmDzO.YFUzYZez0Ak1t9n3yIV5DDwZjKCNikt8cmmQ5G', 0, 1),
(2, 'aaaa', 'a@touro.edu', 'aaaa', '$2y$10$0nzRqpKGykfAgdztPGcs.OUgVEtvrK8BCdwtL/Drk7W52Xhsr.Daq', 0, 3),
(3, 'a2', 'c@gmail.com', 'abc2', '$2y$10$sbXJqpwWfMtlV41jF81yTOB2TzOkCbO3JHy6AQ2Ugdsmi.69xQaXO', 1, 2),
(4, 'a2d', 'cs@gmail.com', 'abc2s', '$2y$10$Eh4jVFOVuLlRDg1WYZ2kiepWYVaS6BWOVglC1oDAkntFm5cYLsYRm', 1, 2),
(5, 'Chaya Tanenbaum', 'chayatanenbaum@gmail.com', 'chaya tanenbaum', '$2y$10$gFfvLiQbGi5YcS0z0fsJ2Ocb.1ufKhZuS..dLVLeAUlaRg9U9h6YG', 1, 1),
(6, 'q', 'q@gmail.com', 'qq', '$2y$10$ro981a4r2bWYXjutv1db0uVF0v3ZtnGJZjbkm4syezT5RmQbkYLYO', 1, 1),
(7, 'aa', 'aa@gmail.com', 'aaa', '$2y$10$z9OvgdRs67wdkSe3EyV6vuAD0ibeb2nLr4rXGFPMdSe07WyLMSiLG', 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preflang`
--
ALTER TABLE `preflang`
  ADD PRIMARY KEY (`langid`);

--
-- Indexes for table `preftime`
--
ALTER TABLE `preftime`
  ADD PRIMARY KEY (`timeid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preflang`
--
ALTER TABLE `preflang`
  MODIFY `langid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `preftime`
--
ALTER TABLE `preftime`
  MODIFY `timeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
