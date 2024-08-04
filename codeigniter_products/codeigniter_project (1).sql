-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 04 Ağu 2024, 14:18:40
-- Sunucu sürümü: 5.7.33
-- PHP Sürümü: 8.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeigniter_project`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `information_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_information_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci,
  `video_kody` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `extra_discount` decimal(10,2) DEFAULT NULL,
  `tax_rate` decimal(5,2) DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `price_tl` decimal(10,2) DEFAULT NULL,
  `price_usd` decimal(10,2) DEFAULT NULL,
  `price_eur` decimal(10,2) DEFAULT NULL,
  `second_price_tl` decimal(10,2) DEFAULT NULL,
  `falloutofstock` tinyint(1) DEFAULT NULL,
  `situation` enum('Açık','Kapalı') COLLATE utf8mb4_unicode_ci DEFAULT 'Açık',
  `feature_status` tinyint(1) DEFAULT NULL,
  `new_validity_period` date DEFAULT NULL,
  `arrangement` int(11) DEFAULT NULL,
  `show_on_homepage` tinyint(1) DEFAULT NULL,
  `new_product` tinyint(1) DEFAULT NULL,
  `installment` tinyint(1) DEFAULT NULL,
  `validity_period` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `information_title`, `additional_information_title`, `explanation`, `title`, `keywords`, `description`, `address`, `product_description`, `video_kody`, `product_code`, `amount`, `extra_discount`, `tax_rate`, `sale_price`, `price_tl`, `price_usd`, `price_eur`, `second_price_tl`, `falloutofstock`, `situation`, `feature_status`, `new_validity_period`, `arrangement`, `show_on_homepage`, `new_product`, `installment`, `validity_period`, `created_at`, `updated_at`) VALUES
