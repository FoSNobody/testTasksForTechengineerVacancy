-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.25 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных testtask7
CREATE DATABASE IF NOT EXISTS `testtask7` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `testtask7`;

-- Дамп структуры для таблица testtask7.associations
CREATE TABLE IF NOT EXISTS `associations` (
  `c_id` int DEFAULT NULL,
  `p_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы testtask7.associations: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `associations` DISABLE KEYS */;
REPLACE INTO `associations` (`c_id`, `p_id`) VALUES
	(1, 1),
	(1, 2),
	(2, 1),
	(3, 2),
	(3, 3);
/*!40000 ALTER TABLE `associations` ENABLE KEYS */;

-- Дамп структуры для таблица testtask7.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `c_id` int DEFAULT NULL,
  `c_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы testtask7.categories: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` (`c_id`, `c_name`) VALUES
	(1, 'cat1'),
	(2, 'cat2'),
	(3, 'cat3');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Дамп структуры для таблица testtask7.products
CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int DEFAULT NULL,
  `p_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы testtask7.products: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
REPLACE INTO `products` (`p_id`, `p_name`) VALUES
	(1, 'prod1'),
	(2, 'prod2'),
	(3, 'prod3');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
