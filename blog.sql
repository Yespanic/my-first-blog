-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Авг 09 2019 г., 23:24
-- Версия сервера: 5.7.27-0ubuntu0.18.04.1
-- Версия PHP: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`) VALUES
(2, 'онгпо', 'После смерти родителей молодой счетовод Уильям Блэйк в надежде найти работу приезжает на Дикий Запад, где по злой воле случая за его голову назначается награда в 500 долларов. Раненого в грудь возле сердца, его выхаживает индеец, которого много лет возили по городам Америки и Англии в качестве живого экспоната. Он принял этого юношу в очках за поэта Уильяма Блэйка, чьи стихи запали в сердце «дикаря», и стал его ангелом-хранителем. А опекаемый, лишившись очков, сам вдруг стал стрелять без промаха, увеличивая стоимость своей головы, оставляя за собой след из трупов лиц, охочих до награды, и приближаясь к тому «месту, откуда приходят и куда возвращаются все духи».', '2019-07-19'),
(4, 'Выживут', 'История древних вампиров Адама и Евы, которые видели ещё татаро-монгольское иго и инквизицию. Адам — рокер из Детройта, играющий андеграунд-музыку. Он уже очень старый, он хочет тишины, покоя, и тихо ненавидит «зомби» (так вампиры зовут людей). Ева же — напротив, весьма жизнерадостная вампирелла постарше, общающаяся с поэтом времён Шекспира, Кристофером Марло, и живущая в Танжере. Она приезжает вытаскивать своего любовника из пучины депрессии. Но идиллию нарушает внезапно заявляющаяся младшая сестра Евы — Ава. Исход ситуации предсказать не в силах никто — выживут только любовники?', '2019-07-18'),
(5, 'totyt', ',jghgfvjgdf', '2019-08-04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;