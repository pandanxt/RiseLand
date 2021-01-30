-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 07:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `Country_ID` int(10) NOT NULL,
  `Countrry_Name` varchar(255) NOT NULL,
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
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `USER_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Confirmed_Password` varchar(255) NOT NULL,
  `Phone_No` int(10) DEFAULT NULL,
  `Fax` int(10) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `ZipCode` int(10) DEFAULT NULL,
  `User_Image` tinyblob,
  `Country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup_as_agent`
--

CREATE TABLE `signup_as_agent` (
  `USER_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Confirmed_Password` varchar(255) NOT NULL,
  `Phone_No` int(10) DEFAULT NULL,
  `Fax` int(10) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `ZipCode` int(10) DEFAULT NULL,
  `User_Image` tinyblob,
  `Country` varchar(255) DEFAULT NULL,
  `Select_City_You_Deal` varchar(255) DEFAULT NULL,
  `Agency_Name` varchar(255) DEFAULT NULL,
  `Description_of_Services` varchar(255) DEFAULT NULL,
  `Company_Name` varchar(255) DEFAULT NULL,
  `Company_No` int(11) DEFAULT NULL,
  `Company_Address` varchar(255) DEFAULT NULL,
  `Company_Logo` tinyblob
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`Country_ID`),
  ADD KEY `FK_PC` (`Province_ID`),
  ADD KEY `FK_CS` (`Society_ID`),
  ADD KEY `FK_CPH` (`Plot_House_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `plots`
--
ALTER TABLE `plots`
  ADD PRIMARY KEY (`Plot_House_ID`),
  ADD UNIQUE KEY `Plot/House_ID` (`Plot_House_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`Property_ID`),
  ADD KEY `FK_CP` (`Country_ID`),
  ADD KEY `FK_PS` (`Society_ID`),
  ADD KEY `FK_PPH` (`Plot_House_ID`),
  ADD KEY `FK_PP` (`Province_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`Province_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `searching`
--
ALTER TABLE `searching`
  ADD KEY `FK_SP` (`Property_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `signup_as_agent`
--
ALTER TABLE `signup_as_agent`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`Society_ID`),
  ADD KEY `fk_sS` (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `Country_ID` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `Society_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `FK_CPH` FOREIGN KEY (`Plot_House_ID`) REFERENCES `plots` (`Plot_House_ID`),
  ADD CONSTRAINT `FK_CS` FOREIGN KEY (`Society_ID`) REFERENCES `society` (`Society_ID`),
  ADD CONSTRAINT `FK_PC` FOREIGN KEY (`Province_ID`) REFERENCES `provinces` (`Province_ID`),
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`USER_ID`);

--
-- Constraints for table `plots`
--
ALTER TABLE `plots`
  ADD CONSTRAINT `plots_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`USER_ID`);

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `FK_CP` FOREIGN KEY (`Country_ID`) REFERENCES `country` (`Country_ID`),
  ADD CONSTRAINT `FK_PP` FOREIGN KEY (`Province_ID`) REFERENCES `provinces` (`Province_ID`),
  ADD CONSTRAINT `FK_PPH` FOREIGN KEY (`Plot_House_ID`) REFERENCES `plots` (`Plot_House_ID`),
  ADD CONSTRAINT `FK_PS` FOREIGN KEY (`Society_ID`) REFERENCES `society` (`Society_ID`),
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`USER_ID`);

--
-- Constraints for table `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `provinces_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`USER_ID`);

--
-- Constraints for table `searching`
--
ALTER TABLE `searching`
  ADD CONSTRAINT `FK_SP` FOREIGN KEY (`Property_ID`) REFERENCES `property` (`Property_ID`),
  ADD CONSTRAINT `searching_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`USER_ID`);

--
-- Constraints for table `society`
--
ALTER TABLE `society`
  ADD CONSTRAINT `fk_sS` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
