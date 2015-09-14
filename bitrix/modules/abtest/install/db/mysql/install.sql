
CREATE TABLE IF NOT EXISTS `b_abtest` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`SITE_ID` VARCHAR(255) NOT NULL,
	`ACTIVE` CHAR(1) NOT NULL DEFAULT 'N',
	`ENABLED` CHAR(1) NOT NULL DEFAULT 'N',
	`NAME` VARCHAR(255) NULL,
	`DESCR` TEXT NULL,
	`TEST_DATA` TEXT NOT NULL,
	`START_DATE` DATETIME NULL,
	`STOP_DATE` DATETIME NULL,
	`DURATION` INT NOT NULL DEFAULT 0,
	`PORTION` INT NOT NULL DEFAULT 0,
	`USER_ID` INT NULL,
	`SORT` INT NOT NULL DEFAULT 100,
	PRIMARY KEY (`ID`)
);
