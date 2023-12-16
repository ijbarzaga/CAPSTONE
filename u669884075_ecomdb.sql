-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2023 at 03:30 AM
-- Server version: 10.6.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u669884075_ecomdb`
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
(1, '<p style=\"text-align: justify; line-height: 1.5;\"><span style=\"font-family: Tahoma; text-align: left; white-space-collapse: preserve;\"><font color=\"#000000\" style=\"\">Welcome to Shayne\'s Sweets, where we turn cake dreams into reality with personalized designs and divine flavors. Let us create a unique, mesmerizing cake that will leave your taste buds and guests in awe.</font></span><br></p>', '<p style=\"text-align: left; line-height: 1.5;\"><span style=\"font-size: 24px;\" arial=\"\" black\";=\"\" font-size:=\"\" 24px;\"=\"\"><b style=\"\"><font color=\"#ff1493\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ABOUT US</font></b></span></p><p style=\"text-align: left; line-height: 1.5;\"><span style=\"font-size: 24px;\" arial=\"\" black\";=\"\" font-size:=\"\" 24px;\"=\"\"><b style=\"\"><font color=\"#ff1493\"><br></font></b></span></p><p style=\"text-align: left; line-height: 3;\"><span style=\"font-family: \" segoe=\"\" ui=\"\" historic\",=\"\" \"segoe=\"\" ui\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" left;=\"\" white-space-collapse:=\"\" preserve;\"=\"\">Founded in 2017 by Katherine Shayne Baladhay, Shayne\'s Sweets is a bakery that specializes in cake production and customization. Located in Narra 3, Bulihan, Silang, and Cavite, they are</span><span segoe=\"\" ui=\"\" historic\",=\"\" \"segoe=\"\" ui\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" left;=\"\" white-space-collapse:=\"\" preserve;\"=\"\" style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);\">open daily from 8:00 a.m. to 8:00 p.m. With over 10 varieties of products available, Shayne\'s Sweets can produce up to 100 cakes per day.</span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); background-color: var(--bs-card-bg);\">&nbsp;Shayne\'s Sweets maintains an active social media presence, with Facebook having 2.1k likes and 2.2k followers, Instagram with 502 followers, and TikTok with 196 followers.&nbsp;</span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); background-color: var(--bs-card-bg);\">Additionally, they partner with third-party platforms like Food Panda, Grab, and&nbsp;</span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); background-color: var(--bs-card-bg);\">Lala Move for online orders, while also welcoming customers to the shop for order pick-ups. Inquiries and orders can be made through their social media pages, and they offer various&nbsp;</span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); background-color: var(--bs-card-bg);\">customization options including drawings, fondant details, edible toppers, and photo prints.</span></p>');

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
(1, 'admin', 4, 1, 'Cake Customization depends on Cake Size, Flavors, ', 1, 0, '2023-12-14 08:10:11'),
(2, 'admin', 4, 15, 'pre\r\n', 1, 0, '2023-12-14 12:24:29'),
(3, 'admin', 4, 15, 'try\r\n', 1, 0, '2023-12-14 12:25:25'),
(4, 'admin', 4, 15, 'yes\r\n', 1, 0, '2023-12-14 12:25:45'),
(5, 'admin', 4, 0, '', 1, 0, '2023-12-15 09:00:22'),
(6, 'admin', 4, 18, 'sadasd', 1, 0, '2023-12-15 11:33:44'),
(7, 'admin', 4, 23, 'hello', 1, 0, '2023-12-15 11:41:20'),
(8, 'admin', 4, 23, '', 1, 0, '2023-12-15 11:58:48'),
(9, 'admin', 4, 23, 'ggg', 1, 0, '2023-12-15 11:58:59'),
(10, 'admin', 4, 25, 'sample reply', 1, 0, '2023-12-15 12:02:47'),
(11, 'admin', 4, 26, 'Try', 1, 0, '2023-12-15 12:05:21'),
(12, 'admin', 4, 27, 'hello', 1, 0, '2023-12-15 13:12:44'),
(13, 'admin', 4, 27, 'helloo', 1, 0, '2023-12-15 13:29:27'),
(14, 'admin', 4, 27, 'helloo', 1, 0, '2023-12-15 13:41:00'),
(15, 'admin', 4, 27, 'helloo', 1, 0, '2023-12-15 13:45:38'),
(16, 'admin', 4, 27, 'helloo', 1, 0, '2023-12-15 13:46:55'),
(17, 'admin', 4, 27, 'helloo', 1, 0, '2023-12-15 14:03:59'),
(18, 'admin', 4, 27, 'helloo', 1, 0, '2023-12-15 14:04:01'),
(19, 'admin', 4, 27, 's', 1, 0, '2023-12-15 14:35:20'),
(20, 'admin', 4, 27, 'test', 1, 0, '2023-12-15 22:31:14'),
(21, 'admin', 4, 34, 'hi', 1, 0, '2023-12-16 01:32:46'),
(22, 'admin', 4, 0, 'test', 1, 0, '2023-12-16 03:05:18');

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
(1, '4118 Silang, Cavite', '');

-- --------------------------------------------------------

--
-- Table structure for table `cakecoating_tbl`
--

CREATE TABLE `cakecoating_tbl` (
  `cakecoating_id` int(11) NOT NULL,
  `cake_coating` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cakecoating_tbl`
