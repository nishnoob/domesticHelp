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
-- Table structure for table `domReview`
--

CREATE TABLE `domReview` (
  `rID` int(11) NOT NULL,
  `uName` varchar(100) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `rating` int(10) NOT NULL,
  `dhID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domReview`
--

INSERT INTO `domReview` (`rID`, `uName`, `review`, `rating`, `dhID`) VALUES
(1, 'Agnish', 'Good service', 8, 1),
(2, 'Ashish', 'Arrived the address on time. Did everything asked for. Very satisfied. Would 10/10 recommend. ', 10, 1),
(3, 'abcd', 'satisfactory service', 5, 2),
(4, 'hiranmay', 'gud', 9, 7),
(5, 'User123', 'Not at all satisfied', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domReview`
--
ALTER TABLE `domReview`
  ADD PRIMARY KEY (`rID`),
  ADD KEY `dhID` (`dhID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domReview`
--
ALTER TABLE `domReview`
  MODIFY `rID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `domReview`
--
ALTER TABLE `domReview`
  ADD CONSTRAINT `domReview_ibfk_1` FOREIGN KEY (`dhID`) REFERENCES `domHelp` (`dhID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
