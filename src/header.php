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
<body>

<?php
if ($_SESSION['auth']) {
    include 'headerConnect.php';
} else {
    include 'login.php';
    // include 'addUser.php'; rediriger vers une page d'inscription
}
var_dump($_SESSION);

?>

</body>
</html>