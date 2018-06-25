<?php
require_once "../includes/connexion.php";

// if (!isset($_POST['id'])) {
//     header('Location: index.php?error=nopostdatadelete');
//     exit;
// }
$requete_place = "DELETE FROM
`place`
WHERE
`id` = :id
;";
echo $requete_place;
var_dump($_POST);
$stmt = $conn->prepare($requete_place);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: indexplace.php');
