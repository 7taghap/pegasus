/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50162
Source Host           : 127.0.0.1:3306
Source Database       : redhorse

Target Server Type    : MYSQL
Target Server Version : 50162
File Encoding         : 65001

Date: 2012-04-27 15:13:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `unit_type`
-- ----------------------------
DROP TABLE IF EXISTS `unit_type`;
CREATE TABLE `unit_type` (
  `unit_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`unit_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of unit_type
-- ----------------------------
INSERT INTO `unit_type` VALUES ('3', 'User', 'u');
INSERT INTO `unit_type` VALUES ('1', 'Volume', 'v');
INSERT INTO `unit_type` VALUES ('2', 'Weight', 'w');
