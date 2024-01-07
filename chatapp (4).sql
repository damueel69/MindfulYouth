-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 02:15 PM
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
  `tanggal_publikasi` datetime DEFAULT current_timestamp(),
  `gambar` varchar(255) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `konten`, `tanggal_publikasi`, `gambar`, `kategori`) VALUES
(15, 'A', 'A', '2024-01-07 12:32:38', '', 'Stress'),
(16, 'B', 'B', '2024-01-07 12:35:11', '', 'Stress'),
(17, 'C', 'C', '2024-01-07 12:35:16', '', 'Stress'),
(18, 'Membeli Ayam Geprek', 'a', '2024-01-07 13:39:37', NULL, 'Stress'),
(19, 'a', 'a', '2024-01-07 13:39:40', NULL, 'Stress'),
(20, 'bb', 'bb', '2024-01-07 13:47:35', NULL, 'Stress'),
(21, 'Mengapa Kita Stress?', 'Bla bla bla\r\n', '2024-01-07 14:05:59', NULL, 'Stress');

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
(18, '614', '2024-01-06 13:10:33'),
(19, '153', '2024-01-07 07:48:08'),
(20, '163', '2024-01-07 08:18:31'),
(21, '33', '2024-01-07 08:22:37'),
(22, '173', '2024-01-07 08:23:30'),
(23, '183', '2024-01-07 08:44:02'),
(24, '193', '2024-01-07 08:52:06'),
(25, '719', '2024-01-07 09:13:56'),
(26, '1917', '2024-01-07 09:14:57'),
(27, '1916', '2024-01-07 09:16:58'),
(28, '196', '2024-01-07 09:17:03'),
(29, '19', '2024-01-07 09:18:25'),
(30, '321', '2024-01-07 10:37:38'),
(31, '326', '2024-01-07 10:39:16'),
(32, '162', '2024-01-07 12:45:48'),
(33, '1615', '2024-01-07 12:45:53');

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
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chats_messages`
--

INSERT INTO `chats_messages` (`id`, `chat_id`, `user_id`, `content`, `is_image`, `is_read`, `is_doc`, `created_at`, `timestamp`) VALUES
(1, 2, 4, 'n', 0, '0', NULL, '2023-12-24 17:23:04', '2024-01-07 08:49:37'),
(2, 2, 4, 'hi', 0, '0', NULL, '2023-12-24 17:23:09', '2024-01-07 08:49:37'),
(3, 2, 4, 'adam', 0, '0', NULL, '2023-12-24 17:23:24', '2024-01-07 08:49:37'),
(4, 2, 3, 'hello', 0, '0', NULL, '2023-12-24 17:23:38', '2024-01-07 08:49:37'),
(5, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:13', '2024-01-07 08:49:37'),
(6, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:14', '2024-01-07 08:49:37'),
(7, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:15', '2024-01-07 08:49:37'),
(8, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:16', '2024-01-07 08:49:37'),
(9, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:16', '2024-01-07 08:49:37'),
(10, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:17', '2024-01-07 08:49:37'),
(11, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:18', '2024-01-07 08:49:37'),
(12, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:19', '2024-01-07 08:49:37'),
(13, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:20', '2024-01-07 08:49:37'),
(14, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:21', '2024-01-07 08:49:37'),
(15, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:23', '2024-01-07 08:49:37'),
(16, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:24', '2024-01-07 08:49:37'),
(17, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:24', '2024-01-07 08:49:37'),
(18, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:26', '2024-01-07 08:49:37'),
(19, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:26', '2024-01-07 08:49:37'),
(20, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:28', '2024-01-07 08:49:37'),
(21, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:28', '2024-01-07 08:49:37'),
(22, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:29', '2024-01-07 08:49:37'),
(23, 3, 4, 'f', 0, '0', NULL, '2023-12-24 17:24:30', '2024-01-07 08:49:37'),
(24, 2, 4, 'test', 0, '0', NULL, '2023-12-24 17:24:45', '2024-01-07 08:49:37'),
(25, 3, 4, 'test', 0, '0', NULL, '2023-12-24 17:25:18', '2024-01-07 08:49:37'),
(26, 6, 6, 'y', 0, '0', NULL, '2023-12-24 17:28:33', '2024-01-07 08:49:37'),
(27, 7, 6, 'y', 0, '0', NULL, '2023-12-24 17:28:41', '2024-01-07 08:49:37'),
(28, 2, 6, 'gi', 0, '0', NULL, '2023-12-24 17:30:35', '2024-01-07 08:49:37'),
(29, 2, 6, '\'', 0, '0', NULL, '2023-12-24 17:30:35', '2024-01-07 08:49:37'),
(30, 8, 6, 'Background.png', 1, '0', '0', '2023-12-24 17:32:12', '2024-01-07 08:49:37'),
(31, 4, 4, 'test', 0, '0', NULL, '2023-12-24 17:34:54', '2024-01-07 08:49:37'),
(32, 2, 6, 'y', 0, '0', NULL, '2023-12-24 18:24:13', '2024-01-07 08:49:37'),
(33, 2, 3, 'y', 0, '0', NULL, '2023-12-24 20:16:08', '2024-01-07 08:49:37'),
(34, 7, 6, 'Hallo', 0, '0', NULL, '2023-12-24 20:52:23', '2024-01-07 08:49:37'),
(35, 7, 6, 'Kamu dimana', 0, '0', NULL, '2023-12-24 20:52:27', '2024-01-07 08:49:37'),
(36, 7, 6, 'Driver_Roda_2_pt_2.jpg', 1, '0', '0', '2023-12-24 20:52:38', '2024-01-07 08:49:37'),
(37, 9, 6, 'y', 0, '0', NULL, '2023-12-25 11:52:59', '2024-01-07 08:49:37'),
(38, 10, 6, 'y', 0, '0', NULL, '2023-12-25 11:53:08', '2024-01-07 08:49:37'),
(39, 8, 6, 'y', 0, '0', NULL, '2023-12-25 12:08:58', '2024-01-07 08:49:37'),
(40, 10, 6, 'hi regina', 0, '0', NULL, '2023-12-25 12:45:55', '2024-01-07 08:49:37'),
(41, 10, 6, 'y', 0, '0', NULL, '2023-12-25 12:56:58', '2024-01-07 08:49:37'),
(42, 10, 6, 'y', 0, '0', NULL, '2023-12-25 12:57:31', '2024-01-07 08:49:37'),
(43, 10, 6, 'hi', 0, '0', NULL, '2023-12-25 13:01:29', '2024-01-07 08:49:37'),
(44, 12, 7, 'y', 0, '0', NULL, '2023-12-25 13:28:21', '2024-01-07 08:49:37'),
(45, 13, 3, 'y', 0, '0', NULL, '2023-12-25 13:28:45', '2024-01-07 08:49:37'),
(46, 14, 7, 'y', 0, '0', NULL, '2023-12-25 13:30:27', '2024-01-07 08:49:37'),
(47, 13, 3, 'hi', 0, '0', NULL, '2023-12-25 13:54:47', '2024-01-07 08:49:37'),
(48, 8, 6, 'hi', 0, '0', NULL, '2023-12-25 14:16:12', '2024-01-07 08:49:37'),
(49, 17, 3, 'Hi semua', 0, '0', NULL, '2023-12-29 15:52:42', '2024-01-07 08:49:37'),
(50, 17, 6, 'Hi sayang', 0, '0', NULL, '2023-12-29 15:52:47', '2024-01-07 08:49:37'),
(51, 15, 3, 'Poster_Sentiment_Analysis_of_Grab_App.png', 1, '0', '0', '2024-01-06 13:34:57', '2024-01-07 08:49:37'),
(52, 15, 3, 'y.png', 1, '0', '0', '2024-01-07 05:59:26', '2024-01-07 08:49:37'),
(53, 8, 6, 'h', 0, '0', NULL, '2024-01-07 07:38:49', '2024-01-07 08:49:37'),
(54, 19, 15, 'hi', 0, '0', NULL, '2024-01-07 07:48:11', '2024-01-07 08:49:37'),
(55, 19, 15, 'hi anto', 0, '0', NULL, '2024-01-07 07:52:08', '2024-01-07 08:49:37'),
(56, 8, 3, 'yes hi?', 0, '0', NULL, '2024-01-07 07:52:46', '2024-01-07 08:49:37'),
(57, 19, 3, 'hi mimi', 0, '0', NULL, '2024-01-07 07:53:27', '2024-01-07 08:49:37'),
(58, 19, 15, 'h', 0, '0', NULL, '2024-01-07 08:10:10', '2024-01-07 08:49:37'),
(59, 8, 3, 'h\'=', 0, '0', NULL, '2024-01-07 08:15:59', '2024-01-07 08:49:37'),
(60, 15, 2, 'h', 0, '0', NULL, '2024-01-07 08:17:04', '2024-01-07 08:49:37'),
(61, 20, 16, 'Hallo bpk Anto', 0, '0', NULL, '2024-01-07 08:18:37', '2024-01-07 08:49:37'),
(62, 20, 3, 'ya?', 0, '0', NULL, '2024-01-07 08:19:08', '2024-01-07 08:49:37'),
(63, 22, 17, 'hi pak anto', 0, '0', NULL, '2024-01-07 08:23:33', '2024-01-07 08:49:37'),
(64, 22, 3, 'ya', 0, '0', NULL, '2024-01-07 08:23:56', '2024-01-07 08:49:37'),
(65, 23, 18, 'hi', 0, '0', NULL, '2024-01-07 08:44:06', '2024-01-07 08:49:37'),
(66, 8, 6, 'anto', 0, '0', NULL, '2024-01-07 08:50:22', '2024-01-07 08:50:22'),
(67, 22, 17, 'g', 0, '0', NULL, '2024-01-07 08:51:15', '2024-01-07 08:51:15'),
(68, 20, 16, 'anto', 0, '0', NULL, '2024-01-07 08:51:37', '2024-01-07 08:51:37'),
(69, 24, 19, 'anto', 0, '0', NULL, '2024-01-07 08:52:09', '2024-01-07 08:52:09'),
(70, 20, 3, 'ya>', 0, '0', NULL, '2024-01-07 08:52:24', '2024-01-07 08:52:24'),
(71, 20, 3, 'hi', 0, '0', NULL, '2024-01-07 08:52:32', '2024-01-07 08:52:32'),
(72, 20, 16, 'a', 0, '0', NULL, '2024-01-07 09:02:38', '2024-01-07 09:02:38'),
(73, 20, 16, 'a', 0, '0', NULL, '2024-01-07 09:10:54', '2024-01-07 09:10:54'),
(74, 24, 19, 'd', 0, '0', NULL, '2024-01-07 09:11:11', '2024-01-07 09:11:11'),
(75, 8, 6, 'a', 0, '0', NULL, '2024-01-07 11:08:55', '2024-01-07 11:08:55'),
(76, 8, 6, 'a', 0, '0', NULL, '2024-01-07 11:11:15', '2024-01-07 11:11:15'),
(77, 15, 3, 'hi', 0, '0', NULL, '2024-01-07 11:29:00', '2024-01-07 11:29:00'),
(78, 15, 3, 'g\'', 0, '0', NULL, '2024-01-07 11:29:02', '2024-01-07 11:29:02'),
(79, 15, 3, 'a', 0, '0', NULL, '2024-01-07 11:29:03', '2024-01-07 11:29:03'),
(80, 15, 3, 'b', 0, '0', NULL, '2024-01-07 11:29:03', '2024-01-07 11:29:03'),
(81, 15, 3, 'c', 0, '0', NULL, '2024-01-07 11:29:03', '2024-01-07 11:29:03'),
(82, 19, 15, 'hi', 0, '0', NULL, '2024-01-07 11:29:24', '2024-01-07 11:29:24'),
(83, 19, 3, 'a', 0, '0', NULL, '2024-01-07 11:30:33', '2024-01-07 11:30:33'),
(84, 19, 15, 'test', 0, '0', NULL, '2024-01-07 11:31:07', '2024-01-07 11:31:07'),
(85, 19, 15, 'test', 0, '0', NULL, '2024-01-07 11:31:17', '2024-01-07 11:31:17'),
(86, 19, 3, 'test 1', 0, '0', NULL, '2024-01-07 11:31:23', '2024-01-07 11:31:23'),
(87, 19, 15, 'test 2', 0, '0', NULL, '2024-01-07 11:31:27', '2024-01-07 11:31:27'),
(88, 19, 15, 'test 3', 0, '0', NULL, '2024-01-07 11:31:31', '2024-01-07 11:31:31'),
(89, 19, 3, 'y.png', 1, '0', '0', '2024-01-07 11:33:51', '2024-01-07 11:33:51'),
(90, 19, 3, 'y1.png', 1, '0', '0', '2024-01-07 11:34:18', '2024-01-07 11:34:18'),
(91, 19, 3, 'y2.png', 1, '0', '0', '2024-01-07 11:36:49', '2024-01-07 11:36:49'),
(92, 19, 3, 'y3.png', 1, '0', '0', '2024-01-07 11:37:24', '2024-01-07 11:37:24'),
(93, 19, 15, 's', 0, '0', NULL, '2024-01-07 11:45:18', '2024-01-07 11:45:18'),
(94, 19, 15, 'y4.png', 1, '0', '0', '2024-01-07 11:53:38', '2024-01-07 11:53:38');

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
(4, 3, 'dadsadasdsa', '2023-12-29 15:51:37'),
(5, 3, 'das', '2024-01-07 06:20:45');

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
(3, 17, 3, 3, '2023-12-29 15:52:26');

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
(7, 17, 6, '2023-12-29 15:52:37'),
(8, 17, 15, '2024-01-07 11:53:47');

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
(15, 6, 14, 18, '2024-01-06 13:10:33'),
(16, 15, 3, 19, '2024-01-07 07:48:08'),
(17, 16, 3, 20, '2024-01-07 08:18:31'),
(18, 3, 3, 21, '2024-01-07 08:22:37'),
(19, 17, 3, 22, '2024-01-07 08:23:30'),
(20, 18, 3, 23, '2024-01-07 08:44:02'),
(21, 19, 3, 24, '2024-01-07 08:52:06'),
(22, 7, 19, 25, '2024-01-07 09:13:56'),
(23, 19, 17, 26, '2024-01-07 09:14:57'),
(24, 19, 16, 27, '2024-01-07 09:16:58'),
(25, 19, 6, 28, '2024-01-07 09:17:03'),
(26, 3, 21, 30, '2024-01-07 10:37:38'),
(27, 3, 26, 31, '2024-01-07 10:39:16'),
(28, 16, 2, 32, '2024-01-07 12:45:48'),
(29, 16, 15, 33, '2024-01-07 12:45:53');

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
(2, 'adam', 'adam4', '1', 'damas@gmail.com', '', 'Damas', 'Raya', '2', NULL, 'default.jpeg', 0, '1', '2024-01-07 08:17:51'),
(3, 'anto', 'anto', '2', 'anto@gmail.com', '6282170914363', 'Anto', 'Toto', 'Psikiater', 'Stress', 'default.jpeg', 1, '1', '2024-01-06 17:00:00'),
(6, 'adam', 'adam', '1', 'adam@gmail.com', '2', 'adam', 'menta', 'adam', NULL, 'y.png', 0, '1', '2024-01-07 13:06:04'),
(7, 'regina', 'regina', '2', 'regina@gmail.com', '812312312', 'Regina', 'Simin', 'Kanselor', 'Rumah Tangga', 'default.jpeg', 0, '1', '2024-01-07 10:09:18'),
(8, 'admin', 'admin', '0', 'admin@gmail.com', '', 'admin', 'admin', 'admin', NULL, 'default.jpeg', 1, '1', '2024-01-06 17:00:00'),
(15, 'mimi', 'mimi', '1', 'mimi@gmail.com', '', 'Mimi', 'Mimi', NULL, NULL, 'default.jpeg', 0, '1', '2024-01-07 12:23:49'),
(16, 'm', 'm', '1', 'm@gmail.com', '', 'M', 'M', NULL, NULL, 'default.jpeg', 0, '1', '2024-01-07 13:01:03'),
(17, 'grey', 'grey', '1', 'grey@gmail.com', '', 'grey', 'grey', NULL, NULL, 'default.jpeg', 0, '1', '2024-01-07 08:51:24'),
(18, 'nana', 'nana', '1', 'nana@gmail.com', '', 'nana', 'nana', NULL, NULL, 'default.jpeg', 0, '1', '2024-01-07 08:50:08'),
(19, 'd', 'd', '1', 'd@gmail.com', '', 'd', 'd', NULL, NULL, 'default.jpeg', 0, '1', '2024-01-07 10:08:39');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `chats_details`
--
ALTER TABLE `chats_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats_messages`
--
ALTER TABLE `chats_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups_chats`
--
ALTER TABLE `groups_chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups_members`
--
ALTER TABLE `groups_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uri_segments`
--
ALTER TABLE `uri_segments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
