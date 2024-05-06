-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 11:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `issuetype_id` int(11) DEFAULT NULL,
  `issuestatus_id` int(11) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `reporter` int(11) DEFAULT NULL,
  `assignee` int(11) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `priority_id` int(11) DEFAULT NULL,
  `actual_start` datetime DEFAULT NULL,
  `actual_end` datetime DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `not_in_use` int(11) DEFAULT NULL,
  `add_by` int(11) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `edit_by` int(11) DEFAULT NULL,
  `edit_date` datetime DEFAULT NULL,
  `active` int(4) DEFAULT 1,
  `status` int(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `project_id`, `issuetype_id`, `issuestatus_id`, `summary`, `description`, `reporter`, `assignee`, `due_date`, `priority_id`, `actual_start`, `actual_end`, `points`, `not_in_use`, `add_by`, `add_date`, `edit_by`, `edit_date`, `active`, `status`) VALUES
(1, 1, 2, 1, 'GoDaddy Inc. is an American publicly traded Internet domain registry, domain registrar and web hosting company headquartered in', 'GoDaddy Inc. is an American publicly traded Internet domain registry, domain registrar and web hosting company headquartered in', 2, 1, '2024-05-10', 1, NULL, NULL, 2, NULL, 2, '2024-05-05 08:06:03', NULL, NULL, 1, 1),
(2, 1, 1, 8, 'GoDaddy Inc. is an American publicly traded Internet domain registry', 'GoDaddy Inc. is an American publicly traded Internet domain registry, domain registrar and web hosting company headquartered in', 2, 1, '2024-05-10', 3, NULL, NULL, 2, NULL, 2, '2024-05-05 12:50:58', NULL, NULL, 1, 1),
(3, 1, 1, 8, 'GoDaddy Inc. is an American publicly traded Internet domain registry', 'GoDaddy Inc. is an American publicly traded Internet domain registry, domain registrar and web hosting company headquartered in', 2, 1, '2024-05-10', 5, NULL, NULL, 2, NULL, 2, '2024-05-05 12:52:56', NULL, NULL, 1, 1),
(14, 1, 1, 8, 'GoDaddy Inc. is an American publicly traded Internet domain registry', 'GoDaddy Inc. is an American publicly traded Internet domain registry, domain registrar and web hosting company headquartered in', 2, 1, '2024-05-10', 5, '2024-05-05 15:56:55', '2024-05-05 15:56:55', 2, NULL, NULL, NULL, 1, '2024-05-05 15:56:55', 1, 1),
(15, 1, 2, 8, 'GoDaddy Inc. is an American publicly traded Internet domain registry', 'GoDaddy Inc. is an American publicly traded Internet domain registry, domain registrar and web hosting company headquartered in', 2, 1, '2024-05-10', 5, '2024-05-05 16:00:59', '2024-05-05 16:00:59', 2, NULL, NULL, NULL, 1, '2024-05-05 16:00:59', 1, 1),
(16, 1, 2, 8, 'GoDaddy Inc. is an American publicly traded Internet domain registry, domain registrar and web hosting company headquartered in', 'GoDaddy Inc. is an American publicly traded Internet domain registry, domain registrar and web hosting company headquartered in', 2, 1, '2024-05-10', 3, '2024-05-05 16:03:50', '2024-05-05 16:03:50', 2, NULL, NULL, NULL, 1, '2024-05-05 16:03:50', 1, 1),
(17, 1, 2, 8, 'GoDaddy Inc. is an American publicly traded Internet domain registry', 'GoDaddy Inc. is an American publicly traded Internet domain registry, domain registrar and web hosting company headquartered in', 2, 1, '2024-05-10', 1, '2024-05-05 16:04:05', '2024-05-05 16:04:05', 2, NULL, NULL, NULL, 1, '2024-05-05 16:04:05', 1, 1),
(18, 3, 2, 8, 'Shambhu Please do this', 'GoDaddy Inc. is an American publicly traded Internet domain registry, domain registrar and web hosting company headquartered in', 2, 1, '2024-05-11', 3, '2024-05-06 03:53:59', '2024-05-06 03:53:59', 10, NULL, NULL, NULL, 1, '2024-05-06 03:53:59', 1, 1),
(19, 4, 1, 8, 'Sir John Berry Hobbs, popularly known as Jack Hobbs', 'Sir John Berry Hobbs, popularly known as Jack Hobbs among his fans, was born in 1882 on December 16, Cambridge, England. His friends say that he was fascinated by Cricket and determined to play Cricket at the international level, but at his early stage, Sir John Hobbs was not a good player, but in 1901, he improved his game and came into the eyes of some local cricket teams, which prepared a path for Jack Hobbs to enter into the international Test cricket matches in his journey to enter into the international cricket team Tom Hayward an international Test batsman, helped him.', 2, 6, '2024-05-17', 2, '2024-05-13 00:00:00', '2024-05-16 00:00:00', 4, NULL, 1, '2024-05-06 04:06:18', 6, '2024-05-06 04:22:35', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `issuestatus`
--

CREATE TABLE `issuestatus` (
  `id` int(11) NOT NULL,
  `status_name` varchar(150) DEFAULT NULL,
  `active` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuestatus`
--

INSERT INTO `issuestatus` (`id`, `status_name`, `active`) VALUES
(1, 'To Do', 1),
(2, 'In Progress', 1),
(3, 'In QA', 1),
(4, 'Ready For Delivery ', 1),
(5, 'Bug', 1),
(6, 'Done', 1),
(7, 'Re Open', 1),
(8, 'Backlog', 1);

-- --------------------------------------------------------

--
-- Table structure for table `issuetype`
--

CREATE TABLE `issuetype` (
  `id` int(11) NOT NULL,
  `issue_name` varchar(150) DEFAULT NULL,
  `active` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuetype`
--

INSERT INTO `issuetype` (`id`, `issue_name`, `active`) VALUES
(1, 'Task', 1),
(2, 'Bug', 1);

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `id` int(11) NOT NULL,
  `priority_name` varchar(150) DEFAULT NULL,
  `active` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`id`, `priority_name`, `active`) VALUES
(1, 'Highest', 1),
(2, 'High', 1),
(3, 'Medium', 1),
(4, 'Low', 1),
(5, 'Lowest', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(150) DEFAULT NULL,
  `active` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `active`) VALUES
(1, 'Project1', 1),
(2, 'Project2', 1),
(3, 'Project3', 1),
(4, 'Project4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(150) DEFAULT NULL,
  `mname` varchar(150) DEFAULT NULL,
  `lname` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `mobile` varchar(150) DEFAULT NULL,
  `add_by` int(11) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `edit_by` int(11) DEFAULT NULL,
  `edit_date` datetime DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `user_role_id` int(11) DEFAULT NULL,
  `isLoggedIn` int(11) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `mname`, `lname`, `email`, `mobile`, `add_by`, `add_date`, `edit_by`, `edit_date`, `active`, `status`, `user_role_id`, `isLoggedIn`, `password`) VALUES
(1, 'Shambhu', 'Dayal', 'Rathore', 'shambhudayal.rathore01@gmail.com', '7415360523', NULL, '2024-05-05 07:15:49', NULL, NULL, 1, 1, 1, NULL, '$2y$10$lbahZfeX1vCxXV0fP/8RhOXuUMQxXMOp0FoVOcavdpAxqFTqU/tIa'),
(2, 'Anand', '', 'Rathore', 'anand@gmail.com', '7415360523', NULL, '2024-05-05 07:15:49', NULL, NULL, 1, 1, 2, NULL, '$2y$10$Q6Wx/ML.LKWVqOMwoy4mmu.0ft3tMdtjXtmJrt/pZIUo7jc99mT4C'),
(3, 'Donald', 'George', 'Bradman', 'donald@gmail.com', '7415360523', NULL, '2024-05-06 03:58:27', NULL, NULL, 1, 1, 3, NULL, '$2y$10$oJlr5CC6Dzmdncf8WrfAaepVhf9yUE4jcS7waecJ75y6EUc5ORUvG'),
(4, 'Chokshanada', 'Kumar', 'Sangakkara', 'sangakkara@gmail.com', '7415360523', NULL, '2024-05-06 03:59:40', NULL, NULL, 1, 1, 3, NULL, '$2y$10$FIyNlmcHse2ti3cQJB5nD.pwPAZ9PObLTeNs0Eia.OzWaUy7zwEIG'),
(5, 'Sachin', '', 'Tendulkar', 'sachin@gmail.com', '7415360523', NULL, '2024-05-06 04:00:51', NULL, NULL, 1, 1, 4, NULL, '$2y$10$5fh.7PrGChqaxmRq6acdhOfQOYCsNulcUi10gupMKB5he/C4HMmpK'),
(6, 'John', 'Berry', 'Hobbs', 'john@gmail.com', '7415360523', NULL, '2024-05-06 04:02:10', NULL, NULL, 1, 1, 5, NULL, '$2y$10$J6sjFYBoxAY2/pZ6KSGdq.YN8vbxdagUn/PBVvocWtmiPqiFi9BYG');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(150) DEFAULT NULL,
  `active` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_name`, `active`) VALUES
(1, 'Super Admin', 0),
(2, 'Admin', 0),
(3, 'Developer', 1),
(4, 'Team Lead', 1),
(5, 'Manager', 1),
(6, 'IT', 1),
(7, 'Executive', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuestatus`
--
ALTER TABLE `issuestatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuetype`
--
ALTER TABLE `issuetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `issuestatus`
--
ALTER TABLE `issuestatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issuetype`
--
ALTER TABLE `issuetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
