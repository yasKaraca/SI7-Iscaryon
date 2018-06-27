<?php
require_once 'include/connection.php';

include 'header.php';


if ($_SESSION['auth']) {
    include 'navConnect.php';
} else {
    include 'navUnconnect.php';
}




include 'footer.php';
?>

<script type="text/javascript">
    var open = false;
    $('.burger').click(function () {
        if(open) {
            $('.nav').css('display', 'none');
            open = false;
            return;
        }
        $('.nav').css('display', 'block');
        open = true;
    })
</script>

