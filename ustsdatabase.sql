-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 11 2022 г., 22:06
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ustsdatabase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`ID`, `login`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `text` text NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `author`, `text`, `pubdate`, `articles_id`) VALUES
(1, 'Petros Seropyan', 'Very tasty pizza Ser, you are a greate chef :)', '2022-02-09 23:23:56', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `weight` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `sales` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `weight`, `image`, `categorie_id`, `pubdate`, `sales`) VALUES
(1, 'Chopping board', 1200, 0, 'chopping_board', 2, '2022-02-05 21:54:37', 4),
(2, 'Soft Toy Rabbit', 1750, 0, 'soft_toy_rabbit', 4, '2022-02-06 00:46:29', 13),
(3, 'Papyrus kitchen towel', 840, 0, 'papyrus_kitchen_towel', 8, '2022-02-09 22:56:13', 9),
(4, 'Vanish Oxi Action', 330, 30, 'vanish_oxi_action_30g', 6, '2022-05-07 00:18:39', 1),
(7, 'Soccer Ball', 2490, 0, 'soccer_ball', 1, '2022-05-11 20:05:06', 0),
(8, 'Volleyball ball', 1480, 0, 'volleyball_ball', 1, '2022-05-11 20:12:44', 0),
(9, 'Wine cup', 3780, 6, 'wine_cup', 2, '2022-05-11 20:26:20', 0),
(10, 'Musical candles', 490, 0, 'musical_candles', 3, '2022-05-11 21:09:58', 0),
(11, 'Birthday candles', 660, 24, 'birthday_candles', 3, '2022-05-11 22:14:07', 0),
(12, 'Plastic coated playing cards', 120, 0, 'plastic_coated_playing_cards', 4, '2022-05-11 22:29:39', 0),
(13, 'Screwdriver', 600, 0, 'screwdriver', 5, '2022-05-11 22:35:07', 0),
(14, 'Work gloves', 330, 0, 'work_gloves', 5, '2022-05-11 22:39:22', 0),
(15, 'Soft Toy Donkey', 2590, 1, 'soft_toy_donkey', 4, '2022-05-11 22:44:55', 0),
(16, 'ChiXuaXua с АлиЭкспресса', 9999, 1, 'chi_xua_xua', 4, '2022-05-11 22:49:14', 0),
(17, 'Kung-Fu Panda', 3900, 1, 'kungfu_panda', 4, '2022-05-11 22:52:41', 0),
(18, 'Soft bull \'TIKO\'', 3150, 1, 'soft_toy_bull', 4, '2022-05-11 22:56:30', 0),
(19, 'Deschlor Black', 390, 1.1, 'deschlor_black', 6, '2022-05-11 23:03:08', 0),
(20, 'Deschlor White', 350, 1.1, 'deschlor_white', 6, '2022-05-11 23:06:33', 0),
(21, 'Laundry Detergent White', 370, 350, 'biolan_white', 6, '2022-05-11 23:10:30', 0),
(22, 'Spray Anti-Grease Sanita', 790, 0.5, 'spray_anti-grease_sanita', 6, '2022-05-11 23:14:10', 0),
(23, 'Notebook', 1600, 130, 'egypt_notebook', 7, '2022-05-11 23:24:10', 0),
(24, 'Watercolor Paints', 450, 12, 'watercolor_paints', 7, '2022-05-11 23:26:25', 0),
(25, 'Toilet Brush green', 780, 1, 'toilet_brush_green', 8, '2022-05-11 23:31:39', 0),
(26, 'Toilet Brush blue', 990, 1, 'toilet_brush_blue', 8, '2022-05-11 23:32:27', 0),
(27, 'Brush', 280, 1, 'brush', 8, '2022-05-11 23:34:55', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_categories`
--

INSERT INTO `product_categories` (`id`, `title`, `image`) VALUES
(1, 'Sport', 'sport'),
(2, 'Kitchen', 'kitchen'),
(3, 'Holiday', 'holiday'),
(4, 'Toys', 'toys'),
(5, 'Everything for home', 'everyhome'),
(6, 'Chemical', 'chemical'),
(7, 'Stationery', 'stationery'),
(8, 'Household', 'household');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`ID`, `login`, `password`) VALUES
(1, 'agvan', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `mail`, `password`) VALUES
(1, 'Petros', 'petros@mail.ru', '2009-02-01'),
(2, 'Axunik', 'axunik@yandex.ru', '1982-01-28'),
(3, 'Vardan', 'vardan777@mail.ru', '1999-02-07'),
(4, 'Vardui', 'sirunaghchik@mail.ru', '2002-09-15'),
(5, 'Petros', 'petros2008@yandex.ru', '2008-11-11'),
(6, 'Axunik', 'chemasi@yandex.ru', '2007-01-05'),
(7, 'Vardan', 'vardan777@mail.ru', '1981-03-18'),
(8, 'Vardui', 'gexamyan2135@mail.ru', NULL),
(9, 'Tigran Papi', 'Tigran75@mail.ru', NULL),
(10, 'Anushik', 'nonameAshushik@mail.ru', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

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
-- Индексы таблицы `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
