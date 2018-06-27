<?php
if(!isset($_GET['id'])) {
    header('Locaction:account.php?error=noidprovidededit');
    exit;
}
require_once "include/connection.php";

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
$stmt = $conn->prepare($account);
$stmt->bindValue(':id',$_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

include 'header.php';
?>

<form action="doEditAccount.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <div>
        <label for="nom">Votre nom :</label>
        <input title="nom" type="text" name="nom" value="<?= $row['nom'] ?>" required>
    </div>
    <div>
        <label for="email">Adresse e-mail :</label>
        <input title="email" type="email" name="email" value="<?= $row['email'] ?>" required>
    </div>
    <div>
        <label for="mdp">Mot de passe :</label>
        <input id="password" title="mdp" type="password" name="mdp" required>
    </div>
    <div>
        <label for="mdp-confirm">Confirmer mot de passe :</label>
        <input id="confirmPassword" title="mdp-confirm" type="password" name="mdp-confirm" required>
        <span id="message"></span>
    </div>
    <div>
        <label for="planet">Planète d'origine :</label>
        <input title="planet" type="text" name="planet" value="<?= $row['planet'] ?>" required>
    </div>
    <div>
        <input type="submit" value="Modifier ses informations">
    </div>
</form>
