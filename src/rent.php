<?php
include 'header.php';
?>
<form action="doRent.php" method="post">
    <div>
        <label for="category">Choisissez votre hébergement : </label>
        <select title="category" name="category">
            <option value="chambre eco">Chambre double économique</option>
            <option value="chambre confort">Chambre double confort</option>
            <option value="suite eco">Suite économique (4 personnes)</option>
            <option value="suite confort">Suite confort (4 personnes)</option>
            <option value="suite spacieuse">Suite spacieuse (5 personnes)</option>
            <option value="suite luxueuse">Suite luxueuse (5 personnes)</option>
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
        <input type="submit" value="Réserver un hébergement">
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

foreach ($rents as $rent) {
    echo '<div>';
    echo '<p>'.$rent['nom'].'</p>';
    echo '<p>'.$rent['prenom'].'</p>';
    echo '<p>'.$rent['email'].'</p>';
    echo '<p>'.$rent['category'].'</p>';
    echo '<p>'.$rent['dateBegin'].'</p>';
    echo '<p>'.$rent['dateEnd'].'</p>';
    echo '<a href="deleteRent.php?id='.$rent['id'].'">Supprimer</a>';
    echo '</div>';
}
?>