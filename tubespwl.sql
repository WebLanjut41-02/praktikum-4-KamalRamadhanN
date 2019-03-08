-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2019 pada 04.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `poliklinik` varchar(12) NOT NULL,
  `namadokter` varchar(35) NOT NULL,
  `jadwal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `poliklinik`, `namadokter`, `jadwal`) VALUES
(1, 'Urologi', 'Dr.H.Kamal Ramadhan N', 'Senin s/d Jumat 07.00-11.00'),
(2, 'THT', 'Dr.Rfiki Burhannudin', 'Senin s/d Kamis 07.00-11.00'),
(3, 'GIGI', 'Dr.M.Ikhsan Herdi Fajrianto', 'Senin s/d Rabu 09.00-14.00'),
(8, 'Perawatan Mu', 'Drs.Musyahid Abror', 'Senin s/d Kamis 07.30-10.30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasbar`
--

CREATE TABLE `pasbar` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempatlahir` varchar(25) NOT NULL,
  `tanggallahir` date NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasbar`
--

INSERT INTO `pasbar` (`id`, `nama`, `tempatlahir`, `tanggallahir`, `nohp`) VALUES
(1, '', '', '0000-00-00', ''),
(2, 'Kamal', 'Cirebon', '2000-01-04', '0895351128786'),
(3, 'Kamal Ramadhan Nurchayo', 'Cirebon', '2000-01-04', '0895351128786'),
(4, 'Kamal Ramadhan Nurchayo', 'Cirebon', '0000-00-00', ''),
(5, 'Kamal Ramadhan Nurchayo', 'Cirebon', '2000-01-04', '081395845049'),
(6, 'KamalRamadhanNurchayo', 'Cirebon', '2000-01-04', '081395845049'),
(7, 'KamalRN', 'Cirebon', '2000-01-04', '081395845049'),
(8, 'Rifki Burhanudin', 'Klaten', '2001-09-09', '08123746283'),
(9, 'Rifki Burhanudin', 'Klaten', '2001-09-09', '08123746283'),
(10, 'Kamal amawC', 'Cirebon', '2008-09-09', '83946238743'),
(11, 'Kamal amawC', 'Cirebon', '2008-09-09', '83946238743');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paslam`
--

CREATE TABLE `paslam` (
  `id2` int(11) NOT NULL,
  `norkm` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paslam`
--

INSERT INTO `paslam` (`id2`, `norkm`, `nama`, `alamat`, `nohp`) VALUES
(1, '001', 'Kamal Ramadhan Nurcahyo', 'Jalan Dokter Cipto Mangunkusumu Komplek Asrama CPM No 39', '0895351128786');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pempol`
--

CREATE TABLE `pempol` (
  `id1` int(11) NOT NULL,
  `pilpol` varchar(20) NOT NULL,
  `tglkun` date NOT NULL,
  `pembayaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pempol`
--

INSERT INTO `pempol` (`id1`, `pilpol`, `tglkun`, `pembayaran`) VALUES
(1, 'Kardiologi', '2019-02-19', 'BPJS'),
(2, 'Kardiologi', '2019-02-19', 'BPJS'),
(3, 'Urologi', '2019-02-19', 'Umum'),
(4, 'Urologi', '2019-02-19', 'BPJS'),
(5, 'Urologi', '2019-03-08', 'Umum'),
(6, 'Urologi', '2019-03-08', 'Umum'),
(7, 'Kardiologi', '2019-03-08', 'BPJS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasbar`
--
ALTER TABLE `pasbar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paslam`
--
ALTER TABLE `paslam`
  ADD PRIMARY KEY (`id2`);

--
-- Indeks untuk tabel `pempol`
--
ALTER TABLE `pempol`
  ADD PRIMARY KEY (`id1`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pasbar`
--
ALTER TABLE `pasbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `paslam`
--
ALTER TABLE `paslam`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pempol`
--
ALTER TABLE `pempol`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
