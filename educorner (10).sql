-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 03:35 PM
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
  `com_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `complaint` varchar(100) NOT NULL,
  `priority` char(10) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `reply` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_complaint`
--

INSERT INTO `educorner_complaint` (`com_id`, `email`, `title`, `complaint`, `priority`, `date`, `status`, `reply`) VALUES
(16, 'alphin22@gmail.com', 'dasd', 'asdasdasd', 'High', '2022-11-27', 1, '  sdfsdfsfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `educorner_course_materials`
--

CREATE TABLE `educorner_course_materials` (
  `material_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(500) NOT NULL,
  `date` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `topic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_course_materials`
--

INSERT INTO `educorner_course_materials` (`material_id`, `course_id`, `title`, `url`, `date`, `description`, `topic`) VALUES
(1, 47, 'Hamish Dean', 'https://www.fesupaluwug.info', '2022-11-27', 'Consequatur Sed des', 'Ut consequatur magna'),
(2, 47, 'Stephen Wells', 'https://www.vosawoj.mobi', '2022-11-27', 'Occaecat possimus e', 'Repellendus Nobis u'),
(3, 47, '', '', '', '', ''),
(4, 55, 'react', 'https://drive.google.com/drive/folders/1g53Sr_6v0TALP2wCUhIyO27oVU4tBss0?usp=share_link', '2023-03-06', 'good', 'full');

-- --------------------------------------------------------

--
-- Table structure for table `educorner_district`
--

CREATE TABLE `educorner_district` (
  `distid` int(11) NOT NULL,
  `district` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_district`
--

INSERT INTO `educorner_district` (`distid`, `district`) VALUES
(1, 'Trivandrum'),
(2, 'Kollam'),
(7, 'Ernakulam');

-- --------------------------------------------------------

--
-- Table structure for table `educorner_faculty_course`
--

CREATE TABLE `educorner_faculty_course` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `course_duration` int(11) NOT NULL,
  `course_fees` int(11) NOT NULL,
  `course_description` varchar(100) NOT NULL,
  `course_syllabus` varchar(200) NOT NULL,
  `course_mode` varchar(25) NOT NULL,
  `img` varchar(100) NOT NULL DEFAULT 'coursepic',
  `startdate` date NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_faculty_course`
--

INSERT INTO `educorner_faculty_course` (`course_id`, `course_title`, `email`, `course_duration`, `course_fees`, `course_description`, `course_syllabus`, `course_mode`, `img`, `startdate`, `status`) VALUES
(46, 'web development', 'preethy88@gmail.com', 3, 449, 'After the course you will be able to build ANY website you want.\r\nBuild fully-fledged websites and w', 'vdvdssdsa', 'online', 'corsepic', '2023-03-03', '1'),
(47, 'python', 'preethy88@gmail.com', 15, 123456, 'This python for beginners course is geared to students who want to know how python works and also to', 'vdsvsvf', 'online', 'corsepic', '2023-03-23', '0'),
(48, 'Alias qui inventore ', 'preethy88@gmail.com', 1, 5000, 'Id ex dolores dolor', 'Nam voluptatem obcae', 'offline', 'coursepic', '2022-11-25', '1'),
(49, 'python', 'aswathy@gmail.com', 2, 2222, 'good', '2222', 'online', 'coursepic', '2023-03-05', '0'),
(50, 'python1', 'aswathy@gmail.com', 2, 12, '1thhy', '111', 'online', 'coursepic', '2023-03-04', '1'),
(51, 'python', 'aswathy@gmail.com', 1, 2222, 'eee', 'eeee', 'offline', 'coursepic', '2023-03-05', '0'),
(52, 'ethical hacking', 'aswathy@gmail.com', 1, 2222, 'hhhh', 'gooood', 'offline', 'coursepic', '2023-03-06', '0'),
(53, 'Cloud', 'aswathy@gmail.com', 1, 2222, 'ccccc', 'sfsee', 'offline', 'coursepic', '2023-03-05', '0'),
(54, 'ethical hacking', 'aswathy@gmail.com', 1, 12, 'ggggg', 'gggggg', 'offline', 'coursepic', '2023-03-04', '1'),
(55, 'React', 'aswathy@gmail.com', 1, 23456, 'it is a language', 'effee', 'online', 'coursepic', '2023-03-05', '0'),
(56, 'Angular', 'aswathy@gmail.com', 1, 1234, 'good for programming', 'module 1 \r\nmodul34', 'online', 'C:\\Users\\preet\\Downloads\\download (1).png', '2023-03-06', '0'),
(57, 'Android', 'aswathy@gmail.com', 1, 1234, 'app development', 'dscsad', 'online', 'assets/img/logo.png', '2023-03-06', '0'),
(58, 'Angular', 'aswathy@gmail.com', 1, 12345, 'ghgg', 'ggg', 'online', 'coursepic', '2023-03-06', '0'),
(59, '', 'aswathy@gmail.com', 0, 0, '', '', '', 'coursepic', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `educorner_feedback`
--

CREATE TABLE `educorner_feedback` (
  `fid` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `feedback_date` date NOT NULL,
  `faculty_email` varchar(50) NOT NULL,
  `learner_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_feedback`
--

INSERT INTO `educorner_feedback` (`fid`, `course_id`, `feedback`, `feedback_date`, `faculty_email`, `learner_email`) VALUES
(1, 0, 'hhhhh', '2023-03-05', '', 'biby@gmail.com'),
(2, 0, 'good', '2023-03-05', '', 'biby@gmail.com'),
(3, 0, 'good', '2023-03-06', 'biby@gmail.com', 'biby@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `educorner_learner_course`
--

CREATE TABLE `educorner_learner_course` (
  `course_enrollid` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_learner_course`
--

INSERT INTO `educorner_learner_course` (`course_enrollid`, `course_id`, `email`, `name`) VALUES
(1, 47, 'biby@gmail.com', 'biby binu'),
(2, 46, 'biby@gmail.com', 'biby binu'),
(3, 49, 'biby@gmail.com', 'biby binu'),
(4, 50, 'biby@gmail.com', 'biby binu'),
(5, 51, 'biby@gmail.com', 'biby binu'),
(6, 52, 'biby@gmail.com', 'biby binu'),
(7, 52, 'rakesh@gmail.com', 'Rakesh Ps'),
(8, 53, 'biby@gmail.com', 'biby binu'),
(9, 53, 'rakesh@gmail.com', 'Rakesh Ps'),
(10, 51, 'rakesh@gmail.com', 'Rakesh Ps'),
(11, 53, 'alphin88@gmail.com', 'Alphin joshy'),
(12, 52, 'alphin88@gmail.com', 'Alphin joshy'),
(13, 55, 'alphin88@gmail.com', 'Alphin joshy'),
(14, 55, 'biby@gmail.com', 'biby binu'),
(15, 52, 'dony@gmail.com', 'Dony Martin'),
(16, 56, 'biby@gmail.com', 'biby binu');

-- --------------------------------------------------------

--
-- Table structure for table `educorner_login`
--

CREATE TABLE `educorner_login` (
  `user_type` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `securityq` varchar(100) NOT NULL,
  `securea` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_login`
--

INSERT INTO `educorner_login` (`user_type`, `username`, `password`, `securityq`, `securea`, `status`) VALUES
(1, 'abey999@gmail.com', '22jan123', 'What is ur favourite color?', 'red', 1),
(1, 'abhishek99@gmail.com', '24jan123', 'What is ur favourite color?', 'red', 1),
(1, 'abin1@gmail.com', '23jan123', 'What is ur favourite color?', 'red', 1),
(0, 'admin98@gmail.com', '29jan123', '', '', 1),
(1, 'alphin22@gmail.com', '23jan123', 'What is ur favourite color?', 'red', 1),
(1, 'alphin88@gmail.com', '21jan123', 'In what city were you born?', 'muvattupzha', 1),
(1, 'anna27@gmail.com', '24jan123', 'What is ur favourite color?', 'red', 1),
(1, 'anna28@gmail.com', '24jan123', 'What is ur favourite color?', 'red', 1),
(1, 'anna29@gmail.com', '23jan123', 'What is ur favourite color?', 'red', 1),
(1, 'antonyaug99@gmail.com', '29jan123', 'What is ur favourite color?', 'red', 1),
(2, 'aswathy99@gmail.com', '20jan123', 'What is ur favourite color?', 'red', 0),
(2, 'aswathy@gmail.com', '21jan123', 'What is ur favourite color?', 'red', 1),
(2, 'athira97@gmail.com', '23jan123', 'What is ur favourite color?', 'red', 0),
(2, 'athira99@gmail.com', '24jan123', 'What is ur favourite color?', 'red', 0),
(1, 'biby@gmail.com', 'bibyjan20', 'What is ur favourite color?', 'red', 1),
(1, 'dony@gmail.com', '21jan123', 'What is ur favourite color?', 'red', 1),
(2, 'hari99@gmail.com', '24jan123', 'What is ur favourite color?', 'red', -1),
(2, 'preethy72@gmail.com', '24july72', 'In what city were you born?', 'Ernakulam', 1),
(1, 'preethy99@gmail.com', '20jan124', 'What is the name of your first pet?', 'cat', 1),
(2, 'promalayali901@gmail.com', 'asdfg12345', 'What is ur favourite color?', 'red', -1),
(1, 'rakesh@gmail.com', '20jan123', 'What is ur favourite color?', 'red', 1),
(1, 'rakeshps901@gmail.com', 'qwert12345', 'What is ur favourite color?', 'red', 1),
(1, 'sabu99@gmail.com', '23jan123', 'What is ur favourite color?', 'red', 1),
(2, 'savio99@gmail.com', '24jan123', 'What is the name of your first pet?', 'cat', -1),
(1, 'thomas18@gmail.com', '29jan124', 'What is ur favourite color?', 'red', 1);

-- --------------------------------------------------------

--
-- Table structure for table `educorner_payment`
--

CREATE TABLE `educorner_payment` (
  `paymentid` int(11) NOT NULL,
  `course_enrollid` int(11) NOT NULL,
  `paymenttype` varchar(20) NOT NULL,
  `paymentdate` datetime DEFAULT current_timestamp(),
  `amount` int(11) NOT NULL,
  `pstatus` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_payment`
--

INSERT INTO `educorner_payment` (`paymentid`, `course_enrollid`, `paymenttype`, `paymentdate`, `amount`, `pstatus`) VALUES
(1, 1, 'online', '2023-03-01 00:32:57', 123456, 1),
(2, 2, 'online', '2023-03-04 18:56:54', 449, 1),
(3, 3, 'online', '2023-03-05 01:29:27', 2222, 1),
(4, 4, 'online', '2023-03-05 01:39:51', 12, 1),
(5, 5, 'cod', '2023-03-05 01:42:50', 2222, 1),
(6, 6, 'cod', '2023-03-05 01:47:26', 2222, 1),
(7, 7, 'cod', '2023-03-05 01:56:54', 2222, 1),
(8, 8, 'cod', '2023-03-05 01:58:39', 2222, 1),
(9, 9, 'cod', '2023-03-05 01:59:42', 2222, 1),
(10, 10, 'online', '2023-03-05 02:01:08', 2222, 1),
(11, 11, 'online', '2023-03-05 08:51:49', 2222, 1),
(12, 12, 'cod', '2023-03-05 08:53:52', 2222, 0),
(13, 13, 'online', '2023-03-05 08:57:59', 23456, 1),
(14, 14, 'online', '2023-03-05 08:59:48', 23456, 1),
(15, 15, 'online', '2023-03-06 19:13:05', 2222, 1),
(16, 16, 'online', '2023-03-06 19:27:06', 1234, 1);

-- --------------------------------------------------------

--
-- Table structure for table `educorner_registration`
--

CREATE TABLE `educorner_registration` (
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `house_name` varchar(200) NOT NULL,
  `dob` date DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pic` varchar(100) NOT NULL DEFAULT 'profilepic/profile.jpg',
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_registration`
--

INSERT INTO `educorner_registration` (`fName`, `lName`, `house_name`, `dob`, `phone_number`, `email`, `state`, `district`, `city`, `pic`, `gender`) VALUES
('aba', 'thoma', 'palakuzhya', '0000-00-00', '9188082395', 'aba98@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', '', ''),
('abey', 'thomas', 'palakuzha', '0000-00-00', '918808231', 'abey999@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'KWFB4SNZIVMBZBMO5FCAAIMEOU.jpg', ''),
('abhishek', 'c', 'palakuzuyil', '0000-00-00', '9188082391', 'abhishek99@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'KWFB4SNZIVMBZBMO5FCAAIMEOU.jpg', ''),
('abi', 'josh', 'madek', '0000-00-00', '9188082391', 'abin1@gmail.com', 'kerala', '', 'Muvattupuzha', '', ''),
('alphin', 'joshy', 'palakuzyil', '0000-00-00', '918808231', 'alphin22@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'happy.jpg', ''),
('Alphin', 'joshy', 'palakuzhyil', NULL, '9188082397', 'alphin88@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'profilepic/profile.jpg', 'Male'),
('anna', 'biju', 'palakuzhi', '0000-00-00', '9188082397', 'anna27@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', '', ''),
('anna', 'biju', 'palakuzhi', '0000-00-00', '9188082397', 'anna28@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', '', ''),
('anna', 'biju', 'palakuzhi', '0000-00-00', '9188082397', 'anna29@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', '', ''),
('aswathy', 'miss', 'knfrfnwrr', '0000-00-00', '9188082391', 'aswathy99@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'profilepic/profile.jpg', ''),
('aswathy', 'miss', 'afdf', NULL, '9188082396', 'aswathy@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'profilepic/profile.jpg', 'Female'),
('athira', 'j', 'knfrfnwrr', '0000-00-00', '9188082391', 'athira97@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'profilepic/profile.jpg', ''),
('athira', 'miss', 'knwlfwrl', '0000-00-00', '9188082391', 'athira99@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'profilepic/profile.jpg', ''),
('biby', 'binu', 'sdfsdf', NULL, '7034813303', 'biby@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'antony.jpg', 'Male'),
('Dony', 'Martin', 'fffff', NULL, '918808239', 'dony@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'profilepic/profile.jpg', 'Male'),
('hari', 'k', 'mudakan', '0000-00-00', '9249757921', 'hari99@gmail.com', 'kerala', 'Ernakulam', 'piravom', '16658278622603.jpg', ''),
('preethy', 'Augustine', 'gerregeg', '0000-00-00', '9188082397', 'preethy88@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'happy.jpg', ''),
('preethy', 'augustine', 'padinjarekoottu', '0000-00-00', '9188082391', 'preethy99@gmail.com', 'kerala', '2', 'Muvattupuzha', '', ''),
('Preethy', 'Augustine', 'padinjarekoottu', NULL, '9249757928', 'preethy@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'profilepic/profile.jpg', 'Female'),
('Rakesh', 'ps', 'pulickakuzhiyil', '0000-00-00', '6362565172', 'promalayali901@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', '', ''),
('Rakesh', 'Ps', 'ssss', NULL, '9188082391', 'rakesh@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'profilepic/profile.jpg', 'Male'),
('Rakesh', 'ps', 'pulickakuzhiyil', '0000-00-00', '1234567899', 'rakeshps901@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', '221106083556-01-messi-argentina-092722.jpg', ''),
('sabu', 'george', 'mudakan', '0000-00-00', '9188082391', 'sabu99@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', 'profilepic/profile.jpg', ''),
('saviom', 'george', 'palayiy', '0000-00-00', '9249757912', 'savio99@gmail.com', 'gujarat', 'Ernakulam', 'Muvattupuzha', 'image1.jpg', ''),
('thomas', 'alan', 'thekankodu', '0000-00-00', '9188082397', 'thomas18@gmail.com', 'kerala', 'Ernakulam', 'Muvattupuzha', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `educorner_rerview`
--

CREATE TABLE `educorner_rerview` (
  `rid` int(11) NOT NULL,
  `faculty_email` varchar(50) NOT NULL,
  `date_review` date NOT NULL,
  `review` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `learner_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_rerview`
--

INSERT INTO `educorner_rerview` (`rid`, `faculty_email`, `date_review`, `review`, `rating`, `learner_email`) VALUES
(1, '', '2023-03-05', 'good', 4, 'biby@gmail.com'),
(2, '', '2023-03-05', 'rrrr', 2, 'biby@gmail.com'),
(3, '', '2023-03-05', 'good', 2, 'biby@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `educorner_subject`
--

CREATE TABLE `educorner_subject` (
  `subject_name` varchar(100) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educorner_subject`
--

INSERT INTO `educorner_subject` (`subject_name`, `subject_id`) VALUES
('maths', 3),
('chemistry', 4),
('biology', 5);

-- --------------------------------------------------------

--
-- Table structure for table `educorner_test`
--

CREATE TABLE `educorner_test` (
  `q_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `question` varchar(256) NOT NULL,
  `marks` int(11) NOT NULL,
  `qno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educorner_test`
--

INSERT INTO `educorner_test` (`q_id`, `course_id`, `question`, `marks`, `qno`) VALUES
(1, 46, 'Explain the basic tags in HTML?', 10, 1),
(2, 46, 'What are the newly introduced input types in HTML5?', 7, 2),
(3, 46, ' What are the newly introduced input types in HTML5?', 6, 3),
(4, 46, 'How can page loading time be reduced?', 4, 4),
(5, 46, 'What is bootstrap?', 5, 5),
(6, 50, 'What is python', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `educorner_testresult`
--

CREATE TABLE `educorner_testresult` (
  `ans_id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `marks` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educorner_testresult`
--

INSERT INTO `educorner_testresult` (`ans_id`, `qid`, `user_id`, `answer`, `marks`) VALUES
(1, 1, 'biby@gmail.com', 'sdfsdfsdfsdf', NULL),
(2, 2, 'biby@gmail.com', 'sfgsdsdfsd', NULL),
(3, 3, 'biby@gmail.com', 'sfgsvfgsg', NULL),
(4, 4, 'biby@gmail.com', 'sfghdfgd', NULL),
(5, 5, 'biby@gmail.com', 'gdfgdfgdfg', NULL),
(6, 1, 'biby@gmail.com', 'hgyhgb', NULL),
(7, 2, 'biby@gmail.com', 'jguh', NULL),
(8, 3, 'biby@gmail.com', 'gvhhjb', NULL),
(9, 4, 'biby@gmail.com', 'gvhgv', NULL),
(10, 1, 'biby@gmail.com', 'hgvbhj', NULL),
(11, 2, 'biby@gmail.com', 'hghgb\r\n', NULL),
(12, 3, 'biby@gmail.com', 'hvjh', NULL),
(13, 4, 'biby@gmail.com', 'g', NULL),
(14, 1, 'biby@gmail.com', 'Development', NULL),
(15, 2, 'biby@gmail.com', 'Development', NULL),
(16, 1, 'biby@gmail.com', 'Development', NULL),
(17, 2, 'biby@gmail.com', 'Development', NULL),
(18, 3, 'biby@gmail.com', 'Development', NULL),
(19, 4, 'biby@gmail.com', 'Development', NULL),
(20, 5, 'biby@gmail.com', 'Development', NULL),
(21, 1, 'biby@gmail.com', '<HTML>\r\n<BR>', NULL),
(22, 2, 'biby@gmail.com', 'FJY', NULL),
(23, 3, 'biby@gmail.com', 'YYY', NULL),
(24, 4, 'biby@gmail.com', 'YYY', NULL),
(25, 5, 'biby@gmail.com', 'YYY', NULL),
(26, 1, 'biby@gmail.com', 'it is a programming language', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educorner_complaint`
--
ALTER TABLE `educorner_complaint`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `educorner_course_materials`
--
ALTER TABLE `educorner_course_materials`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `educorner_district`
--
ALTER TABLE `educorner_district`
  ADD PRIMARY KEY (`distid`);

--
-- Indexes for table `educorner_faculty_course`
--
ALTER TABLE `educorner_faculty_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `educorner_feedback`
--
ALTER TABLE `educorner_feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `educorner_learner_course`
--
ALTER TABLE `educorner_learner_course`
  ADD PRIMARY KEY (`course_enrollid`);

--
-- Indexes for table `educorner_login`
--
ALTER TABLE `educorner_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `educorner_payment`
--
ALTER TABLE `educorner_payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `educorner_registration`
--
ALTER TABLE `educorner_registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `educorner_rerview`
--
ALTER TABLE `educorner_rerview`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `educorner_subject`
--
ALTER TABLE `educorner_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `educorner_test`
--
ALTER TABLE `educorner_test`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `educorner_testresult`
--
ALTER TABLE `educorner_testresult`
  ADD PRIMARY KEY (`ans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educorner_complaint`
--
ALTER TABLE `educorner_complaint`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `educorner_course_materials`
--
ALTER TABLE `educorner_course_materials`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `educorner_faculty_course`
--
ALTER TABLE `educorner_faculty_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `educorner_feedback`
--
ALTER TABLE `educorner_feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `educorner_learner_course`
--
ALTER TABLE `educorner_learner_course`
  MODIFY `course_enrollid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `educorner_payment`
--
ALTER TABLE `educorner_payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `educorner_rerview`
--
ALTER TABLE `educorner_rerview`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `educorner_subject`
--
ALTER TABLE `educorner_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `educorner_test`
--
ALTER TABLE `educorner_test`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `educorner_testresult`
--
ALTER TABLE `educorner_testresult`
  MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
