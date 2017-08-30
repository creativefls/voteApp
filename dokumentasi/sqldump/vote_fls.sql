-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2017 at 04:00 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote_fls`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'Delegates');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_workshop`
--

CREATE TABLE `kelas_workshop` (
  `id_workshop` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_workshop`
--

INSERT INTO `kelas_workshop` (`id_workshop`, `nama_kelas`, `deskripsi`, `gambar_logo`) VALUES
(1, 'Idea Development', 'Kelas ini bertujuan untuk menantang delegates bagaimana mereka dapat mengembangkan ide-idea yang selama ini mereka miliki agar menjadi suatu karya yang nyata.', 'https://user-images.githubusercontent.com/10141928/29752965-f91a375e-8b91-11e7-9791-1bd78efaa8e0.png'),
(2, 'Content', 'Dalam kelas ini delegates akan diajarkan bagaimana cara mereka mengimplementasikan ide-ide yang mereka miliki ke dalam bentuk tulisan (content) yang efektif dan efisien untuk dapat disampaikan kepada masyarakat luas.', 'https://user-images.githubusercontent.com/10141928/29752967-f924a25c-8b91-11e7-8bc9-e8186a8f4072.png'),
(3, 'Branding', 'Dalam kelas ini delegates akan belajar \'how to sell their idea\', dimana mereka akan belajar langkah-langkah kongkrit agar ide-ide hebat yang mereka miliki dapat terlihat menarik dan meyakinkan dan tentu saja disukai pula oleh orang lain.', 'https://user-images.githubusercontent.com/10141928/29752964-f91742ba-8b91-11e7-9181-9e9c8a5f2076.png'),
(4, 'Presentation Skill', 'Kelas ini bertujuan untuk mengasah kemampuan presentasi delegates yang mencakup public speaking dan transfer idea dimana juga mencakup kemampuan membuat presentasi yang menarik namun juga efektif dan efisien.', 'https://user-images.githubusercontent.com/10141928/29752968-f927f8bc-8b91-11e7-8593-13c99ef6c173.png'),
(5, 'Customer Insight', 'Salah satu tujuan dari customer insight ini adalah dapat menjual sebuah idea dengan lebih mudah, dimana idea tersebut dapat memenuhi insight dari konsumen dengan menyediakan benefit yang ditawarkan. Kelas consumers insight sendiri merupakan kelas yang akan mengajarkan delegates bagaimana caranya menganalisis kebutuhan pasar dan apa yang pasar inginkan. sehingga diharapkan delegates dapat pula belajar dalam menentukan target maupun segmentasi dari idea yang ingin mereka buat.', 'https://user-images.githubusercontent.com/10141928/29752966-f91c7262-8b91-11e7-8f75-44a94a1671e9.png');

-- --------------------------------------------------------

--
-- Table structure for table `komunitas`
--

CREATE TABLE `komunitas` (
  `id_komunitas` int(11) NOT NULL,
  `nama_komunitas` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(7, '127.0.0.1', 'editor@gmail.com', 1503851400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `id_workshop` int(11) DEFAULT NULL,
  `id_komunitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `id_workshop`, `id_komunitas`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'GT9i.CsAj60vGLcadsTHMu', 1268889823, 1503804845, 1, 'Admin', 'istrator', 'ADMIN', '0', NULL, NULL),
(2, '127.0.0.1', 'delegates@fls.com', '$2y$08$OVqKkIuMa726HFYpj6xCNuOh/QfCYsgZWLszGQWDYgYLIApw1NmHy', NULL, 'delegates@fls.com', NULL, NULL, NULL, NULL, 1503797772, 1503924376, 1, 'Indra', 'Kusuma', '', '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_workshop`
--
ALTER TABLE `kelas_workshop`
  ADD PRIMARY KEY (`id_workshop`);

--
-- Indexes for table `komunitas`
--
ALTER TABLE `komunitas`
  ADD PRIMARY KEY (`id_komunitas`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_workshop` (`id_workshop`),
  ADD KEY `id_komunitas` (`id_komunitas`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kelas_workshop`
--
ALTER TABLE `kelas_workshop`
  MODIFY `id_workshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `komunitas`
--
ALTER TABLE `komunitas`
  MODIFY `id_komunitas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_workshop`) REFERENCES `kelas_workshop` (`id_workshop`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_komunitas`) REFERENCES `komunitas` (`id_komunitas`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
