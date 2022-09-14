-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 08:57 AM
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
-- Database: `helloindia_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hello`
--

CREATE TABLE `hello` (
  `id` int(11) NOT NULL,
  `fname` varchar(123) NOT NULL,
  `lname` varchar(124) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(124) NOT NULL,
  `profession` varchar(123) NOT NULL,
  `file` varchar(123) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `people` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hello`
--

INSERT INTO `hello` (`id`, `fname`, `lname`, `email`, `contact`, `profession`, `file`, `state`, `address`, `package`, `duration`, `people`) VALUES
(1, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'teacher', 'BWUCSENTCSTDEVT2022016.pdf', 'West Bengal', 'Ratanpur\r\n', '0', 3, 8),
(2, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'teacher', 'BWUCSENTCSTDEVT2022016.pdf', 'West Bengal', 'Ratanpur\r\n', '0', 3, 8),
(3, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'teacher', 'BWUCSENTCSTDEVT2022016.pdf', 'West Bengal', 'Ratanpur\r\n', '0', 3, 8),
(4, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'farmer', 'Student Notice 2022_09_05 Change of classrooms.pdf', 'West Bengal', 'BARASAT', '0', 7, 2),
(5, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'farmer', 'my-passport-photo.jpg', 'West Bengal', 'BARASAT', '0', 7, 2),
(6, 'repeat', 'password', 'rahuldevghorai031@gmail.com', '7865981142', 'farmer', '', 'Kerala', 'barasat', '0', 6, 6),
(7, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'teacher', 'Bishwanath Janaaaaa.pdf', 'West Bengal', 'Ratanpur\r\n', '0', 3, 5),
(8, 'Diptesh ', 'Jana', 'bishwanathjanaavengers@gmail.com', '76384950333', 'teacher', '', 'West Bengal', 'Ratanpur\r\n', '0', 3, 2),
(9, 'Biswajit', 'Roy', 'rahuldevghorai031@gmail.com', '7865981142', 'farmer', 'INDEX.pdf', 'Kerala', 'barasat', '0', 4, 4),
(10, 'BISHWANATH', 'JANA', 'bwubts20100@brainwareuniversity.ac.in', '7865981140', 'farmer', '', 'Kerala', 'BARASAT', '0', 4, 6),
(11, 'BISHWANATH', 'JANA', 'bwubts20100@brainwareuniversity.ac.in', '8659811427', 'farmer', '', 'Kerala', 'BARASAT', '0', 7, 6),
(12, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '78765981142', 'farmer', 'HACKAZARD Brochure.pdf', 'West Bengal', 'Ratanpur\r\n', '0', 3, 3),
(13, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'teacher', '', 'West Bengal', 'Ratanpur\r\n', '6', 7, 3),
(14, 'Ruhan', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'farmer', 'Week 1 Lec 1-5 with watermarking.pdf', 'West Bengal', 'BARASAT', '2', 3, 5),
(15, 'VIki ', 'kdkd', 'bwubts20100@brainwareuniversity.ac.in', '8770930484', 'farmer', 'Fees_card_20010307034.pdf', 'Kerala', 'BARASAT', '1', 3, 2),
(16, 'VIki ', 'kdkd', 'bwubts20100@brainwareuniversity.ac.in', '8770930484', 'farmer', 'Fees_card_20010307034.pdf', 'Kerala', 'BARASAT', '5', 3, 2),
(17, 'hari', 'jana', 'bwubts20100@brainwareuniversity.ac.in', '8770930484', 'farmer', 'Fees_card_20010307034.pdf', 'Kerala', 'kolkata', '1', 3, 2),
(18, 'rabi', 'jana', 'bwubts20120@brainwareuniversity.ac.in', '8770930484', 'farmer', 'Fees_card_20010307034.pdf', 'Kerala', 'kolkata', '5', 3, 2),
(19, 'rabi', 'jana', 'bwubts20120@brainwareuniversity.ac.in', '8770930484', 'farmer', 'Fees_card_20010307034.pdf', 'Kerala', 'kolkata', '5', 3, 2),
(20, 'rabi', 'jana', 'bwubts20120@brainwareuniversity.ac.in', '8770930484', 'farmer', 'Fees_card_20010307034.pdf', 'Kerala', 'kolkata', '5', 3, 2),
(21, 'Bishwanathhh', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'teacher', 'yantra INNOVATION CHAENGE 2022-23.pdf', 'West Bengal', 'Ratanpur\r\n', '1', 1, 1),
(22, 'hello', 'india', 'bishwanathjanaavengers@gmail.com', '7865981142', 'teacher', '', 'West Bengal', 'Ratanpur\r\n', '14', 44, 4),
(23, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'farmer', '', 'West Bengal', 'BARASAT', '6', 5, 3),
(24, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '7865981142', 'teacher', '', 'West Bengal', 'Ratanpur\r\n', '4', 3, 3),
(25, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '9494994949494', 'teacher', '', 'West Bengal', 'Ratanpur\r\n', '3', 22, 2),
(26, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '78659981123', 'teacher', '', 'West Bengal', 'Ratanpur\r\n', '9', 44, 3),
(27, 'hari', 'jana', 'bwubts20100@brainwareuniversity.ac.in', '8770930484', 'farmer', '', 'Kerala', 'kolkata', '6', 22, 2),
(28, 'repeat', 'password', 'rahuldevghorai031@gmail.com', '7865981142', 'farmer', '', 'Kerala', 'barasat', '6', 7, 2),
(29, 'kumar ', 'sanu', 'kumarsanu@gmail.com', '7865981142', 'farmer', '', 'west bengal', 'barasat', '7', 1, 2),
(30, 'Ram', 'bhunia', 'ram@gmail.com', '1234567890', 'farmer', '', 'west bengal', 'BARASAT', '4', 1, 1),
(31, 'Diptesh ', 'Biswas', 'bishwanathjanaavengers@gmail.com', '78659811142', 'farmer', '', 'West Bengal', 'BARASAT', '6', 3, 1),
(32, 'sumon', 'bhunia', 'sumon@gmail.com', '7865981142', 'teacher', '', 'West Bengal', 'BARASAT', '7', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `pacakge_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `pacakge_name`, `price`) VALUES
(1, 'Romantic Seaside Holiday in Andaman- Soulmate Special', 40166),
(2, 'Don\'t ask for security, ask for adventure -Visit Sikkim', 23678);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `fname` varchar(120) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `cardnumber` varchar(30) NOT NULL,
  `cvc` varchar(3) NOT NULL,
  `expdate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `fname`, `lname`, `email`, `dob`, `gender`, `cardnumber`, `cvc`, `expdate`) VALUES
(1, 'BISHWANATH', 'JANA', 'bwubts20100@brainwareuniversity.ac.in', '1997-02-11', 'Male', '87485959955', '780', '2024-01'),
(2, 'Ruhan', 'Jana', 'bishwanathjanaavengers@gmail.com', '2022-10-20', 'male', '94950959696', '949', '2022-01'),
(3, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2022-10-01', 'male', '8383395056555', '444', '2022-12'),
(4, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2022-09-15', 'male', '88098990087776', '675', '2021-12'),
(5, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2022-08-31', 'male', '896666775448789', '888', '2023-01'),
(6, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2022-09-07', 'Male', '8589596006555', '235', '2018-01'),
(7, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2002-06-11', 'male', '123456789', '323', '2022-01'),
(8, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2002-06-11', 'male', '123456789', '323', '2022-01'),
(9, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2020-04-01', 'male', '3333333333333', '333', '2022-12'),
(10, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2020-04-01', 'male', '3333333333333', '333', '2022-12'),
(11, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2020-08-11', 'Male', '7844948948478', '768', '2021-12'),
(12, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2022-09-15', 'male', '2234254353535', '345', '2022-12'),
(13, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2002-06-11', 'Male', '3244534636346', '345', '2022-01'),
(14, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2002-02-11', 'Male', '23354654657', '345', '2022-12'),
(15, 'Bishwanath', 'Jana', 'bishwanathjanaavengers@gmail.com', '2002-02-11', 'Male', '23354654657', '345', '2022-12'),
(16, 'Sita ', 'jana', 'bishwanathjanaavengers@gmail.com', '2022-08-11', 'Male', '21456477889900', '111', '2022-01'),
(17, 'BISHWANATH', 'JANA', 'bwubts20100@brainwareuniversity.ac.in', '2033-04-11', 'Male', '124545565767', '456', '2022-12'),
(18, 'Sumon', 'Bhunia', 'bishwanathjanaavengers@gmail.com', '2010-07-11', 'Male', '53758607783623', '123', '2022-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hello`
--
ALTER TABLE `hello`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hello`
--
ALTER TABLE `hello`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
