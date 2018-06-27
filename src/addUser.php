<?php include 'header.php'?>
<form action="doAddUser.php" method="post">
    <div>
        <label for="nom">Votre nom :</label>
        <input title="nom" type="text" name="nom" required>
    </div>
    <div>
        <label for="email">Adresse e-mail :</label>
        <input title="email" type="email" name="email" required>
    </div>
    <div>
        <label for="mdp">Mot de passe :</label>
        <input id="password" title="mdp" type="password" name="mdp" required>
    </div>
    <div>
        <label for="mdp-confirm">Confirmer mot de passe :</label>
        <input id="confirmPassword" title="mdp-confirm" type="password" name="mdp-confirm" required>
        <span id="message"></span>
    </div>
    <div>
        <label for="planet">Planète d'origine :</label>
        <input title="planet" type="text" name="planet" required>
    </div>
    <div>
        <input type="submit" value="S'inscire sur Iscaryon">
    </div>
</form>

<script type="text/javascript">
    $('#password, #confirmPassword').on('keyup', function () {
        if ($('#password').val() == $('#confirmPassword').val()) {
            $('#message').html('Mot de passe confirmé').css('color', 'green');
        } else
            $('#message').html('Mot de passe non confirmé').css('color', 'red');
    });
    
</script>

