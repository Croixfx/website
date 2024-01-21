-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 01:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_creators`
--

CREATE TABLE `content_creators` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content_creators`
--

INSERT INTO `content_creators` (`ID`, `name`, `email`, `phone`, `join_date`) VALUES
(2, 'NIYONKURU Jean De La Croix', 'jeanniyonkuru29@gmail.com', '0782693724', '2024-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Croix', '250102');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'jeanniyonkuru29@gmail.com'),
(3, 'valensbikorimana70@gmail.com'),
(4, 'saxc@gmail.com'),
(5, 'jeanmuhire680@gmail.com'),
(6, 'bikoravala@gmail.com'),
(7, 'dcgfse@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `firstname`, `middlename`, `lastname`, `phone`, `birthdate`, `email`, `password`) VALUES
(1, 'NIYOKURU', '', 'Jean De La Croix', '0782693724', '2024-01-01', 'jeanniyonkuru29@gmail.com', 'Croix@250#'),
(41, 'BIKORIMANA', '', 'VALENS', '0781670940', '2024-01-16', 'valensbikorimana70@gmail.com', 'Valens@250#'),
(42, 'NIYOMUKIZA', '', 'Liliose', '0781670950', '2024-01-23', 'jeanmuhire680@gmail.com', 'Liliose@250#'),
(43, 'Hagenimana', '', 'Jean Claude', '0782693721', '2024-01-02', 'saxc@gmail.com', '12345'),
(44, 'NIYOKURU', '', 'Nicole', '0782693723', '2024-01-01', 'valensbikorimana1170@gmail.com', '123456'),
(45, 'BIKORIMANA', '', 'Jean De La Croix', '0783283212', '2024-01-02', 'bikavala@gmail.com', '1234567'),
(46, 'MUGeNI ', '', 'Wanjye', '0781670978', '2024-01-09', 'lensbikorimana70@gmail.com', '1234'),
(47, 'UMUHIRE', '', 'Gentille', '0784383212', '2024-01-02', 'valenikorimana70@gmail.com', '43215'),
(48, 'MUGeNI ', '', 'Liliose', '0782683212', '2024-01-02', 'jeanniyonkuru20@gmail.com', '12345'),
(49, 'MUGeNI ', '', 'Jean De La Croix', '0781671950', '2024-01-03', 'valensbikorimana220@gmail.com', '12345'),
(50, 'Hagenimana', '', 'Liliose', '0782683292', '2024-01-03', 'valensbikorimana0@gmail.com', '1234'),
(51, 'HAGENIMANA', '', 'Jackson', '0782676212', '2005-01-01', 'jackson29@gmail.com', 'Jackson@250#');

-- --------------------------------------------------------

--
-- Table structure for table `table_entries`
--

CREATE TABLE `table_entries` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messages` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_entries`
--

INSERT INTO `table_entries` (`ID`, `full_name`, `email`, `messages`) VALUES
(1, 'Croix', 'saxc@gmail.com', '<?php\\r\\n    require \\\'croixconnection.php\\\';\\r\\n    ?>'),
(2, 'NIYONKURU Jean De La Croix', 'jeanniyonkuru29@gmail.com', 'Mwakoze kubwa serivisi mwaduhaye'),
(3, 'NIYONKURU Jean De La Croix', 'jeanniyonkuru29@gmail.com', 'Mwakoze kubwa serivisi mwaduhaye'),
(4, 'BIKORIMANA Valens', 'valensbikorimana70@gmail.com', 'Mwakoze kubwa serivisi mwaduhaye'),
(5, 'BIKORIMANA Valens', 'valensbikorimana70@gmail.com', 'Mwakoze kubwa serivisi mwaduhaye'),
(6, ' Valens', 'nsbikorimana70@gmail.com', 'Mwakoze kubwa serivisi mwaduhaye'),
(7, ' Valensva', 'jeanmuhire@gmail.com', 'hjgwsydtghyse'),
(8, 'BIKORIMANA Valens', 'bikoravala@gmail.com', 'Hello good evening?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `gender`) VALUES
(2, 'BIKORIMAN', 'Valens', 'valensbikorimana70@gmail.com', 'male'),
(3, 'HAGENIMANA', 'Claude', 'claude@gmail.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_creators`
--
ALTER TABLE `content_creators`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table_entries`
--
ALTER TABLE `table_entries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content_creators`
--
ALTER TABLE `content_creators`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `table_entries`
--
ALTER TABLE `table_entries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
