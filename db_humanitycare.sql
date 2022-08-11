-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 04:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_humanitycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(99) NOT NULL,
  `judul_post_news` varchar(128) NOT NULL,
  `kategori_post_news` varchar(64) NOT NULL,
  `waktu_post_news` datetime NOT NULL,
  `artikel_post_news` mediumtext NOT NULL,
  `author_post_news` varchar(12) NOT NULL,
  `img_post_news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul_post_news`, `kategori_post_news`, `waktu_post_news`, `artikel_post_news`, `author_post_news`, `img_post_news`) VALUES
(5, 'Rumah Hancur-Satu Warga Tewas saat Banjir Kepung Kota Sukabumi', 'Peristiwa', '2022-05-21 11:07:00', 'Titik lokasi bencana banjir dan longsor di Kota Sukabumi terus bertambah. Hingga pukul 22.40 WIB, lokasi bencana akibat hujan deras yang terjadi pada Kamis (17/2/2022) sore hingga malam bertambah menjadi 68 titik.\r\n&quot;Kami menerima laporan 68 titik terdiri dari 59 titik lokasi banjir dan 9 titik longsor,&quot; kata Kepala Pelaksana (Kalak) Badan Penanggulangan Bencana Daerah (BPBD) Kota Sukabumi, Imran Wardhani dalam keterangannya, Kamis (17/2/2022) malam.\r\n\r\nDia mengatakan, kondisi banjir paling parah terjadi di Kecamatan Baros yang mengakibatkan rumah hancur dan memakan korban jiwa. Banjir di Kelurahan Jakaraksa itu diperparah karena adanya luapan Sungai Cisuda.\r\n\r\n\r\n\r\n&quot;Ada satu korban meninggal dunia atas nama Ibu Enung dan sudah kami evakuasi ke RS Bunut dan satu korban luka ringan juga sudah dievakuasi,&quot; ujarnya.\r\n\r\nBaca juga:\r\nJabar Hari Ini: Wanita Sukabumi Dijual Rp 80 Juta di Papua-Gage Bandung\r\nPihaknya masih melakukan penyisiran di beberapa lokasi. Dari 68 lokasi yang terdeteksi terdampak bencana, 16 diantaranya sudah dilakukan penyisiran dan penanganan bencana.\r\n\r\n&quot;Penanganan saat ini tim kami masih melakukan penyisiran di lokasi-lokasi. Kami menerjunkan 24 personil dibantu para relawan-relawan kemanusiaan,&quot; pungkasnya.\r\n\r\nDia mengimbau agar masyarakat tetap waspada akan peningkatan curah hujan yang diprediksi terjadi sampai sepekan mendatang\r\n\r\nWalkot Kerahkan Aparat Wilayah\r\n\r\nWali Kota Sukabumi Achmad Fahmi melakukan pemantauan di beberapa titik bencana banjir, khususnya di Kecamatan Baros, Kamis (17/2/2022) malam. Dalam pemantauannya, ia didampingi oleh Dandim 0607 Kota Sukabumi Letkol Inf Dedy Arianto.\r\n\r\nPada kesempatan tersebut, Fahmi sekaligus memimpin penanganan bencana bersama aparat wilayah yang terdiri dari Camat Baros Samiarto, Lurah Jayaraksa, BPBD Kota Sukabumi dan elemen lainnya.\r\n\r\n&quot;Saya bersama Pak Dandim turun langsung ke lapangan untuk mempercepat penanganan bencana,&quot; ujar Fahmi dalam keteranga tertulisnya.\r\n\r\nLebih lanjut, Fahmi pun ikut terjun dalam membantu penanganan banjir di Baros. Kondisi pemukiman warga pasca banjir dipenuhi dengan lumpur dan kurang pencahayaan. Di tempat itu pula, Fahmi melakukan koordinasi di beberapa titik bencana lainnya.\r\n\r\nFahmi mengatakan, dalam penanganan bencana ini melibatkan sejumlah pihak yakni BPBD Kota Sukabumi, Tagana, Karangtaruna, Damkar, aparat TNI/Polri, dan para relawan lainnya.\r\n\r\n&quot;Petugas dikerahkan secara maksimal untuk penanganan bencana,&quot; ujarnya.\r\n ', 'admin', '628857acee2c1.jpg'),
(6, 'Selama Januari hingga April 2022, 1.175 Bencana Alam Terjadi Indonesia', 'Peristiwa', '2022-05-21 11:16:00', '&quot;Kejadian bencana alam yang mendominasi adalah cuaca ekstrem, banjir, dan tanah longsor,&quot; begitu bunyi keterengan pers Badan Nasional Penanggulangan Bencana (BNPB) saat diterima, Senin (4/4/2022). BACA JUGA: Musim Pancaroba Berpotensi Picu Bencana Hidrometeorologi di DIY, Begini Penjelasan BMKG BNPB merinci bencana alam akibat banjir sebanyak 459 kejadian, 428 akibat cuaca ekstrem, 213 kasus tanah longsor, 58 kebakaran hutan dan lahan (Karhutla), sembilan kali gempa bumi, serta delapan kasus gelombang pasang dan abrasi. Kemudian, dampak kerusakan yang diakibatkan berbagai bencana alam tersebut membuat 20.962 rumah rusak yang terdiri dari 3.505 rusak berat, 3.919 rusak sedang, dan 13.538 rusak ringan\r\n ', 'admin', '628859a495eeb.jpg'),
(7, 'Dayeuhkolot Diterjang Banjir, Bojongsoang Macet Parah dan Sejumlah Jalan di Kabupaten Bandung Terputus', 'Peristiwa', '2022-05-23 06:59:00', 'alan Raya Bojongsoang, Kabupaten Bandung mengalami macet parah pada Senin (14/3/2022) pagi akibat ada ruas jalan yang tergenang banjir. hujan yang melanda daerah Kabupaten Bandung pada Minggu (13/3/2022) malam menyebabkan sejumlah daerha seperti Dayeuhkolot, Baleendah dan Bojongsoang dilanda banjir. Selain Jalan Raya Bojongsoang, sejumlah ruas jalan di Kabupaten bandung juga tak dapat dilewati karena terendam banjir. Pantauan di lokasi, akses Jalan Raya Andir di Baleendah putus total karena terendam banjir dengan ketinggian lebih dari 1 meter. Begitu juga dengan jalan Sukabirus di Dayeuhkolot yang tidak bisa dilalui kendaraan karena terendam air.\r\n\r\nBanjir juga merendam Jalan Raya Banjaran-Dayeuhkolot di beberapa titik, di antaranya depan Pasar Dayeuhkolot dan Jalan M Toha tepatnya di depan Pabrik Metro Garmen.\r\n\r\nWalaupun tidak sampai terputus, namun banjir yang menggenang jalan raya Banjaran-Dayeuhkolot hanya bisa dilalui oleh kendaraan roda empat.\r\n\r\nDi Bojongsoang, banjir juga memutus jalan Cijagra.\r\n\r\nAkibat banyak jalan yang terputus, kemacetan lalu lintas terjadi cukup parah di Jalan Raya Bojongsoang.\r\n\r\nAkses penghubung Kabupaten Bandung dengan Kota Bandung tersebut dipenuhi oleh kendaraan yang menggunakan jalan tersebut sebagai alternatif menuju Kota Bandung.\r\n\r\nPun akibat banjir di Dayeuhkolot dan sekitarnya, antrean kendaraan terjadi beberapa kilometer, mulai dari pertigaan jalan Laswi Baleendah, sampai Buahbatu Kota Bandung.', 'admin', '628867f7a821c.jpg'),
(8, 'Bencana Alam Tahun 2022, Lebih Dari 1 Juta Jiwa Mengungsi', 'Peristiwa', '2022-05-21 14:56:00', 'Darilaut – Sejak 1 Januari hingga 18 Maret tahun 2022 sebanyak 1.462.187 jiwa yang menderita dan mengungsi karena bencana alam yang terjadi di Indonesia. Bencana alam ini berdampak pada korban meninggal dunia 27 jiwa, tiga hilang dan 586 luka-luka. Badan Nasional Penanggulangan Bencana (BNPB) mencatat bencana alam banjir, cuaca ekstrem dan tanah longsor yang paling banyak terjadi. Total jumlah bencana hingga 18 Maret sebanyak 978 kejadian. Bencana banjir 394 kejadian, cuaca ekstrem 339, tanah longsor 188. Kemudian, kebakaran hutan dan lahan (Karhutla) 44, gelombang pasang dan abrasi 8, serta gempabumi 5. Bangunan rumah yang mengalami kerusakan sebanyak 18.884. Rumah yang mengalami rusak berat 3.300, rusak sedang 3.483 dan rusak ringan 12.061. Fasilitas pendidikan yang rusak 332, tempat peribadatan 137 dan fasilitas kesehatan 60. Jembatan yang rusak sebanyak 63 dan kantor 61. Dari total 978 bencana alam, sebaran paling banyak kejadian di Provinsi Jawa Barat, Jawa Tengah dan Jawa Timur. Bencana alam di Jawa Barat sejak Januari hingga 18 maret tercatat sebanyak 239 kejadian, Jawa Tengah 181 dan Jawa Timur 155. Kemudian Aceh 44 kejadian, Riau 28, Lampung 27, Sulawesi Selatan 25, Sumatera Selatan 24, Sumatera Utara 22 dan Kepulauan Bangka Belitung 22. Sebaran paling sedikit kejadian bencana alam hingga 18 Maret di Provinsi Jambi 1, DKI Jakarta 2, Maluku 4, Papua 4, Papua Barat 4, Sulawesi Tenggara 5, Gorontalo 6 dan Kalimantan Utara 6', 'admin', '62888d063bd52.jpeg'),
(15, 'Gempa Magnitudo 4,8 Guncang Kabupaten Sukabumi', 'Gempa Bumi', '2022-06-11 18:33:00', '&quot;Gempa magnitudo 4.8 dengan Kedalaman: 25 km, 26 Apr 2022 00:01:06 WIB, Koordinat: 7.48 LS-106.68 BT (Pusat gempa berada di laut 56 km tenggara kabupaten Sukabumi). Dirasakan (MMI): II - III Sukabumi, II - III Cianjur selatan, II Garut, II Pangandaran #BMKG,&quot;  tulis akun resmi Twitter BMKG.', 'Admin', '62a47dac52acb.jpg'),
(16, 'Difabel Siaga Bencana Difagana, Lahir dari Erupsi Gunung Merapi Ditempa Pandemi', 'Gunung Meletus', '2022-06-11 18:36:00', 'Ketua Difagana DI Yogyakarta, Doddy Kurniawan Kaliri mengatakan, 99,9 persen pengurus unit relawan Difagana adalah penyandang disabilitas. &quot;Unit relawan difabel ini terbentuk agar penanganan bencana yang menyasar kaum rentan, seperti difabel berjalan efektif dan cepat,&quot; kata Doddy dalam forum daring bertajuk Inclusive Access to Multi-Sectoral Services and Assistances for Everyone (I AM SAFE) Kamis 21 April 2022.\r\n\r\n\r\nDalam forum yang dihelat Uni Eropa dan Humanity and Inclusion itu, Doddy menceritakan, unit Difagana resmi berdiri pada 2017. Terinspirasi dari penanganan bencana bagi kalangan penyandang disabilitas akibat dua bencana besar di Yogyakarta, yakni gempa bumi 2006 dan erupsi Gunung Merapi 2010.\r\n\r\nEfektivitas pertolongan dampak bencana di Difagana karena antara relawan dengan yang ditolong masing-masing mengtahui tantangannya sendiri. Kondisi ini dapat meminimalisir keengganan dan keluhan dari difabel yang disebabkan relawan tak tahu keadaan yang mereka alami.\r\n\r\n\r\n&quot;Bercermin dari gempa Yogyakarta pada 2006 dan erupsi Gunung Merapi 2010, banyak korban difabel yang belum tertangani dengan baik,&quot; ujarnya. Doddy mengatakan, sejak dicetuskan pada November 2017 silam, organisasi itu awalnya baru berhasil merekrut 50 relawan', 'Admin', '62a47e743269c.jpg'),
(17, 'Tiga Rumah Rusak Akibat Tanah Longsor di Wonosobo', 'Longsor', '2022-06-11 18:43:00', '&quot;Rumah milik Waryoto dan Sumi hancur sedangkan rumah Faturohman separuh bagian ruang utamanya jebol,&quot; kata Kepala Pelaksana Badan Penanggulangan Bencana Daerah (BPBD) Kabupaten Wonosobo Bambang Triyono di Wonosobo, Selasa, mengenai dampak tanah longsor di Sapuran.\r\n\r\nMenurut Bambang, warga yang rumahnya rusak akibat tanah longsor untuk sementara mengungsi di rumah saudara mereka.\r\n\r\nSelain menyebabkan kerusakan rumah, ia mengatakan, longsornya tanah pada talut dengan panjang sekitar 100 meter dan tinggi sekitar 12 meter itu juga menyebabkan saluran irigasi tersumbat. Akibatnya, air meluap dan membanjiri setidaknya tujuh rumah warga dan dua kolam ikan milik warga.\r\n\r\n\r\nBambang mengatakan bahwa terpal sudah dipasang untuk menutupi area yang rawan longsor agar saat hujan turun air tidak merembes ke tanah dan memicu longsor susulan.', 'Admin', '62a47ec4f0bc4.jpg'),
(18, 'BNPB Resmikan Hari Kesiapsiagaan Bencana, Ini Tujuannya', 'penanggulangan', '2022-06-11 18:39:00', 'Pemukulan kentongan juga sekaligus menjadi penanda bahwa rangkaian HKB 2022 dengan tema &#039;Keluarga Tangguh Bencana Pilar Bangsa Menghadapi Bencana&#039; dengan pesan utama &#039;Siap untuk Selamat&#039; mulai dibuka. Akan ada beberapa agenda yang mengacu pada mitigasi dan pengurangan risiko bencana, hingga puncak kegiatan dilaksanakan pada 26 April 2022.\r\n\r\n\r\nDeputi Bidang Pencegahan BNPB, Prasinta Dewi menjelaskan penyelenggaraan peringatan HKB ini menjadi penting, mengingat Indonesia merupakan salah satu negara yang memiliki risiko tinggi terhadap bencana. &quot;Mengutip data The World Risk Index 2021, Indonesia masuk pada peringkat ke 38 dari 181 negara paling rentang bencana,&quot; ujar dia dalam keterangan tertulis, Selasa, 29 Maret 2022.\r\n\r\nLebih lanjut, Prasinta menekankan kesiapsiagaan perlu dibangun sejak dini mulai dari lingkungan terkecil, yakni keluarga. Merujuk tema yang diusung HKB 2022 ini, Prasinta yakin bahwa kesiapan masyarakat dalam menghadapi bencana akan menentukan besar kecilnya risiko dan dampak bencana yang akan diterima.\r\n\r\n\r\n“Perlu dibangun dari awal, dari lingkungan terkecil, yakni keluarga. Kesiapan itu akan menentukan besar kecilnya risiko dan dampak bencana yang akan diterima,” katanya.\r\n\r\n', 'Admin', '62a47f2962eb3.jpg'),
(19, '7 Warga Meninggal Akibat Gempa di Pasaman', 'Gempa Bumi', '2022-06-11 18:41:00', '&quot;Pusat Pengendalian Operasi BNPB menginformasikan pada pukul 16.30 WIB jumlah korban meninggal teridentifikasi 3 orang di Kabupaten Pasaman Barat dan 4 di Kabupaten Pasaman,&quot; ujar Kepala Pusat Data, Informasi dan Komunikasi Kebencanaan BNPB, Abdul Muhari, Jumat, 25 Februari 2022.\r\n\r\nSementara itu, total korban luka-luka mencapai 85 orang, dengan rincian luka berat 10 orang dan luka ringan 50 orang di Pasaman Barat, serta 25 orang di Pasaman.\r\n\r\nHingga kini, sebanyak 5.000 warga mengungsi di 35 titik. Sebaran titik pengungsian di Kecamatan Talamau, Kecamatan Pasaman dan Kinali. Petugas di lapangan masih mendata warga yang mengungsi.\r\n\r\n\r\n\r\n&quot;Petugas gabungan dari BPBD, TNI, Polri, Basarnas, para personel organisasi maupun relawan dan warga masih memfokuskan pada pencarian, penyelamatan dan evakuasi serta pelayanan kepada warga terdampak,&quot; ujar Abdul.\r\n\r\nGempa di Pasaman Barat terjadi pada pukul 08.39 tadi. BMKG menyatakan episenter gempa bumi terletak pada koordinat 0,14° LU ; 99,94° BT, atau tepatnya berlokasi di darat pada jarak 12 km Timur Laut wilayah Pasaman Barat, Sumatera Barat pada kedalaman 10 km.\r\n\r\nGempa bumi yang terjadi merupakan jenis gempa bumi dangkal akibat adanya aktivitas Sesar Sumatera. Hasil analisis BMKG, mekanisme sumber menunjukkan bahwa gempa memiliki mekanisme pergerakan geser (strike-slip).\r\n\r\nGempa utama berkekuatan magnitudo 6,2 ini sebelumnya didahului satu kali kejadian gempa pendahuluan dengan magnitudo 5,2. Hingga pukul 10.06 WIB, hasil monitoring BMKG menunjukkan telah terjadi 15 aktivitas gempa bumi susulan dengan magnitudo terbesar 4,2.', 'Admin', '62a47f5ddfe87.jpg'),
(20, 'Jokowi: Perizinan Usaha Harus Pertimbangan Risiko Bencana', 'penanggulangan', '2022-06-11 18:43:00', '“Perizinan-perizinan usaha yang dikeluarkan harus mempertimbangkan risiko bencana, pembangunan infrastruktur harus mengurangi bencana, bukan menambah risiko bencana,” kata Jokowi saat membuka Rapat Koordinasi Nasional Penanggulangan Bencana (BNPB) secara virtual dari Istana Kepresidenan Bogor, Jawa Barat, Rabu, 23 Februari 2022.\r\n\r\nJokowi menuturkan BNPB harus aktif mengajak seluruh aparat pemerintah pusat dan daerah untuk mengorientasikan program pembangunan pada konsep tangguh bencana. \r\n\r\n“BNPB harus aktif mengajak seluruh aparat pemerintah pusat maupun daerah agar semua program pembangunan harus berorientasi pada tangguh bencana. Harus ini semuanya, diajak,&quot; kata Presiden.\r\n\r\n\r\n\r\nJokowi juga meminta sistem edukasi kebencanaan agar terus ditingkatkan, terutama di wilayah-wilayah rawan bencana. Budaya sadar kebencanaan harus dimulai sejak dini dari setiap individu, keluarga, komunitas, sekolah, sampai lingkungan masyarakat.\r\n\r\n“Gali berbagai kearifan lokal yang ada di masyarakat, latih masyarakat untuk tanggap menghadapi bencana, lakukan latihan, simulasi setiap saat jangan menunggu sampai datang bencana,” ujarnya.\r\n\r\nIa menekankan potensi dan kekuatan yang ada di masyarakat harus dioptimalkan untuk mewujudkan masyarakat yang tangguh bencana. Indonesia yang tangguh bencana harus menjadi agenda besar yang dilakukan semua komponen pemerintah dan komponen bangsa.\r\n\r\n&quot;Kita rangkul kekuatan dan potensi-potensi yang ada di masyarakat, kita wujudkan masyarakat tangguh bencana, kita wujudkan masyarakat tangguh bencana,&quot; kata Presiden Jokowi.', 'Admin', '62a47fe28ecae.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `id` int(11) NOT NULL,
  `nama_donasi` varchar(64) NOT NULL,
  `email_donasi` varchar(64) NOT NULL,
  `alamat_donasi` varchar(64) NOT NULL,
  `no_telp_donasi` bigint(255) NOT NULL,
  `nominal_donasi` int(128) NOT NULL,
  `image_barang_donasi` varchar(100) NOT NULL,
  `keterangan_donasi` mediumtext NOT NULL,
  `image_bukti_donasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_donasi`
--

INSERT INTO `tb_donasi` (`id`, `nama_donasi`, `email_donasi`, `alamat_donasi`, `no_telp_donasi`, `nominal_donasi`, `image_barang_donasi`, `keterangan_donasi`, `image_bukti_donasi`) VALUES
(7, 'Rifan Hidayat', 'rifanhdyt@gmail.com', 'jl. muara lama 4, Hamda, Kota Bandung', 89648123123, 100000, '628ad73eb3c32.jpg', 'semoga para korban bencana ini Allah beri kekuatan dan kesabaran', '628ad73ed3d1b.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edukasi`
--

CREATE TABLE `tb_edukasi` (
  `id` int(12) NOT NULL,
  `Judul_post` varchar(128) NOT NULL,
  `kategori_post` varchar(64) NOT NULL,
  `waktu_post` datetime NOT NULL,
  `artikel_post` mediumtext NOT NULL,
  `image_post` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int(12) NOT NULL,
  `nama_role` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id`, `nama_role`) VALUES
(1, 'admin'),
(2, 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(12) NOT NULL,
  `username_user` varchar(64) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `email_user` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `username_user`, `password_user`, `id_role`, `nama_user`, `email_user`) VALUES
(11, 'admin', '$2y$10$npgO.i0pwtu76hR430j3ZOwUirDQe6ENXpJKVNBe9OVp9OREiZcKW', 1, 'Haris Setiawan', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edukasi`
--
ALTER TABLE `tb_edukasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_edukasi`
--
ALTER TABLE `tb_edukasi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
