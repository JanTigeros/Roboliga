-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 19. jul 2022 ob 14.08
-- Različica strežnika: 10.4.18-MariaDB
-- Različica PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `roboliga`
--

-- --------------------------------------------------------

--
-- Struktura tabele `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `admins`
--

INSERT INTO `admins` (`id`, `user`, `pass`) VALUES
(9, 'eršadmin', 'e24a52d0448c3b4ff8d5c6ed3573eea879f2517e');

-- --------------------------------------------------------

--
-- Struktura tabele `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` char(100) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `function` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `categories`
--

INSERT INTO `categories` (`id`, `title`, `desc`, `function`) VALUES
(1, 'Kategorija 1', '', 1),
(2, 'Kategorija 2', '', 2),
(16, 'Kategorija 3', '', 3);

-- --------------------------------------------------------

--
-- Struktura tabele `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `text` text COLLATE utf8mb4_slovenian_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `img` varchar(255) COLLATE utf8mb4_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `news`
--

INSERT INTO `news` (`id`, `title`, `subtitle`, `text`, `date`, `img`) VALUES
(4, 'Slavnostna podelitev spričev', 'V sredo, 6. 7. 2022, so dijaki zaključnih letnikov, ki so opravljali poklicno maturo, dopoldan izved', 'V sredo, 6. 7. 2022, so dijaki zaključnih letnikov, ki so opravljali poklicno maturo, dopoldan izvedeli, kako uspešni so bili. V večernem času, ob 18. uri pa smo imeli slavnostno podelitev spričeval poklicne mature v Domu kulture Velenje.\r\n<br/>\r\n<br/>\r\nNa naši šoli je tradicija, da nastopajo maturanti za maturante. Letošnji voditeljski par sta bila Danaj Čebular in Jan Konečnik. Za odlično glasbeno popestritev programa je poskrbela Mia Koper, dijakinja 2. letnika splošne Gimnazije na ŠC Velenje, ki jo je pri eni skladbi na klaviaturi spremljal dijak 4. ET Matej Meža.\r\n<br/>\r\n<br/>\r\nNa podelitvi je bil slavnostni govornik ravnatelj ERŠ, Simon Konečnik, ki je prisotne nagovoril z besedami, da se poslavljamo od generacije zaključnih letnikov, kjer smo imeli skupno 3-letno izobraževanje ob prisotnosti virusa, pa so bili maturanti kljub temu zelo uspešni. Vsem se je tudi zahvalil za odlično sodelovanje in zaželel maturantom srečno izbiro nadaljnjih poti v življenju.\r\n<br/><br/>\r\nPrav tako so svoje maturante nagovorili razredniki zaključnih oddelkov: Nada Pirnat, razredničarka 2. PTI oddelka, dr. Nataša Meh Peer, razredničarka 4. ET oddelka, Biserka Ledinšek, razredničarka 4. TM oddelka, Bojana Vrbnjak, razredničarka 4. TRA oddelka in Urška Koletnik, razredničarka 4. TRB oddelka. Maturantom so razredniki čestitali in jih spodbudili k nadaljnjemu izobraževanju ter jim izročili simbolična darila, obesek za ključe ERŠ, dijakom pa je spričevala poklicne mature podelitev ravnatelj Simon Konečnik.\r\n<br/><br/>\r\nLetos je bilo uspešnih 80 maturantov, na kar smo ponosni, saj je to lep uspeh letošnje generacije.\r\n<br/><br/>\r\n4 maturanti so dosegli 22 točk in ti so postali zlati maturantje, ki so: Jaka Grabner (4. TM), Lovro Napotnik (4. TRA), Danaj Čebular (4. TRB) in Tadej Rebernjak (4. TRB). Posebnost letošnje poklicne mature je, da smo imeli kar dva dijaka, ki sta dosegla vseh 23 točk, kar pomeni, da sta postala diamantna dijaka, in to sta dosegla Jan Konečnik in Matej Meža (oba iz 4. ET). Še nikoli doslej nismo imeli v eni generaciji več kot enega diamantnega maturanta. Zlati in diamantni maturanti so od ravnatelja prejeli priznanje v obliki steklene plakete in spričevalo, ki ga je podpisal minister dr. Igor Papič in od razrednika pravljico za odrasle, Mali princ, v kateri lahko najdemo marsikatero modrost in ena izmed njih je zapisana v posvetilu: »Morala se bom sprijazniti z dvema ali tremi gosenicami, če naj izvem, kakšni so metulji.«\r\n<br/><br/>\r\nVsem dijakom iskreno čestitamo in želimo veliko uspeha na nadaljnji življenjski poti.', '2022-07-19', '9.jpg');

