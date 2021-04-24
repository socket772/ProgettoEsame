#
# TABLE STRUCTURE FOR: Fornitore
#

DROP TABLE IF EXISTS `Fornitore`;

CREATE TABLE `Fornitore` (
  `codice` varchar(16) NOT NULL,
  `nome` varchar(32) DEFAULT 'fornitore_name',
  `mail` varchar(64) DEFAULT 'fornitore_mail@domain',
  `impegnoDiSpesa` decimal(8,2) DEFAULT 0.00,
  `determina` int(4) DEFAULT 0,
  `dataDetermina` date DEFAULT NULL,
  `cig` varchar(32) DEFAULT 'fornitore_cig123'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('qbfc', 'qmsm', 'xrosenbaum@example.org', '1846.00', 58920370, '2008-10-03', 'lgld');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('htdl', 'mixv', 'raul30@example.com', '0.00', 660, '1991-08-24', 'ktzr');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('qfss', 'ulmi', 'carmela.schaefer@example.org', '2254.70', 7, '1988-08-08', 'lnul');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('wboe', 'vmdm', 'deonte82@example.org', '0.00', 5429, '2001-09-02', 'rmxy');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('rflp', 'btwj', 'mberge@example.com', '999999.99', 2, '1984-07-24', 'layc');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('kohj', 'xsor', 'uriah.buckridge@example.net', '999999.99', 63, '1977-06-05', 'gjif');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('rybe', 'auwd', 'ayla.russel@example.org', '999999.99', 962032, '2018-07-22', 'eefg');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('sjqb', 'qtqu', 'dibbert.faustino@example.net', '0.00', 97898, '2017-04-29', 'olrd');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('ankz', 'mnsv', 'adolfo90@example.net', '15.19', 0, '2009-08-31', 'gcrc');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('oaev', 'brwo', 'dare.isidro@example.net', '19.62', 671332336, '1997-03-30', 'gbog');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('snjm', 'uqvi', 'lenny49@example.net', '0.00', 6074, '1982-12-27', 'zpzk');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('goid', 'zjsj', 'wlegros@example.net', '999999.99', 87, '1984-09-24', 'micz');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('dlcx', 'gooa', 'bernadette90@example.org', '0.00', 155, '2012-03-26', 'cagh');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('ihyx', 'haeu', 'ljones@example.com', '36.49', 9, '1972-10-23', 'ixrf');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('esfl', 'abkj', 'altenwerth.travon@example.org', '13.98', 78244, '2012-04-07', 'wygs');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('jxhq', 'pama', 'agnes23@example.org', '174467.93', 80217549, '2005-08-26', 'zbue');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('ntvr', 'shan', 'marielle90@example.net', '0.00', 703866977, '1993-02-09', 'tkqt');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('llwa', 'ujix', 'pjohnston@example.org', '1.57', 5, '1992-05-15', 'xeze');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('eibu', 'vyys', 'romaine.okeefe@example.com', '1169.45', 83, '1973-02-14', 'uxqg');
INSERT INTO `Fornitore` (`codice`, `nome`, `mail`, `impegnoDiSpesa`, `determina`, `dataDetermina`, `cig`) VALUES ('rrnu', 'mdrp', 'reichert.damaris@example.com', '2426.43', 333243, '1970-10-07', 'dceu');


