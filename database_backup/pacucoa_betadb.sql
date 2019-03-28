-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 11:15 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pacucoa_betadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `affixes` varchar(50) NOT NULL,
  `school` varchar(500) NOT NULL,
  `schooltype` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `accreditor` tinyint(1) NOT NULL,
  `email_add` varchar(200) NOT NULL,
  `contactno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(6) NOT NULL,
  `participant_id` int(9) NOT NULL,
  `payment_stat` tinyint(2) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `payment_cash_amount` int(11) NOT NULL,
  `payment_cheque_no` varchar(50) NOT NULL,
  `payment_cheque_amount` int(10) NOT NULL,
  `payment_source` varchar(100) NOT NULL,
  `payment_date` datetime(6) NOT NULL,
  `cashier` varchar(80) NOT NULL,
  `remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `participants_id` int(11) NOT NULL,
  `date_registered` datetime(6) NOT NULL,
  `check_in_stat` tinyint(2) NOT NULL,
  `check_in_time` datetime(6) NOT NULL,
  `proxy` tinyint(2) NOT NULL,
  `proxy_salutation` varchar(50) NOT NULL,
  `proxy_lname` varchar(255) NOT NULL,
  `proxy_fname` varchar(255) NOT NULL,
  `stub_no` varchar(20) NOT NULL,
  `claimed_stat` tinyint(2) NOT NULL,
  `time_claimed` datetime(6) NOT NULL,
  `walkin` tinyint(2) NOT NULL,
  `agree` tinyint(2) NOT NULL,
  `front_officer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `password`, `status`) VALUES
(1, 'kevin Rodriguez', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
