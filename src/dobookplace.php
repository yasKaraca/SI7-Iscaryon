<?php


if(!isset($_POST['category']) || !isset($_POST['date1']) || !isset($_POST['date2']) || !isset($_POST['cb']) || $_POST['cb']==="" || !isset($_POST['crypt']) || $_POST['crypt']==="")
{
    header('Location: index.php?error=nopostdatacreate');
    exit();
}

require_once 'include/connection.php';


$resa = "INSERT INTO 
`place`
(`id`, `nom`, `email`, `planet`, `category`, `dateBegin`, `dateEnd`, `card`, `numb`)
VALUES 
(NULL, :nom, :mail, :planet,  :category, :date1, :date2, :cb, :crypt)
;";

$stmt = $conn->prepare($resa);
$stmt->bindValue(':nom', $_SESSION['nom']);
$stmt->bindValue(':mail', $_SESSION['email']);
$stmt->bindValue(':planet', $_SESSION['planet']);
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':date1', $_POST['date1']);
$stmt->bindValue(':date2', $_POST['date2']);
$stmt->bindValue(':cb', $_POST['cb']);
$stmt->bindValue(':crypt', $_POST['crypt']);
$stmt->execute();
header('Location: index.php');