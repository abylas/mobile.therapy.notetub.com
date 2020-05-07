-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.16 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dns
DROP DATABASE IF EXISTS `dns`;
CREATE DATABASE IF NOT EXISTS `dns` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dns`;

-- Dumping structure for table dns.tbl_company
DROP TABLE IF EXISTS `tbl_company`;
CREATE TABLE IF NOT EXISTS `tbl_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dns.tbl_company: ~0 rows (approximately)
DELETE FROM `tbl_company`;
/*!40000 ALTER TABLE `tbl_company` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_company` ENABLE KEYS */;

-- Dumping structure for table dns.tbl_dns
DROP TABLE IF EXISTS `tbl_dns`;
CREATE TABLE IF NOT EXISTS `tbl_dns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `environment` text COLLATE utf8mb4_unicode_ci,
  `arecord` text COLLATE utf8mb4_unicode_ci,
  `cname` text COLLATE utf8mb4_unicode_ci,
  `microservice` text COLLATE utf8mb4_unicode_ci,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dns.tbl_dns: ~22 rows (approximately)
DELETE FROM `tbl_dns`;
/*!40000 ALTER TABLE `tbl_dns` DISABLE KEYS */;
INSERT INTO `tbl_dns` (`id`, `environment`, `arecord`, `cname`, `microservice`, `create_time`, `update_time`) VALUES
	(1, NULL, 'lets see how this works TESt TESt', 'rfsdf', 'sdfsdfsd', NULL, NULL),
	(2, NULL, 'adfdasfdasf ', 'asfdaf', 'aefrt', NULL, NULL),
	(3, NULL, 'sdffsdfTEST', 'uyyu', 'mvbnffnfk', NULL, NULL),
	(4, NULL, 'kafyaTEST', 'sdflkjf```', 'dssdjhkfhjks', NULL, NULL),
	(5, NULL, 'kafka, 123.45.34.121\r\nayes, 123.11.21.31kafkaINA 123.45.34.121\r\nayesINA 123.11.21.31\n', '', '', NULL, NULL),
	(6, NULL, 'kafka			IN	A	 123.21.33.21\r\ncbs			IN	A	 132.42.54.65\r\nabc			IN	A	 121.34.23.43\r\n\nNBC			IN	A	 132.34.54.67\r\n\n', '', '', NULL, NULL),
	(7, NULL, 'kafka			IN	A	 123.21.33.21\r\ncbs			IN	A	 132.42.54.65\r\nabc			IN	A	 121.34.23.43\r\n\nNBC			IN	A	 132.43.56.76\n', '', '', NULL, NULL),
	(8, NULL, 'kafka			IN	A	 123.21.33.21\r\ncbs			IN	A	 132.42.54.65\r\nabc			IN	A	 121.34.23.43\r\n\r			IN	A	  \n \nNBC			IN	A	 132.43.56.76\n', '', '', NULL, NULL),
	(9, NULL, 'tt			IN	A	123.43.54.65\r\nls			IN	A	123.45.67.89\r\n\nff			IN	A	123.54.67.89\n', '', '', NULL, NULL),
	(10, NULL, 'dd			IN	A	 123.45.67.88<br /><br /><br /><br />\r\nff			IN	A	 123.23.12.12<br /><br /><br />\r\n<br /><br />\nll			IN	A	 123.23.12.56<br />\n', '', '', NULL, NULL),
	(11, NULL, 'jhska			IN	A	 123<br /><br /><br /><br />\nkafka			IN	A	 123.54.65.78<br /><br /><br />\r\n<br /><br />\n<br />\n', '', '', NULL, NULL),
	(12, NULL, 'kafka			IN	A	 123.45.67.89\r\ntata			IN	A	 123.45.3.2\n', '', '', NULL, NULL),
	(13, 'GB', 'tata			IN	A	 133.45.6.78\n', '', '', NULL, NULL),
	(14, 'CB', 'hajgja			IN	A	 123.5.7.8\n', '', '', NULL, NULL),
	(15, 'CB', 'kafka			IN	A	 123.4.532.3\n', '', '', NULL, NULL),
	(16, 'YP', 'kafka			IN	A	 123.43.54.66\n', 'wsus,gpdclxassas101.gp.ocean.com', 'user-message-service , swarm-ingress.gp.ocean.com.', NULL, NULL),
	(17, 'CB', 'sjs			IN	A	 123\n', 'cname, 111', 'micro, 1245', NULL, NULL),
	(18, 'CB', '\n', '\n', '\n', NULL, NULL),
	(19, 'CB', 'fsdfsd			IN	A	 666\n', 'sdh			IN	CNAME	 455\n', 'ioy			IN	CNAME	 333\n', NULL, NULL),
	(20, 'CB', 'fsdfsd			IN	A	 666\n', 'sdh			IN	CNAME	 455\n', 'ioy			IN	CNAME	 333\n', NULL, NULL),
	(21, 'CB', 'ml			IN	A	 1233\n', 'lk			IN	CNAME	 132\n', 'ok			IN	CNAME	231\n', NULL, NULL),
	(22, 'CB', 'ml			IN	A	 1233\n', 'lk			IN	CNAME	 132\n', 'ok			IN	CNAME	231\n', NULL, NULL);
/*!40000 ALTER TABLE `tbl_dns` ENABLE KEYS */;

-- Dumping structure for table dns.tbl_project
DROP TABLE IF EXISTS `tbl_project`;
CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci,
  `category` text COLLATE utf8mb4_unicode_ci,
  `priority` text COLLATE utf8mb4_unicode_ci,
  `images` text COLLATE utf8mb4_unicode_ci,
  `client` text COLLATE utf8mb4_unicode_ci,
  `leader` text COLLATE utf8mb4_unicode_ci,
  `team` text COLLATE utf8mb4_unicode_ci,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `tasks` text COLLATE utf8mb4_unicode_ci,
  `taskId` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `days_overdue` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_project_company` (`company_id`),
  CONSTRAINT `FK_project_company` FOREIGN KEY (`company_id`) REFERENCES `tbl_company` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dns.tbl_project: ~0 rows (approximately)
DELETE FROM `tbl_project`;
/*!40000 ALTER TABLE `tbl_project` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_project` ENABLE KEYS */;

-- Dumping structure for table dns.tbl_task
DROP TABLE IF EXISTS `tbl_task`;
CREATE TABLE IF NOT EXISTS `tbl_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `priority` text COLLATE utf8mb4_unicode_ci,
  `assignee` text COLLATE utf8mb4_unicode_ci,
  `project` text COLLATE utf8mb4_unicode_ci,
  `estimated_duration` int(11) DEFAULT NULL,
  `final_duration` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `logged_time` datetime DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_task_project` (`project_id`),
  CONSTRAINT `FK_task_project` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dns.tbl_task: ~0 rows (approximately)
DELETE FROM `tbl_task`;
/*!40000 ALTER TABLE `tbl_task` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_task` ENABLE KEYS */;

-- Dumping structure for table dns.test
DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `Column 1` int(11) DEFAULT NULL,
  `Column 2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dns.test: ~0 rows (approximately)
DELETE FROM `test`;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
