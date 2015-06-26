-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 26 jun 2015 om 09:32
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `blok1-am1a`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `userrole` enum('root','administrator','photographer','customer','developer') NOT NULL DEFAULT 'customer',
  `activated` enum('yes','no') NOT NULL DEFAULT 'no',
  `activationdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `userrole`, `activated`, `activationdate`) VALUES
(94, 'm@m.nl', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer', 'yes', '2015-01-12 09:13:01'),
(96, 'administrator@gmail.com', 'e8636ea013e682faf61f56ce1cb1ab5c', 'administrator', 'yes', '2015-01-16 10:09:10'),
(97, 'root@gmail.com', 'e8636ea013e682faf61f56ce1cb1ab5c', 'root', 'yes', '2015-01-16 10:09:44'),
(98, 'photographer@gmail.com', 'e8636ea013e682faf61f56ce1cb1ab5c', 'photographer', 'yes', '2015-01-16 10:10:14'),
(99, 'developer@gmail.com', 'e8636ea013e682faf61f56ce1cb1ab5c', 'developer', 'yes', '2015-01-16 10:12:19'),
(100, 'p@p.nl', '79f3bc8ff611b8a61db05159b419a3b1', 'customer', 'no', '2015-01-19 10:39:47'),
(101, 'peter@p.nl', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer', 'yes', '2015-01-19 10:40:12'),
(102, 'hvanderpley@gmail.com', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer', 'yes', '2015-01-23 13:39:46'),
(103, 'bertvanwagendonk@gmail.com', '772a412d385a889add7fc31cfece6d19', 'customer', 'no', '2015-01-26 10:10:52'),
(104, 'jdeb@gmail.com', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer', 'yes', '2015-01-26 10:19:55'),
(105, 'lvanl@gmail.com', '4e3f24dc03ba6c9b3806ef1a64e46a45', 'customer', 'no', '2015-01-26 10:45:48'),
(106, 'tvana@gmail.com', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer', 'yes', '2015-01-26 10:54:57'),
(107, 'b.van.amelsd@gmail.com', '8f891247345e0154f946282dc7b48fc3', 'customer', 'no', '2015-02-19 15:39:17'),
(108, 'j.van.raven@gmail.com', 'de3e79d9289337ccdf6b078d0404f118', 'customer', 'no', '2015-02-19 15:41:33'),
(109, 't.de.Bok@gmail.com', 'e8636ea013e682faf61f56ce1cb1ab5c', 'customer', 'yes', '2015-02-19 15:43:11');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(200) NOT NULL,
  `photo_description` text NOT NULL,
  `photo_path` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `photo_name`, `photo_description`, `photo_path`) VALUES
(1, 'ghostboy', 'Boek over een jongen', 'http://localhost/2014-2015/fotosjaak.esy.es/images/boeken/ghostboy.jpg'),
(2, 'netrunner', 'Boek over een netrunner', 'http://localhost/2014-2015/fotosjaak.esy.es/images/boeken/netrunner.jpg'),
(3, 'Top Ten Greek Islands', 'Boek over Griekse eilanden', 'http://localhost/2014-2015/fotosjaak.esy.es/images/boeken/toptengreekislands.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(50) NOT NULL,
  `tussenvoegsel` varchar(15) NOT NULL,
  `achternaam` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`) VALUES
(1, 'Peter R.', 'de', 'Vries'),
(4, 'Bertus', 'van', 'Marwijk'),
(5, 'Kees', 'de', 'Vries'),
(6, 'Joop', 'de', 'Echelenstein'),
(9, 'Johan', 'van', 'Echelenstein'),
(11, 'Bert ', 'de', 'Vries'),
(26, 'Bert', 'van', 'Randwijk');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `infix` varchar(50) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`) VALUES
(94, 'Harry', 'van', 'Beckhoven'),
(96, 'jan', 'de', 'administrator'),
(97, 'bert', 'van', 'Root'),
(98, 'harry', 'de', 'Photographer'),
(99, 'Arjan', 'de', 'Ruijter'),
(100, 'peter', 'de', 'pannenkoek'),
(101, 'peter', 'de', 'pannenkoek'),
(102, 'Herman', 'van der', 'Pley'),
(103, 'Bert', 'van', 'Wagendonk'),
(104, 'Jelke', 'de', 'Belke'),
(105, 'Victor', 'van', 'Leeuwendonk'),
(106, 'Terry', 'van', 'Amersfoort'),
(107, 'Bert', 'van', 'Amelsdonk'),
(108, 'Johan', 'van', 'Ravenzwaaij'),
(109, 'Trudy', 'de', 'Bok');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
