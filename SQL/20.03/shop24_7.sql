-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 20 2020 г., 19:39
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop24/7`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `CNUM` int(11) NOT NULL,
  `CNAME` varchar(50) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `RATING` int(11) NOT NULL,
  `SNUM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`CNUM`, `CNAME`, `CITY`, `RATING`, `SNUM`) VALUES
(2001, 'Hoffman', 'London', 100, 1001),
(2002, 'Giovanni', 'Rome', 200, 1003),
(2003, 'Liu', 'San Jose', 200, 1002),
(2004, 'Grass', 'Berlin', 300, 1002),
(2006, 'Clemens', 'London', 100, 1001),
(2008, 'Cisneros', 'SanJose', 300, 1007),
(2007, 'Pereira', 'Rome', 100, 1004);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `ONUM` int(11) NOT NULL,
  `AMT` float NOT NULL,
  `ODATE` date NOT NULL,
  `CNUM` int(11) NOT NULL,
  `SNUM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`ONUM`, `AMT`, `ODATE`, `CNUM`, `SNUM`) VALUES
(3001, 18.69, '2020-03-10', 2008, 1007),
(3003, 767.19, '1990-03-10', 2001, 1001),
(3002, 1900.1, '1990-03-10', 2007, 1004),
(3005, 5160.45, '1990-03-10', 2003, 1002),
(3006, 1098.16, '1990-03-10', 2008, 1007),
(3009, 1713.23, '1990-04-10', 2002, 1003),
(3007, 75.75, '1990-04-10', 2004, 1002),
(3008, 4723, '1990-05-10', 2006, 1001),
(3010, 1309.95, '1990-06-10', 2004, 1002),
(3011, 9891.88, '1990-06-10', 2006, 1001);

-- --------------------------------------------------------

--
-- Структура таблицы `salespeople`
--

CREATE TABLE `salespeople` (
  `SNUM` int(11) NOT NULL,
  `SNAME` varchar(50) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `COMM` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `salespeople`
--

INSERT INTO `salespeople` (`SNUM`, `SNAME`, `CITY`, `COMM`) VALUES
(1001, 'Peel', 'London', 0.12),
(1002, 'Serres', 'San Jose', 0.13),
(1003, 'Axelrod', 'New York', 0.1),
(1004, 'Motika', 'London', 0.11),
(1007, 'Rifkin', 'Barcelona', 0.15);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `salespeople`
--
ALTER TABLE `salespeople`
  ADD PRIMARY KEY (`SNUM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
