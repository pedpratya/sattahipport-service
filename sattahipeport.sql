/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : sattahipeport

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2015-04-22 10:27:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `areacode`
-- ----------------------------
DROP TABLE IF EXISTS `areacode`;
CREATE TABLE `areacode` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `code` char(10) DEFAULT NULL,
  `bounds` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=308 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of areacode
-- ----------------------------
INSERT INTO `areacode` VALUES ('1', 'A1', '((12.628586727853968, 100.91201148629011), (12.629485041559942, 100.9129320822824))');
INSERT INTO `areacode` VALUES ('2', 'A2', '((12.627688412569963, 100.9120114830564), (12.62858672627594, 100.91293207904846))');
INSERT INTO `areacode` VALUES ('3', 'A3', '((12.626790097285962, 100.91201147982304), (12.627688410991937, 100.91293207581475))');
INSERT INTO `areacode` VALUES ('4', 'A4', '((12.625891782001958, 100.91201147658978), (12.626790095707932, 100.91293207258138))');
INSERT INTO `areacode` VALUES ('5', 'A5', '((12.624993466717953, 100.91201147335687), (12.625891780423931, 100.91293206934813))');
INSERT INTO `areacode` VALUES ('6', 'A6', '((12.624095151433952, 100.91201147012418), (12.624993465139926, 100.91293206611522))');
INSERT INTO `areacode` VALUES ('7', 'A7', '((12.623196836149944, 100.91201146689173), (12.62409514985592, 100.91293206288253))');
INSERT INTO `areacode` VALUES ('8', 'A8', '((12.62229852086594, 100.9120114636595), (12.623196834571917, 100.91293205965007))');
INSERT INTO `areacode` VALUES ('9', 'A9', '((12.621400205581937, 100.9120114604275), (12.622298519287915, 100.91293205641784))');
INSERT INTO `areacode` VALUES ('10', 'A10', '((12.620501890297936, 100.91201145719583), (12.621400204003914, 100.91293205318584))');
INSERT INTO `areacode` VALUES ('11', 'A11', null);
INSERT INTO `areacode` VALUES ('12', 'A12', null);
INSERT INTO `areacode` VALUES ('13', 'A13', null);
INSERT INTO `areacode` VALUES ('14', 'A14', null);
INSERT INTO `areacode` VALUES ('15', 'B1', '((12.628586726276174, 100.91293207258036), (12.62948503998203, 100.91385267180658))');
INSERT INTO `areacode` VALUES ('16', 'B2', '((12.627688410992283, 100.91293206611294), (12.628586724698145, 100.91385266533871))');
INSERT INTO `areacode` VALUES ('17', 'B3', '((12.6267900957084, 100.9129320596461), (12.627688409414258, 100.91385265887129))');
INSERT INTO `areacode` VALUES ('18', 'B4', '((12.62589178042451, 100.91293205317959), (12.626790094130369, 100.91385265240444))');
INSERT INTO `areacode` VALUES ('19', 'B5', '((12.624993465140623, 100.91293204671376), (12.625891778846485, 100.91385264593794))');
INSERT INTO `areacode` VALUES ('20', 'B6', '((12.624095149856737, 100.91293204024839), (12.624993463562596, 100.91385263947211))');
INSERT INTO `areacode` VALUES ('21', 'B7', '((12.623196834572845, 100.91293203378348), (12.624095148278705, 100.91385263300663))');
INSERT INTO `areacode` VALUES ('22', 'B8', '((12.622298519288957, 100.91293202731902), (12.623196832994818, 100.91385262654182))');
INSERT INTO `areacode` VALUES ('23', 'B9', null);
INSERT INTO `areacode` VALUES ('24', 'B10', null);
INSERT INTO `areacode` VALUES ('25', 'B11', null);
INSERT INTO `areacode` VALUES ('26', 'B12', null);
INSERT INTO `areacode` VALUES ('27', 'B13', null);
INSERT INTO `areacode` VALUES ('28', 'B14', null);
INSERT INTO `areacode` VALUES ('29', 'C1', '((12.62858672469838, 100.91385265887061), (12.62948503840412, 100.91477326133077))');
INSERT INTO `areacode` VALUES ('30', 'C2', '((12.627688409414604, 100.91385264916948), (12.628586723120351, 100.91477325162896))');
INSERT INTO `areacode` VALUES ('31', 'C3', '((12.626790094130836, 100.91385263946916), (12.627688407836578, 100.91477324192783))');
INSERT INTO `areacode` VALUES ('32', 'C4', '((12.625891778847064, 100.9138526297694), (12.626790092552806, 100.91477323222739))');
INSERT INTO `areacode` VALUES ('33', 'C5', '((12.624993463563293, 100.91385262007066), (12.625891777269038, 100.91477322252774))');
INSERT INTO `areacode` VALUES ('34', 'C6', '((12.624095148279523, 100.91385261037249), (12.624993461985266, 100.914773212829))');
INSERT INTO `areacode` VALUES ('35', 'C7', '((12.623196832995747, 100.91385260067523), (12.624095146701489, 100.91477320313084))');
INSERT INTO `areacode` VALUES ('36', 'C8', '((12.622298517711975, 100.91385259097854), (12.623196831417717, 100.91477319343358))');
INSERT INTO `areacode` VALUES ('37', 'C9', null);
INSERT INTO `areacode` VALUES ('38', 'C10', null);
INSERT INTO `areacode` VALUES ('39', 'C11', null);
INSERT INTO `areacode` VALUES ('40', 'C12', null);
INSERT INTO `areacode` VALUES ('41', 'C13', null);
INSERT INTO `areacode` VALUES ('42', 'C14', null);
INSERT INTO `areacode` VALUES ('43', 'D1', '((12.628586723120586, 100.91477324516086), (12.62948503682621, 100.91569385085495))');
INSERT INTO `areacode` VALUES ('44', 'D2', '((12.627688407836924, 100.91477323222603), (12.628586721542556, 100.9156938379191))');
INSERT INTO `areacode` VALUES ('45', 'D3', '((12.626790092553273, 100.9147732192921), (12.6276884062589, 100.91569382498437))');
INSERT INTO `areacode` VALUES ('46', 'D4', '((12.625891777269617, 100.9147732063592), (12.626790090975243, 100.91569381205045))');
INSERT INTO `areacode` VALUES ('47', 'D5', '((12.624993461985962, 100.91477319342755), (12.625891775691592, 100.91569379911755))');
INSERT INTO `areacode` VALUES ('48', 'D6', '((12.624095146702308, 100.9147731804967), (12.624993460407936, 100.9156937861859))');
INSERT INTO `areacode` VALUES ('49', 'D7', '((12.623196831418646, 100.91477316756686), (12.624095145124274, 100.91569377325504))');
INSERT INTO `areacode` VALUES ('50', 'D8', '((12.622298516134991, 100.91477315463806), (12.62319682984062, 100.91569376032521))');
INSERT INTO `areacode` VALUES ('51', 'D9', null);
INSERT INTO `areacode` VALUES ('52', 'D10', null);
INSERT INTO `areacode` VALUES ('53', 'D11', null);
INSERT INTO `areacode` VALUES ('54', 'D12', null);
INSERT INTO `areacode` VALUES ('55', 'D13', null);
INSERT INTO `areacode` VALUES ('56', 'D14', null);
INSERT INTO `areacode` VALUES ('57', 'E1', '((12.628586721542792, 100.915693831451), (12.6294850352483, 100.91661444037913))');
INSERT INTO `areacode` VALUES ('58', 'E2', '((12.627688406259246, 100.91569381528257), (12.628586719964762, 100.91661442420923))');
INSERT INTO `areacode` VALUES ('59', 'E3', '((12.62679009097571, 100.91569379911516), (12.627688404681217, 100.9166144080408))');
INSERT INTO `areacode` VALUES ('60', 'E4', '((12.62589177569217, 100.915693782949), (12.62679008939768, 100.91661439187351))');
INSERT INTO `areacode` VALUES ('61', 'E5', '((12.624993460408632, 100.91569376678444), (12.625891774114145, 100.91661437570735))');
INSERT INTO `areacode` VALUES ('62', 'E6', '((12.624095145125093, 100.9156937506209), (12.624993458830605, 100.91661435954279))');
INSERT INTO `areacode` VALUES ('63', 'E7', '((12.623196829841548, 100.9156937344585), (12.624095143547057, 100.91661434337925))');
INSERT INTO `areacode` VALUES ('64', 'E8', '((12.622298514558008, 100.91569371829758), (12.62319682826352, 100.91661432721685))');
INSERT INTO `areacode` VALUES ('65', 'E9', null);
INSERT INTO `areacode` VALUES ('66', 'E10', null);
INSERT INTO `areacode` VALUES ('67', 'E11', null);
INSERT INTO `areacode` VALUES ('68', 'E12', null);
INSERT INTO `areacode` VALUES ('69', 'E13', null);
INSERT INTO `areacode` VALUES ('70', 'E14', null);
INSERT INTO `areacode` VALUES ('71', 'F1', '((12.628586719964998, 100.91661441774113), (12.62948503367039, 100.9175350299032))');
INSERT INTO `areacode` VALUES ('72', 'F2', '((12.627688404681567, 100.9166143983391), (12.62858671838697, 100.91753501049936))');
INSERT INTO `areacode` VALUES ('73', 'F3', '((12.626790089398147, 100.91661437893822), (12.627688403103537, 100.91753499109723))');
INSERT INTO `areacode` VALUES ('74', 'F4', '((12.625891774114724, 100.91661435953881), (12.626790087820117, 100.91753497169657))');
INSERT INTO `areacode` VALUES ('75', 'F5', '((12.6249934588313, 100.91661434014134), (12.625891772536697, 100.91753495229716))');
INSERT INTO `areacode` VALUES ('76', 'F6', '((12.624095143547878, 100.91661432074511), (12.624993457253275, 100.91753493289957))');
INSERT INTO `areacode` VALUES ('77', 'F7', '((12.623196828264449, 100.91661430135014), (12.624095141969843, 100.91753491350346))');
INSERT INTO `areacode` VALUES ('78', 'F8', '((12.622298512981025, 100.9166142819571), (12.62319682668642, 100.91753489410848))');
INSERT INTO `areacode` VALUES ('79', 'F9', '((12.621400197697604, 100.9166142625653), (12.622298511402999, 100.91753487471544))');
INSERT INTO `areacode` VALUES ('80', 'F10', '((12.620501882414176, 100.9166142431751), (12.62140019611958, 100.91753485532354))');
INSERT INTO `areacode` VALUES ('81', 'F11', null);
INSERT INTO `areacode` VALUES ('82', 'F12', null);
INSERT INTO `areacode` VALUES ('83', 'F13', null);
INSERT INTO `areacode` VALUES ('84', 'F14', null);
INSERT INTO `areacode` VALUES ('85', 'G1', '((12.628586718387202, 100.91753500403127), (12.629485032092479, 100.91845561942728))');
INSERT INTO `areacode` VALUES ('86', 'G2', '((12.627688403103889, 100.91753498139553), (12.628586716809176, 100.9184555967895))');
INSERT INTO `areacode` VALUES ('87', 'G3', '((12.626790087820584, 100.91753495876128), (12.627688401525859, 100.91845557415365))');
INSERT INTO `areacode` VALUES ('88', 'G4', '((12.625891772537278, 100.91753493612862), (12.626790086242554, 100.91845555151963))');
INSERT INTO `areacode` VALUES ('89', 'G5', '((12.62499345725397, 100.91753491349823), (12.62589177095925, 100.91845552888697))');
INSERT INTO `areacode` VALUES ('90', 'G6', '((12.624095141970663, 100.91753489086932), (12.624993455675945, 100.91845550625635))');
INSERT INTO `areacode` VALUES ('91', 'G7', '((12.623196826687348, 100.91753486824177), (12.624095140392626, 100.91845548362767))');
INSERT INTO `areacode` VALUES ('92', 'G8', '((12.622298511404042, 100.91753484561661), (12.623196825109321, 100.91845546100012))');
INSERT INTO `areacode` VALUES ('93', 'G9', null);
INSERT INTO `areacode` VALUES ('94', 'G10', null);
INSERT INTO `areacode` VALUES ('95', 'G11', null);
INSERT INTO `areacode` VALUES ('96', 'G12', null);
INSERT INTO `areacode` VALUES ('97', 'G13', null);
INSERT INTO `areacode` VALUES ('98', 'G14', null);
INSERT INTO `areacode` VALUES ('99', 'H1', null);
INSERT INTO `areacode` VALUES ('100', 'H2', null);
INSERT INTO `areacode` VALUES ('101', 'H3', null);
INSERT INTO `areacode` VALUES ('102', 'H4', null);
INSERT INTO `areacode` VALUES ('103', 'H5', null);
INSERT INTO `areacode` VALUES ('104', 'H6', null);
INSERT INTO `areacode` VALUES ('105', 'H7', null);
INSERT INTO `areacode` VALUES ('106', 'H8', null);
INSERT INTO `areacode` VALUES ('107', 'H9', null);
INSERT INTO `areacode` VALUES ('108', 'H10', null);
INSERT INTO `areacode` VALUES ('109', 'H11', null);
INSERT INTO `areacode` VALUES ('110', 'H12', null);
INSERT INTO `areacode` VALUES ('111', 'H13', null);
INSERT INTO `areacode` VALUES ('112', 'H14', null);
INSERT INTO `areacode` VALUES ('113', 'I1', null);
INSERT INTO `areacode` VALUES ('114', 'I2', null);
INSERT INTO `areacode` VALUES ('115', 'I3', null);
INSERT INTO `areacode` VALUES ('116', 'I4', null);
INSERT INTO `areacode` VALUES ('117', 'I5', null);
INSERT INTO `areacode` VALUES ('118', 'I6', null);
INSERT INTO `areacode` VALUES ('119', 'I7', null);
INSERT INTO `areacode` VALUES ('120', 'I8', null);
INSERT INTO `areacode` VALUES ('121', 'I9', null);
INSERT INTO `areacode` VALUES ('122', 'I10', null);
INSERT INTO `areacode` VALUES ('123', 'I12', null);
INSERT INTO `areacode` VALUES ('124', 'I13', null);
INSERT INTO `areacode` VALUES ('125', 'I14', null);
INSERT INTO `areacode` VALUES ('126', 'J1', null);
INSERT INTO `areacode` VALUES ('127', 'J2', null);
INSERT INTO `areacode` VALUES ('128', 'J3', null);
INSERT INTO `areacode` VALUES ('129', 'J4', null);
INSERT INTO `areacode` VALUES ('130', 'J5', null);
INSERT INTO `areacode` VALUES ('131', 'J6', null);
INSERT INTO `areacode` VALUES ('132', 'J7', null);
INSERT INTO `areacode` VALUES ('133', 'J8', null);
INSERT INTO `areacode` VALUES ('134', 'J9', null);
INSERT INTO `areacode` VALUES ('135', 'J10', null);
INSERT INTO `areacode` VALUES ('136', 'J11', null);
INSERT INTO `areacode` VALUES ('137', 'J12', null);
INSERT INTO `areacode` VALUES ('138', 'J13', null);
INSERT INTO `areacode` VALUES ('139', 'J14', null);
INSERT INTO `areacode` VALUES ('140', 'K1', null);
INSERT INTO `areacode` VALUES ('141', 'K2', null);
INSERT INTO `areacode` VALUES ('142', 'K3', null);
INSERT INTO `areacode` VALUES ('143', 'K4', null);
INSERT INTO `areacode` VALUES ('144', 'K5', null);
INSERT INTO `areacode` VALUES ('145', 'K6', null);
INSERT INTO `areacode` VALUES ('146', 'K7', null);
INSERT INTO `areacode` VALUES ('147', 'K8', null);
INSERT INTO `areacode` VALUES ('148', 'K9', null);
INSERT INTO `areacode` VALUES ('149', 'K10', null);
INSERT INTO `areacode` VALUES ('150', 'K11', null);
INSERT INTO `areacode` VALUES ('151', 'K12', null);
INSERT INTO `areacode` VALUES ('152', 'K13', null);
INSERT INTO `areacode` VALUES ('153', 'K14', null);
INSERT INTO `areacode` VALUES ('154', 'L1', null);
INSERT INTO `areacode` VALUES ('155', 'L2', null);
INSERT INTO `areacode` VALUES ('156', 'L3', null);
INSERT INTO `areacode` VALUES ('157', 'L4', null);
INSERT INTO `areacode` VALUES ('158', 'L5', null);
INSERT INTO `areacode` VALUES ('159', 'L6', null);
INSERT INTO `areacode` VALUES ('160', 'L7', null);
INSERT INTO `areacode` VALUES ('161', 'L8', null);
INSERT INTO `areacode` VALUES ('162', 'L9', null);
INSERT INTO `areacode` VALUES ('163', 'L10', null);
INSERT INTO `areacode` VALUES ('164', 'L11', null);
INSERT INTO `areacode` VALUES ('165', 'L12', null);
INSERT INTO `areacode` VALUES ('166', 'L13', null);
INSERT INTO `areacode` VALUES ('167', 'L14', null);
INSERT INTO `areacode` VALUES ('168', 'M1', null);
INSERT INTO `areacode` VALUES ('169', 'M2', null);
INSERT INTO `areacode` VALUES ('170', 'M3', null);
INSERT INTO `areacode` VALUES ('171', 'M4', null);
INSERT INTO `areacode` VALUES ('172', 'M5', null);
INSERT INTO `areacode` VALUES ('173', 'M6', null);
INSERT INTO `areacode` VALUES ('174', 'M7', null);
INSERT INTO `areacode` VALUES ('175', 'M8', null);
INSERT INTO `areacode` VALUES ('176', 'M9', null);
INSERT INTO `areacode` VALUES ('177', 'M10', null);
INSERT INTO `areacode` VALUES ('178', 'M11', null);
INSERT INTO `areacode` VALUES ('179', 'M12', null);
INSERT INTO `areacode` VALUES ('180', 'M13', null);
INSERT INTO `areacode` VALUES ('181', 'M14', null);
INSERT INTO `areacode` VALUES ('182', 'N1', null);
INSERT INTO `areacode` VALUES ('183', 'N2', null);
INSERT INTO `areacode` VALUES ('184', 'N3', null);
INSERT INTO `areacode` VALUES ('185', 'N4', null);
INSERT INTO `areacode` VALUES ('186', 'N5', null);
INSERT INTO `areacode` VALUES ('187', 'N6', null);
INSERT INTO `areacode` VALUES ('188', 'N7', null);
INSERT INTO `areacode` VALUES ('189', 'N8', null);
INSERT INTO `areacode` VALUES ('190', 'N9', null);
INSERT INTO `areacode` VALUES ('191', 'N10', null);
INSERT INTO `areacode` VALUES ('192', 'N11', null);
INSERT INTO `areacode` VALUES ('193', 'N12', null);
INSERT INTO `areacode` VALUES ('194', 'N13', null);
INSERT INTO `areacode` VALUES ('195', 'N14', null);
INSERT INTO `areacode` VALUES ('196', 'O1', null);
INSERT INTO `areacode` VALUES ('197', 'O2', null);
INSERT INTO `areacode` VALUES ('198', 'O3', null);
INSERT INTO `areacode` VALUES ('199', 'O4', null);
INSERT INTO `areacode` VALUES ('200', 'O5', null);
INSERT INTO `areacode` VALUES ('201', 'O6', null);
INSERT INTO `areacode` VALUES ('202', 'O7', null);
INSERT INTO `areacode` VALUES ('203', 'O8', null);
INSERT INTO `areacode` VALUES ('204', 'O9', null);
INSERT INTO `areacode` VALUES ('205', 'O10', null);
INSERT INTO `areacode` VALUES ('206', 'O11', null);
INSERT INTO `areacode` VALUES ('207', 'O12', null);
INSERT INTO `areacode` VALUES ('208', 'O13', null);
INSERT INTO `areacode` VALUES ('209', 'O14', null);
INSERT INTO `areacode` VALUES ('210', 'P1', null);
INSERT INTO `areacode` VALUES ('211', 'P2', null);
INSERT INTO `areacode` VALUES ('212', 'P3', null);
INSERT INTO `areacode` VALUES ('213', 'P4', null);
INSERT INTO `areacode` VALUES ('214', 'P5', null);
INSERT INTO `areacode` VALUES ('215', 'P6', null);
INSERT INTO `areacode` VALUES ('216', 'P7', null);
INSERT INTO `areacode` VALUES ('217', 'P8', null);
INSERT INTO `areacode` VALUES ('218', 'P9', null);
INSERT INTO `areacode` VALUES ('219', 'P10', null);
INSERT INTO `areacode` VALUES ('220', 'P11', null);
INSERT INTO `areacode` VALUES ('221', 'P12', null);
INSERT INTO `areacode` VALUES ('222', 'P13', null);
INSERT INTO `areacode` VALUES ('223', 'P14', null);
INSERT INTO `areacode` VALUES ('224', 'Q1', null);
INSERT INTO `areacode` VALUES ('225', 'Q2', null);
INSERT INTO `areacode` VALUES ('226', 'Q3', null);
INSERT INTO `areacode` VALUES ('227', 'Q4', null);
INSERT INTO `areacode` VALUES ('228', 'Q5', null);
INSERT INTO `areacode` VALUES ('229', 'Q6', null);
INSERT INTO `areacode` VALUES ('230', 'Q7', null);
INSERT INTO `areacode` VALUES ('231', 'Q8', null);
INSERT INTO `areacode` VALUES ('232', 'Q9', null);
INSERT INTO `areacode` VALUES ('233', 'Q10', null);
INSERT INTO `areacode` VALUES ('234', 'Q11', null);
INSERT INTO `areacode` VALUES ('235', 'Q12', null);
INSERT INTO `areacode` VALUES ('236', 'Q13', null);
INSERT INTO `areacode` VALUES ('237', 'Q14', null);
INSERT INTO `areacode` VALUES ('238', 'R1', null);
INSERT INTO `areacode` VALUES ('239', 'R2', null);
INSERT INTO `areacode` VALUES ('240', 'R3', null);
INSERT INTO `areacode` VALUES ('241', 'R4', null);
INSERT INTO `areacode` VALUES ('242', 'R5', null);
INSERT INTO `areacode` VALUES ('243', 'R6', null);
INSERT INTO `areacode` VALUES ('244', 'R7', null);
INSERT INTO `areacode` VALUES ('245', 'R8', null);
INSERT INTO `areacode` VALUES ('246', 'R9', null);
INSERT INTO `areacode` VALUES ('247', 'R10', null);
INSERT INTO `areacode` VALUES ('248', 'R11', null);
INSERT INTO `areacode` VALUES ('249', 'R12', null);
INSERT INTO `areacode` VALUES ('250', 'R13', null);
INSERT INTO `areacode` VALUES ('251', 'R14', null);
INSERT INTO `areacode` VALUES ('252', 'S1', null);
INSERT INTO `areacode` VALUES ('253', 'S2', null);
INSERT INTO `areacode` VALUES ('254', 'S3', null);
INSERT INTO `areacode` VALUES ('255', 'S4', null);
INSERT INTO `areacode` VALUES ('256', 'S5', null);
INSERT INTO `areacode` VALUES ('257', 'S6', null);
INSERT INTO `areacode` VALUES ('258', 'S7', null);
INSERT INTO `areacode` VALUES ('259', 'S8', null);
INSERT INTO `areacode` VALUES ('260', 'S9', null);
INSERT INTO `areacode` VALUES ('261', 'S10', null);
INSERT INTO `areacode` VALUES ('262', 'S11', null);
INSERT INTO `areacode` VALUES ('263', 'S12', null);
INSERT INTO `areacode` VALUES ('264', 'S13', null);
INSERT INTO `areacode` VALUES ('265', 'S14', null);
INSERT INTO `areacode` VALUES ('266', 'T1', null);
INSERT INTO `areacode` VALUES ('267', 'T2', null);
INSERT INTO `areacode` VALUES ('268', 'T3', null);
INSERT INTO `areacode` VALUES ('269', 'T4', null);
INSERT INTO `areacode` VALUES ('270', 'T5', null);
INSERT INTO `areacode` VALUES ('271', 'T6', null);
INSERT INTO `areacode` VALUES ('272', 'T7', null);
INSERT INTO `areacode` VALUES ('273', 'T8', null);
INSERT INTO `areacode` VALUES ('274', 'T9', null);
INSERT INTO `areacode` VALUES ('275', 'T10', null);
INSERT INTO `areacode` VALUES ('276', 'T11', null);
INSERT INTO `areacode` VALUES ('277', 'T12', null);
INSERT INTO `areacode` VALUES ('278', 'T13', null);
INSERT INTO `areacode` VALUES ('279', 'T14', null);
INSERT INTO `areacode` VALUES ('280', 'U1', null);
INSERT INTO `areacode` VALUES ('281', 'U2', null);
INSERT INTO `areacode` VALUES ('282', 'U3', null);
INSERT INTO `areacode` VALUES ('283', 'U4', null);
INSERT INTO `areacode` VALUES ('284', 'U5', null);
INSERT INTO `areacode` VALUES ('285', 'U6', null);
INSERT INTO `areacode` VALUES ('286', 'U7', null);
INSERT INTO `areacode` VALUES ('287', 'U8', null);
INSERT INTO `areacode` VALUES ('288', 'U9', null);
INSERT INTO `areacode` VALUES ('289', 'U10', null);
INSERT INTO `areacode` VALUES ('290', 'U11', null);
INSERT INTO `areacode` VALUES ('291', 'U12', null);
INSERT INTO `areacode` VALUES ('292', 'U13', null);
INSERT INTO `areacode` VALUES ('293', 'U14', null);
INSERT INTO `areacode` VALUES ('294', 'V1', null);
INSERT INTO `areacode` VALUES ('295', 'V2', null);
INSERT INTO `areacode` VALUES ('296', 'V3', null);
INSERT INTO `areacode` VALUES ('297', 'V4', null);
INSERT INTO `areacode` VALUES ('298', 'V5', null);
INSERT INTO `areacode` VALUES ('299', 'V6', null);
INSERT INTO `areacode` VALUES ('300', 'V7', null);
INSERT INTO `areacode` VALUES ('301', 'V8', null);
INSERT INTO `areacode` VALUES ('302', 'V9', null);
INSERT INTO `areacode` VALUES ('303', 'V10', null);
INSERT INTO `areacode` VALUES ('304', 'V11', null);
INSERT INTO `areacode` VALUES ('305', 'V12', null);
INSERT INTO `areacode` VALUES ('306', 'V13', null);
INSERT INTO `areacode` VALUES ('307', 'V14', null);

