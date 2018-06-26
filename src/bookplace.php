<?php
session_start();
?>
<form action="doBookPlace.php" method="post">
    <div>
        <label for="category">Quel type de produit vendez vous ?</label>
        <select title="category" name="category">
            <option value="alimentaire">Alimentaire</option>
            <option value="technologie">Technologie</option>
            <option value="textile">Textile</option>
            <option value="pierres précieuses">Pierres précieuses</option>
            <option value="bazar">Bazar</option>
            <option value="autre">Autre</option>
        </select>
    </div>
    <div>
        <label for="date1">Date de début :</label>
        <input title="date début" type="date" name="date1" required>
    </div>
    <div>
        <label for="date2">Date de fin :</label>
        <input title="date fin" type="date" name="date2" required>
    </div>
    <div>
        <label for="cb">Numéro de carte bancaire :</label>
        <input title="numéro carte bancaire" type="text" name="cb" required>
    </div>
    <div>
        <label for="crypt">Cryptogramme :</label>
        <input title="cryptogramme" type="text" name="crypt" required>
    </div>
    <div>
        <input type="submit" value="S'inscire sur Iscaryon">
    </div>
</form>
<?php
    var_dump($_SESSION);
?>