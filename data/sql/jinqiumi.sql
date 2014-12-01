-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-12-01 17:48:06
-- 服务器版本： 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jinqiumi`
--

-- --------------------------------------------------------

--
-- 表的结构 `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `league_id` int(11) NOT NULL DEFAULT '0',
  `home_team` int(11) NOT NULL DEFAULT '0',
  `visit_team` int(11) NOT NULL DEFAULT '0',
  `time` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `league`
--

CREATE TABLE IF NOT EXISTS `league` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `seo_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `league`
--

INSERT INTO `league` (`id`, `name`, `image`, `status`, `seo_title`, `seo_keyword`, `seo_desc`, `created_at`, `updated_at`) VALUES
(1, '西班牙足球甲级联赛', '示例图片_02.jpg', 1, '', '', '', 1417426371, 1417426371);

-- --------------------------------------------------------

--
-- 表的结构 `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `league_id` int(11) NOT NULL DEFAULT '0',
  `team_id` int(11) NOT NULL DEFAULT '0',
  `player_id` int(11) NOT NULL DEFAULT '1',
  `type_id` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1：链接；2：文章；3：图片',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '超级管理员', 1, 1416898180, 1416898558),
(2, '普通会员', 1, 1416898473, 1416908181);

-- --------------------------------------------------------

--
-- 表的结构 `season`
--

CREATE TABLE IF NOT EXISTS `season` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `league` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `season`
--

INSERT INTO `season` (`id`, `league`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2014-2015赛季西班牙足球甲级联赛', 1, 1417426928, 1417426928);

-- --------------------------------------------------------

--
-- 表的结构 `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  `updated_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_bind` tinyint(1) NOT NULL DEFAULT '0',
  `email_bind` tinyint(1) NOT NULL DEFAULT '0',
  `role_id` tinyint(5) NOT NULL DEFAULT '2',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `login_count` int(11) NOT NULL DEFAULT '0',
  `last_login_ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `mobile`, `mobile_bind`, `email_bind`, `role_id`, `status`, `login_count`, `last_login_ip`, `last_login_time`, `created_at`, `updated_at`) VALUES
(1, 'admin', '8OP8b3wLzulctDjfVMux13bvZbpXXVaF', '$2y$13$omucdWp/nXkBhH4lXdgHLu077lt.TQQLD.kRnCgpkIrKPoLRE4.w6', NULL, 'admin@admin.com', '', 0, 0, 1, 1, 0, '', 0, 1416895503, 1416895503),
(2, '蚂蚁', '', '$2y$13$Dr3ekPlNMXsIR0YhtFl5peRXiC5lUvAso30hQ3v2r/U5hu93d1xE2', NULL, '631782136@qq.com', '18602877234', 0, 0, 2, 1, 0, '', 0, 1416902853, 1416993951),
(3, '姚夏的右脚', 'nfCzXA8HyjoBGzLDEugAZhziyBpQmROf', '$2y$13$jIimR89YCcexfz7hSqhAQuOizsFJ7mZTkjQyzGhfHtvVNqGexQW0G', NULL, '', '', 0, 0, 2, 1, 0, '', 0, 1416983418, 1416993793),
(4, '伯纳乌', 'nfCzXA8HyjoBGzLDEugAZhziyBpQmROf', '$2y$13$0ptyC/A8ulcWJ6S.qYvbU.0FxUEvOB.wP1bMXipLUtw/v243TBXeu', NULL, '', '', 0, 0, 2, 1, 0, '', 0, 1416987019, 1416988757),
(5, '花样撸管大赛管委会', 'NzTz6GQ1SEOlqa6VAmQ_yX6lJaJyo7cP', '$2y$13$hFijZ/Y6R458tZEmVY5YoO..t.VaTnX8QX.6mXjqmtCdtSo.HM7tm', NULL, '', '', 0, 0, 2, 1, 0, '', 0, 1416988046, 1416988046),
(6, '村东那棵小杨树', 'Z2jQio2x3nxywtTqrltQYymtxGsFTvne', '$2y$13$YOx95CTeFD4pD1JchhpVFuNmJQzt2irHxEZqaBYiOIqfNSgHR1kK6', NULL, '', '', 0, 0, 2, 1, 0, '', 0, 1416988963, 1416989600);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
