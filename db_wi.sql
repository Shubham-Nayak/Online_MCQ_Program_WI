-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 02:09 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wi`
--

-- --------------------------------------------------------

--
-- Table structure for table `commonmaster`
--

CREATE TABLE `commonmaster` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `choice_one` varchar(100) NOT NULL,
  `choice_two` varchar(100) NOT NULL,
  `choice_three` varchar(100) NOT NULL,
  `choice_four` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commonmaster`
--

INSERT INTO `commonmaster` (`id`, `question`, `choice_one`, `choice_two`, `choice_three`, `choice_four`) VALUES
(1, 'What Is Api Full Form ?', 'Apliation Programable Intigration', 'Aplication Perfoms Implimention', 'Aplication  Program Interface ', 'None Of This'),
(2, 'what is wp full form ?', 'wordpress', 'width program', 'whats app', 'none of the above ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commonmaster`
--
ALTER TABLE `commonmaster`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commonmaster`
--
ALTER TABLE `commonmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
