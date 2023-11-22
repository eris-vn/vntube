-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 22, 2023 at 03:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webkhoahoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', 1, '2023-11-20 20:05:09', NULL),
(2, 'Bài học', 1, '2023-11-21 10:02:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `discounted_price` int DEFAULT NULL,
  `thumbnails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_preview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minutes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `name`, `slug`, `short_description`, `description`, `price`, `discounted_price`, `thumbnails`, `video_preview`, `minutes`, `created_at`, `updated_at`) VALUES
(1, 1, 'Xây Dựng Website với ReactJS', 'react', 'Xây Dựng Website với ReactJS', '<p>Tham gia c&aacute;c cộng đồng để c&ugrave;ng học hỏi, chia sẻ v&agrave; \"th&aacute;m th&iacute;nh\" xem F8 sắp c&oacute; g&igrave; mới nh&eacute;!</p>\r\n<ul style=\"list-style-type: none;\">\r\n<li style=\"list-style-type: disc;\">Fanpage:&nbsp;<a href=\"https://www.facebook.com/f8vnofficial\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.facebook.com/f8vnofficial</a></li>\r\n<li style=\"list-style-type: disc;\">Group:&nbsp;<a href=\"https://www.facebook.com/groups/649972919142215\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.facebook.com/groups/649972919142215</a></li>\r\n<li style=\"list-style-type: disc;\">Youtube:&nbsp;<a href=\"https://fullstack.edu.vn/external-url?continue=https%3A%2F%2Fwww.youtube.com%2FF8VNOfficial\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.youtube.com/F8VNOfficial</a></li>\r\n<li style=\"list-style-type: disc;\">Sơn Đặng:&nbsp;<a href=\"https://fullstack.edu.vn/external-url?continue=https%3A%2F%2Fwww.facebook.com%2Fsondnf8\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.facebook.com/sondnf8</a></li>\r\n</ul>', 0, 0, '/uploads/img/Genshin-Impact-Jakotsu-Mine.jpg', 'https://www.youtube.com/watch?v=Z26ciZ9fy4Y', '250', '2023-11-20 20:04:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `instructor_id` bigint UNSIGNED NOT NULL,
  `enrolled_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `chapter_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` tinyint(1) NOT NULL DEFAULT '1',
  `time` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `chapter_id`, `name`, `description`, `video_url`, `preview`, `time`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'ReactJS là gì? Tại sao nên học ReactJS?', '<p>ReactJS l&agrave; g&igrave;? Tại sao ch&uacute;ng ta chọn học React? Đ&oacute; l&agrave; 2 c&acirc;u hỏi về React thường được c&aacute;c bạn quan t&acirc;m, m&igrave;nh sẽ giải đ&aacute;p trong video n&agrave;y v&agrave; trong kh&oacute;a học ReactJS n&agrave;y nh&eacute;.</p>', 'https://www.youtube.com/watch?v=Z26ciZ9fy4Y', 1, 10, '2023-11-20 20:10:26', NULL),
(3, 1, 1, 'Domain là gì? Tên miền là gì?', '<p>Tham gia c&aacute;c cộng đồng để c&ugrave;ng học hỏi, chia sẻ v&agrave; \"th&aacute;m th&iacute;nh\" xem F8 sắp c&oacute; g&igrave; mới nh&eacute;!</p>\n<ul style=\"list-style-type: none;\">\n<li style=\"list-style-type: disc;\">Fanpage:&nbsp;<a href=\"https://www.facebook.com/f8vnofficial\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.facebook.com/f8vnofficial</a></li>\n<li style=\"list-style-type: disc;\">Group:&nbsp;<a href=\"https://www.facebook.com/groups/649972919142215\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.facebook.com/groups/649972919142215</a></li>\n<li style=\"list-style-type: disc;\">Youtube:&nbsp;<a href=\"https://fullstack.edu.vn/external-url?continue=https%3A%2F%2Fwww.youtube.com%2FF8VNOfficial\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.youtube.com/F8VNOfficial</a></li>\n<li style=\"list-style-type: disc;\">Sơn Đặng:&nbsp;<a href=\"https://fullstack.edu.vn/external-url?continue=https%3A%2F%2Fwww.facebook.com%2Fsondnf8\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.facebook.com/sondnf8</a></li>\n</ul>', 'https://www.youtube.com/watch?v=ZhnzPSDrhR0', 0, 150, '2023-11-22 13:33:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_11_13_214138_courses', 1),
(4, '2023_11_13_214916_chapters', 1),
(5, '2023_11_13_214929_lessons', 1),
(7, '2023_11_13_215858_comments', 1),
(8, '2023_11_14_104636_invoice', 1),
(9, '2023_11_15_091821_user_lessons', 1),
(10, '2023_11_21_101934_reviews', 2),
(11, '2023_11_13_215035_enrollments', 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nguyên Văn Sơn', 'erisvn@gmail.com', '7f71c4b149389525ca6b41c57a6d707c', '0', '0', '2023-11-20 20:04:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_lessons`
--

CREATE TABLE `user_lessons` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `lesson_id` bigint UNSIGNED NOT NULL,
  `completed` tinyint(1) NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapters_course_id_foreign` (`course_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_course_id_foreign` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_user_id_foreign` (`user_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrollments_user_id_foreign` (`user_id`),
  ADD KEY `enrollments_course_id_foreign` (`course_id`),
  ADD KEY `enrollments_instructor_id_foreign` (`instructor_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_user_id_foreign` (`user_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_chapter_id_foreign` (`chapter_id`),
  ADD KEY `lessons_course_id_foreign` (`course_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_user_id_foreign` (`user_id`),
  ADD KEY `review_course_id_foreign` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_lessons`
--
ALTER TABLE `user_lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_lessons_user_id_foreign` (`user_id`),
  ADD KEY `user_lessons_lesson_id_foreign` (`lesson_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_lessons`
--
ALTER TABLE `user_lessons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `enrollments_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `enrollments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_chapter_id_foreign` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `review_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_lessons`
--
ALTER TABLE `user_lessons`
  ADD CONSTRAINT `user_lessons_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_lessons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
