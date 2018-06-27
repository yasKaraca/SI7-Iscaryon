<?php
require_once 'include/connection.php';

include 'header.php';
?>
<h2 class="logintitle">connexion</h2>
<form class="login" action="doLogin.php" method="post">
    <div class="login-item">
        <input type="email" name="email" placeholder="E-mail">
    </div>
    <div class="login-item">
        <input type="password" name="mdp" placeholder="Mot de passe">
    </div>
    <div class="login-item center">
        <input type="submit" value="Se connecter">
    </div>

</form>
<div class="registerLink">
    <a href="addUser.php">S'inscrire ici</a>
</div>

<?php
include 'footer.php';
?>