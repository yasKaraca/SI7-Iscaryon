<?php
if(!isset($_GET['id'])) {
    header('Locaction:account.php?error=noidprovidededit');
    exit;
}
require_once "../include/connection.php";

$account = "SELECT 
    `id`,
    `nom`,
    `prenom`,
    `email`,
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
    <h2 class="editAccountTitle">modifier utilisateur</h2>
    <form class="editAccount" action="doEditUser.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <div class="editAccount-content">
            <label for="nom">Nom :</label>
            <input title="nom" type="text" name="nom" value="<?= $row['nom'] ?>" required>
        </div>
        <div class="editAccount-content">
            <label for="nom">Prenom :</label>
            <input title="nom" type="text" name="prenom" value="<?= $row['prenom'] ?>" required>
        </div>
        <div class="editAccount-content">
            <label for="email">Adresse e-mail :</label>
            <input title="email" type="email" name="email" value="<?= $row['email'] ?>" required>
        </div>
        <div class="editAccount-content">
            <label for="planet">Planète d'origine :</label>
            <input title="planet" type="text" name="planet" value="<?= $row['planet'] ?>" required>
        </div>
        <div class="editAccount-submit">
            <input type="submit" value="Modifier les informations">
        </div>
    </form>


<?php
include 'footer.php';
?>