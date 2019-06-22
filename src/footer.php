<footer id="footer" class="row">
    <div class="col-sm-12">
<?php

require_once("inc/connector.php");

foreach(dbQuery("select value from settings where property='site author';") as $row) {

    echo $row['value'];


}
?>
    </div>
</footer>
</body>
</html>

