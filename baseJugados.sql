SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
DROP SCHEMA IF EXISTS `cwgames` 
CREATE SCHEMA IF NOT EXISTS `cwgames` DEFAULT CHARACTER SET  utf8 COLLATE utf8_spanish2_ci;
USE `cwgames`;

CREATE TABLE `JUGADOS` (
	`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`nombre` text NOT NULL,
	`horas_jugadas` varchar(4) NOT NULL,
	`logros` text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO `JUGADOS` (`nombre`,`horas_jugadas`,`logros`)
VALUES 	
('Dead Cells','230','61/87'),
('Dota 2','3412','0/0'),
('Enter the Gungeon','106','8/54'),
('Hades','89','19/49'),
('Hollow Knight','77','17/63'),
('Moonlighter','105','33/67'),
('Starbound','166','31/51'),
('Terraria','623','90/104'),
('Gunfire Reborn','68','33/88'),
('Unturned','214','30/53'),
('Watch_Dogs','134','0/0'),
('Borderlands 2','71','25/75'),
('Brawhalla','76','13/49'),
('Undertale','11','0/0');

COMMIT;