--

INSERT INTO `cakecoating_tbl` (`cakecoating_id`, `cake_coating`, `image`, `description`, `price`) VALUES
(1, 'Fondant', '1702677761.jpg', 'Fondant', 100);

-- --------------------------------------------------------

--
-- Table structure for table `cakefilling_tbl`
--

CREATE TABLE `cakefilling_tbl` (
  `cakefilling_id` int(11) NOT NULL,
  `cake_filling` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cakefilling_tbl`
--

INSERT INTO `cakefilling_tbl` (`cakefilling_id`, `cake_filling`, `description`, `price`) VALUES
(1, 'Chocolate Ganache', 'Chocolate Ganache', 50);

-- --------------------------------------------------------

--
-- Table structure for table `caketier_tbl`
--

CREATE TABLE `caketier_tbl` (
  `caketier_id` int(11) NOT NULL,
  `cake_tier` varchar(200) DEFAULT NULL,
  `size_name_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `caketier_tbl`
--

INSERT INTO `caketier_tbl` (`caketier_id`, `cake_tier`, `size_name_id`, `description`, `image`) VALUES
(1, 'Two Tier Cakes', 1, 'Two Tier Cakes', '1702688225.png');

-- --------------------------------------------------------

--
-- Table structure for table `caketopping_tbl`
--

CREATE TABLE `caketopping_tbl` (
  `caketopping_id` int(11) NOT NULL,
  `cake_topping` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `caketopping_tbl`
--

INSERT INTO `caketopping_tbl` (`caketopping_id`, `cake_topping`, `image`, `description`, `price`) VALUES
(1, 'Dragees', '1702678713.jpg', 'Dragess', 20);

-- --------------------------------------------------------

--
-- Table structure for table `caketype_tbl`
--

CREATE TABLE `caketype_tbl` (
  `caketype_id` int(11) NOT NULL,
  `cake_type` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `caketype_tbl`
--

INSERT INTO `caketype_tbl` (`caketype_id`, `cake_type`, `image`, `description`, `price`) VALUES
(1, 'Butter Cake', '1702676009.jpg', 'Butter Cake', 20);

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
  `cake_tier` varchar(200) NOT NULL,
  `cake_type` varchar(200) NOT NULL,
  `cake_size` varchar(200) NOT NULL,
  `cake_flavor` varchar(200) NOT NULL,
  `cake_fillings` varchar(200) NOT NULL,
  `cake_coating` varchar(200) NOT NULL,
  `frosting_color` varchar(200) DEFAULT NULL,
  `frosting_color2` varchar(200) DEFAULT NULL,
  `toppers` varchar(200) DEFAULT NULL,
  `toppings1` varchar(200) DEFAULT NULL,
  `toppings2` varchar(200) DEFAULT NULL,
  `product_qty` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`cart_id`, `user_id`, `product_id`, `size_id`, `flavor_id`, `topper_id`, `writings`, `cake_tier`, `cake_type`, `cake_size`, `cake_flavor`, `cake_fillings`, `cake_coating`, `frosting_color`, `frosting_color2`, `toppers`, `toppings1`, `toppings2`, `product_qty`, `created`) VALUES
(92, 25, 0, 0, 0, 0, 'dsds', 'Single', 'Butter Cake', '(6x2) Small', 'Vanilla', 'Chocolate Ganache', 'Icing', 'Blue', 'Blue', 'Edible printed', 'Chocolate Assortment', 'Chocolate Assortment', 0, '2023-12-15 14:50:36'),
(93, 8, 0, 0, 0, 0, 'asa', '', 'Butter Cake', '(6x2) Small', 'Mango', 'Chocolate Ganache', 'Fondant', 'Blue', 'Pink', 'Cardboard printed', 'White Chocolate Shards', 'Fresh Floral Decorations', 0, '2023-12-16 02:40:08'),
(94, 18, 0, 0, 0, 0, '', '', 'Butter Cake', '(4x3) Bento Heart', 'Vanilla', 'Whipped Cream', 'Fondant', 'Blue', 'Blue', 'Edible printed', 'White Chocolate Drip', 'Dark Chocolate Drip', 0, '2023-12-16 03:01:53'),
(95, 18, 1, 1, 3, 1, 'test', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, '2023-12-16 03:02:12');

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
-- Table structure for table `coatingcolor_tbl`
--

CREATE TABLE `coatingcolor_tbl` (
  `coatingcolor_id` int(11) NOT NULL,
  `coating_color` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coatingcolor_tbl`
--

INSERT INTO `coatingcolor_tbl` (`coatingcolor_id`, `coating_color`, `description`) VALUES
(1, 'Pink', 'Pink');

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
(1, '<p>09928836628x</p>', '<p>9277300036</p>', '', '<p>sample.email@mail.com</p>', '');

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
(1, '1702446591.jpg', '<p><span style=\"font-size: 24px; font-family: \" comic=\"\" sans=\"\" ms\";\"=\"\">Shayne\'s <span style=\"background-color: transparent;\" comic=\"\" sans=\"\" ms\";\"=\"\"><font color=\"#ff1493\">Sweets</font></span></span></p>');

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
(1, 8, 'Yow Yow Yow?', 'trialmail790@gmail.com', 'Customization', 'Good day! May I ask about the details in cake customization?', 0, 0, '2023-12-14 08:08:30'),
(2, 8, '', '', '', 'we?', 0, 0, '2023-12-14 08:10:32'),
(3, 8, 'try', 'trialemail790@gmail.com', NULL, 'we?', 0, 0, '2023-12-14 08:10:32'),
(4, 18, '', '', '', 'test', 0, 0, '2023-12-14 12:17:16'),
(5, 18, 'ivan', 'barzaga20@gmail.com', NULL, 'test', 0, 0, '2023-12-14 12:17:16'),
(6, 18, '', '', '', '', 0, 0, '2023-12-14 12:17:18'),
(7, 18, 'ivan', 'barzaga20@gmail.com', NULL, '', 0, 0, '2023-12-14 12:17:18'),
(8, 18, '', '', '', 'try', 0, 0, '2023-12-14 12:17:24'),
(9, 18, 'ivan', 'barzaga20@gmail.com', NULL, 'try', 0, 0, '2023-12-14 12:17:24'),
(10, 18, '', '', '', 'testtttttt', 0, 0, '2023-12-14 12:17:31'),
(11, 18, 'ivan', 'barzaga20@gmail.com', NULL, 'testtttttt', 0, 0, '2023-12-14 12:17:31'),
(12, 18, '', '', '', 'testing ', 0, 0, '2023-12-14 12:20:47'),
(13, 18, 'ivan', 'barzaga20@gmail.com', NULL, 'testing ', 0, 0, '2023-12-14 12:20:47'),
(14, 18, '', '', '', 'hello can i ask something?\r\n', 0, 0, '2023-12-14 12:22:37'),
(15, 18, 'ivan', 'barzaga20@gmail.com', NULL, 'hello can i ask something?\r\n', 0, 0, '2023-12-14 12:22:37'),
(16, NULL, 'Harvey Miller', 'harveymiller.web3@gmail.com', 'Question about your website', 'Hello,\r\n\r\nYour website is currently facing crucial SEO (Search Engine Optimization) issues, rendering it invisible on major search engines like Google, Bing, Yahoo, etc. We can easily fix this for you. If your business and website is a priority, kindly share \"Your Phone Number\" and suggest a suitable time for a call. This will allow us to discuss and resolve the matter promptly on a high-priority basis.\r\n\r\nBest regards,\r\nHarvey Miller', NULL, 0, '2023-12-14 16:41:20'),
(17, 8, 'joemari', 'tru@mail.com', 'bababa', 'hello!', 0, 0, '2023-12-15 02:09:01'),
(18, 8, 'joemari', 'tru@gmail.com', 'cake', 'hello', 0, 0, '2023-12-15 02:10:38'),
(19, NULL, 'joemari', 'tru@gmail.com', 'sada', 'asdasdada', NULL, 0, '2023-12-15 02:13:31'),
(20, NULL, 'srere', 'resse@amg.com', 'kaka', 'jdjfdf', NULL, 0, '2023-12-15 08:52:18'),
(21, NULL, 'jack daniel', 'Jdaniel@mail.com', 'cake', 'hi.....', NULL, 0, '2023-12-15 11:34:56'),
(22, 8, 'jack daniel', 'Jdaniel@mail.com', 'cake', 'hello', 0, 0, '2023-12-15 11:38:18'),
(23, 8, 'sample name', 'joemari.matela@gmail.com', 'cake', 'Cake', 0, 0, '2023-12-15 11:40:52'),
(24, NULL, 'Joemari', 'joemari.matela@gmail.com', 'Cakes', 'Hello', NULL, 0, '2023-12-15 11:58:18'),
(25, 25, 'sample name', 'joemari.matela@gmail.com', 'customization', 'sample text', 0, 0, '2023-12-15 12:02:01'),
(26, 25, 'Joemari', 'joemari.matela@gmail.com', 'customization', 'Sample Message', 0, 0, '2023-12-15 12:05:02'),
(27, 25, 'Joemari', 'joemari.matela@gmail.com', 'customization', 'sample', 0, 0, '2023-12-15 13:12:07'),
(28, NULL, 'jay', 'test@mail.com', 'cake', 'does chocolate cake available?', NULL, 0, '2023-12-15 22:29:27'),
(29, NULL, 'TESTING', 'test@gmail.com', 'about your website', 'try ', NULL, 0, '2023-12-15 22:34:08'),
(30, NULL, 'cczczczxczx', 'joemari.matela@gmail.com', 'cake', 'hello', NULL, 0, '2023-12-15 23:17:28'),
(31, NULL, 'jom', 'joemari.matela@gmail.com', 'cccc', 'xzxzxzxzxz', NULL, 0, '2023-12-16 01:27:19'),
(32, NULL, 'jom', 'joemari.matela@gmail.com', 'cake', '12 123 234 12345', NULL, 0, '2023-12-16 01:29:55'),
(33, NULL, 'cczczczxczx', 'joemari.matela@gmail.com', 'asas', 'sas', NULL, 0, '2023-12-16 01:31:49'),
(34, 25, 'jom', 'joemari.matela@gmail.com', 'cake', 'hello', 0, 0, '2023-12-16 01:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `notification_tbl`
--

CREATE TABLE `notification_tbl` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tracking_number` varchar(200) NOT NULL,
  `message` mediumtext NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=unseen, 1=seen',
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(4, 'Anniversary'),
(5, 'Christmas');

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
(3, 'HA-982882472979', 8, 'Trial', 'trialemail790@gmail.com', '8382472979', 'efyegufkadfpjaoifjpjfdw', '2023-12-22', 300, 'GCash', '', 4, NULL, '2023-12-12 03:34:01'),
(4, 'HA-601982472979', 8, 'Try', 'trialemail790@gmail.com', '8382472979', 'This is an address', '2023-12-28', 1100, 'PickUp', '', 4, NULL, '2023-12-13 05:54:13'),
(5, 'HA-636473874982', 8, 'Try Again', 'trialemail790@gmail.com', '2173874982', 'wfdssfsefsefsef', '2023-12-28', 1500, 'PickUp', '', 3, NULL, '2023-12-13 05:58:11'),
(6, 'HA-769382472979', 8, 'chrisdtian', 'trialemail790@gmail.com', '8382472979', 'STI College', '2023-12-20', 400, 'COD', '', 3, NULL, '2023-12-13 06:15:23'),
(7, 'HA-500197867650', 8, 'ahshash', 'trialemail790@gmail.com', '9897867650', 'sdfsfzf', '2023-12-15', 500, 'COD', '', 0, NULL, '2023-12-13 09:07:32'),
(8, 'HA-296953384668', 8, 'Tester', 'trialemail790@gmail.com', '9453384668', 'dfdsfds', '2024-01-04', 550, 'PickUp', '', 3, NULL, '2023-12-13 17:54:36'),
(9, 'HA-245882472979', 8, 'Yow Yow Yow?', 'trialemail790@gmail.com', '8382472979', 'b1 l34 4118, silang ,cavite', '2023-12-16', 800, 'COD', '', 3, NULL, '2023-12-14 02:14:47'),
(10, 'HA-1720199100919', 8, 'hotdogity', 'trialemail790@gmail.com', '09199100919', 'b1 l34 4118, silang ,cavite', '2023-12-16', 350, 'COD', '', 3, NULL, '2023-12-14 05:08:43'),
(12, 'HA-729382472979', 8, 'Try', 'trialemail790@gmail.com', '8382472979', 'Address', '2023-12-22', 1100, 'COD', '', 0, NULL, '2023-12-14 06:09:36'),
(13, 'HA-830982472979', 8, 'Try', 'trialemail790@gmail.com', '8382472979', 'My Address', '2023-12-18', 400, 'Gcash', '', 0, NULL, '2023-12-14 06:49:56'),
(14, 'HA-434582472979', 8, 'Jon Christian', 'trialemail790@gmail.com', '8382472979', 'qweuqweuqwe', '2023-12-16', 250, 'COD', '', 0, NULL, '2023-12-14 07:16:34'),
(15, 'HA-926882472979', 8, 'Try', 'trialemail790@gmail.com', '8382472979', 'My Address', '2023-12-25', 400, 'Pickup', '', 0, NULL, '2023-12-14 07:28:05'),
(16, 'HA-8507933997695', 18, 'Ivan Jay', 'barzaga20@gmail.com', '09933997695', '', '2023-12-02', 400, 'COD', '', 4, NULL, '2023-12-14 13:32:45');

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
  `cake_tier` varchar(200) DEFAULT NULL,
  `cake_type` varchar(200) DEFAULT NULL,
  `fillings` varchar(200) DEFAULT NULL,
  `coating` varchar(200) DEFAULT NULL,
  `coating_color` varchar(200) DEFAULT NULL,
  `toppings1` varchar(200) DEFAULT NULL,
  `toppings2` varchar(200) DEFAULT NULL,
  `price` int(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items_tbl`
--

INSERT INTO `order_items_tbl` (`order_items_id`, `order_id`, `product_id`, `size_name`, `flavor_name`, `topper_name`, `product_qty`, `writings`, `cake_tier`, `cake_type`, `fillings`, `coating`, `coating_color`, `toppings1`, `toppings2`, `price`, `created`) VALUES
(1, 1, 1, 'Bento Size', 'Chocolate', 'Happy Birthday (+P50.00)', 2, 'Happy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1100, '2023-12-11 23:48:25'),
(2, 2, 1, '7x7 (10 servings)', 'Chocolate', '', 1, 'gg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 700, '2023-12-12 01:08:12'),
(3, 3, 2, 'Bento (P150)', 'Mango', '', 2, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, '2023-12-12 03:34:01'),
(4, 4, 1, 'Bento Size', 'Chocolate', 'Happy Birthday (+P50.00)', 2, 'Hahhahaha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1100, '2023-12-13 05:54:13'),
(5, 5, 4, '7x7 (10 servings)', 'Chocolate', 'Happy Birthday (+P50.00)', 2, 'adawdawd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1500, '2023-12-13 05:58:11'),
(6, 6, 2, 'Round (P350)', 'Chocolate', 'Happy Birthday (+P50.00)', 1, 'qweqweqweqwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, '2023-12-13 06:15:23'),
(7, 7, 2, 'Round (P350)', 'Mango', 'Edible Modeled Cake', 1, 'HBD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 500, '2023-12-13 09:07:32'),
(8, 8, 1, 'Bento Size', 'Chocolate', 'Happy Birthday (+P50.00)', 1, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 550, '2023-12-13 17:54:36'),
(9, 9, 3, '6 inch Round (P350)', 'Ube', 'Happy Birthday (+P50.00)', 2, 'zxzczxczx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 800, '2023-12-14 02:14:47'),
(10, 10, 9, '4X3 Bento Heart', 'Ube', 'Non Edible Floral', 1, 'Happy Birthday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 350, '2023-12-14 05:08:43'),
(12, 12, 8, 'Bento Size', 'Vanilla', 'Happy Birthday (+P50.00)', 2, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1100, '2023-12-14 06:09:36'),
(13, 13, 6, '8X2 Big', 'Ube', '', 1, 'Masarap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, '2023-12-14 06:49:56'),
(14, 14, 9, '4X3 Bento', 'Chocolate', 'Happy Birthday (+P50.00)', 1, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 250, '2023-12-14 07:16:34'),
(15, 15, 9, '8X2 Big', 'Mocha', '', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, '2023-12-14 07:28:05'),
(16, 16, 3, '6 inch Round (P350)', 'Chocolate', 'Happy Birthday (+P50.00)', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400, '2023-12-14 13:32:45');

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
(1, 1, 1, 'Chocolate Moist Cake', 'Chocolate Moist Cake', '1702688867.jpg', 4, '2023-12-16 01:07:47');

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
(1, 4, '4X3 Bento', 150),
(2, 1, '6x4 + 4x4 Cake', 1000),
(3, 1, '8x4 + 6x4 Cake', 1500);

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
(1, 'Two Tier Cakes'),
(2, 'Three Tier Cakes'),
(3, 'Most Product Size'),
(4, 'Chocolate Moist Cake');

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
(9, '', NULL, '', 'ai1', 'ai1@mail.com', '0992884677', '$2y$10$4lVgG1roJ8dNsHfCnhLFYO5/Vb34S1HuyJcEmUbCpvGKK/lCM66e.', 1, 0, 1, '2023-12-11 15:10:55'),
(14, '', NULL, '', 'Zyg', 'zygrade1516@gmail.com', '0890824891', '$2y$10$ZhV8gkqXIpP7qc5vFbaNyuosQxgw1a2MoEga73OjAm8ENkGiu52W6', 0, 0, 0, '2023-12-13 07:20:25'),
(15, '', NULL, '', 'chano123', 'mantele99@gmai.com', '09958697847', '$2y$10$l4jry93vlz5oK/3KAaxDpeC4CkyZNpqRZ8arb9hvewKhcpo1FfhbG', 0, 0, 0, '2023-12-14 07:04:30'),
(18, '', NULL, '', 'ivan', 'barzaga20@gmail.com', '09933997695', '$2y$10$wtH3lkJuzRHMSg5icGY0PuyjnlJsstRDUiHkOLaBUDr2oILs9Lv3i', 0, 80000, 1, '2023-12-14 12:00:42'),
(23, '', NULL, '', 'bargz', 'skaboom0214@gmail.com', '09933997695', '$2y$10$3v61Tdci3FFxdr46ylfUHeqc6uoQbXpVUmLGkRHrGe9TXrHd4ftBi', 0, 0, 0, '2023-12-14 20:16:44'),
(24, '', NULL, '', 'john', 'johndelencabo+312@gmail.com', '09953015575', '$2y$10$EPYFEJQYRkr8AgIaIQqxNelIR5CckRQEOstbmdk5u5rMyJbV0au36', 0, 0, 0, '2023-12-15 06:59:32'),
(25, '', NULL, '', 'jom', 'joemari.matela@gmail.com', '12314122', '$2y$10$gTFtfpC/9N4Gj/SAnx7i7uWqC99ShnuUu372i.qHsjyj1TSNdYIO6', 0, 5, 1, '2023-12-15 10:29:08'),
(26, '', NULL, '', 'babayaga', 'babayaga@gmail.com', '123456', '$2y$10$eePX8Iv6Uxt.beS8NzL1D.2hC0OQBtQGtzI/mHCjzjzrx/.lQ9.j6', 0, 0, 0, '2023-12-16 02:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_notif_tbl`
--

CREATE TABLE `user_notif_tbl` (
  `user_notif_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tracking_number` varchar(200) NOT NULL,
  `message` mediumtext NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_notif_tbl`
--

INSERT INTO `user_notif_tbl` (`user_notif_id`, `user_id`, `tracking_number`, `message`, `seen`, `created`) VALUES
(1, 8, 'HA-601982472979', 'Cancellation approved, order will be cancelled.', 0, '2023-12-13 05:56:26'),
(2, 18, 'HA-8507933997695', 'Cancellation approved, order will be cancelled.', 0, '2023-12-15 14:43:52');

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
-- Indexes for table `cakecoating_tbl`
--
ALTER TABLE `cakecoating_tbl`
  ADD PRIMARY KEY (`cakecoating_id`);

--
-- Indexes for table `cakefilling_tbl`
--
ALTER TABLE `cakefilling_tbl`
  ADD PRIMARY KEY (`cakefilling_id`);

--
-- Indexes for table `caketier_tbl`
--
ALTER TABLE `caketier_tbl`
  ADD PRIMARY KEY (`caketier_id`);

--
-- Indexes for table `caketopping_tbl`
--
ALTER TABLE `caketopping_tbl`
  ADD PRIMARY KEY (`caketopping_id`);

--
-- Indexes for table `caketype_tbl`
--
ALTER TABLE `caketype_tbl`
  ADD PRIMARY KEY (`caketype_id`);

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
-- Indexes for table `coatingcolor_tbl`
--
ALTER TABLE `coatingcolor_tbl`
  ADD PRIMARY KEY (`coatingcolor_id`);

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
-- Indexes for table `user_notif_tbl`
--
ALTER TABLE `user_notif_tbl`
  ADD PRIMARY KEY (`user_notif_id`);

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
  MODIFY `admin_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `branch_tbl`
--
ALTER TABLE `branch_tbl`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cakecoating_tbl`
--
ALTER TABLE `cakecoating_tbl`
  MODIFY `cakecoating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cakefilling_tbl`
--
ALTER TABLE `cakefilling_tbl`
  MODIFY `cakefilling_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `caketier_tbl`
--
ALTER TABLE `caketier_tbl`
  MODIFY `caketier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `caketopping_tbl`
--
ALTER TABLE `caketopping_tbl`
  MODIFY `caketopping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `caketype_tbl`
--
ALTER TABLE `caketype_tbl`
  MODIFY `caketype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `categories_tbl`
--
ALTER TABLE `categories_tbl`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coatingcolor_tbl`
--
ALTER TABLE `coatingcolor_tbl`
  MODIFY `coatingcolor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `flavor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logo_name_tbl`
--
ALTER TABLE `logo_name_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages_tbl`
--
ALTER TABLE `messages_tbl`
  MODIFY `messages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `occasion_tbl`
--
ALTER TABLE `occasion_tbl`
  MODIFY `occasion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders_tbl`
--
ALTER TABLE `orders_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_items_tbl`
--
ALTER TABLE `order_items_tbl`
  MODIFY `order_items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes_tbl`
--
ALTER TABLE `sizes_tbl`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `size_name_tbl`
--
ALTER TABLE `size_name_tbl`
  MODIFY `size_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_notif_tbl`
--
ALTER TABLE `user_notif_tbl`
  MODIFY `user_notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
