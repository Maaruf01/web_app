CREATE SCHEMA `web_app_db` ;

use `web_app_db` ;

CREATE TABLE `web_app_db`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(30) NOT NULL,
  `lastname` VARCHAR(30) NOT NULL,
  `picture` MEDIUMBLOB NULL,
  `address` VARCHAR(60) NULL,
  `phone` VARCHAR(20) NULL,
  `email` VARCHAR(50) NOT NULL,
  `username` VARCHAR(15) NOT NULL,
  `password` VARCHAR(150) NOT NULL,
  `date` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `web_app_db`.`posts` (
  `id` INT NOT NULL,
  `title` TINYTEXT NOT NULL,
  `content` MEDIUMTEXT NOT NULL,
  `time` TIMESTAMP NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `author_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `author`
    FOREIGN KEY (`user_id`)
    REFERENCES `web_app_db`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `web_app_db`.`comment` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `comment` TINYTEXT NOT NULL,
  `time` TIMESTAMP NOT NULL,
  `post_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `p_id_idx` (`post_id` ASC) VISIBLE,
  CONSTRAINT `p_id`
    FOREIGN KEY (`post_id`)
    REFERENCES `web_app_db`.`posts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

