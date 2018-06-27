<?php
if ($_SESSION['auth']) {
    include 'rent.php';
} else {
    include 'login.php';
}
?>