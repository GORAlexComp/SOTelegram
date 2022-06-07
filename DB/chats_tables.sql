SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";

CREATE DATABASE IF NOT EXISTS `chats` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chats`;

CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `rname` varchar(255) DEFAULT NULL,
  `rsname` varchar(255) DEFAULT NULL,
  `active` double(1,0) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Chats';

CREATE TABLE IF NOT EXISTS `managers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `active` double(1,0) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `sender` int(11) NOT NULL,
  `view` double(1,0) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `messages_fk_1` (`uid`),
  KEY `messages_fk_2` (`sender`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Messages';

ALTER TABLE `managers`
  ADD CONSTRAINT `managers_fk_1` FOREIGN KEY (`uid`) REFERENCES `chats` (`uid`);

ALTER TABLE `messages`
  ADD CONSTRAINT `messages_fk_1` FOREIGN KEY (`uid`) REFERENCES `chats` (`uid`),
  ADD CONSTRAINT `messages_fk_2` FOREIGN KEY (`sender`) REFERENCES `chats` (`uid`);
