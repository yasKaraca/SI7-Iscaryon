<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="js/jqery.js"></script>
</head>
<body class="body">

<header class="header">
    <a href="index.php"><img src="img/logomobile.png"></a>
    <?php
    if ($_SESSION['auth']) {
        include 'headerConnect.php';
    } else {
        include 'headerUnconnect.php';
    }
    ?>
    <img class="burger open" src="img/menu.svg">
    <img class="burger close" src="img/close.svg">
</header>

<?php
if ($_SESSION['auth']) {
    include 'navConnect.php';
} else {
    include 'navUnconnect.php';
}
?>

