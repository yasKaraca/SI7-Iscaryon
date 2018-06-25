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
<h2>Abonnement</h2>
<a href="add.php">Ajouter</a>
<table style="width:100%;">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Catégorie</th>
        <th>Planète</th>
        <th>Date du début</th>
        <th>Durée</th>
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
