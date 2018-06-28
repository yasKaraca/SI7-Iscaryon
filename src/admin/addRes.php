<?php
    require_once '../include/connection.php';
    include 'header.php';?>
<form class="book adminAdd" action="doAddRes.php" method="post">
    <div class="book-item">
        <input title="nom" type="text" name="nom" placeholder="Nom ..." required>
        <input title="prenom" type="text" name="prenom" placeholder="Prénom ..." required>
        <input title="email" type="email" name="email" placeholder="E-mail (ex: iscaryon@net.com)" required>
        <input title="planet" type="text" name="planet" placeholder="Planète d'origine" required>
    </div>
    <div class="book-item">
        <p class="book-item-libel">Type de produit</p>
        <select class="align" title="category" name="category">
            <option value="alimentaire">Alimentaire</option>
            <option value="technologie">Technologie</option>
            <option value="textile">Textile</option>
            <option value="pierres précieuses">Pierres précieuses</option>
            <option value="bazar">Bazar</option>
            <option value="autre">Autre</option>
        </select>
    </div>
    <div class="book-item">
        <label class="book-item-libel" for="date1">Date de début :</label>
        <input title="date début" type="date" name="date1" required>
        <label class="book-item-libel" for="date2">Date de fin :</label>
        <input title="date fin" type="date" name="date2" required>
    </div>
  <!--  <div class="book-item">
        <label class="book-item-libel" for="cb">Numéro de carte bancaire :</label>
        <input title="numéro carte bancaire" type="text" name="cb" required>
        <label class="book-item-libel" for="crypt">Cryptogramme :</label>
        <input title="cryptogramme" type="text" name="crypt" required>
    </div>-->
    <div class="book-item submit">
        <input type="submit" value="Ajouter un emplacement">
    </div>
</form>
