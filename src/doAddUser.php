<?php


if(!isset($_POST['nom']) || !isset($_POST['email']) || !isset($_POST['mdp']) || !isset($_POST['mdp-confirm']) || !isset($_POST['planet']) || !isset($_POST['category']))
{
    header('Location: index.php?error=nopostdatacreate');
}

require_once 'include/connection.php';

$requete = "INSERT INTO 
`user`
(`id`, `nom`, `email`, `mdp`, `mdp-confirm`, `planet`, `category`)
VALUES 
(NULL, :nom, :email, :mdp, :mdp-confirm, :planet, :category)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':mdp', $_POST['mdp']);
$stmt->bindValue(':mdp-confirm', $_POST['mdp-confirm']);
$stmt->bindValue(':planet', $_POST['planet']);
$stmt->bindValue(':category', $_POST['category']);
$stmt->execute();
header('Location: index.php');