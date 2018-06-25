<?php

require_once "../includes/connexion.php";

 if(!isset($_GET['id'])) {
     header('Location:index.php?noprovidededit');
 }
$requete_heb = 'SELECT
  `id`,
  `nom`,
  `personnes`,
  `formule`,
  `datedebut`,
  `datefin`,
  `cbnum`,
  `cryptograme`
  FROM
  `hebergement`
  WHERE
  id = :id
  ;';
$stmt=$conn->prepare($requete_heb);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="doedithebergement.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <label for="nom">Nom</label> <input type="text" name="nom" value="<?=$row['nom']?>"><br>
        <label for="personnes">Personnes</label> <input type="text" name="personnes" value="<?=$row['personnes']?>"><br>
        <label for="formule">Formule</label> <input type="text" name="formule" value="<?=$row['formule']?>"><br>
        <label for="datedebut">Date du début</label> <input type="date" name="datedebut" value="<?=$row['datedebut']?>"><br>
        <label for="datefin">Date de fin</label> <input type="text" name="datefin" value="<?=$row['datefin']?>"><br>
        <label for="cbnum">Carte Bleu</label> <input type="text" name="cbnum" value="<?=$row['cbnum']?>"><br>
        <label for="cryptograme">Cryptogramme</label> <input type="text" name="cryptograme" value="<?=$row['cryptograme']?>"><br>
        <input type="submit" value="Modifier">
    </form>
</body>
</html>
