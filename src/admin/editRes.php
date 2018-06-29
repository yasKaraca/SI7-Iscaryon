<?php
if(!isset($_GET['id'])) {
    header('Locaction:index.php?error=noidprovidededit');
    exit;
}
require_once '../include/connection.php';
$requete = "SELECT 
    `id`,
    `nom`,
    `prenom`,
    `email`, 
    `planet`, 
    `category`, 
    `dateBegin`, 
    `dateEnd`
    FROM
    `place`
    WHERE
    `id` = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id',$_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

include 'header.php';
?>
<form class="book adminAdd" action="doEditRes.php" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="book-item">
        <label class="book-item-libel" for="nom">Nom :</label>
        <input title="nom" type="text" name="nom" value="<?= $row['nom'] ?>"  required>
        <label class="book-item-libel" for="prenom">Prénom :</label>
        <input title="prenom" type="text" name="prenom" value="<?= $row['prenom'] ?>" required>
        <label class="book-item-libel" for="email">E-mail :</label>
        <input title="email" type="email" name="email" value="<?= $row['email'] ?>" required>
        <label class="book-item-libel" for="planet">Planète :</label>
        <input title="planet" type="text" name="planet" value="<?= $row['planet'] ?>" required>
    </div>
    <div class="book-item">
        <p class="book-item-libel">Type de produit</p>
        <select class="align" title="category" name="category">
            <option selected value="<?= $row['category'] ?>"><?= $row['category'] ?></option>
            <option value="alimentaire">Alimentaire</option>
            <option value="technologie">Technologie</option>
            <option value="textile">Textile</option>
            <option value="pierres précieuses">Pierres précieuses</option>
            <option value="bibelots">Bibelots</option>
            <option value="autre">Autre</option>
        </select>
    </div>
    <div class="book-item">
        <label class="book-item-libel" for="date1">Date de début :</label>
        <input title="date début" type="date" name="date1" value="<?= $row['dateBegin'] ?>"required>
        <label class="book-item-libel" for="date2">Date de fin :</label>
        <input title="date fin" type="date" name="date2" value="<?= $row['dateEnd'] ?>"required>
    </div>
    <div class="book-item submit">
        <input type="submit" value="Modifier la réservation">
    </div>
</form>

<?php  include 'footer.php'; ?>