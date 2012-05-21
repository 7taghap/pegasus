/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50162
Source Host           : 127.0.0.1:3306
Source Database       : redhorse

Target Server Type    : MYSQL
Target Server Version : 50162
File Encoding         : 65001

Date: 2012-04-27 15:12:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `product_dtl`
-- ----------------------------
DROP TABLE IF EXISTS `product_dtl`;
CREATE TABLE `product_dtl` (
  `product_dtl_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `last_updated_by` varchar(255) DEFAULT NULL,
  `last_updated_date` datetime DEFAULT NULL,
  `price` double DEFAULT NULL,
  `price_type` int(11) DEFAULT NULL,
  `qty_on_hand` double DEFAULT NULL,
  `selling_qty` double DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `sug_price` double DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `package_type` int(11) DEFAULT NULL,
  `dtl_name` varchar(255) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_dtl_id`),
  KEY `FKA71C728C1A08B99D` (`package_type`),
  KEY `FKA71C728CA09DCD0A` (`product_id`),
  KEY `FKA71C728CFC068CA` (`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_dtl
-- ----------------------------
INSERT INTO `product_dtl` VALUES ('7', 'testng', '2012-04-09 13:50:09', 'testng', null, '2.5', '1', '100', '5.5', null, '5.5', '7', '1', null, '1');
INSERT INTO `product_dtl` VALUES ('8', 'testng', '2012-04-09 21:49:08', 'testng', null, '2.5', '1', '100', '5.5', null, '5.5', '8', '1', null, '1');
INSERT INTO `product_dtl` VALUES ('9', null, null, null, null, '6', '0', '20', '1', null, '6', '10', '5', 'small', '1');
INSERT INTO `product_dtl` VALUES ('10', null, null, null, null, '12', '0', '20', '1', null, '12', '11', '5', 'small', '1');
INSERT INTO `product_dtl` VALUES ('11', 'admin', null, 'admin', '2012-04-25 23:01:04', '5', '0', '1000', '12.5', null, '5', '12', '3', 'bambi', '1');
INSERT INTO `product_dtl` VALUES ('12', 'admin', null, 'admin', '2012-04-25 23:01:04', '35', '0', '1000', '250', null, '30', '12', '3', 'lapad', '1');
