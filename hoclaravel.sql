/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : hoclaravel

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 15/04/2022 01:27:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES (1, 'Administrator');
INSERT INTO `groups` VALUES (2, 'Admin');
INSERT INTO `groups` VALUES (3, 'Content');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `group_id` int NULL DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `status` tinyint NULL DEFAULT 0,
  `trash` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, 'Trần Hiệp', 'tranviethiepdz@gmail.com', '2022-04-13 10:18:57', '2022-04-14 03:45:19', 0, 1);
INSERT INTO `users` VALUES (2, 2, 'Hiệp Cua', 'tranviethiep69@gmail.com', '2022-04-13 10:18:53', NULL, 0, 1);
INSERT INTO `users` VALUES (4, 3, 'Hoàng Minh Châu', 'hoangminhchau@gmail.com', '2022-04-14 04:06:26', NULL, 0, 1);
INSERT INTO `users` VALUES (5, NULL, 'Nguyễn Văn A', 'nguyenvanA@gmail.com', '2022-04-14 08:18:07', NULL, 0, 0);
INSERT INTO `users` VALUES (6, NULL, 'Nguyễn Văn A', 'nguyenvanA@gmail.com', '2022-04-14 08:18:34', NULL, 0, 0);
INSERT INTO `users` VALUES (7, 1, 'Nguyễn Văn A', 'nguyenvanA@gmail.com', '2022-04-14 08:20:10', NULL, 0, 0);
INSERT INTO `users` VALUES (8, 1, 'Nguyễn Chí Hiếu', 'chihieu@gmail.com', '2022-04-14 08:22:17', '2022-04-14 08:24:53', 0, 0);
INSERT INTO `users` VALUES (9, 1, 'Hoàng Văn Từ', 'hoangvantu@gmail.com', NULL, '2022-04-14 08:24:53', 0, 0);
INSERT INTO `users` VALUES (10, 2, 'Lê Tiên Long 1', 'letienlong1@gmail.com', '2022-04-14 12:17:44', '2022-04-14 12:38:26', 1, 0);
INSERT INTO `users` VALUES (11, 2, 'Hồng Minh', 'hongminh@gmail.com', '2022-04-14 17:45:16', NULL, 1, 0);
INSERT INTO `users` VALUES (12, 2, 'Trần Ngọc', 'tranngoc@gmail.com', '2022-04-14 17:45:31', NULL, 1, 0);
INSERT INTO `users` VALUES (13, 3, 'nqvinh', 'nqvinh@gmail.com', '2022-04-14 17:45:47', NULL, 1, 0);

SET FOREIGN_KEY_CHECKS = 1;
