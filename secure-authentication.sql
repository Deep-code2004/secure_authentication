-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2025 at 03:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secure-authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(16, 'Pari', 'pari', '0291d0ee809eb60deedc864e0c10380d'),
(17, 'Deepkhatri', 'deep', '6627415e807ee33c7302917216e7da68');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `image`, `username`, `useremail`, `password`, `user date`) VALUES
(1, '', 'deep', 'deep', '6627415e807ee33c7302917216e7da68', '0000-00-00'),
(2, '', 'deep', 'deepkhatri184@gmail.com', '6627415e807ee33c7302917216e7da68', '0000-00-00'),
(3, 'DSC_0003.jpg', 'deep', 'deepkhatri050@gmail.com', '6627415e807ee33c7302917216e7da68', '0000-00-00'),
(4, 'User_547.jpg', 'riya', 'riya', '79a2e96423130317954dd654e226dbcc', '0000-00-00'),
(5, 'User_398.jpg', 'moti', 'aur moti', '145353cd147486f9635429afdf8b922c', '0000-00-00'),
(6, 'User_474.jpg', 'mom', 'deepkhatri050@gmail.com', 'bd1d7b0809e4b4ee9ca307aa5308ea6f', '0000-00-00'),
(7, 'User_970.jpg', 'deep', 'deepkhatri184@gmail.com', '6627415e807ee33c7302917216e7da68', '0000-00-00'),
(8, 'User_268.jpg', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
