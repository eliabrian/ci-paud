-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 07, 2019 at 02:50 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ci-paud`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `tanggal` int(11) NOT NULL,
  `tanggal_masuk` int(11) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `nama`, `gambar`, `deskripsi`, `tanggal`, `tanggal_masuk`, `penulis`, `aktif`) VALUES
(1, 'Musyawarah Wilayah Himpaudi Bekasi', 'agenda.svg', '&lt;p&gt;&lt;strong&gt;Musyawarah&lt;/strong&gt; Himpaudi Bekasi yang berlokasi di &lt;strong&gt;Blabla&lt;/strong&gt;, pada tanggal 18 &lt;img src=&quot;blob:http://localhost:8888/30df2f6e-7379-4085-8975-aa086460a400&quot; xss=removed class=&quot;fr-fic fr-dib&quot;&gt;September 2019 pukul 10.00 WIB&lt;/p&gt;', 1572307200, 1570450469, 'Kabupaten Himpaudi Bekasi', 1),
(2, 'Seminar Nasional Kesetaraan di Gedung Graha Cakrawala Universitas Negeri Malang', 'agenda.svg', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed. Lectus proin nibh nisl condimentum id venenatis a condimentum. Dignissim suspendisse in est ante in nibh mauris. Ornare massa eget egestas purus viverra accumsan in nisl nisi. Aliquet nibh praesent tristique magna sit amet purus. Pellentesque sit amet porttitor eget dolor morbi non arcu. Ut venenatis tellus in metus vulputate eu scelerisque felis. Commodo quis imperdiet massa tincidunt nunc pulvinar. Nunc id cursus metus aliquam eleifend. Facilisi morbi tempus iaculis urna id. Neque ornare aenean euismod elementum nisi. Iaculis at erat pellentesque adipiscing. &lt;/p&gt;&lt;p&gt;Tempus iaculis urna id volutpat lacus laoreet. Cras adipiscing enim eu turpis egestas. Nec dui nunc mattis enim ut tellus elementum. In vitae turpis massa sed elementum tempus egestas sed. Amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus. Eu lobortis elementum nibh tellus molestie. Egestas sed sed risus pretium quam vulputate. Posuere ac ut consequat semper viverra nam. Eget dolor morbi non arcu risus quis. Eget dolor morbi non arcu risus quis varius. Risus nec feugiat in fermentum posuere urna. Vitae congue eu consequat ac felis donec. Lorem ipsum dolor sit amet consectetur. Nibh tellus molestie nunc non blandit massa enim nec dui. &lt;/p&gt;&lt;p&gt;Risus commodo viverra maecenas accumsan lacus vel. Id venenatis a condimentum vitae sapien pellentesque habitant. Volutpat commodo sed egestas egestas fringilla. Sem et tortor consequat id. Enim neque volutpat ac tincidunt vitae. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Sit amet nulla facilisi morbi. Cras semper auctor neque vitae tempus. In iaculis nunc sed augue lacus. Pharetra pharetra massa massa ultricies mi. Malesuada fames ac turpis egestas sed. Lorem sed risus ultricies tristique nulla aliquet enim. Mattis molestie a iaculis at erat pellentesque adipiscing commodo. Ornare quam viverra orci sagittis eu volutpat odio facilisis. Quis imperdiet massa tincidunt nunc pulvinar. Porttitor massa id neque aliquam vestibulum morbi blandit cursus. In eu mi bibendum neque egestas congue quisque egestas diam. Feugiat in ante metus dictum at tempor commodo. Accumsan in nisl nisi scelerisque eu ultrices vitae auctor eu. Libero volutpat sed cras ornare arcu. Quam adipiscing vitae proin sagittis nisl rhoncus mattis.&lt;/p&gt;', 1570233600, 1570204830, 'Kabupaten Himpaudi Bekasi', 1),
(3, 'Jalan Sehat dan Doa Bersama di Pantai Ria Kenjeran diikuti perwakilan Himpaudi se-Jawa Timur', 'agenda.svg', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed. Lectus proin nibh nisl condimentum id venenatis a condimentum. Dignissim suspendisse in est ante in nibh mauris. Ornare massa eget egestas purus viverra accumsan in nisl nisi. Aliquet nibh praesent tristique magna sit amet purus. Pellentesque sit amet porttitor eget dolor morbi non arcu. Ut venenatis tellus in metus vulputate eu scelerisque felis. Commodo quis imperdiet massa tincidunt nunc pulvinar. Nunc id cursus metus aliquam eleifend. Facilisi morbi tempus iaculis urna id. Neque ornare aenean euismod elementum nisi. Iaculis at erat pellentesque adipiscing. Tempus iaculis urna id volutpat lacus laoreet. Cras adipiscing enim eu turpis egestas. Nec dui nunc mattis enim ut tellus elementum. In vitae turpis massa sed elementum tempus egestas sed. Amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus. Eu lobortis elementum nibh tellus molestie. Egestas sed sed risus pretium quam vulputate. Posuere ac ut consequat semper viverra nam. Eget dolor morbi non arcu risus quis. Eget dolor morbi non arcu risus quis varius.&lt;/p&gt;', 1574380800, 1570451592, 'Kabupaten Himpaudi Bekasi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deksripsi` varchar(500) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `tgl_masuk` int(11) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `aktif` int(1) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `gambar`, `password`, `role_id`, `aktif`, `dibuat`) VALUES
(1, 'Elia Brian Baskoro', 'elia@gmail.com', 'default.png', '$2y$10$nRxldgclwxYeyiIDzIFk9ekrLj9nAoIb5yQJ5Yqsks.JNdvKrEEay', 3, 1, 1568863623),
(2, 'Nadine Laska', 'nadin@gmail.com', 'default.png', '$2y$10$qp/qK99P84vl7lQWw7V7I.awZjdFVQQ0BP9v7zsIsqdubjJnAZpCe', 1, 1, 1568905994),
(3, 'Ratih Teni', 'ratih@gmail.com', 'default.png', '$2y$10$ywwl0UXVlbmgUQzmf2r9xuMiN5D20gvkjb36Ohi8Qp/Q2msnlspby', 2, 1, 1568907450);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 2, 2),
(4, 2, 3),
(5, 3, 1),
(6, 3, 2),
(7, 3, 3),
(8, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Laporan'),
(3, 'Konten'),
(4, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'paud'),
(2, 'kecamatan'),
(3, 'kabupaten');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(2, 2, 'Sarana', 'laporan/sarana', 'fas fa-fw fa-door-closed', 1),
(3, 2, 'Meubilair', 'laporan/meubilair', 'fas fa-fw fa-chair', 1),
(4, 2, 'Kehadiran', 'laporan/kehadiran', 'fa fa-fw fa-clipboard-list', 1),
(5, 3, 'Berita', 'konten/berita', 'fa fa-fw fa-newspaper', 1),
(6, 1, 'Agenda', 'admin/agenda', 'fa fa-fw fa-calendar', 1),
(7, 4, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(8, 4, 'Sub-Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
