-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 02 2020 г., 21:06
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
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `text`, `date`) VALUES
(1, 'Andri', '1245', '2020-02-02 17:34:45'),
(2, 'Alex', 'jxjxjxdd', '2020-02-02 17:41:29'),
(3, 'Andri', 'agag56a5hha <script>', '2020-02-02 17:54:19');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name_product` char(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `img_name` char(255) NOT NULL,
  `path_img` char(255) NOT NULL,
  `title_desc` text NOT NULL,
  `desc_card` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name_product`, `description`, `price`, `img_name`, `path_img`, `title_desc`, `desc_card`) VALUES
(1, 'Материнская плата ASUS Prime X299 Edition 30', '[LGA 2066, Intel X299, 8xDDR4-4266 МГц, 3xPCI-Ex16, аудио 7.1, Standard-ATX]', 51000, 'materinskaya_plata_asus_prime_x299.jpg', 'images/', 'Описание Материнская плата ASUS Prime X299 Edition 30', 'ASUS отметила свое 30-летие на рынке материнских плат, выпустив плату Prime X299 Edition 30. Prime X299 Edition 30 представляет собой материнскую плату LGA2066, поддерживающую процессоры Intel Core i9-9000X. Дизайн модели довольно характерен для плат компании, с теплоотводом чипсета, слотами M.2 и панелью I/O, окрашенными в белый цвет. Теплоотвод модуля регуляции напряжения обдувается 40мм вентилятором. Среди остальных особенностей платы можно выделить три слота PCI-Express 3.0 x16 и три слота M.2 NVMe, беспроводное подключение 802.11ac и продвинутая встроенная аудиокарта.'),
(2, 'Материнская плата ASUS ROG Crosshair VIII Formula', '[TR4, AMD X399, 8xDDR4-3600 МГц, 4xPCI-Ex16, аудио 7.1, E-ATX]', 46499, '6447165-1572596795.jpg', 'images/', 'Описание Материнская плата ASUS ROG Crosshair VIII Formula', 'ASUS ROG Crosshair VIII Formula по праву можно назвать венцом инженерной мысли на рынке материнских плат. Она идеально подходит для сборки мощных ПК на основе топовых процессоров AMD Ryzen, независимо от специализации системы. Для оверклокеров она готова предложить усиленный 16-фазный узел питания на долговечных и надежных компонентах, расширенный набор средств по управлению и мониторингу во время разгона (в том числе при использовании жидкого азота) и UEFI BIOS с огромным количеством разнообразных настроек.\r\nГеймеры же по достоинству оценят наличие 5-гигабитного LAN-порта с возможностью приоритезации трафика, поддержку стандарта Wi-Fi 6 802.11ax, а также качественную 8-канальную аудиосистему с аппаратным усилителем для наушников с высоким импедансом.'),
(3, 'Материнская плата ASUS ROG Zenith Extreme Alpha', '[TR4, AMD X399, 8xDDR4-3600 МГц, 4xPCI-Ex16, аудио 7.1, E-ATX]', 45199, '248209_726da-1000x1000.png', 'images/', 'Описание Материнская плата ASUS ROG Zenith Extreme Alpha', 'Эффективное охлаждение – обязательное условие стабильной работы процессоров AMD, насчитывающих до 32 ядер, даже когда те работают в своем штатном режиме. ROG Zenith Extreme Alpha готова обеспечить для этого все необходимое, чтобы собранный на ее основе компьютер выдавал экстремально высокую производительность без риска перегрева.\r\nКаждая деталь материнской платы ROG Zenith Extreme Alpha служит для того, чтобы вам было комфортнее играть и работать, используя собранный на ее основе компьютер. Контроллер Intel стандарта 10G Ethernet обеспечит быструю передачу данных по проводной сети с минимальной латентностью, а слоты M.2 – возможность установки твердотельных накопителей. Встроенная аудиосистема SupremeFX гарантирует высокое качество звукозаписи при стриминге или общении в игровом чате.'),
(4, 'Материнская плата ASUS PRIME TRX40-PRO', '[sTRX4, AMD TRX40, 8xDDR4-4666 МГц, 3xPCI-Ex16, аудио 7.1, Standard-ATX]', 44999, '709a20.jpg', 'images/', 'Описание Материнская плата ASUS PRIME TRX40-PRO', 'Материнская плата ASUS PRIME TRX40-PRO оснащена мощной подсистемой питания с 16 фазами и парой 8-контактных разъёмов EPS. Плата получила восемь слотов для модулей памяти DDR4 с частотой до 4666 МГц (в разгоне). Также есть в наличии три слота PCI Express 4.0 x16, и один PCI Express 4.0 x1. Модель PRIME TRX40-PRO имеет четыре слота M.2 (один вертикальный для модуля WiFi) и есть 8 портов SATA III.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
