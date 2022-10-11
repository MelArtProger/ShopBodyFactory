-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 28 2022 г., 21:54
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kategory`
--

CREATE TABLE IF NOT EXISTS `kategory` (
  `idK` int(11) NOT NULL AUTO_INCREMENT,
  `nazK` varchar(30) NOT NULL,
  `idM` int(11) NOT NULL,
  PRIMARY KEY (`idK`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=113 ;

--
-- Дамп данных таблицы `kategory`
--

INSERT INTO `kategory` (`idK`, `nazK`, `idM`) VALUES
(78, 'Гейнеры на быстрых углеводах', 22),
(77, 'Говяжий', 21),
(76, 'Яичный', 21),
(75, 'Изоляты и гидролизаты', 21),
(74, 'Растительный', 21),
(73, 'Казеин и молочный', 21),
(72, 'Комплексный', 21),
(71, 'Сывороточный', 21),
(79, 'Гейнеры на долгих углеводах', 22),
(80, 'Углеводные коктейли', 22),
(81, 'Жиросжигатели', 23),
(82, 'Л-карнитин', 23),
(83, 'Безопасные жиросжигатели', 23),
(84, 'BCAA', 24),
(85, 'Глютамин', 24),
(86, 'Комплексные', 24),
(87, 'Аргинин и Донаторы NO', 24),
(88, 'Прочие аминокислоты', 24),
(89, 'Напитки', 25),
(90, 'Низкокалорийные соусы и джемы', 25),
(91, 'Ореховые пасты', 25),
(92, 'Правильное питание', 25),
(93, 'Сахарозаменители', 25),
(94, 'Батончики и другие закуски', 25),
(95, 'Анаболические комплексы', 26),
(96, 'Предтренировочные комплексы', 26),
(97, 'Послетренировочные комплексы', 26),
(98, 'Изотоники', 26),
(99, 'Креатин', 26),
(100, 'Бета-аланин', 26),
(101, 'Энергетики', 26),
(102, 'Энергетические гели', 26),
(103, 'Омега 3-6-9', 27),
(104, 'Витамины и минералы', 27),
(105, 'Для суставов и связок', 27),
(106, 'Тестобустеры и ZMA', 27),
(107, 'Антиоксиданты и Q10', 27),
(108, 'Для печени и ПКТ', 27),
(109, 'Качество сна', 27),
(110, 'Улучшение пищеварения', 27),
(111, 'Общеукрепляющие добавки', 27),
(112, 'Для работы мозга', 27);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `idM` int(11) NOT NULL AUTO_INCREMENT,
  `nazM` varchar(50) NOT NULL,
  PRIMARY KEY (`idM`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`idM`, `nazM`) VALUES
(25, 'Батончики, напитки, закуски'),
(24, 'Аминокислоты'),
(23, 'Похудение'),
(22, 'Набор массы'),
(21, 'Протеин'),
(26, 'Выносливость и силовые'),
(27, 'Продукт для здоровья');

-- --------------------------------------------------------

--
-- Структура таблицы `shoutbox`
--

CREATE TABLE IF NOT EXISTS `shoutbox` (
  `idO` int(11) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `massage` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE IF NOT EXISTS `tovar` (
  `idT` int(11) NOT NULL AUTO_INCREMENT,
  `idK` int(11) NOT NULL,
  `nazT` varchar(100) NOT NULL,
  `datPost` date NOT NULL,
  `priceProd` int(11) NOT NULL,
  `opisanie` varchar(10000) NOT NULL,
  `photoT` varchar(50) NOT NULL,
  PRIMARY KEY (`idT`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=113 ;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`idT`, `idK`, `nazT`, `datPost`, `priceProd`, `opisanie`, `photoT`) VALUES
(112, 71, 'MAXLER GOLDEN WHEY 2270 ГР', '2022-05-14', 6550, '100% Golden Whey – это чистый сывороточный белок высочайшего класса,\r\nкоторый идеально подходит для интенсивных тренировок!\r\nПродукт содержит 100% чистые концентрат, изолят и гидролизат\r\nсывороточного протеина высокого качества, обеспечивающий быстрое\r\nвсасывание и усваивание белка. Незаменим в период интенсивных\r\nтренировок, когда необходимо увеличить потребление белка для поддержки\r\nположительного баланса азота и насыщения мышц необходимыми для\r\nроста и восстановления аминокислотами. 100% Golden Whey – это легко\r\nусваиваемый продукт, насыщенный незаменимыми аминокислотами (BCAA)\r\nдля быстрого восстановления мышечной ткани после тренировок.\r\n\r\n-100% ультрафильтрованный сывороточный протеин\r\n- высокая концентрация BCAA\r\n- взрывной рост мышечной массы, быстрое сжигание жира\r\n- моментальное восстановление\r\n- легкое и быстрое усвоение', '41489092-1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `loginU` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nameU` varchar(30) NOT NULL,
  `famU` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `datRU` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`loginU`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`loginU`, `passwd`, `email`, `nameU`, `famU`, `phone`, `datRU`, `status`) VALUES
('admin', '152', '', '', '', '', '1990-01-01', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE IF NOT EXISTS `zakaz` (
  `idZ` int(11) NOT NULL AUTO_INCREMENT,
  `datZ` date NOT NULL,
  `loginU` varchar(100) NOT NULL,
  `famU` varchar(100) NOT NULL,
  `addrGor` varchar(100) NOT NULL,
  `addrUl` varchar(100) NOT NULL,
  `addrDom` varchar(100) NOT NULL,
  `addrKv` varchar(100) NOT NULL,
  `phoneDost` varchar(12) NOT NULL,
  `statusZ` int(11) NOT NULL,
  `datPost` date NOT NULL,
  PRIMARY KEY (`idZ`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`idZ`, `datZ`, `loginU`, `famU`, `addrGor`, `addrUl`, `addrDom`, `addrKv`, `phoneDost`, `statusZ`, `datPost`) VALUES
(61, '2022-05-29', 'Полина', 'Жилова', 'Нижний Новгород', 'Кировская', '11а', '35', '+79867688308', 0, '2022-05-29'),
(62, '2022-05-29', 'Артём', 'Мельников', 'Нижний Новгород', 'Гордеевская', '18', '23', '+79867688308', 1, '2022-05-29');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaztovar`
--

CREATE TABLE IF NOT EXISTS `zakaztovar` (
  `idZ` int(11) NOT NULL,
  `idT` int(11) NOT NULL,
  `kolvo` int(11) NOT NULL,
  `pricePok` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zakaztovar`
--

INSERT INTO `zakaztovar` (`idZ`, `idT`, `kolvo`, `pricePok`) VALUES
(62, 112, 1, 6550),
(61, 112, 1, 6550);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
