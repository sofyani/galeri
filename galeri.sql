-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mei 2015 pada 08.48
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `galeri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id`, `nama_file`, `deskripsi`) VALUES
(1, 'C360_2014-10-25-07-09-12-688.jpg', 'mips'),
(2, 'IMG-20141013-WA0006.jpg', 'surv'),
(3, 'host.JPG', 'balkot'),
(4, 'IMG_20140223_141248.jpg', 'subang'),
(5, 'IMG_20140223_170203.jpg', 'subang'),
(6, 'IMG_20140327_112328.jpg', 'kuningan'),
(7, 'IMG_20140414_143355.jpg', 'kampus'),
(8, 'sf.PNG', 'bukber'),
(9, 'IMG_20140515_102044.jpg', 'stadion'),
(10, 'C360_2014-10-25-07-10-02-070.jpg', 'mips'),
(11, 'foto.JPG', 'foto'),
(12, 'GEDC1002.JPG', 'balkot');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
