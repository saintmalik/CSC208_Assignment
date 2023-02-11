
--
-- Database: `id17229299_csc315_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `CourseForm`
--

CREATE TABLE `CourseForm` (
  `CourseID` int(11) NOT NULL,
  `CourseCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CourseTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CourseUnit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CourseForm`
--

INSERT INTO `CourseForm` (`CourseID`, `CourseCode`, `CourseTitle`, `CourseUnit`) VALUES
(1, 'CSC315', 'Introduction To Database Management', 3),
(2, 'CSC301', 'Computer Architecture', 3),
(3, 'CSC311', 'Ecommerce Technology', 2),
(4, 'CSC313', 'Object Oriented Programming', 3),
(5, 'CSC309', 'System Analysis and Design', 2),
(6, 'CSC305', 'Computer Network', 3),
(7, 'EDU301', 'Curriculum Development', 2),
(8, 'EDU305', 'Educational Technology', 2),
(9, 'EDU303', 'Research In Eduction', 2),
(10, 'ESC311', 'Enterpreneurship', 2);
