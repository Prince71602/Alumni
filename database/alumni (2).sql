-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 02:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `student_id_number` varchar(20) NOT NULL,
  `year_graduated` year(4) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirm_password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `student_id_number`, `year_graduated`, `email_address`, `mobile_number`, `password_hash`, `confirm_password_hash`, `created_at`, `updated_at`) VALUES
(5, 'Prince Lowell', 'Geograpo', 'Delima', '21-000303', '2025', 'lowell@gmail.com', '09773154669', '$2y$10$14Lf7F0Nl6i.jxNoKZIyTumAl5CqVMKXU81XpY8uK4L3ikqG8iYrW', '$2y$10$14Lf7F0Nl6i.jxNoKZIyTumAl5CqVMKXU81XpY8uK4L3ikqG8iYrW', '2025-03-05 15:43:48', '2025-03-05 15:43:48'),
(6, 'Linie', 'Dadula', 'Noynay', '21-000110', '2025', 'Linie@gmail.com', '09203781446', '$2y$10$6rJcNDXD1de0/z5QQz9mBOj1yd.vF3w0LgYv13DDNESOtICA9Pr8S', '$2y$10$6rJcNDXD1de0/z5QQz9mBOj1yd.vF3w0LgYv13DDNESOtICA9Pr8S', '2025-03-06 01:09:26', '2025-03-06 01:09:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id_number` (`student_id_number`),
  ADD UNIQUE KEY `email_address` (`email_address`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
