-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 06:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes_dpw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_air_terjun`
--

CREATE TABLE `tabel_air_terjun` (
  `air_terjun_id` int(11) NOT NULL,
  `img_air_terjun` text NOT NULL,
  `nama_air_terjun` varchar(255) NOT NULL,
  `deskripsi_air_terjun` text NOT NULL,
  `link_google_maps_air_terjun` varchar(500) NOT NULL,
  `ketinggian_air_terjun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_air_terjun`
--

INSERT INTO `tabel_air_terjun` (`air_terjun_id`, `img_air_terjun`, `nama_air_terjun`, `deskripsi_air_terjun`, `link_google_maps_air_terjun`, `ketinggian_air_terjun`) VALUES
(4, 'https://www.nativeindonesia.com/foto/2020/11/Curug-atau-Air-terjun-Sikarim-1.jpg', 'Air Terjun Sikarim', '<p>Referensi pertama dari air terjun yang ada di Wonosobo adalah Air Terjun Sikarim. Letaknya di Desa Mlandi, Wonosobo, Jawa Tengah, dengan ketinggian 1.800 mdpl (meter diatas permukaan laut). Curug Sikarim sangatlah indah. Entah itu dilihat dari jauh atau pun dari dekat. Dan siapa pun pasti akan menyukainya. Selain karena keindahannya, juga karena akses jalan menuju air terjunnya yang tergolong mudah. Meskipun harus melewati beberapa tikungan tajam. Kenapa air terjun ini disebut sebagai Sikarim, itu ternyata karena di tempat tersebut terdapat makam keramat. Nama orang yang dimakamkannya adalah syech Abdul Karim.</p>\r\n\r\n<p>Airnya mengalir melewati tebing batu yang sangat tinggi, terdapat beberapa aliran air di tebing tersebut. Air yang mengalir tersebut berasal dari Telaga Cebong.</p>\r\n\r\n<p>Kamu akan merasakan udara yang sangat dingin ketika berada di Air Terjun Sikarim, keadaan alam yang berkabut pun akan kamu temui disini. Bahkan bagian atas Air Terjun Sikarim akan seakan hilang tertutup kabut. Kamu dapat mendekati aliran Air Terjun Sikarim dengan cara menaiki beberapa batu yang terdapat disekitarnya, namun kamu harus berhati-hati saat menapaki bebatuan tersebut.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3849.7590179274175!2d109.90219197819265!3d-7.2425253524553375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700c81ef0bccbb%3A0xcf5bc3a061c29507!2sAir%20Terjun%20Sikarim!5e1!3m2!1sen!2sid!4v1690080269005!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 125),
(5, 'https://ik.imagekit.io/tvlk/blog/2022/11/Air-Terjun-Curug-Winong-Wonosobo-Shutterstock.jpg?tr=dpr-2,w-675', 'Air Terjun Curug Winong', '<p>Air terjun berikutnya yang ada di Wonosobo adalah Air Terjun Curug Winong. Lokasinya ada di Satu, Winongsari, Kaliwiro, Wonosobo, Jawa Tengah. Curug Winong ini unik. Bahkan disebut sebagai mutiara alam Wonosobo yang masih perawan. Kenapa demikian, sebab curug ini sangatlah menawan. Masih jarang dikunjungi. Bentuknya yang seperti alat seluncur serta airnya yang jernih dan jatuh di dinding-dinding batu hitam membuat pemandangan curug ini luar biasa</p>\r\n\r\n<p>Air Terjun Curug Winong Terletak Di Dusun Temanggung Desa Winongsari Kecamatan Kaliwiro Kabupaten Wonosobo dengan Ketinggian 100 m Dengan Jarak Tempuh 24 Km dari Pusat Kota Kabupaten Wonosobo dan 4 Km dari Kota Kecamatan Kaliwiro.......Curug Winong dapat di akses melalui 2 Jurusan Via Selomerto Balekambang dan Sawangan Tunggoro Kaliwiro Harga Tiket Masuk Tempat Wisata Curuk Winong Rp.5.000 dan Parkir Untuk Roda 2 Rp.2.000</p>\r\n', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.8752603180374!2d109.89510391477607!3d-7.459891294618512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa31cbdbac645%3A0xcf79a6c9399171fd!2sCurug%20Winong%20Waterfall!5e1!3m2!1sen!2sid!4v1690079974858!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 100),
(6, 'https://www.gotravelly.com/blog/wp-content/uploads/2022/11/air-terjun-tritis-surga-bidadari.jpeg', 'Air Terjun Tritis Surga Bidadari', '<p>Berikutnya ada Air Terjun Tritis Surga Bidadari yang berlokasi di Desa gumelar, Kecamatan Wadaslintang, Wonosobo, Jawa Tengah.</p>\r\n\r\n<p>Air terjun ini pun tak kalah cantiknya dengan air terjun lain, bahkan dengan air terjun nomor 1 dan 2 yang sudah dijelaskan di atas. Kesejukan tempatnya dan keindahan pemandangannya dengan ketinggian curugnya yang sekitar 160 m, dijamin akan memanjakan mata siapa saja yang datang ke sana. Akan tetapi, akses menuju curug ini tak semulus ke curug yang lain. Kamu akan memerlukan tenaga lebih saat datang ke curug ini. Sebab puluhan anak tangga harus kamu lalui lebih dulu untuk bisa sampai ke curug ini.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.446347215008!2d109.84912257490456!3d-7.508508774074238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7abb4ffb3a4d6b%3A0x77c61e40b05ba3f0!2sPosko%20Wisata%20Air%20Terjun%20Tritis%20Surga%20Bidadari!5e1!3m2!1sen!2sid!4v1690080702564!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 159),
(7, 'https://mercusuar.co/wp-content/uploads/2023/07/Curug-Sigludug.jpg', 'Air Terjun Sigludug', '<p>Di Wonosobo ada juga air terjun yang namanya Air Terjun Sigludug. Air terjun ini berlokasi di Dusun. Lamuk, Wonosobo, Jawa Tengah. Menuju air terjun Sigludug juga tidak mudah. Terlebih di saat musim hujan melanda. Batuannya licin, tanahnya sedikit becek, dan pemandangan pun sedikit gelap. Akan tetapi tetap saja, begitu sampai di lokasinya, pemandangan menakjubkan akan tersaji di depan mata. Untuk yang gemar fotografi, air terjun Sigludug merupakan objek foto yang sangat menarik untuk diabadikan dengan kamera.</p>\r\n\r\n<p>Pemandangan air terjun Sigludug dengan ketinggian kurang lebih 75 meter ini&nbsp;memiliki dua sumber mata air yang mana terdapat air yang dingin dan juga hangat. Namun Karena akses jalan agak sempit lebih direkomendasi menggunakan roda dua saja untuk mencapai&nbsp;air terjun Sigludug. Untuk biaya masuk sebesar Rp. 5.000/orang dengan tambah biaya retribusi parkiran.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3849.6436447984142!2d109.84824177490103!3d-7.256024371283432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70092f88514843%3A0x4d2ad231d0b0299!2sAir%20Terjun%20Sigludug!5e1!3m2!1sen!2sid!4v1690086171788!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 75),
(8, 'https://ihategreenjello.com/wp-content/uploads/2023/06/Pesona-Destinasi-Objek-Wisata-Curug-Sirawe-di-Wonosobo-Jawa-Tengah.jpg ', 'Air Terjun Sirawe', '<p>Objek Wisata Curug Sirawe di Wonosobo Jawa Tengah adalah salah satu tempat wisata yang berada di Dusun Bitingan, Kecamatan Kepakisan, Jawa Tengah, Indonesia. Objek Wisata Curug Sirawe di Wonosobo Jawa Tengah adalah tempat wisata yang ramai dengan wisatawan pada hari biasa maupun hari liburan. Tempat ini sangat indah dan bisa memberikan sensasi yang berbeda dengan aktivitas kita sehari hari.</p>\r\n\r\n<p>Objek Wisata Curug Sirawe di Wonosobo Jawa Tengah memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat di sayangkan jika anda berada di kota Wonosobo tidak mengunjungi Objek Wisata Curug Sirawe di Wonosobo Jawa Tengah yang mempunyai keindahan yang tiada duanya tersebut.</p>\r\n\r\n<p>Objek Wisata Curug Sirawe di Wonosobo Jawa Tengah sangat cocok untuk mengisi kegiatan liburan anda, apalagi saat liburan panjang seperti libur nasional, ataupun hari ibur lainnya. Keindahan Objek Wisata Curug Sirawe di Wonosobo Jawa Tengah ini sangatlah baik bagi anda semua yang berada di dekat atau di kejauhan untuk merapat mengunjungi tempat Objek Wisata Curug Sirawe di kota Wonosobo.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3850.2844283912577!2d109.88825457489999!3d 7.180731470471298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700d983001c8bb%3A0x7ea7965ea667e6c9!2sAir%20terjun%20tersembunyi(curuk%20sirawe)!5e1!3m2!1sen!2sid!4v1690086581364!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 80);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_danau`
--

