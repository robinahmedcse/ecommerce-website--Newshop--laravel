-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 12:28 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel_newshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin@gmail.com', '$2y$10$b1fBkzytkEYY.TCuSWAiVOfQwJAcyyi9Kv2X640veU8tEZIE2wQO6', 'Iycr8tAdHUnUyfW1alQS5qAqXhJWLTK6AIsbLNH4Ulk2cBIAP2xgySwD9Utb', '2017-11-21 18:06:41', '2017-11-21 18:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'Man', '<p>All Man Collection</p>', 1, '2017-11-22 08:05:44', '2017-11-22 16:17:18'),
(2, 'Woman', 'Woman Collection', 1, '2017-11-22 08:10:32', '2017-11-22 12:02:25'),
(3, 'Kids', 'Kids collection', 1, '2017-11-22 08:11:04', '2017-11-22 12:01:37'),
(4, 'Phone', 'Phone collection', 0, '2017-11-22 08:11:17', '2017-11-22 12:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `email`, `password`, `phone`, `address`, `thana`, `post_office`, `district`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'user1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01677942640', 'aaaaaa', 'Tangail', '1900', 'Tangail', 'Bangladesh', NULL, '2017-11-26 18:53:32', '2017-11-26 18:53:32'),
(2, 'user2', 'user2@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1677942640', 'ashekpur,tangail.', 'tangail', '1900', 'tangail', 'Bangladesh', NULL, '2017-11-27 09:56:03', '2017-11-27 09:56:03'),
(3, 'user3', 'user3@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01677942640', 'ashekpur,tangail.', 'tangail', '1900', 'tangail', 'Bangladesh', NULL, '2017-11-27 12:10:11', '2017-11-27 12:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `manufacture_id` int(10) UNSIGNED NOT NULL,
  `manufacture_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacture_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manufacture_id`, `manufacture_name`, `manufacture_description`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'Arong', '<p>Arong s</p>', 1, '2017-11-22 17:28:29', '2017-11-23 15:42:08'),
(2, 'Le Reve', '<p>ajfsdjfidsfh</p>', 1, '2017-11-23 15:41:56', '2017-11-23 15:41:56'),
(3, 'Cats Eye', '<p>Cats Eye kdnvsdkngskdng</p>', 1, '2017-11-23 15:49:06', '2017-11-23 15:49:06'),
(4, 'yellow', '<p>yellow</p>', 1, '2017-11-23 15:49:38', '2017-11-23 15:49:38'),
(5, 'Rang', '<p>lzsfmodskjfdskojfs</p>', 1, '2017-11-23 15:50:19', '2017-11-23 15:50:19');

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
(1, '2014_10_12_000000_create_admins_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_11_22_101442_create_categories_table', 2),
(5, '2017_11_22_183109_create_subCategories_table', 3),
(6, '2017_11_22_101515_create_manufactures_table', 4),
(7, '2017_11_22_101536_create_products_image_table', 5),
(8, '2017_11_22_101536_create_products_table', 5),
(9, '2017_11_26_200014_create_customers_table', 6),
(10, '2017_11_26_195348_create_shippings_table', 7),
(11, '2017_11_26_200044_create_payments_table', 8),
(12, '2017_11_27_011813_create_orders_table', 8),
(13, '2017_11_27_013402_create_order_details_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(4, 1, 2, '1,380.00', 'pending', '2017-11-26 20:12:12', '2017-11-26 20:12:12'),
(5, 2, 3, '1,725.00', 'pending', '2017-11-27 09:56:55', '2017-11-27 09:56:55'),
(6, 1, 3, '3,450.00', 'pending', '2017-11-27 15:02:26', '2017-11-27 15:02:26'),
(7, 1, 3, '3,450.00', 'pending', '2017-11-27 15:06:05', '2017-11-27 15:06:05'),
(8, 1, 3, '1,380.00', 'pending', '2017-11-27 15:08:16', '2017-11-27 15:08:16'),
(9, 1, 3, '1,380.00', 'pending', '2017-11-27 15:10:40', '2017-11-27 15:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 4, 9, 'Black Tshirt', 1200.00, 1, '2017-11-26 20:12:12', '2017-11-26 20:12:12'),
(2, 5, 8, 'Black Tshirt', 1500.00, 1, '2017-11-27 09:56:56', '2017-11-27 09:56:56'),
(3, 6, 8, 'Black Tshirt', 1500.00, 1, '2017-11-27 15:02:26', '2017-11-27 15:02:26'),
(4, 7, 8, 'Black Tshirt', 1500.00, 1, '2017-11-27 15:06:05', '2017-11-27 15:06:05'),
(5, 8, 9, 'Black Tshirt', 1200.00, 1, '2017-11-27 15:08:17', '2017-11-27 15:08:17'),
(6, 9, 9, 'Black Tshirt', 1200.00, 1, '2017-11-27 15:10:41', '2017-11-27 15:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(2, 4, 'CashOnDelivery', 'pending', '2017-11-26 20:12:12', '2017-11-26 20:12:12'),
(3, 5, 'CashOnDelivery', 'pending', '2017-11-27 09:56:55', '2017-11-27 09:56:55'),
(4, 6, 'Paypal', 'pending', '2017-11-27 15:02:26', '2017-11-27 15:02:26'),
(5, 7, 'Paypal', 'pending', '2017-11-27 15:06:05', '2017-11-27 15:06:05'),
(6, 8, 'Paypal', 'pending', '2017-11-27 15:08:16', '2017-11-27 15:08:16'),
(7, 9, 'Paypal', 'pending', '2017-11-27 15:10:41', '2017-11-27 15:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(10) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_Short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_dscription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category_id`, `sub_category_id`, `manufacture_id`, `product_price`, `product_quantity`, `product_Short_description`, `product_long_dscription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(6, 'Saree', 2, 4, 3, 2500.00, 10, 'this is a beautiful saree', 'sare is', 1, NULL, NULL),
(7, 'Shirt', 1, 1, 2, 1500.00, 10, 'fdfdfdfd', 'xfcxfdsfdd', 0, NULL, NULL),
(8, 'Black Tshirt', 1, 1, 4, 1500.00, 10, 'jfdfdh dfjdjfhdjhf', 'djfdjfdjf djfndjfdj fdfndjfnd', 1, NULL, NULL),
(9, 'Black Tshirt', 1, 1, 2, 1200.00, 10, 'DSKJDKSJ', 'SKADKSAJ ', 1, NULL, NULL),
(10, 'Woman Tshirt-A', 2, 1, 4, 1500.00, 10, 'A T-shirt is a style of unisex fabric shirt named after the T shape of its body and sleeves. It normally has short sleeves and a round neckline, known as a crew neck, which lacks a colla', 'ZDXSAKDJ', 1, NULL, NULL),
(11, 'White Kamiz', 2, 5, 4, 2500.00, 10, 'kjksjdskjd', 'NCKNZJCSAIOJD', 1, NULL, NULL),
(12, 'Woman Tshirt', 2, 1, 5, 1200.00, 10, 'A T-shirt is a style of unisex fabric shirt named after the T shape of its body and sleeves. It normally has short sleeves and a round neckline, known as a crew neck, which lacks a colla', 'A T-shirt is a style of unisex fabric shirt named after the T shape of its body and sleeves. It normally has short sleeves and a round neckline, known as a crew neck, which lacks a colla', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_image_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_label` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_image_id`, `product_id`, `image_url`, `image_label`) VALUES
(1, 6, 'public/productImage/i9.jpg', 1),
(2, 6, 'public/productImage/i10.jpg', 2),
(5, 7, 'public/productImage/woo4.jpg', 1),
(6, 7, 'public/productImage/woo4.jpg', 2),
(7, 8, 'public/productImage/p15.jpg', 1),
(8, 8, 'public/productImage/p16.jpg', 2),
(9, 9, 'public/productImage/p17.jpg', 1),
(10, 9, 'public/productImage/p18.jpg', 2),
(11, 10, 'public/productImage/p5.jpg', 1),
(12, 10, 'public/productImage/p6.jpg', 2),
(13, 11, 'public/productImage/p13.jpg', 1),
(14, 11, 'public/productImage/p14.jpg', 2),
(15, 12, 'public/productImage/p19.jpg', 1),
(16, 12, 'public/productImage/p20.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`shipping_id`, `name`, `email`, `phone`, `address`, `thana`, `post_office`, `district`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'user1@gmail.com', '01677942640', 'aaaaaa', 'Tangail', '1900', 'Tangail', 'Bangladesh', NULL, '2017-11-26 19:02:45', '2017-11-26 19:02:45'),
(2, 'user1', 'user1@gmail.com', '01677942640', 'aaaaaa', 'Tangail', '1900', 'Tangail', 'Bangladesh', NULL, '2017-11-26 19:14:25', '2017-11-26 19:14:25'),
(3, 'Robin Ahmed', 'user2@gmail.com', '1677942640', 'ashekpur,tangail.', 'tangail', '1900', 'tangail', 'Bangladesh', NULL, '2017-11-27 09:56:21', '2017-11-27 09:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_category_id` int(10) UNSIGNED NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_category_id`, `sub_category_name`, `Sub_category_description`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'Tshirt', 'djasdfsajdhasjdhAA', 1, '2017-11-22 13:08:10', '2017-11-22 13:08:10'),
(2, 'Shirt', '<p>djasdfsajdhasjdhAA</p>', 1, '2017-11-22 13:12:03', '2017-11-22 13:12:03'),
(3, 'Pant', '<p>pant</p>', 1, '2017-11-22 13:13:16', '2017-11-22 13:13:16'),
(4, 'Saree', '<p>saree</p>', 1, '2017-11-22 13:13:55', '2017-11-22 13:13:55'),
(5, 'lehengas', '<p>lehengas<strong> FDSFFSDFS</strong></p>', 1, '2017-11-22 13:19:53', '2017-11-22 13:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_category_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manufacture_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
