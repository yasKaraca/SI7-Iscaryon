<?php
require_once "../includes/connexion.php";

if(!isset($_POST['nom']) || !isset($_POST['categorie']) || !isset($_POST['planete']) ||  !isset($_POST['datedebut']) || !isset($_POST['datefin']) || !isset($_POST['cbnum']) || !isset($_POST['cryptograme'])){
    header('Location:indexplace.php?nopostdata');
    exit;
}
$requete_place =
    "UPDATE
      `place`
      SET
      `nom` = :nom,
      `categorie` = :categorie,
      `planete` = :planete,
      `datedebut` = :datedebut,
      `datefin` = :datefin,
      `cbnum` = :cbnum,
      `cryptograme` = :cryptograme
      WHERE
      id = :id
      ;";


$stmt=$conn->prepare($requete_place);
$stmt->bindValue(':nom', htmlentities($_POST['nom']));
$stmt->bindValue(':categorie', htmlentities($_POST['categorie']));
$stmt->bindValue(':planete', htmlentities($_POST['planete']));
$stmt->bindValue(':datedebut', htmlentities($_POST['datedebut']));
$stmt->bindvalue(':datefin', htmlentities($_POST['datefin']));
$stmt->bindValue(':cbnum', htmlentities($_POST['cbnum']));
$stmt->bindValue(':cryptograme', htmlentities($_POST['cryptograme']));
$stmt->bindValue(':id', htmlentities($_POST['id']));

$stmt->execute();
header('Location:indexplace.php');
