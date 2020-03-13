-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2017 at 03:26 PM
-- Server version: 5.6.34-79.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kalayatan`
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
  KEY `stateid` (`stateid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
(13, 'Thane', 1);

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
  `phone1` varchar(25) DEFAULT NULL,
  `phone2` varchar(25) DEFAULT NULL,
  `gmaploc` varchar(500) NOT NULL,
  `distid` int(11) DEFAULT NULL,
  PRIMARY KEY (`stnid`),
  KEY `distid` (`distid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `vuoto_stations`
--

INSERT INTO `vuoto_stations` (`stnid`, `stnname`, `stnaddress`, `phone1`, `phone2`, `gmaploc`, `distid`) VALUES
(1, 'Tarapur (Boisar)\r\n', 'J-38, MIDC. Tarapur Industrial Area, Boisar (West)-401501.', '08390906551', '09049993200/1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30032.330677232854!2d72.71966958935663!3d19.795844727178682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be71e4626982411%3A0x8937cca57f50b9d1!2sTarapur+M.I.D.C.%2C+Boisar%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1444370307927', 1),
(2, 'Pune', 'Shop no. 1, Bhupati Complex, 985, Sadashiv Peth, Opp. Dyanprabhodini, Pune-411030.', '020-24472780 ', '020-66020393', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.3788883072075!2d73.84411081429874!3d18.511772674276056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!\n\n4f13.1!3m3!1m2!1s0x3bc2c0769fce36c9%3A0x7427f4b59a3c95f8!2sBhupati+Complex%2C+Jnana+Prabodhini+Rd%2C+Perugate%2C+Sadashiv+Peth%2C+Pune%2C+Maharashtra+411030!5e0!3m2!\n\n1sen!2sin!4v1444371076679', 2),
(3, 'Vadodara', '22, Mohan Giri Krupa, Opp Uma Co-Op Bank, Near Jupiter Chowkdi, Vadsar Main Road, GIDC, Makarpura, Vadodara-391110.', '0265-6548353', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.2729987708603!2d73.18896521436035!3d22.267646249707834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc5db01b4acab%3A0x9444fa7ec174cb69!2sGIDC+Rd%2C+Vadodara%2C+Gujarat!5e0!3m2!1sen!2sin!4v1444405878210', 3),
(4, 'Pune (Chakan)	', 'Gat No. 103, Near Essar Steel Company, Near Goods India Carrier, Chimbali Phata, Chakan, Pune-410501.', '020-65324141 ', '020-65334141', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d60458.54440478333!\n\n2d73.8167214233115!3d18.724077736318275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!\n\n1sen!2sin!4v1444406959613', 2),
(5, 'Pune (Wagholi)', 'Om Sai Dutta, Gat No. 3783, Sai Satyam Park, Behind SBI Bank, Pune-Nagar Road,\nWagholi, Pune-412207.\n', '020-65333357', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.9725981834085!2d73.95861311429967!3d18.575274072348307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x8b5c82639054bfa7!2sSai+Satyam+Park!5e0!3m2!1sen!2sin!4v1444407198334', 2),
(6, 'Pune (PCMC)', 'Gavli Vasahat, Gavli Matha, MIDC, Bhosari, Pune-411026.', '09225109215', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.5802098495906!2d73.82279131430059!3d18.637942070439784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b86c0d56c2af%3A0xd609576404031b13!2sGavali+Matha%2C+MIDC%2C+Bhosari%2C+Pimpri-Chinchwad%2C+Maharashtra+411026!5e0!3m2!1sen!2sin!4v1444407414512', 2),
(7, 'Pune (Ranjangaon)', 'Plot No. 16, Shop No. 5, Opp. Dekart Industrial Estate, MIDC Ranjangaon, Tal-Shirur, Pune.', '08180804045', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30221.24028775952!2d74.26388533969997!3d18.76893960821514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc3296e55555555%3A0x2b996ed15a1c1e3d!2sBekaert+Industries+Private+Limited!5e0!3m2!1sen!2sin!4v1444408062291', 2),
(8, 'Ahmednagar', 'P-152/3, Opp. L&T Gate No.3, Near Bank of Baroda, MIDC, Ahmednagar.', '0241-6619738', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.019797733629!2d74.69264956617592!3d19.150610662003093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcba2c00000001%3A0xbae3761e66b427c4!2sBank+Of+Baroda!5e0!3m2!1sen!2sin!4v1444408282057', 4),
(9, 'Ahmednagar City', '61/3A, MIDC, Nagar-Manmad Road, Nagapur, Ahmednagar.', '08605852170 ', '09850251004', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30150.497859699895!2d74.68354038871863!3d19.15969475916057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcbbcd0715ba7f%3A0x7899df8d7492f9b0!2sNagapur%2C+Maharashtra+414111!5e0!3m2!1sen!2sin!4v1444409188380', 4),
(10, 'Sangamner', 'Shravan Estate, Jai Jawan Chowk, New Market Yard, Nashik-Pune Highway, Sangamner-422605.', '09423180483 ', '09445069345', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.274012883975!\n\n2d74.2051363143148!3d19.5727580412572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!\n\n1s0x3bdd01d26bf3c593%3A0xd930d5c13deac11d!2sThe+Professional+Couriers!5e0!3m2!1sen!2sin!\n\n4v1444409341514', 4),
(11, 'Jalgaon', 'Hakimi Roadways, 26 Visanji Nagar, Near Kisan Scientific, Opp. Palod Distributor, Jalgoan.', '09272103711 ', '09405731952', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.519722479496!2d75.56448517519038!3d21.01188079257743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd90fa453760dc1%3A0x5ef21b1af47d9624!2sPalod+Distributors%2C+Jalgaon!5e0!3m2!1sen!2sin!4v1444410299548', 5),
(12, 'Dhule', 'Kotkar Complex, Mumbai-Agra Road, MIDC Avadhan, Dhule.', '09764632607 ', '09545487077', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29829.36850468234!\n\n2d74.74550929046286!3d20.84498526711258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!\n\n1s0x3bdec6471b186139%3A0x8532756abc9661cf!2sMIDC+Avdhan%2C+Dhule%2C+Maharashtra!5e0!3m2!\n\n1sen!2sin!4v1444410509450', 6),
(13, 'Aurangabad (Waluj)', 'Plot No.P-80, Opp. FDC Corner, Colgate Road, MIDC Waluj, Aurangabad-431136.', '0240-6506255', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30022.18592381126!2d75.22637718159585!3d19.84954539630445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb9a540da0838b%3A0xc0fb52f5d28426ff!2sMIDC%2C+Ranjangaon%2C+Waluj%2C+Aurangabad%2C+Maharashtra+431133!5e0!3m2!1sen!2sin!4v1444410711971', 7),
(14, 'Nagpur', 'D.R. Transport Company, 13, Panday Layout, Behind Durga Hotel, Khadgaon Road, Wadi, Nagpur.', '09325092641 ', '09326175562', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59534.67452984629!2d78.96585178343008!3d21.155694845656935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x3bd4ea8c6ac1c9fb%3A0xd9d1721abe59dc7d!2sKhadgoan+Rd%2C+Wadi%2C+Maharashtra+440023!3m2!1d21.155618399999998!2d79.0008715!5e0!3m2!1sen!2sin!4v1444411026488', 8),
(15, 'Ahmedabad', 'Opp. Aslali Police Station, Near Jay Carrying Corporation, Aslali, Ahmedabad - 382427.', '09898313127', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d58799.6486354817!\n\n2d72.55886519165098!3d22.91418082139286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!\n\n4m0!4m5!1s0x395e8ec36d56309d%3A0x3a51a31ea40dfcd7!2sAslali%2C+Ahmedabad%2C+Gujarat!3m2!\n\n1d22.9141056!2d72.59388489999999!5e0!3m2!1sen!2sin!4v1444411184836', 9),
(16, 'Vapi', 'Gujarat Steel Company, Near Seema Weight Bridge, Opp. Creative Textile, GIDC, Phase II, Vapi-396191.', '09662821770 ', '08379891834', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59847.35092447158!\n\n2d72.8947958799754!3d20.363938476802385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!\n\n4m0!4m5!1s0x3be0ce4440000001%3A0xee0b14edccf65c33!2sCreative+Textile+Mill%2C+Phase+2%2C\n\n+GIDC%2C+Vapi%2C+Gujarat+396191!3m2!1d20.3638615!2d72.9298156!5e0!3m2!1sen!2sin!\n\n4v1444411285318', 10),
(17, 'Nashik (Head Office)\r\n', 'Margaret Tower, Canada Corner, Nashik-422002.', '0253-2572841/61', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59986.90248228921!2d73.7346915784429!3d20.000899716108442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x3bddeb9fbfc199ff%3A0x5cc9a806492e334!2sMargaret+Tower%2C+Sharanpur%2C+Nashik%2C+Maharashtra+422005!3m2!1d20.000822499999998!2d73.7697113!5e0!3m2!1sen!2sin!4v1444411377474', 11),
(18, 'Nashik (Satpur)', 'Plot no. 64A, Opp. MICO, Near Indian Tool, MIDC, Satpur, Nashik-422007.', '0253-2360541/51', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59987.4666188789!\n\n2d73.70393987843671!3d19.999419317078807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!\n\n4m0!4m5!1s0x3bddec7d00000001%3A0xce33881aab3f616e!2sIndian+Tool+Manufacturers%2C+Plot+No-\n\n62+%26+63+M+I+D+C%2C+Industrial+Area%2C+Satpur%2C+Satpur%2C+Nashik%2C+Maharashtra+422007!\n\n3m2!1d19.9993421!2d73.7389596!5e0!3m2!1sen!2sin!4v1444411469783', 11),
(19, 'Nashik (Dwarka)', 'Gala No. 6, Devyani Society, Opp. Madhuban Colony, Bankar Chowk, Dwarka, Nashik-422001.', '09225106257', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d59990.58948991144!2d73.7664548784025!3d19.99122242245079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x3bddeafcab70f787%3A0x4b64b0a9a9942062!2sBankar+Chowk%2C+dwarka%2C+6%2C+Poona+Road%2C+General+Arun+Kumar+Vaidya+Nager%2C+Dwarka%2C+Nashik%2C+Maharashtra+422010!3m2!1d19.9911452!2d73.80147459999999!5e0!3m2!1sen!2sin!4v1444411620432', 11),
(20, 'Nashik (Sinnar)\r\n', 'W-7, Gargoti Road, MIDC,Malegaon, Sinnar-422103.', '09225106231', NULL, 'https://www.google.com/maps/embed?pb=!1m19!1m12!1m3!1d120078.78603750891!\n\n2d73.9113714474222!3d19.862701676256613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m4!3e1!\n\n4m0!4m1!2sMIDC%2CMalegaon%2C+Sinnar-422103.!5e0!3m2!1sen!2sin!4v1444411782299', 11),
(21, 'Malegaon', 'Behind Jeevan Hospital Compound, Manmad Road, Manmad Chowfully, Malegaon-423203.', '08975924197 ', '09028182606', 'https://www.google.com/maps/embed?pb=!1m19!1m12!1m3!1d119543.45125263452!\n\n2d74.47149920939059!3d20.558108660864345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m4!3e1!\n\n4m0!4m1!2sManmad+Road%2C+Manmad+Chowfully%2C+Malegaon-423203.!5e0!3m2!1sen!2sin!\n\n4v1444411882488', 11),
(22, 'Chandwad', 'Gala No. 41, Market Committee Shopping Centre, Opp. Palod Petrol, Agra Road, Chandwad.', '09423180483 ', '09445069345', 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d14964.798035928181!\n\n2d74.2315637198887!3d20.333375102752775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!\n\n4m0!4m5!1s0x3970e9fb2ff424b5%3A0xc58b28c5b23459e!2sNational+Highway+3%2C+Chandwad%2C\n\n+Maharashtra+423101!3m2!1d20.3333552!2d74.2403185!5e0!3m2!1sen!2sin!4v1444412087090', 11),
(23, 'Mumbai (Masjid)\r\n', 'Mul Ratna Building, 334, Narsi Natha Street, Masjid (West), Mumbai-400003', '022-23426100/200', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60376.46511211886!2d72.80232207419878!3d18.95222789222665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x3be7ce250655d3cf%3A0x69400edbfe235443!2sKalayatan+Cargo%2C+Mul+Ratna+Building%2C+334%2C+Masjid%2C+Narsee+Natha+Street%2C+Vadgadi%2C+Masjid+Bandar+West%2C+Masjid+Bandar%2C+Mumbai%2C+Maharashtra+400003!3m2!1d18.95215!2d72.83734179999999!5e0!3m2!1sen!2sin!4v1444412183574', 12),
(24, 'Mumbai (Opera House)', 'Do Hathi Gall, Behind Imperial Talkies, Opera House, Mumbai-400004', '09320558851', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60375.89183244203!\n\n2d72.78329367420505!3d18.953812091222357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!\n\n4m0!4m5!1s0x3be7ce0e329a26b9%3A0xa08d061e0e5d9f19!2sOpera+House%2C+Girgaon%2C+Mumbai%2C\n\n+Maharashtra!3m2!1d18.9537342!2d72.8183134!5e0!3m2!1sen!2sin!4v1444412297372', 12),
(25, 'Mumbai (Opera House)', '8, Vipun Building, Jamshedji Peri Street, Grant Road East, Mumbai-400007', '09167621008', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60372.7727257085!2d72.78329367423879!3d18.962429185758644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x3be7ce12e3824031%3A0x1ede8d0a9307952d!2sGrant+Road+East%2C+Bharat+Nagar%2C+Grant+Rd%2C+Mumbai%2C+Maharashtra!3m2!1d18.962351299999998!2d72.8183134!5e0!3m2!1sen!2sin!4v1444412409615', 12),
(26, 'Mumbai (Andheri)', 'Gala No. 1. Building No. 16, A Wing, Samhita Complex, \nOff Andheri Kurla road, Near MTNL Telephone Exchange, \nSaki Naka, Andheri East, Mumbai 400072.\n', '022-28506258/59', NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d60321.75164257023!\n\n2d72.8502196747917!3d19.102852596505958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!\n\n4m0!4m5!1s0x3be7c86df662b83d%3A0xb32970e52ae7e200!2sLathia+Rubber+Manufacturing+Company%2C\n\n+Andheri-Kurla+Road%2C+Andheri+East%2C+Mumbai%2C+Maharashtra+400072!3m2!1d19.1027748!\n\n2d72.8852394!5e0!3m2!1sen!2sin!4v1444412587416', 12),
(27, 'Mumbai (Goregaon)', 'Shop No. 46G, Near Ashok Nagar, Western Extress Highway, Service Road, Goregaon (East), Mumbai-400063.', '08080666650 ', '09867546399', 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d60309.33714202766!\n\n2d72.82288977492632!3d19.136870474822928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e1!\n\n4m3!3m2!1d19.0967697!2d72.8354568!4m5!1s0x3be7b7d409d3e60d%3A0xb4d813398f64e400!2sMumbai\n\n%2C+Maharashtra+400060!3m2!1d19.1367927!2d72.85790949999999!5e0!3m2!1sen!2sin!\n\n4v1444412883787', 12),
(28, 'Mumbai (Lower Parel)', '84B, N. M. Joshi Marg, Kawli Compound,\nOpp. Western Railway Workshop, Lower Parel, Mumbai-400013.\n', '09225106254 ', '022-65647123', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.429192032808!\n\n2d72.82895721430594!3d19.00080025927089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!\n\n1s0x3be7ceed8313333b%3A0x2e2979dc384e8df!2sKawali+Compound%2C+NM+Joshi+Marg%2C+Western\n\n+Railway+Workshop%2C+Lower+Parel%2C+Mumbai%2C+Maharashtra+400012!5e0!3m2!1sen!2sin!\n\n4v1444412987857', 12),
(29, 'Mumbai (Mulund)\r\n', 'Shop No. 10, Shagun Marraige Hall,\nOpp. Johnson & Johnson, Near Meghal Industrial Estate, Mulund (West), Mumbai-400080.\n', '09821744357 ', '09969929753', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7536.823989251418!\n\n2d72.94408517234568!3d19.177199481611265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!\n\n1s0x0000000000000000%3A0x38b1a0f55d4b4697!2sJohnson+%26+Johnson+Company!5e0!3m2!1sen!2sin!\n\n4v1444413109453', 12),
(30, 'Bhiwandi', 'Gala No J-3, Muni Suvrat Complex, Rahnal Village, Rahnal, Bhiwandi-421302.', '09225209222 ', '09225106253', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15065.08889741288!\n\n2d73.01944266961817!3d19.270524447157054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!\n\n1s0x3be7bc45680cee21%3A0x2e2a02d894703d00!2sRahanal%2C+Bhiwandi%2C+Maharashtra+421302!5e0!\n\n3m2!1sen!2sin!4v1444413276792', 13),
(31, 'Vashi', 'Sai Dhara Apartment, Shop No. 4, Plot No. 14, Sector 30, Vashi, Opp. Sanpada Railway Station, Navi Mumbai - 400705.', '09225106232 ', '022-65134641', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.9280894251165!2d73.00919131406539!3d19.066899057215178!2m3!1f0!2f0!3f0!3m2!\n\n1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1438f4d5201%3A0xc4a2f21e39466247!2sKalayatan+Cargo!5e0!3m2!1sen!2sin!4v1449828213143', 13),
(32, 'Vasai', 'Unit No. 1, Tirupati Industrial Park, Solitare \nBuilding, Sativali Road, Vasai (East)-401208.\n', '09225209333 ', '09225106233', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d120415.30927563524!2d72.81104459285733!3d19.41333858181003!2m3!1f0!2f0!3f0!3m2!\n\n1i1024!2i768!4f13.1!2m1!1sSolitaire+Building%2C+Sativali+Road%2C+Vasai+(East)-401208.!5e0!3m2!1sen!2sin!4v1449828852027', 1),
(33, 'Palghar', 'Gala No.6, Sunrise Apartments, Near Twinkle Star School, Palghar.', '09049993203', NULL, 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3756.2408001888743!2d72.76266311407625!3d19.702369637106145!2m3!1f0!2f0!3f0!3m2!\n\n1i1024!2i768!4f13.1!2m1!1sSunrise+Apartments%2C+Near+Twinkle+Star+School%2C+Palghar.!5e0!3m2!1sen!2sin!4v1449829048137', 1);

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
