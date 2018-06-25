CREATE SCHEMA `iscaryon`
DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `iscaryon`;

CREATE TABLE `iscaryon`.`place` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`nom` VARCHAR(50) NOT NULL,
`categorie` VARCHAR(50) NOT NULL,
`planete` VARCHAR(50) NOT NULL,
`datedebut` DATE NOT NULL,
`datefin` DATE NOT NULL,
`cbnum` VARCHAR(50) NOT NULL,
`cryptograme` VARCHAR(50) NOT NULL,
PRIMARY KEY (`id`)
);

CREATE TABLE `iscaryon`.`abonnement` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`nom` VARCHAR(50) NOT NULL,
`categorie` VARCHAR(50) NOT NULL,
`planete` VARCHAR(50) NOT NULL,
`datedebut` DATE NOT NULL,
`duree` INT NOT NULL,
`cbnum` VARCHAR(50) NOT NULL,
`cryptograme` VARCHAR(50) NOT NULL,
PRIMARY KEY (`id`)
);

CREATE TABLE `iscaryon`.`hebergement` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`nom` VARCHAR(50) NOT NULL,
`personnes` INT NOT NULL,
`formule` VARCHAR(50) NOT NULL,
`datedebut` DATE NOT NULL,
`datefin` DATE NOT NULL,
`cbnum` VARCHAR(50) NOT NULL,
`cryptograme` VARCHAR(50) NOT NULL,
PRIMARY KEY (`id`)
);
