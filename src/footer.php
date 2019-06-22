<footer id="footer">
<?php

require_once("inc/connector.php");

foreach(dbQuery("select value from settings where property='site author';") as $row) {

    echo $row['value'];


}
?>
</footer>
</body>
</html>

