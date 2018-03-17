-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 17. Mrz 2018 um 09:50
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `rubleva`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adressen`
--

CREATE TABLE `adressen` (
  `Zaehler` int(11) NOT NULL,
  `Vorname` varchar(60) NOT NULL,
  `Nachname` varchar(60) NOT NULL,
  `Titel` varchar(60) NOT NULL,
  `Firma` varchar(60) NOT NULL,
  `Straße` varchar(60) NOT NULL,
  `Ort` varchar(60) NOT NULL,
  `Bundesland` varchar(60) NOT NULL,
  `Postleitzahl` varchar(60) NOT NULL,
  `Land` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `adressen`
--

INSERT INTO `adressen` (`Zaehler`, `Vorname`, `Nachname`, `Titel`, `Firma`, `Straße`, `Ort`, `Bundesland`, `Postleitzahl`, `Land`) VALUES
(1, 'Alex', 'Rubleva', 'Studentin', 'Promega GmbH', 'Schildkrötstaße 15', 'Mannheim', 'Baden-Württemberg', '68133', 'Deutschland'),
(2, 'Vas', 'Müller', 'Dr', 'UNI', 'C2', 'Mannheim', 'Baden-Württemberg', '68159', 'Deutschland'),
(3, 'Bill', 'Gates', 'CEO', 'Microsoft', 'MS street', 'Redmond', 'Washington', '345763', 'USA'),
(4, 'Bill', 'Linton', 'CEO', 'Promega Corporation', 'Madison', 'Madison', 'Visconsin', '36422', 'USA'),
(5, 'Hans', 'Weller', 'Dozent', 'Weller GmbH', 'D2', 'Mannheim', 'Baden-Württemberg', '68149', 'Deutschland'),
(6, 'Natalia', 'Ruhr', '-', 'Breeze', 'Domodedovskaja', 'Moskau', '-', '115551', 'Russische Föderation');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `adressen`
--
ALTER TABLE `adressen`
  ADD PRIMARY KEY (`Zaehler`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `adressen`
--
ALTER TABLE `adressen`
  MODIFY `Zaehler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
