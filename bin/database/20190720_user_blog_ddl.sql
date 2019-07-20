CREATE TABLE `user_blog`(
    `ub_user_id` INT NOT NULL,
    `ub_blog_id` INT NOT NULL,
    PRIMARY KEY(`ub_user_id`, `ub_blog_id`)
)
;