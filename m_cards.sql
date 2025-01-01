-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 01, 2025 at 06:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_cards`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `front_card` varchar(255) NOT NULL,
  `back_card` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `category_id`, `front_card`, `back_card`) VALUES
(1, 1, 'Функция обработки специальных символов в языке php', 'htmlspecialchars — конверитруем спец.символы в html-сущности'),
(2, 2, 'Пробуждать', ' awake 	awoke 	awoken'),
(3, 1, 'Функция удаления пробелов из строки', 'trim — удаляет пробелы (или другие символы) из начала и конца строки'),
(4, 4, 'Мелодический минор', '1 2 3b 4 5 6 7'),
(5, 7, 'front', 'back'),
(6, 1, 'Функция обращения к БД с запросом', 'mysqli_assoc()'),
(32, 93, 'Шаблоны', 'MVC, Паттерн Одиночка  '),
(33, 93, 'Стили программирования', 'Процедурное'),
(63, 4, 'Гармонический минор', '1 2 3b 4 5 6 7'),
(57, 97, 'front...', 'back...'),
(42, 97, 'фронт 2', 'бэк 2'),
(44, 97, 'фронт 3', 'back 3'),
(37, 95, 'test front', 'test back'),
(38, 95, 'test front 1', 'test back 1'),
(41, 97, 'фронт 1', 'бэк 1'),
(67, 97, 'front...', 'back...'),
(69, 1, 'front...', 'back...'),
(70, 1, 'front...', 'back...'),
(71, 93, 'Новая концепция программирования', 'НОВАЯ'),
(72, 97, 'front...', 'back...'),
(73, 97, 'front...', 'back...'),
(74, 97, 'front...', 'back...'),
(75, 2, 'front...', 'back...'),
(76, 2, 'front...', 'back...'),
(77, 99, 'Гармонический минор', '1 2 3b 4 5 6b 7'),
(78, 100, 'Гармонический мажор', '1 2 3 4 5 6b 7'),
(79, 99, 'Локрийский bekar 6', '1 2b 3b 4 5b 6 7b'),
(80, 99, 'Ионийский 5#', '1 2 3 4 5# 6 7'),
(81, 99, 'Дорийский 4#', '1 2 3b 4# 5 6 7b'),
(82, 99, 'Миксолидийский 2b', '1 2b 3 4 5 6 7b'),
(83, 99, 'Локрийский bekar 2', '1 2 3b 4 5b 6b 7b'),
(84, 99, 'Суперальтерированный ', '1 2b 3b 4b 5b 6b 7bb');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Синтаксис языка PHP'),
(2, 'Неправильные глаголы Английского языка'),
(4, 'Звукоряды'),
(95, 'Test New'),
(93, 'Концепции программирования'),
(97, 'новая тестовая категория'),
(99, 'Гармонический минор'),
(100, 'Гармонический мажор');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
