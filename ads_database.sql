-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 05:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ads`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `user_type`) VALUES
(1, 'A4L ACADEMY', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `adplay`
--

CREATE TABLE `adplay` (
  `id` bigint(11) NOT NULL,
  `device_id` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL,
  `count` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `adTitle` varchar(255) NOT NULL,
  `adType` varchar(255) NOT NULL,
  `adDuration` int(11) NOT NULL,
  `add_locations` varchar(255) NOT NULL,
  `isLiveEnabled` varchar(255) NOT NULL,
  `imageDisplayDurationsplit` varchar(255) NOT NULL COMMENT '1-yes,2-no',
  `imageDisplayDuration` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(11) NOT NULL COMMENT '1-pending,2-active,3-inactive',
  `updated_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `adFile` text NOT NULL,
  `lshapedright` varchar(255) NOT NULL,
  `lshapedbottom` varchar(255) NOT NULL,
  `lshapedleft` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `devices_id` int(11) NOT NULL,
  `franchise_id` int(11) NOT NULL,
  `adCategory` varchar(255) NOT NULL,
  `isEnableStartEndDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `adTitle`, `adType`, `adDuration`, `add_locations`, `isLiveEnabled`, `imageDisplayDurationsplit`, `imageDisplayDuration`, `created_date`, `status`, `updated_date`, `user_id`, `adFile`, `lshapedright`, `lshapedbottom`, `lshapedleft`, `start_date`, `end_date`, `devices_id`, `franchise_id`, `adCategory`, `isEnableStartEndDate`) VALUES
(31, 'baba', 'video', 120, 'pnp', 'true', 'false', 0, '2019-06-29 16:16:35', 2, '2019-06-29 16:16:56', 0, 'fa50065885b0929f294b1b6cb1b82d38.mp4', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 0, '', ''),
(32, 'baba33333', 'image', 30, 'pnp', 'true', 'false', 0, '2019-06-29 16:17:32', 2, '0000-00-00 00:00:00', 0, 'f0ca7a39cce8ffdaa21cdfb854c2b30a.jpg', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 0, '', ''),
(33, 'mmmmm', 'video', 30, 'pnp', 'true', 'false', 0, '2019-06-29 16:18:24', 2, '0000-00-00 00:00:00', 0, '0fe11a74f97159c0415ba88ef31ca213.mp4', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 0, '', ''),
(34, 'kk', 'video', 60, 'pnp', 'true', 'false', 0, '2019-06-29 16:19:30', 2, '0000-00-00 00:00:00', 0, '54298591a61d58f501d195fd358ab938.mp4', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 0, '', ''),
(84, 'test1', 'video', 20, 'pnp', 'true', 'false', 0, '2019-07-28 10:00:51', 2, '2019-07-28 10:01:49', 2, 'ce79dbc19b8ff524ff1fefa0ecd0d316.mp4', '', '', '', '2019-07-27 09:55:11', '2019-07-11 09:30:11', 12, 0, '', ''),
(85, 'pnp testing45', 'video', 50, 'pedanandipadu', 'true', 'false', 0, '2019-07-29 18:20:07', 2, '2019-07-30 14:26:52', 3, 'd43e60bc46a558dd7b722bba8be19766.mp4', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 0, '', ''),
(86, 'pnp testing 5', 'video', 10, 'pedanandipadu', 'true', 'false', 0, '2019-07-29 19:10:35', 2, '2019-07-30 14:25:42', 4, 'c1d148edaf41f955be9b1b78a4f0908d.mp4', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 0, '', ''),
(87, 'pnp testing 2', 'video', 15, 'pedanandipadu', 'true', 'false', 0, '2019-07-29 19:12:17', 2, '2019-07-30 13:59:22', 5, '03e2a50f5ef64d7e69340857534f6516.mp4', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 0, '', ''),
(88, '4k1 pnp1', 'video', 0, '', 'true', 'false', 0, '2019-07-30 18:01:15', 2, '2019-07-31 12:07:22', 6, 'a62506b47fea87cc4881fad3c21716d3.mp4', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', 'no'),
(89, 'pnp 4k211', 'video', 0, '', 'true', 'false', 0, '2019-07-30 18:07:03', 2, '2019-08-04 11:27:10', 7, '0168afff6205bc14a9bb8241b95ddeb9.mp4', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', 'no'),
(91, 'new 4k', 'video', 0, '', 'true', 'false', 0, '2019-07-31 16:24:42', 2, '2019-08-04 11:26:50', 9, 'affe949173167b432f91f39818f9aeac.mp4', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', 'no'),
(95, 'apnnadds 1', 'image', 30, '', 'true', 'false', 0, '2019-08-02 09:29:59', 2, '0000-00-00 00:00:00', 0, '3b8a68f28eadb5975d4506cd2ee2cee2.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', 'no'),
(96, 'apnn adds 2', 'image', 30, '', 'true', 'false', 0, '2019-08-02 09:30:49', 2, '0000-00-00 00:00:00', 0, '30d1de3e7177cda4a848ea22cb3817ba.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', 'no'),
(97, 'apnn adds 3', 'image', 30, '', 'true', 'false', 0, '2019-08-02 09:31:47', 2, '0000-00-00 00:00:00', 0, 'dddb0e2a233c891d19452b16ef15d462.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', 'no'),
(98, 'ad-18092019', 'image', 30, '', 'true', 'false', 0, '2019-09-18 21:26:28', 2, '0000-00-00 00:00:00', 0, '053da49e9c78b9bec4f7fa00c0c60b56.jpg', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 6, '', 'no'),
(99, 'ad-18092019/1', 'image', 35, '', 'true', 'false', 0, '2019-09-18 21:35:06', 2, '0000-00-00 00:00:00', 0, '1c5a1b11d0c9a6759c83c04abb93c46e.jpg', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 6, '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `ad_selected_devices`
--

CREATE TABLE `ad_selected_devices` (
  `id` bigint(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `devices_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `expiry_date` datetime NOT NULL,
  `status` int(11) NOT NULL COMMENT '1-pending,2-active,3-inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_selected_devices`
