-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2017 at 01:08 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mine`
--

-- --------------------------------------------------------

--
-- Table structure for table `domHelp`
--

CREATE TABLE `domHelp` (
  `dhID` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `serviceArea` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domHelp`
--

INSERT INTO `domHelp` (`dhID`, `category`, `firstName`, `lastName`, `serviceArea`, `description`) VALUES
(1, 'Maid', 'ABC', 'DEF', 'Piplod', 'Can broom and mop and wash dishes'),
(2, 'Carpenter', 'Chandu', 'Carp', 'Vesu', 'Can do all sorts of carpentry work'),
(3, 'Electrician', 'Vishesh', 'Venkat', 'Magdalla', 'Solves all electrical related problems'),
(4, 'Maid', 'Shanta', 'Ben', 'Vesu', 'Can wash dishes. Can babysit. Can be a daily helper. Will satisfy your needs completely.'),
(5, 'Electrician', 'Raghu', 'Pandey', 'Piplod', 'Can nail everything. Drill through every wall.'),
(6, 'Electrician', 'Agnish', 'Mukherjee', 'SVNIT', 'Very good at his job'),
(7, 'carpenter', 'sagar', 'patel', 'SVNIT', 'shfhff'),
(8, 'maid', 'dbdc', 'dna', 'athwa', 'good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domHelp`
--
ALTER TABLE `domHelp`
  ADD PRIMARY KEY (`dhID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domHelp`
--
ALTER TABLE `domHelp`
  MODIFY `dhID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
