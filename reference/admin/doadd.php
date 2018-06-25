<?php
require_once "../includes/connexion.php";

if(!isset($_POST['nom']) || !isset($_POST['categorie']) || !isset($_POST['planete']) ||  !isset($_POST['datedebut']) || !isset($_POST['duree']) || !isset($_POST['cbnum']) || !isset($_POST['cryptograme'])){
    //header('Location:index.php?nopostdata');
    //exit;
 }

$requete = "
INSERT INTO
  `abonnement`
  (`id`,
  `nom`,
  `categorie`,
  `planete`,
  `datedebut`,
  `duree`,
  `cbnum`,
  `cryptograme`)
VALUES
  (NULL,
  :nom,
  :categorie,
  :planete,
  :datedebut,
  :duree,
  :cbnum,
  :cryptograme)
;";
var_dump($_POST);
$stmt=$conn->prepare($requete);
$stmt->bindValue(':nom', htmlentities($_POST['nom']));
$stmt->bindValue(':categorie', htmlentities($_POST['categorie']));
$stmt->bindValue(':planete', htmlentities($_POST['planete']));
$stmt->bindValue(':datedebut', htmlentities($_POST['datedebut']));
$stmt->bindValue(':duree', htmlentities($_POST['duree']));
$stmt->bindvalue(':cbnum', htmlentities($_POST['cbnum']));
$stmt->bindValue(':cryptograme', htmlentities($_POST['cryptograme']));
$stmt->execute();

header('Location: index.php');
