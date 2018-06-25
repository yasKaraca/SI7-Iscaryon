<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=iscaryon', 'root', '');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
