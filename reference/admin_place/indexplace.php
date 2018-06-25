<?php

require_once "../includes/connexion.php";

$requete_place ="SELECT
      `id`,
      `nom`,
      `categorie`,
      `planete`,
      `datedebut`,
      `datefin`,
      `cbnum`,
      `cryptograme`
      FROM
      place
      ;";
$stmt=$conn->prepare($requete_place);
$stmt->execute();
?>
<!-- GESTION DES ABONNEMENTS -->
<h2>Place</h2>
<a href="addplace.php">Ajouter</a>
<table style="width:100%;">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Catégorie</th>
        <th>Planète</th>
        <th>Date du début</th>
        <th>Date de fin</th>
        <th>Carte Bleu</th>
        <th>Cryptogramme</th>
    </tr>

    <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['nom']?></td>
            <td><?=$row['categorie']?></td>
            <td><?=$row['planete']?></td>
            <td><?=$row['datedebut']?></td>
            <td><?=$row['datefin']?></td>
            <td><?=$row['cbnum']?></td>
            <td><?=$row['cryptograme']?></td>
            <td>
                <a href="deleteplace.php?id=<?=$row['id']?>">Supprimer</a>
                <a href="editplace.php?id=<?=$row['id']?>">Modifier</a>
            </td>
        </tr>
    <?php endwhile;?>
</table>

</body>
</html>
