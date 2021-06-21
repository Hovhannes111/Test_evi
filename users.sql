-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2021 г., 22:15
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `evistep`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$0hSniFeSb/RWugIiGdqVoOzwehF0H/QR6tY7rZXYxlVoSf15HwQ8O', '1624092264.jpg', 2, NULL, '2021-06-18 19:22:37', '2021-06-19 08:44:24'),
(3, '5dhSqPW1w7', 'NmqWEQZWIF@gmail.com', NULL, '$2y$10$OAgv0RDkskEAoEoFq.vlR.3Ep2/4s9A3G/IF1S3yynCGLbm38gMP6', NULL, 1, NULL, NULL, '2021-06-19 08:54:27'),
(4, 'xSIJ7bmNxQ', 'qNI9y4MuOR@gmail.com', NULL, '$2y$10$fEIL/YfuBzQaA7Wj430lLOB.RKEQgHEDmWjG/5LB6YVaBFmSGoh7C', NULL, 1, NULL, NULL, NULL),
(5, 'aPV7Q6kB4p', '3GBdfpJezb@gmail.com', NULL, '$2y$10$hEh8CV/po0vP0RMfiIdBJOhwnnZmcT4b7mI70Xt35KbJ7AclWuqQ6', NULL, 1, NULL, NULL, NULL),
(6, 'U84yzntQ1Y', 'oc1IiUKWs6@gmail.com', NULL, '$2y$10$PwDY4uHR9kmbvsBRTL780O0K4GxUUhyPyWTxN8aGqzq3Zovtg49/2', NULL, 1, NULL, NULL, NULL),
(7, 'v7mIauQp5B', 'N9DZGWbjWz@gmail.com', NULL, '$2y$10$4ZmFaWxYHheQOOeGZ5FzWeikQeLWprW08nGYqd1FYbi5ghe65FJ.S', NULL, 2, NULL, NULL, '2021-06-19 08:53:13'),
(9, 'TK8NvN3vul', 'Fa5pdSNUba@gmail.com', NULL, '$2y$10$.N0/phJSC2I7qqYxAFxOxew2kSTbFdwcKjnSI0X1kZxqGEEDa3ORq', NULL, 1, NULL, NULL, NULL),
(10, 'JbmdROJw1n', '2ab803E8uj@gmail.com', NULL, '$2y$10$Vw.MqTYAZHwaNDhg977B9e3.9.9tkYE.YwZsyaxIeb33AyEYPeFna', '1624129524.jpg', 1, 'ZXD9SDvNXlh9Clo94hutGdpdYEaKBM25LVaAaKOb6BcarpUSHtVjvE4Hle7e', NULL, '2021-06-19 19:05:24'),
(11, 'am47nv82N8', 'UQpe8Ct1Mr@gmail.com', NULL, '$2y$10$bZEc1R4g4FPCTn5TWM7WIeoOc/.vRvmSkANHqL1I.EqbiZAir8PWi', NULL, 1, NULL, NULL, NULL),
(12, 'Ne8IUV0Ues', '6eVi6guwbr@gmail.com', NULL, '$2y$10$XLlhxiIkEe1OY/sdnjwtG.c5bCdaIfOTOJX3eGuFEtiJMB.jJ/BSu', NULL, 1, NULL, NULL, NULL),
(13, 'r5BY1HFsSz', '5tzpzRQ4MF@gmail.com', NULL, '$2y$10$SdJToEtXliwF2XG9XxP1POhKLbkVudjoMjEmho0BX9bPHe53Cv76.', NULL, 1, NULL, NULL, NULL),
(14, 'NMewUXK9Bl', 'Rn9QBvzmEA@gmail.com', NULL, '$2y$10$HmeX8oBGRfgAaZOR8Ez1Xe9a8H1CdJ57KLt1fXdP4oNUhfcoecNKq', NULL, 2, NULL, NULL, '2021-06-19 06:25:23'),
(15, 'v5IX03p4eg', 'hAMDVz35hu@gmail.com', NULL, '$2y$10$Krv4Zrxt2DeosAU3FF/krO6DyuejGbeRsACn8.4M9myMpUgn72afy', NULL, 1, NULL, NULL, NULL),
(16, '4tktOtOKA0', 'DESUI4tkfS@gmail.com', NULL, '$2y$10$u2ZOKiDyxrw3B124E9KFk.3cVOzjFGonoScpreyLdMh12KEhVGOEG', NULL, 1, NULL, NULL, NULL),
(17, 'Jf9jq4Ibmm', 'zchIAjXhWN@gmail.com', NULL, '$2y$10$YAb2UdjJbUZvaNkhWht.iOE5V3oPAV6XEnTEDL/PnduZFsFC.sYUS', NULL, 1, NULL, NULL, NULL),
(18, '6FsExjGJZs', 'FmYBNswfKy@gmail.com', NULL, '$2y$10$sM6DQNAY0TrFpg0IqTf0pORgqEwZiY6rew2sx7Zkv1hcCHadp.Rm.', NULL, 1, NULL, NULL, NULL),
(19, 'gBQ5Wiko10', 'eGbfoj1Ix8@gmail.com', NULL, '$2y$10$G0TQUV21A0AvU9.5oxKmhOP2hTaMuwQiY3R8xu/QsrBxmQR5xmyFy', NULL, 1, NULL, NULL, NULL),
(20, 'ql1vmJmqqH', 'RyR7A7HXgi@gmail.com', NULL, '$2y$10$oUywkfvaJWtqYLsOrufYUu2/ulHtdAyb8kc7eZp6G3PqCsrbPijWq', NULL, 1, NULL, NULL, NULL),
(21, 'Wfei4nhbq4', 'QNrTmXy30Z@gmail.com', NULL, '$2y$10$t7acbf7vLVXl7HGVENIVPOgJ5oqOFYLScPCY0gsUXkRhGcickjd7K', NULL, 1, NULL, NULL, NULL),
(22, 'fsIFYBMbTM', 'Xqn9XDcX4C@gmail.com', NULL, '$2y$10$ea.S5nwRxRMP1U1icu64Je/YbxZVdMhbXMHYbEZwnh3fTfqRnW2Uy', NULL, 1, NULL, NULL, NULL),
(23, 'kMXNKzF0lb', 'kpz8uEOvju@gmail.com', NULL, '$2y$10$MVozbdiiGwtxZ25z3.1FX.uQ1w4ucFkM/ueTS.oSG9CjuYL/PPeCG', NULL, 1, NULL, NULL, NULL),
(24, 'lUQZ4JldnW', 'b6E6ut1JdL@gmail.com', NULL, '$2y$10$oqOyOqp6x4k3j5OzcBqKvetFHWOzLuMppoZbvm0lIHIR6mSO.eZ46', NULL, 1, NULL, NULL, NULL),
(25, '7rAkcPwV41', 'ybreIKnDTZ@gmail.com', NULL, '$2y$10$4KLzfJyV3LQboTggh3IRGuUxOxDINekDmtV5CDlNIPGHDQKE95/AG', NULL, 1, NULL, NULL, NULL),
(26, 'zUH48Z4woY', 'mRycA0DTK9@gmail.com', NULL, '$2y$10$oshAwn8RwbcgwSkE/1Lk/uKlI7/I.HwsVbUFMunxDzoS4jMydd9UK', NULL, 1, NULL, NULL, NULL),
(27, 'bosk1NBWUp', 'zIEIlSH6Jc@gmail.com', NULL, '$2y$10$XGL3kuAoVVEllEoM5P0lYOgOBByEkVV8ZdDjzyt3qPjIFCW3oLg5G', NULL, 1, NULL, NULL, NULL),
(28, '5mJvtjDogz', 'AY0gAsmu5x@gmail.com', NULL, '$2y$10$Br8HH6POhsytMZrARS8k9Oe6gUiblCf.4uOfDm4QefePd5YkNWYLS', NULL, 1, NULL, NULL, NULL),
(29, 'fxmHY8temv', 'K1STT4gao4@gmail.com', NULL, '$2y$10$pj0j9BNWaELG7ZdqmmIqseYxZh2Z1UuusuK9M9lzMV/GtkADUeIKy', NULL, 1, NULL, NULL, NULL),
(30, 'PwiGx7RGEW', 'mYBqQ5jbtW@gmail.com', NULL, '$2y$10$nEoDtpBeysyR.rKB99wUnuqkaAJT/dqr1ltGQLvTndHpckhxlpzou', NULL, 1, NULL, NULL, NULL),
(31, 'inh11zVmsT', 'ltwD0GmNPA@gmail.com', NULL, '$2y$10$7vfokfZZDLz4mwpQpYWCYuLi3liEHYP2dR9fnioZrsDp8hIz6agPu', NULL, 1, NULL, NULL, NULL),
(33, 'asdasda', 'dssads@as.as', NULL, '$2y$10$EZZ4o9IjLS5RhrXdiNB7g.fxjw5WLgix2e2UAaDtt4oXdfb2wwFfe', '1624088049.jpg', 1, NULL, '2021-06-19 07:07:44', '2021-06-19 07:34:09');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
