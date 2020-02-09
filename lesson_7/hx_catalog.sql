-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 09 2020 г., 17:48
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hx_catalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `nameGood` varchar(255) NOT NULL,
  `imgGood` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `nameGoods` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `imgName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `nameGoods`, `price`, `description`, `imgName`) VALUES
(1, 'HYPERPC EARLKASE', 112000, 'Ищите мощный и красивый компьютер для игр? HYPERPC EARLKASE создан именно для вас. Высокая производительность и великолепный дизайн в одном системном блоке.', 'img/1.jpg'),
(2, 'HYPERPC OMEGA', 135000, 'HYPERPC OMEGA – это настоящее оружие победы для опытного киберспортсмена. Создавай собственные империи, сражайся в битвах и участвуй в гонках.', 'img/corsair_spec_omega_white_build_photo_02.jpg'),
(3, 'HYPERPC PROJECT', 149000, 'Стильный современный компьютер на базе процессора Intel Core i7-9700F и видеокарты GeForce RTX 2070 SUPER обеспечивает необходимую производительность для игр.', 'img/cooler_master_mastercase_h500_build_photo_01.jpg'),
(4, 'HYPERPC HAF', 174000, 'Идеально сбалансированный ПК для любителей компьютерных игр. Процессор Intel Core i7 девятого поколения и игровая графика NVIDIA GeForce RTX 2070 SUPER справятся с любой новинкой.', 'img/cooler_master_mastercase_h500p_mesh_build_photo_05.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`) VALUES
(1, '', 'rtrtrt', '', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Alex', 'ld', 'sfssfsfsf@sgsg.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Andri', '21', 'ford@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Alex', 'ld1', 'ford@mail.re', '202cb962ac59075b964b07152d234b70'),
(5, 'рврвр', 'yhn', 'sfssfsf1sf@sgsg.com', '202cb962ac59075b964b07152d234b70'),
(6, 'рврвр', 'zx', 'sfss21fsfsf@sgsg.com', '202cb962ac59075b964b07152d234b70');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
