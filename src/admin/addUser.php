<?php
require_once '../include/connection.php';
include 'header.php';?>
<div class="form-container">
    <h2 class="form-container-title">Ajouter un utilisateur</h2>
    <form class="form-container-content" action="doAddUser.php" method="post">
        <div class="form-container-content-item">
            <input title="nom" type="text" name="nom" placeholder="Nom ..." required>
        </div>
        <div class="form-container-content-item">
            <input title="prenom" type="text" name="prenom" placeholder="Prénom ..." required>
        </div>
        <div class="form-container-content-item">
            <input title="email" type="email" name="email" placeholder="E-mail (ex: iscaryon@net.com)" required>
        </div>
        <div class="form-container-content-item">
            <input title="planet" type="text" name="planet" placeholder="Planète d'origine" required>
        </div>
        <div class="form-container-content-item">
            <input id="password" title="mdp" type="password" name="mdp" placeholder="Mot de passe ..." required>
        </div>
        <div class="form-container-content-item">
            <input id="confirmPassword" title="mdp-confirm" type="password" name="mdp-confirm" placeholder="Confirmer mot de passe" required>
        </div>
        <div id="messageDiv" class="form-container-content-item">
            <p id="message"></p>
        </div>
        <div class="form-container-content-item send">
            <input type="submit" value="Ajouter un utilisateur">
        </div>
    </form>
</div>
<script type="text/javascript">
    $('#password, #confirmPassword').on('keyup', function () {
        if ($('#password').val() == $('#confirmPassword').val()) {
            $('#message').html('Mot de passe confirmé').css('color', 'green');
        } else
            $('#message').html('Mot de passe non confirmé').css('color', 'red');
    });

</script>
