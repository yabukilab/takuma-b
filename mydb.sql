-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-07-13 15:58:45
-- サーバのバージョン： 10.4.20-MariaDB
-- PHP のバージョン: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `mydb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `product`
--

INSERT INTO `product` (`id`, `name`, `email`) VALUES
(1, '教科書', 's1942121nn@s.chibakoudai.jp'),
(2, 'pen', 's1942121nn@s.chibakoudai.jp'),
(10, 'textbook', 's1942121nn@s.chibakoudai.jp'),
(13, 'book', 's1942121nn@s.chibakoudai.jp');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'kou', 's1942121nn@s.chibakoudai.jp', '$2y$10$sw4A4L80WOGuIMHrEUpFzOUCvjYOnO/vbI/Z40tZGPp3.56cXTLAm'),
(2, 'a', 's1942121aa@s.chibakoudai.jp', '$2y$10$MaNh3/.KUR3WzuQ6qTbakuEF3tS/5Zm.bUsAmJq2KXFC0.Flkrica'),
(3, 'b', 's1942121bb@s.chibakoudai.jp', '$2y$10$zFgA0StR7aq7Hln.INalEeMWzTUDJ75JfIAUUtxtTYA648/S0.cw6');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
