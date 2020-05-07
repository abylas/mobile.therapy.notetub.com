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
