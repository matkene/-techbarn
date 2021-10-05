-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 12:20 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techbarn`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `slug`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Gucci', 'gucci', 1, '2021-09-30 13:07:24', '2021-09-30 13:07:24'),
(2, 'Stripe Miniskirt', 'mini', 1, '2021-09-30 13:11:26', '2021-09-30 13:11:26'),
(3, 'Leather Skirt', 'leather', 1, '2021-09-30 13:13:17', '2021-09-30 13:13:17'),
(4, 'APC Larry Hoodie', 'apc-larry', 1, '2021-10-02 18:31:26', '2021-10-02 18:31:26'),
(5, 'Reebok Vector', 'reebok', 1, '2021-10-02 18:34:24', '2021-10-02 18:34:24'),
(6, 'Stylish Native', 'stylish', 1, '2021-10-02 18:40:06', '2021-10-02 18:40:06'),
(7, 'Cardigans', 'cardigans', 1, '2021-10-02 19:06:50', '2021-10-02 19:06:50'),
(8, 'Pullovers', 'pullovers', 1, '2021-10-02 19:08:10', '2021-10-02 19:08:10'),
(9, 'Ralph Lauren', 'ralph-lauren', 1, '2021-10-02 19:13:53', '2021-10-02 19:13:53'),
(10, 'Puma', 'puma', 1, '2021-10-02 19:14:53', '2021-10-02 19:14:53'),
(11, 'Bea Shorts', 'bea', 1, '2021-10-02 19:41:47', '2021-10-02 19:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(7,2) NOT NULL DEFAULT 0.00,
  `total_price` double(7,2) NOT NULL DEFAULT 0.00,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `slug`, `image`, `is_active`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Dress', 'dress', 'http://localhost/Banner/zanacoutoure_2021-09-07_1631008281outcome2.png', 1, 1, '2021-09-30 12:50:31', '2021-09-30 12:50:31'),
(2, 'Hoodies', 'hoodies', 'http://localhost/Banner/zanacoutoure_2021-09-07_1631008281outcome2.png', 1, 1, '2021-09-30 12:59:14', '2021-09-30 12:59:14'),
(3, 'T-shirt', 't-shirt', 'http://localhost/Banner/zanacoutoure_2021-09-07_1631008281outcome2.png', 1, 1, '2021-09-30 12:59:14', '2021-09-30 12:59:14'),
(4, 'Native', 'native', 'http://localhost/Banner/zanacoutoure_2021-09-07_1631008281outcome2.png', 1, 1, '2021-09-30 12:59:14', '2021-09-30 12:59:14'),
(5, 'Shorts', 'shorts', 'http://localhost/Banner/zanacoutoure_2021-09-07_1631008281outcome2.png', 1, 1, '2021-09-30 12:59:14', '2021-09-30 12:59:14'),
(6, 'Skirt', 'skirt', 'http://localhost/Banner/zanacoutoure_2021-09-07_1631008281outcome2.png', 1, 1, '2021-09-30 12:59:14', '2021-09-30 12:59:14');

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
(5, '2021_09_27_100926_create_brands', 1),
(6, '2021_09_27_103143_create_categories', 1),
(7, '2021_09_27_105859_create_orders', 1),
(8, '2021_09_27_170010_create_products', 1),
(9, '2021_09_27_170743_create_order_details', 1),
(10, '2021_09_27_170810_create_order_histories', 1),
(11, '2021_09_27_170949_create_carts', 1),
(12, '2021_09_27_171042_create_wishlists', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_fee` decimal(8,2) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `total_price` double NOT NULL,
  `orderID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivered` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `payment_type`, `transaction_id`, `shipping_method`, `payment_method`, `shipping_fee`, `email`, `status`, `payment_status`, `total_price`, `orderID`, `delivered`, `created_at`, `updated_at`) VALUES
