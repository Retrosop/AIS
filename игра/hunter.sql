-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 31 2023 г., 17:25
-- Версия сервера: 8.0.30
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `baza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hunter`
--

CREATE TABLE `hunter` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `total_hits` int DEFAULT '0',
  `total_shots` int DEFAULT '0',
  `miss` int DEFAULT '0',
  `lasttime` datetime DEFAULT NULL,
  `best_shots` int DEFAULT '0',
  `registration` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `hunter`
--

INSERT INTO `hunter` (`id`, `name`, `pass`, `total_hits`, `total_shots`, `miss`, `lasttime`, `best_shots`, `registration`) VALUES
(1, 'Саня', 'Саня', 38, 66, 28, '2023-05-31 17:21:52', 3, '2023-05-31 16:42:30'),
(3, 'Акеня', '123', 20, 14, 6, '2023-05-31 17:21:52', 6, '2023-05-31 16:51:44'),
(4, 'Анастасия', '23546', 53, 23, 30, '2023-05-31 17:21:52', 7, '2023-05-31 16:51:52'),
(5, 'Алексей', 'лехавоин', 74, 45, 29, '2023-05-31 17:21:52', 5, '2023-05-31 17:17:06'),
(6, 'Яна', '3456н456', 54, 25, 29, '2023-05-31 17:21:52', 8, '2023-05-31 17:18:00'),
(7, 'Коля', '68994', 45, 24, 21, '2023-05-31 17:21:52', 3, '2023-05-31 17:18:03'),
(8, 'Женя', '7ш0054', 43, 23, 20, '2023-05-31 17:21:52', 10, '2023-05-31 17:18:07'),
(9, 'Артур', '4362457', 84, 76, 8, '2023-05-31 17:21:52', 12, '2023-05-31 17:18:12'),
(10, 'Слава', '7846772', 35, 23, 12, '2023-05-31 17:21:52', 5, '2023-05-31 17:18:18'),
(11, 'Алена', '3436990', 11, 5, 6, '2023-05-31 17:21:52', 5, '2023-05-31 17:18:25'),
(12, 'Аня', '806904', 64, 62, 2, '2023-05-31 17:21:52', 62, '2023-05-31 17:18:28');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hunter`
--
ALTER TABLE `hunter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hunter`
--
ALTER TABLE `hunter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
