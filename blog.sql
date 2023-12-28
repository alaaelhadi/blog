-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 10:59 PM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `comment` varchar(2000) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `regDate`, `comment`, `username`, `email`, `website`) VALUES
(1, '2023-11-07 14:00:13', 'Anything .................', 'Alaa', 'alaa@gmail.com', 'https://www.anything.com'),
(2, '2023-11-07 14:02:29', 'My comment in this post is ....... ', 'Malak', 'malak@gmail.com', 'https://www.anything.com'),
(3, '2023-11-07 14:03:18', 'I think ..........', 'Younis', 'younis@gmail.com', 'https://www.anything.com'),
(4, '2023-11-07 14:05:11', 'My opinion ............', 'Ahmed', 'ahmed@gmail.com', 'https://www.anything.com');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `datePublished` date NOT NULL DEFAULT current_timestamp(),
  `title` varchar(100) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `featured` int(1) NOT NULL COMMENT '1 featured, 0 unfeatured',
  `published` int(1) NOT NULL COMMENT '1 published, 0 unpublished',
  `image` varchar(50) NOT NULL,
  `visits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `datePublished`, `title`, `content`, `featured`, `published`, `image`, `visits`) VALUES
(1, '0000-00-00', 'silly tshirts', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos saepe dolores et nostrum porro odit reprehenderit animi, est ratione fugit aspernatur ipsum. Nostrum placeat hic saepe voluptatum dicta ipsum beatae.', 1, 1, '81210e5eeb9aacdb0b92f2c05a56f7de.jpeg', 3),
(2, '0000-00-00', 'popular web series', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos saepe dolores et nostrum porro odit reprehenderit animi, est ratione fugit aspernatur ipsum. Nostrum placeat hic saepe voluptatum dicta ipsum beatae.', 0, 1, 'e329503048791f0d3f8d8ca5269191a0.jpeg', 15),
(3, '0000-00-00', '2013 webapps', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos saepe dolores et nostrum porro odit reprehenderit animi, est ratione fugit aspernatur ipsum. Nostrum placeat hic saepe voluptatum dicta ipsum beatae.', 1, 1, 'ef74e73e89015fe2c7291d6bba9e5a14.jpeg', 14),
(4, '0000-00-00', 'ring bananaphone	', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos saepe dolores et nostrum porro odit reprehenderit animi, est ratione fugit aspernatur ipsum. Nostrum placeat hic saepe voluptatum dicta ipsum beatae.', 1, 1, 'b6ce8ab44ab3e26599fc4ec78f22e756.jpeg', 4),
(5, '0000-00-00', 'desktop workspace photos', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos saepe dolores et nostrum porro odit reprehenderit animi, est ratione fugit aspernatur ipsum. Nostrum placeat hic saepe voluptatum dicta ipsum beatae.', 0, 1, '95c8f05c8bab6bcc3c5faaf781a5211e.jpeg', 3),
(7, '0000-00-00', 'arrested development quotes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos saepe dolores et nostrum porro odit reprehenderit animi, est ratione fugit aspernatur ipsum. Nostrum placeat hic saepe voluptatum dicta ipsum beatae.', 1, 1, '20baf7cbc0ca182265a06678c704b3df.jpeg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `firstname` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` int(1) NOT NULL COMMENT '0 Female, 1 Male',
  `active` int(11) NOT NULL COMMENT '0 Inactive, 1 Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `regDate`, `firstname`, `secondname`, `phone`, `email`, `password`, `gender`, `active`) VALUES
(1, '2023-10-31 14:28:00', 'Alaa', 'Elhadi', '0101708160', 'alaa22@gmail.com', '$2y$10$FzZlf/Ru19ZuW.DKoQmqh.pVwbpThXd6UDZcz1wlhELOx6T8uoyX2', 0, 1),
(2, '2023-10-31 21:28:56', 'Ahmed', 'Elhadi', '0112277899', 'ahmed20@gmail.com', '$2y$10$PczQ5b72MRsb2IrTasPsDuf3zvS7h5itR401Wkn2Wfe/rdO3gN4w2', 0, 1),
(4, '2023-11-07 15:16:16', 'Malak', 'Elhadi', '0120984498', 'malak19@gmail.com', '$2y$10$IPkgy83zfZV0vy.hQdYBre4T.tU3uZzYYcayWEjZhHCPWFQgu5pGe', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `firstname` (`firstname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
