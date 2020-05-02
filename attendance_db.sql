-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 09:51 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rating` int(11) DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `user_id`, `batch_id`, `date`, `rating`, `review`, `notes`, `approved`, `status`) VALUES
(5, 20, 13, '2019-06-09 08:51:35', 5, 'hello', '', 1, 1),
(8, 38, 14, '2019-05-18 07:45:15', 5, 'wow', '', 1, 1),
(9, 38, 3, '2019-05-18 07:45:11', 5, 'hello', '', 1, 1),
(12, 39, 14, '2019-06-09 08:56:06', 5, 'good class', '', 1, 1),
(13, 20, 13, '2019-05-18 07:57:21', 4, 'good', '', 1, 1),
(14, 20, 3, '2019-05-18 07:45:26', 5, 'wow ', '', 1, 1),
(15, 6, 3, '2019-05-23 09:50:55', 5, 'hello', '', 1, 1),
(16, 6, 14, '2019-05-24 09:54:36', 5, 'nice class', '', 2, 1),
(17, 6, 3, '2019-05-23 09:58:33', 5, 'asdfghjkl;', '', 1, 1),
(18, 6, 3, '2019-05-23 09:58:46', 5, 'hello\r\n', '', 1, 1),
(29, 20, 13, '2019-05-18 07:57:24', 5, 'asfhasuf sfuhweuf ssdufyusf suafhsu fsu', '', 2, 1),
(30, 6, 15, '2019-05-23 09:53:54', 5, 'afhshf fuyuf s', '', 1, 1),
(35, 6, 14, '2019-05-24 15:10:56', 5, 'nice ', '', 1, 1),
(36, 6, 3, '2019-05-23 09:58:39', 5, 'hello', '', 1, 1),
(37, 6, 14, '2019-05-23 09:58:49', 5, 'hi', '', 1, 1),
(38, 6, 15, '2019-05-23 09:54:11', 5, 'good', '', 1, 1),
(39, 6, 15, '2019-06-09 08:54:07', 5, 'hello', '', 0, 1),
(40, 6, 3, '2019-05-24 08:28:49', 5, 'wow', '', 2, 1),
(41, 6, 14, '2019-05-24 15:11:02', 5, 'nice', '', 1, 1),
(42, 10, 13, '2019-05-24 08:17:27', 5, 'wow', '', 1, 1),
(43, 38, 14, '2019-06-09 08:54:21', 5, 'good class', '', 1, 1),
(44, 38, 3, '2019-05-24 15:54:46', 5, 'hello', '', 2, 1),
(45, 23, 15, '2019-06-09 08:46:24', 5, 'hello', '', 1, 1),
(46, 23, 14, '2019-05-24 15:55:13', 5, 'wow', '', 2, 1),
(47, 30, 18, '2019-06-09 08:45:25', 5, 'today nice ', '', 1, 1),
(48, 20, 13, '2019-06-09 08:52:55', 5, 'hello ', '', 2, 1),
(49, 42, 16, '2019-06-09 08:45:40', 5, 'very nice', '', 1, 1),
(50, 20, 13, '2019-06-09 08:57:27', 5, 'good \r\n', '', 1, 1),
(51, 20, 3, '2019-06-22 07:05:02', 5, 'nice', '', 1, 1),
(52, 6, 3, '2019-07-28 18:00:00', 5, 'good class ', '', 0, 1),
(53, 20, 13, '2019-07-28 18:00:00', 5, 'hello', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` int(11) NOT NULL,
  `code` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_limit` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `code`, `title`, `description`, `class_limit`, `trainer_id`, `course_id`, `status`) VALUES
(3, '19', 'MySQL morning', 'hello', 25, 6, 4, 1),
(13, '23', 'Java night', 'sdjfg', 40, 10, 5, 1),
(14, '100', 'java morning', 'hello', 500, 6, 5, 1),
(15, '21', 'python  evening ', 'ajshf', 40, 6, 7, 1),
(16, '20', 'MySQL Night', 'excellent  ', 25, 12, 4, 1),
(17, '10', 'MySQL evening ', 'asdfghjklxcvbnm', 40, 10, 4, 1),
(18, '22', 'Graphics Design ', 'graphics design is very ............ .............. .', 30, 30, 8, 1),
(19, '12', 'PHP  Night', 'good trainer', 32, 6, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `code` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_class` int(11) NOT NULL,
  `duration` float NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `title`, `description`, `number_of_class`, `duration`, `status`) VALUES
