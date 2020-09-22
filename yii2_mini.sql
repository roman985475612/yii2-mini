-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 22 2020 г., 17:05
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2_mini`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `alias`) VALUES
(1, 'Lifestyle', 'lifestyle'),
(2, 'Food', 'food'),
(3, 'Nature', 'nature'),
(4, 'Photography', 'photography');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `exerpt` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `exerpt`, `content`, `img`, `created_at`, `keywords`, `description`) VALUES
(1, 2, 'Post 1', 'In neque est, dignissim et nisl ut, congue congue urna. Integer euismod magna elementum eros lobortis vehicula. Pellentesque sit amet ornare ex, sit amet luctus lorem. Nulla facilisi. Ut risus purus, dictum vitae tincidunt tristique, lacinia sed mauris. A', 'Morbi ac nisi a dolor auctor pulvinar. Donec id purus at ligula placerat gravida. Nunc sed nunc eu metus tristique venenatis id sed enim. Donec gravida rhoncus vestibulum. Vivamus aliquet, tortor quis feugiat hendrerit, diam dolor egestas ipsum, non dapibus massa dui fermentum sem. Nam sit amet turpis nec eros lobortis feugiat ac id mauris. In sed convallis felis. Duis ut sagittis dolor. Sed laoreet leo eu rutrum venenatis. Phasellus hendrerit, erat et dignissim ultrices, massa mauris suscipit arcu, a consectetur nibh libero elementum neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla laoreet blandit ipsum, eu pulvinar nulla pellentesque nec. Pellentesque blandit massa lacus, at pretium mauris vulputate in. ', 'img/img-1.jpg', '2020-09-22 12:22:29', 'lorem ipsum', 'Morbi ac nisi a dolor auctor pulvinar'),
(2, 1, 'Post 2', 'In neque est, dignissim et nisl ut, congue congue urna. Integer euismod magna elementum eros lobortis vehicula. Pellentesque sit amet ornare ex, sit amet luctus lorem. Nulla facilisi. Ut risus purus, dictum vitae tincidunt tristique, lacinia sed mauris. A', 'Morbi ac nisi a dolor auctor pulvinar. Donec id purus at ligula placerat gravida. Nunc sed nunc eu metus tristique venenatis id sed enim. Donec gravida rhoncus vestibulum. Vivamus aliquet, tortor quis feugiat hendrerit, diam dolor egestas ipsum, non dapibus massa dui fermentum sem. Nam sit amet turpis nec eros lobortis feugiat ac id mauris. In sed convallis felis. Duis ut sagittis dolor. Sed laoreet leo eu rutrum venenatis. Phasellus hendrerit, erat et dignissim ultrices, massa mauris suscipit arcu, a consectetur nibh libero elementum neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla laoreet blandit ipsum, eu pulvinar nulla pellentesque nec. Pellentesque blandit massa lacus, at pretium mauris vulputate in. ', 'img/img-2.jpg', '2020-09-22 12:22:30', 'lorem ipsum', 'Morbi ac nisi a dolor auctor pulvinar'),
(3, 3, 'Post 3', 'In neque est, dignissim et nisl ut, congue congue urna. Integer euismod magna elementum eros lobortis vehicula. Pellentesque sit amet ornare ex, sit amet luctus lorem. Nulla facilisi. Ut risus purus, dictum vitae tincidunt tristique, lacinia sed mauris. A', 'Morbi ac nisi a dolor auctor pulvinar. Donec id purus at ligula placerat gravida. Nunc sed nunc eu metus tristique venenatis id sed enim. Donec gravida rhoncus vestibulum. Vivamus aliquet, tortor quis feugiat hendrerit, diam dolor egestas ipsum, non dapibus massa dui fermentum sem. Nam sit amet turpis nec eros lobortis feugiat ac id mauris. In sed convallis felis. Duis ut sagittis dolor. Sed laoreet leo eu rutrum venenatis. Phasellus hendrerit, erat et dignissim ultrices, massa mauris suscipit arcu, a consectetur nibh libero elementum neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla laoreet blandit ipsum, eu pulvinar nulla pellentesque nec. Pellentesque blandit massa lacus, at pretium mauris vulputate in. ', 'img/img-3.jpg', '2020-09-22 12:22:31', 'lorem ipsum', 'Morbi ac nisi a dolor auctor pulvinar'),
(4, 3, 'Post 4', 'In neque est, dignissim et nisl ut, congue congue urna. Integer euismod magna elementum eros lobortis vehicula. Pellentesque sit amet ornare ex, sit amet luctus lorem. Nulla facilisi. Ut risus purus, dictum vitae tincidunt tristique, lacinia sed mauris. A', 'Morbi ac nisi a dolor auctor pulvinar. Donec id purus at ligula placerat gravida. Nunc sed nunc eu metus tristique venenatis id sed enim. Donec gravida rhoncus vestibulum. Vivamus aliquet, tortor quis feugiat hendrerit, diam dolor egestas ipsum, non dapibus massa dui fermentum sem. Nam sit amet turpis nec eros lobortis feugiat ac id mauris. In sed convallis felis. Duis ut sagittis dolor. Sed laoreet leo eu rutrum venenatis. Phasellus hendrerit, erat et dignissim ultrices, massa mauris suscipit arcu, a consectetur nibh libero elementum neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla laoreet blandit ipsum, eu pulvinar nulla pellentesque nec. Pellentesque blandit massa lacus, at pretium mauris vulputate in. ', 'img/img-4.jpg', '2020-09-22 12:22:30', 'lorem ipsum', 'Morbi ac nisi a dolor auctor pulvinar'),
(5, 4, 'Post 5', 'In neque est, dignissim et nisl ut, congue congue urna. Integer euismod magna elementum eros lobortis vehicula. Pellentesque sit amet ornare ex, sit amet luctus lorem. Nulla facilisi. Ut risus purus, dictum vitae tincidunt tristique, lacinia sed mauris. A', 'Morbi ac nisi a dolor auctor pulvinar. Donec id purus at ligula placerat gravida. Nunc sed nunc eu metus tristique venenatis id sed enim. Donec gravida rhoncus vestibulum. Vivamus aliquet, tortor quis feugiat hendrerit, diam dolor egestas ipsum, non dapibus massa dui fermentum sem. Nam sit amet turpis nec eros lobortis feugiat ac id mauris. In sed convallis felis. Duis ut sagittis dolor. Sed laoreet leo eu rutrum venenatis. Phasellus hendrerit, erat et dignissim ultrices, massa mauris suscipit arcu, a consectetur nibh libero elementum neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla laoreet blandit ipsum, eu pulvinar nulla pellentesque nec. Pellentesque blandit massa lacus, at pretium mauris vulputate in. ', 'img/img-5.jpg', '2020-09-22 12:22:29', 'lorem ipsum', 'Morbi ac nisi a dolor auctor pulvinar'),
(6, 1, 'Post 6', 'In neque est, dignissim et nisl ut, congue congue urna. Integer euismod magna elementum eros lobortis vehicula. Pellentesque sit amet ornare ex, sit amet luctus lorem. Nulla facilisi. Ut risus purus, dictum vitae tincidunt tristique, lacinia sed mauris. A', 'Morbi ac nisi a dolor auctor pulvinar. Donec id purus at ligula placerat gravida. Nunc sed nunc eu metus tristique venenatis id sed enim. Donec gravida rhoncus vestibulum. Vivamus aliquet, tortor quis feugiat hendrerit, diam dolor egestas ipsum, non dapibus massa dui fermentum sem. Nam sit amet turpis nec eros lobortis feugiat ac id mauris. In sed convallis felis. Duis ut sagittis dolor. Sed laoreet leo eu rutrum venenatis. Phasellus hendrerit, erat et dignissim ultrices, massa mauris suscipit arcu, a consectetur nibh libero elementum neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla laoreet blandit ipsum, eu pulvinar nulla pellentesque nec. Pellentesque blandit massa lacus, at pretium mauris vulputate in. ', 'img/img-6.jpg', '2020-09-22 12:22:30', 'lorem ipsum', 'Morbi ac nisi a dolor auctor pulvinar'),
(7, 4, 'Post 7', 'In neque est, dignissim et nisl ut, congue congue urna. Integer euismod magna elementum eros lobortis vehicula. Pellentesque sit amet ornare ex, sit amet luctus lorem. Nulla facilisi. Ut risus purus, dictum vitae tincidunt tristique, lacinia sed mauris. A', 'Morbi ac nisi a dolor auctor pulvinar. Donec id purus at ligula placerat gravida. Nunc sed nunc eu metus tristique venenatis id sed enim. Donec gravida rhoncus vestibulum. Vivamus aliquet, tortor quis feugiat hendrerit, diam dolor egestas ipsum, non dapibus massa dui fermentum sem. Nam sit amet turpis nec eros lobortis feugiat ac id mauris. In sed convallis felis. Duis ut sagittis dolor. Sed laoreet leo eu rutrum venenatis. Phasellus hendrerit, erat et dignissim ultrices, massa mauris suscipit arcu, a consectetur nibh libero elementum neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla laoreet blandit ipsum, eu pulvinar nulla pellentesque nec. Pellentesque blandit massa lacus, at pretium mauris vulputate in. ', 'img/img-7.jpg', '2020-09-22 12:22:31', 'lorem ipsum', 'Morbi ac nisi a dolor auctor pulvinar'),
(8, 2, 'Post 8', 'In neque est, dignissim et nisl ut, congue congue urna. Integer euismod magna elementum eros lobortis vehicula. Pellentesque sit amet ornare ex, sit amet luctus lorem. Nulla facilisi. Ut risus purus, dictum vitae tincidunt tristique, lacinia sed mauris. A', 'Morbi ac nisi a dolor auctor pulvinar. Donec id purus at ligula placerat gravida. Nunc sed nunc eu metus tristique venenatis id sed enim. Donec gravida rhoncus vestibulum. Vivamus aliquet, tortor quis feugiat hendrerit, diam dolor egestas ipsum, non dapibus massa dui fermentum sem. Nam sit amet turpis nec eros lobortis feugiat ac id mauris. In sed convallis felis. Duis ut sagittis dolor. Sed laoreet leo eu rutrum venenatis. Phasellus hendrerit, erat et dignissim ultrices, massa mauris suscipit arcu, a consectetur nibh libero elementum neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla laoreet blandit ipsum, eu pulvinar nulla pellentesque nec. Pellentesque blandit massa lacus, at pretium mauris vulputate in. ', 'img/img-8.jpg', '2020-09-22 12:22:30', 'lorem ipsum', 'Morbi ac nisi a dolor auctor pulvinar');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`category_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
