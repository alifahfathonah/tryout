-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 03:33 AM
-- Server version: 10.1.19-MariaDB
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
-- Table structure for table `blog`
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
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `title`, `cover`, `isi`, `tanggal`, `oleh`) VALUES
(9, 'Kamu berpotensi lulus SBMPTN, Kalau punya 5 Ciri ini!', 'http://localhost/to/dst/userfiles/images/post_video-1150x647.jpg', '<p>\r\nHai para pejuang SBMPTN! Gimana nih kabar persiapan SBMPTN-nya? Apakah udah semakin mantap dengan TKPA? Atau jangan-jangan semangatnya lagi pada kendur nih? Atau malah ada yang masih belum mulai juga?! Hehehe..\r\n<br>\r\nUntuk menemani lo mempersiapkan diri buat SBMPTN dan tes masuk PTN lainnya, kami mau share beberapa hal menarik nih<br>\r\nPada tulisan ini, kami akan mencoba merangkum ciri atau sifat utama apa aja sih yang dimiliki seorang pejuang SBMPTN yang membuat mereka pantas meraih mimpinya\r\n<br>\r\n</p>\r\n<p> \r\nCIRI 1: Mereka Setia pada Mimpinya (Fokus, fokus, fokus!)\r\n</p>\r\n<p> \r\nCIRI 2: Mereka Berani Keluar dari Zona Nyaman\r\n</p>\r\n<p>\r\nCIRI 3: Mereka Gak Menghafal Tipe Soal atau Rumus, tapi Belajar Konsepnya!\r\n</p>\r\n<p>\r\nCIRI 4: Mereka Memanfaatkan Waktu Sebaik Mungkin\r\n</p>\r\n<p>CIRI 4: Mereka Tidak Cepat Puas dengan Nilai TO <br>\r\nSelalu berusaha menaikkan lagi dan lagi nilai TO nya dan belajar pembahasan konsep per soal. \r\n<BR>\r\nBelajar dimana?\r\n<br>\r\nYa, pasti di H!Campus dong!\r\n<br>\r\nHayuuuk buruan ikutan\r\n</p>', '2018-08-17 17:43:00', 'admin'),
(10, 'Beda jurusan Sistem Informasi, Sistem Komputer dan Teknik Informatika!Yuk Kupas Tuntas!', 'http://localhost/to/dst/userfiles/images/masonry_15-750x422.jpg', '<p>Kalau kamu tertarik buat masuk kejurusan Ilmu Komputer, Teknik Informatika, atau sejenisnya. Siap-siap deh buat ditodong pertanyaan seperti berikut. </p>\r\n\r\n<p>\r\n<br> “kak, kuliah di Ilmu Komputer itu ngapain sih? Jadi hacker ya?” <br>\r\n\r\n“Kak, bedanya Ilmu Komputer (UI) dengan Teknik Informatika (ITB) apa ya?” <br>\r\n\r\n“Ilmu Komputer dengan Sistem Informasi itu sama ngga? Kalo dengan Teknik Komputer, sama juga?” <br>\r\n\r\ndan sebagainya dan sebagainya… <br>\r\n</p>\r\n\r\n<p> Oke deh, biar kalian ga bingung,  mending kita langsung masuk aja ke pembahasan untuk menjawab pertanyaan-pertanyaan di atas seputar jurusan berbau komputer.\r\n</p>\r\n\r\n<p>\r\n<strong> Kuliah di Ilkom Itu Ngapain, sih? </strong>\r\n<br>\r\nIlmu Komputer atau Teknik Informatika identik dengan computer programming. Tapi, sebenarnya programming itu ngapain sih?\r\n<br>\r\nProgramming adalah cara gimana lo ngajarin hal yang paling bego sedunia (komputer) untuk melakukan apa yang lo mau. Ya, komputer yang lo lihat sangat canggih bisa ngapain aja, sebenarnya adalah sebuah perangkat yang punya otak dasar dan siap diisi untuk menjalankan sebuah fungsi yang lo harapkan.\r\n<br>\r\n<br>\r\nDari mulai hal yang sangat sederhana dan terkesan sepele, seperti menampilkan tulisan “Hello World” di layar komputer ketika kita meng-klik icon tertentu, menghitung luas segitiga dengan input angka alas dan tinggi, mengidentifikasi wajah dari foto/sidik jari pada KTP dengan mencocokkan data pada database pemerintah, sampai cara untuk memberikan komando tertentu pada robot yang mendarat di planet Mars dengan jarak 225,300,000 km dan delay time sampai 13 menit.\r\n<br>\r\n<br>\r\nNah, nanti di ajarin deh tuh komputer dari scratch. pecah fungsi yang lo harapkan komputer bisa jalankan jadi urutan langkah kecil-kecil. Misalnya, pada contoh program menghitung luas segitiga. Kamu ajarin dulu komputernya gimana cara menerima input angka alas dan tinggi dari user, lo tentu mesti ajarin juga rumus luas segitiga gimana, mengkalkulasikan angka yang dimasukkan user, sampai akhirnya lo ngajarin si komputer gimana menampilkan hasilnya ke layar.\r\n<br>\r\nMasalah sesederhana menghitung luas segitiga, lo bisa break jadi langkah-langkah yang terurut. Urutan langkah ini disebut dengan algoritma. Kemudian, lo terjemahkan algoritma itu dalam bentuk kode-kode dalam bahasa pemrograman (bahasa yang dimengerti komputer). C++, misalnya.\r\n<br>\r\n</p>\r\n<p>\r\nProgram studi Ilmu Komputer membekali mahasiswanya untuk memiliki keterampilan menyusun algoritma dan programming untuk mengembangkan sebuah program/aplikasi/software/perangkat lunak sistem. Dari program yang hanya bisa menjalankan satu fungsi hingga sebuah sistem besar dengan ratusan fungsi yang menghubungkan ribuan karyawan di suatu perusahaan.\r\n</p>\r\n<p>\r\n<strong> Terus kak, Apa Bedanya Teknik Informatika dengan Sistem Informasi (SI)? </strong>\r\n<br>\r\nLulusan Sistem Informasi diharapkan dapat menjembatani kerjaan orang “teknis” dengan klien atau user dari salah satu departemen di sebuah perusahaan. Misalnya, ada perusahaan klien yang ingin pasang sebuah sistem IT baru di organisasinya. Umumnya, klien itu ga tau persis mau dia apa atau tidak bisa mendefinisikan dengan baik apa kebutuhannya dari sebuah sistem (system requirement). Ranah kerja orang SI biasanya hadir untuk ngebaca kebutuhan klien. Untuk bisa memahami kebutuhan klien, anak SI butuh pengetahuan dari segi proses bisnis hingga manajemen resource atau sistem IT yang udah ada sebelumnya di perusahaan tersebut. Setelah tektok-tektokan dengan klien, orang SI akan menerjemahkannya ke bahasa teknis. Barulah system requirement ini direalisasikan oleh technical team (ranah kerja anak Ilkom) menjadi fitur-fitur pada sebuah software yang dipesen klien tadi.\r\n</p>\r\n<p>\r\nWalaupun fokus ke manajemen, bukan berarti anak SI ngga diajarin programming. Di prodi SI, kamu bakal diajarin juga dasar-dasar pemrograman pada semester-semester awal, tapi ga terlalu dalam. Sebagai pihak yang menjembatani user dengan technical team, orang SI perlu tau juga dong teknisnya seperti apa. Karena belajar programming, anak SI juga bakal dibekali beberapa matkul berbau matematika.\r\n</p>\r\n<p>\r\nSelama perkuliahan, anak SI dibekali mata kuliah yang khas SI banget, seperti Administrasi Bisnis, Manajemen, Customer Relationship Management, Manajemen Sumber Daya Manusia, Manajemen Proyek TI, Pengembangan dan Pemasaran Produk, E-Commerce, Komunikasi Bisnis dan Teknis, Perilaku Organisasi, Manajemen Pengetahuan, Manajemen Sistem Informasi.\r\n</p>\r\n<p> Kalo lo tertarik dengan dunia Ilkom/TI tapi ngga mau terlalu dalam mengulik programming, terus juga suka dengan bisnis dan manajemen, mungkin jurusan Sistem Informasi lebih cocok buat kamu.\r\n</p>\r\n<p>\r\n<strong>\r\nTerus bedanya sama sistem komputer/teknik komputer apa?\r\n</strong>\r\n</p>\r\n<p>\r\nJadi, anak Teknik Komputer/ Sistem komputer juga ngeprogram, tapi bukan pemrograman seperti anak Ilkom. Kalo anak Ilkom, ngoding, menghasilkan software aplikatif. Kalo anak Teknik Komputer, teknik ngodingnya itu lebih ke “bahasa” mesin. Seperti ngoding arduino, dll.\r\n</p>\r\n<p>\r\n<strong>\r\nGimana udah tertarik masuk jurusan berbau komputer ? \r\n</strong>\r\n</p>\r\n<p> Eittsss.. tapi jurusan berbau komputer, masuknya juga ngga semudah itu guys! Kamu harus mempersiapkan SBMPTN ataupun UM dengan baik!\r\n<br>\r\nKuylahh belajar bareng! Belajarnya di <strong> H!Campus aja! </strong>', '2018-08-17 18:46:00', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
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
-- Dumping data for table `nilai`
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
(21, 8, 5, 10, '', '1', ''),
(22, 9, 4, 0, '1', '', '2|3|4|5|6|7|8|9|10'),
(23, 9, 4, 10, '1|2|3|4|5|6|7|9|10', '8', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembahasan`
--

CREATE TABLE `pembahasan` (
  `id_pembahasan` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `link` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembahasan`
--

INSERT INTO `pembahasan` (`id_pembahasan`, `id_soal`, `link`, `isi`) VALUES
(1, 12, ' ', ' '),
(2, 13, ' bsbbsbs', '<p>sasasas</p>\r\n\r\n<p><img alt="" src="http://localhost/TO/dst/userfiles/files/694207.jpg" style="float:left; height:102px; width:200px" />bdjhudsyds SSSSSSSSSSSSSSSSSSSSSSSSSSSSSS SSSSSSSSS SSSSSSSSSS SSSSSSSSSSS SSSSSSSSSSSS SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS</p>\r\n'),
(3, 14, ' ', '<p>ssdddx</p>\r\n'),
(4, 15, 'dst/video/kent.mp4', '<p>dsdsds</p>\r\n'),
(5, 16, ' ', ' '),
(6, 17, ' ', ' '),
(7, 18, ' ', ' Jawaban adalah C, karena ....'),
(8, 19, ' ', ' '),
(9, 27, '', 'Poetra atau Poesat Tenaga Rakyat yang dipimpin oleh 4 serangkai dibubarkan Jepang karena dianggap sebagai sarana untuk menyebarkan paham kebangsaan pada rakyat Indonesia.'),
(10, 28, '', 'Dampak negatif yang terjadi selama masa pemerintahan Daendels adalah muncul kesewenang-wenangan tuan tanah swasta sebagai pihak yang mampu menyewa tanah terhadap rakyat sebagai pihak yang tidak mampu menyewa tanah.'),
(11, 29, '', 'Peningkatan gas rumah kaca di atmosfer bumi membuat radiasi dari bumi terpantul kembali ke bumi hingga memicu peningkatan suhu di permukaan bumi.'),
(12, 30, '', 'identifikasi perbedaan bangunan sekolah dan gedung kantor bisa dilakukan lewat interpretasi foto udara dengan unsur spasial yang meliputi bentuk dan pola.'),
(13, 31, '', 'P	Q\r\n100.000	50\r\n50.000	30\r\n \r\n\r\nE = PQ QP\r\n\r\n= 100.00050 2050.000\r\n\r\n= 0,8'),
(14, 32, '', 'Biaya yang tidak perlu dikeluarkan perusahaan saat sedang tidak berproduksi disebut sebagai biaya variabel.'),
(15, 33, '', '\r\nMobilitas sosial merupakan proses perpindahan kelas sosial dalam dimensi stratifikasi atau diferensiasi. Dalam kasus ini, mobilitas yang terjadi adalah mobilitas stratifikasi yakni vertikal turun karena kelas sosial berpindah turun jadi kelas sosial yang lebih rendah dari sebelumnya.');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
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
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ID_siswa`, `email`, `password`, `nama`, `tgl_lhr`, `sma`, `tlp`, `join`) VALUES
(1, 'admin_rsud@ahmad.com', '65ba841e01d6db7733e90a5b7f9e6f80', 'akbaralza', '2018-06-05', NULL, '32323232', '0000-00-00 00:00:00'),
(2, 'akbaralzaini@gmail.com', 'f039e5f60e85d10bf7b742e65ad931ca', 'akbar alzaini', '2018-06-08', 'sma 4 lahat', '08297287282', '0000-00-00 00:00:00'),
(5, 'alzain@gmail.com', '74b87337454200d4d33f80c4663dc5e5', 'alzaini', '2018-06-14', NULL, '3232323232', '2018-06-23 09:15:13'),
(6, 'alz@gm.com', '604654492e7d61bdd04c456f4b191222', 'alzz', '2018-07-03', NULL, '199191', '2018-07-05 05:20:36'),
(7, 'rizki.akbar1611@gmail.com', '9367c028d3e5aa999537d9533a5554a6', 'babar', '1996-11-16', NULL, '', '2018-08-01 09:40:00'),
(8, 'al@gmail.com', 'b0b93e272985500da71718134bea2cc7', 'akbar alzaini', '2019-09-03', 'lahat', '9098789798', '2019-09-26 00:00:00'),
(9, 'tisamonita11@gmail.com', '201ccea83c96bcef7649eddc7bac0dac', 'Tisa Monita', '1998-10-11', NULL, '081289041621', '2019-10-16 06:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
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
-- Dumping data for table `soal`
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
(16, '<p>snnsnsns</p>\r\n', '<p>sdsds</p>\r\n', '<p>sdsd</p>\r\n', '<p>dsdsd</p>\r\n', '<p>sdsds</p>\r\n', '<p>sdsds</p>\r\n', 'A', 2),
(17, 'Misalkan x, y, dan z menyatakan bilangan real yang memenuhi persamaan x + 2y + 3z = 10. Berapakah nilai x? Putuskan apakah pernyataan (1) dan (2) berikut cukup untuk menjawab pertanyaan tersebut. 1. z = 1 2. x + y = 5', 'Pernyataan (1) dan pernyataan (2) tidak cukup untuk menjawab pertanyaan.', 'Pernyataan (2) SAJA cukup untuk menjawab pertanyaan, tetapi pernyataan (1) SAJA tidak cukup.\r\n\r\n', 'Pernyataan (1) SAJA cukup untuk menjawab pertanyaan dan pernyataan (2)\r\n', 'DUA pernyataan BERSAMA-SAMA cukup untuk menjawab pertanyaan, tetapi SATU pernyataan SAJA tidak cukup.', 'Pernyataan (1) SAJA cukup untuk menjawab pertanyaan, tetapi pernyataan (2) SAJA tidak cukup.', 'A', 4),
(18, 'Tersedia lima kursi yang disusun berjajar dengan setiap kursi ditempati paling banyak satu orang. Manakah hubungan yang benar antara kuantitas P dan Q berikut berdasarkan informasi yang diberikan?. <br> P : Banyak susunan empat orang duduk pada kursi yang disediakan <br> Q : 24\r\n', 'P = Q.', 'Q > P.\r\n\r\n', 'P > Q.', 'Informasi yang diberikan tidak cukup untuk memutuskan salah satu dari tiga pilihan di atas.', 'Tidak ada yang memenuhi', 'C', 4),
(19, 'Bilangan berikut yang merupakan bilangan kuadrat dan sekaligus bilangan pangkat tiga adalah ….', '81', '100', '64', '8', '27', 'B', 4),
(20, 'Lima orang sahabat, yaitu Ronny, Ricky, Deli, Susi, dan Hana hendak membeli jus. Hanya tersedia 3 gelas untuk setiap jenis jus, yaitu mangga, sirsak, stroberi, jambu, nanas, dan alpukat. Ronny menyukai jus mangga, stroberi, dan jambu. Ricky menyukai jus sirsak, jambu, dan alpukat. Sementara itu, Deli tidak menyukai mangga, stroberi, dan alpukat. Susi dan Hana sama-sama menyukai mangga. Selain mangga, Hana juga menyukai jambu dan nanas, sedangkan Susi menyukai stroberi dan alpukat.\r\n<br>\r\nSalah satu dari lima orang sahabat itu harus  mengalah dalam memilih jus ....', 'alpukat', 'jambu', 'mangga', 'sirsak', 'strawberry', 'C', 4),
(21, 'Tidak ada hutan lindung yang mengalami kebakaran di Pulau A.\r\n<BR>\r\nBeberapa hutan lindung di Pulau A adalah kawasan wisata.\r\n<br>\r\nSimpulan yang paling tepat adalah ....', 'beberapa kawasan wisata tidak mengalami kebakaran', 'beberapa hutan lindung yang mengalami kebakaran adalah kawasan wisata', 'beberapa hutan lindung yang mengalami kebakaran bukan kawasan wisata', 'tidak ada hutan lindung di Pulau A yang merupakan kawasan wisata', 'tidak ada kawasan wisata yang mengalami kebakaran', 'B', 4),
(22, 'Delapan orang (A, B, C, D, E, F, G, dan H) sedang belajar bersama dengan menggunakan meja persegi panjang dan empat kursi yang saling berhadapan. E dan G duduk di kedua ujung meja pada sisi yang sama. C duduk berseberangan dengan A dan F. D duduk di ujung meja, tepat di hadapan E. H duduk tepat di sebelah B.\r\n<BR>\r\nJika G dan H tepat berhadapan, yang duduk di sebelah D adalah ....', 'A', 'B', 'C', 'E', 'F', 'E', 4),
(23, 'Toko X mengadakan undian berhadiah. Terdapat lima hadiah utama dengan nomor undian 1 sampai 5. Lima orang pelanggan, yaitu Ano, Bono, Lino, Seno, dan Tono mendapat kesempatan mengambil nomor undian. Seno mendapat nomor tepat sesudah Ano, tetapi sebelum Tono. Lino mendapat nomor terkecil. Sementara itu, Bono mendapat nomor ganjil.\r\n<BR>\r\nPelanggan yang mendapat nomor paling besar adalah ....', 'Ano', 'BONO', 'Lino', 'Seno', 'Tono', 'c', 4),
(24, '\r\n(1) Pada musim kering tahun ini, petani di Desa Sukamaju gagal panen.\r\n<br>\r\n(2) Warga Desa Sukamaju mencari air ke desa lain.\r\n<br>\r\nManakah di bawah ini yang menggambarkan hubungan di antara kedua pernyataan?', 'pernyataan 1 adalah penyebab dan pernyataan 2 adalah akibat', 'pernyataan 2 adalah penyebab dan pernyataan 1 adalah akibat', 'pernyataan 1 dan 2 adalah penyebab, namun tidak saling berhubungan', 'pernyataan 1 dan 2 adalah akibat dari dua penyebab yang tidak saling berhubungan', 'pernyataan 1 dan 2 adalah akibat dari suatu penyebab yang sama', 'D', 4),
(25, '(1) Agen perumahan memberi penawaran khusus untuk pembelian rumah.\r\n<BR>\r\n(2) Pemerintah membuat kebijakan ganti rugi bagi warga yang terkena dampak pembangunan.\r\n<BR>\r\nManakah di bawah ini yang menggambarkan hubungan di antara kedua pernyataan?', 'pernyataan 1 adalah penyebab dan pernyataan 2 adalah akibat', 'pernyataan 2 adalah penyebab dan pernyataan 1 adalah akibat', 'pernyataan 1 dan 2 adalah penyebab, namun tidak saling berhubungan', 'pernyataan 1 dan 2 adalah akibat dari dua penyebab yang tidak saling berhubungan', 'Pernyataan 1 dan 2 tidak saling berhubungan', 'B', 4),
(26, '4, 5, 11, 13, 25, 29, 46, … ', '49', '51', '52', '53', '54', 'D', 4),
(27, 'Salah satu faktor yang mendorong pemerintah pendudukan Jepang membubarkan Poetra dan mendirikan Jawa Hokokai adalah…', 'Organisasi Poetra dianggap sebagai lambang seluruh aliran pergerakan nasional', 'Para pemimpin bangsa Indonesia memanfaatkan Poetra untuk memunculkan rasa kebangsaan', 'Para pemimpin Poetra tidak menjalankan tugasnya', 'Para pemimpin Poetra tidak mau melakukan Seikerei', 'Para pemimpin Poetra menjalin kerja sama dengan kelompok Islam', 'B', 6),
(28, 'Dampak negatif sistem sewa tanah pada masa pemerintahan Gubernur Jenderal H.W. Daendels (1808-1811) adalah…', 'Munculnya kesewenang-wenangan tuan tanah swasta terhadap rakyat', 'Dikuasainya perekonomian Indonesia oleh Belanda dan Cina', 'Ditariknya kembali Daendels dan digantikan Jansen', 'Dikuasainya sebagian besar tanah di Indonesia oleh swasta Belanda dan Cina', 'Terjadinya perlawanan besar-besaran terhadap Daendels oleh rakyat Indonesia', 'A', 6),
(29, 'Peningkatan gas rumah kaca di atmosfer bumi berpengaruh terhadap peningkatan suhu udara permukaan bumi, sebab…', 'Memantulkan radiasi matahari', 'Meningkatkan radiasi matahari', 'menghambat radiasi bumi', 'Meningkatkan radiasi bumi', 'menghambat radiasi matahari', 'C', 6),
(30, 'Identifikasi perbedaan bangunan sekolah dan gedung kantor dapat dilakukan melalui interpretasi foto udara dengan menggunakan unsur…', 'Bayangan dan bentuk', 'Ukuran dan rona', 'Asosiasi dan rona', 'Ukuran dan bayangan\r\n', 'Bentuk dan pola', 'E', 6),
(31, 'Ketika harga per unit suatu barang Rp100.000, jumlah barang yang ditawarkan 50 unit; dan ketika harga per unit turun menjadi Rp50.000, jumlah barang yang ditawarkan menjadi 30 unit. Nilai koefisien elastisitas penawaran barang tersebut bersifat…\r\n\r\n\r\n\r\n', 'Elastis unitari', 'Elastis', 'Inelastis', 'Elastis sempurna\r\n', 'Inelastis sempurna', 'B', 6),
(32, 'Jenis biaya yang tidak perlu dikeluarkan oleh perusahaan saat sedang tidak berproduksi adalah…', 'Biaya total\r\n', 'Biaya variabel\r\n', 'Biaya peluang\r\n', 'Biaya tetap\r\n', 'Biaya marginal', 'B', 6),
(33, 'Seorang direktur dihentikan dari jabatannya dan dijadikan staf biasa karena terbukti menyelewengkan sejumlah dana perusahaan. Direktur tersebut mengalami mobilitas…', 'Horizontal\r\n', 'Vertikal turun\r\n', 'Vertikal naik\r\n', 'Social climbing\r\n', 'Geografis', 'B', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tes`
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
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`id_tes`, `nama_tes`, `tipe`, `waktu_upload`, `start`, `end`) VALUES
(4, 'TES TPA 1', 1, '2018-07-29 09:08:51', '2018-07-23 23:01:00', '2018-07-31 01:02:00'),
(5, 'TES SAINTEK 1', 2, '2018-07-29 12:43:11', '2018-07-09 02:22:00', '2018-07-10 14:02:00'),
(6, 'TES SOSHUM 1', 3, '2019-09-26 06:46:15', '2019-09-04 00:00:00', '2019-09-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `voucer`
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
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `ID_nilai` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pembahasan`
--
ALTER TABLE `pembahasan`
  MODIFY `id_pembahasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `ID_siswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `ID_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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
