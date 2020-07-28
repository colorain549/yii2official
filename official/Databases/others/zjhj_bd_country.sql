-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-07-03 20:32:01
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `cai_bfishcms_cn`
--

-- --------------------------------------------------------

--
-- 表的结构 `zjhj_bd_country`
--

CREATE TABLE `zjhj_bd_country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zjhj_bd_country`
--

INSERT INTO `zjhj_bd_country` (`code`, `name`, `population`) VALUES
('AU', 'Australia', 18886000),
('BR', 'Brazil', 170115000),
('CA', 'Canada', 1147000),
('CN', 'China', 1277558000),
('DE', 'Germany', 82164700),
('FR', 'France', 59225700);

--
-- 转储表的索引
--

--
-- 表的索引 `zjhj_bd_country`
--
ALTER TABLE `zjhj_bd_country`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
