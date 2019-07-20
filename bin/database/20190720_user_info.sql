CREATE TABLE `user_info`(
    `ui_u_id` INT NOT NULL COMMENT 'Userのu_id',
    `ui_live_address` TEXT NULL,
    `ui_name` VARCHAR(200) NOT NULL COMMENT 'user name',
    `ui_tel` VARCHAR(20) NULL,
    `ui_mail` VARCHAR(200) NOT NULL,
    `ui_image` VARCHAR(200) NULL,
    `ui_introduce` TEXT NULL,
    `ui_work_at` VARCHAR(200) NULL,
    `ui_sex` INT NULL COMMENT '1:male, 2: female',
    `ui_birthday` VARCHAR(10) NULL,
    `ui_relationship` INT NULL COMMENT '1: Độc thân, 2:đã kết hôn, 3: đang hẹn hò...',
    `ui_blog_url` VARCHAR(200) NULL,
    `ui_language_use` VARCHAR(200) NULL,
    `ui_nick_name` VARCHAR(200) NULL,
    PRIMARY KEY(`ui_u_id`)
)
;