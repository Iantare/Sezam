-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 03:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sezam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(3, 'Ian', 'iantare@gmail.com', 'ian123', 'photo1.jpg', 'Rwanda', '<p>Am a senior Sofware Engineer with 8 Years experience as software developer</p>', '250-7835-453', 'Software Engineer'),
(4, 'Miss Gabriella', 'gabrintare@gmail.com', 'gaby123', 'photo2.jpg', 'Rwanda', '<p>am a snr developer with track record in leading developement projects , mentoring junior developers&nbsp;</p>', '250-7835-453', 'Snr Developer');

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `adverts_id` int(10) NOT NULL,
  `adverts_name` varchar(255) NOT NULL,
  `adverts_image` text NOT NULL,
  `adverts_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`adverts_id`, `adverts_name`, `adverts_image`, `adverts_url`) VALUES
(63, '  Advert3', 'Slide-4.jpg', '  '),
(68, 'Advert9', 't-shirt hunger(1).gif', ''),
(69, 'Advert1', 'sezam-online 1.gif', ''),
(70, ' Advert2', 'Slide-1.jpg', ' '),
(71, ' Advert5', 't-shirt hunger(2).gif', ' '),
(72, 'Advert4', 'Slide-6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `Basket_id` int(100) NOT NULL,
  `P_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `Prod_Qty` int(10) NOT NULL,
  `P_price` varchar(255) NOT NULL,
  `Size` text NOT NULL,
  `seller_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(10) NOT NULL,
  `box_title` text NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Cat_id` int(10) NOT NULL,
  `Cat_Title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cat_id`, `Cat_Title`, `cat_top`, `cat_image`) VALUES
(44, 'Books, Movies & Music', 'yes', ''),
(45, 'Fashions', 'yes', 'kids.jpg'),
(46, 'Electronics', 'yes', 'computer.jpg'),
(47, 'Collectibles & Art', 'yes', ''),
(48, 'Home & Garden', 'yes', ''),
(49, 'Sporting Goods', 'yes', ''),
(50, 'Toys & Hobbies', 'yes', ''),
(51, 'Industrial & Business', 'yes', ''),
(52, 'Health ', 'yes', ''),
(53, 'Motors', 'yes', 'audi.jpg'),
(54, 'Vehicles', 'yes', 'Audi5.jpg'),
(55, 'Others', 'no', 'Audi5.jpg'),
(56, 'Beauty', 'yes', ''),
(57, 'Real Estate', 'yes', ''),
(58, 'Services', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(100) NOT NULL,
  `Prod_id` int(100) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `Prod_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(5, 38, 'Coupon for T-Shirt', '1000', 'TS001', 4, 4),
(6, 65, 'Smart Phone', '75000', 'SP002T005', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_pass` varchar(255) NOT NULL,
  `cust_country` text NOT NULL,
  `cust_city` text NOT NULL,
  `cust_contact` varchar(255) NOT NULL,
  `cust_Address` text NOT NULL,
  `cust_image` text NOT NULL,
  `cust_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_email`, `cust_pass`, `cust_country`, `cust_city`, `cust_contact`, `cust_Address`, `cust_image`, `cust_ip`) VALUES