-- ----------------------------
-- Table structure for `areatenant`
-- ----------------------------
DROP TABLE IF EXISTS `areatenant`;
CREATE TABLE `areatenant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codeid` int(3) DEFAULT NULL,
  `tenantid` int(11) DEFAULT NULL,
  `group` varchar(50) DEFAULT NULL,
  `orgid` int(11) DEFAULT NULL,
  `custid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `codeid` (`codeid`),
  KEY `orgid` (`orgid`),
  CONSTRAINT `areatenant_ibfk_1` FOREIGN KEY (`codeid`) REFERENCES `areacode` (`id`) ON UPDATE NO ACTION,
  CONSTRAINT `areatenant_ibfk_2` FOREIGN KEY (`orgid`) REFERENCES `organization` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of areatenant
-- ----------------------------
INSERT INTO `areatenant` VALUES ('2', '48', '3', null, null, null);
INSERT INTO `areatenant` VALUES ('3', '49', '3', null, null, null);
INSERT INTO `areatenant` VALUES ('7', '63', '3', null, null, null);
INSERT INTO `areatenant` VALUES ('8', '62', '3', null, null, null);
INSERT INTO `areatenant` VALUES ('9', '76', '3', null, null, null);
INSERT INTO `areatenant` VALUES ('11', '160', '3', null, null, null);
INSERT INTO `areatenant` VALUES ('12', '30', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('13', '31', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('14', '32', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('15', '33', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('16', '19', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('17', '20', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('18', '34', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('19', '21', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('20', '35', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('21', '44', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('22', '58', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('23', '72', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('25', '59', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('26', '45', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('27', '46', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('28', '47', '5', null, null, null);
INSERT INTO `areatenant` VALUES ('29', '245', '1', null, null, null);
INSERT INTO `areatenant` VALUES ('30', '231', '1', null, null, null);
INSERT INTO `areatenant` VALUES ('31', '217', '1', null, null, null);
INSERT INTO `areatenant` VALUES ('32', '30', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('33', '31', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('34', '32', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('35', '33', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('36', '34', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('37', '35', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('38', '21', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('39', '20', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('40', '44', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('41', '58', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('42', '72', '6', null, null, null);
INSERT INTO `areatenant` VALUES ('43', '73', '6', null, null, null);

-- ----------------------------
-- Table structure for `department`
-- ----------------------------
DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(9) DEFAULT NULL,
  `depfullname` varchar(100) DEFAULT NULL,
  `depshortname` varchar(50) DEFAULT NULL,
  `depactive` int(1) DEFAULT NULL,
  `orgid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orgid` (`orgid`),
  CONSTRAINT `department_ibfk_1` FOREIGN KEY (`orgid`) REFERENCES `organization` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of department
-- ----------------------------
INSERT INTO `department` VALUES ('1', '001', 'full name', 'name', '1', '1');

-- ----------------------------
-- Table structure for `eportsystem`
-- ----------------------------
DROP TABLE IF EXISTS `eportsystem`;
CREATE TABLE `eportsystem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `systemname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orgid` int(11) DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orgid` (`orgid`),
  CONSTRAINT `eportsystem_ibfk_1` FOREIGN KEY (`orgid`) REFERENCES `organization` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of eportsystem
-- ----------------------------
INSERT INTO `eportsystem` VALUES ('1', '100', 'Customer Web Application', '2', './content/customerManual.php', '1');
INSERT INTO `eportsystem` VALUES ('2', '201', 'Port Management', '2', null, '1');
INSERT INTO `eportsystem` VALUES ('4', '301', 'Customer Relation Management [CRM]', '2', null, '1');
INSERT INTO `eportsystem` VALUES ('5', '401', 'ตรวจนับสินค้า [Tally]', '5', null, '1');
INSERT INTO `eportsystem` VALUES ('6', '501', 'E-Gate', '2', './contents/egateManual.html', '1');

-- ----------------------------
-- Table structure for `organization`
-- ----------------------------
DROP TABLE IF EXISTS `organization`;
CREATE TABLE `organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(9) DEFAULT NULL,
  `orgfullname` varchar(100) DEFAULT NULL,
  `orgshotname` varchar(50) DEFAULT NULL,
  `uperid` int(11) DEFAULT NULL,
  `orgactive` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of organization
