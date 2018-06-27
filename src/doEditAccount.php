<?php

if(!isset($_POST['nom']) || $_POST['nom']==="" || !isset($_POST['email']) || $_POST['email']==="" || !isset($_POST['mdp']) || $_POST['mdp']==="" || !isset($_POST['mdp-confirm']) || $_POST['mdp-confirm']==="" || !isset($_POST['planet']) || $_POST['planet']==="")
{
    header('Location: account.php?error=nopostdatacreate');
    exit();
}

if($_POST['mdp']!==$_POST['mdp-confirm']) {
    header('Location: account.php?error=passwordincorrecte');
    exit();
}

require_once 'include/connection.php';

$edit = "UPDATE
    `user`
    SET
    `nom` = :nom,
    `email` = :email,
    `mdp` = :mdp,
    `planet` = :planet
    WHERE
    id = :id
    ;";

$stmt = $conn->prepare($edit);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':mdp', $_POST['mdp']);
$stmt->bindValue(':planet', $_POST['planet']);
$stmt->execute();
header('Location: account.php');