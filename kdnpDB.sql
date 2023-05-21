-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2023 at 07:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdnpDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `address`, `created_at`) VALUES
(1, 'Bill Gaten', 'billy@hgh.cjs', '7832786445454545', 'centralMarket', '2023-05-21 16:34:56'),
(2, 'jeff BEzzos', 'mally@hgh.wol', '78327864', 'Unguwan Rimi', '2023-05-21 16:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `kdnp_vctm`
--

CREATE TABLE `kdnp_vctm` (
  `id` int(250) NOT NULL,
  `folio` varchar(250) NOT NULL,
  `caseid` varchar(250) NOT NULL,
  `state` text NOT NULL,
  `lga` text NOT NULL,
  `district` varchar(55) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `sex` text NOT NULL,
  `age` int(55) NOT NULL,
  `remark` varchar(350) NOT NULL,
  `db_TimeStamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kdnp_vctm`
--

INSERT INTO `kdnp_vctm` (`id`, `folio`, `caseid`, `state`, `lga`, `district`, `fullname`, `sex`, `age`, `remark`, `db_TimeStamp`) VALUES
(1, 'test', 'fhh', 'tgtt', 'dfdf', 'dfdff', 'ddff', 'fded', 45, 'ddfd', '2023-05-21 13:55:19.536818');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kdnp_vctm`
--
ALTER TABLE `kdnp_vctm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kdnp_vctm`
--
ALTER TABLE `kdnp_vctm`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
