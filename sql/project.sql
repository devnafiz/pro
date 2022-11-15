-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 05:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `des`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rare Sugar Market: Key Drivers and Opportunities', '<p><span style=\"color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">D-tagatose, allulose, and other natural sweeteners serve as low-calorie sweeteners. These sweeteners are replacing table sugar in the food industry. Hence, the rare sugar market is anticipated to show significant growth during the forecast period of 2022 and 2032.</span></p>', 'backend/overview/1741797612565411.jpg', 'rare-sugar-market-key-drivers-and-opportunities', 1, '2022-08-21 12:47:27', '2022-08-21 12:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$GixZjIDWPbr/.8.B78oAA.QAs26igdUXIArnTNNdz6xq4Zmn47ME2', NULL, NULL, '202208281523001.jpg', '2022-08-28 09:07:43', '2022-08-28 09:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `allcountries`
--

CREATE TABLE `allcountries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nicename` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auto_detect_geos`
--

CREATE TABLE `auto_detect_geos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `cat`, `status`, `created_at`, `updated_at`) VALUES
(1, 'backend/banner/1741600342580029.jpg', 'hotel', 1, '2022-08-19 08:27:28', '2022-08-19 08:31:56'),
(2, 'backend/banner/1741604697933654.jpg', 'contact', 1, '2022-08-19 09:41:10', '2022-08-19 09:41:10'),
(3, 'backend/banner/1741606010681590.jpg', 'page', 1, '2022-08-19 10:02:02', '2022-08-19 10:02:02'),
(4, 'backend/banner/1741606248407335.jpg', 'news', 1, '2022-08-19 10:05:48', '2022-08-19 10:05:48'),
(5, 'backend/banner/1742152750139319.jpg', 'tour', 1, '2022-08-25 10:52:13', '2022-08-25 10:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payu_enable` tinyint(1) DEFAULT NULL,
  `instamojo_enable` tinyint(1) DEFAULT NULL,
  `stripe_enable` tinyint(1) DEFAULT NULL,
  `paypal_enable` tinyint(1) DEFAULT NULL,
  `fb_login_enable` tinyint(1) DEFAULT NULL,
  `google_login_enable` tinyint(1) DEFAULT NULL,
  `pincode_system` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `paytm_enable` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `razorpay` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currenceys`
--

CREATE TABLE `currenceys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchange_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_places`
--

CREATE TABLE `faq_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genrals`
--

CREATE TABLE `genrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fevicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` int(10) UNSIGNED NOT NULL,
  `right_click` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspect` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_login` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genrals`
--

INSERT INTO `genrals` (`id`, `project_name`, `email`, `title`, `currency_code`, `currency_symbol`, `pincode`, `copyright`, `logo`, `fevicon`, `address`, `f_content`, `mobile`, `login`, `right_click`, `inspect`, `guest_login`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dream Travel', 'nafiz@gmail.com', 'dream', '', 'fa fa-dolar', NULL, 'all Right reserve one', 'backend/general/1741341614973763.png', NULL, 'Dahaka ,bangldesh', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '012764374', 0, '0', '1', '0', '1', NULL, '2022-08-24 10:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `locales`
--

CREATE TABLE `locales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `def` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locales`
--

INSERT INTO `locales` (`id`, `lang_code`, `name`, `def`, `status`, `created_at`, `updated_at`) VALUES
(1, 'en', 'English', 1, 1, NULL, NULL),
(2, 'hi', 'Hindi', 0, 1, NULL, NULL),
(3, 'es', 'Spanish', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(356) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `name`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"stay hotel\"}', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42990289.85125594!2d-137.48034145382087!3d48.878819550727954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b68a40abc00001%3A0xf1662b43d3e680a0!2sTribal%20Nations%20Maps!5e0!3m2!1sen!2sus!4v1660502714458!5m2!1sen!2sus', '1', '2022-08-14 12:42:42', '2022-08-14 12:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_03_170012_create_permission_tables', 1),
(6, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(7, '2022_11_15_135105_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `multi_currencies`
--

CREATE TABLE `multi_currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `row_id` int(11) DEFAULT NULL,
  `default_currency` tinyint(1) DEFAULT NULL,
  `currency_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` int(11) DEFAULT NULL,
  `image` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `place_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'backend/place/multi-image/1741037561786319.jpg', '2022-08-13 03:26:46', NULL),
(2, 1, 'backend/place/multi-image/1741064438468071.jpg', '2022-08-13 10:33:58', NULL),
(3, 5, 'backend/place/multi-image/1742154140409511.jpg', '2022-08-25 11:14:19', NULL),
(4, 5, 'backend/place/multi-image/1742154165392953.jpg', '2022-08-25 11:14:43', NULL),
(5, 5, 'backend/place/multi-image/1742154337308079.jpg', '2022-08-25 11:17:27', NULL),
(6, 6, 'backend/place/multi-image/1742343188956281.jpg', '2022-08-27 13:19:10', NULL),
(7, 6, 'backend/place/multi-image/1742343199134817.jpg', '2022-08-27 13:19:19', NULL),
(8, 6, 'backend/place/multi-image/1742343211543325.jpg', '2022-08-27 13:19:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `slug`, `image`, `des`, `user`, `cat_id`, `about`, `status`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"The demand in the Fishinguation of US$ 5.3 Bn in20223\"}', 'the-demand-in-the-fishinguation-of-us-53-bn-in20223', 'backend/news/1742234408511039.jpg', '{\"en\":\"Key players and manufacturers are taking immense efforts in making heavy investments in R&D for innovating as well as advancing the processes by which the machinery is deployed. These efforts will in turn contribute towards expansion of industry as well as its capabilities in the forthcoming years. Manufacturers are taking immense efforts in producing containers that can be customized depending on the needs of the customers.\"}', NULL, 1, NULL, 1, '2022-08-14 00:59:39', '2022-08-26 08:30:09'),
(3, '{\"en\":\"Analysts that have been part of this report development made sure\"}', 'analysts-that-have-been-part-of-this-report-development-made-sure', 'backend/news/1741119467354780.jpg', '{\"en\":\"Analysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sure\"}', NULL, 1, NULL, 1, '2022-08-14 01:08:38', '2022-08-14 01:08:38'),
(5, '{\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit.\"}', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit', 'backend/news/1742233721962912.jpg', '{\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum laoreet risus, sit amet lacinia orci fermentum a. Maecenas at dui sit amet risus molestie laoreet eget nec velit. Etiam pellentesque sapien id odio rhoncus tincidunt. Etiam blandit, libero ac congue luctus, velit lacus blandit velit, id bibendum tellus lorem ac dui. Curabitur vel metus a nulla maximus eleifend in id turpis. Ut mattis nisi metus, sed varius turpis facilisis at. Sed tincidunt nisl at diam bibendum dignissim. Fusce congue lectus non sodales cursus. Proin interdum finibus purus, nec imperdiet nisl consequat sed. Donec venenatis tortor a massa varius vestibulum. Nulla tempus rhoncus placerat.\"}', NULL, 2, NULL, 1, '2022-08-26 08:19:15', '2022-08-26 08:19:15'),
(6, '{\"en\":\"Vivamus interdum, odio at lobortis porttitor,\"}', 'vivamus-interdum-odio-at-lobortis-porttitor', 'backend/news/1742234733382327.jpg', '{\"en\":\"Vivamus interdum, odio at lobortis porttitor, leo sapien tincidunt tellus, eget convallis turpis nibh vel sapien. Praesent fermentum justo a justo eleifend tincidunt. Fusce fringilla nunc felis, at sollicitudin purus cursus vel. Phasellus turpis dui, rutrum malesuada nibh vel, venenatis finibus velit. Maecenas augue tortor, vestibulum eu pharetra sed, tempor vel justo. Etiam vel viverra lacus. Fusce laoreet justo at neque commodo, vel scelerisque purus ultricies. Nulla quis feugiat dolor. Quisque ac lacinia magna, quis convallis est. Praesent quam nunc, porta in lorem in, feugiat facilisis dolor.\"}', NULL, 1, NULL, 1, '2022-08-26 08:35:18', '2022-08-26 08:35:18'),
(7, '{\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit.\"}', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit', 'backend/news/1742235298046842.jpg', '{\"en\":\"Vivamus interdum, odio at lobortis porttitor, leo sapien tincidunt tellus, eget convallis turpis nibh vel sapien. Praesent fermentum justo a justo eleifend tincidunt. Fusce fringilla nunc felis, at sollicitudin purus cursus vel. Phasellus turpis dui, rutrum malesuada nibh vel, venenatis finibus velit. Maecenas augue tortor, vestibulum eu pharetra sed, tempor vel justo. Etiam vel viverra lacus. Fusce laoreet justo at neque commodo, vel scelerisque purus ultricies. Nulla quis feugiat dolor. Quisque ac lacinia magna, quis convallis est. Praesent quam nunc, porta in lorem in, feugiat facilisis dolor.\\r\\n\\r\\nDonec gravida enim bibendum dapibus feugiat. Nam id sagittis neque. Sed fermentum ipsum eu libero luctus auctor. Quisque quam turpis, efficitur vitae erat et, gravida ornare arcu. Sed sem ante, vehicula vel vestibulum at, mattis eu nulla. Proin eleifend orci sit amet sollicitudin luctus. Nunc ac purus vel augue faucibus iaculis. Donec ac arcu fermentum, posuere justo in, imperdiet dui. Quisque sit amet turpis ligula. Sed malesuada lacus nec nisi feugiat vehicula. Vivamus consectetur in ligula at cursus. Sed eget justo sed elit tristique viverra et sit amet mi. Curabitur vitae laoreet neque. Mauris ac scelerisque neque, vitae fermentum nisi. Aenean lobortis et odio vel pulvinar. Suspendisse sit amet nunc dolor.\\r\\n\\r\\nDonec porta imperdiet velit. Quisque finibus eu metus ut rutrum. Donec vel ipsum velit. Cras bibendum euismod lorem. Donec molestie vel dolor aliquet posuere. Morbi sollicitudin maximus mauris, quis finibus libero malesuada molestie. Cras sed est at neque finibus consequat quis sit amet lectus.\\r\\n\\r\\nPellentesque risus ex, venenatis ut odio bibendum, u\"}', NULL, 1, NULL, 1, '2022-08-26 08:44:17', '2022-08-26 08:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `news_cats`
--

CREATE TABLE `news_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_cats`
--

INSERT INTO `news_cats` (`id`, `title`, `icon`, `image`, `description`, `position`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'Travel', NULL, NULL, 'Travel every  where', 1, '1', '0', '2022-08-13 13:18:50', '2022-08-13 13:18:50'),
(2, 'Tour', NULL, NULL, 'Where is place', 2, '1', '0', '2022-08-13 13:19:18', '2022-08-13 13:19:18'),
(3, 'Hotel', NULL, NULL, 'New add', 3, '1', '0', '2022-08-28 09:42:47', '2022-08-28 09:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tour_id`, `user_id`, `type`, `start_date`, `end_date`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(6, '1', '1', 'hotel', '2022-08-19', '2022-08-27', NULL, '0', '2022-08-16 21:44:58', '2022-08-16 21:44:58'),
(7, '1', '1', 'hotel', '2022-08-18', '2022-08-20', '340', '1', '2022-08-16 21:46:48', '2022-08-16 21:46:48'),
(8, '4', '1', 'Hotel', '2022-08-28', '2022-08-30', '42.75', '0', '2022-08-26 10:02:36', '2022-08-26 10:02:36'),
(9, '4', '1', 'Hotel', '2022-08-28', '2022-08-30', '42.75', '0', '2022-08-26 10:04:06', '2022-08-26 10:04:06'),
(10, '4', '1', 'Hotel', '2022-08-28', '2022-08-30', '42.75', '0', '2022-08-26 10:20:36', '2022-08-26 10:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` tinyint(4) DEFAULT NULL,
  `header` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `des`, `slug`, `footer`, `header`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About us', '{\"en\":\"<p style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">D-tagatose, allulose, and other natural sweeteners serve as low-calorie sweeteners. These sweeteners are replacing table sugar in the food industry. Hence, the rare sugar market is anticipated to show significant growth during the forecast period of 2022 and 2032.one<\\/p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">Download Report Sample @&nbsp;<a style=\\\"box-sizing: border-box; color: #428bca; text-decoration-line: none;\\\" href=\\\"https:\\/\\/www.futuremarketinsights.com\\/reports\\/sample\\/rep-gb-15039\\\">https:\\/\\/www.futuremarketinsights.com\\/reports\\/sample\\/rep-gb-15039<\\/a><\\/p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">Rare Sugar Market: Key Drivers and Opportunities<\\/p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">During the onset of the COVID-19 pandemic, the entire world realized the importance of health and wellness. This aspect led to the growth of the rare sugar market owing to the rise in popularity of healthy food and beverage among the global populace. Furthermore, the increase in the sales of dietary supplements, food, beverage, pharmaceuticals, and others during the pandemic eventually may bring significant growth to the rare sugar market. During the lockdowns, other businesses got affected but the food industry and pharmaceutical sector were under the essential category so the supply of the food and pharmaceuticals was smooth. These factors proved to be growth boosters for the rare sugar market.<\\/p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">The escalating use of D-mannose in pharmaceuticals is due to the presence of glycosylation in it which aids in ameliorating symptoms of urinary infections. Additionally, the rare sugar solutions are nutritious and low-calorie supplements to improve metabolism and the overall health may bring multiple growth opportunities for the rare sugar market during the forecast period.<\\/p>\\r\\n<p style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">The rising demand for natural cosmetics has led to the penetration of rare sugar into the cosmetic industry. The rare sugar solutions act as skin conditioners and preservatives. In addition, the awareness among the consumers regarding the ingredients present in the products is likely to boost the growth of the rare sugar market.<\\/p>\"}', 'about-us', 0, 0, 1, '2022-08-18 21:53:20', '2022-08-18 22:46:10'),
(3, 'privecy', '{\"en\":\"<p><span style=\\\"color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\\\">During the onset of the COVID-19 pandemic, the entire world realized the importance of health and wellness. This aspect led to the growth of the rare sugar market owing to the rise in popularity of healthy food and beverage among the global populace. Furthermore, the increase in the sales of dietary supplements, food, beverage, pharmaceuticals, and others during the pandemic eventually may bring significant growth to the rare sugar market. During the lockdowns, other businesses got affected but the food industry and pharmaceutical sector were under the essential category so the supply of the food and pharmaceuticals was smooth. These factors proved to be growth boosters for the rare sugar market.<\\/span><\\/p>\\r\\n<p><span style=\\\"color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\\\">During the onset of the COVID-19 pandemic, the entire world realized the importance of health and wellness. This aspect led to the growth of the rare sugar market owing to the rise in popularity of healthy food and beverage among the global populace. Furthermore, the increase in the sales of dietary supplements, food, beverage, pharmaceuticals, and others during the pandemic eventually may bring significant growth to the rare sugar market. During the lockdowns, other businesses got affected but the food industry and pharmaceutical sector were under the essential category so the supply of the food and pharmaceuticals was smooth. These factors proved to be growth boosters for the rare sugar market.<\\/span><\\/p>\\r\\n<p><span style=\\\"color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\\\">During the onset of the COVID-19 pandemic, the entire world realized the importance of health and wellness. This aspect led to the growth of the rare sugar market owing to the rise in popularity of healthy food and beverage among the global populace. Furthermore, the increase in the sales of dietary supplements, food, beverage, pharmaceuticals, and others during the pandemic eventually may bring significant growth to the rare sugar market. During the lockdowns, other businesses got affected but the food industry and pharmaceutical sector were under the essential category so the supply of the food and pharmaceuticals was smooth. These factors proved to be growth boosters for the rare sugar market.<\\/span><\\/p>\\r\\n<p><span style=\\\"color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\\\">During the onset of the COVID-19 pandemic, the entire world realized the importance of health and wellness. This aspect led to the growth of the rare sugar market owing to the rise in popularity of healthy food and beverage among the global populace. Furthermore, the increase in the sales of dietary supplements, food, beverage, pharmaceuticals, and others during the pandemic eventually may bring significant growth to the rare sugar market. During the lockdowns, other businesses got affected but the food industry and pharmaceutical sector were under the essential category so the supply of the food and pharmaceuticals was smooth. These factors proved to be growth boosters for the rare sugar market.<\\/span><\\/p>\"}', 'privecy', 1, 0, 1, '2022-08-18 23:49:37', '2022-08-25 11:49:05'),
(4, 'Lime House', '{\"en\":\"<p>&nbsp;<\\/p>\\r\\n<h2 style=\\\"background-color: #ffffff; margin: 0px 0px 10px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; text-align: justify;\\\">What is Lorem Ipsum?<\\/h2>\\r\\n<p><span style=\\\"color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\\\">During the onset of the COVID-19 pandemic, the entire world realized the importance of health and wellness. This aspect led to the growth of the rare sugar market owing to the rise in popularity of healthy food and beverage among the global populace. Furthermore, the increase in the sales of dietary supplements, food, beverage, pharmaceuticals, and others during the pandemic eventually may bring significant growth to the rare sugar market. During the lockdowns, other businesses got affected but the food industry and pharmaceutical sector were under the essential category so the supply of the food and pharmaceuticals was smooth. These factors proved to be growth boosters for the rare sugar market.<\\/span><\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<table style=\\\"border-collapse: collapse; width: 100.043%; height: 89.5832px;\\\" border=\\\"1\\\">\\r\\n<tbody>\\r\\n<tr style=\\\"height: 22.3958px;\\\">\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">SL<\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">order<\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">Information<\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">user<\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">Name<\\/td>\\r\\n<td style=\\\"width: 14.8582%; height: 22.3958px;\\\">comment<\\/td>\\r\\n<\\/tr>\\r\\n<tr style=\\\"height: 22.3958px;\\\">\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">1<\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\"><strong style=\\\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\\\">Lorem Ipsum<\\/strong><\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\"><strong style=\\\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\\\">Lorem Ipsum<\\/strong><\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">454<\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\"><strong style=\\\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\\\">Lorem Ipsum<\\/strong><\\/td>\\r\\n<td style=\\\"width: 14.8582%; height: 22.3958px;\\\">&nbsp;<\\/td>\\r\\n<\\/tr>\\r\\n<tr style=\\\"height: 22.3958px;\\\">\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">2<\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\"><strong style=\\\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\\\">Lorem Ipsum<\\/strong><\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\"><strong style=\\\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\\\">Lorem Ipsum<\\/strong><\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">4543<\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\"><strong style=\\\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\\\">Lorem Ipsum<\\/strong><\\/td>\\r\\n<td style=\\\"width: 14.8582%; height: 22.3958px;\\\">&nbsp;<\\/td>\\r\\n<\\/tr>\\r\\n<tr style=\\\"height: 22.3958px;\\\">\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">3<\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\"><strong style=\\\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\\\">Lorem Ipsum<\\/strong><\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\"><strong style=\\\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\\\">Lorem Ipsum<\\/strong><\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\">232<\\/td>\\r\\n<td style=\\\"width: 14.8528%; height: 22.3958px;\\\"><strong style=\\\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\\\">Lorem Ipsum<\\/strong><\\/td>\\r\\n<td style=\\\"width: 14.8582%; height: 22.3958px;\\\">&nbsp;<\\/td>\\r\\n<\\/tr>\\r\\n<\\/tbody>\\r\\n<\\/table>\\r\\n<div id=\\\"Content\\\" style=\\\"margin: 0px; padding: 0px 0px 0px 40px; position: relative; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: center; background-color: #ffffff;\\\">\\r\\n<div id=\\\"Panes\\\" style=\\\"margin: 15px 0px 0px; padding: 0px 0px 0px 40px;\\\"><\\/div>\\r\\n<\\/div>\"}', 'lime-house', 0, 1, 1, '2022-08-18 23:52:44', '2022-08-25 11:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mainimage` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_name` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `location` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `long_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `heading`, `des`, `mainimage`, `type`, `slug`, `p_name`, `sale_price`, `discount_price`, `location`, `status`, `long_des`, `feature`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'The demand in the Fishing Reels Market grew', 'by year-on-year (YoY) rate of 4.3% in 2021, reaching a market valuation of US$ 5.3 Bn in 2021.\\r\\n                   Managed relational databases systems and web development and web services\\r\\nManaged and maintained development of PHP backend for dynamic database driven websites\\r\\nProvided technical support in the assurance of quality systems and system changes', 'backend/place/1740984499814039.jpg', 'Hotel', 'by-year-on-year-yoy-rate-of-43-in-2021', 'Biodegradable plastic', 400, 15, 'dhaka ,bangladesh', '1', NULL, NULL, '17-08-2022', '2022-08-11', '2022-08-12 13:23:23', '2022-08-26 10:00:35'),
(2, 'Recently we have received many complaints from users', 'Recently we have received many complaints from users about site-wide blocking of their own and blocking of their own activities please go to the settings off state, please visit：Recently we have received many complaints from users about site-wide blocking of their own and blocking of their own activities please go to the settings off state, please visit：', 'backend/place/1741919930374246.jpg', 'Hotel', 'recently-we-have-received-many-complaints-from-users-about', 'hotel seraton', 45, 10, 'dhaka', '1', 'Recently we have received many complaints from users about site-wide blocking of their own and blocking of their own activities please go to the settings off state, please visit：Recently we have received many complaints from users about site-wide blocking of their own and blocking of their own activities please go to the settings off state, please visit：', '<p>Recently we have received many c Recently we have received many c Recently we have received many c</p>', '2022-08-11', '2022-08-10', '2022-08-22 21:11:39', '2022-08-26 10:00:17'),
(3, 'Recently we have received many complaints from', 'Recently we have received many complaints from users about site-wide blocking of their own and blocking of their own activities please go to the settings off state, please visit', 'backend/place/1741920863632945.jpg', 'Tour', 'recently-we-have-received-many-complaints-from', 'dhaka', 400, NULL, 'dhahka bangladesh', '1', 'Recently we have received many complaints from users about site-wide blocking of their own and blocking of their own activities please go to the settings off state, please visitRecently we have received many complaints from users about site-wide blocking of their own and blocking of their own activities please go to the settings off state, please visit', '<ul>\r\n<li>Recently we have received many</li>\r\n<li>complaints from users about site-wide blocking of</li>\r\n<li>their own and blocking of their own activities please</li>\r\n<li>go to the settings off state, please visit</li>\r\n</ul>', '2022-08-11', '2022-08-17', '2022-08-22 21:26:29', '2022-08-26 09:59:43'),
(4, 'There are many variations of passages', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightlyThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly', 'backend/place/1742062906862662.jpg', 'Hotel', 'there-are-many-variations-of-passages-of-lorem-ipsum', 'sheraton', 45, 5, 'dhaka, bangladesh', '1', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly', '<ul>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">There are many variations of passages</span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> of Lorem Ipsum available, but the majority </span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">have suffered alteration in some form,</span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> by injected humour, or randomised words which </span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">don\'t look even slightly</span></li>\r\n</ul>', '2022-08-25', '2022-08-17', '2022-08-24 11:04:12', '2022-08-26 10:01:13'),
(5, 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typeset.', 'backend/place/1742153182260638.jpg', 'Tour', 'lorem-ipsum-is-simply-dummy-text-of-the-printing', 'Havana', 500, 20, 'Havana ,Quba', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<ul>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">t is a long established fact that a reader</span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> will be distracted by the readable conte</span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">nt of a page when looking at its layout. </span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">The point of using Lorem Ipsum is that it has </span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">a more-or-less normal distribution of</span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> letters, as opposed to using</span></li>\r\n</ul>', '2022-08-11', '2022-08-11', '2022-08-25 10:56:09', '2022-08-26 09:59:09'),
(6, 'voluptates repudiandae sint et molestiae non', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'backend/place/1742343162620953.jpg', 'Hotel', 'voluptates-repudiandae-sint-et-molestiae-non', 'Madrid', 300, 20, 'ogand , Colmbia', '1', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">At vero eos et accusamus et iusto </span></p>\r\n<ul>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">odio dignissimos ducimus qui blanditiis praesentium </span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">voluptatum deleniti atque corrupti quos dolores et</span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> quas molestias excepturi sint occaecati cupiditate </span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">non provident, similique sunt in culpa qui officia</span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> deserunt mollitia animi, id est laborum et dolorum</span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> fuga. Et harum quidem rerum facilis est et </span></li>\r\n<li><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">expedita distinctio. Nam libero tempore,&nbsp;</span></li>\r\n</ul>', '2022-08-03', '2022-08-10', '2022-08-27 13:18:44', '2022-08-27 13:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `place_attributes`
--

CREATE TABLE `place_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attr_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_include` varchar(266) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popular_des`
--

CREATE TABLE `popular_des` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `image` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popular_des`
--

INSERT INTO `popular_des` (`id`, `title`, `Pname`, `des`, `slug`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'The growing penetration of walk-in', 'Dhaka', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra luctus tristique. Nulla ante libero, condimentum vel justo sit amet, ullamcorper faucibus nunc. In egestas eget metus in congue. Suspendisse potenti. Nullam consequat nisl sed pharetra suscipit. Maecenas ut consectetur arcu, ut ultrices quam. Proin a velit velit. Ut eu tincidunt nisi. Proin id diam non nunc scelerisque congue sit amet sit amet quam. Donec viverra nulla elit, a viverra nibh congue ac.\r\n\r\nDuis dapibus, leo a ultrices tincidunt, justo nisi condimentum risus, a tempor purus tortor sit amet enim. Nullam vulputate auctor tempus. Morbi non suscipit dui. Quisque sit amet diam ac est vehicula iaculis non quis magna. Pellentesque aliquam neque tincidunt velit malesuada ultrices. Nulla facilisi. Vestibulum faucibus lacus sit amet luctus laoreet. Phasellus sagittis ac enim sit amet tincidunt. Praesent id tellus nec enim efficitur aliquet. Pellentesque quis libero turpis. Donec lectus odio, faucibus ut lorem sed, blandit commodo dui. Nunc iaculis sem non nulla elementum, eleifend ultricies lacus tempor. Maecenas interdum magna eget vestibulum tincidunt. Phasellus feugiat suscipit leo, id dignissim nulla mollis at.', 'lorem-ipsum-dolor-sit-amet-consectetur', 1, 'backend/destination/1741289341795895.jpg', '2022-08-15 22:08:43', '2022-08-25 12:06:38'),
(2, 'Because oak wood pellets contain l', 'Bankok', 'The best wood pellets for heating are made entirely of sawdust from softwoods because they produce less smoke and residue, saving time on maintenance and cleaning and preventing pollution of the environment.\r\n\r\nIn recent years, the pellets market has expanded due to increased demand from both industrial applications in large-scale power plants and small-scale applications in domestic heating', '', 1, 'backend/destination/1741290506502651.jpg', '2022-08-15 22:21:40', '2022-08-15 22:27:15'),
(3, 'The standard chunk of Lorem', 'Islambad', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'the-standard-chunk-of-lorem', 1, 'backend/destination/1741290646236951.jpg', '2022-08-15 22:29:27', '2022-08-15 22:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mata_author` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bing_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `mata_author`, `meta_tag`, `meta_description`, `google_analytics`, `bing_analytics`, `created_at`, `updated_at`) VALUES
(1, 'These methods test a couple of simple cases.one', 'D-tagatose, allulose, and other natural sweeteners serve', 'D-tagatose, allulose, and other natural sweeteners serve as low-calorie sweeteners. These sweeteners are replacing table sugar in the food industry. Hence, th', 'D-tagatose, allulose, and other natural sweeteners serve as low-calorie sweeteners. These sweeteners are replacing table sugar in the food industry. Hence, th', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GsoMUkDzSiFoYPfFgM9eZpilf5NEPU1YZDdLCp2e', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicjVodmx0VFdyZjVaUDZEU1BMVkpldWIxc1o3VGxtMzdPNHM5RXVKZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRtOGpEUnJvaFYyMWd5azBHNjBQNnQuaUhxZXpMT0xKR2lGSzZKOHJyT0l1YXRmUG1haWNxYSI7fQ==', 1661711341),
('mx4v4oKENTJH29DrZqpd7UOUE6K59KRY0d0kASgo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.42', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaU5ZajRORWF6OEJ0QnVmTjFHRGtHSElrQ2c5cXYyUkJIczhGbnNWUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9nZW5lcmFsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1668528120),
('ZQQresmLz0WW68GGLjJxGwPAOLVmwZtPT1cDSqW3', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Mobile Safari/537.36 Edg/104.0.1293.70', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHRCQXUxT3JXYldndWlrRWFlTkFidElyVDJGbm5jdlN2VWFDUGJWZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob3RlbC9ib29raW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1661711411);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_by` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `child` int(10) UNSIGNED DEFAULT NULL,
  `grand_id` int(10) UNSIGNED DEFAULT NULL,
  `topheading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buttonname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btntextcolor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btnbgcolor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moredesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moredesccolor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `link_by`, `category_id`, `child`, `grand_id`, `topheading`, `heading`, `buttonname`, `btntextcolor`, `btnbgcolor`, `moredesc`, `moredesccolor`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, '{\"en\":\"he demand in the\"}', '{\"en\":\"The demand in the Fishing\"}', '{\"en\":\"read\"}', NULL, NULL, NULL, NULL, 1, 'backend/slider/1741156922300342.jpg', '2022-08-14 11:03:57', '2022-08-14 11:03:57'),
(2, NULL, NULL, NULL, NULL, '{\"en\":\"he demand in the\"}', '{\"en\":\"testsb test one hopew\"}', '{\"en\":\"more\"}', NULL, NULL, NULL, NULL, 1, 'backend/slider/1741157161429355.jpg', '2022-08-14 11:07:46', '2022-08-14 11:07:46'),
(3, NULL, NULL, NULL, NULL, '{\"en\":\"he demand in the\"}', '{\"en\":\"The demand in the Fishing Reels Market\"}', '{\"en\":\"more\"}', NULL, NULL, NULL, NULL, 1, 'backend/slider/1741157850222270.jpg', '2022-08-14 11:18:42', '2022-08-14 11:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_category_id_foreign` (`category_id`),
  ADD KEY `sliders_child_foreign` (`child`),
  ADD KEY `sliders_grand_id_foreign` (`grand_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
