-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Apr 22, 2021 alle 20:37
-- Versione del server: 10.4.17-MariaDB
-- Versione PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Inventario`
--
CREATE DATABASE IF NOT EXISTS `Inventario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Inventario`;

-- --------------------------------------------------------

--
-- Struttura della tabella `Fornitore`
--

CREATE TABLE `Fornitore` (
  `codice` varchar(16) NOT NULL,
  `nome` varchar(32) DEFAULT 'fornitore_name',
  `mail` varchar(64) DEFAULT 'fornitore_mail@domain',
  `impegnoDiSpesa` decimal(8,2) DEFAULT 0.00,
  `determina` int(4) DEFAULT 0,
  `dataDetermina` date DEFAULT NULL,
  `cig` varchar(32) DEFAULT 'fornitore_cig123'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Fornitore`
--

INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES
('CODE', '45wu5w', 'i5en6e@3qv64', '213.32', 321, '2021-04-14', '36q64gq'),
('provaFornit', 'fdsyer', 'fornitore_mail@domain', '0.00', 20, '2021-04-18', 'f3w6tsg');

-- --------------------------------------------------------

--
-- Struttura della tabella `Inventario`
--

CREATE TABLE `Inventario` (
  `codice` varchar(22) NOT NULL,
  `descrizione` text DEFAULT 'itemDesc',
  `pezziPerUnita` int(3) DEFAULT 0,
  `scorta` int(3) DEFAULT 0,
  `scortaMinima` int(3) DEFAULT 0,
  `tipo` char(1) DEFAULT '9',
  `prezzoUnitario` decimal(8,2) DEFAULT 0.00,
  `ordine` int(3) DEFAULT 0,
  `consumoAnnuo` int(3) DEFAULT 0,
  `codiceFornitore` varchar(16) DEFAULT 'CODE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Inventario`
--

INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES
('641965', 'rusr6usr', 0, 234, 0, '9', '0.00', 0, 0, 'provaFornit'),
('aioru', 'itemDesc', 0, 0, 0, '9', '0.00', 0, 0, 'CODE'),
('cell', 'itemDesc', 0, 0, 0, '9', '0.00', 0, 0, 'CODE'),
('codeItem', 'sdfihoehGP', 34, 5, 12, '6', '89.56', 3, 6, 'provaFornit'),
('dgzd', 'itemDesc', 0, 0, 0, '9', '0.00', 0, 0, 'CODE'),
('kufkt', 'itemDesc', 0, 0, 0, '9', '0.00', 0, 0, 'CODE'),
('nghjg', 'itemDesc', 0, 0, 0, '9', '0.00', 0, 0, 'CODE'),
('prova1', 'itemDesc', 0, 0, 0, '9', '0.00', 0, 0, 'CODE'),
('sfdgh', 'itemDesc', 0, 0, 0, '9', '0.00', 0, 0, 'provaFornit');

-- --------------------------------------------------------

--
-- Struttura della tabella `Richieste`
--

CREATE TABLE `Richieste` (
  `nomeUfficio` varchar(22) NOT NULL,
  `codiceOggetto` varchar(22) NOT NULL,
  `descrizioneOggetto` text DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `Temp`
--

CREATE TABLE `Temp` (
  `quantita` int(4) DEFAULT 0,
  `codiceOggetto` varchar(22) NOT NULL,
  `descrizione` text DEFAULT NULL,
  `prezzoTot` decimal(6,2) DEFAULT 0.00,
  `codiceFornitore` varchar(16) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `Ufficio`
--

CREATE TABLE `Ufficio` (
  `nome` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Fornitore`
--
ALTER TABLE `Fornitore`
  ADD PRIMARY KEY (`codice`);

--
-- Indici per le tabelle `Inventario`
--
ALTER TABLE `Inventario`
  ADD PRIMARY KEY (`codice`),
  ADD KEY `codiceFornitore` (`codiceFornitore`);

--
-- Indici per le tabelle `Richieste`
--
ALTER TABLE `Richieste`
  ADD PRIMARY KEY (`nomeUfficio`,`codiceOggetto`);

--
-- Indici per le tabelle `Temp`
--
ALTER TABLE `Temp`
  ADD PRIMARY KEY (`codiceOggetto`),
  ADD UNIQUE KEY `codiceFornitore` (`codiceFornitore`);

--
-- Indici per le tabelle `Ufficio`
--
ALTER TABLE `Ufficio`
  ADD PRIMARY KEY (`nome`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Inventario`
--
ALTER TABLE `Inventario`
  ADD CONSTRAINT `Inventario_ibfk_1` FOREIGN KEY (`codiceFornitore`) REFERENCES `Fornitore` (`codice`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limiti per la tabella `Richieste`
--
ALTER TABLE `Richieste`
  ADD CONSTRAINT `Richieste_ibfk_2` FOREIGN KEY (`nomeUfficio`) REFERENCES `Ufficio` (`nome`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Richieste_ibfk_3` FOREIGN KEY (`codiceOggetto`) REFERENCES `Inventario` (`codice`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limiti per la tabella `Temp`
--
ALTER TABLE `Temp`
  ADD CONSTRAINT `Temp_ibfk_1` FOREIGN KEY (`codiceOggetto`) REFERENCES `Inventario` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
