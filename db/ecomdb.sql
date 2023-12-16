-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 04:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tbl`
--

CREATE TABLE `about_tbl` (
  `id` int(11) NOT NULL,
  `intro` mediumtext NOT NULL,
  `about_info` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_tbl`
--

INSERT INTO `about_tbl` (`id`, `intro`, `about_info`) VALUES
(1, '<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-size: 18px;\">Lorem ipsum dolor sit amet, ea mei nullam facilisi corrumpit, natum assentior vel te. Ne nisl cibo summo nam, mei ei epicurei splendide adipiscing. An has delicata omittantur, eam omnes tibique accusata an.</span><br></p>', '<p style=\"text-align: center; line-height: 1.5;\"><span style=\"font-family: &quot;Arial Black&quot;; font-size: 24px;\">ABOUT US</span></p><p style=\"text-align: justify; line-height: 1.5;\">Te quo enim minim comprehensam. Ipsum solet equidem qui ad, in adipisci sensibus temporibus duo. Erant constituam sed ut. Latine definiebas ne pro, eu qui solum porro altera. Ad his pertinax scribentur, discere sensibus eloquentiam nam in.</p><p style=\"text-align: justify; line-height: 1.5;\">An apeirian accusamus pri. Cu latine invidunt hendrerit has. Has soleat numquam ad, eu vis summo conceptam interpretaris. Ad nec wisi audiam equidem.</p><p style=\"text-align: justify; line-height: 1.5;\">Cu iusto albucius deseruisse qui, nec no vide civibus percipit. Quo no nobis clita dolorem, ex sumo facete nominati pro, ea mel verterem reformidans. Mel vide vitae moderatius eu. Utinam semper laboramus quo ea, purto electram eam ex. Legendos accusata recusabo quo ex, etiam invenire cum cu. Quo iracundia quaerendum te.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `admin_messages_tbl`
--

CREATE TABLE `admin_messages_tbl` (
  `admin_message_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `admin_message` longtext NOT NULL,
  `role` tinyint(4) NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=unseen,1=seen',
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_messages_tbl`
--

INSERT INTO `admin_messages_tbl` (`admin_message_id`, `username`, `user_id`, `message_id`, `admin_message`, `role`, `seen`, `created`) VALUES
(1, 'admin', 4, 1, 'Try cube', 1, 0, '2023-12-11 19:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `branch_tbl`
--

CREATE TABLE `branch_tbl` (
  `branch_id` int(11) NOT NULL,
  `branch_add1` mediumtext NOT NULL,
  `branch_add2` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch_tbl`
--

INSERT INTO `branch_tbl` (`branch_id`, `branch_add1`, `branch_add2`) VALUES
(1, '<p>Sample Branch Address 1</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `flavor_id` int(11) NOT NULL,
  `topper_id` int(11) NOT NULL,
  `writings` varchar(200) DEFAULT NULL,
  `product_qty` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories_tbl`
--

CREATE TABLE `categories_tbl` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories_tbl`
--

INSERT INTO `categories_tbl` (`category_id`, `category_name`, `image`, `created`) VALUES
(1, 'Minimalist Cakes', '1698162841.png', '2023-10-24 15:54:01'),
(2, 'Cupcakes', '1701735553.png', '2023-12-05 00:19:13'),
(3, 'Desserts', '1702349405.png', '2023-12-12 02:50:05'),
(4, 'Cake To Go', '1702349419.png', '2023-12-12 02:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `color_name_tbl`
--

CREATE TABLE `color_name_tbl` (
  `color_name_id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `contact_id` int(11) NOT NULL,
  `mobile_num1` text NOT NULL,
  `mobile_num2` text DEFAULT NULL,
  `tel_num` text DEFAULT NULL,
  `email_add1` text NOT NULL,
  `email_add2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`contact_id`, `mobile_num1`, `mobile_num2`, `tel_num`, `email_add1`, `email_add2`) VALUES
(1, '<p>09928836628</p>', '<p>9277300036</p>', '', '<p>sample.email@mail.com</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `flavor_tbl`
--

CREATE TABLE `flavor_tbl` (
  `flavor_id` int(11) NOT NULL,
  `flavor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flavor_tbl`
--

INSERT INTO `flavor_tbl` (`flavor_id`, `flavor_name`) VALUES
(1, 'Chocolate'),
(2, 'Ube'),
(3, 'Vanilla'),
(5, 'Mango'),
(6, 'Mocha');

-- --------------------------------------------------------

--
-- Table structure for table `logo_name_tbl`
--

CREATE TABLE `logo_name_tbl` (
  `id` int(11) NOT NULL,
  `web_logo` varchar(200) NOT NULL,
  `web_name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo_name_tbl`
--

INSERT INTO `logo_name_tbl` (`id`, `web_logo`, `web_name`) VALUES
(1, '1696960242.jpg', '<p><span style=\"font-size: 24px; font-family: &quot;Comic Sans MS&quot;;\">Shayne\'s <font color=\"#e79c9c\"><span style=\"font-family: &quot;Comic Sans MS&quot;;\">Sweets</span></font></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `messages_tbl`
--

CREATE TABLE `messages_tbl` (
  `messages_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` longtext NOT NULL,
  `role` int(11) DEFAULT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=unseen,1=seen',
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages_tbl`
--

INSERT INTO `messages_tbl` (`messages_id`, `user_id`, `name`, `email_address`, `subject`, `message`, `role`, `seen`, `created`) VALUES
(1, 8, 'try', 'trialemail790@gmail.com', 'try', 'try try try', 0, 0, '2023-12-08 10:42:37'),
(4, 8, 'try', 'trialemail790@gmail.com', NULL, 'gg', 0, 0, '2023-12-11 19:58:22'),
(5, 8, '', '', '', 'Try again', 0, 0, '2023-12-11 20:47:33'),
(6, 8, 'try', 'trialemail790@gmail.com', NULL, 'Try again', 0, 0, '2023-12-11 20:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `notification_tbl`
--

CREATE TABLE `notification_tbl` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` mediumtext NOT NULL,
  `role` tinyint(4) NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=unseen, 1=seen',
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_tbl`
--

INSERT INTO `notification_tbl` (`notification_id`, `user_id`, `message`, `role`, `seen`, `created`) VALUES
(1, 8, 'Order Cancellation with tracking number: HA-866882472979', 0, 0, '2023-12-11 23:49:18'),
(2, 4, 'Cancellation approved, ordered has been cancelled.', 1, 0, '2023-12-12 00:48:19'),
(3, 8, 'Order Cancellation with tracking number: HA-982882472979', 0, 0, '2023-12-12 03:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `occasion_tbl`
--

CREATE TABLE `occasion_tbl` (
  `occasion_id` int(11) NOT NULL,
  `occasion_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `occasion_tbl`
--

INSERT INTO `occasion_tbl` (`occasion_id`, `occasion_name`) VALUES
(1, 'Birthday Celebration'),
(2, 'Wedding'),
(3, 'Valentines Day'),
(4, 'Anniversary');

-- --------------------------------------------------------

--
-- Table structure for table `orders_tbl`
--

CREATE TABLE `orders_tbl` (
  `order_id` int(11) NOT NULL,
  `tracking_no` varchar(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `full_address` mediumtext NOT NULL,
  `date` date NOT NULL,
  `total_amount` int(200) NOT NULL,
  `payment_mode` varchar(200) NOT NULL,
  `payment_id` varchar(200) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_tbl`
--

INSERT INTO `orders_tbl` (`order_id`, `tracking_no`, `user_id`, `full_name`, `email_address`, `contact_no`, `full_address`, `date`, `total_amount`, `payment_mode`, `payment_id`, `status`, `comments`, `created`) VALUES
(1, 'HA-866882472979', 8, 'Trial', 'trialemail790@gmail.com', '8382472979', 'This is an address', '2023-12-21', 1100, 'COD', '', 4, NULL, '2023-12-11 23:48:25'),
(2, 'HA-661082472979', 8, 'Trial', 'trialemail790@gmail.com', '8382472979', 'JHAJgkjahdjkaw', '2023-12-29', 700, 'GCash', '', 3, NULL, '2023-12-12 01:08:12'),
(3, 'HA-982882472979', 8, 'Trial', 'trialemail790@gmail.com', '8382472979', 'efyegufkadfpjaoifjpjfdw', '2023-12-22', 300, 'GCash', '', 4, NULL, '2023-12-12 03:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_items_tbl`
--

CREATE TABLE `order_items_tbl` (
  `order_items_id` int(11) NOT NULL,
  `order_id` int(200) NOT NULL,
  `product_id` int(200) NOT NULL,
  `size_name` varchar(200) NOT NULL,
  `flavor_name` varchar(200) NOT NULL,
  `topper_name` varchar(200) DEFAULT NULL,
  `product_qty` int(200) NOT NULL,
  `writings` varchar(255) DEFAULT NULL,
  `price` int(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items_tbl`
--

INSERT INTO `order_items_tbl` (`order_items_id`, `order_id`, `product_id`, `size_name`, `flavor_name`, `topper_name`, `product_qty`, `writings`, `price`, `created`) VALUES
(1, 1, 1, 'Bento Size', 'Chocolate', 'Happy Birthday (+P50.00)', 2, 'Happy', 1100, '2023-12-11 23:48:25'),
(2, 2, 1, '7x7 (10 servings)', 'Chocolate', '', 1, 'gg', 700, '2023-12-12 01:08:12'),
(3, 3, 2, 'Bento (P150)', 'Mango', '', 2, '', 300, '2023-12-12 03:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `occasion_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `size_name_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `occasion_id`, `product_name`, `description`, `image`, `size_name_id`, `created`) VALUES
(1, 1, 1, 'Moist Cake', 'Moist Cake', '1701737561.jpg', 1, '2023-12-05 00:52:41'),
(2, 3, 3, 'Mango Bliss Cake', 'Mango Bliss Cake', '1702349929.jpg', 4, '2023-12-12 02:58:49'),
(3, 3, 1, 'Caramel Cake', 'Caramel Cake', '1702349990.jpeg', 6, '2023-12-12 02:59:50'),
(4, 1, 1, 'Chocolate Moist Cake', 'Chocolate Moist Cake', '1702350036.jpg', 1, '2023-12-12 03:00:36'),
(5, 4, 4, 'Black Forest', 'Black Forest', '1702350080.jpg', 5, '2023-12-12 03:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `sizes_tbl`
--

CREATE TABLE `sizes_tbl` (
  `size_id` int(11) NOT NULL,
  `size_name_id` int(11) NOT NULL,
  `sizes` varchar(200) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes_tbl`
--

INSERT INTO `sizes_tbl` (`size_id`, `size_name_id`, `sizes`, `price`) VALUES
(1, 1, 'Bento Size', 500),
(2, 1, '7x7 (10 servings)', 700),
(3, 2, '4X3 Bento', 200),
(4, 2, '4X3 Bento Heart', 200),
(5, 2, '6X2 Small', 250),
(6, 2, '6X2 Heart Small', 250),
(7, 2, '8X2 Big', 400),
(8, 2, '8X2 Big Heart', 400),
(9, 2, '10X2 Family', 600),
(10, 6, '6 inch Round (P350)', 350),
(11, 4, 'Bento (P150)', 150),
(12, 4, 'Round (P350)', 350);

-- --------------------------------------------------------

--
-- Table structure for table `size_name_tbl`
--

CREATE TABLE `size_name_tbl` (
  `size_name_id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size_name_tbl`
--

INSERT INTO `size_name_tbl` (`size_name_id`, `size_name`) VALUES
(1, 'Moist Cake'),
(2, 'Most Product Size'),
(3, 'Mocha Cake'),
(4, 'Mango Bliss Cake'),
(5, 'Chocolate Fudge Cake'),
(6, 'Caramel Cake');

-- --------------------------------------------------------

--
-- Table structure for table `terms_tbl`
--

CREATE TABLE `terms_tbl` (
  `term_id` int(11) NOT NULL,
  `term_name` varchar(200) NOT NULL,
  `term_description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theme_tbl`
--

CREATE TABLE `theme_tbl` (
  `theme_id` int(11) NOT NULL,
  `theme_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topper_tbl`
--

CREATE TABLE `topper_tbl` (
  `topper_id` int(11) NOT NULL,
  `topper_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topper_tbl`
--

INSERT INTO `topper_tbl` (`topper_id`, `topper_name`, `price`) VALUES
(1, 'Happy Birthday (+P50.00)', '50'),
(2, 'Edible Modeled Cake', '150'),
(3, 'Non Edible Floral', '150');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Address` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `verify_token` int(11) NOT NULL,
  `verify_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=no,1=yes',
  `creation_dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `full_name`, `image`, `Address`, `username`, `email_address`, `contact_number`, `password`, `role`, `verify_token`, `verify_status`, `creation_dt`) VALUES
(4, '', NULL, '', 'admin', 'admin@mail.com', '092653122423', '$2y$10$Qh3pDdiDYZGzxbfFTDvyX.AMCZKTPbz4CpZ.wR.WrzMhMLOiAMYcm', 1, 0, 1, '2023-11-20 16:52:05'),
(8, '', NULL, '', 'try', 'trialemail790@gmail.com', '8382472979', '$2y$10$kh2tHt9.8aJSwUli6VLNzOdZiUANvBxP2TMh7VZBwlgPrspwqO0L2', 0, 8534, 1, '2023-11-21 21:11:58'),
(9, '', NULL, '', 'ai1', 'ai1@mail.com', '0992884677', '$2y$10$4lVgG1roJ8dNsHfCnhLFYO5/Vb34S1HuyJcEmUbCpvGKK/lCM66e.', 1, 0, 1, '2023-12-11 15:10:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_tbl`
--
ALTER TABLE `about_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_messages_tbl`
--
ALTER TABLE `admin_messages_tbl`
  ADD PRIMARY KEY (`admin_message_id`);

--
-- Indexes for table `branch_tbl`
--
ALTER TABLE `branch_tbl`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories_tbl`
--
ALTER TABLE `categories_tbl`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `color_name_tbl`
--
ALTER TABLE `color_name_tbl`
  ADD PRIMARY KEY (`color_name_id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `flavor_tbl`
--
ALTER TABLE `flavor_tbl`
  ADD PRIMARY KEY (`flavor_id`);

--
-- Indexes for table `logo_name_tbl`
--
ALTER TABLE `logo_name_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages_tbl`
--
ALTER TABLE `messages_tbl`
  ADD PRIMARY KEY (`messages_id`);

--
-- Indexes for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `occasion_tbl`
--
ALTER TABLE `occasion_tbl`
  ADD PRIMARY KEY (`occasion_id`);

--
-- Indexes for table `orders_tbl`
--
ALTER TABLE `orders_tbl`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items_tbl`
--
ALTER TABLE `order_items_tbl`
  ADD PRIMARY KEY (`order_items_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sizes_tbl`
--
ALTER TABLE `sizes_tbl`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `size_name_tbl`
--
ALTER TABLE `size_name_tbl`
  ADD PRIMARY KEY (`size_name_id`);

--
-- Indexes for table `terms_tbl`
--
ALTER TABLE `terms_tbl`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `theme_tbl`
--
ALTER TABLE `theme_tbl`
  ADD PRIMARY KEY (`theme_id`);

--
-- Indexes for table `topper_tbl`
--
ALTER TABLE `topper_tbl`
  ADD PRIMARY KEY (`topper_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_tbl`
--
ALTER TABLE `about_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_messages_tbl`
--
ALTER TABLE `admin_messages_tbl`
  MODIFY `admin_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch_tbl`
--
ALTER TABLE `branch_tbl`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `categories_tbl`
--
ALTER TABLE `categories_tbl`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `color_name_tbl`
--
ALTER TABLE `color_name_tbl`
  MODIFY `color_name_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flavor_tbl`
--
ALTER TABLE `flavor_tbl`
  MODIFY `flavor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logo_name_tbl`
--
ALTER TABLE `logo_name_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages_tbl`
--
ALTER TABLE `messages_tbl`
  MODIFY `messages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `occasion_tbl`
--
ALTER TABLE `occasion_tbl`
  MODIFY `occasion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders_tbl`
--
ALTER TABLE `orders_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_items_tbl`
--
ALTER TABLE `order_items_tbl`
  MODIFY `order_items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sizes_tbl`
--
ALTER TABLE `sizes_tbl`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `size_name_tbl`
--
ALTER TABLE `size_name_tbl`
  MODIFY `size_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `terms_tbl`
--
ALTER TABLE `terms_tbl`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theme_tbl`
--
ALTER TABLE `theme_tbl`
  MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topper_tbl`
--
ALTER TABLE `topper_tbl`
  MODIFY `topper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
