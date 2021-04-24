#
# TABLE STRUCTURE FOR: Inventario
#

DROP TABLE IF EXISTS `Inventario`;

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

INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('rrke', 'hevb', 54, 31, 45, 'j', '52.00', 57, 552133, 'ankz');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('ywvv', 'arib', 72, 17, 47, 'x', '86.00', 21, 332, 'dlcx');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('earr', 'pfyb', 66, 71, 94, 'i', '63.00', 4, 9925051, 'eibu');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('vmwu', 'pxvk', 76, 36, 67, 'r', '60.00', 54, 909, 'esfl');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('cpmt', 'tdru', 7, 18, 20, 'g', '29.00', 98, 57782523, 'goid');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('jvuo', 'ugpu', 98, 25, 53, 'j', '99.00', 94, 1134038, 'htdl');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('rkfs', 'pigr', 79, 3, 14, 't', '78.00', 24, 9485712, 'ihyx');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('gadi', 'vvtn', 76, 51, 58, 'm', '2.00', 67, 97759, 'jxhq');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('iqyy', 'etvv', 84, 80, 8, 's', '89.00', 76, 21767, 'kohj');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('tgkz', 'utvs', 47, 2, 66, 'p', '71.00', 42, 7267856, 'llwa');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('pgzz', 'bkrq', 100, 79, 16, 'c', '18.00', 56, 67, 'ntvr');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('yaoq', 'oupn', 36, 90, 55, 't', '24.00', 14, 61774, 'oaev');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('ryyu', 'rhhv', 26, 26, 74, 'e', '81.00', 1, 95313022, 'qbfc');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('qkls', 'hsrr', 80, 86, 36, 'y', '13.00', 30, 66, 'qfss');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('zypi', 'qcvx', 63, 1, 32, 'w', '99.00', 14, 978645, 'rflp');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('tyuz', 'xujc', 5, 11, 27, 'x', '98.00', 71, 96930, 'rrnu');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('ljmz', 'fqwk', 40, 62, 89, 'z', '56.00', 84, 1963, 'rybe');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('xvgn', 'xcrh', 91, 53, 30, 'e', '7.00', 82, 7163988, 'sjqb');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('fzyk', 'onar', 0, 7, 74, 'i', '54.00', 64, 65641799, 'snjm');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('gmzq', 'bjhy', 12, 95, 35, 'd', '66.00', 39, 4440848, 'wboe');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('igwg', 'hqki', 50, 60, 60, 'm', '59.00', 67, 8, 'ankz');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('yibo', 'lblq', 62, 28, 57, 'y', '10.00', 42, 8227264, 'dlcx');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('kyvo', 'uaeu', 79, 6, 67, 'x', '44.00', 87, 93564238, 'eibu');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('axtu', 'gtau', 81, 47, 98, 'p', '89.00', 53, 5613, 'esfl');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('zbul', 'peox', 22, 48, 77, 'v', '70.00', 63, 6970, 'goid');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('vyju', 'fysd', 71, 69, 68, 'z', '12.00', 22, 64401, 'htdl');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('wnib', 'bemm', 26, 94, 8, 'j', '61.00', 37, 348606, 'ihyx');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('lpos', 'wzua', 50, 9, 65, 'u', '16.00', 31, 9993627, 'jxhq');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('eefk', 'msah', 27, 80, 59, 'x', '46.00', 94, 571, 'kohj');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('luch', 'pynf', 13, 74, 9, 'p', '58.00', 57, 0, 'llwa');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('qjls', 'tnsj', 90, 94, 31, 'l', '8.00', 18, 41, 'ntvr');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('jsbd', 'xiom', 82, 34, 93, 'x', '35.00', 34, 641425436, 'oaev');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('cqmh', 'uxit', 11, 4, 41, 'p', '25.00', 18, 650860, 'qbfc');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('sbuu', 'gvpj', 7, 52, 69, 'a', '32.00', 6, 512, 'qfss');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('fmqb', 'tlid', 23, 31, 93, 'h', '71.00', 60, 479166, 'rflp');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('kvye', 'bqli', 46, 1, 48, 't', '59.00', 42, 54, 'rrnu');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('hiki', 'hupg', 81, 2, 5, 'u', '68.00', 64, 336659543, 'rybe');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('vcvk', 'cyar', 44, 63, 95, 'w', '25.00', 31, 7842, 'sjqb');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('pjwx', 'pcmi', 43, 53, 66, 'u', '0.00', 53, 0, 'snjm');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('mkca', 'cwfa', 82, 73, 81, 'l', '83.00', 21, 2522, 'wboe');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('gfbx', 'ckvq', 20, 10, 70, 'i', '99.00', 83, 818025, 'ankz');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('cavk', 'vhxo', 92, 32, 42, 'f', '40.00', 14, 62349341, 'dlcx');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('kpos', 'kwre', 81, 82, 64, 'i', '93.00', 97, 259359, 'eibu');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('stde', 'nrom', 36, 30, 81, 'k', '4.00', 88, 545974, 'esfl');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('ubtt', 'rwta', 36, 83, 13, 'v', '25.00', 16, 17093, 'goid');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('vccm', 'pmll', 13, 2, 3, 'g', '50.00', 68, 808, 'htdl');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('hqus', 'sswc', 20, 68, 9, 'b', '39.00', 72, 8, 'ihyx');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('yjmg', 'eulr', 54, 28, 98, 'm', '83.00', 52, 1378638, 'jxhq');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('oasm', 'ezkt', 90, 10, 98, 'd', '92.00', 80, 3, 'kohj');
INSERT INTO `Inventario` (`codice`, `descrizione`, `pezziPerUnita`, `scorta`, `scortaMinima`, `tipo`, `prezzoUnitario`, `ordine`, `consumoAnnuo`, `codiceFornitore`) VALUES ('jsso', 'wjlx', 93, 69, 77, 'n', '51.00', 50, 3351, 'llwa');


