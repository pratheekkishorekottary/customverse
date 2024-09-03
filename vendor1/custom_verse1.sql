-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 02:24 PM
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
-- Database: `custom_verse1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(20) NOT NULL,
  `a_name` varchar(200) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_password` varchar(200) NOT NULL,
  `a_profile` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`, `a_profile`) VALUES
(1, 'rithesh', 'ritheshkulal77@gmail.com', '12345', 'upload/p-1.jpeg'),
(4, 'rithesh', 'ritheshkulal77@gmail.com', '12345', 'upload/p-1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cr_id` int(200) NOT NULL,
  `p_id` int(200) NOT NULL,
  `u_id` int(200) NOT NULL,
  `cr_qty` int(200) NOT NULL,
  `cr_added_date` date NOT NULL,
  `cr_updated_date` date NOT NULL,
  `cr_status` varchar(200) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ct_id` int(200) NOT NULL,
  `ct_name` varchar(200) NOT NULL,
  `ct_posted_date` date NOT NULL,
  `ct_updated_date` date NOT NULL,
  `ct_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ct_id`, `ct_name`, `ct_posted_date`, `ct_updated_date`, `ct_status`) VALUES
(11, 'Hoodies', '0000-00-00', '0000-00-00', ''),
(12, 'Bags', '0000-00-00', '0000-00-00', ''),
(13, 'Posters', '0000-00-00', '0000-00-00', ''),
(14, 'Sweat Shirts', '0000-00-00', '0000-00-00', ''),
(15, 'Shoes', '0000-00-00', '0000-00-00', ''),
(16, 'Customize', '0000-00-00', '0000-00-00', ''),
(18, 'Accessories', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `u_id` int(200) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_profile` varchar(500) NOT NULL,
  `u_created_date` varchar(200) NOT NULL,
  `u_city` varchar(200) NOT NULL,
  `u_state` varchar(200) NOT NULL,
  `u_pin` int(200) NOT NULL,
  `u_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`u_id`, `u_name`, `u_email`, `u_phone`, `u_password`, `u_address`, `u_profile`, `u_created_date`, `u_city`, `u_state`, `u_pin`, `u_status`) VALUES
(3, 'ananya', 'ananyasuvarna02@gmail.com', '0', 'ananya123', 'mudipu', '', '2023-05-30 13:33:24', 'mangalore', 'karnataka', 574323, 'pending'),
(6, 'Rithesh Kulal', 'pratheeshkulal57@gmail.com', '2045123456', '123456', 'Mangaladevi Temple Rd Monkey Stand, Jaihind Road', '', '2023-05-30 17:38:19', 'Mangaluru', 'Karnataka', 575001, 'pending'),
(9, 'pk', 'pratheeshkulal57@gmail.com', '0', '123', 'Mangaladevi Temple Rd Monkey Stand, Jaihind Road', '', '2023-06-19 12:28:12', '', '', 0, 'pending'),
(10, ' Rithesh Kulal', 'pratheeshkulal57@gmail.com', '+917975019421', '12345', 'Mangaladevi Temple Rd Monkey Stand, Jaihind Road', 'upload/mug3.jpg', '2023-06-29 11:34:02', 'Mangaluru', 'Karnataka', 575002, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `customized_order`
--

CREATE TABLE `customized_order` (
  `cust_id` int(20) NOT NULL,
  `cust_date` date NOT NULL DEFAULT current_timestamp(),
  `ct_id` int(20) NOT NULL,
  `p_id` int(20) NOT NULL,
  `cust_description` varchar(200) NOT NULL,
  `cust_image` varchar(500) NOT NULL,
  `u_id` int(20) NOT NULL,
  `cust_status` varchar(300) NOT NULL,
  `ct_size` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customized_order`
--

