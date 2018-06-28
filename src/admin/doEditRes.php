<?php


if(!isset($_POST['nom']) || $_POST['nom']==="" || !isset($_POST['prenom']) || $_POST['prenom']==="" ||  !isset($_POST['email']) ||!isset($_POST['category']) || !isset($_POST['date1']) || !isset($_POST['date2']))
{
    header('Location: index.php?error=nopostdatacreate');
    exit();
}

require_once '../include/connection.php';
$requete = "UPDATE
    `place`
    SET
    `nom` = :nom,
    `prenom` = :prenom,
    `email` = :email,
    `planet` = :planet,
    `category` = :category,
    `dateBegin` = :date1,
    `dateEnd` = :date2
    WHERE
    id = :id
    ;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':nom', htmlentities($_POST['nom']));
$stmt->bindValue(':prenom', htmlentities($_POST['prenom']));
$stmt->bindValue(':email', htmlentities($_POST['email']));
$stmt->bindValue(':planet', htmlentities($_POST['planet']));
$stmt->bindValue(':category', htmlentities($_POST['category']));
$stmt->bindValue(':date1', htmlentities($_POST['date1']));
$stmt->bindValue(':date2', htmlentities($_POST['date2']));
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header("Location: reservations.php");