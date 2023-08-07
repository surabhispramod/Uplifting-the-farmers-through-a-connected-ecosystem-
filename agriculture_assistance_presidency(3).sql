-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2023 at 11:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture_assistance_presidency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(150) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '9696969696', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `agri_tips`
--

CREATE TABLE `agri_tips` (
  `id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `date_t` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agri_tips`
--

INSERT INTO `agri_tips` (`id`, `description`, `region`, `type`, `date_t`) VALUES
(3, 'Some issue in plant', 'East Karnataka', 'Pest Control Insecticide', '2020-08-17'),
(4, 'If you are facing Dryness in plant leaves. test', 'North Karnataka', 'Plant Growth Regulators', '2021-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(150) NOT NULL,
  `qid` varchar(500) NOT NULL,
  `expert` varchar(500) NOT NULL,
  `details` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `qid`, `expert`, `details`) VALUES
(1, '1', 'Expert1', 'this is test only. Try with real time data.'),
(2, '1', 'Binod Adhikari', 'test comment'),
(3, '1', 'Binod Adhikari', 'test comment'),
(4, '2', 'Binod Adhikari', 'Use compost manuare. 1kg per sqft');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `id` int(150) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Expert 1', 'expert1@gmail.com', '9741913380', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'test expert', 'test1@gmail.com', '9696969696', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(150) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Binod Adhikari', 'aolbinod@gmail.com', '8088021289', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Krishna Raju', 'raju@gmail.com', '9898989898', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Sreeragi', 'sreeragi@gmail.com', '9000000000', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(150) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phone`, `description`) VALUES
(1, 'Binod Adhikari', '9741913380', 'test feedback');

-- --------------------------------------------------------

--
-- Table structure for table `forecasting`
--

CREATE TABLE `forecasting` (
  `id` int(11) NOT NULL,
  `tempa` varchar(20) NOT NULL,
  `region` varchar(90) NOT NULL,
  `daily` varchar(90) NOT NULL,
  `date_t` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forecasting`
--

INSERT INTO `forecasting` (`id`, `tempa`, `region`, `daily`, `date_t`) VALUES
(2, '25', 'North karnataka', 'Overcasted', '17 Aug 2020');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `ph` varchar(4) NOT NULL,
  `bod` varchar(6) NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `cl` varchar(8) NOT NULL,
  `N` varchar(10) NOT NULL,
  `Na` varchar(9) NOT NULL,
  `Ca` varchar(11) NOT NULL,
  `P` varchar(12) NOT NULL,
  `K` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`ph`, `bod`, `mobile`, `cl`, `N`, `Na`, `Ca`, `P`, `K`) VALUES
('8', '23', '8088021289', '55', '50', '320', '200', '150', '340'),
('100', '23', '9741913380', '55', '50', '320', '200', '150', '340');

-- --------------------------------------------------------

--
-- Table structure for table `mandi`
--

