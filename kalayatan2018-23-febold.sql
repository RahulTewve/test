-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2018 at 12:54 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kalayatan2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `vuoto_districts`
--

CREATE TABLE IF NOT EXISTS `vuoto_districts` (
  `distid` int(11) NOT NULL AUTO_INCREMENT,
  `distname` varchar(255) DEFAULT NULL,
  `stateid` int(11) DEFAULT NULL,
  PRIMARY KEY (`distid`),
  KEY `stateid` (`stateid`),
  KEY `stateid_2` (`stateid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `vuoto_districts`
--

INSERT INTO `vuoto_districts` (`distid`, `distname`, `stateid`) VALUES
(1, 'Palghar', 1),
(2, 'Pune', 1),
(3, 'Vadodara', 2),
(4, 'Ahmednagar', 1),
(5, 'Jalgaon', 1),
(6, 'Dhule', 1),
(7, 'Aurangabad', 1),
(8, 'Nagpur', 1),
(9, 'Ahmedabad', 2),
(10, 'Vapi', 2),
(11, 'Nashik', 1),
(12, 'Mumbai', 1),
(13, 'Thane', 1),
(14, 'Rajkot', 2),
(15, 'Surendranagar\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vuoto_states`
--

CREATE TABLE IF NOT EXISTS `vuoto_states` (
  `stateid` int(11) NOT NULL AUTO_INCREMENT,
  `statename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`stateid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vuoto_states`
--

INSERT INTO `vuoto_states` (`stateid`, `statename`) VALUES
(1, 'Maharashtra'),
(2, 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `vuoto_stations`
--

CREATE TABLE IF NOT EXISTS `vuoto_stations` (
  `stnid` int(11) NOT NULL AUTO_INCREMENT,
  `stnname` varchar(255) DEFAULT NULL,
  `stnaddress` varchar(255) DEFAULT NULL,
  `Address1` text NOT NULL,
  `Address2` text NOT NULL,
  `State` text NOT NULL,
  `Pincode` text NOT NULL,
  `phone1` varchar(25) DEFAULT NULL,
  `phone2` varchar(25) DEFAULT NULL,
  `gmaploc` varchar(500) NOT NULL,
  `distid` int(11) DEFAULT NULL,
  PRIMARY KEY (`stnid`),
  KEY `distid` (`distid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `vuoto_stations`
--

INSERT INTO `vuoto_stations` (`stnid`, `stnname`, `stnaddress`, `Address1`, `Address2`, `State`, `Pincode`, `phone1`, `phone2`, `gmaploc`, `distid`) VALUES
(1, 'Tarapur (Boisar)\r\n', '<br> Building No.6,<br> Shop No.12 Mahavir Chamber,<br> Navapur Road,<br> Boisar - 40150', 'Kosma Road Line', ' Building No.6, Navapur Road,', 'Boisar', '40150', '09225106231', '09049993200/1', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d481595.2202663756!2d72.53615192288423!3d19.435609545749752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s+Navapur+Road%2C+Boisar+-+40150.+!5e0!3m2!1sen!2sin!4v1462439206815', 1),
(2, 'Pune (City)', 'Mr. Vikas Salunke <br>\nShop no. 1,<br> Bhupati Complex, 985,<br> Sadashiv Peth,<br> Opp. Dnyanprabhodini, <br>Pune-411030.', 'Mr. Vikas Salunke', 'Shop No.1, Bhupati Complex, 985, Sadashiv Peth, Opp. Dnyanprabhodini', 'Pune', '411030', '020-24472780', '020-66020393', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.3788883072075!2d73.84411081429874!3d18.511772674276056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!\n\n4f13.1!3m3!1m2!1s0x3bc2c0769fce36c9%3A0x7427f4b59a3c95f8!2sBhupati+Complex%2C+Jnana+Prabodhini+Rd%2C+Perugate%2C+Sadashiv+Peth%2C+Pune%2C+Maharashtra+411030!5e0!3m2!\n\n1sen!2sin!4v1444371076679', 2),
(3, 'Vadodara', 'Mr. Mukesh Khedar / Mr. Yogendra Sharma \nShop No.10, Devine Avenue, Opp. Voltamp Company, Maneja, Vadodara-391110.', 'Mr. Mukesh Khedar / Mr. Yogendra Sharma ', 'Shop No.10, Devine Avenue, Opp. Voltamp Company, Maneja', 'Vadodara', '390013', '09033430047', '09016639762', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.2729987708603!2d73.18896521436035!3d22.267646249707834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc5db01b4acab%3A0x9444fa7ec174cb69!2sGIDC+Rd%2C+Vadodara%2C+Gujarat!5e0!3m2!1sen!2sin!4v1444405878210', 3),
(4, 'Pune (Chakan)	', 'Mr. Ganesh Shinde\nGat No. 103, Near Essar Steel Company, Near Goods India Carrier, Chimbali Phata, Chakan, Pune-410501.', 'Mr. Ganesh Shinde', 'Gate No.103, Near Essar Steel Company, Behind Goods India Carrier, Chimbali Phata, Chakan', 'Pune', '410501', '020-65324141', '020-65334141', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d60458.54440478333!\n\n2d73.8167214233115!3d18.724077736318275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!\n\n1sen!2sin!4v1444406959613', 2),
(5, 'Pune (Wagholi)', 'Mr. Vinod Salunke\nOm Sai Dutta, Gat No. 3783, Sai Satyam Park, Behind SBI Bank, Pune-Nagar Road,\nWagholi, Pune-412207.', 'Mr. Vinod Salunke', 'Om Sai Dutta, Gate No.3783, Sai Satyam Park, Behind SBI Bank, Pune-Nagar Road,\nWagholi', 'Pune', '412207', '020-46705085', '09146013975', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.9725981834085!2d73.95861311429967!3d18.575274072348307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x8b5c82639054bfa7!2sSai+Satyam+Park!5e0!3m2!1sen!2sin!4v1444407198334', 2),
(6, 'Pune (PCMC)', 'Mr. Avinash Gaikwad\nAjmera Road, Vastu Udyog Zero Boys Chowk, Ashirwad Building, Shop No-1 Pimpri.\npcmc@kalayatancargo.com', 'Mr. Avinash Gaikwad', 'Ajmera Road, Vastu Udyaog Zero Boy''s Chowk, Ashirwad Building, Shop No.1 Pimpari', 'Pune', '', '020-65304141', '09225109215', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.5802098495906!2d73.82279131430059!3d18.637942070439784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b86c0d56c2af%3A0xd609576404031b13!2sGavali+Matha%2C+MIDC%2C+Bhosari%2C+Pimpri-Chinchwad%2C+Maharashtra+411026!5e0!3m2!1sen!2sin!4v1444407414512', 2),
(7, 'Pune(Fursungi)', 'Mr. Vinod Salunke / Mr. Rajendra Jadhav.\nUruli Devachi,Near Police Station,Pune-Saswad Road,Tal-Haveli,Dist-Pune-412308', 'Mr. Vinod Salunke /  Mr. Rajendra Jadhav', 'Uruli Devachi,Near Police Station,Pune-Saswad Road,Taluka-Haweli', 'Pune', '412308', ' 09146013975', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15138.70323163293!2d73.94831132565245!3d18.453023049172284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2e998dc90bb1f%3A0xba4395fcdbd8fcde!2sUruli+Devachi%2C+Pune%2C+Maharashtra+412308!5e0!3m2!1sen!2sin!4v1459749582843', 2),
(8, 'Ahmednagar', 'Mr. Vishal Jagdhane\nP-152/3, Opp. L&T Gate No.3, Near Bank of Baroda, MIDC, Ahmednagar.', 'Mr. Vishal Jagdhane', 'Plot No-152/3, Opp. L&T Gate No.1, Near Bank of Baroda, MIDC', 'Ahmednagar', '', '0241-6619738', '9225109219', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.019797733629!2d74.69264956617592!3d19.150610662003093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcba2c00000001%3A0xbae3761e66b427c4!2sBank+Of+Baroda!5e0!3m2!1sen!2sin!4v1444408282057', 4),
(10, 'Kopargaon', 'Mr. Chetan Rajpal\nRajpal Transport Company, Near Muk\nBhadir Vidyamandir, Nagar Manmad Road, Kopergaon', ' 	Mr. Chetan Rajpal', 'Rajpal Transport Company, Near Muk\nBhadir Vidyamandir, Nagar Manmad Road', 'Kopargaon', '', ' 9822188808', '9637222637', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30014.053025392517!2d74.46666834228516!3d19.89249594396695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc44f157804117%3A0xc4f3b95c6deb52b4!2sKopargaon%2C+Maharashtra%2C+India!5e0!3m2!1sen!2sin!4v1482924935244', 4),
(11, 'Jalgaon', 'Mr. Omprakash\nC-13, Lunkad Plastic, Near BPL Tower, MIDC,Jalgaon-425003', 'Mr. Omprakash', 'C-13, Lunkad Plastic, Near BPL Towers, MIDC', 'Jalgaon', '425003', '09370669496', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2102641934684!2d75.59243031473066!3d20.984206986022517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd90ee900000021%3A0x5178710af2cea062!2sInland+World+Logistics!5e0!3m2!1sen!2sin!4v1459698954049', 5),
(12, 'Dhule', 'Mr. Ravindra Patil / Mr. Mahendra Patil\nJay Shankar Colony, Mohadi Upnagar, Dhule, Tal-Dist- Dhule 424311.', 'Mr. Ravindra Patil / Mr. Mahendra Patil', 'Jay Shankar Colony, Mohadi Upnagar', 'Dhule', '424311', '09764632607 ', '09545487077', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3752.3367981454603!2d75.33975831431944!3d19.867995431763408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sJay+Shankar+Colony%2C+Mohadi+Upnagar%2C+Dhule+424311.+!5e0!3m2!1sen!2sin!4v1462439784779', 6),
(13, 'Aurangabad (Waluj)', 'Mr. Damodar Sakpal\nPlot.No. X-151,Akar Tool Chowk, Nr.Digambar Provisions, Indraprastha Colony, Bajaj Nagar,Aurangabad.', 'Mr. Damodar Sakpal', 'Plot.No. X-151, Indraprasth Colony, Bajaj Nagar, MIDC Walunj', 'Aurangabad', '431136', '0240-6506255', '09225106246', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.1010573156736!2d75.28949971431892!3d19.835676532809142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb991faa7d7e11%3A0x890f1d200b506bfb!2sAkar+Tools+Limited!5e0!3m2!1sen!2sin!4v1459698553333', 7),
(14, 'Nagpur', 'Mr. Ramji Dubey\nGolden India Road Line,Behind A.V.M.School,C.A.Road,Gandhi Baug,Nagpur-400032(M.S)', 'Mr. Ramji Dubey', 'Om Sai Transport, Near Om Sai Restaurant, Control Bypass Road, Waadi', 'Nagpur', '', '09029934551', '09373102447', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.759808031992!2d79.07894041473388!3d21.161954985926386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c09462281039%3A0x921892bad70a107f!2sNagpur+Info!5e0!3m2!1sen!2sin!4v1459699851897', 8),
(15, 'Ahmedabad', 'Opp. Aslali Police Station, Near Jay Carrying Corporation, Aslali, Ahmedabad - 382427.', 'Opp. Aslali Police Station, ', 'Near Jay Carrying Corporation, Aslali,', ' Ahmedabad ', '382427', '09898313127', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d58799.6486354817!\n\n2d72.55886519165098!3d22.91418082139286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!\n\n4m0!4m5!1s0x395e8ec36d56309d%3A0x3a51a31ea40dfcd7!2sAslali%2C+Ahmedabad%2C+Gujarat!3m2!\n\n1d22.9141056!2d72.59388489999999!5e0!3m2!1sen!2sin!4v1444411184836', 9),
(16, 'Vapi', 'Mr. Anil Kumar\nGujarat Steel Company, Near Seema Weight Bridge, Opp. Creative Textile, GIDC, Phase II, Vapi-396191.', 'Mr. Anil Kumar', 'Gala No.8, Sainath Complex, Phase 2, Opposite Mamta Kata, GIDC', 'Vapi', '', '09662821770', '09225106249', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59847.35092447158!\n\n2d72.8947958799754!3d20.363938476802385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!\n\n4m0!4m5!1s0x3be0ce4440000001%3A0xee0b14edccf65c33!2sCreative+Textile+Mill%2C+Phase+2%2C\n\n+GIDC%2C+Vapi%2C+Gujarat+396191!3m2!1d20.3638615!2d72.9298156!5e0!3m2!1sen!2sin!\n\n4v1444411285318', 10),
(17, 'Nashik (Head Office)\r\n', 'Mr. Pushkar Kale (Admin manager)\nMargaret Tower, Canada Corner, Nashik-422007.', 'Mr. Pushkar Kale (Admin manager)', 'Margaret Towers, Canada Corner', 'Nashik', '422007', ' 0253-2572841/51/61', '09225106260', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59986.90248228921!2d73.7346915784429!3d20.000899716108442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x3bddeb9fbfc199ff%3A0x5cc9a806492e334!2sMargaret+Tower%2C+Sharanpur%2C+Nashik%2C+Maharashtra+422005!3m2!1d20.000822499999998!2d73.7697113!5e0!3m2!1sen!2sin!4v1444411377474', 11),
(18, 'Nashik (Satpur)', 'Mr. Umesh Khandelwal / Mr. Sontakke\nPlot no. 64A, Opp. MICO, Near Indian Tool, MIDC, Satpur, Nashik-422002.', 'Mr. Umesh Khandelwal / Mr. Sontakke', 'Plot no. 64A, Opp. Mico, Near Indian Tool, MIDC, Satpur', 'Nashik', '422002', '0253-2360541/51', '09225106240', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59987.4666188789!\n\n2d73.70393987843671!3d19.999419317078807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!\n\n4m0!4m5!1s0x3bddec7d00000001%3A0xce33881aab3f616e!2sIndian+Tool+Manufacturers%2C+Plot+No-\n\n62+%26+63+M+I+D+C%2C+Industrial+Area%2C+Satpur%2C+Satpur%2C+Nashik%2C+Maharashtra+422007!\n\n3m2!1d19.9993421!2d73.7389596!5e0!3m2!1sen!2sin!4v1444411469783', 11),
(19, 'Nashik (Dwarka)', 'Mr. Prashant Bhawar / Mr. Sontakke\nBankar Chowk, Kathe Galli, Dwarka, Nashik - 422002.', 'Mr. Prashant Bhawar / Mr. Sanjay Rakshe', 'Bankar Chowk, Kathe Galli, Dwarka', 'Nashik', '422002', '09765228388', '09225106257', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.4361252394856!2d73.80065921432143!3d19.990202427794962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeafcab70f787%3A0x4b64b0a9a9942062!2sBankar+Chowk%2C+dwarka!5e0!3m2!1sen!2sin!4v1462438559669\n', 11),
(20, 'Nashik (Sinnar)\r\n', 'Mr. Baban Magar\nOpp.Jindal Saw Ltd, Malegaon MIDC, Sinner, Nashik.', 'Mr. Baban Magar', 'Opp.Jindal Saw Ltd, Malegaon, MIDC Sinner', 'Nashik', '', ' 09225106231', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120035.09284459344!2d73.82439439839568!3d19.920331534414565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x09499cef17718d78!2sJindal+Saw+Limited!5e0!3m2!1sen!2sin!4v1462438834614', 11),
(21, 'Malegaon', 'Sai Samruddhi Roadways, Behind Jeevan Hosp.Compound, Manmad Road,Malegoan-423203.', 'Mr. Sachin A. Dangse', 'Sai Samruddhi Roadways, , Behind Jeevan Hosp.Compound, Manmad Road', 'Malegoan', '423203', '08975924197', '09028182606', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29945.0651386183!2d74.42208381491442!3d20.25331223109004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0d0cf001ea68601e!2sRailway+Station+Taxi+Stand!5e0!3m2!1sen!2sin!4v1459749914137', 11),
(22, 'Yeola', 'Mr. Sameer Shaikh / Mr. Jameer Shaikh Near Bada Kabristan, Barambh Road, Yeola', 'Mr. Sameer Shaikh / Mr. Jameer Shaikh', 'Near Bada Kabristan, Barambh Road', 'Yeola', '', '09527242318', '08087110008', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29985.438846308098!2d74.46455929247446!3d20.042907938581457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc38c7b8e87a6f%3A0x14012fc485b23564!2sYeola%2C+Maharashtra+423401%2C+India!5e0!3m2!1sen!2sin!4v1482923353918', 11),
(23, 'Mumbai (Masjid Bunder)', 'Mr. Manish Khandelwal / Mr. Pratik Mhaske\nMul Ratna Building, 334, Narsi Natha Street, Masjid (West), Mumbai-400003', 'Mr. Manish Khandelwal / Mr. Pratik Mhaske', '334, Narsi Natha Street, Gr Floor, Mulratan Building, Masjid', 'Mumbai', '', '022-23426100/200', '09225106254', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60376.46511211886!2d72.80232207419878!3d18.95222789222665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x3be7ce250655d3cf%3A0x69400edbfe235443!2sKalayatan+Cargo%2C+Mul+Ratna+Building%2C+334%2C+Masjid%2C+Narsee+Natha+Street%2C+Vadgadi%2C+Masjid+Bandar+West%2C+Masjid+Bandar%2C+Mumbai%2C+Maharashtra+400003!3m2!1d18.95215!2d72.83734179999999!5e0!3m2!1sen!2sin!4v1444412183574', 12),
(24, 'Mumbai (Opera House)', 'Mr. Anis Ahmed\nDo Hathi Gall, Behind Imperial Talkies, Opera House, Mumbai-400004', 'Mr. Anis Ahmed', 'Do Hathi Gall, Behind Imperial Talkies, Lamington Road', 'Mumbai', '400004', '09320558851', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60375.89183244203!\n\n2d72.78329367420505!3d18.953812091222357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!\n\n4m0!4m5!1s0x3be7ce0e329a26b9%3A0xa08d061e0e5d9f19!2sOpera+House%2C+Girgaon%2C+Mumbai%2C\n\n+Maharashtra!3m2!1d18.9537342!2d72.8183134!5e0!3m2!1sen!2sin!4v1444412297372', 12),
(25, 'Mumbai (Grant Road)', 'Mr. A.K Shukla\n8, Vipun Building, Jamshedji Parin Street, Grant Road(E), Mumbai-400007', 'Mr. A.K Shukla', '8, Vipun Building, Jamshedji Parin Street, Grant Road(E)', 'Mumbai', '400007', '09167621008', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60372.7727257085!2d72.78329367423879!3d18.962429185758644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x3be7ce12e3824031%3A0x1ede8d0a9307952d!2sGrant+Road+East%2C+Bharat+Nagar%2C+Grant+Rd%2C+Mumbai%2C+Maharashtra!3m2!1d18.962351299999998!2d72.8183134!5e0!3m2!1sen!2sin!4v1444412409615', 12),
(26, 'Mumbai (Andheri)', 'Mr. Manoj Patel / Mr. Sundaram / Mr. Durgesh Yadav\nGala No.1, Building No.16, A Wing, \nSamhita Complex, Off Andheri Kurla Road, \nNear Saki Naka Telephone Exchange, \nAndheri East, Mumbai 400072', 'Mr. Manoj Patel / Mr. Sundaram / Mr. Durgesh Yadav', 'Building No.16, Gala No.1, Samitha Complex, Near Sakinaka Telephone Exchange, Sakinaka, Andheri East', 'Mumbai', '400072', '022-28506258/59', '022-67080847', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1885.081233192966!2d72.87872045800336!3d19.10052729676848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c87287a9bfb9%3A0xcbb8f1ed4851ca00!2sSharepro+Services+India+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1459703600305', 12),
(27, 'Mumbai (Goregaon)', '\nMr. Ganesh Bangera\nShop No. 46G, Near Ashok Nagar, Western Extress Highway, Service Road, Goregaon (East), Mumbai-400063.', '\nMr. Ganesh Bangera', 'Nityanand Transport Service,\nSonawala Road,\nOpp Cello Building,\nGoregaon East', 'Mumbai', '', '09867546399', '', 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d60309.33714202766!\n\n2d72.82288977492632!3d19.136870474822928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e1!\n\n4m3!3m2!1d19.0967697!2d72.8354568!4m5!1s0x3be7b7d409d3e60d%3A0xb4d813398f64e400!2sMumbai\n\n%2C+Maharashtra+400060!3m2!1d19.1367927!2d72.85790949999999!5e0!3m2!1sen!2sin!\n\n4v1444412883787', 12),
(29, 'Mumbai (Mulund)\r\n', '\nMr. Ravi Tribhuvan\nShop No. 10, Shagun Marraige Hall,\nOpp. Johnson & Johnson, Near Meghal Industrial Estate, Mulund (West), Mumbai-400080.', 'Mr. Ravi Tribhuvan', 'Shop No. 10, Shagun Marraige Hall, \nOpp. Johnson & Johnson, Near Meghal Industrial Estate, Mulund (West)', 'Mumbai', '400080', '09821744357 ', '09969929753', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7536.823989251418!\n\n2d72.94408517234568!3d19.177199481611265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!\n\n1s0x0000000000000000%3A0x38b1a0f55d4b4697!2sJohnson+%26+Johnson+Company!5e0!3m2!1sen!2sin!\n\n4v1444413109453', 12),
(30, 'Bhiwandi', 'Mr. Omkar Panday / Mr. Rahul Mishra\nGala No J-3, Muni Suvrat Complex, Rahnal Village, Rahnal, Bhiwandi-421302.', 'Mr. Omkar Pandey / Mr. Rahul Mishra', 'Gala No. J-3, Muni Suvrat Complex, Rahnal Village, Rahnal', 'Bhiwandi', '421302', '02522-656253', '\n9225106253 / 8888422881', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15065.08889741288!\n\n2d73.01944266961817!3d19.270524447157054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!\n\n1s0x3be7bc45680cee21%3A0x2e2a02d894703d00!2sRahanal%2C+Bhiwandi%2C+Maharashtra+421302!5e0!\n\n3m2!1sen!2sin!4v1444413276792', 13),
(31, 'Vashi', 'Mr. Hrushikesh Shinde / Mr. Swapnil Sonawane\nSai Dhara Apartment, Shop No. 4, Plot No. 14, Sector 30, Vashi, Opp. Sanpada Railway Station, Navi Mumbai - 400705.', 'Mr. Hrushikesh Shinde / Mr. Swapnil Sonawane', 'Shop No. 4, Plot No. 14, Sai Dhara Apartment, Sector - 30, Opp. Sanpada Station, Navi Mumbai', 'Vashi', '400705', '09699929546 ', '09225106232', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.9280894251165!2d73.00919131406539!3d19.066899057215178!2m3!1f0!2f0!3f0!3m2!\n\n1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1438f4d5201%3A0xc4a2f21e39466247!2sKalayatan+Cargo!5e0!3m2!1sen!2sin!4v1449828213143', 13),
(32, 'Vasai', 'Mr. Vinay Mishra / Mr. Vikas Pandey\nGala No 16, Shreeji Ind.Estate, Opp N.J. Industrial Estate, Chinchpada Naka, Waliv Main Road, Vasai (East) 401208 ', 'Mr. Vinay Mishra / Mr. Vikas Pandey', 'Gala No. 16, Shreeji Industrial Estate, Opp. NJ Estate, Main Waliv Road', 'Vasai (East)', '401208', '07666604647', '09225209333 / 09225106233', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.135890919923!2d72.86519321470301!3d19.406533686899124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a8cd3b68ff9b%3A0x1962e9ebf750765e!2sWaliv+Phata+Bus+Stop!5e0!3m2!1sen!2sin!4v14596993863', 1),
(33, 'Palghar', 'Saibaba Transport Service Miri Piri Apts, Char Rasta, Palghar - 401404.', 'Saibaba Transport Service', 'Miri Piri Apts, Char Rasta', 'Palghar ', '401404', ' 09225106249', NULL, 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d960277.335130686!2d73.33392186428864!3d19.92089256515925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sChar+Rasta%2C+Palghar+-+401404.+!5e0!3m2!1sen!2sin!4v1462439025173', 1),
(34, 'Rajkot (Bhaktinagar)', 'Mr. Mayursinh Chudasama / Mr. Ashit Kansara\nSheri No.13, Manhar Plot, Bhaktinagar,\nRajkot', 'Mr. Mayursinh Chudasama / Mr. Ashit Kansara', 'Sheri No. 13, Manhar Plot, Bhaktinagar', 'Rajkot', '', '0281-2466237', '07041601891', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7383.446553766638!2d70.79158957276464!3d22.288469891318723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca111e975f81%3A0x75c5b183746adadc!2sManhar+Plot%2C+Bhakti+Nagar%2C+Rajkot%2C+Gujarat%2C+India!5e0!3m2!1sen!2sin!4v1482928132528', 14),
(35, 'Rajkot (Kuwadava)', 'Mr. Mayursinh Chudasama / Mr. Ashit Kansara\n6, Lati Plot, Kuwadava, Rajkot', 'Mr. Mayursinh Chudasama / Mr. Ashit Kansara', '6, Lati Plot, Kuwadava', 'Rajkot', '', '07041601892', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7379.593841156821!2d70.95006981619723!3d22.361295640896653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b1049f95be75%3A0x943dc6393c57e185!2sKuvadva%2C+Gujarat+360023%2C+India!5e0!3m2!1sen!2sin!4v1482927774121', 14),
(36, 'Rajkot (Navagam)', 'Mr. Mayursinh Chudasama / Mr. Ashit Kansara\nDam Road, Navagam, Rajkot', 'Mr. Mayursinh Chudasama / Mr. Ashit Kansara', 'Dam Road, Navagam', 'Rajkot', '', '0281-2702090', '07041601893', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29529.06169931496!2d70.82748024549313!3d22.310820110340295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b6730973a7b5%3A0x3f14671a7d342cc9!2sNavagam%2C+Rajkot%2C+Gujarat+360003%2C+India!5e0!3m2!1sen!2sin!4v1482928313719', 14),
(37, 'Surendranagar', 'Mr. Kalpesh Sheth\nTrolly Station, College Road,\nSurendranagar', 'Mr. Kalpesh Sheth', 'Trolly Station, College Road', 'Surendranagar', '', '02752-221791', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.315637590984!2d71.79968591441946!3d22.567295185185515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395930f9118dae0b%3A0x450d602983cde174!2sCollege+Rd%2C+Krishna+Nagar%2C+Limbdi%2C+Gujarat+363421%2C+India!5e0!3m2!1sen!2sin!4v1482927351275', 15),
(38, 'Ahmedabad (Aslali)', 'Mr. Naresh Patel\nShraddha Estaste, Nr. Ganesh Warehouse,\nNr. Aslali Police Station, Aslali, Ta.Daskroi', 'Mr. Naresh Patel', 'Shraddha Estaste, Nr. Ganesh Warehouse,\nNr. Aslali Police Station, Aslali, Ta.Daskroi', 'Ahmedabad', '', '02718-262847', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29399.03185918108!2d72.5894353513914!3d22.917834084888593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8eddcd71a9db%3A0x6c0cd97503ab20b8!2sAslali+Police+Station!5e0!3m2!1sen!2sin!4v1482926520161', 9),
(39, 'Ahmedabad (Narol)', '\nMr. Tarang Patel\nTransport Nagar, Narol Char Rasta, Narol,\nAhmedabad', 'Mr. Tarang Patel', 'Transport Nagar, Narol Char Rasta, Narol', 'Ahmedabad', '', '079-25732160', NULL, 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3673.3756385730503!2d72.58594551442845!3d22.973210384978085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sTransport+Nagar%2C+Narol+Char+Rasta%2C+Narol%2C+Ahmedabad!5e0!3m2!1sen!2sin!4v1482925946228', 9),
(40, 'Ahmedabad (Sarangpur)', 'Mr. Zalak Patel\nBeh. Hotel Meghdoot, Nr. Karnmukteshwar\nMahadev, Sarangpur, Ahmedabad-2', 'Mr. Zalak Patel', 'Beh. Hotel Meghdoot, Nr. Karnmukteshwar\nMahadev, Sarangpur, Ahmedabad-2', 'Ahmedabad', '', '09978601518', '09978601519', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.063679480615!2d72.5973103144295!3d23.021433984953617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e843310c818e3%3A0x8ae25beb07332165!2sMeghdoot+Hotel!5e0!3m2!1sen!2sin!4v1482925675911', 9),
(41, 'Ahmedabad (Sarkhej)', 'Mr. Satish Patel / Mr. Nikhil Daraji\nOpp. Jaipur Golden Transport, Sarkhej\nGandhinagar Highway, Sarkhej', 'Mr. Satish Patel / Mr. Nikhil Daraji', '\nOpp. Jaipur Golden Transport, Sarkhej\nGandhinagar Highway, Sarkhej', 'Ahmedabad', '382427', '079-26890914', NULL, 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58776.87941841839!2d72.52110935598188!3d22.96661150508405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOpp.+Jaipur+Golden+Transport%2C+Sarkhej+Gandhinagar+Highway%2C+Sarkhej!5e0!3m2!1sen!2sin!4v1482926190323', 9),
(44, 'Jalgaon(City)', 'CTS No 2345,Baliram Peth,Near Bagai Golden Transport,Jalgoan', 'CTS No 2345,Baliram Peth', 'Near Bagai Golden Transport', 'Jalgoan', '', '09373677111', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3785432882987!2d75.56645921473131!3d21.017534336004328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd90fa3cb6c529d%3A0x2b73304c7a33c78b!2sBaliram+Peth%2C+Jalgaon%2C+Maharashtra+425001!5e0!3m2!1sen!2sin!4v1459704000026', 5),
(45, 'Andheri (Sales Office)', 'Mr. Abishek Panchal / Mr. Parag karambele\nB-329 Pranik Chambers, Saki Vihar Road,\nSakinaka, Andheri(E), Mumbai-400072', 'Mr. Abhishek Panchal / Mr. Parag Karambele', 'B-32, Pranik Chambers, Saki Vihar Road,\nSakinaka, Andheri(E)', 'Mumbai', '400072', '022-28575862/61', '08956655252', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471.25623760168503!2d72.88716062149028!3d19.10546667687563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89fe7a2e6ce1acc7!2sPranik+Chambers!5e0!3m2!1sen!2sin!4v1482920252145', 12),
(46, 'Kaman (vasai)', 'Mr. Manoj Jaiswal\nSagpada, Near Flora Hotel,\nOpp Hindushtan Kata, Chinchoti Bhiwandi\nRoad, Kaman, Vasai Dist Thane.', 'Mr. Manoj Jaiswal', 'Sagpada, Near Flora Hotel,\nOpp. Hindushtan Kata, Chinchoti Bhiwandi\nRoad, Vasai Dist Thane', 'Kaman', '', ' 09657958492', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60217.95630218636!2d72.88792528677963!3d19.385501699094874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a5be2cdb5f51%3A0x6d0f87ac4b082954!2sKaman%2C+Maharashtra%2C+India!5e0!3m2!1sen!2sin!4v1482928979566', 13);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vuoto_districts`
--
ALTER TABLE `vuoto_districts`
  ADD CONSTRAINT `vuoto_districts_ibfk_1` FOREIGN KEY (`stateid`) REFERENCES `vuoto_states` (`stateid`);

--
-- Constraints for table `vuoto_stations`
--
ALTER TABLE `vuoto_stations`
  ADD CONSTRAINT `vuoto_stations_ibfk_1` FOREIGN KEY (`distid`) REFERENCES `vuoto_districts` (`distid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
