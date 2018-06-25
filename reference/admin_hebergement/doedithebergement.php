<?php
/**
 * Created by PhpStorm.
 * User: brahim
 * Date: 25/06/2018
 * Time: 14:53
 */

require_once "../includes/connexion.php";

if(!isset($_POST['nom']) || !isset($_POST['personnes']) || !isset($_POST['formule']) ||  !isset($_POST['datedebut']) || !isset($_POST['datefin']) || !isset($_POST['cbnum']) || !isset($_POST['cryptograme'])){
    header('Location:indexhebergement.php?nopostdata');
    exit;
}
    $requete_heb = "UPDATE
      `hebergement`
      SET
      `nom` = :nom,
      `personnes` = :personnes,
      `formule` = :formule,
      `datedebut` = :datedebut,
      `datefin` = :datefin,
      `cbnum` = :cbnum,
      `cryptograme` = :cryptograme
      WHERE
      id = :id
      ;";


$stmt=$conn->prepare($requete_heb);
$stmt->bindValue(':nom', htmlentities($_POST['nom']));
$stmt->bindValue(':personnes', htmlentities($_POST['personnes']));
$stmt->bindValue(':formule', htmlentities($_POST['formule']));
$stmt->bindValue(':datedebut', htmlentities($_POST['datedebut']));
$stmt->bindvalue(':datefin', htmlentities($_POST['datefin']));
$stmt->bindValue(':cbnum', htmlentities($_POST['cbnum']));
$stmt->bindValue(':cryptograme', htmlentities($_POST['cryptograme']));
$stmt->bindValue(':id', htmlentities($_POST['id']));

$stmt->execute();
header('Location:indexhebergement.php');