-- ----------------------------
INSERT INTO `organization` VALUES ('1', '1001', 'การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ', 'ทพส. - ทร.', '0', '1');
INSERT INTO `organization` VALUES ('2', '1002', 'แผนกการท่า', 'บก.กทส.ฐท.สส.', '1', '1');
INSERT INTO `organization` VALUES ('3', '1003', 'ท่าเรือจุกเสม็ด', 'ทจม.กททส.ฯ', '1', '1');
INSERT INTO `organization` VALUES ('4', '1004', 'แผนกบรรทุกขนถ่าย', 'บทถ.', null, '1');
INSERT INTO `organization` VALUES ('5', '1005', 'แผนกคลังพัก', 'ผ.คลัง', '3', '1');
INSERT INTO `organization` VALUES ('6', '1006', 'แผนกตรวจนับสินค้า', 'ผ.ตรวจสอบ', '5', '1');

-- ----------------------------
-- Table structure for `orgposition`
-- ----------------------------
DROP TABLE IF EXISTS `orgposition`;
CREATE TABLE `orgposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posicode` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `posiname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `posishortn` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orgid` int(11) DEFAULT NULL,
  `posiactive` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orgid` (`orgid`),
  CONSTRAINT `orgposition_ibfk_1` FOREIGN KEY (`orgid`) REFERENCES `organization` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of orgposition
-- ----------------------------
INSERT INTO `orgposition` VALUES ('1', '100301', 'หัวหน้าปฏิบัติการ', 'หน.ฝ่ายปฏิบัติการ', '3', '1');
INSERT INTO `orgposition` VALUES ('2', '100302', 'ผู้ช่วยหัวหน้าปฏิบัติการ', 'ผช.หน.ฝ่ายปฏิบัติการ', '3', '1');
INSERT INTO `orgposition` VALUES ('3', '100303', 'หัวหน้าสำนักงาน', 'หน.สำนักงาน', '3', '1');
INSERT INTO `orgposition` VALUES ('4', '100501', 'หัวหน้าคลังพัก', 'หน.คลัง', '5', '1');
INSERT INTO `orgposition` VALUES ('5', '100601', 'หัวหน้าฝ่ายตรวจนับ', 'หน.ตรวจนับ', '6', '1');

-- ----------------------------
-- Table structure for `pagemanagement`
-- ----------------------------
DROP TABLE IF EXISTS `pagemanagement`;
CREATE TABLE `pagemanagement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `workflowid` int(11) NOT NULL,
  `codepage` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submid` int(11) DEFAULT NULL,
  `lifttime` int(3) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pagemanagement_ibfk_2` (`workflowid`),
  KEY `pagemanagement_ibfk_1` (`submid`),
  CONSTRAINT `pagemanagement_ibfk_1` FOREIGN KEY (`submid`) REFERENCES `subsystemmenu` (`id`) ON UPDATE NO ACTION,
  CONSTRAINT `pagemanagement_ibfk_2` FOREIGN KEY (`workflowid`) REFERENCES `workflow` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pagemanagement
