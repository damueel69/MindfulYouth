-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 02:43 AM
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
(22, 'Apa itu stres?', '\r\n       Stres adalah bagian alami dari kehidupan manusia yang dapat muncul dalam berbagai bentuk dan intensitas. Baik itu disebabkan oleh tekanan pekerjaan, masalah keuangan, konflik interpersonal, atau perubahan hidup, stres bisa memengaruhi kesejahteraan emosional dan fisik seseorang. Namun, penting untuk memahami cara mengelola stres guna menjaga keseimbangan dalam kehidupan sehari-hari.\r\n\r\n#### Apa Itu Stres?\r\n\r\nStres merupakan respons alami tubuh terhadap situasi yang memerlukan penyesuaian atau respons segera. Respons ini dapat bermanfaat dalam menghadapi tantangan, membantu fokus, atau memberikan dorongan tambahan untuk menyelesaikan tugas. Namun, jika stres berkepanjangan atau terlalu intens, dapat berdampak negatif pada kesehatan fisik dan mental.\r\n\r\n#### Dampak Stres Terhadap Kesejahteraan\r\n\r\nStres yang berkelanjutan dapat menyebabkan masalah kesehatan serius seperti gangguan tidur, gangguan pencernaan, penurunan sistem kekebalan tubuh, dan masalah mental seperti kecemasan dan depresi. Selain itu, stres juga dapat memengaruhi produktivitas, hubungan sosial, dan kualitas hidup secara keseluruhan.\r\n\r\n#### Strategi Mengatasi Stres\r\n\r\n1. **Mengidentifikasi Penyebab Stres:** Langkah awal dalam mengatasi stres adalah mengenali penyebabnya. Ini dapat membantu dalam mengambil langkah-langkah konkret untuk mengelola atau mengurangi stres tersebut.\r\n\r\n2. **Berolahraga dan Aktivitas Fisik:** Aktivitas fisik secara teratur dapat membantu mengurangi tingkat stres dan meningkatkan suasana hati melalui pelepasan endorfin, yang dikenal sebagai hormon \"bahagia\".\r\n\r\n3. **Praktik Relaksasi:** Meditasi, pernapasan dalam, yoga, atau teknik relaksasi lainnya dapat membantu menenangkan pikiran dan tubuh, mengurangi ketegangan, serta meningkatkan kesejahteraan emosional.\r\n\r\n4. **Mengatur Waktu dan Prioritas:** Mengelola waktu dengan bijak dan menetapkan prioritas dalam kehidupan sehari-hari dapat membantu mengurangi tekanan dan meningkatkan efisiensi.\r\n\r\n5. **Menjaga Keseimbangan Hidup:** Menghindari overcommitment, menyediakan waktu untuk kegiatan yang menyenangkan, dan menjaga hubungan yang sehat dengan orang-orang terdekat dapat membantu mengurangi stres.\r\n\r\n6. **Mencari Dukungan:** Berbicara dengan teman, keluarga, atau bahkan profesional kesehatan mental dapat memberikan dukungan dan perspektif yang diperlukan dalam mengatasi stres.\r\n\r\n#### Kesimpulan\r\n\r\nStres adalah bagian dari kehidupan, tetapi pengelolaannya dapat membantu menjaga keseimbangan dan kesejahteraan. Melalui strategi-strategi seperti olahraga, relaksasi, manajemen waktu, dan dukungan sosial, seseorang dapat mengurangi dampak stres yang negatif dan meningkatkan kualitas hidup secara keseluruhan.\r\n\r\nPenting untuk diingat bahwa setiap orang memiliki cara yang berbeda dalam menghadapi stres, jadi penting untuk menemukan strategi yang paling cocok untuk diri sendiri. Dengan kesadaran akan peran stres dalam kehidupan kita dan upaya untuk mengelolanya, kita dapat membangun ketahanan mental yang kuat dan menjalani kehidupan yang lebih seimbang.', '2024-01-08 07:53:14', NULL, 'Stress'),
(23, 'Membangun Keseimbangan Dalam Kehidupan Sehari-hari', 'Kesejahteraan mental adalah suatu kondisi di mana seseorang merasa baik secara emosional, psikologis, dan sosial. Ini melibatkan cara seseorang merespons tekanan, mengatasi kesulitan, menjaga hubungan yang sehat, serta menjalani kehidupan yang bermakna.\r\n\r\nPemahaman tentang Kesejahteraan Mental\r\nKesejahteraan mental bukan hanya tentang ketiadaan masalah mental, tetapi juga tentang memiliki alat dan strategi untuk mengatasi tantangan yang muncul dalam kehidupan sehari-hari. Ini termasuk:\r\n\r\nKeseimbangan Emosi: Kemampuan untuk mengelola emosi dengan sehat, baik itu kesedihan, kecemasan, atau stres.\r\n\r\nKeterampilan Mengatasi Masalah: Kemampuan untuk menyelesaikan masalah dan mengatasi rintangan yang muncul dalam kehidupan.\r\n\r\nHubungan yang Sehat: Memiliki hubungan yang mendukung dan membangun, baik dengan keluarga, teman, maupun komunitas.\r\n\r\nKebermaknaan dan Tujuan: Menemukan tujuan hidup yang memberikan makna dan kepuasan.', '2024-01-08 08:07:20', NULL, 'Stress');

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
(34, '36', '2024-01-08 00:49:55'),
(35, 'Mengandali Stress', '2024-01-08 01:16:09'),
(36, '623', '2024-01-08 01:25:09'),
(37, 'Pemuda Pancasila', '2024-01-08 01:41:18'),
(38, 'Love Yourself', '2024-01-08 01:41:26'),
(39, 'Vagabond', '2024-01-08 01:42:38'),
(40, 'Kenapa Harus Mencintai Diri Sendiri', '2024-01-08 01:43:03');

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
(96, 34, 3, 'Hi', 0, '0', NULL, '2024-01-08 00:50:00', '2024-01-08 00:50:00'),
(97, 34, 6, 'hi', 0, '0', NULL, '2024-01-08 00:50:15', '2024-01-08 00:50:15'),
(98, 35, 3, 'Assalamualaikum wr wb', 0, '0', NULL, '2024-01-08 01:17:47', '2024-01-08 01:17:47');

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
(4, 35, 3, 1, '2024-01-08 01:16:09'),
(5, 37, 6, 1, '2024-01-08 01:41:18'),
(6, 38, 6, 1, '2024-01-08 01:41:26'),
(7, 39, 6, 1, '2024-01-08 01:42:38'),
(8, 40, 6, 1, '2024-01-08 01:43:03');

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
(9, 35, 3, '2024-01-08 01:16:09'),
(10, 37, 6, '2024-01-08 01:41:18'),
(11, 38, 6, '2024-01-08 01:41:26'),
(12, 39, 6, '2024-01-08 01:42:38'),
(13, 40, 6, '2024-01-08 01:43:03');

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
(30, 3, 6, 34, '2024-01-08 00:49:55'),
(31, 6, 23, 36, '2024-01-08 01:25:09');

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
(3, 'anto', 'anto', '2', 'anto@gmail.com', '6282170914363', 'Anto', 'Toto', 'Psikiater', 'Stress', 'default.jpeg', 0, '1', '2024-01-08 01:21:41'),
(6, 'adam', 'adam', '1', 'adam@gmail.com', '2', 'adam', 'menta', 'adam', NULL, 'Tugas_Bos.png', 1, '1', '2024-01-08 01:26:46'),
(7, 'regina', 'regina', '2', 'regina@gmail.com', '812312312', 'Regina', 'Simin', 'Kanselor', 'Kecemasan', 'default.jpeg', 0, '1', '2024-01-08 01:24:21'),
(8, 'admin', 'admin', '0', 'admin@gmail.com', '', 'admin', 'admin', 'admin', NULL, 'default.jpeg', 0, '1', '2024-01-08 01:24:27'),
(20, 'anang', 'anang', '1', 'anang@gmail.com', '', 'anang', 'anang', NULL, NULL, 'default.jpeg', 0, '1', '2024-01-08 01:21:23'),
(21, 'ory', 'ory', '1', 'ory@gmail.com', '', 'ory', 'ory', NULL, NULL, 'default.jpeg', 0, '1', '2024-01-08 01:21:24'),
(22, 'leo', 'leo', '1', 'leo@gmail.com', '', 'leo', 'leo', NULL, NULL, 'default.jpeg', 0, '1', '2024-01-08 01:21:24'),
(23, 'alex', 'alex', '2', 'alex@gmail.com', '6282288204028', 'Alexander', 'The Great', 'Psikiater', 'Rumah Tangga', 'default.jpeg', 0, '1', '2024-01-08 01:23:58'),
(24, 'george', 'george', '2', 'george@gmail.com', '6282188204028', 'George', 'Miller', 'Kanselor', 'Suami dan Istri', 'default.jpeg', 0, '1', '2024-01-08 01:23:59');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `chats_details`
--
ALTER TABLE `chats_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats_messages`
--
ALTER TABLE `chats_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups_chats`
--
ALTER TABLE `groups_chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `groups_members`
--
ALTER TABLE `groups_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uri_segments`
--
ALTER TABLE `uri_segments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
