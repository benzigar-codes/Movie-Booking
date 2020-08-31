-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2019 at 04:16 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookedseats`
--

CREATE TABLE `bookedseats` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `seat` int(11) NOT NULL,
  `date` date NOT NULL,
  `showtime` varchar(30) NOT NULL,
  `theatre` varchar(30) NOT NULL,
  `movie` varchar(30) NOT NULL,
  `bookid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theatredetails`
--

CREATE TABLE `theatredetails` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `seats` int(11) NOT NULL,
  `movie` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatredetails`
--

INSERT INTO `theatredetails` (`id`, `name`, `seats`, `movie`, `image`, `location`) VALUES
(1, 'Anand', 400, 'Comali', '5d713c7008079.jpg', 'Marthandam'),
(2, 'Thameens', 400, 'Lion king', '5d713c7a652a8.jpg', 'Kaliyakavilai'),
(3, 'I.M.P', 400, 'Angry Birds 2', '5d713c871e524.jpg', 'Padanthaalumoodu'),
(4, 'Laskshmi', 300, 'Saaho', '5d713c9277b22.jpg', 'Kuzhithurai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookedseats`
--
ALTER TABLE `bookedseats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theatredetails`
--
ALTER TABLE `theatredetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookedseats`
--
ALTER TABLE `bookedseats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theatredetails`
--
ALTER TABLE `theatredetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
