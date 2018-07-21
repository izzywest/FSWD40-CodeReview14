-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2018 at 03:41 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.1.19-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr14_sw_bigevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_date` datetime NOT NULL,
  `event_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_capacity` int(11) DEFAULT NULL,
  `event_mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_streetN` int(11) DEFAULT NULL,
  `event_zip` int(11) DEFAULT NULL,
  `event_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_date`, `event_desc`, `event_img`, `event_capacity`, `event_mail`, `event_phone`, `event_url`, `event_type`, `event_street`, `event_streetN`, `event_zip`, `event_city`) VALUES
(18, 'Monet bis Picasso. The Batliner Collection', '2018-07-21 10:00:00', 'The Albertina is home to one of the most important European collections of classical modernist paintings: the Batliner Collection. The works contained therein represent the core holdings of the museum’s Permanent Collection.', 'https://events.wien.info/media/full/Claude_Monet_Blick_auf_V%C3%A9theuil_1.jpg', 232, 'info@albertina.at', '43 1 534 83 0', 'www.albertina.at', 'Art', 'Albertinaplatz', 1, 1010, 'Wien'),
(19, 'Der Prozess', '2018-07-21 20:19:00', 'Dramatisierung - Geirun TINO\r\nRegie & Ausstattung - Geirun TINO', 'https://events.wien.info/media/full/Plakat_Der_Prozess_-_DEZ_2017_1500x1000_wien_info.jpg', 100, 'info@pygmaliontheater.at', '+43 681 20 75 44 96', 'www.pygmaliontheater.at/', 'Theater', 'Alserstraße', 43, 1080, 'Wien'),
(21, 'The Magic Flute', '2018-07-21 19:00:00', 'Opera in two acts by Wolfgang Amadé Mozart\r\nText by Emanuel Schikaneder\r\nFirst performed in Vienna on the 30th of September 1791', 'https://events.wien.info/media/full/kinderzauberfl%C3%B6te_1_1.jpg', 70, 'office@marionettentheater.at', '+43 1 817 32 45', 'www.marionettentheater.at', 'Theater', 'Schloss Schönbrunn', 1, 1130, 'Wien'),
(22, 'Vienna Philharmonic', '2019-01-01 10:00:00', 'It has long been a Philharmonic tradition at the New Year to present a program consisting of the lively and at the same time nostalgic music from the vast repertoire of the family of Johann Strauss and its contemporaries.', 'https://az694788.vo.msecnd.net/lightbox/Images/Orchester/IMG_2987b_1000_jh.JPG', 600, 'info@wienerphilharmoniker.at', '12335487', 'www.wienerphilharmoniker.at', 'Music', 'Musikvereinsplatz', 1, 1010, 'Wien'),
(23, 'Vienna Major 2018', '2018-08-01 00:00:00', 'Vienna is set to become a Mecca for beach volleyball fans again. At the first Vienna Major in the city, the best beach volleyball players will deliver thrilling moments on Danube Island from August 1. to 5.', 'https://www.wien.info/media/images/vienna-major-2018-riesenrad-1to1.jpeg', 1000, 'tickets@beachmajors.com', 'none', 'at.beachmajorseries.com/', 'Sport', 'Donauinsel', 1, 1210, 'Wien'),
(24, 'Discover Vienna by Bicycle', '2019-08-17 00:00:00', 'You can travel fast with a bicycle, but still slowly enough to enjoy Vienna\'s sights on the way. Vienna offers 1.300 kilometers of bicycle paths, some of them in areas with hardly any traffic.', 'https://www.wien.info/media/images/50150-radfahren-fahrrad-ringstrasse-radweg-1to1.jpeg', 400, 'info@radtouren.at', '43 (0) 316 4003', 'www.radtouren.at/en/home.html', 'Sport', 'Ringstraße', 1, 1010, 'Wien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