CREATE TABLE `mandi` (
  `id` int(100) NOT NULL,
  `updated` varchar(500) NOT NULL,
  `corn` varchar(500) NOT NULL,
  `wheat` varchar(500) NOT NULL,
  `rice` varchar(500) NOT NULL,
  `ragi` varchar(500) NOT NULL,
  `sugarcane` varchar(500) NOT NULL,
  `pincode` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mandi`
--

INSERT INTO `mandi` (`id`, `updated`, `corn`, `wheat`, `rice`, `ragi`, `sugarcane`, `pincode`) VALUES
(4, '08/05/2023', '200', '200', '200', '200', '200', ''),
(5, '09/05/2023', '110', '110', '111', '112', '113', '560064');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `posted_by` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `stats` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `title`, `description`, `posted_by`, `price`, `stats`) VALUES
(1, 'test', 'yugauydgagdad dad ', '1', '1000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `market_rate`
--

CREATE TABLE `market_rate` (
  `id` int(150) NOT NULL,
  `corn` varchar(500) NOT NULL,
  `wheat` varchar(500) NOT NULL,
  `rice` varchar(500) NOT NULL,
  `ragi` varchar(500) NOT NULL,
  `sugarcane` varchar(500) NOT NULL,
  `pincode` varchar(500) NOT NULL,
  `updated` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `market_rate`
--

INSERT INTO `market_rate` (`id`, `corn`, `wheat`, `rice`, `ragi`, `sugarcane`, `pincode`, `updated`) VALUES
(1, '110', '100', '1000100', '100100', '100', '101010', ''),
(2, '110', '110', '110', '110', '111', '560064', '09/05/2023');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `surname` text NOT NULL,
  `address` text NOT NULL,
  `taluk` text NOT NULL,
  `place` text NOT NULL,
  `firstname` text NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `pincode` int(8) NOT NULL,
  `email` varchar(17) NOT NULL,
  `samplingdate` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`surname`, `address`, `taluk`, `place`, `firstname`, `mobile`, `pincode`, `email`, `samplingdate`, `date`) VALUES
('Adhikari', 'Bangalore Rural, Doodballapur', 'Doodballapur', 'Doodballapur', 'Binod', '9741913380', 561203, 'aolbinod@gmail.co', '2021-04-10', '2021-04-11'),
('Adhikari', 'yelahanka , bengaluru', 'Doodballapur', 'Chikballapur', 'Binod', '8088021289', 560064, 'aolbinod@gmail.co', '2021-07-07', '2021-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `details` varchar(500) NOT NULL,
  `added_on` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `details`, `added_on`) VALUES
(1, 'test title', 'hello there, farmer, this is a dummy data.', '08/05/2023'),
(3, 'test title 2', 'test details go here.', '08/05/2023 ');

-- --------------------------------------------------------

--
-- Table structure for table `post_by_expert`
--

CREATE TABLE `post_by_expert` (
  `id` int(150) NOT NULL,
  `posted_by` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `details` varchar(500) NOT NULL,
  `added_on` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_by_expert`
--

INSERT INTO `post_by_expert` (`id`, `posted_by`, `title`, `details`, `added_on`) VALUES
(1, 'Expert 1', 'test post by expert', 'India, country that occupies the greater part of South Asia. Its capital is New Delhi, built in the 20th century just south of the historic hub of Old Delhi to serve as India’s administrative centre. Its government is a constitutional republic that represents a highly diverse population consisting of thousands of ethnic groups and likely hundreds of languages. With roughly one-sixth of the world’s total population, India is the second most populous country, after China.', '09/05/2023'),
(2, 'Expert 1', 'test post by expert', 'this is a test message.', '09/05/2023');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(150) NOT NULL,
  `name` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `title`, `description`) VALUES
(1, 'Binod Adhikari', 'Test Problem', 'lorem ipsum , test problem'),
(2, 'Binod Adhikari', 'Dryness in my tomato leaves', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(100) NOT NULL,
  `sender` varchar(500) NOT NULL,
  `receiver` varchar(500) NOT NULL,
  `amt` varchar(500) NOT NULL,
  `date_time` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `sender`, `receiver`, `amt`, `date_time`) VALUES
(1, '1', '3', '1', '07:23 pm<br>09/05/2023'),
(2, '1', '3', '1', '07:43 pm<br>09/05/2023'),
(3, '1', '3', '1', '07:44 pm<br>09/05/2023'),
(4, '1', '3', '1', '07:44 pm<br>09/05/2023'),
(5, '1', '3', '2', '07:44 pm<br>09/05/2023'),
(6, '1', '3', '2', '07:44 pm<br>09/05/2023'),
(7, '1', '3', '10', '07:50 pm<br>09/05/2023'),
(8, '3', '1', '100', '09:38 pm<br>09/05/2023');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(100) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `iframe` varchar(500) NOT NULL,
  `added_on` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `caption`, `iframe`, `added_on`) VALUES
(1, 'test desc', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EdftT8GMU1U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '08/05/2023');

-- --------------------------------------------------------

--
-- Table structure for table `video_by_experts`
--

CREATE TABLE `video_by_experts` (
  `id` int(150) NOT NULL,
  `posted_by` varchar(500) NOT NULL,
  `titled` varchar(500) NOT NULL,
  `iframe` varchar(500) NOT NULL,
  `added_on` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_by_experts`
--

INSERT INTO `video_by_experts` (`id`, `posted_by`, `titled`, `iframe`, `added_on`) VALUES
(1, 'Expert 1', 'test desc', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/e3ew7YUeeQc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '09/05/2023');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(100) NOT NULL,
  `farmer` varchar(500) NOT NULL,
  `amount` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `farmer`, `amount`) VALUES
(1, '1', '199'),
(2, '3', '99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agri_tips`
--
ALTER TABLE `agri_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forecasting`
--
ALTER TABLE `forecasting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`mobile`);

--
-- Indexes for table `mandi`
--
ALTER TABLE `mandi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_rate`
--
ALTER TABLE `market_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_by_expert`
--
ALTER TABLE `post_by_expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_by_experts`
--
ALTER TABLE `video_by_experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agri_tips`
--
ALTER TABLE `agri_tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forecasting`
--
ALTER TABLE `forecasting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mandi`
--
ALTER TABLE `mandi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `market_rate`
--
ALTER TABLE `market_rate`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_by_expert`
--
ALTER TABLE `post_by_expert`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_by_experts`
--
ALTER TABLE `video_by_experts`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
