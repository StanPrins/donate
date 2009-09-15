
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- comment
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `comment`;


CREATE TABLE `comment`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`blog_id` INTEGER(11),
	`topic_id` INTEGER(11),
	`user_id` INTEGER(11)  NOT NULL,
	`content` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `comment_FI_1` (`blog_id`),
	CONSTRAINT `comment_FK_1`
		FOREIGN KEY (`blog_id`)
		REFERENCES `blog` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `comment_FI_2` (`topic_id`),
	CONSTRAINT `comment_FK_2`
		FOREIGN KEY (`topic_id`)
		REFERENCES `topic` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `comment_FI_3` (`user_id`),
	CONSTRAINT `comment_FK_3`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- blog
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `blog`;


CREATE TABLE `blog`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER(11)  NOT NULL,
	`title` VARCHAR(16)  NOT NULL,
	`content` TEXT  NOT NULL,
	`recommend` TINYINT(1) default 0,
	`rdtime` DATETIME,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `blog_FI_1` (`user_id`),
	CONSTRAINT `blog_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- message
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `message`;


CREATE TABLE `message`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`sender_id` INTEGER(11)  NOT NULL,
	`reciever_id` INTEGER(11)  NOT NULL,
	`title` VARCHAR(16),
	`content` TEXT,
	`anonymity` TINYINT(1) default 0 NOT NULL,
	`sdel` TINYINT(1) default 0 NOT NULL,
	`rdel` TINYINT(1) default 0 NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `message_FI_1` (`sender_id`),
	CONSTRAINT `message_FK_1`
		FOREIGN KEY (`sender_id`)
		REFERENCES `user` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `message_FI_2` (`reciever_id`),
	CONSTRAINT `message_FK_2`
		FOREIGN KEY (`reciever_id`)
		REFERENCES `user` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- department
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `department`;


CREATE TABLE `department`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`builder_id` INTEGER(11)  NOT NULL,
	`manager_id` INTEGER(11),
	`arrange` INTEGER(3)  NOT NULL,
	`title` VARCHAR(16),
	`description` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `department_FI_1` (`builder_id`),
	CONSTRAINT `department_FK_1`
		FOREIGN KEY (`builder_id`)
		REFERENCES `user` (`id`),
	INDEX `department_FI_2` (`manager_id`),
	CONSTRAINT `department_FK_2`
		FOREIGN KEY (`manager_id`)
		REFERENCES `user` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- topic
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `topic`;


CREATE TABLE `topic`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`department_id` INTEGER(11)  NOT NULL,
	`user_id` INTEGER(11)  NOT NULL,
	`title` VARCHAR(32)  NOT NULL,
	`content` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `topic_FI_1` (`department_id`),
	CONSTRAINT `topic_FK_1`
		FOREIGN KEY (`department_id`)
		REFERENCES `department` (`id`),
	INDEX `topic_FI_2` (`user_id`),
	CONSTRAINT `topic_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- user
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;


CREATE TABLE `user`
(
	`id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(32)  NOT NULL,
	`nickname` VARCHAR(16)  NOT NULL,
	`sha1_password` VARCHAR(40),
	`salt` VARCHAR(32),
	`name` VARCHAR(16)  NOT NULL,
	`department_id` INTEGER(11),
	`photo` VARCHAR(256),
	`duty` VARCHAR(256),
	`mobile` VARCHAR(16),
	`tel` VARCHAR(16),
	`twitter` VARCHAR(256),
	`droit` INTEGER(3) default 0 NOT NULL,
	`qq` VARCHAR(32),
	`msn` VARCHAR(32),
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `user_FI_1` (`department_id`),
	CONSTRAINT `user_FK_1`
		FOREIGN KEY (`department_id`)
		REFERENCES `department` (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