(6, 'Koko', 'koko@gc.com', '12345', 'Rda', 'kgl', '123-6543', 'kbgbg', 'photo2.jpg', '::1'),
(7, 'Fabiolla', 'Fabiolla@gmail.com', '12345', 'Rwanda', 'kgl', '0780505495', 'Kabeza', 'photo2.jpg', '::1'),
(8, 'Coco', 'coco@gc.com', '123', 'Rwanda', 'Kigali', '250-07856509', 'kbaga', 'photo2.jpg', '::1'),
(9, 'Nyina Aline', 'nyina@gc.com', '12345', 'Rwanda', 'kgl', '1234', 'kbaga', 'photo2.jpg', '::1'),
(10, 'Koko', 'coco@uza.com', '123', 'Rda', 'Kgl', '07883500001', 'Kbgabaga', '', '::1'),
(11, 'Client1', 'client@uza.com', '123', 'Rda', 'Musanze', '0788380004', 'Musanze, Yaunde , MY 004 Street, 20 ', 'photo2.jpg', '192.168.153.15'),
(12, 'Client2', 'client2@uza.com', '123', 'Rda', 'KGL', '0788380005', 'Kbgaga KG 48A ST , House # 21', 'photo2.jpg', '192.168.153.15'),
(13, 'ALINE NYINAWANKUSI', 'alintare01@gmail.com', 'Alintare123', 'Rwanda', 'Kigali', '078857410', 'Gasabo/Kibagabaga', 'c230_Red.jpg', '::1'),
(14, 'test1', 'test1@sezam.com', '123', 'Rda', 'KGL', '0788380010', 'Kbgaga KG 48A ST , House # 21', '', '192.168.153.120'),
(15, 'Emanuel', 'zorodzai@gmail.com', '$post123', 'Rwanda', 'Kigali', '0782384656', 'Kacyiru', '', '192.168.153.122'),
(16, 'Kazungu', 'kazungu@sezam-online.com', '123', '', '', '0788380011', '', '', '192.168.0.2'),
(19, 'Koko', '', '', '', '', '07883500001', 'Kbgabaga', '', '::1'),
(22, 'Ntare', '', '', '', '', '07883500001', 'Kbgabaga', '', '::1'),
(23, 'Alex', '', '', '', '', '0788123456', 'gikondo', '', '::1'),
(24, 'Ntare', '', '', '', '', '0788123456', 'gikondo', '', '::1'),
(25, 'Ntare', '', '', '', '', '0788123456', 'gikondo', '', '::1'),
(26, 'Ntare', '', '', '', '', '0788123456', 'gikondo', '', '::1'),
(27, 'Ntare', '', '', '', '', '0788123456', 'gikondo', '', '::1'),
(28, 'Ntare', '', '', '', '', '0788123456', 'gikondo', '', '::1'),
(29, 'Ntare', '', '', '', '', '0788123456', 'gikondo', '', '::1'),
(30, 'Ntare', '', '', '', '', '0788123456', 'Kbgabaga', '', '::1'),
(31, 'Ntare', '', '', '', '', '0788123456', 'Kbgabaga', '', '::1'),
(32, 'Ntare', '', '', '', '', '0788123456', 'Kbgabaga', '', '::1'),
(33, 'Gashuhe', '', '', '', '', '0788123456', 'gikondo', '', '::1'),
(34, 'Ntare', '', '', '', '', '0788123456', 'gikondo', '', '::1'),
(35, 'Ntare', '', '', '', '', '0788123456', 'Gasabo/Kibagabaga', '', '::1'),
(36, 'Ntare', '', '', '', '', '0788123456', 'Kbgabaga', '', '::1'),
(37, 'Koko', '', '', '', '', '07883500001', 'gikondo', '', '::1'),
(38, 'Papa Nyasha', '', '', '', '', '0722124114', 'Kibagabaga', '', '192.168.153.18'),
(39, 'Papa Nyasha', '', '', '', '', '0722124114', 'Kibagabaga', '', '192.168.153.18'),
(40, 'Papa Nyasha', 'papanyasha@yahoo.com', 'papanyasha', 'Rwanda', 'Kigali', '0722124124', 'Kibagabaga', '', '192.168.153.18'),
(41, 'Alex', '', '', '', '', '0788123456', 'Gasabo/Kibagabaga', '', '::1'),
(42, 'Carine', '', '', '', '', '07883500001', 'KK 48A street , Hse 34', '', '::1'),
(43, 'Kalisa', '', '', '', '', '0788380010', 'Kbgaga KG 48A ST , House # 21', '', '::1'),
(44, 'Koko', '', '', '', '', '0788123456', 'gikondo', '', '::1'),
(45, 'KK', '', '', '', '', '0788123456', 'KK 48A street , Hse 34', '', '::1'),
(46, 'Ntare', '', '', '', '', '0788123456', 'KK 48A street , Hse 34', '', '::1'),
(47, 'Koko', '', '', '', '', '0788123456', 'KK 48A street , Hse 34', '', '::1'),
(48, 'Ntare', '', '', '', '', '0788123456', 'KK 48A street , Hse 34', '', '::1'),
(49, 'nik', '', '', '', '', '07883500001', 'KK 48A street , Hse 34', '', '::1'),
(50, 'nik', '', '', '', '', '07883500001', 'KK 48A street , Hse 34', '', '::1'),
(51, 'Kalu', '', '', '', '', '0785343276', 'Kicukiro - Kagarama', '', '::1'),
(52, 'Hector', '', '', '', '', '0788987654', 'Kacyiru-Gasabo', '', '::1'),
(53, 'Gaby', '', '', '', '', '1234567890', 'KK 48A street , Hse 34', '', '::1'),
(54, 'kiki', '', '', '', '', '078800045', 'KK 48A street , Hse 34', '', '::1'),
(55, 'keke', '', '', '', '', '0987653123', 'Kbgabaga', '', '::1'),
(56, 'Ian', '', '', '', '', '9857892653', 'KK 48A street , Hse 34', '', '::1'),
(57, 'yale', '', '', '', '', '9876123456', 'KK 48A street , Hse 34', '', '::1'),
(58, 'Yaki', '', '', '', '', '182938004', 'Kbgabaga', '', '::1'),
(59, 'Yaki', '', '', '', '', '8394202747', 'KK 48A street , Hse 34', '', '::1'),
(60, 'Yaki', '', '', '', '', '0-89875434576', 'KK 48A street , Hse 34', '', '::1'),
(61, 'Yaki', '', '', '', '', '9857892653', 'KK 48A street , Hse 34', '', '::1'),
(62, 'yale', '', '', '', '', '9873468', 'Gasabo/Kibagabaga', '', '192.168.0.2'),
(63, 'yapi', '', '', '', '', '5867134', 'kacyiru', '', '192.168.0.1'),
(64, 'Jalos', '', '', '', '', '1298633786724', 'KK 48A street , Hse 34', '', '::1'),
(65, 'Jalos', '', '', '', '', '097t17178-81894', 'KK 48A street , Hse 34', '', '::1'),
(66, 'Karori', '', '', '', '', '12345', 'kibgbg', '', '192.168.0.1'),
(67, 'Helve Ganza', '', '', '', '', '0788986544', 'Kicukiro - Niboye', '', '::1'),
(68, 'Kalisa', '', '', '', '', '02222222222222', 'Kayonza', '', '::1'),
(69, 'Ntare', '', '', '', '', '078857410', 'Kbgabaga', '', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `due_amount` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `cust_id`, `due_amount`, `invoice_no`, `Qty`, `size`, `order_date`, `order_status`) VALUES
(77, 19, 14000, 308355634, 2, 'XL', '2020-11-01 22:00:00', 'Pending'),
(78, 10, 15000, 950566408, 1, 'L', '2020-11-06 11:49:59', 'Complete'),
(79, 19, 75000, 708396147, 1, 'US-34', '2020-11-02 07:58:12', 'Pending'),
(80, 10, 7000, 703328846, 1, 'M', '2020-11-06 11:52:36', 'Complete'),
(81, 19, 11000, 519263846, 1, 'FREE', '2020-11-03 07:33:07', 'Pending'),
(82, 10, 15000, 1309038669, 1, 'US-36', '2020-11-03 07:35:36', 'Pending'),
(83, 10, 15000, 1808492146, 1, 'FREE', '2020-11-04 09:27:40', 'Pending'),
(84, 19, 15000, 316286917, 1, 'FREE', '2020-11-06 10:05:02', 'Pending'),
(85, 19, 15000, 159509836, 1, 'L', '2020-11-10 09:28:52', 'Pending'),
(86, 14, 30000, 1671328861, 2, 'FREE', '2020-11-10 10:03:27', 'Pending'),
(87, 19, 133000, 127699113, 1, 'FREE', '2020-11-10 10:05:57', 'Pending'),
(88, 19, 133000, 480956358, 1, 'FREE', '2020-11-10 10:13:48', 'Pending'),
(89, 19, 133000, 760898955, 1, 'FREE', '2020-11-10 11:16:42', 'Pending'),
(90, 19, 75000, 646224305, 1, 'FREE', '2020-11-10 11:19:33', 'Pending'),
(91, 0, 15000, 1030710217, 1, 'M', '2020-11-10 11:24:22', 'Pending'),
(92, 14, 15000, 6204613, 1, 'FREE', '2020-11-10 11:31:12', 'Pending'),
(93, 14, 133000, 726109819, 1, 'FREE', '2020-11-10 11:33:32', 'Pending'),
(94, 19, 11000, 382960582, 1, 'FREE', '2020-11-10 11:42:49', 'Pending'),
(95, 6, 193000, 1348819700, 1, 'FREE', '2020-11-10 12:11:43', 'Pending'),
(96, 19, 15000, 145690498, 1, 'L', '2020-11-10 12:42:23', 'Pending'),
(97, 14, 75000, 1383985538, 1, 'FREE', '2020-11-10 12:44:59', 'Pending'),
(98, 16, 15000, 806705659, 1, 'L', '2020-11-10 12:46:59', 'Pending'),
(99, 63, 10000, 787936702, 1, 'S', '2020-11-10 12:49:21', 'Pending'),
(100, 6, 15000, 1936657320, 1, 'FREE', '2020-11-10 13:15:59', 'Pending'),
(101, 63, 193000, 581160691, 1, 'FREE', '2020-11-10 13:33:03', 'Pending'),
(102, 6, 33000, 1991680413, 3, 'FREE', '2020-11-13 09:11:06', 'Pending'),
(103, 14, 15000, 1161094495, 1, 'US-32', '2020-11-17 09:02:26', 'Pending'),
(104, 14, 15000, 1348108148, 1, 'FREE', '2020-11-17 09:07:45', 'Pending'),
(105, 6, 15000, 1070666731, 1, 'M', '2020-11-17 09:11:25', 'Pending'),
(106, 6, 15000, 1481046170, 1, 'FREE', '2020-11-24 14:08:51', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_address` varchar(500) NOT NULL,
  `manufacturer_account` text NOT NULL,
  `manufacturer_TIN` text NOT NULL,
  `manufacturer_contact` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL,
  `manufacturer_ip` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_address`, `manufacturer_account`, `manufacturer_TIN`, `manufacturer_contact`, `manufacturer_top`, `manufacturer_image`, `manufacturer_ip`) VALUES
