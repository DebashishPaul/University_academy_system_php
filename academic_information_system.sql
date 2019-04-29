-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 04:10 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic_information_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_application_form`
--

CREATE TABLE `student_application_form` (
  `id` int(20) NOT NULL,
  `Date_of_Admission` date NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_application_form`
--

INSERT INTO `student_application_form` (`id`, `Date_of_Admission`, `first_name`, `middle_name`, `last_name`, `father_name`, `mother_name`, `date_of_birth`) VALUES
(0, '2019-04-10', 'dewd', 'dewd', 'dewd', 'dew', 'dew', '2019-04-01'),
(0, '2019-04-10', 'dewd', 'dewd', 'dewd', 'dew', 'dew', '2019-04-01'),
(0, '2019-04-10', 'bfgg', 'gregerg', 'rgregre', 'grgreg', 'regreg', '2019-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_from`
--

CREATE TABLE `teacher_from` (
  `id` int(20) DEFAULT NULL,
  `Date_of_Admission` date NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_from`
--

INSERT INTO `teacher_from` (`id`, `Date_of_Admission`, `firstname`, `middlename`, `lastname`, `father_name`, `mother_name`) VALUES
(NULL, '2019-04-03', 'Kimia', 'zaman', 'Tuz', 'hello', 'world'),
(0, '2019-04-09', 'cwdcwec', 'cwecwec', 'cwecwec', 'cwecwe', 'cwecw');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_grade_submission`
--

CREATE TABLE `teacher_grade_submission` (
  `id` int(11) DEFAULT NULL,
  `Student_name` varchar(20) NOT NULL,
  `student_ID` int(10) NOT NULL,
  `CGPA` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_grade_submission`
--

INSERT INTO `teacher_grade_submission` (`id`, `Student_name`, `student_ID`, `CGPA`) VALUES
(0, 'Kimia Tuz', 122144, 3),
(0, 'Kimia Tuz', 122144, 3),
(0, 'Kimia Tuz', 122144, 3),
(0, 'wordh', 2141421, 21),
(0, 'wordh', 2141421, 21),
(0, 'wordh', 2141421, 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
