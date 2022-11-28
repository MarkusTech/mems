# CDRRMOC : MySQL database backup
#
# Generated: Friday 17. June 2022
# Hostname: localhost
# Database: cdrrmoc_db
# --------------------------------------------------------


#
# Delete any existing table `tbl_users`
#

DROP TABLE IF EXISTS `tbl_users`;


#
# Table structure of table `tbl_users`
#



CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `barangay` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_users VALUES("11","admin","d033e22ae348aeb5660fc2140aec35850c4da997","administrator","09052021074950person.png","2021-05-03 10:33:03","");
INSERT INTO tbl_users VALUES("15","apopong","03c006467bafbbe1a7bc7f1ee83ebbb1aad1bced","staff","","2022-05-27 17:31:51","Apopong");
INSERT INTO tbl_users VALUES("16","baluan","0b8c9077ff476a844b83472bd6378b12cbc94575","staff","","2022-05-27 17:32:05","Baluan");
INSERT INTO tbl_users VALUES("17","batomelong","5e94d7e8a734c7ffff9d19ba5200defe5c1a4f10","staff","","2022-05-27 17:33:11","Batomelong");
INSERT INTO tbl_users VALUES("18","buayan","040f42b798faa07530395fcc3bb11b7a5514eaa3","staff","","2022-05-27 17:33:25","Buayan");
INSERT INTO tbl_users VALUES("19","bula","60424fc040e8be12d018ebcb881f7514ed3d6e54","staff","","2022-05-27 17:34:17","Bula");
INSERT INTO tbl_users VALUES("20","calumpang","fdaa81e1260c287b6311e584f8fd10a47d9e0f41","staff","","2022-05-27 17:34:40","Calumpang");
INSERT INTO tbl_users VALUES("21","cityheights","e20dba07ea8b25f5854331800f412ffc4db77e94","staff","","2022-05-27 17:35:48","City Heights");
INSERT INTO tbl_users VALUES("22","conel","f64f125ed24b071cbaa69713019aa400e52ce63d","staff","","2022-05-27 17:36:18","Conel");
INSERT INTO tbl_users VALUES("23","dadiangaseast","53c67e696c7b3642bbe1563d2b71bd45205be86c","staff","","2022-05-27 17:36:47","Dadiangas East");
INSERT INTO tbl_users VALUES("24","dadiangasnorth","537ac3641ea661bd7da71b9de1d03e8f51339593","staff","","2022-05-27 17:37:19","Dadiangas North");
INSERT INTO tbl_users VALUES("25","dadiangassouth","3f0d537458e9ab0787b1e0d64077193627517174","staff","","2022-05-27 17:37:34","Dadiangas South");
INSERT INTO tbl_users VALUES("26","dadiangaswest","fc565ee54419629e724a39e29169aadbc3fd8420","staff","","2022-05-27 17:37:49","Dadiangas West");
INSERT INTO tbl_users VALUES("27","fatima","1ba1b5b562aef9cd264cace5b7bdd46a7c065c0a","staff","","2022-05-27 17:38:42","Fatima");
INSERT INTO tbl_users VALUES("28","katangawan","7666d4f7dd68eb4a0c6304fa9ff635d97b76c7e1","staff","","2022-05-27 17:38:58","Katangawan");
INSERT INTO tbl_users VALUES("29","labangal","fb02138f1933f2e6a30d8d02ff07b7f324131658","staff","","2022-05-27 17:39:10","Labangal");
INSERT INTO tbl_users VALUES("30","lagao","490f848210807f2290a69fa8a5c13d5cc41ed7f8","staff","","2022-05-27 17:39:20","Lagao");
INSERT INTO tbl_users VALUES("31","ligaya","4b133ebb9f63bc79d39cf05eb26d5da6cc9a7cfb","staff","","2022-05-27 17:39:30","Ligaya");
INSERT INTO tbl_users VALUES("32","mabuhay","bb0c24befce192c1bf6275f053b2dd10536ecabf","staff","","2022-05-27 17:39:47","Mabuhay");
INSERT INTO tbl_users VALUES("33","olympog","03d8e7e9c30020b50b72c74e3b20c5bc5f689deb","staff","","2022-05-27 17:40:04","Olympog");
INSERT INTO tbl_users VALUES("34","sanisidro","eacdc1547232e2e912c56f4eacfef471829c543a","staff","","2022-05-27 17:40:19","San Isidro");
INSERT INTO tbl_users VALUES("35","sanjose","48cdbfb648ffd8ecaf2b3f1509b1061b21478219","staff","","2022-05-27 17:40:34","San Jose");
INSERT INTO tbl_users VALUES("36","siguel","fcb918e43aa1577710a58c1da5eba5c49dee5fcb","staff","","2022-05-27 17:41:04","Siguel");
INSERT INTO tbl_users VALUES("37","sinawal","14313061fece6492f1456730f15c6adb2446cc47","staff","","2022-05-27 17:41:24","Sinawal");
INSERT INTO tbl_users VALUES("38","tambler","a15bff8bc4816371956c9791f0d79a0c967cd1bd","staff","","2022-05-27 17:41:37","Tambler");
INSERT INTO tbl_users VALUES("41","tinagacan","4aad24249d559f00c3ef6332763b9466ee6ed0f6","staff","","2022-06-02 09:19:15","Tinagacan");
INSERT INTO tbl_users VALUES("42","upperlabay","93c8497755f387bd2ca3c63a4db0e4c47aee8446","staff","","2022-06-02 09:19:33","Upper Labay");



