<?php


if(!isset($_POST['category']) || !isset($_POST['date1']) || !isset($_POST['date2']))
{
    header('Location: index.php?error=nopostdatacreate');
    exit();
}

require_once '../include/connection.php';


$resa = "INSERT INTO 
`place`
(`id`, `nom`, `prenom`, `email`, `planet`, `category`, `dateBegin`, `dateEnd`, `card`, `numb`)
VALUES 
(NULL, :nom, :prenom, :mail, :planet,  :category, :date1, :date2, :cb, :crypt)
;";

$stmt = $conn->prepare($resa);
$stmt->bindValue(':nom', htmlentities($_POST['nom']));
$stmt->bindValue(':prenom', htmlentities($_POST['prenom']));
$stmt->bindValue(':mail', htmlentities($_POST['email']));
$stmt->bindValue(':planet', htmlentities($_POST['planet']));
$stmt->bindValue(':category', htmlentities($_POST['category']));
$stmt->bindValue(':date1', htmlentities($_POST['date1']));
$stmt->bindValue(':date2', htmlentities($_POST['date2']));
$stmt->bindValue(':cb', '');
$stmt->bindValue(':crypt', '');
$stmt->execute();
header('Location: reservations.php');