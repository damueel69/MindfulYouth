-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 02:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `tanggal_publikasi` date DEFAULT curdate(),
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `konten`, `tanggal_publikasi`, `kategori`) VALUES
(1, 'D', 'D', '2023-12-24', 'D'),
(2, 'd', 'd', '2023-12-24', 'Stress'),
(3, 'a', 'a', '2023-12-24', 'Kecemasan'),
(4, 'b', 'b', '2023-12-24', 'Depresi'),
(5, 'Susah Tidur? Xanax solusinya', 'Dsakjdaklsjdlkasda', '2023-12-24', 'Gangguan Tidur'),
(6, 'How to handle Stress', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB', '2023-12-24', 'Stress');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `topic` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `topic`, `created_at`) VALUES
(1, '21', '2023-12-24 16:13:25'),
(2, 'Kiw Kiw', '2023-12-24 17:22:42'),
(3, '41', '2023-12-24 17:24:11'),
(4, '42', '2023-12-24 17:24:58'),
(5, '43', '2023-12-24 17:25:24'),
(6, '64', '2023-12-24 17:28:30'),
(7, '61', '2023-12-24 17:28:39'),
(8, '63', '2023-12-24 17:30:12'),
(9, '62', '2023-12-24 17:45:59'),
(10, '67', '2023-12-25 11:53:05'),
(11, '610', '2023-12-25 12:33:08'),
(12, '72', '2023-12-25 13:28:19'),
(13, '37', '2023-12-25 13:28:42'),
(14, '77', '2023-12-25 13:30:21'),
(15, '32', '2023-12-25 14:16:21'),
(16, 'Rumah Tangga', '2023-12-25 15:12:43'),
(17, 'Grup Gacor', '2023-12-29 15:52:26'),
(18, '614', '2024-01-06 13:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `chats_details`
--

CREATE TABLE `chats_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats_messages`
--

CREATE TABLE `chats_messages` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `is_image` tinyint(1) NOT NULL DEFAULT 0,
  `is_read` enum('0','1') NOT NULL DEFAULT '0',
  `is_doc` enum('0','1') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chats_messages`
--

INSERT INTO `chats_messages` (`id`, `chat_id`, `user_id`, `content`, `is_image`, `is_read`, `is_doc`, `created_at`) VALUES
(1, 2, 4, 'n', 0, '0', NULL, '2023-12-24 17:23:04'),
(2, 2, 4, 'hi', 0, '0', NULL, '2023-12-24 17:23:09'),
(3, 2, 4, 'adam', 0, '0', NULL, '2023-12-24 17:23:24'),
(4, 2, 3, 'hello', 0, '0', NULL, '2023-12-24 17:23:38'),
(5, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:13'),
(6, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:14'),
(7, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:15'),
(8, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:16'),
(9, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:16'),
(10, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:17'),
(11, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:18'),
(12, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:19'),
(13, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:20'),
(14, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:21'),
(15, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:23'),
(16, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:24'),
(17, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:24'),
(18, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:26'),
(19, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:26'),
(20, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:28'),
(21, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:28'),
(22, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:29'),
(23, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:30'),
(24, 2, 4, 'test', 0, '0', NULL, '2023-12-24 17:24:45'),
(25, 3, 4, 'test', 0, '0', NULL, '2023-12-24 17:25:18'),
(26, 6, 6, 'y', 0, '0', NULL, '2023-12-24 17:28:33'),
(27, 7, 6, 'y', 0, '0', NULL, '2023-12-24 17:28:41'),
(28, 2, 6, 'gi', 0, '0', NULL, '2023-12-24 17:30:35'),
(29, 2, 6, '\'', 0, '0', NULL, '2023-12-24 17:30:35'),
(30, 8, 6, 'Background.png', 1, '0', '0', '2023-12-24 17:32:12'),
(31, 4, 4, 'test', 0, '0', NULL, '2023-12-24 17:34:54'),
(32, 2, 6, 'y', 0, '0', NULL, '2023-12-24 18:24:13'),
(33, 2, 3, 'y', 0, '0', NULL, '2023-12-24 20:16:08'),
(34, 7, 6, 'Hallo', 0, '0', NULL, '2023-12-24 20:52:23'),
(35, 7, 6, 'Kamu dimana', 0, '0', NULL, '2023-12-24 20:52:27'),
(36, 7, 6, 'Driver_Roda_2_pt_2.jpg', 1, '0', '0', '2023-12-24 20:52:38'),
(37, 9, 6, 'y', 0, '0', NULL, '2023-12-25 11:52:59'),
(38, 10, 6, 'y', 0, '0', NULL, '2023-12-25 11:53:08'),
(39, 8, 6, 'y', 0, '0', NULL, '2023-12-25 12:08:58'),
(40, 10, 6, 'hi regina', 0, '0', NULL, '2023-12-25 12:45:55'),
(41, 10, 6, 'y', 0, '0', NULL, '2023-12-25 12:56:58'),
(42, 10, 6, 'y', 0, '0', NULL, '2023-12-25 12:57:31'),
(43, 10, 6, 'hi', 0, '0', NULL, '2023-12-25 13:01:29'),
(44, 12, 7, 'y', 0, '0', NULL, '2023-12-25 13:28:21'),
(45, 13, 3, 'y', 0, '0', NULL, '2023-12-25 13:28:45'),
(46, 14, 7, 'y', 0, '0', NULL, '2023-12-25 13:30:27'),
(47, 13, 3, 'hi', 0, '0', NULL, '2023-12-25 13:54:47'),
(48, 8, 6, 'hi', 0, '0', NULL, '2023-12-25 14:16:12'),
(49, 17, 3, 'Hi semua', 0, '0', NULL, '2023-12-29 15:52:42'),
(50, 17, 6, 'Hi sayang', 0, '0', NULL, '2023-12-29 15:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `messages` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `user_id`, `messages`, `created_at`) VALUES
(1, 3, '', '2023-12-24 16:26:21'),
(2, 3, 'Aadada', '2023-12-24 16:26:30'),
(3, 4, 'asdsdas', '2023-12-24 17:24:36'),
(4, 3, 'dadsadasdsa', '2023-12-29 15:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `groups_chats`
--

CREATE TABLE `groups_chats` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `total_member` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `groups_chats`
--

INSERT INTO `groups_chats` (`id`, `chat_id`, `created_by`, `total_member`, `created_at`) VALUES
(1, 2, 3, 4, '2023-12-24 17:22:42'),
(2, 16, 6, 1, '2023-12-25 15:12:43'),
(3, 17, 3, 2, '2023-12-29 15:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `groups_members`
--

CREATE TABLE `groups_members` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `groups_members`
--

INSERT INTO `groups_members` (`id`, `chat_id`, `user_id`, `created_at`) VALUES
(1, 2, 3, '2023-12-24 17:22:42'),
(2, 2, 4, '2023-12-24 17:23:00'),
(3, 2, 6, '2023-12-24 17:28:43'),
(4, 2, 7, '2023-12-25 13:30:09'),
(5, 16, 6, '2023-12-25 15:12:43'),
(6, 17, 3, '2023-12-29 15:52:26'),
(7, 17, 6, '2023-12-29 15:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `is_read` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uri_segments`
--

CREATE TABLE `uri_segments` (
  `id` int(11) NOT NULL,
  `first` int(11) NOT NULL,
  `second` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `uri_segments`
--

INSERT INTO `uri_segments` (`id`, `first`, `second`, `chat_id`, `created_at`) VALUES
(1, 2, 1, 1, '2023-12-24 16:13:25'),
(2, 4, 1, 3, '2023-12-24 17:24:11'),
(3, 4, 2, 4, '2023-12-24 17:24:58'),
(4, 4, 3, 5, '2023-12-24 17:25:24'),
(5, 6, 4, 6, '2023-12-24 17:28:30'),
(6, 6, 1, 7, '2023-12-24 17:28:39'),
(7, 6, 3, 8, '2023-12-24 17:30:12'),
(8, 6, 2, 9, '2023-12-24 17:45:59'),
(9, 6, 7, 10, '2023-12-25 11:53:05'),
(10, 6, 10, 11, '2023-12-25 12:33:08'),
(11, 7, 2, 12, '2023-12-25 13:28:19'),
(12, 3, 7, 13, '2023-12-25 13:28:42'),
(13, 7, 7, 14, '2023-12-25 13:30:21'),
(14, 3, 2, 15, '2023-12-25 14:16:21'),
(15, 6, 14, 18, '2024-01-06 13:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` enum('0','1','2') NOT NULL DEFAULT '1' COMMENT '0 = admin; 1 = common user; 2 = worker',
  `email` text NOT NULL,
  `no_hp` char(50) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `division` varchar(100) DEFAULT NULL,
  `spesialist` varchar(50) DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `is_logged_in` tinyint(1) NOT NULL,
  `is_activated` enum('0','1') DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `no_hp`, `first_name`, `last_name`, `division`, `spesialist`, `avatar`, `is_logged_in`, `is_activated`, `last_login`) VALUES
(2, 'adam', 'adam4', '1', 'damas@gmail.com', '', 'Damas', 'Raya', '2', NULL, 'default.jpeg', 1, '1', '2023-12-23 17:00:00'),
(3, 'anto', 'anto', '2', 'anto@gmail.com', '6282170914363', 'Anto', 'Toto', 'Psikiater', 'Stress', 'default.jpeg', 0, '1', '2024-01-06 12:03:28'),
(6, 'adam', 'adam', '1', 'adam@gmail.com', '', 'adam', 'menta', 'adam', NULL, 'default.jpeg', 0, '1', '2024-01-06 13:12:51'),
(7, 'regina', 'regina', '2', 'regina@gmail.com', '812312312', 'Regina', 'Simin', 'Kanselor', 'Rumah Tangga', 'default.jpeg', 1, '1', '2024-01-04 17:00:00'),
(8, 'admin', 'admin', '0', 'admin@gmail.com', '', 'admin', 'admin', 'admin', NULL, 'default.jpeg', 0, '1', '2024-01-06 13:12:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats_details`
--
ALTER TABLE `chats_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats_messages`
--
ALTER TABLE `chats_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups_chats`
--
ALTER TABLE `groups_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups_members`
--
ALTER TABLE `groups_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uri_segments`
--
ALTER TABLE `uri_segments`
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
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `chats_details`
--
ALTER TABLE `chats_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats_messages`
--
ALTER TABLE `chats_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups_chats`
--
ALTER TABLE `groups_chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups_members`
--
ALTER TABLE `groups_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uri_segments`
--
ALTER TABLE `uri_segments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
