CREATE DATABASE doingsdone
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


USE doingsdone;
-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` CHAR(64) NOT NULL,
  `user_id` INT(11) NOT NULL
);

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`name`, `user_id`) VALUES
('Входящие', 1),
('Учеба', 1),
('Работа', 1),
('Домашние дела', 1),
('Авто', 2);


-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dt_start` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_end` TIMESTAMP NULL DEFAULT NULL,
  `status` CHAR(4),
  `name` CHAR(64) NOT NULL,
  `files` CHAR(255) DEFAULT NULL,
  `project_id` INT(11) NOT NULL
);

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`dt_start`, `dt_end`, `status`, `name`, `files`, `project_id`) VALUES
('2019-03-31 21:00:00', '2019-05-09 00:00:00', 0, 'Собеседование в IT компании', NULL, 3),
('2019-04-01 21:00:00', '2019-05-28 00:00:00', 0, 'Выполнить тестовое задание', NULL, 2),
('2019-04-09 21:00:00', '2019-05-10 00:00:00', 1, 'Сделать задание первого раздела', NULL, 1),
('2019-04-03 21:00:00', '2019-05-19 00:00:00', 0, 'Встреча с другом', NULL, 4),
('2019-04-09 21:00:00', '2019-05-16 00:00:00', 0, 'Купить корм для кота', NULL, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `dt_reg` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `e-mail` CHAR(128) NOT NULL,
  `name` CHAR(32) NOT NULL,
  `password` CHAR(128) NOT NULL
);

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`dt_reg`, `e-mail`, `name`, `password`) VALUES
('2019-03-31 21:00:00', 'user1@mail.com', 'user1', 'asasdasdasdasd'),
('2019-04-01 21:00:00', 'user2@mail.com', 'user2', 'adsasdasdasd'),
('2019-04-02 21:00:00', 'user3@mail.com', 'user3', 'asdsdaadssdaasasd'),
('2019-04-03 21:00:00', 'user4@mail.com', 'user4', 'asdvxzxzc'),
('2019-04-04 21:00:00', 'user5@mail.com', 'user5', 'kljlkjasss');

