<?php

require_once("inc/connector.php");

echo '</br> </br> Header </br> ';

foreach(dbQuery("select value from settings where property='site name';") as $row) {

    echo $row['value'];


}

