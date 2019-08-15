CREATE TABLE `categories`(
    `cat_id` INT NOT NULL AUTO_INCREMENT,
    `cat_name` VARCHAR(200) NOT NULL,
    `cat_insert_date` DATETIME NOT NULL,
    `cat_insert_id` INT NOT NULL,
    `cat_update_date` DATETIME NULL,
    `cat_update_id` INT NULL,
    `cat_del_flag` INT NOT NULL DEFAULT '2',
    `cat_user_id` INT NOT NULL,
    `cat_blog_id` INT NOT NULL,
    PRIMARY KEY(`cat_id`)
)
;