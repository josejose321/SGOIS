-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 05:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_no` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_no`, `firstname`, `middlename`, `lastname`, `email`, `phone`, `position`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('03-52623', 'Alexander', 'Gottlieb', 'Will', 'allison.kilback@example.net', '09383326346', 'Staff', 'defaultAvatar.jpg', '$2y$10$iFJaJtW3GekmKw9oYdMCkO45f9jFxa64OlxUpqgQcVBbBSrGr1Vei', NULL, '2022-03-24 16:26:01', '2022-03-24 16:26:01'),
('05-13884', 'Teresa', 'Kuhic', 'Volkman', 'aidan59@example.net', '09147310438', 'Director', 'defaultAvatar.jpg', '$2y$10$GYPbQaClUFm2Z.ONKu9RhuBdlVCk6MNOjE7BFA9KGoy4GWUbfmPWO', NULL, '2022-03-24 16:26:01', '2022-03-24 16:26:01'),
('06-92622', 'Granville', 'Walsh', 'Spinka', 'ruecker.remington@example.net', '09342473890', 'Director', 'defaultAvatar.jpg', '$2y$10$HpOYJwytJA0Ca7U2NzE4A.cbbjIHqDgRsEozxy3/6mx3Ksr45dOi.', NULL, '2022-04-25 23:00:04', '2022-04-25 23:00:04'),
('07-54476', 'John', 'Bosco', 'Cartwright', 'ejacobi@example.com', '09349409451', 'Staff', 'defaultAvatar.jpg', '$2y$10$D.dAyacfPZS8xd0Y7ke8m./Zf.qvrPwFOe4kbGFKewg/aP2W0V2q2', NULL, '2022-03-24 16:26:02', '2022-03-24 16:26:02'),
('11-01428', 'Dahlia', 'Torphy', 'Fay', 'glen69@example.com', '09833408609', 'Director', 'defaultAvatar.jpg', '$2y$10$EDd2Ep3.IJA.AYbT4MnnGeW4opesgeF1S0V7QuBK1oOICaKctB1US', NULL, '2022-03-26 02:27:31', '2022-03-26 02:27:31'),
('11-28042', 'Ricardo', 'Turcotte', 'Gorczany', 'rblock@example.com', '09792481563', 'Assistant', 'defaultAvatar.jpg', '$2y$10$szo7tRUKz2QNXogLywML4eJdICcqpM7mK9X1uEkFDAu5hP2BN6kve', NULL, '2022-03-25 03:40:27', '2022-03-25 03:40:27'),
('12-38571', 'Malvina', 'Moore', 'Schoen', 'hagenes.bridgette@example.net', '09451810700', 'Director', 'defaultAvatar.jpg', '$2y$10$OwIAqtwWbffsn6z.cRqFrOiAh2FW4m6DQipz8ozI2.XTwtU9AsVGm', NULL, '2022-03-24 16:26:01', '2022-03-24 16:26:01'),
('12-54997', 'Breana', 'Effertz', 'Senger', 'sandrine.denesik@example.net', '09995487190', 'Staff', 'defaultAvatar.jpg', '$2y$10$wBFYhLwHG.oCwFtTG/4LQ.JMIfY4vXxZkxh.pg1GeXo.CS7kjvSEm', NULL, '2022-04-25 22:58:36', '2022-04-25 22:58:36'),
('13-28975', 'Oral', 'Jenkins', 'Howell', 'efrain08@example.org', '09020032958', 'Staff', 'defaultAvatar.jpg', '$2y$10$ZQtL4tU5H5bj0NXc1IPwquJv/7Yi0JXTbFW.6/sQwWvGYa9CIEvgO', NULL, '2022-03-26 02:27:32', '2022-03-26 02:27:32'),
('13-43675', 'Clifford', 'Lebsack', 'Durgan', 'mathew.boyer@example.com', '09285106648', 'Staff', 'defaultAvatar.jpg', '$2y$10$CgYxUM7gGeqgTsVl2eiDnuSgUN.DTsY.UWRuFnPZDjWjKNp9IwXBO', NULL, '2022-03-26 02:27:31', '2022-03-26 02:27:31'),
('16-12182', 'Keaton', 'Schuster', 'Franecki', 'keebler.jett@example.net', '09302842573', 'Staff', 'defaultAvatar.jpg', '$2y$10$9VFj20dbllYl1pDbJUyM0.Vcif4suaxlOcLbaKNGHm8hZfFZGdAaW', NULL, '2022-03-25 03:40:27', '2022-03-25 03:40:27'),
('18-08925', 'Jose', 'Vargas', 'Evasco', 'jose.evascoii1150@gmail.com', '09486330988', 'Director', 'PGR8IfoyiaQXeIeQq8uQ2FImSN8zYHgbKomWRu4z.jpg', '$2y$10$OwIAqtwWbffsn6z.cRqFrOiAh2FW4m6DQipz8ozI2.XTwtU9AsVGm', NULL, '2022-03-17 12:12:21', '2022-04-26 06:35:32'),
('18-55039', 'Mohammed', 'Effertz', 'Quitzon', 'marcia51@example.org', '09866051861', 'Assistant', 'defaultAvatar.jpg', '$2y$10$y2Bpx4sFvZPjPGV0RNUJ6OeJDOTpAmxPQX49Hrq.sal1gyC8hfrwu', NULL, '2022-03-25 03:40:27', '2022-03-25 03:40:27'),
('21-05970', 'Noe', 'Friesen', 'Parisian', 'lterry@example.org', '09981280467', 'Director', 'defaultAvatar.jpg', '$2y$10$plcBMvEzeBSLccYJiIUxZ.xtl/B0cr5IPhmRxCfUfsjUGr3QYfIA6', NULL, '2022-03-26 02:27:31', '2022-03-26 02:27:31'),
('21-84020', 'Randy', 'Mitchell', 'Konopelski', 'melody65@example.com', '09822754567', 'Assistant', 'defaultAvatar.jpg', '$2y$10$oEb8DhmHhKW2fTKdTq1GTOtVg4rWSkCrTgSNJlCPyJiqHMm/8bThm', NULL, '2022-04-25 23:00:04', '2022-04-25 23:00:04'),
('23-00956', 'Stephania', 'Veum', 'Schmeler', 'eloise.smitham@example.net', '09798351761', 'Assistant', 'defaultAvatar.jpg', '$2y$10$p4fPhgKl7a8F74FRG67f/embQISDWpprYauNHuHyi50aVqW1WSpDK', NULL, '2022-03-26 02:27:31', '2022-03-26 02:27:31'),
('25-33088', 'Jordon', 'Mohr', 'Bogan', 'geo.cruickshank@example.org', '09923456696', 'Assistant', 'defaultAvatar.jpg', '$2y$10$oCy/v6GPzM27wdlcLAAQ.ObuQth8DxzVIFiBdfv7PUav3zsK9H0bW', NULL, '2022-03-25 03:40:27', '2022-03-25 03:40:27'),
('31-92655', 'Margaret', 'Wehner', 'Gutmann', 'powlowski.earlene@example.org', '09365732838', 'Director', 'defaultAvatar.jpg', '$2y$10$jMdeZMOsz4yrWTAMj3mWpOdSxnMOrpZLCu1rvnf2JNtFJ/4SUX12O', NULL, '2022-03-24 16:26:00', '2022-03-24 16:26:00'),
('32-39471', 'Daphney', 'Johnston', 'Lueilwitz', 'lbayer@example.net', '09409739864', 'Assistant', 'defaultAvatar.jpg', '$2y$10$g6nr7yXKZJFquZsL5TdaBOmnrleXfW4dELWms8SUCI9frb2PFQrR6', NULL, '2022-04-25 22:58:37', '2022-04-25 22:58:37'),
('34-09523', 'Demond', 'Lakin', 'Jerde', 'dibbert.maynard@example.net', '09275745262', 'Staff', 'defaultAvatar.jpg', '$2y$10$6.uVgQz6eu8D/zY8X50UoeTfDETXyLLV6FTmnHVOJvo83U4GEfe82', NULL, '2022-04-25 23:00:04', '2022-04-25 23:00:04'),
('34-65400', 'Willow', 'Cummerata', 'Glover', 'nina.greenfelder@example.net', '09805770830', 'Staff', 'defaultAvatar.jpg', '$2y$10$bbCIOfu.qo9DI2a0ZhLuVeFjG1GHQgZeT43LH3H73hkUKkcf.gdBa', NULL, '2022-03-26 02:27:32', '2022-03-26 02:27:32'),
('36-37426', 'Taryn', 'Runolfsdottir', 'Trantow', 'xander.carroll@example.org', '09039987812', 'Staff', 'defaultAvatar.jpg', '$2y$10$IUZciO13rT2GyNToOxgDTuRmjwq5xbfqkf2uzpUhrEUZhxQGmNry2', NULL, '2022-03-26 02:27:31', '2022-03-26 02:27:31'),
('38-57722', 'Norris', 'Johns', 'Denesik', 'izaiah64@example.org', '09795716249', 'Assistant', 'defaultAvatar.jpg', '$2y$10$AjC/Kv7fDlTINmFbX/Qh4uIzVES.dNvFgN9R48/Qs9mmby2O84Tha', NULL, '2022-03-25 03:40:27', '2022-03-25 03:40:27'),
('38-88607', 'Caitlyn', 'Huels', 'O\'Keefe', 'franecki.geovanny@example.org', '09003271145', 'Staff', 'defaultAvatar.jpg', '$2y$10$A7FZpjFU.soKLJJCUKAAx.KaobyKGJo9RTopIWVeUyrmhK2Ox23ue', NULL, '2022-04-25 23:00:03', '2022-04-25 23:00:03'),
('41-91453', 'Dixie', 'Luettgen', 'Bergstrom', 'bayer.julie@example.org', '09491159943', 'Director', 'defaultAvatar.jpg', '$2y$10$Su8lGTy46TQXTYDli2oFzuynl1rFCpBHh.c/SWp.nwVacpdb7QPli', NULL, '2022-03-25 03:40:27', '2022-03-25 03:40:27'),
('41-93278', 'Oren', 'Hahn', 'Quigley', 'ayla.carter@example.net', '09879128082', 'Director', 'defaultAvatar.jpg', '$2y$10$EctjGF/JlxdQg1U3i3Hrl.tGIpzn/9FH9aR1JjH6s8UfTu77par8u', NULL, '2022-03-24 16:26:01', '2022-03-24 16:26:01'),
('44-33329', 'Ezekiel', 'Gutkowski', 'Bogisich', 'ndouglas@example.com', '09326262951', 'Assistant', 'defaultAvatar.jpg', '$2y$10$Cm3.ImuxQY9zEhqivlBPhua9KQ03oGpsN98K/0ce7cK7ilQ.6oxme', NULL, '2022-04-25 23:00:04', '2022-04-25 23:00:04'),
('46-42950', 'Newell', 'Sanford', 'Romaguera', 'jeramy.herman@example.net', '09866918308', 'Director', 'defaultAvatar.jpg', '$2y$10$LITameenwkH4HAweSmHpiu4rpCspCM9P6vj8XSk2z4P5tC56k7fFG', NULL, '2022-03-24 16:26:01', '2022-03-24 16:26:01'),
('48-80190', 'Johnpaul', 'Koelpin', 'Gutmann', 'zulauf.tyler@example.net', '09359781741', 'Staff', 'defaultAvatar.jpg', '$2y$10$4x1XR0hLAJ.WFbpbaLP5NOpAZqy7qUeChKpe71cH6axrzJm87KZYm', NULL, '2022-03-24 16:26:01', '2022-03-24 16:26:01'),
('49-86398', 'Tyrel', 'Cole', 'Bogisich', 'paula.heathcote@example.org', '09967888406', 'Director', 'defaultAvatar.jpg', '$2y$10$GIgEg5dnFsN61MRPV36xHOtWi6f52TyIyHPSa/WI8Z4IPdkQqrF8e', NULL, '2022-03-25 03:40:27', '2022-03-25 03:40:27'),
('54-82279', 'Esther', 'Runolfsdottir', 'Homenick', 'hassan76@example.com', '09619399270', 'Staff', 'defaultAvatar.jpg', '$2y$10$O7IULACl1uEPXsTfZ1JU6OyFgqRIKWRIvDkyeMwqVyrK0qolCSV8S', NULL, '2022-03-26 02:27:32', '2022-03-26 02:27:32'),
('58-50107', 'Margret', 'Huel', 'Rau', 'wmetz@example.com', '09731289422', 'Staff', 'defaultAvatar.jpg', '$2y$10$BI1dt38l41HOOHtEQwkPIed0DzqhG.xZQn0pqLfnIhGZ5f9bgolzG', NULL, '2022-03-26 02:27:31', '2022-03-26 02:27:31'),
('62-98169', 'Mariana', 'Stokes', 'Lubowitz', 'swill@example.org', '09940461683', 'Staff', 'defaultAvatar.jpg', '$2y$10$Za6vnnRTAKf6rLLzhUmKiebaEIMDpR9y.JNWyRHXvc7lpxOP9diWG', NULL, '2022-03-24 16:26:02', '2022-03-24 16:26:02'),
('64-72191', 'Adrianna', 'Torphy', 'Schowalter', 'skrajcik@example.com', '09443106246', 'Director', 'defaultAvatar.jpg', '$2y$10$9XvmytcED7M0Pma2xPACNOqVmAydCrNeMJy9u.JHvw0dGoiCMsMF2', NULL, '2022-03-25 03:40:26', '2022-03-25 03:40:26'),
('65-42639', 'Verona', 'Kuphal', 'Sanford', 'orn.duane@example.net', '09297728075', 'Assistant', 'defaultAvatar.jpg', '$2y$10$jzPYTB8ux5FeWQIVxBvBVunTG96rt5UWpLBguNkkSTCzAce5np.TW', NULL, '2022-04-25 22:58:36', '2022-04-25 22:58:36'),
('65-48373', 'Duncan', 'Satterfield', 'Reynolds', 'corbin66@example.com', '09775612197', 'Staff', 'defaultAvatar.jpg', '$2y$10$pQmNp6H3tgI9JPHAa/xeR..VpdgOUExoaDtGIDqA2yXxCa7WqAGrq', NULL, '2022-04-25 22:58:37', '2022-04-25 22:58:37'),
('67-65048', 'Claudie', 'Stark', 'Osinski', 'qpagac@example.org', '09305364890', 'Staff', 'defaultAvatar.jpg', '$2y$10$HFe/B6IaZiEv9UMk4YYAxelQdT3Ke3L991Y7xnHFz3HA/DxCKTmnO', NULL, '2022-04-25 22:58:37', '2022-04-25 22:58:37'),
('69-51133', 'Aliyah', 'Little', 'Orn', 'nyundt@example.org', '09046737763', 'Staff', 'defaultAvatar.jpg', '$2y$10$zHGaHn8E0u2a3b.sJEEKN.f6aTRuXu36mW6/BhXaUACII0rcL3GSq', NULL, '2022-03-25 03:40:27', '2022-03-25 03:40:27'),
('70-14728', 'Elizabeth', 'Schulist', 'Kertzmann', 'waelchi.agustin@example.org', '09721211690', 'Staff', 'defaultAvatar.jpg', '$2y$10$1gM4OMbSjd1B/s9Q3OUq8eLbTY9O4NY3s3XsGSN3toDm/QXfrn53u', NULL, '2022-04-25 23:00:04', '2022-04-25 23:00:04'),
('75-50668', 'Camden', 'Jacobson', 'Price', 'alfreda23@example.com', '09676718232', 'Director', 'defaultAvatar.jpg', '$2y$10$P/p/AaTy7kZa.e.Msq3s8eiETaHM3B.iSlF6AhbX37kArT697ehAa', NULL, '2022-04-25 23:00:04', '2022-04-25 23:00:04'),
('76-68473', 'Verona', 'Howe', 'Hagenes', 'miles.weimann@example.com', '09199637280', 'Assistant', 'defaultAvatar.jpg', '$2y$10$Y6oF9cyiyb11ZOZfMsvHBOWS4b1Aj8KRpYObHM.PHto2g0TvLrkW2', NULL, '2022-04-25 23:00:04', '2022-04-25 23:00:04'),
('77-36814', 'Birdie', 'Wunsch', 'Hansen', 'isac60@example.net', '09552413727', 'Assistant', 'defaultAvatar.jpg', '$2y$10$n1M6HeYx1kaVg9FsN2xjm.K1dJZFepzriFLnQ2SE4a15nZJMyr9E.', NULL, '2022-03-25 03:40:27', '2022-03-25 03:40:27'),
('86-51229', 'Chase', 'Tromp', 'Cassin', 'lonie.ward@example.com', '09951794490', 'Director', 'defaultAvatar.jpg', '$2y$10$ObrtseKlnVBFquBP.PbUceDgdGXxJa7zd2.ZJ6fOS75/9pjzSMCkG', NULL, '2022-04-25 22:58:37', '2022-04-25 22:58:37'),
('87-43754', 'Heather', 'Dickinson', 'Goyette', 'fritz28@example.org', '09516013293', 'Assistant', 'defaultAvatar.jpg', '$2y$10$yZP9B3ReiZxndc6lz7AqUO20EcwhzhxL5Jb/O1liwyIKLwoNJTOSS', NULL, '2022-04-25 23:00:04', '2022-04-25 23:00:04'),
('88-21534', 'Fannie', 'Carroll', 'Oberbrunner', 'clarissa.strosin@example.net', '09713026990', 'Assistant', 'defaultAvatar.jpg', '$2y$10$XElz9vhVRKPpZzsMsT/MHOmMF7I6OYGg6gpB0PJVSXbexxJTvaoTi', NULL, '2022-04-25 23:00:04', '2022-04-25 23:00:04'),
('88-36794', 'Christine', 'Monahan', 'Bogisich', 'swaniawski.brain@example.org', '09858372340', 'Director', 'defaultAvatar.jpg', '$2y$10$KcVXfjzZUaKdws4EPYmZFuzocS4zpaqTAXVvQCKMAxNKC98b2YB/q', NULL, '2022-04-25 22:58:36', '2022-04-25 22:58:36'),
('90-22391', 'Wilfred', 'Marvin', 'Mante', 'america.morar@example.org', '09431515188', 'Director', 'defaultAvatar.jpg', '$2y$10$YjYS6J3pwVVD9OR33pQvmu8XYnQidi9dLDbbKYTCWh0l74R0lOgzy', NULL, '2022-04-25 22:58:36', '2022-04-25 22:58:36'),
('90-55051', 'Hollis', 'Donnelly', 'Kirlin', 'gusikowski.cade@example.org', '09160510378', 'Director', 'defaultAvatar.jpg', '$2y$10$1OBRI9qpfUlAVSE3bd.42u8ADxaCtaelW9XvXjLm5snntlg.A53E6', NULL, '2022-03-24 16:26:01', '2022-03-24 16:26:01'),
('90-65299', 'Emily', 'Eichmann', 'Grant', 'akulas@example.org', '09523301985', 'Assistant', 'defaultAvatar.jpg', '$2y$10$JZMbq0Zvcsst5DrWhJwCNefA9JRB/hSFsm/JJMHFLMGUNEiHI0Va.', NULL, '2022-04-25 22:58:36', '2022-04-25 22:58:36'),
('91-25477', 'Barbara', 'Hodkiewicz', 'Simonis', 'jerod.price@example.org', '09354640333', 'Staff', 'defaultAvatar.jpg', '$2y$10$p3sjxu.fjotM0w6YWJYOMuEFnro5Bz3u4ZUiCw./OgJYJ5JeAQmv2', NULL, '2022-04-25 22:58:36', '2022-04-25 22:58:36'),
('98-92252', 'Gracie', 'Hessel', 'Rice', 'xwest@example.com', '09925698791', 'Staff', 'defaultAvatar.jpg', '$2y$10$GpWEK7MMDMgrD8nsdRx3t.kocZx2BHmFX5MXWAPkTiptbxClD5ujO', NULL, '2022-03-26 02:27:31', '2022-03-26 02:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `annoucements`
--

CREATE TABLE `annoucements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_no` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annoucements`
--

INSERT INTO `annoucements` (`id`, `subject`, `content`, `admin_no`, `created_at`, `updated_at`) VALUES
(12, 'PAPASA KA NA SA CAPSTONE', 'PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE  PAPASA KA NA SA CAPSTONE', '18-08925', '2022-03-26 02:28:23', '2022-03-26 02:28:23'),
(13, 'HELLO WORLD GOODBYE', 'HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE HELLO WORLD GOODBYE', '18-08925', '2022-03-26 12:03:44', '2022-03-26 12:03:44'),
(17, 'MALAPIT NA ANG GRADUATION', 'BOBO DAE PA KITA MA GRADUATE', '18-08925', '2022-04-02 05:18:22', '2022-04-04 06:10:45'),
(19, 'MGA BOBO KAMO', 'sdbjksb kjsbdkjbskjd bkjsdbgkjsbdkjfb kjwb kjsdbgkjabskjgbswkjdgbkjb kjqbkjsbdgkjabsgkjbwkjbwkjbwkjgbakjsbgksjdbgkjsdgs dg sd', '18-08925', '2022-04-20 04:51:55', '2022-04-20 04:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryNo` bigint(20) UNSIGNED NOT NULL,
  `officeCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memberCount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryNo`, `officeCode`, `name`, `type`, `field_team`, `memberCount`, `description`, `created_at`, `updated_at`) VALUES
