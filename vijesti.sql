-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2015 at 04:23 PM
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
(2, 'Cijela BihH', 'Stranica materijali.com sluzi za razmjenu materijala iz svih osnovnih i srednjih skoli u BiH. Posebno je prilagodjena skolama koje rade po Bosanskom planu i programu ali je mogu koristiti i drugi.', 'bih.jpg', 'SeferAlen', '2015-05-25 13:43:47'),
(6, 'Proba klizaca', 'Proba klizaca sa novom starom slikom', 'bih.jpg', 'ja', '2015-05-25 14:12:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
