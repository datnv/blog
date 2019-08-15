CREATE TABLE `user`(
    `u_id` INT NOT NULL AUTO_INCREMENT,
    `u_name` VARCHAR(200) NOT NULL,
    `u_tel` VARCHAR(20) NULL,
    `u_mail` VARCHAR(200) NOT NULL,
    `u_password` VARCHAR(50) NOT NULL,
    `u_role` INT NOT NULL COMMENT '1: super admin, 2: admin(bloger), 3:viewer',
    `u_insert_date` DATETIME NOT NULL,
    `u_insert_id` INT NOT NULL,
    `u_update_date` DATETIME NULL,
    `u_update_id` INT NULL,
    `u_status` INT NOT NULL COMMENT '1: active, 2: stop, pending, 3: waiting approve, 4: requesting(emailのURL経由で登録待ち)',
    `u_social_flag` INT NULL DEFAULT '1' COMMENT '1: simple, 2: facebook, 3:twiter, 4:gmail',
    `u_confirm_token` VARCHAR(200) NULL COMMENT 'パスワード再設定用, 登録確認キー',
    `u_last_login` DATETIME NULL,
    `u_login_count` INT NULL,
    `u_del_flag` INT NOT NULL DEFAULT '2' COMMENT '1: deleted, 2: using',
    PRIMARY KEY(`u_id`)
) ;

ALTER TABLE `user` ADD INDEX(`u_mail`);