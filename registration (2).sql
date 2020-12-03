-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 11:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_master`
--

CREATE TABLE `answer_master` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer_master`
--

INSERT INTO `answer_master` (`id`, `question_id`, `answer`) VALUES
(1, 1, 'nahi BATUNGA'),
(2, 1, '500'),
(3, 2, 'dfghjk'),
(7, 1, ''),
(8, 1, 'Write Your Answelkjhgfdsr Here ......'),
(9, 2, 'kjhgfd'),
(10, 2, 'bhai..'),
(11, 4, 'ladddoooooooooooooooooooooo'),
(14, 4, 'how crop can be cultivated.........'),
(15, 4, 'how crop can be cultivatd'),
(16, 4, 'how to cultivate the crops???????????//'),
(17, 10, 'drink complain twice a day'),
(18, 1, 'yggygy'),
(19, 2, 'rrrrr'),
(20, 14, 'HAA MAY KE MEHENE ,ME FAMER WILL GEET SUPPORT FROM GOVT IN KRISHI BANKS'),
(21, 14, 'LKI NAI YE YOJNA GOVT NE BAND KART DIYA HAI,TO ISKA KOI BHUKTAN NAI MILEGA'),
(22, 10, 'pull ups with 2 glass of bon vieta'),
(23, 15, 'yes it is helpful'),
(24, 15, 'till march it is helpful');

-- --------------------------------------------------------

--
-- Table structure for table `bahikhata`
--

CREATE TABLE `bahikhata` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `month` varchar(40) NOT NULL,
  `year` decimal(7,0) NOT NULL,
  `crop` varchar(20) NOT NULL,
  `production` int(11) NOT NULL,
  `seed` int(11) NOT NULL,
  `fertilizer` int(11) NOT NULL,
  `pesticides` int(11) NOT NULL,
  `labour` int(11) NOT NULL,
  `maschinary` int(11) NOT NULL,
  `electricity` int(11) NOT NULL,
  `water` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `MSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bahikhata`
--

