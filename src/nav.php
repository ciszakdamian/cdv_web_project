<nav class="navbar navbar-expand-sm link">

    <?php

    require_once("inc/connector.php");

    foreach(dbQuery("select value from settings where property='company_nav_name';") as $row) {

        echo "<span class='navbar-brand'>".$row['value']."</span>";


    }
    ?>

    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navButton" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navButton">
        <div class="navbar-nav link">

<?php
require_once("inc/connector.php");

foreach(dbQuery("select * from pages;") as $row) {

    echo "<a class='nav-item nav-link' href='".$row['page_url']."'>".$row['name']."</a>";
}
?>

        </div>
    </div>
</nav>
