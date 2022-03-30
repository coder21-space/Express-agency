-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 06:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `express_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(51, 'sahil', 'k@gmail.com', 7011432718, 'yo', 'buddy', '2022-03-29 07:14:47'),
(57, 'carry', 'crry@gmail.com', 7011432718, 'so', 'bro', '2022-03-29 07:19:43'),
(58, 'carry', 'crry@gmail.com', 7011432718, 'so', 'bro', '2022-03-29 07:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(11) NOT NULL,
  `city` text NOT NULL,
  `pincode` int(10) NOT NULL,
  `state` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `address`, `city`, `pincode`, `state`, `created_at`) VALUES
(1, 'sahil', 'kkkkkk@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-25 02:25:10'),
(2, 'sahil', 'kkkkkk@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-25 02:25:12'),
(3, 'sahil', 'kkkkkk@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-25 02:25:44'),
(4, 'sahil', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-25 02:26:38'),
(5, 'Kaushal', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-25 02:35:54'),
(6, 'fdh', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-25 02:47:37'),
(7, 'Kaushal', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-25 06:06:26'),
(8, 'Kaushal', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-25 06:12:33'),
(9, 'Kaushal', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-25 20:17:42'),
(10, 'Kaushal', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-26 04:18:23'),
(11, 'Kaushal', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-26 06:00:19'),
(12, 'Kaushal', 'kaushal2132002@gmail.com', '7011432718', 'c-809 agar ', 'New Delhi', 110086, 'Delhi', '2022-03-29 01:54:11'),
(13, 'Kaushal', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-29 06:19:21'),
(14, 'Kaushal', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani Co', 'New Delhi', 110015, 'Delhi', '2022-03-29 15:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `db_login`
--

CREATE TABLE `db_login` (
  `id` int(255) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `type` int(1) NOT NULL DEFAULT 1 COMMENT '\r\n1=admin ,2=user',
  `iv` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_login`
--

