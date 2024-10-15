-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 07:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `AL_Id` int(11) NOT NULL,
  `AL_Name` varchar(100) NOT NULL,
  `AL_RegNo` varchar(15) NOT NULL,
  `AL_Desgnation` varchar(50) DEFAULT NULL,
  `AL_Company` varchar(100) DEFAULT NULL,
  `AL_Session` int(11) NOT NULL,
  `AL_WhatsApp` varchar(15) NOT NULL,
  `AL_FB` varchar(500) NOT NULL,
  `AL_LinkedIn` varchar(500) NOT NULL,
  `AL_Info` varchar(1000) NOT NULL,
  `AL_Photo` mediumtext DEFAULT NULL,
  `AL_Email` varchar(100) NOT NULL,
  `AL_IsApprove` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`AL_Id`, `AL_Name`, `AL_RegNo`, `AL_Desgnation`, `AL_Company`, `AL_Session`, `AL_WhatsApp`, `AL_FB`, `AL_LinkedIn`, `AL_Info`, `AL_Photo`, `AL_Email`, `AL_IsApprove`) VALUES
(24, 'as', '123', 'asd', 'ad', 231, '03114091906', 'https://sdww.google/com', 'https://sdww.google/com', '123', 'uploads/alumnidemo.jpg', 'email@abc.com', 1),
(25, 'ABV', '2016CS123', 'SE', 'Compnay C', 2016, '03114091906', 'https://sdww.google/com', 'https://sdww.google/com', 'af adsf adsf adf adfasdf adsf asdf ad f', 'uploads/alumni/team-1.jpg', 'email@abc.com', 1),
(26, 'ABVasdsa', '2017CS123', 'SE', 'Compnay B', 2017, '03114091906', 'https://sdww.google/com', 'https://sdww.google/com', 'af adsf adsf adf adfasdf adsf asdf ad f', 'uploads/alumni/team-4.jpg', 'email@abc.com', 0),
(27, 'ABVasdsa', '2018CS123', 'SE', 'Compnay B', 2018, '03114091906', 'https://sdww.google/com', 'https://sdww.google/com', 'af adsf adsf adf adfasdf adsf asdf ad f', 'uploads/alumni/chairman.jpeg', 'email@abc.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FC_Id` int(11) NOT NULL,
  `FC_Name` varchar(100) NOT NULL,
  `FC_Photo` varchar(100) NOT NULL DEFAULT '/assets/images/noPhotoUser.jpg',
  `FC_Email` varchar(250) NOT NULL,
  `FC_Password` varchar(15) NOT NULL,
  `FC_AvailableHour` varchar(30) NOT NULL DEFAULT 'N-A',
  `FC_Office` varchar(20) NOT NULL DEFAULT 'N-A',
  `FC_Phone` varchar(15) NOT NULL DEFAULT 'N-A',
  `FC_Domain` varchar(30) NOT NULL DEFAULT 'N-A',
  `FR_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FC_Id`, `FC_Name`, `FC_Photo`, `FC_Email`, `FC_Password`, `FC_AvailableHour`, `FC_Office`, `FC_Phone`, `FC_Domain`, `FR_Id`) VALUES
