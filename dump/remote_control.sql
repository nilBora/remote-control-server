-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 10 2017 г., 21:14
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `remote_control`
--

-- --------------------------------------------------------

--
-- Структура таблицы `queue`
--

CREATE TABLE `queue` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `options` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `queue`
--

INSERT INTO `queue` (`id`, `id_user`, `options`) VALUES
(46, 1, '{"name":"vol_plus","token":"333"}'),
(47, 1, '{"name":"vol_plus","token":"333"}'),
(48, 1, '{"name":"vol_plus","token":"333"}'),
(49, 1, '{"name":"vol_plus","token":"333"}'),
(50, 1, '{"name":"vol_plus","token":"333"}'),
(51, 1, '{"name":"vol_plus","token":"333"}'),
(52, 1, '{"name":"vol_plus","token":"333"}'),
(53, 1, '{"name":"vol_plus","token":"333"}'),
(54, 1, '{"name":"vol_plus","token":"333"}'),
(55, 1, '{"name":"vol_plus","token":"333"}'),
(56, 1, '{"name":"vol_plus","token":"333"}'),
(57, 1, '{"name":"vol_plus","token":"333"}'),
(58, 1, '{"name":"vol_plus","token":"333"}'),
(59, 1, '{"name":"vol_plus","token":"333"}'),
(60, 1, '{"name":"vol_plus","token":"333"}'),
(61, 1, '{"name":"vol_plus","token":"333"}'),
(62, 1, '{"name":"vol_plus","token":"333"}'),
(63, 1, '{"name":"vol_plus","token":"333"}'),
(64, 1, '{"name":"vol_plus","token":"333"}'),
(65, 1, '{"name":"vol_plus","token":"333"}'),
(66, 1, '{"name":"vol_plus","token":"333"}'),
(67, 1, '{"name":"vol_plus","token":"333"}'),
(68, 1, '{"name":"vol_plus","token":"333"}'),
(69, 1, '{"name":"vol_plus","token":"333"}'),
(70, 1, '{"name":"vol_plus","token":"333"}'),
(71, 1, '{"name":"vol_plus","token":"333"}'),
(72, 1, '{"name":"vol_plus","token":"333"}'),
(73, 1, '{"name":"vol_plus","token":"333"}'),
(74, 1, '{"name":"vol_plus","token":"333"}'),
(75, 1, '{"name":"vol_plus","token":"333"}'),
(76, 1, '{"name":"vol_plus","token":"333"}'),
(77, 1, '{"name":"vol_plus","token":"333"}'),
(78, 1, '{"name":"vol_plus","token":"333"}'),
(79, 1, '{"name":"vol_plus","token":"333"}'),
(80, 1, '{"name":"vol_plus","token":"333"}'),
(81, 2, '{"name":"vol_plus","token":"222"}'),
(82, 2, '{"name":"vol_plus","token":"222"}'),
(83, 2, '{"name":"vol_plus","token":"222"}'),
(84, 2, '{"name":"vol_plus","token":"222"}'),
(85, 2, '{"name":"vol_plus","token":"222"}'),
(86, 2, '{"name":"vol_plus","token":"222"}'),
(87, 2, '{"name":"vol_plus","token":"222"}'),
(88, 1, '{"name":"vol_plus","token":"333"}'),
(89, 2, '{"name":"vol_plus","token":"222"}'),
(90, 2, '{"name":"vol_plus","token":"222"}'),
(91, 2, '{"name":"vol_plus","token":"222"}'),
(92, 1, '{"name":"vol_plus","token":"333"}'),
(93, 1, '{"name":"vol_plus","token":"333"}'),
(94, 1, '{"name":"vol_plus","token":"333"}'),
(95, 1, '{"name":"vol_plus","token":"333"}'),
(96, 1, '{"name":"vol_plus","token":"333"}'),
(97, 2, '{"name":"vol_plus","token":"222"}'),
(98, 2, '{"name":"vol_plus","token":"222"}'),
(99, 2, '{"name":"vol_plus","token":"222"}'),
(100, 2, '{"name":"vol_plus","token":"222"}'),
(101, 2, '{"name":"vol_plus","token":"222"}'),
(102, 2, '{"name":"vol_plus","token":"222"}'),
(103, 1, '{"name":"vol_plus","token":"333"}'),
(104, 2, '{"name":"vol_plus","token":"222"}'),
(105, 2, '{"name":"vol_plus","token":"222"}'),
(106, 2, '{"name":"vol_plus","token":"222"}'),
(107, 2, '{"name":"vol_plus","token":"222"}'),
(108, 2, '{"name":"vol_plus","token":"222"}'),
(109, 2, '{"name":"vol_plus","token":"222"}'),
(110, 2, '{"name":"vol_plus","token":"222"}'),
(111, 2, '{"name":"vol_plus","token":"222"}'),
(112, 2, '{"name":"vol_plus","token":"222"}'),
(113, 2, '{"name":"vol_plus","token":"222"}'),
(114, 1, '{"name":"vol_plus","token":"333"}'),
(115, 1, '{"name":"vol_plus","token":"333"}'),
(116, 1, '{"name":"vol_plus","token":"333"}'),
(117, 1, '{"name":"vol_plus","token":"333"}'),
(118, 1, '{"name":"vol_plus","token":"333"}'),
(119, 1, '{"name":"vol_plus","token":"333"}'),
(120, 1, '{"name":"vol_plus","token":"333"}'),
(121, 1, '{"name":"vol_plus","token":"333"}'),
(122, 1, '{"name":"vol_plus","token":"333"}'),
(123, 2, '{"name":"vol_plus","token":"222"}'),
(124, 2, '{"name":"vol_plus","token":"222"}'),
(125, 2, '{"name":"vol_plus","token":"222"}'),
(126, 2, '{"name":"vol_plus","token":"222"}'),
(127, 2, '{"name":"vol_plus","token":"222"}'),
(128, 2, '{"name":"vol_plus","token":"222"}'),
(129, 2, '{"name":"vol_plus","token":"222"}'),
(130, 2, '{"name":"vol_plus","token":"222"}'),
(131, 2, '{"name":"vol_plus","token":"222"}'),
(132, 2, '{"name":"vol_plus","token":"222"}'),
(133, 1, '{"name":"vol_plus","token":"333"}'),
(134, 1, '{"name":"vol_plus","token":"333"}'),
(135, 1, '{"name":"vol_plus","token":"333"}'),
(136, 1, '{"name":"vol_plus","token":"333"}'),
(137, 1, '{"name":"vol_plus","token":"333"}'),
(138, 1, '{"name":"vol_plus","token":"333"}'),
(139, 1, '{"name":"vol_plus","token":"333"}'),
(140, 2, '{"name":"vol_plus","token":"222"}'),
(141, 2, '{"name":"vol_plus","token":"222"}'),
(142, 2, '{"name":"vol_plus","token":"222"}'),
(143, 2, '{"name":"vol_plus","token":"222"}'),
(144, 2, '{"name":"vol_plus","token":"222"}'),
(145, 2, '{"name":"vol_plus","token":"222"}'),
(146, 2, '{"name":"vol_plus","token":"222"}'),
(147, 2, '{"name":"vol_plus","token":"222"}'),
(148, 2, '{"name":"vol_plus","token":"222"}'),
(149, 2, '{"name":"vol_plus","token":"222"}'),
(150, 2, '{"name":"vol_plus","token":"222"}'),
(151, 2, '{"name":"vol_plus","token":"222"}'),
(152, 1, '{"name":"vol_plus","token":"333"}'),
(153, 1, '{"name":"vol_plus","token":"333"}'),
(154, 1, '{"name":"vol_plus","token":"333"}'),
(155, 1, '{"name":"vol_plus","token":"333"}'),
(156, 1, '{"name":"vol_plus","token":"333"}'),
(157, 2, '{"name":"vol_plus","token":"222"}'),
(158, 2, '{"name":"vol_plus","token":"222"}'),
(159, 2, '{"name":"vol_plus","token":"222"}'),
(160, 2, '{"name":"vol_plus","token":"222"}'),
(161, 2, '{"name":"vol_plus","token":"222"}'),
(162, 2, '{"name":"vol_plus","token":"222"}'),
(163, 2, '{"name":"vol_plus","token":"222"}'),
(164, 2, '{"name":"vol_plus","token":"222"}'),
(165, 2, '{"name":"vol_plus","token":"222"}'),
(166, 2, '{"name":"vol_plus","token":"222"}'),
(167, 2, '{"name":"vol_plus","token":"222"}'),
(168, 2, '{"name":"vol_plus","token":"222"}'),
(169, 1, '{"name":"vol_plus","token":"333"}'),
(170, 1, '{"name":"vol_plus","token":"333"}'),
(171, 1, '{"name":"vol_plus","token":"333"}'),
(172, 1, '{"name":"vol_plus","token":"333"}'),
(173, 1, '{"name":"vol_plus","token":"333"}'),
(174, 1, '{"name":"vol_plus","token":"333"}'),
(175, 2, '{"name":"vol_plus","token":"222"}'),
(176, 2, '{"name":"vol_plus","token":"222"}'),
(177, 2, '{"name":"vol_plus","token":"222"}'),
(178, 2, '{"name":"vol_plus","token":"222"}'),
(179, 2, '{"name":"vol_plus","token":"222"}'),
(180, 2, '{"name":"vol_plus","token":"222"}'),
(181, 2, '{"name":"vol_plus","token":"222"}'),
(182, 2, '{"name":"vol_plus","token":"222"}'),
(183, 2, '{"name":"vol_plus","token":"222"}'),
(184, 2, '{"name":"vol_plus","token":"222"}'),
(185, 1, '{"name":"vol_plus","token":"333"}'),
(186, 2, '{"name":"vol_plus","token":"222"}'),
(187, 2, '{"name":"vol_plus","token":"222"}'),
(188, 2, '{"name":"vol_plus","token":"222"}'),
(189, 2, '{"name":"vol_plus","token":"222"}'),
(190, 2, '{"name":"vol_plus","token":"222"}'),
(191, 2, '{"name":"vol_plus","token":"222"}'),
(192, 1, '{"name":"vol_plus","token":"333"}'),
(193, 1, '{"name":"vol_plus","token":"333"}'),
(194, 1, '{"name":"vol_plus","token":"333"}'),
(195, 1, '{"name":"vol_plus","token":"333"}'),
(196, 1, '{"name":"vol_plus","token":"333"}'),
(197, 1, '{"name":"vol_plus","token":"333"}'),
(198, 1, '{"name":"vol_plus","token":"333"}'),
(199, 1, '{"name":"vol_plus","token":"333"}'),
(200, 1, '{"name":"vol_plus","token":"333"}'),
(201, 1, '{"name":"vol_plus","token":"333"}'),
(202, 2, '{"name":"vol_plus","token":"222"}'),
(203, 2, '{"name":"vol_plus","token":"222"}'),
(204, 2, '{"name":"vol_plus","token":"222"}'),
(205, 2, '{"name":"vol_plus","token":"222"}'),
(206, 2, '{"name":"vol_plus","token":"222"}'),
(207, 2, '{"name":"vol_plus","token":"222"}'),
(208, 2, '{"name":"vol_plus","token":"222"}'),
(209, 2, '{"name":"vol_plus","token":"222"}'),
(210, 2, '{"name":"vol_plus","token":"222"}'),
(211, 2, '{"name":"vol_plus","token":"222"}'),
(212, 2, '{"name":"vol_plus","token":"222"}'),
(213, 2, '{"name":"vol_plus","token":"222"}'),
(214, 2, '{"name":"vol_plus","token":"222"}'),
(215, 2, '{"name":"vol_plus","token":"222"}'),
(216, 2, '{"name":"vol_plus","token":"222"}'),
(217, 2, '{"name":"vol_plus","token":"222"}'),
(218, 1, '{"name":"vol_plus","token":"333"}'),
(219, 1, '{"name":"vol_plus","token":"333"}'),
(220, 1, '{"name":"vol_plus","token":"333"}'),
(221, 1, '{"name":"vol_plus","token":"333"}'),
(222, 1, '{"name":"vol_plus","token":"333"}'),
(223, 1, '{"name":"vol_plus","token":"333"}'),
(224, 1, '{"name":"vol_plus","token":"333"}'),
(225, 1, '{"name":"vol_plus","token":"333"}'),
(226, 1, '{"name":"vol_plus","token":"333"}'),
(227, 1, '{"name":"vol_plus","token":"333"}');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `access_token` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`, `access_token`) VALUES
(1, 1, 'Nil', 'brdnlsrg@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 2, 'Test', 'test@test.com', '21232f297a57a5a743894a0e4a801fc3', '222');

-- --------------------------------------------------------

--
-- Структура таблицы `users_roles`
--

CREATE TABLE `users_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `premission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users_roles`
--

INSERT INTO `users_roles` (`id`, `name`, `premission`) VALUES
(1, 'administrator', 1),
(2, 'user', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `queue`
--
ALTER TABLE `queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
