-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 04:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(17) NOT NULL,
  `gender` varchar(9) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(14) NOT NULL,
  `hobbies` varchar(57) NOT NULL,
  `displaypic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `gender`, `dob`, `address`, `hobbies`, `displaypic`) VALUES
(1, 'Tejas Vispute', 'Male', '2023-08-17', 'sdsds', 'Reading,Gaming', 0x75706c6f6164732f3834303032342e6a7067),
(2, 'Ronak sancheti', 'Male', '2023-08-15', 'hjhhjhjjh', 'Reading,Gaming', 0x75706c6f6164732f7a65746f6e672d6c692d555a33563641563579346f2d756e73706c6173682e6a7067),
(3, 'Prompt', 'Male', '2023-08-29', 'eerrer', 'Reading,Gaming', 0x75706c6f6164732f3834303032342e6a7067),
(4, 'Tejas Vispute123', 'Male', '2023-08-16', 'xyz', 'Gaming', ''),
(5, 'Tejas Vispute0909', 'Male', '2023-09-07', 'qqqq', 'Reading', ''),
(6, 'Rahul Sangi', 'Male', '2002-02-21', '02020202', 'Reading,Gaming', ''),
(7, 'Rahul gandhi', 'Male', '2002-02-21', '02020202', 'Reading,Gaming', 0x75706c6f6164732f7a65746f6e672d6c692d555a33563641563579346f2d756e73706c6173682e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
