-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Sep 2019 pada 06.00
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tryout`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title` text NOT NULL,
  `cover` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `oleh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `title`, `cover`, `isi`, `tanggal`, `oleh`) VALUES
(9, 'Our Video Training for Microsoft products and technologies', 'http://localhost/to/dst/userfiles/images/post_video-1150x647.jpg', '<p>Sed dapibus massa vitae ipsum aliquam sollicitudin. Aenean turpis leo, hendrerit quis bibendum sed, scelerisque nec sem. Praesent convallis lacinia pulvinar. Duis id sem urna. Ut et feugiat ligula. Vivamus tincidunt diam a lacus imperdiet tempus et quis sem. Nulla pharetra ut quam nec mattis. Cras viverra pulvinar felis, sed pharetra arcu sollicitudin sit amet. Aenean eu neque eu lectus rhoncus tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>\r\n\r\n<p>Integer est metus, auctor placerat ligula sit amet, molestie faucibus velit. Curabitur pretium nunc quis vehicula tristique. Nulla diam arcu, feugiat id pharetra sed, porta at ipsum. Vivamus condimentum odio vitae justo sollicitudin, vel efficitur lorem mattis. Vivamus vel diam efficitur, tempus risus sed, maximus velit. Nullam in ipsum elit. Phasellus porta dolor a commodo hendrerit. Nam eget congue eros, quis porta ex. Mauris tortor sem, consectetur ut congue at, imperdiet dictum libero. Aliquam erat volutpat. Nulla ipsum ligula, posuere at lectus quis, laoreet viverra lacus. Aenean eget rhoncus nunc.</p>\r\n\r\n<p>Etiam nec egestas lorem, et sollicitudin ligula. Nulla nec ligula diam. Praesent condimentum nisl nec lectus placerat malesuada. Mauris sem ipsum, hendrerit in commodo sed, dignissim nec velit. Cras lectus eros, molestie sit amet est vitae, malesuada posuere turpis. Sed vitae nibh vitae elit consequat tempor. Praesent sit amet rutrum tortor. In sed neque dui.</p>\r\n\r\n<p>Nulla eu purus ac lorem pharetra ultrices. Sed commodo commodo justo, ac porttitor ligula scelerisque eget. Nulla hendrerit turpis sed lorem dictum dictum. Mauris at eleifend urna, egestas varius risus. Sed augue sem, blandit nec lectus mattis, eleifend lobortis urna. Vestibulum porttitor tortor iaculis, venenatis metus et, porta diam. Vestibulum dignissim lorem ac tellus laoreet efficitur quis sit amet lorem. Sed at orci eget diam posuere ornare ut et ante. Donec scelerisque blandit malesuada.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis mattis tortor, id sagittis lorem. Morbi tristique, quam vel semper varius, orci quam lacinia enim, in pretium metus dolor a justo. Maecenas interdum eros purus, a rhoncus nibh sollicitudin vel. Nulla ac ultricies elit. Nunc dignissim est at quam consequat, nec elementum velit tempor. Nulla facilisi. Etiam eu nunc vitae urna egestas condimentum vitae non ipsum. Mauris id eros vestibulum velit ultricies interdum. Morbi et varius nibh. Proin pulvinar sapien ut felis tristique, non commodo neque aliquet. Maecenas malesuada tempus metus, consequat luctus odio cursus vel.</p>\r\n', '2018-08-17 17:43:00', 'admin'),
(10, 'Use of a geographic information system (GIS) for targeting radon screening programs in South Dakota', 'http://localhost/to/dst/userfiles/images/masonry_15-750x422.jpg', '<p>Because 222Rn is a progeny of 238U, the relative abundance of uranium may be used to predict the areas that have the potential for high indoor radon concentration and therefore determine the best areas to conduct future surveys. Geographic Information System (GIS) mapping software was used to construct maps of South Dakota that included levels of uranium concentra<img alt="" src="http://localhost/TO/dst/userfiles/files/masonry_08-400x268.jpg" style="float:left; height:134px; margin:10px; width:200px" />tions in soil and stream water and uranium deposits. Maps of existing populations and the types of land were also generated. Existing data about average indoor radon levels by county taken from a databank were included for consideration. Although the soil and stream data and existing recorded average indoor radon levels<br />\r\nwere sparse, it was determined that the most likely locations of elevated indoor radon would be in the northwest and southwest corners of the state. Indoor radon levels were only available for 9 out of 66 counties in South Dakota. This sparcity of data precluded a study of correlation of radon to geological features, but further motivates the need for more testing in the state. Only actual measurements should be used to determine levels of indoor radon because of the strong roles home construction and localized geology play in radon concentration. However, the data visualization method demonstrated here is potentially useful for directing resources relating to radon screening campaigns.<br />\r\nKEYWORDS: Geographic Information System, uranium concentration, indoor radon, high-risk areas, mapping</p>\r\n', '2018-08-17 18:46:00', 'admin'),
(11, 'sdsds', 'http://localhost/to/dst/userfiles/images/', '<p>sdsds</p>\r\n', '2018-08-18 16:39:00', 'admin'),
(12, 'dsfsd', 'http://localhost/to/dst/userfiles/images/john_snow_full.jpg', '<p>cxvsdzvsdvsdvsd</p>\r\n', '2018-08-29 21:07:00', 'admin'),
(13, 'gajhgys ya', 'http://localhost/to/dst/userfiles/images/videojohn_snow_full.jpg', '<p>aghdvgsayvtdyas</p>\r\n', '2018-09-23 07:24:00', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `ID_nilai` int(6) NOT NULL,
  `Id_siswa` int(6) NOT NULL,
  `id_tes` int(10) NOT NULL,
  `skor` float NOT NULL,
  `salah` text NOT NULL,
  `benar` text NOT NULL,
  `kosong` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`ID_nilai`, `Id_siswa`, `id_tes`, `skor`, `salah`, `benar`, `kosong`) VALUES
(1, 2, 0, 10, '1|2|3|4|6', '5', ''),
(11, 2, 1, 0, '1', '', ''),
(12, 2, 1, 0, '1|2|6|8', '', '3|4|5|7'),
(13, 2, 1, 0, '1|2|3|6|8', '', '4|5|7'),
(14, 2, 4, 10, '2|3|4', '1', ''),
(15, 2, 5, 10, '', '1', ''),
(16, 7, 4, 10, '', '1', '2|3|4'),
(17, 7, 4, 10, '4', '1', '2|3'),
(18, 7, 5, 0, '1', '', ''),
(19, 8, 5, 10, '', '1', ''),
(20, 8, 5, 0, '1', '', ''),
(21, 8, 5, 10, '', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembahasan`
--