CREATE TABLE `tabel_danau` (
  `danau_id` int(11) NOT NULL,
  `img_danau` text NOT NULL,
  `nama_danau` varchar(255) NOT NULL,
  `deskripsi_danau` text NOT NULL,
  `link_google_maps_danau` varchar(500) NOT NULL,
  `luas_danau` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_danau`
--

INSERT INTO `tabel_danau` (`danau_id`, `img_danau`, `nama_danau`, `deskripsi_danau`, `link_google_maps_danau`, `luas_danau`) VALUES
(6, 'https://asset.kompas.com/crops/v8I7timt5QLg-u281UG7uprMaPw=/81x35:741x475/750x500/data/photo/2022/10/05/633d6e0f1a6c1.png ', 'Telaga Menjer', '<p>Telaga Menjer ini terbentuk dari letusan Gunung Pakuwaja yang dulunya aktif. Sebelum terjadi letusan dari gunung berapi tersebut, tempat ini hanyalah sebuah mata air kecil. Telaga ini menjadi semakin dalam dan luas dengan dibangunnya bendungan. Selain menjadi tempat wisata, telaga ini juga dimanfaatkan untuk pembangkit listrik tenaga air dengan dibangunnya bendungan di tempat tersebut. Bendungan tersebut kini dikelola oleh PLTA Garung.</p>\r\n\r\n<p>Harga tiket masuk pada saat itu adalah 3.000 rupiah per orang baik wisatawan domestik maupun mancanegara. Selain biaya tiket masuk, traveler juga harus membayar parkir dengan harga pada umumnya. Harga tersebut bisa berubah sewaktu-waktu. Biasanya pada hari libur seperti akhir tahun dan Lebaran harga tiket naik.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7699.074004999241!2d109.92013374090999!3d-7.2684796782958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700b1605a98fe1%3A0xc5f37c5a6d5cecad!2sTelaga%20Menjer!5e1!3m2!1sen!2sid!4v1690092445180!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 700000),
(7, 'https://asset-2.tstatic.net/jogja/foto/bank/images/telaga-warna-dieng-wonosobo-ok.jpg', 'Telaga Warna', '<p>Bukan hanya pemandangannya yang indah, namun udaranya begitu sejuk, terlebih di Dieng, karena berada di dataran tinggi.Tempat wisatanya juga unik dan tidak bisa ditemukan di tempat lain. Salah satunya adalah Telaga Warna. Danau belerang ini tentunya unik bagi wisatawan karena warnanya yang hijau kekuningan. Telaga Warna tepatnya berlokasi di Dieng Wetan, Kecamatan Kejajar, Kabupaten Wonosobo, Jawa Tengah. Tempat wisata ini cukup dekat dari tulisan &ldquo;Welcome to Dieng Wonosobo&rdquo; yang ada di pertigaan. Jaraknya hanya sekitar 1,3 kilometer (km) dengan waktu tempuh kurang-lebih 5 menit saja. Telaga Warna pun jadi salah satu tempat wisata di Dieng yang biasa dikunjungi wisatawan saat liburan. Itu karena lokasinya yang berdekatan dengan tempat wisata ikonik lain di Dataran Tinggi Dieng, seperti Candi Arjuna dan Kawah Sikidang.</p>\r\n\r\n<p>Oleh karena itu, wisatawan perlu mengetahui jam buka dan tutup wisata Telaga Warna agar bisa menentukan jadwal kunjungan. Jangan sampai berkunjung saat sudah tutup atau malah belum buka.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15400.031874015567!2d109.90497804621806!3d-7.213311746683515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700cefeafe2475%3A0xec2dd3197faf5f2a!2sTelaga%20Warna!5e1!3m2!1sen!2sid!4v1690092475074!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 400000),
(8, 'https://www.nativeindonesia.com/foto/2022/12/plta.jpg', 'Waduk Wadaslintang', '<p>Waduk Wadaslintang termasuk bendungan tertinggi di Indonesia, dimana tingginya di atas 100 meter yang dibangun sekitar tahun 1988 berada di perbatasan Kabupaten Wonosobo dan Kabupaten Kebumen. Posisi bendungan yang berada di ketinggian membuat wisata di Waduk Wadaslintang menarik untuk dilakukan, spot self healing yang tenang dan damai. Selain dijadikan lokasi hulang-healing kawasan WWL atau Waduk Wadaslintang juga sering dimanfaatkan para mancing mania untuk dijadikan lokasi memancing.</p>\r\n\r\n<p>Waduk Wadaslintang jaraknya cukup jauh dari pusat kota, yakni memakan waktu perjalanan sekitar 1 jam lebih dengan jarak tempuh hampir 50 km. Sedangkan dari Lubang Sewu hanya memakan waktu sekitar 6 menit saja dengan menggunakan mobil, dan dari Taman Badegolan sekitar 6 km dengan waktu tempuh 14 menit. Untuk kamu yang berangkat dari Alun-Alun Wonosobo dengan menuju Jl. Merdeka teruskan perjalanan hingga akhirnya tiba di Jl. Kyai Muntang. Lalu belok kiri ke Jl. Ajibarang Secang, belok kiri lagi ke Jl. Selomerto &ndash; Madukara. Teruslah lurus untuk tiba di Jl. Raya Wadaslintang, dan carilah lokasi yang nyaman untuk memakirkan kendaraan.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61549.394583575966!2d109.73839937966011!3d-7.577027130220048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ab992cc7c6061%3A0xcf5eb38e7fcd7d7a!2sWadaslintang%20Reservoir!5e1!3m2!1sen!2sid!4v1690092537564!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 13200),
(9, 'https://www.nativeindonesia.com/foto/2023/01/telaga-cebong.jpg', 'Telaga Cebong', '<p>Telaga Cebong salah satu spot wisata yang ada di sekitar Gunung Sikunir, sering dijadikan lokasi untuk mendirikan tenda. Gunung Sikunir sendiri sudah kami bahas di artikel sebelumnya. Gunung Sikunir atau Bukit Sikunir memiliki ketinggian sekitar 2.263 mdpl, spot terbaik untuk menikmati sunrise di pagi hari. Tentu saja hal tersebut menjadi daya tarik tersendiri bagi tempat wisata Dieng yang bernama Telaga Cebong ini, dan menjadi salah satu tempat camping yang digemari khususnya oleh para pecinta alam.</p>\r\n\r\n<p>Daya tarik pertama dari Telaga Cebong ini tak lain dan tak bukan merupakan kawasan wisata yang ramai untuk berkemah, dan bisa juga untuk camping keluarga. Lokasi mendirikan tendanya tepat di samping Telaga Cebong, meski tidak terlalu luas namun dapat menampung beberapa puluh tenda dalam satu waktu. Bahkan ada pula area untuk mendirikan tenda tepat di samping mobil, dimana hal tersebut viral beberapa tahun terakhir ini. Untuk kamu yang tidak membawa perlengkapan berkemah, dapat menyewanya di tempat yang sudah tersedia. Dengan biaya sewa tenda di Telaga Cebong sebesar Rp. 200.000,- untuk tenda berukuran 2 hingga 3 orang. Hanya saja harus siap dengan udara dingin yang semakin malam akan semakin terasa, bahkan suhunya bisa mencapai 10 derajat bahkan kurang. Oleh karena itu, persiapkan perlengkapan baju hangat serta obat-obatan yang biasa digunakan.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15399.255792414222!2d109.90970024622321!3d-7.236089547399949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700c9961ca3c31%3A0x5f251c6b6795bd39!2sTelaga%20Cebong!5e1!3m2!1sen!2sid!4v1690092586760!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 120000),
(10, 'https://3.bp.blogspot.com/-yl1Rf0H4MnM/V9QdN7IkN5I/AAAAAAAAABs/eT9L2dDuFdcdXuqJne6QnETVP88mqetJACLcB/s1600/Keajaiban%2BWisata%2BTelaga%2BPengilon%2BDieng%2BWonosobo%2B%2526%2BAsal-usulnya.jpg', 'Telaga Pengilon', '<p>Dua telaga yang disbeut juga sebagai telaga kembar ini snagat berdekatan, wisata Telaga Pengilon sendiri letaknya berada di sebelah selatan telaga Warna dan juga bersebalahn dengan Situs Gia Dieng. Dari pintu masuk menuju Telaga Pengilon ini hanya berjarak sekitar 300 meter dengan menyusuri jalan setapak. Lebih tepatnya, teaga ini berlokasi di Dieng Wetan, Kecamatan Kejajar, Wonosobo Jawa Tengah dan hanya berjarak sekitar 1 Km dari kawasan wisata Candi Dieng.</p>\r\n\r\n<p>Saat anda berada di dataran tinggi Dieng, maka wisata telaga cantik satu ini jangan sampai terlewatkan. Dengan segudang pesona alam yang dimilikinya bisa anda nikmati tanpa harus keluar banyak biaya. Ketika tulisan ini dimuat, harga tiket masuk Telaga Pengilon adalah sebesar Rp22.000 per orangnya. Tarif tersebut sudah termasuk dengan tiket masuk Telaga Warna, mengingat kedua destinasi berada di area yang sama.</p>\r\n\r\n<p>Dengan biaya tersebut, dapat dipastikan setiap pengunjung bisa jalan-jalan dan menyaksikan berbagai pemandangan menakjubkan sampai puas. Anda bisa membawa uang lebih, sebab disini tersedia beberapa fasiitas menarik. Seperti halnya berfoto dengan latar belakang telaga, yang dimana tarifnya mulai Rp5.000 sudah termasuk dengan cetak. Disini anda juga bisa jajan, seperti misalnya menyantap kentang rebus / goreng untuk menghangatkan suasana ditengah dinginnya Dieng.</p>\r\n\r\n<p>Aturan mengenai tiket masuk pada sebuah tempat wisata, khususnya Telaga Pengilon bsa berubah sewaktu-waktu.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15399.965716336616!2d109.90692244621846!3d-7.2152562467445485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700ceef9e86dab%3A0x991e811776f05ad!2sTelaga%20Pengilon!5e1!3m2!1sen!2sid!4v1690092645876!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 395999);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_destinasi`
--

CREATE TABLE `tabel_destinasi` (
  `destinasi_id` int(11) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `img_destinasi` text NOT NULL,
  `deskripsi_destinasi` text NOT NULL,
  `link_google_maps_destinasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_destinasi`
--

INSERT INTO `tabel_destinasi` (`destinasi_id`, `nama_destinasi`, `img_destinasi`, `deskripsi_destinasi`, `link_google_maps_destinasi`) VALUES
(10, 'Batu Pandang Ratapan Angin', 'https://www.pinhome.id/blog/wp-content/uploads/2017/11/cover-2.jpg', '<p>Pengunjung bisa melihat seluruh telaga dengan warna yang kerap berubah ini dengan jelas dari Batu Pandang Ratapan Angin. Selain menyajikan panorama yang begitu undah, Batu Pandang Ratapan Angin juga menjadi salah satu tempat berfoto terbaik di Dieng. Keindahan panorama yang tersaji di sana juga sangat pas sebagai latar belakang foto.</p>\r\n\r\n<p>Menjelang sampai obyek wisata Batu Pandang Ratapan Angin, akan ada pos retribusi. Di sini pengunjung harus membayar tiket masuk atau parkir kendaraan. Untuk sepeda motor, harga tiketnya hanyalah Rp 3.000. Pengelola juga menyediakan jasa titip helm. Pengunjung bisa menitipkan helm dengan tarif Rp 2.000 saja. Helm akan lebih aman jika dititipkan di sana, terlebih saat sedang ramai kunjungan.</p>\r\n\r\n<p>Selanjutnya pengunjung akan sampai di area parkir Dieng Plateau Theater dan Batu Pandang Ratapan Angin. Dua obyek wisata itu dikelola oleh pihak berbeda sehingga loketnya pun berbeda.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7699.941375829455!2d109.916644!3d-7.217694!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700cedd920950f%3A0xb350f5061a06d0d3!2sBatu%20Pandang%20Ratapan%20Angin!5e1!3m2!1sid!2sid!4v1690087266480!5m2!1sid!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(11, 'Bukit Sikunir', 'https://www.trivindo.com/data/upload/2017/02/bukit-sikunir-3.jpg', '<p>Bukit yang memiliki ketinggian sekitar 2.300 mdpl ini menawarkan keindahan berupa pemandangan delapan gunung di sekitarnya yang dapat terlihat dari puncak bukit. Bukit Sikunir juga terkenal dengan sebutan Golden Sunrise karena keindahan alam berupa sunrise atau matahari terbit akan tersaji jelas bagi wisatawan yang sampai ke puncaknya.</p>\r\n\r\n<p>Bukit ini terbilang mudah untuk pendakian sampai ke puncak. Wisatawan yang datang hanya perlu memakan waktu 30-45 menit untuk sampai ke puncak bukit. Jadi jika kamu mendaki pukul 05.00 WIB pun, golden sunrise Bukit Sikunir tetap bisa kamu lihat. Tak butuh waktu lama untuk menggapai puncak bukit yang berlokasi di Desa Sembungan, Kejajar, Wonosobo ini. Kamu akan melalui jalan setapak yang telah tertata selama pendakian.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3849.7882300404217!2d109.92171817490075!3d-7.239103471100138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700c9f673eedcf%3A0xb11d96d5bd9e2fe3!2sSikunir%20Hill%20Dieng!5e1!3m2!1sen!2sid!4v1690088058985!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(12, 'Candi Arjuna', 'https://indonesiakaya.com/wp-content/uploads/2020/10/4__Kompleks_ini_pertama_kali_ditemukan_Theodorf_Van_Elf_pada_abad_18__Upaya_penyelamatan_dilakukan_oleh_HC_Corneulius_dan_dilanjutkan_J_Van_Kirnbergens-1.jpg ', '<p>Candi Arjuna adalah sebuah bangunan candi Hindu yang terletak di Dataran Tinggi Dieng, Kabupaten Banjarnegara, Jawa Tengah, Indonesia. Candi Arjuna merupakan salah satu bangunan candi di Kompleks Percandian Arjuna, Dieng.</p>\r\n\r\n<p>Ketika berkunjung ke Kompleks Candi Arjuna, Anda tidak akan menemukan arca yang biasa menghiasi bangunan candi. Anda hanya akan melihat ruang-ruang kosong yang kerap dijadikan tempat untuk meletakkan arca. Sebagian besar arca yang berasal dari kompleks candi ini disimpan di Museum Kailasa, yang terletak tak jauh dari kompleks candi. Sementara itu, sebagian arca yang lain sudah hilang.</p>\r\n\r\n<p>Dari empat candi utama yang ada di kompleks ini, hanya Candi Arjuna yang memiliki candi sarana, yaitu Candi Semar. Candi sarana sendiri merupakan candi yang digunakan sebagai tempat berkumpul atau menunggunya para umat sebelum masuk ke candi utama. Candi Arjuna, sebagai candi utama di kompleks ini, juga diperkirakan sebagai candi tertua yang dibangun pada abad ke-8 Masehi oleh Dinasti Sanjaya dari Mataram Kuno.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3850.078367453878!2d109.9043636749003!3d-7.205029270732338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700cfe8a2a15eb%3A0xcfd9233d8b8bbb51!2sCandi%20Arjuna!5e1!3m2!1sen!2sid!4v1690088406502!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(13, 'Taman Rekreasi Kalianget', ' https://cdn2.tstatic.net/tribunnewswiki/foto/bank/images/Taman-Rekreasi-Kalianget.jpg', '<p>Taman Rekreasi Kalianget salah satu lokasi wisata keluarga yang selalu ramai dikunjungi, bukan hanya akhir pekan atau ketika berlibur saja. Lokasi wisata Wonosobo yang satu ini sempat ditutup sementara, karena proses renovasi. Dan baru dibuka kembali pada bulan Februari tahun 2022, dengan konsep dan suasana yang lebih nyaman tentunya. Bahkan Taman Rekreasi Kalianget Wonosobo ini digadang-gadang sebagai pemandian air panas terbesar di Jawa Tengah.</p>\r\n\r\n<p>Karena jika melihat seluruh kawasan dari Taman Rekreasi Kalianget Wonosobo ini sangat luas, kira-kira 9 hektar lebih lah. Dan membaginya menjadi beberapa kawasan atau bagian. Ditambah lagi pepohonan rindang masih menghiasi seluruh kawasan, hingga tampak sangat asri dan sejuk. Berikut ulasan dari Taman Rekreasi Kalianget Wonosobo.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15395.93085564471!2d109.910816!3d-7.332879!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa07b01a6629d%3A0xa46e8035fedfd76a!2sTaman%20Rekreasi%20Kalianget%20Wonosobo!5e1!3m2!1sen!2sid!4v1690088653865!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(14, 'Alun-alun Wonosobo', 'https://mercusuar.co/wp-content/uploads/2021/12/16ltetep-buka.jpeg ', '<p>Bagi kalian para traveller low budget pastinya wisata murah adalah tujuan trip kalian. Nah untuk itu destinasi wisata Alun-alun Wonosobo menjadi salah satu tempat yang wajib kalian kunjungi.</p>\r\n\r\n<p>Sempat menjadi Alun-alun terindah dan terbersih di Pulau Jawa membuat tempat ini selalu ramai dikunjungi setiap harinya. Baik oleh wisatawan ataupun masyarakat lokal yang biasanya berkunjung dipagi atau sore hari untuk sekadar bersantai. Namun terdapat banyak deretan penjual kaki lima dan street food sebagai kuliner enak yang bisa kamu eksplor. Tak perlu khawatir, jajanan tersebut dapat dinikmati dengan harga terjangkau dan murah meriah. Alun-Alun Wonosobo ini sangatlah luas yang bisa menampung banyaknya pengunjung terutama saat acara besar. Tempat ini menjadi obyek wisata yang memiliki pesona keindahan pepohonan rindang nan hijau memancarkan kesegaran.</p>\r\n\r\n<p>Suasana di Town Square ini begitu sejuk dan fresh, apalagi saat dini hari sebelum banyaknya polusi dari asap kendaraan. Ditanami banyak pepohonan rindang dan berbagai tanaman lainnya, serta berbagai fasilitas umum yang bisa dinikmati masyarakat. Kini lebih banyak fasilitas umum seperti alat olahraga, wahana bermain anak, pendopo, lapangan basket, gazebo, dan masih banyak lainnya. Saat berkunjung ke Wonosobo belum puas rasnya jika tak mampir dulu ke Pusat Kotanya.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15395.033281173612!2d109.9030928!3d-7.3587905!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa0ff266df64d%3A0xbb86598aeb9508b!2sAlun-Alun%20Wonosobo!5e1!3m2!1sen!2sid!4v1690088975729!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_gunung`
--

CREATE TABLE `tabel_gunung` (
  `gunung_id` int(11) NOT NULL,
  `img_gunung` text NOT NULL,
  `nama_gunung` varchar(255) NOT NULL,
  `deskripsi_gunung` text NOT NULL,
  `ketinggian_gunung` int(10) NOT NULL,
  `link_google_maps_gunung` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_gunung`
--

INSERT INTO `tabel_gunung` (`gunung_id`, `img_gunung`, `nama_gunung`, `deskripsi_gunung`, `ketinggian_gunung`, `link_google_maps_gunung`) VALUES
(8, 'https://asset.kompas.com/crops/BsKaZgDllZ8iRKeDGbY05n-hQcM=/0x0:780x520/750x500/data/photo/2019/02/01/29443210931.jpg', 'Gunung Sindoro', '<p>Gunung Sindoro yang disebut dengan Sindara atau Sundoro adalah sebuah gunung vulkano aktif&nbsp; yang berada di Jawa Tengah. Gunung Sindoro terletak berdampingan dengan Gunung Sumbing dan memiliki ketinggian 3.150 mdpl. Gunung Sindoro terletak di Kabupaten Wonosobo dan Kabupaten Temanggung, gunung ini memiliki kawah besar yang disebut dengan &lsquo;Kembang&rsquo;, kawah ini memiliki lava kecil yang ada di puncak Gunung Sindoro.</p>\r\n', 3150, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30793.958382300647!2d109.97832366852224!3d-7.302499512684031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70757555351a43%3A0x6e1fd0eaed14acb5!2sMount%20Sundoro!5e1!3m2!1sen!2sid!4v1690091185697!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(9, 'https://cdn.idntimes.com/content-images/community/2023/01/gunung-sumbing-eaac9f3d32868405c5dfcd975ddf4ffc-ffa7008ec5b32cfecf8495f76eda7968.jpg', 'Gunung Sumbing', '<p>Gunung Sumbing adalah gunung yang memiliki ketinggian 3.340 meter di atas permukaan laut yang menjadikan gunung yang tertinggi kedua di Jawa Tengah setelah Gunung Slamet. Gunung ini terletak di tiga wilayah kabupaten di Jawa Tengah yaitu Kabupaten Wonosobo, Kabupaten Temanggung dan Kabupaten Magelang. Gunung Sumbing berjenis stratovolcano dan tercatat pernah meletus pada tahun 1730.</p>\r\n', 3340, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d553026.663505258!2d109.80703157124238!3d-7.313901912133081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a9c697b1bf411%3A0x7cb176b5c2587d2d!2sMount%20Sumbing!5e1!3m2!1sen!2sid!4v1690091256471!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(10, 'https://cdn.idntimes.com/content-images/community/2023/01/gunung-prau-eaac9f3d32868405c5dfcd975ddf4ffc-67b71a52797d154b7d63b5d5387cd9a1.jpeg', 'Gunung Prau', '<p>Gunung Prau atau yang disebut dengan Gunung Prahu adalah wisata alam yang berada di dataran tinggi Dieng. Gunung Prau memiliki ketinggian 2.565 meter di atas permukaan laut. Gunung Prau menjadi gunung terfavorit di kalangan pendaki pemula, pasalnya Gunung Prau memiliki medan yang tidak terlalu sulit, selain itu Gunung Prau juga menyajikan panorama dan pemandangan alam yang sangat indah.</p>\r\n', 2565, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15400.927949179406!2d109.91247804621214!3d-7.186922845857821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700d1687dec7cb%3A0xc722cd27c1f9c86a!2sGunung%20Prau!5e1!3m2!1sen!2sid!4v1690091291221!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(11, 'https://cdn.idntimes.com/content-images/community/2023/01/gunung-kembang1-eaac9f3d32868405c5dfcd975ddf4ffc-66a4ad2ed033025562ff6db5dc2eb119.jpg ', 'Gunung Kembang', '<p>Gunung Kembang adalah salah satu gunung yang berada di Kabupaten Wonosobo. Kabupaten Wonosobo dikelilingi dengan beberapa gunung, yaitu Gunung Sumbing, Gunung Sindoro, Gunung Sikunir, Gunung Prau dan Gunung Kembang itu sendiri. Gunung Kembang terletak di Dukuh Blembem Kaliurip, Desa Damarkasihan, Kecamatan Kretek, Kabupaten Wonosobo. Gunung ini memiliki ketinggian sekitar 2.320 mdpl dan diyakini akan semakin bertambah.</p>\r\n', 2320, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510632.7514487092!2d109.42432664945308!3d-7.46078048297635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa32c816646e7%3A0x44be7804cff84400!2sGunung%20Kembang!5e1!3m2!1sen!2sid!4v1690091368508!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(12, 'https://cdn.idntimes.com/content-images/community/2022/12/master-2lvhu754d3-776-eaac9f3d32868405c5dfcd975ddf4ffc-8fd9eeb23df9afb6f7cb9ee67e737cf9.jpg ', 'Gunung Bismo', '<p>Gunung Bismo adalah salah satu gunung yang berada di Dataran Tinggi Dieng, selain Gunung Prau dan Gunung Kembang. Gunung ini terletak di sebelah selatan dari Dataran Tinggi Dieng, Kabupaten Wonosobo. Gunung ini memiliki ketinggian sekitar 2.365 meter diatas permukaan laut (mdpl) yang memiliki puncak bernama Puncak Indrapasta. Dari puncak inilah kita dapat melihat panorama alam yang sangat indah serta tampak Gunung Sindoro dan Gunung Sumbing menjulang tinggi dari arah selatan gunung ini. Itulah lima rekomendasi gunung yang berada di Kabupaten Wonosobo yang wajib kamu kunjungi. Jangan buang sampah sembarangan dan tetap utamakan keselamatan. Salam lestari.</p>\r\n', 2365, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51424.80146356541!2d109.81045346366852!3d-7.229723088069986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700b88f401c273%3A0xf93313399338905!2sGunung%20Bismo!5e1!3m2!1sen!2sid!4v1690091505687!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kalender_event`
--

CREATE TABLE `tabel_kalender_event` (
  `kalender_event_id` int(11) NOT NULL,
  `img_kalender_event` text NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `deskripsi_event` text NOT NULL,
  `tempat_event` varchar(255) NOT NULL,
  `tanggal_event` date NOT NULL,
  `link_google_maps_event` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kalender_event`
--

INSERT INTO `tabel_kalender_event` (`kalender_event_id`, `img_kalender_event`, `nama_event`, `deskripsi_event`, `tempat_event`, `tanggal_event`, `link_google_maps_event`) VALUES
(10, 'https://asset-2.tstatic.net/jateng/foto/bank/images/kontes-bonsai-wonosobo.jpg ', 'Pameran dan Kontes Bonsai Nasional \"Wonosobo The Soul Of Java\"', '<p>Kegiatan ini ditujukan untuk meramaikan bonsai di Wonosobo, serta memberi wadah bagi para penghobi bonsai tidak hanya di Wonosobo, namun juga nasional. &nbsp;Sekda Kabupaten Wonosobo, One Andang Wardoyo membuka langsung Pameran dan Kontes Bonsai Nasional 2023. Menurutnya, kegiatan ini dapat menjadi ajang mengenalkan tanaman ke masyarakat terlebih kaitannya dengan bonsai. Diharapkan bonsai akan semakin berkembang di Wonosobo hingga dapat menjadi pusatnya bonsai.</p>\r\n', 'Taman Rekreasi Kalianget', '2023-02-25', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15395.93085564471!2d109.910816!3d-7.332879!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa07b01a6629d%3A0xa46e8035fedfd76a!2sTaman%20Rekreasi%20Kalianget%20Wonosobo!5e1!3m2!1sen!2sid!4v1690088653865!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(11, 'https://1.bp.blogspot.com/-kOMjCTgbdaw/VqV1o-qM-3I/AAAAAAAAHWw/iI9YLtivOwk/s1600/Para%2BJuri%2Bsedang%2Bmenilai%2Bratusan%2Btanaman%2Bsansevieria%2B%2B%2Bpeserta%2Bkontes%2Bdi%2BWonosobo_1.JPG ', 'Kontes Sansiveria Nasional Sindoro Sumbing', '<p>Event tahunan bagi pencinta sansiveria ini akan diadakan pada tanggal 25 Februari - 26 Februari 2023. Lokasinya berada di Sasana Adipura Kencana.</p>\r\n', 'Sasana Adipura Kencana ', '2023-02-25', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15395.010731627946!2d109.9046295!3d-7.3594403!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa0564f874239%3A0x18134da6482cb32d!2sGedung%20Sasana%20Adipura!5e1!3m2!1sen!2sid!4v1690104007788!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(12, 'https://asset-2.tstatic.net/jateng/foto/bank/images/Kemeriahan-Festival-Literag-berlangsung-di-hala032023.jpg ', 'Festival Literasi', '<p>Mulai dari bazar buku murah, pameran arsip digital dan naskah kuno, pameran dan demo pembuatan bonsai, tanaman hias, kuliner, UMKM, parade seni budaya, bedah buku, hingga donor darah. Event ini digelar dengan tujuan sebagai bagian dari melakukan gerakan literasi masyarakat khususnya di Wonosobo. Berkaitan dengan hal ini, Festival Literasi berusaha memasukan informasi tambahan di dalam pameran produk-produk stand yang mengikuti. Selain itu juga turut berlangsung lomba membuat menu stunting sebagai upaya dalam mengatasi masalah stunting yang masih tinggi di Wonosobo. Puncak acara event Festival Literasi akan berlangsung kegiatan shalawat dan pemberian penghargaan yang berperan dalam bidang perpustakaan dan kearsipan.</p>\r\n', 'Dinas Kearsipan dan Perpustakaan Daerah (Arpusda) Kabupaten Wonosobo', '2023-02-27', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15395.001496778075!2d109.9018958!3d-7.3597064!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa0f89f00fad5%3A0x7e55ed29a12110d8!2sDinas%20Kearsipan%20Dan%20Perpustakaan%20Daerah%20Wonosobo!5e1!3m2!1sen!2sid!4v1690104718629!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe> '),
(13, 'https://diskominfo.wonosobokab.go.id/uploads/2023/Februari/20230228081624-1_1002.jpg ', 'Wonosobo Festival UKM EKSPO 2023', '<p>Guna mendukung Gerakan Nasional Bangga Buatan Indonesia dan Bangga Berwisata di Indonesia Saja serta memvisualisasikan berbagai produk dan layanan unggulan, Pemerintah Kabupaten Wonosobo akan selenggarakan Wonosobo Festival UKM Expo 2023 pada 1-5 Maret 2023 di Alun-alun Wonosobo.</p>\r\n\r\n<p>Acara pembukaan akan dihadiri langsung oleh Menteri Koperasi UKM Republik Indonesia berserta jajaran pejabat di lingkungan Kementerian Koperasi UKM. Gubernur Jawa Tengah, Jajaran Forkompimda Kabupaten Wonosobo, Bupati/Wali kota se-Jawa Tengah, Kepala Dinas Koperasi UKM Provinsi Jawa Tengah, Kepala Dinas Koperasi UKM se-Jawa Tengah, Pimpinan Perangkat Daerah di Kabupaten Wonosobo serta BUMN dan BUMD juga turut diundang dalam acara tersebut</p>\r\n\r\n<p>Selain expo terdapat beberapa rangkaian acara diantaranya adalah Rembug bareng pelaku UKM &amp; gerakan koperasi bersama Menkop UKM, workshop bagi pelaku UKM, fasilitas pengembangan jaringan pemasaran produk, dan pagelaran seni budaya Jumlah stand tersedia sebanyak 154 stand yang diisi Peserta Pameran dari dalam dan luar Wilayah Kabupaten Wonosobo</p>\r\n', 'Alun-alun Wonosobo', '2023-03-01', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15395.033281173612!2d109.9030928!3d-7.3587905!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa0ff266df64d%3A0xbb86598aeb9508b!2sAlun-Alun%20Wonosobo!5e1!3m2!1sen!2sid!4v1690088975729!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(14, 'https://asset-2.tstatic.net/jateng/foto/bank/images/Wonosobo-Tourism-Business-Forum-WTBF-2023.jpg ', 'Wonosobo Tourism Business Forum', '<p>Event ini mengenalkan sekaligus memasarkan potensi dari daerah kepada calon wisatawan luar daerah Wonosobo. Acaranya sendiri akan dilaksanakan pada tanggal 14 -16 Maret 2023.</p>\r\n\r\n<p>Kegiatan yang diselenggarakan oleh Omah Wisata (14 elemen pelaku wisata di Wonosobo), bersama Dinas Pariwisata dan Kebudayaan (Disparbud) Kabupaten&nbsp; Wonosobo, serta Badan Pelaksana Otorita Borobudur (BPOB) telah dibuka pada Selasa malam, (14/03/2023).&nbsp;</p>\r\n\r\n<p>Wonosobo menjadi daerah yang banyak destinasi wisata, dengan kegiatan WTBF menjadi ajang promosi potensi pariwisata, budaya, dan ekonomi kreatif di Wonosobo.&nbsp; Kegiatan ini tidak lain untuk meningkatkan kunjungan wisatawan, meningkatkan spending of money, dan meningkatkan lama tinggal wisatawan di Wonosobo.&nbsp; Didalamnya para pelaku wisata Wonosobo akan dipertemukan dengan para buyer dalam skala nasional.&nbsp; WTBF 4 Tahun 2023 diikuti dari berbagai daerah di Indonesia, seperti Jawa Timur, Jawa Tengah, DIY, Jawa Barat, Banten, DKI Jakarta, dan Bali.&nbsp;</p>\r\n', 'Pendopo Wonosobo', '2023-03-14', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1924.3850882244553!2d109.9019012577804!3d-7.357423699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa057c766dfc7%3A0x8190cbec2952e6d!2sPendopo%20Wonosobo!5e1!3m2!1sen!2sid!4v1690105338318!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_makanan_khas`
--

CREATE TABLE `tabel_makanan_khas` (
  `makanan_khas_id` int(11) NOT NULL,
  `img_makanan_khas` text NOT NULL,
  `nama_makanan_khas` varchar(255) NOT NULL,
  `deskripsi_makanan_khas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_makanan_khas`
--

INSERT INTO `tabel_makanan_khas` (`makanan_khas_id`, `img_makanan_khas`, `nama_makanan_khas`, `deskripsi_makanan_khas`) VALUES
(6, 'https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/09/24/3338866914.jpg ', 'Mie Ongklok', '<p>Makanan ini adalah sebutan mie ayam khas Wonosobo. Berbeda dengan mie ayam biasanya, mie ongklok disajikan dengan sate ayam. Cita rasanya hampir sama, yaitu memiliki rasa gurih, manis, dan dengan kuah yang kental. Jika kamu ingin membawa mie ongklok sebagai oleh-oleh, mie ini tersedia dalam keadaan mentah. Kemasannya tidak dibungkus dengan plastik, tetapi menggunakan keranjang kecil dari anyaman bambu.</p>\r\n'),
(7, ' https://carica.id/wp-content/uploads/2020/06/asal-usul-buah-carica.jpg', 'Carica', '<p>Carica adalah pepaya gunung khas daerah Wonosobo. Dengan ukuran yang lebih kecil ketimbang pepaya biasanya, buah carica tidak kalah enak ketika disantap. Buah ini tumbuh subur di kawasan pegunungan, terutama dataran tinggi Dieng. Camilan ini bukan hanya dijual di area Wonosobo saja, tetapi juga sudah banyak dijual di kota-kota besar sekitar. Buah ini biasa disajikan dalam cup kecil yang berisi potongan carica dan air yang terasa manis. Perpaduan keduanya terasa asam dan manis di lidah, sehingga cocok disantap ketika dingin. Jika ingin membelinya, satu cup buah carica dibanderol dengan harga Rp4.000,00. Jika ingin lebih murah, Moms bisa membeli satu kotak dengan harga Rp30.000,00. Harga bisa bervariasi, tergantung pada merek dan ukuran cup. Makanan khas Wonosobo tidak susah dicari, kamu bisa menemukannya di sepanjang jalan menuju dataran tinggi Dieng.</p>\r\n'),
(8, 'https://sigijateng.id/wp-content/uploads/2022/10/sego-megono-dan-tempe-kemul-khas-wonosobo.jpg', 'Nasi megono', '<p>Makanan khas Wonosobo selanjutnya adalah nasi megono. Nasi ini terdiri dari nasi, ikan teri, dan irisan sayur. Warga lokal menyebut makanan ini dengan sego reged atau nasi kotor. Tampilannya memang terlihat kotor, tetapi rasanya tak kalah nikmat. Warga lokal menjadikan nasi megono sebagai bekal bekerja di sawah. Rasanya semakin mantap apabila disantap dengan tempe kemul. Nasi ini dibanderol dengan harga Rp2.500 sampai dengan Rp3.000.</p>\r\n'),
(9, 'https://imgx.sonora.id/crop/0x0:0x0/x/photo/2021/12/09/opak-ilatjpg-20211209052559.jpg', 'Opak singkong', '<p>Makanan khas Wonosobo selanjutnya adalah opak singkong. Makanan ini terbuat dari rebusan singkong yang dicampur dengan garam dan kucay. Rebusan singkong yang sudah dibumbui dengan garam dan kucay, kemudian ditumbuk hingga halus. Lalu, dipipihkan dan dijemur hingga kering. Kemudian, singkong digoreng hingga tekstur menjadi kering. Rasanya yang gurih dan teksturnya yang renyah membuat opak singkong banyak dibeli warga kota lain yang berkunjung sebagai buah tangan. Jika tidak ingin rasanya berubah, Moms bisa membawa pulang opak singkong dalam keadaan mentah. Buah tangan ini dibanderol dengan harga Rp30.000 per bungkus.</p>\r\n'),
(10, 'https://carica.id/wp-content/uploads/2017/08/geblek-wonosobo.jpg ', 'Geblek', '<p>Makanan khas Wonosobo adalah geblek. Geblek dapat dengan mudah ditemui di berbagai tempat makan. Geblek atau lekuk berwarna putih dengan bentuk menyerupai cincin. Makanan khas ini terdiri dari tepung tapioka basah, yang dicampur dengan daun kucay dan bumbu khas daerah tersebut. Teksturnya kenyal, sedikit lengket, dan memiliki rasa yang gurih. Camilan ini cocok dihidangkan di berbagai suasana, sehingga cocok dijadikan sebagai buah tangan untuk kerabat dan tetangga di rumah. Makanan khas Wonosobo ini dibanderol dengan harga Rp25.000 per bungkus.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_oleh_oleh`
--

CREATE TABLE `tabel_oleh_oleh` (
  `oleh_oleh_id` int(11) NOT NULL,
  `nama_oleh_oleh` varchar(255) NOT NULL,
  `img_oleh_oleh` text NOT NULL,
  `deskripsi_oleh_oleh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_oleh_oleh`
--

INSERT INTO `tabel_oleh_oleh` (`oleh_oleh_id`, `nama_oleh_oleh`, `img_oleh_oleh`, `deskripsi_oleh_oleh`) VALUES
(10, 'Buah Terong Belanda', 'https://salsawisata.b-cdn.net/wp-content/uploads/2022/02/Terong-Belanda-Wonosobo.jpg', '<p>Berbeda dengan terong pada umumnya, bentuk buah ini berukuran mirip seperti telur. Di balik bentuknya yang unik buah terung ini ternyata memiliki banyak manfaat untuk kesehatan. Kandungan vitamin C nya mampu menjaga kekebalan tubuh dan mengobati beberapa penyakit seperti sariawan. Selain itu provitamin A di dalamnya juga bisa menjaga kesehatan mata. Terong Belanda ini bisa Anda makan langsung maupun diolah kembali menjadi sirup atau berbagai makanan lainnya. Untuk Anda yang ingin membawa pulang buah ini sebagai oleh-oleh khas Wonosobo, sirup terong Belanda sangat recommended. Anda bisa mendapatkan buah ini di banyak pusat oleh-oleh atau toko buah di Wonosobo terutama kawasan Dieng. Harganya sendiri berkisar antara Rp17.000,00 hingga Rp50.000,00 tergantung kemasan.</p>\r\n'),
(11, 'Kue Pepe', 'https://salsawisata.b-cdn.net/wp-content/uploads/2022/02/Kue-Pepe-Khas-Wonosobo.jpg ', '<p>Lapis sagu atau kue pepe ini merupakan makanan khas Jakarta yang sudah sangat terkenal. Anda bisa menemukannya di beberapa daerah di Indonesia termasuk Wonosobo. Namun berbeda dengan kue pepe dari Jakarta, bahan lapis sagu dari Wonosobo ini lebih sederhana. Selain itu variasi warnanya lebih beragam seperti misalnya hijau, merah, putih, cokelat, dan lainnya. Rasanya yang manis legit terasa begitu pas di mulut. Tiap lapisannya pun memberi sensasi tersendiri yang sangat berkesan. Temukan kue tradisional ini di sejumlah pasar tradisional atau pedagang kue. Satu bungkusnya biasa dibanderol mulai dari Rp1.500,00 saja.</p>\r\n'),
(12, 'Sagon', 'https://salsawisata.b-cdn.net/wp-content/uploads/2022/02/Sagon-Khas-Wonosobo.jpg ', '<p>Di Wonosobo kue ini dikenal juga dengan nama rangin. Bahan serta cara membuatnya tidak jauh berbeda dengan sagon yang menjadi oleh-oleh khas Bekasi. Hanya saja bentuk sagon wonosobo ini lebih besar, bulat, dan berwarna putih. Proses memasaknya sendiri di panggang menggunakan arang pada sisi atas dan bawahnya, sehingga meninggalkan bekas terbakar yang khas. Rasa gurih dari parutan kelapa dan manis dari gulanya sangat pas dinikmati saat bersantai. Ada pula yang menambahkan siraman gula merah cair untuk menambah rasa manis dari jajanan ini. Bila Anda mengunjungi Kawah Sikidang, ada banyak penjual kue sagon yang bisa Anda temukan. Harga satu buahnya berkisar antara Rp2.000,00 hingga Rp5.000,00 tergantung ukuran. Sayangnya kue tradisional ini tidak bisa bertahan lebih dari tiga hari. Jadi usahakan perjalanan Anda tidak terlalu lama jika ingin menjadikannya sebagai tanda mata.</p>\r\n'),
(13, 'Dendeng Gepuk', 'https://salsawisata.b-cdn.net/wp-content/uploads/2022/02/Dendeng-Gepuk.jpg ', '<p>Olahan daging berupa dendeng tidak hanya terkenal sebagai makanan khas Padang saja. Di Wonosobo ada juga dendeng gepuk yang sering menjadi buah tangan banyak wisatawan. Rasa dendeng ini gurih sebab menggunakan taburan kelapa sangrai dengan aroma yang khas. Selain itu dagingnya lembut dan tidak alot sebab telah melewati proses gepuk hingga pipih. Sebagai oleh-oleh Anda bisa mendapatkan gepuk dendeng ini di sejumlah restoran atau pusat cinderamata. Harga per kemasan biasanya sekitar Rp14.000,00 sampai Rp95.000,00 tergantung mereknya.</p>\r\n'),
(14, 'Teh Tambi', 'https://salsawisata.b-cdn.net/wp-content/uploads/2022/02/Bubuk-Teh-Tambi.jpg ', '<p>Kebun Teh Tambi yang terkenal sebagai destinasi wisata juga menawarkan cindermata untuk Anda bawa pulang berupa teh. Tentu teh yang Anda dapatkan di sini merupakan teh asli dari ketinggian 1.400 mdpl. Ada beberapa pilihan teh yang bisa bawa pulang dari sini yaitu teh hijau, teh hitam, atau teh putih. Masing masing memiliki rasa berbeda namun dengan aroma yang khas dari Teh Tambi. Anda bisa mengunjungi kebun teh ini menggunakan layanan rental bus Hiace Wonosobo. Selain lebih mudah, Anda juga bisa menghemat banyak tenaga untuk menikmati liburan. Selain dapat dibeli di kebunnya, teh tambi juga tersedia di banyak toko pusat oleh-oleh khas Wonosobo. Harga satu bungkusnya bervariasi sekitar Rp10.000,00 sampai Rp95.000,00 sesuai jenis dan ukuran kemasan.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap_user` varchar(255) NOT NULL,
  `no_hp_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`user_id`, `nama_lengkap_user`, `no_hp_user`, `email_user`, `password_user`) VALUES
(3, 'Ramdani', '085121104034', 'ramdani@gmail.com', 'password'),
(5, 'Fajar', '085121104012', 'fajar@gmail.com', 'password'),
(6, 'Diva', '085121104015', 'diva@gmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_air_terjun`
--
ALTER TABLE `tabel_air_terjun`
  ADD PRIMARY KEY (`air_terjun_id`);

--
-- Indexes for table `tabel_danau`
--
ALTER TABLE `tabel_danau`
  ADD PRIMARY KEY (`danau_id`);

--
-- Indexes for table `tabel_destinasi`
--
ALTER TABLE `tabel_destinasi`
  ADD PRIMARY KEY (`destinasi_id`);

--
-- Indexes for table `tabel_gunung`
--
ALTER TABLE `tabel_gunung`
  ADD PRIMARY KEY (`gunung_id`);

--
-- Indexes for table `tabel_kalender_event`
--
ALTER TABLE `tabel_kalender_event`
  ADD PRIMARY KEY (`kalender_event_id`);

--
-- Indexes for table `tabel_makanan_khas`
--
ALTER TABLE `tabel_makanan_khas`
  ADD PRIMARY KEY (`makanan_khas_id`);

--
-- Indexes for table `tabel_oleh_oleh`
--
ALTER TABLE `tabel_oleh_oleh`
  ADD PRIMARY KEY (`oleh_oleh_id`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_user` (`email_user`),
  ADD UNIQUE KEY `no_hp_user` (`no_hp_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_air_terjun`
--
ALTER TABLE `tabel_air_terjun`
  MODIFY `air_terjun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabel_danau`
--
ALTER TABLE `tabel_danau`
  MODIFY `danau_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabel_destinasi`
--
ALTER TABLE `tabel_destinasi`
  MODIFY `destinasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tabel_gunung`
--
ALTER TABLE `tabel_gunung`
  MODIFY `gunung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabel_kalender_event`
--
ALTER TABLE `tabel_kalender_event`
  MODIFY `kalender_event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tabel_makanan_khas`
--
ALTER TABLE `tabel_makanan_khas`
  MODIFY `makanan_khas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabel_oleh_oleh`
--
ALTER TABLE `tabel_oleh_oleh`
  MODIFY `oleh_oleh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
