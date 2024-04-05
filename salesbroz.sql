-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 01:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salesbroz`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `brand` varchar(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `type`, `city`, `brand`, `date`) VALUES
(1, 'Rahul', '123432343', 'Customer', 'Bhopal', '', '2024-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_data`
--

CREATE TABLE `invoice_data` (
  `invoice_id` int(11) NOT NULL,
  `series_no` varchar(225) NOT NULL,
  `challan_no` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `terms_condition` text NOT NULL,
  `account_holder_name` varchar(225) NOT NULL,
  `account_no` varchar(225) NOT NULL,
  `ifsc_code` varchar(225) NOT NULL,
  `Bank_name` varchar(225) NOT NULL,
  `Branch_name` varchar(225) NOT NULL,
  `upi_id` varchar(225) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice_data`
--

INSERT INTO `invoice_data` (`invoice_id`, `series_no`, `challan_no`, `phone`, `email`, `terms_condition`, `account_holder_name`, `account_no`, `ifsc_code`, `Bank_name`, `Branch_name`, `upi_id`, `create_at`, `update_at`) VALUES
(1, 'guyfsdf34', 'xcvxdfg544', '1234567890', 'kashi@gmail.com', 'N/N Net-X Days: The “N” and “X” stand for numbers, and N/N Net-X days refer to payment deadlines and discounts. For example, if it would say 2/5 Net-20 days, it means you\'re expecting payment within 20 days, but if the client processes payment within 5 days, you\'ll give them a 2% discount on the entire invoice amount.', 'sdfds', '3243rew', 'er34re', 'erwerw', 'ewsde', 'edrew4', '2024-04-06 04:04:41', '2024-04-06 04:04:41'),
(2, 'guyfsdf34', 'xcvxdfg544', '1212121212', 'kashi@gmail.com', 'N/N Net-X Days: The “N” and “X” stand for numbers, and N/N Net-X days refer to payment deadlines and discounts. For example, if it would say 2/5 Net-20 days, it means you\'re expecting payment within 20 days, but if the client processes payment within 5 days, you\'ll give them a 2% discount on the entire invoice amount.', 'sdfds', '3243rew', 'er34re', 'erwerw', 'ewsde', 'edrew4', '2024-04-06 04:07:34', '2024-04-06 04:07:34'),
(3, 'guyfsdf34', 'xcvxdfg544', '1234567890', 'rishikachourey2001@gmail.com', 'N/N Net-X Days: The “N” and “X” stand for numbers, and N/N Net-X days refer to payment deadlines and discounts. For example, if it would say 2/5 Net-20 days, it means you\'re expecting payment within 20 days, but if the client processes payment within 5 days, you\'ll give them a 2% discount on the entire invoice amount.', 'sdfds', '3243rew', 'er34re', 'erwerw', 'ewsde', 'edrew4', '2024-04-06 04:09:58', '2024-04-06 04:09:58'),
(4, 'guyfsdf34', 'xcvxdfg544', '1234567890', 'roshi@gmail.com', 'N/N Net-X Days: The “N” and “X” stand for numbers, and N/N Net-X days refer to payment deadlines and discounts. For example, if it would say 2/5 Net-20 days, it means you\'re expecting payment within 20 days, but if the client processes payment within 5 days, you\'ll give them a 2% discount on the entire invoice amount.', 'sdfds', '3243rew', 'er34re', 'erwerw', 'ewsde', 'edrew4', '2024-04-06 04:11:17', '2024-04-06 04:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_invoice`
--

CREATE TABLE `purchase_invoice` (
  `vendor_id` int(11) NOT NULL,
  `v_name` varchar(225) NOT NULL,
  `v_phone` varchar(225) NOT NULL,
  `bill_no` varchar(225) NOT NULL,
  `v_amount` varchar(225) NOT NULL,
  `paid` varchar(225) NOT NULL,
  `pending_amount` varchar(225) NOT NULL,
  `pay_mode` varchar(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_invoice`
--

INSERT INTO `purchase_invoice` (`vendor_id`, `v_name`, `v_phone`, `bill_no`, `v_amount`, `paid`, `pending_amount`, `pay_mode`, `date`) VALUES
(1, 'Kashi ', '1234567890', '2204ADYM', '8900', 'No', '6000', 'Online', '2024-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `sale_invoice`
--

CREATE TABLE `sale_invoice` (
  `customer_id` int(20) NOT NULL,
  `c_name` varchar(225) NOT NULL,
  `c_phone` varchar(225) NOT NULL,
  `invoice_no` varchar(225) NOT NULL,
  `c_amount` varchar(225) NOT NULL,
  `c_paid` varchar(225) NOT NULL,
  `pending_amount` varchar(225) NOT NULL,
  `pay_mode` varchar(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale_invoice`
--

INSERT INTO `sale_invoice` (`customer_id`, `c_name`, `c_phone`, `invoice_no`, `c_amount`, `c_paid`, `pending_amount`, `pay_mode`, `date`) VALUES
(1, 'Ajay Chouhan', '1234567898', 'MYDKN/001/20-21', '26000', 'yes', '0', 'Cash', '2024-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(224) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `password`) VALUES
(1, 'rishika', '1234567890', '123'),
(5, 'kashi', '1234567898', '123'),
(6, 'vasu', '2345676543', '123'),
(7, 'rohit', '5454345432', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_data`
--
ALTER TABLE `invoice_data`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `purchase_invoice`
--
ALTER TABLE `purchase_invoice`
  ADD PRIMARY KEY (`vendor_id`),
  ADD UNIQUE KEY `v_phone` (`v_phone`);

--
-- Indexes for table `sale_invoice`
--
ALTER TABLE `sale_invoice`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `c_phone` (`c_phone`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_data`
--
ALTER TABLE `invoice_data`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase_invoice`
--
ALTER TABLE `purchase_invoice`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sale_invoice`
--
ALTER TABLE `sale_invoice`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
