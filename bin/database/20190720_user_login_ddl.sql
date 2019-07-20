CREATE TABLE `user_login`(
    `ul_id` INT NOT NULL AUTO_INCREMENT,
    `ul_user_id` INT NOT NULL,
    `ul_login_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `ul_login_ip` VARCHAR(200) NOT NULL,
    PRIMARY KEY(`ul_id`)
)
;

ALTER TABLE `user_login` ADD INDEX(`ul_user_id`);
