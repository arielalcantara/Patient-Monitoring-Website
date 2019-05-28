-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 09:07 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkup_sessions`
--

CREATE TABLE `checkup_sessions` (
  `session_id` int(9) NOT NULL,
  `user_id` int(9) DEFAULT NULL,
  `client_id` int(9) DEFAULT NULL,
  `staff_id` int(5) DEFAULT NULL,
  `session_date` varchar(10) DEFAULT NULL,
  `height` tinyint(3) DEFAULT NULL,
  `weight` tinyint(3) DEFAULT NULL,
  `temp` decimal(3,1) DEFAULT NULL,
  `heart_rate` tinyint(3) DEFAULT NULL,
  `bp` varchar(7) DEFAULT NULL,
  `diagnosis` text,
  `medications` text,
  `services_due` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkup_sessions`
--

INSERT INTO `checkup_sessions` (`session_id`, `user_id`, `client_id`, `staff_id`, `session_date`, `height`, `weight`, `temp`, `heart_rate`, `bp`, `diagnosis`, `medications`, `services_due`) VALUES
(1, 2, 1, 1, '12/21/2018', 127, 127, '37.0', 72, '121/83', 'DIABETES MELLITUS (ICD-250.)', 'HUMULIN INJ 70/30 (INSULIN REG & ISOPHANE (HUMAN)) 20 units ac breakfast\r\nLast Refill: #600 u x 0.', 'BP DIASTOLIC, BP SYSTOLIC, FLU VAX, PNEUMOVAX, MICROALB URN, FLU VAX, BP DIASTOLIC, BP SYSTOLIC, DIAB FOOT CK, ALBUMIN URIN, TSH, CHOLESTEROL, HGBA1C, CREATININE.'),
(2, 2, 1, 1, '12/27/2018', 127, 127, '36.5', 72, '121/83', 'DIABETES MELLITUS (ICD-250.)', 'HUMULIN INJ 70/30 (INSULIN REG & ISOPHANE (HUMAN)) 20 units ac breakfast\r\nLast Refill: #600 u x 0.', 'BP DIASTOLIC, BP SYSTOLIC, FLU VAX, PNEUMOVAX, MICROALB URN, FLU VAX, BP DIASTOLIC, BP SYSTOLIC, DIAB FOOT CK, ALBUMIN URIN, TSH, CHOLESTEROL, HGBA1C, CREATININE.'),
(3, 2, 1, 1, '01/25/2018', 127, 127, '36.5', 72, '121/83', 'DIABETES MELLITUS (ICD-250.)', 'HUMULIN INJ 70/30 (INSULIN REG & ISOPHANE (HUMAN)) 20 units ac breakfast\r\nLast Refill: #600 u x 0.', 'BP DIASTOLIC, BP SYSTOLIC, FLU VAX, PNEUMOVAX, MICROALB URN, FLU VAX, BP DIASTOLIC, BP SYSTOLIC, DIAB FOOT CK, ALBUMIN URIN, TSH, CHOLESTEROL, HGBA1C, CREATININE.'),
(4, 2, 1, 1, '01/27/2018', 127, 127, '36.5', 72, '121/83', 'DIABETES MELLITUS (ICD-250.)', 'HUMULIN INJ 70/30 (INSULIN REG & ISOPHANE (HUMAN)) 20 units ac breakfast\r\nLast Refill: #600 u x 0.', 'BP DIASTOLIC, BP SYSTOLIC, FLU VAX, PNEUMOVAX, MICROALB URN, FLU VAX, BP DIASTOLIC, BP SYSTOLIC, DIAB FOOT CK, ALBUMIN URIN, TSH, CHOLESTEROL, HGBA1C, CREATININE.');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(9) NOT NULL,
  `user_id` int(9) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `mobile_num` bigint(20) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `allergies` text,
  `contact_person` varchar(255) DEFAULT NULL,
  `family_history` text,
  `medical_history` text,
  `current_health` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `user_id`, `gender`, `age`, `address`, `city`, `country`, `mobile_num`, `blood_group`, `allergies`, `contact_person`, `family_history`, `medical_history`, `current_health`) VALUES
