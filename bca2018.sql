-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2020 at 06:23 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bca2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `author` varchar(255) NOT NULL,
  `photo` varchar(256) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `author`, `photo`, `status`) VALUES
(1, 'Welcome to My Home page', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non turpis tincidunt, molestie nisi vel, venenatis lacus. Phasellus commodo risus fermentum ultrices tempor. Phasellus maximus nulla non leo fermentum, at mattis lacus faucibus. Suspendisse sed risus eget nisl eleifend faucibus. Praesent in malesuada libero. Etiam ex mauris, congue placerat arcu eget, facilisis volutpat nulla. Aliquam ac leo vulputate, pretium arcu efficitur, mattis ipsum. Fusce quis interdum eros.\r\n\r\nPellentesque et consequat turpis, vitae ullamcorper diam. Integer convallis ac massa eget auctor. Nullam posuere velit elit, vel euismod magna aliquam a. Quisque cursus ullamcorper varius. Proin consequat purus eu risus rhoncus sagittis. Phasellus viverra turpis blandit sodales porta. Curabitur erat felis, feugiat vel faucibus vitae, faucibus non massa. Proin accumsan erat quis enim eleifend sodales. \r\n\r\nMaecenas in quam tempus, pretium sem ac, lacinia mi. Donec dapibus lorem et lacus faucibus fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer et condimentum orci. Duis condimentum sit amet quam a laoreet. Maecenas a sapien a massa congue pharetra. Donec cursus tortor lacus, et ultricies est volutpat a. Mauris efficitur dolor at tellus imperdiet, ut scelerisque nisi lobortis. Aliquam sit amet facilisis elit, sit amet mattis arcu. Suspendisse ut erat lobortis, vestibulum tortor aliquet, condimentum augue. Etiam gravida consectetur erat, vehicula faucibus arcu. Suspendisse elit sem, facilisis in diam in, porta varius turpis.\r\n\r\nDonec dignissim, massa nec dapibus hendrerit, neque elit tincidunt turpis, at viverra sem dolor in nulla. Pellentesque vestibulum dapibus enim et tincidunt. Etiam ultrices ipsum quis orci accumsan, nec tempus ante convallis. Aenean sagittis bibendum efficitur. Nam sit amet velit sed urna tempus rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse vehicula eu nulla eget consectetur. Praesent sollicitudin nunc nec iaculis interdum. Morbi tincidunt, lacus sit amet luctus aliquam, nisl ligula vulputate nunc, sit amet sagittis neque velit nec lacus. Nulla hendrerit, nisl at eleifend sagittis, dolor eros lacinia leo, et commodo augue augue sed metus. Mauris in luctus mauris. Integer sit amet metus mi. Pellentesque velit risus, ultricies vel lectus ut, lacinia volutpat velit. In sed vehicula nisi, sed porttitor nulla. Cras in lorem lacinia, lacinia velit a, laoreet purus.\r\n\r\nUt arcu ante, eleifend et elit quis, scelerisque pellentesque nisi. Nullam accumsan tortor vel cursus euismod. Donec fringilla pretium rhoncus. Duis posuere erat bibendum turpis ullamcorper, eu luctus arcu fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et velit volutpat, pulvinar purus et, elementum urna. Pellentesque rutrum sit amet nisi at ultrices. Nam pretium metus sed mi bibendum iaculis. Ut sit amet pharetra risus, at venenatis sem. Proin augue lacus, imperdiet ultricies odio vel, dapibus ullamcorper mauris. Ut lorem nisi, fermentum id orci non, vehicula blandit ipsum. Morbi placerat enim turpis, at ornare enim aliquam non. Nulla maximus dictum diam. Aenean nec dapibus ligula.', 'Santosh Dhital', 'Ganesh-Himal-trekking.jpg', 0),
(2, 'About Me', 'Pellentesque et consequat turpis, vitae ullamcorper diam. Integer convallis ac massa eget auctor. Nullam posuere velit elit, vel euismod magna aliquam a. Quisque cursus ullamcorper varius. Proin consequat purus eu risus rhoncus sagittis. Phasellus viverra turpis blandit sodales porta. Curabitur erat felis, feugiat vel faucibus vitae, faucibus non massa. Proin accumsan erat quis enim eleifend sodales.\r\n\r\nMaecenas in quam tempus, pretium sem ac, lacinia mi. Donec dapibus lorem et lacus faucibus fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer et condimentum orci. Duis condimentum sit amet quam a laoreet. Maecenas a sapien a massa congue pharetra. Donec cursus tortor lacus, et ultricies est volutpat a. Mauris efficitur dolor at tellus imperdiet, ut scelerisque nisi lobortis. Aliquam sit amet facilisis elit, sit amet mattis arcu. Suspendisse ut erat lobortis, vestibulum tortor aliquet, condimentum augue. Etiam gravida consectetur erat, vehicula faucibus arcu. Suspendisse elit sem, facilisis in diam in, porta varius turpis.\r\n\r\nDonec dignissim, massa nec dapibus hendrerit, neque elit tincidunt turpis, at viverra sem dolor in nulla. Pellentesque vestibulum dapibus enim et tincidunt. Etiam ultrices ipsum quis orci accumsan, nec tempus ante convallis. Aenean sagittis bibendum efficitur. Nam sit amet velit sed urna tempus rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse vehicula eu nulla eget consectetur. Praesent sollicitudin nunc nec iaculis interdum. Morbi tincidunt, lacus sit amet luctus aliquam, nisl ligula vulputate nunc, sit amet sagittis neque velit nec lacus. Nulla hendrerit, nisl at eleifend sagittis, dolor eros lacinia leo, et commodo augue augue sed metus. Mauris in luctus mauris. Integer sit amet metus mi. Pellentesque velit risus, ultricies vel lectus ut, lacinia volutpat velit. In sed vehicula nisi, sed porttitor nulla. Cras in lorem lacinia, lacinia velit a, laoreet purus.\r\n\r\nUt arcu ante, eleifend et elit quis, scelerisque pellentesque nisi. Nullam accumsan tortor vel cursus euismod. Donec fringilla pretium rhoncus. Duis posuere erat bibendum turpis ullamcorper, eu luctus arcu fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et velit volutpat, pulvinar purus et, elementum urna. Pellentesque rutrum sit amet nisi at ultrices. Nam pretium metus sed mi bibendum iaculis. Ut sit amet pharetra risus, at venenatis sem. Proin augue lacus, imperdiet ultricies odio vel, dapibus ullamcorper mauris. Ut lorem nisi, fermentum id orci non, vehicula blandit ipsum. Morbi placerat enim turpis, at ornare enim aliquam non. Nulla maximus dictum diam. Aenean nec dapibus ligula.', 'Santosh Dhital', 'nepal-1319655_1280.jpg', 0),
(3, 'Maecenas in quam tempus, pretium sem', 'Maecenas in quam tempus, pretium sem ac, lacinia mi. Donec dapibus lorem et lacus faucibus fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer et condimentum orci. Duis condimentum sit amet quam a laoreet. Maecenas a sapien a massa congue pharetra. Donec cursus tortor lacus, et ultricies est volutpat a. Mauris efficitur dolor at tellus imperdiet, ut scelerisque nisi lobortis. Aliquam sit amet facilisis elit, sit amet mattis arcu. Suspendisse ut erat lobortis, vestibulum tortor aliquet, condimentum augue. Etiam gravida consectetur erat, vehicula faucibus arcu. Suspendisse elit sem, facilisis in diam in, porta varius turpis.\r\n\r\nDonec dignissim, massa nec dapibus hendrerit, neque elit tincidunt turpis, at viverra sem dolor in nulla. Pellentesque vestibulum dapibus enim et tincidunt. Etiam ultrices ipsum quis orci accumsan, nec tempus ante convallis. Aenean sagittis bibendum efficitur. Nam sit amet velit sed urna tempus rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse vehicula eu nulla eget consectetur. Praesent sollicitudin nunc nec iaculis interdum. Morbi tincidunt, lacus sit amet luctus aliquam, nisl ligula vulputate nunc, sit amet sagittis neque velit nec lacus. Nulla hendrerit, nisl at eleifend sagittis, dolor eros lacinia leo, et commodo augue augue sed metus. Mauris in luctus mauris. Integer sit amet metus mi. Pellentesque velit risus, ultricies vel lectus ut, lacinia volutpat velit. In sed vehicula nisi, sed porttitor nulla. Cras in lorem lacinia, lacinia velit a, laoreet purus.\r\n\r\nUt arcu ante, eleifend et elit quis, scelerisque pellentesque nisi. Nullam accumsan tortor vel cursus euismod. Donec fringilla pretium rhoncus. Duis posuere erat bibendum turpis ullamcorper, eu luctus arcu fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et velit volutpat, pulvinar purus et, elementum urna. Pellentesque rutrum sit amet nisi at ultrices. Nam pretium metus sed mi bibendum iaculis. Ut sit amet pharetra risus, at venenatis sem. Proin augue lacus, imperdiet ultricies odio vel, dapibus ullamcorper mauris. Ut lorem nisi, fermentum id orci non, vehicula blandit ipsum. Morbi placerat enim turpis, at ornare enim aliquam non. Nulla maximus dictum diam. Aenean nec dapibus ligula.', 'Himmat Lal', 'everst from tibet.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(4) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `user_id`, `password`, `name`, `status`) VALUES
(1, 'admin', 'admin', 'Admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
