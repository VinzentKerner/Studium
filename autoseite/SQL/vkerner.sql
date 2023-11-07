-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: webhosting-db
-- Erstellungszeit: 07. Aug 2023 um 19:09
-- Server-Version: 10.5.19-MariaDB-0+deb11u2
-- PHP-Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `vkerner`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `marken_id` int(11) NOT NULL,
  `erscheinungsjahr` int(4) NOT NULL,
  `autotyp` varchar(30) NOT NULL,
  `sitze` int(2) NOT NULL,
  `motor` varchar(30) NOT NULL,
  `getriebe` varchar(30) NOT NULL,
  `verbrauch` int(2) NOT NULL,
  `score` int(1) NOT NULL,
  `flair_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `cars`
--

INSERT INTO `cars` (`id`, `name`, `marken_id`, `erscheinungsjahr`, `autotyp`, `sitze`, `motor`, `getriebe`, `verbrauch`, `score`, `flair_text`) VALUES
(1, 'T1', 1, 1950, 'Kleinbus', 9, 'Vierzylinder', 'Manuel', 10, 5, 'Zeitlose Eleganz auf vier Rädern - der legendäre VW Transporter T1, ein Oldtimer, der Herzen höher schlagen lässt'),
(2, 'Käfer', 1, 1938, 'Cabriolet', 4, 'Vierzylinder', 'Manuel', 9, 3, 'Ikonische Schönheit und zeitloses Design - der legendäre VW Käfer, ein Oldtimer, der Geschichte geschrieben hat'),
(3, '500', 2, 1957, 'Kombi', 4, 'Zweizylinder', 'Manuel', 7, 2, 'Charmantes Retro-Flair und italienische Eleganz - der bezaubernde Oldtimer Fiat 500, eine zeitlose Legende auf vier Rädern'),
(4, 'R 107', 6, 1971, 'Cabriolet', 2, 'Achtzylinder', 'Manuel/Auto', 15, 4, 'Klassische Klasse und zeitlose Raffinesse - der beeindruckende Oldtimer Mercedes-Benz R 107, eine fahrende Legende'),
(5, '356', 3, 1948, 'Roadster', 2, 'Vierzylinder', 'Manuel', 10, 3, 'Unvergängliche Eleganz und Rennsport-Geschichte vereint - der legendäre Oldtimer Porsche 356, eine Ikone auf der Straße und der Rennstrecke'),
(6, '911', 3, 1964, 'Coupé', 2, 'Sechszylinder', 'Manuel/Auto', 12, 4, 'Kultstatus auf Rädern - der legendäre Oldtimer Porsche 911, zeitloses Design und unvergleichliche Performance in einem'),
(7, 'Mustang', 5, 1965, 'Muscle-Car', 4, 'Sechszylinder', 'Manuel', 15, 5, 'Rohe Kraft und ikonisches Design - der legendäre Oldtimer Ford Mustang, ein Muscle Car, das Herzen schneller schlagen lässt'),
(8, 'DS', 4, 1955, 'Limousine', 5, 'Vierzylinder', 'Manuel/Auto', 12, 1, 'Revolutionäres Design und französische Eleganz - der zeitlose Oldtimer Citroën DS, ein Symbol der automobilen Kunst und Innovation');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `cars_id` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `comments`
--

INSERT INTO `comments` (`cid`, `cars_id`, `uid`, `date`, `message`) VALUES
(69, 8, 'Anonymous', '2023-08-06 02:10:15', 'ersten comment auto 8'),
(72, 1, 'Anonymous', '2023-08-06 02:10:45', 'testet 1er auto 1!\r\n'),
(75, 1, 'Anonymous', '2023-08-07 01:49:58', 'testing'),
(76, 7, 'Anonymous', '2023-08-07 01:50:13', 'Sehr schöner Wagen!');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kosten`
--

