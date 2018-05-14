-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kulinapremtest
CREATE DATABASE IF NOT EXISTS `kulinapremtest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kulinapremtest`;

-- Dumping structure for table kulinapremtest.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kulinapremtest.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2018_05_14_015002_create_users_table', 1),
	(2, '2018_05_14_015033_create_orders_table', 1),
	(3, '2018_05_14_015048_create_user_reviews_table', 1),
	(4, '2018_05_14_015339_create_products_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table kulinapremtest.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kulinapremtest.products: ~2 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Anita Bartoletti', '2018-05-14 10:22:00', '2018-05-14 10:22:00'),
	(2, 'Jammie Feeney', '2018-05-14 10:22:01', '2018-05-14 10:22:01');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table kulinapremtest.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kulinapremtest.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `api_token`, `created_at`, `updated_at`) VALUES
	(1, 'Fathir Qisthi', 'fathiriq@gmail.com', '$2y$10$CQ.6hrxpqIIEGjaTTpQ/TeRw6VpHQAp5q3g0lPlVZ0gJr4Oy5/lIq', '88f5a21b75e00bd07f63590578386df311cb1a78', '2018-05-14 09:51:07', '2018-05-14 09:51:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table kulinapremtest.user_reviews
CREATE TABLE IF NOT EXISTS `user_reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` double(2,1) NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table kulinapremtest.user_reviews: ~3 rows (approximately)
/*!40000 ALTER TABLE `user_reviews` DISABLE KEYS */;
INSERT INTO `user_reviews` (`id`, `order_id`, `product_id`, `user_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, 3.0, 'It\'s good, but...!', '2018-05-14 11:47:21', '2018-05-14 12:15:04'),
	(2, 1, 2, 1, 2.0, 'Jelek!', '2018-05-14 11:55:18', '2018-05-14 12:49:34'),
	(3, 1, 1, 1, 1.0, 'Ew!', '2018-05-14 11:55:30', '2018-05-14 12:49:48');
/*!40000 ALTER TABLE `user_reviews` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