#
# Delete any existing table `tblbarangay`
#

DROP TABLE IF EXISTS `tblbarangay`;


#
# Table structure of table `tblbarangay`
#



CREATE TABLE `tblbarangay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblbarangay VALUES("3","Apopong");
INSERT INTO tblbarangay VALUES("4","Bula");
INSERT INTO tblbarangay VALUES("5","Batomelong");
INSERT INTO tblbarangay VALUES("6","Baluan");
INSERT INTO tblbarangay VALUES("7","Buayan");
INSERT INTO tblbarangay VALUES("8","Calumpang");
INSERT INTO tblbarangay VALUES("9","City Heights");
INSERT INTO tblbarangay VALUES("10","Conel");
INSERT INTO tblbarangay VALUES("11","Dadiangas East");
INSERT INTO tblbarangay VALUES("12","Dadiangas North");
INSERT INTO tblbarangay VALUES("13","Dadiangas South");
INSERT INTO tblbarangay VALUES("14","Dadiangas West");
INSERT INTO tblbarangay VALUES("16","Katangawan");
INSERT INTO tblbarangay VALUES("17","Labangal");
INSERT INTO tblbarangay VALUES("18","Lagao");
INSERT INTO tblbarangay VALUES("19","Ligaya");
INSERT INTO tblbarangay VALUES("20","Mabuhay");
INSERT INTO tblbarangay VALUES("21","Olympog");
INSERT INTO tblbarangay VALUES("22","San Isidro");
INSERT INTO tblbarangay VALUES("23","San Jose");
INSERT INTO tblbarangay VALUES("24","Siguel");
INSERT INTO tblbarangay VALUES("25","Sinawal");
INSERT INTO tblbarangay VALUES("26","Tambler");
INSERT INTO tblbarangay VALUES("27","Tinagacan");
INSERT INTO tblbarangay VALUES("28","Upper Labay");
INSERT INTO tblbarangay VALUES("29","Fatima");



#
# Delete any existing table `tblevacuee`
#

DROP TABLE IF EXISTS `tblevacuee`;


#
# Table structure of table `tblevacuee`
#



CREATE TABLE `tblevacuee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `alias` varchar(20) NOT NULL,
  `birthplace` varchar(80) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `infostatus` varchar(20) NOT NULL,
  `purok` varchar(50) NOT NULL,
  `identified_as` varchar(30) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `remarks` text NOT NULL,
  `condtn` varchar(50) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblevacuee VALUES("2","Mark","asdd","Pilar","pilar","Gensan","1995-12-23","21","Single","Female","pwd","Purok 3","Negative","09123456789","xzylreyarpon@gmail.com","Gensan","/**85393966+","Good","Apopong");
