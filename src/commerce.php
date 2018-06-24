<form action="addplace.php" method="post">
    <div>
        <label for="nom">Votre nom :</label>
        <input type="text" name="nom">
    </div>
    <div>
        <label for="cat">Type de commerce :</label>
        <select name="cat">
            <option value="alimentaire">Alimentaire</option>
            <option value="technologie">Technologie</option>
            <option value="textile">Textile</option>
            <option value="pierres précieuses">Pierres précieuses</option>
            <option value="bazar">Bazar</option>
            <option value="autre">Autre</option>
        </select>
    </div>
    <div>
        <label for="plan">Planète d'origine :</label>
        <input type="text" name="planete">
    </div>
    <div>
        <label for="debut">Date de début :</label>
        <input name="debut" type="date" value="<?= date('Y-m-d')?>">
    </div>
    <div>
        <label for="fin">Date de fin :</label>
        <input name="fin" type="date" value="<?= date('Y-m-d')?>">
    </div>
    <div>
        <label for="cb"> Numéro de carte bancaire :</label>
        <input name="cb" type="text">
    </div>
    <div>
        <label for="crypt"> Cryptogramme :</label>
        <input name="crypt" type="text">
    </div>
    <div>
        <input type="submit" value="Réserver un emplacement">
    </div>
</form>