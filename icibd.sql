-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 05:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icibd`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `vlink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`, `vlink`) VALUES
(1, 'We are a team of experienced hospitality professionals offering skills development in the hospitality industry to students and professionals around the world. We provide a platform for gaining BTEB qualifications which equip our learners with the latest skills for better employment prospects in the global job market. Our qualifications and skills are the latest and best in the current learning environment, while our fees are most competitive in the marke', 'kGbm3rh34qE');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Coursesid` int(11) NOT NULL,
  `Coursestitile` varchar(300) NOT NULL,
  `Coursesname` varchar(300) NOT NULL,
  `Courseditiles` varchar(300) NOT NULL,
  `cimg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Coursesid`, `Coursestitile`, `Coursesname`, `Courseditiles`, `cimg`) VALUES
(1, 'Professional Chef Course', '(Level- 1) 3 Months course', 'Basic grooming for interpersonal &amp; external skill in workplace,introducing food &amp; beverage production update ground,menu engineering, basic knowledge of cuisine,', 'c1.jpg'),
(2, 'Professional Chef Course', '(Level- 2) 3 Months course', 'Basic grooming for interpersonal & external skill in workplace,introducing food & beverage production update ground,menu engineering, basic knowledge of cuisine,', 'c2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `evenid` int(11) NOT NULL,
  `eventitle` varchar(300) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `evenimg` varchar(255) NOT NULL,
  `ditails` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`evenid`, `eventitle`, `from_date`, `to_date`, `evenimg`, `ditails`) VALUES
(2, 'Vocational Counselling', '2018-12-20 00:00:00', '2018-12-21 00:00:00', 'Windpws 10 Build by tomeCar (11).jpg', 'Columbia Records is an American record label owned by Sony Music Entertainment, a subsidiary of Sony Corporation of America, the North American division of Japanese conglomerate Sony. It was founded in 1887, evolving from the American Graphophone Company, the successor to the Volta Graphophone Company.[1] Columbia is the oldest surviving brand name in the recorded sound business,[2][3][4] and the second major company to produce records.[5] From 1961 to 1990, Columbia recordings were released outside North America under the name CBS Records to a'),
(3, 'Columbia Records is an A', '2018-12-26 00:00:00', '2018-12-20 00:00:00', 'Windpws 10 Build by tomeCar (33).jpg', 'Columbia Records is an American record label owned by Sony Music Entertainment, a subsidiary of Sony Corporation of America, the North American division of Japanese conglomerate Sony. It was founded in 1887, evolving from the American Graphophone Company, the successor to the Volta Graphophone Company.[1] Columbia is the oldest surviving brand name in the recorded sound business,[2][3][4] and the second major company to produce records');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `imgid` int(11) NOT NULL,
  `imtitle` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `slider` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`imgid`, `imtitle`, `img`, `slider`) VALUES
(1, '<span> Teaching</span> is not a job, <span>it is aPillar Of The Society</span>', 's1.jpg', 1),
(2, '<span>A Teacher </span> takes a <span>hand, mind</span>And Touches a <span>Heart</span>', 's2.jpg', 1),
(3, '', 's3.jpg', 1),
(4, '', 's4.jpg', 1),
(5, '', 's5.jpg', 1),
(8, '', 'img5.jpg', 0),
(9, '', 'img3.jpg', 0),
(10, '', 'img1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `detalis` varchar(1000) NOT NULL,
  `img` varchar(300) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `detalis`, `img`, `date_time`) VALUES
(1, 'Best Culinary Schools', 'Plenty of us enjoy cooking, but few take it to the professional level. For those who choose to go pro, the culinary industry presents a large job market with lots different options for employment and specialization, as well as mobility. However\r\nncient influences have helped spawn variant interpretations of the nature of history which have evolved over the centuries and continue to change today. The modern study of history is wide-ranging, and includes the study of specific regions and the study of certain topical or thematical elements of historical investigation. Often history is taught\r\n\r\n\r\n', 'news1.jpg', '2018-12-13 07:10:07'),
(2, 'Are our teachers really', 'DHAKA: After nearly half a century navigating Bangladesh\'s thousands of kilometres of rivers, the country\'s most celebrated swimmer has hung up his trunks - but not before one final, arduous paddle upstream.Kshitindra Baisya, 67, plans to spend his retirement on dry land inspiring younger generations to embrace the water in a country criss-crossed by huge rivers but where few swim.A veteran of Bangladesh\'s 1971 independence war against Pakistan, Baisya taught himself to swim at 18 and before long was paddling marathon distances along murky channels.Baisya has not broken any speed records - but his self-taught technique has allowed him to cover vast distances solo during a career unrivalled in Bangladesh', 'news2.jpg', '2018-12-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partnerid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `website` varchar(300) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partnerid`, `name`, `email`, `img`, `website`, `phone`) VALUES
(1, 'logo', 'logo@gmail.com', 'partner3.png', 'www', 1729789114);

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `trainersid` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `detalis` varchar(1000) NOT NULL,
  `timg` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Phone` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`trainersid`, `name`, `detalis`, `timg`, `Email`, `Phone`) VALUES
(2, 'Daniel C. Gomes.', 'Corporate Executive Chef Experience: 28 years Chef Trainer (Celebrity Chef & Member of World Culinary Union).', 't1.jpg ', '', ''),
(3, 'Zahangir Alam', 'Director, Training  Experience: 29 years Tour Guiding, Food Safety, Hygiene & HACCP Specialist. Fomer Trainer of NHTTI', 't2.jpg ', '', ''),
(4, 'Muhammad Abdul Mannan', 'Sr. Trainer, HK  Experience: 26 years Executive Housekeeper', 't3.jpg ', '', ''),
(5, 'Jennifar Shawon', 'Trainer, F&B Production Experience: 4 Years F&B Productions ,', 't4.jpg ', '', ''),
(6, 'Rafia Ahammed', 'Tainer, F&B Production Experience: 4 Years F&B Productions, Bakery & Pastry, French Language.', 't5.jpg ', '', ''),
(8, 'Chef Devid Rozario', 'Carving ChefExperience: 40 YearsSr. Trainer (Food Curving)', 't6.jpg ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `userpic` varchar(300) NOT NULL,
  `fullname` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `userpass`, `userpic`, `fullname`) VALUES
(1, 'iciAdmin', 'c9b0f617f9ff8c3d4f4db430549fe521', 'user.jpg', 'Admin'),
(2, 'imtiaz', 'f90d1fb787481e8f71c1deffb31ac193', 'imtiaz.jpg', ' Imtiaz Itrat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Coursesid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`evenid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partnerid`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`trainersid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `Coursesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `evenid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partnerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `trainersid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
