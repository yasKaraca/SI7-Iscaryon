<?php
if (!isset($_GET['id'])) {
    header('Location: index.php?error=noidprovideddelete');
    exit;
}
require_once "include/connection.php";

$delete = "SELECT
    `id`
    FROM
    `user`
    WHERE 
    `id` = :id
;";
$stmt = $conn->prepare($delete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form action="doDeleteAccount.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <p>Êtes-vous sur de vouloir supprimer votre compte ?</p>
    <input type="submit" value="Supprimer mon compte">
</form>

<a href="account.php">Retourner sur mon espace personnel</a>
