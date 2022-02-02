-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jan 05. 12:36
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `kreativ_otletcentrum`
--
CREATE DATABASE IF NOT EXISTS `kreativ_otletcentrum` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci;
USE `kreativ_otletcentrum`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalo`
--

CREATE TABLE `felhasznalo` (
  `felh_id` int(11) NOT NULL,
  `vez_nev` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `ker_nev` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `felh_email` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `jelszo` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `tel_szam` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `irany_szam` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `varos` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `utca_nev` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `hazszam` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `szerepkor` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kosar`
--

CREATE TABLE `kosar` (
  `termek_id` int(11) NOT NULL,
  `felh_id` int(11) NOT NULL,
  `mennyiseg` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendeles`
--

CREATE TABLE `rendeles` (
  `rendeles id` int(11) NOT NULL,
  `idopont` datetime NOT NULL,
  `osszeg` int(11) NOT NULL,
  `felh_id` int(11) NOT NULL,
  `termek_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termekek`
--

CREATE TABLE `termekek` (
  `termek_id` int(11) NOT NULL,
  `termek_nev` varchar(1000) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `ar` int(255) NOT NULL,
  `mennyiseg` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD PRIMARY KEY (`felh_id`);

--
-- A tábla indexei `kosar`
--
ALTER TABLE `kosar`
  ADD PRIMARY KEY (`termek_id`,`felh_id`);

--
-- A tábla indexei `rendeles`
--
ALTER TABLE `rendeles`
  ADD PRIMARY KEY (`rendeles id`,`felh_id`,`termek_id`);

--
-- A tábla indexei `termekek`
--
ALTER TABLE `termekek`
  ADD PRIMARY KEY (`termek_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalo`
--
ALTER TABLE `felhasznalo`
  MODIFY `felh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `rendeles`
--
ALTER TABLE `rendeles`
  MODIFY `rendeles id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `termekek`
--
ALTER TABLE `termekek`
  MODIFY `termek_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
