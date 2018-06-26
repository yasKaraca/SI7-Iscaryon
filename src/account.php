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
$infos = $stmt ->fetchAll();

include 'header.php';

foreach ($infos as $info) {
    echo '<div>';
    echo '<p>Nom : '.$info['nom'].'</p>';
    echo '<p>E-mail : '.$info['email'].'</p>';
    echo '<p>Mot de passe : ********</p>';
    echo '<p>Planète : '.$info['planet'].'</p>';
    echo '<a href="editAccount.php?id='.$info['id'].'">Modifier informations</a></br>';
    echo '<a href="deleteAccount.php?id='.$info['id'].'">Supprimer mon compte</a>';
    echo '</div>';
}
?>

<a href="index.php">accueil</a>
