-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2024 pada 18.17
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

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
-- Struktur dari tabel `kos`
--

CREATE TABLE `kos` (
  `idKos` int(11) NOT NULL,
  `namaKos` varchar(255) NOT NULL,
  `hargaKos` decimal(10,2) NOT NULL,
  `gambarKos` varchar(255) DEFAULT NULL,
  `alamatKos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kos`
--

INSERT INTO `kos` (`idKos`, `namaKos`, `hargaKos`, `gambarKos`, `alamatKos`) VALUES
(3, 'kosJackpot', 200.50, 'kosJackpot.jpg', 'Jalan Kaki No. 1'),
(4, 'kosNahihi', 180.00, 'kosNahihi.jpg', 'Jalan tanya saya No. 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `transactionID` int(11) NOT NULL,
  `transactionDate` date DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `total_penyewa` int(11) DEFAULT NULL,
  `durasi_sewa` int(11) DEFAULT NULL,
  `pencariID` int(11) DEFAULT NULL,
  `idKos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`transactionID`, `transactionDate`, `total_bayar`, `total_penyewa`, `durasi_sewa`, `pencariID`, `idKos`) VALUES
(3, '0000-00-00', 1202000, 1, 1, 8, 3),
(4, '2024-06-29', 1202000, 1, 1, 9, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik_kos`
--

CREATE TABLE `pemilik_kos` (
  `pemilikID` int(11) NOT NULL,
  `namaUser` varchar(50) DEFAULT NULL,
  `emailUser` varchar(50) DEFAULT NULL,
  `userPassword` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `jenisKelamin` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `pendidikanTerakhir` varchar(50) DEFAULT NULL,
  `nomorTelpon` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'pemilik kos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemilik_kos`
--

INSERT INTO `pemilik_kos` (`pemilikID`, `namaUser`, `emailUser`, `userPassword`, `pekerjaan`, `jenisKelamin`, `status`, `pendidikanTerakhir`, `nomorTelpon`, `role`) VALUES
(1, 'aa         ', 'blabla@blabla.com', 'kontolodon123', 'Karyawan', 'Perempuan', 'Kawin', 'S3', '081292127762', 'pemilik kos'),
(5, 'blabla@blabla.com', 'adadadad@gmail.com', 'a', NULL, NULL, NULL, NULL, '0854', 'pemilik kos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencari_kos`
--

CREATE TABLE `pencari_kos` (
  `pencariID` int(11) NOT NULL,
  `namaUser` varchar(50) DEFAULT NULL,
  `emailUser` varchar(50) DEFAULT NULL,
  `userPassword` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `jenisKelamin` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `pendidikanTerakhir` varchar(50) DEFAULT NULL,
  `nomorTelpon` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'pencari kos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pencari_kos`
--

INSERT INTO `pencari_kos` (`pencariID`, `namaUser`, `emailUser`, `userPassword`, `pekerjaan`, `jenisKelamin`, `status`, `pendidikanTerakhir`, `nomorTelpon`, `role`) VALUES
(1, 'admin', NULL, 'admin123', NULL, NULL, NULL, NULL, '08', 'admin'),
(8, 'blabla@blabla.com', 'tes@gmail.com', 'kontolodon2', NULL, NULL, NULL, NULL, '081292127762\r\n', 'pencari kos'),
(9, 'ingodwetrust', 'tes@gmail.com', 'a', NULL, NULL, NULL, NULL, '0812921277622', 'pencari kos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `namaUser` varchar(50) DEFAULT NULL,
  `emailUser` varchar(50) DEFAULT NULL,
  `userPassword` varchar(50) DEFAULT NULL,
  `nomorTelpon` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `jenisKelamin` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pendidikanTerakhir` varchar(255) DEFAULT NULL,
  `usersDOB` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`namaUser`, `emailUser`, `userPassword`, `nomorTelpon`, `id`, `pekerjaan`, `jenisKelamin`, `status`, `pendidikanTerakhir`, `usersDOB`, `role`) VALUES
('admin', NULL, 'admin', NULL, 45, NULL, NULL, NULL, NULL, NULL, 'admin'),
('aa', 'blabla@blabla.com', 'kontolodon123', 'hesoyam', 46, NULL, NULL, NULL, NULL, NULL, NULL),
('blabla@blabla.com', 'tes@gmail.com', 'kontolodon123', '081292127762', 47, NULL, NULL, NULL, NULL, NULL, NULL),
('blabla@blabla.com', 'tes@gmail.com', 'kontolodon123', '081292127762', 48, NULL, NULL, NULL, NULL, NULL, NULL),
('blabla@blabla.com', 'tes@gmail.com', 'kontolodon123', '08', 49, NULL, NULL, NULL, NULL, NULL, NULL),
('blabla@blabla.com', 'tes@gmail.com', 'kontolodon123', '08', 50, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kos`
--
ALTER TABLE `kos`
  ADD PRIMARY KEY (`idKos`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`transactionID`),
  ADD KEY `pencariID` (`pencariID`),
  ADD KEY `idKos` (`idKos`);

--
-- Indeks untuk tabel `pemilik_kos`
--
ALTER TABLE `pemilik_kos`
  ADD PRIMARY KEY (`pemilikID`);

--
-- Indeks untuk tabel `pencari_kos`
--
ALTER TABLE `pencari_kos`
  ADD PRIMARY KEY (`pencariID`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kos`
--
ALTER TABLE `kos`
  MODIFY `idKos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemilik_kos`
--
ALTER TABLE `pemilik_kos`
  MODIFY `pemilikID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pencari_kos`
--
ALTER TABLE `pencari_kos`
  MODIFY `pencariID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`pencariID`) REFERENCES `pencari_kos` (`pencariID`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`idKos`) REFERENCES `kos` (`idKos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
