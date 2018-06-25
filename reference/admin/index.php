<?php

require_once "../includes/connexion.php";

$requete ="SELECT
      `id`,
      `nom`,
      `categorie`,
      `planete`,
      `datedebut`,
      `duree`,
      `cbnum`,
      `cryptograme`
      FROM
      abonnement
      ;";
$stmt=$conn->prepare($requete);
$stmt->execute();
?>
<!-- GESTION DES ABONNEMENTS -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<h2>Abonnement</h2>
<a href="add.php">Ajouter</a>
<table scope="row"style="width:100%;">
    <tr>
        <th scope="row">Id</th>
        <th scope="row">Nom</th>
        <th scope="row">Catégorie</th>
        <th scope="row">Planète</th>
        <th scope="row">Date du début</th>
        <th scope="row">Durée</th>
        <th scope="row">Carte Bleu</th>
        <th scope="row">Cryptogramme</th>
    </tr>

    <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['nom']?></td>
            <td><?=$row['categorie']?></td>
            <td><?=$row['planete']?></td>
            <td><?=$row['datedebut']?></td>
            <td><?=$row['duree']?></td>
            <td><?=$row['cbnum']?></td>
            <td><?=$row['cryptograme']?></td>
            <td>
                <a href="delete.php?id=<?=$row['id']?>">Supprimer</a>
                <a href="edit.php?id=<?=$row['id']?>">Modifier</a>
            </td>
        </tr>
    <?php endwhile;?>
</table>

</body>
</html>
