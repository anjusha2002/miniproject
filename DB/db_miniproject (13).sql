-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 10:32 AM
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
-- Database: `db_miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Malanad Passion Fruit', 'malanad@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `booking_status` int(11) NOT NULL DEFAULT 0,
  `shop_id` int(11) NOT NULL DEFAULT 0,
  `booking_date` varchar(200) NOT NULL,
  `booking_amount` int(11) NOT NULL DEFAULT 0,
  `payment_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `user_id`, `booking_status`, `shop_id`, `booking_date`, `booking_amount`, `payment_status`) VALUES
(15, 29, 1, 0, '2022-11-05', 720, 0),
(16, 0, 1, 10, '2022-11-05', 150, 0),
(17, 29, 1, 0, '2022-11-07', 720, 0),
(18, 29, 1, 0, '2022-11-05', 720, 0),
(19, 29, 1, 0, '2022-11-05', 720, 0),
(20, 29, 1, 0, '2022-11-05', 720, 0),
(21, 0, 1, 10, '2022-11-05', 150, 0),
(22, 0, 1, 10, '2022-11-07', 150, 0),
(23, 0, 1, 10, '2022-11-05', 150, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `cart_qty` varchar(200) NOT NULL DEFAULT '1',
  `product_id` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `booking_id`, `cart_qty`, `product_id`, `cart_status`) VALUES
(37, 15, '1', 15, 1),
(38, 16, '1', 15, 1),
(40, 18, '1', 18, 0),
(41, 19, '1', 15, 0),
(42, 20, '1', 16, 1),
(43, 21, '1', 18, 0),
(44, 22, '1', 18, 0),
(45, 23, '1', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Mango'),
(2, 'Pinapple'),
(3, 'Guava'),
(4, 'Grape'),
(5, 'Nannari'),
(6, 'Passion Fruit'),
(7, 'Stawberry');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_date` date NOT NULL DEFAULT current_timestamp(),
  `complaint_subject` varchar(500) NOT NULL,
  `complaint_details` varchar(200) NOT NULL,
  `complaint_status` int(11) NOT NULL DEFAULT 0,
  `complaint_reply` varchar(500) NOT NULL,
  `complaint_replydate` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_date`, `complaint_subject`, `complaint_details`, `complaint_status`, `complaint_reply`, `complaint_replydate`, `user_id`, `shop_id`) VALUES
(5, '2022-08-15', 'Passion Fruit', 'Not at all clean', 1, 'Sorry for the damaged product.We will send you the good one.', '2022-08-15', 0, 10),
(6, '2022-08-15', 'Mango', 'The bottle is not fully filled.', 1, 'Sorry we willckeck it out', '2022-08-15', 29, 0),
(7, '2022-11-04', 'Mango', 'not fresh', 1, 'srry for the inconvenience', '2022-11-04', 29, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(17, 'Wayanad'),
(18, 'Alappuzha'),
(19, 'Kottayam'),
(20, 'Palakkad'),
(21, 'Kannur'),
(23, 'Thiruvanathapuram'),
(24, 'Pathanamthitta'),
(25, 'Kollam'),
(26, 'Idukki'),
(27, 'Ernakulam'),
(28, 'Thrissur'),
(29, 'Malappuram'),
(30, 'Kozhikode'),
(31, 'Kasaragod');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(500) NOT NULL,
  `feedback_date` date NOT NULL DEFAULT current_timestamp(),
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_content`, `feedback_date`, `shop_id`, `user_id`) VALUES
(3, 'Good', '2022-08-20', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `place_pincode` varchar(100) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pincode`, `district_id`) VALUES
(27, 'Muvattupuzha', '686661', 27),
(28, 'Kothamangalam', '686691', 27),
(29, 'Piravom', '686664', 27),
(30, 'Chelad', '686681', 27),
(31, 'Varkala', '695141', 23),
(32, 'Attingal', '695101', 23),
(33, 'Karunagappally', '690518', 25),
(34, 'Neendakara', '691582', 25),
(35, 'Cherthala', '688524', 18),
(36, 'Kuttanad', '679533', 20),
(39, 'Gavi', '685533', 24),
(40, 'Ranny', '689672', 24),
(41, 'Ettumanur', '686631', 19),
(42, 'Gandhi Nagar', '686008', 19),
(43, 'Chilavu', '685588', 26),
(44, 'Kochara', '685551', 26),
(45, 'Iringalakuda', '680121', 28),
(46, 'Guruvayoor', '680101', 28),
(47, 'Ariyur', '678583', 20),
(48, 'Chirayil', '673638', 29),
(49, 'Downhill', '676519', 29),
(50, 'Ambalapuzha', '688561', 18),
(51, 'Akkal', '673513', 30),
(52, 'Alli', '673602', 30),
(53, 'Kalpetta', '673121', 17),
(54, 'Lakkidi', '673576', 17),
(55, 'Alacherry', '670650', 21),
(56, 'Alavil', '670008', 21),
(57, 'Badur', '671321', 31),
(58, 'Charla', '671323', 31),
(59, '', '', 0),
(60, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_details` varchar(150) NOT NULL,
  `product_mrp` int(11) NOT NULL,
  `product_wholesaleprice` int(11) NOT NULL,
  `product_photo` varchar(150) NOT NULL,
  `category_id` int(11) NOT NULL,
  `quantity_id` int(11) NOT NULL,
  `product_stock` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_details`, `product_mrp`, `product_wholesaleprice`, `product_photo`, `category_id`, `quantity_id`, `product_stock`) VALUES
