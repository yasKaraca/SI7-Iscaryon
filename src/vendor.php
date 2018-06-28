<?php
require_once 'include/connection.php';
if ($_SESSION['auth']) {
    include 'bookPlace.php';
} else {
    include 'login.php';
}
?>