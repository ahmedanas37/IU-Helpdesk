-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 10:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `date_published` datetime NOT NULL DEFAULT current_timestamp(),
  `view_count` int(11) NOT NULL,
  `helpful` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `category`, `date_published`, `view_count`, `helpful`) VALUES
(1, 'TEST', 'TEST TEST TEST', 'Software', '2023-09-02 04:31:25', 17, 0),
(2, 'TEST2', 'TEST2', 'Software', '2023-09-02 04:31:25', 16, 0),
(3, 'TEST1', 'TEST1', 'Hardware', '2023-09-02 04:31:25', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `comment_id`, `file_name`, `file_path`, `created_at`) VALUES
(15, 119, '127_0_0_1.sql', 'uploads/64f78d6b29669_127_0_0_1.sql', '2023-09-05 22:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `ticket_id`, `user_id`, `comment`, `date_added`) VALUES
(114, 3506, 3, '<p>Test comment</p>', '2023-08-29 20:04:00'),
(115, 3506, 3, '<p>TEST Comment 2</p>', '2023-08-29 20:07:36'),
(116, 3509, 1, '<p>fk</p>', '2023-09-05 21:59:13'),
(117, 3511, 1, '<p>bm</p>', '2023-09-05 22:02:32'),
(118, 3511, 1, '<p>dh</p>', '2023-09-05 22:06:12'),
(119, 3512, 1, '<p>Test Comment</p>', '2023-09-05 22:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text DEFAULT NULL,
  `date_added` varchar(30) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `date_added`, `admin_id`) VALUES
(1, 'IT', 'IT department of IQRA University', NULL, 0),
(3, 'Admin', 'Facilitation & Administration Department of IU.', '2023-05-12', 0),
(4, 'Finance', '', '', 0),
(5, 'Sales', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `documentations`
--

CREATE TABLE `documentations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `date_published` datetime NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documentations`
--

INSERT INTO `documentations` (`id`, `title`, `content`, `date_published`, `views`) VALUES
(1, 'Example Documentation', 'Example content.', '2023-08-29 21:11:51', 40),
(2, 'Example Documentation 2', 'Example Documentation Content 2', '2023-08-30 01:00:00', 18),
(3, 'RANDOM', 'RANDOM', '2023-09-04 01:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `recipient_id`, `content`, `timestamp`) VALUES
(41, 1, 3, 'Hi Fahad', '2023-09-05 20:17:46'),
(42, 3, 1, 'Hi Anas How are you?', '2023-09-05 20:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `is_read`, `created_at`) VALUES
(64, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:21:19'),
(65, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:21:54'),
(66, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:21:57'),
(67, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:22:28'),
(68, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:22:31'),
(69, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:22:33'),
(70, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:22:37'),
(71, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:26:19'),
(72, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:26:22'),
(73, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:27:25'),
(74, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:27:49'),
(75, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:27:52'),
(76, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:28:15'),
(77, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:28:19'),
(78, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:28:28'),
(80, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:32:09'),
(81, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:40:11'),
(82, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:43:05'),
(83, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:43:06'),
(84, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:43:28'),
(85, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:43:30'),
(86, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:43:37'),
(87, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:51:34'),
(88, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:52:05'),
(89, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:52:15'),
(90, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:52:18'),
(91, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:52:46'),
(92, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:53:12'),
(93, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:53:21'),
(94, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:58:19'),
(95, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:58:22'),
(96, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:58:26'),
(97, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 22:59:56'),
(98, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 22:59:59'),
(99, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 23:00:07'),
(100, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 23:01:16'),
(101, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 23:01:24'),
(102, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 23:02:08'),
(103, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 23:02:56'),
(104, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 23:03:09'),
(105, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 23:03:18'),
(106, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 23:03:39'),
(107, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 23:05:40'),
(108, 3, 'Your ticket (ID: 3506) has been reopened.', 0, '2023-09-05 23:05:43'),
(109, 3, 'Your ticket (ID: 3506) has been closed.', 0, '2023-09-05 23:06:21'),
(110, 1, 'Your ticket (ID: 3510) has been closed.', 0, '2023-09-06 00:54:00'),
(111, 1, 'Your ticket (ID: 3510) has been reopened.', 0, '2023-09-06 00:54:51'),
(112, 1, 'Your ticket (ID: 3510) has been closed.', 0, '2023-09-06 00:54:52'),
(113, 1, 'Your ticket (ID: 3510) has been closed.', 0, '2023-09-06 00:55:53'),
(114, 1, 'Your ticket (ID: 3510) has been reopened.', 0, '2023-09-06 00:55:58'),
(115, 1, 'Your ticket (ID: 3510) has been closed.', 0, '2023-09-06 00:55:59'),
(116, 1, 'Your ticket (ID: 3510) has been closed.', 0, '2023-09-06 00:56:11'),
(117, 1, 'Your ticket (ID: 3511) has been closed.', 0, '2023-09-06 01:03:56'),
(118, 1, 'Your ticket (ID: 3511) has been reopened.', 0, '2023-09-06 01:04:31'),
(119, 1, 'Your ticket (ID: 3511) has been closed.', 0, '2023-09-06 01:04:32'),
(120, 1, 'Your ticket (ID: 3511) has been closed.', 0, '2023-09-06 01:04:46'),
(121, 1, 'Your ticket (ID: 3511) has been reopened.', 0, '2023-09-06 01:04:51'),
(122, 1, 'Your ticket (ID: 3511) has been closed.', 0, '2023-09-06 01:04:52'),
(123, 1, 'Your ticket (ID: 3511) has been reopened.', 0, '2023-09-06 01:06:10'),
(124, 1, 'Your ticket (ID: 3511) has been closed.', 0, '2023-09-06 01:06:28'),
(125, 1, 'Your ticket (ID: 3511) has been reopened.', 0, '2023-09-06 01:07:08'),
(126, 1, 'Your ticket (ID: 3511) has been closed.', 0, '2023-09-06 01:07:09'),
(127, 1, 'Your ticket (ID: 3511) has been closed.', 0, '2023-09-06 01:07:29'),
(128, 1, 'Your ticket (ID: 3512) has been closed.', 0, '2023-09-06 01:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `subsections`
--

CREATE TABLE `subsections` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `ticket_description` text DEFAULT NULL,
  `date_added` varchar(30) DEFAULT NULL,
  `date_updated` varchar(30) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `comments` int(11) DEFAULT NULL,
  `ticket_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `title`, `ticket_description`, `date_added`, `date_updated`, `user_id`, `department_id`, `comments`, `ticket_status`) VALUES
(3506, 'TEST', '<p>TEST</p>', '2023-08-29 20:03:48', '2023-08-29 20:03:48', 3, 1, 0, 'Closed'),
(3507, 'TEST', '<p>TEST</p>', '2023-09-05 21:35:34', '2023-09-05 21:35:34', 1, 1, 0, 'Open'),
(3508, 'TEST', '<p>TEST</p>', '2023-09-05 21:35:50', '2023-09-05 21:35:50', 1, 1, 0, 'Open'),
(3509, 'ag', '<p>ag</p>', '2023-09-05 21:40:42', '2023-09-05 21:40:42', 1, 1, 0, 'Open'),
(3510, 'TEST', '<p>TEST</p>', '2023-09-05 21:52:18', '2023-09-05 21:52:18', 1, 1, 0, 'Closed'),
(3511, 'ag', '<p>ga</p>', '2023-09-05 21:57:19', '2023-09-05 21:57:19', 1, 1, 0, 'Closed'),
(3512, 'TEST', '<p>TEST</p>', '2023-09-05 22:12:03', '2023-09-05 22:12:03', 1, 4, 0, 'Closed'),
(3513, 'TEST Subject', '<p>TEst Description</p>', '2023-09-05 22:21:03', '2023-09-05 22:21:03', 1, 4, 0, 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_attachments`
--

CREATE TABLE `ticket_attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `created_at` varchar(30) DEFAULT NULL,
  `profile_picture` varchar(256) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `department_id` int(11) UNSIGNED NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`, `profile_picture`, `phone_number`, `department_id`, `role`) VALUES
(1, 'Anas', 'ahmedanas37@gmail.com', 'anas@123', '2023-04-06', NULL, '84945487915', 3, 'admin'),
(3, 'Fahad', 'fahad.49808@iqra.edu.pk', 'fahad@123', '2023-05-12', NULL, '46954954', 1, 'user'),
(4, 'Arif', 'arif@abc.com', 'arif@123', '', '', '12512616', 4, NULL),
(5, 'Mujeeb', 'mujeeb@abc.com', 'mujeeb@123', '', '', '315161616', 5, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_id` (`ticket_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `documentations`
--
ALTER TABLE `documentations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `is_read` (`is_read`);

--
-- Indexes for table `subsections`
--
ALTER TABLE `subsections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `fk_department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `documentations`
--
ALTER TABLE `documentations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `subsections`
--
ALTER TABLE `subsections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3514;

--
-- AUTO_INCREMENT for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachments`
--
ALTER TABLE `attachments`
  ADD CONSTRAINT `attachments_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `subsections`
--
ALTER TABLE `subsections`
  ADD CONSTRAINT `subsections_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `documentations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  ADD CONSTRAINT `ticket_attachments_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_department_id` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
