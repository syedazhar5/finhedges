-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 07:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finhedges`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `name`, `contact`, `email`, `password`) VALUES
(1, '', 0, '', ''),
(2, 'Syed Azhar', 2147483647, 'rockwithazhar@g', '12345'),
(3, 'Syed Azhar', 484848484, 'azhar@gmail.com', '123456'),
(4, 'Syed Azhar', 484848484, 'azhar@gmail.com', '123456'),
(5, 'Syed Azhar', 484848484, 'azhar@gmail.com', '123456'),
(6, 'Syed Azhar', 484848484, 'azhar@gmail.com', '123456'),
(7, 'Nagsen', 2147483647, 'nagsen@gmail.co', '1213456'),
(8, 'Nagsen', 2147483647, 'nagsen@gmail.co', '1213456'),
(9, 'Nagsen', 2147483647, 'nagsen@gmail.co', '1213456'),
(10, 'Nagsen', 2147483647, 'nagsen@gmail.co', '1213456'),
(11, 'Nagsen', 2147483647, 'nagsen@gmail.co', '1213456'),
(12, 'Nagsen', 2147483647, 'nagsen@gmail.co', '1213456'),
(13, 'Nagsen', 2147483647, 'nagsen@gmail.co', '1213456'),
(14, 'Nagsen', 2147483647, 'nagsen@gmail.co', '123456'),
(15, 'Nagsen', 123456789, 'azhar@gmail.com', '1234567890'),
(16, 'Nagsen', 123456789, 'azhar@gmail.com', '1234567890'),
(17, 'Nagsen', 123456789, 'azhar@gmail.com', '1234567890'),
(18, 'Nagsen', 78945612, 'azhar@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
