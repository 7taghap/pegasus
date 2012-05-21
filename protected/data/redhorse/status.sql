/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50162
Source Host           : 127.0.0.1:3306
Source Database       : redhorse

Target Server Type    : MYSQL
Target Server Version : 50162
File Encoding         : 65001

Date: 2012-04-27 15:13:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `status`
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `last_updated_by` varchar(255) DEFAULT NULL,
  `last_updated_date` datetime DEFAULT NULL,
  `status_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES ('1', 'Default', 'Default', '2012-04-02 09:45:35', 'Default', '2012-04-02 09:45:41', 'Active');
INSERT INTO `status` VALUES ('2', 'Default', 'Default', '2012-04-02 09:45:35', 'Default', '2012-04-02 09:45:35', 'InActive');
INSERT INTO `status` VALUES ('3', 'Default', 'Default', '2012-04-02 09:45:35', 'Default', '2012-04-02 09:45:35', 'Deleted');
INSERT INTO `status` VALUES ('5', 'Default', 'Default', '0000-00-00 00:00:00', 'Default', '0000-00-00 00:00:00', 'Pending');
INSERT INTO `status` VALUES ('6', 'Default', 'Default', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'Closed');
INSERT INTO `status` VALUES ('7', 'default', null, null, null, null, 'test');
INSERT INTO `status` VALUES ('8', 'default', null, null, null, null, 'test');
INSERT INTO `status` VALUES ('9', 'default', null, null, null, null, 'test');
INSERT INTO `status` VALUES ('10', 'default', null, null, null, null, 'test');
