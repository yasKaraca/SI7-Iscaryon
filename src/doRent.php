<?php


if(!isset($_POST['category']) || !isset($_POST['date1']) || !isset($_POST['date2']) || !isset($_POST['cb']) || $_POST['cb']==="" || !isset($_POST['crypt']) || $_POST['crypt']==="")
{
    header('Location: index.php?error=nopostdatacreate');
    exit();
}

require_once 'include/connection.php';


$rent = "INSERT INTO 
`rent`
(`id`, `nom`, `email`, `category`, `dateBegin`, `dateEnd`, `card`, `numb`)
VALUES 
(NULL, :nom, :mail, :category, :date1, :date2, :cb, :crypt)
;";

$stmt = $conn->prepare($rent);
$stmt->bindValue(':nom', $_SESSION['nom']);
$stmt->bindValue(':mail', $_SESSION['email']);
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':date1', $_POST['date1']);
$stmt->bindValue(':date2', $_POST['date2']);
$stmt->bindValue(':cb', $_POST['cb']);
$stmt->bindValue(':crypt', $_POST['crypt']);
$stmt->execute();
header('Location: rent.php');