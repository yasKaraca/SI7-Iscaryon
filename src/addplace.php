<?php
/*
if(!isset($_POST['nom']) || !isset($_POST['categorie']) || !isset($_POST['planete']) || !isset($_POST['datedebut']) || !isset($_POST['datefin']) || !isset($_POST['cbnum']) || !isset($_POST['crypto'])){
    header('Location: index.php?error=formulaireincomplet');
    exit();
}*/
require_once 'include/connection.php';
$requete = "INSERT INTO 
`place`
( `id`, `nom`, `categorie`, `planete`, `datedebut`, `datefin`, `cbnum`, `crypto`)
VALUES
(NULL, :nom, :cat, :plan, :debut, :fin, :cb, :crypt)
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':cat', $_POST['categorie']);
$stmt->bindValue(':plan', $_POST['planete']);
$stmt->bindValue(':debut', $_POST['datedebut']);
$stmt->bindValue(':fin', $_POST['datefin']);
$stmt->bindValue(':cb', $_POST['cbnum']);
$stmt->bindValue(':crypt', $_POST['crypto']);
$stmt->execute();
header('Location: index.php');
