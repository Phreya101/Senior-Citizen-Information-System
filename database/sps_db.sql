-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 01:18 PM
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
-- Database: `sps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `number` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `sid`, `number`) VALUES
(1, '0', 895874564),
(2, 'ASCTZ-65c521cbe4be3', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `senior`
--

CREATE TABLE `senior` (
  `id` varchar(250) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `bday` date DEFAULT NULL,
  `age` varchar(50) NOT NULL,
  `bplace` varchar(250) NOT NULL,
  `addr` varchar(250) NOT NULL,
  `cnum` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `econ` varchar(50) NOT NULL,
  `eaddr` varchar(250) NOT NULL,
  `btype` varchar(10) NOT NULL,
  `hprob` varchar(250) DEFAULT NULL,
  `disability` varchar(250) DEFAULT NULL,
  `educ` varchar(60) NOT NULL,
  `skill` varchar(250) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `senior`
--

INSERT INTO `senior` (`id`, `fname`, `mname`, `lname`, `sex`, `bday`, `age`, `bplace`, `addr`, `cnum`, `email`, `econ`, `eaddr`, `btype`, `hprob`, `disability`, `educ`, `skill`, `status`) VALUES
('SNR-65c521cbe4be3', 'John', 'Pit', 'Smith', 'Male', '1956-05-12', '67', 'Aparri Christian Hospital', '        Maura, Aparri, Cagayan ', '09561234585', 'example@gmail.com', '09542558668', 'Maura, Aparri, Cagayan', 'B+', '', '', 'College Level', 'technology', 'active'),
('SNR-65da9ec5b2a38', 'Jonny', 'Smith', 'Doe', 'Female', '1923-02-05', '89', 'Minanga, Aparri, Cagayan', '        Minanga, Aparri, Cagayan', '09568452895', 'example@gmail.com', '09568425896', 'Minanga, Aparri, Cagayan', 'B+', '', '', 'Post Graduate', 'Accountancy', 'active'),
('SNR-65dbcca180769', 'h', 'h', 'h', 'Male', '0000-00-00', '42', 'hb', 'g', 'g', 'g@gmail.com', 'g', 'g', 'Unknown', 'h', 'h', 'Highschool Level', 'h', 'deleted'),
('SNR-65dbcd205e8fd', 'f', 'f', 'j', 'Male', '0054-05-21', '5454', 'h', 'h', 'h', 'h@gmail.com', 'hh', 'h', 'O+', 'y', 'y', 'Elementary Level', 'h', 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `num` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `num`, `uname`, `pass`, `cover`, `status`) VALUES
(2, 'John Doe', '09568375859', 'admin', 'admin123', '', 'active'),
(3, 'John Smith', '09256284561', 'smith', 'admin2', '', 'active'),
(8, 'try', 'try', 'try', 'try', '', 'deleted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senior`
--
ALTER TABLE `senior`
  ADD PRIMARY KEY (`id`(50));

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
