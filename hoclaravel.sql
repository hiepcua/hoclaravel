/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : hoclaravel

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 14/04/2022 12:14:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Trần Hiệp', 'tranviethiepdz@gmail.com', '2022-04-13 10:18:57', '2022-04-14 03:45:19');
INSERT INTO `users` VALUES (2, 'Hiệp Cua', 'tranviethiep69@gmail.com', '2022-04-13 10:18:53', NULL);
INSERT INTO `users` VALUES (4, 'Hoàng Minh Châu', 'hoangminhchau@gmail.com', '2022-04-14 04:06:26', NULL);

SET FOREIGN_KEY_CHECKS = 1;
