-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 13 2017 г., 16:34
-- Версия сервера: 5.7.12-0ubuntu1
-- Версия PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tkd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `competition`
--

CREATE TABLE `competition` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tourname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `programm` text COLLATE utf8_unicode_ci NOT NULL,
  `contacts` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age_group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tournament_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `court_count` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `limited` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judge_id` text COLLATE utf8_unicode_ci NOT NULL,
  `trainer_id` text COLLATE utf8_unicode_ci NOT NULL,
  `sportsman_id` text COLLATE utf8_unicode_ci NOT NULL,
  `judge_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `results` text COLLATE utf8_unicode_ci NOT NULL,
  `gold` text COLLATE utf8_unicode_ci NOT NULL,
  `silver` text COLLATE utf8_unicode_ci NOT NULL,
  `bronze` text COLLATE utf8_unicode_ci NOT NULL,
  `creator` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `competition`
--

INSERT INTO `competition` (`id`, `type`, `tourname`, `date_from`, `date_to`, `country`, `reg`, `town`, `adress`, `description`, `programm`, `contacts`, `logo`, `age_group`, `tournament_level`, `code`, `court_count`, `limited`, `pass`, `judge_id`, `trainer_id`, `sportsman_id`, `judge_password`, `results`, `gold`, `silver`, `bronze`, `creator`, `created_at`, `updated_at`) VALUES
(13, 'seminar', 'еуые', '2017-02-01', '2019-12-20', 'Ukraine', 'АР Крым', 'Аграрное', 'авы', 'авыа', 'уца', 'ауы', '/comp_avatar/default.png', '', '', '', '', '15', '', '', '', '', '', '', '', '', '', 'test stel test1', '2017-01-20 09:57:23', '2017-01-20 09:57:23'),
(14, 'competition', 'Соревнование с кодом', '2017-01-01', '2018-01-01', 'Ukraine', 'АР Крым', 'Аграрное', 'Где-то у нас', 'А тут очень\r\nОчень \r\nДлинное \r\nОписание', 'расписание на год вперед\r\n', 'не нужно мне звонить', '/comp_avatar/default.png', 'Юніори олімпійці (2001-1999)', 'Міжнародний', 'qwerty', '15', '150', '$2y$10$9gCwD4.mF0AdROun2QJhx.Af8qPLZmIJ49yfqDbzIeaz0qers.W1G', '', '25,,,,', ',,,3,,,,,', '', '', '', '', '', 'test stel test1', '2017-01-26 11:23:49', '2017-02-20 11:35:16'),
(15, 'competition', 'Тестовое соревнование', '2017-02-25', '2017-01-01', 'Украина', 'АР Крим', 'Аграрне', 'Нет адреса', 'описание1', 'Программа1', 'нет контактов', '/comp_avatar/default.png', 'Дiти (2010-2009)', 'Місцевий', '', '5', '15', '$2y$10$k5HyymO9O6F/tCp7nmuilOdOyPNIqU2I8uD4ANGmVYsxLvPY5JTMW', '', '', '', '', '<p>Трям тря м трям</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: center;">А тут текст по центу</p>\r\n<p style="text-align: center;"><strong>И ЖИРНІЙ!!!!!!!!!!!!!!</strong></p>', '', '', '', 'test1 stel1 test12', '2017-02-27 05:52:04', '2017-02-28 10:48:31'),
(16, 'competition', 'Код для судьи 1', '2015-01-01', '2017-10-10', 'Украина', 'АР Крим', 'Аграрне', 'Адрес1', 'описание1', 'Программа1', 'Контакты1', '/comp_avatar/default.png', 'Ветерани (36-41 років) (1980-1975)', 'Місцевий', '', '4324', '22', '$2y$10$r6ZWUWQTmHRxURtsdzo/Gummdbxqcz3mzJbvkh73ZzDqhoiN0peii', ',21', '', '', '', '', '', '', '', 'test1 stel1 test12', '2017-02-27 08:00:02', '2017-02-28 11:47:05'),
(17, 'competition', 'Тестовое Соревнование 12', '2017-01-01', '2017-11-11', 'Украина', 'Запоріжська область', 'Бахчисарай', 'какой то адресс1', 'Какое то описание3', 'Программма соревнований3', 'Не пишите3', '/comp_avatar/03.03.2017/thek2.jpg', 'Дiти (2010-2009)', 'Місцевий', '', '11', '11', '', ',21', ',,,', ',,,,,,,,', 'qwerty1', '', '', '', '', 'test1 stel1 test12', '2017-02-27 09:26:46', '2017-03-03 11:20:21'),
(18, 'pumce', 'Тестовое пумсе 22', '2017-01-01', '2017-10-10', 'Украина', 'Житомирська область', 'Армянськ', 'Какой то адресс1', 'Длинное описание2', 'Расписание соревнования4', 'Не пишите и не ищите34', '/comp_avatar/07.03.2017/IMG_8931.JPG', 'Юніори олімпійці (2001-1999)', 'Національний', '', '112', '', '$2y$10$gtJBIw8pY14Ql4llPu1lVebahCg9gw7GPNgaTOaDwoAYOe1wx6.IK', '', '', '', 'qwerty', '', '', '', '', 'test1 stel1 test12', '2017-03-07 07:18:48', '2017-03-07 07:44:50'),
(19, 'seminar', 'Тестовый семинар', '2017-01-01', '2017-12-12', 'Украина', 'Дніпропетровська область', 'Алупка', '2222222222222222', '4444444444444444', '33333333333333333', '11111111111111111', '/comp_avatar/default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test1 stel1 test12', '2017-03-07 09:23:41', '2017-03-07 09:23:41'),
(20, 'seminar', 'Тестовый семинар дублированный', '2017-01-01', '2017-12-12', 'Украина', 'Івано-Франківська область', 'Багерово', 'Тестовый адресс1', 'Какое то описание1', 'Какая то программа1', 'Кому они нужны?1', '/comp_avatar/default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test1 stel1 test12', '2017-03-07 09:51:15', '2017-03-07 10:47:56'),
(21, 'training', 'Тренировка 12', '2017-01-01', '2019-12-10', 'Украина', 'Луганська область', 'Віліно', 'Там где были нету', 'Ненужное поле', 'Какое то длинное расписание', 'Не ищите', '/comp_avatar/default.png', 'ТК-5 (2010-2009)', '', '', '', '1600', '', '', '', '', '', '', '', '', '', 'test1 stel1 test12', '2017-03-09 07:47:27', '2017-03-09 07:47:27'),
(22, 'training', 'Неудавшаяся Тренировка 1211', '2017-01-01', '2019-12-10', 'Украина', 'Закарпатська область', 'Багерово', 'Там где были нету2', 'Ненужное поле2', 'Какое то длинное расписание2', 'Не ищите2', '/comp_avatar/09.03.2017/maxresdefault.jpg', 'Дiти (2010-2009)', '', '', '', '16001', '', '', '', '', '', '', '', '', '', 'test1 stel1 test12', '2017-03-09 09:12:29', '2017-03-09 09:31:48'),
(23, 'competition', '123', '2017-01-01', '2018-01-01', 'Украина', 'АР Крим', 'Аграрне', '1', '2', '3', '4', '/comp_avatar/default.png', 'Показовi двобоi (2011-2011),ТК-5 (2010-2009),Дiти (2010-2009)', 'Місцевий', '1', '1', '1', '', '', '', '', '1', '', '', '', '', 'test1 stel1 test12', '2017-03-10 06:29:33', '2017-03-10 06:29:33'),
(24, 'competition', 'Для извращений с результатми', '2017-01-01', '2017-03-09', 'Украина', 'АР Крим', 'Аграрне', 'Какой то тестовый адрес', 'Забейте', 'Расписание!!!121', 'НЕ ищити не пишите нас нет', '/comp_avatar/10.03.2017/09_August_2012_01.jpg', 'Показовi двобоi (2011-2011),ТК-5 (2010-2009),Дiти (2010-2009),Молодшi юнаки (2008-2007)', 'Місцевий', '', '10', '200', '', '', '16', '6,7,8,', 'qwerty', '<p class="ua">Боже пусть оно заработает!!!</p>', ',7,,,,7,,,', ',6,7,,,', ',7,8,,,', 'test1 stel1 test12', '2017-03-10 06:44:53', '2017-03-10 11:39:26');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `myname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `myname`, `topic`, `message`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'Какое то имя', 'Какая то тема', 'очень\r\nдлинное \r\nсообщение\r\nООООООООЧЧЧЧЧЕНЬЬЬ\r\nДЛЛИИИНННОООЕЕЕЕ\r\n\r\n\r\n\r\nСССССОООООООООООООООББББББЩЩЩЩЩЕЕННННИЕ', 'не существет', '2017-01-20 11:10:31', '2017-01-20 11:10:31');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2017_01_03_091938_coach', 1),
(3, '2014_10_12_000000_create_users_table', 2),
(4, '2014_10_12_100000_create_password_resets_table', 3),
(5, '2017_01_10_091233_sportsmans', 4),
(6, '2017_01_12_120144_Competition', 5),
(7, '2017_01_20_122652_Feedback', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('stel89@mail.ua', '938e6069ddf1061f0b4a0d3a2a849fc48005002cabcde7f52750a5b914e084c2', '2017-01-06 04:48:54');

-- --------------------------------------------------------

--
-- Структура таблицы `sportsmans`
--

CREATE TABLE `sportsmans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trainer_two` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `participation` text COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gold` text COLLATE utf8_unicode_ci NOT NULL,
  `silver` text COLLATE utf8_unicode_ci NOT NULL,
  `bronze` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `sportsmans`
