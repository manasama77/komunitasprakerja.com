/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80100 (8.1.0)
 Source Host           : localhost:3306
 Source Schema         : komunitasprakerjadb

 Target Server Type    : MySQL
 Target Server Version : 80100 (8.1.0)
 File Encoding         : 65001

 Date: 24/09/2023 21:02:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for jadwals
-- ----------------------------
DROP TABLE IF EXISTS `jadwals`;
CREATE TABLE `jadwals`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_jadwal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jadwals
-- ----------------------------
INSERT INTO `jadwals` VALUES (1, 'Pertemuan 1', 'Alamat 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit mollitia nihil consequuntur nobis quisquam accusamus facere ullam eos accusantium autem esse, non, in delectus adipisci possimus minima omnis perferendis distinctio, fugiat minus voluptas! Tempore eius qui perferendis earum blanditiis officia tempora soluta dicta mollitia ad cum vero, explicabo quisquam nisi doloribus architecto molestias quam facere obcaecati ex quis a. Asperiores, exercitationem nemo? Dolor natus eius ipsa blanditiis, nobis deserunt officia eos, officiis culpa repudiandae iste. Optio fugit molestias culpa a, qui, sequi quo illum dolor autem mollitia repellendus atque maxime quidem sapiente perspiciatis nobis voluptatum aut architecto minus beatae sint!', '2023-09-20 17:00:00', '2023-09-23 16:44:55', '2023-09-23 16:44:55');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_09_18_190123_create_team_tutors_table', 1);
INSERT INTO `migrations` VALUES (7, '2023_09_19_022702_create_panduans_table', 1);
INSERT INTO `migrations` VALUES (8, '2023_09_20_011433_create_jadwals_table', 1);
INSERT INTO `migrations` VALUES (9, '2023_09_20_011958_create_testimonis_table', 1);
INSERT INTO `migrations` VALUES (10, '2023_09_20_025545_create_slider_banners_table', 1);

-- ----------------------------
-- Table structure for panduans
-- ----------------------------
DROP TABLE IF EXISTS `panduans`;
CREATE TABLE `panduans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of panduans
-- ----------------------------
INSERT INTO `panduans` VALUES (1, 'Fugiat laboriosam dicta qui eaque laborum dolorem occaecati.', 'fugiat-laboriosam-dicta-qui-eaque-laborum-dolorem-occaecati', 'Rerum enim et eos debitis. Enim quos vel nostrum et est at. Enim non possimus hic iusto. Itaque neque reprehenderit harum qui est. Ipsa mollitia perspiciatis id eveniet nam doloremque. Expedita et fugiat non et temporibus molestiae et. Repudiandae dolorum qui ut veniam sed veniam. Saepe ut voluptatem veniam saepe cumque deleniti alias excepturi.', 'panduan1.jpg', '2023-09-23 16:44:55', '2023-09-23 16:44:55', NULL);
INSERT INTO `panduans` VALUES (2, 'Hic qui eligendi hic minus.', 'hic-qui-eligendi-hic-minus', 'Unde magnam cupiditate molestiae commodi rem. Est labore officia voluptatem sed enim. Esse dolores nam sit eum eos nemo amet est. Aut minima sequi nam quia omnis. Rerum omnis cupiditate reiciendis non. Dicta nulla sint excepturi id sint doloribus. Sit voluptatum et natus iste doloribus expedita perspiciatis provident. Qui in dolorum et qui. Enim tempora maxime hic nihil aut occaecati. Expedita repudiandae vero et. Aliquam dolor minus porro magni alias. Repellendus eum autem nobis dolore vitae.', 'panduan1.jpg', '2023-09-23 16:44:55', '2023-09-23 16:44:55', NULL);
INSERT INTO `panduans` VALUES (3, 'Test judul', 'ipsum-reprehenderit', '<p>Do nostrum aliquam q.&nbsp;</p>\r\n<p><img class=\"img-responsive\" src=\"../../../assets/img/panduan/description/g7YdLzTVJjt845cSNpT4C0w4DeRRIhTpeVU4undY.png\" alt=\"\" width=\"236\" height=\"214\"></p>', 'RFnSbVP5w8ShmZzNWIiaUEqZRX0fF6Anb4uGCqfL.jpg', '2023-09-23 17:03:44', '2023-09-23 17:52:33', NULL);
INSERT INTO `panduans` VALUES (4, 'Tempor consectetur i', 'tempor-consectetur-i', 'Et tenetur qui dolor.', 'zqHvLK8HdGfPNqN9d77FPghJoQ2bsLRPeT9aYdX8.jpg', '2023-09-24 02:25:23', '2023-09-24 02:25:23', NULL);
INSERT INTO `panduans` VALUES (5, 'Doloribus voluptatem', 'doloribus-voluptatem', 'Sit facere molestiae.', 'zUOM8n4uZKlRfa9bBI0LdXNitpw1NvYg5hw8ytlE.jpg', '2023-09-24 02:25:41', '2023-09-24 02:25:41', NULL);
INSERT INTO `panduans` VALUES (6, 'Est sit delectus o', 'est-sit-delectus-o', 'Ullam ut quos nesciu.', 'VJ5h2ZpZLyjfMcxgVSUrxyOU5tyLrBVRu8Hp07fc.jpg', '2023-09-24 02:25:49', '2023-09-24 02:25:49', NULL);
INSERT INTO `panduans` VALUES (7, 'Qui ipsum tempora s', 'qui-ipsum-tempora-s', 'Facere qui cumque id.', 'awXgZXBslmhniEzhTv5tVTgpRnvW1EPVKC7PeNqc.jpg', '2023-09-24 02:25:59', '2023-09-24 02:25:59', NULL);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for slider_banners
-- ----------------------------
DROP TABLE IF EXISTS `slider_banners`;
CREATE TABLE `slider_banners`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_desktop` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of slider_banners
-- ----------------------------
INSERT INTO `slider_banners` VALUES (1, 'Sample Banner', '#', 'sample_desktop.jpg', 'sample_mobile.jpg', '2023-09-23 16:44:55', '2023-09-23 16:44:55', NULL);

