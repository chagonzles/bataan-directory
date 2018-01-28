CREATE DATABASE IF NOT EXISTS bataan_directory;
USE bataan_directory;
CREATE TABLE IF NOT EXISTS establishment(
	`id` INT AUTO_INCREMENT,
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
);

DELETE from establishment;

INSERT INTO `establishment` VALUES (1, 'Starbucks', '1.jpg', 'Balanga', 'Foods & Drinks', 'Capitol Drive, Balanga, Bataan', 'starbucks_balanga@gmail.com', '237-8744', '0917283475', 'Cha Gonzales', 'Mon-Sun 7:00AM-11:00PM');
INSERT INTO `establishment` VALUES (2, 'The Beanery', '2.jpg', 'Orani', 'Foods & Drinks', 'Orani, Bataan', 'thebeaneryorani@gmail.com', '047-2345', '09171029485', NULL, 'Mon-Sun 10:00AM-11:00PM');
INSERT INTO `establishment` VALUES (3, 'Minesky Infinity', '3.jpg', 'Pilar', 'Computers & Technology', 'Alauli, Pilar, Bataan', 'mineskypilar@gmail.com', '237-1244', '09172812344', 'Janray Flores', 'Mon-Sun 10:00AM-10:00PM');
INSERT INTO `establishment` VALUES (4, 'BPSU Bagac Campus', '4.jpg', 'Bagac', 'Schools & Universities', 'Bagac, Bataan', 'bpsu-bagac@bpsu.edu.ph', '047-1234', '09162346238', NULL, 'Mon-Fri 6:00AM-5:00PM');

INSERT INTO `establishment` VALUES (5, 'PC Express', '5.png', 'Balanga', 'Computers & Technology', '2F Vista Mall, Balanga, Bataan', 'pcexpressbalanga@gmail.com', '047-4444', '09181078241', 'Juan dela Cruz', 'Mon-Sun 10:00AM-9:00PM');
INSERT INTO `establishment` VALUES (6, 'The Food Project', '6.jpg', 'Orion', 'Foods & Drinks', 'Balagtas National Rd Orion, Bataan', 'thefoodproject@gmail.com', '047-2233', '09151229483', NULL, 'Mon-Sat 1:00PM-11:00PM');
INSERT INTO `establishment` VALUES (7, 'Uniqlo', '7.png', 'Balanga', 'Fashion & Beauty', '1F Vista Mall, Balanga, Bataan', 'uniqlobataan@gmail.com', '047-1122', '09172812344', NULL, 'Mon-Sun 10:00AM-9:00PM');
INSERT INTO `establishment` VALUES (8, 'Colegio de San Juan de Letran', '8.jpg', 'Abucay', 'Schools & Universities', 'Abucay, Bataan', 'bpsu-abucay@bpsu.edu.ph', '047-5566', '09124567894', 'Bernadette Ramirez', 'Mon-Fri 6:00AM-5:00PM');

INSERT INTO `establishment` VALUES (9, 'PowerMac Center', '9.jpg', 'Balanga', 'Computers & Technology', '2F Vista Mall, Balanga, Bataan', 'powermacbataan@gmail.com', '047-5555', '09567829234', NULL, 'Mon-Sun 10:00AM-9:00PM');
INSERT INTO `establishment` VALUES (10, 'Nissan Bataan', '10.jpg', 'Hermosa', 'Automotives', 'National Road Hermosa, Bataan', 'nissanbataan@gmail.com', '047-5432', '09151217839', 'John Doe', 'Mon-Sat 10:00AM-6:00PM');
INSERT INTO `establishment` VALUES (11, 'Spazieta Body Massage & Spa', '11.jpg', 'Samal', 'Fashion & Beauty', 'Lalawigan, Samal, Bataan', 'spazieta@gmail.com', '237-1122', '09231080238', 'Ana de Vera', 'Mon-Sun 10:00AM-11:00PM');
INSERT INTO `establishment` VALUES (12, 'Turks', '12.png', 'Dinalupihan', 'Foods & Drinks', 'Dinalupihan, Bataan', 'turks@gmail.com', '047-2266', '09124567555', 'Janray Flores', 'Mon-Fri 11:00AM-8:00PM');