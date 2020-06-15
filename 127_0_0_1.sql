-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 03:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mshop`
--
CREATE DATABASE IF NOT EXISTS `mshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mshop`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `address`, `email`, `password`, `image`) VALUES
(1, 'Rakib Alom', '01777424393', '127/Block-A, Ghasitula, Sylhet', 'rakibalom17@gmail.com', 'rakibalom', 'images-7.jpg'),
(4, 'Md Rakibul Alom', '01777424393', 'Sylhet, Bangladesh', 'admin@gmail.com', 'rakibalom', 'appler.jpg'),
(5, 'Arif Raihan', '01700000000', 'B-baria, Bangladesh', 'arif@gmail.com', 'arif', 'Me glass_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` text NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `pages` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `pdf_link` varchar(255) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `image`, `price`, `name`, `category`, `author`, `publisher`, `isbn`, `edition`, `pages`, `country`, `language`, `pdf_link`, `summary`) VALUES
(10, 'book_1.jpg', '340', 'Serina', 'Scienc Fiction', 'Jafor Ikbal', 'Somoy Prokasoni', '978984918754', '1st, 2015', '125', 'Bangladesh', 'Bangla', '-', 'à¦¸à§‡à¦°à¦¿à¦¨à¦¾ à¦¨à¦¾à¦®à§‡à¦° à¦à¦•à¦Ÿà¦¿ à¦®à§‡à§Ÿà§‡à¦° à¦¸à§à¦ªà¦¾à¦° à¦¨à§à¦¯à¦¾à¦šà¦¾à¦°à¦¾à¦² à¦ªà¦¾à¦“à§Ÿà¦¾à¦° à¦†à¦›à§‡...'),
(11, 'book_2.jpg', '650', 'Reyad Alomer Rafkhata', 'Romantic', 'Reyad Alom', 'Microniya Prokasoni', '978984918754', '2017', '335', 'Bangladesh', 'Bangla', '-', ''),
(12, 'book_2.jpg', '650', 'Reyad Alomer Rafkhata', 'Romantic', 'Reyad Alom', 'Microniya Prokasoni', '978984918754', '2017', '335', 'Bangladesh', 'Bangla', '-', ''),
(13, 'book_4.jpg', '', 'BlackHoler Baccha', 'Scienc Fiction', '', '', '', '', '', '', '', '', ''),
(14, 'book_4.jpg', '', 'BlackHoler Baccha', 'Scienc Fiction', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `processor_speed` varchar(255) NOT NULL,
  `motherboard` varchar(255) NOT NULL,
  `monitor` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `hard_disk` varchar(255) NOT NULL,
  `disk_type` varchar(255) NOT NULL,
  `graphics_card` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `networking` varchar(255) NOT NULL,
  `keyboard` varchar(255) NOT NULL,
  `mouse` varchar(255) NOT NULL,
  `modem` varchar(255) NOT NULL,
  `casing` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `image`, `name`, `price`, `type`, `brand`, `processor`, `processor_speed`, `motherboard`, `monitor`, `ram`, `hard_disk`, `disk_type`, `graphics_card`, `audio`, `networking`, `keyboard`, `mouse`, `modem`, `casing`, `others`) VALUES