(1, 1, 'Matkene Chizea', NULL, NULL, NULL, NULL, '400.00', 'matkenefaiths@gmail.com', 'pending', 'pending', 7440, '1090357089470', 0, '2021-10-04 10:52:42', '2021-10-04 10:52:42'),
(2, 1, 'Matkene Chizea', NULL, NULL, NULL, NULL, '700.00', 'matkenefaiths@gmail.com', 'pending', 'pending', 7310, '868247687140', 0, '2021-10-05 20:22:26', '2021-10-05 20:22:26'),
(3, 1, 'Matkene Chizea', NULL, NULL, NULL, NULL, '400.00', 'matkenefaiths@gmail.com', 'pending', 'pending', 7440, '627368895566', 0, '2021-10-05 20:23:02', '2021-10-05 20:23:02'),
(4, 1, 'Matkene Chizea', NULL, NULL, NULL, NULL, '800.00', 'matkenefaiths@gmail.com', 'pending', 'pending', 7000, '1078920981154', 0, '2021-10-05 21:03:20', '2021-10-05 21:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_fee` decimal(8,2) DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_ordered` int(11) DEFAULT NULL,
  `delivered` tinyint(1) NOT NULL DEFAULT 0,
  `unit_price` decimal(8,2) DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `user_id`, `product_name`, `orderno`, `color`, `shipping_fee`, `size`, `brand_id`, `status`, `image`, `description`, `quantity_ordered`, `delivered`, `unit_price`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 1, 'The Earth Polo', '1090357089470', NULL, '400.00', NULL, NULL, 'looked', NULL, NULL, 1, 0, '7440.00', 'pending', '2021-10-04 10:52:42', '2021-10-04 10:52:42'),
