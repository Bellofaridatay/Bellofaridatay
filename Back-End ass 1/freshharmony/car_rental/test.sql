3 -- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 08:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `ID` int(11) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `MiddleName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `MiddleName` varchar(255) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `age` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `uname` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `LastName`, `FirstName`, `MiddleName`, `reg_date`, `age`, `userid`, `pass`, `uname`, `email`) VALUES
(1, 'abdul', 'yusuf', 'o', '2024-02-12 20:14:01', 21, 'n1', NULL, NULL, NULL),
(3, 'abdul', 'abdulrahman', 'Ola', '2024-02-12 19:47:02', 50, 'n2', NULL, NULL, NULL),
(9, 'abdul', 'abdulrahman', 'Ola', '2024-02-12 19:47:02', 50, 'n6', NULL, NULL, NULL),
(13, 'abdul', 'abdulrahman', 'Ola', '2024-02-12 19:47:02', 50, 'n7', NULL, NULL, NULL),
(14, 'abdul', 'abdulrahman', 'Ola', '2024-02-12 19:47:02', 50, 'n8', '555', NULL, NULL),
(20, 'Mohammed', 'Lawal', '', '2024-02-17 21:40:29', 34, 'n3', '123', 'abdul28', 'yusufabdulrahman05@gmail.com'),
(21, 'Mohammed', 'Lawal', '', '2024-02-17 21:40:54', 34, 'n4', '123', 'abdul2', 'yusufabdulrahman05@gmail.com'),
(24, 'Mohammed', 'Lawal', '', '2024-02-17 21:45:18', 34, 'n9', '123', 'abdul23', 'yusufabdulrahman05@gmail.com'),
(29, 'Mohammed', 'Lawal', '', '2024-02-17 21:52:53', 34, 'n10', '123', 'abdul33', 'yusufabdulrahman05@gmail.com'),
(30, 'Mohammed', 'Lawal', '', '2024-02-17 21:53:21', 34, 'n5', '123', 'abdul6', 'yusufabdulrahman05@gmail.com'),
(31, 'Mohammed', 'Lawal', '', '2024-02-18 19:41:59', 34, 'n11', '827ccb0eea8a706c4c34a16891f84e7b', 'abdul68', 'yusufabdulrahman05@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