INSERT INTO `customized_order` (`cust_id`, `cust_date`, `ct_id`, `p_id`, `cust_description`, `cust_image`, `u_id`, `cust_status`, `ct_size`, `price`) VALUES
(11, '2023-06-21', 16, 63, 'I want a Free Style for this Product', 'upload/bg.jpeg', 6, 'Approved', 'L', 999),
(12, '2023-06-21', 16, 63, 'I want a Free Style for this Product', 'upload/form-v8.jpg', 6, 'Pending', 'M', 999),
(16, '2023-06-21', 16, 63, 'I want a Free Style for this Product', 'upload/form-v8.jpg', 6, 'Pending', 'L', 999),
(17, '2023-06-21', 16, 63, 'I want a Free Style for this Product', 'upload/download.jfif', 0, 'Pending', 'M', 999),
(18, '2023-06-21', 16, 64, 'I want a Free Style for this Product', 'upload/bg.jpeg', 6, 'Approved', 'M', 1199),
(19, '2023-06-22', 16, 64, 'I want a Free Style for this Product', 'upload/download.jfif', 6, 'Pending', 'L', 999),
(20, '2023-06-22', 16, 63, 'I want a Free Style for this Product', 'upload/form-v8.jpg', 6, 'Pending', 'S', 999),
(21, '2023-06-28', 16, 66, 'sxdfcgvhbjnkrxdctfvgbhnj', 'upload/qr.jpeg', 9, 'Approved', '', 799),
(22, '2023-06-29', 16, 63, 'dfg', 'upload/qr.jpeg', 10, 'Pending', 'S', 999),
(23, '2023-06-29', 16, 146, 'styutfguhihjhbn', 'upload/hmgoepprod.jpg', 10, 'Approved', 'M', 748),
(24, '2023-06-29', 16, 147, 'age', 'upload/hmgoepprod.jpg', 10, 'Approved', '', 499);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(200) NOT NULL,
  `f_date` date NOT NULL,
  `f_description` varchar(200) NOT NULL,
  `or_id` int(200) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_date`, `f_description`, `or_id`, `u_id`) VALUES
(1, '2023-06-22', 'zsgfSFDFg', 0, 6),
(2, '2023-06-22', 'ADvcZDV', 0, 6),
(3, '2023-06-22', 'DVSDV ', 11, 6),
(4, '2023-06-22', 'DVSDV ', 11, 6),
(5, '2023-06-28', 'ghbjn', 12, 9),
(6, '2023-06-29', 'good website', 13, 10),
(7, '2023-06-29', 'amazingg', 14, 10),
(8, '2023-06-29', 'wwaww', 15, 10),
(9, '2023-06-29', 'helooo', 16, 10);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `or_id` int(200) NOT NULL,
  `u_id` int(200) NOT NULL,
  `cr_id` int(200) NOT NULL,
  `p_id` int(200) NOT NULL,
  `or_qty` int(200) NOT NULL,
  `or_total_amount` int(200) NOT NULL,
  `or_date` date NOT NULL DEFAULT current_timestamp(),
  `or_status` varchar(1000) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `unid` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`or_id`, `u_id`, `cr_id`, `p_id`, `or_qty`, `or_total_amount`, `or_date`, `or_status`, `cust_id`, `unid`) VALUES
(1, 6, 0, 0, 0, 1099, '2023-06-15', 'order delivered', 11, ''),
(2, 6, 0, 0, 0, 1099, '2023-06-14', 'Pending', 11, ''),
(5, 6, 0, 43, 0, 2396, '2023-06-14', 'Pending', 0, '64944f097a99c'),
(6, 6, 0, 44, 0, 2396, '2023-06-16', 'order delivered', 0, '64944f097a99c'),
(7, 6, 0, 43, 2, 2396, '2023-06-14', 'order delivered', 0, '64944fba2d8f1'),
(9, 6, 0, 43, 2, 2396, '2023-06-16', 'Pending', 0, '6494537f534ca'),
(10, 6, 0, 44, 2, 2396, '2023-06-14', 'Pending', 0, '6494537f534ca'),
(11, 6, 0, 42, 2, 998, '2023-06-14', 'Pending', 0, '64945519e9727'),
(12, 9, 0, 0, 0, 849, '0000-00-00', '2023-06-28 17:14:16', 21, ''),
(13, 10, 0, 42, 1, 749, '2023-06-29', 'order delivered', 0, '649d29463ea95'),
(14, 10, 0, 0, 0, 798, '0000-00-00', '2023-06-29 17:38:36', 23, ''),
(15, 10, 0, 114, 1, 749, '2023-06-29', 'order delivered', 0, '649d749c38453'),
(16, 10, 0, 0, 0, 549, '0000-00-00', '2023-06-29 17:45:12', 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pt_id` int(200) NOT NULL,
  `pt_date` date NOT NULL,
  `or_id` int(200) NOT NULL,
  `u_id` int(11) NOT NULL,
  `pt_mode` varchar(200) NOT NULL,
  `pt_transaction_id` int(200) NOT NULL,
  `pt_card_name` varchar(200) NOT NULL,
  `pt_card_number` int(200) NOT NULL,
  `cvv` int(11) NOT NULL,
  `pt_status` varchar(1000) NOT NULL,
  `unid` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pt_id`, `pt_date`, `or_id`, `u_id`, `pt_mode`, `pt_transaction_id`, `pt_card_name`, `pt_card_number`, `cvv`, `pt_status`, `unid`) VALUES
(26, '2023-06-29', 13, 10, 'cash', 0, '', 0, 0, 'pending', '649d29463ea95'),
(27, '0000-00-00', 0, 10, '24514851246', 0, '', 0, 2147483647, 'pending', ''),
(28, '2023-06-29', 15, 10, 'cash', 0, '', 0, 0, 'pending', '649d749c38453'),
(29, '0000-00-00', 0, 10, '', 0, '', 0, 2147483647, 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(200) NOT NULL,
  `ct_id` int(20) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_description` varchar(200) NOT NULL,
  `p_price` int(200) NOT NULL,
  `p_image` varchar(1000) NOT NULL,
  `size` varchar(50) NOT NULL,
  `p_posted_date` date NOT NULL,
  `p_updated_date` date NOT NULL,
  `p_status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `ct_id`, `p_name`, `p_description`, `p_price`, `p_image`, `size`, `p_posted_date`, `p_updated_date`, `p_status`) VALUES
(114, 13, 'Jujutsu Kaisen-Satoru Gojo Metal Poster', 'This metal poster is an extremely durable premium product. It is weather and water-resistant making it suitable for both indoor and outdoor display.', 699, 'upload/poster3.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(115, 13, 'Bleach Hollow Mask Art Poster', 'Blank walls suck, so bring some life to your dorm, bedroom, office, and studio. Let them speak with your favourite quotes, art, or designs printed on our posters!', 699, 'upload/poster1.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(116, 13, 'Solo Levelling-Soldiers Art Poster', 'Blank walls suck, so bring some life to your dorm, bedroom, office, and studio. Let them speak with your favourite quotes, art, or designs printed on our posters!', 699, 'upload/poster2.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(117, 15, 'Men Anime Shoes Demon Slayer', 'Zenitsu themed custom designed shoes', 1999, 'upload/shoes1.jpeg', '28,30,32,34,36', '0000-00-00', '0000-00-00', ''),
(119, 15, 'Men Anime Shoes Demon Slayer', 'Giyu themed custom designed shoes', 1999, 'upload/shoes3.jpeg', '28,30,32,34,36', '0000-00-00', '0000-00-00', ''),
(120, 15, 'Men Anime Shoes Demon Slayer', 'Tanjiro themed custom designed shoes', 1999, 'upload/shoes2.jpeg', '28,30,32,34,36', '0000-00-00', '0000-00-00', ''),
(121, 18, 'Womens Printed mug', 'High Print Quality pretty girl zeen zeen themed mug', 399, 'upload/mug3.jpg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(122, 18, 'Mens Printed mug', 'High Print Quality Bleach Grimmjow jaegarjaguez themed mug', 399, 'upload/mug2.jpg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(123, 18, 'Womens Printed mug', 'High Print Quality cute girl themed  white colored mug', 399, 'upload/mug1.jpg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(124, 11, 'Dark green colored Relax fit hoodie', 'Hoodie in sweatshirt fabric made from a cotton blend. Relaxed fit with a jersey-lined, drawstring hood, a kangaroo pocket, long sleeves and wide ribbing at the cuffs and hem. Soft brushed inside.', 899, 'upload/WhatsApp Image 2023-06-23 at 11.34.15 PM.jpeg', 'S,M,L,XL,XXL', '0000-00-00', '0000-00-00', ''),
(125, 11, 'Rust brown colored Relax fit hoodie', 'Hoodie in sweatshirt fabric made from a cotton blend. Relaxed fit with a jersey-lined, drawstring hood, a kangaroo pocket, long sleeves and wide ribbing at the cuffs and hem. Soft brushed inside.', 899, 'upload/WhatsApp Image 2023-06-23 at 11.34.16 PM.jpeg', 'S,M,L,XL,XXL', '0000-00-00', '0000-00-00', ''),
(126, 11, 'Light pink colored Relax fit hoodie', 'Hoodie in sweatshirt fabric made from a cotton blend. Relaxed fit with a jersey-lined, drawstring hood, a kangaroo pocket, long sleeves and wide ribbing at the cuffs and hem. Soft brushed inside.', 899, 'upload/WhatsApp Image 2023-06-23 at 11.35.05 PM.jpeg', 'S,M,L,XL,XXL', '0000-00-00', '0000-00-00', ''),
(127, 18, 'Dead pool - Streetwear cap', 'Unisex black Deadpool Baseball Cap', 299, 'upload/WhatsApp Image 2023-06-23 at 11.40.50 PM.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(128, 18, 'Panda Camo - Streetwear cap', 'Unisex White Panda camo Baseball Cap', 299, 'upload/WhatsApp Image 2023-06-23 at 11.40.50 PM (1).jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(129, 18, 'Melting Leaf - Streetwear cap', 'Unisex Black & White Melting Leaf Baseball Cap', 299, 'upload/WhatsApp Image 2023-06-23 at 11.40.49 PM.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(130, 12, 'Forever Glam- Blue tote Bag', 'Stylish and Trendy bags that have parallel handles that emerge from the inside of the bag', 499, 'upload/WhatsApp Image 2023-06-29 at 2.40.46 PM.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(131, 12, 'Forever Glam- Light Pink Bag', 'Stylish and Trendy bags that have parallel handles that emerge from the inside of the bag', 499, 'upload/WhatsApp Image 2023-06-29 at 2.39.53 PM.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(132, 12, 'Forever Glam- Teal tote Bag', 'Stylish and Trendy bags that have parallel handles that emerge from the inside of the bag', 499, 'upload/WhatsApp Image 2023-06-29 at 2.39.53 PM (1).jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(134, 14, 'Relax fit -  Black Sweatshirt', '“This hoodie is made of high-quality materials that will keep you warm and comfortable all season long.', 699, 'upload/hmgoepprod (2).jpg', 'XS,S,M,L,XL', '0000-00-00', '0000-00-00', ''),
(135, 14, 'Relax fit - Light Blue Sweatshirt', '“This hoodie is made of high-quality materials that will keep you warm and comfortable all season long.', 699, 'upload/hmgoepprod (1).jpg', 'XS,S,M,L,XL', '0000-00-00', '0000-00-00', ''),
(136, 14, 'Relax fit -  Burgandy Sweatshirt', '“This hoodie is made of high-quality materials that will keep you warm and comfortable all season long.', 699, 'upload/hmgoepprod.jpg', 'XS,S,M,L,XL', '0000-00-00', '0000-00-00', ''),
(137, 15, 'White Designed shoes', 'White nike shoes with Random Doodles', 1599, 'upload/Grunge AF1’s ⚔️ (1).jpg', '32,34,36,38', '0000-00-00', '0000-00-00', ''),
(138, 15, 'White Designed shoes', 'White nike shoes with Random Doodles', 1599, 'upload/qq.jpg', '32,34,36,38', '0000-00-00', '0000-00-00', ''),
(139, 15, 'White Designed shoes', 'White nike shoes with Random Doodles', 1599, 'upload/Grunge AF1’s ⚔️.jpg', '32,34,36,38', '0000-00-00', '0000-00-00', ''),
(140, 13, 'Itachi Uchiha - Wide Posters', 'Blank walls suck, so bring some life to your dorm, bedroom, office, and studio. Let them speak with your favourite quotes, art, or designs printed on our posters!', 799, 'upload/poster8.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(141, 13, 'Valorant-Omen-Wide poster', 'Blank walls suck, so bring some life to your dorm, bedroom, office, and studio. Let them speak with your favourite quotes, art, or designs printed on our posters!', 799, 'upload/poster9.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(142, 13, 'Among us - Wide art poster', 'Blank walls suck, so bring some life to your dorm, bedroom, office, and studio. Let them speak with your favourite quotes, art, or designs printed on our posters!', 799, 'upload/poster10.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(143, 18, 'Graphic printed -Spiral Note books', 'Spiral Notebook - A4 Size (29cm x 21cm) (Uni-12, 200 Pages Ruled) Durable and Attractive Soft Cover with Wirebound, Bright and Smooth Pages.', 149, 'upload/notebook2.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(144, 18, 'Graphic printed -Spiral Note books', 'Spiral Notebook - A4 Size (29cm x 21cm) (Uni-12, 200 Pages Ruled) Durable and Attractive Soft Cover with Wirebound, Bright and Smooth Pages.', 149, 'upload/notebook1.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(145, 18, 'Graphic printed -Spiral Note books', 'Spiral Notebook - A4 Size (29cm x 21cm) (Uni-12, 200 Pages Ruled) Durable and Attractive Soft Cover with Wirebound, Bright and Smooth Pages.', 149, 'upload/nootebook3.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(146, 16, 'white hoodie', 'Add any design you want for just ₹59/- extra', 699, 'upload/hmgoepprod-PhotoRoom.png-PhotoRoom.png', 'S,M,L,XL', '0000-00-00', '0000-00-00', ''),
(147, 16, 'White Sweat shirt', 'Add any design you want for just ₹59/- extra', 499, 'upload/hmgoepprod (3)-PhotoRoom.png-PhotoRoom.png', 'S,M,L,XL', '0000-00-00', '0000-00-00', ''),
(148, 16, 'White T-shirt', 'Add any design you want for just ₹59/- extra', 299, 'upload/hmgoepprod (2)-PhotoRoom.png-PhotoRoom.png', 'S,M,L,XL', '0000-00-00', '0000-00-00', ''),
(149, 16, 'Black hoodie', 'Add any design you want for just ₹59/- extra', 699, 'upload/hmgoepprod (1)-PhotoRoom.png-PhotoRoom.png', 'S,M,L,XL', '0000-00-00', '0000-00-00', ''),
(150, 16, 'Black sweat shirts', 'Add any design you want for just ₹59/- extra', 499, 'upload/hmgoepprod (2)-PhotoRoom.png-PhotoRoom (1).png', 'S,M,L,XL', '0000-00-00', '0000-00-00', ''),
(151, 16, 'Black T-shirt', 'Add any design you want for just ₹59/- extra', 299, 'upload/hmgoepprod-PhotoRoom.png-PhotoRoom (1).png', 'S,M,L,XL', '0000-00-00', '0000-00-00', ''),
(152, 16, 'Plain Blank Poster', 'Add any design you want for just ₹59/- extra', 599, 'upload/WhatsApp Image 2023-06-29 at 4.06.13 PM.jpeg', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(154, 16, 'Black Plain Mug', 'Add any design you want for just ₹59/- extra', 299, 'upload/pngwing.com (5).png', 'FIXED SIZE', '0000-00-00', '0000-00-00', ''),
(155, 16, 'White Plain Mug', 'Add any design you want for just ₹59/- extra', 299, 'upload/pngwing.com (18).png', 'FIXED SIZE', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `s_id` int(200) NOT NULL,
  `or_id` int(200) NOT NULL,
  `u_id` int(11) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `s_email` int(200) NOT NULL,
  `s_phone` int(200) NOT NULL,
  `s_address` varchar(200) NOT NULL,
  `s_status` varchar(200) NOT NULL,
  `s_city` varchar(200) NOT NULL,
  `s_state` varchar(200) NOT NULL,
  `s_pin` int(200) NOT NULL,
  `s_date` date NOT NULL,
  `unid` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`s_id`, `or_id`, `u_id`, `s_name`, `s_email`, `s_phone`, `s_address`, `s_status`, `s_city`, `s_state`, `s_pin`, `s_date`, `unid`) VALUES
(1, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', ''),
(2, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', ''),
(3, 1, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', ''),
(4, 2, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', ''),
(5, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '649409879950b'),
(6, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944e1c2c61b'),
(7, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944e1c2c61b'),
(8, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944e757aaac'),
(9, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944e757aaac'),
(10, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944e88ed72b'),
(11, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944e88ed72b'),
(12, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944eac09097'),
(13, 0, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944eac09097'),
(14, 3, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944eeb0185c'),
(15, 4, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944eeb0185c'),
(16, 5, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944f097a99c'),
(17, 6, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944f097a99c'),
(18, 7, 6, 'gautham 234', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944fba2d8f1'),
(19, 8, 6, 'gautham 234', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64944fba2d8f1'),
(20, 9, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '6494537f534ca'),
(21, 10, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '6494537f534ca'),
(22, 11, 6, 'gautham gautham', 0, 123445676, 'mangalore', '', 'sdfg', 'Karanataka', 575005, '2023-06-22', '64945519e9727'),
(23, 12, 9, 'Rithesh Kulal', 0, 2147483647, 'Mangaladevi Temple Rd Monkey Stand, Jaihind Road', '', 'Mangaluru', 'Karnataka', 575001, '2023-06-28', ''),
(24, 13, 10, 'Rithesh Kulal', 0, 2147483647, 'Mangaladevi Temple Rd Monkey Stand, Jaihind Road', '', 'Mangaluru', 'Karnataka', 575001, '2023-06-29', '649d29463ea95'),
(25, 14, 10, 'Rithesh Kulal', 0, 2147483647, 'Mangaladevi Temple Rd Monkey Stand, Jaihind Road', '', 'Mangaluru', 'Karnataka', 575001, '2023-06-29', ''),
(26, 15, 10, 'Rithesh Kulal', 0, 2147483647, 'Mangaladevi Temple Rd Monkey Stand, Jaihind Road', '', 'Mangaluru', 'Karnataka', 575001, '2023-06-29', '649d749c38453'),
(27, 16, 10, 'Rithesh Kulal', 0, 2147483647, 'Mangaladevi Temple Rd Monkey Stand, Jaihind Road', '', 'Mangaluru', 'Karnataka', 575001, '2023-06-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `vr_id` int(200) NOT NULL,
  `vr_title` varchar(200) NOT NULL,
  `vr_amount` int(200) NOT NULL,
  `vr_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`vr_id`, `vr_title`, `vr_amount`, `vr_status`) VALUES
(2, 'FreeCustom100', 100, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `customized_order`
--
ALTER TABLE `customized_order`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`vr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cr_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ct_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `u_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customized_order`
--
ALTER TABLE `customized_order`
  MODIFY `cust_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `or_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pt_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `s_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `vr_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
