-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2018 at 01:39 PM
-- Server version: 5.5.60-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balkat_panodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_setting`
--

CREATE TABLE `cms_setting` (
  `setting_name` varchar(255) NOT NULL,
  `setting_parameter` varchar(255) NOT NULL,
  `setting_last_time` datetime NOT NULL,
  `setting_by` int(11) NOT NULL,
  `valueadded_field` varchar(255) NOT NULL,
  `valueadded_fieldtext` text NOT NULL,
  `valueadded_image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_setting`
--

INSERT INTO `cms_setting` (`setting_name`, `setting_parameter`, `setting_last_time`, `setting_by`, `valueadded_field`, `valueadded_fieldtext`, `valueadded_image`) VALUES
('log', 'text_file', '2012-03-19 15:27:34', 3, '', '', ''),
('meta home', 'Telkomsel', '0000-00-00 00:00:00', 2, 'telkomsel,telekomunikasi,seluler,kartu as ,simpati,kartu halo', 'Telkomsel is the leading operator of cellular telecommunications services in Indonesia by market share and revenue share', ''),
('information', 'information', '2012-03-19 15:18:58', 3, 'Content Management System', '', 'Setting-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_desc` text NOT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `about_order` int(11) NOT NULL DEFAULT '1',
  `about_active_status` tinyint(1) NOT NULL DEFAULT '0',
  `about_create_date` datetime NOT NULL,
  `about_create_by` int(11) NOT NULL,
  `about_update_date` datetime DEFAULT NULL,
  `about_update_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_title`, `about_desc`, `about_image`, `about_order`, `about_active_status`, `about_create_date`, `about_create_by`, `about_update_date`, `about_update_by`) VALUES
