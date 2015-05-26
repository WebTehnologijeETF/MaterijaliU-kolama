-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 03:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `materijali`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vijest` int(11) NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `autor` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vijest` (`vijest`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `vijest`, `tekst`, `autor`, `vrijeme`) VALUES
(1, 1, 'ovo je komentar na vijest 1', 'SeferAlen', '2015-05-26 12:24:18'),
(2, 2, 'ovo je komentar na vijest dva', 'ja', '2015-05-26 12:56:09'),
(4, 1, 'na prvu', 'Alen', '2015-05-26 13:03:19'),
(5, 1, 'jos jedan komentzar na prvu vijest', 'llesfd', '2015-05-26 13:03:37'),
(6, 1, 'jos jedan komentzar na prvu vijest', 'llesfd', '2015-05-26 13:03:40'),
(7, 1, 'evo jos malo komentarsianja naprvu viejst', 'Sefer', '2015-05-26 13:03:57'),
(8, 2, 'komentar', 'autor', '2015-05-26 13:28:32'),
(9, 2, 'komentar', 'autor', '2015-05-26 13:28:34'),
(10, 2, 'kjlkj', 'kj', '2015-05-26 13:28:38'),
(11, 2, 'Ovo je neki probni komentar', 'Bob rock', '2015-05-26 13:29:38'),
(12, 2, 'komentar', 'autor', '2015-05-26 13:32:06'),
(13, 2, 'komentar', 'autor', '2015-05-26 13:33:06'),
(14, 2, 'komentar', 'autor', '2015-05-26 13:33:11'),
(15, 2, 'komentar', 'autor', '2015-05-26 13:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE IF NOT EXISTS `vijesti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `slika` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `autor` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `naslov`, `tekst`, `slika`, `autor`, `vrijeme`) VALUES
(1, 'Probna vijest', 'Ovo je samo neka probna vijest sa slikom koja sluzi za testiranje baze podataka.', 'Razmjena.jpg', 'SeferAlen', '2015-05-25 13:39:37'),
(2, 'Cijela BihH', 'Stranica materijali.com sluzi za razmjenu materijala iz svih osnovnih i srednjih skoli u BiH. Posebno je prilagodjena skolama koje rade po Bosanskom planu i programu ali je mogu koristiti i drugi.', 'bih.jpg', 'SeferAlen', '2015-05-25 13:43:47');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `komentari_ibfk_1` FOREIGN KEY (`vijest`) REFERENCES `vijesti` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
