<?php

require_once("inc/connector.php");

echo '</br> </br> Footer </br> ';


foreach(dbQuery("select value from settings where property='site author';") as $row) {

    echo $row['value'];


}
?>
</body>
</html>
