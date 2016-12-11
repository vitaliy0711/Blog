-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Гру 11 2016 р., 18:23
-- Версія сервера: 5.5.50
-- Версія PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `database`
--

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro_text` text NOT NULL,
  `full_text` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `title`, `intro_text`, `full_text`, `image`) VALUES
(9, 'Назва посту', 'Короткий опис', 'Повна інформація', '0orig.jpg');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
