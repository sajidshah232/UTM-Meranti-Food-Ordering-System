-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 11:26 AM
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
-- Database: `onlinefoodphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(1, 'admin', 'CAC29D7A34687EB14B37068EE4708E7B', 'admin@mail.com', '', '2022-05-27 13:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(1, 1, 'Nasi kerabu', '', '8.00', 'nasikkreabu.jpg'),
(2, 1, 'Ayam Percik', '', '7.00', 'AyamPercik.jpeg'),
(3, 4, 'Nasi lemak', '', '8.00', 'Nasilemak.jpg'),
(4, 1, 'Nasi kandar', '', '8.00', 'Nasikandar.jpg'),
(5, 2, 'Ikan Bakar', '', '12.00', 'IkanBakar.jpg'),
(6, 2, 'Asamp Pedas', '', '9.00', 'AsampPedas.jpg'),
(7, 2, 'Assam Laksa', '', '8.00', 'AssamLaksa.jpg'),
(8, 2, 'Pan Mee', '', '11.00', 'PanMee.jpg'),
(9, 3, 'Bak Kut teh', '', '12.00', 'BakKutteh.jpg'),
(10, 3, 'Kolom Mee', '', '7.00', 'KolomMee.jpg'),
(11, 3, 'Mee Rebus', '', '6.00', 'MeeRebus.jpg'),
(12, 3, 'Nasi Goreng Kampung', '', '11.00', 'NasiGorengKampung.jpg'),
(13, 4, 'Teh Tarik', '', '3.00', 'TehTarik.jpg'),
(14, 4, 'Milo Ice', '', '3.00', 'MiloIce.jpg'),
(15, 4, 'Mango Shake', '', '6.00', 'MangoShake.jpeg'),
(16, 4, 'Orange Juice', '', '6.00', 'OrangeJuice.jpeg'),
(17, 3, 'rice', 'dddsad', '6.00', '63143f24cab2c.jpg'),
(18, 5, 'Nasik Pulao', 'None', '9.00', '632eb60ff30da.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(1, 2, 'in process', 'none', '2022-05-01 05:17:49'),
(2, 3, 'in process', 'none', '2022-05-27 11:01:30'),
(3, 2, 'closed', 'thank you for your order!', '2022-05-27 11:11:41'),
(4, 3, 'closed', 'none', '2022-05-27 11:42:35'),
(5, 4, 'in process', 'none', '2022-05-27 11:42:55'),
(6, 1, 'rejected', 'none', '2022-05-27 11:43:26'),
(7, 7, 'in process', 'none', '2022-05-27 13:03:24'),
(8, 8, 'in process', 'none', '2022-05-27 13:03:38'),
(9, 9, 'rejected', 'thank you', '2022-05-27 13:03:53'),
(10, 7, 'closed', 'thank you for your ordering with us', '2022-05-27 13:04:33'),
(11, 8, 'closed', 'thanks ', '2022-05-27 13:05:24'),
(12, 5, 'closed', 'none', '2022-05-27 13:18:03'),
(13, 13, 'closed', 'Order delivered successfully', '2022-08-25 14:52:13'),
(14, 19, 'closed', 'your order is delivered', '2022-09-07 01:45:36'),
(15, 23, 'rejected', 'Cancell', '2022-09-14 02:40:48'),
(16, 23, 'in process', 'on the way', '2022-09-14 02:41:39'),
(17, 23, 'rejected', 'Cancell', '2022-09-24 05:31:52'),
(18, 23, 'closed', 'delivered', '2022-09-24 07:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(1, 1, 'D SELERA BY TEMU KUNCI', 'arkedone@mail.com', '3547854700', '', '8am', '8pm', 'mon-sat', 'Arked Meranti, UTM', 'arkedone.jpg', '2022-09-01 06:20:53'),
(2, 2, 'TIGA BUDAK GEMOK', 'tigabudakgemok@gmail.com', '0557426406', '', '11am', '9pm', 'Mon-Sat', 'Arked Meranti, UTM', 'arkedtwo.jpg', '2022-09-01 06:22:25'),
(3, 3, 'MAKLONG IKAN BAKAI', 'maklongikanbakai@mail.com', '1458745855', '', '9am', '8pm', 'mon-sat', 'Arked Meranti, UTM', 'arkedthree.jpg', '2022-09-01 06:24:55'),
(4, 4, 'V.cafe', 'vcafe@mail.com', '6545687458', '', '7am', '8pm', 'mon-sat', 'Arked Meranti, UTM', 'arkedfour.jpg', '2022-09-01 06:26:44'),
(5, 3, 'Seri Mutiara', 'mutiara@gmail.com', '601121166132', 'https://chrome.google.com/webstore/category/extensions?hl=en', '9am', '11pm', 'Mon-Thu', 'fsdsd', '63139bc02ab1b.jpg', '2022-09-03 18:24:00'),
(6, 1, 'Malang hotel', 'malang@gmail.com', '601121166131', 'https://chrome.google.com/webstore/category/extensions?hl=en', '8am', '10pm', '24hr-x7', 'UTM', '632e91f867a27.png', '2022-09-24 05:13:28'),
(7, 1, 'UTM Arked', 'arked@gmail.com', '601121166131', 'https://www.google.com/search?q=googlemeet&oq=googlemeet&aqs=chrome.0.69i59j0i10i512l7j0i512j0i10i512.2656j0j7&sourceid=chrome&ie=UTF-8', '6am', '11pm', 'Mon-Tue', 'UTM', '632eb5dad8359.jpg', '2022-09-24 07:46:34'),
(8, 1, 'new utm arked', 'new@gmail.com', '601121166138', 'https://chrome.google.com/webstore/category/extensions?hl=en', '7am', '12am', 'Mon-Tue', 'utm', '632eb66d226fd.png', '2022-09-24 07:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(1, 'Malaysian', '2022-08-24 20:00:13'),
(2, 'Indian', '2022-08-24 20:00:21'),
(3, 'Chinese', '2021-04-07 08:45:25'),
(4, 'Indonessian', '2022-08-24 20:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `shopowner`
--

CREATE TABLE `shopowner` (
  `owner_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`, `role`) VALUES
(7, 'sajid323', 'sajid', 'shah', 'sajidshah@gmail.com', '+601121166164', '02a7e005aaf20172ffa0d96db1124af4', '', 1, '2022-09-21 17:52:38', NULL),
(8, 'mohsin12', 'mohsin', 'ali', 'mohsin@gmail.com', '601121166164', 'bf51435af36b593401ce06d03ca055a2', '', 1, '2022-08-24 19:05:06', NULL),
(9, 'mahi', 'mahi', 'anan', 'mahi@gmail.com', '601121166132', 'a6c5293bfc34fe0643b360bb007d948d', '', 1, '2022-08-25 17:08:09', NULL),
(10, 'meem', 'meem', 'gandu', 'meem@gmail.com', '601121166122', '6486fc59df0eae85c6b9565d1db6ab0c', '', 1, '2022-08-25 17:09:04', NULL),
(11, 'amin', 'amin', 'ali', 'amin@gmail.com', '601121166121', 'e4aa437501ea8fb3d3465f6b86272cb6', '', 1, '2022-09-13 08:03:39', NULL),
(12, 'muhaimin', 'muhaimin', 'khan', 'muhaimin@gmail.com', '601121166163', 'f70bb2c398bdb1c2d7d4d01e354a1ac0', '', 1, '2022-09-13 17:56:57', NULL),
(13, 'afiq12', 'afiq', 'khan', 'afiq@gmail.com', '601121166163', '6796fa77ecd407e9879c53935fa9e94d', '', 1, '2022-09-13 18:03:56', NULL),
(78, 'SHAH SAJID', 'SHAH SAJID', 'A20EC4050', 's.sajid@graduate.utm.my', '', '', '', 1, '2022-09-23 17:47:11', 'customer'),
(79, 'SHAH SAJID', 'SHAH SAJID', 'A20EC4050', 's.sajid@graduate.utm.my', '', '', '', 1, '2022-09-23 17:54:16', 'Owner'),
(80, 'SHAH SAJID', 'SHAH SAJID', 'A20EC4050', 's.sajid@graduate.utm.my', '', '', '', 1, '2022-09-24 06:45:58', 'customer'),
(81, 'ahamd', 'ahmad', 'ali', 'ahmadali@gmail.com', '601121166120', '3108666191b84a8cfcc22e55d9af1742', '', 1, '2022-09-24 06:52:48', NULL),
(82, 'kaleem', 'kaleem', 'shah', 'kaleemshah@gmail.com', '601121166123', '0d9f2dec93b7f50da6ca5c674b37fc13', '', 1, '2022-09-24 06:54:08', NULL),
(83, 'raja', 'raja', 'harith', 'raja@gmail.com', '6011211661232', '8cc6c1ca8ea40180abe1906fd17534ec', '', 1, '2022-09-24 06:59:13', NULL),
(84, 'SHAH SAJID', 'SHAH SAJID', 'A20EC4050', 's.sajid@graduate.utm.my', '', '', '', 1, '2022-09-24 06:59:49', 'customer'),
(85, 'SHAH SAJID', 'SHAH SAJID', 'A20EC4050', 's.sajid@graduate.utm.my', '', '', '', 1, '2022-09-24 07:17:31', 'customer'),
(86, 'SHAH SAJID', 'SHAH SAJID', 'A20EC4050', 's.sajid@graduate.utm.my', '', '', '', 1, '2022-09-24 07:33:21', 'customer'),
(87, 'SHAH SAJID', 'SHAH SAJID', 'A20EC4050', 's.sajid@graduate.utm.my', '', '', '', 1, '2022-09-24 07:34:03', 'customer'),
(88, 'SHAH SAJID', 'SHAH SAJID', 'A20EC4050', 's.sajid@graduate.utm.my', '', '', '', 1, '2022-09-24 07:38:58', 'customer'),
(89, 'SHAH SAJID', 'SHAH SAJID', 'A20EC4050', 's.sajid@graduate.utm.my', '', '', '', 1, '2022-09-24 07:39:59', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(19, 8, 'Ikan Bakar', 1, '12.00', 'closed', '2022-09-07 01:45:36'),
(23, 10, 'Nasi kerabu', 2, '8.00', 'closed', '2022-09-24 07:47:48'),
(24, 10, 'Ayam Percik', 1, '7.00', NULL, '2022-09-06 12:43:17'),
(25, 8, 'Ikan Bakar', 1, '12.00', NULL, '2022-09-07 01:41:56'),
(26, 8, 'Asamp Pedas', 2, '9.00', NULL, '2022-09-07 01:41:56'),
(27, 10, 'Nasi kerabu', 1, '8.00', NULL, '2022-09-14 02:39:19'),
(29, 10, 'Nasi kandar', 1, '8.00', NULL, '2022-09-14 02:39:19'),
(30, 10, 'Ikan Bakar', 1, '12.00', NULL, '2022-09-23 17:33:00'),
(32, 10, 'Nasi kerabu', 2, '8.00', NULL, '2022-09-24 07:38:08'),
(33, 10, 'Ayam Percik', 1, '7.00', NULL, '2022-09-24 07:38:08'),
(34, 10, 'Ikan Bakar', 1, '12.00', NULL, '2022-09-24 07:38:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `shopowner`
--
ALTER TABLE `shopowner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
