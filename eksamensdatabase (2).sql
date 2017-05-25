-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25. Mai, 2017 13:13 p.m.
-- Server-versjon: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eksamensdatabase`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `kategorier`
--

CREATE TABLE `kategorier` (
  `ID` int(11) NOT NULL,
  `Kategori` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `kategorier`
--

INSERT INTO `kategorier` (`ID`, `Kategori`) VALUES
(1, 'Mat & Drikke'),
(2, 'Transport'),
(3, 'Shop'),
(4, 'Aktiviteter');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `lokasjoner`
--

CREATE TABLE `lokasjoner` (
  `ID` int(11) NOT NULL,
  `Navn` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Pris` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Avstand` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Open` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Stengetid` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Beskrivelse` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Lenke` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Bilde` varchar(255) CHARACTER SET utf8 NOT NULL,
  `KategoriID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `lokasjoner`
--

INSERT INTO `lokasjoner` (`ID`, `Navn`, `Pris`, `Avstand`, `Open`, `Stengetid`, `Beskrivelse`, `Lenke`, `Bilde`, `KategoriID`) VALUES
(1, 'Mathallen', 'Dyrt', 'Kort', '10:00:00', '22:00:00', 'En arena for unike smaksopplevelser', 'https://mathallenoslo.no/', 'https://upload.wikimedia.org/wikipedia/commons/3/32/Mathallen_Oslo_entrance_south.JPG', 1),
(2, 'Telthusbakken', '', 'Middels', '00:00:00', '00:00:00', 'Busstopp', 'https://ruter.no/reiseplanlegger/Stoppested/(3010331)Telthusbakken/Avganger#st:1,sp:0,bp:0', '', 2),
(3, 'Torso', 'Middels', 'Kort', '08:30:00', '19:00:00', 'Butikk for alt av kunst ', 'http://www.torso.no/Om-Torso/Vaare-butikker/TORSO-Oslo-Vulkan.aspx', '', 3),
(4, 'Grunerløkka Basketbane', 'Gratis', 'Middels', '00:00:00', '00:00:00', 'Her kan du spille basketball hele døgnet men pass på bråk etter klokken 22:00', '', '', 4),
(6, 'Kantina Vulkan', 'Billig', 'Kort', '08:30:00', '15:30:00', 'Et ordentlig måltid til en billig penge. Har også brus og snacks.', 'http://www.vulkanoslo.no/business/kantina/', '', 1),
(7, 'D?gnvill Bar & Burger', 'Middels', 'Kort', '12:00:00', '00:00:00', 'Burgere i høy kvalitet. Også mulighet for å nyte drinker.', 'D?gnvill bar finner du rett i nærheten av Campus Westerdals Vulkan, i det urbane området Vulkan.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/A_party_tray_of_sliders_at_a_restaurant.jpg/1024px-A_party_tray_of_sliders_at_a_restaurant.jpg', 1),
(8, 'Lucky Bird', 'Middels', 'Kort', '15:00:00', '23:00:00', 'Amerikansk mat med en Southern Touch.', 'http://luckybird.no/', '', 1),
(9, 'Espresso House', 'Dyrt', 'Langt', '07:00:00', '20:00:00', 'Populært kaffested med flere lokasjoner i Oslo. De har også eget bakeri!', 'https://no.espressohouse.com/coffee-shops/nordregate/', '', 1),
(10, 'Kaffe & Juice', 'Middels', 'Langt', '07:00:00', '20:00:00', 'I tillegg til kaffe og juice, kan du nyte fersklagde sandwicher.', 'https://www.facebook.com/pages/Kaffe-Juice/192859077545967', '', 1),
(11, 'Vulkan Klatresenter', 'Middels', 'Kort', '10:00:00', '20:00:00', 'Drevet av Kolsås klatreklubb. De har både nybegynnerkurs og klatring for barn/ungdom.', 'http://www.kolsaas.no/', '', 4),
(12, 'Møllerveien', '', 'Middels', '00:00:00', '00:00:00', 'Busstopp', 'https://ruter.no/reiseplanlegger/Stoppested/(3010516)M%C3%B8llerveien/Avganger#st:1,sp:0,bp:0', '', 2),
(13, 'Schoud plass', '', 'Langt', '00:00:00', '00:00:00', 'Buss og trikk', 'https://ruter.no/reiseplanlegger/Stoppested/(3010512)Schous%20plass/Avganger#st:1,sp:0,bp:0', '', 2),
(14, 'Olaf Ryes plass', '', 'Langt', '00:00:00', '00:00:00', 'Buss og trikk', 'https://ruter.no/reiseplanlegger/Stoppested/(3010513)Olaf%20Ryes%20plass%20(Oslo)/Avganger/#st:1,sp:0,bp:0', '', 2),
(15, 'Hendrix Ibsen Aetat', '', 'Kort', '07:00:00', '19:00:00', 'Kaffebar, som tilbyr leie av møtelokaler.', 'http://www.vulkanoslo.no/business/hendrix-ibsen-aetat/', '', 4),
(16, 'Vitus Apotek', 'Middels', 'Kort', '10:00:00', '18:00:00', 'Apotek', 'https://www.vitusapotek.no/vitusapotek/1883?lat=59.9206144&long=10.7514597', '', 3),
(17, 'I.O Frisør', 'Dyrt', 'Kort', '10:00:00', '18:00:00', 'De tilbyr alt innen hår og negler; klipp, farge, keratin kur,styling, extensions,napping og farging av bryn og vipper.', 'http://www.vulkanoslo.no/business/i-o-frisor/', '', 3),
(18, 'Vinmonopolet', 'Dyrt', 'Langt', '10:00:00', '18:00:00', 'Vinmonopolet', 'https://www.vinmonopolet.no/store/115', '', 3),
(19, 'Rema 1000 Vulkan', 'Middels', 'Kort', '07:00:00', '23:00:00', 'Matbutikk', 'https://www.rema.no/', '', 3),
(20, 'Kiwi Markveien', 'Middels', 'Langt', '07:00:00', '23:00:00', 'Matbutikk', 'https://kiwi.no/Finn-butikk/Kiwi-Markveien/', '', 3),
(21, 'Athletica Vulkan', 'Dyrt', 'Kort', '06:00:00', '22:00:00', 'Stort og moderne treningsstudio. Har egne gruppesaler og sykkelsal. Mulighet for barnepass.', 'http://www.vulkanoslo.no/business/sats-vulkan/', '', 4),
(22, 'Parkteatret Scene', 'Dyrt', 'Langt', '12:00:00', '03:00:00', 'Her kan du nyte en øl mens du opplever: konserter,  filmarrangementer, debatter, stand up og klubbkvelder.', 'http://parkteatret.no/parkteatret-scene/', '', 4),
(23, 'Espresso House', 'Dyrt', 'Langt', '07:00:00', '20:00:00', 'Populært kaffested med flere lokasjoner i Oslo. De har også eget bakeri!', 'https://no.espressohouse.com/coffee-shops/nordregate/', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorier`
--
ALTER TABLE `kategorier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lokasjoner`
--
ALTER TABLE `lokasjoner`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `KategoriID` (`KategoriID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorier`
--
ALTER TABLE `kategorier`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lokasjoner`
--
ALTER TABLE `lokasjoner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Begrensninger for dumpede tabeller
--

--
-- Begrensninger for tabell `lokasjoner`
--
ALTER TABLE `lokasjoner`
  ADD CONSTRAINT `lokasjoner_ibfk_1` FOREIGN KEY (`KategoriID`) REFERENCES `kategorier` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
