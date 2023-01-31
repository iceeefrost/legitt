-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 08:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) NOT NULL,
  `student` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(136, '0', 'ccv', 'cc', '2023-01-29 14:44:13'),
(137, '136', 'marielle', 'cvc', '2023-01-29 14:44:23'),
(138, '0', 'ddd', 'cvvc', '2023-01-29 15:44:44'),
(139, '', 'ijj', 'oijj', '2023-01-29 15:44:52'),
(140, '', 'hakdog', 'hakdog', '2023-01-29 15:45:26'),
(141, '140', 'marielle', ':)', '2023-01-29 15:49:55'),
(142, '0', 'marielle', 'xx', '2023-01-29 15:58:50'),
(143, '142', 'marielle', 'hey', '2023-01-29 16:42:20'),
(144, '0', 'skdlms', 'pano to', '2023-01-30 04:00:42'),
(145, '0', 'sjsj', 'eh', '2023-01-30 04:02:17'),
(146, '144', 'sjsj', 'ewan ko rin', '2023-01-30 04:02:24'),
(147, '144', 'sjsj', 'xx', '2023-01-30 05:01:23'),
(148, '0', 'ice', 'iceee', '2023-01-30 09:40:22'),
(149, '0', 'ice', 'ff', '2023-01-30 09:41:32'),
(150, '0', 'ice', 'fff', '2023-01-30 09:42:52'),
(151, '0', 'ice', 'fff', '2023-01-30 09:43:41'),
(152, '0', 'ice', 'fff', '2023-01-30 09:44:07'),
(153, '0', 'ice', 'ff', '2023-01-30 09:44:27'),
(154, '0', 'ice', 'ffff', '2023-01-30 09:45:09'),
(155, '0', 'ice', 'dddf', '2023-01-30 10:52:15'),
(156, '0', 'ice', 'ffff', '2023-01-30 10:52:58'),
(157, '0', 'ice', 'dfdfd', '2023-01-30 10:53:05'),
(158, '0', 'ice', 'vv', '2023-01-30 10:53:51'),
(159, '0', 'ice', 'gg', '2023-01-30 10:54:01'),
(160, '0', 'ice', 'fffd', '2023-01-30 10:54:12'),
(161, '0', 'ice', 'fgf', '2023-01-30 10:58:16'),
(162, '0', 'ice', 'flfd', '2023-01-30 11:00:32'),
(163, '0', 'ice', 'bfbbv', '2023-01-30 11:01:17'),
(164, '0', 'ice', 'fff', '2023-01-30 11:06:51'),
(165, '0', 'ice', 'cc', '2023-01-30 11:07:45'),
(166, '0', 'ice', 'fgff', '2023-01-30 11:08:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
