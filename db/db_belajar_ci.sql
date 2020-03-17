-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_belajar_ci`
--
CREATE DATABASE IF NOT EXISTS `db_belajar_ci` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_belajar_ci`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(10) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) NOT NULL,
  `stok` int(3) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga`, `image`) VALUES
(1, 'Batik2', 20, '150000', '185373750_84f8613c-8b5c-4f85-bb50-b117828325ac_1181_1181.jpg.png'),
(3, 'Kemeja', 2, '20000', '240277_2eddb075-c082-496d-91e5-a4b00aa1b5b2.jpg'),
(5, 'Celana', 4, '30000', '5439351_a57b2545-bffe-42a4-a505-b90e1b26a878_384_384.jpg'),
(6, 'sepatu2', 2, '', '0_5ef8bde8-55ca-4df5-b3b2-42071eeb480b_640_423.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko_sessions`
--

CREATE TABLE IF NOT EXISTS `toko_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko_sessions`
--

INSERT INTO `toko_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1260d61dcef85fef0ec291853b7eecb2', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0', 1554125337, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:5:"admin";s:5:"group";s:1:"1";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `group` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`) VALUES
(1, 'admin', 'admin', 1),
(2, 'konsumen', 'konsumen', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
