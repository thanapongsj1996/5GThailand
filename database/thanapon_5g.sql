-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2019 at 02:31 AM
-- Server version: 5.6.42
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
-- Database: `thanapon_5g`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('super admin','admin') NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'Thanapong', 'Somjai', 'iamboy1150', '$2y$10$61XG2r2BtWtDpbJOg/NczOEVJDMd.hQmTrGbvVaYXUK6OofHN.NMm', 'super admin', '2019-01-21 02:01:27', '2019-01-18 13:02:16', '2019-01-18 13:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` enum('true','false') NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `writer`, `subject`, `sub_title`, `detail`, `image`, `tag`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Boss', 'New Era of Robot', 'Software Development for Robots', '<p>&nbsp;&nbsp;&nbsp;&nbsp;ปัจจุบัน การศึกษาหุ่นยนต์มีความสะดวกมากยิ่งขึ้น เพราะฮาร์ดแวร์ราคาถูกที่เหมาะแก่การทดลองมีราคาถูกและหาซื้อได้ง่าย อีกทั้งซอร์ฟแวร์แบบ open source เปิดกว้างมากขึ้นทำให้ผู้ที่สนใจสามารถดาวน์โหลดมาใช้งานได้ บทความนี้จะพูดถึงซอร์ฟแวร์พัฒนาหุ่นยนต์ที่กำลังได้รับความนิยม นั่นคือ Robot Operating System</p>\r\n\r\n<p>มักถูกย่อและเรียกสั้นว่า ROS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Robot Operating System (ROS)&nbsp;คือ framework สำหรับการพัฒนาหุ่นยนต์ (ขัดแย้งกับชื่อเพราะไม่ใช่ Operating System) เพิ่มความสะดวกและรวบรวม package, library, tools</p>\r\n\r\n<p>ที่จำเป็นและสำคัญ เช่น driver ที่ติดต่อกับ sensors, library สำหรับประมวลผลภาพ และ Visulization tools สำหรับการจำลองและแสดงผลการทำงานของซอร์ฟแวร์</p>\r\n\r\n<p>ซึ่งสามารถได้รับเครื่องมือเหล่านี้ครบถ้วนจากการติดตั้ง ROS เพียงอย่างเดียว และที่สำคัญที่สุดคือ ROS เป็น open source project ซึ่งสร้างและดูแลโดยบริษัท Willow Garage</p>\r\n\r\n<p>(บริษัทใน California ที่จัดตั้งในปี 2006)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ปัจจัยที่ทำให้ ROS เกิดขึ้น คือ การสร้างหุ่นยนต์ต้องใช้ความรู้จากหลากหลายสาขา ได้แก่ วิศวกรเครื่องกล วิศวกรไฟฟ้าอิเล็คทรอนิกส์ วิศวกรคอมพิวเตอร์ ซึ่งเป็นเรื่องยากสำหรับ</p>\r\n\r\n<p>คนคนหนึ่งจะมีความสามารถครบทั้งหมด ยกตัวอย่างเช่น ผู้ที่เชี่ยวชาญการด้าน sensor ที่รู้ทั้งข้อจำกัดและความแม่นยำของ sensor มักจะไม่เคยเขียนโปรแกรมมาก่อน หรือผู้ที่</p>\r\n\r\n<p>สามารถเขียนโปรแกรมได้อย่างคล่องแคล่วมักไม่เข้าใจกระบวนการจัดการกับสัญญาณที่ได้จาก sensor ดังนั้น การสร้างหุ่นยนต์โดยพัฒนาซอร์ฟแวร์บน ROS จะช่วยลดข้อจำกัด</p>\r\n\r\n<p>ดังกล่าวได้อย่างมาก ทำให้การศึกษาหุ่นยนต์โดยสมาชิกกลุ่มเล็กๆหรือตัวคนเดียวนั้นสามารถเป็นไปได้</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ROS เป็น framework ในการพัฒนาหุ่นยนต์ที่เหมาะแก่การทดลอง ศึกษา วิจัย งานทั่วๆไปที่ไม่ต้องการความเที่ยงสูงๆ ซึ่งต่างจาก framework ที่เกี่ยวข้องกับหุ่นยนต์ตัวอื่นๆซึ่งส่วนใหญ่</p>\r\n\r\n<p>ถูกออกแบบเพื่อใช้งานแบบเฉพาะเจาะจง ทำให้ framework เหล่านี้ไม่ได้รับความนิยมเท่ากับ ROS หรืออาจจะเป็นเพราะว่าเข้าถึงและเรียนรู้ยากกว่า</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>จุดเด่นของ ROS</p>\r\n\r\n<ul>\r\n	<li>มีความยืดหยุ่นสูงสำหรับการพัฒนาซอร์ฟแวร์ เพราะ สามารถใช้ได้หลายภาษา โดยภาษาที่ได้รับความนิยม คือ C++ และ&nbsp;Python</li>\r\n	<li>มีระบบจัดการการใช้ทรัพยากรของฮาร์ดแวร์</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ข้อจำกัดของ ROS</p>\r\n\r\n<ul>\r\n	<li>ปัจจุบัน ROS เหมาะแก่การใช้งานบน Linux Operating System เช่น Ubuntu แม้จะประกาศรองรับ Windows ในปีที่ผ่านมา แต่ยังไม่มีความเสถียร</li>\r\n	<li>เนื่องจากใช้งานบน Linux จึงต้องมีทักษะการใช้ Bash terminal หรือ Unix&nbsp;command line บ้าง&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'ros.png', 'all,future,innovation', 'true', '2019-01-21 00:42:29', '2019-01-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
