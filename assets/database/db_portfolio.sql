-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 10:33 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_section`
--

CREATE TABLE `about_section` (
  `id` int(11) NOT NULL,
  `position` varchar(10) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `extention` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_section`
--

INSERT INTO `about_section` (`id`, `position`, `title`, `content`, `extention`) VALUES
(1, 'left', '<h2 class=\"font-bold text-slate-200 text-3xl mb-5 max-w-md\">Halo orang kepo, <span class=\"block\">Selamat datang !</span></h2>', '<p class=\"font-medium text-base text-secondary max-w-xl text-justify\">Perkenalkan, saya Nuzril. Saat ini saya bekerja sebagai IT di sebuah perusahaan di bidang perbankan, PT BPR Madani Sejahtera Abadi. Beberapa projek yang saya kerjakan akan saya lampirkan pada website ini. Jika ada pertanyaan atau saran untuk website atau projek yang saya kerjakan, alangkah baiknya dapat langsung menghubungi saya. Terima kasih!</p>', ''),
(2, 'right', '<h3 class=\"font-semibold text-slate-200 text-2xl mb-4 lg:text-3xl lg:pt-6\">Let\'s be a friend !</h3>', '<p class=\"font-medium text-base text-secondary mb-6 lg:text-lg lg:pt-10 text-justify\">Karena semuanya berawal dari pertemanan. Siapa tau kita...</p>', '<div class=\"flex items-center\">\n						<!-- Instagram -->\n						<a href=\"https://www.instagram.com/mnuzrili\" target=\"_blank\" class=\"w-9 h-9 mr-3 icon icon-1 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white\">\n							<svg role=\"img\" width=\"20\" class=\"fill-current \" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\n								<title>Instagram</title>\n								<path d=\"M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z\" />\n							</svg>\n						</a>\n						<!-- Twitter -->\n						<a href=\"https://twitter.com/mnuzrili\" target=\"_blank\" class=\"w-9 h-9 mr-3 icon icon-2 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white\">\n							<svg role=\"img\" width=\"20\" class=\"fill-current\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\n								<title>Twitter</title>\n								<path d=\"M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z\" />\n							</svg>\n						</a>\n						<!-- GitHub -->\n						<a href=\"https://github.com/mnuzrili\" target=\"_blank\" class=\"w-9 h-9 mr-3 icon icon-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white\">\n							<svg role=\"img\" width=\"20\" class=\"fill-current\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\n								<title>GitHub</title>\n								<path d=\"M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12\" />\n							</svg>\n						</a>\n						<!-- Youtube -->\n						<a href=\"https://www.youtube.com/channel/UCJPe778VziucG7Fvry3M8jQ/\" target=\"_blank\" class=\"w-9 h-9 mr-3 icon icon-4 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white\">\n							<svg role=\"img\" width=\"20\" class=\"fill-current\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\n								<title>YouTube</title>\n								<path d=\"M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z\" />\n							</svg>\n						</a>\n					</div>');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hero_section`
--

CREATE TABLE `hero_section` (
  `id` int(11) NOT NULL,
  `photo_profile` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero_section`
--

INSERT INTO `hero_section` (`id`, `photo_profile`, `title`, `content`) VALUES
(1, 'pp2.png', '<h1 class=\"text-base font-semibold text-primary md:text-xl lg:text-2xl\">Hallo Semua 👋, saya <span class=\"block font-bold text-slate-200 text-3xl mt-1 lg:text-5xl\">Muhammad Nuzril Isro</span> </h1>\r\n					<h2 class=\"font-medium text-slate-500 text-lg mb-5 lg:text-2xl\">Coding & <span class=\"text-white\">Debugging</span></h2>', '<p class=\"font-medium text-secondary leading-relaxed\">Belajar mencintai <span class=\"text-slate-200 font-bold\">programming.</span></p>\r\n					<p class=\"font-semibold text-slate-500 mb-10 leading-relaxed\">\"Practice make improvement\"</p>');

-- --------------------------------------------------------

--
-- Table structure for table `message_tb`
--

CREATE TABLE `message_tb` (
  `id_message` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_tb`
--

INSERT INTO `message_tb` (`id_message`, `name`, `email`, `message`, `is_read`, `created_at`) VALUES
(1, 'Tes', 'bprmsa@yahoo.com', 'Haiii.....', 0, '2022-04-08 11:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_section`
--

CREATE TABLE `portfolio_section` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_section`
--

INSERT INTO `portfolio_section` (`id`, `img`, `title`, `content`) VALUES
(1, 'e_sdm.png', 'E-SDM BPR MSA', 'E-SDM adalah sebuah aplikasi berbasis web yang dibuat untuk mengelola karyawan di PT BPR Madani Sejahtera Abadi. Mulai dari input karyawan baru, karyawan resign, slip gaji, permohonan serta approval cuti, perjalanan dinas dan pelatihan yang pernah diikuti karyawan. Aplikasi ini memiliki fitur untuk melihat user yang sedang online, fitur chating (dalam pengembangan), dan juga notifikasi via telegram (untuk fitur ini user harus menghubungkan akunnya dengan telegram via telegram bot).'),
(2, 'kiosaku.png', 'Market Place UMKM Kios Aku', 'Ini adalah sebuah closed market place yang dibuat untuk menunjang program Kios Aku Digital yang dilakukan oleh BPR MSA bekerja sama dengan Aku Mandiri Yogyakarta, dimana UMKM yang bekerjasama dengan BPR MSA dapat menjual produknya secara online kepada pemilik Kios Aku.'),
(3, 'pengajuan.png', 'Pengajuan Kios Aku', 'Pengajuan Kios Aku adalah sebuah aplikasi untuk mengajukan permohonan pembuatan Kios Aku. Dimana pada aplikasi ini dapat memonitor proses pengajuan sudah sampai ditahap mana serta dokumentasi pengalokasian dana yang digunakan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `is_confirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `is_deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `created_at`, `updated_at`, `is_admin`, `is_confirmed`, `is_deleted`) VALUES
(1, 'nuzril', 'muhammadnuzril@gmail.com', '$2y$10$a.znLokrwVTRGKz2xR5/8uDzLGFIvU/Aglm02gCiO.fEiqg8x2UVi', 'pp2.png', '2022-04-13 09:09:41', NULL, 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_section`
--
ALTER TABLE `about_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `hero_section`
--
ALTER TABLE `hero_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_tb`
--
ALTER TABLE `message_tb`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `portfolio_section`
--
ALTER TABLE `portfolio_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_section`
--
ALTER TABLE `about_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hero_section`
--
ALTER TABLE `hero_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message_tb`
--
ALTER TABLE `message_tb`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_section`
--
ALTER TABLE `portfolio_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
