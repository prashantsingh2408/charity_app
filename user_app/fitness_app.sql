-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 04:55 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `steps` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `steps`, `name`, `img`) VALUES
(1, 500, 'change maker', 'images/flame.jpg'),
(2, 2000, 'super change maker', 'images/orange_flame.jpg'),
(3, 5000, 'extraordinary', 'images/red_flame.jpg'),
(4, 10000, 'diamond achiever', 'images/diamond_flame.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `rate_per_km` float NOT NULL,
  `step_in_m` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `rate_per_km`, `step_in_m`) VALUES
(1, 10, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `goal_id` int(11) NOT NULL,
  `goal_name` varchar(255) NOT NULL,
  `goal_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`goal_id`, `goal_name`, `goal_value`) VALUES
(1, 'Casual', 1),
(2, 'Regular', 3),
(3, 'Serious', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ngos`
--

CREATE TABLE `ngos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `partner` varchar(255) NOT NULL,
  `current_amount` int(11) NOT NULL,
  `total_goal` int(11) NOT NULL,
  `no_of_workout` int(11) NOT NULL,
  `description` text NOT NULL,
  `about` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `amount_raised` int(11) NOT NULL,
  `no_of_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngos`
--

INSERT INTO `ngos` (`id`, `name`, `partner`, `current_amount`, `total_goal`, `no_of_workout`, `description`, `about`, `img`, `amount_raised`, `no_of_days`) VALUES
(1, 'Walk for Education', 'Veda Foundation', 1000, 10000, 9000, 'Your steps will provide pre-school education to children through e-learning and smart kits', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'images/edu.jpg', 124000, 6),
(2, 'migrant farmers', 'Farmers Foundations', 2000, 18000, 700, 'To be trained to cultivate quality crops', 'To be trained to cultivate quality crops\r\nTo be trained to cultivate quality crops\r\nTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality cropsTo be trained to cultivate quality crops', 'images\\farmers.jpeg', 194000, 11),
(3, 'Financial literacy', 'Local NGOs', 4000, 15000, 6, 'Walk to provide financial awareness and digital literacy in villages pan India through the support of Local NGOs.', ' THIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.      \r\n\r\n\r\nTHIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.\r\n\r\n\r\nTHIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.THIS IS DESCRIPTION.', 'images/financial.jpg', 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_count`
--

CREATE TABLE `ngo_count` (
  `user_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `donation` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngo_count`
--

INSERT INTO `ngo_count` (`user_id`, `ngo_id`, `donation`, `timestamp`) VALUES
(10, 1, 600, '2020-12-01 06:45:34'),
(18, 1, 600, '2020-12-01 06:46:29'),
(20, 1, 700, '2020-12-01 06:46:29'),
(18, 1, 600, '2020-12-01 06:46:35'),
(20, 1, 700, '2020-12-01 06:46:35'),
(21, 1, 800, '2020-12-01 06:46:50'),
(21, 1, 800, '2020-12-01 06:47:01'),
(20, 2, 800, '2020-12-01 08:46:33'),
(20, 1, 1000, '2020-12-01 10:42:42'),
(20, 1, 1000, '2020-12-01 10:43:36'),
(20, 2, 1000, '2020-12-01 10:44:27'),
(20, 1, 1000, '2020-12-01 10:51:47'),
(20, 1, 1000, '2020-12-01 10:52:53'),
(20, 1, 1000, '2020-12-01 10:54:15'),
(20, 1, 1000, '2020-12-01 10:55:23'),
(20, 1, 1000, '2020-12-01 10:56:57'),
(20, 1, 1000, '2020-12-01 11:00:11'),
(20, 2, 1500, '2020-12-01 11:02:11'),
(25, 2, 3000, '2020-12-02 06:32:01'),
(25, 2, 3000, '2020-12-02 06:32:04'),
(25, 1, 3000, '2020-12-02 06:32:12'),
(25, 2, 3000, '2020-12-02 06:32:25'),
(25, 3, 3000, '2020-12-02 06:53:52'),
(25, 3, 4000, '2020-12-02 07:26:23'),
(25, 1, 4000, '2020-12-02 18:56:08'),
(25, 3, 2000, '2020-12-02 20:46:21'),
(25, 1, 0, '2020-12-02 20:46:25'),
(25, 1, 0, '2020-12-02 20:46:37'),
(25, 3, 2000, '2020-12-02 20:49:22'),
(25, 3, 3000, '2020-12-02 20:56:20'),
(34, 2, 3000, '2020-12-03 09:26:07'),
(36, 2, 2000, '2020-12-03 09:36:07'),
(36, 1, 1000, '2020-12-03 09:38:25'),
(25, 1, 1000, '2020-12-04 19:28:19'),
(25, 1, 2000, '2020-12-04 19:47:20'),
(25, 2, 1000, '2020-12-04 19:55:18'),
(25, 2, 1000, '2020-12-04 19:56:54'),
(25, 2, 0, '2020-12-04 19:57:35'),
(25, 1, 1000, '2020-12-04 19:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `page_link` text NOT NULL,
  `msg` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `n_type` int(11) NOT NULL,
  `response` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `page_link`, `msg`, `user_id`, `n_type`, `response`, `team_id`) VALUES
(1, '25', ' wants to join your team', 36, 1, 0, 0),
(2, '37', ' wants to join your team ', 25, 1, 1, 1),
(3, '24', ' wants to join your team ', 25, 1, -1, 24),
(4, '24', ' wants to join your team ', 25, 1, -1, 24),
(5, '24', ' wants to join your team ', 25, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `t_name` text NOT NULL,
  `t_fn_leader` text NOT NULL,
  `t_ln_leader` text NOT NULL,
  `t_img` varchar(255) NOT NULL,
  `t_members` int(11) NOT NULL,
  `t_purpose` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `t_name`, `t_fn_leader`, `t_ln_leader`, `t_img`, `t_members`, `t_purpose`, `user_id`) VALUES
(1, 'Team1', 'Aditi', 'Kothiyal', 'images\\pictures\\faces\\1s.png', 3, 'asdfghjklkjhgfdsxcvhj', 25),
(2, 'Team2', 'Prashant', 'Malla', 'images\\pictures\\faces\\2s.png', 1, 'lkjhgfdsasdfghjkgfds', 36),
(3, 'Team3', 'Shivani', 'Chamoli', 'images\\pictures\\faces\\3s.png', 3, 'lkjhgfwertyuiopkjhgfdxcvbn xskjghfgxvbn', 35),
(24, 'Team 4', 'Aditi', 'Kothiyal', './uploades/small/8451606849168.jpg', 0, 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 25);

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `type` int(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `team_id`, `firstname`, `lastname`, `type`, `user_id`, `status`) VALUES
(1, 1, 'Aditi', 'Kothiyal', 1, 25, 0),
(2, 1, 'Hardik', 'Kothiyal', 0, 53, 1),
(3, 2, 'Prashant', 'Malla', 1, 36, 1),
(5, 3, 'Shivani', 'Chamoli', 1, 35, 1),
(6, 1, 'Shivani', 'Chamoli', 0, 62, 1),
(7, 3, 'Aditi', 'Kothiyal', 0, 25, 1),
(8, 3, 'Dinesh', 'Kothiyal', 0, 63, 1),
(16, 24, 'Aditi', 'Kothiyal', 0, 25, 0),
(18, 1, 'Aditi', 'Kothiyal', 0, 37, 1),
(19, 24, 'Aditi', 'Kothiyal', 0, 24, -1),
(20, 24, 'Aditi', 'Kothiyal', 0, 24, 0),
(21, 1, 'Aditi', 'Kothiyal', 0, 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(1) NOT NULL,
  `weight` int(3) NOT NULL,
  `goals_id` int(1) NOT NULL,
  `title` text NOT NULL,
  `bio` text NOT NULL,
  `height` int(3) NOT NULL,
  `birthday` date NOT NULL,
  `pic` longblob NOT NULL,
  `current_steps` int(11) NOT NULL,
  `target_steps` int(11) NOT NULL,
  `workouts` int(11) NOT NULL,
  `todays_steps` int(11) NOT NULL,
  `total_donation_steps` int(11) NOT NULL,
  `per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `weight`, `goals_id`, `title`, `bio`, `height`, `birthday`, `pic`, `current_steps`, `target_steps`, `workouts`, `todays_steps`, `total_donation_steps`, `per`) VALUES
(16, 'Aditi', 'Kothiyal', '7000000000', '', 'F', 55, 1, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(18, 'Aditi', 'Kothiyal', '9000000000', 'shivaniichamoli@gmail.com', 'F', 80, 1, 'title', 'bio', 155, '2020-12-02', 0x2e2f75706c6f616465732f736d616c6c2f393136313630363839393533342e6a7067, 0, 10000, 0, 0, 0, 0),
(19, 'Aditi', 'Kothiyal', '6000000000', '', 'F', 0, 1, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(21, 'Aditi', 'Kothiyal', '5000000000', '', 'F', 55, 1, '', '', 0, '0000-00-00', 0x2e2f75706c6f616465732f736d616c6c2f383339313630363736323631342e6a7067, 600, 5000, 0, 0, 0, 0),
(24, 'Aditi', 'Kothiyal', '7830897070', 'aa@gmail.com', 'M', 28, 1, 'Cc', 'Cv', 55, '2020-12-01', '', 1000, 5000, 0, 0, 0, 20),
(25, 'Aditi', 'Kothiyal', '9152227496', 'aditikothiyal700@gmail.com', 'F', 55, 3, 'title', 'bio', 155, '2020-12-02', 0x2e2f75706c6f616465732f736d616c6c2f383435313630363834393136382e6a7067, 0, 10000, 10, 0, 11000, 0),
(26, 'Aditi', 'Kothiyal', '9999999990', 'ad@gmail.com', 'M', 80, 1, 'How to code?', 'bio', 888, '2020-12-02', '', 0, 10000, 0, 0, 0, 0),
(35, 'Shivani', 'Chamoli', '6542879375', '', 'F', 60, 2, '', '', 0, '0000-00-00', '', 0, 10000, 0, 0, 0, 0),
(36, 'Prashast', 'Malla', '9999998888', 'prashastmalla@gmail.com', 'F', 80, 1, 'Mr', 'Hello world', 175, '1994-01-01', 0x2e2f75706c6f616465732f736d616c6c2f333539313630363938373933322e6a7067, 0, 2000, 22, 0, 3000, 0),
(37, 'Aditi', 'Kothiyal', '9111111111', '', 'F', 32, 2, '', '', 0, '0000-00-00', 0x2e2f75706c6f616465732f736d616c6c2f333637313630373238373736362e6a7067, 0, 6000, 0, 0, 0, 0),
(38, '', '', '9898989898', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(39, 'Shivani', 'Chamoli', '6060606060', '', 'F', 55, 2, '', '', 0, '0000-00-00', '', 0, 6000, 0, 0, 0, 0),
(40, 'Shivani', 'Chamoli', '7070707070', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(42, '', '', '8888800000', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(43, '', '', '7777700000', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(44, '', '', '6666600000', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(46, '', '', '5555500000', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(47, '', '', '9888888888', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(48, '', '', '5111111111', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(49, 'Aditi', 'Kothiyal', '8111111111', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(50, '', '', '8000000000', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(51, '', '', '6767676767', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(52, '', '', '9999999992', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(53, 'Hardik', 'Kothiyal', '7830897079', 'kothiyalharry21@gmail.com', 'M', 55, 2, 'title', 'Bio', 155, '2020-12-04', 0x2e2f75706c6f616465732f736d616c6c2f363236313630373037393936332e6a7067, 0, 6000, 0, 0, 0, 0),
(54, '', '', '9999999997', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(55, 'hwehds', 'dssd', '9897005823', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(56, 'Aditi', 'Kothiyal', '8000000001', '', 'F', 55, 3, '', '', 0, '0000-00-00', '', 0, 10000, 0, 0, 0, 0),
(57, '', '', '9000000001', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(58, 'Aditi', 'Kothiyal', '9111111112', '', 'F', 80, 2, '', '', 0, '0000-00-00', '', 0, 6000, 0, 0, 0, 0),
(59, 'Shivani', 'Chamoli', '9111111113', '', 'M', 80, 3, '', '', 0, '0000-00-00', '', 0, 10000, 0, 0, 0, 0),
(60, 'Rajni', 'Kothiyal', '9111111119', '', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(61, 'Dinesh', 'Kothiyal', '9999999994', 'dineshkothiyal@gmail.com', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, 0, 0, 0, 0),
(62, 'Shivani', 'Chamoli', '7777777770', 'shivaniichamoli@gmail.com', 'F', 80, 1, '', '', 0, '0000-00-00', '', 0, 2000, 0, 0, 0, 0),
(63, 'Dinesh', 'Kothiyal', '7060404160', 'dineshkothiyal@gmail.com', 'M', 80, 3, '', '', 0, '0000-00-00', 0x696d616765732f757365722d312e6a7067, 0, 10000, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`goal_id`);

--
-- Indexes for table `ngos`
--
ALTER TABLE `ngos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `pick` (`goals_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `goal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ngos`
--
ALTER TABLE `ngos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
