-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2021 at 09:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obx_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `to_time` time NOT NULL DEFAULT current_timestamp(),
  `from_time` time DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `user_id`, `status`, `to_time`, `from_time`, `created_on`) VALUES
(7, 1, '1', '00:43:51', NULL, '2021-07-14 00:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `daily_expense`
--

CREATE TABLE `daily_expense` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `budget` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `budget` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `for_announcement`
--

CREATE TABLE `for_announcement` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `id` int(11) NOT NULL,
  `from` varchar(60) NOT NULL,
  `budget` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE `ip` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ip`
--

INSERT INTO `ip` (`id`, `ip_address`, `created_on`) VALUES
(1, '::1', '2021-07-14 01:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `loan_status` enum('0','1') NOT NULL,
  `date_taken` date NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `child` int(11) DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `child`, `created_on`) VALUES
(1, 'Dashboard', '#', NULL, '2021-07-14 12:07:24'),
(2, 'Home', '#', NULL, '2021-07-14 12:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `from_user` int(11) NOT NULL,
  `to_user` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` int(11) NOT NULL,
  `project_status` int(11) NOT NULL,
  `project_deadline` date NOT NULL,
  `project_submit_date` datetime DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_assigned`
--

CREATE TABLE `project_assigned` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `date_of _assigning` date NOT NULL,
  `project_deadline` date NOT NULL,
  `project_status` enum('0','1','2','3','4') NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_comment`
--

CREATE TABLE `project_comment` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fatherName` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `date_of_joining` date NOT NULL,
  `date_of_leaving` date DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fatherName`, `email`, `password`, `contact_number`, `img`, `cnic`, `address`, `date_of_joining`, `date_of_leaving`, `created_on`) VALUES
(1, 'Mazhar Hussain', 'Hazrat hussain', 'maxhar30@gmail.com', '15bb57fac3df3995bdc9627ee4fad880', '03473705871', 'abc', '12345676543234567', 'Peshawar', '2021-07-06', NULL, '2021-07-13 23:59:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_comment`
--
ALTER TABLE `project_comment`
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
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip`
--
ALTER TABLE `ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_comment`
--
ALTER TABLE `project_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
