
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2017 at 08:38 AM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u584764515_sarah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` double NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `kategori`, `foto`, `total`, `deskripsi`, `harga`, `tanggal`) VALUES
(1, 'Panasonic KX-FT987CX', 'facsimile', 'kx_ft987cx-ec42b-2321_175-t598_26.png', '199', 'DESCRIPTION :\r\n- Digital Answering System (About 18 Min. Recording)\r\n- DIgital Duplex Speakerphone\r\n- 28 page fax memory\r\n- Automatic papper cutter\r\n- Dimensions (W x D x H) : 352 x 224 x 121 mm\r\n- Weight : 2.8kg', 1200000, '2016-12-14 11:40:09'),
(2, 'di_TEW-812DRU_1 ', 'Access-Control', 'cansec_di_tew_812dru_1-206f0-2321_68-t598_26.jpg', '200', 'di_TEW-812DRU_1 ', 1000000, '2016-12-14 11:41:31'),
(3, ' Bosch VDN 240V03-1 Camera CCTV (Dome)', 'cctv', 'bosch_dome_cctv_camera-7594f-2321_72-t598_26.jpg', '200', 'Camera CCTV (Dome)', 1000000, '2016-12-14 11:42:50'),
(4, 'Panasonic KX-MB1500CX ', 'facsimile', 'kx_mb1500cx-ddb85-2321_170-t598_26.png', '198', '- 18 ppm (A4) Laser Printing\r\n- Colour Scan Capability & Easy Print Utility\r\n- 600 x 600 dpi Print Resolution \r\n- Dimensions (W x D x H) :\r\n380 x 360 x 203 mm\r\n- Weight : 9kg', 2500000, '2016-12-14 11:43:57'),
(5, 'KX-FP206CX ', 'facsimile', 'kx_fp206cx-9648e-2321_174-t598_26.png', '200', '- 28 Pages Fax Modem\r\n- 10 Page Automatic Document Feeder\r\n- Enchanced Copier Function\r\n- Dimensions (W x H x D) : 356 x 200 x 106 mm\r\n- Weight : 2.7kg', 1200000, '2016-12-14 11:45:28'),
(7, 'Analog Phone KX-TS880BX', 'telephone', 'kx_ts880_hitam-f4e86-2321_152.jpg', '198', '- Digital Answering System\r\n- Caller ID Compatible\r\n- 15 min. Recording Time\r\n- 50-Station Caller ID Memory\r\n- 20-Station Redial Memory\r\n- 3-Station One Touch Dial\r\n- Speakerphone\r\n- Data Port\r\n- 2-Way Recording', 250000, '2016-12-14 11:48:58'),
(8, 'Analog Phone KX-TS505MX ', 'telephone', 'kx_ts505_1-8cb8c-2321_151-t598_26.jpg', '200', '- Redial Memory (Last Number)\r\n- Electronic Volume Control (6-Step)\r\n- Timed Flash (600 ms)\r\n- Swicthable Toe / Pulse Setting\r\n- 3-Step Ringer Volume (Off, Low, High)', 280000, '2016-12-14 11:49:41'),
(9, 'Wireless Phone KX-TG1311CX/KX-TG1312CX', 'telephone', 'kx_tg1311cx-e14a3-2321_129-t598_26.jpg', '199', '- Backlit LCD on Handset\r\n- 50-Name & Number Phonebook\r\n- Intercom between handsets (KX-TG1312 only)\r\n- Caller ID Compatible\r\n- One-Touch Dial Up to 9 Numbers\r\n- 10-Redial Memory\r\n- Ni-MH Batteries included', 650000, '2016-12-14 11:50:31'),
(10, ' Wireless Phone KX-TG7331CX', 'telephone', 'kx_tg7331_3-2e6b0-2321_133-t598_26.png', '200', '- 1.4-inch Backlit LCD on Handset\r\n- Keypad and Digital Speakerphone on Base Unit and Handset\r\n- 100-Name & Number Phonebook\r\n- Polyphonic Ringer Melodies on Handset\r\n- Expandable Up to 6 Handset\r\n- Ligth-Up Indicator with Ringer Alert\r\n- Up to 3-Way Conference Capability with Outside Line (Base Unit - Handset - Outside Line)\r\n- Intercom (Base Unit - Handset)\r\n- Caller ID Compatible\r\n- Base Unit Speed Dial (10 Number)\r\n- Ligthed Handset Keypad\r\n- Ni-MH Batteries included', 1500000, '2016-12-14 11:52:51'),
(11, 'NEC SL1000 ', 'telephone', 'jual_pabx_nec_sl1000-83979-2321_49.jpg', '200', '1. Built-in Voice Messaging \r\nMeningkatkan produktivitas penanganan masuk panggilan dengan Built-in fungsi Auto-Menjawab. PABX NEC SL1000 awalnya built-in dengan Auto-Menjawab fitur tanpa tambahan hardware, dan mampu merekam hingga 4 salam pesan oleh pengguna. Hal ini juga terus hingga 10 pesan yang akan direkam dari luar.\r\n2.	Caller-ID \r\nIdentifikasi yang telah menghubungi kantor Anda dengan fitur Caller-ID. PABX NEC SL1000 dapat antarmuka batang Caller-ID dari Telco, dan Informasi dapat ditampilkan pada semua jenis terminal. Selain itu, nada dering masuk dapat diatur terhadap tertentu Caller-ID angka, yang memungkinkan identifikasi oleh nada dering\r\n3.	Kelompok Mendengarkan \r\nKelompok fungsi Mendengarkan memungkinkan Anda untuk menyiarkan percakapan Anda melalui built-in speaker pada terminal multiline. ini memungkinkan pihak sekitarnya Anda untuk mendengarkan untuk percakapan\r\n4. Konferensi\r\nBergabunglah konferensi tanpa meninggalkan meja. Fitur ini memungkinkan Anda untuk membuat sebuah teleconference antara internal dan / atau pihak eksternal. (maksimum 16 peserta per Kelompok total 32 peserta secara bersamaan) Konferensi jarak jauh juga di mana tersedia pihak internal dan / atau eksternal dapat mengakses ke konferensi virtual dengan password\r\n5. Hotline \r\nFitur Ideal untuk penerimaan, penjaga keamanan rumah, petugas parkir, dan lain-lain Set up terminal untuk penggunaan khusus. fungsi ini memungkinkan Anda untuk memanggil ekstensi pra-ditugaskan atau nomor eksternal dengan hanya mengangkat handset tanpa panggilan nomor apapun\r\n6. Modus Day / Night \r\nPengusaha dapat mengontrol Hari / Modus malam untuk panggilan masuk setelah jam kerja dan pada panggilan yang sama waktu kontrol keluar setelah jam kerja. SL1000 menyediakan sampai 8 mode sistem yang dapat diaktifkan baik secara otomatis atau manual. Setiap mode dapat dikonfigurasi untuk mengarahkan semua panggilan terhadap ekstensi tertentu atau kelompok-kelompok yang sesuai kebutuhan Anda secara efektif', 2500000, '2016-12-14 11:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` double NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `username`, `alamat`, `phone`, `email`, `password`, `foto`) VALUES
(1, 'sarah dwita maharani', 'sarahdm', 'kalibata ', '0123123123', 'sdwitamaharani@gmail.com', 'sarahdm', ''),
(2, 'Selvya Novi', 'selvya', 'Cirendeu', '0124578963', 'nselvyanovi@gmail.com', 'selvya', ''),
(3, 'Anang Prahardin', 'anang', 'citayam', '565656555695', 'anang@gmail.com', 'anang', ''),
(4, 'Anang Prahardin', 'anang', 'citayam', '565656555695', 'anang@gmail.com', 'anang', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `bank` varchar(255) NOT NULL,
  `atasnama` varchar(255) NOT NULL,
  `rekening` varchar(255) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_user`, `id_barang`, `qty`, `status`, `bank`, `atasnama`, `rekening`, `bukti`, `harga`, `tanggal`) VALUES
(1, 1, 1, 3, 1, 'BCA', 'SARAH DM', '0147852369', 'image.jpg', 1700000, '2016-12-14 11:55:19'),
(2, 2, 9, 1, 1, 'MANDIRI', 'SELVYA NOVI', '012153521511', 'Wallpapers-Hd-30D.jpg', 650000, '2016-12-14 11:57:55'),
(3, 3, 4, 2, 1, 'MANDIRI', 'ANANG P', '021547892236', 'stars.jpg', 5000000, '2016-12-14 12:00:02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
