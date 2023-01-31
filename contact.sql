-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 08:05 PM
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
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(55) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(80, 'mkm', 'kmkm@dfd.com', 'knkn', 'knkn', '2023-01-30'),
(81, 'mkm', 'kmkm@dfd.com', 'knkn', 'knkn', '2023-01-30'),
(82, 'kn', 'fef@fdfj.com', 'uhjh', 'jhjh', '2023-01-30'),
(83, 'lmlm', 'lmlm@dfk.com', 'lmlm', 'lmlm', '2023-01-30'),
(84, 'lmlm', 'l@df.com', 'lm', 'lmlmlmlm', '2023-01-30'),
(85, 'knkn', 'knkn@fd.com', 'knkn', 'knkn', '2023-01-30'),
(86, 'knkn', 'knkn@fd.com', 'knkn', 'knkn', '2023-01-30'),
(87, 'knknn', 'knkn@fd.com', 'knkn', 'knkn', '2023-01-30'),
(88, 'knk', 'kjkj@dfkjf.com', 'hhj', 'jhjh', '2023-01-30'),
(89, 'knk', 'kjkj@dfkjf.com', 'hhj', 'jhjh', '2023-01-30'),
(90, 'knk', 'kjkj@dfkjf.com', 'hhj', 'jhjh', '2023-01-30'),
(91, 'ice', 'ice@f.com', 'i', 'kk', '2023-01-30'),
(92, 'ice', 'ice@f.com', 'i', 'kk', '2023-01-30'),
(93, 'kjkKN', 'KNK@F.CO', 'KNKN', 'KNKN', '2023-01-30'),
(94, 'kjkKN', 'KNK@F.CO', 'KNKN', 'KNKN', '2023-01-30'),
(95, 'kjkKN', 'KNK@F.CO', 'KNKN', 'KNKN', '2023-01-30'),
(96, 'gg', 'mnmn@fdf.com', 'lml', '\r\nc', '2023-01-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
