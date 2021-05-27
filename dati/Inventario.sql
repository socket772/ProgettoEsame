CREATE DATABASE IF NOT EXISTS `Inventario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Inventario`;

-- --------------------------------------------------------

--
-- Struttura della tabella `Fornitori`
--

DROP TABLE IF EXISTS `Fornitori`;
CREATE TABLE IF NOT EXISTS `Fornitori` (
  `codice` varchar(16) NOT NULL,
  `nome` varchar(32) DEFAULT 'fornitore_name',
  `mail` varchar(64) DEFAULT 'fornitore_mail@domain',
  `impegnoDiSpesa` decimal(8,2) DEFAULT 0.00,
  `determina` int(4) DEFAULT 0,
  `dataDetermina` date DEFAULT NULL,
  `cig` varchar(32) DEFAULT 'fornitore_cig123',
  PRIMARY KEY (`codice`)
);

-- --------------------------------------------------------

--
-- Struttura della tabella `Oggetti`
--

DROP TABLE IF EXISTS `Oggetti`;
CREATE TABLE IF NOT EXISTS `Oggetti` (
  `codice` varchar(22) NOT NULL,
  `descrizione` text DEFAULT 'itemDesc',
  `pezziPerUnita` int(3) DEFAULT 0,
  `scorta` int(3) DEFAULT 0,
  `scortaMinima` int(3) DEFAULT 0,
  `tipo` char(1) DEFAULT '9',
  `prezzoUnitario` decimal(8,2) DEFAULT 0.00,
  `ordine` int(3) DEFAULT 0,
  `consumoAnnuo` int(3) DEFAULT 0,
  `codiceFornitore` varchar(16) DEFAULT 'CODE',
  PRIMARY KEY (`codice`),
  KEY `codiceFornitore` (`codiceFornitore`)
);

-- --------------------------------------------------------

--
-- Struttura della tabella `Ordini`
--

DROP TABLE IF EXISTS `Ordini`;
CREATE TABLE IF NOT EXISTS `Ordini` (
  `quantita` int(4) DEFAULT 0,
  `codiceOggetto` varchar(22) NOT NULL,
  `descrizione` text DEFAULT NULL,
  `prezzoTot` decimal(8,2) DEFAULT 0.00,
  `codiceFornitore` varchar(16) NOT NULL,
  PRIMARY KEY (`codiceOggetto`),
  KEY `codiceFornitore` (`codiceFornitore`) USING BTREE
);

-- --------------------------------------------------------

--
-- Struttura della tabella `Richieste`
--

DROP TABLE IF EXISTS `Richieste`;
CREATE TABLE IF NOT EXISTS `Richieste` (
  `nomeUfficio` varchar(22) NOT NULL,
  `codiceOggetto` varchar(22) NOT NULL,
  `descrizioneOggetto` text DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`nomeUfficio`,`codiceOggetto`),
  KEY `codiceOggetto` (`codiceOggetto`)
);

-- --------------------------------------------------------

--
-- Struttura della tabella `StoricoOrdini`
--

DROP TABLE IF EXISTS `StoricoOrdini`;
CREATE TABLE IF NOT EXISTS `StoricoOrdini` (
  `id` int(11) NOT NULL,
  `quantita` int(4) DEFAULT 0,
  `codiceOggetto` varchar(22) NOT NULL,
  `descrizione` text DEFAULT NULL,
  `prezzoTot` decimal(8,2) DEFAULT 0.00,
  `codiceFornitore` varchar(16) NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `codici` (`codiceFornitore`,`codiceOggetto`) USING BTREE
);

-- --------------------------------------------------------

--
-- Struttura della tabella `Uffici`
--

DROP TABLE IF EXISTS `Uffici`;
CREATE TABLE IF NOT EXISTS `Uffici` (
  `nome` varchar(22) NOT NULL,
  PRIMARY KEY (`nome`)
);

-- --------------------------------------------------------

--
-- Struttura della tabella `Utenti`
--

DROP TABLE IF EXISTS `Utenti`;
CREATE TABLE IF NOT EXISTS `Utenti` (
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`username`)
);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Oggetti`
--
ALTER TABLE `Oggetti`
  ADD CONSTRAINT `Inventario_ibfk_1` FOREIGN KEY (`codiceFornitore`) REFERENCES `Fornitori` (`codice`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limiti per la tabella `Ordini`
--
ALTER TABLE `Ordini`
  ADD CONSTRAINT `Ordini_ibfk_1` FOREIGN KEY (`codiceOggetto`) REFERENCES `Oggetti` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `Richieste`
--
ALTER TABLE `Richieste`
  ADD CONSTRAINT `Richieste_ibfk_2` FOREIGN KEY (`nomeUfficio`) REFERENCES `Uffici` (`nome`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Richieste_ibfk_3` FOREIGN KEY (`codiceOggetto`) REFERENCES `Oggetti` (`codice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;