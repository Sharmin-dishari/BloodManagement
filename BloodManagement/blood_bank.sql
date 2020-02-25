-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 06:24 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `donation_info`
--

CREATE TABLE IF NOT EXISTS `donation_info` (
  `donor_id` varchar(60) NOT NULL,
  `receiver_id` varchar(60) NOT NULL,
  `donation_date` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_info`
--

INSERT INTO `donation_info` (`donor_id`, `receiver_id`, `donation_date`) VALUES
('1410', '5678', '25.11.15'),
('', '', ''),
('3071', '4140', '31.09.15'),
('3033', '4140', '26.11.15'),
('3033', '3058', '25.11.15'),
('3071', '3154', '25.09.15'),
('3156', '5678', '17.05.2015');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `name` varchar(30) NOT NULL,
  `national_id` varchar(60) NOT NULL,
  `date_of_birth` varchar(60) NOT NULL,
  `gender` varchar(80) NOT NULL,
  `blood_group` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cell_no` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`name`, `national_id`, `date_of_birth`, `gender`, `blood_group`, `address`, `cell_no`, `email`) VALUES
('Liza', '3033', '17.08.96', 'Female', 'O-', 'Uttara', '015634856335', 'liza@gmail.com'),
('Jahanara', '3071', '25.08.95', 'Female', 'B+', 'Gazipur', '01853219754', 'jahan@gmail.com'),
('Mou', '3156', '27.05.94', 'Female', 'A+', 'Tangail', '017345556591', 'mou@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `donor_login`
--

CREATE TABLE IF NOT EXISTS `donor_login` (
  `d_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_login`
--

INSERT INTO `donor_login` (`d_id`, `password`) VALUES
('1234', '1234'),
('1410', '1410'),
('3154', '3154'),
('3033', '3033'),
('3071', '3071'),
('3156', '3156');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE IF NOT EXISTS `receiver` (
  `name` varchar(60) NOT NULL,
  `national_id` varchar(60) NOT NULL,
  `date_of_birth` varchar(55) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `blood_group` varchar(55) NOT NULL,
  `address` varchar(80) NOT NULL,
  `cell_no` varchar(80) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`name`, `national_id`, `date_of_birth`, `gender`, `blood_group`, `address`, `cell_no`, `email`) VALUES
('DEF', '5678', '28.04.86', 'Male', 'A+', 'Iubat', '01936845545', 'def@gmail.com'),
('Suhala', '3154', '24.06.90', 'Female', 'B+', 'Uttara', '01853794620', 'suhala@gmail.com'),
('Chompa', '3058', '12.05.96', 'Female', 'O-', 'Iubat', '01935658965', 'c@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `receiver_login`
--

CREATE TABLE IF NOT EXISTS `receiver_login` (
  `r_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver_login`
--

INSERT INTO `receiver_login` (`r_id`, `password`) VALUES
('5678', '5678'),
('6531', '6531'),
('1410', '1410'),
('3154', '3154'),
('3058', '3058');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
 ADD PRIMARY KEY (`national_id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
 ADD PRIMARY KEY (`national_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
