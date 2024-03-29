-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 10:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.23

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
  `city_id` int(20) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `city_location` varchar(255) NOT NULL,
  `city_description` longtext NOT NULL,
  `province_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_id` int(20) NOT NULL,
  `forum_title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `forum_type_id` int(20) NOT NULL,
  `forum_status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `forum_description` longtext NOT NULL,
  `posted_on` datetime NOT NULL,
  `agent_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum_type`
--

CREATE TABLE `forum_type` (
  `forum_type_id` int(20) NOT NULL,
  `forum_type_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_type`
--

INSERT INTO `forum_type` (`forum_type_id`, `forum_type_name`) VALUES
(1, 'Buying Property'),
(2, 'Daily File Rates'),
(3, 'Selling Properties');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(20) NOT NULL,
  `news_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `news_description` longtext NOT NULL,
  `news_type` int(20) NOT NULL,
  `news_image` longtext NOT NULL,
  `news_post_on` datetime NOT NULL,
  `news_post_by` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE `news_type` (
  `news_type_id` int(20) NOT NULL,
  `news_type_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plot_for`
--

CREATE TABLE `plot_for` (
  `plot_for_id` int(20) NOT NULL,
  `plot_for_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plot_for`
--

INSERT INTO `plot_for` (`plot_for_id`, `plot_for_name`) VALUES
(1, 'Buy/Sell'),
(2, 'Rent'),
(3, 'Wanted');

-- --------------------------------------------------------

--
-- Table structure for table `plot_type`
--

CREATE TABLE `plot_type` (
  `plot_type_id` int(20) NOT NULL,
  `plot_type_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plot_type`
--

INSERT INTO `plot_type` (`plot_type_id`, `plot_type_name`) VALUES
(1, 'House'),
(2, 'Plot/Land'),
(3, 'Flat/Apartments'),
(4, 'Warehouse'),
(5, 'Building'),
(6, 'Farmhouse'),
(7, 'Ground FLoor'),
(8, 'Upper Portion'),
(9, 'Office');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(20) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_description` longtext NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `property_plot` varchar(255) NOT NULL,
  `plot_for` int(20) NOT NULL,
  `property_location` varchar(255) NOT NULL,
  `property_price` int(20) NOT NULL,
  `property_posted_on` datetime NOT NULL,
  `property_status` varchar(255) NOT NULL,
  `property_image` longtext NOT NULL,
  `agent_id` int(20) NOT NULL,
  `society_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE `property_type` (
  `property_type_id` int(20) NOT NULL,
  `property_type_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`property_type_id`, `property_type_name`) VALUES
(1, 'Residential'),
(2, 'Commercial'),
(3, 'Agricultural');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(10) NOT NULL,
  `province_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`, `location`, `description`) VALUES
