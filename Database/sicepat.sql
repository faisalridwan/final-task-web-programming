-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2019 pada 05.16
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
-- Database: `sicepat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(10) NOT NULL,
  `namaadmin` varchar(50) NOT NULL,
  `useradmin` varchar(30) NOT NULL,
  `passadmin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `namaadmin`, `useradmin`, `passadmin`) VALUES
(5, 'as', '12', 'f970e2767d0cfe75876ea857f92e31'),
(9, 'Faisal Ridwan siregar', 'faisal', 'faisal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `kodekota` varchar(3) NOT NULL,
  `namakota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`kodekota`, `namakota`) VALUES
('BDG', 'Bandungg'),
('JKT', 'Jakarta'),
('SLO', 'Solo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `notlp` int(15) NOT NULL,
  `kodekota` varchar(3) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `notlp`, `kodekota`, `alamat`) VALUES
(1, 'Ucoks BABA', 'ucok@ucok.com', 82278756, 'SLO', 'Jl Bojong Soang'),
(3, 'Faisal Ridwan Siregar', 'faisalridwansiregar@gmail.com', 2147483647, 'JKT', 'Jl Bojong Soang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `idlayanan` int(1) NOT NULL,
  `layanan` varchar(20) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`idlayanan`, `layanan`, `biaya`) VALUES
(1, 'Regular', 6000),
(2, 'Best', 8000),
(3, 'Cargo', 15000),
(4, 'Cash On Delivery', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `noresi` int(30) NOT NULL,
  `idlayanan` int(1) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `pengirim` varchar(10) NOT NULL,
  `tglpengiriman` varchar(20) NOT NULL,
  `namapenerima` varchar(20) NOT NULL,
  `tglpenerimaan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`noresi`, `idlayanan`, `asal`, `tujuan`, `pengirim`, `tglpengiriman`, `namapenerima`, `tglpenerimaan`, `status`) VALUES
(12, 1, '12', '12', '12', '12', '', '', 'SHIPMENT RECEIVED'),
(123123, 2, '1231', '123', '123', '123', '12312', '', 'ON TRANSIT'),
(1212121212, 1, 'BDG', 'BDG', '21', '12', '', '', 'SHIPMENT RECEIVED'),
(1212312323, 1, 'BDG', 'SLO', 'asas', '2019-04-18', '', '', 'SHIPMENT RECEIVED');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`),
  ADD UNIQUE KEY `useradmin` (`useradmin`),
  ADD UNIQUE KEY `useradmin_2` (`useradmin`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kodekota`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kota_fk` (`kodekota`) USING BTREE;

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`idlayanan`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`noresi`),
  ADD KEY `id_layanan_fk` (`idlayanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `idlayanan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `	id_kota_fk` FOREIGN KEY (`kodekota`) REFERENCES `kota` (`kodekota`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `	id_layanan_fk` FOREIGN KEY (`idlayanan`) REFERENCES `pengiriman` (`idlayanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
