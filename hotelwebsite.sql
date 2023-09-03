-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 10:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `aid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`aid`, `name`, `password`) VALUES
(101, 'archana', '123'),
(102, 'admin', '123'),
(103, 'arch', 'd6194c68fcc7e79bb57401be603cb1cc'),
(104, 'mmdd', 'ceb59b8a754a70a4334547ecde83a951'),
(105, 'host', '71144850f4fb4cc55fc0ee6935badddf');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `icon`, `name`, `description`) VALUES
(15, '26727.svg', 'face', 'face'),
(21, '31320.svg', 'hvjhn', 'kn'),
(22, '12908.svg', 'WiFi', 'Our Hotel offers free Internet access. High-speed wireless Internet connection is complimentary both in the rooms and public areas.'),
(23, '4149.svg', 'Parking', 'Our Hotel offers 24-hour indoor parking for its guests. The hotel is directly accessible from the indoor car park . Also Provide wide parking facility with CCTV camera for security.'),
(24, '914.svg', 'TV', 'We Provides TV services are more than just a way to provide entertainment options for hotel guests. Cable TV providers for hotels typically offer solutions .'),
(25, '13462.svg', 'Air-Conditioner', 'Air-conditioner is one of the necessary in our daily lives for regulating temperature. It creates a cool area during the hot summer and a warm area during the winter'),
(26, '28544.svg', 'Medical', 'We provide this this service, typically have a wide range of units to save lives that can give emergencies dealing with non-intensive care and intensive care'),
(27, '15562.svg', 'Room Service', 'Our Hotel provides 24-hour room service.Any time customer can call in reception area for any service . Please click here for Room Service menu.'),
(29, '25115.svg', 'Fire Safty', 'Our Hotel provides Fire Safety Service . For customer Protection And sefety We provide fire safety services For fire related problems.');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`) VALUES
(1, 'WiFi'),
(2, 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `home_silder`
--

CREATE TABLE `home_silder` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_silder`
--

INSERT INTO `home_silder` (`id`, `image`) VALUES
(1, '6534.jpg'),
(2, '30882.jpg'),
(3, '921.jpg'),
(4, '22110.jpg'),
(5, '29945.png'),
(6, '23614.png');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `type`, `image`, `desc`) VALUES
(3, 'rty', '20959.jpg', 'fbsnmz,vsdfgcvhbnmcxdffcvbnm,'),
(4, 'Standard', '3852.jpg', 'Perfect for the single person and for couple.A standard room can accommodate up to two guests. The room may also have a small sitting area, such as a sofa or an armchair.'),
(5, 'Dulex', '32300.jpg', 'Deluxe rooms are usually larger than their standard counterparts, may include a bathtub and a shower in the bathroom. Deluxe Plus rooms offer extra floor space along with exceptional design features.'),
(6, 'Luxury', '20725.jpg', 'Luxury Rooms are typically smaller, and have a clear creative sense and emphasis on design compared to traditional hotels.Beautiful views in every direction â€“ inside and out.'),
(7, 'Suits', '20106.jpg', 'It usually refers to rooms together, like when you get a suite at a fancy hotel. Suites class of accommodations with more space than a typical hotel room,but there should be more than one room to constitute a true suite.'),
(8, 'Connect Room', '11515.jpg', 'These are two rooms connected by a locked adjoining door that can be opened by you and your fellow guests during your stay. located next to each other, and these rooms have a connecting door.');

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(120) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`id`, `name`, `uname`, `phone`, `email`, `address`, `password`, `status`, `datetime`) VALUES
(1, 'archana', 'vujj', 7890567898, '7890567898', 'asfyja', '1234', 1, '2023-09-01 17:07:54'),
(2, 'archana', 'gita', 7890567898, '7890567898', 'asfyja', '1234', 1, '2023-09-01 17:08:43'),
(3, 'rani', 'Rani', 7890567898, '7890567898', 'vjbmn,', '8976', 1, '2023-09-01 23:08:44'),
(4, 'sita', 'site', 7890567898, '7890567898', 'dyfhtygj', '3456', 1, '2023-09-01 23:17:23'),
(5, 'arch', 'asu', 7890567898, '7890567898', 'A / 153 , shivsagar soc. , surat  ', '45d282e7fed55b485182393f7bc6292d', 1, '2023-09-01 23:19:59'),
(6, 'gita1', 'gira1', 7890567898, '7890567898', '104 /radhe soc. ,surat', '35e31e606021b85485cea95f4ce21f7d', 1, '2023-09-01 23:32:44'),
(7, 'babita', 'babita@$%!123', 7890567898, '7890567898', '103/gokuldham soc. , guaregav , mumbai ', '20fe687d58d6295cd94ba4f4ffe4bab4', 1, '2023-09-02 00:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_query`
--

CREATE TABLE `user_query` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_query`
--

INSERT INTO `user_query` (`sr_no`, `name`, `email`, `subject`, `message`, `date`) VALUES
(7, 'archana', 'archna@gmail.com', 'services', 'hii from archana', '2023-08-20 23:41:39'),
(8, 'tmu', 'tmu@gmail.com', 'services', 'best facilites and mind blowing rooms !', '2023-08-20 23:41:58'),
(9, 'arch', 'arch@gmail.com', 'food', 'delicious food', '2023-08-20 23:42:15'),
(10, 'raw', 'raw@gmail.com', 'rooms', 'best rooms', '2023-08-20 23:42:53'),
(11, 'joy', 'joy@gmail.com', 'rooms', 'The rooms were spacious and spotless, with great dÃ©cor and crisp bed sheets. The breakfast buffet was delicious, with a huge variety of options! The staff were attentive and went out of their way to ensure that we were comfortable. Nothing was too much trouble.', '2023-08-20 23:48:42'),
(12, 'jiya', 'jiya@gmail.com', 'garden', 'garden is very beautifull.', '2023-08-27 16:03:18'),
(13, 'rani', 'rani@gmail.com', 'bed', 'bed is very soft', '2023-08-27 16:06:15'),
(14, 'rani', 'rani@gmail.com', 'bed', 'bed is very soft', '2023-08-27 16:06:15'),
(15, 'rani', 'rani@gmail.com', 'bed', 'bed is very soft', '2023-08-27 16:07:42'),
(18, 'fiya', 'fiya@gmail.com', 'rooms', 'best rooms', '2023-08-27 16:13:25'),
(19, 'fiya', 'fiya@gmail.com', 'rooms', 'best rooms', '2023-08-27 16:13:58'),
(20, 'fiya', 'fiya@gmail.com', 'rooms', 'best rooms', '2023-08-27 16:14:04'),
(21, 'fiya', 'fiya@gmail.com', 'rooms', 'best rooms', '2023-08-27 16:14:20'),
(22, 'tita', 'tita@gmail.com', 'services', 'best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing rooms !best facilites and mind blowing ', '2023-08-27 16:27:22'),
(28, 'arch', 'rani@gmail.com', 'facilitiyes', 'delicious food', '2023-08-28 00:33:41'),
(29, 'mood', 'jod@gmail.com', 'jod', 'bed is very soft est sofa best gaddi', '2023-08-28 02:26:25'),
(30, 'mod', 'jod@gmail.com', 'jod', 'bed is very soft est sofa best gaddi', '2023-08-28 02:26:31'),
(31, 'jood', 'jod@gmail.com', 'jod', 'bed is very soft est sofa best gaddi', '2023-08-28 02:26:37'),
(32, 'jod', 'jod@gmail.com', 'jod', 'bed is very soft est sofa best gaddi', '2023-08-28 02:26:43'),
(33, 'jodo', 'jod@gmail.com', 'jod', 'bed is very soft est sofa best gaddi', '2023-08-28 02:30:04'),
(34, 'jado', 'jod@gmail.com', 'jod', 'bed is very soft est sofa best gaddi', '2023-08-28 02:30:11'),
(35, 'jatu', 'jod@gmail.com', 'jod', 'bed is very soft est sofa best gaddi', '2023-08-28 02:32:20'),
(36, 'jatuu', 'jod@gmail.com', 'jod', 'bed is very soft est sofa best gaddi', '2023-08-28 02:32:26'),
(38, 'rani', 'rani@gmail.com', 'facilitiyes', 'simpleAlert(\'ERROR!\',\"Someting Went\'s Wrong\",\"error\");simpleAlert(\'ERROR!\',\"Someting Went\'s Wrong\",\"error\");simpleAlert(\'ERROR!\',\"Someting Went\'s Wrong\",\"error\");simpleAlert(\'ERROR!\',\"Someting Went\'s Wrong\",\"error\");', '2023-08-28 23:49:41'),
(39, 'arch', 'tamannaghaskata14@gmail.com', 'rooms', 'bed is very soft', '2023-08-29 00:37:06'),
(40, 'archita', 'tamannaghaskata14@gmail.com', 'rooms', 'bed is very soft', '2023-08-29 01:44:39'),
(41, 'minu', 'tamannaghaskata14@gmail.com', 'rooms', 'bed is very soft', '2023-08-29 01:44:47'),
(42, 'rani', 'ghaskataarchna@gmail.com', 'services', 'cnk\r\nkscnc\r\n', '2023-08-29 03:27:41'),
(43, 'arch', 'tmu@gmail.com', 'services', 'animate__animated animate__flipInX animate__delay-5sanimate__animated animate__flipInX animate__delay-5sanimate__animated animate__flipInX animate__delay-5s', '2023-08-31 01:59:44'),
(44, 'kiya', 'kiya@gmail.com', 'foods', 'yummy food provideds by your hotel .i love your food .i give you 5 star for your amazing services', '2023-09-01 23:34:52'),
(45, 'didu', 'didu@gmail.com', 'services', 'services are amazing', '2023-09-02 18:16:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_silder`
--
ALTER TABLE `home_silder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`,`uname`);

--
-- Indexes for table `user_query`
--
ALTER TABLE `user_query`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintbl`
--
ALTER TABLE `admintbl`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_silder`
--
ALTER TABLE `home_silder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_query`
--
ALTER TABLE `user_query`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
