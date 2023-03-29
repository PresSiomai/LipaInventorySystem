-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 06:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lipa_temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_action_log`
--

CREATE TABLE `tbl_action_log` (
  `id` int(10) NOT NULL,
  `author` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `ItemCode` varchar(50) NOT NULL,
  `dateCommitted` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_action_log`
--

INSERT INTO `tbl_action_log` (`id`, `author`, `action`, `itemName`, `ItemCode`, `dateCommitted`) VALUES
(1, 'paulsalcedo', 'ADD I', 'New sample Item', '20220830-161954-02', '2022-08-30 16:24:15'),
(2, 'paulsalcedo', 'ADD I', 'Sample item name 2', '20220830-162415-03', '2022-08-30 16:25:54'),
(3, 'paulsalcedo', 'ADD I', 'New sample Item 2', '20220830-165900-04', '2022-08-30 16:59:55'),
(4, 'paulsalcedo', 'ADD I', 'New sample Item 2', '20220830-165900-04', '2022-08-30 17:00:51'),
(5, 'paulsalcedo', 'ADD ITEM', 'Iphone 17', '20220830-174332-06', '2022-08-30 17:44:07'),
(6, 'paulsalcedo', 'ADD ITEM', 'Item 2 Sample', '20220830-174624-07', '2022-08-30 17:46:48'),
(7, 'paulsalcedo', 'ADD ITEM', 'new jetplane', '20220830-182221-08', '2022-08-30 18:23:53'),
(8, 'paulsalcedo', 'Transfer New Item', 'Sample item name 2', '20220830-162415-03', '2022-08-30 19:54:23'),
(9, 'paulsalcedo', 'Transfer New Item', 'New sample Item 2', '20220830-165900-04', '2022-08-30 19:55:43'),
(10, 'paulsalcedo', 'Transfer New Item', 'New sample Item 2', '20220830-165900-05', '2022-08-30 19:56:31'),
(11, 'paulsalcedo', 'UPDATE', 'Iphone 17', '20220830-174332-06', '2022-09-01 13:42:12'),
(12, 'paulsalcedo', 'UPDATE', 'Iphone 17', '20220830-174332-06', '2022-09-01 13:46:02'),
(13, 'paulsalcedo', 'UPDATE', 'Iphone 17', '20220830-174332-06', '2022-09-01 13:51:17'),
(14, 'paulsalcedo', 'UPDATE', 'Iphone 17', '20220830-174332-06', '2022-09-01 15:19:19'),
(15, 'paulsalcedo', 'UPDATE', 'Iphone 17', '20220830-174332-06', '2022-09-01 15:20:24'),
(16, 'paulsalcedo', 'UPDATE', 'Iphone 17', '20220830-174332-06', '2022-09-01 15:21:54'),
(17, 'paulsalcedo', 'UPDATE', 'Iphone 17', '20220830-174332-06', '2022-09-01 15:24:44'),
(18, 'paulsalcedo', 'Update Item', 'Sample item name', '', '2022-09-01 19:43:55'),
(19, 'paulsalcedo', 'Update Item', 'Sample item name', '', '2022-09-01 19:46:08'),
(20, 'paulsalcedo', 'UPDATE', 'New sample Item 2', '', '2022-09-01 20:24:29'),
(21, 'paulsalcedo', 'UPDATE', 'Sample item name', '', '2022-09-01 20:28:47'),
(22, 'paulsalcedo', 'UPDATE', 'Sample item name 111', '', '2022-09-01 20:28:54'),
(23, 'paulsalcedo', 'UPDATE', 'Sample item name', '', '2022-09-01 20:32:56'),
(24, 'paulsalcedo', 'UPDATE', 'Sample item name11', '', '2022-09-01 20:33:05'),
(25, 'paulsalcedo', 'Transfer New Item', 'Sample item name', '20220814-194256-01', '2022-09-01 20:39:06'),
(26, 'paulsalcedo', 'MARK UNSERVICEABLE', 'Sample item name 2', '', '2022-09-01 21:33:37'),
(27, 'paulsalcedo', 'MARK UNSERVICEABLE', 'Sample item name 2', '', '2022-09-01 21:34:55'),
(28, 'paulsalcedo', 'UPDATE ACHIVE ITEM HISTORY', 'Sample item name 2', '20220830-162415-03', '2022-09-05 10:05:46'),
(29, 'paulsalcedo', 'UPDATE ACHIVE ITEM HISTORY', 'Sample item name 2', '20220830-162415-03', '2022-09-05 10:06:47'),
(30, 'paulsalcedo', 'UPDATE ACHIVE ITEM HISTORY', 'Sample item name 2', '20220830-162415-03', '2022-09-05 10:08:08'),
(31, 'paulsalcedo', 'UPDATE ACHIVE ITEM HISTORY', 'Sample item name 2', '20220830-162415-03', '2022-09-05 10:08:47'),
(32, 'paulsalcedo', 'UPDATE ACHIVE ITEM HISTORY', 'Sample item name 2', '20220830-162415-03', '2022-09-05 10:10:41'),
(33, 'paulsalcedo', 'UPDATE', 'New sample Item 2', '', '2022-09-05 10:13:51'),
(34, 'paulsalcedo', 'UPDATE', 'New sample Item 23', '', '2022-09-05 10:14:01'),
(35, 'paulsalcedo', 'UPDATE ITEM', 'New sample Item 2', '20220830-165900-05', '2022-09-05 10:32:42'),
(36, 'paulsalcedo', 'UPDATE ACHIVE ITEM HISTORY', 'Sample item name 2', '20220830-162415-03', '2022-09-05 10:34:11'),
(37, 'paulsalcedo', 'UPDATE ACHIVE ITEM HISTORY', 'Sample item name 2', '20220830-162415-03', '2022-09-05 10:35:03'),
(38, 'paulsalcedo', 'Update Item', 'Sample item name 12', '20220830-162415-03', '2022-09-05 11:19:27'),
(39, 'paulsalcedo', 'UPDATE ITEM', 'Sample item name', '20220814-194256-01', '2022-09-05 15:46:07'),
(40, 'paulsalcedo', 'MARK UNSERVICEABLE', 'Sample item name 22', '', '2022-09-05 15:46:13'),
(41, 'paulsalcedo', 'ITEM RETRIVE', 'Sample item name 22', '20220814-194256-01', '2022-09-05 15:49:51'),
(42, 'paulsalcedo', 'ADD ITEM', 'New Service Van L300', '20220905-155648-08', '2022-09-05 15:59:12'),
(43, 'paulsalcedo', 'UPDATE', 'New Service Van L300', '20220905-155648-08', '2022-09-05 15:59:42'),
(44, 'paulsalcedo', 'Transfer New Item', 'New Service Van L300 V2', '20220905-155648-08', '2022-09-05 16:00:46'),
(45, 'paulsalcedo', 'Update Item', 'New Service Van L300 V2', '', '2022-09-05 16:01:27'),
(46, 'paulsalcedo', 'Transfer New Item', 'New Service Van L300 V2', '20220905-155648-08', '2022-09-05 16:02:11'),
(47, 'paulsalcedo', 'MARK UNSERVICEABLE', 'New Service Van L300 V2', '', '2022-09-05 16:03:28'),
(48, 'paulsalcedo', 'UPDATE ACHIVE ITEM HISTORY', 'New Service Van L300 V2', '20220905-155648-08', '2022-09-05 16:04:16'),
(49, 'paulsalcedo', 'UPDATE', 'Sample item name 22', '20220814-194256-01', '2022-09-05 16:05:43'),
(50, 'paulsalcedo', 'ITEM RETRIVE', 'New Service Van L300 V3', '20220905-155648-08', '2022-09-05 16:31:50'),
(51, 'paulsalcedo', 'Transfer New Item', 'New Service Van L300 V3', '20220905-155648-08', '2022-09-05 16:32:37'),
(52, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 16:32:52'),
(53, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:17:41'),
(54, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:18:57'),
(55, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:19:12'),
(56, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:20:20'),
(57, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:24:11'),
(58, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:41:22'),
(59, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:41:22'),
(60, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:41:22'),
(61, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:44:27'),
(62, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:44:27'),
(63, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:44:27'),
(64, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:48:38'),
(65, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:48:38'),
(66, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 19:48:38'),
(67, 'paulsalcedo', 'Update Item', 'New Service Van L300 V3', '', '2022-09-05 20:09:00'),
(68, 'paulsalcedo', 'Transfer New Item', 'New Service Van L300 V3', '20220905-155648-08', '2022-09-19 13:45:08'),
(69, 'paulsalcedo', 'Transfer New Item', 'New Service Van L300 V3', '20220905-155648-08', '2022-09-19 13:52:53'),
(70, 'paulsalcedo', 'ADD ITEM', 'iphone 14', '20220919-140546-09', '2022-09-19 14:06:23'),
(71, 'paulsalcedo', 'UPDATE', 'Iphone 14', '20220830-174332-06', '2022-09-19 14:06:51'),
(72, 'paulsalcedo', 'Transfer New Item', 'iphone 14', '20220919-140546-09', '2023-01-16 13:06:02'),
(73, 'paulsalcedo', 'ADD ITEM', 'new item no. 1', '20230116-130819-010', '2023-01-16 13:21:05'),
(74, 'paulsalcedo', 'Transfer New Item', 'new item no. 1', '20230116-130819-010', '2023-01-16 13:23:29'),
(75, 'paulsalcedo', 'Transfer New Item', 'new item no. 1', '20230116-130819-010', '2023-01-28 11:23:10'),
(76, 'paulsalcedo', 'ADD ITEM', 'ssss', '20230128-114416-011', '2023-01-30 18:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_archive`
--

CREATE TABLE `tbl_archive` (
  `id` int(10) NOT NULL,
  `ItemCode` varchar(50) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `PropertyNumber` varchar(25) NOT NULL,
  `Classification` varchar(50) NOT NULL,
  `SourceOfFund` varchar(50) NOT NULL,
  `UnitValue` varchar(25) NOT NULL,
  `DateAcquired` varchar(25) NOT NULL,
  `is_available` varchar(4) NOT NULL DEFAULT '0',
  `is_transferred` varchar(4) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'ARCHIVE',
  `remarks` varchar(50) NOT NULL DEFAULT 'UNSEVICEABLE',
  `dateCreated` varchar(25) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_archive`
--

INSERT INTO `tbl_archive` (`id`, `ItemCode`, `ItemName`, `PropertyNumber`, `Classification`, `SourceOfFund`, `UnitValue`, `DateAcquired`, `is_available`, `is_transferred`, `status`, `remarks`, `dateCreated`) VALUES
(1, '20220830-162415-03', 'Sample item name 12', '12345', 'Sample class', '1 selected', '66321', '2022-08-06', '0', '0', 'ARCHIVE', 'UNSEVICEABLE', '2022-09-01 21:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id` int(10) NOT NULL,
  `ItemCode` varchar(50) NOT NULL,
  `receiverName` varchar(50) NOT NULL,
  `receiverPos` varchar(50) NOT NULL,
  `dateTrans` varchar(25) NOT NULL,
  `dateReceived` varchar(25) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `DateCreated` varchar(25) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`id`, `ItemCode`, `receiverName`, `receiverPos`, `dateTrans`, `dateReceived`, `remarks`, `DateCreated`) VALUES
(1, '20220814-194256-01', 'siomai', 'employee', '2022-08-28', '2022-09-01', 'TRANSFERRED', '2022-08-30 18:42:22'),
(2, '20220830-161954-02', 'Star', 'employee', '2022-08-31', '-----', 'Pending', '2022-08-30 18:47:39'),
(3, '20220830-162415-03', 'siomai', 'employee', '2022-08-17', '2022-09-07', 'TRANSFERRED', '2022-08-30 19:54:23'),
(4, '20220830-165900-04', 'siomai', 'employee', '2022-08-05', '-----', 'Pending', '2022-08-30 19:55:43'),
(5, '20220830-165900-05', 'siomai', 'employee', '2022-08-27', '-----', 'Pending', '2022-08-30 19:56:30'),
(6, '20220814-194256-01', 'Star', 'employee', '2022-09-01', '-----', 'Pending', '2022-09-01 20:39:06'),
(7, '20220905-155648-08', 'Juan Dela Cruz', 'Barangay Captain Brgy 171', '2022-09-04', '2022-09-05', 'TRANSFERRED', '2022-09-05 16:00:46'),
(8, '20220905-155648-08', 'Juan Dela Cruz1', 'Barangay Captain Brgy 171', '2022-09-04', '2022-09-05', 'TRANSFERRED', '2022-09-05 16:02:11'),
(9, '20220905-155648-08', 'Juan Dela Cruz1', 'Barangay Captain Brgy 171', '2022-09-04', '2022-09-05', 'TRANSFERRED', '2022-09-05 16:32:37'),
(10, '20220905-155648-08', 'siomai', 'employee', '2022-09-01', '-----', 'Pending', '2022-09-19 13:45:07'),
(11, '20220905-155648-08', 'siomai', 'employee', '2022-09-14', '-----', 'Pending', '2022-09-19 13:52:52'),
(12, '20220919-140546-09', 'Lenard', 'Supervisor', '2023-01-16', '-----', 'Pending', '2023-01-16 13:06:02'),
(13, '20230116-130819-010', 'Lenard', 'Supervisor', '2023-01-16', '-----', 'Pending', '2023-01-16 13:23:28'),
(14, '20230116-130819-010', 'asdasd', 'asdasdasd', '2023-01-28', '-----', 'Pending', '2023-01-28 11:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `id` int(10) NOT NULL,
  `ItemCode` varchar(50) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `PropertyNumber` varchar(25) NOT NULL,
  `Classification` varchar(50) NOT NULL,
  `SourceOfFund` varchar(50) NOT NULL,
  `UnitValue` varchar(25) NOT NULL,
  `DateAcquired` varchar(25) NOT NULL,
  `is_available` varchar(4) NOT NULL DEFAULT '1',
  `is_transferred` varchar(4) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `dateCreated` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`id`, `ItemCode`, `ItemName`, `PropertyNumber`, `Classification`, `SourceOfFund`, `UnitValue`, `DateAcquired`, `is_available`, `is_transferred`, `status`, `remarks`, `dateCreated`) VALUES
(2, '20220830-161954-02', 'New sample Item', '2221020589', 'New Classification', '1', '12345', '2022-08-03', '0', '1', 'Transfering', 'Waiting for Recieved', '2022-08-30 16:24:14'),
(4, '20220830-165900-04', 'New sample Item 2', '4235812', 'sample classification 2', '2', '66321', '2022-08-13', '0', '1', 'Transfering', 'Waiting to Recieved', '2022-08-30 16:59:55'),
(5, '20220830-165900-05', 'New sample Item 55', '4235812', 'sample classification 2', '2 selected selected selected', '66321', '2022-08-13', '0', '1', 'Transfering', 'Waiting to Recieved', '2022-08-30 17:00:51'),
(6, '20220830-174332-06', 'Iphone 14', '20391-12995-12375', 'Mobile Phone', '2 selected', '170925', '2022-09-19', '1', '0', 'Available', 'New Item', '2022-08-30 17:44:06'),
(7, '20220830-174624-07', 'Item 2 Sample', '123455', 'New Classification', '1', '94846', '2022-08-20', '1', '0', 'Available', 'New Item', '2022-08-30 17:46:48'),
(8, '20220830-182221-08', 'new jetplane', '934712-37712-1', 'Air Transportation', '1', '10449284', '2022-08-18', '1', '0', 'Available', 'New Item', '2022-08-30 18:23:53'),
(9, '20220814-194256-01', 'Sample item name 22', '2221020589', 'Class Sample', '2', '96340', '2022-07-31', '1', '0', '', '', '2022-09-05 15:49:51'),
(11, '20220905-155648-08', 'New Service Van L300 V3', '3219572-123783-1123', 'Service vehicle', '2 selected selected', '1812051', '2022-09-04', '0', '1', 'Transfering', 'Waiting to Recieved', '2022-09-05 16:31:50'),
(12, '20220919-140546-09', 'iphone 14', '12312009', 'Mobile Phone', '2', '70000', '2022-09-18', '0', '1', 'Transfering', 'Waiting to Recieved', '2022-09-19 14:06:22'),
(13, '20230116-130819-010', 'new item no. 1', '1234567', '10705020', '2', '100000', '2023-01-16', '0', '1', 'Transfering', 'Waiting to Recieved', '2023-01-16 13:21:04'),
(14, '20230128-114416-011', 'ssss', 'ssss', 'aasd', '2', '12312321', '2023-01-19', '1', '0', 'Available', 'New Item', '2023-01-30 18:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL,
  `is_active` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `role`, `is_active`) VALUES
(1, 'paulsalcedo', 'siomai', 'developer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_action_log`
--
ALTER TABLE `tbl_action_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_archive`
--
ALTER TABLE `tbl_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_action_log`
--
ALTER TABLE `tbl_action_log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_archive`
--
ALTER TABLE `tbl_archive`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
