-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2014 at 05:38 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi_herman`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `ID_ACCOUNT` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_ACCOUNT`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID_ACCOUNT`, `USERNAME`, `NAMA`, `EMAIL`, `PASSWORD`) VALUES
(1, 'admin', 'Admin', 'admin@dziyalux.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin2', 'Admin Kedua', 'admin2@dziyalux.com', 'c84258e9c39059a89ab77d846ddab909');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `ID_CONTENT` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_CONTENT` varchar(100) NOT NULL,
  `ISI_CONTENT` text NOT NULL,
  `GAMBAR` varchar(50) NOT NULL,
  `IS_AKTIF` int(2) NOT NULL,
  `TANGGAL` date NOT NULL,
  PRIMARY KEY (`ID_CONTENT`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`ID_CONTENT`, `NAMA_CONTENT`, `ISI_CONTENT`, `GAMBAR`, `IS_AKTIF`, `TANGGAL`) VALUES
(5, 'tes', '<p>tes</p>', '443470-500x375.jpg', 0, '2014-08-20'),
(6, 'test', '<p>test</p>', '23.jpg', 1, '2014-08-06'),
(20, 'Artikel', '<p>Kebutuhan akan kitchen set sudah menjadi bagian yang utama di rumah-rumah masa kini. Model yang minimalis, penuh warna dan lain sebagainya akan menjadikan rumah menjadi lebih menarik. Untuk itu perlu adanya pemilihan kitchen set secara tepat untuk tipe rumah Anda, baik dari segi bahan baku, model, finishing dan faktor-faktor pendukung lain.</p>\r\n<p>Dengan pengalaman di bidang kitchen set lebih dari 15 tahun, menangani export kitchen set terutama untuk negara Jepang, kami pun akhirnya mengawali produksi kitchen set secara home industri untuk memenuhi kebutuhan rumah tangga, perkantoran dan pemerintahan.</p>\r\n<p>Kami sebagai produsen kitchen set menjual kitchen set murah dengan berbagai jenis spesifikasi bahan baku dan finishing yang dapat disesuaikan dengan kebutuhan Anda dengan harga yang lebih variatif sehingga dapat menjangkau budget Anda.</p>\r\n<p>Harga Murah&hellip;. Mulai dari Rp. 1.200.000 / meter lari (disesuaikan dengan spesifikasi bahan baku). Harga dijamin bersaing.</p>\r\n<p>Kami juga dapat memproduksi berbagai mebel lain seperti meja, kursi, lemari, dipan, nakas, meja rias, partisi untuk kantor dan lain sebagainya. Kami juga produksi paket kamar set, wardrobe, office furniture dan custom furniture.</p>', 'typing.jpg', 1, '2013-10-20'),
(21, 'Jenis Bahan', '', '', 1, '2014-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `ID_GALLERY` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PRODUK` int(11) NOT NULL,
  `JUDUL` varchar(100) NOT NULL,
  `GAMBAR` text NOT NULL,
  `KETERANGAN` text NOT NULL,
  `DEFAULT` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_GALLERY`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID_GALLERY`, `ID_PRODUK`, `JUDUL`, `GAMBAR`, `KETERANGAN`, `DEFAULT`) VALUES
(2, 2, 'gal 1', '1122e8e1aae7c2b10cc23ce9089e893a.jpg', 'ini sandal convers', 1),
(3, 3, 'gal 2', '29012010002.jpg', 'ini sandal convers versi 2', 1),
(4, 4, 'gal 3', 'img1685-1319463924.JPG', 'sandal ver 3', 1),
(5, 5, 'gal 4', 'distro-converse-selop2.jpg', 'gal 4 yo', 1),
(6, 6, 'Gal 5', '29012010002.jpg', 'ini sandal convers versi 5', 1),
(7, 7, 'Gal 6', '1122e8e1aae7c2b10cc23ce9089e893a.jpg', 'ini sandal convers 6', 1),
(8, 8, 'gal 7', 'distro-converse-selop2.jpg', 'gal 4 yo', 1),
(9, 9, 'gal 8', 'img1685-1319463924.JPG', 'sandal ver 8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `ID_KONTAK` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `NO_HP` varchar(15) NOT NULL,
  `PESAN` text NOT NULL,
  `TANGGAL` date NOT NULL,
  PRIMARY KEY (`ID_KONTAK`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`ID_KONTAK`, `NAMA`, `EMAIL`, `NO_HP`, `PESAN`, `TANGGAL`) VALUES
(11, 'hhh', 'hhhh@yahh.sa', '02394', 'asdsadasd', '2013-06-11'),
(12, 'jjjj', 'jjj@yahoo.cds', '02123232', 'hohohoho', '2013-06-03'),
(13, 'test', 'fira@gmail.com', '01213213', 'as', '0000-00-00'),
(14, 'amrul', 'amrul.y@dguik.np', '65565656', '<p>Website bagus, designya juga modern</p>', '2013-10-20'),
(10, 'hh', 'hhhh@yahh.sa', '845654', '<p>sdsad</p>', '2013-06-18'),
(8, 'test dialog', 'dialog@yahoo.com', '0213888234', 'semoga berhasil', '2013-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `ID_PRODUK` int(11) NOT NULL AUTO_INCREMENT,
  `JUDUL` varchar(100) NOT NULL,
  `KETERANGAN` text NOT NULL,
  `HARGA` int(11) NOT NULL,
  PRIMARY KEY (`ID_PRODUK`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_PRODUK`, `JUDUL`, `KETERANGAN`, `HARGA`) VALUES
(2, 'Produk 1', 'ini sandal  convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal convers ini sandal', 1000000),
(3, 'Produk 2', 'ini sandal convers versi 2 ini sandal convers versi 2 ini sandal convers versi 2 ini sandal convers versi 2 ini sandal convers versi 2 ini sandal convers versi 2 ini sandal convers versi 2 ini sandal convers versi 2 ', 2000000),
(4, 'Produk 3', 'sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 sandal ver 3 ', 1500000),
(5, 'Produk 4', 'gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo ', 1600000),
(6, 'Produk 5', 'ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ini sandal convers versi 5 ', 1100000),
(7, 'Produk 6', 'ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ini sandal convers 6 ', 1800000),
(8, 'Produk 7', 'gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo gal 4 yo ', 1800000),
(9, 'Produk 8', 'sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 sandal ver 8 ', 1300000);

-- --------------------------------------------------------

--
-- Table structure for table `slide_show`
--

CREATE TABLE IF NOT EXISTS `slide_show` (
  `ID_SLIDE` int(11) NOT NULL AUTO_INCREMENT,
  `JUDUL` varchar(100) NOT NULL,
  `GAMBAR` varchar(50) NOT NULL,
  `LINK` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_SLIDE`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `slide_show`
--

INSERT INTO `slide_show` (`ID_SLIDE`, `JUDUL`, `GAMBAR`, `LINK`) VALUES
(8, 'banner2', 'modern-kitchen.jpg', 'rr'),
(6, 'aa', 'inspirational-modern-kitchen-design.jpg', 'aa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
