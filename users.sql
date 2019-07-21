-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 09:29 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emailaddress` varchar(250) NOT NULL,
  `age` int(250) NOT NULL,
  `location` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `emailaddress`, `age`, `location`, `date`) VALUES
(1, 'Richard', 'Hendricks', '', 'richard@piedpiper.com', 21, 'Silicon Valley', '2018-04-21'),
(2, 'Bertram', 'Gilfoyle', '', 'gilfoyle@piedpiper.com', 34, 'Silicon Valley', '2018-04-21'),
(3, 'Dinesh', 'Chugtai', '', 'dinesh@piedpiper.com', 33, 'Silicon Valley', '2018-04-21'),
(4, 'Dinesh', 'Chugtai', '', 'dinesh@piedpiper.com', 33, 'Silicon Valley', '2018-04-21'),
(5, 'Edwin', 'diaz', '', 'diaz@1.com', 31, 'Silicon Valley', '2011-12-18'),
(19, 'SHEEZA', 'TARIQ', '', 'Sheeza11@gmaill.com', 22, 'lahore', '2017-07-19'),
(20, 'talha', 'tariq', '', 'talha12@gmail.com', 19, 'karachi', '2012-09-19'),
(21, 'Iqra', 'aziz', '', 'iqra@yahoo.com', 21, 'lahore', '0000-00-00'),
(22, 'edwin', 'diaz', '12345', 'edwin@gmail.com', 31, 'Silicon Valley', '2020-07-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
