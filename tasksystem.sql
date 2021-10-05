-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 10:23 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasksystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `type`, `created_at`) VALUES
(1, 'admin', 'admin@tasks.com', '$2y$10$9iLzsxDih6KeD4EB3CObw.5LO6PzUPn88sRx4WCRbNKvmSt4dahem', 1, '2021-10-04 23:04:46'),
(2, 'shaheerasarama', 'shaheerasarama@gmail.com', '$2y$10$pZdzR.5W/7XaOQ47a0i5huEYOL3uOBLmfTMOx49WwrOZ3o9BUZ5QC', 0, '2021-10-04 23:22:39'),
(18, 'fadi', 'fadi@gmail.com', '$2y$10$QTRAU2.gUT/KPLWwFngcuuLnkClFjQd7dcXUzQAt3n4R5LSTZ4SNq', 1, '2021-10-05 10:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `body`, `status`, `created_at`, `user_id`) VALUES
(5, 'php native projects', 'start blog php native project ', 0, '2021-10-04 13:27:35', 18),
(6, 'html ', 'this is html', 0, '2021-10-04 13:39:23', 17),
(7, 'css', 'this is css', 0, '2021-10-04 13:39:32', 4),
(8, 'php native', 'this is php native project', 0, '2021-10-04 13:40:03', 22),
(9, 'php laravel', 'this is php laravel', 0, '2021-10-04 13:40:16', 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `created_at`) VALUES
(4, 'mohammed', 'amal@gmail.com', '$2y$10$LVy1.3Ezq5cWi5/8ab3oye9KeCPpwRuxvIQJx/5VVfO6Hg3g8K0Mu', 1, '2021-09-17 16:38:25'),
(17, 'walaa sarama', 'walaa@gmail.com', '$2y$10$VF9tP.dtZNO1PlIdd8z7JuuwYmiVMRPfAhiXiuk.itFf.CBqEeMnq', 1, '2021-10-04 11:08:03'),
(18, 'fadi', 'fadi@gmail.com', '$2y$10$9KRcJhFxxekdyDmUxckGdOjkcBDo8tlGrGw29WCWp0okeS1h9bvpW', 0, '2021-10-04 11:08:16'),
(22, 'sadam', 'sadam@gmail.com', '$2y$10$m1kQBrupuZ5mmCcxTrLhxesitWiaCEe5Ve/rAsgYTru.xzda27Foy', 0, '2021-10-04 13:24:44'),
(23, 'shaheerasarama', 'shaheerasarama@gmail.com', '$2y$10$0MJ1G.5GqYgUVnxgXws2tOHlnAi.2x.LImaDWeA20p3F78LCHcI4O', 0, '2021-10-04 13:36:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