-- ----------------------------

-- ----------------------------
-- Table structure for `ranklist`
-- ----------------------------
DROP TABLE IF EXISTS `ranklist`;
CREATE TABLE `ranklist` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `thname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortth` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shorten` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ranklist
-- ----------------------------
INSERT INTO `ranklist` VALUES ('1', 'จอมพลเรือ', 'Admiral of the Fleet', null, null);
INSERT INTO `ranklist` VALUES ('2', 'พลเรือเอก', 'Admiral', 'พล.ร.อ.', 'Adm.');
INSERT INTO `ranklist` VALUES ('3', 'พลเรือโท', 'Vice Admiral', 'พล.ร.ท.', 'VAdm.');
INSERT INTO `ranklist` VALUES ('4', 'พลเรือตรี', 'Rear Admiral', 'พล.ร.ต.', 'RAdm.');
INSERT INTO `ranklist` VALUES ('5', 'นาวาเอก', 'Captain', 'น.อ.', 'Capt.');
INSERT INTO `ranklist` VALUES ('6', 'นาวาโท', 'Commander', 'น.ท.', 'Cdr.');
INSERT INTO `ranklist` VALUES ('7', 'นาวาตรี', 'Lieutenant Commander', 'น.ต.', 'LCdr.');
INSERT INTO `ranklist` VALUES ('8', 'เรือเอก', 'Lieutenant', 'ร.อ.', 'LT');
INSERT INTO `ranklist` VALUES ('9', 'เรือโท', 'Junior Lieutenant', 'ร.ท.', 'JLT');
INSERT INTO `ranklist` VALUES ('10', 'เรือตรี', 'Sub-Lieutenant', 'ร.ต.', 'SUBLT');
INSERT INTO `ranklist` VALUES ('11', 'พันจ่าเอก', '(Chief Petty Officer First Class)', 'พ.จ.อ.', null);
INSERT INTO `ranklist` VALUES ('12', 'พันจ่าโท', '(Chief Petty Officer Second Class)', 'พ.จ.ท.', null);
INSERT INTO `ranklist` VALUES ('13', 'พันจ่าตรี', '(Chief Petty Officer Third Class)', 'พ.จ.ต.', null);
INSERT INTO `ranklist` VALUES ('14', 'จ่าเอก', '(Petty Officer First Class)', 'จ.อ.', null);
INSERT INTO `ranklist` VALUES ('15', 'จ่าโท', '(Petty Officer Second Class)', 'จ.ท.', null);
INSERT INTO `ranklist` VALUES ('16', 'จ่าตรี', '(Petty Officer Third Class)', 'จ.ต.', null);

-- ----------------------------
-- Table structure for `subsystemmenu`
-- ----------------------------
DROP TABLE IF EXISTS `subsystemmenu`;
CREATE TABLE `subsystemmenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `submenuname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sysmenuid` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sysmenuid` (`sysmenuid`),
  CONSTRAINT `subsystemmenu_ibfk_1` FOREIGN KEY (`sysmenuid`) REFERENCES `systemmenu` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of subsystemmenu
-- ----------------------------
INSERT INTO `subsystemmenu` VALUES ('1', 'Customer Regis Form', '1', '1');
INSERT INTO `subsystemmenu` VALUES ('2', 'Customer Approve', '1', '1');
INSERT INTO `subsystemmenu` VALUES ('4', 'dadfad', '1', '1');
INSERT INTO `subsystemmenu` VALUES ('5', 'Berth Form', '3', '1');
INSERT INTO `subsystemmenu` VALUES ('6', 'E-GateForm_1', '5', '1');

-- ----------------------------
-- Table structure for `systemmenu`
-- ----------------------------
DROP TABLE IF EXISTS `systemmenu`;
CREATE TABLE `systemmenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `systemid` int(11) DEFAULT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `systemid` (`systemid`),
  CONSTRAINT `systemmenu_ibfk_1` FOREIGN KEY (`systemid`) REFERENCES `eportsystem` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of systemmenu