INSERT INTO `bahikhata` (`id`, `user_id`, `month`, `year`, `crop`, `production`, `seed`, `fertilizer`, `pesticides`, `labour`, `maschinary`, `electricity`, `water`, `sum`, `MSP`) VALUES
(1, 1, 'january-june', '2010', 'Rice', 40, 4000, 6000, 2000, 8888, 1000, 9000, 2555, 33443, 0),
(2, 1, 'july-december', '2014', 'Rice', 0, 7, 8, 9, 4, 5, 6, 1, 40, 0),
(18, 1, 'january-june', '2010', 'Rice', 8, 88, 888, 88, 88, 888, 888, 88, 3016, 0),
(19, 1, 'july-december', '2013', 'paddy', 40, 778, 77, 888, 1, 999, 44, 2, 2789, 0),
(21, 1, 'january-june', '2011', 'Rice', 11, 11, 11, 11, 111, 11, 11, 11, 177, 0),
(22, 20, 'january-june', '2010', 'paddy', 77, 77, 77, 7, 7777, 77, 7, 77, 8099, 0),
(23, 20, 'july-december', '2010', 'Rice', 40, 4, 4, 44, 44, 44, 44, 44, 228, 0),
(24, 1, 'july-december', '2012', 'Wheat', 70, 77, 55, 55, 55, 55, 55, 55, 407, 0),
(25, 1, 'january-june', '2015', '3', 77, 99, 1, 99, 1, 44, 44, 999, 1287, 0),
(26, 1, 'january-june', '2011', '1', 70, 787, 444, 888, 99, 999, 888, 999, 5104, 0),
(27, 1, 'january-june', '2020', '1', 7, 850, 900, 1400, 2000, 3000, 3000, 800, 11950, 0),
(28, 1, 'july-december', '2019', '1', 40, 2000, 10000, 4000, 3000, 2000, 1000, 2000, 24000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `msp`
--

CREATE TABLE `msp` (
  `s.no` int(11) NOT NULL,
  `crops` varchar(40) NOT NULL,
  `msp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msp`
--

INSERT INTO `msp` (`s.no`, `crops`, `msp`) VALUES
(1, 'rice', 1835),
(2, 'wheat', 1840),
(3, 'dal', 125),
(4, 'jute', 3950),
(5, 'paddy', 65),
(6, 'chana', 270);

-- --------------------------------------------------------

--
-- Table structure for table `question_master`
--

CREATE TABLE `question_master` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_master`
--

INSERT INTO `question_master` (`id`, `question`) VALUES
(1, 'Which type of pesticides is used in Rice ?'),
(2, 'Which type of pesticides is used in Rice?'),
(4, 'can you tell me plz?'),
(10, 'how to increase height'),
(11, 'Write Your Answer Here ......'),
(12, 'Write Your Answer Hjgyguigygygere ......'),
(13, 'Write Your Answer Here ......'),
(14, 'IN 2020,CHANA KA NUKSHA HUA HAI,SO GOVT WILL HELP FOR THIS OR NOT'),
(15, 'is it really helpful');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `rateid` int(11) NOT NULL,
  `rating` float NOT NULL,
  `farmer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `rateid`, `rating`, `farmer_id`) VALUES
(10, 1, 3, 18),
(11, 2, 5, 18),
(24, 1, 5, 1),
(25, 2, 1, 1),
(26, 4, 3, 1),
(27, 9, 4, 1),
(28, 10, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(10) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `mobile` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `firstname`, `lastname`, `username`, `password`, `city`, `mobile`) VALUES
(1, 'sar', 'gupta', 'adarsh', '123456789', 'deokar', '9589547657'),
(17, 'ashish', 'soyetra', 'ashish12', '987654321', 'chapa', '485266'),
(18, 'ashish', 'soyetra', 'ashish', '123456789', 'saja', '789456123'),
(19, 'jagpreet', 'makkad', 'jagpreet', '123456789', 'mahasamud', '789456123'),
(20, 'patna', 'ji', 'patna', '123456789', 'bihar', '9589547657'),
(21, 'rishi', 'naran', 'xyz', '123456789', 'bon', '92912889'),
(22, 'gunda', 'bhaiya', 'gunda', '123456789', 'bhilai', '789456123'),
(23, 'vishu', 'gupta', 'vishu', '262626', 'bhilai', '7869887879');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_info`
--

CREATE TABLE `vendor_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `store_name` varchar(40) NOT NULL,
  `district` varchar(50) NOT NULL,
  `mobile` decimal(11,0) NOT NULL,
  `address` varchar(40) NOT NULL,
  `review` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_info`
--

INSERT INTO `vendor_info` (`id`, `firstname`, `lastname`, `username`, `password`, `store_name`, `district`, `mobile`, `address`, `review`) VALUES
(1, 'adarsh', 'Gupta', 'adarsh', '123456789', 'dawa khana', 'durg', '2147483647', 'saitan gali', 4),
(2, 'ashish', 'soyetra', 'ashish1', 'ashish', 'ration shop', 'champa', '7474747474', 'samsan ke piche', 3),
(4, 'ADITI', 'JINDAL', 'ADITZ', '123456789', 'JINDAL KHATU WALA', '', '9754233249', '', 3),
(5, 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaa', '', '123344', '', 0),
(6, 'yessss', 'sss', 'ssgi', '000000@', 'ration shop', '', '866554', '', 0),
(9, 'Raghvendra', 'chandrakar', 'raghu', '123456789', 'chandrakar krishi kendra', 'Bemetara', '7894561230', 'bus stand,dehri road,deokar,block-saja', 4),
(10, 'parvez', 'beg', 'parru', '123456789', 'parvez krishi unit', 'bemetara', '7894561232', 'mahaveer chowk,devkar,block-saja', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_master`
--
ALTER TABLE `answer_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahikhata`
--
ALTER TABLE `bahikhata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msp`
--
ALTER TABLE `msp`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `question_master`
--
ALTER TABLE `question_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vendor_info`
--
ALTER TABLE `vendor_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_master`
--
ALTER TABLE `answer_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `bahikhata`
--
ALTER TABLE `bahikhata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `msp`
--
ALTER TABLE `msp`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `question_master`
--
ALTER TABLE `question_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vendor_info`
--
ALTER TABLE `vendor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