CREATE TABLE `kosten` (
  `id` int(11) NOT NULL,
  `cars_id` int(11) NOT NULL,
  `kauf_kosten` int(11) NOT NULL,
  `monat_kosten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kosten`
--

INSERT INTO `kosten` (`id`, `cars_id`, `kauf_kosten`, `monat_kosten`) VALUES
(1, 1, 74490, 340),
(2, 2, 34900, 320),
(3, 3, 13900, 270),
(4, 4, 27500, 460),
(5, 5, 109000, 530),
(6, 6, 69900, 570),
(7, 7, 98500, 610),
(8, 8, 99950, 350);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `marken`
--

CREATE TABLE `marken` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gründungsjahr` int(4) NOT NULL,
  `marken_text` text NOT NULL,
  `land` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `marken`
--

INSERT INTO `marken` (`id`, `name`, `gründungsjahr`, `marken_text`, `land`) VALUES
(1, 'Volkswagen', 1937, 'Die Markenphilosophie von VW basiert auf Qualität, Innovation und Nachhaltigkeit. Sie streben nach herausragenden Fahrzeugen, fortschrittlicher Technologie und umweltfreundlicher Mobilität. VW verbindet Tradition mit zukunftsorientiertem Denken, um Kunden weltweit zu begeistern.', 'Deutschland'),
(2, 'Fiat', 1899, 'Die Markenphilosophie von Fiat beruht auf Leidenschaft, Kreativität und erschwinglicher Mobilität. Seit ihrer Gründung im Jahr 1899 verkörpert Fiat italienischen Stil, innovative Lösungen und Freude am Fahren. Die Marke setzt auf vielseitige und zuverlässige Fahrzeuge, um das Leben der Menschen zu bereichern.', 'Italien'),
(3, 'Porsche', 1931, 'Die Markenphilosophie von Porsche ist geprägt von Performance, Eleganz und Faszination. Seit 1948 steht die Marke für exzellente Sportwagen, die Technik und Design in Perfektion vereinen. Porsche strebt nach außergewöhnlichen Fahrerlebnissen und Innovationsführerschaft, um die Leidenschaft für automobile Exzellenz in jedem Modell zum Ausdruck zu bringen.', 'Deutschland'),
(4, 'Citroën', 1919, 'Die Markenphilosophie von Citroën basiert auf Kreativität, Komfort und Avantgarde. Seit 1919 steht die Marke für innovative Fahrzeuge, die das Leben der Menschen bereichern. Citroën vereint französische Eleganz mit technischem Fortschritt, um ein einzigartiges Fahrerlebnis zu schaffen. Ihr Ziel ist es, Mobilität für alle zugänglich zu machen und die Zukunft der Automobilbranche nachhaltig zu gestalten.', 'Frankreich'),
(5, 'Ford', 1888, 'Die Markenphilosophie von Ford ist geprägt von Tradition, Innovation und Zugänglichkeit. Seit über einem Jahrhundert steht Ford für erschwingliche und zuverlässige Fahrzeuge, die das Leben der Menschen verbessern. Die Marke verfolgt den Anspruch, moderne Technologien und fortschrittliches Design in ihre Fahrzeuge zu integrieren, um ihren Kunden ein komfortables und sicheres Fahrerlebnis zu bieten. Ford engagiert sich auch für Nachhaltigkeit und setzt sich für die Zukunft der Mobilität ein.', 'USA'),
(6, 'Mercedes-Benz', 1901, 'Die Markenphilosophie von Mercedes-Benz vereint Tradition, Innovation und Luxus. Seit ihrer Gründung im Jahr 1901 steht die Marke für erstklassige Fahrzeuge, die höchste Standards in Qualität und Technologie setzen. Mercedes-Benz strebt nach Exzellenz in Design und Leistung, um ihren Kunden ein unvergleichliches Fahrerlebnis zu bieten. Dabei verfolgt die Marke auch eine zukunftsorientierte Vision für nachhaltige Mobilität und Sicherheit auf den Straßen.', 'Deutschland');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marken_id` (`marken_id`);

--
-- Indizes für die Tabelle `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cars_id` (`cars_id`);

--
-- Indizes für die Tabelle `kosten`
--
ALTER TABLE `kosten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_id` (`cars_id`);

--
-- Indizes für die Tabelle `marken`
--
ALTER TABLE `marken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT für Tabelle `kosten`
--
ALTER TABLE `kosten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `marken`
--
ALTER TABLE `marken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`marken_id`) REFERENCES `marken` (`id`);

--
-- Constraints der Tabelle `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `cars_id` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`);

--
-- Constraints der Tabelle `kosten`
--
ALTER TABLE `kosten`
  ADD CONSTRAINT `kosten_ibfk_1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