(4, '07', 'MySQL', '                                        good                                    ', 25, 75, 1),
(5, '03', 'java ', '                                        fhsajfh                                    ', 40, 120, 1),
(6, '16', 'php', 'hello\r\n                                                     ', 32, 96, 1),
(7, '02', 'python', '                                                            hello                                                       ', 40, 120, 1),
(8, '15', 'Graphics Design ', 'graphics is ....... ', 30, 90, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `notice_type_id` int(11) NOT NULL,
  `title` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` int(11) NOT NULL,
  `start_at` datetime NOT NULL,
  `finish_at` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `created_by`, `notice_type_id`, `title`, `description`, `batch_id`, `start_at`, `finish_at`, `status`) VALUES
(5, 8, 4, 'hello safhu', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  fahim', 13, '2019-05-10 00:00:00', '2019-05-31 00:00:00', 1),
(8, 8, 2, 'please pay your due', 'hello all', 3, '2019-05-25 12:00:00', '2019-05-28 12:00:00', 1),
(9, 9, 2, 'Reg.', 'alfhsd sdjfhsuf sfhsfhwuf ssdj fsdfhusdfsd fs sfhsf sfioasfsd ncsaf aifhawfhsd fiasfhsnsdjfa ', 3, '2019-05-08 00:00:00', '2019-05-10 00:00:00', 1),
(11, 8, 1, 'why learn python', 'Python is easy to learn. Python has a simple syntax that makes it suitable for learning programming as a first language. The learning curve is smoother than other languages such as Java, which quickly requires learning about Object Oriented Programming or C/C++ that requires to understand pointers.', 13, '2019-05-09 00:00:00', '2019-05-13 00:00:00', 1),
(14, 8, 2, 'heskljfs', 'fhsjs f', 19, '2019-12-31 00:00:00', '2020-12-04 00:00:00', 1),
(15, 8, 1, 'reg. ', 'fahsfsdjf', 18, '2019-05-10 00:00:00', '2019-05-13 00:00:00', 0),
(16, 8, 2, 'hello', 'dsfhsdjf sjhfu', 15, '2019-05-13 12:33:45', '2019-06-02 12:33:47', 1),
(17, 8, 3, 'this is ', 'hello hello', 13, '2019-05-16 15:58:56', '2019-05-23 15:58:57', 1),
(18, 8, 2, 'wrong  info ', 'shimul change your name', 15, '2019-05-16 16:46:09', '2019-05-17 16:46:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices_types`
--

CREATE TABLE `notices_types` (
  `id` int(11) NOT NULL,
  `title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `bootstrap_class` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'primary',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices_types`
--

INSERT INTO `notices_types` (`id`, `title`, `description`, `bootstrap_class`, `status`) VALUES
(1, 'Information ', 'this is information notice.', 'info', 1),
(2, 'warning', 'this is warning notice ', 'warning', 1),
(3, 'primary', 'this is primary notice ', 'primary', 1),
(4, 'success ', 'this is success notice ', 'success', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `status`) VALUES
(1, 'Management', 1),
(2, 'Trainer', 1),
(3, 'Student', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msisdn` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `image`, `email`, `msisdn`, `password`, `status`) VALUES
(6, 2, 'SD Bappi', 'http://localhost/fahim_atten2/uploads/users/photos/1564386035.JPG', 'trainer@gmail.com', '01681692786', 'e10adc3949ba59abbe56e057f20f883e', 1),
(8, 1, 'yousuf mahmud fahim', 'http://localhost/fahim_atten/uploads/users/photos/1558861831.jpg', 'fahim@gmail.com', '01627520284', 'e10adc3949ba59abbe56e057f20f883e', 1),
(9, 1, 'YMF', 'http://localhost/fahim_atten/uploads/users/photos/1559314927.jpg', 'yousuf@gmail.com', '01627520284', 'e10adc3949ba59abbe56e057f20f883e', 1),
(10, 2, 'fahim', '', 'mahmud@gmail.com', '01627520284', 'e10adc3949ba59abbe56e057f20f883e', 1),
(12, 2, 'robin', '', 'robin@gmail.com', '2465', 'e10adc3949ba59abbe56e057f20f883e', 1),
(13, 3, 'asdfg', 'http://localhost/fahim_atten/uploads/users/photos/no_image.png', 'aaaaa@gmailcom', '5445', 'e10adc3949ba59abbe56e057f20f883e', 1),
(19, 3, 'hhhh', '', 'hhh@gmail.com', '21645496', 'e10adc3949ba59abbe56e057f20f883e', 1),
(20, 3, 'Shah Alam Roven', 'http://localhost/fahim_atten2/uploads/users/photos/1564384700.jpg', 'student@gmail.com', '34598', 'e10adc3949ba59abbe56e057f20f883e', 1),
(22, 3, 'yousuf mahmud fahim', '', 'sut@gmail.com', '01627520284', 'e10adc3949ba59abbe56e057f20f883e', 1),
(23, 3, 'murad', '', 'murad@gmail.com', '018465489135', 'e10adc3949ba59abbe56e057f20f883e', 1),
(30, 2, 'bappi hossin', '', 'bappi@gamil.com', '231658469', 'e10adc3949ba59abbe56e057f20f883e', 1),
(31, 3, 'yousuf fahim', '', 'ajkhfjas@gmail.com', '01627520284', 'e10adc3949ba59abbe56e057f20f883e', 1),
(32, 3, 'hello', '', 'hello@gmail.com', '65449846123', 'e10adc3949ba59abbe56e057f20f883e', 1),
(34, 3, 'hi', '', 'hi@gmail.com', '321657498', 'e10adc3949ba59abbe56e057f20f883e', 1),
(35, 3, 'hello', '', 'aaaaa@gmail.com', '48788', 'e10adc3949ba59abbe56e057f20f883e', 1),
(38, 3, 'murad', '', 'murad2@gmail.com', '51321468', 'e10adc3949ba59abbe56e057f20f883e', 1),
(39, 3, 'nasir uddin', '', 'nshimul859@gmail.com', '01903372738', 'e10adc3949ba59abbe56e057f20f883e', 1),
(40, 3, 'tanzil', 'http://localhost/fahim_atten/uploads/users/photos/15584205514912.jpg', 'tanzil@gmail.com', '741852963', 'e10adc3949ba59abbe56e057f20f883e', 1),
(41, 3, 'dhrubo', 'http://localhost/fahim_atten/uploads/users/photos/no_image.png', 'dhrubo@gmail.com', '01824487548', 'e10adc3949ba59abbe56e057f20f883e', 1),
(42, 3, 'md nur uddin', 'http://localhost/fahim_atten/uploads/users/photos/no_image.png', 'nuruddin@gmail.com', '01852210335', 'e10adc3949ba59abbe56e057f20f883e', 1),
(43, 1, 'Shah Alam Roven', 'http://localhost/fahim_atten/uploads/users/photos/15643844057969.jpg', 'saroven@yahoo.com', '01833825028', 'e10adc3949ba59abbe56e057f20f883e', 1),
(44, 1, 'hridoy dey', 'http://localhost/fahim_atten/uploads/users/photos/no_image.png', 'hridoydey39@gmail.com', '01833205809', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_batch`
--

CREATE TABLE `user_batch` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `own_rating` int(1) DEFAULT NULL,
  `own_review` text COLLATE utf8mb4_unicode_ci,
  `got_rating` int(11) DEFAULT NULL,
  `got_review` text COLLATE utf8mb4_unicode_ci,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_batch`
--

INSERT INTO `user_batch` (`id`, `user_id`, `batch_id`, `own_rating`, `own_review`, `got_rating`, `got_review`, `status`) VALUES
(15, 23, 3, NULL, NULL, NULL, NULL, 1),
(16, 23, 13, NULL, NULL, NULL, NULL, 1),
(17, 23, 14, NULL, NULL, NULL, NULL, 1),
(18, 23, 15, NULL, NULL, NULL, NULL, 1),
(19, 34, 3, NULL, NULL, NULL, NULL, 1),
(20, 34, 13, NULL, NULL, NULL, NULL, 1),
(21, 35, 3, NULL, NULL, NULL, NULL, 1),
(22, 35, 13, NULL, NULL, NULL, NULL, 1),
(23, 35, 15, NULL, NULL, NULL, NULL, 1),
(24, 19, 3, NULL, NULL, NULL, NULL, 1),
(25, 19, 13, NULL, NULL, NULL, NULL, 1),
(26, 38, 3, 5, 'good', NULL, NULL, 1),
(27, 38, 14, NULL, NULL, NULL, NULL, 1),
(29, 20, 3, 5, 'awesome', NULL, NULL, 1),
(30, 20, 13, NULL, NULL, NULL, NULL, 1),
(42, 13, 3, NULL, NULL, NULL, NULL, 1),
(43, 13, 19, NULL, NULL, NULL, NULL, 1),
(44, 32, 14, NULL, NULL, NULL, NULL, 1),
(45, 32, 18, NULL, NULL, NULL, NULL, 1),
(46, 41, 3, NULL, NULL, NULL, NULL, 1),
(47, 41, 18, NULL, NULL, NULL, NULL, 1),
(48, 42, 13, NULL, NULL, NULL, NULL, 1),
(49, 42, 16, NULL, NULL, NULL, NULL, 1),
(50, 39, 3, NULL, NULL, NULL, NULL, 1),
(51, 39, 13, NULL, NULL, NULL, NULL, 1),
(52, 39, 14, NULL, NULL, NULL, NULL, 1),
(53, 39, 16, NULL, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_fk0` (`user_id`),
  ADD KEY `attendances_fk1` (`batch_id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `batches_fk0` (`trainer_id`),
  ADD KEY `batches_fk1` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notices_fk0` (`created_by`),
  ADD KEY `notices_fk1` (`notice_type_id`),
  ADD KEY `notices_fk2` (`batch_id`);

--
-- Indexes for table `notices_types`
--
ALTER TABLE `notices_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `users_fk0` (`role_id`);

--
-- Indexes for table `user_batch`
--
ALTER TABLE `user_batch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_batch_fk0` (`user_id`),
  ADD KEY `user_batch_fk1` (`batch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notices_types`
--
ALTER TABLE `notices_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_batch`
--
ALTER TABLE `user_batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `attendances_fk1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`);

--
-- Constraints for table `batches`
--
ALTER TABLE `batches`
  ADD CONSTRAINT `batches_fk0` FOREIGN KEY (`trainer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `batches_fk1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_fk0` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notices_fk1` FOREIGN KEY (`notice_type_id`) REFERENCES `notices_types` (`id`),
  ADD CONSTRAINT `notices_fk2` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_batch`
--
ALTER TABLE `user_batch`
  ADD CONSTRAINT `user_batch_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_batch_fk1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
