-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2019 pada 05.53
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `biodata_id` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` varchar(10) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `moto` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `resume` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`biodata_id`, `name`, `sex`, `place`, `date`, `religion`, `moto`, `address`, `location`, `email`, `phone`, `resume`, `foto`, `perubahan`) VALUES
('5d49a3ea21', 'Dian Purwanto', 'Male', 'Tulungagung', '21-10-1991', 'Islam', 'Vocational Teacher and IT Project Manager', 'RT/RW 03/02 DS. Gombang Kec. Pakel', 'Malang, Jawa Timur, Indonesia', 'dianpw@ymail.com', '+6285736745916', '<p>I\'m competent and personable IT project manager with 4+ years experience maintaining and expanding cross-functional delivery teams and liaising with both executives and the technology team. introduced new AI and ML initiative which increased client demand by 250% and reduced project completion times by over 50%.</p>', '5d49a3ea21.jpg', '2019-09-26 13:33:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `education_id` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`education_id`, `nama`, `tahun`, `keterangan`, `perubahan`) VALUES
('5d5023bb56', 'S1 Pend. Teknik Informatika - Universitas Negeri Malang', '2010 - 2020', '<p>Organizing informatics engineering education with the aim of producing graduates in the field of informatics engineering teaching with qualifications of undergraduate education (S1) who are superior, professional, skilled, and sensitive to the preservation of the socio-cultural environment</p>', '2019-09-11 04:36:47'),
('5d502450c3', 'Training Asesor Kompetensi Profesi - LSP TIK Indonesia', '2018', '<p>LSP TIK Indonesia is an institution that has a license from BNSP (BNSP-LSP-018-ID) to carry out the process of proving that a professional is truly competent in the field of competence</p>', '2019-08-11 14:29:18'),
('5d50247e28', 'Teknik Mekanik Otomotif - SMKN 1 Bandung', '2007 - 2010', '<p>Vocational High School in major Light Vehicle Engineering</p>', '2019-08-11 14:29:08'),
('5d503093c6', 'SD Negeri 2 Gombang', '1998 - 2004', '<p>Elementary School</p>', '2019-08-11 15:18:02'),
('5d5030aa04', 'SMP Negeri 1 Bandung', '2004 - 2007', '<p>Junior High School</p>', '2019-08-11 15:18:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `experiencce_id` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`experiencce_id`, `nama`, `tahun`, `keterangan`, `perubahan`) VALUES
('5d503518d4', 'Assistant Lecturer - Universitas Negeri Malang', '2012 - 2013', '<p>Teaching assistant for Database</p>', '2019-08-11 15:36:23'),
('5d50353914', 'Teacher - SMKN 5 Malang', '2014 - Present', '<p>Teaches vocational high schools in TKJ, RPL, and Multimedia majors</p>', '2019-08-11 15:33:13'),
('5d50354f8d', 'CEO - RUMAHBUNGLON', '2015 - 2017', '<p>CEO and Founder software house Rumahbunglon.com</p>', '2019-08-11 15:33:35'),
('5d50356a30', 'CEO - MALIKI.ID', '2017 - Present', '<p>CEO and Founder software house MALIKI.ID</p>', '2019-08-11 15:34:02'),
('5d50358411', 'CEO - UMAKODING', '2018 - Present', '<p>CEO and Founder course programming UMAKODING</p>', '2019-08-11 15:34:28'),
('5d5035996d', 'Asesor Kompetensi Profesi - LSP TIK Indonesia', '2018 - Present', '<p>MET.000.007178 2018</p>', '2019-08-11 15:36:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `info_id` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `value` varchar(10) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`info_id`, `judul`, `icon`, `value`, `perubahan`) VALUES
('5d50391d14', 'PROJECT WORKING', 'icon-briefcase', '2', '2019-08-11 15:56:31'),
('5d5039caa9', 'PROJECT DONE', 'icon-check', '15', '2019-08-11 15:52:42'),
('5d5039ebad', 'AWARDS RECEIVED', 'icon-diamond', '10', '2019-08-11 15:53:15'),
('5d503a0673', 'HAPPY CLIENTS', 'icon-heart', '15', '2019-08-11 15:53:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `register_id` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `member_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `portofolio_id` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `katagori` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`portofolio_id`, `nama`, `katagori`, `link`, `foto`, `perubahan`) VALUES
('5d504106c2', 'Pejuangreceh', 'website', 'http://pejuangreceh.com/', '5d504106c2.jpg', '2019-08-11 16:34:09'),
('5d50418a41', 'POLMANBABEL', 'website', 'https://www.polman-babel.ac.id/', '5d50418a41.jpg', '2019-08-11 16:34:45'),
('5d50444b0f', 'Bromo', 'website', 'http://bromotenggersemeru.org/', '5d50444b0f.jpg', '2019-10-10 04:28:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id`, `nama`, `icon`, `keterangan`, `perubahan`) VALUES
(1, 'FULL STACK DEVELOPER', 'icon-grid', '<p>Build front-end and back-end website and application</p>', '2019-10-10 03:27:57'),
(2, 'GRAPHIC DESIGN', 'icon-layers', '<p>Web desain, Movie &amp; multimedia, Product identity, and Packaging</p>', '2019-10-10 03:28:46'),
(3, 'BUSINESS BRANDING', 'icon-briefcase', '<p>Build a business plan to meet the desired target company</p>', '2019-10-10 03:28:14'),
(4, 'CONSULTANCY', 'icon-bubbles', '<p>Providing advisory services in the area of IT expertise</p>', '2019-10-10 03:28:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id`, `nama`, `link`, `icon`, `perubahan`) VALUES
(1, 'Facebook', 'https://www.facebook.com/53N5451', 'facebook', '0000-00-00 00:00:00'),
(2, 'Twitter', 'https://twitter.com/dianpw6901', 'twitter', '0000-00-00 00:00:00'),
(3, 'Instagram', 'https://www.instagram.com/dianpw/', 'instagram', '0000-00-00 00:00:00'),
(4, 'linkedin', 'https://www.linkedin.com/in/dian-purwanto-1ab59362/', 'linkedin', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`biodata_id`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experiencce_id`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`register_id`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`portofolio_id`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
