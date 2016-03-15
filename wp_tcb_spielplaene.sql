-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Mrz 2016 um 23:44
-- Server Version: 5.6.20
-- PHP-Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `wordpress`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wp_tcb_spielplaene`
--

CREATE TABLE IF NOT EXISTS `wp_tcb_spielplaene` (
`id` int(25) NOT NULL,
  `termin` varchar(25) NOT NULL,
  `heim` varchar(25) NOT NULL,
  `gast` varchar(25) NOT NULL,
  `einz_heim_spieler1` varchar(25) NOT NULL,
  `einz_gast_spieler1` varchar(25) NOT NULL,
  `einz_heim_spieler2` varchar(25) NOT NULL,
  `einz_gast_spieler2` varchar(25) NOT NULL,
  `einz_heim_spieler3` varchar(25) NOT NULL,
  `einz_gast_spieler3` varchar(25) NOT NULL,
  `einz_heim_spieler4` varchar(25) NOT NULL,
  `einz_gast_spieler4` varchar(25) NOT NULL,
  `einz_sp1_satz11` int(25) NOT NULL,
  `einz_sp1_satz12` int(25) NOT NULL,
  `einz_sp1_satz21` int(25) NOT NULL,
  `einz_sp1_satz22` int(25) NOT NULL,
  `einz_sp1_satz31` int(25) NOT NULL,
  `einz_sp1_satz32` int(25) NOT NULL,
  `einz_sp2_satz11` int(25) NOT NULL,
  `einz_sp2_satz12` int(25) NOT NULL,
  `einz_sp2_satz21` int(25) NOT NULL,
  `einz_sp2_satz22` int(25) NOT NULL,
  `einz_sp2_satz31` int(25) NOT NULL,
  `einz_sp2_satz32` int(25) NOT NULL,
  `einz_sp3_satz11` int(25) NOT NULL,
  `einz_sp3_satz12` int(25) NOT NULL,
  `einz_sp3_satz21` int(25) NOT NULL,
  `einz_sp3_satz22` int(25) NOT NULL,
  `einz_sp3_satz31` int(25) NOT NULL,
  `einz_sp3_satz32` int(25) NOT NULL,
  `einz_sp4_satz11` int(25) NOT NULL,
  `einz_sp4_satz12` int(25) NOT NULL,
  `einz_sp4_satz21` int(25) NOT NULL,
  `einz_sp4_satz22` int(25) NOT NULL,
  `einz_sp4_satz31` int(25) NOT NULL,
  `einz_sp4_satz32` int(25) NOT NULL,
  `dop1_heim_spieler1` varchar(25) NOT NULL,
  `dop1_heim_spieler2` varchar(25) NOT NULL,
  `dop1_gast_spieler1` varchar(25) NOT NULL,
  `dop1_gast_spieler2` varchar(25) NOT NULL,
  `dop2_heim_spieler1` varchar(25) NOT NULL,
  `dop2_heim_spieler2` varchar(25) NOT NULL,
  `dop2_gast_spieler1` varchar(25) NOT NULL,
  `dop2_gast_spieler2` varchar(25) NOT NULL,
  `dop1_satz11` int(25) NOT NULL,
  `dop1_satz12` int(25) NOT NULL,
  `dop1_satz21` int(25) NOT NULL,
  `dop1_satz22` int(25) NOT NULL,
  `dop1_satz31` int(25) NOT NULL,
  `dop1_satz32` int(25) NOT NULL,
  `dop2_satz11` int(25) NOT NULL,
  `dop2_satz12` int(25) NOT NULL,
  `dop2_satz21` int(25) NOT NULL,
  `dop2_satz22` int(25) NOT NULL,
  `dop2_satz31` int(25) NOT NULL,
  `dop2_satz32` int(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `wp_tcb_spielplaene`
--

INSERT INTO `wp_tcb_spielplaene` (`id`, `termin`, `heim`, `gast`, `einz_heim_spieler1`, `einz_gast_spieler1`, `einz_heim_spieler2`, `einz_gast_spieler2`, `einz_heim_spieler3`, `einz_gast_spieler3`, `einz_heim_spieler4`, `einz_gast_spieler4`, `einz_sp1_satz11`, `einz_sp1_satz12`, `einz_sp1_satz21`, `einz_sp1_satz22`, `einz_sp1_satz31`, `einz_sp1_satz32`, `einz_sp2_satz11`, `einz_sp2_satz12`, `einz_sp2_satz21`, `einz_sp2_satz22`, `einz_sp2_satz31`, `einz_sp2_satz32`, `einz_sp3_satz11`, `einz_sp3_satz12`, `einz_sp3_satz21`, `einz_sp3_satz22`, `einz_sp3_satz31`, `einz_sp3_satz32`, `einz_sp4_satz11`, `einz_sp4_satz12`, `einz_sp4_satz21`, `einz_sp4_satz22`, `einz_sp4_satz31`, `einz_sp4_satz32`, `dop1_heim_spieler1`, `dop1_heim_spieler2`, `dop1_gast_spieler1`, `dop1_gast_spieler2`, `dop2_heim_spieler1`, `dop2_heim_spieler2`, `dop2_gast_spieler1`, `dop2_gast_spieler2`, `dop1_satz11`, `dop1_satz12`, `dop1_satz21`, `dop1_satz22`, `dop1_satz31`, `dop1_satz32`, `dop2_satz11`, `dop2_satz12`, `dop2_satz21`, `dop2_satz22`, `dop2_satz31`, `dop2_satz32`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '2016-03-02', 'TCB WMWEE', 'GASTMANNSCHAFT', '', '', 'Anche', 'sad', '', '', '', '', 1, 1, 1, 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_tcb_spielplaene`
--
ALTER TABLE `wp_tcb_spielplaene`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_tcb_spielplaene`
--
ALTER TABLE `wp_tcb_spielplaene`
MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
