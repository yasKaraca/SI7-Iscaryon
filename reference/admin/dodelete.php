<?php
require_once "../includes/connexion.php";

// if (!isset($_POST['id'])) {
//     header('Location: index.php?error=nopostdatadelete');
//     exit;
// }
$requete = "DELETE FROM
`abonnement`
WHERE
`id` = :id
;";
echo $requete;
var_dump($_POST);
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: index.php');
