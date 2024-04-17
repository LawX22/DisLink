-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 02:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dislink-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(1024) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `image`, `password`, `gender`, `date`) VALUES
(6, 'John', 'Bates', 'email@email.com', 'uploads/1662232332user.jpg', '$2y$10$PUh/h0Exbs1GY/6o5CsbauwyImZPwVJ6AH0aLTDOlJzncIJVWi386', 'Male', '2022-09-03 21:12:12'),
(7, 'Mary', 'Bates', 'mary@email.com', 'uploads/1662232388alicia-keys.jpg', '$2y$10$Q7c1b7rYlQ2nc9Jw.RWDAeL69f7zMy5y9UYx4wNUj7OSS64yT0KBm', 'Female', '2022-09-03 21:13:08'),
(9, 'Jane', 'Doe', 'jane@email.com', 'uploads/1662233918pexels-photo-3756774.jpeg', '$2y$10$DhrdIIPD7hgJDvJAjNeFieLQU2M05yEPES2lJbJhARUU./ATsRzwW', 'Female', '2022-09-03 21:38:38'),
(55, 'Lawrenz Xavier', 'Carisusa', 'lawrenzxavier22@gmail.com', NULL, '$2y$10$g5HXYMJRfOflP7LqoMSUWe18N.mc6LE2IAR0pCbVWtM6k3kHxUPTO', 'Male', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `email` (`email`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