(1, 'UNC-SDO', 'Sepak Takraw Varsity Team', 'Scholarship', 'Sepak Takraw', '14', 'Varsity - Sepak takraw', NULL, NULL),
(2, 'UNC-SDO', 'Volleyball Varsity Team', 'Scholarship', 'Volleyball', '15', 'Varsity -Volleyball Scholarships', NULL, NULL),
(3, 'UNC-SDO', 'Varsity -BasketballScholarship', 'Scholarship', 'Basketabll', '15', 'Varsity -BasketballScholarship', NULL, NULL),
(4, 'UNC-SDO', 'Varsity -Taewondo Scholarship', 'Scholarship', 'Taekwondo', '15', 'Varsity -Taewondo Scholarship', NULL, NULL),
(5, 'UNC-SDO', 'Varsity-Athletics', 'Scholarship', 'Athletics', '15', 'Varsity-Athletics', NULL, NULL),
(6, 'UNC-SDO', 'Varsity-Swimming Scholarship', 'Scholarship', 'Swimming', '5', 'Varsity-Swimming Scholarship', NULL, NULL),
(7, 'UNC-SDO', 'Varsity -Table Tennis Scholarship', 'Scholarship', 'Table Tennis', '5', 'Varsity -Table Tennis Scholarship', NULL, NULL),
(8, 'UNC-CULTURE&ARTS', 'Band-Band Squad Scholarship', 'Scholarship', 'Band', '30', 'Band-Band Squad Scholarship', NULL, NULL),
(9, 'UNC-CULTURE&ARTS', 'Beat Squad-Beat Squad Scholarship', 'Scholarship', 'Beat Squad', '25', 'Beat Squad-Beat Squad Scholarship', NULL, NULL),
(10, 'UNC-CULTURE&ARTS', 'PEP Squad-Pep Squad Scholarship', 'Scholarship', 'PEP Squad', '40', 'PEP Squad-Pep Squad Scholarship', NULL, NULL),
(11, 'UNC-CULTURE&ARTS', 'GLEE-CLUB-Glee Club Scholarship', 'Scholarship', 'GLEE CLUB', '20', 'GLEE-CLUB-Glee Club Scholarship', NULL, NULL),
(12, 'UNC-CULTURE&ARTS', 'Majorette-Majorette Corporations Scholarship', 'Scholarship', 'Majorette', '55', 'Majorette-Majorette Corporations Scholarship', NULL, NULL),
(13, 'UNC-HR', 'Student Assistant-Student Assistant Program Scholarship', 'Scholarship', 'Student Assistant', '100', 'Student Assistant-Student Assistant Program Scholarship', NULL, NULL),
(14, 'UNC-REGISTRAR', 'Discount-Alumni Dicount', 'Discount', 'Alumni Discount', 'max', 'Discount-Alumni Dicount', NULL, NULL),
(15, 'UNC-SGO', 'Discount-Members of the same family discount', 'Discount', 'Member of the same family', 'max', 'Discount-Members of the same family discount', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseNo` bigint(20) UNSIGNED NOT NULL,
  `departmentCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseNo`, `departmentCode`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'UNC-ELEM', 'Elementary Education', 'Junior High School Education', NULL, NULL),
(2, 'UNC-JHS', 'Junior High School Education', 'Junior High School Education', NULL, NULL),
(3, 'UNC-SHS', 'Science, Technology, Engineering and Mathematics', 'Science, Technology, Engineering and Mathematics', NULL, NULL),
(4, 'UNC-SHS', 'Accountancy, Business and Management', 'Accountancy, Business and Management', NULL, NULL),
(5, 'UNC-SHS', 'General Academic Strand', 'General Academic Strand', NULL, NULL),
(6, 'UNC-SHS', 'Technical, Vocational and Livelihood', 'Technical, Vocational and Livelihood', NULL, NULL),
(7, 'UNC-CAS', 'Bachelor of Arts in Political Science', 'Bachelor of Arts in Political Science', NULL, NULL),
(8, 'UNC-CAS', 'Bachelor of Arts in Psychology', 'Bachelor of Arts in Psychology', NULL, NULL),
(9, 'UNC-CAS', 'Bachelor of Science in Biology', 'Bachelor of Science in Biology', NULL, NULL),
(10, 'UNC-CAS', 'Bachelor of Science in Environmental Science', 'Bachelor of Science in Environmental Science Major in Bio/Chem', NULL, NULL),
(11, 'UNC-CCS', 'Associate in Computer Technology', 'Associate in Computer Technology', NULL, NULL),
(12, 'UNC-CCS', 'Bachelor of Library in Information Science', 'Bachelor of Library in Information Science', NULL, NULL),
(13, 'UNC-CCS', 'Bachelor of Science in Computer Science', 'Bachelor of Science in Computer Science', NULL, NULL),
(14, 'UNC-CCS', 'Bachelor of Science in Information Technology', 'Bachelor of Science in Information Technology', NULL, NULL),
(15, 'UNC-CJE', 'Bachelor of Science in Criminology', 'Bachelor of Science in Criminology', NULL, NULL),
(16, 'UNC-CE', 'Bachelor in Physical Education', 'Bachelor in Physical Education', NULL, NULL),
(17, 'UNC-CE', 'Bachelor in Secondary Education', 'Bachelor in Secondary Education', NULL, NULL),
(18, 'UNC-CE', 'Bachelor of Elementary Education', 'Bachelor of Elementary Education', NULL, NULL),
(19, 'UNC-CEA', 'Bachelor of Science in Architecture', 'Bachelor of Science in Architecture', NULL, NULL),
(20, 'UNC-CEA', 'Bachelor of Science in Civil Engineering', 'Bachelor of Science in Civil Engineering', NULL, NULL),
(21, 'UNC-CEA', 'Bachelor of Science in Computer Engineering', 'Bachelor of Science in Computer Engineering', NULL, NULL),
(22, 'UNC-CEA', 'Bachelor of Science in Electrical Engineering', 'Bachelor of Science in Electrical Engineering', NULL, NULL),
(23, 'UNC-CEA', 'Bachelor of Science in Mechanical Engineering', 'Bachelor of Science in Mechanical Engineering', NULL, NULL),
(24, 'UNC-CBA', 'Bachelor of Science in Accountacy', 'Bachelor of Science in Accountacy', NULL, NULL),
(25, 'UNC-CBA', 'Bachelor of Science in Accounting Information System', 'Bachelor of Science in Accounting Information System', NULL, NULL),
(26, 'UNC-CBA', 'Bachelor of Science in Business Administration', 'Bachelor of Science in Business Administration Major in Operations Management', NULL, NULL),
(27, 'UNC-CBA', 'Bachelor of Science in Entrepreneurship', 'Bachelor of Science in Entrepreneurship', NULL, NULL),
(28, 'UNC-CBA', 'Bachelor of Science in Hospitality Management', 'Bachelor of Science in Hospitality Management', NULL, NULL),
(29, 'UNC-CBA', 'Bachelor of Science in Tourism Management', 'Bachelor of Science in Tourism Management', NULL, NULL),
(30, 'UNC-CN', 'Bachelor of Science in Nursing', 'Bachelor of Science in Nursing', NULL, NULL),
(31, 'UNC-GS', 'Advanced Language Certificate', 'Advanced Language Certificate', NULL, NULL),
(32, 'UNC-GS', 'Agile Educational Leadership Certificate', 'Agile Educational Leadership Certificate', NULL, NULL),
(33, 'UNC-GS', 'Data Analytics Certificate', 'Data Analytics Certificate', NULL, NULL),
(34, 'UNC-GS', 'Doctor of Education', 'Doctor of Education Major in Teaching Filipino Language and Literature', NULL, NULL),
(35, 'UNC-GS', 'Future-Ready Teacher Certificate', 'Future-Ready Teacher Certificate', NULL, NULL),
(36, 'UNC-GS', 'Group Resilience Certificate', 'Group Resilience Certificate', NULL, NULL),
(37, 'UNC-GS', 'Master in Business Administration (With Thesis)', 'Master in Business Administration (With Thesis)', NULL, NULL),
(38, 'UNC-GS', 'Master in Library and Information Science', 'Master in Library and Information Science', NULL, NULL),
(39, 'UNC-GS', 'Master in Library Science', 'Master in Library Science', NULL, NULL),
(40, 'UNC-GS', 'Master in Public Administration', 'Master in Public Administration', NULL, NULL),
(41, 'UNC-GS', 'Master of Arts in Education', 'Master of Arts in Education Major in Educational Leadership & Mgt', NULL, NULL),
(42, 'UNC-GS', 'Master of Arts in Filipino Major in Language and Literature', 'Master of Arts in Filipino Major in Language and Literature', NULL, NULL),
(43, 'UNC-GS', 'Master of Arts in Teaching Mathematics', 'Master of Arts in Teaching Mathematics', NULL, NULL),
(44, 'UNC-GS', 'Master of Science in Environmental Science', 'Master of Science in Environmental Science Major in Chemistry/Biology', NULL, NULL),
(45, 'UNC-GS', 'PRIMe (Public Risk Management) Certificate', 'PRIMe (Public Risk Management) Certificate', NULL, NULL),
(46, 'UNC-LAW', 'Juris Doctor', 'Juris Doctor', NULL, NULL),
(47, 'UNC-LAW', 'Master of Laws', 'Master of Laws', NULL, NULL),
(48, 'UNC-LAW', 'Refresher Course', 'Refresher Course', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `departmentCode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departmentCode`, `name`, `description`) VALUES
('UNC-CAS', 'College of Art and Sciences', 'College of Art and Sciences'),
('UNC-CBA', 'College of Business and Accountancy', 'College of Business and Accountancy'),
('UNC-CCS', 'College of Computer Studies', 'College of Computer Studies'),
('UNC-CE', 'College of Education', 'College of Education'),
('UNC-CEA', 'College of Engineering and Architecture', 'UNC-College of Engineering & Architecture is the top school for producing capable engineers & architects who are committed to serving the industry and society.'),
('UNC-CJE', 'College of Criminal Justice Education', 'College of Criminal Justice Education'),
('UNC-CN', 'College of Nursing', 'At the UNC College of Nursing, we have a simple vision: to produce a new breed of nurses who are determined to continue our tradition of excellence and promote the virtue of integrity.'),
('UNC-ELEM', 'Elementary Department', 'Elementary Department'),
('UNC-GS', 'Graduate Studies', 'Graduate Studies'),
('UNC-JHS', 'Junior High School Department', 'Junior High School Department'),
('UNC-LAW', 'College of LAW', 'College of LAW'),
('UNC-SHS', 'Senior High School Department', 'Senior High School Department');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_no` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departmentCode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `officeCode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_no`, `firstname`, `middlename`, `lastname`, `email`, `departmentCode`, `officeCode`, `phone`, `position`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('00-94212', 'Marisa', 'Von', 'Berge', 'minerva.bosco@example.org', 'UNC-JHS', NULL, '09390932322', 'Assistant', 'defaultAvatar.jpg', '$2y$10$KvFMZsWfu.enOmg/rs4LVON4ose8lPfKj1iyjCVOxcYi.1keJwJKG', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('01-62945', 'Harrison', 'Carter', 'Skiles', 'marian.rolfson@example.net', 'UNC-CCS', NULL, '09744316126', 'Assistant', 'defaultAvatar.jpg', '$2y$10$TCb72qMvPvJ7qd53tcUGIOCCmNYgi5aYFTN04o43OZPCcaWoowUV2', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('02-31708', 'Adrienne', 'Kreiger', 'Daniel', 'erika33@example.org', 'UNC-GS', NULL, '09831410384', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$bRf61hF/tVoh26WhPGA4A.zQzu6cMi4/nhPKkteR/u3zu7rqVsnQy', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('02-98006', 'Jacinto', 'Fay', 'Bayer', 'koepp.mallie@example.org', 'UNC-CN', NULL, '09628021224', 'Director', 'defaultAvatar.jpg', '$2y$10$4E4JMQ9lsZUF2pgjbfy6QOcOIFGKYD32lOMtDPQhg6he39ILYd7.q', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('03-35156', 'Abelardo', 'Stamm', 'Lynch', 'rosemarie93@example.net', 'UNC-CAS', NULL, '09495066278', 'Assistant', 'defaultAvatar.jpg', '$2y$10$NsGOv0qzQwyJpeaRO/863.S6vGcumxwsTqq4whBJLSh.3MazBg3EG', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('03-83453', 'Kellie', 'Gleason', 'Cronin', 'robb.larson@example.net', 'UNC-CJE', NULL, '09110625470', 'Director', 'defaultAvatar.jpg', '$2y$10$DavsvDhVRvWtp3kM0obRWOF20xEx/g8prtU.qk6F2zCTy8YXs1yhS', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('05-42937', 'Kara', 'Kohler', 'Weimann', 'clemens99@example.net', 'UNC-CEA', NULL, '09431901812', 'Assistant', 'defaultAvatar.jpg', '$2y$10$uwmLKnMjIrxk4e.8HUlsIeUif0Ol/POeXl2rEC2X2ffy6W2K1ZK.u', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('06-36700', 'Adolfo', 'Collier', 'Quigley', 'hudson.donnie@example.net', 'UNC-CN', NULL, '09465567040', 'Director', 'defaultAvatar.jpg', '$2y$10$FuW2PSZIvAO57GrTyrARdudkAFbsHP/gfrCGZ/IpC5SFwWRBfGbLi', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('08-41893', 'Lazaro', 'Bosco', 'Hudson', 'funk.kaya@example.net', 'UNC-LAW', NULL, '09114689946', 'Director', 'defaultAvatar.jpg', '$2y$10$i9cUxcwu6sKOUltBwgx48u4r44h4NuQ1AQdIcglvVDn05AJi7/20q', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('09-09315', 'Tillman', 'Wolff', 'Abernathy', 'auer.kasandra@example.org', 'UNC-CN', NULL, '09149951712', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$DQuL72SpK.1iJAlLK0YmOeReS.ajZLudgfmPmbP67LHLqEqVb6iru', NULL, '2022-03-25 03:40:30', '2022-03-25 03:40:30'),
('09-58100', 'Bennie', 'Toy', 'Bernhard', 'remington77@example.org', 'UNC-CAS', NULL, '09938113519', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$H0k4cWEsgP1qhkevQNNhAOurm.RtRjd2j0RFIz/k3Oz6ORz8wWSYe', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('10-69653', 'Houston', 'Daugherty', 'Conroy', 'daniela11@example.org', 'UNC-CCS', NULL, '09732745153', 'Assistant', 'defaultAvatar.jpg', '$2y$10$zHupk3h1NXr2qUmdIHUy5.j624yqRcN4d2v/lU5n0vUAce9EE7ixu', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('10-84163', 'Jamir', 'Auer', 'Barrows', 'abode@example.com', 'UNC-SHS', NULL, '09235867964', 'Director', 'defaultAvatar.jpg', '$2y$10$L1jBO6XWzjyiq5If/g2wzeGQ1OvzV9O6.jqjgVJtFpgj0ULYQLxt6', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('12-03426', 'Adelbert', 'Hoppe', 'Gleason', 'quentin30@example.org', 'UNC-ELEM', NULL, '09616757185', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$nQ1ZIGi7gsfqoYe6FHpT2uwqgxrw5V4xP90PjsMHNBhmEFsyKY9VG', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('12-07743', 'Marquise', 'Reilly', 'Hettinger', 'bohara@example.com', 'UNC-CCS', NULL, '09637925760', 'Director', 'defaultAvatar.jpg', '$2y$10$3EFQ5xdxDKUN1Z00Sp0JdujL39YiMU1BTCgh.txw9JvGGGJ2AKLPO', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('13-62331', 'Mavis', 'Legros', 'Volkman', 'alisha.satterfield@example.com', 'UNC-CAS', NULL, '09782786088', 'Assistant', 'defaultAvatar.jpg', '$2y$10$63OfODwa.3aAXeC0FggQYuJEkmHvac/3jNGWv8hSVKdiLO4viH47.', NULL, '2022-04-25 23:00:07', '2022-04-25 23:00:07'),
('13-97831', 'Marcelo', 'Wolf', 'Lang', 'mitchell.macey@example.net', 'UNC-SHS', NULL, '09337662229', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$J2WM4TrDyk5CvP0c3JBwwOaEJmJKQX7H3XRBOm4wrAfegi1NER2t.', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('14-55789', 'Thalia', 'Bogan', 'Pagac', 'ywilkinson@example.net', 'UNC-CAS', NULL, '09383071583', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$ouk17iDLXcUtrcXz581NjOVlfVBV6dbW8agkBPlrMt68okMcGghm2', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('15-07088', 'Madge', 'Lynch', 'Bergstrom', 'rhomenick@example.net', 'UNC-CE', NULL, '09072061784', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$mtbq1lzACm4pnLu7w2Xndeq0uRdXyz1gVU5nRNBzWwE5j6xCqsJXO', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('16-32265', 'Pink', 'Will', 'Volkman', 'spinka.alexander@example.net', 'UNC-CEA', NULL, '09719612620', 'Assistant', 'defaultAvatar.jpg', '$2y$10$GSr1oVPlZ0hAivwdwPISIu.v/BUX/WWml12gP3fOl4dF061skw6Zy', NULL, '2022-03-26 02:27:34', '2022-03-26 02:27:34'),
('16-52521', 'Glenda', 'Cassin', 'Treutel', 'flossie90@example.net', 'UNC-CBA', NULL, '09387028013', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$pJGg78JgW0Co3QFpGfHhYebNEjmeyVkRwhkzwjOLije8z5.TgvjNS', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('16-87698', 'Keegan', 'Thiel', 'Marks', 'afeeney@example.net', 'UNC-CJE', NULL, '09638686643', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$oQX47QClhDR/k1zQ8gRyGuMKdB0a7UoQxWM4EUur1OFyRD4SdjC4m', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('17-44209', 'Stephon', 'Zieme', 'Lind', 'marianne83@example.net', 'UNC-CE', NULL, '09533759002', 'Director', 'defaultAvatar.jpg', '$2y$10$n2.VLvnlBi2R3Fo5pwmArOXt.7qm/JTr20bRqYBa9bWP69xEyhx3y', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('18-08925', 'Jose II', 'Vargas', 'Evasco', 'jose.evascoii1150@gmail.com', 'UNC-CCS', 'UNC-SGO', '09486330988', 'Staff', 'defaultAvatar.jpg', '12345', NULL, '2022-03-17 20:05:37', '2022-03-17 20:05:37'),
('19-64804', 'Rosario', 'Waelchi', 'Romaguera', 'oma02@example.com', 'UNC-CBA', NULL, '09718176428', 'Assistant', 'defaultAvatar.jpg', '$2y$10$kH371jOl8nLiAB4hku7xau.H8v4p10pTolJ.CUCSIetNrnGG.GKpa', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('22-10070', 'Ena', 'Rau', 'Lakin', 'eichmann.rocio@example.org', 'UNC-ELEM', NULL, '09405513000', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$9EfQmCVG/WL26gBV/LzxRejPDAkNrVPKjjrWJ5o/LFF48XbEmLnQq', NULL, '2022-03-26 02:27:34', '2022-03-26 02:27:34'),
('23-64869', 'Maud', 'Krajcik', 'Ernser', 'ltremblay@example.org', 'UNC-GS', NULL, '09671640567', 'Director', 'defaultAvatar.jpg', '$2y$10$T0yKVoDYq.Vfwh.UF4X3h.xAC440e1PqkVRo7XLXPiU2HXo6ZuH6C', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('23-97662', 'Gilbert', 'Beahan', 'Sawayn', 'leslie72@example.net', 'UNC-CJE', NULL, '09442148057', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$o1/VJPa3grpncjhRCYSx4u0ws9T6LSw8twixeNXyL8TyMTDIoPSaG', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('24-17226', 'Robin', 'Satterfield', 'Abshire', 'ayla.oconnell@example.com', 'UNC-CJE', NULL, '09731698525', 'Assistant', 'defaultAvatar.jpg', '$2y$10$LefkALlD/x2eQIAnVWbG5.ONH67xfyi5/trltBpz1c/GFfBiKPtxq', NULL, '2022-03-26 02:27:34', '2022-03-26 02:27:34'),
('24-74625', 'Beryl', 'Bins', 'Herman', 'cormier.corrine@example.net', 'UNC-LAW', NULL, '09416570740', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$ziNS4I5paUnJ1DFKK8.18.6/B0Sj6xADgivN97mf3Fin3cie05n2m', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('25-07055', 'Keshaun', 'Schuster', 'Ryan', 'jamarcus60@example.com', 'UNC-ELEM', NULL, '09350525278', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$1VI8HhfwwID4KJK87shcyOnJh/XffyPaG9CHnaQALu1rjgZw8fhy6', NULL, '2022-03-25 03:40:30', '2022-03-25 03:40:30'),
('25-63352', 'Karine', 'Roberts', 'Shanahan', 'shayes@example.net', 'UNC-CE', NULL, '09014672875', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$LTe0WSczo112zf3pcP/l7O1f2nAJ5dsKQPefrESY8hutwJNHl80yO', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('29-85761', 'Dulce', 'Wilkinson', 'Lakin', 'ethyl83@example.org', 'UNC-CN', NULL, '09656056422', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$LTXbUrFiDUpBuqjZ08zuPOOKQn6L933JecIRE25SizzU7nfaZwnmy', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('29-92141', 'Ellis', 'O\'Keefe', 'Dare', 'weber.lenore@example.org', 'UNC-LAW', NULL, '09623626279', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$VS76249zcVo.0F.PFkeKoOOIQUTcDRYz3ZMo6LqaK.nCB4iH0G0oS', NULL, '2022-03-24 16:29:19', '2022-03-24 16:29:19'),
('32-26339', 'Jesus', 'Lindgren', 'Kub', 'adams.moshe@example.org', 'UNC-JHS', NULL, '09004327275', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$GTnqGHS3nt2cAg3IJ9c4NeoBwK9ildr5oTrGHi4uWvZjUeK7Uka6y', NULL, '2022-03-25 03:40:30', '2022-03-25 03:40:30'),
('34-51748', 'Dawn', 'Reichert', 'Vandervort', 'koch.vernice@example.net', 'UNC-CBA', NULL, '09215564235', 'Director', 'defaultAvatar.jpg', '$2y$10$kp1z8uXasWaj0ZwQOBCHkeFR8.5OMGvQ/hqbEboGSlS1EvMKVuywe', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('35-97368', 'Evalyn', 'Cummings', 'Marks', 'leilani90@example.net', 'UNC-CAS', NULL, '09379247549', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$yoLyhs1lMNbeXLCkfp3MTu/H6GEdOstjaDY3evFBoO8FnKWf9xMDe', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('36-20854', 'Carolanne', 'Mitchell', 'Howe', 'phoebe87@example.net', 'UNC-CE', NULL, '09459116015', 'Assistant', 'defaultAvatar.jpg', '$2y$10$pe5tx0lU8V9y6.jLS645zO.2bq65hg35vsN7RRCLpbnuYzr41FXKm', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('37-12795', 'Jalyn', 'Kilback', 'Wuckert', 'hegmann.delilah@example.org', 'UNC-CCS', NULL, '09123344492', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$TyckaP9NWMddxSRODWjUxONZQQDDjxffpNbxABYWtQpEzJUkawnu2', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('37-45936', 'Alysson', 'Lind', 'McGlynn', 'mhill@example.com', 'UNC-CEA', NULL, '09613005675', 'Assistant', 'defaultAvatar.jpg', '$2y$10$ljuCzi.R7/NvQQczVhKFlOB/89ZduBKcsbXav75HOobinVrw7aaKi', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('39-28614', 'Brett', 'Schmidt', 'Kulas', 'brannon.mcdermott@example.org', 'UNC-CN', NULL, '09828022788', 'Director', 'defaultAvatar.jpg', '$2y$10$rCqSEIXUkJ.83gh7e/sG.utyNuma1GNRvLH.uv1dKFlZzIpoNTejG', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('39-48499', 'Vicenta', 'Abernathy', 'Bartoletti', 'johnson.hardy@example.org', 'UNC-CEA', NULL, '09565691146', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$9GWvHUSMbqEjn.xP7DiHYulOO2y3knOs24cZoQDpnzU/dWHSnJNXq', NULL, '2022-03-26 02:27:34', '2022-03-26 02:27:34'),
('41-53600', 'Nathan', 'Feeney', 'Baumbach', 'adrianna14@example.net', 'UNC-JHS', NULL, '09276662013', 'Director', 'defaultAvatar.jpg', '$2y$10$gr9gZFQkRcQrzMqjQWn3TusPQLGCb6WBdVApP9agZK9Z6pQeVOEge', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('41-98735', 'Kurt', 'Upton', 'Erdman', 'shannon72@example.com', 'UNC-CE', NULL, '09727051109', 'Director', 'defaultAvatar.jpg', '$2y$10$mfwmvKWSyEXSn904q8N7WeYbDTqGJiyd3p9r6JIyk.gqp9ler0SHm', NULL, '2022-03-24 16:29:19', '2022-03-24 16:29:19'),
('44-11171', 'Michale', 'O\'Conner', 'Crona', 'raheem00@example.com', 'UNC-CCS', NULL, '09327772331', 'Assistant', 'defaultAvatar.jpg', '$2y$10$V5Qt6QsxDfgp104UnOfejuFqvkTEYmzQFidzWQ0oKy0xJICOFd.b.', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('44-20897', 'Pamela', 'Schmitt', 'Koepp', 'israel.fritsch@example.com', 'UNC-CEA', NULL, '09316788648', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$a5HnxZpPY/gMCuTpDafbbuGkskoRajvG3MY6YyPkVV3ylV./Al0c.', NULL, '2022-03-26 02:27:34', '2022-03-26 02:27:34'),
('44-57871', 'Lilly', 'Dare', 'Gaylord', 'earl.wiza@example.com', 'UNC-GS', NULL, '09066269790', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$Z8NsDhmuTO3u6tHH6IiNzuTgouuRo5T56FL.CMz6H2Eqvq4ZFyTiq', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('45-21128', 'Christina', 'Bednar', 'Walker', 'hegmann.kaycee@example.net', 'UNC-CBA', NULL, '09342496054', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$YulqNvq0KE4d19pYWe2o0.8E5FmkqV3Fq3REOScYzFOpcnrUmTj5m', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('46-31234', 'Jamey', 'Lowe', 'Thompson', 'emmet69@example.net', 'UNC-CJE', NULL, '09092593466', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$4JMSiIStkBtAQ/bewW38N.J9aS8x0uvpKqwGxSXS7oIurBKexeQeK', NULL, '2022-04-25 23:00:07', '2022-04-25 23:00:07'),
('48-42871', 'Lucy', 'Batz', 'Bosco', 'braun.marilou@example.org', 'UNC-CBA', NULL, '09889251664', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$6NH7uOSH7D/hEl1xKy4/AeI69ygQIWoTDwzygskzIR4YSujJ2V.Bu', NULL, '2022-04-25 22:58:38', '2022-04-25 22:58:38'),
('49-34861', 'Deja', 'Kovacek', 'Purdy', 'cullen.witting@example.com', 'UNC-SHS', NULL, '09105670897', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$MRyxQ87jOAw2usodVn6c4Oq2UiRfrk7baUGHaZ4fJ.S6NsoZzNmYS', NULL, '2022-03-26 02:27:34', '2022-03-26 02:27:34'),
('49-43292', 'Queen', 'Conn', 'Simonis', 'eichmann.eleanora@example.com', 'UNC-CAS', NULL, '09451361192', 'Director', 'defaultAvatar.jpg', '$2y$10$7uGfLbIzR324B5LGHmWmw.eSO6c3.vRPbR2GrgZxKp2uYUFpsRE9e', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('51-93825', 'Josiah', 'Kovacek', 'Yost', 'harvey.amy@example.org', 'UNC-CJE', NULL, '09960923678', 'Assistant', 'defaultAvatar.jpg', '$2y$10$0d.e7s40875lZRGFxRs3CuRNNk99SQcUPMk/hzMo6c1VzvSmogGfO', NULL, '2022-04-25 23:00:07', '2022-04-25 23:00:07'),
('53-74606', 'Einar', 'Osinski', 'Klein', 'daphnee58@example.net', 'UNC-CN', NULL, '09287516411', 'Director', 'defaultAvatar.jpg', '$2y$10$2x8ru4w6.tJT5x/pPAl2.OODjOezPQJgpm8dJ1EOEzOCCcIngm8KW', NULL, '2022-04-25 22:58:38', '2022-04-25 22:58:38'),
('53-97662', 'Aniyah', 'Yost', 'Skiles', 'llang@example.com', 'UNC-ELEM', NULL, '09410720175', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$tis1PEhzxMtJx7kxfYGc6OFWyOcqg4EO2L1Ic9i5M4eniTWVhbfXi', NULL, '2022-04-25 23:00:07', '2022-04-25 23:00:07'),
('55-26616', 'Brice', 'Rau', 'Schuster', 'lexus81@example.net', 'UNC-CCS', NULL, '09806705305', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$FIpnb00sdoFrkchGtbccsOpwG4z6ZVQ9KiSlfC6TmHBkUy062fnkG', NULL, '2022-04-25 22:58:38', '2022-04-25 22:58:38'),
('58-29522', 'Johnny', 'Heidenreich', 'Waelchi', 'oberbrunner.janice@example.net', 'UNC-CEA', NULL, '09718960347', 'Director', 'defaultAvatar.jpg', '$2y$10$xNlKDkwLuvtQNLveV/8GIeNGeaiqmqlpcAQl9/C00bpZl6np0RbkO', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('59-10332', 'Taurean', 'Heathcote', 'Ankunding', 'zkassulke@example.net', 'UNC-CBA', NULL, '09161953007', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$RB3zRqNmXafKHPPGdndKUOzc.yucfnJnOau6IcBErHyiJhH0P0B02', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('59-52958', 'Sadie', 'Gislason', 'Mitchell', 'eliza48@example.org', 'UNC-CCS', NULL, '09207198003', 'Director', 'defaultAvatar.jpg', '$2y$10$sSXeQcWeozTrXrpNEfudaum4gos8EzDmO7x057T4ERtjuWygZj.vq', NULL, '2022-03-24 16:29:21', '2022-03-24 16:29:21'),
('60-91756', 'Kelsi', 'Cruickshank', 'Douglas', 'abshire.jovany@example.org', 'UNC-ELEM', NULL, '09282137278', 'Director', 'defaultAvatar.jpg', '$2y$10$gYVpd71Eehfn16BEQ7bc..PfRXSQLWs.5s8xlaRMGBwi8i8tTuUm.', NULL, '2022-04-25 22:58:38', '2022-04-25 22:58:38'),
('61-43268', 'Doyle', 'Daugherty', 'Zemlak', 'colby11@example.net', 'UNC-CE', NULL, '09704502179', 'Assistant', 'defaultAvatar.jpg', '$2y$10$MmSnOGsztJBe3jDbOGk87evULFsc2NRMliIZHK0ng2Y.o6dTYE5ZK', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('63-03407', 'Ezequiel', 'Bogisich', 'Hansen', 'abdullah.jakubowski@example.org', 'UNC-JHS', NULL, '09148507672', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$v.uVMTTDOfSQphUS70UutemJbxXt01WXHOiHMni5aO3UQpR6vp4My', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('64-45175', 'Keely', 'Hane', 'Stark', 'gpurdy@example.com', 'UNC-LAW', NULL, '09350905252', 'Assistant', 'defaultAvatar.jpg', '$2y$10$E54uil5VESM1mTDZ3QnDg.PBL9s1593jaGloXIzxbVs7NHzHG1Hp2', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('64-49663', 'Aubrey', 'Tromp', 'Stokes', 'quitzon.nicolas@example.com', 'UNC-JHS', NULL, '09697165696', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$8vG8IjMwLxfg6IK8HQ4LTurfjWC2F6XK9MqY25RmbeS0gydqgUPoy', NULL, '2022-04-25 23:00:07', '2022-04-25 23:00:07'),
('65-98533', 'Christophe', 'Schaden', 'Cassin', 'vcorwin@example.org', 'UNC-CCS', NULL, '09114319200', 'Assistant', 'defaultAvatar.jpg', '$2y$10$h6DaOjukxHCu29v7u6vfTOY7zbpBtN53smFIqrhUSuo9AWrUn3OLW', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('68-48825', 'Morris', 'Miller', 'Harris', 'brycen86@example.net', 'UNC-CE', NULL, '09540896150', 'Director', 'defaultAvatar.jpg', '$2y$10$RKpWlDqIvIodBNVTWq/T5Ov3s/MXQUt8zrqL4YHmRkovfRvNFaqTK', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('69-35673', 'Aileen', 'Keeling', 'O\'Hara', 'lemke.giovanny@example.com', 'UNC-CEA', NULL, '09734075449', 'Director', 'defaultAvatar.jpg', '$2y$10$9YhVzOJdj48R/uO1kR4y2eN6jNbuhR.YY/0vj6cF/8cyrhC3fxVrW', NULL, '2022-03-25 03:40:30', '2022-03-25 03:40:30'),
('69-57201', 'Myrtle', 'Conroy', 'Dooley', 'gernser@example.net', 'UNC-CEA', NULL, '09356655193', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$JvmNT9U9JxAVFNYiVSMfPuhnA0lXzAq/mciXIRfD8ZVCDliGm4Xwm', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('70-37430', 'Hyman', 'Hirthe', 'Jaskolski', 'abernathy.casimir@example.net', 'UNC-CE', NULL, '09708488390', 'Assistant', 'defaultAvatar.jpg', '$2y$10$NqYbOpSKyB6BeYWyI7UHPOVwk2sTkAG5bGueOuj57jvh8POnXo4Mm', NULL, '2022-04-25 23:00:07', '2022-04-25 23:00:07'),
('70-90868', 'Dolly', 'Bosco', 'Schaefer', 'kaufderhar@example.net', 'UNC-CCS', NULL, '09564726357', 'Director', 'defaultAvatar.jpg', '$2y$10$adUs92H/mMrlqV24DvoEze3Qxmq10iKB4Bzpe/Ftsb03MV8qyO4Z.', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('74-06087', 'Kraig', 'Zemlak', 'Hyatt', 'alba.mcdermott@example.net', 'UNC-ELEM', NULL, '09962391738', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$oYA3C.HsID3IK30mHs08euEEhQ0UCtDQLBfC9OT5GJ52uQzc6QwLy', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('74-13788', 'Jaqueline', 'Goodwin', 'Bergnaum', 'rdouglas@example.com', 'UNC-CCS', NULL, '09404076888', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$hdrdmCWkAGT8FbYpKQ1kP..yD4Tq8N4xUBY/a2PUBEquinMMyxvg2', NULL, '2022-03-25 03:40:30', '2022-03-25 03:40:30'),
('76-85618', 'Gregorio', 'Hamill', 'Bruen', 'tromp.cierra@example.net', 'UNC-CE', NULL, '09953265395', 'Assistant', 'defaultAvatar.jpg', '$2y$10$7vHS35sg2ju3U1DaXVFM0uzhTZjIxTylIT4OcHdnAgFpZ16rRnlty', NULL, '2022-04-25 23:00:07', '2022-04-25 23:00:07'),
('77-48263', 'Myrtice', 'Pouros', 'Baumbach', 'louisa64@example.com', 'UNC-CJE', NULL, '09605150647', 'Assistant', 'defaultAvatar.jpg', '$2y$10$IziHKKOtvnfzWRoBnGJOsusW9Ijqy5BaEQOdaDNmqA9PcxOygg3MK', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('77-78256', 'Laverne', 'Jenkins', 'Steuber', 'aschneider@example.net', 'UNC-ELEM', NULL, '09769622035', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$qOCe70WTTHZfhBsXjQGLqO0SYZLFHo2Dkh9gG9amZ7gyxfeca2srq', NULL, '2022-04-25 22:58:38', '2022-04-25 22:58:38'),
('78-20386', 'Shanel', 'West', 'Haley', 'dillon.stokes@example.org', 'UNC-SHS', NULL, '09511724095', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$i1qYcH.n4VLQx7GSB6m5RuBNVoazQz7X9AiZl6KQo2hSsE04WxNKe', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('78-60157', 'Jakob', 'Waelchi', 'Wuckert', 'gutkowski.winifred@example.com', 'UNC-ELEM', NULL, '09922356870', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$4kEQQ9UQvQdrJzkKWcdXi.PllukB7qTegpkCrG1wVLcVyFqCeOvsi', NULL, '2022-03-25 03:40:30', '2022-03-25 03:40:30'),
('80-81390', 'Marc', 'Spinka', 'Medhurst', 'bkreiger@example.net', 'UNC-SHS', NULL, '09346636103', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$ACb3Zi1mNnINebLj2dQZ1O3.vazQPDzS3cJ/nDFu0jgzQ8l1egXbS', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('80-82177', 'Toney', 'Reinger', 'Pfeffer', 'nbayer@example.org', 'UNC-CJE', NULL, '09222135381', 'Director', 'defaultAvatar.jpg', '$2y$10$Aq1l4sWMSvastN3n2rQ7fuuiIplnZhqRGQgzP5gAWDNMwb1JF.FKi', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('80-84466', 'Ana', 'Deckow', 'Murray', 'johathan81@example.net', 'UNC-GS', NULL, '09180935239', 'Director', 'defaultAvatar.jpg', '$2y$10$6JlpQ7XHy9n6cIvKyB0M5evjMrvsOy1.kJSlbflTY9vZJx.CodRcm', NULL, '2022-04-25 23:00:07', '2022-04-25 23:00:07'),
('81-75791', 'Tanner', 'Reichert', 'Kuhn', 'qkutch@example.org', 'UNC-CE', NULL, '09692296238', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$PowtKJuTzWXsj5PCSS.VpupebvbjqM9cwBTtZPs7ccAHmYKp1Mqhu', NULL, '2022-03-25 03:40:30', '2022-03-25 03:40:30'),
('82-65718', 'Jana', 'Jacobson', 'Schuster', 'albina62@example.com', 'UNC-ELEM', NULL, '09349988440', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$I5IUndfpqMos5f2dVGM/G.ePOGxAgJCtVjT364Ln0h2o5iCCgNqlC', NULL, '2022-03-26 02:27:34', '2022-03-26 02:27:34'),
('83-20364', 'Cheyanne', 'Kunde', 'Barton', 'domenic47@example.org', 'UNC-SHS', NULL, '09719267782', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$lEXPqrMVsHxTxOe0Pzzth.gfK.XYKw54NPGP1KjJ/BmY75h8Tf.du', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('83-64190', 'Kianna', 'Rosenbaum', 'Schuppe', 'kroberts@example.com', 'UNC-LAW', NULL, '09942162612', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$9P.zKol8ZvzKdmqbhnWhu.HjSi4crUGW7vVpiRobjtAjDJze46j4O', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('85-08201', 'Colby', 'Kihn', 'Heller', 'barbara.kling@example.com', 'UNC-GS', NULL, '09207990762', 'Assistant', 'defaultAvatar.jpg', '$2y$10$Fd88edPEwuuqzFypfd18buuQ7UCIq0XJmA4DgUa9e1dMEGblr4fIW', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('86-54414', 'Fidel', 'Cremin', 'Satterfield', 'ymckenzie@example.net', 'UNC-CEA', NULL, '09862870281', 'Director', 'defaultAvatar.jpg', '$2y$10$fd/sRd6.imSkaIIVTVPZX.KO7kXuSdKRs29ySbCkknLSCF8GJ3rNy', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('87-15096', 'Mercedes', 'Rice', 'Murazik', 'conroy.sonya@example.com', 'UNC-CN', NULL, '09945337004', 'Director', 'defaultAvatar.jpg', '$2y$10$NxQ17sRyMBtPpPvqLXoFK.d5NYtKz7jEdlKF8YZ1l/9t.HbbF4r3G', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('87-18789', 'Oren', 'Baumbach', 'Mante', 'graciela.jerde@example.org', 'UNC-JHS', NULL, '09033093818', 'Director', 'defaultAvatar.jpg', '$2y$10$MLICTaapmXsuH7QXYvHYpe8zNA34UdXsj76QsKqH7vSBy1CcVS1Je', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('87-21335', 'Dylan', 'Kuhn', 'Gutmann', 'johann.hackett@example.org', 'UNC-CN', NULL, '09122124691', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$WZfMUChVZYdDBIrVFl9yQOHGQD28glzyzccJjqPUFAzOSeUh52clS', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('90-45602', 'Emelia', 'Orn', 'Kerluke', 'kaylin84@example.net', 'UNC-CAS', NULL, '09599280523', 'Office Staff', 'defaultAvatar.jpg', '$2y$10$wdOP1QDRVXJg8B7/fRjAiOGGTX5.jom3GhubBRO0Ys1MleUYWHCIC', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('90-57699', 'Dale', 'Bergnaum', 'Murray', 'rick.luettgen@example.org', 'UNC-CJE', NULL, '09352285832', 'Director', 'defaultAvatar.jpg', '$2y$10$JT.SfiDF2VybvoJuinPXB.oQcKe4LM4E7/QgbahUj9j5fbRqDpS66', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('90-78735', 'Jasen', 'West', 'Lockman', 'mann.madonna@example.net', 'UNC-SHS', NULL, '09797911018', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$4RsYuZrbdGzc/9brLc/x6eHavNZ4EUi5928AfaeEmjeiF4L6Uoe5.', NULL, '2022-03-24 16:29:20', '2022-03-24 16:29:20'),
('91-83820', 'Destin', 'Barrows', 'Shanahan', 'kristina.sanford@example.org', 'UNC-CBA', NULL, '09559557687', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$f/dlEFSqxMEGRxNMVZrlyedNowRq1rjxwzpJeg7ClXOKOUdfQ/V7m', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('92-40203', 'Antoinette', 'Breitenberg', 'Marquardt', 'lynn.sauer@example.com', 'UNC-LAW', NULL, '09674044658', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$rI37nvKn0ceiOdCEZJHuL.RDKpNCvEZg9zowuICYieaxrmBv/HXqO', NULL, '2022-03-25 03:40:30', '2022-03-25 03:40:30'),
('92-88626', 'Annabell', 'D\'Amore', 'Gerhold', 'solson@example.org', 'UNC-SHS', NULL, '09585593655', 'Assistant', 'defaultAvatar.jpg', '$2y$10$ZZ4m2tyEeF2h1LH2sRWgiuKI8ptpXhr9TqXPVs.AiMpnn7XXuKBKO', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06'),
('93-50970', 'Braeden', 'Schumm', 'Ziemann', 'josianne.okeefe@example.org', 'UNC-LAW', NULL, '09301101869', 'Assistant', 'defaultAvatar.jpg', '$2y$10$MJJwKcrKT2RJqnU04.M4KeEqmicmdwX/4FlaOMK0OzTpnZISMG7X6', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('94-51788', 'Haley', 'Okuneva', 'Marks', 'ceasar82@example.net', 'UNC-GS', NULL, '09371899179', 'Director', 'defaultAvatar.jpg', '$2y$10$P9M/4FfNuRwHzTuXqr2hv.U2HSTkNziSxZTuEuCX.79S/K82ohyyO', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('95-34095', 'Norma', 'Rosenbaum', 'Littel', 'maggio.kaia@example.com', 'UNC-GS', NULL, '09372109826', 'Director', 'defaultAvatar.jpg', '$2y$10$Sqfdp0/uwj1M7AFPET1dHu7Co1KeNVJTBtcqCko3zH0xVRvm/sK5W', NULL, '2022-04-25 22:58:39', '2022-04-25 22:58:39'),
('95-57233', 'Diamond', 'Pagac', 'Pfannerstill', 'nolan.rutherford@example.net', 'UNC-SHS', NULL, '09515381947', 'Regular Employee', 'defaultAvatar.jpg', '$2y$10$A3HetakoAmrH9YSjk6TW4ueK.U18MOyYrmlQMJQOLPg8t7FtvENqa', NULL, '2022-03-25 03:40:29', '2022-03-25 03:40:29'),
('97-90101', 'Jamel', 'Leannon', 'Murphy', 'cassandra.quigley@example.org', 'UNC-SHS', NULL, '09156841815', 'Assistant', 'defaultAvatar.jpg', '$2y$10$e4WV4SiN2R0pTLYyjPZs7u4fPZYrXhY1JjlaTZSZ/awsFK81eLwXK', NULL, '2022-03-26 02:27:33', '2022-03-26 02:27:33'),
('99-08721', 'Geovanni', 'Hayes', 'McDermott', 'rolfson.carey@example.net', 'UNC-CCS', NULL, '09832798814', 'Director', 'defaultAvatar.jpg', '$2y$10$/vGxCglz8qKW7CaRv3qMduP6H8PEukmq06i7sb5fO5fvBFEDonrD.', NULL, '2022-04-25 23:00:06', '2022-04-25 23:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `loanNo` int(10) UNSIGNED NOT NULL,
  `student_no` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `officeCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semesterCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryNo` bigint(20) UNSIGNED DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `officeVerification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `adminVerification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_02_05_135345_create_offices_table', 1),
(6, '2021_02_08_163609_create_departments_table', 1),
(7, '2021_02_09_101318_create_admins_table', 1),
(8, '2021_02_18_103022_semester_table', 1),
(9, '2021_03_03_102614_create_courses_table', 1),
(10, '2021_06_22_060246_create_categories_table', 1),
(11, '2021_11_15_010654_student_table', 1),
(12, '2021_11_15_011817_scholarship_table', 1),
(13, '2021_11_15_013329_loan_table', 1),
(14, '2021_11_18_102200_announcement_table', 1),
(15, '2021_11_22_055616_create_employees_table', 1),
(16, '2022_03_12_172712_create_programs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `officeCode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`officeCode`, `name`, `description`) VALUES
('UNC-ACCOUNTING', 'Accounting Office', 'Accounting Office'),
('UNC-CULTURE&ARTS', 'Culture and Arts Sholarship Office', 'Office of the Culture and Arts Sholarship'),
('UNC-HR', 'Human Resource Office', 'Office of Human Resource Management'),
('UNC-REGISTRAR', 'Registrar Office', 'Office of the Registrar'),
('UNC-SDO', 'Sports Development Office', 'Office of Sports and Development for Varsities'),
('UNC-SGO', 'Schorlarship and Grants Office', 'Office of scholarship Processing');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `programNo` int(10) UNSIGNED NOT NULL,
  `admin_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `scholarshipNo` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Scholarship',
  `student_no` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `officeCode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semesterCode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryNo` bigint(20) UNSIGNED DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `officeVerification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `adminVerification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`scholarshipNo`, `type`, `student_no`, `officeCode`, `semesterCode`, `categoryNo`, `discount`, `requirement`, `photo`, `officeVerification`, `adminVerification`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Discount', '18-08925', 'UNC-SGO', '2022-2ndSem', 1, '25%', 'requirements/m4h5hE0QnnfZNTS8NvvZaG6TLp6CqIiEVXjWkFzl.pdf', 'photos/2ukwaKx2TLYUZUOsOxIfnWoUP3W7Ym41mgA31FG8.jpg', 'Approved', 'Approved', NULL, '2022-03-17 04:37:01', '2022-03-20 23:57:26'),
(2, 'Discount', '18-08925', 'UNC-SGO', '2022-2ndSem', 1, '25%', 'requirements/m4h5hE0QnnfZNTS8NvvZaG6TLp6CqIiEVXjWkFzl.pdf', 'photos/m4h5hE0QnnfZNTS8NvvZaG6TLp6CqIiEVXjWkFzl.pdf', 'Approved', 'Approved', 'BOBO', '2022-03-18 02:33:05', '2022-03-21 06:56:33'),
(3, 'Scholarship', '18-08925', 'UNC-SDO', '2022-2ndSem', 1, 'Full', 'requirements/2CqXt0p0vJXaF0WVsPIo3zkdiLm78lTsdMT9y47W.pdf', 'photos/MteceEY6Nw7yXW1WVElZMMnusOQrV9mwOeTg6Pve.pdf', 'Pending', 'Pending', NULL, '2022-03-18 18:42:43', '2022-03-21 00:39:44'),
(4, 'Discount', '18-08925', 'UNC-SGO', '2022-2ndSem', 1, '25%', 'requirements/mNR3qMZPJRzpcEWd4L0VwVqFp0ac6XFscri8wSrM.pdf', 'photos/Mc0YvahfMODV1JCevMF5OOBRxAdulvRIw1ds9Tuo.jpg', 'Approved', 'Approved', NULL, '2022-03-18 19:33:25', '2022-03-20 23:53:02'),
(5, 'Scholarship', '18-08925', 'UNC-CULTURE&ARTS', '2022-2ndSem', 8, 'Full', 'requirements/2CqXt0p0vJXaF0WVsPIo3zkdiLm78lTsdMT9y47W.pdf', 'photos/IjXEKeDsTZeFoCMpDBVO8Ka4Zd7W3Rgzl63tnqXz.png', 'Approved', 'Approved', 'lapa', '2022-03-19 07:03:31', '2022-03-23 07:16:50'),
(6, 'Scholarship', '18-08925', 'UNC-SDO', '2022-2ndSem', 1, 'Full', 'requirements/UxEsLeUxMhIB2BnnO2ZMOD1riDbHXhf5mPSrfFZL.pdf', 'photos/WP8nOYSsyeXSdqjvXbnQdsMNIMgofEDHfHZsBMUE.png', 'Approved', 'Approved', NULL, '2022-03-19 07:05:48', '2022-03-20 23:56:37'),
(7, 'Scholarship', '18-08925', 'UNC-SDO', '2022-2ndSem', 1, 'Full', 'requirements/AQ0WLEiT2Kwoode8MsYjUQyyMn004iDhyP9XZ9Vl.pdf', 'photos/PINTm0ZtpOtYmH0Pq4MRK88hHME2tDeq7YaDmSOP.jpg', 'Approved', 'Approved', NULL, '2022-03-19 08:14:23', '2022-03-21 00:38:47'),
(8, 'Scholarship', '18-08925', 'UNC-SDO', '2022-2ndSem', 1, 'Full', 'requirements/BXA9A86w3iuosSTVL2jYlrr4VJzharALCloIVw2v.pdf', 'photos/ohQXdQCY9gejWHK3w8clcw56ZjW2bLiW0jZFzQnV.jpg', 'Approved', 'Approved', NULL, '2022-03-21 06:59:15', '2022-03-21 07:00:25'),
(9, 'Scholarship', '18-08925', 'UNC-HR', '2022-2ndSem', 1, '100%', 'requirements/uLIuU6JDPlIb5WdfSPBcI5osHjA3Ghvc1CSgXwPg.pdf', 'photos/YUcvfHnaY2RVGaLfrLgyln6zQNvdzgagGpNz5y4N.png', 'Approved', 'Approved', 'GWAPO AKO', '2022-03-23 07:20:55', '2022-03-23 07:22:27'),
(10, 'Discount', '18-08925', 'UNC-SGO', '2022-2ndSem', 15, '25%', 'requirements/aPNpoA1yqQiHPCPnISGOEBIwNdXiL5wRGa6i47qV.pdf', 'photos/2AOVA6aBoUL0zouH7bG9M30Vno5lT7nqFqxS6jFh.png', 'Pending', 'Pending', NULL, '2022-03-23 18:13:06', '2022-03-23 18:13:06'),
(11, 'Scholarship', '18-11776', 'UNC-CULTURE&ARTS', '2022-2ndSem', 12, 'Full', 'requirements/29opQIEIkWSlhGfbcJ5WKNbtVMSWq5lcmwiPYLTx.pdf', 'photos/xw7CG5KvvX6avKsN2ixWeeems0w8C7rGTWhsVXRC.png', 'Approved', 'Approved', 'BOBO', '2022-03-24 02:19:37', '2022-03-24 02:20:25'),
(12, 'Scholarship', '18-11536', 'UNC-ACCOUNTING', '2022-2ndSem', 15, '25%', 'requirements/jycNt2JyNkvhJYSe93mAMcLZbqPYXCrrkSiuoBQC.pdf', 'photos/SDawcaKEZKnjYfTOC1qesUgz6ndUtPOSInMmJZNK.png', 'Approved', 'Approved', 'BOBOBOBOBOBOBOBOBOBOBOBOBOBOBO', '2022-03-25 03:43:36', '2022-03-25 03:44:28'),
(13, 'Scholarship', '18-08925', 'UNC-SDO', '2022-2ndSem', 1, 'Full', 'requirements/2CqXt0p0vJXaF0WVsPIo3zkdiLm78lTsdMT9y47W.pdf', 'photos/hyHRhxioHdttUrACTfm0DPQ3aTzVVAAXLX0caE6K.png', 'Approved', 'Approved', 'Approved', '2022-03-26 11:57:23', '2022-04-05 09:26:32'),
(14, 'Scholarship', '16-00251', 'UNC-ACCOUNTING', '2022-2ndSem', 1, '25%', 'requirements/lVFZEWDlyliZTXNXVWuKHgBQhpPmNSKPAdgcdvnp.pdf', 'photos/DyINEbEhIMbio7u9ISOiXKuvJWuyRLBupP6lz1x3.jpg', 'Approved', 'Approved', 'ggfdsssvvv', '2022-04-02 05:27:53', '2022-04-02 05:28:58'),
(15, 'Scholarship', '96-91283', 'UNC-SGO', '2022-2ndSem', 5, '25', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:57', '2022-04-25 23:11:57'),
(16, 'Scholarship', '30-25198', 'UNC-REGISTRAR', '2022-2ndSem', 4, '50', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:58', '2022-04-25 23:11:58'),
(17, 'Scholarship', '64-13242', 'UNC-CULTURE&ARTS', '2022-2ndSem', 10, '50', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:58', '2022-04-25 23:11:58'),
(18, 'Scholarship', '53-49408', 'UNC-HR', '2022-2ndSem', 1, '75', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:58', '2022-04-25 23:11:58'),
(19, 'Scholarship', '12-72996', 'UNC-HR', '2022-2ndSem', 7, '50', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:58', '2022-04-25 23:11:58'),
(20, 'Scholarship', '52-48653', 'UNC-SGO', '2022-2ndSem', 10, '75', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:58', '2022-04-25 23:11:58'),
(21, 'Scholarship', '39-54342', 'UNC-SDO', '2022-2ndSem', 15, 'full', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:58', '2022-04-25 23:11:58'),
(22, 'Scholarship', '27-08664', 'UNC-SGO', '2022-2ndSem', 11, '50', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:58', '2022-04-25 23:11:58'),
(23, 'Scholarship', '03-03998', 'UNC-SDO', '2022-2ndSem', 2, '75', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(24, 'Scholarship', '19-68469', 'UNC-CULTURE&ARTS', '2022-2ndSem', 13, '50', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(25, 'Scholarship', '72-99033', 'UNC-SDO', '2022-2ndSem', 3, '25', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(26, 'Scholarship', '44-24056', 'UNC-ACCOUNTING', '2022-2ndSem', 9, '50', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(27, 'Scholarship', '83-67819', 'UNC-SDO', '2022-2ndSem', 15, '75', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(28, 'Scholarship', '13-48620', 'UNC-ACCOUNTING', '2022-2ndSem', 12, '25', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(29, 'Scholarship', '74-14067', 'UNC-CULTURE&ARTS', '2022-2ndSem', 3, '75', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(30, 'Scholarship', '27-53211', 'UNC-SGO', '2022-2ndSem', 6, 'full', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(31, 'Scholarship', '58-32103', 'UNC-SDO', '2022-2ndSem', 9, '75', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(32, 'Scholarship', '31-18982', 'UNC-HR', '2022-2ndSem', 10, 'full', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(33, 'Scholarship', '63-38691', 'UNC-ACCOUNTING', '2022-2ndSem', 6, 'full', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59'),
(34, 'Scholarship', '69-56595', 'UNC-REGISTRAR', '2022-2ndSem', 15, '75', 'requirement.pdf', 'photo.jpg', 'Pending', 'Pending', 'for verification', '2022-04-25 23:11:59', '2022-04-25 23:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `semesterCode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`semesterCode`, `sem`, `year`, `period`, `active`, `created_at`, `updated_at`) VALUES
('2022-2ndSem', '2ndSem', '2022', 14, 1, '2022-03-17 12:11:55', '2022-03-17 12:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_no` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departmentCode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'defaultAvatar.jpg',
  `status` enum('active','disabled','graduate','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_no`, `firstname`, `middlename`, `lastname`, `email`, `departmentCode`, `phone`, `course`, `year`, `avatar`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('00-04376', 'Justus', 'Blanda', 'Sanford', '624schneider.darryl@example.net', 'UNC-CBA', '09557182456', 'Bachelor of Science in Accounting Information System', '2', 'defaultAvatar.jpg', 'active', '$2y$10$d/jdYsOl7V/v5LTS2yZkDe3FbgQsDW5v6ZzInWNeZnn6KMAWaQyJm', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('00-37599', 'Daniella', 'West', 'Stoltenberg', '888ignacio94@example.net', 'UNC-CE', '09234162651', 'Bachelor in Secondary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$FSeVFNd6WtZ/E7nFecUr8uQ1cb9d4dOUtqGKWx3J8DvhXJ14xeYza', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('00-55520', 'Eliezer', 'Harber', 'Ullrich', '850carmel.collier@example.org', 'UNC-CAS', '09566049109', 'Bachelor of Arts in Political Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$j9igx/dwIsoYFuiatbw7c.Cq1tVSASoFA6N7drMcRs6cJbqtwogBi', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('00-68339', 'Allie', 'Schumm', 'Witting', '937nikolaus.adela@example.net', 'UNC-GS', '09004600312', 'Master in Library Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$GKPooieeSpHFKpSoROBJtutsfbthzIvm7zLDg2oVDn0RieiQWHqfa', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('01-30116', 'Alena', 'Krajcik', 'Kunze', '262lmcglynn@example.com', 'UNC-CCS', '09253724169', 'Bachelor of Science in Computer Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$5ftLrkgoWnYPagf1cbnwVuHxF4Qrdr2HlHqgSHVN9Kfrypba2cqvq', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('01-36197', 'Michelle', 'Koss', 'Homenick', '167kailyn.paucek@example.net', 'UNC-LAW', '09723322075', 'Juris Doctor', '5', 'defaultAvatar.jpg', 'active', '$2y$10$.nh2mGZTr1Hhy2R3d.RugOb6N3qOXQ/U4q8rQOgSOW9OVcQIsXmye', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('01-66003', 'Shayna', 'Hammes', 'Roob', '880thiel.gabrielle@example.net', 'UNC-CEA', '09588643501', 'Bachelor of Science in Architecture', '3', 'defaultAvatar.jpg', 'active', '$2y$10$3kaTQ7vQeP90..l2VfOx7urn6qy4bneiGafkWlFhMSvKyT8yo5.RO', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('01-70710', 'Carmela', 'Krajcik', 'King', '364bergstrom.bennie@example.net', 'UNC-CEA', '09318718944', 'Bachelor of Science in Architecture', '1', 'defaultAvatar.jpg', 'active', '$2y$10$HjDu6VQRtKZTgtEZE9tA6OPe1o/24BYBYWW0.vLmuuTJnHrJQswnG', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('01-76445', 'Ferne', 'Lindgren', 'Jakubowski', '321kkoss@example.net', 'UNC-CBA', '09101266707', 'Bachelor of Science in Tourism Management', '5', 'defaultAvatar.jpg', 'active', '$2y$10$95WmR2P7RC/bqEPe8/RZf.rVL952SuyB02XRhyNCIyZ0bTYTLp.Ne', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('02-01454', 'Merritt', 'Armstrong', 'Wilkinson', '447jazlyn29@example.org', 'UNC-SHS', '09487039674', 'Accountancy, Business and Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$nlrN4NDnn3Ax.1mIM2xNZeM0WyUKRxhnfnae18fY9SwbgxFcApaUu', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('02-17624', 'Odell', 'Rosenbaum', 'Bayer', '290roconnell@example.com', 'UNC-JHS', '09792034374', 'Junior High School Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$UeSUCT8DJ8qz0P/u0FMTU.Cq3OpVMsTnQ2t5BPJ.9W.LRt5ETbsyi', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('02-29343', 'Tristian', 'Connelly', 'Champlin', '417riley.greenholt@example.org', 'UNC-CE', '09909708033', 'Bachelor of Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$RkrhJ5/zbjzuP2v/hfcuVuiXBS.pmIScTOd2YxzbjN3Z8PgXtZrTC', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('02-52164', 'Jude', 'Bergnaum', 'Lubowitz', '428hartmann.terry@example.com', 'UNC-LAW', '09615654231', 'Refresher Course', '1', 'defaultAvatar.jpg', 'active', '$2y$10$2G/17mZ/GPLj/lNYqP6sMes1DvNmpYb62EReK0H8dog9oVR5csafe', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('02-74762', 'Colin', 'Purdy', 'Kerluke', '086reynolds.evan@example.net', 'UNC-CN', '09453494740', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$XTx6OHPkloRPW7jgA2iy4uRUHML3GiqZzEkolacPna3WbUIlA/jxy', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('02-92719', 'Kathryn', 'Wolff', 'Rath', '586clemmie73@example.net', 'UNC-CJE', '09188760969', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$6fQY3hyuQzcnraSN89jA2OlE7L6zf1LS0ZV7olwybMr/OTHPr3V9y', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('02-94117', 'Braxton', 'Predovic', 'Lindgren', '810mohr.mauricio@example.com', 'UNC-ELEM', '09453234878', 'Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$0fRV39GGcLgbfH885GK/MOYlfTkwyhD8IwUJ3qB1L9ox7IPjTMswC', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('03-03998', 'Filomena', 'Farrell', 'Koch', '421octavia.hirthe@example.org', 'UNC-LAW', '09277473514', 'Master of Laws', '4', 'defaultAvatar.jpg', 'active', '$2y$10$auHX9DkK3cEpW/FZZTjB9uoh17hpcrPeQQMkdlWLv7JJURj161KCC', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('03-04361', 'Jade', 'Tillman', 'Pollich', '771uswaniawski@example.org', 'UNC-SHS', '09793421806', 'Technical, Vocational and Livelihood', '5', 'defaultAvatar.jpg', 'active', '$2y$10$a1y93FXKwjGBNdHkQHy9geH8uRw92r808hXnqzwjtbt7fi/AV6r/K', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('03-35225', 'Edd', 'Kuhlman', 'Hessel', '039lakin.courtney@example.org', 'UNC-CEA', '09515105992', 'Bachelor of Science in Computer Engineering', '2', 'defaultAvatar.jpg', 'active', '$2y$10$Yc9ElxW/TIOAaAgnJEFl6.MPbB3rcXUJrLQxoAoTRlUPj0asI3Tpm', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('03-36758', 'Stanford', 'Hintz', 'Brekke', '406zane73@example.com', 'UNC-SHS', '09844099112', 'General Academic Strand', '1', 'defaultAvatar.jpg', 'active', '$2y$10$nZjskKGRKOI1M2lPixwAGu6m0qeRuiwBi9U31HGjKBoVua4sfDi3i', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('03-52370', 'Bell', 'Crona', 'Koepp', '453bell89@example.net', 'UNC-JHS', '09481893136', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$V/5UrzvL3FVJoY3MZvj2FutskKwSJXpkFgPtjLO7xUW7DWkb0LoIC', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('03-93243', 'Noemy', 'King', 'Johns', '572wolf.lila@example.org', 'UNC-CAS', '09538571771', 'Bachelor of Arts in Political Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$0wQMMLGj.9ksB0vTWr3XXuCbHGtUa3lfKLVvB7M7MkHUif5Th9oUG', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('04-58356', 'Kira', 'Wisoky', 'Lakin', '301cassidy.collins@example.com', 'UNC-SHS', '09334426222', 'Technical, Vocational and Livelihood', '5', 'defaultAvatar.jpg', 'active', '$2y$10$K46H/CzaqLALostfVw5v8uuVZNj4.AfzX8kqS/RIAdK7XdPVjuJlm', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('04-59928', 'Mckayla', 'Nader', 'Larkin', '925jonathan75@example.org', 'UNC-CN', '09733504061', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$2rn3w35EOTkzGs5o4C6cyOygDlpw4UtY4vswiHK3mFkbHulfwUqlG', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('04-91868', 'Roselyn', 'Kertzmann', 'Davis', '702cwaelchi@example.net', 'UNC-SHS', '09452048655', 'Accountancy, Business and Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$GjWsxTQIDlVpYF854UFkAOxjO/llPNl0skZ9XvzROEFYhFiDCp8zu', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('05-08750', 'Pinkie', 'Watsica', 'Huels', '315viviane90@example.com', 'UNC-JHS', '09343591819', 'Junior High School Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$/FBK3vTy/H5cC0YwxkDvyOJF7TZ2u7k8TY0EQvIG9j18ypupvFjfG', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('05-15476', 'Adrain', 'McClure', 'Spencer', '806jbogan@example.com', 'UNC-CJE', '09329827770', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$sLp5/PEfmCVuJKhCroHYdOkvsZmh/1P6e/6B7C.X9qs6deDR13Cja', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('05-18887', 'Angela', 'Feest', 'Halvorson', '498else.bauch@example.com', 'UNC-LAW', '09312808256', 'Master of Laws', '2', 'defaultAvatar.jpg', 'active', '$2y$10$famRI2FUJD7dSotdxxs7jexFAyjWULYQOmIjl6aRiB6nZviWZWgNK', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('05-33507', 'Mckenna', 'Rohan', 'Maggio', '563gaylord.winston@example.org', 'UNC-CEA', '09037670728', 'Bachelor of Science in Mechanical Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$YPG4t8a70I/UvHxU.UXIr.j6hEe/AdE7WoMwvzU0dLInoDq4/dYni', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('05-54983', 'Garfield', 'Ebert', 'Mertz', '682erica79@example.com', 'UNC-CBA', '09965191045', 'Bachelor of Science in Tourism Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Z0GwQbQHQ3lUsQrESNztf./4uRIabEJ3oUx/mLhlx1SAUw8W80EMu', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('05-56744', 'Jaylen', 'Lindgren', 'Rohan', '288audra92@example.com', 'UNC-SHS', '09305621707', 'General Academic Strand', '4', 'defaultAvatar.jpg', 'active', '$2y$10$FnMpm/.EQY44Xh4teiiQF.Bw9i2gipEVbgtEETIUima9Fss00QR9O', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('05-59507', 'Terrance', 'Bechtelar', 'Trantow', '742kuvalis.trevion@example.net', 'UNC-CBA', '09289028292', 'Bachelor of Science in Accounting Information System', '3', 'defaultAvatar.jpg', 'active', '$2y$10$a.nKKxYLHDwVclZwErqSG.G5/V6KgzqsP03/Vd.chAVmKbaXCVlGS', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('05-65582', 'Mohammad', 'Tremblay', 'Rohan', '364bernita.quigley@example.com', 'UNC-CBA', '09614726389', 'Bachelor of Science in Tourism Management', '3', 'defaultAvatar.jpg', 'active', '$2y$10$xeQIGETryEIcJizmljhcb.Q01fWVyClUS4z/mFIQ8dlpr6iqJ6HlS', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('05-66023', 'Josefa', 'Ebert', 'Casper', '254koch.willa@example.net', 'UNC-CEA', '09828322246', 'Bachelor of Science in Mechanical Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$frCqLdWv3iO1NSxPWMqteOSNnhVvqA2oeRLN9zXgWeFghm74hpxBO', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('06-24287', 'Santiago', 'Schneider', 'Rutherford', '331bernie.bergstrom@example.com', 'UNC-SHS', '09537004566', 'Technical, Vocational and Livelihood', '4', 'defaultAvatar.jpg', 'active', '$2y$10$krQmNEm7H6J.YaTwvvCDae3R2D7p/itf.zSpsldxhgtnxq6ytksOq', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('06-25648', 'Ernest', 'Mertz', 'Murray', '181vena.paucek@example.org', 'UNC-CE', '09074744104', 'Bachelor in Secondary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$xgKKEOYXMAtzF33cwmyZ4uwQeE4PRLVVu.q9ZJl/Zs0OdfVSxX37y', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('06-50411', 'Syble', 'Shanahan', 'Bernhard', '486boyer.oma@example.com', 'UNC-CE', '09890197949', 'Bachelor in Physical Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$gHDWifORFgGbi/BV1wFj2e8HAswDQVdKHB2IRsmgeZkCD9Raot.a6', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('06-57903', 'Carey', 'Satterfield', 'Luettgen', '169priscilla.mayert@example.org', 'UNC-CJE', '09806525027', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Bb2iOye5n3YfFsdlYhMUk.i1zaQuCoJoY9IajvWYaCxxaGQLnqo.a', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('06-63406', 'Korbin', 'Miller', 'Rice', '084kurtis16@example.net', 'UNC-CJE', '09705677403', 'Bachelor of Science in Criminology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$BKeFIDIyijsCymHvQh9d1uwYUSdzsmjMVi0Q1YsslIeA57J0pkdrC', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('06-69508', 'Heather', 'Herman', 'Howell', '007pbechtelar@example.org', 'UNC-CJE', '09529114154', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$z11v11cWtE6KTN4rhCVHLObPzYX8RT.3wRUI4ResLv4TOJWiDa2Nq', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('06-76128', 'Erika', 'Abbott', 'Nader', '474bogan.trisha@example.com', 'UNC-CEA', '09277649112', 'Bachelor of Science in Electrical Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$7AHpkmUY9Vpr22Nmltra3OERHIvGJZdsEvNJwfSIKz37qe5oUctDO', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('06-77712', 'Susan', 'Braun', 'Boyer', '073rau.sarah@example.org', 'UNC-CAS', '09361548520', 'Bachelor of Arts in Psychology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$21MXLMO6Wy9Og/F/b8YQIeApyu9oCQoZD/I12P2bjKHmcynI9267W', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('06-79470', 'Trycia', 'Moen', 'Macejkovic', '692rodolfo35@example.org', 'UNC-CAS', '09803611824', 'Bachelor of Science in Biology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$zEPnTvdth74g1c9MxlJ/NeJUVw33FXdmQFMe87NSwHX6HtdByJCBm', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('06-96499', 'Hallie', 'Ward', 'Goldner', '442ierdman@example.com', 'UNC-JHS', '09386110554', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$Ei1zGlf6wBcLixKh30WiieKjMCKR02LaLBR11EQpZXMC7JYgZxMX.', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('07-11095', 'Orlo', 'Corkery', 'Kiehn', '961nklein@example.com', 'UNC-CN', '09845427809', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$/0AL3agFbm8JmjvqrSmdzOwC5IYn6LuaqalfrAARKnToVe4kTdNT2', NULL, '2022-03-24 16:26:08', '2022-03-24 16:26:08'),
('07-14281', 'Etha', 'Olson', 'Pouros', '211micaela83@example.com', 'UNC-SHS', '09670675259', 'Science, Technology, Engineering and Mathematics', '3', 'defaultAvatar.jpg', 'active', '$2y$10$.Habr0YTy1s9MHyAQpiLluel1XSiPuSMzJR7ndpM3xv4gJki.Kq8O', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('07-39125', 'Cindy', 'Mann', 'Keebler', '841fbashirian@example.org', 'UNC-SHS', '09225867099', 'General Academic Strand', '3', 'defaultAvatar.jpg', 'active', '$2y$10$rGXdSA92DEPtoGWPsksFxu8awJwM6KfS5jPDRAlEYS7hna3VOfENa', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('07-67794', 'Earnest', 'Gaylord', 'Rosenbaum', '196arturo54@example.org', 'UNC-CEA', '09537967997', 'Bachelor of Science in Computer Engineering', '3', 'defaultAvatar.jpg', 'active', '$2y$10$n6LUk/sAwBNfuCH9YIefvOICVGZso.w2TEaGSVWkJmSc27UadFJ0O', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('07-85563', 'Kaleb', 'Sporer', 'Bernier', '954reva.hane@example.net', 'UNC-CJE', '09999515324', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$TNra8PfXjUME02pLOW3LBOIwwjFsEPV6C5752EZUjsjet9RkOYuXm', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('07-91730', 'Juana', 'Mills', 'Glover', '387ethel71@example.net', 'UNC-CAS', '09898159720', 'Bachelor of Science in Biology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$nzdLqv.3X3xFcRLVzJNhLOcQlmsU0QRGcZVuZ6yZPQaoYlypuqBYe', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('07-94629', 'Kaia', 'Heidenreich', 'Parker', '091yfadel@example.net', 'UNC-LAW', '09215424675', 'Refresher Course', '2', 'defaultAvatar.jpg', 'active', '$2y$10$Azj/SMYVt1dej9TQSvoq6OppYwfF9ZNeA/XlwLOUC6gqdhL2IG7Gi', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('08-04722', 'Marilie', 'Hermiston', 'Dietrich', '522vtorphy@example.com', 'UNC-CEA', '09292761685', 'Bachelor of Science in Mechanical Engineering', '5', 'defaultAvatar.jpg', 'active', '$2y$10$L/SjS1vPnIRLo5QekgdpsOOBi63ML9O1FGiDWbkiHq01Zuwa.JdSW', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('08-06586', 'Marlon', 'Aufderhar', 'McGlynn', '845kebert@example.net', 'UNC-CBA', '09026858812', 'Bachelor of Science in Accounting Information System', '2', 'defaultAvatar.jpg', 'active', '$2y$10$.DhYmha/R1tuE4U8cGbIKeMFKq99t5Yo.mrI/x6oOmpvOwkbOnal6', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('08-14367', 'Dianna', 'Toy', 'Rogahn', '171jessica98@example.org', 'UNC-CN', '09993690084', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$vY9ktCSR7gAtqCwcAXrWPeutQG/7DhyPai5RulVQFoE9tcj4YImci', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('08-22388', 'Vivianne', 'Predovic', 'Crona', '388jamison33@example.com', 'UNC-CN', '09763083260', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$q5uB5Yzuu5SwlVEFBFLoK.f6zru6JOwbUCUiyGHdwhiueOaYh2ZE.', NULL, '2022-03-24 16:26:14', '2022-03-24 16:26:14'),
('08-30558', 'Titus', 'Fahey', 'Deckow', '298vlabadie@example.com', 'UNC-SHS', '09537375055', 'General Academic Strand', '1', 'defaultAvatar.jpg', 'active', '$2y$10$Ngjxs6m7RX3mk18W83wR.eai/OY1HolHVa7asg6aYS8qIDa8c/6Ni', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('08-38227', 'Elta', 'Mayer', 'Ritchie', '899xkoss@example.org', 'UNC-CCS', '09639687291', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$.O.cXamec/0Ak3OWjdwG5eZ2RhCPDZtDeXrEHYlzMgTdEZUzeJbfS', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('08-38588', 'Garrett', 'Murphy', 'Morissette', '860kenyatta26@example.com', 'UNC-SHS', '09682558670', 'Science, Technology, Engineering and Mathematics', '4', 'defaultAvatar.jpg', 'active', '$2y$10$B/UWaL5LfgLKrtB2DKu2d.ZRynhAHu1yICsk6uLAfM5SP3IxytN2C', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('08-49460', 'Aracely', 'Grimes', 'Pfeffer', '562windler.vernie@example.net', 'UNC-LAW', '09358439084', 'Refresher Course', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Hckz0JsxMmE.rPZJkFC4VOOPsCQp1CXX7Xn5nsQmcsUsquuZbFOdW', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('08-59812', 'Pierre', 'Hills', 'Mraz', '210millie65@example.net', 'UNC-JHS', '09196003005', 'Junior High School Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$h/cIKy1cruxyiHdTFzJxAegLz25I2ael1/VXWnZWghZ82orosJLZS', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('08-69455', 'Percival', 'O\'Kon', 'Raynor', '488rodrigo91@example.org', 'UNC-JHS', '09794625191', 'Junior High School Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$kNjVkXTeN0w7xTjUviCtre7R51QKo1T2VijmPQl1zulMM9E.HPNFa', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('08-79835', 'Natalie', 'Brown', 'Lubowitz', '929corene.schimmel@example.com', 'UNC-SHS', '09446765642', 'Accountancy, Business and Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$vKvvUpCRKfaxUR1fM7XwPOtAtcna2vLfQTpbCYT6qiTGP/RSU6URK', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('08-82006', 'Cruz', 'Huels', 'Kunde', '383marcella35@example.net', 'UNC-CEA', '09821262038', 'Bachelor of Science in Architecture', '1', 'defaultAvatar.jpg', 'active', '$2y$10$mSEgRAB/AFfyTCkN6pMh2OInGZiJdnIwp4BhAijb9KoeEAo0H1Ix6', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('09-06419', 'Selmer', 'Volkman', 'Brown', '058alisa.batz@example.net', 'UNC-CBA', '09228147803', 'Bachelor of Science in Entrepreneurship', '1', 'defaultAvatar.jpg', 'active', '$2y$10$LBGZMZhCxAJtquUaYO6qWeimt/WxCTOnflspiiZcBpbwuzuQ99/6O', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('09-12325', 'Vincenza', 'Fritsch', 'Kuhn', '702lind.willis@example.net', 'UNC-CCS', '09840066207', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$XlFRWc7Y6w1iL5fcxzd4dOdEwMBkEUHPflfw5NrB0vNGXrEeluXIC', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('09-15952', 'Amani', 'King', 'Fritsch', '129jpfannerstill@example.net', 'UNC-CJE', '09077447524', 'Bachelor of Science in Criminology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$LUevte5UvZym7QQtt64Pt.55P7Bf1DSJvEFPNK71c6efEiv0ULZJ2', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('09-16144', 'Marcelo', 'Mueller', 'Turner', '421humberto.lockman@example.net', 'UNC-CN', '09178336612', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$FfLx53pKScCcD4FG7xUwVefTAZqwR0ZTe5HHHCqPhqznnrunN4RSq', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('09-29120', 'Eudora', 'McKenzie', 'Rempel', '749elwin.witting@example.com', 'UNC-CE', '09757840918', 'Bachelor in Physical Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$P2IQZUJLOenLbpeAUglHZuygz8CJOb4SjU7DNAw6v0FvTguKbB0w.', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('09-34176', 'Ewell', 'Kling', 'Corwin', '773ryleigh82@example.com', 'UNC-CN', '09716194671', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$UdVRLRzuVDVMz92ShVNbnuySHD6oe4AY..TIsTyE32TdveBxg.AF2', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('09-41708', 'Cecilia', 'Kuphal', 'Howell', '648kuhic.macey@example.org', 'UNC-ELEM', '09706964184', 'Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$nnKeJZNq5PF1QgXXwzxKIuYYRT6yAudwHvjtzfhw22VgHUziNiOwS', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('09-56622', 'Aida', 'Bayer', 'Weimann', '325ewalsh@example.org', 'UNC-CE', '09916018011', 'Bachelor of Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$S/Zpmc3aeXUDSArZt5eqLuGqZvkAyiv.UKqc7GXqhuVnnTc6WFpZa', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('09-78773', 'D\'angelo', 'Ortiz', 'Kuhn', '051pearline.rogahn@example.org', 'UNC-CJE', '09061723785', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$vez9OQGL2m44B3Lv1BTMdOpdBcP4Ol.FY431AXy5rlqcPE9kLGSxu', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('09-88991', 'Maegan', 'Eichmann', 'Bergstrom', '688goodwin.mathilde@example.com', 'UNC-CN', '09464078168', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$mNSmGPugVDxGx/x43Vegeeo2/J0H8MLf2FWLebNES2z8ZaXUeeiHC', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('09-92811', 'Jairo', 'Lesch', 'Hamill', '994treva82@example.org', 'UNC-CAS', '09676995189', 'Bachelor of Science in Biology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$tDwoswTaziTjrwpgreEc9esSjFSDKRlhixpHOb9uaEPPB3lXovPrO', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('09-97386', 'Karine', 'Hilpert', 'Littel', '460plubowitz@example.com', 'UNC-CAS', '09146961936', 'Bachelor of Science in Biology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$/P/DOY5D.6ltzsuTKSQFNuEO89aNuUB6ZiMZomEnL/3lcKnGgqg1K', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('10-08925', 'Keaton', 'Schmeler', 'Hayes', '788fpredovic@example.com', 'UNC-CCS', '09277025626', 'Bachelor of Science in Computer Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$ZRyXfKJIoYAMj8BaIwNi0eIwCNZpxrZppjy6EHqlPDcDs02ZJHyfG', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('10-13784', 'Nelle', 'Stark', 'Metz', '633emerson.lemke@example.org', 'UNC-CCS', '09531209877', 'Bachelor of Science in Computer Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$jpGerOF3RbKk5kwhE8hLNeELZRd4DrPfROuzdOJmdVw1oqeE4rjmi', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('10-25247', 'Kody', 'Hill', 'Murphy', '524janis80@example.org', 'UNC-SHS', '09305944210', 'Technical, Vocational and Livelihood', '3', 'defaultAvatar.jpg', 'active', '$2y$10$p3Qt5oghG/SlfR93Tcew0e.MR4u619hVONaYp6uOv2zaDWAcJhJLK', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('10-38461', 'Akeem', 'Luettgen', 'Keebler', '734lemuel.moen@example.org', 'UNC-CCS', '09696887247', 'Associate in Computer Technology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$jNSn3TdVluLWNdaJpfcJxuwRz9IKBeDDxJ9rfwRIdUYcdxAgeQ/r2', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('10-40885', 'Karley', 'O\'Connell', 'Reilly', '065imurazik@example.net', 'UNC-ELEM', '09050920205', 'Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$qWnLDOnql8hwRSLS/nJhUuVynQq7tnyrr1hw3IXtd5/OIqcgTRHRi', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('10-46258', 'Kaitlin', 'Kunze', 'Zemlak', '755hillard99@example.com', 'UNC-CBA', '09541056985', 'Bachelor of Science in Tourism Management', '3', 'defaultAvatar.jpg', 'active', '$2y$10$uxXzp8fVTbUxfFZRb9SPkegMzilEIraejS1wm5YcXqbgeiAv7S2Me', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('10-81569', 'Chaz', 'O\'Connell', 'Schuster', '471ywiza@example.org', 'UNC-CN', '09895503821', 'Bachelor of Science in Nursing', '2', 'defaultAvatar.jpg', 'active', '$2y$10$QEaV/G3FFcImR5m2k0xuWuayVybHE.od7sYK8luYYc01u7r.xXR.6', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('10-87258', 'Titus', 'Kilback', 'Cole', '333kyleigh30@example.net', 'UNC-GS', '09668227980', 'Master in Library Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$jlG24CLvwCDq53vYScQm3uRJsCxUJCUXrHIrcgVUYFx0n0FyQ3mPi', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('11-03425', 'Jerome', 'Klein', 'Mueller', '311christ50@example.com', 'UNC-GS', '09544746840', 'Master of Arts in Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$P0C1ZAd3x8jPYXVWfXYJZ.cuN/Ry95dxRG4bu5eOEGOi.cZTys6J2', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('11-05948', 'Laury', 'Moen', 'O\'Hara', '775ahackett@example.org', 'UNC-CCS', '09688351883', 'Associate in Computer Technology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$3gFCqavN8DBYmSNF9nNU/OOCA2TJ9SUGX5Ifjuhd2ZpyAKEmTH6B.', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('11-55483', 'Lennie', 'Kassulke', 'Schumm', '288kenyatta27@example.com', 'UNC-CN', '09007281421', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$fhnwrZ1rnQomKz54VwWVYekGneb6Qb3yJbvx6bHXWHgPhmFSYPGEm', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('11-61760', 'Savanna', 'Zulauf', 'Legros', '622leonor94@example.net', 'UNC-CEA', '09806994047', 'Bachelor of Science in Computer Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$eF63onVOQ7Dl7i7jT3t6S.ptHtN8fecczo2wdsj1eXfAqHgcO1/vG', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('11-65138', 'Cassidy', 'Sporer', 'Marks', '959alivia.ferry@example.com', 'UNC-CCS', '09701634300', 'Bachelor of Science in Computer Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$36/GSOe6boxfNsIeHmurYOmZIPlSNGZSi0aVxkba7r4ZQQdpOPk2W', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('11-86384', 'Donna', 'Altenwerth', 'Hamill', '416katlyn.runte@example.com', 'UNC-CCS', '09772477636', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$ox3S3/zHu.yebfxnaprCl.3knuSG7yUDNHUZNopqH/n0T8qb9kUT.', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('11-93294', 'Morton', 'West', 'Okuneva', '619fadel.keyon@example.net', 'UNC-CAS', '09277783783', 'Bachelor of Science in Biology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$rOcB/KodLeSSmIXhJwN1D.ahzH7R4F8oQJgwQoP9N5ufRTonF6JvG', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('12-01130', 'Brielle', 'Howe', 'Goodwin', '576bmohr@example.com', 'UNC-CAS', '09736030042', 'Bachelor of Science in Biology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$qCf3Vi5a2QbZ49sbF9iCeONe.FfGslAdcN3jkZWF3QsAxgHtIgYH6', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('12-04752', 'Anissa', 'Ernser', 'Tillman', '283martina15@example.org', 'UNC-JHS', '09540941372', 'Junior High School Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$P1kw3PSuDvDFmySCRrcyq.x6.fQ3QXyEeK5r2dOF7suygOkfJKvT6', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('12-14560', 'Lauriane', 'Sipes', 'Cormier', '606tokeefe@example.net', 'UNC-CJE', '09467594821', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$yxEPHR6L5v3joqkWdKCB9uWTImzw5.NEr6QKUc3f6gFFRq7Z.VFEC', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('12-15130', 'Francis Peter', 'Cayonte', 'Bare', 'francispeter.bare@unc.edu.ph', 'UNC-CCS', '11111111111', 'BSIT', '4', 'H92qbM16maiUMvNZsXXS2FDlYQlxOV6Tfq5eyIxI.jpg', 'active', '$2y$10$RIWJJe6nljLtNyKapLDQcOZ.teNTbs668llEKesWsX8vYPPyR0Zb6', NULL, '2022-03-17 04:15:25', '2022-03-23 20:23:08'),
('12-33250', 'Francis', 'Huel', 'Konopelski', '322murray.jadon@example.org', 'UNC-CAS', '09455618577', 'Bachelor of Science in Biology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$DMEM1Mplbk03g9Jtd/Dkku.3KQn9gnNj5Bloxzo.Ha4g7UAftiWlG', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('12-34565', 'Juan', 'Rizal', 'Dela Cruz', 'delacruz@gmail.com', 'UNC-CEA', '2332453453', 'BSCE', '4', 'defaultAvatar.jpg', 'active', '$2y$10$0Ca6/MKl21FzdhUNVBZsF.auTR.CtUerUyQ4rBZ94BiBG7MUzUAPC', NULL, '2022-03-17 04:15:25', '2022-03-17 04:15:25'),
('12-44953', 'Stella', 'Bechtelar', 'Pfeffer', '009domenico.hettinger@example.com', 'UNC-JHS', '09678788518', 'Junior High School Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$7WbJxJRWyhDdAGxT3DM3wOnGOb5eV8GrfCr4GTa2IjJm5YzRJTBfa', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('12-56798', 'Clinton', 'Monahan', 'Towne', '378madonna52@example.com', 'UNC-SHS', '09276768894', 'Science, Technology, Engineering and Mathematics', '1', 'defaultAvatar.jpg', 'active', '$2y$10$NrTY5BCwkDtGk/TaxeufUelixgAEtoHVKG262xAp1l7P6zrcgggwe', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('12-57323', 'Malvina', 'Satterfield', 'McLaughlin', '720bernier.dean@example.net', 'UNC-JHS', '09721498011', 'Junior High School Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$fkq8zDBWu7.dIfokk/Mrte0y/Sn1IN5FrnWKVmJYXNm9MeCr5dPaC', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('12-61873', 'Hosea', 'Kunde', 'Schultz', '238koepp.jenifer@example.org', 'UNC-CAS', '09381892090', 'Bachelor of Science in Environmental Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$HQSTaladzIN8D0kTmYDgBOrXXhV7Ye0ZT76GIQi/hbPSthPccomFS', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('12-65432', 'juana', 'Rizal', 'Dela Cruz', 'jauanacruz@gmail.com', 'UNC-CBA', '3456346456', 'BSA', '2', 'defaultAvatar.jpg', 'active', '$2y$10$f7/K5VIuaHdQPPHcg71Mg.CJB.8ArUaGCz87rtQwTMlV4GGfwVHga', NULL, '2022-03-17 04:15:25', '2022-03-17 04:15:25'),
('12-72996', 'Lucy', 'Gulgowski', 'Willms', '248yvonne.bruen@example.net', 'UNC-JHS', '09340882840', 'Junior High School Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$XuzRTueiw376UqzEXpu7MO1ig6pMphyTN.HPVw9TH9Y/KSjxcjyBe', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('13-48620', 'Angus', 'Wehner', 'Streich', '266ghessel@example.com', 'UNC-CCS', '09447095045', 'Associate in Computer Technology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$INGEvnF4vo8rxvK9jLJmKuSpjlkGmUjGE0ddEQGZVBNyl8MpMoQhy', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('13-48622', 'Dereck', 'Koelpin', 'Schroeder', '432jaiden64@example.com', 'UNC-LAW', '09394198460', 'Master of Laws', '5', 'defaultAvatar.jpg', 'active', '$2y$10$PVODC3F1kvrOO3ZOeIojFOOPr2dF5bSfDjZs16y68osxK1d4n2NRm', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('13-51360', 'Frieda', 'Fritsch', 'Murphy', '590vraynor@example.com', 'UNC-CE', '09883425442', 'Bachelor in Secondary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$dzFy7uasuxAysvPyzftO9.85HYMZ.F5kuZIuOSvUj39NFJQBSzucW', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('13-56323', 'Esther', 'Wilderman', 'Schmitt', '519jhuels@example.net', 'UNC-CCS', '09622504116', 'Bachelor of Library in Information Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$iBw6IVWKNlHZxGs0QUmb4.wkDiwL3cGHXBiBA6V1qs7850tg8Wmm2', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('13-60370', 'Kyler', 'Ratke', 'Kuphal', '726george.fadel@example.com', 'UNC-CJE', '09878221335', 'Bachelor of Science in Criminology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$iythgjnmOZ44PMahI/Q40.rW3PsgHWKZYyxosEF/DIXeJiIllqiRi', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('13-75814', 'Bulah', 'Abernathy', 'Rau', '956pheathcote@example.com', 'UNC-CJE', '09179488428', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$l1QYvV7KxZqw.7BBWBTkMekz3bE0b3WXaqBcW.IaSMiRAoJSKNghC', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('14-07469', 'Lera', 'Rowe', 'Volkman', '363marion.casper@example.com', 'UNC-CCS', '09804859128', 'Bachelor of Science in Computer Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$jL2lkAQ3CecmllwN9WQLD.IX/iZgMClZZuYQwrs0kEp7jfWnPa4LS', NULL, '2022-03-24 16:16:23', '2022-03-24 16:16:23'),
('14-16892', 'Garrison', 'Powlowski', 'Gerhold', '173kirsten79@example.net', 'UNC-CN', '09074589189', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$TPaS3xAKbokjf1Un3IHd3.B5i2fvtekXgeXnySsOpKm2Sa2vJKR/G', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('14-20235', 'Xavier', 'Bibe', 'Pasumbal', 'xavypasum@gmail.com', 'UNC-CCS', '09395909619', 'Bachelor of Science in Information Technology', '4th year', 'defaultAvatar.jpg', 'active', '$2y$10$Y6f0LqtrGfvATfxqPxsep.AE7TPA8TzYyYuoRMr0hmwNxWZ/VXq5a', NULL, '2022-04-20 04:56:55', '2022-04-20 04:56:56'),
('14-28850', 'Claire', 'Padberg', 'Medhurst', '117treutel.monty@example.com', 'UNC-CCS', '09539017570', 'Associate in Computer Technology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$pE5vOOGlrqbfe7x2JqkF7enYo8jFHkqtss1y53aZWbMSX48QJaYKu', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('14-40157', 'Rossie', 'Hodkiewicz', 'Fritsch', '331spadberg@example.com', 'UNC-ELEM', '09090718714', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$GmBIrp1we0FqboTea8L/8egvb.gbq7af./YxCPkhJdNy7HwCzCT/q', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('14-41553', 'Aiyana', 'Schamberger', 'Brown', '688boyle.duncan@example.com', 'UNC-CJE', '09095564403', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$gqobz3281WiHusH7qWEJNe39pCT1OSCCZMgueomUsaZsZKmddpQJm', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('14-45905', 'Kaelyn', 'Dicki', 'Gibson', '530carley.nienow@example.org', 'UNC-JHS', '09292413424', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$TJqzPv7ThpaULVhl48RO3.cO/xezW14F4PpwEFSlJSmhQOxW3ioAu', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('14-64632', 'Mya', 'Fahey', 'Runolfsdottir', '201qcole@example.org', 'UNC-CBA', '09093843362', 'Bachelor of Science in Business Administration', '2', 'defaultAvatar.jpg', 'active', '$2y$10$OZi8S5fFAEuD32MXJV6EAetH8/OXCnyh06IZ5u8n/w60QwCybSmk.', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('14-69449', 'Tyrel', 'Hartmann', 'Bartell', '228schinner.flavie@example.com', 'UNC-CEA', '09690635700', 'Bachelor of Science in Mechanical Engineering', '5', 'defaultAvatar.jpg', 'active', '$2y$10$LdQtqUUEmBXluUgPsig37u24gOiwNeDXmdL6i11QnLnkZ9uIbXVYa', NULL, '2022-03-26 02:27:45', '2022-03-26 02:27:45'),
('14-83459', 'Michale', 'Runolfsdottir', 'Yost', '406ronaldo.beer@example.org', 'UNC-SHS', '09206558239', 'Science, Technology, Engineering and Mathematics', '2', 'defaultAvatar.jpg', 'active', '$2y$10$TePu9KTx9tHYfVGAq6lMf.zeIzCtrIY.6/sf2HL0MKA4bTzmrGwNm', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('14-87211', 'Vallie', 'Zulauf', 'Schneider', '331ernestina01@example.com', 'UNC-JHS', '09615334634', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$s/L5IhddzlWI2qbaWhiiBuh9vqNNgq/2Vgkp01E/XsLU1foZY8./2', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('14-94618', 'Judge', 'Legros', 'Steuber', '348flebsack@example.net', 'UNC-CN', '09313258582', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$H/Do8uC0WinF9dJyChyoBenYklQDE4/YTpo5VqvxbzRgyTCoqtDs2', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('15-01184', 'Trenton', 'O\'Connell', 'Stanton', '413clemens66@example.org', 'UNC-ELEM', '09764849889', 'Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$MsclEdKlVZh3HAnuoZdbE.MfJdU4GEQF9pW5IHFu4gn0Lc9xfbTIC', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('15-10252', 'Ernest', 'Bartoletti', 'Goldner', '885abdullah21@example.com', 'UNC-CAS', '09209073701', 'Bachelor of Science in Environmental Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$FsALs0TKLayolFNh5nlsX.yiWwj2.cb9xIhlDlHIxy.NNHT1buJxy', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('15-76960', 'Reece', 'Cole', 'Kohler', '160xrosenbaum@example.net', 'UNC-ELEM', '09426886131', 'Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$zrO95f07XIkddyL2Rb8he.QUDCAio6Xvau3G4xV4Nkzz1XJvXquzW', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('15-81132', 'Ahmad', 'Schmitt', 'Abernathy', '580wilhelmine01@example.com', 'UNC-CN', '09793336895', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$ugZOtDMEaS/4y.pr/uBog.1seaPgBRjRtf9WIWObAeFjWSvQXvVv2', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('15-85143', 'Maryam', 'Ondricka', 'Olson', '558stacey.ankunding@example.com', 'UNC-CE', '09796733665', 'Bachelor of Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$hJtxBw29TRcBF.aqEiDTh.MP45ML0lgF6tbq/5vOF1nQQD/SnVNOq', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('16-00251', 'Angeline', 'Romance', 'Remolacio', 'angeline.remolacio@unc.edu.ph', 'UNC-CCS', '09301244236', 'BSIT', '4', 'bA1zqzFX7DZ0s7tsMrk5krTw8b2FnGT4Cg9YV1JC.jpg', 'active', '$2y$10$ViSyyBNI6rfl7OfmpelfbucQxFbL9fu5Y902mo97591.ehmGNeaIe', NULL, '2022-03-17 04:15:25', '2022-04-02 05:20:32'),
('16-19904', 'Brock', 'Champlin', 'Roberts', '703christiansen.addie@example.org', 'UNC-CBA', '09552138427', 'Bachelor of Science in Accountacy', '2', 'defaultAvatar.jpg', 'active', '$2y$10$fqtyQR4nRpAYJOFUt0NuPuWyF9y.jC6sznswjYR5C.SOwwHWsz87e', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('16-23454', 'john henry', 'san pascual', 'abante', 'johnhenry.abante@unc.edu.ph', 'UNC-CCS', '9999999999', 'BSIT', '4', 'defaultAvatar.jpg', 'active', '$2y$10$4n9pf7Zauw/P7nxtyFU2KuAZs4GPGnzltrXM/HBEHwDBI3.c.Qfoi', NULL, '2022-03-17 04:15:24', '2022-03-17 04:15:24'),
('16-35665', 'Alfonzo', 'Reinger', 'Crist', '002therese42@example.org', 'UNC-CAS', '09158690507', 'Bachelor of Arts in Psychology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$uohX.btrZciPGJxoyG6Bn.0Dkl7h8AsefTQ0MZoaTQs4bHQcM1eLy', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('16-41120', 'Thora', 'Schmitt', 'Kunde', '057daniel.milton@example.net', 'UNC-CAS', '09066227571', 'Bachelor of Arts in Political Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Ok3IbIzNMeUeSCwR5mhXHupDEipMJM3r9rkYT4sikvasOiBVZZ88i', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('16-52722', 'Bertram', 'Feest', 'Harber', '665corkery.jerad@example.org', 'UNC-JHS', '09478556796', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$vgTIlZvjiZd/uCKw/7Mbnef0q9X6KMl9oAY3rIE2PziaP9U.iPAY6', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('17-00812', 'Tanner', 'Cruickshank', 'Parisian', '789murazik.viviane@example.org', 'UNC-CAS', '09522731524', 'Bachelor of Arts in Political Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$2sLcOatPUP3WNAB2DIu2iuOf.7lP5NiQ6CsHZ1ukGE59T94PPVPR2', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('17-09632', 'Soledad', 'West', 'Fahey', '657fswaniawski@example.org', 'UNC-CEA', '09855115610', 'Bachelor of Science in Architecture', '1', 'defaultAvatar.jpg', 'active', '$2y$10$eeQrh8A/bLnqpmHtCTHpLewLIJXEVKnUwsFn9IZPB7OgCXxNLzSzK', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('17-16415', 'Davion', 'Ward', 'Hamill', '268larkin.myrl@example.net', 'UNC-LAW', '09684212673', 'Juris Doctor', '2', 'defaultAvatar.jpg', 'active', '$2y$10$4ADgXjZ80O7Vndhm/QfLZuktiJ2ESpkM4ml.vkuoUsdEkV8IVvSVe', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('17-32254', 'Aida', 'Durgan', 'Sipes', '062mittie00@example.com', 'UNC-CN', '09927553011', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$4D7c3eaodS050nDc3hga9e5wFruzOo.JGq6SM8JVH/0Trb1Vaj2tO', NULL, '2022-03-24 02:33:58', '2022-03-24 02:33:58'),
('17-68168', 'Oleta', 'Dooley', 'Gulgowski', '968susana.sawayn@example.com', 'UNC-CBA', '09526919951', 'Bachelor of Science in Entrepreneurship', '4', 'defaultAvatar.jpg', 'active', '$2y$10$CLJ4fhXzKuRIdBzOiJC/QeXYVf91CfyZA1lhWM0jgiRg0yVR3XbHq', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('17-76077', 'Eleanora', 'Ruecker', 'Jacobi', '738conn.fidel@example.net', 'UNC-CJE', '09541948214', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$655siG/6QGkQoFgXlvi0a.kHXOikDCji7n1wkbPclr7S0chmJt6E.', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('18-04929', 'Freida', 'Kassulke', 'Reinger', '764schaefer.margaretta@example.org', 'UNC-CBA', '09132608160', 'Bachelor of Science in Hospitality Management', '2', 'defaultAvatar.jpg', 'active', '$2y$10$nSwpPhQCjQ7vE76dp9lcCenWSyHsSqW2SMo83U0s6nluPPsuGZOCC', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('18-08205', 'Litzy', 'Hermann', 'Mosciski', '013abdiel91@example.com', 'UNC-JHS', '09950820849', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$uz/BcE0ltNbv8.o3nxjW/usZ1InIHs4C3r.D71mGnLzm.KePnP7tC', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('18-08925', 'Jose II', 'Vargas', 'Evasco', 'jose.evascoii1150@gmail.com', 'UNC-CCS', '09486330988', 'BSIT', '4th year', 'IcYCktYvCAyOE0E9vfKebiXqGqkCfxPiM2W3uwuW.jpg', 'active', '$2y$10$JNTItYCN1qGPtXszeTtr.eqxeUTDR933rQ/2DwqU3AjAdRbXkECWi', NULL, '2022-03-17 04:15:24', '2022-04-08 01:55:08'),
('18-11536', 'ace', 'laya', 'aniete', 'ace.aniete@unc.edu.ph', 'UNC-CCS', '09505363053', 'Bachelor of Science in Information Technology', '4th year', 'defaultAvatar.jpg', 'active', '$2y$10$ZuRMFy/4jEwJcFcCI5v2meKYkYWKGqRgmhE9qGJkxnTHYL/9Xwz6K', NULL, '2022-03-25 03:42:42', '2022-03-25 03:42:43'),
('18-11776', 'Kenneth', 'Serrado', 'Regonay', 'kenneth.regonay@unc.edu.ph', 'UNC-CCS', '2222222222', 'BSIT', '4th year', 'BKqCS2axEVtwcLBl4XBduCjPae55MNWbR0orueze.jpg', 'active', '$2y$10$oqZNo2nFdwlg22BeOb.k5eB/sPpwAA8pPbM8Fyf2JFNrf/7dmnZ1W', NULL, '2022-03-17 04:15:25', '2022-03-24 02:18:47'),
('18-12345', 'sdgsdg', 'dfgdfg', 'dfgdfgd', 'jos33vasco@gmail.com', 'UNC-CCS', '09486330988', 'Bachelor of Science in Information Technology', '4th year', 'defaultAvatar.jpg', 'active', '$2y$10$Kpsv2.aXzBm72Ts98mnS.OLcS79ATqoErQRMpIn2JY0wC7ZbbOCuW', NULL, '2022-04-17 05:14:01', '2022-04-17 05:14:02'),
('18-12675', 'Mikko', 'Asares', 'Ebdani', 'mikkoebdani@gmail.com', 'UNC-CCS', '990909090', 'BSIT', '4', 'algqr8U3EDofnB4pOALDJRGblrjZsrehPcQFcGm6.jpg', 'active', '$2y$10$fF4K/feulsqVUpsPIo.COe5nQ4nYS6O15Rbt.CMoAtjIQNq2OPbV.', NULL, '2022-03-17 04:15:25', '2022-03-23 20:22:27'),
('18-24421', 'Ian', 'Gerlach', 'Grady', '429ohara.aracely@example.com', 'UNC-CEA', '09299264827', 'Bachelor of Science in Mechanical Engineering', '5', 'defaultAvatar.jpg', 'active', '$2y$10$zjDNe.m/uMErKnvRdnrqmuZ0Ul0MsTvcfGS4enEGDsSvjrlPqIDN.', NULL, '2022-03-24 16:26:08', '2022-03-24 16:26:08'),
('18-75854', 'Deven', 'Hagenes', 'Schoen', '619connor36@example.com', 'UNC-CCS', '09913854281', 'Bachelor of Science in Information Technology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$qoCaluLWrgw2zz9DvVC/lOjdPowmdjSG1p/PkVGIiFKMGETA7WdtK', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('18-78162', 'Malcolm', 'Casper', 'Reichert', '745xherman@example.net', 'UNC-CN', '09484443652', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$qGQkhMs3FegMtbk/QQXUr.70zg1LpF5IJPoss9AoAyrU7Kw05VaFi', NULL, '2022-04-25 23:00:20', '2022-04-25 23:00:20'),
('18-99348', 'Lurline', 'Pollich', 'Herzog', '741qsanford@example.net', 'UNC-CBA', '09716220523', 'Bachelor of Science in Tourism Management', '5', 'defaultAvatar.jpg', 'active', '$2y$10$9AcTubHEUEIFm0g6CZtKs.Hk5DJUcsAHnYn/zYnwclALA5VbGn6i2', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('19-16351', 'Watson', 'Gerhold', 'Muller', '912tryan@example.net', 'UNC-CJE', '09114788086', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$q/woxEMeJKRztNFQIN3nFOjMITXM9A6xsEoah7f1JGdkvZii7pdNG', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('19-24702', 'Mariel', 'A', 'Gallaza', 'marielgallaza8@gmail.com', 'UNC-CAS', '09486330988', 'Bachelor of Arts in Psychology', '3rd year', 'defaultAvatar.jpg', 'active', '$2y$10$W9PIPONhqaN8lAl.tOtPW..Hrw5EPHThiLASHZsYKjElQJNp2Nmgm', NULL, '2022-04-17 05:12:40', '2022-04-17 05:12:40'),
('19-31262', 'Jude', 'Reynolds', 'Collins', '862jasen86@example.org', 'UNC-SHS', '09440857089', 'General Academic Strand', '1', 'defaultAvatar.jpg', 'active', '$2y$10$B7bLjupmZXo.o31srMxrDuPgAWzIL4ZF36YhgYJANByk1NFWO22q.', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('19-45900', 'Florine', 'Kozey', 'Cassin', '669goldner.tyler@example.com', 'UNC-GS', '09747249175', 'Master of Arts in Filipino Major in Language and Literature', '5', 'defaultAvatar.jpg', 'active', '$2y$10$ySpNVPyi1VPOfqlwIwfgJ.QHetiygbU9QfNWLCX1mqQIM47ZJaDyC', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('19-46288', 'Milford', 'Deckow', 'Kerluke', '285hudson.gail@example.net', 'UNC-CCS', '09919578467', 'Associate in Computer Technology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$jYgjrbShxMS5P56s49v.ZOc5n7Xxcib8QF1382/g1zkmid/Vk4a/O', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('19-50515', 'Moises', 'Lueilwitz', 'McKenzie', '615jbergnaum@example.com', 'UNC-CEA', '09878916450', 'Bachelor of Science in Architecture', '2', 'defaultAvatar.jpg', 'active', '$2y$10$.GkybP4Msj2BD5pjqSpCT.j48Ekv15spoAOK3KrZlsSW3o.ETsBla', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('19-50532', 'Brandyn', 'Streich', 'Champlin', '277nikita28@example.com', 'UNC-CEA', '09778696405', 'Bachelor of Science in Computer Engineering', '2', 'defaultAvatar.jpg', 'active', '$2y$10$uqmSMdyQPNaKaeqJSSF/v.zqMHqLtjj/dsw/DfKOINrlAoMQzgYUC', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('19-56047', 'Rosalia', 'Moore', 'Turner', '037joanie86@example.net', 'UNC-ELEM', '09233003221', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$6cpRwthDYli9aE1IuidOGu4TN2h0C6Eqcf9PAwe8zTdLqFEaUFOEy', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('19-66059', 'Addison', 'Purdy', 'Leffler', '037cwillms@example.com', 'UNC-SHS', '09099146577', 'General Academic Strand', '4', 'defaultAvatar.jpg', 'active', '$2y$10$486JxHYTTM0UAYKXWYmWUeyg.U3PVsgabyEcZgbzyB0r.pV7AavWG', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('19-68469', 'Grace', 'Price', 'Hudson', '911iframi@example.com', 'UNC-CCS', '09743349947', 'Bachelor of Science in Information Technology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$ANWeIjqcyR8YNO.h.jj7xOWTw45xnux8SkqZxB.A7CcWu8npS5.7y', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('19-83325', 'Flavie', 'Weber', 'Gleichner', '745ebert.francisca@example.org', 'UNC-CAS', '09956249137', 'Bachelor of Arts in Political Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$ernIs6l7SAWkCBWzgmU/xeXkxj9saOI8DyRh5jzAZ4hYEJgNJgvtu', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('20-0503', 'Janice', 'Llanera', 'Linguete', 'sample@internet.com', 'UNC-CCS', '01849823523', 'Bachelor of Science in Information Technology', '2nd year', 'aK6baN7DbIkfs7UGXESeasGH3jRgx1l8c8bJUdrh.jpg', 'active', '$2y$10$JV7Kw5g0JL3hC7qYGv507eBLQ2zJ9lxq3Mb1p1sneUb2AuseHZXPW', NULL, '2022-03-23 07:36:53', '2022-03-23 07:39:19'),
('20-06509', 'Onie', 'Dietrich', 'Pfannerstill', '212bode.sarai@example.com', 'UNC-ELEM', '09936126430', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$ifjvDNQ6anawRqKvpz5pyuFSzJaQ7VmAmufcD4.zUttR7iWLgb/ve', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('20-11776', 'Mariela', 'Parisian', 'Terry', '387stamm.abbie@example.net', 'UNC-GS', '09153617926', 'Master in Library and Information Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$kB1vs2arrgi9UAllHKwFt..aufvuwblU6bql8U7D0WtKu9rLsH9OK', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('20-40797', 'Merl', 'Schoen', 'Kautzer', '201sebastian55@example.com', 'UNC-CBA', '09929826421', 'Bachelor of Science in Accountacy', '5', 'defaultAvatar.jpg', 'active', '$2y$10$UPQKGJKT.yfVh2w1N4iYsexfNol99Qw3B2DkIvoz5jIFQTXFr6n.6', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('20-63549', 'Elmira', 'Dickinson', 'Kertzmann', '204gerry.rau@example.com', 'UNC-LAW', '09357810718', 'Juris Doctor', '4', 'defaultAvatar.jpg', 'active', '$2y$10$2OkhyN5OB/NZwxV.5EP2MuDVXLez/Sh4ZVkbqxxBlwNuyqs9bEaj2', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('20-65855', 'Fae', 'Collins', 'Lemke', '652williamson.alverta@example.org', 'UNC-LAW', '09145268139', 'Juris Doctor', '3', 'defaultAvatar.jpg', 'active', '$2y$10$XTToV3EMJ06Z7jiM0qHncuojvhRtirVGUm.kFFYH0218GwgsUPJDm', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('20-68013', 'Domenick', 'Gulgowski', 'Hamill', '251karli.koelpin@example.org', 'UNC-CJE', '09090880441', 'Bachelor of Science in Criminology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$pRA24j/K9d.nvW6J7ySjSeh7DsRXaTKYff82IEnY.T7G.uZXr1wB.', NULL, '2022-04-25 23:00:20', '2022-04-25 23:00:20'),
('20-81704', 'Emelia', 'Hammes', 'Gibson', '429chloe.russel@example.net', 'UNC-CAS', '09490357637', 'Bachelor of Arts in Psychology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$50Yr9UJ/LH1Z5utHujQlluRwYBS8broK3yMNXmoTOXhcoGhh4T3.O', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('20-95266', 'Orpha', 'Shields', 'Wilkinson', '715maureen81@example.org', 'UNC-ELEM', '09601655075', 'Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$50PEJK74IEMIOF/Bkyqkaugf41/0KfbINkFLIwkfHgTLq.TW0THdO', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('21-30806', 'Elisabeth', 'Schuster', 'Grant', '384myriam57@example.org', 'UNC-CAS', '09587354204', 'Bachelor of Arts in Psychology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$8PK13nRbmEv2cEX6r33qpuAyVhzLSDhOzgq9NP8NOYRm9jtYGELlO', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('21-42680', 'Danial', 'Cartwright', 'Considine', '536cronin.bill@example.org', 'UNC-CJE', '09387477003', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$gYDpnpcLJwPFd16yVFyEIuGhka1oY52gfVRW1J.UjX7D0imvstFrS', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('21-71773', 'Trace', 'Okuneva', 'Treutel', '875fprohaska@example.com', 'UNC-CAS', '09396361472', 'Bachelor of Arts in Political Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$YG2aOEcZo2MJX.lVxEpHQeFs55ta9jnm7/5Zcn8iavuT23jfQspyO', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('21-91528', 'Lera', 'Ryan', 'Kling', '728greenfelder.makayla@example.net', 'UNC-JHS', '09460281385', 'Junior High School Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$dcWZC/y9pfhni46TwgWtruAR39xkQGNnNh4toHU233fnHRAAX5/VW', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('22-05201', 'Jaycee', 'Gulgowski', 'Langosh', '601egutkowski@example.org', 'UNC-SHS', '09297232806', 'General Academic Strand', '3', 'defaultAvatar.jpg', 'active', '$2y$10$69bnk0mQKjYZS0CjUum3/.B2dA6IMJdWSgPS5YRRNq.DZ0/8R399S', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42');
INSERT INTO `students` (`student_no`, `firstname`, `middlename`, `lastname`, `email`, `departmentCode`, `phone`, `course`, `year`, `avatar`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('22-09315', 'Vincenzo', 'Bartell', 'Orn', '631urutherford@example.net', 'UNC-JHS', '09386986420', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$M5welPnFxec6HAgIY3cMseZ1hKqdn5R/x5YlCBtL.MSADQsTqxBju', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('22-32051', 'Solon', 'Dickinson', 'Paucek', '861roma.erdman@example.net', 'UNC-LAW', '09638296238', 'Master of Laws', '5', 'defaultAvatar.jpg', 'active', '$2y$10$FnSk7QlkY6IyivGcfiayCudpXSZp8d.emUa.dZ88k6dP1YwcOFXse', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('22-40193', 'Willa', 'Swaniawski', 'Macejkovic', '294tommie.haag@example.net', 'UNC-CN', '09052202263', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$4MzOn9k/Wclbb0SbSE.T3ObMsx22jxyLp88LCx84FJP9TFjVhXg.u', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('22-61666', 'Hermann', 'Langosh', 'Walter', '708hessel.hadley@example.net', 'UNC-CJE', '09692877753', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$fLKhndzs8IswYBt7tr9EEuVxmGk5ru4w2Eg/HgYpiliOk9nuFUYJ2', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('22-64546', 'Elza', 'Morar', 'Heaney', '645jazlyn.parker@example.org', 'UNC-CE', '09005883544', 'Bachelor in Physical Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$RgqeHfRJ3bO.iz5Rqu4Vnum7WmnhB3V3NMqYPg0FCEtaPMyB2jyfu', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('23-01801', 'Willard', 'O\'Keefe', 'Corkery', '583christelle.rogahn@example.com', 'UNC-CN', '09532029455', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$t3xcOIhPlJWhe1U9sQImKu6pqI0VoEQjV5NKb9w9jKAOyKXyFVVMK', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('23-09426', 'Maxwell', 'Reilly', 'Schamberger', '275dianna.haag@example.org', 'UNC-CBA', '09353735447', 'Bachelor of Science in Tourism Management', '5', 'defaultAvatar.jpg', 'active', '$2y$10$6hvBy76QdZVsg.YBPWvWs.UOvSr04Bb5IqlFMFvprtgcVNWvyyLFe', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('23-51255', 'Jon', 'Krajcik', 'Shanahan', '268jamel.walker@example.org', 'UNC-ELEM', '09775741154', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$3QABttXnUnnrX7XYYPUbB.6BwRIkWLH72lM9/416zYFlCSa6hzzVS', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('24-01047', 'Prince', 'Hettinger', 'Douglas', '553walton30@example.net', 'UNC-SHS', '09767299252', 'Science, Technology, Engineering and Mathematics', '4', 'defaultAvatar.jpg', 'active', '$2y$10$uLHn3HCYa6ip.wWGUR/czuOCs8D4phKmJTpdd4W8RHBceWJwJJRGa', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('24-44503', 'Cyrus', 'Friesen', 'Schaefer', '589matilda49@example.net', 'UNC-SHS', '09569575173', 'Technical, Vocational and Livelihood', '1', 'defaultAvatar.jpg', 'active', '$2y$10$IyRKyGPEdUF11J2htk9KdOAt2dP1ZRXbwOdL/GeA1S1mSVYga4Ur2', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('24-60835', 'Summer', 'Quitzon', 'Ebert', '308croob@example.net', 'UNC-JHS', '09458257753', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$jNvlvBLIyB323acOkPr11.HMKGONIIfPOwErGJBgz0lsVPnISUyCG', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('24-64715', 'Ellis', 'Doyle', 'Crooks', '904khaley@example.com', 'UNC-JHS', '09643816712', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$9fux4qyAlyoWQpC9yyP8aueBRF3u3Yx/GFNQKDKdzZn0/MR/d/SKK', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('25-15875', 'Alia', 'Kihn', 'Towne', '374cruickshank.sandrine@example.org', 'UNC-GS', '09749392983', 'Master of Arts in Teaching Mathematics', '4', 'defaultAvatar.jpg', 'active', '$2y$10$VYqlZc3Q/MvMboXSpJBn/Oz5/5KwnlZH53f5OMK9BMZMjULJhuJii', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('25-21806', 'Pete', 'Halvorson', 'Vandervort', '064casimer.jenkins@example.org', 'UNC-CJE', '09357081867', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$kScPRtRIaqNfhDNH7AegyO4HoEhH3qIkTyQ0.RFv34EExLxFyWZO2', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('25-33311', 'Josephine', 'Cruickshank', 'Effertz', '425ryan.hilbert@example.net', 'UNC-CBA', '09871829142', 'Bachelor of Science in Tourism Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$c2ztl97ngxV3r2cUi0uGUeNYVOwaKM4uB8OfIngvAw9ppSyhfcIc.', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('25-39969', 'Elisabeth', 'Pacocha', 'Bednar', '422mwilliamson@example.net', 'UNC-CJE', '09689830301', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$FVqMYqdXsXJDDpW8iMgZceQzwhCP4zb8xiFl4UN394emGEmk/byXm', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('25-42324', 'Adah', 'Kirlin', 'Pfeffer', '700tyreek.kuhlman@example.com', 'UNC-SHS', '09091274706', 'Accountancy, Business and Management', '1', 'defaultAvatar.jpg', 'active', '$2y$10$X0MOUPjYIwSJe9m6vBIUDOUDQ1eQ4qJNcNgOD6otftmO.JLQ0pHda', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('25-73986', 'Art', 'Herman', 'Little', '746ugleason@example.net', 'UNC-CE', '09858830680', 'Bachelor in Secondary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$5KTKLgpiAGvGc7Oc0GgFJOFH3haBQF/n1eK6n9FLRDVN2p.mBrMva', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('25-74397', 'Grover', 'Gislason', 'Runolfsdottir', '452ibartell@example.org', 'UNC-CE', '09220566328', 'Bachelor in Secondary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$r.rMRa4IV0ix81wsKtzGWe7jGrqz0Va9AMOlcZjhPNK6rjiCsBWwK', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('25-81601', 'Jess', 'Runolfsdottir', 'Flatley', '473mckayla.gusikowski@example.com', 'UNC-CE', '09255474470', 'Bachelor in Secondary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$4TqSmC30HFJpJagEdYNPjeYQXq69Vi.htWVFAsie3E8mXgLvC8LMC', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('25-83168', 'Ernestine', 'Haley', 'Crooks', '497lterry@example.com', 'UNC-CJE', '09062293522', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$jtI61Kv.DqUMUMQ6tp5aCu1YaL8cIJ8bHFWO4yIGmu0pviTWMsy42', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('26-08139', 'Francisca', 'Gibson', 'Pollich', '889larkin.clifton@example.com', 'UNC-CEA', '09740934370', 'Bachelor of Science in Architecture', '5', 'defaultAvatar.jpg', 'active', '$2y$10$RRRankJ/3YzwG15H8IAtZOIrmCrGh7LfGImGvyDrrf2ib8vz8dE0q', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('26-21666', 'Melany', 'Mertz', 'Lockman', '170becker.warren@example.org', 'UNC-SHS', '09130847682', 'Accountancy, Business and Management', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Km/h8N4O74x.Gayu0shB3eTJs0gVaSeCrapQHkElAGDC3l5D81.Ia', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('26-33291', 'Mose', 'Simonis', 'Shanahan', '490hammes.marques@example.com', 'UNC-CN', '09821023189', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$5VwhKFGXY3VZvpFqD1UyI.CyUMP0BRiwm3lOSbxkESukFu6kLCLl.', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('26-56614', 'Nathen', 'Spencer', 'Fahey', '451laury.zboncak@example.net', 'UNC-CE', '09989124839', 'Bachelor of Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$Fi0exTjY/S2wMIgSuopH6.iuEPM7sj6LJcz3jVFSNYt4RAWxXWYBm', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('26-82418', 'Santos', 'Beatty', 'Bradtke', '618pconroy@example.com', 'UNC-CAS', '09418047120', 'Bachelor of Arts in Political Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$xm/Urgb/SgbMzhKl8P3Et.GjDPFerCpFR0QJvkoy4jvPOXAKQevKO', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('26-91179', 'Rudolph', 'Schaefer', 'Adams', '880opfannerstill@example.org', 'UNC-JHS', '09471495670', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$2ZMN8bk9BhEkNijvJsmRzuo8wTCvp2tjsOY7/iBiOw6Q6q.Pqx3Vy', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('27-08664', 'Felix', 'Weber', 'Gerlach', '255estella.cormier@example.com', 'UNC-CBA', '09668728010', 'Bachelor of Science in Entrepreneurship', '1', 'defaultAvatar.jpg', 'active', '$2y$10$wh5bTo3uLGTXoxVuSHD45eKKrwbqyT9VDhK2AV6ThesAHj0QrIeCW', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('27-12225', 'Cornell', 'Collier', 'Veum', '588nitzsche.xander@example.org', 'UNC-CE', '09460576916', 'Bachelor of Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$QEudsHqcD2c24w0ABk7CReF2p55zHEwUlhlHn/qvmGZUx/M0yoZom', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('27-13054', 'Devyn', 'Rutherford', 'Rogahn', '956taryn51@example.org', 'UNC-CBA', '09689497030', 'Bachelor of Science in Tourism Management', '1', 'defaultAvatar.jpg', 'active', '$2y$10$iayhfXuYRwgzB4bFocU9quwVDM0uygPQuPVp2YoolkHwH2s3JKB4C', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('27-30252', 'Annie', 'Franecki', 'Deckow', '234myrna.kohler@example.org', 'UNC-CJE', '09088828059', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$rJjcBr5zF8RJY.Y8ZDnL..AvGLWqe7ElK5R5UHLJVHMZ4dn1VV8ea', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('27-38943', 'Marilou', 'Botsford', 'Cummings', '983sanford78@example.org', 'UNC-CAS', '09042398164', 'Bachelor of Science in Biology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$PxtC2D/tvFjXl5ME.jCYQeZHoO.vo47VVzhkE1o1iUKjPyhNlE9Zm', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('27-44547', 'Johan', 'Schultz', 'Block', '944jaqueline.hill@example.org', 'UNC-ELEM', '09380558913', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$GEjOFcCSUpMpKqewkZBCMO3D0AA3boPiz50ctCSCuWnaVa9VU244q', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('27-53211', 'Magnolia', 'Runte', 'Buckridge', '539cmacejkovic@example.net', 'UNC-CEA', '09579268107', 'Bachelor of Science in Electrical Engineering', '5', 'defaultAvatar.jpg', 'active', '$2y$10$cpFundZGImGMsQAokz97i.Tlom4jUgQQXg/i8OQR6dCZeZV624TJO', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('27-70127', 'Winifred', 'Wuckert', 'Purdy', '274alf.ernser@example.net', 'UNC-CBA', '09401324558', 'Bachelor of Science in Business Administration', '2', 'defaultAvatar.jpg', 'active', '$2y$10$hdtIRVAyRpc/dDMwG5ZwpecTnI5MZg2eCpi0PW56mwnivfnXxRSS.', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('28-11210', 'Mauricio', 'Heathcote', 'Wehner', '917gweimann@example.org', 'UNC-LAW', '09893764288', 'Juris Doctor', '1', 'defaultAvatar.jpg', 'active', '$2y$10$.rnfRvkpGzHaTG6NWi0I5OKJPN48sPRw2/Ijzo0JEGVw9POqvDaYm', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('28-14347', 'Ally', 'Weimann', 'Corkery', '626anais.volkman@example.com', 'UNC-SHS', '09001593077', 'Technical, Vocational and Livelihood', '3', 'defaultAvatar.jpg', 'active', '$2y$10$M7z8TUEK4KdKqaMV5I8PV.6T1WT5JNjxllNMUrJV/Uey4YEU5pvYm', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('28-40510', 'Macie', 'Green', 'Kozey', '197donny.hills@example.net', 'UNC-LAW', '09793944005', 'Master of Laws', '1', 'defaultAvatar.jpg', 'active', '$2y$10$yBZDl2XuE.rOyaoBKg7qieDvGs.iMEl7Z8IpVBP/zRqi47LtdGsYy', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('28-52320', 'Kristoffer', 'Rempel', 'Medhurst', '909gerard.larkin@example.com', 'UNC-CN', '09620736682', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$Xohn7aoV25u47nQxTDJ2uO/x.pRVB0M4jsjdhwBJfFP9cG1nQUsDe', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('28-62653', 'Lew', 'Kling', 'Connelly', '474stanton.rosemary@example.net', 'UNC-CAS', '09048063690', 'Bachelor of Science in Environmental Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$6MAq8XpsJaxaf583Tv5k9OY.1OQ8S.ZKgM16o11Vl0HX/AWxn6SCO', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('28-79072', 'Grace', 'Williamson', 'Reilly', '933isai56@example.net', 'UNC-CEA', '09284213623', 'Bachelor of Science in Computer Engineering', '3', 'defaultAvatar.jpg', 'active', '$2y$10$D1/6GMeuxD8l2I/D/7I5ReHwJrs4FLtffMMG.0LOdGqzZVrpSP0YO', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('29-01649', 'Liam', 'Schowalter', 'Ebert', '564lillie29@example.com', 'UNC-ELEM', '09842318828', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$uoMYoTs4HPlBUWXSXsaZhuFGQDM3JfXyRzaMvx92A16l5hIcCmKJu', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('29-03892', 'Arjun', 'Conn', 'Zieme', '642thora.abernathy@example.org', 'UNC-ELEM', '09467048814', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$GhtTPsDCKeb8SnSPlGNvMucPQrVd6kdKLy840FcAGbicdBgPvD2kG', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('29-23333', 'Alana', 'McKenzie', 'Simonis', '002wterry@example.com', 'UNC-JHS', '09590713217', 'Junior High School Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$bfVdruhsOFEuoYTQRKVZMOUefQHMtip8H7qLlTXe7NAEOQgm9qSYG', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('29-30515', 'Charlie', 'Schiller', 'Hahn', '197renner.hannah@example.net', 'UNC-SHS', '09641648920', 'Technical, Vocational and Livelihood', '2', 'defaultAvatar.jpg', 'active', '$2y$10$02SInb5SuHCy3mFPbmI5nO56Vc/T/uA34wDcEV8QeiIfGxU81X1pW', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('29-52275', 'Raphael', 'McKenzie', 'Mante', '526thad.lindgren@example.com', 'UNC-CCS', '09793425639', 'Bachelor of Library in Information Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$bllcxbhU3pQy5UsZHzLKk./9EX79s7tdPSQ1jp5xIwB7Auc.M64cm', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('29-52886', 'Kaylah', 'Macejkovic', 'Hansen', '603robel.marguerite@example.org', 'UNC-CCS', '09753018733', 'Bachelor of Science in Information Technology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$BagvBnDNYfK4vp6e2A2uj.TLO56zcUB7ns1AX3ACy00hHf.DBPZ1O', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('29-60882', 'Gustave', 'Raynor', 'Schumm', '902marques.kerluke@example.org', 'UNC-ELEM', '09191002843', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$I0bU23.h0Vhw2GAgCwi7a.pgMoUFRFRq8jRkvIgU1FR1B02sl1E3u', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('29-63095', 'Marlee', 'Hahn', 'Feest', '564mkertzmann@example.org', 'UNC-CBA', '09370610729', 'Bachelor of Science in Tourism Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$TnHTh1xqTrMQSaej8CwuEuGV3/YXLDNyni7XasQNQy/zdzsmjraJe', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('29-63328', 'Vergie', 'Schaden', 'Bartoletti', '696daniela.morar@example.net', 'UNC-SHS', '09704405417', 'Science, Technology, Engineering and Mathematics', '4', 'defaultAvatar.jpg', 'active', '$2y$10$I1vp0ynBuM/dXDM9hYzEVubcDkQJrW2suE78w5gom8PqCuxo//v9i', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('29-82826', 'Melody', 'Schumm', 'Schimmel', '744tevin15@example.net', 'UNC-JHS', '09929693884', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$llITQk1Wf/iJD5lbTUWNMuC.eFXylNAAtTXfuNq6Cvj24OqTHYrT.', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('29-86463', 'Trenton', 'Kunde', 'Koch', '690collins.tristian@example.com', 'UNC-LAW', '09762230341', 'Master of Laws', '3', 'defaultAvatar.jpg', 'active', '$2y$10$J/8eWmN3geGXWfBYlrh2mu1Z8HpIrAVG34S2V7ZT6Ah26DfyE2sLG', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('30-01878', 'Sage', 'Leannon', 'Gerlach', '348xritchie@example.net', 'UNC-LAW', '09222788486', 'Refresher Course', '5', 'defaultAvatar.jpg', 'active', '$2y$10$Px.BTp/WLJZj7upDcVBrT.eDGrZ64InmsAlfkrCWqoUnPbKco6.0e', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('30-02161', 'Seamus', 'Nader', 'Cormier', '593omarvin@example.com', 'UNC-ELEM', '09727340544', 'Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$t6hbd6Ht8qYaboi9lWcg/.FfsG8k5ShlVbwvTit6Xjrh23QrBvjdq', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('30-25198', 'Cyrus', 'Kohler', 'Cormier', '448macey56@example.com', 'UNC-CEA', '09981290845', 'Bachelor of Science in Computer Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$7Br3g9yqBlvW4YIgzMu.0uCSsuumSBjPcoDj4aAL6cZiE3G427E8i', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('30-45731', 'Oral', 'Romaguera', 'Powlowski', '058mavis26@example.com', 'UNC-CN', '09316978027', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$LVYlE3zNU8xaQhdohmPOHeDqFDWPJy5gxGxEtHTEkp5qq3Ha7MWdS', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('30-68961', 'Hannah', 'Pfeffer', 'Jacobson', '776bailey.sister@example.org', 'UNC-CEA', '09698499454', 'Bachelor of Science in Civil Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$4b1pWFu9CcO04pfED1SO6.CACE7J78kE3Y6Jmvu1Jx6MNfPRHUIVK', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('30-93141', 'Anastasia', 'Crooks', 'Jacobi', '332cooper25@example.net', 'UNC-CAS', '09944981706', 'Bachelor of Arts in Political Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Q68J2GHAn5kjBap8mQsXFeC63iLUW.GugEc63AsDhEZcyiHlNhLg6', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('31-11819', 'Marisol', 'Orn', 'Dietrich', '916emard.hattie@example.org', 'UNC-JHS', '09205783464', 'Junior High School Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$UjYSvWZKJkFZ5zSVL4x5LO/ZeIR.AILlGEoQgjmO.6rZTXTtNKb5q', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('31-18982', 'Marlen', 'Mraz', 'Blanda', '043borer.edd@example.org', 'UNC-ELEM', '09622110478', 'Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$k8JBFWGoJmxZEfOk058ekez/pYVcuS9Ld4rV8cOBsHV4CTkHwQkfW', NULL, '2022-03-24 16:26:08', '2022-03-24 16:26:08'),
('31-21876', 'Quentin', 'Legros', 'Hyatt', '474nicolas.guy@example.org', 'UNC-CE', '09205760902', 'Bachelor of Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$AFYdw9NDgVnb7nt9CYdw2.x5nLz4keWphfIDjnEWuLbI.Pag9wefq', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('31-51891', 'Dominic', 'Huel', 'D\'Amore', '249fwilkinson@example.org', 'UNC-CN', '09703729453', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$ygHPqQNYVcTh2tFDdm9SXu1t6iYbGbKuTxnzkdBs/7CbtXXeXiZa.', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('31-55676', 'Monserrate', 'Barrows', 'Strosin', '736berge.payton@example.org', 'UNC-SHS', '09300608651', 'Accountancy, Business and Management', '5', 'defaultAvatar.jpg', 'active', '$2y$10$y6RGbnVjZlM/t.AeFgkcNOc6NIU6uQtzOEWI1C1.KK1GymnjSiDCO', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('31-66126', 'Newell', 'Leuschke', 'Beer', '312urodriguez@example.com', 'UNC-CJE', '09178461914', 'Bachelor of Science in Criminology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$4R0SY72XdocYh/pu8Y8j7u2Nv8Jn8LkabWnq6bOHDM4hIW5eb8W32', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('32-01546', 'Albert', 'Von', 'Brekke', '773ratke.dejon@example.com', 'UNC-SHS', '09757206949', 'Science, Technology, Engineering and Mathematics', '1', 'defaultAvatar.jpg', 'active', '$2y$10$bpVG5iZU1r9EnIxtbrJ74O1H6mz9JnNqH58coZqJnL1GFV50iB86W', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('32-05967', 'Margarett', 'Carter', 'Buckridge', '937vito.mitchell@example.org', 'UNC-CE', '09156129353', 'Bachelor of Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$PFIBaBtmj.EYMykoBW1bq.5.eX4XOQZ9uSlFXkUSW64rLHht5w56W', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('32-52039', 'Cruz', 'Smitham', 'Jaskolski', '927baron.klein@example.net', 'UNC-CEA', '09703389810', 'Bachelor of Science in Mechanical Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Q1hp9CpCc7O/m0RZeuuN0.Ae8kHsdzKg9sUC3lJUS8c1AkrYVifui', NULL, '2022-03-24 16:26:08', '2022-03-24 16:26:08'),
('32-85185', 'Whitney', 'Dibbert', 'Feeney', '680gibson.rene@example.net', 'UNC-ELEM', '09599124393', 'Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$wIbDdsfcLXMfbME834b.AeLPh/ABKN7ePUGhxK9kxKyTNvT5fxZSC', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('32-90554', 'Marian', 'Medhurst', 'Blick', '194erna.goldner@example.org', 'UNC-CCS', '09530941141', 'Bachelor of Science in Information Technology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$tXoseOTHQgKYUYb0X6aUCeL3maSmVyHt9n05V1x08GenX.aP8yz46', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('33-40911', 'Esperanza', 'Raynor', 'McKenzie', '137leuschke.devon@example.net', 'UNC-CN', '09213888566', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$k/YFRewNt1lLTEylwgXiKurj7Fa6cTbcsjj3yyRf1o/9ahHJuPit2', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('33-41910', 'Cecelia', 'Becker', 'Wilkinson', '247malinda.volkman@example.com', 'UNC-GS', '09662787262', 'Advanced Language Certificate', '2', 'defaultAvatar.jpg', 'active', '$2y$10$1s5vJw96gjfpuul.FxWzjuqu2D3lgQeGnmCOR1jjsW1cRto5Dbgsm', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('33-72685', 'Abe', 'Jaskolski', 'Rempel', '822kautzer.wilfredo@example.org', 'UNC-LAW', '09279931830', 'Refresher Course', '1', 'defaultAvatar.jpg', 'active', '$2y$10$tM3dEzHJmuzLCOTCr5Bpue39M8a2fnk8iEhJrOFsyvaWox5GpmU1y', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('33-81580', 'D\'angelo', 'Rath', 'Moen', '689lpacocha@example.org', 'UNC-CE', '09851175387', 'Bachelor in Secondary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$Jt9eYTcqB7y1bdqqGB1G4uOxmz46SdO5fSN.nxMO1e1KKmegT1t3S', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('33-82698', 'Asia', 'Beahan', 'Eichmann', '640zfunk@example.com', 'UNC-JHS', '09867771384', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$Qb2.BiLgqXluZ4QHIV/kUerAsxDGAqWgFatsJoHATDn6jP.VeHxlW', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('33-89092', 'Darlene', 'Lueilwitz', 'Funk', '324carmela91@example.com', 'UNC-CAS', '09642949513', 'Bachelor of Arts in Political Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$hBJ99ZOfVqW3ui3bpe/dxe/N4P.J9ASpbv3XZDqD/MgvZd2HoY9sm', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('34-20653', 'Fern', 'Skiles', 'Lakin', '660lyla.auer@example.org', 'UNC-LAW', '09335928912', 'Refresher Course', '5', 'defaultAvatar.jpg', 'active', '$2y$10$4gwzKP7I/wVljSXhA9NcSuySukFaUkWjLVjOQE/PRvW1FOZwsIsG2', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('34-33239', 'Frances', 'Bartoletti', 'Shields', '544qsauer@example.net', 'UNC-CJE', '09703752208', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$T0MEkyW/VfAlgWWdRZdE4O7HT3P/9nyKb8XPNVsKpSM2L8yXc52HO', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('34-37072', 'Zula', 'Roob', 'Collier', '682bettie43@example.com', 'UNC-CBA', '09539214611', 'Bachelor of Science in Tourism Management', '2', 'defaultAvatar.jpg', 'active', '$2y$10$hCX6/NDPQ6vv4Qx9qM4.EeRTE9m0SUL7a/os7QXH7.MprqiqQOEaC', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('34-52175', 'Filiberto', 'Nitzsche', 'Gutkowski', '044wilma02@example.org', 'UNC-CEA', '09489375871', 'Bachelor of Science in Mechanical Engineering', '2', 'defaultAvatar.jpg', 'active', '$2y$10$20KBQPafNRtR0JrdHcGQh.delw7GOdPDHuWk1RC0kcpQutbK8WA.K', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('34-83351', 'Camila', 'Kuphal', 'Turner', '631alycia.mitchell@example.net', 'UNC-JHS', '09442896384', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$.B2aOPNlpHjQlICEFCuXe.4wBJTw7YVhYcrop2VruO2fYLUWGTzTG', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('35-10019', 'Jackson', 'Swift', 'Jacobi', '526jmcglynn@example.net', 'UNC-LAW', '09266979392', 'Juris Doctor', '3', 'defaultAvatar.jpg', 'active', '$2y$10$tBr0fCTp1fU23gzcJ7v0gOFoZ2Yfm/AGRJCqBFZ/82H6DXhRaIh2m', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('35-22944', 'Santina', 'Schmitt', 'Luettgen', '564malcolm38@example.org', 'UNC-JHS', '09466302217', 'Junior High School Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$mQ3g06muYS1cJrgBK.4Uk.aqAHBwK.Dtdy6UnXRFYKK4iOpyFO2FK', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('35-37649', 'Citlalli', 'Schumm', 'Konopelski', '891dgoyette@example.net', 'UNC-CCS', '09622179193', 'Bachelor of Science in Information Technology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$BIidUSuyENZqBmU.9k6mmO19I/nPnTCcSaYlPweoJR7ANSK.bzIPm', NULL, '2022-03-24 02:33:58', '2022-03-24 02:33:58'),
('35-48999', 'Lauretta', 'Hand', 'Streich', '974xmcglynn@example.com', 'UNC-CE', '09244990528', 'Bachelor in Secondary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$hA0TQw6uAfCVYkTmCibqA.ih9MhAHT7cQlKMjTXoox3KK1sWskpWC', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('35-51224', 'Adalberto', 'Jerde', 'Koss', '264johnson.hettinger@example.net', 'UNC-CE', '09083320975', 'Bachelor in Secondary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$IhJiryehx3jpzRRxl83VAObT.A8L2zUX.qHbvYTpYUthhXkxkJxLO', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('35-51266', 'Gay', 'Kessler', 'Jast', '917ryley76@example.org', 'UNC-SHS', '09414805604', 'General Academic Strand', '1', 'defaultAvatar.jpg', 'active', '$2y$10$yb7wG5WJ1aWnHhDAZ9la9OZssNhmohbhr.kO9wgpqDDPC21CmiH/W', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('35-55742', 'Billy', 'Greenfelder', 'Feeney', '664predovic.agustin@example.net', 'UNC-ELEM', '09153554628', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$sYLW2SfnrKc2eF3WFF8PF.5vyrHEnrXrNYdALi/m6AvX6BfBNVU2G', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('35-66274', 'Art', 'Little', 'Aufderhar', '411gfeest@example.com', 'UNC-CBA', '09980283208', 'Bachelor of Science in Accountacy', '3', 'defaultAvatar.jpg', 'active', '$2y$10$oTrvamtBW.87qS66avzl3.A2fJ.j5/UZY2hi8EjCnkn.ag4Xn3.R2', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('35-75264', 'Reyes', 'Rogahn', 'Johnson', '847xcollier@example.com', 'UNC-ELEM', '09137324031', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$CKNUOaVLku3CCtsNfYgSKebKDkM6c.k6.GiNVxUCEbFdZ7pD2teZ6', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('35-92558', 'Orpha', 'Corwin', 'Johnston', '625homenick.viviane@example.org', 'UNC-CCS', '09082391322', 'Bachelor of Library in Information Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$FA5sTy0Md9j8e17ZbHx2fe2IUWqT4Oc4qG.s7JXqcKRy596ZNO3mW', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('36-04534', 'Lonie', 'Fritsch', 'Jerde', '052uvonrueden@example.org', 'UNC-CBA', '09603483331', 'Bachelor of Science in Accounting Information System', '4', 'defaultAvatar.jpg', 'active', '$2y$10$LjMklJUwL20L0ruI2S6kJOLSnLqlf6FOdRvgGzxX/BVfeiyp00bua', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('36-20887', 'Glenda', 'Paucek', 'Windler', '586yheidenreich@example.net', 'UNC-SHS', '09832570194', 'Technical, Vocational and Livelihood', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Nh8/itV0CXfxQgn5WjufJ.I.tidcFCSiLCQozDjJ8JbEOlr/eKjH.', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('37-85662', 'Cecile', 'Graham', 'Maggio', '077talia32@example.com', 'UNC-CAS', '09012889124', 'Bachelor of Arts in Political Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$45YUQW7D998p.8FWWIPaLe4tbFgtrCSsc89ZGDp2QX1ay8cshHPlu', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('37-87019', 'Lisette', 'Johnson', 'Walter', '797qcummings@example.com', 'UNC-CN', '09878008558', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$HU3GHrCWAS1SggsUWe1nv.yBrsHZni.CXOOyjMsrnAnMnHjIGV9QK', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('37-87197', 'Kayli', 'Lebsack', 'Cremin', '439kcummings@example.net', 'UNC-CEA', '09401099152', 'Bachelor of Science in Computer Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$K..yu3nAiyoGaavVStBpS.0FoxI0VNJPtbdFchfywc1PRX8v6KgDG', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('37-95641', 'Guido', 'Little', 'Schulist', '115jeanie28@example.net', 'UNC-CCS', '09598352158', 'Bachelor of Science in Computer Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$8xHhoC.sSZixzplWt0h.TOQq3SmAwl7LKhUHnaItYn29Ocsvanb3S', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('38-02917', 'Luisa', 'Schaefer', 'Crist', '473adolfo63@example.net', 'UNC-CEA', '09898199565', 'Bachelor of Science in Mechanical Engineering', '3', 'defaultAvatar.jpg', 'active', '$2y$10$juMLzLBKikFAmbdd5oTbSOFpEO/cjhxOBORlxBKCw6uGgQx5DqJ86', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('38-24195', 'Hazel', 'Spinka', 'Nitzsche', '427clementina88@example.com', 'UNC-CN', '09216415322', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$rJez0StVKHhzeCRjAKp2L.dC5F9Pf9OAA7CgfGTROZog7iglciEVO', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('38-34116', 'Ellis', 'Sawayn', 'Lowe', '599ozella43@example.org', 'UNC-CEA', '09777935554', 'Bachelor of Science in Civil Engineering', '3', 'defaultAvatar.jpg', 'active', '$2y$10$gTSJ4/xcqGBz3z.0n33avOODt56gWs.lalP5USrjK6sFTviK8AKqW', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('38-43009', 'Aliza', 'Oberbrunner', 'Brekke', '568hermann.bud@example.org', 'UNC-CEA', '09050773690', 'Bachelor of Science in Computer Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$uOo0VgB1VXZlFhsGdjmCjelcRAKrY3BWSyUjW9mUGfMXlkcvKWRHK', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('38-44579', 'Camilla', 'Zieme', 'Beier', '099arne.mckenzie@example.com', 'UNC-GS', '09534766480', 'Group Resilience Certificate', '3', 'defaultAvatar.jpg', 'active', '$2y$10$TWruUXY4.MVhda/UJPr/qur4DxezRTYTgo8PNUkx35BVjZ4gz0Vl2', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('38-62631', 'Isaias', 'Blanda', 'Murphy', '860leif95@example.com', 'UNC-SHS', '09418061918', 'Science, Technology, Engineering and Mathematics', '5', 'defaultAvatar.jpg', 'active', '$2y$10$ZkVKJg.22wnLFI3wWKc7eOvgi5mR2eJs9KzKPUjWiICvnaxefMVUa', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('38-84768', 'Reymundo', 'McCullough', 'Veum', '691astrosin@example.com', 'UNC-JHS', '09201391390', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$oqbWM.2RnSl8XTz8K.KRWOJMu/rjGolOfsrNdxuEOAcYinLK5QbdS', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('38-98371', 'Rodger', 'Rodriguez', 'Spencer', '984nikita.johnston@example.org', 'UNC-CE', '09888304829', 'Bachelor of Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$8cYz9wuPF.sB6Q8vpS3Gle9D4yp5fJuount2ITGwAxMWC9AhirxcK', NULL, '2022-03-24 16:26:14', '2022-03-24 16:26:14'),
('38-99187', 'Hallie', 'Ratke', 'Harvey', '629rae.kirlin@example.net', 'UNC-CCS', '09220462081', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$Sjpxq2QMPoW.lbnYE/V6bOM6l3O5tdSkPKo2d9iP18Tbkol0Mwa3C', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('39-22470', 'Vivianne', 'Kozey', 'Bednar', '473rippin.lyla@example.org', 'UNC-LAW', '09166981857', 'Master of Laws', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Ejk9d1ty3bxXoDZNnfI5GuAtMeE7yBYKEfAdCWgGxlGEd3Y4nG2Xi', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('39-49872', 'Izabella', 'Jaskolski', 'Ullrich', '711xcrooks@example.org', 'UNC-CCS', '09880997686', 'Bachelor of Science in Computer Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$sGKZQtOSdUqeNp6/C1rU0eH.P4vvbxgLiolyGNHMA2cgnyO9GP/UW', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('39-54342', 'Nelle', 'Pfeffer', 'Schmidt', '333wilkinson.geo@example.net', 'UNC-CBA', '09716099133', 'Bachelor of Science in Tourism Management', '2', 'defaultAvatar.jpg', 'active', '$2y$10$OzRgebzVDVGR0hXuzzeQdeurv8W6U7wTFkiPpiA4RRL7q55uym6Gu', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('39-60708', 'Albina', 'Hegmann', 'Crooks', '174ettie.champlin@example.net', 'UNC-CBA', '09115509674', 'Bachelor of Science in Entrepreneurship', '2', 'defaultAvatar.jpg', 'active', '$2y$10$KFC8sIZzhadejxmn3cPcRucgRUSTGNGIdR0IgRnToa3L9SJqx5BGW', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('40-20083', 'Taylor', 'Prohaska', 'Hickle', '191zmcdermott@example.com', 'UNC-CN', '09670824426', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$ZxcvgP5tFO4mOaCXkcJR.OpzzZhi/q8gqDdlYZipoNuD0Nn8Wl2A6', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('40-22055', 'Ines', 'Walter', 'Littel', '070mcclure.nickolas@example.org', 'UNC-ELEM', '09111707470', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$3/bih6WmXGNFdKi6e.xDm.BD3mk7TDdJX46t2ctJtv1ZliosstBJa', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('40-28704', 'Berta', 'Turner', 'Gibson', '093gino12@example.net', 'UNC-CEA', '09692310517', 'Bachelor of Science in Architecture', '1', 'defaultAvatar.jpg', 'active', '$2y$10$PV9dz53xxVakcMRXA7Cm..1JeMcsz4Z0HILGZWF2sYn2nTgOYgq2y', NULL, '2022-03-24 02:33:58', '2022-03-24 02:33:58'),
('40-28875', 'Josue', 'VonRueden', 'Tremblay', '181eduardo.ondricka@example.org', 'UNC-CJE', '09713618982', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$k5NhYx6unQAci2AldOx.getTmB2PK.cf30QgVraWedv8Sc5ahuBNG', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('40-29619', 'Iva', 'Goodwin', 'Schamberger', '323vandervort.jacques@example.org', 'UNC-CAS', '09960927753', 'Bachelor of Arts in Political Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$NWlqqnL7pPX6yYtX2mbOQe6XLqE8LgRFvs0Ohr5seDl65lHG.To7O', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('40-30801', 'Nicole', 'Hudson', 'Moore', '430rubie40@example.com', 'UNC-CBA', '09127863925', 'Bachelor of Science in Accounting Information System', '1', 'defaultAvatar.jpg', 'active', '$2y$10$K6gr/qYl12zxmDTxTtkMb.p9DT798l2RcBaL3msNA7llCMRHD.ko.', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('40-51684', 'Nolan', 'Smitham', 'Beer', '625robel.katharina@example.com', 'UNC-CAS', '09598610613', 'Bachelor of Science in Environmental Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$tz0veYCqVPWhKTMB8Wn7gOJThUH.u0970Za917o/0BRzYkXEhovb.', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('40-71606', 'Caleb', 'Hettinger', 'Gutmann', '816theresia72@example.org', 'UNC-CE', '09713329596', 'Bachelor of Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$NJmVe5nqDOKQyEX.737OKufmX9RkYbWgDai7ZOqSWg1UL5ZfjU3YO', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('40-84167', 'Daisy', 'Flatley', 'O\'Reilly', '746qbeer@example.org', 'UNC-GS', '09457033600', 'Master of Arts in Filipino Major in Language and Literature', '3', 'defaultAvatar.jpg', 'active', '$2y$10$tqPbzvuK0Sjm54esZJkkcezzpqdQMHwAU89npGXs1gE29sZq3/yAq', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('41-02634', 'Caroline', 'Leffler', 'Turcotte', '260kiehn.gilda@example.org', 'UNC-CN', '09810032370', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$InVT1/8Z9j0pqljWvtkTTeLKJ5vHbLAanuji2OBkzzn4IFCCGCwq6', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('41-09657', 'Meda', 'Wiza', 'Weber', '321mweimann@example.org', 'UNC-CCS', '09156166505', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$XM5BKJg.aMjWrq/9wlYbmOCCPIBTPhgOvQmJLpcWyu9QdB5/IHeyO', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('41-12083', 'German', 'Leannon', 'Rutherford', '550jovany81@example.net', 'UNC-GS', '09972880214', 'Advanced Language Certificate', '2', 'defaultAvatar.jpg', 'active', '$2y$10$fIO7kSsr.13C84ajZk1vsuflL2ROiSko4NDCjshhH3H1MuWRpdQYC', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('41-13879', 'Darien', 'Zulauf', 'Schaden', '462rosario61@example.org', 'UNC-ELEM', '09961607623', 'Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$IOAgwCRKhhDedbpHLBLLuOfNuxkz2QwukO9AODNZA6Q8VwAg/FAfW', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('41-35097', 'Clinton', 'Bartoletti', 'Russel', '298jokon@example.net', 'UNC-CBA', '09313312640', 'Bachelor of Science in Accountacy', '3', 'defaultAvatar.jpg', 'active', '$2y$10$yIjU7BaRpISVcSxt2iOxHOVsltfxGZ/6rLZ7KOkNS12gO1UqTtch.', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('41-47918', 'Alana', 'Pagac', 'McDermott', '711lowe.tracy@example.org', 'UNC-CBA', '09839411357', 'Bachelor of Science in Tourism Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$5gM5SaQZWsoG6UVZJ.cHHuvXS.9DhpWFA7DaAQ3GlIzIh8H3oO6uW', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('41-79025', 'Keara', 'McClure', 'Nikolaus', '287keeling.tevin@example.org', 'UNC-CCS', '09658359204', 'Bachelor of Science in Computer Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$qck8hidj.FYIOKt88EBbjuF/8/VReD2n6N2fwj43M/Io3YEV6RtQG', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('41-84399', 'Estell', 'Paucek', 'Mueller', '949wolf.maximilian@example.org', 'UNC-CE', '09649247746', 'Bachelor in Physical Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$I45iOeXjSpJask7F01EuqukPAChIi7OEVYwbAa07dG3oMllBLzEgK', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('41-89234', 'Xander', 'Ruecker', 'Ryan', '594ztorp@example.com', 'UNC-SHS', '09161514909', 'Technical, Vocational and Livelihood', '3', 'defaultAvatar.jpg', 'active', '$2y$10$UdFH3M1G4dmVzzNB57GsjOJaoz3Btc0vN0j4etufXpjfpHqYyXgXS', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('42-21891', 'Maya', 'Yundt', 'Quigley', '582skylar.balistreri@example.com', 'UNC-JHS', '09039187948', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$m7pn6s.8DwQIl3t0ETcRFeRmSyCWu2hFxOi9UkQVvhVtb44fl43dO', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('42-21902', 'Patience', 'Halvorson', 'Paucek', '356jeanie79@example.com', 'UNC-SHS', '09262015744', 'Technical, Vocational and Livelihood', '1', 'defaultAvatar.jpg', 'active', '$2y$10$5KoC8i/VeQzxmPumW3DNUuc8AmAyOud/lG2O5LD/GaCGvsqHs4I/6', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('42-26222', 'Marcelina', 'Nicolas', 'Zieme', '702bailey11@example.com', 'UNC-JHS', '09277725384', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$uYk4mMS/j7SNqhqw9x8FROFLMbo/w2mUFdvSp26qI1HsBfUCriM5m', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('42-27435', 'Emmanuelle', 'Leuschke', 'Bauch', '707ohara.nina@example.com', 'UNC-CJE', '09689564011', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$SMuz3ySot25U0DD/73ZE8ehnrz6sBvm3nYMHW8Zlbcix1WHSqZpqq', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('42-33323', 'Moises', 'Zieme', 'Reinger', '100vrunolfsson@example.org', 'UNC-CCS', '09179321495', 'Bachelor of Science in Computer Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$a40RMKxdHsjxATSnNEo3F.a.7vKqNw7KvHHhS4Lbxm4qtpFz.TyDS', NULL, '2022-03-26 02:27:45', '2022-03-26 02:27:45'),
('42-43823', 'Frida', 'Jacobs', 'Quitzon', '356olson.marcel@example.com', 'UNC-SHS', '09500208057', 'Accountancy, Business and Management', '2', 'defaultAvatar.jpg', 'active', '$2y$10$PJ1U7FUAed86h3B/L51qyevYE9eUF04flgLempuY2RcLOIZFT7zqG', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('42-48335', 'Adriel', 'Cole', 'Gutmann', '351florine80@example.com', 'UNC-CN', '09724271360', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$A0Am6wkPyHrPY3uOpqetmux/bBoNsp8naLz5DZjXI/9lIZ1iwLpuS', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('42-48915', 'Rebecca', 'Macejkovic', 'Paucek', '168egraham@example.com', 'UNC-ELEM', '09109988812', 'Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$5OYyDUbMvre87n/VfJnL5.MHiWnrmZx50UBF1NTnCN9MXeQlUpPbe', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('42-68189', 'Foster', 'Cummerata', 'McClure', '623casimer.rohan@example.net', 'UNC-SHS', '09322692685', 'General Academic Strand', '5', 'defaultAvatar.jpg', 'active', '$2y$10$/GQWJjbxNG//Xri4.t1yEO/wGeK.RUlOeV2.7i.OtVHRK3Qze0B0K', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('42-74057', 'Leo', 'Batz', 'Quigley', '214reginald69@example.com', 'UNC-CEA', '09767493563', 'Bachelor of Science in Computer Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$68FefshNEVA.DeusM7dGZu0e/BS2XQFu2t7f8Ux40SGaiIO4l2xnq', NULL, '2022-03-24 02:33:53', '2022-03-24 02:33:53'),
('43-11278', 'Mortimer', 'Fadel', 'Hyatt', '874stehr.shyanne@example.net', 'UNC-CE', '09067698828', 'Bachelor in Secondary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$c.YypaKB3qEcCyMRTunF7uFHA/n8Bs3mJIGHvRJUkv932kQRz8yBm', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('43-82687', 'Bo', 'Mueller', 'Wintheiser', '580hammes.barney@example.com', 'UNC-CJE', '09692508899', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$3sQQ./KKlwQibt.t0WzbCe1Op2v0CkG/mDyl3K04rVUWNuxuAQplu', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('44-05050', 'Celestino', 'D\'Amore', 'Heathcote', '729beth89@example.com', 'UNC-CJE', '09115797692', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$1IQO3E7bkq5RnkRoT6zoS.bjYyG0sLKWRLEfTSDLg6fCn3evktQt6', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('44-16457', 'Graciela', 'Robel', 'Ebert', '498phansen@example.org', 'UNC-GS', '09315601630', 'Master of Arts in Teaching Mathematics', '3', 'defaultAvatar.jpg', 'active', '$2y$10$TKDA3X08FB4AOjVxxhM3UuYaXNwGXt18J1vYZrr0W6YmcqfymqQim', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('44-24056', 'Nettie', 'McKenzie', 'Dach', '275mbode@example.org', 'UNC-SHS', '09484356421', 'Technical, Vocational and Livelihood', '4', 'defaultAvatar.jpg', 'active', '$2y$10$tHvaIeZKW8sv0NP2nkR28OWYavL1xbnytLiQ0H3VxzUBJhRLPRaiy', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('44-36726', 'Emile', 'Lehner', 'Kulas', '328belle60@example.org', 'UNC-CAS', '09979515911', 'Bachelor of Science in Biology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$X3JZ/fJYqx6gmFbOsiH4AOduVfc1Mi67.m6/kJTnx1MDVdtILIgdu', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('44-54137', 'Leopoldo', 'Von', 'Jacobs', '847serdman@example.org', 'UNC-GS', '09544077336', 'Master of Arts in Teaching Mathematics', '4', 'defaultAvatar.jpg', 'active', '$2y$10$p6zPzG9kLkEuiQ3TOLn41OWGUt8UyAwetq9bk1ojkLrUD0vsG4oV.', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('44-68544', 'Taya', 'O\'Reilly', 'Hudson', '082parker.deja@example.net', 'UNC-CAS', '09595068544', 'Bachelor of Arts in Political Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$hOx0D7q9uqnC4eq/Mu3m9./UUc8OL/u/cuaZ3j/BiFajrX7W51Om.', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('44-99353', 'Winston', 'Nicolas', 'Beier', '003fberge@example.org', 'UNC-ELEM', '09456851946', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$iLnJPgJEyTkoDOCe9BjlQeEPi2q3c9fAhMpNh.0zVrLfU0F0FuTw.', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('45-65242', 'Jolie', 'Sanford', 'Willms', '748sanford97@example.com', 'UNC-CCS', '09968236255', 'Bachelor of Library in Information Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$29PvWXYe64ewLY6GvCQlzu1.9mLQB58BzoVWm1g.v5KiC0BUF4TWa', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('45-75376', 'Marlin', 'Wilderman', 'Langosh', '980reuben.gibson@example.org', 'UNC-CBA', '09136299096', 'Bachelor of Science in Hospitality Management', '3', 'defaultAvatar.jpg', 'active', '$2y$10$lm.aG8T0gMZlRvIZ0DpFjOTJ9hi4nTmGhdP46HFCUHpCC9sftQHti', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('45-86452', 'Aditya', 'Christiansen', 'Brakus', '121olowe@example.net', 'UNC-CE', '09700146738', 'Bachelor of Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$x/KeAyqXQKP1teuOMEGbMukqvz3h7Kudya2tNogRF05X8ohOzd8bu', NULL, '2022-03-24 16:16:23', '2022-03-24 16:16:23'),
('45-88239', 'Mayra', 'Balistreri', 'Schroeder', '623reta80@example.org', 'UNC-ELEM', '09513506757', 'Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$u1a0C68wTPboh6lgpoPWwuc1NAU3Ab2u0VXUBGXhKMHx/843F6GOa', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('45-90866', 'Abraham', 'Corkery', 'Cremin', '900sgreenholt@example.org', 'UNC-CE', '09675956506', 'Bachelor of Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Hb5dnY2wpUljWcKzr2M8CuwxsB42hK.faqYsusgNaiMXNCCuNr4.W', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('45-92716', 'Cecilia', 'Considine', 'Boehm', '720kcasper@example.com', 'UNC-JHS', '09577139533', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$PSr.ZW7p4yqeuHRstPHaS.ZxxhPWImMhh2sIvNvELhFWKIGYZtGbG', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('45-93522', 'Hardy', 'Smitham', 'Smith', '831ncruickshank@example.com', 'UNC-CBA', '09848759693', 'Bachelor of Science in Accountacy', '1', 'defaultAvatar.jpg', 'active', '$2y$10$fzYFlldg1eFj4Q9UewzdEuJjjjJhnu.NALRTOZaBP1VyJ69s89SW6', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('46-13668', 'Lizeth', 'Hyatt', 'Lakin', '622wilton02@example.com', 'UNC-CN', '09580112076', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$5yGyclSGPJ1Mo/3kLL6jluMVP.MUl2IwbJAgDxmWfL.ZVGZ9hPFk6', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('46-24112', 'Caroline', 'Bergstrom', 'Herzog', '536davis.loma@example.org', 'UNC-CBA', '09589975745', 'Bachelor of Science in Tourism Management', '5', 'defaultAvatar.jpg', 'active', '$2y$10$R5qkxcEgphk2gMb3aZe5qekeqZT0VUNP/ih2Wi3Fm2PbeQlMtS9v.', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('46-39387', 'Frances', 'Johnston', 'Witting', '614ozella.hauck@example.org', 'UNC-GS', '09567740841', 'Master in Library and Information Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$MWpwPotiZ6F/jAinyTw.CeCAZPh/C7NUQOtyT9Qmg7WWnRSSCvVzK', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('46-55099', 'Buster', 'Franecki', 'Hermiston', '368antwan51@example.org', 'UNC-CBA', '09943829334', 'Bachelor of Science in Business Administration', '2', 'defaultAvatar.jpg', 'active', '$2y$10$J6/MVAamMhUeoefgc6XDG.6WMhs4/QbLyuKAEM6jUGA12H7ICrhhK', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('46-57288', 'Alford', 'Schumm', 'Lynch', '811rosalind28@example.net', 'UNC-CBA', '09938598737', 'Bachelor of Science in Accountacy', '5', 'defaultAvatar.jpg', 'active', '$2y$10$O0SpHGVPcJaIppgIrzD3t.NSZ4vTVeKKph42RnZdeYsi2BW8qr0Sy', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('46-58596', 'Dereck', 'Welch', 'Reichel', '614duane58@example.net', 'UNC-CE', '09098950023', 'Bachelor in Physical Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Cm9Yvg8vnnsrtD.i8mwt6.GljMaekdv/WeRK8ud2qSWRlqaJ7pALW', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('46-68955', 'Blanche', 'Spencer', 'Collier', '876ernesto09@example.net', 'UNC-ELEM', '09849243829', 'Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$xxLkI8umyYWGKgbQCdhod.sOs8fJo8l92oRrf5n2AbMfJsdJ3Gaaa', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('46-88017', 'Rickey', 'Rowe', 'Zieme', '196mike.reynolds@example.com', 'UNC-CJE', '09665746330', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$4U.AlIy8lR5MpIFi9wj6NutMVmjMpz2TTk03NLdl18pYIkbua81a.', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('46-92431', 'Makayla', 'Satterfield', 'Gislason', '775cathryn94@example.org', 'UNC-CJE', '09827199209', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$1dapeLGtH4xW7XdoMZFAkuWjkl.AlDMHfCCLSHezhwW5VsO4KvzWG', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('46-93100', 'Shayna', 'Gorczany', 'Kuphal', '698luettgen.kaley@example.net', 'UNC-CN', '09129239679', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$5cDvUYB4QOVycKDahJ7EZeW/EfNQ.VBEjp.jbCoeNL4g0BxM6dKOu', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('47-07194', 'Alyson', 'Leuschke', 'Harris', '121louvenia94@example.com', 'UNC-CEA', '09730819999', 'Bachelor of Science in Computer Engineering', '5', 'defaultAvatar.jpg', 'active', '$2y$10$onA/WT6Z/9dxmsprlWDqZeFW2gaUtScwTvICwM6.Wz2fqdUQUk3kW', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('47-07793', 'Clarissa', 'Strosin', 'Hane', '815qgerhold@example.net', 'UNC-LAW', '09149242312', 'Juris Doctor', '4', 'defaultAvatar.jpg', 'active', '$2y$10$xMwIQsD6SCbt7AjkCRkQQO.vwInENirEdpighm3WbfYgaV9c79GBS', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('47-43486', 'Gayle', 'Streich', 'Hayes', '862yabbott@example.net', 'UNC-CJE', '09430378353', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$TZt5iuQGwE12xicmM8X3TO8DJoxKJ0Y5oJItWo0CqXBiYC1HqVArq', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('47-45758', 'Mafalda', 'Kuhn', 'Fahey', '961valentine.ernser@example.org', 'UNC-ELEM', '09251726208', 'Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$A7cDpeGPjFkYmkteOkA9HOYagBMSlgQDRNhaKr5VMVxEjCRcMxaRi', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('47-60786', 'Frida', 'Klein', 'Kerluke', '358ibosco@example.org', 'UNC-SHS', '09394414897', 'Science, Technology, Engineering and Mathematics', '4', 'defaultAvatar.jpg', 'active', '$2y$10$dyMDgFi9Nr6cYhFcRL.evOHTBIwVJpsFTmWZLZAvDLTdRg9Pbjmai', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('47-72367', 'Darby', 'Considine', 'Block', '554makenzie.jaskolski@example.org', 'UNC-CBA', '09489536057', 'Bachelor of Science in Accountacy', '1', 'defaultAvatar.jpg', 'active', '$2y$10$tbL4E1FhM7FOGwSkX75tueqEVvec5yqWqORc.sXp4StxLLma.s5Se', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('48-12259', 'Vernon', 'Baumbach', 'Murphy', '568eldridge.stiedemann@example.com', 'UNC-CAS', '09172970006', 'Bachelor of Arts in Political Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$8PwxsjVOYAoyDhx8.9LXwOjd4TtskdV9ALi1QSeau7UItOZLLdfu.', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('48-13032', 'Price', 'Nitzsche', 'Botsford', '657roosevelt.tillman@example.net', 'UNC-CCS', '09342293254', 'Bachelor of Science in Computer Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$x5a1OYesbtt1XXTs0kZVseC6J9ejdZanNjCuDzJvTiUnMrUPD8tLu', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('48-15220', 'Isobel', 'Zulauf', 'Runolfsdottir', '457ukuvalis@example.com', 'UNC-CN', '09544430482', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$AiXxpzNug08Jh6uqsMNeJ.llnHkSAGlh8QIYuyDrkDj5qQQYpgXl2', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38');
INSERT INTO `students` (`student_no`, `firstname`, `middlename`, `lastname`, `email`, `departmentCode`, `phone`, `course`, `year`, `avatar`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('48-15430', 'Elnora', 'Schneider', 'Kuhic', '838witting.madaline@example.org', 'UNC-CCS', '09858331635', 'Associate in Computer Technology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$aiCny3.syLavdie8io6MzOJOO.BiM1BL5qt8yjcmIr8AHxVKInibm', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('48-19342', 'Linwood', 'Welch', 'Schaefer', '792benedict43@example.org', 'UNC-CAS', '09355917203', 'Bachelor of Arts in Political Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$wTpEEklWKaM.dmyXck0nPuaSWHwvO1lsGfOzloBvzNWC13CCYHlbO', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('48-26234', 'Elisabeth', 'Bogan', 'Langworth', '092brook32@example.com', 'UNC-CBA', '09298171453', 'Bachelor of Science in Hospitality Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Dv4CJ9ZU2RrVG9a1710g1e3mfsQZtBS/q/kAC9wrHFB77AkPdKbHC', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('48-34220', 'Ashly', 'Smitham', 'Stokes', '985velva.breitenberg@example.com', 'UNC-CAS', '09470588518', 'Bachelor of Arts in Political Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$FLPnudhKGzgGmAbLdsbuUeCi9311BUUgT4mnDmONrp1TIYhIIM2.K', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('48-41605', 'Carmella', 'Fay', 'Runolfsson', '331runolfsson.katelin@example.net', 'UNC-CAS', '09054274036', 'Bachelor of Science in Biology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$WQhDaM7juWBcumyu/IZjVeOg4GIsy7QMod5fIEVQ4Ma3egFOzUd5G', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('48-45893', 'Hubert', 'Bernier', 'Schamberger', '205bmcglynn@example.org', 'UNC-SHS', '09089226939', 'Technical, Vocational and Livelihood', '2', 'defaultAvatar.jpg', 'active', '$2y$10$pIhm.HaJe687Arif/WVdWOy1k4i.MCtOL.IiK3msU7B284C1nclzq', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('48-74570', 'Jennyfer', 'Ankunding', 'Parker', '276priscilla.homenick@example.org', 'UNC-CEA', '09114855245', 'Bachelor of Science in Computer Engineering', '2', 'defaultAvatar.jpg', 'active', '$2y$10$Z6S6SAJZNJktoqoh9w04WOkULMLiiIcasqgYseVJzVSfeTAMzr3I.', NULL, '2022-03-24 16:16:23', '2022-03-24 16:16:23'),
('48-82532', 'Chance', 'O\'Reilly', 'Medhurst', '439rachel36@example.com', 'UNC-CAS', '09176175242', 'Bachelor of Arts in Psychology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$aXcVfHEK2Wn.qgKtveK8RefkBd.PK/r3xTmsb3cW7LHfxAhEYO206', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('49-12067', 'Eugene', 'Hansen', 'Lang', '006rice.kennedi@example.com', 'UNC-ELEM', '09635264721', 'Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$1BHDGwpzqfRVCV0DT/JzNudW7Vih.FAyXQzxtcW2wgOqqu1iDtE36', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('49-43084', 'Marlen', 'Breitenberg', 'Jerde', '677arthur58@example.net', 'UNC-CBA', '09396164440', 'Bachelor of Science in Hospitality Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$HyvnPmAAn9UBeC2KA/1Ui.5Lj7qCbElTLL1EXO7gpFpBjoRRRJk5e', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('49-46785', 'Delphine', 'Douglas', 'Torphy', '146stamm.dwight@example.com', 'UNC-CCS', '09300013789', 'Bachelor of Library in Information Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$dA2tFGmm8TWB8xMNXpPXAODKq1fgmSc7ZMJuKPFAmfnVhATvu1SQa', NULL, '2022-03-24 16:26:14', '2022-03-24 16:26:14'),
('49-49693', 'Micheal', 'Wilkinson', 'Flatley', '947goyette.martine@example.org', 'UNC-CAS', '09493256112', 'Bachelor of Science in Environmental Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$WNqyEHd5n7W2QlupedMnFuHBT4uuNkO9WK96dmxTG9JXskOY3O/8y', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('49-49868', 'Natalia', 'Collins', 'Deckow', '524wkuphal@example.org', 'UNC-CN', '09442899514', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$IBq48q1P6ihLsIxiI5TXdOlJ8w1AcXDkwyjXdlL9emkVaMyl39Vte', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('49-54077', 'Althea', 'Harber', 'Donnelly', '384bertrand39@example.org', 'UNC-CBA', '09473593117', 'Bachelor of Science in Tourism Management', '2', 'defaultAvatar.jpg', 'active', '$2y$10$36iGafQEx.orAM/I.kJ3CeVe1A5YrEtTaFk05yp4Q177D0tDg85mq', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('49-61157', 'Kurtis', 'McCullough', 'Luettgen', '395alene97@example.com', 'UNC-CEA', '09247810744', 'Bachelor of Science in Electrical Engineering', '2', 'defaultAvatar.jpg', 'active', '$2y$10$1.O9lM0qKmeDDN5IeM.sHubvwwm2yBMwZzPewfIT.w.9mrRXYqmx6', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('49-72531', 'Lonie', 'Carter', 'Kiehn', '002schaden.eino@example.org', 'UNC-CEA', '09964142643', 'Bachelor of Science in Architecture', '1', 'defaultAvatar.jpg', 'active', '$2y$10$iNDbxMTO459ZHUrl9iPv8OETRUrcBRZOOXk1Do0ctuDO1RKBXii6W', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('50-04801', 'Lucious', 'Berge', 'Wilderman', '043vmueller@example.com', 'UNC-CEA', '09807111943', 'Bachelor of Science in Architecture', '4', 'defaultAvatar.jpg', 'active', '$2y$10$2sxoGNAlRmLbcXhI80iPsuqajsSNsbo1mtDaMBREQh6QYwgEY4Wk2', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('50-22512', 'Randall', 'Haag', 'Koelpin', '511abernathy.torey@example.org', 'UNC-ELEM', '09930459534', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$S.4NYsie5Nn4rCYpTUQizet3Ms8tsbDpJEbSsQOnOvDQsnuHxy2Qy', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('50-25523', 'Lambert', 'Abshire', 'McGlynn', '460zlakin@example.net', 'UNC-CJE', '09914401298', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$EK2Zpylf2SxpShWOWXMAgOgq2JfC38g.8rdjXNW12v2ljLDi2TyxG', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('50-27480', 'Kareem', 'Upton', 'Homenick', '728padberg.daniella@example.net', 'UNC-CAS', '09285437715', 'Bachelor of Science in Environmental Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$jq/5a2NlYSrjywCS89C44.2Epstdc5WFy1.EpYwMugqio59IGx86C', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('50-32432', 'Sigurd', 'Kuhic', 'Zboncak', '726michael51@example.com', 'UNC-CAS', '09764212817', 'Bachelor of Arts in Political Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$9TcucodEidE1INNQf2.G2.8TkP88mXff/7sjNNTvjvpHucZJ6tC06', NULL, '2022-03-26 02:27:45', '2022-03-26 02:27:45'),
('50-32479', 'Benjamin', 'Leannon', 'Erdman', '788klocko.fabian@example.org', 'UNC-CAS', '09217150104', 'Bachelor of Science in Environmental Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$YJyKkLblSk29lRvzIe08KOYoata/f22DPGIPluchn9NWERurfR8BW', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('50-83322', 'Miller', 'Harris', 'Beahan', '105reta.west@example.org', 'UNC-GS', '09701919863', 'PRIMe (Public Risk Management) Certificate', '2', 'defaultAvatar.jpg', 'active', '$2y$10$YViQbNShSX0ONwW0svL05etpkjlKk0ix4yrcKE9ZYeigl91UiIWdq', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('51-26173', 'Kian', 'Gislason', 'Armstrong', '674mariela.pollich@example.com', 'UNC-CCS', '09736242406', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$Hrq9ynJua5Nfe.MrhLPRzuzZIlsX0Fm034By6nY/gP.rGULFrT8Oq', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('51-43324', 'Rosalia', 'Sporer', 'Lebsack', '047vchamplin@example.com', 'UNC-CN', '09740749001', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$TQH3ykLkduUwIIhNWfZACevaFmvaKV7Xn9e28hrDCivUEogCZI1l.', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('51-49165', 'Cleora', 'McCullough', 'Corkery', '008jamal.hodkiewicz@example.org', 'UNC-CBA', '09867284475', 'Bachelor of Science in Hospitality Management', '1', 'defaultAvatar.jpg', 'active', '$2y$10$QBYDpZRTTQ61VcIEbOEa7.6FxXtBgFkGgR5kH7Be3.1ByiGWmEBGS', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('51-54931', 'Melyna', 'Schaden', 'Steuber', '329tmuller@example.org', 'UNC-CAS', '09196440869', 'Bachelor of Arts in Psychology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$A6q4PkJVtoHSFsxFJGuTE.Xnt6lFkFiLAhIYfPNJ0FIY/oBDOkyu6', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('51-56813', 'Orlando', 'Johns', 'Schulist', '399beaulah.brekke@example.net', 'UNC-CCS', '09321999644', 'Associate in Computer Technology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$9akGSZdexla61jOWdeQg5.tZKuUsdp5N39OzeXLntajGWB6PYQ12m', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('51-61463', 'Arvel', 'Schumm', 'Crist', '673janick.davis@example.org', 'UNC-SHS', '09086757994', 'General Academic Strand', '3', 'defaultAvatar.jpg', 'active', '$2y$10$hKeo6d3JtAcR5ygnVSlD/.83cYlXk3Ak3ERpNTLlJSgobfeoCF2hS', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('51-80595', 'Humberto', 'Simonis', 'Hickle', '792ozella.berge@example.net', 'UNC-CN', '09224206897', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$b6vDVFbpYzjd7eXPzlEp/eh7GlL5zdi0c81agrqD.vZGqLXsfIT3G', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('51-84466', 'Carolanne', 'Bashirian', 'Adams', '006eschiller@example.org', 'UNC-CEA', '09391081205', 'Bachelor of Science in Computer Engineering', '3', 'defaultAvatar.jpg', 'active', '$2y$10$BbBoZrSffVZmXcUWuLTJs.V5xcWkv9BJj4mZR1.5V5WCaOP9jkUVu', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('52-11388', 'Vallie', 'Bernier', 'Thiel', '067swaniawski.jordyn@example.com', 'UNC-SHS', '09203749627', 'General Academic Strand', '4', 'defaultAvatar.jpg', 'active', '$2y$10$lC2KI9816ma/olF1Mmao4.UUxZHwfQ4fOQYK33hwf1xfg4niH8wh6', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('52-14631', 'Maryse', 'Ward', 'Gorczany', '019rromaguera@example.com', 'UNC-CJE', '09884533363', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$mhHeC7bjIJjDWyz.Pj.gyem7s.S4cwnak2A6W8w8ERYHDv6wZ7p7a', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('52-27654', 'Watson', 'Blanda', 'Gislason', '894layne.johnston@example.org', 'UNC-CAS', '09281630400', 'Bachelor of Arts in Political Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$iWux9WjR6hgQbPv9i6gVne4xsw/eg0R2GDhVGvTon86EwRMReoAve', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('52-44750', 'Emmie', 'Schmeler', 'Ortiz', '772oconnell.maynard@example.com', 'UNC-GS', '09971003706', 'PRIMe (Public Risk Management) Certificate', '5', 'defaultAvatar.jpg', 'active', '$2y$10$2U3JNtAdbtIpXVAt89bgouoWnCVViAygVwipSLhnIiJvOqHypcNZ2', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('52-48653', 'Arno', 'Treutel', 'King', '496prince93@example.com', 'UNC-LAW', '09034693506', 'Juris Doctor', '4', 'defaultAvatar.jpg', 'active', '$2y$10$2HUjdfeEqnbuZwWwJFQ.r.9RvUSEp2.enLizm2ilW1f2nFpt8psHa', NULL, '2022-03-24 16:26:08', '2022-03-24 16:26:08'),
('52-53044', 'Vicenta', 'Skiles', 'Schowalter', '593bmuller@example.com', 'UNC-CCS', '09590021570', 'Bachelor of Science in Computer Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$F92jsonpRn8FVFF284AjTumTUTNY6SmGBD5UO8NCzoytFc1T7GETu', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('52-59029', 'Paxton', 'Lang', 'Wehner', '216cooper82@example.org', 'UNC-SHS', '09767704196', 'Technical, Vocational and Livelihood', '3', 'defaultAvatar.jpg', 'active', '$2y$10$H1nMNc0WWbvgLMINHIQydeBMxeD.E4LRgfVQkZUW1DM4up6owh8Aa', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('52-62247', 'Stephan', 'Trantow', 'Ruecker', '528ignatius33@example.org', 'UNC-CE', '09853159415', 'Bachelor of Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$X1fw1qyzFy1DmSlYIIkIx.GQ7fX96yhAGWAlEX64qoClANGLah69q', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('52-65470', 'Donny', 'Ziemann', 'Jaskolski', '779shanahan.braden@example.com', 'UNC-LAW', '09711140201', 'Refresher Course', '2', 'defaultAvatar.jpg', 'active', '$2y$10$gsNL14zu7i1UU7Xdawts0.kTx.x.HwmLQJqsZzRkRuKKdY00L2Ih.', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('52-71781', 'Hollis', 'Thompson', 'Rath', '178bdurgan@example.net', 'UNC-SHS', '09525851156', 'Science, Technology, Engineering and Mathematics', '3', 'defaultAvatar.jpg', 'active', '$2y$10$4kKxO/hSfG.qrjYGMBNL0Oz1YO6O/1nWvPyhFcuoOMv/3Je2sklWq', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('53-06034', 'Elmore', 'Parker', 'Green', '944weber.jerrold@example.net', 'UNC-CE', '09956222549', 'Bachelor in Secondary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Ro0zSJX2WyD/T7STkflJSOP4OLTTfXlrEkt.t5nyoTMHk96z3W9fe', NULL, '2022-03-24 02:33:58', '2022-03-24 02:33:58'),
('53-06061', 'Isabella', 'Nitzsche', 'Pfannerstill', '915rebekah17@example.org', 'UNC-ELEM', '09380230681', 'Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$A14kxftvqspOC0MtxeUhmeWNJ8jh6vrGs8wvlL10LoOflcDhL4umy', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('53-28711', 'Terrance', 'Schulist', 'Kuhic', '252luz.okuneva@example.net', 'UNC-CEA', '09317400878', 'Bachelor of Science in Civil Engineering', '5', 'defaultAvatar.jpg', 'active', '$2y$10$Id5BZ9yU5nWH6PkDTh.o4.s2SXZm2qyt2qXv2XO0JBG64irdYvaKa', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('53-36047', 'Elouise', 'Hansen', 'Hoppe', '266therese.pollich@example.org', 'UNC-CJE', '09828491013', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$66hMYAyWiap2sOpemsBe2u3iZ6V/A.UaA5/g.rg4uR86HIQtRlD0i', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('53-37897', 'Cordell', 'Corkery', 'Satterfield', '313christelle.jacobi@example.com', 'UNC-CN', '09463383195', 'Bachelor of Science in Nursing', '2', 'defaultAvatar.jpg', 'active', '$2y$10$enfkbjcsJMzf43qhQlLkyee1h5W6qHWzzPbE/TTUwxzXrNe9WVa6K', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('53-49408', 'Jermaine', 'Collins', 'Cremin', '184schmeler.arnold@example.net', 'UNC-CEA', '09196135990', 'Bachelor of Science in Computer Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$YQkMzo/ypMcIgVNHMIXFuuul8ayjzujyV1FGXGECs4KSMqoOqoh8m', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('53-56687', 'Linnea', 'Herzog', 'Keeling', '374kevon.kuphal@example.com', 'UNC-CJE', '09975527934', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$/W6radolxCOA3Gp.g5P.xuha.svbv8QJvzJuxgWBHp45CXUc6zrNu', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('53-64784', 'Jace', 'Hintz', 'Spencer', '754spfannerstill@example.net', 'UNC-CCS', '09312537794', 'Bachelor of Science in Computer Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$DtxVO1XMqSEPzaxUpVSoF.zzGXU/7j4p.uLG31kEO0EZ8KrbYvOc.', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('53-68625', 'Willis', 'Torphy', 'Haag', '626fletcher84@example.org', 'UNC-CN', '09815076838', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$7bXoIvWrp.p1joGCCNmKoeDui0WOoVMQLP2FICj7NALPiNrdBrIfC', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('53-77977', 'Makenzie', 'Pfeffer', 'Schumm', '391bette88@example.com', 'UNC-GS', '09577871172', 'Data Analytics Certificate', '5', 'defaultAvatar.jpg', 'active', '$2y$10$PVSjGuCNSGkDdsLO53MHk.KlOPAYHaNDqZOgE7sxLIciifyuffE7a', NULL, '2022-03-24 02:33:53', '2022-03-24 02:33:53'),
('53-81222', 'Manuela', 'Ruecker', 'Beier', '743volkman.haskell@example.net', 'UNC-CBA', '09434420205', 'Bachelor of Science in Tourism Management', '1', 'defaultAvatar.jpg', 'active', '$2y$10$oO1Z/XYOwsjnxT/FfG8s0.g1uUwhujXR1P9Y7peA1B0//JknNUoda', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('54-20880', 'Mariam', 'Block', 'Watsica', '019gutkowski.osborne@example.net', 'UNC-JHS', '09382564374', 'Junior High School Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$yMwvUtANJiV.e5aaLAcsNeEjg1uHKVoZIgjt6WB.v4vZig5WXUH2C', NULL, '2022-03-24 16:16:23', '2022-03-24 16:16:23'),
('54-24442', 'Tiara', 'Torphy', 'Kuhlman', '617naltenwerth@example.net', 'UNC-CJE', '09541540478', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$fIi2Aiv/PQDAF2BZmBQHM.9CJuZEIVOAIBNkJ4hi5qNuv0UqXukwC', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('54-51363', 'Linnie', 'Weissnat', 'Hyatt', '270letitia37@example.net', 'UNC-CBA', '09366835183', 'Bachelor of Science in Hospitality Management', '1', 'defaultAvatar.jpg', 'active', '$2y$10$wLW8PSG0tgwmjWppH4daIO1oml0ydynMme7bGyNhTotC3XYXgKAG2', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('54-59238', 'Hiram', 'Douglas', 'Shields', '860jude.senger@example.net', 'UNC-CN', '09047150919', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$q5WqsrzwlEf2FOjDPPCkeeb2gKAanI4/coK5sSAXIF9mUZHphtmpa', NULL, '2022-03-24 16:26:14', '2022-03-24 16:26:14'),
('54-62706', 'Beaulah', 'Boehm', 'Reinger', '038mccullough.olin@example.org', 'UNC-CBA', '09887443224', 'Bachelor of Science in Accounting Information System', '3', 'defaultAvatar.jpg', 'active', '$2y$10$xN/pSaY8V2wQCcXmkQqaCOFXykq/vXFnmnLVLEaB07ZxwTzCCGXj6', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('54-77792', 'Cruz', 'McDermott', 'Lebsack', '770henry51@example.com', 'UNC-GS', '09551974056', 'Data Analytics Certificate', '3', 'defaultAvatar.jpg', 'active', '$2y$10$BiaCIu5S0MQOBetD6V5DkO0z2ri4hqWVlDqAmK14OLmvM/MsupGse', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('55-17468', 'Lauriane', 'Rau', 'Hane', '218okuneva.donna@example.org', 'UNC-SHS', '09814926630', 'General Academic Strand', '5', 'defaultAvatar.jpg', 'active', '$2y$10$/QMVVi3vqzo5V3SMDioe6.u.teQAcEgbTkCpvgMubkapz1ZReErNq', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('55-31978', 'Emily', 'Howe', 'Graham', '763sanford.ted@example.com', 'UNC-CCS', '09495188368', 'Bachelor of Science in Computer Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$6TVRz2seOfSSgztNlmHUQeYg8zd0OLyo8EU9ES.TTTv6MJNx83Axi', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('55-38278', 'Duane', 'Zboncak', 'Gottlieb', '331rahul.ledner@example.net', 'UNC-CBA', '09261193330', 'Bachelor of Science in Tourism Management', '5', 'defaultAvatar.jpg', 'active', '$2y$10$sQ7GX7dVwQ.fhfB0ZgEghu/ci3ZH5EECZbJGL9pZVhtwozy1.20aW', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('55-80015', 'Sallie', 'Schmeler', 'Rodriguez', '763pzulauf@example.net', 'UNC-CBA', '09976339427', 'Bachelor of Science in Entrepreneurship', '3', 'defaultAvatar.jpg', 'active', '$2y$10$xwvUj2PCCRc4hJFgXDRpUeVImRI72J6l8Tsf0auvqSTr/KZ/ouXWq', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('56-39790', 'Annie', 'Pacocha', 'Wyman', '841adah.conn@example.org', 'UNC-CN', '09187088079', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$GnsFBtGyKdP2CLX7H36PWeyz1UEICmwP8ifvtnfC6ON8WHMBknGTe', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('56-62081', 'Emmy', 'Gottlieb', 'Lueilwitz', '958davis.paige@example.com', 'UNC-CE', '09026474332', 'Bachelor in Secondary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$/rPEkvDKEYRe1Gw.0HsB5eNNfNxPVd3AO9CxdJYBDDSClsSztG2Ty', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('56-66831', 'Odessa', 'Koepp', 'Stokes', '850hammes.jarod@example.net', 'UNC-CJE', '09147985892', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Sod5AJxANAStGTRqpUzZBeExyCteC1bdR41WCfi5pIUrrOgYKs.UW', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('56-77045', 'Elroy', 'Beer', 'Cummerata', '840annie34@example.org', 'UNC-CN', '09873569377', 'Bachelor of Science in Nursing', '2', 'defaultAvatar.jpg', 'active', '$2y$10$CwaARVHxxmF6kWVI.cdU0etq7XCJ76WpwOqSw8V.RsUy9/F1TZhaS', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('56-77565', 'Kaleigh', 'Gerlach', 'Green', '200genoveva38@example.com', 'UNC-CAS', '09402134960', 'Bachelor of Science in Environmental Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$0P58/q.DjQdILuJSJtRUa.ZdFhQrq.Znyym4LyzIP3BJSg8.QTSwi', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('56-82877', 'Constance', 'Rohan', 'Senger', '083german51@example.com', 'UNC-CN', '09964127924', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$1vNzaEx9VbLhQGcArtcyQe4zzXJMrqWjEVfJxthBn.nZA9hCAQOXK', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('57-08310', 'Derek', 'Boehm', 'Farrell', '845cathryn77@example.net', 'UNC-CAS', '09368964400', 'Bachelor of Science in Environmental Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$7kfPEG54WSj2QprX1nL3D.dep2fx2dOu1jb4obOskK7CZv3y7DrF6', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('57-12450', 'Josefa', 'Konopelski', 'Johnson', '028dino41@example.com', 'UNC-CBA', '09744100346', 'Bachelor of Science in Business Administration', '5', 'defaultAvatar.jpg', 'active', '$2y$10$4w6lfHIxcxy6seZBVLyHieE95n.uVQcmdhDoR6.3UchDX90Bolhyu', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('57-14453', 'Hailey', 'Marks', 'Prosacco', '439dee.schuster@example.com', 'UNC-JHS', '09805612334', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$h9Py0F3K8E.cY5zuI0Z.hewe8fSn6m626SobBTX7N6jAtSOusyita', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('57-54203', 'Turner', 'Auer', 'Hoppe', '417damon.little@example.com', 'UNC-JHS', '09225051387', 'Junior High School Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$V.WTIUoCxgiq9H93Ekov8uJjRIY9IajWt.CV0/lEySxKNr5.EaIcu', NULL, '2022-03-24 16:16:23', '2022-03-24 16:16:23'),
('58-32103', 'Jamar', 'Feest', 'Paucek', '636rebeka40@example.net', 'UNC-CAS', '09772386748', 'Bachelor of Science in Environmental Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$Rxtzx.ltLpxBkl2.615Xj.IWFJv13izDJiFWl.a46V96ToEjHS.P2', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('58-45343', 'Loma', 'Krajcik', 'Heaney', '161fabbott@example.net', 'UNC-JHS', '09889118888', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$oT9nZwGWME6rxaVknblpt.fx8KDv6fnTj9klQfu6BcnrLzKXe1IC6', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('58-52728', 'Litzy', 'Kertzmann', 'Howell', '334junior.hansen@example.org', 'UNC-CCS', '09856739403', 'Bachelor of Library in Information Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$DTpwN9QvLfFZvPgNXmWtDuG5DydbrSfdAAMwQ6nsyuQrxMtOvnxY.', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('58-58992', 'Angelica', 'Bartoletti', 'Howe', '624wilhelmine49@example.org', 'UNC-CBA', '09041142594', 'Bachelor of Science in Hospitality Management', '2', 'defaultAvatar.jpg', 'active', '$2y$10$VcNuoJS4wXcdTFFNxebVcuHt3mTiXKWuxrtUjsTisSS5S474PtzNi', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('58-97483', 'Winifred', 'Collier', 'Harris', '328lkling@example.net', 'UNC-ELEM', '09153830969', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$T0ivSvnrKWnEDNDHxjezxum0Q/dV.0wsNnBPuW/d0Au7P2MlHYa4G', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('59-06924', 'Mabelle', 'Ritchie', 'Simonis', '641armstrong.hallie@example.net', 'UNC-CEA', '09239340809', 'Bachelor of Science in Civil Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$BDnZuXWI5I5EmRAmIwi6TuLTIywxw7rC5CS29xmyjOcHZ7AaR13Ai', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('59-27086', 'Rigoberto', 'Murphy', 'Reichel', '555christiana.effertz@example.com', 'UNC-CCS', '09150548405', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$3YuRU.1HZBcz1nz5.4Sfyeg2AK1KwzOhhNApftmVaeGdOMmKERD/2', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('59-32147', 'Kathryne', 'Haley', 'Jenkins', '550jast.cheyenne@example.org', 'UNC-CAS', '09000437837', 'Bachelor of Science in Biology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$zYtb.2TXl4aLwMer8Cs9p.2alB4HqWCrVb4TTCPqsswJkTVvUeVMS', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('59-62878', 'Selina', 'Dicki', 'Fadel', '791oabbott@example.net', 'UNC-ELEM', '09139385883', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$wRb6WUq7/Dd9kESwyybq5.c/qaLh826oQikaH5aWYuQvY6VbJgbAO', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('59-72313', 'Clarissa', 'Stamm', 'Schiller', '494nola.barrows@example.org', 'UNC-JHS', '09042160636', 'Junior High School Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Rs/CZQlY5jhuMF4qtcZX3uXXQc7vlyMYDUWLG1gj8ofmE67MxOPm2', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('59-72860', 'Anabelle', 'Buckridge', 'Jakubowski', '889buckridge.alberto@example.net', 'UNC-CEA', '09570183246', 'Bachelor of Science in Mechanical Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$Mur7ZxCjQtHaGRRbONDKsOc8vvOCJn2h6c8lx4225HRno7Iwteiby', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('59-89812', 'Winifred', 'Douglas', 'Becker', '120norwood54@example.com', 'UNC-CJE', '09028076874', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$.EdHP0aHdbgsFGPoTgINwe.LQf1CiTeTPVNSflfeVk7prtiEsVdTO', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('60-17551', 'Damon', 'Torphy', 'Gottlieb', '089ceasar80@example.org', 'UNC-CAS', '09246426319', 'Bachelor of Arts in Psychology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$/TVIp7n3GOBWYNhxQ6izs.YWB7KrLy0pVljblCpWgqq9IwfNLKcSS', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('60-19447', 'Toney', 'Feest', 'Hauck', '315torn@example.com', 'UNC-CBA', '09242253840', 'Bachelor of Science in Hospitality Management', '3', 'defaultAvatar.jpg', 'active', '$2y$10$qHepwrHa54V//RqROVqbj.KIAOvWjwNjTcQMqFZZHccGBUa035sGG', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('60-31421', 'Dandre', 'Thiel', 'Lesch', '473yoshiko.bailey@example.org', 'UNC-CN', '09091126704', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$S4NJ1Jx7seI0ltgis7gZqueuLLCaheclVMuyVo27vmuNKDQTqPP0W', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('60-32956', 'Emely', 'Emmerich', 'Pacocha', '835cummings.lilla@example.com', 'UNC-CE', '09376282723', 'Bachelor in Physical Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$OjMrZLb.gQSAbNPFFYg5jODyvl1PbJpriqoh00L2YzXd.fRPjtt9W', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('60-38178', 'Jannie', 'Terry', 'Hill', '099pquitzon@example.org', 'UNC-CEA', '09606022511', 'Bachelor of Science in Architecture', '5', 'defaultAvatar.jpg', 'active', '$2y$10$KXsfQUwFg3y/nomoTkL.LOXZ4NWemMN6kcOGFBQFjJqoFEFPnWhmK', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('60-38638', 'Harvey', 'Torp', 'Herman', '168rosetta.brekke@example.com', 'UNC-CAS', '09817260039', 'Bachelor of Science in Environmental Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$xBvbxafD9tXO6v9BqPZq6ewRkblWbksHbwtBeRbTpKIAzun14K3lK', NULL, '2022-03-24 02:33:58', '2022-03-24 02:33:58'),
('60-45313', 'Bernard', 'Kris', 'Frami', '451hturcotte@example.org', 'UNC-LAW', '09555637538', 'Juris Doctor', '2', 'defaultAvatar.jpg', 'active', '$2y$10$gyY6ak.XOfI6KMnYf/y0/eXhieuEiFZD0DFQFS4vxrDu8K3gN5Pn.', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('60-74944', 'Hal', 'Kunze', 'Lowe', '349uschmidt@example.net', 'UNC-JHS', '09114925790', 'Junior High School Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$sJ.buYpijnNe2uZ0u4SHH.TuJqkuHgtogS6CK0LxR1hAFyT8iSOMC', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('60-81298', 'Grayson', 'Waelchi', 'Kuhlman', '616jasper07@example.com', 'UNC-CN', '09931969112', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$GTVQKkZH5jv3Nl5WclICxuPDfHPuBVVxCeIdpZkQNAjkHAZr7yDYG', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('60-83099', 'Zora', 'Hartmann', 'Torp', '273celia.johnson@example.com', 'UNC-CCS', '09830815400', 'Bachelor of Library in Information Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$5/vPENDDxpWVEhuKNims3OimHfLMhxJ/3GTfPBWi.fsfJ5ocKHS72', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('60-86112', 'Lorenz', 'Donnelly', 'Carter', '521aracely06@example.net', 'UNC-JHS', '09954713717', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$QPvMkCjqYVARdTSWXHNA9edTAlNekXh7LYZwblOxau5JguEJ6ZP.6', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('60-89058', 'Augustine', 'Wiegand', 'Osinski', '603darius.jacobs@example.org', 'UNC-SHS', '09253196548', 'Technical, Vocational and Livelihood', '3', 'defaultAvatar.jpg', 'active', '$2y$10$m.Eg0tgCWx1EMQ7h8RiHaeUs829iHpzFbHQGohIT72ucU8XPl0FSy', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('61-00687', 'Rod', 'Lakin', 'Kohler', '170bud67@example.org', 'UNC-CEA', '09515743279', 'Bachelor of Science in Electrical Engineering', '5', 'defaultAvatar.jpg', 'active', '$2y$10$AJd8i/fCekh1Cd3xbW/cmefCmWG0PElLD7Y6bDla7.rR7MDg8PaOi', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('61-62992', 'Dane', 'Hoppe', 'Russel', '491ross.rutherford@example.net', 'UNC-CEA', '09044716821', 'Bachelor of Science in Mechanical Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$ZUo.81o71CGVDZxKn1ArPu0oUvTQuXQUrvrh4em.H8frbPZJsMw4i', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('61-63891', 'Imani', 'Gerlach', 'Buckridge', '405carroll.deangelo@example.org', 'UNC-ELEM', '09637676216', 'Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$nQJqlBsOd3K7NPGu6k.8WOlZcLBy0BD2aJYpPjf05UBCkkaasYOce', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('61-71420', 'Cecile', 'Pollich', 'Murphy', '533nicklaus01@example.org', 'UNC-LAW', '09766238451', 'Refresher Course', '2', 'defaultAvatar.jpg', 'active', '$2y$10$bm9ZXJ17ZNjjYHLwVFA0Bu8Dtf4S9G5hiHn0wH3ByU0qFR2i5rQEq', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('61-82776', 'Randy', 'Gutkowski', 'Bernhard', '509lmckenzie@example.com', 'UNC-CBA', '09538615570', 'Bachelor of Science in Accountacy', '2', 'defaultAvatar.jpg', 'active', '$2y$10$3sjJ6rI0afsMgxYfHKPEkuxBj6NWRbEO2/jPX3usLbVZak4yCmtSS', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('61-84034', 'Alex', 'Ward', 'Ritchie', '078zcollins@example.net', 'UNC-GS', '09072971529', 'Master in Library Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$GQJtvqO1xAnd2w4zlHiYS.9hCIOaGPJ9HdJt5F1zq4ZuOQn1OiMuO', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('61-84574', 'Gilbert', 'Cartwright', 'White', '712gene71@example.com', 'UNC-ELEM', '09012085110', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$Z1JjGgv4Vzl5fKvnM2LUteJFnbtaBEvd2R/bRZevEn8KxNBMVk3mu', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('62-42217', 'Baron', 'Pfannerstill', 'Corkery', '613alfreda.stanton@example.com', 'UNC-CAS', '09613176891', 'Bachelor of Arts in Psychology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$LKzCM2tQRUfuc5nK0ltzaORRLY0G4Q3r3Hni/YUhHlTKNNqOywqdK', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('62-59553', 'Pansy', 'Kihn', 'Wehner', '832metz.winfield@example.net', 'UNC-CBA', '09636636834', 'Bachelor of Science in Entrepreneurship', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Q1BS.1VwVnaJdnz/Sn1DFOWavZZ2tTLr98EmNkccRydHEw3KZHFw.', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('62-66342', 'Devyn', 'Raynor', 'Mohr', '853pfritsch@example.com', 'UNC-CJE', '09509098854', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$usi9REWxHB0YevqprDh1a.9my3d/4EUbj1fXlvxMTO1VQ.JCJKSia', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('62-94393', 'Iva', 'Hamill', 'Considine', '639fredy.daniel@example.com', 'UNC-CJE', '09080714295', 'Bachelor of Science in Criminology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$K7wyUj9MwoxWPh0KEQ1h.O1UhJ8pOOVeb9rD9smrnbwWl2AsiyPwG', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('62-94643', 'Garth', 'Bednar', 'Gerlach', '653travis.wiza@example.org', 'UNC-JHS', '09606664283', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$PEVPUjrFoj5R/YJSunXJ8.il6d2lAd3yVy8pr.W6PvdBZiu3NMgP2', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('63-00613', 'Alberta', 'Fadel', 'Block', '796rosalia.breitenberg@example.com', 'UNC-JHS', '09385508017', 'Junior High School Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$wmD7ob.EaWTrJV.CbDmuO.0su4aLbB7BkQ0xHUD6EgOS8gFM.Jmci', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('63-13245', 'Trudie', 'Herman', 'Wehner', '524preston70@example.com', 'UNC-LAW', '09092504546', 'Master of Laws', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Bf.Nt3iYOP5lD4m8OHi68eiVAl/9nze5isC7Fbrt6QXQuwKO0UyFa', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('63-15604', 'Perry', 'Blick', 'Lockman', '393ostrosin@example.com', 'UNC-CAS', '09783194971', 'Bachelor of Science in Biology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$ARApqxoPLo0sxYwly/kvJOcQAno1V8dmGaamIoOaRFSW8hAHk3Wyq', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('63-18338', 'Lilyan', 'Grimes', 'McKenzie', '245econsidine@example.net', 'UNC-CN', '09508854261', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$sS4CVYTO1Q0NM/cq2DY8A.BlHLOdzDKOSOWH8Q0g8foLUYpuoHjFO', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('63-38691', 'Isac', 'Abbott', 'Prohaska', '858ohara.ellsworth@example.com', 'UNC-CJE', '09228483800', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$TCHUurosGtmMaQOc.LMTLeUDNLpIfDyf53YWKAIarVq4vrcB3RQxS', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('63-45986', 'Verlie', 'Jerde', 'Bahringer', '006monique28@example.org', 'UNC-GS', '09077373123', 'Master of Science in Environmental Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$2fuhgFziyHNW8tRa5PbZne4LRQT0hJXnwocHEdgQrFVVYWGVIlk9u', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('63-52084', 'Abigail', 'Emard', 'Rempel', '497leonor.ledner@example.com', 'UNC-CBA', '09336364641', 'Bachelor of Science in Entrepreneurship', '3', 'defaultAvatar.jpg', 'active', '$2y$10$FXcRysn9rgUhUpWEiWRfDeibzzusxiFEzTQuuO5XKz2OKKBVeUTwW', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('64-13242', 'Terrill', 'Cronin', 'Roob', '405geovany30@example.net', 'UNC-CN', '09191716233', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$X8H2UdLfNHuBeTVFaNUET.xVbf3471SkHyOlpJfMzAOb7p50aYA8a', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('64-16077', 'Maryjane', 'Davis', 'Hegmann', '677edwina85@example.net', 'UNC-CEA', '09981467747', 'Bachelor of Science in Mechanical Engineering', '2', 'defaultAvatar.jpg', 'active', '$2y$10$2spVTFVuA1fu0JzgR3i3aeXP3ymL7oW59Vw1D9NzVY7oFf/RWJFrS', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('64-18342', 'Jalen', 'Prohaska', 'Stark', '452mcdermott.rachel@example.com', 'UNC-CAS', '09830214195', 'Bachelor of Science in Environmental Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$O46Tnl7bLz5YQ5VKN6GOreKVSqXxwvXmSm75bb4pYlIrPWUmfClBa', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('64-32320', 'Delmer', 'Vandervort', 'Satterfield', '559jbartoletti@example.net', 'UNC-SHS', '09277365576', 'Technical, Vocational and Livelihood', '3', 'defaultAvatar.jpg', 'active', '$2y$10$hP6lDwIcIbjuumFa1Ljw3OAGMIeVzedPD5DG7VFA/gkqUi4A6wxpG', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('64-49697', 'Layla', 'Botsford', 'Pfeffer', '537ccorkery@example.com', 'UNC-CBA', '09959977900', 'Bachelor of Science in Entrepreneurship', '4', 'defaultAvatar.jpg', 'active', '$2y$10$MFHOGktSOSaGgUjjrikGj.dmGv2IUyF96ZUK50FqoBG3nPVFrHWom', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('64-49995', 'Clara', 'Berge', 'Borer', '783samara46@example.com', 'UNC-SHS', '09408720773', 'General Academic Strand', '5', 'defaultAvatar.jpg', 'active', '$2y$10$CNk8FLhsjclPqwlELgWcC.Nc3VsytsrAnhnrvSxnh2t5Cdwjr3vou', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('64-51446', 'Vickie', 'Towne', 'Koss', '769dietrich.hermann@example.org', 'UNC-CEA', '09428879315', 'Bachelor of Science in Architecture', '2', 'defaultAvatar.jpg', 'active', '$2y$10$Kg4c7TL23gdxtzL3SUfXs.S.hCkkrHZhRXbZp82YZVInnS4LgRk0.', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('64-52270', 'Lisette', 'Davis', 'Kunze', '396apfeffer@example.org', 'UNC-GS', '09900005218', 'Doctor of Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$8CaW8pyIoOT9XtY0q.qxOuxUQXjpyeznOBEwZb.q8Zugvk.C930ZG', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('64-73212', 'Vena', 'Hermiston', 'Crist', '863flowe@example.net', 'UNC-CJE', '09141805628', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$gMUEoLJFpboHEmFcu1tm3.dVyhNvmDBMsqAmXupLJpbxxD2R.cAum', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('64-76599', 'Whitney', 'Bartell', 'Okuneva', '344andre.rath@example.net', 'UNC-CEA', '09177695409', 'Bachelor of Science in Mechanical Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$HTPrpTFNaE4XXBpzTiA4B.JCBhHOo7Ebv.D6SLc95y4WcAShC.F.a', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('64-80937', 'Jaylon', 'Johns', 'Waelchi', '826remington.reichert@example.org', 'UNC-GS', '09392552731', 'Data Analytics Certificate', '3', 'defaultAvatar.jpg', 'active', '$2y$10$8fJHpH/M21ke47tCWTBJtOWyk5dBLIiAZv/tPK8eBMyyL0zXJiOGi', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('64-81385', 'Edison', 'Parisian', 'Emard', '204claude.abbott@example.com', 'UNC-CN', '09218756570', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$enuDfq74/gERV6evXhdpeuzFKPHh1NTr3zawuVPqnqEVbiyFi4Knq', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('65-11749', 'Patricia', 'Marquardt', 'Bahringer', '209rbartell@example.org', 'UNC-LAW', '09786956176', 'Juris Doctor', '3', 'defaultAvatar.jpg', 'active', '$2y$10$hToN9/paJRwbIZGpYO7Q.eVE.ssSvHg/CNE7pXLlY9BI2prbk9o36', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('65-33601', 'Jerome', 'Reinger', 'Denesik', '470block.ozella@example.com', 'UNC-CN', '09222914813', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$ggiok6vMUH8w4Sm8OYtW1eGkt0eMsgCO1tBa5dnW7LZjPoS8Tfefi', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('65-34094', 'Lavinia', 'Bednar', 'Rath', '355cmaggio@example.com', 'UNC-CE', '09150621474', 'Bachelor in Physical Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$i.IuT2NRllTypTeKi4FiDuDcVEwDW2oP21h/7x8dMpsGhY4Hz7abu', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('65-64177', 'Sigmund', 'Krajcik', 'Bayer', '239guadalupe07@example.com', 'UNC-CN', '09700860320', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$24GVkpkh6DibKMLtnDl2zOE/LIOgYDhoNneCEyVLFBGPIEW1my48O', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('65-86813', 'Trey', 'Bergstrom', 'Swaniawski', '742ned18@example.org', 'UNC-CBA', '09728642518', 'Bachelor of Science in Hospitality Management', '5', 'defaultAvatar.jpg', 'active', '$2y$10$UK8Pjs4GkHT/jRrHhRtjHe4jiuF6pY.qp05v1dCCaN4IReYcrWCim', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('65-94425', 'Margarette', 'Grimes', 'Turner', '583ybogan@example.net', 'UNC-ELEM', '09160024755', 'Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$SnP/sA3v/p1I7NrL5AIbwewjQI84h4fYHjmSpyQMUZn9WNhXPoEsi', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('66-02783', 'Fausto', 'Johns', 'Gutkowski', '612christ.mclaughlin@example.com', 'UNC-CBA', '09707065966', 'Bachelor of Science in Accountacy', '3', 'defaultAvatar.jpg', 'active', '$2y$10$/UWl3jd0LEdo.83aBdu.JeWgp32l4boCr.2j5B0mzvh.qK.EbUT2m', NULL, '2022-03-24 02:33:58', '2022-03-24 02:33:58'),
('66-07272', 'Germaine', 'Gerhold', 'Marquardt', '356dalton78@example.net', 'UNC-CE', '09215417422', 'Bachelor in Secondary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$HXbThR6WGLstHHn8xqPdcuhMhpv1kinpORHqfGQcockrEmUJfQzL6', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('66-43911', 'Carmine', 'Harber', 'Goyette', '090leuschke.christina@example.net', 'UNC-JHS', '09643405006', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$VQEyPApJd4.dfgQbIj/LkO1O1kguPHdjzoyCjGUZ4fFNoZvEbQ9ly', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('66-80371', 'Vito', 'Kutch', 'Legros', '191qarmstrong@example.net', 'UNC-ELEM', '09277703815', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$p5/9BkU6rsvO81rzmcz6F.2/uLcK3vqy3K7vrHuMU2PPV6H2OJY4.', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('66-86310', 'Saige', 'Schumm', 'Ferry', '832pwilkinson@example.org', 'UNC-SHS', '09957179804', 'Science, Technology, Engineering and Mathematics', '1', 'defaultAvatar.jpg', 'active', '$2y$10$rYXxhykaucBH3DAtVpD0VuOh9QRWnnAFlkUcj9vnl/t9pJqxzzkQS', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('66-97996', 'Ashleigh', 'Corkery', 'Ebert', '340vesta38@example.com', 'UNC-CAS', '09193061875', 'Bachelor of Arts in Political Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$I.8dRG.cVURGnxiYs76gbuylbvwqM1MllRhNWM1ZnYmeIkZXa4KU6', NULL, '2022-04-25 23:00:20', '2022-04-25 23:00:20'),
('67-23801', 'Darrel', 'Johns', 'Osinski', '395hbarrows@example.org', 'UNC-GS', '09632014665', 'Doctor of Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$9QucO5BpNO9BKz7hNlYOW.fi5ZKyo7uhYu71nqRW4tV6tcYQVaLXW', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('67-43918', 'Hayden', 'Schiller', 'Bogan', '676vbeahan@example.net', 'UNC-CEA', '09319281479', 'Bachelor of Science in Electrical Engineering', '3', 'defaultAvatar.jpg', 'active', '$2y$10$ECiEt7AvlPaJD7H0i89ao.NqGSGut93D/Ljw7Vf2b.kSr5QU11jhu', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12'),
('67-44047', 'Gage', 'Fahey', 'Mosciski', '986ndickinson@example.org', 'UNC-CEA', '09002989703', 'Bachelor of Science in Electrical Engineering', '2', 'defaultAvatar.jpg', 'active', '$2y$10$XbMol23vss4Xy39XhOvh.OUrk3bWtuP64O0BA0xlLeCkYHstjL4JG', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('67-73688', 'Dawn', 'Hilpert', 'Anderson', '386dhessel@example.org', 'UNC-CCS', '09748902338', 'Bachelor of Library in Information Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$EBJdA14LNjqroMUIN1cRnOGZAsQfuiCKUG5GXIYZdPFf.dx6JSiOq', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('67-87267', 'Johnathan', 'Douglas', 'Maggio', '899layne.doyle@example.net', 'UNC-CN', '09129608340', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$TKCbUeppukLW1YNzfUCc9.5QqWs4fnkrdWvAF8nZanRPfHyHwE6IO', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('68-09829', 'Cleo', 'Wehner', 'Thiel', '156clifton.mertz@example.org', 'UNC-CAS', '09453914162', 'Bachelor of Science in Environmental Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$OTrFYhRwGO4jxN74TAN4j.Y3OKGTd2UnXxYchIY8sHL/7M.TP8MAe', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('68-10690', 'Jovani', 'Denesik', 'Quigley', '628camren45@example.com', 'UNC-CEA', '09621830092', 'Bachelor of Science in Architecture', '2', 'defaultAvatar.jpg', 'active', '$2y$10$cpeytuy2jD7rw8evfdKIQeDipQfuDHKb8XDBlcQQC3Bp9iMQ03ftS', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('68-22670', 'Pascale', 'Jacobi', 'Langosh', '806abby.kessler@example.net', 'UNC-CJE', '09211769652', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$YVPI5PUp4q3jNZIdngHDjOdTAXAERHNLkoMc0uDBY1sZTvYgJmSqy', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('68-30834', 'Alison', 'Runolfsson', 'Reichel', '154queenie83@example.net', 'UNC-CCS', '09585541802', 'Bachelor of Library in Information Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$I7o1TgPZTsnKr995vRpr8uegj2acZ2lRf3LX948xXpMfSnNjp0rLC', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('68-83770', 'Faustino', 'Hill', 'Erdman', '088leanne48@example.org', 'UNC-CBA', '09590893899', 'Bachelor of Science in Accountacy', '5', 'defaultAvatar.jpg', 'active', '$2y$10$vyh5z0kGgz6x0hjyhCS3guBnRLcdTCiFUSnIimachRn2x5uRio2H2', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('68-86707', 'Saige', 'Heathcote', 'Yundt', '892mgulgowski@example.com', 'UNC-CN', '09944559318', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Hj0M6x0vOI.tXhrM6eKUHOck7uLC7MbqjgkaBwjG5q6iDNjF/MQpi', NULL, '2022-03-24 16:16:23', '2022-03-24 16:16:23'),
('68-88515', 'Immanuel', 'Schumm', 'Murazik', '283uschuppe@example.net', 'UNC-SHS', '09201104337', 'Science, Technology, Engineering and Mathematics', '2', 'defaultAvatar.jpg', 'active', '$2y$10$aUIChCeuonmKMgOMWiUfFeSL1Cbov26i3WPmX17vH4MLCsajIHrXK', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('68-89257', 'Briana', 'Grady', 'Jast', '533rkshlerin@example.com', 'UNC-CCS', '09363516700', 'Bachelor of Science in Computer Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$phIHM6KNfl9uVq0lEuu07emdrFNbWb6zywi2i9CMPZzrEo86DDAPG', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('68-93018', 'Lisandro', 'Kris', 'Heaney', '907jast.ben@example.com', 'UNC-CEA', '09026367421', 'Bachelor of Science in Computer Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$HKcmPbOSeZWfHyzKPgrRbeNZPigStYHX9p/14qjNTkYeqybPgBIC6', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('68-97831', 'Vern', 'Larkin', 'Shields', '203zlynch@example.org', 'UNC-CN', '09912668283', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$bXLxq7oZocHptQRfglVCt.gLb5TeexwL/762YGy9a4l993xKk5fAe', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('69-00813', 'Vilma', 'Anderson', 'Legros', '675orpha.borer@example.net', 'UNC-CJE', '09308829980', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$EweRsPJwtQoxKdirDXxqPO6s3Yzh3G6QjVtEfLa4hKG5zXAFurbOG', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('69-17076', 'Johnathon', 'Block', 'Medhurst', '588akeem75@example.com', 'UNC-LAW', '09242148152', 'Juris Doctor', '4', 'defaultAvatar.jpg', 'active', '$2y$10$5qUZ8jmLLbYowVnEXhmsqOfce5qbbEJP1yKTX/g4cv1SlOQu1Q1Xy', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('69-24798', 'Leta', 'Morissette', 'Parker', '049oren26@example.org', 'UNC-CBA', '09293026705', 'Bachelor of Science in Accounting Information System', '4', 'defaultAvatar.jpg', 'active', '$2y$10$ilxM7BH9/JXeQfw2veaFVOLwhCB4QC6n7QeWQmz63/Yo2KaJffiSq', NULL, '2022-03-24 16:26:08', '2022-03-24 16:26:08'),
('69-42113', 'Yasmeen', 'Erdman', 'Deckow', '497jannie.harris@example.com', 'UNC-ELEM', '09817810706', 'Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$daMz3aLcmKNh9GnB7EBareWl1vckjvq0iUodXrACEtvKQr9g6qC2K', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('69-56595', 'Stephen', 'Batz', 'Welch', '994emarquardt@example.com', 'UNC-CBA', '09485888699', 'Bachelor of Science in Accounting Information System', '1', 'defaultAvatar.jpg', 'active', '$2y$10$GNdpty68ep69CexA3E5dLeJpsLSyh024vM/.y9hLODq0RDsfqv16u', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('69-81489', 'Kiara', 'O\'Keefe', 'Bashirian', '736myundt@example.net', 'UNC-CCS', '09542014746', 'Bachelor of Library in Information Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$5z9ms66D5f7sM2yqGpWpXe40GKvq.nf7lxnc3cUzhbpWu9cf9q442', NULL, '2022-04-25 23:00:20', '2022-04-25 23:00:20'),
('70-74375', 'Malinda', 'Rempel', 'Farrell', '519kshlerin.novella@example.net', 'UNC-CJE', '09306034914', 'Bachelor of Science in Criminology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$LK2TBtj2CxwXx2odl7Gz.eieKTgnQgGr1eUkyUnQ5RHtKN8/GvtEi', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('70-84909', 'Reva', 'Maggio', 'Gutkowski', '575collier.jada@example.org', 'UNC-CAS', '09979512453', 'Bachelor of Arts in Psychology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$dl/mGGYKasv31G2dULZ2F.3WARcopdOEJ6SbNCpS0z3bPeENes0k.', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('70-85528', 'Korbin', 'Ernser', 'Dibbert', '251floy54@example.org', 'UNC-CN', '09398351342', 'Bachelor of Science in Nursing', '2', 'defaultAvatar.jpg', 'active', '$2y$10$/LEnxeHgDnRYP4wkCon3tOVwdDYbqAW6ZO0Etxtxlkysi3EnS6hsy', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('71-03771', 'Adella', 'Barrows', 'Goodwin', '329lakin.twila@example.org', 'UNC-CE', '09907805913', 'Bachelor in Physical Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$TJ5FBvgITeZf6Opsxr0xdOK0MPNHOmnPxJUiVuLPAhbMhuR01itU6', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('71-06779', 'Aubree', 'Murray', 'Schiller', '655mshields@example.org', 'UNC-ELEM', '09080595036', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$oHDIznoiVerLAWLfVefA2e.msWvN6/qhyieXb49uyJvzzfSXy1tGO', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('71-14824', 'Myrl', 'Nikolaus', 'Hartmann', '843fromaguera@example.com', 'UNC-CN', '09329205378', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$hc9wtDVv1eGhshyjeRLDbu4NgQw430OAKvJZFO0hbhTshKP3BtVjG', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('71-19594', 'Ola', 'Bergnaum', 'Hansen', '818fhintz@example.net', 'UNC-JHS', '09697828637', 'Junior High School Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$o1QG0PpazDhNFYMDiuj0LuxmEimS14AQ4aWYReGYXazgi8zcPCJa2', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('71-21226', 'Sean', 'Kreiger', 'West', '898hkoepp@example.org', 'UNC-SHS', '09030930033', 'General Academic Strand', '4', 'defaultAvatar.jpg', 'active', '$2y$10$JlFZSmgQbYUtXLqUs2AUbeGM1smlGNl9nLolluGX3NrbNNB9FKjlW', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('71-40382', 'Logan', 'Hansen', 'Corwin', '988rice.katelyn@example.org', 'UNC-JHS', '09797579681', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$l0p6EPLbcPpykx7pjhakCerv52i6B1N7nV/ikuScyMIR9NOWOHo8m', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('71-46005', 'Oral', 'Kautzer', 'Stamm', '635curt.jaskolski@example.net', 'UNC-GS', '09595217416', 'Future-Ready Teacher Certificate', '4', 'defaultAvatar.jpg', 'active', '$2y$10$eWa8LvP1YlMmUD1PWxWWWOP8PIA7x8IXjnObgOH8YXBZpYDyYPq02', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('71-55436', 'Charlotte', 'Hilpert', 'Weber', '088fritsch.beatrice@example.org', 'UNC-CJE', '09450692180', 'Bachelor of Science in Criminology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$HfITBiM0cKOBK2qRnQXb0OVsack867z8XcJ2MTgplePmlO4d4CzIK', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('71-58109', 'Jaeden', 'Corwin', 'Thompson', '534johnson.hulda@example.com', 'UNC-CN', '09400653355', 'Bachelor of Science in Nursing', '2', 'defaultAvatar.jpg', 'active', '$2y$10$3IOcRjK.RWXcm7kz9/He5.RktO4MqS4KesnIRqa8GLd0RHY8K1qru', NULL, '2022-03-26 02:27:45', '2022-03-26 02:27:45');
INSERT INTO `students` (`student_no`, `firstname`, `middlename`, `lastname`, `email`, `departmentCode`, `phone`, `course`, `year`, `avatar`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('71-75528', 'Friedrich', 'Lesch', 'Mueller', '055cordell92@example.net', 'UNC-CEA', '09821836582', 'Bachelor of Science in Civil Engineering', '3', 'defaultAvatar.jpg', 'active', '$2y$10$KsEjakXoLTOvGgARCYgnEe9iSeT3NdPKxdX4uX4Nh3xfdDuHyKQiG', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('71-91178', 'Kaylin', 'McClure', 'Ratke', '758marisa.gutmann@example.org', 'UNC-ELEM', '09680421885', 'Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$x..8yVa/OL8ALBmZwIIUZu0GCbXs0olsUT9tXaueuK6xS3BCUJlxO', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('72-13751', 'Omer', 'Bayer', 'Kohler', '718vonrueden.deontae@example.net', 'UNC-CAS', '09070197999', 'Bachelor of Science in Biology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$PD8cpFQK5Zq7rL6k/IGcxe3uP7hY4zgE2TfsawklafZItlDnJGZBq', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('72-22609', 'Joan', 'Lang', 'Mraz', '407agutmann@example.org', 'UNC-SHS', '09291162918', 'Technical, Vocational and Livelihood', '2', 'defaultAvatar.jpg', 'active', '$2y$10$IngXelyLkRNeygP058SfaOKfuEQK.G9oSCF7Gk5V/EUddDFrV37o6', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('72-26523', 'Kirsten', 'Wolf', 'Will', '149marlen55@example.com', 'UNC-GS', '09894071855', 'Master of Arts in Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$gXaUHRL3mlodhVx2gMV9vu3jLTH0IyGgt3fpP5k88oeae8eVfJDn6', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('72-60976', 'Madisyn', 'Hyatt', 'Hammes', '967veum.harley@example.org', 'UNC-CE', '09932703172', 'Bachelor in Physical Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$fQbDpmjefBEhiAhv0iyGvOwmui3NY12Nn3rYL1KhjEGCtEu6iWmRK', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('72-75394', 'Hailey', 'Kuphal', 'Collier', '675romaguera.ilene@example.org', 'UNC-CJE', '09423659382', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$qf2sJQsV1IC80HBKIDeEeeU6vXc20z4Y2gmKaF.0eYRHSJz93lAvm', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('72-77892', 'Guy', 'Von', 'Shanahan', '822mary70@example.com', 'UNC-SHS', '09067966170', 'General Academic Strand', '5', 'defaultAvatar.jpg', 'active', '$2y$10$Ue8ennAsMSDhtJV1Om9X5.ENe0rH3Avexgt7k6d5PQTOvK5ibq8oG', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('72-98448', 'Rickie', 'Monahan', 'Becker', '222beer.harmon@example.net', 'UNC-CE', '09489666381', 'Bachelor of Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$WDWjWK9iWNx5hE47F0FbLeN9oNygqnGrMhTw5sVYWp79YjycVFDcy', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('72-99033', 'Alyce', 'Herman', 'Fritsch', '080yschroeder@example.com', 'UNC-CJE', '09109844711', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$8/4ZJda5mIPmOPgp8LQ.4.u6.9WFxR8N3FDUk9yV8ZQttwg7x8vbS', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('73-23797', 'Santino', 'Ryan', 'Homenick', '947kuhic.ashton@example.net', 'UNC-CAS', '09150932370', 'Bachelor of Science in Biology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Cj1XdvfyMdEKReDcSoE0Guvnribev/8.NO/x26QaZf26j9m.D7JDO', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('73-34311', 'Alyson', 'Heller', 'Walsh', '837rbergstrom@example.net', 'UNC-CJE', '09069135311', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$AXzWnwWEQsPgsQR6Qdk7RO6wiDcy7B0dLwUGB8cS7VqNeYFeb7Sjm', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('73-81611', 'Richard', 'Christiansen', 'Powlowski', '882santos32@example.net', 'UNC-SHS', '09349709188', 'Science, Technology, Engineering and Mathematics', '3', 'defaultAvatar.jpg', 'active', '$2y$10$/RzmcDWxhn9tGr7YmuGfRer3JJkgfhSQxGFlFSHelxJBFA1b4ALY.', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('73-89717', 'Harold', 'Hirthe', 'Volkman', '066kayla.heller@example.org', 'UNC-CJE', '09883949620', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$EyA/OJEQCz4YXkNXpX30eOxLYI9paC16YMjmjfU6hBu3Daxj.FQ4O', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('73-98933', 'Tressie', 'Hudson', 'Williamson', '129devyn22@example.net', 'UNC-GS', '09148678888', 'Data Analytics Certificate', '5', 'defaultAvatar.jpg', 'active', '$2y$10$K0vwR/raCdgw7CJ6yeLTNu5DpYT4RyHhPDBtuO.qq4reg/LoRIgfG', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('74-00093', 'Victoria', 'Russel', 'Howe', '980legros.randi@example.com', 'UNC-CN', '09253982245', 'Bachelor of Science in Nursing', '4', 'defaultAvatar.jpg', 'active', '$2y$10$VtOWBFTr.fb/2Oe.MeUVN.ql1nA5.X/UipJNGIIMR6/u7F6hRnwAu', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('74-14067', 'Brigitte', 'Littel', 'Murphy', '301shields.gino@example.org', 'UNC-GS', '09365925073', 'Master of Arts in Teaching Mathematics', '3', 'defaultAvatar.jpg', 'active', '$2y$10$2HHq3.IkV3kmiV9T0R/6TOYeL5n5A.uHmtCjGGIP9u8hBCSeXMbU2', NULL, '2022-03-24 16:16:23', '2022-03-24 16:16:23'),
('74-14216', 'Jaqueline', 'Kerluke', 'McLaughlin', '138edd24@example.net', 'UNC-CE', '09446109001', 'Bachelor in Secondary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$eR5lRsEN7dM6lZXh7YUcPesSmHEjdry96TiHiLiA8Y7/5aTRSS.ES', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('74-14455', 'Aiden', 'Bauch', 'Pouros', '735cathrine91@example.org', 'UNC-CAS', '09686871467', 'Bachelor of Arts in Psychology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$5jhuRnzEnopdJSI26rSIie8cNWqjCptIfow/xCJJ6RPwC/7J1mQoW', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('74-30834', 'Jean', 'Langosh', 'O\'Keefe', '106gbernhard@example.com', 'UNC-ELEM', '09069669155', 'Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$bJ7iaeQoJqimrT1PxYakXuS/6v1dAxEeuuQ8gvzPq0pD/1UKPLSnO', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('74-35772', 'Halie', 'Metz', 'Mertz', '970ken81@example.com', 'UNC-CE', '09257962282', 'Bachelor in Physical Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$WcXwTJESyONk23rHTToVhO8aVfyZ6l1iHp756jx6z.zRr1hQ.TWeq', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('74-46710', 'Dewitt', 'Cummings', 'Thompson', '786bud05@example.net', 'UNC-CEA', '09216387557', 'Bachelor of Science in Civil Engineering', '3', 'defaultAvatar.jpg', 'active', '$2y$10$xuM20AUv0szc7C1j90IgFuAcUljMZCCJIIwmtfk4q/8B/xnS2JhQO', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('74-54724', 'Bridgette', 'Lemke', 'Hilpert', '818priscilla.zemlak@example.com', 'UNC-CCS', '09002109338', 'Bachelor of Library in Information Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$DfZ5BQbpjoY9ATy22dYeV.7RdjgfT7dK4nOeYu0nx05LCvwHzDbGC', NULL, '2022-03-26 02:27:40', '2022-03-26 02:27:40'),
('75-14086', 'Benedict', 'Walsh', 'Hermiston', '047ybartoletti@example.org', 'UNC-CCS', '09796120029', 'Bachelor of Science in Information Technology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$CHmQ7go0Pi4ucp1m4WJg2OcS1rXXa2V4mHqVvjuJnFPpiInDTuQmO', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('75-63569', 'Gennaro', 'Schumm', 'Cassin', '223omer54@example.org', 'UNC-LAW', '09916405196', 'Juris Doctor', '2', 'defaultAvatar.jpg', 'active', '$2y$10$E/BGNveb8rHxWAEVWoIeX.dl3hgylXRcWXUKVy6Di.6iAsaTl7CsW', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('76-06484', 'Joseph', 'Sawayn', 'Bailey', '277adam36@example.net', 'UNC-CN', '09384677492', 'Bachelor of Science in Nursing', '2', 'defaultAvatar.jpg', 'active', '$2y$10$RFBeBb.PhR5Sl4fRnsJAAuF6h63pcxW1/nLzGo1g16aRZy7yBbx1u', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('76-31658', 'Katarina', 'Schiller', 'Hauck', '721ypollich@example.org', 'UNC-CBA', '09035400992', 'Bachelor of Science in Hospitality Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$yEw7umhAoVoM/gAIB1Qum.uYFR8Af1oLyx6EsmdajhVjpylOz78Ay', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('76-62046', 'Josefina', 'Welch', 'Abshire', '401rudy50@example.com', 'UNC-CCS', '09556262892', 'Associate in Computer Technology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$qpkA8NWz4T/aGOOYkhL70OQMVxr9rV1QpiddZ83BUq5CWJHUdBC.K', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('76-69028', 'Gideon', 'Kuhn', 'Hyatt', '569daphne68@example.com', 'UNC-ELEM', '09814647352', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$gSYoAWjkWbtpby2tEuvFXOPK5R4Hg/bMxijkJpBJxd9GdOBNEis7S', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('76-70797', 'Lilian', 'Dickens', 'Welch', '873theresia.howe@example.com', 'UNC-CCS', '09282542522', 'Bachelor of Library in Information Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$AIMU1pv4cEa.mOdV/e2CkOdtXjw1gpAZtVaIeotpj89DvCks/75Uq', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('76-96899', 'Abraham', 'Lang', 'Murphy', '716schultz.charity@example.org', 'UNC-CBA', '09171614890', 'Bachelor of Science in Tourism Management', '2', 'defaultAvatar.jpg', 'active', '$2y$10$Vl/ZOpUtGAOLT/o8G5hGSeaJe3HhWe1tjwXGjHBryqMSI/tfnROgi', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('77-25587', 'Shaina', 'Stroman', 'Kassulke', '856yoconner@example.net', 'UNC-CJE', '09380596811', 'Bachelor of Science in Criminology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$mKEiuD6yoNnmf86hE33PJ.T7/hAXDNFWH9suRfVSMWe9f9mldn7fy', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('77-26356', 'Desiree', 'Lebsack', 'Howe', '408uluettgen@example.org', 'UNC-CE', '09811619632', 'Bachelor in Secondary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$jPQNqyuiL2GLlvdQ3kmd..4QAmMRrVeB2Zb6Zck6FZgvG2Tc1GaDK', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('77-62525', 'Christ', 'Murphy', 'Strosin', '096uriel.hamill@example.com', 'UNC-GS', '09447815338', 'Master in Library and Information Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$g7nG.oIesbtXataa0v4dQe.jgW7FVhOdkegq29L/SBqlMKSDvb6Py', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('77-92100', 'Cathrine', 'Haley', 'Cole', '953brennan26@example.org', 'UNC-GS', '09302282850', 'Master in Library Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$elntVRFR0jKSgoGcrR6.TOakjXULqN22tM02k4jlLZAmDcHRir4ay', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('77-92276', 'Raheem', 'Ortiz', 'Aufderhar', '371grant.dexter@example.org', 'UNC-CEA', '09321020930', 'Bachelor of Science in Civil Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$YWiPkks3oFbKKrB6FMZ68uJGqL5KPIG2rgCF0nzpQuWqylIqg6uJi', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('78-05088', 'Michelle', 'Osinski', 'Kihn', '076urowe@example.net', 'UNC-SHS', '09457193014', 'Accountancy, Business and Management', '3', 'defaultAvatar.jpg', 'active', '$2y$10$dwvgy5xiXomF7a/lVA3JI.RjrKwbJoGotV3M5WeWRcFN39cc0qp8q', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('78-09242', 'Deon', 'Renner', 'Trantow', '725rcummerata@example.org', 'UNC-CCS', '09025422058', 'Bachelor of Science in Computer Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$hl0d6ogi8oFnZv5Ult/cp.K9enu5CTFQ9QHU2HCdgJdqb81EyTaNW', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('78-10632', 'Charlotte', 'Sanford', 'Bins', '416hosea62@example.org', 'UNC-LAW', '09960774721', 'Master of Laws', '4', 'defaultAvatar.jpg', 'active', '$2y$10$4SSLlYFWYQVYQEjRQxe2k.fBSy9mUXiqFj20DzdVB4vA45R14rUXC', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('78-48638', 'Leslie', 'Abshire', 'Schulist', '935gturner@example.org', 'UNC-CAS', '09608128878', 'Bachelor of Arts in Political Science', '2', 'defaultAvatar.jpg', 'active', '$2y$10$YVcO4Zujwo8lqY4XrKy54ObRqZbIWyBonT77UW7zq3oBykf6ZZDo2', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('78-76914', 'Madisen', 'Lang', 'Heller', '189kirlin.shany@example.net', 'UNC-CN', '09757573319', 'Bachelor of Science in Nursing', '2', 'defaultAvatar.jpg', 'active', '$2y$10$drsy5xi59weFzJKcTTQSF.3Hm6CvOpcIWsKNJhh7eQCzb7oZDERaW', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('78-83821', 'Kane', 'Herman', 'O\'Reilly', '838opal.stracke@example.org', 'UNC-LAW', '09589503986', 'Master of Laws', '5', 'defaultAvatar.jpg', 'active', '$2y$10$FzxOw0rOaTB8wXCbi6DJCudfBz9SaCz153QMHYo/vklx6LybMHylm', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('78-92208', 'Joanne', 'Beier', 'Greenholt', '748lmcclure@example.net', 'UNC-SHS', '09067492458', 'General Academic Strand', '4', 'defaultAvatar.jpg', 'active', '$2y$10$w0ytjc9B5I37guj/TlwZRuEvDP8WCYuFk1DuHtzZEnUbrG1Uf5U3y', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('78-93456', 'Jimmie', 'Wisoky', 'Sauer', '905marquardt.reuben@example.com', 'UNC-SHS', '09976848595', 'Science, Technology, Engineering and Mathematics', '1', 'defaultAvatar.jpg', 'active', '$2y$10$jlAXL.xYVRI7MEe7OpuSsOCMEeYExK76XI2czt.fzRQKQoneYWNMO', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('79-13897', 'Jesse', 'Marvin', 'Heathcote', '752qkerluke@example.org', 'UNC-CN', '09587961277', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$9H9qmDIzBejMQ2HUZhuZ.O3hmRt7ol27OeyFkWR3oLN9XLRKkeFo2', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('79-15938', 'Dannie', 'Feeney', 'Nikolaus', '204kuhic.rudy@example.org', 'UNC-CJE', '09547543410', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$ciPxdkYMaNyV8RBmp3kQiOO6m2fxX6V2yMau1Gx9bh6fq0U3eFmJ6', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('79-42786', 'Jannie', 'Blick', 'Wintheiser', '330klind@example.com', 'UNC-LAW', '09496901236', 'Master of Laws', '4', 'defaultAvatar.jpg', 'active', '$2y$10$evCJ4GgNFj8lLfRCSlIYMu6pzLOmcKhMkzKi4Rf24BSnxPieLFsj6', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('79-53053', 'Roel', 'Willms', 'Fadel', '764fmetz@example.com', 'UNC-CCS', '09357207697', 'Bachelor of Science in Computer Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$IHeX9YdUFaiTvHpX9aNHhOVfL6oMJF.A3Qjs7WHWKa5damLF/kjWG', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('79-60810', 'Rylan', 'Hilpert', 'Von', '466jwunsch@example.net', 'UNC-CE', '09179423422', 'Bachelor in Secondary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$emn23dyqZpd4Oh84uhhsXeFiZItyUWUl43B9DITzB9jqTA96Ovlr6', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('79-70700', 'Citlalli', 'Kunze', 'O\'Hara', '015trent.abbott@example.net', 'UNC-CCS', '09359288498', 'Bachelor of Science in Computer Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$boL.sC/IDw2mFaFSIpHhtuVZXoXjWCodHn3b/f3ggHNDG4PtIGgjS', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('79-94465', 'Aracely', 'Kemmer', 'Padberg', '124hgoodwin@example.com', 'UNC-SHS', '09433361374', 'Accountancy, Business and Management', '2', 'defaultAvatar.jpg', 'active', '$2y$10$kLGs0QZr1dr8Q0esLHtGdeuCUpXmOSnozr5CXI5gv7kP9Ls5fiByu', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('80-11266', 'Brennan', 'Wyman', 'Dibbert', '505cornell.fahey@example.com', 'UNC-LAW', '09064782305', 'Juris Doctor', '4', 'defaultAvatar.jpg', 'active', '$2y$10$bQnf0QLQWswywJlm7HS5F.vGJQHPfgg.hQpPCUaOAcldbakJxljby', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('80-44954', 'Mckenna', 'Murray', 'Borer', '266cecil.rau@example.org', 'UNC-LAW', '09637690561', 'Refresher Course', '5', 'defaultAvatar.jpg', 'active', '$2y$10$aUfH7AtBAxmBYWMCd8tly.zm8sM43azc4wIMzYN7tDuyeLEZwDi/i', NULL, '2022-03-24 16:26:14', '2022-03-24 16:26:14'),
('80-86901', 'Imelda', 'Schoen', 'Auer', '554fparisian@example.net', 'UNC-ELEM', '09023677067', 'Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$C3Gms06oxk4OFbQWC282I.TuDmcS3/mnicsem.64I11wj2/IORoey', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('80-95497', 'Kariane', 'Bode', 'Armstrong', '235adaline00@example.com', 'UNC-CEA', '09682046142', 'Bachelor of Science in Civil Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$b.Dd7XwqKh0jsa/PnXVGTuHqJ/zkzmNK4ixauVaEaTpWpgGymf0/u', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('81-06600', 'Luciano', 'Dietrich', 'Abbott', '052welch.jammie@example.org', 'UNC-LAW', '09526767232', 'Master of Laws', '2', 'defaultAvatar.jpg', 'active', '$2y$10$fxZ8muu3AylLxWWRZqhB2eLSrbwetf6wtA7Fiuc4RYMQLqyWjyV62', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('81-16113', 'Wilfred', 'Ziemann', 'Batz', '733jframi@example.net', 'UNC-CJE', '09391015476', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$oeXt1M9NQ.olI8ZTD/lc8Ohd4xYOth8RIxm9tf/Mxri602Yj2Jsim', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('81-54814', 'Rahul', 'O\'Reilly', 'Wehner', '042jose.bednar@example.org', 'UNC-CE', '09246630769', 'Bachelor of Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$rmdfm8JCarWeFCUWWh0/he.e9LKOANcln8BB6JDZvMY1Y1Ed1rw/G', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('81-78690', 'Walter', 'Schuppe', 'Bogisich', '355sandra.zemlak@example.net', 'UNC-CEA', '09785532654', 'Bachelor of Science in Computer Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$EdSL3sEWDQ8yx4Irk.vh6.SJVbZctjdxQ7557b9DMwRGN6Vgbn1QO', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('81-80233', 'Blaise', 'Effertz', 'Kub', '635gcummerata@example.com', 'UNC-CN', '09768596963', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$/mpLKBPyfaMaSpKxz8vFl.3mI.6R32ti6aVMftcg6HoXLkCj4gofe', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('81-90425', 'Assunta', 'Schinner', 'Treutel', '478hansen.willie@example.net', 'UNC-CEA', '09956820686', 'Bachelor of Science in Mechanical Engineering', '3', 'defaultAvatar.jpg', 'active', '$2y$10$/1HCiXjt7kvcE.jGROYGXu49.khN8D5xqhshb/a0JnVamdp/HyF.C', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('82-29547', 'Vallie', 'Hackett', 'Monahan', '729trantow.derrick@example.com', 'UNC-CCS', '09728957502', 'Bachelor of Science in Information Technology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$GkwPO//PztRu6BB3WBTYnuB0WqjIPoCKh4iplqx3dTbZur8QtZhWC', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('82-53325', 'Frederique', 'Balistreri', 'Hauck', '222hbradtke@example.org', 'UNC-JHS', '09862147901', 'Junior High School Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$lQUrspmJUzlRr2iluwENhOq0GsUT1TMBnR4vs.fzXiUNXxapCsotm', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('82-79106', 'Hans', 'Cummerata', 'Halvorson', '412zfeest@example.org', 'UNC-ELEM', '09071291575', 'Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$6CdrA2zxMWWxBcrUWE4Gs.DXV5buM0rF9z8o8oZZce8/syp8Re886', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('82-80667', 'Colten', 'Konopelski', 'Kuhlman', '240shawna91@example.org', 'UNC-CE', '09288539519', 'Bachelor in Secondary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$.AMQXPtnejWyunOVa0T3O.J2LBkIXys1pcYasA5SAEYb4YjUFLsXK', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('82-85418', 'Liam', 'Bernier', 'Fadel', '913vesta.goldner@example.org', 'UNC-JHS', '09310719013', 'Junior High School Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$nxe/10eerp5U6DPdoHTiC.AbycvVl/Cca3c8pTT/blBnFFuV5ItMK', NULL, '2022-03-26 02:27:45', '2022-03-26 02:27:45'),
('83-04441', 'Liana', 'Cummings', 'McDermott', '697sporer.ellen@example.org', 'UNC-CN', '09004435785', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$dy716Kxrzr8F3vqGlGLL.OPWkv8xt5kUf6pKRUgKsiOhDTue8U0RK', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('83-18157', 'Tressa', 'Marvin', 'Adams', '731jany.ernser@example.org', 'UNC-CAS', '09416367550', 'Bachelor of Science in Environmental Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$1/ATctq3sw.uZvSDOjSw8OTfGaRo7brUsC/EBCA8MnUJsXGSQpGjK', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('83-22624', 'Meta', 'Wuckert', 'Parker', '560dominique.rutherford@example.org', 'UNC-CJE', '09100093785', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$3xS4mqRa02pKKLcl.zZdjOUAFuQrjzIZl3ymC9ufqQwie17ixjuTK', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('83-27489', 'Isabell', 'Hayes', 'Block', '013sgaylord@example.net', 'UNC-CE', '09504665198', 'Bachelor in Secondary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$A./gqPgz0CRPVGRS/kWUgOA/DTR2/Z./Qpl6v3mPc9qnzwI3/KEvK', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('83-51552', 'Shakira', 'Corwin', 'King', '660ethelyn32@example.org', 'UNC-CJE', '09885408817', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$4ZWu9m7KTUZG/bkI8lugjOOtqliFS4VNnthM65ZSet4N5VafpSR06', NULL, '2022-03-26 02:27:41', '2022-03-26 02:27:41'),
('83-61464', 'Kadin', 'Morissette', 'Schamberger', '625allene.kris@example.net', 'UNC-CE', '09333027690', 'Bachelor in Physical Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$jFHQc5O0IbxK6hW7pYsFv.dqECtibV81EWxJupcRxoOayYIoHNm0G', NULL, '2022-03-24 16:16:19', '2022-03-24 16:16:19'),
('83-66873', 'Breanne', 'Bartell', 'Luettgen', '745htorphy@example.org', 'UNC-JHS', '09963445957', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$lqFzHFvz7rQP/6GcqTVGNO7VndeZPrmMzKRiylVOILhxQes22.vlq', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('83-67819', 'Ayla', 'Gulgowski', 'Funk', '806elena.zemlak@example.org', 'UNC-CN', '09155241009', 'Bachelor of Science in Nursing', '2', 'defaultAvatar.jpg', 'active', '$2y$10$Gx48.rwXtZg8xtR6/gGiW.pvOXoYHvkRz/zc79zQrTk4XhM97Giiq', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('84-01572', 'Estrella', 'Parisian', 'Leuschke', '630jast.catalina@example.net', 'UNC-JHS', '09272604654', 'Junior High School Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$9EIiJLW.oiL7OdZUyM.KLOuvzQzuCAdN0QuDC7cuzc4qKhPOmAgMm', NULL, '2022-03-25 03:40:41', '2022-03-25 03:40:41'),
('84-03601', 'Crawford', 'Veum', 'Pollich', '993lura09@example.org', 'UNC-CE', '09544795973', 'Bachelor of Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$RRVh9WwHK1zEIEyQpTBZOuXI6rUwIuMYvd/KiFYU53S9NuNKvf6nG', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('84-08038', 'Madyson', 'Frami', 'Brown', '949torphy.francis@example.org', 'UNC-LAW', '09113055839', 'Master of Laws', '3', 'defaultAvatar.jpg', 'active', '$2y$10$zzAx.i.bzz4SlbqL9Hv86ugY9FH1l1bjeXWmLVWpAHk/r71Vbaj5q', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('84-10211', 'Junius', 'Walker', 'Brekke', '040volkman.esther@example.net', 'UNC-LAW', '09506835913', 'Master of Laws', '3', 'defaultAvatar.jpg', 'active', '$2y$10$X50lXAci3xOSCwbEusZGpuDR5Bn7sRaKYoHGpoNl102ysbDvYITWK', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('84-11299', 'Juvenal', 'Langworth', 'Treutel', '416connie66@example.org', 'UNC-CJE', '09186425338', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$ofsfnrlIBf2dduZ3Kp/BNOxpG/5P4x2XqNPGy6xLA1cmH714QBYLK', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('84-17995', 'Melody', 'Bergnaum', 'Braun', '788smith.charity@example.com', 'UNC-CE', '09503311398', 'Bachelor in Secondary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$kjv5Htywg8.NZfIN99npDeqmfdgyOxE1aFgbj2f6Ul0jmpekEK4Xy', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('84-28039', 'Martina', 'Becker', 'Hackett', '974chasity27@example.org', 'UNC-CE', '09175973083', 'Bachelor in Secondary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$2d5qLjzEV9wuwrwMkhjU0.7AuGL.zE3oeaBaenAQOF07tdaI4EV2O', NULL, '2022-03-24 16:26:14', '2022-03-24 16:26:14'),
('84-40524', 'Blaise', 'Boyle', 'O\'Reilly', '032schmidt.josefina@example.org', 'UNC-CAS', '09817509512', 'Bachelor of Science in Environmental Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$NwPWEurgYVB4MZRxufOgROkN4t6SSmDtc5fNcuUQc/gSXZEIQMiYm', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('84-56920', 'Elwin', 'Cummerata', 'Cruickshank', '635erna44@example.com', 'UNC-CE', '09760662230', 'Bachelor in Physical Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$AnDeDKHaVLa5.taUUYG7O.NmefsMP4tO6ixBxNVwbcu0yf/AgU8Au', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('84-65986', 'Tiana', 'Rohan', 'Raynor', '587fidel94@example.org', 'UNC-SHS', '09059136949', 'Science, Technology, Engineering and Mathematics', '1', 'defaultAvatar.jpg', 'active', '$2y$10$D7mUCHiE1POpqUsbPV0lsOOvPX942OuVT1gN738mhSsky7bPHmKa2', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('84-84978', 'Willy', 'Boyer', 'Monahan', '390finn90@example.net', 'UNC-CCS', '09853600135', 'Bachelor of Library in Information Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$L823AjQcUCeupQhKnuYExO85i7q8fc6jQ2WrU1KMn7Pvpwy6ydmD6', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('85-00367', 'Lauryn', 'Marquardt', 'Veum', '372huels.mac@example.org', 'UNC-LAW', '09688479018', 'Juris Doctor', '2', 'defaultAvatar.jpg', 'active', '$2y$10$lGETDOlD6wJrv4k50pltoOF9Czkz1yqvZTe4PI7bjoQsx72JTIpoC', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('85-18889', 'Annamae', 'Hammes', 'Swift', '241vickie92@example.org', 'UNC-CJE', '09249883456', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$VBCIhRl6nhZjpHx.jMS2ZuJQ3CDxG6bGElQyTzv5ldgdGfWVAnIHO', NULL, '2022-03-24 16:16:18', '2022-03-24 16:16:18'),
('85-41592', 'Kylee', 'Collins', 'Welch', '540duane.stroman@example.org', 'UNC-LAW', '09998087424', 'Master of Laws', '4', 'defaultAvatar.jpg', 'active', '$2y$10$4aXkk0mp4k/OcrUNVCUYpOS2zexbTopOCQz7/TahHI472xtflsqjG', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('85-51621', 'Elza', 'Friesen', 'Rohan', '471aufderhar.loyal@example.net', 'UNC-SHS', '09214230446', 'Science, Technology, Engineering and Mathematics', '5', 'defaultAvatar.jpg', 'active', '$2y$10$UiZhvGaeYVY84pB.DIbWce4jOxRsiyG1NLGS0Ufr.4oCqKiUZB5aC', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('85-99415', 'Maryjane', 'Swaniawski', 'Murazik', '210erwin89@example.net', 'UNC-CEA', '09842935003', 'Bachelor of Science in Civil Engineering', '3', 'defaultAvatar.jpg', 'active', '$2y$10$0LGlkuAGEddlN8ez3/DaEeSJCAoSxVS8h/ug51TBKJHntxLOt9qdq', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('86-20675', 'Clovis', 'Glover', 'Brakus', '600shannon.hamill@example.com', 'UNC-ELEM', '09576337444', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$dUYyzEbcD7QoVOxdCzm7TOFB5DEI6sQ1JYULX11HuXq3ioMMxfgbi', NULL, '2022-03-24 16:16:23', '2022-03-24 16:16:23'),
('86-26267', 'Jaeden', 'Quitzon', 'Dach', '798ratke.yolanda@example.net', 'UNC-CCS', '09254176158', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$Sd/CVVusLR.RzQqfr09y5exJteRpLOrX03DHRB6apWis3cBujVk2e', NULL, '2022-04-25 23:00:19', '2022-04-25 23:00:19'),
('86-32641', 'Phyllis', 'Boyle', 'Cartwright', '017emma58@example.net', 'UNC-CE', '09000545210', 'Bachelor in Secondary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$mrwKwUnXiiEeVtN0a1pDeOjHIwYu/JaDSa0FwLIcqQA5N1L67pGvG', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('86-34000', 'Lonny', 'Terry', 'Veum', '308christiansen.audrey@example.com', 'UNC-CE', '09630809582', 'Bachelor of Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$7WyN53K/rhm9qnFPuZQIuu14T0Ot9VzLJz31igF8k22VJxx8L.Mca', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('86-38050', 'Camden', 'Abbott', 'Stracke', '975stark.delaney@example.net', 'UNC-CCS', '09249036059', 'Associate in Computer Technology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$f.oP7949gJoVlczaDbmbbeaGEuyHFgg1GsGpBOgREJsS2Y5RsrPia', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('86-48159', 'Bertrand', 'Hettinger', 'Ritchie', '533lehner.dorthy@example.net', 'UNC-CCS', '09409743589', 'Bachelor of Science in Information Technology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$OWrmuIVk7Zji6gkR.YKzo.8AOHOEriAc/Z65gHNliWSrgVVL1ur86', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('86-77426', 'Sherman', 'Wolf', 'Schmidt', '181schoen.bernie@example.org', 'UNC-CEA', '09319547914', 'Bachelor of Science in Architecture', '3', 'defaultAvatar.jpg', 'active', '$2y$10$Pus1QLF4t4l0ARBc4Ats7OGzK5n3ISryfQUgL7nJWLkPt5XeT1cDC', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('86-88520', 'Luigi', 'Kunze', 'Schowalter', '852spinka.felix@example.org', 'UNC-CBA', '09198800193', 'Bachelor of Science in Entrepreneurship', '5', 'defaultAvatar.jpg', 'active', '$2y$10$20SISbvNOPtbmN8c6CpMEeLn7sPzVXOrEdDHGnE/QetDP0JnQSWBa', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('86-91710', 'Vicente', 'Thiel', 'Beahan', '470xfeil@example.net', 'UNC-CCS', '09012236158', 'Bachelor of Science in Information Technology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$W66.j6d60vs6ob5Ix1dskeukFx5iCEdd0LNxADB78LgLeqLQ5h7Cq', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('86-96746', 'Casimir', 'O\'Conner', 'Kunze', '778koch.bryce@example.net', 'UNC-CEA', '09051371792', 'Bachelor of Science in Civil Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$w0a215RsqZYT9L78WxqNVeKlvvT3Igyn9SN4Gl8HHzfFqy2gpOPcS', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('87-21316', 'Hank', 'Harris', 'Herman', '377florian47@example.org', 'UNC-CEA', '09650985122', 'Bachelor of Science in Civil Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$/bseRx.Ay58hrLGDsCPpoOFYAMJwJxVJGp9aV8ExkvIuH47C/udl2', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('87-24414', 'Ronaldo', 'Douglas', 'Gutmann', '248elenor.brakus@example.org', 'UNC-CN', '09114891329', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$ceGgbikvzQORGpDYhbpHsOoMDvquorkg7ap480RgMcovdpe6kzNTW', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('87-47962', 'Carley', 'Auer', 'Kuhlman', '075claud17@example.com', 'UNC-GS', '09773092725', 'PRIMe (Public Risk Management) Certificate', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Q4MCGpnUrp26fL7ulkm4N.uEP5K/bYBVB1fpAYpnv/5SJMSoArg0u', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('87-55119', 'Shirley', 'Stokes', 'Walker', '338dario64@example.com', 'UNC-GS', '09134458479', 'PRIMe (Public Risk Management) Certificate', '4', 'defaultAvatar.jpg', 'active', '$2y$10$GO4RuQsuGHG87hdd/eaWEubumzpAXbXMU/qfiGvpoQWhKuM.RoUK.', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('87-78864', 'Laurine', 'Carroll', 'Jacobs', '623cremin.archibald@example.com', 'UNC-CCS', '09149093548', 'Bachelor of Science in Information Technology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$KWn5e2ZnW8bOJAGzykfY6.UAQ4bVupUyFfEfjMXxnE6yBp5umXJdO', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('87-81097', 'Lue', 'Hudson', 'Russel', '723laurence00@example.com', 'UNC-CBA', '09359682950', 'Bachelor of Science in Entrepreneurship', '5', 'defaultAvatar.jpg', 'active', '$2y$10$N3JiztExo9meLtdu9aLCluSUtJJFEMETBDHzUZl2nmDXTND8DvKbe', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('88-05141', 'Bettye', 'Kling', 'Koelpin', '616hessel.einar@example.org', 'UNC-ELEM', '09740985167', 'Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$z/w1zQJwswUCQeBJtoiObe3H8Hb62if4X7i46iak1zap4YzU/ugcK', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('88-12197', 'Abagail', 'Herman', 'Jast', '917ondricka.katheryn@example.com', 'UNC-CAS', '09436949038', 'Bachelor of Arts in Political Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$xtRibDyApTKG3cKP002Zg.jbR.M8WLXot2iQStg22NcKWebpWdiD.', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('88-32723', 'Deven', 'Kohler', 'Reinger', '287morissette.edward@example.org', 'UNC-SHS', '09236652255', 'Science, Technology, Engineering and Mathematics', '5', 'defaultAvatar.jpg', 'active', '$2y$10$msBxTkNvyxFSYe6K7GWQTOPKd46lIFAfBHmL/qJEW1LX2AKAZDtW2', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('88-37789', 'Kraig', 'Homenick', 'Muller', '442telly.torphy@example.org', 'UNC-CE', '09900188843', 'Bachelor in Physical Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$kSyFPrWfjyOMLOuJcPlknuWMl1ojVRq77hHigzcNzVwV6nLHlEiMm', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('88-41298', 'Dayne', 'McDermott', 'Beer', '770solon58@example.com', 'UNC-JHS', '09995032447', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$mpMzZ10z0GRPvUY/U1mkGeHTILnnZsREtO/0Aevm0zplgRzh7ntla', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('88-48587', 'Davonte', 'O\'Reilly', 'Berge', '090kurt72@example.net', 'UNC-JHS', '09859973276', 'Junior High School Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$csA1LCLsiz1M77yhZ310vOukJu0nnCPZX///MhkpeovF03lLq.qqC', NULL, '2022-04-25 22:58:47', '2022-04-25 22:58:47'),
('88-72099', 'Evert', 'Miller', 'Cormier', '529conrad.dickens@example.net', 'UNC-GS', '09240208286', 'Master in Business Administration (With Thesis)', '5', 'defaultAvatar.jpg', 'active', '$2y$10$wBMwZBILoI9jn47awqYA/Of9rUcpcpLWpYlxW3hDk7Qw3gG4wJY..', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('88-74664', 'Francisco', 'Wintheiser', 'Kihn', '332wilhelm.champlin@example.com', 'UNC-CJE', '09656085869', 'Bachelor of Science in Criminology', '2', 'defaultAvatar.jpg', 'active', '$2y$10$OOtlUdaS3tLLG9oI/qEKH.yb6DBnZh9zx77FRFcw3W34poYmy.ciC', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('88-84739', 'Torrey', 'Weissnat', 'Crona', '751lura.walter@example.net', 'UNC-GS', '09342701966', 'Master in Library Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$cT29MX75kDy.gGJWQLz7WuqGKdzi1Wsn.hjWuHaCN4UChTElLFUS.', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('88-86889', 'Aubrey', 'Lueilwitz', 'Huel', '689magdalena.bailey@example.com', 'UNC-ELEM', '09549077218', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$d4EruRuW8lxr8lBkXcFwteNKHGZiTM2JNSt9MRfRMHbvKqKfOuAca', NULL, '2022-04-25 22:58:46', '2022-04-25 22:58:46'),
('88-97830', 'Brendon', 'Hansen', 'Waelchi', '777wolf.porter@example.com', 'UNC-CCS', '09936468035', 'Bachelor of Science in Computer Science', '3', 'defaultAvatar.jpg', 'active', '$2y$10$RxNEzEx.u99BGhRL1xEgX.rTnZGO.A435mq2dZmkEjb1VGomaQY32', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('89-38888', 'Rickie', 'Koelpin', 'Wiegand', '384ericka.damore@example.net', 'UNC-CCS', '09777421615', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$QF84KAFocmu286vyi9rkp.fyW21oBZfZXOrT1e4EWyvjhGaTjQ2Rq', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('89-40617', 'Daphney', 'Will', 'Effertz', '766rschneider@example.net', 'UNC-CCS', '09754494814', 'Bachelor of Science in Information Technology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$lKhLYeA56FrDGMJh8GMcNO7ZR6ZTFJjZSRbhqreMSWsgfiKaZr9U6', NULL, '2022-04-25 23:00:18', '2022-04-25 23:00:18'),
('89-43879', 'Nicolette', 'O\'Hara', 'Morissette', '460murray33@example.net', 'UNC-SHS', '09196718594', 'Accountancy, Business and Management', '3', 'defaultAvatar.jpg', 'active', '$2y$10$3HTrhNaRk3Z/0M6iEQZviezpQte7G5nTkhXjKHp34S.vaJs94a2gK', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('89-48159', 'Gonzalo', 'Yundt', 'Gottlieb', '946eloise80@example.com', 'UNC-ELEM', '09357491224', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$k65dEtrWHSJBIM1eEFNPWOwqCoZOBNn0n0uOXLpnpb/DfbE28AGfO', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('89-70837', 'Tressie', 'Watsica', 'Botsford', '462hgottlieb@example.org', 'UNC-CEA', '09978724875', 'Bachelor of Science in Civil Engineering', '1', 'defaultAvatar.jpg', 'active', '$2y$10$p97K9xd49533BuDU9VI9L.Qbg8NCyQI9Eh.E/nqOT6wwL4oSqpOZ6', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('89-89217', 'Shannon', 'Kuphal', 'Russel', '588alena54@example.com', 'UNC-ELEM', '09953656646', 'Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$OKy6fCwBBYbB8ORp7a8hG.p3A3f5BZxNLh4HKfa5DkztIhuNNflW2', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('90-00465', 'Russ', 'Schamberger', 'Pagac', '543donato72@example.net', 'UNC-CBA', '09186535028', 'Bachelor of Science in Business Administration', '4', 'defaultAvatar.jpg', 'active', '$2y$10$KxmJ1YMMxkcCnjzavvnqpOsIbkT8zD3fJAuFKMrE1GMGrv9aFcQKq', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('91-09355', 'Rasheed', 'Keeling', 'Weimann', '344gladyce.nienow@example.org', 'UNC-CAS', '09230075214', 'Bachelor of Science in Biology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$m.G/57wpapWnh3WW3gutF.SRWws3BXk7Y6fIV9MTOXdCEhe2P0D3W', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('91-24484', 'Beaulah', 'Dickens', 'McClure', '541sharon.bernier@example.net', 'UNC-JHS', '09001843169', 'Junior High School Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$nf8DdWJol0IU8O2gPJthAOLDt86DXOHAdq4x3dhVdBzfL93rTQ9SS', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('91-29109', 'Eunice', 'Stark', 'Towne', '742west.lazaro@example.net', 'UNC-CE', '09210568628', 'Bachelor of Elementary Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$e4vg3olFREU/dqZSASY2U.gRm.IC90yNYXHuJF4zw6l1qtjv6.ogC', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('91-40457', 'Dannie', 'Brown', 'Kohler', '202evie08@example.com', 'UNC-CAS', '09519287280', 'Bachelor of Arts in Psychology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$t/O0b3iZTDLGuk.qpa1jwOL9pu6qqhi7ncx7QzTcHtj9c/PlOGba6', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('91-43069', 'Ewell', 'Johnson', 'Crooks', '469jacinto.grimes@example.net', 'UNC-JHS', '09161636285', 'Junior High School Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$u6.CazEO8hpOQ2mb/qFVMeXG6UDxbvoDgcEqrOO6uOUGWEGaPA7Xa', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('91-74781', 'Geraldine', 'Kutch', 'Stiedemann', '672tstark@example.org', 'UNC-CN', '09260993726', 'Bachelor of Science in Nursing', '2', 'defaultAvatar.jpg', 'active', '$2y$10$yXh.O4h/kToguvdCJ0dA/essbyWbSuuMyj13KFdM.7UhUmhAONsse', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('91-94580', 'Hazel', 'Schinner', 'Russel', '077lupe56@example.org', 'UNC-CBA', '09334134557', 'Bachelor of Science in Entrepreneurship', '4', 'defaultAvatar.jpg', 'active', '$2y$10$f/HV0llMzLttd8spgGj9RO4ew/4Ovu3eHLQiB/pBKkdoKRDRLTzCS', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('92-00673', 'Delores', 'Kiehn', 'Bruen', '597stroman.amari@example.org', 'UNC-SHS', '09538062890', 'Science, Technology, Engineering and Mathematics', '3', 'defaultAvatar.jpg', 'active', '$2y$10$faPtgquE1/2Enme904l27uJ8L1JDz0ezLCLtm6dBzLLpSNr87p7dS', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('92-19097', 'Geovanni', 'Ward', 'Rolfson', '160runte.caesar@example.net', 'UNC-CCS', '09935360736', 'Bachelor of Library in Information Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$yleg/T6twuRtoxi0q9485.8f1HjyKwxkGdWm2WoV2RMUAph8qP/dO', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('92-21328', 'Benedict', 'Heidenreich', 'Hintz', '265hirthe.burdette@example.net', 'UNC-CE', '09607480782', 'Bachelor of Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$KNb7y0PdcgF52EYUOQdE9uaXzYn/BxyoEfM4tx5B9xBzgksG8q54m', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('92-37514', 'Richie', 'Bode', 'Waelchi', '923bashirian.amos@example.com', 'UNC-JHS', '09306163907', 'Junior High School Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$uGIGY7SW5tk2PJEUnxK44eQInQsVQ.L/5SWk.SV5NxGk26KOgGjp2', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('92-52043', 'Esmeralda', 'Grant', 'Bartoletti', '933qlittel@example.org', 'UNC-CAS', '09954380512', 'Bachelor of Arts in Political Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$syU3zTIdsRqIwRGD4XSm3eGG0sC69ys9yBZ2b2gIUE58cO4KdYTou', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('92-54718', 'Katrina', 'Steuber', 'Hegmann', '072minerva.runolfsson@example.org', 'UNC-GS', '09369814969', 'Master in Library and Information Science', '5', 'defaultAvatar.jpg', 'active', '$2y$10$XV0PghAG7quwf6D8KcobnuUmRFp7XNZ56hZNw/aQANDrlxEEuiO56', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('92-56771', 'Tre', 'Bogan', 'Bergstrom', '923cory.fritsch@example.com', 'UNC-CBA', '09393171757', 'Bachelor of Science in Accounting Information System', '4', 'defaultAvatar.jpg', 'active', '$2y$10$ZSinbSCIlc.zm7Jkb2vaYuCtLH9pQdjQH9XLHDOh2s5xxR1J0SkVe', NULL, '2022-03-24 16:26:08', '2022-03-24 16:26:08'),
('92-84725', 'Kiley', 'Lang', 'Balistreri', '433miguel.trantow@example.com', 'UNC-CN', '09293254408', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$HUeAsMRJx2ieGithqMuXQObYiPHRef4PoxWEUGYfohQpIUEA/XmX2', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('92-87656', 'Cedrick', 'Ledner', 'Bruen', '887armstrong.reanna@example.net', 'UNC-ELEM', '09646684484', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$WF9V3ODgiB96Iak6eAv9/uiABQk8fOskw0mjvMW75LCo22olVANmO', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('93-09701', 'Garrison', 'Cummings', 'Metz', '545walker.amya@example.com', 'UNC-CEA', '09274269006', 'Bachelor of Science in Electrical Engineering', '2', 'defaultAvatar.jpg', 'active', '$2y$10$giwxjV.dDtV92Uh0zQsAgeCrbHUtYhCdEcjOLNUbzY0XX6q4VFc/q', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('93-12900', 'Bernard', 'Kshlerin', 'Stamm', '354ayana76@example.org', 'UNC-CBA', '09510973639', 'Bachelor of Science in Accountacy', '4', 'defaultAvatar.jpg', 'active', '$2y$10$Q1iLI6HlOqBWh5pWXcvX/u0H4MKC8g3xz/cNnOlmo/jdyqFIE7lwm', NULL, '2022-04-25 23:00:17', '2022-04-25 23:00:17'),
('93-16381', 'Adolfo', 'Lowe', 'Block', '259qmedhurst@example.com', 'UNC-CEA', '09607003948', 'Bachelor of Science in Architecture', '4', 'defaultAvatar.jpg', 'active', '$2y$10$WxH2JUzTC/5pTJNW.wKRf.YdVOLSIXGgunpAtGxIaMdOt.1VfSzwm', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('93-16468', 'Loyal', 'Haag', 'D\'Amore', '803ekeeling@example.net', 'UNC-CAS', '09191655631', 'Bachelor of Arts in Psychology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$FqwzUZsp1jUm4757TOFqGO/1LgLBmdCGkMlI4uGmRA3B2i97NxQaG', NULL, '2022-03-24 16:26:11', '2022-03-24 16:26:11'),
('93-17902', 'Cordia', 'Christiansen', 'Rau', '379ellen.volkman@example.com', 'UNC-GS', '09664735409', 'Master of Arts in Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$j5WiLdems.h7rq8UqEtAZOo9xDEve7gfjyXrDZPE24evV9R./cAw6', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('93-52112', 'Dashawn', 'Ryan', 'Smitham', '829afadel@example.org', 'UNC-CCS', '09029226853', 'Bachelor of Science in Computer Science', '1', 'defaultAvatar.jpg', 'active', '$2y$10$D7.ykLM496Blpf2NxAD9t.zU0dAdYvo9RT/aPEkQa5Dla2qa6BLHa', NULL, '2022-03-24 16:16:23', '2022-03-24 16:16:23'),
('93-94654', 'Audreanne', 'Mayer', 'Torphy', '020bosco.ignacio@example.org', 'UNC-SHS', '09603679657', 'Science, Technology, Engineering and Mathematics', '1', 'defaultAvatar.jpg', 'active', '$2y$10$iGkbqXEvLEHYttNLwYJItuKZ4AIbkK7LXyBrC.8SWH4kIJ6Pd4u7y', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('93-99783', 'Adele', 'White', 'Jacobson', '993itillman@example.net', 'UNC-JHS', '09445813617', 'Junior High School Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$G2ZKHiieEX.rwALQruuOSeLYEST.KXnM6AYdDB2qBoMYprr7..nU6', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('94-21403', 'Vinnie', 'Cronin', 'Cummings', '675qharvey@example.net', 'UNC-CEA', '09362926096', 'Bachelor of Science in Computer Engineering', '2', 'defaultAvatar.jpg', 'active', '$2y$10$LcQS4N792BFbSeEs.V.gV.TInEWIfQkw3orjrYErDv7XvdasiZh4e', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('94-27865', 'Fermin', 'Lindgren', 'Breitenberg', '519wilderman.maybell@example.org', 'UNC-JHS', '09123487470', 'Junior High School Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$BwEAlRyjT7L/tvVntt0M8utt5DALcrm1hTt28oAmSGz/eqwHGU1qy', NULL, '2022-03-26 02:27:43', '2022-03-26 02:27:43'),
('94-42309', 'Myron', 'Stamm', 'Rutherford', '407wisoky.libbie@example.com', 'UNC-JHS', '09993905643', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$bnn96Q2wVilNFgHFSMBf8.firUgkAOq3vDT8/s2khkInqn8jnJItq', NULL, '2022-03-24 16:16:21', '2022-03-24 16:16:21'),
('94-51105', 'Oma', 'Bruen', 'Ernser', '920lockman.armani@example.net', 'UNC-ELEM', '09712822766', 'Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$RGU/GGT4Sa1Kribqif4QievwMkrAJ6lasi0eFhLyIo1Dte.hbObpC', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('94-53674', 'Agustin', 'Barrows', 'Maggio', '536dglover@example.net', 'UNC-CJE', '09513901464', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$O4L2cK4JOltCndzzOnJG4exWUK9/Qy0v6Pu93H1BpC933n/US0F7W', NULL, '2022-03-24 02:33:56', '2022-03-24 02:33:56'),
('94-54282', 'Gail', 'Sporer', 'Medhurst', '093dianna.bayer@example.com', 'UNC-ELEM', '09742297363', 'Elementary Education', '4', 'defaultAvatar.jpg', 'active', '$2y$10$g/rIvPo4xECmThHOBk7onOFOaDnxad6QTBYdIvLy1XirUCxWF0uNO', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('94-55968', 'Martine', 'Schimmel', 'Mertz', '400dweimann@example.org', 'UNC-CN', '09590720548', 'Bachelor of Science in Nursing', '3', 'defaultAvatar.jpg', 'active', '$2y$10$pc83EYsU15OdZ16lp8n0b.h/2Dl9Ti7CFivdYuOJuRNbqeD3dmfp6', NULL, '2022-03-24 02:33:58', '2022-03-24 02:33:58'),
('94-62096', 'Jamir', 'Torphy', 'Glover', '015wvonrueden@example.org', 'UNC-SHS', '09913907404', 'Technical, Vocational and Livelihood', '2', 'defaultAvatar.jpg', 'active', '$2y$10$ij8oYbNKvkwoqUY5WMkTfeL89cFiWA4RHU/KKo3d.nfT0GVodg1QS', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('94-70776', 'Rylee', 'Hessel', 'Larson', '186blittel@example.net', 'UNC-GS', '09103082952', 'Master in Business Administration (With Thesis)', '5', 'defaultAvatar.jpg', 'active', '$2y$10$.9A0rn/ICpZ.GBp9PF0y7.X/B48jt/xhGpBqo4krKB0c2vvcB4BhC', NULL, '2022-04-25 23:00:15', '2022-04-25 23:00:15'),
('94-92992', 'Helena', 'Okuneva', 'Little', '479weber.linwood@example.org', 'UNC-CCS', '09124318323', 'Associate in Computer Technology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$elDXagR6lgqwgZJM3d8wweA0c2Gfqw0dt.yfH5R/57CmOILdaKL3.', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('94-93517', 'Myra', 'Wisozk', 'Medhurst', '210ovolkman@example.com', 'UNC-CJE', '09679590606', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$t0FP/ycg.EM8Zn1Jsrk1cubp.ep2dJUUsy8oXcqFgB8HS0Qm1KNsq', NULL, '2022-03-24 02:33:55', '2022-03-24 02:33:55'),
('94-98404', 'Elenor', 'Rohan', 'Conn', '964tdickens@example.org', 'UNC-CBA', '09044173081', 'Bachelor of Science in Entrepreneurship', '2', 'defaultAvatar.jpg', 'active', '$2y$10$x8cTs93a5GxguLB5HJHFsOAlP2k2slfetXAA5lxcEbT04sbrmkbvC', NULL, '2022-03-25 03:40:38', '2022-03-25 03:40:38'),
('95-30506', 'Otho', 'Schultz', 'Muller', '189gail42@example.net', 'UNC-ELEM', '09019394173', 'Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$FTi0fPKqx4.Kv7ijxeiZAeDRFVBHQ6lFhb24FSrF8kEDd7iU9M27W', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('95-56903', 'Rebekah', 'Upton', 'Jacobs', '046walter.katelyn@example.net', 'UNC-GS', '09520040048', 'Data Analytics Certificate', '5', 'defaultAvatar.jpg', 'active', '$2y$10$75ImYfF5YY93NKS3LhHDe.sZaA1J5OnLuwf6JBlf6wJ7OOHdpy8Vq', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('95-57634', 'Anibal', 'Von', 'Rohan', '405cleora62@example.com', 'UNC-CBA', '09500703694', 'Bachelor of Science in Entrepreneurship', '1', 'defaultAvatar.jpg', 'active', '$2y$10$E/HVaqn94gRlJvPur2L89e9MGA0Qqudqe40jNxOfrFDB7lg1wCxiG', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('95-77992', 'Nathan', 'Gleichner', 'Hackett', '865ystreich@example.org', 'UNC-CN', '09576062676', 'Bachelor of Science in Nursing', '5', 'defaultAvatar.jpg', 'active', '$2y$10$XccQktLVsK9FivzLF/E1DOsB/mCwcKVt82XmkS..Eb9/kuWooeB4G', NULL, '2022-03-24 16:16:23', '2022-03-24 16:16:23'),
('95-82007', 'Jaime', 'Schulist', 'Kris', '759irenner@example.com', 'UNC-CEA', '09347415615', 'Bachelor of Science in Civil Engineering', '4', 'defaultAvatar.jpg', 'active', '$2y$10$BTjYYXJdiYf.h2eYK/M.huUonRuYjRzriMG9Seky.VSObN81W1XfS', NULL, '2022-03-24 16:26:10', '2022-03-24 16:26:10'),
('96-00654', 'Damaris', 'Hettinger', 'Barrows', '179rahul.gibson@example.net', 'UNC-GS', '09087705549', 'Group Resilience Certificate', '2', 'defaultAvatar.jpg', 'active', '$2y$10$dx7MrJtKAYb5nQBFl1f5ueb0n/PAFMJnGsh5gmQtECp0hfhzoP3Ja', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('96-03819', 'Electa', 'Doyle', 'Runte', '751evans.jones@example.com', 'UNC-CJE', '09418705305', 'Bachelor of Science in Criminology', '3', 'defaultAvatar.jpg', 'active', '$2y$10$dtykqpO1ObdmPkT0HvUZ/OVe0w3G/AH1/xCLsqaJwMQNu1nOUQujG', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('96-11359', 'Whitney', 'O\'Keefe', 'Roob', '089marcia88@example.net', 'UNC-CCS', '09527520886', 'Bachelor of Science in Computer Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$DFVZDG/kkwQ02tcdOU42aOEPILXJJV5fl4B/XXs/rhY9xwPXwU1Sy', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('96-22335', 'Alexanne', 'Weissnat', 'Terry', '415krystina34@example.net', 'UNC-CBA', '09483789271', 'Bachelor of Science in Accounting Information System', '5', 'defaultAvatar.jpg', 'active', '$2y$10$X0AVhpqF9IxDeV.dJ1L9TuhN.JYut0H028BFBZHaBJ.X6QB1F.tdG', NULL, '2022-03-24 02:33:54', '2022-03-24 02:33:54'),
('96-28367', 'Jared', 'Skiles', 'Feeney', '729kaylah.hayes@example.com', 'UNC-JHS', '09315275647', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$ul9G4NXzEnkE9loWDswX5OTJdlxoaGqyAxSGgV85w40xc2892lQsO', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('96-39252', 'Filiberto', 'Walter', 'Wehner', '398christiana.padberg@example.net', 'UNC-CBA', '09270393285', 'Bachelor of Science in Entrepreneurship', '1', 'defaultAvatar.jpg', 'active', '$2y$10$T36G1I//yixSX0BoEeVKYeDg/OWG51ufQkpnLhTc.COFTW7CumTpy', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('96-58904', 'Arvid', 'Daniel', 'Schroeder', '041mschuppe@example.net', 'UNC-SHS', '09584458199', 'Science, Technology, Engineering and Mathematics', '1', 'defaultAvatar.jpg', 'active', '$2y$10$lGn8F2Z.raF1zoiQctIGTOfaLy1omozgfxjJG9qiWbrtBdKdjZ0wW', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('96-75795', 'Destin', 'Steuber', 'Wiegand', '630rickey.leffler@example.org', 'UNC-JHS', '09009824515', 'Junior High School Education', '2', 'defaultAvatar.jpg', 'active', '$2y$10$DuMGrMIDQH3ywUu4aJnbMOwoezXvjbAtrIQMVyHO4iodPj34Wftwi', NULL, '2022-03-24 16:26:12', '2022-03-24 16:26:12');
INSERT INTO `students` (`student_no`, `firstname`, `middlename`, `lastname`, `email`, `departmentCode`, `phone`, `course`, `year`, `avatar`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('96-91283', 'Isabel', 'Abernathy', 'Hoppe', '182qrunte@example.org', 'UNC-CE', '09208456254', 'Bachelor of Elementary Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$1p9uh3w6khb5Aoe6wuC3I.jCHSQ60q8GWklctCkV0DgLX1kjpFBx2', NULL, '2022-03-24 02:33:57', '2022-03-24 02:33:57'),
('96-98455', 'Demetrius', 'Jones', 'Walter', '926peyton.dach@example.org', 'UNC-LAW', '09664859368', 'Juris Doctor', '4', 'defaultAvatar.jpg', 'active', '$2y$10$idctl3LPxYRlY3t6cU4jVORWQTy63r2Y8fFUKMU.LBg4RFtktcTTm', NULL, '2022-03-25 03:40:37', '2022-03-25 03:40:37'),
('97-05728', 'Thurman', 'Cronin', 'Jenkins', '258henriette47@example.net', 'UNC-LAW', '09487534914', 'Master of Laws', '1', 'defaultAvatar.jpg', 'active', '$2y$10$YZpE43YEZ5/pHAhw0FhrNehsOl.tu64ZoYnNc0ZEnvqZrMoXYuI5G', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('97-33850', 'Bradford', 'Hettinger', 'Abernathy', '935hegmann.kelsi@example.com', 'UNC-LAW', '09140848169', 'Master of Laws', '3', 'defaultAvatar.jpg', 'active', '$2y$10$C3XcuazKrkC9qFRwDtwKzeOXzrYcibMGUwTF32VkN10yIigffVI46', NULL, '2022-04-25 23:00:16', '2022-04-25 23:00:16'),
('97-57176', 'Genesis', 'McClure', 'Terry', '788unader@example.net', 'UNC-CCS', '09541717964', 'Associate in Computer Technology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$JOc.M47OO3ZbiV9gEnu9geUHkPzXC.BeqXnSu./la5NVsv27Bx/N2', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('97-83659', 'Haley', 'Donnelly', 'Waters', '702johns.eldon@example.com', 'UNC-CCS', '09736747568', 'Bachelor of Science in Computer Science', '4', 'defaultAvatar.jpg', 'active', '$2y$10$EEKjvbS5SvDT79oAtBx0HurqX.8ccO9lWpVAR6/SBszhnhfhkieaC', NULL, '2022-04-25 22:58:48', '2022-04-25 22:58:48'),
('97-84288', 'Pascale', 'Conroy', 'Stroman', '502joan.bergnaum@example.com', 'UNC-CE', '09480415129', 'Bachelor of Elementary Education', '5', 'defaultAvatar.jpg', 'active', '$2y$10$b0x00W3xiMS/Ct0iuRxpSOraKNNS9bUA.pnZCe5eBjkJHJ98Z9Ywq', NULL, '2022-03-26 02:27:45', '2022-03-26 02:27:45'),
('97-88576', 'Hollie', 'Stoltenberg', 'Powlowski', '895shagenes@example.com', 'UNC-SHS', '09830320917', 'Accountancy, Business and Management', '5', 'defaultAvatar.jpg', 'active', '$2y$10$Wp9vMPt1rJC3.5AtSONusejPSEDOF4LmsZfaOTlgieqpHF/S38eBu', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('97-91928', 'Harvey', 'Schulist', 'Paucek', '965wreinger@example.com', 'UNC-CJE', '09034352669', 'Bachelor of Science in Criminology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$1hxyHbdBtF8BH0lIz59sxuS/vGlxuNbu/IYsffJTMkFasUG1CAzIK', NULL, '2022-03-24 16:16:20', '2022-03-24 16:16:20'),
('98-02484', 'Morton', 'Frami', 'Haag', '638garnet48@example.org', 'UNC-CJE', '09512066437', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$dlyQt1k4Op4IL2NRSAijQOvfHYeXHCO2nOvJ/voow8Q6e0cCf0tba', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22'),
('98-22244', 'Britney', 'Bradtke', 'Sanford', '980orn.margarette@example.net', 'UNC-JHS', '09111401463', 'Junior High School Education', '3', 'defaultAvatar.jpg', 'active', '$2y$10$LRXP4LQsJhxOYnpQT0fH0.yfLbFGs8W6TLTRhHiBwuAk.gHoNoLxW', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('98-35640', 'Ceasar', 'Orn', 'Wyman', '517kherzog@example.org', 'UNC-CCS', '09369313475', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$O7FG5E/nOkmsyg06ArgUXOp.VxmnmKXetQHdgY7rGezZ5mevYndb2', NULL, '2022-04-25 23:00:14', '2022-04-25 23:00:14'),
('98-48913', 'Courtney', 'Ondricka', 'Beatty', '736jude.vandervort@example.net', 'UNC-JHS', '09032757033', 'Junior High School Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$Avw5IOEcQjVU9f/bRqKIY.RpjtSxkyYUhgJ/1jgOvQ488lV9XiDEi', NULL, '2022-03-25 03:40:40', '2022-03-25 03:40:40'),
('98-50661', 'Bernadine', 'White', 'Gislason', '901gillian33@example.com', 'UNC-SHS', '09871679458', 'Technical, Vocational and Livelihood', '1', 'defaultAvatar.jpg', 'active', '$2y$10$2Q4cgpbn.D4ASgoe.9vY4uPdPePkfuMu.Pbz2wzRySH91E549UoUi', NULL, '2022-03-24 02:33:58', '2022-03-24 02:33:58'),
('98-61877', 'Elsie', 'Marvin', 'Reynolds', '888kvolkman@example.org', 'UNC-SHS', '09998414188', 'Technical, Vocational and Livelihood', '1', 'defaultAvatar.jpg', 'active', '$2y$10$K3J341GzOVHt01B0RBG6yu/xxo5trbf4jE2w6X7syzXH0V9t0Zg0C', NULL, '2022-03-24 16:26:09', '2022-03-24 16:26:09'),
('98-76404', 'Geovanny', 'Witting', 'O\'Reilly', '820electa43@example.net', 'UNC-ELEM', '09756915516', 'Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$ba2KQpQJpgBNLiaHmTWtQebPudsB6FZLfqb1T2qIjpWY.BOUIOQ4.', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('98-84741', 'Ulices', 'Stroman', 'Lind', '088boyer.hassie@example.net', 'UNC-GS', '09464508076', 'Master in Business Administration (With Thesis)', '2', 'defaultAvatar.jpg', 'active', '$2y$10$OD2u/I2/pCQYnGw5CsKfVu4EkBrju4iRXUQzvhbP2rBnpHDUoME5e', NULL, '2022-04-25 22:58:49', '2022-04-25 22:58:49'),
('99-23659', 'Harrison', 'Douglas', 'Cummings', '322rhoda.sauer@example.net', 'UNC-CCS', '09339750481', 'Associate in Computer Technology', '1', 'defaultAvatar.jpg', 'active', '$2y$10$CZ/tLS9HR8m2FDpM57DcqOMYaKlAnNPikV/RwNxTxWYUc5ZUXXNnS', NULL, '2022-03-25 03:40:39', '2022-03-25 03:40:39'),
('99-43366', 'Bartholome', 'Towne', 'Carter', '242jameson20@example.net', 'UNC-CJE', '09467743745', 'Bachelor of Science in Criminology', '5', 'defaultAvatar.jpg', 'active', '$2y$10$XTPUxkNM31fnmg0XhPAuLOyHkjMchid9pzVkL6ePx91kPzMMCpAB6', NULL, '2022-03-24 16:26:13', '2022-03-24 16:26:13'),
('99-49909', 'Corbin', 'Quigley', 'Hudson', '637marvin.queenie@example.com', 'UNC-CN', '09807620362', 'Bachelor of Science in Nursing', '1', 'defaultAvatar.jpg', 'active', '$2y$10$IAtTU6ojAHs/hz6wPBu3dubSewwlFkTccjFyntZ/MXzSqGmXFcLmu', NULL, '2022-03-26 02:27:42', '2022-03-26 02:27:42'),
('99-51247', 'Agustin', 'Parisian', 'Hill', '392vrogahn@example.com', 'UNC-CJE', '09936720883', 'Bachelor of Science in Criminology', '4', 'defaultAvatar.jpg', 'active', '$2y$10$eXP0S3DF78Wbw8pFIYIff.o5qAY/W3.dvDNG4Ir2fckFxHrULxQdC', NULL, '2022-03-26 02:27:44', '2022-03-26 02:27:44'),
('99-67967', 'Earlene', 'O\'Reilly', 'Reinger', '450rspinka@example.com', 'UNC-SHS', '09344324024', 'Accountancy, Business and Management', '4', 'defaultAvatar.jpg', 'active', '$2y$10$UiimhPw6mwFZBn/G1zpQ2uk6tGzb2Q1jxZWxBqHtTALvPz8W7vw.6', NULL, '2022-04-25 22:58:50', '2022-04-25 22:58:50'),
('99-79005', 'Fausto', 'Klocko', 'Weissnat', '916everardo47@example.net', 'UNC-ELEM', '09728593154', 'Elementary Education', '1', 'defaultAvatar.jpg', 'active', '$2y$10$FRPAS//SGCtMvhH69f/IPuWj0aqMC1wseQYZOja1yDuEMYzH9ne5O', NULL, '2022-03-24 16:16:22', '2022-03-24 16:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_no` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_no`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `annoucements`
--
ALTER TABLE `annoucements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `annoucements_admin_no_index` (`admin_no`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryNo`),
  ADD KEY `categories_officecode_index` (`officeCode`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseNo`),
  ADD UNIQUE KEY `courses_name_unique` (`name`),
  ADD KEY `courses_departmentcode_index` (`departmentCode`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`departmentCode`),
  ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_no`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_departmentcode_index` (`departmentCode`),
  ADD KEY `employees_officecode_index` (`officeCode`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`loanNo`),
  ADD KEY `loans_student_no_index` (`student_no`),
  ADD KEY `loans_officecode_index` (`officeCode`),
  ADD KEY `loans_semestercode_index` (`semesterCode`),
  ADD KEY `loans_categoryno_index` (`categoryNo`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`officeCode`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`programNo`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`scholarshipNo`),
  ADD KEY `scholarships_student_no_index` (`student_no`),
  ADD KEY `scholarships_officecode_index` (`officeCode`),
  ADD KEY `scholarships_semestercode_index` (`semesterCode`),
  ADD KEY `scholarships_categoryno_index` (`categoryNo`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`semesterCode`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_no`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD KEY `students_departmentcode_index` (`departmentCode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annoucements`
--
ALTER TABLE `annoucements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryNo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseNo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `loanNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `programNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `scholarshipNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annoucements`
--
ALTER TABLE `annoucements`
  ADD CONSTRAINT `annoucements_admin_no_foreign` FOREIGN KEY (`admin_no`) REFERENCES `admins` (`admin_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_officecode_foreign` FOREIGN KEY (`officeCode`) REFERENCES `offices` (`officeCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_departmentcode_foreign` FOREIGN KEY (`departmentCode`) REFERENCES `departments` (`departmentCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_departmentcode_foreign` FOREIGN KEY (`departmentCode`) REFERENCES `departments` (`departmentCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_officecode_foreign` FOREIGN KEY (`officeCode`) REFERENCES `offices` (`officeCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_categoryno_foreign` FOREIGN KEY (`categoryNo`) REFERENCES `categories` (`categoryNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `loans_officecode_foreign` FOREIGN KEY (`officeCode`) REFERENCES `offices` (`officeCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `loans_semestercode_foreign` FOREIGN KEY (`semesterCode`) REFERENCES `semesters` (`semesterCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `loans_student_no_foreign` FOREIGN KEY (`student_no`) REFERENCES `students` (`student_no`) ON DELETE CASCADE;

--
-- Constraints for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD CONSTRAINT `scholarships_categoryno_foreign` FOREIGN KEY (`categoryNo`) REFERENCES `categories` (`categoryNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `scholarships_officecode_foreign` FOREIGN KEY (`officeCode`) REFERENCES `offices` (`officeCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `scholarships_semestercode_foreign` FOREIGN KEY (`semesterCode`) REFERENCES `semesters` (`semesterCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `scholarships_student_no_foreign` FOREIGN KEY (`student_no`) REFERENCES `students` (`student_no`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_departmentcode_foreign` FOREIGN KEY (`departmentCode`) REFERENCES `departments` (`departmentCode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
