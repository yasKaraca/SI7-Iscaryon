<?php
require_once "../includes/connexion.php";

    // if(!isset($_GET['id'])) {
    //     header('Location:index.php?noprovideddelete');
    // }
    $requete = 'SELECT
      `nom`,
      `categorie`,
      `planete`,
      `datedebut`,
      `cbnum`
      `cryptograme`
      FROM
      `iscaryon`
      WHERE
      id = :id
      ;';
    $stmt=$conn->prepare($requete);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="dodelete.php" method="post">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <label for="">Supprimer <?=$row['nom'].' '.$row['categorie']?> ?</label><br>
            <input type="submit" value="Supprimer">
        </form>
    </body>
</html>
