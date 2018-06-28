<nav class="nav">
    <ul class="nav-content">
        <li class="nav-item"><a class="nav-item-link" href="bookPlace.php">Réserver un emplacement</a></li>
        <li class="nav-item"><a class="nav-item-link" href="myReservations.php">Mes réservations</a></li>
        <li class="nav-item"><a class="nav-item-link" href="rent.php">Louer un hébergement</a></li>
        <li class="nav-item"><a class="nav-item-link" href="account.php">Mon compte</a></li>
        <li class="nav-item"><a class="nav-item-link" href="logout.php">Déconnexion</a></li>
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