(13, 'Online Shop', '', '0010-0021240-01-51', '01-000021-51', '0788358373', 'yes', 'Audi5.jpg', 0),
(14, 'Aline Shop', '', '0010-0021240', '01-000021-51', '0788574109', 'no', 'shoes.jpg', 0),
(21, 'Ian Shop', '', '', '', '0788212223', 'no', 'audi.jpg', 0),
(25, 'X-Shop', '', '', '', '0788837315', 'no', 'IMG_20200216_172225.jpg', 0),
(26, 'Y-Shop', 'KBC 3rd Floor, C34', '010-0021240-01-51', 'RRA0011-12345', '0788212224', 'no', 'images (4).jpg', 0),
(27, 'elite automation system', 'kigali', '', '', '0782178972', 'yes', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mes_id` int(100) NOT NULL,
  `client_name` text NOT NULL,
  `client_mail` text NOT NULL,
  `mes_subject` text NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mes_id`, `client_name`, `client_mail`, `mes_subject`, `message`) VALUES
(16, 'KK', 'kk@gmail.com', 'Thanks', 'Thanks!!!!!'),
(17, 'Kalisa Alfred', 'kalisa@yahoo.fr', 'Great Job', 'Grateful for your great work '),
(18, 'Alfred', 'alfred@gmail.com', 'Claim', 'Hi Sezam Team,\r\n\r\nKindly check why my package is taking too long to be delivered\r\n\r\nThanks,\r\nBR,\r\nA. '),
(19, 'Alfred', 'alfred@gmail.com', 'Thanks', 'Package received tnx for your prompt support'),
(20, 'Zoro', 'zoro@gmail.com', 'System unavailable', 'Hello Sezam Team,\r\n\r\nYour System is super slow plz look into this and support; Your System is super slow plz look into this and support;Your System is super slow plz look into this and support;Your System is super slow plz look into this and support;Your System is super slow plz look into this and support;Your System is super slow plz look into this and support;Your System is super slow plz look into this and support;Your System is super slow plz look into this and support;Your System is super s');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(2, 1645736240, 65001, 'MoneyGram', 4321, 654, '01/03/2019'),
(4, 1305043533, 70000, 'Visa', 657, 234, '05/04/2019'),
(5, 1461364509, 123000, 'Visa', 97656, 12536475, '08/04/2019'),
(6, 1867200519, 82000, 'MoneyGram', 1334, 654, '08/04/2019'),
(7, 210434634, 41000, 'Visa', 12345, 12342, '19/04/2019'),
(8, 1130798657, 129000, 'Visa', 9876, 12345, '25/04/2019'),
(9, 857583371, 81000, 'Visa', 1234, 5432, '25/04/2019'),
(10, 1787657764, 43000, 'Visa', 123456, 54321, '25/04/2019'),
(11, 784530425, 129000, 'Mastercard', 3214, 12345, '16/05/2019'),
(12, 0, 43000, 'Western Union', 342, 4567, '02-02-2020'),
(13, 1234, 43000, 'MoneyGram', 234, 0, '2020-02-07'),
(14, 0, 43000, 'Visa', 0, 0, '2020-07-28'),
(15, 1234, 6800, 'Visa', 4321, 2341, '10-9-2020'),
(16, 1234, 6800, 'Visa', 4321, 2341, '10-9-2020'),
(17, 12345, 150000, 'MoneyGram', 43214, 23417, '10-9-2020'),
(18, 744852835, 20000, 'Visa', 432143, 0, '10-9-2020'),
(19, 23574388, 45000, 'Visa', 432143, 23417, '10-9-2020'),
(20, 1376524838, 15000, 'MoneyGram', 123432, 0, '15/10/2020'),
(21, 287474997, 65000000, 'Visa', 0, 0, '15/10/2020'),
(22, 703328846, 15000, 'On Delivery', 0, 0, '6/11/2020'),
(23, 703328846, 7000, 'On Delivery', 0, 0, '5/11/2020');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `Prod_id` text NOT NULL,
  `Qty` int(11) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `cust_id`, `invoice_no`, `Prod_id`, `Qty`, `size`, `order_status`) VALUES
