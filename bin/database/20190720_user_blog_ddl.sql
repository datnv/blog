CREATE TABLE `user_blog`(
    `ub_id` INT NOT NULL AUTO_INCREMENT,
    `ub_user_id` INT NOT NULL,
    `ub_blog_id` INT NOT NULL,
    PRIMARY KEY(`ub_id`)
);