<?php

if(!isset($_POST['email']) || $_POST['email']==="" || !isset($_POST['mdp']) || $_POST['mdp']==="") {
    header('Location: index.php?error=nopostdatacreate');
    exit();
}

require_once 'include/connection.php';


session_start();

$profil = "SELECT 
    `id`,
    `nom`,
    `email`,
    `mdp`,
    `planet`
    FROM
    `user`
    WHERE 
    `email` = :email AND `mdp` = :mdp;";

$stmt=$conn->prepare($profil);
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':mdp', $_POST['mdp']);
$stmt->execute();
$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $row) {
    echo $row['email'];
}
