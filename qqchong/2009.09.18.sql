-- MySQL dump 10.13  Distrib 5.1.33, for Win32 (ia32)
--
-- Host: localhost    Database: qqchong
-- ------------------------------------------------------
-- Server version	5.1.33-community-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `recommend` tinyint(1) DEFAULT '0',
  `rdtime` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_FI_1` (`user_id`),
  CONSTRAINT `blog_FK_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (5,4,'hhhhello','<p class=\"MsoBodyText\" style=\"margin: 12pt 0in 0pt 127.6pt\"><span style=\"mso-fareast-language: ZH-CN\"><font size=\"3\">create a new account. After your click, the website will redirect to user profile page shown in Fig. 1-2.<span style=\"mso-spacerun: yes\">&nbsp; </span>Then, finish the form follow the instruction.<o:p></o:p></font></span></p><p><span lang=\"EN-GB\" style=\"font-size: 11pt; font-family: Arial; mso-fareast-language: ZH-CN; mso-bidi-font-size: 10.0pt; mso-fareast-font-family: å®‹ä½“; mso-bidi-font-family: \'Times New Roman\'; mso-ansi-language: EN-GB; mso-bidi-language: AR-SA\"><v:shapetype id=\"_x0000_t75\" stroked=\"f\" filled=\"f\" path=\"m@4@5l@4@11@9@11@9@5xe\" o:preferrelative=\"t\" o:spt=\"75\" coordsize=\"21600,21600\"><v:stroke joinstyle=\"miter\"></v:stroke><v:formulas><v:f eqn=\"if lineDrawn pixelLineWidth 0\"></v:f><v:f eqn=\"sum @0 1 0\"></v:f><v:f eqn=\"sum 0 0 @1\"></v:f><v:f eqn=\"prod @2 1 2\"></v:f><v:f eqn=\"prod @3 21600 pixelWidth\"></v:f><v:f eqn=\"prod @3 21600 pixelHeight\"></v:f><v:f eqn=\"sum @0 0 1\"></v:f><v:f eqn=\"prod @6 1 2\"></v:f><v:f eqn=\"prod @7 21600 pixelWidth\"></v:f><v:f eqn=\"sum @8 21600 0\"></v:f><v:f eqn=\"prod @7 21600 pixelHeight\"></v:f><v:f eqn=\"sum @10 21600 0\"></v:f></v:formulas><v:path o:connecttype=\"rect\" gradientshapeok=\"t\" o:extrusionok=\"f\"></v:path><o:lock aspectratio=\"t\" v:ext=\"edit\"></o:lock></v:shapetype><v:shape id=\"_x0000_i1025\" type=\"#_x0000_t75\" style=\"width: 312.75pt; height: 225.75pt\"><v:imagedata src=\"file:///C:\\Users\\exirguo\\AppData\\Local\\Temp\\msohtml1\\01\\clip_image001.png\" o:title=\"\"></v:imagedata></v:shape></span></p>',0,NULL,'2009-09-13 20:57:51'),(6,4,'yyyy','<p>L<img height=\"90\" width=\"120\" alt=\"\" src=\"/qqchong/uploads/IMG_6349.JPG\" />orem ipsum</p><p>[\'Source\',\'DocProps\',\'-\',\'Save\',\'NewPage\',\'Preview\',\'-\',\'Templates\'],<br />&nbsp;[\'Cut\',\'Copy\',\'Paste\',\'PasteText\',\'PasteWord\',\'-\',\'Print\',\'SpellCheck\'],<br />&nbsp;[\'Undo\',\'Redo\',\'-\',\'Find\',\'Replace\',\'-\',\'SelectAll\',\'RemoveFormat\'],<br />&nbsp;[\'Form\',\'Checkbox\',\'Radio\',\'TextField\',\'Textarea\',\'Select\',\'Button\',\'ImageButton\',\'HiddenField\'],<br />&nbsp;\'/\',<br />&nbsp;[\'Bold\',\'Italic\',\'Underline\',\'StrikeThrough\',\'-\',\'Subscript\',\'Superscript\'],<br />&nbsp;[\'OrderedList\',\'UnorderedList\',\'-\',\'Outdent\',\'Indent\',\'Blockquote\',\'CreateDiv\'],<br />&nbsp;[\'JustifyLeft\',\'JustifyCenter\',\'JustifyRight\',\'JustifyFull\'],<br />&nbsp;[\'Link\',\'Unlink\',\'Anchor\'],<br />&nbsp;[\'Image\',\'Flash\',\'Table\',\'Rule\',\'Smiley\',\'SpecialChar\',\'PageBreak\'],<br />&nbsp;\'/\',<br />&nbsp;[\'Style\',\'FontFormat\',\'FontName\',\'FontSize\'],<br />&nbsp;[\'TextColor\',\'BGColor\'],<br />&nbsp;[\'FitWindow\',\'ShowBlocks\',\'-\',\'About\']&nbsp;&nbsp;// No comma for the last row.</p><p>ä¸­å›½äººæ°‘æ˜¯ä¼Ÿå¤§çš„</p>',0,NULL,'2009-09-13 20:59:26'),(8,4,'中华人民共和国万岁','<p><img alt=\"\" src=\"http://localhost/qqchong/js/fckeditor/editor/images/smiley/msn/wink_smile.gif\" /></p>',1,'2009-09-15 08:23:03','2009-09-15 07:54:52'),(9,4,'zhonghuarenmin g','<p>zhongguo renmin</p>',0,NULL,'2009-09-17 01:42:08'),(10,4,'new ','<p><img alt=\"\" src=\"http://147.128.21.124/vhome/uploads/ORGchart-1(1).jpg\" style=\"width: 727px; height: 543px\" /></p><p>&nbsp;</p><p><meta content=\"PowerPoint.Slide\" name=\"ProgId\" /><meta content=\"Microsoft PowerPoint 11\" name=\"Generator\" /><style type=\"text/css\">v\\:* {behavior:url(#default#VML);}o\\:* {behavior:url(#default#VML);}p\\:* {behavior:url(#default#VML);}.shape {behavior:url(#default#VML);}v\\:textbox {display:none;}</style><meta content=\"2009/9/17\" name=\"Description\" /><style type=\"text/css\">.O	{color:#003258;	font-size:149%;}a:link	{color:#0094D2 !important;}a:active	{color:orangered !important;}a:visited	{color:#026A65 !important;}</style><style type=\"text/css\" media=\"print\"><!--.sld	{left:0px !important;	width:6.0in !important;	height:4.5in !important;	font-size:103% !important;}--></style><o:shapelayout v:ext=\"edit\"></o:shapelayout><o:idmap v:ext=\"edit\" data=\"1\"></o:idmap><p:colorscheme colors=\"#ffffff,#003258,#dad3c5,#a09487,#4e9793,#ff4500,#0094d2,#026a65\"></p:colorscheme></p><div class=\"O\" v:shape=\"_x0000_s1026\"><span style=\"font-size: larger\"><font size=\"5\"><span lang=\"EN-US\" style=\"color: rgb(160,148,135)\">I&amp;V 1, 2<br /></span><span lang=\"EN-US\" style=\"color: rgb(160,148,135)\">CBC/XBV/V, Main Roles &amp; Responsibilities</span></font></span></div><div class=\"O\" v:shape=\"_x0000_s1026\"><meta content=\"PowerPoint.Slide\" name=\"ProgId\" /><meta content=\"Microsoft PowerPoint 11\" name=\"Generator\" /><style type=\"text/css\">v\\:* {behavior:url(#default#VML);}o\\:* {behavior:url(#default#VML);}p\\:* {behavior:url(#default#VML);}.shape {behavior:url(#default#VML);}v\\:textbox {display:none;}</style><meta content=\"2009/9/17\" name=\"Description\" /><style type=\"text/css\">.O	{color:#003258;	font-size:149%;}a:link	{color:#0094D2 !important;}a:active	{color:orangered !important;}a:visited	{color:#026A65 !important;}</style><style type=\"text/css\" media=\"print\"><!--.sld	{left:0px !important;	width:6.0in !important;	height:4.5in !important;	font-size:103% !important;}--></style><o:shapelayout v:ext=\"edit\"></o:shapelayout><o:idmap v:ext=\"edit\" data=\"1\"></o:idmap><p:colorscheme colors=\"#ffffff,#003258,#dad3c5,#a09487,#4e9793,#ff4500,#0094d2,#026a65\"><div class=\"O\" v:shape=\"_x0000_s1026\"><div><span style=\"font-size: 111%\"><span style=\"left: -4.11%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span></span><span style=\"font-size: medium\"><font size=\"3\"><span lang=\"EN-US\">Responsible for planning, implementation and follow-up of functional </span><span lang=\"EN-US\">integration and verification </span></font></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.53%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"EN-US\">Decide the test strategy and solution. Support and monitor the </span><span lang=\"EN-US\">implementation of the strategy/solution. </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.56%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"EN-US\">Drive test automation within assigned test scope </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.41%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"EN-US\">Set up and manage related internal and external I&amp;V interfaces. </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.56%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"EN-US\">Secure test quality and efficient lab usage </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.56%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"IT\">Contribute to product innovation </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.56%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span>Build-up, continuously plan, maintain and apply all resources/competences required for the assigned tasks including <span lang=\"IT\">collaboration with other Ericsson units, external partners and universities. </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.34%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"IT\">Contribute to operational excellence goals by contributing/driving </span><span lang=\"IT\">continuous improvement of the development process within </span><span lang=\"IT\">XB</span><span lang=\"IT\">.</span></span><span style=\"font-size: 20pt\"> </span></div><p><meta content=\"PowerPoint.Slide\" name=\"ProgId\" /><meta content=\"Microsoft PowerPoint 11\" name=\"Generator\" /><style type=\"text/css\">v\\:* {behavior:url(#default#VML);}o\\:* {behavior:url(#default#VML);}p\\:* {behavior:url(#default#VML);}.shape {behavior:url(#default#VML);}v\\:textbox {display:none;}</style><meta content=\"2009/9/17\" name=\"Description\" /><style type=\"text/css\">.O	{color:#003258;	font-size:149%;}a:link	{color:#0094D2 !important;}a:active	{color:orangered !important;}a:visited	{color:#026A65 !important;}</style><style type=\"text/css\" media=\"print\"><!--.sld	{left:0px !important;	width:6.0in !important;	height:4.5in !important;	font-size:103% !important;}--></style><o:shapelayout v:ext=\"edit\"></o:shapelayout><o:idmap v:ext=\"edit\" data=\"1\"></o:idmap><p:colorscheme colors=\"#ffffff,#003258,#dad3c5,#a09487,#4e9793,#ff4500,#0094d2,#026a65\"></p:colorscheme></p><div class=\"O\" v:shape=\"_x0000_s1026\"><span style=\"font-size: smaller\"><span lang=\"EN-US\" style=\"color: rgb(160,148,135)\"><font size=\"7\">Product Approval<br />CBC/XBV/P, Main Roles &amp; Responsibilities</font></span></span></div><div class=\"O\" v:shape=\"_x0000_s1026\"><meta content=\"PowerPoint.Slide\" name=\"ProgId\" /><meta content=\"Microsoft PowerPoint 11\" name=\"Generator\" /><style type=\"text/css\">v\\:* {behavior:url(#default#VML);}o\\:* {behavior:url(#default#VML);}p\\:* {behavior:url(#default#VML);}.shape {behavior:url(#default#VML);}v\\:textbox {display:none;}</style><meta content=\"2009/9/17\" name=\"Description\" /><style type=\"text/css\">.O	{color:#003258;	font-size:149%;}a:link	{color:#0094D2 !important;}a:active	{color:orangered !important;}a:visited	{color:#026A65 !important;}</style><style type=\"text/css\" media=\"print\"><!--.sld	{left:0px !important;	width:6.0in !important;	height:4.5in !important;	font-size:103% !important;}--></style><o:shapelayout v:ext=\"edit\"></o:shapelayout><o:idmap v:ext=\"edit\" data=\"1\"></o:idmap><p:colorscheme colors=\"#ffffff,#003258,#dad3c5,#a09487,#4e9793,#ff4500,#0094d2,#026a65\"><div class=\"O\" v:shape=\"_x0000_s1026\"><div><span style=\"font-size: medium\"><span style=\"left: -4.51%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"EN-US\">Drive and manage product approval activities within XB. </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.51%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"EN-US\">Monitor and improve the process for product approval </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -3.77%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"EN-US\">Responsible for the quality of EMC/Safety/Environment reports. Make sure </span><span lang=\"EN-US\">the reports compliance towards the required standard. </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.31%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"EN-US\">Negotiate and define the test scope with the 3rd party test house. </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.51%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"IT\">Contribute to product innovation </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.51%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span>Build-up, continuously plan, maintain and apply all resources/competences required for the assigned tasks including <span lang=\"IT\">collaboration with other Ericsson units, external partners and universities. </span></span></div><div><span style=\"font-size: medium\"><span style=\"left: -4.34%; color: rgb(0,148,210); font-family: Wingdings; position: absolute\">&sect;</span><span lang=\"IT\">Contribute to operational excellence goals by contributing/driving </span><span lang=\"IT\">continuous improvement of the development process within </span><span lang=\"IT\">XB</span><span lang=\"IT\">.</span> </span></div></div></p:colorscheme></div></div></p:colorscheme></div>',0,NULL,'2009-09-17 02:12:09'),(11,4,'hello baby','<p>kdjkfjzhongguo<img alt=\"\" src=\"http://localhost/qqchong/js/fckeditor/editor/images/smiley/msn/wink_smile.gif\" /></p>',0,NULL,'2009-09-17 12:47:56');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_FI_1` (`blog_id`),
  KEY `comment_FI_2` (`topic_id`),
  KEY `comment_FI_3` (`user_id`),
  CONSTRAINT `comment_FK_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comment_FK_2` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comment_FK_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,5,NULL,4,'<p><strong>fffffff</strong></p>','2009-09-13 23:19:59'),(2,5,NULL,4,'','2009-09-13 23:20:34'),(3,6,NULL,4,'<p><a href=\"http://images.google.cn/imgres?imgurl=http://ec4.images-amazon.com/images/I/41kosXZGWwL._AA200_.jpg&amp;imgrefurl=http://www.foolbirds.com/t/fckeditor&amp;usg=__UTyT6No1Leh4nF839o7RmWmmvWU=&amp;h=200&amp;w=200&amp;sz=8&amp;hl=zh-CN&amp;start=3&amp;um=1&amp;tbnid=k1uzr7ZO_vJpSM:&amp;tbnh=104&amp;tbnw=104&amp;prev=/images%3Fq%3Dsymfony%2Bfckeditor%26hl%3Dzh-CN%26rlz%3D1G1GGLQ_ZH-CNCN345%26sa%3DN%26um%3D1%26newwindow%3D1\" target=\"_blank\"><img height=\"104\" src=\"http://t3.gstatic.cn/images?q=tbn:k1uzr7ZO_vJpSM:\" width=\"104\" style=\"border-right: 1px solid; border-top: 1px solid; border-left: 1px solid; border-bottom: 1px solid\" alt=\"\" /></a></p>','2009-09-13 23:22:54'),(4,6,NULL,4,'<p>Hello baby</p>','2009-09-15 00:57:17'),(5,6,NULL,4,'<p><img alt=\"\" src=\"http://localhost/qqchong/js/fckeditor/editor/images/smiley/msn/wink_smile.gif\" /></p><p>&nbsp;</p>','2009-09-15 01:05:11'),(7,8,NULL,4,'<p><img alt=\"\" src=\"http://localhost/qqchong/js/fckeditor/editor/images/smiley/msn/sad_smile.gif\" /></p><p>&nbsp;</p>','2009-09-15 08:19:33'),(8,11,NULL,4,'<p><img alt=\"\" src=\"http://localhost/qqchong/js/fckeditor/editor/images/smiley/msn/teeth_smile.gif\" /></p>','2009-09-17 12:48:13');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `builder_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `arrange` int(3) DEFAULT '0',
  `title` varchar(16) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department_FI_1` (`builder_id`),
  KEY `department_FI_2` (`manager_id`),
  CONSTRAINT `department_FK_1` FOREIGN KEY (`builder_id`) REFERENCES `user` (`id`),
  CONSTRAINT `department_FK_2` FOREIGN KEY (`manager_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,4,4,0,'从草丛','万物丰收','2009-09-15 01:01:34');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `title` varchar(16) DEFAULT NULL,
  `content` text,
  `anonymity` tinyint(1) NOT NULL DEFAULT '0',
  `sdel` tinyint(1) NOT NULL DEFAULT '0',
  `rdel` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `message_FI_1` (`sender_id`),
  KEY `message_FI_2` (`reciever_id`),
  CONSTRAINT `message_FK_1` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `message_FK_2` FOREIGN KEY (`reciever_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topic_FI_1` (`department_id`),
  KEY `topic_FI_2` (`user_id`),
  CONSTRAINT `topic_FK_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  CONSTRAINT `topic_FK_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` VALUES (5,1,4,'哈哈啊啊','<p>成功了</p>','2009-09-15 08:29:43');
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `nickname` varchar(16) NOT NULL,
  `sha1_password` varchar(40) DEFAULT NULL,
  `salt` varchar(32) DEFAULT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `name` varchar(16) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `photo` varchar(256) DEFAULT NULL,
  `duty` varchar(256) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `tel` varchar(16) DEFAULT NULL,
  `twitter` varchar(256) DEFAULT NULL,
  `droit` int(3) NOT NULL DEFAULT '0',
  `qq` varchar(32) DEFAULT NULL,
  `msn` varchar(32) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_FI_1` (`department_id`),
  CONSTRAINT `user_FK_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (4,'123@123.com','123','7431a6269b51c56ad1efbd543dfdaa1c42b19bfa','40a32867cf276284f25ac4a20850e639','92789dbd2a92d3aa8906c8e40e919e71','123',1,NULL,'','','','Hello world ',100,'','','2009-09-11 12:55:46'),(5,'xirong.guo@ericsson.com','xirong guo','961d56323783ea97ef56ae66973358ee5fa70795','d4d7564fcacdaa0f12ded4b014d60148',NULL,'xirong guo',1,NULL,'','','','',0,'','','2009-09-17 03:48:39');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2009-09-18  6:19:18
