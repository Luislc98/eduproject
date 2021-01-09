-- IMPORTANT! If you change this file, you will need to manually
-- delete site.sqlite in order to regenerate the database from this file!

BEGIN TRANSACTION;

-- Sessions Table
CREATE TABLE sessions (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	user_id INTEGER NOT NULL,
	session TEXT NOT NULL UNIQUE
);


-- Users Table
CREATE TABLE users (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	firstname TEXT NOT NULL,
	lastname TEXT NOT NULL,
	email TEXT NOT NULL UNIQUE,
	username TEXT NOT NULL,
	pword TEXT NOT NULL
);



-- Teachers Table
CREATE TABLE teachers (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	firstname TEXT NOT NULL,
	lastname TEXT NOT NULL,
	email TEXT NOT NULL UNIQUE,
	username TEXT NOT NULL,
	pword TEXT NOT NULL
);

-- coursecatalog table
CREATE TABLE coursecatalog (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	coursename TEXT NOT NULL,
	category TEXT NOT NULL,
	description TEXT NOT NULL UNIQUE,
	link TEXT 
);

-- studentenrollment table

CREATE TABLE studentenrollment (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	courseid INTEGER NOT NULL,
	studentid INTEGER NOT NULL
	
);

-- studentsubmissions table

CREATE TABLE studentsubmissions (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	studentid INTEGER NOT NULL,
	file_name TEXT NOT NULL,
	file_ext TEXT NOT NULL,
	courseid INTEGER NOT NULL,
	assignmentid INTEGER NOT NULL
);

-- teachersubmissions table

CREATE TABLE teachersubmissions (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	submissionname TEXT NOT NULL,
	description TEXT NOT NULL,
	file_name TEXT NOT NULL,
	file_ext TEXT NOT NULL,
	courseid INTEGER NOT NULL
);

-- courseassignments table

CREATE TABLE courseassignments (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	assignmentname TEXT NOT NULL,
	courseid INTEGER NOT NULL,
	assignment_description TEXT NOT NULL,
	duedate TEXT NOT NULL
	
);


-- teacherenrollment table

CREATE TABLE teacherenrollment (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	courseid INTEGER NOT NULL,
	teacherid INTEGER NOT NULL
	
);

-- Users seed data
INSERT INTO users (id,firstname,lastname,email, username, pword) VALUES (1,'Luis', 'Lopez','fjdj@cornell.edu', 'lop98', '$2y$10$QtCybkpkzh7x5VN11APHned4J8fu78.eFXlyAMmahuAaNcbwZ7FH.'); -- password: monkey
--INSERT INTO users (id, username, password) VALUES (2, 'sally76', '$2y$10$eFBTweRbnJyTNRDLACBMi.15heBWvyR/GyBvbjadUs6lfNWMBHLwm'); -- password: reddawn
--INSERT INTO users (id, username, password) VALUES (3, 'bert56', '$2y$10$gxaWl8J4.Lb82ktEbrZJK.0dQr77yJaUc2a0qoVvc6TZOQVjczaC.'); -- password: donkey

-- Teachers seed data
INSERT INTO teachers (id,firstname,lastname,email, username, pword) VALUES (101,'Arky', 'Asmal','arky@cornell.edu', 'arky69', '$2y$10$QtCybkpkzh7x5VN11APHned4J8fu78.eFXlyAMmahuAaNcbwZ7FH.'); -- password: monkey



-- coursecatalog seed data
INSERT INTO coursecatalog (id,coursename,category,description,link) VALUES (1,'Intro to Accounting', 'Economics', 'Have you ever woundered how huge firms like Google and Apple are able to manage their books, pay salaries to their many employees, and consistently keep a ledger in order to calcualte their taxes and report their performance to stockholders?','intro_accounting');
INSERT INTO coursecatalog (id,coursename,category,description,link) VALUES (2,'Intro to Web Programming', 'Computer Science', 'Learn how to create goregeous, responsive websites in order to develop your technical skills or create a great website that can help you draw more revenue for your fledgling business.','introweb');
INSERT INTO coursecatalog (id,coursename,category,description,link) VALUES (3,'Intro to Chemistry', 'Science', 'Learn the marvels and mysteries of the natural world by taking your first step to learning about how atoms and different elements react to produce the beautiful world we see.','introchem');
INSERT INTO coursecatalog (id,coursename,category,description,link) VALUES (4,'Intro to Physics', 'Science', 'In this introductory course, learn how mathematical and physical laws work in tandem to create the way that physical objects interact with each other. Learn about the laws of gravity, centripetal force, and more?', 'introphysics');

-- studentenrollment database 
INSERT INTO studentenrollment (id,courseid,studentid) VALUES (1,1,1);
INSERT INTO studentenrollment (id,courseid,studentid) VALUES (2,1,2);
INSERT INTO studentenrollment (id,courseid,studentid) VALUES (3,3,1);

-- teacherenrollment database 
INSERT INTO teacherenrollment (id,courseid,teacherid) VALUES (1,1,101);
INSERT INTO teacherenrollment (id,courseid,teacherid) VALUES (2,2,101);

-- courseassignemnts database 
INSERT INTO courseassignments (id,assignmentname,courseid,assignment_description,duedate) VALUES (1,"Accounting Assignment 1",1,"Please Submit the signed syllabus in either a PDF or Word file.","January 1,2021");

COMMIT;