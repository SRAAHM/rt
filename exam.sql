-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 02:10 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `userName`, `password`, `Fname`, `Lname`) VALUES
(1, 'admin', 'admin', 'Akram', 'Luqman');

-- --------------------------------------------------------

--
-- Table structure for table `distribution`
--

CREATE TABLE `distribution` (
  `id` int(15) NOT NULL,
  `exam_center` int(15) DEFAULT NULL,
  `teacher` varchar(15) DEFAULT NULL,
   `assistant` int(15) DEFAULT NULL,
    `manager` int(15) DEFAULT NULL,
  `period` varchar(100) DEFAULT NULL,
  `exam_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `notes` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `userid` int(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `userid`, `date`) VALUES
(1, 'المركز', 1, '2024-01-04'),
(2, 'الحسينية', 1, '2024-01-04'),
(3, 'الهندية', 1, '2024-01-04'),
(4, 'الصافية', 1, '2024-01-04'),
(5, 'الحر الكبير', 1, '2024-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `examination_center`
--

CREATE TABLE `examination_center` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `joint_schools` varchar(100) NOT NULL,
  `hai` int(15) NOT NULL,
  `district` int(15) NOT NULL,
  `teacher_numbers` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examination_center`
--

INSERT INTO `examination_center` (`id`, `name`, `number`, `joint_schools`, `hai`, `district`, `teacher_numbers`) VALUES
(1, 'ث. الذري للمتميزين', '109', 'م. الاسرة التعليمية,ث. المتفوقين الاولى', 2, 1, 10),
(2, 'ث. نازك الملائكة للمتميزات', '98', 'م. الاسرة التعليمية,م. عبدالله بن رواحه', 1, 1, 2),
(3, 'م. الشهيد محمد باقر الصدر (فرنسي)', '158', 'م. عبدالله بن رواحه', 20, 1, 5),
(4, 'ع. الخالدات (فرنسي)', '89', 'م. الاسرة التعليمية,م. عبدالله بن رواحه', 10, 4, 10),
(5, 'الوطن', '2', 'ث. المتفوقين الاولى', 1, 1, 6),
(6, 'الفلوجة', '2', 'م. الاسرة التعليمية,ث. المتفوقين الاولى,م. عبدالله بن رواحه', 1, 1, 2),
(7, 'الاعظمية', '3', 'ث. المتفوقين الاولى,م. عبدالله بن رواحه', 1, 1, 4),
(8, 'الوداد', '4', 'م. الاسرة التعليمية,ث. المتفوقين الاولى', 2, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hai`
--

CREATE TABLE `hai` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `userid` int(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hai`
--

INSERT INTO `hai` (`id`, `name`, `userid`, `date`) VALUES
(1, 'حي الحر', 1, '2024-01-03'),
(2, 'المعلمين', 1, '2024-01-04'),
(3, 'حي العباس', 1, '2024-01-04'),
(4, 'الوئد', 1, '2024-01-04'),
(5, 'باب الخان', 1, '2024-01-04'),
(6, 'الاطباء', 1, '2024-01-04'),
(7, 'حي العامل', 1, '2024-01-04'),
(8, 'حصوة سعود', 1, '2024-01-04'),
(9, 'الجمعية', 1, '2024-01-04'),
(10, 'حي الاسرة', 1, '2024-01-04'),
(11, 'التعاون', 1, '2024-01-04'),
(12, 'شهداء الامام علي', 1, '2024-01-04'),
(13, 'النقيب', 1, '2024-01-04'),
(14, 'البوبيات', 1, '2024-01-04'),
(15, 'السلام', 1, '2024-01-04'),
(16, 'الصافية', 1, '2024-01-04'),
(17, 'الاسرة التعليمية', 1, '2024-01-04'),
(18, 'الرسالة', 1, '2024-01-04'),
(19, 'باب بغداد', 1, '2024-01-04'),
(20, 'العباسية الشرقية', 1, '2024-01-04'),
(21, 'النصر', 1, '2024-01-04'),
(22, 'الكص الجنوبي', 1, '2024-01-04'),
(23, 'ضباط الاسرة', 1, '2024-01-04'),
(24, 'الملحق', 1, '2024-01-04'),
(25, 'المخيم', 1, '2024-01-04'),
(26, 'الحسين', 1, '2024-01-04'),
(27, 'المحمدية', 1, '2024-01-04'),
(28, 'حي الموظفين', 1, '2024-01-04');

-- --------------------------------------------------------
CREATE TABLE Laders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255),
    second_name VARCHAR(255),
    last_name VARCHAR(255),
    id_school INT,
    years_exper INT,
    age INT,
    others TEXT
);

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(15) NOT NULL,
  `sender_full_name` varchar(100) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `sender_full_name`, `sender_email`, `message`, `date_time`) VALUES
