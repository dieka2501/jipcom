-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2016 at 11:41 
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jsi_community`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `admin_status` text NOT NULL,
  `admin_key` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `admin_status`, `admin_key`, `created_at`, `updated_at`, `deleted_at`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', '1', '', '2016-04-02 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` int(11) NOT NULL,
  `image_title` text NOT NULL,
  `image_description` text NOT NULL,
  `image_tag` text NOT NULL,
  `image_cover` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id_image`, `image_title`, `image_description`, `image_tag`, `image_cover`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Galery 1', 'INi mah bagus', 'bagus,keren,luar biasa', 'Screenshot from 2016-03-22 11-26-56.png', '2016-04-06 21:35:46', '2016-04-06 21:35:46', '0000-00-00 00:00:00'),
(5, 'Galery 2', 'Ini untuk galery ke 2', 'Radio,mobil,laptop', 'Screenshot from 2016-03-07 14-05-27.png', '2016-04-07 09:06:53', '2016-04-07 09:06:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `image_file`
--

DROP TABLE IF EXISTS `image_file`;
CREATE TABLE IF NOT EXISTS `image_file` (
  `id_if` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `if_name` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_file`
--

INSERT INTO `image_file` (`id_if`, `image_id`, `if_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 3, 'Screenshot from 2016-03-22 11-26-56.png', '2016-04-06 21:35:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'Screenshot from 2016-03-07 14-05-27.png', '2016-04-06 21:35:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 'dikdik04_full.jpg', '2016-04-06 23:22:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 'DSC_9242.jpg', '2016-04-06 23:25:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 'hiu-paus-raja-ampat.jpg', '2016-04-06 23:26:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 'ktp.jpg', '2016-04-06 23:26:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 'npwp.jpg', '2016-04-06 23:26:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 5, 'Screenshot from 2016-03-07 14-05-27.png', '2016-04-07 09:06:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 5, 'Screenshot from 2016-02-03 11-22-53.png', '2016-04-07 09:06:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 5, 'Screenshot from 2016-01-18 13-18-03.png', '2016-04-07 09:06:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL,
  `member_image` text NOT NULL,
  `member_name` text NOT NULL,
  `member_nickname` text NOT NULL,
  `member_birth` text NOT NULL,
  `member_religion` text NOT NULL,
  `member_sex` text NOT NULL,
  `member_blood_type` text NOT NULL,
  `member_address` text NOT NULL,
  `member_phone` text NOT NULL,
  `member_email` text NOT NULL,
  `member_office` text NOT NULL,
  `member_business` text NOT NULL,
  `member_position` text NOT NULL,
  `member_office_address` text NOT NULL,
  `member_office_number` text NOT NULL,
  `member_license` text NOT NULL,
  `member_nopol` text NOT NULL,
  `member_engine` text NOT NULL,
  `member_chasis` text NOT NULL,
  `member_color` text NOT NULL,
  `member_car_year` text NOT NULL,
  `member_car_type` text NOT NULL,
  `member_kta_start` date NOT NULL,
  `member_kta_end` date NOT NULL,
  `member_size` text NOT NULL,
  `member_platinum` text NOT NULL,
  `member_type` enum('new','old') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `member_image`, `member_name`, `member_nickname`, `member_birth`, `member_religion`, `member_sex`, `member_blood_type`, `member_address`, `member_phone`, `member_email`, `member_office`, `member_business`, `member_position`, `member_office_address`, `member_office_number`, `member_license`, `member_nopol`, `member_engine`, `member_chasis`, `member_color`, `member_car_year`, `member_car_type`, `member_kta_start`, `member_kta_end`, `member_size`, `member_platinum`, `member_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Screenshot from 2016-02-03 09-25-19.png', 'Dikdik Kusdinar', 'Dikdik', 'Bandung 04 maret 1988', 'ISLAM', 'laki-laki', 'A', 'Perum sanggar indah banjaran', '08888888', 'dieka.koes@gmail.com', 'Deasnet', 'IT', 'CTO', 'Jakarta', '088877777', '9897383839', 'B 3839 HJU', 'iheufiennv93048q2-48g n93', '838383hjdjf8303 nkjdfh3', 'HITAM', '2016', 'Jazz', '2016-03-03', '2017-03-03', '0', '8938938', 'new', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Screenshot from 2015-12-29 10-10-37.png', 'Intan Nadya Lestari', 'Kakak Intan', 'Bogor, 16 Oktober 1992', 'ISLAM', 'perempuan', 'A', 'Matahari Residence', '077777777', 'intan.nadya92@gmail.com', 'Deasnet', 'Pendidikan', 'Guru', 'Xxxxxxx', '000000000', '000000000', 'D 9282 BAS', '77777yyyyyyy', '8888888888', 'Hitam', '2000', 'Sedan', '2016-03-03', '2017-03-03', 'xl', '12222222', 'new', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Screenshot from 2015-12-29 10-10-37.png', 'Intan Nadya Lestari', 'Kakak Intan', 'Bogor, 16 Oktober 1992', 'ISLAM', 'perempuan', 'A', 'Matahari Residence', '077777777', 'intan.nadya92@gmail.com', 'Deasnet', 'Pendidikan', 'Guru', 'Xxxxxxx', '000000000', '000000000', 'D 9282 BAS', '77777yyyyyyy', '8888888888', 'Hitam', '2000', 'Sedan', '2016-03-03', '2017-03-03', 'xl', '12222222', 'new', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Screenshot from 2015-12-29 10-10-37.png', 'Intan Nadya Lestari', 'Kakak Intan', 'Bogor, 16 Oktober 1992', 'ISLAM', 'perempuan', 'A', 'Matahari Residence', '077777777', 'intan.nadya92@gmail.com', 'Deasnet', 'Pendidikan', 'Guru', 'Xxxxxxx', '000000000', '000000000', 'D 9282 BAS', '77777yyyyyyy', '8888888888', 'Hitam', '2000', 'Sedan', '2016-03-03', '2017-03-03', 'xl', '12222222', 'new', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news_event`
--

DROP TABLE IF EXISTS `news_event`;
CREATE TABLE IF NOT EXISTS `news_event` (
  `id_ne` int(11) NOT NULL,
  `ne_title` text NOT NULL,
  `ne_content` text NOT NULL,
  `ne_tag` text NOT NULL,
  `ne_image` text NOT NULL,
  `ne_type` enum('news','event') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_event`
--

INSERT INTO `news_event` (`id_ne`, `ne_title`, `ne_content`, `ne_tag`, `ne_image`, `ne_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Jokowi Tekankan Penyederhanaan Perizinan ', '<p style="line-height: 24px; margin-top: 3px; color: rgb(75, 75, 75); font-family: Lucida, helvetica, sans-serif; font-size: 16px;"><span style="font-weight: 700;">AKARTA, KOMPAS.com</span>&nbsp;- Dua tantangan Indonesia ke depan adalah keterbukaan dan kompetisi. Untuk Memenangkan kompetisi itu, penyederhanaan perizinan (deregulasi) mutlak dilakukan.</p><p style="line-height: 24px; margin-top: 3px; color: rgb(75, 75, 75); font-family: Lucida, helvetica, sans-serif; font-size: 16px;">Demikian ditegaskan Presiden RI Joko Widodo, dalam pidato kuncinya di dialog publik Ikatan Sarjana Ekonomi Indonesia (ISEI), Jakarta, Rabu (30/3/2016).</p><p style="line-height: 24px; margin-top: 3px; color: rgb(75, 75, 75); font-family: Lucida, helvetica, sans-serif; font-size: 16px;">Jokowi menyampaikan sudah menegaskan kepada para menteri bahwa orientasi perizinan saat ini bukanlah prosedur, melainkan hasil.</p><p style="line-height: 24px; margin-top: 3px; color: rgb(75, 75, 75); font-family: Lucida, helvetica, sans-serif; font-size: 16px;">"Kalau masih prosedar-prosedur, pusing. Lambat, lamban kita. Kecepatan itu yang dibutuhkan dalam kom</p>', 'Jokowi,pemerintah,hidup baru', 'Screenshot from 2016-01-28 21-57-55.png', 'event', '2016-03-30 22:55:46', '2016-03-30 22:55:46', '0000-00-00 00:00:00'),
(3, 'Philips Terangi Kota Semarang dengan Lampu Hemat Energi', '<p dir="ltr" style="line-height: 24.003px; margin-top: 3px; margin-bottom: 30px; color: rgb(75, 75, 75); font-family: Lucida, helvetica, sans-serif; font-size: 16.002px;"><strong style="font-family: OpenSans-B, sans-serif;">EMARANG, KOMPAS.com -</strong>&nbsp;Phillips Lighting Indonesia kembali mengadakan program Kota Terang Phillips LED (KTPL). Kali ini Semarang dipilih sebagai sasaran KTPL 2016.</p><p dir="ltr" style="line-height: 24.003px; margin-top: 3px; margin-bottom: 30px; color: rgb(75, 75, 75); font-family: Lucida, helvetica, sans-serif; font-size: 16.002px;">KTPL merupakan bagian dari upaya Philips Lighting lndonesia untuk meningkatkan kehidupan masyarakat yakni dengan mendukung kota-kota di Indonesia agar menjadi lebih indah, aman dan nyaman huni dengan menggunakan pencahayaan pintar dan hemat energi.</p><p dir="ltr" style="line-height: 24.003px; margin-top: 3px; margin-bottom: 30px; color: rgb(75, 75, 75); font-family: Lucida, helvetica, sans-serif; font-size: 16.002px;">"Untuk di Semarang kami menyinari Balai Kota dan tujuh jalan utama di Semarang, kami berharap da</p>', 'philips,lampu', 'Screenshot from 2016-02-03 09-25-19.png', 'news', '2016-03-30 22:54:44', '2016-03-30 22:54:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news_event_file`
--

DROP TABLE IF EXISTS `news_event_file`;
CREATE TABLE IF NOT EXISTS `news_event_file` (
  `id_nef` int(11) NOT NULL,
  `ne_id` int(11) NOT NULL,
  `nef_file` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_event_file`
--

INSERT INTO `news_event_file` (`id_nef`, `ne_id`, `nef_file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 2, 'Screenshot from 2016-01-26 14-08-03.png', '2016-03-30 14:53:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 'Screenshot from 2016-02-03 11-22-53.png', '2016-03-30 22:05:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 'Screenshot from 2016-03-10 11-42-46.png', '2016-03-30 22:05:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 'Screenshot from 2016-02-03 09-25-19.png', '2016-03-30 22:54:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 3, 'Screenshot from 2016-03-28 10-56-12.png', '2016-03-30 22:54:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 3, 'Screenshot from 2016-02-03 11-21-57.png', '2016-03-30 22:54:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, 'Screenshot from 2016-01-28 21-57-55.png', '2016-03-30 22:55:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, 'Screenshot from 2016-03-28 17-47-48.png', '2016-03-30 22:55:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL,
  `video_title` text NOT NULL,
  `video_description` text NOT NULL,
  `video_tag` text NOT NULL,
  `video_thumbnail` text NOT NULL,
  `video_url` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `video_title`, `video_description`, `video_tag`, `video_thumbnail`, `video_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Video Dua Update', 'Deskripsi  Yang Sudah diupdate', 'baru,nidji, Chrisye', '71c1a583-ec9c-4e61-a41e-4911afb2da7c.jpg', 'https://www.youtube.com/watch?v=mF6zX4wc_Hs', '2016-04-11 10:23:36', '2016-04-11 11:06:09', '0000-00-00 00:00:00'),
(4, 'Video Satu', 'Deskripsi Baru', 'baru,nidji', 'Screenshot from 2016-01-26 14-08-03.png', 'https://www.youtube.com/watch?v=md1dI_Wahx4', '2016-04-11 10:24:05', '2016-04-11 11:12:35', '0000-00-00 00:00:00'),
(7, 'Video Format Baru', '', 'Dewa 19,Dewadul', 'Screenshot from 2016-01-18 13-03-07.png', 'https://www.youtube.com/watch?v=cOIKAnF3mjs', '2016-04-11 11:00:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `video_file`
--

DROP TABLE IF EXISTS `video_file`;
CREATE TABLE IF NOT EXISTS `video_file` (
  `id_vf` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `vf_title` text NOT NULL,
  `vf_file` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_file`
--

INSERT INTO `video_file` (`id_vf`, `video_id`, `vf_title`, `vf_file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, '', 'https://www.youtube.com/watch?v=Jpatu-N2MBA', '2016-04-11 10:24:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 4, '', 'https://www.youtube.com/watch?v=tRytdAe5JQU', '2016-04-11 10:24:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, '', 'https://www.youtube.com/watch?v=EXxbDdmYxKY', '2016-04-11 10:33:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`(100));

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `image_file`
--
ALTER TABLE `image_file`
  ADD PRIMARY KEY (`id_if`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `news_event`
--
ALTER TABLE `news_event`
  ADD PRIMARY KEY (`id_ne`);

--
-- Indexes for table `news_event_file`
--
ALTER TABLE `news_event_file`
  ADD PRIMARY KEY (`id_nef`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `video_file`
--
ALTER TABLE `video_file`
  ADD PRIMARY KEY (`id_vf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `image_file`
--
ALTER TABLE `image_file`
  MODIFY `id_if` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news_event`
--
ALTER TABLE `news_event`
  MODIFY `id_ne` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_event_file`
--
ALTER TABLE `news_event_file`
  MODIFY `id_nef` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `video_file`
--
ALTER TABLE `video_file`
  MODIFY `id_vf` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
