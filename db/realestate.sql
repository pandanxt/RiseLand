-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 09:45 AM
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

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `city_location`, `city_description`, `province_id`) VALUES
(1, 'Lahore', 'https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Lahore&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed', '<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\">Lahore carries the essence of human origin and the model of human growth. Such places become significant for those who like to enjoy the nostalgia of old thoughts. The city of Lahore can truly be remembered as such a place. Having seen so many highs and lows of the past and culture, Lahore in it is now complete humankind carrying a multitude of the past and the keenness to excel in the future. From the Victorian era to the Mughal period, from buildings and gardens to forts, the diversity of Lahore is sometimes unbearable, yet the charm is timeless.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Location:</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\">Lahore is bounded west by the Sheikhupura District, on the east have Wagah Border, and on the south by Kasur District. The Ravi River flows in the northern region of Lahore. Lahore city is spread over a total soil area of 1014 km and is still increasing.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Linguistic:</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\">Punjabi is the local language of the area. Urdu and English and many other native languages are also spoken and understood by most people.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Historical Places:</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\">Badshahi Mosque, Aiwan-e-Iqbal, Bibi Pak Daman, Chauburji, Data Durbar, Lahore Fort, Minar-e-Pakistan, Sheesh Mahal, Anarkali Bazaar, Gawalmandi, Liberty Market, M. M. Alam Road, Pak Tea House, The Mall, Food Street, Fortress Stadium, Shah Alam Market, Shalimar Garden, Lahore Museum, NCA, Bagh-e-Jinnah.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Economy:</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\">Lahore\'s economic strength consists of the reality that it is the largest city of Pakistan\'s most heavily populated province. It is also the most modern &amp; advanced in terms of infrastructure, having broad and relatively well-urbanized road links to all major cities in Punjab and North-West Frontier Province, a rail connection with India, and the province\'s prime International airport. It has the most developed education and health facilities as well, making it the economic, political, and educational nucleus of the province. &lrm; As Lahore expands, old residential areas are being turned into commercial centers, and the rural population is relentlessly moving outwards Lahore.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Real Estate Developments:</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb; text-align: justify;\">Bahria Town, DHA Lahore Phases, Eden Housing, Cooperative Housing Societies of Lahore, PCSIR Housing, Lake City, Model Town, Garden Town, Johar Town, Faisal Town, Iqbal Town, Township, Lahore Cantt, Gulberg, E.t.c.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #fbfbfb;\">&nbsp;</p>\r\n<div class=\"ca-contact\" style=\"box-sizing: border-box; color: #888888; font-family: \'Segoe UI\'; font-size: 13px; background-color: #fbfbfb;\"><strong style=\"box-sizing: border-box;\">Total Developments in Lahore: 171</strong></div>', 1);

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

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `forum_title`, `forum_type_id`, `forum_status`, `forum_description`, `posted_on`, `agent_id`) VALUES
(1, 'asdjhasjkdh', 3, 'Online', '<p>Enter Complete Description Here...!!!</p>', '2021-03-05 13:00:07', 1),
(2, 'sjkadhasjkdsa', 3, 'Online', '<h1 style=\"text-align: center; padding-left: 40px;\"><em><strong>Enter Complete Description Here...!!!</strong></em></h1>\r\n<h1 style=\"text-align: center; padding-left: 40px;\"><em><strong>jsadjaskdjkassa</strong></em></h1>', '2021-03-05 13:00:47', 1);

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

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_description`, `news_type`, `news_image`, `news_post_on`, `news_post_by`) VALUES
(1, 'Earth Quick in Pakistan Region', '<p style=\"text-align: center;\"><em>Enter News Description Here...!!!</em></p>', 2, 'NewsImage_thumb.jpg', '2021-02-12 14:19:59', 1),
(2, 'Top 5 Best Real Estate Investments In Gujranwala 2019', '<p dir=\"ltr\" style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #f5f5f5;\">Major developers are focused on the residential market as high demand for more communities across the country continues to drive purchases, especially in the affordable housing sector. Previously only large cities were considered but now with the overall revolution of the real estate, a quality living and investment options are bright in all the cities of Pakistan.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #f5f5f5;\"><span style=\"box-sizing: border-box; color: #333399;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><a style=\"box-sizing: border-box; background: transparent; color: #5e5e5e; text-decoration-line: none; cursor: pointer; transition: color 0.1s linear 0s; -webkit-font-smoothing: antialiased;\" href=\"https://wall.pk/real-estate-investments-in-gujranwala-single-news-1848.aspx#master\"><span style=\"box-sizing: border-box; color: #333399;\">Master City Gujranwala</span></a></span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #f5f5f5;\"><span style=\"box-sizing: border-box; color: #333399;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><a style=\"box-sizing: border-box; background: transparent; color: #5e5e5e; text-decoration-line: none; cursor: pointer; transition: color 0.1s linear 0s; -webkit-font-smoothing: antialiased;\" href=\"https://wall.pk/real-estate-investments-in-gujranwala-single-news-1848.aspx#dha\"><span style=\"box-sizing: border-box; color: #333399;\">DHA Gujranwala</span></a></span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #f5f5f5;\"><span style=\"box-sizing: border-box; color: #333399;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><a style=\"box-sizing: border-box; background: transparent; color: #5e5e5e; text-decoration-line: none; cursor: pointer; transition: color 0.1s linear 0s; -webkit-font-smoothing: antialiased;\" href=\"https://wall.pk/real-estate-investments-in-gujranwala-single-news-1848.aspx#citi\"><span style=\"box-sizing: border-box; color: #333399;\">Citi Housing Gujranwala</span></a></span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #f5f5f5;\"><span style=\"box-sizing: border-box; color: #333399;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><a style=\"box-sizing: border-box; background: transparent; color: #5e5e5e; text-decoration-line: none; cursor: pointer; transition: color 0.1s linear 0s; -webkit-font-smoothing: antialiased;\" href=\"https://wall.pk/real-estate-investments-in-gujranwala-single-news-1848.aspx#royal\"><span style=\"box-sizing: border-box; color: #333399;\">Royal Palm City Gujranwala</span></a></span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #f5f5f5;\"><span style=\"box-sizing: border-box; color: #333399;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><a style=\"box-sizing: border-box; background: transparent; color: #5e5e5e; text-decoration-line: none; cursor: pointer; transition: color 0.1s linear 0s; -webkit-font-smoothing: antialiased;\" href=\"https://wall.pk/real-estate-investments-in-gujranwala-single-news-1848.aspx#university\"><span style=\"box-sizing: border-box; color: #333399;\">University Town Gujranwala</span></a></span></span></p>\r\n<p dir=\"ltr\" style=\"box-sizing: border-box; margin: 0px; font-size: 13px; line-height: 20px; padding: 0px; color: #888888; font-family: \'Segoe UI\'; background-color: #f5f5f5;\">Gujranwala is among those cities which are developing rapidly and remarkably in the real estate sector where I\'d say that aspiration, potential and strong expectations are major drawing forces of change. Yes, Gujranwala has become an attractive hub which holds great opportunities ripening gradually and offering high potential for modern investors. Because of the development status and thriving environment of this city with spirit and dynamics, you will find a gate towards the new possibilities in 2019.</p>', 1, 'NewsImage_thumb.jpg', '2021-02-12 15:20:14', 1),
(3, 'This is a Test News', '<p>dksajdksajdkalsjdakshfewiufsdkjfnskdjfnienfdksfjiwejfksdfnkwefnmcdskjfweirjfkerjwesjadfhskjf.</p>\r\n<p>asdjkashdkajsdjkasdaskdjhkjhkjhkjkjjkkjjk</p>', 3, 'IMG_20181204_191547.jpg', '2021-03-09 10:33:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE `news_type` (
  `news_type_id` int(20) NOT NULL,
  `news_type_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`news_type_id`, `news_type_name`) VALUES
