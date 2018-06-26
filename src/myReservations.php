<?php
    require_once 'include/connection.php';
    $myresa = "SELECT
    `id`,
    `nom`,
    `email`,
    `planet`,
    `category`,
    `dateBegin`,
    `dateEnd`
    FROM
    `place`
    WHERE
    `email` = :email
    ORDER BY
    id DESC 
    ;";

$stmt=$conn->prepare($myresa);
$stmt->bindValue(':email', $_SESSION['email']);
$stmt->execute();
$bookings = $stmt -> fetchAll();

include "header.php";

foreach ($bookings as $booking) {
    echo '<div>';
    echo '<p>'.$booking['nom'].'</p>';
    echo '<p>'.$booking['email'].'</p>';
    echo '<p>'.$booking['planet'].'</p>';
    echo '<p>'.$booking['category'].'</p>';
    echo '<p>'.$booking['dateBegin'].'</p>';
    echo '<p>'.$booking['dateEnd'].'</p>';
    echo '<a href="deleteReservation.php?id='.$booking['id'].'">Supprimer</a>';
    echo '</div>';
}
?>

<a href="index.php">accueil</a>
