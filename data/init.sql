CREATE SCHEMA `web_app_db` ;

use `web_app_db` ;

CREATE TABLE `web_app_db`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(30) NOT NULL,
  `lastname` VARCHAR(30) NOT NULL,
  `age` INT(3) NULL,
  `gender` ENUM('male', 'female') NULL,
  `picture` MEDIUMBLOB NULL,
  `address` VARCHAR(60) NULL,
  `phone` VARCHAR(20) NULL,
  `email` VARCHAR(50) NOT NULL,
  `username` VARCHAR(15) NOT NULL,
  `password` VARCHAR(150) NOT NULL,
  `date` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`));
