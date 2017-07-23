/*
Navicat MySQL Data Transfer

Source Server         : 虚拟机
Source Server Version : 50636
Source Host           : 192.168.1.44:3306
Source Database       : xkkb

Target Server Type    : MYSQL
Target Server Version : 50636
File Encoding         : 65001

Date: 2017-07-23 18:06:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(25) NOT NULL DEFAULT '' COMMENT '商品名称',
  `pro_desc` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `pro_cover_pic` varchar(255) NOT NULL DEFAULT '' COMMENT '封面图',
  `pro_model` varchar(125) NOT NULL DEFAULT '' COMMENT '商品型号',
  `pro_fs_type` varchar(125) NOT NULL DEFAULT '' COMMENT '敷设方式',
  `pro_options` text COMMENT '其他属性',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-正常 -9-删除',
  `ctime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
