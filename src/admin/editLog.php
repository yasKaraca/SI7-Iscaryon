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
    `category`, 
    `dateBegin`, 
    `dateEnd`
    FROM
    `rent`
    WHERE
    `id` = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id',$_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

include 'header.php'; ?>

<form class="book adminAdd" action="doEditLog.php" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="book-item">
        <label class="book-item-libel" for="nom">Nom : </label>
        <input title="nom" type="text" name="nom" value="<?= $row['nom'] ?>"  required>
        <label class="book-item-libel" for="prenom">Prénom : </label>
        <input title="prenom" type="text" name="prenom" value="<?= $row['prenom'] ?>" required>
        <label class="book-item-libel" for="email">E-mail : </label>
        <input title="email" type="email" name="email" value="<?= $row['email'] ?>" required>
    </div>
    <div class="book-item">
        <label class="book-item-libel" for="category">Type de logement : </label>
        <select title="category" name="category">
            <option selected value="<?= $row['category'] ?>"><?= $row['category'] ?></option>
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
        <input title="date début" type="date" name="date1" value="<?= $row['dateBegin'] ?>"required>
        <label class="book-item-libel" for="date2">Date de fin :</label>
        <input title="date fin" type="date" name="date2" value="<?= $row['dateEnd'] ?>"required>
    </div>
    <div class="book-item submit">
        <input type="submit" value="Modifier le logement">
    </div>
</form>

<?php  include 'footer.php'; ?>
