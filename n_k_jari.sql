-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 07:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n_k_jari`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbanner`
--

CREATE TABLE `cbanner` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `active` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cbanner`
--

INSERT INTO `cbanner` (`id`, `image`, `title`, `active`, `created_at`, `created_by`) VALUES
(1, '1578130743s2.jpg', 'Lace Collection 2020', 'active', '2020-03-17 10:44:43', 1),
(3, '1578136995s1.jpg', 'Lace Collection 2019', 'active', '2020-01-07 09:10:45', 1),
(4, '1578137005s4.jpg', 'Lace Collection 2018', 'active', '2020-01-07 09:10:56', 1),
(5, '1578137754s3.jpg', 'Lace Collection 2017', 'active', '2020-01-07 09:11:04', 1),
(6, '1578647000s5.jpg', 'Lace Collection 2016', 'inactive', '2020-02-05 04:52:00', 1),
(7, '1578647021s6.jpeg', 'Lace Collection 2015', 'inactive', '2020-01-10 09:03:41', 1),
(8, '1578647070s1.jpg', 'Lace Collection 2014', 'inactive', '2020-01-10 09:04:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cbanner2`
--

CREATE TABLE `cbanner2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `active` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cbanner2`
--

INSERT INTO `cbanner2` (`id`, `name`, `image`, `price`, `active`, `created_at`, `created_by`) VALUES
(1, 'Colored Zari Lace', '1578471135colored zari lace.jpg', 50, 'active', '2020-04-06 12:19:34', 1),
(2, 'Duppatta Zalar Lace', '1578472573dupatta zalar lace.jpg', 75, 'active', '2020-01-08 08:36:13', 1),
(3, 'Fancy Saree Border Lace', '1578472647fancy saree border.jpg', 85, 'active', '2020-01-08 08:37:27', 1),
(4, 'Golden Design Lace', '1578472757golden designer lace.jpg', 55, 'active', '2020-01-08 08:39:17', 1),
(5, 'Gota Lace', '1578472774gota lace.jpg', 65, 'active', '2020-01-08 08:39:35', 1),
(6, 'Kurti Zalar Lace', '1578472887kurti zalar lace.jpg', 85, 'active', '2020-01-08 08:41:27', 1),
(7, 'Moti Zalar Lace', '1578472918moti zalar lace.jpg', 80, 'active', '2020-01-12 12:17:02', 1),
(8, 'Pearl Design Zari Lace', '1578473035pearl designer zari lace.jpg', 55, 'active', '2020-01-12 12:17:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `sid` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`id`, `name`, `sid`) VALUES
(1, 'Port Blair', 1),
(2, 'Visakhapatnam', 2),
(3, 'Vijayawada', 2),
(4, 'Guntur', 2),
(5, 'Nellore', 2),
(6, 'Kurnool', 2),
(7, 'Rajahmundry', 2),
(8, 'Kakinada', 2),
(9, 'Tirupati', 2),
(10, 'Anantapur', 2),
(11, 'Kadapa', 2),
(12, 'Vizianagaram', 2),
(13, 'Eluru', 2),
(14, 'Ongole', 2),
(15, 'Nandyal', 2),
(16, 'Machilipatnam', 2),
(17, 'Adoni', 2),
(18, 'Tenali', 2),
(19, 'Chittoor', 2),
(20, 'Hindupur', 2),
(21, 'Proddatur', 2),
(22, 'Bhimavaram', 2),
(23, 'Madanapalle', 2),
(24, 'Guntakal', 2),
(25, 'Dharmavaram', 2),
(26, 'Gudivada', 2),
(27, 'Srikakulam', 2),
(28, 'Narasaraopet', 2),
(29, 'Rajampet', 2),
(30, 'Tadpatri', 2),
(31, 'Tadepalligudem', 2),
(32, 'Chilakaluripet', 2),
(33, 'Yemmiganur', 2),
(34, 'Kadiri', 2),
(35, 'Chirala', 2),
(36, 'Anakapalle', 2),
(37, 'Kavali', 2),
(38, 'Palacole', 2),
(39, 'Sullurpeta', 2),
(40, 'Tanuku', 2),
(41, 'Rayachoti', 2),
(42, 'Srikalahasti', 2),
(43, 'Bapatla', 2),
(44, 'Naidupet', 2),
(45, 'Nagari', 2),
(46, 'Gudur', 2),
(47, 'Vinukonda', 2),
(48, 'Narasapuram', 2),
(49, 'Nuzvid', 2),
(50, 'Markapur', 2),
(51, 'Ponnur', 2),
(52, 'Kandukur', 2),
(53, 'Bobbili', 2),
(54, 'Rayadurg', 2),
(55, 'Samalkot', 2),
(56, 'Jaggaiahpet', 2),
(57, 'Tuni', 2),
(58, 'Amalapuram', 2),
(59, 'Bheemunipatnam', 2),
(60, 'Venkatagiri', 2),
(61, 'Sattenapalle', 2),
(62, 'Pithapuram', 2),
(63, 'Palasa Kasibugga', 2),
(64, 'Parvathipuram', 2),
(65, 'Macherla', 2),
(66, 'Gooty', 2),
(67, 'Salur', 2),
(68, 'Mandapeta', 2),
(69, 'Jammalamadugu', 2),
(70, 'Peddapuram', 2),
(71, 'Punganur', 2),
(72, 'Nidadavole', 2),
(73, 'Repalle', 2),
(74, 'Ramachandrapuram', 2),
(75, 'Kovvur', 2),
(76, 'Tiruvuru', 2),
(77, 'Uravakonda', 2),
(78, 'Narsipatnam', 2),
(79, 'Yerraguntla', 2),
(80, 'Pedana', 2),
(81, 'Puttur', 2),
(82, 'Renigunta', 2),
(83, 'Rajam', 2),
(84, 'Naharlagun', 3),
(85, 'Pasighat', 3),
(86, 'Guwahati', 4),
(87, 'Silchar', 4),
(88, 'Dibrugarh', 4),
(89, 'Nagaon', 4),
(90, 'Tinsukia', 4),
(91, 'Jorhat', 4),
(92, 'Bongaigaon City', 4),
(93, 'Dhubri', 4),
(94, 'Diphu', 4),
(95, 'North Lakhimpur', 4),
(96, 'Tezpur', 4),
(97, 'Karimganj', 4),
(98, 'Sibsagar', 4),
(99, 'Goalpara', 4),
(100, 'Barpeta', 4),
(101, 'Lanka', 4),
(102, 'Lumding', 4),
(103, 'Mankachar', 4),
(104, 'Nalbari', 4),
(105, 'Rangia', 4),
(106, 'Margherita', 4),
(107, 'Mangaldoi', 4),
(108, 'Silapathar', 4),
(109, 'Mariani', 4),
(110, 'Marigaon', 4),
(111, 'Patna', 5),
(112, 'Gaya', 5),
(113, 'Bhagalpur', 5),
(114, 'Muzaffarpur', 5),
(115, 'Darbhanga', 5),
(116, 'Arrah', 5),
(117, 'Begusarai', 5),
(118, 'Chhapra', 5),
(119, 'Katihar', 5),
(120, 'Munger', 5),
(121, 'Purnia', 5),
(122, 'Saharsa', 5),
(123, 'Sasaram', 5),
(124, 'Hajipur', 5),
(125, 'Dehri-on-Sone', 5),
(126, 'Bettiah', 5),
(127, 'Motihari', 5),
(128, 'Bagaha', 5),
(129, 'Siwan', 5),
(130, 'Kishanganj', 5),
(131, 'Jamalpur', 5),
(132, 'Buxar', 5),
(133, 'Jehanabad', 5),
(134, 'Aurangabad', 5),
(135, 'Lakhisarai', 5),
(136, 'Nawada', 5),
(137, 'Jamui', 5),
(138, 'Sitamarhi', 5),
(139, 'Araria', 5),
(140, 'Gopalganj', 5),
(141, 'Madhubani', 5),
(142, 'Masaurhi', 5),
(143, 'Samastipur', 5),
(144, 'Mokameh', 5),
(145, 'Supaul', 5),
(146, 'Dumraon', 5),
(147, 'Arwal', 5),
(148, 'Forbesganj', 5),
(149, 'BhabUrban Agglomeration', 5),
(150, 'Narkatiaganj', 5),
(151, 'Naugachhia', 5),
(152, 'Madhepura', 5),
(153, 'Sheikhpura', 5),
(154, 'Sultanganj', 5),
(155, 'Raxaul Bazar', 5),
(156, 'Ramnagar', 5),
(157, 'Mahnar Bazar', 5),
(158, 'Warisaliganj', 5),
(159, 'Revelganj', 5),
(160, 'Rajgir', 5),
(161, 'Sonepur', 5),
(162, 'Sherghati', 5),
(163, 'Sugauli', 5),
(164, 'Makhdumpur', 5),
(165, 'Maner', 5),
(166, 'Rosera', 5),
(167, 'Nokha', 5),
(168, 'Piro', 5),
(169, 'Rafiganj', 5),
(170, 'Marhaura', 5),
(171, 'Mirganj', 5),
(172, 'Lalganj', 5),
(173, 'Murliganj', 5),
(174, 'Motipur', 5),
(175, 'Manihari', 5),
(176, 'Sheohar', 5),
(177, 'Maharajganj', 5),
(178, 'Silao', 5),
(179, 'Barh', 5),
(180, 'Asarganj', 5),
(181, 'Chandigarh', 6),
(182, 'Raipur', 7),
(183, 'Bhilai Nagar', 7),
(184, 'Korba', 7),
(185, 'Bilaspur', 7),
(186, 'Durg', 7),
(187, 'Rajnandgaon', 7),
(188, 'Jagdalpur', 7),
(189, 'Raigarh', 7),
(190, 'Ambikapur', 7),
(191, 'Mahasamund', 7),
(192, 'Dhamtari', 7),
(193, 'Chirmiri', 7),
(194, 'Bhatapara', 7),
(195, 'Dalli-Rajhara', 7),
(196, 'Naila Janjgir', 7),
(197, 'Tilda Newra', 7),
(198, 'Mungeli', 7),
(199, 'Manendragarh', 7),
(200, 'Sakti', 7),
(201, 'Silvassa', 8),
(202, 'Delhi', 9),
(203, 'New Delhi', 9),
(204, 'Marmagao', 10),
(205, 'Panaji', 10),
(206, 'Margao', 10),
(207, 'Mapusa', 10),
(208, 'Ahmedabad', 11),
(209, 'Surat', 11),
(210, 'Vadodara', 11),
(211, 'Rajkot', 11),
(212, 'Bhavnagar', 11),
(213, 'Jamnagar', 11),
(214, 'Nadiad', 11),
(215, 'Porbandar', 11),
(216, 'Anand', 11),
(217, 'Morvi', 11),
(218, 'Mahesana', 11),
(219, 'Bharuch', 11),
(220, 'Vapi', 11),
(221, 'Navsari', 11),
(222, 'Veraval', 11),
(223, 'Bhuj', 11),
(224, 'Godhra', 11),
(225, 'Palanpur', 11),
(226, 'Valsad', 11),
(227, 'Patan', 11),
(228, 'Deesa', 11),
(229, 'Amreli', 11),
(230, 'Anjar', 11),
(231, 'Dhoraji', 11),
(232, 'Khambhat', 11),
(233, 'Mahuva', 11),
(234, 'Keshod', 11),
(235, 'Wadhwan', 11),
(236, 'Ankleshwar', 11),
(237, 'Savarkundla', 11),
(238, 'Kadi', 11),
(239, 'Visnagar', 11),
(240, 'Upleta', 11),
(241, 'Una', 11),
(242, 'Sidhpur', 11),
(243, 'Unjha', 11),
(244, 'Mangrol', 11),
(245, 'Viramgam', 11),
(246, 'Modasa', 11),
(247, 'Palitana', 11),
(248, 'Petlad', 11),
(249, 'Kapadvanj', 11),
(250, 'Sihor', 11),
(251, 'Wankaner', 11),
(252, 'Limbdi', 11),
(253, 'Mandvi', 11),
(254, 'Thangadh', 11),
(255, 'Vyara', 11),
(256, 'Padra', 11),
(257, 'Lunawada', 11),
(258, 'Rajpipla', 11),
(259, 'Vapi', 11),
(260, 'Umreth', 11),
(261, 'Sanand', 11),
(262, 'Rajula', 11),
(263, 'Radhanpur', 11),
(264, 'Mahemdabad', 11),
(265, 'Ranavav', 11),
(266, 'Tharad', 11),
(267, 'Mansa', 11),
(268, 'Umbergaon', 11),
(269, 'Talaja', 11),
(270, 'Vadnagar', 11),
(271, 'Manavadar', 11),
(272, 'Salaya', 11),
(273, 'Vijapur', 11),
(274, 'Pardi', 11),
(275, 'Rapar', 11),
(276, 'Songadh', 11),
(277, 'Lathi', 11),
(278, 'Adalaj', 11),
(279, 'Chhapra', 11),
(280, 'Faridabad', 12),
(281, 'Gurgaon', 12),
(282, 'Hisar', 12),
(283, 'Rohtak', 12),
(284, 'Panipat', 12),
(285, 'Karnal', 12),
(286, 'Sonipat', 12),
(287, 'Yamunanagar', 12),
(288, 'Panchkula', 12),
(289, 'Bhiwani', 12),
(290, 'Bahadurgarh', 12),
(291, 'Jind', 12),
(292, 'Sirsa', 12),
(293, 'Thanesar', 12),
(294, 'Kaithal', 12),
(295, 'Palwal', 12),
(296, 'Rewari', 12),
(297, 'Hansi', 12),
(298, 'Narnaul', 12),
(299, 'Fatehabad', 12),
(300, 'Gohana', 12),
(301, 'Tohana', 12),
(302, 'Narwana', 12),
(303, 'Mandi Dabwali', 12),
(304, 'Charkhi Dadri', 12),
(305, 'Shahbad', 12),
(306, 'Pehowa', 12),
(307, 'Samalkha', 12),
(308, 'Pinjore', 12),
(309, 'Ladwa', 12),
(310, 'Sohna', 12),
(311, 'Safidon', 12),
(312, 'Taraori', 12),
(313, 'Mahendragarh', 12),
(314, 'Ratia', 12),
(315, 'Rania', 12),
(316, 'Sarsod', 12),
(317, 'Shimla', 13),
(318, 'Mandi', 13),
(319, 'Solan', 13),
(320, 'Nahan', 13),
(321, 'Sundarnagar', 13),
(322, 'Palampur', 13),
(323, 'Srinagar', 14),
(324, 'Jammu', 14),
(325, 'Baramula', 14),
(326, 'Anantnag', 14),
(327, 'Sopore', 14),
(328, 'KathUrban Agglomeration', 14),
(329, 'Rajauri', 14),
(330, 'Punch', 14),
(331, 'Udhampur', 14),
(332, 'Dhanbad', 15),
(333, 'Ranchi', 15),
(334, 'Jamshedpur', 15),
(335, 'Bokaro Steel City', 15),
(336, 'Deoghar', 15),
(337, 'Phusro', 15),
(338, 'Adityapur', 15),
(339, 'Hazaribag', 15),
(340, 'Giridih', 15),
(341, 'Ramgarh', 15),
(342, 'Jhumri Tilaiya', 15),
(343, 'Saunda', 15),
(344, 'Sahibganj', 15),
(345, 'Medininagar (Daltonganj)', 15),
(346, 'Chaibasa', 15),
(347, 'Chatra', 15),
(348, 'Gumia', 15),
(349, 'Dumka', 15),
(350, 'Madhupur', 15),
(351, 'Chirkunda', 15),
(352, 'Pakaur', 15),
(353, 'Simdega', 15),
(354, 'Musabani', 15),
(355, 'Mihijam', 15),
(356, 'Patratu', 15),
(357, 'Lohardaga', 15),
(358, 'Tenu dam-cum-Kathhara', 15),
(359, 'Bengaluru', 16),
(360, 'Hubli-Dharwad', 16),
(361, 'Belagavi', 16),
(362, 'Mangaluru', 16),
(363, 'Davanagere', 16),
(364, 'Ballari', 16),
(365, 'Tumkur', 16),
(366, 'Shivamogga', 16),
(367, 'Raayachuru', 16),
(368, 'Robertson Pet', 16),
(369, 'Kolar', 16),
(370, 'Mandya', 16),
(371, 'Udupi', 16),
(372, 'Chikkamagaluru', 16),
(373, 'Karwar', 16),
(374, 'Ranebennuru', 16),
(375, 'Ranibennur', 16),
(376, 'Ramanagaram', 16),
(377, 'Gokak', 16),
(378, 'Yadgir', 16),
(379, 'Rabkavi Banhatti', 16),
(380, 'Shahabad', 16),
(381, 'Sirsi', 16),
(382, 'Sindhnur', 16),
(383, 'Tiptur', 16),
(384, 'Arsikere', 16),
(385, 'Nanjangud', 16),
(386, 'Sagara', 16),
(387, 'Sira', 16),
(388, 'Puttur', 16),
(389, 'Athni', 16),
(390, 'Mulbagal', 16),
(391, 'Surapura', 16),
(392, 'Siruguppa', 16),
(393, 'Mudhol', 16),
(394, 'Sidlaghatta', 16),
(395, 'Shahpur', 16),
(396, 'Saundatti-Yellamma', 16),
(397, 'Wadi', 16),
(398, 'Manvi', 16),
(399, 'Nelamangala', 16),
(400, 'Lakshmeshwar', 16),
(401, 'Ramdurg', 16),
(402, 'Nargund', 16),
(403, 'Tarikere', 16),
(404, 'Malavalli', 16),
(405, 'Savanur', 16),
(406, 'Lingsugur', 16),
(407, 'Vijayapura', 16),
(408, 'Sankeshwara', 16),
(409, 'Madikeri', 16),
(410, 'Talikota', 16),
(411, 'Sedam', 16),
(412, 'Shikaripur', 16),
(413, 'Mahalingapura', 16),
(414, 'Mudalagi', 16),
(415, 'Muddebihal', 16),
(416, 'Pavagada', 16),
(417, 'Malur', 16),
(418, 'Sindhagi', 16),
(419, 'Sanduru', 16),
(420, 'Afzalpur', 16),
(421, 'Maddur', 16),
(422, 'Madhugiri', 16),
(423, 'Tekkalakote', 16),
(424, 'Terdal', 16),
(425, 'Mudabidri', 16),
(426, 'Magadi', 16),
(427, 'Navalgund', 16),
(428, 'Shiggaon', 16),
(429, 'Shrirangapattana', 16),
(430, 'Sindagi', 16),
(431, 'Sakaleshapura', 16),
(432, 'Srinivaspur', 16),
(433, 'Ron', 16),
(434, 'Mundargi', 16),
(435, 'Sadalagi', 16),
(436, 'Piriyapatna', 16),
(437, 'Adyar', 16),
(438, 'Mysore', 16),
(439, 'Thiruvananthapuram', 17),
(440, 'Kochi', 17),
(441, 'Kozhikode', 17),
(442, 'Kollam', 17),
(443, 'Thrissur', 17),
(444, 'Palakkad', 17),
(445, 'Alappuzha', 17),
(446, 'Malappuram', 17),
(447, 'Ponnani', 17),
(448, 'Vatakara', 17),
(449, 'Kanhangad', 17),
(450, 'Taliparamba', 17),
(451, 'Koyilandy', 17),
(452, 'Neyyattinkara', 17),
(453, 'Kayamkulam', 17),
(454, 'Nedumangad', 17),
(455, 'Kannur', 17),
(456, 'Tirur', 17),
(457, 'Kottayam', 17),
(458, 'Kasaragod', 17),
(459, 'Kunnamkulam', 17),
(460, 'Ottappalam', 17),
(461, 'Thiruvalla', 17),
(462, 'Thodupuzha', 17),
(463, 'Chalakudy', 17),
(464, 'Changanassery', 17),
(465, 'Punalur', 17),
(466, 'Nilambur', 17),
(467, 'Cherthala', 17),
(468, 'Perinthalmanna', 17),
(469, 'Mattannur', 17),
(470, 'Shoranur', 17),
(471, 'Varkala', 17),
(472, 'Paravoor', 17),
(473, 'Pathanamthitta', 17),
(474, 'Peringathur', 17),
(475, 'Attingal', 17),
(476, 'Kodungallur', 17),
(477, 'Pappinisseri', 17),
(478, 'Chittur-Thathamangalam', 17),
(479, 'Muvattupuzha', 17),
(480, 'Adoor', 17),
(481, 'Mavelikkara', 17),
(482, 'Mavoor', 17),
(483, 'Perumbavoor', 17),
(484, 'Vaikom', 17),
(485, 'Palai', 17),
(486, 'Panniyannur', 17),
(487, 'Guruvayoor', 17),
(488, 'Puthuppally', 17),
(489, 'Panamattom', 17),
(490, 'Indore', 18),
(491, 'Bhopal', 18),
(492, 'Jabalpur', 18),
(493, 'Gwalior', 18),
(494, 'Ujjain', 18),
(495, 'Sagar', 18),
(496, 'Ratlam', 18),
(497, 'Satna', 18),
(498, 'Murwara (Katni)', 18),
(499, 'Morena', 18),
(500, 'Singrauli', 18),
(501, 'Rewa', 18),
(502, 'Vidisha', 18),
(503, 'Ganjbasoda', 18),
(504, 'Shivpuri', 18),
(505, 'Mandsaur', 18),
(506, 'Neemuch', 18),
(507, 'Nagda', 18),
(508, 'Itarsi', 18),
(509, 'Sarni', 18),
(510, 'Sehore', 18),
(511, 'Mhow Cantonment', 18),
(512, 'Seoni', 18),
(513, 'Balaghat', 18),
(514, 'Ashok Nagar', 18),
(515, 'Tikamgarh', 18),
(516, 'Shahdol', 18),
(517, 'Pithampur', 18),
(518, 'Alirajpur', 18),
(519, 'Mandla', 18),
(520, 'Sheopur', 18),
(521, 'Shajapur', 18),
(522, 'Panna', 18),
(523, 'Raghogarh-Vijaypur', 18),
(524, 'Sendhwa', 18),
(525, 'Sidhi', 18),
(526, 'Pipariya', 18),
(527, 'Shujalpur', 18),
(528, 'Sironj', 18),
(529, 'Pandhurna', 18),
(530, 'Nowgong', 18),
(531, 'Mandideep', 18),
(532, 'Sihora', 18),
(533, 'Raisen', 18),
(534, 'Lahar', 18),
(535, 'Maihar', 18),
(536, 'Sanawad', 18),
(537, 'Sabalgarh', 18),
(538, 'Umaria', 18),
(539, 'Porsa', 18),
(540, 'Narsinghgarh', 18),
(541, 'Malaj Khand', 18),
(542, 'Sarangpur', 18),
(543, 'Mundi', 18),
(544, 'Nepanagar', 18),
(545, 'Pasan', 18),
(546, 'Mahidpur', 18),
(547, 'Seoni-Malwa', 18),
(548, 'Rehli', 18),
(549, 'Manawar', 18),
(550, 'Rahatgarh', 18),
(551, 'Panagar', 18),
(552, 'Wara Seoni', 18),
(553, 'Tarana', 18),
(554, 'Sausar', 18),
(555, 'Rajgarh', 18),
(556, 'Niwari', 18),
(557, 'Mauganj', 18),
(558, 'Manasa', 18),
(559, 'Nainpur', 18),
(560, 'Prithvipur', 18),
(561, 'Sohagpur', 18),
(562, 'Nowrozabad (Khodargama)', 18),
(563, 'Shamgarh', 18),
(564, 'Maharajpur', 18),
(565, 'Multai', 18),
(566, 'Pali', 18),
(567, 'Pachore', 18),
(568, 'Rau', 18),
(569, 'Mhowgaon', 18),
(570, 'Vijaypur', 18),
(571, 'Narsinghgarh', 18),
(572, 'Mumbai', 19),
(573, 'Pune', 19),
(574, 'Nagpur', 19),
(575, 'Thane', 19),
(576, 'Nashik', 19),
(577, 'Kalyan-Dombivali', 19),
(578, 'Vasai-Virar', 19),
(579, 'Solapur', 19),
(580, 'Mira-Bhayandar', 19),
(581, 'Bhiwandi', 19),
(582, 'Amravati', 19),
(583, 'Nanded-Waghala', 19),
(584, 'Sangli', 19),
(585, 'Malegaon', 19),
(586, 'Akola', 19),
(587, 'Latur', 19),
(588, 'Dhule', 19),
(589, 'Ahmednagar', 19),
(590, 'Ichalkaranji', 19),
(591, 'Parbhani', 19),
(592, 'Panvel', 19),
(593, 'Yavatmal', 19),
(594, 'Achalpur', 19),
(595, 'Osmanabad', 19),
(596, 'Nandurbar', 19),
(597, 'Satara', 19),
(598, 'Wardha', 19),
(599, 'Udgir', 19),
(600, 'Aurangabad', 19),
(601, 'Amalner', 19),
(602, 'Akot', 19),
(603, 'Pandharpur', 19),
(604, 'Shrirampur', 19),
(605, 'Parli', 19),
(606, 'Washim', 19),
(607, 'Ambejogai', 19),
(608, 'Manmad', 19),
(609, 'Ratnagiri', 19),
(610, 'Uran Islampur', 19),
(611, 'Pusad', 19),
(612, 'Sangamner', 19),
(613, 'Shirpur-Warwade', 19),
(614, 'Malkapur', 19),
(615, 'Wani', 19),
(616, 'Lonavla', 19),
(617, 'Talegaon Dabhade', 19),
(618, 'Anjangaon', 19),
(619, 'Umred', 19),
(620, 'Palghar', 19),
(621, 'Shegaon', 19),
(622, 'Ozar', 19),
(623, 'Phaltan', 19),
(624, 'Yevla', 19),
(625, 'Shahade', 19),
(626, 'Vita', 19),
(627, 'Umarkhed', 19),
(628, 'Warora', 19),
(629, 'Pachora', 19),
(630, 'Tumsar', 19),
(631, 'Manjlegaon', 19),
(632, 'Sillod', 19),
(633, 'Arvi', 19),
(634, 'Nandura', 19),
(635, 'Vaijapur', 19),
(636, 'Wadgaon Road', 19),
(637, 'Sailu', 19),
(638, 'Murtijapur', 19),
(639, 'Tasgaon', 19),
(640, 'Mehkar', 19),
(641, 'Yawal', 19),
(642, 'Pulgaon', 19),
(643, 'Nilanga', 19),
(644, 'Wai', 19),
(645, 'Umarga', 19),
(646, 'Paithan', 19),
(647, 'Rahuri', 19),
(648, 'Nawapur', 19),
(649, 'Tuljapur', 19),
(650, 'Morshi', 19),
(651, 'Purna', 19),
(652, 'Satana', 19),
(653, 'Pathri', 19),
(654, 'Sinnar', 19),
(655, 'Uchgaon', 19),
(656, 'Uran', 19),
(657, 'Pen', 19),
(658, 'Karjat', 19),
(659, 'Manwath', 19),
(660, 'Partur', 19),
(661, 'Sangole', 19),
(662, 'Mangrulpir', 19),
(663, 'Risod', 19),
(664, 'Shirur', 19),
(665, 'Savner', 19),
(666, 'Sasvad', 19),
(667, 'Pandharkaoda', 19),
(668, 'Talode', 19),
(669, 'Shrigonda', 19),
(670, 'Shirdi', 19),
(671, 'Raver', 19),
(672, 'Mukhed', 19),
(673, 'Rajura', 19),
(674, 'Vadgaon Kasba', 19),
(675, 'Tirora', 19),
(676, 'Mahad', 19),
(677, 'Lonar', 19),
(678, 'Sawantwadi', 19),
(679, 'Pathardi', 19),
(680, 'Pauni', 19),
(681, 'Ramtek', 19),
(682, 'Mul', 19),
(683, 'Soyagaon', 19),
(684, 'Mangalvedhe', 19),
(685, 'Narkhed', 19),
(686, 'Shendurjana', 19),
(687, 'Patur', 19),
(688, 'Mhaswad', 19),
(689, 'Loha', 19),
(690, 'Nandgaon', 19),
(691, 'Warud', 19),
(692, 'Imphal', 20),
(693, 'Thoubal', 20),
(694, 'Lilong', 20),
(695, 'Mayang Imphal', 20),
(696, 'Shillong', 21),
(697, 'Tura', 21),
(698, 'Nongstoin', 21),
(699, 'Aizawl', 22),
(700, 'Lunglei', 22),
(701, 'Saiha', 22),
(702, 'Dimapur', 23),
(703, 'Kohima', 23),
(704, 'Zunheboto', 23),
(705, 'Tuensang', 23),
(706, 'Wokha', 23),
(707, 'Mokokchung', 23),
(708, 'Bhubaneswar', 24),
(709, 'Cuttack', 24),
(710, 'Raurkela', 24),
(711, 'Brahmapur', 24),
(712, 'Sambalpur', 24),
(713, 'Puri', 24),
(714, 'Baleshwar Town', 24),
(715, 'Baripada Town', 24),
(716, 'Bhadrak', 24),
(717, 'Balangir', 24),
(718, 'Jharsuguda', 24),
(719, 'Bargarh', 24),
(720, 'Paradip', 24),
(721, 'Bhawanipatna', 24),
(722, 'Dhenkanal', 24),
(723, 'Barbil', 24),
(724, 'Kendujhar', 24),
(725, 'Sunabeda', 24),
(726, 'Rayagada', 24),
(727, 'Jatani', 24),
(728, 'Byasanagar', 24),
(729, 'Kendrapara', 24),
(730, 'Rajagangapur', 24),
(731, 'Parlakhemundi', 24),
(732, 'Talcher', 24),
(733, 'Sundargarh', 24),
(734, 'Phulabani', 24),
(735, 'Pattamundai', 24),
(736, 'Titlagarh', 24),
(737, 'Nabarangapur', 24),
(738, 'Soro', 24),
(739, 'Malkangiri', 24),
(740, 'Rairangpur', 24),
(741, 'Tarbha', 24),
(742, 'Pondicherry', 25),
(743, 'Karaikal', 25),
(744, 'Yanam', 25),
(745, 'Mahe', 25),
(746, 'Ludhiana', 26),
(747, 'Patiala', 26),
(748, 'Amritsar', 26),
(749, 'Jalandhar', 26),
(750, 'Bathinda', 26),
(751, 'Pathankot', 26),
(752, 'Hoshiarpur', 26),
(753, 'Batala', 26),
(754, 'Moga', 26),
(755, 'Malerkotla', 26),
(756, 'Khanna', 26),
(757, 'Mohali', 26),
(758, 'Barnala', 26),
(759, 'Firozpur', 26),
(760, 'Phagwara', 26),
(761, 'Kapurthala', 26),
(762, 'Zirakpur', 26),
(763, 'Kot Kapura', 26),
(764, 'Faridkot', 26),
(765, 'Muktsar', 26),
(766, 'Rajpura', 26),
(767, 'Sangrur', 26),
(768, 'Fazilka', 26),
(769, 'Gurdaspur', 26),
(770, 'Kharar', 26),
(771, 'Gobindgarh', 26),
(772, 'Mansa', 26),
(773, 'Malout', 26),
(774, 'Nabha', 26),
(775, 'Tarn Taran', 26),
(776, 'Jagraon', 26),
(777, 'Sunam', 26),
(778, 'Dhuri', 26),
(779, 'Firozpur Cantt.', 26),
(780, 'Sirhind Fatehgarh Sahib', 26),
(781, 'Rupnagar', 26),
(782, 'Jalandhar Cantt.', 26),
(783, 'Samana', 26),
(784, 'Nawanshahr', 26),
(785, 'Rampura Phul', 26),
(786, 'Nangal', 26),
(787, 'Nakodar', 26),
(788, 'Zira', 26),
(789, 'Patti', 26),
(790, 'Raikot', 26),
(791, 'Longowal', 26),
(792, 'Urmar Tanda', 26),
(793, 'Morinda, India', 26),
(794, 'Phillaur', 26),
(795, 'Pattran', 26),
(796, 'Qadian', 26),
(797, 'Sujanpur', 26),
(798, 'Mukerian', 26),
(799, 'Talwara', 26),
(800, 'Jaipur', 27),
(801, 'Jodhpur', 27),
(802, 'Bikaner', 27),
(803, 'Udaipur', 27),
(804, 'Ajmer', 27),
(805, 'Bhilwara', 27),
(806, 'Alwar', 27),
(807, 'Bharatpur', 27),
(808, 'Pali', 27),
(809, 'Barmer', 27),
(810, 'Sikar', 27),
(811, 'Tonk', 27),
(812, 'Sadulpur', 27),
(813, 'Sawai Madhopur', 27),
(814, 'Nagaur', 27),
(815, 'Makrana', 27),
(816, 'Sujangarh', 27),
(817, 'Sardarshahar', 27),
(818, 'Ladnu', 27),
(819, 'Ratangarh', 27),
(820, 'Nokha', 27),
(821, 'Nimbahera', 27),
(822, 'Suratgarh', 27),
(823, 'Rajsamand', 27),
(824, 'Lachhmangarh', 27),
(825, 'Rajgarh (Churu)', 27),
(826, 'Nasirabad', 27),
(827, 'Nohar', 27),
(828, 'Phalodi', 27),
(829, 'Nathdwara', 27),
(830, 'Pilani', 27),
(831, 'Merta City', 27),
(832, 'Sojat', 27),
(833, 'Neem-Ka-Thana', 27),
(834, 'Sirohi', 27),
(835, 'Pratapgarh', 27),
(836, 'Rawatbhata', 27),
(837, 'Sangaria', 27),
(838, 'Lalsot', 27),
(839, 'Pilibanga', 27),
(840, 'Pipar City', 27),
(841, 'Taranagar', 27),
(842, 'Vijainagar, Ajmer', 27),
(843, 'Sumerpur', 27),
(844, 'Sagwara', 27),
(845, 'Ramganj Mandi', 27),
(846, 'Lakheri', 27),
(847, 'Udaipurwati', 27),
(848, 'Losal', 27),
(849, 'Sri Madhopur', 27),
(850, 'Ramngarh', 27),
(851, 'Rawatsar', 27),
(852, 'Rajakhera', 27),
(853, 'Shahpura', 27),
(854, 'Shahpura', 27),
(855, 'Raisinghnagar', 27),
(856, 'Malpura', 27),
(857, 'Nadbai', 27),
(858, 'Sanchore', 27),
(859, 'Nagar', 27),
(860, 'Rajgarh (Alwar)', 27),
(861, 'Sheoganj', 27),
(862, 'Sadri', 27),
(863, 'Todaraisingh', 27),
(864, 'Todabhim', 27),
(865, 'Reengus', 27),
(866, 'Rajaldesar', 27),
(867, 'Sadulshahar', 27),
(868, 'Sambhar', 27),
(869, 'Prantij', 27),
(870, 'Mount Abu', 27),
(871, 'Mangrol', 27),
(872, 'Phulera', 27),
(873, 'Mandawa', 27),
(874, 'Pindwara', 27),
(875, 'Mandalgarh', 27),
(876, 'Takhatgarh', 27),
(877, 'Chennai', 28),
(878, 'Coimbatore', 28),
(879, 'Madurai', 28),
(880, 'Tiruchirappalli', 28),
(881, 'Salem', 28),
(882, 'Tirunelveli', 28),
(883, 'Tiruppur', 28),
(884, 'Ranipet', 28),
(885, 'Nagercoil', 28),
(886, 'Thanjavur', 28),
(887, 'Vellore', 28),
(888, 'Kancheepuram', 28),
(889, 'Erode', 28),
(890, 'Tiruvannamalai', 28),
(891, 'Pollachi', 28),
(892, 'Rajapalayam', 28),
(893, 'Sivakasi', 28),
(894, 'Pudukkottai', 28),
(895, 'Neyveli (TS)', 28),
(896, 'Nagapattinam', 28),
(897, 'Viluppuram', 28),
(898, 'Tiruchengode', 28),
(899, 'Vaniyambadi', 28),
(900, 'Theni Allinagaram', 28),
(901, 'Udhagamandalam', 28),
(902, 'Aruppukkottai', 28),
(903, 'Paramakudi', 28),
(904, 'Arakkonam', 28),
(905, 'Virudhachalam', 28),
(906, 'Srivilliputhur', 28),
(907, 'Tindivanam', 28),
(908, 'Virudhunagar', 28),
(909, 'Karur', 28),
(910, 'Valparai', 28),
(911, 'Sankarankovil', 28),
(912, 'Tenkasi', 28),
(913, 'Palani', 28),
(914, 'Pattukkottai', 28),
(915, 'Tirupathur', 28),
(916, 'Ramanathapuram', 28),
(917, 'Udumalaipettai', 28),
(918, 'Gobichettipalayam', 28),
(919, 'Thiruvarur', 28),
(920, 'Thiruvallur', 28),
(921, 'Panruti', 28),
(922, 'Namakkal', 28),
(923, 'Thirumangalam', 28),
(924, 'Vikramasingapuram', 28),
(925, 'Nellikuppam', 28),
(926, 'Rasipuram', 28),
(927, 'Tiruttani', 28),
(928, 'Nandivaram-Guduvancheri', 28),
(929, 'Periyakulam', 28),
(930, 'Pernampattu', 28),
(931, 'Vellakoil', 28),
(932, 'Sivaganga', 28),
(933, 'Vadalur', 28),
(934, 'Rameshwaram', 28),
(935, 'Tiruvethipuram', 28),
(936, 'Perambalur', 28),
(937, 'Usilampatti', 28),
(938, 'Vedaranyam', 28),
(939, 'Sathyamangalam', 28),
(940, 'Puliyankudi', 28),
(941, 'Nanjikottai', 28),
(942, 'Thuraiyur', 28),
(943, 'Sirkali', 28),
(944, 'Tiruchendur', 28),
(945, 'Periyasemur', 28),
(946, 'Sattur', 28),
(947, 'Vandavasi', 28),
(948, 'Tharamangalam', 28),
(949, 'Tirukkoyilur', 28),
(950, 'Oddanchatram', 28),
(951, 'Palladam', 28),
(952, 'Vadakkuvalliyur', 28),
(953, 'Tirukalukundram', 28),
(954, 'Uthamapalayam', 28),
(955, 'Surandai', 28),
(956, 'Sankari', 28),
(957, 'Shenkottai', 28),
(958, 'Vadipatti', 28),
(959, 'Sholingur', 28),
(960, 'Tirupathur', 28),
(961, 'Manachanallur', 28),
(962, 'Viswanatham', 28),
(963, 'Polur', 28),
(964, 'Panagudi', 28),
(965, 'Uthiramerur', 28),
(966, 'Thiruthuraipoondi', 28),
(967, 'Pallapatti', 28),
(968, 'Ponneri', 28),
(969, 'Lalgudi', 28),
(970, 'Natham', 28),
(971, 'Unnamalaikadai', 28),
(972, 'P.N.Patti', 28),
(973, 'Tharangambadi', 28),
(974, 'Tittakudi', 28),
(975, 'Pacode', 28),
(976, 'OValley', 28),
(977, 'Suriyampalayam', 28),
(978, 'Sholavandan', 28),
(979, 'Thammampatti', 28),
(980, 'Namagiripettai', 28),
(981, 'Peravurani', 28),
(982, 'Parangipettai', 28),
(983, 'Pudupattinam', 28),
(984, 'Pallikonda', 28),
(985, 'Sivagiri', 28),
(986, 'Punjaipugalur', 28),
(987, 'Padmanabhapuram', 28),
(988, 'Thirupuvanam', 28),
(989, 'Hyderabad', 29),
(990, 'Warangal', 29),
(991, 'Nizamabad', 29),
(992, 'Karimnagar', 29),
(993, 'Ramagundam', 29),
(994, 'Khammam', 29),
(995, 'Mahbubnagar', 29),
(996, 'Mancherial', 29),
(997, 'Adilabad', 29),
(998, 'Suryapet', 29),
(999, 'Jagtial', 29),
(1000, 'Miryalaguda', 29),
(1001, 'Nirmal', 29),
(1002, 'Kamareddy', 29),
(1003, 'Kothagudem', 29),
(1004, 'Bodhan', 29),
(1005, 'Palwancha', 29),
(1006, 'Mandamarri', 29),
(1007, 'Koratla', 29),
(1008, 'Sircilla', 29),
(1009, 'Tandur', 29),
(1010, 'Siddipet', 29),
(1011, 'Wanaparthy', 29),
(1012, 'Kagaznagar', 29),
(1013, 'Gadwal', 29),
(1014, 'Sangareddy', 29),
(1015, 'Bellampalle', 29),
(1016, 'Bhongir', 29),
(1017, 'Vikarabad', 29),
(1018, 'Jangaon', 29),
(1019, 'Bhadrachalam', 29),
(1020, 'Bhainsa', 29),
(1021, 'Farooqnagar', 29),
(1022, 'Medak', 29),
(1023, 'Narayanpet', 29),
(1024, 'Sadasivpet', 29),
(1025, 'Yellandu', 29),
(1026, 'Manuguru', 29),
(1027, 'Kyathampalle', 29),
(1028, 'Nagarkurnool', 29),
(1029, 'Agartala', 30),
(1030, 'Udaipur', 30),
(1031, 'Dharmanagar', 30),
(1032, 'Pratapgarh', 30),
(1033, 'Kailasahar', 30),
(1034, 'Belonia', 30),
(1035, 'Khowai', 30),
(1036, 'Lucknow', 31),
(1037, 'Kanpur', 31),
(1038, 'Firozabad', 31),
(1039, 'Agra', 31),
(1040, 'Meerut', 31),
(1041, 'Varanasi', 31),
(1042, 'Allahabad', 31),
(1043, 'Amroha', 31),
(1044, 'Moradabad', 31),
(1045, 'Aligarh', 31),
(1046, 'Saharanpur', 31),
(1047, 'Noida', 31),
(1048, 'Loni', 31),
(1049, 'Jhansi', 31),
(1050, 'Shahjahanpur', 31),
(1051, 'Rampur', 31),
(1052, 'Modinagar', 31),
(1053, 'Hapur', 31),
(1054, 'Etawah', 31),
(1055, 'Sambhal', 31),
(1056, 'Orai', 31),
(1057, 'Bahraich', 31),
(1058, 'Unnao', 31),
(1059, 'Rae Bareli', 31),
(1060, 'Lakhimpur', 31),
(1061, 'Sitapur', 31),
(1062, 'Lalitpur', 31),
(1063, 'Pilibhit', 31),
(1064, 'Chandausi', 31),
(1065, 'Hardoi ', 31),
(1066, 'Azamgarh', 31),
(1067, 'Khair', 31),
(1068, 'Sultanpur', 31),
(1069, 'Tanda', 31),
(1070, 'Nagina', 31),
(1071, 'Shamli', 31),
(1072, 'Najibabad', 31),
(1073, 'Shikohabad', 31),
(1074, 'Sikandrabad', 31),
(1075, 'Shahabad, Hardoi', 31),
(1076, 'Pilkhuwa', 31),
(1077, 'Renukoot', 31),
(1078, 'Vrindavan', 31),
(1079, 'Ujhani', 31),
(1080, 'Laharpur', 31),
(1081, 'Tilhar', 31),
(1082, 'Sahaswan', 31),
(1083, 'Rath', 31),
(1084, 'Sherkot', 31),
(1085, 'Kalpi', 31),
(1086, 'Tundla', 31),
(1087, 'Sandila', 31),
(1088, 'Nanpara', 31),
(1089, 'Sardhana', 31),
(1090, 'Nehtaur', 31),
(1091, 'Seohara', 31),
(1092, 'Padrauna', 31),
(1093, 'Mathura', 31),
(1094, 'Thakurdwara', 31),
(1095, 'Nawabganj', 31),
(1096, 'Siana', 31),
(1097, 'Noorpur', 31),
(1098, 'Sikandra Rao', 31),
(1099, 'Puranpur', 31),
(1100, 'Rudauli', 31),
(1101, 'Thana Bhawan', 31),
(1102, 'Palia Kalan', 31),
(1103, 'Zaidpur', 31),
(1104, 'Nautanwa', 31),
(1105, 'Zamania', 31),
(1106, 'Shikarpur, Bulandshahr', 31),
(1107, 'Naugawan Sadat', 31),
(1108, 'Fatehpur Sikri', 31),
(1109, 'Shahabad, Rampur', 31),
(1110, 'Robertsganj', 31),
(1111, 'Utraula', 31),
(1112, 'Sadabad', 31),
(1113, 'Rasra', 31),
(1114, 'Lar', 31),
(1115, 'Lal Gopalganj Nindaura', 31),
(1116, 'Sirsaganj', 31),
(1117, 'Pihani', 31),
(1118, 'Shamsabad, Agra', 31),
(1119, 'Rudrapur', 31),
(1120, 'Soron', 31),
(1121, 'SUrban Agglomerationr', 31),
(1122, 'Samdhan', 31),
(1123, 'Sahjanwa', 31),
(1124, 'Rampur Maniharan', 31),
(1125, 'Sumerpur', 31),
(1126, 'Shahganj', 31),
(1127, 'Tulsipur', 31),
(1128, 'Tirwaganj', 31),
(1129, 'PurqUrban Agglomerationzi', 31),
(1130, 'Shamsabad, Farrukhabad', 31),
(1131, 'Warhapur', 31),
(1132, 'Powayan', 31),
(1133, 'Sandi', 31),
(1134, 'Achhnera', 31),
(1135, 'Naraura', 31),
(1136, 'Nakur', 31),
(1137, 'Sahaspur', 31),
(1138, 'Safipur', 31),
(1139, 'Reoti', 31),
(1140, 'Sikanderpur', 31),
(1141, 'Saidpur', 31),
(1142, 'Sirsi', 31),
(1143, 'Purwa', 31),
(1144, 'Parasi', 31),
(1145, 'Lalganj', 31),
(1146, 'Phulpur', 31),
(1147, 'Shishgarh', 31),
(1148, 'Sahawar', 31),
(1149, 'Samthar', 31),
(1150, 'Pukhrayan', 31),
(1151, 'Obra', 31),
(1152, 'Niwai', 31),
(1153, 'Dehradun', 32),
(1154, 'Hardwar', 32),
(1155, 'Haldwani-cum-Kathgodam', 32),
(1156, 'Srinagar', 32),
(1157, 'Kashipur', 32),
(1158, 'Roorkee', 32),
(1159, 'Rudrapur', 32),
(1160, 'Rishikesh', 32),
(1161, 'Ramnagar', 32),
(1162, 'Pithoragarh', 32),
(1163, 'Manglaur', 32),
(1164, 'Nainital', 32),
(1165, 'Mussoorie', 32),
(1166, 'Tehri', 32),
(1167, 'Pauri', 32),
(1168, 'Nagla', 32),
(1169, 'Sitarganj', 32),
(1170, 'Bageshwar', 32),
(1171, 'Kolkata', 33),
(1172, 'Siliguri', 33),
(1173, 'Asansol', 33),
(1174, 'Raghunathganj', 33),
(1175, 'Kharagpur', 33),
(1176, 'Naihati', 33),
(1177, 'English Bazar', 33),
(1178, 'Baharampur', 33),
(1179, 'Hugli-Chinsurah', 33),
(1180, 'Raiganj', 33),
(1181, 'Jalpaiguri', 33),
(1182, 'Santipur', 33),
(1183, 'Balurghat', 33),
(1184, 'Medinipur', 33),
(1185, 'Habra', 33),
(1186, 'Ranaghat', 33),
(1187, 'Bankura', 33),
(1188, 'Nabadwip', 33),
(1189, 'Darjiling', 33),
(1190, 'Purulia', 33),
(1191, 'Arambagh', 33),
(1192, 'Tamluk', 33),
(1193, 'AlipurdUrban Agglomerationr', 33),
(1194, 'Suri', 33),
(1195, 'Jhargram', 33),
(1196, 'Gangarampur', 33),
(1197, 'Rampurhat', 33),
(1198, 'Kalimpong', 33),
(1199, 'Sainthia', 33),
(1200, 'Taki', 33),
(1201, 'Murshidabad', 33),
(1202, 'Memari', 33),
(1203, 'Paschim Punropara', 33),
(1204, 'Tarakeswar', 33),
(1205, 'Sonamukhi', 33),
(1206, 'PandUrban Agglomeration', 33),
(1207, 'Mainaguri', 33),
(1208, 'Malda', 33),
(1209, 'Panchla', 33),
(1210, 'Raghunathpur', 33),
(1211, 'Mathabhanga', 33),
(1212, 'Monoharpur', 33),
(1213, 'Srirampore', 33),
(1214, 'Adra', 33);

-- --------------------------------------------------------

--
-- Table structure for table `clogo`
--

CREATE TABLE `clogo` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clogo`
--

INSERT INTO `clogo` (`id`, `image`, `created_at`) VALUES
(1, '1583901278logo1.png', '2020-03-11 04:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ab kaka', 'abkaka@gmail.com', NULL, '$2y$10$dqjr2bLuGpWW8VA4jy6gg./b6bAG8NIgDeRfKXyIFiiZjGx9OBn5y', NULL, '2020-03-16 03:44:59', '2020-03-16 03:44:59'),
(3, 'Manish jariwala', 'manishjariwala5151@gmail.com', NULL, '$2y$10$.AX1RU6N/RK8wddeuzQxUOkuZqj80vJ5dq5bjDlj4kYJsTJYARDuu', NULL, '2020-03-22 03:53:14', '2020-03-22 03:53:14'),
(4, 'divyang jariwala', 'divyanghjariwala5151@gmail.com', NULL, '$2y$10$MQmLVmgBfX1Ie3yRGuDS2.IutLNlSxPfBMXqLp69u8OpKgOJ1dlsy', NULL, '2020-03-22 04:19:19', '2020-03-22 04:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `flat` varchar(300) DEFAULT NULL,
  `colony` varchar(200) DEFAULT NULL,
  `landmark` varchar(200) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `state` int(10) UNSIGNED DEFAULT NULL,
  `city` int(10) UNSIGNED DEFAULT NULL,
  `mobileno` text DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `cid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `active` enum('true','false') DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`id`, `name`, `flat`, `colony`, `landmark`, `pincode`, `state`, `city`, `mobileno`, `type`, `cid`, `created_at`, `active`) VALUES
