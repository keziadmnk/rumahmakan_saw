-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2025 pada 07.41
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahmakan_saw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama`) VALUES
(5, 'Ampera Bukan Dia'),
(6, 'Kantin Barak UNAND'),
(7, 'Aciak Jaya'),
(43, 'Ayam Gebuk'),
(44, 'Ayam Tokok Balenggek'),
(45, 'Tirta Sari'),
(46, 'Suryani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_alternatif`, `nilai`) VALUES
(1, 5, 0.8821),
(2, 6, 0.8888),
(3, 7, 0.898),
(4, 43, 0.8668),
(5, 44, 0.8874),
(6, 45, 0.9198),
(7, 46, 0.9338);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `type` enum('Benefit','Cost') NOT NULL,
  `bobot` float NOT NULL,
  `ada_pilihan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama`, `type`, `bobot`, `ada_pilihan`) VALUES
(33, 'Harga', 'Benefit', 0.17, 0),
(34, 'Rasa', 'Benefit', 0.19, 0),
(35, 'Jarak', 'Benefit', 0.15, 0),
(36, 'Kecepatan Pelayanan', 'Benefit', 0.16, 0),
(37, 'Variasi Menu', 'Benefit', 0.15, 0),
(38, 'Kenyamanan Tempat', 'Benefit', 0.18, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_alternatif` int(10) NOT NULL,
  `id_kriteria` int(10) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(538, 35, 16, 18),
(539, 35, 17, 22),
(540, 35, 18, 100),
(541, 38, 16, 19),
(542, 38, 17, 22),
(543, 38, 18, 90),
(544, 39, 16, 18),
(545, 39, 17, 23),
(546, 39, 18, 95),
(547, 40, 16, 17),
(548, 40, 17, 24),
(549, 40, 18, 100),
(550, 41, 16, 18),
(551, 41, 17, 23),
(552, 41, 18, 90),
(553, 42, 16, 19),
(554, 42, 17, 23),
(555, 42, 18, 85),
(661, 5, 33, 4.2),
(662, 5, 34, 3.3),
(663, 5, 35, 3.5),
(664, 5, 36, 4.05),
(665, 5, 37, 3.65),
(666, 5, 38, 3.225),
(667, 6, 33, 3.95),
(668, 6, 34, 3.425),
(669, 6, 35, 4.35),
(670, 6, 36, 3.225),
(671, 6, 37, 3.8),
(672, 6, 38, 3.375),
(673, 7, 33, 3.6),
(674, 7, 34, 3.5),
(675, 7, 35, 3.575),
(676, 7, 36, 3.35),
(677, 7, 37, 4.1),
(678, 7, 38, 4.125),
(679, 43, 33, 3.825),
(680, 43, 34, 3.725),
(681, 43, 35, 3),
(682, 43, 36, 3.75),
(683, 43, 37, 3.45),
(684, 43, 38, 3.575),
(685, 44, 33, 4),
(686, 44, 34, 3.675),
(687, 44, 35, 3.25),
(688, 44, 36, 3.8),
(689, 44, 37, 3.525),
(690, 44, 38, 3.675),
(691, 45, 33, 3.5),
(692, 45, 34, 3.925),
(693, 45, 35, 3.5),
(694, 45, 36, 3.675),
(695, 45, 37, 4.075),
(696, 45, 38, 4.025),
(697, 46, 33, 3.725),
(698, 46, 34, 4.1),
(699, 46, 35, 3.5),
(700, 46, 36, 3.775),
(701, 46, 37, 4.025),
(702, 46, 38, 3.925);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub_kriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD UNIQUE KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=703;

--
-- AUTO_INCREMENT untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
