-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 09, 2017 at 03:09 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mazdafueltracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `fueltracker`
--

CREATE TABLE `fueltracker` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `fuel_type` text,
  `price_per_litre` int(11) DEFAULT NULL,
  `number_of_litres` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `odometer` int(11) DEFAULT NULL,
  `fuel_fill_date` date NOT NULL,
  `end_date` date NOT NULL,
  `kms` int(11) DEFAULT NULL,
  `fuel_economy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fueltracker`
--
ALTER TABLE `fueltracker`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fueltracker`
--
ALTER TABLE `fueltracker`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;