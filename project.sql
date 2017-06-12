-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 11:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `a_id` smallint(6) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_userid` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`a_id`, `a_name`, `a_userid`, `a_password`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'NA', 'NA', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `agent1`
--

CREATE TABLE `agent1` (
  `aa_id` smallint(6) NOT NULL,
  `aa_name` varchar(100) NOT NULL,
  `aa_mobile` varchar(10) NOT NULL,
  `aa_email` varchar(50) NOT NULL,
  `aa_pincode` varchar(6) NOT NULL,
  `aa_verifiedby` smallint(6) NOT NULL,
  `aa_areaid` smallint(6) NOT NULL,
  `aa_password` varchar(50) NOT NULL,
  `aa_verified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent1`
--

INSERT INTO `agent1` (`aa_id`, `aa_name`, `aa_mobile`, `aa_email`, `aa_pincode`, `aa_verifiedby`, `aa_areaid`, `aa_password`, `aa_verified`) VALUES
(11, 'Agentone', '0000000001', 'agentone@gmail.com', '411023', 0, 12, '123', 0),
(12, 'Agenttwo', '0000000002', 'agenttwo@gmail.com', '411023', 0, 14, '123', 0),
(13, 'Agentthree', '0000000003', 'agentthree@gmail.com', '411023', 0, 10, '123', 0),
(14, 'Agentfour', '0000000004', 'agentfour@gmail.com', '411023', 0, 11, '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `a_id` smallint(6) NOT NULL,
  `a_pincode` varchar(6) NOT NULL,
  `a_area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`a_id`, `a_pincode`, `a_area`) VALUES
(9, '410502', 'Junnar'),
(10, '413102', 'Baramati'),
(11, '411019', 'Chichwad'),
(12, '411023', 'Pune City'),
(13, '413104', 'Indapur'),
(14, '411023', 'Haveli'),
(15, '411046', 'Ambegaon'),
(16, '410501', 'Khed'),
(17, '412210', 'Shirur'),
(18, '412305', 'Purandhar');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `c_id` smallint(6) NOT NULL,
  `c_fullname` varchar(100) NOT NULL,
  `c_age` int(11) NOT NULL,
  `c_dob` date NOT NULL,
  `c_mobile` varchar(10) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_address` varchar(200) NOT NULL,
  `c_pincode` varchar(6) NOT NULL,
  `c_categoryid` smallint(6) NOT NULL,
  `c_verifiedby` smallint(6) NOT NULL,
  `c_aadhar` varchar(12) NOT NULL,
  `c_verified` tinyint(1) NOT NULL DEFAULT '0',
  `c_password` varchar(50) NOT NULL,
  `c_gender` varchar(1) NOT NULL,
  `c_areaid` smallint(6) NOT NULL,
  `c_profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`c_id`, `c_fullname`, `c_age`, `c_dob`, `c_mobile`, `c_email`, `c_address`, `c_pincode`, `c_categoryid`, `c_verifiedby`, `c_aadhar`, `c_verified`, `c_password`, `c_gender`, `c_areaid`, `c_profile`) VALUES
