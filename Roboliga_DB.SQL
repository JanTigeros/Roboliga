/*
Created: 16. 11. 2021
Modified: 16. 11. 2021
Model: MySQL 8.0
Database: MySQL 8.0
*/

-- Create tables section -------------------------------------------------

-- Table teams

CREATE TABLE `teams`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `t_name` Char(100),
  `school_id` Int,
  `category_id` Int,
  PRIMARY KEY (`id`),
  UNIQUE `id` (`id`)
)
;

CREATE INDEX `IX_Relationship1` ON `teams` (`school_id`)
;

CREATE INDEX `IX_Relationship2` ON `teams` (`category_id`)
;

-- Table users

CREATE TABLE `users`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `u_name` Char(100),
  PRIMARY KEY (`id`),
  UNIQUE `id` (`id`)
)
;

-- Table categorys

CREATE TABLE `categorys`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `title` Char(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE `id` (`id`)
)
;

-- Table schools

CREATE TABLE `schools`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `s.name` Char(100),
  PRIMARY KEY (`id`),
  UNIQUE `id` (`id`)
)
;

-- Table results

CREATE TABLE `results`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `time_1` Int,
  `time_2` Int,
  `sum` Int,
  `team_id` Int,
  PRIMARY KEY (`id`),
  UNIQUE `id` (`id`)
)
;

CREATE INDEX `IX_Relationship5` ON `results` (`team_id`)
;

-- Table mentors

CREATE TABLE `mentors`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `m.name` Char(100),
  PRIMARY KEY (`id`),
  UNIQUE `id` (`id`)
)
;

-- Table teams-mentors

CREATE TABLE `teams-mentors`
(
  `id` Int NOT NULL AUTO_INCREMENT,
  `team_id` Int,
  `mentor_id` Int,
  PRIMARY KEY (`id`),
  UNIQUE `id` (`id`)
)
;

CREATE INDEX `IX_Relationship3` ON `teams-mentors` (`team_id`)
;

CREATE INDEX `IX_Relationship4` ON `teams-mentors` (`mentor_id`)
;

-- Create foreign keys (relationships) section -------------------------------------------------

ALTER TABLE `teams` ADD CONSTRAINT `Relationship1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `teams` ADD CONSTRAINT `Relationship2` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `teams-mentors` ADD CONSTRAINT `Relationship3` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `teams-mentors` ADD CONSTRAINT `Relationship4` FOREIGN KEY (`mentor_id`) REFERENCES `mentors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `results` ADD CONSTRAINT `Relationship5` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
;


