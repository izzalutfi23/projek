-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 02:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `lang` enum('id','en') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `foto`, `judul`, `tanggal`, `penulis`, `isi`, `lang`) VALUES
(3, '1.jpg', 'Parents who try to be their children’s best friends', '2019-07-26', 'Cathrine Zeta A', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestibulum tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, ut molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, egestas eget ex. Suspendisse potenti. Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh</p>\r\n\r\n<p>Fusce imperdiet, eros non fringilla auctor, dolor leo blandit magna, in pretium erat elit id neque. Nulla sagittis consequat arcu euscura dignissim. Donec ultricies id ante vel blandit. Integer sit amet erat tincidunt, dictum orci non, tincidunt nisi. Crasania nisl eu aliquet pharetra. Duis finibus pulvinar tellus, sed convallis lectus faucibus vitae. Fusce rhoncus placerat magna, nec fermentum ex tristique eu. Donec aliquet purus lectus, ut finibus augue porta ac. Nullam ultricies tempus libero.</p>\r\n\r\n<p>Proin ac neque quis ex malesuada feugiat sed at ligula. Donec efficitur nisl tortor, eget auctor ex lobortis id. Duis cursus turpis nec venenatis dapibus. Nunc eget rhoncus purus, a semper orci. Mauris blandit non arcu malesuada aliquam. Fusce iaculis augue ut neque sollicitudin, quis interdum enim consectetur. Nullam ut facilisis erat, eget viverra sem. Nulla lobortis tempor magna in maximus. Fusce nec ante et nunc elementum rutrum ut in odio. Quisque cursus sit amet massa in mollis suspendisse ut ipsum a orci scelerisque tincidunt. Curabitur pellentesque lobortis ligula, in scelerisque felis volutpat nec.</p>\r\n\r\n<p>Aenean et enim aliquet, rutrum ante auctor, euismod urna. Phasellus ac erat faucibus, laoreet massa id, sagittis orci. In placerat pharetra lectus vitae gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus massa massa, porttitor eget consectetur sed, vulputate ac velit. Integer ullamcorper ante ex. Quisque vitae eleifend elit. Vestibulum mi lectus, euismod in nunc, posuere eleifend sapien. In commodo euismod lectus quis porttitor.</p>\r\n', 'id'),
(4, '2.jpg', 'Graduations could be delayed as external examiners', '2019-07-13', 'Cathrine Zeta', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestibulum tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, ut molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, egestas eget ex. Suspendisse potenti. Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh</p>\r\n\r\n<p>Fusce imperdiet, eros non fringilla auctor, dolor leo blandit magna, in pretium erat elit id neque. Nulla sagittis consequat arcu euscura dignissim. Donec ultricies id ante vel blandit. Integer sit amet erat tincidunt, dictum orci non, tincidunt nisi. Crasania nisl eu aliquet pharetra. Duis finibus pulvinar tellus, sed convallis lectus faucibus vitae. Fusce rhoncus placerat magna, nec fermentum ex tristique eu. Donec aliquet purus lectus, ut finibus augue porta ac. Nullam ultricies tempus libero.</p>\r\n\r\n<p>Proin ac neque quis ex malesuada feugiat sed at ligula. Donec efficitur nisl tortor, eget auctor ex lobortis id. Duis cursus turpis nec venenatis dapibus. Nunc eget rhoncus purus, a semper orci. Mauris blandit non arcu malesuada aliquam. Fusce iaculis augue ut neque sollicitudin, quis interdum enim consectetur. Nullam ut facilisis erat, eget viverra sem. Nulla lobortis tempor magna in maximus. Fusce nec ante et nunc elementum rutrum ut in odio. Quisque cursus sit amet massa in mollis suspendisse ut ipsum a orci scelerisque tincidunt. Curabitur pellentesque lobortis ligula, in scelerisque felis volutpat nec.</p>\r\n\r\n<p>Aenean et enim aliquet, rutrum ante auctor, euismod urna. Phasellus ac erat faucibus, laoreet massa id, sagittis orci. In placerat pharetra lectus vitae gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus massa massa, porttitor eget consectetur sed, vulputate ac velit. Integer ullamcorper ante ex. Quisque vitae eleifend elit. Vestibulum mi lectus, euismod in nunc, posuere eleifend sapien. In commodo euismod lectus quis porttitor.</p>\r\n', 'id'),
(5, '3.jpg', 'Private schools adopt a Ucas-style application system', '2019-07-13', 'Rikza ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestibulum tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, ut molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, egestas eget ex. Suspendisse potenti. Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh</p>\r\n\r\n<p>Fusce imperdiet, eros non fringilla auctor, dolor leo blandit magna, in pretium erat elit id neque. Nulla sagittis consequat arcu euscura dignissim. Donec ultricies id ante vel blandit. Integer sit amet erat tincidunt, dictum orci non, tincidunt nisi. Crasania nisl eu aliquet pharetra. Duis finibus pulvinar tellus, sed convallis lectus faucibus vitae. Fusce rhoncus placerat magna, nec fermentum ex tristique eu. Donec aliquet purus lectus, ut finibus augue porta ac. Nullam ultricies tempus libero.</p>\r\n\r\n<p>Proin ac neque quis ex malesuada feugiat sed at ligula. Donec efficitur nisl tortor, eget auctor ex lobortis id. Duis cursus turpis nec venenatis dapibus. Nunc eget rhoncus purus, a semper orci. Mauris blandit non arcu malesuada aliquam. Fusce iaculis augue ut neque sollicitudin, quis interdum enim consectetur. Nullam ut facilisis erat, eget viverra sem. Nulla lobortis tempor magna in maximus. Fusce nec ante et nunc elementum rutrum ut in odio. Quisque cursus sit amet massa in mollis suspendisse ut ipsum a orci scelerisque tincidunt. Curabitur pellentesque lobortis ligula, in scelerisque felis volutpat nec.</p>\r\n\r\n<p>Aenean et enim aliquet, rutrum ante auctor, euismod urna. Phasellus ac erat faucibus, laoreet massa id, sagittis orci. In placerat pharetra lectus vitae gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus massa massa, porttitor eget consectetur sed, vulputate ac velit. Integer ullamcorper ante ex. Quisque vitae eleifend elit. Vestibulum mi lectus, euismod in nunc, posuere eleifend sapien. In commodo euismod lectus quis porttitor.</p>\r\n', 'id'),
(6, '4.jpg', 'Cambridge digs in at the top of university league table', '2019-07-13', 'Izza Lutfi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel urna eget lectus molestie rhoncus sed in nunc. Vestibulum tincidunt facilisis ligula sed viverra. Duis porttitor sapien maximus, volutpat massa malesuada. Curabitur orci est, ut molestie eget orci, tincidunt dictum felis. Cras ante nunc, pharetra eu rutrum aliquet, egestas eget ex. Suspendisse potenti. Quisque asvitae eros efficitur lacus viverra molestie at ut mi. Quisque id mollis nibh</p>\r\n\r\n<p>Fusce imperdiet, eros non fringilla auctor, dolor leo blandit magna, in pretium erat elit id neque. Nulla sagittis consequat arcu euscura dignissim. Donec ultricies id ante vel blandit. Integer sit amet erat tincidunt, dictum orci non, tincidunt nisi. Crasania nisl eu aliquet pharetra. Duis finibus pulvinar tellus, sed convallis lectus faucibus vitae. Fusce rhoncus placerat magna, nec fermentum ex tristique eu. Donec aliquet purus lectus, ut finibus augue porta ac. Nullam ultricies tempus libero.</p>\r\n\r\n<p>Proin ac neque quis ex malesuada feugiat sed at ligula. Donec efficitur nisl tortor, eget auctor ex lobortis id. Duis cursus turpis nec venenatis dapibus. Nunc eget rhoncus purus, a semper orci. Mauris blandit non arcu malesuada aliquam. Fusce iaculis augue ut neque sollicitudin, quis interdum enim consectetur. Nullam ut facilisis erat, eget viverra sem. Nulla lobortis tempor magna in maximus. Fusce nec ante et nunc elementum rutrum ut in odio. Quisque cursus sit amet massa in mollis suspendisse ut ipsum a orci scelerisque tincidunt. Curabitur pellentesque lobortis ligula, in scelerisque felis volutpat nec.</p>\r\n\r\n<p>Aenean et enim aliquet, rutrum ante auctor, euismod urna. Phasellus ac erat faucibus, laoreet massa id, sagittis orci. In placerat pharetra lectus vitae gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus massa massa, porttitor eget consectetur sed, vulputate ac velit. Integer ullamcorper ante ex. Quisque vitae eleifend elit. Vestibulum mi lectus, euismod in nunc, posuere eleifend sapien. In commodo euismod lectus quis porttitor.</p>\r\n', 'id'),
(7, '3.jpg', 'test eng', '2019-07-24', 'saya', 'bkbckvkhw dgodgiwugi dweg diewigdo ', 'en'),
(8, '1.jpg', 'Blog number 2', '2019-07-24', 'ivgig iy g', 'igigg giy gig 9g9 g9 g9gg9g ', 'en'),
(9, '6.jpg', 'Example guys', '2019-07-25', 'i\'m', '<p>kbhjbibi huoho gh oigh onn ouo guigfotd8oswqwfpd&nbsp; qp;dgp&nbsp;</p>\r\n', 'en'),
(10, '5.jpg', 'Test again', '2019-07-25', 'Fernando', '<p>igugu g9gsw d wh dphdohwodgw d gwdgw gd0g0d</p>\r\n', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `id_kategori`, `foto`) VALUES
(8, 1, '1.jpg'),
(9, 1, '2.jpg'),
(10, 1, '1.jpg'),
(11, 1, '5.jpg'),
(12, 1, '4.jpg'),
(13, 1, '1.jpg'),
(14, 1, '1.jpg'),
(15, 1, 'author.jpg'),
(16, 2, '2.jpg'),
(17, 2, '1.jpg'),
(19, 2, '1.jpg'),
(20, 2, '4.jpg'),
(21, 2, '5.jpg'),
(22, 2, '5.jpg'),
(23, 2, '6.jpg'),
(24, 2, '1.jpg'),
(25, 3, '2.jpg'),
(26, 3, '3.jpg'),
(27, 3, '1.jpg'),
(28, 3, '2.jpg'),
(29, 3, '3.jpg'),
(30, 3, '4.jpg'),
(31, 3, '5.jpg'),
(32, 3, '6.jpg'),
(33, 4, '1.jpg'),
(34, 4, '2.jpg'),
(35, 4, '1.jpg'),
(36, 4, '4.jpg'),
(37, 4, '5.jpg'),
(38, 4, '7.jpg'),
(39, 4, '8.jpg'),
(40, 4, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job_place`
--

CREATE TABLE `job_place` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_place`
--

INSERT INTO `job_place` (`id`, `nama`, `foto`, `jabatan`, `ig`, `fb`, `linkedin`) VALUES
(1, 'test', '1.jpg', 'CEO', 'www.instagram.com', 'www.facebook.com', 'www.linkedin.com'),
(2, 'Izza', '2.jpg', 'Manager', 'www.instagram.com', 'www.facebook.com', 'www.linkedin.com'),
(4, 'Kirun', '7.jpg', 'Staff Ahli', 'www.instagram.com', 'www.facebook.com', 'www.linkedin.com'),
(5, 'Farhan', '6.jpg', 'Admin', 'www.instagram.com', 'www.facebook.com', 'www.linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id_kategori`, `kategori`) VALUES
(1, 'Fasilitas'),
(2, 'Kegiatan kampus'),
(3, 'Kegiatan Usaha EHC'),
(4, 'Uji Kompetensi');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id` int(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `lang` enum('id','en') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `foto`, `judul`, `keterangan`, `lang`) VALUES
(3, 'tataboga.jpg', 'Tata Boga', 'Suatu disiplin ilmu terkait dengan seni dalam menyiapkan, memasak, dan menghidangkan makanan siap saji', 'id'),
(4, 'tatahidangan.jpg', 'Tata Hidangan', 'Suatu disiplin ilmu terkait cara menyusun makanan untuk memperindah makanan dan minuman yang disajikan kepada tamu atau konsumen', 'id'),
(5, 'bar.jpg', 'Bar', 'Suatu disiplin ilmu terkait cara memberikan pelayanan segala macam minuman baik yang beralkohol maupun yang tidak beralkohol', 'id'),
(6, 'tatagraha.jpg', 'Tata Graha', 'Suatu disiplin ilmu terkait mengatur atau menata peralatan, menjaga kebersihan dan kenyamanan, memperbaiki kerusakan dan memberi dekorasi dengan tujuan agar hotel tampak rapi, bersih, menarik dan menyenangkan', 'id'),
(7, 'bar.jpg', 'Test Guys', 'jggvu yfu g guy fuy fuy 8i guygi ', 'en'),
(8, '6.jpg', 'Training Program', 'jkbbb uoh ohhoo ho hoh oho hohohohoi ', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `j_kel` enum('L','P') NOT NULL,
  `kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `email`, `alamat`, `no_hp`, `j_kel`, `kegiatan`) VALUES
(5, 'Muhammad Izza Lutfi', 'izzalutfi045@gmail.com', 'Bulustalan, Semarang', '6285210539260', 'L', 'Kuliah'),
(7, 'hjvjhv', 'jvjvj', 'vjhvjhv', '625786987654', 'P', 'Kuliah'),
(8, 'hggc', 'gcgjc', 'cghcg', '657854567', 'P', 'Sedang Bekerja'),
(9, 'hchc', 'chchcj', 'uyfufuyf', '54678654567', 'L', 'Lulus'),
(11, 'vujv', 'vjvjv', 'vjvjvj', '345678', 'L', 'Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `subjek`, `isi`) VALUES
(1, 'test', 'test@gmail.com', 'test pesan', 'vjvihg igiugiugui hiu hiuoghigp9giyg ugf ufu7f 7utifu  fou f8 '),
(2, 'Izza', 'izza@gmail.com', 'xxxxxxx', 'iubiu hiuo ghiug igignug ugfufguu'),
(4, 'tes eng', 'vjvjv', 'vjvj', 'vjhvkhv u ih ho');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `lang` enum('id','en') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `judul`, `isi`, `foto`, `lang`) VALUES
(9, 'Gambar ke 1', 'Usahakan kecerahan gambar diedit agak gelap supaya tulisannya kelihatann', '1.jpg', 'id'),
(10, 'Gambar ke 2', 'Education is not just about going to school and getting a degree. It\'s about widening yourknowledge and absorbing the truth about life. Knowledge is power.', '2.jpg', 'id'),
(11, 'test eng', 'welcome to jungle', '1.jpg', 'en'),
(13, 'Image 2', 'test input english', '6.jpg', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `lang` enum('id','en') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `foto`, `nama`, `jabatan`, `isi`, `lang`) VALUES
(3, '3.jpg', 'Suhardi', 'Manager Fave Hotel', 'I want to let you know that I am very absolutely delighted with the course in every respect. It has been particularly pleasing for me, with an interest in seeing the application and good educational practice to school education. Learn a different approach that leads to better outcomes.', 'id'),
(4, '4.jpg', 'Rizki', 'Karyawan Kapal Pesiar', 'I want to let you know that I am very absolutely delighted with the course in every respect. It has been particularly pleasing for me, with an interest in seeing the application and good educational practice to school education. Learn a different approach that leads to better outcomes.', 'id'),
(5, '5.jpg', 'Rizki N', 'CEO Facebook', 'I want to let you know that I am very absolutely delighted with the course in every respect. It has been particularly pleasing for me, with an interest in seeing the application and good educational practice to school education. Learn a different approach that leads to better outcomes.', 'id'),
(6, '1.jpg', 'test eng', 'CEO', 'jhvkv igigiu g igig igi gi', 'en'),
(7, '4.jpg', 'saya', 'vjvjvjvj bb', 'iugiugig gui gig iu ggi i gogo', 'en'),
(8, '6.jpg', 'Kholidatul Hidayah, S.S', 'Manager', 'g 8i gsigie dgei gdieg id eigdg eigdieg di', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `nama`, `foto`, `jabatan`, `fb`, `ig`, `linkedin`) VALUES
(1, 'Tutor 1', '2.jpg', 'manager', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://id.linkedin.com/'),
(2, 'Tutor 2', '1.jpg', 'CEO', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://id.linkedin.com/'),
(3, 'Tutor 3', '4.jpg', 'CEO Instagram', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://id.linkedin.com/'),
(4, 'Tutor 4', '5.jpg', 'CEO Linkedin', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://id.linkedin.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `job_place`
--
ALTER TABLE `job_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `job_place`
--
ALTER TABLE `job_place`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_galeri` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
