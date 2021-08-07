/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : ecommerce

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 07/08/2021 02:23:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `price` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `product_detail` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `product` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `image1` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `image2` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `image3` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `image4` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'HUAWEI Watch FIT', '$96.00', 'HUAWEI Watch FIT Bluetooth SmartWatch, 1.64\" Vivid AMOLED Display, Quick-Workout Animations, 10 Days Battery Life, Sport GPS Fitness Tracker, 5 ATM Waterproof, for Android Phone, Graphite Black', 'smartwatch.jpg', 'smartwatch1.jpg', 'smartwatch2.jpg', 'smartwatch3.jpg', 'smartwatch4.jpg');
INSERT INTO `products` VALUES (2, 'Duck ', '$02.00', 'Happy Trees Duck Bath Toy Large Bath Duck Squeak Rubber Duck Baby Shower, 7 Inches', 'duck.jpg', 'duck3.jpg', 'duck2.jpg', 'duck4.jpg', 'duck5.jpg');
INSERT INTO `products` VALUES (3, 'ATM', '$30.00', 'ECOTOB ATM Savings Box, Mini ATM for Real Money, Adult Kids Cash Saving Machine with Gift Card for Boys Girls Kids Toy Coin Reader and Balance Calculator', 'cajero.jpg', 'cajero2.jpg', 'cajero3.jpg', 'cajero4.jpg', 'cajero2.jpg');
INSERT INTO `products` VALUES (4, ' Laptop Backpack', '$31.00', 'Matein Travel Laptop Backpack, Business Anti Theft Slim Durable Laptops Backpack with USB Charging Port, Water Resistant College School Computer Bag Gifts for Men & Women Fits 15.6 Inch Notebook, Grey', 'backpack.jpg', 'backpack1.jpg', 'backpack3.jpg', 'backpack2.jpg', 'backpack4.jpg');
INSERT INTO `products` VALUES (5, 'THERMOS Stainless King Vacuum', '$35.00', 'Thermos vacuum insulation technology for maximum temperature retention hot or cold keeps liquids hot for 24 hours and cold for 24 hours', 'thermo.jpg', 'thermo1.jpg', 'thermo2.jpg', 'thermo3.jpg', 'thermo4.jpg');
INSERT INTO `products` VALUES (6, 'Mob Psycho T-Shirt', '$12.00', 'Mob Psycho Crunchyroll Unisex T-Shirt Exclusive Black and Red', 'mob.jpg', 'mob.jpg', 'mob1.jpg', 'mob3.jpg', 'mob3.jpg');
INSERT INTO `products` VALUES (7, 'Microsoft Surface Laptop 3', '$900.00', '3.5\" Touch-Screen – Intel Core i5 - 8GB Memory - 128GB Solid State Drive (Latest Model) – Platinum with Alcantara', 'surface.png', 'surface1.jpg', 'surface1.png', 'surface3.jpg', 'surface4.jpg');
INSERT INTO `products` VALUES (8, 'Adidas Running Shoe', '$40.00', 'Adidas Men\'s Lite Racer Adapt 3.0 Running Shoe', 'shoe.jpg', 'shoe.jpg', 'shoe4.jpg', 'shoe2.jpg', 'shoe3.jpg');

SET FOREIGN_KEY_CHECKS = 1;
