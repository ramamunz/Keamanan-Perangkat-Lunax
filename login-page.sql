-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 08:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-page`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `join_login` datetime NOT NULL,
  `data_login` datetime NOT NULL,
  `keluar_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password_user`, `join_login`, `data_login`, `keluar_login`) VALUES
(1, 'rama', 'ramaa@gmail.com', 'd8c4305f7021ad5b7b615eebb453f328', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Mune', 'mune@gmail.com', 'bdfad99adb3bad9218def12ff451f32c', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'munz', 'munz@gmail.com', '0dea8cc5b1a43644fa0752106d57c116', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'rama muna', 'ramamuna08@gmail.com', 'a8f3757ca727d1fb0b3595aa6bd542e1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'test', 'test123@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'rafi', 'rafiahmad@gmail.com', '9a2fc2329c20ac6f44b28115c27ee135', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Muna', 'rama12@gmail.com', '412a13c6565066215970c80bf5185abf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Ramadhan ', 'ramadhan@gmail.com', 'ec7560537fd4e7b030a422972332d7fb', '0000-00-00 00:00:00', '2022-09-14 21:53:00', '2022-09-14 22:04:00'),
(9, 'dimas', 'dimas@gmail.com', '35a94fa08b88992885257e40526d83ff', '0000-00-00 00:00:00', '2022-09-15 11:42:00', '2022-09-15 11:42:00'),
(10, 'wahid', 'wahid@gmail.com', 'd280e934541b7d5e53b1c442b097d74b', '0000-00-00 00:00:00', '2022-09-14 21:43:00', '2022-09-14 21:46:00'),
(11, 'Didin', 'didin@gmail.com', 'c5b165c4517a9d1a00711d83009ef771', '0000-00-00 00:00:00', '2022-09-15 09:33:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