-- ----------------------------
INSERT INTO `systemmenu` VALUES ('1', 'Customer Registration', '1', './contents/customerRegisManual.php', '1');
INSERT INTO `systemmenu` VALUES ('3', 'Download แบบฟอร์ม', '1', './contents/downloadFormManual.php', '1');
INSERT INTO `systemmenu` VALUES ('4', 'อัตราค่าบริการ', '1', null, '1');
INSERT INTO `systemmenu` VALUES ('5', 'E-Gate Form', '6', 'E-GateformManual.php', '1');

-- ----------------------------
-- Table structure for `systemuser`
-- ----------------------------
DROP TABLE IF EXISTS `systemuser`;
CREATE TABLE `systemuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `positionid` int(11) DEFAULT NULL,
  `prefixid` int(3) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loginname` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expiredate` date DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `positionid` (`positionid`),
  KEY `prefixid` (`prefixid`),
  CONSTRAINT `systemuser_ibfk_1` FOREIGN KEY (`positionid`) REFERENCES `orgposition` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `systemuser_ibfk_2` FOREIGN KEY (`prefixid`) REFERENCES `ranklist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of systemuser
-- ----------------------------
INSERT INTO `systemuser` VALUES ('1', '100301-1', '1', '5', 'ณัฐวุฒิ', 'งามวงค์วาน', null, null, null, '1');
INSERT INTO `systemuser` VALUES ('2', '100302-2', '2', '6', 'xxxx', 'yyyy', null, null, null, '1');

-- ----------------------------
-- Table structure for `workflow`
-- ----------------------------
DROP TABLE IF EXISTS `workflow`;
CREATE TABLE `workflow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `systemid` int(11) DEFAULT NULL,
  `workflowname` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `systemid` (`systemid`),
  CONSTRAINT `workflow_ibfk_1` FOREIGN KEY (`systemid`) REFERENCES `eportsystem` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of workflow
-- ----------------------------