--

INSERT INTO `ad_selected_devices` (`id`, `ad_id`, `devices_id`, `service_id`, `expiry_date`, `status`) VALUES
(12, 90, 16, 0, '0000-00-00 00:00:00', 2),
(13, 90, 14, 0, '0000-00-00 00:00:00', 2),
(14, 90, 1, 0, '0000-00-00 00:00:00', 2),
(27, 88, 16, 0, '0000-00-00 00:00:00', 2),
(28, 88, 14, 0, '0000-00-00 00:00:00', 2),
(29, 88, 1, 0, '0000-00-00 00:00:00', 2),
(39, 93, 16, 0, '0000-00-00 00:00:00', 2),
(40, 94, 14, 0, '0000-00-00 00:00:00', 2),
(41, 92, 17, 0, '0000-00-00 00:00:00', 2),
(42, 92, 16, 0, '0000-00-00 00:00:00', 2),
(43, 92, 14, 0, '0000-00-00 00:00:00', 2),
(44, 92, 1, 0, '0000-00-00 00:00:00', 2),
(49, 95, 17, 0, '0000-00-00 00:00:00', 2),
(50, 95, 16, 0, '0000-00-00 00:00:00', 2),
(51, 95, 14, 0, '0000-00-00 00:00:00', 2),
(52, 95, 1, 0, '0000-00-00 00:00:00', 2),
(53, 96, 17, 0, '0000-00-00 00:00:00', 2),
(54, 96, 16, 0, '0000-00-00 00:00:00', 2),
(55, 96, 14, 0, '0000-00-00 00:00:00', 2),
(56, 96, 1, 0, '0000-00-00 00:00:00', 2),
(57, 97, 17, 0, '0000-00-00 00:00:00', 2),
(58, 97, 16, 0, '0000-00-00 00:00:00', 2),
(59, 97, 14, 0, '0000-00-00 00:00:00', 2),
(60, 97, 1, 0, '0000-00-00 00:00:00', 2),
(61, 91, 18, 0, '0000-00-00 00:00:00', 2),
(62, 91, 17, 0, '0000-00-00 00:00:00', 2),
(63, 91, 16, 0, '0000-00-00 00:00:00', 2),
(64, 91, 14, 0, '0000-00-00 00:00:00', 2),
(65, 91, 1, 0, '0000-00-00 00:00:00', 2),
(66, 89, 18, 0, '0000-00-00 00:00:00', 2),
(67, 89, 17, 0, '0000-00-00 00:00:00', 2),
(68, 89, 16, 0, '0000-00-00 00:00:00', 2),
(69, 89, 14, 0, '0000-00-00 00:00:00', 2),
(70, 89, 1, 0, '0000-00-00 00:00:00', 2),
(71, 98, 18, 0, '2019-09-18 21:26:28', 2),
(72, 98, 16, 0, '2019-09-18 21:26:28', 2),
(73, 99, 18, 2, '2019-10-18 21:35:06', 2),
(74, 99, 16, 1, '2019-10-18 21:35:06', 2),
(75, 99, 14, 2, '2019-10-18 21:35:06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `device_id` text NOT NULL,
  `franchise_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_location` varchar(255) NOT NULL,
  `lastCommunicareTime` datetime NOT NULL,
  `devicereboot` varchar(255) NOT NULL DEFAULT 'no',
  `devicerestart` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_id`, `franchise_id`, `created_date`, `updated_date`, `status`, `device_name`, `device_location`, `lastCommunicareTime`, `devicereboot`, `devicerestart`) VALUES
(1, 'EMULATOR29X0X11X0', 0, '2019-06-28 21:31:18', '2019-07-13 19:05:25', 'active', 'Ramaraj Device', 'hyd', '2019-07-14 10:42:08', 'no', 'no'),
(14, 'nani1', 6, '2019-07-29 18:08:31', '2019-07-29 18:16:22', 'active', 'Nani mobile1', 'Hyd', '0000-00-00 00:00:00', 'no', 'no'),
(16, 'pedanandipadu0001', 6, '2019-07-30 17:55:09', '2019-07-30 17:55:51', 'active', 'pedanandipadu testing', 'pedanandipadu', '0000-00-00 00:00:00', 'no', 'no'),
(17, 'TEST_BOX', 6, '2019-08-01 22:50:24', '2019-08-01 22:52:59', 'active', 'Raju test', 'Hyd', '0000-00-00 00:00:00', 'no', 'no'),
(18, 'testing h', 6, '2019-08-04 11:23:07', '2019-08-05 15:12:04', 'active', 'kiran testing house', 'pnp', '0000-00-00 00:00:00', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `franchise_selected_services`
--

CREATE TABLE `franchise_selected_services` (
  `id` int(11) NOT NULL,
  `franchise_id` int(11) NOT NULL COMMENT 'users table id',
  `service_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `franchise_selected_services`
--

INSERT INTO `franchise_selected_services` (`id`, `franchise_id`, `service_id`, `created_date`) VALUES
(3, 6, 1, '2019-08-24 23:14:59'),
(4, 6, 2, '2019-08-24 23:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) NOT NULL,
  `invoicename` varchar(255) NOT NULL,
  `invoice_type` int(11) NOT NULL COMMENT '1-proforma invoice,2-invoice',
  `ad_id` int(11) NOT NULL,
  `device_id` int(11) NOT NULL,
  `user_id` varchar(220) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `planamount` float(10,2) NOT NULL,
  `beforetaxamount` float(10,2) NOT NULL,
  `taxamount` float(10,2) NOT NULL,
  `amount` float NOT NULL,
  `paid_amount` double NOT NULL,
  `pending_amount` double NOT NULL,
  `period_start` datetime NOT NULL,
  `period_end` datetime NOT NULL,
  `franchise_id` int(11) NOT NULL,
  `tax_amount` float(10,2) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1-unpaid,2-partially paid,3-paid',
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `icon` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1-active,2-inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_name`, `icon`, `status`) VALUES
(1, 'Admin Users', '', 1),
(2, 'Administration', '', 1),
(3, 'Ads Info', '', 1),
(4, 'Devices', '', 1),
(5, 'Franchise', '', 1),
(6, 'Services', '', 1),
(7, 'Users', '', 1),
(8, 'Roles', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module_pages`
--

CREATE TABLE `module_pages` (
  `id` int(11) NOT NULL,
  `modules_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1-active,2-in active',
  `page_action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_pages`
--

INSERT INTO `module_pages` (`id`, `modules_id`, `page_name`, `status`, `page_action`) VALUES
(1, 1, 'Add Admin Users', 1, 'createAdminUser'),
(2, 1, 'View Admin Users', 1, 'viewAdminUser'),
(3, 2, 'Configuration Properties', 1, 'serverrefreshtime'),
(4, 3, 'Add Ads', 1, 'addads'),
(5, 3, 'View Ads', 1, 'viewads'),
(6, 4, 'Add Devices', 1, 'adddevice'),
(7, 4, 'View Devices', 1, 'viewDevices'),
(8, 5, 'Add Franchise', 1, 'franchise'),
(9, 5, 'View Franchises', 1, 'viewfranchises'),
(10, 6, 'Add service', 1, 'service'),
(11, 6, 'View services', 1, 'viewservices'),
(12, 7, 'View Users', 1, 'viewUsers'),
(13, 8, 'Add Roles', 1, 'addroles'),
(14, 8, 'View Roles', 1, 'listroles');

-- --------------------------------------------------------

--
-- Table structure for table `module_role`
--

CREATE TABLE `module_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1-pending,2-accepted,3-rejected'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `serverrefreshtime` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1-active,2-inactive',
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `isBottom` varchar(255) NOT NULL,
  `isTop` varchar(255) NOT NULL,
  `isLeft` varchar(255) NOT NULL,
  `isRight` varchar(255) NOT NULL,
  `isFifty` varchar(255) NOT NULL,
  `isTwentyFive` varchar(255) NOT NULL,
  `isLshape` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `serverrefreshtime`, `status`, `created_date`, `updated_date`, `isBottom`, `isTop`, `isLeft`, `isRight`, `isFifty`, `isTwentyFive`, `isLshape`) VALUES
(1, 5, 1, '2019-06-16 12:34:42', '2019-07-31 18:14:23', 'true', 'true', 'true', 'true', 'true', 'true', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `role_selected_module`
--

CREATE TABLE `role_selected_module` (
  `id` int(11) NOT NULL,
  `module_role_id` int(11) NOT NULL,
  `modules_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role_selected_module_pages`
--

CREATE TABLE `role_selected_module_pages` (
  `id` int(11) NOT NULL,
  `module_role_id` int(11) NOT NULL,
  `modules_id` int(11) NOT NULL,
  `module_pages_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `servicename` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `unittype` int(11) NOT NULL COMMENT '1-days,2-months',
  `unit` int(11) NOT NULL,
  `enabletax` int(11) NOT NULL COMMENT '1-yes,2-no',
  `taxtype` int(11) NOT NULL COMMENT '1-gst,2-igst',
  `taxmode` int(11) NOT NULL COMMENT '1-inclusive,2-exclusive',
  `status` int(11) NOT NULL COMMENT '1-active,2-inactive',
  `createdby` int(11) NOT NULL,
  `franchise_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `servicename`, `price`, `unittype`, `unit`, `enabletax`, `taxtype`, `taxmode`, `status`, `createdby`, `franchise_id`, `created_date`, `updated_date`) VALUES
(1, 'Special Pack', 3500.00, 1, 30, 1, 1, 1, 1, 1, 0, '2019-08-24 13:18:38', '2019-08-24 14:17:51'),
(2, 'Gold-Pack', 5000.00, 2, 1, 1, 2, 2, 1, 1, 0, '2019-08-24 14:30:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1-adminuser,2-user,3-franchise',
  `status` int(11) NOT NULL COMMENT '1-pending,2-active,2-inactive',
  `franchiselocation` varchar(255) NOT NULL,
  `franchisename` varchar(255) NOT NULL,
  `ipaddress` text NOT NULL,
  `logo` text NOT NULL,
  `module_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `mobile`, `username`, `password`, `address`, `city`, `state`, `zip`, `country`, `created_date`, `updated_date`, `user_type`, `status`, `franchiselocation`, `franchisename`, `ipaddress`, `logo`, `module_role_id`) VALUES
(6, 'krishna', 'technologies', 'kt@tech.com', 1231234567, 'krishnatech', '', 'hyderabad', 'hyderabad', 'telangana', 345123, 'india', '2019-08-24 17:36:25', '2019-08-24 23:14:58', 3, 3, 'hyderabad', 'krishna technologies', '167.71.239.21:2211', '77bbff860fa56e24129b39a62bcbde7c.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adplay`
--
ALTER TABLE `adplay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_selected_devices`
--
ALTER TABLE `ad_selected_devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchise_selected_services`
--
ALTER TABLE `franchise_selected_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_pages`
--
ALTER TABLE `module_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_role`
--
ALTER TABLE `module_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_selected_module`
--
ALTER TABLE `role_selected_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_selected_module_pages`
--
ALTER TABLE `role_selected_module_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adplay`
--
ALTER TABLE `adplay`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `ad_selected_devices`
--
ALTER TABLE `ad_selected_devices`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `franchise_selected_services`
--
ALTER TABLE `franchise_selected_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `module_pages`
--
ALTER TABLE `module_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `module_role`
--
ALTER TABLE `module_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_selected_module`
--
ALTER TABLE `role_selected_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_selected_module_pages`
--
ALTER TABLE `role_selected_module_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
