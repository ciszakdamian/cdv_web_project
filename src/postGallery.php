<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once("../inc/connector.php");

    $imageCounter = $_POST['imageCounter'];

    foreach(dbQuery("select image, alt, title, description from images i INNER JOIN categories c on i.id_category = c.id_category WHERE c.name = 'O firmie' and image_group = 'Gallery' and image_number = ".$imageCounter.";") as $row) {

        //echo "<img class='img-fluid' src='data:image/jpg;base64," . $row['image'] . "' /><br/>";
        echo $row['image'];



    }
}