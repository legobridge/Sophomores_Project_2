// Execute this line separately
CREATE DATABASE `ohelex`;

CREATE TABLE `ohelex`.`users` ( `id` INT(15) NOT NULL AUTO_INCREMENT , `email` VARCHAR(200) NOT NULL , `name` VARCHAR(200) NOT NULL , `gender` VARCHAR(200) NOT NULL , `pass` VARCHAR(200) NOT NULL , `college` VARCHAR(200) NOT NULL , PRIMARY KEY (`id`), UNIQUE `email` (`email`)) ENGINE = InnoDB;
CREATE TABLE `ohelex`.`store` ( `id` INT(15) NOT NULL AUTO_INCREMENT , `category` VARCHAR(200) NOT NULL , `name` VARCHAR(200) NOT NULL , `description` VARCHAR(200) NOT NULL , `contact` VARCHAR(200) NOT NULL , `price` VARCHAR(200) NOT NULL , `college` VARCHAR(200) NOT NULL , `date` VARCHAR(200) NOT NULL , `user_id` INT(200) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
