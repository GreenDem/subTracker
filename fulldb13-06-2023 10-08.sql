#
# TABLE STRUCTURE FOR: categories
#

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `idCategory` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categories` (`idCategory`, `category`) VALUES (1, 'voluptatibus');
INSERT INTO `categories` (`idCategory`, `category`) VALUES (2, 'autem');
INSERT INTO `categories` (`idCategory`, `category`) VALUES (3, 'doloremque');
INSERT INTO `categories` (`idCategory`, `category`) VALUES (4, 'inventore');
INSERT INTO `categories` (`idCategory`, `category`) VALUES (5, 'sit');
INSERT INTO `categories` (`idCategory`, `category`) VALUES (6, 'beatae');
INSERT INTO `categories` (`idCategory`, `category`) VALUES (7, 'est');
INSERT INTO `categories` (`idCategory`, `category`) VALUES (8, 'eius');
INSERT INTO `categories` (`idCategory`, `category`) VALUES (9, 'consequatur');
INSERT INTO `categories` (`idCategory`, `category`) VALUES (10, 'accusantium');


#
# TABLE STRUCTURE FOR: families
#

DROP TABLE IF EXISTS `families`;

CREATE TABLE `families` (
  `idFamily` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idFamily`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `families_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (1, 'animi', 21);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (2, 'et', 13);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (3, 'ipsam', 22);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (4, 'odio', 14);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (5, 'aut', 16);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (6, 'impedit', 5);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (7, 'debitis', 29);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (8, 'inventore', 20);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (9, 'quasi', 8);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (10, 'cumque', 1);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (11, 'dolor', 25);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (12, 'veritatis', 17);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (13, 'veniam', 4);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (14, 'enim', 17);
INSERT INTO `families` (`idFamily`, `name`, `idUser`) VALUES (15, 'veritatis', 20);


#
# TABLE STRUCTURE FOR: labels
#

DROP TABLE IF EXISTS `labels`;

CREATE TABLE `labels` (
  `idLabel` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `idCategory` int(11) NOT NULL,
  PRIMARY KEY (`idLabel`),
  KEY `idCategory` (`idCategory`),
  CONSTRAINT `labels_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `categories` (`idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (1, 'et', 'http://www.stammbuckridge.biz/', '/18fec8ad6bb66f05fedc6e91b91a4716.jpg', 3);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (2, 'dolores', 'http://www.lakin.net/', '/ca3ac0e35f54892eb3f3b5728f7c5ef7.jpg', 4);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (3, 'nam', 'http://ortizgleichner.org/', '/8c32a73acf9fd8d0857e47bc3a989f96.jpg', 5);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (4, 'commodi', 'http://www.conroy.com/', '/8bebeb2c44eae28b1d980be129de84a9.jpg', 10);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (5, 'consequuntur', 'http://carter.info/', '/01eaa0538e024d7fd711709da6c7d19c.jpg', 4);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (6, 'nihil', 'http://www.kertzmann.com/', '/f0263e562f4007ecf90e0eff3ea80cfd.jpg', 1);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (7, 'eos', 'http://jast.com/', '/2915f71bd25b91c7eb825001c971c87a.jpg', 3);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (8, 'accusantium', 'http://bernhard.com/', '/262b22eda6a08d8eec4efca875d3f4da.jpg', 8);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (9, 'et', 'http://www.turcotte.com/', '/cb774cfc1065b6fe6849346729730462.jpg', 9);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (10, 'voluptatem', 'http://gutmann.com/', '/d704818820305b94a3e3770c044dec37.jpg', 6);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (11, 'aut', 'http://welch.com/', '/2951977b74d5833d22240387f93a83f5.jpg', 2);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (12, 'quis', 'http://www.muller.com/', '/6b680fa8879c24fc67c67dd0f9be0646.jpg', 1);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (13, 'inventore', 'http://kutchkassulke.com/', '/609c9916c7994bd109e19c21df5f710f.jpg', 2);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (14, 'quasi', 'http://www.dicki.com/', '/f806222b2feb9ee09120f5a9aef4af34.jpg', 5);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (15, 'sit', 'http://www.greenfeldermclaughlin.com/', '/8ae6ae90de9017091e491cc021484220.jpg', 3);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (16, 'ex', 'http://kuphalkuhic.net/', '/a6a569d021fd356b0efb0641e2d3c520.jpg', 9);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (17, 'ex', 'http://crooks.net/', '/9fbd547f0b3055e779757de59c4f3bee.jpg', 4);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (18, 'veritatis', 'http://schaefer.biz/', '/21dac5f90dcf7e4eb41808ab22ce7cbb.jpg', 5);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (19, 'ducimus', 'http://halvorson.com/', '/716315516b80a19b41b4ac8192ec75ef.jpg', 7);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (20, 'dolor', 'http://robel.net/', '/b01461ebe5c1511ab912cd3515cad48a.jpg', 1);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (21, 'quis', 'http://www.kassulke.org/', '/7a469cd1e963677e7afe529a8823eb13.jpg', 6);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (22, 'dolores', 'http://www.roweoconner.info/', '/860adda68c2a6dc429640ff99792743d.jpg', 5);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (23, 'soluta', 'http://www.wiegand.com/', '/bd5b62b0663d5fa016a44c1c1da342e4.jpg', 1);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (24, 'culpa', 'http://haucksatterfield.com/', '/d98a379bf6b0c69d3f76833acf0853d2.jpg', 6);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (25, 'et', 'http://www.boehmfisher.com/', '/80041ba9b3716463342406efe0ed09b6.jpg', 4);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (26, 'omnis', 'http://kreigeraltenwerth.com/', '/3731afb4284dc289029ab0db79e24c2b.jpg', 4);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (27, 'excepturi', 'http://hills.com/', '/a3c07ed4605b8e4c1e4ac285fda1b28c.jpg', 7);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (28, 'suscipit', 'http://nicolas.com/', '/381bb984775b6c1dcb08cde83eafb486.jpg', 6);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (29, 'rerum', 'http://hickle.info/', '/0b2f6db987ba4d7376101c3cddacdf4f.jpg', 7);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (30, 'ipsa', 'http://kerluke.biz/', '/36df882675ad580c6cf3a3d4a8608ac1.jpg', 1);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (31, 'dignissimos', 'http://www.feilshanahan.com/', '/024c344b5a5a436f2458c0c224c3358c.jpg', 7);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (32, 'similique', 'http://www.lockman.org/', '/e9444bd6b02f4300c9cc02411d42b520.jpg', 4);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (33, 'omnis', 'http://kulasupton.com/', '/3658ac20877e8f9312b45aca0d631708.jpg', 7);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (34, 'aut', 'http://www.gleason.info/', '/7578e8daea112d98fffeeeb06c9596fe.jpg', 5);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (35, 'quia', 'http://www.tremblay.com/', '/af8fbd7517d2f267e83f65605feb5885.jpg', 9);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (36, 'illum', 'http://www.bednar.com/', '/ca438a039b324bd7d31200e78c228746.jpg', 2);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (37, 'occaecati', 'http://www.hoeger.com/', '/c14b9dae29ad22b38b52b9999417bbcb.jpg', 7);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (38, 'minus', 'http://www.harveynitzsche.com/', '/57cedb24f9f4619b84e866ce26a8d300.jpg', 2);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (39, 'rerum', 'http://www.white.com/', '/251a094ec7e9971f56b59f704838bf6f.jpg', 4);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (40, 'temporibus', 'http://leuschkeernser.net/', '/93f0aef454eec1e1f388d3e92c02615c.jpg', 7);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (41, 'in', 'http://www.block.com/', '/eba11dc2d30244259f27e4007f8185ba.jpg', 9);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (42, 'voluptatem', 'http://www.purdyjohnston.info/', '/c4d8818195281de27af6d3a6dc5b5114.jpg', 4);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (43, 'possimus', 'http://rohan.info/', '/f6c0649bac76c9c9df4ed3322a83586a.jpg', 2);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (44, 'sit', 'http://quigleycronin.com/', '/10697a7e0be118f1910575005cec6035.jpg', 4);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (45, 'nisi', 'http://www.rice.com/', '/de730b7d01cd18193d92d4318a2331d1.jpg', 2);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (46, 'ullam', 'http://www.larson.net/', '/1c007d97084cf2a8864a34b434f48461.jpg', 10);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (47, 'et', 'http://www.kochpurdy.com/', '/8cbbd3a368c510bacdd7b4d9e94bcb2f.jpg', 7);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (48, 'itaque', 'http://www.vandervortrohan.net/', '/1860a12827c435e76862a4dd9f3e1fa3.jpg', 4);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (49, 'nulla', 'http://www.gulgowskischamberger.biz/', '/a5932f4606295c3be7ec35a5d2cc4f4b.jpg', 3);
INSERT INTO `labels` (`idLabel`, `label`, `url`, `logo`, `idCategory`) VALUES (50, 'magnam', 'http://www.leffler.com/', '/b5f69963316301069b3264b6801a907b.jpg', 3);


#
# TABLE STRUCTURE FOR: logs
#

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `idLog` int(11) NOT NULL AUTO_INCREMENT,
  `tariffs` decimal(5,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `idRate` int(11) NOT NULL,
  `idSubscription` int(11) NOT NULL,
  PRIMARY KEY (`idLog`),
  KEY `idRate` (`idRate`),
  KEY `idSubscription` (`idSubscription`),
  CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`idRate`) REFERENCES `rates` (`idRate`),
  CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`idSubscription`) REFERENCES `subscriptions` (`idSubscription`)
) ENGINE=InnoDB AUTO_INCREMENT=501 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (401, '8.00', '2009-02-15 15:01:42', 1, 52);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (402, '2.00', '1997-02-27 14:54:29', 2, 43);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (403, '5.00', '2017-03-06 22:12:09', 3, 21);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (404, '0.00', '1977-07-07 13:39:47', 4, 93);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (405, '1.00', '2003-07-28 16:57:28', 5, 27);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (406, '4.00', '2010-04-08 05:41:25', 6, 33);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (407, '7.00', '2008-07-30 10:34:35', 7, 74);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (408, '4.00', '1983-10-08 04:58:51', 8, 23);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (409, '0.00', '2015-10-11 16:25:54', 9, 41);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (410, '5.00', '1973-11-12 00:33:59', 10, 83);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (411, '4.00', '2009-08-11 20:55:32', 1, 89);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (412, '7.00', '1984-07-24 18:33:53', 2, 27);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (413, '0.00', '2010-01-02 04:27:18', 3, 38);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (414, '3.00', '1985-11-11 11:45:09', 4, 18);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (415, '4.00', '1990-09-23 15:24:18', 5, 82);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (416, '3.00', '2017-08-03 14:58:02', 6, 46);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (417, '9.00', '2004-12-04 18:50:01', 7, 37);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (418, '5.00', '1995-06-12 04:17:07', 8, 1);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (419, '9.00', '1973-01-31 17:53:12', 9, 73);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (420, '4.00', '2002-07-13 22:43:12', 10, 55);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (421, '3.00', '2004-03-26 00:52:25', 1, 34);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (422, '1.00', '1994-02-22 18:58:43', 2, 75);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (423, '1.00', '1982-08-09 01:09:29', 3, 92);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (424, '9.00', '1983-12-17 16:36:13', 4, 89);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (425, '0.00', '1991-07-27 21:11:49', 5, 97);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (426, '4.00', '2004-04-23 15:38:29', 6, 55);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (427, '2.00', '2021-02-10 05:05:20', 7, 86);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (428, '6.00', '2012-05-16 07:04:18', 8, 87);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (429, '7.00', '2021-08-17 06:15:56', 9, 4);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (430, '1.00', '2006-09-23 17:55:28', 10, 69);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (431, '3.00', '2019-08-25 20:44:08', 1, 58);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (432, '8.00', '2021-03-25 07:08:08', 2, 59);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (433, '8.00', '1988-11-23 13:25:03', 3, 16);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (434, '6.00', '1983-01-17 02:36:09', 4, 5);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (435, '5.00', '1975-07-06 23:16:59', 5, 9);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (436, '0.00', '2018-04-10 10:28:47', 6, 91);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (437, '7.00', '1973-10-28 15:08:51', 7, 17);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (438, '2.00', '1974-06-01 05:07:26', 8, 32);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (439, '0.00', '1993-03-08 19:14:14', 9, 97);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (440, '7.00', '2013-05-06 08:47:44', 10, 10);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (441, '7.00', '1976-01-15 13:05:26', 1, 3);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (442, '7.00', '2004-01-05 10:48:01', 2, 54);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (443, '2.00', '1971-01-27 09:38:03', 3, 13);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (444, '9.00', '1976-02-20 05:12:17', 4, 38);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (445, '6.00', '1997-01-17 22:06:29', 5, 46);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (446, '9.00', '1977-10-18 18:20:39', 6, 65);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (447, '9.00', '2019-01-06 11:37:33', 7, 96);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (448, '4.00', '1996-03-26 05:44:06', 8, 94);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (449, '3.00', '2007-03-06 04:31:31', 9, 25);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (450, '9.00', '1970-05-27 03:54:28', 10, 18);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (451, '1.00', '1993-03-02 02:06:25', 1, 56);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (452, '3.00', '2017-03-25 16:17:29', 2, 77);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (453, '0.00', '2008-06-26 16:09:38', 3, 32);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (454, '1.00', '1997-02-12 00:09:38', 4, 65);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (455, '6.00', '1975-10-31 01:51:06', 5, 64);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (456, '9.00', '1998-07-23 18:14:19', 6, 2);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (457, '3.00', '1999-02-10 19:20:12', 7, 42);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (458, '3.00', '1973-08-10 15:16:52', 8, 57);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (459, '0.00', '2005-11-12 01:46:52', 9, 29);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (460, '5.00', '1994-07-03 23:13:06', 10, 86);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (461, '4.00', '2011-01-03 19:14:49', 1, 62);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (462, '1.00', '1993-03-27 19:04:14', 2, 31);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (463, '9.00', '2009-05-11 20:34:21', 3, 41);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (464, '2.00', '2016-06-28 19:56:12', 4, 70);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (465, '4.00', '2005-07-15 15:58:59', 5, 28);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (466, '9.00', '1990-06-17 22:06:02', 6, 34);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (467, '2.00', '2016-04-04 05:29:38', 7, 18);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (468, '2.00', '1998-10-24 19:37:16', 8, 76);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (469, '8.00', '2021-09-03 03:57:59', 9, 28);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (470, '2.00', '1996-05-08 16:35:29', 10, 76);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (471, '6.00', '2018-09-01 23:54:51', 1, 51);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (472, '9.00', '2022-02-01 02:41:51', 2, 14);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (473, '2.00', '1996-09-26 10:53:40', 3, 80);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (474, '7.00', '1988-11-30 03:28:16', 4, 37);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (475, '9.00', '1982-06-16 21:38:42', 5, 17);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (476, '1.00', '1983-06-30 11:07:16', 6, 75);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (477, '9.00', '1973-12-23 22:29:09', 7, 98);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (478, '6.00', '2001-10-31 08:55:51', 8, 1);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (479, '4.00', '1980-11-15 18:50:25', 9, 65);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (480, '7.00', '1977-11-23 14:45:27', 10, 46);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (481, '7.00', '2012-06-28 01:39:40', 1, 55);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (482, '1.00', '1982-11-15 03:18:17', 2, 90);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (483, '8.00', '1992-10-09 01:40:51', 3, 85);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (484, '8.00', '1989-11-07 23:27:22', 4, 79);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (485, '9.00', '1975-07-05 22:08:37', 5, 81);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (486, '1.00', '1995-11-11 00:55:10', 6, 86);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (487, '4.00', '2005-02-09 23:03:20', 7, 100);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (488, '9.00', '1986-03-13 11:23:30', 8, 27);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (489, '7.00', '2006-08-23 08:39:14', 9, 32);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (490, '6.00', '1985-12-10 23:21:28', 10, 39);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (491, '5.00', '2022-07-13 07:41:13', 1, 69);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (492, '6.00', '1982-03-02 15:24:16', 2, 76);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (493, '9.00', '1989-12-29 09:38:50', 3, 53);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (494, '8.00', '2005-03-06 15:16:53', 4, 61);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (495, '1.00', '2001-03-31 18:20:21', 5, 36);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (496, '0.00', '2005-12-07 19:09:42', 6, 42);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (497, '4.00', '2022-11-03 19:10:57', 7, 25);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (498, '9.00', '1972-12-27 15:17:13', 8, 44);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (499, '2.00', '1998-07-04 13:32:15', 9, 14);
INSERT INTO `logs` (`idLog`, `tariffs`, `created_at`, `idRate`, `idSubscription`) VALUES (500, '2.00', '2002-08-27 02:57:48', 10, 92);


#
# TABLE STRUCTURE FOR: rates
#

DROP TABLE IF EXISTS `rates`;

CREATE TABLE `rates` (
  `idRate` int(11) NOT NULL AUTO_INCREMENT,
  `rates` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idRate`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `rates` (`idRate`, `rates`) VALUES (1, 'paly');
INSERT INTO `rates` (`idRate`, `rates`) VALUES (2, 'zlng');
INSERT INTO `rates` (`idRate`, `rates`) VALUES (3, 'tmfq');
INSERT INTO `rates` (`idRate`, `rates`) VALUES (4, 'ssrd');
INSERT INTO `rates` (`idRate`, `rates`) VALUES (5, 'vgqw');
INSERT INTO `rates` (`idRate`, `rates`) VALUES (6, 'glqw');
INSERT INTO `rates` (`idRate`, `rates`) VALUES (7, 'ujrh');
INSERT INTO `rates` (`idRate`, `rates`) VALUES (8, 'nbnz');
INSERT INTO `rates` (`idRate`, `rates`) VALUES (9, 'ersv');
INSERT INTO `rates` (`idRate`, `rates`) VALUES (10, 'bqjn');


#
# TABLE STRUCTURE FOR: subscriptions
#

DROP TABLE IF EXISTS `subscriptions`;

CREATE TABLE `subscriptions` (
  `idSubscription` int(11) NOT NULL AUTO_INCREMENT,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `date_payment` date DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `idFamily` int(11) DEFAULT NULL,
  `idLabel` int(11) NOT NULL,
  `idRate` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSubscription`),
  KEY `idFamily` (`idFamily`),
  KEY `idLabel` (`idLabel`),
  KEY `idRate` (`idRate`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `subscriptions_ibfk_1` FOREIGN KEY (`idFamily`) REFERENCES `families` (`idFamily`),
  CONSTRAINT `subscriptions_ibfk_2` FOREIGN KEY (`idLabel`) REFERENCES `labels` (`idLabel`),
  CONSTRAINT `subscriptions_ibfk_3` FOREIGN KEY (`idRate`) REFERENCES `rates` (`idRate`),
  CONSTRAINT `subscriptions_ibfk_4` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (1, '1997-04-18', '1992-02-17', '2000-07-22', '999.99', '2018-04-14 10:21:08', '2000-08-13 09:40:08', 13, 1, 1, 1);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (2, '2016-02-28', '1989-01-06', '1971-06-19', '3.57', '2008-09-30 11:03:21', '2002-08-06 07:39:30', 8, 2, 2, 2);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (3, '2011-11-23', '1993-02-06', '2008-09-07', '999.99', '2003-08-28 07:39:36', '2006-08-31 10:35:57', 3, 3, 3, 3);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (4, '2019-05-04', '2019-06-08', '1998-03-31', '1.00', '2019-08-01 18:35:46', '1983-06-22 13:14:40', 8, 4, 4, 4);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (5, '2008-10-26', '1997-03-05', '1975-04-27', '999.99', '1997-04-16 18:45:37', '1975-12-21 08:03:29', 11, 5, 5, 5);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (6, '2009-07-12', '1979-07-15', '1992-02-24', '999.99', '2013-04-26 20:13:04', '1970-04-23 02:14:08', 14, 6, 6, 6);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (7, '2009-02-28', '1993-06-06', '2001-01-08', '999.99', '2017-11-04 23:09:02', '2011-06-04 05:46:45', 3, 7, 7, 7);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (8, '1985-10-01', '1971-03-01', '1996-09-07', '455.28', '1974-10-29 01:20:26', '1971-04-06 20:39:25', 3, 8, 8, 8);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (9, '1987-02-12', '1999-12-18', '1973-11-10', '0.00', '1983-05-21 02:06:24', '2009-03-07 19:12:21', 4, 9, 9, 9);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (10, '2005-04-25', '1986-09-04', '2018-04-06', '5.29', '2009-08-12 14:34:19', '1980-03-01 10:12:31', 3, 10, 10, 10);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (11, '2010-05-17', '1979-10-03', '1984-11-12', '7.60', '2002-07-19 07:14:33', '1989-02-03 00:54:06', 14, 11, 1, 11);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (12, '2003-06-08', '2018-07-28', '2019-01-11', '999.99', '1984-09-15 04:33:10', '2006-12-21 03:54:13', 12, 12, 2, 12);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (13, '2004-10-22', '2007-05-30', '1972-09-01', '999.99', '1973-03-27 18:11:28', '1973-09-17 08:04:40', 15, 13, 3, 13);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (14, '1979-12-21', '1987-01-27', '1994-10-05', '544.00', '1990-05-16 11:39:49', '2019-02-06 18:50:01', 12, 14, 4, 14);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (15, '2014-04-09', '2006-11-21', '2016-01-29', '3.61', '1984-05-19 11:14:08', '1999-02-04 11:58:22', 9, 15, 5, 15);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (16, '1980-07-07', '2019-01-12', '1995-04-14', '0.00', '2005-04-29 10:15:53', '1985-03-27 12:46:25', 10, 16, 6, 16);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (17, '1982-07-06', '1984-01-07', '1979-12-30', '999.99', '1992-07-14 16:01:46', '1984-07-30 20:10:11', 11, 17, 7, 17);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (18, '1972-08-17', '1974-08-22', '1983-02-23', '0.00', '2004-06-14 03:49:52', '1996-01-08 11:48:50', 9, 18, 8, 18);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (19, '1978-08-18', '1975-05-20', '1985-08-03', '332.21', '1972-11-15 14:56:51', '2001-09-16 10:12:20', 9, 19, 9, 19);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (20, '1994-06-13', '1989-12-09', '1998-09-09', '999.99', '1988-11-17 04:41:38', '2002-04-11 15:28:15', 14, 20, 10, 20);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (21, '2022-03-31', '2008-08-01', '1991-08-24', '999.99', '1994-05-08 09:41:08', '1976-04-14 06:33:46', 11, 21, 1, 21);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (22, '2011-03-20', '2012-06-08', '2011-08-18', '999.99', '1997-09-18 15:21:10', '1980-03-24 21:13:44', 13, 22, 2, 22);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (23, '1979-10-24', '1972-04-16', '1993-08-26', '1.50', '1983-05-30 02:09:08', '2006-02-15 20:10:01', 10, 23, 3, 23);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (24, '2001-09-09', '1999-10-10', '2004-03-01', '144.57', '2012-04-21 03:41:16', '2018-04-25 01:47:17', 6, 24, 4, 24);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (25, '1985-09-10', '1987-01-29', '1972-06-24', '999.99', '1974-09-26 00:49:02', '2019-02-21 09:33:02', 9, 25, 5, 25);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (26, '1988-10-31', '1987-10-07', '1985-05-06', '999.99', '2016-03-21 07:36:38', '1972-09-02 08:43:55', 10, 26, 6, 26);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (27, '1991-11-08', '1990-01-06', '2018-05-01', '607.10', '1979-12-11 19:40:39', '2016-05-08 19:26:06', 3, 27, 7, 27);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (28, '1996-11-30', '1991-09-13', '1986-11-28', '999.99', '2001-04-15 12:09:05', '1986-02-03 15:48:17', 11, 28, 8, 28);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (29, '1970-07-24', '2022-03-24', '2000-05-08', '0.00', '2021-08-13 08:37:03', '1983-02-10 09:50:27', 6, 29, 9, 29);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (30, '1971-01-03', '1970-09-09', '2015-04-15', '103.19', '1970-05-03 01:30:13', '1980-08-07 23:39:34', 2, 30, 10, 30);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (31, '1981-11-17', '2011-04-20', '2018-09-26', '37.75', '1995-10-05 21:23:38', '1978-02-14 14:03:01', 15, 31, 1, 1);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (32, '2007-08-11', '1997-03-14', '1990-06-20', '0.00', '1986-06-22 17:01:02', '2008-10-11 19:19:32', 10, 32, 2, 2);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (33, '1975-05-03', '1985-10-25', '2010-04-06', '1.53', '1998-08-07 12:23:07', '2007-05-22 04:54:53', 6, 33, 3, 3);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (34, '1996-02-20', '1972-09-15', '1978-07-05', '9.30', '2011-06-09 16:44:59', '2004-08-26 02:28:17', 8, 34, 4, 4);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (35, '2007-12-30', '1985-08-31', '1970-11-05', '5.28', '2021-01-06 23:13:13', '1974-12-08 11:07:50', 7, 35, 5, 5);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (36, '2015-09-15', '1993-09-08', '2012-06-22', '999.99', '2007-08-06 04:05:03', '1993-07-06 02:40:24', 2, 36, 6, 6);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (37, '1970-02-26', '2022-06-10', '2007-07-13', '823.88', '2007-05-26 02:56:20', '2021-06-19 08:41:28', 11, 37, 7, 7);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (38, '2018-05-25', '1982-09-14', '1990-11-05', '999.99', '1989-03-08 16:00:07', '1989-07-15 23:11:53', 12, 38, 8, 8);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (39, '1972-11-26', '1980-11-08', '2007-08-13', '0.00', '2005-04-30 12:33:11', '1992-01-10 19:47:27', 11, 39, 9, 9);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (40, '2010-12-30', '1998-07-27', '1994-02-10', '417.43', '2011-08-23 03:43:11', '1970-12-20 03:33:32', 13, 40, 10, 10);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (41, '2000-02-29', '1999-03-09', '2007-02-20', '59.81', '1988-06-12 15:38:03', '2022-03-16 01:06:35', 3, 41, 1, 11);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (42, '1998-05-27', '2020-09-07', '1986-06-19', '999.99', '1994-05-31 21:55:24', '1979-09-09 15:52:48', 12, 42, 2, 12);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (43, '2002-07-17', '1997-05-24', '2001-12-13', '999.99', '2014-11-29 13:49:40', '2003-12-15 06:55:29', 11, 43, 3, 13);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (44, '2017-06-30', '1999-10-09', '1985-12-04', '999.99', '2001-12-31 02:12:14', '1976-11-01 17:54:59', 14, 44, 4, 14);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (45, '1998-11-18', '1988-05-26', '1994-02-28', '38.13', '1975-01-12 17:41:43', '1982-06-07 17:43:49', 9, 45, 5, 15);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (46, '1972-11-20', '2019-10-24', '2021-02-24', '999.99', '2000-08-05 15:30:19', '1973-02-16 23:44:47', 12, 46, 6, 16);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (47, '1996-10-21', '1986-06-20', '2007-05-08', '999.99', '1985-10-07 22:10:17', '2012-11-26 11:09:59', 12, 47, 7, 17);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (48, '1999-12-15', '2020-01-12', '1974-04-24', '999.99', '2018-04-01 23:47:33', '1984-10-03 01:51:27', 15, 48, 8, 18);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (49, '2008-10-15', '2001-08-04', '2011-05-06', '999.99', '1982-01-12 10:43:28', '1981-08-07 15:22:53', 7, 49, 9, 19);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (50, '1996-02-10', '1991-01-17', '2020-09-25', '0.00', '2014-11-15 19:30:25', '1983-12-26 20:10:52', 14, 50, 10, 20);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (51, '1997-08-21', '2015-08-29', '2023-05-14', '244.57', '2017-03-31 21:17:08', '1995-12-09 10:13:58', 2, 1, 1, 21);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (52, '1985-07-25', '2004-12-19', '1996-11-10', '5.44', '2007-06-25 15:58:58', '1999-02-08 07:36:25', 4, 2, 2, 22);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (53, '1985-06-28', '1993-11-07', '1971-10-08', '999.99', '1985-09-14 06:21:37', '2010-05-17 09:45:42', 12, 3, 3, 23);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (54, '1994-09-19', '1989-09-28', '1977-02-22', '999.99', '1989-08-28 16:42:34', '2007-08-13 16:33:09', 6, 4, 4, 24);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (55, '2010-11-30', '1995-05-09', '1998-06-09', '51.25', '1973-03-13 02:50:55', '2005-12-09 18:37:47', 14, 5, 5, 25);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (56, '1989-02-04', '1990-06-19', '1989-09-15', '3.16', '1987-02-04 13:34:21', '1986-07-20 04:39:25', 11, 6, 6, 26);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (57, '1983-02-04', '1992-04-03', '1984-06-03', '999.99', '2009-08-09 10:08:12', '1978-02-14 08:38:14', 8, 7, 7, 27);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (58, '1999-06-06', '1991-02-11', '2002-12-31', '999.99', '2008-08-05 22:06:57', '2007-12-16 01:02:51', 3, 8, 8, 28);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (59, '1984-11-15', '2001-09-10', '2021-02-18', '0.00', '1986-12-18 04:59:16', '2006-05-13 23:54:00', 14, 9, 9, 29);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (60, '1972-07-14', '2002-04-21', '1988-11-10', '999.99', '1988-08-26 07:33:00', '1971-07-17 14:34:29', 15, 10, 10, 30);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (61, '2009-06-19', '1970-12-19', '2021-06-02', '999.99', '1975-10-17 07:41:58', '1998-03-25 19:58:04', 13, 11, 1, 1);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (62, '1998-01-08', '1971-07-14', '1974-07-02', '0.00', '2007-09-21 16:17:27', '2021-12-05 17:59:18', 12, 12, 2, 2);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (63, '2002-07-26', '1985-09-21', '1995-04-17', '999.99', '1982-06-10 19:52:09', '1996-10-02 22:55:52', 7, 13, 3, 3);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (64, '2020-06-11', '2020-06-25', '1972-05-31', '999.99', '2003-09-18 04:46:48', '1975-02-01 07:24:53', 9, 14, 4, 4);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (65, '1978-01-06', '2005-03-08', '1989-02-15', '999.99', '1981-08-20 22:56:03', '2004-10-10 02:51:19', 6, 15, 5, 5);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (66, '2022-08-24', '1975-10-22', '2003-10-01', '999.99', '1985-08-15 13:26:30', '1990-01-28 12:45:24', 10, 16, 6, 6);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (67, '2009-04-11', '1985-02-13', '1983-01-01', '999.99', '1996-04-01 08:40:27', '2006-02-24 02:19:30', 10, 17, 7, 7);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (68, '1972-01-28', '1996-12-19', '1977-10-09', '36.85', '1974-10-08 01:08:00', '2005-06-23 21:48:06', 9, 18, 8, 8);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (69, '1974-10-23', '2000-02-10', '1980-08-08', '999.99', '2019-08-24 02:53:01', '2006-07-09 07:36:05', 13, 19, 9, 9);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (70, '1976-01-28', '2002-01-08', '2017-10-12', '0.00', '1979-08-18 00:57:09', '2004-11-30 03:08:59', 15, 20, 10, 10);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (71, '2018-02-03', '2021-10-05', '1970-03-04', '0.77', '2006-09-28 09:22:04', '1993-05-24 21:49:36', 12, 21, 1, 11);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (72, '2011-03-02', '1970-03-25', '1996-10-29', '338.06', '1987-10-21 10:22:57', '1977-07-12 18:05:20', 5, 22, 2, 12);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (73, '2005-10-18', '1977-03-09', '2003-10-21', '999.99', '2010-06-24 19:38:37', '1974-05-22 17:55:34', 11, 23, 3, 13);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (74, '2013-11-29', '2015-04-28', '2018-10-29', '599.29', '2014-04-26 07:55:31', '1971-02-01 16:04:23', 7, 24, 4, 14);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (75, '1995-09-28', '1970-10-24', '2008-07-12', '3.17', '2013-02-02 18:54:30', '2010-03-18 19:18:23', 3, 25, 5, 15);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (76, '1979-12-26', '1991-06-13', '1989-01-04', '0.00', '1976-05-11 02:25:19', '2013-06-18 11:24:51', 13, 26, 6, 16);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (77, '2018-08-02', '1987-07-25', '2014-01-29', '999.99', '1988-02-04 17:06:14', '1974-11-26 16:10:06', 12, 27, 7, 17);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (78, '2018-02-22', '1975-05-19', '2000-12-10', '8.86', '1996-06-26 13:17:02', '1996-03-07 22:31:12', 13, 28, 8, 18);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (79, '2005-04-11', '2018-08-05', '1991-08-01', '0.00', '2016-09-13 15:25:03', '2015-02-04 23:31:49', 11, 29, 9, 19);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (80, '1986-10-12', '2007-09-09', '1997-02-03', '0.95', '1998-05-10 14:28:18', '1995-09-21 20:43:07', 13, 30, 10, 20);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (81, '1971-04-19', '1980-03-27', '2008-07-03', '59.21', '1996-11-12 12:46:49', '2000-08-23 19:21:49', 9, 31, 1, 21);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (82, '1976-02-03', '2010-05-02', '1985-01-07', '149.42', '2020-11-27 12:27:29', '1978-07-08 00:58:59', 8, 32, 2, 22);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (83, '1992-12-11', '2006-01-18', '2011-08-09', '0.00', '2009-07-28 18:11:10', '1970-12-16 06:39:31', 1, 33, 3, 23);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (84, '2001-01-18', '2004-09-14', '1984-08-02', '0.45', '2015-09-02 03:57:48', '1999-11-27 13:12:34', 11, 34, 4, 24);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (85, '1971-08-08', '1976-02-12', '1989-02-21', '999.99', '1984-02-14 05:14:55', '2020-03-10 20:35:31', 10, 35, 5, 25);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (86, '2003-07-13', '2002-02-27', '2010-11-21', '160.80', '2016-08-08 18:28:15', '1991-09-20 23:15:25', 13, 36, 6, 26);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (87, '1996-02-10', '2015-01-25', '2012-02-28', '999.99', '2012-02-07 05:04:00', '1974-05-25 01:31:39', 6, 37, 7, 27);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (88, '1995-09-01', '2001-06-21', '1983-08-22', '6.04', '1986-04-28 10:52:01', '2023-02-15 12:03:55', 6, 38, 8, 28);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (89, '1979-11-11', '2004-07-21', '1980-07-14', '999.99', '2001-02-18 21:12:19', '2021-07-10 08:30:13', 2, 39, 9, 29);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (90, '1976-02-23', '1991-04-21', '1981-04-10', '999.99', '1997-08-23 07:56:07', '1999-01-25 06:28:25', 10, 40, 10, 30);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (91, '1991-09-25', '2004-10-21', '1973-11-28', '999.99', '1976-07-20 21:13:40', '2017-05-19 13:44:54', 15, 41, 1, 1);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (92, '2007-11-01', '1993-09-16', '1980-01-12', '0.00', '2022-02-14 20:08:16', '2004-10-17 07:23:51', 5, 42, 2, 2);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (93, '2001-10-16', '2009-11-04', '1980-12-07', '3.61', '1998-10-17 20:49:25', '2022-11-06 14:58:51', 4, 43, 3, 3);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (94, '2015-11-30', '2004-12-18', '1992-10-29', '999.99', '2001-08-21 16:44:06', '1974-10-08 20:22:55', 13, 44, 4, 4);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (95, '1978-09-12', '1972-12-24', '1983-07-25', '30.40', '2003-10-21 19:20:38', '1970-02-14 18:24:47', 2, 45, 5, 5);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (96, '2020-05-15', '1975-11-30', '1976-08-19', '999.99', '2009-08-18 10:00:58', '1991-11-01 22:16:10', 9, 46, 6, 6);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (97, '2018-03-30', '1982-12-05', '2017-02-24', '999.99', '1981-10-18 19:09:22', '2016-12-20 10:45:03', 8, 47, 7, 7);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (98, '2009-10-04', '2004-07-31', '1990-08-06', '0.00', '1970-11-27 01:31:17', '2018-10-05 09:50:13', 3, 48, 8, 8);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (99, '1978-07-27', '1987-02-22', '2000-04-01', '999.99', '1971-06-15 22:21:38', '2007-01-07 00:44:12', 6, 49, 9, 9);
INSERT INTO `subscriptions` (`idSubscription`, `date_start`, `date_end`, `date_payment`, `price`, `created_at`, `updated_at`, `idFamily`, `idLabel`, `idRate`, `idUser`) VALUES (100, '1994-05-02', '1982-07-13', '2005-03-26', '0.00', '2010-07-16 03:16:25', '2004-10-22 10:02:17', 10, 50, 10, 10);


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `mail` varchar(120) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `validated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (1, 'Heidenreich', 'Isobel', 'lehner.ebony@example.org', 'c8fe2ce6cfd64ac956ad6546e51f1b18d17742c1', '2001-08-03 03:42:38', '2005-09-08 15:45:08', '2021-05-26 09:04:57');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (2, 'Rohan', 'Adelia', 'wstrosin@example.org', '5e22b2a93f67bdba34dfdcbacb1a4fcf47693031', '1972-01-13 05:08:43', '1976-01-14 08:04:07', '2014-08-03 07:44:34');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (3, 'Feeney', 'Saige', 'esta25@example.com', '5fd8c50964f75c6d6d5e08c0eeb72e839c26bd5b', '2020-12-18 07:10:24', '2015-08-12 03:44:38', '2015-06-12 10:05:51');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (4, 'McCullough', 'Kelsi', 'kovacek.jessika@example.com', '85827d49b8472d5a323aeacd82939d5c0cf32fa8', '1991-11-28 13:53:08', '2017-11-17 04:39:20', '1990-08-23 19:51:14');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (5, 'Gerhold', 'Shyanne', 'jamaal44@example.com', '45fe6c6d37680cddd03e6c7ad0fab6f615341c8e', '2003-06-09 16:01:33', '2000-01-23 01:23:29', '2000-02-16 17:55:39');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (6, 'Marks', 'Drew', 'bartoletti.kimberly@example.net', 'a36d5678a3053026de0aa2a13fddec38daa5dfbb', '1987-05-04 03:08:45', '1985-06-05 20:00:08', '1981-03-05 13:03:17');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (7, 'Bernier', 'Libbie', 'heidenreich.alysha@example.net', '9204381564f65e904361e020d3411b1cc83950e3', '2011-10-24 00:51:09', '2015-11-22 17:04:22', '2006-09-19 17:28:08');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (8, 'Thiel', 'Piper', 'katharina.hettinger@example.net', '5cea699efef9bb0f9384136d38a285810bfe9147', '2001-02-10 11:37:18', '1974-01-04 13:03:34', '1988-07-28 00:22:31');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (9, 'Kreiger', 'Asa', 'tschowalter@example.net', '64c96a89e20e2dd7b27580147228fcf080b45a24', '2009-07-14 23:40:05', '2007-10-15 01:38:58', '1973-04-08 04:45:41');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (10, 'Johns', 'Sylvia', 'stefanie.walter@example.net', '2ca8387343211218818d6444c479e5c79102177a', '1980-06-07 02:32:42', '1972-11-17 04:00:19', '1992-02-24 08:37:07');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (11, 'Welch', 'Rodrigo', 'hyatt.isobel@example.net', '254283c90ef673735a65af56375305d9858fc854', '1997-12-24 16:51:30', '2000-01-20 13:34:10', '2015-02-15 04:37:22');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (12, 'Jacobs', 'Nels', 'carleton70@example.org', '8dac58998c5f44136d448366a516ac084d9fa206', '2018-06-20 11:45:39', '2000-08-29 12:30:43', '1983-04-07 13:31:19');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (13, 'Herman', 'Laron', 'naomie.raynor@example.net', 'd6674fc86509ab6eef7ff1e0b70200029ec3e2b8', '2010-01-07 12:21:44', '1993-08-18 18:00:48', '1992-11-03 10:22:07');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (14, 'Stiedemann', 'Shawn', 'casey.king@example.org', '34396a187137287831562afab2a361f6d46ca59a', '1999-01-27 11:20:33', '2005-05-26 22:29:52', '2005-04-14 21:27:34');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (15, 'Macejkovic', 'Sarai', 'kbernier@example.com', '1cee388db85433d7d957123be80ef3bc01a393fc', '2012-12-03 13:11:06', '1977-12-10 20:07:02', '1988-07-25 08:12:21');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (16, 'Breitenberg', 'Velva', 'ybrekke@example.com', '49e778ed86c0ceac029511a7a33d83f475608446', '2003-08-28 13:40:26', '1974-05-28 02:03:21', '1983-04-28 07:23:17');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (17, 'Jast', 'Marguerite', 'yvonne.maggio@example.org', '9722079a4ab22ddc627a80a4d9bec49ea0dd109e', '1986-11-21 11:26:28', '1997-03-22 15:28:42', '1973-06-16 14:37:58');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (18, 'Wisozk', 'Laurie', 'jmarquardt@example.com', '098daca38314a920d7f58bac2bb4bf1ad111f7b0', '1974-04-05 18:47:27', '1978-08-30 12:46:16', '2010-08-09 06:14:14');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (19, 'Schmeler', 'Bailee', 'buckridge.river@example.com', '0e22d32fab04a535365b91b5a5d8dfc3b1759dc0', '1986-08-04 08:53:28', '1988-07-05 22:50:05', '2016-09-10 19:29:58');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (20, 'Torphy', 'Sean', 'lzieme@example.net', 'e455bf7f2519e25320a7ec5648b1b3a937f71456', '1987-09-20 17:24:52', '1982-02-27 09:53:32', '1996-12-16 14:44:13');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (21, 'Gutmann', 'Jacky', 'keeley41@example.org', '873a28f757c3f4eec3743f5299720f4382a971a4', '1971-04-18 01:33:14', '1971-01-18 11:25:05', '1972-11-04 18:26:46');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (22, 'Pagac', 'Anabel', 'mosciski.antonetta@example.com', '8933d4c47897d74167d6a44aa2432347392678c4', '2018-02-16 01:55:27', '2000-06-23 02:32:19', '1981-04-18 09:04:37');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (23, 'Hane', 'Therese', 'koch.barbara@example.org', 'bf67c59b58dbf1197ab6f81a9e1fb506b43ab0fa', '1978-02-19 07:33:52', '1991-12-25 05:21:02', '2012-05-24 06:42:06');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (24, 'Hilll', 'Giovanny', 'coby.volkman@example.net', '85e8eb27f74c383c1ae840ee9943252b8492ea82', '1977-05-12 00:22:56', '1984-12-25 14:22:38', '1996-12-15 09:16:03');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (25, 'Bernhard', 'Katherine', 'stehr.tyler@example.org', '91a111d642cc475d749fe4d52b5056f36a0d5472', '1990-03-22 15:16:43', '1993-11-12 03:23:28', '2012-02-01 07:40:25');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (26, 'Mayert', 'Zane', 'stephany13@example.com', '8e61c901945f56218eac611bf2aba18a14ae4e2b', '2012-09-16 10:07:51', '2003-02-14 17:07:21', '1987-09-21 18:09:38');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (27, 'Rice', 'Sarina', 'ezieme@example.net', 'd296fa11b372b118647d2e604bd7f9889e953612', '2008-01-06 08:29:53', '2004-12-04 19:59:37', '1974-11-15 07:01:20');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (28, 'O\'Keefe', 'Lukas', 'henriette.schmitt@example.net', '712dd341a2e24e05feccffd8ad888705b8649d75', '1981-10-06 18:43:12', '1987-03-02 03:58:09', '2011-01-15 22:08:35');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (29, 'Treutel', 'Earnest', 'rolando.windler@example.net', '653723f745b4116edb39d72a70e93012e2d40813', '1986-04-17 04:23:18', '1994-03-17 22:30:24', '2014-04-26 01:53:50');
INSERT INTO `users` (`idUser`, `lastname`, `firstname`, `mail`, `password`, `created_at`, `updated_at`, `validated_at`) VALUES (30, 'Thompson', 'Caleb', 'lehner.bryon@example.net', '010229e2002f11b845d98d260e8cfaa4174bd280', '1974-01-11 23:24:44', '1976-05-17 13:55:44', '1995-05-27 07:33:44');