--

INSERT INTO `sportsmans` (`id`, `name`, `surname`, `birthday`, `sex`, `rang`, `dan`, `trainer_one`, `trainer_two`, `participation`, `avatar`, `gold`, `silver`, `bronze`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Имя 1  2', 'Фамилия 12', '1980', 'Чоловіча', '2', '10 Гип', 'test11 stel11 test12', '  Второй тренер', ',,,,,,,', '/sportsmans/09.02.2017/kotenok.jpg', '', '', '', NULL, '2017-01-11 12:10:29', '2017-03-09 12:25:31'),
(3, 'Имя3', 'Фамилия3', '1965', 'Жіноча', '2', '1 дан', 'Stel1 Stel socs', 'Грабко Максим Олегович', ',14,', '', '', '', '', NULL, '2017-01-12 06:08:26', '2017-02-01 12:35:27'),
(4, 'Для теста смены', 'Спорстмен', '1990', 'Чоловіча', '3', '10 Гип', 'test11 stel11 test12', '  ', ',,,,', '', '', '', '', NULL, '2017-03-02 07:03:14', '2017-03-09 12:25:31'),
(5, '2', '2', '2000', 'Чоловіча', '0', '10 Гип', 'test11 stel11 test12', '  ', '', '', '', '', '', NULL, '2017-03-02 10:22:45', '2017-03-09 12:25:31'),
(6, 'Имя 1', 'Фамилия 1', '1990', 'Чоловіча', '2', '10 Гип', 'test1 stel1 test12', '  ', '24,', '', '', ',24', '', NULL, '2017-03-10 07:53:17', '2017-03-10 11:39:26'),
(7, 'Имя 2', 'Фамилия 2', '1989', 'Чоловіча', 'КМС', '9 Гип', 'test1 stel1 test12', '  ', '24,', '', ',24', ',24', ',24', NULL, '2017-03-10 07:53:44', '2017-03-10 11:39:26'),
(8, ' Имя 3', 'Фамилия 3', '1988', 'Чоловіча', 'МСМК', '7 Гип', 'test1 stel1 test12', '  ', '24,', '', '', '', ',24', NULL, '2017-03-10 07:54:01', '2017-03-10 11:39:27');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `patronymic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `org` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `participation` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`, `surname`, `patronymic`, `country`, `region`, `town`, `org`, `sex`, `fst`, `cat`, `avatar`, `participation`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Тренер', 'stel1', 'stel@mail.ru', '$2y$10$wlGEOGBDSNXUUnp8RHWnnuaxypsGg58kmCW2BgXT2miIgObP068fu', 'test1', 'test12', 'Ukraine', 'АР Крим', 'Аграрне', 'KFD', 'Чоловіча', 'Что эта1', '', '/avatar/10.03.2017/maxresdefault.jpg', ',,,,,,,,,,24,', 'Rii83rfOxxzeB529ZaXOCg2MDtMHl5nq3klaHIHliP26BIzTsa2xfYNkpsdC', '2017-01-04 10:19:37', '2017-03-10 07:55:11'),
(21, 'Суддя', 'test1', 'stel2@mail.ru', '$2y$10$YFO7qKPRtWpkTaZImFqS2u.6FlepM/iuuw6lxXGNGoOqIUZS/6I1.', 'test2', 'test4', 'Ukraine', 'АР Крим', 'Аграрне', 'Юний суддя', 'Чоловіча', NULL, 'Юний суддя', '/avatar/10.03.2017/1.jpg', ',17,16', 'oHRAcTFidlZ4KQvpaSruB1m97oFKSCaRgCQ927mOjsS6egurKh8Bw21ZhPLo', '2017-01-05 10:08:19', '2017-03-10 05:46:48'),
(23, 'Продавець', 'test3', 'stel3@mail.ru', '$2y$10$uyeH/Wuw/EYiUIejDrpkKOf/Wc7nzVyUH6G8bZkfHiJiwfO7WJur2', 'test4', 'test5', 'Ukraine', 'АР Крым', 'Аграрное', NULL, '-', NULL, NULL, '/avatar/09.02.2017/kotenok.jpg', '', 'LZv7Fv5OeZQPQRsbDRQrEIoE9zWIrMjgm5Fu0l0h6goSmghWRhM5rP5sVkz4', '2017-01-05 10:27:35', '2017-02-09 11:08:02'),
(25, 'Тренер', 'Stel', 'stel89@mail.ua', '$2y$10$wOUN.Qgh446qNYUiGkbDceLvyK5WoeC4/FZ9jgq7rccyMc3HMbvKK', 'Stel1', 'socs', 'Ukraine', 'АР Крым', 'Аграрное', 'KFD', 'Муж', NULL, NULL, '/avatar/05.01.2017/img20170103_15121560.jpg', ',14,', 'HFenfydAgeOF8SZzygC9viLPO9q3LS5tZd8QipqaovL6gTAR43i6a9P0YAdX', '2017-01-05 12:36:01', '2017-02-01 12:35:27'),
(26, 'Продавець', 'rew', 'stel@qwerty123.ru', '$2y$10$Rq9E/r7LrzCGxmzOSjbom.ItUNjvH82q0qXTF7LEa/cS4lqX3XgCK', 'rew', 'testoviyProdavex', 'Ukraine', 'АР Крым', 'Аграрное', NULL, '-', NULL, NULL, '/avatar/24.01.2017/img20170124_08143681.jpg', '', NULL, '2017-01-24 07:13:08', '2017-01-24 07:13:08');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `sportsmans`
--
ALTER TABLE `sportsmans`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email1_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `sportsmans`
--
ALTER TABLE `sportsmans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
