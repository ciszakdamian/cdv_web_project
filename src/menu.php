<div id="menu" class="row">
    <div class="col-sm-12">
        <nav class="navbar navbar-expand-sm">
<?php
require_once("inc/connector.php");

foreach(dbQuery("select * from categories;") as $row) {

    echo "<a class='nav-item nav-link active' href='".$row['page_url']."'>".$row['name']."</a>";
}
?>
        </nav>
    </div>
</div>

