-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Apr 28, 2021 alle 15:39
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
-- Struttura della tabella `Fornitori`
--

CREATE TABLE `Fornitori` (
  `codice` varchar(16) NOT NULL,
  `nome` varchar(32) DEFAULT 'fornitore_name',
  `mail` varchar(64) DEFAULT 'fornitore_mail@domain',
  `impegnoDiSpesa` decimal(8,2) DEFAULT 0.00,
  `determina` int(4) DEFAULT 0,
  `dataDetermina` date DEFAULT NULL,
  `cig` varchar(32) DEFAULT 'fornitore_cig123'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Struttura della tabella `Ordini`
--

CREATE TABLE `Ordini` (
  `quantita` int(4) DEFAULT 0,
  `codiceOggetto` varchar(22) NOT NULL,
  `descrizione` text DEFAULT NULL,
  `prezzoTot` decimal(8,2) DEFAULT 0.00,
  `codiceFornitore` varchar(16) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Struttura della tabella `StoricoOrdini`
--

CREATE TABLE `StoricoOrdini` (
  `quantita` int(4) DEFAULT 0,
  `codiceOggetto` varchar(22) NOT NULL,
  `descrizione` text DEFAULT NULL,
  `prezzoTot` decimal(8,2) DEFAULT 0.00,
  `codiceFornitore` varchar(16) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `Uffici`
--

CREATE TABLE `Uffici` (
  `nome` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `Utenti`
--

CREATE TABLE `Utenti` (
  `username` varchar(8) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Fornitori`
--
ALTER TABLE `Fornitori`
  ADD PRIMARY KEY (`codice`);

--
-- Indici per le tabelle `Inventario`
--
ALTER TABLE `Inventario`
  ADD PRIMARY KEY (`codice`),
  ADD KEY `codiceFornitore` (`codiceFornitore`);

--
-- Indici per le tabelle `Ordini`
--
ALTER TABLE `Ordini`
  ADD PRIMARY KEY (`codiceOggetto`),
  ADD KEY `codiceFornitore` (`codiceFornitore`) USING BTREE;

--
-- Indici per le tabelle `Richieste`
--
ALTER TABLE `Richieste`
  ADD PRIMARY KEY (`nomeUfficio`,`codiceOggetto`);

--
-- Indici per le tabelle `StoricoOrdini`
--
ALTER TABLE `StoricoOrdini`
  ADD PRIMARY KEY (`codiceOggetto`),
  ADD UNIQUE KEY `codiceFornitore` (`codiceFornitore`);

--
-- Indici per le tabelle `Uffici`
--
ALTER TABLE `Uffici`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `Utenti`
--
ALTER TABLE `Utenti`
  ADD PRIMARY KEY (`username`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Inventario`
--
ALTER TABLE `Inventario`
  ADD CONSTRAINT `Inventario_ibfk_1` FOREIGN KEY (`codiceFornitore`) REFERENCES `Fornitori` (`codice`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limiti per la tabella `Ordini`
--
ALTER TABLE `Ordini`
  ADD CONSTRAINT `Ordini_ibfk_1` FOREIGN KEY (`codiceOggetto`) REFERENCES `Inventario` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `Richieste`
--
ALTER TABLE `Richieste`
  ADD CONSTRAINT `Richieste_ibfk_2` FOREIGN KEY (`nomeUfficio`) REFERENCES `Uffici` (`nome`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Richieste_ibfk_3` FOREIGN KEY (`codiceOggetto`) REFERENCES `Inventario` (`codice`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
