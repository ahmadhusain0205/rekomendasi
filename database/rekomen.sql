-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 08:02 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekomen`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name_place` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `link_maps` varchar(200) DEFAULT NULL,
  `id_wifi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id`, `image`, `name_place`, `address`, `link_maps`, `id_wifi`) VALUES
(1, 'rm.png', 'Tuin Van Java', 'Kuliner Tuin van Java, Jl. Tentara Pelajar, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56100', 'https://g.page/pank-s-kebab?share', 1),
(2, 'kuliner sigaluh.jpg', 'Kuliner Sigaluh', 'Jl. Sigaluh No.5, Panjang, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56111', 'https://goo.gl/maps/K5MqqFuX3wKgWJ199', 1),
(3, 'special kari.jpg', 'Special Kari BRC Kuliner Magelang', 'Jl. Alibasah Sentot, Magelang, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56117', 'https://goo.gl/maps/T4SmQdihxp9ugkTt8', 1),
(4, 'lembah tidar.jpg', 'Kuliner Lembah Tidar', 'Magersari, Kec. Magelang Sel., Kota Magelang, Jawa Tengah 59214', 'https://goo.gl/maps/3WvJQs5sH8GaoXw49', 2),
(5, 'rm1.png', 'Kuliner Sejuta Bunga', 'Jl. Jend. Sudirman, Rejowinangun Sel., Kec. Magelang Sel., Kota Magelang, Jawa Tengah 59214', 'https://goo.gl/maps/PSZenKApYWiwX28w5', 2),
(6, 'kartika sari.jpg', 'Kuliner Kartika Sari', 'Jl. Tidar, Kemirirejo, Magelang Tengah, Magersari, Kec. Magelang Sel., Kota Magelang, Jawa Tengah 56122', 'https://goo.gl/maps/2QaWdLSKFTE1rWS86', 1),
(7, 'jenggolo.jpg', 'Kuliner Jenggolo', 'Jl. Jenggolo, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122', 'https://goo.gl/maps/qU9SHe6pitP8Fxcu9', 2),
(8, 'jendralan.jpg', 'Kuliner Jendralan', 'Jalan Mangkubumi, Magelang Tengah, Magelang, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56121', 'https://goo.gl/maps/k1BmzfT6gnR4f6w8A', 2),
(9, 'armada estate.jpg', 'Kuliner Armada Estate', 'Jalan Ahmad Yani, Kedungsari, Magelang Utara, Kramat Utara, Kec. Magelang Utara, Kota Magelang, Jawa Tengah 59155', 'https://goo.gl/maps/WW3bBkzQ5G2nFZdAA', 2),
(10, 'rm pancoran.jpg', 'Rumah Makan Pancoran', 'Jl. Daha No.1, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122', 'https://goo.gl/maps/gqR8AVXgX9VjFFB58', 2),
(11, 'gembong gedhe.jpg', 'Roti Gembong Gedhe Potrobangsan', 'Jl. Pahlawan No No.106, Potrobangsann, Kec. Magelang Utara, Kota Magelang, Jawa Tengah 56116', 'https://goo.gl/maps/FvHC4KL2ftom1XzZ9', 2),
(12, 'kalingga.jpg', 'Kuliner Kalingga', 'Jl. Kalingga, Rejowinangun Utara, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56111', 'https://goo.gl/maps/afmScRRSBy2Nn15Q8', 2),
(13, 'kacang kebon.jpg', 'Wedang Kacang Kebon', 'Jl. Pajang, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122', 'https://goo.gl/maps/uyLXYy31PZZ9EK7f8', 2),
(14, 'asmoro 05.jpg', 'Kuliner Asmoro 05', 'Gg. Asmoro, Magersari, Kec. Magelang Sel., Kota Magelang, Jawa Tengah 59214', 'https://goo.gl/maps/Y6TLx85JYwGrW4rF9', 1),
(15, 'ayam gading.jpg', 'Mie Ayam Gading', 'Jl. Pajajaran No.2, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122', 'https://goo.gl/maps/1WarhuHKD8z9E2qX8', 2),
(16, 'mega kuliner.jpg', 'New Mega Kuliner & Cafe', 'Jalan Tentara Pelajar No. 56, Bayeman, Magelang Tengah, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122', 'https://goo.gl/maps/diP4HDtenKtdSzCV7', 1),
(17, 'sriwijaya.jpg', 'Sentra Kuliner Sriwijaya', 'Jl. Sriwijaya No.3, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119', 'https://goo.gl/maps/Szf1622QyuKjMzv67', 1),
(18, 's.parman.jpg', 'Kuliner KAPT S.Parman', 'Tuguran, Potrobangsan, Kec. Magelang Utara, Kota Magelang, Jawa Tengah 56116', 'https://goo.gl/maps/2ZXqJ76sme4LNPYn9', 1),
(19, 'lemongrass.jpg', 'Lemongrass Rooftop\'n Eatety', 'Jl. Abimanyu No.1 A, Gelangan, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56112', 'https://goo.gl/maps/RF89FEYyWHLHC9Ky5', 1),
(20, 'sambal krajan.jpg', 'Warung Sambal Joglo Krajan', 'Jl. Beringin 3, Tidar Selatan, Magelang Selatan, Tidar Sel., Kec. Magelang Sel., Kota Magelang, Jawa Tengah 56125', 'https://goo.gl/maps/igt5XwzYYarJsauM9', 2),
(21, 'warung ndeso.jpg', 'Warung Ndeso', 'Magelang, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56117', 'https://goo.gl/maps/zYBxsSDkKaCbbTjE7', 2),
(22, 'es murni.png', 'Es Murni Magelang', 'Jl. Sriwijaya No. 28, Panjang, Magelang Tengah, Rejowinangun Utara, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56111', 'https://goo.gl/maps/tTmEZLWEAooLP6Ap8', 2),
(23, 'markaz.jpg', 'Markaz Kuliner', 'Kramat Sel., Kec. Magelang Utara, Kota Magelang, Jawa Tengah 56115', 'https://goo.gl/maps/kxpGJ1fNwiGXR5c27', 2),
(24, 'sop senerek.jpg', 'Sop Senerek Pak Parto', 'Jl. Jend. Sudirman, Magersari, Kec. Magelang Sel., Kota Magelang, Jawa Tengah 59214', 'https://goo.gl/maps/zFUF9Z1avX3DSeiF7', 2),
(25, 'kuliner magelang.jpg', 'Kuliner Magelang', 'Jl. Sultan Agung, Jurangombo Sel., Kec. Magelang Sel., Kota Magelang, Jawa Tengah 56123', 'https://goo.gl/maps/k3wGXE5Rv9MJbank9', 2),
(26, 'mie pak yanto.jpg', 'Mie Ayam Pak Yanto', 'Potrobangsan, Kec. Magelang Utara, Kota Magelang, Jawa Tengah 56116', 'https://goo.gl/maps/LFB6LL5ekPkfGvCMA', 2),
(27, 'tahu pojok.jpg', 'Kuliner Tahu Pojok Magelang', 'Jl. Tentara Pelajar Kios No.14, Cacaban, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56121', 'https://goo.gl/maps/wRXCfev3iavPciUT8', 2),
(28, 'ayam sidoel.jpg', 'Kuliner Jenggolo Ayam Sidoel Peyet', 'Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122', 'https://goo.gl/maps/cwXKuaHxqiddAmbR8', 1),
(29, 'tip top.jpg', 'Rumah Makan Tip Top', 'Jl. Tentara Pelajar No.53B, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122', 'https://goo.gl/maps/cnj5VDZAFqJKPZh86', 1),
(30, 'rm1.png', 'Pank\'s Kebab', 'Kuliner Tuin van Java, Jl. Tentara Pelajar, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56100', 'https://g.page/pank-s-kebab?share', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_gender`
--

CREATE TABLE `m_gender` (
  `id` int(11) NOT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_gender`
--

INSERT INTO `m_gender` (`id`, `gender`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `m_rating`
--

CREATE TABLE `m_rating` (
  `id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_rating`
--

INSERT INTO `m_rating` (`id`, `rating`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `m_religion`
--

CREATE TABLE `m_religion` (
  `id` int(11) NOT NULL,
  `religion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_religion`
--

INSERT INTO `m_religion` (`id`, `religion`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Protestan'),
(4, 'Konghuchu'),
(5, 'Hindu'),
(6, 'Budha'),
(7, 'atheis');

-- --------------------------------------------------------

--
-- Table structure for table `m_role`
--

CREATE TABLE `m_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_role`
--

INSERT INTO `m_role` (`id`, `role`) VALUES
(1, 'administartor'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `m_wifi`
--

CREATE TABLE `m_wifi` (
  `id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_wifi`
--

INSERT INTO `m_wifi` (`id`, `status`) VALUES
(1, 'ada'),
(2, 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `similarity`
--

CREATE TABLE `similarity` (
  `id` int(11) NOT NULL,
  `id_rating` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kuliner` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `similarity`
--

INSERT INTO `similarity` (`id`, `id_rating`, `id_user`, `id_kuliner`) VALUES
(191, NULL, 10, 1),
(192, 4, 10, 2),
(193, 3, 10, 3),
(194, 3, 10, 4),
(195, 5, 10, 5),
(196, 3, 10, 6),
(197, 4, 10, 7),
(198, 5, 10, 8),
(199, 3, 10, 9),
(200, 2, 10, 10),
(201, 5, 10, 11),
(202, 2, 10, 12),
(203, 3, 10, 15),
(204, 3, 10, 18),
(205, 4, 10, 19),
(206, 5, 10, 23),
(207, 2, 10, 24),
(208, 3, 10, 25),
(209, 3, 10, 26),
(210, 2, 10, 27),
(211, 2, 10, 28),
(212, 5, 10, 30),
(213, 4, 11, 1),
(214, 4, 11, 2),
(215, 4, 11, 3),
(216, 5, 11, 4),
(217, 4, 11, 5),
(218, 5, 11, 6),
(219, 3, 11, 7),
(220, 4, 11, 8),
(221, 5, 11, 9),
(222, 3, 11, 10),
(223, 3, 11, 11),
(224, 4, 11, 12),
(225, 5, 11, 13),
(226, 4, 11, 14),
(227, 5, 11, 15),
(228, 4, 11, 16),
(229, 3, 11, 17),
(230, 4, 11, 18),
(231, 5, 11, 19),
(232, 4, 11, 20),
(233, 3, 11, 21),
(234, 5, 11, 22),
(235, 3, 11, 23),
(236, 3, 11, 24),
(237, 5, 11, 25),
(238, 4, 11, 26),
(239, 4, 11, 27),
(240, 5, 11, 28),
(241, 3, 11, 29),
(242, 4, 11, 30),
(243, 3, 12, 1),
(244, 3, 12, 2),
(245, 3, 12, 3),
(246, 3, 12, 4),
(247, 3, 12, 5),
(248, 3, 12, 6),
(249, 3, 12, 7),
(250, 3, 12, 8),
(251, 3, 12, 9),
(252, 3, 12, 10),
(253, 3, 12, 11),
(254, 3, 12, 12),
(255, 3, 12, 13),
(256, 3, 12, 14),
(257, 3, 12, 15),
(258, 3, 12, 16),
(259, 3, 12, 17),
(260, 3, 12, 18),
(261, 3, 12, 19),
(262, 3, 12, 20),
(263, 3, 12, 21),
(264, 3, 12, 22),
(265, 3, 12, 23),
(266, 3, 12, 24),
(267, 3, 12, 25),
(268, 3, 12, 26),
(269, 3, 12, 27),
(270, 3, 12, 28),
(271, 3, 12, 29),
(272, 3, 12, 30),
(273, 4, 13, 1),
(274, 4, 13, 2),
(275, 3, 13, 3),
(276, 3, 13, 4),
(277, 5, 13, 5),
(278, 3, 13, 6),
(279, 4, 13, 7),
(280, 4, 13, 8),
(281, 5, 13, 9),
(282, 3, 13, 10),
(283, 4, 13, 11),
(284, 4, 13, 12),
(285, 4, 13, 13),
(286, 4, 13, 14),
(287, 4, 13, 15),
(288, 4, 13, 16),
(289, 3, 13, 17),
(290, 4, 13, 18),
(291, 5, 13, 19),
(292, 5, 13, 20),
(293, 3, 13, 21),
(294, 5, 13, 22),
(295, 4, 13, 23),
(296, 5, 13, 24),
(297, 4, 13, 25),
(298, 5, 13, 26),
(299, 3, 13, 27),
(300, 4, 13, 28),
(301, 4, 13, 29),
(302, 5, 13, 30),
(303, 4, 14, 1),
(304, 4, 14, 2),
(305, 5, 14, 3),
(306, 5, 14, 4),
(307, 5, 14, 5),
(308, 4, 14, 6),
(309, 5, 14, 7),
(310, 4, 14, 8),
(311, 4, 14, 9),
(312, 4, 14, 10),
(313, 4, 14, 11),
(314, 4, 14, 12),
(315, 5, 14, 13),
(316, 3, 14, 14),
(317, 4, 14, 15),
(318, 4, 14, 16),
(319, 3, 14, 17),
(320, 3, 14, 18),
(321, 5, 14, 19),
(322, 5, 14, 20),
(323, 5, 14, 21),
(324, 5, 14, 22),
(325, 5, 14, 23),
(326, 5, 14, 24),
(327, 4, 14, 25),
(328, 4, 14, 26),
(329, 3, 14, 27),
(330, 5, 14, 28),
(331, 3, 14, 29),
(332, 5, 14, 30),
(333, 3, 15, 1),
(334, 2, 15, 2),
(335, 2, 15, 3),
(336, 3, 15, 4),
(337, 4, 15, 5),
(338, 3, 15, 6),
(339, 3, 15, 7),
(340, 3, 15, 8),
(341, 3, 15, 9),
(342, 3, 15, 10),
(343, 2, 15, 11),
(344, 3, 15, 12),
(345, 2, 15, 13),
(346, 2, 15, 14),
(347, 3, 15, 15),
(348, 3, 15, 16),
(349, 3, 15, 17),
(350, 2, 15, 18),
(351, 3, 15, 19),
(352, 3, 15, 20),
(353, 3, 15, 21),
(354, 3, 15, 22),
(355, 2, 15, 23),
(356, 3, 15, 24),
(357, 2, 15, 25),
(358, 4, 15, 26),
(359, 4, 15, 27),
(360, 2, 15, 28),
(361, 2, 15, 29),
(362, 3, 15, 30),
(365, NULL, 10, 13),
(366, NULL, 10, 14),
(367, NULL, 10, 16),
(368, NULL, 10, 17),
(369, NULL, 10, 20),
(370, NULL, 10, 21),
(371, NULL, 10, 22),
(372, NULL, 10, 29),
(473, NULL, 47, 1),
(474, NULL, 47, 2),
(475, NULL, 47, 3),
(476, NULL, 47, 6),
(477, NULL, 47, 14),
(478, NULL, 47, 16),
(479, NULL, 47, 17),
(480, NULL, 47, 18),
(481, NULL, 47, 19),
(482, NULL, 47, 28),
(483, NULL, 47, 29),
(484, NULL, 47, 30),
(485, NULL, 47, 4),
(486, NULL, 47, 5),
(487, NULL, 47, 7),
(488, NULL, 47, 8),
(489, NULL, 47, 9),
(490, NULL, 47, 10),
(491, NULL, 47, 11),
(492, NULL, 47, 12),
(493, NULL, 47, 13),
(494, NULL, 47, 15),
(495, NULL, 47, 20),
(496, NULL, 47, 21),
(497, NULL, 47, 22),
(498, NULL, 47, 23),
(499, NULL, 47, 24),
(500, NULL, 47, 25),
(501, NULL, 47, 26),
(502, NULL, 47, 27);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_created` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `id_gender` int(11) DEFAULT NULL,
  `id_religion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `address`, `phone_number`, `image`, `password`, `date_created`, `id_role`, `id_gender`, `id_religion`) VALUES
(1, 'admin2', 'admin2@gmail.com', 'Mungkid', '0000', 'default.png', '$2y$10$bvQ/zted.iHkgSjRl.RFR.anGkC3sZkZk78J7ni3dqomxSj1kAI9C', 1623933583, 1, 2, 2),
(2, 'Ahmad Husain', 'admin@gmail.com', 'mungkid', '123', 'profil1.jpg', '$2y$10$Kh6wy1dT66/f0cprR36I2.L2DFiTKfcIET8NapWdP0JCIIhiRWCjq', 1628073243, 1, 1, 1),
(10, 'Handy Sofyan Satrio', 'iyan@gmail.com', 'Santan', '123', 'ci.jpg', '$2y$10$bsx7Qs8AZHe/1yMryDrt.ubmlf.avFef65a93GUOn7ZCIRzvBYenK', 1627392887, 2, 1, 1),
(11, 'Zaki Eko Kurniawan', 'zaki@gmail.com', 'Kajoran', '888', 'default.png', '$2y$10$YANi.ZWNB9GFFjgm3OTAPeRvYMQzxbEz2YewaaawMK5TfqITbobca', 1627392848, 2, 1, 1),
(12, 'Siti Anisa', 'nisa@gmail.com', 'Mertoyudan', '088806065953', 'default.png', '$2y$10$/MLHWHsE6FiNYu16hhfktO87sFh1qCvaGp/dWlIN3sCsa0hWj/PNS', 1625028712, 2, 2, 1),
(13, 'Shalichajh', 'shali@gmail.com', 'Temanggung', '085859689896', 'default.png', '$2y$10$6/8nv8RgLHrpRPXc/BZWq.Hb/rd7Hbb7KpXDMvQ1zo3RkWw6TKOVO', 1625028775, 2, 2, 1),
(14, 'Heni Apriliani', 'heni@gmail.com', 'Candimulyo', '081228061352', 'default.png', '$2y$10$r6iTDlaECS/XzAIqCzZ4aOR6XXrppwwFWYFDyhDfk3azcyYNCOm5G', 1625028855, 2, 2, 1),
(15, 'Inayatun', 'ina@gmail.com', 'Borobudur', '085877177145', 'default.png', '$2y$10$QrY3CKtEbXSsDtFftc6yFeDz7nnwMqdLFg/yJNeHCBmyGOo.mOJQi', 1625028915, 2, 2, 1),
(47, 'meng', 'meng@gmail.com', 'keji', '123', 'barca.jpg', '$2y$10$a21eh2bVhm5coMa934BKhOS4K6k1PGjmJqviVydQXY42dxVq3F7NC', 1629528000, 2, 1, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_absolut`
-- (See below for the actual view)
--
CREATE TABLE `v_absolut` (
`id_user` int(11)
,`id_kuliner` int(11)
,`data_abs` decimal(15,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_akar_abs`
-- (See below for the actual view)
--
CREATE TABLE `v_akar_abs` (
`id_user` int(11)
,`id_kuliner` int(11)
,`data_abs` decimal(15,4)
,`akar_abs` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_akar_sum_abs`
-- (See below for the actual view)
--
CREATE TABLE `v_akar_sum_abs` (
`id_user` int(11)
,`sum_akar_abs` double
,`akar_sum_abs` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_akar_objek`
-- (See below for the actual view)
--
CREATE TABLE `v_data_akar_objek` (
`id_user` int(11)
,`sum_akar_abs` double
,`akar_sum_abs` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_akar_target`
-- (See below for the actual view)
--
CREATE TABLE `v_data_akar_target` (
`id_user` int(11)
,`sum_akar_abs` double
,`akar_sum_abs` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_objek`
-- (See below for the actual view)
--
CREATE TABLE `v_data_objek` (
`id_user` int(11)
,`id_kuliner` int(11)
,`id_rating` int(11)
,`rata_rating_user` decimal(14,4)
,`rru_min_idRating` decimal(15,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_olah`
-- (See below for the actual view)
--
CREATE TABLE `v_data_olah` (
`id_user` int(11)
,`id_kuliner` int(11)
,`id_rating` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_olah_not_null`
-- (See below for the actual view)
--
CREATE TABLE `v_data_olah_not_null` (
`id_user` int(11)
,`id_kuliner` int(11)
,`id_rating` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_target`
-- (See below for the actual view)
--
CREATE TABLE `v_data_target` (
`id_user` int(11)
,`id_kuliner` int(11)
,`id_rating` int(11)
,`rata_rating_user` decimal(14,4)
,`rru_min_idRating` decimal(15,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_txo`
-- (See below for the actual view)
--
CREATE TABLE `v_data_txo` (
`id_objek` int(11)
,`id_kuliner` int(11)
,`data_objek` decimal(15,4)
,`id_target` int(11)
,`data_target` decimal(15,4)
,`x` decimal(30,8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_data_user_allnull`
-- (See below for the actual view)
--
CREATE TABLE `v_data_user_allnull` (
`id_user` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_hasil`
-- (See below for the actual view)
--
CREATE TABLE `v_hasil` (
`id_pembilang` int(11)
,`pembilang` decimal(52,8)
,`id_penyebut` int(11)
,`penyebut` double
,`hasil` double(19,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pembilang`
-- (See below for the actual view)
--
CREATE TABLE `v_pembilang` (
`id_objek` int(11)
,`id_target` int(11)
,`x` decimal(30,8)
,`pembilang` decimal(52,8)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pendekatan`
-- (See below for the actual view)
--
CREATE TABLE `v_pendekatan` (
`id_user` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_penyebut`
-- (See below for the actual view)
--
CREATE TABLE `v_penyebut` (
`id_objek` int(11)
,`akar_abs_objek` double
,`id_target` int(11)
,`akar_abs_target` double
,`penyebut` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_rata_min_rating`
-- (See below for the actual view)
--
CREATE TABLE `v_rata_min_rating` (
`id_user` int(11)
,`id_kuliner` int(11)
,`id_rating` int(11)
,`rata_rating_user` decimal(14,4)
,`rru_min_idRating` decimal(15,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_rata_rating_user`
-- (See below for the actual view)
--
CREATE TABLE `v_rata_rating_user` (
`id_user` int(11)
,`id_kuliner` int(11)
,`id_rating` int(11)
,`rata_rating_user` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_rating`
-- (See below for the actual view)
--
CREATE TABLE `v_rating` (
`id_kuliner` int(11)
,`rat` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_sum_akarabs`
-- (See below for the actual view)
--
CREATE TABLE `v_sum_akarabs` (
`id_user` int(11)
,`akar_abs` double
,`sum_akar_abs` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_x`
-- (See below for the actual view)
--
CREATE TABLE `v_x` (
`id_user` int(11)
,`id_kuliner` int(11)
,`id_rating` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v_absolut`
--
DROP TABLE IF EXISTS `v_absolut`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_absolut`  AS SELECT `v_rata_min_rating`.`id_user` AS `id_user`, `v_rata_min_rating`.`id_kuliner` AS `id_kuliner`, abs(`v_rata_min_rating`.`rru_min_idRating`) AS `data_abs` FROM `v_rata_min_rating` ;

-- --------------------------------------------------------

--
-- Structure for view `v_akar_abs`
--
DROP TABLE IF EXISTS `v_akar_abs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_akar_abs`  AS SELECT `v_absolut`.`id_user` AS `id_user`, `v_absolut`.`id_kuliner` AS `id_kuliner`, `v_absolut`.`data_abs` AS `data_abs`, sqrt(`v_absolut`.`data_abs`) AS `akar_abs` FROM `v_absolut` ;

-- --------------------------------------------------------

--
-- Structure for view `v_akar_sum_abs`
--
DROP TABLE IF EXISTS `v_akar_sum_abs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_akar_sum_abs`  AS SELECT `v_sum_akarabs`.`id_user` AS `id_user`, `v_sum_akarabs`.`sum_akar_abs` AS `sum_akar_abs`, sqrt(`v_sum_akarabs`.`sum_akar_abs`) AS `akar_sum_abs` FROM `v_sum_akarabs` GROUP BY `v_sum_akarabs`.`id_user` ;

-- --------------------------------------------------------

--
-- Structure for view `v_data_akar_objek`
--
DROP TABLE IF EXISTS `v_data_akar_objek`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_akar_objek`  AS SELECT `v_akar_sum_abs`.`id_user` AS `id_user`, `v_akar_sum_abs`.`sum_akar_abs` AS `sum_akar_abs`, `v_akar_sum_abs`.`akar_sum_abs` AS `akar_sum_abs` FROM `v_akar_sum_abs` WHERE !(`v_akar_sum_abs`.`id_user` in (select `v_data_target`.`id_user` from `v_data_target`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_data_akar_target`
--
DROP TABLE IF EXISTS `v_data_akar_target`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_akar_target`  AS SELECT `v_akar_sum_abs`.`id_user` AS `id_user`, `v_akar_sum_abs`.`sum_akar_abs` AS `sum_akar_abs`, `v_akar_sum_abs`.`akar_sum_abs` AS `akar_sum_abs` FROM `v_akar_sum_abs` WHERE `v_akar_sum_abs`.`id_user` in (select `v_data_target`.`id_user` from `v_data_target`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_data_objek`
--
DROP TABLE IF EXISTS `v_data_objek`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_objek`  AS SELECT `v_rata_min_rating`.`id_user` AS `id_user`, `v_rata_min_rating`.`id_kuliner` AS `id_kuliner`, `v_rata_min_rating`.`id_rating` AS `id_rating`, `v_rata_min_rating`.`rata_rating_user` AS `rata_rating_user`, `v_rata_min_rating`.`rru_min_idRating` AS `rru_min_idRating` FROM `v_rata_min_rating` WHERE !(`v_rata_min_rating`.`id_user` in (select `v_data_olah`.`id_user` from `v_data_olah` where `v_data_olah`.`id_rating` is null)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_data_olah`
--
DROP TABLE IF EXISTS `v_data_olah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_olah`  AS SELECT `similarity`.`id_user` AS `id_user`, `similarity`.`id_kuliner` AS `id_kuliner`, `similarity`.`id_rating` AS `id_rating` FROM `similarity` WHERE `similarity`.`id_user` in (select `similarity`.`id_user` from `similarity` where `similarity`.`id_rating` is not null) ;

-- --------------------------------------------------------

--
-- Structure for view `v_data_olah_not_null`
--
DROP TABLE IF EXISTS `v_data_olah_not_null`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_olah_not_null`  AS SELECT `v_data_olah`.`id_user` AS `id_user`, `v_data_olah`.`id_kuliner` AS `id_kuliner`, `v_data_olah`.`id_rating` AS `id_rating` FROM `v_data_olah` WHERE !(`v_data_olah`.`id_kuliner` in (select `v_data_olah`.`id_kuliner` from `v_data_olah` where `v_data_olah`.`id_rating` is null)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_data_target`
--
DROP TABLE IF EXISTS `v_data_target`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_target`  AS SELECT `v_rata_min_rating`.`id_user` AS `id_user`, `v_rata_min_rating`.`id_kuliner` AS `id_kuliner`, `v_rata_min_rating`.`id_rating` AS `id_rating`, `v_rata_min_rating`.`rata_rating_user` AS `rata_rating_user`, `v_rata_min_rating`.`rru_min_idRating` AS `rru_min_idRating` FROM `v_rata_min_rating` WHERE `v_rata_min_rating`.`id_user` in (select `v_data_olah`.`id_user` from `v_data_olah` where `v_data_olah`.`id_rating` is null) ;

-- --------------------------------------------------------

--
-- Structure for view `v_data_txo`
--
DROP TABLE IF EXISTS `v_data_txo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_txo`  AS SELECT `a`.`id_user` AS `id_objek`, `a`.`id_kuliner` AS `id_kuliner`, `a`.`rru_min_idRating` AS `data_objek`, `b`.`id_user` AS `id_target`, `b`.`rru_min_idRating` AS `data_target`, `a`.`rru_min_idRating`* `b`.`rru_min_idRating` AS `x` FROM (`v_data_objek` `a` join `v_data_target` `b` on(`b`.`id_kuliner` = `a`.`id_kuliner`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_data_user_allnull`
--
DROP TABLE IF EXISTS `v_data_user_allnull`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_data_user_allnull`  AS SELECT `similarity`.`id_user` AS `id_user` FROM `similarity` WHERE !(`similarity`.`id_user` in (select `similarity`.`id_user` from `similarity` where `similarity`.`id_rating` is not null)) GROUP BY `similarity`.`id_user` ;

-- --------------------------------------------------------

--
-- Structure for view `v_hasil`
--
DROP TABLE IF EXISTS `v_hasil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_hasil`  AS SELECT `b`.`id_objek` AS `id_pembilang`, `b`.`pembilang` AS `pembilang`, `a`.`id_objek` AS `id_penyebut`, `a`.`penyebut` AS `penyebut`, round(`b`.`pembilang` / `a`.`penyebut`,2) AS `hasil` FROM (`v_pembilang` `b` join `v_penyebut` `a` on(`b`.`id_objek` = `a`.`id_objek`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pembilang`
--
DROP TABLE IF EXISTS `v_pembilang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pembilang`  AS SELECT `v_data_txo`.`id_objek` AS `id_objek`, `v_data_txo`.`id_target` AS `id_target`, `v_data_txo`.`x` AS `x`, sum(`v_data_txo`.`x`) AS `pembilang` FROM `v_data_txo` GROUP BY `v_data_txo`.`id_objek`, `v_data_txo`.`id_target` ;

-- --------------------------------------------------------

--
-- Structure for view `v_pendekatan`
--
DROP TABLE IF EXISTS `v_pendekatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pendekatan`  AS SELECT `v_hasil`.`id_pembilang` AS `id_user` FROM `v_hasil` WHERE `v_hasil`.`hasil` in (select max(`v_hasil`.`hasil`) from `v_hasil`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_penyebut`
--
DROP TABLE IF EXISTS `v_penyebut`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_penyebut`  AS SELECT `a`.`id_user` AS `id_objek`, `a`.`akar_sum_abs` AS `akar_abs_objek`, `b`.`id_user` AS `id_target`, `b`.`akar_sum_abs` AS `akar_abs_target`, `a`.`akar_sum_abs`* `b`.`akar_sum_abs` AS `penyebut` FROM (`v_data_akar_objek` `a` join `v_data_akar_target` `b`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_rata_min_rating`
--
DROP TABLE IF EXISTS `v_rata_min_rating`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rata_min_rating`  AS SELECT `a`.`id_user` AS `id_user`, `a`.`id_kuliner` AS `id_kuliner`, `a`.`id_rating` AS `id_rating`, `a`.`rata_rating_user` AS `rata_rating_user`, `a`.`id_rating`- `a`.`rata_rating_user` AS `rru_min_idRating` FROM `v_rata_rating_user` AS `a` ;

-- --------------------------------------------------------

--
-- Structure for view `v_rata_rating_user`
--
DROP TABLE IF EXISTS `v_rata_rating_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rata_rating_user`  AS SELECT `a`.`id_user` AS `id_user`, `a`.`id_kuliner` AS `id_kuliner`, `a`.`id_rating` AS `id_rating`, (select avg(`b`.`id_rating`) from `v_data_olah_not_null` `b` where `b`.`id_user` = `a`.`id_user`) AS `rata_rating_user` FROM `v_data_olah_not_null` AS `a` ;

-- --------------------------------------------------------

--
-- Structure for view `v_rating`
--
DROP TABLE IF EXISTS `v_rating`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rating`  AS SELECT `similarity`.`id_kuliner` AS `id_kuliner`, avg(`similarity`.`id_rating`) AS `rat` FROM `similarity` GROUP BY `similarity`.`id_kuliner` ;

-- --------------------------------------------------------

--
-- Structure for view `v_sum_akarabs`
--
DROP TABLE IF EXISTS `v_sum_akarabs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sum_akarabs`  AS SELECT `a`.`id_user` AS `id_user`, `a`.`akar_abs` AS `akar_abs`, (select sum(`b`.`akar_abs`) from `v_akar_abs` `b` where `b`.`id_user` = `a`.`id_user`) AS `sum_akar_abs` FROM `v_akar_abs` AS `a` ;

-- --------------------------------------------------------

--
-- Structure for view `v_x`
--
DROP TABLE IF EXISTS `v_x`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_x`  AS SELECT `similarity`.`id_user` AS `id_user`, `similarity`.`id_kuliner` AS `id_kuliner`, `similarity`.`id_rating` AS `id_rating` FROM `similarity` WHERE `similarity`.`id_user` in (select `v_pendekatan`.`id_user` from `v_pendekatan`) AND `similarity`.`id_kuliner` in (select `similarity`.`id_kuliner` from `similarity` where `similarity`.`id_rating` is null) ORDER BY `similarity`.`id_rating` DESC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_wifi` (`id_wifi`);

--
-- Indexes for table `m_gender`
--
ALTER TABLE `m_gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_rating`
--
ALTER TABLE `m_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_religion`
--
ALTER TABLE `m_religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_role`
--
ALTER TABLE `m_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_wifi`
--
ALTER TABLE `m_wifi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `similarity`
--
ALTER TABLE `similarity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rating` (`id_rating`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kuliner` (`id_kuliner`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_gender` (`id_gender`),
  ADD KEY `id_religion` (`id_religion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `m_gender`
--
ALTER TABLE `m_gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_rating`
--
ALTER TABLE `m_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_religion`
--
ALTER TABLE `m_religion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_role`
--
ALTER TABLE `m_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_wifi`
--
ALTER TABLE `m_wifi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `similarity`
--
ALTER TABLE `similarity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `m_role` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_gender`) REFERENCES `m_gender` (`id`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`id_religion`) REFERENCES `m_religion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
