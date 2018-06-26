<?php


if(!isset($_POST['nom']) || $_POST['nom']==="" || !isset($_POST['email']) || $_POST['email']==="" || !isset($_POST['mdp']) || $_POST['mdp']==="" || !isset($_POST['mdp-confirm']) || $_POST['mdp-confirm']==="" || !isset($_POST['planet']) || $_POST['planet']==="")
{
    header('Location: index.php?error=nopostdatacreate');
    exit();
}

if($_POST['mdp']!==$_POST['mdp-confirm']) {
    header('Location: index.php?error=passwordincorrecte');
    echo "Mot de passe invalide";
    exit();
}

require_once 'include/connection.php';

$requete = "INSERT INTO 
`user`
(`id`, `nom`, `email`, `mdp`, `planet`)
VALUES 
(NULL, :nom, :email, :mdp, :planet)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':mdp', $_POST['mdp']);
$stmt->bindValue(':planet', $_POST['planet']);
$stmt->execute();
header('Location: index.php');
