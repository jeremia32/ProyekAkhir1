-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 03:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(54) NOT NULL,
  `nama_lengkap` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(3, 'tabonay', 'tabonay123', 'Lini Febrianti Simanungkalit'),
(4, 'admin@122', 'admin123', 'Lini Febriyani Simanungkalit'),
(5, 'jeremia@12', 'Hizkiadion', 'syahrialjeremiasinaga');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesanan` int(11) NOT NULL,
  `akun_id` int(11) NOT NULL,
  `status_pesanan` tinyint(4) DEFAULT NULL,
  `tanggal_pesanan` date NOT NULL,
  `total` int(25) NOT NULL,
  `jenis_pengiriman` varchar(25) NOT NULL,
  `pembayaran` varchar(25) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesanan`, `akun_id`, `status_pesanan`, `tanggal_pesanan`, `total`, `jenis_pengiriman`, `pembayaran`, `alamat`, `id_produk`) VALUES
(205, 74, 2, '2023-06-15', 21111, 'COD', 'BNI', 'heaven', 36),
(228, 11, 0, '2023-06-16', 42222, 'COD', 'BNI', 'firdaus ', 36),
(229, 11, 0, '2023-06-16', 42222, 'COD', 'BNI', 'firdaus ', 36),
(230, 11, 0, '2023-06-16', 211110, 'COD', 'BNI', '2', 36),
(231, 11, 0, '2023-06-16', 211110, 'COD', 'BNI', 'q', 36),
(232, 11, 1, '2023-06-16', 42222, 'COD', 'BNI', 'heaven', 36),
(233, 11, 1, '2023-06-16', 21111, 'COD', 'BNI', 'jakarta', 36),
(248, 11, 3, '2023-06-16', 211110, 'COD', 'BNI', 'qwf', 36),
(249, 11, 3, '2023-06-16', 211110, 'COD', 'BNI', 'qw', 36),
(261, 10, 1, '2023-06-18', 12345, 'COD', 'QRIS', 'wakanda ', 53),
(262, 17, 1, '2023-06-19', 36947, 'COD', 'bayar_di_tempat', 'wakanda', 53),
(263, 17, 3, '2023-06-19', 46947, 'COD', 'BNI', 'SDJHEOW', 44),
(264, 17, 1, '2023-06-19', 12301, 'COD', 'BNI', 'surga ', 54),
(265, 17, 1, '2023-06-19', 1000, 'COD', 'bayar_di_tempat', 'sidimpuan', 41),
(266, 87, 0, '2023-06-19', 70000, 'COD', 'BNI', 'laguboti', 36),
(267, 87, 0, '2023-06-19', 70000, 'COD', 'BNI', 'we', 36);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_produk`
--

CREATE TABLE `pemesanan_produk` (
  `id_pemesanan_produk` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan_produk`
--

