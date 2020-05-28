-- --------------------------------------------------------
-- Host:                         daemon
-- Server Version:               10.1.23-MariaDB - mariadb.org binary distribution
-- Server Betriebssystem:        Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Exportiere Struktur von Tabelle bellanonna.pizzas
DROP TABLE IF EXISTS `pizzas`;
CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `cost` float DEFAULT NULL,
  `ingredients` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Exportiere Daten aus Tabelle bellanonna.pizzas: ~20 rows (ungefähr)
DELETE FROM `pizzas`;
/*!40000 ALTER TABLE `pizzas` DISABLE KEYS */;
INSERT INTO `pizzas` (`id`, `name`, `cost`, `ingredients`) VALUES
	(1, 'Salami', 6.5, 'Salami'),
	(2, 'Hawaii', 8, 'Ananas, Hinterschinken, Käse'),
	(3, 'Margharita', 8, 'Mozzarella, frische Tomaten, frisches Basilikum'),
	(4, '4-Jahreszeiten', 8, 'Salami, Hinterschinken, frische Champignons, Ei und Zwiebeln'),
	(5, 'Frutti di Mare', 8.5, 'Muscheln, Thunfisch, Sardellen und Calamares'),
	(6, 'Piccante', 7.5, 'Pepperoniwurst und grüne Pepperoni'),
	(7, 'Prosciutto', 8, 'Parmaschinken und Mozzarella'),
	(8, 'Julia', 8.5, 'Ruccola, Ricotta, Kirschtomaten und Mozzarella'),
	(9, 'Romeo', 8.5, 'Ruccola, Parmesankäse, Kirschtomaten und Mozzarella'),
	(10, 'Provence', 7.5, 'Frische Champignons und Knoblauchsoße'),
	(11, 'Spinaci', 8, 'Spinat, Mozzarella und frischer Knoblauch'),
	(12, 'Vegetaria', 8, 'Alte Socken, Mais, frische Champignons, Zwiebeln, Ananas (mit Käse überbacken)'),
	(13, 'Mykene', 8, 'Schafskäse, frische Champignons und Oliven'),
	(14, 'Spezial', 8.5, 'Paperoniwurst, Hinterschinken, Salami, frische Champignons und frische Paprika'),
	(15, 'Delphi', 8.5, 'Schafskäse, frischer Lauch, Speck, Ananas (mit Käse überbacken)'),
	(16, 'Curry', 7.5, 'Hähnchenbrustfilet, Currysoße'),
	(17, 'Salmone', 9.5, 'Lachsfilet, Mozzarella, frischer Lauch, rote Pfefferkörner und Créme fraîche'),
	(18, 'Al Capone', 8.5, 'Parmaschinken, Calamares, Mozzarella und Knoblauchsoße'),
	(19, 'Pepone', 8.5, 'Ruccola, Parmesankäse, getrocknete Tomaten, Mozzarella'),
	(20, 'Pizzabrot', 3, NULL);
/*!40000 ALTER TABLE `pizzas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
