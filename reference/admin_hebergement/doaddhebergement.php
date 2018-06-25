<?php
require_once "../includes/connexion.php";

if(!isset($_POST['nom']) || !isset($_POST['personnes']) || !isset($_POST['formule']) ||  !isset($_POST['datedebut']) || !isset($_POST['datefin']) || !isset($_POST['cbnum']) || !isset($_POST['cryptograme'])){
    //header('Location:indexhebergement.php?nopostdata');
    //exit;
}

$requete_heb = "
INSERT INTO
  `hebergement`
  (`id`,
  `nom`,
  `personnes`,
  `formule`,
  `datedebut`,
  `datefin`,
  `cbnum`,
  `cryptograme`)
VALUES
  (NULL,
  :nom,
  :personnes,
  :formule,
  :datedebut,
  :datefin,
  :cbnum,
  :cryptograme)
;";


$stmt=$conn->prepare($requete_heb);
$stmt->bindValue(':nom', htmlentities($_POST['nom']));
$stmt->bindValue(':personnes', htmlentities($_POST['personnes']));
$stmt->bindValue(':formule', htmlentities($_POST['formule']));
$stmt->bindValue(':datedebut', htmlentities($_POST['datedebut']));
$stmt->bindValue(':datefin', htmlentities($_POST['datefin']));
$stmt->bindvalue(':cbnum', htmlentities($_POST['cbnum']));
$stmt->bindValue(':cryptograme', htmlentities($_POST['cryptograme']));
$stmt->execute();

header('Location: indexhebergement.php');