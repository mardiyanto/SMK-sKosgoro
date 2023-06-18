-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2023 pada 04.42
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smkkosgoro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(5) NOT NULL,
  `tema` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_agenda` text COLLATE latin1_general_ci NOT NULL,
  `tempat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pengirim` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_mulai` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `tgl_selesai` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `jam` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tema`, `isi_agenda`, `tempat`, `pengirim`, `tgl_mulai`, `tgl_selesai`, `tgl_posting`, `jam`) VALUES
(43, 'PRAMUKA', 'kegiatan pramuka harian', 'sekolah', 'admin', '12-09-2014', '12-09-2014', '', '10:00'),
(45, 'Gerakan seribu buku', '<p>Gerakang membaca dan untuk meningkatkan minat baca buku siswa</p>\r\n', 'Aula ', 'admin', '02/07/2017', '02/02/2017', '31/05/2017', '08:00-selesai'),
(46, 'Evaluasi Program Pelaksanaan KBM & Pembuatan Program', '<p>Evaluasi Program Pelaksanaan KBM &amp; Pembuatan Program</p>\r\n', 'Ruang Rapat', 'kepala sekolah', '02/08/2017', '02/08/2017', '31/05/2017', '08:00-selesai'),
(47, 'Lomba Antarkelas', '<p>lomba antar kelas untuk meningkatkan minat olahraga siswa</p>\r\n', 'Lapangan sepak bola', 'kepala sekolah', '03/02/2017', '03/04/2017', '31/05/2017', '08:00-selesai'),
(48, 'Buka bersama ', '<p>buka bersama antara siswa dan guru untuk menjalin silahturahmi</p>\r\n', 'Halaman sekolah', 'kepala sekolah', '05/31/2017', '05/31/2017', '31/05/2017', '17:00-selesai'),
(49, 'Latihan DrumBand', 'Latihan DrumBand Dilaksanakan Setiap Hari Sabtu\r\n', 'SMK Kosgoro Penawartama ', 'admin', '2017-02-04', '2017-02-04', '2009-01-31', '11.00 s/d 14.00'),
(50, 'Pelatihan Tari ', 'pelatihan tari di SMK Kosgoro Penawartama  di Laksanakan Setiap Hari Jumat', 'lapangan SMK Kosgoro Penawartama ', 'admin', '2017-02-03', '2017-02-03', '2009-10-26', '13.00 s/d Seles'),
(51, 'Sosialisasi Kesehatan', 'Menjelaskan tentang bahayanya narkoba dan HIV bagi remaja', 'Aula SMK Kosgoro Penawartama ', 'admin', '2017-02-13', '2017-02-13', '2010-01-15', '09.00 s/d 16.00'),
(52, 'Upacara', 'Melaksanakan Upacara Bendera Rutin Setiap Hari Senin', 'Halaman SMK Kosgoro Penawartama ', 'Admin', '2017-02-06', '2017-02-06', '2015-08-20', '07.00 s/d 08.00'),
(53, 'Kemerdekaan RI', 'Melaksanakan Lomba Tumpeng antar kelas untuk merayakan 17 Agustus 1945', 'SMK Kosgoro Penawartama ', 'Admin', '2015-08-18', '2015-08-18', '2015-08-20', '07.00 s/d 15.00'),
(54, 'Majlis Dhuha', '<p>Kegiatan ini bertujuan untuk menumbuhkan kemandirian, kepercayaan diri peserta didik dan Melatih kemampuan public speaking</p>\r\n\r\n<p>Kegiatan dilaksanakan dari siswa oleh siswa</p>\r\n\r\n<p>Agenda majlis Dhuha : Pembukaan, Tilawah /Murojaah Hafalan, Kultum, Pengumuman Sekolah, Doa Belajar, Penutup, Sholat Dhuha</p>\r\n', 'MASJID SMK', 'ADMIN', '06/13/2017', '06/13/2017', '18/06/2017', '08-SELESAI'),
(55, 'Mentoring Agama Islam', '<p>Pembinaan keislaman dalam kelompok-kelompok kecil yang dibimbing seorang mentor (Murobbi)</p>\r\n', 'MASJID MA', 'ADMIN', '06/15/2017', '06/15/2017', '18/06/2017', '08-SELESAI'),
(56, 'Bimbingan Sholat', '<p>Kegiatan yang bertujuan untuk memberikan wawasan tentang tata cara berwudhu dan sholat sesuai dengan sunnah Rasulullah saw.</p>\r\n', 'MASJID SMK', 'ADMIN', '06/01/2017', '06/30/2017', '18/06/2017', 'SETIAP HARI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(5) NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `url`, `gambar`) VALUES
(15, 'http://', 'contohiklan.jpg'),
(16, 'http://', 'ilove_indonesia.jpg'),
(20, 'http://id.yahoo.com/', '22012013124624.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_kat` int(3) DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `jam` varchar(9) NOT NULL,
  `isi` text NOT NULL,
  `dilihat` int(5) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kat`, `judul`, `tanggal`, `jam`, `isi`, `dilihat`, `gambar`) VALUES
(277, 43, 'Mahasiswi Jurusan Pendidikan Guru Madrasah Ibtidai', '17/07/2020', '05:34 AM', '<p><span style=\"color:rgb(68, 68, 68); font-family:opensans,sans-serif; font-size:16px\">Metode belajar saya active learning, yaitu anak akan lebih aktif dan juga diajarkan untuk menghafal juz 30 dan penulisan bahasa Arab yang baik.Metode belajar saya active learning, yaitu anak akan lebih aktif dan juga diajarkan untuk menghafal juz 30 dan penulisan bahasa Arab yang baik.Metode belajar saya active learning, yaitu anak akan lebih aktif dan juga diajarkan untuk menghafal juz 30 dan penulisan bahasa Arab yang baik.Metode belajar saya active learning, yaitu anak akan lebih aktif dan juga diajarkan untuk menghafal juz 30 dan penulisan bahasa Arab yang baik.</span></p>\r\n', 2, '17072020053410.jpg'),
(276, 44, 'UNESCO: Dampak Penutupan Sekolah Akibat COVID-19 ', '24/03/2020', '12:47 PM', '<div class=\"article-content-body__item-page \" style=\"box-sizing: border-box; font-size: 15px; line-height: 23px; color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif;\">\r\n<div class=\"article-content-body__item-content\" style=\"box-sizing: border-box;\">\r\n<p>Upaya pencegahan penyebaran infeksi Virus Corona penyebab&nbsp;<a href=\"https://www.liputan6.com/health/read/4194381/arti-pasien-suspect-dalam-pengawasan-dan-pemantauan-terkait-covid-19\" rel=\"nofollow\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(255, 51, 0); text-decoration-line: none;\">COVID-19</a>&nbsp;tidak hanya berdampak di bidang kesehatan dan ekonomi global. Pendidikan anak-anak pun ikut terganggu.</p>\r\n\r\n<p>United Nations Educational, Scientific and Cultural Organization (UNESCO) mencatat,&nbsp;<a href=\"https://www.liputan6.com/health/read/4194402/jangan-keliru-penyakit-covid-19-penyebabnya-virus-sars-cov-2\" rel=\"nofollow\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(255, 51, 0); text-decoration-line: none;\">COVID-19</a>&nbsp;berdampak pada pendidikan sekitar 290,5 juta pelajar di seluruh dunia.</p>\r\n\r\n<p>Direktur Jenderal UNESCO Audrey Azoulay mengatakan, anak-anak dan remaja yang kurang beruntung adalah mereka yang cenderung paling terdampak dengan adanya penutupan sekolah.</p>\r\n\r\n<p>&quot;Meskipun penutupan sekolah sementara sebagai akibat dari masalah kesehatan dan krisis lain bukan hal yang baru, sayangnya, skala global dan kecepatan gangguan pendidikan saat ini tidak tertandingi dan jika diperpanjang, dapat mengancam hak atas pendidikan,&quot; kata Azoulay seperti dikutip dari laman resmi&nbsp;<em>unesco.org</em>&nbsp;pada Jumat (6/3/2020).</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"article-content-body__item-page\" style=\"box-sizing: border-box; font-size: 15px; line-height: 23px; color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif;\">\r\n<h2>Kerugian Penutupan Sekolah</h2>\r\n\r\n<div class=\"article-content-body__item-media\" style=\"box-sizing: border-box;\">\r\n<div class=\"read-page--photo-gallery--item__content js-gallery-content\" style=\"box-sizing: border-box; overflow: hidden; position: relative; border-radius: 8px; background-color: rgb(221, 221, 221);\"><a class=\"read-page--photo-gallery--item__link\" href=\"https://www.liputan6.com/health/read/4195275/unesco-penutupan-sekolah-akibat-covid-19-berdampak-pada-290-juta-pelajar-di-dunia#\" style=\"box-sizing: border-box; background: 0px 0px; color: rgb(255, 51, 0); text-decoration-line: none; display: block;\"><img alt=\"Sekolah di Seattle Tutup Sementara Akibat Virus Corona\" class=\"lazyloaded read-page--photo-gallery--item__picture-lazyload\" src=\"https://cdn1-production-images-kly.akamaized.net/5QexcjgNyHnZVz57z1wMyO6D7Cg=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3062989/original/036062100_1582865344-20200227-Sekolah-di-Seattle-Tutup-Sementara-Akibat-Covid-19-AP-5.jpg\" style=\"border:0px; box-sizing:border-box; height:360px; vertical-align:middle; width:640px\" /></a>\r\n\r\n<div class=\"read-page--photo-gallery--item__social-share js-social-share\" style=\"box-sizing: border-box; opacity: 0; position: absolute; top: 0px; right: 0px; width: 40px; background: rgba(0, 0, 0, 0.6);\">&nbsp;</div>\r\n</div>\r\n\r\n<p><span style=\"color:rgb(109, 108, 108); font-family:acuminpro\">Sekolah Menengah Bothell ditutup pada hari itu di Bothell, Washington, Kamis (27/2/2020). Sekolah menengah di pinggiran kota Seattle ditutup setelah anggota keluarga seorang staf sekolah tersebut dikarantina karena menunjukkan gejala tertular virus corona. (AP/Elaine Thompson)</span></p>\r\n</div>\r\n\r\n<div class=\"article-content-body__item-content\" style=\"box-sizing: border-box; position: relative; bottom: 12px;\">\r\n<p>UNESCO mencatat, hingga 4 Maret, 22 negara telah mengumumkan penutupan sekolah sementara demi mencegah penyebaran COVID-19. Sebelumnya, hanya Tiongkok yang menerapkan kebijakan tersebut.</p>\r\n\r\n<p>Mereka mengungkapkan sudah ada sembilan negara yang menerapkan penutupan sekolah secara lokal untuk mencegah penyebarab virus corona. Apabila ini diperluas menjadi kebijakan nasional, 180 juta anak dan remaja pelajar lain akan terdampak.</p>\r\n\r\n<p>UNESCO menyatakan bahwa meski bersifat sementara, penutupan sekolah berdampak pada berkurangnya waktu pengajaran dan bisa berdampak pada prestasi. Selain itu, kerugian lain yang akan muncul adalah rasa tidak nyaman pada keluarga serta turunnya produktivitas ekonomi karena orangtua harus mengurus anak sekaligus bekerja.</p>\r\n\r\n<p>Maka dari itu, UNESCO mendukung implementasi program pembelajaran jarak jauh dalam skala besar serta merekomendasikan aplikasi dan platform pendidikan yang terguna serta dapat digunakan sekolah dan guru untuk menjangkau peserta didik dari jarak jauh.</p>\r\n</div>\r\n</div>\r\n', 3, '24032020124643.jpg'),
(271, 37, ' Pramuka di Sekolah Madrasah Aliyah Mathlaul Anwar', '23/03/2020', '07:17 PM', '<p>Dalam suatu sekolah diperlukan suatu situasi yang memungkinkan siswa mendapat kesempatan mengembangkan diri dengan program dan kegiatan yang bersifat non formal. Salah satu bentuknya dapat diwujudkan dalam bentuk kegiatan pramuka sekolah yang diselenggarakan di luar jam belajar. Dengan demikian, kegiatan pramuka memungkinkan sekolah membantu siswa menggunakan dan mengisi waktu senggangnya secara berdaya dan berhasil guna bagi pertumbuhan dan perkembangan masing-masing.</p>\r\n\r\n<p>Dengan demikian kegiatan pramuka merupakan salah satu bentuk pendidikan non formal yang keanggotaannnya bersifat sukarela. Untuk itu kepala sekolah dan guru perlu melakukan usaha dalam menyadarkan dan mendorong siswa agar bersedia menjadi anggota pramuka disekolahnya. Untuk mewujudkan kegiatan pramuka secara kontinu dan berdaya guna,setiap kepala sekolah perlu melakukan kegiatan pengendalian, antra lain:</p>\r\n\r\n<p>1)&nbsp;&nbsp; Menunjuk dan mengangkat guru sebagai pembina pramuka yang bertanggungjawab kepada kepala sekolah.</p>\r\n\r\n<p>2)&nbsp;&nbsp; Mengusahakan agar parapembina pramuka mendapat penataran atau Kursus Mahir Dasar (KMD) dan Kursus Mahir Lanjutan (KML).</p>\r\n\r\n<p>3)&nbsp;&nbsp; Melakukan koordinasi dengan kwartir daerah pramuka atau kwartir cabang untuk membentuk Gugus Depan (Gudep) di sekolah.</p>\r\n\r\n<p>4)&nbsp;&nbsp; Ikut serta sebagai Ketua Majelis Pembimbing Gugus Depan (Kamabigus) dan tidak segan-segan untuk berpakaian pramuka.</p>\r\n\r\n<p>5)&nbsp;&nbsp; Membantu mengadakan alat kelengkapan gudep dan bahkan alat kelengkapan pramuka secara perseorangan melalui kerja sama dengan koperasi sekolah.</p>\r\n\r\n<p>6)&nbsp;&nbsp; Menyediakan diri untuk mendiskusikan program pramuka dan secara berkala mengontrol pelaksanaannya.</p>\r\n\r\n<p>7)&nbsp;&nbsp; Mendorong agar terwujudkerja sama dengan gugus depan dari sekolah lain.</p>\r\n\r\n<p>Perhatian dan kesediaan kepala sekolah untuk ikut serta dalam kegiatan pramuka sekolah sangat besar pengaruhnya pada kelangsungan gugus depan yang sudah dibentuk. Kepala sekolah harus berusaha agar pelaksanaan pramuka di sekolahnya tidak sekedar sebagai kegiatan musiman,yang sekali waktu muncul dan untuk jangka waktu yang lama tenggelam. Namun kepala sekolah sedapat mungkin mengusahakan dan memrogramkan pramuka menjadi kegiatan yang bersifat kontinu dan berkesinambungan.</p>\r\n', 1, '23032020071628.jpg'),
(272, 38, '7 TIPS MENJADI PELAJAR SUKSES DAN BERPRESTASI', '24/03/2020', '12:14 PM', '<p>1. Memahami tujuan kita belajar untuk apa<br />\r\nPertama-tama, tanyakanlah pada dirimu sendiri. Tujuanmu belajar untuk apa? Kalau kamu sudah paham dengan tujuanmu, selanjutnya tinggal merancang strategi untuk menyukseskan tujuan tersebut. Contoh: tujuan saya belajar adalah untuk lulus ujian tes kuliah kedokteran! Kalau targetnya adalah kuliah kedokteran, belajarnya tentu gak boleh main-main dong ya!</p>\r\n\r\n<p>2. Mengatur jadwal sehari-hari<br />\r\nNah, agar waktu kita gak habis buat main-main doang, penting untuk mengatur jadwalmu sehari-hari. Seorang pelajar yang baik mampu membagi-bagi waktu antara belajar, membantu orang tua dan bermain. Setelah kamu mempunyai jadwal, berusahalah untuk patuh dengan jadwal itu agar kita menjadi seorang yang disiplin.</p>\r\n\r\n<p>3. Gunakan kesempatan dengan tepat<br />\r\nKesempatan tidak akan datang dua kali, oleh karena itu, ketika kamu mendapatkan kesempatan, jangan pernah lewatkan kesempatan itu. Gunakan kesempatan yang datang padamu dengan tepat. Ketika guru menerangkan pelajaran, itu kesempatanmu untuk memperhatikan sebaik-baiknya. Ketika ada ulangan harian atau ujian, itu kesempatanmu untuk mendapat nilai yang tinggi. Jika ada perlombaan, itu kesempatanmu untuk menguji kemampuan bersaing. Pokoknya, jangan pernah lewatkan kesempatan yang datang.</p>\r\n\r\n<p>4. Jadilah pelajar yang aktif, bukan pasif<br />\r\nBuat kamu yang suka duduk di pojokan, tidak masalah sih. Tapi kalau sudah duduk di pojokan, tidak jadi siswa yang aktif juga, itu baru masalah. Aktif di sini adalah gemar berdiskusi tentang keilmuan dengan teman, tidak malu bertanya jika tidak mengerti, rajin mengunjungi perpustakaan untuk menambah ilmu dan lainnya.</p>\r\n\r\n<p>5. Pupuk bakat sosialmu dengan kegiatan ekstakurikuler<br />\r\nKesuksesan tidak hanya ditentukan oleh nilai akademis lho, tapi juga nilai sosial. Secara, manusia adalah makhluk sosial, kita pasti membutuhkan orang lain. Cara yang paling gampang untuk memupuk bakat sosialmu adalah ikut dalam ekskul atau kegiatan pemuda. Yakinlah, bakat sosial ini sangat kamu butuhkan baik hari ini maupun di masa akan datang.</p>\r\n\r\n<p>6. Cari hobi yang positif dan peliharalah<br />\r\nHobi kamu apa? Hobi yang positif dapat membantu kamu suskses di masa depan. Percayalah. Jangan salah, dengan hobi yang terpelihara seseorang bisa mencapai prestasi dan menghasilkan uang. Misalnya menulis, olahraga, bisnis dan lainnya. Selain itu dengan memiliki hobi kamu mempunyai cara untuk sejenak istirahat dari rutinitas sebagai seorang pelajar.</p>\r\n\r\n<p>7. Manfaatkan semua media yang ada<br />\r\nTips terakhir adalah memanfaatkan semua media yang ada. Ya, zaman sekarang ini sangat banyak sekali media yang bisa kita gunakan untuk belajar, mencari informasi dan menyalurkan kreatifitas kita. Media elektronik, internet dan sebagai macam. Kamu bisa gunakan itu semua untuk membantumu menjadi pelajar yang sukses dan berprestasi.</p>\r\n', 2, '24032020121417.jpg'),
(273, 38, 'CARA MUDAH MENJADI SISWA BERPRESTASI ', '24/03/2020', '12:22 PM', '<p><span style=\"font-family:verdana,geneva,sans-serif; font-size:14px\">Banyak dari kita berkeinginan untuk menjadi seorang siswa berprestasi, baik dalam hal akademik maupun non akademik, untuk sekedar membanggakan orang tua kita yang membiyayai sekolah, tetapi memeiliki kendala dalam melakukan dan memwujudkannya, sebenarnya artikel ini adalah inspirasi yang saya tulis dari teman sekelas saya diamana dia adalah seorang siswa yang berprestasi unggul di kelas dalam hal pelajaran dan dia sangat cerdas, dia juga berhasil memenangkan beberapa lomba bergengsi. Sebenarnya menjadi siswa yang berprestasi itu gampang-gampang susah dan agak sedikit dipaksakan karena wajar di usia-usia seperti kita cenderung keinginan untuk bermainannya itu masih tinggi,&nbsp;Dalam menjadi seorang yang berprestasi banyak hal-hal yang harus diperhatikan dan dilakukan terutama adalah faktor dalam diri kita sendiri, karena kita lah yang mempunyai kengininan untuk maju atau tidak. Berikut adalah caranya :</span><br />\r\n<strong>1.&nbsp;Niat</strong><br />\r\n<span style=\"font-family:verdana,geneva,sans-serif; font-size:14px\">Memang hal awal yang harus dilakkukan adalah niat, berusahalah untuk niat dan selalu antusias dalam mendengarkan pelajaran dan mengerjakan tugas yang diberikan oleh guru, karena hal ini adalah modal awal anda untuk menjadi seorang siswa berprestasi.</span><br />\r\n<strong>2&nbsp;Aktif</strong><br />\r\n<span style=\"font-family:verdana,geneva,sans-serif; font-size:14px\">Bukan hal yang luar biasa jika dia adalah seorang siswa berprestasi dia terlihat aktif dalam pelajaran dan tidak malu bertanya, maka dari itu mulai saat ini aktiflah dalam pelajaran ataupun bentuk forum-forum belajar lainnya.</span><br />\r\n<strong>3.&nbsp;Kritis</strong><br />\r\n<span style=\"font-family:verdana,geneva,sans-serif; font-size:14px\">Berfikir kritis dan merasa kurang puas adalah hal yang sangat diperlukan, dengan menerapkan sifat kritis ini anda dapat merasakan kurang dalam kegiatan belajar sehingga anda tergugah untuk terus beajar.</span><br />\r\n<strong>4.&nbsp;Belajar</strong><br />\r\n<span style=\"font-family:verdana,geneva,sans-serif; font-size:14px\">Belajar memang dilakukan oleh semua orang tetapi terkadang tidak menghasilakan prestasi alias belum dikatakan dapat berprestasi. Ada cara yang dilakukan dalam belajar yaitu usahakan jangan paksa diri anda untuk belajar tetapi anggap belajar sebagai hobi dan kebutuhan, dengan belajar yang tanpa paksaan materi yang anda pelajari akan anda serap dan pahami sangat mudah.</span><br />\r\n<strong>5.&nbsp;Kerjakan Tugas</strong><br />\r\n<span style=\"font-family:verdana,geneva,sans-serif; font-size:14px\">Setiap tugas yang diberikan oleh guru kerjakanlah dengan baik agar mendapat nilai maksimal karena hal tersebut akan membuat diri anda menonjol di mata guru itu dan peluang untuk berprestasi akan semakin besar untuk anda.</span><br />\r\n<strong>6.&nbsp;Percaya Diri</strong><br />\r\n<span style=\"font-family:verdana,geneva,sans-serif; font-size:14px\">Percaya diri adalah salah satu sifat yang baik dan harus dimiliki anda karena diri anda yang tidak mudah dipengaruhi oleh teman, pada saat ulangan tidak akan pernah menyontek teman karena pada saat anda menyontek teman anda akan merasa malas belajar dan salalu bergantung pada teman.</span><br />\r\n<strong>7.&nbsp;Ikut Ekstrakulikuler</strong><br />\r\n<span style=\"font-family:verdana,geneva,sans-serif; font-size:14px\">Dalam mengikuti ekstrakulikuler anda akan di didiki mandiri, displin dan bagaimana cara bersosialisasi dengan orang lain disana juga anda dapat mengembangkan bakat anda dan tak menuntut kemungkinan anda dapat berprestasi bukan lewat akedemik tetapi lewat non akedemik seperti ekstrakulikuler.</span><br />\r\n<strong>8.&nbsp;Dekat Dengan Semua Guru</strong><br />\r\n<span style=\"font-family:verdana,geneva,sans-serif; font-size:14px\">Sering ngobrol dan sharing tentang pelajaran dengan guru akan membuat anda semakin unggul dalam belajar dan anda akan menonjol di mata guru tersebut di dalam kelas, dan tak menutup kemungkinan peluang prestasi muncul karena diri guru tersebut yang menawarkan anda untuk ikut lomba.</span><br />\r\n<strong>9.&nbsp;Sholat &amp; Do&rsquo;a</strong><br />\r\n<span style=\"font-family:verdana,geneva,sans-serif; font-size:14px\">Penutup dari semua penutup inti dari semua inti yang anda kerjakan sebelumnya yang terpenting adalah do&rsquo;a kepada tuhan karena semua rizki datang dari Tuhan oleh karena itu jangan pernah lupa untuk terus selalu berdo&rsquo;a kepadanya dalam bentuk ibadah yang taat pasti nantinya anda akan menjadi seorang siswa yang berprestasi.</span></p>\r\n', 1, '24032020122255.jpg'),
(274, 38, '6 Tips Metode Mengajar yang Menyenangkan', '24/03/2020', '12:27 PM', '<p style=\"text-align:justify\">elajar memang menjadi salah satu kewajiban yang harus dilakukan oleh siswa. Hanya saja ada banyak faktor yang membuat suasana belajar kurang menyenangkan bagi murid, suasana belajar yang tegang dan kaku membuat siswa belajar hanya karena tuntutan. Belum lagi mata pelajaran yang menurut siswa terasa sulit sehingga membuat mereka tidak menyukai pelajaran yang dibawakan oleh guru. Jika hal ini dibiarkan berlarut-larut maka murid akan menjadi malas belajar. Untuk itu 6 tips<a href=\"https://halojasa.com/jasa-guru-matematika\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(255, 124, 0); text-decoration-line: none;\"><strong>&nbsp;metode mengajar yang menyenangkan&nbsp;</strong></a>bisa menjadi insiprasi bagi Anda yang berprofesi sebagai guru, baik guru formal atau guru privat agar bisa menciptakan suasana kelas yang nyaman.</p>\r\n\r\n<ol>\r\n	<li>Multimedia Interaktif</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">Mengajar baik di kelas atau pun di rumah tentu Anda harus memiliki strategi agar murid memiliki minat dengan apa yang Anda ajarkan. Untuk itu Anda harus kreatif, agar kelas menjadi hidup dan menyenangkan. Untuk membuat suasana kelas lebih interaktif, Anda bisa mencoba untuk memakai multimedia. Anda bisa mencoba untuk mencari animasi atau kartun yang mewakili mata pelajaran yang akan diajarkan.&nbsp; Atau jika Anda memiliki ketrampilan dibidang informatika maka Anda bisa membuat sendiri animasi dan mengisinya dengan suara Anda agar terasa lebih nyata. Selain animasi, anda juga bisa membuat video atau power point dengan gambar serta suara yang menarik. Dengan membawakan media seperti ini maka siswa akan lebih mudah menyerap pelajaran yang disampaikan karena siswa memiliki perhatian lebih pada pelajaran. Tidak hanya di dalam kelas saja, media ini juga efektif untuk Anda gunakan mengajar privat, agar siswa tidak mudah bosan.</p>\r\n\r\n<ol start=\"2\">\r\n	<li>Peace Post Card</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">Metode satu ini pasti masih asing untuk Anda, ditemukan oleh warga Indonesia sendiri yaitu Saara Suaib Hanafi seorang pengajar di kota Bekasi. Saara Suaib Hanafi mengajar mata pelajaran Bahasa Inggris di SMP Al-Azhar 9 kota Bekasi. Metode mengajar satu ini tidak hanya unik tetapi juga inovatif, dimana setiap siswa diberikan kartu pos dan belajar mengeluarkan&nbsp; pendapat dengan cara menuliskan pesan perdamaian. Lalu pesan yang suah ditulis tadi harus dipresentasikan pada siswa luar negeri melalui skype. Metode peace post card yang Saara Suaib Hanafi buat ini tidak hanya menarik tetapi juga mampu mengantarkan penemunya mewakili Indonesia untuk mengikuti Ajang Microsoft Global Education Forum pada Bulan Maret 2014. Dan dalam ajang bergengsi ini pula Saara Suaib Hanafi menjadi juara learning tools.</p>\r\n\r\n<ol start=\"3\">\r\n	<li>Menggunakan Meme</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">Saat ini Anda tentu sudah tidak asing lagi dengan meme, apalagi di sosial media meme begitu cepat dibagikan oleh berbagai pohak sehingga dalam hitungan menit sudah menyebar. Meme memang terkenal sebagai salah satu media yang lucu dengan kalimat atau gambar-gambar yang menarik. Anda juga bisa memanfaatkan meme sebagai salah satu metode belajar yang menyenangkan. Metode belajar memakai meme memang masih jarang digunakan, Jika Anda mengajar kimia maka Anda bisa memilih meme yang lucu untuk menjelaskan sifat-sifat cairan.</p>\r\n\r\n<ol start=\"4\">\r\n	<li>Simulasi Kesadaran Berkonstitusi</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">Metode belajar dengan cara lama pastinya membuat murid kurang tertarik apalagi jika berhubungan dengan mata pelajaran PKN atau Pendidikan Kewarganegaraan. Untuk mata pelajaran satu ini seorang guru SMK Muhammadiyah 4 Surakarta bernama Rahayuningsih menemukan metode simulasi kesadaran berkonstitusi. Dalam metode ini siswa diminta untuk memainkan sebuah peran untuk menjadi narasumber, fasilitator, penonton, dan pemain. Dengan bermain peran diharapkan siswa dapat memahami kandungan dari pasal-pasal melalui kartu masalah dan kartu sanksi yang sudah dibuat. Metode ini sebenarnya cukup sederhana, seperti saat Anda bermain Monopoly hanya saja kertas yang digunakan memiliki ukuran yang lebih besar dan bisa ditempelkan pada papan tulis. Dengan metode sederhana ini &nbsp;Rahayuningsih terpilih menjadi juara satu pada tahun 2013 untuk Lomba Kreativitas Guru Tingkat Nasional. Anda juga bisa mencoba untuk mengaplikasikan metode ini dalam proses pembelajaran agar siswa mudah memahami materi yang diajarkan tanpa terlalu banyak materi.</p>\r\n\r\n<ol start=\"5\">\r\n	<li>Alat Peraga Matematika</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">Matematika memang menjadi salah satu pelajaran yang cukup tidak disukai oleh sebagian besar murid. Selain sulit, terkadang guru pengajar cukup galak, sehingga belajar terasa tidak menyenangkan. Dengan metode belajar yang ditemukan oleh Juli Eko Sarwono, Anda bisa membuat pelajaran matematika terasa menyenangkan. Metode yang ditemukan alat peraga matematika yang ditemukan oleh guru Matematika di SMP 19 Purworejo ini masuk dalam nominasi Liputan 6 Award 2013. Jika Anda mengetahui alat peraga yang digunakan oleh Juli Eko Sarwono tentu Anda tidak pernah menyangka jika Juli Eko Sarwono memasukkan motor ke dalam kelas untuk memberikan materi lingkaran dan tabung.&nbsp;<strong>Metode belajar</strong>&nbsp;yang satu ini bisa menjadi salah satu insiprasi untuk Anda menjelaskan mata pelajaran matematika.</p>\r\n\r\n<ol start=\"6\">\r\n	<li>Mengingat Tabel Periodik dengan Lagu</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">Selain matematika, pelajaran kimia juga cukup memiliki banyak haters. Tidak hanya rumus dan unsur kimia yang harus dipahami, siswa juga dituntut untuk menghafalnya. Satu hal yang paling dasar yaitu menghafal tabel periodik yang cukup banyak. Tabel periodik harus dihafalkan untuk memudahkan siswa memahami pelajaran kimia. Agar siswa dengan mudah menghafal tabel periodik maka Anda bisa memilih satu lagu sebagai salah satu jembatan untuk membantu siswa mengingat tabel periodik unsur.&nbsp;<a href=\"https://halojasa.com/jasa-guru-matematika\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(255, 124, 0); text-decoration-line: none;\"><strong>Metode belajar</strong></a>&nbsp;dengan lagu memang terkenal efektif karena hampir semua orang menyukai lagu dan belajar juga jadi lebih menyenangkan. Dengan memilih lagu yang pas atau lagu yang sedang menjadi trend dan melafalkan bersama murid maka akan membuat murid lebih mudah mengingatnya.</p>\r\n', 17, '24032020122734.jpg'),
(275, 44, 'Sekitar 1 Juta Pelajar Akses Sekolah Online', '24/03/2020', '12:43 PM', '<div class=\"article-content-body__item-page \" style=\"box-sizing: border-box; font-size: 15px; line-height: 23px; color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif;\">\r\n<div class=\"article-content-body__item-content\" style=\"box-sizing: border-box;\">\r\n<p>Lebih dari 1 juta pelajar memanfaatkan fasilitas belajar daring melalui Sekolah Online&nbsp;<a href=\"https://www.liputan6.com/tekno/read/4204795/xl-bagikan-kuota-gratis-untuk-akses-aplikasi-udemy-ruangguru-hingga-zenius?source=search\" rel=\"nofollow\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(255, 51, 0); text-decoration-line: none;\">Ruangguru&nbsp;</a>Gratis pada Senin, 16 Maret 2020. Di mana, merupakan hari pertama siswa-siswi belajar di rumah.</p>\r\n\r\n<p>Kampanye belajar di rumah ini sesuai dengan arahan Bapak Presiden Joko Widodo (Jokowi) dan pemerintah setempat berkaitan dengan darurat kesehatan penyakit Covid-19.</p>\r\n\r\n<p>Dampaknya, aplikasi Ruangguru juga memuncaki peringkat 1 Google Play Storedari jutaan aplikasi di Indonesia-mengalahkan aplikasi populer lainnya seperti WhatsApp danTikTok.</p>\r\n\r\n<p>&ldquo;Jutaan siswa yang keseharian belajarnya tidak berlangsung di sekolah selama darurat kesehatan Virus Corona akan mengandalkan materi belajar kami. Semoga kami bisa terus menghadirkan solusi untuk lebih banyaklagi siswa,&rdquo;&nbsp;ujar Pendiri dan Direktur Utama&nbsp;<a href=\"https://www.liputan6.com/on-off/read/4202075/respons-situasi-covid-19-ruangguru-buka-sekolah-online-gratis?source=search\" rel=\"nofollow\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(255, 51, 0); text-decoration-line: none;\">Ruangguru</a>, &nbsp;Belva Devara, Rabu (18/3/2020).</p>\r\n\r\n<p>Inisiatif Sekolah Online Ruangguru ini juga disambut positif oleh orang tua murid. &ldquo;Waktu tahu bahwa sekolah menjalankan program sekolah di rumah selama 2 minggu, sempat bingung juga. Ternyata Ruangguru ada program Sekolah Online. Kemarin, mereka semangat banget belajarnya, karena nggak perlu cari-cari materi sendiri. Jadwal pelajarannya juga sudah jelas jadi bisa tahu mau belajar apa dan kapan&rdquo;, ujar Ratih, orang tua pelajar kelas 1 dan 5 SD di Jakarta.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"article-content-body__item-page\" style=\"box-sizing: border-box; font-size: 15px; line-height: 23px; color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif;\">\r\n<div class=\"article-content-body__item-content\" style=\"box-sizing: border-box; position: relative; bottom: 12px;\">\r\n<p>Bupati Banyuwangi dan Ketua Umum Asosiasi Pemerintah Kabupaten Seluruh Indonesia(APKASI) Abdullah Azwar Anas juga turut mengapresiasi inisiatif Ruangguru ini dengan menghimbau Pemerintah Kabupaten di Indonesia untuk memanfaatkan Sekolah Online Ruangguru Gratis.</p>\r\n\r\n<p>&ldquo;Apa yang dilakukan Ruangguru ini bukan gimmick semata, melainkan cara yang efektif untuk mengkondisikan anak agar tetap belajar di rumah dalam kebijakan pengalihan tempat pembelajaransaat ini. Bahkan anak saya sendiri juga ikut belajar di rumah dengan aplikasi Ruangguru pagi ini,&rdquo; tutur Anas.</p>\r\n\r\n<p>Sekolah Online Ruangguru Gratis, bentuk dan upaya Ruangguru dalam menjawab tantangan belajar yang dihadapi siswa-siswi di Indonesia di tengah darurat kesehatan penyakit COVID-19, menyediakan siswa pembelajaran jarak jauh secara daring (live teaching) setiap hari Senin sampai Jumat, layaknya sekolah seperti biasa, di aplikasi Ruangguru.</p>\r\n\r\n<p>Siswa bisa mengikuti pembelajaran Sekolah Online Ruangguru Gratis dari pukul 08.00 - 12.00 WIB, di mana akan tersedia 15 kanal live teaching yang mencakup semua mata pelajaran sesuai dengan kurikulum nasional, mulai dari kelas 1 SD hinggakelas 12 SMA (IPA dan IPS), yang dipandu oleh para Master Teachers Ruang guru.</p>\r\n</div>\r\n</div>\r\n', 20, '24032020124004.jpg'),
(269, 37, 'Palang Merah Remaja (PMR)', '23/03/2020', '07:04 PM', '<p>Palang Merah Remaja (PMR) adalah sebuah wadah atau organisasi pelajar yang mempunyai tugas dan tanggung jawab untuk melakukan pelayanan-pelayanan kesehatan dan medis terhadap para korban atau pasien yang membutuhkan pertolonan, baik di lingkungan internal sekolah maupun masyarakat yang berada di sekitarnya. Peran dan fungsi organisasi ini juga sama dengan Palang Merah Indonesia (PMI), dan dalam banyak hal PMR bekerja sama dengan PMI untuk mengembangkan program-program pelayanan kesehatan dan medis kepada masyarakat.</p>\r\n\r\n<p>Tujuan dikembangkannya kegiatan PMR ini adalah:</p>\r\n\r\n<p>1)&nbsp;&nbsp; Membentuk sebuah wadah disekolah yang siap dan terampil dalam melakukan pelayanan kesehatan dan medisterhadap masyarakat, khususnya untuk teman di sekolah</p>\r\n\r\n<p>2)&nbsp;&nbsp; Membentuk mental dankarakter peserta didik sehingga memiliki kepekaan dan solidaritas sosial yangtinggi serta siap berkorban demi kepentingan orang lain</p>\r\n\r\n<p>3)&nbsp;&nbsp; Menanamkan nilai-nilaikemanusiaan dan keagamaan pada diri peserta didik sehingga senantiasa siapberbuat baik dan memberi manfaat kepada sesamanya.</p>\r\n\r\n<p>Sebagai mitra, abdi dan pelayan masyarakat, PMR bisa melakukan kegiatan-kegiatan antara lain:</p>\r\n\r\n<p>1)&nbsp;&nbsp; Melayani masyarakatsekolah maupun masyarakat sekitar kapan dan dimanapun dibutuhkan pada tahap pertolongan pertama</p>\r\n\r\n<p>2)&nbsp;&nbsp; Mengadakan program pelayanan kesehatan bagi masyarakat</p>\r\n\r\n<p>3)&nbsp;&nbsp; Mengadakan pelatihan pelayanan kesehatan dan medis kepada masyarakat, baik untuk tenaga sukarelawan,anggota PMR sendiri, maupun untuk para peserta didik secara umum</p>\r\n\r\n<p>4)&nbsp;&nbsp; Mengadakan penyuluhan danbimbingan tentang tata cara hidup yang bersih dan sehat serta tata cara pengobatan beberapa penyakit ringan.</p>\r\n\r\n<p>Dari semua kegiatan di atas, sekolah sebagai pengelola kegiatan pendidikan mempunyai tanggung jawab dalam mengembangkan potensi yang dimiliki peserta didik. Dan salah satu cara yang dapat dilakukan sekolahn dalam mengembangkan potensi peserta didik adalah melalui kegiatan ekstrakurikuler.</p>\r\n', 4, '23032020063005.jpg'),
(268, 37, 'OSIS SMK Kosgoro Penawartama  Keb', '23/03/2020', '05:35 PM', '<div class=\"entry-content\" style=\"border: 0px; font-family: \">\r\n<p>OSIS merupakan kependekan dari Organisasi Siswa Intra Sekolah. Organisasi ini berada di tingkat sekolah dan dibentuk di sekolah menengah yaitu SMP dan SMA. Organisasi ini menjadi wadah berkumpulnya para siswa untuk mencapai tujuan tertentu.</p>\r\n\r\n<p>Organisasi ini terdiri dari susunan kepanitian yang terdiri dari ketua, wakil ketua, sekretaris, bendahara, kemudian seksi-seksi lainnya. Setiap jabatan di dalam OSIS memiliki tugas masing-masing. Kepengurusan&nbsp;<a href=\"https://www.renesia.com/contoh-kumpulan-visi-dan-misi-calon-ketua-osis-smp-sma-dan-smk/\" style=\"border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(221, 51, 51); text-decoration-line: none;\">OSIS</a>&nbsp;memiliki masa kerja yang terbatas yaitu selama satu tahun dan akan diperbaharui lagi.</p>\r\n\r\n<p><strong>Fungsi OSIS</strong></p>\r\n\r\n<p>Mengapa harus ada OSIS di sekolah? OSIS merupakan sebuah wadah yang memfasilitasi para siswa untuk bekerja sesuai tugasnya masing-masing demi kepentingan sekolah dan seluruh siswa. Selain itu, OSIS juga berfungsi sebagai pendorong berkembangnya kemampuan dan kreativitas siswa.</p>\r\n\r\n<p>OSIS juga bisa berfungsi sebagai pencegah. Pencegah di sini maksudnya adalah mencegah munculnya pengaruh negatif pada siswa. Dengan adanya OSIS maka siswa bisa memiliki kegiatan yang positif yang bisa memaksimalkan kemampuan dan kreativitas mereka.</p>\r\n\r\n<p><strong>Tujuan OSIS</strong></p>\r\n\r\n<p>Apa sebenarnya tujuan OSIS? Mari kita lihat lagi pengertian OSIS, OSIS merupakan organisasi intra sekolah yang artinya organisasi ini dibentuk di dalam sekolah, beranggotakan siswa di sekolah, dibina oleh guru di sekolah, dan bekerja demi kebaikan sekolah.</p>\r\n\r\n<p>OSIS bertujuan memfasilitasi para siswa untuk menyalurkan aspirasinya, mengekspresikan kreativitasnya, dan berkontribusi untuk hal-hal yang positif. OSIS memiliki tujuan yang positif bagi seluruh siswa di sekolah yang artinya akan memberikan pengaruh positif juga bagi sekolah itu sendiri.</p>\r\n\r\n<p>Selain itu, ada lagi tujuan OSIS yang perlu Kamu tahu. OSIS bertujuan memaksimalkan potensi siswanya sehingga bisa meraih prestasi yang membanggakan diri juga sekolah. Selain itu, OSIS juga bertujuan untuk melatih keterampilan siswa dalam bersosialisasi dan berorganisasi.</p>\r\n\r\n<p><strong>Tugas OSIS</strong></p>\r\n\r\n<p>Lantas tugas apa sebenarnya yang harus dijalankan oleh OSIS? OSIS bertugas untuk mengendalikan aktivitas siswanya sehingga lebih terarah dan lebih positif. Selain itu, semua orang yang terlibat dalam kepengurusan OSIS juga memiliki tugas masing-masing yang spesifik sesuai dengan jabatan yang dibagikan.</p>\r\n\r\n<p>Setiap orang yang terlibat di dalam kepengurusan OSIS memiliki tugas masing-masing yang harus dijalankan. Selain semua siswa yang terlibat dalam kepengurusan OSIS, ada pembina yang bertugas untuk mengawasi jalannya kepengurusan OSIS. Salah satu guru akan dipilih untuk menjadi pembina dan mengawasi jalannya OSIS.</p>\r\n</div>\r\n', 5, '23032020053158.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id_bukutm` int(4) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `http` varchar(25) DEFAULT NULL,
  `isi_buku` varchar(300) NOT NULL,
  `status` enum('N','Y') NOT NULL,
  `admin` varchar(25) NOT NULL,
  `jawab` text NOT NULL,
  `tgl` varchar(25) NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `jam` varchar(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id_bukutm`, `nama`, `email`, `http`, `isi_buku`, `status`, `admin`, `jawab`, `tgl`, `tanggal`, `jam`) VALUES
(1, 'tes', 'tea@gmail.com', '', 'alsflajg', 'N', '', '', '', '03/06/2017', '06:55 AM'),
(2, 'aku', 'syabil23syafiq@gmail.com', '', 'website bagus', 'N', '', '', '', '22/03/2020', '03:52 PM'),
(4, 'jumanto', 'wirdapiraaa@gmail.com', '', 'Puji syukur rahmad dan karunia Allah SWT sehingga saya mampu menuliskan kata sambutan pengurus SMK Kosgoro Penawartama   dalam rangka penerbitan website SMK Kosgoro Penawartama   sebagai sarana informasi dan komunikasi up date ini melalui dunia maya. Unt', 'N', '', '', '', '08/06/2020', '05:43 AM'),
(5, 'jumanto', 'mardybest@gmail.com', '', 'hjhjkhkj', 'N', '', '', '', '16/07/2020', '01:45 PM'),
(6, 'Genteng Mantili', 'wirdapiraaa@gmail.com', '', 'ssgsgsgsgsgsg', 'N', '', '', '', '16/07/2020', '01:46 PM'),
(7, 'C1', 'misbaul99@gmail.com', '', 'dfffdfd', 'N', '', '', '', '16/07/2020', '01:51 PM'),
(8, 'Pengeluaran', 'novalindamariska@gmail.co', '', 'cccccccc', 'N', '', '', '', '16/07/2020', '01:54 PM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id_d` int(4) NOT NULL,
  `kategori` varchar(35) COLLATE latin1_general_ci DEFAULT NULL,
  `kelas` varchar(3) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(255) COLLATE latin1_general_ci DEFAULT '0',
  `keterangan` text COLLATE latin1_general_ci,
  `link` text COLLATE latin1_general_ci,
  `file` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `video` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `downloading` int(15) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id_d`, `kategori`, `kelas`, `nama`, `keterangan`, `link`, `file`, `video`, `downloading`) VALUES
(20, '25', 'X', 'Pangkat Akar Dan Logaritma', '<div class=\"WordSection1\">\r\n<p style=\"text-align: justify;\"><strong>1.&nbsp; PANGKAT, AKAR, DAN LOGARITMA </strong></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>A.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pangkat Rasional</strong></p>\r\n<p style=\"text-align: justify;\">1)&nbsp;&nbsp; Pangkat negatif dan nol</p>\r\n<p style=\"text-align: justify;\">Misalkan a &Icirc; R dan a &sup1; 0, maka:</p>\r\n<p style=\"text-align: justify;\">a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a<sup>-n</sup> = atau a<sup>n</sup> =</p>\r\n<p style=\"text-align: justify;\">b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a<sup>0</sup> = 1</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\" align=\"left\">2)&nbsp;&nbsp; Sifat-Sifat Pangkat</p>\r\n<p style=\"text-align: justify;\" align=\"left\">Jika a dan b bilangan real serta n, p, q bilangan bulat positif, maka berlaku:</p>\r\n</div>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a<sup>p</sup> &times; a<sup>q</sup> = a<sup>p+q</sup></p>\r\n<p style=\"text-align: justify;\">b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a<sup>p</sup> : a<sup>q</sup> = a<sup>p-q</sup></p>\r\n<p style=\"text-align: justify;\">c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = <em>a</em><sup>pq</sup></p>\r\n<p style=\"text-align: justify;\">d)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = <em>a</em><sup>n</sup>&times;<em>b</em><sup>n</sup></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', 'http://localhost/gunter/beranda.php?aksi=donwload&id=9', 'bab-1-pangkat-akar-dan-logaritma.doc', 'juwitadynda solo drum - YouTube.mp4', 0),
(21, '25', 'X', 'Fungsi Kuadrat', '<p><strong>2. &nbsp;FUNGSI KUADRAT</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>A. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Persamaan Kuadrat</strong></p>\r\n<p>1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bentuk umum persamaan kuadrat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ax<sup>2</sup> + bx + c = 0, a &sup1; 0</p>\r\n<p>2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nilai determinan persamaan kuadrat &nbsp;&nbsp; : D = b<sup>2</sup> &ndash; 4ac</p>\r\n<p>3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Akar&ndash;akar persamaan kuadrat dapat dicari dengan memfaktorkan ataupun dengan rumus:</p>\r\n<p>&nbsp;</p>\r\n<p>4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pengaruh determinan terhadap sifat akar:</p>\r\n<p>a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bila D &gt; 0, maka persamaan kuadrat memiliki 2 akar real yang berbeda</p>\r\n<p>b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bila D = 0, maka persamaan kuadrat memiliki 2 akar real yang kembar dan rasional</p>\r\n<p>c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bila D &lt; 0, maka akar persamaan kuadrat imajiner (tidak memiliki akar&ndash;akar)</p>\r\n<p>&nbsp;</p>\r\n<p>5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jumlah, selisih dan hasil kali akar&ndash;akar persaman kuadrat</p>\r\n<p>Jika x<sub>1</sub>, dan x<sub>2</sub> adalah akar&ndash;akar persamaan kuadrat ax<sup>2</sup> + bx + c = 0, maka:</p>\r\n<p>a)&nbsp;&nbsp;&nbsp; Jumlah akar&ndash;akar persamaan kuadrat :</p>\r\n<p>b)&nbsp;&nbsp;&nbsp; Selisih akar&ndash;akar persamaan kuadrat&nbsp;&nbsp; : , x<sub>1</sub> &gt; x<sub>2</sub></p>\r\n<p>c)&nbsp;&nbsp;&nbsp; Hasil kali akar&ndash;akar persamaan kuadrat&nbsp;&nbsp;&nbsp; :</p>\r\n<p>d)&nbsp;&nbsp;&nbsp; Beberapa rumus yang biasa digunakan saat menentukan jumlah dan hasil kali akar&ndash;akar persamaan kuadrat</p>\r\n<p align=\"left\">a.&nbsp; &nbsp;=</p>\r\n<p align=\"left\">b. &nbsp;=</p>\r\n<p align=\"left\"><strong>Catatan:</strong></p>\r\n<p align=\"left\">Jika koefisien a dari persamaan kuadrat ax<sup>2</sup> + bx + c = 0, bernilai 1, maka</p>\r\n<ol>\r\n<li>x<sub>1</sub> + x<sub>2</sub> = &ndash; b</li>\r\n<li></li>\r\n<li>x<sub>1</sub> &middot; x<sub>2</sub> &nbsp; = c</li>\r\n</ol>', 'http://localhost/gunter/beranda.php?aksi=donwload&id=10', 'bab-2-fungsi-kuadrat.doc', 'Membuat Grafik dari Fungsi Kuadrat (Kurva) - Grafik 6 - YouTube.mp4', 0),
(22, '26', 'X', 'INTERESTING STORY (Spoken Cycle)', '<ol>\r\n<li>BUILDING KNOWLEDGE OF FIELD</li>\r\n</ol>\r\n<p><em>Activity 1</em></p>\r\n<p><em>Answer the questions orally</em></p>\r\n<ol>\r\n<li>Do you often read stories?</li>\r\n<li>What kinds of stories do you read?</li>\r\n<li>How do you get them?</li>\r\n<li>Which one do you like best, fable or fairy tale?</li>\r\n<li>Please give your reason!</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p><em>Activity 2</em></p>\r\n<p><em>Practice your speaking</em></p>\r\n<ol>\r\n<li>Now, who wants to tell your own story to your friends?</li>\r\n<li>The other students can ask some questions</li>\r\n</ol>\r\n<p>&nbsp;</p>', 'http://localhost/gunter/beranda.php?aksi=donwload&id=11', 'unit-1.doc', 'All Tenses - English Lesson - YouTube.MP4', 0),
(23, '25', 'XI', 'Trigonometri', '<p><strong>TRIGONOMETRI II</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>A. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jumlah dan Selisih Dua Sudut</strong></p>\r\n<p>1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sin (A &plusmn; B) = sin A cos B&nbsp; &plusmn; cos A sin B</p>\r\n<p>2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cos (A&nbsp; &plusmn; B) &nbsp;&nbsp;&nbsp; = cos A cos B &nbsp;sin A sin B</p>\r\n<p>3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tan (A&nbsp; &plusmn; B) =</p>', 'http://localhost/gunter/beranda.php?aksi=donwload&id=12', 'bab-5-trigonometri-ii.doc', 'Matematika Kelas 10 - Bab 06 - 01 Pendahuluan Trigonometri - YouTube.mp4', 0),
(24, '25', 'XII', 'PROGRAM LINEAR', '<h6 style=\"text-align: justify;\">Untuk menentukan daerah HP pertidaksamaan liniear ax + by â‰¤ c dengan metode grafik dan uji titik, langkah-langkahnya adalah sebagai berikut :</h6>\r\n<h6 style=\"text-align: justify;\">1.Â Â Â Â Â  Gambarkan garis ax + by = c</h6>\r\n<p style=\"text-align: justify;\">Â </p>\r\n<h6 style=\"text-align: justify;\">2.Â Â Â Â Â  Lakukan uji titik, yaitu mengambil sembarang titik (x, y) yang ada di luar garis ax + by = c, kemudian substitusikan ke pertidaksamaan ax + by â‰¤ c</h6>\r\n<h6 style=\"text-align: justify;\">3.Â Â Â Â Â  Jika pertidaksamaan itu bernilai benar, maka HPnya adalah daerah yang memuat titik tersebut dengan batas garis ax + by = c</h6>\r\n<h6 style=\"text-align: justify;\">4.Â Â Â Â Â  Jika pertidaksamaan itu bernilai salah, maka HPnya adalah daerah yang tidak memuat titik tersebut dengan batas garis ax + by = c</h6>\r\n<p style=\"text-align: justify;\">Â </p>', 'http://localhost/gunter/beranda.php?aksi=donwload&id=13', 'bab-16-program-linear.doc', 'Program Linier (1) - YouTube.mp4', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(4) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `keterangan`, `gambar`) VALUES
(1, 'a', '<p>a</p>\r\n', '17062023061914.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id_header` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ket` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`id_header`, `judul`, `gambar`, `ket`) VALUES
(21, 'Header1', '1.jpg', 'Pendaftaran Siswa Baru Pendaftaran Siswa BaruPendaftaran Siswa BaruPendaftaran Siswa Baru\r\n'),
(22, 'Header2', '2.jpg', ''),
(23, 'Header3', '3.jpg', ''),
(24, 'Header4', '4.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(38, 'Berita'),
(37, 'Kegiatan siswa'),
(44, 'Berita Pendidikan'),
(43, 'Informasi'),
(46, 'Pengumuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat_download`
--

CREATE TABLE `kat_download` (
  `no` int(11) NOT NULL,
  `kategori` varchar(35) COLLATE latin1_general_ci DEFAULT NULL,
  `gb` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kat_download`
--

INSERT INTO `kat_download` (`no`, `kategori`, `gb`) VALUES
(28, 'IPA', '16092014014752.jpg'),
(26, 'BAHASA INGGRIS', '16092014014335.jpg'),
(27, 'BAHASA INDONESIA', '16092014014045.jpg'),
(25, 'MATEMATIKA', '16092014014348.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_tamu` int(4) NOT NULL,
  `id_d` int(3) NOT NULL DEFAULT '0',
  `id_berita` int(4) NOT NULL DEFAULT '0',
  `id_kat` int(4) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL,
  `komentar` varchar(300) NOT NULL,
  `jawab` text NOT NULL,
  `admin` varchar(100) NOT NULL,
  `status` enum('N','Y') NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jam` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_tamu`, `id_d`, `id_berita`, `id_kat`, `nama`, `komentar`, `jawab`, `admin`, `status`, `tgl`, `tanggal`, `jam`) VALUES
(66, 0, 275, 44, 'anita ', 'mantap', '', '', 'N', '24/03/2020', '', '12:42 PM'),
(67, 0, 275, 44, 'jumanto', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi, non ducimus nesciunt in commodi similique aliquam omnis ea at!', '', '', 'N', '03/06/2020', '', '06:06 AM'),
(68, 0, 276, 44, 'Pengeluaran', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi, non ducimus nesciunt in commodi similique aliquam omnis ea at!', '', '', 'N', '03/06/2020', '', '06:07 AM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `icon` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `link`
--

INSERT INTO `link` (`id`, `icon`, `nama`, `isi`, `link`) VALUES
(5, '26122012065034.jpg', 'Stmik Pringsewu', '<p>Kampus Tercinta STMIK Pringsewu YAng beralamatkan di Kabupaten Pringsewu - Lampung \"Mengasuh Dengan Hati\"</p>', 'http://www.stmikpringsewu.ac.id'),
(12, '26062015064536.jpg', 'DINAS PENDIDIKAN', 'Situs website dinas pendidikan dimana infromasi yang terdapat pada laman ini adalah seputar pendidikan yang ada di negara indonesia, untuk mempermudah masayarakat dalam mendapatkan informasi pendidikan secara fiktif', 'https://www.kemdikbud.go.id/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_gr` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kelamin` enum('P','W') NOT NULL,
  `status` enum('PNS','Non PNS') NOT NULL,
  `tamatan` varchar(15) NOT NULL,
  `sertifikasi` enum('SUDAH','BELUM') NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_gr`, `nama`, `password`, `nip`, `jabatan`, `kelamin`, `status`, `tamatan`, `sertifikasi`, `foto`) VALUES
(44, 'Roliyanto', 'd41d8cd98f00b204e9800998ecf8427e', '-', 'Tenaga Administrasi', 'P', 'Non PNS', '-', 'BELUM', ''),
(2, 'Desi Susanti', 'd41d8cd98f00b204e9800998ecf8427e', '1550765667210053', 'Tenaga Administrasi ', 'W', 'Non PNS', 'S1 PALANGKARAYA', 'BELUM', '12072020062632.jpg'),
(3, 'Mely Lidia Herliani', 'd41d8cd98f00b204e9800998ecf8427e', '', 'Tenaga Perpustakaan', 'W', 'Non PNS', 'SI ', 'SUDAH', '12072020062718.jpg'),
(4, 'Rosidhah', 'd41d8cd98f00b204e9800998ecf8427e', '197309262005012005', 'Guru Mapel', 'W', 'PNS', 'SI ', 'SUDAH', '12072020062752.jpg'),
(5, 'Uun Kurniawati', 'd41d8cd98f00b204e9800998ecf8427e', '4341756659300013', 'Guru Mapel', 'W', 'Non PNS', 'SI ', 'SUDAH', '17072020052754.jpg'),
(6, 'Jumirin', 'd41d8cd98f00b204e9800998ecf8427e', '', 'Tenaga Administrasi ', 'P', 'Non PNS', '-', 'SUDAH', ''),
(7, 'Sugiarto', 'd41d8cd98f00b204e9800998ecf8427e', '195908071990021002', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(8, 'Supriyati', 'd41d8cd98f00b204e9800998ecf8427e', '196504121988032009', 'Guru Mapel', 'W', 'PNS', 'SI ', 'SUDAH', ''),
(9, 'Mardiono', 'd41d8cd98f00b204e9800998ecf8427e', '196306121984121001', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(10, 'Alih Suprayogi', 'd41d8cd98f00b204e9800998ecf8427e', '196611291999031002', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(11, 'LISA AULIA', '', '199201062019022012', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(12, 'Siti Erawati', '', '196707151997032002', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(13, 'Dian Okvitasari', '', '', 'Guru Mapel', 'P', '', 'SI ', 'SUDAH', ''),
(14, 'Reni Madona', '', '199204092015032008', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(15, 'Jan Bagitu', '', '', 'Guru Mapel', '', '', 'SI ', 'SUDAH', ''),
(16, 'Usman Anwar', '', '198404182009031001', 'Guru BK', '', 'PNS', 'SI ', 'SUDAH', ''),
(17, 'Sawiyah', '', '196504291988032005', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(18, 'Nurhidayati', '', '', 'Guru Mapel', 'P', '', 'SI ', 'SUDAH', ''),
(19, 'Nurhayati', '', '196508151987032010', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(20, 'Muhtasor', 'd41d8cd98f00b204e9800998ecf8427e', '197002081997021001', 'Kepala Sekolah', 'W', 'PNS', 'S3', 'SUDAH', ''),
(21, 'ISTIQOMAH', '', '', 'Guru Mapel', 'P', '', 'SI ', 'SUDAH', ''),
(22, 'Rusmaini', '', '196305231987032003', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(23, 'Aris Mundarto', '', '196809292007011006', 'Guru Mapel', '', 'PNS', 'SI ', 'SUDAH', ''),
(24, 'Juliatun', '', '', 'Guru Mapel', '', '', 'SI ', 'SUDAH', ''),
(25, 'Nurlaila Kurniati', '', '', 'Guru Mapel', 'P', '', 'SI ', 'SUDAH', ''),
(26, 'M. Husen', '', '195910191986031004', 'Guru Mapel', '', 'PNS', 'SI ', 'SUDAH', ''),
(27, 'Sri Guntari', '', '196403221990032001', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(28, 'Sutriasih', '', '', 'Guru Mapel', 'P', '', 'SI ', 'SUDAH', ''),
(29, 'Satino', '', '196208071984121001', 'Guru Mapel', '', 'PNS', 'SI ', 'SUDAH', ''),
(30, 'Tohirin', '', '196705131990101001', 'Guru Mapel', '', 'PNS', 'SI ', 'SUDAH', ''),
(31, 'Lely Diyah Sulistyaningsih', '', '197906182014072001', 'Guru TIK', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(32, 'Teti Mulyati', '', '196806051993112001', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(33, 'Giat Sutono', '', '196608151992031005', 'Guru BK', '', '', 'SI ', 'SUDAH', ''),
(34, 'Dwi Yuni Astuti', '', '7960756657300042', 'Guru Mapel', 'P', '', 'SI ', 'SUDAH', ''),
(35, 'Sujiati', '', '197310071998022002', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(36, 'Yudha Safit Malila', '', '', 'Tenaga Administrasi ', '', '', 'SI ', 'SUDAH', ''),
(37, 'SITI HALIMAH', '', '199206262019022012', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(38, 'Widuriwati', '', '', 'Guru Mapel', 'P', '', 'SI ', 'SUDAH', ''),
(39, 'ANNISA NUR FADHILAH', '', '', 'Guru Mapel', 'P', '', 'SI ', 'SUDAH', ''),
(40, 'Tri Murti Wahyuningsih', '', '196611241991022002', 'Guru Mapel', 'P', 'PNS', 'SI ', 'SUDAH', ''),
(41, 'Dodi Saputro', '', '198303012009021007', 'Guru Mapel', '', 'PNS', 'SI ', 'SUDAH', ''),
(42, 'Sukendar', '', '196607251990111001', 'Guru Mapel', '', 'PNS', 'SI ', 'SUDAH', ''),
(43, 'Dina Fitria', '', '', 'Guru Mapel', 'P', '', 'SI ', 'SUDAH', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_daftar` varchar(20) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmpt_l` varchar(50) NOT NULL,
  `tgl_l` varchar(10) NOT NULL,
  `jk` varchar(11) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `sekolah_asl` varchar(100) NOT NULL,
  `th_ijasah` varchar(4) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `skhu` varchar(30) NOT NULL,
  `kk` varchar(30) NOT NULL,
  `akte` varchar(30) NOT NULL,
  `ijasah` varchar(30) NOT NULL,
  `n_us` int(2) NOT NULL,
  `tgl_daftar` varchar(20) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `payah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `pibu` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL DEFAULT 'new',
  `id_session` varchar(100) NOT NULL,
  `tgl_log` varchar(100) NOT NULL,
  `jam_log` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_daftar`, `nisn`, `pass`, `nama`, `tmpt_l`, `tgl_l`, `jk`, `agama`, `alamat`, `rt`, `rw`, `desa`, `kec`, `kab`, `kodepos`, `jurusan`, `tlp`, `sekolah_asl`, `th_ijasah`, `gambar`, `skhu`, `kk`, `akte`, `ijasah`, `n_us`, `tgl_daftar`, `ayah`, `payah`, `ibu`, `pibu`, `kelas`, `id_session`, `tgl_log`, `jam_log`) VALUES
('SMK-23-001', '25252525', '8781eba6b2631a210de5e363c2834d83', 'MARDYBEST', 'marga', '2023-06-17', 'laki-laki', 'ISLAM', 'g', '36', '36', 'prinsew', 'pringsew', 'pringse', '3535', '', '08321456445', 'spm it na', '2023', '49animasi-burung-bird-animation.gif', '12download (1).jfif', '65Capture.PNG', '7blank-landscape-nature-park-s', '97Bisnis-Furniture-Masih-Terpu', 78, '17062023094747', 'g', 'g', 'g', 'g', 'new', 'ktlkplr0hlbq6nh5qqpq1aath0', '17/06/2023', '12:03 PM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL DEFAULT '',
  `menu` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `foto`, `aktif`, `nama`, `isi`, `alamat`, `no_hp`, `menu`) VALUES
(6, '23032020033527.jpg', 'N', 'Struktur Organisasi', '<p><img alt=\"\" src=\"http://localhost/madrasahaliyahkedodong/struktur.jpg\" style=\"height:681px; width:545px\" /></p>\r\n', '', '', ''),
(3, '31052017021339.jpg', 'N', 'Sejarah SMK Kosgoro Penawartama  ', '<p>SMK Ma&rsquo;arif Pringsewu adalah sebuah lembaga pendidikan Islam dibawah naungan Lembaga Ma&rsquo;arif Kabupaten Pringsewu. &nbsp;SMK Ma&rsquo;arif Pringsewu dikelola oleh Lembaga &nbsp;dan diurus oleh seorang Kepala Sekolah beserta guru-ruru dan staf tata usaha. Pengurus Lembaga dan Kepala Sekolah serta seluruh guru-guru dan staf TU bekerja dengan fungsi masing-masing yang telah diatur dengan sebuah mekanisme kerja.</p>\r\n\r\n<p>Lembaga Ma&rsquo;arif Kabupaten Pringsewu membuat dan menerbitkan pedoman penyelenggaraan seperti; Anggaran Dasar, Anggaran Rumah Tangga dan Perangkat Peraturan Kelembagaan/Yayasan lainnya&nbsp; sehingga Kepala Sekolah ,Guru-guru dan TU dapat membuat/merumuskan Program Kerja sekolah.</p>\r\n\r\n<p>SMK Ma&rsquo;arif Pringsewu adalah sekolah yang terletak di Jalan M Yusuf No 451 Pekon Rejosari Kecamatan Pringsewu&nbsp; Kabupaten Pringsewu. Tepatnya di komplek pendidikan Pondok Pesantren Salafiyah Al-Wustho (PPSA) Rejosari. Didirikan pada tahun 2014, SMK Ma&rsquo;arif&nbsp; Pringsewu menyelenggarakan Program Keahliah Teknik Komputer dan Jaringan. SMK Ma&rsquo;arif Pringsewu&nbsp; didirikan dengan tujuan mendidik putra-putri bangsa menjadi putra-putri yang mempunyai skill handal dan kompeten dalam era modernisasi ini sekaligus memiliki wawasan keagamaan yang kuat dengan berprinsip kepada akidah ahlusunnah wal jamaah.</p>\r\n', '', '', ''),
(4, '31052017021706.jpg', 'N', 'Visi, Misi dan Tujuan Madrasah Aliyah Mathlaul Anw', '<p>VISI<br />\r\nMewujudkan Sekolah yang berkembang yang menjadi pilihan masyarakat Industri kerja secara mandiri kompetitif dan berwawasan Ahlusunnah Wal Jamaah<br />\r\nMisi<br />\r\n1.Membentuk tamatan yang berimtaq dan beriptek<br />\r\n2.Membentuk tamatan yang mandiri serta dapat mengatasi kehidupan diera globalisasi<br />\r\n3.Mengoptimalkan sumber daya dalam meningkatkan mutu pendidikan<br />\r\nTujuan<br />\r\n1.Menghasilkan lulusan dengan kompetensi yang sesuai dengan standar pemerintah, Persyarikatan Nahdatul Ulama, tuntutan pusat lokal, nasional maupun global,<br />\r\n2.Manghasilkan lulusan yang mampu berwirausaha secara mandiri.<br />\r\n3.Menghasilkan lulusan siap untuk terus mengembangkan diri secara otodidik, belajar dalam komunitas/rekan profesi maupun studi lanjut di Perguruan Tinggi.</p>\r\n', '', '', ''),
(1, '', 'N', 'Pengumuman', '<p style=\"text-align: left;\">Telah dibuka pendaftaran beasiswa bagi siswa yang berprestasi dengan tingkatan kelas X dan XII pada hari ini untuk informasi lebih lanjut silahkan hubungi panitian seleksi beasiswa di ruangan Task Post,</p>', '', '', ''),
(8, '09102014084623.jpg', 'N', 'Sarana dan Prasarana', '<p>Gedung SMK Kosgoro Penawartama yang berlokasi di <span style=\"background-color:rgb(255, 255, 255); color:rgb(34, 34, 34); font-family:arial,sans-serif; font-size:14px\">Jl. M Yusuf No. 451, Pekon Rejosari, Kecamatan Pringsewu, Rejosari, Kec. Pringsewu, Kabupaten Pringsewu, Lampung 35373</span>, Indonesia di bangun diatas tanah seluas 15150 M. Adapun sarana dan prasarana yang dimiliki SMK Kosgoro Penawartama adalah sebagai berikut:</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" class=\"table table-bordered table-striped\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Uraian</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Jumlah</strong></p>\r\n			</td>\r\n			<td rowspan=\"2\">\r\n			<p><strong>Satuan</strong></p>\r\n			</td>\r\n			<td colspan=\"3\">\r\n			<p><strong>Kondisi</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Baik</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Cukup</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Kurang</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ruang Kelas</p>\r\n			</td>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p>Ruang</p>\r\n			</td>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Perpustakaan</p>\r\n			</td>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>Ruang</p>\r\n			</td>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ruang Guru</p>\r\n			</td>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>Ruang</p>\r\n			</td>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ruang Kepala Sekolah</p>\r\n			</td>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>Ruang</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Buku Paket</p>\r\n			</td>\r\n			<td>\r\n			<p>120</p>\r\n			</td>\r\n			<td>\r\n			<p>Buah</p>\r\n			</td>\r\n			<td>\r\n			<p>87</p>\r\n			</td>\r\n			<td>\r\n			<p>22</p>\r\n			</td>\r\n			<td>\r\n			<p>10</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Buku Penunjang</p>\r\n			</td>\r\n			<td>\r\n			<p>30</p>\r\n			</td>\r\n			<td>\r\n			<p>Buah</p>\r\n			</td>\r\n			<td>\r\n			<p>17</p>\r\n			</td>\r\n			<td>\r\n			<p>8</p>\r\n			</td>\r\n			<td>\r\n			<p>7</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Lapangan Olahraga</p>\r\n			</td>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Komputer</p>\r\n			</td>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>Buah</p>\r\n			</td>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Toilet</p>\r\n			</td>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>Ruang</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Sumber Air</p>\r\n			</td>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>1</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', '', ''),
(9, '24032020120042.jpg', 'Y', 'Sambuatan Kepala Sekolah Madrasah Aliyah Mathlaul ', '<p>Assalamu&rsquo;alaikum Wr. Wb., Tabik Pun&hellip;</p>\r\n\r\n<p>Segala puji syukur kami panjatkan kehadirat Allah swt, Tuhan Yang Maha Esa, atas segala Karunia dan Nikmat-Nya kami bersama anda dan masyarakat masih ikut serta dalam menjalankan dan mengelola dunia pendidikan. Di era global saat ini, kemajuan teknologi dan informasi melalui media luar biasa pesatnya. SMK Kosgoro Penawartama menangkap hal ini sebagai sebuah perubahan dan kemajuan yang harus dikelola secara bijak dan profesional untuk memajukan dunia pendidikan.</p>\r\n\r\n<p>Kehadiran website resmi SMK Kosgoro Penawartama merupakan salah satu implementasi program sekolah untuk menciptakan pengelolaan sekolah berbasis IT dimulai dengan proses pembelajaran, pengembangan kemampuan menulis bagi GTK dan siswa, berbagai informasi penting serta upaya kerjasama dengan masyarakat, alumni dan pemerintah.</p>\r\n\r\n<p>Dengan web ini saya sangat berharap partisispasi aktif dari seluruh stakeholder dan seluruh pihak-pihak yang terkait untuk berkontribusi secara konstruktif untuk pengembangan dan kemajuan sekolah dalamkerangka pencapaian visi misi sekolah.</p>\r\n\r\n<p>Semoga bermanfaat dan Allah swt meridhoinya, aamiin.</p>\r\n\r\n<p>Wassalamu&rsquo;alaikum Wr Wb<br />\r\nKepala SMK Kosgoro Penawartama</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dr.H. Muhtasor, S.Pd., M.M.</p>\r\n', '', '', ''),
(7, '', 'Y', 'tes', '', '', '', ''),
(2, '', 'N', 'SMK Kosgoro Penawartama  ', '<table class=\"table table-bordered table-hover table-striped\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:192px\">\r\n			<p>Nama&nbsp;&nbsp; Sekolah &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</p>\r\n			</td>\r\n			<td style=\"width:49px\">\r\n			<p><strong>:</strong></p>\r\n			</td>\r\n			<td style=\"width:247px\">\r\n			<p>SMK Ma&rsquo;arif Pringsewu</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:192px\">\r\n			<p>NPSN</p>\r\n			</td>\r\n			<td style=\"width:49px\">\r\n			<p><strong>:</strong></p>\r\n			</td>\r\n			<td style=\"width:247px\">\r\n			<p>69899829</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:192px\">\r\n			<p>Alamat</p>\r\n			</td>\r\n			<td style=\"width:49px\">\r\n			<p><strong>:</strong></p>\r\n			</td>\r\n			<td style=\"width:247px\">\r\n			<p>Jl. M Yusuf No 451 Pekon Rejosari Kecamatan Pringsewu&nbsp; Kabupaten &nbsp;Pringsewu 35373</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:192px\">\r\n			<p>Email &nbsp;</p>\r\n			</td>\r\n			<td style=\"width:49px\">\r\n			<p><strong>:</strong></p>\r\n			</td>\r\n			<td style=\"width:247px\">\r\n			<p>smkmaarifpringsewu@gmail.com</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:192px\">\r\n			<p>Bidang Keahlian &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:49px\">\r\n			<p><strong>:</strong></p>\r\n			</td>\r\n			<td style=\"width:247px\">\r\n			<p>Teknologi Informasi dan Komunikasi</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:192px\">\r\n			<p>Program Keahlian &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:49px\">\r\n			<p><strong>:</strong></p>\r\n			</td>\r\n			<td style=\"width:247px\">\r\n			<p>Teknik Komputer dan Jaringan</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:192px\">\r\n			<p>Program Studi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:49px\">\r\n			<p><strong>:</strong></p>\r\n			</td>\r\n			<td style=\"width:247px\">\r\n			<p>Teknologi Informatika</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:192px\">\r\n			<p>Jenjang</p>\r\n			</td>\r\n			<td style=\"width:49px\">\r\n			<p><strong>:</strong></p>\r\n			</td>\r\n			<td style=\"width:247px\">\r\n			<p>SMK ( 3 tahun )</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:192px\">\r\n			<p>Yayasan</p>\r\n			</td>\r\n			<td style=\"width:49px\">\r\n			<p><strong>:</strong></p>\r\n			</td>\r\n			<td style=\"width:247px\">\r\n			<p>Lembaga Pendidikan Ma&rsquo;arif&nbsp; NU Kab. Pringsewu</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:192px\">\r\n			<p>Izin Pendirian dan Penyelengaraan &nbsp;Sekolah Swasta Kabupaten Pringsewu</p>\r\n			</td>\r\n			<td style=\"width:49px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:247px\">\r\n			<p>Dinas Pendidikan, Kebudayaan dan &nbsp; &nbsp; Pariwisata Kabupaten Pringsewu Tanggal 21 Jan &nbsp;No.420/07/D.01/DP4/2015</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style=\"clear:both;\">&nbsp;</div>\r\n', 'Jl.Kaca Pura, Semaka, Kabupaten Tanggamus, Lampung 35386', '05454854', 'mfsgfsgf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('127.0.0.1', '2015-07-30', 25, '1438261532'),
('127.0.0.1', '2015-07-29', 83, '1438143948'),
('127.0.0.1', '2015-07-28', 299, '1438090018'),
('127.0.0.1', '2015-07-27', 2, '1437938111'),
('127.0.0.1', '2015-07-21', 2, '1437421280'),
('127.0.0.1', '2015-07-20', 4, '1437397546'),
('127.0.0.1', '2015-07-19', 1, '1437273535'),
('127.0.0.1', '2015-07-14', 2, '1436827230'),
('127.0.0.1', '2015-07-10', 32, '1436479501'),
('127.0.0.1', '2015-07-09', 6, '1436450105'),
('127.0.0.1', '2015-07-06', 3, '1436190173'),
('127.0.0.1', '2015-07-04', 16, '1436021657'),
('127.0.0.1', '2014-11-16', 1, '1416155815'),
('127.0.0.1', '2015-06-26', 93, '1435274277'),
('127.0.0.1', '2015-06-25', 8, '1435216355'),
('127.0.0.1', '2015-06-24', 25, '1435115130'),
('127.0.0.1', '2015-06-23', 79, '1435013258'),
('127.0.0.1', '2015-06-22', 87, '1434950989'),
('127.0.0.1', '2015-06-21', 85, '1434898290'),
('127.0.0.1', '2015-06-20', 1, '1434767906'),
('127.0.0.1', '2015-06-17', 3, '1434504192'),
('127.0.0.1', '2015-06-16', 18, '1434415543'),
('127.0.0.1', '2015-06-15', 4, '1434354529'),
('127.0.0.1', '2014-10-09', 142, '1412819398'),
('127.0.0.1', '2015-06-14', 1, '1434234822'),
('127.0.0.1', '2015-06-13', 1, '1434150882'),
('127.0.0.1', '2015-06-12', 61, '1434119389'),
('127.0.0.1', '2015-06-11', 3, '1434023693'),
('127.0.0.1', '2015-06-10', 6, '1433940779'),
('127.0.0.1', '2015-05-30', 637, '1432972637'),
('127.0.0.1', '2015-07-31', 207, '1438281757'),
('127.0.0.1', '2017-01-08', 13, '1483847918'),
('127.0.0.1', '2017-01-09', 46, '1483931511'),
('127.0.0.1', '2017-01-11', 48, '1484108368'),
('127.0.0.1', '2017-01-19', 2, '1484793160'),
('127.0.0.1', '2017-02-14', 6, '1487038504'),
('127.0.0.1', '2017-03-14', 48, '1489499795'),
('127.0.0.1', '2017-03-19', 1, '1489901636'),
('127.0.0.1', '2017-03-29', 42, '1490774073'),
('127.0.0.1', '2017-05-31', 62, '1496193032'),
('127.0.0.1', '2017-06-03', 213, '1496453980'),
('127.0.0.1', '2017-06-05', 126, '1496630242'),
('127.0.0.1', '2017-06-06', 19, '1496740622'),
('127.0.0.1', '2017-06-08', 173, '1496886280'),
('127.0.0.1', '2017-06-14', 46, '1497450733'),
('127.0.0.1', '2017-06-15', 1, '1497491607'),
('127.0.0.1', '2017-07-12', 10, '1499825898'),
('127.0.0.1', '2017-10-10', 13, '1507599072'),
('127.0.0.1', '2017-12-28', 1, '1514445664'),
('127.0.0.1', '2018-07-09', 16, '1531150020'),
('127.0.0.1', '2018-08-04', 18, '1533349352'),
('127.0.0.1', '2018-08-12', 3, '1534063313'),
('127.0.0.1', '2020-03-19', 76, '1584593683'),
('::1', '2020-03-19', 67, '1584598594'),
('127.0.0.1', '2020-03-23', 2, '1584932707'),
('::1', '2020-03-22', 26, '1584889153'),
('192.168.43.79', '2020-03-22', 1, '1584886313'),
('1.2.3.4', '2020-03-22', 3, '1584886979'),
('::1', '2020-03-23', 261, '1584998073'),
('::1', '2020-03-24', 33, '1585062087'),
('::1', '2020-03-25', 43, '1585141904'),
('::1', '2020-03-28', 52, '1585370498'),
('::1', '2020-03-31', 9, '1585622415'),
('::1', '2020-04-04', 1, '1585983615'),
('::1', '2020-06-01', 25, '1591021884'),
('::1', '2020-06-02', 4, '1591085049'),
('::1', '2020-06-06', 46, '1591429988'),
('::1', '2020-06-08', 59, '1591604506'),
('::1', '2020-06-14', 6, '1592103005'),
('::1', '2020-06-29', 1, '1593409148'),
('::1', '2020-07-06', 76, '1594049631'),
('::1', '2020-07-07', 83, '1594135726'),
('::1', '2020-07-08', 19, '1594192778'),
('::1', '2020-07-09', 6, '1594264787'),
('::1', '2020-07-12', 5, '1594526758');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(7) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `benar` varchar(20) NOT NULL,
  `salah` varchar(20) NOT NULL,
  `kosong` varchar(20) NOT NULL,
  `score` varchar(20) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `tampil` enum('N','Y') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengaturan_ujian`
--

CREATE TABLE `tbl_pengaturan_ujian` (
  `id` int(4) NOT NULL,
  `nama_ujian` varchar(20) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `nilai_min` varchar(20) NOT NULL,
  `peraturan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengaturan_ujian`
--

INSERT INTO `tbl_pengaturan_ujian` (`id`, `nama_ujian`, `waktu`, `nilai_min`, `peraturan`) VALUES
(1, ' Tes Ujian Masuk', '120', '50', '<ol><li>Bacalah dengan teliti tiap-tiap soal sebelum menjawab</li><li>Pengerjaan Soal-soal ujian akan diberikan batasan waktu, apabila waktu telah habis, anda tidak dapat lagi mengisi / mengoreksi kembali jawaban dari soal-soal yang tersedia. Begitu pula sebaliknya apabila waktu yang tersedia masih ada maka anda dapat secara bebas mengoreksi kembali jawaban-jawaban anda . <br></li><li>Skor atau nilai hanya akan ditampilkan saja tanpa adanya sertifikasi nilai untuk di download.<br></li></ol>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(5) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(30) NOT NULL,
  `b` varchar(30) NOT NULL,
  `c` varchar(30) NOT NULL,
  `d` varchar(30) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jawaban`, `gambar`, `tanggal`, `aktif`) VALUES
(9, 'User atau Operator Komputer dalam Istilah Komputer disebut dengan..?', 'Brainware', 'Fireware', 'Software', 'Hardware', 'a', '', '0000-00-00', 'Y'),
(10, 'CPU Merupakan Singkatan dari', 'Central Progamming Unit', 'Central Promoting Unit', 'Central Processing Unit', 'Central Producing Unit', 'c', '', '0000-00-00', 'Y'),
(11, 'Jaringan dari elemen-elemen yang saling berhubungan adalah ?', 'pentium ', 'instal', 'system', 'data', 'c', '', '0000-00-00', 'Y'),
(12, 'Berikut merupakan elemen-elemen sistem komputer kecuali...?', 'Fireware', 'Brainware', 'Software', 'Hadware', 'a', '', '0000-00-00', 'Y'),
(13, 'Program yang berisi perinta-perintah / perangkat lunak disebut...?', 'Pentium', 'Brainware', 'Hardware', 'software', 'd', '', '0000-00-00', 'Y'),
(14, 'Proses memasukkan dan memasang software ke dalam komputer disebut...?', 'data', 'instal', 'loading', 'online', 'b', '', '0000-00-00', 'Y'),
(15, 'Berikut yang bukan termasuk alat output adalah...?', 'keyboard', 'speaker', 'monitor', 'printer', 'a', '', '0000-00-00', 'Y'),
(16, 'Tanda panah (tanda lain) yang mewakili posisi gerakan mouse disebut dengan...?', 'kursor', 'mouse', 'pointer', 'printer', 'c', '', '0000-00-00', 'Y'),
(17, 'Fungsi printer adalah untuk....?', 'mengeluarkan suara', 'mencetak dokumen', 'menyimpan dokumen', 'salah semua', 'a', '70printer.jpg', '0000-00-00', 'Y'),
(18, 'USB merupakan singkatan dari', 'universal serial buss', 'unit serial bus', 'Universal Serial Bus', 'Unit serial booster', 'c', '', '0000-00-00', 'Y'),
(19, 'Salah satu perangkat Lunak pengolah kata adalah', 'Ms.Word', 'Winamp', 'CC cleaner', 'Jet audio', 'a', '', '0000-00-00', 'Y'),
(20, 'Program yang digunakan untuk disain gambar adalah..?', 'Ms.Exel', 'Media Player', 'Power Point', 'Photoshop', 'd', '', '0000-00-00', 'Y'),
(21, 'Yang bukan termasuk Hadware / Perangkat Keras adalah..', 'CPU', 'Keyboard', 'Ms.Office', 'Printer', 'c', '', '0000-00-00', 'Y'),
(26, 'apa yang di maksud dengan gambar di atas...<br>', 'printer', 'kibot', 'USB', 'mose', 'd', '71mose.jpg', '2014-03-21', 'Y'),
(27, 'perangkat berikut yang tidak termasuk jenis memori adalah...<br>', 'Hardisk', 'Disket', 'RAM', 'CPU', 'd', '', '0000-00-00', 'Y'),
(28, 'di bawah ini mana yang&nbsp; bukan aktivitas berinternet...<br>', 'crossing', 'Browsing', 'chatting', 'surfing', 'a', '', '0000-00-00', 'Y'),
(34, '<p>Berikut ini adalah tugas dari perbankan di Indonesia.</p>\r\n\r\n<p>1. &nbsp; mengatur, menjaga dan memelihara kestabilan nilai tukar rupiah</p>\r\n\r\n<p>2. &nbsp; memberikan kredit jangka pendek</p>\r\n\r\n<p>3. &nbsp; mengusahakan tercapainya sistem perbankan yang sehat</p>\r\n\r\n<p>4. &nbsp; menghimpun dana dari masyarakat dalam bentuk giro, deposito dan tabungan</p>\r\n\r\n<p>5. &nbsp; meningkatkan likuiditas uang beredar</p>\r\n\r\n<p>6. &nbsp; menerima dan membayar kembali uang dalam rekening koran Dari pernyataan di atas yang merupakan tugas Bank Umum yaitu ... &nbsp;?</p>\r\n', ' 1, 2, dan 3 ', ' 1, 3, dan 5', '2, 3, dan 5', '2, 3, dan 6', 'a', '30072015121732.jpg', '0000-00-00', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_log` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `jam_log` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `email`, `id_session`, `tgl_log`, `jam_log`) VALUES
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@yahoo.com', '31n2rbqe4vg4663k4mgej017d3', '17/06/2023', '11:37 AM');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id_bukutm`);

--
-- Indeks untuk tabel `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_d`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kat_download`
--
ALTER TABLE `kat_download`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_gr`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_daftar`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tbl_pengaturan_ujian`
--
ALTER TABLE `tbl_pengaturan_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id_bukutm` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `download`
--
ALTER TABLE `download`
  MODIFY `id_d` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `kat_download`
--
ALTER TABLE `kat_download`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_tamu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_gr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengaturan_ujian`
--
ALTER TABLE `tbl_pengaturan_ujian`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