(72, 'Abhishek Kondewar', 38, '1996-01-13', '9730448461', 'abhishekkondewar@gmail.com', '', '411023', 1, 0, '550041002740', 0, '202cb962ac59075b964b07152d234b70', 'M', 12, 'profile/9730448461.jpg'),
(73, 'Govind Rathod', 22, '1992-05-07', '8380952885', 'govind.rathod2873@gmail.com', '', '411023', 3, 0, '322571560672', 0, '202cb962ac59075b964b07152d234b70', 'M', 12, 'profile/8380952885.jpg'),
(74, 'Gurudev Pawar', 28, '1995-07-15', '9545671158', 'gurudevpawar@gmail.com', '', '411023', 2, 0, '755689632228', 0, '202cb962ac59075b964b07152d234b70', 'M', 14, 'profile/9545671158.jpg'),
(75, 'Kalyani Pakhale', 62, '1995-11-09', '8975370946', 'pakhalekalyani@gmail.com', '', '411023', 4, 0, '688054678126', 0, '202cb962ac59075b964b07152d234b70', 'M', 10, 'profile/8975370946.png'),
(76, 'Om Raut', 31, '1995-05-26', '9422419298', '2137om@gmail.com', '', '411023', 2, 0, '972794801733', 0, '202cb962ac59075b964b07152d234b70', 'M', 10, 'profile/9422419298.jpg'),
(77, 'Pankaj Kandhare', 48, '1994-10-14', '7276706448', 'pankajkumar@gmail.com', '', '411023', 5, 0, '318295699193', 0, '202cb962ac59075b964b07152d234b70', 'M', 11, 'profile/7276706448.jpg'),
(78, 'Rashmi Kedari', 72, '1996-05-25', '8485083122', 'rushkedari@gmail.com', '', '411023', 1, 0, '884440467150', 0, '202cb962ac59075b964b07152d234b70', 'F', 11, 'profile/8485083122.jpg'),
(79, 'Satish Chauhan', 21, '1994-06-03', '7350676993', 'satish@gmail.com', '', '411023', 5, 0, '788496621551', 0, '202cb962ac59075b964b07152d234b70', 'M', 11, 'profile/7350676993.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` smallint(6) NOT NULL,
  `c_category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_category`) VALUES
(1, 'OPEN'),
(2, 'OBC'),
(3, 'NT'),
(4, 'ST'),
(5, 'SC');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `d_did` smallint(6) NOT NULL,
  `d_id` smallint(6) NOT NULL,
  `d_field1` varchar(50) NOT NULL,
  `d_candidateid` smallint(6) NOT NULL,
  `d_verifiedby` smallint(6) NOT NULL,
  `d_path` varchar(200) NOT NULL,
  `d_verified` tinyint(1) NOT NULL DEFAULT '0',
  `d_areaid` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`d_did`, `d_id`, `d_field1`, `d_candidateid`, `d_verifiedby`, `d_path`, `d_verified`, `d_areaid`) VALUES