-- ----------------------------
-- Table structure for team_tutors
-- ----------------------------
DROP TABLE IF EXISTS `team_tutors`;
CREATE TABLE `team_tutors`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of team_tutors
-- ----------------------------
INSERT INTO `team_tutors` VALUES (1, 'Tutor 1', 'tutor1.jpg', '2023-09-23 16:44:55', '2023-09-23 16:44:55');
INSERT INTO `team_tutors` VALUES (2, 'Tutor 2', 'tutor2.jpg', '2023-09-23 16:44:55', '2023-09-23 16:44:55');
INSERT INTO `team_tutors` VALUES (3, 'Tutor 3', 'tutor3.jpg', '2023-09-23 16:44:55', '2023-09-23 16:44:55');
INSERT INTO `team_tutors` VALUES (4, 'Briar Bolton', 'wIBNRG2jXr3FGabioj5u0NQ6hy80UzRYFY8nbak9.jpg', '2023-09-24 03:48:06', '2023-09-24 03:51:21');

-- ----------------------------
-- Table structure for testimonis
-- ----------------------------
DROP TABLE IF EXISTS `testimonis`;
CREATE TABLE `testimonis`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimoni` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of testimonis
-- ----------------------------
INSERT INTO `testimonis` VALUES (1, 'Testi 1', 'testimoni1.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae a explicabo eum laudantium deserunt asperiores vel facilis quaerat quae quibusdam?', '2023-09-23 16:44:55', '2023-09-23 16:44:55');
INSERT INTO `testimonis` VALUES (2, 'Testi 2', 'testimoni2.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae a explicabo eum laudantium deserunt asperiores vel facilis quaerat quae quibusdam?', '2023-09-23 16:44:55', '2023-09-23 16:44:55');
INSERT INTO `testimonis` VALUES (3, 'Testi 3', 'testimoni3.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae a explicabo eum laudantium deserunt asperiores vel facilis quaerat quae quibusdam?', '2023-09-23 16:44:55', '2023-09-23 16:44:55');
INSERT INTO `testimonis` VALUES (4, 'Lev Stokes', 'YevPlPmTuonT7ToFCRCCXXxJD7oU8lwrXsPPnMqc.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate magni veniam quis laudantium quam dolorem quo inventore, debitis possimus reprehenderit?', '2023-09-24 15:59:50', '2023-09-24 16:02:29');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Administrator', 'admin', NULL, '$2y$10$9sUPUVp7EJ7Q4afNxJKazOT9Cqf/MRjUgKIIbNCjEFF2qk8F51rqG', NULL, '2023-09-23 16:44:55', '2023-09-24 16:08:00');

SET FOREIGN_KEY_CHECKS = 1;
