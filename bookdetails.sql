-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 06:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE `bookdetails` (
  `id` int(11) NOT NULL,
  `bookcode` int(11) NOT NULL,
  `booktitle` varchar(30) NOT NULL,
  `author` varchar(15) NOT NULL,
  `description` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `publisher` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`id`, `bookcode`, `booktitle`, `author`, `description`, `price`, `publisher`) VALUES
(1, 10, 'AADU JEEVITHAM', 'BENNYAMIN', 'STORY', 1750, 'DC BOOKS'),
(2, 20, 'RANDAM OOZHAM', 'MT VASUDEVAN NA', 'HISTORICAL STORY', 1110, 'DC BOOKS'),
(3, 30, 'BALYAKALASAKHI', 'VAIKOM MUHAMMED', 'STORY', 1000, 'DC BOOKS'),
(4, 40, 'ENTE KADHA', 'KAMALA  SURYYA', 'AUTOBIOGRAPHY', 2500, 'CURRENT BOOK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookdetails`
--
ALTER TABLE `bookdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookdetails`
--
ALTER TABLE `bookdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