(122, 1, '550041002740', 72, 0, 'images/72_1.jpg', 0, 12),
(123, 3, '20140018516', 72, 0, 'images/72_3.jpg', 0, 12),
(124, 7, 'RUMSP14', 72, 0, 'images/72_7.jpg', 0, 12),
(125, 2, 'EQLPK8451C', 72, 0, 'images/72_2.jpg', 0, 12),
(126, 13, '38', 72, 0, 'images/72_13.jpg', 0, 12),
(127, 1, '322571660672', 73, 0, 'images/73_1.jpg', 1, 12),
(128, 2, 'CAAPR2805J', 73, 0, 'images/73_2.jpg', 1, 12),
(130, 3, '20100009601', 73, 0, 'images/73_3.jpg', 0, 12),
(131, 8, '75', 73, 0, 'images/73_8.jpg', 1, 12),
(132, 13, '22', 73, 0, 'images/73_13.jpg', 1, 12),
(133, 5, 'UWM2772275', 73, 0, 'images/73_5.jpg', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `filters1`
--

CREATE TABLE `filters1` (
  `f_id` smallint(6) NOT NULL,
  `f_nid` smallint(6) NOT NULL,
  `f_doc1id` smallint(6) NOT NULL,
  `f_con1` varchar(1) NOT NULL,
  `f_value1` int(11) NOT NULL,
  `f_doc2id` smallint(6) NOT NULL,
  `f_con2` varchar(1) NOT NULL,
  `f_value2` int(11) NOT NULL,
  `f_doc3id` smallint(6) NOT NULL,
  `f_con3` varchar(1) NOT NULL,
  `f_value3` int(11) NOT NULL,
  `f_doc4id` smallint(6) NOT NULL,
  `f_con4` varchar(1) NOT NULL,
  `f_value4` int(11) NOT NULL,
  `f_doc5id` smallint(6) NOT NULL,
  `f_con5` varchar(1) NOT NULL,
  `f_value5` int(11) NOT NULL,
  `f_doc6id` smallint(6) NOT NULL,
  `f_con6` varchar(1) NOT NULL,
  `f_value6` int(11) NOT NULL,
  `f_doc7id` smallint(6) NOT NULL,
  `f_con7` varchar(1) NOT NULL,
  `f_value7` int(11) NOT NULL,
  `f_doc8id` smallint(6) NOT NULL,
  `f_con8` varchar(1) NOT NULL,
  `f_value8` int(11) NOT NULL,
  `f_doc9id` smallint(6) NOT NULL,
  `f_con9` varchar(1) NOT NULL,
  `f_value9` int(11) NOT NULL,
  `f_doc10id` smallint(6) NOT NULL,
  `f_con10` varchar(1) NOT NULL,
  `f_value10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filters1`
--

INSERT INTO `filters1` (`f_id`, `f_nid`, `f_doc1id`, `f_con1`, `f_value1`, `f_doc2id`, `f_con2`, `f_value2`, `f_doc3id`, `f_con3`, `f_value3`, `f_doc4id`, `f_con4`, `f_value4`, `f_doc5id`, `f_con5`, `f_value5`, `f_doc6id`, `f_con6`, `f_value6`, `f_doc7id`, `f_con7`, `f_value7`, `f_doc8id`, `f_con8`, `f_value8`, `f_doc9id`, `f_con9`, `f_value9`, `f_doc10id`, `f_con10`, `f_value10`) VALUES
(17, 89, 1, '', 0, 3, '', 0, 2, '', 0, 8, '>', 50, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(18, 90, 1, '', 0, 2, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 5, '', 0, 6, '', 0, 11, '', 0, 11, '', 0),
(20, 92, 8, '>', 70, 10, '>', 45000, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(21, 93, 1, '', 0, 5, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(22, 94, 1, '', 0, 5, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(23, 95, 1, '', 0, 5, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(24, 96, 2, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(25, 97, 2, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(26, 98, 2, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(27, 99, 1, '', 0, 2, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(28, 100, 1, '', 0, 2, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(29, 101, 8, '=', 75, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(30, 102, 8, '=', 75, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(31, 103, 1, '', 0, 13, '>', 15, 8, '=', 75, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0),
(32, 104, 8, '<', 78, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0, 11, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `govt1`
--

CREATE TABLE `govt1` (
  `g_id` smallint(6) NOT NULL,
  `g_userid` varchar(10) NOT NULL,
  `g_password` varchar(50) NOT NULL,
  `g_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `govt1`
--

INSERT INTO `govt1` (`g_id`, `g_userid`, `g_password`, `g_type`) VALUES
(1, 'govt', '1', 'Government Officer'),
(2, 'passport', '1', 'Passport Officer'),
(4, 'driving', '1', 'Driving Officer'),
(5, 'local', '1', 'Local Officer'),
(6, 'admin', '1', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `n_id` smallint(6) NOT NULL,
  `n_title` varchar(50) NOT NULL,
  `n_smstext` varchar(100) NOT NULL,
  `n_emailtext` varchar(1000) NOT NULL,
  `n_pdflink` varchar(100) NOT NULL,
  `n_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`n_id`, `n_title`, `n_smstext`, `n_emailtext`, `n_pdflink`, `n_date`) VALUES
(89, 'Notification', 'SMS', 'EMAIL', 'pdf/89.pdf', '2016-09-19'),
(90, 'Notification23', 'sms', 'email', 'pdf/90.pdf', '2016-09-19'),
(92, 'try', 'hello', 'hello', 'pdf/92.pdf', '2017-06-01'),
(93, 'PM Fasal Bima Yojana', 'The Scheme shall be implemented through a multi-agency framework by selected\r\ninsurance companies un', 'The Scheme shall be implemented through a multi-agency framework by selected\r\ninsurance companies under the overall guidance & control of the Department of\r\nAgriculture, Cooperation & Farmers Welfare (DAC&FW), Ministry of Agriculture &\r\nFarmers Welfare (MoA&FW), Government of India (GOI)', 'pdf/93.pdf', '2017-06-02'),
(94, 'abc', 'abc', 'abc', 'pdf/94.pdf', '2017-06-02'),
(95, 'abc', 'abc', 'abc', 'pdf/95.pdf', '2017-06-02'),
(96, 'xyz', 'xyz', 'xyz', 'pdf/96.pdf', '2017-06-02'),
(97, 'abhi', 'abhi', 'abhi', 'pdf/97.jpg', '2017-06-02'),
(98, 'abhi1', 'abhi1', 'abhi', 'pdf/98.pdf', '2017-06-02'),
(99, 'abhi2', 'jhcj', 'jkbvkjs', 'pdf/99.pdf', '2017-06-02'),
(100, 'abhi3', 'jhvjvkjkv', 'jkbjbjkbk', 'pdf/100.pdf', '2017-06-02'),
(101, 'abhi4', 'sdv', 'sdvsd', 'pdf/101.pdf', '2017-06-02'),
(102, 'abhi5', 'abhi5', 'abhi5', 'pdf/102.pdf', '2017-06-02'),
(103, 'abhi', 'sdca', 'fvdv', 'pdf/103.pdf', '2017-06-02'),
(104, 'hihsh', 'hello', 'hi hkd', 'pdf/104.jpg', '2017-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `notifications_al`
--

CREATE TABLE `notifications_al` (
  `n_iid` smallint(6) NOT NULL,
  `n_id` smallint(6) NOT NULL,
  `n_candidateid` smallint(6) NOT NULL,
  `n_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications_al`
--

INSERT INTO `notifications_al` (`n_iid`, `n_id`, `n_candidateid`, `n_timestamp`) VALUES
(7, 92, 69, '2017-06-01 09:34:50'),
(8, 95, 73, '2017-06-02 18:35:36'),
(9, 96, 73, '2017-06-02 18:56:30'),
(10, 97, 73, '2017-06-02 19:06:35'),
(11, 98, 73, '2017-06-02 19:34:54'),
(12, 99, 73, '2017-06-02 20:11:16'),
(13, 100, 73, '2017-06-02 20:14:33'),
(14, 101, 73, '2017-06-02 20:25:06'),
(15, 102, 73, '2017-06-02 20:27:05'),
(16, 103, 73, '2017-06-02 20:30:49'),
(17, 104, 73, '2017-06-02 20:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `odocuments`
--

CREATE TABLE `odocuments` (
  `od_id` smallint(6) NOT NULL,
  `od_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odocuments`
--

INSERT INTO `odocuments` (`od_id`, `od_name`) VALUES
(1, 'Aadhar'),
(2, 'PAN'),
(3, 'Driving Licence'),
(4, 'Passport'),
(5, 'Voter ID'),
(6, 'Ration Card'),
(7, 'College ID'),
(8, 'SSC'),
(9, '7 12'),
(10, 'Income'),
(11, 'None'),
(12, 'Bank Passbook'),
(13, 'Birth Certificate');

-- --------------------------------------------------------

--
-- Table structure for table `pincodes`
--

CREATE TABLE `pincodes` (
  `p_pincode` varchar(6) NOT NULL,
  `p_area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pincodes`
--

INSERT INTO `pincodes` (`p_pincode`, `p_area`) VALUES
('400001', 'Mumbai'),
('403502', 'Nashik'),
('411023', 'Pune'),
('414001', 'Ahamadnagar'),
('416001', 'Kolhapur'),
('416416', 'Sangli'),
('424001', 'Dhule'),
('431001', 'Aurangabad'),
('431203', 'Jalna'),
('440022', 'Nagpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `agent1`
--
ALTER TABLE `agent1`
  ADD PRIMARY KEY (`aa_id`),
  ADD KEY `aa_verifiedby` (`aa_verifiedby`),
  ADD KEY `aa_pincode` (`aa_pincode`),
  ADD KEY `aa_areaid` (`aa_areaid`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `a_pincode` (`a_pincode`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `c_pincode` (`c_pincode`),
  ADD KEY `c_categoryid` (`c_categoryid`),
  ADD KEY `c_verifiedby` (`c_verifiedby`),
  ADD KEY `c_areaid` (`c_areaid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`d_did`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `d_candidateid` (`d_candidateid`),
  ADD KEY `d_areaid` (`d_areaid`);

--
-- Indexes for table `filters1`
--
ALTER TABLE `filters1`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `f_nid` (`f_nid`),
  ADD KEY `f_doc1id` (`f_doc1id`),
  ADD KEY `f_doc2id` (`f_doc2id`),
  ADD KEY `f_doc4id` (`f_doc4id`),
  ADD KEY `f_doc5id` (`f_doc5id`),
  ADD KEY `f_doc6id` (`f_doc6id`),
  ADD KEY `f_doc7id` (`f_doc7id`),
  ADD KEY `f_doc8id` (`f_doc8id`),
  ADD KEY `f_doc9id` (`f_doc9id`),
  ADD KEY `f_doc10id` (`f_doc10id`);

--
-- Indexes for table `govt1`
--
ALTER TABLE `govt1`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `notifications_al`
--
ALTER TABLE `notifications_al`
  ADD PRIMARY KEY (`n_iid`),
  ADD KEY `n_id` (`n_id`),
  ADD KEY `n_candidateid` (`n_candidateid`);

--
-- Indexes for table `odocuments`
--
ALTER TABLE `odocuments`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `pincodes`
--
ALTER TABLE `pincodes`
  ADD PRIMARY KEY (`p_pincode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `a_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `agent1`
--
ALTER TABLE `agent1`
  MODIFY `aa_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `a_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `c_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `d_did` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `filters1`
--
ALTER TABLE `filters1`
  MODIFY `f_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `govt1`
--
ALTER TABLE `govt1`
  MODIFY `g_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `n_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `notifications_al`
--
ALTER TABLE `notifications_al`
  MODIFY `n_iid` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `odocuments`
--
ALTER TABLE `odocuments`
  MODIFY `od_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent1`
--
ALTER TABLE `agent1`
  ADD CONSTRAINT `agent1_ibfk_2` FOREIGN KEY (`aa_pincode`) REFERENCES `pincodes` (`p_pincode`),
  ADD CONSTRAINT `agent1_ibfk_3` FOREIGN KEY (`aa_areaid`) REFERENCES `areas` (`a_id`);

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `candidates_ibfk_1` FOREIGN KEY (`c_pincode`) REFERENCES `pincodes` (`p_pincode`),
  ADD CONSTRAINT `candidates_ibfk_2` FOREIGN KEY (`c_categoryid`) REFERENCES `categories` (`c_id`),
  ADD CONSTRAINT `candidates_ibfk_3` FOREIGN KEY (`c_areaid`) REFERENCES `areas` (`a_id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `documents_ibfk_2` FOREIGN KEY (`d_candidateid`) REFERENCES `candidates` (`c_id`),
  ADD CONSTRAINT `documents_ibfk_3` FOREIGN KEY (`d_areaid`) REFERENCES `areas` (`a_id`);

--
-- Constraints for table `filters1`
--
ALTER TABLE `filters1`
  ADD CONSTRAINT `filters1_ibfk_1` FOREIGN KEY (`f_nid`) REFERENCES `notifications` (`n_id`),
  ADD CONSTRAINT `filters1_ibfk_10` FOREIGN KEY (`f_doc8id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `filters1_ibfk_11` FOREIGN KEY (`f_doc9id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `filters1_ibfk_12` FOREIGN KEY (`f_doc10id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `filters1_ibfk_2` FOREIGN KEY (`f_doc1id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `filters1_ibfk_3` FOREIGN KEY (`f_doc2id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `filters1_ibfk_4` FOREIGN KEY (`f_doc2id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `filters1_ibfk_5` FOREIGN KEY (`f_doc4id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `filters1_ibfk_6` FOREIGN KEY (`f_doc5id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `filters1_ibfk_7` FOREIGN KEY (`f_doc6id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `filters1_ibfk_8` FOREIGN KEY (`f_doc7id`) REFERENCES `odocuments` (`od_id`),
  ADD CONSTRAINT `filters1_ibfk_9` FOREIGN KEY (`f_doc8id`) REFERENCES `odocuments` (`od_id`);

--
-- Constraints for table `notifications_al`
--
ALTER TABLE `notifications_al`
  ADD CONSTRAINT `notifications_al_ibfk_1` FOREIGN KEY (`n_id`) REFERENCES `notifications` (`n_id`),
  ADD CONSTRAINT `notifications_al_ibfk_2` FOREIGN KEY (`n_candidateid`) REFERENCES `candidates` (`c_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
