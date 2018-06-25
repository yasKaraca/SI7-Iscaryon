<?php
/**
 * Created by PhpStorm.
 * User: brahim
 * Date: 25/06/2018
 * Time: 15:08
 */
require_once "../includes/connexion.php";

// if (!isset($_POST['id'])) {
//     header('Location: index.php?error=nopostdatadelete');
//     exit;
// }
$requete_heb = "DELETE FROM
`hebergement`
WHERE
`id` = :id
;";
echo $requete_heb;
var_dump($_POST);
$stmt = $conn->prepare($requete_heb);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: indexhebergement.php');