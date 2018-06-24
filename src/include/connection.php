<?php
/**
 * ce fichier permet de se connecter à la base de données mysql
 */
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=space', 'root', 'root');
} catch(PDOException $exception) {
    die("Echec connection BDD");
}