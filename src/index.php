<?php
require_once 'include/connection.php';

include 'header.php';
?>
<section class="welcome">
    <div class="welcome-top">
        <div class="topHorizontalLine"></div>
        <div class="topVerticalLine"></div>
        <img class="welcome-top-img" src="img/iscaryonlogo.png">
        <h1 class="welcome-top-title">Bienvenue sur Iscaryon</h1>
        <div class="welcome-top-titleLine"></div>
        <p class="welcome-top-text">Iscaryon est la plus grande place marchande de la galaxie !</p>
        <div class="botHorizontalLine"></div>
        <div class="botVerticalLine"></div>
    </div>
    <h3 class="welcome-choice">Êtes-vous un commerçant ou un visiteur</h3>
    <div class="welcome-answer">
        <div class="welcome-answer-link"><a class="welcome-answer-link-text"href="visitor.php">Visiteur</a></div>
        <div class="welcome-answer-link"><a class="welcome-answer-link-text"href="vendor.php">Commerçant</a></div>
    </div>
</section>

<?php
include 'footer.php';
?>


