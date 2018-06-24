<?php
require_once 'include/connection.php';

if(!isset($_POST['nom']) || !isset($_POST['email']) || !isset($_POST['mdp']) || !isset($_POST['mdp-confirm']) || !isset($_POST['planete']) || !isset($_POST['categorie']))
{
    header('Location: index.php?error=nopostdatacreate');
}

$requete = "INSERT INTO 
`space`.`user`
(`id`, `nom`, `email`, `mdp`, `mdp-confirm`, `planet`, `category`)
VALUES 
(NULL, :nom, :email, :password, :passwordConfirm, :planet, :category)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':password', $_POST['mdp']);
$stmt->bindValue(':passwordConfirm', $_POST['mdp-confirm']);
$stmt->bindValue(':planet', $_POST['planet']);
$stmt->bindValue(':category', $_POST['category']);
$stmt->execute();
header('Location: index.php');