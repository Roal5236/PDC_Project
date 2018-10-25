-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 06:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions2`
--

CREATE TABLE `questions2` (
  `qno` int(3) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions2`
--

INSERT INTO `questions2` (`qno`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 'Which of these is long data type literal?', ' 0x99fffL', 'ABCDEFG', '0x99fffa', '99671246'),
(2, 'Which of these can be returned by the operator & ?', 'Integer', 'Boolean', 'Character', 'Integer and Boolean'),
(3, 'Literal can be of which of these data types?', 'Integer', 'Float', 'Boolean', 'All of the above'),
(4, 'Which of these can not be used for a variable name in Java?', 'Identifier', 'Keyword', 'Both 1 and 2', 'None of the above'),
(5, 'What is the range of byte data type in Java?', '-128 to 127', '-32768 to 32767', '-2147483648 to 2147483647', 'None of the above'),
(6, 'What is the range of short data type in Java?', ' -128 to 127', '-32768 to 32767', '-2147483648 to 2147483647', 'None of the above'),
(7, 'An expression involving byte, int, and literal numbers is promoted to which of these?', 'int', 'long', 'byte', 'float'),
(8, 'Which data type value is returned by all transcendental math functions?', 'int', 'float', 'double', 'long'),
(9, 'What is the size of wchar_t in C++?', '2', '4', '6', 'Based on number of bits in the system'),
(10, 'Which data type is used to represent the absence of parameters?', 'int', 'void', 'short', 'long'),
(11, 'Which type is best suited to represent the logical values?', 'integer', 'boolean', 'character', 'All of the above'),
(12, 'Identify the user-defined types from the following?', 'int', 'float', 'classes', 'boolean');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions2`
--
ALTER TABLE `questions2`
  ADD PRIMARY KEY (`qno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
