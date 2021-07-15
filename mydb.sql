-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-07-15 11:33:45
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
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `product`
--

INSERT INTO `product` (`id`, `name`, `email`) VALUES
(18, 'pen', 's1942121bb@s.chibakoudai.jp'),
(19, '教科書', 's1942121nn@s.chibakoudai.jp'),
(21, '過去問', 's1942121aa@s.chibakoudai.jp');

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
(3, 'b', 's1942121bb@s.chibakoudai.jp', '$2y$10$zFgA0StR7aq7Hln.INalEeMWzTUDJ75JfIAUUtxtTYA648/S0.cw6'),
(4, 'user1', 'user1@s.chibakoudai.jp', '$2y$10$Lf2b2RgelvVOkWOkxZI4au5os76fNWS/NFCRV6v9npba8Y0Ewsjf2'),
(5, 'user2', 'user2@s.chibakoudai.jp', '$2y$10$G23sDMd9l6xgzXoDMAy3UOpeHflujv5Gklxeychd8aPAMKVZSOXAe'),
(6, 'user3', 'user3@s.chibakoudai.jp', '$2y$10$0awu3yU0X2O7cAY/ShX4v.UPsTibACFTWGgNMf/g0nauRlTL64V8a'),
(7, 'a', 's1942121aa@s.chibakoudai.jp', '$2y$10$yadeqPmvFUgiOxXih2WjQu6SH7sZTxe6SozbFPwgISJwGeCylQ8uO');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
