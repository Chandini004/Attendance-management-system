-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 05:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `usrname` varchar(255) NOT NULL,
  `passwrd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `usrname`, `passwrd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `deptdetails`
--

CREATE TABLE `deptdetails` (
  `id` int(11) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facultydetails`
--

CREATE TABLE `facultydetails` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultydetails`
--

INSERT INTO `facultydetails` (`id`, `fname`, `department`, `role`, `salary`, `image`) VALUES
(1, 'V.Vasudha Rani', 'Information Technology', 'H.O.D', 10000, './images/images.jpg'),
(2, 'K.Ram', 'CSE', 'Asst. professor', 10000, './images/3135715.png'),
(3, 'R.Vinay', 'ECE', 'Assoc. Professor', 10000, './images/3135715.png'),
(4, 'L.Saraswathi', 'EEE', 'Asst. Professor', 10000, './images/images.jpg'),
(5, 'M.Krishna', 'CIVIL', 'Assoc. professor', 10000, './images/3135715.png'),
(6, 'G.Surya', 'Mech', 'H.O.D', 20000, './images/3135715.png'),
(7, 'D.Lakshmi', 'Chemical', 'H.O.D', 20000, './images/images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stdattendance`
--

CREATE TABLE `stdattendance` (
  `id` int(11) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stdattendance`
--

INSERT INTO `stdattendance` (`id`, `regno`, `date`, `status`) VALUES
(19, '21341a0594', '2023-05-22', 'Present'),
(20, '21341a0593', '2023-05-22', 'Absent'),
(23, '21341a0592', '2023-05-22', 'Present'),
(24, '21341a0595', '2023-05-22', 'Present'),
(25, '21341a0591', '2023-05-22', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `stddetails`
--

CREATE TABLE `stddetails` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `Section` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stddetails`
--

INSERT INTO `stddetails` (`id`, `sname`, `regno`, `dept`, `Section`, `sem`) VALUES
(1, 'L.Chandini', '21341a0594', 'cse', 'B', '4'),
(2, 'P.Lavanya Kumar', '21341a0593', 'cse', 'B', '4'),
(3, 'L.Somnadh', '21341a0592', 'cse', 'B', '4'),
(4, 'M.Akhilesh Keshav', '21341a0595', 'cse', 'B', '4'),
(6, 'L.Ajay', '21341a0591', 'cse', 'B', '4');

-- --------------------------------------------------------

--
-- Table structure for table `teacherlogin`
--

CREATE TABLE `teacherlogin` (
  `id` int(11) NOT NULL,
  `usname` varchar(255) NOT NULL,
  `passwrd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherlogin`
--

INSERT INTO `teacherlogin` (`id`, `usname`, `passwrd`) VALUES
(1, 'chandini', 'chandini123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deptdetails`
--
ALTER TABLE `deptdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultydetails`
--
ALTER TABLE `facultydetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdattendance`
--
ALTER TABLE `stdattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stddetails`
--
ALTER TABLE `stddetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherlogin`
--
ALTER TABLE `teacherlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deptdetails`
--
ALTER TABLE `deptdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facultydetails`
--
ALTER TABLE `facultydetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stdattendance`
--
ALTER TABLE `stdattendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `stddetails`
--
ALTER TABLE `stddetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacherlogin`
--
ALTER TABLE `teacherlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