(2, 2, 7, 1, 'Royal Challengers Bangalore Colourblocked Mens Polo', '868247687140', NULL, '700.00', NULL, NULL, 'looked', NULL, NULL, 1, 0, '7310.00', 'pending', '2021-10-05 20:22:26', '2021-10-05 20:22:26'),
(3, 3, 6, 1, 'The Earth Polo', '627368895566', NULL, '400.00', NULL, NULL, 'paid', NULL, NULL, 1, 0, '7440.00', 'pending', '2021-10-05 20:23:02', '2021-10-05 20:23:02'),
(4, 4, 1, 1, 'Plain Skirt', '1078920981154', NULL, '800.00', NULL, NULL, 'looked', NULL, NULL, 1, 0, '7000.00', 'pending', '2021-10-05 21:03:21', '2021-10-05 21:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_histories`
--

CREATE TABLE `order_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_detail_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('matkenefaiths@gmail.com', '$2y$10$qtHs5VWVCP0LR7kzhhEBbexhjrafhgq/7X9lezvZjAUa36JRi34ii', '2021-09-30 10:58:37');

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
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_method_id` int(11) NOT NULL DEFAULT 1,
  `product_name` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_unit` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_package_size` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimated_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_supplied` bigint(20) NOT NULL DEFAULT 0,
  `quantity_purchased` bigint(20) NOT NULL DEFAULT 0,
  `available_quantity` bigint(20) NOT NULL DEFAULT 0,
  `product_image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_stock` tinyint(1) NOT NULL DEFAULT 1,
  `old_price` decimal(15,2) NOT NULL DEFAULT 0.00,
  `new_price` decimal(15,2) NOT NULL DEFAULT 0.00,
  `shipping_fee` decimal(15,2) DEFAULT 0.00,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `ratings` decimal(8,2) NOT NULL DEFAULT 0.00,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `promoted` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `user_id`, `brand_id`, `payment_method_id`, `product_name`, `product_description`, `tags`, `delivery_location`, `product_brand_name`, `processing_type`, `production_company`, `selling_unit`, `single_package_size`, `product_material`, `product_weight`, `size`, `estimated_time`, `dimension`, `quantity_supplied`, `quantity_purchased`, `available_quantity`, `product_image`, `in_stock`, `old_price`, `new_price`, `shipping_fee`, `discount`, `color`, `views`, `ratings`, `featured`, `promoted`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 2, 1, 'Plain Skirt', 'The adorable Flockton Bag is a downsized must-have in fresh colours and prints. The pure cotton and real leather trims make is an accessory with quality as well as looks.', NULL, NULL, 'Stripe Miniskirt', NULL, NULL, '1', '1', 'Cotton', NULL, '10', NULL, NULL, 0, 0, 0, 'feature-1.jpg', 1, '0.00', '7000.00', '800.00', NULL, NULL, 0, '4.00', 1, 1, 1, '2021-10-02 18:26:00', '2021-10-02 18:26:00'),
(2, 2, 1, 4, 1, 'APC Larry Hoodie', 'APC Larry hoodie makes a beautiful addition to anyone’s fall wardrobe. Made with 100% organic cotton, the understated hoodie (which comes in navy blue or anise green) perfectly exemplifies A.P.C.’s commitment to quality.', NULL, NULL, 'APC Larry Hoodie', NULL, NULL, '1', '10', NULL, NULL, '10', NULL, NULL, 0, 0, 0, 'feature-2.jpg', 1, '0.00', '7900.00', '700.00', NULL, NULL, 0, '0.00', 4, 4, 1, '2021-10-02 18:35:00', '2021-10-02 18:35:00'),
(3, 4, 1, 6, 1, 'Stylish Mens Native', 'Command the right attention in this stylish mans native wear as you show up! ', NULL, NULL, 'Stylish Mens', NULL, NULL, '1', NULL, NULL, NULL, '10', NULL, NULL, 0, 0, 0, 'feature-3.jpg', 1, '0.00', '8700.00', '890.00', NULL, NULL, 0, '4.00', 3, 3, 1, '2021-10-02 18:45:35', '2021-10-02 18:45:35'),
(4, 2, 1, 7, 1, 'Chimayo Shawl Collar Cardigan', 'Chimayo Shawl Collar Cardigan gets in on the sportswear game with this checked half-zip top made from Italian stretch jersey with flatlock seams and thumbhole cuffs.', NULL, NULL, 'Chimayo Shawl Collar Cardigan', NULL, NULL, '1', NULL, NULL, '10', '10', NULL, NULL, 0, 0, 0, 'feature-4.jpg', 1, '0.00', '4900.00', '90.00', NULL, NULL, 0, '0.00', 4, 4, 1, '2021-10-02 19:08:38', '2021-10-02 19:08:38'),
(5, 1, 1, 1, 1, 'House of Versace', 'The adorable Flockton Bag is a downsized must-have in fresh colours and prints. The pure cotton and real leather trims make is an accessory with quality as well as looks.', NULL, NULL, 'Gucci', NULL, NULL, '1', NULL, NULL, '10', '10', NULL, NULL, 0, 0, 0, 'feature-6.jpg', 1, '0.00', '9830.00', '300.00', NULL, NULL, 0, '0.00', 6, 6, 1, '2021-10-02 19:19:13', '2021-10-02 19:19:13'),
(6, 3, 1, 9, 1, 'The Earth Polo', 'The Earth Polo is crafted from an innovative fabric made entirely from plastic bottles and dyed using a waterless process', NULL, NULL, 'Ralph Lauren', NULL, NULL, NULL, '1', NULL, NULL, '10', NULL, NULL, 0, 0, 0, 'feature-5.jpg', 1, '0.00', '7440.00', '400.00', NULL, NULL, 0, '4.00', 5, 5, 1, '2021-10-02 19:24:01', '2021-10-02 19:24:01'),
(7, 3, 1, 10, 1, 'Royal Challengers Bangalore Colourblocked Mens Polo', 'Sport the colours of the team with pride with the Royal Challengers Bangalore Colourblocked Men\'s Polo. This polo need no special occasion because it\'s got everything you need', NULL, NULL, 'Puma', NULL, NULL, '1', NULL, NULL, NULL, '1', NULL, NULL, 0, 0, 0, 'feature-8.jpg', 1, '0.00', '7310.00', '700.00', NULL, NULL, 0, '0.00', 8, 8, 1, '2021-10-02 19:29:28', '2021-10-02 19:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `can_login` tinyint(1) NOT NULL DEFAULT 0,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phoneno`, `address`, `email`, `password`, `can_login`, `is_verified`, `is_active`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Matkene', 'Chizea', '08057515350', '1 London Street', 'matkenefaiths@gmail.com', '$2y$10$Nt9w.NDieizhwJohQtZw7OTwdXLKDcTIjj/mzi938iR2hZiLAVT4i', 0, 0, 1, NULL, NULL, '2021-09-29 16:07:27', '2021-09-29 16:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(7,2) NOT NULL DEFAULT 0.00,
  `total_price` double(7,2) NOT NULL DEFAULT 0.00,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user_id`, `quantity`, `color`, `price`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 1, NULL, 7310.00, 7310.00, 1, '2021-10-05 20:19:05', '2021-10-05 20:19:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_created_by_foreign` (`created_by`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_created_by_foreign` (`created_by`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_histories_order_detail_id_foreign` (`order_detail_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_histories`
--
ALTER TABLE `order_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD CONSTRAINT `order_histories_order_detail_id_foreign` FOREIGN KEY (`order_detail_id`) REFERENCES `order_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
