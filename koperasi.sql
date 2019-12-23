-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2019 pada 13.10
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `role`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', 'ygw0xAKpUU_IdbGCHGTkYvydPFKfWSnM', '$2y$13$VGsUq2tpkQFj8l1tG0jcTe5EfBmJReYjgWD4qLLt7FdM080mCyhaC', NULL, 'admin@admin.com', 10, 1576304635, 1576304635),
(2, 'Jaya', '1', 'u5LKDu5Sm0ePUVv99plkG2qk14vN0kxN', '$2y$13$AGr1fov74BGYWYOzMelVaeebHtpGIXFapm9oD25WX4S8RUeqDl/u.', NULL, 'Jaya@gmail.com', 10, 1576304910, 1576304910),
(3, 'afif', '0', 'oN6U6OgO6RdGkUyaPMLxre8h76kpQMRI', '$2y$13$RqWmEJYCpZOtm6.0RCUNSOkennEp892DrzLIfpEwaZomkJLlQPoTi', NULL, 'afif@gmail.com', 10, 1576829264, 1576829264),
(4, 'yusron', '1', 'QLYaQvDss4gtpmlcbdPlvqj34NuPZLSN', '$2y$13$oJFhk0R39QYxF474gmG7o.YjDRCDC9gWpp8YlUEa3scFpLWYDqulW', NULL, 'yusron@gmail.com', 10, 1576834664, 1576834664);

-- --------------------------------------------------------

--
-- Struktur dari tabel `angsuran`
--

CREATE TABLE `angsuran` (
  `id_angsuran` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_angsuran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat_karyawan` varchar(500) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `nama_peminjam` varchar(500) NOT NULL,
  `jumlah_pinjam` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jaminan` varchar(100) NOT NULL,
  `no_seri_jaminan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `nama_peminjam`, `jumlah_pinjam`, `tanggal`, `jaminan`, `no_seri_jaminan`) VALUES
(1, 'Jaya', 1000000, '2019-12-15', 'BPKB', '876665134'),
(2, 'Fahrul Sanjaya', 1000000, '2019-12-15', '0', '1234567899'),
(3, 'Afif', 1000000, '2019-12-15', '0', '96568yy9ty'),
(4, 'Abid', 80000000, '2019-12-15', '1', '6666666666666666666666666'),
(5, 'Bayu', 10000000, '2019-12-15', '0', '191817161'),
(7, 'Pak Deny', 8888890, '2019-12-16', '1', '1234567899'),
(8, 'J.K Rowling', 15555, '2019-12-17', '0', '96568yy9ty'),
(9, 'Sifak', 77777777, '2019-12-16', '1', '1234567899'),
(10, 'Dani Abdul W.', 100000000, '2019-12-17', '0', '999999'),
(11, 'fif', 100000000, '2019-12-20', '1', '999999');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`id_angsuran`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
