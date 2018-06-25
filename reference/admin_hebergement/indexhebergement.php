<?php

require_once "../includes/connexion.php";

$requete_heb ="SELECT
      `id`,
      `nom`,
      `personnes`,
      `formule`,
      `datedebut`,
      `datefin`,
      `cbnum`,
      `cryptograme`
      FROM
      hebergement
      ;";
$stmt=$conn->prepare($requete_heb);
$stmt->execute();
var_dump($_POST);
?>
<!-- GESTION DES ABONNEMENTS -->
<h2>Abonnement</h2>
<a href="addhebergement.php">Ajouter</a>
<table style="width:100%;">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Personnes</th>
        <th>Formule</th>
        <th>Date du début</th>
        <th>Date de fin</th>
        <th>Carte Bleu</th>
        <th>Cryptogramme</th>
    </tr>

    <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['nom']?></td>
            <td><?=$row['personnes']?></td>
            <td><?=$row['formule']?></td>
            <td><?=$row['datedebut']?></td>
            <td><?=$row['datefin']?></td>
            <td><?=$row['cbnum']?></td>
            <td><?=$row['cryptograme']?></td>
            <td>
                <a href="../admin_hebergement/deletehebergement.php?id=<?=$row['id']?>">Supprimer</a>
                <a href="../admin_hebergement/edithebergement.php?id=<?=$row['id']?>">Modifier</a>
            </td>
        </tr>
    <?php endwhile;?>
</table>

</body>
</html>
