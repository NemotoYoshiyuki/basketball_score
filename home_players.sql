-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 1 朁E22 日 08:24
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `basketball_score`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `home_players`
--

CREATE TABLE IF NOT EXISTS `home_players` (
`id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `home_player_name` varchar(64) NOT NULL,
  `position_id` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `player_photo` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `home_players`
--

INSERT INTO `home_players` (`id`, `created`, `modified`, `home_player_name`, `position_id`, `height`, `weight`, `number`, `comment`, `player_photo`) VALUES
(1, '2016-01-21 09:03:51', '2016-01-22 08:18:11', '旭 康介 ', 4, 188, 76, 2, 'バスケットボール選手', 'asahi.jpg'),
(4, '2016-01-22 08:10:45', '2016-01-22 08:12:44', '高橋幸大', 5, 180, 75, 3, 'あ', 'takahasi_kouta.jpg'),
(5, '2016-01-22 08:15:04', '2016-01-22 08:15:04', '佐野隆司', 4, 187, 85, 6, 'あ', 'sano.jpg'),
(6, '2016-01-22 08:17:15', '2016-01-22 08:17:15', '北森郁哉', 5, 187, 78, 7, 'あ', 'kitamori.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_players`
--
ALTER TABLE `home_players`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_players`
--
ALTER TABLE `home_players`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