(9, 'computer_1.jpg', 'Asus core i9 8th Generation', '60000', 'Desktop', 'ASUS', 'Laptop', '3.90 GHz', '250 Gigabyte', '-', '6 GB', '1 TB', 'TOSHIBA', 'Built in 2 GB', 'On-Board', 'Gigabit LAN 10/ 100/ 100, RJ 45 Port', '-', '-', 'Suppoted 3G/ 4G', 'ATX Thermal Gaming Looking Case', ''),
(10, 'computer_3.jpg', '1 TB Core i3', '32500', 'Desktop', '', 'Intel core i3 7th generation', '3.90 GHz', '250 Gigabyte', '19\" Samsung LED', '4 GB', '1 TB', 'TOSHIBA', 'Built in 2 GB', 'On-Board', 'Gigabit LAN 10/ 100/ 100, RJ 45 Port', 'A4TECH', 'A4TECH', 'Suppoted 3G/ 4G', 'ATX Thermal Gaming Looking Case', ''),
(11, 'computer_3.jpg', '1 TB Core i3', '32500', 'Desktop', '', 'Intel core i3 7th generation', '3.90 GHz', '250 Gigabyte', '19\" Samsung LED', '4 GB', '1 TB', 'TOSHIBA', 'Built in 2 GB', 'On-Board', 'Gigabit LAN 10/ 100/ 100, RJ 45 Port', 'A4TECH', 'A4TECH', 'Suppoted 3G/ 4G', 'ATX Thermal Gaming Looking Case', ''),
(12, 'computer_3.jpg', '1 TB Core i3', '32500', 'Desktop', '', 'Intel core i3 7th generation', '3.90 GHz', '250 Gigabyte', '19\" Samsung LED', '4 GB', '1 TB', 'TOSHIBA', 'Built in 2 GB', 'On-Board', 'Gigabit LAN 10/ 100/ 100, RJ 45 Port', 'A4TECH', 'A4TECH', 'Suppoted 3G/ 4G', 'ATX Thermal Gaming Looking Case', ''),
(13, 'computer_3.jpg', '1 TB Core i3', '32500', 'Desktop', '', 'Intel core i3 7th generation', '3.90 GHz', '250 Gigabyte', '19\" Samsung LED', '4 GB', '1 TB', 'TOSHIBA', 'Built in 2 GB', 'On-Board', 'Gigabit LAN 10/ 100/ 100, RJ 45 Port', 'A4TECH', 'A4TECH', 'Suppoted 3G/ 4G', 'ATX Thermal Gaming Looking Case', ''),
(14, 'computer_3.jpg', '1 TB Core i3', '32500', 'Desktop', '', 'Intel core i3 7th generation', '3.90 GHz', '250 Gigabyte', '19\" Samsung LED', '4 GB', '1 TB', 'TOSHIBA', 'Built in 2 GB', 'On-Board', 'Gigabit LAN 10/ 100/ 100, RJ 45 Port', 'A4TECH', 'A4TECH', 'Suppoted 3G/ 4G', 'ATX Thermal Gaming Looking Case', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(8, 'Arif Raihan', '01700000000', 'arif@gmail.com', 'Hello', 'More Develop need for you Website...');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `image`, `name`, `category`, `price`, `summary`) VALUES
(4, 'e1.jpg', 'Capecitor', 'Parts', '15', ''),
(5, 'e4.jpg', 'LED Light', 'Parts', '25', '');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fabric` varchar(255) NOT NULL,
  `sleeve` varchar(255) NOT NULL,
  `fabrication` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id`, `image`, `price`, `name`, `code`, `type`, `fabric`, `sleeve`, `fabrication`, `color`, `size`, `note`) VALUES