(1, 'General News'),
(2, 'Construction'),
(3, 'Development');

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

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_name`, `property_description`, `property_type`, `property_plot`, `plot_for`, `property_location`, `property_price`, `property_posted_on`, `property_status`, `property_image`, `agent_id`, `society_id`) VALUES
(1, 'asdasd', '<p>Enter Property Desfsdfdsfdsfdsfdscription Here...!!!</p>', '2', '4', 2, 'adsada', 23423432, '2021-03-09 13:24:26', 'Available', 'test-company.jpg', 1, 1),
(2, 'wewea', '<p>Enter Property Description Here...!!!sdsd</p>', '2', '4', 1, 'aweawda', 234234, '2021-03-09 15:39:30', 'Available', 'test-company-2.png', 1, 1),
(3, '5 Marla Plot', '<p>I have a Plot of 5 Marla on the Main road of Bedian Road.<br /><a href=\"http://www.expertflow.com/\">03128776604</a></p>', '1', '2', 1, 'Nadra Abad Bedian Road Lahore Cantt', 10000000, '2021-03-09 20:39:20', 'Available', 'test-company.jpg', 1, 1);

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

--
-- Dumping data for table `signup_as_agent`
--

INSERT INTO `signup_as_agent` (`agent_id`, `agent_name`, `agent_email`, `agent_password`, `agent_phone`, `agent_address`, `agent_zipcode`, `agent_image`, `agent_country`, `agent_city_deal`, `agent_agency_name`, `agent_services`, `agent_company_phone`, `agent_company_address`, `agent_company_logo`, `status`) VALUES
(1, 'Mobeen Shah', 'shahmobeen333@gmail.com', '$2y$10$hjyw0tj8nBCrG/qHHBtQKu0CavLJe6SDwry6yoOxg0FcrjnMG.uHm', '03128776604', 'Lahore, Pakistan', 54000, 'test-user.png', 'Pakistan', 'Islamabad, Lahore', 'Bukhari & Sons Pvt Ltd.', 'We provide services regarding Buying, Selling, and Renting Properties in Lahore and Islamabad.', '03128776604', 'Lahore, Pakistan', 'Logo.jpeg', 'Feature Agent'),
(2, 'Zahid Shah', 'shahzahid@gmail.com', '$2y$10$SUb80FIYqXLzkdMYIagdsO1cT4D8Wuj9u7K2vuiKatNMMASkbo98m', '03214253974', 'Lahore, Pakistan', 54000, 'test-user.png', 'Pakistan', 'Islamabad, Ahmed Nager Chatha, Ahmadpur East', 'Zahid & Company', 'Provide Services to Buying and selling property', '03214253974', 'Lahore, Pakistan', 'test-company.jpg', 'Pakistan Agent'),
(3, 'Waqas Nadeem', 'waqasnadeem@gmail.com', '$2y$10$GHOhz.5iYZY2lG2leji9BeE2N35F8jAEm2G8QMD8ZQrd0IbsccI4u', '03234169956', 'Lahore, Pakistan', 54000, 'test-user-2.jpg', 'Pakistan', 'Islamabad, Ahmed Nager Chatha, Ahmadpur East, Ali Khan Abad, Arifwala', 'Nadeem & Sons Pvt Ltd.', 'This is a Test Description of services', '03234169956', 'Lahore, Pakistan', 'test-company-2.png', 'Pakistan Agent');

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

--
-- Dumping data for table `signup_as_user`
--

INSERT INTO `signup_as_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_mobile`, `user_address`, `user_zipcode`, `user_image`, `user_country`) VALUES
(1, 'Waqas Nadeem', 'waqas.nadeem@gmail.com', '$2y$10$ZVl9YJ9Q2hMC8.I5sLDaYegyrBEd4mjRSJI4o8m0UiTgTSDwgm9hW', '03214253974', 'Lahore, Pakistan', 54000, 'test-user-2.jpg', 'Pakistan'),
(2, 'Zahid Shah', 'shahzahid@gmail.com', '$2y$10$OiF.TfbgAguJQoe0qsFxmeBO/LojK0ONa9hckJzOWY2ReKuaGNaDa', '03234169956', 'Lahore,Pakistan', 54000, 'test-user.png', 'Pakistan');

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

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`society_id`, `society_name`, `society_location`, `society_descrption`, `society_image`, `society_status`, `agent_id`, `city_id`) VALUES
(1, 'Hajveri Housing Scheme', '<p>Enter Society Description Here...!!!</p>', 'jsadasjkdhjkas', 'Pending', 'NewsImage_thumb.jpg', 1, 1);

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
-- Indexes for table `plots`
--
ALTER TABLE `plots`
  ADD PRIMARY KEY (`Plot_House_ID`),
  ADD UNIQUE KEY `Plot/House_ID` (`Plot_House_ID`);

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
  MODIFY `city_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forum_type`
--
ALTER TABLE `forum_type`
  MODIFY `forum_type_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `news_type_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plots`
--
ALTER TABLE `plots`
  MODIFY `Plot_House_ID` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `property_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup_as_user`
--
ALTER TABLE `signup_as_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `society_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plots`
--
ALTER TABLE `plots`
  ADD CONSTRAINT `plots_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `signup_as_agent` (`agent_id`);

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
