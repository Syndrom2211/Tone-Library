-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2015 at 03:17 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog_artikel`
--

CREATE TABLE IF NOT EXISTS `tb_blog_artikel` (
  `id_blog_a` int(5) NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(150) NOT NULL,
  `tgl_artikel` varchar(10) NOT NULL,
  `kategori_artikel` varchar(35) NOT NULL,
  `isi_artikel` text NOT NULL,
  `penulis_artikel` varchar(35) NOT NULL,
  PRIMARY KEY (`id_blog_a`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_blog_artikel`
--

INSERT INTO `tb_blog_artikel` (`id_blog_a`, `judul_artikel`, `tgl_artikel`, `kategori_artikel`, `isi_artikel`, `penulis_artikel`) VALUES
(6, 'Cara membuat lagu di FL Studio', '09/02/2015', 'Music', '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="http://perwalian.unikom.ac.id/images/unikom.gif" alt="" width="150" height="152" /></p>\r\n<p>&nbsp;</p>\r\n<p>Bagaimana, sudah bisa membuat lagu? Setelah belajar teknis pembuatan lagu Part 1 dan Part 2 tutorial FL Studio Pemula, pasti bisa dong... Sesuai jadwal, sekarang waktunya masuk ke tutorial Part 3, yang baru gabung boleh baca dulu artikel tutorial pertama di sini.<br /><br />Sekarang kita akan belajar menambahkan efek (FX) pada instrumen di projek lagu yang kita buat. Sebelum masuk ke materi saya ingin jelaskan secara singkat apa yang dimaksud FX dan apa saja kegunaannya.<br /><br />Membuat Musik Jadi Lebih Indah<br /><br />Musik akan terdengar lebih menarik dengan balutan efek, terbukti hampir tidak ada lagu komersial yang mengabaikan penggunaan efek. Efek dapat membentuk atmosfer lagu yang dapat mempengaruhi perasaan pendengar, efek juga dapat membantu menyampaikan perasaan sang pencipta kepada pendengarnya.<br /><br />Penggunaan efek boleh diterapkan pada berbagai instrumen sesuai kebutuhan. Sebagai contoh, suara vokal dalam rekaman band &lsquo;Andra &amp; the Backbone&rsquo; dan &lsquo;Alexa&rsquo; yang unik jika dibanding dengan rekaman suara vokal artis lain pada umumnya, dalam hal ini efek juga digunakan untuk membuat karakter seorang musisi dan lagunya menjadi lebih kuat.</p>', 'Firdam'),
(7, 'Iman kepada Muhammad, Sekaligus Isa ', '09/05/2015', 'Music', '<p><strong>Keuntungan Ganda</strong></p>\r\n<p>Selama empat tahun itu, Waruba mempersilahkan aku mendalami ajaran Islam dan membandingkannya sendiri dengan apa yang aku baca dalam Alkitab (Bible). Akhirnya aku temukan, sesungguhnya Yesus bukan tuhan tetapi hanyalah hamba dan utusan Allah SWT. Ternyata bila umat Islam benar-benar mengamalkan Al Quran berarti umat Islamlah yang mengamalkan ajaran kasih sayang dan umat Islamlah pengikut Yesus dalam arti yang sesungguhnya.</p>\r\n<p>Aku berkesimpulan bahwa dengan memeluk agama Islam, aku mendapat keuntungan ganda, yaitu menjadi pengikut Nabi Muhammad, sekaligus tidak meninggalkan Yesus. Sebab Yesus adalah Nabi Isa yang sangat diimani dan dihormati oleh setiap Muslim. Sementara jika aku tetap dalam Katolik, ada kerugian ganda, yaitu tidak beriman kepada Nabi Muhammad sebagai nabi terakhir dan setiap hari aku berarti menghianati ajaran Yesus. Karena ternyata sebagian besar ajaran Kristen baik Katolik maupun Protestan bukan ajaran Yesus, tapi ajaran Paulus.</p>\r\n<p>Dari pergaulan dengan keluarga sakinah itulah awal mula aku mendapatkan hidayah dari Allah SWT karena dapat mengenal Islam lebih dekat dan berdiskusi dengan orang yang tepat sehingga aku meyakini bahwa hanya Islamlah sebagai jalan hidup yang benar. Dalam Islam aku menemukan kedamaian, ketenangan dan cinta kasih antar sesama. Artinya ajaran &ldquo;kasih&rdquo; yang sesungguhnya justru diajarkan dalam agama Islam dan aku merasakan itu dari sosok keluarga Waruba bukan Pasturku dulu. Akhirnya, pada 1980, saat usiaku 31 tahun aku memutuskan untuk mengucapkan dua kalimat syahadat dengan dibimbing&nbsp; oleh Imam Masjid Al Muqarabin Muhammad Hafidz di Kelapa Dua Cimanggis Depok. Syahadat itu aku ucapkan karena aku yakin memang harus masuk Islam bila ingin menjadi seorang pengikut Yesus sejati. [] <strong>mediaumat.com</strong></p>', 'Firdam'),
(8, 'Kenapa Harus dekati pengusaha', '09/01/2015', 'Music', '<p>Keberadaan penguasa boneka sudah jelas. Ketika ada capres belum kampanye Pilpres kemudian belum apa-apa sudah mendekati pihak asing seperti James Riadi, Sopyan Wanandi itu termasuk capres boneka. Sudah terang-terangan</p>\r\n<p>Untuk apa mereka membangun negeri kita harus mendekati pengusaha? Harusnya mereka membangun sistem lalu penguasa itu harus ikut dengan sistem. Karena yang harus dibenahi di negeri ini siapapun pemimpin, seribu Jokowi atau seratus Prabowo tidak akan mampu memperbaiki.</p>\r\n<p>Di antara calon presiden Jokowi-lah yang terburuk. Jika ARB terburuknya ada persoalan pajak dan kasus Lapindo belum selesai hingga sekarang. Jokowi lebih terburuk karena telah terang-terangan menggandeng asing, seperti Dubes Amerika, Dubes Vatikan, padahal mereka Dubes yang menajajah Indonesia dengan mengambil sumber daya alamnya. Kalau saya lihat kejahatan Prabowo adalah kesalahan pemerintah atas perintah negara waktu zamannya bukan karena individu.</p>\r\n<p>Jokowi hanya boneka Megawati dan Megawati boneka siapa? Ingat Megawati jual Indosat, lepas Sipadan dan Ligitan, jual tengker minyak Pertamina. Jadi semua capres sama saja dan dikontrol oleh asing. [] joy/fatih</p>', 'Firdam'),
(9, 'Menyesatkan', '10/02/2015', 'Music', '<p>Menurut saya, pernyataan presiden boneka menunjukkan bahwa Prabowo tidak paham realitas. Maksud saya begini, mana mungkin Jokowi itu presiden boneka. Jika aktor politik bisa muncul dalam sirkulasi elete, dan dihitung gerak-geriknya maka dia bisa ditarik ke gelandang.</p>\r\n<p>Politik itu keras. Untuk sampai ke sana Anda harus siap dan atau Anda akan kebunuh duluan. Kalau Jokowi tidak mampu maka bisa mati dia dari kemarin, coba pikir.</p>\r\n<p>Jadi menurut saya pernyataan itu hanya sebuah usaha dari Prabowo untuk mendelegimasi lawan politiknya yang sekarang punya kekuatan politik yang sangat <em>power full</em>. Saya melihat Prabowo salah memahami antara relasi Megawati dan Jokowi. Karena mandat ada ditangan Mega, maka jokowi tidak bisa. Misalnya kalau saya jadi presiden tergantung putusan Megawati, itu bukan berarti saya antek Mega!</p>\r\n<p>Dua-duanya memiliki bargaining posisi yang kuat. Prabowo sendiri konglomerat yang usahanya banyak cacatnya, tambangnya kacau, pabrik kertasnya mau dipailitkan. Bagaimana dia berkoar-koar nasionalisme segala macam? Wacana boneka-boneka itu tidak konstruktif bagi kita, ini sangat menyesatkan.[]</p>', 'Firdam'),
(10, 'Cina perantauan berkuasa', '09/03/2015', 'Music', '<p><strong>Mashadi</strong><strong>, Mantan Pendiri Partai Keadilan</strong></p>\r\n<p>Secara de facto, kelompok Cina perantau sudah menguasai Indonesia. Sebanyak 80 persen ekonomi Indonesia telah mereka kuasai. Kemudian, kalau kita lihat penguasa-penguasa Indonesia mulai dari presiden, gubernur hingga tingkat bupati banyak mereka dipengaruhi kelompok konglomerat Cina. Sebab untuk maju dalam pemilihan saja mereka butuh modal yang sangat besar. Mau tidak mau mereka melakukan kolaborasi dengan konglomerat Cina itu.</p>\r\n<p>Kalau selama ini sudah menguasai kedaulatan ekonomi, sasaran mereka selanjutnya adalah menguasai kedaulatan politik. Seperti yang dilakukan Hari Tanoe dengan mengambil Hanura kemudian ada bos dari Lion Rusdi Kirana yang mengambil alih PKB.</p>\r\n<p>Jokowi hanya sekadar boneka atau kendaraan-kendaraan untuk digunakan bagi kepentingan Cina. Bahayanya untuk umat Islam, mereka akan merusak prinsip-prinsip Islam yang terkait masalah akidah dan syariat, dan akan terus dieleminir.</p>', 'Firdam'),
(11, 'Neo Liberal Lanjut', '09/16/2015', 'Music', '<p><span style="color: #ff0000;"><strong>Ichsanuddin Noorsy, </strong><strong>P</strong><strong>engamat </strong><strong>K</strong><strong>ebijakan </strong><strong>P</strong><strong>ublik</strong></span></p>\r\n<p>Arah ekonomi parpol pemenang pemilu ya tidak ke mana-mana, tetap melanjutkan neoliberal dan ikut arus globalisasi. (Iklan nasi tumpeng serba impor-nya PDI P) itu kan hanya kemasan. Bisa saja kemasan itu berbaju nasionalis tetapi isi tetap terbawa arus globalisasi.</p>\r\n<p>Penyebabnya, sistem yang diberlakukan di Indonesia adalah sistem yang berpacu dengan globalisasi. Maksudnya, Indonesia sudah 99 persen terbuka penuh. Ibarat berpakaian, semua sektor sudah sangat telanjang hanya beberapa saja yang masih berbikini.</p>\r\n<p>Parpol pemenang dan para capres yang muncul, walau pun menjanjikan perubahan, saya tidak melihat potensi perubahan itu karena ada catatan lagi buat saya. Yaitu, ada beberapa perjanjian utang luar negeri yang dibuat oleh pemerintah rentang waktu 2009-2014 itu berisi tentang kewajiban Indonesia melanjutkan program globalisasi.</p>\r\n<p>Pertanyaanya, bisa tidak capres yang muncul mengubah itu? Saya bilang calon presiden ya, karena pada parpol yang ada saya melihat tidak bisa melakukan itu. Jadi kalau capres yang ada pun tidak bisa mengubah itu, ya berarti sekadar menyinambungkan globalisasi.</p>\r\n<p>Berani tidak Jokowi, ARB atau Prabowo bernegosiasi dengan tiga pihak yang mencengkeram Indonesia? Pihak pertama adalah lembaga multilateral seperti Bank Dunia, IMF, ADB, UEDB dan WTO. Pihak kedua adalah negara-negara bilateral yang selama ini mendikte Indonesia seperti Amerika, Cina dan lainnya. Pihak ketiga adalah kelompok-kelompok negara regional sebagai kepanjangan tangan negara adidaya seperti Masyarakat Ekonomi ASEAN yang akan berlaku 2016.[]</p>', 'Firdam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog_komentar`
--

CREATE TABLE IF NOT EXISTS `tb_blog_komentar` (
  `id_blog_k` int(5) NOT NULL AUTO_INCREMENT,
  `id_blog_a` int(5) NOT NULL,
  `nama_komentar` varchar(35) NOT NULL,
  `email_komentar` varchar(35) NOT NULL,
  `pesan_komentar` text NOT NULL,
  PRIMARY KEY (`id_blog_k`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `tb_blog_komentar`
--

INSERT INTO `tb_blog_komentar` (`id_blog_k`, `id_blog_a`, `nama_komentar`, `email_komentar`, `pesan_komentar`) VALUES
(126, 7, 'tes', 'dsadasd@gmail.com', 'yrtytrytry');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog_pengurus`
--

CREATE TABLE IF NOT EXISTS `tb_blog_pengurus` (
  `id_blog_p` int(5) NOT NULL AUTO_INCREMENT,
  `nama_pengurus` varchar(35) NOT NULL,
  `deskripsi_pengurus` varchar(50) NOT NULL,
  `gambar_pengurus` varchar(35) NOT NULL,
  PRIMARY KEY (`id_blog_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_blog_pengurus`
--

INSERT INTO `tb_blog_pengurus` (`id_blog_p`, `nama_pengurus`, `deskripsi_pengurus`, `gambar_pengurus`) VALUES
(1, 'Firdamdam Sasmita', 'Semua kuserahkan kepada Allah SWT', 'user-avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog_tags`
--

CREATE TABLE IF NOT EXISTS `tb_blog_tags` (
  `id_blog_t` int(5) NOT NULL AUTO_INCREMENT,
  `nama_tags` varchar(35) NOT NULL,
  PRIMARY KEY (`id_blog_t`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tb_blog_tags`
--

INSERT INTO `tb_blog_tags` (`id_blog_t`, `nama_tags`) VALUES
(1, 'Music'),
(2, 'Ringtone'),
(5, 'Electronic'),
(33, 'Note'),
(34, 'Relax'),
(35, 'Dubstep'),
(36, 'Dance');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog_umum`
--

CREATE TABLE IF NOT EXISTS `tb_blog_umum` (
  `id_blog_u` int(5) NOT NULL AUTO_INCREMENT,
  `judul_blog` varchar(35) NOT NULL,
  `deskripsi_blog` varchar(35) NOT NULL,
  `logo_blog` varchar(35) NOT NULL,
  PRIMARY KEY (`id_blog_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_blog_umum`
--

INSERT INTO `tb_blog_umum` (`id_blog_u`, `judul_blog`, `deskripsi_blog`, `logo_blog`) VALUES
(1, 'Blog', 'Kumpulan artikel blog tone library', 'logo-dark11.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_deskripsi`
--

CREATE TABLE IF NOT EXISTS `tb_deskripsi` (
  `id_deskripsi` int(4) NOT NULL AUTO_INCREMENT,
  `deskripsi_1` varchar(35) NOT NULL,
  `deskripsi_2` varchar(35) NOT NULL,
  `deskripsi_3` varchar(35) NOT NULL,
  PRIMARY KEY (`id_deskripsi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_deskripsi`
--

INSERT INTO `tb_deskripsi` (`id_deskripsi`, `deskripsi_1`, `deskripsi_2`, `deskripsi_3`) VALUES
(1, 'Electronic', 'Ringtone', 'House');

-- --------------------------------------------------------

--
-- Table structure for table `tb_infokontak`
--

CREATE TABLE IF NOT EXISTS `tb_infokontak` (
  `id_infokontak` int(5) NOT NULL AUTO_INCREMENT,
  `telepon_infokontak` varchar(50) NOT NULL,
  `alamat_infokontak` varchar(50) NOT NULL,
  `email_infokontak` varchar(50) NOT NULL,
  PRIMARY KEY (`id_infokontak`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_infokontak`
--

INSERT INTO `tb_infokontak` (`id_infokontak`, `telepon_infokontak`, `alamat_infokontak`, `email_infokontak`) VALUES
(1, '+62 857 981 60154', 'Kp.Ciherang, Banjaran No.45 Bandung', 'bangdam2211@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lib_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_lib_kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(35) NOT NULL,
  `gambar_kategori` varchar(35) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_lib_kategori`
--

INSERT INTO `tb_lib_kategori` (`id_kategori`, `nama_kategori`, `gambar_kategori`) VALUES
(1, 'House Music', 'house1.jpg'),
(2, 'Ringtone', 'ringtone.jpg'),
(3, 'Electronic Music', 'electro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lib_music`
--

CREATE TABLE IF NOT EXISTS `tb_lib_music` (
  `id_music` int(5) NOT NULL AUTO_INCREMENT,
  `artist_music` varchar(50) NOT NULL,
  `judul_music` varchar(50) NOT NULL,
  `album_music` varchar(50) NOT NULL,
  `link_music` varchar(50) NOT NULL,
  `kategori_music` varchar(50) NOT NULL,
  `cover_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_music`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_lib_music`
--

INSERT INTO `tb_lib_music` (`id_music`, `artist_music`, `judul_music`, `album_music`, `link_music`, `kategori_music`, `cover_kategori`) VALUES
(4, 'BangDam', 'Queen', 'Resistant', 'https://soundcloud.com/firdammitulz/bangdam-queen', 'House Music', 'house1.jpg'),
(5, 'BangDam', 'Saba', 'Resistant', 'https://soundcloud.com/firdammitulz/bangdam-saba', 'House Music', 'house1.jpg'),
(6, 'BangDam', 'Sun', 'Resistant', 'https://soundcloud.com/firdammitulz/bangdam-sun', 'House Music', 'house1.jpg'),
(7, 'BangDam', 'Miracle', 'Resistant', 'https://soundcloud.com/firdammitulz/bangdam-miracl', 'House Music', 'house1.jpg'),
(8, 'BangDam', 'Victory', 'Resistant', 'https://soundcloud.com/firdammitulz/bangdam-victor', 'House Music', 'house1.jpg'),
(9, 'BangDam', 'Fact', 'Resistant', 'https://soundcloud.com/firdammitulz/bangdam-fact', 'House Music', 'house1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_software`
--

CREATE TABLE IF NOT EXISTS `tb_software` (
  `id_software` int(5) NOT NULL AUTO_INCREMENT,
  `judul_software` varchar(35) NOT NULL,
  `penjelasan_software` text NOT NULL,
  `nama_software` varchar(35) NOT NULL,
  `deskripsi_software1` text NOT NULL,
  `deskripsi_software2` text NOT NULL,
  `gambar_software` varchar(35) NOT NULL,
  `nama_id` varchar(35) NOT NULL,
  PRIMARY KEY (`id_software`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_software`
--

INSERT INTO `tb_software` (`id_software`, `judul_software`, `penjelasan_software`, `nama_software`, `deskripsi_software1`, `deskripsi_software2`, `gambar_software`, `nama_id`) VALUES
(1, 'Apa itu DAW ?', 'DAW adalah sebuah sistem rekaman berbasis computer yang di rancang untuk menggantikan studio rekaman tradisional.', 'FL Studio', 'FL Studio 10 adalah Program atau Software yang dibuat untuk semua kalangan yang digunakan untuk mebuat lagu, mengedit lagu, Memixing Lagu dan merekam lagu, banyak yang mencari cara membuat studio rekaman, yang imbasnya menuju ke suatu permasalahan yaitu dana atau modal.', 'FL Studio 10 adalah Program atau Software yang dibuat untuk semua kalangan yang digunakan untuk mebuat lagu, mengedit lagu, Memixing Lagu dan merekam lagu, banyak yang mencari cara membuat studio rekaman, yang imbasnya menuju ke suatu permasalahan yaitu dana atau modal.', 'flstudio.png', 'flstudio'),
(2, 'Apa itu DAW ?', 'DAW adalah sebuah sistem rekaman berbasis computer yang di rancang untuk menggantikan studio rekaman tradisional.', 'Cubase', 'Cubase itu sebuah program komputer untuk produksi musik / rekaman. Sebuah program yang bisa merekam, memproduksi dan mencampur suara untuk membuat produksi musik untuk distribusi di CD atau internet. Sebagian besar fasilitas di studio rekaman sekarang menggunakan Cubase atau produk serupa lainnya.', 'Cubase adalah serangkaian MIDI, musik digital audio sequencer dan aplikasi audio editing digital (umumnya dikenal sebagai DAW - Digital Audio Workstation), dibuat oleh perusahaan Jerman, Steinberg. Versi pertama, yang berjalan pada komputer Atari ST, dirilis pada tahun 1989.', 'cubase.png', 'cubase'),
(3, 'Apa itu DAW ?', 'DAW adalah sebuah sistem rekaman berbasis computer yang di rancang untuk menggantikan studio rekaman tradisional.', 'Ableton', 'Ableton adalah sebuah perusahaan dari Jerman, yang merupakan produsen software DAW (Digital Audio Workstation) Ableton Live dan Hardware pendukungnya, Ableton Push. Perusahaan ini didirikan sejak tahun 1999 oleh Gerhard Behles dan Robert Henke dari Monolake beserta Bernd Roggendorf.', 'Ableton Live adalah software yang merupakan DAW dengan fitur interaktif yang sangat mendukung keperluan DJ atau Electronic music. Namun Live juga bisa digunakan untuk berbagai jenis musik lainnya. Hanya saja, fungsinya yang flexible, kreatif dan innovative, cocok untuk mereka yang senang berexperimen.\\r\\n', 'ableton.png', 'ableton'),
(4, 'Apa itu DAW ?', 'DAW adalah sebuah sistem rekaman berbasis computer yang di rancang untuk menggantikan studio rekaman tradisional.', 'Pro Tools', 'ProTools adalah digital audio workstation (DAW), yang dapat berfungsi seperti Media Composer Twin, pertama dibuat oleh Avid dan juga merupakan standar industri untuk editing audio, rekaman, scoring film dan post production, setelah sebuah film selesai diedit di Media Composer, film ini lalu diekspor ke Pro-Tools untuk proses post production seperti dialog, efek suara, Foly, scoring, ADR (Dubbing) dan soundtrack.', 'ProTools digunakan di semua rumah produksi dan studio rekaman besar dari Amerika Serikat sampai Asia dan negara-negara lain. Pro-tools adalah software standar industri dan juga pilihan para profesional di banyak negara.\\r\\n', 'pro-tools.png', 'pro-tools'),
(5, 'Apa itu DAW ?', 'DAW adalah sebuah sistem rekaman berbasis computer yang di rancang untuk menggantikan studio rekaman tradisional. ', 'Reaper', 'Reaper merupakan media atau software yang berbasis pada DAW atau Digital Audio Workstation. Software keluaran cockos ini dapat memenuhi kebutuhan bro, sister dalam menyelesaikan tugas atau pembuatan suatu project lagu?', 'Sedangkan Penggunaannya sendiri Reaper dapat katakan baik untuk menghandle atau menangani MUSIC PROCUCTION atau Memproduksi suatu musik yang berformat WAVE, MP3, AIFF, Midi dan lainnya, dan juga mampu bekerja sebagai host atau patchby untuk sebuah VSTI atau VIRTUAL INSTRUMENT.\\r\\n', 'reaper.png', 'reaper');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang`
--

CREATE TABLE IF NOT EXISTS `tb_tentang` (
  `id_ttg` int(5) NOT NULL AUTO_INCREMENT,
  `nama_ttg` varchar(35) NOT NULL,
  `deskripsi_ttg` varchar(35) NOT NULL,
  `motto_ttg` varchar(35) NOT NULL,
  `gambar_ttg` varchar(35) NOT NULL,
  `link_fb_ttg` varchar(40) NOT NULL,
  `link_twitter_ttg` varchar(40) NOT NULL,
  PRIMARY KEY (`id_ttg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_tentang`
--

INSERT INTO `tb_tentang` (`id_ttg`, `nama_ttg`, `deskripsi_ttg`, `motto_ttg`, `gambar_ttg`, `link_fb_ttg`, `link_twitter_ttg`) VALUES
(1, 'Firdamdam Sasmita', 'Web Engineer', 'Aku adalah aku', 'team-1.jpg', 'http://facebook.com/Ravnui.Embassy.us', 'http://twitter.com/Syndrom2211'),
(2, 'Firdamdam Sasmita Lagi', 'Beat Maker', 'Aku adalah aku', 'team-2.jpg', 'http://facebook.com/Ravnui.Embassy.us', 'http://twitter.com/Syndrom2211'),
(3, 'Dan Firdamdam Sasmita Lagi', 'Developer', 'Aku adalah aku', 'team-3.jpg', 'http://facebook.com/Ravnui.Embassy.us', 'http://twitter.com/Syndrom2211');

-- --------------------------------------------------------

--
-- Table structure for table `tb_website`
--

CREATE TABLE IF NOT EXISTS `tb_website` (
  `id_web` int(5) NOT NULL AUTO_INCREMENT,
  `judul_web` varchar(35) NOT NULL,
  `logo_web` varchar(35) NOT NULL,
  `bg_web` varchar(35) NOT NULL,
  PRIMARY KEY (`id_web`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_website`
--

INSERT INTO `tb_website` (`id_web`, `judul_web`, `logo_web`, `bg_web`) VALUES
(1, 'Tone Library', 'picture11.png', 'picture21.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
