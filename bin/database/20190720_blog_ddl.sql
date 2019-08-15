CREATE TABLE `blog`(
    `b_id` INT NOT NULL AUTO_INCREMENT,
    `b_url_name` VARCHAR(50) NOT NULL COMMENT 'tên đường dẫn sau tên miền tới trang blog cá nhân của mình',
    PRIMARY KEY(`b_id`)
)
;

ALTER TABLE `blog` ADD `b_allow_comment` INT NOT NULL DEFAULT '1' COMMENT '1: allow, 2: not allow' AFTER `b_url_name`,
ADD `b_insert_date` DATETIME NOT NULL AFTER `b_allow_comment`,
ADD `b_insert_id` INT NOT NULL AFTER `b_insert_date`,
ADD `b_udpate_date` DATETIME NULL AFTER `b_insert_id`,
ADD `b_update_id` INT NULL AFTER `b_udpate_date`,
ADD `b_del_flag` INT NOT NULL DEFAULT '2' COMMENT '1: deleted, 2: using' AFTER `b_update_id`,
ADD `b_title` VARCHAR(
    200
) NOT NULL AFTER `b_del_flag`,
ADD `b_subtitle` VARCHAR(
    200
) NULL AFTER `b_title`
;

ALTER TABLE `blog` ADD INDEX(`b_url_name`);