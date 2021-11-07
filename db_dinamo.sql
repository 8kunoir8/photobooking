-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 05:28 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dinamo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `pic` text,
  `status` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `password`, `fullname`, `level`, `pic`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 0, NULL, 'admin'),
(2, 'manager', '1d0258c2440a8d19e716292b231e3190', 'Manager', 1, NULL, 'manager'),
(3, 'staff', '1253208465b1efa876f982d8a9e73eef', 'Regular Staff', 2, NULL, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `idBrand` int(5) NOT NULL,
  `namaBrand` varchar(20) NOT NULL,
  `keterangan` text,
  `pic` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int(5) NOT NULL,
  `namaCategory` varchar(20) NOT NULL,
  `keterangan` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `namaCategory`, `keterangan`) VALUES
(1, 'Kecil', 'Dinamo Berukuran Kecil'),
(2, 'Sedang', 'Dinamo Berukuran Sedang'),
(3, 'Besar', 'Dinamo Berukuran Besar');

-- --------------------------------------------------------

--
-- Table structure for table `category_part`
--

CREATE TABLE `category_part` (
  `id_catpart` int(4) NOT NULL,
  `nm_catpart` varchar(100) NOT NULL,
  `ket_catpart` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_part`
--

INSERT INTO `category_part` (`id_catpart`, `nm_catpart`, `ket_catpart`) VALUES
(1, 'Category Part', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `consul`
--

CREATE TABLE `consul` (
  `idConsul` int(5) NOT NULL,
  `fileKerusakan` text,
  `idJenis` int(5) DEFAULT NULL,
  `idUser` int(5) DEFAULT NULL,
  `idRusak` int(5) DEFAULT NULL,
  `ket` text,
  `analisa` text,
  `esBiaya` text,
  `esWaktu` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consul`
--

INSERT INTO `consul` (`idConsul`, `fileKerusakan`, `idJenis`, `idUser`, `idRusak`, `ket`, `analisa`, `esBiaya`, `esWaktu`) VALUES
(2, 'ad28c9c0cb404d4cadde1d174a8aeff9.jpg', 1, 1, 2, 'test', 'test', '70rb - 150rb', '5 minggu'),
(3, '26513060079a7d67771fefcfc99e4c0f.jpg', 1, 5, 2, '', 'kerusakan kumparan', '80 rb', '2 hari'),
(4, 'bf23811b94c9192ce072c0796c9bc581.jpg', 1, 5, 2, '', NULL, NULL, NULL),
(5, '8cc0d6a00e9f8b6c3b64aab0ae38fb74.png', 1, 9, 2, '', 'Rusak kumparan ', '70rb - 150rb', '2'),
(6, 'b541f0afd9ac1db2c9fe93278f268169.jpg', 4, 10, 2, 'tiba tiba mati total', NULL, NULL, NULL),
(7, 'e0d003bc2ea1d39baadbf7bd324123d5.png', 4, 11, 2, '', 'Rusak kumparan ', '100rb', '3 hari'),
(8, 'a687be79ace3e752d96542427fe59209.jpeg', 8, 9, 4, 'tiba tiba berhenti ', 'rusak kumparan', '1 jt', '5 hari'),
(9, 'd54c88392fed6380a46aeb620bcbc0bc.jpeg', 8, 13, 4, 'rusak parah', NULL, NULL, NULL),
(10, '2d00803c7209a0764fcd68570e44fa60.jpeg', 4, 13, 3, 'dinama pecah', 'asd', '200 rb - 700rb', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `idJenis` int(5) NOT NULL,
  `namaJenis` varchar(30) NOT NULL,
  `catJenis` varchar(20) DEFAULT NULL,
  `ketJenis` text,
  `picJenis` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`idJenis`, `namaJenis`, `catJenis`, `ketJenis`, `picJenis`) VALUES
(1, 'Kipas Angin', 'Kecil', 'Kipas Angin', '33079.jpg'),
(7, 'Compresor ', 'Besar', '', 'f8eb0c443a69af1274696dae086d49cc.jpg'),
(4, 'mesin cuci', 'sedang', 'sedang', 'bfc5a758a3f03ef34f6ed4b723fb6816.png'),
(8, 'Dinamo mesin besar', 'Besar', 'Dinamo mesin pabrik ', '64d012c82f7e15a1c62c792f617f3d08.jpeg'),
(9, 'Blower', 'sedang', 'mesin pabrik dan rumahan ', 'bd1f05bfd483c74d99d3ae256428ed99.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_sparepart`
--

CREATE TABLE `order_sparepart` (
  `id_orderpart` int(4) NOT NULL,
  `idUser` int(4) NOT NULL,
  `id_catpart` int(4) NOT NULL,
  `id_type` int(4) NOT NULL,
  `qty` int(10) NOT NULL,
  `harga_satuan` decimal(10,0) NOT NULL,
  `harga_total` decimal(10,0) NOT NULL,
  `transaksi` varchar(100) NOT NULL,
  `order_sta` varchar(100) NOT NULL,
  `c_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_sparepart`
--

INSERT INTO `order_sparepart` (`id_orderpart`, `idUser`, `id_catpart`, `id_type`, `qty`, `harga_satuan`, `harga_total`, `transaksi`, `order_sta`, `c_date`, `end_date`) VALUES
(1, 1, 1, 1, 2, '12345', '24690', 'Transfer', 'Di Pesan', '2018-07-15', '0000-00-00'),
(2, 1, 1, 1, 3, '12345', '37035', 'Transfer', 'Di Pesan', '2018-07-15', '0000-00-00'),
(3, 1, 1, 1, 3, '12345', '37035', 'Transfer', 'Di Pesan', '2018-07-15', '0000-00-00'),
(4, 1, 1, 1, 4, '12345', '49380', 'Transfer', 'Di Pesan', '2018-07-15', '0000-00-00'),
(5, 1, 1, 1, 5, '12345', '61725', 'Transfer', 'Di Pesan', '2018-07-15', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `idPart` int(5) NOT NULL,
  `namaPart` varchar(30) DEFAULT NULL,
  `idJenis` int(5) DEFAULT NULL,
  `harga` int(18) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`idPart`, `namaPart`, `idJenis`, `harga`) VALUES
(0, 'test', 1, 242342343);

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE `perbaikan` (
  `idPerbaikan` int(5) NOT NULL,
  `idUser` int(5) NOT NULL,
  `idConsul` int(5) NOT NULL,
  `pelayanan` varchar(20) DEFAULT NULL,
  `pengerjaan` varchar(20) DEFAULT NULL,
  `alamat` text,
  `ket` text,
  `status` varchar(20) DEFAULT NULL,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbaikan`
--

INSERT INTO `perbaikan` (`idPerbaikan`, `idUser`, `idConsul`, `pelayanan`, `pengerjaan`, `alamat`, `ket`, `status`, `startDate`, `endDate`) VALUES
(1, 1, 2, 'On The Spot', 'Express', 'jl test', 'test', 'Selesai', '2018-01-17 00:00:00', '2018-01-19 00:00:00'),
(2, 5, 3, 'Jemput Kerumah', 'Regular', 'jl.raya narogong', 'deket pom spbu', 'Selesai', '2018-01-19 00:00:00', '2018-01-19 00:00:00'),
(3, 11, 7, 'Jemput Kerumah', 'Express', 'jl,ini rw itu kp begini ', 'no tlep : 000099666', 'Selesai', '2018-01-20 00:00:00', '2018-01-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rusak`
--

CREATE TABLE `rusak` (
  `idRusak` int(5) NOT NULL,
  `namaRusak` varchar(30) NOT NULL,
  `ketRusak` text,
  `rangeBiaya` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rusak`
--

INSERT INTO `rusak` (`idRusak`, `namaRusak`, `ketRusak`, `rangeBiaya`) VALUES
(2, 'Rusak Ringan', 'Rusak Part Aux', '70rb - 150rb'),
(3, 'Rusak sedang', 'memakan waktu', '200 rb - 700rb'),
(4, 'Rusak Berat', 'perlu proses pengerjaan tenaga ahli', '700rb - 3 jt dan lebih');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id_sparepart` int(4) NOT NULL,
  `id_catpart` int(4) NOT NULL,
  `id_type` int(4) NOT NULL,
  `nm_sparepart` text NOT NULL,
  `harga_sparepart` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `ket_sparepart` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `idSupplier` int(5) NOT NULL,
  `namaSupplier` varchar(50) NOT NULL,
  `alamatSupplier` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type_part`
--

CREATE TABLE `type_part` (
  `id_type` int(4) NOT NULL,
  `id_catpart` int(4) NOT NULL,
  `nm_type` varchar(100) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `ket_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_part`
--

INSERT INTO `type_part` (`id_type`, `id_catpart`, `nm_type`, `harga`, `stock`, `ket_type`) VALUES
(1, 1, 'Type Part', '12345', 1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `pic` text,
  `status` varchar(15) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `fullname`, `username`, `password`, `pic`, `status`, `telp`, `email`) VALUES
(1, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', NULL, NULL, NULL, NULL),
(2, 'test user', 'test', '098f6bcd4621d373cade4e832627b4f6', NULL, NULL, '1234567890', 'test@email.com'),
(3, 'testbaru', 'testbaru', '46fc1c8b090b075eef2a65d477bdc7f2', NULL, NULL, '12345678990', 'testbaru@email.com'),
(4, 'peri wiajaya', 'peri', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '00000000', ''),
(5, 'peri wiajaya', 'peri', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, '00000000', ''),
(6, 'peri wijaya', 'Peri ', '3afa4cfc403ea82c020c5aeb56c7688d', NULL, NULL, '089696822937', 'pewijaya6@gmail.con'),
(7, 'peri wijaya', 'Peri ', '3afa4cfc403ea82c020c5aeb56c7688d', NULL, NULL, '089696822937', 'pewijaya6@gmail.con'),
(8, 'periwijaya', 'peri', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, '089696822937', 'pewijaya6@gmail.com'),
(9, 'periwijaya', 'peri', '587ede8b8f95306235823bae180f2748', NULL, NULL, '089696822937', 'pewijaya6@gmail.com'),
(10, 'joee', 'joe', '8ff32489f92f33416694be8fdc2d4c22', NULL, NULL, '099090909', 'nlijcasckuhdn'),
(11, 'heriaa', 'heri', '6812af90c6a1bbec134e323d7e70587b', NULL, NULL, '089696833937', 'heriajah@gmail.com'),
(12, 'puspa helena', 'puspa ', '508fed314d3032cd9ecc01cff40eaf75', NULL, NULL, '09080908089', 'blabla'),
(13, 'jamlal', 'jamal', '74f56399c89f4bd03ff5e85b6bf4e85f', NULL, NULL, '09090909', 'blbla'),
(14, 'Nando', 'Nando', '45a9a31e5f1ff59621b681a5edbffe85', NULL, NULL, '080808996688', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`idBrand`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `category_part`
--
ALTER TABLE `category_part`
  ADD PRIMARY KEY (`id_catpart`);

--
-- Indexes for table `consul`
--
ALTER TABLE `consul`
  ADD PRIMARY KEY (`idConsul`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`idJenis`);

--
-- Indexes for table `order_sparepart`
--
ALTER TABLE `order_sparepart`
  ADD PRIMARY KEY (`id_orderpart`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`idPart`);

--
-- Indexes for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`idPerbaikan`);

--
-- Indexes for table `rusak`
--
ALTER TABLE `rusak`
  ADD PRIMARY KEY (`idRusak`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSupplier`);

--
-- Indexes for table `type_part`
--
ALTER TABLE `type_part`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `idBrand` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_part`
--
ALTER TABLE `category_part`
  MODIFY `id_catpart` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consul`
--
ALTER TABLE `consul`
  MODIFY `idConsul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `idJenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_sparepart`
--
ALTER TABLE `order_sparepart`
  MODIFY `id_orderpart` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `idPerbaikan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rusak`
--
ALTER TABLE `rusak`
  MODIFY `idRusak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id_sparepart` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idSupplier` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_part`
--
ALTER TABLE `type_part`
  MODIFY `id_type` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
