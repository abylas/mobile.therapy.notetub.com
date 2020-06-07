CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL,
    phone_work INTEGER ,
    phone_cell INTEGER,
    phone_second_line INTEGER ,
    phone_secretary INTEGER,
    linkedin_profile TEXT,
    twitter_profile TEXT,
    whatsapp_id TEXT,
    skype_id TEXT,
    slack_id TEXT,
    facebook_profile TEXT,
    instagram_profile TEXT,
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE tbl_dns
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
 	environment TEXT, --
 	arecord TEXT,
	cname TEXT,
	microservice TEXT,
	create_time INTEGER,
	update_time INTEGER
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE tbl_notes
(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name TEXT,
    status TEXT,
    create_time DATETIME,
    update_time DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE tbl_company
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name TEXT,
	status TEXT,
	create_time DATETIME,
	update_time DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE tbl_project
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name TEXT,
	status TEXT,
	category TEXT,
	priority TEXT,
 	images TEXT,
 	client TEXT,
 	lead TEXT,
 	team TEXT,
 	notes TEXT,
 	tasks TEXT,
 	taskId INTEGER,
	start_date DATETIME,
	due_date DATETIME,
	days_overdue INTEGER,
	company_id integer,
	CONSTRAINT FK_project_company FOREIGN KEY (company_id)
REFERENCES tbl_company (id) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE tbl_task
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name TEXT,
	details TEXT,
	priority TEXT,
	assignee TEXT,
	project TEXT,
	estimated_duration INTEGER,
	final_duration INTEGER,
	start_date DATETIME,
	due_date DATETIME,
	logged_time DATETIME,
	project_id integer,
	CONSTRAINT FK_task_project FOREIGN KEY (project_id)
REFERENCES tbl_project (id) ON DELETE CASCADE ON UPDATE RESTRICT
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tbl_users` (
                             `id` int(11) NOT NULL AUTO_INCREMENT,
                             `username` varchar(20) NOT NULL,
                             `password` varchar(128) NOT NULL,
                             `email` varchar(128) NOT NULL,
                             `activkey` varchar(128) NOT NULL DEFAULT '',
                             `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                             `lastvisit_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
                             `superuser` int(1) NOT NULL DEFAULT '0',
                             `status` int(1) NOT NULL DEFAULT '0',
                             PRIMARY KEY (`id`),
                             UNIQUE KEY `username` (`username`),
                             UNIQUE KEY `email` (`email`),
                             KEY `status` (`status`),
                             KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

CREATE TABLE `tbl_profiles` (
                                `user_id` int(11) NOT NULL AUTO_INCREMENT,
                                `lastname` varchar(50) NOT NULL DEFAULT '',
                                `firstname` varchar(50) NOT NULL DEFAULT '',
                                PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

ALTER TABLE `tbl_profiles`
    ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE;

CREATE TABLE `tbl_profiles_fields` (
                                       `id` int(10) NOT NULL AUTO_INCREMENT,
                                       `varname` varchar(50) NOT NULL,
                                       `title` varchar(255) NOT NULL,
                                       `field_type` varchar(50) NOT NULL,
                                       `field_size` varchar(15) NOT NULL DEFAULT '0',
                                       `field_size_min` varchar(15) NOT NULL DEFAULT '0',
                                       `required` int(1) NOT NULL DEFAULT '0',
                                       `match` varchar(255) NOT NULL DEFAULT '',
                                       `range` varchar(255) NOT NULL DEFAULT '',
                                       `error_message` varchar(255) NOT NULL DEFAULT '',
                                       `other_validator` varchar(5000) NOT NULL DEFAULT '',
                                       `default` varchar(255) NOT NULL DEFAULT '',
                                       `widget` varchar(255) NOT NULL DEFAULT '',
                                       `widgetparams` varchar(5000) NOT NULL DEFAULT '',
                                       `position` int(3) NOT NULL DEFAULT '0',
                                       `visible` int(1) NOT NULL DEFAULT '0',
                                       PRIMARY KEY (`id`),
                                       KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;


INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 0, 1);

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Demo', 'Demo');

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3);


INSERT INTO tbl_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test3', 'pass3', 'test3@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test4', 'pass4', 'test4@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test5', 'pass5', 'test5@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test6', 'pass6', 'test6@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test7', 'pass7', 'test7@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test8', 'pass8', 'test8@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test9', 'pass9', 'test9@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test10', 'pass10', 'test10@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test11', 'pass11', 'test11@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test12', 'pass12', 'test12@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test13', 'pass13', 'test13@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test14', 'pass14', 'test14@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test15', 'pass15', 'test15@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test16', 'pass16', 'test16@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test17', 'pass17', 'test17@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test18', 'pass18', 'test18@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test19', 'pass19', 'test19@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test20', 'pass20', 'test20@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test21', 'pass21', 'test21@example.com');
