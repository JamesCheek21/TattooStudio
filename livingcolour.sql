-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 03:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livingcolour`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `artistID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `artisttype` tinyint(1) NOT NULL,
  `bio` longtext NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`artistID`, `firstname`, `lastname`, `picture`, `artisttype`, `bio`, `instagram`) VALUES
(1, 'Sophie', 'Cutler', '', 0, 'temptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemp', 'https://www.instagram.com/sxphiatheatattoos/'),
(2, 'Jesscia', 'Beecham', '', 0, 'temptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemp', 'https://www.instagram.com/jessieloutattoos_/'),
(3, 'Erica', 'Tattersall', '', 1, 'temptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemptemp', 'https://www.instagram.com/nails.by.erica.lincoln/');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `pictureid` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `uploaded` datetime DEFAULT NULL,
  `artistID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`artistID`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`pictureid`),
  ADD KEY `FK_artistID` (`artistID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `artistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `pictureid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `FK_artistID` FOREIGN KEY (`artistID`) REFERENCES `artists` (`artistID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;