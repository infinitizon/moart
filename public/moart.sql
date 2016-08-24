CREATE DATABASE  IF NOT EXISTS `moart` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `moart`;
-- MySQL dump 10.13  Distrib 5.6.11, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: moart
-- ------------------------------------------------------
-- Server version	5.6.24

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `contact_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `comment` text,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44253266 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (44253264,'Tech','24254624642','infinitizon@yahoo.com','A test quote','Testing what you have just done','2016-08-23 14:40:44'),(44253265,'Tech','24254624642','infinitizon@yahoo.com','A test quote','Testing what you have just done','2016-08-23 14:41:29');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `news_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(100) DEFAULT NULL,
  `news_details` text,
  `create_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20160822 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (20160818,'Test News','A very long news Item','2016-08-18 14:04:06','2016-08-18 14:04:06'),(20160819,'Another news item','Consider getting the very best of news here','2016-08-18 14:05:38','2016-08-18 14:05:38'),(20160820,'A third news item','If you want the very best of new broadcasting, meet with us at our place','2016-08-18 14:05:38','2016-08-18 14:05:38'),(20160821,'Yet another news item for your viewing pleasure','How would you like if we keep giving you the news till you are tired of the news. watch out till we bore you out','2016-08-19 09:03:44',NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `newsletter_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`newsletter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22082018 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (22082016,'aa@bb.com','2016-08-22 16:07:41'),(22082017,'bb@cc.com','2016-08-22 16:59:08');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `services_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `content` text,
  `create_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`services_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3324567 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (3324563,'Services','estates','<h3>REAL ESTATE</h3>\n                    <img src=\"/images/service/estates/1.jpg\" class=\"img-responsive img-rounded img-thumbnail\" style=\"width:30%; margin: 10px;\" align=\"right\" />The strategic business plan of the firm continues to emphasize primary real estate disciplines:\n                    <ul>\n                        <li>Corporate Real Estate Services</li>\n                        <li>Tenant Representation</li>\n                        <li>Development and Redevelopment</li>\n                        <li>Sales and Acquisitions</li>\n                        <li>Marketing of Real Estate Assets</li>\n                    </ul>\n                    <p>Moart is a growing property investor and asset managers. Through real estates, Moart is working to secure its long term local presence in the key markets\n                        of the future. Her goal here is the development and management  of  a  globally  diversified   and  centrally managed real estate portfolio.</p>\n                    <p>Our goal is to continue to acquire properties in target markets that are lucrative and that will improve the diversity, stability and quality of our\n                        portfolio.Ibeju-Lekki, and Eti-Osa axis of Lagos State are our major target due majorly to its rapid development and its emerging economic activities.<br/>\n                        The commercial attractions include:\n                    <ul>\n                        <li>The Lagos Free Trade Zone</li>\n                        <li>Dangote Refinery/Fertilizer Plant</li>\n                        <li>Dangote Sea-Port(s)</li>\n                        <li>Private Sea Port(s)</li>\n                        <li>Private Resort</li>\n                        <li>Presence of various industrial companies</li>\n                        <li>Housing Estates</li>\n                    </ul>\n                    </p>\n                    <p><img src=\"/images/service/estates/3.jpg\" class=\"img-responsive img-rounded img-thumbnail\" style=\"width:30%; margin: 10px;\" align=\"left\" />We will continue to be deliberate in our acquisition strategy, only acquiring assets that improve the quality of the overall portfolio and continue to improve our financial performance.</p>\n                    <p>Our strategy is to pursue great opportunities in our established markets, and then   prudent,   to   invest   in  high-yield  development opportunities in those markets.</p>\n                    <p>In Moart it is our working together that creates a desired future!</p>','2016-08-23 11:49:00','2016-08-23 11:49:00'),(3324564,'Services','agric','<h3>AGRICULTURE</h3>\n                    <p><img src=\"/images/service/agric/1.png\" class=\"img-responsive img-rounded img-thumbnail\" style=\"width:30%; margin: 10px;\" align=\"right\" />Moart has in the last few years, with other investors, established farms in different spheres of agriculture such as livestock, vegetable farming and horticulture. This move has helped to provide employment   and   increase financial status of the investors.</p>\n','2016-08-23 11:49:00','2016-08-23 11:49:00'),(3324565,'Services','construction','<h3>CONSTRUCTION SUPPORT</h3>\n                    <p><img src=\"/images/service/construction/1.png\" class=\"img-responsive img-rounded img-thumbnail\" style=\"width:30%; margin: 10px;\" align=\"right\" />We also provide support on construction sites by providing building materials, supplies  and construction equipments where required to ensure our working together with our clients to get quality result in their construction projects.</p>\n                    <p>Supplies such has sand, cement, gravels, professional services of qualified architects, civil engineers etc.</p>','2016-08-23 11:49:00','2016-08-23 11:49:00'),(3324566,'Services','faqs','\n                    <h3>Frequently Asked Questions</h3>\n                    <ol id=\"accordion\">\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#whoarewe\" data-parent=\"#accordion\" class=\"faq-link\">Who is MOART</a>\n                            <div id=\"whoarewe\" class=\"collapse\"><p>Moart Homes Ise, is a contemporary style mixed density residential development conceived as a gated community, developed and set in beautiful well-tended serviced plots of land.</p><p>It is designed with an approach to creating a balance and harmony between the built dwelling units and the natural open spaces, garden and outdoor play area.</p><p>As an economy plus product package of Moart Company Ltd., it is targeted  at low and medium income groups looking for well specified living space with quality and free finishes</p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#whatwewoffer\" data-parent=\"#accordion\" class=\"faq-link\">What we offer</a>\n                            <div id=\"whatwewoffer\" class=\"collapse\">\n                                <ul>\n                                    <li>Flexible and affordable price</li>\n                                    <li>immediate Habitation</li>\n                                    <li>Immediate Documentation</li>\n                                    <li>Dry Land/No-Rafting</li>\n                                    <li>Proximity to:<ul>\n                                            <li>Lagos free trade zone</li>\n                                            <li>Lagos Sea Port</li>\n                                            <li>Dangote refinery</li>\n                                            <li>Dangote Fertilizer Plant</li>\n                                            <li>Golf Course</li>\n                                            <li>Private Sea-ports</li>\n                                            <li>Lacampine Tropicana, etc.</li>\n                                        </ul></li>\n                                </ul>\n                            </div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#forhowmuch\" data-parent=\"#accordion\" class=\"faq-link\">How much can I get a plot of land</a>\n                            <div id=\"forhowmuch\" class=\"collapse\">\n                                You can own a plot of land for:\n                                <table class=\"table\">\n                                    <tr>\n                                        <td>Outright Payment</td><td><span class=\"money\">N850,000</span></td>\n                                    </tr>\n                                    <tr>\n                                        <td>Installment Payment</td><td><span class=\"money\">N1,000,000</span> (With initial deposit of <span class=\"money\">N200,000</span> and balance spread over 16 months)</td>\n                                    </tr>\n                                </table>\n                            </div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#wherearewe\" data-parent=\"#accordion\" class=\"faq-link\">Where is MOART Homes</a>\n                            <div id=\"wherearewe\" class=\"collapse\"><p>Moart Homes is situated at Ise, few kilometers from LaCampine Tropicana, Lekki LCDA, Ibeju-Lekki, Lagos</p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#whatisaplot\" data-parent=\"#accordion\" class=\"faq-link\">What is the size of a plot at MOART Homes</a>\n                            <div id=\"wherearewe\" class=\"collapse\"><p>600sqm</p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#whatdoiget\" data-parent=\"#accordion\" class=\"faq-link\">What documents will I get after my initial deposit</a>\n                            <div id=\"whatdoiget\" class=\"collapse\"><p>A starter pack comprising of receipt, letter of acknowledgment and contract of sales</p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#otherpayments\" data-parent=\"#accordion\" class=\"faq-link\">What other payments do I make apart from the payment for the land</a>\n                            <div id=\"otherpayments\" class=\"collapse\"><p>\n                                <table class=\"table\">\n                                    <tr>\n                                        <td>Survey plan</td><td><span class=\"money\">N100,000</span></td>\n                                    </tr>\n                                    <tr>\n                                        <td>Developmental and consent fee</td><td>TBD</td>\n                                    </tr>\n                                </table></p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#whatdevisfor\" data-parent=\"#accordion\" class=\"faq-link\">What will the developmental fee be used for</a>\n                            <div id=\"whatdevisfor\" class=\"collapse\"><p>Construction of drainages, kerbs, electrification, street lights, landscaping and provision of road networks within the estate</p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#canIBuild\" data-parent=\"#accordion\" class=\"faq-link\">Can I build any structure on the serviced plot</a>\n                            <div id=\"canIBuild\" class=\"collapse\"><p>No!...You are limited to build residential house within the area designated as residential. Provision of shops in residential houses and building of tenement house type (face me I face you) is not permitted. Building plan must be certified by MOART HOMES </p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#otherbenefits\" data-parent=\"#accordion\" class=\"faq-link\">What other facilities/benefits are obtainable in the estate</a>\n                            <div id=\"otherbenefits\" class=\"collapse\"><p>Perimeter fencing, green beds, security post and a good title</p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#allotments\" data-parent=\"#accordion\" class=\"faq-link\">Is there any provision for group allotments</a>\n                            <div id=\"allotments\" class=\"collapse\"><p>Yes!...group allotments is permissible in a case of registered co-operative societies or companies or such other registered associations</p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#canIdevelop\" data-parent=\"#accordion\" class=\"faq-link\">Can I commence immediate development on my plot as soon as I pay</a>\n                            <div id=\"canIdevelop\" class=\"collapse\"><p>The land has been cleared, road has been set out and plots are ready for immediate usage</p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#whosInCharge\" data-parent=\"#accordion\" class=\"faq-link\">Who is in charge of the maintenance of the estate</a>\n                            <div id=\"whosInCharge\" class=\"collapse\"><p>MOART Company Limited</p></div>\n                        </li>\n                        <li>\n                            <a data-toggle=\"collapse\" href=\"#howToPay\" data-parent=\"#accordion\" class=\"faq-link\">Where do I make payments</a>\n                            <div id=\"howToPay\" class=\"collapse\">\n                                <p>You can make your deposit in any of the underlisted banks or you make a bank draft or cheque in favour of MOART Company Limited\n                                <table class=\"table\">\n                                    <tr>\n                                        <td>FIRST BANK </td><td><span class=\"money\">2021103896</span></td>\n                                    </tr>\n                                    <tr>\n                                        <td>FIDELITY BANK</td><td><span class=\"money\">4011052868</span></td>\n                                    </tr>\n                                </table>\n                                </p>\n                            </div>\n                        </li>\n                    </ol>\n                    <a href=\"#\">NOTE: </a> Anyone subscribing for commercial plots should kindly write to inform the developer on what he/she would want to use the plot(s) of land for<br/>\n                    <h5>For further enquiries <a href=\"<?php echo WEB_ROOT; ?>/contact\">Contact us</a></h5>',NULL,'2016-08-23 11:49:00');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-24 17:29:24