(98, 19, 308355634, ' 86', 2, 'XL', 'Pending'),
(99, 10, 950566408, ' 85', 1, 'L', 'Pending'),
(100, 19, 708396147, ' 57', 1, 'US-34', 'Pending'),
(101, 10, 703328846, ' 86', 1, 'M', 'Pending'),
(102, 19, 519263846, ' 74', 1, 'FREE', 'Pending'),
(103, 10, 1309038669, ' 75', 1, 'US-36', 'Pending'),
(104, 10, 1808492146, ' 92', 1, 'FREE', 'Pending'),
(105, 19, 316286917, ' 92', 1, 'FREE', 'Pending'),
(106, 19, 159509836, ' 93', 1, 'L', 'Pending'),
(107, 14, 1671328861, ' 92', 2, 'FREE', 'Pending'),
(108, 19, 127699113, ' 88', 1, 'FREE', 'Pending'),
(109, 19, 480956358, ' 91', 1, 'FREE', 'Pending'),
(110, 19, 760898955, ' 91', 1, 'FREE', 'Pending'),
(111, 19, 646224305, ' 89', 1, 'FREE', 'Pending'),
(112, 0, 1030710217, ' 93', 1, 'M', 'Pending'),
(113, 14, 6204613, ' 92', 1, 'FREE', 'Pending'),
(114, 14, 726109819, ' 91', 1, 'FREE', 'Pending'),
(115, 19, 382960582, ' 74', 1, 'FREE', 'Pending'),
(116, 6, 1348819700, ' 90', 1, 'FREE', 'Pending'),
(117, 19, 145690498, ' 93', 1, 'L', 'Pending'),
(118, 14, 1383985538, ' 57', 1, 'FREE', 'Pending'),
(119, 16, 806705659, ' 93', 1, 'L', 'Pending'),
(120, 63, 787936702, ' 76', 1, 'S', 'Pending'),
(121, 6, 1936657320, ' 92', 1, 'FREE', 'Pending'),
(122, 63, 581160691, ' 90', 1, 'FREE', 'Pending'),
(123, 6, 1991680413, ' 74', 3, 'FREE', 'Pending'),
(124, 14, 1161094495, ' 75', 1, 'US-32', 'Pending'),
(125, 14, 1348108148, ' 92', 1, 'FREE', 'Pending'),
(126, 6, 1070666731, ' 93', 1, 'M', 'Pending'),
(127, 6, 1481046170, ' 92', 1, 'FREE', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Prod_id` int(10) NOT NULL,
  `Prod_cat_id` int(10) NOT NULL,
  `Cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Prod_Title` text NOT NULL,
  `Prod_url` text NOT NULL,
  `Prod_img1` text NOT NULL,
  `Prod_img2` text NOT NULL,
  `Prod_img3` text NOT NULL,
  `Prod_price` int(10) NOT NULL,
  `MOQ` int(100) NOT NULL,
  `shipping_price` int(100) NOT NULL,
  `seller_contact` text NOT NULL,
  `Prod_desc` text NOT NULL,
  `Prod_features` text NOT NULL,
  `Prod_video` text NOT NULL,
  `prod_label` text NOT NULL,
  `prod_sale` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Prod_id`, `Prod_cat_id`, `Cat_id`, `manufacturer_id`, `date`, `Prod_Title`, `Prod_url`, `Prod_img1`, `Prod_img2`, `Prod_img3`, `Prod_price`, `MOQ`, `shipping_price`, `seller_contact`, `Prod_desc`, `Prod_features`, `Prod_video`, `prod_label`, `prod_sale`) VALUES
