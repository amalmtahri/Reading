-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 04:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reading`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `idA` int(4) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `dateN` date DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`idA`, `Fname`, `Lname`, `dateN`, `image`) VALUES
(1, 'Amal', 'Mtahri', '2000-10-16', 'img1.jpg'),
(2, 'Othmane', 'Rhazlani', '1998-05-19', 'img2.jpg'),
(3, 'soumia ', 'kabrane', '2021-03-27', 'auteur1.jpg'),
(4, 'soumia', 'kabrane', '2021-03-25', 'external-content.duckduckgo.png'),
(5, 'amine', 'abdlmaati', '2021-03-11', 'auteur1.jpg'),
(6, 'ggggg', '', '0000-00-00', ''),
(7, 'wxcvbn,', 'qsdfghjk', '2021-03-28', 'book7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `idB` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Price` int(4) DEFAULT NULL,
  `dateB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`idB`, `image`, `Name`, `Price`, `dateB`) VALUES
(1, 'book1.jpg', 'Book 2', 100, '2021-03-01'),
(2, 'book2.jpg', 'Book 1', 200, '2021-03-11'),
(3, 'book3.jpg', 'Book 3', 400, '2021-03-02'),
(4, 'book4.jpg', 'Book 4', 500, '2021-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `idg` int(4) NOT NULL,
  `idB` int(4) DEFAULT NULL,
  `idA` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`idg`, `idB`, `idA`) VALUES
(2, 2, 1),
(3, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`idA`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`idB`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`idg`),
  ADD KEY `idB` (`idB`),
  ADD KEY `idA` (`idA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `idA` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `idB` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `idg` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`idB`) REFERENCES `books` (`idB`),
  ADD CONSTRAINT `gallery_ibfk_2` FOREIGN KEY (`idA`) REFERENCES `authors` (`idA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
