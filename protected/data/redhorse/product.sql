/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50162
Source Host           : 127.0.0.1:3306
Source Database       : redhorse

Target Server Type    : MYSQL
Target Server Version : 50162
File Encoding         : 65001

Date: 2012-04-27 15:12:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `imgfile` varchar(255) DEFAULT NULL,
  `product_desc` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_type` int(11) DEFAULT NULL,
  `shelf` varchar(255) DEFAULT NULL,
  `total_qty_on_hand` float DEFAULT NULL,
  `update_by` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `unit_type` int(11) DEFAULT NULL,
  `unit_type_id` int(11) DEFAULT NULL,
  `order_lvl` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `FKED8DCCEF6DC2AB1F` (`unit_type`),
  KEY `FKED8DCCEF7B80FD69` (`product_category_id`),
  KEY `FKED8DCCEFC336868F` (`unit_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('6', 'testng', '2012-04-09 13:47:23', null, 'product test', 'TESTNG', '1', 'in da room', '10', null, null, '1000', null, '1', null);
INSERT INTO `product` VALUES ('7', 'testng', '2012-04-09 13:50:09', null, 'product test', 'TESTNG', '1', 'in da room', '10', null, null, '1000', null, '1', null);
INSERT INTO `product` VALUES ('8', 'testng', '2012-04-09 21:49:08', null, 'product test', 'TESTNG', '1', 'in da room', '10', null, null, '1000', null, '1', null);
INSERT INTO `product` VALUES ('9', null, null, null, 'cobra energy drink', 'Cobra', '0', 'freezer', '25', null, null, '1000', null, '5', null);
INSERT INTO `product` VALUES ('10', null, null, null, 'chippy', 'chippy', '0', 'gibitay', '20', null, null, '1002', null, '5', null);
INSERT INTO `product` VALUES ('11', null, null, null, 'Piatos', 'piatos', '0', 'gibitay', '20', null, null, '1002', null, '5', null);
INSERT INTO `product` VALUES ('12', 'admin', '2012-04-25 23:01:04', null, 'oil', 'mantika', '0', 'lawm lamisa', '0.2', 'admin', '2012-04-25 23:01:04', '1000', null, '4', null);
INSERT INTO `product` VALUES ('13', 'admin', '2012-04-25 23:04:47', null, 'oil', 'mantika', '0', 'lawm lamisa', '10.2', 'admin', '2012-04-25 23:04:47', '1000', null, '4', null);
