-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 24 2020 г., 09:52
-- Версия сервера: 5.6.38
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `asferro_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Soft Skills'),
(1, 'Tech Skills');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `value` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL,
  `marker` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `value`, `link`, `marker`) VALUES
(1, '+38 096 157 47 02', 'tel:380961574702', 'p'),
(2, 'andrey27x777@gmail.com', 'mailto:andrey27x777@gmail.com', 'e');

-- --------------------------------------------------------

--
-- Структура таблицы `descriptions`
--

CREATE TABLE `descriptions` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `job_id` smallint(5) UNSIGNED NOT NULL,
  `text` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `descriptions`
--

INSERT INTO `descriptions` (`id`, `job_id`, `text`) VALUES
(1, 1, 'klemfklmsdfkmklgndflgnlkthrkthlklgfmkldfmgkldmflkgdkfgmdfklgmdkmfgkdmgfl'),
(2, 1, 'khkjuyukyhxdrrgssgergdrgdrgdrg'),
(3, 2, 'jll;kjl;kj;k;kj;kj;kjl;kjl;kj;kl;'),
(4, 1, 'hjkhjkhgkjhkghkjhjkhjk'),
(5, 4, 'kghkjhkhjtweruioiopiouiyuityuiyuigdfgdfg');

-- --------------------------------------------------------

--
-- Структура таблицы `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `university` varchar(100) NOT NULL,
  `admission_date` date NOT NULL,
  `graduation_date` date NOT NULL,
  `country` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `education`
--

INSERT INTO `education` (`id`, `profession`, `university`, `admission_date`, `graduation_date`, `country`) VALUES
(1, 'Прикладной программист', 'ИХКЭ им. Мартыновского ОНАПТ (бывш. ОГАХ)', '2005-09-01', '2009-06-01', 'Ukraine'),
(2, 'Web программист', 'Академия Шаг', '2016-10-07', '2017-05-23', 'Ukraine');

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `profession` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `employment_date` date NOT NULL,
  `dismissal_date` date DEFAULT NULL,
  `country` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `jobs`
--

INSERT INTO `jobs` (`id`, `profession`, `company`, `employment_date`, `dismissal_date`, `country`) VALUES
(1, 'Front-End Developer', 'Freelance', '2019-09-21', NULL, 'Ukraine'),
(2, 'Front-End Developer', 'Reasanik', '2017-09-07', '2019-09-07', 'Ukraine'),
(3, 'Front-End Developer', 'Adenta', '2014-04-21', '2014-06-01', 'Ukraine'),
(4, 'Front-End Developer', 'Rubiko', '2017-01-07', '2017-05-24', 'Ukraine');

-- --------------------------------------------------------

--
-- Структура таблицы `profiles`
--

CREATE TABLE `profiles` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `profession`, `description`) VALUES
(1, 'Банников Андрей', 'Web программист', 'PHP JavaScript (Node.js) Yii2 Express.js Vue.js  React  Mobx');

-- --------------------------------------------------------

--
-- Структура таблицы `skills`
--

CREATE TABLE `skills` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `percents` tinyint(3) UNSIGNED DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `skills`
--

INSERT INTO `skills` (`id`, `name`, `percents`) VALUES
(1, 'HTML5', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `skill_lists`
--

CREATE TABLE `skill_lists` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `category_id` smallint(5) UNSIGNED NOT NULL,
  `skill_id` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category` (`name`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Индексы таблицы `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skill_lists`
--
ALTER TABLE `skill_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `skill_list_id` (`skill_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `skill_lists`
--
ALTER TABLE `skill_lists`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `descriptions`
--
ALTER TABLE `descriptions`
  ADD CONSTRAINT `descriptions_jobs` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `skill_lists`
--
ALTER TABLE `skill_lists`
  ADD CONSTRAINT `skill_lists_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `skill_lists_skills` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
