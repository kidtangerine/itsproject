DROP TABLE IF EXISTS `#__itsproject`;
 
CREATE TABLE `#__itsproject` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`published` tinyint(4) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
 
INSERT INTO `#__itsproject` (`name`) VALUES
('Adding Internet Project came from db'),
('Deleting Internet Project came from d');