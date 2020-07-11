-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 10:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Emp_id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phonenumber` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Emp_id`, `Name`, `Email`, `Phonenumber`, `Message`) VALUES
(1, 'ramya', 'ramya2015@gmail.com', '9738528315', 'good'),
(4, 'kushi', 'kushi@gmail.com', '9754357822', 'good'),
(7, '', '', '', ''),
(8, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `north`
--

CREATE TABLE `north` (
  `Name` varchar(100) NOT NULL,
  `Emp_id` int(100) NOT NULL,
  `Meal_Type` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Select_Employee` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `north`
--

INSERT INTO `north` (`Name`, `Emp_id`, `Meal_Type`, `Quantity`, `Select_Employee`, `Date`, `Description`) VALUES
('janu', 2, 'French fry masala', '1', 'Full-time', '26/2/2020', 'onion less'),
('', 7, '----select---', '', '---select-----', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg1`
--

CREATE TABLE `reg1` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg1`
--

INSERT INTO `reg1` (`id`, `username`, `email`, `password`) VALUES
(1, 'ramya', 'ramyakn2015@gmail.com', '15d9d98f7997819de332e1866166a2b6'),
(2, 'meghu', 'murthy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'janu', 'janu@gmail.com', '3605ec021bac4a1db600450360a366a5'),
(4, 'kiran', 'kiran@gmail.com', '3b6281fa2ce2b6c20669490ef4b026a4'),
(5, 'company', 's@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(6, 'sush', 'rammubujji206@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `Name` varchar(100) NOT NULL,
  `Emp_id` int(100) NOT NULL,
  `Snacks` varchar(100) NOT NULL,
  `Beverages` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Select_Employee` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`Name`, `Emp_id`, `Snacks`, `Beverages`, `Quantity`, `Select_Employee`, `Date`, `Description`) VALUES
('ramya', 1, 'Cutlet', 'sprite', '1', 'Full-time', '7/9/2020', 'add some pier');

-- --------------------------------------------------------

--
-- Table structure for table `south`
--

CREATE TABLE `south` (
  `Name` varchar(100) NOT NULL,
  `Emp_id` int(100) NOT NULL,
  `Meal_Type` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Select_Employee` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `south`
--

INSERT INTO `south` (`Name`, `Emp_id`, `Meal_Type`, `Quantity`, `Select_Employee`, `Date`, `Description`) VALUES
('ramya', 1, 'Bisibelebath', '1', 'Full-time', '2/1/2020', 'add some pier'),
('', 18, '----select---', '', '---select-----', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(678) NOT NULL,
  `password` varchar(789) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'company', 'canteen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `north`
--
ALTER TABLE `north`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `reg1`
--
ALTER TABLE `reg1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `south`
--
ALTER TABLE `south`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Emp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `north`
--
ALTER TABLE `north`
  MODIFY `Emp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reg1`
--
ALTER TABLE `reg1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `Emp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `south`
--
ALTER TABLE `south`
  MODIFY `Emp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
