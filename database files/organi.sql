-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2022 at 02:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin1@gmail.com', NULL, '$2y$10$NYl4ggqikKDZPy3hfVwJq.1HUd/H7sG6dK4kQamqtUPgiblelsQAO', NULL, '2022-02-02 08:47:33', '2022-02-02 08:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `Attribuites`
--

CREATE TABLE `Attribuites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Attribuites`
--

INSERT INTO `Attribuites` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'color', 'color', '2022-02-02 11:45:46', '2022-02-02 11:45:46'),
(2, 'size', 'size', '2022-02-02 11:45:55', '2022-02-02 11:45:55'),
(3, 'Brand', 'brand', '2022-02-02 11:46:08', '2022-02-02 11:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `attribuite_values`
--

CREATE TABLE `attribuite_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribuite_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribuite_values`
--

INSERT INTO `attribuite_values` (`id`, `name`, `attribuite_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Red', 1, 'red', '2022-02-02 11:46:22', '2022-02-02 11:46:22'),
(2, 'blue', 1, 'blue', '2022-02-02 11:46:33', '2022-02-02 11:46:33'),
(3, 'Green', 1, 'green', '2022-02-02 11:46:47', '2022-02-02 11:46:47'),
(4, 'Small', 2, 'small', '2022-02-02 11:47:10', '2022-02-02 11:47:10'),
(5, 'Tiny', 2, 'tiny', '2022-02-02 11:47:24', '2022-02-02 11:47:24'),
(6, 'Large', 2, 'large', '2022-02-02 11:47:35', '2022-02-02 11:47:35'),
(7, 'Elhala', 3, 'elhala', '2022-02-02 11:47:48', '2022-02-02 11:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `comment`, `image`, `name`, `desc`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'null', '1643810074-first log.jpg', 'first log', 'product decription  product decription product decription product decription product decription', 'first-log', '2022-02-02 11:54:34', '2022-02-02 11:54:34'),
(3, 'null', '1643810125-third Blog.jpg', 'third Blog', 'product decription  product decription product decription product decription product decription', 'third-blog', '2022-02-02 11:55:25', '2022-02-02 11:55:25'),
(4, 'null', '1643810146-fourth Blog.jpg', 'fourth Blog', 'product decription  product decription product decription product decription product decription', 'fourth-blog', '2022-02-02 11:55:46', '2022-02-02 11:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cookie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `qty`, `cookie`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'user22@gmail.com', 6, 1, '61fae4b119e18', NULL, '2022-02-02 18:24:22', '2022-02-02 18:51:49'),
(2, '61fae4b119e18', 1, 1, '61fae4b119e18', NULL, '2022-02-02 18:24:35', '2022-02-02 18:51:54'),
(3, 'user23@gmail.com', 6, 3, '61fb9a7cb3ef7', NULL, '2022-02-03 07:52:29', '2022-02-06 03:51:28'),
(4, '61fb9a7cb3ef7', 2, 1, '61fb9a7cb3ef7', NULL, '2022-02-03 07:52:49', '2022-02-06 04:02:49'),
(5, '61fb9a7cb3ef7', 3, 1, '61fb9a7cb3ef7', NULL, '2022-02-03 07:52:57', '2022-02-06 04:02:42'),
(6, 'add2@gmail.com', 3, 2, '61ffc45bd118c', NULL, '2022-02-06 10:56:30', '2022-02-06 10:59:00'),
(7, 'add58@gmail.com', 4, 4, '62022645eee37', NULL, '2022-02-08 06:33:30', '2022-02-08 06:35:55'),
(8, NULL, 3, 3, '62022645eee37', NULL, '2022-02-08 09:53:21', '2022-02-08 10:32:42'),
(9, NULL, 5, 1, '62022645eee37', NULL, '2022-02-08 09:53:30', '2022-02-08 09:53:30'),
(10, '62022645eee37', 6, 1, '62022645eee37', NULL, '2022-02-08 10:20:25', '2022-02-08 10:20:25'),
(11, NULL, 2, 1, '62022645eee37', NULL, '2022-02-08 10:21:07', '2022-02-08 10:21:07'),
(12, NULL, 3, 1, '62039b20f35aa', NULL, '2022-02-09 10:40:45', '2022-02-09 10:40:45'),
(13, '62039b20f35aa', 5, 22, '62039b20f35aa', NULL, '2022-02-09 10:41:29', '2022-02-09 11:12:15'),
(14, '62039b20f35aa', 6, 1, '62039b20f35aa', NULL, '2022-02-09 11:07:00', '2022-02-09 11:07:00'),
(15, '62039b20f35aa', 4, 1, '62039b20f35aa', NULL, '2022-02-09 11:07:03', '2022-02-09 11:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'fresh-fruit', '1643809444-fresh-fruite-jpg', 'fresh-fruite', NULL, NULL),
(2, 'Drinks', '1643809915-Drinks-jpg', 'drinks', NULL, NULL),
(3, 'Fast-Food', '1643809942-Fast-Food-jpg', 'fast-food', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE `domains` (
  `id` int(10) UNSIGNED NOT NULL,
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenant_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'yuser', 'user@gmail.com', 'nmessaa', '2022-02-02 18:26:58', '2022-02-02 18:26:58'),
(2, 'admin11', 'userm@kkk.com', 'new ', '2022-02-02 18:40:20', '2022-02-02 18:40:20'),
(3, 'fresh-fruite', 'mmm@gmail.com', 'jjjjj', '2022-02-03 09:23:42', '2022-02-03 09:23:42'),
(4, 'admin', 'user26@gmail.com', 'bbbb', '2022-02-06 03:52:24', '2022-02-06 03:52:24'),
(5, 'Red', 'add2@gmail.com', 'mmmm', '2022-02-06 10:59:19', '2022-02-06 10:59:19');

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
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2019_09_15_000010_create_tenants_table', 1),
(28, '2019_09_15_000020_create_domains_table', 1),
(29, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(30, '2022_01_20_124654_main_categori', 1),
(31, '2022_01_20_170943_products', 1),
(32, '2022_01_21_133055_sub_categories', 1),
(33, '2022_01_22_084743_admins', 1),
(34, '2022_01_23_180045_carts', 1),
(35, '2022_01_24_141748_blogs', 1),
(36, '2022_01_25_091042_attribuites', 1),
(37, '2022_01_25_091553_atrribuite_values', 1),
(38, '2022_01_29_112450_create_messages_table', 1),
(39, '2022_01_29_124045_orders', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `State` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Order_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `country`, `Address`, `apartment`, `State`, `city`, `Postcode`, `Phone`, `email`, `Order_notes`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'user one', 'user one last name', 'egpt user one', 'cairo user one', NULL, 'user one state', 'user one city', '11111', '1111111', 'one@gmail.com', 'one one one', 'user-one', '2022-02-02 09:36:40', '2022-02-02 09:36:40'),
(2, 'Mahmoud', 'Elshahat', 'egypt', 'Benha - qalyubia - Egypt', NULL, 'Qalyubia', 'Benha', '17346', '0109 474 3050', 'mahmoud.m.elshaht@gmail.com', 'nnnnnnnnnn', 'mahmoud', '2022-02-02 18:30:22', '2022-02-02 18:30:22'),
(3, 'bbbb', 'bbb', 'egy', 'cari', NULL, 'Qalyubia', 'nnn', '17346', '0109 474 3050', 'user22@gmail.com', 'nnnnnnnnnn', 'bbbb', '2022-02-02 18:39:47', '2022-02-02 18:39:47'),
(4, 'Mahmoud', 'Elshahat', 'egypt', 'Benha - qalyubia - Egypt', NULL, 'Qalyubia', 'Benha', '17346', '0109 474 3050', 'bbbb@gmail.com', 'nnnnnnnnnn', 'mahmoud', '2022-02-03 09:24:30', '2022-02-03 09:24:30'),
(5, 'Mahmoud', 'Elshahat', 'egypt', 'Benha - qalyubia - Egypt', NULL, 'Qalyubia', 'Benha', '17346', '0109 474 3050', 'user23@gmail.com', 'one one one', 'mahmoud', '2022-02-06 03:51:28', '2022-02-06 03:51:28'),
(6, 'Mahmoud', 'Elshahat', 'egypt', 'Benha - qalyubia - Egypt', NULL, 'Qalyubia', 'Benha', '17346', '0109 474 3050', 'add2@gmail.com', 'one one one', 'mahmoud', '2022-02-06 10:59:00', '2022-02-06 10:59:00'),
(7, 'Mahmoud', 'Elshahat', 'Egypt', 'Benha - qalyubia - Egypt', NULL, 'Qalyubia', 'Benha', '17346', '01094743050', 'add58@gmail.com', 'one one one', 'mahmoud', '2022-02-08 06:35:55', '2022-02-08 06:35:55');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `rate` int(11) NOT NULL DEFAULT 1,
  `quntity` int(11) NOT NULL,
  `descount_Type` int(11) NOT NULL,
  `attr_name_id` bigint(20) UNSIGNED NOT NULL,
  `attr_value_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `image`, `price`, `sale`, `rate`, `quntity`, `descount_Type`, `attr_name_id`, `attr_value_id`, `categorie_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'meet', 'product decription  product decription product decription product decription product decription', '1643809741-meet.jpg', 200, 0, 1, 20, 0, 1, 1, 1, 'meet', NULL, NULL),
(2, 'Banana', 'product decription  product decription product decription product decription product decription', '1643809792-Banana.jpg', 60, 10, 1, 50, 0, 2, 5, 1, 'banana', NULL, NULL),
(3, 'fig', 'product decription  product decription product decription product decription product decription', '1643809832-fig.jpg', 300, 50, 3, 40, 1, 3, 7, 1, 'fig', NULL, NULL),
(4, 'Grabe', 'product decription  product decription product decription product decription product decription', '1643809894-Grabe.jpg', 100, 10, 1, 50, 1, 2, 6, 1, 'grabe', NULL, NULL),
(5, 'porger', 'product decription  product decription product decription product decription product decription', '1643809991-porger.jpg', 150, 50, 1, 60, 1, 3, 7, 3, 'porger', NULL, NULL),
(6, 'watermilom', 'product decription  product decription product decription product decription product decription', '1643810047-watermilom.jpg', 50, 0, 1, 40, 0, 2, 6, 1, 'watermilom', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `desc`, `image`, `categorie_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'sub categori', 'product decription  product decription product decription product decription product decription', '1644309589-sub categori-png', 2, 'sub-categori', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `created_at`, `updated_at`, `data`) VALUES
('225e6901-ab2e-46fa-a138-f421f34fc039', '2022-02-08 12:41:34', '2022-02-08 12:41:34', '{\"updated_at\":\"2022-02-08 14:41:34\",\"created_at\":\"2022-02-08 14:41:34\",\"name\":\"test\",\"domain\":\"test_domain\",\"database\":\"newtest\",\"tenancy_db_name\":\"tenant225e6901-ab2e-46fa-a138-f421f34fc039\"}'),
('3133120c-bd0f-4b42-ba72-ffdc2096fd54', '2022-02-08 12:42:36', '2022-02-08 12:42:36', '{\"updated_at\":\"2022-02-08 14:42:36\",\"created_at\":\"2022-02-08 14:42:36\",\"name\":\"test\",\"domain\":\"test_domain\",\"database\":\"newtest\",\"tenancy_db_name\":\"tenant3133120c-bd0f-4b42-ba72-ffdc2096fd54\"}'),
('90721cd4-3157-4d69-85ab-d421abff28fd', '2022-02-08 12:41:44', '2022-02-08 12:41:44', '{\"updated_at\":\"2022-02-08 14:41:44\",\"created_at\":\"2022-02-08 14:41:44\",\"name\":\"test\",\"domain\":\"test_domain\",\"database\":\"newtest\",\"tenancy_db_name\":\"tenant90721cd4-3157-4d69-85ab-d421abff28fd\"}'),
('c3de1437-75f8-4f81-a13b-95e1d2daac5a', '2022-02-08 12:41:36', '2022-02-08 12:41:36', '{\"updated_at\":\"2022-02-08 14:41:36\",\"created_at\":\"2022-02-08 14:41:36\",\"name\":\"test\",\"domain\":\"test_domain\",\"database\":\"newtest\",\"tenancy_db_name\":\"tenantc3de1437-75f8-4f81-a13b-95e1d2daac5a\"}'),
('c5c8ca0b-b357-4091-920d-4ad9fe560df5', '2022-02-08 12:41:38', '2022-02-08 12:41:38', '{\"updated_at\":\"2022-02-08 14:41:38\",\"created_at\":\"2022-02-08 14:41:38\",\"name\":\"test\",\"domain\":\"test_domain\",\"database\":\"newtest\",\"tenancy_db_name\":\"tenantc5c8ca0b-b357-4091-920d-4ad9fe560df5\"}'),
('dbf4882f-110b-4ccf-8806-7675bd8bd050', '2022-02-08 12:43:32', '2022-02-08 12:43:32', '{\"updated_at\":\"2022-02-08 14:43:32\",\"created_at\":\"2022-02-08 14:43:32\",\"name\":\"test\",\"domain\":\"test_domain\",\"database\":\"newtest\",\"tenancy_db_name\":\"tenantdbf4882f-110b-4ccf-8806-7675bd8bd050\"}'),
('fb88f383-90ad-4d1f-8b86-1303de62d784', '2022-02-08 12:40:53', '2022-02-08 12:40:53', '{\"updated_at\":\"2022-02-08 14:40:53\",\"created_at\":\"2022-02-08 14:40:53\",\"name\":\"test\",\"domain\":\"test_domain\",\"database\":\"newtest\",\"tenancy_db_name\":\"tenantfb88f383-90ad-4d1f-8b86-1303de62d784\"}'),
('fc43b69e-aaa8-435c-b3b4-22f0887f91d5', '2022-02-08 12:41:42', '2022-02-08 12:41:42', '{\"updated_at\":\"2022-02-08 14:41:42\",\"created_at\":\"2022-02-08 14:41:42\",\"name\":\"test\",\"domain\":\"test_domain\",\"database\":\"newtest\",\"tenancy_db_name\":\"tenantfc43b69e-aaa8-435c-b3b4-22f0887f91d5\"}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Postcode` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `country`, `address`, `city`, `Postcode`, `Phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user one', 'user one last name', 'egpt user one', 'cairo user one', 'user one city', 11111, 11111, 'one@gmail.com', NULL, '$2y$10$3v21KW4LtTgqf3r9o/CiEO0.gbYk01MYsnd/1coIpoZBbXtNd4H1q', NULL, '2022-02-02 09:36:40', '2022-02-02 09:36:40'),
(2, 'Mahmoud', 'Elshahat', 'egypt', 'Benha - qalyubia - Egypt', 'Benha', 17346, 17346, 'mahmoud.m.elshaht@gmail.com', NULL, '$2y$10$y5h.iW3figIi.wtkEkGXweyIxBruPg3HxwMbGIIDB4B0/kJTr8Yyu', NULL, '2022-02-02 18:30:22', '2022-02-02 18:30:22'),
(3, 'bbbb', 'bbb', 'egy', 'cari', 'nnn', 17346, 17346, 'user22@gmail.com', NULL, '$2y$10$y5Hxv2iVoSkqYUm.tcaqU.GbbYBhDCvWfJ5JF30EtQlVtGqrnAMfC', NULL, '2022-02-02 18:39:47', '2022-02-02 18:39:47'),
(4, 'Mahmoud', 'Elshahat', 'egypt', 'Benha - qalyubia - Egypt', 'Benha', 17346, 17346, 'bbbb@gmail.com', NULL, '$2y$10$6sxYIAh0tJTdvD3JCNg/zOsrB0I56dJAVbgh6OUyKqSq1Ij2y9TiC', NULL, '2022-02-03 09:24:31', '2022-02-03 09:24:31'),
(5, 'Mahmoud', 'Elshahat', 'egypt', 'Benha - qalyubia - Egypt', 'Benha', 17346, 17346, 'user23@gmail.com', NULL, '$2y$10$nyFVTfNOjkaYugczfzW/H.vuYFlRbz94QUTMdCktvavKN1qQYnsNa', NULL, '2022-02-06 03:51:28', '2022-02-06 03:51:28'),
(6, 'Mahmoud', 'Elshahat', 'egypt', 'Benha - qalyubia - Egypt', 'Benha', 17346, 17346, 'add2@gmail.com', NULL, '$2y$10$qXWIbRpPY3IkVfItGciUhuHct/I1R7nrXqLivfHNEjhKK/rKXPmga', NULL, '2022-02-06 10:59:00', '2022-02-06 10:59:00'),
(7, 'Mahmoud', 'Elshahat', 'Egypt', 'Benha - qalyubia - Egypt', 'Benha', 17346, 17346, 'add58@gmail.com', NULL, '$2y$10$e/fnkHxiD2knBEaZ.njNleLq0weqqH7I0frnQpiJ6bE9DDmFdv9ZG', NULL, '2022-02-08 06:35:55', '2022-02-08 06:35:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `Attribuites`
--
ALTER TABLE `Attribuites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribuite_values`
--
ALTER TABLE `attribuite_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `domains_domain_unique` (`domain`),
  ADD KEY `domains_tenant_id_foreign` (`tenant_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Attribuites`
--
ALTER TABLE `Attribuites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attribuite_values`
--
ALTER TABLE `attribuite_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `domains`
--
ALTER TABLE `domains`
  ADD CONSTRAINT `domains_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
