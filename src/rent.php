<?php
include 'header.php';
?>
    <h2 class="bookTitle">reserver un logement</h2>
<form class="book" action="doRent.php" method="post">
    <div class="book-item">
        <div class="book-item-number">1</div>
        <p class="book-item-title">type de produit</p>
        <label class="book-item-libel" for="category">Choisissez votre hébergement : </label>
        <select title="category" name="category">
            <option value="chambre eco">Chambre double économique</option>
            <option value="chambre confort">Chambre double confort</option>
            <option value="suite eco">Suite économique (4 personnes)</option>
            <option value="suite confort">Suite confort (4 personnes)</option>
            <option value="suite spacieuse">Suite spacieuse (5 personnes)</option>
            <option value="suite luxueuse">Suite luxueuse (5 personnes)</option>
        </select>
    </div>
    </div>
    <div class="book-item">
        <div class="book-item-number">2</div>
        <p class="book-item-title">Choix de la période</p>
        <label class="book-item-libel" for="date1">Date de début :</label>
        <input title="date début" type="date" name="date1" required>
        <label class="book-item-libel" for="date2">Date de fin :</label>
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
include 'include/connection.php';
$myrent = "SELECT
    `id`,
    `nom`,
    `prenom`,
    `email`,
    `category`,
    `dateBegin`,
    `dateEnd`
    FROM
    `rent`
    WHERE
    `email` = :email
    ORDER BY
    id DESC 
    ;";

$stmt=$conn->prepare($myrent);
$stmt->bindValue(':email', $_SESSION['email']);
$stmt->execute();
$rents = $stmt -> fetchAll();
?>
<h3 class="rentSubTitle">mes reservations</h3>
<section class="resa">
<?php
foreach ($rents as $rent) {
    echo '<div class="resa-item">';
    echo '<p><Type de chambre : '.$rent['category'].'</p>';
    echo '<p>Date de début : '.$rent['dateBegin'].'</p>';
    echo '<p>Date de fin : '.$rent['dateEnd'].'</p>';
    echo '<a href="deleteRent.php?id='.$rent['id'].'"><div class="delete-icon"><img src="img/delete.png"></div></a>';
    echo '</div>';
}
?>
</section>
<?php
include 'footer.php';
?>
