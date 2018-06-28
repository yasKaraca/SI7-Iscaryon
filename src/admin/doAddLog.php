<?php


if(!isset($_POST['nom']) || $_POST['nom']==="" || !isset($_POST['prenom']) || $_POST['prenom']==="" ||  !isset($_POST['email']) || $_POST['email']==="" || !isset($_POST['category']) || !isset($_POST['date1']) || !isset($_POST['date2']))
{
    header('Location: index.php?error=nopostdatacreate');
    exit();
}

require_once '../include/connection.php';


$resa = "INSERT INTO 
`rent`
(`id`, `nom`, `prenom`, `email`, `category`, `dateBegin`, `dateEnd`, `card`, `numb`)
VALUES 
(NULL, :nom, :prenom, :mail, :category, :date1, :date2, :cb, :crypt)
;";

$stmt = $conn->prepare($resa);
$stmt->bindValue(':nom', htmlentities($_POST['nom']));
$stmt->bindValue(':prenom', htmlentities($_POST['prenom']));
$stmt->bindValue(':mail', htmlentities($_POST['email']));
$stmt->bindValue(':category', htmlentities($_POST['category']));
$stmt->bindValue(':date1', htmlentities($_POST['date1']));
$stmt->bindValue(':date2', htmlentities($_POST['date2']));
$stmt->bindValue(':cb', '');
$stmt->bindValue(':crypt', '');
$stmt->execute();
header('Location: logements.php');