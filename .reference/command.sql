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
`crypto` VARCHAR(10) NOT NULL,
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
`crypto` VARCHAR(10) NOT NULL,
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
`crypto` VARCHAR(10) NOT NULL,
PRIMARY KEY (`id`)
);

INSERT INTO
`place`
(`id`, `nom`, `categorie`, `planete`, `datedebut`, `datefin`, `cbnum`, `crypto`)
VALUES
(NULL, 'Yasin', 'Alimentaire', 'Terre', '2018-06-22', '2018-06-25', '9999999999', '999')
;

CREATE SCHEMA `space`
DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `space`;

CREATE TABLE `user` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`nom` VARCHAR(50) NOT NULL,
`email` VARCHAR(50) NOT NULL,
`mdp` VARCHAR(50) NOT NULL,
`mdp-confirm` VARCHAR(50) NOT NULL,
`planet` VARCHAR(50) NOT NULL,
`category` VARCHAR(50) NOT NULL,
PRIMARY KEY (`id`)
);

INSERT INTO
`user`
(`id`, `nom`, `email`, `mdp`, `mdp-confirm`, `planete`, `categorie`)
VALUES
(NULL, 'Yasin', 'yasin.karaca@outlook.fr', 'blabla', 'blabla', 'Terre', 'Alimentaire')
;

