<?php

require_once("inc/connector.php");

echo "<ul>";

foreach(dbQuery("select * from categories;") as $row) {

    echo "<a> <a href='".$row['page_url']."'>".$row['name']."</a></li>";


}

echo "</ul>";