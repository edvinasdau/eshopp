-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5174
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for shop
DROP DATABASE IF EXISTS `shop`;
CREATE DATABASE IF NOT EXISTS `shop` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `shop`;

-- Dumping structure for table shop.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `amount` int(11) NOT NULL,
  `weight` float NOT NULL,
  `descr` text COLLATE utf8_bin NOT NULL,
  `color` text COLLATE utf8_bin NOT NULL,
  `image` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  UNIQUE KEY `ID` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table shop.products: 10 rows
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
REPLACE INTO `products` (`id`, `name`, `price`, `amount`, `weight`, `descr`, `color`, `image`) VALUES
	(1, 'Dviratis', 300, 5, 0, '0', '', NULL),
	(2, 'Laikrodis', 150, 12, 0, '0', '', NULL),
	(3, 'Valtis', 200, 8, 0, '0', '', NULL),
	(4, 'Televizorius', 600, 4, 0, '0', '', NULL),
	(5, 'Radijas', 75, 14, 0, '0', '', NULL),
	(6, 'Telefonas', 400, 18, 0, 'asdasdf', '', NULL),
	(11, 'abc', 123, 3, 6, 'dsgdf', 'black', NULL),
	(12, 'opapa', 56, 4, 14, 'dgzadhdfhjcdgfh', 'white', NULL),
	(14, 'dfgzdg', 3, 4, 2, '', '', NULL),
	(18, 'fotikas', 23424, 4, 3, 'sd', 'dssd', 'fotikas.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