INSERT INTO tblevacuee VALUES("4","test","test","test","test","Gensan","2001-03-18","21","Single","Male","normal","Purok 2","Negative","09123456789","xzylreyarpon@gmail.com","zone 2, block 7
barangay fatima","asd","Good","Apopong");
INSERT INTO tblevacuee VALUES("5","esmael","Singgon","Bangay","Esma","Apopong, GSC.","2000-09-19","21","Single","Male","pregnant","Purok 6","Negative","","itlog@gmail.com","weriohfgerngu@gmail.com","gig","Injured","Baluan");
INSERT INTO tblevacuee VALUES("6","mnl","dfg","iiuujhgf","lloko","Gensan","2022-06-09","12","","Male","normal","Purok 5","Positive","09123456789","xzylreyarpon@gmail.com","ihojmnhhytfvb rvy ","5851","Good","Batomelong");



#
# Delete any existing table `tblincident`
#

DROP TABLE IF EXISTS `tblincident`;


#
# Table structure of table `tblincident`
#



CREATE TABLE `tblincident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `members` varchar(55) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `middlename` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `relationship` varchar(55) NOT NULL,
  `age` int(10) NOT NULL,
  `civilstatus` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `occupation` varchar(155) NOT NULL,
  `income` int(22) NOT NULL,
  `dependents` varchar(55) NOT NULL,
  `child` varchar(55) NOT NULL,
  `senior` varchar(55) NOT NULL,
  `housecondition` varchar(155) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `outside` varchar(55) NOT NULL,
  `inside` varchar(55) NOT NULL,
  `amountdamage` int(100) NOT NULL,
  `housingstatus` varchar(55) NOT NULL,
  `incident` varchar(55) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblincident VALUES("5","M","zx","zxc","zxc","asd","25","Married","Female","asd","231","2","2","2","fghc","321321","Yes","No","0","asd","Flood","Calumpang","0000-00-00");
INSERT INTO tblincident VALUES("6","H","Xzyl Rey","Tuario","Arpon","n/a","21","Single","Male","student","720","2","1","0","n/a","09776773924","No","No","0","stable","Fire","Batomelong","0000-00-00");
INSERT INTO tblincident VALUES("7","M","ddsa","dsad","asd","asd","25","Single","Male","hfgh","231","1","1","1","fgh","12333344","Yes","No","0","asd","Flood","Apopong","0000-00-00");
INSERT INTO tblincident VALUES("8","M","ddd","ddd","ddd","dd","21","Single","Male","asd","231","2","2","2","","12333344","Yes","Yes","0","asd","Fire","Mabuhay","0000-00-00");
INSERT INTO tblincident VALUES("9","H","asd","asd","asd","sad","21","Married","Male","hfgh","231","2","2","2","asd","12333344","Yes","Yes","0","stable","Landslide","Katangawan","0000-00-00");



#
# Delete any existing table `tblincidentlist`
#

DROP TABLE IF EXISTS `tblincidentlist`;


#
# Table structure of table `tblincidentlist`
#



CREATE TABLE `tblincidentlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `barangay` varchar(55) NOT NULL,
  `incident` varchar(155) NOT NULL,
  `location` varchar(155) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblincidentlist VALUES("3","2022-06-18","Apopong","Fire","asd");
INSERT INTO tblincidentlist VALUES("4","2022-06-19","Batomelong","Flood","asd");



#
# Delete any existing table `tblposition`
#

DROP TABLE IF EXISTS `tblposition`;


#
# Table structure of table `tblposition`
#



CREATE TABLE `tblposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblposition VALUES("18","admin","1");



#
# Delete any existing table `tblreg`
#

DROP TABLE IF EXISTS `tblreg`;


#
# Table structure of table `tblreg`
#



CREATE TABLE `tblreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `confirmation` varchar(50) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblreg VALUES("14","teteesst","teteeesst","21","12333344","Active","Confirmed","Apopong");
INSERT INTO tblreg VALUES("15","asdas","asda","21","12333344","Active","Confirmed","Batomelong");
INSERT INTO tblreg VALUES("16","ddd","ddd","21","12333344","Active","Confirmed","Bula");
INSERT INTO tblreg VALUES("17","xzyl rey","prk tomasa","21","09776773924","Active","Confirmed","Baluan");
INSERT INTO tblreg VALUES("18","James Arnorld","asd","25","12312313","Active","Confirmed","Apopong");



#
# Delete any existing table `tblregistration`
#

DROP TABLE IF EXISTS `tblregistration`;


#
# Table structure of table `tblregistration`
#



CREATE TABLE `tblregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(55) NOT NULL,
  `middlename` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `age` int(11) NOT NULL,
  `civilstatus` varchar(55) NOT NULL,
  `presentaddress` varchar(155) NOT NULL,
  `currentaddress` varchar(155) NOT NULL,
  `residenceno` int(22) NOT NULL,
  `contact` int(22) NOT NULL,
  `barangay` varchar(55) NOT NULL,
  `email` text NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` varchar(155) NOT NULL,
  `religion` varchar(55) NOT NULL,
  `bloodtype` varchar(55) NOT NULL,
  `eyecolor` varchar(55) NOT NULL,
  `haircolor` varchar(55) NOT NULL,
  `complexion` varchar(55) NOT NULL,
  `identity` varchar(55) NOT NULL,
  `build` varchar(55) NOT NULL,
  `weight` int(22) NOT NULL,
  `height` int(22) NOT NULL,
  `workdesc` varchar(155) NOT NULL,
  `tin` int(22) NOT NULL,
  `officeposition` varchar(55) NOT NULL,
  `officeaddress` varchar(155) NOT NULL,
  `officeno` int(22) NOT NULL,
  `contactnumber` int(22) NOT NULL,
  `dialect` varchar(55) NOT NULL,
  `skill` varchar(155) NOT NULL,
  `placeacquired` varchar(55) NOT NULL,
  `dateacquired` date NOT NULL,
  `reference` varchar(55) NOT NULL,
  `position` varchar(55) NOT NULL,
  `number` int(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




#
# Delete any existing table `tblsystem_info`
#

DROP TABLE IF EXISTS `tblsystem_info`;


#
# Table structure of table `tblsystem_info`
#



CREATE TABLE `tblsystem_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `brgy_name` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `city_logo` varchar(100) DEFAULT NULL,
  `brgy_logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblsystem_info VALUES("1","South Cotabato","General Santos City","DISASTER AND RISK REDUCTION MANAGEMENT","0919-1234567","Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit.","09052021075440182970012_615550183178722_2776607156578360582_n.jpg","03052021033434brgy-logo.png","02062022031651243358378_164428752532507_6786211443756565506_n.jpg");



#
# Delete any existing table `tbltitle`
#

DROP TABLE IF EXISTS `tbltitle`;


#
# Table structure of table `tbltitle`
#



CREATE TABLE `tbltitle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbltitle VALUES("1","DISASTER AND RISK REDUCTION MANAGEMENT");

