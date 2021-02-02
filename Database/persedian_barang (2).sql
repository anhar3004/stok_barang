-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2021 pada 12.37
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persedian_barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_kategori` varchar(20) NOT NULL,
  `stok_barang` int(10) NOT NULL,
  `lokasi_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`kode_barang`, `nama_barang`, `kode_kategori`, `stok_barang`, `lokasi_barang`) VALUES
('BRG001', 'CODORAI SALUR 2 X2  PINK', 'ID001', 50, 'gudang 1'),
('BRG002', 'CODORAI SALUR 2 X2  GREY', 'ID001', 50, 'gudang 1'),
('BRG003', 'CODORAI SALUR 2 X2  NAVY', 'ID001', 50, 'gudang 1'),
('BRG004', 'CODORAI SALUR 2 X2  MAROON', 'ID001', 50, 'gudang 1'),
('BRG005', 'CODORAI SALUR 2 X2  KOPI', 'ID001', 50, 'gudang 1'),
('BRG006', 'CODORAI SALUR 2 X2  TOSCA', 'ID001', 50, 'gudang 1'),
('BRG007', 'CODORAI SALUR 2 X2  MILO', 'ID001', 50, 'gudang 1'),
('BRG008', 'CODORAI SALUR 3 X1  PINK', 'ID001', 50, 'gudang 1'),
('BRG009', 'CODORAI SALUR 3 X1  GREY', 'ID001', 50, 'gudang 1'),
('BRG010', 'CODORAI SALUR 3 X1  NAVY', 'ID001', 50, 'gudang 1'),
('BRG011', 'CODORAI SALUR 3 X1  TOSCA', 'ID001', 50, 'gudang 1'),
('BRG012', 'CODORAI SALUR 3 X1  MILO', 'ID001', 50, 'gudang 1'),
('BRG013', 'CORAK DADU  GR200  HITAM', 'ID002', 50, 'gudang 1'),
('BRG014', 'CORAK DADU  GR200  GREY', 'ID002', 50, 'gudang 1'),
('BRG015', 'CORAK DADU  GR200  NAVY', 'ID002', 50, 'gudang 1'),
('BRG016', 'CORAK DADU  GR200  MAROON', 'ID002', 50, 'gudang 1'),
('BRG017', 'CORAK DADU  GR200  MILO', 'ID002', 50, 'gudang 1'),
('BRG018', 'DENIM CELUP NAVY 260', 'ID003', 50, 'gudang 1'),
('BRG019', 'DENIM CELUP HITAM 26', 'ID003', 50, 'gudang 1'),
('BRG020', 'DENIM CELUP KOPI 260', 'ID003', 50, 'gudang 1'),
('BRG021', 'DIAMON GLITTER  HITAM', 'ID004', 50, 'gudang 1'),
('BRG022', 'DIAMON GLITTER  DUSTY PINK', 'ID004', 50, 'gudang 1'),
('BRG023', 'DIAMON GLITTER  ABU', 'ID004', 50, 'gudang 1'),
('BRG024', 'DIAMON GLITTER  NAVY', 'ID004', 50, 'gudang 1'),
('BRG025', 'DIAMON GLITTER  MAROON', 'ID004', 50, 'gudang 1'),
('BRG026', 'DIAMON GLITTER  FANTA', 'ID004', 50, 'gudang 1'),
('BRG027', 'DIAMON GLITTER  MERAH CABE', 'ID004', 50, 'gudang 1'),
('BRG028', 'DIAMON GLITTER  MILO', 'ID004', 50, 'gudang 1'),
('BRG029', 'DIAMON GLITTER DARMA WANITA', 'ID004', 50, 'gudang 1'),
('BRG030', 'DIAMON GLITTER GR 190  PLUM', 'ID004', 50, 'gudang 1'),
('BRG031', 'DIAMON GLITTER GR 190   ABU', 'ID004', 50, 'gudang 1'),
('BRG032', 'DIAMON GLITTER  PLUM', 'ID004', 50, 'gudang 1'),
('BRG033', 'DIAMON GLITER HITAM A1', 'ID004', 50, 'gudang 1'),
('BRG034', 'DIAMON GLITER MILO A1', 'ID004', 50, 'gudang 1'),
('BRG035', 'DIAMON GLITTER GR.180 L.80  ABU', 'ID004', 50, 'gudang 2'),
('BRG036', 'HYGET  GR 130  MILO', 'ID005', 50, 'gudang 2'),
('BRG037', 'HYGET  GR 130  PLUM', 'ID005', 50, 'gudang 2'),
('BRG038', 'HYGET  GR 130  DADU/DW', 'ID005', 50, 'gudang 2'),
('BRG039', 'HYGET  GR 130  TOSCA TUA', 'ID005', 50, 'gudang 2'),
('BRG040', 'HYGET  GR 130  COKLAT MUDA', 'ID005', 50, 'gudang 2'),
('BRG041', 'HYGET  GR 130  COKLAT TUA', 'ID005', 50, 'gudang 2'),
('BRG042', 'HYGET  GR 130  BIRU MUDA', 'ID005', 50, 'gudang 2'),
('BRG043', 'HYGET  GR 130  PINK MUDA', 'ID005', 50, 'gudang 2'),
('BRG044', 'HYGET  GR 130  COKLAT SD', 'ID005', 50, 'gudang 2'),
('BRG045', 'HYGET  GR 130  KUNING MUDA', 'ID005', 50, 'gudang 2'),
('BRG046', 'HYGET  GR 130  UNGU SDT', 'ID005', 50, 'gudang 2'),
('BRG047', 'HYGET  GR 130  TOSCA SDT', 'ID005', 50, 'gudang 2'),
('BRG048', 'HYGET  GR 130  HIJAU FUJI', 'ID005', 50, 'gudang 2'),
('BRG049', 'HYGET  GR 140  L.81 HITAM', 'ID005', 50, 'gudang 2'),
('BRG050', 'HYGET  GR 180  HITAM', 'ID005', 50, 'gudang 2'),
('BRG051', 'SCUBA GLITER GR.220 L.83  HITAM', 'ID006', 50, 'gudang 2'),
('BRG052', 'SCUBA GLITER GR.220 L.80  HITAM', 'ID006', 50, 'gudang 2'),
('BRG053', 'SCUBA GLITER GR.220 L.83  ABU', 'ID006', 50, 'gudang 2'),
('BRG054', ' SCUBA GLITER GR.220 L.80  ABU', 'ID006', 50, 'gudang 2'),
('BRG055', 'SCUBA GLITER GR.220 L.83  NAVY', 'ID006', 50, 'gudang 2'),
('BRG056', ' SCUBA GLITER GR.220 L.80  NAVY', 'ID006', 50, 'gudang 2'),
('BRG057', 'SCUBA GLITER GR.220 L.83  MARON', 'ID006', 50, 'gudang 2'),
('BRG058', 'SCUBA GLITER GR.220 L.80 MARON', 'ID006', 50, 'gudang 2'),
('BRG059', ' SCUBA GLITER GR.220 L.80  MILO', 'ID006', 50, 'gudang 2'),
('BRG060', ' SCUBA GLITER GR.240 L.80  HITAM', 'ID006', 50, 'gudang 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_departement`
--

CREATE TABLE `tb_departement` (
  `kode_departement` varchar(20) NOT NULL,
  `nama_departement` varchar(20) NOT NULL,
  `no_telephone` int(20) NOT NULL,
  `nama_manager` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_departement`
--

INSERT INTO `tb_departement` (`kode_departement`, `nama_departement`, `no_telephone`, `nama_manager`) VALUES
('DPT003', 'Kepala Gudang 1', 2147483647, 'Dendi Renaldi'),
('DPT004', 'Kepala Gudang 2', 225439878, 'Sandi Alif'),
('DPT005', 'Head Office', 22784646, 'Anhar Hadhitya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kode_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kode_kategori`, `nama_kategori`) VALUES
('ID001', 'CODORAI'),
('ID002', 'CORAK DADU'),
('ID003', 'DENIM'),
('ID004', 'DIAMONT GLITTER'),
('ID005', 'HYGET'),
('ID006', 'SCUBA'),
('ID007', 'SPANDEX BALON'),
('ID008', 'SPANDEX BILABONG'),
('ID009', 'SPANDEX PE'),
('ID010', 'SPANDEX RAYON SUPER'),
('ID011', 'SUTRA SALUR'),
('ID012', 'WAFFLE BABAT'),
('ID013', 'WAFFLE CELUP'),
('ID014', 'WAFFLE JAGUNG'),
('ID015', 'WAFFLE JELLY');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `status_admin` varchar(20) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `nama_admin`, `status_admin`, `picture`) VALUES
('ADM004', 'anhar', '68aacc5d77146a2398ca64c5c3c596f6', 'Anhar Hadhitya', 'admin', 'anhar.jpg'),
('ADM005', 'shandy', '11ecb7ec5b5052063748800c9b8e5c46', 'shandy Alif Ramadhan', 'user', 'pp.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `tb_departement`
--
ALTER TABLE `tb_departement`
  ADD PRIMARY KEY (`kode_departement`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
