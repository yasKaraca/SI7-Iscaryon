<?php

if(!isset($_POST['email']) || $_POST['email']==="" || !isset($_POST['mdp']) || $_POST['mdp']==="") {
    header('Location: index.php?error=nopostdatacreate');
    exit();
}

require_once 'include/connection.php';

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
$user = $stmt -> fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION = [
        'auth' => true,
        'id' => $user['id'],
        'nom' => $user['nom'],
        'email' => $user['email'],
        'planet' => $user['planet']
    ];
    header("Location: index.php");
    exit();
}else{
    header('Location: index.php?error=wrongdata');
    exit();
}

