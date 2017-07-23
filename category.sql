/*
Navicat MySQL Data Transfer

Source Server         : 虚拟机
Source Server Version : 50636
Source Host           : 192.168.1.44:3306
Source Database       : xkkb

Target Server Type    : MYSQL
Target Server Version : 50636
File Encoding         : 65001

Date: 2017-07-23 18:06:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上一级分类的ID',
  `cate_name` varchar(25) NOT NULL DEFAULT '' COMMENT '分类名称',
  `cate_icon` varchar(255) NOT NULL DEFAULT '' COMMENT '分类图片',
  `cate_hover_icon` varchar(255) NOT NULL DEFAULT '' COMMENT '激活时icon',
  `cate_desc` text COMMENT '分类描述',
  `cate_sort` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `cate_level` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '分类层级 1-一级分类 2-二级分类 3-三级分类',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建者ID',
  `type` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '类型 1-产品分类 2-新闻',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-正常  -9-删除',
  `ctime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='商品分类表';

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '0', '室外光缆系列', '/cn/product/dl1.png', '/cn/product/dl2.png', null, '1', '1', '1', '1', '1', '1500710806');
INSERT INTO `category` VALUES ('2', '0', '室内光缆系列', '/cn/product/sn1.png', '/cn/product/sn2.png', null, '2', '1', '1', '1', '1', '1500710806');
INSERT INTO `category` VALUES ('3', '0', '数据中心系列', '/cn/product/yx1.png', '/cn/product/yx2.png', null, '3', '1', '1', '1', '1', '1500710806');
INSERT INTO `category` VALUES ('4', '0', '光纤入户系列', '/cn/product/fj1.png', '/cn/product/fj2.png', null, '4', '1', '1', '1', '1', '1500710806');
INSERT INTO `category` VALUES ('5', '0', '光纤跳线系列', '/cn/product/dx1.png', '/cn/product/dx2.png', null, '5', '1', '1', '1', '1', '1500710806');
INSERT INTO `category` VALUES ('6', '0', '光传输设备', '/cn/product/yq1.png', '/cn/product/yq2.png', null, '6', '1', '1', '1', '1', '1500710806');
INSERT INTO `category` VALUES ('7', '0', '综合布线', '/cn/product/yb1.png', '/cn/product/yb2.png', null, '7', '1', '1', '1', '1', '1500710806');
INSERT INTO `category` VALUES ('8', '0', '安防监控', '/cn/product/jk1.png', '/cn/product/jk2.png', null, '8', '1', '1', '1', '1', '1500710806');
INSERT INTO `category` VALUES ('9', '0', '行业新闻', '/cn/news/news-1.png', '/cn/news/news-2.png', null, '1', '1', '1', '2', '1', '1500710806');
INSERT INTO `category` VALUES ('10', '0', '新科凯邦', '/cn/news/12-2.png', '/cn/news/12.png', null, '2', '1', '1', '2', '1', '1500710806');
