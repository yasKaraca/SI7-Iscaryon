<nav class="nav">
    <ul class="nav-content">
        <li class="nav-item"><a class="nav-item-link" href="addUser.php">Inscripton</a></li>
        <li class="nav-item"><a class="nav-item-link" href="login.php">Connexion</a></li>
    </ul>
</nav>
<script type="text/javascript">
    var open = false;
    $('.burger').click(function () {
        if(open) {
            $('.nav').css('display', 'none');
            $('.open').css('display', 'block');
            $('.close').css('display', 'none');
            open = false;
            return;
        }
        $('.nav').css('display', 'block');
        $('.open').css('display', 'none');
        $('.close').css('display', 'block');
        open = true;
    })
</script>