<?php
if (!isset($_GET['id'])) {
    header('Location: index.php?error=noidprovideddelete');
    exit;
}
require_once 'include/connection.php';

$delete = "DELETE FROM
  `place`
  WHERE
  id = :id 
  ;";
$stmt = $conn->prepare($delete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
header('Location: myReservations.php');