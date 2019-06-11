-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 09:47 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit1`
--

CREATE TABLE `credit1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit1`
--

INSERT INTO `credit1` (`id`, `name`, `email`, `total`) VALUES
(1, 'sarthak jain', 'sarthak@gmail.com', 100),
(2, 'Mohan', 'mohan@gmail.com', 623),
(3, 'Sohan', 'sohan@gmail.com', 1076),
(4, 'Rishabh', 'rishabh@gmail.com', 3100),
(5, 'Abhishek', 'abhishek@gmail.com', 1106);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit1`
--
ALTER TABLE `credit1`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
