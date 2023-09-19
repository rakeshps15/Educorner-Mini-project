-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 02:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educorner`
--

-- --------------------------------------------------------

--
-- Table structure for table `educorner_complaint`
--

CREATE TABLE `educorner_complaint` (
  `complaint` varchar(200) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `solution` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educorner_course_materials`
--

CREATE TABLE `educorner_course_materials` (
  `material_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `materials` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educorner_course_test`
--

CREATE TABLE `educorner_course_test` (
  `test_id` int(11) NOT NULL,
  `test_title` varchar(30) NOT NULL,
  `test_date` date NOT NULL,
  `text_time` time NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educorner_course_test_question`
--

CREATE TABLE `educorner_course_test_question` (
  `question_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` int(11) NOT NULL,
  `option2` int(11) NOT NULL,
  `option3` int(11) NOT NULL,
  `option4` int(11) NOT NULL,
  `answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educorner_discussion`
--

CREATE TABLE `educorner_discussion` (
  `course_id` int(11) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `discussion_date` date NOT NULL,
  `discussion_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educorner_faculty`
--

CREATE TABLE `educorner_faculty` (
  `email` varchar(30) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` float NOT NULL,
  `description` varchar(200) NOT NULL,
  `current_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educorner_faculty_course`
--

CREATE TABLE `educorner_faculty_course` (
  `courde_id` int(11) NOT NULL,
  `course_title` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `course_description` varchar(100) NOT NULL,
  `syllabus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educorner_feedback`
--

CREATE TABLE `educorner_feedback` (
  `course_id` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `feedback_date` date NOT NULL,
  `faculty_email` varchar(50) NOT NULL,
  `learner_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educorner_learners`
--

CREATE TABLE `educorner_learners` (
  `email` varchar(30) NOT NULL,
  `parent_email` varchar(30) NOT NULL,
  `education_board` varchar(20) NOT NULL,
  `school_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educorner_learner_course`
--

CREATE TABLE `educorner_learner_course` (
  `course_enrollid` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educorner_login`
--

CREATE TABLE `educorner_login` (
  `user_type` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `securityq` varchar(100) NOT NULL,
  `securea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_login`
--

INSERT INTO `educorner_login` (`user_type`, `username`, `password`, `securityq`, `securea`) VALUES
(1, 'antonyaug99@gmail.com', '29jan123', 'What is ur favourite color?', 'red'),
(1, 'tonyaug99@gmail.com', '', 'What is ur favourite color?', 'red'),
(2, 'alphin2018@gmail.com', '24jan123', 'What is ur favourite color?', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `educorner_registration`
--

CREATE TABLE `educorner_registration` (
  `fName` varchar(50) NOT NULL,
  `lName` int(50) NOT NULL,
  `house_name` varchar(200) NOT NULL,
  `street` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_registration`
--

INSERT INTO `educorner_registration` (`fName`, `lName`, `house_name`, `street`, `gender`, `dob`, `phone_number`, `email`, `state`, `district`, `city`) VALUES
('alphin', 0, 'palaakuzyil', '', 'b', '0000-00-00', '9234567897', 'alphin2018@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha'),
('antony', 0, 'padinjarekottu', '', 'b', '0000-00-00', '9188082396', 'tonyaug99@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha');

-- --------------------------------------------------------

--
-- Table structure for table `educorner_rerview`
--

CREATE TABLE `educorner_rerview` (
  `faculty_email` varchar(50) NOT NULL,
  `date_review` date NOT NULL,
  `review` varchar(100) NOT NULL,
  `learner_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educorner_faculty_course`
--
ALTER TABLE `educorner_faculty_course`
  ADD PRIMARY KEY (`courde_id`);

--
-- Indexes for table `educorner_registration`
--
ALTER TABLE `educorner_registration`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
