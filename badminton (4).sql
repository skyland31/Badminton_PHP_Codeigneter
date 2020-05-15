-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 02:51 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `badminton`
--

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `compet_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `place` text NOT NULL,
  `prize` int(5) NOT NULL,
  `compet_start` date NOT NULL,
  `compet_end` date NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `pay_end` date NOT NULL,
  `auth` int(5) NOT NULL,
  `poster` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`compet_id`, `name`, `detail`, `place`, `prize`, `compet_start`, `compet_end`, `start`, `end`, `pay_end`, `auth`, `poster`) VALUES
(77, 'Walailal Day', 'aasdasd', 'บ้าน', 300, '2020-04-15', '2020-05-09', '2020-04-22', '2020-04-16', '2020-04-29', 0, 0x30),
(85, 'Walailal Day6', 'asds', 'กันตัง', 300, '2020-06-04', '2020-06-25', '2020-05-26', '2020-05-29', '2020-06-02', 0, 0x30);

-- --------------------------------------------------------

--
-- Table structure for table `compet_gen`
--

CREATE TABLE `compet_gen` (
  `id` int(11) NOT NULL,
  `compet_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `gen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `compet_gen`
--

INSERT INTO `compet_gen` (`id`, `compet_id`, `type`, `gen`) VALUES
(11, 77, 1, 4),
(12, 77, 2, 8),
(20, 81, 1, 2),
(21, 81, 2, 6),
(22, 81, 2, 9),
(38, 85, 1, 1),
(39, 85, 1, 2),
(40, 85, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `compet_group`
--

CREATE TABLE `compet_group` (
  `group_id` int(3) NOT NULL,
  `register_id` int(5) NOT NULL,
  `member_id` int(5) NOT NULL,
  `result` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `compet_table`
--

CREATE TABLE `compet_table` (
  `compet_table_id` int(11) NOT NULL,
  `register_id` int(11) NOT NULL,
  `compet_id` int(11) NOT NULL,
  `round` int(11) NOT NULL,
  `result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `generation`
--

CREATE TABLE `generation` (
  `gen_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `generation`
--

INSERT INTO `generation` (`gen_id`, `name`, `type`) VALUES
(1, 'U9', 1),
(2, 'U11', 1),
(3, 'U13', 1),
(4, 'U15', 1),
(5, 'U17', 1),
(6, 'N', 2),
(7, 'S-', 2),
(8, 'S+', 2),
(9, 'P-', 2),
(10, 'P+C', 2);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(10) NOT NULL,
  `line_id` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `password`, `name`, `nick_name`, `birthday`, `phone`, `line_id`, `club`) VALUES
(1, 'user1', '1234', 'name1', 'name1', '2020-05-05', '0912345678', '123456', 'WU1'),
(2, 'user2', '1234', 'name2', 'name2', '2020-05-09', '0912345678', '12346821', 'WU2'),
(4, 'user4', '1234', 'name4', 'name4', '2020-05-05', '913152524', 'asdas', 'WU2'),
(5, 'user5', '1234', 'name5', 'name5', '2020-05-13', '0912345678', 'asdzxca', 'WU1'),
(6, 'user6', '1234', 'name6', 'name6', '2020-05-05', '913152524', 'asdsad', 'WU1'),
(7, 'user7', '1234', 'name6', 'name6', '2020-05-12', '0912345678', 'name6', 'WU1'),
(8, 'user8', '1234', 'name8', 'name8', '2020-05-05', '913152524', '123', 'WU2'),
(9, 'user9', '1234', 'name9', 'name9', '2020-05-05', '0912345678', 'asdasd', 'WU2'),
(10, 'user10', '1234', 'name10', 'name10', '2020-05-12', '913152524', 'asd', 'WU2'),
(11, 'user11', '1234', 'name11', 'name11', '2020-05-20', '0912345678', 'asd', 'WU2'),
(12, 'user12', '1234', 'name12', 'name12', '2020-05-05', '913152524', 'asd', 'WU1'),
(13, 'user13', '1234', 'name13', 'name13', '2020-05-20', '0912345678', 'asd', 'WU1'),
(14, 'user14', '1234', 'name14', 'name14', '2020-05-05', '913152524', 'asd', 'WU1'),
(15, 'user15', '1234', 'name15', 'name15', '2020-05-20', '0912345678', 'asd', 'WU1');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(5) NOT NULL,
  `member_id` int(11) NOT NULL,
  `compet_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `gen_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `member2` int(11) NOT NULL,
  `team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `member_id`, `compet_id`, `type_id`, `gen_id`, `status`, `member2`, `team`) VALUES
(1, 1, 77, 2, 6, 1, 5, 'A'),
(2, 2, 77, 2, 6, 1, 4, 'B'),
(4, 6, 77, 2, 6, 1, 7, 'C'),
(5, 8, 77, 2, 6, 1, 9, 'AB'),
(6, 10, 77, 2, 6, 1, 11, 'ABC'),
(7, 12, 77, 2, 7, 1, 5, 'AWS'),
(8, 14, 77, 2, 7, 1, 15, 'ASF');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(2) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `name`) VALUES
(1, 'เยาวชน'),
(2, 'ประชาชน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`compet_id`);

--
-- Indexes for table `compet_gen`
--
ALTER TABLE `compet_gen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compet_group`
--
ALTER TABLE `compet_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `compet_table`
--
ALTER TABLE `compet_table`
  ADD PRIMARY KEY (`compet_table_id`);

--
-- Indexes for table `generation`
--
ALTER TABLE `generation`
  ADD PRIMARY KEY (`gen_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `compet_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `compet_gen`
--
ALTER TABLE `compet_gen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `compet_group`
--
ALTER TABLE `compet_group`
  MODIFY `group_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compet_table`
--
ALTER TABLE `compet_table`
  MODIFY `compet_table_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generation`
--
ALTER TABLE `generation`
  MODIFY `gen_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