CREATE TABLE `pembahasan` (
  `id_pembahasan` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `link` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembahasan`
--

INSERT INTO `pembahasan` (`id_pembahasan`, `id_soal`, `link`, `isi`) VALUES
(1, 12, ' ', ' '),
(2, 13, ' bsbbsbs', '<p>sasasas</p>\r\n\r\n<p><img alt="" src="http://localhost/TO/dst/userfiles/files/694207.jpg" style="float:left; height:102px; width:200px" />bdjhudsyds SSSSSSSSSSSSSSSSSSSSSSSSSSSSSS SSSSSSSSS SSSSSSSSSS SSSSSSSSSSS SSSSSSSSSSSS SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS</p>\r\n'),
(3, 14, ' ', '<p>ssdddx</p>\r\n'),
(4, 15, 'dst/video/kent.mp4', '<p>dsdsds</p>\r\n'),
(5, 16, ' ', ' '),
(6, 17, ' ', ' '),
(7, 18, ' ', ' '),
(8, 19, ' ', ' ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `ID_siswa` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `sma` varchar(30) DEFAULT NULL,
  `tlp` varchar(15) NOT NULL,
  `join` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`ID_siswa`, `email`, `password`, `nama`, `tgl_lhr`, `sma`, `tlp`, `join`) VALUES
(1, 'admin_rsud@ahmad.com', '65ba841e01d6db7733e90a5b7f9e6f80', 'akbaralza', '2018-06-05', NULL, '32323232', '0000-00-00 00:00:00'),
(2, 'akbaralzaini@gmail.com', 'f039e5f60e85d10bf7b742e65ad931ca', 'akbar alzaini', '2018-06-08', 'sma 4 lahat', '08297287282', '0000-00-00 00:00:00'),
(5, 'alzain@gmail.com', '74b87337454200d4d33f80c4663dc5e5', 'alzaini', '2018-06-14', NULL, '3232323232', '2018-06-23 09:15:13'),
(6, 'alz@gm.com', '604654492e7d61bdd04c456f4b191222', 'alzz', '2018-07-03', NULL, '199191', '2018-07-05 05:20:36'),
(7, 'rizki.akbar1611@gmail.com', '9367c028d3e5aa999537d9533a5554a6', 'babar', '1996-11-16', NULL, '', '2018-08-01 09:40:00'),
(8, 'al@gmail.com', 'b0b93e272985500da71718134bea2cc7', 'akbar alzaini', '2019-09-03', 'lahat', '9098789798', '2019-09-26 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `ID_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL,
  `kunci` varchar(2) NOT NULL,
  `id_tes` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`ID_soal`, `soal`, `a`, `b`, `c`, `d`, `e`, `kunci`, `id_tes`) VALUES
