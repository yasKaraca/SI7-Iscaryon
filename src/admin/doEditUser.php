<?php

if(!isset($_POST['nom']) || $_POST['nom']==="" || !isset($_POST['prenom']) || $_POST['prenom']==="" || !isset($_POST['email']) || $_POST['email']==="" || !isset($_POST['planet']) || $_POST['planet']==="")
{
    header('Location: account.php?error=nopostdatacreate');
    exit();
}

if($_POST['mdp']!==$_POST['mdp-confirm']) {
    header('Location: account.php?error=passwordincorrecte');
    exit();
}

require_once '../include/connection.php';

$edit = "UPDATE
    `user`
    SET
    `nom` = :nom,
    `prenom` = :prenom,
    `email` = :email,
    `planet` = :planet
    WHERE
    id = :id
    ;";

$stmt = $conn->prepare($edit);
$stmt->bindValue(':id', htmlentities($_POST['id']));
$stmt->bindValue(':nom', htmlentities($_POST['nom']));
$stmt->bindValue(':prenom', htmlentities($_POST['prenom']));
$stmt->bindValue(':email', htmlentities($_POST['email']));
$stmt->bindValue(':planet', htmlentities($_POST['planet']));
$stmt->execute();
header('Location: users.php');