<?php
$logout_url = "http://" . $_GET['uamip'] . ":" . $_GET['uamport'] . "/logoff";
// echo($logout_url)
?>

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">CNL FINAL Team3</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?= $logout_url ?>">Log out</a>
        </li>
    </ul>
</nav>