<?php
    require_once 'include/connection.php';
    $account = "SELECT 
    `id`,
    `nom`,
    `email`,
    `mdp`,
    `planet`
    FROM
    `user`
    WHERE
    `id` = :id
    ;";

$stmt=$conn->prepare($account);
$stmt->bindValue(':id', $_SESSION['id']);
$stmt->execute();
$infos = $stmt ->fetch(PDO::FETCH_ASSOC);

include 'header.php';

    echo '<div>';
    echo '<p>Nom : '.$infos['nom'].'</p>';
    echo '<p>E-mail : '.$infos['email'].'</p>';
    echo '<p>Mot de passe : ********</p>';
    echo '<p>Planète : '.$infos['planet'].'</p>';
    echo '<a href="editAccount.php?id='.$infos['id'].'">Modifier informations</a></br>';
    echo '<a href="deleteAccount.php?id='.$infos['id'].'">Supprimer mon compte</a>';
    echo '</div>';
?>

<a href="index.php">accueil</a>
