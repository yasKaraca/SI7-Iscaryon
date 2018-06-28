<?php
    require_once 'include/connection.php';
    $myresa = "SELECT
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
?>
<section class="resa">
    <h2 class="resa-title">mes reservations</h2>
<?
foreach ($bookings as $booking) {
    echo '<div class="resa-item">';
    echo '<p >Type de produits :<br>'.$booking['category'].'</p>';
    echo '<p >Date de début :<br>'.$booking['dateBegin'].'</p>';
    echo '<p >Date de fin :<br>'.$booking['dateEnd'].'</p>';
    echo '<a href="deleteReservation.php?id='.$booking['id'].'"><div class="delete-icon"><img src="img/delete.png"></div></a>';
    echo '</div>';
}
?>
</section>
<?php include 'footer.php'; ?>