(1, 'Punjab', 'https://maps.google.com/maps?width=800&amp;height=300&amp;hl=en&amp;q=Punjab&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=B&amp;output=embed', 'Punjab is known as a wealthy Province of Pakistan due to its fertile land and available sources. The province is the largest in terms of population and stands at the 2nd spot in terms of Total area. The Province has well-developed Cities which produces various raw material and finish products for Pakistan. Punjab produces various agriculture and industrial product that plays a vital role in the economy of the country.\r\n\r\nThe overall Real Estate Sector in Punjab has a clear distinction over all other provinces, only Karachi has a better real estate environment. The Real Estate Sector of Punjab includes Lahore Real Estate, Rawalpindi Real Estate, Faisalabad Real Estate. Multan Real Estate, Gujranwala Real Estate, and others, the above-mentioned Cities are playing a dominant role in the Real Estate of Pakistan as the available business and employment opportunities make it easy to have better residential places.\r\n\r\nSome of the famous projects include DHA, Bahria Town, Citi Housing, and Askri Housing as well. These developers are well known for their developmental work in Punjab and Pakistan as well.'),
(2, 'Sindh', 'https://maps.google.com/maps?width=800&amp;height=300&amp;hl=en&amp;q=sindh&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed', 'Sindh is located towards South-East of Pakistan and stands at second rank in terms of population. Karachi is the Capital City of Sindh and is the main contributor to the GDP of Pakistan. The Southern part of Sindh is developed including Karachi and Hyderabad, while the Northern Parts are not in any position to stand-alone or together against the contribution of Southern cities of the province. Northern Cities of Sindh including Sukkur, Nawabshah, Khairpur, Mahrabpur, Pano Aqil, and Larkana are known for agricultural products including wheat, cotton, mango, banana, and others.'),
(3, 'Khyber Pukhtunkhwa', 'https://maps.google.com/maps?width=800&amp;height=300&amp;hl=en&amp;q=sindh&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed', 'Khyber Pukhtunkhwa is the third-largest province of Pakistan in terms of population and occupies 74521 KM2 of land area, while its population is 22 million with a population density of 300 KM2 per kilometer. Peshawar is the Capital City of KPK. KPK is located in North-West of Pakistan, while it meets Gilgit Baltistan to North-East, Federally Administered Tribal Areas towards West and South, Azad Kashmir towards East, Punjab, and Islamabad are located towards South-Eastern parts of KPK Province. KPK shares a border with Afghanistan towards North-West.\r\n\r\nFamous cities of KPK include Peshawar, Chitral, Mardan, Bannu, Dera Ismail Khan, and Kohat. The Economy of KPK largely depends on Forestry, Mining, and others. The Province has several minerals, which are waiting for exploration and to be used for the development of KPK.\r\n\r\nThe Real Estate situation in KPK is not a very convincing one, and this sector is appealing to the authorities and Real Estate Developers to take steps for the betterment of KPK. KPK is a big opportunity for Real Estate Developers to provide planned and well-developed residential schemes to the residents of KPK. Now the KPK Government is planning to provide planned and organized housing schemes, while Private Sector is also looking forward to exploring the Cities of KPK by making some investment in the Real Estate Sector of KPK like Bahria Town has announced its project Bahria Town Peshawar that will offer a comprehensive and planned housing community to Peshawar that will provide state of art residential solution to the residents of Peshawar.'),
(4, 'Balochistan', 'https://maps.google.com/maps?width=800&amp;height=300&amp;hl=en&amp;q=Balochistan&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=B&amp;output=embed', 'Balochistan is the largest province of Pakistan with more than 43% of the total area of Pakistan. The Capital of Balochistan is Quetta which is also the biggest city of Balochistan as well, however, with an 8 million population of population, Balochistan is the smallest province of Pakistan in terms of Population. The Balochistan province is surrounded by Punjab and Sindh towards its East, Afghanistan towards North, while Iran is towards North-West and KPK towards North. The Arabian Sea is located in the South of Balochistan. The economy of Balochistan mainly depends on natural resources including Natural Gas, Coal, fisheries, and some other precious minerals. The Province has several beautiful places that add beauty to it and so is a good place for tourism, however as the facilities are not sufficient, so this area is not in much charge as it should be. The famous cities include Quetta, Zhob, Sibi, Khuzdar, and Gwadar.\r\n\r\nGwadar is a planned city that will boost up the economy of Pakistan as it offers 365 days of shipping and is the best option for Central Asia Estates and China. The Real Estate status in Balochistan is not very convincing as people still living in traditional ways, however, Quetta and Gwadar are getting development as both cities are counted as some of the main cities of Pakistan. Now the real estate developers are eyeing to provide housing schemes to Balochistan’s residents by offering them proper two-planning so that they can live with all possible living facilities and amenities.\r\n\r\nIf authorities can utilize the undercast resources of Balochistan, then Pakistan can make a heavy profit from the resources of Balochistan, also it will boost up the lifestyle of Balochistan residents. Ahaz-e-Aaqooq Balochistan Package is a step that the Government of Pakistan has taken to upgrade the lifestyle of Balochistan’s people.'),
(5, 'Gilgit Baltistan', 'https://maps.google.com/maps?width=800&amp;height=300&amp;hl=en&amp;q=Gilgit Baltistan&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed', 'Gilgit Baltistan is a region that is located towards the North of Pakistan. The area is governed by a Self-Governing body controlled by the Federal Government of Pakistan. The government of Pakistan has appointed a Governor and a CM to look after the affairs of that region.\r\n\r\nIt is equal to KPK Province in terms of total covered area as it spans over 72000 KM2 of land area. Gilgit Baltistan accounted for 1.8 million People with the lowest population density of 25 KM2. With 9 districts, Gilgit Baltistan now has the status of Facto-Province. Gilgit Baltistan meets Xinjiang autonomous region under the control of China, KPK towards its West, Wakhan Corridor Area towards North, while Azad Kashmir is located on South of Gilgit Baltistan.\r\n\r\nThe economy of Gilgit Baltistan relies mainly on Traditional Silk Route using which people of China and Pakistan can approach the concerning areas. The Silk Route is mainly used for Barter Trade, other sectors involve Tourism and agriculture (production of wheat, corn, barley), etc. Gilgit Baltistan has an operational airport used for private and military usage and is a prime source for moving to other areas of Pakistan in bad weather conditions. Some of the famous and known residential areas include Mujahid Colony, Arabshah Colony, Nagar Colony, and Nagar Colony, however, there is a lack of planned and organized housing community according to modern lifestyle.'),
(6, 'Azad Kashmir', 'https://maps.google.com/maps?width=800&amp;height=300&amp;hl=en&amp;q=Azad Kashmir&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed', 'Azad Jammu & Kashmir is a self-governing territory under the control of Pakistan and is located towards the West of Jammu Kashmir occupied by the Indian Government. Azad Jammu & Kashmir spans over 13297 KM2 area, while LOC (Line Of Control) separates the Azad Kashmir from the Indian-controlled Kashmir. LOC is located on the East of Azad Kashmir, KPK is located towards the West, Gilgit Baltistan towards North-West and Punjab towards the South. Azad Jammu & Kashmir has a total population of 4.5 million people, while the area is said to be Heaven on Earth for its natural beauty.\r\n\r\nMuzaffarabad is the Capital City of Azad Jammu & Kashmir, others are Neelam Valley Rawalakot, Bagh City, and Mirpur. Patwari, Hindko, Gojri, and Punjabi are the major languages of Azad Jammu & Kasmir.\r\n\r\nThe Real Estate situation in Azad Jammu & Kashmir is not much convincing and people are living in traditional communities. There is a lack of housing schemes in Azad Jammu & Kashmir. Due to the beauty and attraction of Kashmir, the area is a good choice to build housing societies for those who want to enjoy the beauty of nature.'),
(7, 'Federal Area', 'https://maps.google.com/maps?width=800&amp;height=300&amp;hl=en&amp;q=Islamabad&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed', 'Islamabad is the capital territory of Pakistan. The land of Islamabad was acquired from Punjab and KPK Provinces. The total area is included in ICT (Islamabad Capital Territory). The ICT areas are controlled, develop and manage by CDA (Capital Development Authority). ICTY includes Islamabad Rural Areas, Islamabad Margalla Hills, and Islamabad Institutional and Industrial Areas. Islamabad City as a whole has been divided into 5 Zones. The subdivision of Islamabad includes Sectors and they are further divided into sub-sectors. The total estimated population of the Federal Area is 1 million, while the atmosphere and business opportunities of the Capital of Pakistan make it one of the suitable and modern areas of Pakistan.');

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
  `agent_company_logo` varchar(100) NOT NULL,
  `status` varchar(255) DEFAULT NULL
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
  `society_id` int(20) NOT NULL,
  `society_name` varchar(255) NOT NULL,
  `society_location` varchar(255) NOT NULL,
  `society_descrption` longtext NOT NULL,
  `society_image` longtext NOT NULL,
  `society_status` varchar(255) NOT NULL,
  `agent_id` int(20) NOT NULL,
  `city_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `forum_type`
--
ALTER TABLE `forum_type`
  ADD PRIMARY KEY (`forum_type_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`news_type_id`);

--
-- Indexes for table `plot_for`
--
ALTER TABLE `plot_for`
  ADD PRIMARY KEY (`plot_for_id`);

--
-- Indexes for table `plot_type`
--
ALTER TABLE `plot_type`
  ADD PRIMARY KEY (`plot_type_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `property_type`
--
ALTER TABLE `property_type`
  ADD PRIMARY KEY (`property_type_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

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
  ADD PRIMARY KEY (`society_id`);

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
  MODIFY `city_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_type`
--
ALTER TABLE `forum_type`
  MODIFY `forum_type_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `news_type_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plot_for`
--
ALTER TABLE `plot_for`
  MODIFY `plot_for_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plot_type`
--
ALTER TABLE `plot_type`
  MODIFY `plot_type_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_type`
--
ALTER TABLE `property_type`
  MODIFY `property_type_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `society_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `searching`
--
ALTER TABLE `searching`
  ADD CONSTRAINT `FK_SP` FOREIGN KEY (`Property_ID`) REFERENCES `property` (`Property_ID`),
  ADD CONSTRAINT `searching_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`agent_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