-- --------------------------------------------------------

--
-- Struktura tabele `results`
--

CREATE TABLE `results` (
  `r_id` int(11) NOT NULL,
  `time_1` int(11) DEFAULT NULL,
  `time_2` int(11) DEFAULT NULL,
  `sum` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `results`
--

INSERT INTO `results` (`r_id`, `time_1`, `time_2`, `sum`, `team_id`) VALUES
(1, 0, 100020, 100020, 6),
(2, 2000, 10001, 12001, 5),
(3, 1010, 10000, 11010, 7),
(4, 4000, 1000, 5000, 10),
(6, 55, 1000, 1055, 11),
(11, 4003, 1001, 5004, 12),
(12, 195, 200, 395, 17);

-- --------------------------------------------------------

--
-- Struktura tabele `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `sname` char(100) COLLATE utf8mb4_slovenian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `schools`
--

INSERT INTO `schools` (`id`, `sname`) VALUES
(1, 'ERŠ'),
(2, 'ŠCC KER'),
(3, 'GUM'),
(4, 'GCC'),
(5, 'FERI Maribor'),
(6, 'STŠ Kranj');

-- --------------------------------------------------------

--
-- Struktura tabele `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `t_name` char(100) COLLATE utf8mb4_slovenian_ci DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `u1` char(255) COLLATE utf8mb4_slovenian_ci DEFAULT NULL,
  `u2` char(255) COLLATE utf8mb4_slovenian_ci DEFAULT NULL,
  `u3` char(255) COLLATE utf8mb4_slovenian_ci DEFAULT NULL,
  `u4` char(255) COLLATE utf8mb4_slovenian_ci DEFAULT NULL,
  `u5` char(255) COLLATE utf8mb4_slovenian_ci DEFAULT NULL,
  `m1` char(255) COLLATE utf8mb4_slovenian_ci DEFAULT NULL,
  `m2` char(255) COLLATE utf8mb4_slovenian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;

--
-- Odloži podatke za tabelo `teams`
--

INSERT INTO `teams` (`id`, `t_name`, `school_id`, `category_id`, `u1`, `u2`, `u3`, `u4`, `u5`, `m1`, `m2`) VALUES
(5, 'Dream Team', 1, 1, 'Jan Sajtl', 'Žak Lubej', 'Urh Rošar', 'Tine Založnik', 'Saldin Beganović', 'Rok Urbanc', ''),
(6, 'Bumbar', 2, 2, 'Miha', NULL, NULL, NULL, NULL, 'Tine', NULL),
(7, 'Kekci', 1, 1, 'Jan Sajtl', '', '', '', '', 'Nik Ne', ''),
(9, 'Miha je Zmagal', 1, 1, 'Miha', '', '', '', '', 'Jure G', ''),
(10, 'Mislinja je shit', 1, 1, 'Miki', '', '', '', '', 'Urh R', ''),
(11, 'papka', 2, 2, 'jaka', 'luka', 'tine', 'jfjaf', 'fwedfa', 'Rok Urbanc', 'jure'),
(12, 'klobasice', 2, 2, 'kon', 'kan', 'kin', '', '', 'kin jun jan', ''),
(17, 'Robotki', 6, 16, 'Miha Kekec', 'Jaka Križnik', '', '', '', 'Mitja Meh', '');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksi tabele `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `id` (`r_id`),
  ADD KEY `IX_Relationship5` (`team_id`);

--
-- Indeksi tabele `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeksi tabele `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `IX_Relationship1` (`school_id`),
  ADD KEY `IX_Relationship2` (`category_id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT tabele `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT tabele `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT tabele `results`
--
ALTER TABLE `results`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT tabele `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT tabele `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Omejitve tabel za povzetek stanja
--

--
-- Omejitve za tabelo `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `Relationship5` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Omejitve za tabelo `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `Relationship2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