(11, 'Manish jariwala', '52', 'dharmayug society gate no 1', 'near madhi ni khamni  udhna', 394210, 11, 209, '9979965703', 'home', 3, NULL, 'true'),
(15, 'daafa', 'bhkhm', 'jvjv', 'jvvvhv', 123456, 12, 291, '1234567890', 'home', 3, NULL, 'true'),
(17, 'priyeh jariwala', 'fbhv', 'dharmayug society gate no 1', 'kfg', 394210, 1, 84, '7046629027', 'home', 1, NULL, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laces`
--

CREATE TABLE `laces` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(10) NOT NULL DEFAULT 1,
  `usge` varchar(30) NOT NULL,
  `width` varchar(20) NOT NULL,
  `packaging_type` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `type` enum('designer lace','fancy lace','new lace') NOT NULL DEFAULT 'new lace'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laces`
--

INSERT INTO `laces` (`id`, `name`, `image`, `price`, `quantity`, `usge`, `width`, `packaging_type`, `length`, `type`) VALUES
(3, 'BHAJIYA LACE', '1579516180bhajiya-lace.jpg', 70, 1, 'lehenga', '0.5inch', 'Roll', '-', 'designer lace'),
(4, 'COLORED JARI LACE', '1579517176colored-zari-lace.jpg', 75, 1, 'saree, kurti', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(5, 'SUIT JARI LACE', '1579599639designer-suit-zari-lace.jpg', 60, 1, 'suit', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(6, 'PEARL JARI LACE', '1579599733pearl-designer-zari-lace.jpg', 50, 1, 'saree ,duppatta', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(7, 'ZALAR LACE', '1579599859designer-zalar-lace.jpg', 65, 1, 'saree ,duppata', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(8, 'GOLDEN ZALAR LACE', '1579602108golden-designer-zalar-lace.jpg', 50, 1, 'saree , duppata', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(9, 'SAREE BORDER LACE', '1579602166designer-saree-border-lace.jpg', 50, 1, 'saree', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(10, 'GOTA LACE', '1579602213designer-gota-lace.jpg', 75, 1, 'saree , duppata', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(11, 'SAREE BORDER LACE', '1579602413designer-saree-border-lace.jpg', 50, 1, 'saree', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(12, 'SAREE EMBRODERY LACE', '1579602494saree-embroidery-designer-lace.jpg', 50, 1, 'saree', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(13, 'GOTA-PATTI LACE', '1579602545designer-gota-patti-border-lace.jpg', 50, 1, 'saree , duppata', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(14, 'STONE WORK SAREE LACE', '1585543705stone-work-saree-border-lace.jpg', 140, 1, 'saree', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(15, 'GOLDEN COTTON LACE', '1579603153golden-designer-cotton-lace.jpg', 110, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(16, 'DUPPATTA ZALAR LACE', '1579603217dupatta-zalar-lace.jpg', 75, 1, 'duppatta', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(17, 'SAREE ZALAR LACE', '1579603251designer-saree-zalar-lace.jpg', 50, 1, 'saree', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(18, 'MULTI-COLOR ZALAR LACE', '1579603283multicolor-designer-zalar-lace.jpg', 40, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(19, 'KURTI ZALAR LACE', '1579603315designer-kurti-zalar-lace.jpg', 50, 1, 'kurti', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(20, 'DUPPATTA LACE', '1579603362dupatta-designer-lace.jpg', 60, 1, 'duppatta', '1.5-4 inch', 'Roll', '9 meter', 'designer lace'),
(21, 'TASSLE FRINGE GOTA LACE', '1580291674tassels-fringe-gota-lace-500x500.jpg', 80, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(22, 'GOLDEN FANCY LACE', '1580291783golden-fancy-lace-500x500.jpg', 110, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(23, 'GARMENT FANCY LACE', '1580291836garment-fancy-lace-500x500.jpg', 80, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(24, 'FANCY SAREE BORDER LACE', '1580291895fancy-saree-border-lace-500x500.jpg', 85, 1, 'saree', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(25, 'MIRROR WORK FANCY LACE', '1580291927mirror-work-fancy-lace-500x500.jpg', 50, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(26, 'GOLDEN PLAIN FANCY LACE', '1580291966golden-plain-fancy-lace-500x500.jpg', 50, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(27, 'COLORED FANCY LACE', '1580292071colored-fancy-lace-500x500.jpg', 55, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(28, 'FANCY COTTON LACE', '1580292185fancy-cotton-lace-500x500.jpg', 55, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(29, 'FANCY KURTI LACE', '1580292331fancy-kurti-lace-500x500.jpg', 100, 1, 'kurti', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(30, 'FANCY KNITTED LACE', '1580292370fancy-knitted-lace-500x500.jpg', 40, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(31, 'GOTA PATTI BORDER LACE', '1580292396gota-patti-border-lace-500x500.jpg', 50, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(32, 'FANCY SAREE GOTA LACE', '1580292452fancy-saree-gota-lace-500x500.jpg', 70, 1, 'saree', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(33, 'MULTI-COLOR FANCY LACE', '1580292487multicolor-fancy-lace-500x500.jpg', 45, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(34, 'FANCY EMBRODARY LACE', '1580292539fancy-embroidery-lace-500x500.jpg', 65, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(35, 'FANCY ROLLED EMBRODARY LACE', '1580292671fancy-rolled-embroidery-lace-500x500.jpg', 50, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(36, 'FANCY LACE', '1580292706product-jpeg-500x500.jpg', 50, 1, 'lehnga', '1 inch', 'Roll', '9 meter', 'fancy lace'),
(37, 'EMBRODARY FANCY LACE', '1580370068fancy-embrodary-jpeg-500x500 (1).jpg', 165, 1, 'garments', '2 inch', 'Roll', '9 meter', 'fancy lace'),
(38, 'FANCY COLORED LACE', '1580370362fancy color-jpeg-500x500 (2).jpg', 50, 1, 'duppatta', '0.5 inch', '-', '9 meter', 'fancy lace'),
(39, 'FANCY ZALAR LACE', '1580370425zalar-lace-jpeg-500x500.jpg', 40, 1, 'garments', '0.5', '-', '25 meter', 'fancy lace'),
(40, 'CUTWORK LACE', '1580370654cutwork-500x500.jpg', 55, 1, 'dress, saree, blouse', '-', '-', '45 meter', 'fancy lace'),
(41, 'DIABLE LACE', '1580370684diable-lace-jpeg-500x500 (1).jpg', 45, 1, 'duppatta', '2 inch', 'bundle', '9 meter', 'fancy lace'),
(42, 'SAMOSA LACE', '1580370713samosa-lace-jpeg-500x500 (1).jpg', 80, 1, 'lehnga', '0.5 inch', 'boundle', '9 meter', 'fancy lace'),
(43, 'MAHARANI LACE', '1580370810maharani-lace-500x500 (1).jpg', 150, 1, 'saree', '1 inch', 'boundle', '45 meter', 'fancy lace'),
(44, 'KHAJURI LACE', '1580370955khajuri-lace-jpeg-500x500 (1).jpg', 50, 1, 'saree, kurti', '0.5 inch', 'bundle', '9 meter', 'fancy lace'),
(45, 'ZALAR FANCY LACE', '1580370995zalar-fancy-lace-jpeg-500x500 (1).jpg', 90, 1, 'saree', '0.5 inch', '-', '9 meter', 'fancy lace'),
(46, 'GOTA LACE', '1580371187gota-fancy-jpeg-500x500 (1).jpg', 35, 1, 'duppatta', '1.1 inch', 'Roll', '9 meter', 'fancy lace'),
(47, 'MAHARANI COLOR LACE', '1580371223maharani-fancy-lace-500x500 (1).jpg', 110, 1, 'saree duppatta blouse', '1.5-4 inch', 'Roll', '9 meter', 'fancy lace'),
(48, 'CUTWORK LACE', '1580543865cutwork-lace.jpg', 95, 1, 'saree', '2 inch', '-', '9 meter', 'new lace'),
(49, 'GOTA LACE', '1580544874gota-lace-jpeg-500x500 (2).jpg', 35, 1, 'saree', '0.5 inch', 'Roll', '20 meter', 'new lace'),
(50, 'MOTI LACE', '1580545067moti-lace.jpg', 70, 1, 'saree duppatta blouse', '3 inch', 'Roll', '9 meter', 'new lace'),
(51, 'PANKHA LACE', '1580545159pankhalace.jpg', 85, 1, 'sare border', '1.5 inch', 'bundle', '9 meter', 'new lace');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_16_082703_create_customers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `rate` int(10) DEFAULT NULL,
  `maxi` int(10) DEFAULT NULL,
  `coupne` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `firsttime` enum('true','false') DEFAULT NULL,
  `descr` text DEFAULT NULL,
  `amount` bigint(20) DEFAULT NULL,
  `active` enum('true','false') DEFAULT 'true',
  `pid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `date1`, `date2`, `rate`, `maxi`, `coupne`, `firsttime`, `descr`, `amount`, `active`, `pid`, `created_at`) VALUES
(2, '2020-04-07', '2020-06-06', 40, 200, 'FIRSTORDER', 'true', 'zd.vzvcdmh', 500, 'true', NULL, NULL),
(3, '2020-04-10', '2020-06-09', 40, 150, 'APRIL100', 'true', 'KXFGSG', 500, 'true', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE `passport` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passport`
--

INSERT INTO `passport` (`id`, `image`, `created_at`) VALUES
(2, '15867837321585731879passport.jpg', '2020-04-13 13:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('priyeshjariwala5151@gmail.com', '$2y$10$1L1CdzEa/KNSDU04v/o.BO5eKIK5ibIOrB1drfaEeNODSzlquGdRO', '2020-03-22 06:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `payinfo`
--

CREATE TABLE `payinfo` (
  `id` int(10) NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `status` text DEFAULT NULL,
  `key` text DEFAULT NULL,
  `hash` text DEFAULT NULL,
  `txnid` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `productinfo` text DEFAULT NULL,
  `surl` text DEFAULT NULL,
  `furl` text DEFAULT NULL,
  `service_provider` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payinfo`
--

INSERT INTO `payinfo` (`id`, `uid`, `status`, `key`, `hash`, `txnid`, `amount`, `firstname`, `lastname`, `email`, `contact`, `productinfo`, `surl`, `furl`, `service_provider`, `created_at`) VALUES
(1, 3, 'success', 'gtKFFx', 'b19b1d6f9cea8ac19643fa49f7be6451fb3d2cedee51cbb35d7767d35c3e1a2910945945f5804c122acbd41cd3bd153052fa95e1ed1b2976664214952f9997ca', '0a9b402d6ba962d2a405', '810.00', NULL, NULL, 'manishjariwala5151@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 04:58:50'),
(2, 3, 'success', 'gtKFFx', 'b19b1d6f9cea8ac19643fa49f7be6451fb3d2cedee51cbb35d7767d35c3e1a2910945945f5804c122acbd41cd3bd153052fa95e1ed1b2976664214952f9997ca', '0a9b402d6ba962d2a405', '810.00', NULL, NULL, 'manishjariwala5151@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 05:20:15'),
(3, 3, 'success', 'gtKFFx', 'e39aa18e92efdd23cebc99db1df36824e32b0b74b2f438111fadbe4a59152022fed98321f7ee99b1294b44a4f64f333b6f82f993235e66023fd29ebdbe3f41c9', 'da5a4a737288dfda954b', '420.00', NULL, NULL, 'manishjariwala5151@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 05:24:08'),
(4, 3, 'success', 'gtKFFx', '9863474ce93644d9ff3275b9bb45e64f1d3684c3c6be971f16c919a5865b4af5e7380d59f88cb2ff5f2825f1b86e03c4f61923d45c02b2be67c90792d5bc59fb', 'c4a68e015a33f5bdaeb0', '42.00', NULL, NULL, 'manishjariwala5151@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 11:26:54'),
(5, 3, 'success', 'gtKFFx', '9863474ce93644d9ff3275b9bb45e64f1d3684c3c6be971f16c919a5865b4af5e7380d59f88cb2ff5f2825f1b86e03c4f61923d45c02b2be67c90792d5bc59fb', 'c4a68e015a33f5bdaeb0', '42.00', NULL, NULL, 'manishjariwala5151@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 11:27:33'),
(6, 3, 'success', 'gtKFFx', '9863474ce93644d9ff3275b9bb45e64f1d3684c3c6be971f16c919a5865b4af5e7380d59f88cb2ff5f2825f1b86e03c4f61923d45c02b2be67c90792d5bc59fb', 'c4a68e015a33f5bdaeb0', '42.00', NULL, NULL, 'manishjariwala5151@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 11:27:57'),
(7, 1, 'success', 'gtKFFx', 'c7e6b94ba4f79efd324e97ce3fc34ab68a4d3d3095a292ddb90bd2c23ad34acb90c1c9f46b4f43eff83c195d6f23a8ebd56aa7f7af242155f0efe06a8489ba5a', '6fe82203efb3e4096d4f', '420.00', NULL, NULL, 'abkaka@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 12:05:39'),
(8, 1, 'success', 'gtKFFx', '7a0f0f8bf0401a1e5004cb5d0aff3ae06fb2c85ad24cda0519a1b4838cbd9cc564ee8ed26d8f3b78f52b5daa5ee0de1981c3dda60012ac84c9fc64efd1f072e0', 'bb670031bebd2a42f9b6', '420.00', NULL, NULL, 'abkaka@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 12:18:39'),
(9, 1, 'success', 'gtKFFx', '7a0f0f8bf0401a1e5004cb5d0aff3ae06fb2c85ad24cda0519a1b4838cbd9cc564ee8ed26d8f3b78f52b5daa5ee0de1981c3dda60012ac84c9fc64efd1f072e0', 'bb670031bebd2a42f9b6', '420.00', NULL, NULL, 'abkaka@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 12:24:13'),
(10, 1, 'success', 'gtKFFx', '7a0f0f8bf0401a1e5004cb5d0aff3ae06fb2c85ad24cda0519a1b4838cbd9cc564ee8ed26d8f3b78f52b5daa5ee0de1981c3dda60012ac84c9fc64efd1f072e0', 'bb670031bebd2a42f9b6', '420.00', NULL, NULL, 'abkaka@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 12:29:26'),
(11, 1, 'success', 'gtKFFx', '7a0f0f8bf0401a1e5004cb5d0aff3ae06fb2c85ad24cda0519a1b4838cbd9cc564ee8ed26d8f3b78f52b5daa5ee0de1981c3dda60012ac84c9fc64efd1f072e0', 'bb670031bebd2a42f9b6', '420.00', NULL, NULL, 'abkaka@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 12:29:45'),
(12, 1, 'success', 'gtKFFx', '7a0f0f8bf0401a1e5004cb5d0aff3ae06fb2c85ad24cda0519a1b4838cbd9cc564ee8ed26d8f3b78f52b5daa5ee0de1981c3dda60012ac84c9fc64efd1f072e0', 'bb670031bebd2a42f9b6', '420.00', NULL, NULL, 'abkaka@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-26 12:30:00'),
(13, 1, 'success', 'gtKFFx', '7cc6053d2c6e47050b1398f7848fa1d83d9c62afba164d78c3a54cd22a42a9bb8e64a292a8aa9fc0634d95f4d0e5514859cbd7cb9de79e40c7e15461343ef1e6', '495b1fe47bacf7c87a73', '75.00', NULL, NULL, 'abkaka@gmail.com', NULL, NULL, 'http://localhost/project/payment_view_sucess', 'http://localhost/project/payment_view_failure', 'PayuMoney', '2020-04-27 05:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `payinfo_product`
--

CREATE TABLE `payinfo_product` (
  `id` int(10) NOT NULL,
  `p_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `prod_name` varchar(500) DEFAULT NULL,
  `prod_qty` varchar(50) DEFAULT NULL,
  `product_price` varchar(50) DEFAULT NULL,
  `price_tot` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payinfo_product`
--

INSERT INTO `payinfo_product` (`id`, `p_id`, `name`, `product_id`, `prod_name`, `prod_qty`, `product_price`, `price_tot`, `created_at`) VALUES
(11, 1, 'ab kaka', 4, 'COLORED JARI LACE', '1', '75', '75', '2020-04-27 05:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Andaman and Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli'),
(9, 'Delhi'),
(10, 'Goa'),
(11, 'Gujarat'),
(12, 'Haryana'),
(13, 'Himachal Pradesh'),
(14, 'Jammu and Kashmir'),
(15, 'Jharkhand'),
(16, 'Karnataka'),
(17, 'Kerala'),
(18, 'Madhya Pradesh'),
(19, 'Maharashtra'),
(20, 'Manipur'),
(21, 'Meghalaya'),
(22, 'Mizoram'),
(23, 'Nagaland'),
(24, 'Odisha'),
(25, 'Puducherry'),
(26, 'Punjab'),
(27, 'Rajasthan'),
(28, 'Tamil Nadu'),
(29, 'Telangana'),
(30, 'Tripura'),
(31, 'Uttar Pradesh'),
(32, 'Uttarakhand'),
(33, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'priyesh jariwala', 'priyeshjariwala5151@gmail.com', NULL, '$2y$10$yjeXe5KhLVxg3FYtjUQftO5pjQFDgKtg4m.7U6J3ce8x7pOHPILY2', NULL, '2020-01-01 04:36:39', '2020-01-01 04:36:39'),
(4, 'Manish jariwala', 'manishjariwala5151@gmail.com', NULL, '$2y$10$kENklkzhXUyjVq6GvVAiZuDFQxdaB24NrySCiKuWkM2rl/MsnVuFO', NULL, '2020-04-04 08:19:38', '2020-04-04 08:19:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cbanner`
--
ALTER TABLE `cbanner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `cbanner2`
--
ALTER TABLE `cbanner2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citys_ibfk_1` (`sid`);

--
-- Indexes for table `clogo`
--
ALTER TABLE `clogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state` (`state`),
  ADD KEY `city` (`city`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laces`
--
ALTER TABLE `laces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `passport`
--
ALTER TABLE `passport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payinfo`
--
ALTER TABLE `payinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `payinfo_product`
--
ALTER TABLE `payinfo_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cbanner`
--
ALTER TABLE `cbanner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cbanner2`
--
ALTER TABLE `cbanner2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1215;

--
-- AUTO_INCREMENT for table `clogo`
--
ALTER TABLE `clogo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `laces`
--
ALTER TABLE `laces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `passport`
--
ALTER TABLE `passport`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payinfo`
--
ALTER TABLE `payinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payinfo_product`
--
ALTER TABLE `payinfo_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cbanner`
--
ALTER TABLE `cbanner`
  ADD CONSTRAINT `cbanner_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `cbanner2`
--
ALTER TABLE `cbanner2`
  ADD CONSTRAINT `cbanner2_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD CONSTRAINT `customer_address_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customers` (`id`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `laces` (`id`);

--
-- Constraints for table `payinfo`
--
ALTER TABLE `payinfo`
  ADD CONSTRAINT `payinfo_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `customers` (`id`);

--
-- Constraints for table `payinfo_product`
--
ALTER TABLE `payinfo_product`
  ADD CONSTRAINT `payinfo_product_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `payinfo_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `laces` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
