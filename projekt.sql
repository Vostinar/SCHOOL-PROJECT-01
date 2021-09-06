-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Út 17.Dec 2019, 12:13
-- Verzia serveru: 10.4.8-MariaDB
-- Verzia PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `projekt`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `auto`
--

CREATE TABLE `auto` (
  `ID` int(10) NOT NULL,
  `Znacka` varchar(30) NOT NULL,
  `Firma` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `auto`
--

INSERT INTO `auto` (`ID`, `Znacka`, `Firma`) VALUES
(3, 'aksna', 'dpfjk'),
(4, 'aisdfhasi', 'hfioash'),
(5, 'aisdfhasi', 'hfioash'),
(6, 'Martin', 'Vostinar'),
(7, 'Octavia', 'Skoda');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `sofer`
--

CREATE TABLE `sofer` (
  `ID` int(10) NOT NULL,
  `Meno` varchar(30) NOT NULL,
  `Priezvisko` varchar(30) NOT NULL,
  `Vodicky_preukaz` int(5) DEFAULT NULL,
  `Auto` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `sofer`
--

INSERT INTO `sofer` (`ID`, `Meno`, `Priezvisko`, `Vodicky_preukaz`, `Auto`) VALUES
(6, 'Martin', 'Vostinar', 2, 4),
(8, 'Andrej', 'Toth', 2, 7);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `vodicsky_preukaz`
--

CREATE TABLE `vodicsky_preukaz` (
  `ID` int(10) NOT NULL,
  `Typ_vodicak` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `vodicsky_preukaz`
--

INSERT INTO `vodicsky_preukaz` (`ID`, `Typ_vodicak`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'T');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pre tabuľku `sofer`
--
ALTER TABLE `sofer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pre tabuľku `vodicsky_preukaz`
--
ALTER TABLE `vodicsky_preukaz`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `auto`
--
ALTER TABLE `auto`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `sofer`
--
ALTER TABLE `sofer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pre tabuľku `vodicsky_preukaz`
--
ALTER TABLE `vodicsky_preukaz`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
