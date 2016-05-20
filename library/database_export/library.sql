-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2016 г., 14:30
-- Версия сервера: 5.6.20
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(40) NOT NULL,
  `cover` text NOT NULL,
  `isbn` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `cover`, `isbn`, `category`) VALUES
(7, 'Abay Joly', 'Mukhtar Auezov', 'auez.jpg', '15686689', 'Literature'),
(8, 'Sherlock Holmes', 'A.Conan Doile', 'batman.jpg', '789456132', 'History'),
(9, 'Kan men ter', 'Mukhtar Shahanov', 'hummer.jpg', '1685786', 'Literature'),
(10, 'Everestke wygu', 'Mukhtar Shahanov', '5382.jpg', '1892468978', 'History');

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE IF NOT EXISTS `main` (
`id` int(11) NOT NULL,
  `razdel` varchar(50) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `razdel`, `content`) VALUES
(1, 'Table', '<style> .new {	-webkit-column-count: 3;	column-count: 3;	-webkit-column-gap: 40px;	column-gap: 40px;	-webkit-column-rule: 3px solid green;	column-rule: 3px solid green;}h2 {	-webkit-column-span: all;	column-span: all;}</style><div class="new"><h2>The most beautiful library in the world</h2>The ingeniously simple concept for the library at Tokyo’s Musashino ArtUniversity speaks volumes: it’s made entirely of wood bookshelves, with a glass exterior. Inside, architect SouFujimoto’s spiral-shaped design naturally spurs the visitor onward and features light-filled, comfortable corners for reading and easy access to volumes. It’s a reminder that even in the digital age, libraries can be inviting public spaces and that their beauty extends beyond the gilded, frescoed libraries of old buildings.</div>');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(35) NOT NULL,
  `full_name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `username`, `password`) VALUES
(1, 'Abylay', 'abylay@mail.ru', 'Tillabek', 'Abylay'),
(2, 'Maksat', 'nurlanuly@mail.ru', 'max', 'nurlan'),
(3, 'Jandos', 'jako@mail.ru', 'jando', 'bole'),
(4, 'Askar ', 'askar@mail.ru', 'askar97', 'tursyn'),
(5, 'Abylaukhan', 'abyl@mail.ru', 'aboka', 'aboka'),
(6, 'Alinur', 'alinur@mil.ru', 'Raiymbek', '1234'),
(7, 'Kabylan', 'kabyl@mail.ru', 'Boranbay', 'boran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(35) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
