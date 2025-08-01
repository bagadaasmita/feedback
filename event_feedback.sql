-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2025 at 12:47 AM
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
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_feedback`
--

CREATE TABLE `event_feedback` (
  `id` int(11) NOT NULL,
  `event_id` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `rating_overall` int(11) DEFAULT NULL,
  `rating_project1` int(11) DEFAULT NULL,
  `rating_project2` int(11) DEFAULT NULL,
  `rating_project3` int(11) DEFAULT NULL,
  `rating_project4` int(11) DEFAULT NULL,
  `liked_most` text DEFAULT NULL,
  `improvement_suggestions` text DEFAULT NULL,
  `attend_again` varchar(10) DEFAULT NULL,
  `submission_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_feedback`
--

INSERT INTO `event_feedback` (`id`, `event_id`, `name`, `email`, `user_type`, `rating_overall`, `rating_project1`, `rating_project2`, `rating_project3`, `rating_project4`, `liked_most`, `improvement_suggestions`, `attend_again`, `submission_time`) VALUES
(4, 'IT_PROJECT_SHOWCASE_2025', 'pooja', 'dhvni@gamil.com', 'Student', 3, 2, NULL, 3, NULL, 'weggegegeg', 'svsrg', 'No', '2025-08-01 19:29:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_feedback`
--
ALTER TABLE `event_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_feedback`
--
ALTER TABLE `event_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
