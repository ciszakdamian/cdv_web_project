<?php

require_once("inc/connector.php");

echo '</br> </br> Footer </br> ';


foreach(dbQuery("select value from settings where property='page author';") as $row) {

    echo $row['value'];


}
