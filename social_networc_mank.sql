/*
 Navicat Premium Data Transfer

 Source Server         : edgar
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : social_networc_mank

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 09/07/2020 01:44:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `day_month_year` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `personal_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `faculty` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `profession` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'ani', 'sarqsyan', 'a@mail.ru', '', 'sdfs54fsd', NULL, NULL, '$2y$10$YfVgUBqc7MinyN9mt0BhUOy8Kic87U/U3O5Lv5yyAef0ZFB4rRBpe', NULL, 'student', '0');
INSERT INTO `users` VALUES (3, 'anna', 'sarqsyan', 's@mail.ru', '', NULL, NULL, NULL, '$2y$10$5dgE6mxac5Xnhpo69F0fJuuHJSSHvFmYs6tYUUw8Qxg7Z7tmEoXo.', 'https://c7.uihere.com/files/833/38/538/user-profile-computer-software-internet-bot-user.jpg', 'employee', '1');
INSERT INTO `users` VALUES (9, 'edo', 'edo', 'ed.arm.2000@gmail.com', '', 'ds5ffhgf', NULL, NULL, '$2y$10$mcYCBB7izWKowEfGv3/wTORgSU4stsH7Bm/JAvKEZXJCcp5KHSxO6', NULL, 'student', '0');

SET FOREIGN_KEY_CHECKS = 1;
