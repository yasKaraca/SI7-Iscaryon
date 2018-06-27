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
?>

<h2 class="accountTitle">mes informations</h2>

<?php
    echo '<div class="account">';
    echo '<p class="account-text">Nom : '.$infos['nom'].'</p>';
    echo '<p class="account-text">E-mail : '.$infos['email'].'</p>';
    echo '<p class="account-text">Mot de passe : ********</p>';
    echo '<p class="account-text">Planète : '.$infos['planet'].'</p>';
    echo '<div class="account-box"><div class="account-box-btn"><a href="editAccount.php?id='.$infos['id'].'">Modifier informations</a></div>';
    echo '<div class="account-box-btn"><a href="deleteAccount.php?id='.$infos['id'].'">Supprimer mon compte</a></div></div>';
    echo '</div>';

    include 'footer.php';
?>