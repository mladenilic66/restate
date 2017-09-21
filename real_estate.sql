-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 08:22 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(200) NOT NULL,
  `id_fake` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_category` int(5) NOT NULL,
  `headline` varchar(400) NOT NULL,
  `quadrature` int(10) NOT NULL,
  `id_structure` int(5) NOT NULL,
  `id_city` int(5) NOT NULL,
  `address` varchar(400) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `rooms_number` varchar(5) NOT NULL,
  `id_pets_allowed` int(10) NOT NULL,
  `id_parking_lot` int(10) NOT NULL,
  `id_heating` int(10) NOT NULL,
  `id_availability` int(10) NOT NULL,
  `equipment` varchar(300) NOT NULL,
  `price` decimal(6,0) NOT NULL,
  `deposit` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `id_fake`, `id_user`, `id_category`, `headline`, `quadrature`, `id_structure`, `id_city`, `address`, `description`, `image`, `rooms_number`, `id_pets_allowed`, `id_parking_lot`, `id_heating`, `id_availability`, `equipment`, `price`, `deposit`, `created`) VALUES
(2, 10169025, 1, 2, 'Braće Jerković, 56m2', 56, 1, 2, 'Martozova 32', 'some description goes here', '', '2', 1, 2, 1, 1, 'a:5:{i:0;s:8:"Internet";i:1;s:2:"AC";i:2;s:6:"Fridge";i:3;s:15:"Washing machine";i:4;s:5:"Other";}', '0', '0', '2017-06-25 17:33:08'),
(15, 44539128, 1, 3, 'Kluz, Bulevar kralja Aleksandra 422', 123, 1, 13, 'saasas', 'asasasasa', '', '2', 2, 2, 1, 1, 'a:5:{i:0;s:8:"Internet";i:1;s:2:"AC";i:2;s:6:"Fridge";i:3;s:15:"Washing machine";i:4;s:5:"Other";}', '100', '1000', '2017-07-27 17:36:13'),
(16, 20149611, 4, 2, 'Test 10', 130, 1, 2, 'Milankova 345 v', 'the best so far', '', '1', 2, 3, 3, 2, 'a:5:{i:0;s:8:"Internet";i:1;s:2:"AC";i:2;s:6:"Fridge";i:3;s:15:"Washing machine";i:4;s:5:"Other";}', '677', '677', '2017-07-29 11:05:14'),
(17, 67820872, 3, 2, 'Lux Apartment Belgrade Branka Ivkovica 55a, najbolji stan ikada', 134, 1, 2, 'Branka Ivkovica Branka Ivkovica Branka Ivkovica 34a', 'Etiam pharetra ultricies enim, non aliquam lectus vehicula vel. Nunc orci ex, pellentesque a ultrices ut, imperdiet quis arcu. Etiam condimentum fringilla elit, in porttitor urna sagittis malesuada.', '', '4', 1, 4, 2, 2, 'a:5:{i:0;s:8:"Internet";i:1;s:2:"AC";i:2;s:6:"Fridge";i:3;s:15:"Washing machine";i:4;s:5:"Other";}', '1200', '1200', '2017-07-30 21:11:59'),
(27, 28710832, 5, 2, 'Test 18', 33, 2, 18, 'sdsdsds', 'dsdsdsds', '1.jpg', '5', 1, 1, 4, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '299', '299', '2017-08-24 20:14:33'),
(57, 90431963, 6, 2, 'Test 24', 49, 1, 1, 'Slatova 44s', 'Lorem ipsum here nertium est velit', '1-tb.jpg,2.jpg,2-tb.jpg,3.jpg,56.png,57.png', '1', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '222', '222', '2017-08-31 20:07:12'),
(59, 40914326, 7, 2, 'Stan', 100, 1, 1, 'Dusanovacka 33a', 'Donec rutrum pellentesque sagittis lobortis diam rhoncus a habitant hendrerit, himenaeos arcu purus morbi platea torquent porta turpis feugiat fames, facilisi inceptos venenatis vestibulum non semper dis commodo. Ante metus scelerisque semper est non ullamcorper maecenas habitant, ligula arcu enim nostra ac dapibus porttitor sapien, eros sociosqu in magnis luctus ultricies etiam. Faucibus a penatibus id mauris potenti arcu nascetur at tellus, fringilla sed netus dapibus proin quam non velit mus lacus, turpis vitae eros porttitor torquent nam dictum orci. Himenaeos eleifend platea nascetur ligula duis hendrerit varius conubia potenti feugiat a magna, facilisis arcu rutrum condimentum sociis nullam aptent malesuada cubilia mauris eget morbi velit, proin habitasse or', '9.jpeg,about.jpg,jc.jpg', '3', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '1300', '200', '2017-08-31 20:27:00'),
(61, 90471953, 4, 2, 'Test 33', 22, 1, 1, 'Milenkova 44', 'd s sd sds dsds ddsd  ', '1.jpg,1-tb.jpg,2.jpg,2-tb.jpg,3.jpg,3-tb.jpg,4.jpg,4-tb.jpg,5.jpg,5-tb.jpg,6.jpg,6-tb.jpg,9.jpeg,56.png,57.png,65.jpeg,about.jpg,bx-loader.gif,jc.jpg,logo3---Copy.png', '1.5', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '500', '500', '2017-09-01 17:14:17'),
(62, 69046721, 24, 3, 'Zlatiborska Vila 2 - 39m2 1.5, Spa centar', 39, 1, 1, 'Centar, Svetogorska, 2', 'Fringilla facilisis porta aenean leo nec commodo varius condimentum, pellentesque ante senectus mi mauris congue risus, nulla suspendisse sapien lacinia duis phasellus accumsan. Nascetur euismod nisl auctor turpis bibendum dictum metus volutpat habitant, viverra rhoncus felis varius tempor himenaeos magna ac velit cras, erat blandit maecenas tincidunt interdum vel cubilia at. Augue aptent luctus cursus ullamcorper metus neque, senectus placerat cum a facilisis volutpat, imperdiet justo phasellus vehicula pellentesque. Tempor urna litora sagittis laoreet nisl taciti imperdiet hac egestas maecenas non aenean, molestie congue mus dignissim est auctor integer senectus inceptos aliquam.', 'img0599T1504453235-540c.jpg,img0602T1504453275-540c.jpg,img0603T1504453309-540c.jpg,osnovaispratapage0011T1504453325-540c.jpg,spacentarpage001sT1504453329-540c.jpg', '1.5', 1, 1, 1, 2, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '100', '200', '2017-09-03 16:33:52'),
(63, 60012311, 1, 2, 'Zemun, centar - Oračka, 45m2', 45, 1, 1, 'vvcvcvcv', 'sdd sd sds d', 'img0602T1504453275-540c.jpg', '2.5', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '222', '222', '2017-09-03 16:39:48'),
(64, 96231287, 3, 2, 'CENTAR-PEŠAČKA ZONA, KOMPLETNO RENOVIRAN, USELJIV', 55, 1, 1, 'yuyuyuyuyuy', 'fggfg fg fggfgffgg fg fg gf g fgfg  ', 'download.png,images.jpg', '4', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '445', '445', '2017-09-03 16:42:25'),
(65, 79418511, 4, 2, 'Mirijevo 54m2 3.0', 54, 2, 1, 'sdsddsd', 'dsdsdsd', '', '4.5', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '222', '334', '2017-09-03 16:53:47'),
(66, 57331976, 3, 2, 'meriiii', 222, 1, 1, 'sasasas', 'sdsdsdsd', '3.jpg,3-tb.jpg,4.jpg,4-tb.jpg,5.jpg', '5', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '222', '222', '2017-09-03 16:54:45'),
(68, 60381453, 5, 2, 'Karaburma, Patrisa Lumumbe, 62m2', 62, 1, 1, 'lkljkljklj', '', 'download.png,images.jpg', '1.5', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '876', '765', '2017-09-03 17:04:44'),
(69, 58263531, 1, 2, 'LUX!!! VISE STANOVA OD 36m2 DO 93m2 - GARANCIJA', 100, 1, 1, 'Pukovnika Milenka Pavlovica 34a', 'fggf gf fg fg fg f', 'img0599T1504453235-540c.jpg,img0602T1504453275-540c.jpg,img0603T1504453309-540c.jpg,osnovaispratapage0011T1504453325-540c.jpg,spacentarpage001sT1504453329-540c.jpg', '3', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '980', '200', '2017-09-03 18:55:43'),
(71, 71083752, 24, 2, 'Test 34', 333, 1, 21, 'df d dd df d f', 'ghfghgf', '24490.jpg', '5', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '190', '190', '2017-09-04 21:15:27'),
(72, 13067250, 7, 2, 'Test 35', 59, 1, 18, 'sdsd s sd s', 'ffdfdf df df', '24490.jpg', '2.5', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '22', '22', '2017-09-04 21:16:26'),
(79, 10571394, 24, 2, 'dsssdsd', 333, 1, 1, 'dsdsdsds', 'sdsdsd', '65.jpeg', '2.5', 1, 1, 1, 2, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '3333', '333', '2017-09-05 22:57:55'),
(80, 49265933, 24, 2, 'dsssdsd', 333, 1, 1, 'dsdsdsds', 'sdsdsd', 'jc.jpg', '2.5', 1, 1, 1, 2, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '3333', '333', '2017-09-05 22:58:12'),
(81, 52971528, 7, 2, 'Rakovica stanovi na kredit učešće od 5%', 60, 1, 18, 'Rakovica 34g', 'hjh jj   hj hj hj j jhh', '40m2T1501146556-540c.jpg,20170827144954T1504081388-540c.jpg', '2', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '200', '200', '2017-09-10 12:33:40'),
(116, 29859633, 7, 2, 'Stari grad, Skadarlija - Strahinjića bana, 59m2', 59, 1, 1, 'yuiyuiy', 'yyiyy ;yuiy', '', '0', 1, 1, 1, 1, 'a:1:{i:0;s:6:"Fridge";}', '33', '33', '2017-09-12 20:50:41'),
(117, 40939778, 7, 3, 'gravida porta 54', 333, 1, 1, 'ghg ggh', 'h h gh', '65.jpeg,319XI-iIE2L.-AC-UL320-SR274-320-.jpg', '1', 1, 1, 1, 1, 'a:2:{i:0;s:2:"AC";i:1;s:6:"Fridge";}', '1234', '12341', '2017-09-12 20:53:20'),
(118, 16841566, 7, 2, 'Nov stan za izdavanje', 432, 1, 2, 'Hilandarska 22s', 'gfdgdfgfdg fgfg fgg fg fg fg fg fg;fgf gfg f gfdgfg fg fg gf g f gfg', 'images.jpg,img0599T1504453235-540c.jpg,img0602T1504453275-540c.jpg', '3.5', 1, 1, 1, 1, 'a:4:{i:0;s:2:"AC";i:1;s:6:"Fridge";i:2;s:15:"Washing machine";i:3;s:5:"Other";}', '300', '300', '2017-09-13 17:34:58'),
(119, 20904440, 7, 2, 'Lorem ipsum dolor sit amet consectetur adipiscing', 432, 1, 2, 'Hilandarska 22s', 'gfdgdfgfdg fgfg fgg fg fg fg fg fg;fgf gfg f gfdgfg fg fg gf g f gfg', 'images.jpg,img0599T1504453235-540c.jpg,img0602T1504453275-540c.jpg', '3.5', 1, 1, 1, 1, 'a:4:{i:0;s:2:"AC";i:1;s:6:"Fridge";i:2;s:15:"Washing machine";i:3;s:5:"Other";}', '300', '300', '2017-09-13 17:40:38'),
(120, 29025668, 7, 2, 'Justo facilisis mauris hendrerit', 432, 1, 2, 'Hilandarska 22s', 'dfd fd fdf df df df dfdf df&amp;nbsp; df dfdf df d fd fd fdf dfddf&amp;nbsp;', 'images.jpg,img0599T1504453235-540c.jpg,img0602T1504453275-540c.jpg', '3.5', 1, 1, 1, 1, 'a:5:{i:0;s:8:"Internet";i:1;s:2:"AC";i:2;s:6:"Fridge";i:3;s:15:"Washing machine";i:4;s:5:"Other";}', '300', '300', '2017-09-13 17:42:45'),
(121, 30491861, 7, 2, 'Nov stan za izdavanje 3', 432, 1, 2, 'Hilandarska 22s', '<p>dfd fd fdf d<strong>f df df dfdf df&;<em> df dfdf df d<span style="text-decoration: line-through;"> fd fd fdf dfddf&;</span></em></strong></p>', 'images.jpg,img0599T1504453235-540c.jpg,img0602T1504453275-540c.jpg', '3.5', 1, 1, 1, 1, 'a:5:{i:0;s:8:"Internet";i:1;s:2:"AC";i:2;s:6:"Fridge";i:3;s:15:"Washing machine";i:4;s:5:"Other";}', '300', '300', '2017-09-13 17:48:47'),
(122, 13771759, 7, 2, 'danasss', 555, 1, 1, 'gdfgfdgdfg', '<p style="text-align: right;">fd ddf dfd fd <strong>f df f dfd df dfs ddsfdsf s</strong></p>', 'FLAPPY-bird-small-size-game.png,images.jpg', '1.5', 1, 1, 1, 1, 'a:3:{i:0;s:15:"Washing machine";i:1;s:7:"Bathtub";i:2;s:6:"Shower";}', '444', '444', '2017-09-16 23:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `title`) VALUES
(1, 'Ready to move in'),
(2, 'Not ready');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(2, 'Rent'),
(3, 'Sale');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `title`) VALUES
(1, 'Belgrade'),
(2, 'Novi Sad'),
(13, 'Bogatic'),
(18, 'Jagodina'),
(19, 'Blace'),
(21, 'London');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `title`) VALUES
(1, 'Internet'),
(2, 'Cable TV'),
(3, 'AC'),
(4, 'Fridge'),
(5, 'Washing machine'),
(6, 'Bathtub'),
(7, 'Shower'),
(8, 'Stove'),
(9, 'TV'),
(10, 'Telephone'),
(11, 'Bed'),
(12, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `heating`
--

CREATE TABLE `heating` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `heating`
--

INSERT INTO `heating` (`id`, `title`) VALUES
(1, 'Central heating\r\n'),
(2, 'Floor heating\r\n'),
(3, 'Electric heating'),
(4, 'TA'),
(5, 'Other'),
(6, 'Not availabile');

-- --------------------------------------------------------

--
-- Table structure for table `parking_lot`
--

CREATE TABLE `parking_lot` (
  `id` int(2) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking_lot`
