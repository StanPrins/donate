
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- donation
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `donation`;


CREATE TABLE `donation`
(
	`donation_id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`student_id` INTEGER(11)  NOT NULL,
	`user_id` INTEGER(11)  NOT NULL,
	`amount` INTEGER(16),
	`start_date` DATE,
	`end_date` DATE,
	`approve` INTEGER,
	`is_active` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`donation_id`),
	INDEX `donation_FI_1` (`student_id`),
	CONSTRAINT `donation_FK_1`
		FOREIGN KEY (`student_id`)
		REFERENCES `student` (`student_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `donation_FI_2` (`user_id`),
	CONSTRAINT `donation_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`user_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- projectsite
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `projectsite`;


CREATE TABLE `projectsite`
(
	`site_id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`site_name` VARCHAR(16)  NOT NULL,
	`province` VARCHAR(16)  NOT NULL,
	`city` VARCHAR(16)  NOT NULL,
	`district` VARCHAR(16)  NOT NULL,
	`discription` TEXT,
	PRIMARY KEY (`site_id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- remit
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `remit`;


CREATE TABLE `remit`
(
	`remit_id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`donation_id` INTEGER(11)  NOT NULL,
	`amount` INTEGER(16),
	`is_by_ofs` INTEGER default 1,
	`is_received` INTEGER default 0,
	`receive_date` DATE,
	`receive_user_id` INTEGER(11),
	`receive_amount` INTEGER(16),
	`receive_submitter` INTEGER(11),
	`is_sendout` INTEGER default 0,
	`sendout_date` DATE,
	`sendout_user_id` INTEGER(11),
	`sendout_amount` INTEGER(16),
	`sendout_submitter` INTEGER(11),
	`sendout_receiver` VARCHAR(16),
	`created_at` DATETIME,
	`report_id` INTEGER(11),
	`discription` TEXT,
	`remark` TEXT,
	PRIMARY KEY (`remit_id`),
	INDEX `remit_FI_1` (`donation_id`),
	CONSTRAINT `remit_FK_1`
		FOREIGN KEY (`donation_id`)
		REFERENCES `donation` (`donation_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `remit_FI_2` (`receive_user_id`),
	CONSTRAINT `remit_FK_2`
		FOREIGN KEY (`receive_user_id`)
		REFERENCES `user` (`user_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `remit_FI_3` (`receive_submitter`),
	CONSTRAINT `remit_FK_3`
		FOREIGN KEY (`receive_submitter`)
		REFERENCES `user` (`user_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `remit_FI_4` (`sendout_user_id`),
	CONSTRAINT `remit_FK_4`
		FOREIGN KEY (`sendout_user_id`)
		REFERENCES `user` (`user_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `remit_FI_5` (`sendout_submitter`),
	CONSTRAINT `remit_FK_5`
		FOREIGN KEY (`sendout_submitter`)
		REFERENCES `user` (`user_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `remit_FI_6` (`report_id`),
	CONSTRAINT `remit_FK_6`
		FOREIGN KEY (`report_id`)
		REFERENCES `reportcard` (`report_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- reportcard
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `reportcard`;


CREATE TABLE `reportcard`
(
	`report_id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`student_id` INTEGER(11)  NOT NULL,
	`user_id` INTEGER(11)  NOT NULL,
	`term` VARCHAR(16),
	`yuwen` TINYINT,
	`shuxue` TINYINT,
	`yingyu` TINYINT,
	`wuli` TINYINT,
	`huaxue` TINYINT,
	`lishi` TINYINT,
	`dili` TINYINT,
	`ziran` TINYINT,
	`shengwu` TINYINT,
	`tiyu` TINYINT,
	`zhengzhi` TINYINT,
	`zonghe` TINYINT,
	`rank` VARCHAR(16),
	`teacher_remark` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`report_id`),
	INDEX `reportcard_FI_1` (`student_id`),
	CONSTRAINT `reportcard_FK_1`
		FOREIGN KEY (`student_id`)
		REFERENCES `student` (`student_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `reportcard_FI_2` (`user_id`),
	CONSTRAINT `reportcard_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`user_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- school
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `school`;


CREATE TABLE `school`
(
	`school_id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`site_id` INTEGER(11)  NOT NULL,
	`school_name` VARCHAR(16)  NOT NULL,
	`type` VARCHAR(16)  NOT NULL,
	`master` VARCHAR(16)  NOT NULL,
	`contact` VARCHAR(16)  NOT NULL,
	`phone` VARCHAR(32)  NOT NULL,
	`address` VARCHAR(256)  NOT NULL,
	`postal` VARCHAR(7)  NOT NULL,
	`discription` TEXT,
	PRIMARY KEY (`school_id`),
	INDEX `school_FI_1` (`site_id`),
	CONSTRAINT `school_FK_1`
		FOREIGN KEY (`site_id`)
		REFERENCES `projectsite` (`site_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- student
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `student`;


CREATE TABLE `student`
(
	`student_id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`school_id` INTEGER(11)  NOT NULL,
	`ofs_id` VARCHAR(32)  NOT NULL,
	`name` VARCHAR(16)  NOT NULL,
	`nickname` VARCHAR(16)  NOT NULL,
	`race` VARCHAR(16)  NOT NULL,
	`head_teacher` VARCHAR(16)  NOT NULL,
	`guardian` VARCHAR(16)  NOT NULL,
	`birthday` DATE  NOT NULL,
	`grade` VARCHAR(16)  NOT NULL,
	`male` INTEGER  NOT NULL,
	`tel` VARCHAR(16),
	`address` VARCHAR(256)  NOT NULL,
	`postal` INTEGER(7)  NOT NULL,
	`city` VARCHAR(16)  NOT NULL,
	`province` VARCHAR(16)  NOT NULL,
	`consignee` VARCHAR(16)  NOT NULL,
	`consignee_address` VARCHAR(256)  NOT NULL,
	`consignee_postal` INTEGER(7)  NOT NULL,
	`assist_history` TEXT  NOT NULL,
	`is_instudy` INTEGER  NOT NULL,
	`is_boarder` INTEGER  NOT NULL,
	`is_donated` INTEGER  NOT NULL,
	`dropout_history` TEXT,
	`techang` VARCHAR(256),
	`reward` TEXT,
	`term_expense` TEXT,
	`discription` TEXT,
	`created_at` DATETIME,
	`remark` TEXT,
	`photo` VARCHAR(256),
	`member_photo` VARCHAR(256),
	`house_photo` VARCHAR(256),
	`fm1_relation` VARCHAR(16),
	`fm1_name` VARCHAR(16),
	`fm1_age` TINYINT,
	`fm1_occupation` VARCHAR(16),
	`fm1_discription` TEXT,
	`fm2_relation` VARCHAR(16),
	`fm2_name` VARCHAR(16),
	`fm2_age` TINYINT,
	`fm2_occupation` VARCHAR(16),
	`fm2_discription` TEXT,
	`fm3_relation` VARCHAR(16),
	`fm3_name` VARCHAR(16),
	`fm3_age` TINYINT,
	`fm3_occupation` VARCHAR(16),
	`fm3_discription` TEXT,
	`fm4_relation` VARCHAR(16),
	`fm4_name` VARCHAR(16),
	`fm4_age` TINYINT,
	`fm4_occupation` VARCHAR(16),
	`fm4_discription` TEXT,
	PRIMARY KEY (`student_id`),
	INDEX `student_FI_1` (`school_id`),
	CONSTRAINT `student_FK_1`
		FOREIGN KEY (`school_id`)
		REFERENCES `school` (`school_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- survey
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `survey`;


CREATE TABLE `survey`
(
	`survey_id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`student_id` INTEGER(11)  NOT NULL,
	`user_id` INTEGER(11)  NOT NULL,
	`survey_date` DATE,
	`family_condition` TEXT,
	`grade` VARCHAR(16)  NOT NULL,
	`other_assist` VARCHAR(256)  NOT NULL,
	`dropout_info` VARCHAR(256)  NOT NULL,
	`presentation` TEXT,
	`revenue` VARCHAR(128)  NOT NULL,
	`property` VARCHAR(256)  NOT NULL,
	`donation_usage` VARCHAR(256)  NOT NULL,
	`donor_concerned` VARCHAR(256)  NOT NULL,
	`msg_to_donor` TEXT,
	`msg_to_stu` TEXT,
	`school_opinion` VARCHAR(256)  NOT NULL,
	`teacher_opinion` VARCHAR(256)  NOT NULL,
	`user_opinion` VARCHAR(256)  NOT NULL,
	`discription` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`survey_id`),
	INDEX `survey_FI_1` (`student_id`),
	CONSTRAINT `survey_FK_1`
		FOREIGN KEY (`student_id`)
		REFERENCES `student` (`student_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	INDEX `survey_FI_2` (`user_id`),
	CONSTRAINT `survey_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`user_id`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- user
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;


CREATE TABLE `user`
(
	`user_id` INTEGER(11)  NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(16)  NOT NULL,
	`nickname` VARCHAR(16)  NOT NULL,
	`sha1_password` VARCHAR(40),
	`salt` VARCHAR(32),
	`name` VARCHAR(16)  NOT NULL,
	`id_card` VARCHAR(32)  NOT NULL,
	`photo` VARCHAR(256),
	`bbs_id` VARCHAR(16),
	`ofs_id` VARCHAR(16),
	`duty` VARCHAR(256),
	`mobile` VARCHAR(16),
	`tel` VARCHAR(16),
	`usertype` VARCHAR(16)  NOT NULL,
	`approve` INTEGER default 0,
	`identity` VARCHAR(16),
	`email` VARCHAR(32),
	`qq` VARCHAR(32),
	`msn` VARCHAR(32),
	`address` VARCHAR(256),
	`created_at` DATETIME,
	PRIMARY KEY (`user_id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
