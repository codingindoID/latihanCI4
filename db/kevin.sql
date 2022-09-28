/*
 Navicat Premium Data Transfer

 Source Server         : A_LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : kevin

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 21/09/2022 22:13:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas`  (
  `id_kelas` int(255) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `wali_kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelas_created_at` datetime(0) NULL DEFAULT NULL,
  `kelas_updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_kelas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO `kelas` VALUES (1, 'kelas X', 'bu A', '2022-09-21 21:50:29', NULL);
INSERT INTO `kelas` VALUES (2, 'kelas X A', 'Bu B', '2022-09-21 22:07:59', NULL);

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa`  (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `barang_created_at` datetime(0) NULL DEFAULT NULL,
  `barang_update_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_siswa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES (5, '1', 'kevin update', 'batealit edit', '2022-09-21 09:14:51', '2022-09-21 09:57:56');
INSERT INTO `siswa` VALUES (10, '1', 'asdas', 'asdasd', '2022-09-21 09:49:46', '2022-09-21 09:49:46');
INSERT INTO `siswa` VALUES (11, '2', 'asdasd', 'asdasd', '2022-09-21 09:56:57', '2022-09-21 10:08:10');

SET FOREIGN_KEY_CHECKS = 1;
