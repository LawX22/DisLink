-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 04:32 PM
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `post_id`, `user_id`, `comment_text`, `date_created`) VALUES
(7, 55, 55, 'eyyyyy fire bro', '2024-05-09 11:10:16'),
(9, 10, 80, 'sksdkfksf', '2024-05-10 12:48:43'),
(10, 41, 75, 'ndcmnzc', '2024-05-10 12:49:19'),
(11, 16, 63, 'bro what happened', '2024-05-10 13:21:03'),
(12, 15, 55, 'deym bro', '2024-05-10 13:23:19'),
(15, 34, 63, 'deym brocd', '2024-05-10 13:25:18'),
(17, 39, 55, 'welcome to earth', '2024-05-10 14:14:03'),
(18, 39, 75, 'nigga', '2024-05-10 13:56:40'),
(19, 16, 75, 'deym bro', '2024-05-10 13:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `my_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `my_id`, `friend_id`, `created_at`) VALUES
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
(23, 80, 78, '2024-04-29 10:34:10'),
(24, 55, 80, '2024-04-29 22:28:22'),
(25, 80, 66, '2024-04-29 23:02:02'),
(26, 55, 79, '2024-05-01 09:14:47'),
(27, 55, 76, '2024-05-01 09:14:50'),
(28, 55, 61, '2024-05-01 09:14:53'),
(29, 55, 75, '2024-05-01 09:44:49'),
(30, 55, 64, '2024-05-01 10:08:31'),
(31, 63, 81, '2024-05-01 11:15:06'),
(32, 63, 80, '2024-05-01 11:24:55'),
(33, 63, 79, '2024-05-01 11:39:47'),
(34, 55, 77, '2024-05-01 11:47:58'),
(35, 55, 78, '2024-05-01 11:54:28'),
(36, 63, 64, '2024-05-01 11:56:49'),
(37, 63, 78, '2024-05-01 11:57:52'),
(38, 80, 60, '2024-05-01 17:31:05'),
(39, 80, 83, '2024-05-06 21:04:42'),
(40, 55, 83, '2024-05-09 18:59:59'),
(41, 75, 80, '2024-05-10 20:49:04'),
(42, 63, 55, '2024-05-10 21:20:43'),
(43, 63, 75, '2024-05-10 21:24:54'),
(44, 75, 55, '2024-05-10 21:56:45'),
(45, 75, 79, '2024-05-10 22:29:11'),
(46, 75, 61, '2024-05-10 22:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `content`, `image`, `created_at`) VALUES
(14, 55, 'cdz', './uploads/1714917325_Screenshot (8).png', '2024-05-10 13:22:17'),
(15, 63, '', './uploads/1714917609_Screenshot (22).png', '2024-05-05 14:00:09'),
(16, 55, 'First Day in Prison #crminal #mugshot #stayhard', './uploads/1714919291_Screenshot (9).png', '2024-05-05 14:28:11'),
(26, 55, 'xsdasdaddsffsg', '', '2024-05-06 13:39:50'),
(27, 55, 'dsadasd', '', '2024-05-06 14:04:44'),
(28, 55, 'Check My Mansion', './uploads/1715004301_Screenshot (1).png', '2024-05-06 14:05:01'),
(34, 75, 'v mx vcmnv', '', '2024-05-10 12:49:28'),
(39, 80, 'yow wassup earthlings dsf', '', '2024-05-10 13:45:10'),
(41, 55, 'wabalu', '', '2024-05-10 13:55:31'),
(44, 75, 'bro what\'s on your mind', './uploads/1715351346_441283014_480573550970379_779293286563168443_n.png', '2024-05-10 14:29:29');

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
(55, 'Lawrenz  Xavier', 'Carisusa', 'lawrenzxavier22@gmail.com', './Assets/YENZ.png', '$2y$10$g5HXYMJRfOflP7LqoMSUWe18N.mc6LE2IAR0pCbVWtM6k3kHxUPTO', 'Male', '0000-00-00 00:00:00'),
(60, 'LawX', 'Carisusa', 'crmchs.carisusa.lawrenzxavier@gmail.com', './Assets/default-profilepicture.png', '$2y$10$BoGqrkGP2x/Hoo.wg6LU8ejwUCrRaRp29kPtpmjoSt6Ym/yORvjGe', 'Male', '0000-00-00 00:00:00'),
(61, 'Zeke', 'Pelayo', 'Zeke@gmail.com', './Assets/zeke.png', '$2y$10$GfGbmc3FJU.ikaEHYbl/G.HVFqdGNb1p9GZM/kv9kxQ4Brrj3vZVm', 'Female', '0000-00-00 00:00:00'),
(63, 'Cy', 'Gullem', 'Cy@gmail.com', './Assets/default-profilepicture.png', '$2y$10$ZF1LUuQmTVlIVZexr0viTef8.eiClsZsrgdEKdv4qENTC6fhDqHTO', 'Male', '0000-00-00 00:00:00'),
(64, 'Brent', 'Goden', 'brent@gmail.com', './Assets/default-profilepicture.png', '$2y$10$Wtasl/ledSjj5WinE6swo.DwDssjmislw3jMH2ukGsF9yrUmFgvZi', 'Male', '0000-00-00 00:00:00'),
(65, 'Nico', 'Edisan', 'nico@gmail.com', './Assets/default-profilepicture.png', '$2y$10$zD0MMm2E5x2Ec7rSXxskeewVa5RknUpzEdWlsWIGVas5cCw.lSEOy', 'Male', '0000-00-00 00:00:00'),
(66, 'Dhaniel', 'Malinao', 'dhaniel@gmail.com', './Assets/default-profilepicture.png', '$2y$10$YDgvd9xnZ8cBLFtOCJbIMuzg/JtN3/Fchl5I2vzBE5tDODc3hnnnG', 'Male', '0000-00-00 00:00:00'),
(74, 'Zeke', 'Pelayo', 'Ezekiel@gmail.com', './Assets/default-profilepicture.png\r\n', '$2y$10$qg0sTHjzor6hSjZiI93QMukpgqaVBdQFJQWq5kr5a1C62GM1yxuBe', 'Female', '0000-00-00 00:00:00'),
(75, 'Edison', 'Pagatpat', 'edison@gmail.com', './Assets/edison.jpg\r\n', '$2y$10$P4M9yE3KyVmCPIIMDooy4eu8Y7w9LyjEQq61QX/WrQdoP4CUrnx56', 'Male', '0000-00-00 00:00:00'),
(76, 'Jade', 'Caseda', 'jade@gmail.com', './Assets/default-profilepicture.png\r\n', '$2y$10$PF3WavopRmbgpEBsNhLJSO9ilXer6EU7mCdHZVhUTIJD6UE.U6ZfO', 'Male', '0000-00-00 00:00:00'),
(77, 'Ricky', 'Monsales', 'Ricky@gmail.com', './Assets/default-profilepicture.png\r\n', '$2y$10$aqqzqjaviChh2B7YCDmIY.mFfOtzsn2yhN7LPihBEIz0yKdiDt4NG', 'Male', '0000-00-00 00:00:00'),
(78, 'Franz', 'Dison', 'Franz@gmail.com', './Assets/default-profilepicture.png\r\n', '$2y$10$di3OeQfaHjGYWVVWNjNm4eDlTZD1ULoCh7IO03kQfZkkec2PBKimu', 'Male', '0000-00-00 00:00:00'),
(79, 'Karl', 'Pino', 'karl@gmail.com', './Assets/karl.jpg\r\n', '$2y$10$rxNmBXhH88hIfYILkoNj6uMeLqUT71XRs5d/nD3Qw.zeBjW173wD.', 'Male', '0000-00-00 00:00:00'),
(80, 'Kreemo', 'Alien', 'kreemo@gmail.com', './Assets/kreemo.png', '$2y$10$JyhtwBdJ2s0S3HMeM6E1A.JuQbmXU1U4v8kM0UICHt1HehAFTEx1m', 'Male', '0000-00-00 00:00:00'),
(81, 'Shienamae', 'Migabon', 'shienamae@gmail.com', './Assets/default-profilepicture.png', '$2y$10$K7gP7FCXIWizEKEc89y1V.4nIs65fkK1ysSJBpFi3lz8S.lB9csqW', 'Female', '0000-00-00 00:00:00'),
(83, 'Ivan', 'Pevida', 'Ivan@gmail.com', '	\r\n./Assets/default-profilepicture.png', '$2y$10$8YMvxe2AEq4OmXOqYmCKEub5qHEK7kAXckftFk.OEZMfydgF0/v2.', 'Male', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
