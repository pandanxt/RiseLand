-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 02:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_ID` int(10) NOT NULL,
  `City_Name` varchar(255) NOT NULL,
  `Province_ID` int(10) NOT NULL,
  `Society_ID` int(10) NOT NULL,
  `Plot_House_ID` int(10) NOT NULL,
  `USER_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plots`
--

CREATE TABLE `plots` (
  `Plot_House_No` int(10) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `SocietyMap` varchar(255) NOT NULL,
  `Descrption` varchar(255) NOT NULL,
  `Phase` varchar(255) NOT NULL,
  `Sector` varchar(255) NOT NULL,
  `Plot_House_ID` int(10) NOT NULL,
  `USER_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `Property_ID` int(10) NOT NULL,
  `Property_Type` varchar(255) NOT NULL,
  `Country_ID` int(10) NOT NULL,
  `Society_ID` int(10) NOT NULL,
  `Plot_House_ID` int(10) NOT NULL,
  `Province_ID` int(10) NOT NULL,
  `USER_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `Province_ID` int(10) NOT NULL,
  `Province_Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Descrption` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `USER_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `searching`
--

CREATE TABLE `searching` (
  `sEARCH_ID` int(11) NOT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Society` varchar(255) DEFAULT NULL,
  `Propery_Type` varchar(255) DEFAULT NULL,
  `Purpose` varchar(255) DEFAULT NULL,
  `Price_Min` int(11) DEFAULT NULL,
  `Price_Max` int(11) DEFAULT NULL,
  `Area_Min` varchar(255) DEFAULT NULL,
  `Area_Max` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Property_ID` int(11) DEFAULT NULL,
  `USER_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup_as_agent`
--

CREATE TABLE `signup_as_agent` (
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_password` varchar(255) NOT NULL,
  `agent_phone` varchar(20) NOT NULL,
  `agent_address` varchar(255) NOT NULL,
  `agent_zipcode` int(10) NOT NULL,
  `agent_image` varchar(100) NOT NULL,
  `agent_country` varchar(255) NOT NULL,
  `agent_city_deal` varchar(255) NOT NULL,
  `agent_agency_name` varchar(255) NOT NULL,
  `agent_services` varchar(255) NOT NULL,
  `agent_company_phone` varchar(20) NOT NULL,
  `agent_company_address` varchar(255) NOT NULL,
  `agent_company_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup_as_user`
--

CREATE TABLE `signup_as_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` longtext NOT NULL,
  `user_mobile` varchar(50) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_zipcode` int(10) NOT NULL,
  `user_image` varchar(100) DEFAULT NULL,
  `user_country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `Society_ID` int(10) NOT NULL,
  `Society_Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Descrption` varchar(255) NOT NULL,
  `Latest_Developmrnt` varchar(255) NOT NULL,
  `USER_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `admin_id` int(20) NOT NULL,
  `fname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `lname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `position` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pass` longtext CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`admin_id`, `fname`, `lname`, `email`, `position`, `username`, `pass`) VALUES
(1, 'Mubeen', 'Shah', 'shahmobeen333@gmail.com', 'Admin', 'DevilHost', '$2y$10$fy4eA/3OoKQdtUPMfBAQhOx8.m5l972rtzWk6XzIhQj6QpgkC0Clu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_ID`),
  ADD KEY `FK_PC` (`Province_ID`),
  ADD KEY `FK_CS` (`Society_ID`),
  ADD KEY `FK_CPH` (`Plot_House_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `plots`
--
ALTER TABLE `plots`
  ADD PRIMARY KEY (`Plot_House_ID`),
  ADD UNIQUE KEY `Plot/House_ID` (`Plot_House_ID`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`Property_ID`),
  ADD KEY `FK_CP` (`Country_ID`),
  ADD KEY `FK_PS` (`Society_ID`),
  ADD KEY `FK_PPH` (`Plot_House_ID`),
  ADD KEY `FK_PP` (`Province_ID`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`Province_ID`);

--
-- Indexes for table `searching`
--
ALTER TABLE `searching`
  ADD KEY `FK_SP` (`Property_ID`);

--
-- Indexes for table `signup_as_agent`
--
ALTER TABLE `signup_as_agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `signup_as_user`
--
ALTER TABLE `signup_as_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`Society_ID`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `City_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plots`
--
ALTER TABLE `plots`
  MODIFY `Plot_House_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `Property_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `Province_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup_as_agent`
--
ALTER TABLE `signup_as_agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup_as_user`
--
ALTER TABLE `signup_as_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `Society_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `FK_CPH` FOREIGN KEY (`Plot_House_ID`) REFERENCES `plots` (`Plot_House_ID`),
  ADD CONSTRAINT `FK_CS` FOREIGN KEY (`Society_ID`) REFERENCES `society` (`Society_ID`),
  ADD CONSTRAINT `FK_PC` FOREIGN KEY (`Province_ID`) REFERENCES `provinces` (`Province_ID`),
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`agent_id`);

--
-- Constraints for table `plots`
--
ALTER TABLE `plots`
  ADD CONSTRAINT `plots_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`agent_id`);

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `FK_CP` FOREIGN KEY (`Country_ID`) REFERENCES `city` (`City_ID`),
  ADD CONSTRAINT `FK_PP` FOREIGN KEY (`Province_ID`) REFERENCES `provinces` (`Province_ID`),
  ADD CONSTRAINT `FK_PPH` FOREIGN KEY (`Plot_House_ID`) REFERENCES `plots` (`Plot_House_ID`),
  ADD CONSTRAINT `FK_PS` FOREIGN KEY (`Society_ID`) REFERENCES `society` (`Society_ID`),
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`agent_id`);

--
-- Constraints for table `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `provinces_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`agent_id`);

--
-- Constraints for table `searching`
--
ALTER TABLE `searching`
  ADD CONSTRAINT `FK_SP` FOREIGN KEY (`Property_ID`) REFERENCES `property` (`Property_ID`),
  ADD CONSTRAINT `searching_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`agent_id`);

--
-- Constraints for table `society`
--
ALTER TABLE `society`
  ADD CONSTRAINT `fk_sS` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`agent_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
