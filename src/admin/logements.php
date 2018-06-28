<?php

require_once '../include/connection.php';
$requete = "SELECT
    `id`,
    `nom`,
    `prenom`,
    `email`,
    `category`,
    `dateBegin`,
    `dateEnd`
    FROM
    `rent`
    ORDER BY
    id DESC 
    ;";

$stmt=$conn->prepare($requete);
$stmt->execute();
$rents = $stmt -> fetchAll();

include 'header.php'; ?>

<section class="adminRes">
    <a href="addLog.php">Ajouter une location</a>
    <h2>Listes des reservations</h2>
    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>E-mail</th>
            <th>Planète</th>
            <th>Catégorie</th>
            <th>Date début</th>
            <th>Date fin</th>
        </tr>
        <?php
        foreach ($rents as $rent) {
            echo '<tr>';
            echo '<td>'.$rent['id'].'</td>';
            echo '<td>'.$rent['nom'].'</td>';
            echo '<td>'.$rent['prenom'].'</td>';
            echo '<td>'.$rent['email'].'</td>';
            echo '<td>'.$rent['planet'].'</td>';
            echo '<td>'.$rent['dateBegin'].'</td>';
            echo '<td>'.$rent['dateEnd'].'</td>';
            echo '<td><a href="editLog.php?id='.$rent['id'].'">Modifier</a></td>';
            echo '<td><a href="deleteLog.php?id='.$rent['id'].'">Supprimer</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</section>

<?php  include 'footer.php'; ?>
