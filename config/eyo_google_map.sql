-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2015 at 04:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eyo_google_map`
--

-- --------------------------------------------------------

--
-- Table structure for table `eyo_admin`
--

CREATE TABLE IF NOT EXISTS `eyo_admin` (
`id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eyo_admin`
--

INSERT INTO `eyo_admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'eyo', 'f49072af6ae5b460c6bd3240d1b9132e', 'test@eyo.com');

-- --------------------------------------------------------

--
-- Table structure for table `eyo_maps`
--

CREATE TABLE IF NOT EXISTS `eyo_maps` (
`id` int(11) NOT NULL,
  `eyo_admin_id` int(10) NOT NULL,
  `full_address` text,
  `lat` decimal(10,8) DEFAULT NULL,
  `lng` decimal(11,8) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eyo_maps`
--

INSERT INTO `eyo_maps` (`id`, `eyo_admin_id`, `full_address`, `lat`, `lng`, `status`) VALUES
(3, 1, 'Reichenhainer StraÃŸe, Chemnitz, Germany', '50.80979260', '12.93488810', 1),
(4, 1, 'Sonnenberg, Chemnitz, Germany', '50.83555600', '12.94000000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eyo_admin`
--
ALTER TABLE `eyo_admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `eyo_maps`
--
ALTER TABLE `eyo_maps`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eyo_admin`
--
ALTER TABLE `eyo_admin`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `eyo_maps`
--
ALTER TABLE `eyo_maps`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
