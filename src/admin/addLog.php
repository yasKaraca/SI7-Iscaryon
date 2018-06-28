<?php
require_once '../include/connection.php';
include 'header.php';?>
    <form class="book adminAdd" action="doAddLog.php" method="post">
        <div class="book-item">
            <input title="nom" type="text" name="nom" placeholder="Nom ..." required>
            <input title="prenom" type="text" name="prenom" placeholder="Prénom ..." required>
            <input title="email" type="email" name="email" placeholder="E-mail (ex: iscaryon@net.com)" required>
        </div>
        <div class="book-item">
            <label class="book-item-libel" for="category">Type de logement : </label>
            <select title="category" name="category">
                <option value="chambre eco">Chambre double économique</option>
                <option value="chambre confort">Chambre double confort</option>
                <option value="suite eco">Suite économique (4 personnes)</option>
                <option value="suite confort">Suite confort (4 personnes)</option>
                <option value="suite spacieuse">Suite spacieuse (5 personnes)</option>
                <option value="suite luxueuse">Suite luxueuse (5 personnes)</option>
            </select>
        </div>
        <div class="book-item">
            <label class="book-item-libel" for="date1">Date de début :</label>
            <input title="date début" type="date" name="date1" required>
            <label class="book-item-libel" for="date2">Date de fin :</label>
            <input title="date fin" type="date" name="date2" required>
        </div>
        <div class="book-item submit">
            <input type="submit" value="Ajouter un logement">
        </div>
    </form>

<?php  include 'footer.php'; ?>