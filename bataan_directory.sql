CREATE DATABASE IF NOT EXISTS bataan_directory;
USE bataan_directory;
CREATE TABLE IF NOT EXISTS establishments(
	`id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(500),
    `thumbnail` VARCHAR(500),
    `location` VARCHAR(50),
    `category` VARCHAR(50),
    `address` VARCHAR (500),
    `email` VARCHAR (100),
    `landline` VARCHAR(50),
    `mobile_no` VARCHAR(50),
    `contact_person` VARCHAR(150),
    `schedule` VARCHAR(500),
    PRIMARY KEY(`id`)
)