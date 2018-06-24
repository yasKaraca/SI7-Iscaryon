<form action="doAddUser.php" method="post">
    <fieldset>
        <label for="nom">Votre nom :</label>
        <input type="text" name="nom">
    </fieldset>
    <fieldset>
        <label for="email">Adresse e-mail :</label>
        <input type="email" name="email">
    </fieldset>
    <fieldset>
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp">
    </fieldset>
    <fieldset>
        <label for="mdp-confirm">Confirmer mot de passe :</label>
        <input type="password" name="mdp-confirm">
    </fieldset>
    <fieldset>
        <label for="planet">Planète d'origine :</label>
        <input type="text" name="planet">
    </fieldset>
    <fieldset>
        <label for="category">Type de commerce :</label>
        <select name="category">
            <option value="alimentaire">Alimentaire</option>
            <option value="technologie">Technologie</option>
            <option value="textile">Textile</option>
            <option value="pierres précieuses">Pierres précieuses</option>
            <option value="bazar">Bazar</option>
            <option value="autre">Autre</option>
        </select>
    </fieldset>
    <fieldset>
        <input type="submit" value="S'inscire sur Iscaryon">
    </fieldset>
</form>