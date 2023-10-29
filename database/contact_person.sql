-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 09:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_person`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Buddha'),
(4, 'Hindu');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `idagama` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sosmed` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `kampus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `nama`, `gender`, `idagama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `hp`, `email`, `sosmed`, `foto`, `kampus`) VALUES
(73, 'Irgi Rama Sulistio', 'Laki-laki', 1, 'Bogor', '2002-06-03', 'Kp.Babakan RT:02/03 No:16 Kec.Cileungsi Kab.Bogor', '089612431791', 'irgirama01@gmail.com', 'irgiramz', 'https://drive.google.com/open?id=1lBzStK9b3AfVQOMhyAwrHQmIM9q-p_IO', 'Politeknik Negeri Media Kreatif'),
(74, 'Ahmad Fadhliansyah', 'Laki-laki', 1, 'Dki Jakarta', '2003-06-13', 'Jl Lapangan Roos III', '082114254952', 'fadhliansyah9f@gmail.com', 'fadhliansyaah', 'https://drive.google.com/open?id=1laNPoGSe4ptL_4U55KcKrRTTztmFPxKX', 'Stt NF'),
(75, 'Nata Nara Narendra Putra Suanda', 'Laki-laki', 4, 'Sumbawa Besar', '2003-07-30', 'Jl. Gunung Agung Gang. 1C Perumahan Pesona Agung Graha Adi No. B2', '089675998114', 'natanaranarendra@gmail.com', 'natanaraps', 'https://drive.google.com/open?id=115I2R31TKlFJRWHCEuvrmzamrsLzLUM5', 'Universitas Udayana'),
(76, 'Muhammad Jaisy Adli', 'Laki-laki', 1, 'Bekasi', '2004-01-13', 'Jln. H. Taqwa no 108 rt/rw 006/009', '089512391211', 'muhjaisyadli@gmail.com', 'jaisyadli', 'https://drive.google.com/open?id=1BR35Cwh4lkbehB2r_wy15CvH6p832A4z', 'STT NF'),
(77, 'Adi', 'Laki-laki', 1, 'Pamekasan', '2000-10-29', 'Sumber Waru Waru Jawa Timur', '081937264222', 'adilrindu29@gmail.com', '@adialfatih45', 'https://drive.google.com/open?id=13omsJheY-SQdMeqRAmQdPKiEEmdLOsYg', 'Institut Sains dan Teknologi Annuqayah'),
(78, 'Qonita Azizah', 'Perempuan', 1, 'Panyalaian', '2002-08-03', 'Jalan Allogio barat 3, Medang, kec pegedangan, banten', '085761434808', 'qonita.azizah@student.pradita.ac.id', 'qonitaazh_', 'https://drive.google.com/open?id=1hyy9LLgJGTaidRW0i7RkwzAIe38GwP3x', 'Pradita University'),
(79, 'Milda Khusnul Khotimah', 'Perempuan', 1, 'Lumajang', '2003-02-26', 'Lumajang, Jawa Timur', '087863533945', 'mildakhusnul999@gmai.com', '_mldkhsnl', 'https://drive.google.com/open?id=1a_oAIGwdGNKIQh45_gpE_k2OeWkEAjaD', 'Politeknik Negeri Malang'),
(80, 'Izzudin Muktar', 'Laki-laki', 1, 'Depok', '2003-06-27', 'Dsn bebegan, jati kabupaten Blora Jawa Tengah', '083122661966', 'izudinmuktar5@gmail.com', 'mukktaaaaar', 'https://drive.google.com/open?id=1c27-7GPo18iPhl36dZjQPE9GLiEioZ6k', 'STT Terpadu Nurul Fikri'),
(81, 'MOCH FIKRI RAMADHAN', 'Laki-laki', 1, 'Depok', '2001-10-11', 'JL. Situ Indah No.3 Rt.06/10 Kel.Tugu Kec.Cimanggis Depok', '089684711291', 'libr.libr1711@gmail.com', '@fikrii1711', 'https://drive.google.com/open?id=1PzkglugW8cyuF3thY1JGguD3AdNrqlza', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri'),
(82, 'Sri Lestari', 'Perempuan', 1, 'Pati', '2002-09-28', 'Ds.Sukolilo RT 06/RW 07', '08157945227', 'lestatari41@gmail.com', 'taarrrrri', 'https://drive.google.com/open?id=1rb8q3qwIXQI4R5FemydeI-udb6kq1FPR', 'Universitas Muria Kudus'),
(83, 'Septia Dwi Kurniasih', 'Perempuan', 1, 'Jakarta', '1995-09-18', 'Kp. Pulo Makasar Jakarta Timur', '087889018920', 'septiadk2@gmail.com', 'cepiaaaws', 'https://drive.google.com/open?id=1mWdoGZrpNmXO6QfczdFhs3RvZD_wCcPI', 'Unsurya'),
(84, 'Putra Habib Al Aziz', 'Laki-laki', 1, 'Rantau karya', '2003-12-23', 'OKI, Sumatera Selatan', '085377519996', 'putrahabibalaziz@gmail.com', 'ajizz11_', 'https://drive.google.com/open?id=1mR353F0eybxXSTF9lk9ky2AetRFkebl5', 'Politeknik Manufaktur Negeri Bangka Belitung'),
(85, 'Siti Amdah', 'Perempuan', 1, 'Tangerang', '2001-04-14', 'Tigaraksa, Tangerang-Banten', '08979281365', 'siti.amdah14@gmail.com', 'amdah14', 'https://drive.google.com/open?id=1AvYIqRSxsY-dD4IQ732Gj-vKY7xCm2GM', 'STT Terpadu Nurul Fikri'),
(86, 'Renawati', 'Perempuan', 1, 'Tangerang', '2001-05-22', 'Kp.Daraham', '085282884467', 'rena09910@gmail.com', 'ren_aniqobie', 'https://drive.google.com/open?id=1qaaZaNsJJRAdljIavvpmfrWF7ZwN7hE1', 'STT Terpadu Nurul Fikri'),
(87, 'Hanif Hidayatulloh', 'Laki-laki', 1, 'Brebes', '2003-11-28', 'Purwokerto Utara', '087862678478', 'hanifhidayatulloh2811@gmail.com', 'hanief_nief', 'https://drive.google.com/open?id=1tqaKGY1YGOqyQ5zcNHWJVhCoMxtXwdQR', 'Universitas Amikom Purwokerto'),
(88, 'Ariza Akmal Syahida', 'Laki-laki', 1, 'Bantul', '2003-04-13', 'Bantul, Daerah Istimewa Yogyakarta', '083849257999', 'arizaakmal04@gmail.com', 'arizaakmal13', 'https://drive.google.com/open?id=1rdiEKa9Bqwg5Qa8qdabJgLSHEQvG3ZCf', 'Universitas Amikom Yogyakarta'),
(89, 'Muarif Rizqy', 'Laki-laki', 1, 'Brebes', '2001-11-21', 'Kec. Paguyangan jl. Bumiayu - Purwokerto', '085326762608', 'murizqyarf17@gmail.com', 'Arif_rzym', 'https://drive.google.com/open?id=1Y7HCxeWngkXlQog-ndzKnoS-Ur7Kr_d9', 'Universitas Peradaban'),
(90, 'Muhammad Alifi Ferdiansyah', 'Laki-laki', 1, 'Tulungagung', '2000-07-24', 'Desa Tenggong, Kecamatan Rejotangan, Kabupaten Tulungagung', '088217206039', 'alifi240700@gmail.com', 'alifi_24', 'https://drive.google.com/open?id=1akCTlNpVT2-bCQf8vgb0CcXHg99nMM3O', 'Universitas Bhinneka PGRI'),
(91, 'Fajar Septianto', 'Laki-laki', 1, 'Jakarta Selatan', '2002-09-06', 'Cinere, Depok', '085889432197', 'fajar23.septianto@gmail.com', 'slashandback', 'https://drive.google.com/open?id=1PeeilCPErcChk9NojIKtVpqdhdwGPBtj', 'STT Nurul Fikri'),
(92, 'Kurniawan', 'Laki-laki', 1, 'Sumedang', '2001-08-19', 'Sumedang', '081411096708', 'ikurniawannf@gmail.com', 'i_kr19', 'https://drive.google.com/open?id=18vV_Q4cNlRxk6qBx-nM26RUfJZ9-781w', 'SEKOLAH TINGGI TEKNOLOGI TERPADU NURUL FIKRI'),
(93, 'Muhammad Bahrul Ulum', 'Laki-laki', 1, 'Pontianak', '2002-09-15', 'Jalan Bujama Desa Pal IX Kecamatan Sungai Kakap Kabupaten Kubu Raya', '087716374672', 'rangga.agg2018@gmail.com', '@ulum_kane', 'https://drive.google.com/open?id=1RIem8WkIZ6jtL9u17lSegXTi4ABiAeiu', 'Universitas Tanjungpura'),
(94, 'Zian Naisila Anjarwati', 'Perempuan', 1, 'Sumedang', '2001-02-24', 'Jl. Caringin Cikungkurak Bandung', '089652639063', 'ziannaisilaa@gmail.com', 'ziannaisilaa', 'https://drive.google.com/open?id=1XjkckNT2mp9sEa3NcqAAfIjELkDDQGcy', 'STMIK - IM Bandung'),
(95, 'Hadi Prasetiyo', 'Laki-laki', 1, 'Samarinda', '2002-06-16', 'Samarinda, Kalimantan Timur', '085711228592', 'hadiiyok01@gmail.com', '@hadiiprasetiyo', 'https://drive.google.com/open?id=1Fw1ClGFHPwcELblvyGYVivxt302Nwu_y', 'Universitas Mulawarman'),
(96, 'Euis Safania', 'Perempuan', 1, 'Cirebon', '2001-10-25', 'Kabupaten Cirebon Provinsi Jawa Barat', '083156525468', 'euissafania8703@students.unnes.ac.id', '@safania.euis', 'https://drive.google.com/open?id=1IMAG6png-s8jp_AI4rytJtymXW-YKocH', 'Universitas Negeri Semarang'),
(97, 'Ulayya Salmaa Khoirunnisaa', 'Perempuan', 1, 'Kudus', '2003-05-28', 'Bulungcangkring RT 03/ RW 01, Kec. Jekulo, Kab. Kudus', '081215627905', 'ulayyasalmaa28@gmail.com', 'salmaaul._', 'https://drive.google.com/open?id=1H5GlVSkQL6WGL-fHEmCn-ncfjHLKNzkf', 'Universitas Muria Kudus'),
(98, 'Ahmad Riziq', 'Laki-laki', 1, 'Jakarta', '2002-07-18', 'Kp.Roke Des. Negkasari Kec.Jasinga Kab. Bogor Provinsi.jawa barat', '085939446587', 'ahmadriziq010@gmail.com', '@arizieq', 'https://drive.google.com/open?id=1DmXduVSdQeHobycZQ0Mbw61q1v7pkGAs', 'Sekolah Tinggi Teknologi terpadu Nurul fikri'),
(99, 'Carmennita Soleman', 'Perempuan', 2, 'Samarinda', '2004-01-24', 'Jl. Budaya Pampang, Samarinda, Kalimantan Timur', '085350232057', 'nitacarmen06@gmail.com', '@carmeennita', 'https://drive.google.com/open?id=1nZWzBonQHCL7qG44jSDRjcASqs38fIis', 'Universitas Mulawarman'),
(100, 'Dimas Andhika Firmansyah', 'Laki-laki', 1, 'Pemalang', '2003-07-20', 'Pemalang, Jawa Tengah', '089630147925', 'dmsandhika87@gmail.com', 'dmsandhika_', NULL, 'Universitas Negeri Semarang'),
(101, 'Ahmad Zuaidi', 'Laki-laki', 1, 'Sumenep', '2001-11-02', 'Lembung Barat Lenteng Sumenep Jatim', '085963093822', 'ahmadzuaidi892@gmail.com', 'ahmd.zdi__', 'https://drive.google.com/open?id=1LyEIh0jXxE8gLkhQDWxuVcdMoIZXaOzD', 'IST Annuqayah'),
(102, 'SHABRINA PRIMADEWI', 'Perempuan', 1, 'Kudus', '2003-01-09', 'Desa Sadang, Rt 03 Rw 02, Kecamatan Jekulo, Kabupaten Kudus, Jawa Tengah', '085848686194', 'shabrinaprima@gmail.com', 'shabrinampol', 'https://drive.google.com/open?id=1ESsoqDwVWY_q3LiLmxoy9WZb0JTN50x8', 'Universitas Muria Kudus'),
(103, 'Ridwan Khomarudin Muharram', 'Laki-laki', 1, 'Tanggerang', '2003-03-10', 'Citayam kp. Kelapa gg. Nusaindah rt04/rw16', '081281238348', 'ridwanmts812@gmail.com', '@arraaamm__', NULL, 'STT Terpadu Nurul Fikri'),
(104, 'Anisa', 'Perempuan', 1, 'Depok', '2003-10-09', 'Kp. Sindangkarsa Rt01/07, sukamaju baru, Tapos depok', '083895461608', 'anisaaabcd@gmail.com', 'SyNissa', 'https://drive.google.com/open?id=1Fw2MmxtHNcXqbCBABM36nBoqkUFDGead', 'Stt terpadu nurul Fikri'),
(105, 'Shafa Salsabila Febriani', 'Perempuan', 1, 'Depok', '2002-02-20', 'Jl Bhakti Abri Rt 02 Rw 10', '0895706510309', 'shafafebriani4@gmail.com', '@shafaslls', 'https://drive.google.com/open?id=1JB3fF2lruthW8lZo52nIzd_zpxlUwNvc', 'UBSI Depok'),
(106, 'Febi Febiyanti', 'Perempuan', 1, 'Garut', '2003-02-27', 'Jl. KH Hasan Arif, Kp. Pagersari RT.01 RW.06 Kec. Banyuresmi Kab. Garut', '085860257486', 'febi20289ti@student.nurulfikri.ac.id', '_ffyyyyyyy', 'https://drive.google.com/open?id=1FW-YgB8HMbvf9CO4BYUZmAnTD-YAClID', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri'),
(107, 'Nasyath Faykar', 'Laki-laki', 1, 'Pekalongan', '2002-11-30', 'Jalan KH Ahmad Dahlan Tirto Gg. 7 No. 31', '088806923500', 'nasyathfaykar@gmail.com', 'faykarr_', 'https://drive.google.com/open?id=1G9_p8X7kBKB3iZrkzaLFXji-11gcfEG4', 'STMIK WIDYA PRATAMA PEKALONGAN'),
(108, 'Maulidhiansyah Bayu Setiawan', 'Laki-laki', 1, 'Jakarta', '2003-05-10', 'Jl. Jantung Harapan RT 08/07 Kel.pabuaran Kec.cibinong', '089507631813', 'maulidhiansyahbayu@gmail.com', '@inibayou', 'https://drive.google.com/open?id=1WUHjzatdfOhw6Sffchtc45EnPaTuErUC', 'STT Terpadu Nurul Fikri'),
(109, 'RANGGA EKKLESIA GABRIEL ANUGRAHNU', 'Laki-laki', 2, 'Palangka Raya', '2002-08-06', 'Jl.Perkebunan komp perikanan', '083143508517', 'ranggaekkle20020806@gmail.com', 'rangga_e.g.a', NULL, 'UNIVERSITAS PALANGKARAYA'),
(110, 'Muhammad Alif Firdaus Arizona', 'Laki-laki', 1, 'Surabaya', '2002-03-14', 'Perum TNI AL Candi', '082132306322', '20410100080@dinamika.ac.id', '@afarizona_', 'https://drive.google.com/open?id=1cka9eIGnmY58edSq4J8hWXZ4k_diG8_Z', 'Universitas Dinamika'),
(111, 'Mukhammad Rifkhi Rifangga', 'Laki-laki', 1, 'Kudus', '2002-05-13', 'Sunggingan RT 03 RW 03 Kota Kudus', '08812670156', 'rifkhirifangga@gmail.com', '@rifkhi.rifangga_', 'https://drive.google.com/open?id=199oRqigNkF6JmMomQMCyVN7DE35ZWn4W', 'Universitas Muria Kudus'),
(112, 'Winanda afrilia harisya', 'Perempuan', 1, 'Sungai penuh', '2003-04-26', 'Kapalo koto, Pauh, Padang', '+62 878-4218-2759', 'winandaafrilia0304@gmail.com', '@_winandaah', NULL, 'Universitas Andalas'),
(113, 'Muhammad Anwar Fauzan', 'Laki-laki', 1, 'Serang', '2003-01-15', 'Bumi Agung Permai 1', '085939410330', 'anwar.fauzan98@gmail.com', '@anwarfz__', 'https://drive.google.com/open?id=1zE3ysQ6UVYwN7UNodg2PQvZZeiEIKtBT', 'Universitas Banten Jaya'),
(114, 'Erick Darmawan', 'Laki-laki', 1, 'Kota Serang', '2003-08-13', 'Kota Serang', '085282568210', 'erickdarmawanboeniarto130803@gmail.com', '@erick.db13', 'https://drive.google.com/open?id=10MgTZ7xmnRdCM8znyAaZUVbeYSP2Td_L', 'Universitas Banten Jaya'),
(115, 'Lora Lorensa Manafe', 'Perempuan', 2, 'Sulamu', '2001-10-30', 'Sulamu', '081353024713', 'lhomanafe@gmail.com', '@Lhomnfe30', NULL, 'Politeknik Negeri kupang'),
(116, 'Bagus Febriyanto', 'Laki-laki', 1, 'Pati', '2002-02-02', 'Kab. Pati, Kec. Tayu, desa Pondowan', '08978270522', 'bagusfebriyanto19@gmail.com', '@__imnotbgs', 'https://drive.google.com/open?id=1AYoQdvBrKcYi0B3IDswj3EDimV6PSkbN', 'Universitas Muria Kudus'),
(117, 'Safitri', 'Perempuan', 1, 'Jakarta', '2003-10-16', 'Jakarta', '084567444545', 'safitri1337@gmail.com', 'safitri16__', NULL, 'Universitas Bina Nusantara'),
(118, 'Bagus Muhammad Mumtaza', 'Laki-laki', 1, 'Kota Pekalongan', '2003-08-20', 'Indonesia, Jawa Tengah, Kota Pekalongan, Jl. KHM. Mansyur Bendan GG. 7', '085875282178', 'bagusbendan07@gmail.com', '@mmtza.mm', NULL, 'STMIK Widya Pratama Pekalongan'),
(119, 'Riski Eggy Saputro', 'Laki-laki', 1, 'Serang', '2001-05-27', 'Puri Citra', '081911049214', 'eggy.riski27@gmail.com', 'eggy_riski1', 'https://drive.google.com/open?id=14Vuhx9bJpMyR2rtoq7DxOo8tBY5tVElE', 'Universitas Banten Jaya'),
(120, 'RIYANTO', 'Laki-laki', 1, 'Wonosobo', '2002-12-31', 'Wonosobo, Jawa Tengah, Indonesia', '088225448521', 'alfyansyahriyan31@gmail.com', 'Riyan_ceo', 'https://drive.google.com/open?id>1JL2-cvwDt4KZpRWm8ZYwYtV_b3g2uUPM', 'Universitas Sains Al-Quran');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`) VALUES
(4, 'Anwar Fauzan', 'anwarfauzan75@gmail.com', '$2y$10$Kuf3TXi0S7h2h.qHS50p2u3BiwM6fwz5/kgLL5GRI1uQklCMC0WBa', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idagama` (`idagama`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`idagama`) REFERENCES `agama` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