(1, 'Proident minim magn', 'Iure asperiores volu', 'Odio eu voluptatem ', 'Minim accusamus ea a', 'Quibusdam commodi la', 'Quasi necessitatibus', 'Illum sit sapiente ', 'Ut illum voluptate ', '11', 'Sunt do ab natus eiu', 90, '81.00', '32.00', NULL, '823.00', '903.00', '949.00', '999.00', 0, 'Açık', 0, '1991-07-24', 45, 30, 0, 0, '2012-11-20', '2024-08-02 16:15:59', '2024-08-02 16:15:59'),
(2, 'Occaecat voluptate m', 'Exercitationem et vo', 'Corporis incididunt ', 'Explicabo Consequat', 'Sunt deleniti dolor', 'Eveniet deserunt eo', 'Quia nulla rerum id ', 'Illum pariatur Con', '71', 'Est unde voluptatum', 63, '82.00', '11.00', NULL, '30.00', '839.00', '618.00', '640.00', 0, 'Açık', 0, '2023-08-17', 99, 1, 0, 0, '1979-01-27', '2024-08-02 16:17:15', '2024-08-02 16:18:55'),
(3, 'Dolores praesentium ', 'Molestiae culpa dol', 'Dolorem porro amet ', 'Molestiae excepturi ', 'Illum dignissimos c', 'Quasi quia a non del', 'Elit ut corporis is', 'Dolore consequat Id', '5', 'Magna voluptatem dol', 87, '66.00', '86.00', NULL, '19.00', '905.00', '31.00', '63.00', 0, 'Açık', 0, '1996-12-18', 59, 96, 0, 0, '1976-10-10', '2024-08-02 16:17:52', '2024-08-02 17:32:31'),
(5, 'Autem optio quos qu', 'Rerum laborum Quia ', 'Sint reiciendis faci', 'Et dolorem irure est', 'Reprehenderit repel', 'Eu repudiandae sunt', 'Consectetur ex aliq', 'Non et sed a laboris', '4', 'Qui fugiat nulla na', 96, '68.00', '87.00', NULL, '129.00', '267.00', '263.00', '932.00', 0, 'Açık', 0, '1999-08-14', 61, 84, 0, 0, '1990-03-20', '2024-08-02 19:50:54', '2024-08-02 20:37:20'),
(6, 'Sint aperiam corpor', 'Suscipit cumque volu', 'Aut saepe quibusdam ', 'Vitae et culpa id ', 'Quidem quas consequa', 'Ut natus necessitati', 'Delectus dolorum id', 'Reiciendis molestiae', '55', 'Repudiandae modi dui', 17, '79.00', '93.00', NULL, '63.00', '585.00', '883.00', '601.00', 0, 'Açık', 0, '1991-04-19', 62, 88, 0, 0, '1999-11-27', '2024-08-02 21:14:45', '2024-08-02 21:15:02'),
(7, 'Dolor voluptate dict', 'Quis quia ut sed sit', 'Ea provident obcaec', 'Aut dolores error la', 'Et tempora temporibu', 'Rerum neque modi vol', 'Dignissimos laborum', 'Omnis distinctio Ma', '29', 'Ipsum voluptatem A', 51, '1.00', '2.00', NULL, '648.00', '6.00', '582.00', '262.00', 0, 'Açık', 0, '2008-10-13', 2, 81, 0, 0, '1970-01-22', '2024-08-02 21:37:11', '2024-08-02 21:37:31'),
(8, 'Qui culpa delectus', 'Nam assumenda optio', 'Vero laborum provide', 'Cumque voluptates ha', 'Quis do aut est recu', 'Rerum eu officia vit', 'Necessitatibus quas ', 'Quos quas irure aspe', '92', 'Perferendis aliquam ', 80, '24.00', '92.00', NULL, '109.00', '177.00', '891.00', '184.00', 0, 'Açık', 0, '2000-11-14', 21, 84, 0, 0, '1992-05-13', '2024-08-04 13:55:01', '2024-08-04 13:55:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_discounts`
--

CREATE TABLE `product_discounts` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `discount_type` enum('amount','percentage') COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_tl` decimal(10,2) DEFAULT NULL,
  `price_usd` decimal(10,2) DEFAULT NULL,
  `price_eur` decimal(10,2) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `product_discounts`
--

INSERT INTO `product_discounts` (`id`, `product_id`, `customer_group`, `priority`, `discount_type`, `price_tl`, `price_usd`, `price_eur`, `start_date`, `end_date`) VALUES
(63, 2, 'group1', 64, 'amount', '672.00', '537.00', '93.00', '1972-01-28', '1989-02-03'),
(64, 2, 'group1', 5, 'percentage', '675.00', '398.00', '892.00', '1979-09-11', '1996-12-29'),
(66, 3, 'group3', 49, 'amount', '199.00', '582.00', '624.00', '1987-07-28', '1977-03-28'),
(184, 5, 'group1', 0, 'percentage', '0.00', '0.00', '0.00', '0000-00-00', '0000-00-00'),
(230, 6, 'group2', 11, 'amount', '448.00', '209.00', '824.00', '2000-09-27', '2001-01-20'),
(231, 6, 'group3', 15, 'percentage', '510.00', '792.00', '532.00', '2016-07-07', '1975-02-09'),
(237, 1, 'group1', 81, 'percentage', '941.00', '651.00', '178.00', '1993-11-04', '1990-04-24'),
(238, 1, 'group2', 21, 'percentage', '163.00', '589.00', '264.00', '1980-04-16', '2002-05-05'),
(239, 7, 'group3', 3, 'amount', '805.00', '582.00', '275.00', '1992-01-24', '2016-11-09'),
(242, 8, 'group1', 84, 'percentage', '488.00', '33.00', '140.00', '1970-03-17', '1979-01-24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `file_name`) VALUES
(4, 3, '1722615472_konser1.jpg'),
(9, 2, '1722619817_seminer.jpg'),
(10, 2, '1722619817_konferans.jpg'),
(11, 2, '1722619893_images.jpg'),
(12, 2, '1722619893_konser2.jpg'),
(13, 3, '1722619992_konferans.jpg'),
(25, 5, '1722631040_images.jpg'),
(29, 1, '1722632623_konser2.jpg'),
(47, 1, '1722635234_konser1.jpg'),
(48, 5, '1722635455_konser1.jpg'),
(49, 5, '1722635455_istockphoto-517188688-612x612.jpg'),
(50, 5, '1722635455_seminer.jpg'),
(51, 5, '1722635455_konser2.jpg'),
(53, 6, '1722640320_konser1.jpg'),
(54, 6, '1722640320_istockphoto-517188688-612x612.jpg'),
(55, 6, '1722640431_images.jpg'),
(56, 6, '1722640431_konferans.jpg'),
(58, 7, '1722640623_images.jpg'),
(60, 1, '1722779248_images.jpg'),
(61, 1, '1722779248_seminer.jpg'),
(62, 1, '1722779248_konferans.jpg'),
(63, 7, '1722779511_konferans.jpg'),
(64, 7, '1722779511_seminer.jpg'),
(67, 8, '1722779789_konser2.jpg'),
(68, 8, '1722779809_konser1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `password`, `created_at`, `updated_at`, `status`, `remember_token`) VALUES
(1, 'Yusuf', 'tkn', 'ysftkn@gmail.com', '$2y$10$3z.8yduyEio9Do3YZ3yADusscGl11Ige7X8aQF8/NZ4qhH5klIBH.', '2024-07-24 17:30:06', '2024-07-24 17:30:06', 'active', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_discounts`
--
ALTER TABLE `product_discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Tablo için indeksler `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `product_discounts`
--
ALTER TABLE `product_discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- Tablo için AUTO_INCREMENT değeri `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `product_discounts`
--
ALTER TABLE `product_discounts`
  ADD CONSTRAINT `product_discounts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
