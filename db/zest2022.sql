-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 06:28 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zest2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `audience`
--

CREATE TABLE `audience` (
  `id` int(100) NOT NULL,
  `eid` int(100) DEFAULT NULL,
  `pid` varchar(255) NOT NULL,
  `reg_event` varchar(255) NOT NULL,
  `reg_date` date NOT NULL,
  `venue` varchar(255) NOT NULL,
  `event_start_time` time(6) NOT NULL,
  `event_end_time` time(6) NOT NULL,
  `event_date` date DEFAULT NULL,
  `tid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `sln` int(100) NOT NULL,
  `eid` int(100) NOT NULL,
  `event_name` varchar(250) DEFAULT NULL,
  `event_reg` int(100) NOT NULL,
  `event_start_time` time(6) NOT NULL,
  `event_end_time` time(6) NOT NULL,
  `event_date` date NOT NULL,
  `pid` varchar(12) DEFAULT NULL,
  `event_venue` varchar(250) DEFAULT NULL,
  `event_type` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`sln`, `eid`, `event_name`, `event_reg`, `event_start_time`, `event_end_time`, `event_date`, `pid`, `event_venue`, `event_type`) VALUES
(1, 1, 'Duet Dance ', 0, '10:00:00.000000', '11:00:00.000000', '2022-11-18', '', 'CENTENNIAL AUDITORIUM', 'Group'),
(2, 2, 'Rangoli Making', 0, '10:00:00.000000', '11:00:00.000000', '2022-11-18', '', 'IN FRONT OF LIBRARY', 'Solo'),
(3, 3, 'COUNTER STRIKE', 0, '10:00:00.000000', '11:00:00.000000', '2022-11-18', '', 'Computer Center', 'Solo'),
(4, 4, 'Mime', 0, '11:00:00.000000', '12:00:00.000000', '2022-11-18', '', 'OLD AUDI', 'Group'),
(5, 5, 'The \"Know-it-all\"', 0, '11:00:00.000000', '12:00:00.000000', '2022-11-18', '', 'CS Seminar Hall', 'Group'),
(6, 6, 'Mehendika', 0, '11:00:00.000000', '12:00:00.000000', '2022-11-18', '', 'ED HALL', 'Solo'),
(7, 7, 'Solo Singing', 0, '11:00:00.000000', '12:00:00.000000', '2022-11-18', '', 'CENTENNIAL AUDITORIUM', 'Solo'),
(8, 8, 'Treasure Hunt', 0, '12:00:00.000000', '13:00:00.000000', '2022-11-18', '', 'INFORMALS\' PANDAL', 'Group'),
(9, 9, 'Mono Act', 0, '12:00:00.000000', '13:00:00.000000', '2022-11-18', 'P20224', 'MINI AUDI', 'Solo'),
(10, 10, 'You\'re a Quizzical , Harry', 0, '12:30:00.000000', '13:30:00.000000', '2022-11-18', '', 'G C R', 'Group'),
(11, 11, 'Best Out of Waste', 0, '12:30:00.000000', '13:30:00.000000', '2022-11-18', '', 'OLD AUDITORIUM', 'Solo'),
(12, 12, 'Solo Dance ', 0, '13:00:00.000000', '14:00:00.000000', '2022-11-18', '', 'CENTENNIAL AUDITORIUM', 'Solo'),
(13, 13, 'Theme Solo', 0, '13:00:00.000000', '14:00:00.000000', '2022-11-18', '', 'CS SEMINAR HALL', 'Solo'),
(14, 14, 'RAP BATTLE', 0, '14:00:00.000000', '15:00:00.000000', '2022-11-18', '', 'INFORMALS\' PANDAL', 'Group'),
(15, 15, 'Multiscene', 0, '14:00:00.000000', '15:00:00.000000', '2022-11-18', 'P20222', 'CENTENNIAL AUDITORIUM', 'Group'),
(16, 16, '90\'s Guess The Song', 0, '14:30:00.000000', '15:30:00.000000', '2022-11-18', '', 'NEW SEMINAR HALL', 'Solo'),
(17, 17, 'Movie Maniac', 0, '15:00:00.000000', '16:00:00.000000', '2022-11-18', '', 'Centennial  Auditorium', 'Solo'),
(18, 18, 'Tattoo Making', 0, '15:00:00.000000', '16:00:00.000000', '2022-11-18', '', 'EN SEMINAR HALL', 'Solo'),
(19, 19, 'TEKKEN 3', 0, '15:00:00.000000', '16:00:00.000000', '2022-11-18', 'P20222', 'Computer Center', 'Solo'),
(20, 20, 'Battle Of Bands', 0, '16:00:00.000000', '17:30:00.000000', '2022-11-18', '', 'MAIN AUDI PANDAL', 'Group'),
(21, 21, 'Face-Off', 0, '16:00:00.000000', '17:00:00.000000', '2022-11-18', '', 'CENTENNIAL AUDITORIUM', 'Solo'),
(22, 22, 'The Einstein\'s Brain', 0, '17:00:00.000000', '18:00:00.000000', '2022-11-18', '', 'CS Seminar Hall', 'Solo'),
(23, 23, 'Renaissance', 0, '18:00:00.000000', '20:30:00.000000', '2022-11-18', '', 'MAIN AUDI PANDAL', 'Solo'),
(24, 24, 'Gratis (Hand Free Paintings)', 0, '09:00:00.000000', '10:00:00.000000', '2022-11-19', '', 'ED HALL', 'Solo'),
(25, 25, 'Situational Antakshari', 0, '09:00:00.000000', '10:00:00.000000', '2022-11-19', '', 'NEW SEMINAR HALL', 'Group'),
(26, 26, 'Origami', 0, '09:30:00.000000', '10:30:00.000000', '2022-11-19', '', 'E C SEMINAR HALL', 'Group'),
(27, 27, 'Reach For The stars', 0, '10:00:00.000000', '11:00:00.000000', '2022-11-19', '', 'New Seminar Hall', 'Group'),
(28, 28, 'Duet Song ', 0, '10:00:00.000000', '11:00:00.000000', '2022-11-19', '', 'EN SEMIAR HALL', 'Group'),
(29, 29, 'Street Play', 0, '11:00:00.000000', '12:30:00.000000', '2022-11-19', '', 'T D P GROUND', 'Group'),
(30, 30, 'BGMI', 0, '12:30:00.000000', '13:30:00.000000', '2022-11-19', 'P20227', 'NEW SEMINAR HALL', 'Group'),
(31, 31, 'Voice Of Zest', 0, '12:30:00.000000', '13:30:00.000000', '2022-11-19', '', 'PANDAL', 'Solo'),
(32, 32, 'Paper Fashionisha (Newspaper Dress)', 0, '13:00:00.000000', '14:00:00.000000', '2022-11-19', '', 'M E SEMINAR HALL', 'Solo'),
(33, 33, 'Short Play', 0, '13:00:00.000000', '14:00:00.000000', '2022-11-19', '', 'CS SEMINAR HALL', 'Group'),
(34, 34, 'Best Dancer', 0, '13:30:00.000000', '14:30:00.000000', '2022-11-19', '', 'CENTENNIAL AUDITORIUM', 'Solo'),
(35, 35, 'Sketching', 0, '13:30:00.000000', '14:30:00.000000', '2022-11-19', '', 'ED HALL', 'Group'),
(36, 36, 'Movie Spoof', 0, '13:30:00.000000', '14:30:00.000000', '2022-11-19', '', 'MAIN AUDI PANDAL', 'Solo'),
(37, 37, 'FIFA', 0, '14:00:00.000000', '15:00:00.000000', '2022-11-19', '', 'Computer Center', 'Solo'),
(38, 38, 'Wah Wah Kya baat hain!!', 0, '14:30:00.000000', '15:30:00.000000', '2022-11-19', '', 'Centennial  Auditorium', 'Solo'),
(39, 39, 'Zest Got Talent', 0, '14:30:00.000000', '15:30:00.000000', '2022-11-19', '', 'INFORMALS\' PANDAL', 'Group'),
(40, 40, 'Instrumental', 0, '15:00:00.000000', '16:00:00.000000', '2022-11-19', '', 'MAIN AUDI PANDAL', 'Group'),
(41, 41, 'Group Dance(Foot Lose)', 0, '16:30:00.000000', '18:30:00.000000', '2022-11-19', '', 'CENTENNIAL AUDITORIUM', 'Group'),
(42, 42, 'Star Night', 0, '19:00:00.000000', '00:00:00.000000', '2022-11-19', '', 'Academic Ground ', '');

-- --------------------------------------------------------

--
-- Table structure for table `pid`
--

CREATE TABLE `pid` (
  `id` int(250) NOT NULL,
  `pid` varchar(12) NOT NULL,
  `name` varchar(250) NOT NULL,
  `roll_no` varchar(13) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `batch` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `ptid` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `generated_by` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pid`
--

INSERT INTO `pid` (`id`, `pid`, `name`, `roll_no`, `phone`, `batch`, `branch`, `course`, `gender`, `email`, `ptid`, `college`, `date`, `generated_by`) VALUES
(1, 'P20221', 'Rishabh Srivastava', '1900140210018', '0703756439', '2019', 'Electrical and Electronics Engineering', 'BTech', 'Male', 'ersrivastavarishabh@gmail.com', NULL, 'SRMS CET', '2022-11-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`id`, `name`, `username`, `password`, `level`) VALUES
(1, 'Main admin', 'admin@zest.com', 'admin222k', 'Admin'),
(2, 'User', 'user@zest.com', 'user', 'user'),
(3, 'Judgement', 'judgement@zest.com', 'jczest', 'Judgement'),
(4, 'user1', 'user1@zest.com', 'user', 'user'),
(5, 'Sub admin', 'subadmin@zest.com', 'subadmin', 'subadmin');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `post`) VALUES
(1, 'Raunak Tiwari', 'President'),
(2, 'Vanshika Gupta', 'Secretary'),
(3, 'Muskan Rana', 'Treasurer'),
(4, 'Rishabh Srivastava', 'Vice President'),
(5, 'Yash Verma', 'Vice President'),
(6, 'Tarang Varshney ', 'Vice President'),
(7, 'Harsh Wardhan Singh', 'Vice President'),
(8, 'Vaishnavi Sharma', 'Joint Secretary'),
(9, 'Shruti Sharma', 'Joint Secretary'),
(10, 'Mridul Shinghal', 'Zest Organizing Secretary'),
(11, 'Abhishek Pratap Singh', 'Zest Organizing Secretary');

-- --------------------------------------------------------

--
-- Table structure for table `tid`
--

CREATE TABLE `tid` (
  `id` int(100) NOT NULL,
  `TID` varchar(1000) NOT NULL,
  `Total Members` int(250) NOT NULL,
  `date` date NOT NULL,
  `college` varchar(255) DEFAULT NULL,
  `generated_by` varchar(250) DEFAULT NULL,
  `members` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audience`
--
ALTER TABLE `audience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`sln`);

--
-- Indexes for table `pid`
--
ALTER TABLE `pid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tid`
--
ALTER TABLE `tid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audience`
--
ALTER TABLE `audience`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `sln` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `pid`
--
ALTER TABLE `pid`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tid`
--
ALTER TABLE `tid`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
