<?php
session_start();
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=space', 'root', 'root');
} catch(PDOException $exception) {
    die("Echec connection BDD");
}