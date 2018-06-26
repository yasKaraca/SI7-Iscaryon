<?php
if (!isset($_POST['id'])) {
    header('Location: account.php?error=nopostdatadelete');
    exit;
}
require_once 'include/connection.php';
$delete= "DELETE FROM
  `user`
  WHERE
  id = :id 
;";
$stmt = $conn->prepare($delete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
session_destroy();
header('Location: index.php');