--

INSERT INTO `parking_lot` (`id`, `title`) VALUES
(1, 'Garage'),
(2, 'Free zone'),
(3, 'Private'),
(4, 'Building'),
(5, 'Not availabile');

-- --------------------------------------------------------

--
-- Table structure for table `pets_allowed`
--

CREATE TABLE `pets_allowed` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets_allowed`
--

INSERT INTO `pets_allowed` (`id`, `title`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_number`
--

CREATE TABLE `rooms_number` (
  `id` int(5) NOT NULL,
  `title` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms_number`
--

INSERT INTO `rooms_number` (`id`, `title`) VALUES
(1, '0'),
(2, '1'),
(3, '1.5'),
(4, '2'),
(5, '2.5'),
(6, '3'),
(7, '3.5'),
(8, '4'),
(9, '4.5'),
(10, '5');

-- --------------------------------------------------------

--
-- Table structure for table `structures`
--

CREATE TABLE `structures` (
  `id` int(5) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `structures`
--

INSERT INTO `structures` (`id`, `title`) VALUES
(1, 'Apartment'),
(2, 'House'),
(5, 'Office Space'),
(8, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `id_role` int(2) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `mobile_number`, `email`, `avatar`, `id_role`, `active`) VALUES
(1, 'ana123', '12345', 'Ana', 'Anic', '0639862814', 'ana@gmail.com', '', 2, 1),
(3, 'maja123', '$2y$12$Ku5fvNf45L4elZEEPFVq3uMr.ZawMH9q2EYO..aHXkU.h7pll6bhO', 'Maja', 'Majic', '123434342343', '', '', 1, 1),
(4, 'jova123', '$2y$12$Vyn8JStwLraxtmfEggvg4.ih4.4JLHUJyYT5JvQ2/7ps08kSTCd8S', 'Jovan', 'Jovanic', '454354353435', '', '', 1, 1),
(5, 'kaja123', '$2y$12$/bdtVrocXVx6wSYxnHU8/uzZbZzXuALYPc6k7jy1IlAgmh9V3Hc9S', 'Kaja', 'Kajic', '232434342344', '', '', 2, 1),
(6, 'mika123', '$2y$12$p9GQxPepZQFmW9dM3wEGf.FuCe28FZpiMT4RKYuN8DiOYfwxwHA76', 'Mika', 'Mikic', '123456', '', '', 2, 1),
(7, 'mila123', '$2y$12$3B/Sg.aF13uvC6VGyNL5A.6HOmOcAo/zVN8LPmtXBKDtpCwG4gF8y', 'Mila', 'Milovic', '12323243453', '', '20187303-1079923612137642-1808450070-o.jpg', 1, 1),
(24, 'ana', '$2y$12$DpggPJRwPz/wXl5wZhiO2.Dy0GprBblqffamUQhWN4c2DeKLHrsVu', 'Ana', 'Stanisavljevic', '0655812346', 'ana@gmail.com', '51MHBpTD8hL.-SY300-QL70-.jpg', 1, 1),
(26, 'kilo123', '$2y$12$I5tenBU6Utce9jVdC7x7cOTeXqKH5USHtvRYflZ5W8AcHT9k5vaBK', 'Kilo', 'Stanic', '054321245', 'kilo@kilo.com', 'jc.jpg', 1, 1),
(27, 'nilo123', '$2y$12$/z0yKKhoD6JuwRllXStRt.6ts44pJw2fWI/hWIxcHzYtEgCD5a9Ha', 'Nilo', 'Stanic', '054321245', 'kilo@kilo.com', '9.jpeg', 1, 1),
(29, 'jana123', '$2y$12$hlyV.QY9Nyz2OzYcrsv76uy3z0tyLiWoKDsDH05Md.q1xFv/xXA6a', 'Jana', 'Janić', '53452334234', 'jana@janic.com', 'download.png', 1, 1),
(35, 'dadaa', '$2y$12$iWEmbGe/ay5vQxMIBGLySuIbNGL76jpR26lXvYnS.kkOplNnlPP1y', 'adaadd', 'aaadaad', '14143131', '12112@bbb.be', 'img0603T1504453309-540c.jpg', 1, 1),
(36, 'saasas', '$2y$12$cUmDcGdyKCYmdTEmUwXEnePmRne4GgE1Djw793oG2huOUpapOVD7.', 'adaadd', 'aaadaad', '14143131', '12112@bbb.be', 'img0603T1504453309-540c.jpg', 1, 1),
(37, 'dsdsdsd', '$2y$12$dI1LgZgyNd5LIeLNNhTJD.ullVtgNOSpt6/TcqGA1HEXIpUtEP8we', 'adaadd', 'aaadaad', '14143131', '12112@bbb.be', 'img0603T1504453309-540c.jpg', 1, 1),
(38, 'xcxcxcx', '$2y$12$PaQ/kUIiItgg3PecNB6B8uNJfHLVzqr8sRyyNE5x1sYDBwetwVTrG', 'sasasa', 'sasasas', '', 'qqwqwqwqw', 'Chromozome-Yamaha-102025-m-1-2x-4ab77.jpg', 1, 1),
(39, 'asasasa', '$2y$12$1v0apHpN.jQCg5m66XmEFu8I6vcHpYfvrx4IHZ.WV6N6v/76UG.ui', 'sasasasa', 'asasas', '133131311', 'qsqasaa', 'spacentarpage001sT1504453329-540c.jpg', 1, 1),
(40, 'fgdfgdgf', '$2y$12$.dJYfUIi4WEMiefjcYMSAOASwD3yEZ9ji.Wb6oFqMQJzjLMtGGuW6', 'dfgdfgdf', 'gdfgdfgd', '2353366', 'sdfds@fdfd.be', 'images.jpg', 1, 1),
(41, 'sdsdsds', '$2y$12$Qcu.5BVw76CX3whRZtOP2OcFc5GIiviPn8daKZE9dz6HCRbOSdizq', 'dsdssd', 'sdsdsd', '224242425', '2424242@vvv.ge', 'images.jpg', 1, 1),
(42, 'trterte', '$2y$12$Km8zbStI.ZZ7pYvlGwhFE./kLdu4oF3KJbGu5tT0pPRPBoGuT92gm', 'dfdfdsf', 'fdfdfdf', '2234323532', 'dfdf@gv.vo', 'images.jpg', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_categories_2` (`id_structure`),
  ADD KEY `id_city` (`id_city`),
  ADD KEY `id_pets_allowed` (`id_pets_allowed`),
  ADD KEY `id_parking_lot` (`id_parking_lot`),
  ADD KEY `id_availability` (`id_availability`),
  ADD KEY `id_heating` (`id_heating`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heating`
--
ALTER TABLE `heating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_lot`
--
ALTER TABLE `parking_lot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets_allowed`
--
ALTER TABLE `pets_allowed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms_number`
--
ALTER TABLE `rooms_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `heating`
--
ALTER TABLE `heating`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `parking_lot`
--
ALTER TABLE `parking_lot`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pets_allowed`
--
ALTER TABLE `pets_allowed`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rooms_number`
--
ALTER TABLE `rooms_number`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `structures`
--
ALTER TABLE `structures`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `fk_availability` FOREIGN KEY (`id_availability`) REFERENCES `availability` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cat` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_city` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_heat` FOREIGN KEY (`id_heating`) REFERENCES `heating` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parking` FOREIGN KEY (`id_parking_lot`) REFERENCES `parking_lot` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pets` FOREIGN KEY (`id_pets_allowed`) REFERENCES `pets_allowed` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_str` FOREIGN KEY (`id_structure`) REFERENCES `structures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_usr_role` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
