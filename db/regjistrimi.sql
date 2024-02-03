-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 04:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regjistrimi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakti`
--

CREATE TABLE `kontakti` (
  `id_kontakti` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mesazhi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontakti`
--

INSERT INTO `kontakti` (`id_kontakti`, `emri`, `mbiemri`, `email`, `mesazhi`) VALUES
(4, 'erand', 'xani', 'xanierand@gmail.com', 'asdas as das as  asdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdasasdas '),
(5, 'Beqir', 'Xani', 'xanibeqa@gmail.com', 'Ishalla i marr pikt e plota:)');

-- --------------------------------------------------------

--
-- Table structure for table `lajmet`
--

CREATE TABLE `lajmet` (
  `id_lajmi` int(11) NOT NULL,
  `titulli` text NOT NULL,
  `permbajtja` text NOT NULL,
  `modifikuesi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lajmet`
--

INSERT INTO `lajmet` (`id_lajmi`, `titulli`, `permbajtja`, `modifikuesi`) VALUES
(1, 'Lajmi rreth arritjes së aparaturës së re në laborator është bërë publik.', 'Ne laboratorin tonë, kemi marrë aparaturë të re për kontrollin e sëmundjes së kancerit, duke mundësuar kështu kontrolle më të holësishme në lidhje me këtë sëmundje.', 'erand'),
(15, 'Pjesëmarrja jonë në konferencën rreth zbulimit të medikamenteve.', 'Konferenca rreth mjekësive për luftën kundër sëmundjeve të melqis është mbajtur në Berlin, ku udhëheqësit e laboratorit tonë morën pjesë dhe ndanë pervojat e tyre të ndryshme në këtë fushë.', 'Blenard'),
(22, 'Vizitë nga një ekspert i fushës së medikamenteve në laboratorin tonë.\n', 'Dr. Paul Farmer, themeluesi i organizatës \'Partners In Health\', ka vizituar laboratorin tonë dhe është ndar shumë i kënaqur me kushtet dhe mundësitë që ofron stafi dhe laboratori ynë.\n\n', 'Blenard');

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesit`
--

CREATE TABLE `perdoruesit` (
  `id` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fjalekalimi` varchar(50) NOT NULL,
  `roli` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perdoruesit`
--

INSERT INTO `perdoruesit` (`id`, `emri`, `email`, `fjalekalimi`, `roli`) VALUES
(20, 'erand', 'xanierand@gmail.com', 'Erandi123', 1),
(21, 'beqir', 'xanibeqa@gmail.com', 'Beqa1234', 0),
(22, 'Blenard', 'blenard@gmail.com', 'Blenardi123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produktet`
--

CREATE TABLE `produktet` (
  `id_produkti` int(11) NOT NULL,
  `emri` varchar(120) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `modifikuesi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produktet`
--

INSERT INTO `produktet` (`id_produkti`, `emri`, `path`, `modifikuesi`) VALUES
(1, 'Acellbia®', 'Acellbia.png', 'erand'),
(2, 'Avegra®', 'avegra.png', 'erand'),
(3, 'Herticad®', 'herticad.png', 'erand'),
(4, 'Levolimab', 'levilimab.png', 'erand'),
(5, 'Prolgolimab', 'prolgolimab1.png', 'erand'),
(6, 'Netakimab', 'netakimab.png', 'erand'),
(7, 'Eculizumab', 'eculizumab.png', 'erand'),
(8, 'Teriflunomid', 'teriflunomid.png', 'Blenard'),
(9, 'Fingolimod', 'fingolimod.png', 'Blenard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakti`
--
ALTER TABLE `kontakti`
  ADD PRIMARY KEY (`id_kontakti`);

--
-- Indexes for table `lajmet`
--
ALTER TABLE `lajmet`
  ADD PRIMARY KEY (`id_lajmi`);

--
-- Indexes for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produktet`
--
ALTER TABLE `produktet`
  ADD PRIMARY KEY (`id_produkti`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontakti`
--
ALTER TABLE `kontakti`
  MODIFY `id_kontakti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lajmet`
--
ALTER TABLE `lajmet`
  MODIFY `id_lajmi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `produktet`
--
ALTER TABLE `produktet`
  MODIFY `id_produkti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
