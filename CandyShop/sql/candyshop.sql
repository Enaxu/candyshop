/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50548
Source Host           : localhost:3306
Source Database       : candyshop

Target Server Type    : MYSQL
Target Server Version : 50548
File Encoding         : 65001

Date: 2016-06-18 20:22:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `User_name` varchar(255) DEFAULT NULL,
  `User_password` bigint(24) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('xld', '123', '1');
INSERT INTO `account` VALUES ('è®¸è‰³', '123', null);
INSERT INTO `account` VALUES ('xy', '12', null);
INSERT INTO `account` VALUES ('11', '11', null);
INSERT INTO `account` VALUES ('è‰³', '1', null);
INSERT INTO `account` VALUES ('æˆ‘', '1', null);
INSERT INTO `account` VALUES ('é¢', '1', null);

-- ----------------------------
-- Table structure for caiin
-- ----------------------------
DROP TABLE IF EXISTS `caiin`;
CREATE TABLE `caiin` (
  `price_old` bigint(255) NOT NULL COMMENT '原价',
  `price_new` bigint(255) DEFAULT NULL COMMENT '现价',
  `start` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '发货地',
  `end` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '目的地',
  `number` int(16) DEFAULT NULL COMMENT '购买数量够',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of caiin
-- ----------------------------
INSERT INTO `caiin` VALUES ('35', '25', 'æ±Ÿè‹å—äº¬', 'æ±Ÿè‹å—äº¬', '3', 'sweet1', '1');

-- ----------------------------
-- Table structure for shopper
-- ----------------------------
DROP TABLE IF EXISTS `shopper`;
CREATE TABLE `shopper` (
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tel` bigint(24) DEFAULT NULL,
  `z_account` bigint(24) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `place` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of shopper
-- ----------------------------
INSERT INTO `shopper` VALUES ('11', '11', '11', '11', '50.00', 'æ±Ÿè‹å—äº¬');
INSERT INTO `shopper` VALUES ('22', '22', '22', '22', '50.00', 'æ±Ÿè‹å—äº¬');
INSERT INTO `shopper` VALUES ('44', '44', '44', '44', '50.00', 'æ±Ÿè‹å—äº¬');
INSERT INTO `shopper` VALUES ('5', '5', '5', '5', '15.00', 'æ±Ÿè‹å—äº¬');
INSERT INTO `shopper` VALUES ('6', '6', '6', '6', '15.00', 'æ±Ÿè‹å—äº¬');
INSERT INTO `shopper` VALUES ('7', '7', '7', '77', '30.00', 'æ±Ÿè‹å—äº¬');
INSERT INTO `shopper` VALUES ('è®¸è‰³', 'å—äº¬ä¿¡æ¯å·¥ç¨‹å¤§å­¦', '123', '123', '25.00', 'æ±Ÿè‹å—äº¬');
INSERT INTO `shopper` VALUES ('22', '2', '44', '6', '15.00', 'æ±Ÿè‹å—äº¬');

-- ----------------------------
-- Table structure for sweet
-- ----------------------------
DROP TABLE IF EXISTS `sweet`;
CREATE TABLE `sweet` (
  `name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '糖果名称',
  `id` int(16) NOT NULL COMMENT '糖果编号',
  `number` bigint(255) NOT NULL COMMENT '糖果数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sweet
-- ----------------------------
INSERT INTO `sweet` VALUES ('sweet1', '1', '100');
INSERT INTO `sweet` VALUES ('sweet2', '2', '100');
INSERT INTO `sweet` VALUES ('sweet3', '3', '100');
INSERT INTO `sweet` VALUES ('sweet4', '4', '100');
INSERT INTO `sweet` VALUES ('sweet5', '5', '100');
INSERT INTO `sweet` VALUES ('sweet6', '6', '100');
INSERT INTO `sweet` VALUES ('sweet7', '7', '100');
INSERT INTO `sweet` VALUES ('sweet8', '8', '100');
INSERT INTO `sweet` VALUES ('sweet9', '9', '100');
INSERT INTO `sweet` VALUES ('sweet10', '10', '10');
