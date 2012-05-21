/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50162
Source Host           : 127.0.0.1:3306
Source Database       : redhorse

Target Server Type    : MYSQL
Target Server Version : 50162
File Encoding         : 65001

Date: 2012-04-27 15:13:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `unit_conversion`
-- ----------------------------
DROP TABLE IF EXISTS `unit_conversion`;
CREATE TABLE `unit_conversion` (
  `id` int(11) NOT NULL,
  `abbr` varchar(255) DEFAULT NULL,
  `factor` double DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `unit_type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK297866B155F2F434` (`status`),
  KEY `FK297866B1DA3BBC43` (`unit_type`),
  KEY `FK297866B1FC068CA` (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of unit_conversion
-- ----------------------------
INSERT INTO `unit_conversion` VALUES ('1', 'g', '0.0001', 'gram', '1', '1', null);
INSERT INTO `unit_conversion` VALUES ('2', 'kg', '1', 'Kilogram', '1', '1', null);
INSERT INTO `unit_conversion` VALUES ('3', 'ml', '0.0001', 'milliliter', '1', '2', null);
INSERT INTO `unit_conversion` VALUES ('4', 'l', '1', 'Liter', '1', '2', null);
INSERT INTO `unit_conversion` VALUES ('5', 'pc', '1', 'piece', '1', '3', null);
