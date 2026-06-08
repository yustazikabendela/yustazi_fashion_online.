-- SQL to create the project database and required tables
CREATE DATABASE IF NOT EXISTS `yustazi_fashion` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `yustazi_fashion`;

CREATE TABLE IF NOT EXISTS `orders` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(100) DEFAULT NULL,
  `address` TEXT,
  `clothes` TEXT,
  `additional_info` TEXT,
  `order_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
