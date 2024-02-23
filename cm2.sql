--
-- Database: `cm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`

CREATE TABLE `account` (
  `accountid` int(11) NOT NULL,
  `username` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `position` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountid`, `username`, `password`, `position`) VALUES
(98, 'yosef', '13407', 'manager'),
(15, 'hana', '1234', 'supervisor'),
(67, 'abebe', '1234', 'techenician');



CREATE TABLE `report` (
  `Region` varchar(50) NOT NULL,
  `SiteEquipID` varchar(50) NOT NULL,
  `Vendor` varchar(50) NOT NULL,
  `Rootcause` varchar(50) NOT NULL,
  `SpecificProblem` varchar(50) NOT NULL,
  `Occurrence` varchar(50) NOT NULL,
  `Solved` varchar(50) NOT NULL,
  `Responsibleperson` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE IF NOT EXISTS `comment` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



ALTER TABLE `account`
  ADD PRIMARY KEY (`accountid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`SiteEquipID`);