(10, '0181025_mens-printed-hawaii-shirt-blue-4105510653_300.jpeg', '650', 'Half T-Shirt', '21604', 'T-Shirt', '', 'Half Sleeve', '', 'Multi color (As per given picture', 'M, L, XL', ''),
(11, '0169263_mens-full-sleeve-casual-cotton-shirt-fc-s78_300.jpeg', '1200', 'Full Sleeve Shirt', '21604', 'Shirt', '', 'Full Sleeve', '', 'Multi color (As per given picture', 'M, L, XL', ''),
(12, '0169263_mens-full-sleeve-casual-cotton-shirt-fc-s78_300.jpeg', '1200', 'Full Sleeve Shirt', '21604', 'Shirt', '', 'Full Sleeve', '', 'Multi color (As per given picture', 'M, L, XL', ''),
(13, '0169263_mens-full-sleeve-casual-cotton-shirt-fc-s78_300.jpeg', '1200', 'Full Sleeve Shirt', '21604', 'Shirt', '', 'Full Sleeve', '', 'Multi color (As per given picture', 'M, L, XL', ''),
(14, '0169263_mens-full-sleeve-casual-cotton-shirt-fc-s78_300.jpeg', '4500', 'Full Sleeve Shirt', '21604', 'Shirt', '', 'Full Sleeve', '', 'Multi color (As per given picture', 'M, L, XL', '\r\nThis product is short in our stock. So please, order fast.');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `release_date` varchar(255) NOT NULL,
  `body_type` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `deminesion` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `sim` varchar(255) NOT NULL,
  `protection` varchar(255) NOT NULL,
  `display_type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `2g` varchar(255) NOT NULL,
  `3g` varchar(255) NOT NULL,
  `4g` varchar(255) NOT NULL,
  `speed` varchar(255) NOT NULL,
  `main_camera` varchar(255) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `videos` varchar(255) NOT NULL,
  `selfie_camera` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `chipset` varchar(255) NOT NULL,
  `gpu` varchar(255) NOT NULL,
  `os_ios` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `rom` varchar(255) NOT NULL,
  `external` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `talktime` varchar(255) NOT NULL,
  `sensiors` varchar(255) NOT NULL,
  `bluetooth` varchar(255) NOT NULL,
  `gps` varchar(255) NOT NULL,
  `wifi` varchar(255) NOT NULL,
  `usb` varchar(255) NOT NULL,
  `sound` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `image`, `price`, `brand`, `model`, `release_date`, `body_type`, `color`, `deminesion`, `weight`, `sim`, `protection`, `display_type`, `size`, `2g`, `3g`, `4g`, `speed`, `main_camera`, `feature`, `videos`, `selfie_camera`, `cpu`, `chipset`, `gpu`, `os_ios`, `ram`, `rom`, `external`, `battery`, `talktime`, `sensiors`, `bluetooth`, `gps`, `wifi`, `usb`, `sound`, `others`) VALUES
(6, '0172004_xiaomi-8-lite-4gb-64gb-black_300.jpeg', '4750', 'Samsung', 'E6', '12,January,2015', 'Plastic Body', 'gold, black', '150 deminesion', '180gm', 'Duel Sim', 'none', 'Gorilla Glass 3', '4.5', '(2100), 2(1900), 3(1800), 4(1700/2100)', '(2100), 2(1900), 3(1800), 4(1700/2100)', '', '21 mbps', '5 MP', '', '1900px X 1080px', '2 MP', '1.0 octa core', '-', '-', 'Android 5.0', '1 GB', '8 GB', 'Up to 32 GB', '1650 Li-ion', '8 hours in 3G', '-', '4.0', '-', '', 'USB 2.0', '', ''),
(8, '0177236_samsung-galaxy-m20-3gb-32gb-ocean-blue_300.jpeg', '55000', 'Samsung', 'S10 Plus', '12,January,2019', 'Metal Body', 'gold, black', '150 deminesion', '180gm', 'Duel Sim', 'none', 'Gorilla Glass 3', '6 inches', '(2100), 2(1900), 3(1800), 4(1700/2100)', '(2100), 2(1900), 3(1800), 4(1700/2100)', 'LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700), 17(700), 18(800), 19(800), 20(800), 25(1900), 26(850), 28(700), 32(1500), 38(2600), 39(1900), 40(2300), 41(2500), 66(1700/2100) - Global', '45mbs', '20 MP', 'Tripple Camera', '1900px X 1080px', '13 MP', '1.9 octa core', '-', '-', 'Android 9.0', '6 GB', '256 GB', 'Up to 32 GB', '4000 Li-ion', '30 hours in 4G', '', '5.0.1', '', '', 'USB 2.0', '', '2 years warrenty, Earphone, Duel Charger'),
(9, '0177236_samsung-galaxy-m20-3gb-32gb-ocean-blue_300.jpeg', '55000', 'Samsung', 'S10 Plus', '12,January,2019', 'Metal Body', 'gold, black', '150 deminesion', '180gm', 'Duel Sim', 'none', 'Gorilla Glass 3', '6 inches', '(2100), 2(1900), 3(1800), 4(1700/2100)', '(2100), 2(1900), 3(1800), 4(1700/2100)', 'LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700), 17(700), 18(800), 19(800), 20(800), 25(1900), 26(850), 28(700), 32(1500), 38(2600), 39(1900), 40(2300), 41(2500), 66(1700/2100) - Global', '45mbs', '20 MP', 'Tripple Camera', '1900px X 1080px', '13 MP', '1.9 octa core', '-', '-', 'Android 9.0', '6 GB', '256 GB', 'Up to 32 GB', '4000 Li-ion', '30 hours in 4G', '', '5.0.1', '', '', 'USB 2.0', '', '2 years warrenty, Earphone, Duel Charger'),
(10, '0177236_samsung-galaxy-m20-3gb-32gb-ocean-blue_300.jpeg', '55000', 'Samsung', 'S10 Plus', '12,January,2019', 'Metal Body', 'gold, black', '150 deminesion', '180gm', 'Duel Sim', 'none', 'Gorilla Glass 3', '6 inches', '(2100), 2(1900), 3(1800), 4(1700/2100)', '(2100), 2(1900), 3(1800), 4(1700/2100)', 'LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700), 17(700), 18(800), 19(800), 20(800), 25(1900), 26(850), 28(700), 32(1500), 38(2600), 39(1900), 40(2300), 41(2500), 66(1700/2100) - Global', '45mbs', '20 MP', 'Tripple Camera', '1900px X 1080px', '13 MP', '1.9 octa core', '-', '-', 'Android 9.0', '6 GB', '256 GB', 'Up to 32 GB', '4000 Li-ion', '30 hours in 4G', '', '5.0.1', '', '', 'USB 2.0', '', '2 years warrenty, Earphone, Duel Charger'),
(12, '0177236_samsung-galaxy-m20-3gb-32gb-ocean-blue_300.jpeg', '55000', 'Samsung', 'S10 Plus', '12,January,2019', 'Metal Body', 'gold, black', '150 deminesion', '180gm', 'Duel Sim', 'none', 'Gorilla Glass 3', '6 inches', '(2100), 2(1900), 3(1800), 4(1700/2100)', '(2100), 2(1900), 3(1800), 4(1700/2100)', 'LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700), 17(700), 18(800), 19(800), 20(800), 25(1900), 26(850), 28(700), 32(1500), 38(2600), 39(1900), 40(2300), 41(2500), 66(1700/2100) - Global', '45mbs', '20 MP', 'Tripple Camera', '1900px X 1080px', '13 MP', '1.9 octa core', '-', '-', 'Android 9.0', '6 GB', '256 GB', 'Up to 32 GB', '4000 Li-ion', '30 hours in 4G', '', '5.0.1', '', '', 'USB 2.0', '', '2 years warrenty, Earphone, Duel Charger'),
(13, '0172004_xiaomi-8-lite-4gb-64gb-black_300.jpeg', '7000', 'Symphony', 'G-100', '2018', 'Plastic', 'Black', '', '140 gm', '', '', '', '5.5 inchies', '', '', '', '', '8 MP', '', '', '5 MP', '', '', '', 'Android 8.1 (Oreo)', '2 GB', '31 GB', '', '2500', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `materia` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `sleeve` varchar(255) NOT NULL,
  `inner_salwar` varchar(255) NOT NULL,
  `orna` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `body_size` varchar(255) NOT NULL,
  `stitching` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `image`, `price`, `name`, `code`, `type`, `materia`, `body`, `sleeve`, `inner_salwar`, `orna`, `work`, `body_size`, `stitching`, `color`, `note`) VALUES
(13, '0119606_womens-georgette-embroidery-un-stitched-three-piece-replica-5306_300.jpeg', '20000', 'Un-Stitched Three Piece', 'AT-596', 'Salwar kameez', 'Georgette & embroidery ', 'Indian weightless georgette', 'Chiffon georgette', 'Butter silk', 'Chiffon georgette', 'Computer embroidery', '-', 'Un-stitched', 'Multi color (As per given picture', ''),
(14, '0119606_womens-georgette-embroidery-un-stitched-three-piece-replica-5306_300.jpeg', '650', 'Un-Stitched Three Piece', 'AT-596', 'Salwar kameez', 'Georgette & embroidery ', 'Indian weightless georgette', 'Chiffon georgette', 'Butter silk', 'Chiffon georgette', 'Computer embroidery', '-', 'Un-stitched', 'Multi color (As per given picture', ''),
(15, '0119606_womens-georgette-embroidery-un-stitched-three-piece-replica-5306_300.jpeg', '650', 'Un-Stitched Three Piece', 'AT-596', 'Salwar kameez', 'Georgette & embroidery ', 'Indian weightless georgette', 'Chiffon georgette', 'Butter silk', 'Chiffon georgette', 'Computer embroidery', '-', 'Un-stitched', 'Multi color (As per given picture', ''),
(16, '0119606_womens-georgette-embroidery-un-stitched-three-piece-replica-5306_300.jpeg', '650', 'Un-Stitched Three Piece', 'AT-596', 'Salwar kameez', 'Georgette & embroidery ', 'Indian weightless georgette', 'Chiffon georgette', 'Butter silk', 'Chiffon georgette', 'Computer embroidery', '-', 'Un-stitched', 'Multi color (As per given picture', ''),
(17, '0119606_womens-georgette-embroidery-un-stitched-three-piece-replica-5306_300.jpeg', '650', 'Un-Stitched Three Piece', 'AT-596', 'Salwar kameez', 'Georgette & embroidery ', 'Indian weightless georgette', 'Chiffon georgette', 'Butter silk', 'Chiffon georgette', 'Computer embroidery', '-', 'Un-stitched', 'Multi color (As per given picture', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `men`
--
ALTER TABLE `men`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
