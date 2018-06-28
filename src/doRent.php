<?php


if(!isset($_POST['category']) || !isset($_POST['date1']) || !isset($_POST['date2']) || !isset($_POST['cb']) || $_POST['cb']==="" || !isset($_POST['crypt']) || $_POST['crypt']==="")
{
    header('Location: index.php?error=nopostdatacreate');
    exit();
}

require_once 'include/connection.php';


$rent = "INSERT INTO 
`rent`
(`id`, `nom`, `prenom`, `email`, `category`, `dateBegin`, `dateEnd`, `card`, `numb`)
VALUES 
(NULL, :nom, :prenom, :mail, :category, :date1, :date2, :cb, :crypt)
;";

$stmt = $conn->prepare($rent);
$stmt->bindValue(':nom', $_SESSION['nom']);
$stmt->bindValue(':prenom', $_SESSION['prenom']);
$stmt->bindValue(':mail', $_SESSION['email']);
$stmt->bindValue(':category', htmlentities($_POST['category']));
$stmt->bindValue(':date1', htmlentities($_POST['date1']));
$stmt->bindValue(':date2', htmlentities($_POST['date2']));
$stmt->bindValue(':cb', htmlentities($_POST['cb']));
$stmt->bindValue(':crypt', htmlentities($_POST['crypt']));
$stmt->execute();
header('Location: rent.php');