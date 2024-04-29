-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 05:09 AM
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
-- Database: `dislink-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `user_id`, `friend_id`, `created_at`) VALUES
(1, 60, 61, '2024-04-28 19:15:01'),
(2, 61, 60, '2024-04-28 21:45:51'),
(3, 61, 63, '2024-04-28 21:46:13'),
(4, 61, 64, '2024-04-28 22:08:37'),
(5, 55, 63, '2024-04-28 22:17:57'),
(6, 55, 74, '2024-04-28 22:18:01'),
(7, 55, 65, '2024-04-28 22:18:03'),
(8, 55, 60, '2024-04-28 22:18:07'),
(9, 55, 66, '2024-04-28 22:24:33'),
(10, 80, 55, '2024-04-29 09:39:55'),
(11, 80, 64, '2024-04-29 09:40:07'),
(12, 80, 65, '2024-04-29 09:40:12'),
(13, 80, 77, '2024-04-29 09:41:40'),
(14, 80, 79, '2024-04-29 09:41:46'),
(15, 80, 63, '2024-04-29 09:41:50'),
(16, 80, 74, '2024-04-29 09:41:53'),
(17, 80, 76, '2024-04-29 09:41:59'),
(18, 81, 79, '2024-04-29 09:44:33'),
(19, 81, 78, '2024-04-29 09:44:35'),
(20, 80, 81, '2024-04-29 09:51:46'),
(21, 80, 61, '2024-04-29 09:57:53'),
(22, 80, 75, '2024-04-29 10:07:47'),
(23, 80, 78, '2024-04-29 10:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `profile_picture`, `password`, `gender`, `date`) VALUES
(55, 'Lawrenz Xavier', 'Carisusa', 'lawrenzxavier22@gmail.com', './Assets/default-profilepicture.png', '$2y$10$g5HXYMJRfOflP7LqoMSUWe18N.mc6LE2IAR0pCbVWtM6k3kHxUPTO', 'Male', '0000-00-00 00:00:00'),
(60, 'LawX', 'Carisusa', 'crmchs.carisusa.lawrenzxavier@gmail.com', './Assets/default-profilepicture.png', '$2y$10$BoGqrkGP2x/Hoo.wg6LU8ejwUCrRaRp29kPtpmjoSt6Ym/yORvjGe', 'Male', '0000-00-00 00:00:00'),
(61, 'Zeke', 'Pelayo', 'Zeke@gmail.com', './Assets/default-profilepicture.png', '$2y$10$GfGbmc3FJU.ikaEHYbl/G.HVFqdGNb1p9GZM/kv9kxQ4Brrj3vZVm', 'Female', '0000-00-00 00:00:00'),
(63, 'Cy', 'Gullem', 'Cy@gmail.com', './Assets/default-profilepicture.png', '$2y$10$ZF1LUuQmTVlIVZexr0viTef8.eiClsZsrgdEKdv4qENTC6fhDqHTO', 'Male', '0000-00-00 00:00:00'),
(64, 'Brent', 'Goden', 'brent@gmail.com', './Assets/default-profilepicture.png', '$2y$10$Wtasl/ledSjj5WinE6swo.DwDssjmislw3jMH2ukGsF9yrUmFgvZi', 'Male', '0000-00-00 00:00:00'),
(65, 'Nico', 'Edisan', 'nico@gmail.com', './Assets/default-profilepicture.png', '$2y$10$zD0MMm2E5x2Ec7rSXxskeewVa5RknUpzEdWlsWIGVas5cCw.lSEOy', 'Male', '0000-00-00 00:00:00'),
(66, 'Dhaniel', 'Malinao', 'dhaniel@gmail.com', './Assets/default-profilepicture.png', '$2y$10$YDgvd9xnZ8cBLFtOCJbIMuzg/JtN3/Fchl5I2vzBE5tDODc3hnnnG', 'Male', '0000-00-00 00:00:00'),
(74, 'Zeke', 'Pelayo', 'Ezekiel@gmail.com', './Assets/default-profilepicture.png\r\n', '$2y$10$qg0sTHjzor6hSjZiI93QMukpgqaVBdQFJQWq5kr5a1C62GM1yxuBe', 'Female', '0000-00-00 00:00:00'),
(75, 'Edison', 'Pagatpat', 'edison@gmail.com', './Assets/default-profilepicture.png\r\n', '$2y$10$P4M9yE3KyVmCPIIMDooy4eu8Y7w9LyjEQq61QX/WrQdoP4CUrnx56', 'Male', '0000-00-00 00:00:00'),
(76, 'Jade', 'Caseda', 'jade@gmail.com', './Assets/default-profilepicture.png\r\n', '$2y$10$PF3WavopRmbgpEBsNhLJSO9ilXer6EU7mCdHZVhUTIJD6UE.U6ZfO', 'Male', '0000-00-00 00:00:00'),
(77, 'Ricky', 'Monsales', 'Ricky@gmail.com', './Assets/default-profilepicture.png\r\n', '$2y$10$aqqzqjaviChh2B7YCDmIY.mFfOtzsn2yhN7LPihBEIz0yKdiDt4NG', 'Male', '0000-00-00 00:00:00'),
(78, 'Franz', 'Dison', 'Franz@gmail.com', './Assets/default-profilepicture.png\r\n', '$2y$10$di3OeQfaHjGYWVVWNjNm4eDlTZD1ULoCh7IO03kQfZkkec2PBKimu', 'Male', '0000-00-00 00:00:00'),
(79, 'Karl', 'Pino', 'karl@gmail.com', './Assets/default-profilepicture.png\r\n', '$2y$10$rxNmBXhH88hIfYILkoNj6uMeLqUT71XRs5d/nD3Qw.zeBjW173wD.', 'Male', '0000-00-00 00:00:00'),
(80, 'Kreemo', 'Alien', 'kreemo@gmail.com', './Assets/default-profilepicture.png', '$2y$10$JyhtwBdJ2s0S3HMeM6E1A.JuQbmXU1U4v8kM0UICHt1HehAFTEx1m', 'Male', '0000-00-00 00:00:00'),
(81, 'Shienamae', 'Migabon', 'shienamae@gmail.com', './Assets/default-profilepicture.png', '$2y$10$K7gP7FCXIWizEKEc89y1V.4nIs65fkK1ysSJBpFi3lz8S.lB9csqW', 'Female', '0000-00-00 00:00:00'),
(82, ' <b>Franz</b>', '\"><script>alert(1)</script>', 'test@gmail.com', './Assets/default-profilepicture.png', '$2y$10$g2jwNvuV9cS27oEem/SLEufipr7m/ib7hkxJpSffKCIk6IHbg/w2i', 'Male', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
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
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
