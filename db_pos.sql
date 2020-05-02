-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 01:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '19', NULL),
('admin', '22', NULL),
('create-supplier', '23', NULL),
('user-default', '24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'admin can create,update,delete,view produk', NULL, NULL, NULL, NULL),
('create-kategori', 1, 'allow user to create a kategori', NULL, NULL, NULL, NULL),
('create-supplier', 1, 'allow user to create a supplier', NULL, NULL, NULL, NULL),
('user-default', 1, 'User biasa hanya bisa view produk', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'create-kategori'),
('admin', 'create-supplier');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi`) VALUES
(1, 'Makanan', 'Makanan bergizi'),
(2, 'Minuman', 'Barang ini dapat diminum'),
(3, 'Perawatan Diri', 'Barang kategori ini digunakan untuk merawat diri'),
(4, 'Peralatan Rumah', 'Barang ini digunakan untuk rumah tangga'),
(5, 'Chips', 'Snack Ringan Berkhasiat'),
(6, 'Song', 'Produksi Lagu dari PT.IndoMusik'),
(21, 'Makanan', 'Makanan bergizi'),
(22, 'Makanan', 'Makanan bergizi seimbang\r\n'),
(23, 'Makanan', 'Makanan bergizi seimbang 2\r\n'),
(24, 'Makanan', 'Makanan bergizi seimbang 23\r\n'),
(25, 'Obat-Obatan', 'Perlindungan untuk melawan Penyakit'),
(26, 'Song2', 'Song23\r\n'),
(28, 'Obat-Obatan', 'Perlindungan untuk melawan Penyakit'),
(29, 'Song5', 'song5\r\n'),
(30, 'Obat-Obatan', 'Perlindungan untuk melawan Penyakit'),
(32, 'Song6', 'song6.2'),
(33, 'Obat-Obatan', 'Perlindungan untuk melawan Penyakit'),
(34, 'Song5', 'Role RBAC coba');

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE `new_user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `authKey` varchar(256) NOT NULL,
  `accessToken` varchar(256) NOT NULL,
  `role` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`id`, `username`, `email`, `password`, `authKey`, `accessToken`, `role`) VALUES
