-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 09:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `child` int(11) DEFAULT NULL,
  `hospital` int(11) DEFAULT NULL,
  `vaccine` int(11) DEFAULT NULL,
  `status` enum('pending','Approved','Rejected','completed') DEFAULT NULL,
  `b_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `child`, `hospital`, `vaccine`, `status`, `b_date`) VALUES
(1, 1, 2, 1, 'completed', '2022-10-13'),
(2, 1, 2, 1, 'Approved', '2022-10-28'),
(3, 1, 2, 1, 'pending', '2022-10-21'),
(4, 1, 3, 1, 'Rejected', '1995-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `c_father` varchar(250) NOT NULL,
  `c_age` int(11) NOT NULL,
  `c_dob` date NOT NULL,
  `c_gender` enum('Male','Female') NOT NULL,
  `c_number` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`c_id`, `c_name`, `c_father`, `c_age`, `c_dob`, `c_gender`, `c_number`) VALUES
(1, 'shahroon', 'faez       ', 12, '2022-09-15', 'Male', '03000'),
(4, 'daniyal', 'aftab', 20, '2022-10-20', 'Male', '030000000'),
(5, 'ali', 'aftab', 12, '2022-10-20', 'Male', '030000000'),
(6, '123', 'aftab', 12, '2022-10-27', 'Male', '030000000'),
(7, '123', 'hassan', 12, '2022-10-22', 'Male', '030000000'),
(8, 'asds', 'dsa', 60, '2022-10-06', 'Male', '12'),
(9, 'daniyal', 'aftab', 60, '2022-10-18', 'Male', '03000000');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `h_address` varchar(250) NOT NULL,
  `h_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `h_name`, `h_address`, `h_password`) VALUES
(2, 'Liaquat National Hospital', 'National Stadium Rd, Liaquat National Hospital, Karachi', '123'),
(3, 'Aga Khan Hospital.', 'National Stadium Rd, Aga Khan University Hospital, Karachi', '123'),
(4, 'PNS Shifa Hospital', 'Main Korangi Rd, near Kala Pul، Clifton, Karachi, Karachi City, Sindh', '123'),
(10, 'hospital', 'abhjbsda', '123');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` enum('Admin','hospital','Parent') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'hospital'),
(3, 'Parent');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '123', 1),
(2, 'Faez', 'example@gmail.com', '123', 3),
(3, 'hospital', 'hospital@gmail.com', '123', 2),
(4, 'hassan', 'abc@gmail.com', '123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(50) DEFAULT NULL,
  `v_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`v_id`, `v_name`, `v_status`) VALUES
(1, 'Polio', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `child` (`child`),
  ADD KEY `hospital` (`hospital`),
  ADD KEY `vaccine` (`vaccine`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`role`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`child`) REFERENCES `child` (`c_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`hospital`) REFERENCES `hospital` (`h_id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`vaccine`) REFERENCES `vaccine` (`v_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
