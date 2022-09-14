-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 09:25 AM
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
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(8, 'Bishwanath Jana', 'bishwanathjanaavendgers@gmail.com', '$2y$10$mI93SHjH4FfQ53accYutqO5N7XPdYDXORww0l6XJizqH/.XRUNxAy'),
(9, 'BISHWANATH JANA', 'bwubts20100@brainwareuniversity.ac.in', '$2y$10$XsvD2PPcLWjelQOYjVYOm.Li/seCUNjKxC1sLq325.ICRkdpf/lP.'),
(10, 'repeat password', 'rahuldevghorai031@gmail.com', '$2y$10$7AQ6FrX7oP778vOR9BVvr.ZRv81jlGdhafxz8DEukiCtcfeVAXdUu'),
(11, 'BISHWANATH JANA', 'bwubts20100@brainwareuniversity.ac.in', '$2y$10$EwkQzxCkRcaVwD9IWC.xteN.1d5hgSr4A27e0TIVoJzVdPKAV.i0C'),
(12, 'Bishwanath Jana', 'bishwanathjanaavengers@gmail.com', '$2y$10$3075BxjmbgREYdVjJqy.bueIXt3X0oNEr3C/EPmG41qd6lQQDDVna'),
(13, 'Bishwanath Jana', 'bishwanathjanaavengers@gmail.com', '$2y$10$rQR40no2jl2Ds2TWQd0gbueuwZSC5XSn2auxXd/rfYVK.OTKgvJ4G'),
(14, 'Bishwanath Jana', 'vbis@gmail.com', '$2y$10$drL8.5ptLUWDS.PfoH8Dx.tpSPh8bpL5Mq2q9DXOXLhY8/eV.jZoC'),
(15, 'Ruhan Jana', 'bishwanathjanaavengers@gmail.com', '$2y$10$WADWHH6Uv47y7S/hd5pNAuoAO6egjk9oEYCZbVbpI057sUU./cj16'),
(16, 'Bishwanath Jana', 'bishwanathjanaavengers@gmail.com', '$2y$10$lWkac.V9zB5SIb2nODOKk.wCBF/3LI/Dw1TrXk5jNmmdcLoCj1kr.'),
(17, 'Bishwanath Jana', 'bishwanathjanaavengers@gmail.com', '$2y$10$hwowg44wQD0o7GsVO2FFs.ANi9WQvWbhbQHJGm5RLt/8L3JBEr6Uy'),
(18, 'Bishwanath Jana', 'bishwanathjanaavengers@gmail.com', '$2y$10$s2Po4MtMcrgfwE5GHS8fIOHHeosapJn9WGUFJVdpZTv6vn3re7Du6'),
(19, 'bishwanathjanaavengers@gmail.com', 'bishwanathjanaavengers@gmail.com', '$2y$10$/IqCLZklzRxO2SKoKZvcgutaTICiY1EX2P9azcrVbOK/UBTsQP8NC'),
(20, 'Biswajit Roy', 'bishwanathjanaavengers@gmail.com', '$2y$10$P9MyiS.vjB/gvgJ8f5cF8eXCuFpIy/mVc.jWFL90xAOqo7a.GUIMG'),
(21, 'Bishwanath Jana', 'bishwanathjanaavengers@gmail.com', '$2y$10$jpAvTeOAW0Xfue9DEHDEUu7RR7zA6gwWZMmTv3aHt.wIqMCuZOMxm'),
(22, 'bishwanathjanaavengers@gmail.com', 'bishwanathjanaavengers@gmail.com', '$2y$10$tFzb6Th7YKyAnD08J9XM5.iiJJgs6iixTK6VuXqSxHSObqHs1GjYC'),
(23, 'hari mondal', 'bishwanathjanaavengers@gmail.com', '$2y$10$1ji/hmOf7r1zqJ6KVJEGc.Mtjd7obhw7.U8/UqhUm21E3stutwdPS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
