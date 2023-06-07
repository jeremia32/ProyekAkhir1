-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2023 pada 15.28
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesanan` int(11) NOT NULL,
  `akun_id` int(11) NOT NULL,
  `status_pesanan` varchar(100) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `total` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesanan`, `akun_id`, `status_pesanan`, `tanggal_pesanan`, `total`) VALUES
(1, 3, 'berhasil', '2023-03-30', 25000),
(5, 3, 'berhasil', '2023-03-31', 53000),
(6, 4, 'berhasil', '2023-03-31', 45000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_produk`
--

CREATE TABLE `pemesanan_produk` (
  `id_pemesanan_produk` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan_produk`
--

INSERT INTO `pemesanan_produk` (`id_pemesanan_produk`, `id_pesanan`, `id_produk`, `jumlah`) VALUES
(1, 1, 4, 4),
(2, 6, 4, 3),
(3, 5, 5, 2),
(4, 1, 4, 3),
(5, 6, 5, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `gambar`, `deskripsi`) VALUES
(4, 'tela-tela', 10000, 15000, 'p01.png', 'enak lo'),
(5, 'bolu ', 25000, 6, 'p02.png', 'mantappp'),
(6, 'keripik ', 20000, 12, 'p03.png', 'manntapp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_akun`, `username`, `password`, `role`, `email`) VALUES
(1, 'tabonay', 'tabonay', 1, 'tabonay1123.@gmail.com'),
(2, 'jere', 'jere', 0, 'syahrialjsinaga@gmail.com'),
(3, 'aldo', 'aldo', 0, 'darellaldo2004@gmail.com'),
(4, 'jerek', 'jerek', 0, 'jeremiasinaga@gmail.com'),
(5, 'inggrid', '12345678', 0, ''),
(8, 'vivaldi', '123', 0, 'vivaldi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `akun_id` (`akun_id`);

--
-- Indeks untuk tabel `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  ADD PRIMARY KEY (`id_pemesanan_produk`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_akun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  MODIFY `id_pemesanan_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`akun_id`) REFERENCES `users` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  ADD CONSTRAINT `pemesanan_produk_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pemesanan` (`id_pesanan`),
  ADD CONSTRAINT `pemesanan_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
