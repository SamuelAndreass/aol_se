-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 02:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aol_se`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `namaUser` varchar(50) DEFAULT NULL,
  `emailUser` varchar(50) DEFAULT NULL,
  `userPassword` varchar(50) DEFAULT NULL,
  `nomorTelpon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`namaUser`, `emailUser`, `userPassword`, `nomorTelpon`) VALUES
('', '', '', NULL),
('sda', 'tes@gmail.com', 'asd', NULL),
('aa', 'hfg@gmail.com', 'asd', 'aaaaa');
COMMIT;

CREATE TABLE `kos` (
  `idKos` int(11) NOT NULL AUTO_INCREMENT,
  `namaKos` varchar(255) NOT NULL,
  `hargaKos` decimal(10,2) NOT NULL,
  `gambarKos` varchar(255) DEFAULT NULL,
  `alamatKos` text DEFAULT NULL,
  PRIMARY KEY (`idKos`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci

--Dummy data for dynamic content
INSERT INTO kos (namaKos, hargaKos, gambarKos, alamatKos)
VALUES ('kosJackpot', 200.50, 'kosJackpot.jpg', 'Jalan Kaki No. 1'),
       ('kosNahihi', 180.00, 'kosNahihi.jpg', 'Jalan tanya saya No. 2');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
