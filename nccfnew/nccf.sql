-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 02:31 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nccf`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `asec`
--

CREATE TABLE `asec` (
  `id` int(255) NOT NULL,
  `asecname` varchar(255) NOT NULL,
  `asecimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asec`
--

INSERT INTO `asec` (`id`, `asecname`, `asecimg`) VALUES
(1, 'the girl', '152885.jpg'),
(2, 'thethe', '101871.jpg'),
(3, 'cbfbf', '797399.jpg'),
(4, 'bcvbfbf', '622700.jpg'),
(5, 'sssaa', '765659.jpg'),
(6, '', '88843.jpg'),
(7, 'ss', '347811.jpg'),
(8, 'ss', '908931.jpg'),
(9, 'thethe', '70189.jpg'),
(10, 'sssaa', '495883.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bsec`
--

CREATE TABLE `bsec` (
  `id` int(255) NOT NULL,
  `bsecname` varchar(255) NOT NULL,
  `bsecimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsec`
--

INSERT INTO `bsec` (`id`, `bsecname`, `bsecimg`) VALUES
(1, 'bible', '64642.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chairman`
--

CREATE TABLE `chairman` (
  `id` int(255) NOT NULL,
  `chairmanname` varchar(255) NOT NULL,
  `chairmanimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chairman`
--

INSERT INTO `chairman` (`id`, `chairmanname`, `chairmanimg`) VALUES
(1, '266146.jpg', 'cfvbbf'),
(2, '581771.jpg', 'bffb'),
(3, '491848.jpg', 'fyjtrfjm'),
(4, '70698.jpg', 'joe am the '),
(5, 'joel for president', '956262.jpg'),
(6, 'thePPP', '226409.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dd`
--

CREATE TABLE `dd` (
  `id` int(255) NOT NULL,
  `ddname` varchar(255) NOT NULL,
  `ddimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dd`
--

INSERT INTO `dd` (`id`, `ddname`, `ddimg`) VALUES
(1, 'ddddddd', '889839.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `esec`
--

CREATE TABLE `esec` (
  `id` int(255) NOT NULL,
  `esecname` varchar(255) NOT NULL,
  `esecimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `esec`
--

INSERT INTO `esec` (`id`, `esecname`, `esecimg`) VALUES
(1, 'evan', '630454.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `finsec`
--

CREATE TABLE `finsec` (
  `id` int(255) NOT NULL,
  `finsecname` varchar(255) NOT NULL,
  `finsecimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finsec`
--

INSERT INTO `finsec` (`id`, `finsecname`, `finsecimg`) VALUES
(1, 'the FinSec', '785913.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gsec`
--

CREATE TABLE `gsec` (
  `id` int(255) NOT NULL,
  `gsecname` varchar(255) NOT NULL,
  `gsecimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gsec`
--

INSERT INTO `gsec` (`id`, `gsecname`, `gsecimg`) VALUES
(1, 'genSec', '388458.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `md`
--

CREATE TABLE `md` (
  `id` int(255) NOT NULL,
  `mdname` varchar(255) NOT NULL,
  `mdimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md`
--

INSERT INTO `md` (`id`, `mdname`, `mdimg`) VALUES
(1, 'muicccc', '432120.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ps`
--

CREATE TABLE `ps` (
  `id` int(255) NOT NULL,
  `psname` varchar(255) NOT NULL,
  `psimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ps`
--

INSERT INTO `ps` (`id`, `psname`, `psimg`) VALUES
(1, 'public', '856123.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `psec`
--

CREATE TABLE `psec` (
  `id` int(255) NOT NULL,
  `psecname` varchar(255) NOT NULL,
  `psecimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psec`
--

INSERT INTO `psec` (`id`, `psecname`, `psecimg`) VALUES
(1, 'prayer', '274467.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pspeech`
--

CREATE TABLE `pspeech` (
  `id` int(255) NOT NULL,
  `ptexts` varchar(2500) NOT NULL,
  `pimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pspeech`
--

INSERT INTO `pspeech` (`id`, `ptexts`, `pimage`) VALUES
(1, 'this is the president', 'chairman.jpg'),
(2, 'It is with great excitement and joy I welcome every Corper to Nigeria Christian Corpersâ€™ Fellowship (NCCF) Cross River State Chapter. Your being in this state is a sign that God answers prayers, we have been praying that the Lord bring you and here you ', 'chairman.jpg'),
(3, 'this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the p', 'chairman.jpg'),
(4, 'this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.this is the president.', 'chairman.jpg'),
(5, 'Hello <b><i>world!</i></b>', 'chairman.jpg'),
(6, 'thdhghdvhghdgfvdhgfdhgfdhfdhgfdhf <br /><br /> <br /><br /><br /><br />\r\nkdfhwiuhgwjwhhgwhjgwhgwkjhgwkjhfkwgbfwkmbgfwkhgkwbhwkjwkhjbwkhwkh<br /><br /><br /><br />chbqkchkcghkcghkchwjucgk', 'chairman.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` tinyint(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `regimg` varchar(255) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `stateCode` varchar(25) NOT NULL,
  `currentDate` varchar(25) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(220) NOT NULL,
  `phone` varchar(220) NOT NULL,
  `stateOfOrigin` varchar(25) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `course` varchar(200) NOT NULL,
  `salvation` varchar(255) NOT NULL,
  `christianWalk` varchar(200) NOT NULL,
  `fellowship` varchar(200) NOT NULL,
  `fellowshipPost` varchar(200) NOT NULL,
  `heaven` varchar(20) NOT NULL,
  `heavenAnswerBasis` varchar(200) NOT NULL,
  `relationshipStatus` varchar(20) NOT NULL,
  `orgMembership` varchar(200) NOT NULL,
  `tithe` varchar(20) NOT NULL,
  `titheFreq` varchar(20) NOT NULL,
  `tithePayment` varchar(20) NOT NULL,
  `hobby` varchar(200) NOT NULL,
  `denomination` varchar(200) NOT NULL,
  `serviceUnit` varchar(220) NOT NULL,
  `leadershipCall` varchar(20) NOT NULL,
  `office` varchar(250) NOT NULL,
  `baptism` varchar(200) NOT NULL,
  `waterBaptism` varchar(200) NOT NULL,
  `drivingLicense` varchar(20) NOT NULL,
  `thoughts` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `regimg`, `dob`, `stateCode`, `currentDate`, `address`, `email`, `phone`, `stateOfOrigin`, `institution`, `course`, `salvation`, `christianWalk`, `fellowship`, `fellowshipPost`, `heaven`, `heavenAnswerBasis`, `relationshipStatus`, `orgMembership`, `tithe`, `titheFreq`, `tithePayment`, `hobby`, `denomination`, `serviceUnit`, `leadershipCall`, `office`, `baptism`, `waterBaptism`, `drivingLicense`, `thoughts`) VALUES
(55, 'ofoegbu abraham', '701959.jpg', '02/07/2018', 'CR/17a/33222', '04/07/2018', '23 akiba stresst ikot ansa', 'ofuegbu.ab@gmail.com', '08169340030', 'Imo State', 'UNN UNIVERSITY', 'MECH ENGR', '14/feb/1998', 'VERY INTRESTIING', 'CASOR', 'PUBLICITY SEC', 'Yes', 'BECAUSE I SAID YES THE FIRST TIME YOU AKED', 'Single', 'ENGR CLUB', 'ITS CALL TITHE', 'Always', 'Yes', 'LOVING THE LOVE', 'IKOT', 'Music', 'No', 'YOU CAN REALLY ASK QUESTION OOO', 'YES COX I SIAD SO', 'CORRECT', 'No', 'YOU CAN REALLY ASK QUESTIONS OOOOO'),
(53, 'joelxbfdbfd', '346266.jpg', '02/07/2018', 'CR/17a/33222', '03/07/2018', 'cdvdfbndf', 'ugwumadu116@gmail.com', '334245424434', 'ABIA', 'mfnkfdfdf', 'dfdffdfgdffdf', 'dsdsdssfsfsfsfsf', 'fdfdgvdfvdxfvdf', 'fdfdfddfdfdgfdf', 'dfdggdgfdf', 'No', 'dfdgbgbdgfbdgb', 'Single', 'dfdfdgfdfdfdf', 'dfdgfgfbbgdfbgdgbdfb', 'Sometimes', 'No', 'vgonjoi', 'lbknghpokin', 'Publicity', 'Yes', 'rtyuiofdf', 'dfdfdfgfgfgd', 'dgdgdfgdgdgd', 'No', 'gdfgfdgfgfgdfg'),
(54, 'rfgthyju', '62909.jpg', '03/07/2018', 'CR/17/2737', '03/07/2018', 'cdvdfbndf', 'ugwumadu116@gmail.com', '2324324535346346', 'jdfidji', 'dsfvdfvsvdgvd', 'gfbhfghfghfghfgh', 'fgdfbgvdfgdfggdf', 'dfdfvdghfghjgfhngfh', 'fbvdgnfgnf', 'dvfbdfngfmfhf', 'No', 'fdhfjfmdrgthjf', 'Single', 'dfbfgnmgkmghmgchhh', 'hmghmghmgchmg', 'Sometimes', 'Yes', 'hmgfhmgm,j', 'ffgnjfnjfnjgh', 'Publicity', 'No', 'b cnbfvbmfvmv', 'vxcbcbcbn', 'cvdxbdcbfbg', 'Yes', 'vxbcncfnfgndg');

-- --------------------------------------------------------

--
-- Table structure for table `sis_name`
--

CREATE TABLE `sis_name` (
  `id` int(255) NOT NULL,
  `sis_name` varchar(255) NOT NULL,
  `sis_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sis_name`
--

INSERT INTO `sis_name` (`id`, `sis_name`, `sis_img`) VALUES
(1, 'siaiii', '627583.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider1`
--

CREATE TABLE `slider1` (
  `id` int(255) NOT NULL,
  `Simg` varchar(255) NOT NULL,
  `SHsmall` varchar(255) NOT NULL,
  `SHlarge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider1`
--

INSERT INTO `slider1` (`id`, `Simg`, `SHsmall`, `SHlarge`) VALUES
(1, 'slider1.png', 'cgvnc', 'vfgfg'),
(2, 'slider1.png', 'walcourt', 'wal'),
(3, 'slider1.png', 'vbmf', ' b mcvmb'),
(4, 'slider1.jpg', 'jpg', 'jpgg'),
(5, 'slider1.jpg', 'thr', 'fgr'),
(6, 'slider1.jpg', 'ifeoma', 'my lover'),
(7, 'slider1.jpg', 'think', 'thinking'),
(8, 'slider1.jpg', 'amazing', 'collection'),
(9, 'slider1.jpg', ' vdfv', 'dgdg');

-- --------------------------------------------------------

--
-- Table structure for table `slider2`
--

CREATE TABLE `slider2` (
  `id` int(255) NOT NULL,
  `Simg2` varchar(255) NOT NULL,
  `SHsmall2` varchar(255) NOT NULL,
  `SHlarge2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider2`
--

INSERT INTO `slider2` (`id`, `Simg2`, `SHsmall2`, `SHlarge2`) VALUES
(1, 'slider2.jpg', 'ife', 'ifemi'),
(2, 'slider2.jpg', 'slider2', 'amazing slider2');

-- --------------------------------------------------------

--
-- Table structure for table `slider3`
--

CREATE TABLE `slider3` (
  `id` int(255) NOT NULL,
  `Simg3` varchar(255) NOT NULL,
  `SHsmall3` varchar(255) NOT NULL,
  `SHlarge3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider3`
--

INSERT INTO `slider3` (`id`, `Simg3`, `SHsmall3`, `SHlarge3`) VALUES
(1, 'slider3.jpg', 'ifeee3', 'fei33'),
(2, 'slider3.jpg', 'ifeee3', 'fei33');

-- --------------------------------------------------------

--
-- Table structure for table `tos`
--

CREATE TABLE `tos` (
  `id` int(255) NOT NULL,
  `tosname` varchar(255) NOT NULL,
  `tosimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tos`
--

INSERT INTO `tos` (`id`, `tosname`, `tosimg`) VALUES
(1, 'tossssss', '624495.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tres`
--

CREATE TABLE `tres` (
  `id` int(255) NOT NULL,
  `tresname` varchar(255) NOT NULL,
  `tresimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tres`
--

INSERT INTO `tres` (`id`, `tresname`, `tresimg`) VALUES
(1, 'yrtrtrtrtrtrtr', '12717.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nameCOR` varchar(255) NOT NULL,
  `nameSEC` varchar(255) NOT NULL,
  `imgCOR` varchar(255) NOT NULL,
  `imgSEC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `name`, `address`, `phone`, `nameCOR`, `nameSEC`, `imgCOR`, `imgSEC`) VALUES
(4, 'AKAMKPA', '109 off Ikom Calabar Express way, Isong Iyang, Akamkpa.', '07038508608, 08138094939', 'rrgrgrg', 'gvbnfng', '903399.jpg', '729964.jpg'),
(5, 'AKPABUYO', '109 off Ikom Calabar Express way, Isong Iyang, Akamkpa. ', '07038508608, 08138094939', 'thatname', 'thename', '111170.jpg', '228493.jpg'),
(6, 'BAKASSI', 'Please call the official line for directions.', '08166107701, 08067813449', 'thatnamet', 'thatname', '270336.jpg', '297421.jpg'),
(7, 'BEKWARRA', ' Gakem Road, Opposite Godâ€™swill Intâ€˜l Nursery & Pri. Sch. Bekwera.', ' 09074739798, 08134552040', 'htth', 'ththt', '513338.jpg', '446996.jpg'),
(8, 'BOKI EAST', 'Euler Bus Stop, Near Euler Market.', '07036493488, 07069113424', 'tththth', 'thththt', '15275.jpg', '954259.jpg'),
(9, 'BOKI WEST', 'NCCF Corpersâ€™ Family House, Nfom-Osokom, Boki LGA.', '07012319270, 07062045074', 'thththt', 'ththth', '42003.jpg', '299406.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asec`
--
ALTER TABLE `asec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bsec`
--
ALTER TABLE `bsec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chairman`
--
ALTER TABLE `chairman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dd`
--
ALTER TABLE `dd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esec`
--
ALTER TABLE `esec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finsec`
--
ALTER TABLE `finsec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsec`
--
ALTER TABLE `gsec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `md`
--
ALTER TABLE `md`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ps`
--
ALTER TABLE `ps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psec`
--
ALTER TABLE `psec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pspeech`
--
ALTER TABLE `pspeech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sis_name`
--
ALTER TABLE `sis_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider1`
--
ALTER TABLE `slider1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider2`
--
ALTER TABLE `slider2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider3`
--
ALTER TABLE `slider3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tos`
--
ALTER TABLE `tos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tres`
--
ALTER TABLE `tres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asec`
--
ALTER TABLE `asec`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bsec`
--
ALTER TABLE `bsec`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chairman`
--
ALTER TABLE `chairman`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dd`
--
ALTER TABLE `dd`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `esec`
--
ALTER TABLE `esec`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `finsec`
--
ALTER TABLE `finsec`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gsec`
--
ALTER TABLE `gsec`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `md`
--
ALTER TABLE `md`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ps`
--
ALTER TABLE `ps`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `psec`
--
ALTER TABLE `psec`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pspeech`
--
ALTER TABLE `pspeech`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` tinyint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `sis_name`
--
ALTER TABLE `sis_name`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider1`
--
ALTER TABLE `slider1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider2`
--
ALTER TABLE `slider2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider3`
--
ALTER TABLE `slider3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tos`
--
ALTER TABLE `tos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tres`
--
ALTER TABLE `tres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
