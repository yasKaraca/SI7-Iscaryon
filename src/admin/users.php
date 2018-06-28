<?php

require_once '../include/connection.php';
$requete = "SELECT
    `id`,
    `nom`,
    `prenom`,
    `email`,
    `planet`
    FROM
    `user`
    ORDER BY
    id DESC 
    ;";

$stmt=$conn->prepare($requete);
$stmt->execute();
$users = $stmt -> fetchAll();

include 'header.php'; ?>

<section class="adminRes">
    <a href="addUser.php">Ajouter un utilisateur</a>
    <h2>Listes des utilisateurs</h2>
    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>E-mail</th>
            <th>Planète</th>
        </tr>
        <?php
        foreach ($users as $user) {
            echo '<tr>';
            echo '<td>'.$user['id'].'</td>';
            echo '<td>'.$user['nom'].'</td>';
            echo '<td>'.$user['prenom'].'</td>';
            echo '<td>'.$user['email'].'</td>';
            echo '<td>'.$user['planet'].'</td>';
            echo '<td><a href="editUser.php?id='.$user['id'].'">Modifier</a></td>';
            echo '<td><a href="deleteUser.php?id='.$user['id'].'">Supprimer</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</section>

<?php  include 'footer.php'; ?>
