
/*CREATE DATABASE `ttt_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;*/
USE `ttt_db`;




DROP TABLE IF EXISTS `tictactoe`;
CREATE TABLE IF NOT EXISTS `tictactoe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gameid` int(11) DEFAULT NULL,
  `hostsign` char(4) DEFAULT NULL,
  `guestsign` char(4) DEFAULT NULL,
  `boardpattern` varchar(11) DEFAULT '000000000',
  `play` char(1) DEFAULT 'X' NOT NULL,
  `over` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
)