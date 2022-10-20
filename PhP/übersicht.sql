-- Erstellen einer Datenbank
CREATE DATABASE datenbank_name;

-- benutze diese Datenbank
USE datenbank_name;

-- Erstellen einer Tabelle innerhlab einer Datenbank
CREATE TABLE tabellen_namen(
    -- Spaltenname Datentyp 
    -- AUTO_INCREMENT lässt die Datenbank eine vortlaufende ID selbständig vergeben
	user_id INT AUTO_INCREMENT,
    user_name VARCHAR(255),
    user_email VARCHAR(255),
    -- Jede Tabelle benötigt in einer Relationalen Datenbank einen Primärschlüssel
    -- damit jeder Datensatz eineindeutig identifizert werden kann
    PRIMARY KEY(user_id)
)

-- Fügt Datensatz in eine Tabelle
INSERT INTO tabellen_namen(spaltenname1, spaltenname2)
--Werte die in die Tabelle eingefügt werden sollen
VALUES("saomao", "saomao@gmx.net");

--Ausgabe der Gesamten Tabelle * = "Wildcard"
SELECT * FROM tabellen_namen;

--Ausgabe mit gewünschten Spalten
SELECT spaltenname FROM tabellen_namen;

--Ausgabe aller Daten aus der Tabelle
SELECT * FROM tabellen_namen
--Wo der Spaltenname gleich einem Wert ist
WHERE spaltenname = "saomao";

--Aktualisere einen Datensatz eriner Tabelle mit entsprechenden Wert für Spalte
UPDATE tabellen_namen
SET spaltenname = "darkspacken@yahoo.de"
--WHERE-Bedingung wichtig, ohne diese wird der Wert für alle Datensätze angepasst
WHERE user_id = 2;

--Löscht einen Datensatz aus einer Tabelle
DELETE FROM tabellen_namen
--WHERE-Bedingung wichtig, ohne diese wird der Wert für alle Datensätze gelöscht
WHERE spaltenname = 2;

--Verändert eine Tabelle
ALTER TABLE tabellen_namen 
-- Eine Spalte wird hinzugefügt
ADD spaltenname VARCHAR(255);

--Löscht eine Tabelle aus der Datenbank
DROP TABLE benutzer;

--Löscht die Datenbank
DROP DATABASE users;