(1, 'Faculty 1', 'uploads/alumni/team-1.jpg', 'email@email.com', 'aasssaa12', 'Thus: 10-12 PM, Fri: 9-11AM', 'CS-1', '0080-12121', 'UX/UI', 2),
(2, 'Faculty 2', 'uploads/alumni/team-1.jpg', 'email@mail.com', '345123xv', 'Fri: 10-12 PM, Wed: 9-11AM', 'CS-3', '0080-12121', 'AI/ML', 3),
(3, 'Faculty 3', '/assets/images/noPhotoUser.jpg', 'mail@email.com', 'A1fJY42n', 'Mon: 09-12 PM, Wed: 9-11AM', 'CS-13', '03114091212', 'NLP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `facultyrank`
--

CREATE TABLE `facultyrank` (
  `FR_Id` int(11) NOT NULL,
  `FR_Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultyrank`
--

INSERT INTO `facultyrank` (`FR_Id`, `FR_Title`) VALUES
(1, 'Prof.'),
(2, 'Asst. Prof.'),
(3, 'Assoc. Prof.'),
(4, 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `fyp`
--

CREATE TABLE `fyp` (
  `FYP_Id` int(11) NOT NULL,
  `FYP_Title` varchar(100) NOT NULL,
  `FYP_Description` varchar(1000) NOT NULL,
  `FYP_Suprvisor` int(11) NOT NULL,
  `FYP_CoSupervisor` int(11) NOT NULL,
  `FYP_CreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `FYP_Session` smallint(6) NOT NULL,
  `FYP_ProjectId` int(11) NOT NULL,
  `FYP_Type` varchar(15) NOT NULL,
  `FYP_IsSelected` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fyp`
--

INSERT INTO `fyp` (`FYP_Id`, `FYP_Title`, `FYP_Description`, `FYP_Suprvisor`, `FYP_CoSupervisor`, `FYP_CreatedAt`, `FYP_Session`, `FYP_ProjectId`, `FYP_Type`, `FYP_IsSelected`) VALUES
(1, 'FYP project 1', 'Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description ', 1, 2, '2022-02-18 17:38:44', 2018, 3, 'Development', 1),
(2, 'FYP New title', 'here is some description ', 1, 3, '2022-02-19 17:31:11', 2021, 2, 'Research', 1),
(3, 'New Title', 'aaaa bbb cccc dddd', 2, 3, '2022-02-20 14:31:30', 2020, 4, 'Hybrid', 1),
(4, 'vghvghvg52VH', 'GH GVGYV', 3, 2, '2022-02-24 06:42:10', 2021, 3, 'Research', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fypremarks`
--

CREATE TABLE `fypremarks` (
  `FYPR_Id` int(11) NOT NULL,
  `FYPR_Remarks` varchar(1000) NOT NULL,
  `FYPR_Phase` tinyint(4) NOT NULL,
  `FC_Id` int(11) NOT NULL,
  `FYPS_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fyp_selected`
--

CREATE TABLE `fyp_selected` (
  `FYPS_Id` int(11) NOT NULL,
  `FYPS_CurrentPhase` tinyint(4) NOT NULL DEFAULT 1,
  `FYPS_M1` varchar(20) NOT NULL,
  `FYPS_M2` varchar(20) NOT NULL,
  `FYPS_M3` varchar(20) NOT NULL,
  `FYPS_M4` varchar(20) NOT NULL,
  `FYPS_M5` varchar(20) DEFAULT NULL,
  `FYPS_Password` varchar(10) NOT NULL,
  `FYP_Id` int(11) NOT NULL,
  `FYPS_CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fyp_selected`
--

INSERT INTO `fyp_selected` (`FYPS_Id`, `FYPS_CurrentPhase`, `FYPS_M1`, `FYPS_M2`, `FYPS_M3`, `FYPS_M4`, `FYPS_M5`, `FYPS_Password`, `FYP_Id`, `FYPS_CreatedAt`) VALUES
(9, 1, '2018-CS-201', '2018-CS-121', '2018-CS-123', '2018-CS-134', NULL, 'GSWCsqr4', 1, '2022-02-20 13:45:45'),
(13, 1, '2018-CS-10187', '2018-CS-12100', '2019-CS-12112312', '2019-CS-12109', NULL, '1r8MtpRX', 2, '2022-02-20 14:27:56'),
(16, 1, '2018-CS-1401', '2019-CS-12123', '2018-CS-14145', '2019-CS-121562', NULL, 'UQ0oRWSF', 3, '2022-02-21 09:10:35'),
(17, 1, '2018-CS-101', '2018-CS-1014444', '2018-CS-101555', '2018-CS-1014355', NULL, '27qABeVw', 4, '2022-02-24 06:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

--
-- Dumping data for table `migrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticebardcategory`
--

CREATE TABLE `noticebardcategory` (
  `NBC_ID` int(11) NOT NULL,
  `NBC_Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticebardcategory`
--

INSERT INTO `noticebardcategory` (`NBC_ID`, `NBC_Title`) VALUES
(1, 'Examination'),
(2, 'DateSheet'),
(3, 'TimeTable'),
(4, 'Jobs'),
(5, 'Others'),
(6, 'Events'),
(7, 'Scholarship');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `NB_ID` int(11) NOT NULL,
  `NB_Title` varchar(150) NOT NULL DEFAULT 'Title',
  `NB_Description` varchar(10000) NOT NULL DEFAULT 'Description',
  `NB_Attachment` mediumtext DEFAULT NULL,
  `NB_CatID` int(11) NOT NULL DEFAULT 1,
  `NB_CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`NB_ID`, `NB_Title`, `NB_Description`, `NB_Attachment`, `NB_CatID`, `NB_CreatedAt`) VALUES
(2, 'Title 2', 'Description description', 'uploads/notices/CC-Randomized Algos.pdf', 6, '2022-02-13 17:23:16'),
(7, 'sdf', 'sdf', 'uploads/notices/demo.jpg', 2, '2022-02-14 04:30:13'),
(8, ',mn', '.kn', 'uploads/notices/demo.jpg', 3, '2022-02-14 04:36:48'),
(14, 'sfdd', 'weqw', 'uploads/notices/demo.jpg', 1, '2022-02-14 05:04:02'),
(16, 'asdfa', 'khljh', 'uploads/notices/CC-Randomized Algos.pdf', 1, '2022-02-14 17:29:44'),
(18, 'Title 4', 'sadf', 'uploads/notices/demo.jpg', 2, '2022-02-14 17:34:45'),
(19, 'tuj', 'uit', 'uploads/notices/demo.jpg', 3, '2022-02-15 05:50:45'),
(20, 'Fees Update', 'Last date of fee submission is 28 feb ', 'uploads/notices/blog2.jpg', 7, '2022-02-17 18:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `projectsdomain`
--

CREATE TABLE `projectsdomain` (
  `PD_Id` int(11) NOT NULL,
  `PD_Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectsdomain`
--

INSERT INTO `projectsdomain` (`PD_Id`, `PD_Title`) VALUES
(1, 'UX/UI'),
(2, 'IHCI'),
(3, 'ML/AI'),
(4, 'Gaming'),
(5, 'Computer Vision'),
(6, 'NLP'),
(7, 'System Programming'),
(8, 'Information Security'),
(9, 'Compiler'),
(10, 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `SF_Id` int(11) NOT NULL,
  `SF_Name` varchar(100) NOT NULL,
  `SF_Email` varchar(200) NOT NULL,
  `SF_Password` varchar(15) NOT NULL,
  `SF_Phone` varchar(15) NOT NULL,
  `SF_Office` tinytext DEFAULT NULL,
  `SR_ID` int(11) NOT NULL,
  `SF_CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`SF_Id`, `SF_Name`, `SF_Email`, `SF_Password`, `SF_Phone`, `SF_Office`, `SR_ID`, `SF_CreatedAt`) VALUES
(1, ' Staff Name', 'email@abc.com', 'password', '11221121212', 'L-12', 3, '2022-02-08 04:30:06'),
(3, 'name Staff', 'email@email.com', 'IbiaaeGan', '03114091906', 'RL-12', 2, '2022-02-08 18:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `staffrank`
--

CREATE TABLE `staffrank` (
  `SR_ID` int(11) NOT NULL,
  `SR_Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffrank`
--

INSERT INTO `staffrank` (`SR_ID`, `SR_Title`) VALUES
(1, 'Clerk'),
(2, 'Sr. Clerk'),
(3, 'Coordinator'),
(4, 'Incharge');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_Id` int(11) NOT NULL,
  `St_Name` tinytext NOT NULL,
  `St_RegNo` varchar(20) NOT NULL,
  `St_Session` tinytext NOT NULL,
  `St_CNIC` varchar(15) NOT NULL,
  `St_Gender` tinyint(1) DEFAULT 0,
  `St_DOB` date NOT NULL,
  `St_Address` varchar(500) NOT NULL,
  `St_Email` varchar(150) NOT NULL,
  `St_Program` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_Id`, `St_Name`, `St_RegNo`, `St_Session`, `St_CNIC`, `St_Gender`, `St_DOB`, `St_Address`, `St_Email`, `St_Program`) VALUES
(1, 'Std Name', '2018-CS-101', '2022', '12312313112311', 0, '2018-01-11', 'Address Address Address Address', 'student@email.com', 'BSC. CS'),
(2, 'Student name', '2017-CS-131', '2019', '12312313112311', 0, '2022-01-06', 'Address Address Address Address Address Address Address Address Address Address Address Address ', 'email@email.com', 'BSC. CS');

-- --------------------------------------------------------

--
-- Table structure for table `termproject`
--

CREATE TABLE `termproject` (
  `TP_Id` int(11) NOT NULL,
  `St_Id` int(11) NOT NULL,
  `TP_Title` varchar(100) NOT NULL,
  `TP_Year` int(11) NOT NULL,
  `TP_Sem` tinyint(4) NOT NULL DEFAULT 1,
  `TP_Domain` varchar(20) NOT NULL,
  `TP_Desc` varchar(1000) NOT NULL,
  `TP_DOA` date DEFAULT NULL,
  `TP_isApprove` tinyint(1) NOT NULL DEFAULT 0,
  `TP_Github` varchar(200) NOT NULL,
  `TP_Youtube` varchar(200) NOT NULL,
  `TP_Lang` varchar(20) NOT NULL,
  `TPC_Id` int(11) NOT NULL,
  `TP_Views` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `termproject`
--

INSERT INTO `termproject` (`TP_Id`, `St_Id`, `TP_Title`, `TP_Year`, `TP_Sem`, `TP_Domain`, `TP_Desc`, `TP_DOA`, `TP_isApprove`, `TP_Github`, `TP_Youtube`, `TP_Lang`, `TPC_Id`, `TP_Views`) VALUES
(1, 1, 'Spell Checker', 2022, 1, 'Programming', 'Some Description Some Description Some Description Some Description Some Description Some Description', '2022-02-02', 1, 'www.github.com/', 'https://www.youtube.com/embed/uD4izuDMUQA', 'C++', 1, 26),
(4, 2, 'Title 1', 0, 1, 'IHCI', 'Some Description some description some desctiption ', '2022-10-02', 1, 'www.github.com', 'https://www.youtube.com/embed/8vgZmBbiNlA', 'Python', 2, 11),
(12, 1, 'asdfasdfag ', 0, 1, 'Programming', 'adsfasd fasdf a df adf asd fasdf', '2022-02-02', 0, 'www.12312.com', 'https://www.youtube.com/embed/uD4izuDMUQA', 'C/C++ ', 4, 4),
(16, 2, 'Title 12341234', 2022, 1, 'IHCI', 'rg g gdf g', '2022-05-02', 1, 'https://www.github.com', 'https://www.youtube.com/embed/HB5ELwHLCJc', 'C-C++', 3, 11),
(18, 2, '456243fdh gh', 2022, 1, 'IHCI', 'wer sf df asdfdsaf', NULL, 0, 'https://www.github.com', 'https://www.youtube.com/embed/HB5ELwHLCJc', 'C-C++', 3, 1),
(21, 2, 'Title 3', 0, 1, 'IHCI', 'Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description Some Description ', NULL, 0, 'https://www.github.com', 'https://www.youtube.com/embed/HB5ELwHLCJc', 'Python', 3, 1),
(23, 2, 'Title 3123123123', 0, 1, 'IHCI', 'okokokko', NULL, 0, 'https://www.github.com', 'https://www.youtube.com/embed/HB5ELwHLCJc', 'JavaScript', 3, 1),
(29, 2, 'zvkozxcivoi231', 0, 1, 'IHCI', 'asdfadsfmkladsjfalsdfk asdf', NULL, 0, 'https://www.github.com', 'https://www.youtube.com/embed/HB5ELwHLCJc', 'C#', 3, 1),
(30, 2, 'ipo000000000000000', 0, 1, 'IHCI', 'adsdasd', NULL, 0, 'https://www.github.com', 'https://www.youtube.com/embed/HB5ELwHLCJcasf', 'PHP', 3, 1),
(33, 2, 'Title 8', 0, 3, 'IHCI', 'here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description here is some description ', NULL, 0, 'https://www.github.com', 'https://www.youtube.com/embed/HB5ELwHLCJc', 'C-C++', 3, 1),
(34, 2, 'title 9', 2022, 6, 'UI/UX', 'here is some description ', NULL, 0, 'https://www.github.com', 'https://www.youtube.com/embed/HB5ELwHLCJc', 'PHP', 3, 2),
(35, 2, 'asd123123 asd', 2022, 1, 'IHCI', 'asdasd', NULL, 0, 'http://www.github.com', 'https://www.youtube.com/embed/HB5ELwHLCJc', 'C-C++', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `termprojectcategory`
--

CREATE TABLE `termprojectcategory` (
  `TPC_Id` int(11) NOT NULL,
  `TPC_Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `termprojectcategory`
--

INSERT INTO `termprojectcategory` (`TPC_Id`, `TPC_Title`) VALUES
(1, 'Console'),
(2, 'Web'),
(3, 'Desktop'),
(4, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_phoneNumber` varchar(14) NOT NULL,
  `user_type` int(10) UNSIGNED NOT NULL,
  `std_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phoneNumber`, `user_type`, `std_id`) VALUES
(1, 'My Admin ', 'admin@cs.uet.pk', 'admin123', '031112312311', 0, 0),
(2, 'My Student ', 'name@student.uet.edu.pk', 'stud123', '031112312311', 1, 1),
(3, 'Student 2', 'email@email.com', 'stud123', '031112312311', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`AL_Id`),
  ADD UNIQUE KEY `AL_RegNo` (`AL_RegNo`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FC_Id`),
  ADD KEY `FR_Id` (`FR_Id`);

--
-- Indexes for table `facultyrank`
--
ALTER TABLE `facultyrank`
  ADD PRIMARY KEY (`FR_Id`);

--
-- Indexes for table `fyp`
--
ALTER TABLE `fyp`
  ADD PRIMARY KEY (`FYP_Id`),
  ADD KEY `FYP_Suprvisor` (`FYP_Suprvisor`),
  ADD KEY `FYP_CoSupervisor` (`FYP_CoSupervisor`),
  ADD KEY `FYP_ProjectId` (`FYP_ProjectId`);

--
-- Indexes for table `fypremarks`
--
ALTER TABLE `fypremarks`
  ADD PRIMARY KEY (`FYPR_Id`),
  ADD KEY `FYPS_Id` (`FYPS_Id`),
  ADD KEY `FC_Id` (`FC_Id`);

--
-- Indexes for table `fyp_selected`
--
ALTER TABLE `fyp_selected`
  ADD PRIMARY KEY (`FYPS_Id`),
  ADD UNIQUE KEY `FYP_Id` (`FYP_Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticebardcategory`
--
ALTER TABLE `noticebardcategory`
  ADD PRIMARY KEY (`NBC_ID`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`NB_ID`),
  ADD KEY `NB_CatID` (`NB_CatID`);

--
-- Indexes for table `projectsdomain`
--
ALTER TABLE `projectsdomain`
  ADD PRIMARY KEY (`PD_Id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`SF_Id`),
  ADD KEY `SR_ID` (`SR_ID`);

--
-- Indexes for table `staffrank`
--
ALTER TABLE `staffrank`
  ADD PRIMARY KEY (`SR_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_Id`),
  ADD UNIQUE KEY `St_Email` (`St_Email`);

--
-- Indexes for table `termproject`
--
ALTER TABLE `termproject`
  ADD PRIMARY KEY (`TP_Id`),
  ADD UNIQUE KEY `TP_Title` (`TP_Title`),
  ADD KEY `TPC_Id` (`TPC_Id`),
  ADD KEY `St_Id` (`St_Id`);

--
-- Indexes for table `termprojectcategory`
--
ALTER TABLE `termprojectcategory`
  ADD PRIMARY KEY (`TPC_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `AL_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `FC_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facultyrank`
--
ALTER TABLE `facultyrank`
  MODIFY `FR_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fyp`
--
ALTER TABLE `fyp`
  MODIFY `FYP_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fypremarks`
--
ALTER TABLE `fypremarks`
  MODIFY `FYPR_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fyp_selected`
--
ALTER TABLE `fyp_selected`
  MODIFY `FYPS_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noticebardcategory`
--
ALTER TABLE `noticebardcategory`
  MODIFY `NBC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `NB_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `projectsdomain`
--
ALTER TABLE `projectsdomain`
  MODIFY `PD_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `SF_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staffrank`
--
ALTER TABLE `staffrank`
  MODIFY `SR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `termproject`
--
ALTER TABLE `termproject`
  MODIFY `TP_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `termprojectcategory`
--
ALTER TABLE `termprojectcategory`
  MODIFY `TPC_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`FR_Id`) REFERENCES `facultyrank` (`FR_Id`);

--
-- Constraints for table `fyp`
--
ALTER TABLE `fyp`
  ADD CONSTRAINT `fyp_ibfk_2` FOREIGN KEY (`FYP_Suprvisor`) REFERENCES `faculty` (`FC_Id`),
  ADD CONSTRAINT `fyp_ibfk_3` FOREIGN KEY (`FYP_CoSupervisor`) REFERENCES `faculty` (`FC_Id`),
  ADD CONSTRAINT `fyp_ibfk_4` FOREIGN KEY (`FYP_ProjectId`) REFERENCES `termprojectcategory` (`TPC_Id`);

--
-- Constraints for table `fypremarks`
--
ALTER TABLE `fypremarks`
  ADD CONSTRAINT `fypremarks_ibfk_1` FOREIGN KEY (`FYPS_Id`) REFERENCES `fyp_selected` (`FYPS_Id`),
  ADD CONSTRAINT `fypremarks_ibfk_2` FOREIGN KEY (`FC_Id`) REFERENCES `faculty` (`FC_Id`);

--
-- Constraints for table `fyp_selected`
--
ALTER TABLE `fyp_selected`
  ADD CONSTRAINT `fyp_selected_ibfk_1` FOREIGN KEY (`FYP_Id`) REFERENCES `fyp` (`FYP_Id`);

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_ibfk_1` FOREIGN KEY (`NB_CatID`) REFERENCES `noticebardcategory` (`NBC_ID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`SR_ID`) REFERENCES `staffrank` (`SR_ID`);

--
-- Constraints for table `termproject`
--
ALTER TABLE `termproject`
  ADD CONSTRAINT `termproject_ibfk_1` FOREIGN KEY (`TPC_Id`) REFERENCES `termprojectcategory` (`TPC_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `termproject_ibfk_2` FOREIGN KEY (`St_Id`) REFERENCES `student` (`Student_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
