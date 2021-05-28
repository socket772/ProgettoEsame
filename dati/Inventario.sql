SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `Inventario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Inventario`;

CREATE TABLE IF NOT EXISTS `Fornitori` (
  `codice` varchar(16) NOT NULL,
  `nome` varchar(32) DEFAULT NULL,
  `mail` varchar(64) DEFAULT NULL,
  `impegnoDiSpesa` decimal(8,2) DEFAULT NULL,
  `determina` int(4) DEFAULT 0,
  `dataDetermina` date DEFAULT NULL,
  `cig` varchar(32) DEFAULT 'fornitore_cig123',
  PRIMARY KEY (`codice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `Oggetti` (
  `codice` varchar(22) NOT NULL,
  `descrizione` text DEFAULT NULL,
  `pezziPerUnita` int(3) DEFAULT 0,
  `scorta` int(3) DEFAULT 0,
  `scortaMinima` int(3) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL,
  `prezzoUnitario` decimal(8,2) DEFAULT NULL,
  `ordine` int(3) DEFAULT 0,
  `consumoAnnuo` int(3) DEFAULT 0,
  `codiceFornitore` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`codice`),
  KEY `codiceFornitore` (`codiceFornitore`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `Ordini` (
  `quantita` int(4) DEFAULT 0,
  `codiceOggetto` varchar(22) NOT NULL,
  `prezzoTot` decimal(8,2) DEFAULT 0.00,
  PRIMARY KEY (`codiceOggetto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `StoricoOrdini` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantita` int(4) DEFAULT 0,
  `codiceOggetto` varchar(22) NOT NULL,
  `prezzoTot` decimal(8,2) DEFAULT 0.00,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `codici` (`codiceOggetto`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `Oggetti`
  ADD CONSTRAINT `Oggetti_ibfk_1` FOREIGN KEY (`codiceFornitore`) REFERENCES `Fornitori` (`codice`) ON DELETE NO ACTION ON UPDATE CASCADE;

ALTER TABLE `Ordini`
  ADD CONSTRAINT `Ordini_ibfk_1` FOREIGN KEY (`codiceOggetto`) REFERENCES `Oggetti` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `StoricoOrdini`
  ADD CONSTRAINT `StoricoOrdini_ibfk_1` FOREIGN KEY (`codiceOggetto`) REFERENCES `Oggetti` (`codice`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
