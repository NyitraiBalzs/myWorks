-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Jún 08. 17:01
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `nyitrai`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'teszt01', 'asd01');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `etelek`
--

CREATE TABLE `etelek` (
  `ID_kateg` varchar(10) CHARACTER SET utf8 NOT NULL,
  `ID` int(11) NOT NULL,
  `megnevezes` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ar` int(8) NOT NULL,
  `leiras` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `etelek`
--

INSERT INTO `etelek` (`ID_kateg`, `ID`, `megnevezes`, `ar`, `leiras`) VALUES
('ital', 1, 'Latte', 590, 'Kávé, tej, tejhab'),
('tojas', 2, 'omlett', 1200, 'tojás, vaj, olivaolaj, választhatófeltétek: chedar, újhagyma...'),
('napi_m', 5, 'sütőtökkrém leves', 590, 'tejszínes, sütőtökkrémleves'),
('napi_m', 6, 'Tabuleh', 890, 'bulgur, uborka, paradicsom, shalott hagyma, angolzeller, petrezselyem, koriander, gránátalma'),
('B_SZ', 7, 'Penautbutter & Jelly Bagel', 1390, 'Mogyorókrém, Lekvár, Vaj'),
('B_SZ', 8, 'Szalámis Szendvics', 1490, 'Spanyol Chorizo, Aioli, Grana Padano, Savanyított hagyma, Paradicsom'),
('tojas', 9, 'Rántotta', 1390, 'Fél bagel, Saláta. Választható feltétek: sonka, hagyma...'),
('tojas', 10, 'Tükör tojás', 1290, 'Fél bagel, saláta. Választható feltétek: bacon, hagyma...'),
('ital', 11, 'Fekete teák', 650, 'porteli kátor, inchi peitong, angol vacsi'),
('ital', 12, 'Zöld teák', 650, 'Zeitong haitug, Kaizen Roung, Hintah Pailinta'),
('B_SZ', 13, 'Lazacos Szendvics', 1790, 'Füstölt lazac, kapribogyó, rukkola, Grana Padano');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `etelek`
--
ALTER TABLE `etelek`
  ADD PRIMARY KEY (`ID`,`ID_kateg`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `etelek`
--
ALTER TABLE `etelek`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
