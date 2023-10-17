-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 03:53 PM
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
(1, 'TEST', 'TEST TEST TEST', 'Software', '2023-09-02 04:31:25', 36, 0),
(2, 'TEST2', 'TEST2', 'Software', '2023-09-02 04:31:25', 17, 0),
(3, 'TEST1', 'TEST1', 'Hardware', '2023-09-02 04:31:25', 7, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'IS it IS it IQRA University Service Management?', 'Yes, it is IS it IQRA University Service Management. How can I help you?'),
(2, 'How do I submit a support ticket?', 'To submit a support ticket, log in to your IQRA University account, navigate to the Helpdesk section, and click on \"Submit Ticket.\" Fill out the required information and submit your request.'),
(3, 'What types of issues can I report through the helpdesk?', 'You can report issues related to IT, campus facilities, academics, and general inquiries through the helpdesk.'),
(4, 'How can I check the status of my submitted ticket?', 'You can check the status of your ticket by logging in to your account and visiting the Helpdesk section. Your ticket\'s status and updates will be displayed there.'),
(5, 'What should I do if I forgot my login credentials for the helpdesk system?', 'If you forget your login credentials, click on the \"Forgot Password\" link on the login page. You will receive instructions to reset your password.'),
(6, 'Can I attach files to my support ticket?', 'Yes, you can attach relevant files or screenshots when submitting your support ticket. This helps us better understand and resolve your issue.'),
(7, 'How long does it usually take to receive a response to my ticket?', 'We strive to respond to tickets within 24 hours during business days. For urgent issues, our response time may be faster.'),
(8, 'Is there a specific format for ticket descriptions?', 'While there\'s no strict format, it\'s helpful to provide a clear and detailed description of the issue, including any error messages and steps to reproduce the problem.'),
(9, 'Can I request technical assistance for my online courses?', 'Yes, our helpdesk supports technical issues related to online courses, such as login problems or access to course materials.'),
(10, 'What do I do if I have a complaint about a university service?', 'You can use the helpdesk to submit complaints. We take all feedback seriously and strive to improve our services.'),
(11, 'How can I update the contact information associated with my helpdesk account?', 'You can update your contact information by going to your profile settings in the helpdesk system.'),
(12, 'What is the process for requesting access to specific campus facilities?', 'To request access to specific campus facilities, submit a ticket with details of your request, and our team will assist you.'),
(13, 'Can I request an extension for an assignment or exam through the helpdesk?', 'Yes, you can request an extension for academic assignments or exams by submitting a ticket with a valid reason.'),
(14, 'How can I report an issue with the university\'s Wi-Fi network?', 'Use the helpdesk to report Wi-Fi issues, including slow connectivity or network outages. Our IT team will investigate and resolve them.'),
(15, 'Is there a dedicated support team for online students?', 'Yes, online students have access to dedicated support through the helpdesk for any technical or academic assistance they may need.'),
(16, 'What is the process for requesting a transcript or academic record?', 'To request a transcript or academic record, submit a ticket with your details and the specific documents you need.'),
(17, 'How can I reset my student portal password?', 'If you need to reset your student portal password, submit a ticket to our IT support team, and they will assist you in the process.'),
(18, 'Can I request tutoring services through the helpdesk?', 'Yes, you can request tutoring services by submitting a ticket with your subject and availability. We will arrange a tutor for you.'),
(19, 'How do I report a lost or stolen student ID card?', 'To report a lost or stolen student ID card, please submit a ticket to our security team for immediate action.'),
(20, 'What is the procedure for requesting an official letter from the university?', 'You can request an official letter by submitting a ticket with your details and the purpose of the letter. We will generate it for you.'),
(21, 'How can I provide feedback on a specific course or instructor?', 'Share your feedback on courses or instructors by submitting a ticket. Your input is valuable for ongoing improvement.'),
(22, 'What should I do if I encounter an error while accessing the student portal?', 'If you encounter an error while using the student portal, submit a ticket to our IT team with details of the error message and your browser.'),
(23, 'Can I request assistance with library services through the helpdesk?', 'Yes, you can request assistance with library services, including book reservations and research support, through the helpdesk.'),
(24, 'How do I enroll in a specific course or program?', 'To enroll in a course or program, submit a ticket with your request and the program details, and our academic advisors will assist you.'),
(25, 'Can I track the progress of my submitted ticket online?', 'Yes, you can track the progress of your ticket by logging into your helpdesk account and checking the ticket status.'),
(26, 'Is there a helpline or emergency contact available through the helpdesk?', 'For emergencies or immediate assistance, please contact our dedicated helpline. The helpdesk can also assist in routing urgent requests.');

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
(121, 3515, 3, '<p>Hi Anas,</p><p>Thank you for contacting Finance Dept.</p><p><br></p><p>Yes you can have your fee discounted. The terms &amp; conditions will be forwarded to you.</p>', '2023-09-08 21:06:26'),
(122, 3515, 1, '<p>Understood Fahad,</p><p>Thanks for prompt response.</p>', '2023-09-08 21:08:52');

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
(1, 'Example Documentation', 'Example content.', '2023-08-29 21:11:51', 61),
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
(52, 1, 3, 'Hi Fahad, are you available?', '2023-09-08 19:02:01'),
(53, 3, 1, 'Hi Anas, yes I am available.', '2023-09-08 19:02:15'),
(54, 1, 3, 'Great, I am facing a problem, are you free to discuss?', '2023-09-08 19:02:28'),
(55, 3, 1, 'Sure, I am listening.', '2023-09-08 19:02:41');

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
(3515, 'Fee Discount Request', '<p>Hi,</p><p>I want my fees to be discounted. Is it possible?</p>', '2023-09-08 21:04:08', '2023-09-08 21:04:08', 1, 4, 0, 'Closed');

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

--
-- Dumping data for table `ticket_attachments`
--

INSERT INTO `ticket_attachments` (`id`, `ticket_id`, `file_name`, `file_path`, `created_at`) VALUES
(5, 3515, 'project.sql', 'uploads/64fb702856e1f.sql', '2023-09-08 21:04:08');

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
(1, 'Anas', 'ahmedanas37@gmail.com', 'anas@123', '2023-04-06', NULL, '+92949419192', 3, 'admin'),
(3, 'Fahad', 'fahad.49808@iqra.edu.pk', 'fahad@123', '2023-05-12', NULL, '46954954', 1, 'admin'),
(4, 'Arif', 'arif@abc.com', 'arif@123', '', '', '12512616', 4, 'support'),
(5, 'Mujeeb', 'mujeeb@abc.com', 'mujeeb@123', '', '', '315161616', 5, 'support'),
(6, 'test', 'test@abc.com', '123', '', '', '99497919191', 1, 'user');

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
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `subsections`
--
ALTER TABLE `subsections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3516;

--
-- AUTO_INCREMENT for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
