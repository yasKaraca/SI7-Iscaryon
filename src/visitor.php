<?php
require_once 'include/connection.php';

include 'header.php';


if ($_SESSION['auth']) {
    include 'navConnect.php';
} else {
    include 'navUnconnect.php';
}
?>
<section class="content">
    <div class="content-top">
        <div class="topHorizontalLine"></div>
        <div class="topVerticalLine"></div>
        <img src="img/marche.png">
        <div class="botHorizontalLine"></div>
        <div class="botVerticalLine"></div>
    </div>
    <h2 class="content-title"> La place  zakera</br>Le coeur d'Iscaryon</h2>
    <p class="content-text">La place Zakera est l’endroit où des marchands issue des 4 coins de la galaxie
        viennent proposer leurs marchandises chaques jours de nouveaux marchands arrive et repartent alors profiter-en !</p>
</section>

<section class="content">
    <div class="content-top">
        <div class="topHorizontalLine"></div>
        <div class="topVerticalLine"></div>
        <img src="img/otarion.png">
        <div class="botHorizontalLine"></div>
        <div class="botVerticalLine"></div>
    </div>
    <h2 class="content-title"> La place  otarion</br>L'esprit d'Iscaryon</h2>
    <p class="content-text">Vous avez eu une journée difficile ? Vous êtes en vacances ou tout simplement en week-end ?
        Venez vous détendre et vous amusez à la place Otarion !</p>
</section>

<section class="activity">
    <div class="activity-item">
        <p class="activity-item-text">Restaurant</p>
        <img class="activity-item-img" src="img/restaurant.png">
    </div>
    <div class="activity-item">
        <p class="activity-item-text">Bar</p>
        <img class="activity-item-img" src="img/bar.png">
    </div>
    <div class="activity-item">
        <p class="activity-item-text">Bibliothèque</p>
        <img class="activity-item-img" src="img/library.png">
    </div>
    <div class="activity-item">
        <p class="activity-item-text">Stade de foot</p>
        <img class="activity-item-img" src="img/stade.png">
    </div>
</section>