INSERT INTO `pemesanan_produk` (`id_pemesanan_produk`, `id_pesanan`, `id_produk`, `jumlah`) VALUES
(6, 171, 5, 1),
(8, 173, 34, 1),
(9, 174, 34, 1),
(15, 180, 34, 1),
(16, 181, 34, 2),
(18, 183, 34, 2),
(19, 184, 34, 1),
(20, 185, 34, 1),
(21, 186, 34, 1),
(22, 187, 34, 1),
(36, 205, 36, 1),
(59, 228, 36, 2),
(60, 229, 36, 2),
(61, 230, 36, 10),
(62, 231, 36, 10),
(63, 232, 36, 2),
(64, 233, 36, 1),
(79, 248, 36, 10),
(80, 249, 36, 10),
(92, 261, 53, 1),
(93, 262, 54, 2),
(94, 262, 53, 1),
(95, 263, 54, 2),
(96, 263, 53, 1),
(97, 263, 44, 1),
(98, 264, 54, 1),
(99, 265, 41, 1),
(100, 266, 41, 1),
(101, 266, 55, 1),
(102, 266, 36, 2),
(103, 267, 41, 1),
(104, 267, 55, 1),
(105, 267, 36, 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) DEFAULT 1,
  `id_pesanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `gambar`, `deskripsi`, `status`, `id_pesanan`) VALUES
(36, 'Tela-Tela', 15000, 16, 'p04.png', '<ul><li><i><strong>Berat </strong></i>: 100 gram&nbsp;</li><li><i><strong>Kategori </strong></i>: Makanan kering</li><li>&nbsp;<i><strong>Ketahanan </strong></i>: 3 bulan</li><li>&nbsp;<i><strong>Rasa </strong></i>: balado, jagung manis, pizza, ayam nakar, keju asin, sapi panggang, jagung bakar, sambal balado, balado extra pedas)&nbsp;</li></ul><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Halo! Di sini kami menawarkan berbagai macam jenis tela-tela yang berkualitas tinggi dan siap memenuhi kebutuhan cita rasa Anda. Tela-Tela kami dibuat dengan bahan-bahan berkualitas terbaik dan diproduksi dengan teknologi modern untuk menghasilkan produk yang tahan lama dan awet.</p>', 1, NULL),
(41, 'Budapest Durian[PRE-ORDER]', 35000, -2, 'p07.png', '<ul><li><strong>Berat </strong>: 550 gram&nbsp;</li><li><strong>kategori </strong>: makanan basah</li><li>&nbsp;<strong>ketahanan </strong>: 1 hari&nbsp;</li><li><i><strong>rasa </strong></i>: original</li></ul><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Di sini kami menyediakan budapest durian yang memiliki aroma yang khas dan lezat, sehingga sangat disukai oleh para pecinta durian. Budapest durian kami memiliki tekstur yang lembut dan kenyal, serta kami hanya menggunakan durian pilihan yang berkualitas tinggi. Kami juga menggunakan bahan-bahan alami tanpa pengawet untuk menaga kualitas dan kelezatan budapest durian kami.</p>', 1, NULL),
(44, 'Robar(Roti Bakar)', 5000, 20, 'robar.jpg', '<ul><li><strong>Berat </strong>: 100 gram</li><li>&nbsp;<strong>Kategori </strong>: Makanan basah</li><li>&nbsp;<strong>Ketahanan </strong>: 5 hari</li><li>&nbsp;<strong>Rasa </strong>: classic</li></ul><p>&nbsp;Di sini kami menawarkan roti bakar yang lezat dan menggugah selera. Roti bakar kami dibuat dari roti berkualiats tinggi dan dipanggang dengan resep spesial kami untuk menghasilkan roti bakar yang lembut dan garing dengan rasa yang pastinya enak.</p>', 1, NULL),
(53, 'Mojito', 10000, 20, 'mojito 2.jpg', '<p><strong>Berat </strong>: 500 gram</p><p><strong>Kategori </strong>: Minuman&nbsp;</p><p><strong>Ketahanan</strong> : 1 hari&nbsp;</p><p><strong>Rasa </strong>: min segar, irisan jeruk nipis, blue lime&nbsp;</p><p>Kami menawarkan minuman segar yang pasti akan memuaskan dahaga Anda. Mojito kami dibuat dengan bahan-bahan segar berkualitas tinggi dan dicampur dengan buah segar yang akan memberikan rasa yang khas.</p>', 1, NULL),
(54, 'Salad Buah[PRE-ORDER]', 18000, 0, 'saladbuah.jpg', '<p><strong>Berat :</strong> 150 gram</p><p>&nbsp;<strong>Kategori </strong>: Makanan basah</p><p>&nbsp;<strong>Ketahanan </strong>: 1 hari</p><p>&nbsp;<strong>Rasa </strong>: Buah yang segar melimpah dengan keju yang sangat khas</p>', 1, NULL),
(55, 'Donat Manis[PRE-ORDER]', 5000, -2, 'saladbuah.jpg', '<p><strong>Berat</strong>: 50 gram<br><strong>Kategori</strong>: Makanan<br><strong>Ketahanan</strong>: 1-2 hari<br><strong>Rasa </strong>: coklat, keju, strawbery, matcha, vanila topping : kacang tanah, kacang almond, seres, sprinkle.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Di sini kami menawarkan berbagai macam jenis donat yang siap memanjakan lidah Anda. Donat kami tidak hanya enak, tetapi juga diproses secara higienis dan aman untuk dikonsumsi. Kami menggunakan bahan-bahan yang segar dan terjaga kualitasnya untuk memastikan setiap gigitan donat memberikan kenikmatan yang tidak&nbsp;terlupakan.</p>', 1, NULL),
(56, 'Donat Coklat&Gula[PRE-ORDER]', 15000, 0, 'donatcoklat&gula.jpg', '<p><i><strong>Berat : </strong></i>350 gram<br><i><strong>Kategori</strong></i>: Makanan<br><i><strong>Ketahanan </strong></i>: 1-2 hari<br><i><strong>Rasa</strong></i>: Coklat,Coklat kacang,Ceres,Keju,Coklat Keju,Gula</p><p><br>Dengan Donat kami, Anda akan merasakan kepuasan tak tergantikan dalam setiap gigitan. Rasakan harmoni rasa yang menggoda ini dan pesan sekarang untuk mengalami kelezatan yang&nbsp;tiada&nbsp;tara.</p>', 1, NULL),
(57, 'Large Brownies[PRE-ORDER]', 55000, 0, 'dek.jpg', '<ul><li><strong>Berat </strong>: 700 gram</li><li>&nbsp;<strong>Kategori </strong>: makanan basah</li><li>&nbsp;<strong>Ketahanan </strong>: 3-4 hari&nbsp;</li><li><i><strong>Rasa </strong></i>: original, tabur keju, tabur almond, mix&nbsp;</li></ul><p>Di sini kami menyediakan brownies yang dibuat dengan menggunakan bahan-bahan yang baik dan tanpa bahan pengawet buatan. Kami juga memastikan bahwa setiap brownies yang keluar dari dapur kami memiliki tekstur yang lembut dan sedikit renyah pada bagian atasnya yang pastinya siap memanjakan lidah Anda.</p>', 1, NULL),
(58, 'Keripik Singkong', 10000, 20, 'dekk.jpg', '<ul><li><strong>Berat </strong>: 250 gram&nbsp;</li><li><strong>Kategori </strong>: Makanan kering</li><li>&nbsp;<strong>Ketahanan </strong>: 2-3 minggu&nbsp;</li><li><i><strong>rasa </strong></i>: original&nbsp;</li></ul><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Di sini kami menyediakan keripik singkong yang dibuat dengan bahan-bahan pilihan yang segar dan berkualitas tinggi, sehingga memberikan rasa yang lezat dan kaya akan cita rasa. Kami menggunakan teknik pengorengan yang tepat untuk mencapai kualitas yang terbaik. Tektur keripik singkong yang enyah dan garing akan membuat Anda ketagihan.</p>', 1, NULL),
(59, 'Brownies[PRE-ORDER]', 40000, 20, 'p08.png', '<ul><li><strong>Berat </strong>: 500 gram</li><li>&nbsp;<strong>Kategori </strong>: makanan basah</li><li>&nbsp;<strong>Ketahanan </strong>: 3-4 hari&nbsp;</li><li><i><strong>Rasa </strong></i>: original, tabur keju, tabur almond, mix&nbsp;</li></ul><p>Di sini kami menyediakan brownies yang dibuat dengan menggunakan bahan-bahan yang baik dan tanpa bahan pengawet buatan. Kami juga memastikan bahwa setiap brownies yang keluar dari dapur kami memiliki tekstur yang lembut dan sedikit renyah pada bagian atasnya yang pastinya siap memanjakan lidah Anda.</p>', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `Nama` varchar(28) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `gambar`, `Nama`, `deskripsi`, `status`, `id_admin`) VALUES
(10, '1.jpeg', 'bronson', '<p>mauliate&nbsp;</p>', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_akun`, `username`, `password`, `email`, `verification_code`, `status`) VALUES
(1, 'tabonay', 'tabonay', 'tabonay1123.@gmail.com', NULL, 0),
(2, 'jere', 'jere', 'syahrialjsinaga@gmail.com', NULL, 0),
(4, 'jerek', 'jerek', 'jeremiasinaga@gmail.com', NULL, 0),
(9, 'nina', 'nina123', 'nina12@gmail.com', NULL, 0),
(10, 'panger', '123', 'panger@gmail.com', NULL, 0),
(11, 'johannes', 'oan123', 'syahrialjsinaga@gmail.com', NULL, 0),
(17, 'vivaldi', '12345678', 'vivaldi@gmail.com', NULL, 0),
(18, 'jere', 'jere', 'jeremia@gmail.com', NULL, 0),
(21, 'jeremia sinaga', '12345678', 'syahrialjsinaga@gmail.com', '1b088008f9403a2bcb51fefdab9c5e99', 0),
(22, 'lis', '12345678', 'listra.sidabutar@gmail.co', 'c08f7ef55145bd15aa3ec3713bd18de1', 0),
(23, 'jere', 'jere', 'listra.sidabutar@gmail.co', '9b51abc5a52cd2a351108d823b39180e', 0),
(24, 'aldo', 'doal', 'syahrialjsinaga@gmail.com', '28c33a1f687685a208ea4590ac51f1e2', 0),
(26, 'grace', '12345678', 'syahrialjsinaga@gmail.com', '214b3740a94a6be5a0dd3cf722b6196c', 0),
(27, 'jojo', 'jojo', 'johannesssipayung27@gmail', '7014aee265c5539d07f6df050e398d1b', 0),
(29, 'liloi', 'qwdwe', 'listra.sidabutar@gmail.co', 'a77bc2df8bbb6e3a2aa9ccc9bb4815c2', 0),
(30, 'weerw', 'rwerew', 'jeremisinaga404@gmail.com', '479a72a7a2696ba47e1b19cb710ec38a', 0),
(31, 'je', 'je', 'jeremisinaga404@gmail.com', 'fee403e2d7941a6ee867389d6a804cee', 0),
(32, 'jere', 'jere', 'listra.sidabutar@gmail.co', '81ae5a3739487e98fcdb67ff65b44799', 0),
(33, 'jere', 'jere', 'listra.sidabutar@gmail.co', '79617fb40428d6e646c2b3bfb9746845', 0),
(34, 'jere', 'jere', 'listra.sidabutar@gmail.co', '543cffea87bf421f1054ccb16a2cd639', 0),
(35, 'jere', 'jere', 'listra.sidabutar@gmail.co', '413dd864bfb28c886cc2cce21c916a53', 0),
(36, 'aldo', 'aldo', 'listra.sidabutar@gmail.co', 'b054c065789172af036adc28113484c7', 0),
(40, 'asdc', 'asd', 'syahrialjsinaga@gmail.com', 'dd6e18247e4c44dbbd58c6e5682ca577', 0),
(41, 'asdc', 'asd', 'syahrialjsinaga@gmail.com', 'f6d754fa64073d371b37360ae6edf947', 0),
(43, 'asdc', 'asd', 'syahrialjsinaga@gmail.com', '3c3f41fa35de1c6455bf854d1ad8769d', 0),
(44, 'asdc', 'asd', 'syahrialjsinaga@gmail.com', '7dd2e8e8438de651d755d2e8584f884c', 0),
(45, 'asdc', 'asd', 'syahrialjsinaga@gmail.com', 'a5c1c179c77f686716638d56e6f9d696', 0),
(46, 'asdc', 'asd', 'syahrialjsinaga@gmail.com', 'bb52ed1d9a53f917681012e0d93fed0b', 0),
(47, 'asdc', 'asd', 'syahrialjsinaga@gmail.com', '714870c8b68d72b16b7216385f01eab6', 0),
(48, 'asdc', 'asd', 'syahrialjsinaga@gmail.com', 'b6ebb7f01a6686f4e4dbd1f8b573b176', 0),
(49, 'sd', 'ssfd', 'listra.sidabutar@gmail.co', 'b07a726368b5a661878a3f385e2019ba', 0),
(50, 'sd', 'as', 'listra.sidabutar@gmail.co', 'cdac2208dae4e25a9523bc3f39ee1cb0', 0),
(51, 'sd', 'as', 'listra.sidabutar@gmail.co', '4eae45e70f68afbcc9cabb0a844e4e5d', 0),
(52, 'sd', 'as', 'listra.sidabutar@gmail.co', '407dcad343138fdacd482c3774210543', 0),
(53, 'aldo', 'aldo', 'syahrialjsinaga@gmail.com', '15498574b79c6b0efb569246dd35e864', 0),
(54, 'JERE', 'jere', 'syahrialjsinaga@gmail.com', 'bbfffff851a1275f926e017923045bc3', 0),
(55, 'JERE', 'jere', 'syahrialjsinaga@gmail.com', '8b2d13b4d1f99704169435915a7184c7', 0),
(56, 'JERE', 'jere', 'syahrialjsinaga@gmail.com', 'c757cae601a5dd7cd7ad4e2b86effe87', 0),
(57, 'jojo', '123', 'johannesssipayung27@gmail', '8264f99a74dcf153b40e54b9fb2efb99', 0),
(58, 'jojo', '123', 'johannesssipayung27@gmail', 'de38d843d52adbf943acf2123780b232', 0),
(59, 'jereew', 'jerew', 'johannesssipayung27@gmail', 'f6a6a9cde8132e6fac9c53deada6c251', 0),
(60, 'jojo', '123', 'johannesssipayung27@gmail', '49293b7bb7abc5e79e05978db697ad93', 0),
(61, 'jojo', '123', 'johannesssipayung27@gmail', '5c9684b49fab72258c61f6def9d114f1', 0),
(62, 'jojo', '123', 'johannesssipayung27@gmail', '150e73f197ed6470dd0baccc09557f68', 0),
(63, 'jojo', '123', 'johannesssipayung27@gmail', '25e891831c47f46646b9aea5035a5f64', 0),
(64, 'jereew', 'jerew', 'johannesssipayung27@gmail', 'e93f153902772e1e6d596643a47403e5', 0),
(65, 'jojo', '123', 'johannesssipayung27@gmail', '11ad46eb43ec6e8fa700e4d31d9a5781', 0),
(66, 'jojo', '123', 'johannesssipayung27@gmail', '4947b3ccccc080672042983b302b5384', 1),
(74, 'gracesihaan', '12345678', 'jeremisinaga404@gmail.com', 'fdd1a1c87f9e40629e6cc69eae432548', 0),
(81, 'listra', '12345678', 'listra.sidabutar@gmail.co', 'listra.sidabutar@gmail.com2023-06-19 08:52:41', NULL),
(82, 'listra', '12345678', 'listra.sidabutar@gmail.co', 'listra.sidabutar@gmail.com2023-06-19 08:53:02', NULL),
(83, 'mutiara', '12345678', 'mutiaramanullang77@gmail.', 'mutiaramanullang77@gmail.com2023-06-19 08:54:45', 1),
(84, 'deby', 'deby', 'jeremisinaga404@gmail.com', 'jeremisinaga404@gmail.com2023-06-19 09:03:40', 0),
(85, 'mutiara', '12345678', 'mutiaramanullang77@gmail.', 'mutiaramanullang77@gmail.com2023-06-19 09:06:37', 1),
(86, 'mutiara', 'mutiara', 'mutiaramanullang77@gmail.', 'mutiaramanullang77@gmail.com2023-06-19 09:07:55', 0),
(87, 'aldo', 'aldo123', 'listra.sidabutar@gmail.com', 'listra.sidabutar@gmail.com2023-06-19 09:20:28', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `fk_akun` (`akun_id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  ADD PRIMARY KEY (`id_pemesanan_produk`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  MODIFY `id_pemesanan_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_akun` FOREIGN KEY (`akun_id`) REFERENCES `users` (`id_akun`),
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pemesanan` (`id_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
