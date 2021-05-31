--Database Inventario

--Cancellare Dati StoricoOrdini
TRUNCATE StoricoOrdini;

--Cancellare Dati Ordini
TRUNCATE Ordini;

--Resettare AUTO_INCREMENT StoricoOrdini, si usa in caso non si usa truncate per cancellare i dati
ALTER TABLE StoricoOrdini AUTO_INCREMENT = 0;

--Azzerare la scorta e oggetti in ordine
UPDATE Oggetti SET scorta=0, ordine=0;


--Ottimizzazione tabelle, da usare in caso di problemi di performance
OPTIMIZE TABLE Fornitori;
OPTIMIZE TABLE Oggetti;
OPTIMIZE TABLE Ordini;
OPTIMIZE TABLE StoricoOrdini;

----------------------------------
--Database Utenti

--Resettare AUTO_INCREMENT Ruoli e Utenti, si usa in caso non si usa truncate per cancellare i dati
ALTER TABLE Ruoli AUTO_INCREMENT = 0;
ALTER TABLE Utenti AUTO_INCREMENT = 0;

--Ottimizzazione tabelle, da usare in caso di problemi di performance
OPTIMIZE TABLE Ruoli;
OPTIMIZE TABLE Utenti;