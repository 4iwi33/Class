-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2020 г., 19:54
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
-- База данных: `kuntsevich`
--
CREATE DATABASE IF NOT EXISTS `kuntsevich` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kuntsevich`;

-- --------------------------------------------------------

--
-- Структура таблицы `zp table`
--

CREATE TABLE `zp table` (
  `Number` int(11) NOT NULL,
  `FIO` varchar(50) NOT NULL,
  `Zp` float NOT NULL,
  `Department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zp table`
--

INSERT INTO `zp table` (`Number`, `FIO`, `Zp`, `Department`) VALUES
(1, 'Ivanov', 500, 'Driver'),
(2, 'Petrov', 450, 'Driver'),
(3, 'Vasilev', 550, 'Cook'),
(4, 'Petechkin', 500, 'Cook'),
(5, 'Vlasenko', 600, 'Accountant'),
(5, 'Ivanchuk', 600, 'Accountant'),
(6, 'Sidorenko', 550, 'Cleaner'),
(7, 'Vasilchuk', 550, 'Cleaner'),
(8, 'Sidorov', 450, 'Cecurity'),
(9, 'Akimov', 500, 'Cecurity'),
(10, 'Hlebnikov', 900, 'Director');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
