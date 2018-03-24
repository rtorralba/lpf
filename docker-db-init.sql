USE lpf;

DROP TABLE IF EXISTS `cast`;

CREATE TABLE `cast` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `cast` (name) VALUES ('David');
INSERT INTO `cast` (name) VALUES ('Dr. John');
INSERT INTO `cast` (name) VALUES ('Jennifer');
