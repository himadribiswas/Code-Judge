-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 07:50 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `statement` longtext NOT NULL,
  `setno` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `output1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `output2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `output3` varchar(255) NOT NULL,
  `d` varchar(10) NOT NULL,
  `pts` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`statement`, `setno`, `input1`, `output1`, `input2`, `output2`, `input3`, `output3`, `d`, `pts`) VALUES
('<pre>\r\nInput consist of month number (MM), the day of the month (DD) and the year (YYYY). \r\nWrite a program to calculate and print the corresponding day of the year.\r\nA year will consist of 366 days if its a leap year while it will consists 365 days if its not a leap year.\r\n\r\nExample 1:\r\n\r\nInput:  Month 05\r\n        Day 03\r\n        Year 1996\r\nOutput: CORRESPONDING DAY OF THE YEAR IS : 124\r\n         ( 31 + 29 + 31 + 30 + 3 = 124 )\r\n\r\nExample 2:\r\n\r\nInput:  Month 05\r\n        Day 03\r\n        Year 1997\r\nOutput: CORRESPONDING DAY OF THE YEAR IS : 124\r\n         ( 31 + 28 + 31 + 30 + 3 = 123 )\r\n\r\nNB: For java write class name as problem2\r\n<pre>', 2, '05 03 1996', '124', '05 03 1997', '123', '09 12 2017', '255', 'e', 500),
('<pre>\r\nA Circular Prime is a prime number that remains prime under cyclic shifts of its digits. When the leftmost digit is removed \r\nand replaced at the end of the remaining string of digits, the generated number is still prime. The process is repeated \r\nuntil the original number is reached again.\r\n\r\nA number is said to be prime if it has only two factors 1 and itself.\r\n\r\nExample:\r\n\r\n131\r\n311\r\n113\r\nHence, 131 is a circular prime.\r\nTest your program with the sample data and some random data:\r\n\r\nExample 1\r\n\r\nINPUT:\r\nN = 197\r\n\r\nOUTPUT:\r\nCIRCULAR PRIME\r\n\r\nExplanation\r\n197\r\n971\r\n719\r\nAll are Prime Numbers\r\n\r\nExample 2\r\n\r\nINPUT:\r\nN = 1193\r\n\r\nOUTPUT:\r\nCIRCULAR PRIME\r\n\r\nExplanation\r\n1193\r\n1931\r\n9311\r\n3119\r\nAll are Prime Numbers\r\nExample 3\r\n\r\nINPUT:\r\nN = 29\r\n\r\nOUTPUT:\r\nNOT A CIRCULAR PRIME\r\n\r\nExplanation\r\n29\r\n92\r\n92 is not a Prime number\r\n\r\nNB: For java write class name as problem1\r\n</pre>', 1, '197', 'CIRCULAR PRIME', '1193', 'CIRCULAR PRIME', '29', 'NOT A CIRCULAR PRIME', 'e', 500),
('<pre>\r\nWrite a program to accept a sentence as input. The words in the string are to be separated by a blank. \r\nEach word must be in upper case.The sentence is terminated by either \'.\',\'!\' or \'?\'. \r\nPerform the following tasks:\r\n\r\nArrange the sentence in alphabetical order of the words.\r\nTest your program with the sample data and some random data:\r\n\r\nExample 1\r\n\r\n INPUT: NECESSITY IS THE MOTHER OF INVENTION.\r\n OUTPUT:\r\n INVENTION IS MOTHER NECESSITY OF THE\r\n\r\nExample 2\r\n\r\n INPUT: BE GOOD TO OTHERS!\r\n OUTPUT:\r\n BE GOOD OTHERS TO\r\n\r\nNB: For java write class name as problem5\r\n</pre>', 5, 'NECESSITY IS THE MOTHER OF INVENTION.', 'INVENTION IS MOTHER NECESSITY OF THE', 'BE GOOD TO OTHERS.', 'BE GOOD OTHERS TO', 'NECESSITY IS THE MOTHER OF INVENTION.', 'INVENTION IS MOTHER NECESSITY OF THE', 'e', 500),
('<pre>\r\nA composite Magic number is a positive integer which is composite as well as a magic number.\r\n\r\nComposite number: A composite number is a number which has more than two factors. For example: 10 Factors are: 1,2,5,10\r\n\r\nMagic number: A Magic number is a number in which the eventual sum of the digit d is equal to 1. \r\nFor example: 28 = 2+8=10= 1+0=1\r\n\r\nAccept two positive integers m and n, where m is less than n as user input. Display the number of composite magic \r\nintegers that are in the range between m and n (both inclusive) and output them along, in the format specified below:\r\n\r\nExample:\r\n\r\nInput: \r\n10\r\n100\r\nOUTPUT:\r\n10 28 46 55 64 82 91 100\r\n\r\n\r\nInput: \r\n120\r\n90\r\nOUTPUT:\r\nInvalid Input\r\n\r\n\r\nNB:For java dont use Buffered Reader for this program, write class name as problem4\r\n<pre>\r\n', 4, '10 100', '10 28 46 55 64 82 91 100', '120 90 ', 'Invalid Input', '100 500', '100 118 136 145 154 172 190 208 217 226 235 244 253 262 280 289 298 316 325 334 343 352 361 370 388 406 415 424 442 451 460 469 478 496', 'e', 500),
('<pre>\r\nWrite a program to declare a square matrix A[][] of order MÃ—M where â€˜Mâ€™ is the number of rows and the number of rows\r\nand the number of columns, such that M must be greater than 2 and less 10. Accept the value M as user input. \r\nDisplay an appropriate message for an Invalid Input. Allow the user to input integers into the matrix. \r\nPerform the following tasks:\r\nCalculate the sum of left and right diagonal of the matrix and print the sum which is maximum.\r\n\r\nExample 1\r\n\r\nINPUT:         \r\nM=3\r\n\r\n3       4       9\r\n2       5       8\r\n1       6       7\r\n\r\nOUTPUT: \r\n15\r\n\r\nExplanation:\r\nSum of left diagonal is 15.\r\nSum of right diagonal is 15.\r\nMaximum is 15.\r\n\r\n\r\nExample 2\r\n\r\nINPUT:         \r\nM=4\r\n\r\n1       2       4       9\r\n2       5       8       3\r\n1       6       7       4\r\n3       7       6       5\r\n\r\nOUTPUT: \r\n26\r\n\r\nExplanation:\r\nSum of left diagonal is 18.\r\nSum of right diagonal is 26.\r\nMaximum is 26.\r\n\r\n\r\nExample 3\r\n\r\nINPUT:         \r\nM=14\r\nOUTPUT:\r\nSIZE OUT OF RANGE\r\n\r\nNB: For java write class name as problem3\r\n</pre>', 3, '14', 'SIZE OUT OF RANGE', '3 3 4 9 2 5 8 1 6 7', '15', '4 1 2 4 9 2 5 8 3 1 6 7 4 3 7 6 5', '26', 'e', 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(50) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `crn1` varchar(50) NOT NULL,
  `crn2` varchar(200) NOT NULL,
  `year1` varchar(200) NOT NULL,
  `year2` varchar(11) NOT NULL,
  `contact1` varchar(12) NOT NULL,
  `contact2` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `attempt` int(11) NOT NULL,
  `problem1` int(11) NOT NULL,
  `problem2` int(11) NOT NULL,
  `problem3` int(11) NOT NULL,
  `problem4` int(11) NOT NULL,
  `problem5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name1`, `name2`, `crn1`, `crn2`, `year1`, `year2`, `contact1`, `contact2`, `password`, `attempt`, `problem1`, `problem2`, `problem3`, `problem4`, `problem5`) VALUES
