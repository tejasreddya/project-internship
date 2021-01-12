-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 11:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Current_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`Name`, `Email`, `Current_balance`) VALUES
('Akhil', 'akhil123@gmail.com', 8000),
('Bhuvan', 'bhuvan@gmail.com', 9100),
('Navya', 'navya123@gmail.com', 10000),
('Nikhil', 'nikhil234@gmail.com', 9000),
('Rani', 'rani234@gmail.com', 11600),
('Shilpi', 'shilpikumari@gmail.com', 10400),
('teja reddy', 'tejareddy@gmail.com', 11000),
('Tejashree', 'tejashreevs@gmail.com', 11000),
('Usha', 'usharani@gmail.com', 9000),
('Vidhwaan', 'vidhwaan.aa@gmail.com', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_details`
--

CREATE TABLE `transfer_details` (
  `Sender` varchar(100) NOT NULL,
  `Receiver` varchar(100) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer_details`
--

INSERT INTO `transfer_details` (`Sender`, `Receiver`, `Amount`) VALUES
('Tejashree', 'Navya', 50),
('Navya', 'Nikhil', 80),
('Shilpi', 'Rani', 400),
('Akhil', 'Bhuvan', 100),
('Rani', 'Shilpi', 400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD UNIQUE KEY `Name` (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
