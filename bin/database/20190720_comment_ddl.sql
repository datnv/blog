CREATE TABLE `comment`(
    `c_id` INT NOT NULL AUTO_INCREMENT,
    `c_post_id` INT NOT NULL,
    `c_email` VARCHAR(200) NOT NULL,
    `c_homepage` VARCHAR(200) NULL,
    `c_name` VARCHAR(200) NOT NULL,
    `c_text` TEXT NOT NULL,
    `c_ip` VARCHAR(50) NULL,
    PRIMARY KEY(`c_id`)
)
;

ALTER TABLE `comment` ADD `c_insert_date` DATETIME NOT NULL AFTER `c_ip`,
ADD `c_del_flag` INT NOT NULL DEFAULT '2' AFTER `c_insert_date`,
ADD `c_update_date` TIMESTAMP NULL AFTER `c_del_flag`,
ADD `c_insert_id` INT NOT NULL AFTER `c_update_date`,
ADD `c_update_id` INT NULL AFTER `c_insert_id`
;