('ABHRA BANERJEE', 'ABHRA BANERJEE', 'ABHRA BANERJEE', 'ECE2016/018', 'ECE2016/018', '2ND', '2ND', '9836584674', '9836584674', 'abhra1998', 0, 532, 532, 525, 0, 0),
('alpha1', 'Debarati Chakraborty', 'Suporna Bhowmick', 'ECE2015/048', 'ECE2015/003', '3rd', '3rd', '9674254497', '9804037214', 'alpha++', 0, 0, 534, 0, 0, 0),
('aryan', 'aryan', 'aryan', 'ECE2016/071', 'ECE2016/071', '2ND', '2ND', '9231805908', '9231805908', 'aryan8474', 0, 0, 0, 0, 0, 0),
('AVIK007', 'Avik Chatterjee', 'Nilam Brittwa Biswas', 'ECE2015/076', 'ECE2015/111', '3rd', '3rd', '9883998574', '9038301585', 'avik007', 0, 533, 541, 0, 0, 0),
('Bat', 'Sourav', 'Aakash', 'ECE2016088', 'ECE2016073', '2nd', '2nd', '9830473421', '90626482776', 'Indian7*', 0, 537, 0, 0, 0, 0),
('BRATS', 'MD SAQUIB ALAM', 'ABDUL MOHEET', 'ECE2016/070', 'ECE2016/067', '2nd', '2nd', '7679414708', '9431963913', 'brats2017', 0, 525, 542, 532, 506, 0),
('check', 'Himadri Sekhar Biswas', 'hhhhh', 'hh', 'hhh', 'hhh', 'hh', 'hhh', 'hh', '1234', 0, 0, 635, 0, 0, 0),
('codersalive', 'hozaifa ', 'harshit', 'IT2016/007', 'IT2016/006', '2ND', '2ND', '8240538339', '7003214924', 'HOZAIFAHARSHIT', 0, 552, 549, 539, 529, 520),
('CodesNil', 'Niladri Ranjan Mani', 'q', '053', 'q', '2017', 'q', '8240972384', 'q', 'codemania', 0, 538, 0, 514, 0, 0),
('CodeX', 'Chitraniva Karmakar', 'Khusboo Singh', 'ECE2014/079', 'ECE2014/063', '4th', '4th', '9433700414', '9038286851', 'codeX', 0, 521, 505, 0, 0, 0),
('coding team', 'Nilay Roy', 'Umang Todi', 'ECE2016/105', 'ECE2016/106', '2nd', '2nd', '9674569825', '8017705614', '7003291887', 0, 532, 532, 0, 0, 0),
('Dawn', 'Himadri Biswas', 'Debamalya Dawn', 'Ece2014105', 'Ece2013/', '4th', '5th', '1234', '1234', '1234', 0, 0, 0, 0, 0, 530),
('devil', 'satya prakash', 'shounak mitra', '095', '118', '2', '2', '8709805472', '9051868991', '@rcciit@', 0, 0, 516, 0, 0, 0),
('Dynamics', 'SUDIP GHOSH', 'SUMAN CHANDRA MODAK', 'ECE2015/007', 'ECE2015/047', '3rd', '3rd', '9474116864', '8017210054', 'suman159357', 0, 0, 535, 0, 0, 0),
('fire emblem', 'soumya', 'soumya', 'ece2015/115', 'ece2015/115', '3rd', '3rd', '8017467934', '8017467934', '12345', 0, 539, 525, 515, 507, 0),
('KINGINTHENORTH', 'SACHIN SHAW', 'RISHAV GHOSH', 'ECE2015/65', 'ECE2015/64', '3RD', '3RD', '8981669136', '8250845996', 'lawdalahsan', 0, 0, 516, 0, 0, 0),
('knight riders', 'probal mukherjee', 'susmita ghsoh', 'ece2015001', 'ece2015030', '3rd', '3rd', '7980578509', '8697012814', 'Probalsus#', 0, 0, 0, 0, 0, 0),
('Legion', 'Sabyasachi Chowdhury', 'Nabanita Pachal', 'ECE2016/064', 'ECE2016/078', '2nd', '2nd', '8981578533', '7059282765', 'helloworld', 0, 539, 533, 513, 0, 0),
('Morbid Mask', 'Rounak Mukherjee', 'Souvik Sil', '85', '83', '4', '4', '9051557530', '9051019188', 'Svk12345', 0, 0, 0, 0, 0, 0),
('sagar_sandeep', 'Sagar', 'Sandeep', 'ece2015/099', 'ECE2015/084', '3RD', '3RD', '8902232893', '9614897410', '9964108420', 0, 553, 544, 0, 516, 0),
('subhashis++', 'subhashis', 'nil', 'ece2015/006', 'nil', '3rd', 'nil', '9088210164', 'nil', '8100562388', 0, 517, 0, 500, 0, 0),
('superman', 'SURAJ KUMAR SINGH', 'SATYA PRAKASH PARIDA', 'ECE2015/019', 'ECE2015/020', '3', '3', '7686070181', '8981970865', 'RAjn123@', 0, 551, 545, 537, 512, 0),
('synetrix', 'rupam sinha roy', 'abhishek singh', 'ece2015046', 'ece2015028', '3', '3', '9062348774', '9903224796', 'airforce001', 0, 543, 533, 0, 0, 0),
('Techtroid', 'Pritam soni', 'Rahul Naskar', 'ECE2016/114', 'ECE2016/114', 'second', 'second', '9163732852', '8621834219', 'qwerty', 0, 0, 0, 0, 0, 0),
('techworld', 'shreemoyee bhattacharyya', 'manisha das', 'ece2016/076', 'ece2016/121', 'second', 'second', '9874075590', '7044686217', 'maman', 0, 0, 537, 521, 0, 0),
('uandj', 'Upasana Mukhopadhyay', 'Jhilik Kundu', 'ECE2017/041', 'ECE2017/052', '1st ', '1st ', '7278263615', '8116221455', 'u&j', 0, 0, 0, 0, 0, 0),
('White Walkers', 'Amit kr. Mishra', 'Suvojit Sanyal', 'ECE/2015/044', 'ECE/2015/051', '3rd', '3rd', '8583885211', '7278808523', 'itwasme', 0, 500, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`setno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