(1, 'ad', 'a@mail.com', 'dfsdfsfsdf', '2023-12-23 20:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` int(15) NOT NULL,
  `hai` int(15) NOT NULL,
  `district` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `name`, `type`, `hai`, `district`) VALUES
(1, 'م. الاسرة التعليمية', 2, 17, 1),
(2, 'ث. المتفوقين الاولى', 3, 18, 1),
(3, 'م. عبدالله بن رواحه', 1, 19, 1),
(4, 'ث. الوئد', 1, 4, 2),
(5, 'ع. الروضتين', 2, 20, 1),
(6, 'ع. بضعة الرسول', 3, 21, 1),
(7, 'م. السيدة اميمة', 2, 22, 3),
(8, 'م. الروح الامين', 1, 8, 2),
(9, 'م. المبدعات', 2, 9, 3),
(10, 'ث. غادة كربلاء', 3, 28, 1),
(11, 'م. الريحانة', 2, 23, 1),
(12, 'م. الوصال', 1, 24, 1),
(13, 'م. الطيبات', 2, 12, 1),
(14, 'م. العفة', 2, 13, 1),
(15, 'م. المخيم', 3, 25, 1),
(16, 'م. ميسلون', 1, 26, 1),
(17, 'م. الايثار', 3, 27, 5);

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `userid` int(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `name`, `userid`, `date`) VALUES
(1, 'اللغة العربية', 1, '2024-01-04'),
(2, 'الفيزياء', 1, '2024-01-04'),
(3, 'الكيمياء', 1, '2024-01-04'),
(4, 'الرياضيات', 1, '2024-01-04'),
(5, 'الاسلامية', 1, '2024-01-04'),
(6, 'الاخياء', 1, '2024-01-04'),
(7, 'اقتصاد منزلي', 1, '2024-01-04'),
(8, 'اللغة الانجليزية', 1, '2024-01-04'),
(9, 'التاريخ', 1, '2024-01-04'),
(10, 'القرآن', 1, '2024-01-04'),
(11, 'الجغرافيا', 1, '2024-01-04'),
(12, 'الاجتماعيات', 1, '2024-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `userid` int(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `userid`, `date`) VALUES
(1, 'بغداد', 1, '2024-01-04'),
(2, 'القادسية', 1, '2024-01-04'),
(3, 'الديوانية', 1, '2024-01-04'),
(4, 'النجف', 1, '2024-01-04'),
(5, 'بابل', 1, '2024-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(15) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `id_school` int(15) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `specialization` int(15) NOT NULL,
  `phase` varchar(100) NOT NULL,
  `id_state` int(15) NOT NULL,
  `hai` int(15) NOT NULL,
  `district` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `second_name`, `last_name`, `id_school`, `job_title`, `specialization`, `phase`, `id_state`, `hai`, `district`) VALUES
(1, 'اكرم', 'عبدالكريم', 'لقمان', 1, 'مدير', 8, 'لا', 3, 15, 1),
(2, 'بسمة', 'احمد', 'ريتويت', 3, 'معاون', 2, 'نعم', 1, 2, 3),
(3, 'علياء', 'مهند', 'الورد', 2, 'مدرس', 1, 'نعم', 1, 2, 1),
(4, 'محمد', 'فهد', 'حنتور', 3, 'مدرس', 1, 'نعم', 1, 1, 2),
(5, 'خالد', 'عبدالكريم', 'الوشلي', 1, 'معاون', 11, 'لا', 1, 12, 4),
(6, 'هيلة', 'احمد', 'الموشكي', 3, 'معاون', 2, 'نعم', 1, 2, 3),
(7, 'فهد', 'صالح', 'الصباحي', 2, 'مدرس', 1, 'نعم', 1, 2, 1),
(8, 'ياسمين', 'فهد', 'القحطاني', 3, 'مدرس', 1, 'نعم', 1, 1, 1),
(9, 'هند', 'وسام', 'حميد', 1, 'مدرس', 1, 'نعم', 1, 22, 3),
(10, 'صباح', 'سليم', 'قحطان', 3, 'معاون', 2, 'نعم', 1, 2, 3),
(11, 'عفاف', 'محمود', 'كريم', 2, 'مدرس', 1, 'نعم', 1, 2, 1),
(12, 'حمد', 'مصلح', 'حبيب', 3, 'مدرس', 1, 'نعم', 1, 1, 5),
(13, 'خلود', 'بسام', 'عطان', 1, 'مدرس', 3, 'نعم', 1, 5, 4),
(14, 'هايل', 'قسام', 'حمدان', 3, 'معاون', 2, 'نعم', 1, 2, 3),
(15, 'شعيب', 'لؤي', 'رشاد', 2, 'مدرس', 1, 'نعم', 1, 2, 1),
(16, 'كريم', 'علي', 'لقمان', 1, 'مدير', 1, 'لا', 1, 1, 1),
(17, 'باسم', 'احمد', 'ريتويت', 2, 'مدرس', 2, 'نعم', 1, 2, 2),
(18, 'علياء', 'مهند', 'الورد', 3, 'مدرس', 3, 'نعم', 1, 3, 3),
(19, 'محمد', 'فهد', 'حنتور', 4, 'مدرس', 4, 'نعم', 1, 4, 4),
(20, 'خالد', 'عبدالكريم', 'الوشلي', 5, 'معاون', 5, 'لا', 1, 12, 5),
(21, 'هيلة', 'احمد', 'الموشكي', 6, 'مدرس', 6, 'نعم', 1, 6, 1),
(22, 'فهد', 'صالح', 'الصباحي', 7, 'مدرس', 7, 'نعم', 1, 7, 2),
(23, 'ياسمين', 'فهد', 'القحطاني', 8, 'مدرس', 8, 'نعم', 1, 8, 3),
(24, 'هند', 'وسام', 'حميد', 9, 'مدرس', 9, 'نعم', 1, 9, 4),
(25, 'صباح', 'سليم', 'قحطان', 10, 'مدرس', 10, 'نعم', 1, 10, 5),
(26, 'عفاف', 'محمود', 'كريم', 11, 'مدرس', 11, 'نعم', 1, 11, 1),
(27, 'حمد', 'مصلح', 'حبيب', 12, 'مدرس', 12, 'نعم', 1, 12, 2),
(28, 'خلود', 'بسام', 'عطان', 13, 'مدرس', 1, 'نعم', 1, 13, 3),
(29, 'هايل', 'قسام', 'حمدان', 14, 'مدرس', 2, 'نعم', 1, 14, 4),
(30, 'شعيب', 'لؤي', 'رشاد', 15, 'مدرس', 3, 'نعم', 1, 15, 5),
(31, 'خالد', 'عبدالكريم', 'الوشلي', 16, 'معاون', 4, 'لا', 1, 16, 1),
(32, 'هيلة', 'احمد', 'الموشكي', 17, 'مدرس', 5, 'نعم', 1, 17, 2),
(33, 'فهد', 'صالح', 'الصباحي', 1, 'مدرس', 6, 'نعم', 1, 18, 3),
(34, 'ياسمين', 'فهد', 'القحطاني', 2, 'مدرس', 7, 'نعم', 1, 19, 4),
(35, 'هند', 'وسام', 'حميد', 1, 'مدرس', 8, 'نعم', 1, 20, 5),
(36, 'صباح', 'سليم', 'قحطان', 3, 'مدرس', 9, 'نعم', 1, 21, 1),
(37, 'عفاف', 'محمود', 'كريم', 4, 'مدرس', 10, 'نعم', 1, 22, 2),
(38, 'حمد', 'مصلح', 'حبيب', 5, 'مدرس', 11, 'نعم', 1, 23, 3),
(39, 'خلود', 'بسام', 'عطان', 6, 'مدرس', 12, 'نعم', 1, 24, 4),
(40, 'هايل', 'قسام', 'حمدان', 7, 'مدرس', 2, 'نعم', 1, 25, 5),
(41, 'شعيب', 'لؤي', 'رشاد', 8, 'مدرس', 1, 'نعم', 1, 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `userid` int(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `userid`, `date`) VALUES
(1, 'بنين', 1, '2024-01-04'),
(2, 'بنات', 1, '2023-12-12'),
(3, 'مختلط (بنين وبنات)', 1, '2024-01-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `distribution`
--
ALTER TABLE `distribution`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_center` (`exam_center`),
  ADD KEY `teacher` (`teacher`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `examination_center`
--
ALTER TABLE `examination_center`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hai` (`hai`),
  ADD KEY `district` (`district`);

--
-- Indexes for table `hai`
--
ALTER TABLE `hai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hai` (`hai`),
  ADD KEY `district` (`district`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hai` (`hai`),
  ADD KEY `id_school` (`id_school`),
  ADD KEY `id_state` (`id_state`),
  ADD KEY `district` (`district`),
  ADD KEY `specialization` (`specialization`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `distribution`
--
ALTER TABLE `distribution`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `examination_center`
--
ALTER TABLE `examination_center`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hai`
--
ALTER TABLE `hai`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `distribution`
--
ALTER TABLE `distribution`
  ADD CONSTRAINT `distribution_ibfk_1` FOREIGN KEY (`exam_center`) REFERENCES `examination_center` (`id`),
  ADD CONSTRAINT `distribution_ibfk_2` FOREIGN KEY (`teacher`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `admin` (`user_id`);

--
-- Constraints for table `examination_center`
--
ALTER TABLE `examination_center`
  ADD CONSTRAINT `examination_center_ibfk_1` FOREIGN KEY (`hai`) REFERENCES `hai` (`id`),
  ADD CONSTRAINT `examination_center_ibfk_2` FOREIGN KEY (`district`) REFERENCES `district` (`id`);

--
-- Constraints for table `hai`
--
ALTER TABLE `hai`
  ADD CONSTRAINT `hai_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `admin` (`user_id`);

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`hai`) REFERENCES `hai` (`id`),
  ADD CONSTRAINT `school_ibfk_2` FOREIGN KEY (`type`) REFERENCES `type` (`id`),
  ADD CONSTRAINT `school_ibfk_3` FOREIGN KEY (`district`) REFERENCES `district` (`id`);

--
-- Constraints for table `specialization`
--
ALTER TABLE `specialization`
  ADD CONSTRAINT `specialization_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `admin` (`user_id`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `admin` (`user_id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`hai`) REFERENCES `hai` (`id`),
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`id_state`) REFERENCES `state` (`id`),
  ADD CONSTRAINT `teachers_ibfk_3` FOREIGN KEY (`id_school`) REFERENCES `school` (`id`),
  ADD CONSTRAINT `teachers_ibfk_4` FOREIGN KEY (`district`) REFERENCES `district` (`id`),
  ADD CONSTRAINT `teachers_ibfk_5` FOREIGN KEY (`specialization`) REFERENCES `specialization` (`id`);

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `admin` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
