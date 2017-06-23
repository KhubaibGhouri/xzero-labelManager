-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 09:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silver_worx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `f_name` varchar(500) NOT NULL,
  `l_name` varchar(500) NOT NULL,
  `Phone` varchar(500) NOT NULL,
  `business` varchar(500) NOT NULL,
  `number` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `terms` varchar(500) NOT NULL,
  `token` varchar(500) NOT NULL,
  `shop_name` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `rest_email` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `l_name`, `Phone`, `business`, `number`, `message`, `terms`, `token`, `shop_name`, `Password`, `email`, `rest_email`, `logo`, `banner`, `choice`, `status`) VALUES
(9, 'Muhammad', 'Ali', '03457835320', 'ELECTRONICS', '03337653218', 'test', 'check', '80480041', 'khalid', '123', 'zartash.tahir042@gmail.com', '', '417de7dddeb8504ac42eea4071a51414.jpg', 'dc3051fb8bf63fe5c65e5e9ca8eecf4e.PNG', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `track_rel_id` int(11) NOT NULL,
  `track_artist` varchar(255) NOT NULL,
  `track_title` varchar(255) NOT NULL,
  `track_remix_art` int(11) NOT NULL,
  `track_mix_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xz_artist`
--

CREATE TABLE `xz_artist` (
  `id` int(11) NOT NULL,
  `art_name` varchar(255) NOT NULL,
  `art_web` varchar(255) NOT NULL,
  `art_type` varchar(255) NOT NULL,
  `art_fb` varchar(255) NOT NULL,
  `art_twitter` varchar(255) NOT NULL,
  `art_myspace` varchar(255) NOT NULL,
  `art_youtube` varchar(255) NOT NULL,
  `art_soudcloud` varchar(255) NOT NULL,
  `art_rss` varchar(255) NOT NULL,
  `art_biography` varchar(255) NOT NULL,
  `art_img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xz_artist`
--

INSERT INTO `xz_artist` (`id`, `art_name`, `art_web`, `art_type`, `art_fb`, `art_twitter`, `art_myspace`, `art_youtube`, `art_soudcloud`, `art_rss`, `art_biography`, `art_img_url`) VALUES
(4, 'sdadask', 'sdasdasd', 'Guest Remixer', 'facebook.com', '', 'myspcsdf', '', 'dsdf', 'rss', 'dfskdfnsdf', 'images_(1).jpg'),
(5, 'aada', 'ww', 'Guest Remixer', 'kfjksdj', 'dssf', 'ksdfksd', 'jskdfjksdl', 'dnfsfdl', 'sdnf', 'fndfn', 'image-6.jpg'),
(6, 'aaaa', 'bbbb', 'Guest Remixer', 'fb', 'tw', 'msp', 'www.youtube.com', 'sc', 'rsssssss', 'hi hjshdf fdshfd sdfs', 'image-31.jpg'),
(7, 'kjsdjksa', 'jskdhajs', 'Label Artist', 'sadhhad', 'sdbsd', 'mnsfdf', 'jkkjdsf', '', '', '', 'image-311.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `xz_label`
--

CREATE TABLE `xz_label` (
  `id` int(11) NOT NULL,
  `label_name` varchar(255) NOT NULL,
  `label_address` varchar(255) NOT NULL,
  `label_contact` varchar(255) NOT NULL,
  `label_country` varchar(255) NOT NULL,
  `label_phone` int(11) NOT NULL,
  `label_fax` int(11) NOT NULL,
  `label_web` varchar(255) NOT NULL,
  `use_main_detail` tinyint(1) NOT NULL,
  `label_cont_email` varchar(255) NOT NULL,
  `label_main_email` varchar(255) NOT NULL,
  `label_feedback_email` varchar(255) NOT NULL,
  `label_fb` varchar(255) NOT NULL,
  `label_soundcloud` varchar(255) NOT NULL,
  `label_myspace` varchar(255) NOT NULL,
  `label_twitter` varchar(255) NOT NULL,
  `label_youtube` varchar(255) NOT NULL,
  `label_rss` varchar(255) NOT NULL,
  `label_google` varchar(255) NOT NULL,
  `label_instagram` varchar(255) NOT NULL,
  `label_tumblr` varchar(255) NOT NULL,
  `label_digg` varchar(255) NOT NULL,
  `label_distribute` int(10) NOT NULL,
  `label_parent` varchar(255) NOT NULL,
  `label_sublabel` varchar(255) NOT NULL,
  `label_established` varchar(255) NOT NULL,
  `label_catalog` varchar(255) NOT NULL,
  `label_format` varchar(255) NOT NULL,
  `label_artist1` varchar(255) NOT NULL,
  `label_artist2` varchar(255) NOT NULL,
  `label_artist3` varchar(255) NOT NULL,
  `label_artist4` varchar(255) NOT NULL,
  `label_artist5` varchar(255) NOT NULL,
  `label_main_genre` varchar(255) NOT NULL,
  `label_sec_genre` varchar(255) NOT NULL,
  `label_logo` varchar(255) NOT NULL,
  `label_promo_logo` varchar(255) NOT NULL,
  `label_biography` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xz_label`
--

INSERT INTO `xz_label` (`id`, `label_name`, `label_address`, `label_contact`, `label_country`, `label_phone`, `label_fax`, `label_web`, `use_main_detail`, `label_cont_email`, `label_main_email`, `label_feedback_email`, `label_fb`, `label_soundcloud`, `label_myspace`, `label_twitter`, `label_youtube`, `label_rss`, `label_google`, `label_instagram`, `label_tumblr`, `label_digg`, `label_distribute`, `label_parent`, `label_sublabel`, `label_established`, `label_catalog`, `label_format`, `label_artist1`, `label_artist2`, `label_artist3`, `label_artist4`, `label_artist5`, `label_main_genre`, `label_sec_genre`, `label_logo`, `label_promo_logo`, `label_biography`) VALUES
(1, 'jsjkh ', 'DMDNFS', '0', 'UK', 34234234, 534545, 'wwww', 1, 'tahir@zarskjk.com', 'zartash.tahir042@gmail.com', 'asifnaseer2006@hotmail.com', 'fb', 'sc', 'mp', 'tw', 'yiu', 'rss', 'google', 'insta', 'tumler', 'digg', 0, 'xzcxz', 'tahir@hasdha.com', '1934', '343', '', 'aa', 'bb', 'cc', 'dd', '', 'Jazz', 'Bass', '', '', 'dhfjkhsdjf fds fdsjjhfdsd');

-- --------------------------------------------------------

--
-- Table structure for table `xz_release`
--

CREATE TABLE `xz_release` (
  `id` int(11) NOT NULL,
  `rel_artist` varchar(255) NOT NULL,
  `rel_name` varchar(255) NOT NULL,
  `rel_recordlabel` text NOT NULL,
  `rel_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xz_artist`
--
ALTER TABLE `xz_artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xz_label`
--
ALTER TABLE `xz_label`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xz_release`
--
ALTER TABLE `xz_release`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `xz_artist`
--
ALTER TABLE `xz_artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `xz_label`
--
ALTER TABLE `xz_label`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `xz_release`
--
ALTER TABLE `xz_release`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
