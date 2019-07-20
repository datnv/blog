CREATE TABLE `post`(
    `p_id` INT NOT NULL AUTO_INCREMENT,
    `p_discriminator` TEXT NULL,
    `p_title` VARCHAR(200) NOT NULL,
    `p_text` TEXT NOT NULL,
    `p_insert_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `p_insert_id` INT NOT NULL,
    `p_blog_id` INT NOT NULL,
    `p_user_id` INT NOT NULL,
    `p_del_flag` INT NOT NULL DEFAULT '2',
    `p_update_date` DATETIME NULL,
    `p_update_id` INT NULL,
    `p_main_image` VARCHAR(500) NULL,
    `p_post_image` VARCHAR(500) NULL,
    `p_category_id` INT NOT NULL,
    `p_tag` TEXT NULL,
    PRIMARY KEY(`p_id`)
)
;