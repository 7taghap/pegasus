/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50162
Source Host           : 127.0.0.1:3306
Source Database       : redhorse

Target Server Type    : MYSQL
Target Server Version : 50162
File Encoding         : 65001

Date: 2012-04-27 15:12:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `product_category`
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `product_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_type` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `effective_end_date` datetime DEFAULT NULL,
  `effective_start_date` datetime DEFAULT NULL,
  `parent_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1003 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_category
-- ----------------------------
INSERT INTO `product_category` VALUES ('1000', 'beverages', '0', 'softdrinks', null, null, '0');
INSERT INTO `product_category` VALUES ('1001', 'cigarettes', '0', 'Cigarettes', null, null, '0');
INSERT INTO `product_category` VALUES ('1002', 'junk food', '0', 'Junk foods', null, null, '0');
