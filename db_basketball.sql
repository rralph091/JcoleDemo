CREATE DATABASE db_basketball;

USE db_basketball;

CREATE TABLE `BBall` (
	`Experience` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`Name` VARCHAR(40) NOT NULL DEFAULT '',
	`Position` VARCHAR(40) NOT NULL DEFAULT '',
	PRIMARY KEY (`pet_id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=MyISAM
AUTO_INCREMENT=10000
;

INSERT INTO BBall(player_name, player_experience, player_position) VALUES("Lonzo Ball" , "3" , "Point Guard");
INSERT INTO BBall(player_name, player_experience, player_position) VALUES("Lebron James" , "17" , "Small Forward");
INSERT INTO BBall(player_name, player_experience, player_position) VALUES("Zion Williamson" , "1", "Small Forward");
INSERT INTO BBall(player_name, player_experience, player_position) VALUES("Kyrie Irving" , "8" , "Point Guard");
INSERT INTO BBall(player_name, player_experience, player_position) VALUES("Kevin Durant" , "12" , "Small Forward");
INSERT INTO BBall(player_name, player_experience, player_position) VALUES("Kobe Bryant" , "20" , "Shooting Guard");
