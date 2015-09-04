-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2015 at 12:47 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_phinxlog`
--

CREATE TABLE IF NOT EXISTS `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_phinxlog`
--

INSERT INTO `acl_phinxlog` (`version`, `start_time`, `end_time`) VALUES
(20141229162641, '2015-08-13 08:27:07', '2015-08-13 08:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `view` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `category_id`, `created`, `modified`, `users_id`, `status`, `active`, `description`, `view`) VALUES
(5, 'Bài này mới toanh', '<p>dsdsd</p>', 5, '2015-09-02 07:05:59', '2015-09-03 17:36:29', 10, 1, 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE IF NOT EXISTS `audits` (
  `id` int(11) NOT NULL,
  `action` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `active` tinyint(4) NOT NULL,
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `audits`
--

INSERT INTO `audits` (`id`, `action`, `created`, `updated`, `active`, `users_id`) VALUES
(1, 'Thêm người dùng: doankhoi', '2015-09-01 05:03:53', '2015-09-01 05:03:53', 1, NULL),
(2, 'Thêm người dùng: osbkca696', '2015-09-01 05:29:11', '2015-09-01 05:29:11', 1, 10),
(3, '', '2015-09-02 03:40:40', '2015-09-02 03:40:40', 0, NULL),
(4, 'Xóa người dùng: osbkca699', '2015-09-02 04:14:31', '2015-09-02 04:14:31', 1, 10),
(5, 'Thay đổi trạng thái người dùng: osbkca699', '2015-09-02 04:28:07', '2015-09-02 04:28:07', 1, 10),
(6, 'Thay đổi trạng thái người dùng: osbkca699', '2015-09-02 04:28:17', '2015-09-02 04:28:17', 1, 10),
(7, 'Thay đổi trạng thái người dùng: osbkca699', '2015-09-02 04:35:11', '2015-09-02 04:35:11', 1, 10),
(8, 'Thay đổi trạng thái người dùng: osbkca699', '2015-09-02 04:35:37', '2015-09-02 04:35:37', 1, 10),
(9, 'Thêm người dùng: doandat90', '2015-09-02 12:49:58', '2015-09-02 12:49:58', 1, 10),
(10, 'Thêm người dùng: ', '2015-09-02 01:13:11', '2015-09-02 01:13:11', 1, 10),
(11, 'Thêm người dùng: ', '2015-09-02 01:42:18', '2015-09-02 01:42:18', 1, 10),
(12, 'Thêm người dùng: ', '2015-09-02 01:42:42', '2015-09-02 01:42:42', 1, 10),
(13, 'Thay đổi trạng thái người dùng: osbkca699', '2015-09-02 02:11:49', '2015-09-02 02:11:49', 1, 10),
(14, 'Thay đổi trạng thái người dùng: osbkca699', '2015-09-03 05:24:11', '2015-09-03 05:24:11', 1, 10),
(15, 'Thay đổi trạng thái người dùng: osbkca699', '2015-09-03 05:25:54', '2015-09-03 05:25:54', 1, 10),
(16, 'Thay đổi trạng thái người dùng: osbkca699', '2015-09-03 05:26:03', '2015-09-03 05:26:03', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `link` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `sub`, `status`, `active`, `link`, `created`, `modified`, `description`, `image`) VALUES
(5, 'Coder', 0, 1, 1, '', '2015-09-03 12:31:42', '2015-09-04 12:46:00', '<p>Chia sáº» kiáº¿n thá»©c láº­p tr&igrave;nh v&agrave; há»c táº­p.</p>', 'i684NR77vi.jpg'),
(8, 'Suy ngáº«m', 0, 1, 1, '', '2015-09-04 08:40:18', '2015-09-04 12:35:14', '<p>Chia sáº» c&aacute;c b&agrave;i viáº¿t &yacute; nghÄ©a vá» cuá»™c sá»‘ng v&agrave; c&ocirc;ng viá»‡c.</p>', 'YgzNkbUsg8.jpg'),
(9, 'TÃ o lao', 0, 1, 1, '', '2015-09-04 08:41:08', '2015-09-04 12:28:03', '<p>C&aacute;c b&agrave;i viáº¿t vá» táº¥t cáº£ c&aacute;c chá»§ Ä‘á» m&agrave; Ä‘&aacute;ng quan t&acirc;m.</p>', 'usq5plTbxk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `articles_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(4) DEFAULT NULL,
  `ordered` int(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `images`, `title`, `type`, `ordered`, `created`, `modified`, `active`, `description`, `link`) VALUES
(2, 'e9vMqZTd9V.jpg', 'CÃ¹ng nhau luyá»‡n táº­p code cazy.', 0, 1, '2015-09-04 10:43:22', '2015-09-04 11:48:15', 1, '<p>Tháº£o luáº­n c&aacute;c váº¥n Ä‘á» vá» code v&agrave; c&aacute;c ng&ocirc;n ngá»¯ láº­p tr&igrave;nh.</p>', 'http://book.cakephp.org/2.0/en/core-libraries/helpers/form.html'),
(3, 'NpD3uLJfHp.jpg', 'Suy ngáº«m vá» bÃ i há»c hÃ´m nay', 0, 2, '2015-09-04 10:54:54', '2015-09-04 10:54:54', 1, '<p>Tham gia tháº£o luáº­n Ä‘á»ƒ c&ugrave;ng nhau tiáº¿n bá»™</p>', ''),
(4, 'aQrI6Huepb.jpg', 'CÃ¡c chuyá»‡n táº§m phÃ o trong cuá»™c sá»‘ng', 0, 3, '2015-09-04 10:56:18', '2015-09-04 10:56:18', 1, '<p>B&ecirc;n cáº¡nh há»c h&agrave;nh l&agrave; c&aacute;c chÆ°Æ¡ng tr&igrave;nh giáº£i tr&iacute;.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `start_time`, `end_time`) VALUES
(20150808014047, '2015-08-07 18:58:04', '2015-08-07 18:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(4) DEFAULT '0',
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'noavatar.jpg',
  `info` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`, `email`, `active`, `avatar`, `info`, `status`, `type`) VALUES
(10, 'doankhoi', '$2a$10$hRZh/VR6KmBTgmkzT8p4weB2m0vabjIw64QS7oVoA3fonFoxj5PLC', '2015-09-01 05:03:53', '2015-09-01 05:03:53', 'doanngockhoi93@gmail.com', 1, 'noavatar.jpg', NULL, 0, 'admin'),
(11, 'osbkca699', '$2a$10$6XxgQIfbWQ/drCsQ/cUyV.SGqi17P0nlDjB4W.yMSKH4I8NLbRLFG', '2015-09-01 05:29:11', '2015-09-03 17:26:03', 'osbkca@gmail.com', 1, 'noavatar.jpg', NULL, 0, 'author'),
(12, 'doandat90', '$2a$10$/hFj8cV71y2gdA3GgRedMuy58f.SVynkKI3f6rZIz/bTpX5.Zo9oC', '2015-09-02 12:49:58', '2015-09-02 12:52:13', 'doandat@gmail.com', 1, 'noavatar.jpg', NULL, 1, 'author');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  ADD KEY `aco_id` (`aco_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_id` (`articles_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