(1, 'dadsa', 'dasda', '/assets/file_upload/hacker/images/bg-slide-2(1).jpg', 1, 1, '2018-05-29 18:22:04', 1, '2018-05-29 18:22:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_access`
--

CREATE TABLE `tbl_access` (
  `access_id` int(11) NOT NULL,
  `user_level_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `access_active_status` tinyint(1) NOT NULL,
  `access_create_date` datetime NOT NULL,
  `access_create_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_access`
--

INSERT INTO `tbl_access` (`access_id`, `user_level_id`, `module_id`, `access_active_status`, `access_create_date`, `access_create_by`) VALUES
(1, 1, 1, 1, '2015-10-07 13:09:47', 1),
(2, 1, 2, 1, '2015-10-07 13:11:09', 1),
(3, 1, 3, 1, '2015-10-07 13:13:30', 1),
(4, 1, 4, 1, '2015-10-07 13:15:30', 1),
(5, 1, 5, 1, '2015-10-07 13:16:46', 1),
(6, 4, 4, 1, '2015-10-08 19:56:24', 1),
(7, 3, 8, 1, '2015-10-15 16:16:21', 1),
(8, 3, 9, 1, '2015-10-25 03:09:43', 1),
(9, 1, 9, 1, '2015-10-25 03:10:05', 1),
(10, 1, 10, 1, '2015-10-25 03:19:34', 1),
(11, 1, 11, 1, '2015-10-26 13:06:42', 1),
(12, 1, 12, 1, '2015-10-26 13:10:58', 1),
(13, 1, 13, 1, '2015-10-26 15:45:05', 1),
(14, 1, 14, 1, '2015-10-28 14:43:24', 1),
(15, 1, 15, 1, '2015-10-29 13:20:37', 1),
(16, 1, 16, 1, '2015-10-29 13:27:12', 1),
(17, 1, 17, 1, '2015-10-29 15:05:03', 1),
(18, 1, 18, 1, '2015-10-29 15:05:11', 1),
(19, 1, 19, 1, '2015-11-11 16:24:51', 1),
(119, 1, 102, 1, '2018-08-13 16:34:42', 1),
(118, 1, 100, 1, '2018-08-06 16:03:18', 1),
(117, 1, 99, 1, '2018-07-25 13:17:34', 1),
(116, 1, 98, 1, '2018-07-13 18:41:03', 1),
(120, 1, 103, 1, '2018-08-18 01:14:31', 1),
(121, 3, 99, 1, '2018-08-19 23:51:40', 1),
(122, 3, 100, 1, '2018-08-19 23:51:44', 1),
(123, 3, 102, 1, '2018-08-19 23:51:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_access_privilege`
--

CREATE TABLE `tbl_access_privilege` (
  `access_privilege_id` int(11) NOT NULL,
  `access_id` int(11) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  `access_privilege_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_access_privilege`
--

INSERT INTO `tbl_access_privilege` (`access_privilege_id`, `access_id`, `privilege_id`, `access_privilege_status`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 0),
(3, 1, 3, 0),
(4, 1, 4, 1),
(5, 1, 5, 0),
(6, 1, 6, 0),
(7, 1, 7, 0),
(8, 1, 8, 0),
(9, 2, 1, 1),
(10, 2, 2, 0),
(11, 2, 3, 0),
(12, 2, 4, 0),
(13, 2, 5, 0),
(14, 2, 6, 0),
(15, 2, 7, 0),
(16, 2, 8, 0),
(17, 3, 1, 1),
(18, 3, 2, 1),
(19, 3, 3, 1),
(20, 3, 4, 1),
(21, 3, 5, 1),
(22, 3, 6, 1),
(23, 3, 7, 1),
(24, 3, 8, 1),
(25, 4, 1, 1),
(26, 4, 2, 1),
(27, 4, 3, 1),
(28, 4, 4, 1),
(29, 4, 5, 1),
(30, 4, 6, 1),
(31, 4, 7, 1),
(32, 4, 8, 1),
(33, 5, 1, 1),
(34, 5, 2, 0),
(35, 5, 3, 1),
(36, 5, 4, 1),
(37, 5, 5, 0),
(38, 5, 6, 1),
(39, 5, 7, 1),
(40, 5, 8, 0),
(41, 6, 1, 1),
(42, 6, 2, 0),
(43, 6, 3, 1),
(44, 6, 4, 1),
(45, 6, 5, 0),
(46, 6, 6, 1),
(47, 6, 7, 1),
(48, 6, 8, 1),
(49, 7, 1, 1),
(50, 7, 2, 1),
(51, 7, 3, 1),
(52, 7, 4, 1),
(53, 7, 5, 1),
(54, 7, 6, 1),
(55, 7, 7, 1),
(56, 7, 8, 1),
(57, 8, 1, 0),
(58, 8, 2, 0),
(59, 8, 3, 0),
(60, 8, 4, 0),
(61, 8, 5, 0),
(62, 8, 6, 0),
(63, 8, 7, 0),
(64, 8, 8, 0),
(65, 9, 1, 1),
(66, 9, 2, 1),
(67, 9, 3, 1),
(68, 9, 4, 1),
(69, 9, 5, 1),
(70, 9, 6, 1),
(71, 9, 7, 1),
(72, 9, 8, 1),
(73, 10, 1, 1),
(74, 10, 2, 1),
(75, 10, 3, 1),
(76, 10, 4, 1),
(77, 10, 5, 1),
(78, 10, 6, 1),
(79, 10, 7, 1),
(80, 10, 8, 1),
(81, 11, 1, 1),
(82, 11, 2, 1),
(83, 11, 3, 1),
(84, 11, 4, 1),
(85, 11, 5, 1),
(86, 11, 6, 1),
(87, 11, 7, 1),
(88, 11, 8, 1),
(89, 12, 1, 1),
(90, 12, 2, 1),
(91, 12, 3, 1),
(92, 12, 4, 1),
(93, 12, 5, 1),
(94, 12, 6, 1),
(95, 12, 7, 1),
(96, 12, 8, 1),
(97, 13, 1, 1),
(98, 13, 2, 1),
(99, 13, 3, 1),
(100, 13, 4, 1),
(101, 13, 5, 1),
(102, 13, 6, 1),
(103, 13, 7, 1),
(104, 13, 8, 1),
(105, 14, 1, 1),
(106, 14, 2, 1),
(107, 14, 3, 1),
(108, 14, 4, 1),
(109, 14, 5, 1),
(110, 14, 6, 1),
(111, 14, 7, 1),
(112, 14, 8, 1),
(113, 15, 1, 1),
(114, 15, 2, 1),
(115, 15, 3, 1),
(116, 15, 4, 1),
(117, 15, 5, 1),
(118, 15, 6, 1),
(119, 15, 7, 1),
(120, 15, 8, 1),
(121, 16, 1, 1),
(122, 16, 2, 1),
(123, 16, 3, 1),
(124, 16, 4, 1),
(125, 16, 5, 1),
(126, 16, 6, 1),
(127, 16, 7, 1),
(128, 16, 8, 1),
(129, 17, 1, 1),
(130, 17, 2, 1),
(131, 17, 3, 1),
(132, 17, 4, 1),
(133, 17, 5, 1),
(134, 17, 6, 1),
(135, 17, 7, 1),
(136, 17, 8, 1),
(137, 18, 1, 1),
(138, 18, 2, 1),
(139, 18, 3, 1),
(140, 18, 4, 1),
(141, 18, 5, 1),
(142, 18, 6, 1),
(143, 18, 7, 1),
(144, 18, 8, 1),
(145, 19, 1, 1),
(146, 19, 2, 1),
(147, 19, 3, 1),
(148, 19, 4, 1),
(149, 19, 5, 1),
(150, 19, 6, 1),
(151, 19, 7, 1),
(152, 19, 8, 1),
(153, 20, 1, 1),
(154, 20, 2, 1),
(155, 20, 3, 1),
(156, 20, 4, 1),
(157, 20, 5, 1),
(158, 20, 6, 1),
(159, 20, 7, 1),
(160, 20, 8, 1),
(161, 21, 1, 1),
(162, 21, 2, 1),
(163, 21, 3, 1),
(164, 21, 4, 1),
(165, 21, 5, 1),
(166, 21, 6, 1),
(167, 21, 7, 1),
(168, 21, 8, 1),
(169, 22, 1, 1),
(170, 22, 2, 1),
(171, 22, 3, 1),
(172, 22, 4, 1),
(173, 22, 5, 1),
(174, 22, 6, 1),
(175, 22, 7, 1),
(176, 22, 8, 1),
(177, 23, 1, 1),
(178, 23, 2, 1),
(179, 23, 3, 1),
(180, 23, 4, 1),
(181, 23, 5, 1),
(182, 23, 6, 1),
(183, 23, 7, 1),
(184, 23, 8, 1),
(185, 24, 1, 1),
(186, 24, 2, 1),
(187, 24, 3, 1),
(188, 24, 4, 1),
(189, 24, 5, 1),
(190, 24, 6, 1),
(191, 24, 7, 1),
(192, 24, 8, 1),
(193, 25, 1, 1),
(194, 25, 2, 1),
(195, 25, 3, 1),
(196, 25, 4, 1),
(197, 25, 5, 1),
(198, 25, 6, 1),
(199, 25, 7, 1),
(200, 25, 8, 1),
(201, 26, 1, 1),
(202, 26, 2, 1),
(203, 26, 3, 1),
(204, 26, 4, 1),
(205, 26, 5, 1),
(206, 26, 6, 1),
(207, 26, 7, 1),
(208, 26, 8, 1),
(209, 27, 1, 1),
(210, 27, 2, 1),
(211, 27, 3, 1),
(212, 27, 4, 1),
(213, 27, 5, 1),
(214, 27, 6, 1),
(215, 27, 7, 1),
(216, 27, 8, 1),
(217, 28, 1, 1),
(218, 28, 2, 1),
(219, 28, 3, 1),
(220, 28, 4, 1),
(221, 28, 5, 1),
(222, 28, 6, 1),
(223, 28, 7, 1),
(224, 28, 8, 1),
(225, 29, 1, 1),
(226, 29, 2, 1),
(227, 29, 3, 1),
(228, 29, 4, 1),
(229, 29, 5, 1),
(230, 29, 6, 1),
(231, 29, 7, 1),
(232, 29, 8, 1),
(233, 30, 1, 1),
(234, 30, 2, 1),
(235, 30, 3, 1),
(236, 30, 4, 1),
(237, 30, 5, 1),
(238, 30, 6, 1),
(239, 30, 7, 1),
(240, 30, 8, 1),
(241, 31, 1, 1),
(242, 31, 2, 1),
(243, 31, 3, 1),
(244, 31, 4, 1),
(245, 31, 5, 1),
(246, 31, 6, 1),
(247, 31, 7, 1),
(248, 31, 8, 1),
(249, 32, 1, 1),
(250, 32, 2, 1),
(251, 32, 3, 1),
(252, 32, 4, 1),
(253, 32, 5, 1),
(254, 32, 6, 1),
(255, 32, 7, 1),
(256, 32, 8, 1),
(257, 33, 1, 1),
(258, 33, 2, 1),
(259, 33, 3, 1),
(260, 33, 4, 1),
(261, 33, 5, 0),
(262, 33, 6, 0),
(263, 33, 7, 0),
(264, 33, 8, 0),
(265, 34, 1, 1),
(266, 34, 2, 1),
(267, 34, 3, 1),
(268, 34, 4, 0),
(269, 34, 5, 0),
(270, 34, 6, 0),
(271, 34, 7, 0),
(272, 34, 8, 0),
(273, 35, 1, 1),
(274, 35, 2, 1),
(275, 35, 3, 1),
(276, 35, 4, 1),
(277, 35, 5, 1),
(278, 35, 6, 1),
(279, 35, 7, 1),
(280, 35, 8, 1),
(281, 36, 1, 1),
(282, 36, 2, 1),
(283, 36, 3, 1),
(284, 36, 4, 1),
(285, 36, 5, 1),
(286, 36, 6, 1),
(287, 36, 7, 1),
(288, 36, 8, 1),
(289, 37, 1, 1),
(290, 37, 2, 1),
(291, 37, 3, 1),
(292, 37, 4, 1),
(293, 37, 5, 1),
(294, 37, 6, 1),
(295, 37, 7, 1),
(296, 37, 8, 1),
(297, 38, 1, 1),
(298, 38, 2, 1),
(299, 38, 3, 1),
(300, 38, 4, 1),
(301, 38, 5, 1),
(302, 38, 6, 1),
(303, 38, 7, 1),
(304, 38, 8, 1),
(305, 39, 1, 1),
(306, 39, 2, 1),
(307, 39, 3, 1),
(308, 39, 4, 1),
(309, 39, 5, 1),
(310, 39, 6, 1),
(311, 39, 7, 1),
(312, 39, 8, 1),
(313, 40, 1, 1),
(314, 40, 2, 1),
(315, 40, 3, 1),
(316, 40, 4, 1),
(317, 40, 5, 1),
(318, 40, 6, 1),
(319, 40, 7, 1),
(320, 40, 8, 1),
(321, 56, 1, 1),
(322, 56, 2, 1),
(323, 56, 3, 1),
(324, 56, 4, 1),
(325, 56, 5, 1),
(326, 56, 6, 1),
(327, 56, 7, 1),
(328, 56, 8, 1),
(329, 57, 1, 1),
(330, 57, 2, 1),
(331, 57, 3, 1),
(332, 57, 4, 1),
(333, 57, 5, 1),
(334, 57, 6, 1),
(335, 57, 7, 1),
(336, 57, 8, 1),
(337, 58, 1, 1),
(338, 58, 2, 1),
(339, 58, 3, 1),
(340, 58, 4, 1),
(341, 58, 5, 1),
(342, 58, 6, 1),
(343, 58, 7, 1),
(344, 58, 8, 1),
(345, 59, 1, 1),
(346, 59, 2, 1),
(347, 59, 3, 1),
(348, 59, 4, 1),
(349, 59, 5, 1),
(350, 59, 6, 1),
(351, 59, 7, 1),
(352, 59, 8, 1),
(353, 60, 1, 1),
(354, 60, 2, 1),
(355, 60, 3, 1),
(356, 60, 4, 1),
(357, 60, 5, 1),
(358, 60, 6, 1),
(359, 60, 7, 1),
(360, 60, 8, 1),
(361, 61, 1, 1),
(362, 61, 2, 1),
(363, 61, 3, 1),
(364, 61, 4, 1),
(365, 61, 5, 1),
(366, 61, 6, 1),
(367, 61, 7, 1),
(368, 61, 8, 1),
(369, 62, 1, 1),
(370, 62, 2, 1),
(371, 62, 3, 1),
(372, 62, 4, 1),
(373, 62, 5, 1),
(374, 62, 6, 1),
(375, 62, 7, 1),
(376, 62, 8, 1),
(377, 63, 1, 1),
(378, 63, 2, 1),
(379, 63, 3, 1),
(380, 63, 4, 1),
(381, 63, 5, 1),
(382, 63, 6, 1),
(383, 63, 7, 1),
(384, 63, 8, 1),
(385, 64, 1, 1),
(386, 64, 2, 1),
(387, 64, 3, 1),
(388, 64, 4, 1),
(389, 64, 5, 1),
(390, 64, 6, 1),
(391, 64, 7, 1),
(392, 64, 8, 1),
(393, 65, 1, 1),
(394, 65, 2, 1),
(395, 65, 3, 1),
(396, 65, 4, 1),
(397, 65, 5, 1),
(398, 65, 6, 1),
(399, 65, 7, 1),
(400, 65, 8, 1),
(401, 66, 1, 1),
(402, 66, 2, 1),
(403, 66, 3, 1),
(404, 66, 4, 1),
(405, 66, 5, 1),
(406, 66, 6, 1),
(407, 66, 7, 1),
(408, 66, 8, 1),
(409, 67, 1, 0),
(410, 67, 2, 0),
(411, 67, 3, 0),
(412, 67, 4, 0),
(413, 67, 5, 0),
(414, 67, 6, 0),
(415, 67, 7, 0),
(416, 67, 8, 0),
(417, 68, 1, 1),
(418, 68, 2, 1),
(419, 68, 3, 1),
(420, 68, 4, 1),
(421, 68, 5, 1),
(422, 68, 6, 1),
(423, 68, 7, 1),
(424, 68, 8, 1),
(425, 69, 1, 1),
(426, 69, 2, 1),
(427, 69, 3, 1),
(428, 69, 4, 1),
(429, 69, 5, 1),
(430, 69, 6, 1),
(431, 69, 7, 1),
(432, 69, 8, 1),
(433, 70, 1, 1),
(434, 70, 2, 1),
(435, 70, 3, 1),
(436, 70, 4, 1),
(437, 70, 5, 1),
(438, 70, 6, 1),
(439, 70, 7, 1),
(440, 70, 8, 1),
(441, 71, 1, 1),
(442, 71, 2, 1),
(443, 71, 3, 1),
(444, 71, 4, 1),
(445, 71, 5, 1),
(446, 71, 6, 1),
(447, 71, 7, 1),
(448, 71, 8, 1),
(449, 72, 1, 1),
(450, 72, 2, 1),
(451, 72, 3, 1),
(452, 72, 4, 1),
(453, 72, 5, 1),
(454, 72, 6, 1),
(455, 72, 7, 1),
(456, 72, 8, 1),
(457, 73, 1, 1),
(458, 73, 2, 1),
(459, 73, 3, 1),
(460, 73, 4, 1),
(461, 73, 5, 1),
(462, 73, 6, 1),
(463, 73, 7, 1),
(464, 73, 8, 1),
(465, 74, 1, 1),
(466, 74, 2, 1),
(467, 74, 3, 1),
(468, 74, 4, 1),
(469, 74, 5, 1),
(470, 74, 6, 1),
(471, 74, 7, 1),
(472, 74, 8, 1),
(473, 75, 1, 1),
(474, 75, 2, 1),
(475, 75, 3, 1),
(476, 75, 4, 1),
(477, 75, 5, 1),
(478, 75, 6, 1),
(479, 75, 7, 1),
(480, 75, 8, 1),
(481, 76, 1, 1),
(482, 76, 2, 1),
(483, 76, 3, 1),
(484, 76, 4, 1),
(485, 76, 5, 1),
(486, 76, 6, 1),
(487, 76, 7, 1),
(488, 76, 8, 1),
(489, 77, 1, 1),
(490, 77, 2, 1),
(491, 77, 3, 1),
(492, 77, 4, 1),
(493, 77, 5, 1),
(494, 77, 6, 1),
(495, 77, 7, 1),
(496, 77, 8, 1),
(497, 78, 1, 1),
(498, 78, 2, 1),
(499, 78, 3, 1),
(500, 78, 4, 1),
(501, 78, 5, 1),
(502, 78, 6, 1),
(503, 78, 7, 1),
(504, 78, 8, 1),
(505, 79, 1, 1),
(506, 79, 2, 1),
(507, 79, 3, 1),
(508, 79, 4, 1),
(509, 79, 5, 1),
(510, 79, 6, 1),
(511, 79, 7, 1),
(512, 79, 8, 1),
(513, 80, 1, 1),
(514, 80, 2, 1),
(515, 80, 3, 1),
(516, 80, 4, 1),
(517, 80, 5, 1),
(518, 80, 6, 1),
(519, 80, 7, 1),
(520, 80, 8, 1),
(521, 81, 1, 1),
(522, 81, 2, 1),
(523, 81, 3, 1),
(524, 81, 4, 1),
(525, 81, 5, 1),
(526, 81, 6, 1),
(527, 81, 7, 1),
(528, 81, 8, 1),
(529, 82, 1, 1),
(530, 82, 2, 1),
(531, 82, 3, 1),
(532, 82, 4, 1),
(533, 82, 5, 1),
(534, 82, 6, 1),
(535, 82, 7, 1),
(536, 82, 8, 1),
(537, 83, 1, 1),
(538, 83, 2, 1),
(539, 83, 3, 1),
(540, 83, 4, 1),
(541, 83, 5, 1),
(542, 83, 6, 1),
(543, 83, 7, 1),
(544, 83, 8, 1),
(545, 84, 1, 1),
(546, 84, 2, 1),
(547, 84, 3, 1),
(548, 84, 4, 1),
(549, 84, 5, 1),
(550, 84, 6, 1),
(551, 84, 7, 1),
(552, 84, 8, 1),
(553, 85, 1, 1),
(554, 85, 2, 1),
(555, 85, 3, 1),
(556, 85, 4, 1),
(557, 85, 5, 1),
(558, 85, 6, 1),
(559, 85, 7, 1),
(560, 85, 8, 1),
(561, 86, 1, 1),
(562, 86, 2, 1),
(563, 86, 3, 1),
(564, 86, 4, 1),
(565, 86, 5, 1),
(566, 86, 6, 1),
(567, 86, 7, 1),
(568, 86, 8, 1),
(569, 87, 1, 1),
(570, 87, 2, 1),
(571, 87, 3, 1),
(572, 87, 4, 1),
(573, 87, 5, 1),
(574, 87, 6, 1),
(575, 87, 7, 1),
(576, 87, 8, 1),
(577, 88, 1, 1),
(578, 88, 2, 1),
(579, 88, 3, 1),
(580, 88, 4, 1),
(581, 88, 5, 1),
(582, 88, 6, 1),
(583, 88, 7, 1),
(584, 88, 8, 1),
(585, 89, 1, 1),
(586, 89, 2, 1),
(587, 89, 3, 1),
(588, 89, 4, 1),
(589, 89, 5, 1),
(590, 89, 6, 1),
(591, 89, 7, 1),
(592, 89, 8, 1),
(593, 90, 1, 1),
(594, 90, 2, 1),
(595, 90, 3, 1),
(596, 90, 4, 1),
(597, 90, 5, 1),
(598, 90, 6, 1),
(599, 90, 7, 1),
(600, 90, 8, 1),
(601, 91, 1, 1),
(602, 91, 2, 1),
(603, 91, 3, 1),
(604, 91, 4, 1),
(605, 91, 5, 1),
(606, 91, 6, 1),
(607, 91, 7, 1),
(608, 91, 8, 1),
(609, 92, 1, 1),
(610, 92, 2, 1),
(611, 92, 3, 1),
(612, 92, 4, 1),
(613, 92, 5, 1),
(614, 92, 6, 1),
(615, 92, 7, 1),
(616, 92, 8, 1),
(617, 93, 1, 1),
(618, 93, 2, 1),
(619, 93, 3, 1),
(620, 93, 4, 1),
(621, 93, 5, 1),
(622, 93, 6, 1),
(623, 93, 7, 1),
(624, 93, 8, 1),
(625, 94, 1, 1),
(626, 94, 2, 1),
(627, 94, 3, 1),
(628, 94, 4, 1),
(629, 94, 5, 1),
(630, 94, 6, 1),
(631, 94, 7, 1),
(632, 94, 8, 1),
(633, 95, 1, 1),
(634, 95, 2, 1),
(635, 95, 3, 1),
(636, 95, 4, 1),
(637, 95, 5, 1),
(638, 95, 6, 1),
(639, 95, 7, 1),
(640, 95, 8, 1),
(641, 96, 1, 1),
(642, 96, 2, 1),
(643, 96, 3, 1),
(644, 96, 4, 1),
(645, 96, 5, 1),
(646, 96, 6, 1),
(647, 96, 7, 1),
(648, 96, 8, 1),
(649, 97, 1, 1),
(650, 97, 2, 1),
(651, 97, 3, 1),
(652, 97, 4, 1),
(653, 97, 5, 1),
(654, 97, 6, 1),
(655, 97, 7, 1),
(656, 97, 8, 1),
(657, 98, 1, 1),
(658, 98, 2, 1),
(659, 98, 3, 1),
(660, 98, 4, 1),
(661, 98, 5, 1),
(662, 98, 6, 1),
(663, 98, 7, 1),
(664, 98, 8, 1),
(665, 99, 1, 1),
(666, 99, 2, 1),
(667, 99, 3, 1),
(668, 99, 4, 1),
(669, 99, 5, 1),
(670, 99, 6, 1),
(671, 99, 7, 1),
(672, 99, 8, 1),
(673, 100, 1, 1),
(674, 100, 2, 1),
(675, 100, 3, 1),
(676, 100, 4, 1),
(677, 100, 5, 1),
(678, 100, 6, 1),
(679, 100, 7, 1),
(680, 100, 8, 1),
(681, 101, 1, 1),
(682, 101, 2, 1),
(683, 101, 3, 1),
(684, 101, 4, 1),
(685, 101, 5, 1),
(686, 101, 6, 1),
(687, 101, 7, 1),
(688, 101, 8, 1),
(689, 102, 1, 0),
(690, 102, 2, 0),
(691, 102, 3, 0),
(692, 102, 4, 0),
(693, 102, 5, 0),
(694, 102, 6, 0),
(695, 102, 7, 0),
(696, 102, 8, 0),
(697, 103, 1, 1),
(698, 103, 2, 1),
(699, 103, 3, 1),
(700, 103, 4, 1),
(701, 103, 5, 1),
(702, 103, 6, 1),
(703, 103, 7, 1),
(704, 103, 8, 1),
(705, 104, 1, 1),
(706, 104, 2, 1),
(707, 104, 3, 1),
(708, 104, 4, 1),
(709, 104, 5, 1),
(710, 104, 6, 1),
(711, 104, 7, 1),
(712, 104, 8, 1),
(713, 105, 1, 1),
(714, 105, 2, 1),
(715, 105, 3, 1),
(716, 105, 4, 1),
(717, 105, 5, 1),
(718, 105, 6, 1),
(719, 105, 7, 1),
(720, 105, 8, 1),
(721, 106, 1, 1),
(722, 106, 2, 1),
(723, 106, 3, 1),
(724, 106, 4, 1),
(725, 106, 5, 1),
(726, 106, 6, 1),
(727, 106, 7, 1),
(728, 106, 8, 1),
(729, 107, 1, 1),
(730, 107, 2, 1),
(731, 107, 3, 1),
(732, 107, 4, 1),
(733, 107, 5, 1),
(734, 107, 6, 1),
(735, 107, 7, 1),
(736, 107, 8, 1),
(737, 108, 1, 1),
(738, 108, 2, 1),
(739, 108, 3, 1),
(740, 108, 4, 1),
(741, 108, 5, 1),
(742, 108, 6, 1),
(743, 108, 7, 1),
(744, 108, 8, 1),
(745, 109, 1, 1),
(746, 109, 2, 1),
(747, 109, 3, 1),
(748, 109, 4, 1),
(749, 109, 5, 1),
(750, 109, 6, 1),
(751, 109, 7, 1),
(752, 109, 8, 1),
(753, 110, 1, 1),
(754, 110, 2, 1),
(755, 110, 3, 1),
(756, 110, 4, 1),
(757, 110, 5, 1),
(758, 110, 6, 1),
(759, 110, 7, 1),
(760, 110, 8, 1),
(761, 111, 1, 1),
(762, 111, 2, 1),
(763, 111, 3, 1),
(764, 111, 4, 1),
(765, 111, 5, 1),
(766, 111, 6, 1),
(767, 111, 7, 1),
(768, 111, 8, 1),
(769, 112, 1, 1),
(770, 112, 2, 1),
(771, 112, 3, 1),
(772, 112, 4, 1),
(773, 112, 5, 1),
(774, 112, 6, 1),
(775, 112, 7, 1),
(776, 112, 8, 1),
(777, 113, 1, 1),
(778, 113, 2, 1),
(779, 113, 3, 1),
(780, 113, 4, 1),
(781, 113, 5, 1),
(782, 113, 6, 1),
(783, 113, 7, 1),
(784, 113, 8, 1),
(785, 114, 1, 1),
(786, 114, 2, 1),
(787, 114, 3, 1),
(788, 114, 4, 1),
(789, 114, 5, 1),
(790, 114, 6, 1),
(791, 114, 7, 1),
(792, 114, 8, 1),
(793, 115, 1, 1),
(794, 115, 2, 1),
(795, 115, 3, 1),
(796, 115, 4, 1),
(797, 115, 5, 1),
(798, 115, 6, 1),
(799, 115, 7, 1),
(800, 115, 8, 1),
(801, 116, 1, 0),
(802, 116, 2, 0),
(803, 116, 3, 0),
(804, 116, 4, 0),
(805, 116, 5, 0),
(806, 116, 6, 0),
(807, 116, 7, 0),
(808, 116, 8, 0),
(809, 117, 1, 1),
(810, 117, 2, 1),
(811, 117, 3, 1),
(812, 117, 4, 1),
(813, 117, 5, 1),
(814, 117, 6, 1),
(815, 117, 7, 1),
(816, 117, 8, 1),
(817, 118, 1, 1),
(818, 118, 2, 1),
(819, 118, 3, 1),
(820, 118, 4, 1),
(821, 118, 5, 1),
(822, 118, 6, 1),
(823, 118, 7, 1),
(824, 118, 8, 1),
(825, 119, 1, 1),
(826, 119, 2, 1),
(827, 119, 3, 1),
(828, 119, 4, 1),
(829, 119, 5, 1),
(830, 119, 6, 1),
(831, 119, 7, 1),
(832, 119, 8, 1),
(833, 120, 1, 1),
(834, 120, 2, 1),
(835, 120, 3, 1),
(836, 120, 4, 1),
(837, 120, 5, 1),
(838, 120, 6, 1),
(839, 120, 7, 1),
(840, 120, 8, 1),
(841, 121, 1, 1),
(842, 121, 2, 1),
(843, 121, 3, 1),
(844, 121, 4, 1),
(845, 121, 5, 1),
(846, 121, 6, 1),
(847, 121, 7, 1),
(848, 121, 8, 1),
(849, 122, 1, 1),
(850, 122, 2, 1),
(851, 122, 3, 1),
(852, 122, 4, 1),
(853, 122, 5, 1),
(854, 122, 6, 1),
(855, 122, 7, 1),
(856, 122, 8, 1),
(857, 123, 1, 1),
(858, 123, 2, 1),
(859, 123, 3, 1),
(860, 123, 4, 1),
(861, 123, 5, 1),
(862, 123, 6, 1),
(863, 123, 7, 1),
(864, 123, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alias`
--

CREATE TABLE `tbl_alias` (
  `alias_id` int(11) NOT NULL,
  `alias_category` varchar(25) NOT NULL,
  `key_id` int(11) NOT NULL,
  `web_alias` varchar(255) NOT NULL,
  `web_ori` varchar(255) NOT NULL,
  `alias_active_status` tinyint(1) NOT NULL,
  `alias_create_date` datetime NOT NULL,
  `alias_update_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_alias`
--

INSERT INTO `tbl_alias` (`alias_id`, `alias_category`, `key_id`, `web_alias`, `web_ori`, `alias_active_status`, `alias_create_date`, `alias_update_date`) VALUES
(79, 'Blog', 2, 'dadada', 'Blog/detail/2', 1, '2018-06-03 23:32:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_name` text,
  `banner_images` varchar(100) NOT NULL,
  `banner_type` tinyint(2) NOT NULL,
  `banner_url` varchar(255) DEFAULT NULL,
  `banner_order` int(10) DEFAULT '1',
  `banner_desc` text NOT NULL,
  `banner_active_status` tinyint(1) NOT NULL DEFAULT '0',
  `banner_create_date` datetime NOT NULL,
  `banner_create_by` int(11) NOT NULL,
  `banner_update_date` datetime DEFAULT NULL,
  `banner_update_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `content_id` int(11) NOT NULL,
  `content_parent` int(11) NOT NULL,
  `row_id` int(11) NOT NULL,
  `label_id` int(11) NOT NULL,
  `content_text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`content_id`, `content_parent`, `row_id`, `label_id`, `content_text`) VALUES
(200, 0, 46, 19, '/assets/file_upload/admin/images/logo-1.jpg'),
(225, 0, 50, 40, 'dasd dasdas das&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;img alt=&quot;&quot; src=&quot;https://localhost/panom/assets/file_upload/admin/images/img-thumb-travel.jpg&quot; style=&quot;width: 230px; height: 205px;&quot; /&gt;'),
(210, 0, 48, 11, 'dasdasdas'),
(211, 0, 48, 19, '/assets/file_upload/admin/images/logo-10.jpg'),
(223, 0, 50, 38, 'dasdasdasdas'),
(224, 0, 50, 39, '08/13/2018'),
(268, 0, 56, 48, 'https://www.youtube.com/embed/2RB2lfxTeNg'),
(267, 0, 56, 35, '41'),
(265, 0, 56, 33, 'Panomatics high end video production does let the viewer escape to somewhere secluded, where a canvas of blue skies and turquoise sea meet, where island paradise is exactly how it always has been imagined. Stunning aerial drone footage does entice the viewer and emphasis the resorts beauty and stunning location. A world of new experiences is laid out to the viewer`s feet. Breathtaking nature meets with&amp;nbsp;high end luxury.&amp;nbsp;Each of Shangri-La&amp;#39;s restaurants is thoughtfully placed to emphasize the hotel&amp;#39;s best views. Eat amid the treetops at Rima, or dive into fresh seafood while watching the waves crash into the cliffs below at Sirena.&amp;nbsp;Shangri-La provides everything required to pamper their guests after spending the day exploring the island and ocean. CHI-The Spa features a wide array of slow, careful treatments based on Chinese and native Philippines healing concepts. Let our stunning video tell the story and immerse into this spectacular experience.&lt;br /&gt;\r\n&amp;nbsp;'),
(264, 0, 56, 32, '/assets/file_upload/admin/images/img-latest-4.jpg'),
(198, 0, 46, 11, 'Haris Hotel'),
(197, 148, 45, 24, 'adasdsasdasdsadsa'),
(196, 148, 45, 22, 'dasdasdasdasssssssssss'),
(263, 0, 56, 31, '/assets/file_upload/admin/images/img-logo-shangrila.jpg'),
(261, 0, 56, 30, '35'),
(260, 0, 56, 49, '360 Videos&lt;br /&gt;\r\nCorporate Videos&lt;br /&gt;\r\nHD Videos'),
(258, 0, 56, 28, '14'),
(257, 0, 56, 27, 'Shangri La Boracay Resort'),
(259, 0, 56, 29, '24'),
(250, 234, 53, 46, 'fadas sd a'),
(251, 234, 53, 47, '/assets/file_upload/admin/images/img-thumb-trump.jpg'),
(252, 234, 54, 46, 'dasdsadsa'),
(253, 234, 54, 47, '/assets/file_upload/admin/images/img-thumb-travel.jpg'),
(254, 0, 55, 38, 'lorem psum'),
(255, 0, 55, 39, '08/31/2018'),
(256, 0, 55, 40, 'lorem psum'),
(266, 0, 56, 34, 'Panomatic.com'),
(269, 0, 56, 50, 'shangri la'),
(270, 0, 57, 27, 'Niyama Private Islands Maldives'),
(271, 0, 57, 28, '12'),
(272, 0, 57, 29, '21'),
(273, 0, 57, 49, '&lt;p&gt;Hotspots&lt;br /&gt;\r\nInteractive Stylesheet&lt;br /&gt;\r\nAerial&lt;br /&gt;\r\nMusic&lt;/p&gt;'),
(274, 0, 57, 30, '35'),
(276, 0, 57, 31, '/assets/file_upload/admin/images/LOGO/logo-niyama.jpg'),
(277, 0, 57, 32, '/assets/file_upload/admin/images/IMAGE WEBSITE/niyama-tumbnail.jpg'),
(278, 0, 57, 33, 'An island for a very private and personal one-of-a-kind experience!&amp;nbsp;Niyama Private Islands Maldives does impress by the luxury of choice.&amp;nbsp;Panomatics stunning aerial footage shows the amazing twin islands Play and Chill nestled beautiful within the turquoise Maldivian ocean.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe high end 360 virtual tour shows brilliantly all fantastic facilities and luxurious accommodations this resort has to offer.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe explorer finds himself amongst lush treetops, enjoying&amp;nbsp;Asian avant-garde cuisines, Teppanyaki, Thai, Chinese and Indonesian cuisine. At TRIBAL fine dining&amp;nbsp;a&amp;nbsp;Maasai warrior welcomes the guest with a Dawa, East Africa&amp;rsquo;s to-lust-for cocktail, drenching taste buds with honey and lime.&amp;nbsp; Panomatics 360 photography showcases the Splendid villas which are set on white sands. Modern studios are placed over the ocean with direct lagoon access.&lt;br /&gt;\r\n&lt;br /&gt;\r\nHere&amp;nbsp;the adventurous honeymooners, active couples and style-savvy families&amp;nbsp;can discover an island niche and settle in, or jump back and forth between high-energy indulgences and cool serenity. This&amp;nbsp;virtual tour is unique and distinguished by incorporating additional informative content and layers through the use of 360 VR videos, multi-lingual text banners, menus, music, links to reservation systems and much more.'),
(279, 0, 57, 34, 'panomatic.com'),
(280, 0, 57, 35, '42'),
(281, 0, 57, 48, 'www.panomatics.com/nextgen/maldives/niyama/index-web.html'),
(282, 0, 57, 50, 'Niyama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_general`
--

CREATE TABLE `tbl_general` (
  `general_id` int(11) NOT NULL,
  `general_title` varchar(100) NOT NULL,
  `general_description` varchar(255) NOT NULL,
  `general_keyword` varchar(255) NOT NULL,
  `general_facebook` varchar(50) DEFAULT NULL,
  `general_twitter` varchar(50) DEFAULT NULL,
  `general_cs_phonenumber` varchar(50) DEFAULT NULL,
  `general_cs_email` varchar(150) DEFAULT NULL,
  `general_update_date` datetime DEFAULT NULL,
  `general_update_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_general`
--

INSERT INTO `tbl_general` (`general_id`, `general_title`, `general_description`, `general_keyword`, `general_facebook`, `general_twitter`, `general_cs_phonenumber`, `general_cs_email`, `general_update_date`, `general_update_by`) VALUES
(1, 'Title', 'Desciption', 'keyword1, keyword2', 'tukarpoin', 'tukarpoin', '021-5888888', 'cs[@]tukarpoin.com', '2015-09-10 10:13:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_label`
--

CREATE TABLE `tbl_label` (
  `label_id` int(11) NOT NULL,
  `label_parent` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `label_title` varchar(100) NOT NULL,
  `label_name` varchar(100) NOT NULL,
  `type_id` tinyint(4) NOT NULL,
  `label_view` tinyint(4) NOT NULL,
  `label_order` int(11) DEFAULT '1',
  `label_active_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_label`
--

INSERT INTO `tbl_label` (`label_id`, `label_parent`, `module_id`, `label_title`, `label_name`, `type_id`, `label_view`, `label_order`, `label_active_status`) VALUES
(5, 0, 5, 'Title', 'title', 1, 1, 1, 1),
(49, 0, 100, 'technical specs', 'technical_specs', 2, 1, 5, 1),
(35, 0, 100, 'visibility', 'visibility', 6, 1, 10, 1),
(28, 0, 100, 'Project Type', 'project_type', 6, 1, 2, 1),
(11, 0, 99, 'title', 'title', 1, 1, 1, 1),
(40, 0, 102, 'description', 'blog_description', 2, 1, 3, 1),
(39, 0, 102, 'date', 'blog_date', 4, 1, 2, 1),
(19, 0, 99, 'Images', 'images', 3, 1, 2, 1),
(38, 0, 102, 'Title', 'blog_title', 1, 1, 1, 1),
(27, 0, 100, 'Title', 'project_title', 1, 1, 1, 1),
(29, 0, 100, 'Location', 'project_location', 6, 1, 3, 1),
(30, 0, 100, 'Business type', 'business_type', 6, 1, 4, 1),
(31, 0, 100, 'Client Logo', 'client_icon', 3, 1, 6, 1),
(32, 0, 100, 'Image', 'product_image', 3, 1, 7, 1),
(33, 0, 100, 'Desc', 'desc', 2, 1, 8, 1),
(34, 0, 100, 'Url', 'url_link', 1, 1, 9, 1),
(42, 0, 103, 'title', 'banner_title', 1, 1, 1, 1),
(43, 0, 103, 'Images', 'images', 3, 1, 2, 1),
(44, 0, 103, 'Url', 'banner_url', 1, 1, 3, 1),
(45, 0, 103, 'Video', 'banner_video', 1, 1, 5, 1),
(46, 32, 100, 'gallery', 'title_gallery', 1, 1, 1, 1),
(47, 32, 100, 'gallery image', 'gallery_image', 3, 1, 2, 1),
(48, 0, 100, 'Iframe', 'iframe', 2, 1, 11, 1),
(50, 0, 100, 'client', 'client', 1, 1, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_label_type`
--

CREATE TABLE `tbl_label_type` (
  `type_id` int(11) NOT NULL,
  `type_title` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_label_type`
--

INSERT INTO `tbl_label_type` (`type_id`, `type_title`) VALUES
(1, 'Textinput'),
(2, 'Textarea'),
(3, 'Images'),
(4, 'Datepicker'),
(5, 'Timepicker'),
(6, 'Options');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `language_id` int(11) NOT NULL,
  `language_title` varchar(50) NOT NULL,
  `language_image` varchar(255) NOT NULL,
  `language_default` tinyint(1) NOT NULL,
  `language_active_status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`language_id`, `language_title`, `language_image`, `language_default`, `language_active_status`) VALUES
(1, 'Indonesia', '/assets/file_upload/admin/images/language/lang-ind.jpg', 0, 1),
(2, 'English', '/assets/file_upload/admin/images/language/lang-eng.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_cms`
--

CREATE TABLE `tbl_log_cms` (
  `log_id_cms` int(11) NOT NULL,
  `log_module` varchar(50) NOT NULL,
  `log_value` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `log_create_date` datetime NOT NULL,
  `ip` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_log_cms`
--

INSERT INTO `tbl_log_cms` (`log_id_cms`, `log_module`, `log_value`, `user_id`, `log_create_date`, `ip`) VALUES
(1, 'Login', 'superadmin | 1', 1, '2018-07-12 14:28:03', '::1'),
(2, 'Delete User', '3 | admin', 1, '2018-07-12 14:28:42', '::1'),
(3, 'Login', 'superadmin | 1', 1, '2018-07-13 13:30:01', '::1'),
(4, 'Active Module Group', '4 | Content Management | 1', 1, '2018-07-13 14:05:01', '::1'),
(5, 'Active Module', '98 | Content | 1', 1, '2018-07-13 14:05:18', '::1'),
(6, 'Inactive Module', '0 | undifined | 0', 1, '2018-07-13 14:06:49', '::1'),
(7, 'Active Module', '0 | undifined | 1', 1, '2018-07-13 14:08:05', '::1'),
(8, 'Inactive Module', '0 | undifined | 0', 1, '2018-07-13 14:08:06', '::1'),
(9, 'Active Module', '0 | undifined | 1', 1, '2018-07-13 14:08:19', '::1'),
(10, 'Active Module', '2 | Log CMS | 1', 1, '2018-07-13 14:08:22', '::1'),
(11, 'Inactive Module', '0 | undifined | 0', 1, '2018-07-13 14:08:58', '::1'),
(12, 'Active Module', '0 | undifined | 1', 1, '2018-07-13 14:09:00', '::1'),
(13, 'Active 1', '1 | Title | 1', 1, '2018-07-13 17:47:48', '::1'),
(14, 'Active 2', '2 | Judul | 1', 1, '2018-07-13 17:47:49', '::1'),
(15, 'Active 3', '3 | Images | 1', 1, '2018-07-13 17:47:51', '::1'),
(16, 'Active 4', '4 | dadasdsa | 1', 1, '2018-07-13 17:47:52', '::1'),
(17, 'Delete Module', '4 | dadasdsa', 1, '2018-07-13 17:48:10', '::1'),
(18, 'Active 5', '5 | Title | 1', 1, '2018-07-13 17:54:30', '::1'),
(19, 'Login', 'superadmin | 1', 1, '2018-07-16 12:58:21', '::1'),
(20, 'Active 6', '6 | Date | 1', 1, '2018-07-16 15:11:37', '::1'),
(21, 'Active 7', '7 | Time | 1', 1, '2018-07-16 15:30:58', '::1'),
(22, 'Active 8', '8 | Meta Keyword | 1', 1, '2018-07-16 16:32:44', '::1'),
(23, 'Active 9', '9 | Meta Description | 1', 1, '2018-07-16 16:33:16', '::1'),
(24, 'Login', 'superadmin | 1', 1, '2018-07-18 13:25:08', '::1'),
(25, 'Active 10', '10 | Category | 1', 1, '2018-07-18 14:33:22', '::1'),
(26, 'Inactive 10', '10 | Category | 0', 1, '2018-07-18 14:38:55', '::1'),
(27, 'Active 10', '10 | Category | 1', 1, '2018-07-18 14:39:00', '::1'),
(28, 'Inactive 10', '10 | Category | 0', 1, '2018-07-18 14:39:02', '::1'),
(29, 'Active 10', '10 | Category | 1', 1, '2018-07-18 14:39:04', '::1'),
(30, 'Login', 'superadmin | 1', 1, '2018-07-19 14:15:32', '::1'),
(31, 'Delete Module', '4 | options deteted', 1, '2018-07-19 15:37:17', '::1'),
(32, 'Login', 'superadmin | 1', 1, '2018-07-23 12:52:19', '::1'),
(33, 'Delete Module', '6 | options deteted', 1, '2018-07-23 12:53:33', '::1'),
(34, 'Delete Module', '11 | options deteted', 1, '2018-07-23 14:57:02', '::1'),
(35, 'Delete Module', '10 | options deteted', 1, '2018-07-23 14:57:07', '::1'),
(36, 'Delete Module', '9 | options deteted', 1, '2018-07-23 14:57:11', '::1'),
(37, 'Delete Module', '8 | options deteted', 1, '2018-07-23 14:57:15', '::1'),
(38, 'Delete Module', '7 | options deteted', 1, '2018-07-23 14:57:21', '::1'),
(39, 'Add ', '1 | dasdsa', 1, '2018-07-23 16:01:10', '::1'),
(40, 'Add ', '2 | dasdsadasdsa', 1, '2018-07-23 16:01:10', '::1'),
(41, 'Add ', '3 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-23 16:01:10', '::1'),
(42, 'Add ', '4 | 05/20/2017', 1, '2018-07-23 16:01:10', '::1'),
(43, 'Add ', '5 | 1:00:00', 1, '2018-07-23 16:01:10', '::1'),
(44, 'Add ', '6 | dsadsa', 1, '2018-07-23 16:01:10', '::1'),
(45, 'Add ', '7 | dasdsadsa ads', 1, '2018-07-23 16:01:10', '::1'),
(46, 'Add ', '8 | 2', 1, '2018-07-23 16:01:10', '::1'),
(47, 'Add ', '1 | test', 1, '2018-07-23 16:03:10', '::1'),
(48, 'Add ', '2 | dasdsadasdsa s', 1, '2018-07-23 16:03:10', '::1'),
(49, 'Add ', '3 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-23 16:03:10', '::1'),
(50, 'Add ', '4 | 05/19/2017', 1, '2018-07-23 16:03:10', '::1'),
(51, 'Add ', '5 | 1:00:00', 1, '2018-07-23 16:03:10', '::1'),
(52, 'Add ', '6 | dsadsads', 1, '2018-07-23 16:03:10', '::1'),
(53, 'Add ', '7 | dasdsadsa adsdsds', 1, '2018-07-23 16:03:10', '::1'),
(54, 'Add ', '8 | 5', 1, '2018-07-23 16:03:10', '::1'),
(55, 'Add ', '9 | ddas', 1, '2018-07-23 16:04:30', '::1'),
(56, 'Add ', '10 | dsa dsa', 1, '2018-07-23 16:04:30', '::1'),
(57, 'Add ', '11 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-23 16:04:30', '::1'),
(58, 'Add ', '12 | 05/20/2017', 1, '2018-07-23 16:04:30', '::1'),
(59, 'Add ', '13 | 0:00:00', 1, '2018-07-23 16:04:30', '::1'),
(60, 'Add ', '14 | dsadsa', 1, '2018-07-23 16:04:30', '::1'),
(61, 'Add ', '15 | dadasdas', 1, '2018-07-23 16:04:30', '::1'),
(62, 'Add ', '16 | 5', 1, '2018-07-23 16:04:30', '::1'),
(63, 'Add ', '17 | ddassssss', 1, '2018-07-23 16:33:49', '::1'),
(64, 'Add ', '18 | dsa dsasssssssssss', 1, '2018-07-23 16:33:49', '::1'),
(65, 'Add ', '19 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-23 16:33:49', '::1'),
(66, 'Add ', '20 | 05/20/2017', 1, '2018-07-23 16:33:49', '::1'),
(67, 'Add ', '21 | 0:00:00', 1, '2018-07-23 16:33:49', '::1'),
(68, 'Add ', '22 | dsadsa', 1, '2018-07-23 16:33:49', '::1'),
(69, 'Add ', '23 | dadasdas', 1, '2018-07-23 16:33:49', '::1'),
(70, 'Add ', '24 | 5', 1, '2018-07-23 16:33:49', '::1'),
(71, 'Add ', '25 | contoh 2', 1, '2018-07-23 18:04:19', '::1'),
(72, 'Add ', '26 | dsaf dasd sa', 1, '2018-07-23 18:04:19', '::1'),
(73, 'Add ', '27 | /assets/file_upload/admin/images/car3.jpg', 1, '2018-07-23 18:04:19', '::1'),
(74, 'Add ', '28 | 05/20/2017', 1, '2018-07-23 18:04:19', '::1'),
(75, 'Add ', '29 | 0:01:00', 1, '2018-07-23 18:04:19', '::1'),
(76, 'Add ', '30 | da dsadsa', 1, '2018-07-23 18:04:19', '::1'),
(77, 'Add ', '31 | d asdsa', 1, '2018-07-23 18:04:19', '::1'),
(78, 'Add ', '32 | 5', 1, '2018-07-23 18:04:19', '::1'),
(79, 'Add ', '33 | ddasdsa', 1, '2018-07-23 18:07:45', '::1'),
(80, 'Add ', '34 | dasdsadsa', 1, '2018-07-23 18:07:45', '::1'),
(81, 'Add ', '35 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-23 18:07:45', '::1'),
(82, 'Add ', '36 | 05/20/2017', 1, '2018-07-23 18:07:45', '::1'),
(83, 'Add ', '37 | 0:00:00', 1, '2018-07-23 18:07:45', '::1'),
(84, 'Add ', '38 | ', 1, '2018-07-23 18:07:45', '::1'),
(85, 'Add ', '39 | ', 1, '2018-07-23 18:07:45', '::1'),
(86, 'Add ', '40 | ', 1, '2018-07-23 18:07:45', '::1'),
(87, 'Add ', '41 | dasdsa', 1, '2018-07-23 18:08:00', '::1'),
(88, 'Add ', '42 | d adsa as', 1, '2018-07-23 18:08:00', '::1'),
(89, 'Add ', '43 | /assets/file_upload/admin/images/box1.jpg', 1, '2018-07-23 18:08:00', '::1'),
(90, 'Add ', '44 | 05/20/2017', 1, '2018-07-23 18:08:00', '::1'),
(91, 'Add ', '45 | ', 1, '2018-07-23 18:08:00', '::1'),
(92, 'Add ', '46 | ', 1, '2018-07-23 18:08:00', '::1'),
(93, 'Add ', '47 | ', 1, '2018-07-23 18:08:00', '::1'),
(94, 'Add ', '48 | ', 1, '2018-07-23 18:08:00', '::1'),
(95, 'Add ', '49 | 1', 1, '2018-07-23 18:09:53', '::1'),
(96, 'Add ', '50 | s', 1, '2018-07-23 18:09:53', '::1'),
(97, 'Add ', '51 | /assets/file_upload/admin/images/car3.jpg', 1, '2018-07-23 18:09:53', '::1'),
(98, 'Add ', '52 | 05/20/2017', 1, '2018-07-23 18:09:53', '::1'),
(99, 'Add ', '53 | ', 1, '2018-07-23 18:09:53', '::1'),
(100, 'Add ', '54 | ', 1, '2018-07-23 18:09:53', '::1'),
(101, 'Add ', '55 | ', 1, '2018-07-23 18:09:53', '::1'),
(102, 'Add ', '56 | ', 1, '2018-07-23 18:09:53', '::1'),
(103, 'Add ', '57 | 2', 1, '2018-07-23 18:10:07', '::1'),
(104, 'Add ', '58 | dsaddsa', 1, '2018-07-23 18:10:07', '::1'),
(105, 'Add ', '59 | /assets/file_upload/admin/images/car3.jpg', 1, '2018-07-23 18:10:07', '::1'),
(106, 'Add ', '60 | 05/20/2017', 1, '2018-07-23 18:10:07', '::1'),
(107, 'Add ', '61 | ', 1, '2018-07-23 18:10:07', '::1'),
(108, 'Add ', '62 | ', 1, '2018-07-23 18:10:07', '::1'),
(109, 'Add ', '63 | ', 1, '2018-07-23 18:10:07', '::1'),
(110, 'Add ', '64 | ', 1, '2018-07-23 18:10:07', '::1'),
(111, 'Login', 'superadmin | 1', 1, '2018-07-24 14:42:06', '::1'),
(112, 'Add ', '1 | test 2', 1, '2018-07-24 16:20:27', '::1'),
(113, 'Add ', '1 | dsaddsa test 2', 1, '2018-07-24 16:20:27', '::1'),
(114, 'Add ', '1 | /assets/file_upload/admin/images/car3.jpg', 1, '2018-07-24 16:20:27', '::1'),
(115, 'Add ', '1 | 06/02/2017', 1, '2018-07-24 16:20:27', '::1'),
(116, 'Add ', '1 | 0:04:00', 1, '2018-07-24 16:20:27', '::1'),
(117, 'Add ', '1 | ', 1, '2018-07-24 16:20:27', '::1'),
(118, 'Add ', '1 | ', 1, '2018-07-24 16:20:27', '::1'),
(119, 'Add ', '1 | 2', 1, '2018-07-24 16:20:27', '::1'),
(120, 'Add ', '1 | 1sdsadsa', 1, '2018-07-24 16:20:45', '::1'),
(121, 'Add ', '1 | s', 1, '2018-07-24 16:20:45', '::1'),
(122, 'Add ', '1 | /assets/file_upload/admin/images/car3.jpg', 1, '2018-07-24 16:20:45', '::1'),
(123, 'Add ', '1 | 05/20/2017', 1, '2018-07-24 16:20:45', '::1'),
(124, 'Add ', '1 | ', 1, '2018-07-24 16:20:45', '::1'),
(125, 'Add ', '1 | ', 1, '2018-07-24 16:20:45', '::1'),
(126, 'Add ', '1 | ', 1, '2018-07-24 16:20:45', '::1'),
(127, 'Add ', '1 | ', 1, '2018-07-24 16:20:45', '::1'),
(128, 'Add ', '65 | test 1', 1, '2018-07-24 16:30:40', '::1'),
(129, 'Add ', '66 | desc 1', 1, '2018-07-24 16:30:40', '::1'),
(130, 'Add ', '67 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-24 16:30:40', '::1'),
(131, 'Add ', '68 | 07/17/2018', 1, '2018-07-24 16:30:40', '::1'),
(132, 'Add ', '69 | 0:01:00', 1, '2018-07-24 16:30:40', '::1'),
(133, 'Add ', '70 | dsadsa', 1, '2018-07-24 16:30:40', '::1'),
(134, 'Add ', '71 | dasdsa', 1, '2018-07-24 16:30:40', '::1'),
(135, 'Add ', '72 | 5', 1, '2018-07-24 16:30:40', '::1'),
(136, 'update ', 'test 1', 1, '2018-07-24 16:46:57', '::1'),
(137, 'update ', 'desc 1sss', 1, '2018-07-24 16:46:57', '::1'),
(138, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-07-24 16:46:57', '::1'),
(139, 'update ', '07/17/2018', 1, '2018-07-24 16:46:57', '::1'),
(140, 'update ', '0:01:00', 1, '2018-07-24 16:46:57', '::1'),
(141, 'update ', '', 1, '2018-07-24 16:46:57', '::1'),
(142, 'update ', '', 1, '2018-07-24 16:46:57', '::1'),
(143, 'update ', '5', 1, '2018-07-24 16:46:57', '::1'),
(144, 'update ', 'test 1 edit', 1, '2018-07-24 16:47:07', '::1'),
(145, 'update ', 'desc 1sss', 1, '2018-07-24 16:47:07', '::1'),
(146, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-07-24 16:47:07', '::1'),
(147, 'update ', '07/17/2018', 1, '2018-07-24 16:47:07', '::1'),
(148, 'update ', '0:01:00', 1, '2018-07-24 16:47:07', '::1'),
(149, 'update ', '', 1, '2018-07-24 16:47:07', '::1'),
(150, 'update ', '', 1, '2018-07-24 16:47:07', '::1'),
(151, 'update ', '5', 1, '2018-07-24 16:47:07', '::1'),
(152, 'update ', 'test 1 edit', 1, '2018-07-24 16:47:23', '::1'),
(153, 'update ', 'desc 1sss', 1, '2018-07-24 16:47:23', '::1'),
(154, 'update ', '/assets/file_upload/admin/images/13.jpg', 1, '2018-07-24 16:47:23', '::1'),
(155, 'update ', '07/17/2018', 1, '2018-07-24 16:47:23', '::1'),
(156, 'update ', '0:01:00', 1, '2018-07-24 16:47:23', '::1'),
(157, 'update ', '', 1, '2018-07-24 16:47:23', '::1'),
(158, 'update ', '', 1, '2018-07-24 16:47:23', '::1'),
(159, 'update ', '2', 1, '2018-07-24 16:47:23', '::1'),
(160, 'update ', 'test 1 edit', 1, '2018-07-24 16:47:33', '::1'),
(161, 'update ', 'desc 1sss', 1, '2018-07-24 16:47:33', '::1'),
(162, 'update ', '/assets/file_upload/admin/images/13.jpg', 1, '2018-07-24 16:47:33', '::1'),
(163, 'update ', '07/17/2018', 1, '2018-07-24 16:47:33', '::1'),
(164, 'update ', '5:01:00', 1, '2018-07-24 16:47:33', '::1'),
(165, 'update ', '', 1, '2018-07-24 16:47:33', '::1'),
(166, 'update ', '', 1, '2018-07-24 16:47:33', '::1'),
(167, 'update ', '2', 1, '2018-07-24 16:47:33', '::1'),
(168, 'Active content', '10 | 1', 1, '2018-07-24 16:59:31', '::1'),
(169, 'Active content', '10 | 1', 1, '2018-07-24 16:59:35', '::1'),
(170, 'Active content', '10 | 1', 1, '2018-07-24 16:59:36', '::1'),
(171, 'Add ', '73 | dasdsa', 1, '2018-07-24 17:01:06', '::1'),
(172, 'Add ', '74 | dasdsa', 1, '2018-07-24 17:01:06', '::1'),
(173, 'Add ', '75 | /assets/file_upload/admin/images/visimisi.jpg', 1, '2018-07-24 17:01:06', '::1'),
(174, 'Add ', '76 | ', 1, '2018-07-24 17:01:06', '::1'),
(175, 'Add ', '77 | ', 1, '2018-07-24 17:01:06', '::1'),
(176, 'Add ', '78 | ', 1, '2018-07-24 17:01:06', '::1'),
(177, 'Add ', '79 | ', 1, '2018-07-24 17:01:06', '::1'),
(178, 'Add ', '80 | ', 1, '2018-07-24 17:01:06', '::1'),
(179, 'update ', 'dasdsa', 1, '2018-07-24 17:01:13', '::1'),
(180, 'update ', 'dasdsa', 1, '2018-07-24 17:01:13', '::1'),
(181, 'update ', '/assets/file_upload/admin/images/visimisi.jpg', 1, '2018-07-24 17:01:13', '::1'),
(182, 'update ', '', 1, '2018-07-24 17:01:13', '::1'),
(183, 'update ', '', 1, '2018-07-24 17:01:13', '::1'),
(184, 'update ', '', 1, '2018-07-24 17:01:13', '::1'),
(185, 'update ', '', 1, '2018-07-24 17:01:13', '::1'),
(186, 'update ', '2', 1, '2018-07-24 17:01:13', '::1'),
(187, 'Active content', '11 | 1', 1, '2018-07-24 17:01:16', '::1'),
(188, 'Delete ', '11 | ', 1, '2018-07-24 17:01:19', '::1'),
(189, 'Delete ', '10 | ', 1, '2018-07-24 17:01:26', '::1'),
(190, 'Login', 'superadmin | 1', 1, '2018-07-25 12:55:19', '::1'),
(191, 'Add ', '81 | dasdasda', 1, '2018-07-25 12:58:04', '::1'),
(192, 'Add ', '82 | test', 1, '2018-07-25 12:58:04', '::1'),
(193, 'Add ', '83 | /assets/file_upload/admin/images/13.jpg', 1, '2018-07-25 12:58:04', '::1'),
(194, 'Add ', '84 | 07/19/2018', 1, '2018-07-25 12:58:04', '::1'),
(195, 'Add ', '85 | 0:03:00', 1, '2018-07-25 12:58:04', '::1'),
(196, 'Add ', '86 | dadsa', 1, '2018-07-25 12:58:04', '::1'),
(197, 'Add ', '87 | dasdsadsa', 1, '2018-07-25 12:58:04', '::1'),
(198, 'Add ', '88 | 2', 1, '2018-07-25 12:58:04', '::1'),
(199, 'Active content', '12 | 1', 1, '2018-07-25 12:58:08', '::1'),
(200, 'Add ', '89 | tttttt', 1, '2018-07-25 12:58:47', '::1'),
(201, 'Add ', '90 | tttttt', 1, '2018-07-25 12:58:47', '::1'),
(202, 'Add ', '91 | /assets/file_upload/admin/images/IMAGE WEBSITE/img-slide-1.jpg', 1, '2018-07-25 12:58:47', '::1'),
(203, 'Add ', '92 | 07/19/2018', 1, '2018-07-25 12:58:47', '::1'),
(204, 'Add ', '93 | 0:02:00', 1, '2018-07-25 12:58:47', '::1'),
(205, 'Add ', '94 | dadas', 1, '2018-07-25 12:58:47', '::1'),
(206, 'Add ', '95 | dasdas', 1, '2018-07-25 12:58:47', '::1'),
(207, 'Add ', '96 | 5', 1, '2018-07-25 12:58:47', '::1'),
(208, 'Active content', '13 | 1', 1, '2018-07-25 12:58:50', '::1'),
(209, 'update ', 'tttttt', 1, '2018-07-25 12:59:35', '::1'),
(210, 'update ', 'tttttt', 1, '2018-07-25 12:59:35', '::1'),
(211, 'update ', '/assets/file_upload/admin/images/IMAGE WEBSITE/img-slide-1.jpg', 1, '2018-07-25 12:59:35', '::1'),
(212, 'update ', '07/19/2018', 1, '2018-07-25 12:59:35', '::1'),
(213, 'update ', '0:02:00', 1, '2018-07-25 12:59:35', '::1'),
(214, 'update ', '', 1, '2018-07-25 12:59:35', '::1'),
(215, 'update ', '', 1, '2018-07-25 12:59:35', '::1'),
(216, 'update ', '5', 1, '2018-07-25 12:59:35', '::1'),
(217, 'update ', 'ttzzzz', 1, '2018-07-25 12:59:50', '::1'),
(218, 'update ', 'ggg', 1, '2018-07-25 12:59:50', '::1'),
(219, 'update ', '/assets/file_upload/admin/images/IMAGE WEBSITE/img-slide-1.jpg', 1, '2018-07-25 12:59:50', '::1'),
(220, 'update ', '07/19/2018', 1, '2018-07-25 12:59:50', '::1'),
(221, 'update ', '0:02:00', 1, '2018-07-25 12:59:50', '::1'),
(222, 'update ', '', 1, '2018-07-25 12:59:50', '::1'),
(223, 'update ', '', 1, '2018-07-25 12:59:50', '::1'),
(224, 'update ', '5', 1, '2018-07-25 12:59:50', '::1'),
(225, 'Active Module', '99 | dfad | 1', 1, '2018-07-25 13:17:15', '::1'),
(226, 'Inactive Module', '98 | Content fddd | 0', 1, '2018-07-25 13:40:27', '::1'),
(227, 'Active Module', '98 | About | 1', 1, '2018-07-25 13:40:57', '::1'),
(228, 'Inactive Module', '98 | About | 0', 1, '2018-07-25 13:41:08', '::1'),
(229, 'Active Module', '98 | About | 1', 1, '2018-07-25 13:41:11', '::1'),
(230, 'Active 11', '11 | nama | 1', 1, '2018-07-25 13:56:58', '::1'),
(231, 'Add ', '97 | sadasdsa', 1, '2018-07-25 13:57:12', '::1'),
(232, 'Active content', '14 | 1', 1, '2018-07-25 13:57:15', '::1'),
(233, 'update ', 'sadasdsa', 1, '2018-07-25 16:03:31', '::1'),
(234, 'update ', 'ttzzzz', 1, '2018-07-25 17:13:01', '::1'),
(235, 'update ', 'ggg', 1, '2018-07-25 17:13:01', '::1'),
(236, 'update ', '/assets/file_upload/admin/images/IMAGE WEBSITE/img-slide-1.jpg', 1, '2018-07-25 17:13:01', '::1'),
(237, 'update ', '07/19/2018', 1, '2018-07-25 17:13:01', '::1'),
(238, 'update ', '0:02:00', 1, '2018-07-25 17:13:01', '::1'),
(239, 'update ', '', 1, '2018-07-25 17:13:01', '::1'),
(240, 'update ', '', 1, '2018-07-25 17:13:01', '::1'),
(241, 'update ', '3', 1, '2018-07-25 17:13:01', '::1'),
(242, 'Login', 'superadmin | 1', 1, '2018-07-26 14:24:03', '::1'),
(243, 'Inactive 1', '1 | Title | 0', 1, '2018-07-26 15:36:05', '::1'),
(244, 'Active 1', '1 | Title | 1', 1, '2018-07-26 15:36:08', '::1'),
(245, 'Inactive 1', '1 | Title | 0', 1, '2018-07-26 15:36:14', '::1'),
(246, 'Active 1', '1 | Title | 1', 1, '2018-07-26 15:36:17', '::1'),
(247, 'Delete Module', '13 | ', 1, '2018-07-26 17:36:48', '::1'),
(248, 'Inactive 12', '12 | sub title | 0', 1, '2018-07-26 17:42:50', '::1'),
(249, 'Inactive 1', '1 | Title | 0', 1, '2018-07-26 17:43:26', '::1'),
(250, 'Active 1', '1 | Title | 1', 1, '2018-07-26 17:43:27', '::1'),
(251, 'Active 12', '12 | sub title | 1', 1, '2018-07-26 17:43:32', '::1'),
(252, 'Active 14', '14 | dssaasssssss | 1', 1, '2018-07-26 17:43:57', '::1'),
(253, 'Inactive 12', '12 | sub title | 0', 1, '2018-07-26 17:44:25', '::1'),
(254, 'Active 12', '12 | sub title | 1', 1, '2018-07-26 17:44:28', '::1'),
(255, 'Login', 'superadmin | 1', 1, '2018-07-27 13:30:57', '::1'),
(256, 'Active 15', '15 | Judulsub | 1', 1, '2018-07-27 13:32:03', '::1'),
(257, 'Active 16', '16 | dadasdsa | 1', 1, '2018-07-27 13:32:27', '::1'),
(258, 'Active 17', '17 | Imagecas | 1', 1, '2018-07-27 13:33:15', '::1'),
(259, 'Delete Module', '14 | dssaasssssss', 1, '2018-07-27 13:55:22', '::1'),
(260, 'Delete Module', '12 | sub title', 1, '2018-07-27 13:55:27', '::1'),
(261, 'Active 18', '18 | titles | 1', 1, '2018-07-27 13:56:24', '::1'),
(262, 'Active About', '12 | 1', 1, '2018-07-27 14:02:18', '::1'),
(263, 'Active About', '12 | 1', 1, '2018-07-27 14:02:20', '::1'),
(264, 'Delete Module', '15 | Judulsub', 1, '2018-07-27 15:30:47', '::1'),
(265, 'Delete Module', '16 | dadasdsa', 1, '2018-07-27 15:30:51', '::1'),
(266, 'Active dfad', '14 | 1', 1, '2018-07-27 15:47:56', '::1'),
(267, 'Active dfad', '14 | 1', 1, '2018-07-27 15:47:58', '::1'),
(268, 'Login', 'superadmin | 1', 1, '2018-07-30 16:42:43', '::1'),
(269, 'Active About', '13 | 1', 1, '2018-07-30 17:22:59', '::1'),
(270, 'Active About', '13 | 1', 1, '2018-07-30 17:23:00', '::1'),
(271, 'Login', 'superadmin | 1', 1, '2018-07-31 13:59:52', '::1'),
(272, 'Add ', '100 | ', 1, '2018-07-31 17:37:34', '::1'),
(273, 'Add ', '101 | ', 1, '2018-07-31 17:37:34', '::1'),
(274, 'Add ', '102 | ', 1, '2018-07-31 17:37:34', '::1'),
(275, 'Add ', '103 | ', 1, '2018-07-31 17:37:34', '::1'),
(276, 'Add ', '104 | ', 1, '2018-07-31 17:37:34', '::1'),
(277, 'Add ', '105 | ', 1, '2018-07-31 17:37:34', '::1'),
(278, 'Add ', '106 | ', 1, '2018-07-31 17:37:34', '::1'),
(279, 'Add ', '107 | ', 1, '2018-07-31 17:37:34', '::1'),
(280, 'Add ', '108 | testtttttt', 1, '2018-07-31 17:49:52', '::1'),
(281, 'Add ', '109 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-31 17:49:52', '::1'),
(282, 'Active About', '17 | 1', 1, '2018-07-31 17:49:55', '::1'),
(283, 'update ', 'testttttttsssssssssssssssssss', 1, '2018-07-31 18:24:16', '::1'),
(284, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-07-31 18:24:16', '::1'),
(285, 'Active About', '17 | 1', 1, '2018-07-31 18:27:09', '::1'),
(286, 'Active About', '17 | 1', 1, '2018-07-31 18:27:11', '::1'),
(287, 'Delete ', '17 | ', 1, '2018-07-31 18:28:15', '::1'),
(288, 'Delete ', '15 | ', 1, '2018-07-31 18:29:20', '::1'),
(289, 'Add ', '110 | testttttttssssssssssssssssss', 1, '2018-07-31 18:29:31', '::1'),
(290, 'Add ', '111 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-31 18:29:31', '::1'),
(291, 'Active About', '18 | 1', 1, '2018-07-31 18:29:33', '::1'),
(292, 'Active About', '13 | 1', 1, '2018-07-31 18:29:42', '::1'),
(293, 'Active About', '13 | 1', 1, '2018-07-31 18:29:44', '::1'),
(294, 'Add ', '112 | testttttttsssssssssssssssssss', 1, '2018-07-31 18:32:40', '::1'),
(295, 'Add ', '113 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-31 18:32:40', '::1'),
(296, 'Active About', '19 | 1', 1, '2018-07-31 18:32:42', '::1'),
(297, 'Active About', '19 | 1', 1, '2018-07-31 18:33:36', '::1'),
(298, 'Active About', '19 | 1', 1, '2018-07-31 18:33:37', '::1'),
(299, 'Delete ', '14 | ', 1, '2018-07-31 18:59:37', '::1'),
(300, 'Active 19', '19 | Desc | 1', 1, '2018-07-31 19:02:26', '::1'),
(301, 'Add ', '114 | visi misi', 1, '2018-07-31 19:02:57', '::1'),
(302, 'Add ', '115 | dsadasdas', 1, '2018-07-31 19:02:57', '::1'),
(303, 'Active test', '20 | 1', 1, '2018-07-31 19:02:59', '::1'),
(304, 'Add ', '116 | salah', 1, '2018-07-31 19:06:33', '::1'),
(305, 'Add ', '117 | das dsada', 1, '2018-07-31 19:06:33', '::1'),
(306, 'Active visions', '21 | 1', 1, '2018-07-31 19:06:35', '::1'),
(307, 'Add ', '118 | dasdasdas', 1, '2018-07-31 19:07:21', '::1'),
(308, 'Add ', '119 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-31 19:07:21', '::1'),
(309, 'Add ', '120 | dasdsa', 1, '2018-07-31 19:07:32', '::1'),
(310, 'Add ', '121 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-07-31 19:07:32', '::1'),
(311, 'Delete ', '19 | ', 1, '2018-07-31 19:07:53', '::1'),
(312, 'Active About', '22 | 1', 1, '2018-07-31 19:08:00', '::1'),
(313, 'Delete ', '18 | ', 1, '2018-07-31 19:08:10', '::1'),
(314, 'Add ', '122 | dasssssssssss', 1, '2018-07-31 19:08:31', '::1'),
(315, 'Add ', '123 | /assets/file_upload/admin/images/visimisi.jpg', 1, '2018-07-31 19:08:31', '::1'),
(316, 'Active About', '24 | 1', 1, '2018-07-31 19:08:33', '::1'),
(317, 'Active About', '24 | 1', 1, '2018-07-31 19:09:05', '::1'),
(318, 'Active About', '24 | 1', 1, '2018-07-31 19:09:08', '::1'),
(319, 'Add ', '124 | testttttttssssssssssssssssss', 1, '2018-07-31 19:09:27', '::1'),
(320, 'Add ', '125 | /assets/file_upload/admin/images/car3.jpg', 1, '2018-07-31 19:09:27', '::1'),
(321, 'Active About', '25 | 1', 1, '2018-07-31 19:13:38', '::1'),
(322, 'Add ', '126 | dadas', 1, '2018-07-31 19:13:54', '::1'),
(323, 'Add ', '127 | /assets/file_upload/admin/images/car3.jpg', 1, '2018-07-31 19:13:54', '::1'),
(324, 'Active About', '26 | 1', 1, '2018-07-31 19:13:56', '::1'),
(325, 'Add ', '128 | dasdas', 1, '2018-07-31 19:14:05', '::1'),
(326, 'Add ', '129 | /assets/file_upload/admin/images/13.jpg', 1, '2018-07-31 19:14:05', '::1'),
(327, 'Active About', '27 | 1', 1, '2018-07-31 19:14:07', '::1'),
(328, 'Active About', '23 | 1', 1, '2018-07-31 19:14:14', '::1'),
(329, 'update ', 'dasssssssssss', 1, '2018-07-31 19:14:31', '::1'),
(330, 'update ', '/assets/file_upload/admin/images/loader.gif', 1, '2018-07-31 19:14:31', '::1'),
(331, 'Login', 'superadmin | 1', 1, '2018-08-01 16:25:07', '::1'),
(332, 'Login', 'superadmin | 1', 1, '2018-08-02 13:39:14', '::1'),
(333, 'Delete ', '23 | ', 1, '2018-08-02 13:39:55', '::1'),
(334, 'Delete ', '22 | ', 1, '2018-08-02 13:39:58', '::1'),
(335, 'Delete ', '25 | ', 1, '2018-08-02 13:40:03', '::1'),
(336, 'update ', 'dasssssssssss', 1, '2018-08-02 13:40:08', '::1'),
(337, 'update ', '/assets/file_upload/admin/images/loader.gif', 1, '2018-08-02 13:40:08', '::1'),
(338, 'Active 20', '20 | dadasdsa | 1', 1, '2018-08-02 14:21:36', '::1'),
(339, 'Delete ', '24 | ', 1, '2018-08-02 14:22:20', '::1'),
(340, 'Add ', '130 | gdgdf', 1, '2018-08-02 14:22:33', '::1'),
(341, 'Add ', '131 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 14:22:33', '::1'),
(342, 'Add ', '132 | gdfgdgdgdf', 1, '2018-08-02 14:22:33', '::1'),
(343, 'Active About', '28 | 1', 1, '2018-08-02 14:22:36', '::1'),
(344, 'Delete Module', '20 | dadasdsa', 1, '2018-08-02 14:23:29', '::1'),
(345, 'Active 21', '21 | dadasdsa | 1', 1, '2018-08-02 14:25:45', '::1'),
(346, 'Active 22', '22 | Desc1 | 1', 1, '2018-08-02 14:56:37', '::1'),
(347, 'Add ', '133 | tstttttt', 1, '2018-08-02 14:58:36', '::1'),
(348, 'Delete ', '28 | ', 1, '2018-08-02 14:58:41', '::1'),
(349, 'Add ', '134 | dsa das da', 1, '2018-08-02 14:58:47', '::1'),
(350, 'Add ', '135 | asdsa dasdas', 1, '2018-08-02 14:59:36', '::1'),
(351, 'Add ', '136 | dasdasda', 1, '2018-08-02 15:12:25', '::1'),
(352, 'Active About', '32 | 1', 1, '2018-08-02 15:12:28', '::1'),
(353, 'Add ', '137 | dasdsa', 1, '2018-08-02 15:12:42', '::1'),
(354, 'Add ', '138 | dasdsadas', 1, '2018-08-02 15:12:42', '::1'),
(355, 'Add ', '139 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 15:12:42', '::1'),
(356, 'Active About', '33 | 1', 1, '2018-08-02 15:12:45', '::1'),
(357, 'Add ', '140 | dasdasdas', 1, '2018-08-02 15:15:11', '::1'),
(358, 'Active About', '34 | 1', 1, '2018-08-02 15:15:14', '::1'),
(359, 'Delete ', '21 | ', 1, '2018-08-02 15:16:08', '::1'),
(360, 'Add ', '141 | dasdasdasssss', 1, '2018-08-02 15:16:24', '::1'),
(361, 'Active About', '35 | 1', 1, '2018-08-02 15:16:27', '::1'),
(362, 'Active About', '35 | 1', 1, '2018-08-02 15:17:05', '::1'),
(363, 'Active About', '35 | 1', 1, '2018-08-02 15:17:06', '::1'),
(364, 'Add ', '142 | dasssssssssss', 1, '2018-08-02 15:17:25', '::1'),
(365, 'Add ', '143 | dasdasdas', 1, '2018-08-02 15:17:25', '::1'),
(366, 'Add ', '144 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 15:17:25', '::1'),
(367, 'Active About', '36 | 1', 1, '2018-08-02 15:17:27', '::1'),
(368, 'Add ', '145 | dsadsa', 1, '2018-08-02 15:19:03', '::1'),
(369, 'Add ', '146 | dasdasdas', 1, '2018-08-02 15:19:03', '::1'),
(370, 'Add ', '147 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 15:19:03', '::1'),
(371, 'Active About', '37 | 1', 1, '2018-08-02 15:19:07', '::1'),
(372, 'Delete ', '37 | ', 1, '2018-08-02 15:19:15', '::1'),
(373, 'Delete ', '12 | ', 1, '2018-08-02 15:19:50', '::1'),
(374, 'Delete ', '13 | ', 1, '2018-08-02 15:19:53', '::1'),
(375, 'Add ', '148 | dasdadsa', 1, '2018-08-02 15:20:38', '::1'),
(376, 'Add ', '149 | dasdsadadas', 1, '2018-08-02 15:20:38', '::1'),
(377, 'Add ', '150 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 15:20:38', '::1'),
(378, 'Add ', '151 | 08/22/2018', 1, '2018-08-02 15:20:38', '::1'),
(379, 'Add ', '152 | 0:02:00', 1, '2018-08-02 15:20:38', '::1'),
(380, 'Add ', '153 | ', 1, '2018-08-02 15:20:38', '::1'),
(381, 'Add ', '154 | dasdsadsa adsdsds', 1, '2018-08-02 15:20:38', '::1'),
(382, 'Add ', '155 | 5', 1, '2018-08-02 15:20:38', '::1'),
(383, 'Active About', '38 | 1', 1, '2018-08-02 15:20:40', '::1'),
(384, 'Add ', '156 | dasdasdsa', 1, '2018-08-02 15:20:51', '::1'),
(385, 'Add ', '157 | dasdasdsa', 1, '2018-08-02 15:20:51', '::1'),
(386, 'Add ', '158 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 15:20:51', '::1'),
(387, 'Active About', '39 | 1', 1, '2018-08-02 15:22:07', '::1'),
(388, 'Add ', '159 | dsadasdas', 1, '2018-08-02 15:22:14', '::1'),
(389, 'Active About', '40 | 1', 1, '2018-08-02 15:22:17', '::1'),
(390, 'Active About', '39 | 1', 1, '2018-08-02 15:24:22', '::1'),
(391, 'Active About', '39 | 1', 1, '2018-08-02 15:24:24', '::1'),
(392, 'Add ', '160 | dasdasdas', 1, '2018-08-02 15:24:32', '::1'),
(393, 'Active About', '41 | 1', 1, '2018-08-02 15:24:35', '::1'),
(394, 'Add ', '161 | dasdadas', 1, '2018-08-02 15:24:50', '::1'),
(395, 'Add ', '162 | dasdsadas', 1, '2018-08-02 15:24:50', '::1'),
(396, 'Add ', '163 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 15:24:50', '::1'),
(397, 'Active About', '42 | 1', 1, '2018-08-02 15:24:53', '::1'),
(398, 'Active 23', '23 | ttttt | 1', 1, '2018-08-02 15:30:51', '::1'),
(399, 'update ', 'dasdasdsa', 1, '2018-08-02 15:46:52', '::1'),
(400, 'update ', 'dasdasdsa', 1, '2018-08-02 15:46:52', '::1'),
(401, 'update ', '', 1, '2018-08-02 15:46:52', '::1'),
(402, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 15:46:52', '::1'),
(403, 'Inactive Module Group', '3 | Home Management | 0', 1, '2018-08-02 16:15:24', '::1'),
(404, 'update ', 'dasdasdsa', 1, '2018-08-02 16:25:01', '::1'),
(405, 'update ', 'dasdasdsa', 1, '2018-08-02 16:25:01', '::1'),
(406, 'update ', 'dsadasdadas', 1, '2018-08-02 16:25:01', '::1'),
(407, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 16:25:01', '::1'),
(408, 'update ', 'dasdasdsa', 1, '2018-08-02 16:25:16', '::1'),
(409, 'update ', 'dasdasdsa', 1, '2018-08-02 16:25:16', '::1'),
(410, 'update ', 'dasdsadddddddss', 1, '2018-08-02 16:25:16', '::1'),
(411, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 16:25:16', '::1'),
(412, 'update ', 'dasdasdsa', 1, '2018-08-02 16:49:55', '::1'),
(413, 'update ', 'dasdasdsa', 1, '2018-08-02 16:49:55', '::1'),
(414, 'update ', 'dadasdas', 1, '2018-08-02 16:49:55', '::1'),
(415, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 16:49:55', '::1'),
(416, 'update ', 'dasdasdsa', 1, '2018-08-02 17:01:42', '::1'),
(417, 'update ', 'dasdasdsa', 1, '2018-08-02 17:01:42', '::1'),
(418, 'update ', 'ssssssssss', 1, '2018-08-02 17:01:42', '::1'),
(419, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 17:01:42', '::1'),
(420, 'update ', 'dasdasdsa', 1, '2018-08-02 17:06:02', '::1'),
(421, 'update ', 'dasdasdsa', 1, '2018-08-02 17:06:02', '::1'),
(422, 'update ', 'dasdsadadas', 1, '2018-08-02 17:06:02', '::1'),
(423, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 17:06:02', '::1'),
(424, 'update ', 'dasdadas', 1, '2018-08-02 17:06:11', '::1'),
(425, 'update ', 'dasdsadas', 1, '2018-08-02 17:06:11', '::1'),
(426, 'update ', 'fdafdsfsdfdsfsdf fd fads', 1, '2018-08-02 17:06:11', '::1'),
(427, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 17:06:11', '::1'),
(428, 'update ', 'dasdasdsa', 1, '2018-08-02 17:09:12', '::1'),
(429, 'update ', 'dasdasdsa', 1, '2018-08-02 17:09:12', '::1'),
(430, 'update ', '33333333', 1, '2018-08-02 17:09:12', '::1'),
(431, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 17:09:12', '::1'),
(432, 'update ', 'dasdadas', 1, '2018-08-02 17:10:08', '::1'),
(433, 'update ', 'dasdsadas', 1, '2018-08-02 17:10:08', '::1'),
(434, 'update ', 's', 1, '2018-08-02 17:10:08', '::1'),
(435, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 17:10:08', '::1'),
(436, 'Add ', '184 | dasdsa', 1, '2018-08-02 17:13:26', '::1'),
(437, 'Add ', '185 | dadas', 1, '2018-08-02 17:13:26', '::1'),
(438, 'Add ', '186 | dasdas', 1, '2018-08-02 17:13:26', '::1'),
(439, 'Add ', '187 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 17:13:26', '::1'),
(440, 'Active About', '43 | 1', 1, '2018-08-02 17:13:28', '::1'),
(441, 'update ', 'satu', 1, '2018-08-02 17:13:40', '::1'),
(442, 'update ', 'dua', 1, '2018-08-02 17:13:40', '::1'),
(443, 'update ', 'tiga', 1, '2018-08-02 17:13:40', '::1'),
(444, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 17:13:40', '::1'),
(445, 'Add ', '192 | dasdsa', 1, '2018-08-02 17:17:10', '::1'),
(446, 'Add ', '193 | dasdsa', 1, '2018-08-02 17:17:10', '::1'),
(447, 'Add ', '194 | dasdas', 1, '2018-08-02 17:17:10', '::1'),
(448, 'Add ', '195 | /assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 17:17:10', '::1'),
(449, 'update ', 'dasdsa', 1, '2018-08-02 17:17:14', '::1'),
(450, 'update ', 'dasdsa', 1, '2018-08-02 17:17:14', '::1'),
(451, 'update ', 'dasdas', 1, '2018-08-02 17:17:14', '::1'),
(452, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-02 17:17:14', '::1'),
(453, 'Active About', '44 | 1', 1, '2018-08-02 17:17:17', '::1'),
(454, 'Add ', '196 | dasdasdasdas', 1, '2018-08-02 17:17:28', '::1'),
(455, 'Active About', '45 | 1', 1, '2018-08-02 17:17:30', '::1'),
(456, 'Login', 'superadmin | 1', 1, '2018-08-03 16:37:49', '::1'),
(457, 'update ', 'dasdsa', 1, '2018-08-03 16:38:05', '::1'),
(458, 'update ', 'dasdsa', 1, '2018-08-03 16:38:05', '::1'),
(459, 'update ', 'dasdas', 1, '2018-08-03 16:38:05', '::1'),
(460, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-03 16:38:05', '::1'),
(461, 'Active 24', '24 | label2 | 1', 1, '2018-08-03 16:40:08', '::1'),
(462, 'Inactive 24', '24 | label2 | 0', 1, '2018-08-03 16:40:20', '::1'),
(463, 'Active 24', '24 | label2 | 1', 1, '2018-08-03 16:40:24', '::1'),
(464, 'update ', 'dasdasdasdas', 1, '2018-08-03 16:40:41', '::1'),
(465, 'update ', 'dasdsadas', 1, '2018-08-03 16:40:41', '::1'),
(466, 'update ', 'dasdasdasdassssssssss', 1, '2018-08-03 16:45:01', '::1'),
(467, 'update ', '', 1, '2018-08-03 16:45:01', '::1'),
(468, 'update ', 'dasdasdasdasssssssssss', 1, '2018-08-03 17:00:09', '::1'),
(469, 'update ', '', 1, '2018-08-03 17:00:09', '::1'),
(470, 'update ', 'dasdasdasdasssssssssss', 1, '2018-08-03 17:01:18', '::1'),
(471, 'update ', 'adasdsa', 1, '2018-08-03 17:01:18', '::1'),
(472, 'update ', 'dasdasdasdasssssssssss', 1, '2018-08-03 17:01:24', '::1'),
(473, 'update ', 'adasdsasdasdsadsa', 1, '2018-08-03 17:01:24', '::1'),
(474, 'Active 25', '25 | dasdsa | 1', 1, '2018-08-03 17:01:48', '::1'),
(475, 'Add ', '198 | dadas', 1, '2018-08-03 17:02:06', '::1'),
(476, 'Add ', '199 | dasdas', 1, '2018-08-03 17:02:06', '::1'),
(477, 'Add ', '200 | dasdsa', 1, '2018-08-03 17:02:06', '::1'),
(478, 'Active visions', '46 | 1', 1, '2018-08-03 17:02:08', '::1'),
(479, 'Active 26', '26 | dadsa | 1', 1, '2018-08-03 17:02:26', '::1'),
(480, 'update ', 'dadas', 1, '2018-08-03 18:12:08', '::1'),
(481, 'update ', 'dasdsa', 1, '2018-08-03 18:12:08', '::1'),
(482, 'update ', 'dasdas', 1, '2018-08-03 18:12:08', '::1'),
(483, 'update ', 'dadasdas', 1, '2018-08-03 18:12:08', '::1'),
(484, 'update ', 'dadas', 1, '2018-08-03 18:25:53', '::1'),
(485, 'update ', 'dasdas', 1, '2018-08-03 18:25:53', '::1'),
(486, 'update ', 'dasdsa', 1, '2018-08-03 18:25:53', '::1'),
(487, 'update ', 'sdasdsadasdsa', 1, '2018-08-03 18:25:53', '::1'),
(488, 'update ', 'dadas', 1, '2018-08-03 18:25:58', '::1'),
(489, 'update ', 'dasdas', 1, '2018-08-03 18:25:58', '::1'),
(490, 'update ', 'dasdsa', 1, '2018-08-03 18:25:58', '::1'),
(491, 'update ', 'sdasdsadasdsa', 1, '2018-08-03 18:25:58', '::1'),
(492, 'Login', 'superadmin | 1', 1, '2018-08-06 13:38:28', '::1'),
(493, 'Login', 'superadmin | 1', 1, '2018-08-06 13:59:22', '::1'),
(494, 'Delete Module', '23 | ttttt', 1, '2018-08-06 15:39:35', '::1'),
(495, 'update ', 'dasdsa', 1, '2018-08-06 15:39:49', '::1'),
(496, 'update ', 'dasdsa', 1, '2018-08-06 15:39:49', '::1'),
(497, 'update ', '/assets/file_upload/admin/images/p1.jpg', 1, '2018-08-06 15:39:49', '::1'),
(498, 'Active About', '44 | 1', 1, '2018-08-06 16:00:18', '::1'),
(499, 'Active About', '44 | 1', 1, '2018-08-06 16:00:20', '::1'),
(500, 'Delete ', '44 | ', 1, '2018-08-06 16:00:22', '::1'),
(501, 'Delete ', '38 | ', 1, '2018-08-06 16:01:37', '::1'),
(502, 'Delete Module', '5 | Pages', 1, '2018-08-06 16:02:25', '::1'),
(503, 'Active Module Group', '5 | Product | 1', 1, '2018-08-06 16:02:46', '::1'),
(504, 'Active Module', '100 | Product | 1', 1, '2018-08-06 16:03:01', '::1'),
(505, 'Active 27', '27 | Title | 1', 1, '2018-08-06 16:06:52', '::1'),
(506, 'Active 28', '28 | Category | 1', 1, '2018-08-06 16:07:35', '::1'),
(507, 'Active 29', '29 | Country | 1', 1, '2018-08-06 16:08:14', '::1'),
(508, 'Active 30', '30 | business type | 1', 1, '2018-08-06 16:09:01', '::1'),
(509, 'Active 31', '31 | icon | 1', 1, '2018-08-06 16:10:27', '::1'),
(510, 'Active 32', '32 | Image | 1', 1, '2018-08-06 16:10:29', '::1'),
(511, 'Active 33', '33 | Desc | 1', 1, '2018-08-06 16:11:46', '::1'),
(512, 'Active 34', '34 | Url | 1', 1, '2018-08-06 16:14:29', '::1'),
(513, 'Add ', '202 | Shangri La Boracay Resort', 1, '2018-08-06 17:27:48', '::1'),
(514, 'Add ', '203 | 14', 1, '2018-08-06 17:27:48', '::1'),
(515, 'Add ', '204 | 24', 1, '2018-08-06 17:27:48', '::1'),
(516, 'Add ', '205 | 30', 1, '2018-08-06 17:27:48', '::1'),
(517, 'Add ', '206 | /assets/file_upload/admin/images/13.jpg', 1, '2018-08-06 17:27:48', '::1'),
(518, 'Add ', '207 | /assets/file_upload/admin/images/car3.jpg', 1, '2018-08-06 17:27:48', '::1'),
(519, 'Add ', '208 | da dadasda s', 1, '2018-08-06 17:27:48', '::1'),
(520, 'Add ', '209 | d a d adsadas', 1, '2018-08-06 17:27:48', '::1'),
(521, 'Active Product', '47 | 1', 1, '2018-08-06 17:29:57', '::1'),
(522, 'update ', 'Shangri', 1, '2018-08-06 18:03:09', '::1'),
(523, 'update ', '14', 1, '2018-08-06 18:03:09', '::1'),
(524, 'update ', '24', 1, '2018-08-06 18:03:09', '::1'),
(525, 'update ', '30', 1, '2018-08-06 18:03:09', '::1'),
(526, 'update ', '/assets/file_upload/admin/images/13.jpg', 1, '2018-08-06 18:03:09', '::1'),
(527, 'update ', '/assets/file_upload/admin/images/car3.jpg', 1, '2018-08-06 18:03:09', '::1'),
(528, 'update ', 'da dadasda s', 1, '2018-08-06 18:03:09', '::1'),
(529, 'update ', 'd a d adsadas', 1, '2018-08-06 18:03:09', '::1'),
(530, 'Login', 'superadmin | 1', 1, '2018-08-08 13:36:42', '::1'),
(531, 'Active Module Group', '3 | Home Management | 1', 1, '2018-08-08 15:01:06', '::1'),
(532, 'Delete Module', '26 | dadsa', 1, '2018-08-08 15:02:51', '::1'),
(533, 'Delete Module', '25 | dasdsa', 1, '2018-08-08 15:02:53', '::1'),
(534, 'update ', 'Haris Hotel', 1, '2018-08-08 15:04:15', '::1'),
(535, 'update ', '/assets/file_upload/admin/images/visimisi.jpg', 1, '2018-08-08 15:04:15', '::1'),
(536, 'Login', 'superadmin | 1', 1, '2018-08-13 14:40:13', '::1'),
(537, 'Delete Banner', '26 | test banner', 1, '2018-08-13 14:40:34', '::1'),
(538, 'Delete Banner', '27 | dasdsa', 1, '2018-08-13 14:40:37', '::1'),
(539, 'Inactive Module', '3 | Banner | 0', 1, '2018-08-13 14:41:08', '::1'),
(540, 'Active Module', '3 | Banner | 1', 1, '2018-08-13 14:41:20', '::1'),
(541, 'Inactive Module', '99 | Client | 0', 1, '2018-08-13 14:41:54', '::1'),
(542, 'Active Module', '99 | Client | 1', 1, '2018-08-13 14:41:55', '::1'),
(543, 'Delete Module', '101 | Client', 1, '2018-08-13 14:42:22', '::1'),
(544, 'Add ', '210 | dasdasdas', 1, '2018-08-13 14:42:50', '::1'),
(545, 'Add ', '211 | /assets/file_upload/admin/images/logo-1.jpg', 1, '2018-08-13 14:42:50', '::1'),
(546, 'Active Client', '48 | 1', 1, '2018-08-13 14:42:52', '::1'),
(547, 'Delete Module', '1 | Title', 1, '2018-08-13 14:43:25', '::1'),
(548, 'Delete Module', '3 | options deteted', 1, '2018-08-13 14:43:32', '::1'),
(549, 'Delete Module', '2 | options deteted', 1, '2018-08-13 14:43:37', '::1'),
(550, 'Delete Module', '5 | options deteted', 1, '2018-08-13 14:43:41', '::1'),
(551, 'Delete Module', '10 | Category', 1, '2018-08-13 14:43:48', '::1'),
(552, 'Delete Module', '2 | Desc', 1, '2018-08-13 14:43:51', '::1'),
(553, 'Delete Module', '3 | Image', 1, '2018-08-13 14:43:52', '::1'),
(554, 'Delete Module', '6 | Date', 1, '2018-08-13 14:43:54', '::1'),
(555, 'Delete Module', '7 | Time', 1, '2018-08-13 14:43:55', '::1'),
(556, 'Delete Module', '8 | Meta Keyword', 1, '2018-08-13 14:43:57', '::1'),
(557, 'update ', 'dasdasdas', 1, '2018-08-13 14:45:13', '::1'),
(558, 'update ', '/assets/file_upload/admin/images/logo-10.jpg', 1, '2018-08-13 14:45:13', '::1'),
(559, 'update ', 'Haris Hotel', 1, '2018-08-13 14:45:24', '::1'),
(560, 'update ', '/assets/file_upload/admin/images/logo-1.jpg', 1, '2018-08-13 14:45:24', '::1'),
(561, 'Delete Module', '98 | About', 1, '2018-08-13 14:46:11', '::1'),
(562, 'Active 35', '35 | visibility | 1', 1, '2018-08-13 14:47:31', '::1'),
(563, 'Delete ', '47 | ', 1, '2018-08-13 14:48:12', '::1'),
(564, 'Add ', '212 | Shangri La Boracay Resort', 1, '2018-08-13 14:48:43', '::1'),
(565, 'Add ', '213 | 12', 1, '2018-08-13 14:48:43', '::1'),
(566, 'Add ', '214 | 27', 1, '2018-08-13 14:48:43', '::1'),
(567, 'Add ', '215 | 29', 1, '2018-08-13 14:48:43', '::1'),
(568, 'Add ', '216 | /assets/file_upload/admin/images/img-thumb-fortress.jpg', 1, '2018-08-13 14:48:43', '::1'),
(569, 'Add ', '217 | /assets/file_upload/admin/images/img-thumb-shangrila.jpg', 1, '2018-08-13 14:48:43', '::1'),
(570, 'Add ', '218 | &amp;nbsp;qr rqe rq rqe', 1, '2018-08-13 14:48:43', '::1'),
(571, 'Add ', '219 | ', 1, '2018-08-13 14:48:43', '::1'),
(572, 'Add ', '220 | 41', 1, '2018-08-13 14:48:43', '::1'),
(573, 'Active Product', '49 | 1', 1, '2018-08-13 14:49:14', '::1'),
(574, 'update ', 'Shangri La Boracay Resort', 1, '2018-08-13 16:26:28', '::1'),
(575, 'update ', '12', 1, '2018-08-13 16:26:28', '::1'),
(576, 'update ', '27', 1, '2018-08-13 16:26:28', '::1'),
(577, 'update ', '29', 1, '2018-08-13 16:26:28', '::1'),
(578, 'update ', '/assets/file_upload/admin/images/img-thumb-fortress.jpg', 1, '2018-08-13 16:26:28', '::1'),
(579, 'update ', '/assets/file_upload/admin/images/img-thumb-shangrila.jpg', 1, '2018-08-13 16:26:28', '::1'),
(580, 'update ', 'caadasdas', 1, '2018-08-13 16:26:28', '::1'),
(581, 'update ', '', 1, '2018-08-13 16:26:28', '::1'),
(582, 'update ', '41', 1, '2018-08-13 16:26:28', '::1'),
(583, 'Active 36', '36 | Category 4 | 1', 1, '2018-08-13 16:27:59', '::1'),
(584, 'Active 37', '37 | Category 5 | 1', 1, '2018-08-13 16:28:27', '::1'),
(585, 'update ', 'Shangri La Boracay Resort', 1, '2018-08-13 16:30:50', '::1'),
(586, 'update ', '12', 1, '2018-08-13 16:30:50', '::1'),
(587, 'update ', '19', 1, '2018-08-13 16:30:50', '::1'),
(588, 'update ', '30', 1, '2018-08-13 16:30:50', '::1'),
(589, 'update ', '43', 1, '2018-08-13 16:30:50', '::1'),
(590, 'update ', '45', 1, '2018-08-13 16:30:50', '::1'),
(591, 'update ', '/assets/file_upload/admin/images/img-thumb-fortress.jpg', 1, '2018-08-13 16:30:50', '::1'),
(592, 'update ', '/assets/file_upload/admin/images/img-thumb-shangrila.jpg', 1, '2018-08-13 16:30:50', '::1'),
(593, 'update ', 'caadasdas', 1, '2018-08-13 16:30:50', '::1'),
(594, 'update ', '', 1, '2018-08-13 16:30:50', '::1'),
(595, 'update ', '41', 1, '2018-08-13 16:30:50', '::1'),
(596, 'Delete Module', '3 | Banner', 1, '2018-08-13 16:31:44', '::1'),
(597, 'Active Module Group', '6 | Blog | 1', 1, '2018-08-13 16:32:07', '::1'),
(598, 'Active Module', '102 | Blog | 1', 1, '2018-08-13 16:32:24', '::1'),
(599, 'Active 38', '38 | Title | 1', 1, '2018-08-13 16:33:13', '::1'),
(600, 'Active 39', '39 | date | 1', 1, '2018-08-13 16:33:53', '::1'),
(601, 'Active 40', '40 | description | 1', 1, '2018-08-13 16:34:29', '::1'),
(602, 'Add ', '223 | dasdasdasdas', 1, '2018-08-13 16:35:38', '::1'),
(603, 'Add ', '224 | 08/13/2018', 1, '2018-08-13 16:35:38', '::1'),
(604, 'Add ', '225 | dasd dasdas das', 1, '2018-08-13 16:35:38', '::1'),
(605, 'Active Blog', '50 | 1', 1, '2018-08-13 16:35:40', '::1'),
(606, 'Login', 'superadmin | 1', 1, '2018-08-14 16:53:15', '::1'),
(607, 'Active 41', '41 | Other Services | 1', 1, '2018-08-14 17:05:51', '::1'),
(608, 'Delete ', '49 | ', 1, '2018-08-14 17:07:16', '::1'),
(609, 'Add ', '226 | Shangri', 1, '2018-08-14 17:07:56', '::1'),
(610, 'Add ', '227 | 12', 1, '2018-08-14 17:07:56', '::1'),
(611, 'Add ', '228 | 19', 1, '2018-08-14 17:07:56', '::1'),
(612, 'Add ', '229 | 29', 1, '2018-08-14 17:07:56', '::1'),
(613, 'Add ', '230 | 43', 1, '2018-08-14 17:07:56', '::1'),
(614, 'Add ', '231 | 45', 1, '2018-08-14 17:07:56', '::1'),
(615, 'Add ', '232 | 47', 1, '2018-08-14 17:07:56', '::1'),
(616, 'Add ', '233 | /assets/file_upload/admin/images/car3.jpg', 1, '2018-08-14 17:07:56', '::1'),
(617, 'Add ', '234 | /assets/file_upload/admin/images/img-thumb-shangrila.jpg', 1, '2018-08-14 17:07:56', '::1'),
(618, 'Add ', '235 | dadasdasdsa', 1, '2018-08-14 17:07:56', '::1'),
(619, 'Add ', '236 | ddsadadsa', 1, '2018-08-14 17:07:56', '::1'),
(620, 'Add ', '237 | 42', 1, '2018-08-14 17:07:56', '::1'),
(621, 'Active Product', '51 | 1', 1, '2018-08-14 17:10:18', '::1'),
(622, 'Active Module', '103 | Banner | 1', 1, '2018-08-18 01:12:57', '::1'),
(623, 'Active 42', '42 | title | 1', 1, '2018-08-18 01:16:12', '::1'),
(624, 'Active 43', '43 | Images | 1', 1, '2018-08-18 01:16:34', '::1'),
(625, 'Active 44', '44 | Url | 1', 1, '2018-08-18 01:17:05', '::1'),
(626, 'Active 45', '45 | Video | 1', 1, '2018-08-18 01:18:05', '::1'),
(627, 'Login', 'superadmin | 1', 1, '2018-08-19 02:42:59', '::1'),
(628, 'Add ', '238 | dadasdsa', 1, '2018-08-19 03:10:58', '::1'),
(629, 'Add ', '239 | 13', 1, '2018-08-19 03:10:58', '::1'),
(630, 'Add ', '240 | 27', 1, '2018-08-19 03:10:58', '::1'),
(631, 'Add ', '241 | 36', 1, '2018-08-19 03:10:58', '::1'),
(632, 'Add ', '242 | 44', 1, '2018-08-19 03:10:58', '::1'),
(633, 'Add ', '243 | 45', 1, '2018-08-19 03:10:58', '::1'),
(634, 'Add ', '244 | 48', 1, '2018-08-19 03:10:58', '::1'),
(635, 'Add ', '245 | /assets/file_upload/images/img-thumb-travel.jpg', 1, '2018-08-19 03:10:58', '::1'),
(636, 'Add ', '246 | ', 1, '2018-08-19 03:10:58', '::1'),
(637, 'Add ', '247 | dasdsada&amp;nbsp;', 1, '2018-08-19 03:10:58', '::1'),
(638, 'Add ', '248 | ', 1, '2018-08-19 03:10:58', '::1'),
(639, 'Add ', '249 | 41', 1, '2018-08-19 03:10:58', '::1'),
(640, 'Active Product', '52 | 1', 1, '2018-08-19 03:11:04', '::1'),
(641, 'update ', 'dadasdsa', 1, '2018-08-19 03:11:19', '::1'),
(642, 'update ', '13', 1, '2018-08-19 03:11:19', '::1'),
(643, 'update ', '27', 1, '2018-08-19 03:11:19', '::1'),
(644, 'update ', '36', 1, '2018-08-19 03:11:19', '::1'),
(645, 'update ', '44', 1, '2018-08-19 03:11:19', '::1'),
(646, 'update ', '45', 1, '2018-08-19 03:11:19', '::1'),
(647, 'update ', '48', 1, '2018-08-19 03:11:19', '::1'),
(648, 'update ', '/assets/file_upload/admin/images/img-thumb-shangrila.jpg', 1, '2018-08-19 03:11:19', '::1'),
(649, 'update ', '/assets/file_upload/admin/images/img-thumb-travel.jpg', 1, '2018-08-19 03:11:19', '::1'),
(650, 'update ', 'dasdsada&amp;nbsp;', 1, '2018-08-19 03:11:19', '::1'),
(651, 'update ', '', 1, '2018-08-19 03:11:19', '::1'),
(652, 'update ', '41', 1, '2018-08-19 03:11:19', '::1'),
(653, 'Login', 'superadmin | 1', 1, '2018-08-19 18:04:02', '::1'),
(654, 'Active 46', '46 | gallery | 1', 1, '2018-08-19 18:07:49', '::1'),
(655, 'Active 47', '47 | gallery image | 1', 1, '2018-08-19 18:08:41', '::1'),
(656, 'Add ', '250 | fadas sd a', 1, '2018-08-19 18:09:02', '::1'),
(657, 'Add ', '251 | /assets/file_upload/admin/images/img-thumb-trump.jpg', 1, '2018-08-19 18:09:02', '::1'),
(658, 'Active Product', '53 | 1', 1, '2018-08-19 18:09:05', '::1'),
(659, 'Add ', '252 | dasdsadsa', 1, '2018-08-19 18:09:13', '::1'),
(660, 'Add ', '253 | /assets/file_upload/admin/images/img-thumb-travel.jpg', 1, '2018-08-19 18:09:13', '::1'),
(661, 'Active Product', '54 | 1', 1, '2018-08-19 18:09:15', '::1'),
(662, 'Login', 'superadmin | 1', 1, '2018-08-19 22:13:32', '::1'),
(663, 'Logout', 'superadmin | 1', 1, '2018-08-19 22:16:56', '::1'),
(664, 'Login', 'superadmin | 1', 1, '2018-08-19 22:18:42', '::1'),
(665, 'Add User', '3 | Panomatic | admin@panomatic.com', 1, '2018-08-19 23:51:17', '::1'),
(666, 'Active User', '5 | Panomatic | 1', 1, '2018-08-19 23:51:19', '::1'),
(667, 'Add ', '254 | lorem psum', 1, '2018-08-20 01:43:36', '::1'),
(668, 'Add ', '255 | 08/31/2018', 1, '2018-08-20 01:43:36', '::1'),
(669, 'Add ', '256 | lorem psum', 1, '2018-08-20 01:43:36', '::1'),
(670, 'Active Blog', '55 | 1', 1, '2018-08-20 01:43:38', '::1'),
(671, 'update ', 'dasdasdasdas', 1, '2018-08-20 01:45:27', '::1'),
(672, 'update ', '08/13/2018', 1, '2018-08-20 01:45:27', '::1'),
(673, 'update ', 'dasd dasdas das&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;img alt=&quot;&quot; src=&quot;https://localhost/panom/assets/file_upload/admin/images/img-thumb-travel.jpg&quot; style=&quot;width: 230px; height: 205px;&quot; /&gt;', 1, '2018-08-20 01:45:27', '::1'),
(674, 'update ', 'Shangri', 1, '2018-08-20 02:18:21', '::1'),
(675, 'update ', '12', 1, '2018-08-20 02:18:21', '::1'),
(676, 'update ', '19', 1, '2018-08-20 02:18:21', '::1'),
(677, 'update ', '29', 1, '2018-08-20 02:18:21', '::1'),
(678, 'update ', '43', 1, '2018-08-20 02:18:21', '::1'),
(679, 'update ', '45', 1, '2018-08-20 02:18:21', '::1'),
(680, 'update ', '47', 1, '2018-08-20 02:18:21', '::1'),
(681, 'update ', '/assets/file_upload/admin/images/img-logo-trump.jpg', 1, '2018-08-20 02:18:21', '::1'),
(682, 'update ', '/assets/file_upload/admin/images/img-latest-3.jpg', 1, '2018-08-20 02:18:21', '::1'),
(683, 'update ', 'dadasdasdsa', 1, '2018-08-20 02:18:21', '::1'),
(684, 'update ', 'ddsadadsa', 1, '2018-08-20 02:18:21', '::1'),
(685, 'update ', '42', 1, '2018-08-20 02:18:21', '::1'),
(686, 'update ', 'dadasdsa', 1, '2018-08-20 02:18:42', '::1'),
(687, 'update ', '13', 1, '2018-08-20 02:18:42', '::1'),
(688, 'update ', '27', 1, '2018-08-20 02:18:42', '::1'),
(689, 'update ', '36', 1, '2018-08-20 02:18:42', '::1'),
(690, 'update ', '44', 1, '2018-08-20 02:18:42', '::1'),
(691, 'update ', '45', 1, '2018-08-20 02:18:42', '::1'),
(692, 'update ', '48', 1, '2018-08-20 02:18:42', '::1'),
(693, 'update ', '/assets/file_upload/admin/images/img-logo-shangrila.jpg', 1, '2018-08-20 02:18:42', '::1'),
(694, 'update ', '/assets/file_upload/admin/images/img-latest-1.jpg', 1, '2018-08-20 02:18:42', '::1'),
(695, 'update ', 'dasdsada&amp;nbsp;', 1, '2018-08-20 02:18:42', '::1'),
(696, 'update ', '', 1, '2018-08-20 02:18:42', '::1'),
(697, 'update ', '41', 1, '2018-08-20 02:18:42', '::1'),
(698, 'Logout', 'superadmin | 1', 1, '2018-08-20 02:31:19', '::1'),
(699, 'Login', 'superadmin | 1', 1, '2018-08-20 02:32:26', '::1'),
(700, 'Logout', 'superadmin | 1', 1, '2018-08-20 02:32:43', '::1'),
(701, 'Login', 'Panomatic | 3', 5, '2018-08-20 02:32:59', '::1'),
(702, 'Login', 'superadmin | 1', 1, '2018-08-20 13:50:18', '::1'),
(703, 'Login', 'superadmin | 1', 1, '2018-08-21 18:43:29', '::1'),
(704, 'Active 48', '48 | Iframe | 1', 1, '2018-08-21 18:46:44', '::1'),
(705, 'Delete Module', '37 | Still Photography', 1, '2018-08-21 18:55:34', '::1'),
(706, 'Delete Module', '36 | Aerial', 1, '2018-08-21 18:55:43', '::1'),
(707, 'Active 49', '49 | technical specs | 1', 1, '2018-08-21 18:56:18', '::1'),
(708, 'Delete ', '51 | ', 1, '2018-08-21 18:56:57', '::1'),
(709, 'Delete ', '52 | ', 1, '2018-08-21 18:57:00', '::1'),
(710, 'Add ', '257 | Shangri La Boracay Resort', 1, '2018-08-21 18:58:20', '::1'),
(711, 'Add ', '258 | 14', 1, '2018-08-21 18:58:20', '::1'),
(712, 'Add ', '259 | 24', 1, '2018-08-21 18:58:20', '::1'),
(713, 'Add ', '260 | da sda&lt;br /&gt;\r\ndasd as&lt;br /&gt;\r\ndadsa', 1, '2018-08-21 18:58:20', '::1'),
(714, 'Add ', '261 | 35', 1, '2018-08-21 18:58:20', '::1'),
(715, 'Add ', '262 | 47', 1, '2018-08-21 18:58:20', '::1'),
(716, 'Add ', '263 | /assets/file_upload/admin/images/img-logo-shangrila.jpg', 1, '2018-08-21 18:58:20', '::1'),
(717, 'Add ', '264 | /assets/file_upload/admin/images/img-latest-4.jpg', 1, '2018-08-21 18:58:20', '::1'),
(718, 'Add ', '265 | as dadasdas', 1, '2018-08-21 18:58:20', '::1'),
(719, 'Add ', '266 | ddsadadsa', 1, '2018-08-21 18:58:20', '::1'),
(720, 'Add ', '267 | 42', 1, '2018-08-21 18:58:20', '::1'),
(721, 'Add ', '268 | https://youtu.be/KYCQFAnmg18', 1, '2018-08-21 18:58:20', '::1'),
(722, 'Active Product', '56 | 1', 1, '2018-08-21 18:58:23', '::1'),
(723, 'update ', 'Shangri La Boracay Resort', 1, '2018-08-21 19:04:14', '::1'),
(724, 'update ', '14', 1, '2018-08-21 19:04:14', '::1'),
(725, 'update ', '24', 1, '2018-08-21 19:04:14', '::1'),
(726, 'update ', 'da sda&lt;br /&gt;\r\ndasd as&lt;br /&gt;\r\ndadsa', 1, '2018-08-21 19:04:14', '::1'),
(727, 'update ', '35', 1, '2018-08-21 19:04:14', '::1'),
(728, 'update ', '47', 1, '2018-08-21 19:04:14', '::1'),
(729, 'update ', '/assets/file_upload/admin/images/img-logo-shangrila.jpg', 1, '2018-08-21 19:04:14', '::1'),
(730, 'update ', '/assets/file_upload/admin/images/img-latest-4.jpg', 1, '2018-08-21 19:04:14', '::1'),
(731, 'update ', 'as dadasdas', 1, '2018-08-21 19:04:14', '::1'),
(732, 'update ', 'ddsadadsa', 1, '2018-08-21 19:04:14', '::1'),
(733, 'update ', '42', 1, '2018-08-21 19:04:14', '::1');
INSERT INTO `tbl_log_cms` (`log_id_cms`, `log_module`, `log_value`, `user_id`, `log_create_date`, `ip`) VALUES
(734, 'update ', '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/2RB2lfxTeNg&quot; frameborder=&quot;0&quot; allow=&quot;autoplay; encrypted-media&quot; allowfullscreen&gt;&lt;/iframe&gt;', 1, '2018-08-21 19:04:14', '::1'),
(735, 'update ', 'Shangri La Boracay Resort', 1, '2018-08-21 19:11:49', '::1'),
(736, 'update ', '14', 1, '2018-08-21 19:11:49', '::1'),
(737, 'update ', '24', 1, '2018-08-21 19:11:49', '::1'),
(738, 'update ', 'da sda&lt;br /&gt;\r\ndasd as&lt;br /&gt;\r\ndadsa', 1, '2018-08-21 19:11:49', '::1'),
(739, 'update ', '35', 1, '2018-08-21 19:11:49', '::1'),
(740, 'update ', '47', 1, '2018-08-21 19:11:49', '::1'),
(741, 'update ', '/assets/file_upload/admin/images/img-logo-shangrila.jpg', 1, '2018-08-21 19:11:49', '::1'),
(742, 'update ', '/assets/file_upload/admin/images/img-latest-4.jpg', 1, '2018-08-21 19:11:49', '::1'),
(743, 'update ', 'as dadasdas', 1, '2018-08-21 19:11:49', '::1'),
(744, 'update ', 'ddsadadsa', 1, '2018-08-21 19:11:49', '::1'),
(745, 'update ', '42', 1, '2018-08-21 19:11:49', '::1'),
(746, 'update ', '&lt;iframe allow=&quot;autoplay; encrypted-media&quot; allowfullscreen=&quot;&quot; frameborder=&quot;0&quot; height=&quot;400&quot; src=&quot;https://www.youtube.com/embed/2RB2lfxTeNg&quot; width=&quot;560&quot;&gt;&lt;/iframe&gt;', 1, '2018-08-21 19:11:49', '::1'),
(747, 'update ', 'Shangri La Boracay Resort', 1, '2018-08-21 19:12:56', '::1'),
(748, 'update ', '14', 1, '2018-08-21 19:12:56', '::1'),
(749, 'update ', '24', 1, '2018-08-21 19:12:56', '::1'),
(750, 'update ', '360 Videos&lt;br&gt;\r\nCorporate Videos&lt;br&gt;\r\nHD Videos&lt;br&gt;', 1, '2018-08-21 19:12:56', '::1'),
(751, 'update ', '35', 1, '2018-08-21 19:12:56', '::1'),
(752, 'update ', '47', 1, '2018-08-21 19:12:56', '::1'),
(753, 'update ', '/assets/file_upload/admin/images/img-logo-shangrila.jpg', 1, '2018-08-21 19:12:56', '::1'),
(754, 'update ', '/assets/file_upload/admin/images/img-latest-4.jpg', 1, '2018-08-21 19:12:56', '::1'),
(755, 'update ', 'as dadasdas', 1, '2018-08-21 19:12:56', '::1'),
(756, 'update ', 'ddsadadsa', 1, '2018-08-21 19:12:56', '::1'),
(757, 'update ', '42', 1, '2018-08-21 19:12:56', '::1'),
(758, 'update ', '&lt;iframe allow=&quot;autoplay; encrypted-media&quot; allowfullscreen=&quot;&quot; frameborder=&quot;0&quot; height=&quot;400&quot; src=&quot;https://www.youtube.com/embed/2RB2lfxTeNg&quot; width=&quot;560&quot;&gt;&lt;/iframe&gt;', 1, '2018-08-21 19:12:56', '::1'),
(759, 'update ', 'Shangri La Boracay Resort', 1, '2018-08-21 19:16:40', '::1'),
(760, 'update ', '14', 1, '2018-08-21 19:16:40', '::1'),
(761, 'update ', '24', 1, '2018-08-21 19:16:40', '::1'),
(762, 'update ', '360 Videos&lt;br /&gt;\r\nCorporate Videos&lt;br /&gt;\r\nHD Videos', 1, '2018-08-21 19:16:40', '::1'),
(763, 'update ', '35', 1, '2018-08-21 19:16:40', '::1'),
(764, 'update ', '47', 1, '2018-08-21 19:16:40', '::1'),
(765, 'update ', '/assets/file_upload/admin/images/img-logo-shangrila.jpg', 1, '2018-08-21 19:16:40', '::1'),
(766, 'update ', '/assets/file_upload/admin/images/img-latest-4.jpg', 1, '2018-08-21 19:16:40', '::1'),
(767, 'update ', 'Panomatics high end video production does let the viewer escape to somewhere secluded, where a canvas of blue skies and turquoise sea meet, where island paradise is exactly how it always has been imagined. Stunning aerial drone footage does entice the viewer and emphasis the resorts beauty and stunning location. A world of new experiences is laid out to the viewer`s feet. Breathtaking nature meets with&amp;nbsp;high end luxury.&amp;nbsp;Each of Shangri-La&amp;#39;s restaurants is thoughtfully placed to emphasize the hotel&amp;#39;s best views. Eat amid the treetops at Rima, or dive into fresh seafood while watching the waves crash into the cliffs below at Sirena.&amp;nbsp;Shangri-La provides everything required to pamper their guests after spending the day exploring the island and ocean. CHI-The Spa features a wide array of slow, careful treatments based on Chinese and native Philippines healing concepts. Let our stunning video tell the story and immerse into this spectacular experience.&lt;br /&gt;\r\n&amp;nbsp;', 1, '2018-08-21 19:16:40', '::1'),
(768, 'update ', 'ddsadadsa', 1, '2018-08-21 19:16:40', '::1'),
(769, 'update ', '42', 1, '2018-08-21 19:16:40', '::1'),
(770, 'update ', '&lt;iframe allow=&quot;autoplay; encrypted-media&quot; allowfullscreen=&quot;&quot; frameborder=&quot;0&quot; height=&quot;400&quot; src=&quot;https://www.youtube.com/embed/2RB2lfxTeNg&quot; width=&quot;560&quot;&gt;&lt;/iframe&gt;', 1, '2018-08-21 19:16:40', '::1'),
(771, 'update ', 'Shangri La Boracay Resort', 1, '2018-08-21 19:19:55', '::1'),
(772, 'update ', '14', 1, '2018-08-21 19:19:55', '::1'),
(773, 'update ', '24', 1, '2018-08-21 19:19:55', '::1'),
(774, 'update ', '360 Videos&lt;br /&gt;\r\nCorporate Videos&lt;br /&gt;\r\nHD Videos', 1, '2018-08-21 19:19:55', '::1'),
(775, 'update ', '35', 1, '2018-08-21 19:19:55', '::1'),
(776, 'update ', '47', 1, '2018-08-21 19:19:55', '::1'),
(777, 'update ', '/assets/file_upload/admin/images/img-logo-shangrila.jpg', 1, '2018-08-21 19:19:55', '::1'),
(778, 'update ', '/assets/file_upload/admin/images/img-latest-4.jpg', 1, '2018-08-21 19:19:55', '::1'),
(779, 'update ', 'Panomatics high end video production does let the viewer escape to somewhere secluded, where a canvas of blue skies and turquoise sea meet, where island paradise is exactly how it always has been imagined. Stunning aerial drone footage does entice the viewer and emphasis the resorts beauty and stunning location. A world of new experiences is laid out to the viewer`s feet. Breathtaking nature meets with&amp;nbsp;high end luxury.&amp;nbsp;Each of Shangri-La&amp;#39;s restaurants is thoughtfully placed to emphasize the hotel&amp;#39;s best views. Eat amid the treetops at Rima, or dive into fresh seafood while watching the waves crash into the cliffs below at Sirena.&amp;nbsp;Shangri-La provides everything required to pamper their guests after spending the day exploring the island and ocean. CHI-The Spa features a wide array of slow, careful treatments based on Chinese and native Philippines healing concepts. Let our stunning video tell the story and immerse into this spectacular experience.&lt;br /&gt;\r\n&amp;nbsp;', 1, '2018-08-21 19:19:55', '::1'),
(780, 'update ', 'ddsadadsa', 1, '2018-08-21 19:19:55', '::1'),
(781, 'update ', '42', 1, '2018-08-21 19:19:55', '::1'),
(782, 'update ', 'https://www.youtube.com/embed/2RB2lfxTeNg', 1, '2018-08-21 19:19:55', '::1'),
(783, 'update ', 'Shangri La Boracay Resort', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(784, 'update ', '14', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(785, 'update ', '24', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(786, 'update ', '360 Videos&lt;br /&gt;\r\nCorporate Videos&lt;br /&gt;\r\nHD Videos', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(787, 'update ', '35', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(788, 'update ', '47', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(789, 'update ', '/assets/file_upload/admin/images/img-logo-shangrila.jpg', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(790, 'update ', '/assets/file_upload/admin/images/img-latest-4.jpg', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(791, 'update ', 'Panomatics high end video production does let the viewer escape to somewhere secluded, where a canvas of blue skies and turquoise sea meet, where island paradise is exactly how it always has been imagined. Stunning aerial drone footage does entice the viewer and emphasis the resorts beauty and stunning location. A world of new experiences is laid out to the viewer`s feet. Breathtaking nature meets with&amp;nbsp;high end luxury.&amp;nbsp;Each of Shangri-La&amp;#39;s restaurants is thoughtfully placed to emphasize the hotel&amp;#39;s best views. Eat amid the treetops at Rima, or dive into fresh seafood while watching the waves crash into the cliffs below at Sirena.&amp;nbsp;Shangri-La provides everything required to pamper their guests after spending the day exploring the island and ocean. CHI-The Spa features a wide array of slow, careful treatments based on Chinese and native Philippines healing concepts. Let our stunning video tell the story and immerse into this spectacular experience.&lt;br /&gt;\r\n&amp;nbsp;', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(792, 'update ', 'Panomatic.com', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(793, 'update ', '42', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(794, 'update ', 'https://www.youtube.com/embed/2RB2lfxTeNg', 1, '2018-08-21 19:28:15', '172.68.146.49'),
(795, 'Active 50', '50 | client | 1', 1, '2018-08-21 19:32:12', '172.68.146.49'),
(796, 'update ', 'Shangri La Boracay Resort', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(797, 'update ', '14', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(798, 'update ', '24', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(799, 'update ', '360 Videos&lt;br /&gt;\r\nCorporate Videos&lt;br /&gt;\r\nHD Videos', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(800, 'update ', '35', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(801, 'update ', '47', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(802, 'update ', '/assets/file_upload/admin/images/img-logo-shangrila.jpg', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(803, 'update ', '/assets/file_upload/admin/images/img-latest-4.jpg', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(804, 'update ', 'Panomatics high end video production does let the viewer escape to somewhere secluded, where a canvas of blue skies and turquoise sea meet, where island paradise is exactly how it always has been imagined. Stunning aerial drone footage does entice the viewer and emphasis the resorts beauty and stunning location. A world of new experiences is laid out to the viewer`s feet. Breathtaking nature meets with&amp;nbsp;high end luxury.&amp;nbsp;Each of Shangri-La&amp;#39;s restaurants is thoughtfully placed to emphasize the hotel&amp;#39;s best views. Eat amid the treetops at Rima, or dive into fresh seafood while watching the waves crash into the cliffs below at Sirena.&amp;nbsp;Shangri-La provides everything required to pamper their guests after spending the day exploring the island and ocean. CHI-The Spa features a wide array of slow, careful treatments based on Chinese and native Philippines healing concepts. Let our stunning video tell the story and immerse into this spectacular experience.&lt;br /&gt;\r\n&amp;nbsp;', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(805, 'update ', 'Panomatic.com', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(806, 'update ', '42', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(807, 'update ', 'https://www.youtube.com/embed/2RB2lfxTeNg', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(808, 'update ', 'shangri la', 1, '2018-08-21 19:32:42', '172.68.146.49'),
(809, 'Login', 'superadmin | 1', 1, '2018-08-22 20:36:04', '162.158.165.21'),
(810, 'update ', 'Shangri La Boracay Resort', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(811, 'update ', '14', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(812, 'update ', '24', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(813, 'update ', '360 Videos&lt;br /&gt;\r\nCorporate Videos&lt;br /&gt;\r\nHD Videos', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(814, 'update ', '35', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(815, 'update ', '47', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(816, 'update ', '/assets/file_upload/admin/images/img-logo-shangrila.jpg', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(817, 'update ', '/assets/file_upload/admin/images/img-latest-4.jpg', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(818, 'update ', 'Panomatics high end video production does let the viewer escape to somewhere secluded, where a canvas of blue skies and turquoise sea meet, where island paradise is exactly how it always has been imagined. Stunning aerial drone footage does entice the viewer and emphasis the resorts beauty and stunning location. A world of new experiences is laid out to the viewer`s feet. Breathtaking nature meets with&amp;nbsp;high end luxury.&amp;nbsp;Each of Shangri-La&amp;#39;s restaurants is thoughtfully placed to emphasize the hotel&amp;#39;s best views. Eat amid the treetops at Rima, or dive into fresh seafood while watching the waves crash into the cliffs below at Sirena.&amp;nbsp;Shangri-La provides everything required to pamper their guests after spending the day exploring the island and ocean. CHI-The Spa features a wide array of slow, careful treatments based on Chinese and native Philippines healing concepts. Let our stunning video tell the story and immerse into this spectacular experience.&lt;br /&gt;\r\n&amp;nbsp;', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(819, 'update ', 'Panomatic.com', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(820, 'update ', '41', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(821, 'update ', 'https://www.youtube.com/embed/2RB2lfxTeNg', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(822, 'update ', 'shangri la', 1, '2018-08-22 20:36:45', '162.158.165.21'),
(823, 'Login', 'superadmin | 1', 1, '2018-08-23 10:46:36', '172.68.144.192'),
(824, 'Add ', '270 | Niyama Private Islands Maldives', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(825, 'Add ', '271 | 12', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(826, 'Add ', '272 | 21', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(827, 'Add ', '273 | &lt;p&gt;Hotspots&lt;br /&gt;\r\nInteractive Stylesheet&lt;br /&gt;\r\nAerial&lt;br /&gt;\r\nMusic&lt;/p&gt;', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(828, 'Add ', '274 | 35', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(829, 'Add ', '275 | ', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(830, 'Add ', '276 | /assets/file_upload/admin/images/LOGO/logo-niyama.jpg', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(831, 'Add ', '277 | /assets/file_upload/admin/images/IMAGE WEBSITE/niyama-tumbnail.jpg', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(832, 'Add ', '278 | An island for a very private and personal one-of-a-kind experience!&amp;nbsp;Niyama Private Islands Maldives does impress by the luxury of choice.&amp;nbsp;Panomatics stunning aerial footage shows the amazing twin islands Play and Chill nestled beautiful within the turquoise Maldivian ocean.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe high end 360 virtual tour shows brilliantly all fantastic facilities and luxurious accommodations this resort has to offer.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe explorer finds himself amongst lush treetops, enjoying&amp;nbsp;Asian avant-garde cuisines, Teppanyaki, Thai, Chinese and Indonesian cuisine. At TRIBAL fine dining&amp;nbsp;a&amp;nbsp;Maasai warrior welcomes the guest with a Dawa, East Africa&amp;rsquo;s to-lust-for cocktail, drenching taste buds with honey and lime.&amp;nbsp; Panomatics 360 photography showcases the Splendid villas which are set on white sands. Modern studios are placed over the ocean with direct lagoon access.&lt;br /&gt;\r\n&lt;br /&gt;\r\nHere&amp;nbsp;the adventurous honeymooners, active couples and style-savvy families&amp;nbsp;can discover an island niche and settle in, or jump back and forth between high-energy indulgences and cool serenity. This&amp;nbsp;virtual tour is unique and distinguished by incorporating additional informative content and layers through the use of 360 VR videos, multi-lingual text banners, menus, music, links to reservation systems and much more.', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(833, 'Add ', '279 | ', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(834, 'Add ', '280 | 42', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(835, 'Add ', '281 | http://www.panomatics.com/nextgen/maldives/niyama/index-web.html', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(836, 'Add ', '282 | Niyama', 1, '2018-08-23 10:54:46', '172.68.144.192'),
(837, 'Active Product', '57 | 1', 1, '2018-08-23 10:54:51', '172.68.144.192'),
(838, 'update ', 'Niyama Private Islands Maldives', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(839, 'update ', '12', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(840, 'update ', '21', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(841, 'update ', '&lt;p&gt;Hotspots&lt;br /&gt;\r\nInteractive Stylesheet&lt;br /&gt;\r\nAerial&lt;br /&gt;\r\nMusic&lt;/p&gt;', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(842, 'update ', '35', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(843, 'update ', '', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(844, 'update ', '/assets/file_upload/admin/images/LOGO/logo-niyama.jpg', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(845, 'update ', '/assets/file_upload/admin/images/IMAGE WEBSITE/niyama-tumbnail.jpg', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(846, 'update ', 'An island for a very private and personal one-of-a-kind experience!&amp;nbsp;Niyama Private Islands Maldives does impress by the luxury of choice.&amp;nbsp;Panomatics stunning aerial footage shows the amazing twin islands Play and Chill nestled beautiful within the turquoise Maldivian ocean.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe high end 360 virtual tour shows brilliantly all fantastic facilities and luxurious accommodations this resort has to offer.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe explorer finds himself amongst lush treetops, enjoying&amp;nbsp;Asian avant-garde cuisines, Teppanyaki, Thai, Chinese and Indonesian cuisine. At TRIBAL fine dining&amp;nbsp;a&amp;nbsp;Maasai warrior welcomes the guest with a Dawa, East Africa&amp;rsquo;s to-lust-for cocktail, drenching taste buds with honey and lime.&amp;nbsp; Panomatics 360 photography showcases the Splendid villas which are set on white sands. Modern studios are placed over the ocean with direct lagoon access.&lt;br /&gt;\r\n&lt;br /&gt;\r\nHere&amp;nbsp;the adventurous honeymooners, active couples and style-savvy families&amp;nbsp;can discover an island niche and settle in, or jump back and forth between high-energy indulgences and cool serenity. This&amp;nbsp;virtual tour is unique and distinguished by incorporating additional informative content and layers through the use of 360 VR videos, multi-lingual text banners, menus, music, links to reservation systems and much more.', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(847, 'update ', '', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(848, 'update ', '42', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(849, 'update ', '&lt;iframe width=&quot;100%&quot; height=&quot;100%&quot; src=&quot;http://www.panomatics.com/nextgen/maldives/niyama/index-web.html&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(850, 'update ', 'Niyama', 1, '2018-08-23 10:57:47', '172.68.144.192'),
(851, 'update ', 'Niyama Private Islands Maldives', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(852, 'update ', '12', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(853, 'update ', '21', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(854, 'update ', '&lt;p&gt;Hotspots&lt;br /&gt;\r\nInteractive Stylesheet&lt;br /&gt;\r\nAerial&lt;br /&gt;\r\nMusic&lt;/p&gt;', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(855, 'update ', '35', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(856, 'update ', '', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(857, 'update ', '/assets/file_upload/admin/images/LOGO/logo-niyama.jpg', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(858, 'update ', '/assets/file_upload/admin/images/IMAGE WEBSITE/niyama-tumbnail.jpg', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(859, 'update ', 'An island for a very private and personal one-of-a-kind experience!&amp;nbsp;Niyama Private Islands Maldives does impress by the luxury of choice.&amp;nbsp;Panomatics stunning aerial footage shows the amazing twin islands Play and Chill nestled beautiful within the turquoise Maldivian ocean.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe high end 360 virtual tour shows brilliantly all fantastic facilities and luxurious accommodations this resort has to offer.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe explorer finds himself amongst lush treetops, enjoying&amp;nbsp;Asian avant-garde cuisines, Teppanyaki, Thai, Chinese and Indonesian cuisine. At TRIBAL fine dining&amp;nbsp;a&amp;nbsp;Maasai warrior welcomes the guest with a Dawa, East Africa&amp;rsquo;s to-lust-for cocktail, drenching taste buds with honey and lime.&amp;nbsp; Panomatics 360 photography showcases the Splendid villas which are set on white sands. Modern studios are placed over the ocean with direct lagoon access.&lt;br /&gt;\r\n&lt;br /&gt;\r\nHere&amp;nbsp;the adventurous honeymooners, active couples and style-savvy families&amp;nbsp;can discover an island niche and settle in, or jump back and forth between high-energy indulgences and cool serenity. This&amp;nbsp;virtual tour is unique and distinguished by incorporating additional informative content and layers through the use of 360 VR videos, multi-lingual text banners, menus, music, links to reservation systems and much more.', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(860, 'update ', 'panomatic.com', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(861, 'update ', '42', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(862, 'update ', '&lt;iframe allowfullscreen=&quot;&quot; frameborder=&quot;0&quot; height=&quot;100%&quot; src=&quot;http://www.panomatics.com/nextgen/maldives/niyama/index-web.html&quot; width=&quot;100%&quot;&gt;&lt;/iframe&gt;', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(863, 'update ', 'Niyama', 1, '2018-08-23 11:00:12', '172.68.144.192'),
(864, 'update ', 'Niyama Private Islands Maldives', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(865, 'update ', '12', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(866, 'update ', '21', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(867, 'update ', '&lt;p&gt;Hotspots&lt;br /&gt;\r\nInteractive Stylesheet&lt;br /&gt;\r\nAerial&lt;br /&gt;\r\nMusic&lt;/p&gt;', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(868, 'update ', '35', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(869, 'update ', '', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(870, 'update ', '/assets/file_upload/admin/images/LOGO/logo-niyama.jpg', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(871, 'update ', '/assets/file_upload/admin/images/IMAGE WEBSITE/niyama-tumbnail.jpg', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(872, 'update ', 'An island for a very private and personal one-of-a-kind experience!&amp;nbsp;Niyama Private Islands Maldives does impress by the luxury of choice.&amp;nbsp;Panomatics stunning aerial footage shows the amazing twin islands Play and Chill nestled beautiful within the turquoise Maldivian ocean.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe high end 360 virtual tour shows brilliantly all fantastic facilities and luxurious accommodations this resort has to offer.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe explorer finds himself amongst lush treetops, enjoying&amp;nbsp;Asian avant-garde cuisines, Teppanyaki, Thai, Chinese and Indonesian cuisine. At TRIBAL fine dining&amp;nbsp;a&amp;nbsp;Maasai warrior welcomes the guest with a Dawa, East Africa&amp;rsquo;s to-lust-for cocktail, drenching taste buds with honey and lime.&amp;nbsp; Panomatics 360 photography showcases the Splendid villas which are set on white sands. Modern studios are placed over the ocean with direct lagoon access.&lt;br /&gt;\r\n&lt;br /&gt;\r\nHere&amp;nbsp;the adventurous honeymooners, active couples and style-savvy families&amp;nbsp;can discover an island niche and settle in, or jump back and forth between high-energy indulgences and cool serenity. This&amp;nbsp;virtual tour is unique and distinguished by incorporating additional informative content and layers through the use of 360 VR videos, multi-lingual text banners, menus, music, links to reservation systems and much more.', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(873, 'update ', 'panomatic.com', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(874, 'update ', '42', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(875, 'update ', 'www.panomatics.com/nextgen/maldives/niyama/index-web.html', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(876, 'update ', 'Niyama', 1, '2018-08-23 13:15:26', '162.158.165.99'),
(877, 'Login', 'superadmin | 1', 1, '2018-08-23 13:23:48', '172.69.134.128'),
(878, 'Delete Module', '41 | Other Services', 1, '2018-08-23 13:25:15', '172.69.134.128'),
(879, 'update ', 'Niyama Private Islands Maldives', 1, '2018-08-23 13:37:39', '172.69.134.128'),
(880, 'update ', '12', 1, '2018-08-23 13:37:40', '172.69.134.128'),
(881, 'update ', '21', 1, '2018-08-23 13:37:40', '172.69.134.128'),
(882, 'update ', '35', 1, '2018-08-23 13:37:40', '172.69.134.128'),
(883, 'update ', '&lt;p&gt;Hotspots&lt;br /&gt;\r\nInteractive Stylesheet&lt;br /&gt;\r\nAerial&lt;br /&gt;\r\nMusic&lt;/p&gt;', 1, '2018-08-23 13:37:40', '172.69.134.128'),
(884, 'update ', '/assets/file_upload/admin/images/LOGO/logo-niyama.jpg', 1, '2018-08-23 13:37:40', '172.69.134.128'),
(885, 'update ', '/assets/file_upload/admin/images/IMAGE WEBSITE/niyama-tumbnail.jpg', 1, '2018-08-23 13:37:40', '172.69.134.128'),
(886, 'update ', 'An island for a very private and personal one-of-a-kind experience!&amp;nbsp;Niyama Private Islands Maldives does impress by the luxury of choice.&amp;nbsp;Panomatics stunning aerial footage shows the amazing twin islands Play and Chill nestled beautiful within the turquoise Maldivian ocean.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe high end 360 virtual tour shows brilliantly all fantastic facilities and luxurious accommodations this resort has to offer.&lt;br /&gt;\r\n&lt;br /&gt;\r\nThe explorer finds himself amongst lush treetops, enjoying&amp;nbsp;Asian avant-garde cuisines, Teppanyaki, Thai, Chinese and Indonesian cuisine. At TRIBAL fine dining&amp;nbsp;a&amp;nbsp;Maasai warrior welcomes the guest with a Dawa, East Africa&amp;rsquo;s to-lust-for cocktail, drenching taste buds with honey and lime.&amp;nbsp; Panomatics 360 photography showcases the Splendid villas which are set on white sands. Modern studios are placed over the ocean with direct lagoon access.&lt;br /&gt;\r\n&lt;br /&gt;\r\nHere&amp;nbsp;the adventurous honeymooners, active couples and style-savvy families&amp;nbsp;can discover an island niche and settle in, or jump back and forth between high-energy indulgences and cool serenity. This&amp;nbsp;virtual tour is unique and distinguished by incorporating additional informative content and layers through the use of 360 VR videos, multi-lingual text banners, menus, music, links to reservation systems and much more.', 1, '2018-08-23 13:37:40', '172.69.134.128'),
(887, 'update ', 'panomatic.com', 1, '2018-08-23 13:37:40', '172.69.134.128'),
(888, 'update ', '42', 1, '2018-08-23 13:37:40', '172.69.134.128'),
(889, 'update ', 'www.panomatics.com/nextgen/maldives/niyama/index-web.html', 1, '2018-08-23 13:37:40', '172.69.134.128'),
(890, 'update ', 'Niyama', 1, '2018-08-23 13:37:40', '172.69.134.128');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `menu_title` varchar(50) NOT NULL,
  `menu_active_status` tinyint(1) NOT NULL DEFAULT '0',
  `menu_url` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `menu_alias` varchar(200) NOT NULL,
  `menu_parent` tinyint(2) NOT NULL DEFAULT '0',
  `menu_sub_parent` int(10) NOT NULL,
  `menu_order` tinyint(2) NOT NULL DEFAULT '1',
  `menu_create_date` datetime NOT NULL,
  `menu_create_by` int(11) NOT NULL,
  `menu_update_date` datetime DEFAULT NULL,
  `menu_update_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `module_id`, `menu_title`, `menu_active_status`, `menu_url`, `menu_alias`, `menu_parent`, `menu_sub_parent`, `menu_order`, `menu_create_date`, `menu_create_by`, `menu_update_date`, `menu_update_by`) VALUES
(63, 29, 'Gallery', 1, 'https://localhost/bestwest/Gallery', 'gallery', 0, 0, 7, '2016-08-18 13:34:46', 1, '2018-01-22 00:53:22', 1),
(67, 36, 'Services', 1, 'https://localhost/agency/Services', 'services', 0, 0, 1, '2017-03-07 09:37:38', 1, '2018-03-03 03:34:00', 1),
(54, 17, 'Dining', 1, 'http://localhost/bestwest/Dining', 'dining', 0, 0, 4, '2016-04-14 15:13:42', 1, '2018-01-22 00:48:04', 1),
(71, 0, 'Reservation', 1, 'https://www.bestwestern.com/en_US/book/hotel-details.99044.html', 'reservation', 0, 0, 6, '2017-03-07 15:18:21', 1, '2017-03-27 16:34:47', 1),
(62, 41, 'Dokumen', 1, 'https://localhost/agency/Services/Dokumen', 'dokumen', 67, 0, 3, '2016-08-17 19:18:36', 1, '2018-03-14 14:28:49', 1),
(64, 33, 'Offers', 1, 'https://bwmakassarbeach.com/Offers', 'offers', 0, 0, 5, '2016-08-24 03:12:47', 1, '2017-03-27 16:35:00', 1),
(66, 35, 'Contact', 1, 'http://localhost/bestwest/Contact', 'contact', 0, 0, 9, '2016-08-25 22:04:49', 1, '2017-07-31 18:49:31', 1),
(69, 38, 'Location', 1, 'http://localhost/bestwest/Location', 'location', 0, 0, 8, '2017-03-07 14:59:43', 1, '2017-05-30 20:30:49', 1),
(70, 38, 'NEARBY ATTRACTIONS', 1, 'http://localhost/bestwest/Location/NEARBYATTRACTIONS', 'nearby-attractions', 69, 0, 1, '2017-03-07 15:01:30', 1, '2017-05-30 20:05:45', 1),
(79, 36, 'Terjemahan', 1, 'https://localhost/agency/Services/Terjemahan', 'terjemahan', 67, 0, 3, '2017-03-13 17:11:43', 1, '2018-03-03 03:23:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module`
--

CREATE TABLE `tbl_module` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_path` varchar(255) NOT NULL,
  `module_type` tinyint(4) NOT NULL DEFAULT '0',
  `module_active_status` int(1) NOT NULL,
  `module_order_value` int(5) NOT NULL DEFAULT '1',
  `module_create_date` datetime NOT NULL,
  `module_create_by` int(11) NOT NULL,
  `module_update_date` datetime DEFAULT NULL,
  `module_update_by` int(11) DEFAULT NULL,
  `module_group_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_module`
--

INSERT INTO `tbl_module` (`module_id`, `module_name`, `module_path`, `module_type`, `module_active_status`, `module_order_value`, `module_create_date`, `module_create_by`, `module_update_date`, `module_update_by`, `module_group_id`) VALUES
(1, 'General', 'general', 0, 1, 1, '2015-10-07 13:09:17', 1, '2018-05-21 21:37:46', 1, 2),
(2, 'Log CMS', 'Log_cms', 0, 1, 2, '2015-10-07 13:10:39', 1, '2018-05-21 21:37:46', 1, 2),
(102, 'Blog', 'Blog', 0, 1, 1, '2018-08-13 16:32:21', 1, NULL, NULL, 6),
(4, 'Menu', 'Menu_frontend', 0, 1, 2, '2017-03-16 16:08:01', 1, '2018-05-21 21:37:46', 1, 2),
(100, 'Product', 'Product', 0, 1, 1, '2018-08-06 16:02:58', 1, NULL, NULL, 5),
(0, 'undifined', 'undifined', 0, 1, 99, '0000-00-00 00:00:00', 0, '2018-05-21 21:37:46', 1, 1),
(99, 'Client', 'Client', 0, 1, 1, '2018-08-18 01:12:13', 1, NULL, NULL, 4),
(103, 'Banner', 'Banner', 0, 1, 1, '2018-08-18 01:12:51', 1, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module_group`
--

CREATE TABLE `tbl_module_group` (
  `module_group_id` int(11) NOT NULL,
  `module_group_name` varchar(255) NOT NULL,
  `module_group_active_status` int(1) NOT NULL,
  `module_group_order_value` int(5) NOT NULL DEFAULT '1',
  `module_group_images` varchar(255) DEFAULT NULL,
  `module_group_create_date` datetime NOT NULL,
  `module_group_create_by` int(11) NOT NULL,
  `module_group_update_date` datetime DEFAULT NULL,
  `module_group_update_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_module_group`
--

INSERT INTO `tbl_module_group` (`module_group_id`, `module_group_name`, `module_group_active_status`, `module_group_order_value`, `module_group_images`, `module_group_create_date`, `module_group_create_by`, `module_group_update_date`, `module_group_update_by`) VALUES
(2, 'Configuration Management', 1, 1, NULL, '2015-10-07 13:07:34', 1, '2018-05-25 09:39:44', 1),
(3, 'Home Management', 1, 2, NULL, '2015-10-07 13:12:23', 1, '2018-05-25 09:39:44', 1),
(1, 'undifined', 0, 1, NULL, '0000-00-00 00:00:00', 0, '2018-05-25 09:39:44', 1),
(4, 'Client Management', 1, 1, NULL, '2018-07-13 14:04:57', 1, '2018-08-19 23:50:05', 1),
(5, 'Product', 1, 1, NULL, '2018-08-06 16:02:42', 1, NULL, NULL),
(6, 'Blog', 1, 1, NULL, '2018-08-13 16:32:04', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module_privilege`
--

CREATE TABLE `tbl_module_privilege` (
  `module_privilege_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  `module_privilege_create_date` datetime NOT NULL,
  `module_privilege_create_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_module_privilege`
--

INSERT INTO `tbl_module_privilege` (`module_privilege_id`, `module_id`, `privilege_id`, `module_privilege_create_date`, `module_privilege_create_by`) VALUES
(9, 15, 1, '2017-03-01 14:16:11', 1),
(10, 15, 2, '2017-03-01 14:16:11', 1),
(11, 15, 3, '2017-03-01 14:16:11', 1),
(12, 15, 4, '2017-03-01 14:16:11', 1),
(13, 15, 5, '2017-03-01 14:16:11', 1),
(14, 15, 6, '2017-03-01 14:16:11', 1),
(15, 15, 7, '2017-03-01 14:16:11', 1),
(16, 15, 8, '2017-03-01 14:16:11', 1),
(609, 4, 1, '2018-06-04 21:11:29', 1),
(610, 4, 2, '2018-06-04 21:11:29', 1),
(611, 4, 3, '2018-06-04 21:11:29', 1),
(612, 4, 4, '2018-06-04 21:11:29', 1),
(613, 4, 5, '2018-06-04 21:11:29', 1),
(614, 4, 6, '2018-06-04 21:11:29', 1),
(615, 4, 7, '2018-06-04 21:11:29', 1),
(616, 4, 8, '2018-06-04 21:11:29', 1),
(25, 3, 1, '2017-03-01 14:16:42', 1),
(26, 3, 2, '2017-03-01 14:16:42', 1),
(27, 3, 3, '2017-03-01 14:16:42', 1),
(28, 3, 4, '2017-03-01 14:16:42', 1),
(29, 3, 5, '2017-03-01 14:16:42', 1),
(30, 3, 6, '2017-03-01 14:16:42', 1),
(31, 3, 7, '2017-03-01 14:16:42', 1),
(32, 3, 8, '2017-03-01 14:16:42', 1),
(48, 2, 8, '2017-03-01 14:18:15', 1),
(47, 2, 7, '2017-03-01 14:18:15', 1),
(46, 2, 6, '2017-03-01 14:18:15', 1),
(45, 2, 5, '2017-03-01 14:18:15', 1),
(44, 2, 4, '2017-03-01 14:18:15', 1),
(43, 2, 3, '2017-03-01 14:18:15', 1),
(42, 2, 2, '2017-03-01 14:18:15', 1),
(41, 2, 1, '2017-03-01 14:18:15', 1),
(49, 1, 1, '2017-03-01 14:18:31', 1),
(50, 1, 2, '2017-03-01 14:18:31', 1),
(51, 1, 3, '2017-03-01 14:18:31', 1),
(52, 1, 4, '2017-03-01 14:18:31', 1),
(53, 1, 5, '2017-03-01 14:18:31', 1),
(54, 1, 6, '2017-03-01 14:18:31', 1),
(55, 1, 7, '2017-03-01 14:18:31', 1),
(56, 1, 8, '2017-03-01 14:18:31', 1),
(81, 17, 1, '2017-03-01 15:56:28', 1),
(82, 17, 2, '2017-03-01 15:56:28', 1),
(83, 17, 3, '2017-03-01 15:56:28', 1),
(84, 17, 4, '2017-03-01 15:56:28', 1),
(85, 17, 5, '2017-03-01 15:56:28', 1),
(86, 17, 6, '2017-03-01 15:56:28', 1),
(87, 17, 7, '2017-03-01 15:56:28', 1),
(88, 17, 8, '2017-03-01 15:56:28', 1),
(656, 102, 8, '2018-08-13 16:32:30', 1),
(655, 102, 7, '2018-08-13 16:32:30', 1),
(654, 102, 6, '2018-08-13 16:32:30', 1),
(653, 102, 5, '2018-08-13 16:32:30', 1),
(652, 102, 4, '2018-08-13 16:32:30', 1),
(651, 102, 3, '2018-08-13 16:32:30', 1),
(650, 102, 2, '2018-08-13 16:32:30', 1),
(649, 102, 1, '2018-08-13 16:32:30', 1),
(648, 100, 8, '2018-08-06 16:03:08', 1),
(647, 100, 7, '2018-08-06 16:03:08', 1),
(646, 100, 6, '2018-08-06 16:03:08', 1),
(645, 100, 5, '2018-08-06 16:03:08', 1),
(644, 100, 4, '2018-08-06 16:03:08', 1),
(643, 100, 3, '2018-08-06 16:03:08', 1),
(642, 100, 2, '2018-08-06 16:03:08', 1),
(641, 100, 1, '2018-08-06 16:03:08', 1),
(640, 99, 8, '2018-07-25 13:17:24', 1),
(639, 99, 7, '2018-07-25 13:17:24', 1),
(638, 99, 6, '2018-07-25 13:17:24', 1),
(637, 99, 5, '2018-07-25 13:17:24', 1),
(636, 99, 4, '2018-07-25 13:17:24', 1),
(635, 99, 3, '2018-07-25 13:17:24', 1),
(634, 99, 2, '2018-07-25 13:17:24', 1),
(633, 99, 1, '2018-07-25 13:17:24', 1),
(632, 98, 8, '2018-07-13 18:40:53', 1),
(631, 98, 7, '2018-07-13 18:40:53', 1),
(630, 98, 6, '2018-07-13 18:40:53', 1),
(629, 98, 5, '2018-07-13 18:40:53', 1),
(628, 98, 4, '2018-07-13 18:40:53', 1),
(627, 98, 3, '2018-07-13 18:40:53', 1),
(626, 98, 2, '2018-07-13 18:40:53', 1),
(625, 98, 1, '2018-07-13 18:40:53', 1),
(657, 103, 1, '2018-08-18 01:14:23', 1),
(658, 103, 2, '2018-08-18 01:14:23', 1),
(659, 103, 3, '2018-08-18 01:14:23', 1),
(660, 103, 4, '2018-08-18 01:14:23', 1),
(661, 103, 5, '2018-08-18 01:14:23', 1),
(662, 103, 6, '2018-08-18 01:14:23', 1),
(663, 103, 7, '2018-08-18 01:14:23', 1),
(664, 103, 8, '2018-08-18 01:14:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_options`
--

CREATE TABLE `tbl_options` (
  `options_id` int(11) NOT NULL,
  `label_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `options_value` varchar(100) NOT NULL,
  `options_title` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_options`
--

INSERT INTO `tbl_options` (`options_id`, `label_id`, `type_id`, `options_value`, `options_title`) VALUES
(42, 35, 6, '', 'Public'),
(12, 28, 6, '', 'Virtual Tour'),
(13, 28, 6, '', '360 Vr Video'),
(14, 28, 6, '', 'Videos'),
(15, 28, 6, '', 'Google Tours'),
(41, 35, 6, '', 'private'),
(16, 29, 6, '', 'China'),
(17, 29, 6, '', 'E U'),
(18, 29, 6, '', 'Hong Kong'),
(19, 29, 6, '', 'Indonesia'),
(20, 29, 6, '', 'Macau'),
(21, 29, 6, '', 'Maldives'),
(22, 29, 6, '', 'Midle East'),
(23, 29, 6, '', 'New Zealand'),
(24, 29, 6, '', 'Philippines'),
(25, 29, 6, '', 'Singapore'),
(26, 29, 6, '', 'Srilanka'),
(27, 29, 6, '', 'Thailand'),
(28, 29, 6, '', 'USA'),
(29, 30, 6, '', 'Arts/galleries'),
(30, 30, 6, '', 'Attraction'),
(31, 30, 6, '', 'Cities'),
(32, 30, 6, '', 'Education'),
(33, 30, 6, '', 'Events'),
(34, 30, 6, '', 'Factory'),
(35, 30, 6, '', 'Hotels'),
(36, 30, 6, '', 'Medical/Beauty'),
(37, 30, 6, '', 'Property'),
(38, 30, 6, '', 'Restauran'),
(39, 30, 6, '', 'Shops'),
(40, 30, 6, '', 'Top Tours'),
(43, 36, 6, '', 'lorem 1'),
(44, 36, 6, '', 'lorem 2'),
(45, 37, 6, '', 'lorem 3'),
(46, 37, 6, '', 'lorem 4'),
(47, 41, 6, '', 'serv 1'),
(48, 41, 6, '', 'Serv 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_privilege`
--

CREATE TABLE `tbl_privilege` (
  `privilege_id` int(11) NOT NULL,
  `privilege_name` varchar(255) NOT NULL,
  `privilege_create_date` datetime NOT NULL,
  `privilege_create_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_privilege`
--

INSERT INTO `tbl_privilege` (`privilege_id`, `privilege_name`, `privilege_create_date`, `privilege_create_by`) VALUES
(1, 'List', '2012-01-04 21:13:59', 1),
(3, 'Add', '2012-01-04 21:14:27', 1),
(4, 'Edit', '2012-01-04 21:14:27', 1),
(2, 'View', '2012-01-04 21:15:18', 1),
(6, 'Approve', '2012-01-04 21:15:34', 1),
(7, 'Delete', '2012-01-04 21:15:34', 1),
(5, 'Publish', '2012-01-04 21:16:17', 1),
(8, 'Order', '2012-01-04 21:16:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_row`
--

CREATE TABLE `tbl_row` (
  `row_id` int(11) NOT NULL,
  `row_parent` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `row_active_status` tinyint(1) NOT NULL,
  `row_create_date` datetime NOT NULL,
  `row_create_by` int(11) NOT NULL,
  `row_update_date` datetime DEFAULT NULL,
  `row_update_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_row`
--

INSERT INTO `tbl_row` (`row_id`, `row_parent`, `module_id`, `row_active_status`, `row_create_date`, `row_create_by`, `row_update_date`, `row_update_by`) VALUES
(50, 0, 102, 1, '2018-08-13 16:35:38', 1, '2018-08-20 01:45:27', 1),
(48, 0, 99, 1, '2018-08-13 14:42:50', 1, '2018-08-13 14:45:13', 1),
(45, 38, 98, 1, '2018-08-02 17:17:28', 1, '2018-08-03 17:01:24', 1),
(46, 0, 99, 1, '2018-08-03 17:02:06', 1, '2018-08-13 14:45:24', 1),
(56, 0, 100, 1, '2018-08-21 18:58:20', 1, '2018-08-22 20:36:45', 1),
(53, 51, 100, 1, '2018-08-19 18:09:02', 1, '2018-08-19 18:09:05', 1),
(54, 51, 100, 1, '2018-08-19 18:09:13', 1, '2018-08-19 18:09:15', 1),
(55, 0, 102, 1, '2018-08-20 01:43:36', 1, '2018-08-20 01:43:38', 1),
(57, 0, 100, 1, '2018-08-23 10:54:46', 1, '2018-08-23 13:37:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_pass` varchar(32) NOT NULL,
  `user_active_status` int(1) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_contact` varchar(15) NOT NULL,
  `user_expired` date NOT NULL,
  `user_create_date` datetime NOT NULL,
  `user_create_by` int(11) NOT NULL,
  `user_update_date` datetime NOT NULL,
  `user_update_by` int(11) NOT NULL,
  `user_change_password_date` datetime DEFAULT NULL,
  `user_level_id` int(11) NOT NULL,
  `token` varchar(128) DEFAULT NULL,
  `token_expired` datetime NOT NULL,
  `ip` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_pass`, `user_active_status`, `user_email`, `user_contact`, `user_expired`, `user_create_date`, `user_create_by`, `user_update_date`, `user_update_by`, `user_change_password_date`, `user_level_id`, `token`, `token_expired`, `ip`) VALUES
(1, 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 1, '', '', '0000-00-00', '0000-00-00 00:00:00', 0, '2015-08-11 14:34:24', 1, NULL, 1, NULL, '0000-00-00 00:00:00', NULL),
(5, 'Panomatic', 'dff83b11e74629ce137d686efce0f94f', 1, 'admin@panomatic.com', '', '0000-00-00', '2018-08-19 23:51:17', 1, '0000-00-00 00:00:00', 0, NULL, 3, NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_name` varchar(255) NOT NULL,
  `user_level_desc` varchar(200) NOT NULL,
  `user_level_active_status` int(1) NOT NULL,
  `user_level_create_date` datetime NOT NULL,
  `user_level_create_by` int(11) NOT NULL,
  `user_level_update_date` datetime DEFAULT NULL,
  `user_level_update_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`user_level_id`, `user_level_name`, `user_level_desc`, `user_level_active_status`, `user_level_create_date`, `user_level_create_by`, `user_level_update_date`, `user_level_update_by`) VALUES
(1, 'Super Administrator', 'Super Administrator', 1, '2011-08-19 10:49:45', 1, '2015-08-11 15:18:22', 1),
(3, 'Administrator', 'Administrator', 1, '2015-08-24 15:49:07', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_setting`
--
ALTER TABLE `cms_setting`
  ADD PRIMARY KEY (`setting_name`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_access`
--
ALTER TABLE `tbl_access`
  ADD PRIMARY KEY (`access_id`),
  ADD KEY `user_level_id` (`user_level_id`,`module_id`);

--
-- Indexes for table `tbl_access_privilege`
--
ALTER TABLE `tbl_access_privilege`
  ADD PRIMARY KEY (`access_privilege_id`),
  ADD KEY `access_id` (`access_id`,`privilege_id`);

--
-- Indexes for table `tbl_alias`
--
ALTER TABLE `tbl_alias`
  ADD PRIMARY KEY (`alias_id`),
  ADD KEY `alias_category` (`alias_category`),
  ADD KEY `alias_active_status` (`alias_active_status`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `tbl_general`
--
ALTER TABLE `tbl_general`
  ADD PRIMARY KEY (`general_id`);

--
-- Indexes for table `tbl_label`
--
ALTER TABLE `tbl_label`
  ADD PRIMARY KEY (`label_id`),
  ADD KEY `name` (`label_title`);

--
-- Indexes for table `tbl_label_type`
--
ALTER TABLE `tbl_label_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `tbl_log_cms`
--
ALTER TABLE `tbl_log_cms`
  ADD PRIMARY KEY (`log_id_cms`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `menu_parent` (`menu_parent`,`menu_order`),
  ADD KEY `menu_active_status` (`menu_active_status`);

--
-- Indexes for table `tbl_module`
--
ALTER TABLE `tbl_module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `tbl_module_group`
--
ALTER TABLE `tbl_module_group`
  ADD PRIMARY KEY (`module_group_id`);

--
-- Indexes for table `tbl_module_privilege`
--
ALTER TABLE `tbl_module_privilege`
  ADD PRIMARY KEY (`module_privilege_id`),
  ADD KEY `module_id` (`module_id`,`privilege_id`);

--
-- Indexes for table `tbl_options`
--
ALTER TABLE `tbl_options`
  ADD PRIMARY KEY (`options_id`);

--
-- Indexes for table `tbl_privilege`
--
ALTER TABLE `tbl_privilege`
  ADD PRIMARY KEY (`privilege_id`);

--
-- Indexes for table `tbl_row`
--
ALTER TABLE `tbl_row`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`user_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_access`
--
ALTER TABLE `tbl_access`
  MODIFY `access_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tbl_access_privilege`
--
ALTER TABLE `tbl_access_privilege`
  MODIFY `access_privilege_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=865;

--
-- AUTO_INCREMENT for table `tbl_alias`
--
ALTER TABLE `tbl_alias`
  MODIFY `alias_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `tbl_general`
--
ALTER TABLE `tbl_general`
  MODIFY `general_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_label`
--
ALTER TABLE `tbl_label`
  MODIFY `label_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_label_type`
--
ALTER TABLE `tbl_label_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_log_cms`
--
ALTER TABLE `tbl_log_cms`
  MODIFY `log_id_cms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=891;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tbl_module`
--
ALTER TABLE `tbl_module`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tbl_module_group`
--
ALTER TABLE `tbl_module_group`
  MODIFY `module_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_module_privilege`
--
ALTER TABLE `tbl_module_privilege`
  MODIFY `module_privilege_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=665;

--
-- AUTO_INCREMENT for table `tbl_options`
--
ALTER TABLE `tbl_options`
  MODIFY `options_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_privilege`
--
ALTER TABLE `tbl_privilege`
  MODIFY `privilege_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_row`
--
ALTER TABLE `tbl_row`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `user_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
