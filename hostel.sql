-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 06:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('Abdala', '123'),
('baya', '123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(200) NOT NULL,
  `hostel` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contacts` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `hostel`, `name`, `contacts`, `date`) VALUES
(4, 'BAHAMAS', 'Masala Abdi', '0788282828', '2021-01-24'),
(5, 'KIVU HOSTEL', 'cynthia namenge', '0787645444', '2021-01-26'),
(6, 'RINGA HOSTEL', 'Maina Kithinji', '0788282282', '2021-01-30'),
(7, 'WEBUYE HOSTEL', 'Abdala Mwasaria', '0788282828', '2021-01-27'),
(8, 'GENTLE LADIES', 'Lovince Nakhalungu', '0782828822', '2021-02-03'),
(9, 'ANGELS', 'Mercy Checpchumba', '0728828288', '2021-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`name`, `location`, `price`, `img`) VALUES
('ANGELS', 'THIKA', '7500 per Month', 'upload/i.jpg'),
('BAHAMAS', 'NGARA', '5000 per Month', 'upload/bahamas.jpg'),
('GENTLE LADIES', 'NANYUKI', '9000 per Month', 'upload/e.jpg'),
('KIBRA HOSTEL', 'KIBERA', '300O per Month', 'upload/kibera hostel.jpg'),
('KIVU HOSTEL', 'NGARA', '6000 per Month', 'upload/kivu.jpg'),
('MALINDI HOSTEL', 'NGARA', '700O per Month', 'upload/malindi hostel.jpg'),
('MODERN CHRISTIAN', 'NGARA', '5000 per Month', 'upload/modern christian.jpg'),
('RINGA HOSTEL', 'NGARA', '700O per Month', 'upload/ringa.jpg'),
('ST JOHNS', 'NGARA', '5000 per Month', 'upload/st johns.jpg'),
('UON HOSTEL', 'NGARA', '800O per Month', 'upload/uon hostel.png'),
('WEBUYE HOSTEL', 'NGARA', '4000 per Month', 'upload/webuye.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contacts` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `contacts`, `user`, `pass`) VALUES
('5444', 'Abdala Mwasaria', '0788282828', 'abdi', '123'),
('6766', 'Lovince Nakhalungu', '0782828822', 'lovince', '123'),
('7637373', 'Maina Kithinji', '0788282282', 'maina', '123'),
('87988', 'Mercy Checpchumba', '0728828288', 'chumba', '123'),
('BIT/001/2016', 'cynthia namenge', '0787645444', 'cynthia', '123'),
('BIT/002/2016', 'Masala Abdi', '0788282828', 'masala', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
