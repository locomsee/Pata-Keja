CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admno` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mailid` varchar(100) NOT NULL,
  `accountnum` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=102 ;

--
-- Dumping data for table `flight_users`
--

INSERT INTO `users` (`id`,`admno`, `name`, `username`, `password`, `email`, `accountnum`, `phone`, `Gender`,`status`,`type`,`code`) VALUES
(100,'CI/00021/014', 'Ian cheboi', 'chikaia', '3050', 'iancheboi1@outlook.com', '159862135487', '0719654988', 'Male', 'active','1','hkoh6yh'),
(101, 'MT/00009/016', 'Mercy', 'jepkoech mercyjep', '1234', 'mercyjep@gmail.com', '153624589632','0720204350', 'Female','active','2','hkmh6yh');
------------------------------------------------------------------------------------------------------------------------------------


-- Table structure for table `admin`

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminusername` varchar(30) NOT NULL,
  `adminpassword` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminusername`, `adminpassword`) VALUES
(1, 'admin', 'admin');

-- ---------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `bookingdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `hostelid` varchar(30) NOT NULL,
  `transactionum` varchar(10) NOT NULL,
  `payable` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `roomnum` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `passengers` (`id`, `fname`, `lname`, `contact`,`email`, `address`, `hostelid`, `transactionum`, `payable`, `status`, `roomnum`) VALUES
(1, 'Bravo', 'kiptoo', '+254716524892','bkiptoo@gmail.com', '11124', 'H120', 'kd77mzfy', '4000', 'booked', '1'),
(2, 'olives', 'Chesang', '+254706653489','ochesang@gmail.com', '11124', 'H122', 'nidsyeyg', '4000', 'Cancelled', '2'),
(3, 'Leandra', 'chepkoech', '+254720204350','lchepkoech@gmail.com', '11124', 'H124', 'v53zohwk', '3000', 'booked', '3'),
(4, 'lewis', 'kiplangat', '+254722242009', 'lkiplangat@gmail.com','11124', 'H128', 's4xf7qkq', '4000', 'booked', '4'),
(5, 'levynne', 'chelimo', '+254716524892', 'lchelimo@gmail.com','k258', 'H123', 'fhk7qarc', '1600', 'Cancelled', '5');

--------------------------------------------------------------------------------------------------------------------------------
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `hostels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostelid` varchar(300) NOT NULL,
  `hostelname` varchar(300) NOT NULL,
  `address` varchar(30) NOT NULL,
  `numrooms` int(30) NOT NULL,
  `phonenum` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=13 ;

--
-- Dumping data for table `route`
--

INSERT INTO `hostels` (`id`, `hostelID`,`hostelname`,`address`, `numrooms`, `phonenum`, `city`, `type`, `description`, `price`) VALUES
(1, 'H120','kilimanjaro','456825 maseno',  '25', '+254719555565', 'maseno','1 bedroom','good','9000'),
(2, 'H122','tsunami','56468 maseno',  '95', '+254700555888', 'maseno','2 bedroom','fair','6000'),
(3, 'H124','elgon','546463 maseno',  '54', '+254788666333', 'maseno','2 bedroom','excellent','5000'),
(4, 'H123','equator','182258 maseno',  '45', '+254752474747', 'maseno','1 bedroom','good','10000'),
(5, 'H128','newmac','252566 maseno',  '456', '+254763214214', 'maseno','1 bedroom','fair','5000');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostelid` varchar(11) NOT NULL,
  `roomreserve` varchar(11) NOT NULL,
  `transactionnum` varchar(10) NOT NULL,
  `room` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `hostelid`, `roomreserve`, `transactionnum`, `room`) VALUES
(1, 'H120', '2', 'o8ey8p40', '1,2'),
(2, 'H122', '1', 'kd77mzfy', '1'),
(3, 'H124', '2', 'nidsyeyg', '1,2'),
(4, 'H123', '1', 'v53zohwk', '1'),
(6, 'H128', '1', 'fhk7qarc', '1');

-- --------------------------------------------------------

-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(16) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Allan kiptalam', 'kiptalam@gmail.com', 'service to passengers','I some of the airhostess does not serve some customers to their satisfaction'),
(2, 'lewis kiplangat', 'lewiskip@gmail.com','comfortability', 'some seats on the airplane are not comfortabile some seamed to have torned');

---------------------------------------------------------------------
-- Table structure for table `card_details`
--

CREATE TABLE IF NOT EXISTS `account_details` (
  `acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_name` varchar(50) NOT NULL,
  `accountnum` varchar(16) NOT NULL,
  `acc_balance` int(8) NOT NULL,
  `acc_username` varchar(50) NOT NULL,
  `acc_password` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
)AUTO_INCREMENT=85852 ;

--
-- Dumping data for table `card_details`
--

INSERT INTO `account_details` (`acc_id`, `acc_name`, `accountnum`, `acc_balance`, `acc_username`, `acc_password`) VALUES
(85850, 'Ian cheboi', '159862135487', 100000, 'chikaia', '3050'),
(85851, 'mercy jepkoech', '153624589632', 50000, 'mercyjep', '1234');

-- --------------------------------------------------------
-- Table structure for table `retrieve`
--

CREATE TABLE IF NOT EXISTS `retrieve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `code` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=13 ;

--
-- Dumping data for table `retrieve`
--

INSERT INTO `retrieve` (`id`, `email`, `code`) VALUES
(1, 'allankiptalam@gmail.com', 'lvxrxkt4');
-- --------------------------------------------------------

--