(19, 'admin', 'admin@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bTJPSUtkZzAuc1pIMS5UNQ$tAUagAHD91qkT5+E1tIF8vEUrtPa5TVJnqvjDCdu6MQ', 'e996ee31dc54b8209b1eccbf8f1f0957', '$2y$10$4q3TskuNsR2d5gmYhhwvPumI0AmHqNvYwmHwx7xitk8mO7WMMS2nO', 'admin'),
(20, 'if319028', 'viktor@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bEEvR3hTbi9xdEVSblhhLg$y26ApoBoeqV/ovYGuUD1NAALIIXiPLYJ2nl2jWwwM9U', '457d1f0ad679a397d0186479153dae88', '$2y$10$qNkpP3rfrx/seXy..NtrqOuMOpJIvrDWporWDw.6GAR/lSx.Kp.86', 'admin'),
(22, 'demo', 'demo@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$bFdEdnNybUpSSTFVQ1Z6Vw$qiHjzv5CiOTRkynB/zqN+Tf0qAUUKBczo8/of9kAlhk', '040bf566daae39d2c086519f775f5730', '$2y$10$x4lcGI0pP1PGMVhMe65oSuuMVOQO/w7cX3kNPtk6auNg2IvRcLgO.', 'author'),
(23, 'new', 'new@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RGF4RmJCcjJBdG8vWHlnUg$vev8FWUqT3UCeJjRIWHH8ktAnoWlsAy7l8xPI5OAIzQ', '17c8e61d4974836c31826af964dd2a03', '$2y$10$tEWPT26YHiZLfF2GCBcfjeNBrkOs4TCiwFUZmloJCph9YRfAS2s1C', 'author'),
(24, 'percobaan', 'percobaan@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$ajhDSExFVUo0eW90U05vcQ$Tb+ru9kizCMZigQWx7Y7CjJTiyaIJrnfl4U0YCjGesM', 'de54c4e6307a4e8673de2bfa0cd0799d', '$2y$10$PROa5fHB3jb87b9GcvjxIu5.KG/a8daIAxloZFuanV/Q1U54PBvAe', 'author'),
(25, 'percobaan2', 'percobaan2@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$My4yemtObzFzZWZaL3VBTQ$KQXlr61HyFjwQ0SUAXYd9qDJaCSnPMnAMdbZ8c+qDfA', '705255176e56e6f5f647cb9f2bb1f676', '$2y$10$RDXWQT9M0BQfUZkp37fj9eWqd23ra5/rDIxkeFIFZ1Gz07zuwcO7W', 'author'),
(26, 'ad', 'ad', '$argon2i$v=19$m=65536,t=4,p=1$cWNlM1FxS2gvbDBqaEZJcg$GdUjpA1rlvksnOuJ3jDl0T8k0STqrkvg2xlGBnbl2Kk', '931726e0a62d86a97e388ae5ad09ca01', '$2y$10$edKkuAfhtxDIfOVTadiqYO0h7oP.OXJBXhKK9jWiT0B1DSFoHTYG.', 'author'),
(27, 'hai', 'hai', '$argon2i$v=19$m=65536,t=4,p=1$dkdCUG5VZDFub0xSQU1pbw$emP8j52WlpiD/9omWSHAvxLx7NMk4ejIH1QRHVflR0A', '3d86067bdd046dc8ec207ad2602da5d8', '$2y$10$ju05jCqTAQlSXJAxnm6XMeiVWXRIvCCfp/zqtHGcLBp68ptESxQFC', 'author'),
(28, 'percobaan3', 'percobaan3@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$SVM1YnVscjI2a0pXNXlOUg$2zKbhnvJG5Br48oU+SYfsw58G6QJ0JhHT+J5xRoFKsk', 'd9875db4d21468f3b6edca55729af07a', '$2y$10$i.VXsgAlvrC9rAlFgRCLrOE0tnDc15/qFm0laq6E2q21CHyDZx2Eq', 'author');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_produk` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori_id`, `supplier_id`, `nama_produk`, `satuan`, `stok`, `harga_produk`) VALUES
(17, 1, 2, 'donat', 'makanan', 90, 120000),
(22, 2, 2, 'Strawbery', 'biji', 120, 1),
(23, 2, 2, 'Strawbery', 'biji', 120, 1),
(29, 2, 2, 'Kue jumbo', 'biji', 90, 1),
(30, 2, 2, 'Kue jumbo super', 'biji', 90, 1),
(31, 2, 2, 'Kue', 'biji', 90, 1),
(32, 2, 2, 'keju', 'biji', 120, 93),
(50, 1, 1, 'donat', 'makanan', 90, 120000),
(51, 1, 1, 'donat', 'makanan', 90, 120000),
(52, 1, 1, 'donat', 'makanan', 901, 120000),
(53, 1, 1, 'donat', 'makanan', 9012, 120000),
(54, 1, 1, 'donat', 'makanan', 905, 120000),
(55, 1, 1, 'donat', 'makanan', 906, 120000),
(56, 1, 1, 'donat', 'makanan', 905, 120000),
(57, 1, 1, 'donat', 'makanan', 905, 120000),
(59, 1, 1, 'donat', 'makanan', 9056, 120000),
(60, 2, 2, 'Strawberys', 'biji', 120, 1),
(61, 2, 2, 'Strawberys', 'biji', 120, 1),
(63, 1, 1, 'Virus Covid 19', 'Set', 190000000, 99999999),
(64, 1, 1, 'Virus Covid 192', 'Set', 1900000001, 99999999),
(65, 1, 1, 'Virus Covid 192', 'Set', 1900000002, 99999999),
(66, 1, 1, 'Virus Covid 192', 'Set', 1900000003, 99999999),
(67, 1, 1, 'Virus Covid 192', 'Set', 2, 99999999),
(68, 1, 1, 'Virus Covid 192', 'Set2', 190000000, 99999999),
(69, 1, 1, 'Virus Covid 192', 'Set23', 190000000, 99999999),
(70, 1, 1, 'Virus Covid 192', 'Set23', 190000000, 99999999),
(71, 1, 1, 'Strawberys', 'Set', 190000000, 99999999),
(72, 1, 1, 'Strawberys', 'Set', 190000000, 99999999),
(73, 1, 1, 'Virus Covid 19', 'Set', 190000000, 99999999),
(74, 3, 5, 'Leo', 'biji', 123, 5000),
(75, 2, 2, 'Anti Virus Covid-19', 'set', 2, 2),
(76, 6, 6, 'Million Dreams', 'file', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`) VALUES
(1, 'PT Indofood'),
(2, 'PepsiCo Inc'),
(3, 'PT Santos Jaya Abadi'),
(4, 'PT Nestle Indonesia'),
(5, 'PT.Lay\'sOlay'),
(6, 'PT.Indomusik'),
(7, 'PT.IndoMusik'),
(8, 'PT.IndoMusik'),
(9, 'PT.IndoMusik'),
(10, 'PT.IndoMusik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `new_user`
--
ALTER TABLE `new_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori_fk` (`kategori_id`),
  ADD KEY `supplier_fk` (`supplier_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `new_user`
--
ALTER TABLE `new_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
