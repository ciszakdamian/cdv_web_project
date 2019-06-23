<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once("../inc/connector.php");

    $imageCounter = $_POST['imageCounter'];

    foreach(dbQuery("select image, alt, title, description from images i INNER JOIN categories c on i.id_category = c.id_category WHERE c.name = 'O firmie' and image_group = 'Gallery' and image_number = ".$imageCounter.";") as $row) {

        $image = array($row['image'], $row['alt'], $row['title'], $row['description']);
        echo json_encode($image);

    }





}