(2, 'fddsdd', 'BJSBJS', 'jdjsds', 'sdjaoi', 'asjdioa', 'sanhdjhb', 'E', 1),
(4, 'iaaaa', 'sss', 'cxc', 'dsds', 'www', 'dsds', 'E', 1),
(5, 'dsdsd', 'ds', '3e', '3ewre', 'rer', '3r', 'B', 1),
(6, 'balalala', 'dc', 'cc', 'xcx', 'cxc', 'sfd', 'B', 1),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ' proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ' proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ' proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ' proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ' proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'A', 0),
(8, 'sdsds', 'dzcx', 'cxc', 'xcx', 'cx', 'dsds', 'A', 1),
(9, 's', 'q2', 's', 'sdjaoi', 'd', 'd', 'A', 1),
(10, 'scs', 'sss', 'jdjsds', 'dsds', 'dsd', 'dsd', 'A', 1),
(12, 'sds', 'dsd', 'dsd', 'dsds', 'sds', 'sds', 'A', 2),
(15, 'asas', 'dsds', 'jdjsds', 'e2wdsds', 'sds', 'sds', 'A', 5),
(16, '<p>snnsnsns</p>\r\n', '<p>sdsds</p>\r\n', '<p>sdsd</p>\r\n', '<p>dsdsd</p>\r\n', '<p>sdsds</p>\r\n', '<p>sdsds</p>\r\n', 'A', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes`
--

CREATE TABLE `tes` (
  `id_tes` int(5) NOT NULL,
  `nama_tes` varchar(50) NOT NULL,
  `tipe` int(1) NOT NULL,
  `waktu_upload` datetime NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tes`
--

INSERT INTO `tes` (`id_tes`, `nama_tes`, `tipe`, `waktu_upload`, `start`, `end`) VALUES
(4, 'TES TPA 1', 1, '2018-07-29 09:08:51', '2018-07-23 23:01:00', '2018-07-31 01:02:00'),
(5, 'TES SAINTEK 1', 2, '2018-07-29 12:43:11', '2018-07-09 02:22:00', '2018-07-10 14:02:00'),
(6, 'bbaba', 1, '2019-09-26 06:46:15', '2019-09-04 00:00:00', '2019-09-03 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `voucer`
--

CREATE TABLE `voucer` (
  `id_voucer` int(10) NOT NULL,
  `kd_voucer` varchar(30) NOT NULL,
  `id_tes` int(5) NOT NULL,
  `id_siswa` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`ID_nilai`);

--
-- Indexes for table `pembahasan`
--
ALTER TABLE `pembahasan`
  ADD PRIMARY KEY (`id_pembahasan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID_siswa`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`ID_soal`);

--
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id_tes`);

--
-- Indexes for table `voucer`
--
ALTER TABLE `voucer`
  ADD PRIMARY KEY (`id_voucer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `ID_nilai` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pembahasan`
--
ALTER TABLE `pembahasan`
  MODIFY `id_pembahasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `ID_siswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `ID_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `id_tes` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `voucer`
--
ALTER TABLE `voucer`
  MODIFY `id_voucer` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
