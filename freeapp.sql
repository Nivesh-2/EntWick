-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 06:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freeapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `userId` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `userId`, `password`, `phone`) VALUES
(1, 'hjdddii', 'jkkjkdjhfjk@gmail.com', 'ghs@04.19_650', 'Bt8nE7', '0'),
(2, 'Nivesh', 'nivesh@gmail.com', 'Niv@04.19_385', 'P4z8Sc', '2147483647'),
(3, 'Nivesh', 'nivesh@gmail.com', 'Niv@04.19_792', 'N3Dx5z', '2147483647'),
(4, 'Nivesh', 'nivesh@gmail.com', 'Sha@04.19_937', 'vrG2V1', '8972438742'),
(5, 'nivesh', 'lksd@gamil.com', 'lka@04.19_159', 'nivesh321', '1234567890'),
(6, 'Nivesh', 'mittapally.nivesh@gmail.com', 'Nivesh-02', 'nivesh123', '6303575140'),
(7, 'Nivesh', 'mittapally.nivesh@gmail.com', 'Hel@04.19_591', 'gAY56d', '6303575140'),
(8, 'Nivesh', 'nivesh@gmail.com', 'Ins@04.19_863', 'insta', '1245678900'),
(9, 'fghjk', 'hj@gmail.com', 'kha@04.19_016', 'j0DhR5', '1234567890'),
(10, 'Nivesh', 'nivesh@gmail.com', 'Fac@04.19_198', 'Facebook', '6683892101'),
(11, 'jklfsljh', 'jlsdfhl@gmail.com', 'jad@04.19_291', 'AC4eu2', '1234567890'),
(12, 'jklfsljh', 'jlsdfhl@gmail.com', 'jad@04.19_859', 'sS2pV1', '1234567890'),
(13, 'jklfsljh', 'jlsdfhl@gmail.com', 'jad@04.19_049', 'l4yWP3', '1234567890'),
(14, 'jklfsljh', 'jlsdfhl@gmail.com', 'jad@04.19_260', '08aUfJ', '1234567890'),
(15, 'jklfsljh', 'jlsdfhl@gmail.com', 'jad@04.19_045', '0zZFl6', '1234567890'),
(16, 'jklfsljh', 'jlsdfhl@gmail.com', 'jad@04.19_832', 'Jr6u9Z', '1234567890'),
(17, 'jklfsljh', 'jlsdfhl@gmail.com', 'jad@04.19_297', 'S07khR', '1234567890'),
(18, 'jklfsljh', 'jlsdfhl@gmail.com', 'jad@04.19_930', 'zQJ90o', '1234567890'),
(19, 'jklfsljh', 'jlsdfhl@gmail.com', 'jad@04.19_567', 'MDgd74', '1234567890'),
(20, 'fghjkl', 'gfghjjk@gamil.com', 'ahd@04.19_486', 'vZ31mU', '1234567890'),
(21, 'fghjkl', 'gfghjjk@gamil.com', 'ahd@04.19_645', '0UcPt8', '1234567890'),
(22, 'fghjkl', 'gfghjjk@gamil.com', 'ahd@04.19_387', 'AGr8h6', '1234567890'),
(23, 'Nivesh', 'mittapally.nivesh@gmail.com', 'Hel@04.19_739', 'S2Yd7a', '6303575140'),
(24, 'Pallav Dubey', 'rajeevpallav606@gmail.com', 'Hel@04.19_615', 'u2Pj9D', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `upload-form`
--

CREATE TABLE `upload-form` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `userId` varchar(20) NOT NULL,
  `short` text NOT NULL,
  `longDis` text NOT NULL,
  `screenshots` text NOT NULL,
  `icon` text NOT NULL,
  `graphic` text NOT NULL,
  `video` text NOT NULL,
  `policy` text NOT NULL,
  `apk` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload-form`
--

INSERT INTO `upload-form` (`id`, `title`, `userId`, `short`, `longDis`, `screenshots`, `icon`, `graphic`, `video`, `policy`, `apk`, `name`, `email`, `phone`, `status`) VALUES
(1, 'Shadow Fight', '', 'game', 'Its a very good game', 'butterfly.jpg, city.jpg, desert.jpg, ', 'city.jpg', 'flower.jpg', '', '', 'adb-setup-1.4.3 (1).exe', 'Nivesh', 'nivesh@gmail.com', '1234567890', 'No'),
(2, 'Subway Surfers', '', 'game', 'Very Good game', 'Screenshot (16) - Copy.png, Screenshot (17) - Copy.png, Screenshot (29).png, Screenshot (30).png, ', 'butterfly.jpg', 'flower - Copy.jpg', '', '', 'JumpList.xml', 'Niv', 'niv@gmail.com', '1234567890', 'No'),
(3, 'Nivesh', '', 'hkafds', 'hkfjdskfhkjadfhajklds', 'butterfly.jpg, city - Copy.jpg, ', 'flower - Copy.jpg', 'city - Copy.jpg', '', '', 'aow_drv.log', 'NIvesh', 'mittapally.nivesh@gmail.com', '1234567890', 'No'),
(4, 'Nivesh', '', 'hkafds', 'hkfjdskfhkjadfhajklds', 'butterfly.jpg, city - Copy.jpg, ', 'flower - Copy.jpg', 'city - Copy.jpg', '', '', 'aow_drv.log', 'NIvesh', 'mittapally.nivesh@gmail.com', '1234567890', 'No'),
(5, 'ghsj', '', 'hdjsk', 'hdjskl', 'butterfly.jpg, ', 'flower - Copy.jpg', 'tiger - Copy.jpg', '', '', 'night.jpg', 'hjdddii', 'jkkjkdjhfjk@gmail.com', '0', ''),
(8, 'Nivesh', '', 'jkljfsglkjgs', 'lkjfskljsf', 'butterfly.jpg, ', 'city - Copy.jpg', 'flower - Copy.jpg', '', '', 'about.php', 'Nivesh', 'nivesh@gmail.com', '2147483647', ''),
(9, 'Nivesh', '', 'jkljfsglkjgs', 'lkjfskljsf', 'Niv@04.19_792_butterfly.jpg, ', 'city - Copy.jpg', 'flower - Copy.jpg', '', '', 'about.php', 'Nivesh', 'nivesh@gmail.com', '2147483647', ''),
(10, 'Shadow Fight', '', 'akjfalk;f', 'kljffdjlkasd', 'Sha@04.19_937_butterfly.jpg', 'flower.jpg', 'tiger.jpg', '', '', 'city.jpg', 'Nivesh', 'nivesh@gmail.com', '8972438742', ''),
(11, 'lkasfdjklfa', 'lka@04.19_159', 'lksjdflskdfj', 'lkjsflskdjflsfkd', 'lka@04.19_159_butterfly.jpg, ', 'lka@04.19_159_tiger.jpg', 'city.jpg', '', '', 'WIN_20151204_130530.JPG', 'nivesh', 'lksd@gamil.com', '1234567890', ''),
(12, 'Hello', 'Nivesh-02', 'Hello', 'how are u?', 'Hel@04.19_248_Screenshot (57).png, ', 'Hel@04.19_248_Screenshot (17).png', 'Screenshot (16) - Copy.png', '', '', 'adb-setup-1.4.3 (1).exe', 'Nivesh', 'mittapally.nivesh@gmail.com', '6303575140', ''),
(13, 'Hello', '', 'Hello', 'how are u?', 'Hel@04.19_591_Screenshot (57).png, ', 'Screenshot (17).png', 'Screenshot (16) - Copy.png', '', '', 'adb-setup-1.4.3 (1).exe', 'Nivesh', 'mittapally.nivesh@gmail.com', '6303575140', ''),
(14, 'Instagram', 'Ins@04.19_863', 'social app', 'very good app', 'Ins@04.19_863_download (1).jpg, ', 'Ins@04.19_863_download.jpg', 'Ins@04.19_863_night - Copy.jpg', '', '', 'Ins@04.19_863_adb-setup-1.4.3 (1).exe', 'Nivesh', 'nivesh@gmail.com', '1245678900', 'Uploaded'),
(15, 'khaksd', 'kha@04.19_016', 'dkjjklafklsd', 'llkjfklfjlk;jsa;', 'kha@04.19_016_butterfly.jpg, ', 'kha@04.19_016_flowers.jpg', 'kha@04.19_016_download.jpg', '', '', 'kha@04.19_016_download (1).jpg', 'fghjk', 'hj@gmail.com', '1234567890', ''),
(16, 'Facebook', 'Fac@04.19_198', 'hello', 'hello', 'Fac@04.19_198_flowers.jpg, ', 'Fac@04.19_198_desert.jpg', 'Fac@04.19_198_download (1).jpg', '', '', 'Fac@04.19_198_readme.txt', 'Nivesh', 'nivesh@gmail.com', '6683892101', 'Uploaded'),
(17, 'jadsfljkasdlkf', 'jad@04.19_291', 'kl;jsdfkal;fj', 'ksfgkl;dkfg;jkl', 'jad@04.19_291_download (1).jpg, ', 'jad@04.19_291_download.jpg', 'jad@04.19_291_flower - Copy.jpg', '', '', 'jad@04.19_291_city.jpg', 'jklfsljh', 'jlsdfhl@gmail.com', '1234567890', 'Pending....'),
(18, 'jadsfljkasdlkf', 'jad@04.19_859', 'kl;jsdfkal;fj', 'ksfgkl;dkfg;jkl', 'jad@04.19_859_download (1).jpg, ', 'jad@04.19_859_download.jpg', 'jad@04.19_859_flower - Copy.jpg', '', '', 'jad@04.19_859_city.jpg', 'jklfsljh', 'jlsdfhl@gmail.com', '1234567890', 'Pending....'),
(19, 'jadsfljkasdlkf', 'jad@04.19_049', 'kl;jsdfkal;fj', 'ksfgkl;dkfg;jkl', 'jad@04.19_049_download (1).jpg, ', 'jad@04.19_049_download.jpg', 'jad@04.19_049_flower - Copy.jpg', '', '', 'jad@04.19_049_city.jpg', 'jklfsljh', 'jlsdfhl@gmail.com', '1234567890', 'Pending....'),
(20, 'jadsfljkasdlkf', 'jad@04.19_260', 'kl;jsdfkal;fj', 'ksfgkl;dkfg;jkl', 'jad@04.19_260_download (1).jpg, ', 'jad@04.19_260_download.jpg', 'jad@04.19_260_flower - Copy.jpg', '', '', 'jad@04.19_260_city.jpg', 'jklfsljh', 'jlsdfhl@gmail.com', '1234567890', 'Pending....'),
(21, 'jadsfljkasdlkf', 'jad@04.19_045', 'kl;jsdfkal;fj', 'ksfgkl;dkfg;jkl', 'jad@04.19_045_download (1).jpg, ', 'jad@04.19_045_download.jpg', 'jad@04.19_045_flower - Copy.jpg', '', '', 'jad@04.19_045_city.jpg', 'jklfsljh', 'jlsdfhl@gmail.com', '1234567890', 'Pending....'),
(22, 'jadsfljkasdlkf', 'jad@04.19_832', 'kl;jsdfkal;fj', 'ksfgkl;dkfg;jkl', 'jad@04.19_832_download (1).jpg, ', 'jad@04.19_832_download.jpg', 'jad@04.19_832_flower - Copy.jpg', '', '', 'jad@04.19_832_city.jpg', 'jklfsljh', 'jlsdfhl@gmail.com', '1234567890', 'Pending....'),
(23, 'jadsfljkasdlkf', 'jad@04.19_297', 'kl;jsdfkal;fj', 'ksfgkl;dkfg;jkl', 'jad@04.19_297_download (1).jpg, ', 'jad@04.19_297_download.jpg', 'jad@04.19_297_flower - Copy.jpg', '', '', 'jad@04.19_297_city.jpg', 'jklfsljh', 'jlsdfhl@gmail.com', '1234567890', 'Pending....'),
(24, 'jadsfljkasdlkf', 'jad@04.19_930', 'kl;jsdfkal;fj', 'ksfgkl;dkfg;jkl', 'jad@04.19_930_download (1).jpg, ', 'jad@04.19_930_download.jpg', 'jad@04.19_930_flower - Copy.jpg', '', '', 'jad@04.19_930_city.jpg', 'jklfsljh', 'jlsdfhl@gmail.com', '1234567890', 'Pending....'),
(25, 'jadsfljkasdlkf', 'jad@04.19_567', 'kl;jsdfkal;fj', 'ksfgkl;dkfg;jkl', 'jad@04.19_567_download (1).jpg, ', 'jad@04.19_567_download.jpg', 'jad@04.19_567_flower - Copy.jpg', '', '', 'jad@04.19_567_city.jpg', 'jklfsljh', 'jlsdfhl@gmail.com', '1234567890', 'Pending....'),
(26, 'ahdakldfjl', 'ahd@04.19_486', 'jkhlkfhjaslkdf', 'jhljslslfhjlskfhkjld', 'ahd@04.19_486_butterfly.jpg, ', 'ahd@04.19_486_flowers.jpg', 'ahd@04.19_486_', '', '', 'ahd@04.19_486_city.jpg', 'fghjkl', 'gfghjjk@gamil.com', '1234567890', 'Pending....'),
(27, 'ahdakldfjl', 'ahd@04.19_645', 'jkhlkfhjaslkdf', 'jhljslslfhjlskfhkjld', 'ahd@04.19_645_butterfly.jpg, ', 'ahd@04.19_645_flowers.jpg', '', '', '', 'ahd@04.19_645_city.jpg', 'fghjkl', 'gfghjjk@gamil.com', '1234567890', 'Pending....'),
(28, 'ahdakldfjl', 'ahd@04.19_387', 'jkhlkfhjaslkdf', 'jhljslslfhjlskfhkjld', 'ahd@04.19_387_butterfly.jpg, ', 'ahd@04.19_387_flowers.jpg', '', '', '', 'ahd@04.19_387_city.jpg', 'fghjkl', 'gfghjjk@gamil.com', '1234567890', 'Pending....'),
(29, 'Hello World', 'Hel@04.19_739', 'Hello', 'how are you', 'Hel@04.19_739_butterfly.jpg, ', 'Hel@04.19_739_night - Copy.jpg', '', '', '', 'Hel@04.19_739_download (1).jpg', 'Nivesh', 'mittapally.nivesh@gmail.com', '6303575140', 'Pending....'),
(30, 'Hello World', 'Hel@04.19_615', 'nibesj', 'jsl;', 'Hel@04.19_615_download.jpg, ', 'Hel@04.19_615_butterfly.jpg', '', '', '', 'Hel@04.19_615_city - Copy.jpg', 'Pallav Dubey', 'rajeevpallav606@gmail.com', '1234567890', 'Pending....');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload-form`
--
ALTER TABLE `upload-form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `upload-form`
--
ALTER TABLE `upload-form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
