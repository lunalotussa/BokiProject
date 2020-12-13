-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 04:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_boki`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset_lancar`
--

CREATE TABLE `aset_lancar` (
  `id_aset_lancar` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aset_lancar`
--

INSERT INTO `aset_lancar` (`id_aset_lancar`, `jenis`, `jumlah`, `nilai`, `total`, `keterangan`, `id_user`) VALUES
(6, 'Kas', 3, 500000, 1500000, 'Kas Awal Toko Boki							', 2),
(7, 'Persediaan', 3, 1000000, 3000000, 'Persediaan Awal Toko Boki', 2),
(8, 'Perlengkapan', 4, 50000, 200000, 'Perlengkapan Awal Toko Boki						', 2),
(15, 'Kas', 0, 0, 0, '', 4),
(16, 'Persediaan', 0, 0, 0, '', 4),
(17, 'Perlengkapan', 0, 0, 0, '', 4),
(18, 'Kas', 273800000, 1, 273800000, 'Saldo Kas Awal						', 5),
(19, 'Persediaan', 0, 0, 0, '', 5),
(20, 'Perlengkapan', 45700000, 1, 45700000, 'Perlengkapan 					', 5),
(24, 'Saldo Awal Piutang', 1, 26500000, 26500000, 'Saldo Awal Piutang Toko Ardin												', 5);

-- --------------------------------------------------------

--
-- Table structure for table `aset_tetap`
--

CREATE TABLE `aset_tetap` (
  `id_aset_tetap` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL,
  `penyusutan` double NOT NULL,
  `lama_dimiliki` int(11) NOT NULL,
  `akumulasi` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aset_tetap`
--

INSERT INTO `aset_tetap` (`id_aset_tetap`, `tanggal`, `jenis`, `nilai`, `penyusutan`, `lama_dimiliki`, `akumulasi`, `keterangan`, `id_user`) VALUES
(12, '2020-11-11', 'Non Bangunan', 50000, 10000, 6, 10000, 'Lemari', 2),
(13, '2020-11-04', 'Non Bangunan', 50000, 10000, 2, 20000, 'Rak buku', 2),
(14, '0000-00-00', 'Bangunan', 300000000, 15000000, 10, 150000000, 'Perumahan puncak permata b-5', 2),
(15, '2020-12-07', 'Bangunan', 300000000, 15000000, 5, 75000000, 'Rumah						', 2),
(16, '2020-11-06', 'Non Bangunan', 1000000, 200000, 4, 800000, 'Mixer', 2),
(17, '2020-11-13', 'Non Bangunan', 1000000, 200000, 6, 200000, 'Blender', 2),
(18, '2020-11-06', 'Bangunan', 300000000, 15000000, 15, 225000000, 'Kavling', 2),
(19, '2020-11-13', 'Bangunan', 300000000, 15000000, 25, 15000000, 'Kavling 2', 2),
(20, '0000-00-00', 'Bangunan', 300000000, 15000000, 2, 30000000, '8888', 4),
(22, '2020-12-07', 'Non Bangunan', 215000000, 0, 0, 0, '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id_modal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`id_modal`, `tanggal`, `keterangan`, `status`, `jumlah`, `id_user`) VALUES
(2, '2020-11-04', 'Penambahan Modal Pemilik', 'Penambahan', 350000, 2),
(3, '2020-11-13', 'Pengurangan Modal Pemilik', 'Pengurangan', 300000, 2),
(4, '2020-12-11', 'Penambahan Modal Nindy', 'Penambahan', 214500000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_japo` date NOT NULL,
  `produk` varchar(50) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tanggal`, `tanggal_japo`, `produk`, `kuantitas`, `harga_satuan`, `total`, `status`, `jenis`, `keterangan`, `id_user`) VALUES
(5, '2020-11-04', '2020-11-27', 'Minyak Bimoli', 5, 5000, 25000, 'Belum Lunas', 'Beban', 'kkkkk														', 2),
(6, '2020-11-04', '0000-00-00', 'Gula Merah', 4, 3000, 12000, 'Belum Lunas', 'Persediaan', '', 2),
(7, '2020-12-04', '2020-12-17', 'Listrik', 1, 200000, 200000, 'Belum Lunas', 'Lain-Lain', 'Toko Bumi Datar							', 2),
(8, '2020-12-11', '2021-01-11', 'Jasa', 1, 47600000, 47600000, 'Belum Lunas', 'Perlengkapan', 'Hutang Usaha														', 5),
(9, '2020-12-11', '2021-01-11', 'Jasa', 1, 295000000, 295000000, 'Belum Lunas', 'Perlengkapan', 'Hutang Wesel', 5),
(10, '2020-12-11', '2021-01-11', '', 1, 10000000, 10000000, 'Belum Lunas', 'Hutang', 'Hutang Gaji														', 5),
(11, '2020-12-11', '0000-00-00', 'Iklan', 1, 3000000, 3000000, 'Lunas', 'Beban', 'Iklan selama 5 bulan', 5),
(12, '2020-12-11', '0000-00-00', 'Gaji', 1, 5000000, 5000000, 'Lunas', 'Beban', '', 5),
(13, '2020-12-11', '0000-00-00', 'Bunga', 1, 100000, 100000, 'Lunas', 'Beban', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjulan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_japo` date NOT NULL,
  `produk` varchar(50) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjulan`, `tanggal`, `tanggal_japo`, `produk`, `kuantitas`, `harga_satuan`, `total`, `status`, `keterangan`, `id_user`) VALUES
(5, '2020-11-03', '2020-12-03', 'Brownies Original', 5, 30000, 150000, 'Belum Lunas', 'Kantin Ipul						', 2),
(6, '2020-11-03', '2020-12-03', 'Brownies Keju', 5, 30000, 150000, 'Belum Lunas', 'Kantin Ipul						', 2),
(7, '2020-11-03', '2020-12-03', 'Nastar', 18, 60000, 1080000, 'Belum Lunas', 'Kantin Ipul							', 2),
(8, '2020-11-03', '2020-12-03', 'Lidah Kucing', 20, 50000, 1000000, 'Belum Lunas', 'Kantin Ipul							', 2),
(9, '2020-11-03', '2020-12-03', 'Keripik Ubi', 7, 15000, 105000, 'Belum Lunas', 'Kantin Ipul				', 2),
(10, '2020-11-03', '2020-11-03', 'Keripik Pisang', 9, 15000, 135000, 'Belum Lunas', 'Kantin Ipul', 2),
(11, '2020-11-11', '2020-12-11', 'Brownies Original', 15, 30000, 450000, 'Belum Lunas', 'Pujasera Gilang', 2),
(12, '2020-11-11', '2020-12-11', 'Brownies Pelangi', 10, 35000, 350000, 'Belum Lunas', 'Pujasera Gilang', 2),
(13, '2020-11-11', '2020-12-11', 'Brownies Almond', 20, 35000, 700000, 'Belum Lunas', 'Pujasera Gilang', 2),
(14, '2020-11-11', '2020-11-11', 'Keju Crispy', 20, 60000, 1200000, 'Belum Lunas', 'Pujasera Gilang', 2),
(15, '2020-11-11', '2020-12-11', 'Putri Salju', 20, 50000, 1000000, 'Belum Lunas', 'Pujasera Gilang', 2),
(16, '2020-11-11', '2020-12-11', 'Kripik Kentang', 5, 15000, 75000, 'Belum Lunas', 'Pujasera Gilang', 2),
(17, '2020-11-11', '2020-12-11', 'Keripik Singkong', 5, 15000, 75000, 'Belum Lunas', 'Pujasera Gilang', 2),
(18, '2020-11-11', '2020-11-11', 'Brownies Original', 15, 30000, 450000, 'Belum Lunas', 'Azka Snack', 2),
(19, '2020-11-11', '2020-12-11', 'Brownies Keju', 20, 30000, 600000, 'Belum Lunas', 'Azka Snack', 2),
(20, '2020-11-11', '2020-12-11', 'Brownies Pelangi', 20, 35000, 700000, 'Belum Lunas', 'Azka Snack', 2),
(21, '2020-12-08', '2021-01-08', 'Nastar', 25, 60000, 1500000, 'Belum Lunas', 'Azka Snack	', 2),
(22, '2020-12-03', '2020-12-03', 'Brownies Original', 20, 5000, 100000, 'Lunas', '							kkk		0					', 4),
(25, '2020-12-11', '2021-01-11', 'Jasa', 1, 2000000, 2000000, 'Lunas', 'Pendapatan Jasa', 5);

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `produk` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `tanggal`, `produk`, `total`, `keterangan`, `id_user`) VALUES
(5, '2020-12-08', 'Saldo Awal', 3000000, 'lala', 4),
(6, '2020-12-09', 'Saldo Awal', 3000000, 'Kas Awal Toko Boki', 2),
(7, '2020-12-11', 'Saldo Awal', 273800000, 'Saldo Awal Kas', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(2, 'Admin 1', 'admin', 'admin'),
(4, 'Toko Abadi', 'abadi', 'abadi'),
(5, 'Ardin', 'ardin', 'ardin');

-- --------------------------------------------------------

--
-- Table structure for table `utang`
--

CREATE TABLE `utang` (
  `id_utang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `utang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jatuh_tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utang`
--

INSERT INTO `utang` (`id_utang`, `tanggal`, `utang`, `jumlah`, `jatuh_tempo`) VALUES
(3, '2020-10-21', 'Bapak Joko', 500000, '2020-10-29'),
(4, '2020-10-22', 'Ibu Martha', 200000, '2020-10-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset_lancar`
--
ALTER TABLE `aset_lancar`
  ADD PRIMARY KEY (`id_aset_lancar`);

--
-- Indexes for table `aset_tetap`
--
ALTER TABLE `aset_tetap`
  ADD PRIMARY KEY (`id_aset_tetap`);

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id_modal`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjulan`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `utang`
--
ALTER TABLE `utang`
  ADD PRIMARY KEY (`id_utang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset_lancar`
--
ALTER TABLE `aset_lancar`
  MODIFY `id_aset_lancar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `aset_tetap`
--
ALTER TABLE `aset_tetap`
  MODIFY `id_aset_tetap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id_modal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `utang`
--
ALTER TABLE `utang`
  MODIFY `id_utang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