(51, 154, 45, 14, '2020-10-22 15:14:30', 'Jogging ', 'jogging', 'kids.jpg', 'kids.jpg', 'kids.jpg', 20000, 0, 0, '0788123456', '<p>the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best the best</p>', '<p>niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere niyambere</p>', '\r\n                                     \r\n                                     <iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/nrEqMOBOc3E\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n                                \r\n                                ', '', 0),
(57, 170, 46, 13, '2020-10-22 15:15:16', 'Computer Bag', 'com-bag', 'tgre4.jpg', 'tgre4.jpg', 'tgre4.jpg', 75000, 40, 0, '0788123452', '<p>Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza</p>', '<p>Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza Nigitangaza</p>', '\r\n                                     \r\n                                     \r\n                                \r\n                                ', '', 71000),
(73, 154, 45, 21, '2020-10-22 15:20:53', 'Hand-Bag', 'hand-bag', 'hand-bag.jpg', 'hand-bag.jpg', 'hand-bag.jpg', 20000, 10, 0, '0788380005', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> : New with tag</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> : Gucci</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :N/A</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :2020</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> : Hand Bag</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> : Pure Leather</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> : Black</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> : KCT</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> : On your doorstep</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> : 2 hours</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> : Accepted</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> : MoMo, Visa , M/C , on delivery</p>', '\r\n                                     \r\n                                ', 'new', 0),
(74, 0, 46, 13, '2020-10-22 15:21:21', 'IPhone X', 'i-phonex', 'tgre5.jpg', 'tgre5.jpg', 'tgre5.jpg', 150000, 1, 0, '0788123456', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> : New with tag</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :Charger , head set</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> : KBC</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :On doostep</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>', '\r\n                                     \r\n                                ', 'discount', 11000),
(75, 155, 45, 13, '2020-10-29 10:02:00', 'Women shoes high heels ', '01', 'shoes.jpg', 'shoes.jpg', 'shoes.jpg', 15000, 1, 0, '0788574109', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> :Good condition</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>', '\r\n                                     \r\n                                     \r\n                                     \r\n                                     \r\n                                     \r\n                                     \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                ', '', 10000),
(76, 156, 45, 14, '2020-10-22 15:22:45', 'T-Shirt', 'Shirt', 'men.jpg', 'men.jpg', 'men.jpg', 20000, 100, 0, '0788574109', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> :</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>', '\r\n                                     \r\n                                     \r\n                                \r\n                                ', 'discount', 10000),
(77, 220, 52, 13, '2020-10-27 11:10:52', 'Perfume', '-', 'flora.jpg', '', '', 55000, 0, 1000, '011415589', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> : New</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> : Gucci</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Seller Contact</strong> :</p>', '', 'new', 52000),
(85, 164, 45, 14, '2020-10-29 11:09:22', 'Kids Jacket', 'kids-jacket', 'IMG_20200216_172218.jpg', 'IMG_20200216_171532.jpg', 'IMG_20200216_171454.jpg', 15000, 1, 0, '0788574109', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> :</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Seller Contact</strong> :</p>', '', '', 0),
(87, 170, 55, 14, '2020-11-03 08:28:56', 'PC Bag', 'pc-bag', 'IMG_20201103_102040.jpg', 'IMG_20201103_102024.jpg', 'IMG_20201103_102103.jpg', 12300, 1, 0, '0788574109', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> : New</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Size</strong> : Free</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> : 0788574109</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> : KBC</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> : KGL</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> : 3 hrs max</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Seller Contact</strong> :</p>', '', 'new', 0),
(88, 171, 46, 14, '2020-11-04 09:03:03', 'IPhone x', 'iphone-x', 'phone.jpg', 'phone.jpg', 'phone.jpg', 133000, 1, 0, '0788574109', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> :</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Seller Contact</strong> :</p>', '', 'new', 0),
(89, 163, 55, 14, '2020-11-04 09:05:58', 'Watch Seiko', 'watch', 'watch.jpg', 'watch.jpg', 'watch.jpg', 75000, 12, 0, '0788574109', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> :</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Seller Contact</strong> :</p>', '', 'new', 0),
(90, 0, 46, 14, '2020-11-04 12:34:34', 'HP Computer', 'hp-computer', 'computer.jpg', 'computer.jpg', 'computer.jpg', 200000, 1, 0, '0788574109', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> :</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Seller Contact</strong> :</p>', '\r\n                                     \r\n                                ', 'discount', 193000),
(91, 173, 46, 14, '2020-11-04 09:13:22', 'Camera Photo', 'camera-photo', 'camera.jpg', 'camera.jpg', 'camera.jpg', 133000, 1, 0, '0788574109', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> :</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Seller Contact</strong> :</p>', '', 'new', 0),
(92, 201, 55, 14, '2020-11-04 09:17:41', 'Sac a dos', 'sac-a-dos', 'tgre8.jpg', 'tgre8.jpg', 'tgre8.jpg', 15000, 0, 0, '0788574109', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> :</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Seller Contact</strong> :</p>', '', '', 0),
(93, 164, 45, 14, '2020-11-07 13:38:21', 'Girls Ocasional Dress', 'ocasional', 'IMG_20200221_082328.jpg', 'IMG_20200221_082324.jpg', 'IMG_20200221_082312.jpg', 15000, 0, 0, '0788574109', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Condition</strong> :</p>\r\n<!-- <td width=\"50.0%\"></td> -->\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Bundled Items</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Storage</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Brand</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Processor</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Screen Size</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Camera Resolution</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Model</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Operating System</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Contract</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Year Manufactured</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Style</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Type</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Features</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Material</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>RAM</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Color</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>\"S\" Mark</strong> :</p>', '<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships From</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Ships To</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Delivery Time</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Returns</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Payments Methods</strong> :</p>\r\n<p class=\"attrLabels\" style=\"color: black; font-weight: normal; font-style: normal; font-size: 12px;\"><strong>Seller Contact</strong> :</p>', '', 'new', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `Prod_cat_id` int(10) NOT NULL,
  `Prod_Cat_Title` text NOT NULL,
  `Prod_Cat_Top` text NOT NULL,
  `Prod_Cat_Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_categories`
--

INSERT INTO `products_categories` (`Prod_cat_id`, `Prod_Cat_Title`, `Prod_Cat_Top`, `Prod_Cat_Image`) VALUES
(147, 'Powersport Vehicles', 'yes', ''),
(148, 'Automotive Tool & Supplies', 'yes', ''),
(149, 'Auto Parts & Accessories', 'yes', ''),
(150, 'Boats', 'yes', ''),
(151, 'Other Vehicles & Trailers', 'yes', ''),
(152, 'Businesses For Rent', 'yes', ''),
(153, 'Businesses For Sale', 'yes', ''),
(154, 'Women Clothing', 'yes', ''),
(155, 'Women Accessories', 'yes', ''),
(156, 'Men Clothing', 'yes', ''),
(157, 'Men Accessories', 'yes', ''),
(158, 'Men Shoes', 'yes', ''),
(159, 'Women Shoes', 'yes', ''),
(160, 'Kids Clothing, Shoes & Accessories', 'yes', ''),
(161, 'Girls Shoes', 'yes', ''),
(162, 'Jewelry', 'yes', ''),
(163, 'Watches, Parts & Accessories', 'yes', ''),
(164, 'Kids Clothing, Shoes & Accessories', 'yes', ''),
(165, 'Costume, Occasion & Specialized Clothing, Shoes & Accessories', 'yes', ''),
(166, 'Musical Instruments & Gear', 'yes', ''),
(167, 'DVD & Movies', 'yes', ''),
(168, 'Books', 'yes', ''),
(169, 'Music', 'yes', ''),
(170, 'Computers, Tablets & Network Hardware', 'yes', ''),
(171, 'Cell Phones, Smart Watches & Accessories', 'yes', ''),
(172, 'Video Games & Consoles', 'yes', ''),
(173, 'Cameras & Photo', 'yes', ''),
(174, 'TV, Video & Home Audio Electronics', 'yes', ''),
(175, 'Portable Audio & Headphones', 'yes', ''),
(176, 'Vehicle Electronics & GPS', 'yes', ''),
(177, 'Multipurpose Batteries & Power', 'yes', ''),
(178, 'Surveillance & Smart Home Electronics', 'yes', ''),
(179, 'Vintage Electronics', 'yes', ''),
(180, 'Radio Communication Electronics', 'yes', ''),
(181, 'Virtual Reality Headsets, Parts & Accessories', 'yes', ''),
(182, 'Collectibles', 'yes', ''),
(183, 'Sports Memorabilia, Fan Shop & Sports Cards', 'yes', ''),
(184, 'Art & Craft Supplies', 'yes', ''),
(185, 'Pottery & Glass', 'yes', ''),
(186, 'Art', 'yes', ''),
(187, 'Yard, Garden & Outdoor Living Items', 'yes', ''),
(188, 'Kitchen, Dining & Bar Supplies', 'yes', ''),
(189, 'Tools & Workshop Equipment', 'yes', ''),
(190, 'Home Decor', 'yes', ''),
(191, 'Home & Garden Furniture ', 'yes', ''),
(192, 'Food & Beverages', 'yes', ''),
(193, 'Major Appliances, Parts & Accessories', 'yes', ''),
(194, 'Bedding', 'yes', ''),
(195, 'Bathroom Supplies & Accessories', 'yes', ''),
(196, 'Rugs & Carpets', 'yes', ''),
(197, 'Window Treatments & Hardware', 'yes', ''),
(198, 'Wedding Supplies', 'yes', ''),
(199, 'Cycling Equipment', 'yes', ''),
(200, 'Golf Equipment', 'yes', ''),
(201, 'Fitness, Running & Yoga Equipment', 'yes', ''),
(202, 'Water Sports', 'yes', ''),
(203, 'Team Sports', 'yes', ''),
(204, 'Indoor Games', 'yes', ''),
(205, 'Tennis & Racquet Sports', 'yes', ''),
(206, 'Games', 'yes', ''),
(207, 'Vehicle, Gun Toys', 'yes', ''),
(208, 'Healthcare, Lab & Dental', 'yes', ''),
(209, 'Electrical Equipment & Supplies', 'yes', ''),
(210, 'Test, Measurement & Inspection Equipment', 'yes', ''),
(211, 'Office Equipment & Supplies', 'yes', ''),
(212, 'Restaurant & Food Service', 'yes', ''),
(213, 'Light Industrial Equipment & Tools', 'yes', ''),
(214, 'Printing & Graphic Arts', 'yes', ''),
(215, 'Building Materials & Supplies', 'yes', ''),
(216, 'Agriculture & Forestry Equipment', 'yes', ''),
(217, 'Vitamins & Dietary Supplements', 'yes', ''),
(218, 'Skin Care Products', 'yes', ''),
(219, 'Hair Care & Styling Products ', 'yes', ''),
(220, 'Fragrances', 'yes', ''),
(221, 'Makeup Products', 'yes', ''),
(222, 'Health Care Products', 'yes', ''),
(223, 'Medical & Mobility', 'yes', ''),
(224, 'Shaving & Hair Removal Products', 'yes', ''),
(225, 'Manicure, Pedicure & Nail Care Products ', 'yes', ''),
(226, 'Natural & Alternatives Remedies', 'yes', ''),
(227, 'Vision Care Products', 'yes', ''),
(228, 'Oral Care Products', 'yes', ''),
(229, 'Bath & Body Products', 'yes', ''),
(230, 'Massaging Equipment & Supplies', 'yes', ''),
(231, 'Tattoos & Body Art Products', 'yes', ''),
(232, 'Cars for Sale', 'yes', 'audi.jpg'),
(233, 'Cars for Rent', 'yes', 'fort2.jpg'),
(234, 'House For Sale', 'yes', ''),
(235, 'House For Rent', 'yes', ''),
(236, 'Stores For Rent', 'yes', ''),
(237, 'Plots For Sale', 'yes', ''),
(238, 'Motorcycles For Sale', 'yes', ''),
(239, 'Motorcycles For Rent', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(100) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `seller_email` varchar(255) NOT NULL,
  `seller_pass` varchar(255) NOT NULL,
  `seller_country` text NOT NULL,
  `seller_city` text NOT NULL,
  `seller_contact` varchar(255) NOT NULL,
  `seller_address` text NOT NULL,
  `seller_image` text NOT NULL,
  `seller_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`seller_id`, `seller_name`, `seller_email`, `seller_pass`, `seller_country`, `seller_city`, `seller_contact`, `seller_address`, `seller_image`, `seller_ip`) VALUES
(17, 'Test', 'test@sezam.com', '123', 'Rda', 'KGL', '0788123452', 'Special economic zone', 'photo2.jpg', '192.168.153.15'),
(22, 'Seller1', 'seller1@uza.com', '123', 'Rda', 'KGL', '0788380005', 'KCT, 2nd Floor , Door # 32', 'e-comm-mob-logo1.PNG', '192.168.153.15'),
(23, 'NYINAWANKUSI ALINE', 'alintare01@gmail.com', 'Alintare123', 'Rwanda', 'Kigali', '0788574109', 'Gasabo/Kibagabaga', 'merc5.jpg', '::1'),
(26, 'Papa Nyasha', 'papanyasha@yahoo.com', 'papanyasha', '', '', '011415589', 'Minagri', '', '192.168.153.18');

-- --------------------------------------------------------

--
-- Table structure for table `seller_orders`
--

CREATE TABLE `seller_orders` (
  `order_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `Prod_id` int(100) NOT NULL,
  `due_amount` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `Qty` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(11, 'Terms & Conditions', 'Terms & Conditions', '<p>Please read our TERMS AND CONDITIONS carefully !</p>\r\n<p>1.&nbsp;&nbsp;&nbsp; SEZAM reserves the right to update the Terms and Conditions (T&amp;C) at any time without notice to you.</p>\r\n<p>2.&nbsp;&nbsp;&nbsp; By accessing or using the Site, you hereby agree to accept the T&amp;C set forth in this Agreement as an User. You shall be bound by the T&amp;C of this Agreement with respect to your access or use of this Site and any further upgrade, modification, addition or change to this Site. If you do not accept all of the T&amp;C of this Agreement, please do not use this Site.</p>\r\n<p>3.&nbsp;&nbsp;&nbsp; No User shall attempt to gain unauthorized access to any Services, other accounts, computer systems or networks connected to any SEZAM server or to any of the Services, through hacking, password mining or any other means.</p>\r\n<p>4.&nbsp;&nbsp;&nbsp; The features and services on the SEZAM site is provided on the \"as is\" and \"as available\" basis, and we hereby expressly disclaims any and all warranty except warranty expressly stated herein, including but not limited to any warranties of condition, quality, durability, performance, accuracy, reliability, merchantability or fitness for a particular purpose. All such warranties, representations, conditions, undertakings and terms are hereby excluded.</p>\r\n<p>5.&nbsp;&nbsp;&nbsp; SEZAM has no obligation to monitor the Communication Services (The Services may contain e-mail services, newsletter, tell your friend and/or other message or communication facilities designed to enable you to communicate with us or others). However, SEZAM reserves the right to review materials posted to the Communication Services and to remove any materials in its sole discretion. SEZAM reserves the right to terminate your access to any or all of the Communication Services at any time, without notice, for any reason whatsoever.</p>\r\n<p>6.&nbsp;&nbsp;&nbsp; You may not copy, reproduce, recompile, decompile, disassemble, reverse-engineer, distribute, publish, display, perform, modify, upload to create derivative works from, transmit, communicate or in any other way exploit any part of the information or material obtained through the Website and/or the Website material.</p>\r\n<p>7.&nbsp;&nbsp;&nbsp; This Agreement shall be governed by the laws of the Rwandan Jurisdiction only without regard to its conflict of law provisions.</p>\r\n<p>&nbsp;</p>'),
(12, 'Limitation of Liability', 'Limitation of Liability', '<p>1.&nbsp;&nbsp;&nbsp; SEZAM makes no representations or warranty about the validity, accuracy, correctness, reliability, quality, stability, and/or other problems with the information, products and services provided except warranty expressly stated herein. We advise you to contact our sales department to get more about our warranty (if any) before you make purchase. <br /><br />2.&nbsp;&nbsp;&nbsp; SEZAM is not responsible for any delay in shipping the unit purchased/ordered. But we always help you to sort out any problem if it is under our control.<br /><br />3.&nbsp;&nbsp;&nbsp;&nbsp; Customers are solely responsible for all of the terms and conditions of the transactions conducted on, through or as a result of use of the Site, including, without limitation, terms regarding payment, returns, warranty, shipping, insurance, fees, taxes, title, licenses, fines, permits, handling, transportation and storage.<br /><br />4.&nbsp;&nbsp;&nbsp; Under no circumstances shall SEZAM be held liable for a delay or failure or disruption of the content or services delivered resulting directly or indirectly from acts of nature, forces or causes beyond its reasonable control, including without limitation, Internet failures, computer, telecommunications or any other equipment failures, electrical power failures, strikes, labor disputes, riots, insurrections, civil disturbances, shortages of labor or materials, fires, flood, storms, explosions, Acts of God, war, governmental actions, orders of domestic or foreign courts or tribunals or non-performance of third parties<br /><br />5.&nbsp;&nbsp;&nbsp; SEZAM reserved the rights of canceling any fraud/incomplete order without any prior intimation in written orverbal. <br /><br />6.&nbsp;&nbsp;&nbsp; Under no circumstances SEZAM is not liable for any refund against any purchase made except warranty expressly stated herein.</p>'),
(13, 'Products Posted at www.sezam.com', 'Products Posted at www.sezam.com', '<p>1.&nbsp;&nbsp;&nbsp; When participating in any service you may provide us with information about yourself and/or products and services listed. You grant us exclusive rights in all of this information, and all information derived or generated from it, in all existing or future media. These rights include but are not limited to the right to display your information anywhere, to search the information, and, consistent with our Privacy policy, to repackage and resell it to anyone for any reason. As used in this paragraph, information includes but is not limited to data, text, photographs, drawings, sound recordings, feedback, and any other information or data displayed or presented in connection with your listings with us.<br /><br />2.&nbsp;&nbsp;&nbsp; SEZAM reserves the right at all times to disclose any information as SEZAM deems necessary to satisfy any applicable law, regulation, legal process or governmental request, or to edit, refuse to post or to remove any information or materials, in whole or in part, in SEZAM sole discretion. See the Privacy Statement disclosures relating to the collection and use of your information. <br /><br />3.&nbsp;&nbsp;&nbsp; If the information provided by you upon sign up is false SEZAM reserves the right to terminate your account. Any rights not expressly granted herein are reserved. <br /><br /></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`adverts_id`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`Basket_id`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mes_id`) USING BTREE;

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Prod_id`);

--
-- Indexes for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`Prod_cat_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `seller_orders`
--
ALTER TABLE `seller_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `adverts_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `Basket_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mes_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Prod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `Prod_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `seller_orders`
--
ALTER TABLE `seller_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
