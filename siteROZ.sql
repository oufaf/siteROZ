-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 29 2025 г., 17:07
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `siteROZ`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `session_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `quantity`, `session_id`, `created_at`) VALUES
(1, 1, 'Футбольный мяч', 1, 'abc123sessionid', '2025-04-29 10:59:09'),
(2, 2, 'Беговая дорожка', 2, 'abc123sessionid', '2025-04-29 10:59:41'),
(3, 3, 'Гантели наборные', 3, 'abc123sessionid', '2025-04-29 10:59:45'),
(4, 4, 'Горный велосипед', 4, 'abc123sessionid', '2025-04-29 10:59:53'),
(5, 5, 'Беговые кроссовки', 5, 'abc123sessionid', '2025-04-29 10:59:58'),
(6, 6, 'Теннисная ракетка', 6, 'abc123sessionid', '2025-04-29 11:00:02'),
(7, 7, 'Спортивный костюм', 7, 'abc123sessionid', '2025-04-29 11:00:07'),
(8, 8, 'Коврик для йоги', 8, 'abc123sessionid', '2025-04-29 11:00:11'),
(9, 9, 'Скакалка', 9, 'abc123sessionid', '2025-04-29 11:00:15');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `discription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `discription`, `image`) VALUES
(1, 'Футбольный мяч', '4 990', 'Профессиональный мяч для футбола', 'football.png'),
(2, 'Беговая дорожка', '89 990', 'Электрическая беговая дорожка', 'treadmill.png'),
(3, 'Гантели наборные', '8 490', 'Резиновые гантели с блинами', 'dumbbells.png'),
(4, 'Горный велосипед', '34 990', '21 скорость, алюминиевая рама', 'bike.png'),
(5, 'Беговые кроссовки', '7 990', 'Антискользящие кроссовки для бега', 'shoes.png'),
(6, 'Теннисная ракетка', '12 490', 'Профессиональная ракетка для тенниса', 'racket.png'),
(7, 'Спортивный костюм', '10 299', 'Дышащий комплект для тренировок', 'suit.png'),
(8, 'Коврик для йоги', '2 890', 'Антискользящий коврик для занятий йогой', 'yoga.png'),
(9, 'Скакалка', '790', 'Стальной тросс с подшипниками', 'rope.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `session_id` (`session_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
