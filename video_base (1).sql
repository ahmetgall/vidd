-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 25 2014 г., 09:22
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `oshbasa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aaa_video`
--

CREATE TABLE IF NOT EXISTS `aaa_video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `naim` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `opub` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `aaa_video`
--

INSERT INTO `aaa_video` (`id_video`, `naim`, `url`, `user`, `opub`) VALUES
(1, 'Edge of Tomorrow Trailer | TNT', '<iframe width="560" height="315" src="//www.youtube.com/embed/J9hQoft2AeU" frameborder="0" allowfullscreen></iframe>', 'user1', 1),
(2, 'You are what you share', '<iframe width="560" height="315" src="//www.youtube.com/embed/UyWwX_VzIBY" frameborder="0" allowfullscreen></iframe>', 'user22', 1),
(3, 'Subban and Thornton exchange words at bench', '<iframe width="560" height="315" src="//www.youtube.com/embed/IZiIwX3Ybm4" frameborder="0" allowfullscreen></iframe>', 'user2', 1),
(5, 'iPhone (MetroGnome Remix)11', '<iframe width="560" height="315" src="//www.youtube.com/embed/M3h00M9dcj4" frameborder="0" allowfullscreen></iframe>', 'user11', 1),
(6, 'Will Ferrell and Chad Smith Drum-Off', '<iframe width="560" height="315" src="//www.youtube.com/embed/0uBOtQOO70Y" frameborder="0" allowfullscreen></iframe>', 'admin', 1),
(7, 'Celebrities Read Mean Tweets #7', '<iframe width="560" height="315" src="//www.youtube.com/embed/imW392e6XR0" frameborder="0" allowfullscreen></iframe>', 'user', 1),
(8, 'KEYBOARD CAT 96 TEARS', '<iframe width="560" height="315" src="//www.youtube.com/embed/LWOYM9R7QGE" frameborder="0" allowfullscreen></iframe>', 'admin', 1),
(9, 'DIY X-MEN MAGNETO walking upside down with magnetic shoes', '<iframe width="560" height="315" src="//www.youtube.com/embed/uRKHCRR9-C4" frameborder="0" allowfullscreen></iframe>', 'admin', 1),
(10, 'MAGIC IN THE MOONLIGHT (2014) Official HD Trailer', '<iframe width="560" height="315" src="//www.youtube.com/embed/LAwbwKURvm0" frameborder="0" allowfullscreen></iframe>', 'admin', 1),
(11, 'Canadiens vs. Rangers Game 3 Recap', '<iframe width="560" height="315" src="//www.youtube.com/embed/tPeWGstSaf8" frameborder="0" allowfullscreen></iframe>', 'admin', 1),
(12, 'NBA Flash Mob - The 2014 Playoffs Edition', '<iframe width="560" height="315" src="//www.youtube.com/embed/KWY3wt5UBXs" frameborder="0" allowfullscreen></iframe>', 'admin', 1),
(13, 'Landon Donovan Left Off US World Cup Roster', '<iframe width="560" height="315" src="//www.youtube.com/embed/btijfbFiBBI" frameborder="0" allowfullscreen></iframe>', 'admin', 1),
(14, 'Tara''s First Pitch', '<iframe width="560" height="315" src="//www.youtube.com/embed/1B-tNICSMiQ" frameborder="0" allowfullscreen></iframe>', 'admin', 1),
(15, 'Nicki Minaj - Pills N Potions (Audio)', '<iframe width="560" height="315" src="//www.youtube.com/embed/_krlUcsyUV8" frameborder="0" allowfullscreen></iframe>', 'user', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$f//8YU4rZokzaU6.El2J5.krLyCD0gmeI9Y3Fo9UbGfAf28sXTJcO', 'L1ws39Bixy70Z3ORbpO15PmDss9OT1IVOEuuOXQ91krEO0S4TJkWWSB3WpFW', '2014-05-23 08:43:07', '2014-05-25 02:52:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
