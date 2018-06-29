<?php
    include 'header.php';
?>
<h2 class="bookTitle">reserver un emplacement</h2>
<form class="book" action="doBookPlace.php" method="post">
    <div class="book-item">
        <div class="book-item-number">1</div>
        <p class="book-item-title">type de produit</p>
        <label class="book-item-libel" for="category">Vous vendez principalement :</label>
        <select class="align" title="category" name="category">
            <option value="alimentaire">Alimentaire</option>
            <option value="technologie">Technologie</option>
            <option value="textile">Textile</option>
            <option value="pierres précieuses">Pierres précieuses</option>
            <option value="bibelots">Bibelots</option>
            <option value="autre">Autre</option>
        </select>
    </div>
    <div class="book-item">
        <div class="book-item-number">2</div>
        <p class="book-item-title">Choix de la période</p>
        <label class="book-item-libel" for="date1">Date de début :</label>
        <input title="date début" type="date" name="date1" id="startd" required>
        <label class="book-item-libel" for="date2" id="endd">Date de fin :</label>
        <input title="date fin" type="date" name="date2" required>
    </div>
    <div class="book-item">
        <div class="book-item-number">3</div>
        <p class="book-item-title">Paiement</p>
        <label class="book-item-libel" for="cb">Numéro de carte bancaire :</label>
        <input title="numéro carte bancaire" type="text" name="cb" required>
        <label class="book-item-libel" for="crypt">Cryptogramme :</label>
        <input title="cryptogramme" type="text" name="crypt" required>
    </div>
    <div class="book-item submit">
        <input type="submit" value="Réserver un emplacement">
    </div>
</form>

<?php
   include 'footer.php';
?>