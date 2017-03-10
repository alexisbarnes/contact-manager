-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 10, 2017 at 09:20 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first`, `last`, `title`, `address`, `city`, `state`, `zip`, `phone`, `notes`) VALUES
(1, 'Alexis', 'Barnes', 'Student', 'None', 'Chapel Hill', 'NC', '27514', '(919) 923-9198', 'thinks alma is the goat'),
(2, 'Asha', 'Barnes', 'Student', '5660 Preston Loop Rd', 'Mebane', 'NC', '27302', '(919) 923-9305', 'My sister.'),
(5, 'Steven', 'King', 'Assistant Prof', '114 E Cameron Ave', 'Chapel Hill', 'NC', '27514', '(919) 843-1111', 'A test.'),
(6, 'Karishma', 'Patel', 'Student', '114 E Cameron Ave', 'Chapel Hill', 'NC', '27514', '(919) 843-1111', 'She is in the J-school'),
(7, 'Demetria', 'Thompson', 'Mother', '5660 Preston Loop Rd', 'Mebane', 'NC', '27302', '(919) 923-8153', 'Here.'),
(9, 'Kierston', 'Barnes', 'Brother', '5660 Preston Loop Rd', 'Mebane', 'NC', '27302', '(919) 923-8237', 'My bro'),
(10, 'Kemari', 'Martin-Warner', 'Student', '234 Price Street', 'Madison', 'NC', '27025', '3365610295', ''),
(12, 'Justina', 'Vasquez', 'Student', 'Carmichael', 'Chapel Hill', 'NC', '27514', '(xxx) xxx-xxxx', 'Test'),
(13, 'Evan', 'Badler', 'Production Assistant', '539 something drive', 'Chapel Hill', 'NC', '27514', '(xxx) xxx-xxxx', 'None'),
(14, 'Stephanie', 'Lamm', 'Student', 'Random Address', 'Chapel Hill', 'NC', '27514', '(xxx) xxx-xxxx', ''),
(15, 'Chris', 'Walker', 'Teacher', 'Preston Loop', 'Mebane', 'NC', '27302', '(xxx) xxx-xxxx', 'xxx'),
(16, 'Sarah', 'Muzzillo', 'Student', 'Rams 1', 'Chapel Hill', 'NC', '27514', '(xxx) xxx-xxxx', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
