-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2016 at 07:47 PM
-- Server version: 10.1.11-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fardin`
--

-- --------------------------------------------------------

--
-- Table structure for table `yii_about`
--

CREATE TABLE `yii_about` (
  `id` bigint(20) NOT NULL,
  `text` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yii_about`
--

INSERT INTO `yii_about` (`id`, `text`) VALUES
(1, '<p style="text-align: center;">dddd\r\n</p><p style="text-align: center;"><img src="/fardin/web/uploads/deed59c0960e09f58f1f9872fe13faf8.png" style="width: 437px; height: 122px;" width="437" height="122"></p><p><img src="/fardin/web/uploads/58341c681906c.jpg" style="display: block; margin: auto;" alt=""></p>');

-- --------------------------------------------------------

--
-- Table structure for table `yii_gallery`
--

CREATE TABLE `yii_gallery` (
  `id` bigint(20) NOT NULL,
  `subject` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yii_gallery`
--

INSERT INTO `yii_gallery` (`id`, `subject`, `text`, `photo`, `video`, `tag`) VALUES
(6, 1, 'jjj', 'uploads/deed59c0960e09f58f1f9872fe13faf8.png', NULL, 'uu'),
(7, 1, 'دربا', 'uploads/deed59c0960e09f58f1f9872fe13faf8.png', NULL, 'متن1,متن2');

-- --------------------------------------------------------

--
-- Table structure for table `yii_migration`
--

CREATE TABLE `yii_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yii_migration`
--

INSERT INTO `yii_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1479200845),
('m140506_102106_rbac_init', 1479583460),
('m141207_081031_init_session', 1479583460),
('m160314_083311_user', 1479583461),
('m161115_085049_about', 1479200861),
('m161119_131531_gallery', 1479561798),
('m161127_145204_subject', 1480258544);

-- --------------------------------------------------------

--
-- Table structure for table `yii_profile`
--

CREATE TABLE `yii_profile` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postalـcode` varchar(255) DEFAULT NULL,
  `national_code` varchar(255) DEFAULT NULL,
  `mobile` varchar(40) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yii_profile`
--

INSERT INTO `yii_profile` (`id`, `user_id`, `create_time`, `update_time`, `full_name`, `address`, `postalـcode`, `national_code`, `mobile`, `avatar`) VALUES
(1, 3, NULL, NULL, NULL, NULL, NULL, NULL, '0914540742', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yii_session`
--

CREATE TABLE `yii_session` (
  `id` varchar(40) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yii_session`
--

INSERT INTO `yii_session` (`id`, `expire`, `data`) VALUES
('dabdh15h28788ll7bql1cbo1o0', 1480268839, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a32353a222f66617264696e2f7765622f61646d696e2f64656661756c74223b5f5f69647c693a313b);

-- --------------------------------------------------------

--
-- Table structure for table `yii_subject`
--

CREATE TABLE `yii_subject` (
  `id` bigint(20) NOT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yii_subject`
--

INSERT INTO `yii_subject` (`id`, `text`) VALUES
(1, 'مردم');

-- --------------------------------------------------------

--
-- Table structure for table `yii_user`
--

CREATE TABLE `yii_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `authKey` varchar(50) NOT NULL,
  `accessToken` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yii_user`
--

INSERT INTO `yii_user` (`id`, `username`, `password`, `authKey`, `accessToken`, `role`) VALUES
(1, 'admin', '$2y$13$RZYaHDaslSotBS6Qv6XPSuFveG2qoBTR/BhRRLbEVp9a8z7dRQ0OG', 'key1234567', 'token1234567', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yii_about`
--
ALTER TABLE `yii_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_gallery`
--
ALTER TABLE `yii_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_migration`
--
ALTER TABLE `yii_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `yii_profile`
--
ALTER TABLE `yii_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_session`
--
ALTER TABLE `yii_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_subject`
--
ALTER TABLE `yii_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_user`
--
ALTER TABLE `yii_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yii_about`
--
ALTER TABLE `yii_about`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `yii_gallery`
--
ALTER TABLE `yii_gallery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `yii_profile`
--
ALTER TABLE `yii_profile`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `yii_subject`
--
ALTER TABLE `yii_subject`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `yii_user`
--
ALTER TABLE `yii_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