INSERT INTO `db_login` (`id`, `username`, `email`, `password`, `type`, `iv`, `created_at`) VALUES
(1, 'Kaushal', 'kaushal2132002@gmail.com', 'sACAmnku4oh5AA==', 1, '6b2ced82c8907a4782f9d7be3a9d8729', '2022-03-05 23:39:32'),
(2, 'Coder21space', 'coder21space@gmail.com', 'xrZ6qkQNYqeNdQ==', 1, '7636ecb4b08abe33bc9a310a324749bf', '2022-03-07 10:18:53'),
(3, 'Kaushal', 'k@gmail.com', '3CwEpff19hHoKg==', 1, 'c2fc6eb6c0c5437821caa3c0653a5b1a', '2022-03-07 10:19:51'),
(4, 'sahil', 's@gmail.com', '3V+m0Un666gnPg==', 1, 'bf72c6c9186cb7ed078c1d96d71a3eef', '2022-03-07 10:23:44'),
(5, 'fdh', '101carry1912111000101@gmail.com', 'Ba4ijW0r15c0Fg==', 1, 'b22e8ba331c311cc5f20af1775e6753f', '2022-03-07 10:27:27'),
(6, 'skk', 'skk@gmail.com', 'wQxJeNouD3kT7Q==', 2, 'dafcb8b05dcdd26e704d6788ed5ad011', '2022-03-14 23:34:16'),
(7, 'sk', 'sk@gmail.com', 'lgp2p2f4wongJw==', 1, '237c545b33e3a6d14f5186a3070a6992', '2022-03-14 23:36:45'),
(8, 'eshwari', 'eshu@gmail.com', 'bHP/Wj/ovz8GVg==', 1, '874673a2aba8f771631ca277bd49e20d', '2022-03-19 07:37:12'),
(9, 'a', 'a@gmail.com', 'Y9sFLjp3KiIUFA==', 1, '9132c7891111a4c481fdc30d849aad5d', '2022-03-19 20:07:22'),
(13, 'erffr', 'kaushal2131999@gmail.com', 'Pc2AAWxNLVT9JFELng==', 1, '71c4d26d903d28ecae6ad1d00be6f2f4', '2022-03-22 23:06:17'),
(20, 'sahil', 'kkaushal2132002@gmail.com', 'S2GalnKApg==', 1, 'ebe644ada3f6608c0a4376d2c511440d', '2022-03-22 23:24:33'),
(27, '333etete', 'kaushal111111@gmail.com', 'oaxdGKQ=', 1, '7a31f93463dced93c5f8b446d47a9ac4', '2022-03-22 23:40:13'),
(35, 'aaaa', '', '4aP8heHRxCxJ', 1, '83c3880963a3253c1354d0aae1768100', '2022-03-22 23:55:45'),
(39, '353532', 'ff@gmail', '0qM=', 1, '0a2a1bed2fd8187f3924fe44a404fda0', '2022-03-23 00:01:58'),
(42, 'dgdgdg', 'sss@gmail.com', 'FhwWdZU+j3o=', 1, 'c2d8eec562b31e66c637bcd8b3ebe413', '2022-03-23 00:16:23'),
(47, 'kaushal2131999@gmail.com', 'rahul@gmail.com', 'V42Q4VY=', 1, '27f2cf4ce657dd85777920a956d09e63', '2022-03-23 00:22:29'),
(48, 'kaushal2131999@gmail.com', 'rahul1@gmail.com', 'sZuPPHY=', 1, '308d28b440dc94bb3fff3837a1926cfa', '2022-03-23 00:22:57'),
(49, 'kaushal2131999@gmail.com', 'rahul12@gmail.com', 'wivlqkA=', 1, '88ba1d3cccd752f34ef78e0909d89263', '2022-03-23 00:23:16'),
(51, 'kaushal2131999@gmail.com', 'rahul123@gmail.com', '6pIXmxg=', 1, '69e04baa0b3b5a11d8735d0ab972591e', '2022-03-23 00:25:30'),
(52, 'kaushal2131999@gmail.com', 'rahul1234@gmail.com', 'D0FujTg=', 1, '7f6a26feff4ec30bfa61df669de31f85', '2022-03-23 00:27:17'),
(53, 'kaushal2131999@gmail.com', 'rahul12345@gmail.com', 'CUftHFo=', 1, 'edbd1fbd3e6e3ef4eaa1ae3ed48f8fcc', '2022-03-23 00:28:31'),
(56, 'kaushal2131999@gmail.com', 'a1@gmail.com', 'pd0CAVU=', 1, '168f898de44786ab590cc0f641e682ee', '2022-03-23 00:31:54'),
(57, 'a', 'b1@gmail.com', '/w==', 1, '53d2df2c24e047b0cf79f8cef37a19e4', '2022-03-23 00:35:21'),
(58, 'c', 'c@gmail.com', 'Cw==', 1, 'c3659b0886fd400e7d2688d293eafcfe', '2022-03-23 00:43:01'),
(59, 'd', 'd@gmail.com', 'lQ==', 1, '2bfa530d8dc74014a4f93e671f49d60f', '2022-03-23 00:49:54'),
(60, 'd', 'e@gmail.com', '3A==', 1, 'b04e72f26d9c561827c73fb6bd00d533', '2022-03-23 00:52:05'),
(61, 'd', 'f@gmail.com', 'hA==', 1, '94e2af6793995c43141bf89b235f6954', '2022-03-23 00:57:46'),
(62, 'fsfsf', 'kkkk@gmail.com', 'YJB6930=', 1, '6333d02f62758936843bfa371951ca91', '2022-03-23 01:09:36'),
(67, 'hhhhhhhhhh', 'h@gmailo.com', 'MTCSo2zI0TSVnEw=', 1, '07a29e03122a7f26e1fd30ae8bf6db88', '2022-03-23 19:48:04'),
(68, 'vimal', 'vimal@gmail.com', 'SBdorgq/yoyCJQ==', 1, '0f3f18f3cf48f116ed2be3d1ea2ce6fd', '2022-03-23 19:59:06'),
(70, 'safsfg', 'skkk@gmail.com', 'haC6TRXQDhU=', 1, '149674a95e5f0385bbc800ae2d94119d', '2022-03-23 20:28:54'),
(71, 'kaushal2131999@gmail.com', 'sssss@gmail.com', 'qdJFoQ==', 1, 'bacd3b734f0070fd346e5638e6532b09', '2022-03-23 20:33:38'),
(72, 'fsaf', 'aaaa@gmail.com', '4M3m1MI=', 1, '7379418683b9cedc09c322211572ce77', '2022-03-23 20:39:15'),
(75, 'kaushal2131999@gmail.com', 'ah@gmail.com', 'ykPIgBb2yVwXAKs=', 1, '626633df924289d1f92044b05fb9c0ca', '2022-03-23 20:49:25'),
(79, 'sss', 'loki@gmail.com', 'tdPI', 1, 'b9e0ad6b74019a1ca7a4c944f2b324d3', '2022-03-23 21:00:36'),
(81, 'kaushal2131999@gmail.com', 'yup@gmail.com', '1I6tgUM=', 1, '12c17fdec490215a6262993b10df938c', '2022-03-23 21:02:14'),
(83, 'kaushal2131999@gmail.com', '1@gmail.com', 'vc7F0qg=', 1, 'e99e48de9e0ededb4dd64410947c3375', '2022-03-23 21:02:59'),
(84, 'gee', 'kj@gmail.com', 'dVtvLumi', 1, '034069e42c75a2ee6b6caa10d728d501', '2022-03-23 21:07:47'),
(85, 'gee', 'qq@gmail.com', 'N7DRjaDP', 1, '55d9e907b43ece48dbf60fc6d5de9be4', '2022-03-23 21:13:00'),
(86, 'fasfasf', 'x@gmail.com', 'Z/mvbS4=', 1, '696f1f2029fcb86a35805a8e12d741fc', '2022-03-23 21:17:51'),
(88, 'fasfasf', 'xyz@gmail.com', 'llk9egw=', 1, '107f44a7da45368bed477c334ddd2763', '2022-03-23 21:20:56'),
(91, 'rahul', 'rk@gmail.com', 'wj5X3A==', 1, '5b344a3e4fc747f5bff15f4a5fea99c1', '2022-03-23 21:24:59'),
(92, 'rahul', 'rk1@gmail.com', 'CLeCNA==', 1, '85c1b4d5e52f029044c42700698938f9', '2022-03-23 21:26:04'),
(93, 'rahul', 'rk2@gmail.com', 'bkzvWw==', 1, 'bbd2f310d0d9cd56a3597348261b028c', '2022-03-23 21:26:15'),
(94, 'rahul', 'rk3@gmail.com', '3p15fw==', 1, 'b4d72db8c8bb86d41c2120b8b9392c89', '2022-03-23 21:26:29'),
(95, 'rahul', 'rk4@gmail.com', 'KS2VAQ==', 1, '5ec44c8af4287ba788ff3525b7e5f752', '2022-03-23 21:30:42'),
(97, 'rahul', 'rk19@gmail.com', 'Sp9oBA==', 1, '702d3ea8332ad8876fe39199999c9419', '2022-03-23 21:34:22'),
(98, 'rahul', 'rk20@gmail.com', '75HOYw==', 1, '7d4baca171ceb763ef88aaad3abd796c', '2022-03-23 21:45:19'),
(99, 'rahul', 'rk21@gmail.com', 'L42S5g==', 1, 'aea7b70ef1acec80372e0158adf14b6a', '2022-03-23 22:06:31'),
(100, 'dgfgdsgsd', 'abc@gmail.com', 'zzdz//ofUw==', 1, 'cc2e2143371f9cfed9eb4d0b6368f8e0', '2022-03-23 22:08:09'),
(101, 'tewtewtew', 'abcd@gmail.com', 'F/65C0QERg==', 1, '3843af6bbdf71f4e54687af5343b5735', '2022-03-23 22:11:19'),
(104, 'tewtewt', '100@gmail.com', '8OSUe0OC', 1, '02036ed241d55101d3521a651599019a', '2022-03-23 22:16:12'),
(105, 'fdsg', '101@gmail.com', 'zq6bRMJu', 1, 'a53b8723dfefaef2ebaba97d07687b63', '2022-03-23 22:19:37'),
(106, 'eteyte', '102@gmail.com', 'tfy2mlo=', 1, 'd8bf77b1306e69fd0c71bb700a4f68ac', '2022-03-23 22:20:56'),
(116, 'edfd', '103@gmail.com', 'yhO6Og==', 1, 'fb52c0233ef2dbc9af879f23410149df', '2022-03-23 22:22:01'),
(117, 'ddf', '104@gmail.com', 'mL7Qb2g=', 1, 'c108b369b0e6e0c8cf93d4ae81db420c', '2022-03-23 22:25:20'),
(118, 'sdfhfhs', '107@gmail.com', 'nPU=', 1, 'e6760431eb9a653dd0d9fa4b3497b429', '2022-03-23 22:32:37'),
(119, 'gdgdg', '109@gmail.com', 'JxxI', 1, '14c269b11959e383bf6dc0d9f6192604', '2022-03-23 22:39:45'),
(120, 'sfsafsa', '110@gmail.com', 'KR7Sqig=', 1, 'd7f33b185c10b6c47aad268b6579025a', '2022-03-23 22:40:33'),
(121, 'ere', '111@gmail.com', 'Rh5FexM=', 1, '70bd492efb752b4d0691ded72d77984e', '2022-03-23 22:43:44'),
(122, 'hfrhf', '112@gmail.com', 'qli8fys=', 1, '8f4c83b08422cdf0a96b8449c4289e90', '2022-03-23 22:52:41'),
(123, 'sfsafsa', '113@gmail.com', 'xnANUGA=', 1, 'f820ec7dab8bcd3aa10879404fa565e6', '2022-03-23 22:55:18'),
(124, 'sfsafsa', '114@gmail.com', 'cQe4XGg=', 1, '0c7602c94ad8a420bc8517f474284bd2', '2022-03-23 22:57:23'),
(128, 'kaushal', '115@gmail.com', '7mxCl78=', 1, 'c83eb9e96a443fa2aa7448aff25edea9', '2022-03-23 23:24:11'),
(129, 'sahil', 'sahil@gmail.com', 'uVBERQ==', 1, 'b7dc0debf45e4b06c17a229e96b636f2', '2022-03-24 05:49:00'),
(132, 'dsflkdflkdkfhdsfds', 'rk45@gmail.com', '83W229RiDfCg', 1, 'aba33d00448293230eaadfdb38eb5b07', '2022-03-24 07:51:24'),
(133, 'shubham', 'subho@gmail.com', 'o5WHVd8kCZiOIA==', 1, '18a0188936837061cd354402495c030c', '2022-03-24 19:47:52'),
(138, 'kaushal2131999@gmail.com', 'kaushal212222@gmail.com', 'KuIL7Ko/OSS3g0o=', 1, '9f3571f0c26e0dbcba2d646c83dac7a0', '2022-03-25 06:06:07'),
(142, 'kaushal2131999@gmail.com', 'kaushal2131999sdsfs@gmail.com', 'K9k5IkVhn3g=', 1, '7035a184d12a585f53c6783a9f286bdd', '2022-03-25 07:12:55'),
(143, 'axssss', 'fsfafasfsa@gmail.com', 'lH2aSfgKfTBg', 1, '4c070248e26fdc8a0b0f1b8d57e291b0', '2022-03-25 20:16:57'),
(144, 'crry', 'crry@gmail.com', 'sK/60Q==', 1, '6e4ed1908c58c1f5f40b94d60086017a', '2022-03-27 00:03:34'),
(145, 'crry', 'crry2@gmail.com', 'T2r1Qp4rkC7Fyw==', 1, 'f7a264f5504834e4ee7583bebc7868fd', '2022-03-27 03:39:28'),
(146, 'Kaushal', 'ghdhs@gmail.com', 'eseddrqX9qpD6A==', 1, 'd8928cf775990d813b24158f6d6278c4', '2022-03-27 03:40:30'),
(147, 'Kaushal', '101carry1912111000154501@gmail.com', 'ITXZbsmXpqe2Ow==', 1, '79f6788861fa0061f9d2d39a4a354ef6', '2022-03-28 08:07:48'),
(148, 'kaushal2131999@gmail.com', 'kaushal213199933@gmail.com', 'eBOhsqo=', 1, '95bd8f2825b1d07df4b4af74fbfde5cc', '2022-03-29 15:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `source_add` text NOT NULL,
  `destination_add` text NOT NULL,
  `start_date` datetime NOT NULL,
  `end_data` datetime NOT NULL,
  `vehical_type_id` int(11) NOT NULL,
  `pay_id` int(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customer_id`, `source_add`, `destination_add`, `start_date`, `end_data`, `vehical_type_id`, `pay_id`, `created_at`) VALUES
(5, 4, '3434', '35325', '2022-03-16 00:00:00', '2022-03-17 00:00:00', 10, 53535353, '2022-03-26 06:57:56'),
(6, 4, '3434', '52353', '2022-03-24 00:00:00', '2022-03-24 00:00:00', 10, 53535353, '2022-03-26 07:08:14'),
(7, 4, 'tet', 'eet', '2022-03-16 00:00:00', '2022-03-10 00:00:00', 11, 53535353, '2022-03-26 07:19:51'),
(8, 1, 'dfdgd', 'paytm', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 0, '2022-03-27 07:49:36'),
(9, 3, 'tet', '52353', '2022-03-11 00:00:00', '2022-03-05 00:00:00', 11, 53535353, '2022-03-27 08:32:44'),
(10, 7, 'dv', 'fgdsd', '2022-03-17 00:00:00', '2022-03-17 00:00:00', 14, 53535353, '2022-03-27 20:54:18'),
(11, 1, '235325', '52353', '2022-03-22 00:00:00', '2022-03-26 00:00:00', 13, 53535353, '2022-03-27 21:16:23'),
(20, 3, '3434', '35325', '2022-03-22 00:00:00', '2022-03-17 00:00:00', 14, 53535353, '2022-03-27 21:20:48'),
(25, 13, 's', 'd', '2022-03-26 00:00:00', '2022-03-18 00:00:00', 17, 53535353, '2022-03-29 17:11:08'),
(26, 7, 'a', 'd', '2022-03-20 00:00:00', '2022-03-26 00:00:00', 14, 53535353, '2022-03-29 17:19:04'),
(27, 14, 's', 'd', '2022-03-16 00:00:00', '2022-03-17 00:00:00', 17, 53535353, '2022-03-29 21:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `transaction_id` text NOT NULL,
  `account_no` text NOT NULL,
  `mode_of_pay` int(30) NOT NULL COMMENT '1=upi,2=net_banking,3=card_payment,\r\n',
  `bank_name` text NOT NULL,
  `amount` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0=failed,1=complete,2=panding',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `transaction_id`, `account_no`, `mode_of_pay`, `bank_name`, `amount`, `status`, `created_at`) VALUES
(1, '4', '445', 0, 'hbuub', 88, 3, '2022-03-27 07:48:49'),
(2, '4', '445', 0, 'hbuub', 88, 3, '2022-03-27 07:48:54'),
(3, '4', '445', 0, 'hbuub', 88, 3, '2022-03-27 07:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `pincode` int(11) NOT NULL,
  `state` text NOT NULL,
  `salary` int(11) NOT NULL,
  `staff_type_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `city`, `pincode`, `state`, `salary`, `staff_type_id`, `created_at`) VALUES
(2, 101, 'afsa', 'abcd@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 4444, 8, '2022-03-23 22:11:19'),
(3, 104, 'Kaushal', '100@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 4434, 5, '2022-03-23 22:16:12'),
(5, 106, 'Kaushal', '102@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 555, 9, '2022-03-23 22:20:56'),
(6, 116, 'Kaushal', '103@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 555, 7, '2022-03-23 22:22:01'),
(7, 117, 'Kaushal', '104@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 4434, 5, '2022-03-23 22:25:20'),
(8, 118, 'Kaushal', '107@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 4444, 9, '2022-03-23 22:32:37'),
(9, 119, 'fdh', '109@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 2432433, 11, '2022-03-23 22:39:45'),
(10, 120, 'Kaushal', '110@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 4444, 3, '2022-03-23 22:40:33'),
(11, 121, 'Kaushal', '111@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 2432433, 8, '2022-03-23 22:43:44'),
(12, 122, 'Kaushal', '112@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 4434, 7, '2022-03-23 22:52:41'),
(15, 128, 'sahil', '115@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 4434, 5, '2022-03-23 23:24:11'),
(18, 133, 'subho', 'subho@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 2222, 4, '2022-03-24 19:47:53'),
(23, 144, 'crry', 'crry@gmail.com', '7011432718', 'c-809 agar nagar prem nagar-3', 'dwarka', 3432434, 'new delhi', 0, 24, '2022-03-27 00:03:35'),
(24, 148, '3', 'kaushal2131999@gmail.com', '7011432718', 'Rajdhani College  near by raja garden', 'New Delhi', 110015, 'Delhi', 4444, 21, '2022-03-29 15:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `staff_type`
--

CREATE TABLE `staff_type` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_type`
--

INSERT INTO `staff_type` (`id`, `name`, `created_at`) VALUES
(1, 'cxbcfbfbfvb', '2022-03-18 08:25:47'),
(2, 'sahil', '2022-03-18 08:42:10'),
(3, 'Kaushal', '2022-03-18 08:42:28'),
(4, 'Kaushal', '2022-03-18 08:47:09'),
(5, 'Kaushal', '2022-03-18 08:48:28'),
(7, 'sahil', '2022-03-18 09:40:09'),
(8, 'sahil', '2022-03-18 09:53:57'),
(9, 'Kaushal', '2022-03-18 10:13:05'),
(10, 'fsdfsdfsd', '2022-03-18 21:01:16'),
(11, 'sahil', '2022-03-18 21:06:29'),
(12, 'sahildfdfd', '2022-03-18 21:11:51'),
(13, 'sahil', '2022-03-18 21:29:12'),
(17, 'manager', '2022-03-24 07:52:56'),
(18, 'empolyee', '2022-03-24 19:09:56'),
(19, 'safsfs', '2022-03-24 20:03:50'),
(20, 'ddddvd', '2022-03-24 20:14:33'),
(21, 'Kaushal', '2022-03-25 02:53:35'),
(22, 'manager', '2022-03-25 20:16:14'),
(23, 'fdh', '2022-03-25 21:01:04'),
(24, 'worker', '2022-03-26 04:09:41'),
(25, 'empolyee', '2022-03-26 23:55:41'),
(26, 'cng', '2022-03-27 22:10:07'),
(27, 'manager', '2022-03-29 15:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `vehical_no` text NOT NULL,
  `trip_type` text NOT NULL,
  `load_capacity` varchar(11) NOT NULL,
  `vehicle_type_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `name`, `vehical_no`, `trip_type`, `load_capacity`, `vehicle_type_id`, `created_at`) VALUES
(20, 'ronak', 'ACD345DL', '0', '200 kg', 1, '0000-00-00 00:00:00'),
(21, 'kaushal', 'ACD345DL', '0', '4324 kg', 1, '0000-00-00 00:00:00'),
(22, 'kaushal', 'ACD345DL', '0', '4324 kg', 1, '0000-00-00 00:00:00'),
(23, 'kaushal', 'ACD345DL', '0', '4324 kg', 1, '0000-00-00 00:00:00'),
(24, 'kaushal', 'ACD345DL', '0', '4324 kg', 1, '0000-00-00 00:00:00'),
(25, 'kaushal', 'ACD345DL', '0', '4324 kg', 1, '0000-00-00 00:00:00'),
(26, 'Coder21space', '3334343', '0', 'New Delhi', 1, '0000-00-00 00:00:00'),
(27, 'Coder21space', '3334343', '0', 'New Delhi', 1, '0000-00-00 00:00:00'),
(28, 'Kaushal', '3334343', '0', '20kg', 2, '0000-00-00 00:00:00'),
(29, 'Kaushal', '3334343', '0', '555 kg', 3, '0000-00-00 00:00:00'),
(30, 'Kaushal', 'A1b2c3', '0', '3330 kg', 11, '2022-03-25 17:11:25'),
(31, 'Kaushal', '3334343', '0', '32523 kg', 10, '2022-03-26 03:13:58'),
(32, 'sahil', 'ACD345DL', '0', '4324 kg', 12, '2022-03-26 11:06:44'),
(33, 'express', '3432SFASF', 'long trip', '555235 KG', 10, '2022-03-27 07:41:34'),
(34, 'express', '2355dfd', 'short trip', '1kg', 17, '2022-03-27 07:51:57'),
(35, 'dsgdg', 'dsgdgd', 'short trip', 'New Delhi', 13, '2022-03-27 10:42:12'),
(36, 'truck', 'ACD345DL', 'long trip', '35 kg', 17, '2022-03-28 05:25:10'),
(37, 'Kaushal', '4543sdsf', 'short trip', '555235 KG', 19, '2022-03-29 22:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_maintenance`
--

CREATE TABLE `vehicle_maintenance` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_maintenance`
--

INSERT INTO `vehicle_maintenance` (`id`, `vehicle_id`, `amount`, `description`, `created_at`) VALUES
(1, 33, 45, 'dgddffhfhfhfhff', '2022-03-29 16:31:17'),
(2, 33, 45, 'dgddffhfhfhfhff', '2022-03-29 16:31:20'),
(3, 33, 44, 'aaasaassa', '2022-03-29 16:32:34'),
(4, 33, 44, 'aaasaassa', '2022-03-29 16:35:07'),
(5, 36, 353, 'h i', '2022-03-29 16:35:31'),
(6, 37, 45, 'ff', '2022-03-29 16:36:56'),
(7, 26, 0, 'dgdg', '2022-03-29 16:37:39'),
(8, 26, 0, 'dgdg', '2022-03-29 16:38:56'),
(9, 26, 0, 'dgdg', '2022-03-29 16:45:16'),
(10, 33, 1, 'no', '2022-03-29 16:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `name`, `created_at`) VALUES
(1, 'truck', '2022-03-24 20:29:46'),
(2, '$name', '2022-03-25 05:38:04'),
(3, 'sahil', '2022-03-25 05:40:42'),
(4, 'sahil', '2022-03-25 05:40:52'),
(5, 'ANIME SQUAD TOURNAMENT', '2022-03-25 05:43:56'),
(6, 'fdh', '2022-03-25 05:45:14'),
(7, 'fdh', '2022-03-25 05:51:26'),
(8, 'kaushal', '2022-03-25 05:51:45'),
(9, 'ANIME SQUAD TOURNAMENT', '2022-03-25 05:54:53'),
(10, 'truck', '2022-03-25 05:56:05'),
(11, 'car', '2022-03-25 06:13:22'),
(12, 'bus', '2022-03-25 20:05:58'),
(13, 'cng', '2022-03-25 20:13:29'),
(14, 'cng', '2022-03-26 04:06:13'),
(15, 'car', '2022-03-26 04:08:13'),
(16, 'fdh', '2022-03-26 04:24:41'),
(17, 'train', '2022-03-27 00:51:28'),
(18, 'car', '2022-03-27 03:41:54'),
(19, 'sahil', '2022-03-27 22:24:26'),
(20, 'cng', '2022-03-29 15:50:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_login`
--
ALTER TABLE `db_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `vehical_id` (`vehical_type_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_ibfk_1` (`staff_type_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `staff_type`
--
ALTER TABLE `staff_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_ibfk_1` (`vehicle_type_id`);

--
-- Indexes for table `vehicle_maintenance`
--
ALTER TABLE `vehicle_maintenance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehical_id` (`vehicle_id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `db_login`
--
ALTER TABLE `db_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `staff_type`
--
ALTER TABLE `staff_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `vehicle_maintenance`
--
ALTER TABLE `vehicle_maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`staff_type_id`) REFERENCES `staff_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `db_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`vehicle_type_id`) REFERENCES `vehicle_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle_maintenance`
--
ALTER TABLE `vehicle_maintenance`
  ADD CONSTRAINT `vehical_id` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
