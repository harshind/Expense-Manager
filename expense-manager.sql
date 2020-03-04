-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 01, 2020 at 06:20 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense-manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgetplan`
--

CREATE TABLE `budgetplan` (
  `PlanID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `Budget` bigint(20) NOT NULL,
  `People` int(10) DEFAULT NULL,
  `people_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budgetplan`
--

INSERT INTO `budgetplan` (`PlanID`, `id`, `Title`, `start_date`, `end_date`, `Budget`, `People`, `people_name`) VALUES
(1, 1, 'Hello Everyone!', '2020-01-04', '2020-01-11', 10000, 2, 'harsh,gupta,'),
(2, 4, 'My plan 2', '2020-02-01', '2020-02-08', 100000, 2, 'Person A,Person B,');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `ExpenseID` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `Title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `amt_spent` bigint(20) NOT NULL,
  `person` varchar(255) DEFAULT NULL,
  `upload_bill` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`ExpenseID`, `id`, `Title`, `date`, `amt_spent`, `person`, `upload_bill`) VALUES
(1, 1, 'Hello Evaryone!', '2020-02-12', 100, 'harsh', NULL),
(6, 1, 'Expense 2', '0000-00-00', 200, 'harsh', 0x6261745f6c6f676f2e504e47);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'harsh gupta', 'harshind58@gmail.com', '01da2bdd72aaa3515f4fe9d5123c1f5c', 9576097102),
(2, 'Rishu Gupta', 'harshind56@gmail.com', '01da2bdd72aaa3515f4fe9d5123c1f5c', 8210779362),
(3, 'Sita Gupta', 'harshind60@gmail.com', '7d49d5952f936ced932eb3857468819a', 8210779362),
(4, 'Sita Gupta', 'rg454921@gmail.com', '7d49d5952f936ced932eb3857468819a', 8210779362),
(5, 'Tintu Mon', 'vtc-support@internshalla.com', '01da2bdd72aaa3515f4fe9d5123c1f5c', 9576097102),
(6, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(7, 'Maitry Sharma', 'shivusingh3335@gmail.com', '7d49d5952f936ced932eb3857468819a', 8210779362),
(8, 'tembu', 'vtc-support1@internshalla.com', '01da2bdd72aaa3515f4fe9d5123c1f5c', 9576097102),
(9, 'tembu pagal', 'vtc-support12@internshalla.com', '01da2bdd72aaa3515f4fe9d5123c1f5c', 9576097102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgetplan`
--
ALTER TABLE `budgetplan`
  ADD PRIMARY KEY (`PlanID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`ExpenseID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budgetplan`
--
ALTER TABLE `budgetplan`
  MODIFY `PlanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `ExpenseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budgetplan`
--
ALTER TABLE `budgetplan`
  ADD CONSTRAINT `budgetplan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
