CREATE TABLE `mlm` (
  `mlm_id` INT(255) AUTO_INCREMENT,
  `mlm_name` VARCHAR(64),
  `is_mlm` BOOLEAN,
  PRIMARY KEY (`mlm_id`)
);

CREATE TABLE `post` (
  `post_id` INT(255) AUTO_INCREMENT,
  `mlm_id` INT(255),
  `post_title` VARCHAR(64),
  `post` TEXT(65535),
  `post_date` TIMESTAMP,
  PRIMARY KEY (`post_id`),
  FOREIGN KEY (`mlm_id`) REFERENCES `mlm`(`mlm_id`)
);

CREATE TABLE `user` (
  `user_id` INT(255) AUTO_INCREMENT,
  `user_level` CHAR(1),
  `user_first_name` VARCHAR(40),
  `user_last_name` VARCHAR(40),
  `user_email` VARCHAR(64),
  `user_password` VARCHAR(64),
  `bio` TEXT(1000),
  PRIMARY KEY (`user_id`)
);

CREATE TABLE `comment` (
  `comment_id` INT(255) AUTO_INCREMENT,
  `post_id` INT(255),
  `user_id` INT(255),
  `user_comment` TEXT(65535),
  `comment_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `parent_comment_id` INT(255),
  PRIMARY KEY (`comment_id`),
  FOREIGN KEY (`parent_comment_id`) REFERENCES `comment`(`comment_id`),
  FOREIGN KEY (`post_id`) REFERENCES `post`(`post_id`),
  FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`)
);
