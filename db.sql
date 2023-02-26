-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2023 at 08:47 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ConnectFour`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_first_player` int(11) NOT NULL,
  `id_second_player` int(11) NOT NULL,
  `id_last_player` int(11) NOT NULL,
  `grid` text NOT NULL,
  `id_winner` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `status`, `id_first_player`, `id_second_player`, `id_last_player`, `grid`, `id_winner`, `date`) VALUES
(1, 1, 1, 2, 1, 'a:6:{i:0;a:7:{i:0;i:0;i:1;i:0;i:2;i:0;i:3;i:0;i:4;i:0;i:5;i:0;i:6;i:0;}i:1;a:7:{i:0;i:0;i:1;i:0;i:2;i:0;i:3;i:0;i:4;i:0;i:5;i:0;i:6;i:0;}i:2;a:7:{i:0;i:0;i:1;i:0;i:2;i:0;i:3;i:0;i:4;i:0;i:5;i:0;i:6;i:0;}i:3;a:7:{i:0;i:0;i:1;i:0;i:2;i:0;i:3;i:0;i:4;i:0;i:5;i:0;i:6;i:0;}i:4;a:7:{i:0;i:0;i:1;i:0;i:2;i:0;i:3;i:0;i:4;i:0;i:5;i:0;i:6;i:0;}i:5;a:7:{i:0;i:0;i:1;i:0;i:2;i:0;i:3;i:0;i:4;i:0;i:5;i:0;i:6;i:0;}}', 1, '2023-02-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
