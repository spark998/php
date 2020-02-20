-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2020 г., 15:14
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
  `id` int(11) UNSIGNED NOT NULL,
  `good_id` int(11) NOT NULL,
  `nameGood` varchar(255) NOT NULL,
  `imgGood` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `client_info`
--

CREATE TABLE `client_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `pay` text NOT NULL,
  `delivery` text NOT NULL,
  `address` text NOT NULL,
  `comment` text NOT NULL,
  `orderAmount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `client_info`
--

INSERT INTO `client_info` (`id`, `name`, `phone`, `pay`, `delivery`, `address`, `comment`, `orderAmount`, `date`) VALUES
(18, 'Andri', 7956, 'Наличные', 'Самовывоз', 'sgsg', '', 935710, '2020-02-18 13:46:35'),
(19, 'asac', 122, 'Кредитная карта', 'Доставка', 'kkhhhjkj', '', 792000, '2020-02-18 13:47:24'),
(20, 'asac', 122, 'Наличные', 'Самовывоз', 'kkhhhjkj', '', 408300, '2020-02-18 14:18:58'),
(21, 'dhdh', 122, 'Наличные', 'Доставка', 'sgsg', '', 407710, '2020-02-18 14:56:40'),
(22, 'Alex', 122, 'Кредитная карта', 'Доставка', 'kkhhhjkj', '', 700000, '2020-02-18 14:59:13'),
(23, 'gsgs', 5746345, 'Кредитная карта', 'Доставка', 'sdhgsdh', '', 792000, '2020-02-18 15:00:07'),
(24, 'affafaf', 7956, 'Кредитная карта', 'Самовывоз', 'kkhhhjkj', '', 108500, '2020-02-18 15:04:47'),
(25, 'dhdh', 5746345, 'Наличные', 'Самовывоз', 'sgsg', '', 173600, '2020-02-18 15:05:40'),
(26, 'Alex', 5746345, 'Кредитная карта', 'Доставка', 'kkhhhjkj', '', 108500, '2020-02-19 08:14:47'),
(27, 'sggagfd', 65252526, 'Наличные', 'Самовывоз', 'tatatra ', 'tarttrtat', 407710, '2020-02-19 08:41:25'),
(29, 'Alex', 6625252526, 'Наличные', 'Доставка', 'sdhgsdh', '', 2804620, '2020-02-19 11:49:35');

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
(7, 'HYPERPC PROJECT', 152900, 'Стильный современный компьютер на базе процессора Intel Core i7-9700F и видеокарты GeForce RTX 2070 SUPER обеспечивает необходимую производительность для игр.', 'img/cooler_master_mastercase_h500p_mesh_build_photo_05.jpg'),
(8, 'HYPERPC HAF', 175000, 'Идеально сбалансированный ПК для любителей компьютерных игр. Процессор Intel Core i7 девятого поколения и игровая графика NVIDIA GeForce RTX 2070 SUPER справятся с любой новинкой.', 'img/cooler_master_mastercase_h500_build_photo_01.jpg'),
(24, 'HYPERPC OMEGA', 136100, 'HYPERPC OMEGA – это настоящее оружие победы для опытного киберспортсмена. Создавай собственные империи, сражайся в битвах и участвуй в гонках.', 'img/corsair_spec_omega_white_build_photo_02.jpg'),
(31, 'HYPERPC EARLKASE', 108500, 'Ищите мощный и красивый компьютер для игр? HYPERPC EARLKASE создан именно для вас. Высокая производительность и великолепный дизайн в одном системном блоке.', 'img/1.jpg'),
(44, 'HYPERPC LUMEN PLUS 1', 173600, 'HYPERPC LUMEN воплотит в жизнь любые графические настройки, творческие проекты и позволит ощутить технологии будущего уже сегодня.', 'img/hyperpc_lumen_plus_live_photo_01.jpg'),
(45, 'HYPERPC DYNAMIC', 295200, 'Идеально сбалансированный ПК для любителей компьютерных игр. Процессор Intel Core i9 и игровая графика GeForce RTX 2080 Ti справятся с любой новинкой.', 'img/hyperpc-dynamic-build-photo-02.jpg'),
(46, 'HYPERPC COSMOS X', 528500, 'Это настоящий монстр для игр с сумасшедшей производительностью двух видеокарт GeForce RTX 2080 Ti. Безусловно, это одна из самых быстрых сборок в нашей истории.', 'img/cooler_master_comsos_c700m_build_photo_01.jpg'),
(47, 'HYPERPC CONCEPT 6', 774410, 'HYPERPC CONCEPT 6 - уникальный компьютер, с двухконтурной системой охлаждения! GeForce RTX 2080 Ti 2-way SLI в тандеме с Intel Core i9-10980XE!', 'img/max_100500_pc_by_hyperpc_photo_03.jpg'),
(48, 'HYPERPC CONCEPT 3', 407710, 'HYPERPC CONCEPT 3 - уникальный каркасный компьютер, который поражает своим внешним видом! GeForce RTX 2080 Ti в тандеме с Core i9-9900K!', 'img/cougar_conquer_watercooling_blue_photo_01.jpg'),
(49, 'HYPERPC CONCEPT 4', 640510, 'Характеристики этого компьютера действительно впечатляют: быстрый процессор Intel® Core™ i9-10900X и две видеокарты NVIDIA RTX 2080 Ti с уникальной водяной системой охлаждения.', 'img/cooler_master_cosmos_c700p_watercooling_photo_13.jpg'),
(50, 'HYPERPC CONCEPT 5', 792000, 'Непревзойденная игровая производительность! Благодаря симбиозу самых передовых технологических решений HYPERPC CONCEPT 5 является по праву одним из самых мощных игровых ПК в России.', 'img/in_win_h-frame_3-0_photo_03.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `order_manager`
--

CREATE TABLE `order_manager` (
  `id` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idGood` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `order_manager`
--

INSERT INTO `order_manager` (`id`, `idClient`, `idGood`, `count`) VALUES
(10, 18, 45, 1),
(11, 18, 49, 1),
(12, 19, 50, 1),
(13, 20, 24, 3),
(14, 21, 48, 1),
(15, 22, 8, 4),
(16, 23, 50, 1),
(17, 24, 31, 1),
(18, 25, 44, 1),
(19, 26, 31, 1),
(20, 27, 48, 1),
(25, 29, 49, 1),
(26, 29, 50, 1),
(27, 29, 24, 2),
(28, 29, 31, 3),
(29, 29, 47, 1);

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
(2, 'Alex', 'ld', 'sfssfsfsf@sgsg.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Andri', '21', 'ford@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Alex', 'ld1', 'ford@mail.re', '202cb962ac59075b964b07152d234b70'),
(5, 'рврвр', 'yhn', 'sfssfsf1sf@sgsg.com', '202cb962ac59075b964b07152d234b70'),
(6, 'рврвр', 'zx', 'sfss21fsfsf@sgsg.com', '202cb962ac59075b964b07152d234b70'),
(7, 'adimin', '131', 'sfssfsf1sf@sgsg.com', '202cb962ac59075b964b07152d234b70'),
(11, 'admin', 'admin', 'admin@mail.ru', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'Alex', 'spark', 'spark@mail.ru', '8d5e957f297893487bd98fa830fa6413');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_manager`
--
ALTER TABLE `order_manager`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `client_info`
--
ALTER TABLE `client_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
