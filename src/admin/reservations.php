<?php

    require_once '../include/connection.php';
    $requete = "SELECT
    `id`,
    `nom`,
    `prenom`,
    `email`,
    `planet`,
    `category`,
    `dateBegin`,
    `dateEnd`
    FROM
    `place`
    ORDER BY
    id DESC 
    ;";

$stmt=$conn->prepare($requete);
$stmt->execute();
$reservations = $stmt -> fetchAll();

include 'header.php';
?>

<section class="adminRes">
    <a href="addRes.php">Ajouter une réservation</a>
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
        foreach ($reservations as $reservation) {
            echo '<tr>';
            echo '<td>'.$reservation['id'].'</td>';
            echo '<td>'.$reservation['nom'].'</td>';
            echo '<td>'.$reservation['prenom'].'</td>';
            echo '<td>'.$reservation['email'].'</td>';
            echo '<td>'.$reservation['planet'].'</td>';
            echo '<td>'.$reservation['category'].'</td>';
            echo '<td>'.$reservation['dateBegin'].'</td>';
            echo '<td>'.$reservation['dateEnd'].'</td>';
            echo '<td><a href="editRes.php?id='.$reservation['id'].'">Modifier</a></td>';
            echo '<td><a href="deleteRes.php?id='.$reservation['id'].'">Supprimer</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</section>
