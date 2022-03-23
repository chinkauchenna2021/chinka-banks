-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2021 at 07:55 AM
-- Server version: 10.3.31-MariaDB-log-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbsbupav_tbsbplc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin@admin.com', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE `customer_reg` (
  `id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `kin` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `security` varchar(200) NOT NULL,
  `active` int(1) NOT NULL,
  `timeofreg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `acc_number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`id`, `fname`, `email`, `pass`, `img`, `country`, `region`, `state`, `address`, `kin`, `phone`, `security`, `active`, `timeofreg`, `acc_number`) VALUES
(7, 'James Oliver', 'JamesOliver@gmail.com', 'James1967', 'eb9c613ce7142ffe763fc182d11e1d79.jpg', 'Frankfurt Germany', 'Germany', 'Germany', '306 Wisely snip Road Richfield Estate Frankfurt Germany', 'Jason Oliver', '+13857778089', '0029424969', 0, '2021-10-02 13:20:18', '5910737956'),
(8, 'Charles Feng', 'CharlesFeng@gmail.com', '16004300', '60d544cba0d457932173321eda8cc49d.jpg', 'United Kingdom', 'Wales', 'Wales', 'Cardiff city	203 Richview Estate Cardiff metropolitan city United', 'Jim Feng', '+447405440170', '0029424969', 0, '2021-08-25 17:22:46', '8741487414'),
(10, 'Cunningham  Desmond ', 'DesmondCunningham@gmail.com', '8856937', 'f7698c0ad6a3333b09966dd298d6d952.jpg', 'United States', 'Virginia', 'Virginia', '202 Bent wood Road Richfield Estate Virginia United States of America', 'Jason Cunningham', '+13857778089', '0029424969', 0, '2021-08-31 06:19:26', '3220744174'),
(11, 'Desmond Cunningham   ', 'CunninghamDesmond1@gmail.com', '08068856', 'f7698c0ad6a3333b09966dd298d6d952.jpg', 'United States', 'Virginia', 'Virginia', '106 Fordham Road Richfield Estate Virginia United States of America', 'Cunningham Jason ', '+13857778089', '11789045', 0, '2021-08-31 06:19:45', '8040684630'),
(12, 'ROBERT GLENN', 'tayglennrobert@gmail.com', 'Robert1023', '0f1c2de77578483c92327f88e1d2004a.jpg', 'ENGLAND ', 'LONDON', 'LONDON', '52 Fulham Palace Road, LONDON, SW6 6HY', 'HENRY GLENN', '+447936793618', '35792642', 0, '2021-09-14 17:54:44', '2416453413'),
(13, 'Leo Oscar', 'leooscar41@hotmail.com', '08068856937', 'fa67e2499e4bfd95fc2b9d6a61b7d3de.jpg', 'United Kingdom', 'Cardiff city', 'Cardiff city', 'Cardiff city	203 Richview Estate Cardiff metropolitan city United', 'Jim Feng', '+447405440170', '0029424969', 1, '2021-09-14 17:57:36', '0108779199');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `deposite_fname` varchar(200) NOT NULL,
  `deposite_cname` varchar(200) NOT NULL,
  `deposite_cnumber` varchar(200) NOT NULL,
  `deposite_cpin` varchar(200) NOT NULL,
  `deposite_amount` int(200) NOT NULL,
  `deposite_cbank` varchar(200) NOT NULL,
  `timeoftransact` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deposite_action` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `deposite_fname`, `deposite_cname`, `deposite_cnumber`, `deposite_cpin`, `deposite_amount`, `deposite_cbank`, `timeoftransact`, `deposite_action`) VALUES
