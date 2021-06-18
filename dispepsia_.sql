-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2020 at 04:17 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dispepsia`
--
CREATE DATABASE `dispepsia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dispepsia`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `basis_kasus`
--

CREATE TABLE IF NOT EXISTS `basis_kasus` (
  `id_basis_kasus` int(11) NOT NULL AUTO_INCREMENT,
  `kd_penyakit` varchar(5) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  PRIMARY KEY (`id_basis_kasus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `basis_kasus`
--

INSERT INTO `basis_kasus` (`id_basis_kasus`, `kd_penyakit`, `id_gejala`) VALUES
(21, 'P02', 1),
(22, 'P02', 5),
(23, 'P02', 10),
(24, 'P02', 11),
(25, 'P02', 12),
(26, 'P02', 21),
(27, 'P02', 23),
(28, 'P02', 24),
(29, 'P02', 37),
(30, 'P03', 1),
(31, 'P03', 3),
(32, 'P03', 4),
(33, 'P03', 6),
(34, 'P03', 7),
(35, 'P03', 13),
(36, 'P03', 14),
(37, 'P03', 15),
(38, 'P03', 25),
(39, 'P03', 27),
(40, 'P04', 1),
(41, 'P04', 5),
(42, 'P04', 6),
(43, 'P04', 14),
(44, 'P04', 15),
(45, 'P04', 16),
(46, 'P04', 17),
(47, 'P04', 19),
(48, 'P04', 26),
(49, 'P04', 28),
(50, 'P04', 29),
(51, 'P05', 3),
(52, 'P05', 15),
(53, 'P05', 18),
(54, 'P05', 19),
(55, 'P05', 30),
(56, 'P05', 31),
(57, 'P05', 32),
(58, 'P05', 33),
(59, 'P05', 34),
(60, 'P06', 6),
(61, 'P06', 17),
(62, 'P06', 35),
(63, 'P06', 36),
(80, 'P01', 1),
(81, 'P01', 2),
(82, 'P01', 3),
(83, 'P01', 6),
(84, 'P01', 7),
(85, 'P01', 8),
(86, 'P01', 9),
(87, 'P01', 20),
(88, 'P01', 21),
(89, 'P01', 22);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `id_gejala` int(5) NOT NULL AUTO_INCREMENT,
  `kd_gejala` varchar(5) NOT NULL,
  `nm_gejala` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `b1` int(1) NOT NULL,
  `b2` int(1) NOT NULL,
  `b3` int(1) NOT NULL,
  `b4` int(1) NOT NULL,
  `b5` int(1) NOT NULL,
  `b6` int(1) NOT NULL,
  PRIMARY KEY (`id_gejala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kd_gejala`, `nm_gejala`, `question`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`) VALUES
(1, 'G01', 'hearthburn', 'Apakah anda merasakan sensasi terbakar pada dada atau perut bagian atas?', 1, 5, 0, 1, 0, 0),
(2, 'G02', 'Cepat merasa kenyang', 'Apakah anda cepat merasa kenyang?', 3, 0, 3, 0, 0, 5),
(3, 'G03', 'Mual', 'Apakah anda sering merasa mual?', 1, 0, 3, 0, 3, 0),
(4, 'G04', 'Pusing', 'Apakah anda merasa pusing?', 0, 0, 1, 0, 0, 0),
(5, 'G05', 'Kesulitan menelan (disfagia)', 'Apakah anda merasa kesulitan untuk menelan makanan atau minuman?', 0, 3, 0, 1, 0, 0),
(6, 'G06', 'Kembung', 'Apakah anda merasakan kembung?', 3, 0, 3, 0, 0, 5),
(7, 'G07', 'Sendawa', 'Apakah anda sering sendawa tanpa sebab? ', 3, 0, 3, 0, 0, 0),
(8, 'G08', 'Kurang tidur', 'Apakah anda kurang tidur? (kurang dari 8 jam sehari)', 3, 0, 0, 0, 0, 0),
(9, 'G09', 'Pekerja berat', 'Apakah seorang anda pekerja berat? ex: buruh, petani dsb.', 3, 0, 0, 0, 0, 0),
(10, 'G10', 'Cegukan', 'Apakah anda sering cegukan?', 0, 3, 0, 0, 0, 0),
(11, 'G11', 'Suara menjadi parau', 'Apakah anda merasa suara anda parau?(selain saat batuk)', 0, 3, 0, 0, 0, 0),
(12, 'G12', 'Obesitas', 'Apakah anda penderita obesitas? (berat badan melebihi batas normal)', 0, 3, 0, 0, 0, 0),
(13, 'G13', 'Intoleransi terhadap makanan berlemak', 'Apakah anda merasakan perasaan tidak enak saat memakan makanan berlemak maupun berminyak?', 0, 0, 3, 0, 0, 0),
(14, 'G14', 'Kehilangan nafsu makan', 'Apakah anda merasa kurang nafsu makan?', 0, 0, 3, 5, 0, 0),
(15, 'G15', 'Penurunan berat badan tanpa sebab', 'Apakah anda mengalami penurunan berat badan tanpa sebab? ex : tidak melakukan diet atau hal lain yang menyebabkan penurunan berat badan', 0, 0, 3, 5, 3, 0),
(16, 'G16', 'Mata dan kulit menguning', 'Apakah anda merasa mata atau kulit anda menguning?', 0, 0, 0, 3, 0, 0),
(17, 'G17', 'Diare atau sembelit', 'Apakah anda sedang atau sering mengalami diare atau sembelit?', 0, 0, 0, 3, 0, 3),
(18, 'G18', 'Abdominal terasa sakit setelah makan', 'Apakah abdominal / perut anda terasa sakit setelah makan?', 0, 0, 0, 0, 3, 0),
(19, 'G19', 'Muntah', 'Apakah anda sering mengalami muntah?', 0, 0, 0, 5, 0, 0),
(20, 'G20', 'Haid / hamil / nifas', 'Apakah anda sedang haid / hamil atau nifas?', 5, 0, 0, 0, 0, 0),
(21, 'G21', 'merokok / konsumsi alkohol lebih dari 5 tahun', 'Apakah anda perokok atau mengkonsumsi alkohol selama lima tahun atau lebih?', 5, 3, 0, 0, 0, 0),
(22, 'G22', 'Penggunaan obat anti inflamasi', 'Apakah anda sering menkonsumsi obat antinyeri? ex: pereda nyeri sakit gigi, jantung patah tulang dsb.', 5, 0, 0, 0, 0, 0),
(23, 'G23', 'Makanan terasa tertahan di tulang dada (breastbone', 'Apakah anda sering merasakan makanan atau sesuatu seperti  tertahan di tulang dada? ', 0, 5, 0, 0, 0, 0),
(24, 'G24', 'Regurgitas', 'Apakah anda sering mengalami gejala naiknya makanan atau asam lambung ke kerongkongan?', 0, 5, 0, 0, 0, 0),
(25, 'G26', 'Muntah berdarah', 'Apakah anda pernah mengalami muntah berdarah?', 0, 0, 5, 0, 3, 0),
(26, 'G27', 'Rasa sakit pada lambung', 'Apakah anda merasakan sakit pada bagian lambung?', 0, 0, 0, 5, 0, 0),
(27, 'G25', 'Rasa nyeri pada bagian perut', 'Apakah anda merasakan nyeri pada bagian perut?', 0, 0, 5, 0, 0, 0),
(28, 'G28', 'Feces berdarah', 'Apakah pernah terdapat darah pada feces anda ?(pada saat anda buang air besar)', 0, 0, 0, 5, 0, 0),
(29, 'G29', 'Perut membengkak', 'Apakah perut anda membengkak? ', 0, 0, 0, 5, 0, 0),
(30, 'G30', 'Rasa sakit pada tulang rusuk kanan', 'Pernahkah anda merasakan sakit pada tulang rusuk bagian kanan?', 0, 0, 0, 0, 5, 0),
(31, 'G31', 'Rasa sakit yang menjalar ke punggung', 'Pernahkan anda merasakan sakit yang menjalar pada bagian punggung?', 0, 0, 0, 0, 5, 0),
(32, 'G32', 'Demam', 'Apakah anda merasakan demam', 0, 0, 0, 0, 3, 0),
(33, 'G33', 'Jantung berdetak cepat', 'Apakah jantung anda sering berdetak cepat?', 0, 0, 0, 0, 5, 0),
(34, 'G34', 'Feces berminyak dan bau', 'Apakah anda pernah mengalami feces berminyak dan bau pada saat buang air besar?', 0, 0, 0, 0, 5, 0),
(35, 'G35', 'Rasa sakit pada abdomen', 'Apakah abdominal anda sering merasa sakit?', 0, 0, 0, 0, 0, 5),
(36, 'G36', 'Terdapat lendir pada feces', 'Pernahkan anda mengalami feces anda berlendir?', 0, 0, 0, 0, 0, 3),
(37, 'G37', 'Kebiasaan makan sambil berbaring', 'Apakah anda sering makan sambil berbaring?', 0, 3, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_konsultasi`
--

CREATE TABLE IF NOT EXISTS `hasil_konsultasi` (
  `id_konsultasi` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `konsultasi` int(10) NOT NULL,
  `id_gejala` int(3) NOT NULL,
  `b1` int(1) NOT NULL,
  `b2` int(1) NOT NULL,
  `b3` int(1) NOT NULL,
  `b4` int(1) NOT NULL,
  `b5` int(1) NOT NULL,
  `b6` int(1) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_konsultasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=356 ;

--
-- Dumping data for table `hasil_konsultasi`
--

INSERT INTO `hasil_konsultasi` (`id_konsultasi`, `id_user`, `konsultasi`, `id_gejala`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `waktu`) VALUES
(279, 8, 1, 1, 1, 5, 0, 1, 0, 0, '2020-07-21 14:03:52'),
(280, 8, 1, 2, 3, 0, 3, 0, 0, 5, '2020-07-21 14:03:52'),
(281, 8, 1, 3, 1, 0, 3, 0, 0, 0, '2020-07-21 14:03:52'),
(282, 8, 1, 4, 0, 0, 1, 0, 0, 0, '2020-07-21 14:03:52'),
(283, 8, 1, 5, 0, 3, 0, 1, 0, 0, '2020-07-21 14:03:52'),
(284, 8, 2, 1, 1, 5, 0, 1, 0, 0, '2020-07-21 14:04:11'),
(285, 8, 2, 2, 3, 0, 3, 0, 0, 5, '2020-07-21 14:04:11'),
(286, 8, 2, 5, 0, 3, 0, 1, 0, 0, '2020-07-21 14:04:11'),
(287, 8, 2, 7, 3, 0, 3, 0, 0, 0, '2020-07-21 14:04:11'),
(288, 8, 2, 8, 3, 0, 0, 0, 0, 0, '2020-07-21 14:04:11'),
(289, 8, 3, 2, 3, 0, 3, 0, 0, 5, '2020-07-21 14:20:27'),
(290, 8, 3, 4, 0, 0, 1, 0, 0, 0, '2020-07-21 14:20:27'),
(291, 8, 3, 5, 0, 3, 0, 1, 0, 0, '2020-07-21 14:20:27'),
(292, 8, 3, 7, 3, 0, 3, 0, 0, 0, '2020-07-21 14:20:27'),
(293, 8, 4, 1, 1, 5, 0, 1, 0, 0, '2020-07-21 15:04:00'),
(294, 8, 4, 2, 3, 0, 3, 0, 0, 5, '2020-07-21 15:04:00'),
(295, 8, 4, 3, 1, 0, 3, 0, 3, 0, '2020-07-21 15:04:00'),
(296, 8, 4, 6, 3, 0, 3, 0, 0, 5, '2020-07-21 15:04:00'),
(297, 8, 4, 7, 3, 0, 3, 0, 0, 0, '2020-07-21 15:04:00'),
(298, 8, 4, 10, 0, 3, 0, 0, 0, 0, '2020-07-21 15:04:00'),
(299, 8, 5, 8, 3, 0, 0, 0, 0, 0, '2020-07-25 08:41:27'),
(300, 8, 5, 9, 3, 0, 0, 0, 0, 0, '2020-07-25 08:41:27'),
(301, 8, 5, 10, 0, 3, 0, 0, 0, 0, '2020-07-25 08:41:27'),
(302, 8, 5, 11, 0, 3, 0, 0, 0, 0, '2020-07-25 08:41:27'),
(303, 8, 5, 12, 0, 3, 0, 0, 0, 0, '2020-07-25 08:41:27'),
(304, 8, 6, 1, 1, 5, 0, 1, 0, 0, '2020-07-25 11:13:37'),
(305, 8, 6, 2, 3, 0, 3, 0, 0, 5, '2020-07-25 11:13:37'),
(306, 8, 6, 3, 1, 0, 3, 0, 3, 0, '2020-07-25 11:13:37'),
(307, 8, 6, 5, 0, 3, 0, 1, 0, 0, '2020-07-25 11:13:37'),
(308, 8, 6, 6, 3, 0, 3, 0, 0, 5, '2020-07-25 11:13:37'),
(309, 8, 6, 8, 3, 0, 0, 0, 0, 0, '2020-07-25 11:13:37'),
(310, 8, 6, 14, 0, 0, 3, 5, 0, 0, '2020-07-25 11:13:37'),
(311, 8, 6, 17, 0, 0, 0, 3, 0, 3, '2020-07-25 11:13:37'),
(312, 8, 6, 21, 5, 3, 0, 0, 0, 0, '2020-07-25 11:13:37'),
(313, 8, 6, 24, 0, 5, 0, 0, 0, 0, '2020-07-25 11:13:37'),
(314, 8, 6, 27, 0, 0, 5, 0, 0, 0, '2020-07-25 11:13:37'),
(315, 8, 6, 37, 0, 3, 0, 0, 0, 0, '2020-07-25 11:13:37'),
(316, 8, 7, 1, 1, 5, 0, 1, 0, 0, '2020-07-25 11:20:11'),
(317, 8, 7, 3, 1, 0, 3, 0, 3, 0, '2020-07-25 11:20:11'),
(318, 8, 7, 5, 0, 3, 0, 1, 0, 0, '2020-07-25 11:20:11'),
(319, 8, 7, 6, 3, 0, 3, 0, 0, 5, '2020-07-25 11:20:11'),
(320, 8, 7, 8, 3, 0, 0, 0, 0, 0, '2020-07-25 11:20:11'),
(321, 8, 7, 14, 0, 0, 3, 5, 0, 0, '2020-07-25 11:20:11'),
(322, 8, 7, 17, 0, 0, 0, 3, 0, 3, '2020-07-25 11:20:11'),
(323, 8, 7, 21, 5, 3, 0, 0, 0, 0, '2020-07-25 11:20:11'),
(324, 8, 7, 23, 0, 5, 0, 0, 0, 0, '2020-07-25 11:20:11'),
(325, 8, 7, 24, 0, 5, 0, 0, 0, 0, '2020-07-25 11:20:11'),
(326, 8, 7, 27, 0, 0, 5, 0, 0, 0, '2020-07-25 11:20:11'),
(327, 8, 7, 37, 0, 3, 0, 0, 0, 0, '2020-07-25 11:20:11'),
(328, 8, 8, 1, 1, 5, 0, 1, 0, 0, '2020-08-07 09:32:52'),
(329, 8, 8, 2, 3, 0, 3, 0, 0, 5, '2020-08-07 09:32:52'),
(330, 8, 8, 3, 1, 0, 3, 0, 3, 0, '2020-08-07 09:32:52'),
(331, 8, 8, 5, 0, 3, 0, 1, 0, 0, '2020-08-07 09:32:52'),
(332, 8, 8, 6, 3, 0, 3, 0, 0, 5, '2020-08-07 09:32:52'),
(333, 8, 8, 7, 3, 0, 3, 0, 0, 0, '2020-08-07 09:32:52'),
(334, 7, 9, 16, 0, 0, 0, 3, 0, 0, '2020-08-07 09:40:36'),
(335, 7, 9, 17, 0, 0, 0, 3, 0, 3, '2020-08-07 09:40:36'),
(336, 7, 9, 18, 0, 0, 0, 0, 3, 0, '2020-08-07 09:40:36'),
(337, 7, 9, 19, 0, 0, 0, 5, 0, 0, '2020-08-07 09:40:36'),
(338, 7, 9, 20, 5, 0, 0, 0, 0, 0, '2020-08-07 09:40:36'),
(339, 8, 10, 1, 1, 5, 0, 1, 0, 0, '2020-08-08 09:43:20'),
(340, 8, 10, 2, 3, 0, 3, 0, 0, 5, '2020-08-08 09:43:20'),
(341, 8, 10, 3, 1, 0, 3, 0, 3, 0, '2020-08-08 09:43:20'),
(342, 8, 10, 4, 0, 0, 1, 0, 0, 0, '2020-08-08 09:43:20'),
(343, 8, 10, 6, 3, 0, 3, 0, 0, 5, '2020-08-08 09:43:20'),
(344, 8, 10, 7, 3, 0, 3, 0, 0, 0, '2020-08-08 09:43:20'),
(345, 8, 11, 5, 0, 3, 0, 1, 0, 0, '2020-08-10 09:46:32'),
(346, 8, 11, 6, 3, 0, 3, 0, 0, 5, '2020-08-10 09:46:32'),
(347, 8, 11, 7, 3, 0, 3, 0, 0, 0, '2020-08-10 09:46:32'),
(348, 8, 11, 8, 3, 0, 0, 0, 0, 0, '2020-08-10 09:46:32'),
(349, 8, 12, 6, 3, 0, 3, 0, 0, 5, '2020-08-10 16:44:02'),
(350, 8, 12, 7, 3, 0, 3, 0, 0, 0, '2020-08-10 16:44:02'),
(351, 8, 12, 8, 3, 0, 0, 0, 0, 0, '2020-08-10 16:44:02'),
(352, 8, 12, 11, 0, 3, 0, 0, 0, 0, '2020-08-10 16:44:02'),
(353, 8, 12, 13, 0, 0, 3, 0, 0, 0, '2020-08-10 16:44:02'),
(354, 8, 12, 15, 0, 0, 3, 5, 3, 0, '2020-08-10 16:44:02'),
(355, 8, 12, 21, 5, 3, 0, 0, 0, 0, '2020-08-10 16:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE IF NOT EXISTS `keterangan` (
  `id_keterangan` int(10) NOT NULL AUTO_INCREMENT,
  `id_konsultasi` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nilai` double NOT NULL,
  `kd_penyakit` varchar(5) NOT NULL,
  `tgl_konsultasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_keterangan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `keterangan`
--

INSERT INTO `keterangan` (`id_keterangan`, `id_konsultasi`, `nama`, `nilai`, `kd_penyakit`, `tgl_konsultasi`) VALUES
(103, 12, 'amirul ikhsan', 0.46666666666667, 'P01', '2020-08-10 16:55:10'),
(102, 12, 'amirul ikhsan', 0.46666666666667, 'P01', '2020-08-10 16:54:41'),
(101, 12, 'amirul ikhsan', 0.46666666666667, 'P01', '2020-08-10 16:54:37'),
(100, 12, 'amirul ikhsan', 0.46666666666667, 'P01', '2020-08-10 16:46:46'),
(99, 12, 'amirul ikhsan', 0.46666666666667, 'P01', '2020-08-10 16:44:04'),
(98, 11, 'amirul ikhsan', 0.3, 'P01', '2020-08-10 09:49:53'),
(97, 11, 'amirul ikhsan', 0.3, 'P01', '2020-08-10 09:47:00'),
(96, 10, 'amirul ikhsan', 0.36666666666667, 'P01', '2020-08-08 09:50:29'),
(95, 10, 'amirul ikhsan', 0.36666666666667, 'P01', '2020-08-08 09:43:36'),
(94, 9, 'ikhsan', 0.26829268292683, 'P04', '2020-08-07 09:40:38'),
(93, 8, 'amirul ikhsan', 0.36666666666667, 'P01', '2020-08-07 09:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_user` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nm_lengkap` varchar(255) NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_user`, `username`, `password`, `nm_lengkap`, `jns_kelamin`, `alamat`, `no_hp`, `pekerjaan`) VALUES
(7, 'ikhsan', 'ikhsan', 'ikhsan', 'L', 'padang', '0899', 'apa aja'),
(8, 'amirul', 'ikhsan', 'amirul ikhsan', 'L', 'buayan', '089199999', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `kd_penyakit` varchar(50) NOT NULL,
  `id_admin` int(20) NOT NULL,
  `nm_penyakit` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `solusi` text NOT NULL,
  PRIMARY KEY (`kd_penyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kd_penyakit`, `id_admin`, `nm_penyakit`, `ket`, `solusi`) VALUES
('P01', 1, 'Dispepsia fungsional', 'Dispepsia fungsional adalah gejala dispepsia yang tidak disebabkan oleh adanya kerusakan organ pencernaan, melainkan dikarenakan oleh kerusakan fungsi pada organ tersebut. ', '1.	Memberi penjelasan kepada pasien mengenai gejala dispepsia sembari menenangkan pasien untuk mengurangi stress, karena stress dapat memperburuk kondisi pasien dispepsia.<br>\r\n2.	Atur pola makan dengan baik<br>\r\n3.	Kurangi / berhenti merokok dan konsumsi alkohol<br>\r\n4.	Hindari penggunaan obat anti inflamasi atau konsultasikan dengan dokter terlebih dahulu jika memang sangat membutuhkan jenis obat â€“ obatan tersebut.<br>\r\n5.	Konsultasikan dengan dokter guna mendapatkan diagnosis dan penanganan yang tepat. Pemberian obat-obatan untuk  dispepsia dilakukan berdasarkan kondisi tubuh pasien itu sendiri.\r\n'),
('P02', 1, 'Gastroephagel Reflux Disease (GERD)', 'Gasttroephagel Reflux Disease (GERD) adalah kondisi dimana asam lambung mengalir ke sepanjang esofagus yang dapat menyebabkan rasa terbakar di dada atau gejala lainya', '1. Kurangi berat badan bagi penderita obesitas<br>\r\n2. Hindari penggunaan obat anti inflamasi atau konsultasikan ke dokter terlebih dahulu sebelum penggunaan<br>\r\n3. Tiggikan posisi kepala saat tidur jika merasakan gejala pada malam hari<br>\r\n4. Makanlah 2 -  3 jam sebelum tidur<br>\r\n5. Hindari minuman beralkohol dan kafein<br>\r\n6. Berhenti merokok<br>\r\n7. Segera konsultasikan ke dokter jika anda memiliki gejalas seperti dada yang terasa sakit atau sesak nafas'),
('P03', 1, 'Tukak Peptik', 'Tukak peptik adalah peradangan luka pada perut dan membran usus dua elas jari. Luka ini teradi ketika membran usus dua belas jari tertusuk dan mengenai jaringan yang lebih dalam.', '1. Diet sehat, perbanyak konsusmsi makanan bervitamin A,C dan berserat <br>\r\n2. Hindari penggunaan obat anti inflamasi atau konsultasikan terlebih dahulu sebelum pemkaian <br>\r\n3. Kurangi stress, karena stress dapat memperburuk gejala dispepsia <br> \r\n4. Berhenti merokok dan hindari penggunaan alkohol  <br> \r\n5. Istirahat yang cukup, hindari begadang jika tidak diperlukan <br>\r\n6. Konsultasikan ke dokter guna mendapatkan diagnosa yang lebih tepat. Penggunaan obat - obatan tertentu sebaiknya dikonsultasikan ke dokter terlebih dahulu guna meminimalisir kemungkinan komplikasi.'),
('P04', 1, 'Kanker Lambung', 'Kanker lambung merupakan penyakit yang ditandai dengan adanya tumor ganas atau sel kanker yang tumbuh pada lambung. Perkembangan sel tak normal untuk menjadi tumor dan kanker  cenderung berjalan lambat dan membutuhkan waktu bertahun -  tahun.', '1. Tindakan penanganan kanker lambung dilakukan berdasarkan berpa lama pasien menderita penyakit dan seberapa banyak persebaran sel kanker tersebut. Segera konsultasikan ke dokter jika merasakan gejala mirip dengan kanker lambung. <br>\r\n2. Tindakan pencegahan penyakit dapat dilakukan dengan mengkonsumsi sayuran dan buah segar segar serta makanan kaya serat, berhenti merokok, hindari penggunaan alkohol,serta menghindari penggunaan obat anti inflamasi '),
('P05', 1, 'Pankreasitis', 'Pankreasitis adalah peradangan pada pankreas yang biasanya terjadi secara tiba - tiba dalam waktu singkat. ', '1. Pasien pankreasitis dianjurkan untuk berpuasa untuk mengurangi beban pada pankreas <br>\r\n2. Hindari makanan berlemak dan kolesterol, karena makanan berlemak sangat membebani fungsi kerja pankreas <br>\r\n3. Kurangi stress, karenas stress dapat memperburuk gejala dispepsia <br>\r\n4. Berhenti merokok dan hindari konsumsi alkohol <br>\r\n5. Perbanyak meminum air putih'),
('P06', 1, 'Irritable Bowel Syndrom (IBS)', 'Irritable bowel syndrom  adalah gejala penyakit yang terdapat pada usus besar. Gejala dari penyakit ini biasanya adalah rasa sakit pada abdomen, kelebihan gas, kembung, diare atau sembelit ataupun keduanya. IBS kronis membutuhkan waktu lama untuk dapat disembuhkan ', '1. Hindari konsumsi makanan pemicu IBS seperti soda, alkohol, kafein, dan sayuran lobak brokoli dan lainya <br>\r\n2. Konsumsi makanan tinggi serat <br>\r\n3. Perbanyak minum air putih <br>\r\n4. Berhenti merokok dan hindari konsumsi alkohol <br>\r\n5. Istirahat yang cukuk <br>\r\n6. Rajin berolah raga <br>\r\n7. Konsultasikan ke dokter jika gejala yang dirasakan semakin parah');
