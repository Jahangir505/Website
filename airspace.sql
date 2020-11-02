-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 08:49 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `ban_id` int(10) UNSIGNED NOT NULL,
  `ban_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_subtitle` text COLLATE utf8mb4_unicode_ci,
  `ban_button` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_button_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_photo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`ban_id`, `ban_title`, `ban_subtitle`, `ban_button`, `ban_button_url`, `ban_photo`, `ban_status`, `created_at`, `updated_at`) VALUES
(2, 'assdasdasd', 'adsasdsa', 'adasdas', 'adasdasdas', 'banner_2_1523352281.jpg', 0, '2018-04-10 09:24:41', '2018-04-11 06:33:42'),
(3, 'safsdfdsfds', 'er e tert ', 'etetewt', 'sdfdsfs', 'banner_3_1523352619.jpg', 1, '2018-04-10 09:30:19', '2018-04-10 09:30:19'),
(4, 'Creative IT Institute', 'This is seriously amazing! Using bootstrap, literally all the code you need <br/> This is seriously amazing! Using bootstrap, literally all the code you need ', 'Read More', '#', 'banner_4_1523353275.jpg', 1, '2018-04-10 09:41:15', '2018-04-11 06:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `conus_id` int(10) UNSIGNED NOT NULL,
  `conus_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conus_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conus_sub` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_mess` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conus_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`conus_id`, `conus_name`, `conus_email`, `conus_sub`, `conus_mess`, `conus_status`, `created_at`, `updated_at`) VALUES
(1, 'Bappy Ch', 'bappy@gmail.com', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, neque!', 1, '2018-03-21 23:49:56', '2018-03-28 06:07:32'),
(2, 'Shamim Ahmed', 'shamim@gmail.com', ' Represented in HTML', 'omplete list of HTML entities with their numbers and names. Also included is a full list of ASCII characters that can be represented in HTML', 1, '2018-03-21 23:53:21', '2018-03-28 06:08:37'),
(3, 'Zahid Hasan', 'zahid@gmail.com', 'qewqe qwewqewq ewqeqw e', 'ometimes it is helpful to define multiple slots for a component. Let&#039;s modify our alert component to allow for the injection of a &quot;title&quot;. Named slots may be displayed by &quot;echoing&quot; the variable that matches their name:', 1, '2018-03-21 23:59:05', '2018-03-28 06:08:35'),
(4, 'Monirul Islam', 'monirul@gmail.com', 'adasdsa dasd', 'asdsa dasdasd asdasdasd asdasdsa asdasdas dasdas ', 1, '2018-03-22 06:49:03', '2018-03-28 06:08:32'),
(5, 'asdasdsa', 'adasds@gmail.com', 'asdas dsads a', 'dsad sadasd ', 1, '2018-04-11 05:24:19', NULL),
(6, 'sfsdfsdf sdfds', 'rtyrtyrt@gmail.com', 'sfsdfsd fsdf', 'sdf sdfsdf sd', 1, '2018-04-11 05:26:06', NULL),
(7, 'asdasdsa', 'adasds@gmail.com', 'adasdsa', 'asdasdasda', 1, '2018-04-11 05:27:07', NULL),
(8, 'asdasdsaasdad', 'adsad@dsdsd.sds', 'sfs fsdf sdfsdf', 'sdfsdf sdfsdfsd fsdf ', 1, '2018-04-11 05:30:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_22_052053_create_contactuses_table', 2),
(4, '2018_03_28_121818_create_user_roles_table', 3),
(5, '2018_03_28_124543_create_social_media_table', 4),
(6, '2018_04_09_122701_create_banners_table', 5),
(7, '2018_04_12_112347_create_page_content_categories_table', 6),
(8, '2018_04_12_113631_create_page_contents_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `pagecon_id` int(10) UNSIGNED NOT NULL,
  `pagecon_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagecon_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagecon_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagecon_button_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagecon_button_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagecon_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagecon_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_id` int(11) NOT NULL,
  `pagecon_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_contents`
--

INSERT INTO `page_contents` (`pagecon_id`, `pagecon_title`, `pagecon_subtitle`, `pagecon_details`, `pagecon_button_text`, `pagecon_button_url`, `pagecon_icon`, `pagecon_image`, `pc_id`, `pagecon_status`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT US', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id', '', '', '', 'pic_1_5645645645.png', 1, 1, '2018-04-12 06:00:00', NULL),
(2, 'WE BELIEVE IN GREAT IDEAS', '', '&lt;p&gt;Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n          <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n          <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>', 'Read More', '#', '', '', 2, 1, '2018-04-12 03:16:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_content_categories`
--

CREATE TABLE `page_content_categories` (
  `pc_id` int(10) UNSIGNED NOT NULL,
  `pc_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_content_categories`
--

INSERT INTO `page_content_categories` (`pc_id`, `pc_category_name`, `pc_status`, `created_at`, `updated_at`) VALUES
(1, 'Home: About Us', 1, '2018-04-12 02:07:00', NULL),
(2, 'Home: Great Ideas', 1, '2018-04-12 00:22:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `sm_id` int(10) UNSIGNED NOT NULL,
  `sm_facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sm_twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sm_youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sm_google` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sm_skype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sm_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sm_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`sm_id`, `sm_facebook`, `sm_twitter`, `sm_youtube`, `sm_google`, `sm_skype`, `sm_linkedin`, `sm_status`, `created_at`, `updated_at`) VALUES
(1, 'http://facebook.com/1', 'bqweqwewq', 'c', 'd', 'e', 'f', 1, NULL, '2018-03-29 06:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '5',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Zahid Hasan', 'zahid@gmail.com', '$2y$10$RfmT.KwmJdwHQiDL4Xh0vO17wz2XbvS8KY4FRZHFkM1BfjRr8hn0y', 1, 'GH7HVuEwZ3l1wucoMqEs1V20bXs9uzLXcksVaYLAaCZelmldvvHDCImlN4fx', 1, '2018-03-18 23:25:29', '2018-03-18 23:25:29'),
(2, 'Raju Ahamed', 'raju@gmail.com', '$2y$10$NBBOSKAZGcKvZiWRd/oBUuQwsbprt4oZ2JHqCagVz.6GZHom14bdW', 2, 'r8nrUf3GOuzLYeOn4vaANL1574ONWMIxMszjrbkifz09e95DwDJPzug04s11', 0, '2018-03-21 00:10:39', '2018-03-21 00:10:39'),
(3, 'Nipa Islam', 'nipa@gmail.com', '$2y$10$NLQtMbusc05/I.SVubL3wOEgqfzZ1CrVpnHApR4aKBKQMfDg26Epu', 3, 'N9gXTGgIrFSYI4fFyJ31LqPc4ETnx4iqtgNU2zFAvwZXcNLlP7kYn9tt2i9M', 1, '2018-03-28 06:36:10', '2018-03-28 06:36:10'),
(4, 'Roton Ahamed', 'roton@gmail.com', '$2y$10$hqkGtry4blWXHuebuMZxv.mXh2w5eZA3FTTeSgscYJmamYUhjouOi', 5, '1IY4RT7CksZTqECrPPW1eXBBK2NqpHJIkBCfUlITlJ7nCuJRh8ow5G2y0AuJ', 0, '2018-03-28 06:37:53', '2018-03-28 06:37:53'),
(5, 'Asif Hasan', 'asif@gmail.com', '$2y$10$1ryBhCsKw4cGIWQ.cH4elOmqIF.dtTrO7e7KKNqlu5vCkULXShhsO', 5, 'g42AJr1nUjDJLv9S6d8eZtTchfeuCSvxtAr7U3rPyORAaTIiuiKbwBH5m7dz', 1, '2018-03-28 06:42:48', '2018-03-28 06:42:48'),
(6, 'Sujon Ahamed', 'sujon@gmail.com', '$2y$10$0kUk9NqEHpV1/MTy2sg2C.DxPGOil3flq3hShzqRIgj6k3qE9jNAu', 5, 'utl00KizpQK8VGzP9DEiabuiixIIo1tiDbCCA6MuBmDYfzn5l6w0lfnw2MnA', 1, '2018-03-29 06:35:14', '2018-03-29 06:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_name`, `role_status`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 1, '2018-03-28 05:00:00', NULL),
(2, 'Admin', 1, '2018-03-28 10:24:00', NULL),
(3, 'Author', 1, '2018-03-28 10:00:00', NULL),
(4, 'Editor', 1, '2018-03-28 16:00:00', NULL),
(5, 'Subscriber', 1, '2018-03-28 14:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`conus_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`pagecon_id`);

--
-- Indexes for table `page_content_categories`
--
ALTER TABLE `page_content_categories`
  ADD PRIMARY KEY (`pc_id`),
  ADD UNIQUE KEY `page_content_categories_pc_category_name_unique` (`pc_category_name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`sm_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `user_roles_role_name_unique` (`role_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `ban_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `conus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `pagecon_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page_content_categories`
--
ALTER TABLE `page_content_categories`
  MODIFY `pc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `sm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