(1, 2, 'Female', 23, 'Block 1 Lot 2, Sunset Drive', 'Los Angeles, CA', 'USA', 9951234567, 'B+', 'None', 'Gina Doe (Aunt) - 09957654321', 'Father was suffering from diabetes and arthritis. Dies at age of 75.\r\n	Mother died due to brain hemorrhage at age of 40', 'Minor surgery for ulcer at neck 3 years back. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 3, 'Female', 53, '750 Jones Street', 'Dallas, TX', 'USA', 9835234567, 'B-', 'None', 'Jane Doe (Niece) - 09957654321', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 4, 'Female', 33, '816 Farnum Road', 'New York, NY', 'USA', 9765834567, 'A+', 'None', 'Andy McMullen (Spouse) - 9864654321', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 5, 'Female', 42, '949 Sugar Camp Road', 'Redwood Falls, MN', 'USA', 9776434327, 'A+', 'Peanut allergy', 'Sally Baird (Sister) - 9158564321', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 6, 'Female', 27, '3207 Deans Lane', 'New York, NY', 'USA', 9776434327, 'A+', 'Skin allergy', 'Cindy Pascua (Sister) - 9356522321', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 7, 'Male', 25, '3938 North Avenue', 'Omaha, NE', 'USA', 9775431637, 'O+', 'Skin allergy', 'Maisie Harper (Sister) - 09984521761', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(7, 8, 'Male', 35, '2079 Winding Way', 'Providence, RI', 'USA', 9783412637, 'AB+', 'None', 'Marcia Strickland (Spouse) - 09874121761', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(9) NOT NULL,
  `user_type` varchar(5) NOT NULL DEFAULT 'user',
  `user_uname` varchar(30) NOT NULL,
  `user_first` varchar(50) NOT NULL,
  `user_last` varchar(50) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `user_lastlogin` varchar(30) DEFAULT 'N/A',
  `user_pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `user_uname`, `user_first`, `user_last`, `user_email`, `user_lastlogin`, `user_pwd`) VALUES
(1, 'admin', 'admin', 'John', 'Doe', 'JohnDoe@gmail.com', 'N/A', '$2y$10$GVkQNmCIFLtrpj.oETBsnOO1AI3bcuzFdOhbGgAAq54wLRANlKOjS'),
(2, 'user', 'user', 'Jane', 'Doe', 'JaneDoe@gmail.com', 'N/A', '$2y$10$aBmtE9x60RVhdfR95tWYV.vWUdPtWZtSTY.fbthoLyY.Xfgy6XaGW'),
(3, 'user', 'test', 'Gina', 'Doe', 'GinaDoe@gmail.com', 'N/A', '$2y$10$pFIXVwt/rgBZEwI8PJ/tmuSdL7RrMe1LnnqRwwcK19BJLjDYLV3W6'),
(4, 'user', 'test1', 'Dora', 'McMullen', 'doramcmullen@gmail.com', 'N/A', '$2y$10$.9zr1wYpfGYdncAfYg/zqO3nrfVV4Nm5EcXubyYH6wqKWUSDKhxEq'),
(5, 'user', 'test2', 'Sharon', 'Baird', 'sharonbaird@gmail.com', 'N/A', '$2y$10$Jk1ROsy5Ht3R4aVvaa0YP.3fkSygEnG7vCivknTI2e7bxzerOU2E2'),
(6, 'user', 'test3', 'Shirley', 'Pascua', 'shirleypascua@gmail.com', 'N/A', '$2y$10$5WkUlwRUFAFnrSG5P5iryucO4rFKk6nfvswOP7P/lL/38ocBW3YUC'),
(7, 'user', 'test4', 'Michael', 'Harper', 'mharper@gmail.com', 'N/A', '$2y$10$9x.fK4uIdLt6wcb6BF8YU.A5o.Ie2Q5i8TXxKxlXMwufd60dESjd2'),
(8, 'user', 'test5', 'Martin', 'Strickland', 'mstrickland@gmail.com', 'N/A', '$2y$10$H/IzUuSaEfONt3GA6d5mZeJzzavhgBkM7S3HmL6UgH8cAlbK1le4.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkup_sessions`
--
ALTER TABLE `checkup_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkup_sessions`
--
ALTER TABLE `checkup_sessions`
  MODIFY `session_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkup_sessions`
--
ALTER TABLE `checkup_sessions`
  ADD CONSTRAINT `checkup_sessions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `checkup_sessions_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON UPDATE CASCADE;

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
