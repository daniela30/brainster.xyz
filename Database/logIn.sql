-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2018 at 01:41 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.2.4-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logIn`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
(2, 'dancheto_1995@hotmail.com', '07a88e756847244f3496f63f473d6085'),
(3, 'vesna_veles@hotmail.com', '007a791be8b87afca5b761509a012b3d'),
(4, 'marija.krstevska@hotmail.com', 'cb74c183402afe708a490f0048af6e41');

-- --------------------------------------------------------

--
-- Table structure for table `companylogin`
--

CREATE TABLE `companylogin` (
  `id` int(11) NOT NULL,
  `telNumber` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `companyName` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companylogin`
--

INSERT INTO `companylogin` (`id`, `telNumber`, `email`, `companyName`) VALUES
(9, '077/986-008', 'dancheto_1995@hotmail.com', 'Daniela'),
(10, '079/579-785', 'vesna_v@hotmail.com', 'Veles'),
(11, '023/456-789', 'zegin@hotmail.com', 'Zegin');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `image` text,
  `title` varchar(15) DEFAULT NULL,
  `subtitle` varchar(64) DEFAULT NULL,
  `description` text,
  `destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `image`, `title`, `subtitle`, `description`, `destination`) VALUES
(25, 'http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c529.png', 'Netflix  dasf', 'American over-the-top media services provider ', 'Netflix, Inc. is an American over-the-top media services provider, headquartered in Los Gatos, California. Founded in 1997 by Reed Hastings and Marc Randolph in Scotts Valley, ', 'https://www.netflix.com/mk/'),
(26, 'https://files.gamebanana.com/img/ico/sprays/linkinpark.png', ' Linkin Park a', 'American rock band from Agoura Hills, California', 'Linkin Park is an American rock band from Agoura Hills, California. Formed in 1996, the band rose to international fame with their debut album Hybrid Theory (2000), which was certified Diamond by the ', 'https://linkinpark.com/'),
(36, 'http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c516.png', 'Apple ', 'Multinational technology company', 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. ', 'https://www.apple.com/lae/'),
(37, 'https://i.pinimg.com/originals/f1/73/cc/f173ccff88e31ffadf9f7b986b872fe7.png', 'Brainster', 'Marketplace that answers todayâ€™s problems with education. ', 'Brainster is a marketplace that answers todayâ€™s problems with education. More people want to gain real-world skills, but donâ€™t have enough time', 'https://brainster.co/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companylogin`
--
ALTER TABLE `companylogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `companylogin`
--
ALTER TABLE `companylogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