(11, 'PassionFruit1ltr', 'Best before 2 months from the manufacture.Keep in cool and dry place.Keep away from sunlight.Shake well before\r\nuse.Tastes best when chilled.', 270, 260, '71-tqFzyDCL._SL1500_.jpg', 6, 8, 52),
(12, 'Mango5ltr', 'ExpDate:7/10/2023', 720, 710, 'images (3).jpg', 1, 10, 40),
(13, 'Mango2ltr', 'ExpDate:5/08/2024', 220, 210, 'images (3).jpg', 1, 9, 40),
(14, 'Pinapple5ltr', 'Exp Date:28/10/2023', 720, 710, 'image-2.jpeg', 2, 10, 50),
(15, 'Grape5ltr', 'Exp Date:29/10/2024', 720, 710, 'download (1).jpg', 4, 10, 34),
(16, 'Guava5ltr', 'Exp Date:1/11/2023', 720, 710, '750-1-pink-guava-malanad-original-imagaecuzjdkaymq.webp', 3, 10, 47),
(17, 'PassionFruit750ml', 'Best before 2 months from the manufacture.Keep in cool and dry place.Keep away from sunlight.Shake well before\r\nuse.Tastes best when chilled.', 215, 200, '71-tqFzyDCL._SL1500_.jpg', 6, 7, 50),
(18, 'PassionFruit500ml', 'Best before 2 months from the manufacture.Keep in cool and dry place.Keep away from sunlight.Shake well before\r\nuse.Tastes best when chilled.', 160, 150, '71-tqFzyDCL._SL1500_.jpg', 6, 6, 39),
(19, 'PassionFruit5ltr', 'Best before 2 months from the manufacture.Keep in cool and dry place.Keep away from sunlight.Shake well before\r\nuse.Tastes best when chilled.', 1300, 1290, '71-tqFzyDCL._SL1500_.jpg', 6, 10, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quantity`
--

CREATE TABLE `tbl_quantity` (
  `quantity_id` int(11) NOT NULL,
  `quantity_content` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quantity`
--

INSERT INTO `tbl_quantity` (`quantity_id`, `quantity_content`) VALUES
(6, '500ml'),
(7, '750ml'),
(8, '1ltr'),
(9, '2ltr'),
(10, '5ltr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_review` varchar(100) NOT NULL,
  `review_datetime` datetime NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `user_name`, `user_rating`, `user_review`, `review_datetime`, `product_id`) VALUES
(1, 'dark', 3, 'xerfgthj', '2022-11-06 09:41:24', 15),
(2, 'dark', 3, 'xerfgthj', '2022-11-06 09:41:33', 15),
(3, 'cftgyhuj', 5, 'tcyguhoij', '2022-11-06 09:41:53', 15),
(4, 'Regency', 3, 'good', '2022-11-06 10:16:07', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `shop_address` varchar(50) NOT NULL,
  `shop_email` varchar(50) NOT NULL,
  `shop_contact` varchar(50) NOT NULL,
  `shop_password` varchar(50) NOT NULL,
  `shop_photo` varchar(200) NOT NULL,
  `shop_proof` varchar(200) NOT NULL,
  `shop_status` int(11) NOT NULL,
  `place_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`shop_id`, `shop_name`, `shop_address`, `shop_email`, `shop_contact`, `shop_password`, `shop_photo`, `shop_proof`, `shop_status`, `place_id`) VALUES
(10, 'Regency Bake House', 'A M Road,kothamangalam P OErnakulam,Kerala 686691', 'anjushanarayanan2002@gmail.com', '7593094608', 'Anjusha_@1', 'edakkattukudiyil-regency-bake-house-ernakulam-bo0xzwr66w.webp', 'regency-bake-house-muvattupuzha-map.jpg', 1, 28),
(12, 'Kalavara FoodCourt', 'Keerampara,Kerala 686681,India', 'kalavara@gmail.com', 'Not  Available', 'kalavara@1', 'download (2).jpg', 'vt.png', 2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shopcart`
--

CREATE TABLE `tbl_shopcart` (
  `shopcart_id` int(11) NOT NULL,
  `shopcart_date` date NOT NULL DEFAULT current_timestamp(),
  `shopcart_quantity` varchar(200) NOT NULL,
  `shopcart_total` int(11) NOT NULL,
  `shopcart_status` int(11) NOT NULL DEFAULT 0,
  `shop_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shopcart`
--

INSERT INTO `tbl_shopcart` (`shopcart_id`, `shopcart_date`, `shopcart_quantity`, `shopcart_total`, `shopcart_status`, `shop_id`, `product_id`) VALUES
(8, '2022-08-28', '10', 7100, 1, 10, 12),
(9, '2022-08-28', '5', 1050, 1, 10, 13),
(10, '2022-08-28', '5', 3550, 1, 10, 14),
(11, '2022-09-13', '10', 2100, 1, 10, 13),
(12, '2022-09-13', '10', 7100, 1, 10, 12),
(13, '2022-09-13', '10', 12900, 1, 10, 19),
(14, '2022-09-13', '5', 3550, 0, 10, 14),
(15, '2022-09-13', '5', 1000, 0, 10, 17),
(16, '2022-09-13', '5', 1050, 0, 10, 13),
(17, '2022-10-08', '5', 1300, 0, 10, 11),
(18, '2022-10-08', '5', 1050, 0, 10, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `stock_quantity` varchar(200) NOT NULL,
  `stock_date` date NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `stock_quantity`, `stock_date`, `product_id`) VALUES
(58, '23', '2022-08-24', 18),
(59, '10', '2022-08-25', 17),
(60, '5', '2022-09-01', 19),
(61, '12', '2022-11-30', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_address` varchar(1000) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 0,
  `place_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_contact`, `user_email`, `user_username`, `user_password`, `user_address`, `user_status`, `place_id`, `photo`) VALUES
(27, 'Anjithadevi', 'female', '7902230278', 'anjithadevikn@gmail.com', 'anjitha', 'kallingaparambil@123', 'Kallingaparambil(h) chelad p.o karingazha', 1, 28, '8457565374641179af39c521cb152a8e--people-drawings-pen-drawings.jpg'),
(28, 'Anjusha Narayanan', 'female', '7593094608', 'anjushanarayanan2002@gmail.com', 'anjusha', 'anjusha@1', 'kallingaparambil(h) chelad p.o karingazha', 2, 28, 'd2086a1912c5ec445e6a3ff1251c983d.jpg'),
(29, 'Ajay Saju', 'male', '8075508529', 'anjushanarayanan2002@gmail.com', 'ajay', 'ajay21', 'kottakkara', 1, 28, 'download (3).jpg'),
(30, 'Narayanan', 'male', '9946990641', 'kallingaparambil.narayanan@gmail.com', 'narayanan', 'kunjumon@13', 'kallingaparambil(h) chelad p o karingazha', 1, 28, 'tam_sep10_drawingboard2E.jpg.optimal.jpg'),
(32, 'Padma Renjith', 'female', '3209276181', 'padma@gmail.com', 'padma', 'padma@1', 'putnakkudi(h) chelad p.o keerampara', 1, 35, 'images (1).jpg'),
(33, 'NoorFathima', 'female', '9895877151', 'noor@gmail.com', 'noor', 'noor@1', 'plapparambil(h) kandamkulathil p.o kuttanad', 0, 36, 'images.jpg'),
(34, 'padma', 'female', '6657565623', 'anjushanarayanan2002@gmail.com', 'padma01', 'padma_@1', 'hgvvhjbv', 0, 53, '1c45f7c3b0936463e1d6b00bade69507.jpg'),
(35, 'padma', 'female', '6657565623', 'anjushanarayanan2002@gmail.com', 'padma01', 'padma_@1', 'jhvhg', 0, 53, '1c45f7c3b0936463e1d6b00bade69507.jpg'),
(36, 'pad', 'female', '6657565623', 'anjushanarayanan2002@gmail.com', 'padma01', 'padma_@1', 'jknvjdnvkj', 0, 53, '1c45f7c3b0936463e1d6b00bade69507.jpg'),
(37, 'padma', 'female', '6657565623', 'anjushanarayanan2002@gmail.com', 'padma01', 'padma_@1', 'dbdfghtfr', 0, 53, '7-map.JPG'),
(38, 'padma', 'female', '6657565623', 'anjushanarayanan2002@gmail.com', 'padma01', 'padma_21', 'thbrth', 0, 53, '1.jpg'),
(39, 'Anjusha', 'female', '7593094413', 'anjushanarayanan2002@gmail.com', 'anjusha01', 'Anjusha_@1', 'ehedhr', 0, 28, '5c2b48a67690d23bc3ea40a9e869b971.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usercart`
--

CREATE TABLE `tbl_usercart` (
  `usercart_id` int(11) NOT NULL,
  `usercart_date` date NOT NULL DEFAULT current_timestamp(),
  `usercart_quantity` int(11) NOT NULL,
  `usercart_total` int(11) NOT NULL,
  `usercart_status` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_usercart`
--

INSERT INTO `tbl_usercart` (`usercart_id`, `usercart_date`, `usercart_quantity`, `usercart_total`, `usercart_status`, `user_id`, `product_id`) VALUES
(21, '2022-08-20', 5, 6500, 1, 29, 19),
(22, '2022-08-20', 10, 7200, 1, 29, 12),
(23, '2022-08-23', 5, 1100, 1, 29, 13),
(24, '2022-08-23', 5, 3600, 1, 29, 14),
(25, '2022-08-25', 10, 1600, 1, 29, 18),
(26, '2022-08-28', 5, 1350, 1, 29, 11),
(27, '2022-08-28', 2, 1440, 1, 29, 12),
(29, '2022-08-28', 5, 3600, 1, 29, 16),
(30, '2022-08-28', 10, 2150, 1, 29, 17),
(31, '2022-09-13', 10, 7200, 1, 29, 15),
(32, '2022-09-13', 10, 2700, 1, 29, 11),
(33, '2022-09-13', 10, 2700, 1, 29, 11),
(34, '2022-09-13', 10, 1600, 1, 29, 18),
(35, '2022-10-08', 6, 1320, 0, 29, 13),
(37, '2022-11-06', 3, 480, 0, 29, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_quantity`
--
ALTER TABLE `tbl_quantity`
  ADD PRIMARY KEY (`quantity_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `tbl_shopcart`
--
ALTER TABLE `tbl_shopcart`
  ADD PRIMARY KEY (`shopcart_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_usercart`
--
ALTER TABLE `tbl_usercart`
  ADD PRIMARY KEY (`usercart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_quantity`
--
ALTER TABLE `tbl_quantity`
  MODIFY `quantity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_shopcart`
--
ALTER TABLE `tbl_shopcart`
  MODIFY `shopcart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_usercart`
--
ALTER TABLE `tbl_usercart`
  MODIFY `usercart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