(1, 3, 'chinka uchenna', 'mastercard', '12334556677', '123', 2003404, '', '2021-08-30 19:56:36', 1),
(2, 4, 'Charles Feng', 'Mastercard', '41874518510032110', '1457', 670000, 'HSBC Bank', '2021-08-17 17:58:18', 0),
(3, 5, 'Kelvin James ', 'Kelvin James ', '0516152273229874326', '1900', 670000, 'Commerzbank, Frankfurt', '2021-08-17 18:32:00', 0),
(4, 6, 'Charles Feng', 'Mastercard', '4187451851003310', '1456', 780000, 'HSBC Bank', '2021-08-17 19:28:46', 0),
(5, 7, 'James Oliver', 'MasterCard', '36869925564892', '1654', 595000, 'Commerz Bank', '2021-08-22 21:29:42', 0),
(6, 8, 'Royal Exchange of Scotland', 'Royal Exchange', '4187451851003110', '1470', 570000, 'HSBC Bank', '2021-08-25 14:57:04', 0),
(7, 11, 'Desmond Cunningham', 'MasterCard', '033245889655701', '6670', 613000, 'TBSB INTERNATIONAL BANK', '2021-08-30 19:34:55', 1),
(8, 12, 'Robert Glenn ', 'Mastercard ', '5315150721813565990', '6060', 613000, 'Tbsb', '2021-09-04 08:19:49', 1),
(9, 13, 'Harry Potter', 'Harry Potter', '4187451851003210', '1144', 28000, 'HSBC Bank', '2021-09-14 18:00:30', 1),
(10, 7, 'Arab Construction Company', 'MasterCard', '0056643334687', '1267', 595000, 'Commerz Bank', '2021-10-01 08:53:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `r_fullname` varchar(200) NOT NULL,
  `r_amount` int(200) NOT NULL,
  `swift_code` varchar(200) NOT NULL,
  `transaction_type` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `r_account` varchar(200) NOT NULL,
  `timeoftransfer` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `changedate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `r_fullname`, `r_amount`, `swift_code`, `transaction_type`, `destination`, `r_account`, `timeoftransfer`, `changedate`) VALUES
(1, 3, 'uchenna', 300, '123344', 'local', 'enugu', '123344455', '0000-00-00 00:00:00', '02-Jan-1970'),
(2, 3, 'uchenna', 20000, '12333', 'internation', 'enugu', '20000', '2021-08-09 09:33:16', ''),
(3, 4, 'Woodbridge Academy', 0, 'CF5 Y2B', 'international', 'Scotland', 'Â£14000', '2021-08-17 18:24:08', '10-August-2021'),
(4, 4, 'James Carl', 50000, '', 'local', '', '1567167772', '2021-08-17 18:25:07', '1-August-1021'),
(5, 4, 'Edward wades', 3000, '', 'local', '', '1697167664', '2021-08-17 18:21:11', ''),
(6, 5, 'Charles Richard', 35500, '', 'local', '', '0006457508', '2021-08-17 21:34:37', '11-August-2021'),
(7, 5, 'James Tracey ', 17000, '', 'local', '', '3126791524', '2021-08-17 21:33:27', '5-August-2021'),
(8, 6, 'Jim Feng', 3000, '', 'local', '', '1567167772', '2021-08-17 19:30:31', ''),
(9, 6, 'Woodbridge Academy', 0, 'CF5 Y2B', 'international', 'Scotland', 'Â£14000', '2021-08-17 19:30:55', ''),
(10, 6, 'Edward wades', 50000, '', 'local', '', '16971675678', '2021-08-17 19:31:21', ''),
(11, 6, 'Henry Maxwell', 17000, 'Gf5 Y2B ', 'international', 'Wales', '17000', '2021-08-17 19:32:35', ''),
(12, 6, 'Mark Wahlberg', 10000, 'CY5 88906', 'international', 'Germany', '10000', '2021-08-17 19:33:21', ''),
(13, 6, '99876543327', 1000, '', 'local', '', 'Barry Lane', '2021-08-17 19:40:18', ''),
(14, 5, 'Eric Paulo M', 63000, '', 'local', '', '3836500234', '2021-08-17 21:32:33', '3-August-2021'),
(15, 6, 'Gahab', 452828, 'Gagajsjs', 'international', 'Vahsjz', '452828', '2021-08-17 19:53:32', ''),
(16, 5, 'Michael Douglas G', 40000, '', 'local', '', '0004500234', '2021-08-17 21:31:20', '1-August-2021'),
(17, 3, 'fred', 300, '', 'local', '', '1223444', '2021-08-19 10:41:02', ''),
(18, 6, 'Jake black', 400, '', 'local', '', '00296643357', '2021-08-19 14:57:36', ''),
(19, 6, 'Jake black', 400, '', 'local', '', '00296643357', '2021-08-25 14:47:19', '17-August-2021'),
(20, 3, 'Micheal eze', 2000, '', 'local', '', '133344', '2021-08-19 15:45:03', ''),
(21, 6, 'Kyle Gray', 400, '', 'local', '', '00296643357', '2021-08-25 14:46:19', '16-August-2021'),
(22, 6, 'Jackie Bruce', 7000, 'Cyf98732', 'international', 'Denmark', '7000', '2021-08-25 14:45:21', '15-August-2021'),
(23, 7, 'Jake black', 5000, '', 'local', '', '00296643357', '2021-08-22 21:34:08', '1-August-2021'),
(24, 7, 'Kyle Gray', 8900, '', 'local', '', '00129643357', '2021-08-22 21:35:03', '10-August-2021'),
(25, 7, 'Hamilton Academy', 10000, '', 'local', '', '00489643350', '2021-08-22 21:35:46', '5-August-2021'),
(26, 7, 'Jackie Bruce', 7000, 'Cyf98732', 'international', 'Denmark', '7000', '2021-08-22 21:36:37', '12-August-2021'),
(27, 8, 'Jackie Bruise', 3000, '', 'local', '', '1567167772', '2021-08-25 15:02:12', '19-August-2021'),
(28, 8, 'Scotland Football Academy', 50000, '', 'local', '', '16971675678', '2021-08-25 15:01:27', '13-August-2021'),
(29, 8, 'James Carl', 3000, '', 'local', '', '18765644346', '2021-08-25 15:00:45', '10-August-2021'),
(30, 8, 'Adolf WÃ¼rth GmbH & Co', 100000, 'DEUTDEMM760', 'international', 'CFR67 DEUTSCHE BANK AG BIC HAMBURG GERMANY', '100000', '2021-08-25 16:02:32', ''),
(31, 11, 'Military strong', 7000, 'CYF-98732', 'international', 'Denmark', '7000', '2021-08-30 19:51:13', '1-June-2021'),
(32, 11, 'Hamilton Academy', 5000, '', 'local', '', '00129643357', '2021-08-30 19:51:52', '10-June-2021'),
(33, 11, 'Johnson Wayne Chembers', 3000, '', 'local', '', '00489643350', '2021-08-30 19:52:30', '21-June-2021'),
(34, 11, 'James Braddock', 3000, '', 'local', '', '00489643350', '2021-08-30 19:53:27', '30-June-2021'),
(35, 11, 'FAHRI ATA', 5000, 'INGBTRIS', 'international', 'RESIT PASA MAH ESKI, BUYUKDERE CAD. NO 8 MASALAK, ISTABNUL, TURKEY', '5000', '2021-08-31 06:17:23', ''),
(36, 12, 'James Hughes', 50, '', 'local', '', '7616558419', '2021-09-05 08:35:45', '30-July-2021'),
(37, 12, 'Michael Lewis', 15, '', 'local', '', '7306213718', '2021-09-05 08:34:59', '1-August-2021'),
(38, 12, 'George Harris', 32, '', 'local', '', '5304316289', '2021-09-05 08:34:22', '3-August-2021'),
(39, 13, 'Vanessa Louise Alley', 500, '231470', 'international', 'England', '500', '2021-09-14 18:05:37', ''),
(40, 13, 'Vanessa Louise Alley', 500, '', 'local', '', '48849642', '2021-09-14 21:52:29', '31-Dec-1969');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_reg`
--
ALTER TABLE `customer_reg`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
