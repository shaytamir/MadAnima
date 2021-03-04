-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 09:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melamed`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `article`, `url`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Art By Melamed', 'Art By Melamed aaa aa aaa ..\r\n.. .. . .. .. .. ..', 'art-by-melamed', 'art.jpg', '2021-02-22 13:01:36', '2021-02-22 13:01:36'),
(2, 'Melamed Animations', 'Melamed Animations..\r\n.. .. .. .. \r\n.. .. ', 'melamed-animations', 'logo.png', '2021-02-22 13:01:36', '2021-02-22 13:01:36'),
(3, 'Objective Art', 'Objective Art.. .. \r\n.. .. .. ', 'objective-art', 'instroments.jpg', '2021-02-22 13:03:01', '2021-02-22 13:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(1, 1, 'About MelamedAnimations', 'sdf fds f dsf s gg\r\nsdgsdg \r\nsd g\r\ns g\r\nsd\r\n g\r\n\r\nsdgdsgsdgsdg\r\nsdgsdsgsdg sdg sd gds g\r\n gsds dg', '2021-02-27 18:39:15', '2021-02-27 18:39:15'),
(2, 1, 'Our Shop in Israel', 'typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-27 18:40:06', '2021-02-27 18:40:06'),
(3, 2, 'MelamedAnimations Services', 'typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..\r\ntypesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-02-27 18:41:04', '2021-02-27 18:41:04'),
(5, 2, 'sad', '<p>sadsad</p>', '2021-02-28 21:12:12', '2021-02-28 21:12:12'),
(6, 3, 'aaaaa', '<p>asdasda as as sa <strong>sa </strong><a href=\"https://www.walla.co.il\"><strong>sa </strong></a>sa &nbsp;&nbsp;</p>', '2021-02-28 21:26:23', '2021-02-28 21:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `menu_title`, `url`, `updated_at`, `created_at`) VALUES
(1, 'About Us', 'About Page', 'about-us', '2021-02-28 15:41:30', '2021-02-27 18:08:08'),
(2, 'Services', 'Services Page', 'our-services', '2021-02-27 18:08:08', '2021-02-27 18:08:08'),
(3, 'Contact Us', 'Contact', 'contact-us', '2021-02-28 15:41:37', '2021-02-27 18:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(1, 12, 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:12:\"wall Octopus\";s:5:\"price\";d:90.99;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:16:\"Coloring Octopus\";s:5:\"price\";d:84.99;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '175.98', '2021-02-27 15:45:50', '2021-02-27 15:45:50'),
(2, 12, 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:12:\"wall Octopus\";s:5:\"price\";d:90.99;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '90.99', '2021-02-27 15:52:54', '2021-02-27 15:52:54'),
(3, 12, 'a:2:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:6:\"shayss\";s:5:\"price\";d:569.99;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:11:\"Hearth Lady\";s:5:\"price\";d:119.99;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '689.98', '2021-02-27 16:10:38', '2021-02-27 16:10:38'),
(4, 7, 'a:1:{i:8;a:6:{s:2:\"id\";s:1:\"8\";s:4:\"name\";s:15:\"Earth Elephant2\";s:5:\"price\";d:105.99;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '105.99', '2021-03-01 19:17:14', '2021-03-01 19:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `title`, `article`, `image`, `url`, `price`, `updated_at`, `created_at`) VALUES
(1, 1, 'wall Octopus', 'wall Octopus. <br>\r\noctopus on the wall.', 'wallOctopus.jpg', 'wall-octopus', '90.99', '2021-02-22 17:10:14', '2021-02-22 17:10:14'),
(2, 1, 'Coloring Octopus', 'Coloring Octopus .. .. ..<br>\r\n.. .. ..', 'coloringOctopus.jpg', 'coloring-octopus', '84.99', '2021-02-22 17:10:14', '2021-02-22 17:10:14'),
(3, 2, 'Hearth Lady', 'Hearth Lady <br>\r\ninfo info ..', 'hearthLady.jpg', 'hearth-lady', '119.99', '2021-02-22 17:13:31', '2021-02-22 17:13:31'),
(4, 2, 'shayss', 'shayss shayss shayss', 'shayss.jpg', 'shayss', '569.99', '2021-02-22 17:13:31', '2021-02-22 17:13:31'),
(5, 3, 'sandwich', 'sandwich info <br>\r\n.. .. ..', 'sandwich.jpg', 'sandwich', '77.99', '2021-02-22 17:16:19', '2021-02-22 17:16:19'),
(6, 3, 'Lady Earth', 'lady earth info info', 'ladyEarth.jpg', 'lady-earth', '149.99', '2021-02-22 17:16:19', '2021-02-22 17:16:19'),
(7, 1, 'World Octopus', 'World-octopus info .', 'worldOctopus.jpeg', 'world-octopus', '119.99', '2021-02-22 17:20:17', '2021-02-22 17:20:17'),
(8, 3, 'Earth Elephant2', '<p>earthElephant info ..22</p>', '2021.03.01.19.16.38-pok.png', 'earth-elephant2', '105.99', '2021-03-02 08:34:04', '2021-02-22 17:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(3, '--', '-', '--', '2021-02-26 09:47:01', '2021-02-26 09:47:01'),
(4, '--', '--', '--', '2021-02-26 09:47:01', '2021-02-26 09:47:01'),
(5, '-', '---', '-', '2021-02-26 09:47:13', '2021-02-26 09:47:13'),
(6, '-', '------', '-', '2021-02-26 09:47:13', '2021-02-26 09:47:13'),
(7, 'shay', 'shay@gmail.com', '$2y$10$qeh.oNYy71a3JQppQN2vOu7AiurZzwffJ1Ju.pmc0Sd8IRMJw7eCC', '2021-02-26 09:47:56', '2021-02-26 09:47:56'),
(8, 'shayss', 'shayss@gmail.com', '$2y$10$qeh.oNYy71a3JQppQN2vOu7AiurZzwffJ1Ju.pmc0Sd8IRMJw7eCC', '2021-02-26 09:47:56', '2021-02-26 09:47:56'),
(9, 'shayssel', 'shayssel@gmail.com', '$2y$10$qeh.oNYy71a3JQppQN2vOu7AiurZzwffJ1Ju.pmc0Sd8IRMJw7eCC', '2021-02-26 09:49:01', '2021-02-26 09:49:01'),
(10, 'amir', 'amir@gmail.com', '$2y$10$scTMUQ/E3/aOxen/XNsLj.4/looBFQ.DPJrlS6z9vr44egZk88XeS', '2021-02-26 09:49:01', '2021-02-26 09:49:01'),
(11, 'sss', 'sss@gmail.com', '$2y$10$aoYjaQN7YDSqb3NMLuLab./R3IM6fZq74YK0t2zBDMNYglyvzv1Y2', '2021-02-27 09:12:59', '2021-02-27 09:12:59'),
(12, 'aaaa', 'aaa@gmail.com', '$2y$10$6FHIsQrETLAOBXXARC0fLeuG.RQLeGdjHwY.tBH.EoJ3xNNv2c5Pi', '2021-02-27 09:16:22', '2021-02-27 09:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `uid` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`uid`, `role`) VALUES
(7, 6),
(8, 7),
(9, 7),
(10, 7),
(11, 7),
(12, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
