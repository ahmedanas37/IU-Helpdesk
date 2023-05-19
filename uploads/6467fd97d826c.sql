-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 10:55 PM
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
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) NOT NULL,
  `ticket_description` text DEFAULT NULL,
  `date_added` varchar(30) DEFAULT NULL,
  `date_updated` varchar(30) DEFAULT NULL,
  `attachment_name` varchar(256) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `comments` int(11) DEFAULT NULL,
  `ticket_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `title`, `ticket_description`, `date_added`, `date_updated`, `attachment_name`, `user_id`, `department_id`, `comments`, `ticket_status`) VALUES
(3482, 'Website Error	', 'Hi, I\'m trying to access your website but keep getting an error message. Can you please help me resolve this?	', '2023-04-06 09:21:00	', '2023-04-06 09:27:15	', 'error_screenshot.png	', 1, 1, 4, 'Open'),
(3485, 'JIRA Issue', 'Jira not working', NULL, NULL, NULL, 1, 1, 9, 'Open'),
(3487, 'af', '', '2023-05-03 18:24:13', NULL, NULL, 1, 1, 0, 'Open'),
(3488, 'dgmdgm', '', '2023-05-04 18:16:23', '2023-05-04 18:16:23', NULL, 1, 1, 0, 'Open'),
(3489, 'gdjdj', '', '2023-05-08 19:24:06', '2023-05-08 19:24:06', NULL, 1, 1, 0, 'Open');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3490;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
